-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.38-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para previsa
CREATE DATABASE IF NOT EXISTS `previsa` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `previsa`;

-- Copiando estrutura para tabela previsa.funcionario
CREATE TABLE IF NOT EXISTS `funcionario` (
  `CodFuncionario` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(400) NOT NULL,
  `DataNascimento` date NOT NULL,
  `Salario` decimal(18,2) NOT NULL,
  `Atividades` varchar(8000) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`CodFuncionario`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela previsa.funcionariofilho
CREATE TABLE IF NOT EXISTS `funcionariofilho` (
  `CodFuncionarioFilho` int(11) NOT NULL AUTO_INCREMENT,
  `CodFuncionario` int(11) DEFAULT NULL,
  `Nome` varchar(400) NOT NULL,
  `DataDeNascimento` date NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`CodFuncionarioFilho`),
  KEY `FK_funcionariofilho_funcionario` (`CodFuncionario`),
  CONSTRAINT `FK_funcionariofilho_funcionario` FOREIGN KEY (`CodFuncionario`) REFERENCES `funcionario` (`CodFuncionario`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
