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

0