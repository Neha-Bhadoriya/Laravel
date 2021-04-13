-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2021 at 08:00 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `banner_title`, `banner_description`, `banner_image`, `created_at`, `updated_at`) VALUES
(1, 'Self-Paced Learning Courses Online', 'jkjdfjkjk', 'banner_image1615580457.jpg', '2021-03-13 04:20:57', '2021-03-13 04:20:57'),
(2, 'What is Lorem Ipsum?', 'jkjkjk', 'banner_image1615580522.png', '2021-03-13 04:22:02', '2021-03-13 04:22:02'),
(3, 'lajldkajkl', 'llklk', 'banner_image1615580555.webp', '2021-03-13 04:22:35', '2021-03-13 04:22:35');

-- --------------------------------------------------------

--
-- Table structure for table `bottoms`
--

CREATE TABLE `bottoms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bottoms`
--

INSERT INTO `bottoms` (`id`, `title`, `description`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'online course', 'jkjkj', 'icon1615584853.jpg', '2021-03-13 05:34:13', '2021-03-13 05:34:13'),
(2, 'interview level questions', 'kkjk', 'icon1615584934.jpg', '2021-03-13 05:35:34', '2021-03-13 05:35:34'),
(3, 'great teachers', 'jjkk', 'icon1615584980.png', '2021-03-13 05:36:20', '2021-03-13 05:36:20');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` int(11) NOT NULL,
  `course_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `session_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `course_id`, `course_name`, `course_price`, `course_quantity`, `user_email`, `session_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 5, 'Angulur', '700', '1', 'arti@gmail.com', '4GIQYQeSpl1nqLuFOyaH8oGGIoVWk8DxgOmG4jls', 'course_image1615583583.jpg', '2021-04-13 23:18:33', '2021-04-13 23:18:50'),
(2, 5, 'Angulur', '700', '1', 'arti@gmail.com', '4lBkEZzyHPKxzDQyu9biQ35B0Eaj3xvHUK1262N0', 'course_image1615583583.jpg', '2021-04-13 23:26:31', '2021-04-13 23:27:13');

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_image` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catagories`
--

INSERT INTO `catagories` (`id`, `c_name`, `c_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Web Development', 'c_image1615581611.jpg', '1', '2021-03-13 04:40:11', '2021-03-13 04:40:11'),
(2, 'Full Stack', 'c_image1615581680.jpg', '1', '2021-03-13 04:41:20', '2021-03-13 04:43:08'),
(3, 'Laravel', 'c_image1615581726.webp', '1', '2021-03-13 04:42:06', '2021-03-13 04:42:06'),
(4, 'Angulur', 'c_image1615581768.jpg', '1', '2021-03-13 04:42:48', '2021-03-13 04:42:48'),
(5, 'Web Desiging', 'c_image1615581830.jpg', '1', '2021-03-13 04:43:50', '2021-03-13 04:43:50');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ad_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ad_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `title`, `description`, `name`, `phone`, `email`, `message`, `icon`, `tel`, `ad_email`, `ad_address`, `open`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'Neha Bhadoriya', '7845692340', 'nehabhadoriya33@gmail.com', 'mmnm', NULL, NULL, NULL, NULL, NULL, '2021-03-16 10:33:20', '2021-03-16 10:33:20'),
(3, NULL, NULL, 'krishna', '89656545454', 'lakshyabhadoriya22@gmail.com', 'hy', NULL, NULL, NULL, NULL, NULL, '2021-03-16 12:30:15', '2021-03-16 12:30:15'),
(5, NULL, NULL, 'Arti Gurjar', '7845692340', 'arti@gmail.com', 'dcklksl', NULL, NULL, NULL, NULL, NULL, '2021-03-16 23:13:14', '2021-03-16 23:13:14'),
(6, NULL, NULL, NULL, NULL, NULL, NULL, 'icon1615959862.png', NULL, NULL, NULL, NULL, '2021-03-17 12:44:22', '2021-03-17 12:44:22');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expiry_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `coupon_code`, `amount`, `amount_type`, `status`, `expiry_date`, `created_at`, `updated_at`) VALUES
(1, '1234', '20000', 'fixed', '1', '2021-03-12', '2021-03-26 09:39:03', '2021-03-26 10:10:59'),
(2, '4567', '50000', 'percentage', '1', '2021-03-30', '2021-03-26 09:39:47', '2021-03-26 10:11:20');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_includes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_catagory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`, `course_description`, `course_price`, `course_detail`, `course_includes`, `course_content`, `course_image`, `course_catagory`, `created_at`, `updated_at`) VALUES
(1, 'PHP', 'hjkj', '500', 'jjhjhj', 'kjkjk', 'klkll', 'course_image1615582237.jpg', 'Web Development', '2021-03-13 04:50:37', '2021-03-13 04:50:37'),
(2, 'Html CSS Bootstrap', 'kjlajld', '400', '.dak;l;', 'kflskfds', '.kdlkfll', 'course_image1615582885.jpg', 'Web Desiging', '2021-03-13 05:01:25', '2021-03-13 05:01:25'),
(3, 'Laravel', 'jkajk', '800', 'lakdlkl', 'lkalkdla', 'lklsaklk', 'course_image1615583004.png', 'Full Stack', '2021-03-13 05:03:24', '2021-03-13 05:27:41'),
(5, 'Angulur', 'mnm', '700', 'mnmm', 'kjkjk', 'lkll', 'course_image1615583583.jpg', 'Full Stack', '2021-03-13 05:13:03', '2021-03-13 05:28:20'),
(6, 'Python & Django', 'kjkj', '2000', 'kkl', 'lkk', 'lklkl', 'course_image1615583693.jpg', 'Web Development', '2021-03-13 05:14:53', '2021-03-13 05:14:53');

