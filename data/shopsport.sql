-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2019 at 09:06 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopsport`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(4) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `username`, `password`, `email`, `active`, `created_at`, `updated_at`, `image`) VALUES
(1, 'admin', 'admin', '$2y$10$hHIku.WMcSPB/jmRXd8tl.6KVA19MUIAEBgoA2TObTvp9iqpiXknS', 'admin@gmail.com', 1, NULL, '2019-07-22 01:58:52', '1563298186-admin.png'),
(3, 'admin123', 'admin123', '$2y$10$3UMWt5E8RlMbzGy3l6FYkuO0NEHLmB7Y6l2RCQ0qXZXsV5eyQZjke', 'admin123@gmail.com', 1, NULL, '2019-07-22 02:00:04', '1563760804-admin.png');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_customer` int(11) NOT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kind_request` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kind_sports`
--

CREATE TABLE `kind_sports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tenloai` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kind_sports`
--

INSERT INTO `kind_sports` (`id`, `tenloai`, `key`, `created_at`, `updated_at`) VALUES
(1, 'Quần Áo', 'quanao', '2019-07-16 17:32:04', '2019-07-16 17:32:04'),
(2, 'Giầy', 'giay', '2019-07-16 17:32:39', '2019-07-16 17:32:39'),
(3, 'Thực phẩm', 'thucpham', '2019-07-23 06:51:12', '2019-07-23 06:51:12'),
(4, 'Phụ kiện', 'phukien', '2019-07-23 07:11:48', '2019-07-23 07:11:48');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_06_08_155243_create_producers', 1),
(4, '2019_06_08_155456_create_kind_sports', 1),
(5, '2019_06_08_160214_create_orders', 1),
(6, '2019_06_08_160327_create_order_detail', 1),
(7, '2019_06_12_163502_create_slides', 1),
(8, '2019_06_12_172507_create_feedbacks', 1),
(9, '2019_06_12_182958_create_products', 1),
(10, '2019_06_12_201156_create_contacts', 1),
(11, '2019_06_12_211059_create_admins', 1),
(12, '2019_06_15_164420_add_admins_image', 1),
(13, '2019_06_17_220258_create_product_details', 1),
(14, '2019_06_17_222239_create_order_details', 1),
(15, '2019_06_23_165418_add_users_phone', 1),
(16, '2019_06_26_145154_add_contacts_name', 1),
(17, '2019_07_17_004515_create_id_details', 2),
(18, '2019_07_22_183430_create_orders', 3),
(19, '2019_07_22_184101_create_order_details', 4),
(20, '2019_07_22_190918_create_order_content', 5),
(21, '2019_07_22_193553_create_orders', 6),
(22, '2019_07_24_211918_add_product_detail_kind_sport', 7),
(23, '2019_07_24_234413_add_product_detail_kind_sport', 8);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_customer` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) DEFAULT '0',
  `status` tinyint(4) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `id_customer`, `name`, `phone`, `address`, `content`, `amount`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'Nguyen Van A', '0987654321', 'viet nam', 'giao nhanh', 5580000, 0, '2019-07-25 06:56:04', '2019-07-25 06:56:04');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_detail_id` int(11) NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) DEFAULT '0',
  `price` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_detail_id`, `size`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'S', 2, 50000, '2019-07-25 06:56:04', '2019-07-25 06:56:04'),
(2, 1, 9, '41', 2, 800000, '2019-07-25 06:56:04', '2019-07-25 06:56:04'),
(3, 1, 12, '40', 2, 500000, '2019-07-25 06:56:04', '2019-07-25 06:56:04'),
(4, 1, 18, '40', 1, 600000, '2019-07-25 06:56:04', '2019-07-25 06:56:04'),
(5, 1, 26, '3,18Kg', 2, 900000, '2019-07-25 06:56:04', '2019-07-25 06:56:04'),
(6, 1, 31, '500ml', 3, 160000, '2019-07-25 06:56:04', '2019-07-25 06:56:04');

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
-- Table structure for table `producers`
--

CREATE TABLE `producers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(4) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `producers`
--

INSERT INTO `producers` (`id`, `name`, `image`, `phone`, `email`, `active`, `created_at`, `updated_at`) VALUES
(3, 'Nike', '1563862929-icon_nike.png', '1234456789', 'nike@gmail.com', 1, '2019-07-23 06:22:09', '2019-07-23 06:22:09'),
(4, 'Adidas', '1563862953-icon_adidas.jpg', '1234456789', 'adidas@gmail.com', 1, '2019-07-23 06:22:33', '2019-07-23 06:22:33'),
(5, 'NutriFood', '1563982937-icon-pro-food.jpg', '0987654321', 'nutifood@gmail.com', 1, '2019-07-24 15:41:36', '2019-07-24 15:42:17');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kind_sport_id` int(11) NOT NULL,
  `producer_id` int(11) NOT NULL,
  `name_pro` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `kind_sport_id`, `producer_id`, `name_pro`, `image`, `content`, `view`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Áo Juventus', '1563298417-juventus.jpg', 'Áo Juventus', 0, '2019-07-16 17:33:38', '2019-07-16 17:33:38'),
