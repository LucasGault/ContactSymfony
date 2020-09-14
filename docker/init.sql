create database if not exists contactony;
use contactony;

CREATE TABLE if not exists contact ( id INT NOT NULL AUTO_INCREMENT , firstname VARCHAR(255) NOT NULL , lastname VARCHAR(255) NOT NULL , phonenumber INT(10) NOT NULL , PRIMARY KEY (id)) ENGINE = InnoDB;
