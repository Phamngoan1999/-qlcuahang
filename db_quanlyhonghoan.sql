-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2022 at 02:14 PM
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
(693, '1647141395images (2).jpg', 82, 2, '2022-03-12 20:16:35', '2022-03-12 20:16:35'),
(695, '1647141574images (1).jpg', 83, 2, '2022-03-12 20:19:34', '2022-03-12 20:19:34'),
(696, '1647141605images (3).jpg', 83, 4, '2022-03-12 20:20:05', '2022-03-12 20:20:05'),
(697, '1647141667144532-frontview-1-.jpg', 83, 1, '2022-03-12 20:21:07', '2022-03-12 20:21:07'),
(698, '16471416674461738_e75b5928f02b795a1117ef0dbcc8b980.jpg', 83, 1, '2022-03-12 20:21:07', '2022-03-12 20:21:07'),
(699, '164714166720180805-08-2018-092905-4.jpg', 83, 1, '2022-03-12 20:21:07', '2022-03-12 20:21:07'),
(700, '1647141758images (1).jpg', 84, 2, '2022-03-12 20:22:38', '2022-03-12 20:22:38'),
(702, '1647141793images (1).jpg', 84, 1, '2022-03-12 20:23:13', '2022-03-12 20:23:13'),
(707, '164714233820210515_142917.jpg', 84, 1, '2022-03-12 20:32:20', '2022-03-12 20:32:20'),
(715, '1647143331mau-toc-tem-nu-dep-25.jpg', 84, 4, '2022-03-12 20:48:51', '2022-03-12 20:48:51'),
(716, '1647143780anhdemo.png', 85, 2, '2022-03-12 20:56:20', '2022-03-12 20:56:20'),
(717, '1647143806london-2393098.jpg', 86, 2, '2022-03-12 20:56:47', '2022-03-12 20:56:47'),
(718, '16471439531367567636_news.jpg', 86, 4, '2022-03-12 20:59:13', '2022-03-12 20:59:13'),
(719, '1647143953144532-frontview-1-.jpg', 86, 1, '2022-03-12 20:59:13', '2022-03-12 20:59:13'),
(720, '16471439534461738_e75b5928f02b795a1117ef0dbcc8b980.jpg', 86, 1, '2022-03-12 20:59:13', '2022-03-12 20:59:13'),
(721, '164714395320180805-08-2018-092905-4.jpg', 86, 1, '2022-03-12 20:59:13', '2022-03-12 20:59:13'),
(723, '1647145159images (1).jpg', 82, 1, '2022-03-12 21:19:19', '2022-03-12 21:19:19'),
(724, '1647145159images (2).jpg', 82, 1, '2022-03-12 21:19:19', '2022-03-12 21:19:19'),
(725, '1647145159images (3).jpg', 82, 1, '2022-03-12 21:19:20', '2022-03-12 21:19:20'),
(726, '164714757420180805-08-2018-092905-4.jpg', 82, 4, '2022-03-12 21:59:34', '2022-03-12 21:59:34'),
(727, '16471502984461738_e75b5928f02b795a1117ef0dbcc8b980.jpg', 87, 2, '2022-03-12 22:44:59', '2022-03-12 22:44:59'),
(729, '1647150335images (1).jpg', 87, 1, '2022-03-12 22:45:36', '2022-03-12 22:45:36'),
(730, '1647150336images (2).jpg', 87, 1, '2022-03-12 22:45:36', '2022-03-12 22:45:36'),
(731, '1647150336images (3).jpg', 87, 1, '2022-03-12 22:45:36', '2022-03-12 22:45:36'),
(732, '1647151053images (3).jpg', 87, 4, '2022-03-12 22:57:33', '2022-03-12 22:57:33'),
(733, '1647153956images (1).jpg', 88, 2, '2022-03-12 23:45:56', '2022-03-12 23:45:56'),
(734, '1647153956images (2).jpg', 88, 2, '2022-03-12 23:45:56', '2022-03-12 23:45:56'),
(735, '1647153956images (3).jpg', 88, 2, '2022-03-12 23:45:57', '2022-03-12 23:45:57'),
(736, '1647167616images (1).jpg', 85, 3, '2022-03-13 03:33:36', '2022-03-13 03:33:36'),
(739, '1647167745images (1).jpg', 82, 3, '2022-03-13 03:35:45', '2022-03-13 03:35:45'),
(740, '16471852804461738_e75b5928f02b795a1117ef0dbcc8b980.jpg', 83, 3, '2022-03-13 08:28:01', '2022-03-13 08:28:01'),
(741, '1647185841144532-frontview-1-.jpg', 86, 3, '2022-03-13 08:37:21', '2022-03-13 08:37:21'),
(742, '1647228371images (2).jpg', 87, 3, '2022-03-13 20:26:11', '2022-03-13 20:26:11'),
(744, '1647251399images (1).jpg', 88, 1, '2022-03-14 02:49:59', '2022-03-14 02:49:59'),
(752, '164725235620210515_142917.jpg', 88, 4, '2022-03-14 03:05:58', '2022-03-14 03:05:58'),
(753, '164731350120210515_142903.jpg', 89, 2, '2022-03-14 20:05:03', '2022-03-14 20:05:03'),
(756, '1647314735217674062_278888420681021_3583001458844245238_n.jpg', 89, 4, '2022-03-14 20:25:35', '2022-03-14 20:25:35'),
(757, '164731473520210515_142903.jpg', 89, 1, '2022-03-14 20:25:36', '2022-03-14 20:25:36'),
(758, '1647316853mau-toc-tem-nu-dep-25.jpg', 89, 3, '2022-03-14 21:00:53', '2022-03-14 21:00:53'),
(759, '1647317156Ảnh-hoa-cúc-họa-mi-cho-máy-tính.jpg', 88, 4, '2022-03-14 21:05:56', '2022-03-14 21:05:56'),
(760, '1647317156Hãy_trao_cho_anh.jpg', 88, 1, '2022-03-14 21:05:57', '2022-03-14 21:05:57'),
(761, '164733714020210515_142903.jpg', 90, 2, '2022-03-15 02:39:02', '2022-03-15 02:39:02'),
(763, '16473372331367567636_news.jpg', 90, 4, '2022-03-15 02:40:33', '2022-03-15 02:40:33'),
(764, '16473372331367567636_news.jpg', 90, 1, '2022-03-15 02:40:34', '2022-03-15 02:40:34'),
(765, '1647337519images (1).jpg', 91, 2, '2022-03-15 02:45:19', '2022-03-15 02:45:19'),
(766, '1647337671images (3).jpg', 91, 4, '2022-03-15 02:47:51', '2022-03-15 02:47:51'),
(767, '16473376714461738_e75b5928f02b795a1117ef0dbcc8b980.jpg', 91, 1, '2022-03-15 02:47:51', '2022-03-15 02:47:51'),
(768, '1647338348images (2).jpg', 91, 3, '2022-03-15 02:59:08', '2022-03-15 02:59:08'),
(769, '16473441911367567641_news.jpg', 84, 4, '2022-03-15 04:36:31', '2022-03-15 04:36:31'),
(770, '1647344191images (3).jpg', 84, 1, '2022-03-15 04:36:31', '2022-03-15 04:36:31');

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
(85, '2022-03-13 03:59:53', 'Nào hãy cùng tìm hiểu làm cách nào để sử dụng service providers để tự động load Helper file nhé. Đầu tiên hãy tạo một Helper service provider nào', 1, 86, 'qwwwwwwwwwwwwwwwwwwwwwwwwwwwww', '2022-03-12 20:59:53', '2022-03-12 22:03:52'),
(86, '2022-03-13 04:00:00', 'Nào hãy cùng tìm hiểu làm cách nào để sử dụng service providers để tự động load Helper file nhé. Đầu tiên hãy tạo một Helper service provider nào', 1, 86, NULL, '2022-03-12 21:00:00', '2022-03-12 21:00:00'),
(87, '2022-03-13 04:00:08', 'Nào hãy cùng tìm hiểu làm cách nào để sử dụng service providers để tự động load Helper file nhé. Đầu tiên hãy tạo một Helper service provider nào', 1, 86, NULL, '2022-03-12 21:00:08', '2022-03-12 21:00:08'),
(88, '2022-03-13 04:00:16', '1', 1, 86, NULL, '2022-03-12 21:00:16', '2022-03-12 21:00:16'),
(89, '2022-03-13 04:02:38', 'ádsa', 1, 86, NULL, '2022-03-12 21:02:38', '2022-03-12 21:02:38'),
(90, '2022-03-13 04:03:19', 'Nào hãy cùng tìm hiểu làm cách nào để sử dụng service providers để tự động load Helper file nhé. Đầu tiên hãy tạo một Helper service provider nào', 1, 86, NULL, '2022-03-12 21:03:19', '2022-03-12 21:03:19'),
(91, '2022-03-13 04:04:58', 'Ở trong một số project lớn hơn, sẽ có trường hợp bạn cần sử dụng nhiều file helper trong thư mục, bạn có thể đổi hàm register như sau:', 1, 86, NULL, '2022-03-12 21:04:58', '2022-03-12 21:04:58'),
(92, '2022-03-13 04:07:10', 'Phòng DCAN gửi bạn bảng chấm công tháng 02/2022.  Lưu ý: Bạn vui lòng liên hệ qua Mattermost với tam.ntm để được giải đáp các thắc mắc về ngày công và thời gian OT.', 1, 86, NULL, '2022-03-12 21:07:10', '2022-03-12 21:07:10'),
(93, '2022-03-13 04:11:28', 'Phòng DCAN gửi bạn bảng chấm công tháng 02/2022.  Lưu ý: Bạn vui lòng liên hệ qua Mattermost với tam.ntm để được giải đáp các thắc mắc về ngày công và thời gian OT.', 1, 86, NULL, '2022-03-12 21:11:28', '2022-03-12 21:11:28'),
(94, '2022-03-13 04:13:01', 'ádsa', 1, 86, NULL, '2022-03-12 21:13:01', '2022-03-12 21:13:01'),
(95, '2022-03-13 04:13:11', 'Nào hãy cùng tìm hiểu làm cách nào để sử dụng service providers để tự động load Helper file nhé. Đầu tiên hãy tạo một Helper service provider nào', 1, 86, NULL, '2022-03-12 21:13:11', '2022-03-12 21:13:11'),
(97, '2022-03-13 04:16:22', 'Phòng DCAN gửi bạn bảng chấm công tháng 02/2022.  Lưu ý: Bạn vui lòng liên hệ qua Mattermost với tam.ntm để được giải đáp các thắc mắc về ngày công và thời gian OT.', 1, 86, NULL, '2022-03-12 21:16:22', '2022-03-12 21:16:22'),
(98, '2022-03-13 04:56:58', 'Phòng DCAN gửi bạn bảng chấm công tháng 02/2022.  Lưu ý: Bạn vui lòng liên hệ qua Mattermost với tam.ntm để được giải đáp các thắc mắc về ngày công và thời gian OT.', 1, 86, NULL, '2022-03-12 21:56:58', '2022-03-12 21:56:58'),
(99, '2022-03-13 05:58:14', 'Nào hãy cùng tìm hiểu làm cách nào để sử dụng service providers để tự động load Helper file nhé. Đầu tiên hãy tạo một Helper service provider nào', 1, 82, NULL, '2022-03-12 22:58:14', '2022-03-12 22:58:14'),
(100, '2022-03-13 05:58:21', 'Nào hãy cùng tìm hiểu làm cách nào để sử dụng service providers để tự động load Helper file nhé. Đầu tiên hãy tạo một Helper service provider nào', 1, 82, NULL, '2022-03-12 22:58:21', '2022-03-12 22:58:21'),
(101, '2022-03-13 08:10:04', 'Nào hãy cùng tìm hiểu làm cách nào để sử dụng service providers để tự động load Helper file nhé. Đầu tiên hãy tạo một Helper service provider nào', 1, 86, NULL, '2022-03-13 01:10:04', '2022-03-13 01:10:04'),
(102, '2022-03-13 08:10:15', 'Nào hãy cùng tìm hiểu làm cách nào để sử dụng service providers để tự động load Helper file nhé. Đầu tiên hãy tạo một Helper service provider nào', 1, 86, NULL, '2022-03-13 01:10:15', '2022-03-13 01:10:15'),
(108, '2022-03-13 08:45:55', 'Ở trong một số project lớn hơn, sẽ có trường hợp bạn cần sử dụng nhiều file helper trong thư mục, bạn có thể đổi hàm register như sau:', 11, 86, NULL, '2022-03-13 01:45:55', '2022-03-13 01:45:55'),
(109, '2022-03-13 08:46:06', '123344444', 11, NULL, NULL, '2022-03-13 01:46:06', '2022-03-13 01:46:06'),
(111, '2022-03-14 10:07:59', 'Nào hãy cùng tìm hiểu làm cách nào để sử dụng service providers để tự động load Helper file nhé. Đầu tiên hãy tạo một Helper service provider nào', 1, 88, NULL, '2022-03-14 03:07:59', '2022-03-14 03:07:59');

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
(180, 'Bình xăng', '222,222VNĐ', 104, '2022-03-13 03:09:02', '2022-03-13 07:35:34'),
(181, 'Bình xăng 3', '3,333,333VNĐ', 105, '2022-03-13 06:21:36', '2022-03-13 07:38:35'),
(182, 'Bình xăng', '33,333,333VNĐ', 105, '2022-03-13 06:21:57', '2022-03-13 07:38:36'),
(187, 'Bình xăng 3', NULL, 106, '2022-03-13 06:57:20', '2022-03-13 06:57:20'),
(191, 'Bình xăng', NULL, 106, '2022-03-13 07:13:08', '2022-03-13 07:13:08'),
(192, 'Bình xăng 3', NULL, 106, '2022-03-13 07:13:13', '2022-03-13 07:13:13'),
(193, '1', NULL, 106, '2022-03-13 07:13:24', '2022-03-13 07:13:24'),
(194, '2', NULL, 106, '2022-03-13 07:13:24', '2022-03-13 07:13:24'),
(195, '3', NULL, 106, '2022-03-13 07:13:24', '2022-03-13 07:13:24'),
(197, 'Vành xe', '33,333,333VNĐ', 107, '2022-03-13 07:46:19', '2022-03-13 07:47:31');

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
(4, 'Cửa hàng Hoàng Hưng', '0339845401', '0339845491', '2022-03-10 08:19:14', '2022-03-10 08:19:14'),
(8, 'Cửa hàng Hoàng Đức', '0339845400', 'Thái Bình', '2022-03-14 03:41:39', '2022-03-14 04:09:32');

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
(104, '222222', '2022-03-13 14:36:05', 88, 1, 'dahoanthanh', '2022-03-13 03:09:02', '2022-03-13 07:36:05'),
(105, '36666666', '2022-03-13 14:38:36', 86, 1, 'dahoanthanh', '2022-03-13 06:21:36', '2022-03-13 07:38:36'),
(106, NULL, NULL, 87, 1, 'huyhoadon', '2022-03-13 06:49:15', '2022-03-13 07:44:45'),
(107, '33333333', '2022-03-13 14:47:31', 87, 2, 'dahoanthanh', '2022-03-13 07:46:19', '2022-03-13 07:47:31');

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
(95, 'Phạm Ngoãn', '0339845111', '111111111111', '2003', 'Thái Bình', '2022-03-01', 'Thái Bình', '2022-03-12 20:01:49', '2022-03-12 20:01:49'),
(96, 'Phạm Huy Hoàng', '2222222222', '222222222222', '2002', '22222222222', '2022-03-01', '2222222222222', '2022-03-12 20:19:34', '2022-03-12 20:19:34'),
(97, '33333333', '3333333333', '333333333331', '2007', '3333333333', '2022-03-01', '3333333333333', '2022-03-12 20:22:38', '2022-03-15 03:16:31'),
(98, 'Phạm Ngoãn', '0339845111', '111111111112', '2007', '111111111111111', '2022-03-10', '11111111111111', '2022-03-12 20:56:20', '2022-03-12 20:56:20'),
(99, 'Phạm Ngoãn', '0339845222', '222222222221', '2009', '2222222222222', '2022-03-01', '2222222222', '2022-03-12 23:45:56', '2022-03-12 23:45:56'),
(100, '33333333333', '3333333333', '333333333333', '2019', '33333333333', '2022-03-01', '333333333', '2022-03-13 03:35:45', '2022-03-13 03:35:45'),
(101, 'Phạm Huy Hoàng', '0234123456', '321111111111', '2012', 'Thái Bình', '2022-03-01', 'Thái Bình', '2022-03-13 08:28:00', '2022-03-13 08:28:00'),
(102, '111111111111', '1111111111', '111111111114', '2009', '111111111111', '2022-03-01', '111111111111', '2022-03-13 08:37:21', '2022-03-13 08:37:21'),
(103, 'Phạm Huy Hoàng', '0339876545', '152275879', '2000', 'Thái Bình', '2022-03-01', 'Thái Bình', '2022-03-13 20:26:11', '2022-03-13 20:26:11'),
(104, 'Phạm Huy Hoàng', '0339845333', '125364000000', '1987', 'Thái Bình', '2022-03-24', 'Thái Bình', '2022-03-14 20:05:01', '2022-03-14 20:05:01'),
(105, 'Phạm Ngoãn', '0339845111', '1234567890', '2005', 'Thái Bình', '2022-03-01', 'Thái Bình', '2022-03-15 02:39:00', '2022-03-15 02:39:00'),
(106, 'Phạm Ngọc Hân', '0987678511', '098767851111', '2000', 'Thái Bình', '2022-03-01', 'Thái Bình', '2022-03-15 02:45:19', '2022-03-15 02:45:19');

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
(82, '333333', '33333333333', '3333333', '333333333', '333333333', '3333333', '333333333', 'checked', '2022-03-13 05:57:59', NULL, '33333', '3333333', '3', 'Từ 20Đ - 30Đ', 3, 100, 95, 3, '2021', '3', NULL, '2022-03-12 20:16:35', '2022-03-13 03:35:45'),
(83, '2222222222222222', '22222222222222222', '222222222222222', '22222222222', '22222222222222', '22222222222', '22222222', 'checked', '2022-03-13 03:21:07', NULL, '33333', '22222222222', '333', '', 3, 101, 96, 3, '2000', '333', NULL, '2022-03-12 20:19:34', '2022-03-13 08:28:00'),
(84, '33333333333', '3333333333', '33333333333', '3333333333', '33333333', '33333333333', '33333333333', 'checked', '2022-03-15 10:16:31', NULL, '15000000', NULL, '33333', 'Từ 20Đ - 30Đ', 2, NULL, 97, 2, '2008', '33333', NULL, '2022-03-12 20:22:38', '2022-03-15 04:36:31'),
(85, '11111111111', '111111111111111', '1111111111111', '111111111111111', '111111111111111', '11111111111111', '1111111111', 'checked', '2022-03-13 03:56:20', NULL, '111111111', '11111111', NULL, '', 3, 96, 98, 2, NULL, NULL, NULL, '2022-03-12 20:56:20', '2022-03-13 03:33:36'),
(86, '333333333', '333333333333', '3333333333333', '33333333333', '3333333333', '33333333333', '333333', 'checked', '2022-03-13 03:59:19', NULL, '33333', '111111111111', '44444', '', 3, 102, 98, 2, '2006', '44444', '22222222', '2022-03-12 20:56:46', '2022-03-13 08:37:21'),
(87, '555555', '5555555555', '555555555', '5555555555', '5555555555555', '55555555', '5555555555', 'checked', '2022-03-13 06:45:06', NULL, '11111111', '3333333', '2', 'Trên 30Đ', 3, 103, 95, 2, '2022', '2', NULL, '2022-03-12 22:44:58', '2022-03-13 20:26:11'),
(88, '22222222222222', '222222222222', '222222222', '2222222222222', '222222222222', '222222222222', '22222222', 'checked', '2022-03-15 10:15:30', NULL, '33333333', NULL, '3333ok', 'Từ 20Đ - 30Đ', 1, NULL, 99, 3, '2005', '3333ok', NULL, '2022-03-12 23:45:56', '2022-03-15 03:15:30'),
(89, '12312312312', 'Màu xanh', '50cc', '17F020202', 'Thái Bình', '137153176313127', '647236472', NULL, '2022-03-15 03:24:42', NULL, '222222', '11111', '22K', 'Từ 10Đ - 20Đ', 3, 95, 104, 2, '2020', '3333333333', '11111', '2022-03-14 20:05:01', '2022-03-14 21:00:53'),
(90, '2222222', 'Màu xanh', '50cc', '2222222222222', '2222222222222', '22222222', '2222222222222', 'checked', '2022-03-15 11:37:07', NULL, '', NULL, '444444', 'Từ 10Đ - 20Đ', 2, NULL, 105, 4, '2003', '444444', NULL, '2022-03-15 02:39:00', '2022-03-15 04:37:07'),
(91, '0987678511', '0987678511', '60cc', '0987678511', '0987678511', '0987678511', '234343242', 'checked', '2022-03-15 09:46:51', NULL, '14000000', '14000000', '15tr', 'Từ 20Đ - 30Đ', 3, 106, 106, 2, '2003', '10 vạn km', NULL, '2022-03-15 02:45:19', '2022-03-15 02:59:08');

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
(1, 'admin', '0339845495', NULL, '$2y$10$7XPQpFGtaTLmzOi7oEhvnObBt9CvTtcq8dN5MERE1wCXOvJqDqk4G', 'eoiMDOMfBz9aSh09ebK6zo1ES5e0Da1mfEQuG81PUBRpfYHaag3pS9KsSvMO', '2022-02-25 23:21:38', '2022-03-06 03:41:15'),
(2, 'Cửa hàng Đức Thắng', '0123456789', NULL, '$2y$10$yS3h.qciSU/BQM1H1/SAMekVVEMe32klpgHHmicCXWzZDYIbC6mHC', NULL, '2022-02-25 23:26:38', '2022-03-07 04:03:14'),
(3, 'Pham Thị Ngoãn', '0123456783', NULL, '$2y$10$gvDcufcW7Q76ZB5xKfq/QuUV.pX2hv6XayiSx3bwTP1RHjEWVFi7O', NULL, '2022-03-03 00:58:23', '2022-03-03 00:58:23'),
(4, 'Phạm Ngọc Hân', '0312987651', NULL, '$2y$10$809w88jMNH9gmDgys5SkkectLseLB/osxlucWSmMckCXYBS3fHwnS', NULL, '2022-03-03 01:22:24', '2022-03-03 01:22:24'),
(5, 'Cửa hàng Huy Hùng', '0987654321', NULL, '$2y$10$9Wl7X84fT2KezFIIHmfJVu3VmRER8E9afv0WtMe38LGielInCbApu', NULL, '2022-03-04 20:15:18', '2022-03-04 20:15:18'),
(6, 'Pham Thị Ngoãn', '0339845491', NULL, '$2y$10$mNO55rx767/q69SGRQZqCeU/omuHDi1NoGAn6WCRbZWbYdDcPYpsK', NULL, '2022-03-06 03:51:43', '2022-03-06 03:51:43'),
(7, 'Cửa hàng Hoàng Hưng', '0339845401', NULL, '$2y$10$fbCdBsuUuRhq2eZU9OpS0uJ.9ZamYVGiWMSNgo120AnF9v02BeyUO', NULL, '2022-03-10 08:19:14', '2022-03-10 08:19:14'),
(8, 'Cửa hàng Hoàng Đức', '339845400', NULL, '$2y$10$sssBDAeBITIlMZKOyLMOtOEe5GKVf0M//U2iI2PZAgCxQIgKTEAHm', NULL, '2022-03-10 08:20:31', '2022-03-14 06:58:20'),
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=771;

--
-- AUTO_INCREMENT for table `tbl_binh_luan`
--
ALTER TABLE `tbl_binh_luan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `tbl_chi_tiet_hoa_don`
--
ALTER TABLE `tbl_chi_tiet_hoa_don`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `tbl_khach_hang`
--
ALTER TABLE `tbl_khach_hang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

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