(2, 1, 1, 'Áo Read Madrid', '1563298447-ao3.jpg', 'Áo Read Madrid', 0, '2019-07-16 17:34:07', '2019-07-16 17:34:07'),
(3, 1, 2, 'Áo Barca', '1563298521-barca.jpg', 'Áo Barca', 0, '2019-07-16 17:35:21', '2019-07-16 17:35:21'),
(4, 1, 2, 'Áo Arsenal', '1563298701-arsenal.jpg', 'Áo Arsenal', 0, '2019-07-16 17:38:21', '2019-07-16 17:38:21'),
(5, 2, 3, 'Giày bóng rổ JORDAN', '1563864012-nike1.jpg', 'Giày bóng rổ nam JORDAN FORMULA', 0, '2019-07-23 06:40:12', '2019-07-23 06:40:12'),
(6, 2, 3, 'Giày chạy nam Anta', '1563864171-anta1.jpg', 'Giày chạy nam Anta màu xám nhạt.', 0, '2019-07-23 06:42:51', '2019-07-23 06:42:51'),
(7, 2, 4, 'Giày đá bóng Adidas', '1563864246-adidas1.jpg', 'Giày đá bóng Adidas Predator Tango 19.3 TURF', 0, '2019-07-23 06:44:06', '2019-07-23 06:44:06'),
(8, 2, 4, 'Giày thể thao Biti’s', '1563864329-bitis1.jpg', 'Giày thể thao nam Biti’s Hunter X - Summer 2K19', 0, '2019-07-23 06:45:29', '2019-07-23 06:45:29'),
(9, 2, 3, 'Giày đá bóng Zocker', '1563864385-zocker.jpg', 'Giày đá bóng nam Zocker TF-2018', 0, '2019-07-23 06:46:25', '2019-07-23 06:46:25'),
(10, 1, 3, 'Áo Mancity 2019', '1563978714-Ao-man-city-san-nha-1-1-600x600.jpg', 'Áo bóng đá Manchester City sân nhà 2019 – 2020 hàng Thái Lan F1', 0, '2019-07-24 14:31:55', '2019-07-24 14:31:55'),
(11, 1, 4, 'Áo Bayern Munnich 2019', '1563982189-Ao-bayern-san-nha-1-1-600x600.jpg', 'Áo Bayern Munich đỏ 2019 – 2020', 0, '2019-07-24 15:29:49', '2019-07-24 15:29:49'),
(13, 3, 5, 'Phục hồi cơ bắp Herbalife', '1563986145-herbalife.jpg', 'SỮA HỖ TRỢ PHỤC HỒI CƠ BẮP SAU TẬP HERBALIFE', 0, '2019-07-24 16:35:45', '2019-07-24 16:35:45'),
(14, 3, 5, 'Aquarius tăng lực 390ml', '1563986569-Aqua-cad51.jpg', 'Nước tăng lực Aquarius giảm nhanh cơn khát, phục hồi thể lực sau khi vận động thể thao.', 0, '2019-07-24 16:42:49', '2019-07-24 16:42:49'),
(17, 3, 5, 'MUSCLETECH Tăng Cơ', '1563988224-MUSCLETECH.png', 'MUSCLETECH MASS TECH - 7LBS(3,18KG)', 0, '2019-07-24 17:10:24', '2019-07-24 17:10:24'),
(18, 3, 5, 'Tăng cơ bắp HammerGu', '1563988301-HM6209.jpeg', 'HM6209 Đồ Uống cung cấp dinh dưỡng HammerGu Perpetuem cap cấp.', 0, '2019-07-24 17:11:41', '2019-07-24 17:11:41'),
(19, 3, 5, 'Tăng Lực NumberOne', '1563988469-number1.jpg', 'Nước tăng lực bổ sung năng lượng, một số vitamin có lợi, giúp xua tan cơn khát và cảm giác mệt mỏi.', 0, '2019-07-24 17:14:29', '2019-07-24 17:14:29'),
(20, 3, 3, 'Nước Tăng Lực Warrior 330ml', '1563988588-Warrior.png', 'Nước Tăng Lực Warrior 330ml giúp phục hồi sức lực sau khi vận động.', 0, '2019-07-24 17:16:28', '2019-07-24 17:16:28'),
(24, 4, 4, 'Balo Adidas 2019', '1564023171-balo.jpg', 'Mẫu balo thể thao năng động của Adidas được sản xuất năm 2019.', 0, '2019-07-25 02:52:51', '2019-07-25 02:52:51'),
(25, 4, 3, 'Bình nước Lock&Lock ICE', '1564023372-locklock.jpg', 'Bình nước Lock&Lock ICE 2019.', 0, '2019-07-25 02:56:12', '2019-07-25 02:56:12'),
(26, 4, 4, 'Bóng động lực số 5', '1564023468-bong dong luc.jpg', 'Bóng động lực số 5 cao cấp, đạt chuẩn chất lượng FIFA.', 0, '2019-07-25 02:57:48', '2019-07-25 02:57:48'),
(27, 4, 3, 'Kính bơi plastic sim', '1564023547-kinh1.jpg', 'Kính bơi plastic sim, không bị hở nước, dễ dàng nhìn không đau mỏi mắt khi bơi.', 0, '2019-07-25 02:59:07', '2019-07-25 02:59:07'),
(31, 4, 3, 'Tất thể thao 2018', '1564025916-shock.jpg', 'Tất thể thao 2018', 0, '2019-07-25 03:38:36', '2019-07-25 03:38:36'),
(32, 4, 3, 'Vợt cầu lông Zingdan', '1564026946-votcaulong.jpg', 'Vợt cầu lông Zingdan, siêu nhẹ, chuẩn xác.', 0, '2019-07-25 03:55:46', '2019-07-25 03:55:46');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `original_price` int(11) DEFAULT NULL,
  `sell_price` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kind_sport_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`id`, `product_id`, `size`, `quantity`, `original_price`, `sell_price`, `created_at`, `updated_at`, `kind_sport_id`) VALUES
