create database if not exists contactony;
use contactony;

CREATE TABLE if not exists user ( 
                id INT NOT NULL AUTO_INCREMENT , 
                firstname VARCHAR(255) NOT NULL , 
                lastname VARCHAR(255) NOT NULL , 
                email VARCHAR(255) NOT NULL , 
                phonenumber VARCHAR(255) NOT NULL , 
                password VARCHAR(255) NOT NULL , 
                PRIMARY KEY (id), 
                UNIQUE emailunique (email)) ENGINE = InnoDB;

CREATE TABLE if not exists contact ( 
                id INT NOT NULL AUTO_INCREMENT , 
                firstname VARCHAR(255) NOT NULL , 
                lastname VARCHAR(255) NOT NULL , 
                phonenumber VARCHAR(255) NOT NULL ,
                email VARCHAR(255) NOT NULL ,
                user_id INT NOT NULL,
                PRIMARY KEY (id),
                FOREIGN KEY (user_id) REFERENCES user(id)) ENGINE = InnoDB;



-- CREATE TRIGGER if not exists InsertContact 
-- AFTER INSERT ON user 
-- FOR EACH ROW 
-- INSERT INTO contact (firstname,lastname,phonenumber,email,user_id) 
-- VALUES (new.firstname,new.lastname,new.phonenumber,new.email,new.id);

INSERT INTO user VALUES (null, 'user','user','user@mail.fr','0606060606','password',' ')
INSERT INTO contact VALUES  (null, 'Rémi', 'Zouzou', '070707070707', 'remi@mail.fr',1),
                            (null, 'Emma', 'Carena', '070707070707', 'emma@mail.fr',1),
                            (null, 'Jean-Mi', 'Zebeauf', '070707070707', 'jeanmi@mail.fr',1),
                            (null, 'Barack', 'Afritt', '070707070707', 'barack@mail.fr',1),
                            (null, 'Garcin', 'Lazare', '070707070707', 'garcin@mail.fr',1),
                            (null, 'Edmond', 'Cul', '070707070707', 'edmond@mail.fr',1),
                            (null, 'Éléonore', 'Iléosud', '070707070707', 'eleonore@mail.fr',1),
                            (null, 'Ella', 'Toufo', '070707070707', 'ella@mail.fr',1),
                            (null, 'Ella', 'Debonzieux', '070707070707', 'ella2@mail.fr',1),
                            (null, 'Emma', 'Soirsurunban', '070707070707', 'emma2@mail.fr',1),
                            (null, 'Mario', 'Nette', '070707070707', 'mario@mail.fr',1),
                            (null, 'Rémi', 'Zouzou', '070707070707', 'remi@mail.fr',1),
                            (null, 'Rémi', 'Zouzou', '070707070707', 'remi@mail.fr',1),
                            (null, 'Rémi', 'Zouzou', '070707070707', 'remi@mail.fr',1),
                            (null, 'Rémi', 'Zouzou', '070707070707', 'remi@mail.fr',1),
                            (null, 'Rémi', 'Zouzou', '070707070707', 'remi@mail.fr',1),
                            (null, 'Rémi', 'Zouzou', '070707070707', 'remi@mail.fr',1),
                            (null, 'Rémi', 'Zouzou', '070707070707', 'remi@mail.fr',1),
                            (null, 'Rémi', 'Zouzou', '070707070707', 'remi@mail.fr',1),
                            (null, 'Rémi', 'Zouzou', '070707070707', 'remi@mail.fr',1),
                            (null, 'Rémi', 'Zouzou', '070707070707', 'remi@mail.fr',1),
                            (null, 'Rémi', 'Zouzou', '070707070707', 'remi@mail.fr',1),
                            (null, 'Rémi', 'Zouzou', '070707070707', 'remi@mail.fr',1);