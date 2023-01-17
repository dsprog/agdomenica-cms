-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           10.4.13-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Copiando estrutura para tabela ahnatu_cms.banners
DROP TABLE IF EXISTS `banners`;
CREATE TABLE IF NOT EXISTS `banners` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expire` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela ahnatu_cms.banners: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;
INSERT INTO `banners` (`id`, `name`, `image`, `image_mobile`, `expire`, `status`, `created_at`, `updated_at`) VALUES
	(3, 'Suplementos', 'banner/banner-home1-1643161795.jpg', 'banner/banner-home1-m-1643161795.jpg', NULL, 1, '2022-01-25 22:49:55', '2022-01-25 23:41:28'),
	(5, 'Linha Meu Chá', 'banner/banner-home2-1643164670.jpg', 'banner/banner-home2-m-1643164670.jpg', NULL, 0, '2022-01-25 23:01:16', '2022-01-25 23:37:50'),
	(6, 'Cozinha Funcional', 'banner/banner-home3-1643164861.jpg', 'banner/banner-home3-m-1643164861.jpg', NULL, 1, '2022-01-25 23:39:32', '2022-01-25 23:41:01'),
	(7, 'Chás Tradicionais', 'banner/banner-home4-1643164975.jpg', 'banner/banner-home4-m-1643164975.jpg', NULL, 1, '2022-01-25 23:42:55', '2022-01-25 23:42:55');
/*!40000 ALTER TABLE `banners` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
