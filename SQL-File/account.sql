-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 14 Oca 2025, 15:32:12
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `account`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `gender` int(11) NOT NULL,
  `birthday` int(11) NOT NULL,
  `birthmonth` int(11) NOT NULL,
  `birthyear` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `account`
--

INSERT INTO `account` (`id`, `name`, `surname`, `email`, `password`, `gender`, `birthday`, `birthmonth`, `birthyear`) VALUES
(1, 'Burhan', 'Kıran', 'dabadabada@hotmail.com', 'dababababda', 1, 1, 1, 1973),
(2, 'mehmet', 'şimşek', 'dororo@gmail.com', 'dararara', -1, 29, 2, 1980),
(3, 'arda', 'turan', 'ardaturan.1@hotmail.com', 'turanArda', 1, 4, 3, 1985),
(4, 'hikaru', 'nakamura', 'hikaru@gmail.com', 'hikaru        ', 1, 17, 5, 1974),
(5, 'talent', 'talented', 'talentedtalent@gmail.com', 'talentedtalent', 1, 16, 4, 1977),
(6, 'Merlo', 'Merlin', 'merlinmerlo@gmail.com', 'merlinmerlo', 0, 1, 1, 2006),
(7, 'Turan', 'Tavacı', 'turanturaci@gmail.com', 'turan', 1, 16, 6, 1998),
(8, 'John', 'Connor', 'jconnor@gmail.com', 'jconnor', 1, 15, 5, 1975),
(9, 'Example', 'EXAMPLE', 'example@example.com', 'example', 1, 1, 2, 1994),
(10, 'dada', 'didi', 'dada@gmail.com', 'didi', 0, 1, 1, 2024);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `account`
--
ALTER TABLE `account`
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `email` (`email`) USING HASH;

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
