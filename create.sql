CREATE TABLE cadastrousuarios (
    codusuario int NOT NULL AUTO_INCREMENT,
    usernameusuario varchar(12) NOT NULL,
    senhausuario varchar(255) NOT NULL,
    nomeusuario varchar(40) NOT NULL,
    idadeusuario int(3) NOT NULL,
    emailusuario varchar(30) NOT NULL,
    primary key (codusuario)
);

CREATE USER'estudante'@'localhost'IDENTIFIED BY '12345';
GRANT ALL PRIVILEGES ON cadastro.* TO 'estudante'@'localhost';