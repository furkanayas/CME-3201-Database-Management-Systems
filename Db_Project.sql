-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 25 Ara 2018, 20:26:56
-- Sunucu sürümü: 10.1.33-MariaDB
-- PHP Sürümü: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `Db_Project`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Company`
--

CREATE TABLE `Company` (
  `C_name` varchar(20) COLLATE utf8_turkish_ci NOT NULL DEFAULT 'Ayas''s Garage',
  `A_name` varchar(50) COLLATE utf8_turkish_ci NOT NULL DEFAULT 'admin',
  `A_password` varchar(50) COLLATE utf8_turkish_ci NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `Company`
--

INSERT INTO `Company` (`C_name`, `A_name`, `A_password`) VALUES
('Ayas Garage', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `depo`
--

CREATE TABLE `depo` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `depo`
--

INSERT INTO `depo` (`id`, `name`, `image`) VALUES
(1, 'resim_ismi', 0x726573696d5f626f79757475),
(2, 'resim_ismi', 0x726573696d5f626f79757475),
(3, 'resim_ismi', 0x726573696d5f626f79757475),
(4, '/opt/lampp/temp/phpN4zabX', 0x4172726179),
(5, '/opt/lampp/temp/phpSBYave', 0x4172726179),
(6, '/opt/lampp/temp/phpr6QLCv', 0x4172726179),
(7, '/opt/lampp/temp/phpl3YXaO', 0x4172726179),
(8, '/opt/lampp/temp/phpKIFBZz', 0x4172726179),
(9, '/opt/lampp/temp/phpN17Qmy', 0x4172726179),
(10, '/opt/lampp/temp/phpYGDL3d', 0x4172726179),
(11, '/opt/lampp/temp/php32DywT', 0x4172726179),
(12, '/opt/lampp/temp/php8r0IxB', 0x4172726179),
(13, '/opt/lampp/temp/phpJHDrRt', 0x4172726179),
(14, '/opt/lampp/temp/phpFUrD6j', 0x4172726179),
(15, '/opt/lampp/temp/phpX1tqME', 0x4172726179),
(16, '/opt/lampp/temp/php0KmbKu', 0x4172726179),
(17, '/opt/lampp/temp/php4YIGCY', 0x4172726179),
(18, '/opt/lampp/temp/phppNloV7', 0x4172726179),
(19, '/opt/lampp/temp/phpmHh8Qb', 0x4172726179);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Employee`
--

