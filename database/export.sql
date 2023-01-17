-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.33 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Copiando estrutura para tabela cegea.abouts
DROP TABLE IF EXISTS `abouts`;
CREATE TABLE IF NOT EXISTS `abouts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `resume` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela cegea.abouts: ~0 rows (aproximadamente)
DELETE FROM `abouts`;
INSERT INTO `abouts` (`id`, `resume`, `about`, `image`, `image2`) VALUES
	(1, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae nulla elit. Curabitur pulvinar metus et risus auctor, nec cursus tellus convallis. Curabitur a aliquam lorem, et consequat elit. Maecenas interdum arcu et est egestas, ac venenatis augue gravida. Duis non convallis nibh. Vivamus rutrum, magna sed bibendum venenatis, augue sem placerat diam, vel blandit velit tellus ac orci. Vivamus ac lorem et diam tincidunt tincidunt. Praesent consequat mattis bibendum.</p>', '<p><strong>CEGEA:</strong><br />Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in orci orci. Duis at enim in nibh posuere malesuada. Integer lectus sapien, finibus quis diam vitae, dapibus facilisis nulla. Ut ut augue augue. Proin vel dolor eget dui congue rutrum. Aliquam lacus mi, imperdiet ac sollicitudin id, consequat at est. Fusce quis consequat turpis, finibus placerat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce suscipit quam et fringilla ullamcorper. Praesent imperdiet, neque et commodo ultrices, augue nulla condimentum ligula, ac interdum augue orci vitae lectus. Aliquam quam mauris, consectetur nec augue a, pellentesque vehicula augue. Fusce mollis rutrum vestibulum. Curabitur vulputate lectus nec tellus euismod accumsan. Integer vitae nisi rhoncus est pulvinar tempus. Fusce accumsan tincidunt porta. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>COORDENA&Ccedil;&Atilde;O:</strong><br />Etiam dignissim felis at malesuada vulputate. Suspendisse convallis ut purus et maximus. Donec vel tristique mi. Praesent eget sem ut diam commodo tincidunt. Sed nec venenatis nisi. Sed porttitor dapibus consectetur. Phasellus auctor eu ligula non imperdiet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus sit amet lorem sem.</p>\r\n<p>Phasellus maximus massa sed eros efficitur, at dignissim nisl condimentum. Ut ac tellus eros. Proin at vestibulum nulla, id dictum enim. Duis efficitur sit amet tellus quis lobortis. Maecenas sit amet fringilla nisi, eu dignissim leo. Donec ipsum justo, tincidunt vel erat eu, scelerisque ornare sem. Etiam eget elementum risus. In aliquam mattis nulla, eget auctor lacus ultrices a. Aenean libero nisi, consectetur in ipsum mollis, mollis vulputate urna. Nullam ornare mauris mi, maximus vestibulum ligula pulvinar vel. In congue ultricies iaculis. Donec et sem finibus, luctus velit vel, malesuada mauris. Phasellus tincidunt lacus eu elit convallis, vel suscipit urna ullamcorper. Integer non molestie justo, nec viverra ligula.</p>', 'empresa/x7GjgfaSeeAIehMdauliInQHqZimA7vMYj1CMJ5Z.jpg', 'empresa/9uw0buRuXSGfxnyRyUwJNJAjRCvJRiN0ySyy3GF4.jpg');

-- Copiando estrutura para tabela cegea.banners
DROP TABLE IF EXISTS `banners`;
CREATE TABLE IF NOT EXISTS `banners` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `expiration_date` date DEFAULT NULL,
  `published_at` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela cegea.banners: ~2 rows (aproximadamente)
DELETE FROM `banners`;
INSERT INTO `banners` (`id`, `title`, `image`, `image_mobile`, `url`, `active`, `expiration_date`, `published_at`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Banner 1', 'banner/PBG93tokA2gy3hELxsdDZGYCKCQGQnxRhFcTWy0t.jpg', 'banner/A9G3Uk7hFxuDWZP2axQIImkPoAthdsFFv3In88HS.jpg', NULL, 1, NULL, '2022-08-20', '2022-08-20 12:38:45', '2022-08-20 12:38:45', NULL),
	(2, 'Banner 2', 'banner/ncmAYvFHALJKeyJxsRSZLbAW8oMFX8aELIeSO6CH.jpg', 'banner/iKwA1i2XYJyFmhtqx09AXSwM8wh9257riS1AZ35f.jpg', NULL, 1, NULL, '2022-08-20', '2022-08-20 12:39:17', '2022-08-20 12:39:17', NULL);

-- Copiando estrutura para tabela cegea.configs
DROP TABLE IF EXISTS `configs`;
CREATE TABLE IF NOT EXISTS `configs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_number` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_state` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_cep` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_complement` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(19) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone2` varchar(19) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp` varchar(19) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela cegea.configs: ~0 rows (aproximadamente)
DELETE FROM `configs`;
INSERT INTO `configs` (`id`, `address`, `address_number`, `address_city`, `address_state`, `address_cep`, `address_complement`, `phone`, `phone2`, `email`, `facebook`, `instagram`, `linkedin`, `whatsapp`, `map`) VALUES
	(1, 'Avenida Pádua Dias', '11', 'Piracicaba', 'SP', '13418-900', NULL, '(19) 3417-6604', '(19) 3417-6601', 'cegea@usp.br', 'https://pt-br.facebook.com/cegeausp/', 'https://www.instagram.com/cegeausp/', 'https://www.linkedin.com/in/cegea-usp-853855180/', '(11) 99999-9999', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3680.311321748311!2d-47.6271958492155!3d-22.716667185035742!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c631c747619913%3A0x49c6e972efa4243f!2sAv.%20P%C3%A1dua%20Dias%2C%2011%20-%20Piracicaba%2C%20SP!5e0!3m2!1spt-BR!2sbr!4v1660128959861!5m2!1spt-BR!2sbr" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>');

-- Copiando estrutura para tabela cegea.contacts
DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela cegea.contacts: ~49 rows (aproximadamente)
DELETE FROM `contacts`;
INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `body`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Daniel Santos', 'dsprog@gmail.com', '19996164370', 'Test', 'Esse é um teste', '2022-08-10 11:22:07', '2022-08-10 11:22:07', NULL),
	(2, 'Ana Paula', 'anapaula@gmail.com', '19 99996666', 'teaddsad', 'dasdas', '2022-08-10 11:22:44', '2022-08-10 11:22:44', NULL),
	(3, 'Carlos', 'carlos@millennialsbra.com.br', '19 66666666', 'dada', 'dasda', '2022-08-10 11:23:55', '2022-08-10 11:23:55', NULL),
	(4, 'Pedro', 'pedro@gmail.com', '19 88888888', 'dasdas', 'dasdadad', '2022-08-10 11:24:37', '2022-08-10 11:24:37', NULL),
	(5, 'daniel', 'dsprog@gmail.com', '19 333333333', 'Teste', 'Teste', '2022-08-10 11:36:05', '2022-08-10 11:36:05', NULL),
	(6, 'daniel', 'dsprog@gmail.com', '19 333333333', 'Teste', 'Teste', '2022-08-10 11:37:18', '2022-08-10 11:37:18', NULL),
	(7, 'daniel', 'dsprog@gmail.com', '19 333333333', 'Teste', 'Teste', '2022-08-10 11:37:42', '2022-08-10 11:37:42', NULL),
	(8, 'daniel', 'dsprog@gmail.com', '19 333333333', 'Teste', 'Teste', '2022-08-10 11:38:39', '2022-08-10 11:38:39', NULL),
	(9, 'daniel', 'dsprog@gmail.com', '19 333333333', 'Teste', 'Teste', '2022-08-10 11:39:06', '2022-08-10 11:39:06', NULL),
	(10, 'daniel', 'dsprog@gmail.com', '19 333333333', 'Teste', 'Teste', '2022-08-10 11:39:53', '2022-08-10 11:39:53', NULL),
	(11, 'daniel', 'dsprog@gmail.com', '19 333333333', 'Teste', 'Teste', '2022-08-10 11:40:01', '2022-08-10 11:40:01', NULL),
	(12, 'daniel', 'dsprog@gmail.com', '19 333333333', 'Teste', 'Teste', '2022-08-10 11:40:26', '2022-08-10 11:40:26', NULL),
	(13, 'daniel', 'dsprog@gmail.com', '19 333333333', 'Teste', 'Teste', '2022-08-10 11:42:21', '2022-08-10 11:42:21', NULL),
	(14, 'daniel', 'dsprog@gmail.com', '19 333333333', 'Teste', 'Teste', '2022-08-10 11:44:58', '2022-08-10 11:44:58', NULL),
	(15, 'daniel', 'dsprog@gmail.com', '19 333333333', 'Teste', 'Teste', '2022-08-10 11:46:07', '2022-08-10 11:46:07', NULL),
	(16, 'daniel', 'dsprog@gmail.com', '19 333333333', 'Teste', 'Teste', '2022-08-10 11:48:50', '2022-08-10 11:48:50', NULL),
	(17, 'daniel', 'dsprog@gmail.com', '19 333333333', 'Teste', 'Teste', '2022-08-10 11:51:34', '2022-08-10 11:51:34', NULL),
	(18, 'daniel', 'dsprog@gmail.com', '19 333333333', 'Teste', 'Teste', '2022-08-10 11:51:57', '2022-08-10 11:51:57', NULL),
	(19, 'daniel', 'dsprog@gmail.com', '19 333333333', 'Teste', 'Teste', '2022-08-10 11:53:11', '2022-08-10 11:53:11', NULL),
	(20, 'daniel', 'dsprog@gmail.com', '19 333333333', 'Teste', 'Teste', '2022-08-10 11:54:02', '2022-08-10 11:54:02', NULL),
	(21, 'daniel', 'dsprog@gmail.com', '19 333333333', 'Teste', 'Teste', '2022-08-10 11:55:14', '2022-08-10 11:55:14', NULL),
	(22, 'daniel', 'dsprog@gmail.com', '19 333333333', 'Teste', 'Teste', '2022-08-10 11:57:30', '2022-08-10 11:57:30', NULL),
	(23, 'daniel', 'dsprog@gmail.com', '19 333333333', 'Teste', 'Teste', '2022-08-10 11:58:46', '2022-08-10 11:58:46', NULL),
	(24, 'daniel', 'dsprog@gmail.com', '19 333333333', 'Teste', 'Teste', '2022-08-10 12:01:15', '2022-08-10 12:01:15', NULL),
	(25, 'daniel', 'dsprog@gmail.com', '19 333333333', 'Teste', 'Teste', '2022-08-10 12:05:45', '2022-08-10 12:05:45', NULL),
	(26, 'daniel', 'dsprog@gmail.com', '19 333333333', 'Teste', 'Teste', '2022-08-10 12:24:38', '2022-08-10 12:24:38', NULL),
	(27, 'daniel', 'dsprog@gmail.com', '19 333333333', 'Teste', 'Teste', '2022-08-10 12:25:17', '2022-08-10 12:25:17', NULL),
	(28, 'daniel', 'dsprog@gmail.com', '19 333333333', 'Teste', 'Teste', '2022-08-10 12:29:56', '2022-08-10 12:29:56', NULL),
	(29, 'Daniel Santos', 'dsprog@gmail.com', '19 99616-4370', 'Teste', 'Teste de contato\r\nEnviado', '2022-08-15 21:07:23', '2022-08-15 21:07:23', NULL),
	(30, 'Daniel Santos', 'dsprog@gmail.com', '19 99616-4370', 'Teste', 'Teste de contato\r\nEnviado', '2022-08-15 21:09:53', '2022-08-15 21:09:53', NULL),
	(31, 'Daniel Santos', 'dsprog@gmail.com', '19 99616-4370', 'Teste', 'Teste de contato\r\nEnviado', '2022-08-15 21:10:21', '2022-08-15 21:10:21', NULL),
	(32, 'Daniel Santos', 'dsprog@gmail.com', '19 99616-4370', 'Teste', 'Teste de contato\r\nEnviado', '2022-08-15 21:10:26', '2022-08-15 21:10:26', NULL),
	(33, 'Daniel Santos', 'dsprog@gmail.com', '19 99616-4370', 'Teste', 'Teste de contato\r\nEnviado', '2022-08-15 21:11:23', '2022-08-15 21:11:23', NULL),
	(34, 'Daniel Santos', 'dsprog@gmail.com', '19 99616-4370', 'Teste', 'Teste de contato\r\nEnviado', '2022-08-15 21:12:23', '2022-08-15 21:12:23', NULL),
	(35, 'Daniel Santos', 'dsprog@gmail.com', '19 99616-4370', 'Teste', 'Teste de contato\r\nEnviado', '2022-08-15 21:12:28', '2022-08-15 21:12:28', NULL),
	(36, 'Daniel Santos', 'dsprog@gmail.com', '19 99616-4370', 'Teste', 'Teste de contato\r\nEnviado', '2022-08-15 21:12:41', '2022-08-15 21:12:41', NULL),
	(37, 'Daniel Santos', 'dsprog@gmail.com', '19 99616-4370', 'Teste', 'Teste de contato\r\nEnviado', '2022-08-15 21:13:05', '2022-08-15 21:13:05', NULL),
	(38, 'Daniel Santos', 'dsprog@gmail.com', '19 99616-4370', 'Teste', 'Teste de contato\r\nEnviado', '2022-08-15 21:13:27', '2022-08-15 21:13:27', NULL),
	(39, 'Daniel Santos', 'dsprog@gmail.com', '19 99616-4370', 'Teste', 'Teste de contato\r\nEnviado', '2022-08-15 21:24:05', '2022-08-15 21:24:05', NULL),
	(40, 'Daniel Santos', 'dsprog@gmail.com', '19 99616-4370', 'Teste', 'Teste de contato\r\nEnviado', '2022-08-15 21:26:56', '2022-08-15 21:26:56', NULL),
	(41, 'Daniel Santos', 'dsprog@gmail.com', '19 99616-4370', 'Teste', 'Teste de contato\r\nEnviado', '2022-08-15 21:28:50', '2022-08-15 21:28:50', NULL),
	(42, 'Daniel Santos', 'dsprog@gmail.com', '19 99616-4370', 'Teste', 'Teste de contato\r\nEnviado', '2022-08-15 21:29:15', '2022-08-15 21:29:15', NULL),
	(43, 'Daniel Santos', 'dsprog@gmail.com', '19 99616-4370', 'Teste', 'Teste de contato\r\nEnviado', '2022-08-15 21:29:40', '2022-08-15 21:29:40', NULL),
	(44, 'Daniel Santos', 'dsprog@gmail.com', '19 99616-4370', 'Teste', 'Teste de contato\r\nEnviado', '2022-08-15 21:30:03', '2022-08-15 21:30:03', NULL),
	(45, 'Daniel Santos', 'dsprog@gmail.com', '19 99616-4370', 'Teste', 'Teste de contato\r\nEnviado', '2022-08-15 21:31:39', '2022-08-15 21:31:39', NULL),
	(46, 'Daniel Santos', 'dsprog@gmail.com', '19 99616-4370', 'Teste', 'Teste de contato\r\nEnviado', '2022-08-15 21:37:40', '2022-08-15 21:37:40', NULL),
	(47, 'Daniel Santos', 'dsprog@gmail.com', '19 99616-4370', 'Teste', 'Teste de contato\r\nEnviado', '2022-08-15 21:41:55', '2022-08-15 21:41:55', NULL),
	(48, 'Daniel Santos', 'dsprog@gmail.com', '19 99616-4370', 'Teste', 'Teste de contato\r\nEnviado', '2022-08-15 21:42:01', '2022-08-15 21:42:01', NULL),
	(49, 'Daniel Santos', 'dsprog@gmail.com', '19 99616-4370', 'Teste', 'Teste de contato\r\nEnviado', '2022-08-15 21:42:14', '2022-08-15 21:42:14', NULL),
	(50, 'Daniel Santos', 'dsprog@gmail.com', '19 99616-4370', 'Teste', 'Esse', '2022-08-15 21:42:48', '2022-08-15 21:42:48', NULL),
	(51, 'Daniel Santos', 'dsprog@gmail.com', '19 99616-4370', 'Teste', 'Esse', '2022-08-15 21:45:16', '2022-08-15 21:45:16', NULL),
	(52, 'Daniel Santos', 'dsprog@gmail.com', '19 99616-4370', 'Teste', 'Esse', '2022-08-15 22:20:29', '2022-08-15 22:20:29', NULL),
	(53, 'Daniel Santos', 'dsprog@gmail.com', '19 99616-4370', 'Teste', 'Esse', '2022-08-15 22:23:06', '2022-08-15 22:23:06', NULL),
	(54, 'Daniel Santos', 'dsprog@gmail.com', '19 99616-4370', 'Teste', 'Esse', '2022-08-15 22:23:12', '2022-08-15 22:23:12', NULL),
	(55, 'Daniel Santos', 'dsprog@gmail.com', '19 99616-4370', 'Teste', 'Esse', '2022-08-15 22:25:07', '2022-08-15 22:25:07', NULL);

-- Copiando estrutura para tabela cegea.courses
DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resume` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `period` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `investment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subscription` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `more_info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `published_at` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_info` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela cegea.courses: ~5 rows (aproximadamente)
DELETE FROM `courses`;
INSERT INTO `courses` (`id`, `title`, `slug`, `resume`, `image`, `body`, `period`, `investment`, `subscription`, `more_info`, `active`, `published_at`, `created_at`, `updated_at`, `deleted_at`, `date`, `date_info`) VALUES
	(1, 'Pós Graduação', 'pos-graduacao', 'Resumo 1', 'curso/IG96GcNh2UWpVjSOB6Du6DGons4vSEJIxwtlwcEF.jpg', '<p>Descri&ccedil;&atilde;o add</p>', '<p>Per&iacute;odo add</p>', '<p>Investimento add</p>', 'https://google.com.br', '<p>Mais informa&ccedil;&otilde;es add</p>', 1, '2022-08-06', '2022-08-06 18:53:19', '2022-08-15 23:25:06', NULL, '', ''),
	(2, 'Teste 2', 'teste-2', 'Resumo 2', 'curso/6BMGksc4R7AI3Cs7tYXN1nE6SPiqrRUibQufWts2.jpg', '<p>Descri&ccedil;&atilde;o add 2</p>', '<p>Per&iacute;odo add 2</p>', '<p>Investimento add 2</p>', 'https://google.com.br', '<p>Mais informa&ccedil;&otilde;es add 2</p>', 1, '2022-07-09', '2022-08-06 18:54:32', '2022-08-06 18:54:32', NULL, '', ''),
	(3, 'Teste 3', 'teste-3', 'Resumo 3', 'curso/SFc7lEhuH1cO0QzoG6e7MCfK4N00bWIFW2qid4Ib.jpg', '<p>Descri&ccedil;&atilde;o add 3</p>', '<p>Per&iacute;odo add 3</p>', '<p>Investimento add 3</p>', 'https://google.com.br', '<p>Mais informa&ccedil;&otilde;es add 3</p>', 1, '2022-08-08', '2022-08-06 18:55:14', '2022-08-06 18:58:06', NULL, '', ''),
	(4, 'Teste 4', 'teste-4', 'Resumo 4', 'curso/6gpEJBRtjwLciK60SB3f3a0LNBVX2PKrxAxnH2Wl.jpg', '<p>Descri&ccedil;&atilde;o add 4</p>', '<p>Per&iacute;odo add 4</p>', '<p>Investimento add 4</p>', 'https://google.com.br', '<p>Mais informa&ccedil;&otilde;es add 4</p>', 1, '2022-08-07', '2022-08-06 18:56:25', '2022-08-06 18:56:25', NULL, '', ''),
	(5, 'TREINAMENTO E ATUALIZAÇÃO EM LICENCIAMENTO AMBIENTAL - ELABORAÇÃO E APROVAÇÃO DO PROCESSO REGULATÓRIO', 'treinamento-e-atualizacao-em-licenciamento-ambiental-elaboracao-e-aprovacao-do-processo-regulatorio', 'Resumo 5', 'curso/7pUqCO77Gu0KICAE1JKfMV5c8aPKIjreeMSxBpyK.jpg', '<p>Descri&ccedil;&atilde;o add 5</p>', '<p>Per&iacute;odo add 5</p>', '<p>Investimento add 5</p>', 'https://google.com.br', '<p>Mais informa&ccedil;&otilde;es add 5</p>', 0, '2022-08-10', '2022-08-06 18:57:31', '2022-08-15 22:34:41', NULL, '', '');

-- Copiando estrutura para tabela cegea.disciplines
DROP TABLE IF EXISTS `disciplines`;
CREATE TABLE IF NOT EXISTS `disciplines` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ead_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `disciplines_ead_id_foreign` (`ead_id`),
  KEY `disciplines_user_id_foreign` (`user_id`),
  CONSTRAINT `disciplines_ead_id_foreign` FOREIGN KEY (`ead_id`) REFERENCES `eads` (`id`),
  CONSTRAINT `disciplines_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela cegea.disciplines: ~6 rows (aproximadamente)
DELETE FROM `disciplines`;
INSERT INTO `disciplines` (`id`, `ead_id`, `user_id`, `title`, `active`, `created_at`, `updated_at`) VALUES
	(1, 3, 3, 'Disciplina 1', 1, '2022-08-31 19:45:04', '2022-08-31 19:45:04'),
	(2, 3, 3, 'Disciplina 2', 1, '2022-08-31 19:49:50', '2022-08-31 19:49:50'),
	(3, 3, 3, 'Disciplina 3', 1, '2022-08-31 19:49:58', '2022-08-31 19:49:58'),
	(4, 4, 3, 'Logica Matemática', 1, '2022-10-05 17:21:08', '2022-10-05 17:21:08'),
	(5, 4, 3, 'Gramatica', 1, '2022-12-21 12:42:33', '2022-12-21 12:42:33'),
	(6, 4, 3, 'Inglês', 1, '2022-12-21 12:42:47', '2022-12-21 12:42:47');

-- Copiando estrutura para tabela cegea.eads
DROP TABLE IF EXISTS `eads`;
CREATE TABLE IF NOT EXISTS `eads` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resume` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `expiration_date` date DEFAULT NULL,
  `published_at` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela cegea.eads: ~2 rows (aproximadamente)
DELETE FROM `eads`;
INSERT INTO `eads` (`id`, `title`, `slug`, `resume`, `body`, `active`, `expiration_date`, `published_at`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(3, 'Curso de PHP', 'curso-de-php', 'Esse é um curso básico de php para iniciantes.', '<div>\r\n<div>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit iure impedit molestiae vitae aut fugiat accusantium fuga! Eligendi pariatur inventore mollitia reiciendis, quas quod. Adipisci laborum animi nemo quia ipsam.</div>\r\n</div>', 1, '2022-11-30', '2022-08-19', '2022-08-15 14:18:53', '2022-08-15 14:18:53', NULL),
	(4, 'Curso Logica de Programação', 'curso-logica-de-programacao', 'Curso para inicantes', '<p>dsada</p>', 1, NULL, '2022-10-05', '2022-10-05 17:19:52', '2022-10-05 17:19:52', NULL);

-- Copiando estrutura para tabela cegea.ead_user
DROP TABLE IF EXISTS `ead_user`;
CREATE TABLE IF NOT EXISTS `ead_user` (
  `ead_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`,`ead_id`),
  KEY `fk_ead_id` (`ead_id`),
  CONSTRAINT `ead_user_ead_id_foreign` FOREIGN KEY (`ead_id`) REFERENCES `eads` (`id`),
  CONSTRAINT `ead_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `fk_ead_id` FOREIGN KEY (`ead_id`) REFERENCES `eads` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela cegea.ead_user: ~2 rows (aproximadamente)
DELETE FROM `ead_user`;
INSERT INTO `ead_user` (`ead_id`, `user_id`, `active`, `created_at`, `updated_at`) VALUES
	(4, 2, 1, NULL, NULL),
	(3, 4, 1, NULL, NULL),
	(4, 4, 1, NULL, NULL);

-- Copiando estrutura para tabela cegea.failed_jobs
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela cegea.failed_jobs: ~0 rows (aproximadamente)
DELETE FROM `failed_jobs`;

-- Copiando estrutura para tabela cegea.lessons
DROP TABLE IF EXISTS `lessons`;
CREATE TABLE IF NOT EXISTS `lessons` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ead_id` bigint(20) unsigned NOT NULL,
  `discipline_id` bigint(20) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `resume` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vimeo_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `download_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `expiration_date` date DEFAULT NULL,
  `published_at` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lessons_ead_id_foreign` (`ead_id`),
  KEY `lessons_discipline_id_foreign` (`discipline_id`),
  CONSTRAINT `lessons_discipline_id_foreign` FOREIGN KEY (`discipline_id`) REFERENCES `disciplines` (`id`),
  CONSTRAINT `lessons_ead_id_foreign` FOREIGN KEY (`ead_id`) REFERENCES `eads` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela cegea.lessons: ~5 rows (aproximadamente)
DELETE FROM `lessons`;
INSERT INTO `lessons` (`id`, `ead_id`, `discipline_id`, `title`, `resume`, `vimeo_id`, `download_url`, `active`, `expiration_date`, `published_at`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 3, 1, 'Teste', '<div>\r\n<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id quod maxime ipsa neque ad impedit quo quisquam qui cum deserunt optio officiis eum animi, eius eos necessitatibus, cumque, excepturi reiciendis?</div>\r\n</div>', '735918780', 'https://google.com.br', 1, NULL, '2022-08-31', '2022-08-31 19:48:17', '2022-08-31 19:48:17', NULL),
	(2, 3, 1, 'Aula 2', '<div>\r\n<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id quod maxime ipsa neque ad impedit quo quisquam qui cum deserunt optio officiis eum animi, eius eos necessitatibus, cumque, excepturi reiciendis?</div>\r\n</div>', '741193833', NULL, 1, NULL, '2022-08-31', '2022-08-31 19:49:20', '2022-08-31 19:49:20', NULL),
	(3, 3, 2, 'Aula 3', '<div>\r\n<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id quod maxime ipsa neque ad impedit quo quisquam qui cum deserunt optio officiis eum animi, eius eos necessitatibus, cumque, excepturi reiciendis?</div>\r\n</div>', '313586923', NULL, 1, NULL, '2022-08-31', '2022-08-31 19:50:44', '2022-08-31 19:50:44', NULL),
	(6, 4, 6, 'Aula 1', '<p>Aula 1 descri&ccedil;&atilde;o</p>', 'dsadsa', NULL, 1, NULL, '2022-12-21', '2022-12-21 12:55:15', '2022-12-21 12:55:15', NULL),
	(7, 4, 6, 'Aula 2', '<p>Aula 2</p>', 'curzpCATAuw', NULL, 1, NULL, '2022-12-20', '2022-12-21 12:58:11', '2022-12-21 12:58:11', NULL);

-- Copiando estrutura para tabela cegea.lesson_user
DROP TABLE IF EXISTS `lesson_user`;
CREATE TABLE IF NOT EXISTS `lesson_user` (
  `lesson_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `attended_class` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`,`lesson_id`),
  KEY `lesson_user_lesson_id_foreign` (`lesson_id`),
  CONSTRAINT `lesson_user_lesson_id_foreign` FOREIGN KEY (`lesson_id`) REFERENCES `lessons` (`id`) ON DELETE CASCADE,
  CONSTRAINT `lesson_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela cegea.lesson_user: ~2 rows (aproximadamente)
DELETE FROM `lesson_user`;
INSERT INTO `lesson_user` (`lesson_id`, `user_id`, `attended_class`, `created_at`, `updated_at`) VALUES
	(1, 2, 1, NULL, NULL),
	(2, 2, 1, NULL, NULL);

-- Copiando estrutura para tabela cegea.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela cegea.migrations: ~19 rows (aproximadamente)
DELETE FROM `migrations`;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(18, '2014_10_12_000000_create_users_table', 1),
	(19, '2014_10_12_100000_create_password_resets_table', 1),
	(20, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
	(21, '2019_08_19_000000_create_failed_jobs_table', 1),
	(22, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(23, '2022_02_04_165858_create_sessions_table', 1),
	(24, '2022_02_04_182229_create_roles_table', 1),
	(25, '2022_02_04_182451_add_roles_to_users', 1),
	(26, '2022_02_09_002335_create_configs_table', 1),
	(27, '2022_02_09_002350_create_abouts_table', 1),
	(28, '2022_02_09_002410_create_courses_table', 1),
	(29, '2022_02_09_004936_create_contacts_table', 1),
	(30, '2022_02_09_013220_create_eads_table', 1),
	(31, '2022_02_09_013419_create_ead_user_table', 1),
	(43, '2022_02_09_031457_create_banners_table', 2),
	(44, '2022_03_09_225750_add_deleted_at_to_users_table', 2),
	(63, '2022_02_09_040805_create_disciplines_table', 3),
	(64, '2022_02_09_040806_create_lessons_table', 3),
	(65, '2022_08_15_154736_create_lesson_user_table', 3),
	(66, '2022_09_27_124601_create_notes_table', 4),
	(67, '2022_09_27_193759_create_note_user_table', 4);

-- Copiando estrutura para tabela cegea.notes
DROP TABLE IF EXISTS `notes`;
CREATE TABLE IF NOT EXISTS `notes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `discipline_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notes_discipline_id_foreign` (`discipline_id`),
  CONSTRAINT `notes_discipline_id_foreign` FOREIGN KEY (`discipline_id`) REFERENCES `disciplines` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela cegea.notes: ~3 rows (aproximadamente)
DELETE FROM `notes`;
INSERT INTO `notes` (`id`, `name`, `discipline_id`, `created_at`, `updated_at`) VALUES
	(1, 'Prova 1', 1, '2022-10-05 17:02:39', '2022-10-05 17:02:39'),
	(2, 'Trabalho', 1, '2022-10-05 17:06:47', '2022-10-05 17:06:47'),
	(3, 'Trabalho', 4, '2022-10-05 17:22:45', '2022-10-05 17:22:45');

-- Copiando estrutura para tabela cegea.note_user
DROP TABLE IF EXISTS `note_user`;
CREATE TABLE IF NOT EXISTS `note_user` (
  `note_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`,`note_id`),
  KEY `note_user_note_id_foreign` (`note_id`),
  CONSTRAINT `note_user_note_id_foreign` FOREIGN KEY (`note_id`) REFERENCES `notes` (`id`) ON DELETE CASCADE,
  CONSTRAINT `note_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela cegea.note_user: ~5 rows (aproximadamente)
DELETE FROM `note_user`;
INSERT INTO `note_user` (`note_id`, `user_id`, `note`, `created_at`, `updated_at`) VALUES
	(1, 2, '5', NULL, NULL),
	(2, 2, '7', NULL, NULL),
	(3, 2, '10', NULL, NULL),
	(1, 4, '10', NULL, NULL),
	(2, 4, '3', NULL, NULL);

-- Copiando estrutura para tabela cegea.password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela cegea.password_resets: ~0 rows (aproximadamente)
DELETE FROM `password_resets`;

-- Copiando estrutura para tabela cegea.personal_access_tokens
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela cegea.personal_access_tokens: ~0 rows (aproximadamente)
DELETE FROM `personal_access_tokens`;

-- Copiando estrutura para tabela cegea.roles
DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela cegea.roles: ~3 rows (aproximadamente)
DELETE FROM `roles`;
INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Administrator', '2022-04-07 10:26:20', '2022-04-07 10:26:20'),
	(2, 'Estudante', '2022-04-07 10:26:20', '2022-04-07 10:26:20'),
	(3, 'Professor', '2022-04-07 10:26:20', '2022-04-07 10:26:20');

-- Copiando estrutura para tabela cegea.sessions
DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela cegea.sessions: ~3 rows (aproximadamente)
DELETE FROM `sessions`;
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('JFtcPzEnxlinQpX9SnHqGuIyNCcSsJ92bNtaSz9O', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiTXJjSFgzSVZOTXlCeXlTbEF3Q0FtMUdPVm9TV0lhZUhjMjBJMUd4aSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hZG1pbi9lYWQvNC9hbHVub3MiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJE1ySmp0NXpKejZ5Y1VhM0VBaTd1N3VOWU1MOUJ0L3BGbUpzbnNXcGsuYkh3OWJYVU9raFRPIjt9', 1671629981),
	('wyJA1SpoBONKFmxDr49XCX8WMTa1v7BLsrscfVIs', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiZzA0VFpGd3BjM1k4RkZXeEttNjkySnptNElxSE9lMkN4MEdSUW5uQyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hbHVubyI7fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo0O3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkWGpwWnU0VndSMUo2eE96RGlsNzBlZWdQVGxCMnNIQ25peGkxYTVZMVIwbGpsUDNDeWdNdC4iO30=', 1671629946);

-- Copiando estrutura para tabela cegea.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela cegea.users: ~4 rows (aproximadamente)
DELETE FROM `users`;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `role_id`, `deleted_at`) VALUES
	(1, 'Daniel Santos', 'dsprog@gmail.com', NULL, '$2y$10$MrJjt5zJz6ycUa3EAi7u7uNYML9Bt/pFmJsnsWpk.bHw9bXUOkhTO', NULL, NULL, NULL, NULL, NULL, '2022-04-07 10:26:20', '2022-12-21 11:46:15', 1, NULL),
	(2, 'Estudante', 'estudante@gmail.com', NULL, '$2y$10$ItvUTlS7/yXAUqKm1nYx7uS1DBsdhdikWJfqSxeamamYu83zKeU5G', NULL, NULL, 'wE9kvGSE4pTo4RqBvNtwjBK2eK6fa7edYyXFzXFL0jC27wrVpxeoHSVavJg6', NULL, NULL, '2022-04-07 10:26:20', '2022-12-21 13:08:17', 2, NULL),
	(3, 'Professor', 'professor@gmail.com', NULL, '$2y$10$B0AO6bvqudvYs2IttNk1buSRVuIDlYncN53ZbgIwUs5yldgHPzo7G', NULL, NULL, NULL, NULL, NULL, '2022-04-07 10:26:20', '2022-04-07 10:26:20', 3, NULL),
	(4, 'Estudante 2', 'estudante2@gmail.com', NULL, '$2y$10$XjpZu4VwR1J6xOzDil70eegPTlB2sHCnixi1a5Y1R0ljlP3CygMt.', NULL, NULL, 'kD48AaKiLZZxUYPWxXJbm7nIMYfcbGshxr8ZjxkyFmW9UjXiwBCpgyGWpt9A', NULL, NULL, '2022-04-07 10:26:20', '2022-12-21 13:08:39', 2, NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
