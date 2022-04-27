-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2022 at 05:51 PM
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
(14, '2022_02_02_154126_tbl_loai_anh', 4),
(15, '2022_02_02_154134_tbl_taikhoan_roles', 4),
(16, '2022_02_02_154144_tbl_role_quyen', 4),
(26, '2022_02_02_153921_tbl_xe', 5),
(27, '2022_02_02_154052_tbl_hoa_don', 6),
(28, '2022_02_02_154109_tbl_binh_luan', 6),
(29, '2022_02_02_154118_tbl_anh', 6),
(32, '2022_02_02_154101_tbl_chi_tiet_hoa_don', 7),
(35, '2022_03_28_040725_tbl_dichvu', 8);

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
(1011, '1649602986dang-ky-xe-may-bi-mat.jpg', 141, 2, '2022-04-10 08:03:06', '2022-04-10 08:03:06'),
(1012, '164960308420210515_142903.jpg', 142, 2, '2022-04-10 08:04:45', '2022-04-10 08:04:45'),
(1013, '1649603183dang-ky-xe-may-bi-mat.jpg', 143, 2, '2022-04-10 08:06:23', '2022-04-10 08:06:23'),
(1014, '1649603262dang-ky-xe-may-bi-mat.jpg', 144, 2, '2022-04-10 08:07:42', '2022-04-10 08:07:42'),
(1015, '1649603341dang-ky-xe-may-bi-mat.jpg', 145, 2, '2022-04-10 08:09:01', '2022-04-10 08:09:01'),
(1016, '1649604393dang-ky-xe-may-bi-mat.jpg', 146, 2, '2022-04-10 08:26:33', '2022-04-10 08:26:33'),
(1017, '1649604486dang-ky-xe-may-bi-mat.jpg', 147, 2, '2022-04-10 08:28:06', '2022-04-10 08:28:06'),
(1018, '1649604600anhdemo.png', 143, 4, '2022-04-10 08:30:00', '2022-04-10 08:30:00'),
(1019, '1649604600images (2).jpg', 143, 1, '2022-04-10 08:30:00', '2022-04-10 08:30:00'),
(1020, '1649604600images (3).jpg', 143, 1, '2022-04-10 08:30:00', '2022-04-10 08:30:00'),
(1021, '1649604821dang-ky-xe-may-bi-mat.jpg', 142, 3, '2022-04-10 08:33:41', '2022-04-10 08:33:41'),
(1023, '1649604963gia-xe-future-2018-4.jpg', 145, 1, '2022-04-10 08:35:53', '2022-04-10 08:35:53'),
(1024, '1649604963gia-xe-future-2018-4.jpg', 145, 1, '2022-04-10 08:35:53', '2022-04-10 08:35:53'),
(1025, '1649604963gia-xe-future-2018-4.jpg', 145, 4, '2022-04-10 08:36:03', '2022-04-10 08:36:03'),
(1027, '1649605032top-5-xe-so-gia-duoi-20-trieu-dong-tot-nhat-nam-2018-24-1540889332-987-width600height421-xahoi.com.vn-w600-h421.jpg', 147, 4, '2022-04-10 08:37:12', '2022-04-10 08:37:12'),
(1028, 'avarta.jpg', 146, 4, '2022-04-10 08:43:12', '2022-04-10 08:43:12'),
(1029, '1649605551dang-ky-oto-9934-1573013910.jpg', 148, 2, '2022-04-10 08:45:51', '2022-04-10 08:45:51'),
(1030, '1649605645144532-frontview-1-.jpg', 149, 2, '2022-04-10 08:47:26', '2022-04-10 08:47:26'),
(1031, '1649605702images (1).jpg', 149, 3, '2022-04-10 08:48:22', '2022-04-10 08:48:22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_binh_luan`
--

CREATE TABLE `tbl_binh_luan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `thoi_gian_binh_luan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noi_dung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `iMa_khach_hang` bigint(20) UNSIGNED DEFAULT NULL,
  `iMa_xe` bigint(20) UNSIGNED DEFAULT NULL,
  `binh_luan_tra_loi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_binh_luan`
--

INSERT INTO `tbl_binh_luan` (`id`, `thoi_gian_binh_luan`, `noi_dung`, `iMa_khach_hang`, `iMa_xe`, `binh_luan_tra_loi`, `created_at`, `updated_at`) VALUES
(141, '2022-04-10 15:31:09', 'Xe này còn không bạn', 27, 143, 'Bạn vui lòng qua cửa hàng để xem trực tiếp bạn nhé', '2022-04-10 08:31:09', '2022-04-10 08:44:17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chi_tiet_hoa_don`
--

CREATE TABLE `tbl_chi_tiet_hoa_don` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten_phu_tung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `don_gia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iMa_hoa_don` bigint(20) UNSIGNED DEFAULT NULL,
  `sMa_dich_vu` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_chi_tiet_hoa_don`
--

INSERT INTO `tbl_chi_tiet_hoa_don` (`id`, `ten_phu_tung`, `don_gia`, `iMa_hoa_don`, `sMa_dich_vu`, `created_at`, `updated_at`) VALUES
(299, 'Thay lốp trước Xe Wave Alpha 110 1', '100,000VNĐ', 204, 7, '2022-04-10 08:09:27', '2022-04-10 08:09:31'),
(300, 'Thay lốp sau Xe Wave Alpha 110', '150,000VNĐ', 204, 8, '2022-04-10 08:09:28', '2022-04-10 08:09:31'),
(301, 'Thay lốp trước Xe Wave Alpha 110 1', '100,000VNĐ', 205, 7, '2022-04-10 08:22:24', '2022-04-10 08:22:29'),
(302, 'Thay chắn bùn FZ exciter 150 2015-2020', '300,000VNĐ', 205, 113, '2022-04-10 08:22:26', '2022-04-10 08:22:29'),
(303, 'Thay lốp trước Xe Wave Alpha 110 1', '100,000VNĐ', 206, 7, '2022-04-10 08:23:26', '2022-04-10 08:23:31'),
(304, 'Thay Led 3 tim siêu sáng trắng', '100,000VNĐ', 206, 114, '2022-04-10 08:23:28', '2022-04-10 08:23:31'),
(305, 'Thay dầu nhớ vistra 800ML 20W50', '300,000VNĐ', 206, 115, '2022-04-10 08:23:29', '2022-04-10 08:23:31'),
(306, 'Thay đũa xe', '100,000VNĐ', 207, 116, '2022-04-10 08:28:47', '2022-04-10 08:28:51'),
(307, 'Gác chân malay', '200,000VNĐ', 207, 117, '2022-04-10 08:28:48', '2022-04-10 08:28:51');

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
(2, 'Cửa hàng Huy Hùng', '0987654321', 'Thái Bình', '2022-03-04 20:15:18', '2022-03-04 20:15:18'),
(4, 'Cửa hàng Hoàng Hưng', '0339845401', 'Đông La, Thái Bình', '2022-03-10 08:19:14', '2022-03-16 03:05:51'),
(8, 'Cửa hàng Hoàng Đức', '0398454001', 'Thái Bình', '2022-03-14 03:41:39', '2022-03-14 04:09:32'),
(19, 'Cửa hàng Đức Thắng', '0123456789', 'Thái Bình', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dich_vu`
--

CREATE TABLE `tbl_dich_vu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten_dich_vu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia_dich_vu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sCua_hang` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_dich_vu`
--

INSERT INTO `tbl_dich_vu` (`id`, `ten_dich_vu`, `gia_dich_vu`, `sCua_hang`, `created_at`, `updated_at`) VALUES
(7, 'Thay lốp trước Xe Wave Alpha 110 1', '100,000VNĐ', 2, '2022-03-29 08:06:45', '2022-04-09 10:55:56'),
(8, 'Thay lốp sau Xe Wave Alpha 110', '150,000VNĐ', 2, '2022-03-29 08:07:19', '2022-03-29 08:07:19'),
(11, 'Thay xích', '300,000VNĐ', 2, '2022-03-29 08:08:30', '2022-03-29 08:08:30'),
(29, 'Gác chân malay', '100,000VNĐ', 8, '2022-04-01 00:35:47', '2022-04-01 00:35:47'),
(30, 'BEN TỰ ĐỘNG NÂNG YÊN XE MÁY 1', '120,000VNĐ', 8, '2022-04-01 00:36:55', '2022-04-09 20:47:42'),
(35, 'chắn bùn FZ exciter 150 2015-2020', '200,000VNĐ', 2, '2022-04-09 02:01:23', '2022-04-09 02:01:23'),
(112, 'Thay ben tự động nâng yên xe máy', '200,000VNĐ', 2, '2022-04-10 08:11:29', '2022-04-10 08:11:29'),
(113, 'Thay chắn bùn FZ exciter 150 2015-2020', '300,000VNĐ', 2, '2022-04-10 08:12:26', '2022-04-10 08:12:26'),
(114, 'Thay Led 3 tim siêu sáng trắng', '100,000VNĐ', 2, '2022-04-10 08:12:55', '2022-04-10 08:12:55'),
(115, 'Thay dầu nhớ vistra 800ML 20W50', '300,000VNĐ', 2, '2022-04-10 08:14:15', '2022-04-10 08:14:15'),
(116, 'Thay đũa xe', '100,000VNĐ', 19, '2022-04-10 08:17:27', '2022-04-10 08:17:27'),
(117, 'Gác chân malay', '200,000VNĐ', 19, '2022-04-10 08:18:57', '2022-04-10 08:18:57'),
(118, 'THAY DẦU NHỚT VISTRA XE SỐ 800ML 20W50', '200,000VNĐ', 19, '2022-04-10 08:20:40', '2022-04-10 08:20:40'),
(119, 'Thay dầu Nhớt Vilube MOTUL Gama 100 - 20W50 - Chính Hãng', '300,000VNĐ', 19, '2022-04-10 08:21:32', '2022-04-10 08:21:32');

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
(2, 'Honda Winner 150', 1, 1, '2022-02-28 22:15:03', '2022-03-25 08:15:41'),
(3, 'Honda Lead 2021', 1, 2, '2022-02-28 22:16:16', '2022-02-28 22:16:16'),
(4, 'Yamaha Exciter RC 2020', 1, 7, '2022-03-14 07:19:49', '2022-03-14 07:19:49');

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
(1, 'Honda', '2022-02-25 23:25:30', '2022-02-25 23:25:30'),
(2, 'Yamaha', '2022-02-28 22:15:35', '2022-03-25 08:13:40'),
(7, 'Kawasaki', '2022-03-14 07:12:17', '2022-03-14 07:12:17'),
(9, 'SYM', '2022-03-25 07:36:56', '2022-03-25 07:36:56');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hoa_don`
--

CREATE TABLE `tbl_hoa_don` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tong_tien` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngay_lap` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iMa_xe` bigint(20) UNSIGNED NOT NULL,
  `iMa_cua_hang` bigint(20) UNSIGNED NOT NULL,
  `trang_thai` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_hoa_don`
--

INSERT INTO `tbl_hoa_don` (`id`, `tong_tien`, `ngay_lap`, `iMa_xe`, `iMa_cua_hang`, `trang_thai`, `created_at`, `updated_at`) VALUES
(204, NULL, NULL, 141, 2, 'danhandon', '2022-04-10 08:09:31', '2022-04-10 08:23:02'),
(205, NULL, NULL, 142, 2, 'huyhoadon', '2022-04-10 08:22:29', '2022-04-10 08:29:00'),
(206, '500000', '2022-04-10 15:23:54', 143, 2, 'dahoanthanh', '2022-04-10 08:23:31', '2022-04-10 08:23:54'),
(207, NULL, NULL, 144, 19, 'chonhan', '2022-04-10 08:28:51', '2022-04-10 08:28:51');

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
(158, 'Phạm Huy Hoàng', '0339845113', '123456789011', '2003', 'Thái Bình', '2022-04-01', 'Thái Bình', '2022-04-10 08:03:06', '2022-04-10 08:03:06'),
(159, 'Phạm Thị Hằng', '0339845133', '033984513366', '1997', 'Hà Nội', '2022-04-01', 'Hà Nội', '2022-04-10 08:04:44', '2022-04-10 08:04:44'),
(160, 'Phạm Thanh Hương', '0339845666', '033984566622', '1994', 'Hà Nội', '2022-04-01', 'Hà Nội', '2022-04-10 08:06:23', '2022-04-10 08:06:23'),
(161, 'Nguyễn Thanh Tùng', '0339845777', '033984577755', '1991', 'Hà Nội', '2022-04-01', 'Hưng Yên', '2022-04-10 08:07:42', '2022-04-10 08:07:42'),
(162, 'Trương Thị Nguyện', '0339845888', '033984588855', '1994', 'Hà Nội', '2022-04-01', 'Hà Nội', '2022-04-10 08:09:01', '2022-04-10 08:09:01'),
(163, 'Phạm Thị Hằng', '0339845666', '123456789055', '1990', 'Hà Nội', '2022-04-07', 'Hà Nội', '2022-04-10 08:26:33', '2022-04-10 08:26:33'),
(164, 'Trương Thị Nguyện', '0339845011', '123456789004', '1998', 'Hà Nội', '2022-04-02', 'Hà Nội', '2022-04-10 08:28:06', '2022-04-10 08:28:06'),
(165, 'Nguyễn Hồng Tươi', '0339845666', '123456789077', '2001', 'Hưng Yên', '2022-04-01', 'Hưng Yên', '2022-04-10 08:33:41', '2022-04-10 08:33:41'),
(166, 'Nguyễn Thu Phương', '0339845500', '033984550011', '1989', 'Hà Nội', '2022-04-01', 'Hà Nội', '2022-04-10 08:45:51', '2022-04-10 08:45:51'),
(167, 'Hoàng Thị Linh', '0339845551', '033984555166', '1989', 'Hà Nội', '2022-04-01', 'Hà Nội', '2022-04-10 08:47:25', '2022-04-10 08:47:25'),
(168, 'Nguyễn Thị Ngoan', '0339845199', '223456789011', '2001', 'Hà Nội', '2022-04-05', 'Hà Nội', '2022-04-10 08:48:22', '2022-04-10 08:48:22');

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
(2, 'Ảnh giấy tờ', NULL, NULL),
(3, 'Ảnh mua xe', NULL, NULL),
(4, 'Ảnh avarta', NULL, NULL);

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
(1, 'Xe số', '2022-02-25 23:25:37', '2022-02-25 23:25:37'),
(2, 'Xe gia', '2022-02-28 22:14:39', '2022-02-28 22:14:39');

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

--
-- Dumping data for table `tbl_quyen`
--

INSERT INTO `tbl_quyen` (`id`, `ten_quyen`, `created_at`, `updated_at`) VALUES
(1, 'super_admin', NULL, NULL),
(2, 'xoa-phu-tung', NULL, NULL),
(3, 'thong-tin-tai-khoan', NULL, NULL),
(4, 'xem-hoa-don', NULL, NULL);

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

--
-- Dumping data for table `tbl_role_quyen`
--

INSERT INTO `tbl_role_quyen` (`iMa_role`, `iMa_quyen`, `created_at`, `updated_at`) VALUES
(1, 2, NULL, NULL),
(1, 3, NULL, NULL),
(3, 3, NULL, NULL),
(1, 4, NULL, NULL),
(3, 4, NULL, NULL);

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
(2, 3, NULL, NULL),
(1, 1, NULL, NULL),
(5, 3, NULL, NULL),
(8, 3, NULL, NULL),
(9, 3, NULL, NULL),
(16, 3, NULL, NULL),
(4, 3, NULL, NULL),
(27, 2, NULL, NULL);

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
(1, 'Xe mới mua', NULL, NULL),
(2, 'Xe đang đăng web', NULL, NULL),
(3, 'Xe đã có khách mua', NULL, NULL),
(4, 'Gỡ thông tin trên web', NULL, NULL),
(5, 'Hủy đơn sửa chữa', NULL, NULL),
(6, 'Đang sửa chữa', NULL, NULL),
(7, 'Đã hoàn thành sửa chữa', NULL, NULL);

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
  `khoang_gia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iMa_trang_thai` bigint(20) UNSIGNED NOT NULL,
  `iMa_khach_hang_mua_xe` bigint(20) UNSIGNED DEFAULT NULL,
  `iMa_khach_hang_ban_xe` bigint(20) UNSIGNED NOT NULL,
  `iMa_dong_xe` bigint(20) UNSIGNED NOT NULL,
  `nam_dang_ky` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `so_km_da_di` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghi_chu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_xe`
--

INSERT INTO `tbl_xe` (`id`, `so_loai`, `mau_son`, `dung_tich`, `bien_so`, `dang_ky_tai`, `so_may`, `so_khung`, `bao_hiem_xe`, `ngay_mua`, `ngay_ban`, `gia_mua`, `gia_ban`, `gia_dang_web`, `khoang_gia`, `iMa_trang_thai`, `iMa_khach_hang_mua_xe`, `iMa_khach_hang_ban_xe`, `iMa_dong_xe`, `nam_dang_ky`, `so_km_da_di`, `ghi_chu`, `created_at`, `updated_at`) VALUES
(141, '42G8E941', 'Màu xanh', '50cc', '17F-207.33', 'Thái Bình', '17F03939', '42G8E94120', 'checked', '2022-04-10 15:03:06', NULL, '25000000', NULL, NULL, NULL, 6, NULL, 158, 3, NULL, NULL, NULL, '2022-04-10 08:03:06', '2022-04-10 08:09:31'),
(142, '42G8E941', 'Màu đỏ', '50cc', '17F-207.34', 'Thái Bình', '17F03939', '42G8E94120', 'checked', '2022-01-10 15:04:44', '2022-04-10 15:33:41', '23000000', '40000000', NULL, NULL, 3, 165, 159, 3, NULL, NULL, NULL, '2022-04-10 08:04:44', '2022-04-10 08:33:41'),
(143, '42G8E941', 'Màu trắng', '50cc', '17F-207.36', 'Hà Nội', '17F03939', '42G8E94120', 'checked', '2022-04-10 15:06:23', NULL, '26000000', NULL, '25tr', 'Từ 20Đ - 30Đ', 2, NULL, 160, 3, '2018', '14000km', NULL, '2022-04-10 08:06:23', '2022-04-10 08:30:00'),
(144, '42G8E945', 'Màu đỏ', '50cc', '17F-207.38', 'Hà Nội', '03398457', '42G8E94120', 'checked', '2022-04-10 15:07:42', NULL, '13000000', NULL, NULL, NULL, 6, NULL, 161, 3, NULL, NULL, NULL, '2022-04-10 08:07:42', '2022-04-10 08:28:51'),
(145, '42G8E941', 'Màu xanh', '70cc', '17F-207.39', 'Hà Nội', '17F03939', '42G8E94120', 'checked', '2022-04-10 15:09:01', NULL, '15000000', NULL, '40tr', 'Trên 30Đ', 2, NULL, 162, 4, '2015', '10000km', NULL, '2022-04-10 08:09:01', '2022-04-10 08:35:53'),
(146, '42G8E945', 'Màu cam', '70cc', '17F-207.40', 'Hà Nội', '17F03939', '42G8E94120', 'checked', '2022-04-10 15:26:33', NULL, '17000000', NULL, '30tr', 'Trên 30Đ', 2, NULL, 163, 3, '2021', '4000km', NULL, '2022-04-10 08:26:33', '2022-04-10 08:43:12'),
(147, '42G8E955', 'Màu xám', '80cc', '17F-207.50', 'Hà Nội', '17F03939', '42G8E94120', 'checked', '2022-04-10 15:28:06', NULL, '18000000', NULL, '30tr', 'Trên 30Đ', 2, NULL, 164, 3, '2020', '9000km', NULL, '2022-04-10 08:28:06', '2022-04-10 08:36:55'),
(148, '42G8E941', 'Màu trắng', '80cc', '17F-207.38', 'Hà Nội', '17F03939', '42G8E94123', 'checked', '2022-02-10 15:45:51', NULL, '17000000', NULL, NULL, NULL, 1, NULL, 166, 4, NULL, NULL, NULL, '2022-04-10 08:45:51', '2022-04-10 08:45:51'),
(149, '42G8E955', 'Màu đỏ', '50cc', '17F-207.41', 'Hà Nội', '17F03955', '42G8E94177', 'checked', '2022-04-10 15:47:25', '2022-04-10 15:48:22', '18000000', '30000000', NULL, NULL, 3, 168, 167, 3, NULL, NULL, NULL, '2022-04-10 08:47:25', '2022-04-10 08:48:22');

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
(1, 'admin', '0339845495', NULL, '$2y$10$jcu48/JF6kLae4HsM.q7i.gwendm8ngTK3aEN3CJflVqDwPiYeI3C', '2IpLjO84FjYvO4tPxHFTsfG7NbQzN7EjY4TJK6RdY31h6kGEBeBH6sOx3VsY', '2022-02-25 23:21:38', '2022-03-25 10:11:53'),
(2, 'Cửa hàng Đức Thắng', '0123456789', NULL, '$2y$10$yMqU1Grcd96MFfFGmNCsseV0xUlj3x7Ea18ulfxb9kpqgKJU9ieCi', NULL, '2022-02-25 23:26:38', '2022-03-20 03:59:50'),
(4, 'Cửa hàng Hoàng Hưng', '0339845401', NULL, '$2y$10$yTUEysaxPyKkuzlFoxC5GO.HSwqSHI5YbUGXKB40fpc5Xgj3aqZkG', NULL, '2022-03-03 01:22:24', '2022-03-25 20:07:06'),
(5, 'Cửa hàng Huy Hùng', '0987654321', NULL, '$2y$10$dZXReC6U3k4DjVjcbIIoEerLJEzlyGfOMkvVuN4jZ6oYuHHgiWRIu', 'L6uTessG8zm7KuBznm9JLmR18npOEFlOzv3rheZY935UZtLthDkDdhRTMFEM', '2022-03-04 20:15:18', '2022-03-25 20:07:27'),
(8, 'Cửa hàng Hoàng Đức', '0398454001', NULL, '$2y$10$3xVwaAnHr/VcKFYbys1W9efw.fKDOen8goZPg9ijzLR9Fke7OR.hm', NULL, '2022-03-10 08:20:31', '2022-03-21 00:46:02'),
(9, 'Cửa hàng Hoàng Nhất', '0339845402', NULL, '$2y$10$ZxPMv.kTECGQ1UGgQVYrqeE8jgl800pqbaEUdVcNmNvpdM1Gb9AP6', NULL, '2022-03-10 08:22:34', '2022-03-10 08:22:34'),
(16, 'Cửa hàng Hoàng Đức Số 4', '0339845431', NULL, '$2y$10$OXq9zQ/0KOMbW7hBoS2g9exvUiPNrbTGzPedprqIb4YzTIi7OD.Fq', NULL, '2022-03-23 06:57:52', '2022-03-25 20:07:18'),
(27, 'Phạm Ngọc Hân', '0339845777', NULL, '$2y$10$HnxKvHtpPBBkRAZoFim/uuCUf7yYdY6U.pSdGGK1fWAfHnBJBJbLm', NULL, '2022-04-10 08:30:44', '2022-04-10 08:30:44');

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
-- Indexes for table `tbl_chi_tiet_hoa_don`
--
ALTER TABLE `tbl_chi_tiet_hoa_don`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_chi_tiet_hoa_don_ima_hoa_don_foreign` (`iMa_hoa_don`),
  ADD KEY `tbl_chi_tiet_hoa_don_sma_dich_vu_foreign` (`sMa_dich_vu`);

--
-- Indexes for table `tbl_cua_hang_lien_ket`
--
ALTER TABLE `tbl_cua_hang_lien_ket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_dich_vu`
--
ALTER TABLE `tbl_dich_vu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_dich_vu_scua_hang_foreign` (`sCua_hang`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_anh`
--
ALTER TABLE `tbl_anh`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1032;

--
-- AUTO_INCREMENT for table `tbl_binh_luan`
--
ALTER TABLE `tbl_binh_luan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `tbl_chi_tiet_hoa_don`
--
ALTER TABLE `tbl_chi_tiet_hoa_don`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=308;

--
-- AUTO_INCREMENT for table `tbl_cua_hang_lien_ket`
--
ALTER TABLE `tbl_cua_hang_lien_ket`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_dich_vu`
--
ALTER TABLE `tbl_dich_vu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `tbl_dong_xe`
--
ALTER TABLE `tbl_dong_xe`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_hang_xe`
--
ALTER TABLE `tbl_hang_xe`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_hoa_don`
--
ALTER TABLE `tbl_hoa_don`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;

--
-- AUTO_INCREMENT for table `tbl_khach_hang`
--
ALTER TABLE `tbl_khach_hang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `tbl_loai_anh`
--
ALTER TABLE `tbl_loai_anh`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_loai_xe`
--
ALTER TABLE `tbl_loai_xe`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_quyen`
--
ALTER TABLE `tbl_quyen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_trang_thai`
--
ALTER TABLE `tbl_trang_thai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_xe`
--
ALTER TABLE `tbl_xe`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

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
-- Constraints for table `tbl_chi_tiet_hoa_don`
--
ALTER TABLE `tbl_chi_tiet_hoa_don`
  ADD CONSTRAINT `tbl_chi_tiet_hoa_don_ima_hoa_don_foreign` FOREIGN KEY (`iMa_hoa_don`) REFERENCES `tbl_hoa_don` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_chi_tiet_hoa_don_sma_dich_vu_foreign` FOREIGN KEY (`sMa_dich_vu`) REFERENCES `tbl_dich_vu` (`id`);

--
-- Constraints for table `tbl_dich_vu`
--
ALTER TABLE `tbl_dich_vu`
  ADD CONSTRAINT `tbl_dich_vu_scua_hang_foreign` FOREIGN KEY (`sCua_hang`) REFERENCES `tbl_cua_hang_lien_ket` (`id`) ON DELETE CASCADE;

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