CREATE TABLE `Employee` (
  `E_name` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `E_surname` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `E_age` int(11) NOT NULL,
  `E_city` varchar(20) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `Employee`
--

INSERT INTO `Employee` (`E_name`, `E_surname`, `E_age`, `E_city`) VALUES
('Furkan2', 'Ayas2', 22, 'izmir2'),
('ads', 'asd', 12, 'asd'),
('axdas', 'axdaxds', 21, 'asdasxdas'),
('sadf', 'xdasd', 12, 'asd'),
('', '', 0, ''),
('', '', 0, '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Images`
--

CREATE TABLE `Images` (
  `V_adver_no` int(11) NOT NULL,
  `Image_no` int(11) NOT NULL,
  `Image_url` blob NOT NULL,
  `Image_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `User`
--

CREATE TABLE `User` (
  `U_name` varchar(30) COLLATE utf8_turkish_ci DEFAULT NULL,
  `U_surname` varchar(30) COLLATE utf8_turkish_ci DEFAULT NULL,
  `U_username` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `U_email` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `U_password` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `U_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `User`
--

INSERT INTO `User` (`U_name`, `U_surname`, `U_username`, `U_email`, `U_password`, `U_user_id`) VALUES
('Furkan', 'Ayas', 'furkanayas', 'furkanayas@gmail.com', 'asd123123', 1),
('a', 'b', 'c8', NULL, NULL, 27),
('a', 'b', 'c9', NULL, NULL, 28),
('das', 'dasda', 'dasdas', 'dasdas', 'asd', 29),
('asd', 'asda', 'dasd', 'das', 'das', 30),
('asda', 'dsa', 'dasda', 'dasd', 'a', 31);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Vehicle`
--

CREATE TABLE `Vehicle` (
  `V_advert_no` int(11) NOT NULL,
  `V_type` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `V_brand` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `V_model` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `V_product_of_year` int(11) NOT NULL DEFAULT '0',
  `V_advert_date` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL,
  `V_fuel_type` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL,
  `V_gear_type` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL,
  `V_km` int(11) DEFAULT NULL,
  `V_color` varchar(40) COLLATE utf8_turkish_ci DEFAULT NULL,
  `V_plate` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL,
  `V_price` int(11) DEFAULT NULL,
  `V_image` blob NOT NULL,
  `V_image_name` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `Vehicle`
--

INSERT INTO `Vehicle` (`V_advert_no`, `V_type`, `V_brand`, `V_model`, `V_product_of_year`, `V_advert_date`, `V_fuel_type`, `V_gear_type`, `V_km`, `V_color`, `V_plate`, `V_price`, `V_image`, `V_image_name`) VALUES
(1000000016, 'coupe', 'Bentley', 'Continental', 2018, '25/12/2018', 'petrol', 'automatic', 15000, 'White', '35 DC 35', 800000, 0x4172726179, '/opt/lampp/temp/phpFUrD6j'),
(1000000017, 'Coupe', 'Aston Martin', 'Db8', 2014, '25/12/2018', 'Petrol', 'manual', 50000, 'White', '35 DC 36', 400000, 0x4172726179, '/opt/lampp/temp/phpX1tqME'),
(1000000018, 'Sedan', 'Maybach', 'S600', 2016, '25/12/2018', 'Diesel', 'Automatic', 20000, 'Black', '35 DC 37', 1000000, 0x4172726179, '/opt/lampp/temp/php0KmbKu'),
(1000000019, 'Sedan', 'Rolls Royce', 'Phantom', 2018, '25/12/2018', 'Diesel', 'Automatic', 100, 'Black', '35 DC 38', 3000000, 0x4172726179, '/opt/lampp/temp/php4YIGCY'),
(1000000020, 'Sedan', 'Audi', 'A8L', 2019, '25/12/2018', 'Diesel', 'Automatic', 0, 'Grey', '35 DC 39', 250000, 0x4172726179, '/opt/lampp/temp/phppNloV7'),
(1000000021, 'coupe', 'sahin', 'sahin', 2019, '00/00/2012', 'petrol', 'manual', 20000, 'white', '35 DC 90', 20000, 0x4172726179, '/opt/lampp/temp/phpmHh8Qb');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `depo`
--
ALTER TABLE `depo`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `Images`
--
ALTER TABLE `Images`
  ADD PRIMARY KEY (`V_adver_no`),
  ADD UNIQUE KEY `Image_no` (`Image_no`);

--
-- Tablo için indeksler `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`U_user_id`),
  ADD UNIQUE KEY `username` (`U_username`),
  ADD KEY `U_password` (`U_password`),
  ADD KEY `U_user_id` (`U_user_id`);

--
-- Tablo için indeksler `Vehicle`
--
ALTER TABLE `Vehicle`
  ADD PRIMARY KEY (`V_advert_no`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `depo`
--
ALTER TABLE `depo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Tablo için AUTO_INCREMENT değeri `Images`
--
ALTER TABLE `Images`
  MODIFY `V_adver_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `User`
--
ALTER TABLE `User`
  MODIFY `U_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Tablo için AUTO_INCREMENT değeri `Vehicle`
--
ALTER TABLE `Vehicle`
  MODIFY `V_advert_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000000022;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `Images`
--
ALTER TABLE `Images`
  ADD CONSTRAINT `Images_ibfk_1` FOREIGN KEY (`V_adver_no`) REFERENCES `Vehicle` (`V_advert_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
