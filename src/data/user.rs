use std::borrow::Cow;

use argon2::Argon2;
use base64::{prelude::BASE64_STANDARD, Engine};
use serde::{ser, Deserialize, Serialize};
use sqlx::{query, query_as, types::time::PrimitiveDateTime, Postgres, Transaction};
use time::OffsetDateTime;

use super::repository::Repository;

enum DecodeError {
    Sqlx(sqlx::Error),
    Serde(rmp_serde::decode::Error),
}

#[derive(Clone, Copy, Debug)]
pub struct UserID(pub i32);

impl ser::Serialize for UserID {
    fn serialize<S>(&self, serializer: S) -> Result<S::Ok, S::Error>
    where
        S: ser::Serializer,
    {
        serializer.serialize_i32(self.0)
    }
}

impl<'de> serde::Deserialize<'de> for UserID {
    fn deserialize<D>(deserializer: D) -> Result<Self, D::Error>
    where
        D: serde::Deserializer<'de>,
    {
        let id = i32::deserialize(deserializer)?;
        Ok(UserID(id))
    }
}

impl From<i32> for UserID {
    fn from(value: i32) -> Self {
        UserID(value)
    }
}

impl From<UserID> for i32 {
    fn from(value: UserID) -> Self {
        value.0
    }
}

#[derive(Deserialize, Serialize)]
pub struct UserSession {
    pub user_id: UserID,
}

#[derive(sqlx::FromRow)]
pub struct User {
    pub user_id: UserID,
    pub user_iid: Cow<'static, str>,
    pub username: String,
    pub password_hash: String,
    pub updated_at: OffsetDateTime,
    pub created_at: OffsetDateTime,
}
pub type UserHashBuf = [u8; 32];

#[derive(sqlx::FromRow)]
pub struct UserSetting {
    pub user_id: UserID,
    pub language: Cow<'static, str>,
    pub is_dark_mode: bool,
    pub updated_at: Option<OffsetDateTime>,
    pub created_at: Option<OffsetDateTime>,
}

