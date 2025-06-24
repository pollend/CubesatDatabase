
CREATE TABLE addresses (
	id serial4 NOT NULL,
	created_at timestamp(0) NULL,
	updated_at timestamp(0) NULL,
	address1 varchar(100) NOT NULL,
	address2 varchar(100) NOT NULL,
	address3 varchar(100) NOT NULL,
	address4 varchar(100) NOT NULL,
	city varchar(100) NOT NULL,
	state varchar(100) NOT NULL,
	zip varchar(100) NOT NULL,
	CONSTRAINT addresses_pkey PRIMARY KEY (id)
);

CREATE TABLE images (
	id serial4 NOT NULL,
  iid varchar(64) NOT NULL,
  created_at timestamp(0) NULL,
	updated_at timestamp(0) NULL,
	image_name varchar(30) NULL,
	"source" varchar(255) NOT NULL,
	CONSTRAINT images_pkey PRIMARY KEY (id)
);


CREATE TABLE launch_vehicles (
	id serial4 NOT NULL,
	created_at timestamp(0) NULL,
	updated_at timestamp(0) NULL,
	"name" varchar(40) NOT NULL,
	CONSTRAINT launch_vehicles_pkey PRIMARY KEY (id)
);

CREATE TABLE migrations (
	id serial4 NOT NULL,
	migration varchar(255) NOT NULL,
	batch int4 NOT NULL,
	CONSTRAINT migrations_pkey PRIMARY KEY (id)
);

CREATE TABLE launches (
	id serial4 NOT NULL,
	launch_vehicle_id int4 NULL,
	created_at timestamp(0) NULL,
	updated_at timestamp(0) NULL,
	launch_date date NOT NULL,
	CONSTRAINT launches_pkey PRIMARY KEY (id),
	CONSTRAINT launches_launch_vehicle_id_foreign FOREIGN KEY (launch_vehicle_id) REFERENCES launch_vehicles(id)
);

CREATE TABLE organizations (
	id serial4 NOT NULL,
	created_at timestamp(0) NULL,
	updated_at timestamp(0) NULL,
	"type" varchar(60) NOT NULL,
	"name" varchar(60) NOT NULL,
	address_id int4 NOT NULL,
	CONSTRAINT organizations_pkey PRIMARY KEY (id),
	CONSTRAINT organizations_address_id_foreign FOREIGN KEY (address_id) REFERENCES addresses(id)
);

CREATE TABLE password_resets (
	user_id int4 NOT NULL,
	email varchar(255) NOT NULL,
	"token" varchar(255) NOT NULL,
	created_at timestamp(0) NOT NULL,
	CONSTRAINT password_resets_user_id_foreign FOREIGN KEY (user_id) REFERENCES users(id)
);
CREATE INDEX password_resets_email_index ON public.password_resets USING btree (email);
CREATE INDEX password_resets_token_index ON public.password_resets USING btree (token);

