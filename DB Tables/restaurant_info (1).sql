-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Nov 27, 2022 at 11:25 AM
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
(1, 'Mamma Pizza', 'https://media-cdn.tripadvisor.com/media/photo-m/1280/1e/82/44/94/mamma-gamberetto.jpg', 'Italian', 2, 4, '', 2, 54, '+37068097977'),
(2, 'Jurgis ir Drakonas', 'https://media-cdn.tripadvisor.com/media/photo-o/0d/fc/30/f4/jd-initials.jpg', 'Italian', 2, 5, 'Kurpiu g. 26, Kaunas 44287 Lithuania', 3, 68, '+37067200320'),
(3, 'Manami', 'https://media-cdn.tripadvisor.com/media/photo-m/1280/18/1a/80/5a/photo2jpg.jpg', 'Chinese', 2, 4, 'Islandijos pl 32 Plc Mega, Kaunas Lithuania', 1, 98, '+37068759530'),
(4, 'Ali šokoladinė', 'https://media-cdn.tripadvisor.com/media/photo-o/12/d5/45/0d/special-desserts-in-a.jpg', 'Belgian', 3, 5, 'Laisvės al. 41, Kaunas 44309 Lithuania', 0, 78, '+37067882223'),
(5, 'Katpedele', 'https://media-cdn.tripadvisor.com/media/photo-o/13/4e/28/42/ta-img-20180616-183621.jpg', 'European', 3, 5, 'V. Kreves pr. 57, Kaunas 50358 Lithuania', 3, 25, '+37062066323'),
(6, 'Restoranas DIA', 'https://media-cdn.tripadvisor.com/media/photo-o/0f/d9/38/db/hazelnuts.jpg', 'French', 2, 5, 'Maironio G. 9, Kaunas 44298 Lithuania', 2, 36, '+37065580308'),
(7, 'Agave', 'https://media-cdn.tripadvisor.com/media/photo-w/0f/a2/3f/ea/open-kitchen-in-agave.jpg', 'Mexican', 2, 5, 'Rotuses a. 3 Rotuses Square, Kaunas 44280 Lithuania', 2, 25, '+37061698496'),
(8, 'Medziotoju Uzeiga', 'https://media-cdn.tripadvisor.com/media/photo-o/15/44/9b/db/interior.jpg', 'European', 2, 5, 'Rotushes a. 10, Kaunas 44279 Lithuania', 3, 91, '+37037320956'),
(9, 'Moksha', 'https://media-cdn.tripadvisor.com/media/photo-s/02/c7/c0/cd/moksha.jpg', 'Indian', 3, 4, 'Vasario 16-osios g. 6-1, Kaunas 44250 Lithuania', 5, 47, '+370 676 71649'),
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
