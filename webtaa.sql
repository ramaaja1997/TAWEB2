-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2018 at 08:22 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtaa`
--

-- --------------------------------------------------------

--
-- Table structure for table `chara`
--

CREATE TABLE `chara` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL DEFAULT '',
  `age` varchar(100) DEFAULT NULL,
  `talent` varchar(100) NOT NULL,
  `chara` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chara`
--

INSERT INTO `chara` (`id`, `nama`, `age`, `talent`, `chara`, `created_at`, `updated_at`) VALUES
(5, 'Kirishima Touka', '23', 'Martial Arts', '13000280.jpg', '2018-11-19 19:20:59', '2018-11-19 19:20:59'),
(6, 'Ken Kaneki', '21', 'Martial Arts, Berserk', '957753176.jpg', '2018-11-19 19:23:03', '2018-11-19 19:23:03');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `file` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `nama`, `file`, `created_at`, `updated_at`) VALUES
(2, 'Fate Aphosypa Episode 1', '555249437.mp4', '2018-11-19 18:49:36', '2018-11-19 18:49:36'),
(3, 'fate aphocrypa episode 2', '174527052.mp4', '2018-11-20 23:04:31', '2018-11-20 23:04:31');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gallery` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `nama`, `gallery`, `created_at`, `updated_at`) VALUES
(6, 'Waifu', '368576051.jpg', '2018-11-19 18:33:45', '2018-11-19 18:52:58'),
(7, 'Waifu 2', '72142176.jpg', '2018-11-19 18:34:28', '2018-11-19 18:53:07');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_10_15_012302_create_model_mahasiswas_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `chara` varchar(100) DEFAULT NULL,
  `quotes` varchar(1000) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`id`, `nama`, `chara`, `quotes`, `created_at`, `updated_at`) VALUES
(5, 'Fate Stay Night', 'Arthur', 'Excalibuuuuuuuuuuur', '2018-11-19 18:11:59', '2018-11-19 18:11:59'),
(6, 'Real Life', 'Zagas Godspell', 'Waifu itu maksimal 4, karena lebih dari itu haram hukumnya', '2018-11-19 18:53:46', '2018-11-19 18:53:46'),
(7, 'No Game No Life', 'Sora', 'Life is not a Game of Luck. if you wanna win, Work Hard!', '2018-11-20 19:34:44', '2018-11-20 19:34:44'),
(8, 'Dragon Ball Z', 'Goku', 'Power comes in response to a need, not a desire. You have to create that need.', '2018-11-20 19:35:51', '2018-11-20 19:35:51'),
(9, 'Naruto', 'Naruto Uzumaki', 'If you don’t like your destiny, don’t accept it. Instead, have the courage to change it the way you want it to be.', '2018-11-20 19:36:48', '2018-11-20 19:36:48'),
(10, 'Akame Ga Kill', 'Akame', 'If you can’t find a reason to fight, then you shouldn’t be fighting.', '2018-11-20 19:38:35', '2018-11-20 19:38:35'),
(11, 'Bleach', 'Ichigo Kurosaki', 'We can’t waste time worrying about the what if’s.', '2018-11-20 19:39:25', '2018-11-20 19:39:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chara`
--
ALTER TABLE `chara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chara`
--
ALTER TABLE `chara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
