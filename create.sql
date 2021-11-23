CREATE DATABASE nodoubt:
use nodoubt;

CREATE TABLE cadastrousuarios (
    codusuario int NOT NULL AUTO_INCREMENT,
    usernameusuario varchar(12) NOT NULL,
    senhausuario varchar(255) NOT NULL,
    nomeusuario varchar(40) NOT NULL,
    idadeusuario int(10) NOT NULL,
    emailusuario varchar(30) NOT NULL,
    permissadm int(2) NOT NULL,
    primary key (codusuario)
);

CREATE USER'estudante'@'localhost'IDENTIFIED BY '12345';
GRANT ALL PRIVILEGES ON nodoubt.* TO 'estudante'@'localhost';

/* criação do usuario adimin primario*/

INSERT INTO cadastrousuarios (usernameusuario, senhausuario, nomeusuario, idadeusuario, emailusuario, permissadm) VALUES ('NouAdm', 40028922, 'Nodoubtt adimin', 20072004, 'Nodoubt@gmail.com', 1);

CREATE TABLE postagemusuarios (
    codpost int NOT NULL AUTO_INCREMENT,
    coduserpost int(12) NOT NULL,
    userpost varchar(12) NOT NULL,
    titulopost varchar(30) NOT NULL,
    postcontent varchar(366) NOT NULL,
    primary key (codpost)
);