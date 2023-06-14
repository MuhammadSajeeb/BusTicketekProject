-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 23, 2021 at 11:37 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticketing_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `aminities`
--

CREATE TABLE `aminities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `aminity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bus_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aminities`
--

INSERT INTO `aminities` (`id`, `aminity`, `bus_id`, `created_at`, `updated_at`) VALUES
(1, 'Wifi Available', 6, '2021-06-28 16:00:44', '2021-06-28 16:00:44'),
(2, 'Socket Available', 6, '2021-06-28 16:00:44', '2021-06-28 16:00:44'),
(3, 'Wifi Available', 6, '2021-06-28 16:01:53', '2021-06-28 16:01:53'),
(4, 'Wifi Available', 5, NULL, NULL),
(5, 'Charger Sockets', 5, NULL, NULL),
(6, 'Wifi Available', 7, '2021-06-29 08:56:12', '2021-06-29 08:56:12'),
(7, 'Movie Available', 7, '2021-06-29 08:56:12', '2021-06-29 08:56:12'),
(8, 'WIFI', 9, '2021-08-02 17:04:10', '2021-08-02 17:04:10'),
(9, 'MOVIES', 9, '2021-08-02 17:04:10', '2021-08-02 17:04:10'),
(10, 'Charging point', 9, '2021-08-02 17:04:10', '2021-08-02 17:04:10'),
(11, 'WIFI', 11, '2021-08-29 06:46:10', '2021-08-29 06:46:10'),
(12, 'Movies', 11, '2021-08-29 06:46:10', '2021-08-29 06:46:10'),
(13, 'Charging Socket', 11, '2021-08-29 06:46:10', '2021-08-29 06:46:10');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `passenger_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seat_no` int(11) NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_confirmed` tinyint(1) NOT NULL,
  `order_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luggage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `trip_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `passenger_name`, `age`, `gender`, `seat_no`, `phone`, `email`, `is_confirmed`, `order_number`, `luggage`, `price`, `trip_id`, `created_at`, `updated_at`) VALUES
