-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.32-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para loja-wf
CREATE DATABASE IF NOT EXISTS `loja-wf` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `loja-wf`;

-- Copiando estrutura para tabela loja-wf.itens
CREATE TABLE IF NOT EXISTS `itens` (
  `CodProduto` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) DEFAULT NULL,
  `Valor` varchar(50) DEFAULT NULL,
  `imagens` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`CodProduto`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela loja-wf.itens: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `itens` DISABLE KEYS */;
INSERT INTO `itens` (`CodProduto`, `Nome`, `Valor`, `imagens`) VALUES
	(1, 'Hidratante Drunk Elephant', '500', '../imgs/hidratante.jpg'),
	(2, 'Niacinamida The Ordinary', '100', '../imgs/niacinamida.jpg'),
	(3, 'Protetor Solar em gel Byoma', '429', '../imgs/protetor.png'),
	(4, 'Lip Sleeping mask Laneige', '116', '../imgs/balm.jpg'),
	(5, 'Tônico hidratante Glow Recipe', '249', '../imgs/tonico.jpg'),
	(6, 'Solução antioleosidade Skinceuticals', '99', '../imgs/solucao.png');
/*!40000 ALTER TABLE `itens` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
