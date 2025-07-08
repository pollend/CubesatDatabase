//https://www.localeplanet.com/compare/simple.html
#[allow(non_camel_case_types)]
#[derive(Clone, Copy, Debug, PartialEq, Eq, Hash)]
pub enum Locale {
    AF,          // Afrikaans
    AF_NA,       // Afrikaans (Namibia)
    AF_ZA,       // Afrikaans (South Africa)
    AK,          // Akan
    AK_GH,       // Akan (Ghana)
    AM,          // Amharic
    AM_ET,       // Amharic (Ethiopia)
    AR,          // Arabic
    AR_AE,       // Arabic (United Arab Emirates)
    AR_BH,       // Arabic (Bahrain)
    AR_DJ,       // Arabic (Djibouti)
    AR_DZ,       // Arabic (Algeria)
    AR_EG,       // Arabic (Egypt)
    AR_EH,       // Arabic (Western Sahara)
    AR_ER,       // Arabic (Eritrea)
    AR_IL,       // Arabic (Israel)
    AR_IQ,       // Arabic (Iraq)
    AR_JO,       // Arabic (Jordan)
    AR_KM,       // Arabic (Comoros)
    AR_KW,       // Arabic (Kuwait)
    AR_LB,       // Arabic (Lebanon)
    AR_LY,       // Arabic (Libya)
    AR_MA,       // Arabic (Morocco)
    AR_MR,       // Arabic (Mauritania)
    AR_OM,       // Arabic (Oman)
    AR_PS,       // Arabic (Palestinian Territories)
    AR_QA,       // Arabic (Qatar)
    AR_SA,       // Arabic (Saudi Arabia)
    AR_SD,       // Arabic (Sudan)
    AR_SO,       // Arabic (Somalia)
    AR_SS,       // Arabic (South Sudan)
    AR_SY,       // Arabic (Syria)
    AR_TD,       // Arabic (Chad)
    AR_TN,       // Arabic (Tunisia)
    AR_YE,       // Arabic (Yemen)
    AS,          // Assamese
    AS_IN,       // Assamese (India)
    ASA,         // Asu
    ASA_TZ,      // Asu (Tanzania)
    AZ,          // Azerbaijani
    AZ_CYRL,     // Azerbaijani (Cyrillic)
    AZ_CYRL_AZ,  // Azerbaijani (Cyrillic, Azerbaijan)
    AZ_LATN,     // Azerbaijani (Latin)
    AZ_LATN_AZ,  // Azerbaijani (Latin, Azerbaijan)
    BAS,         // Basaa
    BE,          // Belarusian
    BE_BY,       // Belarusian (Belarus)
    BEM,         // Bemba
    BEM_ZM,      // Bemba (Zambia)
    BEZ,         // Bena
    BEZ_TZ,      // Bena (Tanzania)
    BG,          // Bulgarian
    BG_BG,       // Bulgarian (Bulgaria)
    BM,          // Bambara
    BM_ML,       // Bambara (Mali)
    BN,          // Bengali
    BN_BD,       // Bengali (Bangladesh)
    BN_IN,       // Bengali (India)
    BO,          // Tibetan
    BO_CN,       // Tibetan (China)
    BO_IN,       // Tibetan (India)
    BR,          // Breton
    BR_FR,       // Breton (France)
    BRX,         // Bodo
    BRX_IN,      // Bodo (India)
    BS,          // Bosnian
    BS_BA,       // Bosnian (Bosnia and Herzegovina)
    CA,          // Catalan
    CA_ES,       // Catalan (Spain)
    CGG,         // Chiga
    CGG_UG,      // Chiga (Uganda)
    CHR,         // Cherokee
    CHR_US,      // Cherokee (United States)
    CS,          // Czech
    CS_CZ,       // Czech (Czech Republic)
    CY,          // Welsh
    CY_GB,       // Welsh (United Kingdom)
    DA,          // Danish
    DA_DK,       // Danish (Denmark)
    DAV,         // Taita
    DAV_KE,      // Taita (Kenya)
    DE,          // German
    DE_AT,       // German (Austria)
    DE_BE,       // German (Belgium)
    DE_CH,       // German (Switzerland)
    DE_DE,       // German (Germany)
    DE_LI,       // German (Liechtenstein)
    DE_LU,       // German (Luxembourg)
    DJE,         // Zarma
    DJE_NE,      // Zarma (Niger)
    DSB,         // Lower Sorbian
    DUA,         // Duala
    DYO,         // Jola-Fonyi
    DYO_SN,      // Jola-Fonyi (Senegal)
    EBU,         // Embu
    EBU_KE,      // Embu (Kenya)
    EE,          // Ewe
    EE_GH,       // Ewe (Ghana)
    EE_TG,       // Ewe (Togo)
    EL,          // Greek
    EL_CY,       // Greek (Cyprus)
    EL_GR,       // Greek (Greece)
    EN,          // English
    EN_AS,       // English (American Samoa)
    EN_AU,       // English (Australia)
    EN_BE,       // English (Belgium)
    EN_BW,       // English (Botswana)
    EN_BZ,       // English (Belize)
    EN_CA,       // English (Canada)
    EN_GB,       // English (United Kingdom)
    EN_GU,       // English (Guam)
    EN_HK,       // English (Hong Kong SAR China)
    EN_IE,       // English (Ireland)
    EN_IN,       // English (India)
    EN_JM,       // English (Jamaica)
    EN_MH,       // English (Marshall Islands)
    EN_MP,       // English (Northern Mariana Islands)
    EN_MT,       // English (Malta)
    EN_MU,       // English (Mauritius)
    EN_NA,       // English (Namibia)
    EN_NZ,       // English (New Zealand)
    EN_PH,       // English (Philippines)
    EN_PK,       // English (Pakistan)
    EN_SG,       // English (Singapore)
    EN_TT,       // English (Trinidad and Tobago)
    EN_UM,       // English (U.S. Minor Outlying Islands)
    EN_US,       // English (United States)
    EN_US_POSIX, // English (United States, Computer)
    EN_VI,       // English (U.S. Virgin Islands)
    EN_ZA,       // English (South Africa)
    EN_ZW,       // English (Zimbabwe)
    EO,          // Esperanto
    ES,          // Spanish
    ES_419,      // Spanish (Latin America)
    ES_AR,       // Spanish (Argentina)
    ES_BO,       // Spanish (Bolivia)
    ES_CL,       // Spanish (Chile)
    ES_CO,       // Spanish (Colombia)
    ES_CR,       // Spanish (Costa Rica)
    ES_DO,       // Spanish (Dominican Republic)
    ES_EC,       // Spanish (Ecuador)
    ES_ES,       // Spanish (Spain)
    ES_GQ,       // Spanish (Equatorial Guinea)
    ES_GT,       // Spanish (Guatemala)
    ES_HN,       // Spanish (Honduras)
    ES_MX,       // Spanish (Mexico)
    ES_NI,       // Spanish (Nicaragua)
    ES_PA,       // Spanish (Panama)
    ES_PE,       // Spanish (Peru)
    ES_PR,       // Spanish (Puerto Rico)
    ES_PY,       // Spanish (Paraguay)
    ES_SV,       // Spanish (El Salvador)
    ES_US,       // Spanish (United States)
    ES_UY,       // Spanish (Uruguay)
    ES_VE,       // Spanish (Venezuela)
    ET,          // Estonian
    ET_EE,       // Estonian (Estonia)
    EU,          // Basque
    EU_ES,       // Basque (Spain)
    FA,          // Persian
    FA_AF,       // Persian (Afghanistan)
    FA_IR,       // Persian (Iran)
    FF,          // Fulah
    FF_SN,       // Fulah (Senegal)
    FI,          // Finnish
    FI_FI,       // Finnish (Finland)
    FIL,         // Filipino
    FIL_PH,      // Filipino (Philippines)
    FO,          // Faroese
    FO_FO,       // Faroese (Faroe Islands)
    FR,          // French
    FR_BE,       // French (Belgium)
    FR_BF,       // French (Burkina Faso)
    FR_BI,       // French (Burundi)
    FR_BJ,       // French (Benin)
    FR_BL,       // French (Saint Barthélemy)
    FR_CA,       // French (Canada)
    FR_CD,       // French (Congo - Kinshasa)
    FR_CF,       // French (Central African Republic)
    FR_CG,       // French (Congo - Brazzaville)
    FR_CH,       // French (Switzerland)
    FR_CI,       // French (Côte d’Ivoire)
    FR_CM,       // French (Cameroon)
    FR_DJ,       // French (Djibouti)
    FR_FR,       // French (France)
    FR_GA,       // French (Gabon)
    FR_GN,       // French (Guinea)
    FR_GP,       // French (Guadeloupe)
    FR_GQ,       // French (Equatorial Guinea)
    FR_KM,       // French (Comoros)
    FR_LU,       // French (Luxembourg)
    FR_MC,       // French (Monaco)
    FR_MF,       // French (Saint Martin)
    FR_MG,       // French (Madagascar)
    FR_ML,       // French (Mali)
    FR_MQ,       // French (Martinique)
    FR_NE,       // French (Niger)
    FR_RE,       // French (Réunion)
    FR_RW,       // French (Rwanda)
    FR_SN,       // French (Senegal)
    FR_TD,       // French (Chad)
    FR_TG,       // French (Togo)
    GA,          // Irish
    GA_IE,       // Irish (Ireland)
    GL,          // Galician
    GL_ES,       // Galician (Spain)
    GSW,         // Swiss German
    GSW_CH,      // Swiss German (Switzerland)
    GU,          // Gujarati
    GU_IN,       // Gujarati (India)
    GUZ,         // Gusii
    GUZ_KE,      // Gusii (Kenya)
    GV,          // Manx
    GV_GB,       // Manx (United Kingdom)
    HA,          // Hausa
    HA_LATN,     // Hausa (Latin)
    HA_LATN_GH,  // Hausa (Latin, Ghana)
    HA_LATN_NE,  // Hausa (Latin, Niger)
    HA_LATN_NG,  // Hausa (Latin, Nigeria)
    HAW,         // Hawaiian
    HAW_US,      // Hawaiian (United States)
    HE,          // Hebrew
    HE_IL,       // Hebrew (Israel)
    HI,          // Hindi
    HI_IN,       // Hindi (India)
    HR,          // Croatian
    HR_HR,       // Croatian (Croatia)
    HU,          // Hungarian
    HU_HU,       // Hungarian (Hungary)
    HY,          // Armenian
    HY_AM,       // Armenian (Armenia)
    ID,          // Indonesian
    ID_ID,       // Indonesian (Indonesia)
    IG,          // Igbo
    IG_NG,       // Igbo (Nigeria)
    II,          // Sichuan Yi
    II_CN,       // Sichuan Yi (China)
    IS,          // Icelandic
    IS_IS,       // Icelandic (Iceland)
    IT,          // Italian
    IT_CH,       // Italian (Switzerland)
    IT_IT,       // Italian (Italy)
    JA,          // Japanese
    JA_JP,       // Japanese (Japan)
    JMC,         // Machame
    JMC_TZ,      // Machame (Tanzania)
    KA,          // Georgian
    KA_GE,       // Georgian (Georgia)
    KAB,         // Kabyle
    KAB_DZ,      // Kabyle (Algeria)
    KAM,         // Kamba
    KAM_KE,      // Kamba (Kenya)
    KDE,         // Makonde
    KDE_TZ,      // Makonde (Tanzania)
    KEA,         // Kabuverdianu
    KEA_CV,      // Kabuverdianu (Cape Verde)
    KHQ,         // Koyra Chiini
    KHQ_ML,      // Koyra Chiini (Mali)
    KI,          // Kikuyu
    KI_KE,       // Kikuyu (Kenya)
    KK,          // Kazakh
    KK_CYRL,     // Kazakh (Cyrillic)
    KK_CYRL_KZ,  // Kazakh (Cyrillic, Kazakhstan)
    KL,          // Kalaallisut
    KL_GL,       // Kalaallisut (Greenland)
    KLN,         // Kalenjin
    KLN_KE,      // Kalenjin (Kenya)
    KM,          // Khmer
    KM_KH,       // Khmer (Cambodia)
    KN,          // Kannada
    KN_IN,       // Kannada (India)
    KO,          // Korean
    KO_KR,       // Korean (South Korea)
    KOK,         // Konkani
    KOK_IN,      // Konkani (India)
    KSB,         // Shambala
    KSB_TZ,      // Shambala (Tanzania)
    KSF,         // Bafia
    KSF_CM,      // Bafia (Cameroon)
    KW,          // Cornish
    KW_GB,       // Cornish (United Kingdom)
    LAG,         // Langi
    LAG_TZ,      // Langi (Tanzania)
    LG,          // Ganda
    LG_UG,       // Ganda (Uganda)
    LT,          // Lithuanian
    LT_LT,       // Lithuanian (Lithuania)
    LUO,         // Luo
    LUO_KE,      // Luo (Kenya)
    LUY,         // Luyia
    LUY_KE,      // Luyia (Kenya)
    LV,          // Latvian
    LV_LV,       // Latvian (Latvia)
    MAS,         // Masai
    MAS_KE,      // Masai (Kenya)
    MAS_TZ,      // Masai (Tanzania)
    MER,         // Meru
    MER_KE,      // Meru (Kenya)
    MFE,         // Morisyen
    MFE_MU,      // Morisyen (Mauritius)
    MG,          // Malagasy
    MG_MG,       // Malagasy (Madagascar)
    MK,          // Macedonian
    MK_MK,       // Macedonian (Macedonia)
    ML,          // Malayalam
    ML_IN,       // Malayalam (India)
    MR,          // Marathi
    MR_IN,       // Marathi (India)
    MS,          // Malay
    MS_BN,       // Malay (Brunei)
    MS_MY,       // Malay (Malaysia)
    MT,          // Maltese
    MT_MT,       // Maltese (Malta)
    MY,          // Burmese
    MY_MM,       // Burmese (Myanmar [Burma])
    NAQ,         // Nama
    NAQ_NA,      // Nama (Namibia)
    NB,          // Norwegian Bokmål
    NB_NO,       // Norwegian Bokmål (Norway)
    ND,          // North Ndebele
    ND_ZW,       // North Ndebele (Zimbabwe)
    NE,          // Nepali
    NE_IN,       // Nepali (India)
    NE_NP,       // Nepali (Nepal)
    NL,          // Dutch
    NL_BE,       // Dutch (Belgium)
    NL_NL,       // Dutch (Netherlands)
    NN,          // Norwegian Nynorsk
    NN_NO,       // Norwegian Nynorsk (Norway)
    NYN,         // Nyankole
    NYN_UG,      // Nyankole (Uganda)
    OM,          // Oromo
    OM_ET,       // Oromo (Ethiopia)
    OM_KE,       // Oromo (Kenya)
    OR,          // Oriya
    OR_IN,       // Oriya (India)
    PA,          // Punjabi
    PA_ARAB,     // Punjabi (Arabic)
    PA_ARAB_PK,  // Punjabi (Arabic, Pakistan)
    PA_GURU,     // Punjabi (Gurmukhi)
    PA_GURU_IN,  // Punjabi (Gurmukhi, India)
    PL,          // Polish
    PL_PL,       // Polish (Poland)
    PS,          // Pashto
    PS_AF,       // Pashto (Afghanistan)
    PT,          // Portuguese
    PT_BR,       // Portuguese (Brazil)
    PT_GW,       // Portuguese (Guinea-Bissau)
    PT_MZ,       // Portuguese (Mozambique)
    PT_PT,       // Portuguese (Portugal)
    RM,          // Romansh
    RM_CH,       // Romansh (Switzerland)
    RN,          // Rundi
    RN_BI,       // Rundi (Burundi)
    RO,          // Romanian
    RO_MD,       // Romanian (Moldova)
    RO_RO,       // Romanian (Romania)
    ROF,         // Rombo
    ROF_TZ,      // Rombo (Tanzania)
    RU,          // Russian
    RU_MD,       // Russian (Moldova)
    RU_RU,       // Russian (Russia)
    RU_UA,       // Russian (Ukraine)
    RW,          // Kinyarwanda
    RW_RW,       // Kinyarwanda (Rwanda)
    RWK,         // Rwa
    RWK_TZ,      // Rwa (Tanzania)
    SAQ,         // Samburu
    SAQ_KE,      // Samburu (Kenya)
    SEH,         // Sena
    SEH_MZ,      // Sena (Mozambique)
    SES,         // Koyraboro Senni
    SES_ML,      // Koyraboro Senni (Mali)
    SG,          // Sango
    SG_CF,       // Sango (Central African Republic)
    SHI,         // Tachelhit
    SHI_LATN,    // Tachelhit (Latin)
    SHI_LATN_MA, // Tachelhit (Latin, Morocco)
    SHI_TFNG,    // Tachelhit (Tifinagh)
    SHI_TFNG_MA, // Tachelhit (Tifinagh, Morocco)
    SI,          // Sinhala
    SI_LK,       // Sinhala (Sri Lanka)
    SK,          // Slovak
    SK_SK,       // Slovak (Slovakia)
    SL,          // Slovenian
    SL_SI,       // Slovenian (Slovenia)
    SN,          // Shona
    SN_ZW,       // Shona (Zimbabwe)
    SO,          // Somali
    SO_DJ,       // Somali (Djibouti)
    SO_ET,       // Somali (Ethiopia)
    SO_KE,       // Somali (Kenya)
    SO_SO,       // Somali (Somalia)
    SQ,          // Albanian
    SQ_AL,       // Albanian (Albania)
    SR,          // Serbian
    SR_CYRL,     // Serbian (Cyrillic)
    SR_CYRL_BA,  // Serbian (Cyrillic, Bosnia and Herzegovina)
    SR_CYRL_ME,  // Serbian (Cyrillic, Montenegro)
    SR_CYRL_RS,  // Serbian (Cyrillic, Serbia)
    SR_LATN,     // Serbian (Latin)
    SR_LATN_BA,  // Serbian (Latin, Bosnia and Herzegovina)
    SR_LATN_ME,  // Serbian (Latin, Montenegro)
    SR_LATN_RS,  // Serbian (Latin, Serbia)
    SV,          // Swedish
    SV_FI,       // Swedish (Finland)
    SV_SE,       // Swedish (Sweden)
    SW,          // Swahili
    SW_KE,       // Swahili (Kenya)
    SW_TZ,       // Swahili (Tanzania)
    TA,          // Tamil
    TA_IN,       // Tamil (India)
    TA_LK,       // Tamil (Sri Lanka)
    TE,          // Telugu
    TE_IN,       // Telugu (India)
    TEO,         // Teso
    TEO_KE,      // Teso (Kenya)
    TEO_UG,      // Teso (Uganda)
    TH,          // Thai
    TH_TH,       // Thai (Thailand)
    TI,          // Tigrinya
    TI_ER,       // Tigrinya (Eritrea)
    TI_ET,       // Tigrinya (Ethiopia)
    TO,          // Tonga
    TO_TO,       // Tonga (Tonga)
    TR,          // Turkish
    TR_TR,       // Turkish (Turkey)
    TZM,         // Central Morocco Tamazight
    TZM_LATN,    // Central Morocco Tamazight (Latin)
    TZM_LATN_MA, // Central Morocco Tamazight (Latin, Morocco)
    UK,          // Ukrainian
    UK_UA,       // Ukrainian (Ukraine)
    UR,          // Urdu
    UR_IN,       // Urdu (India)
    UR_PK,       // Urdu (Pakistan)
    UZ,          // Uzbek
    UZ_ARAB,     // Uzbek (Arabic)
    UZ_ARAB_AF,  // Uzbek (Arabic, Afghanistan)
    UZ_CYRL,     // Uzbek (Cyrillic)
    UZ_CYRL_UZ,  // Uzbek (Cyrillic, Uzbekistan)
    UZ_LATN,     // Uzbek (Latin)
    UZ_LATN_UZ,  // Uzbek (Latin, Uzbekistan)
    VI,          // Vietnamese
    VI_VN,       // Vietnamese (Vietnam)
    VUN,         // Vunjo
    VUN_TZ,      // Vunjo (Tanzania)
    XOG,         // Soga
    XOG_UG,      // Soga (Uganda)
    YO,          // Yoruba
    YO_NG,       // Yoruba (Nigeria)
    ZH,          // Chinese
    ZH_HANS,     // Chinese (Simplified Han)
    ZH_HANS_CN,  // Chinese (Simplified Han, China)
    ZH_HANS_HK,  // Chinese (Simplified Han, Hong Kong SAR China)
    ZH_HANS_MO,  // Chinese (Simplified Han, Macau SAR China)
    ZH_HANS_SG,  // Chinese (Simplified Han, Singapore)
    ZH_HANT,     // Chinese (Traditional Han)
    ZH_HANT_HK,  // Chinese (Traditional Han, Hong Kong SAR China)
    ZH_HANT_MO,  // Chinese (Traditional Han, Macau SAR China)
    ZH_HANT_TW,  // Chinese (Traditional Han, Taiwan)
    ZU,          // Zulu
    ZU_ZA,       // Zulu (South Africa)
}