(8, 'Mickyas Balchu', '27', 'Male', 30, '0921543575', 'kibromtsadu@gmail.com', 0, '2077341307', '3', 320, 12, '2021-07-17 14:25:16', '2021-07-17 14:25:16'),
(12, 'Seble Negussie', '30', 'Female', 55, '+251943112409', 'seblenegussie88@gmail.com', 0, '145028382', '2', 250, 12, '2021-07-29 10:41:28', '2021-07-29 10:41:28'),
(13, 'Ahmed Usmael', '29', 'Male', 51, '+251936964570', 'samiwow16@gmail.com', 0, '311547988', '1', 250, 12, '2021-07-29 10:43:43', '2021-07-29 10:43:43'),
(14, 'Ahmed Usmael', '54', 'Male', 51, '+251936964570', 'samiwow16@gmail.com', 0, '348601979', '0', 250, 12, '2021-07-29 10:45:22', '2021-07-29 10:45:22'),
(15, 'Ahmed Usmael', '34', 'Male', 52, '+251936964570', 'samiwow16@gmail.com', 0, '2117680912', '0', 250, 12, '2021-07-29 10:53:13', '2021-07-29 10:53:13'),
(16, 'Biniyam', '29', 'Male', 33, '+61421527987', 'biniyam.yigletu@gmail.com', 0, '536664121', '1', 250, 12, '2021-07-29 11:16:58', '2021-07-29 11:16:58'),
(17, 'biniyam.yigletu@gmail.com', '29', 'Male', 45, '+61421527987', 'biniyam.yigletu@gmail.com', 0, '1685895527', '1', 250, 12, '2021-07-29 11:18:28', '2021-07-29 11:18:28'),
(19, 'Ahmed Usmael', '25', 'Male', 31, '+251936964570', 'samiwow16@gmail.com', 0, '1800130531', '0', 250, 12, '2021-07-30 06:44:27', '2021-07-30 06:44:27'),
(20, 'Ahmed Usmael', '34', 'Male', 40, '+10936964570', 'samiwow16@gmail.com', 0, '144244580', '0', 250, 12, '2021-07-30 08:22:39', '2021-07-30 08:22:39'),
(22, 'Ahmed Usmael', '34', 'Male', 20, '0936964570', 'samiwow16@gmail.com', 0, '1258991035', '0', 900, 14, '2021-08-02 16:47:46', '2021-08-02 16:47:46'),
(23, 'Ahmed Usmael', '32', 'Male', 21, '+10936964570', 'samiwow16@gmail.com', 0, '385760883', '0', 900, 14, '2021-08-02 17:22:54', '2021-08-02 17:22:54'),
(24, 'Ahmed Usmael', '23', 'Male', 37, '+10936964570', 'samiwow16@gmail.com', 0, '188880607', '1', 1000, 10, '2021-08-02 18:12:57', '2021-08-02 18:12:57'),
(25, 'Yodit biruk', '25', 'Female', 24, '0913445019', 'lulitbiruk1704@gmail.com', 0, '889377496', '0', 900, 14, '2021-08-02 18:49:41', '2021-08-02 18:49:41'),
(26, 'Yodit biruk', '25', 'Female', 24, '0913445019', 'lulitbiruk1704@gmail.com', 0, '1273795821', '0', 900, 14, '2021-08-02 18:49:43', '2021-08-02 18:49:43'),
(27, 'Yodit biruk', '25', 'Female', 24, '0913445019', 'lulitbiruk1704@gmail.com', 0, '413618912', '0', 900, 14, '2021-08-02 18:52:55', '2021-08-02 18:52:55'),
(28, 'samiwow16@gmail.com', '34', 'Male', 23, '+10936964570', 'samiwow16@gmail.com', 0, '242469513', '0', 900, 14, '2021-08-04 06:50:12', '2021-08-04 06:50:12'),
(29, 'Ahmed Usmael', '24', 'Male', 28, '+10936964570', 'samiwow16@gmail.com', 0, '445491464', '0', 900, 14, '2021-08-04 07:05:43', '2021-08-04 07:05:43'),
(30, 'Ahmed Usmael', '25', 'Male', 28, '+10936964570', 'samiwow16@gmail.com', 0, '735681879', '0', 900, 16, '2021-08-04 07:08:46', '2021-08-04 07:08:46'),
(31, 'Ahmed Usmael', '23', 'Male', 29, '+10936964570', 'samiwow16@gmail.com', 0, '735681879', '0', 900, 16, '2021-08-04 07:08:46', '2021-08-04 07:08:46'),
(32, 'Ahmed Usmael', '34', 'Male', 40, '+10936964570', 'samiwow16@gmail.com', 0, '787578306', '0', 450, 21, '2021-08-06 06:02:35', '2021-08-06 06:02:35'),
(33, 'abebe', '23', 'Male', 18, '0911110059', 'bmike0059@gmail.com', 0, '477249992', '4', 550, 21, '2021-08-12 20:08:40', '2021-08-12 20:08:40'),
(34, 'Ahmed Usmael', '26', 'Male', 15, '+10936964570', 'samiwow16@gmail.com', 0, '1097205900', '0', 450, 21, '2021-08-13 06:26:49', '2021-08-13 06:26:49'),
(35, 'Ahmed Usmael', '27', 'Male', 50, '+10936964570', 'samiwow16@gmail.com', 0, '1936404973', '1', 900, 22, '2021-08-13 06:35:37', '2021-08-13 06:35:37'),
(37, 'samuel', '29', 'Male', 40, '0936964570', 'samiwow16@gmail.com', 0, '344664749', '0', 550, 25, '2021-08-29 06:42:20', '2021-08-29 06:42:20'),
(38, 'Ahmed Usmael', '34', 'Male', 30, '+10936964570', 'samiwow16@gmail.com', 0, '1989227356', '0', 550, 25, '2021-08-29 06:48:34', '2021-08-29 06:48:34'),
(39, 'abbbelgiiirma2@gmail.com', '1', 'Male', 10, '0953442540', 'abbbelgiiirma2@gmail.com', 0, '2019095079', '1', 10, 27, '2021-09-04 10:40:33', '2021-09-04 10:40:33'),
(40, 'fsdfsdf', '31', 'Male', 13, '0953442540', 'abbbelgiiirma2@gmail.com', 0, '496642479', '3', 10, 27, '2021-09-04 10:51:28', '2021-09-04 10:51:28');

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

