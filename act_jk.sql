-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 10-12-2020 a las 13:11:04
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `actualizaciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `act_jk`
--

DROP TABLE IF EXISTS `act_jk`;
CREATE TABLE IF NOT EXISTS `act_jk` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `sitioweb` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` varchar(31) COLLATE utf8_unicode_ci NOT NULL,
  `cam` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `com` varchar(140) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `por` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `horaAct` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `act_jk`
--

INSERT INTO `act_jk` (`id`, `sitioweb`, `fecha`, `cam`, `com`, `tipo`, `por`, `horaAct`) VALUES
(1, 'https://ligamastertercertiempo.com/wp-admin/plugins.php', '09/12/20', 'All-in-One WP Migration', 'Version 7.31', 'Actualizacion', 'JkDev', '18:20'),
(5, 'http://201.219.179.84/', '09/12/20', 'Negocios', '1. Negocio vÃ­a online', 'Plugin', 'Polly', ''),
(6, 'https://ligamastertercertiempo.com/wp-admin/plugins.php', '09/12/20', 'Coming Soon Page', 'VersiÃ³n 6.0.9.0', 'Actualizacion', 'JkDev', '18:45'),
(7, 'https://ligamastertercertiempo.com/wp-admin/plugins.php', '09/12/20', 'Contact Form 7', 'VersiÃ³n 5.2.1 => 5.3.1', 'Actualizacion', 'JkDev', '18:50'),
(8, 'https://ligamastertercertiempo.com/wp-admin/plugins.php', '09/12/20', 'Contact Form 7 Conditional', 'VersiÃ³n 1.9.9 =>1.9.14', 'Actualizacion', 'JkDev', '18:53'),
(9, 'https://ligamastertercertiempo.com/wp-admin/admin.php?page=ai1wm_backups', '09/12/20', 'Copia Seguridad', 'Antes de actualizar otros plugins se harÃ¡ un respaldo por seguridad.', 'Respaldo', 'JkDev', '18:56'),
(10, 'https://ligamastertercertiempo.com/wp-admin/plugins.php', '10/12/20', 'Smush', 'VersiÃ³n 3.6.3 => 3.7.3', 'ActualizaciÃ³n', 'JkDev', '19:10'),
(11, 'https://ligamastertercertiempo.com/wp-admin/plugins.php', '10/12/20', 'Premium Addons for Elementor', 'VersiÃ³n 3.21.2 => 4.0.9', 'ActualizaciÃ³n', 'JkDev', '19:30'),
(12, 'https://ligamastertercertiempo.com/wp-admin/plugins.php', '10/12/20', 'Page Visit Counter', 'VersiÃ³n 6.0.4 => 6.0.7', 'ActualizaciÃ³n', 'JkDev', '19:40'),
(13, 'https://ligamastertercertiempo.com/wp-admin/plugins.php', '10/12/20', 'OneSignal Push Notifications', 'VersiÃ³n 2.1.3 => 2.1.4', 'ActualizaciÃ³n', 'JkDev', '19:45'),
(14, 'https://ligamastertercertiempo.com/wp-admin/plugins.php', '10/12/20', 'WP Club Manager', 'VersiÃ³n 2.2.0 => 2.2.3', 'ActualizaciÃ³n', 'JkDev', '20:21'),
(15, 'https://ligamastertercertiempo.com/wp-admin/plugins.php', '10/12/20', 'WooCommerce', 'VersiÃ³n 4.5.2 => 4.8.0', 'ActualizaciÃ³n', 'JkDev', '21:00'),
(16, 'https://ligamastertercertiempo.com/wp-admin/plugins.php', '10/12/20', 'Elementor', 'VersiÃ³n 3.0.9 => 3.0.14', 'ActualizaciÃ³n', 'JkDev', '21:10'),
(18, 'https://ligamastertercertiempo.com/wp-admin/update-core.php', '10/12/20', 'Join.chat', '4.0.9 => 4.1.4', 'ActualizaciÃ³n', 'JkDev', '09:48');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