impl std::fmt::Display for Locale {
    fn fmt(&self, f: &mut std::fmt::Formatter<'_>) -> std::fmt::Result {
        write!(f, "{}", self.to_local_code())
    }
}

impl Locale {
    pub fn display_in_lang(&self) -> &str {
        match self {
            Self::EN => "English",
            Self::EN_US => "English (United States)",
            Self::EN_GB => "English (United Kingdom)",
            Self::EN_CA => "English (Canada)",
            Self::EN_AU => "English (Australia)",
            Self::EN_IN => "English (India)",
            Self::EN_ZA => "English (South Africa)",
            Self::EN_NZ => "English (New Zealand)",
            Self::EN_PH => "English (Philippines)",
            Self::EN_SG => "English (Singapore)",
            Self::EN_IE => "English (Ireland)",
            Self::AR => "العربية",
            _ => "Unknown Language",
        }
    }

    pub fn parse_local_code(input: &str) -> Option<Self> {
        match input {
            "af" => Some(Self::AF),
            "af-NA" => Some(Self::AF_NA),
            "af-ZA" => Some(Self::AF_ZA),
            "ak" => Some(Self::AK),
            "ak-GH" => Some(Self::AK_GH),
            "am" => Some(Self::AM),
            "am-ET" => Some(Self::AM_ET),
            "ar" => Some(Self::AR),
            "ar-AE" => Some(Self::AR_AE),
            "ar-BH" => Some(Self::AR_BH),
            "ar-DJ" => Some(Self::AR_DJ),
            "ar-DZ" => Some(Self::AR_DZ),
            "ar-EG" => Some(Self::AR_EG),
            "ar-EH" => Some(Self::AR_EH),
            "ar-ER" => Some(Self::AR_ER),
            "ar-IL" => Some(Self::AR_IL),
            "ar-IQ" => Some(Self::AR_IQ),
            "ar-JO" => Some(Self::AR_JO),
            "ar-KM" => Some(Self::AR_KM),
            "ar-KW" => Some(Self::AR_KW),
            "ar-LB" => Some(Self::AR_LB),
            "ar-LY" => Some(Self::AR_LY),
            "ar-MA" => Some(Self::AR_MA),
            "ar-MR" => Some(Self::AR_MR),
            "ar-OM" => Some(Self::AR_OM),
            "ar-PS" => Some(Self::AR_PS),
            "ar-QA" => Some(Self::AR_QA),
            "ar-SA" => Some(Self::AR_SA),
            "ar-SD" => Some(Self::AR_SD),
            "ar-SO" => Some(Self::AR_SO),
            "ar-SS" => Some(Self::AR_SS),
            "ar-SY" => Some(Self::AR_SY),
            "ar-TD" => Some(Self::AR_TD),
            "ar-TN" => Some(Self::AR_TN),
            "ar-YE" => Some(Self::AR_YE),
            "as" => Some(Self::AS),
            "as-IN" => Some(Self::AS_IN),
            "asa" => Some(Self::ASA),
            "asa-TZ" => Some(Self::ASA_TZ),
            "az" => Some(Self::AZ),
            "az-Cyrl" => Some(Self::AZ_CYRL),
            "az-Cyrl-AZ" => Some(Self::AZ_CYRL_AZ),
            "az-Latn" => Some(Self::AZ_LATN),
            "az-Latn-AZ" => Some(Self::AZ_LATN_AZ),
            "bas" => Some(Self::BAS),
            "be" => Some(Self::BE),
            "be-BY" => Some(Self::BE_BY),
            "bem" => Some(Self::BEM),
            "bem-ZM" => Some(Self::BEM_ZM),
            "bez" => Some(Self::BEZ),
            "bez-TZ" => Some(Self::BEZ_TZ),
            "bg" => Some(Self::BG),
            "bg-BG" => Some(Self::BG_BG),
            "bm" => Some(Self::BM),
            "bm-ML" => Some(Self::BM_ML),
            "bn" => Some(Self::BN),
            "bn-BD" => Some(Self::BN_BD),
            "bn-IN" => Some(Self::BN_IN),
            "bo" => Some(Self::BO),
            "bo-CN" => Some(Self::BO_CN),
            "bo-IN" => Some(Self::BO_IN),
            "br" => Some(Self::BR),
            "br-FR" => Some(Self::BR_FR),
            "brx" => Some(Self::BRX),
            "brx-IN" => Some(Self::BRX_IN),
            "bs" => Some(Self::BS),
            "bs-BA" => Some(Self::BS_BA),
            "ca" => Some(Self::CA),
            "ca-ES" => Some(Self::CA_ES),
            "cgg" => Some(Self::CGG),
            "cgg-UG" => Some(Self::CGG_UG),
            "chr" => Some(Self::CHR),
            "chr-US" => Some(Self::CHR_US),
            "cs" => Some(Self::CS),
            "cs-CZ" => Some(Self::CS_CZ),
            "cy" => Some(Self::CY),
            "cy-GB" => Some(Self::CY_GB),
            "da" => Some(Self::DA),
            "da-DK" => Some(Self::DA_DK),
            "dav" => Some(Self::DAV),
            "dav-KE" => Some(Self::DAV_KE),
            "de" => Some(Self::DE),
            "de-AT" => Some(Self::DE_AT),
            "de-BE" => Some(Self::DE_BE),
            "de-CH" => Some(Self::DE_CH),
            "de-DE" => Some(Self::DE_DE),
            "de-LI" => Some(Self::DE_LI),
            "de-LU" => Some(Self::DE_LU),
            "dje" => Some(Self::DJE),
            "dje-NE" => Some(Self::DJE_NE),
            "dsb" => Some(Self::DSB),
            "dua" => Some(Self::DUA),
            "dyo" => Some(Self::DYO),
            "dyo-SN" => Some(Self::DYO_SN),
            "ebu" => Some(Self::EBU),
            "ebu-KE" => Some(Self::EBU_KE),
            "ee" => Some(Self::EE),
            "ee-GH" => Some(Self::EE_GH),
            "ee-TG" => Some(Self::EE_TG),
            "el" => Some(Self::EL),
            "el-CY" => Some(Self::EL_CY),
            "el-GR" => Some(Self::EL_GR),
            "en" => Some(Self::EN),
            "en-AS" => Some(Self::EN_AS),
            "en-AU" => Some(Self::EN_AU),
            "en-BE" => Some(Self::EN_BE),
            "en-BW" => Some(Self::EN_BW),
            "en-BZ" => Some(Self::EN_BZ),
            "en-CA" => Some(Self::EN_CA),
            "en-GB" => Some(Self::EN_GB),
            "en-GU" => Some(Self::EN_GU),
            "en-HK" => Some(Self::EN_HK),
            "en-IE" => Some(Self::EN_IE),
            "en-IN" => Some(Self::EN_IN),
            "en-JM" => Some(Self::EN_JM),
            "en-MH" => Some(Self::EN_MH),
            "en-MP" => Some(Self::EN_MP),
            "en-MT" => Some(Self::EN_MT),
            "en-MU" => Some(Self::EN_MU),
            "en-NA" => Some(Self::EN_NA),
            "en-NZ" => Some(Self::EN_NZ),
            "en-PH" => Some(Self::EN_PH),
            "en-PK" => Some(Self::EN_PK),
            "en-SG" => Some(Self::EN_SG),
            "en-TT" => Some(Self::EN_TT),
            "en-UM" => Some(Self::EN_UM),
            "en-US" => Some(Self::EN_US),
            "en-US-POSIX" => Some(Self::EN_US_POSIX),
            "en-VI" => Some(Self::EN_VI),
            "en-ZA" => Some(Self::EN_ZA),
            "en-ZW" => Some(Self::EN_ZW),
            "eo" => Some(Self::EO),
            "es" => Some(Self::ES),
            "es-419" => Some(Self::ES_419),
            "es-AR" => Some(Self::ES_AR),
            "es-BO" => Some(Self::ES_BO),
            "es-CL" => Some(Self::ES_CL),
            "es-CO" => Some(Self::ES_CO),
            "es-CR" => Some(Self::ES_CR),
            "es-DO" => Some(Self::ES_DO),
            "es-EC" => Some(Self::ES_EC),
            "es-ES" => Some(Self::ES_ES),
            "es-GQ" => Some(Self::ES_GQ),
            "es-GT" => Some(Self::ES_GT),
            "es-HN" => Some(Self::ES_HN),
            "es-MX" => Some(Self::ES_MX),
            "es-NI" => Some(Self::ES_NI),
            "es-PA" => Some(Self::ES_PA),
            "es-PE" => Some(Self::ES_PE),
            "es-PR" => Some(Self::ES_PR),
            "es-PY" => Some(Self::ES_PY),
            "es-SV" => Some(Self::ES_SV),
            "es-US" => Some(Self::ES_US),
            "es-UY" => Some(Self::ES_UY),
            "es-VE" => Some(Self::ES_VE),
            "et" => Some(Self::ET),
            "et-EE" => Some(Self::ET_EE),
            "eu" => Some(Self::EU),
            "eu-ES" => Some(Self::EU_ES),
            "fa" => Some(Self::FA),
            "fa-AF" => Some(Self::FA_AF),
            "fa-IR" => Some(Self::FA_IR),
            "ff" => Some(Self::FF),
            "ff-SN" => Some(Self::FF_SN),
            "fi" => Some(Self::FI),
            "fi-FI" => Some(Self::FI_FI),
            "fil" => Some(Self::FIL),
            "fil-PH" => Some(Self::FIL_PH),
            "fo" => Some(Self::FO),
            "fo-FO" => Some(Self::FO_FO),
            "fr" => Some(Self::FR),
            "fr-BE" => Some(Self::FR_BE),
            "fr-BF" => Some(Self::FR_BF),
            "fr-BI" => Some(Self::FR_BI),
            "fr-BJ" => Some(Self::FR_BJ),
            "fr-BL" => Some(Self::FR_BL),
            "fr-CA" => Some(Self::FR_CA),
            "fr-CD" => Some(Self::FR_CD),
            "fr-CF" => Some(Self::FR_CF),
            "fr-CG" => Some(Self::FR_CG),
            "fr-CH" => Some(Self::FR_CH),
            "fr-CI" => Some(Self::FR_CI),
            "fr-CM" => Some(Self::FR_CM),
            "fr-DJ" => Some(Self::FR_DJ),
            "fr-FR" => Some(Self::FR_FR),
            "fr-GA" => Some(Self::FR_GA),
            "fr-GN" => Some(Self::FR_GN),
            "fr-GP" => Some(Self::FR_GP),
            "fr-GQ" => Some(Self::FR_GQ),
            "fr-KM" => Some(Self::FR_KM),
            "fr-LU" => Some(Self::FR_LU),
            "fr-MC" => Some(Self::FR_MC),
            "fr-MF" => Some(Self::FR_MF),
            "fr-MG" => Some(Self::FR_MG),
            "fr-ML" => Some(Self::FR_ML),
            "fr-MQ" => Some(Self::FR_MQ),
            "fr-NE" => Some(Self::FR_NE),
            "fr-RE" => Some(Self::FR_RE),
            "fr-RW" => Some(Self::FR_RW),
            "fr-SN" => Some(Self::FR_SN),
            "fr-TD" => Some(Self::FR_TD),
            "fr-TG" => Some(Self::FR_TG),
            "ga" => Some(Self::GA),
            "ga-IE" => Some(Self::GA_IE),
            "gl" => Some(Self::GL),
            "gl-ES" => Some(Self::GL_ES),
            "gsw" => Some(Self::GSW),
            "gsw-CH" => Some(Self::GSW_CH),
            "gu" => Some(Self::GU),
            "gu-IN" => Some(Self::GU_IN),
            "guz" => Some(Self::GUZ),
            "guz-KE" => Some(Self::GUZ_KE),
            "gv" => Some(Self::GV),
            "gv-GB" => Some(Self::GV_GB),
            "ha" => Some(Self::HA),
            "ha-Latn" => Some(Self::HA_LATN),
            "ha-Latn-GH" => Some(Self::HA_LATN_GH),
            "ha-Latn-NE" => Some(Self::HA_LATN_NE),
            "ha-Latn-NG" => Some(Self::HA_LATN_NG),
            "haw" => Some(Self::HAW),
            "haw-US" => Some(Self::HAW_US),
            "he" => Some(Self::HE),
            "he-IL" => Some(Self::HE_IL),
            "hi" => Some(Self::HI),
            "hi-IN" => Some(Self::HI_IN),
            "hr" => Some(Self::HR),
            "hr-HR" => Some(Self::HR_HR),
            "hu" => Some(Self::HU),
            "hu-HU" => Some(Self::HU_HU),
            "hy" => Some(Self::HY),
            "hy-AM" => Some(Self::HY_AM),
            "id" => Some(Self::ID),
            "id-ID" => Some(Self::ID_ID),
            "ig" => Some(Self::IG),
            "ig-NG" => Some(Self::IG_NG),
            "ii" => Some(Self::II),
            "ii-CN" => Some(Self::II_CN),
            "is" => Some(Self::IS),
            "is-IS" => Some(Self::IS_IS),
            "it" => Some(Self::IT),
            "it-CH" => Some(Self::IT_CH),
            "it-IT" => Some(Self::IT_IT),
            "ja" => Some(Self::JA),
            "ja-JP" => Some(Self::JA_JP),
            "jmc" => Some(Self::JMC),
            "jmc-TZ" => Some(Self::JMC_TZ),
            "ka" => Some(Self::KA),
            "ka-GE" => Some(Self::KA_GE),
            "kab" => Some(Self::KAB),
            "kab-DZ" => Some(Self::KAB_DZ),
            "kam" => Some(Self::KAM),
            "kam-KE" => Some(Self::KAM_KE),
            "kde" => Some(Self::KDE),
            "kde-TZ" => Some(Self::KDE_TZ),
            "kea" => Some(Self::KEA),
            "kea-CV" => Some(Self::KEA_CV),
            "khq" => Some(Self::KHQ),
            "khq-ML" => Some(Self::KHQ_ML),
            "ki" => Some(Self::KI),
            "ki-KE" => Some(Self::KI_KE),
            "kk" => Some(Self::KK),
            "kk-Cyrl" => Some(Self::KK_CYRL),
            "kk-Cyrl-KZ" => Some(Self::KK_CYRL_KZ),
            "kl" => Some(Self::KL),
            "kl-GL" => Some(Self::KL_GL),
            "kln" => Some(Self::KLN),
            "kln-KE" => Some(Self::KLN_KE),
            "km" => Some(Self::KM),
            "km-KH" => Some(Self::KM_KH),
            "kn" => Some(Self::KN),
            "kn-IN" => Some(Self::KN_IN),
            "ko" => Some(Self::KO),
            "ko-KR" => Some(Self::KO_KR),
            "kok" => Some(Self::KOK),
            "kok-IN" => Some(Self::KOK_IN),
            "ksb" => Some(Self::KSB),
            "ksb-TZ" => Some(Self::KSB_TZ),
            "ksf" => Some(Self::KSF),
            "ksf-CM" => Some(Self::KSF_CM),
            "kw" => Some(Self::KW),
            "kw-GB" => Some(Self::KW_GB),
            "lag" => Some(Self::LAG),
            "lag-TZ" => Some(Self::LAG_TZ),
            "lg" => Some(Self::LG),
            "lg-UG" => Some(Self::LG_UG),
            "lt" => Some(Self::LT),
            "lt-LT" => Some(Self::LT_LT),
            "luo" => Some(Self::LUO),
            "luo-KE" => Some(Self::LUO_KE),
            "luy" => Some(Self::LUY),
            "luy-KE" => Some(Self::LUY_KE),
            "lv" => Some(Self::LV),
            "lv-LV" => Some(Self::LV_LV),
            "mas" => Some(Self::MAS),
            "mas-KE" => Some(Self::MAS_KE),
            "mas-TZ" => Some(Self::MAS_TZ),
            "mer" => Some(Self::MER),
            "mer-KE" => Some(Self::MER_KE),
            "mfe" => Some(Self::MFE),
            "mfe-MU" => Some(Self::MFE_MU),
            "mg" => Some(Self::MG),
            "mg-MG" => Some(Self::MG_MG),
            "mk" => Some(Self::MK),
            "mk-MK" => Some(Self::MK_MK),
            "ml" => Some(Self::ML),
            "ml-IN" => Some(Self::ML_IN),
            "mr" => Some(Self::MR),
            "mr-IN" => Some(Self::MR_IN),
            "ms" => Some(Self::MS),
            "ms-BN" => Some(Self::MS_BN),
            "ms-MY" => Some(Self::MS_MY),
            "mt" => Some(Self::MT),
            "mt-MT" => Some(Self::MT_MT),
            "my" => Some(Self::MY),
            "my-MM" => Some(Self::MY_MM),
            "naq" => Some(Self::NAQ),
            "naq-NA" => Some(Self::NAQ_NA),
            "nb" => Some(Self::NB),
            "nb-NO" => Some(Self::NB_NO),
            "nd" => Some(Self::ND),
            "nd-ZW" => Some(Self::ND_ZW),
            "ne" => Some(Self::NE),
            "ne-IN" => Some(Self::NE_IN),
            "ne-NP" => Some(Self::NE_NP),
            "nl" => Some(Self::NL),
            "nl-BE" => Some(Self::NL_BE),
            "nl-NL" => Some(Self::NL_NL),
            "nn" => Some(Self::NN),
            "nn-NO" => Some(Self::NN_NO),
            "nyn" => Some(Self::NYN),
            "nyn-UG" => Some(Self::NYN_UG),
            "om" => Some(Self::OM),
            "om-ET" => Some(Self::OM_ET),
            "om-KE" => Some(Self::OM_KE),
            "or" => Some(Self::OR),
            "or-IN" => Some(Self::OR_IN),
            "pa" => Some(Self::PA),
            "pa-Arab" => Some(Self::PA_ARAB),
            "pa-Arab-PK" => Some(Self::PA_ARAB_PK),
            "pa-Guru" => Some(Self::PA_GURU),
            "pa-Guru-IN" => Some(Self::PA_GURU_IN),
            "pl" => Some(Self::PL),
            "pl-PL" => Some(Self::PL_PL),
            "ps" => Some(Self::PS),
            "ps-AF" => Some(Self::PS_AF),
            "pt" => Some(Self::PT),
            "pt-BR" => Some(Self::PT_BR),
            "pt-GW" => Some(Self::PT_GW),
            "pt-MZ" => Some(Self::PT_MZ),
            "pt-PT" => Some(Self::PT_PT),
            "rm" => Some(Self::RM),
            "rm-CH" => Some(Self::RM_CH),
            "rn" => Some(Self::RN),
            "rn-BI" => Some(Self::RN_BI),
            "ro" => Some(Self::RO),
            "ro-MD" => Some(Self::RO_MD),
            "ro-RO" => Some(Self::RO_RO),
            "rof" => Some(Self::ROF),
            "rof-TZ" => Some(Self::ROF_TZ),
            "ru" => Some(Self::RU),
            "ru-MD" => Some(Self::RU_MD),
            "ru-RU" => Some(Self::RU_RU),
            "ru-UA" => Some(Self::RU_UA),
            "rw" => Some(Self::RW),
            "rw-RW" => Some(Self::RW_RW),
            "rwk" => Some(Self::RWK),
            "rwk-TZ" => Some(Self::RWK_TZ),
            "saq" => Some(Self::SAQ),
            "saq-KE" => Some(Self::SAQ_KE),
            "seh" => Some(Self::SEH),
            "seh-MZ" => Some(Self::SEH_MZ),
            "ses" => Some(Self::SES),
            "ses-ML" => Some(Self::SES_ML),
            "sg" => Some(Self::SG),
            "sg-CF" => Some(Self::SG_CF),
            "shi" => Some(Self::SHI),
            "shi-Latn" => Some(Self::SHI_LATN),
            "shi-Latn-MA" => Some(Self::SHI_LATN_MA),
            "shi-Tfng" => Some(Self::SHI_TFNG),
            "shi-Tfng-MA" => Some(Self::SHI_TFNG_MA),
            "si" => Some(Self::SI),
            "si-LK" => Some(Self::SI_LK),
            "sk" => Some(Self::SK),
            "sk-SK" => Some(Self::SK_SK),
            "sl" => Some(Self::SL),
            "sl-SI" => Some(Self::SL_SI),
            "sn" => Some(Self::SN),
            "sn-ZW" => Some(Self::SN_ZW),
            "so" => Some(Self::SO),
            "so-DJ" => Some(Self::SO_DJ),
            "so-ET" => Some(Self::SO_ET),
            "so-KE" => Some(Self::SO_KE),
            "so-SO" => Some(Self::SO_SO),
            "sq" => Some(Self::SQ),
            "sq-AL" => Some(Self::SQ_AL),
            "sr" => Some(Self::SR),
            "sr-Cyrl" => Some(Self::SR_CYRL),
            "sr-Cyrl-BA" => Some(Self::SR_CYRL_BA),
            "sr-Cyrl-ME" => Some(Self::SR_CYRL_ME),
            "sr-Cyrl-RS" => Some(Self::SR_CYRL_RS),
            "sr-Latn" => Some(Self::SR_LATN),
            "sr-Latn-BA" => Some(Self::SR_LATN_BA),
            "sr-Latn-ME" => Some(Self::SR_LATN_ME),
            "sr-Latn-RS" => Some(Self::SR_LATN_RS),
            "sv" => Some(Self::SV),
            "sv-FI" => Some(Self::SV_FI),
            "sv-SE" => Some(Self::SV_SE),
            "sw" => Some(Self::SW),
            "sw-KE" => Some(Self::SW_KE),
            "sw-TZ" => Some(Self::SW_TZ),
            "ta" => Some(Self::TA),
            "ta-IN" => Some(Self::TA_IN),
            "ta-LK" => Some(Self::TA_LK),
            "te" => Some(Self::TE),
            "te-IN" => Some(Self::TE_IN),
            "teo" => Some(Self::TEO),
            "teo-KE" => Some(Self::TEO_KE),
            "teo-UG" => Some(Self::TEO_UG),
            "th" => Some(Self::TH),
            "th-TH" => Some(Self::TH_TH),
            "ti" => Some(Self::TI),
            "ti-ER" => Some(Self::TI_ER),
            "ti-ET" => Some(Self::TI_ET),
            "to" => Some(Self::TO),
            "to-TO" => Some(Self::TO_TO),
            "tr" => Some(Self::TR),
            "tr-TR" => Some(Self::TR_TR),
            "tzm" => Some(Self::TZM),
            "tzm-Latn" => Some(Self::TZM_LATN),
            "tzm-Latn-MA" => Some(Self::TZM_LATN_MA),
            "uk" => Some(Self::UK),
            "uk-UA" => Some(Self::UK_UA),
            "ur" => Some(Self::UR),
            "ur-IN" => Some(Self::UR_IN),
            "ur-PK" => Some(Self::UR_PK),
            "uz" => Some(Self::UZ),
            "uz-Arab" => Some(Self::UZ_ARAB),
            "uz-Arab-AF" => Some(Self::UZ_ARAB_AF),
            "uz-Cyrl" => Some(Self::UZ_CYRL),
            "uz-Cyrl-UZ" => Some(Self::UZ_CYRL_UZ),
            "uz-Latn" => Some(Self::UZ_LATN),
            "uz-Latn-UZ" => Some(Self::UZ_LATN_UZ),
            "vi" => Some(Self::VI),
            "vi-VN" => Some(Self::VI_VN),
            "vun" => Some(Self::VUN),
            "vun-TZ" => Some(Self::VUN_TZ),
            "xog" => Some(Self::XOG),
            "xog-UG" => Some(Self::XOG_UG),
            "yo" => Some(Self::YO),
            "yo-NG" => Some(Self::YO_NG),
            "zh" => Some(Self::ZH),
            "zh-Hans" => Some(Self::ZH_HANS),
            "zh-Hans-CN" => Some(Self::ZH_HANS_CN),
            "zh-Hans-HK" => Some(Self::ZH_HANS_HK),
            "zh-Hans-MO" => Some(Self::ZH_HANS_MO),
            "zh-Hans-SG" => Some(Self::ZH_HANS_SG),
            "zh-Hant" => Some(Self::ZH_HANT),
            "zh-Hant-HK" => Some(Self::ZH_HANT_HK),
            "zh-Hant-MO" => Some(Self::ZH_HANT_MO),
            "zh-Hant-TW" => Some(Self::ZH_HANT_TW),
            "zu" => Some(Self::ZU),
            "zu-ZA" => Some(Self::ZU_ZA),
            // The catch-all arm returns None for any unrecognized input.
            _ => None,
        }
    }

