-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2022 at 02:37 PM
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
(30, '2022_02_02_154101_tbl_chi_tiet_hoa_don', 7);

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
(781, '1647418691144532-frontview-1-.jpg', 94, 2, '2022-03-16 01:18:11', '2022-03-16 01:18:11'),
(783, '1647419072144532-frontview-1-.jpg', 95, 2, '2022-03-16 01:24:32', '2022-03-16 01:24:32'),
(784, '16474190724461738_e75b5928f02b795a1117ef0dbcc8b980.jpg', 95, 2, '2022-03-16 01:24:32', '2022-03-16 01:24:32'),
(785, '164741907220180805-08-2018-092905-4.jpg', 95, 2, '2022-03-16 01:24:32', '2022-03-16 01:24:32'),
(786, '1647419140images (2).jpg', 94, 4, '2022-03-16 01:25:40', '2022-03-16 01:25:40'),
(787, '1647419140144532-frontview-1-.jpg', 94, 1, '2022-03-16 01:25:41', '2022-03-16 01:25:41'),
(788, '16474191414461738_e75b5928f02b795a1117ef0dbcc8b980.jpg', 94, 1, '2022-03-16 01:25:41', '2022-03-16 01:25:41'),
(789, '164741914120180805-08-2018-092905-4.jpg', 94, 1, '2022-03-16 01:25:41', '2022-03-16 01:25:41'),
(790, '1647419381images (1).jpg', 96, 2, '2022-03-16 01:29:41', '2022-03-16 01:29:41'),
(791, '1647419410honda-wase-4.jpg', 96, 2, '2022-03-16 01:30:10', '2022-03-16 01:30:10'),
(792, '1647425455dang-ky-oto-9934-1573013910.jpg', 97, 2, '2022-03-16 03:10:55', '2022-03-16 03:10:55'),
(793, '1647425686dang-ky-oto-9934-1573013910.jpg', 98, 2, '2022-03-16 03:14:46', '2022-03-16 03:14:46'),
(794, '1647425856dang-ky-oto-9934-1573013910.jpg', 99, 2, '2022-03-16 03:17:36', '2022-03-16 03:17:36'),
(795, '1647426031dang-ky-oto-9934-1573013910.jpg', 100, 2, '2022-03-16 03:20:31', '2022-03-16 03:20:31'),
(796, '1647426243dang-ky-oto-9934-1573013910.jpg', 101, 2, '2022-03-16 03:24:03', '2022-03-16 03:24:03'),
(797, '1647426484dang-ky-oto-9934-1573013910.jpg', 102, 2, '2022-03-16 03:28:04', '2022-03-16 03:28:04'),
(798, '1647426709dang-ky-oto-9934-1573013910.jpg', 103, 2, '2022-03-16 03:31:49', '2022-03-16 03:31:49'),
(799, '1647427014dang-ky-oto-9934-1573013910.jpg', 104, 2, '2022-03-16 03:36:54', '2022-03-16 03:36:54'),
(800, '1647427198dang-ky-oto-9934-1573013910.jpg', 105, 2, '2022-03-16 03:39:58', '2022-03-16 03:39:58'),
(801, '164742731720180805-08-2018-092905-4.jpg', 95, 4, '2022-03-16 03:41:57', '2022-03-16 03:41:57'),
(802, '1647427317images (1).jpg', 95, 1, '2022-03-16 03:41:57', '2022-03-16 03:41:57'),
(803, '1647427317images (2).jpg', 95, 1, '2022-03-16 03:41:57', '2022-03-16 03:41:57'),
(804, '1647427317images (3).jpg', 95, 1, '2022-03-16 03:41:57', '2022-03-16 03:41:57'),
(805, '1647427405144532-frontview-1-.jpg', 105, 4, '2022-03-16 03:43:25', '2022-03-16 03:43:25'),
(806, '16474274054461738_e75b5928f02b795a1117ef0dbcc8b980.jpg', 105, 1, '2022-03-16 03:43:25', '2022-03-16 03:43:25'),
(807, '164742740520180805-08-2018-092905-4.jpg', 105, 1, '2022-03-16 03:43:25', '2022-03-16 03:43:25'),
(808, '16474274051367567636_news.jpg', 105, 1, '2022-03-16 03:43:25', '2022-03-16 03:43:25'),
(810, '1647427495144532-frontview-1-.jpg', 96, 1, '2022-03-16 03:44:55', '2022-03-16 03:44:55'),
(811, '16474274954461738_e75b5928f02b795a1117ef0dbcc8b980.jpg', 96, 1, '2022-03-16 03:44:55', '2022-03-16 03:44:55'),
(812, '164742749520180805-08-2018-092905-4.jpg', 96, 1, '2022-03-16 03:44:55', '2022-03-16 03:44:55'),
(813, '1647427503images (2).jpg', 96, 4, '2022-03-16 03:45:03', '2022-03-16 03:45:03'),
(814, '164742874320180805-08-2018-092905-4.jpg', 98, 4, '2022-03-16 04:05:43', '2022-03-16 04:05:43'),
(815, '1647428743images (2).jpg', 98, 1, '2022-03-16 04:05:43', '2022-03-16 04:05:43'),
(816, '1647428743images (3).jpg', 98, 1, '2022-03-16 04:05:43', '2022-03-16 04:05:43'),
(817, '1647428743images (4).jpg', 98, 1, '2022-03-16 04:05:43', '2022-03-16 04:05:43'),
(818, '1647428895dang-ky-oto-9934-1573013910.jpg', 101, 3, '2022-03-16 04:08:15', '2022-03-16 04:08:15');

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
(113, '2022-03-16 08:34:53', 'Cửa hàng có đầy đủ dịch vụ Sang tên, đổi biển, cấp lại đăng ký cho khách trong thời gian ngắn nhất', 1, 94, NULL, '2022-03-16 01:34:53', '2022-03-16 01:34:53'),
(114, '2022-03-16 08:39:12', 'Xe này còn ko cửa hàng', 11, 94, 'Xe còn nhé, bạn qua cửa hàng xem xe nhé', '2022-03-16 01:39:12', '2022-03-16 04:10:17'),
(115, '2022-03-16 10:42:13', 'Xe này còn ko', 1, 95, NULL, '2022-03-16 03:42:13', '2022-03-16 03:42:13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chi_tiet_hoa_don`
--

CREATE TABLE `tbl_chi_tiet_hoa_don` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten_phu_tung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `don_gia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iMa_hoa_don` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_chi_tiet_hoa_don`
--

INSERT INTO `tbl_chi_tiet_hoa_don` (`id`, `ten_phu_tung`, `don_gia`, `iMa_hoa_don`, `created_at`, `updated_at`) VALUES
(198, 'Sơn lại màu', NULL, 108, '2022-03-16 03:46:00', '2022-03-16 03:46:00'),
(199, 'Thay lốp', NULL, 108, '2022-03-16 03:46:19', '2022-03-16 03:46:19'),
(200, 'Thay gương trái', '400,000VNĐ', 109, '2022-03-16 03:46:45', '2022-03-16 03:50:43'),
(201, 'Thay yếm xe', '500,000VNĐ', 109, '2022-03-16 03:47:12', '2022-03-16 03:50:43'),
(202, 'Sơn lại màu', NULL, 110, '2022-03-16 03:49:18', '2022-03-16 03:49:18'),
(203, 'Thay phanh trái', NULL, 110, '2022-03-16 03:49:18', '2022-03-16 03:49:18'),
(204, 'Rửa xe', NULL, 110, '2022-03-16 03:49:18', '2022-03-16 03:49:18'),
(205, 'Thay đèn pha', '200,000VNĐ', 111, '2022-03-16 03:51:51', '2022-03-16 03:54:23'),
(206, 'Thay đũa xe bánh trước', '100,000VNĐ', 111, '2022-03-16 03:51:51', '2022-03-16 03:54:23');

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
(1, 'Cửa hàng Đức Thắng', '0123456789', 'Thái Bình', '2022-02-25 23:26:38', '2022-02-25 23:26:38'),
(2, 'Cửa hàng Huy Hùng', '0987654321', 'Thái Bình', '2022-03-04 20:15:18', '2022-03-04 20:15:18'),
(4, 'Cửa hàng Hoàng Hưng', '0339845401', 'Đông La, Thái Bình', '2022-03-10 08:19:14', '2022-03-16 03:05:51'),
(8, 'Cửa hàng Hoàng Đức', '0398454001', 'Thái Bình', '2022-03-14 03:41:39', '2022-03-14 04:09:32');

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
(2, 'Honda Vario 2021', 2, 1, '2022-02-28 22:15:03', '2022-02-28 22:15:03'),
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
(2, 'Yamaha', '2022-02-28 22:15:35', '2022-02-28 22:15:35'),
(7, 'Kawasaki', '2022-03-14 07:12:17', '2022-03-14 07:12:17');

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
(108, NULL, NULL, 99, 1, 'chonhan', '2022-03-16 03:46:00', '2022-03-16 03:46:00'),
(109, '900000', '2022-03-16 10:50:43', 103, 2, 'dahoanthanh', '2022-03-16 03:46:45', '2022-03-16 03:50:43'),
(110, NULL, NULL, 97, 8, 'danhandon', '2022-03-16 03:49:18', '2022-03-16 04:01:40'),
(111, '300000', '2022-03-16 10:54:23', 102, 4, 'dahoanthanh', '2022-03-16 03:51:51', '2022-03-16 03:54:23');

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
(108, 'Phạm Huy Hoàng', '0339845495', '152275879', '2008', 'Thái Bình', '2022-03-02', 'Thái Bình', '2022-03-16 01:18:11', '2022-03-16 01:18:11'),
(109, 'Phạm Ngọc Hân', '0339845103', '152275875111', '1974', 'Thái Bình', '2022-03-01', 'Thái Bình', '2022-03-16 01:24:32', '2022-03-16 01:24:32'),
(110, 'Phạm Hồng Huế', '0339845495', '162346357343', '1976', 'Thái Bình', '2022-03-01', 'Thái Bình', '2022-03-16 01:29:41', '2022-03-16 01:29:41'),
(111, 'Nguyễn Thu Phương', '0339845422', '033984542211', '1993', 'Thái Bình', '2022-02-01', 'Thái Bình', '2022-03-16 03:10:55', '2022-03-16 03:10:55'),
(112, 'Hoàng Thị Linh', '0339845033', '152275870000', '1987', 'Thái Bình', '2022-03-01', 'Thái Bình', '2022-03-16 03:14:46', '2022-03-16 03:14:46'),
(113, 'Mai Thị Hải Yến', '0339845011', '0975401537', '1985', 'Thái Bình', '2022-03-01', 'Thái Bình', '2022-03-16 03:20:31', '2022-03-16 03:20:31'),
(114, 'Bùi Thị Duyên', '0987678123', '024117678123', '2003', 'Thái Bình', '2022-03-01', 'Thái Bình', '2022-03-16 03:24:03', '2022-03-16 03:24:03'),
(115, 'Bùi Thị Ngoan', '0349999911', '033349999911', '1993', 'Thái Bình', '2022-03-01', 'Thái Bình', '2022-03-16 03:28:04', '2022-03-16 03:28:04'),
(116, 'Nguyễn Thị Thư', '0339845000', '000004567890', '1986', 'Thái Bình', '2022-03-01', 'Thái Bình', '2022-03-16 03:31:48', '2022-03-16 03:31:48'),
(117, 'Nguyễn Thị Ngoan', '0339845888', '152275879000', '1993', 'Thái Bình', '2022-03-01', 'Thái Bình', '2022-03-16 03:36:53', '2022-03-16 03:36:53'),
(118, 'Nguyễn Thu Huyền', '0339845555', '152275879555', '2001', 'Hà Nội', '2022-03-01', 'Hà Nội', '2022-03-16 03:39:58', '2022-03-16 03:39:58');

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
(2, 'xoa-phu-tung', NULL, NULL);

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
(1, 2, NULL, NULL);

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
(3, 2, NULL, NULL),
(4, 2, NULL, NULL),
(5, 3, NULL, NULL),
(6, 3, NULL, NULL),
(7, 3, NULL, NULL),
(8, 3, NULL, NULL),
(9, 3, NULL, NULL),
(10, 3, NULL, NULL),
(11, 2, NULL, NULL),
(12, 2, NULL, NULL),
(13, 3, NULL, NULL);

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
(94, '42G8E9411360', 'Màu xanh', '50cc', '30E-206.32', 'Thái Bình', '17F0393993', '42G8E94120', 'checked', '2022-03-16 08:18:11', NULL, '12000000', NULL, '20K', 'Từ 20Đ - 30Đ', 2, NULL, 108, 3, '1998', '10kim', NULL, '2022-03-16 01:18:11', '2022-03-16 01:25:40'),
(95, '42G8E9411362', 'Màu đỏ', '70cc', '17F-206.32', 'Thái Bình', '17F0393900', '42G8E94120', 'checked', '2022-03-16 08:24:32', NULL, '13000000', NULL, '25tr', 'Từ 20Đ - 30Đ', 2, NULL, 109, 3, '2022', '10000km', 'Không có ghi chú', '2022-03-16 01:24:32', '2022-03-16 03:41:57'),
(96, '42G8E9411360', 'Màu đỏ', '70cc', '17E-205.32', 'Thái Bình', '17F0393993', '42G8E94120', 'checked', '2022-03-16 08:30:10', NULL, '20000000', NULL, '30tr', 'Trên 30Đ', 2, NULL, 110, 3, '2005', '30tr', NULL, '2022-03-16 01:29:41', '2022-03-16 03:45:03'),
(97, '42G8E9411311', 'Màu xanh', '50cc', '17F-207.32', 'Thái Bình', '17F0393993', '17F0393993', 'checked', '2022-03-16 10:10:55', NULL, '13000000', NULL, NULL, NULL, 6, NULL, 111, 2, NULL, NULL, NULL, '2022-03-16 03:10:55', '2022-03-16 03:49:18'),
(98, '42G8E9411360', 'Màu Đỏ', '50cc', '17F-206.37', 'Thái Bình', '17F0393993', '42G8E9412', 'checked', '2022-03-16 10:14:46', NULL, '16000000', NULL, '19tr', 'Từ 10Đ - 20Đ', 2, NULL, 112, 2, '1998', '3000km', NULL, '2022-03-16 03:14:46', '2022-03-16 04:05:43'),
(99, '42G8E9411666', 'Màu đỏ', '100cc', '27F-206.45', 'Hưng Yên', '17F0393993', '42G8E94300', 'checked', '2022-03-16 10:17:36', NULL, '25000000', NULL, NULL, NULL, 6, NULL, 112, 3, NULL, NULL, NULL, '2022-03-16 03:17:36', '2022-03-16 03:46:00'),
(100, '42G8E9411777', 'Màu xám', '70cc', '17F-216.32', 'Thái Bình', '17F0393993', '42G8E94300', 'checked', '2022-03-16 10:20:31', NULL, '60000000', NULL, NULL, NULL, 1, NULL, 113, 3, NULL, NULL, NULL, '2022-03-16 03:20:31', '2022-03-16 03:20:31'),
(101, '42G8E9411360', 'Màu xám bạc', '50cc', '27E-206.32', 'Thái Bình', '17F0393993', '42G8E94120', 'checked', '2022-03-16 10:24:03', NULL, '25000000', '30000000', NULL, NULL, 3, 108, 114, 4, NULL, NULL, NULL, '2022-03-16 03:24:03', '2022-03-16 04:08:15'),
(102, '42G8E9411444', 'Màu đỏ', '50cc', '17F-207.00', 'Thái Bình', '17F03939222', '42G8E94120', 'checked', '2022-03-16 10:28:04', NULL, '18000000', NULL, NULL, NULL, 7, NULL, 115, 3, NULL, NULL, NULL, '2022-03-16 03:28:04', '2022-03-16 03:54:23'),
(103, '42G8E9411777', 'Màu xanh', '50cc', '17F-20202', 'Thái Bình', '17F0393993', '42G8E9414444', 'checked', '2022-03-16 10:31:48', NULL, '17700000', NULL, NULL, NULL, 7, NULL, 116, 4, NULL, NULL, NULL, '2022-03-16 03:31:48', '2022-03-16 03:50:43'),
(104, '42G8E9411360', 'Màu xanh', '50cc', '30E-206.89', 'Thái Bình', '17F0393993', '42G8E94120', 'checked', '2022-03-16 10:36:53', NULL, '15000000', NULL, NULL, NULL, 1, NULL, 117, 3, NULL, NULL, NULL, '2022-03-16 03:36:54', '2022-03-16 03:36:54'),
(105, '42G8E9411360', 'Màu xanh', '50cc', '18F-256.32', 'Thái Bình', '17F0393922', '42G8E94120', 'checked', '2022-03-16 10:39:58', NULL, '30000000', NULL, '30tr', 'Từ 20Đ - 30Đ', 2, NULL, 118, 3, '2020', '1000km', NULL, '2022-03-16 03:39:58', '2022-03-16 03:43:25');

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
(1, 'admin', '0339845495', NULL, '$2y$10$7XPQpFGtaTLmzOi7oEhvnObBt9CvTtcq8dN5MERE1wCXOvJqDqk4G', 'rLwNMxX7ZN9pjuBJOumGx0RLzfw5fXtUOyd79gsyu2ZvXIxvUV9k8A7WB8c2', '2022-02-25 23:21:38', '2022-03-06 03:41:15'),
(2, 'Cửa hàng Đức Thắng', '0123456789', NULL, '$2y$10$yS3h.qciSU/BQM1H1/SAMekVVEMe32klpgHHmicCXWzZDYIbC6mHC', NULL, '2022-02-25 23:26:38', '2022-03-07 04:03:14'),
(3, 'Pham Thị Ngoãn', '0123456783', NULL, '$2y$10$gvDcufcW7Q76ZB5xKfq/QuUV.pX2hv6XayiSx3bwTP1RHjEWVFi7O', NULL, '2022-03-03 00:58:23', '2022-03-03 00:58:23'),
(4, 'Cửa hàng Hoàng Hưng', '0312987651', NULL, '$2y$10$809w88jMNH9gmDgys5SkkectLseLB/osxlucWSmMckCXYBS3fHwnS', NULL, '2022-03-03 01:22:24', '2022-03-16 03:05:51'),
(5, 'Cửa hàng Huy Hùng', '0987654321', NULL, '$2y$10$9Wl7X84fT2KezFIIHmfJVu3VmRER8E9afv0WtMe38LGielInCbApu', NULL, '2022-03-04 20:15:18', '2022-03-04 20:15:18'),
(6, 'Pham Thị Ngoãn', '0339845491', NULL, '$2y$10$mNO55rx767/q69SGRQZqCeU/omuHDi1NoGAn6WCRbZWbYdDcPYpsK', NULL, '2022-03-06 03:51:43', '2022-03-06 03:51:43'),
(7, 'Cửa hàng Hoàng Hưng', '0339845401', NULL, '$2y$10$7XPQpFGtaTLmzOi7oEhvnObBt9CvTtcq8dN5MERE1wCXOvJqDqk4G', NULL, '2022-03-10 08:19:14', '2022-03-10 08:19:14'),
(8, 'Cửa hàng Hoàng Đức', '0398454001', NULL, '$2y$10$sssBDAeBITIlMZKOyLMOtOEe5GKVf0M//U2iI2PZAgCxQIgKTEAHm', NULL, '2022-03-10 08:20:31', '2022-03-14 06:58:20'),
(9, 'Cửa hàng Hoàng Nhất', '0339845402', NULL, '$2y$10$ZxPMv.kTECGQ1UGgQVYrqeE8jgl800pqbaEUdVcNmNvpdM1Gb9AP6', NULL, '2022-03-10 08:22:34', '2022-03-10 08:22:34'),
(10, '0339845403', '0339845403', NULL, '$2y$10$lzXP32O/XGStxoB3cpYqy.Xfbf8n1JGAQMrskv5rRnmH8QaVQzSwW', NULL, '2022-03-10 08:22:58', '2022-03-10 08:22:58'),
(11, 'Phạm Thanh Hăng', '039845493', NULL, '$2y$10$zQcqbzPPl5JuP.1/ZhMQu.uDXhs6zhxvYBUBQzKa1YLLgbTx3DHES', NULL, '2022-03-10 19:08:00', '2022-03-10 19:08:00'),
(12, 'Phạm Hằng', '0339845345', NULL, '$2y$10$.ZOw5CrNsasSxkEQxUBTbu4vQv7qWMt9YGv18PQhT8bLc2IE3dlIu', NULL, '2022-03-12 21:17:38', '2022-03-12 21:17:38'),
(13, 'Pham Thị Ngoãn', '0339845400', NULL, '$2y$10$V4PpOQWwKoM81NmKFmLlk.oxS1d871TOdPP9hpGU6EC5zeBeGKv1O', NULL, '2022-03-14 03:41:39', '2022-03-14 03:41:39');

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
  ADD KEY `tbl_chi_tiet_hoa_don_ima_hoa_don_foreign` (`iMa_hoa_don`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_anh`
--
ALTER TABLE `tbl_anh`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=819;

--
-- AUTO_INCREMENT for table `tbl_binh_luan`
--
ALTER TABLE `tbl_binh_luan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `tbl_chi_tiet_hoa_don`
--
ALTER TABLE `tbl_chi_tiet_hoa_don`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=207;

--
-- AUTO_INCREMENT for table `tbl_cua_hang_lien_ket`
--
ALTER TABLE `tbl_cua_hang_lien_ket`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_dong_xe`
--
ALTER TABLE `tbl_dong_xe`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_hang_xe`
--
ALTER TABLE `tbl_hang_xe`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_hoa_don`
--
ALTER TABLE `tbl_hoa_don`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `tbl_khach_hang`
--
ALTER TABLE `tbl_khach_hang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `tbl_loai_anh`
--
ALTER TABLE `tbl_loai_anh`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_loai_xe`
--
ALTER TABLE `tbl_loai_xe`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_quyen`
--
ALTER TABLE `tbl_quyen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
  ADD CONSTRAINT `tbl_chi_tiet_hoa_don_ima_hoa_don_foreign` FOREIGN KEY (`iMa_hoa_don`) REFERENCES `tbl_hoa_don` (`id`) ON DELETE CASCADE;

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
