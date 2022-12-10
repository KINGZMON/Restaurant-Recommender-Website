-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 10, 2022 at 03:34 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurants`
--

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_info`
--

CREATE TABLE `restaurant_info` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `image` varchar(300) NOT NULL,
  `cuisine` varchar(20) NOT NULL,
  `price_range` int(1) NOT NULL,
  `rating` int(1) NOT NULL,
  `location` varchar(150) NOT NULL,
  `parking` int(1) NOT NULL,
  `number_tables` int(255) NOT NULL,
  `contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `restaurant_info`
--

INSERT INTO `restaurant_info` (`id`, `name`, `image`, `cuisine`, `price_range`, `rating`, `location`, `parking`, `number_tables`, `contact`) VALUES
(1, 'Mamma Pizza', 'https://media-cdn.tripadvisor.com/media/photo-m/1280/1e/82/44/94/mamma-gamberetto.jpg', 'Italian', 2, 4, 'Vytauto prospektas 37, Kaunas 44352 Lithuania', 2, 54, '+37068097977'),
(2, 'Jurgis ir Drakonas', 'https://lh3.googleusercontent.com/p/AF1QipOy1Yf2HHJNcZeJP-L6nSPRcPYJVcg83bAdSImd', 'Italian', 2, 5, 'Kurpiu g. 26, Kaunas 44287 Lithuania', 3, 68, '+37067200320'),
(3, 'Manami', 'https://imageproxy.wolt.com/venue/5b3cd8afe8f855000cd53e0a/77647af6-6f8d-11eb-920e-4237232205eb_38.manami_menu_3.jpg', 'Chinese', 2, 4, 'Islandijos pl 32 Plc Mega, Kaunas Lithuania', 1, 98, '+37068759530'),
(4, 'Ali šokoladinė', 'https://alisokoladine.lt/lt/themes/leo_odin/assets/img/modules/appagebuilder/icon/sokolado-myletojams.jpg', 'Belgian', 3, 5, 'Laisvės al. 41, Kaunas 44309 Lithuania', 0, 78, '+37067882223'),
(5, 'Katpedele', 'https://imageproxy.wolt.com/venue/5bfade0baef7b2000bc9d6ae/50583dec-6f8a-11eb-805f-5e3d862d8496_35.katpedele_menu_5.jpg', 'European', 3, 5, 'V. Kreves pr. 57, Kaunas 50358 Lithuania', 3, 25, '+37062066323'),
(6, 'Restoranas DIA', 'https://media-cdn.tripadvisor.com/media/photo-o/0f/d9/38/db/hazelnuts.jpg', 'French', 2, 5, 'Maironio G. 9, Kaunas 44298 Lithuania', 2, 36, '+37065580308'),
(7, 'Agave', 'https://static.meniu.lt/media/cache/outbound_thumb_840x560/uploads/restaurant/photo/3/4621/87f65a43c9a7255cdd74a35568d7d2ed2a86cb37.jpeg', 'Mexican', 2, 5, 'Rotuses a. 3 Rotuses Square, Kaunas 44280 Lithuania', 2, 25, '+37061698496'),
(8, 'Medziotoju Uzeiga', 'https://medziotojai.lt/wp-content/uploads/2020/11/Degustacine-5-1-scaled.jpg', 'European', 2, 5, 'Rotushes a. 10, Kaunas 44279 Lithuania', 3, 91, '+37037320956'),
(9, 'Moksha', 'https://images.happycow.net/venues/1024/48/56/hcmp48564_403386.jpeg', 'Indian', 3, 4, 'Vasario 16-osios g. 6-1, Kaunas 44250 Lithuania', 5, 47, '+370 676 71649'),
(10, 'Talutti - Fresh and Tasty', 'https://media-cdn.tripadvisor.com/media/photo-o/0d/3c/55/ef/pancakes.jpg', 'Italian', 2, 5, 'Taikos pr. 12, Kaunas 50191 Lithuania', 7, 58, '+37065668999');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `restaurant_info`
--
ALTER TABLE `restaurant_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `restaurant_info`
--
ALTER TABLE `restaurant_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
