-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.38-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para projeto
DROP DATABASE IF EXISTS `projeto`;
CREATE DATABASE IF NOT EXISTS `projeto` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `projeto`;

-- Copiando estrutura para tabela projeto.report_cliente
DROP TABLE IF EXISTS `report_cliente`;
CREATE TABLE IF NOT EXISTS `report_cliente` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cep` char(9) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `logradouro` varchar(50) NOT NULL,
  `numero` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela projeto.report_os
DROP TABLE IF EXISTS `report_os`;
CREATE TABLE IF NOT EXISTS `report_os` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_cliente` int(11) NOT NULL,
  `servico` varchar(50) NOT NULL,
  `tempo` int(11) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `descricao` text NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_report_os_report_cliente` (`ID_cliente`),
  CONSTRAINT `FK_report_os_report_cliente` FOREIGN KEY (`ID_cliente`) REFERENCES `report_cliente` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela projeto.usuario
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` char(32) NOT NULL,
  `empresa` varchar(50) NOT NULL,
  `logradouro` varchar(50) NOT NULL,
  `numero` int(11) NOT NULL,
  `cpfcnpj` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `cep` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
