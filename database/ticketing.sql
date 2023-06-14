-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 27, 2022 at 03:12 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticketing`
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
(49, 'Hridoy', '45', 'male', 20, '05445456', 'hridoy@gmail.com', 0, '1177371296', '2', 900, 31, '2022-10-27 09:09:54', '2022-10-27 09:09:54');

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
(12, 'AC', 'AA-55-65', 45, 'busImages/AA-55-65car_1666882016.png', 'Active', 9, '2022-10-27 08:46:56', '2022-10-27 08:46:56'),
(13, 'Non-AC', 'BA-435-A', 60, 'busImages/BA-435-Acar_1666882913.png', 'Active', 10, '2022-10-27 09:01:53', '2022-10-27 09:01:53');

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
(9, 'NUB BUS', 'Ikram Hossen', '0928456732', 'ikram.codeware@gmail.com', 'AA N/S/L/SC', '00003454', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, '2021-08-26 11:22:11', '2021-08-26 11:22:11'),
(10, 'Hanif', 'Mr Admin', '01785533442', 'hanif@admin.com', 'Dhaka', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, '2022-10-27 09:01:08', '2022-10-27 09:01:08');

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
(18, 'Dropping', '10:00', 'Dhaka', 30, '2022-10-27 08:51:28', '2022-10-27 08:51:28'),
(19, 'Boarding', '10:00', 'TT Para', 31, '2022-10-27 09:04:25', '2022-10-27 09:04:25'),
(20, 'Boarding', '10:20', 'Jatrabari', 31, '2022-10-27 09:04:25', '2022-10-27 09:04:25');

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
(30, '921392045', '28-Oct-2022', '31-Oct-2022', 'Dhaka', 'Cumilla', '10:00 AM', '4:00 PM', 350, 1, 1, 45, 2, 20, 12, '2022-10-27 08:50:58', '2022-10-27 08:50:58'),
(31, '667507387', '28-Oct-2022', '31-Oct-2022', 'Dhaka', 'Chittagong', '11:00 AM', '4:00 PM', 900, 1, 1, 60, 2, 50, 13, '2022-10-27 09:03:25', '2022-10-27 09:03:25');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `roles` enum('admin','user') COLLATE utf8mb4_unicode_ci DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`) VALUES
(1, 'ikram', 'ikram.codeware@gmail.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'user'),
(2, 'Admin', 'admin@gmail.com', NULL, '$2y$10$ZiRe6ZNd1VEu02l0fbuhZ.aE/sjsGkcUYB8P1yIKxMog7Cm6La.qm', NULL, NULL, NULL, 'admin');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `buses`
--
ALTER TABLE `buses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

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
