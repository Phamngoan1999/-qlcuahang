-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2022 at 12:18 PM
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
(34, '1645869548217674062_278888420681021_3583001458844245238_n.jpg', 10, 2, '2022-02-26 02:59:08', '2022-02-26 02:59:08'),
(35, '1645869548Ảnh-hoa-cúc-họa-mi-cho-máy-tính.jpg', 10, 2, '2022-02-26 02:59:08', '2022-02-26 02:59:08'),
(36, '1645869643217674062_278888420681021_3583001458844245238_n.jpg', 11, 2, '2022-02-26 03:00:43', '2022-02-26 03:00:43'),
(37, '1645869643Ảnh-hoa-cúc-họa-mi-cho-máy-tính.jpg', 11, 2, '2022-02-26 03:00:44', '2022-02-26 03:00:44'),
(44, '16459429535-407x275.png', 16, 2, '2022-02-26 23:22:34', '2022-02-26 23:22:34'),
(45, '164594295420210515_142903.jpg', 16, 2, '2022-02-26 23:22:35', '2022-02-26 23:22:35'),
(46, '164594295520210515_142917.jpg', 16, 2, '2022-02-26 23:22:37', '2022-02-26 23:22:37'),
(48, '16459460905-407x275.png', 17, 2, '2022-02-27 00:14:50', '2022-02-27 00:14:50'),
(49, '1646059696mau-toc-tem-nu-dep-25.jpg', 18, 2, '2022-02-28 07:48:17', '2022-02-28 07:48:17'),
(50, '1646059697london-2393098.jpg', 18, 1, '2022-02-28 07:48:17', '2022-02-28 07:48:17'),
(51, '1646059697mau-toc-tem-nu-dep-25.jpg', 18, 1, '2022-02-28 07:48:17', '2022-02-28 07:48:17'),
(52, '1646059697Untitled.png', 18, 1, '2022-02-28 07:48:17', '2022-02-28 07:48:17'),
(53, '1646069756273633957_1139693046570211_7461093427574540985_n.jpg', 19, 2, '2022-02-28 10:35:56', '2022-02-28 10:35:56'),
(54, '1646069756217674062_278888420681021_3583001458844245238_n.jpg', 19, 1, '2022-02-28 10:35:56', '2022-02-28 10:35:56'),
(55, '1646069756Ảnh-hoa-cúc-họa-mi-cho-máy-tính.jpg', 19, 1, '2022-02-28 10:35:56', '2022-02-28 10:35:56'),
(56, '1646069756Hãy_trao_cho_anh.jpg', 19, 1, '2022-02-28 10:35:56', '2022-02-28 10:35:56'),
(59, '16461127905-407x275.png', 20, 1, '2022-02-28 22:33:10', '2022-02-28 22:33:10'),
(62, '1646113207london-2393098.jpg', 22, 2, '2022-02-28 22:40:08', '2022-02-28 22:40:08'),
(63, '1646113208mau-toc-tem-nu-dep-25.jpg', 22, 2, '2022-02-28 22:40:08', '2022-02-28 22:40:08'),
(64, '1646113208Ảnh-hoa-cúc-họa-mi-cho-máy-tính.jpg', 22, 1, '2022-02-28 22:40:08', '2022-02-28 22:40:08'),
(65, '1646113208Hãy_trao_cho_anh.jpg', 22, 1, '2022-02-28 22:40:08', '2022-02-28 22:40:08'),
(66, '164611325720210515_142903.jpg', 23, 2, '2022-02-28 22:40:58', '2022-02-28 22:40:58'),
(67, '164611325820210515_142917.jpg', 23, 2, '2022-02-28 22:41:00', '2022-02-28 22:41:00'),
(68, '1646113260import_database.png', 23, 1, '2022-02-28 22:41:00', '2022-02-28 22:41:00'),
(69, '1646113260kem_3665_e20fb15be0124876be19a95ac11d926d_master.png', 23, 1, '2022-02-28 22:41:00', '2022-02-28 22:41:00'),
(70, '16461135375-407x275.png', 24, 2, '2022-02-28 22:45:37', '2022-02-28 22:45:37'),
(71, '1646113537kem_3665_e20fb15be0124876be19a95ac11d926d_master.png', 24, 1, '2022-02-28 22:45:37', '2022-02-28 22:45:37'),
(73, '1646113658kem_3665_e20fb15be0124876be19a95ac11d926d_master.png', 25, 1, '2022-02-28 22:47:38', '2022-02-28 22:47:38'),
(74, '1646113870london-2393098.jpg', 26, 2, '2022-02-28 22:51:10', '2022-02-28 22:51:10'),
(75, '1646113870mau-toc-tem-nu-dep-25.jpg', 26, 2, '2022-02-28 22:51:10', '2022-02-28 22:51:10'),
(76, '1646113870Hãy_trao_cho_anh.jpg', 26, 1, '2022-02-28 22:51:10', '2022-02-28 22:51:10'),
(77, '1646113870import_database.png', 26, 1, '2022-02-28 22:51:10', '2022-02-28 22:51:10'),
(84, '1646206429images (1).jpg', 29, 2, '2022-03-02 00:33:49', '2022-03-02 00:33:49'),
(85, '1646206429images (2).jpg', 29, 2, '2022-03-02 00:33:49', '2022-03-02 00:33:49'),
(86, '1646206429images (3).jpg', 29, 2, '2022-03-02 00:33:49', '2022-03-02 00:33:49'),
(88, '1646209964images (1).jpg', 30, 2, '2022-03-02 01:32:44', '2022-03-02 01:32:44'),
(89, '1646209964images (2).jpg', 30, 2, '2022-03-02 01:32:45', '2022-03-02 01:32:45'),
(90, '1646209965images (3).jpg', 30, 2, '2022-03-02 01:32:45', '2022-03-02 01:32:45'),
(91, '1646210505images (1).jpg', 31, 2, '2022-03-02 01:41:45', '2022-03-02 01:41:45'),
(92, '1646210505images (2).jpg', 31, 2, '2022-03-02 01:41:45', '2022-03-02 01:41:45'),
(93, '1646210505images (3).jpg', 31, 2, '2022-03-02 01:41:45', '2022-03-02 01:41:45'),
(94, '1646210505Xe_so_gia_re_duoi_20_trieu_dong_SYM_Galaxy_115.jpg', 31, 1, '2022-03-02 01:41:45', '2022-03-02 01:41:45'),
(95, '1646210633images (1).jpg', 32, 2, '2022-03-02 01:43:53', '2022-03-02 01:43:53'),
(96, '1646210633images (2).jpg', 32, 2, '2022-03-02 01:43:53', '2022-03-02 01:43:53'),
(97, '1646210633images (3).jpg', 32, 2, '2022-03-02 01:43:53', '2022-03-02 01:43:53'),
(98, '1646210633images (3).jpg', 32, 1, '2022-03-02 01:43:53', '2022-03-02 01:43:53'),
(100, '1646211288images (2).jpg', 33, 2, '2022-03-02 01:54:49', '2022-03-02 01:54:49'),
(102, '1646211289images (1).jpg', 33, 1, '2022-03-02 01:54:49', '2022-03-02 01:54:49'),
(103, '1646211289images (2).jpg', 33, 1, '2022-03-02 01:54:49', '2022-03-02 01:54:49'),
(104, '1646211289images (3).jpg', 33, 1, '2022-03-02 01:54:49', '2022-03-02 01:54:49'),
(105, '1646211457images (1).jpg', 34, 2, '2022-03-02 01:57:37', '2022-03-02 01:57:37'),
(106, '1646211457images (2).jpg', 34, 2, '2022-03-02 01:57:37', '2022-03-02 01:57:37'),
(108, '1646211457144532-frontview-1-.jpg', 34, 1, '2022-03-02 01:57:38', '2022-03-02 01:57:38'),
(109, '16462114584461738_e75b5928f02b795a1117ef0dbcc8b980.jpg', 34, 1, '2022-03-02 01:57:38', '2022-03-02 01:57:38'),
(110, '164621145820180805-08-2018-092905-4.jpg', 34, 1, '2022-03-02 01:57:38', '2022-03-02 01:57:38'),
(111, '1646211876images (1).jpg', 35, 2, '2022-03-02 02:04:36', '2022-03-02 02:04:36'),
(112, '1646211876images (2).jpg', 35, 2, '2022-03-02 02:04:36', '2022-03-02 02:04:36'),
(113, '1646211876images (3).jpg', 35, 2, '2022-03-02 02:04:36', '2022-03-02 02:04:36'),
(114, '164621187620210515_142903.jpg', 35, 1, '2022-03-02 02:04:38', '2022-03-02 02:04:38'),
(116, '1646212676kem_3665_e20fb15be0124876be19a95ac11d926d_master.png', 36, 2, '2022-03-02 02:17:56', '2022-03-02 02:17:56'),
(117, '1646212676london-2393098.jpg', 36, 2, '2022-03-02 02:17:56', '2022-03-02 02:17:56'),
(119, '1646213464kem_3665_e20fb15be0124876be19a95ac11d926d_master.png', 36, 1, '2022-03-02 02:31:04', '2022-03-02 02:31:04'),
(120, '1646213464london-2393098.jpg', 36, 1, '2022-03-02 02:31:04', '2022-03-02 02:31:04'),
(122, '1646213697mau-toc-tem-nu-dep-25.jpg', 36, 1, '2022-03-02 02:34:57', '2022-03-02 02:34:57'),
(123, '1646213764kem_3665_e20fb15be0124876be19a95ac11d926d_master.png', 37, 2, '2022-03-02 02:36:04', '2022-03-02 02:36:04'),
(124, '1646213764london-2393098.jpg', 37, 2, '2022-03-02 02:36:05', '2022-03-02 02:36:05'),
(125, '1646213765mau-toc-tem-nu-dep-25.jpg', 37, 2, '2022-03-02 02:36:05', '2022-03-02 02:36:05'),
(129, '1646231301dongxe.png', 38, 2, '2022-03-02 07:28:21', '2022-03-02 07:28:21'),
(130, '1646231301donxinnghiviec.png', 38, 2, '2022-03-02 07:28:21', '2022-03-02 07:28:21'),
(131, '1646231301duntich.png', 38, 2, '2022-03-02 07:28:21', '2022-03-02 07:28:21'),
(132, '1646231301hangxe.png', 38, 2, '2022-03-02 07:28:21', '2022-03-02 07:28:21'),
(133, '1646281987dolar.png', 38, 1, '2022-03-02 21:33:08', '2022-03-02 21:33:08'),
(134, '1646281988dongxe.png', 38, 1, '2022-03-02 21:33:08', '2022-03-02 21:33:08'),
(135, '1646281988donxinnghiviec.png', 38, 1, '2022-03-02 21:33:08', '2022-03-02 21:33:08'),
(136, '1646281988duntich.png', 38, 1, '2022-03-02 21:33:08', '2022-03-02 21:33:08'),
(137, '1646281988hangxe.png', 38, 1, '2022-03-02 21:33:08', '2022-03-02 21:33:08'),
(138, '1646282542dongxe.png', 38, 1, '2022-03-02 21:42:22', '2022-03-02 21:42:22'),
(139, '1646283573dolar.png', 17, 1, '2022-03-02 21:59:33', '2022-03-02 21:59:33'),
(140, '1646283573dongxe.png', 17, 1, '2022-03-02 21:59:33', '2022-03-02 21:59:33'),
(141, '1646283714loaixe.png', 35, 1, '2022-03-02 22:01:54', '2022-03-02 22:01:54'),
(142, '1646284162dolar.png', 16, 1, '2022-03-02 22:09:22', '2022-03-02 22:09:22'),
(143, '1646284163dongxe.png', 16, 1, '2022-03-02 22:09:23', '2022-03-02 22:09:23'),
(144, '1646284163donxinnghiviec.png', 16, 1, '2022-03-02 22:09:23', '2022-03-02 22:09:23'),
(145, '1646284163duntich.png', 16, 1, '2022-03-02 22:09:23', '2022-03-02 22:09:23'),
(146, '1646284163hangxe.png', 16, 1, '2022-03-02 22:09:23', '2022-03-02 22:09:23'),
(147, '1646564131dongxe.png', 39, 2, '2022-03-06 03:55:31', '2022-03-06 03:55:31'),
(149, '1646564131duntich.png', 39, 2, '2022-03-06 03:55:31', '2022-03-06 03:55:31'),
(151, '1646564131dolar.png', 39, 1, '2022-03-06 03:55:31', '2022-03-06 03:55:31'),
(152, '1646564131dongxe.png', 39, 1, '2022-03-06 03:55:31', '2022-03-06 03:55:31'),
(153, '1646564131donxinnghiviec.png', 39, 1, '2022-03-06 03:55:31', '2022-03-06 03:55:31'),
(154, '1646564131duntich.png', 39, 1, '2022-03-06 03:55:31', '2022-03-06 03:55:31'),
(155, '1646564131hangxe.png', 39, 1, '2022-03-06 03:55:31', '2022-03-06 03:55:31'),
(157, '1646564243dolar.png', 39, 1, '2022-03-06 03:57:23', '2022-03-06 03:57:23'),
(158, '1646564243dongxe.png', 39, 1, '2022-03-06 03:57:23', '2022-03-06 03:57:23'),
(159, '1646564243donxinnghiviec.png', 39, 1, '2022-03-06 03:57:23', '2022-03-06 03:57:23'),
(160, '1646564307dolar.png', 40, 2, '2022-03-06 03:58:27', '2022-03-06 03:58:27'),
(161, '1646564307dongxe.png', 40, 2, '2022-03-06 03:58:27', '2022-03-06 03:58:27'),
(162, '1646564307donxinnghiviec.png', 40, 2, '2022-03-06 03:58:28', '2022-03-06 03:58:28'),
(163, '1646564308duntich.png', 40, 2, '2022-03-06 03:58:28', '2022-03-06 03:58:28'),
(164, '1646564308hangxe.png', 40, 2, '2022-03-06 03:58:28', '2022-03-06 03:58:28'),
(165, '1646564308Hồng.png', 40, 2, '2022-03-06 03:58:28', '2022-03-06 03:58:28'),
(166, '1646564308dolar.png', 40, 1, '2022-03-06 03:58:28', '2022-03-06 03:58:28'),
(167, '1646564308dongxe.png', 40, 1, '2022-03-06 03:58:28', '2022-03-06 03:58:28'),
(168, '1646564308donxinnghiviec.png', 40, 1, '2022-03-06 03:58:28', '2022-03-06 03:58:28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_binh_luan`
--

CREATE TABLE `tbl_binh_luan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `thoi_gian_binh_luan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noi_dung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `iMa_khach_hang` bigint(20) UNSIGNED NOT NULL,
  `iMa_xe` bigint(20) UNSIGNED NOT NULL,
  `binh_luan_tra_loi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_binh_luan`
--

INSERT INTO `tbl_binh_luan` (`id`, `thoi_gian_binh_luan`, `noi_dung`, `iMa_khach_hang`, `iMa_xe`, `binh_luan_tra_loi`, `created_at`, `updated_at`) VALUES
(4, '2022-03-03 08:54:31', 'Phòng DCAN gửi bạn bảng chấm công tháng 02/2022.  Lưu ý: Bạn vui lòng liên hệ qua Mattermost với tam.ntm để được giải đáp các thắc mắc về ngày công và thời gian OT.', 4, 27, NULL, '2022-03-03 01:54:31', '2022-03-03 01:54:31'),
(5, '2022-03-03 08:55:21', 'Phòng DCAN gửi bạn bảng chấm công tháng 02/2022.  Lưu ý: Bạn vui lòng liên hệ qua Mattermost với tam.ntm để được giải đáp các thắc mắc về ngày công và thời gian OT.', 4, 35, 'sdada', '2022-03-03 01:55:21', '2022-03-03 01:55:21'),
(6, '2022-03-03 09:02:01', 'ádsa', 4, 35, NULL, '2022-03-03 02:02:01', '2022-03-03 02:02:01'),
(7, '2022-03-03 09:10:33', 'Phòng DCAN gửi bạn bảng chấm công tháng 02/2022.  Lưu ý: Bạn vui lòng liên hệ qua Mattermost với tam.ntm để được giải đáp các thắc mắc về ngày công và thời gian OT.', 4, 35, NULL, '2022-03-03 02:10:33', '2022-03-03 02:10:33'),
(8, '2022-03-03 09:10:38', 'Phòng DCAN gửi bạn bảng chấm công tháng 02/2022.  Lưu ý: Bạn vui lòng liên hệ qua Mattermost với tam.ntm để được giải đáp các thắc mắc về ngày công và thời gian OT.', 4, 35, NULL, '2022-03-03 02:10:38', '2022-03-03 02:10:38'),
(9, '2022-03-03 09:11:06', 'Phòng DCAN gửi bạn bảng chấm công tháng 02/2022.  Lưu ý: Bạn vui lòng liên hệ qua Mattermost với tam.ntm để được giải đáp các thắc mắc về ngày công và thời gian OT.', 4, 35, NULL, '2022-03-03 02:11:06', '2022-03-03 02:11:06'),
(10, '2022-03-03 09:11:28', 'Phòng DCAN gửi bạn bảng chấm công tháng 02/2022.  Lưu ý: Bạn vui lòng liên hệ qua Mattermost với tam.ntm để được giải đáp các thắc mắc về ngày công và thời gian OT.', 4, 35, NULL, '2022-03-03 02:11:28', '2022-03-03 02:11:28'),
(11, '2022-03-03 09:12:49', 'Phòng DCAN gửi bạn bảng chấm công tháng 02/2022.  Lưu ý: Bạn vui lòng liên hệ qua Mattermost với tam.ntm để được giải đáp các thắc mắc về ngày công và thời gian OT.', 4, 35, NULL, '2022-03-03 02:12:49', '2022-03-03 02:12:49'),
(12, '2022-03-03 09:14:10', 'Phòng DCAN gửi bạn bảng chấm công tháng 02/2022.  Lưu ý: Bạn vui lòng liên hệ qua Mattermost với tam.ntm để được giải đáp các thắc mắc về ngày công và thời gian OT.', 4, 35, 'ok bn', '2022-03-03 02:14:10', '2022-03-06 04:06:19'),
(13, '2022-03-03 09:14:23', 'Phòng DCAN gửi bạn bảng chấm công tháng 02/2022.  Lưu ý: Bạn vui lòng liên hệ qua Mattermost với tam.ntm để được giải đáp các thắc mắc về ngày công và thời gian OT.', 4, 35, 'sadsa', '2022-03-03 02:14:23', '2022-03-03 20:13:12'),
(14, '2022-03-03 09:17:09', 'Phòng DCAN gửi bạn bảng chấm công tháng 02/2022.  Lưu ý: Bạn vui lòng liên hệ qua Mattermost với tam.ntm để được giải đáp các thắc mắc về ngày công và thời gian OT.', 4, 35, 'asss', '2022-03-03 02:17:09', '2022-03-03 20:13:31'),
(15, '2022-03-03 09:19:37', 'Phòng DCAN gửi bạn bảng chấm công tháng 02/2022.  Lưu ý: Bạn vui lòng liên hệ qua Mattermost với tam.ntm để được giải đáp các thắc mắc về ngày công và thời gian OT.', 4, 35, NULL, '2022-03-03 02:19:37', '2022-03-03 02:19:37'),
(16, '2022-03-03 09:21:01', 'Phòng DCAN gửi bạn bảng chấm công tháng 02/2022.  Lưu ý: Bạn vui lòng liên hệ qua Mattermost với tam.ntm để được giải đáp các thắc mắc về ngày công và thời gian OT.', 4, 35, NULL, '2022-03-03 02:21:01', '2022-03-03 02:21:01'),
(17, '2022-03-03 09:21:14', 'Phòng DCAN gửi bạn bảng chấm công tháng 02/2022.  Lưu ý: Bạn vui lòng liên hệ qua Mattermost với tam.ntm để được giải đáp các thắc mắc về ngày công và thời gian OT.', 4, 35, NULL, '2022-03-03 02:21:14', '2022-03-03 02:21:14'),
(18, '2022-03-03 09:23:39', 'Phòng DCAN gửi bạn bảng chấm công tháng 02/2022.  Lưu ý: Bạn vui lòng liên hệ qua Mattermost với tam.ntm để được giải đáp các thắc mắc về ngày công và thời gian OT.', 4, 35, NULL, '2022-03-03 02:23:39', '2022-03-03 02:23:39'),
(19, '2022-03-03 09:33:51', 'Phòng DCAN gửi bạn bảng chấm công tháng 02/2022.  Lưu ý: Bạn vui lòng liên hệ qua Mattermost với tam.ntm để được giải đáp các thắc mắc về ngày công và thời gian OT.', 4, 35, NULL, '2022-03-03 02:33:51', '2022-03-03 02:33:51'),
(20, '2022-03-03 10:06:29', 'Phòng DCAN gửi bạn bảng chấm công tháng 02/2022.  Lưu ý: Bạn vui lòng liên hệ qua Mattermost với tam.ntm để được giải đáp các thắc mắc về ngày công và thời gian OT.', 4, 35, NULL, '2022-03-03 03:06:29', '2022-03-03 03:06:29'),
(21, '2022-03-03 10:10:30', 'Phòng DCAN gửi bạn bảng chấm công tháng 02/2022.  Lưu ý: Bạn vui lòng liên hệ qua Mattermost với tam.ntm để được giải đáp các thắc mắc về ngày công và thời gian OT.', 4, 35, NULL, '2022-03-03 03:10:30', '2022-03-03 03:10:30'),
(22, '2022-03-03 10:10:32', 'Phòng DCAN gửi bạn bảng chấm công tháng 02/2022.  Lưu ý: Bạn vui lòng liên hệ qua Mattermost với tam.ntm để được giải đáp các thắc mắc về ngày công và thời gian OT.', 4, 35, NULL, '2022-03-03 03:10:32', '2022-03-03 03:10:32'),
(24, '2022-03-03 10:12:50', 'Phòng DCAN gửi bạn bảng chấm công tháng 02/2022.  Lưu ý: Bạn vui lòng liên hệ qua Mattermost với tam.ntm để được giải đáp các thắc mắc về ngày công và thời gian OT.', 4, 35, NULL, '2022-03-03 03:12:50', '2022-03-03 03:12:50'),
(25, '2022-03-03 10:15:57', 'Phòng DCAN gửi bạn bảng chấm công tháng 02/2022.  Lưu ý: Bạn vui lòng liên hệ qua Mattermost với tam.ntm để được giải đáp các thắc mắc về ngày công và thời gian OT.', 4, 35, NULL, '2022-03-03 03:15:57', '2022-03-03 03:15:57'),
(26, '2022-03-03 10:15:58', 'Phòng DCAN gửi bạn bảng chấm công tháng 02/2022.  Lưu ý: Bạn vui lòng liên hệ qua Mattermost với tam.ntm để được giải đáp các thắc mắc về ngày công và thời gian OT.', 4, 35, NULL, '2022-03-03 03:15:58', '2022-03-03 03:15:58'),
(27, '2022-03-03 10:15:58', 'Phòng DCAN gửi bạn bảng chấm công tháng 02/2022.  Lưu ý: Bạn vui lòng liên hệ qua Mattermost với tam.ntm để được giải đáp các thắc mắc về ngày công và thời gian OT.', 4, 35, NULL, '2022-03-03 03:15:58', '2022-03-03 03:15:58'),
(28, '2022-03-03 10:16:36', 'Phòng DCAN gửi bạn bảng chấm công tháng 02/2022.  Lưu ý: Bạn vui lòng liên hệ qua Mattermost với tam.ntm để được giải đáp các thắc mắc về ngày công và thời gian OT.', 4, 35, NULL, '2022-03-03 03:16:36', '2022-03-03 03:16:36'),
(29, '2022-03-03 10:31:29', 'Phòng DCAN gửi bạn bảng chấm công tháng 02/2022.  Lưu ý: Bạn vui lòng liên hệ qua Mattermost với tam.ntm để được giải đáp các thắc mắc về ngày công và thời gian OT.', 4, 35, NULL, '2022-03-03 03:31:29', '2022-03-03 03:31:29'),
(30, '2022-03-03 10:35:11', 'Phòng DCAN gửi bạn bảng chấm công tháng 02/2022.  Lưu ý: Bạn vui lòng liên hệ qua Mattermost với tam.ntm để được giải đáp các thắc mắc về ngày công và thời gian OT.', 4, 35, NULL, '2022-03-03 03:35:11', '2022-03-03 03:35:11'),
(31, '2022-03-03 10:35:53', 'Phòng DCAN gửi bạn bảng chấm công tháng 02/2022.  Lưu ý: Bạn vui lòng liên hệ qua Mattermost với tam.ntm để được giải đáp các thắc mắc về ngày công và thời gian OT.', 4, 35, NULL, '2022-03-03 03:35:53', '2022-03-03 03:35:53'),
(32, '2022-03-03 10:36:25', 'Phòng DCAN gửi bạn bảng chấm công tháng 02/2022.  Lưu ý: Bạn vui lòng liên hệ qua Mattermost với tam.ntm để được giải đáp các thắc mắc về ngày công và thời gian OT.', 4, 35, NULL, '2022-03-03 03:36:25', '2022-03-03 03:36:25'),
(33, '2022-03-03 10:43:09', 'Phòng DCAN gửi bạn bảng chấm công tháng 02/2022.  Lưu ý: Bạn vui lòng liên hệ qua Mattermost với tam.ntm để được giải đáp các thắc mắc về ngày công và thời gian OT.', 4, 35, NULL, '2022-03-03 03:43:09', '2022-03-03 03:43:09'),
(34, '2022-03-03 10:44:01', 'Phòng DCAN gửi bạn bảng chấm công tháng 02/2022.  Lưu ý: Bạn vui lòng liên hệ qua Mattermost với tam.ntm để được giải đáp các thắc mắc về ngày công và thời gian OT.', 4, 35, NULL, '2022-03-03 03:44:01', '2022-03-03 03:44:01'),
(35, '2022-03-03 10:44:16', 'Phòng DCAN gửi bạn bảng chấm công tháng 02/2022.  Lưu ý: Bạn vui lòng liên hệ qua Mattermost với tam.ntm để được giải đáp các thắc mắc về ngày công và thời gian OT.', 4, 35, NULL, '2022-03-03 03:44:16', '2022-03-03 03:44:16'),
(36, '2022-03-03 10:44:58', 'Phòng DCAN gửi bạn bảng chấm công tháng 02/2022.  Lưu ý: Bạn vui lòng liên hệ qua Mattermost với tam.ntm để được giải đáp các thắc mắc về ngày công và thời gian OT.', 4, 35, NULL, '2022-03-03 03:44:58', '2022-03-03 03:44:58'),
(37, '2022-03-03 10:45:17', 'Phòng DCAN gửi bạn bảng chấm công tháng 02/2022.  Lưu ý: Bạn vui lòng liên hệ qua Mattermost với tam.ntm để được giải đáp các thắc mắc về ngày công và thời gian OT.', 4, 35, NULL, '2022-03-03 03:45:17', '2022-03-03 03:45:17'),
(38, '2022-03-03 11:00:03', 'Phòng DCAN gửi bạn bảng chấm công tháng 02/2022.  Lưu ý: Bạn vui lòng liên hệ qua Mattermost với tam.ntm để được giải đáp các thắc mắc về ngày công và thời gian OT.', 4, 35, NULL, '2022-03-03 04:00:03', '2022-03-03 04:00:03'),
(39, '2022-03-03 11:00:57', 'Phòng DCAN gửi bạn bảng chấm công tháng 02/2022.  Lưu ý: Bạn vui lòng liên hệ qua Mattermost với tam.ntm để được giải đáp các thắc mắc về ngày công và thời gian OT.', 4, 35, NULL, '2022-03-03 04:00:57', '2022-03-03 04:00:57'),
(40, '2022-03-03 11:03:15', 'Phòng DCAN gửi bạn bảng chấm công tháng 02/2022.  Lưu ý: Bạn vui lòng liên hệ qua Mattermost với tam.ntm để được giải đáp các thắc mắc về ngày công và thời gian OT.', 4, 35, NULL, '2022-03-03 04:03:15', '2022-03-03 04:03:15'),
(41, '2022-03-03 11:03:49', 'Phòng DCAN gửi bạn bảng chấm công tháng 02/2022.  Lưu ý: Bạn vui lòng liên hệ qua Mattermost với tam.ntm để được giải đáp các thắc mắc về ngày công và thời gian OT.', 4, 35, NULL, '2022-03-03 04:03:49', '2022-03-03 04:03:49'),
(42, '2022-03-03 11:04:13', 'Phòng DCAN gửi bạn bảng chấm công tháng 02/2022.  Lưu ý: Bạn vui lòng liên hệ qua Mattermost với tam.ntm để được giải đáp các thắc mắc về ngày công và thời gian OT.', 4, 22, NULL, '2022-03-03 04:04:13', '2022-03-03 04:04:13'),
(43, '2022-03-03 11:04:36', 'Phòng DCAN gửi bạn bảng chấm công tháng 02/2022.  Lưu ý: Bạn vui lòng liên hệ qua Mattermost với tam.ntm để được giải đáp các thắc mắc về ngày công và thời gian OT.', 4, 22, NULL, '2022-03-03 04:04:36', '2022-03-03 04:04:36'),
(44, '2022-03-03 11:05:33', 'ádsa', 4, 22, NULL, '2022-03-03 04:05:33', '2022-03-03 04:05:33'),
(45, '2022-03-03 11:05:39', 'Phòng DCAN gửi bạn bảng chấm công tháng 02/2022.  Lưu ý: Bạn vui lòng liên hệ qua Mattermost với tam.ntm để được giải đáp các thắc mắc về ngày công và thời gian OT.', 4, 22, NULL, '2022-03-03 04:05:39', '2022-03-03 04:05:39'),
(46, '2022-03-03 11:05:55', 'Phòng DCAN gửi bạn bảng chấm công tháng 02/2022.  Lưu ý: Bạn vui lòng liên hệ qua Mattermost với tam.ntm để được giải đáp các thắc mắc về ngày công và thời gian OT.', 4, 22, NULL, '2022-03-03 04:05:55', '2022-03-03 04:05:55'),
(47, '2022-03-03 11:06:58', 'Phòng DCAN gửi bạn bảng chấm công tháng 02/2022.  Lưu ý: Bạn vui lòng liên hệ qua Mattermost với tam.ntm để được giải đáp các thắc mắc về ngày công và thời gian OT.', 4, 22, NULL, '2022-03-03 04:06:58', '2022-03-03 04:06:58'),
(48, '2022-03-03 11:07:12', 'Phòng DCAN gửi bạn bảng chấm công tháng 02/2022.  Lưu ý: Bạn vui lòng liên hệ qua Mattermost với tam.ntm để được giải đáp các thắc mắc về ngày công và thời gian OT.', 4, 22, NULL, '2022-03-03 04:07:12', '2022-03-03 04:07:12'),
(49, '2022-03-03 11:10:21', 'Phòng DCAN gửi bạn bảng chấm công tháng 02/2022.  Lưu ý: Bạn vui lòng liên hệ qua Mattermost với tam.ntm để được giải đáp các thắc mắc về ngày công và thời gian OT.', 4, 22, NULL, '2022-03-03 04:10:21', '2022-03-03 04:10:21');

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
(12, '1', NULL, 5, '2022-03-04 03:37:38', '2022-03-04 03:37:38'),
(13, '2', NULL, 5, '2022-03-04 03:37:38', '2022-03-04 03:37:38'),
(14, '3', NULL, 5, '2022-03-04 03:37:38', '2022-03-04 03:37:38'),
(21, '3', NULL, 8, '2022-03-04 20:15:42', '2022-03-04 20:15:42'),
(22, '4', NULL, 8, '2022-03-04 20:15:42', '2022-03-04 20:15:42'),
(23, '5', NULL, 8, '2022-03-04 20:15:42', '2022-03-04 20:15:42');

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
(3, 'Pham Thị Ngoãn', '0339845491', 'Thái Bình', '2022-03-06 03:51:43', '2022-03-06 03:51:43');

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
(1, 'Yamaha Exciter RC 2020', 1, 1, '2022-02-25 23:26:05', '2022-02-25 23:26:05'),
(2, 'Honda Vario 2021', 2, 1, '2022-02-28 22:15:03', '2022-02-28 22:15:03'),
(3, 'Honda Lead 2021', 1, 2, '2022-02-28 22:16:16', '2022-02-28 22:16:16');

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
(3, 'Piaggio', '2022-02-28 22:15:45', '2022-02-28 22:15:45');

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
(5, '123746', '2022-03-05 20:49:18', 16, 1, 'dahoanthanh', '2022-03-04 03:37:38', '2022-03-05 13:49:18'),
(8, NULL, NULL, 10, 2, 'chonhan', '2022-03-04 20:15:42', '2022-03-04 20:15:42');

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
(1, '11', '1675634444', '202220222022', '2022', '11', '2022-02-17', '11', '2022-02-25 23:27:53', '2022-03-02 02:32:00'),
(2, '1', '1', '2022', '2022', '1', '2022-02-17', '1', '2022-02-25 23:28:35', '2022-02-25 23:28:35'),
(3, '1', '1', '2022', '2022', '1', '2022-02-17', '1', '2022-02-25 23:29:17', '2022-02-25 23:29:17'),
(4, '3', '3', '3', '2021', '3', '2022-02-18', '3', '2022-02-25 23:32:34', '2022-02-25 23:32:34'),
(5, '4', '4', '4', '2021', '4', '2022-02-11', '4', '2022-02-25 23:35:54', '2022-02-25 23:35:54'),
(6, '5', '5', '5', '2020', '5', '2022-02-17', '5', '2022-02-25 23:36:50', '2022-02-25 23:36:50'),
(7, '6', '6666666666', '666666666666', '2021', '6', '2022-02-11', '6', '2022-02-25 23:38:16', '2022-03-02 02:36:04'),
(8, '1', '1', '1', '2021', '1', '2022-02-04', '1', '2022-02-25 23:48:20', '2022-02-25 23:48:20'),
(9, '1', '1', '1', '2021', '1', '2022-02-04', '1', '2022-02-25 23:54:08', '2022-02-25 23:54:08'),
(10, '2', '8888888888', '888888888888', '2020', '2', '2022-02-24', '2', '2022-02-26 00:03:36', '2022-03-02 01:43:53'),
(11, '3', '3', '3', '2020', '3', '2022-02-11', '3', '2022-02-26 00:05:04', '2022-02-26 00:05:04'),
(12, '3', '3', '3', '2019', '3', '2022-02-17', '3', '2022-02-26 00:15:23', '2022-02-26 00:15:23'),
(13, '5', '5', '5', '2019', '5', '2022-02-25', '5', '2022-02-26 00:56:34', '2022-02-26 00:56:34'),
(14, '6', '6', '6', '2022', '6', '2022-02-17', '6', '2022-02-26 00:57:28', '2022-02-26 00:57:28'),
(15, 'Phạm Ngoãn', '0987654321', '123456789', '2022', 'Thái Bình', '2022-02-03', 'Thái Bình', '2022-02-26 01:41:27', '2022-03-02 06:47:44'),
(16, 'Phạm Ngoãn', '0987654321', '1234567890', '2022', 'Thái Bình', '2022-02-03', 'Thái Bình', '2022-02-26 01:53:07', '2022-02-26 01:53:07'),
(17, 'Phạm Ngoãn', '0123456789', '123456789034', '2009', '1234567890', '2022-02-04', 'Thái Bình', '2022-02-26 02:58:01', '2022-03-02 02:53:05'),
(18, 'Phạm Ngoãn', '0123456789', '123456789512', '2009', '1234567890', '2022-02-04', 'Thái Bình', '2022-02-26 02:58:05', '2022-03-02 01:41:45'),
(19, 'Phạm Ngoãn', '0123456789', '1234567890', '2009', '1234567890', '2022-02-04', 'Thái Bình', '2022-02-26 02:59:08', '2022-02-26 02:59:08'),
(20, 'Phạm Ngoãn', '0123456789', '1234567890', '2009', '1234567890', '2022-02-04', 'Thái Bình', '2022-02-26 03:00:43', '2022-02-26 03:00:43'),
(25, 'Phạm Ngoãn', '0339845495', '1234567890', '2020', 'Thái Bình', '2022-02-04', 'Thái Bình', '2022-02-26 23:22:33', '2022-02-26 23:22:33'),
(26, 'Trương', '0339845001', '1234567890', '2018', 'Thái', '2022-02-03', 'Thái', '2022-02-27 00:14:50', '2022-03-02 00:35:27'),
(27, 'Phạm Ngoãn', '0111111111', '1234567892', '1999', '1234567890', '2022-03-03', 'Thái Bình', '2022-02-28 10:35:56', '2022-02-28 10:35:56'),
(28, 'Phạm Hân Hoan', '0975491537', '1234567897', '1995', 'Thái Bình', '2022-03-03', 'Thái Bình', '2022-02-28 22:33:09', '2022-02-28 22:33:09'),
(29, 'Phạm Ngoãn', '0339845747', '1234567899', '2000', '1234567899', '2022-03-04', '1234567899', '2022-02-28 22:38:56', '2022-02-28 22:38:56'),
(30, '1234567811', '1234567811', '1234567811', '1988', '1234567811', '2022-03-04', '1234567811', '2022-02-28 22:40:07', '2022-02-28 22:40:07'),
(31, '1234567812', '1234567812', '1234567812', '1986', '1234567812', '2022-03-18', '1234567812', '2022-02-28 22:40:57', '2022-02-28 22:40:57'),
(32, 'Phạm Hằng', '0123456789', '1234567813', '1996', '1234567813', '2022-03-02', '1234567813', '2022-02-28 22:45:37', '2022-02-28 22:45:37'),
(33, 'Phạm Hân Hoan', '0339845000', '1234567894', '1987', 'Thái Bình', '2022-03-03', 'Thái Bình', '2022-02-28 22:47:38', '2022-02-28 22:47:38'),
(34, 'Phạm Hằng', '0339845111', '1234567896', '1993', '1234567890', '2022-03-03', 'Thái Bình 234', '2022-02-28 22:51:10', '2022-03-02 01:11:36'),
(35, 'Phạm Ngoãn', '0339845000', '152275872', '1987', 'Thái Bình', '2022-03-05', 'Thái Bình', '2022-03-01 20:46:33', '2022-03-01 20:46:33'),
(36, 'Phạm Ngoãn', '0339845621', '152275877', '1969', 'Thái Bình', '2022-03-04', 'Thái Bình', '2022-03-01 23:04:19', '2022-03-01 23:04:19'),
(37, 'Phạm Thang Hường', '0339845495', '1234567822', '2000', '1234567822', '2022-03-04', 'Thái Bình', '2022-03-02 00:33:49', '2022-03-02 00:33:49'),
(38, '2', '1234567890', '123456789012', '2022', '2', '2022-03-10', '2', '2022-03-02 01:54:48', '2022-03-02 01:54:48'),
(39, 'Phạm Ngoãn', '0339845234', '012345678910', '2006', 'Thái Bình', '2022-03-11', 'Thái Bình', '2022-03-02 01:57:37', '2022-03-02 01:57:37'),
(40, 'Phạm Ngoãn', '0339845012', '123456789013', '1975', 'Thái Bình', '2022-03-03', 'Thái Bình', '2022-03-02 02:04:36', '2022-03-02 02:04:36'),
(41, 'Ngọc Hân', '0339845888', '123456789666', '2003', 'Thái Bình', '2022-03-05', 'Thái Bình', '2022-03-02 07:28:21', '2022-03-02 07:28:21'),
(42, 'Phạm Ngoãn', '0339845001', '033984500000', '2016', 'Thái Bình', '2022-03-03', 'Thái Bình', '2022-03-06 03:55:31', '2022-03-06 03:57:23');

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
(1, 'Xe số', '2022-02-25 23:25:37', '2022-02-25 23:25:37'),
(2, 'Xe gia', '2022-02-28 22:14:39', '2022-02-28 22:14:39'),
(3, 'Xe điện', '2022-03-05 14:28:15', '2022-03-05 14:28:15');

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
(6, 3, NULL, NULL);

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
(2, 'Xe đang đăng web', NULL, NULL);

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
  `nam_dang_ky` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `so_km_da_di` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghi_chu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_xe`
--

INSERT INTO `tbl_xe` (`id`, `so_loai`, `mau_son`, `dung_tich`, `bien_so`, `dang_ky_tai`, `so_may`, `so_khung`, `bao_hiem_xe`, `ngay_mua`, `ngay_ban`, `gia_mua`, `gia_ban`, `gia_dang_web`, `iMa_trang_thai`, `iMa_khach_hang_mua_xe`, `iMa_khach_hang_ban_xe`, `iMa_dong_xe`, `nam_dang_ky`, `so_km_da_di`, `ghi_chu`, `created_at`, `updated_at`) VALUES
(10, '03456789', 'Màu xanh', '50', '17F00001', 'Thái Bình', '123456789', '123456789', NULL, '2022-02-26 09:59:08', NULL, '1234567890', NULL, NULL, 1, NULL, 19, 1, '', '', '', '2022-02-26 02:59:08', '2022-02-26 02:59:08'),
(11, '03456789', 'Màu xanh', '50', '17F00001', 'Thái Bình', '123456789', '123456789', NULL, '2022-02-26 10:00:43', NULL, '1234567890', NULL, NULL, 1, NULL, 20, 1, '', '', '', '2022-02-26 03:00:43', '2022-02-26 03:00:43'),
(16, '12000001', 'Màu đỏ', '50cc', '17A100011', 'Thái Bình', '400000', '20000', 'checked', '2022-03-03 05:09:22', NULL, '40000', NULL, '9đ', 2, NULL, 25, 1, '2013', '1000km', '', '2022-02-26 23:22:33', '2022-03-02 22:09:22'),
(17, '02222', 'Màu đỏ', '50cc', '17A20001', 'Thái Bình', '03373858365', 'K37263476', NULL, '2022-03-03 04:59:33', NULL, '4000', NULL, '2', 2, NULL, 26, 1, '2', '2', '', '2022-02-27 00:14:50', '2022-03-02 21:59:33'),
(18, '4', '4', '4', '4', '4', '4', '4', 'checked', '2022-02-28 14:48:16', NULL, '4', NULL, NULL, 1, NULL, 26, 1, '', '', '', '2022-02-28 07:48:16', '2022-02-28 07:48:16'),
(19, '1000000', '1000000', '50cc', '17A100001', 'Thái Bình', '6362734', '1000000', NULL, '2022-02-28 17:35:56', NULL, '30000000', NULL, NULL, 1, NULL, 27, 1, '', '', '', '2022-02-28 10:35:56', '2022-02-28 10:35:56'),
(20, '024672345', 'Màu xanh', '50cc', '17A10001', 'Thái Bình', '222222', '4627627', 'checked', '2022-03-01 05:33:09', NULL, '500000', NULL, NULL, 1, NULL, 28, 3, '', '', '', '2022-02-28 22:33:09', '2022-02-28 22:33:09'),
(21, '1234567899', '1234567899', '1234567899', '1234567899', '1234567899', '1234567899', '1234567899', 'checked', '2022-03-01 05:38:56', NULL, '1234567899', NULL, NULL, 1, NULL, 29, 3, '', '', '', '2022-02-28 22:38:56', '2022-02-28 22:38:56'),
(22, '1234567811', '1234567811', '1234567811', '1234567811', '1234567811', '1234567899', '1234567899', 'checked', '2022-03-01 05:40:07', NULL, '1234567899', NULL, NULL, 1, NULL, 30, 3, '', '', '', '2022-02-28 22:40:07', '2022-02-28 22:40:07'),
(23, '1234567812', '1234567812', '1234567812', '1234567812', '1234567812', '1234567812', '1234567812', 'checked', '2022-03-01 05:40:57', NULL, '1234567812', NULL, NULL, 1, NULL, 31, 2, '', '', '', '2022-02-28 22:40:57', '2022-02-28 22:40:57'),
(24, '1234567813', '1234567813', '1234567813', '1234567813', '1234567813', '1234567813', '1234567813', 'checked', '2022-03-01 05:45:37', NULL, '1234567813', NULL, NULL, 1, NULL, 32, 2, '', '', '', '2022-02-28 22:45:37', '2022-02-28 22:45:37'),
(25, '01234567', 'Màu xanh', '0772534', '17A00001', 'Thái Bình', '0772534', '0772534', 'checked', '2022-03-01 05:47:38', NULL, '1234567899', NULL, NULL, 1, NULL, 33, 3, '', '', '', '2022-02-28 22:47:38', '2022-02-28 22:47:38'),
(26, '12', 'Màu xanh', '50cc', '17A0004', 'Thái Bình', '50cc', '01238928', 'checked', '2022-03-01 05:51:10', NULL, '1234567899', NULL, NULL, 1, NULL, 34, 2, '', '', '', '2022-02-28 22:51:10', '2022-02-28 22:51:10'),
(27, 'F0001', 'Màu xanh', '20000', '17F2222', 'Thái Bình', 'KH383728', 'K100000', 'checked', '2022-03-02 03:46:33', NULL, '200000', NULL, NULL, 1, NULL, 35, 3, '', '', '', '2022-03-01 20:46:33', '2022-03-01 20:46:33'),
(28, '152275877', 'Màu xanh', '50cc', '17A00023', 'Thái Bình', 'Thái Bình', '123K127392', 'checked', '2022-03-02 06:04:19', NULL, '1234567899', NULL, NULL, 1, NULL, 36, 3, '', '', '', '2022-03-01 23:04:19', '2022-03-01 23:04:19'),
(29, '1234567822', 'Màu xanh', '50cc', '17F20001', 'Thái Bình', '6', 'K4872364', 'checked', '2022-03-02 07:33:49', NULL, '1234567899', NULL, NULL, 1, NULL, 37, 3, '', '', '', '2022-03-02 00:33:49', '2022-03-02 00:33:49'),
(30, '1', '1', '1', '1', '1', '1', '1', 'checked', '2022-03-02 08:32:44', NULL, '1', NULL, NULL, 1, NULL, 18, 3, '', '', '', '2022-03-02 01:32:44', '2022-03-02 01:32:44'),
(31, '2', '2', '2', '2', '2', '2', '2', 'checked', '2022-03-02 08:41:45', NULL, '2', NULL, NULL, 1, NULL, 18, 3, '', '', '', '2022-03-02 01:41:45', '2022-03-02 01:41:45'),
(32, '3', '3', '3', '3', '3', '3', '3', 'checked', '2022-03-02 08:43:53', NULL, '3', NULL, NULL, 1, NULL, 10, 3, '', '', '', '2022-03-02 01:43:53', '2022-03-02 01:43:53'),
(33, '2', '2', '2', '2', '2', '2', '2', 'checked', '2022-03-02 08:54:48', NULL, '2', NULL, NULL, 1, NULL, 38, 3, '', '', '', '2022-03-02 01:54:48', '2022-03-02 01:54:48'),
(34, '123', 'Màu xanh', '50cc', '2321312', '31', '4', '6', 'checked', '2022-03-02 08:57:37', NULL, '1234567899', NULL, NULL, 1, NULL, 39, 3, '', '', '', '2022-03-02 01:57:37', '2022-03-02 01:57:37'),
(35, '123456789013', '123456789013', '123456789013', '123456789013', 'Thái Bình', '123456789013', '123456789013', 'checked', '2022-03-03 05:01:54', NULL, '123456789013', NULL, '4', 2, NULL, 40, 1, '4', '4', '', '2022-03-02 02:04:36', '2022-03-02 22:01:54'),
(36, '31', '31', '1', '1', '1', '1', '1', 'checked', '2022-03-02 09:34:57', NULL, '1', NULL, NULL, 1, NULL, 1, 3, '', '', '', '2022-03-02 02:17:56', '2022-03-02 02:34:57'),
(37, '1', '2', '3', '4', '5', '6', '7', 'checked', '2022-03-02 09:36:53', NULL, '8', NULL, NULL, 1, NULL, 7, 3, '', '', '', '2022-03-02 02:36:04', '2022-03-02 02:36:53'),
(38, 'K2326571', 'Màu cam', '50cc-120cc', '17K726384', 'Thái Bình', '37247254', '46327467', 'checked', '2022-03-03 04:42:22', NULL, '1234567899', NULL, '2', 2, NULL, 41, 1, '2', '2', NULL, '2022-03-02 07:28:21', '2022-03-02 21:42:22'),
(39, '0339845001', '0339845001', '0339845001', '0339845001', '0339845001', '0339845001', '0339845001', NULL, '2022-03-06 10:57:23', NULL, '0339845001', NULL, NULL, 1, NULL, 42, 2, NULL, NULL, NULL, '2022-03-06 03:55:31', '2022-03-06 03:57:23'),
(40, '0339845001', '0339845001', '0339845001', '0339845001', '0339845001', '0339845001', '0339845001', 'checked', '2022-03-06 10:58:41', NULL, '0339845001', NULL, NULL, 1, NULL, 1, 3, NULL, NULL, NULL, '2022-03-06 03:58:27', '2022-03-06 03:58:41');

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
(1, 'admin', '0339845495', NULL, '$2y$10$7XPQpFGtaTLmzOi7oEhvnObBt9CvTtcq8dN5MERE1wCXOvJqDqk4G', 'foypYymly1jSBhU0iwU06OXNX6It4DO3JiNraJVEdc9vxoXTYtFuT0AE4bpd', '2022-02-25 23:21:38', '2022-03-06 03:41:15'),
(2, 'Cửa hàng Đức Thắng', '0123456789', NULL, '$2y$10$2IIt9vEysIBiEqD3trDc3.UF5owKy47ESSmI5ST3FFwdAyGoQnCG2', NULL, '2022-02-25 23:26:38', '2022-02-25 23:26:38'),
(3, 'Pham Thị Ngoãn', '0123456783', NULL, '$2y$10$gvDcufcW7Q76ZB5xKfq/QuUV.pX2hv6XayiSx3bwTP1RHjEWVFi7O', NULL, '2022-03-03 00:58:23', '2022-03-03 00:58:23'),
(4, 'Phạm Ngọc Hân', '0312987651', NULL, '$2y$10$809w88jMNH9gmDgys5SkkectLseLB/osxlucWSmMckCXYBS3fHwnS', NULL, '2022-03-03 01:22:24', '2022-03-03 01:22:24'),
(5, 'Cửa hàng Huy Hùng', '0987654321', NULL, '$2y$10$9Wl7X84fT2KezFIIHmfJVu3VmRER8E9afv0WtMe38LGielInCbApu', NULL, '2022-03-04 20:15:18', '2022-03-04 20:15:18'),
(6, 'Pham Thị Ngoãn', '0339845491', NULL, '$2y$10$mNO55rx767/q69SGRQZqCeU/omuHDi1NoGAn6WCRbZWbYdDcPYpsK', NULL, '2022-03-06 03:51:43', '2022-03-06 03:51:43');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT for table `tbl_binh_luan`
--
ALTER TABLE `tbl_binh_luan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `tbl_chi_tiet_hoa_don`
--
ALTER TABLE `tbl_chi_tiet_hoa_don`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_cua_hang_lien_ket`
--
ALTER TABLE `tbl_cua_hang_lien_ket`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_dong_xe`
--
ALTER TABLE `tbl_dong_xe`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_hang_xe`
--
ALTER TABLE `tbl_hang_xe`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_hoa_don`
--
ALTER TABLE `tbl_hoa_don`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_khach_hang`
--
ALTER TABLE `tbl_khach_hang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tbl_loai_anh`
--
ALTER TABLE `tbl_loai_anh`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_xe`
--
ALTER TABLE `tbl_xe`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