    pub fn to_local_code(&self) -> &'static str {
        match self {
            Self::AF => "af",
            Self::AF_NA => "af-NA",
            Self::AF_ZA => "af-ZA",
            Self::AK => "ak",
            Self::AK_GH => "ak-GH",
            Self::AM => "am",
            Self::AM_ET => "am-ET",
            Self::AR => "ar",
            Self::AR_AE => "ar-AE",
            Self::AR_BH => "ar-BH",
            Self::AR_DJ => "ar-DJ",
            Self::AR_DZ => "ar-DZ",
            Self::AR_EG => "ar-EG",
            Self::AR_EH => "ar-EH",
            Self::AR_ER => "ar-ER",
            Self::AR_IL => "ar-IL",
            Self::AR_IQ => "ar-IQ",
            Self::AR_JO => "ar-JO",
            Self::AR_KM => "ar-KM",
            Self::AR_KW => "ar-KW",
            Self::AR_LB => "ar-LB",
            Self::AR_LY => "ar-LY",
            Self::AR_MA => "ar-MA",
            Self::AR_MR => "ar-MR",
            Self::AR_OM => "ar-OM",
            Self::AR_PS => "ar-PS",
            Self::AR_QA => "ar-QA",
            Self::AR_SA => "ar-SA",
            Self::AR_SD => "ar-SD",
            Self::AR_SO => "ar-SO",
            Self::AR_SS => "ar-SS",
            Self::AR_SY => "ar-SY",
            Self::AR_TD => "ar-TD",
            Self::AR_TN => "ar-TN",
            Self::AR_YE => "ar-YE",
            Self::AS => "as",
            Self::AS_IN => "as-IN",
            Self::ASA => "asa",
            Self::ASA_TZ => "asa-TZ",
            Self::AZ => "az",
            Self::AZ_CYRL => "az-Cyrl",
            Self::AZ_CYRL_AZ => "az-Cyrl-AZ",
            Self::AZ_LATN => "az-Latn",
            Self::AZ_LATN_AZ => "az-Latn-AZ",
            Self::BAS => "bas",
            Self::BE => "be",
            Self::BE_BY => "be-BY",
            Self::BEM => "bem",
            Self::BEM_ZM => "bem-ZM",
            Self::BEZ => "bez",
            Self::BEZ_TZ => "bez-TZ",
            Self::BG => "bg",
            Self::BG_BG => "bg-BG",
            Self::BM => "bm",
            Self::BM_ML => "bm-ML",
            Self::BN => "bn",
            Self::BN_BD => "bn-BD",
            Self::BN_IN => "bn-IN",
            Self::BO => "bo",
            Self::BO_CN => "bo-CN",
            Self::BO_IN => "bo-IN",
            Self::BR => "br",
            Self::BR_FR => "br-FR",
            Self::BRX => "brx",
            Self::BRX_IN => "brx-IN",
            Self::BS => "bs",
            Self::BS_BA => "bs-BA",
            Self::CA => "ca",
            Self::CA_ES => "ca-ES",
            Self::CGG => "cgg",
            Self::CGG_UG => "cgg-UG",
            Self::CHR => "chr",
            Self::CHR_US => "chr-US",
            Self::CS => "cs",
            Self::CS_CZ => "cs-CZ",
            Self::CY => "cy",
            Self::CY_GB => "cy-GB",
            Self::DA => "da",
            Self::DA_DK => "da-DK",
            Self::DAV => "dav",
            Self::DAV_KE => "dav-KE",
            Self::DE => "de",
            Self::DE_AT => "de-AT",
            Self::DE_BE => "de-BE",
            Self::DE_CH => "de-CH",
            Self::DE_DE => "de-DE",
            Self::DE_LI => "de-LI",
            Self::DE_LU => "de-LU",
            Self::DJE => "dje",
            Self::DJE_NE => "dje-NE",
            Self::DSB => "dsb",
            Self::DUA => "dua",
            Self::DYO => "dyo",
            Self::DYO_SN => "dyo-SN",
            Self::EBU => "ebu",
            Self::EBU_KE => "ebu-KE",
            Self::EE => "ee",
            Self::EE_GH => "ee-GH",
            Self::EE_TG => "ee-TG",
            Self::EL => "el",
            Self::EL_CY => "el-CY",
            Self::EL_GR => "el-GR",
            Self::EN => "en",
            Self::EN_AS => "en-AS",
            Self::EN_AU => "en-AU",
            Self::EN_BE => "en-BE",
            Self::EN_BW => "en-BW",
            Self::EN_BZ => "en-BZ",
            Self::EN_CA => "en-CA",
            Self::EN_GB => "en-GB",
            Self::EN_GU => "en-GU",
            Self::EN_HK => "en-HK",
            Self::EN_IE => "en-IE",
            Self::EN_IN => "en-IN",
            Self::EN_JM => "en-JM",
            Self::EN_MH => "en-MH",
            Self::EN_MP => "en-MP",
            Self::EN_MT => "en-MT",
            Self::EN_MU => "en-MU",
            Self::EN_NA => "en-NA",
            Self::EN_NZ => "en-NZ",
            Self::EN_PH => "en-PH",
            Self::EN_PK => "en-PK",
            Self::EN_SG => "en-SG",
            Self::EN_TT => "en-TT",
            Self::EN_UM => "en-UM",
            Self::EN_US => "en-US",
            Self::EN_US_POSIX => "en-US-POSIX",
            Self::EN_VI => "en-VI",
            Self::EN_ZA => "en-ZA",
            Self::EN_ZW => "en-ZW",
            Self::EO => "eo",
            Self::ES => "es",
            Self::ES_419 => "es-419",
            Self::ES_AR => "es-AR",
            Self::ES_BO => "es-BO",
            Self::ES_CL => "es-CL",
            Self::ES_CO => "es-CO",
            Self::ES_CR => "es-CR",
            Self::ES_DO => "es-DO",
            Self::ES_EC => "es-EC",
            Self::ES_ES => "es-ES",
            Self::ES_GQ => "es-GQ",
            Self::ES_GT => "es-GT",
            Self::ES_HN => "es-HN",
            Self::ES_MX => "es-MX",
            Self::ES_NI => "es-NI",
            Self::ES_PA => "es-PA",
            Self::ES_PE => "es-PE",
            Self::ES_PR => "es-PR",
            Self::ES_PY => "es-PY",
            Self::ES_SV => "es-SV",
            Self::ES_US => "es-US",
            Self::ES_UY => "es-UY",
            Self::ES_VE => "es-VE",
            Self::ET => "et",
            Self::ET_EE => "et-EE",
            Self::EU => "eu",
            Self::EU_ES => "eu-ES",
            Self::FA => "fa",
            Self::FA_AF => "fa-AF",
            Self::FA_IR => "fa-IR",
            Self::FF => "ff",
            Self::FF_SN => "ff-SN",
            Self::FI => "fi",
            Self::FI_FI => "fi-FI",
            Self::FIL => "fil",
            Self::FIL_PH => "fil-PH",
            Self::FO => "fo",
            Self::FO_FO => "fo-FO",
            Self::FR => "fr",
            Self::FR_BE => "fr-BE",
            Self::FR_BF => "fr-BF",
            Self::FR_BI => "fr-BI",
            Self::FR_BJ => "fr-BJ",
            Self::FR_BL => "fr-BL",
            Self::FR_CA => "fr-CA",
            Self::FR_CD => "fr-CD",
            Self::FR_CF => "fr-CF",
            Self::FR_CG => "fr-CG",
            Self::FR_CH => "fr-CH",
            Self::FR_CI => "fr-CI",
            Self::FR_CM => "fr-CM",
            Self::FR_DJ => "fr-DJ",
            Self::FR_FR => "fr-FR",
            Self::FR_GA => "fr-GA",
            Self::FR_GN => "fr-GN",
            Self::FR_GP => "fr-GP",
            Self::FR_GQ => "fr-GQ",
            Self::FR_KM => "fr-KM",
            Self::FR_LU => "fr-LU",
            Self::FR_MC => "fr-MC",
            Self::FR_MF => "fr-MF",
            Self::FR_MG => "fr-MG",
            Self::FR_ML => "fr-ML",
            Self::FR_MQ => "fr-MQ",
            Self::FR_NE => "fr-NE",
            Self::FR_RE => "fr-RE",
            Self::FR_RW => "fr-RW",
            Self::FR_SN => "fr-SN",
            Self::FR_TD => "fr-TD",
            Self::FR_TG => "fr-TG",
            Self::GA => "ga",
            Self::GA_IE => "ga-IE",
            Self::GL => "gl",
            Self::GL_ES => "gl-ES",
            Self::GSW => "gsw",
            Self::GSW_CH => "gsw-CH",
            Self::GU => "gu",
            Self::GU_IN => "gu-IN",
            Self::GUZ => "guz",
            Self::GUZ_KE => "guz-KE",
            Self::GV => "gv",
            Self::GV_GB => "gv-GB",
            Self::HA => "ha",
            Self::HA_LATN => "ha-Latn",
            Self::HA_LATN_GH => "ha-Latn-GH",
            Self::HA_LATN_NE => "ha-Latn-NE",
            Self::HA_LATN_NG => "ha-Latn-NG",
            Self::HAW => "haw",
            Self::HAW_US => "haw-US",
            Self::HE => "he",
            Self::HE_IL => "he-IL",
            Self::HI => "hi",
            Self::HI_IN => "hi-IN",
            Self::HR => "hr",
            Self::HR_HR => "hr-HR",
            Self::HU => "hu",
            Self::HU_HU => "hu-HU",
            Self::HY => "hy",
            Self::HY_AM => "hy-AM",
            Self::ID => "id",
            Self::ID_ID => "id-ID",
            Self::IG => "ig",
            Self::IG_NG => "ig-NG",
            Self::II => "ii",
            Self::II_CN => "ii-CN",
            Self::IS => "is",
            Self::IS_IS => "is-IS",
            Self::IT => "it",
            Self::IT_CH => "it-CH",
            Self::IT_IT => "it-IT",
            Self::JA => "ja",
            Self::JA_JP => "ja-JP",
            Self::JMC => "jmc",
            Self::JMC_TZ => "jmc-TZ",
            Self::KA => "ka",
            Self::KA_GE => "ka-GE",
            Self::KAB => "kab",
            Self::KAB_DZ => "kab-DZ",
            Self::KAM => "kam",
            Self::KAM_KE => "kam-KE",
            Self::KDE => "kde",
            Self::KDE_TZ => "kde-TZ",
            Self::KEA => "kea",
            Self::KEA_CV => "kea-CV",
            Self::KHQ => "khq",
            Self::KHQ_ML => "khq-ML",
            Self::KI => "ki",
            Self::KI_KE => "ki-KE",
            Self::KK => "kk",
            Self::KK_CYRL => "kk-Cyrl",
            Self::KK_CYRL_KZ => "kk-Cyrl-KZ",
            Self::KL => "kl",
            Self::KL_GL => "kl-GL",
            Self::KLN => "kln",
            Self::KLN_KE => "kln-KE",
            Self::KM => "km",
            Self::KM_KH => "km-KH",
            Self::KN => "kn",
            Self::KN_IN => "kn-IN",
            Self::KO => "ko",
            Self::KO_KR => "ko-KR",
            Self::KOK => "kok",
            Self::KOK_IN => "kok-IN",
            Self::KSB => "ksb",
            Self::KSB_TZ => "ksb-TZ",
            Self::KSF => "ksf",
            Self::KSF_CM => "ksf-CM",
            Self::KW => "kw",
            Self::KW_GB => "kw-GB",
            Self::LAG => "lag",
            Self::LAG_TZ => "lag-TZ",
            Self::LG => "lg",
            Self::LG_UG => "lg-UG",
            Self::LT => "lt",
            Self::LT_LT => "lt-LT",
            Self::LUO => "luo",
            Self::LUO_KE => "luo-KE",
            Self::LUY => "luy",
            Self::LUY_KE => "luy-KE",
            Self::LV => "lv",
            Self::LV_LV => "lv-LV",
            Self::MAS => "mas",
            Self::MAS_KE => "mas-KE",
            Self::MAS_TZ => "mas-TZ",
            Self::MER => "mer",
            Self::MER_KE => "mer-KE",
            Self::MFE => "mfe",
            Self::MFE_MU => "mfe-MU",
            Self::MG => "mg",
            Self::MG_MG => "mg-MG",
            Self::MK => "mk",
            Self::MK_MK => "mk-MK",
            Self::ML => "ml",
            Self::ML_IN => "ml-IN",
            Self::MR => "mr",
            Self::MR_IN => "mr-IN",
            Self::MS => "ms",
            Self::MS_BN => "ms-BN",
            Self::MS_MY => "ms-MY",
            Self::MT => "mt",
            Self::MT_MT => "mt-MT",
            Self::MY => "my",
            Self::MY_MM => "my-MM",
            Self::NAQ => "naq",
            Self::NAQ_NA => "naq-NA",
            Self::NB => "nb",
            Self::NB_NO => "nb-NO",
            Self::ND => "nd",
            Self::ND_ZW => "nd-ZW",
            Self::NE => "ne",
            Self::NE_IN => "ne-IN",
            Self::NE_NP => "ne-NP",
            Self::NL => "nl",
            Self::NL_BE => "nl-BE",
            Self::NL_NL => "nl-NL",
            Self::NN => "nn",
            Self::NN_NO => "nn-NO",
            Self::NYN => "nyn",
            Self::NYN_UG => "nyn-UG",
            Self::OM => "om",
            Self::OM_ET => "om-ET",
            Self::OM_KE => "om-KE",
            Self::OR => "or",
            Self::OR_IN => "or-IN",
            Self::PA => "pa",
            Self::PA_ARAB => "pa-Arab",
            Self::PA_ARAB_PK => "pa-Arab-PK",
            Self::PA_GURU => "pa-Guru",
            Self::PA_GURU_IN => "pa-Guru-IN",
            Self::PL => "pl",
            Self::PL_PL => "pl-PL",
            Self::PS => "ps",
            Self::PS_AF => "ps-AF",
            Self::PT => "pt",
            Self::PT_BR => "pt-BR",
            Self::PT_GW => "pt-GW",
            Self::PT_MZ => "pt-MZ",
            Self::PT_PT => "pt-PT",
            Self::RM => "rm",
            Self::RM_CH => "rm-CH",
            Self::RN => "rn",
            Self::RN_BI => "rn-BI",
            Self::RO => "ro",
            Self::RO_MD => "ro-MD",
            Self::RO_RO => "ro-RO",
            Self::ROF => "rof",
            Self::ROF_TZ => "rof-TZ",
            Self::RU => "ru",
            Self::RU_MD => "ru-MD",
            Self::RU_RU => "ru-RU",
            Self::RU_UA => "ru-UA",
            Self::RW => "rw",
            Self::RW_RW => "rw-RW",
            Self::RWK => "rwk",
            Self::RWK_TZ => "rwk-TZ",
            Self::SAQ => "saq",
            Self::SAQ_KE => "saq-KE",
            Self::SEH => "seh",
            Self::SEH_MZ => "seh-MZ",
            Self::SES => "ses",
            Self::SES_ML => "ses-ML",
            Self::SG => "sg",
            Self::SG_CF => "sg-CF",
            Self::SHI => "shi",
            Self::SHI_LATN => "shi-Latn",
            Self::SHI_LATN_MA => "shi-Latn-MA",
            Self::SHI_TFNG => "shi-Tfng",
            Self::SHI_TFNG_MA => "shi-Tfng-MA",
            Self::SI => "si",
            Self::SI_LK => "si-LK",
            Self::SK => "sk",
            Self::SK_SK => "sk-SK",
            Self::SL => "sl",
            Self::SL_SI => "sl-SI",
            Self::SN => "sn",
            Self::SN_ZW => "sn-ZW",
            Self::SO => "so",
            Self::SO_DJ => "so-DJ",
            Self::SO_ET => "so-ET",
            Self::SO_KE => "so-KE",
            Self::SO_SO => "so-SO",
            Self::SQ => "sq",
            Self::SQ_AL => "sq-AL",
            Self::SR => "sr",
            Self::SR_CYRL => "sr-Cyrl",
            Self::SR_CYRL_BA => "sr-Cyrl-BA",
            Self::SR_CYRL_ME => "sr-Cyrl-ME",
            Self::SR_CYRL_RS => "sr-Cyrl-RS",
            Self::SR_LATN => "sr-Latn",
            Self::SR_LATN_BA => "sr-Latn-BA",
            Self::SR_LATN_ME => "sr-Latn-ME",
            Self::SR_LATN_RS => "sr-Latn-RS",
            Self::SV => "sv",
            Self::SV_FI => "sv-FI",
            Self::SV_SE => "sv-SE",
            Self::SW => "sw",
            Self::SW_KE => "sw-KE",
            Self::SW_TZ => "sw-TZ",
            Self::TA => "ta",
            Self::TA_IN => "ta-IN",
            Self::TA_LK => "ta-LK",
            Self::TE => "te",
            Self::TE_IN => "te-IN",
            Self::TEO => "teo",
            Self::TEO_KE => "teo-KE",
            Self::TEO_UG => "teo-UG",
            Self::TH => "th",
            Self::TH_TH => "th-TH",
            Self::TI => "ti",
            Self::TI_ER => "ti-ER",
            Self::TI_ET => "ti-ET",
            Self::TO => "to",
            Self::TO_TO => "to-TO",
            Self::TR => "tr",
            Self::TR_TR => "tr-TR",
            Self::TZM => "tzm",
            Self::TZM_LATN => "tzm-Latn",
            Self::TZM_LATN_MA => "tzm-Latn-MA",
            Self::UK => "uk",
            Self::UK_UA => "uk-UA",
            Self::UR => "ur",
            Self::UR_IN => "ur-IN",
            Self::UR_PK => "ur-PK",
            Self::UZ => "uz",
            Self::UZ_ARAB => "uz-Arab",
            Self::UZ_ARAB_AF => "uz-Arab-AF",
            Self::UZ_CYRL => "uz-Cyrl",
            Self::UZ_CYRL_UZ => "uz-Cyrl-UZ",
            Self::UZ_LATN => "uz-Latn",
            Self::UZ_LATN_UZ => "uz-Latn-UZ",
            Self::VI => "vi",
            Self::VI_VN => "vi-VN",
            Self::VUN => "vun",
            Self::VUN_TZ => "vun-TZ",
            Self::XOG => "xog",
            Self::XOG_UG => "xog-UG",
            Self::YO => "yo",
            Self::YO_NG => "yo-NG",
            Self::ZH => "zh",
            Self::ZH_HANS => "zh-Hans",
            Self::ZH_HANS_CN => "zh-Hans-CN",
            Self::ZH_HANS_HK => "zh-Hans-HK",
            Self::ZH_HANS_MO => "zh-Hans-MO",
            Self::ZH_HANS_SG => "zh-Hans-SG",
            Self::ZH_HANT => "zh-Hant",
            Self::ZH_HANT_HK => "zh-Hant-HK",
            Self::ZH_HANT_MO => "zh-Hant-MO",
            Self::ZH_HANT_TW => "zh-Hant-TW",
            Self::ZU => "zu",
            Self::ZU_ZA => "zu-ZA",
        }
    }

    pub fn to_display(&self) -> &str {
        match self {
            Self::AF => "Afrikaans",
            Self::AF_NA => "Afrikaans (Namibia)",
            Self::AF_ZA => "Afrikaans (South Africa)",
            Self::AK => "Akan",
            Self::AK_GH => "Akan (Ghana)",
            Self::AM => "Amharic",
            Self::AM_ET => "Amharic (Ethiopia)",
            Self::AR => "Arabic",
            Self::AR_AE => "Arabic (United Arab Emirates)",
            Self::AR_BH => "Arabic (Bahrain)",
            Self::AR_DJ => "Arabic (Djibouti)",
            Self::AR_DZ => "Arabic (Algeria)",
            Self::AR_EG => "Arabic (Egypt)",
            Self::AR_EH => "Arabic (Western Sahara)",
            Self::AR_ER => "Arabic (Eritrea)",
            Self::AR_IL => "Arabic (Israel)",
            Self::AR_IQ => "Arabic (Iraq)",
            Self::AR_JO => "Arabic (Jordan)",
            Self::AR_KM => "Arabic (Comoros)",
            Self::AR_KW => "Arabic (Kuwait)",
            Self::AR_LB => "Arabic (Lebanon)",
            Self::AR_LY => "Arabic (Libya)",
            Self::AR_MA => "Arabic (Morocco)",
            Self::AR_MR => "Arabic (Mauritania)",
            Self::AR_OM => "Arabic (Oman)",
            Self::AR_PS => "Arabic (Palestinian Territories)",
            Self::AR_QA => "Arabic (Qatar)",
            Self::AR_SA => "Arabic (Saudi Arabia)",
            Self::AR_SD => "Arabic (Sudan)",
            Self::AR_SO => "Arabic (Somalia)",
            Self::AR_SS => "Arabic (South Sudan)",
            Self::AR_SY => "Arabic (Syria)",
            Self::AR_TD => "Arabic (Chad)",
            Self::AR_TN => "Arabic (Tunisia)",
            Self::AR_YE => "Arabic (Yemen)",
            Self::AS => "Assamese",
            Self::AS_IN => "Assamese (India)",
            Self::ASA => "Asu",
            Self::ASA_TZ => "Asu (Tanzania)",
            Self::AZ => "Azerbaijani",
            Self::AZ_CYRL => "Azerbaijani (Cyrillic)",
            Self::AZ_CYRL_AZ => "Azerbaijani (Cyrillic, Azerbaijan)",
            Self::AZ_LATN => "Azerbaijani (Latin)",
            Self::AZ_LATN_AZ => "Azerbaijani (Latin, Azerbaijan)",
            Self::BAS => "Basaa",
            Self::BE => "Belarusian",
            Self::BE_BY => "Belarusian (Belarus)",
            Self::BEM => "Bemba",
            Self::BEM_ZM => "Bemba (Zambia)",
            Self::BEZ => "Bena",
            Self::BEZ_TZ => "Bena (Tanzania)",
            Self::BG => "Bulgarian",
            Self::BG_BG => "Bulgarian (Bulgaria)",
            Self::BM => "Bambara",
            Self::BM_ML => "Bambara (Mali)",
            Self::BN => "Bengali",
            Self::BN_BD => "Bengali (Bangladesh)",
            Self::BN_IN => "Bengali (India)",
            Self::BO => "Tibetan",
            Self::BO_CN => "Tibetan (China)",
            Self::BO_IN => "Tibetan (India)",
            Self::BR => "Breton",
            Self::BR_FR => "Breton (France)",
            Self::BRX => "Bodo",
            Self::BRX_IN => "Bodo (India)",
            Self::BS => "Bosnian",
            Self::BS_BA => "Bosnian (Bosnia and Herzegovina)",
            Self::CA => "Catalan",
            Self::CA_ES => "Catalan (Spain)",
            Self::CGG => "Chiga",
            Self::CGG_UG => "Chiga (Uganda)",
            Self::CHR => "Cherokee",
            Self::CHR_US => "Cherokee (United States)",
            Self::CS => "Czech",
            Self::CS_CZ => "Czech (Czech Republic)",
            Self::CY => "Welsh",
            Self::CY_GB => "Welsh (United Kingdom)",
            Self::DA => "Danish",
            Self::DA_DK => "Danish (Denmark)",
            Self::DAV => "Taita",
            Self::DAV_KE => "Taita (Kenya)",
            Self::DE => "German",
            Self::DE_AT => "German (Austria)",
            Self::DE_BE => "German (Belgium)",
            Self::DE_CH => "German (Switzerland)",
            Self::DE_DE => "German (Germany)",
            Self::DE_LI => "German (Liechtenstein)",
            Self::DE_LU => "German (Luxembourg)",
            Self::DJE => "Zarma",
            Self::DJE_NE => "Zarma (Niger)",
            Self::DSB => "Lower Sorbian",
            Self::DUA => "Duala",
            Self::DYO => "Jola-Fonyi",
            Self::DYO_SN => "Jola-Fonyi (Senegal)",
            Self::EBU => "Embu",
            Self::EBU_KE => "Embu (Kenya)",
            Self::EE => "Ewe",
            Self::EE_GH => "Ewe (Ghana)",
            Self::EE_TG => "Ewe (Togo)",
            Self::EL => "Greek",
            Self::EL_CY => "Greek (Cyprus)",
            Self::EL_GR => "Greek (Greece)",
            Self::EN => "English",
            Self::EN_AS => "English (American Samoa)",
            Self::EN_AU => "English (Australia)",
            Self::EN_BE => "English (Belgium)",
            Self::EN_BW => "English (Botswana)",
            Self::EN_BZ => "English (Belize)",
            Self::EN_CA => "English (Canada)",
            Self::EN_GB => "English (United Kingdom)",
            Self::EN_GU => "English (Guam)",
            Self::EN_HK => "English (Hong Kong SAR China)",
            Self::EN_IE => "English (Ireland)",
            Self::EN_IN => "English (India)",
            Self::EN_JM => "English (Jamaica)",
            Self::EN_MH => "English (Marshall Islands)",
            Self::EN_MP => "English (Northern Mariana Islands)",
            Self::EN_MT => "English (Malta)",
            Self::EN_MU => "English (Mauritius)",
            Self::EN_NA => "English (Namibia)",
            Self::EN_NZ => "English (New Zealand)",
            Self::EN_PH => "English (Philippines)",
            Self::EN_PK => "English (Pakistan)",
            Self::EN_SG => "English (Singapore)",
            Self::EN_TT => "English (Trinidad and Tobago)",
            Self::EN_UM => "English (U.S. Minor Outlying Islands)",
            Self::EN_US => "English (United States)",
            Self::EN_US_POSIX => "English (United States, Computer)",
            Self::EN_VI => "English (U.S. Virgin Islands)",
            Self::EN_ZA => "English (South Africa)",
            Self::EN_ZW => "English (Zimbabwe)",
            Self::EO => "Esperanto",
            Self::ES => "Spanish",
            Self::ES_419 => "Spanish (Latin America)",
            Self::ES_AR => "Spanish (Argentina)",
            Self::ES_BO => "Spanish (Bolivia)",
            Self::ES_CL => "Spanish (Chile)",
            Self::ES_CO => "Spanish (Colombia)",
            Self::ES_CR => "Spanish (Costa Rica)",
            Self::ES_DO => "Spanish (Dominican Republic)",
            Self::ES_EC => "Spanish (Ecuador)",
            Self::ES_ES => "Spanish (Spain)",
            Self::ES_GQ => "Spanish (Equatorial Guinea)",
            Self::ES_GT => "Spanish (Guatemala)",
            Self::ES_HN => "Spanish (Honduras)",
            Self::ES_MX => "Spanish (Mexico)",
            Self::ES_NI => "Spanish (Nicaragua)",
            Self::ES_PA => "Spanish (Panama)",
            Self::ES_PE => "Spanish (Peru)",
            Self::ES_PR => "Spanish (Puerto Rico)",
            Self::ES_PY => "Spanish (Paraguay)",
            Self::ES_SV => "Spanish (El Salvador)",
            Self::ES_US => "Spanish (United States)",
            Self::ES_UY => "Spanish (Uruguay)",
            Self::ES_VE => "Spanish (Venezuela)",
            Self::ET => "Estonian",
            Self::ET_EE => "Estonian (Estonia)",
            Self::EU => "Basque",
            Self::EU_ES => "Basque (Spain)",
            Self::FA => "Persian",
            Self::FA_AF => "Persian (Afghanistan)",
            Self::FA_IR => "Persian (Iran)",
            Self::FF => "Fulah",
            Self::FF_SN => "Fulah (Senegal)",
            Self::FI => "Finnish",
            Self::FI_FI => "Finnish (Finland)",
            Self::FIL => "Filipino",
            Self::FIL_PH => "Filipino (Philippines)",
            Self::FO => "Faroese",
            Self::FO_FO => "Faroese (Faroe Islands)",
            Self::FR => "French",
            Self::FR_BE => "French (Belgium)",
            Self::FR_BF => "French (Burkina Faso)",
            Self::FR_BI => "French (Burundi)",
            Self::FR_BJ => "French (Benin)",
            Self::FR_BL => "French (Saint Barthélemy)",
            Self::FR_CA => "French (Canada)",
            Self::FR_CD => "French (Congo - Kinshasa)",
            Self::FR_CF => "French (Central African Republic)",
            Self::FR_CG => "French (Congo - Brazzaville)",
            Self::FR_CH => "French (Switzerland)",
            Self::FR_CI => "French (Côte d’Ivoire)",
            Self::FR_CM => "French (Cameroon)",
            Self::FR_DJ => "French (Djibouti)",
            Self::FR_FR => "French (France)",
            Self::FR_GA => "French (Gabon)",
            Self::FR_GN => "French (Guinea)",
            Self::FR_GP => "French (Guadeloupe)",
            Self::FR_GQ => "French (Equatorial Guinea)",
            Self::FR_KM => "French (Comoros)",
            Self::FR_LU => "French (Luxembourg)",
            Self::FR_MC => "French (Monaco)",
            Self::FR_MF => "French (Saint Martin)",
            Self::FR_MG => "French (Madagascar)",
            Self::FR_ML => "French (Mali)",
            Self::FR_MQ => "French (Martinique)",
            Self::FR_NE => "French (Niger)",
            Self::FR_RE => "French (Réunion)",
            Self::FR_RW => "French (Rwanda)",
            Self::FR_SN => "French (Senegal)",
            Self::FR_TD => "French (Chad)",
            Self::FR_TG => "French (Togo)",
            Self::GA => "Irish",
            Self::GA_IE => "Irish (Ireland)",
            Self::GL => "Galician",
            Self::GL_ES => "Galician (Spain)",
            Self::GSW => "Swiss German",
            Self::GSW_CH => "Swiss German (Switzerland)",
            Self::GU => "Gujarati",
            Self::GU_IN => "Gujarati (India)",
            Self::GUZ => "Gusii",
            Self::GUZ_KE => "Gusii (Kenya)",
            Self::GV => "Manx",
            Self::GV_GB => "Manx (United Kingdom)",
            Self::HA => "Hausa",
            Self::HA_LATN => "Hausa (Latin)",
            Self::HA_LATN_GH => "Hausa (Latin, Ghana)",
            Self::HA_LATN_NE => "Hausa (Latin, Niger)",
            Self::HA_LATN_NG => "Hausa (Latin, Nigeria)",
            Self::HAW => "Hawaiian",
            Self::HAW_US => "Hawaiian (United States)",
            Self::HE => "Hebrew",
            Self::HE_IL => "Hebrew (Israel)",
            Self::HI => "Hindi",
            Self::HI_IN => "Hindi (India)",
            Self::HR => "Croatian",
            Self::HR_HR => "Croatian (Croatia)",
            Self::HU => "Hungarian",
            Self::HU_HU => "Hungarian (Hungary)",
            Self::HY => "Armenian",
            Self::HY_AM => "Armenian (Armenia)",
            Self::ID => "Indonesian",
            Self::ID_ID => "Indonesian (Indonesia)",
            Self::IG => "Igbo",
            Self::IG_NG => "Igbo (Nigeria)",
            Self::II => "Sichuan Yi",
            Self::II_CN => "Sichuan Yi (China)",
            Self::IS => "Icelandic",
            Self::IS_IS => "Icelandic (Iceland)",
            Self::IT => "Italian",
            Self::IT_CH => "Italian (Switzerland)",
            Self::IT_IT => "Italian (Italy)",
            Self::JA => "Japanese",
            Self::JA_JP => "Japanese (Japan)",
            Self::JMC => "Machame",
            Self::JMC_TZ => "Machame (Tanzania)",
            Self::KA => "Georgian",
            Self::KA_GE => "Georgian (Georgia)",
            Self::KAB => "Kabyle",
            Self::KAB_DZ => "Kabyle (Algeria)",
            Self::KAM => "Kamba",
            Self::KAM_KE => "Kamba (Kenya)",
            Self::KDE => "Makonde",
            Self::KDE_TZ => "Makonde (Tanzania)",
            Self::KEA => "Kabuverdianu",
            Self::KEA_CV => "Kabuverdianu (Cape Verde)",
            Self::KHQ => "Koyra Chiini",
            Self::KHQ_ML => "Koyra Chiini (Mali)",
            Self::KI => "Kikuyu",
            Self::KI_KE => "Kikuyu (Kenya)",
            Self::KK => "Kazakh",
            Self::KK_CYRL => "Kazakh (Cyrillic)",
            Self::KK_CYRL_KZ => "Kazakh (Cyrillic, Kazakhstan)",
            Self::KL => "Kalaallisut",
            Self::KL_GL => "Kalaallisut (Greenland)",
            Self::KLN => "Kalenjin",
            Self::KLN_KE => "Kalenjin (Kenya)",
            Self::KM => "Khmer",
            Self::KM_KH => "Khmer (Cambodia)",
            Self::KN => "Kannada",
            Self::KN_IN => "Kannada (India)",
            Self::KO => "Korean",
            Self::KO_KR => "Korean (South Korea)",
            Self::KOK => "Konkani",
            Self::KOK_IN => "Konkani (India)",
            Self::KSB => "Shambala",
            Self::KSB_TZ => "Shambala (Tanzania)",
            Self::KSF => "Bafia",
            Self::KSF_CM => "Bafia (Cameroon)",
            Self::KW => "Cornish",
            Self::KW_GB => "Cornish (United Kingdom)",
            Self::LAG => "Langi",
            Self::LAG_TZ => "Langi (Tanzania)",
            Self::LG => "Ganda",
            Self::LG_UG => "Ganda (Uganda)",
            Self::LT => "Lithuanian",
            Self::LT_LT => "Lithuanian (Lithuania)",
            Self::LUO => "Luo",
            Self::LUO_KE => "Luo (Kenya)",
            Self::LUY => "Luyia",
            Self::LUY_KE => "Luyia (Kenya)",
            Self::LV => "Latvian",
            Self::LV_LV => "Latvian (Latvia)",
            Self::MAS => "Masai",
            Self::MAS_KE => "Masai (Kenya)",
            Self::MAS_TZ => "Masai (Tanzania)",
            Self::MER => "Meru",
            Self::MER_KE => "Meru (Kenya)",
            Self::MFE => "Morisyen",
            Self::MFE_MU => "Morisyen (Mauritius)",
            Self::MG => "Malagasy",
            Self::MG_MG => "Malagasy (Madagascar)",
            Self::MK => "Macedonian",
            Self::MK_MK => "Macedonian (Macedonia)",
            Self::ML => "Malayalam",
            Self::ML_IN => "Malayalam (India)",
            Self::MR => "Marathi",
            Self::MR_IN => "Marathi (India)",
            Self::MS => "Malay",
            Self::MS_BN => "Malay (Brunei)",
            Self::MS_MY => "Malay (Malaysia)",
            Self::MT => "Maltese",
            Self::MT_MT => "Maltese (Malta)",
            Self::MY => "Burmese",
            Self::MY_MM => "Burmese (Myanmar [Burma])",
            Self::NAQ => "Nama",
            Self::NAQ_NA => "Nama (Namibia)",
            Self::NB => "Norwegian Bokmål",
            Self::NB_NO => "Norwegian Bokmål (Norway)",
            Self::ND => "North Ndebele",
            Self::ND_ZW => "North Ndebele (Zimbabwe)",
            Self::NE => "Nepali",
            Self::NE_IN => "Nepali (India)",
            Self::NE_NP => "Nepali (Nepal)",
            Self::NL => "Dutch",
            Self::NL_BE => "Dutch (Belgium)",
            Self::NL_NL => "Dutch (Netherlands)",
            Self::NN => "Norwegian Nynorsk",
            Self::NN_NO => "Norwegian Nynorsk (Norway)",
            Self::NYN => "Nyankole",
            Self::NYN_UG => "Nyankole (Uganda)",
            Self::OM => "Oromo",
            Self::OM_ET => "Oromo (Ethiopia)",
            Self::OM_KE => "Oromo (Kenya)",
            Self::OR => "Oriya",
            Self::OR_IN => "Oriya (India)",
            Self::PA => "Punjabi",
            Self::PA_ARAB => "Punjabi (Arabic)",
            Self::PA_ARAB_PK => "Punjabi (Arabic, Pakistan)",
            Self::PA_GURU => "Punjabi (Gurmukhi)",
            Self::PA_GURU_IN => "Punjabi (Gurmukhi, India)",
            Self::PL => "Polish",
            Self::PL_PL => "Polish (Poland)",
            Self::PS => "Pashto",
            Self::PS_AF => "Pashto (Afghanistan)",
            Self::PT => "Portuguese",
            Self::PT_BR => "Portuguese (Brazil)",
            Self::PT_GW => "Portuguese (Guinea-Bissau)",
            Self::PT_MZ => "Portuguese (Mozambique)",
            Self::PT_PT => "Portuguese (Portugal)",
            Self::RM => "Romansh",
            Self::RM_CH => "Romansh (Switzerland)",
            Self::RN => "Rundi",
            Self::RN_BI => "Rundi (Burundi)",
            Self::RO => "Romanian",
            Self::RO_MD => "Romanian (Moldova)",
            Self::RO_RO => "Romanian (Romania)",
            Self::ROF => "Rombo",
            Self::ROF_TZ => "Rombo (Tanzania)",
            Self::RU => "Russian",
            Self::RU_MD => "Russian (Moldova)",
            Self::RU_RU => "Russian (Russia)",
            Self::RU_UA => "Russian (Ukraine)",
            Self::RW => "Kinyarwanda",
            Self::RW_RW => "Kinyarwanda (Rwanda)",
            Self::RWK => "Rwa",
            Self::RWK_TZ => "Rwa (Tanzania)",
            Self::SAQ => "Samburu",
            Self::SAQ_KE => "Samburu (Kenya)",
            Self::SEH => "Sena",
            Self::SEH_MZ => "Sena (Mozambique)",
            Self::SES => "Koyraboro Senni",
            Self::SES_ML => "Koyraboro Senni (Mali)",
            Self::SG => "Sango",
            Self::SG_CF => "Sango (Central African Republic)",
            Self::SHI => "Tachelhit",
            Self::SHI_LATN => "Tachelhit (Latin)",
            Self::SHI_LATN_MA => "Tachelhit (Latin, Morocco)",
            Self::SHI_TFNG => "Tachelhit (Tifinagh)",
            Self::SHI_TFNG_MA => "Tachelhit (Tifinagh, Morocco)",
            Self::SI => "Sinhala",
            Self::SI_LK => "Sinhala (Sri Lanka)",
            Self::SK => "Slovak",
            Self::SK_SK => "Slovak (Slovakia)",
            Self::SL => "Slovenian",
            Self::SL_SI => "Slovenian (Slovenia)",
            Self::SN => "Shona",
            Self::SN_ZW => "Shona (Zimbabwe)",
            Self::SO => "Somali",
            Self::SO_DJ => "Somali (Djibouti)",
            Self::SO_ET => "Somali (Ethiopia)",
            Self::SO_KE => "Somali (Kenya)",
            Self::SO_SO => "Somali (Somalia)",
            Self::SQ => "Albanian",
            Self::SQ_AL => "Albanian (Albania)",
            Self::SR => "Serbian",
            Self::SR_CYRL => "Serbian (Cyrillic)",
            Self::SR_CYRL_BA => "Serbian (Cyrillic, Bosnia and Herzegovina)",
            Self::SR_CYRL_ME => "Serbian (Cyrillic, Montenegro)",
            Self::SR_CYRL_RS => "Serbian (Cyrillic, Serbia)",
            Self::SR_LATN => "Serbian (Latin)",
            Self::SR_LATN_BA => "Serbian (Latin, Bosnia and Herzegovina)",
            Self::SR_LATN_ME => "Serbian (Latin, Montenegro)",
            Self::SR_LATN_RS => "Serbian (Latin, Serbia)",
            Self::SV => "Swedish",
            Self::SV_FI => "Swedish (Finland)",
            Self::SV_SE => "Swedish (Sweden)",
            Self::SW => "Swahili",
            Self::SW_KE => "Swahili (Kenya)",
            Self::SW_TZ => "Swahili (Tanzania)",
            Self::TA => "Tamil",
            Self::TA_IN => "Tamil (India)",
            Self::TA_LK => "Tamil (Sri Lanka)",
            Self::TE => "Telugu",
            Self::TE_IN => "Telugu (India)",
            Self::TEO => "Teso",
            Self::TEO_KE => "Teso (Kenya)",
            Self::TEO_UG => "Teso (Uganda)",
            Self::TH => "Thai",
            Self::TH_TH => "Thai (Thailand)",
            Self::TI => "Tigrinya",
            Self::TI_ER => "Tigrinya (Eritrea)",
            Self::TI_ET => "Tigrinya (Ethiopia)",
            Self::TO => "Tonga",
            Self::TO_TO => "Tonga (Tonga)",
            Self::TR => "Turkish",
            Self::TR_TR => "Turkish (Turkey)",
            Self::TZM => "Central Morocco Tamazight",
            Self::TZM_LATN => "Central Morocco Tamazight (Latin)",
            Self::TZM_LATN_MA => "Central Morocco Tamazight (LatinMorocco)",
            Self::UK => "Ukrainian",
            Self::UK_UA => "Ukrainian (Ukraine)",
            Self::UR => "Urdu",
            Self::UR_IN => "Urdu (India)",
            Self::UR_PK => "Urdu (Pakistan)",
            Self::UZ => "Uzbek",
            Self::UZ_ARAB => "Uzbek (Arabic)",
            Self::UZ_ARAB_AF => "Uzbek (ArabicAfghanistan)",
            Self::UZ_CYRL => "Uzbek (Cyrillic)",
            Self::UZ_CYRL_UZ => "Uzbek (CyrillicUzbekistan)",
            Self::UZ_LATN => "Uzbek (Latin)",
            Self::UZ_LATN_UZ => "Uzbek (LatinUzbekistan)",
            Self::VI => "Vietnamese",
            Self::VI_VN => "Vietnamese (Vietnam)",
            Self::VUN => "Vunjo",
            Self::VUN_TZ => "Vunjo (Tanzania)",
            Self::XOG => "Soga",
            Self::XOG_UG => "Soga (Uganda)",
            Self::YO => "Yoruba",
            Self::YO_NG => "Yoruba (Nigeria)",
            Self::ZH => "Chinese",
            Self::ZH_HANS => "Chinese (Simplified Han)",
            Self::ZH_HANS_CN => "Chinese (Simplified HanChina)",
            Self::ZH_HANS_HK => "Chinese (Simplified HanHong Kong SAR China)",
            Self::ZH_HANS_MO => "Chinese (Simplified HanMacau SAR China)",
            Self::ZH_HANS_SG => "Chinese (Simplified HanSingapore)",
            Self::ZH_HANT => "Chinese (Traditional Han)",
            Self::ZH_HANT_HK => "Chinese (Traditional HanHong Kong SAR China)",
            Self::ZH_HANT_MO => "Chinese (Traditional HanMacau SAR China)",
            Self::ZH_HANT_TW => "Chinese (Traditional HanTaiwan)",
            Self::ZU => "Zulu",
            Self::ZU_ZA => "Zulu (South Africa)",
        }
    }

    pub fn is_ar(&self) -> bool {
        matches!(
            self,
            Self::AR
                | Self::AR_AE
                | Self::AR_BH
                | Self::AR_DJ
                | Self::AR_DZ
                | Self::AR_EG
                | Self::AR_EH
                | Self::AR_ER
                | Self::AR_IL
                | Self::AR_IQ
                | Self::AR_JO
                | Self::AR_KM
                | Self::AR_KW
                | Self::AR_LB
                | Self::AR_LY
                | Self::AR_MA
                | Self::AR_MR
                | Self::AR_OM
                | Self::AR_PS
                | Self::AR_QA
                | Self::AR_SA
                | Self::AR_SD
                | Self::AR_SO
                | Self::AR_SS
                | Self::AR_SY
                | Self::AR_TD
                | Self::AR_TN
                | Self::AR_YE
        )
    }

    pub fn is_en(&self) -> bool {
        matches!(
            self,
            Self::EN
                | Self::EN_AS
                | Self::EN_AU
                | Self::EN_BE
                | Self::EN_BW
                | Self::EN_BZ
                | Self::EN_CA
                | Self::EN_GB
                | Self::EN_GU
                | Self::EN_HK
                | Self::EN_IE
                | Self::EN_IN
                | Self::EN_JM
                | Self::EN_MH
                | Self::EN_MP
                | Self::EN_MT
                | Self::EN_MU
                | Self::EN_NA
                | Self::EN_NZ
                | Self::EN_PH
                | Self::EN_PK
                | Self::EN_SG
                | Self::EN_TT
                | Self::EN_UM
                | Self::EN_US
                | Self::EN_US_POSIX
                | Self::EN_VI
                | Self::EN_ZA
                | Self::EN_ZW
        )
    }

    pub fn test(&self) {
        match self {
            e if e.is_en() => println!("This is an English locale: {}", e.display_in_lang()),
            _ => {}
        }
    }
}

pub struct AcceptLanguage {
    pub locale: Locale,
    pub qualit: f32,
}

pub fn parse_accept_language(input: &str) -> Vec<AcceptLanguage> {
    let mut accept: Vec<AcceptLanguage> = Vec::new();
    for part in input.split(',') {
        let mut parts = part.trim().split(';');
        let local_str = parts.next().unwrap_or("");
        let qualit_str = parts.next().unwrap_or("q=1.0");
        let qualit = qualit_str
            .trim_start_matches("q=")
            .parse::<f32>()
            .unwrap_or(1.0);
        if let Some(local) = Locale::parse_local_code(local_str) {
            accept.push(AcceptLanguage {
                locale: local,
                qualit,
            });
        }
    }
    accept
}
