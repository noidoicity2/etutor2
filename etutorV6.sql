-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 29, 2020 lúc 10:38 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `etutor`
--
CREATE DATABASE IF NOT EXISTS `etutor` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `etutor`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `comment` varchar(200) DEFAULT NULL,
  `document_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `user_id`, `comment`, `document_id`, `created_at`) VALUES
(1, 201, 'helllo', 4, '2020-04-29 01:02:56'),
(2, 201, 'LD', 4, '2020-04-29 01:02:57'),
(3, 201, 'dasd', 4, '2020-04-29 01:02:57'),
(4, 201, 'das', 4, '2020-04-29 01:02:58'),
(5, 201, 'dasd', 4, '2020-04-29 01:02:58'),
(6, 201, 'asd', 4, '2020-04-29 01:02:58'),
(7, 201, 'asd', 4, '2020-04-29 01:03:00'),
(8, 1, ':D', 4, '2020-04-29 01:03:50'),
(9, 1, 'dasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasas', 4, '2020-04-29 01:06:56'),
(10, 1, 'sdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 4, '2020-04-29 01:06:59'),
(11, 1, 'sdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 4, '2020-04-29 01:07:03'),
(12, 1, 'sadadadadadadadadadadadadadadadadadadadadadadadadadadadadadadadadadadadadadadadadadadadadadadadadadadadadadadadadadadadadadadadadadadadadadadad', 4, '2020-04-29 01:07:06'),
(13, 1, 'sdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 4, '2020-04-29 01:07:10'),
(14, 1, 'sdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 4, '2020-04-29 01:07:15'),
(15, 1, 'sdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 4, '2020-04-29 01:07:17'),
(16, 1, 'hello', 4, '2020-04-29 01:07:19'),
(17, 2, ':D', 4, '2020-04-29 01:09:43'),
(18, 2, 'das', 4, '2020-04-29 01:09:44'),
(19, 2, 'das', 4, '2020-04-29 01:09:45'),
(20, 2, 'das', 4, '2020-04-29 01:09:46'),
(21, 2, 'das', 4, '2020-04-29 01:09:46'),
(22, 2, 'das', 4, '2020-04-29 01:09:47'),
(23, 2, 'das', 4, '2020-04-29 01:09:48'),
(24, 2, 'das', 4, '2020-04-29 01:09:49'),
(25, 2, 'das', 4, '2020-04-29 01:09:50'),
(26, 2, 'das', 4, '2020-04-29 01:09:50'),
(27, 2, 'das', 4, '2020-04-29 01:09:51'),
(28, 2, 'das', 4, '2020-04-29 01:09:51'),
(29, 2, 'das', 4, '2020-04-29 01:09:52'),
(30, 2, 'dasd', 4, '2020-04-29 01:11:11'),
(31, 2, 'das', 4, '2020-04-29 01:11:12'),
(32, 2, 'das', 4, '2020-04-29 01:11:12'),
(33, 2, 'das', 4, '2020-04-29 01:11:13'),
(34, 2, 'dasd', 4, '2020-04-29 01:11:13'),
(35, 2, 'dasd', 4, '2020-04-29 01:11:14'),
(36, 2, 'das', 4, '2020-04-29 01:11:14'),
(37, 2, 'dsa', 4, '2020-04-29 01:11:30'),
(38, 2, 'das', 4, '2020-04-29 01:11:31'),
(39, 2, 'das', 4, '2020-04-29 01:11:32'),
(40, 2, 'das', 4, '2020-04-29 01:11:33'),
(41, 2, ':D', 4, '2020-04-29 01:11:55'),
(42, 2, 'sds', 4, '2020-04-29 01:11:59'),
(43, 2, 'dsa', 4, '2020-04-29 01:11:59'),
(44, 2, 'df', 4, '2020-04-29 01:12:05'),
(45, 2, 'fd', 4, '2020-04-29 01:12:06'),
(46, 2, 'f', 4, '2020-04-29 01:12:07'),
(47, 2, 'd', 4, '2020-04-29 01:12:08'),
(48, 2, 'dsa', 4, '2020-04-29 01:12:10'),
(49, 2, 'fd', 4, '2020-04-29 01:12:32'),
(50, 2, 'fd', 4, '2020-04-29 01:12:33'),
(51, 2, 'fd', 4, '2020-04-29 01:12:34'),
(52, 2, ':D', 4, '2020-04-29 01:12:35'),
(53, 2, 'DD', 4, '2020-04-29 01:12:36'),
(54, 2, 'S', 4, '2020-04-29 01:12:36'),
(55, 2, 'SD', 4, '2020-04-29 01:12:37'),
(56, 2, 'ds', 4, '2020-04-29 01:12:37'),
(57, 2, 'ds', 4, '2020-04-29 01:12:38'),
(58, 2, 'ds', 4, '2020-04-29 01:12:38'),
(59, 2, 'ds', 4, '2020-04-29 01:12:39'),
(60, 2, 'ds', 4, '2020-04-29 01:12:39'),
(61, 2, 'dsds', 4, '2020-04-29 01:12:41'),
(62, 2, 'gfd', 4, '2020-04-29 01:12:49'),
(63, 2, 'gdf', 4, '2020-04-29 01:12:49'),
(64, 2, 'gfd', 4, '2020-04-29 01:12:49'),
(65, 2, 'gdf', 4, '2020-04-29 01:12:50'),
(66, 3, 'dsa', 2, '2020-04-29 02:28:13'),
(67, 56, 'das', 6, '2020-04-29 02:33:43'),
(68, 56, 'dsad', 3, '2020-04-29 02:33:56'),
(69, 56, 'dasd', 3, '2020-04-29 02:33:57'),
(70, 56, 'das', 3, '2020-04-29 02:33:57'),
(71, 56, 'dasd', 3, '2020-04-29 02:33:57'),
(72, 56, 'das', 3, '2020-04-29 02:33:58'),
(73, 56, 'das', 3, '2020-04-29 02:33:58'),
(74, 56, 'helllo', 3, '2020-04-29 02:38:36'),
(75, 3, 'das', 5, '2020-04-29 02:45:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `isPublic` int(10) UNSIGNED DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `documents`
--

INSERT INTO `documents` (`id`, `name`, `link`, `created_by`, `created_at`, `updated_by`, `updated_at`, `isPublic`) VALUES
(1, 'co dang.png', '/Uploads/co dang.png', 202, '2020-04-29 00:54:22', NULL, NULL, 0),
(2, 'Logo-Greenwich.png', '/Uploads/Logo-Greenwich.png', 202, '2020-04-29 00:54:47', NULL, NULL, 0),
(3, 'Template-COMP1640-Coursework-Report-Group.docx', '/Uploads/Template-COMP1640-Coursework-Report-Group.docx', 202, '2020-04-29 00:55:20', NULL, NULL, 1),
(4, 'co dang.png', '/Uploads/co dang.png', 201, '2020-04-29 01:02:28', NULL, NULL, 1),
(5, 'cau_3_hoi_nghi_thanh_lap_dang-10_16_20_135.jpg', '/Uploads/cau_3_hoi_nghi_thanh_lap_dang-10_16_20_135.jpg', 3, '2020-04-29 02:26:30', NULL, NULL, 0),
(6, 'cau_3_hoi_nghi_thanh_lap_dang-10_16_20_135.jpg', '/Uploads/cau_3_hoi_nghi_thanh_lap_dang-10_16_20_135.jpg', 203, '2020-04-29 02:31:06', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `document_share`
--

CREATE TABLE `document_share` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `document_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `document_share`
--

