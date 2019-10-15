CREATE TABLE cb_writers (
	writer_id SMALLSERIAL PRIMARY KEY,
	first_name varchar(40),
	last_name varchar(40)
);

CREATE TABLE cb_artists (
	artist_id SMALLSERIAL PRIMARY KEY,
	first_name varchar(40),
	last_name varchar(40)
);

CREATE TABLE cb_publishers (
	publisher_id SMALLSERIAL PRIMARY KEY,
	publisher_name varchar(250)
);

CREATE TABLE cb_users (
	user_id SMALLSERIAL PRIMARY KEY,
	username varchar(25),
	password varchar(128),
	first_name varchar(40),
	last_name varchar(40),
	user_role SMALLINT,
	email varchar(100)
);

CREATE TABLE cb_comicbooks (
	comic_id SERIAL PRIMARY KEY,
	title varchar(250),
	writer_1 int references cb_writers(writer_id),
	writer_2 int references cb_writers(writer_id),
	writer_3 int references cb_writers(writer_id),
	writer_4 int references cb_writers(writer_id),
	writer_5 int references cb_writers(writer_id),
	artist_1 int references cb_artists(artist_id),
	artist_2 int references cb_artists(artist_id),
	artist_3 int references cb_artists(artist_id),
	artist_4 int references cb_artists(artist_id),
	artist_5 int references cb_artists(artist_id),
	publisher int references cb_publishers(publisher_id),
	publication_date date,
	cover_image varchar(256),
	summary varchar(2048)
);