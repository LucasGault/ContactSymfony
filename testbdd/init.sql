create database if not exists contactony;
use coucou;

CREATE TABLE  if not exists contact
(
id INTEGER AUTO_INCREMENT,
lastName TEXT,
firstName TEXT,
phoneNumber INTEGER,
PRIMARY KEY (id)
) COMMENT='this is my test table';