CREATE TABLE `buses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bus_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plate_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_seats` int(11) NOT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `operator_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buses`
--

INSERT INTO `buses` (`id`, `bus_type`, `plate_no`, `no_of_seats`, `image_url`, `status`, `operator_id`, `created_at`, `updated_at`) VALUES
(3, 'Volvo', 'AA,03,344566', 55, 'busImages/AA,03,344566car_1624834642.jpg', 'Active', 1, '2021-06-27 19:57:22', '2021-06-27 19:57:22'),
(4, 'TATA', 'AA,03,344555', 55, 'busImages/AA,03,344566car_1624834642.jpg', 'Active', 1, '2021-06-27 19:57:22', '2021-06-27 19:57:22'),
(5, 'MANN', 'AA,03,344544', 55, 'busImages/AA,03,344566car_1624834642.jpg', 'Active', 4, '2021-06-27 19:57:22', '2021-06-27 19:57:22'),
(6, 'VOLVO', 'AA,03,344666', 55, 'busImages/AA,03,344566car_1624834642.jpg', 'Active', 3, '2021-06-27 19:57:22', '2021-06-27 19:57:22'),
(7, 'Volvo', 'AA,03,344545', 55, 'busImages/AA,03,344545car_1624967448.jpg', 'Active', 5, '2021-06-29 08:50:48', '2021-06-29 08:50:48'),
(9, 'Yutong', 'ET-3435', 55, 'busImages/ET-3435car_1627922314.jpeg', 'Active', 8, '2021-08-02 16:38:34', '2021-08-02 16:38:34'),
(10, 'scnaia', 'ET-3437', 60, 'busImages/ET-3437car_1628835976.png', 'Active', 8, '2021-08-13 06:26:16', '2021-08-13 06:26:16'),
(11, 'Yutong', 'ET-1000', 49, 'busImages/ET-1000car_1630219007.jpeg', 'Active', 7, '2021-08-29 06:36:47', '2021-08-29 06:36:47');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '2021_06_25_192922_create_operators_table', 1),
(5, '2021_06_25_194230_create_buses_table', 1),
(6, '2021_06_25_195007_create_trips_table', 1),
(7, '2021_06_26_180323_create_seat_maps_table', 1),
(9, '2021_06_28_183601_create_aminities_table', 2),
(10, '2021_06_29_112200_create_routes_table', 3),
(11, '2021_07_10_185410_create_bookings_table', 4),
(12, '2021_06_27_150725_create_tickets_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `operators`
--

CREATE TABLE `operators` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_person` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tin_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `operators`
--

INSERT INTO `operators` (`id`, `name`, `contact_person`, `phone`, `email`, `address`, `tin_no`, `password`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Zemen Bus', 'Mr Mickyas', '0114567890', 'mike@gmail.com', 'Addis Ababa', '000033883', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, NULL, NULL),
(3, 'Selam Bus', 'Mr Alemayew', '0114567890', 'alex@gmail.com', 'Addis Ababa', '000033883', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, NULL, NULL),
(4, 'Sky Bus', 'Mr Abebe', '0114567890', 'abebe@gmail.com', 'Addis Ababa', '000033883', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, NULL, NULL),
(5, 'Habesha Bus', 'Mr Abrham', '0912340776', 'habesha@gmail.com', 'Addis Ababa', '0000438327', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, '2021-06-29 08:49:36', '2021-06-29 08:49:36'),
(6, 'FM Bus', 'Mr. Elias Kebede', '0115407406', 'fmbus@gmail.com', 'Addis Ababa/Zefmesh Building', '0000276545', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, '2021-07-14 12:54:21', '2021-07-14 12:54:21'),
(7, 'Waliya Bus', 'Abebe', '0115789609', 'walyabus@gmail.com', 'Kirkos sc', '000064536', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, '2021-07-17 14:32:20', '2021-07-17 14:32:20'),
(8, 'fetanbus1', 'Ahmed Usmael', '0936964570', 'samiwow16@gmail.com', '874', '1234', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, '2021-08-02 16:36:52', '2021-08-02 16:36:52'),
(9, 'Addis Bus', 'Mr. Kebede', '0928456732', 'addisbus@gmail.com', 'AA N/S/L/SC', '00003454', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, '2021-08-26 11:22:11', '2021-08-26 11:22:11');

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
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `boarding_dropping` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trip_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`id`, `boarding_dropping`, `time`, `place`, `trip_id`, `created_at`, `updated_at`) VALUES
(5, 'Boarding', '06:00', 'Piassa', 11, '2021-07-13 09:32:22', '2021-07-13 09:32:22'),
(6, 'Boarding', '19:31', 'Shashamane', 11, '2021-07-13 09:32:22', '2021-07-13 09:32:22'),
(7, 'Boarding', '05:30', 'Mexico', 14, '2021-08-02 16:44:39', '2021-08-02 16:44:39'),
(8, 'Boarding', '06:00', 'Bishoftu', 14, '2021-08-02 16:44:39', '2021-08-02 16:44:39'),
(9, 'Dropping', '02:03', 'Axum', 14, '2021-08-02 16:45:13', '2021-08-02 16:45:13'),
(10, 'Boarding', '05:30', 'Lembrat', 17, '2021-08-06 06:09:40', '2021-08-06 06:09:40'),
(11, 'Boarding', '06:10', 'Adama', 17, '2021-08-06 06:09:40', '2021-08-06 06:09:40'),
(12, 'Boarding', '13:30', 'CIRO', 17, '2021-08-06 06:11:46', '2021-08-06 06:11:46'),
(13, 'Boarding', '14:30', 'HIRNA', 17, '2021-08-06 06:11:46', '2021-08-06 06:11:46'),
(14, 'Boarding', '15:30', 'DENGAGO', 17, '2021-08-06 06:11:46', '2021-08-06 06:11:46'),
(15, 'Dropping', '13:30', 'CIRO', 17, '2021-08-06 06:15:58', '2021-08-06 06:15:58'),
(16, 'Dropping', '14:30', 'Hirna', 17, '2021-08-06 06:15:58', '2021-08-06 06:15:58'),
(17, 'Dropping', '21:30', 'Dengago', 17, '2021-08-06 06:15:58', '2021-08-06 06:15:58');

-- --------------------------------------------------------

--
-- Table structure for table `seat_maps`
--

CREATE TABLE `seat_maps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `seat_no` int(11) NOT NULL,
  `seat_value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seat_maps`
--

INSERT INTO `seat_maps` (`id`, `seat_no`, `seat_value`, `created_at`, `updated_at`) VALUES
(1, 1, '1_1', NULL, NULL),
(2, 2, '1_2', NULL, NULL),
(3, 3, '2_1', NULL, NULL),
(4, 4, '2_2', NULL, NULL),
(5, 5, '2_4', NULL, NULL),
(6, 6, '2_5', NULL, NULL),
(7, 7, '3_1', NULL, NULL),
(8, 8, '3_2', NULL, NULL),
(9, 9, '3_4', NULL, NULL),
(10, 10, '3_5', NULL, NULL),
(11, 11, '4_1', NULL, NULL),
(12, 12, '4_2', NULL, NULL),
(13, 13, '4_4', NULL, NULL),
(14, 14, '4_5', NULL, NULL),
(15, 15, '5_1', NULL, NULL),
(16, 16, '5_2', NULL, NULL),
(17, 17, '5_4', NULL, NULL),
(18, 18, '5_5', NULL, NULL),
(19, 19, '6_1', NULL, NULL),
(20, 20, '6_2', NULL, NULL),
(21, 21, '6_4', NULL, NULL),
(22, 22, '6_5', NULL, NULL),
(23, 23, '7_1', NULL, NULL),
(24, 24, '7_2', NULL, NULL),
(25, 25, '7_4', NULL, NULL),
(26, 26, '7_5', NULL, NULL),
(27, 27, '8_1', NULL, NULL),
(28, 28, '8_2', NULL, NULL),
(29, 29, '9_1', NULL, NULL),
(30, 30, '9_2', NULL, NULL),
(31, 31, '10_1', NULL, NULL),
(32, 32, '10_2', NULL, NULL),
(33, 33, '10_4', NULL, NULL),
(34, 34, '10_5', NULL, NULL),
(35, 35, '11_1', NULL, NULL),
(36, 36, '11_2', NULL, NULL),
(37, 37, '11_4', NULL, NULL),
(38, 38, '11_5', NULL, NULL),
(39, 39, '12_1', NULL, NULL),
(40, 40, '12_2', NULL, NULL),
(41, 41, '12_4', NULL, NULL),
(42, 42, '12_5', NULL, NULL),
(43, 43, '13_1', NULL, NULL),
(44, 44, '13_2', NULL, NULL),
(45, 45, '13_4', NULL, NULL),
(46, 46, '13_5', NULL, NULL),
(47, 47, '14_1', NULL, NULL),
(48, 48, '14_2', NULL, NULL),
(49, 49, '14_4', NULL, NULL),
(50, 50, '14_5', NULL, NULL),
(51, 51, '15_1', NULL, NULL),
(52, 52, '15_2', NULL, NULL),
(53, 53, '15_3', NULL, NULL),
(54, 54, '15_4', NULL, NULL),
(55, 55, '15_5', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `passenger_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seat_no` int(11) NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_confirmed` tinyint(1) NOT NULL,
  `ticket_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luggage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `bank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tt_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trip_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE `trips` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trip_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `travel_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arrival_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `depart_from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arrive_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `departure_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arrival_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double NOT NULL,
  `status` tinyint(1) NOT NULL,
  `available_seats_from` int(11) NOT NULL,
  `available_seats_upto` int(11) NOT NULL,
  `allowable_luggage` int(11) NOT NULL,
  `extra_luggage_fee` double NOT NULL,
  `bus_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`id`, `trip_no`, `travel_date`, `arrival_date`, `depart_from`, `arrive_at`, `departure_time`, `arrival_time`, `price`, `status`, `available_seats_from`, `available_seats_upto`, `allowable_luggage`, `extra_luggage_fee`, `bus_id`, `created_at`, `updated_at`) VALUES
(10, '1428567497', '26-Aug-2021', '26-Aug-2021', 'Addis Ababa', 'Jimma', '6:00 AM', '1:00 PM', 1000, 1, 1, 40, 2, 70, 6, '2021-07-13 07:20:01', '2021-07-13 07:20:01'),
(11, '586356344', '26-Aug-2021', '26-Aug-2021', 'Hawassa', 'Addis Ababa', '12:00 PM', '4:00 PM', 400, 1, 20, 55, 2, 70, 7, '2021-07-13 09:23:16', '2021-07-13 09:23:16'),
(12, '748569976', '26-Aug-2021', '26-Aug-2021', 'Addis Ababa', 'Hawassa', '5:30 AM', '10:00 AM', 250, 1, 30, 55, 2, 70, 7, '2021-07-13 09:35:46', '2021-08-02 17:13:48'),
(14, '1137716548', '26-Aug-2021', '26-Aug-2021', 'Addis Ababa', 'Axum', '5:30 AM', '4:00 PM', 900, 1, 20, 35, 2, 70, 9, '2021-08-02 16:40:52', '2021-08-04 06:43:37'),
(15, '1781381629', '26-Aug-2021', '26-Aug-2021', 'Axum', 'Addis Ababa', '5:30 AM', '4:00 PM', 900, 1, 20, 45, 2, 70, 9, '2021-08-04 06:45:14', '2021-08-04 06:45:14'),
(16, '1781381629', '26-Aug-2021', '26-Aug-2021', 'Axum', 'Addis Ababa', '5:30 AM', '4:00 PM', 900, 1, 20, 45, 2, 70, 9, '2021-08-04 06:45:15', '2021-08-04 06:45:15'),
(17, '1358428228', '26-Aug-2021', '26-Aug-2021', 'Addis Ababa', 'Harar', '5:30 AM', '4:00 PM', 500, 1, 15, 45, 2, 70, 9, '2021-08-06 05:53:35', '2021-08-06 05:53:35'),
(18, '2132286939', '26-Aug-2021', '26-Aug-2021', 'Harar', 'Addis Ababa', '5:30 AM', '4:00 PM', 500, 1, 10, 55, 2, 70, 9, '2021-08-06 05:55:26', '2021-08-06 05:55:26'),
(19, '830601067', '26-Aug-2021', '26-Aug-2021', 'Addis Ababa', 'Harar', '5:30 AM', '4:00 PM', 530, 1, 20, 40, 2, 70, 4, '2021-08-06 05:57:37', '2021-08-06 05:57:37'),
(21, '194568208', '26-Aug-2021', '26-Aug-2021', 'Addis Ababa', 'Harar', '5:10 AM', '4:00 PM', 450, 1, 15, 45, 3, 100, 5, '2021-08-06 06:00:15', '2021-08-24 11:04:45'),
(22, '1121962015', '26-Aug-2021', '26-Aug-2021', 'Mekelle', 'Addis Ababa', '5:30 AM', '10:00 AM', 900, 1, 10, 60, 2, 60, 10, '2021-08-13 06:29:44', '2021-08-13 06:29:44'),
(23, '752649612', '26-Aug-2021', '26-Aug-2021', 'hawasa', 'Addis Ababa', '5:30 AM', '4:00 PM', 450, 1, 20, 60, 2, 40, 10, '2021-08-13 06:31:40', '2021-08-13 06:31:40'),
(24, '1492869988', '26-Aug-2021', '26-Aug-2021', 'Addis Ababa', 'Bahir Dar', '12:00 PM', '6:00 PM', 500, 1, 10, 5, 1, 1, 6, '2021-08-16 08:50:30', '2021-08-16 08:50:30'),
(25, '1932475878', '30-Aug-2021', '30-Aug-2021', 'Addis Ababa', 'Gondar', '5:30 AM', '10:00 AM', 550, 1, 19, 40, 2, 60, 11, '2021-08-29 06:40:14', '2021-08-29 06:40:14'),
(26, '288508843', '04-Sep-2021', '04-Sep-2021', 'nsldkf', 'lknkdnskf', '12:00 PM', '10:00 AM', 120, 1, 10, 15, 2, 120, 10, '2021-09-04 09:41:07', '2021-09-04 09:41:07'),
(27, '265452181', '04-Sep-2021', '04-Sep-2021', 'xvxcv', 'xcvxcv', '11:00 AM', '12:00 PM', 10, 1, 10, 15, 3, 4, 11, '2021-09-04 10:36:07', '2021-09-04 10:36:07'),
(28, '226189265', '05-Sep-2021', '05-Sep-2021', 'Addis Ababa', 'Dire Dawa', '5:30 AM', '4:00 PM', 500, 1, 10, 60, 2, 60, 9, '2021-09-04 12:53:29', '2021-09-04 12:53:29');

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
(1, 'Mickyas', 'bmike0059@gmail.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL),
(2, 'Admin', 'admin@fetanbus.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aminities`
--
ALTER TABLE `aminities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aminities_bus_id_foreign` (`bus_id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_trip_id_foreign` (`trip_id`);

--
-- Indexes for table `buses`
--
ALTER TABLE `buses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `buses_operator_id_foreign` (`operator_id`);

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
-- Indexes for table `operators`
--
ALTER TABLE `operators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `routes_trip_id_foreign` (`trip_id`);

--
-- Indexes for table `seat_maps`
--
ALTER TABLE `seat_maps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tickets_trip_id_foreign` (`trip_id`);

--
-- Indexes for table `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trips_bus_id_foreign` (`bus_id`);

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
-- AUTO_INCREMENT for table `aminities`
--
ALTER TABLE `aminities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `buses`
--
ALTER TABLE `buses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `operators`
--
ALTER TABLE `operators`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `seat_maps`
--
ALTER TABLE `seat_maps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aminities`
--
ALTER TABLE `aminities`
  ADD CONSTRAINT `aminities_bus_id_foreign` FOREIGN KEY (`bus_id`) REFERENCES `buses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_trip_id_foreign` FOREIGN KEY (`trip_id`) REFERENCES `trips` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `buses`
--
ALTER TABLE `buses`
  ADD CONSTRAINT `buses_operator_id_foreign` FOREIGN KEY (`operator_id`) REFERENCES `operators` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `routes`
--
ALTER TABLE `routes`
  ADD CONSTRAINT `routes_trip_id_foreign` FOREIGN KEY (`trip_id`) REFERENCES `trips` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets_trip_id_foreign` FOREIGN KEY (`trip_id`) REFERENCES `trips` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `trips`
--
ALTER TABLE `trips`
  ADD CONSTRAINT `trips_bus_id_foreign` FOREIGN KEY (`bus_id`) REFERENCES `buses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
