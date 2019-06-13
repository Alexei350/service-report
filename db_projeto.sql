-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.5.62 - MySQL Community Server (GPL)
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
  `ID` int(11) NOT NULL COMMENT 'Chave primária',
  `ID_usuario` int(11) NOT NULL COMMENT 'ID do usuário que cadastrou o cliente',
  `nome` varchar(50) NOT NULL COMMENT 'Nome do cliente',
  `sobrenome` varchar(50) NOT NULL COMMENT 'Sobrenome do cliente',
  `email` varchar(50) NOT NULL COMMENT 'Email do cliente',
  `cep` char(9) NOT NULL COMMENT 'CEP da residência do cliente',
  `cidade` varchar(50) NOT NULL COMMENT 'Cidade da residência do cliente',
  `estado` varchar(50) NOT NULL COMMENT 'Estado da residência do cliente',
  `logradouro` varchar(50) NOT NULL COMMENT 'Logradouro da residência do cliente',
  `numero` varchar(50) NOT NULL COMMENT 'Número da residência do cliente',
  PRIMARY KEY (`ID`,`ID_usuario`),
  KEY `FK_report_cliente_usuario` (`ID_usuario`),
  CONSTRAINT `FK_report_cliente_usuario` FOREIGN KEY (`ID_usuario`) REFERENCES `usuario` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Cadastro de clientes';

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela projeto.report_os
DROP TABLE IF EXISTS `report_os`;
CREATE TABLE IF NOT EXISTS `report_os` (
  `ID` int(11) NOT NULL COMMENT 'Chave primária',
  `ID_usuario` int(11) NOT NULL COMMENT 'ID do usuário que cadastrou a OS',
  `ID_cliente` int(11) NOT NULL COMMENT 'ID do cliente vinculado à OS',
  `servico` varchar(50) NOT NULL COMMENT 'Serviço prestado',
  `tempo` int(11) NOT NULL COMMENT 'Duração do serviço',
  `valor` decimal(10,2) NOT NULL COMMENT 'Valor cobrado',
  `data` date NOT NULL COMMENT 'Data do serviço',
  `hora` time NOT NULL COMMENT 'Hora do serviço',
  `descricao` text NOT NULL COMMENT 'Descrição detalhada do serviço',
  PRIMARY KEY (`ID`,`ID_usuario`),
  KEY `FK_report_os_report_cliente` (`ID_cliente`),
  KEY `FK_report_os_usuario` (`ID_usuario`),
  CONSTRAINT `FK_report_os_report_cliente` FOREIGN KEY (`ID_cliente`) REFERENCES `report_cliente` (`ID`),
  CONSTRAINT `FK_report_os_usuario` FOREIGN KEY (`ID_usuario`) REFERENCES `usuario` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Cadastro de ordens de serviço (OS)';

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela projeto.usuario
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Chave primária',
  `nome` varchar(50) NOT NULL COMMENT 'Nome do usuário',
  `sobrenome` varchar(50) NOT NULL COMMENT 'Sobrenome do usuário',
  `email` varchar(50) NOT NULL COMMENT 'Email do usuário',
  `senha` char(32) NOT NULL COMMENT 'Senha do usuário criptografada',
  `empresa` varchar(50) NOT NULL COMMENT 'Nome da empresa',
  `endereco` varchar(50) NOT NULL COMMENT 'Endereço do usuário/empresa',
  `cpfcnpj` varchar(50) NOT NULL COMMENT 'CPF do usuário/CNPJ da empresa',
  `pais` varchar(50) NOT NULL COMMENT 'País de residência/local da empresa',
  `estado` varchar(50) NOT NULL COMMENT 'Estado de residência/local da empresa',
  `cep` varchar(50) NOT NULL COMMENT 'CEP de residência/local da empresa',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Cadastro de usuários do sistema';

-- Exportação de dados foi desmarcado.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