CREATE TABLE profiles (
	id serial4 NOT NULL,
	created_at timestamp(0) NULL,
	updated_at timestamp(0) NULL,
	"name" varchar(60) NULL,
	bio varchar(300) NULL,
	company varchar(60) NULL,
	image_id int4 NULL,
	user_id int4 NOT NULL,
	CONSTRAINT profiles_pkey PRIMARY KEY (id),
	CONSTRAINT profiles_image_id_foreign FOREIGN KEY (image_id) REFERENCES images(id),
	CONSTRAINT profiles_user_id_foreign FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE spaceports (
	id serial4 NOT NULL,
	created_at timestamp(0) NULL,
	updated_at timestamp(0) NULL,
	latlong varchar(255) NOT NULL,
	url_website varchar(255) NOT NULL,
	description bytea NOT NULL,
	address_id int4 NOT NULL,
	CONSTRAINT spaceports_pkey PRIMARY KEY (id),
	CONSTRAINT spaceports_address_id_foreign FOREIGN KEY (address_id) REFERENCES addresses(id)
);

CREATE TABLE spaceports_images (
	spaceport_id int4 NOT NULL,
	image_id int4 NOT NULL,
	CONSTRAINT spaceports_images_image_id_foreign FOREIGN KEY (image_id) REFERENCES images(id),
	CONSTRAINT spaceports_images_spaceport_id_foreign FOREIGN KEY (spaceport_id) REFERENCES spaceports(id)
);

CREATE TABLE vendors (
	id serial4 NOT NULL,
	created_at timestamp(0) NULL,
	updated_at timestamp(0) NULL,
	"name" varchar(255) NOT NULL,
	vendor_website varchar(255) NOT NULL,
	address_id int4 NOT NULL,
	"type" varchar(255) NOT NULL,
	CONSTRAINT vendors_pkey PRIMARY KEY (id),
	CONSTRAINT vendors_address_id_foreign FOREIGN KEY (address_id) REFERENCES addresses(id)
);

CREATE TABLE components (
	id serial4 NOT NULL,
	created_at timestamp(0) NULL,
	updated_at timestamp(0) NULL,
	description bytea NOT NULL,
	formal_specification varchar(255) NOT NULL,
	vendor_id int4 NOT NULL,
	main_thumbnail_image_id int4 NULL,
	CONSTRAINT components_pkey PRIMARY KEY (id),
	CONSTRAINT components_main_thumbnail_image_id_foreign FOREIGN KEY (main_thumbnail_image_id) REFERENCES images(id),
	CONSTRAINT components_vendor_id_foreign FOREIGN KEY (vendor_id) REFERENCES vendors(id)
);

CREATE TABLE missions (
	id serial4 NOT NULL,
	created_at timestamp(0) NULL,
	updated_at timestamp(0) NULL,
	objective varchar(255) NOT NULL,
	wiki varchar(255) NOT NULL,
	"name" varchar(255) NOT NULL,
	"content" bytea NOT NULL,
	organization_id int4 NULL,
	CONSTRAINT missions_pkey PRIMARY KEY (id),
	CONSTRAINT missions_organization_id_foreign FOREIGN KEY (organization_id) REFERENCES organizations(id)
);

CREATE TABLE missions_images (
	mission_id int4 NOT NULL,
	image_id int4 NOT NULL,
	CONSTRAINT missions_images_image_id_foreign FOREIGN KEY (image_id) REFERENCES images(id),
	CONSTRAINT missions_images_mission_id_foreign FOREIGN KEY (mission_id) REFERENCES missions(id)
);

CREATE TABLE satellites (
	id serial4 NOT NULL,
	created_at timestamp(0) NULL,
	updated_at timestamp(0) NULL,
	"name" varchar(255) NOT NULL,
	"content" bytea NULL,
	wiki varchar(255) NULL,
	mass float8 NULL,
	mission_id int4 NULL,
	satellite_type_id int4 NULL,
	orbit_id int4 NULL,
	launch_id int4 NULL,
	tle varchar(255) NULL,
	"COSPAR" varchar(255) NULL,
	satcat varchar(255) NULL,
	CONSTRAINT satellites_pkey PRIMARY KEY (id),
	CONSTRAINT satellites_launch_id_foreign FOREIGN KEY (launch_id) REFERENCES launches(id),
	CONSTRAINT satellites_mission_id_foreign FOREIGN KEY (mission_id) REFERENCES missions(id),
);


CREATE TABLE satellites_images (
	satellite_id int4 NOT NULL,
	image_id int4 NOT NULL,
	CONSTRAINT satellites_images_image_id_foreign FOREIGN KEY (image_id) REFERENCES images(id),
	CONSTRAINT satellites_images_satellite_id_foreign FOREIGN KEY (satellite_id) REFERENCES satellites(id)
);

CREATE TABLE vendor_image (
	vendor_id int4 NOT NULL,
	image_id int4 NOT NULL,
	CONSTRAINT vendor_image_image_id_foreign FOREIGN KEY (image_id) REFERENCES images(id),
	CONSTRAINT vendor_image_vendor_id_foreign FOREIGN KEY (vendor_id) REFERENCES vendors(id)
);

CREATE TABLE vendor_spaceports (
	vendor_id int4 NOT NULL,
	spaceport_id int4 NOT NULL,
	CONSTRAINT vendor_spaceports_spaceport_id_foreign FOREIGN KEY (spaceport_id) REFERENCES spaceports(id),
	CONSTRAINT vendor_spaceports_vendor_id_foreign FOREIGN KEY (vendor_id) REFERENCES vendors(id)
);

CREATE TABLE component_image (
	components_id int4 NOT NULL,
	image_id int4 NOT NULL,
	CONSTRAINT component_image_components_id_foreign FOREIGN KEY (components_id) REFERENCES components(id),
	CONSTRAINT component_image_image_id_foreign FOREIGN KEY (image_id) REFERENCES images(id)
);


CREATE TABLE component_satellite (
	satellite_id int4 NOT NULL,
	component_id int4 NOT NULL,
	CONSTRAINT component_satellite_component_id_foreign FOREIGN KEY (component_id) REFERENCES components(id) ON DELETE CASCADE,
	CONSTRAINT component_satellite_satellite_id_foreign FOREIGN KEY (satellite_id) REFERENCES satellites(id) ON DELETE CASCADE
);

CREATE TABLE component_thumbnail (
	component_id int4 NOT NULL,
	image_id int4 NOT NULL,
	CONSTRAINT component_thumbnail_component_id_foreign FOREIGN KEY (component_id) REFERENCES components(id),
	CONSTRAINT component_thumbnail_image_id_foreign FOREIGN KEY (image_id) REFERENCES images(id)
);

CREATE TABLE satellite_failures (
	id serial4 NOT NULL,
	created_at timestamp(0) NULL,
	updated_at timestamp(0) NULL,
	"content" bytea NOT NULL,
	time_of_failure timestamp(0) NOT NULL,
	satellite_id int4 NOT NULL,
	CONSTRAINT satellite_failures_pkey PRIMARY KEY (id),
	CONSTRAINT satellite_failures_satellite_id_foreign FOREIGN KEY (satellite_id) REFERENCES satellites(id)
);

CREATE TABLE satellite_statuses (
	id serial4 NOT NULL,
	created_at timestamp(0) NULL,
	updated_at timestamp(0) NULL,
	status varchar(255) NOT NULL,
	"time" date NOT NULL,
	satellite_id int4 NOT NULL,
	CONSTRAINT satellite_statuses_pkey PRIMARY KEY (id),
	CONSTRAINT satellite_statuses_satellite_id_foreign FOREIGN KEY (satellite_id) REFERENCES satellites(id)
);

CREATE TABLE satellite_failure_component (
	id serial4 NOT NULL,
	created_at timestamp(0) NULL,
	updated_at timestamp(0) NULL,
	satellite_failure_id int4 NOT NULL,
	component_id int4 NOT NULL,
	"comments" bytea NOT NULL,
	CONSTRAINT satellite_failure_component_pkey PRIMARY KEY (id),
	CONSTRAINT satellite_failure_component_component_id_foreign FOREIGN KEY (component_id) REFERENCES components(id),
	CONSTRAINT satellite_failure_component_satellite_failure_id_foreign FOREIGN KEY (satellite_failure_id) REFERENCES satellite_failures(id)
);
