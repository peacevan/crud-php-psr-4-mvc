-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.18-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para crud_psr4
CREATE DATABASE IF NOT EXISTS `crud_psr4` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `crud_psr4`;

-- Copiando estrutura para tabela crud_psr4.produtos
CREATE TABLE IF NOT EXISTS `produtos` (
  `id_prod` int(20) NOT NULL AUTO_INCREMENT,
  `id_loja` varchar(20) NOT NULL,
  `cod_ean` varchar(20) NOT NULL,
  `descricao_prod` varchar(100) NOT NULL,
  `valor` varchar(16) NOT NULL,
  `limite` varchar(200) NOT NULL,
  `qtd` varchar(200) NOT NULL DEFAULT '0',
  `saida` varchar(100) NOT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_prod`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela crud_psr4.produtos: 6 rows
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` (`id_prod`, `id_loja`, `cod_ean`, `descricao_prod`, `valor`, `limite`, `qtd`, `saida`, `tipo`) VALUES
	(16, '', '014', 'FRANGO COM CATUPIRY', '36,00', '', '0', '', NULL),
	(3, '1', '002', 'QUATRO QUEIJOS', '37,00', '50', '0', '9', 'PIZZA'),
	(4, '1', '004', 'MARGUERITA', '30.00', '50', '0', '1', 'PIZZA'),
	(6, '1', '006', 'MUÇARELA', '45,00', '50', '0', '2', 'PIZZA'),
	(13, '', '012', 'PORTUGUESA', '38,00', '', '0', '', NULL),
	(15, '', '003', 'CERTANEJA', '30,00', '', '0', '', NULL);
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
