-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Nov-2021 às 21:55
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
DROP DATABASE IS EXISTS 'nodoubt';
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
CREATE TABLE `cadastrousuarios` (
  `codusuario` int(11) NOT NULL,
  `usernameusuario` varchar(12) NOT NULL,
  `senhausuario` varchar(255) NOT NULL,
  `nomeusuario` varchar(40) NOT NULL,
  `idadeusuario` int(10) NOT NULL,
  `emailusuario` varchar(30) NOT NULL,
  `permissadm` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastrousuarios`
--

INSERT INTO `cadastrousuarios` (`codusuario`, `usernameusuario`, `senhausuario`, `nomeusuario`, `idadeusuario`, `emailusuario`, `permissadm`) VALUES
(1, 'NouAdm', '36612206', 'Nodoubtt adimin', 20072204, 'Nodoubt@gmail.com', 1),
(4, 'worldhaio', '36612206', 'vicky do nascimento wingler', 20072004, 'wingler-vicky@hotmail.com', 0),
(5, 'barbosa', '36612206', 'isabelle barbosa', 31051982, 'isabelebarbarba@gmail.com', 0),
(6, 'noob22', '36612206', 'Andreza Carolina do Nascimento', 21011999, 'dre@gmail.com', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `postagemusuarios`
--

DROP TABLE IF EXISTS `postagemusuarios`;
CREATE TABLE `postagemusuarios` (
  `codpost` int(11) NOT NULL,
  `coduserpost` int(12) NOT NULL,
  `userpost` varchar(12) NOT NULL,
  `titulopost` varchar(30) NOT NULL,
  `postcontent` varchar(366) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `postagemusuarios`
--

INSERT INTO `postagemusuarios` (`codpost`, `coduserpost`, `userpost`, `titulopost`, `postcontent`) VALUES
(21, 531051982, 'barbosa', 'a', 'b'),
(27, 621011999, 'noob22', 'Frase na lápide', 'Frase de efeito para colocar em uma lápide.'),
(35, 621011999, 'noob22', 'aa', 'bb'),
(36, 621011999, 'noob22', 'aa', 'bb'),
(37, 120072204, 'NouAdm', 'aeeeeeeeeeeeeeeee', 'n seeeeeiii'),
(38, 120072204, 'NouAdm', 'aeeeeeeeeeeeeeeee', 'n seeeeeiii'),
(55, 120072204, 'NouAdm', '', 'apenas 1'),
(56, 120072204, 'NouAdm', '', 'apenas 1'),
(57, 120072204, 'NouAdm', 'ok', 'apenas 1'),
(59, 120072204, 'NouAdm', 'a', 'aoenas 1');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastrousuarios`
--
ALTER TABLE `cadastrousuarios`
  ADD PRIMARY KEY (`codusuario`);

--
-- Índices para tabela `postagemusuarios`
--
ALTER TABLE `postagemusuarios`
  ADD PRIMARY KEY (`codpost`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastrousuarios`
--
ALTER TABLE `cadastrousuarios`
  MODIFY `codusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `postagemusuarios`
--
ALTER TABLE `postagemusuarios`
  MODIFY `codpost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
