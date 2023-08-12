-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Agu 2023 pada 03.40
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventarisasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `activity_logs`
--

CREATE TABLE `activity_logs` (
  `id` int(11) NOT NULL,
  `log_user` varchar(50) NOT NULL,
  `log_type` varchar(50) NOT NULL,
  `log_action` varchar(50) NOT NULL,
  `log_item` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `activity_logs`
--

INSERT INTO `activity_logs` (`id`, `log_user`, `log_type`, `log_action`, `log_item`, `created_at`) VALUES
(1, 'administrator', 'Melakukan Login', 'Login', 'admin', '2022-12-20 20:51:06'),
(2, 'administrator', 'Melakukan Logout', 'Logout', 'administrator', '2022-12-20 20:52:16'),
(3, 'administrator', 'Melakukan Login', 'Login', 'administrator', '2022-12-20 20:53:34'),
(4, 'administrator', 'Melakukan Logout', 'Logout', 'administrator', '2022-12-20 20:53:41'),
(5, 'administrator', 'Melakukan Login', 'Login', 'administrator', '2022-12-20 20:53:46'),
(6, 'administrator', 'Data Barang', 'Menambah', 'Jaket', '2022-12-20 20:54:12'),
(7, 'administrator', 'Data Barang', 'Mengubah', 'Jaket', '2022-12-20 20:54:45'),
(8, 'administrator', 'Data Barang', 'Menambah', 'Jaket', '2022-12-20 20:56:33'),
(9, 'administrator', 'Data Barang', 'Menghapus', 'Jaket', '2022-12-20 20:56:40'),
(10, 'administrator', 'Data Barang', 'Menambah', 'Jaket', '2022-12-20 20:57:12'),
(11, 'administrator', 'Data Barang', 'Menambah', 'Hoodie', '2022-12-20 20:58:50'),
(12, 'administrator', 'Data Barang Masuk', 'Menambah', 'Hoodie', '2022-12-20 20:59:08'),
(13, 'administrator', 'Melakukan Logout', 'Logout', 'administrator', '2022-12-20 21:31:59'),
(14, 'sekretaris', 'Melakukan Login', 'Login', 'sekretaris', '2022-12-20 21:32:16'),
(15, 'sekretaris', 'Melakukan Logout', 'Logout', 'sekretaris', '2022-12-20 21:34:18'),
(16, 'administrator', 'Melakukan Login', 'Login', 'administrator', '2022-12-20 21:34:21'),
(17, 'administrator', 'Data User', 'Mengubah', 'sekretaris', '2022-12-20 21:35:26'),
(18, 'administrator', 'Melakukan Logout', 'Logout', 'administrator', '2022-12-20 21:35:43'),
(19, 'sekretaris', 'Melakukan Login', 'Login', 'sekretaris', '2022-12-20 21:35:45'),
(20, 'sekretaris', 'Melakukan Logout', 'Logout', 'sekretaris', '2022-12-20 21:36:27'),
(21, 'administrator', 'Melakukan Login', 'Login', 'administrator', '2022-12-20 21:36:30'),
(22, 'administrator', 'Melakukan Login', 'Login', 'administrator', '2022-12-26 18:53:51'),
(23, 'administrator', 'Melakukan Logout', 'Logout', 'administrator', '2022-12-26 18:53:55'),
(24, 'administrator', 'Melakukan Login', 'Login', 'administrator', '2022-12-26 18:54:15'),
(25, 'administrator', 'Melakukan Logout', 'Logout', 'administrator', '2022-12-26 19:24:45'),
(26, 'administrator', 'Melakukan Login', 'Login', 'administrator', '2022-12-26 19:24:47'),
(27, 'administrator', 'Melakukan Logout', 'Logout', 'administrator', '2022-12-26 19:25:10'),
(28, 'administrator', 'Melakukan Login', 'Login', 'administrator', '2022-12-26 19:25:12'),
(29, 'administrator', 'Melakukan Logout', 'Logout', 'administrator', '2022-12-26 19:25:15'),
(30, 'sekretaris', 'Melakukan Login', 'Login', 'sekretaris', '2022-12-26 19:25:17'),
(31, 'sekretaris', 'Melakukan Logout', 'Logout', 'sekretaris', '2022-12-26 19:28:56'),
(32, 'sekretaris', 'Melakukan Login', 'Login', 'sekretaris', '2022-12-26 19:28:58'),
(33, 'administrator', 'Melakukan Login', 'Login', 'administrator', '2022-12-26 19:41:42'),
(34, 'administrator', 'Melakukan Logout', 'Logout', 'administrator', '2022-12-26 19:41:45'),
(35, 'sekretaris', 'Melakukan Login', 'Login', 'sekretaris', '2022-12-26 19:41:47'),
(36, 'sekretaris', 'Melakukan Logout', 'Logout', 'sekretaris', '2022-12-26 19:42:35'),
(37, 'administrator', 'Melakukan Login', 'Login', 'administrator', '2022-12-26 19:43:06'),
(38, 'administrator', 'Melakukan Login', 'Login', 'administrator', '2023-01-07 16:09:34'),
(39, 'sekretaris', 'Melakukan Login', 'Login', 'sekretaris', '2023-01-07 16:09:38'),
(40, 'administrator', 'Melakukan Login', 'Login', 'administrator', '2023-01-07 16:28:51'),
(41, 'administrator', 'Data Barang Masuk', 'Menambah', 'baju batik', '2023-01-07 16:45:02'),
(42, 'administrator', 'Data Barang Masuk', 'Menambah', 'sepatu', '2023-01-07 16:45:36'),
(43, 'administrator', 'Data Barang Masuk', 'Menambah', 'baju batik', '2023-01-07 16:54:31'),
(44, 'administrator', 'Data Barang Masuk', 'Menambah', 'Jaket', '2023-01-07 16:57:21'),
(45, 'administrator', 'Data Barang Masuk', 'Menambah', 'sepatu', '2023-01-07 16:57:47'),
(46, 'administrator', 'Melakukan Logout', 'Logout', 'administrator', '2023-01-07 16:58:09'),
(47, 'administrator', 'Melakukan Login', 'Login', 'administrator', '2023-01-07 17:09:31'),
(48, 'administrator', 'Melakukan Logout', 'Logout', 'administrator', '2023-01-07 17:09:52'),
(49, 'administrator', 'Melakukan Login', 'Login', 'administrator', '2023-01-07 17:10:01'),
(50, 'administrator', 'Data User', 'Menghapus', 'aulia', '2023-01-07 17:20:17'),
(51, 'administrator', 'Data User', 'Menghapus', 'kadis', '2023-01-07 17:25:28'),
(52, 'administrator', 'Data User', 'Menambah', 'kadis', '2023-01-07 17:25:42'),
(53, 'administrator', 'Melakukan Logout', 'Logout', 'administrator', '2023-01-07 17:26:02'),
(54, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-01-07 17:26:07'),
(55, 'kadis', 'Melakukan Logout', 'Logout', 'kadis', '2023-01-07 18:14:17'),
(56, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-01-07 18:17:30'),
(57, 'admin', 'Data User', 'Menambah', 'sekretaris', '2023-01-07 18:18:09'),
(58, 'admin', 'Data User', 'Menambah', 'kadis', '2023-01-07 18:18:28'),
(59, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-01-07 18:18:32'),
(60, 'sekretaris', 'Melakukan Login', 'Login', 'sekretaris', '2023-01-07 18:18:34'),
(61, 'sekretaris', 'Melakukan Logout', 'Logout', 'sekretaris', '2023-01-07 18:18:37'),
(62, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-01-07 18:18:45'),
(63, 'kadis', 'Melakukan Logout', 'Logout', 'kadis', '2023-01-07 18:18:53'),
(64, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-01-07 18:18:55'),
(65, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-01-10 23:17:11'),
(66, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-01-11 13:48:31'),
(67, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-01-11 14:43:44'),
(68, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-01-11 14:43:47'),
(69, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-01-12 19:50:41'),
(70, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-01-12 20:57:29'),
(71, 'sekretaris', 'Melakukan Login', 'Login', 'sekretaris', '2023-01-12 20:57:32'),
(72, 'sekretaris', 'Melakukan Login', 'Login', 'sekretaris', '2023-01-17 19:41:40'),
(73, 'sekretaris', 'Melakukan Logout', 'Logout', 'sekretaris', '2023-01-17 19:41:45'),
(74, 'sekretaris', 'Melakukan Login', 'Login', 'sekretaris', '2023-01-17 19:41:47'),
(75, 'sekretaris', 'Melakukan Logout', 'Logout', 'sekretaris', '2023-01-17 19:48:44'),
(76, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-01-17 19:48:49'),
(77, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-01-24 12:08:42'),
(78, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-01-24 12:11:50'),
(79, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-01-24 12:11:53'),
(80, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-01-24 12:11:54'),
(81, 'sekretaris', 'Melakukan Login', 'Login', 'sekretaris', '2023-01-24 12:11:57'),
(82, 'sekretaris', 'Melakukan Logout', 'Logout', 'sekretaris', '2023-01-24 12:12:03'),
(83, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-01-24 12:12:09'),
(84, 'kadis', 'Melakukan Logout', 'Logout', 'kadis', '2023-01-24 12:16:22'),
(85, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-01-24 12:16:23'),
(86, 'kadis', 'Melakukan Logout', 'Logout', 'kadis', '2023-01-24 12:16:58'),
(87, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-01-24 12:18:14'),
(88, 'kadis', 'Melakukan Logout', 'Logout', 'kadis', '2023-01-24 12:18:19'),
(89, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-01-24 12:18:22'),
(90, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-01-25 19:36:39'),
(91, 'admin', 'Data Barang', 'Mengubah', 'pulpen', '2023-01-25 19:41:29'),
(92, 'admin', 'Data Barang', 'Mengubah', 'pensil', '2023-01-25 19:41:36'),
(93, 'admin', 'Data Barang', 'Mengubah', 'kertas', '2023-01-25 19:41:42'),
(94, 'admin', 'Data Barang', 'Mengubah', 'stapless', '2023-01-25 19:41:52'),
(95, 'admin', 'Data Barang', 'Mengubah', 'tipe-x', '2023-01-25 19:42:09'),
(96, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-01-25 19:47:55'),
(97, 'sekretaris', 'Melakukan Login', 'Login', 'sekretaris', '2023-01-25 19:47:57'),
(98, 'sekretaris', 'Melakukan Logout', 'Logout', 'sekretaris', '2023-01-25 19:48:37'),
(99, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-01-25 19:48:40'),
(100, 'kadis', 'Melakukan Logout', 'Logout', 'kadis', '2023-01-25 19:54:52'),
(101, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-01-25 19:54:55'),
(102, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-02-05 10:14:36'),
(103, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-02-05 10:14:54'),
(104, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-02-05 10:19:01'),
(105, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-02-05 10:19:37'),
(106, 'admin', 'Data Barang', 'Menambah', 'buku', '2023-02-05 10:20:55'),
(107, 'admin', 'Data Barang', 'Menambah', 'Map', '2023-02-05 10:21:24'),
(108, 'admin', 'Data Barang', 'Menambah', 'kertas A4', '2023-02-05 10:21:57'),
(109, 'admin', 'Data Barang', 'Menambah', 'Kertas F4', '2023-02-05 10:22:23'),
(110, 'admin', 'Data Barang', 'Menambah', 'Stabilo', '2023-02-05 10:22:53'),
(111, 'admin', 'Data Barang', 'Mengubah', 'kertas A4', '2023-02-05 10:23:04'),
(112, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-02-11 20:50:30'),
(113, 'admin', 'Data Supplier', 'Menambah', 'achmad', '2023-02-11 20:50:49'),
(114, 'admin', 'Data Supplier', 'Menambah', 'aji', '2023-02-11 20:51:02'),
(115, 'admin', 'Data Supplier', 'Menambah', 'Muhammad', '2023-02-11 20:52:10'),
(116, 'admin', 'Data Supplier', 'Menambah', 'Siti', '2023-02-11 20:52:31'),
(117, 'admin', 'Data User', 'Menambah', 'Operator', '2023-02-11 20:54:27'),
(118, 'admin', 'Data User', 'Menambah', 'Operator2', '2023-02-11 20:55:06'),
(119, 'admin', 'Data Barang Keluar', 'Menambah', 'tipe-x', '2023-02-11 20:56:22'),
(120, 'admin', 'Data Barang Masuk', 'Menambah', 'kertas A4', '2023-02-11 20:56:56'),
(121, 'admin', 'Data Barang Keluar', 'Menambah', 'kertas A4', '2023-02-11 20:57:11'),
(122, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-02-22 09:47:27'),
(123, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-03-08 08:03:58'),
(124, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-03-08 08:04:01'),
(125, 'Operator', 'Melakukan Login', 'Login', 'Operator', '2023-03-08 08:04:05'),
(126, 'Operator', 'Melakukan Logout', 'Logout', 'Operator', '2023-03-08 08:04:14'),
(127, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-03-08 08:04:17'),
(128, 'kadis', 'Melakukan Logout', 'Logout', 'kadis', '2023-03-08 08:04:59'),
(129, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-03-08 08:05:02'),
(130, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-03-08 08:09:13'),
(131, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-03-08 08:09:15'),
(132, 'kadis', 'Melakukan Logout', 'Logout', 'kadis', '2023-03-08 08:09:22'),
(133, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-03-08 08:09:25'),
(134, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-03-08 08:10:09'),
(135, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-03-08 08:35:58'),
(136, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-03-08 08:40:35'),
(137, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-03-08 08:40:39'),
(138, 'kadis', 'Melakukan Logout', 'Logout', 'kadis', '2023-03-08 08:41:25'),
(139, 'Operator', 'Melakukan Login', 'Login', 'Operator', '2023-03-08 08:41:28'),
(140, 'Operator', 'Melakukan Logout', 'Logout', 'Operator', '2023-03-08 08:41:52'),
(141, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-03-08 08:41:55'),
(142, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-06-10 14:02:48'),
(143, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-06-10 14:29:47'),
(144, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-06-10 14:29:49'),
(145, 'kadis', 'Melakukan Logout', 'Logout', 'kadis', '2023-06-10 14:39:38'),
(146, 'sekretaris', 'Melakukan Login', 'Login', 'sekretaris', '2023-06-10 14:39:41'),
(147, 'sekretaris', 'Melakukan Logout', 'Logout', 'sekretaris', '2023-06-10 14:44:39'),
(148, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-06-10 14:44:41'),
(149, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-06-10 14:45:26'),
(150, 'kadis', 'Validasi Barang Masuk', 'Validasi', 'pulpen', '2023-06-10 15:16:03'),
(151, 'kadis', 'Validasi Barang Masuk', 'Validasi', 'pulpen', '2023-06-10 15:16:40'),
(152, 'kadis', 'Validasi Barang Masuk', 'Validasi', 'pulpen', '2023-06-10 15:17:31'),
(153, 'kadis', 'Data Barang Masuk', 'Reject', 'stapless', '2023-06-10 15:36:21'),
(154, 'kadis', 'Data Barang Masuk', 'Reject', 'kertas', '2023-06-10 15:37:26'),
(155, 'kadis', 'Data Barang Masuk', 'Reject', 'pulpen', '2023-06-10 15:37:46'),
(156, 'admin', 'Data Barang', 'Menghapus', 'kertas A4', '2023-06-10 15:37:59'),
(157, 'kadis', 'Validasi Barang Masuk', 'Validasi', 'pulpen', '2023-06-10 15:59:30'),
(158, 'admin', 'Data Barang', 'Menambah', 'Remot', '2023-06-10 16:00:47'),
(159, 'admin', 'Data Barang', 'Menambah', 'Remote', '2023-06-10 16:02:53'),
(160, 'admin', 'Data Barang', 'Mengubah', 'Remote', '2023-06-10 16:04:27'),
(161, 'admin', 'Data Barang', 'Mengubah', 'Remote', '2023-06-10 16:05:27'),
(162, 'kadis', 'Melakukan Logout', 'Logout', 'kadis', '2023-06-10 16:26:20'),
(163, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-06-10 16:26:22'),
(164, 'kadis', 'Melakukan Logout', 'Logout', 'kadis', '2023-06-10 16:29:15'),
(165, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-06-10 16:29:17'),
(166, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-06-10 16:31:43'),
(167, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-06-10 16:31:46'),
(168, 'admin', 'Data Asset', 'Menambah', 'Resort Takisung', '2023-06-10 17:05:11'),
(169, 'admin', 'Data Asset', 'Mengubah', 'Resort Takisung', '2023-06-10 17:18:33'),
(170, 'admin', 'Data Asset', 'Mengubah', 'Resort Takisung', '2023-06-10 17:18:41'),
(171, 'admin', 'Data Asset', 'Mengubah', 'Resort Takisung', '2023-06-10 17:18:44'),
(172, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-06-10 18:16:00'),
(173, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-06-10 18:16:03'),
(174, 'kadis', 'Melakukan Logout', 'Logout', 'kadis', '2023-06-10 18:23:18'),
(175, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-06-10 18:23:21'),
(176, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-06-10 18:43:51'),
(177, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-06-10 18:43:54'),
(178, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-06-11 07:53:22'),
(179, 'kadis', 'Melakukan Logout', 'Logout', 'kadis', '2023-06-11 07:53:24'),
(180, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-06-11 07:53:28'),
(181, 'admin', 'Data Barang', 'Menambah', 'Mesin', '2023-06-11 07:54:13'),
(182, 'admin', 'Data Barang', 'Menghapus', 'pulpen', '2023-06-11 08:03:18'),
(183, 'admin', 'Data Barang', 'Menghapus', 'pensil', '2023-06-11 08:03:19'),
(184, 'admin', 'Data Barang', 'Menghapus', 'kertas', '2023-06-11 08:03:19'),
(185, 'admin', 'Data Barang', 'Menghapus', 'stapless', '2023-06-11 08:03:20'),
(186, 'admin', 'Data Barang', 'Menghapus', 'tipe-x', '2023-06-11 08:03:20'),
(187, 'admin', 'Data Barang', 'Menghapus', 'buku', '2023-06-11 08:03:20'),
(188, 'admin', 'Data Barang', 'Menghapus', 'Map', '2023-06-11 08:03:21'),
(189, 'admin', 'Data Barang', 'Menghapus', 'Kertas F4', '2023-06-11 08:03:21'),
(190, 'admin', 'Data Barang', 'Menghapus', 'Stabilo', '2023-06-11 08:03:21'),
(191, 'admin', 'Data Barang', 'Menghapus', 'Remot', '2023-06-11 08:03:21'),
(192, 'admin', 'Data Barang', 'Menghapus', 'Remote', '2023-06-11 08:03:21'),
(193, 'admin', 'Data Barang', 'Menghapus', 'Mesin', '2023-06-11 08:03:22'),
(194, 'admin', 'Data Barang', 'Menambah', 'buku', '2023-06-11 08:03:39'),
(195, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-06-11 08:03:59'),
(196, 'admin', 'Data Barang Masuk', 'Menambah', 'buku', '2023-06-11 08:04:32'),
(197, 'admin', 'Data Barang', 'Mengubah', 'buku', '2023-06-11 08:04:42'),
(198, 'kadis', 'Validasi Barang Masuk', 'Validasi', 'buku', '2023-06-11 08:05:02'),
(199, 'admin', 'Data Barang', 'Menambah', 'Map', '2023-06-11 08:05:20'),
(200, 'admin', 'Data Barang', 'Menghapus', 'Map', '2023-06-11 08:05:27'),
(201, 'admin', 'Data Barang', 'Menghapus', 'buku', '2023-06-11 08:07:45'),
(202, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-06-11 14:14:23'),
(203, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-06-11 14:14:24'),
(204, 'admin', 'Data Barang', 'Menambah', 'buku', '2023-06-11 14:14:37'),
(205, 'admin', 'Data Barang Masuk', 'Menambah', 'buku', '2023-06-11 14:32:06'),
(206, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-06-11 14:32:26'),
(207, 'kadis', 'Validasi Barang Masuk', 'Validasi', 'buku', '2023-06-11 14:32:40'),
(208, 'kadis', 'Validasi Barang Masuk', 'Validasi', 'buku', '2023-06-11 14:39:14'),
(209, 'admin', 'Data Barang Masuk', 'Menambah', 'buku', '2023-06-11 14:47:05'),
(210, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-06-11 14:47:43'),
(211, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-06-11 15:46:22'),
(212, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-06-11 15:46:37'),
(213, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-06-11 15:47:49'),
(214, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-06-11 15:51:10'),
(215, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-06-11 15:54:49'),
(216, 'admin', 'Data Barang Masuk', 'Menambah', 'buku', '2023-06-11 16:06:11'),
(217, 'admin', 'Data Barang', 'Mengubah', 'buku', '2023-06-11 16:17:59'),
(218, 'admin', 'Data Barang', 'Mengubah', 'buku', '2023-06-11 16:21:48'),
(219, 'admin', 'Data Barang', 'Mengubah', 'buku', '2023-06-11 16:22:28'),
(220, 'admin', 'Data Barang Keluar', 'Menambah', 'buku', '2023-06-11 16:23:14'),
(221, 'admin', 'Data Barang Keluar', 'Mengubah', 'buku', '2023-06-11 16:25:31'),
(222, 'admin', 'Data Barang Keluar', 'Mengubah', 'buku', '2023-06-11 16:26:41'),
(223, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-06-11 17:00:22'),
(224, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-06-11 17:00:39'),
(225, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-06-11 17:01:09'),
(226, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-06-11 17:02:49'),
(227, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-06-11 17:02:53'),
(228, 'kadis', 'Melakukan Logout', 'Logout', 'kadis', '2023-06-11 17:02:56'),
(229, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-06-11 17:02:58'),
(230, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-06-14 20:09:43'),
(231, 'admin', 'Data Barang Keluar', 'Menambah', 'buku', '2023-06-14 20:12:34'),
(232, 'admin', 'Data Barang Keluar', 'Menambah', 'buku', '2023-06-14 20:26:33'),
(233, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-06-14 20:38:42'),
(234, 'admin', 'Pengembalian Barang Keluar', 'Pengembalian', 'buku', '2023-06-14 20:55:52'),
(235, 'admin', 'Validasi Barang Masuk', 'Validasi', 'buku', '2023-06-14 20:55:52'),
(236, 'admin', 'Pengembalian Barang Keluar', 'Pengembalian', 'buku', '2023-06-14 21:02:46'),
(237, 'admin', 'Validasi Barang Masuk', 'Validasi', 'buku', '2023-06-14 21:02:46'),
(238, 'admin', 'Data Barang', 'Menambah', 'botol', '2023-06-14 21:17:48'),
(239, 'admin', 'Data Barang', 'Menambah', 'Jaket', '2023-06-14 21:23:21'),
(240, 'admin', 'Data Barang', 'Menambah', 'asdasd', '2023-06-14 21:23:56'),
(241, 'admin', 'Data Barang', 'Menambah', 'asdasd', '2023-06-14 21:24:41'),
(242, 'admin', 'Data Barang', 'Menambah', 'asdasd', '2023-06-14 21:26:55'),
(243, 'admin', 'Data Barang', 'Menambah', 'kertas A4', '2023-06-14 21:27:19'),
(244, 'admin', 'Data Barang', 'Mengubah', 'asdasd', '2023-06-14 21:30:39'),
(245, 'admin', 'Data Barang', 'Mengubah', 'Jaket', '2023-06-14 21:30:42'),
(246, 'admin', 'Data Barang', 'Mengubah', 'botol', '2023-06-14 21:30:44'),
(247, 'admin', 'Data Barang', 'Mengubah', 'buku', '2023-06-14 21:30:46'),
(248, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-06-14 22:56:29'),
(249, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-06-14 22:56:31'),
(250, 'kadis', 'Melakukan Logout', 'Logout', 'kadis', '2023-06-14 22:56:38'),
(251, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-06-14 22:56:42'),
(252, 'admin', 'Data Peminjaman Aset', 'Meminjam', 'Resort Takisung', '2023-06-14 23:24:46'),
(253, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-06-15 17:45:20'),
(254, 'admin', 'Data Peminjaman Aset', 'Mengubah', 'Resort Takisung', '2023-06-15 18:33:15'),
(255, 'admin', 'Data Asset', 'Menambah', 'Resort Batakan', '2023-06-15 19:15:15'),
(256, 'admin', 'Data Peminjaman Aset', 'Meminjam', 'Resort Takisung', '2023-06-15 19:17:57'),
(257, 'admin', 'Data Peminjaman Aset', 'Meminjam', 'Resort Takisung', '2023-06-15 19:49:47'),
(258, 'admin', 'Data Peminjaman Aset', 'Meminjam', 'Resort Takisung', '2023-06-15 19:53:16'),
(259, 'admin', 'Validasi Penerimaan Asset', 'Validasi', 'Resort Takisung', '2023-06-15 20:22:11'),
(260, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-03 09:46:09'),
(261, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-03 09:47:25'),
(262, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-03 09:52:47'),
(263, 'admin', 'Data Barang', 'Menambah', 'Map', '2023-07-03 09:54:17'),
(264, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-03 10:01:23'),
(265, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-07-03 10:57:32'),
(266, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-07-03 10:57:34'),
(267, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-05 18:57:47'),
(268, 'admin', 'Data Barang Masuk', 'Menambah', 'asdasd', '2023-07-05 19:05:32'),
(269, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-07-05 19:05:38'),
(270, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-07-05 19:05:40'),
(271, 'kadis', 'Validasi Barang Masuk', 'Validasi', 'asdasd', '2023-07-05 19:05:46'),
(272, 'kadis', 'Melakukan Logout', 'Logout', 'kadis', '2023-07-05 19:05:48'),
(273, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-05 19:05:51'),
(274, 'admin', 'Data Barang Keluar', 'Menambah', 'asdasd', '2023-07-05 19:11:58'),
(275, 'admin', 'Data Supplier', 'Mengubah', 'aji', '2023-07-05 19:18:02'),
(276, 'admin', 'Data Supplier', 'Mengubah', 'aji', '2023-07-05 19:18:07'),
(277, 'admin', 'Data Supplier', 'Mengubah', 'aji', '2023-07-05 19:18:10'),
(278, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-05 19:27:39'),
(279, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-05 19:34:23'),
(280, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-05 19:49:09'),
(281, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-05 19:50:57'),
(282, 'admin', 'Data Barang Masuk', 'Menambah', 'botol', '2023-07-05 20:05:08'),
(283, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-07-05 20:05:13'),
(284, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-07-05 20:05:16'),
(285, 'kadis', 'Validasi Barang Masuk', 'Validasi', 'botol', '2023-07-05 20:05:20'),
(286, 'admin', 'Data Bidang', 'Menambah', 'Pemasaran', '2023-07-05 20:45:15'),
(287, 'admin', 'Data Bidang', 'Menambah', 'Sekretariat', '2023-07-05 20:46:08'),
(288, 'admin', 'Data Bidang', 'Menambah', 'Destinasi', '2023-07-05 20:46:15'),
(289, 'admin', 'Data bidang', 'Menghapus', 'Destinasi', '2023-07-05 20:46:17'),
(290, 'admin', 'Data Bidang', 'Menambah', 'Destinasi', '2023-07-05 20:46:21'),
(291, 'admin', 'Data Bidang', 'Mengubah', 'Destinasii', '2023-07-05 20:46:25'),
(292, 'admin', 'Data Bidang', 'Mengubah', 'Destinasi', '2023-07-05 20:46:28'),
(293, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-05 20:50:18'),
(294, 'admin', 'Data Barang Keluar', 'Menambah', 'botol', '2023-07-05 20:51:41'),
(295, 'admin', 'Data Barang Keluar', 'Mengubah', 'botol', '2023-07-05 20:57:26'),
(296, 'admin', 'Data Barang Keluar', 'Mengubah', 'botol', '2023-07-05 20:57:33'),
(297, 'admin', 'Data Barang Keluar', 'Mengubah', 'botol', '2023-07-05 20:58:18'),
(298, 'admin', 'Data Barang Keluar', 'Mengubah', 'botol', '2023-07-05 20:59:17'),
(299, 'admin', 'Data Barang Keluar', 'Mengubah', 'botol', '2023-07-05 20:59:38'),
(300, 'admin', 'Data Barang Keluar', 'Mengubah', 'botol', '2023-07-05 21:03:04'),
(301, 'admin', 'Data Barang', 'Menambah', 'kertas A4', '2023-07-05 21:16:29'),
(302, 'admin', 'Data Barang', 'Menghapus', 'Map', '2023-07-05 21:16:38'),
(303, 'admin', 'Data Barang', 'Menambah', 'Flashdisk', '2023-07-05 21:24:14'),
(304, 'admin', 'Data Barang', 'Mengubah', 'kertas A4', '2023-07-05 21:24:24'),
(305, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-05 21:28:10'),
(306, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-07-05 21:28:16'),
(307, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-05 21:28:19'),
(308, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-07-05 21:28:22'),
(309, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-05 21:28:25'),
(310, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-07-05 21:37:25'),
(311, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-07-05 21:37:30'),
(312, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-05 21:41:57'),
(313, 'admin', 'Data Barang Masuk', 'Menambah', 'Flashdisk', '2023-07-05 21:44:35'),
(314, 'kadis', 'Validasi Barang Masuk', 'Validasi', 'Flashdisk', '2023-07-05 21:44:46'),
(315, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-05 21:51:05'),
(316, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-05 21:53:21'),
(317, 'admin', 'Data Barang Masuk', 'Menambah', 'Flashdisk', '2023-07-05 21:53:43'),
(318, 'admin', 'Data Barang Masuk', 'Menambah', 'Flashdisk', '2023-07-05 21:57:48'),
(319, 'admin', 'Data Barang Keluar', 'Menambah', 'botol', '2023-07-05 22:44:42'),
(320, 'admin', 'Pengembalian Barang Keluar', 'Pengembalian', 'botol', '2023-07-05 23:03:38'),
(321, 'admin', 'Validasi Barang Masuk', 'Validasi', 'botol', '2023-07-05 23:03:38'),
(322, 'admin', 'Data Barang Keluar', 'Menambah', 'Flashdisk', '2023-07-05 23:05:24'),
(323, 'admin', 'Pengembalian Barang Keluar', 'Pengembalian', 'Flashdisk', '2023-07-05 23:05:52'),
(324, 'admin', 'Validasi Barang Masuk', 'Validasi', 'Flashdisk', '2023-07-05 23:05:52'),
(325, 'admin', 'Data Barang Keluar', 'Menambah', 'Flashdisk', '2023-07-05 23:06:22'),
(326, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-06 06:20:58'),
(327, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-06 06:39:13'),
(328, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-06 06:39:15'),
(329, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-07-06 06:39:16'),
(330, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-06 06:39:18'),
(331, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-06 06:39:19'),
(332, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-07-06 06:57:39'),
(333, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-07-06 06:57:45'),
(334, 'admin', 'Data Barang Masuk', 'Menambah', 'kertas A4', '2023-07-06 07:25:36'),
(335, 'kadis', 'Melakukan Logout', 'Logout', 'kadis', '2023-07-06 07:25:40'),
(336, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-07-06 07:25:43'),
(337, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-07-06 07:25:45'),
(338, 'kadis', 'Validasi Barang Masuk', 'Validasi', 'kertas A4', '2023-07-06 07:25:50'),
(339, 'admin', 'Data Bidang', 'Menambah', 'Ekonomi Kreatif', '2023-07-06 07:29:16'),
(340, 'admin', 'Data Bidang', 'Mengubah', 'Pengembangan sdm ekraf', '2023-07-06 07:37:52'),
(341, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-07-06 07:40:17'),
(342, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-07-06 07:52:25'),
(343, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-06 07:55:29'),
(344, 'admin', 'Data Peminjaman Aset', 'Mengubah', 'Resort Takisung', '2023-07-06 09:31:10'),
(345, 'admin', 'Data Peminjaman Aset', 'Meminjam', 'Resort Takisung', '2023-07-06 09:31:23'),
(346, 'admin', 'Data Peminjaman Aset', 'Mengubah', 'Resort Takisung', '2023-07-06 09:31:36'),
(347, 'admin', 'Validasi Penerimaan Asset', 'Validasi', 'Resort Takisung', '2023-07-06 09:31:41'),
(348, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-06 15:06:12'),
(349, 'admin', 'Data Peminjaman Aset', 'Meminjam', 'Resort Takisung', '2023-07-06 15:11:40'),
(350, 'admin', 'Validasi Penerimaan Asset', 'Validasi', 'Resort Takisung', '2023-07-06 15:11:55'),
(351, 'admin', 'Data Peminjaman Aset', 'Meminjam', 'Resort Takisung', '2023-07-06 15:18:08'),
(352, 'admin', 'Data Peminjaman Aset', 'Meminjam', 'Resort Takisung', '2023-07-06 15:23:15'),
(353, 'admin', 'Data Peminjaman Aset', 'Meminjam', 'Resort Takisung', '2023-07-06 15:30:38'),
(354, 'admin', 'Data Peminjaman Asset', 'Menghapus', '1', '2023-07-06 15:30:40'),
(355, 'admin', 'Data Peminjaman Aset', 'Meminjam', 'Resort Takisung', '2023-07-06 15:31:52'),
(356, 'admin', 'Data Peminjaman Aset', 'Meminjam', 'Resort Takisung', '2023-07-06 15:32:02'),
(357, 'admin', 'Data Peminjaman Asset', 'Menghapus', '1', '2023-07-06 15:32:05'),
(358, 'admin', 'Data Peminjaman Asset', 'Menghapus', '10', '2023-07-06 15:32:38'),
(359, 'admin', 'Data Peminjaman Aset', 'Meminjam', 'Resort Takisung', '2023-07-06 15:34:02'),
(360, 'admin', 'Validasi Penerimaan Asset', 'Validasi', 'Resort Takisung', '2023-07-06 15:39:12'),
(361, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-06 15:49:41'),
(362, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-06 15:51:07'),
(363, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-06 15:51:43'),
(364, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-07-06 15:56:43'),
(365, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-06 15:56:58'),
(366, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-07-06 15:58:35'),
(367, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-06 15:58:51'),
(368, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-06 16:00:53'),
(369, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-06 16:01:20'),
(370, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-06 16:05:29'),
(371, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-06 16:06:30'),
(372, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-06 16:06:49'),
(373, 'admin', 'Data Barang', 'Mengubah', 'kertas A4', '2023-07-06 17:22:05'),
(374, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-07-06 17:22:31'),
(375, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-06 17:22:33'),
(376, 'admin', 'Data Barang Keluar', 'Menambah', 'Flashdisk', '2023-07-06 17:39:35'),
(377, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-06 17:46:39'),
(378, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-07-06 19:49:21'),
(379, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-06 19:49:44'),
(380, 'admin', 'Data Barang Masuk', 'Menghapus', 'asdasd', '2023-07-06 19:52:29'),
(381, 'admin', 'Data Barang', 'Menghapus', 'asdasd', '2023-07-06 19:52:40'),
(382, 'admin', 'Data Barang', 'Menghapus', 'asdasd', '2023-07-06 19:52:42'),
(383, 'admin', 'Data Barang', 'Menghapus', 'asdasd', '2023-07-06 19:52:43'),
(384, 'admin', 'Data Barang', 'Menghapus', 'Jaket', '2023-07-06 19:52:47'),
(385, 'admin', 'Data Barang', 'Menghapus', 'kertas A4', '2023-07-06 19:52:48'),
(386, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-07-06 19:54:38'),
(387, 'kadis', 'Validasi Barang Masuk', 'Validasi', 'Flashdisk', '2023-07-06 19:54:48'),
(388, 'kadis', 'Validasi Barang Masuk', 'Validasi', 'Flashdisk', '2023-07-06 19:54:50'),
(389, 'admin', 'Data Barang', 'Menghapus', 'botol', '2023-07-06 19:55:19'),
(390, 'admin', 'Data Barang', 'Mengubah', 'buku', '2023-07-06 19:55:26'),
(391, 'admin', 'Data Barang', 'Mengubah', 'kertas A4', '2023-07-06 19:56:25'),
(392, 'admin', 'Data Barang', 'Mengubah', 'Flashdisk', '2023-07-06 19:56:40'),
(393, 'admin', 'Data Barang', 'Mengubah', 'Flashdisk', '2023-07-06 19:56:50'),
(394, 'admin', 'Data Barang', 'Mengubah', 'kertas A4', '2023-07-06 19:56:56'),
(395, 'admin', 'Data Barang', 'Mengubah', 'buku', '2023-07-06 19:57:00'),
(396, 'admin', 'Data Barang Masuk', 'Menambah', 'Flashdisk', '2023-07-06 19:57:16'),
(397, 'kadis', 'Validasi Barang Masuk', 'Validasi', 'Flashdisk', '2023-07-06 19:57:24'),
(398, 'admin', 'Data Barang Keluar', 'Menambah', 'Flashdisk', '2023-07-06 19:59:10'),
(399, 'admin', 'Data Barang Keluar', 'Mengubah', 'Flashdisk', '2023-07-06 19:59:24'),
(400, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-07 14:04:13'),
(401, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-07 19:00:07'),
(402, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-07-07 19:01:16'),
(403, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-07 19:01:30'),
(404, 'admin', 'Data Barang', 'Menambah', 'Map', '2023-07-07 20:38:26'),
(405, 'admin', 'Data Barang Masuk', 'Menambah', 'Map', '2023-07-07 20:39:01'),
(406, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-07-07 20:39:28'),
(407, 'kadis', 'Validasi Barang Masuk', 'Validasi', 'Map', '2023-07-07 20:39:44'),
(408, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-07 20:57:37'),
(409, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-08 06:06:46'),
(410, 'admin', 'Data Barang Keluar', 'Menambah', 'Map', '2023-07-08 06:28:34'),
(411, 'admin', 'Data Barang Keluar', 'Menambah', 'Flashdisk', '2023-07-08 06:34:18'),
(412, 'admin', 'Data Barang Keluar', 'Menambah', 'Flashdisk', '2023-07-08 06:44:15'),
(413, 'admin', 'Data Barang Keluar', 'Menambah', 'Flashdisk', '2023-07-08 06:48:16'),
(414, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-09 13:07:20'),
(415, 'admin', 'Daftar Pengadaan', 'Menambah', 'Jaket', '2023-07-09 13:40:10'),
(416, 'admin', 'Daftar Pengadaan', 'Mengubah', 'Jaket', '2023-07-09 13:46:31'),
(417, 'admin', 'Daftar Pengadaan', 'Mengubah', 'Jakett', '2023-07-09 13:47:41'),
(418, 'admin', 'Daftar Pengadaan', 'Mengubah', 'Jakett', '2023-07-09 13:50:12'),
(419, 'admin', 'Daftar Pengadaan', 'Menambah', 'Kursi', '2023-07-09 13:51:14'),
(420, 'admin', 'Daftar Pengadaan', 'Menambah', 'Meja', '2023-07-09 13:53:22'),
(421, 'admin', 'Daftar Pengadaan', 'Menambah', 'Laptop', '2023-07-09 13:53:36'),
(422, 'admin', 'Daftar Pengadaan', 'Mengubah', 'Jakett', '2023-07-09 13:53:46'),
(423, 'admin', 'Daftar Pengadaan', 'Menambah', 'Printer', '2023-07-09 13:54:10'),
(424, 'admin', 'Daftar Pengadaan', 'Menambah', 'kamera', '2023-07-09 13:55:07'),
(425, 'admin', 'Daftar Pengadaan', 'Menambah', 'achmad', '2023-07-09 14:52:52'),
(426, 'admin', 'Daftar Pengadaan', 'Menambah', 'sekretaris', '2023-07-09 15:00:44'),
(427, 'admin', 'Daftar Pengadaan', 'Mengubah', 'kamera', '2023-07-09 15:03:55'),
(428, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-07-09 15:21:17'),
(429, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-09 15:21:22'),
(430, 'admin', 'Daftar Pengadaan', 'Menambah', 'kadis', '2023-07-09 15:22:51'),
(431, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-09 15:23:00'),
(432, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-07-09 15:23:28'),
(433, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-09 15:23:44'),
(434, 'admin', 'Data Barang Keluar', 'Menambah', 'Flashdisk', '2023-07-09 15:31:04'),
(435, 'admin', 'Data Barang Keluar', 'Menambah', 'Flashdisk', '2023-07-09 15:31:17'),
(436, 'admin', 'Data Barang Keluar', 'Menambah', 'Flashdisk', '2023-07-09 15:31:33'),
(437, 'admin', 'Data Barang Keluar', 'Menambah', 'Flashdisk', '2023-07-09 15:31:59'),
(438, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-07-09 15:47:29'),
(439, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-09 15:53:58'),
(440, 'admin', 'Daftar Pengadaan', 'Menambah', 'Meja Lipat', '2023-07-09 15:55:01'),
(441, 'admin', 'Daftar Pengadaan', 'Menambah', 'dedi', '2023-07-09 15:56:05'),
(442, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-09 15:56:11'),
(443, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-07-09 16:14:32'),
(444, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-09 16:15:19'),
(445, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-07-09 16:16:15'),
(446, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-18 21:54:47'),
(447, 'admin', 'Daftar Pengadaan', 'Menambah', 'Kursi', '2023-07-18 21:55:13'),
(448, 'admin', 'Daftar Pengadaan', 'Menambah', 'rosyadi', '2023-07-18 21:57:47'),
(449, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-20 21:25:25'),
(450, 'admin', 'Daftar Pengadaan', 'Mengubah', 'Furniture', '2023-07-20 21:30:18'),
(451, 'admin', 'Daftar Pengadaan', 'Mengubah', 'Furniture', '2023-07-20 21:31:29'),
(452, 'admin', 'Daftar Pengadaan', 'Menambah', 'sekretaris', '2023-07-20 21:43:46'),
(453, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-20 21:43:57'),
(454, 'admin', 'Daftar Pengadaan', 'Menambah', 'kadis', '2023-07-20 21:47:01'),
(455, 'admin', 'Daftar Pengadaan', 'Menambah', 'kadis', '2023-07-20 21:51:30'),
(456, 'admin', 'Daftar Pengadaan', 'Menambah', 'kadis', '2023-07-20 22:02:33'),
(457, 'admin', 'Daftar Pengadaan', 'Menambah', 'sekretaris', '2023-07-20 22:03:37'),
(458, 'admin', 'Daftar Pengadaan', 'Menambah', 'kadis', '2023-07-20 22:04:09'),
(459, 'admin', 'Daftar Pengadaan', 'Menambah', 'sekretaris', '2023-07-20 22:20:45'),
(460, 'admin', 'Daftar Pengadaan', 'Menambah', 'kadis', '2023-07-20 22:22:42'),
(461, 'admin', 'Daftar Pengadaan', 'Menambah', 'kadis', '2023-07-20 22:24:52'),
(462, 'admin', 'Daftar Pengadaan', 'Menambah', 'kadis', '2023-07-20 22:29:09'),
(463, 'admin', 'Daftar Pengadaan', 'Menambah', 'kadis', '2023-07-20 22:33:06'),
(464, 'admin', 'Daftar Pengadaan', 'Menambah', 'asasdasd', '2023-07-20 22:34:03'),
(465, 'admin', 'Daftar Pengadaan', 'Menambah', 'sekretaris', '2023-07-20 22:36:14'),
(466, 'admin', 'Daftar Pengadaan', 'Menambah', 'kadis', '2023-07-20 22:36:48'),
(467, 'admin', 'Daftar Pengadaan', 'Menambah', 'kadis', '2023-07-20 22:41:54'),
(468, 'admin', 'Daftar Pengadaan', 'Menambah', 'kadis', '2023-07-20 22:43:51'),
(469, 'admin', 'Daftar Pengadaan', 'Menambah', 'kadis', '2023-07-20 22:44:19'),
(470, 'admin', 'Daftar Pengadaan', 'Menambah', 'kadis', '2023-07-20 22:49:09'),
(471, 'admin', 'Daftar Pengadaan', 'Menambah', 'kadis', '2023-07-20 22:50:22'),
(472, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-20 22:54:05'),
(473, 'admin', 'Daftar Pengadaan', 'Menambah', 'kadis', '2023-07-20 22:57:23'),
(474, 'admin', 'Daftar Pengadaan', 'Menambah', 'sekretaris', '2023-07-20 23:00:32'),
(475, 'admin', 'Daftar Pengadaan', 'Menambah', 'kadis', '2023-07-20 23:03:07'),
(476, 'admin', 'Daftar Pengadaan', 'Menambah', 'kadis', '2023-07-20 23:06:01'),
(477, 'admin', 'Daftar Pengadaan', 'Menambah', 'kadis', '2023-07-20 23:06:44'),
(478, 'admin', 'Daftar Pengadaan', 'Menambah', 'sekretaris', '2023-07-20 23:09:16'),
(479, 'admin', 'Daftar Pengadaan', 'Menambah', 'kadis', '2023-07-20 23:11:21'),
(480, 'admin', 'Daftar Pengadaan', 'Menambah', 'kadis', '2023-07-20 23:13:43'),
(481, 'admin', 'Daftar Pengadaan', 'Menambah', 'kadis', '2023-07-20 23:18:31'),
(482, 'admin', 'Daftar Pengadaan', 'Menambah', 'kadis', '2023-07-20 23:19:21'),
(483, 'admin', 'Daftar Pengadaan', 'Menambah', 'kadis', '2023-07-20 23:20:42'),
(484, 'admin', 'Daftar Pengadaan', 'Menambah', 'kadis', '2023-07-21 00:11:55'),
(485, 'admin', 'Daftar Pengadaan', 'Menambah', 'sekretaris', '2023-07-21 00:14:15'),
(486, 'admin', 'Daftar Pengadaan', 'Menambah', 'achmad', '2023-07-21 00:23:29'),
(487, 'admin', 'Daftar Pengadaan', 'Menambah', 'sekretaris', '2023-07-21 00:24:25'),
(488, 'admin', 'Daftar Pengadaan', 'Menambah', 'admin', '2023-07-21 00:25:37'),
(489, 'admin', 'Daftar Pengadaan', 'Menambah', 'Operator2', '2023-07-21 00:28:45'),
(490, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-21 00:31:24'),
(491, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-24 19:13:44'),
(492, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-24 19:26:24'),
(493, 'admin', 'Galeri', 'Mengubah', 'Pantai Tanjung Dewa', '2023-07-24 20:18:42'),
(494, 'admin', 'Galeri', 'Menghapus', 'Pantai Batakan', '2023-07-24 20:20:02'),
(495, 'admin', 'Galeri', 'Menghapus', 'Pantai Tanjung Dewa', '2023-07-24 20:22:12'),
(496, 'admin', 'Galeri', 'Mengubah', 'Pantai Joras', '2023-07-24 20:28:34'),
(497, 'admin', 'Galeri', 'Menghapus', 'Pantai Joras', '2023-07-24 20:29:27'),
(498, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-26 16:22:57'),
(499, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-07-26 16:29:02'),
(500, 'sekretaris', 'Melakukan Login', 'Login', 'sekretaris', '2023-07-26 16:29:06'),
(501, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-26 16:29:57'),
(502, 'sekretaris', 'Melakukan Logout', 'Logout', 'sekretaris', '2023-07-26 17:14:55'),
(503, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-26 17:15:00'),
(504, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-07-26 17:59:26'),
(505, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-07-26 17:59:29'),
(506, 'kadis', 'Melakukan Logout', 'Logout', 'kadis', '2023-07-26 17:59:47'),
(507, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-26 17:59:50'),
(508, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-07-26 18:24:45'),
(509, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-07-26 18:24:47'),
(510, 'kadis', 'Melakukan Logout', 'Logout', 'kadis', '2023-07-26 18:24:52'),
(511, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-26 18:24:54'),
(512, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-07-26 18:24:57'),
(513, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-07-26 18:24:59'),
(514, 'kadis', 'Melakukan Logout', 'Logout', 'kadis', '2023-07-26 18:26:47'),
(515, 'sekretaris', 'Melakukan Login', 'Login', 'sekretaris', '2023-07-26 18:26:50'),
(516, 'sekretaris', 'Melakukan Logout', 'Logout', 'sekretaris', '2023-07-26 18:27:32'),
(517, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-26 18:27:35'),
(518, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-07-26 18:27:38'),
(519, 'sekretaris', 'Melakukan Login', 'Login', 'sekretaris', '2023-07-26 18:27:44'),
(520, 'sekretaris', 'Melakukan Logout', 'Logout', 'sekretaris', '2023-07-26 18:28:55'),
(521, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-26 18:28:58'),
(522, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-07-26 18:29:01'),
(523, 'sekretaris', 'Melakukan Login', 'Login', 'sekretaris', '2023-07-26 18:29:04'),
(524, 'sekretaris', 'Melakukan Logout', 'Logout', 'sekretaris', '2023-07-26 18:29:41'),
(525, 'sekretaris', 'Melakukan Login', 'Login', 'sekretaris', '2023-07-26 18:29:42'),
(526, 'sekretaris', 'Melakukan Logout', 'Logout', 'sekretaris', '2023-07-26 18:29:46'),
(527, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-26 18:29:48'),
(528, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-07-26 18:29:49'),
(529, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-07-26 18:29:54'),
(530, 'kadis', 'Melakukan Logout', 'Logout', 'kadis', '2023-07-26 18:29:56'),
(531, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-26 18:29:59'),
(532, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-07-26 18:30:01'),
(533, 'sekretaris', 'Melakukan Login', 'Login', 'sekretaris', '2023-07-26 18:30:04'),
(534, 'sekretaris', 'Melakukan Login', 'Login', 'sekretaris', '2023-07-26 18:30:59'),
(535, 'sekretaris', 'Melakukan Logout', 'Logout', 'sekretaris', '2023-07-26 18:39:32'),
(536, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-26 18:39:34'),
(537, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-07-26 18:39:39'),
(538, 'sekretaris', 'Melakukan Login', 'Login', 'sekretaris', '2023-07-26 18:39:42'),
(539, 'sekretaris', 'Melakukan Logout', 'Logout', 'sekretaris', '2023-07-26 18:40:41'),
(540, 'sekretaris', 'Melakukan Login', 'Login', 'sekretaris', '2023-07-26 18:40:42'),
(541, 'sekretaris', 'Melakukan Logout', 'Logout', 'sekretaris', '2023-07-26 18:40:46'),
(542, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-26 18:40:48'),
(543, 'sekretaris', 'Melakukan Logout', 'Logout', 'sekretaris', '2023-07-26 18:44:15'),
(544, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-07-26 23:38:05'),
(545, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-08-01 12:25:38'),
(546, 'admin', 'Pengajuan', 'Menghapus', 'achmad', '2023-08-01 12:35:26'),
(547, 'admin', 'Pengajuan', 'Menghapus', 'sekretaris', '2023-08-01 12:35:28'),
(548, 'admin', 'Pengajuan', 'Menghapus', 'admin', '2023-08-01 12:35:30'),
(549, 'admin', 'Pengajuan', 'Menghapus', 'Operator2', '2023-08-01 12:35:32'),
(550, 'admin', 'Daftar Pengadaan', 'Menambah', 'Elektronik', '2023-08-01 12:36:48'),
(551, 'admin', 'Daftar Pengadaan', 'Menambah', 'kadis', '2023-08-01 12:37:08'),
(552, 'admin', 'Daftar Pengadaan', 'Menambah', 'Elektronik', '2023-08-01 12:37:58'),
(553, 'admin', 'Daftar Pengadaan', 'Menambah', 'kadis', '2023-08-01 12:38:22'),
(554, 'admin', 'Data Bidang', 'Mengubah', 'Pemasaran', '2023-08-01 12:43:29'),
(555, 'admin', 'Data Bidang', 'Mengubah', 'Pemasarann', '2023-08-01 12:43:51'),
(556, 'admin', 'Data Bidang', 'Mengubah', 'Pemasaran', '2023-08-01 12:43:55'),
(557, 'admin', 'Data Bidang', 'Mengubah', 'Pemasaran', '2023-08-01 12:45:24'),
(558, 'admin', 'Data Bidang', 'Mengubah', 'Pemasaran', '2023-08-01 12:45:26'),
(559, 'admin', 'Data Bidang', 'Mengubah', 'Pemasaran', '2023-08-01 12:46:11'),
(560, 'admin', 'Data Bidang', 'Mengubah', 'Pemasaran', '2023-08-01 12:46:40'),
(561, 'admin', 'Data Bidang', 'Mengubah', 'Pemasaran', '2023-08-01 12:46:43'),
(562, 'admin', 'Data Bidang', 'Menambah', 'sdasdad', '2023-08-01 12:47:10'),
(563, 'admin', 'Data bidang', 'Menghapus', 'sdasdad', '2023-08-01 12:47:12'),
(564, 'admin', 'Data Bidang', 'Mengubah', 'Pemasaran', '2023-08-01 12:49:02'),
(565, 'admin', 'Data Bidang', 'Mengubah', 'Pemasaran', '2023-08-01 12:49:05'),
(566, 'admin', 'Data Bidang', 'Mengubah', 'Sekretariat', '2023-08-01 12:49:12'),
(567, 'admin', 'Data Bidang', 'Mengubah', 'Destinasi', '2023-08-01 12:49:14'),
(568, 'admin', 'Data Bidang', 'Mengubah', 'Pengembangan sdm ekraf', '2023-08-01 12:49:16'),
(569, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-08-01 19:31:18'),
(570, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-08-01 21:03:40'),
(571, 'admin', 'Data Barang Keluar', 'Menambah', 'Flashdisk', '2023-08-01 21:04:53'),
(572, 'admin', 'Data Barang Keluar', 'Menambah', 'Flashdisk', '2023-08-01 21:06:14'),
(573, 'admin', 'Data Barang Keluar', 'Menambah', 'Flashdisk', '2023-08-01 21:13:32'),
(574, 'admin', 'Data Bidang', 'Mengubah', 'Destinasi', '2023-08-01 22:07:21'),
(575, 'admin', 'Data Bidang', 'Mengubah', 'Pengembangan sdm ekraf', '2023-08-01 22:07:47'),
(576, 'admin', 'Data Bidang', 'Mengubah', 'Pemasaran', '2023-08-01 22:08:07'),
(577, 'admin', 'Data Bidang', 'Mengubah', 'Sekretariat', '2023-08-01 22:08:26'),
(578, 'admin', 'Data Bidang', 'Mengubah', 'Sekretariat', '2023-08-01 22:08:35'),
(579, 'admin', 'Data Bidang', 'Mengubah', 'Sekretariat', '2023-08-01 22:08:41'),
(580, 'admin', 'Data Bidang', 'Mengubah', 'Pengembangan sdm ekraf', '2023-08-01 22:08:44'),
(581, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-08-02 12:53:49'),
(582, 'admin', 'Data Supplier', 'Mengubah', 'Pondok Elektronik', '2023-08-02 13:01:58'),
(583, 'admin', 'Data Supplier', 'Mengubah', 'Pondok Kayu Jati', '2023-08-02 13:03:32'),
(584, 'admin', 'Data Supplier', 'Menambah', 'Cahaya Abadi', '2023-08-02 13:04:11'),
(585, 'admin', 'Data Barang', 'Menambah', 'Kursi', '2023-08-02 13:24:16'),
(586, 'admin', 'Data Barang Masuk', 'Menambah', 'Kursi', '2023-08-02 13:24:41'),
(587, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-08-02 13:24:57'),
(588, 'kadis', 'Validasi Barang Masuk', 'Validasi', 'Kursi', '2023-08-02 13:26:04'),
(589, 'admin', 'Data Barang Keluar', 'Menambah', 'Kursi', '2023-08-02 13:32:34'),
(590, 'admin', 'Data Barang Keluar', 'Menambah', 'Kursi', '2023-08-02 13:35:13'),
(591, 'admin', 'Data Barang Keluar', 'Menambah', 'Kursi', '2023-08-02 13:35:43'),
(592, 'admin', 'Data Barang Keluar', 'Menambah', 'Kursi', '2023-08-02 13:43:33'),
(593, 'admin', 'Data Barang Masuk', 'Menghapus', 'Kursi', '2023-08-02 13:44:03'),
(594, 'admin', 'Data Barang', 'Mengubah', 'Kursi', '2023-08-02 13:44:08'),
(595, 'admin', 'Data Barang', 'Menghapus', 'Kursi', '2023-08-02 13:44:09'),
(596, 'admin', 'Data Barang', 'Menambah', 'Kursi', '2023-08-02 13:44:29'),
(597, 'admin', 'Data Barang Masuk', 'Menambah', 'Kursi', '2023-08-02 13:44:40'),
(598, 'kadis', 'Validasi Barang Masuk', 'Validasi', 'Kursi', '2023-08-02 13:44:47'),
(599, 'admin', 'Data Barang Keluar', 'Menambah', 'Kursi', '2023-08-02 13:45:08'),
(600, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-08-02 18:22:04'),
(601, 'admin', 'Data Barang', 'Menambah', 'Meja', '2023-08-02 18:22:31'),
(602, 'admin', 'Data Barang Masuk', 'Menambah', 'Meja', '2023-08-02 18:23:11'),
(603, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-08-02 18:23:26'),
(604, 'kadis', 'Validasi Barang Masuk', 'Validasi', 'Meja', '2023-08-02 18:23:29'),
(605, 'admin', 'Data Barang Keluar', 'Menambah', 'Kursi', '2023-08-02 18:25:11'),
(606, 'admin', 'Data Barang Keluar', 'Menambah', 'Meja', '2023-08-02 18:25:48'),
(607, 'admin', 'Data Barang', 'Menambah', 'kertas A4', '2023-08-02 18:43:53'),
(608, 'admin', 'Data Barang', 'Menambah', 'Pulpen', '2023-08-02 18:48:30'),
(609, 'admin', 'Data Barang', 'Menambah', 'Meja', '2023-08-02 18:56:06'),
(610, 'admin', 'Data Barang', 'Menambah', 'Kursi', '2023-08-02 18:56:26'),
(611, 'admin', 'Data Barang', 'Mengubah', 'Meja', '2023-08-02 18:56:33'),
(612, 'admin', 'Data Barang Masuk', 'Menambah', 'Kursi', '2023-08-02 18:56:50'),
(613, 'kadis', 'Validasi Barang Masuk', 'Validasi', 'Kursi', '2023-08-02 18:56:54'),
(614, 'admin', 'Data Barang Masuk', 'Menambah', 'Meja', '2023-08-02 18:57:03'),
(615, 'kadis', 'Validasi Barang Masuk', 'Validasi', 'Meja', '2023-08-02 18:57:06'),
(616, 'admin', 'Data Barang Keluar', 'Menambah', 'Meja', '2023-08-02 18:58:52'),
(617, 'admin', 'Data Barang', 'Mengubah', 'Kursi', '2023-08-02 18:59:47'),
(618, 'admin', 'Data Barang', 'Mengubah', 'Kursi', '2023-08-02 18:59:52'),
(619, 'admin', 'Data Barang Keluar', 'Mengubah', '5', '2023-08-02 19:59:00'),
(620, 'admin', 'Data Barang Keluar', 'Mengubah', '5', '2023-08-02 19:59:24'),
(621, 'admin', 'Data Barang Keluar', 'Mengubah', '4', '2023-08-02 19:59:29'),
(622, 'admin', 'Data Barang Keluar', 'Menghapus', '', '2023-08-02 20:03:04'),
(623, 'admin', 'Data Barang Keluar', 'Menambah', 'Kursi', '2023-08-02 20:03:28'),
(624, 'admin', 'Data Barang', 'Menambah', 'Printer', '2023-08-02 20:07:30'),
(625, 'admin', 'Data Barang', 'Menghapus', 'Printer', '2023-08-02 20:07:44'),
(626, 'admin', 'Data Barang Keluar', 'Menghapus', '', '2023-08-02 20:07:50'),
(627, 'admin', 'Data Barang Masuk', 'Menghapus', 'Meja', '2023-08-02 20:07:52'),
(628, 'admin', 'Data Barang Masuk', 'Menghapus', 'Kursi', '2023-08-02 20:07:52'),
(629, 'admin', 'Data Barang', 'Menghapus', 'Kursi', '2023-08-02 20:07:54'),
(630, 'admin', 'Data Barang', 'Menghapus', 'Meja', '2023-08-02 20:07:55'),
(631, 'admin', 'Data Barang', 'Menambah', 'Printer', '2023-08-02 20:08:09'),
(632, 'admin', 'Data Barang', 'Menghapus', 'Printer', '2023-08-02 20:11:50'),
(633, 'admin', 'Data Barang', 'Menambah', 'Laptop Lenovo', '2023-08-02 20:12:13'),
(634, 'admin', 'Data Barang Masuk', 'Menambah', 'Laptop Lenovo', '2023-08-02 20:14:25'),
(635, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-08-02 20:14:41');
INSERT INTO `activity_logs` (`id`, `log_user`, `log_type`, `log_action`, `log_item`, `created_at`) VALUES
(636, 'kadis', 'Validasi Barang Masuk', 'Validasi', 'Laptop Lenovo', '2023-08-02 20:14:45'),
(637, 'admin', 'Data Barang', 'Mengubah', 'Laptop Lenovo', '2023-08-02 20:15:35'),
(638, 'admin', 'Data Barang Keluar', 'Menambah', 'Laptop Lenovo', '2023-08-02 20:16:00'),
(639, 'admin', 'Data Barang', 'Menambah', 'Laptop Asus', '2023-08-02 20:41:00'),
(640, 'admin', 'Data Barang Masuk', 'Menambah', 'Laptop Asus', '2023-08-02 20:41:20'),
(641, 'kadis', 'Validasi Barang Masuk', 'Validasi', 'Laptop Asus', '2023-08-02 20:41:26'),
(642, 'admin', 'Data Barang Keluar', 'Menambah', 'Laptop Lenovo', '2023-08-02 20:42:09'),
(643, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-08-02 20:47:45'),
(644, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-08-02 20:54:43'),
(645, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-08-02 20:54:47'),
(646, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-08-02 20:54:48'),
(647, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-08-02 20:55:02'),
(648, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-08-02 20:55:44'),
(649, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-08-02 20:55:52'),
(650, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-08-02 20:55:59'),
(651, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-08-02 20:56:03'),
(652, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-08-02 20:56:07'),
(653, 'admin', 'Data Barang', 'Menambah', 'Kursi', '2023-08-02 22:13:33'),
(654, 'admin', 'Data Barang Masuk', 'Menambah', 'Kursi', '2023-08-02 22:13:46'),
(655, 'kadis', 'Validasi Barang Masuk', 'Validasi', 'Kursi', '2023-08-02 22:13:52'),
(656, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-08-03 13:54:23'),
(657, 'admin', 'Data Barang', 'Menambah', 'Spidol Snowman Permanent', '2023-08-03 14:25:45'),
(658, 'admin', 'Data Barang Masuk', 'Menambah', 'Spidol Snowman Permanent', '2023-08-03 14:26:05'),
(659, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-08-03 14:31:51'),
(660, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-08-03 14:31:53'),
(661, 'kadis', 'Validasi Barang Masuk', 'Validasi', 'Spidol Snowman Permanent', '2023-08-03 14:31:56'),
(662, 'admin', 'Data Barang Masuk', 'Menambah', 'Kursi', '2023-08-03 14:38:08'),
(663, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-08-03 14:49:55'),
(664, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-08-03 14:53:59'),
(665, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-08-03 15:18:17'),
(666, 'sekretaris', 'Melakukan Login', 'Login', 'sekretaris', '2023-08-03 15:18:20'),
(667, 'sekretaris', 'Melakukan Logout', 'Logout', 'sekretaris', '2023-08-03 15:20:21'),
(668, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-08-03 15:20:32'),
(669, 'kadis', 'Melakukan Logout', 'Logout', 'kadis', '2023-08-03 15:43:37'),
(670, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-08-03 15:43:41'),
(671, 'admin', 'Data User', 'Mengubah', 'staff', '2023-08-03 16:56:22'),
(672, 'admin', 'Data User', 'Mengubah', 'Operator', '2023-08-03 16:56:41'),
(673, 'admin', 'Data User', 'Mengubah', 'Operator2', '2023-08-03 16:56:46'),
(674, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-08-03 19:01:24'),
(675, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-08-03 19:01:28'),
(676, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-08-03 19:29:01'),
(677, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-08-03 20:24:37'),
(678, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-08-03 20:30:41'),
(679, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-08-03 21:15:49'),
(680, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-08-03 21:15:52'),
(681, 'kadis', 'Melakukan Logout', 'Logout', 'kadis', '2023-08-03 21:17:09'),
(682, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-08-03 21:17:23'),
(683, 'admin', 'Data User', 'Mengubah', 'staff', '2023-08-03 21:17:30'),
(684, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-08-03 21:17:34'),
(685, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-08-03 21:17:42'),
(686, 'admin', 'Data User', 'Mengubah', 'staff', '2023-08-03 21:17:55'),
(687, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-08-03 21:17:58'),
(688, 'staff', 'Melakukan Login', 'Login', 'staff', '2023-08-03 21:18:02'),
(689, 'staff', 'Melakukan Logout', 'Logout', 'staff', '2023-08-03 21:19:56'),
(690, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-08-03 21:19:58'),
(691, 'kadis', 'Melakukan Logout', 'Logout', 'kadis', '2023-08-03 21:35:27'),
(692, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-08-03 21:35:29'),
(693, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-08-04 06:57:40'),
(694, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-08-04 11:40:15'),
(695, 'admin', 'Data Barang Masuk', 'Menambah', 'Kursi', '2023-08-04 14:24:06'),
(696, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-08-04 15:23:10'),
(697, 'admin', 'Data Barang', 'Menambah', 'Map', '2023-08-04 15:28:40'),
(698, 'admin', 'Data Barang', 'Menghapus', 'Map', '2023-08-04 15:29:23'),
(699, 'admin', 'Data User', 'Mengubah', 'staff', '2023-08-04 15:59:12'),
(700, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-08-04 15:59:16'),
(701, 'staff', 'Melakukan Login', 'Login', 'staff', '2023-08-04 15:59:20'),
(702, 'staff', 'Melakukan Logout', 'Logout', 'staff', '2023-08-04 15:59:41'),
(703, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-08-04 15:59:42'),
(704, 'admin', 'Melakukan Logout', 'Logout', 'admin', '2023-08-04 16:15:02'),
(705, 'staff', 'Melakukan Login', 'Login', 'staff', '2023-08-04 16:15:09'),
(706, 'staff', 'Melakukan Logout', 'Logout', 'staff', '2023-08-04 16:15:46'),
(707, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-08-04 16:15:49'),
(708, 'kadis', 'Melakukan Logout', 'Logout', 'kadis', '2023-08-04 16:18:39'),
(709, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-08-04 16:18:41'),
(710, 'admin', 'Data Peminjaman Aset', 'Meminjam', 'Resort Takisung', '2023-08-04 16:27:03'),
(711, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-08-05 11:43:32'),
(712, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-08-05 12:19:48'),
(713, 'admin', 'Data Barang', 'Menambah', 'Printer', '2023-08-05 12:52:37'),
(714, 'admin', 'Data Barang Masuk', 'Menambah', 'Printer', '2023-08-05 12:56:01'),
(715, 'admin', 'Data Barang Masuk', 'Menambah', 'Printer', '2023-08-05 12:56:26'),
(716, 'admin', 'Data Asset', 'Mengubah', 'Resort Takisung', '2023-08-05 13:07:59'),
(717, 'admin', 'Data Asset', 'Mengubah', 'Resort Takisung', '2023-08-05 13:08:07'),
(718, 'admin', 'Data Asset', 'Menghapus', 'Resort Batakan', '2023-08-05 13:09:05'),
(719, 'admin', 'Data Asset', 'Menambah', 'Resort Batakan', '2023-08-05 13:09:13'),
(720, 'admin', 'Data Asset', 'Menghapus', 'Resort Batakan', '2023-08-05 13:10:19'),
(721, 'admin', 'Data Barang Masuk', 'Mengubah', 'Spidol Snowman Permanent', '2023-08-05 13:36:25'),
(722, 'admin', 'Data Barang Masuk', 'Mengubah', 'Spidol Snowman Permanent', '2023-08-05 13:36:30'),
(723, 'kadis', 'Melakukan Login', 'Login', 'kadis', '2023-08-05 19:51:07'),
(724, 'kadis', 'Validasi Barang Masuk', 'Validasi', 'Printer', '2023-08-05 19:52:18'),
(725, 'kadis', 'Data Barang Masuk', 'Reject', 'Printer', '2023-08-05 19:53:26'),
(726, 'admin', 'Melakukan Login', 'Login', 'admin', '2023-08-05 23:53:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_detail`
--

CREATE TABLE `barang_detail` (
  `id` bigint(20) NOT NULL,
  `barang_keluar_id` int(11) NOT NULL,
  `barang_id` int(11) NOT NULL,
  `jumlah_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `barang_detail`
--

INSERT INTO `barang_detail` (`id`, `barang_keluar_id`, `barang_id`, `jumlah_barang`) VALUES
(16, 51, 40, 1),
(17, 52, 41, 1),
(18, 52, 40, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_keluar`
--

CREATE TABLE `barang_keluar` (
  `id` int(11) NOT NULL,
  `id_bidang` int(11) NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `validation_user_id` int(10) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `barang_keluar`
--

INSERT INTO `barang_keluar` (`id`, `id_bidang`, `tanggal_keluar`, `validation_user_id`, `created_at`) VALUES
(51, 1, '2023-08-02', NULL, '2023-08-02 20:16:00'),
(52, 5, '2023-08-02', NULL, '2023-08-02 20:42:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `id` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `validation_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `barang_masuk`
--

INSERT INTO `barang_masuk` (`id`, `id_barang`, `tanggal_masuk`, `jumlah_barang`, `validation_at`, `created_at`) VALUES
(47, 40, '2023-08-02', 5, '2023-08-02 14:14:45', '2023-08-02 20:14:25'),
(48, 41, '2023-08-02', 5, '2023-08-02 14:41:26', '2023-08-02 20:41:20'),
(49, 42, '2023-08-02', 10, '2023-08-02 16:13:52', '2023-08-02 22:13:46'),
(50, 43, '2023-08-04', 10, '2023-08-03 08:31:56', '2023-08-03 14:26:05'),
(52, 42, '2023-08-04', 10, NULL, '2023-08-04 14:24:06'),
(54, 45, '2023-08-05', 1, '2023-08-05 13:52:18', '2023-08-05 12:56:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidang`
--

CREATE TABLE `bidang` (
  `id` int(11) NOT NULL,
  `nama_bidang` varchar(50) NOT NULL,
  `nama_kasi` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `bidang`
--

INSERT INTO `bidang` (`id`, `nama_bidang`, `nama_kasi`, `created_at`) VALUES
(1, 'Pemasaran', 'Leni Sari Indrawati, A.Ks', '2023-07-05 20:45:15'),
(2, 'Sekretariat', 'Muhammad Syahmadi, S.Sos', '2023-07-05 20:46:08'),
(4, 'Destinasi', 'Riva Mahrani, ST', '2023-07-05 20:46:21'),
(5, 'Pengembangan sdm ekraf', 'Muhammad Hadiat Wicaksono, S.STP,M.I.P', '2023-07-06 07:29:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_asset`
--

CREATE TABLE `data_asset` (
  `id` int(11) NOT NULL,
  `nama_asset` varchar(50) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_asset`
--

INSERT INTO `data_asset` (`id`, `nama_asset`, `tempat`, `created_at`) VALUES
(1, 'Resort Takisung', 'Pantai Takisung, Pelaihari, Kab. Tanah Laut', '2023-06-10 17:05:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_barang`
--

CREATE TABLE `data_barang` (
  `id` int(11) NOT NULL,
  `id_supplier` int(11) DEFAULT NULL,
  `kode_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga_barang` int(11) NOT NULL,
  `jenis_barang` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_barang`
--

INSERT INTO `data_barang` (`id`, `id_supplier`, `kode_barang`, `nama_barang`, `harga_barang`, `jenis_barang`, `created_at`) VALUES
(40, 1, '0000001', 'Laptop Lenovo', 3700000, 'Tidak Habis', '2023-08-02 20:12:13'),
(41, 1, '0000002', 'Laptop Asus', 5000000, 'Tidak Habis', '2023-08-02 20:41:00'),
(42, 2, '0000003', 'Kursi', 100000, 'Tidak Habis', '2023-08-02 22:13:33'),
(43, 6, '0000004', 'Spidol Snowman Permanent', 7000, 'Habis Pakai', '2023-08-03 14:25:45'),
(45, 1, '0000005', 'Printer', 250000, 'Tidak Habis', '2023-08-05 12:52:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `foto`, `judul`, `slug`, `deskripsi`, `created_at`) VALUES
(5, 'pantai-tanjung-dewa.jpg', 'Pantai Tanjung Dewa', 'pantai-tanjung-dewa', 'Pantai Tanjung Dewa', '2023-07-24 20:30:11'),
(6, 'pantai-batakan.jpg', 'Pantai Batakan', 'pantai-batakan', 'Pantai Batakan', '2023-07-24 20:30:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `groups`
--

INSERT INTO `groups` (`id`, `name`, `slug`, `created_at`) VALUES
(1, 'Administrator', 'admin', '0000-00-00 00:00:00'),
(2, 'Sekretaris', 'sekretaris', '0000-00-00 00:00:00'),
(3, 'Kadis', 'kadis', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `sequence` int(11) DEFAULT NULL,
  `parrent_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `menus`
--

INSERT INTO `menus` (`id`, `name`, `slug`, `icon`, `sequence`, `parrent_id`, `group_id`, `created_at`) VALUES
(1, 'Dashboard', 'dashboard', 'icon-home', 1, 0, 1, '2022-12-20 12:40:50'),
(2, 'Data Barang', 'data-barang', 'fas fa-archive', 2, 0, 1, '2022-12-20 12:40:50'),
(3, 'Barang Masuk', 'barang-masuk', 'fas fa-arrow-circle-down', 3, 0, 1, '2022-12-20 12:40:50'),
(4, 'Barang Keluar', 'barang-keluar', 'fas fa-arrow-alt-circle-up', 4, 0, 1, '2022-12-20 12:40:50'),
(5, 'Laporan', 'laporan', 'fas fa-clipboard', 10, 0, 1, '2022-12-20 12:40:50'),
(6, 'Laporan Barang Masuk', 'laporan-barang-masuk', '', 2, 5, 1, '2022-12-20 12:40:50'),
(7, 'Laporan Barang Keluar', 'laporan-barang-keluar', '', 3, 5, 1, '2022-02-05 15:07:06'),
(8, 'Laporan Data Barang', 'laporan-data-barang', '', 1, 5, 1, '2022-02-05 15:07:06'),
(9, 'Laporan Data User', 'laporan-data-user', '', 9, 5, 1, '2022-02-05 15:07:06'),
(10, 'Data User', 'data-user', 'fas fa-user', 9, 0, 1, '2022-12-20 12:40:50'),
(13, 'Dashboard', 'dashboard', 'icon-home', 1, 0, 2, '2022-12-20 12:40:50'),
(14, 'Data Barang', 'data-barang', 'fas fa-archive', 2, 0, 2, '2022-12-20 12:40:50'),
(15, 'Barang Masuk', 'barang-masuk', 'fas fa-arrow-circle-down', 3, 0, 2, '2022-12-20 12:40:50'),
(16, 'Barang Keluar', 'barang-keluar', 'fas fa-arrow-alt-circle-up', 4, 0, 2, '2022-12-20 12:40:50'),
(17, 'Laporan', 'laporan', 'fas fa-clipboard', 8, 0, 2, '2022-12-20 12:40:50'),
(23, 'Dashboard', 'dashboard', 'icon-home', 0, 0, 3, '2022-12-20 12:40:50'),
(24, 'Laporan', 'laporan', 'fas fa-clipboard', 2, 0, 3, '2022-12-20 12:40:50'),
(25, 'Laporan Barang Masuk', 'laporan-barang-masuk', '', 0, 24, 3, '2022-02-05 15:07:06'),
(26, 'Laporan Barang Keluar', 'laporan-barang-keluar', '', 0, 24, 3, '2022-02-05 15:07:06'),
(27, 'Laporan Data Barang', 'laporan-data-barang', '', 0, 24, 3, '2022-02-05 15:07:06'),
(28, 'Laporan Data User', 'laporan-data-user', '', 0, 24, 3, '2022-02-05 15:07:06'),
(30, 'Validasi Barang Masuk', 'validasi-barang-masuk', 'icon-check', 1, 0, 3, '2022-12-20 12:40:50'),
(31, 'Data Asset', 'data-asset', 'fas fa-box', 5, 0, 1, '2023-06-10 16:49:56'),
(33, 'Laporan Data Asset', 'laporan-data-asset', '', 0, 24, 3, '2022-02-05 15:07:06'),
(34, 'Laporan Barang Pending', 'laporan-barang-pending', '', 0, 24, 3, '2022-02-05 15:07:06'),
(37, 'Peminjaman Asset', 'peminjaman-asset', 'fas fa-box', 6, 0, 1, '2023-06-10 16:49:56'),
(38, 'Data Supplier', 'data-supplier', 'fas fa-archive', 7, 0, 1, '2022-12-20 12:40:50'),
(39, 'Data Bidang', 'data-bidang', 'fas fa-box', 7, 0, 1, '2023-06-10 16:49:56'),
(40, 'Laporan Supplier', 'laporan-data-supplier', '', 9, 5, 1, '2022-02-05 15:07:06'),
(41, 'Laporan Data Bidang', 'laporan-data-bidang', '', 8, 5, 1, '2022-02-05 15:07:06'),
(42, 'Laporan Barang Pending', 'laporan-barang-pending', '', 5, 5, 1, '2022-02-05 15:07:06'),
(43, 'Laporan Peminjaman Asset', 'laporan-data-peminjaman-asset', '', 7, 5, 1, '2022-02-05 15:07:06'),
(44, 'Laporan Penerimaan Asset', 'laporan-terima-data-peminjaman-asset', '', 8, 5, 1, '2022-02-05 15:07:06'),
(45, 'Pengadaan', 'pengadaan', 'fas fa-clipboard', 11, 0, 1, '2022-12-20 12:40:50'),
(46, 'Daftar Pengadaan', 'daftar-pengadaan', '', 1, 45, 1, '2022-12-20 12:40:50'),
(47, 'Daftar Pengajuan', 'daftar-pengajuan', '', 2, 45, 1, '2022-12-20 12:40:50'),
(48, 'Galeri', 'galeri', 'fas fa-clipboard', 12, 0, 1, '2022-12-20 12:40:50'),
(49, 'Data Asset', 'data-asset', 'fas fa-box', 5, 0, 2, '2023-06-10 16:49:56'),
(50, 'Peminjaman Asset', 'peminjaman-asset', 'fas fa-box', 6, 0, 2, '2023-06-10 16:49:56'),
(51, 'Data Supplier', 'data-supplier', 'fas fa-archive', 7, 0, 2, '2022-12-20 12:40:50'),
(56, 'Laporan Data Asset', 'laporan-data-asset', '', 5, 17, 2, '2022-12-20 12:40:50'),
(57, 'Laporan Peminjaman Asset', 'laporan-data-peminjaman-asset', '', 6, 17, 2, '2022-12-20 12:40:50'),
(58, 'Laporan Penerimaan Asset', 'laporan-terima-data-peminjaman-asset', '', 7, 17, 2, '2023-06-10 16:49:56'),
(59, 'Laporan Supplier', 'laporan-data-supplier', '', 8, 17, 2, '2022-02-05 15:07:06'),
(60, 'Laporan Data Barang', 'laporan-data-barang', '', 1, 17, 2, '2023-06-10 16:49:56'),
(61, 'Laporan Barang Masuk', 'laporan-barang-masuk', '', 2, 17, 2, '2022-12-20 12:40:50'),
(62, 'Laporan Barang Keluar', 'laporan-barang-keluar', '', 3, 17, 2, '2023-06-10 16:49:56'),
(63, 'Laporan Barang Pending', 'laporan-barang-pending', '', 4, 17, 2, '2022-12-20 12:40:50'),
(64, 'Laporan Barang Per Bidang', 'laporan-data-bidang', '', 9, 17, 2, '2022-12-20 12:40:50'),
(65, 'Laporan Data Asset', 'laporan-data-asset', '', 6, 5, 1, '2022-02-05 15:07:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman_asset`
--

CREATE TABLE `peminjaman_asset` (
  `id` int(11) NOT NULL,
  `id_asset` int(11) NOT NULL,
  `nama_peminjam` varchar(50) NOT NULL,
  `tanggal_peminjaman` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `tgl_validation_pengembalian` datetime DEFAULT NULL,
  `validation_user_id` int(10) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `peminjaman_asset`
--

INSERT INTO `peminjaman_asset` (`id`, `id_asset`, `nama_peminjam`, `tanggal_peminjaman`, `tanggal_pengembalian`, `tgl_validation_pengembalian`, `validation_user_id`, `created_at`) VALUES
(12, 1, 'Achmad', '2023-07-06', '2023-07-06', '2023-07-06 09:39:12', 1, '2023-07-06 15:34:02'),
(13, 1, 'Achmad', '2023-08-04', '2023-08-04', NULL, NULL, '2023-08-04 16:27:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengadaan`
--

CREATE TABLE `pengadaan` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengadaan`
--

INSERT INTO `pengadaan` (`id`, `nama_barang`, `deskripsi`, `tanggal_mulai`, `tanggal_selesai`, `created_at`) VALUES
(1, 'Jakett', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '2023-07-09', '2023-07-15', '2023-07-09 05:40:10'),
(2, 'Kursi', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '2023-07-09', '2023-07-15', '2023-07-09 05:51:14'),
(3, 'Meja', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '2023-07-09', '2023-07-15', '2023-07-09 05:53:22'),
(4, 'Laptop', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '2023-07-09', '2023-07-13', '2023-07-09 05:53:36'),
(5, 'Printer', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '2023-07-09', '2023-07-13', '2023-07-09 05:54:10'),
(6, 'kamera', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of ', '2023-07-08', '2023-07-08', '2023-07-09 05:55:07'),
(7, 'Meja Lipat', 'DIperlukan Meja Lipat sebanyak 50 buah.', '2023-07-09', '2023-07-14', '2023-07-09 07:55:01'),
(8, 'Furniture', 'membutuhkan 10 kursi. membutuhkan 10 meja membutuhkan 10 kursi', '2023-07-18', '2023-07-22', '2023-07-18 13:55:13'),
(9, 'Elektronik', 'Dibutuhkan 10 Komputer, 20 Laptop dan 5 Printer', '2023-08-01', '2023-08-05', '2023-08-01 04:36:48'),
(10, 'Elektronik', 'Dibutuhkan 10 Mouse dan 10 Keyboard', '2023-07-31', '2023-08-05', '2023-08-01 04:37:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan_pengadaan`
--

CREATE TABLE `pengajuan_pengadaan` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cv` varchar(100) NOT NULL,
  `penawaran` varchar(100) NOT NULL,
  `id_pengadaan` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengajuan_pengadaan`
--

INSERT INTO `pengajuan_pengadaan` (`id`, `nama_lengkap`, `alamat`, `no_hp`, `email`, `cv`, `penawaran`, `id_pengadaan`, `created_at`) VALUES
(48, 'kadis', 'Jl. Turih', '081217762551', 'kadis@gmail.com', 'Laporan_Data_Barang_(3).pdf', 'Laporan_Data_Barang_(3).pdf', 9, '2023-08-01 04:37:08'),
(49, 'kadis', 'Jl. Ayani', '081231237111', 'master@gmail.com', 'Laporan_Data_Barang_(3).pdf', 'Laporan_Data_Barang_(3).pdf', 10, '2023-08-01 04:38:22'),
(50, 'Dedi Rosyadi', 'Jl. Ayani', '081023123112', 'dedim@gmail.com', 'Barang_Keluar_Detail_3.pdf', 'Barang_Keluar_Detail_2.pdf', 10, '2023-08-02 12:54:08'),
(51, 'Dedi Rosyadi', 'Jl. Ayani', '081023123112', 'dedim@gmail.com', 'Barang_Keluar_Detail_3.pdf', 'Barang_Keluar_Detail_2.pdf', 10, '2023-08-02 12:54:36'),
(52, 'Achmad Wira', 'Jl. Terang', '081217762551', 'achmadwirra@gmail.com', 'Barang_Keluar_Detail.pdf', 'Barang_Keluar_Detail_2.pdf', 9, '2023-08-02 12:55:36'),
(53, 'Dedi Rosyadi', 'Jl. Sapir', '081231712732', 'dedim@gmail.com', 'Daftar_Barang_Pending_7.pdf', 'Daftar_Barang_Pending_7.pdf', 10, '2023-08-03 06:53:55'),
(54, 'asdsasada', 'Jl. Turih', '67556756757', 'achmadwirra@gmail.com', 'LAPORAN_PKL_ACHMAD_WIRA_19630215_BAB_IV.pdf', 'Laporan_Data_Peminjaman_Asset_9.pdf', 10, '2023-08-05 04:11:16'),
(55, 'sekretaris', 'Jl. Turih', '65756556756', 'kadis@gmail.com', 'LAPORAN_PKL_ACHMAD_WIRA_19630215_BAB_IV.pdf', 'LAPORAN_PKL_ACHMAD_WIRA_19630215_BAB_IV.pdf', 10, '2023-08-05 04:15:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `nama_supplier` varchar(100) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama_pj` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`id`, `nama_supplier`, `no_telp`, `alamat`, `email`, `nama_pj`, `created_at`) VALUES
(1, 'Pondok Elektronik', '081217762551', 'Jl. Ayani KM.4', 'abidinm@gmail.com', 'Abidin', '2023-07-03 10:22:24'),
(2, 'Pondok Kayu Jati', '081873283123', 'Jl. Melati', 'muhahmd@gmail.com', 'Muhammad', '2023-07-03 10:22:24'),
(6, 'Cahaya Abadi', '0812345678', 'Jl. Terang', 'cahayaabd@gmail.com', 'Jaya', '2023-08-02 13:04:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` text NOT NULL,
  `nama_lengkap` varchar(25) NOT NULL,
  `group_id` int(11) NOT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `cookie` varchar(50) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `nama_lengkap`, `group_id`, `foto`, `cookie`, `status`, `created_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$gAa4QPXY1FeIxWwY871TfuslCbeAICd123s27jwv4wdIWyIvSZs2e', 'admin', 1, NULL, '0', 1, '2023-01-07 18:17:22'),
(3, 'staff', 'staff@gmail.com', '$2y$10$m/fgIo3T907TzlJPLPFB1.Gfu2mBI1SFY1pY85AgXyHs7K2CSstqu', 'staff', 2, 'sekretaris.png', NULL, 1, '2023-01-07 18:18:09'),
(4, 'kadis', 'kadis@gmail.com', '$2y$10$S1LynmGpeuN0xTAugLQ5NuY6q/ycN7gAhtO5/HRYP.1lJOMJNuheG', 'kadis', 3, 'kadis.png', NULL, 1, '2023-01-07 18:18:28'),
(5, 'staff1', 'operator@operator.com', '$2y$10$0ZBTK3nLbVziE7mgsja/guaLeySRH.U2w/KZcgslXJjXvNwlrfQsy', 'Operator', 2, 'operator.png', NULL, 1, '2023-02-11 20:54:27'),
(6, 'staff2', 'operator2@operator.com', '$2y$10$eTDazmagmr9GANk/66DFaeJ1aN/fvj4i6n3R4cJRcTiTjrSZ1ktby', 'Operator2', 2, 'operator2.png', NULL, 1, '2023-02-11 20:55:06');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `barang_detail`
--
ALTER TABLE `barang_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barang_keluar_id` (`barang_keluar_id`),
  ADD KEY `barang_id` (`barang_id`);

--
-- Indeks untuk tabel `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_bidang_FK` (`id_bidang`);

--
-- Indeks untuk tabel `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indeks untuk tabel `bidang`
--
ALTER TABLE `bidang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_asset`
--
ALTER TABLE `data_asset`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_barang`
--
ALTER TABLE `data_barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_supplier` (`id_supplier`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menus_group_id_IDX` (`group_id`) USING BTREE;

--
-- Indeks untuk tabel `peminjaman_asset`
--
ALTER TABLE `peminjaman_asset`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreign_key_asset` (`id_asset`);

--
-- Indeks untuk tabel `pengadaan`
--
ALTER TABLE `pengadaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengajuan_pengadaan`
--
ALTER TABLE `pengajuan_pengadaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_group_id_IDX` (`group_id`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `activity_logs`
--
ALTER TABLE `activity_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=727;

--
-- AUTO_INCREMENT untuk tabel `barang_detail`
--
ALTER TABLE `barang_detail`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `barang_keluar`
--
ALTER TABLE `barang_keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT untuk tabel `barang_masuk`
--
ALTER TABLE `barang_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT untuk tabel `bidang`
--
ALTER TABLE `bidang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `data_asset`
--
ALTER TABLE `data_asset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `data_barang`
--
ALTER TABLE `data_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT untuk tabel `peminjaman_asset`
--
ALTER TABLE `peminjaman_asset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `pengadaan`
--
ALTER TABLE `pengadaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pengajuan_pengadaan`
--
ALTER TABLE `pengajuan_pengadaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT untuk tabel `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD CONSTRAINT `data_bidang_FK` FOREIGN KEY (`id_bidang`) REFERENCES `bidang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD CONSTRAINT `barang_masuk_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `data_barang` (`id`);

--
-- Ketidakleluasaan untuk tabel `data_barang`
--
ALTER TABLE `data_barang`
  ADD CONSTRAINT `data_barang_FK` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `menus`
--
ALTER TABLE `menus`
  ADD CONSTRAINT `menus_FK` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `peminjaman_asset`
--
ALTER TABLE `peminjaman_asset`
  ADD CONSTRAINT `foreign_key_asset` FOREIGN KEY (`id_asset`) REFERENCES `data_asset` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_FK` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
