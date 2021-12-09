-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Dez-2021 às 23:44
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `nodoubt`
--
DROP DATABASE IF EXISTS nodoubt;
CREATE DATABASE IF NOT EXISTS `nodoubt` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `nodoubt`;

DROP USER IF EXISTS 'estudante'@'localhost';
CREATE USER IF NOT EXISTS 'estudante'@'localhost'IDENTIFIED BY '12345';
GRANT ALL PRIVILEGES ON nodoubt.* TO 'estudante'@'localhost';

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastrousuarios`
--

DROP TABLE IF EXISTS `cadastrousuarios`;
CREATE TABLE IF NOT EXISTS `cadastrousuarios` (
  `codusuario` int(11) NOT NULL AUTO_INCREMENT,
  `usernameusuario` varchar(12) NOT NULL,
  `senhausuario` varchar(255) NOT NULL,
  `nomeusuario` varchar(40) NOT NULL,
  `idadeusuario` varchar(10) NOT NULL,
  `emailusuario` varchar(30) NOT NULL,
  `permissadm` int(2) NOT NULL,
  PRIMARY KEY (`codusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastrousuarios`
--

INSERT INTO `cadastrousuarios` (`codusuario`, `usernameusuario`, `senhausuario`, `nomeusuario`, `idadeusuario`, `emailusuario`, `permissadm`) VALUES
(1, 'NouAdm', '$2y$10$lKIKpG092z06WPwxIhDLK.qKMsipKDTCGpCHz.0cd/Gcl4BSXkG4e', 'vicky do nascimento ', '20/07/2004', 'nodoubttt0@gmail.com', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentusuarios`
--

DROP TABLE IF EXISTS `comentusuarios`;
CREATE TABLE IF NOT EXISTS `comentusuarios` (
  `idcoment` int(11) NOT NULL AUTO_INCREMENT,
  `idusercoment` int(12) NOT NULL,
  `codpostcoment` int(11) NOT NULL,
  `usercoment` varchar(12) NOT NULL,
  `comentario` varchar(366) NOT NULL,
  `likecoment` int(9) NOT NULL,
  PRIMARY KEY (`idcoment`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `curtirusuarios`
--

DROP TABLE IF EXISTS `curtirusuarios`;
CREATE TABLE IF NOT EXISTS `curtirusuarios` (
  `idlike` int(11) NOT NULL AUTO_INCREMENT,
  `iduserlike` int(12) NOT NULL,
  `codpostlike` int(13) NOT NULL,
  `userlike` varchar(13) NOT NULL,
  `curtida` int(2) NOT NULL,
  `titulopostlike` varchar(30) NOT NULL,
  PRIMARY KEY (`idlike`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `postagemusuarios`
--

DROP TABLE IF EXISTS `postagemusuarios`;
CREATE TABLE IF NOT EXISTS `postagemusuarios` (
  `codpost` int(11) NOT NULL AUTO_INCREMENT,
  `coduserpost` int(12) NOT NULL,
  `userpost` varchar(12) NOT NULL,
  `titulopost` varchar(30) NOT NULL,
  `postcontent` varchar(366) NOT NULL,
  `likepost` int(9) NOT NULL,
  PRIMARY KEY (`codpost`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
