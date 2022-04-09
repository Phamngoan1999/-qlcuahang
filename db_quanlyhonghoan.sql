-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2022 at 10:18 AM
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
(971, '1649175423dang-ky-xe-may-bi-mat.jpg', 129, 2, '2022-04-05 09:17:03', '2022-04-05 09:17:03'),
(972, '1649175653dang-ky-xe-may-bi-mat.jpg', 129, 3, '2022-04-05 09:20:53', '2022-04-05 09:20:53'),
(973, '16493473334.3.2. Sơ đồ ERD hạn chế.drawio.png', 130, 2, '2022-04-07 09:02:13', '2022-04-07 09:02:13'),
(974, '1649359664dang-ky-xe-may-bi-mat.jpg', 131, 2, '2022-04-07 12:27:44', '2022-04-07 12:27:44'),
(975, '1649360619dang-ky-xe-may-bi-mat.jpg', 132, 2, '2022-04-07 12:43:40', '2022-04-07 12:43:40'),
(976, '16493607131367567636_news.jpg', 130, 4, '2022-04-07 12:45:13', '2022-04-07 12:45:13'),
(977, '1649360713144532-frontview-1-.jpg', 130, 1, '2022-04-07 12:45:13', '2022-04-07 12:45:13'),
(978, '16493607134461738_e75b5928f02b795a1117ef0dbcc8b980.jpg', 130, 1, '2022-04-07 12:45:13', '2022-04-07 12:45:13'),
(979, '1649360799images (1).jpg', 133, 2, '2022-04-07 12:46:39', '2022-04-07 12:46:39'),
(980, '1649360896honda-wase-4.jpg', 134, 2, '2022-04-07 12:48:16', '2022-04-07 12:48:16'),
(981, '1649360981images (1).jpg', 135, 2, '2022-04-07 12:49:41', '2022-04-07 12:49:41'),
(982, '1649361483images (1).jpg', 131, 4, '2022-04-07 12:58:03', '2022-04-07 12:58:03'),
(983, '1649361483honda-wase-4.jpg', 131, 1, '2022-04-07 12:58:03', '2022-04-07 12:58:03'),
(984, '1649361483images (1).jpg', 131, 1, '2022-04-07 12:58:03', '2022-04-07 12:58:03'),
(985, '1649361483images (2).jpg', 131, 1, '2022-04-07 12:58:03', '2022-04-07 12:58:03'),
(986, '1649361534images (1).jpg', 133, 4, '2022-04-07 12:58:54', '2022-04-07 12:58:54'),
(987, '1649361534images (2).jpg', 133, 1, '2022-04-07 12:58:54', '2022-04-07 12:58:54'),
(988, '1649361596images (1).jpg', 135, 4, '2022-04-07 12:59:56', '2022-04-07 12:59:56'),
(989, '1649361596images (2).jpg', 135, 1, '2022-04-07 12:59:56', '2022-04-07 12:59:56'),
(990, '1649361676images (1).jpg', 136, 2, '2022-04-07 13:01:16', '2022-04-07 13:01:16'),
(991, '1649361751images (1).jpg', 137, 2, '2022-04-07 13:02:31', '2022-04-07 13:02:31'),
(992, '1649361826dang-ky-oto-9934-1573013910.jpg', 138, 2, '2022-04-07 13:03:46', '2022-04-07 13:03:46'),
(993, '1649361862images (2).jpg', 138, 4, '2022-04-07 13:04:22', '2022-04-07 13:04:22'),
(994, '1649361862images (1).jpg', 138, 1, '2022-04-07 13:04:22', '2022-04-07 13:04:22'),
(995, '16493618951367567641_news.jpg', 134, 4, '2022-04-07 13:04:55', '2022-04-07 13:04:55'),
(996, '1649361895144532-frontview-1-.jpg', 134, 1, '2022-04-07 13:04:55', '2022-04-07 13:04:55'),
(997, '1649361931images (1).jpg', 137, 4, '2022-04-07 13:05:31', '2022-04-07 13:05:31'),
(998, '16493619314461738_e75b5928f02b795a1117ef0dbcc8b980.jpg', 137, 1, '2022-04-07 13:05:31', '2022-04-07 13:05:31'),
(999, '1649361975144532-frontview-1-.jpg', 136, 4, '2022-04-07 13:06:15', '2022-04-07 13:06:15'),
(1000, '1649361975dang-ky-oto-9934-1573013910.jpg', 136, 1, '2022-04-07 13:06:15', '2022-04-07 13:06:15'),
(1001, '1649362393images (1).jpg', 130, 3, '2022-04-07 13:13:13', '2022-04-07 13:13:13'),
(1002, '1649362815dang-ky-oto-9934-1573013910.jpg', 138, 3, '2022-04-07 13:20:15', '2022-04-07 13:20:15'),
(1003, '1649362923wave-thai-125i-den-do.jpg', 135, 3, '2022-04-07 13:22:03', '2022-04-07 13:22:03'),
(1004, '1649363691dang-ky-oto-9934-1573013910.jpg', 132, 3, '2022-04-07 13:34:51', '2022-04-07 13:34:51'),
(1005, '1649363741Xe_so_gia_re_duoi_20_trieu_dong_SYM_Galaxy_115.jpg', 133, 3, '2022-04-07 13:35:41', '2022-04-07 13:35:41'),
(1006, '1649363775images (3).jpg', 137, 3, '2022-04-07 13:36:15', '2022-04-07 13:36:15'),
(1007, '1649432713screencapture-127-0-0-1-8000-quanlysuachua-quanlydichvu-2022-04-05-22_43_56.png', 139, 2, '2022-04-08 08:45:14', '2022-04-08 08:45:14'),
(1008, '1649432888screencapture-127-0-0-1-8000-quanlysuachua-quanlydichvu-2022-04-05-22_43_56.png', 140, 2, '2022-04-08 08:48:08', '2022-04-08 08:48:08');

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
(125, '2022-04-07 20:09:30', 'Xe còn không bạn', 18, 131, 'Bạn vui lòng đến cửa hàng để được tư vấn ạ', '2022-04-07 13:09:30', '2022-04-07 13:10:59');

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
(280, 'Thay lốp trước Xe Wave Alpha 110', '100,000VNĐ', 197, 7, '2022-04-08 09:06:43', '2022-04-08 09:06:48'),
(281, 'Thay lốp sau Xe Wave Alpha 110', '150,000VNĐ', 197, 8, '2022-04-08 09:06:44', '2022-04-08 09:06:48'),
(284, 'Gác chân malay', '100,000VNĐ', 199, 29, '2022-04-08 09:12:54', '2022-04-08 09:12:58'),
(285, 'BEN TỰ ĐỘNG NÂNG YÊN XE MÁY', '120,000VNĐ', 199, 30, '2022-04-08 09:12:55', '2022-04-08 09:12:58');

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
(8, 'Cửa hàng Hoàng Đức', '0398454001', 'Thái Bình', '2022-03-14 03:41:39', '2022-03-14 04:09:32');

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
(7, 'Thay lốp trước Xe Wave Alpha 110', '100,000VNĐ', 2, '2022-03-29 08:06:45', '2022-03-29 08:06:45'),
(8, 'Thay lốp sau Xe Wave Alpha 110', '150,000VNĐ', 2, '2022-03-29 08:07:19', '2022-03-29 08:07:19'),
(9, 'Thay phanh xe', '50,000VNĐ', 2, '2022-03-29 08:07:50', '2022-03-29 08:07:50'),
(10, 'Thay hộp xích', '300,000VNĐ', 2, '2022-03-29 08:08:11', '2022-03-29 08:08:11'),
(11, 'Thay xích', '300,000VNĐ', 2, '2022-03-29 08:08:30', '2022-03-29 08:08:30'),
(12, 'Thay yếm xe', '400,000VNĐ', 2, '2022-03-29 08:09:54', '2022-03-29 08:09:54'),
(13, 'Bộ cao su để chân sau xe DREAM', '200,000VNĐ', 2, '2022-03-29 08:11:21', '2022-03-29 08:11:21'),
(14, 'Ống Xả Lắp Wave nhỏ Đời đời đầu Honda', '200,000VNĐ', 2, '2022-03-29 08:12:40', '2022-03-29 08:12:40'),
(15, 'Nhựa ốp sau tay lái Wave 2017-2020', '100,000VNĐ', 2, '2022-03-29 08:13:26', '2022-03-29 08:13:26'),
(16, 'Nhựa ốp sau Tay lái / Gáy WAVE RS', '200,000VNĐ', 2, '2022-03-29 08:13:58', '2022-03-29 08:13:58'),
(17, 'Nắp chắn nhiệt phải Wave S 100 zin honda', '65,000VNĐ', 2, '2022-03-29 08:14:35', '2022-03-29 08:14:35'),
(18, 'Bộ ốc lốc máy xe Dream WAVE zin', '300,000VNĐ', 2, '2022-03-29 08:15:02', '2022-03-29 08:15:02'),
(19, 'BEN TỰ ĐỘNG NÂNG YÊN XE MÁY', '300,000VNĐ', 2, '2022-03-29 08:15:02', '2022-03-29 08:15:02'),
(20, 'Gác chân malay + bát cheo pô cnc lắp đặc ex150 và ex155 có tặng kèm ốc', '100,000VNĐ', 2, '2022-03-29 08:06:45', '2022-03-29 08:06:45'),
(21, 'Bộ 2 Dây led siêu sáng 12V Xe Máy/Đạp điện /Mô tô', '100,000VNĐ', 2, '2022-03-29 08:06:45', '2022-03-29 08:06:45'),
(22, 'Siêu Dính Keo Dán Cường Lực 2 Mặt 3M VHB 4229P', '100,000VNĐ', 2, '2022-03-29 08:06:45', '2022-03-29 08:06:45'),
(23, 'Xi Đánh Bóng Cana xe máy, ô tô.', '100,000VNĐ', 2, '2022-03-29 08:06:45', '2022-03-29 08:06:45'),
(24, 'Đèn LED báo số xe máy', '100,000VNĐ', 2, '2022-03-29 08:06:45', '2022-03-29 08:06:45'),
(25, 'Đồng hồ điện tử uma dream KOSO UMA DREAM', '100,000VNĐ', 2, '2022-03-29 08:06:45', '2022-03-29 08:06:45'),
(26, 'DÈ CHẮN BÙN KIỂU KTM 1 CHÂN Winner', '100,000VNĐ', 2, '2022-03-29 08:06:45', '2022-03-29 08:06:45'),
(27, 'Siêu Dính Keo Dán Cường Lực 2 Mặt 3M VHB 4229P', '100,000VNĐ', 2, '2022-03-29 08:06:45', '2022-03-29 08:06:45'),
(28, 'Gác chân malay + bát cheo pô cnc lắp đặc ex150 và ex155 ', '100,000VNĐ', 2, '2022-03-29 08:06:45', '2022-03-29 08:06:45'),
(29, 'Gác chân malay', '100,000VNĐ', 8, '2022-04-01 00:35:47', '2022-04-01 00:35:47'),
(30, 'BEN TỰ ĐỘNG NÂNG YÊN XE MÁY', '120,000VNĐ', 8, '2022-04-01 00:36:55', '2022-04-01 00:36:55'),
(32, 'Siêu Dính Keo Dán Cường Lực 2 Mặt 3M VHB 4229P', '10,000VNĐ', 8, '2022-04-01 01:47:17', '2022-04-01 01:47:17'),
(33, '1222', '222,222,222VNĐ', 2, '2022-04-05 08:20:49', '2022-04-05 08:20:49');

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
(190, '1500000', '2022-04-05 16:17:46', 129, 2, 'dahoanthanh', '2022-04-05 09:17:26', '2022-04-05 09:17:46'),
(191, '220000', '2022-04-05 16:19:16', 129, 8, 'dahoanthanh', '2022-04-05 09:18:12', '2022-04-05 09:19:16'),
(193, '400000', '2022-01-07 19:29:11', 130, 2, 'dahoanthanh', '2022-04-07 12:28:35', '2022-04-07 12:29:11'),
(194, '300000', '2022-04-07 20:22:57', 132, 2, 'dahoanthanh', '2022-04-07 13:22:39', '2022-04-07 13:22:57'),
(195, '250000', '2022-04-07 20:25:32', 132, 2, 'dahoanthanh', '2022-04-07 13:25:02', '2022-04-07 13:25:32'),
(196, '250000', '2022-03-07 20:25:32', 132, 2, 'dahoanthanh', '2022-04-07 13:25:02', '2022-04-07 13:25:32'),
(197, '250000', '2022-04-08 16:09:49', 139, 2, 'dahoanthanh', '2022-04-08 08:50:30', '2022-04-08 09:09:49'),
(199, NULL, NULL, 139, 8, 'chonhan', '2022-04-08 09:12:58', '2022-04-08 09:12:58');

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
(134, 'Phạm Huy Hoàng', '0339845111', '123456789011', '2004', 'Thái Bình', '2022-03-01', 'Thái Bình', '2022-03-25 20:22:47', '2022-03-25 20:22:47'),
(135, 'Phạm Thanh Tuyền', '0339845100', '033984510011', '2004', 'Thái Bình', '2022-03-01', 'Thái Bình', '2022-03-25 21:00:26', '2022-03-25 21:00:26'),
(136, 'Phạm Huy Hoàng', '0339845111', '123456789044', '1990', 'Thái Bình', '2022-03-01', 'Thái Bình', '2022-03-25 21:08:18', '2022-03-25 21:08:18'),
(137, 'Nguyễn Thu Phương', '0339845333', '033984533377', '2002', 'Hà Nội', '2022-03-01', 'Hà Nội', '2022-03-25 23:45:50', '2022-03-25 23:45:50'),
(138, 'Phạm Huy Hoàng', '0339845114', '033984511477', '2001', 'Thái Bình', '2022-03-03', 'Thái Bình', '2022-03-25 23:51:50', '2022-03-25 23:51:50'),
(139, 'Phạm Thanh Hương', '0339845499', '033984549999', '1996', 'Hà Nội', '2014-06-23', 'Hà Nội', '2022-03-26 02:36:29', '2022-03-26 02:36:29'),
(140, 'Phạm Thanh Hương', '0339845222', '123456781111', '1993', 'Thái Bình', '2022-04-01', 'Thái Bình', '2022-04-01 20:52:03', '2022-04-01 20:52:03'),
(141, 'Phạm Ngoãn', '0339845112', '123456789022', '1997', '123456789022', '2022-04-01', 'Thái Bình', '2022-04-03 06:35:22', '2022-04-03 06:35:22'),
(142, 'Phạm Huy Hoàng3', '0339845144', '033984514455', '2002', '033984514455', '2022-03-31', 'Thái Bình', '2022-04-03 09:30:59', '2022-04-03 09:30:59'),
(143, 'Phạm Huy Hoàng', '0339845133', '123456789666', '2003', '123456789666', '2022-04-01', '123456789666', '2022-04-03 09:41:12', '2022-04-03 09:41:12'),
(144, 'Phạm Huy Hoàng', '0339845155', '033984515555', '2002', '033984515555', '2022-04-01', '033984515555', '2022-04-03 10:02:15', '2022-04-03 10:02:15'),
(145, 'Phạm Huy Hoàng', '0339845113', '033984511355', '1988', 'Hà Nội', '2022-04-01', 'Hà Nội', '2022-04-05 09:17:03', '2022-04-05 09:17:03'),
(146, 'Phạm Ngoãn', '0339845116', '033984511666', '1989', 'Hà Nội', '2022-04-06', 'Hà Nội', '2022-04-05 09:20:53', '2022-04-05 09:20:53'),
(147, 'Phạm Huy Hoàng', '0339845112', '123456789033', '2002', 'Thái Bình', '2022-04-01', 'Thái Bình', '2022-04-07 09:02:13', '2022-04-07 09:02:13'),
(148, 'Phạm Huy Hoàng', '0339845133', '033984513399', '1986', 'Hà Nội', '2022-04-01', 'Thái Bình', '2022-04-07 12:27:44', '2022-04-07 12:27:44'),
(149, 'Nguyễn Hồng Tươi', '0339845144', '033984514466', '1983', 'Hà Nội', '2022-04-01', 'Hà Nội', '2022-04-07 12:43:39', '2022-04-07 12:43:39'),
(150, 'Nguyễn Thanh Hằng', '0339845155', '123456789035', '2003', 'Hải Dương', '2022-04-01', 'Hải Dương', '2022-04-07 12:48:16', '2022-04-07 12:48:16'),
(151, 'Trần Văn Sơn', '0339845166', '033984516677', '1997', 'Thái Bình', '2022-04-01', 'Thái Nguyên', '2022-04-07 12:49:41', '2022-04-07 12:49:41'),
(152, 'Phạm Huy Hoàng', '0339845155', '033984515599', '1989', 'Hà Nội', '2022-04-01', 'Hà Nội', '2022-04-07 13:01:16', '2022-04-07 13:01:16'),
(153, 'Phạm Ngoãn', '0339845177', '033984517777', '1990', 'Thái Bình', '2022-04-01', 'Hà Nội', '2022-04-07 13:02:31', '2022-04-07 13:02:31'),
(154, 'Nguyễn Thị Tuyết', '0339845188', '123456789077', '2000', 'Hà Nội', '2022-04-01', 'Hà Nội', '2022-04-07 13:03:46', '2022-04-07 13:03:46'),
(155, 'Nguyễn Thu Phương', '0339845166', '033984516600', '1986', 'Thái Bình', '2022-04-01', 'Thái Bình', '2022-04-07 13:13:12', '2022-04-07 13:13:12'),
(156, 'Trần Văn Sơn', '0339845444', '033984544488', '1999', 'Thái Bình', '2022-04-01', 'Hà Nội', '2022-04-08 08:45:13', '2022-04-08 08:45:13'),
(157, 'Nguyễn Thanh Tùng', '0339845555', '033984555533', '2003', 'Hà Nội', '2022-04-01', 'Hà Nội', '2022-04-08 08:48:08', '2022-04-08 08:48:08');

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
(3, 2, NULL, NULL),
(5, 3, NULL, NULL),
(6, 3, NULL, NULL),
(8, 3, NULL, NULL),
(9, 3, NULL, NULL),
(10, 3, NULL, NULL),
(11, 2, NULL, NULL),
(12, 2, NULL, NULL),
(13, 3, NULL, NULL),
(14, 2, NULL, NULL),
(15, 3, NULL, NULL),
(16, 3, NULL, NULL),
(17, 2, NULL, NULL),
(4, 3, NULL, NULL),
(18, 2, NULL, NULL);

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
(129, '42G8E941', 'Màu xanh', '50cc', '17F-207.35', 'Hà Nội', 'F1145555', '42G8E94120', 'checked', '2022-03-05 16:17:03', '2022-04-05 16:20:53', '10000000', '30500000', NULL, NULL, 3, 146, 145, 4, NULL, NULL, NULL, '2022-04-05 09:17:03', '2022-04-05 09:20:53'),
(130, '42G8E941', 'Màu xanh', '50cc', '17F-207.32', 'Thái Bình', '17F03939', '42G8E94120', 'checked', '2022-01-07 16:02:13', '2022-04-07 20:13:12', '12000000', '20000000', '20tr', 'Từ 20Đ - 30Đ', 3, 155, 147, 4, '2018', '230000km', NULL, '2022-04-07 09:02:13', '2022-04-07 13:13:13'),
(131, '42G8E945', 'Màu xanh', '50cc', '17F-207.37', 'Hà Nội', '17F03939', '42G8E94120', 'checked', '2022-04-07 19:27:44', NULL, '12000000', NULL, '40tr', 'Từ 10Đ - 20Đ', 2, NULL, 148, 4, '2020', '20000km', NULL, '2022-04-07 12:27:44', '2022-04-07 12:58:03'),
(132, '42G8E941', 'Màu xanh', '50cc', '17F-207.34', 'Hà Nội', '17F03939', '42G8E94120', 'checked', '2022-03-07 19:43:39', '2022-04-07 20:34:51', '14000000', '25000000', NULL, NULL, 3, 139, 149, 2, NULL, NULL, NULL, '2022-04-07 12:43:39', '2022-04-07 13:34:51'),
(133, '42G8E9411360', 'Màu xanh', '70cc', '17F-207.35', 'Hà Nội', '17F03939', '42G8E94120', 'checked', '2022-04-07 19:46:39', '2022-04-07 20:35:41', '13000000', '20000000', '30tr', 'Từ 20Đ - 30Đ', 3, 135, 134, 4, '2020', '140000km', NULL, '2022-04-07 12:46:39', '2022-04-07 13:35:41'),
(134, '42G8E941', 'Màu xanh', '80cc', '17F-207.36', 'Thái Bình', '17F03939', '42G8E94120', 'checked', '2022-04-07 19:48:16', NULL, '34000000', NULL, '40tr', 'Từ 10Đ - 20Đ', 2, NULL, 150, 3, '2021', '2000km', NULL, '2022-04-07 12:48:16', '2022-04-07 13:04:55'),
(135, '42G8E946', 'Màu đỏ', '90cc', '17F-207.32', 'Thái Bình', '17F03939', '42G8E94120', 'checked', '2022-01-07 19:49:41', '2022-04-07 20:22:03', '16000000', '30000000', '30tr', 'Từ 20Đ - 30Đ', 3, 137, 151, 3, '2021', '20000km', NULL, '2022-04-07 12:49:41', '2022-04-07 13:22:03'),
(136, '42G8E941', 'Màu xanh', '50cc', '17F-207.36', 'Hà Nội', '17F03939', '42G8E94120', 'checked', '2022-02-07 20:01:16', NULL, '15000000', NULL, '30tr', 'Từ 20Đ - 30Đ', 2, NULL, 152, 4, '2020', '4000km', NULL, '2022-04-07 13:01:16', '2022-04-07 13:06:15'),
(137, '42G8E941', 'Màu xanh', '50cc', '17F-207.36', 'Thái Bình', '17F03939', '42G8E94120', 'checked', '2022-04-07 20:02:31', '2022-04-07 20:36:15', '13000000', '30000000', '20tr', 'Từ 20Đ - 30Đ', 3, 140, 153, 3, '2022', '3000km', NULL, '2022-04-07 13:02:31', '2022-04-07 13:36:15'),
(138, '42G8E949', 'Màu xanh', '90cc', '17F-207.38', 'Thái Bình', '17F03930', '42G8E9410888', 'checked', '2022-02-07 20:03:46', '2022-04-07 20:20:15', '16000000', '30000000', '30tr', 'Từ 20Đ - 30Đ', 3, 135, 154, 4, '2013', '14000km', NULL, '2022-04-07 13:03:46', '2022-04-07 13:20:15'),
(139, '42G8E941', 'Màu xanh', '50cc', '17F-207.36', 'Thái Bình', '17F03939', '42G8E94120', NULL, '2022-04-08 15:46:28', NULL, '15500000', NULL, NULL, NULL, 6, NULL, 156, 3, NULL, NULL, NULL, '2022-04-08 08:45:13', '2022-04-08 09:12:58'),
(140, '42G8E941', 'Màu xanh', '50cc', '17F-207.37', 'Thái Bình', '17F03939', '42G8E94120', 'checked', '2022-04-08 15:48:08', NULL, '16000000', NULL, NULL, NULL, 1, NULL, 157, 2, NULL, NULL, NULL, '2022-04-08 08:48:08', '2022-04-08 09:12:29');

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
(1, 'admin', '0339845495', NULL, '$2y$10$jcu48/JF6kLae4HsM.q7i.gwendm8ngTK3aEN3CJflVqDwPiYeI3C', '0ggBSeZJ1f0P9Iu6ErwmGkq0ELnKHBOFQnkJ9BbZJIkx6nGpl4qCwOMFrkqe', '2022-02-25 23:21:38', '2022-03-25 10:11:53'),
(2, 'Cửa hàng Đức Thắng', '0123456789', NULL, '$2y$10$yMqU1Grcd96MFfFGmNCsseV0xUlj3x7Ea18ulfxb9kpqgKJU9ieCi', NULL, '2022-02-25 23:26:38', '2022-03-20 03:59:50'),
(3, 'Pham Thị Ngoãn', '0123456783', NULL, '$2y$10$gvDcufcW7Q76ZB5xKfq/QuUV.pX2hv6XayiSx3bwTP1RHjEWVFi7O', NULL, '2022-03-03 00:58:23', '2022-03-03 00:58:23'),
(4, 'Cửa hàng Hoàng Hưng', '0339845401', NULL, '$2y$10$yTUEysaxPyKkuzlFoxC5GO.HSwqSHI5YbUGXKB40fpc5Xgj3aqZkG', NULL, '2022-03-03 01:22:24', '2022-03-25 20:07:06'),
(5, 'Cửa hàng Huy Hùng', '0987654321', NULL, '$2y$10$dZXReC6U3k4DjVjcbIIoEerLJEzlyGfOMkvVuN4jZ6oYuHHgiWRIu', 'eqJt2fTwHd5HRp1ogJGcQegut22XLHdhCwvn3zDZRT7oByE7Nws77Y7YUzDd', '2022-03-04 20:15:18', '2022-03-25 20:07:27'),
(6, 'Pham Thị Ngoãn', '0339845491', NULL, '$2y$10$mNO55rx767/q69SGRQZqCeU/omuHDi1NoGAn6WCRbZWbYdDcPYpsK', NULL, '2022-03-06 03:51:43', '2022-03-06 03:51:43'),
(8, 'Cửa hàng Hoàng Đức', '0398454001', NULL, '$2y$10$3xVwaAnHr/VcKFYbys1W9efw.fKDOen8goZPg9ijzLR9Fke7OR.hm', NULL, '2022-03-10 08:20:31', '2022-03-21 00:46:02'),
(9, 'Cửa hàng Hoàng Nhất', '0339845402', NULL, '$2y$10$ZxPMv.kTECGQ1UGgQVYrqeE8jgl800pqbaEUdVcNmNvpdM1Gb9AP6', NULL, '2022-03-10 08:22:34', '2022-03-10 08:22:34'),
(10, '0339845403', '0339845403', NULL, '$2y$10$lzXP32O/XGStxoB3cpYqy.Xfbf8n1JGAQMrskv5rRnmH8QaVQzSwW', NULL, '2022-03-10 08:22:58', '2022-03-10 08:22:58'),
(11, 'Phạm Thanh Hằng', '039845493', NULL, '$2y$10$zQcqbzPPl5JuP.1/ZhMQu.uDXhs6zhxvYBUBQzKa1YLLgbTx3DHES', NULL, '2022-03-10 19:08:00', '2022-03-10 19:08:00'),
(12, 'Phạm Hằng', '0339845345', NULL, '$2y$10$.ZOw5CrNsasSxkEQxUBTbu4vQv7qWMt9YGv18PQhT8bLc2IE3dlIu', NULL, '2022-03-12 21:17:38', '2022-03-12 21:17:38'),
(13, 'Pham Thị Ngoãn', '0339845400', NULL, '$2y$10$V4PpOQWwKoM81NmKFmLlk.oxS1d871TOdPP9hpGU6EC5zeBeGKv1O', NULL, '2022-03-14 03:41:39', '2022-03-14 03:41:39'),
(14, 'Pham Thị Ngoãn', '0339845433', NULL, '$2y$10$oMLAfehey02CYdm6SDbcNOrF3ESN0dcUjiOfjbPMtayUOBS.QKrTS', NULL, '2022-03-20 01:33:56', '2022-03-20 01:33:56'),
(15, 'Pham Thị Ngoãn', '0339845411', NULL, '$2y$10$zdXa6UzjPcC6wpeSFxV7K.F/NhgaBCdE17.Rl6GrcFqFVMvE5QCy.', NULL, '2022-03-20 01:48:18', '2022-03-20 01:48:18'),
(16, 'Cửa hàng Hoàng Đức Số 4', '0339845431', NULL, '$2y$10$OXq9zQ/0KOMbW7hBoS2g9exvUiPNrbTGzPedprqIb4YzTIi7OD.Fq', NULL, '2022-03-23 06:57:52', '2022-03-25 20:07:18'),
(17, 'Phạm Ngọc Hân', '0339845434', NULL, '$2y$10$4TzXK4vux34fY7PX29ZATOAYbR85ln7xtIrS790Iuz/F3bXTmnXMy', NULL, '2022-03-23 12:38:16', '2022-03-23 12:38:16'),
(18, 'Phạm Thanh Hằng', '0339845422', NULL, '$2y$10$T0cNli5L/UDCPUzad6CuYei1CFohUnTrXDTzfBB7obfIQrgbuE9a2', NULL, '2022-03-25 20:58:04', '2022-03-25 20:58:04');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1009;

--
-- AUTO_INCREMENT for table `tbl_binh_luan`
--
ALTER TABLE `tbl_binh_luan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `tbl_chi_tiet_hoa_don`
--
ALTER TABLE `tbl_chi_tiet_hoa_don`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=286;

--
-- AUTO_INCREMENT for table `tbl_cua_hang_lien_ket`
--
ALTER TABLE `tbl_cua_hang_lien_ket`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_dich_vu`
--
ALTER TABLE `tbl_dich_vu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;

--
-- AUTO_INCREMENT for table `tbl_khach_hang`
--
ALTER TABLE `tbl_khach_hang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
