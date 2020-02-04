-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 04, 2020 lúc 04:12 AM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `em_hairsalon`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cus_id` bigint(20) UNSIGNED NOT NULL,
  `salon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NULL',
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `books`
--

INSERT INTO `books` (`id`, `cus_id`, `salon`, `service`, `date`, `time`, `message`, `created_at`, `updated_at`) VALUES
(2, 8, 'EM1', 'ssssssssss', '', '0000', 'aaaaaaaaa', '2020-01-07 08:23:23', '2020-01-07 08:23:23'),
(3, 9, 'EM-HairSalon 1', 'gội', '', '0000', 'ss', '2020-01-07 17:56:45', '2020-01-07 17:56:45'),
(4, 13, 'EM-HairSalon 1', 'gội', '', '0000', 'ddss', '2020-01-07 22:45:19', '2020-01-07 22:45:19'),
(5, 14, 'EM-HairSalon 1', 'tắm', '', '0000', NULL, '2020-01-07 23:29:15', '2020-01-07 23:29:15'),
(7, 15, 'EM-HairSalon 1', 'đi vệ sih', '', '2020', 'anh long', '2020-01-08 00:38:05', '2020-01-08 00:38:05'),
(8, 16, 'EM-HairSalon 1', 'đi vệ sih', '', '2020', 'anh long111111111111', '2020-01-08 00:39:13', '2020-01-08 00:39:13'),
(9, 17, 'EM-HairSalon 1', 'tắm', '', '2020', 'anh long', '2020-01-08 08:24:06', '2020-01-08 08:24:06'),
(10, 18, 'EM-HairSalon 1', 'abc', '', '2020', 'zzz', '2020-01-08 08:27:17', '2020-01-08 08:27:17'),
(12, 20, 'EM-HairSalon 2', 'Gội,Nhuộm,Hấp', '13/01/2020', '10:00', 'FULL SERVICE', '2020-01-09 01:54:13', '2020-01-11 22:40:34'),
(13, 22, 'EM-HairSalon 1', 'tắm', '', '2020', 'aaaaa', '2020-01-09 02:53:07', '2020-01-09 02:53:07'),
(14, 21, 'EM-HairSalon 1', 'tắm', '', '2020', 'aaaaa', '2020-01-09 02:53:29', '2020-01-09 02:53:29'),
(15, 23, 'EM-HairSalon 1', 'abc', '', '2020', NULL, '2020-01-09 18:53:42', '2020-01-09 18:53:42'),
(16, 24, 'EM-HairSalon 2', 'abc', '', '2020', NULL, '2020-01-09 19:03:15', '2020-01-09 19:03:15'),
(18, 27, 'EM-HairSalon 1', 'Hair Cut,Nhuộm', '', '2020', NULL, '2020-01-09 19:34:55', '2020-01-09 19:34:55'),
(19, 28, 'EM-HairSalon 1', 'Hair Cut,Gội', '', '2020', NULL, '2020-01-09 19:40:30', '2020-01-09 19:40:30'),
(20, 29, 'EM-HairSalon 1', 'Nhuộm', '', '2020', NULL, '2020-01-09 19:56:29', '2020-01-09 19:56:29'),
(21, 30, 'EM-HairSalon 1', 'Hair Cut', '', '2020', NULL, '2020-01-09 19:57:30', '2020-01-09 19:57:30'),
(22, 32, 'EM-HairSalon 1', 'Cắt,Gội,Nhuộm,Hấp', '', '2020', NULL, '2020-01-09 20:15:06', '2020-01-09 20:15:06'),
(23, 33, 'EM-HairSalon 1', 'Cắt,Gội', '', '2020', NULL, '2020-01-09 20:16:37', '2020-01-09 20:16:37'),
(24, 34, 'EM-HairSalon 1', 'Cắt', '', '2020', 'QUán như cặc', '2020-01-09 20:17:22', '2020-01-09 20:17:22'),
(25, 35, 'EM-HairSalon 1', 'Cắt,Gội', '10/01/2020', '08:00', 'sss', '2020-01-10 05:21:29', '2020-01-10 05:21:29'),
(26, 36, 'EM-HairSalon 2', 'Cắt,Gội,Nhuộm,Hấp', '12/01/2020', '09:00', 'Chất', '2020-01-10 11:31:49', '2020-01-10 11:31:49'),
(27, 37, 'EM-HairSalon 2', 'Cắt,Gội,Nhuộm', '11/01/2020', '10:30', 'Ngon bổ rẻ', '2020-01-10 18:46:40', '2020-01-10 18:46:40'),
(28, 38, 'EM-HairSalon 1', 'Cắt,Gội', '12/01/2020', '11:30', 'aa', '2020-01-10 21:44:24', '2020-01-10 21:44:24'),
(29, 31, 'EM-HairSalon 1', 'Gội,Nhuộm', '12/01/2020', '09:30', 'ssss', '2020-01-10 21:46:37', '2020-01-10 21:46:37'),
(30, 39, 'EM-HairSalon 2', 'Cắt,Gội,Nhuộm,Hấp', '11/01/2020', '11:00', '0213', '2020-01-10 22:32:32', '2020-01-10 22:32:32'),
(31, 40, 'EM-HairSalon 1', 'Cắt,Gội,Nhuộm', '11/01/2020', '17:30', '20', '2020-01-10 22:33:13', '2020-01-10 22:33:13'),
(32, 41, 'EM-HairSalon 2', 'Cắt,Gội,Nhuộm', '11/01/2020', '14:30', '33', '2020-01-10 23:31:04', '2020-01-10 23:31:04'),
(33, 42, 'EM-HairSalon 1', 'Gội,Nhuộm,Hấp', '11/01/2020', '08:30', '44', '2020-01-10 23:32:04', '2020-01-10 23:32:04'),
(36, 4, 'EM-HairSalon 2', 'Cắt,Gội,Nhuộm,Hấp', '12/01/2020', '19:30', NULL, '2020-01-12 02:00:11', '2020-01-12 02:00:11'),
(37, 45, 'EM-HairSalon 2', 'Cắt,Gội,Nhuộm', '12/01/2020', '18:30', NULL, '2020-01-12 02:40:28', '2020-01-12 02:40:28'),
(38, 46, 'EM-HairSalon 2', 'Cắt,Gội,Nhuộm,Hấp', '12/01/2020', '19:00', NULL, '2020-01-12 02:44:37', '2020-01-12 02:44:37'),
(39, 47, 'EM-HairSalon 2', 'Cắt,Gội', '12/01/2020', '17:30', NULL, '2020-01-12 02:47:46', '2020-01-12 02:47:46'),
(40, 48, 'EM-HairSalon 2', 'Cắt', '13/01/2020', '10:30', NULL, '2020-01-12 02:48:27', '2020-01-12 02:48:27'),
(41, 49, 'EM-HairSalon 2', 'Cắt,Gội', '13/01/2020', '11:30', NULL, '2020-01-12 02:50:29', '2020-01-12 02:50:29'),
(42, 50, 'EM-HairSalon 2', 'Cắt', '13/01/2020', '09:30', NULL, '2020-01-12 02:51:40', '2020-01-12 02:51:40'),
(43, 51, 'EM-HairSalon 2', 'Cắt', '13/01/2020', '16:00', NULL, '2020-01-12 02:52:41', '2020-01-12 02:52:41'),
(45, 52, 'EM-HairSalon 1', 'Cắt,Gội,Nhuộm,Hấp', '13/01/2020', '10:30', 'anh long dep trai', '2020-01-12 09:19:53', '2020-01-12 09:19:53'),
(50, 53, 'EM-HairSalon 1', 'Cắt,Gội', '13/01/2020', '15:00', NULL, '2020-01-12 18:48:30', '2020-01-12 18:48:30'),
(52, 55, 'EM-HairSalon 2', 'Gội,Nhuộm,Hấp', '14/01/2020', '11:30', NULL, '2020-01-12 22:51:47', '2020-01-12 22:51:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_cat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name_cat`, `slug`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Haircut And Styling', 'haircut-and-styling', 8, NULL, NULL),
(2, 'Color', 'color', 8, NULL, NULL),
(3, 'Hairwash', 'hairwash', 8, NULL, NULL),
(4, 'Shampoo', 'shampoo', 9, NULL, NULL),
(5, 'Mask', 'mask', 9, NULL, NULL),
(6, 'Cleanser', 'cleanser', 9, NULL, NULL),
(7, 'Acne cream', 'acne cream', 9, NULL, NULL),
(8, 'Service', 'service', NULL, NULL, NULL),
(9, 'Product', 'product', NULL, NULL, NULL),
(10, 'Beauty hair', 'beauty-hair', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `combos`
--

CREATE TABLE `combos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_combo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `service_2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `service_3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `service_4` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `service_5` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `service_6` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `price` decimal(6,2) NOT NULL,
  `sale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `combos`
--

INSERT INTO `combos` (`id`, `name_combo`, `service_1`, `service_2`, `service_3`, `service_4`, `service_5`, `service_6`, `price`, `sale`, `created_at`, `updated_at`) VALUES
(1, 'Combo 1', 'Cắt', 'Uốn', 'Hấp Colagen', 'Phủ Nano', 'Gội đầu thư giãn', 'Sấy tạo kiểu hoàn thiện', '50.00', '25', '2019-12-09 19:09:26', '2019-12-09 19:09:26'),
(2, 'Combo 2', ' Cắt', 'Nhuộm', 'Hấp Colagen', 'Phủ Nano', 'Gội đầu thư giãn', 'Sấy tạo kiểu hoàn thiện', '75.00', '25', '2019-12-09 19:09:26', '2019-12-09 19:09:26'),
(3, 'Combo 3', 'Cắt', 'Ép', 'Hấp Colagen', 'Phủ Nano', 'Gội đầu thư giãn', 'Sấy tạo kiểu hoàn thiện', '60.00', '10', '2019-12-09 19:09:26', '2019-12-09 19:09:26'),
(4, 'Anh Combo', 'Cắt', 'Gội đầu thư giãn', 'Massage mặt', 'Sấy tạo kiểu hoàn thiện', 'Thanh toán', 'Đuổi về', '1000.00', '20', '2019-12-09 19:09:26', '2020-02-01 00:50:28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `address`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Em-Hairsalon 1', 'No. 53, Pho Duc Chinh, Ba Dinh, Hanoi.', '812355558', '2019-12-09 19:09:26', '2019-12-09 19:09:26'),
(2, 'Em-Hairsalon 2', 'No. 7, Do Quang, Trung Hoa, Thanh Xuan, Hanoi.', '898740374', NULL, NULL),
(5, 'Em-Hairsalon3', 'Trần Duy Hưng', '0812355552', '2020-01-31 19:42:44', '2020-01-31 19:42:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`id`, `name`, `gender`, `phone`, `email`, `address`, `created_at`, `updated_at`) VALUES
(4, 'Nguyen Duc Long', 'Male', '0812355558', 'nguyenduclongwin@gmail.com', NULL, '2020-01-07 03:11:58', '2020-01-07 03:11:58'),
(6, 'Nguyễn Đức Long', 'Male', '0812355551', 'nguyenduclongwin1@gmail.com', NULL, '2020-01-07 07:26:27', '2020-01-07 07:26:27'),
(8, 'Nguyễn Đức Long', 'Male', '01223445555', 'nguyenduclongwin2@gmail.com', NULL, '2020-01-07 08:23:23', '2020-01-07 08:23:23'),
(9, 'Nguyễn Đức Long', 'Male', '012234455522', 'nguyenduclongwin11@gmail.com', NULL, '2020-01-07 17:56:45', '2020-01-07 17:56:45'),
(13, 'Nguyễn Đức Long', 'Male', '08123555581', 'nguyenduclongwin22@gmail.com', NULL, '2020-01-07 22:45:19', '2020-01-07 22:45:19'),
(14, 'Nguyễn Đức Long', 'Male', '081235555822', NULL, NULL, '2020-01-07 23:28:10', '2020-01-07 23:28:10'),
(15, 'long', 'Male', '0898740374', NULL, NULL, '2020-01-08 00:38:05', '2020-01-08 00:38:05'),
(16, 'long', 'Male', '08987403742', NULL, NULL, '2020-01-08 00:39:13', '2020-01-08 00:39:13'),
(17, 'anh long dep trai', 'Male', '0812366668', NULL, NULL, '2020-01-08 08:24:06', '2020-01-08 08:24:06'),
(18, 'longz', 'Male', '0812355554', NULL, NULL, NULL, NULL),
(19, 'Anh Long Đẹp Trai', 'Male', '0362633796', NULL, NULL, '2020-01-08 23:50:40', '2020-01-08 23:50:40'),
(20, 'Bùi Thị Thư', 'Female', '0812355553', NULL, NULL, '2020-01-09 01:54:13', '2020-01-09 01:54:13'),
(21, 'Ngans', 'Male', '0812344445', NULL, NULL, NULL, NULL),
(22, 'Nguyen Duc Long', 'Male', '0812366669', NULL, NULL, '2020-01-09 02:53:07', '2020-01-09 02:53:07'),
(23, 'Nguyen Duc Long', 'Male', '0111122225', NULL, NULL, '2020-01-09 18:53:42', '2020-01-09 18:53:42'),
(24, 'Nguyen Duc Long', 'Male', '0111122224', NULL, NULL, '2020-01-09 19:03:15', '2020-01-09 19:03:15'),
(25, 'Nguyen Duc Long', 'Male', '0121314151', NULL, NULL, '2020-01-09 19:11:51', '2020-01-09 19:11:51'),
(26, 'Nguyen Duc Long', 'Male', '0812355545', NULL, NULL, '2020-01-09 19:33:55', '2020-01-09 19:33:55'),
(27, 'Nguyen Duc Long', 'Male', '0812355578', NULL, NULL, '2020-01-09 19:34:55', '2020-01-09 19:34:55'),
(28, 'Nguyen Duc Long', 'Male', '0812355222', NULL, NULL, '2020-01-09 19:40:30', '2020-01-09 19:40:30'),
(29, 'Nguyen Duc Long', 'Male', '0121314152', NULL, NULL, '2020-01-09 19:56:29', '2020-01-09 19:56:29'),
(30, 'Nguyen Duc Long', 'Male', '0812355588', NULL, NULL, '2020-01-09 19:57:30', '2020-01-09 19:57:30'),
(31, 'Nguyen Duc Long', 'Male', '0812355532', NULL, NULL, '2020-01-09 20:10:50', '2020-01-09 20:10:50'),
(32, 'Đạt 09', 'Male', '0812533335', NULL, NULL, '2020-01-09 20:15:06', '2020-01-09 20:15:06'),
(33, 'Tao Là Đạt', 'Female', '0144444447', NULL, NULL, '2020-01-09 20:16:37', '2020-01-09 20:16:37'),
(34, 'Tao Là Đạt', 'Male', '0122255556', NULL, NULL, '2020-01-09 20:17:22', '2020-01-09 20:17:22'),
(35, 'Nguyen Duc Long', 'Male', '0812366663', NULL, NULL, '2020-01-10 05:21:29', '2020-01-10 05:21:29'),
(36, 'Anh Long Đẹp Trai', 'Male', '0868666668', NULL, NULL, '2020-01-10 11:31:49', '2020-01-10 11:31:49'),
(37, 'Nguyễn Đức Long', 'Male', '0123456789', NULL, NULL, '2020-01-10 18:46:40', '2020-01-10 18:46:40'),
(38, 'Anh Long Đẹp Trai', 'Male', '0812355512', NULL, NULL, '2020-01-10 21:44:24', '2020-01-10 21:44:24'),
(39, 'Anh Long Đẹp Trai', 'Male', '0812355595', NULL, NULL, '2020-01-10 22:32:32', '2020-01-10 22:32:32'),
(40, 'Anh Long Đẹp Trai', 'Male', '0812355567', NULL, NULL, '2020-01-10 22:33:13', '2020-01-10 22:33:13'),
(41, 'Nguyen Duc Long', 'Male', '0812355522', NULL, NULL, '2020-01-10 23:31:04', '2020-01-10 23:31:04'),
(42, 'Nguyen Duc Long', 'Male', '0812355544', NULL, NULL, '2020-01-10 23:32:04', '2020-01-10 23:32:04'),
(43, 'Anh Long Đẹp Trai', 'Male', '0812312345', NULL, NULL, '2020-01-11 23:33:46', '2020-01-11 23:33:46'),
(44, 'Anh Long Đẹp Trai', 'Male', '0812351234', NULL, NULL, '2020-01-11 23:36:42', '2020-01-11 23:36:42'),
(45, 'Nguyen Duc Long', 'Male', '0812355513', NULL, NULL, '2020-01-12 02:40:28', '2020-01-12 02:40:28'),
(46, 'Anh Long Đẹp Trai', 'Male', '0812355112', NULL, NULL, '2020-01-12 02:44:37', '2020-01-12 02:44:37'),
(47, 'Anh Long Đẹp Trai', 'Male', '0812355221', NULL, NULL, '2020-01-12 02:47:46', '2020-01-12 02:47:46'),
(48, 'Nguyen Duc Long', 'Male', '0812355223', NULL, NULL, '2020-01-12 02:48:27', '2020-01-12 02:48:27'),
(49, 'Anh Long Đẹp Trai', 'Male', '0812355665', NULL, NULL, '2020-01-12 02:50:29', '2020-01-12 02:50:29'),
(50, 'Anh Long Đẹp Trai', 'Male', '0812355999', NULL, NULL, '2020-01-12 02:51:40', '2020-01-12 02:51:40'),
(51, 'Anh Long Đẹp Trai', 'Male', '0812355886', NULL, NULL, '2020-01-12 02:52:41', '2020-01-12 02:52:41'),
(52, 'Anh Long Đẹp Trai', 'Male', '0812311110', NULL, NULL, '2020-01-12 08:51:03', '2020-01-12 08:51:03'),
(53, 'Anh Long Đẹp Trai', 'Male', '0812377776', NULL, NULL, '2020-01-12 18:35:16', '2020-01-12 18:35:16'),
(54, 'Anh Long Đẹp Trai', 'Male', '0812333333', NULL, NULL, '2020-01-12 22:48:58', '2020-01-12 22:48:58'),
(55, 'Nguyen Duc Long', 'Male', '0812322223', NULL, NULL, '2020-01-12 22:51:47', '2020-01-12 22:51:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_imgs`
--

CREATE TABLE `detail_imgs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` bigint(20) UNSIGNED DEFAULT NULL,
  `pro_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `detail_imgs`
--

INSERT INTO `detail_imgs` (`id`, `img`, `cat_id`, `pro_id`, `created_at`, `updated_at`) VALUES
(2, 'images/images_services/haircut1.jpg', 1, NULL, NULL, NULL),
(3, 'images/images_services/haircut2.jpg', 1, NULL, NULL, NULL),
(4, 'images/images_services/haircut3.jpg', 1, NULL, NULL, NULL),
(5, 'images/images_services/hairwash1.jpg', 3, NULL, NULL, NULL),
(6, 'images/images_services/hairwash2.jpg', 3, NULL, NULL, NULL),
(7, 'images/images_services/hairwash3.jpg', 3, NULL, NULL, NULL),
(8, 'images/images_services/color1.jpg', 2, NULL, NULL, NULL),
(9, 'images/images_services/color2.jpg', 2, NULL, NULL, NULL),
(10, 'images/images_services/color3.jpg', 2, NULL, NULL, NULL),
(12, 'images/update-trend1.jpg', 10, NULL, NULL, NULL),
(13, 'images/update-trend2.png', 10, NULL, NULL, NULL),
(14, 'images/update-trend3.jpg', 10, NULL, NULL, NULL),
(15, 'images/update-trend4.jpg', 10, NULL, NULL, NULL),
(16, 'images/update-trend5.jpg', 10, NULL, NULL, NULL),
(17, 'images/update-trend6.jpg', 10, NULL, NULL, NULL),
(18, 'images/update-trend7.jpg', 10, NULL, NULL, NULL),
(19, 'images/update-trend8.jpg', 10, NULL, NULL, NULL),
(20, 'images/update-trend9.jpg', 10, NULL, NULL, NULL),
(21, 'images/update-trend10.jpg', 10, NULL, NULL, NULL),
(22, 'images/update-trend11.jpg', 10, NULL, NULL, NULL),
(23, 'images/update-trend12.jpg', 10, NULL, NULL, NULL),
(24, 'images/update-trend13.png', 10, NULL, NULL, NULL),
(25, 'images/update-trend14.jpg', 10, NULL, NULL, NULL),
(26, 'images/update-trend15.jpg', 10, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_01_05_122857_create_admins_table', 1),
(5, '2020_01_05_122937_create_categories_table', 1),
(6, '2020_01_05_123154_create_products_table', 1),
(7, '2020_01_06_055746_create_articles_table', 1),
(8, '2020_01_06_055917_create_customers_table', 1),
(9, '2020_01_06_055949_create_orders_table', 1),
(10, '2020_01_06_060111_create_order_details_table', 1),
(11, '2020_01_06_060129_create_books_table', 1),
(12, '2020_01_06_060153_create_comments_table', 1),
(13, '2020_01_06_095116_create_contacts_table', 1),
(14, '2016_06_01_000001_create_oauth_auth_codes_table', 2),
(15, '2016_06_01_000002_create_oauth_access_tokens_table', 2),
(16, '2016_06_01_000003_create_oauth_refresh_tokens_table', 2),
(17, '2016_06_01_000004_create_oauth_clients_table', 2),
(18, '2016_06_01_000005_create_oauth_personal_access_clients_table', 2),
(19, '2020_01_21_053356_create_slides_table', 3),
(20, '2020_01_22_031052_create_salons_table', 4),
(25, '2020_01_23_034252_create_services_table', 5),
(27, '2020_01_26_113508_create_detail_imgs_table', 6),
(28, '2020_02_01_035347_create_salons_table', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'mvljmjAnM3JySelm1jH1ZBXb26bbJks0kRtDykSA', 'http://localhost', 1, 0, 0, '2020-01-13 05:56:29', '2020-01-13 05:56:29'),
(2, NULL, 'Laravel Password Grant Client', 'YC5nhDFCoboD4TdU34yAuQNwLMiLoSI3UYC5fGXI', 'http://localhost', 0, 1, 0, '2020-01-13 05:56:29', '2020-01-13 05:56:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-01-13 05:56:29', '2020-01-13 05:56:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cus_id` bigint(20) UNSIGNED NOT NULL,
  `shiping_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` decimal(13,2) NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pro_id` bigint(20) UNSIGNED NOT NULL,
  `o_id` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `sub_total` decimal(13,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(6,2) NOT NULL,
  `sale` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `cat_id`, `name`, `description`, `detail`, `qty`, `photo`, `price`, `sale`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 'Combo 4 dau goi Kafen chi', 'Tóc bóng mượt,sạch gàu', 'bóng mượt sạch gàu,bóng mượt sạch gàu,bóng mượt sạch gàu,bóng mượt sạch gàu,bóng mượt sạch gàu,bóng mượt sạch gàu,bóng mượt sạch gàu,bóng mượt sạch gàu,bóng mượt sạch gàu,bóng mượt sạch gàu,', 20, 'images/images_EM_shop/shampoo_kafen1.jfif', '46.00', 0, 1, NULL, NULL),
(2, 4, 'Combo 2 dau goi Keratin', 'Óng mượt sạch gàu', 'Óng mượt sạch gàuÓng mượt sạch gàuÓng mượt sạch gàuÓng mượt sạch gàuÓng mượt sạch gàuÓng mượt sạch gàuÓng mượt sạch gàu', 10, 'images/images_EM_shop/shampoo_keratin.jfif', '100.00', 0, 1, NULL, NULL),
(3, 4, 'Combo 2 dau goi Goldwell', 'sạch gàu', 'sạch gàu,sạch gàu,sạch gàu,sạch gàu,sạch gàu,sạch gàu,sạch gàu', 20, 'images/images_EM_shop/shampoo_goldwell.jpg', '20.00', 0, 1, NULL, NULL),
(4, 5, 'Mặt nạ CC Menalo 20 miếng từ Nhật Bản', 'sạch mụn', 'sạch mụn,sạch mụn,sạch mụn,sạch mụn,sạch mụn,sạch mụn,sạch mụn,sạch mụn,sạch mụn,sạch mụn,sạch mụn,sạch mụn,sạch mụn,sạch mụn,sạch mụn', 100, 'images/images_EM_shop/acne_mask_1.jpg', '10.00', 50, 1, NULL, NULL),
(5, 6, 'Sản phẩm sữa rửa mặt trị mụn Acerola chiết xuất từ quả cherry', 'sạch mặt sạch mụn', 'sạch mặt sạch mụn,sạch mặt sạch mụn,sạch mặt sạch mụn,sạch mặt sạch mụn', 100, 'images/images_EM_shop/clean_face_2.jfif', '20.00', 10, 1, NULL, NULL),
(6, 6, 'Sữa rửa mặt Biotin', 'sạch', ',sạch mịnsạch mịnsạch mịnsạch mịnsạch mịn', 100, 'images/images_EM_shop/shampoo_biotin1.jpg', '20.00', 20, 1, NULL, NULL),
(7, 7, 'Sản phẩm kem trị mụn Mong bear chiết xuất từ hạt đậu nành', 'sạch mụn', 'sạch mụn.sạch mụn.sạch mụn.sạch mụn.', 300, 'images/images_EM_shop/clean_face_3.jfif', '20.00', 0, 1, NULL, NULL),
(8, 4, 'Dầu gội cả phèn', 'lắc cái đầu cho sạch gầu', 'sạch gầu là sạch gầusạch gầu là sạch gầusạch gầu là sạch gầusạch gầu là sạch gầusạch gầu là sạch gầusạch gầu là sạch gầusạch gầu là sạch gầu', 50, 'images/images_EM_shop/shampoo_kafen1.jfif', '2000.00', 0, 1, '2020-02-01 09:09:30', '2020-02-01 09:09:30'),
(9, 4, 'Dầu gội cả phènsssssss', 'lắc cái đầu cho sạch gầu', 'sạch gầu là sạch gầusạch gầu là sạch gầusạch gầu là sạch gầusạch gầu là sạch gầusạch gầu là sạch gầusạch gầu là sạch gầusạch gầu là sạch gầu', 50, 'images/images_EM_shop/shampoo_kafen1.jfif', '2000.00', 0, 1, '2020-02-01 09:13:55', '2020-02-01 09:13:55'),
(12, 4, 'Dầu gội vàng tóc', 'Vàng tóc Vàng luôn cả đầu', 'Vàng tóc Vàng luôn cả đầuVàng tóc Vàng luôn cả đầuVàng tóc Vàng luôn cả đầuVàng tóc Vàng luôn cả đầu', 20, 'images/images_EM_shop/shampoo_goldwell.jpg', '3000.00', 25, 1, '2020-02-01 10:16:43', '2020-02-01 10:16:43'),
(13, 4, 'Dầu gội vàng tóc aaaaaaaa', 'Vàng tóc Vàng luôn cả đầu', 'Vàng tóc Vàng luôn cả đầuVàng tóc Vàng luôn cả đầuVàng tóc Vàng luôn cả đầuVàng tóc Vàng luôn cả đầu', 20, 'images/images_EM_shop/shampoo_goldwell.jpg', '75.00', 25, 1, '2020-02-01 10:19:21', '2020-02-01 10:19:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `salons`
--

CREATE TABLE `salons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `worktime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `salons`
--

INSERT INTO `salons` (`id`, `worktime`, `email`, `website`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Mon-Sun : 8h-22h', 'emhairsalon@reach.org.vn', 'www.emsalon.com', '812355558', NULL, '2020-01-31 22:59:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `services`
--

INSERT INTO `services` (`id`, `cat_id`, `service`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 'Men\'s haircut', '5.00', NULL, NULL),
(2, 1, 'Girl\'s haircut', '10.00', NULL, NULL),
(3, 1, 'Baby\'s haircut', '3.00', NULL, NULL),
(4, 3, 'Normal hairwash', '5.00', NULL, NULL),
(5, 3, 'Intensive Hairwash', '7.00', NULL, NULL),
(6, 2, 'Normal dyeing', '20.00', NULL, NULL),
(7, 2, 'Collagen dyeing', '30.00', NULL, NULL),
(8, 2, 'Hair remover', '50.00', NULL, NULL),
(9, 2, 'Highlight', '20.00', NULL, NULL),
(10, 2, 'Dot hairline', '20.00', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slides`
--

INSERT INTO `slides` (`id`, `img`, `content`, `created_at`, `updated_at`) VALUES
(1, '/images/image_slide03_02.jpg', 'Welcome to EM hair salon', '2019-12-09 19:09:26', '2019-12-09 19:08:18'),
(2, '/images/image_slide03_02.jpg', 'Chào mừng đến Em Hairsalon', NULL, NULL),
(3, '/images/image_slide03_02.jpg', 'anh long dep trai', NULL, '2020-02-02 01:33:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
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
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nguyen Duc Long', 'nguyenduclongwin@gmail.com', NULL, '$2y$10$o7B5wilaAWZv7j4YphguUOKN5zvAFchkLCyT09VSZ07i0mblurx1e', NULL, '2020-01-14 09:46:05', '2020-01-14 09:46:05');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `admins_phone_unique` (`phone`);

--
-- Chỉ mục cho bảng `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_cus_id_foreign` (`cus_id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Chỉ mục cho bảng `combos`
--
ALTER TABLE `combos`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `detail_imgs`
--
ALTER TABLE `detail_imgs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_imgs_cat_id_foreign` (`cat_id`),
  ADD KEY `detail_imgs_pro_id_foreign` (`pro_id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Chỉ mục cho bảng `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Chỉ mục cho bảng `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Chỉ mục cho bảng `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_cus_id_foreign` (`cus_id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_pro_id_foreign` (`pro_id`),
  ADD KEY `order_details_o_id_foreign` (`o_id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_cat_id_foreign` (`cat_id`);

--
-- Chỉ mục cho bảng `salons`
--
ALTER TABLE `salons`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_cat_id_foreign` (`cat_id`);

--
-- Chỉ mục cho bảng `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `combos`
--
ALTER TABLE `combos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT cho bảng `detail_imgs`
--
ALTER TABLE `detail_imgs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `salons`
--
ALTER TABLE `salons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_cus_id_foreign` FOREIGN KEY (`cus_id`) REFERENCES `customers` (`id`);

--
-- Các ràng buộc cho bảng `detail_imgs`
--
ALTER TABLE `detail_imgs`
  ADD CONSTRAINT `detail_imgs_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `detail_imgs_pro_id_foreign` FOREIGN KEY (`pro_id`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_cus_id_foreign` FOREIGN KEY (`cus_id`) REFERENCES `customers` (`id`);

--
-- Các ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_o_id_foreign` FOREIGN KEY (`o_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_details_pro_id_foreign` FOREIGN KEY (`pro_id`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`);

--
-- Các ràng buộc cho bảng `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
