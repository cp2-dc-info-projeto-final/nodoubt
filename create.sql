-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Dez-2021 às 22:39
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastrousuarios`
--

INSERT INTO `cadastrousuarios` (`codusuario`, `usernameusuario`, `senhausuario`, `nomeusuario`, `idadeusuario`, `emailusuario`, `permissadm`) VALUES
(1, 'NouAdm', '36612206', 'Nodoubtt adimin', '20/07/2004', 'Nodoubt@gmail.com', 1),
(5, 'barbosa', '36612206', 'isabelle barbosa', '31/05/1982', 'isabelebarbosa1@gmail.com', 0),
(6, 'noob23', '36612206', 'Andreza Carolina do Nascimento', '21/01/1998', 'dre@gmail.com', 0);

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `comentusuarios`
--

INSERT INTO `comentusuarios` (`idcoment`, `idusercoment`, `codpostcoment`, `usercoment`, `comentario`, `likecoment`) VALUES
(2, 1, 101, 'NouAdm ', 'nem eu', 0),
(3, 1, 101, 'NouAdm ', 'ok', 0),
(7, 1, 102, 'NouAdm ', 'sei la', 0);

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
  PRIMARY KEY (`codpost`)
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `postagemusuarios`
--

INSERT INTO `postagemusuarios` (`codpost`, `coduserpost`, `userpost`, `titulopost`, `postcontent`) VALUES
(27, 621011999, 'noob22', 'Frase na lápide', 'Frase de efeito para colocar em uma lápide.'),
(35, 621011999, 'noob22', 'aa', 'bb'),
(36, 621011999, 'noob22', 'aa', 'bb'),
(100, 120072204, 'NouAdm', 'Nao aguento mais tcc', 'a'),
(101, 120072204, 'NouAdm', 'Nao aguento mais tcc', 'save me :)'),
(102, 120072204, 'NouAdm', 'duvida', 'meu projeto esta funcionando?');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
