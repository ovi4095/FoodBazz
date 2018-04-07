-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2018 at 02:48 PM
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
(14, '2018_04_02_182037_create_offers_table', 9),
(15, '2018_04_06_085043_create_restinfos_table', 10),
(16, '2018_04_06_101638_create_review_imgs_table', 11);

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
  `offer_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `offer_name`, `offer_id`, `restaurant_name`, `restau_detail`, `price`, `offer_img`, `offer_link`, `publication_status`, `created_at`, `updated_at`) VALUES
(5, 'Pizza', 1, 'Pinewood - Cafe n\' Restaurant', 'Testy pizza', '800', 'offer-image/op1.jpg', 'restaurent_info', 1, '2018-04-05 04:41:23', '2018-04-05 05:27:48'),
(7, 'Burger', 2, 'Cafe Darbar', 'Extra Chicken meet with Cheese and Barbecue sauce', '350', 'offer-image/burger.jpg', 'restaurent_info', 1, '2018-04-05 09:20:24', '2018-04-05 09:20:24');

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
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `restau_id`, `restau_img`, `restau_name`, `restau_detail`, `rating`, `publication_status`, `created_at`, `updated_at`) VALUES
(4, 3, 'rest-image/p1.jpg', 'Pinewood - Cafe n\' Restaurant', 'Family style restaurant in Dhaka, Bangladesh', '4.5', 1, '2018-04-02 13:53:54', '2018-04-06 06:24:49');

-- --------------------------------------------------------

--
-- Table structure for table `restinfos`
--

CREATE TABLE `restinfos` (
  `id` int(10) UNSIGNED NOT NULL,
  `slide1_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slide2_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slide3_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `manu_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `map_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `map_url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` int(11) NOT NULL,
  `fb_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restinfos`
--

INSERT INTO `restinfos` (`id`, `slide1_img`, `slide2_img`, `slide3_img`, `manu_img`, `address`, `map_img`, `map_url`, `contact_number`, `fb_link`, `publication_status`, `created_at`, `updated_at`) VALUES
(3, 'infopage-image/o1.jpg', 'infopage-image/o2.jpg', 'infopage-image/o1.jpg', 'infopage-image/o3.jpg', 'df', 'infopage-image/pic2.jpg', 'sdf', 1884394257, 'fsdf', 1, '2018-04-06 06:09:28', '2018-04-06 06:09:28');

-- --------------------------------------------------------

--
-- Table structure for table `review_imgs`
--

CREATE TABLE `review_imgs` (
  `id` int(10) UNSIGNED NOT NULL,
  `info_id` int(11) NOT NULL,
  `review_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `review_imgs`
--

INSERT INTO `review_imgs` (`id`, `info_id`, `review_img`, `created_at`, `updated_at`) VALUES
(1, 3, 'review-image/pic3.jpg', '2018-04-06 06:09:28', '2018-04-06 06:09:28'),
(2, 3, 'review-image/pic3-small.jpg', '2018-04-06 06:09:28', '2018-04-06 06:09:28'),
(3, 3, 'review-image/pic4.jpg', '2018-04-06 06:09:28', '2018-04-06 06:09:28'),
(4, 3, 'review-image/pic6-small.jpg', '2018-04-06 06:09:28', '2018-04-06 06:09:28'),
(5, 3, 'review-image/pic7.jpg', '2018-04-06 06:09:28', '2018-04-06 06:09:28'),
(6, 3, 'review-image/pic7-small.jpg', '2018-04-06 06:09:28', '2018-04-06 06:09:28');

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
(1, 'ovi', 'alaminovi11@gmail.com', '$2y$10$zU18ZDQrIHxOE7wG0DFBL.u162VW1pY8cbRUngt0kT2QE8D2ISski', 'OyLI5PfsXlJoDxXFFWSF4eUNpSTd80iwgav4ihTitnKKtCuz5oEiyFiioUoR', '2018-03-28 12:11:21', '2018-03-28 12:11:21');

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
-- Indexes for table `review_imgs`
--
ALTER TABLE `review_imgs`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `restinfos`
--
ALTER TABLE `restinfos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `review_imgs`
--
ALTER TABLE `review_imgs`
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
