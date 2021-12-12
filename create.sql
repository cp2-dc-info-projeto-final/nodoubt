-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Dez-2021 às 02:59
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastrousuarios`
--

INSERT INTO `cadastrousuarios` (`codusuario`, `usernameusuario`, `senhausuario`, `nomeusuario`, `idadeusuario`, `emailusuario`, `permissadm`) VALUES
(1, 'NouAdm', '$2y$10$lKIKpG092z06WPwxIhDLK.qKMsipKDTCGpCHz.0cd/Gcl4BSXkG4e', 'vicky do nascimento ', '20/07/2004', 'nodoubttt0@gmail.com', 1),
(2, 'julia', '$2y$10$682zY2pVbnaLzleYAMyJKuMHg8KHFwH8QR6Nv1RZ5D5gT3pWBofDm', 'Júlia Sena da Costa', '29/03/2004', 'jsena.2903@gmail.com', 0),
(3, 'andré', '$2y$10$vXpNd10AqtgjyN.N3CVa.e2OdcdPWKxzbsZ3Anupd4sTapdtz9Vgm', 'André Castro Alves', '29/01/2000', 'andrecastro@gmail.com', 0),
(4, 'pablo', '$2y$10$WC/MKrTirVjpPsH3yR3J6exYwgT7AufcUpueQdwdbI4Z760/4wGbK', 'Pablo Silva', '02/05/2005', 'pablosilva@gmail.com', 0),
(5, 'aline', '$2y$10$0KuwVdRipScm.Mzs.ec53ecye3u262PqM6cRXCEUgciPdVoeu8byG', 'Aline de Moraes', '29/05/1998', 'alineM@gmail.com', 0),
(6, 'marcos', '$2y$10$LW4HXsUzeEeK8xJjKTeVse.2Rk8HV3nA9le/2pIvTc.6TJehtWXny', 'marcos andrade filho', '02/05/2003', 'relampagomarquinhos@gmail.com', 0),
(7, 'brenda', '$2y$10$.cpR.DtMzwVWsTd/Z44eAuPYArWVqVsupVAZ.UVbUC7GVZQkNvbvq', 'Brenda Fernandes', '29/01/2001', 'fernandesb@gmail.com', 0),
(8, 'caique', '$2y$10$SSeXoN1Kzu9jZsps4o0U/eNOCUmRWg6dN3n8ivuohHHHCrZeUGOrO', 'Caique André', '21/01/1990', 'caiqueAndre@gmail.com', 0),
(9, 'alana', '$2y$10$NNWUW2RXclbEeQHGn8HSdeHYLiWSpY5S/J0HbCDzMWKOg235cXDvy', 'Alana Costa', '26/02/2001', 'lana11@gmail.com', 0),
(10, 'criss', '$2y$10$2p9RtvJftmY66QfiikqUw.RwMWboZfAENcFUf4VJLexZomfJSKucG', 'Cristina Almeida', '08/05/2008', 'cris@gmail.com', 0),
(11, 'Testeuser', '$2y$10$zxg1RKWPfVWDh6HYXjlNHefFtcEi76j5awPR0ZMb7ng5vJDsGktxm', 'User de Teste Nascimento Ontem ', '11/12/2021', 'testuser@gmail.com', 0);

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
(1, 4, 4, 'pablo ', 'Alternativa correta: e) ∛9.\r\n\r\nTemos a soma de dois logaritmos que apresentam bases diferentes. Então, para começar, vamos fazer uma mudança de base.\r\n\r\nLembrando que para mudar a base de um logaritmo usamos a seguinte expressão:\r\n\r\nlog com reto a subscrito reto b igual a numerador log com reto c subscrito reto b sobre denominador log com reto c subscrito reto a f', 0),
(2, 2, 5, 'julia ', 'Alternativa correta: a) 2.\r\n\r\nUsando a definição de logaritmo, podemos encontrar o valor de x e de y:\r\nSubstituindo esses valores na expressão apresentada, temos:\r\n\r\nreto k igual a log com 20 subscrito 10000 sobre 25 reto k igual a log com 20 subscrito 400 reto k igual a log com 20 subscrito 20 ao quadrado reto k igual a 2. log com 20 subscrito 20 reto k igual a 2', 0),
(3, 5, 6, 'aline ', 'Alternativa correta: c) valorização das raízes culturais brasileiras.\r\n\r\nUm dos principais objetivos do modernismo brasileiro era trazer à tona aspectos da cultura popular brasileira. Por isso, nesse momento, o nacionalismo e o ufanismo sustentaram e auxiliaram na valorização de uma cultura tipicamente brasileira.', 0),
(4, 6, 7, 'marcos ', 'Alternativa certa: a) Comprei um terreno e construí a casa.\r\nQuem compra, compra algo. Uma vez que o complemento do verbo não exigiu preposição, estamos diante de um objeto direto.\r\n\r\nOs verbos restantes são classificados da seguinte forma:\r\nb) Os guerreiros dormem agora. (verbo intransitivo)\r\nc) O cego não vê. (verbo intransitivo)\r\nd) João parece zangado. (verbo ', 0),
(5, 7, 8, 'brenda ', 'O fenômeno da conjugação que ocorre com os paramécios é considerado um tipo de\r\nreprodução sexuada. A troca de micronúcleos entre os protozoários permite que\r\nocorra a formação de indivíduos com novas combinações genéticas', 0),
(6, 7, 9, 'brenda ', 'O objeto direto é um complemento verbal e na maioria das vezes ele não está acompanhado por preposição. Assim como o objeto indireto, o objeto direto é um termo integrante da oração que completa o sentido dos verbos transitivos, o qual sozinho não consegue transmitir uma mensagem com sentido completo.', 0),
(7, 10, 11, 'criss ', 'O Flamengo foi fundado em 17 de novembro de 1895 para as disputas de remo. A entrada da equipe no futebol aconteceu em 1912. Atualmente, o time rubro-negro é o maior vencedor da história do Campeonato Carioca, com 31 títulos. Segundo diversas pesquisas, é o clube com o maior número de torcedores do País.', 0);

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `postagemusuarios`
--

INSERT INTO `postagemusuarios` (`codpost`, `coduserpost`, `userpost`, `titulopost`, `postcontent`, `likepost`) VALUES
(1, 2, 'julia', 'Particular', 'Questão 1\r\n A rebelião luso-brasileira em Pernambuco começou a ser urdida em 1644 e explodiu em 13 de junho de 1645, dia de Santo Antônio. Uma das primeiras medidas de João Fernandes foi decretar nulas as dívidas que os rebeldes tinham com os holandeses. Houve grande adesão da “nobreza da terra”, entusiasmada com esta proclamação heroica.\r\n\r\n \r\nO desencadeamento d', 0),
(4, 3, 'andré', 'Logaritmo', '(UFRGS - 2018) Se log3 x + log9 x = 1, então o valor de x é\r\n\r\na) ∛2.\r\nb) √2.\r\nc) ∛3.\r\nd) √3.\r\ne) ∛9.', 0),
(5, 4, 'pablo', 'Logaritmo', '(UFRGS - 2017) Se log5 x = 2 e log10 y = 4, então log20 y/x é\r\n\r\na) 2\r\nb) 4\r\nc) 6\r\nd) 8\r\ne) 10', 0),
(6, 2, 'julia', 'Modernismo', 'A Semana de arte moderna, ocorrida em 1922, inaugurou o movimento modernista no Brasil. A primeira fase do modernismo literário brasileiro, que durou de 1922 a 1930. Qual foi sua principal característica?', 0),
(7, 5, 'aline', 'Gramática', '(Facens) Assinale a alternativa em que o verbo é transitivo direto.\r\n\r\na) Comprei um terreno e construí a casa.\r\nb) Os guerreiros dormem agora.\r\nc) O cego não vê.\r\nd) João parece zangado.', 0),
(8, 6, 'marcos', 'Biologia', 'Na reprodução assexuada dos paramécios por conjugação, ocorre uma troca de\r\nmicronúcleos entre os dois protozoários através de uma ponte de citoplasma e, a\r\nseguir, eles se separam e se dividem por divisão binária não havendo, assim,\r\nvariação genética entre eles', 0),
(9, 6, 'marcos', 'Português', 'O que é objeto direto?', 0),
(10, 8, 'caique', 'Curiosidade sobre a lua', 'Por que o homem não voltou mais à Lua?\r\nSempre achei o máximo a ida mas nunca vi falarem novamente sobre, por qual motivo não fazemos mais expedições a lua??', 0),
(11, 9, 'alana', 'futebol', 'Quando foi fundado o time de futebol, flamengo??', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
