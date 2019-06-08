-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2019 at 06:06 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(60) CHARACTER SET utf8 NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(120) CHARACTER SET utf8 DEFAULT NULL,
  `role_admin` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `img_path` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `ansewers`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE `orderdetail` (
  `id` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `name_product` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `active` int(1) NOT NULL,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `order` (
  `id_order` int(11) NOT NULL,
  `id_sanpham` int(10) UNSIGNED NOT NULL,
  `TenKH` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` int(11) NOT NULL,
  `Email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `GhiChu` text COLLATE utf8_unicode_ci NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `ThanhTien` int(11) NOT NULL,
  `TrangThai` int(11) NOT NULL,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `loaisach`
--

CREATE TABLE `loaisanpham` (
  `id_loai` int(11) NOT NULL,
  `TenLoai` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `loaisach`
--


-- --------------------------------------------------------

--
-- Table structure for table `nhaxuatban`
--

CREATE TABLE `nhasanxuat` (
  `id_nsx` int(11) NOT NULL,
  `TenNsx` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `logo_nsx` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `nhaxuatban`
--


-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

-- --------------------------------------------------------

--
-- Table structure for table `sach`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `TenSP` varchar(200) CHARACTER SET utf8 NOT NULL,
  `id_nsx` int(11) NOT NULL,
  `id_loaisanpham` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `HinhAnh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `GiaCu` int(11) NOT NULL,
  `GiaMoi` int(11) DEFAULT NULL,
  `SoLuong` int(11) NOT NULL,
  `SoTrang` int(11) NOT NULL,
  `SoLuotXem` int(11) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `sach`
--

-- --------------------------------------------------------

--
-- Table structure for table `tacgia`
--

--
-- Dumping data for table `tacgia`
--

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id_tk` int(11) NOT NULL,
  `TenDangNhap` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `TenHienThi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Quyen` int(11) NOT NULL,
  `Trang_thai` tinyint(4) NOT NULL,
  `authen_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `ansewers`
--

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `donhang`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`) USING BTREE;

--
-- Indexes for table `loaisach`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`id_loai`) USING BTREE;

--
-- Indexes for table `nhaxuatban`
--
ALTER TABLE `nhasanxuat`
  ADD PRIMARY KEY (`id_nsx`) USING BTREE;

--
-- Indexes for table `questions`
--

--
-- Indexes for table `sach`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `tacgia`
--

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id_tk`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