(1, 1, 'S', 26, 100000, 50000, '2019-07-16 17:33:38', '2019-07-25 06:53:40', 1),
(2, 2, 'M', 0, 100000, 60000, '2019-07-16 17:34:07', '2019-07-20 02:04:39', 1),
(3, 3, 'L', 22, 100000, 80000, '2019-07-16 17:35:21', '2019-07-24 15:48:36', 1),
(4, 3, 'XL', 25, 300000, 250000, '2019-07-16 17:35:21', '2019-07-24 15:48:34', 1),
(5, 4, 'S', 8, 100000, 100000, '2019-07-16 17:38:21', '2019-07-23 03:20:13', 1),
(6, 4, 'M', 8, 150000, 150000, '2019-07-16 17:38:22', '2019-07-22 12:29:20', 1),
(7, 4, 'L', 10, 170000, 170000, '2019-07-16 17:38:22', '2019-07-16 17:38:22', 1),
(8, 4, 'XL', 10, 180000, 180000, '2019-07-16 17:38:22', '2019-07-16 17:38:22', 1),
(9, 5, '41', 8, 1000000, 800000, '2019-07-23 06:40:12', '2019-07-25 06:54:21', 2),
(10, 5, '39', 10, 1000000, 800000, '2019-07-23 06:40:12', '2019-07-23 06:40:12', 2),
(11, 5, '40', 10, 1000000, 800000, '2019-07-23 06:40:12', '2019-07-23 06:40:12', 2),
(12, 6, '40', 8, 500000, 500000, '2019-07-23 06:42:51', '2019-07-25 06:54:33', 2),
(13, 6, '41', 10, 500000, 500000, '2019-07-23 06:42:51', '2019-07-23 06:42:51', 2),
(14, 7, '39', 10, 1200000, 900000, '2019-07-23 06:44:06', '2019-07-23 06:44:06', 2),
(15, 7, '40', 10, 1200000, 900000, '2019-07-23 06:44:06', '2019-07-23 06:44:06', 2),
(16, 7, '41', 10, 1200000, 900000, '2019-07-23 06:44:06', '2019-07-23 06:44:06', 2),
(17, 8, '40', 10, 400000, 400000, '2019-07-23 06:45:29', '2019-07-23 06:45:29', 2),
(18, 9, '40', 9, 600000, 600000, '2019-07-23 06:46:25', '2019-07-25 06:54:49', 2),
(19, 10, 'S', 10, 300000, 250000, '2019-07-24 14:31:55', '2019-07-24 14:31:55', 1),
(20, 10, 'M', 10, 300000, 250000, '2019-07-24 14:31:55', '2019-07-24 14:31:55', 1),
(21, 11, 'M', 10, 300000, 300000, '2019-07-24 15:29:49', '2019-07-24 15:29:49', 1),
(22, 11, 'XL', 10, 300000, 300000, '2019-07-24 15:29:49', '2019-07-24 15:29:49', 1),
(24, 13, '200ml', 10, 100000, 50000, '2019-07-24 16:35:45', '2019-07-24 16:35:45', 3),
(25, 14, '390ml', 10, 10000, 9000, '2019-07-24 16:42:49', '2019-07-24 16:42:49', 3),
(26, 17, '3,18Kg', 8, 1000000, 900000, '2019-07-24 17:10:24', '2019-07-25 06:55:01', 3),
(27, 18, '100ml', 10, 50000, 40000, '2019-07-24 17:11:42', '2019-07-24 17:11:42', 3),
(28, 19, '330ml', 10, 15000, 15000, '2019-07-24 17:14:29', '2019-07-24 17:14:29', 3),
(29, 20, '330ml', 10, 18000, 16000, '2019-07-24 17:16:28', '2019-07-24 17:16:28', 3),
(30, 24, '5', 11, 800000, 700000, '2019-07-25 02:52:51', '2019-07-25 02:52:51', 4),
(31, 25, '500ml', 17, 180000, 160000, '2019-07-25 02:56:12', '2019-07-25 06:55:15', 4),
(32, 26, '5', 30, 400000, 400000, '2019-07-25 02:57:48', '2019-07-25 02:57:48', 4),
(33, 27, '80', 25, 90000, 90000, '2019-07-25 02:59:07', '2019-07-25 02:59:07', 4),
(37, 31, 'XL', 19, 50000, 40000, '2019-07-25 03:38:36', '2019-07-25 03:39:39', 4),
(38, 32, '40M', 20, 800000, 800000, '2019-07-25 03:55:46', '2019-07-25 03:55:46', 4);

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_slide` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_kind` int(11) DEFAULT '0',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_details` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `name_slide`, `id_kind`, `image`, `created_at`, `updated_at`, `id_details`) VALUES
(1, 'Juventus', 1, '1563298795-juventus1.jpg', '2019-07-16 17:39:55', '2019-07-16 17:53:01', 1),
(2, 'Barca', 1, '1563299654-barca1.jpg', '2019-07-16 17:54:15', '2019-07-16 17:54:15', 3),
(3, 'Read Madrid', 1, '1563299684-ao3.jpg', '2019-07-16 17:54:44', '2019-07-16 17:54:44', 2),
(4, 'Arsenal', 1, '1563299713-arsenal1.jpg', '2019-07-16 17:55:13', '2019-07-16 17:55:13', 4),
(5, 'Giầy bóng rổ Jordan', 2, '1563864448-nike1.jpg', '2019-07-23 06:47:28', '2019-07-23 06:47:28', 5),
(6, 'Giầy chạy Anta', 2, '1563864480-anta2.jpg', '2019-07-23 06:48:00', '2019-07-23 06:48:00', 6),
(7, 'Giầy đá bóng adidas', 2, '1563864508-adidas3.jpg', '2019-07-23 06:48:28', '2019-07-23 06:48:28', 7),
(8, 'Giầy đá bóng adidas2', 2, '1563864546-adidas2.jpg', '2019-07-23 06:49:06', '2019-07-23 06:49:06', 7),
(9, 'Giầy thể thao bitis', 2, '1563864578-bitis2.jpg', '2019-07-23 06:49:38', '2019-07-23 06:49:38', 8),
(10, 'Giầy đá bóng zocker', 2, '1563864612-zocker2.jpg', '2019-07-23 06:50:12', '2019-07-23 06:50:12', 9),
(11, 'Áo Mancity', 1, '1563982006-Ao-man-city-san-nha-2-1-600x600.jpg', '2019-07-24 15:26:46', '2019-07-24 15:26:46', 10),
(12, 'Áo Bayern', 1, '1563982286-Ao-bayern-san-nha-2-1-600x600.jpg', '2019-07-24 15:31:26', '2019-07-24 15:31:26', 11),
(13, 'Herbalife', 3, '1563986987-herbalife-24-rebuild-trength-giup-phuc-hoi-co-bap-h027-5.jpg', '2019-07-24 16:49:47', '2019-07-24 16:49:47', 13),
(14, 'Mucle', 3, '1563988336-MUSCLETECH 1.jpg', '2019-07-24 17:12:16', '2019-07-24 17:12:16', 14);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `phone`) VALUES
(1, 'Nguyen Van A', 'abc@gmail.com', NULL, '$2y$10$LfItga7GzxD1pQGDeQ2nzegk.ZV4b2PMg.meiAbp3xZfo781oiX5q', NULL, '2019-07-19 17:43:12', '2019-07-24 15:44:53', '1234456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_username_unique` (`username`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kind_sports`
--
ALTER TABLE `kind_sports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `producers`
--
ALTER TABLE `producers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kind_sports`
--
ALTER TABLE `kind_sports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `producers`
--
ALTER TABLE `producers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
