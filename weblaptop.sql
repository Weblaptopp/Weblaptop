-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th7 06, 2021 lúc 04:54 PM
-- Phiên bản máy phục vụ: 10.4.10-MariaDB
-- Phiên bản PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `weblaptop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baohanh`
--

DROP TABLE IF EXISTS `baohanh`;
CREATE TABLE IF NOT EXISTS `baohanh` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `IdSP` int(10) UNSIGNED NOT NULL,
  `ThoiGianBH` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TrangThai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `baohanh_idsp_foreign` (`IdSP`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

DROP TABLE IF EXISTS `binhluan`;
CREATE TABLE IF NOT EXISTS `binhluan` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `IdSP` int(10) UNSIGNED NOT NULL,
  `IdKH` int(10) UNSIGNED NOT NULL,
  `Ngay` datetime NOT NULL,
  `NoiDung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TrangThai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `binhluan_idsp_foreign` (`IdSP`),
  KEY `binhluan_idkh_foreign` (`IdKH`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

DROP TABLE IF EXISTS `chitietdonhang`;
CREATE TABLE IF NOT EXISTS `chitietdonhang` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `MaSP` int(10) UNSIGNED NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `KhuyenMai` double(8,2) NOT NULL,
  `TrangThai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `chitietdonhang_masp_foreign` (`MaSP`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

DROP TABLE IF EXISTS `danhmuc`;
CREATE TABLE IF NOT EXISTS `danhmuc` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `TenDanhMuc` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TrangThai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `TenDanhMuc`, `TrangThai`, `created_at`, `updated_at`) VALUES
(1, 'd', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

DROP TABLE IF EXISTS `donhang`;
CREATE TABLE IF NOT EXISTS `donhang` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `HoTenKH` int(10) UNSIGNED NOT NULL,
  `SDT` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ngay` datetime NOT NULL,
  `ThanhTien` double(8,2) NOT NULL,
  `TrangThai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `donhang_hotenkh_foreign` (`HoTenKH`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kho`
--

DROP TABLE IF EXISTS `kho`;
CREATE TABLE IF NOT EXISTS `kho` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `IdSP` int(10) UNSIGNED NOT NULL,
  `TonKho` int(11) NOT NULL,
  `TrangThai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `kho_idsp_foreign` (`IdSP`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

DROP TABLE IF EXISTS `khuyenmai`;
CREATE TABLE IF NOT EXISTS `khuyenmai` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `IdSP` int(10) UNSIGNED NOT NULL,
  `KhuyenMai` double(8,2) NOT NULL,
  `TrangThai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `khuyenmai_idsp_foreign` (`IdSP`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2021_06_14_060445_create_sanpham_table', 1),
(4, '2021_06_14_065819_create_donhang_table', 1),
(5, '2021_06_14_072331_create_chitietdonhang_table', 1),
(6, '2021_06_14_072645_create_kho_table', 1),
(7, '2021_06_14_072741_create_danhmuc_table', 1),
(8, '2021_06_14_073113_create_khuyenmai_table', 1),
(9, '2021_06_14_073254_create_nhacungcap_table', 1),
(10, '2021_06_14_073532_create_baohanh_table', 1),
(11, '2021_06_14_073725_create_slideshow_table', 1),
(12, '2021_06_14_074133_create_binhluan_table', 1),
(13, '2021_06_14_074615_create_taikhoan_table', 1),
(14, '2021_06_14_075524_create_add_foreign_key_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacungcap`
--

DROP TABLE IF EXISTS `nhacungcap`;
CREATE TABLE IF NOT EXISTS `nhacungcap` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `TenNCC` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DienThoai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TrangThai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhacungcap`
--

INSERT INTO `nhacungcap` (`id`, `TenNCC`, `DiaChi`, `DienThoai`, `Email`, `TrangThai`, `created_at`, `updated_at`) VALUES
(1, 'sf', 'fd', '546', 'r', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE IF NOT EXISTS `sanpham` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `TenSP` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HinhAnh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CPU` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ram` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `OCung` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ManHinh` double(8,2) NOT NULL,
  `CardManHinh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CongKetNoi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HeDieuHanh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ThietKe` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `KichThuoc` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ThoiDiemRaMat` int(11) NOT NULL,
  `MoTa` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gia` double(8,2) NOT NULL,
  `NhaCC` int(10) UNSIGNED NOT NULL,
  `TenDM` int(10) UNSIGNED NOT NULL,
  `TrangThai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sanpham_nhacc_foreign` (`NhaCC`),
  KEY `sanpham_tendm_foreign` (`TenDM`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `TenSP`, `HinhAnh`, `CPU`, `Ram`, `OCung`, `ManHinh`, `CardManHinh`, `CongKetNoi`, `HeDieuHanh`, `ThietKe`, `KichThuoc`, `ThoiDiemRaMat`, `MoTa`, `Gia`, `NhaCC`, `TenDM`, `TrangThai`, `created_at`, `updated_at`) VALUES
(1, 'MacBook Air 13 256GB 2020', '1625575895.jpg', '1.1GHz dual-core Intel Core i3, Turbo Boost up to 3.2GHz, with 4MB L3 cache', '8GB, DDR4(2 khe), 3200 MHz', '256GB PCIe-based SSD', 13.30, 'Intel Iris Plus Graphics', '2 x USB 3.2 HDMI, LAN (Rj45), USB 2.0, USB Type-C', 'MacOS', 'Vỏ kim loại, PIN liền', 'h', 2020, 'y', 27.99, 1, 1, 1, NULL, '2021-07-06 05:51:35'),
(2, 'Asus TUF Gaming FX506LI i5 10300H', '1625535125.jpg', 'Intel Core i5 Comet Lake, 10300H, 2.50 GHz', 'Intel Core i5 Comet Lake, 10300H, 2.50 GHz', 'SSD: 512 GB, M.2 PCIe, Hỗ trợ khe cắm SSD M.2 PCIe', 15.60, 'Card đồ họa rời, NVIDIA GeForce GTX 1650Ti 4GB', '2 x USB 3.2, HDMI, LAN (RJ45), USB 2.0, USB Type-C', 'Windows 10 Home SL', 'Vỏ nhựa - nắp lưng bằng kim loại, PIN liền', 'Dày 24.9 mm, 2.3 kg', 2020, 'd', 21.69, 1, 1, 1, NULL, '2021-07-05 18:32:05'),
(3, 'Asus VivoBook A412FA i3 10110U', '1625536303.jpg', 'Intel Core i3 Comet Lake, 10110U, 2.10 GHz', '4 GB, DDR4 (On board +1 khe), 2666 MHz', 'Intel Optane 32GB (H10), SSD: 512 GB, M.2 PCIe, Hỗ trợ khe cắm HDD SATA', 14.00, 'Card đồ họa tích hợp, Intel UHD Graphics', 'USB 3.1, HDMI, USB 2.0, USB Type-C', 'Windows 10 Home SL', 'ỏ nhựa, PIN liền', 'Dày 19.5 mm, 1.406 kg', 2019, 'f', 13.59, 1, 1, 1, '2021-07-05 18:51:43', '2021-07-05 18:51:43'),
(4, 'LapTop Dell Inspiron 5502 i5', '1625584882.jpg', 'Intel Core i5 Tiger Lake', 'DDR4 (2 khe) 8GB', 'SSD: 512 GB, M.2 PCIe, Hỗ trợ khe cắm SSD M.2 PCIe', 15.60, 'Intel Iris Xe Graphics', '2 x USB 3.1 HDMI USB Type-C', 'Windows 10 Home SL', 'Card đồ họa rời', 'Dài 356.1 mm - Rộng 234.5 mm - Dày 17.9 mm', 2020, 'g', 17.59, 1, 1, 1, '2021-07-05 19:16:46', '2021-07-06 08:21:22'),
(5, 'HP 15s du0042TX i3 6ZF75PA', '1625538084.jpg', 'Intel Core i3 Kabylake, 7020U, 2.30 GHz', '4 GB, DDR4 (2 khe), 2133 MHz', 'HDD: 1 TB SATA3, Hỗ trợ khe cắm SSD M.2 PCIe', 15.60, 'Card đồ họa rời, NVIDIA GeForce MX110, 2GB', 'HDMI 1.4, 2 x USB 3.0, LAN (RJ45), USB Type-C', 'Windows 10 Home SL', 'Vỏ nhựa, PIN liền', 'Dày 19.9 mm, 1.74 kg', 2019, 'f', 12.39, 1, 1, 1, '2021-07-05 19:21:24', '2021-07-05 19:21:24'),
(6, 'HP EliteBook X360 830 G7 i7 230L5PA', '1625575044.jpg', 'Intel Core i7 Comet Lake, 10510U, 1.80 GHz', '16 GB, DDR4 (1 khe), 3200 MHz', 'Intel Optane 32GB (H10), SSD: 512 GB, M.2 PCIe', 13.30, 'Card đồ họa tích hợp, Intel UHD Graphics', '2 x USB 3.1 Type-C with Thunderbolt, 2 x USB 3.1, HDMI', 'Windows 10 Pro', 'Vỏ kim loại, PIN liền', 'Dày 18 mm, 1.31 kg', 2020, 'f', 41.59, 1, 1, 1, '2021-07-05 19:23:25', '2021-07-06 05:37:24'),
(7, 'Laptop Lenovo IdeaPad Flex 5 14IIL05 Moi', '1625538324.jpg', 'Intel Core i3 Ice Lake', 'DDR4 (2 khe) 8GB', 'SSD: 512 GB, M.2 PCIe, Không hỗ trợ khe cắm HDD', 14.00, 'Intel Iris Xe Graphics', '2 x USB 3.0 HDMI USB Type-C', 'Windows 10 Home SL', 'Card đồ họa tích hợp', 'i 322.6 mm - Rộng 218.5 mm - Dày 20.4 mm', 2020, 'g', 16.49, 1, 1, 1, '2021-07-05 19:25:24', '2021-07-05 19:25:24'),
(8, 'Laptop Lenovo IdeaPad Slim 5 15ITL05 Moi', '1625590268.jpg', 'Intel Core i7 Comet Lake', 'DDR4 (2 khe) 8GB', 'SSD: 512 GB, M.2 PCIe, Hỗ trợ khe cắm HDD SATA', 15.60, 'NVIDIA GeForce GTX1650 4GB', '2 x USB 3.1 HDMI LAN (RJ45) USB Type-C', 'Windows 10 Home SL', 'Card đồ họa rời', 'Dài 321.7 mm - Rộng 211.8 mm - Dày 17.9 mm', 2020, 'f', 17.99, 1, 1, 1, '2021-07-05 19:27:18', '2021-07-06 09:51:08'),
(9, 'Laptop Lenovo IdeaPad Gaming 3 15IMH05', '1625538438.jpg', 'Intel Core i7 Comet Lake', 'DDR4 (2 khe) 8GB', 'SSD: 512 GB, M.2 PCIe, Hỗ trợ khe cắm HDD SATA', 15.60, 'NVIDIA GeForce GTX1650 4GB', '2 x USB 3.1 HDMI LAN (RJ45) USB Type-C', 'Windows 10 Home SL', 'Card đồ họa rời', 'Dài 321.7 mm - Rộng 211.8 mm - Dày 17.9 mm', 2020, 'f', 23.99, 1, 1, 1, '2021-07-05 19:27:18', '2021-07-05 19:27:18'),
(10, 'Asus VivoBook A415EA i5 1135G7', '1625586611.jpg', 'Intel Core i5 Tiger Lake, 1135G7, 2.40 GHz', '8 GB, DDR4 (On board), 3200 MHz', 'Intel Optane 32GB (H10), SSD: 512 GB, M.2 PCIe, Hỗ trợ khe cắm SSD M.2 PCIe', 14.00, 'Card đồ họa tích hợp, Intel Iris Xe Graphics', '2 x USB 2.0, USB 3.1, HDMI, USB Type-C', 'Windows 10 Home SL', 'Vỏ nhựa - nắp lưng bằng kim loại, PIN liền', 'Dày 17.9 mm, 1.4 kg', 2020, 'g', 17.59, 1, 1, 1, '2021-07-06 08:50:11', '2021-07-06 08:50:11'),
(11, 'Dell Vostro 3500 i5 1135G7', '1625586765.jpg', 'Intel Core i5 Tiger Lake', 'DDR4 (2 khe) 8GB', 'SSD 256GB NVMe PCIe, Hỗ trợ khe cắm HDD SATA', 15.60, 'NVIDIA GeForce MX330, 2GB', '2 x USB 3.2 ,HDMI, LAN (RJ45), USB 2.0, USB Type-C', 'Windows 10 Home SL', 'Card đồ họa rời', 'Dài 363.96 mm - Rộng 249 mm - Dày 19.9 mm', 2020, 'g', 17.49, 1, 1, 1, '2021-07-06 08:52:45', '2021-07-06 08:52:45'),
(12, 'MacBook Air M1 16GB 256GB 2020', '1625587589.jpg', 'Apple M1', '8 GB, DDR4 (2 khe), 3200 MHz', 'SSD 256GB', 13.30, 'Card đồ tích hợp, 7 nhân GPU', '2 x Thunderbolt USB 4', 'MacOS Big Sur', 'Vỏ kim loại nguyên khối, PIN liền', 'Dày 4.1 mm, 1.29 kg', 2020, 'f', 32.55, 1, 1, 1, '2021-07-06 08:55:57', '2021-07-06 09:06:29'),
(13, 'MacBook Air M1 256GB 2020', '1625587235.jpg', 'Apple M1', '8 GB, DDR4 (2 khe), 3200 MHz', 'SSD 256GB NVMe PCIe', 13.30, 'Card đồ tích hợp, 7 nhân GPU', '2 x Thunderbolt 3(USB-c)', 'MacOS', 'Vỏ kim loại nguyên khối, PIN liền', 'Dày 4.1 mm, 1.29 kg', 2020, 'f', 28.99, 1, 1, 1, '2021-07-06 08:58:06', '2021-07-06 09:00:35'),
(14, 'HP EliteBook X360 830 G7 i7 230L5PA', '1625587818.jpg', 'Intel Core i7 Comet Lake, 10510U, 1.80 GHz', '16 GB, DDR4 (1 khe), 3200 MHz', 'Intel Optane 32GB (H10), SSD: 512 GB, M.2 PCIe', 13.30, 'Card đồ họa tích hợp, Intel UHD Graphics', '2 x USB 3.1 Type-C with Thunderbolt, 2 x USB 3.1, HDMI', 'Windows 10 Pro', 'Vỏ kim loại, PIN liền', 'Dày 18 mm, 1.31 kg', 2020, 'gt', 41.59, 1, 1, 1, '2021-07-06 09:10:18', '2021-07-06 09:10:18'),
(15, 'HP Envy 13 aq1057TX i7 8XS68PA', '1625587965.jpg', 'Intel Core i7 Comet Lake, 10510U, 1.80 GHz', '8 GB, DDR4 (On board), 2400 MHz', 'SSD: 512 GB, M.2 PCIe', 13.30, 'Card đồ họa rời, NVIDIA GeForce MX250 2GB', '2 x USB 3.1, USB Type-C', 'Windows 10 Home SL', 'Vỏ kim loại nguyên khối, PIN liền', 'Dày 14.7 mm, 1.17 kg', 2020, 'f', 29.99, 1, 1, 1, '2021-07-06 09:12:45', '2021-07-06 09:12:45'),
(16, 'HP Envy 13 aq1057TX i7 8XS68PA', '1625589024.jpg', 'Intel Core i7 Comet Lake, 10750H, 2.60 GHz', '16 GB, DDR4 (2 khe), 2933 MHz', '1TB SSD M.2 PCIe', 15.60, 'Card đồ họa rời, NVIDIA GeForce GTX 1660Ti Max-Q, 6GB', '2x SuperSpeed USB A, 2 x Thunderbolt 3 (USB-C)', 'Windows 10 Home SL + Office Home&Student 2019 vĩnh viễn', 'Vỏ kim loại nguyên khối, PIN liền', 'Dày 18.4 mm, 2.14 kg', 2020, 'f', 29.99, 1, 1, 1, '2021-07-06 09:14:57', '2021-07-06 09:30:24'),
(17, 'HP Envy 15 ep0145TX i7 10750H', '1625588097.jpg', 'Intel Core i7 Comet Lake, 10750H, 2.60 GHz', '16 GB, DDR4 (2 khe), 2933 MHz', '1TB SSD M.2 PCIe', 15.60, 'Card đồ họa rời, NVIDIA GeForce GTX 1660Ti Max-Q, 6GB', '2x SuperSpeed USB A, 2 x Thunderbolt 3 (USB-C)', 'Windows 10 Home SL + Office Home&Student 2019 vĩnh viễn', 'Vỏ kim loại nguyên khối, PIN liền', 'Dày 18.4 mm, 2.14 kg', 2020, 'f', 54.99, 1, 1, 1, '2021-07-06 09:14:57', '2021-07-06 09:14:57'),
(18, 'Laptop Lenovo IdeaPad S145 15IIL', '1625588368.jpg', 'Intel Core i3 Ice Lake', 'DDR4 (2 khe) 4GB', 'SSD: 512 GB, M.2 PCIe, Không hỗ trợ khe cắm HDD', 14.00, 'Intel Iris Xe Graphics', '2 x USB 3.0, HDMI ,USB 2.0', 'Windows 10 Home SL', 'Card đồ họa tích hợp', 'Dài 358 mm - Rộng 24.5 mm - Dày 17.9 mm', 2020, 'd', 11.49, 1, 1, 1, '2021-07-06 09:19:28', '2021-07-06 09:19:28'),
(19, 'Laptop Lenovo IdeaPad ', '1625588489.jpg', 'Intel Core i3 Ice Lake', 'DDR4 (2 khe) 8GB', 'SSD: 512 GB, M.2 PCIe, Hỗ trợ khe cắm HDD SATA', 14.00, 'Intel Iris Xe Graphics', '2 x USB 3.1, HDMI ,USB Type-C', 'Windows 10 Home SL', 'Card đồ họa tích hợp', 'Dài 322.7 mm - Rộng 230.5 mm - Dày 17.9 mm', 2020, 'f', 13.99, 1, 1, 1, '2021-07-06 09:21:29', '2021-07-06 09:21:29'),
(20, 'Dell Vostro 5402 Core i5', '1625588646.jpg', 'Intel Core i5 Tiger Lake', 'DDR4 (2 khe) 8GB', 'SSD 256GB NVMe PCIe', 14.00, 'Intel Iris Xe Graphics', '2 x USB 3.2,HDMI ,LAN (RJ45) ,USB Type-C', 'Windows 10 Home SL', 'Card đồ họa tích hợp', 'Dài 321.3 mm - Rộng 216.2 mm - Dày 17.9 mm', 2020, 'f', 18.89, 1, 1, 1, '2021-07-06 09:24:06', '2021-07-06 09:24:06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slideshow`
--

DROP TABLE IF EXISTS `slideshow`;
CREATE TABLE IF NOT EXISTS `slideshow` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `HinhAnh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `URL` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

DROP TABLE IF EXISTS `taikhoan`;
CREATE TABLE IF NOT EXISTS `taikhoan` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `HoVaTenND` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SDT` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LoaiTK` int(11) NOT NULL,
  `AnhDaiDien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TrangThai` int(11) NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `HoVaTenND`, `UserName`, `password`, `Email`, `DiaChi`, `SDT`, `LoaiTK`, `AnhDaiDien`, `TrangThai`, `code`, `created_at`, `updated_at`) VALUES
(1, 'NgaNguyen', 'Nga', '$2y$10$SAEhov4d99Zkg2qrm9.CAOsaldv.xazLCDXl.Tpl2kNt9XxkoWUhW', 'admin@gmail.com', 'dcv', '123', 1, 'g.jpg', 1, NULL, NULL, NULL),
(2, 'hthh', 'nga2', '$2y$10$.zMu/QqoMiIjjdRVMBXqIe17JeLQlLgQcvdRvyBdqaPZ9gQOtfbg6', '0306181342@caothang.edu.vn', 'dfd', '123123', 1, '1625485100.jpg', 1, '2FD57gazKrEUtG0J', '2021-07-05 04:38:20', '2021-07-06 09:53:20');

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `baohanh`
--
ALTER TABLE `baohanh`
  ADD CONSTRAINT `baohanh_idsp_foreign` FOREIGN KEY (`IdSP`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_idkh_foreign` FOREIGN KEY (`IdKH`) REFERENCES `taikhoan` (`id`),
  ADD CONSTRAINT `binhluan_idsp_foreign` FOREIGN KEY (`IdSP`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_masp_foreign` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_hotenkh_foreign` FOREIGN KEY (`HoTenKH`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `kho`
--
ALTER TABLE `kho`
  ADD CONSTRAINT `kho_idsp_foreign` FOREIGN KEY (`IdSP`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD CONSTRAINT `khuyenmai_idsp_foreign` FOREIGN KEY (`IdSP`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_nhacc_foreign` FOREIGN KEY (`NhaCC`) REFERENCES `nhacungcap` (`id`),
  ADD CONSTRAINT `sanpham_tendm_foreign` FOREIGN KEY (`TenDM`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
