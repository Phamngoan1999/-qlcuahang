-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2022 at 03:53 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_quanlyhonghoan`
--

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_02_02_153930_tbl_cua_hang_lien_ket', 1),
(6, '2022_02_02_153940_tbl_trang_thai', 1),
(7, '2022_02_02_153948_tbl_khach_hang', 1),
(8, '2022_02_02_154006_tbl_hang_xe', 2),
(9, '2022_02_02_154014_tbl_loai_xe', 2),
(10, '2022_02_02_154023_tbl_quyen', 2),
(11, '2022_02_02_154031_tbl_roles', 2),
(12, '2022_02_02_153958_tbl_dong_xe', 3),
(13, '2022_02_02_154101_tbl_chi_tiet_hoa_don', 3),
(14, '2022_02_02_154126_tbl_loai_anh', 4),
(15, '2022_02_02_154134_tbl_taikhoan_roles', 4),
(16, '2022_02_02_154144_tbl_role_quyen', 4),
(26, '2022_02_02_153921_tbl_xe', 5),
(27, '2022_02_02_154052_tbl_hoa_don', 6),
(28, '2022_02_02_154109_tbl_binh_luan', 6),
(29, '2022_02_02_154118_tbl_anh', 6);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_anh`
--

CREATE TABLE `tbl_anh` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `duong_dan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iMa_xe` bigint(20) UNSIGNED NOT NULL,
  `iMa_loai_anh` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_anh`
--

INSERT INTO `tbl_anh` (`id`, `duong_dan`, `iMa_xe`, `iMa_loai_anh`, `created_at`, `updated_at`) VALUES
(1, '1645859016london-2393098.jpg', 1, 2, '2022-02-26 00:03:36', '2022-02-26 00:03:36'),
(2, '1645859016mau-toc-tem-nu-dep-25.jpg', 1, 2, '2022-02-26 00:03:36', '2022-02-26 00:03:36'),
(3, '1645859016217674062_278888420681021_3583001458844245238_n.jpg', 1, 1, '2022-02-26 00:03:37', '2022-02-26 00:03:37'),
(4, '1645859017Ảnh-hoa-cúc-họa-mi-cho-máy-tính.jpg', 1, 1, '2022-02-26 00:03:37', '2022-02-26 00:03:37'),
(5, '1645859104london-2393098.jpg', 2, 2, '2022-02-26 00:05:04', '2022-02-26 00:05:04'),
(6, '1645859104mau-toc-tem-nu-dep-25.jpg', 2, 2, '2022-02-26 00:05:04', '2022-02-26 00:05:04'),
(7, '16458591045-407x275.png', 2, 1, '2022-02-26 00:05:04', '2022-02-26 00:05:04'),
(8, '164585910420210515_142903.jpg', 2, 1, '2022-02-26 00:05:05', '2022-02-26 00:05:05'),
(9, '164585910520210515_142917.jpg', 2, 1, '2022-02-26 00:05:07', '2022-02-26 00:05:07'),
(10, '1645859107217674062_278888420681021_3583001458844245238_n.jpg', 2, 1, '2022-02-26 00:05:07', '2022-02-26 00:05:07'),
(11, '1645859107Ảnh-hoa-cúc-họa-mi-cho-máy-tính.jpg', 2, 1, '2022-02-26 00:05:07', '2022-02-26 00:05:07'),
(12, '1645859107Hãy_trao_cho_anh.jpg', 2, 1, '2022-02-26 00:05:07', '2022-02-26 00:05:07'),
(13, '1645859107import_database.png', 2, 1, '2022-02-26 00:05:07', '2022-02-26 00:05:07'),
(14, '1645859107kem_3665_e20fb15be0124876be19a95ac11d926d_master.png', 2, 1, '2022-02-26 00:05:07', '2022-02-26 00:05:07'),
(15, '1645859107london-2393098.jpg', 2, 1, '2022-02-26 00:05:08', '2022-02-26 00:05:08'),
(16, '1645859108mau-toc-tem-nu-dep-25.jpg', 2, 1, '2022-02-26 00:05:08', '2022-02-26 00:05:08'),
(17, '1645859724london-2393098.jpg', 3, 2, '2022-02-26 00:15:24', '2022-02-26 00:15:24'),
(18, '1645859724london-2393098.jpg', 3, 1, '2022-02-26 00:15:24', '2022-02-26 00:15:24'),
(19, '1645859724mau-toc-tem-nu-dep-25.jpg', 3, 1, '2022-02-26 00:15:24', '2022-02-26 00:15:24'),
(20, '1645862194london-2393098.jpg', 4, 2, '2022-02-26 00:56:34', '2022-02-26 00:56:34'),
(21, '1645862194mau-toc-tem-nu-dep-25.jpg', 4, 2, '2022-02-26 00:56:34', '2022-02-26 00:56:34'),
(22, '1645862194Ảnh-hoa-cúc-họa-mi-cho-máy-tính.jpg', 4, 1, '2022-02-26 00:56:35', '2022-02-26 00:56:35'),
(23, '1645862195Hãy_trao_cho_anh.jpg', 4, 1, '2022-02-26 00:56:35', '2022-02-26 00:56:35'),
(24, '1645862248mau-toc-tem-nu-dep-25.jpg', 5, 2, '2022-02-26 00:57:28', '2022-02-26 00:57:28'),
(25, '1645862248london-2393098.jpg', 5, 1, '2022-02-26 00:57:28', '2022-02-26 00:57:28'),
(26, '1645864887london-2393098.jpg', 6, 2, '2022-02-26 01:41:28', '2022-02-26 01:41:28'),
(27, '1645864888london-2393098.jpg', 6, 1, '2022-02-26 01:41:28', '2022-02-26 01:41:28'),
(28, '1645865587london-2393098.jpg', 7, 2, '2022-02-26 01:53:07', '2022-02-26 01:53:07'),
(29, '1645865587london-2393098.jpg', 7, 1, '2022-02-26 01:53:08', '2022-02-26 01:53:08'),
(30, '1645869481217674062_278888420681021_3583001458844245238_n.jpg', 8, 2, '2022-02-26 02:58:01', '2022-02-26 02:58:01'),
(31, '1645869481Ảnh-hoa-cúc-họa-mi-cho-máy-tính.jpg', 8, 2, '2022-02-26 02:58:01', '2022-02-26 02:58:01'),
(32, '1645869485217674062_278888420681021_3583001458844245238_n.jpg', 9, 2, '2022-02-26 02:58:05', '2022-02-26 02:58:05'),
(33, '1645869485Ảnh-hoa-cúc-họa-mi-cho-máy-tính.jpg', 9, 2, '2022-02-26 02:58:05', '2022-02-26 02:58:05'),
(34, '1645869548217674062_278888420681021_3583001458844245238_n.jpg', 10, 2, '2022-02-26 02:59:08', '2022-02-26 02:59:08'),
(35, '1645869548Ảnh-hoa-cúc-họa-mi-cho-máy-tính.jpg', 10, 2, '2022-02-26 02:59:08', '2022-02-26 02:59:08'),
(36, '1645869643217674062_278888420681021_3583001458844245238_n.jpg', 11, 2, '2022-02-26 03:00:43', '2022-02-26 03:00:43'),
(37, '1645869643Ảnh-hoa-cúc-họa-mi-cho-máy-tính.jpg', 11, 2, '2022-02-26 03:00:44', '2022-02-26 03:00:44'),
(44, '16459429535-407x275.png', 16, 2, '2022-02-26 23:22:34', '2022-02-26 23:22:34'),
(45, '164594295420210515_142903.jpg', 16, 2, '2022-02-26 23:22:35', '2022-02-26 23:22:35'),
(46, '164594295520210515_142917.jpg', 16, 2, '2022-02-26 23:22:37', '2022-02-26 23:22:37'),
(47, '1645942957217674062_278888420681021_3583001458844245238_n.jpg', 16, 2, '2022-02-26 23:22:37', '2022-02-26 23:22:37'),
(48, '16459460905-407x275.png', 17, 2, '2022-02-27 00:14:50', '2022-02-27 00:14:50');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_binh_luan`
--

