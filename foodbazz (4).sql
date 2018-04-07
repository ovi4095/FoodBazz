-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2018 at 04:32 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodbazz`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(5, 'phone', 'iphoneX,Samsung Note 8', 1, NULL, '2018-04-05 04:06:44'),
(6, 'GPU', 'GTX 980 ti', 1, NULL, '2018-04-05 04:08:38'),
(7, 'Camera', 'Canon Eos 760e', 0, NULL, '2018-03-30 16:38:56'),
(10, 'HeadPhone', 'AKG', 0, NULL, '2018-03-30 16:38:52');

-- --------------------------------------------------------

--
-- Table structure for table `homepages`
--

CREATE TABLE `homepages` (
  `id` int(10) UNSIGNED NOT NULL,
  `home_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `homeslide1_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `homeslide2_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `homeslide3_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rest_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `offer_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `review_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homepages`
--

INSERT INTO `homepages` (`id`, `home_title`, `homeslide1_img`, `homeslide2_img`, `homeslide3_img`, `rest_img`, `offer_img`, `review_img`, `publication_status`, `created_at`, `updated_at`) VALUES
(3, 'FoodBuzz', 'home-image/s1.jpg', 'home-image/s2.jpg', 'home-image/s3.jpg', 'home-image/resto.jpg', 'home-image/cs3.jpg', 'home-image/imge.jpg', 1, '2018-04-02 03:05:46', '2018-04-02 03:38:54');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_03_28_073442_create_test_table', 1),
(2, '2018_03_28_074452_create_password_resets_table', 1),
(3, '2018_03_28_074806_create_users_table', 1),
(4, '2018_03_28_074937_create_restinfos_table', 1),
(5, '2018_03_28_075253_create_homeimages_table', 1),
(6, '2018_03_28_075404_create_restaurents_table', 1),
(7, '2018_03_28_175923_create_test_table', 2),
(8, '2018_03_28_180108_create_users_table', 3),
(9, '2018_03_30_134603_create_categories_table', 4),
(10, '2018_03_30_220857_create_categories_table', 5),
(11, '2018_04_01_201705_create_homepages_table', 6),
(12, '2018_04_01_235133_create_homepages_table', 7),
(13, '2018_04_02_134449_create_restaurants_table', 8),
(14, '2018_04_02_182037_create_offers_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(10) UNSIGNED NOT NULL,
  `offer_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `offer_id` int(30) NOT NULL,
  `restaurant_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `restau_detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `offer_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `offer_name`, `offer_id`, `restaurant_name`, `restau_detail`, `price`, `offer_img`, `publication_status`, `created_at`, `updated_at`) VALUES
(5, 'Pizza', 1, 'Pinewood - Cafe n\' Restaurant', 'Testy pizza', '800', 'offer-image/op1.jpg', 1, '2018-04-05 04:41:23', '2018-04-05 05:27:48'),
(6, 'Burger', 2, 'Pinewood - Cafe n\' Restaurant', 'Extra chicken with Cheese with Mao', '350', 'offer-image/burger.jpg', 1, '2018-04-07 02:22:10', '2018-04-07 02:22:10');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `id` int(10) UNSIGNED NOT NULL,
  `restau_id` int(30) NOT NULL,
  `restau_img` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `restau_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `restau_detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rest_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `restau_id`, `restau_img`, `restau_name`, `restau_detail`, `rating`, `rest_link`, `publication_status`, `created_at`, `updated_at`) VALUES
(4, 1, 'rest-image/p1.jpg', 'Pinewood - Cafe n\' Restaurant', 'Family style restaurant in Dhaka, Bangladesh', '4.5', 'restaurent_info', 1, '2018-04-02 13:53:54', '2018-04-06 07:33:44'),
(7, 6, 'rest-image/cc1.jpg', 'Cafe Darbar', 'Awesome place to eat and engoy', '4.7', 'restaurent_info', 1, '2018-04-06 08:35:35', '2018-04-06 08:35:35');

-- --------------------------------------------------------

--
-- Table structure for table `restinfos`
--

CREATE TABLE `restinfos` (
  `id` int(10) UNSIGNED NOT NULL,
  `restaurent_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slide1_img` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slide2_img` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slide3_img` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manu_img` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review1_img` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review2_img` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review3_img` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review4_img` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `map_img` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map_url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb_link` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restinfos`
--

INSERT INTO `restinfos` (`id`, `restaurent_name`, `slide1_img`, `slide2_img`, `slide3_img`, `manu_img`, `review1_img`, `review2_img`, `review3_img`, `review4_img`, `address`, `map_img`, `map_url`, `contact_number`, `fb_link`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Pinewood - Cafe n\' Restaurant', 'images/restaurent/pws1.jpg', 'images/restaurent/pws2.jpg', 'images/restaurent/pws3.jpg', 'images/restaurent/manu.jpg', 'images/restaurent/rs1.png', 'images/restaurent/rs2.png', 'images/restaurent/rs3.png', 'images/restaurent/rs5.png', 'House 19, Road 12 (New), Dhanmondi, Dhaka 1209', 'images/pinwoodmap.png', 'https://www.google.com/maps/place/23%C2%B045\'08.8%22N+90%C2%B022\'35.3%22E/@23.7525094,90.3753344,18z/data=!4m5!3m4!1s0x0:0x0!8m2!3d23.7524431!4d90.3764609', '+8801914426939', 'https://www.facebook.com/pinewoodcafebd/', 0, '2018-03-21 18:00:00', '2018-03-21 18:00:00'),
(6, 'Cafe Darbar', 'infopage-image/cs1.jpg', 'infopage-image/cs2.jpg', 'infopage-image/cs3.jpg', 'infopage-image/menu.jpg', 'infopage-image/r2.PNG', 'infopage-image/r4.PNG', 'infopage-image/r5.PNG', 'infopage-image/rs7.PNG', 'House # 75, Ground Floor, Rd No 5/A, Dhaka 1209', 'infopage-image/map11.JPG', 'https://www.google.com/maps/place/Cafe+Darbar/@23.741808,90.3739667,15z/data=!4m5!3m4!1s0x0:0x98c0b3f4e8236075!8m2!3d23.741808!4d90.3739667', '01684545524', 'https://www.facebook.com/cafedarbar/?nr', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ovi', 'alaminovi11@gmail.com', '$2y$10$zU18ZDQrIHxOE7wG0DFBL.u162VW1pY8cbRUngt0kT2QE8D2ISski', 'vfijsDqJUYctjNHYgfiaVZxDNbQGWWdd0TkB2L27EamWbxEMKgT3qa2UUe3e', '2018-03-28 12:11:21', '2018-03-28 12:11:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepages`
--
ALTER TABLE `homepages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `restaurants_restau_name_unique` (`restau_name`);

--
-- Indexes for table `restinfos`
--
ALTER TABLE `restinfos`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `homepages`
--
ALTER TABLE `homepages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `restinfos`
--
ALTER TABLE `restinfos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
