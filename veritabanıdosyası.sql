-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 28 Oca 2022, 18:28:00
-- Sunucu sürümü: 5.7.36
-- PHP Sürümü: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kullanici`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personel`
--

DROP TABLE IF EXISTS `personel`;
CREATE TABLE IF NOT EXISTS `personel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kullaniciadi` varchar(15) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `sifre` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `personel`
--

INSERT INTO `personel` (`id`, `kullaniciadi`, `mail`, `sifre`) VALUES
(1, 'Ornekkullanici', 'ornekkullanici@example.com', '4c7e384bc345a1349c31430b7b66ef58'),
(8, 'cevrim2', 'ahmet.cevrim@bilgiedu.net', 'd895fd4733590e2fba4bad55545d263e'),
(6, 'cevrimxe', 'purplecevrim@gmail.com', 'f53b50041aab2d5091ee1a9c272b6275');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