-- --------------------------------------------------------

--
-- Table structure for table `course_orders`
--

CREATE TABLE `course_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pincode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_orders`
--

INSERT INTO `course_orders` (`id`, `user_id`, `user_email`, `name`, `country`, `address`, `city`, `state`, `pincode`, `phone`, `order_notes`, `order_status`, `payment_method`, `coupon_code`, `coupon_amount`, `total`, `created_at`, `updated_at`) VALUES
(1, '13', 'arti@gmail.com', 'Arti Gurjar', 'Germany', 'Govindpuri', 'Gwalior', 'India', '1234', '8787766564', 'bye', NULL, NULL, NULL, NULL, NULL, '2021-04-13 23:20:02', '2021-04-13 23:20:02'),
(2, '13', 'arti@gmail.com', 'Arti Gurjar', 'Germany', 'Govindpuri', 'Gwalior', 'India', '1234', '08787766564', NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-13 23:26:56', '2021-04-13 23:26:56');

-- --------------------------------------------------------

--
-- Table structure for table `course_order_products`
--

CREATE TABLE `course_order_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_order_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_order_products`
--

INSERT INTO `course_order_products` (`id`, `course_order_id`, `user_id`, `course_id`, `course_name`, `course_price`, `course_quantity`, `image`, `created_at`, `updated_at`) VALUES
(1, '1', '13', '5', 'Angulur', '700', '1', 'course_image1615583583.jpg', '2021-04-13 23:20:02', '2021-04-13 23:20:02'),
(2, '2', '13', '5', 'Angulur', '700', '1', 'course_image1615583583.jpg', '2021-04-13 23:26:56', '2021-04-13 23:26:56');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `interns`
--

CREATE TABLE `interns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intern_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `interns`
--

INSERT INTO `interns` (`id`, `name`, `company_name`, `designation`, `intern_image`, `created_at`, `updated_at`) VALUES
(1, 'krishna', 'Wipro', 'mumbai', 'intern_image1615792499.jpg', '2021-03-15 12:59:21', '2021-03-15 14:14:59'),
(3, 'Arti Gurjar', 'TCS', 'gwalior', 'intern_image1615954706.jpg', '2021-03-17 11:18:26', '2021-03-17 11:18:26');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_02_22_181650_create_catagories_table', 1),
(5, '2021_02_23_172427_create_courses_table', 1),
(6, '2021_02_25_235418_create_banners_table', 1),
(7, '2021_03_01_003408_create_navbars_table', 1),
(8, '2021_03_02_164156_create_bottoms_table', 1),
(9, '2021_03_09_080146_create_add_to_carts_table', 1),
(10, '2021_03_09_172857_create_carts_table', 1),
(11, '2021_03_15_053428_create_our_teams_table', 2),
(12, '2021_03_15_053731_create_placements_table', 2),
(13, '2021_03_15_053752_create_interns_table', 2),
(14, '2021_03_16_020851_create_contacts_table', 3),
(15, '2021_03_19_065131_create_notifications_table', 4),
(16, '2021_03_25_053536_create_m_i_companies_table', 5),
(17, '2021_03_25_053924_create_bentchair_companies_table', 5),
(18, '2021_03_25_054001_create_rjit_companies_table', 5),
(19, '2021_03_25_054034_create_mpct_companies_table', 5),
(20, '2021_03_25_060305_create_workshops_table', 5),
(21, '2021_03_25_161529_create_coupons_table', 6),
(22, '2021_04_01_160710_create_check_outs_table', 7),
(23, '2021_04_07_162534_create_course_orders_table', 8),
(24, '2021_04_07_163427_create_course_order_products_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `navbars`
--

CREATE TABLE `navbars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `navbars`
--

INSERT INTO `navbars` (`id`, `number`, `email`, `logo`, `description`, `address`, `created_at`, `updated_at`) VALUES
(1, '7647888885', 'neha@gmail.com', 'logo1615580229.png', 'hello everybody', 'ChetakPuri', '2021-03-13 04:17:10', '2021-03-13 04:17:10');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `message`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(1, 'hello everyone', '2021-03-26', '2021-03-30', '2021-03-19 14:10:30', '2021-03-19 14:22:11'),
(3, 'hello students', '2021-03-18', '2021-03-01', '2021-03-23 13:48:19', '2021-03-23 13:48:19');

-- --------------------------------------------------------

--
-- Table structure for table `our_teams`
--

CREATE TABLE `our_teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_teams`
--

INSERT INTO `our_teams` (`id`, `name`, `description`, `team_image`, `created_at`, `updated_at`) VALUES
(2, 'Neha Bhadoriya', 'hello everyone!!', 'team_image1615790288.jpg', '2021-03-15 12:42:53', '2021-03-15 13:38:08'),
(8, 'neha', 'kkjk', 'team_image1615952413.jpg', '2021-03-17 10:40:14', '2021-03-17 10:40:14'),
(9, 'Arti Gurjar', 'hkjkjk', 'team_image1615954262.jpg', '2021-03-17 11:11:02', '2021-03-17 11:11:02'),
(10, 'vanshika', 'kjkjk', 'team_image1615954282.webp', '2021-03-17 11:11:22', '2021-03-17 11:11:22'),
(11, 'Sneha Pathak', 'kjk', 'team_image1615954302.jpg', '2021-03-17 11:11:42', '2021-03-17 11:11:42'),
(12, 'Mansi', 'hy', 'team_image1615954433.jpg', '2021-03-17 11:13:53', '2021-03-17 11:13:53'),
(13, 'abhay', 'jk', 'team_image1615954453.jpg', '2021-03-17 11:14:13', '2021-03-17 11:14:13'),
(14, 'krishna bhadoriya', 'jkj', 'team_image1615954521.jpg', '2021-03-17 11:15:21', '2021-03-17 11:15:21');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `placements`
--

CREATE TABLE `placements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `placement_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `placements`
--

INSERT INTO `placements` (`id`, `name`, `company_name`, `designation`, `placement_image`, `created_at`, `updated_at`) VALUES
(1, 'Arti Gurjar', 'TCS', 'gwalior', 'placement_image1615792279.jpg', '2021-03-15 12:51:23', '2021-03-15 14:11:19'),
(3, 'vanshika', 'Wipro', 'Agra', 'placement_image1615954581.jpg', '2021-03-17 11:16:21', '2021-03-17 11:16:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Neha Bhadoriya', 'neha@gmail.com', NULL, '$2y$10$qfnDmbFPtNJmy7ADc9EvS.skqAq3SjlsRktwQtJaOQ8is1zVVf4CC', NULL, '2021-03-13 04:14:05', '2021-03-13 04:14:05'),
(13, 'Arti Gurjar', 'arti@gmail.com', NULL, '$2y$10$x17VyzGajSY1ROBlTN0TAusOd5wM7qWNcKA5mMk.EMfjs7ETCJ2K6', NULL, '2021-04-05 10:23:19', '2021-04-05 10:23:19'),
(14, 'krishna', 'krishna@gmail.com', NULL, '$2y$10$pyt1SUHJwDhsUWFZSrF6qOAE1AcrtbiWFomY5yHyKe1kC4N.gLePW', NULL, '2021-04-05 10:33:59', '2021-04-05 10:33:59');

-- --------------------------------------------------------

--
-- Table structure for table `workshops`
--

CREATE TABLE `workshops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `workshop_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workshops`
--

INSERT INTO `workshops` (`id`, `title`, `workshop_image`, `created_at`, `updated_at`) VALUES
(7, 'Xiaomi Mi Company', 'workshop_image1616982517.png', '2021-03-29 08:48:37', '2021-03-29 08:48:37'),
(8, 'Xiaomi Mi Company', 'workshop_image1616982578.jpg', '2021-03-29 08:49:38', '2021-03-29 08:49:38'),
(9, 'Xiaomi Mi Company', 'workshop_image1616982613.png', '2021-03-29 08:50:13', '2021-03-29 08:50:13'),
(10, 'Xiaomi Mi Company', 'workshop_image1616982629.png', '2021-03-29 08:50:29', '2021-03-29 08:50:29'),
(11, 'BentChair Company', 'workshop_image1616982726.jpg', '2021-03-29 08:52:06', '2021-03-29 08:52:06'),
(12, 'BentChair Company', 'workshop_image1616982742.jpg', '2021-03-29 08:52:22', '2021-03-29 08:52:22'),
(13, 'BentChair Company', 'workshop_image1616982756.jpg', '2021-03-29 08:52:36', '2021-03-29 08:52:36'),
(14, 'BentChair Company', 'workshop_image1616982768.jpg', '2021-03-29 08:52:48', '2021-03-29 08:52:48'),
(15, 'Rjit College', 'workshop_image1616982898.jpg', '2021-03-29 08:54:58', '2021-03-29 08:54:58'),
(16, 'Rjit College', 'workshop_image1616982913.jpg', '2021-03-29 08:55:13', '2021-03-29 08:55:13'),
(17, 'Rjit College', 'workshop_image1616982929.jpg', '2021-03-29 08:55:29', '2021-03-29 08:55:29'),
(18, 'Rjit College', 'workshop_image1616982942.jpg', '2021-03-29 08:55:42', '2021-03-29 08:55:42'),
(19, 'Mpct College', 'workshop_image1616983066.jpg', '2021-03-29 08:57:46', '2021-03-29 08:57:46'),
(20, 'Mpct College', 'workshop_image1616983078.jpg', '2021-03-29 08:57:58', '2021-03-29 08:57:58'),
(21, 'Mpct College', 'workshop_image1616983090.jpg', '2021-03-29 08:58:10', '2021-03-29 08:58:10'),
(22, 'Mpct College', 'workshop_image1616983101.jpg', '2021-03-29 08:58:21', '2021-03-29 08:58:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bottoms`
--
ALTER TABLE `bottoms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_orders`
--
ALTER TABLE `course_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_order_products`
--
ALTER TABLE `course_order_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interns`
--
ALTER TABLE `interns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navbars`
--
ALTER TABLE `navbars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_teams`
--
ALTER TABLE `our_teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `placements`
--
ALTER TABLE `placements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `workshops`
--
ALTER TABLE `workshops`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bottoms`
--
ALTER TABLE `bottoms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `catagories`
--
ALTER TABLE `catagories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `course_orders`
--
ALTER TABLE `course_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course_order_products`
--
ALTER TABLE `course_order_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `interns`
--
ALTER TABLE `interns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `navbars`
--
ALTER TABLE `navbars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `our_teams`
--
ALTER TABLE `our_teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `placements`
--
ALTER TABLE `placements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `workshops`
--
ALTER TABLE `workshops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
