-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 07, 2022 at 03:46 PM
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
-- Database: `menus`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu_links`
--

CREATE TABLE `menu_links` (
  `id` int(10) NOT NULL,
  `link` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu_links`
--

INSERT INTO `menu_links` (`id`, `link`) VALUES
(1, 'https://mamaspizzaomaha.com/menu/'),
(2, 'https://jurgisirdrakonas.lt/meniu.html'),
(3, 'https://www.manami.lt/lt/menu/'),
(4, 'https://alisokoladine.lt/lt/kaunas/'),
(5, 'https://www.katpedele.lt/lt/menu/'),
(6, 'https://restoranasdia.lt/meniu/'),
(7, 'https://www.musthavemenus.com/oo/places/agaverestaurant-atlanta-ga'),
(8, 'https://medziotojai.lt/meniu/'),
(9, 'https://mokshacaffe.co.uk/menu.pdf'),
(10, 'https://talutti.lt/talutti-restoranai-kaune/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu_links`
--
ALTER TABLE `menu_links`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
