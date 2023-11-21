-- --------------------------------------------------------
-- Sunucu:                       127.0.0.1
-- Sunucu sürümü:                5.7.33 - MySQL Community Server (GPL)
-- Sunucu İşletim Sistemi:       Win64
-- HeidiSQL Sürüm:               11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- emirtoprak için veritabanı yapısı dökülüyor
CREATE DATABASE IF NOT EXISTS `emirtoprak` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_turkish_ci */;
USE `emirtoprak`;

-- tablo yapısı dökülüyor emirtoprak.mesajlar
CREATE TABLE IF NOT EXISTS `mesajlar` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ADSOYAD` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `MAIL` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `TELEFON` int(11) DEFAULT NULL,
  `KONU` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `MESAJ` varchar(300) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- emirtoprak.mesajlar: ~1 rows (yaklaşık) tablosu için veriler indiriliyor
/*!40000 ALTER TABLE `mesajlar` DISABLE KEYS */;
INSERT INTO `mesajlar` (`ID`, `ADSOYAD`, `MAIL`, `TELEFON`, `KONU`, `MESAJ`) VALUES
	(4, ' Emir Toprak', ' emirtopraak@icloud.com', 855, ' Deneme', ' asfagafasfsafas'),
	(5, ' Halit Sever', ' halitsvr@outlook.com', 54744, ' Deneme', ' ajskjlfÅŸiskjhasbaskdasd');
/*!40000 ALTER TABLE `mesajlar` ENABLE KEYS */;

-- tablo yapısı dökülüyor emirtoprak.uyeler
CREATE TABLE IF NOT EXISTS `uyeler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kullanici_adi` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `parola` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- emirtoprak.uyeler: ~0 rows (yaklaşık) tablosu için veriler indiriliyor
/*!40000 ALTER TABLE `uyeler` DISABLE KEYS */;
INSERT INTO `uyeler` (`id`, `kullanici_adi`, `parola`) VALUES
	(1, 'emir', '0000');
/*!40000 ALTER TABLE `uyeler` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
