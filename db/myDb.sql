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

ALTER TABLE cb_users ADD COLUMN comics_owned integer[];

ALTER TABLE cb_comicbooks
	DROP COLUMN writer_1,
	DROP COLUMN writer_2,
	DROP COLUMN writer_3,
	DROP COLUMN writer_4,
	DROP COLUMN writer_5,
	DROP COLUMN artist_1,
	DROP COLUMN artist_2,
	DROP COLUMN artist_3,
	DROP COLUMN artist_4,
	DROP COLUMN artist_5;

INSERT INTO cb_writers(first_name, last_name)
	VALUES
	('Jeph', 'Loeb'),
	('Phillip K.', 'Dick'),
	('Mark', 'Verheiden'),
	('Alan', 'Burnett'),
	('Michael', 'Green'),
	('Mike', 'Johnson'),
	('Peter', 'Johnson'),
	('Matt', 'Cherniss'),
	('Scott', 'Kolins'),
	('Joe', 'Casey'),
	('Joshua', 'Williamson'),
	('Paul', 'Levitz'),
	('Cullen', 'Bunn'),
	('Chris', 'Roberson'),
	('Joe', 'Kelly'),
	('Jack', 'Kelly'),
	('Amanda', 'McMurray');
	
CREATE TABLE cb_comicbooks_to_writers (
	comic_id  int references cb_comicbooks(comic_id),
	writer_id  int references cb_writers(writer_id)
);

CREATE TABLE cb_comicbooks_to_artists (
	comic_id  int references cb_comicbooks(comic_id),
	artist_id  int references cb_artists(artist_id)
);

CREATE TABLE cb_comicbooks_to_users (
	comic_id  int references cb_comicbooks(comic_id),
	user_id int references cb_users(user_id)
);

INSERT INTO cb_writers(first_name, last_name)
	VALUES
	('Adam', 'Beechen');
	
INSERT INTO cb_artists(first_name, last_name)
	VALUES
	('Ryan', 'Benjamin'),
	('John', 'Stanisci'),
	('David', 'Baron'),
	('Travis', 'Lanham'),
	('Dustin', 'Nguyen'),
	('Eduardo', 'Pansica'),
	('Eber', 'Ferreira'),
	('Chris', 'Batista'),
	('Rich', 'Perrotta'),
	('David', 'Baron'),
	('', 'Swands'),
	('Darwyn', 'Cooke');
	
INSERT INTO cb_users(username, password, first_name, last_name, user_role, email)
	VALUES ('crazyivan85204', MD5('Plasticwater~304'), 'David', 'Ward', '0', 'crazyivan85204@yahoo.com');

ALTER TABLE cb_users ADD CONSTRAINT cb_user UNIQUE (username, email);