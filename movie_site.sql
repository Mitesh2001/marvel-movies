-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 29, 2022 at 07:45 PM
-- Server version: 8.0.29-0ubuntu0.20.04.3
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `movies_list`
--

CREATE TABLE `movies_list` (
  `movie_id` int NOT NULL,
  `movie_name` varchar(200) NOT NULL,
  `release_year` bigint NOT NULL,
  `movie_size` varchar(200) NOT NULL,
  `movie_type` varchar(200) NOT NULL DEFAULT 'Marvel Cine. Uni. Movie',
  `poster` varchar(200) NOT NULL,
  `trailer_id` varchar(255) NOT NULL,
  `hindi_trailer` varchar(255) NOT NULL,
  `drive_id` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `movies_list`
--

INSERT INTO `movies_list` (`movie_id`, `movie_name`, `release_year`, `movie_size`, `movie_type`, `poster`, `trailer_id`, `hindi_trailer`, `drive_id`) VALUES
(1, 'Iron Man ', 2008, '1.14 GB', 'Marvel Cine. Uni. Movie', 'Iron-Man_poster.gif', '8ugaeA-nMTc', '8ugaeA-nMTc', '1kW62knZZAteiKOtlJZePqR8jL3tdUKXb'),
(2, 'The Avengers ', 2012, '1.31 GB', 'Marvel Cine. Uni. Movie', 'avengers_poster.gif', 'eOrNdBpGMv8', 'NxUCAnAjHKo', '1Qy4nLQWz3hLtwd79o-3oVeILiF68itkP'),
(3, 'Caption America : The First Avenger', 2011, '1.14 GB', 'Marvel Cine. Uni. Movie', 'caption_america (The first Avenger)_poster.gif', 'JerVrbLldXw', 'q8SR8iABi7U', '1snnyTLBTAImRJVBSLhVqnHO6EH2_SDFd'),
(4, 'Iron man 2', 2010, '1.14 GB', 'Marvel Cine. Uni. Movie', 'Iron-Man_2_poster.gif', 'wKtcmiifycU', 'B5bgB4-3LLE', '1XgFRc9vsK1iy6291_iOd_Vf7Zku02PpE'),
(5, 'The incredible Hulk', 2008, '1.3 GB', 'Marvel Cine. Uni. Movie', 'the_incredible_hulk_poster.gif', 'xbqNb2PFKKA', 'w_PI9Dcv5l8', '1KdHrE6wVaHM55xLUyVbQnqf0uWemenEp'),
(6, 'Thor', 2011, '1.2 GB', 'Marvel Cine. Uni. Movie', 'thor_poster.gif', 'vJUDu40Z_RY', 'vJUDu40Z_RY', '1NTkJfPlSPFiAvIiJERmJ8uEmIVkRGhGs'),
(7, 'Iron man 3', 2013, '1.15 GB', 'Marvel Cine. Uni. Movie', 'iron_man_3_poster.gif', 'Ke1Y3P9D0Bc', 'zoWMW2O2rzc', '1kW62knZZAteiKOtlJZePqR8jL3tdUKXb'),
(8, 'Thor : The Dark World', 2013, '890 MB', 'Marvel Cine. Uni. Movie', 'thor_the_dark_world_poster.gif', 'npvJ9FTgZbM', 'biq0XGdmULc', '1648PEA0_e1kz-r7aZVqJ6QQ3-f9EzlyY'),
(9, 'Caption America : The winter soldier ', 2014, '1.24 GB', 'Marvel Cine. Uni. Movie', 'caption_america (The winter soldier)_poster.gif', '7SlILk2WMTI', 'IcZZ-29FumQ', '1TxOO1lcss4LpjN8XZ_i0TWoRDNFTBaVU'),
(10, 'Guardiance of the Galaxy ', 2014, '1.11 GB', 'Marvel Cine. Uni. Movie', 'guardiance_of_the_galaxy_poster.gif', 'd96cjJhvlMA', 'ZqbojqBkYzY', '1Kf7ertv77jMF6tWENk5THu_82KR7yrJq'),
(11, 'Avengers : Age of Ultron', 2015, '1.29 GB', 'Marvel Cine. Uni. Movie', 'Avengers_Age_of_Ultron_poster.gif', 'tmeOjFno6Do', 'ZeIa7xGDq8c', '12sxDa7JpNeKBQihi0PLStTVJ6GAKBfhK'),
(12, 'Ant Man', 2015, '1.07 GB', 'Marvel Cine. Uni. Movie', 'ant_man_poster.gif', 'pWdKf3MneyI', 'aunT6UaU99Q', '1Ljft0vVq4lcPR0Oki1FIyqPwiRjA_-uM'),
(13, 'Caption America : Civil War', 2016, '1.35 GB', 'Marvel Cine. Uni. Movie', 'caption_america (civil war)_poster.gif', 'FkTybqcX-Yo', 'IxxmvrrSSNQ', '1sZcEFdzo8h8LUwhUah-Elpf_LI3SDPqS'),
(14, 'Doctor Strange', 2016, '1008 MB', 'Marvel Cine. Uni. Movie', 'doctor_strange_poster.gif', 'Lt-U_t2pUHI', '2aZEtr86NE0', '1LysyJ-3Ye4dQejGG47jBkqGzvCMbz7wJ'),
(15, 'Guardians of the Galaxy Vol 2', 2017, '1.24 GB', 'Marvel Cine. Uni. Movie', 'guardiance_of_the_galaxy_vol_2_poster.gif', 'pr7tDrwQ3t8', 'IIsaipJTT4E', '1IVccqhlp6lhzS2H1xQOTEwlVpBof1Kyg'),
(16, 'Spiderman : Homecomming', 2017, '1.2 GB', 'Marvel Cine. Uni. Movie', 'spiderman_homecoming_poster.gif', '39udgGPyYMg', '_GqEeagsSkY', '1nC4knlZSrP19n1_Uo54DPeuF0X6bLD25'),
(17, 'Thor : Ragnrok', 2017, '1.19 GB', 'Marvel Cine. Uni. Movie', 'thor_ragnrok_poster.gif', 'ue80QwXMRHg', 'NNvt4OS7mhA', '1aqL0koFoyIvD1st4kZlLCfZ1ZwApzEy8'),
(19, 'Avengers : Infinity War', 2018, '1.37 GB', 'Marvel Cine. Uni. Movie', 'Avengers_infinity_war_poster.gif', '6ZfuNTqbHE8', 'twXfolLOiHc', '1lSIz7OiqBh3AXgOKx1WIpevAblNQOYfJ'),
(22, 'Avengers : Endgame', 2019, '1.7 GB', 'Marvel Cine. Uni. Movie', 'Avengers_endgame_poster.gif', 'hA6hldpSTF8', 'XwYnB6eBWTc', '14s2tiNCLALZYg6V0CXFBYPBaB4we28A5');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phases`
--

CREATE TABLE `phases` (
  `phase_id` int NOT NULL,
  `phase_name` varchar(200) NOT NULL,
  `movie_ids` varchar(200) NOT NULL,
  `years` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `phases`
--

INSERT INTO `phases` (`phase_id`, `phase_name`, `movie_ids`, `years`) VALUES
(1, 'Phase One', '1,2,3,4,5,6', '2008-2012'),
(2, 'Phase Two', '7,8,9,10,11,12', '2013-2015'),
(3, 'Phase Three', '13,14,15,16,17,19', '2016-2018'),
(4, 'Phase Four', '22', '2018-...');

-- --------------------------------------------------------

--
-- Table structure for table `serieses`
--

CREATE TABLE `serieses` (
  `seriese_id` int NOT NULL,
  `seriese_name` varchar(200) NOT NULL,
  `movie_ids` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `serieses`
--

INSERT INTO `serieses` (`seriese_id`, `seriese_name`, `movie_ids`) VALUES
(1, 'Iron Man', '1,4,7'),
(2, 'The incredible Hulk', '5'),
(3, 'Caption America', '3,9,13'),
(4, 'Thor', '6,8,17'),
(5, 'Doctor Strange', '14'),
(6, 'The Avengers', '2,11,19,22'),
(7, 'Guardiance of the Galaxy', '10,15'),
(8, 'Ant Man', '12'),
(11, 'Spider Man - Homecoming', '16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies_list`
--
ALTER TABLE `movies_list`
  ADD UNIQUE KEY `movie_id` (`movie_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `phases`
--
ALTER TABLE `phases`
  ADD UNIQUE KEY `phase_id` (`phase_id`);

--
-- Indexes for table `serieses`
--
ALTER TABLE `serieses`
  ADD UNIQUE KEY `seriese_id` (`seriese_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `movies_list`
--
ALTER TABLE `movies_list`
  MODIFY `movie_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `phases`
--
ALTER TABLE `phases`
  MODIFY `phase_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `serieses`
--
ALTER TABLE `serieses`
  MODIFY `seriese_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