CREATE TABLE `tbl_binh_luan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `thoi_gian_binh_luan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noi_dung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iMa_khach_hang` bigint(20) UNSIGNED NOT NULL,
  `iMa_xe` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cua_hang_lien_ket`
--

CREATE TABLE `tbl_cua_hang_lien_ket` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten_cua_hang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_dien_thoai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi_cua_hang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_cua_hang_lien_ket`
--

INSERT INTO `tbl_cua_hang_lien_ket` (`id`, `ten_cua_hang`, `so_dien_thoai`, `dia_chi_cua_hang`, `created_at`, `updated_at`) VALUES
(1, 'Cửa hàng Đức Thắng', '0123456789', 'Thái Bình', '2022-02-25 23:26:38', '2022-02-25 23:26:38');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dong_xe`
--

CREATE TABLE `tbl_dong_xe` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten_dong_xe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iMa_loai_xe` bigint(20) UNSIGNED NOT NULL,
  `iMa_hang_xe` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_dong_xe`
--

INSERT INTO `tbl_dong_xe` (`id`, `ten_dong_xe`, `iMa_loai_xe`, `iMa_hang_xe`, `created_at`, `updated_at`) VALUES
(1, 'Yamaha Exciter RC 2020', 1, 1, '2022-02-25 23:26:05', '2022-02-25 23:26:05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hang_xe`
--

CREATE TABLE `tbl_hang_xe` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten_hang_xe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_hang_xe`
--

INSERT INTO `tbl_hang_xe` (`id`, `ten_hang_xe`, `created_at`, `updated_at`) VALUES
(1, 'Honda', '2022-02-25 23:25:30', '2022-02-25 23:25:30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hoa_don`
--

CREATE TABLE `tbl_hoa_don` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tong_tien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_lap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iMa_xe` bigint(20) UNSIGNED NOT NULL,
  `iMa_cua_hang` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_khach_hang`
--

CREATE TABLE `tbl_khach_hang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ho_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_dien_thoai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_CMND` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nam_sinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noi_cu_tru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cap_ngay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noi_cap_CMND` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_khach_hang`
--

INSERT INTO `tbl_khach_hang` (`id`, `ho_ten`, `so_dien_thoai`, `so_CMND`, `nam_sinh`, `noi_cu_tru`, `cap_ngay`, `noi_cap_CMND`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '2022', '2022', '1', '2022-02-17', '1', '2022-02-25 23:27:53', '2022-02-25 23:27:53'),
(2, '1', '1', '2022', '2022', '1', '2022-02-17', '1', '2022-02-25 23:28:35', '2022-02-25 23:28:35'),
(3, '1', '1', '2022', '2022', '1', '2022-02-17', '1', '2022-02-25 23:29:17', '2022-02-25 23:29:17'),
(4, '3', '3', '3', '2021', '3', '2022-02-18', '3', '2022-02-25 23:32:34', '2022-02-25 23:32:34'),
(5, '4', '4', '4', '2021', '4', '2022-02-11', '4', '2022-02-25 23:35:54', '2022-02-25 23:35:54'),
(6, '5', '5', '5', '2020', '5', '2022-02-17', '5', '2022-02-25 23:36:50', '2022-02-25 23:36:50'),
(7, '6', '6', '6', '2021', '6', '2022-02-11', '6', '2022-02-25 23:38:16', '2022-02-25 23:38:16'),
(8, '1', '1', '1', '2021', '1', '2022-02-04', '1', '2022-02-25 23:48:20', '2022-02-25 23:48:20'),
(9, '1', '1', '1', '2021', '1', '2022-02-04', '1', '2022-02-25 23:54:08', '2022-02-25 23:54:08'),
(10, '2', '2', '2', '2020', '2', '2022-02-24', '2', '2022-02-26 00:03:36', '2022-02-26 00:03:36'),
(11, '3', '3', '3', '2020', '3', '2022-02-11', '3', '2022-02-26 00:05:04', '2022-02-26 00:05:04'),
(12, '3', '3', '3', '2019', '3', '2022-02-17', '3', '2022-02-26 00:15:23', '2022-02-26 00:15:23'),
(13, '5', '5', '5', '2019', '5', '2022-02-25', '5', '2022-02-26 00:56:34', '2022-02-26 00:56:34'),
(14, '6', '6', '6', '2022', '6', '2022-02-17', '6', '2022-02-26 00:57:28', '2022-02-26 00:57:28'),
(15, 'Phạm Ngoãn', '0987654321', '1234567890', '2022', 'Thái Bình', '2022-02-03', 'Thái Bình', '2022-02-26 01:41:27', '2022-02-26 01:41:27'),
(16, 'Phạm Ngoãn', '0987654321', '1234567890', '2022', 'Thái Bình', '2022-02-03', 'Thái Bình', '2022-02-26 01:53:07', '2022-02-26 01:53:07'),
(17, 'Phạm Ngoãn', '0123456789', '1234567890', '2009', '1234567890', '2022-02-04', 'Thái Bình', '2022-02-26 02:58:01', '2022-02-26 02:58:01'),
(18, 'Phạm Ngoãn', '0123456789', '1234567890', '2009', '1234567890', '2022-02-04', 'Thái Bình', '2022-02-26 02:58:05', '2022-02-26 02:58:05'),
(19, 'Phạm Ngoãn', '0123456789', '1234567890', '2009', '1234567890', '2022-02-04', 'Thái Bình', '2022-02-26 02:59:08', '2022-02-26 02:59:08'),
(20, 'Phạm Ngoãn', '0123456789', '1234567890', '2009', '1234567890', '2022-02-04', 'Thái Bình', '2022-02-26 03:00:43', '2022-02-26 03:00:43'),
(25, 'Phạm Ngoãn', '0339845495', '1234567890', '2020', 'Thái Bình', '2022-02-04', 'Thái Bình', '2022-02-26 23:22:33', '2022-02-26 23:22:33'),
(26, 'Trương Thị Nguyện', '0339845001', '1234567890', '2018', 'Thái Bình', '2022-02-03', 'Thái Bình', '2022-02-27 00:14:50', '2022-02-27 00:14:50');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_loai_anh`
--

CREATE TABLE `tbl_loai_anh` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten_loai_anh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_loai_anh`
--

INSERT INTO `tbl_loai_anh` (`id`, `ten_loai_anh`, `created_at`, `updated_at`) VALUES
(1, 'Ảnh Đăng web', NULL, NULL),
(2, 'Ảnh giấy tờ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_loai_xe`
--

CREATE TABLE `tbl_loai_xe` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten_loai_xe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_loai_xe`
--

INSERT INTO `tbl_loai_xe` (`id`, `ten_loai_xe`, `created_at`, `updated_at`) VALUES
(1, 'Xe số', '2022-02-25 23:25:37', '2022-02-25 23:25:37');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quyen`
--

CREATE TABLE `tbl_quyen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten_quyen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten_roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vai_tro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`id`, `ten_roles`, `vai_tro`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Quản lý', NULL, NULL),
(2, 'nguoidung', 'Người dùng', NULL, NULL),
(3, 'cuahanglienket', 'Cửa hàng liên kết', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role_quyen`
--

CREATE TABLE `tbl_role_quyen` (
  `iMa_role` bigint(20) UNSIGNED NOT NULL,
  `iMa_quyen` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_taikhoan_roles`
--

CREATE TABLE `tbl_taikhoan_roles` (
  `iMa_tai_khoan` bigint(20) UNSIGNED NOT NULL,
  `iMa_role` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_taikhoan_roles`
--

INSERT INTO `tbl_taikhoan_roles` (`iMa_tai_khoan`, `iMa_role`, `created_at`, `updated_at`) VALUES
(1, 2, NULL, NULL),
(2, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_trang_thai`
--

CREATE TABLE `tbl_trang_thai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten_trang_thai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_trang_thai`
--

INSERT INTO `tbl_trang_thai` (`id`, `ten_trang_thai`, `created_at`, `updated_at`) VALUES
(1, 'Xe mới mua', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_xe`
--

CREATE TABLE `tbl_xe` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `so_loai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mau_son` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dung_tich` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bien_so` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dang_ky_tai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_may` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_khung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bao_hiem_xe` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngay_mua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_ban` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gia_mua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia_ban` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gia_dang_web` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iMa_trang_thai` bigint(20) UNSIGNED NOT NULL,
  `iMa_khach_hang_mua_xe` bigint(20) UNSIGNED DEFAULT NULL,
  `iMa_khach_hang_ban_xe` bigint(20) UNSIGNED NOT NULL,
  `iMa_dong_xe` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_xe`
--

INSERT INTO `tbl_xe` (`id`, `so_loai`, `mau_son`, `dung_tich`, `bien_so`, `dang_ky_tai`, `so_may`, `so_khung`, `bao_hiem_xe`, `ngay_mua`, `ngay_ban`, `gia_mua`, `gia_ban`, `gia_dang_web`, `iMa_trang_thai`, `iMa_khach_hang_mua_xe`, `iMa_khach_hang_ban_xe`, `iMa_dong_xe`, `created_at`, `updated_at`) VALUES
(1, '2', '2', '2', '2', '2', '2', '2', 'checked', '2022-02-26 07:03:36', NULL, '2', NULL, NULL, 1, 1, 10, 1, '2022-02-26 00:03:36', '2022-02-26 00:03:36'),
(2, '3', '3', '3', '3', '3', '3', '3', 'checked', '2022-02-26 07:05:04', NULL, '3', NULL, NULL, 1, NULL, 11, 1, '2022-02-26 00:05:04', '2022-02-26 00:05:04'),
(3, '3', '3', '3', '3', '3', '3', '3', 'checked', '2022-02-26 07:15:23', NULL, '3', NULL, NULL, 1, NULL, 12, 1, '2022-02-26 00:15:24', '2022-02-26 00:15:24'),
(4, '5', '5', '5', '5', '5', '5', '5', 'checked', '2022-02-26 07:56:34', NULL, '5', NULL, NULL, 1, NULL, 13, 1, '2022-02-26 00:56:34', '2022-02-26 00:56:34'),
(5, '6', '6', '6', '6', '6', '6', '6', NULL, '2022-02-26 07:57:28', NULL, '6', NULL, NULL, 1, NULL, 14, 1, '2022-02-26 00:57:28', '2022-02-26 00:57:28'),
(6, '987654', 'Xanh', '6', '6', '6', '6', '1', 'checked', '2022-02-26 08:41:27', NULL, '3', NULL, NULL, 1, NULL, 15, 1, '2022-02-26 01:41:27', '2022-02-26 01:41:27'),
(7, '987654', 'Xanh', '6', '6', '6', '6', '1', 'checked', '2022-02-26 08:53:07', NULL, '3', NULL, NULL, 1, NULL, 16, 1, '2022-02-26 01:53:07', '2022-02-26 01:53:07'),
(8, '03456789', 'Màu xanh', '50', '17F00001', 'Thái Bình', '123456789', '123456789', NULL, '2022-02-26 09:58:01', NULL, '1234567890', NULL, NULL, 1, NULL, 17, 1, '2022-02-26 02:58:01', '2022-02-26 02:58:01'),
(9, '03456789', 'Màu xanh', '50', '17F00001', 'Thái Bình', '123456789', '123456789', NULL, '2022-02-26 09:58:05', NULL, '1234567890', NULL, NULL, 1, NULL, 18, 1, '2022-02-26 02:58:05', '2022-02-26 02:58:05'),
(10, '03456789', 'Màu xanh', '50', '17F00001', 'Thái Bình', '123456789', '123456789', NULL, '2022-02-26 09:59:08', NULL, '1234567890', NULL, NULL, 1, NULL, 19, 1, '2022-02-26 02:59:08', '2022-02-26 02:59:08'),
(11, '03456789', 'Màu xanh', '50', '17F00001', 'Thái Bình', '123456789', '123456789', NULL, '2022-02-26 10:00:43', NULL, '1234567890', NULL, NULL, 1, NULL, 20, 1, '2022-02-26 03:00:43', '2022-02-26 03:00:43'),
(16, '12000001', 'Màu đỏ', '50cc', '17A100011', 'Thái Bình', '400000', '20000', 'checked', '2022-02-27 06:22:33', NULL, '40000', NULL, NULL, 1, NULL, 25, 1, '2022-02-26 23:22:33', '2022-02-26 23:22:33'),
(17, '02222', 'Màu đỏ', '50cc', '17A20001', 'Thái Bình', '03373858365', 'K37263476', NULL, '2022-02-27 07:14:50', NULL, '4000', NULL, NULL, 1, NULL, 26, 1, '2022-02-27 00:14:50', '2022-02-27 00:14:50');

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
(1, 'admin', '0339845495', NULL, '$2y$10$1PSvQyZRGOhuNyuCJQ8.EOZpqTYF/s4xiq5kiJdPaUcDAfXMmwl5K', NULL, '2022-02-25 23:21:38', '2022-02-25 23:21:38'),
(2, 'Cửa hàng Đức Thắng', '0123456789', NULL, '$2y$10$2IIt9vEysIBiEqD3trDc3.UF5owKy47ESSmI5ST3FFwdAyGoQnCG2', NULL, '2022-02-25 23:26:38', '2022-02-25 23:26:38');

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tbl_anh`
--
ALTER TABLE `tbl_anh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_anh_ima_xe_foreign` (`iMa_xe`),
  ADD KEY `tbl_anh_ima_loai_anh_foreign` (`iMa_loai_anh`);

--
-- Indexes for table `tbl_binh_luan`
--
ALTER TABLE `tbl_binh_luan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_binh_luan_ima_khach_hang_foreign` (`iMa_khach_hang`),
  ADD KEY `tbl_binh_luan_ima_xe_foreign` (`iMa_xe`);

--
-- Indexes for table `tbl_cua_hang_lien_ket`
--
ALTER TABLE `tbl_cua_hang_lien_ket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_dong_xe`
--
ALTER TABLE `tbl_dong_xe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_dong_xe_ima_loai_xe_foreign` (`iMa_loai_xe`),
  ADD KEY `tbl_dong_xe_ima_hang_xe_foreign` (`iMa_hang_xe`);

--
-- Indexes for table `tbl_hang_xe`
--
ALTER TABLE `tbl_hang_xe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_hoa_don`
--
ALTER TABLE `tbl_hoa_don`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_hoa_don_ima_xe_foreign` (`iMa_xe`),
  ADD KEY `tbl_hoa_don_ima_cua_hang_foreign` (`iMa_cua_hang`);

--
-- Indexes for table `tbl_khach_hang`
--
ALTER TABLE `tbl_khach_hang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_loai_anh`
--
ALTER TABLE `tbl_loai_anh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_loai_xe`
--
ALTER TABLE `tbl_loai_xe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_quyen`
--
ALTER TABLE `tbl_quyen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_role_quyen`
--
ALTER TABLE `tbl_role_quyen`
  ADD KEY `tbl_role_quyen_ima_role_foreign` (`iMa_role`),
  ADD KEY `tbl_role_quyen_ima_quyen_foreign` (`iMa_quyen`);

--
-- Indexes for table `tbl_taikhoan_roles`
--
ALTER TABLE `tbl_taikhoan_roles`
  ADD KEY `tbl_taikhoan_roles_ima_tai_khoan_foreign` (`iMa_tai_khoan`),
  ADD KEY `tbl_taikhoan_roles_ima_role_foreign` (`iMa_role`);

--
-- Indexes for table `tbl_trang_thai`
--
ALTER TABLE `tbl_trang_thai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_xe`
--
ALTER TABLE `tbl_xe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_xe_ima_khach_hang_mua_xe_foreign` (`iMa_khach_hang_mua_xe`),
  ADD KEY `tbl_xe_ima_khach_hang_ban_xe_foreign` (`iMa_khach_hang_ban_xe`),
  ADD KEY `tbl_xe_ima_dong_xe_foreign` (`iMa_dong_xe`),
  ADD KEY `tbl_xe_ima_trang_thai_foreign` (`iMa_trang_thai`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_anh`
--
ALTER TABLE `tbl_anh`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tbl_binh_luan`
--
ALTER TABLE `tbl_binh_luan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_cua_hang_lien_ket`
--
ALTER TABLE `tbl_cua_hang_lien_ket`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_dong_xe`
--
ALTER TABLE `tbl_dong_xe`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_hang_xe`
--
ALTER TABLE `tbl_hang_xe`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_hoa_don`
--
ALTER TABLE `tbl_hoa_don`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_khach_hang`
--
ALTER TABLE `tbl_khach_hang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_loai_anh`
--
ALTER TABLE `tbl_loai_anh`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_loai_xe`
--
ALTER TABLE `tbl_loai_xe`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_quyen`
--
ALTER TABLE `tbl_quyen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_trang_thai`
--
ALTER TABLE `tbl_trang_thai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_xe`
--
ALTER TABLE `tbl_xe`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_anh`
--
ALTER TABLE `tbl_anh`
  ADD CONSTRAINT `tbl_anh_ima_loai_anh_foreign` FOREIGN KEY (`iMa_loai_anh`) REFERENCES `tbl_loai_anh` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_anh_ima_xe_foreign` FOREIGN KEY (`iMa_xe`) REFERENCES `tbl_xe` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_binh_luan`
--
ALTER TABLE `tbl_binh_luan`
  ADD CONSTRAINT `tbl_binh_luan_ima_khach_hang_foreign` FOREIGN KEY (`iMa_khach_hang`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_binh_luan_ima_xe_foreign` FOREIGN KEY (`iMa_xe`) REFERENCES `tbl_xe` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_dong_xe`
--
ALTER TABLE `tbl_dong_xe`
  ADD CONSTRAINT `tbl_dong_xe_ima_hang_xe_foreign` FOREIGN KEY (`iMa_hang_xe`) REFERENCES `tbl_hang_xe` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_dong_xe_ima_loai_xe_foreign` FOREIGN KEY (`iMa_loai_xe`) REFERENCES `tbl_loai_xe` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_hoa_don`
--
ALTER TABLE `tbl_hoa_don`
  ADD CONSTRAINT `tbl_hoa_don_ima_cua_hang_foreign` FOREIGN KEY (`iMa_cua_hang`) REFERENCES `tbl_cua_hang_lien_ket` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_hoa_don_ima_xe_foreign` FOREIGN KEY (`iMa_xe`) REFERENCES `tbl_xe` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_role_quyen`
--
ALTER TABLE `tbl_role_quyen`
  ADD CONSTRAINT `tbl_role_quyen_ima_quyen_foreign` FOREIGN KEY (`iMa_quyen`) REFERENCES `tbl_quyen` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_role_quyen_ima_role_foreign` FOREIGN KEY (`iMa_role`) REFERENCES `tbl_roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_taikhoan_roles`
--
ALTER TABLE `tbl_taikhoan_roles`
  ADD CONSTRAINT `tbl_taikhoan_roles_ima_role_foreign` FOREIGN KEY (`iMa_role`) REFERENCES `tbl_roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_taikhoan_roles_ima_tai_khoan_foreign` FOREIGN KEY (`iMa_tai_khoan`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_xe`
--
ALTER TABLE `tbl_xe`
  ADD CONSTRAINT `tbl_xe_ima_dong_xe_foreign` FOREIGN KEY (`iMa_dong_xe`) REFERENCES `tbl_dong_xe` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_xe_ima_khach_hang_ban_xe_foreign` FOREIGN KEY (`iMa_khach_hang_ban_xe`) REFERENCES `tbl_khach_hang` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_xe_ima_khach_hang_mua_xe_foreign` FOREIGN KEY (`iMa_khach_hang_mua_xe`) REFERENCES `tbl_khach_hang` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_xe_ima_trang_thai_foreign` FOREIGN KEY (`iMa_trang_thai`) REFERENCES `tbl_trang_thai` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
