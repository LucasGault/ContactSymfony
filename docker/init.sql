create database if not exists contactony;
use contactony;
CREATE TABLE if not exists contact ( 
                id INT NOT NULL AUTO_INCREMENT , 
                firstname VARCHAR(255) NOT NULL , 
                lastname VARCHAR(255) NOT NULL , 
                phonenumber VARCHAR(255) NOT NULL ,
                email VARCHAR(255) NOT NULL ,
                user_id INT NOT NULL,
                PRIMARY KEY (id),
                FOREIGN KEY (user_id) REFERENCES user(id)) ENGINE = InnoDB;

CREATE TABLE if not exists contact ( id INT NOT NULL AUTO_INCREMENT , firstname VARCHAR(255) NOT NULL , lastname VARCHAR(255) NOT NULL , phonenumber VARCHAR(255) NOT NULL , PRIMARY KEY (id)) ENGINE = InnoDB;
CREATE TABLE if not exists user ( 
                id INT NOT NULL AUTO_INCREMENT , 
                firstname VARCHAR(255) NOT NULL , 
                lastname VARCHAR(255) NOT NULL , 
                email VARCHAR(255) NOT NULL , 
                phonenumber VARCHAR(255) NOT NULL , 
                password VARCHAR(255) NOT NULL , 
                PRIMARY KEY (id), 
                UNIQUE emailunique (email)) ENGINE = InnoDB;

CREATE TRIGGER if not exists InsertContact 
AFTER INSERT ON user 
FOR EACH ROW 
INSERT INTO contact (firstname,lastname,phonenumber,email,user_id) 
VALUES (new.firstname,new.lastname,new.phonenumber,new.email,new.id);