INSERT INTO `document_share` (`id`, `document_id`, `user_id`, `created_date`) VALUES
(1, 1, 4, '2020-04-29 00:54:59'),
(2, 1, 5, '2020-04-29 00:54:59'),
(3, 2, 4, '2020-04-29 00:55:45'),
(4, 2, 5, '2020-04-29 00:55:45'),
(5, 3, 5, '2020-04-29 00:56:34'),
(6, 3, 6, '2020-04-29 00:56:34'),
(7, 3, 4, '2020-04-29 00:56:39'),
(8, 3, 34, '2020-04-29 00:56:48'),
(9, 3, 7, '2020-04-29 00:56:56'),
(10, 1, 6, '2020-04-29 00:58:08'),
(11, 4, 1, '2020-04-29 01:02:40'),
(12, 4, 2, '2020-04-29 01:02:46'),
(13, 6, 56, '2020-04-29 02:31:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `email`
--

CREATE TABLE `email` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `content` varchar(100) DEFAULT NULL,
  `to_user` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `email`
--

INSERT INTO `email` (`id`, `title`, `content`, `to_user`, `created_at`, `status`) VALUES
(1, 'You have been allocated to a student  successfully', 'You have been allocated to student id#1  success fully', 201, '2020-04-29 00:10:08', 0),
(2, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#201  success fully', 1, '2020-04-29 00:10:08', 0),
(3, 'You have been allocated to a student  successfully', 'You have been allocated to student id#2  success fully', 201, '2020-04-29 00:10:08', 0),
(4, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#201  success fully', 2, '2020-04-29 00:10:08', 0),
(5, 'You have been allocated to a student  successfully', 'You have been allocated to student id#3  success fully', 201, '2020-04-29 00:10:08', 0),
(6, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#201  success fully', 3, '2020-04-29 00:10:08', 0),
(7, 'You have been allocated to a student  successfully', 'You have been allocated to student id#17  success fully', 201, '2020-04-29 00:10:15', 0),
(8, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#201  success fully', 17, '2020-04-29 00:10:15', 0),
(9, 'You have been allocated to a student  successfully', 'You have been allocated to student id#18  success fully', 201, '2020-04-29 00:10:15', 0),
(10, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#201  success fully', 18, '2020-04-29 00:10:15', 0),
(11, 'You have been allocated to a student  successfully', 'You have been allocated to student id#4  success fully', 202, '2020-04-29 00:10:37', 0),
(12, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#202  success fully', 4, '2020-04-29 00:10:37', 0),
(13, 'You have been allocated to a student  successfully', 'You have been allocated to student id#5  success fully', 202, '2020-04-29 00:10:37', 0),
(14, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#202  success fully', 5, '2020-04-29 00:10:37', 0),
(15, 'You have been allocated to a student  successfully', 'You have been allocated to student id#6  success fully', 202, '2020-04-29 00:10:37', 0),
(16, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#202  success fully', 6, '2020-04-29 00:10:37', 0),
(17, 'You have been allocated to a student  successfully', 'You have been allocated to student id#7  success fully', 202, '2020-04-29 00:10:37', 0),
(18, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#202  success fully', 7, '2020-04-29 00:10:37', 0),
(19, 'You have been allocated to a student  successfully', 'You have been allocated to student id#8  success fully', 202, '2020-04-29 00:10:37', 0),
(20, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#202  success fully', 8, '2020-04-29 00:10:37', 0),
(21, 'You have been allocated to a student  successfully', 'You have been allocated to student id#9  success fully', 202, '2020-04-29 00:10:37', 0),
(22, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#202  success fully', 9, '2020-04-29 00:10:37', 0),
(23, 'You have been allocated to a student  successfully', 'You have been allocated to student id#10  success fully', 202, '2020-04-29 00:10:37', 0),
(24, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#202  success fully', 10, '2020-04-29 00:10:37', 0),
(25, 'You have been allocated to a student  successfully', 'You have been allocated to student id#11  success fully', 202, '2020-04-29 00:10:37', 0),
(26, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#202  success fully', 11, '2020-04-29 00:10:37', 0),
(27, 'You have been allocated to a student  successfully', 'You have been allocated to student id#12  success fully', 202, '2020-04-29 00:10:37', 0),
(28, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#202  success fully', 12, '2020-04-29 00:10:37', 0),
(29, 'You have been allocated to a student  successfully', 'You have been allocated to student id#13  success fully', 202, '2020-04-29 00:10:37', 0),
(30, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#202  success fully', 13, '2020-04-29 00:10:37', 0),
(31, 'You have been allocated to a student  successfully', 'You have been allocated to student id#14  success fully', 202, '2020-04-29 00:10:37', 0),
(32, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#202  success fully', 14, '2020-04-29 00:10:37', 0),
(33, 'You have been allocated to a student  successfully', 'You have been allocated to student id#15  success fully', 202, '2020-04-29 00:10:37', 0),
(34, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#202  success fully', 15, '2020-04-29 00:10:37', 0),
(35, 'You have been allocated to a student  successfully', 'You have been allocated to student id#16  success fully', 202, '2020-04-29 00:10:37', 0),
(36, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#202  success fully', 16, '2020-04-29 00:10:37', 0),
(37, 'You have been allocated to a student  successfully', 'You have been allocated to student id#19  success fully', 202, '2020-04-29 00:10:37', 0),
(38, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#202  success fully', 19, '2020-04-29 00:10:37', 0),
(39, 'You have been allocated to a student  successfully', 'You have been allocated to student id#20  success fully', 202, '2020-04-29 00:10:37', 0),
(40, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#202  success fully', 20, '2020-04-29 00:10:37', 0),
(41, 'You have been allocated to a student  successfully', 'You have been allocated to student id#21  success fully', 202, '2020-04-29 00:10:37', 0),
(42, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#202  success fully', 21, '2020-04-29 00:10:37', 0),
(43, 'You have been allocated to a student  successfully', 'You have been allocated to student id#22  success fully', 202, '2020-04-29 00:10:37', 0),
(44, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#202  success fully', 22, '2020-04-29 00:10:37', 0),
(45, 'You have been allocated to a student  successfully', 'You have been allocated to student id#23  success fully', 202, '2020-04-29 00:10:37', 0),
(46, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#202  success fully', 23, '2020-04-29 00:10:37', 0),
(47, 'You have been allocated to a student  successfully', 'You have been allocated to student id#24  success fully', 202, '2020-04-29 00:10:37', 0),
(48, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#202  success fully', 24, '2020-04-29 00:10:37', 0),
(49, 'You have been allocated to a student  successfully', 'You have been allocated to student id#25  success fully', 202, '2020-04-29 00:10:37', 0),
(50, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#202  success fully', 25, '2020-04-29 00:10:37', 0),
(51, 'You have been allocated to a student  successfully', 'You have been allocated to student id#26  success fully', 202, '2020-04-29 00:10:37', 0),
(52, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#202  success fully', 26, '2020-04-29 00:10:37', 0),
(53, 'You have been allocated to a student  successfully', 'You have been allocated to student id#27  success fully', 202, '2020-04-29 00:10:37', 0),
(54, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#202  success fully', 27, '2020-04-29 00:10:37', 0),
(55, 'You have been allocated to a student  successfully', 'You have been allocated to student id#28  success fully', 202, '2020-04-29 00:10:37', 0),
(56, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#202  success fully', 28, '2020-04-29 00:10:37', 0),
(57, 'You have been allocated to a student  successfully', 'You have been allocated to student id#29  success fully', 202, '2020-04-29 00:10:37', 0),
(58, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#202  success fully', 29, '2020-04-29 00:10:37', 0),
(59, 'You have been allocated to a student  successfully', 'You have been allocated to student id#30  success fully', 202, '2020-04-29 00:10:37', 0),
(60, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#202  success fully', 30, '2020-04-29 00:10:37', 0),
(61, 'You have been allocated to a student  successfully', 'You have been allocated to student id#31  success fully', 202, '2020-04-29 00:10:47', 0),
(62, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#202  success fully', 31, '2020-04-29 00:10:47', 0),
(63, 'You have been allocated to a student  successfully', 'You have been allocated to student id#32  success fully', 202, '2020-04-29 00:10:47', 0),
(64, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#202  success fully', 32, '2020-04-29 00:10:47', 0),
(65, 'You have been allocated to a student  successfully', 'You have been allocated to student id#33  success fully', 202, '2020-04-29 00:10:47', 0),
(66, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#202  success fully', 33, '2020-04-29 00:10:47', 0),
(67, 'You have been allocated to a student  successfully', 'You have been allocated to student id#34  success fully', 202, '2020-04-29 00:10:47', 0),
(68, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#202  success fully', 34, '2020-04-29 00:10:47', 0),
(69, 'You have been allocated to a student  successfully', 'You have been allocated to student id#35  success fully', 202, '2020-04-29 00:10:47', 0),
(70, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#202  success fully', 35, '2020-04-29 00:10:47', 0),
(71, 'You have been allocated to a student  successfully', 'You have been allocated to student id#36  success fully', 202, '2020-04-29 00:10:47', 0),
(72, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#202  success fully', 36, '2020-04-29 00:10:47', 0),
(73, 'You have been allocated to a student  successfully', 'You have been allocated to student id#37  success fully', 202, '2020-04-29 00:10:47', 0),
(74, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#202  success fully', 37, '2020-04-29 00:10:47', 0),
(75, 'You have been allocated to a student  successfully', 'You have been allocated to student id#38  success fully', 202, '2020-04-29 00:10:47', 0),
(76, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#202  success fully', 38, '2020-04-29 00:10:47', 0),
(77, 'You have been allocated to a student  successfully', 'You have been allocated to student id#39  success fully', 202, '2020-04-29 00:10:47', 0),
(78, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#202  success fully', 39, '2020-04-29 00:10:47', 0),
(79, 'You have been allocated to a student  successfully', 'You have been allocated to student id#40  success fully', 202, '2020-04-29 00:10:47', 0),
(80, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#202  success fully', 40, '2020-04-29 00:10:47', 0),
(81, 'You have been allocated to a student  successfully', 'You have been allocated to student id#41  success fully', 202, '2020-04-29 00:10:47', 0),
(82, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#202  success fully', 41, '2020-04-29 00:10:47', 0),
(83, 'You have been allocated to a student  successfully', 'You have been allocated to student id#42  success fully', 202, '2020-04-29 00:10:47', 0),
(84, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#202  success fully', 42, '2020-04-29 00:10:47', 0),
(85, 'You have been allocated to a student  successfully', 'You have been allocated to student id#43  success fully', 202, '2020-04-29 00:10:47', 0),
(86, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#202  success fully', 43, '2020-04-29 00:10:47', 0),
(87, 'You have been allocated to a student  successfully', 'You have been allocated to student id#44  success fully', 202, '2020-04-29 00:10:47', 0),
(88, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#202  success fully', 44, '2020-04-29 00:10:47', 0),
(89, 'You have been allocated to a student  successfully', 'You have been allocated to student id#45  success fully', 202, '2020-04-29 00:10:47', 0),
(90, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#202  success fully', 45, '2020-04-29 00:10:47', 0),
(91, 'You have been allocated to a student  successfully', 'You have been allocated to student id#46  success fully', 202, '2020-04-29 00:10:47', 0),
(92, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#202  success fully', 46, '2020-04-29 00:10:47', 0),
(93, 'You have been allocated to a student  successfully', 'You have been allocated to student id#47  success fully', 202, '2020-04-29 00:10:47', 0),
(94, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#202  success fully', 47, '2020-04-29 00:10:47', 0),
(95, 'You have been allocated to a student  successfully', 'You have been allocated to student id#48  success fully', 202, '2020-04-29 00:10:47', 0),
(96, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#202  success fully', 48, '2020-04-29 00:10:47', 0),
(97, 'You have been allocated to a student  successfully', 'You have been allocated to student id#49  success fully', 202, '2020-04-29 00:10:47', 0),
(98, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#202  success fully', 49, '2020-04-29 00:10:47', 0),
(99, 'You have been allocated to a student  successfully', 'You have been allocated to student id#50  success fully', 202, '2020-04-29 00:10:47', 0),
(100, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#202  success fully', 50, '2020-04-29 00:10:47', 0),
(101, 'You have been allocated to a student  successfully', 'You have been allocated to student id#51  success fully', 202, '2020-04-29 00:10:47', 0),
(102, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#202  success fully', 51, '2020-04-29 00:10:47', 0),
(103, 'You have been allocated to a student  successfully', 'You have been allocated to student id#52  success fully', 202, '2020-04-29 00:10:47', 0),
(104, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#202  success fully', 52, '2020-04-29 00:10:47', 0),
(105, 'You have been allocated to a student  successfully', 'You have been allocated to student id#53  success fully', 202, '2020-04-29 00:10:47', 0),
(106, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#202  success fully', 53, '2020-04-29 00:10:47', 0),
(107, 'You have been allocated to a student  successfully', 'You have been allocated to student id#54  success fully', 202, '2020-04-29 00:10:47', 0),
(108, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#202  success fully', 54, '2020-04-29 00:10:47', 0),
(109, 'You have been allocated to a student  successfully', 'You have been allocated to student id#55  success fully', 202, '2020-04-29 00:10:47', 0),
(110, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#202  success fully', 55, '2020-04-29 00:10:47', 0),
(111, 'You have been allocated to a student  successfully', 'You have been allocated to student id#56  success fully', 203, '2020-04-29 00:11:21', 0),
(112, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#203  success fully', 56, '2020-04-29 00:11:21', 0),
(113, 'You have been allocated to a student  successfully', 'You have been allocated to student id#57  success fully', 203, '2020-04-29 00:11:21', 0),
(114, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#203  success fully', 57, '2020-04-29 00:11:21', 0),
(115, 'You have been allocated to a student  successfully', 'You have been allocated to student id#58  success fully', 203, '2020-04-29 00:11:21', 0),
(116, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#203  success fully', 58, '2020-04-29 00:11:21', 0),
(117, 'You have been allocated to a student  successfully', 'You have been allocated to student id#59  success fully', 203, '2020-04-29 00:11:21', 0),
(118, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#203  success fully', 59, '2020-04-29 00:11:21', 0),
(119, 'You have been allocated to a student  successfully', 'You have been allocated to student id#60  success fully', 203, '2020-04-29 00:11:21', 0),
(120, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#203  success fully', 60, '2020-04-29 00:11:21', 0),
(121, 'You have been allocated to a student  successfully', 'You have been allocated to student id#61  success fully', 203, '2020-04-29 00:11:21', 0),
(122, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#203  success fully', 61, '2020-04-29 00:11:21', 0),
(123, 'You have been allocated to a student  successfully', 'You have been allocated to student id#62  success fully', 203, '2020-04-29 00:11:21', 0),
(124, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#203  success fully', 62, '2020-04-29 00:11:21', 0),
(125, 'You have been allocated to a student  successfully', 'You have been allocated to student id#63  success fully', 203, '2020-04-29 00:11:21', 0),
(126, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#203  success fully', 63, '2020-04-29 00:11:21', 0),
(127, 'You have been allocated to a student  successfully', 'You have been allocated to student id#64  success fully', 203, '2020-04-29 00:11:21', 0),
(128, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#203  success fully', 64, '2020-04-29 00:11:21', 0),
(129, 'You have been allocated to a student  successfully', 'You have been allocated to student id#65  success fully', 203, '2020-04-29 00:11:21', 0),
(130, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#203  success fully', 65, '2020-04-29 00:11:21', 0),
(131, 'You have been allocated to a student  successfully', 'You have been allocated to student id#66  success fully', 203, '2020-04-29 00:11:21', 0),
(132, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#203  success fully', 66, '2020-04-29 00:11:21', 0),
(133, 'You have been allocated to a student  successfully', 'You have been allocated to student id#67  success fully', 203, '2020-04-29 00:11:22', 0),
(134, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#203  success fully', 67, '2020-04-29 00:11:22', 0),
(135, 'You have been allocated to a student  successfully', 'You have been allocated to student id#68  success fully', 203, '2020-04-29 00:11:22', 0),
(136, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#203  success fully', 68, '2020-04-29 00:11:22', 0),
(137, 'You have been allocated to a student  successfully', 'You have been allocated to student id#69  success fully', 203, '2020-04-29 00:11:22', 0),
(138, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#203  success fully', 69, '2020-04-29 00:11:22', 0),
(139, 'You have been allocated to a student  successfully', 'You have been allocated to student id#70  success fully', 203, '2020-04-29 00:11:22', 0),
(140, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#203  success fully', 70, '2020-04-29 00:11:22', 0),
(141, 'You have been allocated to a student  successfully', 'You have been allocated to student id#71  success fully', 203, '2020-04-29 00:11:22', 0),
(142, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#203  success fully', 71, '2020-04-29 00:11:22', 0),
(143, 'You have been allocated to a student  successfully', 'You have been allocated to student id#72  success fully', 203, '2020-04-29 00:11:22', 0),
(144, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#203  success fully', 72, '2020-04-29 00:11:22', 0),
(145, 'You have been allocated to a student  successfully', 'You have been allocated to student id#73  success fully', 203, '2020-04-29 00:11:22', 0),
(146, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#203  success fully', 73, '2020-04-29 00:11:22', 0),
(147, 'You have been allocated to a student  successfully', 'You have been allocated to student id#74  success fully', 203, '2020-04-29 00:11:22', 0),
(148, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#203  success fully', 74, '2020-04-29 00:11:22', 0),
(149, 'You have been allocated to a student  successfully', 'You have been allocated to student id#75  success fully', 203, '2020-04-29 00:11:22', 0),
(150, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#203  success fully', 75, '2020-04-29 00:11:22', 0),
(151, 'You have been allocated to a student  successfully', 'You have been allocated to student id#76  success fully', 203, '2020-04-29 00:11:22', 0),
(152, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#203  success fully', 76, '2020-04-29 00:11:22', 0),
(153, 'You have been allocated to a student  successfully', 'You have been allocated to student id#77  success fully', 203, '2020-04-29 00:11:22', 0),
(154, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#203  success fully', 77, '2020-04-29 00:11:22', 0),
(155, 'You have been allocated to a student  successfully', 'You have been allocated to student id#78  success fully', 203, '2020-04-29 00:11:22', 0),
(156, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#203  success fully', 78, '2020-04-29 00:11:22', 0),
(157, 'You have been allocated to a student  successfully', 'You have been allocated to student id#79  success fully', 203, '2020-04-29 00:11:22', 0),
(158, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#203  success fully', 79, '2020-04-29 00:11:22', 0),
(159, 'You have been allocated to a student  successfully', 'You have been allocated to student id#80  success fully', 203, '2020-04-29 00:11:22', 0),
(160, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#203  success fully', 80, '2020-04-29 00:11:22', 0),
(161, 'You have been allocated to a student  successfully', 'You have been allocated to student id#81  success fully', 204, '2020-04-29 00:11:40', 0),
(162, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#204  success fully', 81, '2020-04-29 00:11:40', 0),
(163, 'You have been allocated to a student  successfully', 'You have been allocated to student id#82  success fully', 204, '2020-04-29 00:11:40', 0),
(164, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#204  success fully', 82, '2020-04-29 00:11:40', 0),
(165, 'You have been allocated to a student  successfully', 'You have been allocated to student id#83  success fully', 204, '2020-04-29 00:11:40', 0),
(166, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#204  success fully', 83, '2020-04-29 00:11:40', 0),
(167, 'You have been allocated to a student  successfully', 'You have been allocated to student id#84  success fully', 204, '2020-04-29 00:11:40', 0),
(168, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#204  success fully', 84, '2020-04-29 00:11:40', 0),
(169, 'You have been allocated to a student  successfully', 'You have been allocated to student id#85  success fully', 204, '2020-04-29 00:11:40', 0),
(170, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#204  success fully', 85, '2020-04-29 00:11:40', 0),
(171, 'You have been allocated to a student  successfully', 'You have been allocated to student id#86  success fully', 204, '2020-04-29 00:11:40', 0),
(172, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#204  success fully', 86, '2020-04-29 00:11:40', 0),
(173, 'You have been allocated to a student  successfully', 'You have been allocated to student id#87  success fully', 204, '2020-04-29 00:11:40', 0),
(174, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#204  success fully', 87, '2020-04-29 00:11:40', 0),
(175, 'You have been allocated to a student  successfully', 'You have been allocated to student id#88  success fully', 204, '2020-04-29 00:11:40', 0),
(176, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#204  success fully', 88, '2020-04-29 00:11:40', 0),
(177, 'You have been allocated to a student  successfully', 'You have been allocated to student id#89  success fully', 204, '2020-04-29 00:11:40', 0),
(178, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#204  success fully', 89, '2020-04-29 00:11:40', 0),
(179, 'You have been allocated to a student  successfully', 'You have been allocated to student id#90  success fully', 204, '2020-04-29 00:11:40', 0),
(180, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#204  success fully', 90, '2020-04-29 00:11:40', 0),
(181, 'You have been allocated to a student  successfully', 'You have been allocated to student id#91  success fully', 204, '2020-04-29 00:11:40', 0),
(182, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#204  success fully', 91, '2020-04-29 00:11:40', 0),
(183, 'You have been allocated to a student  successfully', 'You have been allocated to student id#92  success fully', 204, '2020-04-29 00:11:40', 0),
(184, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#204  success fully', 92, '2020-04-29 00:11:40', 0),
(185, 'You have been allocated to a student  successfully', 'You have been allocated to student id#93  success fully', 204, '2020-04-29 00:11:40', 0),
(186, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#204  success fully', 93, '2020-04-29 00:11:40', 0),
(187, 'You have been allocated to a student  successfully', 'You have been allocated to student id#94  success fully', 204, '2020-04-29 00:11:40', 0),
(188, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#204  success fully', 94, '2020-04-29 00:11:40', 0),
(189, 'You have been allocated to a student  successfully', 'You have been allocated to student id#95  success fully', 204, '2020-04-29 00:11:40', 0),
(190, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#204  success fully', 95, '2020-04-29 00:11:40', 0),
(191, 'You have been allocated to a student  successfully', 'You have been allocated to student id#96  success fully', 204, '2020-04-29 00:11:40', 0),
(192, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#204  success fully', 96, '2020-04-29 00:11:40', 0),
(193, 'You have been allocated to a student  successfully', 'You have been allocated to student id#97  success fully', 204, '2020-04-29 00:11:40', 0),
(194, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#204  success fully', 97, '2020-04-29 00:11:40', 0),
(195, 'You have been allocated to a student  successfully', 'You have been allocated to student id#98  success fully', 204, '2020-04-29 00:11:40', 0),
(196, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#204  success fully', 98, '2020-04-29 00:11:40', 0),
(197, 'You have been allocated to a student  successfully', 'You have been allocated to student id#99  success fully', 204, '2020-04-29 00:11:40', 0),
(198, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#204  success fully', 99, '2020-04-29 00:11:40', 0),
(199, 'You have been allocated to a student  successfully', 'You have been allocated to student id#100  success fully', 204, '2020-04-29 00:11:40', 0),
(200, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#204  success fully', 100, '2020-04-29 00:11:40', 0),
(201, 'You have been allocated to a student  successfully', 'You have been allocated to student id#101  success fully', 204, '2020-04-29 00:11:40', 0),
(202, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#204  success fully', 101, '2020-04-29 00:11:40', 0),
(203, 'You have been allocated to a student  successfully', 'You have been allocated to student id#102  success fully', 204, '2020-04-29 00:11:40', 0),
(204, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#204  success fully', 102, '2020-04-29 00:11:40', 0),
(205, 'You have been allocated to a student  successfully', 'You have been allocated to student id#103  success fully', 204, '2020-04-29 00:11:40', 0),
(206, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#204  success fully', 103, '2020-04-29 00:11:40', 0),
(207, 'You have been allocated to a student  successfully', 'You have been allocated to student id#104  success fully', 204, '2020-04-29 00:11:40', 0),
(208, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#204  success fully', 104, '2020-04-29 00:11:40', 0),
(209, 'You have been allocated to a student  successfully', 'You have been allocated to student id#105  success fully', 204, '2020-04-29 00:11:40', 0),
(210, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#204  success fully', 105, '2020-04-29 00:11:40', 0),
(211, 'You have been allocated to a student  successfully', 'You have been allocated to student id#106  success fully', 204, '2020-04-29 00:11:54', 0),
(212, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#204  success fully', 106, '2020-04-29 00:11:54', 0),
(213, 'You have been allocated to a student  successfully', 'You have been allocated to student id#107  success fully', 204, '2020-04-29 00:11:54', 0),
(214, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#204  success fully', 107, '2020-04-29 00:11:54', 0),
(215, 'You have been allocated to a student  successfully', 'You have been allocated to student id#108  success fully', 204, '2020-04-29 00:11:54', 0),
(216, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#204  success fully', 108, '2020-04-29 00:11:54', 0),
(217, 'You have been allocated to a student  successfully', 'You have been allocated to student id#109  success fully', 204, '2020-04-29 00:11:54', 0),
(218, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#204  success fully', 109, '2020-04-29 00:11:54', 0),
(219, 'You have been allocated to a student  successfully', 'You have been allocated to student id#110  success fully', 204, '2020-04-29 00:11:54', 0),
(220, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#204  success fully', 110, '2020-04-29 00:11:54', 0),
(221, 'You have been allocated to a student  successfully', 'You have been allocated to student id#111  success fully', 204, '2020-04-29 00:11:54', 0),
(222, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#204  success fully', 111, '2020-04-29 00:11:54', 0),
(223, 'You have been allocated to a student  successfully', 'You have been allocated to student id#112  success fully', 204, '2020-04-29 00:11:54', 0),
(224, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#204  success fully', 112, '2020-04-29 00:11:54', 0),
(225, 'You have been allocated to a student  successfully', 'You have been allocated to student id#113  success fully', 204, '2020-04-29 00:11:54', 0),
(226, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#204  success fully', 113, '2020-04-29 00:11:54', 0),
(227, 'You have been allocated to a student  successfully', 'You have been allocated to student id#114  success fully', 204, '2020-04-29 00:11:54', 0),
(228, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#204  success fully', 114, '2020-04-29 00:11:54', 0),
(229, 'You have been allocated to a student  successfully', 'You have been allocated to student id#115  success fully', 204, '2020-04-29 00:11:54', 0),
(230, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#204  success fully', 115, '2020-04-29 00:11:54', 0),
(231, 'You have been allocated to a student  successfully', 'You have been allocated to student id#116  success fully', 204, '2020-04-29 00:11:54', 0),
(232, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#204  success fully', 116, '2020-04-29 00:11:54', 0),
(233, 'You have been allocated to a student  successfully', 'You have been allocated to student id#117  success fully', 204, '2020-04-29 00:11:54', 0),
(234, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#204  success fully', 117, '2020-04-29 00:11:54', 0),
(235, 'You have been allocated to a student  successfully', 'You have been allocated to student id#118  success fully', 204, '2020-04-29 00:11:54', 0),
(236, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#204  success fully', 118, '2020-04-29 00:11:54', 0),
(237, 'You have been allocated to a student  successfully', 'You have been allocated to student id#119  success fully', 204, '2020-04-29 00:11:54', 0),
(238, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#204  success fully', 119, '2020-04-29 00:11:54', 0),
(239, 'You have been allocated to a student  successfully', 'You have been allocated to student id#120  success fully', 204, '2020-04-29 00:11:54', 0),
(240, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#204  success fully', 120, '2020-04-29 00:11:54', 0),
(241, 'You have been allocated to a student  successfully', 'You have been allocated to student id#121  success fully', 204, '2020-04-29 00:11:54', 0),
(242, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#204  success fully', 121, '2020-04-29 00:11:54', 0),
(243, 'You have been allocated to a student  successfully', 'You have been allocated to student id#122  success fully', 204, '2020-04-29 00:11:54', 0),
(244, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#204  success fully', 122, '2020-04-29 00:11:54', 0),
(245, 'You have been allocated to a student  successfully', 'You have been allocated to student id#123  success fully', 204, '2020-04-29 00:11:54', 0),
(246, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#204  success fully', 123, '2020-04-29 00:11:54', 0),
(247, 'You have been allocated to a student  successfully', 'You have been allocated to student id#124  success fully', 204, '2020-04-29 00:11:54', 0),
(248, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#204  success fully', 124, '2020-04-29 00:11:54', 0),
(249, 'You have been allocated to a student  successfully', 'You have been allocated to student id#125  success fully', 204, '2020-04-29 00:11:54', 0),
(250, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#204  success fully', 125, '2020-04-29 00:11:54', 0),
(251, 'You have been allocated to a student  successfully', 'You have been allocated to student id#126  success fully', 204, '2020-04-29 00:11:54', 0),
(252, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#204  success fully', 126, '2020-04-29 00:11:54', 0),
(253, 'You have been allocated to a student  successfully', 'You have been allocated to student id#127  success fully', 204, '2020-04-29 00:11:54', 0),
(254, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#204  success fully', 127, '2020-04-29 00:11:54', 0),
(255, 'You have been allocated to a student  successfully', 'You have been allocated to student id#128  success fully', 204, '2020-04-29 00:11:54', 0),
(256, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#204  success fully', 128, '2020-04-29 00:11:54', 0),
(257, 'You have been allocated to a student  successfully', 'You have been allocated to student id#129  success fully', 204, '2020-04-29 00:11:54', 0),
(258, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#204  success fully', 129, '2020-04-29 00:11:54', 0),
(259, 'You have been allocated to a student  successfully', 'You have been allocated to student id#130  success fully', 204, '2020-04-29 00:11:54', 0),
(260, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#204  success fully', 130, '2020-04-29 00:11:54', 0),
(261, 'You have been allocated to a student  successfully', 'You have been allocated to student id#131  success fully', 207, '2020-04-29 00:12:34', 0),
(262, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 131, '2020-04-29 00:12:34', 0),
(263, 'You have been allocated to a student  successfully', 'You have been allocated to student id#132  success fully', 207, '2020-04-29 00:12:35', 0),
(264, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 132, '2020-04-29 00:12:35', 0),
(265, 'You have been allocated to a student  successfully', 'You have been allocated to student id#133  success fully', 207, '2020-04-29 00:12:35', 0),
(266, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 133, '2020-04-29 00:12:35', 0),
(267, 'You have been allocated to a student  successfully', 'You have been allocated to student id#134  success fully', 207, '2020-04-29 00:12:35', 0),
(268, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 134, '2020-04-29 00:12:35', 0),
(269, 'You have been allocated to a student  successfully', 'You have been allocated to student id#135  success fully', 207, '2020-04-29 00:12:35', 0),
(270, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 135, '2020-04-29 00:12:35', 0),
(271, 'You have been allocated to a student  successfully', 'You have been allocated to student id#136  success fully', 207, '2020-04-29 00:12:35', 0),
(272, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 136, '2020-04-29 00:12:35', 0),
(273, 'You have been allocated to a student  successfully', 'You have been allocated to student id#137  success fully', 207, '2020-04-29 00:12:35', 0),
(274, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 137, '2020-04-29 00:12:35', 0),
(275, 'You have been allocated to a student  successfully', 'You have been allocated to student id#138  success fully', 207, '2020-04-29 00:12:35', 0),
(276, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 138, '2020-04-29 00:12:35', 0),
(277, 'You have been allocated to a student  successfully', 'You have been allocated to student id#139  success fully', 207, '2020-04-29 00:12:35', 0),
(278, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 139, '2020-04-29 00:12:35', 0),
(279, 'You have been allocated to a student  successfully', 'You have been allocated to student id#140  success fully', 207, '2020-04-29 00:12:35', 0),
(280, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 140, '2020-04-29 00:12:35', 0),
(281, 'You have been allocated to a student  successfully', 'You have been allocated to student id#141  success fully', 207, '2020-04-29 00:12:35', 0),
(282, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 141, '2020-04-29 00:12:35', 0),
(283, 'You have been allocated to a student  successfully', 'You have been allocated to student id#142  success fully', 207, '2020-04-29 00:12:35', 0),
(284, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 142, '2020-04-29 00:12:35', 0),
(285, 'You have been allocated to a student  successfully', 'You have been allocated to student id#143  success fully', 207, '2020-04-29 00:12:35', 0),
(286, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 143, '2020-04-29 00:12:35', 0),
(287, 'You have been allocated to a student  successfully', 'You have been allocated to student id#144  success fully', 207, '2020-04-29 00:12:35', 0),
(288, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 144, '2020-04-29 00:12:35', 0),
(289, 'You have been allocated to a student  successfully', 'You have been allocated to student id#145  success fully', 207, '2020-04-29 00:12:35', 0),
(290, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 145, '2020-04-29 00:12:35', 0),
(291, 'You have been allocated to a student  successfully', 'You have been allocated to student id#146  success fully', 207, '2020-04-29 00:12:35', 0),
(292, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 146, '2020-04-29 00:12:35', 0),
(293, 'You have been allocated to a student  successfully', 'You have been allocated to student id#147  success fully', 207, '2020-04-29 00:12:35', 0),
(294, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 147, '2020-04-29 00:12:35', 0),
(295, 'You have been allocated to a student  successfully', 'You have been allocated to student id#148  success fully', 207, '2020-04-29 00:12:35', 0),
(296, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 148, '2020-04-29 00:12:35', 0),
(297, 'You have been allocated to a student  successfully', 'You have been allocated to student id#149  success fully', 207, '2020-04-29 00:12:35', 0),
(298, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 149, '2020-04-29 00:12:35', 0),
(299, 'You have been allocated to a student  successfully', 'You have been allocated to student id#150  success fully', 207, '2020-04-29 00:12:35', 0),
(300, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 150, '2020-04-29 00:12:35', 0),
(301, 'You have been allocated to a student  successfully', 'You have been allocated to student id#151  success fully', 207, '2020-04-29 00:12:35', 0),
(302, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 151, '2020-04-29 00:12:35', 0),
(303, 'You have been allocated to a student  successfully', 'You have been allocated to student id#152  success fully', 207, '2020-04-29 00:12:35', 0),
(304, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 152, '2020-04-29 00:12:35', 0),
(305, 'You have been allocated to a student  successfully', 'You have been allocated to student id#153  success fully', 207, '2020-04-29 00:12:35', 0),
(306, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 153, '2020-04-29 00:12:35', 0),
(307, 'You have been allocated to a student  successfully', 'You have been allocated to student id#154  success fully', 207, '2020-04-29 00:12:35', 0),
(308, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 154, '2020-04-29 00:12:35', 0),
(309, 'You have been allocated to a student  successfully', 'You have been allocated to student id#155  success fully', 207, '2020-04-29 00:12:35', 0),
(310, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 155, '2020-04-29 00:12:35', 0),
(311, 'You have been allocated to a student  successfully', 'You have been allocated to student id#156  success fully', 207, '2020-04-29 00:12:53', 0),
(312, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 156, '2020-04-29 00:12:53', 0),
(313, 'You have been allocated to a student  successfully', 'You have been allocated to student id#157  success fully', 207, '2020-04-29 00:12:53', 0),
(314, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 157, '2020-04-29 00:12:53', 0),
(315, 'You have been allocated to a student  successfully', 'You have been allocated to student id#158  success fully', 207, '2020-04-29 00:12:53', 0),
(316, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 158, '2020-04-29 00:12:53', 0),
(317, 'You have been allocated to a student  successfully', 'You have been allocated to student id#159  success fully', 207, '2020-04-29 00:12:53', 0),
(318, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 159, '2020-04-29 00:12:53', 0),
(319, 'You have been allocated to a student  successfully', 'You have been allocated to student id#160  success fully', 207, '2020-04-29 00:12:53', 0),
(320, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 160, '2020-04-29 00:12:53', 0),
(321, 'You have been allocated to a student  successfully', 'You have been allocated to student id#161  success fully', 207, '2020-04-29 00:12:53', 0),
(322, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 161, '2020-04-29 00:12:53', 0),
(323, 'You have been allocated to a student  successfully', 'You have been allocated to student id#162  success fully', 207, '2020-04-29 00:12:53', 0),
(324, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 162, '2020-04-29 00:12:53', 0),
(325, 'You have been allocated to a student  successfully', 'You have been allocated to student id#163  success fully', 207, '2020-04-29 00:12:53', 0),
(326, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 163, '2020-04-29 00:12:53', 0),
(327, 'You have been allocated to a student  successfully', 'You have been allocated to student id#164  success fully', 207, '2020-04-29 00:12:53', 0),
(328, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 164, '2020-04-29 00:12:53', 0),
(329, 'You have been allocated to a student  successfully', 'You have been allocated to student id#165  success fully', 207, '2020-04-29 00:12:53', 0),
(330, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 165, '2020-04-29 00:12:53', 0),
(331, 'You have been allocated to a student  successfully', 'You have been allocated to student id#166  success fully', 207, '2020-04-29 00:12:53', 0),
(332, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 166, '2020-04-29 00:12:53', 0),
(333, 'You have been allocated to a student  successfully', 'You have been allocated to student id#167  success fully', 207, '2020-04-29 00:12:53', 0),
(334, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 167, '2020-04-29 00:12:53', 0),
(335, 'You have been allocated to a student  successfully', 'You have been allocated to student id#168  success fully', 207, '2020-04-29 00:12:53', 0),
(336, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 168, '2020-04-29 00:12:53', 0),
(337, 'You have been allocated to a student  successfully', 'You have been allocated to student id#169  success fully', 207, '2020-04-29 00:12:53', 0),
(338, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 169, '2020-04-29 00:12:53', 0),
(339, 'You have been allocated to a student  successfully', 'You have been allocated to student id#170  success fully', 207, '2020-04-29 00:12:53', 0);
INSERT INTO `email` (`id`, `title`, `content`, `to_user`, `created_at`, `status`) VALUES
(340, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 170, '2020-04-29 00:12:53', 0),
(341, 'You have been allocated to a student  successfully', 'You have been allocated to student id#171  success fully', 207, '2020-04-29 00:12:53', 0),
(342, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 171, '2020-04-29 00:12:53', 0),
(343, 'You have been allocated to a student  successfully', 'You have been allocated to student id#172  success fully', 207, '2020-04-29 00:12:53', 0),
(344, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 172, '2020-04-29 00:12:53', 0),
(345, 'You have been allocated to a student  successfully', 'You have been allocated to student id#173  success fully', 207, '2020-04-29 00:12:53', 0),
(346, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 173, '2020-04-29 00:12:53', 0),
(347, 'You have been allocated to a student  successfully', 'You have been allocated to student id#174  success fully', 207, '2020-04-29 00:12:53', 0),
(348, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 174, '2020-04-29 00:12:53', 0),
(349, 'You have been allocated to a student  successfully', 'You have been allocated to student id#175  success fully', 207, '2020-04-29 00:12:53', 0),
(350, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 175, '2020-04-29 00:12:53', 0),
(351, 'You have been allocated to a student  successfully', 'You have been allocated to student id#176  success fully', 207, '2020-04-29 00:12:53', 0),
(352, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 176, '2020-04-29 00:12:53', 0),
(353, 'You have been allocated to a student  successfully', 'You have been allocated to student id#177  success fully', 207, '2020-04-29 00:12:53', 0),
(354, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 177, '2020-04-29 00:12:53', 0),
(355, 'You have been allocated to a student  successfully', 'You have been allocated to student id#178  success fully', 207, '2020-04-29 00:12:53', 0),
(356, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 178, '2020-04-29 00:12:54', 0),
(357, 'You have been allocated to a student  successfully', 'You have been allocated to student id#179  success fully', 207, '2020-04-29 00:12:54', 0),
(358, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 179, '2020-04-29 00:12:54', 0),
(359, 'You have been allocated to a student  successfully', 'You have been allocated to student id#180  success fully', 207, '2020-04-29 00:12:54', 0),
(360, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 180, '2020-04-29 00:12:54', 0),
(361, 'You have been allocated to a student  successfully', 'You have been allocated to student id#181  success fully', 207, '2020-04-29 00:13:26', 0),
(362, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 181, '2020-04-29 00:13:26', 0),
(363, 'You have been allocated to a student  successfully', 'You have been allocated to student id#182  success fully', 207, '2020-04-29 00:13:26', 0),
(364, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 182, '2020-04-29 00:13:26', 0),
(365, 'You have been allocated to a student  successfully', 'You have been allocated to student id#183  success fully', 207, '2020-04-29 00:13:26', 0),
(366, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 183, '2020-04-29 00:13:26', 0),
(367, 'You have been allocated to a student  successfully', 'You have been allocated to student id#184  success fully', 207, '2020-04-29 00:13:26', 0),
(368, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 184, '2020-04-29 00:13:26', 0),
(369, 'You have been allocated to a student  successfully', 'You have been allocated to student id#185  success fully', 207, '2020-04-29 00:13:26', 0),
(370, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 185, '2020-04-29 00:13:26', 0),
(371, 'You have been allocated to a student  successfully', 'You have been allocated to student id#186  success fully', 207, '2020-04-29 00:13:26', 0),
(372, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 186, '2020-04-29 00:13:26', 0),
(373, 'You have been allocated to a student  successfully', 'You have been allocated to student id#187  success fully', 207, '2020-04-29 00:13:26', 0),
(374, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 187, '2020-04-29 00:13:26', 0),
(375, 'You have been allocated to a student  successfully', 'You have been allocated to student id#188  success fully', 207, '2020-04-29 00:13:26', 0),
(376, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 188, '2020-04-29 00:13:26', 0),
(377, 'You have been allocated to a student  successfully', 'You have been allocated to student id#189  success fully', 207, '2020-04-29 00:13:26', 0),
(378, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 189, '2020-04-29 00:13:26', 0),
(379, 'You have been allocated to a student  successfully', 'You have been allocated to student id#190  success fully', 207, '2020-04-29 00:13:26', 0),
(380, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 190, '2020-04-29 00:13:26', 0),
(381, 'You have been allocated to a student  successfully', 'You have been allocated to student id#191  success fully', 207, '2020-04-29 00:13:26', 0),
(382, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 191, '2020-04-29 00:13:26', 0),
(383, 'You have been allocated to a student  successfully', 'You have been allocated to student id#192  success fully', 207, '2020-04-29 00:13:26', 0),
(384, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 192, '2020-04-29 00:13:26', 0),
(385, 'You have been allocated to a student  successfully', 'You have been allocated to student id#193  success fully', 207, '2020-04-29 00:13:26', 0),
(386, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 193, '2020-04-29 00:13:26', 0),
(387, 'You have been allocated to a student  successfully', 'You have been allocated to student id#194  success fully', 207, '2020-04-29 00:13:26', 0),
(388, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 194, '2020-04-29 00:13:26', 0),
(389, 'You have been allocated to a student  successfully', 'You have been allocated to student id#195  success fully', 207, '2020-04-29 00:13:26', 0),
(390, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 195, '2020-04-29 00:13:26', 0),
(391, 'You have been allocated to a student  successfully', 'You have been allocated to student id#196  success fully', 207, '2020-04-29 00:13:26', 0),
(392, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 196, '2020-04-29 00:13:26', 0),
(393, 'You have been allocated to a student  successfully', 'You have been allocated to student id#197  success fully', 207, '2020-04-29 00:13:26', 0),
(394, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 197, '2020-04-29 00:13:26', 0),
(395, 'You have been allocated to a student  successfully', 'You have been allocated to student id#198  success fully', 207, '2020-04-29 00:13:26', 0),
(396, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 198, '2020-04-29 00:13:26', 0),
(397, 'You have been allocated to a student  successfully', 'You have been allocated to student id#199  success fully', 207, '2020-04-29 00:13:26', 0),
(398, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 199, '2020-04-29 00:13:26', 0),
(399, 'You have been allocated to a student  successfully', 'You have been allocated to student id#200  success fully', 207, '2020-04-29 00:13:26', 0),
(400, 'You have been allocated to a tutor  successfully', 'You have been allocated to tutor id#207  success fully', 200, '2020-04-29 00:13:26', 0),
(401, 'You have new request', 'Student id#2  send you a request', 201, '2020-04-29 01:00:37', 0),
(402, 'You have new request', 'Student id#56  send you a request', 203, '2020-04-29 02:42:13', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `meeting`
--

CREATE TABLE `meeting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `tutor_id` bigint(20) UNSIGNED DEFAULT NULL,
  `student_id` bigint(20) UNSIGNED DEFAULT NULL,
  `document_id` bigint(20) UNSIGNED DEFAULT NULL,
  `place` varchar(50) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `link` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `start_at` datetime DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `status` varchar(30) COLLATE utf8_vietnamese_ci DEFAULT 'not start'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `meeting`
--

INSERT INTO `meeting` (`id`, `name`, `tutor_id`, `student_id`, `document_id`, `place`, `link`, `start_at`, `created_by`, `created_at`, `status`) VALUES
(1, 'Ha noi', 203, 56, NULL, NULL, NULL, '2020-04-29 03:03:07', NULL, NULL, 'not start'),
(2, 'Ha nam', 203, 56, NULL, NULL, NULL, NULL, NULL, NULL, 'not start'),
(3, 'đâsd', 203, 56, NULL, NULL, NULL, '2020-04-30 00:02:00', NULL, NULL, 'not start'),
(4, 'đâsd', 203, 56, NULL, NULL, NULL, '2020-04-30 02:05:00', NULL, NULL, 'not start'),
(5, 'dá', 203, 56, NULL, 'đâs', NULL, '2020-04-28 20:07:10', NULL, NULL, 'not start'),
(6, 'Ha noi', 203, 56, NULL, 'ci ty', NULL, '2020-04-30 15:30:00', NULL, NULL, 'not start'),
(7, 'dasdasd', 203, 56, NULL, 'dasdasdas', NULL, '2020-04-28 00:12:00', NULL, NULL, 'not start'),
(8, 'ddasdsa', 203, 56, NULL, 'dasdasdas', NULL, '2020-04-30 00:12:00', NULL, NULL, 'not start'),
(9, 'das', 203, 56, NULL, 'dasd', NULL, '2020-05-01 00:30:00', NULL, NULL, 'not start');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `message`
--

CREATE TABLE `message` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from_user` bigint(20) UNSIGNED DEFAULT NULL,
  `to_user` bigint(20) UNSIGNED DEFAULT NULL,
  `chat_message` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `status_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `message`
--

INSERT INTO `message` (`id`, `from_user`, `to_user`, `chat_message`, `created_at`, `status_id`) VALUES
(1, 213, 201, 'hello', '2020-04-29 00:03:47', 4),
(2, 213, 201, 'dasd', '2020-04-29 00:03:48', 4),
(3, 213, 201, ':D', '2020-04-29 00:03:49', 4),
(4, 213, 201, 'dasd', '2020-04-29 00:03:50', 4),
(5, 213, 201, 'das', '2020-04-29 00:03:51', 4),
(6, 213, 201, 'sad', '2020-04-29 00:09:22', 4),
(7, 213, 201, 'das', '2020-04-29 00:09:23', 4),
(8, 213, 201, 'das', '2020-04-29 00:09:24', 4),
(9, 213, 201, 'das', '2020-04-29 00:09:25', 4),
(10, 213, 201, 'das', '2020-04-29 00:09:26', 4),
(11, 213, 201, 'hello', '2020-04-29 00:09:30', 4),
(12, 213, 201, 'nice to meet you', '2020-04-29 00:09:35', 4),
(13, 2, 201, 'hello', '2020-04-29 00:14:17', 4),
(14, 2, 201, 'dsa', '2020-04-29 00:15:27', 4),
(15, 2, 201, 'das', '2020-04-29 00:15:28', 4),
(16, 2, 201, 'das', '2020-04-29 00:15:29', 4),
(17, 2, 201, 'd', '2020-04-29 00:15:30', 4),
(18, 2, 201, 'dsa', '2020-04-29 00:15:37', 4),
(19, 2, 201, 'dsa', '2020-04-29 00:15:38', 4),
(20, 202, 4, 'dsad', '2020-04-29 01:40:32', 4),
(21, 202, 4, 'dasd', '2020-04-29 01:40:34', 4),
(22, 202, 4, 'das', '2020-04-29 01:40:35', 4),
(23, 202, 4, 'dasd', '2020-04-29 01:40:36', 4),
(24, 202, 4, 'asd', '2020-04-29 01:40:37', 4),
(25, 202, 4, 'asdas', '2020-04-29 01:40:38', 4),
(26, 202, 4, 'dasd', '2020-04-29 01:40:39', 4),
(27, 202, 4, 'ad', '2020-04-29 01:40:40', 4),
(28, 202, 4, 'asdas', '2020-04-29 01:40:42', 4),
(29, 202, 4, ':D', '2020-04-29 01:41:01', 4),
(30, 202, 4, ':D', '2020-04-29 01:41:03', 4),
(31, 202, 4, ':D', '2020-04-29 01:42:10', 4),
(32, 202, 4, 'asda', '2020-04-29 01:42:11', 4),
(33, 203, 56, 'dasd', '2020-04-29 06:24:19', 4),
(34, 203, 56, 'asda', '2020-04-29 06:24:20', 4),
(35, 203, 56, 'sdas', '2020-04-29 06:24:20', 4),
(36, 203, 56, 'd', '2020-04-29 06:24:21', 4),
(37, 203, 56, 'asd', '2020-04-29 06:24:21', 4),
(38, 203, 56, 'as', '2020-04-29 06:24:22', 4),
(39, 203, 56, 'das', '2020-04-29 06:24:23', 4),
(40, 203, 56, 'd', '2020-04-29 06:24:23', 4),
(41, 203, 56, 'asd', '2020-04-29 06:24:24', 4),
(42, 203, 56, 'asd', '2020-04-29 06:24:25', 4),
(43, 203, 56, 'as', '2020-04-29 06:24:25', 4),
(44, 203, 56, 'das', '2020-04-29 06:24:26', 4),
(45, 203, 56, 'd', '2020-04-29 06:24:26', 4),
(46, 203, 56, 'asd', '2020-04-29 06:24:27', 4),
(47, 203, 56, 'as', '2020-04-29 06:24:28', 4),
(48, 203, 56, 'das', '2020-04-29 06:24:28', 4),
(49, 203, 56, 'd', '2020-04-29 06:24:29', 4),
(50, 203, 56, 'asd', '2020-04-29 06:24:30', 4),
(51, 203, 56, 'asd', '2020-04-29 06:24:30', 4),
(52, 203, 56, 'as', '2020-04-29 06:24:31', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `request`
--

CREATE TABLE `request` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `from_user` bigint(20) UNSIGNED DEFAULT NULL,
  `to_user` bigint(20) UNSIGNED DEFAULT NULL,
  `response` text DEFAULT NULL,
  `status` varchar(50) DEFAULT 'no response',
  `created_at` datetime DEFAULT current_timestamp(),
  `replied_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `request`
--

INSERT INTO `request` (`id`, `name`, `content`, `from_user`, `to_user`, `response`, `status`, `created_at`, `replied_at`) VALUES
(1, 'hello', '<h1><u>Heading Of Request 2</u></h1>\n                      <h4>Subheading&nbsp;</h4>\n                      <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain\n                        was born and I will give you a complete account of the system, and expound the actual teachings\n                        of the great explorer of the truth, the master-builder of human happiness. No one rejects,\n                        dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know\n                        how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again\n                        is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain,\n                        but because occasionally circumstances occur in which toil and pain can procure him some great\n                        pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise,\n                        except to obtain some advantage from it? But who has any right to find fault with a man who\n                        chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that\n                        produces no resultant pleasure? On the other hand, we denounce with righteous indignation and\n                        dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so\n                        blinded by desire, that they cannot foresee</p>\n                      <ul>\n                        <li>List item one</li>\n                        <li>List item two</li>\n                        <li>List item three</li>\n                        <li>List item four</li>\n                      </ul>\n                      <p>Thank you,</p>\n                      <p>John Doe</p>', 2, 201, 'hello :D', 'replied', '2020-04-29 01:00:37', '2020-04-29 01:01:47'),
(2, 'dasdas', '<h1><br></h1>', 56, 203, NULL, 'no response', '2020-04-29 02:42:13', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`) VALUES
(1, 'Authorized staff', 'Authorized staff'),
(2, 'staff', 'staff'),
(3, 'tutor', 'tutor'),
(4, 'student', 'student');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `status`
--

CREATE TABLE `status` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `status`
--

INSERT INTO `status` (`id`, `name`, `description`) VALUES
(1, 'dat', 'dsadasd'),
(2, 'deleted', 'deleted'),
(3, 'seen', 'seen'),
(4, 'not seen', 'not seen'),
(5, 'marked', 'marked');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tutor_registrations`
--

CREATE TABLE `tutor_registrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tutor_id` bigint(20) UNSIGNED DEFAULT NULL,
  `student_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tutor_registrations`
--

INSERT INTO `tutor_registrations` (`id`, `tutor_id`, `student_id`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 201, 1, 213, '2020-04-28 17:10:08', NULL, '2020-04-28 17:10:08'),
(2, 201, 2, 213, '2020-04-28 17:10:08', NULL, '2020-04-28 17:10:08'),
(3, 201, 3, 213, '2020-04-28 17:10:08', NULL, '2020-04-28 17:10:08'),
(4, 201, 17, 213, '2020-04-28 17:10:15', NULL, '2020-04-28 17:10:15'),
(5, 201, 18, 213, '2020-04-28 17:10:15', NULL, '2020-04-28 17:10:15'),
(6, 202, 4, 213, '2020-04-28 17:10:37', NULL, '2020-04-28 17:10:37'),
(7, 202, 5, 213, '2020-04-28 17:10:37', NULL, '2020-04-28 17:10:37'),
(8, 202, 6, 213, '2020-04-28 17:10:37', NULL, '2020-04-28 17:10:37'),
(9, 202, 7, 213, '2020-04-28 17:10:37', NULL, '2020-04-28 17:10:37'),
(10, 202, 8, 213, '2020-04-28 17:10:37', NULL, '2020-04-28 17:10:37'),
(11, 202, 9, 213, '2020-04-28 17:10:37', NULL, '2020-04-28 17:10:37'),
(12, 202, 10, 213, '2020-04-28 17:10:37', NULL, '2020-04-28 17:10:37'),
(13, 202, 11, 213, '2020-04-28 17:10:37', NULL, '2020-04-28 17:10:37'),
(14, 202, 12, 213, '2020-04-28 17:10:37', NULL, '2020-04-28 17:10:37'),
(15, 202, 13, 213, '2020-04-28 17:10:37', NULL, '2020-04-28 17:10:37'),
(16, 202, 14, 213, '2020-04-28 17:10:37', NULL, '2020-04-28 17:10:37'),
(17, 202, 15, 213, '2020-04-28 17:10:37', NULL, '2020-04-28 17:10:37'),
(18, 202, 16, 213, '2020-04-28 17:10:37', NULL, '2020-04-28 17:10:37'),
(19, 202, 19, 213, '2020-04-28 17:10:37', NULL, '2020-04-28 17:10:37'),
(20, 202, 20, 213, '2020-04-28 17:10:37', NULL, '2020-04-28 17:10:37'),
(21, 202, 21, 213, '2020-04-28 17:10:37', NULL, '2020-04-28 17:10:37'),
(22, 202, 22, 213, '2020-04-28 17:10:37', NULL, '2020-04-28 17:10:37'),
(23, 202, 23, 213, '2020-04-28 17:10:37', NULL, '2020-04-28 17:10:37'),
(24, 202, 24, 213, '2020-04-28 17:10:37', NULL, '2020-04-28 17:10:37'),
(25, 202, 25, 213, '2020-04-28 17:10:37', NULL, '2020-04-28 17:10:37'),
(26, 202, 26, 213, '2020-04-28 17:10:37', NULL, '2020-04-28 17:10:37'),
(27, 202, 27, 213, '2020-04-28 17:10:37', NULL, '2020-04-28 17:10:37'),
(28, 202, 28, 213, '2020-04-28 17:10:37', NULL, '2020-04-28 17:10:37'),
(29, 202, 29, 213, '2020-04-28 17:10:37', NULL, '2020-04-28 17:10:37'),
(30, 202, 30, 213, '2020-04-28 17:10:37', NULL, '2020-04-28 17:10:37'),
(31, 202, 31, 213, '2020-04-28 17:10:47', NULL, '2020-04-28 17:10:47'),
(32, 202, 32, 213, '2020-04-28 17:10:47', NULL, '2020-04-28 17:10:47'),
(33, 202, 33, 213, '2020-04-28 17:10:47', NULL, '2020-04-28 17:10:47'),
(34, 202, 34, 213, '2020-04-28 17:10:47', NULL, '2020-04-28 17:10:47'),
(35, 202, 35, 213, '2020-04-28 17:10:47', NULL, '2020-04-28 17:10:47'),
(36, 202, 36, 213, '2020-04-28 17:10:47', NULL, '2020-04-28 17:10:47'),
(37, 202, 37, 213, '2020-04-28 17:10:47', NULL, '2020-04-28 17:10:47'),
(38, 202, 38, 213, '2020-04-28 17:10:47', NULL, '2020-04-28 17:10:47'),
(39, 202, 39, 213, '2020-04-28 17:10:47', NULL, '2020-04-28 17:10:47'),
(40, 202, 40, 213, '2020-04-28 17:10:47', NULL, '2020-04-28 17:10:47'),
(41, 202, 41, 213, '2020-04-28 17:10:47', NULL, '2020-04-28 17:10:47'),
(42, 202, 42, 213, '2020-04-28 17:10:47', NULL, '2020-04-28 17:10:47'),
(43, 202, 43, 213, '2020-04-28 17:10:47', NULL, '2020-04-28 17:10:47'),
(44, 202, 44, 213, '2020-04-28 17:10:47', NULL, '2020-04-28 17:10:47'),
(45, 202, 45, 213, '2020-04-28 17:10:47', NULL, '2020-04-28 17:10:47'),
(46, 202, 46, 213, '2020-04-28 17:10:47', NULL, '2020-04-28 17:10:47'),
(47, 202, 47, 213, '2020-04-28 17:10:47', NULL, '2020-04-28 17:10:47'),
(48, 202, 48, 213, '2020-04-28 17:10:47', NULL, '2020-04-28 17:10:47'),
(49, 202, 49, 213, '2020-04-28 17:10:47', NULL, '2020-04-28 17:10:47'),
(50, 202, 50, 213, '2020-04-28 17:10:47', NULL, '2020-04-28 17:10:47'),
(51, 202, 51, 213, '2020-04-28 17:10:47', NULL, '2020-04-28 17:10:47'),
(52, 202, 52, 213, '2020-04-28 17:10:47', NULL, '2020-04-28 17:10:47'),
(53, 202, 53, 213, '2020-04-28 17:10:47', NULL, '2020-04-28 17:10:47'),
(54, 202, 54, 213, '2020-04-28 17:10:47', NULL, '2020-04-28 17:10:47'),
(55, 202, 55, 213, '2020-04-28 17:10:47', NULL, '2020-04-28 17:10:47'),
(56, 203, 56, 213, '2020-04-28 17:11:21', NULL, '2020-04-28 17:11:21'),
(57, 203, 57, 213, '2020-04-28 17:11:21', NULL, '2020-04-28 17:11:21'),
(58, 203, 58, 213, '2020-04-28 17:11:21', NULL, '2020-04-28 17:11:21'),
(59, 203, 59, 213, '2020-04-28 17:11:21', NULL, '2020-04-28 17:11:21'),
(60, 203, 60, 213, '2020-04-28 17:11:21', NULL, '2020-04-28 17:11:21'),
(61, 203, 61, 213, '2020-04-28 17:11:21', NULL, '2020-04-28 17:11:21'),
(62, 203, 62, 213, '2020-04-28 17:11:21', NULL, '2020-04-28 17:11:21'),
(63, 203, 63, 213, '2020-04-28 17:11:21', NULL, '2020-04-28 17:11:21'),
(64, 203, 64, 213, '2020-04-28 17:11:21', NULL, '2020-04-28 17:11:21'),
(65, 203, 65, 213, '2020-04-28 17:11:21', NULL, '2020-04-28 17:11:21'),
(66, 203, 66, 213, '2020-04-28 17:11:21', NULL, '2020-04-28 17:11:21'),
(67, 203, 67, 213, '2020-04-28 17:11:21', NULL, '2020-04-28 17:11:21'),
(68, 203, 68, 213, '2020-04-28 17:11:22', NULL, '2020-04-28 17:11:22'),
(69, 203, 69, 213, '2020-04-28 17:11:22', NULL, '2020-04-28 17:11:22'),
(70, 203, 70, 213, '2020-04-28 17:11:22', NULL, '2020-04-28 17:11:22'),
(71, 203, 71, 213, '2020-04-28 17:11:22', NULL, '2020-04-28 17:11:22'),
(72, 203, 72, 213, '2020-04-28 17:11:22', NULL, '2020-04-28 17:11:22'),
(73, 203, 73, 213, '2020-04-28 17:11:22', NULL, '2020-04-28 17:11:22'),
(74, 203, 74, 213, '2020-04-28 17:11:22', NULL, '2020-04-28 17:11:22'),
(75, 203, 75, 213, '2020-04-28 17:11:22', NULL, '2020-04-28 17:11:22'),
(76, 203, 76, 213, '2020-04-28 17:11:22', NULL, '2020-04-28 17:11:22'),
(77, 203, 77, 213, '2020-04-28 17:11:22', NULL, '2020-04-28 17:11:22'),
(78, 203, 78, 213, '2020-04-28 17:11:22', NULL, '2020-04-28 17:11:22'),
(79, 203, 79, 213, '2020-04-28 17:11:22', NULL, '2020-04-28 17:11:22'),
(80, 203, 80, 213, '2020-04-28 17:11:22', NULL, '2020-04-28 17:11:22'),
(81, 204, 81, 213, '2020-04-28 17:11:40', NULL, '2020-04-28 17:11:40'),
(82, 204, 82, 213, '2020-04-28 17:11:40', NULL, '2020-04-28 17:11:40'),
(83, 204, 83, 213, '2020-04-28 17:11:40', NULL, '2020-04-28 17:11:40'),
(84, 204, 84, 213, '2020-04-28 17:11:40', NULL, '2020-04-28 17:11:40'),
(85, 204, 85, 213, '2020-04-28 17:11:40', NULL, '2020-04-28 17:11:40'),
(86, 204, 86, 213, '2020-04-28 17:11:40', NULL, '2020-04-28 17:11:40'),
(87, 204, 87, 213, '2020-04-28 17:11:40', NULL, '2020-04-28 17:11:40'),
(88, 204, 88, 213, '2020-04-28 17:11:40', NULL, '2020-04-28 17:11:40'),
(89, 204, 89, 213, '2020-04-28 17:11:40', NULL, '2020-04-28 17:11:40'),
(90, 204, 90, 213, '2020-04-28 17:11:40', NULL, '2020-04-28 17:11:40'),
(91, 204, 91, 213, '2020-04-28 17:11:40', NULL, '2020-04-28 17:11:40'),
(92, 204, 92, 213, '2020-04-28 17:11:40', NULL, '2020-04-28 17:11:40'),
(93, 204, 93, 213, '2020-04-28 17:11:40', NULL, '2020-04-28 17:11:40'),
(94, 204, 94, 213, '2020-04-28 17:11:40', NULL, '2020-04-28 17:11:40'),
(95, 204, 95, 213, '2020-04-28 17:11:40', NULL, '2020-04-28 17:11:40'),
(96, 204, 96, 213, '2020-04-28 17:11:40', NULL, '2020-04-28 17:11:40'),
(97, 204, 97, 213, '2020-04-28 17:11:40', NULL, '2020-04-28 17:11:40'),
(98, 204, 98, 213, '2020-04-28 17:11:40', NULL, '2020-04-28 17:11:40'),
(99, 204, 99, 213, '2020-04-28 17:11:40', NULL, '2020-04-28 17:11:40'),
(100, 204, 100, 213, '2020-04-28 17:11:40', NULL, '2020-04-28 17:11:40'),
(101, 204, 101, 213, '2020-04-28 17:11:40', NULL, '2020-04-28 17:11:40'),
(102, 204, 102, 213, '2020-04-28 17:11:40', NULL, '2020-04-28 17:11:40'),
(103, 204, 103, 213, '2020-04-28 17:11:40', NULL, '2020-04-28 17:11:40'),
(104, 204, 104, 213, '2020-04-28 17:11:40', NULL, '2020-04-28 17:11:40'),
(105, 204, 105, 213, '2020-04-28 17:11:40', NULL, '2020-04-28 17:11:40'),
(106, 204, 106, 213, '2020-04-28 17:11:54', NULL, '2020-04-28 17:11:54'),
(107, 204, 107, 213, '2020-04-28 17:11:54', NULL, '2020-04-28 17:11:54'),
(108, 204, 108, 213, '2020-04-28 17:11:54', NULL, '2020-04-28 17:11:54'),
(109, 204, 109, 213, '2020-04-28 17:11:54', NULL, '2020-04-28 17:11:54'),
(110, 204, 110, 213, '2020-04-28 17:11:54', NULL, '2020-04-28 17:11:54'),
(111, 204, 111, 213, '2020-04-28 17:11:54', NULL, '2020-04-28 17:11:54'),
(112, 204, 112, 213, '2020-04-28 17:11:54', NULL, '2020-04-28 17:11:54'),
(113, 204, 113, 213, '2020-04-28 17:11:54', NULL, '2020-04-28 17:11:54'),
(114, 204, 114, 213, '2020-04-28 17:11:54', NULL, '2020-04-28 17:11:54'),
(115, 204, 115, 213, '2020-04-28 17:11:54', NULL, '2020-04-28 17:11:54'),
(116, 204, 116, 213, '2020-04-28 17:11:54', NULL, '2020-04-28 17:11:54'),
(117, 204, 117, 213, '2020-04-28 17:11:54', NULL, '2020-04-28 17:11:54'),
(118, 204, 118, 213, '2020-04-28 17:11:54', NULL, '2020-04-28 17:11:54'),
(119, 204, 119, 213, '2020-04-28 17:11:54', NULL, '2020-04-28 17:11:54'),
(120, 204, 120, 213, '2020-04-28 17:11:54', NULL, '2020-04-28 17:11:54'),
(121, 204, 121, 213, '2020-04-28 17:11:54', NULL, '2020-04-28 17:11:54'),
(122, 204, 122, 213, '2020-04-28 17:11:54', NULL, '2020-04-28 17:11:54'),
(123, 204, 123, 213, '2020-04-28 17:11:54', NULL, '2020-04-28 17:11:54'),
(124, 204, 124, 213, '2020-04-28 17:11:54', NULL, '2020-04-28 17:11:54'),
(125, 204, 125, 213, '2020-04-28 17:11:54', NULL, '2020-04-28 17:11:54'),
(126, 204, 126, 213, '2020-04-28 17:11:54', NULL, '2020-04-28 17:11:54'),
(127, 204, 127, 213, '2020-04-28 17:11:54', NULL, '2020-04-28 17:11:54'),
(128, 204, 128, 213, '2020-04-28 17:11:54', NULL, '2020-04-28 17:11:54'),
(129, 204, 129, 213, '2020-04-28 17:11:54', NULL, '2020-04-28 17:11:54'),
(130, 204, 130, 213, '2020-04-28 17:11:54', NULL, '2020-04-28 17:11:54'),
(131, 207, 131, 213, '2020-04-28 17:12:34', NULL, '2020-04-28 17:12:34'),
(132, 207, 132, 213, '2020-04-28 17:12:35', NULL, '2020-04-28 17:12:35'),
(133, 207, 133, 213, '2020-04-28 17:12:35', NULL, '2020-04-28 17:12:35'),
(134, 207, 134, 213, '2020-04-28 17:12:35', NULL, '2020-04-28 17:12:35'),
(135, 207, 135, 213, '2020-04-28 17:12:35', NULL, '2020-04-28 17:12:35'),
(136, 207, 136, 213, '2020-04-28 17:12:35', NULL, '2020-04-28 17:12:35'),
(137, 207, 137, 213, '2020-04-28 17:12:35', NULL, '2020-04-28 17:12:35'),
(138, 207, 138, 213, '2020-04-28 17:12:35', NULL, '2020-04-28 17:12:35'),
(139, 207, 139, 213, '2020-04-28 17:12:35', NULL, '2020-04-28 17:12:35'),
(140, 207, 140, 213, '2020-04-28 17:12:35', NULL, '2020-04-28 17:12:35'),
(141, 207, 141, 213, '2020-04-28 17:12:35', NULL, '2020-04-28 17:12:35'),
(142, 207, 142, 213, '2020-04-28 17:12:35', NULL, '2020-04-28 17:12:35'),
(143, 207, 143, 213, '2020-04-28 17:12:35', NULL, '2020-04-28 17:12:35'),
(144, 207, 144, 213, '2020-04-28 17:12:35', NULL, '2020-04-28 17:12:35'),
(145, 207, 145, 213, '2020-04-28 17:12:35', NULL, '2020-04-28 17:12:35'),
(146, 207, 146, 213, '2020-04-28 17:12:35', NULL, '2020-04-28 17:12:35'),
(147, 207, 147, 213, '2020-04-28 17:12:35', NULL, '2020-04-28 17:12:35'),
(148, 207, 148, 213, '2020-04-28 17:12:35', NULL, '2020-04-28 17:12:35'),
(149, 207, 149, 213, '2020-04-28 17:12:35', NULL, '2020-04-28 17:12:35'),
(150, 207, 150, 213, '2020-04-28 17:12:35', NULL, '2020-04-28 17:12:35'),
(151, 207, 151, 213, '2020-04-28 17:12:35', NULL, '2020-04-28 17:12:35'),
(152, 207, 152, 213, '2020-04-28 17:12:35', NULL, '2020-04-28 17:12:35'),
(153, 207, 153, 213, '2020-04-28 17:12:35', NULL, '2020-04-28 17:12:35'),
(154, 207, 154, 213, '2020-04-28 17:12:35', NULL, '2020-04-28 17:12:35'),
(155, 207, 155, 213, '2020-04-28 17:12:35', NULL, '2020-04-28 17:12:35'),
(156, 207, 156, 213, '2020-04-28 17:12:53', NULL, '2020-04-28 17:12:53'),
(157, 207, 157, 213, '2020-04-28 17:12:53', NULL, '2020-04-28 17:12:53'),
(158, 207, 158, 213, '2020-04-28 17:12:53', NULL, '2020-04-28 17:12:53'),
(159, 207, 159, 213, '2020-04-28 17:12:53', NULL, '2020-04-28 17:12:53'),
(160, 207, 160, 213, '2020-04-28 17:12:53', NULL, '2020-04-28 17:12:53'),
(161, 207, 161, 213, '2020-04-28 17:12:53', NULL, '2020-04-28 17:12:53'),
(162, 207, 162, 213, '2020-04-28 17:12:53', NULL, '2020-04-28 17:12:53'),
(163, 207, 163, 213, '2020-04-28 17:12:53', NULL, '2020-04-28 17:12:53'),
(164, 207, 164, 213, '2020-04-28 17:12:53', NULL, '2020-04-28 17:12:53'),
(165, 207, 165, 213, '2020-04-28 17:12:53', NULL, '2020-04-28 17:12:53'),
(166, 207, 166, 213, '2020-04-28 17:12:53', NULL, '2020-04-28 17:12:53'),
(167, 207, 167, 213, '2020-04-28 17:12:53', NULL, '2020-04-28 17:12:53'),
(168, 207, 168, 213, '2020-04-28 17:12:53', NULL, '2020-04-28 17:12:53'),
(169, 207, 169, 213, '2020-04-28 17:12:53', NULL, '2020-04-28 17:12:53'),
(170, 207, 170, 213, '2020-04-28 17:12:53', NULL, '2020-04-28 17:12:53'),
(171, 207, 171, 213, '2020-04-28 17:12:53', NULL, '2020-04-28 17:12:53'),
(172, 207, 172, 213, '2020-04-28 17:12:53', NULL, '2020-04-28 17:12:53'),
(173, 207, 173, 213, '2020-04-28 17:12:53', NULL, '2020-04-28 17:12:53'),
(174, 207, 174, 213, '2020-04-28 17:12:53', NULL, '2020-04-28 17:12:53'),
(175, 207, 175, 213, '2020-04-28 17:12:53', NULL, '2020-04-28 17:12:53'),
(176, 207, 176, 213, '2020-04-28 17:12:53', NULL, '2020-04-28 17:12:53'),
(177, 207, 177, 213, '2020-04-28 17:12:53', NULL, '2020-04-28 17:12:53'),
(178, 207, 178, 213, '2020-04-28 17:12:53', NULL, '2020-04-28 17:12:53'),
(179, 207, 179, 213, '2020-04-28 17:12:54', NULL, '2020-04-28 17:12:54'),
(180, 207, 180, 213, '2020-04-28 17:12:54', NULL, '2020-04-28 17:12:54'),
(181, 207, 181, 213, '2020-04-28 17:13:26', NULL, '2020-04-28 17:13:26'),
(182, 207, 182, 213, '2020-04-28 17:13:26', NULL, '2020-04-28 17:13:26'),
(183, 207, 183, 213, '2020-04-28 17:13:26', NULL, '2020-04-28 17:13:26'),
(184, 207, 184, 213, '2020-04-28 17:13:26', NULL, '2020-04-28 17:13:26'),
(185, 207, 185, 213, '2020-04-28 17:13:26', NULL, '2020-04-28 17:13:26'),
(186, 207, 186, 213, '2020-04-28 17:13:26', NULL, '2020-04-28 17:13:26'),
(187, 207, 187, 213, '2020-04-28 17:13:26', NULL, '2020-04-28 17:13:26'),
(188, 207, 188, 213, '2020-04-28 17:13:26', NULL, '2020-04-28 17:13:26'),
(189, 207, 189, 213, '2020-04-28 17:13:26', NULL, '2020-04-28 17:13:26'),
(190, 207, 190, 213, '2020-04-28 17:13:26', NULL, '2020-04-28 17:13:26'),
(191, 207, 191, 213, '2020-04-28 17:13:26', NULL, '2020-04-28 17:13:26'),
(192, 207, 192, 213, '2020-04-28 17:13:26', NULL, '2020-04-28 17:13:26'),
(193, 207, 193, 213, '2020-04-28 17:13:26', NULL, '2020-04-28 17:13:26'),
(194, 207, 194, 213, '2020-04-28 17:13:26', NULL, '2020-04-28 17:13:26'),
(195, 207, 195, 213, '2020-04-28 17:13:26', NULL, '2020-04-28 17:13:26'),
(196, 207, 196, 213, '2020-04-28 17:13:26', NULL, '2020-04-28 17:13:26'),
(197, 207, 197, 213, '2020-04-28 17:13:26', NULL, '2020-04-28 17:13:26'),
(198, 207, 198, 213, '2020-04-28 17:13:26', NULL, '2020-04-28 17:13:26'),
(199, 207, 199, 213, '2020-04-28 17:13:26', NULL, '2020-04-28 17:13:26'),
(200, 207, 200, 213, '2020-04-28 17:13:26', NULL, '2020-04-28 17:13:26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` int(11) DEFAULT NULL,
  `dob` datetime DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_id` int(11) DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL DEFAULT 4
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `gender`, `dob`, `email`, `image`, `created_at`, `password`, `status_id`, `role_id`) VALUES
(1, 'alexander tutee  0', NULL, NULL, 'student0@gmail.com', NULL, '2020-04-28 23:56:19', '$2y$10$hyHChsF5BbRp0SIMF494Puvk.16cDsY/j9l.ee73LcjnMN3cJtR8y', NULL, 4),
(2, 'alexander tutee  1', NULL, NULL, 'student1@gmail.com', NULL, '2020-04-28 23:56:19', '$2y$10$96fosqxw0FTXc3aqFXKCEOQXsB6M4zp.AAP7pW14be0ZXjg3zEZBK', NULL, 4),
(3, 'alexander tutee  2', NULL, NULL, 'student2@gmail.com', NULL, '2020-04-28 23:56:19', '$2y$10$EeEzFCbv17m1u.6lgnm.Y.q9P4h9B50QS1XcF/Iud7s3yDHxjxOk6', NULL, 4),
(4, 'alexander tutee  3', NULL, NULL, 'student3@gmail.com', NULL, '2020-04-28 23:56:19', '$2y$10$HOFsdXvzHNbY.Rz.nTRplOaJYnNdg6L/DbMT.YVE373B8ZMm/n1.u', NULL, 4),
(5, 'alexander tutee  4', NULL, NULL, 'student4@gmail.com', NULL, '2020-04-28 23:56:19', '$2y$10$/aVYBbV3o22E498gcQBcZ.JBD.L2ffpRV2ZurD.8lrJumlByFZD9W', NULL, 4),
(6, 'alexander tutee  5', NULL, NULL, 'student5@gmail.com', NULL, '2020-04-28 23:56:19', '$2y$10$ixiOXkM58R9yF1Gpx6NYz.ZGPDbBUUMOkYxXxWUYhM.3kBQdQi3FG', NULL, 4),
(7, 'alexander tutee  6', NULL, NULL, 'student6@gmail.com', NULL, '2020-04-28 23:56:19', '$2y$10$UyVhglQjgC5yKIzbecdrveIjaNc/kyE/pbDEwG2AgM87s4lxjg9qK', NULL, 4),
(8, 'alexander tutee  7', NULL, NULL, 'student7@gmail.com', NULL, '2020-04-28 23:56:19', '$2y$10$tGmg1L.BkUnJWm90BQdN9eeoBlmuxfI21/bxyG8M64icnwDwo/Aa.', NULL, 4),
(9, 'alexander tutee  8', NULL, NULL, 'student8@gmail.com', NULL, '2020-04-28 23:56:19', '$2y$10$V05fIzZ0VGVJwO2HDCPyieTWhIMK.DKdm5bCuISeVAEBhIVjOkNke', NULL, 4),
(10, 'alexander tutee  9', NULL, NULL, 'student9@gmail.com', NULL, '2020-04-28 23:56:19', '$2y$10$BSPhbimcBRNHs9cC7a1pTeyAR6AnP0dsVKN3EENS4yB4HzYFu9eUC', NULL, 4),
(11, 'alexander tutee  10', NULL, NULL, 'student10@gmail.com', NULL, '2020-04-28 23:56:19', '$2y$10$0iQrv1XulWX/amoAY/paEu0FI87muH/2cmbOZmeD1smGJ10VABjjS', NULL, 4),
(12, 'alexander tutee  11', NULL, NULL, 'student11@gmail.com', NULL, '2020-04-28 23:56:19', '$2y$10$LZEp22zbvZmcEuTLdBjOxuH1TrhDc7uLsXJVqdx29EXpCvaTX1dAm', NULL, 4),
(13, 'alexander tutee  12', NULL, NULL, 'student12@gmail.com', NULL, '2020-04-28 23:56:20', '$2y$10$XzIuPf5f/aQIIddyNlSs9uMrxfq4m210cB3aMxkvbh8rSmVNNtOZ2', NULL, 4),
(14, 'alexander tutee  13', NULL, NULL, 'student13@gmail.com', NULL, '2020-04-28 23:56:20', '$2y$10$FDbKKF10FgfLF3jFnhwLWeUzyqzq4eriqXZMvgrVbZiCIDj.Km7HS', NULL, 4),
(15, 'alexander tutee  14', NULL, NULL, 'student14@gmail.com', NULL, '2020-04-28 23:56:20', '$2y$10$rgfBL5MMdPACN0wZ6zxkBeSYFVbA/KgLzqXo5e9YGd7NTyc2mGdHi', NULL, 4),
(16, 'alexander tutee  15', NULL, NULL, 'student15@gmail.com', NULL, '2020-04-28 23:56:20', '$2y$10$C2W5vG62O3KlNC0Cc8we1eMK/tNopMMl4xDBRdD6fqJQcWfuLOL0a', NULL, 4),
(17, 'alexander tutee  16', NULL, NULL, 'student16@gmail.com', NULL, '2020-04-28 23:56:20', '$2y$10$hOZr0jjavvKqt2WhpnUjaOZbQ9wFMfJrw0acnMtXbji7UDfusiBV2', NULL, 4),
(18, 'alexander tutee  17', NULL, NULL, 'student17@gmail.com', NULL, '2020-04-28 23:56:20', '$2y$10$1bWKS8bWuBmgeobxLZkph.741FeNSOA7BOf4I9yxxW6Z0qBCkdCk2', NULL, 4),
(19, 'alexander tutee  18', NULL, NULL, 'student18@gmail.com', NULL, '2020-04-28 23:56:20', '$2y$10$E3cfXkQmDkh905yLtTT2sezkaDo.XbgLNbEw/rZnXCuUwzpsvncuS', NULL, 4),
(20, 'alexander tutee  19', NULL, NULL, 'student19@gmail.com', NULL, '2020-04-28 23:56:20', '$2y$10$OXiALcoiznDkvk0f/U8CYeC8kedyxMXVyA41yeO3oYjjxrawtN0WK', NULL, 4),
(21, 'alexander tutee  20', NULL, NULL, 'student20@gmail.com', NULL, '2020-04-28 23:56:20', '$2y$10$icLL11AV2svcJ5dzCyCTLuEma9syPX1W2jjkpZkrFt5RLvUPIzlai', NULL, 4),
(22, 'alexander tutee  21', NULL, NULL, 'student21@gmail.com', NULL, '2020-04-28 23:56:20', '$2y$10$s8H4VkLi5OUYtrgT09I8OOq32BEs1Zm3pFkPfNja0fOiAnBexk4jy', NULL, 4),
(23, 'alexander tutee  22', NULL, NULL, 'student22@gmail.com', NULL, '2020-04-28 23:56:20', '$2y$10$6dCgwZzWG3a7NzJpzMIHbuE.uq7lh3bMYg5vjDbQCx417MGav4wu6', NULL, 4),
(24, 'alexander tutee  23', NULL, NULL, 'student23@gmail.com', NULL, '2020-04-28 23:56:20', '$2y$10$pEWYpoqx/i8t/Dw465ONGuTPTUhWpb6E7si.N0b9UHnItALlvRCeO', NULL, 4),
(25, 'alexander tutee  24', NULL, NULL, 'student24@gmail.com', NULL, '2020-04-28 23:56:20', '$2y$10$wjL8tfOxQ1yhAFDmA4NPZ.BhJClj3y.JaVDpdEbxlYemtA2xvzFGy', NULL, 4),
(26, 'alexander tutee  25', NULL, NULL, 'student25@gmail.com', NULL, '2020-04-28 23:56:20', '$2y$10$9CKcyeHC4qJwlQ.TZsA4XuyY8nAICug2zw/p.IU5PXRfZ/kUpAjzC', NULL, 4),
(27, 'alexander tutee  26', NULL, NULL, 'student26@gmail.com', NULL, '2020-04-28 23:56:21', '$2y$10$Q/zrco8uP3zXXSl2Ql8XLeWpoZfzGuT/wfRCAqgTDHsUYiZMLtj3a', NULL, 4),
(28, 'alexander tutee  27', NULL, NULL, 'student27@gmail.com', NULL, '2020-04-28 23:56:21', '$2y$10$eh2CU8Tm22nJI.bSxHWJc.ZZACXa5Y/P8XncSM2KPFUWqitwS7ua.', NULL, 4),
(29, 'alexander tutee  28', NULL, NULL, 'student28@gmail.com', NULL, '2020-04-28 23:56:21', '$2y$10$sXeLXV9ghxBOGDb4LZotSuegOvqPeOOaqnk0yRgsjRuIjpAzW6N/S', NULL, 4),
(30, 'alexander tutee  29', NULL, NULL, 'student29@gmail.com', NULL, '2020-04-28 23:56:21', '$2y$10$svTNZAFVNyV.hjkbkW874e0nF1ujKILL1923W8kBPY3ogL11t9Ay.', NULL, 4),
(31, 'alexander tutee  30', NULL, NULL, 'student30@gmail.com', NULL, '2020-04-28 23:56:21', '$2y$10$KPJ1BlsgMBGVXBaIjBd8MeoSgLT56eMqGgdKTjUtFN/hu595S//9O', NULL, 4),
(32, 'alexander tutee  31', NULL, NULL, 'student31@gmail.com', NULL, '2020-04-28 23:56:21', '$2y$10$v.5bHSFO/5TW0Ed0XUca/ODAak2HM/gCZlR5vsrW/qpDWFf1XMUfi', NULL, 4),
(33, 'alexander tutee  32', NULL, NULL, 'student32@gmail.com', NULL, '2020-04-28 23:56:21', '$2y$10$rwPOLkW9qUn58q0Q.UFJ1.cvGbcW9gNv8Dh27kqGnpYsLo0VIL3SO', NULL, 4),
(34, 'alexander tutee  33', NULL, NULL, 'student33@gmail.com', NULL, '2020-04-28 23:56:21', '$2y$10$rTzMQ2lVhPw/fkTzernCWuGjxPFWOMkA1j5D0OQfYAupSjEKuHceu', NULL, 4),
(35, 'alexander tutee  34', NULL, NULL, 'student34@gmail.com', NULL, '2020-04-28 23:56:21', '$2y$10$h5u5J9Sp1u8ZLymuNl.WNuM31Zjs0H7GOBXBHuDsfRF4hT5YLLhPS', NULL, 4),
(36, 'alexander tutee  35', NULL, NULL, 'student35@gmail.com', NULL, '2020-04-28 23:56:21', '$2y$10$qkefwUfukdR1VbJ7EOjapeXSYENag6sFWLSvveu6ysUcyd8GRTkUq', NULL, 4),
(37, 'alexander tutee  36', NULL, NULL, 'student36@gmail.com', NULL, '2020-04-28 23:56:21', '$2y$10$KA6/6Do0Vx3YMF4ty5aCu.vqp9Fz/XdhG6jkd9UnzsWznvwGNsGvm', NULL, 4),
(38, 'alexander tutee  37', NULL, NULL, 'student37@gmail.com', NULL, '2020-04-28 23:56:21', '$2y$10$58Pu1TXm3Ukx9GzjLJfgC.fFYiREIhNHOTK4HoudLPO4grKFdU9Xu', NULL, 4),
(39, 'alexander tutee  38', NULL, NULL, 'student38@gmail.com', NULL, '2020-04-28 23:56:21', '$2y$10$PH0XFyzhm5qV4e8O55vSpOxMHMQu/n8Kwy5rs0SwZr7A2ccE1s0k.', NULL, 4),
(40, 'alexander tutee  39', NULL, NULL, 'student39@gmail.com', NULL, '2020-04-28 23:56:22', '$2y$10$ySUsZb60ypy9.QWFsRQzjehwJuYZqsEmSFnZk3c91J6uik61QE7bW', NULL, 4),
(41, 'alexander tutee  40', NULL, NULL, 'student40@gmail.com', NULL, '2020-04-28 23:56:22', '$2y$10$bX9mDrD.ld6xEr2bM1/6luuPs5i2kXoDetoYFda4jOcOOR4hSU9vm', NULL, 4),
(42, 'alexander tutee  41', NULL, NULL, 'student41@gmail.com', NULL, '2020-04-28 23:56:22', '$2y$10$OG529joX6mILe5rqOamNvOnZ2rMz027ncN0Gh8VeYDfQv2gD95.bC', NULL, 4),
(43, 'alexander tutee  42', NULL, NULL, 'student42@gmail.com', NULL, '2020-04-28 23:56:22', '$2y$10$T3YTSqw8iQ9/Sn8KseIIUOn2LPQ6TktHbG.N3EHhuC/XHHv4t/67i', NULL, 4),
(44, 'alexander tutee  43', NULL, NULL, 'student43@gmail.com', NULL, '2020-04-28 23:56:22', '$2y$10$V7LA1o1dXdvQTe4J.F1Zuu2w2EWl5xwLdGQB9Vz7J5TPZQ3.V8KW2', NULL, 4),
(45, 'alexander tutee  44', NULL, NULL, 'student44@gmail.com', NULL, '2020-04-28 23:56:22', '$2y$10$1zYBBd20nFdL9FMqzi3YXOIu4632QTtvyrR3m1QE3uUE.tHDDx4gO', NULL, 4),
(46, 'alexander tutee  45', NULL, NULL, 'student45@gmail.com', NULL, '2020-04-28 23:56:22', '$2y$10$h5IPwDzicLvMJvKCnLOwIOp6T4t5IqSkwrHb7mFqJ7S62XA0QE75m', NULL, 4),
(47, 'alexander tutee  46', NULL, NULL, 'student46@gmail.com', NULL, '2020-04-28 23:56:22', '$2y$10$L68vKip5ugP6y9Z4xaBgsODaj0hqb4Onx0qbPFaPiVufHGl72i6IK', NULL, 4),
(48, 'alexander tutee  47', NULL, NULL, 'student47@gmail.com', NULL, '2020-04-28 23:56:22', '$2y$10$KFoVRwg5Uyx51f26Q9QOk.v6NTP1u0ZkkSxE2IHoBIiUe2DrvAhn.', NULL, 4),
(49, 'alexander tutee  48', NULL, NULL, 'student48@gmail.com', NULL, '2020-04-28 23:56:22', '$2y$10$y/.WcBV1w8G2cijQSPu/i.i38vaNcwIye9veUmnczUvw/KTSK.J1i', NULL, 4),
(50, 'alexander tutee  49', NULL, NULL, 'student49@gmail.com', NULL, '2020-04-28 23:56:22', '$2y$10$LuwySoXdFF8TSDba4DjOM..p8a7BbGcK1LNYF7mRMhhn/Uw3oZx.a', NULL, 4),
(51, 'alexander tutee  50', NULL, NULL, 'student50@gmail.com', NULL, '2020-04-28 23:56:22', '$2y$10$gTCK5bD84Wjof0emTJlJdOnTRKS.qAXDOhKnKkTRaYBEdCpbyAy6W', NULL, 4),
(52, 'alexander tutee  51', NULL, NULL, 'student51@gmail.com', NULL, '2020-04-28 23:56:22', '$2y$10$9QREyYcOgaoFEygK7attk.SQJ8CrML2o8ew6.jRF2QW/Fzece.Uf.', NULL, 4),
(53, 'alexander tutee  52', NULL, NULL, 'student52@gmail.com', NULL, '2020-04-28 23:56:23', '$2y$10$Vy0vqN7QdjLScy0biFpNa.neRhb8zWZdz9aiDJDDrKsFaHivQLaAq', NULL, 4),
(54, 'alexander tutee  53', NULL, NULL, 'student53@gmail.com', NULL, '2020-04-28 23:56:23', '$2y$10$4c4x55vswX4LEozU.ie1eu66iwV/OYOSFEcchr7PLSoiDwktc7Hr6', NULL, 4),
(55, 'alexander tutee  54', NULL, NULL, 'student54@gmail.com', NULL, '2020-04-28 23:56:23', '$2y$10$JhApw5eEmv/BRbKTlL8YgueBEypCGQdY.jL5kBRYRS3mBeG9ZZwJC', NULL, 4),
(56, 'alexander tutee  55', NULL, NULL, 'student55@gmail.com', NULL, '2020-04-28 23:56:23', '$2y$10$veKoVI0v/2XW/zpUG59kbuWZB2ciD0fV1p/BoG01MWIJbIHQyQY4i', NULL, 4),
(57, 'alexander tutee  56', NULL, NULL, 'student56@gmail.com', NULL, '2020-04-28 23:56:23', '$2y$10$oaM1lj9ohE.h2AeAlTFG/eGpkNAQspA020DFHxXJ2KalJoCBm2B4O', NULL, 4),
(58, 'alexander tutee  57', NULL, NULL, 'student57@gmail.com', NULL, '2020-04-28 23:56:23', '$2y$10$Bwthi2VNiKY7pw/d0USFVuuAou3.kqVcEXU.qnIk7p8DvFu6DbiSe', NULL, 4),
(59, 'alexander tutee  58', NULL, NULL, 'student58@gmail.com', NULL, '2020-04-28 23:56:23', '$2y$10$T7SMDYi/KBw9U1sbQ9KISu5d8tAlduAnlbzRpwH2nYhiHGhM7hEly', NULL, 4),
(60, 'alexander tutee  59', NULL, NULL, 'student59@gmail.com', NULL, '2020-04-28 23:56:23', '$2y$10$SxTrHs2vySN155.gqy4U3.UqPOHws/hIapIjv1DxU0krfvBG.6BSe', NULL, 4),
(61, 'alexander tutee  60', NULL, NULL, 'student60@gmail.com', NULL, '2020-04-28 23:56:23', '$2y$10$MiAVSedO9KPkrewVBDxW8OCmvAkjlOycu.3FnnUUogqFUY7uyR8yS', NULL, 4),
(62, 'alexander tutee  61', NULL, NULL, 'student61@gmail.com', NULL, '2020-04-28 23:56:23', '$2y$10$SMSVpT2LcPWV8Goex7DaSe3mrTA7nOr7211.2MWsPOqnW9q.mWBXu', NULL, 4),
(63, 'alexander tutee  62', NULL, NULL, 'student62@gmail.com', NULL, '2020-04-28 23:56:23', '$2y$10$7WEs1mXdYQyp1Tnfb4dLh.sus2T7mqsCU57qnj3Ord.JGOj66QkKm', NULL, 4),
(64, 'alexander tutee  63', NULL, NULL, 'student63@gmail.com', NULL, '2020-04-28 23:56:23', '$2y$10$4gq7kKKJsae3dYl1qu/K9.7KE9xaWm5Y/vT4vAZLed8Nrj9f2wbmu', NULL, 4),
(65, 'alexander tutee  64', NULL, NULL, 'student64@gmail.com', NULL, '2020-04-28 23:56:23', '$2y$10$qitLcFf9QJFjhKMbmsEx5eye4q9/Wi58MkgWfiNtncznIcrLP5s6e', NULL, 4),
(66, 'alexander tutee  65', NULL, NULL, 'student65@gmail.com', NULL, '2020-04-28 23:56:24', '$2y$10$C1SSZP7vWkEfC5S.OgyGGeGad75Sl5glZqkYKrF44zZDdbhkNOWEC', NULL, 4),
(67, 'alexander tutee  66', NULL, NULL, 'student66@gmail.com', NULL, '2020-04-28 23:56:24', '$2y$10$OjdHkClQy4GVuNjULDzvEOfGHWiwaV/urmByjZ1oTF4LrgZgBsCRu', NULL, 4),
(68, 'alexander tutee  67', NULL, NULL, 'student67@gmail.com', NULL, '2020-04-28 23:56:24', '$2y$10$7lvtFoYZcGOlNKNCnKo.1uBo3iywPz9JA/v8gLiEg0QlddFUYO6Ri', NULL, 4),
(69, 'alexander tutee  68', NULL, NULL, 'student68@gmail.com', NULL, '2020-04-28 23:56:24', '$2y$10$OD.tH348HeTkxBS7J7.RZO02SixkdKfQM94gSKJMk0dWHqkslRcmG', NULL, 4),
(70, 'alexander tutee  69', NULL, NULL, 'student69@gmail.com', NULL, '2020-04-28 23:56:24', '$2y$10$3EUssghrWpiSnFBnNOtlLOoPGm1Jipzr2tXBQb//NvmBDYzlS2n.C', NULL, 4),
(71, 'alexander tutee  70', NULL, NULL, 'student70@gmail.com', NULL, '2020-04-28 23:56:24', '$2y$10$vbKak.6o8ht6rJTxMpFjBO9vYMrciVqPu2JWLX/fH8VVc5DhUl2eW', NULL, 4),
(72, 'alexander tutee  71', NULL, NULL, 'student71@gmail.com', NULL, '2020-04-28 23:56:24', '$2y$10$LhA4SPq565BW0NBYiTmJNuVaKD7LTUbT01igqsWQgvoOszmW39XUi', NULL, 4),
(73, 'alexander tutee  72', NULL, NULL, 'student72@gmail.com', NULL, '2020-04-28 23:56:24', '$2y$10$dDwuXyhaXLCx886RflVjNu5QyLRPIbuV81Ps4rk7bs2JYGgzwQkOu', NULL, 4),
(74, 'alexander tutee  73', NULL, NULL, 'student73@gmail.com', NULL, '2020-04-28 23:56:24', '$2y$10$5cKjVgrrDPNmfJQJntJCVe50gCLEkIS5CWIWKpEdCe153HOpTxDYi', NULL, 4),
(75, 'alexander tutee  74', NULL, NULL, 'student74@gmail.com', NULL, '2020-04-28 23:56:24', '$2y$10$eLxkB1pgZGjgz1hfXGiC1uYMputHKtSuPkQ5EkIyhJg6mn8wE01M2', NULL, 4),
(76, 'alexander tutee  75', NULL, NULL, 'student75@gmail.com', NULL, '2020-04-28 23:56:24', '$2y$10$JBWhbYDSOIbCZ6L1IT3lvOwn1vgzR97f.LSexiuXzymQNb.rWu/Uy', NULL, 4),
(77, 'alexander tutee  76', NULL, NULL, 'student76@gmail.com', NULL, '2020-04-28 23:56:24', '$2y$10$kPEnBxVigi7XH4LUGW/4qOnB6yLxFqVQ5WJa24Wr5TDGO1RnanbYC', NULL, 4),
(78, 'alexander tutee  77', NULL, NULL, 'student77@gmail.com', NULL, '2020-04-28 23:56:24', '$2y$10$Slt90/SRj45i0UzCoEsEYOgeyyB4.ypp4t7b4myyWo3AitDYhzyWC', NULL, 4),
(79, 'alexander tutee  78', NULL, NULL, 'student78@gmail.com', NULL, '2020-04-28 23:56:25', '$2y$10$25Fb7HoNTWX.pOnf0bepv.X993364aMipPoVlQ4gtgq5.Bjh4xje2', NULL, 4),
(80, 'alexander tutee  79', NULL, NULL, 'student79@gmail.com', NULL, '2020-04-28 23:56:25', '$2y$10$p31.UMl20mBoEdRgBb.M.egucXrPQFYxG8XhWYguhO4ELib8EN9dC', NULL, 4),
(81, 'alexander tutee  80', NULL, NULL, 'student80@gmail.com', NULL, '2020-04-28 23:56:25', '$2y$10$Xp3jUd6tMGbfstyhtq.Zae/4Ah8TvCFyE9YYpU13Iw1.ipYgu.Fm2', NULL, 4),
(82, 'alexander tutee  81', NULL, NULL, 'student81@gmail.com', NULL, '2020-04-28 23:56:25', '$2y$10$fnOyxlXbpuDTPeBAl4HTW.ZB3nQOhIjnVzm/4Vn.y4wiiBESK3nSG', NULL, 4),
(83, 'alexander tutee  82', NULL, NULL, 'student82@gmail.com', NULL, '2020-04-28 23:56:25', '$2y$10$YffL0LGzPu2mF5jnsQauGuMKVi4odmrJJEm7/tmPsNjkSoFTHCZZW', NULL, 4),
(84, 'alexander tutee  83', NULL, NULL, 'student83@gmail.com', NULL, '2020-04-28 23:56:25', '$2y$10$XV81n0m1MigbLUQKZa1JA.BLM/pe4xWp3cvztw6CSkffQ0OGthm6y', NULL, 4),
(85, 'alexander tutee  84', NULL, NULL, 'student84@gmail.com', NULL, '2020-04-28 23:56:25', '$2y$10$FuSOLpyIWuN8Wg93HRRDcOu3rNIWFi14cWikkQ1DkJSbQG76wWHv2', NULL, 4),
(86, 'alexander tutee  85', NULL, NULL, 'student85@gmail.com', NULL, '2020-04-28 23:56:25', '$2y$10$HOSJd.UEvrVpKyqDWG1wLebk2RkEbovD7N5ykojoJLdvJoLW5qQdW', NULL, 4),
(87, 'alexander tutee  86', NULL, NULL, 'student86@gmail.com', NULL, '2020-04-28 23:56:25', '$2y$10$3ZUEu6nm3Aty/njDWE8f1e7rnDkTcE7rqDXxIsMiuGSprJ0lpX8uy', NULL, 4),
(88, 'alexander tutee  87', NULL, NULL, 'student87@gmail.com', NULL, '2020-04-28 23:56:25', '$2y$10$xl62dzZ60qgJgd0Qpb1pIuDPJO6bFqnAToyBUdvQD0qD3u9vlmU4.', NULL, 4),
(89, 'alexander tutee  88', NULL, NULL, 'student88@gmail.com', NULL, '2020-04-28 23:56:25', '$2y$10$9dWBeVU8RK5AiazYgSDYHOaqt5tEIDEUSKx0U7Pw0qgw0aBpQJBYC', NULL, 4),
(90, 'alexander tutee  89', NULL, NULL, 'student89@gmail.com', NULL, '2020-04-28 23:56:25', '$2y$10$X29SVIAwMjxfkauFWbIw8eUZwW3Q.qBcYZTiF/gfAUDJoLIeHK4hq', NULL, 4),
(91, 'alexander tutee  90', NULL, NULL, 'student90@gmail.com', NULL, '2020-04-28 23:56:26', '$2y$10$pcAOHjelslOghYsDdFzB4eGlWV9V3znB6qpYokhKH4jvspWq4P3/u', NULL, 4),
(92, 'alexander tutee  91', NULL, NULL, 'student91@gmail.com', NULL, '2020-04-28 23:56:26', '$2y$10$YWmUmSKkJoT..f9ujnBavembuIUH0.MvU52c6Gm4.s1OZhohscSN2', NULL, 4),
(93, 'alexander tutee  92', NULL, NULL, 'student92@gmail.com', NULL, '2020-04-28 23:56:26', '$2y$10$NWdVyaozOuDPjUJVX6WpauhW34U1.7r3PCbO7o3oJMRMAwEgmVK5i', NULL, 4),
(94, 'alexander tutee  93', NULL, NULL, 'student93@gmail.com', NULL, '2020-04-28 23:56:26', '$2y$10$w0gx1lIpwT4i77rJtbaJfOyzK8iSy0RfEntsKC3YL0X9P6XDh4U/.', NULL, 4),
(95, 'alexander tutee  94', NULL, NULL, 'student94@gmail.com', NULL, '2020-04-28 23:56:26', '$2y$10$fRIYQmeFQ8AmGJ4Dr7WEsOZ0VA/jb.f5Hegv.PyQa4WzRhi8KAotu', NULL, 4),
(96, 'alexander tutee  95', NULL, NULL, 'student95@gmail.com', NULL, '2020-04-28 23:56:26', '$2y$10$AgVFSRE10DplNQbc4FSMuuJw07kpLPTfjggDcOCCxnVgRu03g6Er2', NULL, 4),
(97, 'alexander tutee  96', NULL, NULL, 'student96@gmail.com', NULL, '2020-04-28 23:56:26', '$2y$10$1n0og6hxf5Dd8gogvlIoluZmCjLf9YjUxVRQTEMctio8m5mlirQC2', NULL, 4),
(98, 'alexander tutee  97', NULL, NULL, 'student97@gmail.com', NULL, '2020-04-28 23:56:26', '$2y$10$hk5H0yj3isuVhJQdvXZTNuupxbgfLagsUMBQ00GZvG5MdfEa3KE0e', NULL, 4),
(99, 'alexander tutee  98', NULL, NULL, 'student98@gmail.com', NULL, '2020-04-28 23:56:26', '$2y$10$c6aRNG6HVptvV02ASRuHv.3pagCzm.SXSJi8TKdqkXUkECG6ydKom', NULL, 4),
(100, 'alexander tutee  99', NULL, NULL, 'student99@gmail.com', NULL, '2020-04-28 23:56:26', '$2y$10$.CWSeU8vBVEXv2zbDklDkO3mtJ56DCZNxyn8hYKaRfIgWkt4EUvTu', NULL, 4),
(101, 'alexander tutee  100', NULL, NULL, 'student100@gmail.com', NULL, '2020-04-28 23:56:26', '$2y$10$H0bc04HsLnVI.MvK.XLD7ujjh9r32j9b2y7VdyLdk06CQDZ7h12H6', NULL, 4),
(102, 'alexander tutee  101', NULL, NULL, 'student101@gmail.com', NULL, '2020-04-28 23:56:26', '$2y$10$5Y5I0seu.IKDOuP0LZ2I4eaYX3v.uPi.DC636U3hLwVFgGK8zkOaS', NULL, 4),
(103, 'alexander tutee  102', NULL, NULL, 'student102@gmail.com', NULL, '2020-04-28 23:56:26', '$2y$10$F0zKO/dzaY9LpOjKiRbV5ewxg4JjfW3Y5PLcSrTY/0IMB4tbRcQdK', NULL, 4),
(104, 'alexander tutee  103', NULL, NULL, 'student103@gmail.com', NULL, '2020-04-28 23:56:27', '$2y$10$m4Gwp0K.riyVd849wyTHgeRnBIDwAjq1raTb8JXDc0abUgqSlWL0.', NULL, 4),
(105, 'alexander tutee  104', NULL, NULL, 'student104@gmail.com', NULL, '2020-04-28 23:56:27', '$2y$10$zvDYEFKxGDHV6TZKbG7v8ulqSL7oTYdm3lCeKFH5gMXHPcBmMJ8tG', NULL, 4),
(106, 'alexander tutee  105', NULL, NULL, 'student105@gmail.com', NULL, '2020-04-28 23:56:27', '$2y$10$zWtDhchjxUsIcAJUOEidS.rvDfxv3.GrtG8DBTNhZePXDcE95L3Z6', NULL, 4),
(107, 'alexander tutee  106', NULL, NULL, 'student106@gmail.com', NULL, '2020-04-28 23:56:27', '$2y$10$gwXQxSy4d7aBcVIyRy60EO3.dk7u5nWeakr/U.VHGiw00EuKu3mQG', NULL, 4),
(108, 'alexander tutee  107', NULL, NULL, 'student107@gmail.com', NULL, '2020-04-28 23:56:27', '$2y$10$pYeD/5TZsa7hDf9DmO/QYO5qTvqotJLaWDodz8SevKH9RhH1kdxmS', NULL, 4),
(109, 'alexander tutee  108', NULL, NULL, 'student108@gmail.com', NULL, '2020-04-28 23:56:27', '$2y$10$XyippZM/3nXVw/e1eV4qfeyyQ0FBdFlp2lPfmohLRqViOSTyxTfIS', NULL, 4),
(110, 'alexander tutee  109', NULL, NULL, 'student109@gmail.com', NULL, '2020-04-28 23:56:27', '$2y$10$KHmnJrPh6bu8v43Vx/yVueMJNSDJIXj2XPTuM8Qm7aiMUVw4fyywi', NULL, 4),
(111, 'alexander tutee  110', NULL, NULL, 'student110@gmail.com', NULL, '2020-04-28 23:56:27', '$2y$10$uibxPY8PIGjpsw34dVUN9eZggpXeiNn4kDl7B6FROBDYCokV0EuvC', NULL, 4),
(112, 'alexander tutee  111', NULL, NULL, 'student111@gmail.com', NULL, '2020-04-28 23:56:27', '$2y$10$BE.c4LnbibzBe54kaH/d0eoY0rpW6dmb9aRlY6ajyb/ppgFDowBni', NULL, 4),
(113, 'alexander tutee  112', NULL, NULL, 'student112@gmail.com', NULL, '2020-04-28 23:56:27', '$2y$10$AC02b.00QJZGIieo6mBo/u99IEE1M7fBmUIWPKabIrDRSHOvKa2/C', NULL, 4),
(114, 'alexander tutee  113', NULL, NULL, 'student113@gmail.com', NULL, '2020-04-28 23:56:27', '$2y$10$2rVu94OmNSoTxMTjW.hCl.ZsnbtU7jPdKESDkWIqpVs0ZpSNgVXPC', NULL, 4),
(115, 'alexander tutee  114', NULL, NULL, 'student114@gmail.com', NULL, '2020-04-28 23:56:27', '$2y$10$c/9oZAwWoJvgbq7zGMJGDOCNTksY1j7p3kFme8mboiDe5rzPiyn4u', NULL, 4),
(116, 'alexander tutee  115', NULL, NULL, 'student115@gmail.com', NULL, '2020-04-28 23:56:27', '$2y$10$67FDIg/ePgB0Mi2nSNxM6u5c37OhJ2Ov6eyu6ZwHEtnI658jO58x2', NULL, 4),
(117, 'alexander tutee  116', NULL, NULL, 'student116@gmail.com', NULL, '2020-04-28 23:56:28', '$2y$10$QK60fZ.P8F3lzJ106tGkBu.GhjWtfi/a4ibEQBhxOVVe/WpRotSMG', NULL, 4),
(118, 'alexander tutee  117', NULL, NULL, 'student117@gmail.com', NULL, '2020-04-28 23:56:28', '$2y$10$g6claUcoy8DlJrP10cN6Mujcc7GmfH0p1B1/QrnbGFQAdxnBgpqMa', NULL, 4),
(119, 'alexander tutee  118', NULL, NULL, 'student118@gmail.com', NULL, '2020-04-28 23:56:28', '$2y$10$5yiowu3WbJWobn8kCK9ikeqeNDdZF3oIy/2I0lpI18bo2.HKMH.3i', NULL, 4),
(120, 'alexander tutee  119', NULL, NULL, 'student119@gmail.com', NULL, '2020-04-28 23:56:28', '$2y$10$1MG0OIgzZoKbsYW8Pl6ree.pWgX.oH.5uCDgC2fKxAiUIdi8iQpXm', NULL, 4),
(121, 'alexander tutee  120', NULL, NULL, 'student120@gmail.com', NULL, '2020-04-28 23:56:28', '$2y$10$Ffx0NMWGwF59D.p7Djtbk.uO8tyyBAJVQ4ME51rKpb.W.pCsQSGja', NULL, 4),
(122, 'alexander tutee  121', NULL, NULL, 'student121@gmail.com', NULL, '2020-04-28 23:56:28', '$2y$10$9/uz4Ywg6Kq2AuGSZKomTerF6ElW3V70cUnuN.xAB1ahBU8Lp61Xi', NULL, 4),
(123, 'alexander tutee  122', NULL, NULL, 'student122@gmail.com', NULL, '2020-04-28 23:56:28', '$2y$10$y21pVmFNchNXm59I9n3ls.AzuHLZCfpMthrR8P.MryWoCF.UYA3cS', NULL, 4),
(124, 'alexander tutee  123', NULL, NULL, 'student123@gmail.com', NULL, '2020-04-28 23:56:28', '$2y$10$tbrq82umgSKb6Ey9Qx6SGOyX2wC78nWtQfmzb9HU.Dn97e7tprYp.', NULL, 4),
(125, 'alexander tutee  124', NULL, NULL, 'student124@gmail.com', NULL, '2020-04-28 23:56:28', '$2y$10$kn0GU1gRDLL/mAcB1v1hz.w2tQdStOibKrW95D/pZ4a4Zsk26w9r2', NULL, 4),
(126, 'alexander tutee  125', NULL, NULL, 'student125@gmail.com', NULL, '2020-04-28 23:56:28', '$2y$10$KyXd0f9UiM1eDbsDMgZmNuVDRYkH5VFF2M9RaXd0fJEmT6k6EjjhC', NULL, 4),
(127, 'alexander tutee  126', NULL, NULL, 'student126@gmail.com', NULL, '2020-04-28 23:56:28', '$2y$10$/vKbEdJdvQbJx1A4mBYJhO3Yaqeqwt.Zm8JduxxgyAnOpagI.BmtO', NULL, 4),
(128, 'alexander tutee  127', NULL, NULL, 'student127@gmail.com', NULL, '2020-04-28 23:56:28', '$2y$10$SsFYewpD816.kU6XPaTAfuoKa2JFL7dDo60n1K1nTGprG3T5DaR7m', NULL, 4),
(129, 'alexander tutee  128', NULL, NULL, 'student128@gmail.com', NULL, '2020-04-28 23:56:28', '$2y$10$nlMeOf9ecReSIcwG6kxihu4GShSirW5gNLDCx94SYjvs7AhjyqOu2', NULL, 4),
(130, 'alexander tutee  129', NULL, NULL, 'student129@gmail.com', NULL, '2020-04-28 23:56:29', '$2y$10$JqL9ZDVQeOiOJ6m6iIpjiOGGvZ5.nA9hu0sGLDvCdEtQ/uclLt36e', NULL, 4),
(131, 'alexander tutee  130', NULL, NULL, 'student130@gmail.com', NULL, '2020-04-28 23:56:29', '$2y$10$y2EtWIDcIf6uqF1jHEKIxu6Xn0nMzRvaArLnsoBddAM9zjckj1rNm', NULL, 4),
(132, 'alexander tutee  131', NULL, NULL, 'student131@gmail.com', NULL, '2020-04-28 23:56:29', '$2y$10$MDQuu.GeVMdebYf6em.UrenESljiK8PPlS/O2SOQ9JaxLXyZYhaWG', NULL, 4),
(133, 'alexander tutee  132', NULL, NULL, 'student132@gmail.com', NULL, '2020-04-28 23:56:29', '$2y$10$pAXdaxzqORHGQ2j.40ys4.E0oqZzcq8PBwNOAcFz1i7iIPEpyDFvq', NULL, 4),
(134, 'alexander tutee  133', NULL, NULL, 'student133@gmail.com', NULL, '2020-04-28 23:56:29', '$2y$10$GuLWHMtLS3UmamAHbPlwu.LRKD2lgetlTnf59hgqIX7HgaCI5O7iO', NULL, 4),
(135, 'alexander tutee  134', NULL, NULL, 'student134@gmail.com', NULL, '2020-04-28 23:56:29', '$2y$10$bsAv.j7pxCmFXfeqvABtEul66npgKHa3Rq5uVyjXB6oShdFTxqopS', NULL, 4),
(136, 'alexander tutee  135', NULL, NULL, 'student135@gmail.com', NULL, '2020-04-28 23:56:29', '$2y$10$8Tx8y25leE966.wNANf57e/iKAJVtOvnhbgojUcnwmmIyLzqEK5Aa', NULL, 4),
(137, 'alexander tutee  136', NULL, NULL, 'student136@gmail.com', NULL, '2020-04-28 23:56:29', '$2y$10$WPYVUUpmZi3weSiELy50gu2qTpnYWgRELFGN6WnTLAZlwyfKvul5G', NULL, 4),
(138, 'alexander tutee  137', NULL, NULL, 'student137@gmail.com', NULL, '2020-04-28 23:56:29', '$2y$10$Ukx8ebywrf6W0LdeQsIDROilUjtq7Ev.MWM9i151cXvGsV2Au/7b2', NULL, 4),
(139, 'alexander tutee  138', NULL, NULL, 'student138@gmail.com', NULL, '2020-04-28 23:56:29', '$2y$10$.qAaq3PJZEFodk1h8jTi1.pNkdhUyE0fr8uS9t2uZG7Ph6b.8yBG2', NULL, 4),
(140, 'alexander tutee  139', NULL, NULL, 'student139@gmail.com', NULL, '2020-04-28 23:56:29', '$2y$10$jgA7WBifiyI8.4zo8MI90OJT/UmzlpV4dcVGUdbTTuHZdHIcfSGMy', NULL, 4),
(141, 'alexander tutee  140', NULL, NULL, 'student140@gmail.com', NULL, '2020-04-28 23:56:29', '$2y$10$hyfIXcEtiTZlXi5gv7aNaOTWmMq20qKR5BCFw49bAZNpfo.6k3Fpu', NULL, 4),
(142, 'alexander tutee  141', NULL, NULL, 'student141@gmail.com', NULL, '2020-04-28 23:56:29', '$2y$10$ig1tMd7y/xzKKVF5BQjWOusA8ud8hg8U9bTEknlJXG66cnesYUXqm', NULL, 4),
(143, 'alexander tutee  142', NULL, NULL, 'student142@gmail.com', NULL, '2020-04-28 23:56:30', '$2y$10$XJ4E1X2IT8wbZBE4UDIXd.srlK5hF.Ab9qyGDrG0UpH4eg6xGGDWO', NULL, 4),
(144, 'alexander tutee  143', NULL, NULL, 'student143@gmail.com', NULL, '2020-04-28 23:56:30', '$2y$10$NyPPaKuow/O6pA3euyQrCufIGh3HgXaNh5Z8Lf4kPguDIKg0bFTPe', NULL, 4),
(145, 'alexander tutee  144', NULL, NULL, 'student144@gmail.com', NULL, '2020-04-28 23:56:30', '$2y$10$EGO4in2bYVckCewoAhaoROCU.y27pZIsxFa1DpoaI6O55nBzDr4Oe', NULL, 4),
(146, 'alexander tutee  145', NULL, NULL, 'student145@gmail.com', NULL, '2020-04-28 23:56:30', '$2y$10$l5po.XwrJNfEOgd1n3Jxve4Yna0VWqKHHYJZdqglKDId5IeoNxFeC', NULL, 4),
(147, 'alexander tutee  146', NULL, NULL, 'student146@gmail.com', NULL, '2020-04-28 23:56:30', '$2y$10$UhZaD2aqoi47wTRaL.mAAuZENabdmxV3JsUUdpZKSgE0KKfjlJRSu', NULL, 4),
(148, 'alexander tutee  147', NULL, NULL, 'student147@gmail.com', NULL, '2020-04-28 23:56:30', '$2y$10$Ym8Xbzo5UKpz4zQk69ZvBuMUoTZp6Y6xLZjItwunteNPH2/XSqkom', NULL, 4),
(149, 'alexander tutee  148', NULL, NULL, 'student148@gmail.com', NULL, '2020-04-28 23:56:30', '$2y$10$H1FaEUUm6r8R14ZbDhLEQ.mCdXD/o1KBpLYtgKjGhCka1fmhvaIk.', NULL, 4),
(150, 'alexander tutee  149', NULL, NULL, 'student149@gmail.com', NULL, '2020-04-28 23:56:30', '$2y$10$yythyxm8RMyxgsPLcEGH.OO4.H9pIJQ9xRh4CyBqUfvjG3VBd4Z1G', NULL, 4),
(151, 'alexander tutee  150', NULL, NULL, 'student150@gmail.com', NULL, '2020-04-28 23:56:30', '$2y$10$Hus23YZRqbH8kEO6ac8NO.w1mDrWYlEG5sNm/RH7l.T0p4Cjh9ila', NULL, 4),
(152, 'alexander tutee  151', NULL, NULL, 'student151@gmail.com', NULL, '2020-04-28 23:56:30', '$2y$10$3yqphHdER.ZaGJI9cKrcB.lexTmc5.Fpk/Y6x.kGT.3NG9oXWl6g.', NULL, 4),
(153, 'alexander tutee  152', NULL, NULL, 'student152@gmail.com', NULL, '2020-04-28 23:56:30', '$2y$10$RYpksWg5RLl.SMsDTUrwxOn98N/d0DoYXRTTu1NbagHfynR2KojZu', NULL, 4),
(154, 'alexander tutee  153', NULL, NULL, 'student153@gmail.com', NULL, '2020-04-28 23:56:30', '$2y$10$Z48AhxQSv5.HdIUDfKhYiuaI4nd/FGIZliO.Pj4mj7By.4gOW0pTe', NULL, 4),
(155, 'alexander tutee  154', NULL, NULL, 'student154@gmail.com', NULL, '2020-04-28 23:56:30', '$2y$10$Ymy2asVjW.hhzL4ZBlvGn.70nLns/IMLVLae9L5TQw0610onWaG.K', NULL, 4),
(156, 'alexander tutee  155', NULL, NULL, 'student155@gmail.com', NULL, '2020-04-28 23:56:30', '$2y$10$nXib8d/6EAWmO.O.i9hSbuc1MdHvkI7xJRBRrjMvga5DsOOpaM.8q', NULL, 4),
(157, 'alexander tutee  156', NULL, NULL, 'student156@gmail.com', NULL, '2020-04-28 23:56:31', '$2y$10$QwO7kdWENP7FXKDqygy9peSyPGlRJWPDOm.ZEEJEowN9HpGuKJ3ca', NULL, 4),
(158, 'alexander tutee  157', NULL, NULL, 'student157@gmail.com', NULL, '2020-04-28 23:56:31', '$2y$10$sfdSQsJfDj9fZAQ2P5R7F.a9wvggKXU7z3iEuPAW98CX1y49vpUlG', NULL, 4),
(159, 'alexander tutee  158', NULL, NULL, 'student158@gmail.com', NULL, '2020-04-28 23:56:31', '$2y$10$JG4HWL2y8rptKkNAmVSw8Oadh0jHzs6Dlkyict1QfikvBBInbn.vO', NULL, 4),
(160, 'alexander tutee  159', NULL, NULL, 'student159@gmail.com', NULL, '2020-04-28 23:56:31', '$2y$10$.wW8E65zczY5brs7g/0bguoVTiiOEbsBJnEu.V/ybZ0.cdwcupZHO', NULL, 4),
(161, 'alexander tutee  160', NULL, NULL, 'student160@gmail.com', NULL, '2020-04-28 23:56:31', '$2y$10$ai01LsgupQ4KP6lTQ0TijeErUzv5L9DNNfY4pHPY5MeUZIVGsTh7q', NULL, 4),
(162, 'alexander tutee  161', NULL, NULL, 'student161@gmail.com', NULL, '2020-04-28 23:56:31', '$2y$10$A1pVDNl5muUmywwnUdbh2.PvM28D.iqt5B90AmlCHQsm93IsMql3m', NULL, 4),
(163, 'alexander tutee  162', NULL, NULL, 'student162@gmail.com', NULL, '2020-04-28 23:56:31', '$2y$10$IUKzgDa/tBDc7tE5PIJwQeLLcMh0/bWfCqQZHlUvVng2WkIJY2KkK', NULL, 4),
(164, 'alexander tutee  163', NULL, NULL, 'student163@gmail.com', NULL, '2020-04-28 23:56:31', '$2y$10$qRghMkS0k6hcrmkfVjViSe9JIQHLRkFJNtKREmHWzK9kUS5otOlX6', NULL, 4),
(165, 'alexander tutee  164', NULL, NULL, 'student164@gmail.com', NULL, '2020-04-28 23:56:31', '$2y$10$KCz8YHlYRfIAZ9eGP6KJCe/sTT6zfCRh5uAmR0VD9/DZK/nLbSXi6', NULL, 4),
(166, 'alexander tutee  165', NULL, NULL, 'student165@gmail.com', NULL, '2020-04-28 23:56:31', '$2y$10$wcvL600JShHkY.ysidzb7ud9Tjg6CKlNd5sH2L4NKBaBXyvsPfXKm', NULL, 4),
(167, 'alexander tutee  166', NULL, NULL, 'student166@gmail.com', NULL, '2020-04-28 23:56:31', '$2y$10$eLJ9L1fFRiSeX6yCs./I9ufOBrj4T18WZo5q8UX7eC3vuc2suui32', NULL, 4),
(168, 'alexander tutee  167', NULL, NULL, 'student167@gmail.com', NULL, '2020-04-28 23:56:31', '$2y$10$s0oKYeoj3NszBUP9Pq7JoO0qTDQXN.TSKZvmVD0EBrkrTThVXpMHO', NULL, 4),
(169, 'alexander tutee  168', NULL, NULL, 'student168@gmail.com', NULL, '2020-04-28 23:56:31', '$2y$10$RUE7fGzf4pg4tkxem.nGeOObpq7Fz8/xv10/gjSSENSKHGxKqb6gG', NULL, 4),
(170, 'alexander tutee  169', NULL, NULL, 'student169@gmail.com', NULL, '2020-04-28 23:56:32', '$2y$10$lsHJE0ru9j0asWSxe4HS/edrqrbE5Mg1fBd2MyQo6rLMujlg9XcOa', NULL, 4),
(171, 'alexander tutee  170', NULL, NULL, 'student170@gmail.com', NULL, '2020-04-28 23:56:32', '$2y$10$qbDhQR2gbZh0i.smWTCXuu7PZY71Fm9aC7mCElXHK2rn/gjs2mP5e', NULL, 4),
(172, 'alexander tutee  171', NULL, NULL, 'student171@gmail.com', NULL, '2020-04-28 23:56:32', '$2y$10$LY6Hzwg.8FbLS0/7yH.Vm.R0Zou9ofbRkDWm8C5dcbhtZFDZCY5g2', NULL, 4),
(173, 'alexander tutee  172', NULL, NULL, 'student172@gmail.com', NULL, '2020-04-28 23:56:32', '$2y$10$PEXqSWZozdFvBRGpGDvys.SSKlh4Xrp0DLVDCanPgKkMYPiwrXk6S', NULL, 4),
(174, 'alexander tutee  173', NULL, NULL, 'student173@gmail.com', NULL, '2020-04-28 23:56:32', '$2y$10$7BFZAsY/n5IredKGUMwyNe09jewvnsO4sxv4qGLazW8UGObXmKqBy', NULL, 4),
(175, 'alexander tutee  174', NULL, NULL, 'student174@gmail.com', NULL, '2020-04-28 23:56:32', '$2y$10$yb1ApInkgO7aosqYHKd9VuWnAmYmWTLZReEmOIujyEdCWmsZH73NW', NULL, 4),
(176, 'alexander tutee  175', NULL, NULL, 'student175@gmail.com', NULL, '2020-04-28 23:56:32', '$2y$10$RcaNCIwRfPuZybVv3sQjNep0Dpb3E.98cV7jibSoURw5MPRfjXia6', NULL, 4),
(177, 'alexander tutee  176', NULL, NULL, 'student176@gmail.com', NULL, '2020-04-28 23:56:32', '$2y$10$W336D49m5ZVruhjtZXYkw.fS2kezS68CdMqJN2REpAChuChVAnVmG', NULL, 4),
(178, 'alexander tutee  177', NULL, NULL, 'student177@gmail.com', NULL, '2020-04-28 23:56:32', '$2y$10$pyfX9eSMa97Ox.wmEbOideeT1UkLmoamIQNnLqsrG3bh8ygLxKnVi', NULL, 4),
(179, 'alexander tutee  178', NULL, NULL, 'student178@gmail.com', NULL, '2020-04-28 23:56:32', '$2y$10$UNB3UgdRBoF5MZ1/1uJ94ODgvDLSvzBZeqtRvCK9YLfQ7ASeL/7S2', NULL, 4),
(180, 'alexander tutee  179', NULL, NULL, 'student179@gmail.com', NULL, '2020-04-28 23:56:32', '$2y$10$QL1ZyAAxiPJcIldAtyz65OnAsX6EHwJYkUZya0hR3S7KFWNOlbNxu', NULL, 4),
(181, 'alexander tutee  180', NULL, NULL, 'student180@gmail.com', NULL, '2020-04-28 23:56:32', '$2y$10$1Cn8quALtmeWrsQSwrSV2.ogqInCZRWgYyFamN3lQ4EUxcdxLSvCq', NULL, 4),
(182, 'alexander tutee  181', NULL, NULL, 'student181@gmail.com', NULL, '2020-04-28 23:56:32', '$2y$10$Y93Kf288T5m4n5YKlbC.9OGVRa9gacfEiUaCJ/i7VzL3Dc4kEfs9i', NULL, 4),
(183, 'alexander tutee  182', NULL, NULL, 'student182@gmail.com', NULL, '2020-04-28 23:56:33', '$2y$10$08P761x44.IGwUThvMalMeYpPzhzdck12s8kEhghl/rmGWY3ln1s6', NULL, 4),
(184, 'alexander tutee  183', NULL, NULL, 'student183@gmail.com', NULL, '2020-04-28 23:56:33', '$2y$10$JD6v5273m1M/nyNb1Ep2n.clJJ7a9g4jhJmURe/gxGTGRCMfTFxbG', NULL, 4),
(185, 'alexander tutee  184', NULL, NULL, 'student184@gmail.com', NULL, '2020-04-28 23:56:33', '$2y$10$f2Lkgq0zDO2J5oIoZE09V.u4O6KxV0kfsGg3tbQDyJGpHY.zjJ7o6', NULL, 4),
(186, 'alexander tutee  185', NULL, NULL, 'student185@gmail.com', NULL, '2020-04-28 23:56:33', '$2y$10$5e4za5N0G4mHq3I6eJmYqOEeliZVFZMo7gY6qtnQALTujnMGb10h2', NULL, 4),
(187, 'alexander tutee  186', NULL, NULL, 'student186@gmail.com', NULL, '2020-04-28 23:56:33', '$2y$10$u7vuWsXRPuBywI5VozJp3OrytHufbksAGA8AqyxbtGFeD54g3FDZy', NULL, 4),
(188, 'alexander tutee  187', NULL, NULL, 'student187@gmail.com', NULL, '2020-04-28 23:56:33', '$2y$10$egVMCopBWbV6gf4kq9DCu.XQUGZSxm6BYkfRpvynY94e.UTjt0yai', NULL, 4),
(189, 'alexander tutee  188', NULL, NULL, 'student188@gmail.com', NULL, '2020-04-28 23:56:33', '$2y$10$LDKjlDF.svCfAxcrz2YYGe.whLNMdM/Qiqg6w0RmNbl6UlzeRlvkm', NULL, 4),
(190, 'alexander tutee  189', NULL, NULL, 'student189@gmail.com', NULL, '2020-04-28 23:56:33', '$2y$10$uGfSIofTmAEZZNZTOHY33O9kBBP.yONRIFkKUSb0vAD9bufObnK22', NULL, 4),
(191, 'alexander tutee  190', NULL, NULL, 'student190@gmail.com', NULL, '2020-04-28 23:56:33', '$2y$10$i13z4haZ1bJtms8yh5OGDuUuLMaMFgocHKw3Dy.XZMBYOvbyaT5l6', NULL, 4),
(192, 'alexander tutee  191', NULL, NULL, 'student191@gmail.com', NULL, '2020-04-28 23:56:33', '$2y$10$RweSQphTZoiIBJF4cUOQ8eMhaGX6bsAue.eeMKp3JBYNZELbjRyu2', NULL, 4),
(193, 'alexander tutee  192', NULL, NULL, 'student192@gmail.com', NULL, '2020-04-28 23:56:33', '$2y$10$vJfINxywWwRw234aiALUOOf6ONe.0FCOVz7p8Gt5b013rSkMOrl5K', NULL, 4),
(194, 'alexander tutee  193', NULL, NULL, 'student193@gmail.com', NULL, '2020-04-28 23:56:33', '$2y$10$ar9CChN3m3SbcGUjWQeSbuHnh/moU/aQwjzXaa5.5RIjBYMZN1ndW', NULL, 4),
(195, 'alexander tutee  194', NULL, NULL, 'student194@gmail.com', NULL, '2020-04-28 23:56:33', '$2y$10$MuCjOAOBOLpWBNvUZoxQsue953ab1q24JfHCbSgVwEPexJxhv9RJa', NULL, 4),
(196, 'alexander tutee  195', NULL, NULL, 'student195@gmail.com', NULL, '2020-04-28 23:56:34', '$2y$10$iHYpOY8lmzu9PU8/WwjYv.Dv5sZBoGVGxHw3aNVwf3qoVq5Y7RBjC', NULL, 4),
(197, 'alexander tutee  196', NULL, NULL, 'student196@gmail.com', NULL, '2020-04-28 23:56:34', '$2y$10$GrPmM62uzjumhiwoXXFkjOknoDt/dXyhsmw39l6Ig2d4AUtFfV.ke', NULL, 4),
(198, 'alexander tutee  197', NULL, NULL, 'student197@gmail.com', NULL, '2020-04-28 23:56:34', '$2y$10$rQ5WXCD5C1YvgStu2qpndOJbVXTwSG33mTCzLrlo7bIJlXGv1uJZa', NULL, 4),
(199, 'alexander tutee  198', NULL, NULL, 'student198@gmail.com', NULL, '2020-04-28 23:56:34', '$2y$10$.0otXXoaEqHypRzdwLaYvecPTiheYemf9SjYhe4JyH2R7RkHB9AKm', NULL, 4),
(200, 'alexander tutee  199', NULL, NULL, 'student199@gmail.com', NULL, '2020-04-28 23:56:34', '$2y$10$dIbqAqvXRViiadR4jEZI1.T7HLpTlIMfUZoIZ9rViBj9BHGruWbpu', NULL, 4),
(201, 'Maria Tutor  0', NULL, NULL, 'tutor0@gmail.com', NULL, '2020-04-28 23:59:25', '$2y$10$G/1kY7FzFJRQ9D.rBO/OR.gFQkW0bUeW.0XONpjQ/HIbTnsHn/YIa', NULL, 3),
(202, 'Maria Tutor  1', NULL, NULL, 'tutor1@gmail.com', NULL, '2020-04-28 23:59:25', '$2y$10$AinPqtNp1HcTJ9JiHtFhuejMYSVt4ya0iX6N.eOhSRgRtUofqVMMy', NULL, 3),
(203, 'Maria Tutor  2', NULL, NULL, 'tutor2@gmail.com', NULL, '2020-04-28 23:59:25', '$2y$10$EcSG//xotqC2ppSz0W0nEexOEkmqs/nidgA/CgabyOh9VZiYmjkle', NULL, 3),
(204, 'Maria Tutor  3', NULL, NULL, 'tutor3@gmail.com', NULL, '2020-04-28 23:59:25', '$2y$10$521F2o45Uo7hGL/Paksv6uI37p/YYs8DUu78cscFYcghNAB.Ob0em', NULL, 3),
(205, 'Maria Tutor  4', NULL, NULL, 'tutor4@gmail.com', NULL, '2020-04-28 23:59:25', '$2y$10$xEJdxAIBl4iQdGh4fzUaP.Jn2yMY23SzoxOVAj.VuyMWKEBMPJwsi', NULL, 3),
(206, 'Maria Tutor  5', NULL, NULL, 'tutor5@gmail.com', NULL, '2020-04-28 23:59:25', '$2y$10$susAvBFhjcau84veVHCGUOUS.YQfH6Jm5FY8nqdE7xHHQD5aitEta', NULL, 3),
(207, 'Maria Tutor  6', NULL, NULL, 'tutor6@gmail.com', NULL, '2020-04-28 23:59:25', '$2y$10$lq10Ccb4vRv88VLjNSwp4OasczXVSdvuKyk6.XFSwVPS3KmYRLBRa', NULL, 3),
(208, 'Maria Tutor  7', NULL, NULL, 'tutor7@gmail.com', NULL, '2020-04-28 23:59:25', '$2y$10$uunFeKHvydVnoD8zWQXFFuQzrz60/hTO3aTtiJ9ElwPchH8hMzAnO', NULL, 3),
(209, 'Maria Tutor  8', NULL, NULL, 'tutor8@gmail.com', NULL, '2020-04-28 23:59:25', '$2y$10$RblTXXLkDVuY4t5J0sdh3.rb0RYrV6LqGQG8.Q3E0M466Ju8dZo0u', NULL, 3),
(210, 'Maria Tutor  9', NULL, NULL, 'tutor9@gmail.com', NULL, '2020-04-28 23:59:25', '$2y$10$43SdLF6CyJT55u1NNQQkoeFkTT1YfdpmVA4paBF4LL4BInn8O19Cy', NULL, 3),
(212, 'John which staff  0', NULL, NULL, 'staff0@gmail.com', NULL, '2020-04-29 00:02:30', '$2y$10$xfIgLdICGGQiwQ6FwEQDAO1UYahr9VKR3RPTrZpQPiekDdo5UvREG', NULL, 1),
(213, 'John which staff  1', NULL, NULL, 'staff1@gmail.com', NULL, '2020-04-29 00:02:30', '$2y$10$3lYxyqFj3B1oIP78KjUcYu4XF0v8erg8aFsuW2HDJNiqcEGvBA.zG', NULL, 1),
(214, 'John which staff  2', NULL, NULL, 'staff2@gmail.com', NULL, '2020-04-29 00:02:30', '$2y$10$tUde./BCKEjC/AQJcpFknOK2gIMk7cGruTcaHi/w8IkfkCuWk2Qey', NULL, 1),
(215, 'John which staff  3', NULL, NULL, 'staff3@gmail.com', NULL, '2020-04-29 00:02:30', '$2y$10$vKFqD0LkCFchj3Gf.cTJdecpoiAW/Jh4DBU7KUTOUE6nw7n1YpeLG', NULL, 1),
(216, 'John which staff  4', NULL, NULL, 'staff4@gmail.com', NULL, '2020-04-29 00:02:30', '$2y$10$61ESJ9hDOU5uAjgqZUL7aOoaZMNFOxlAyQv/ezMwgwuP0g8GDHY7m', NULL, 1),
(217, 'John which staff  5', NULL, NULL, 'staff5@gmail.com', NULL, '2020-04-29 00:02:30', '$2y$10$WdrWgA06N0siksEy9ejL4.7nF0dvQXQBdOO9OZk26sgqDQ75waUhu', NULL, 1),
(218, 'John which staff  6', NULL, NULL, 'staff6@gmail.com', NULL, '2020-04-29 00:02:30', '$2y$10$ln9Pc95SFY8JAf/eh1a2UecC927EQ.uNj4C6pz7vJlnwX.DTFD//a', NULL, 1),
(219, 'John which staff  7', NULL, NULL, 'staff7@gmail.com', NULL, '2020-04-29 00:02:30', '$2y$10$XSuFbxBpa7qvxjgDK5z.uOxZCcS0bzeR4gwDe2BIjZqqy2y1dt4Va', NULL, 1),
(220, 'John which staff  8', NULL, NULL, 'staff8@gmail.com', NULL, '2020-04-29 00:02:30', '$2y$10$cnHz0vEYQUiWwot5YIAx/ecu4mHQMiaKoA06H9sBQKuOjuM8fXbmu', NULL, 1),
(221, 'John which staff  9', NULL, NULL, 'staff9@gmail.com', NULL, '2020-04-29 00:02:31', '$2y$10$ti/1TqcdG8ExNp/vdqWP..V3TlBrEcdMSH8GH.9avrLqzOOIFiFfG', NULL, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_id` (`user_id`),
  ADD KEY `document_id` (`document_id`);

--
-- Chỉ mục cho bảng `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreign_created_by` (`created_by`),
  ADD KEY `foreign_ipdated_by` (`updated_by`);

--
-- Chỉ mục cho bảng `document_share`
--
ALTER TABLE `document_share`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_doc_share_doc_id` (`document_id`),
  ADD KEY `fk_shared_user_on_user` (`user_id`);

--
-- Chỉ mục cho bảng `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_id_onemail` (`to_user`);

--
-- Chỉ mục cho bảng `meeting`
--
ALTER TABLE `meeting`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreign_created_by_meeting` (`created_by`),
  ADD KEY `forti_tutor_id_mêting` (`tutor_id`),
  ADD KEY `foreign_student_id_meeting` (`student_id`),
  ADD KEY `fk_doc_id_on_meeting` (`document_id`);

--
-- Chỉ mục cho bảng `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreignkey_from_user` (`from_user`),
  ADD KEY `foreignkey_to_user` (`to_user`),
  ADD KEY `foerignkey_status_id` (`status_id`);

--
-- Chỉ mục cho bảng `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_from_user` (`from_user`),
  ADD KEY `fk_to_user_request` (`to_user`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tutor_registrations`
--
ALTER TABLE `tutor_registrations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_allocation` (`tutor_id`,`student_id`),
  ADD KEY `tutor_registrations_tutor_id_foreign` (`tutor_id`),
  ADD KEY `tutor_registrations_student_id_foreign` (`student_id`),
  ADD KEY `tutor_registrations_created_by_foreign` (`created_by`),
  ADD KEY `tutor_registrations_updated_by_foreign` (`updated_by`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT cho bảng `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `document_share`
--
ALTER TABLE `document_share`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `email`
--
ALTER TABLE `email`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=403;

--
-- AUTO_INCREMENT cho bảng `meeting`
--
ALTER TABLE `meeting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `message`
--
ALTER TABLE `message`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT cho bảng `request`
--
ALTER TABLE `request`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `status`
--
ALTER TABLE `status`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tutor_registrations`
--
ALTER TABLE `tutor_registrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `document_id` FOREIGN KEY (`document_id`) REFERENCES `documents` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `foreign_created_by` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `foreign_ipdated_by` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `document_share`
--
ALTER TABLE `document_share`
  ADD CONSTRAINT `fk_doc_share_doc_id` FOREIGN KEY (`document_id`) REFERENCES `documents` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_shared_user_on_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `email`
--
ALTER TABLE `email`
  ADD CONSTRAINT `fk_user_id_onemail` FOREIGN KEY (`to_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `meeting`
--
ALTER TABLE `meeting`
  ADD CONSTRAINT `fk_doc_id_on_meeting` FOREIGN KEY (`document_id`) REFERENCES `documents` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `foreign_created_by_meeting` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `foreign_student_id_meeting` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `forti_tutor_id_mêting` FOREIGN KEY (`tutor_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `foerignkey_status_id` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `foreignkey_from_user` FOREIGN KEY (`from_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `foreignkey_to_user` FOREIGN KEY (`to_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `fk_from_user` FOREIGN KEY (`from_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_to_user_request` FOREIGN KEY (`to_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tutor_registrations`
--
ALTER TABLE `tutor_registrations`
  ADD CONSTRAINT `tutor_registrations_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tutor_registrations_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tutor_registrations_tutor_id_foreign` FOREIGN KEY (`tutor_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tutor_registrations_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
--
-- Cơ sở dữ liệu: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

--
-- Đang đổ dữ liệu cho bảng `pma__designer_settings`
--

INSERT INTO `pma__designer_settings` (`username`, `settings_data`) VALUES
('root', '{\"angular_direct\":\"direct\",\"relation_lines\":\"true\",\"snap_to_grid\":\"off\"}');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

--
-- Đang đổ dữ liệu cho bảng `pma__favorite`
--

INSERT INTO `pma__favorite` (`username`, `tables`) VALUES
('root', '[{\"db\":\"etutor\",\"table\":\"users\"}]');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Đang đổ dữ liệu cho bảng `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"etutor\",\"table\":\"meeting\"},{\"db\":\"etutor\",\"table\":\"documents\"},{\"db\":\"etutor\",\"table\":\"document_share\"},{\"db\":\"etutor\",\"table\":\"tutor_registrations\"},{\"db\":\"etutor\",\"table\":\"message\"},{\"db\":\"etutor\",\"table\":\"users\"},{\"db\":\"etutor\",\"table\":\"status\"},{\"db\":\"etutor\",\"table\":\"roles\"},{\"db\":\"etutor\",\"table\":\"request\"},{\"db\":\"etutor\",\"table\":\"email\"}]');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

--
-- Đang đổ dữ liệu cho bảng `pma__table_info`
--

INSERT INTO `pma__table_info` (`db_name`, `table_name`, `display_field`) VALUES
('etutor', 'comment', 'comment'),
('etutor', 'email', 'title'),
('etutor', 'meeting', 'name'),
('etutor', 'request', 'name'),
('etutor', 'users', 'name');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Đang đổ dữ liệu cho bảng `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'etutor', 'request', '[]', '2020-04-15 12:14:09'),
('root', 'etutor', 'tutor_registrations', '{\"sorted_col\":\"`tutor_registrations`.`created_at`  DESC\"}', '2020-04-27 07:44:12'),
('root', 'etutor', 'users', '{\"CREATE_TIME\":\"2020-04-12 08:24:38\"}', '2020-04-15 14:24:17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Đang đổ dữ liệu cho bảng `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2020-04-29 08:38:05', '{\"Console\\/Mode\":\"collapse\",\"lang\":\"vi\"}');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Chỉ mục cho bảng `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Chỉ mục cho bảng `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Chỉ mục cho bảng `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Chỉ mục cho bảng `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Chỉ mục cho bảng `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Chỉ mục cho bảng `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Chỉ mục cho bảng `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Chỉ mục cho bảng `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Chỉ mục cho bảng `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Chỉ mục cho bảng `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Chỉ mục cho bảng `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Chỉ mục cho bảng `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Chỉ mục cho bảng `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Cơ sở dữ liệu: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
