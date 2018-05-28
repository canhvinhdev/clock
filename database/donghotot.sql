-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2017 at 05:01 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donghotot`
--

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE IF NOT EXISTS `danhmuc` (
  `id` int(11) NOT NULL,
  `ten_dm` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `ten_dm`, `parent_id`, `status`) VALUES
(1, 'CANDINO', 0, 0),
(2, 'Đồng hồ Candino Nam', 1, 0),
(4, 'Đồng hồ Candino Nữ', 1, 0),
(5, 'Đồng hồ Candino Automatic', 1, 0),
(9, 'Đồng hồ Candino Cặp đôi', 1, 0),
(12, 'CASIO', 0, 0),
(13, 'Đồng hồ Casio G-Shock', 12, 0),
(54, 'Đồng hồ Casio Nam', 12, 0),
(55, 'Đồng hồ Casio Nữ', 12, 0),
(58, 'Đồng hồ Casio Cặp đôi', 12, 1),
(61, 'OLYMPIA PIANUS', 0, 0),
(63, 'SEIKO', 0, 0),
(69, 'Đồng hồ Seiko Nam', 63, 0),
(80, 'Đồng hồ Seiko Nữ', 63, 0),
(81, 'Đồng hồ Seiko Cặp đôi', 63, 0),
(82, 'BULOVA', 0, 0),
(83, 'SKAGEN', 0, 0),
(84, 'SUNRISE', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE IF NOT EXISTS `donhang` (
  `id` int(11) NOT NULL,
  `id_nsd` int(11) DEFAULT NULL,
  `ten_ndh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `diachi_nhan` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `homthu` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `ngaygio_dh` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tongtien_dh` int(11) NOT NULL,
  `tinhtrang_dh` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=162 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`id`, `id_nsd`, `ten_ndh`, `diachi_nhan`, `homthu`, `sdt`, `ngaygio_dh`, `tongtien_dh`, `tinhtrang_dh`) VALUES
(131, NULL, 'Bùi Anh Duy', 'vn', 'keocucdang1002@gmail.com', 1644119520, '2016-12-22 00:05:40', 13140600, 0),
(132, NULL, 'Bùi Thị Lý', 'Viên Nội, Ứng Hòa, TP. Hà Nội', 'keo@gmail.com', 1644119520, '2016-12-22 00:08:28', 15278600, 0),
(135, 30, 'Bùi Thị Hằng', 'Viên Nội, Ứng Hòa, Hà Nội								', 'kiki@gmail.com', 1644119520, '2016-12-23 17:15:20', 10734000, 0),
(136, 30, 'Bùi Thị Hằng', 'Viên Nội, Ứng Hòa, Hà Nội								', 'kiki@gmail.com', 1644119520, '2016-12-23 18:05:45', 9745500, 0),
(137, 30, 'Bùi Thị Hằng', 'Viên Nội, Ứng Hòa, Hà Nội								', 'kiki@gmail.com', 1644119520, '2016-12-26 23:10:45', 8596000, 0),
(138, 29, 'Bùi Thị Thúy', 'Viên Nội, Ứng Hòa, Hà Nội								', 'scl@gmail.com', 1644119520, '2017-01-02 19:33:28', 10081200, 0),
(142, 34, 'Bùi Thị Thúy', 'Viên Nội-Ứng Hòa-TP.Hà Nội								', 'thuythuy@gmail.com', 1644119520, '2017-01-03 00:24:35', 10081200, 0),
(143, 34, 'Bùi Thị Thúy', 'Viên Nội-Ứng Hòa-TP.Hà Nội								', 'thuythuy@gmail.com', 1644119520, '2017-01-03 00:27:33', 6414000, 0),
(144, 34, 'Bùi Thị Thúy', 'Viên Nội-Ứng Hòa-TP.Hà Nội								', 'thuythuy@gmail.com', 1644119520, '2017-01-03 00:27:59', 6414000, 0),
(145, 34, 'Bùi Thị Thúy', 'Viên Nội-Ứng Hòa-TP.Hà Nội								', 'thuythuy@gmail.com', 1644119520, '2017-01-03 00:30:40', 6032500, 0),
(146, 34, 'Bùi Thị Thúy', 'Viên Nội-Ứng Hòa-TP.Hà Nội								', 'thuythuy@gmail.com', 1644119520, '2017-01-03 00:32:16', 5198200, 0),
(147, NULL, 'Bùi Thị Lý', 'Viên Nội, Ứng Hòa', 'ly@gmail.com', 1644119520, '2017-01-04 18:23:27', 23295700, 0),
(148, NULL, 'Bùi Anh Duy', 'Viên Nội, Ứng Hòa', 'keocucdang1002@gmail.com', 1644119520, '2017-01-04 18:27:18', 12365100, 0),
(149, 28, 'Vũ Thị Ngọc Trang', 'Triều Khúc, Hà Nội								', 'trangvtn@gmail.com', 1644119510, '2017-01-04 18:31:19', 4883000, 0),
(150, 32, 'Nguyễn Thành Đạt', 'Cao Thành-Ứng Hòa-Hà Nội								', 'datnt@gmail.com', 1639566441, '2017-01-05 09:38:51', 7797300, 0),
(151, 32, 'Nguyễn Thành Đạt', 'Cao Thành-Ứng Hòa-Hà Nội								', 'datnt@gmail.com', 1639566441, '2017-01-05 09:56:24', 2599100, 0),
(152, NULL, 'Bùi Thị Thúy', 'Viên Nội', 'keocucdang1002@gmail.com', 1644119520, '2017-01-05 15:23:04', 2599100, 0),
(153, 32, 'Nguyễn Thành Đạt', 'Cao Thành-Ứng Hòa-Hà Nội								', 'datnt@gmail.com', 1639566441, '2017-01-05 15:28:00', 20005000, 0),
(154, 32, 'Nguyễn Thành Đạt', 'Cao Thành-Ứng Hòa-Hà Nội								', 'datnt@gmail.com', 1639566441, '2017-01-06 19:36:10', 7797300, 0),
(155, 35, 'Bùi Thị Thúy', 'Viên Nội-Ứng Hòa-TP.Hà Nội								', 'thuybt22@wru.vn', 1644119520, '2017-01-09 08:51:42', 5323500, 0),
(156, 35, 'Bùi Thị Thúy', 'Viên Nội-Ứng Hòa-TP.Hà Nội								', 'thuybt22@wru.vn', 1644119520, '2017-01-09 09:04:22', 4745000, 0),
(158, 35, 'Bùi Thị Thúy', 'Viên Nội-Ứng Hòa-TP.Hà Nội								', 'thuybt22@wru.vn', 1644119520, '2017-01-09 10:19:54', 2142000, 0),
(160, 35, 'Bùi Thị Thúy', 'Viên Nội-Ứng Hòa-TP.Hà Nội								', 'thuybt22@wru.vn', 1644119520, '2017-01-09 15:29:55', 18022000, 0),
(161, 35, 'Bùi Thị Thúy', 'Viên Nội-Ứng Hòa-TP.Hà Nội								', 'thuybt22@wru.vn', 1644119520, '2017-01-09 16:07:51', 3418100, 0);

-- --------------------------------------------------------

--
-- Table structure for table `donhangchitiet`
--

CREATE TABLE IF NOT EXISTS `donhangchitiet` (
  `id` int(11) NOT NULL,
  `id_dh` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `tensp_dhct` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `soluong_dhct` int(11) NOT NULL,
  `dongia_dhct` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=181 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `donhangchitiet`
--

INSERT INTO `donhangchitiet` (`id`, `id_dh`, `id_sp`, `tensp_dhct`, `soluong_dhct`, `dongia_dhct`) VALUES
(138, 131, 102, 'ĐỒNG HỒ CASIO G-SHOCK GA-110GD-9ADR CHÍNH HÃNG', 1, 4883000),
(139, 131, 93, 'ĐỒNG HỒ CANDINO C4545/2 CHÍNH HÃNG', 2, 4128800),
(140, 132, 102, 'ĐỒNG HỒ CASIO G-SHOCK GA-110GD-9ADR CHÍNH HÃNG', 1, 4883000),
(141, 132, 100, 'ĐỒNG HỒ CASIO G-SHOCK G-7900-3DR CHÍNH HÃNG', 1, 2138000),
(142, 132, 93, 'ĐỒNG HỒ CANDINO C4545/2 CHÍNH HÃNG', 2, 4128800),
(147, 135, 103, 'ĐỒNG HỒ G-SHOCK GD-X6900RD-4DR CHÍNH HÃNG', 1, 3713000),
(148, 135, 102, 'ĐỒNG HỒ CASIO G-SHOCK GA-110GD-9ADR CHÍNH HÃNG', 1, 4883000),
(149, 135, 100, 'ĐỒNG HỒ CASIO G-SHOCK G-7900-3DR CHÍNH HÃNG', 1, 2138000),
(150, 136, 103, 'ĐỒNG HỒ G-SHOCK GD-X6900RD-4DR CHÍNH HÃNG', 1, 3713000),
(151, 136, 54, 'ĐỒNG HỒ CANDINO NAM QUARTZ C4334', 1, 6032500),
(152, 137, 103, 'ĐỒNG HỒ G-SHOCK GD-X6900RD-4DR CHÍNH HÃNG', 1, 3713000),
(153, 137, 102, 'ĐỒNG HỒ CASIO G-SHOCK GA-110GD-9ADR CHÍNH HÃNG', 1, 4883000),
(154, 142, 103, 'ĐỒNG HỒ G-SHOCK GD-X6900RD-4DR CHÍNH HÃNG', 2, 3713000),
(155, 142, 102, 'ĐỒNG HỒ CASIO G-SHOCK GA-110GD-9ADR CHÍNH HÃNG', 1, 4883000),
(156, 143, 100, 'ĐỒNG HỒ CASIO G-SHOCK G-7900-3DR CHÍNH HÃNG', 3, 2138000),
(157, 144, 100, 'ĐỒNG HỒ CASIO G-SHOCK G-7900-3DR CHÍNH HÃNG', 3, 2138000),
(158, 145, 54, 'ĐỒNG HỒ CANDINO NAM QUARTZ C4334', 1, 6032500),
(159, 146, 103, 'ĐỒNG HỒ G-SHOCK GD-X6900RD-4DR CHÍNH HÃNG', 2, 2599100),
(160, 147, 103, 'ĐỒNG HỒ G-SHOCK GD-X6900RD-4DR CHÍNH HÃNG', 2, 2599100),
(161, 147, 54, 'ĐỒNG HỒ CANDINO NAM QUARTZ C4334', 3, 6032500),
(162, 148, 103, 'ĐỒNG HỒ G-SHOCK GD-X6900RD-4DR CHÍNH HÃNG', 1, 3713000),
(163, 148, 102, 'ĐỒNG HỒ CASIO G-SHOCK GA-110GD-9ADR CHÍNH HÃNG', 2, 4883000),
(164, 149, 102, 'ĐỒNG HỒ CASIO G-SHOCK GA-110GD-9ADR CHÍNH HÃNG', 1, 4883000),
(165, 150, 103, 'ĐỒNG HỒ G-SHOCK GD-X6900RD-4DR CHÍNH HÃNG', 3, 2599100),
(166, 151, 103, 'ĐỒNG HỒ G-SHOCK GD-X6900RD-4DR CHÍNH HÃNG', 1, 2599100),
(167, 152, 103, 'ĐỒNG HỒ G-SHOCK GD-X6900RD-4DR CHÍNH HÃNG', 1, 2599100),
(168, 153, 93, 'ĐỒNG HỒ CANDINO C4545/2 CHÍNH HÃNG', 1, 7940000),
(169, 153, 54, 'ĐỒNG HỒ CANDINO NAM QUARTZ C4334', 2, 6032500),
(170, 154, 103, 'ĐỒNG HỒ G-SHOCK GD-X6900RD-4DR CHÍNH HÃNG', 3, 2599100),
(171, 155, 105, 'ĐỒNG HỒ CASIO MTD-1075D-1A2VDF CHÍNH HÃNG', 1, 2142000),
(172, 155, 104, 'ĐỒNG HỒ CASIO G-SHOCK 1A4DR CHÍNH HÃNG', 1, 3181500),
(173, 156, 92, 'ĐỒNG HỒ CANDINO C4595/1 CHÍNH HÃNG', 1, 4745000),
(175, 158, 105, 'ĐỒNG HỒ CASIO MTD-1075D-1A2VDF CHÍNH HÃNG', 1, 2142000),
(178, 160, 105, 'ĐỒNG HỒ CASIO MTD-1075D-1A2VDF CHÍNH HÃNG', 1, 3060000),
(179, 160, 93, 'ĐỒNG HỒ CANDINO C4545/2 CHÍNH HÃNG', 2, 7940000),
(180, 161, 102, 'ĐỒNG HỒ CASIO G-SHOCK GA-110GD CHÍNH HÃNG', 1, 3418100);

-- --------------------------------------------------------

--
-- Table structure for table `khuyenmai`
--

CREATE TABLE IF NOT EXISTS `khuyenmai` (
  `id` int(11) NOT NULL,
  `ten_km` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_bd` date NOT NULL,
  `ngay_kt` date NOT NULL,
  `status` int(11) NOT NULL,
  `anh_km` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khuyenmai`
--

INSERT INTO `khuyenmai` (`id`, `ten_km`, `ngay_bd`, `ngay_kt`, `status`, `anh_km`) VALUES
(34, 'Noel', '2016-12-22', '2016-12-25', 0, 'upload/dongho_1-1483932996.jpg'),
(39, 'Xả hàng cuối năm', '2017-01-09', '2017-01-18', 1, 'upload/15970459_1227523523998801_1608442357_n-1483932958.png'),
(40, 'Cuồng nhiệt mua sắm', '2017-01-09', '2017-01-12', 1, 'upload/15942529_1227488967335590_241812152_o-1483896907.png');

-- --------------------------------------------------------

--
-- Table structure for table `nguoisudung`
--

CREATE TABLE IF NOT EXISTS `nguoisudung` (
  `id` int(11) NOT NULL,
  `tendangnhap` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tendaydu` varchar(200) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `ngaysinh` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `gioitinh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `homthu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoai` int(11) NOT NULL,
  `trangthai` int(11) NOT NULL,
  `phanquyen` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_dktv` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nguoisudung`
--

INSERT INTO `nguoisudung` (`id`, `tendangnhap`, `matkhau`, `tendaydu`, `ngaysinh`, `gioitinh`, `diachi`, `homthu`, `sodienthoai`, `trangthai`, `phanquyen`, `ngay_dktv`) VALUES
(27, 'KhaThang', 'e8e7ab4d53d6c618f3b5a64853654ccd', 'Nguyễn Khả Thắng', '1994-08-22', 'Nam', 'Hoa Sơn, Ứng Hòa, Hà Nội', 'kthang@gmail.com', 1692114713, 0, 'member', '2016-12-04 21:55:04'),
(28, 'trangtrang', 'e8e7ab4d53d6c618f3b5a64853654ccd', 'Vũ Thị Ngọc Trang', '1994-06-15', 'Nữ', 'Triều Khúc, Hà Nội', 'trangvtn@gmail.com', 1644119510, 0, 'member', '2016-12-09 22:44:56'),
(29, 'thuyaiko', 'e8e7ab4d53d6c618f3b5a64853654ccd', 'Bùi Thị Thúy', '1994-02-10', 'Nữ', 'Viên Nội, Ứng Hòa, Hà Nội', 'scl@gmail.com', 1644119520, 1, 'member', '2016-12-23 01:05:41'),
(30, 'thuyaiko1', 'e8e7ab4d53d6c618f3b5a64853654ccd', 'Bùi Thị Hằng', '1994-10-21', 'Nữ', 'Viên Nội, Ứng Hòa, Hà Nội', 'kiki@gmail.com', 1644119520, 1, 'member', '2016-12-23 01:13:30'),
(31, 'phathuy', 'e8e7ab4d53d6c618f3b5a64853654ccd', 'Trương Thành Phát', '25/01/1994', 'Nam', 'Viên Nội, Ứng Hòa, Hà Nội', 'phathuy123@gmail.com', 1644119520, 1, 'member', '2016-12-26 22:53:09'),
(32, 'datdat', 'e8e7ab4d53d6c618f3b5a64853654ccd', 'Nguyễn Thành Đạt', '30/10/1994', 'Nam', 'Cao Thành-Ứng Hòa-Hà Nội', 'datnt@gmail.com', 1639566441, 1, 'member', '2016-12-27 10:32:18'),
(33, 'admin', 'e8e7ab4d53d6c618f3b5a64853654ccd', 'Bùi Thị Thúy', '10/02/1994', 'Nữ', 'Viên Nội-Ứng Hòa-TP.Hà Nội', 'keocucdang1002@gmail.com', 1644119520, 1, 'admin', '2016-12-31 23:34:05'),
(34, 'thuythuy', 'e8e7ab4d53d6c618f3b5a64853654ccd', 'Bùi Thị Thúy', '10/02/1994', 'Nữ', 'Viên Nội-Ứng Hòa-TP.Hà Nội', 'thuythuy@gmail.com', 1644119520, 1, 'member', '2017-01-02 23:44:49'),
(35, 'thuybt', 'e8e7ab4d53d6c618f3b5a64853654ccd', 'Bùi Thị Thúy', '10/02/1994', 'Nữ', 'Viên Nội-Ứng Hòa-TP.Hà Nội', 'thuybt22@wru.vn', 1644119520, 1, 'member', '2017-01-07 09:46:19');

-- --------------------------------------------------------

--
-- Table structure for table `nguoitruycap`
--

CREATE TABLE IF NOT EXISTS `nguoitruycap` (
  `session` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nguoitruycap`
--

INSERT INTO `nguoitruycap` (`session`, `time`) VALUES
('ag9v5o227ism8q6upu4p9b5od5', 1483953768);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE IF NOT EXISTS `sanpham` (
  `id` int(11) NOT NULL,
  `id_th` int(11) NOT NULL,
  `id_dm` int(11) NOT NULL,
  `ma_sp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ten_sp` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `anh_sp` varchar(100) CHARACTER SET latin1 NOT NULL,
  `gia_sp` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `mau_sac` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `xuat_xu` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dong_sp` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `kieu_dang` int(11) NOT NULL,
  `duong_kinh` int(11) NOT NULL,
  `mat_kinh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `do_day` int(11) NOT NULL,
  `chat_lieu_vo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `chat_lieu_day` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `may` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `do_chiu_nuoc` int(11) NOT NULL,
  `chuc_nang` text COLLATE utf8_unicode_ci NOT NULL,
  `mota_sp` text COLLATE utf8_unicode_ci NOT NULL,
  `ngay_tao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `id_th`, `id_dm`, `ma_sp`, `ten_sp`, `anh_sp`, `gia_sp`, `so_luong`, `mau_sac`, `xuat_xu`, `dong_sp`, `kieu_dang`, `duong_kinh`, `mat_kinh`, `do_day`, `chat_lieu_vo`, `chat_lieu_day`, `may`, `do_chiu_nuoc`, `chuc_nang`, `mota_sp`, `ngay_tao`, `status`) VALUES
(54, 2, 2, '0-CLOCKCAN-104', 'ĐỒNG HỒ CANDINO NAM QUARTZ C4334', 'upload/dh6-1477747031.jpg', 6350000, 28, '5', 'Thụy Sỹ', 'Elegance', 1, 37, '', 1, 'Thép không gỉ ( All Stainless Steel ) ', 'Thép không gỉ ( All Stainless Steel ) ', 'Swiss made ( Quartz ) ', 10, '', '<p>Độ chịu nước: 10atm</p>\r\n', '2016-10-29 20:17:11', 0),
(55, 2, 2, 'C4334/F', 'ĐỒNG HỒ CANDINO NAM QUARTZ C4334/F', 'upload/dh7-1477748938.jpg', 8910000, 30, '', 'Thụy Sỹ', 'Elegance', 0, 36, '', 1, 'Thép không gỉ ( All Stainless Steel ) ', '', 'Swiss made ( Quartz ) ', 0, '', '<p>D&ograve;ng sản phẩm: Elegance</p>\r\n\r\n<p>M&aacute;y: Swiss made ( Quartz )&nbsp;</p>\r\n\r\n<p>Kiểu d&aacute;ng: Nam</p>\r\n\r\n<p>Chất liệu vỏ: Th&eacute;p kh&ocirc;ng gỉ ( All Stainless Steel )&nbsp;</p>\r\n\r\n<p>Chất liệu d&acirc;y: D&acirc;y da</p>\r\n\r\n<p>Mặt k&iacute;nh: Mineral Glass&nbsp;</p>\r\n\r\n<p>Đường k&iacute;nh: 36x36mm</p>\r\n\r\n<p>Độ d&agrave;y: 0.9mm</p>\r\n\r\n<p>Độ chịu nước: 10atm</p>\r\n\r\n<p>Chức năng: Lịch ng&agrave;y, giờ thể thao</p>\r\n', '2016-10-29 20:48:58', 0),
(56, 2, 2, 'C4461/6', 'ĐỒNG HỒ CANDINO NAM QUARTZ C4461/6', 'upload/dh8-1477749093.jpg', 3914000, 30, '', 'Thụy Sỹ', 'Classic', 0, 29, '', 1, 'Thép không gỉ ( All Stainless Steel ) Mạ vàng công nghệ PVD', '', 'Swiss made ( Quartz ) ', 0, '', '<p>Độ chịu nước: 5atm</p>\r\n\r\n<p>Chức năng: Lịch ng&agrave;y</p>\r\n', '2016-10-29 20:51:33', 0),
(57, 2, 2, 'C4439/4', 'ĐỒNG HỒ CANDINO NAM QUARTZ C4439/4', 'upload/dh9-1477750924.jpg', 4218000, 30, '', 'Thụy Sỹ', '', 0, 0, '', 0, '', '', '', 0, '', '<p>D&ograve;ng sản phẩm: Elegance</p>\r\n\r\n<p>M&aacute;y: Swiss made ( Quartz )&nbsp;</p>\r\n\r\n<p>Kiểu d&aacute;ng: Nam</p>\r\n\r\n<p>Chất liệu vỏ: Th&eacute;p kh&ocirc;ng gỉ ( All Stainless Steel )&nbsp;</p>\r\n\r\n<p>Chất liệu d&acirc;y: D&acirc;y da</p>\r\n\r\n<p>Mặt k&iacute;nh: Sapphire Glass&nbsp;</p>\r\n\r\n<p>Đường k&iacute;nh: 36x36mm</p>\r\n\r\n<p>Độ d&agrave;y: 0.9mm</p>\r\n\r\n<p>Độ chịu nước: 10atm</p>\r\n\r\n<p>Chức năng: Lịch ng&agrave;y</p>\r\n', '2016-10-29 21:22:04', 0),
(61, 2, 2, 'C4582/1', 'ĐỒNG HỒ CANDINO C4582/1 CHÍNH HÃNG', 'upload/548974324_dong-ho-nam-candino-c4582-1-1479209352.jpg', 9540000, 30, '', 'Thụy Sỹ', 'Sport Quartz', 0, 44, '', 11, 'Thép không gỉ ( All Stainless Steel ) ', '', 'Swiss made ( Quartz ) ', 0, '', '<p>Độ chịu nước: 5atm</p>\r\n\r\n<p>Chức năng: Lịch ng&agrave;y, chronograph</p>\r\n', '2016-11-07 17:52:39', 0),
(64, 2, 2, 'C4362/1', 'ĐỒNG HỒ CANDINO C4362/1 CHÍNH HÃNG', 'upload/1696182828_c4362-11-1479210723.jpg', 4910000, 30, '', 'Thụy Sỹ', 'Elegance', 0, 37, '', 1, 'Thép không gỉ ( All Stainless Steel ) ', '', 'Swiss made ( Quartz ) ', 0, '', '<p>Độ chịu nước: 10atm</p>\r\n', '2016-11-07 19:54:15', 0),
(82, 6, 61, '0-CLOCKOLY-105', 'ĐỒNG HỒ OLYM PIANUS OP2474DLS-2-H CHÍNH HÃNG', 'upload/dh14-1478655973.jpg', 2750000, 30, '1', 'Nhật', 'Jewelry', 1, 28, '', 8, 'Thép không gỉ ( All Stainless Steel ) ', 'Thép không gỉ ( All Stainless Steel ) ', 'Quartz (Japan movement)', 5, '', '<p>Chống nước: 3ATM</p>\r\n', '2016-11-09 08:46:13', 0),
(83, 11, 63, '28012LDS-T', 'ĐỒNG HỒ OLYMPIA STAR 28012LDS-T CHÍNH HÃNG', 'upload/156916235_op-28012dls1-1479140267.jpg', 3380000, 30, '', 'Nhật', 'Lovers', 0, 26, '', 8, 'Thép không gỉ ( All Stainless Steel ) ', '', 'Swiss Quartz (Máy Thụy Sỹ)', 0, '', '', '2016-11-14 23:17:47', 0),
(87, 1, 13, 'GA-100CS-9ADR', 'ĐỒNG HỒ CASIO G-SHOCK LIMITED GA-100CS-9ADR', 'upload/530509857_ga-100cs-9ajf_l1-1479206672.jpg', 3398000, 30, 'Màu Đỏ', 'Nhật', 'G-Shock-Limited ', 0, 55, '', 13, 'Dây nhựa ( Resin Band )', '', 'Quartz - Dùng pin ( Japanes movement )', 0, '', '<p>+ World time - Lịch tự động ho&agrave;n to&agrave;n&nbsp;</p>\r\n\r\n<p>+ Đồng hồ bấm giờ thể thao - Kiểu hiển thị giờ 12/24h</p>\r\n\r\n<p>+ Đếm ngược - Chống va đập - C&oacute; la b&agrave;n</p>\r\n\r\n<p>&nbsp;+ B&aacute;o&nbsp;thức - B&aacute;o lại - Đ&egrave;n led Auto</p>\r\n', '2016-11-15 17:44:33', 0),
(92, 2, 4, 'CLOCK_CAN-92', 'ĐỒNG HỒ CANDINO C4595/1 CHÍNH HÃNG', 'upload/380162832_c4595-1-1479651691.jpg', 7300000, 29, 'Màu Trắng', 'Thụy Sỹ', 'Classic ', 0, 34, 'Kính chống trầy ( Sapphire Glass ) ', 7, 'Thép không gỉ ( All Stainless Steel ) ', 'Thép không gỉ ( All Stainless Steel ) ', 'Swiss made ( Quartz ) ', 0, '', '<p>Độ chịu nước: 10atm</p>\r\n\r\n<p>Chức năng:&nbsp;</p>\r\n\r\n<p>Bảo h&agrave;nh: Ch&iacute;nh h&atilde;ng quốc tế 2 năm</p>\r\n\r\n<p>( Qu&yacute; kh&aacute;ch được bảo h&agrave;nh thay pin miễn ph&iacute; vĩnh viễn tại Đồng Hồ 24H )</p>\r\n', '2016-11-20 21:21:32', 0),
(93, 1, 2, 'N-CLOCKCAN-93', 'ĐỒNG HỒ CANDINO C4545/2 CHÍNH HÃNG', 'upload/1213673419_c4545_21-1479652779.jpg', 7940000, 27, 'Màu Trắng', 'Thụy Sỹ', 'Elegance', 0, 30, 'Sapphire', 7, 'Thép không gỉ ( All Stainless Steel ) ', 'Thép không gỉ ( All Stainless Steel ) ', 'Swiss made ( Quartz ) ', 0, '', '<p>Độ chịu nước: 10atm</p>\r\n\r\n<p>Chức năng: Lịch ng&agrave;y</p>\r\n\r\n<p>Bảo h&agrave;nh: Ch&iacute;nh h&atilde;ng quốc tế 2 năm</p>\r\n\r\n<p>( Qu&yacute; kh&aacute;ch được bảo h&agrave;nh thay pin miễn ph&iacute; vĩnh viễn tại Đồng Hồ 24H&nbsp;</p>\r\n', '2016-11-20 21:39:39', 0),
(99, 2, 2, '0-CLOCKCAN-104', 'ĐỒNG HỒ CANDINO C4429/D CHÍNH HÃNG', 'upload/1024014745_c4429_d1-1479978411.jpg', 8910000, 30, '1', 'Thụy Sỹ', 'Sports', 0, 45, 'Sapphire ', 10, 'Thép không gỉ ( All Stainless Steel ) ', 'Thép không gỉ ( All Stainless Steel ) ', 'Swiss made ( Quartz ) ', 10, '<p>Lịch ng&agrave;y, chronograph</p>\r\n', '', '2016-11-24 16:06:52', 0),
(100, 1, 13, 'N-CLOCKCAS-100', 'ĐỒNG HỒ CASIO G-SHOCK G-7900-3DR CHÍNH HÃNG', 'upload/327028597_g-7900-3_l-1481299423.jpg', 2138000, 30, 'Màu Đỏ', 'Nhật', 'G-Shock', 0, 51, 'Kính khoáng ( Mineral Glass ) Mặt kính rắn chắc hạn chế tối đa trầy xước', 12, 'Thép - Nhựa', 'Dây nhựa ( Resin Band )', 'Quartz - Dùng pin ( Japanes movement ) ', 0, '', '<p>Chống nước: &nbsp;20 Bar (&nbsp;200 m )&nbsp;</p>\r\n\r\n<p>Chức năng:&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; + World time - Lịch tự động ho&agrave;n to&agrave;n&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; + Đồng hồ bấm giờ thể thao - Kiểu hiển thị giờ 12/24h</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; + Đếm ngược - Chống va đập&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; + B&aacute;o&nbsp;thức - B&aacute;o lại - Đ&egrave;n led&nbsp;</p>\r\n\r\n<p>Bảo h&agrave;nh: Ch&iacute;nh h&atilde;ng Quốc tế - M&aacute;y 1 năm- Pin 1,5 năm</p>\r\n', '2016-12-09 23:03:44', 0),
(101, 1, 13, '0-CLOCKCAS-106', 'ĐỒNG HỒ CASIO G-SHOCK GA-110WB CHÍNH HÃNG', 'upload/931599241_ga-110wb-7a_1-1481299865.jpg', 3960000, 30, '1', 'Nhật', 'G-Shock', 0, 51, 'Kính khoáng ( Mineral Glass ) Mặt kính rắn chắc hạn chế tối đa trầy xước', 13, 'Thép - Nhựa', 'Dây nhựa ( Resin Band )', 'Quartz - Dùng pin ( Japanes movement ) ', 20, '<p>World time - Lịch tự động ho&agrave;n to&agrave;n</p>\r\n', '', '2016-12-09 23:11:05', 0),
(102, 1, 13, '0-CLOCKCAS-106', 'ĐỒNG HỒ CASIO G-SHOCK GA-110GD CHÍNH HÃNG', 'upload/1721192463_ga-110gd-9ajf_l1-1481648827.jpg', 4883000, 26, '4', 'Nhật', 'G-Shock', 0, 51, 'Kính thoáng ( Mineral Glass ) Mặt kính rắn chắc hạn chế tối đa trầy xước', 13, 'Thép - Nhựa', 'Dây nhựa ( Resin Band )', 'Quartz - Dùng pin ( Japanes movement ) ', 10, '<p>+ World time - Lịch tự động ho&agrave;n to&agrave;n&nbsp;</p>\r\n\r\n<p>+ Đồng hồ bấm giờ thể thao - Kiểu hiển thị giờ 12/24h</p>\r\n\r\n<p>&nbsp;+ Đếm ngược - Chống va đập - C&oacute; la b&agrave;n</p>\r\n\r\n<p>&nbsp;+ B&aacute;o&nbsp;thức - B&aacute;o lại - Đ&egrave;n led Auto</p>\r\n', '', '2016-12-14 00:07:08', 0),
(103, 1, 13, '0-CLOCKCAS-104', 'ĐỒNG HỒ G-SHOCK GD-X6900RD-4DR CHÍNH HÃNG', 'upload/546523309_gd-x6900rd-4_l1-1481731866.jpg', 3713000, 21, '1', 'Nhật', 'G-Shock', 0, 51, 'Kính khoáng ( Mineral Glass ) Mặt kính rắn chắc hạn chế tối đa trầy xước', 13, 'Thép - Nhựa', 'Dây nhựa ( Resin Band )', 'Quartz - Dùng pin ( Japanes movement ) ', 20, '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; + World time - Lịch tự động ho&agrave;n to&agrave;n&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; + Đồng hồ bấm giờ thể thao - Kiểu hiển thị giờ 12/24h</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; + Đếm ngược - Chống va đập&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; + B&aacute;o&nbsp;thức - B&aacute;o lại - Đ&egrave;n led&nbsp;</p>\r\n', '', '2016-12-14 23:11:08', 0),
(104, 1, 13, '0-CLOCKCAS-104', 'ĐỒNG HỒ CASIO G-SHOCK 1A4DR CHÍNH HÃNG', 'upload/1106230494_ga-400gb-1a4_1-1483893883.jpg', 4545000, 28, '3', 'Nhật', 'G-Shock', 0, 51, ' Kính khoáng ( Mineral Glass ) Mặt kính rắn chắc hạn chế tối đa trầy xước', 13, 'Thép - Nhựa', 'Dây nhựa ( Resin Band )', 'Quartz - Dùng pin ( Japanes movement ) ', 20, '<p>+ World time - Lịch tự động ho&agrave;n to&agrave;n&nbsp;&nbsp;</p>\r\n\r\n<p>+ Đồng hồ bấm giờ thể thao - Kiểu hiển thị giờ 12/24h</p>\r\n\r\n<p>+ Đếm ngược - Chống va đập&nbsp;</p>\r\n\r\n<p>+ B&aacute;o&nbsp;thức - B&aacute;o lại - Đ&egrave;n led Auto</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>\r\n', '', '2017-01-08 23:44:44', 0),
(105, 1, 54, '0-CLOCKCAS-105', 'ĐỒNG HỒ CASIO MTD-1075D-1A2VDF CHÍNH HÃNG', 'upload/1669533946_mtd-1075d-1a2v_1-1483894343.jpg', 3060000, 26, '2', 'Nhật', 'Standard', 0, 45, 'Kính khoáng ( Mineral Glass ) Mặt kính rắn chắc hạn chế tối đa trầy xước', 12, 'Thép không gỉ ( All Stainless Steel ) ', 'Thép không gỉ ( All Stainless Steel ) ', 'Quartz - Dùng pin ( Japanes movement ) ', 10, '<p>Xem giờ, lịch ng&agrave;y, thứ, giờ 24</p>\r\n', '', '2017-01-08 23:52:24', 0),
(106, 2, 4, '0-CLOCKCAN-106', 'ĐỒNG HỒ CANDINO C4492/3 CHÍNH HÃNG', 'upload/929311341_c4492_3copy1-1483936391.jpg', 5370000, 29, '2', 'Thụy Sỹ', 'Sport', 1, 30, 'Sapphire', 7, 'Thép không gỉ ( All Stainless Steel ) ', 'Thép không gỉ ( All Stainless Steel ) ', 'Swiss made ( Quartz ) ', 10, '<p>Lịch ng&agrave;y</p>\r\n', '', '2017-01-09 11:33:12', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sanphamyt`
--

CREATE TABLE IF NOT EXISTS `sanphamyt` (
  `id` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `id_nsd` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanphamyt`
--

INSERT INTO `sanphamyt` (`id`, `id_sp`, `id_nsd`, `status`) VALUES
(2, 93, 27, 1),
(10, 82, 27, 0),
(15, 92, 1, 1),
(16, 87, 1, 1),
(35, 93, 1, 0),
(38, 65, 1, 1),
(39, 64, 1, 1),
(42, 93, 21, 1),
(43, 99, 21, 0),
(44, 53, 21, 1),
(45, 55, 21, 1),
(46, 93, 28, 1),
(47, 82, 28, 1),
(54, 103, 1, 1),
(58, 103, 1, 1),
(59, 93, 1, 0),
(61, 56, 1, 1),
(64, 103, 27, 1),
(65, 102, 27, 1),
(70, 103, 28, 1),
(71, 87, 28, 0),
(76, 102, 30, 1),
(77, 103, 30, 0),
(78, 101, 30, 1),
(79, 54, 30, 1),
(80, 55, 30, 1),
(81, 64, 30, 1),
(82, 54, 32, 1),
(83, 93, 32, 1),
(84, 103, 32, 1),
(85, 55, 35, 1),
(86, 93, 35, 1),
(87, 105, 35, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sp_km`
--

CREATE TABLE IF NOT EXISTS `sp_km` (
  `id` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `id_km` int(11) NOT NULL,
  `giam_gia` int(11) NOT NULL,
  `km_dikem` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=179 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sp_km`
--

INSERT INTO `sp_km` (`id`, `id_sp`, `id_km`, `giam_gia`, `km_dikem`) VALUES
(111, 87, 34, 15, 'Mặt kính đồng hồ'),
(159, 87, 39, 30, ''),
(160, 100, 39, 30, ''),
(161, 101, 39, 30, ''),
(162, 102, 39, 30, ''),
(163, 104, 39, 30, ''),
(164, 105, 39, 30, ''),
(165, 103, 39, 30, ''),
(177, 92, 40, 35, ''),
(178, 99, 40, 25, '');

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

CREATE TABLE IF NOT EXISTS `theloai` (
  `id` int(11) NOT NULL,
  `ten_theloai` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theloai`
--

INSERT INTO `theloai` (`id`, `ten_theloai`, `status`) VALUES
(1, 'Đồng hồ cao cấp', 0),
(2, 'Đồng hồ thời trang', 0),
(3, 'Đồng hồ tự động', 1),
(4, 'Đồng hồ chạy bằng pin', 0),
(5, 'Đồng hồ dây da', 0),
(8, 'Đồng hồ Nam', 1),
(9, 'Đồng hồ Nữ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `theloai_sanpham`
--

CREATE TABLE IF NOT EXISTS `theloai_sanpham` (
  `id` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `id_tl` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `theloai_sanpham`
--

INSERT INTO `theloai_sanpham` (`id`, `id_sp`, `id_tl`) VALUES
(1, 54, 1),
(3, 54, 4),
(10, 55, 4),
(11, 56, 4),
(12, 55, 1),
(13, 57, 2),
(15, 61, 4),
(16, 64, 5),
(17, 82, 5),
(20, 83, 1),
(21, 83, 2),
(22, 83, 9),
(27, 87, 1),
(28, 87, 2),
(29, 87, 8),
(33, 61, 8),
(42, 92, 2),
(43, 92, 9),
(44, 93, 8),
(49, 99, 1),
(50, 99, 8),
(51, 103, 1),
(52, 103, 8),
(53, 104, 1),
(54, 104, 2),
(55, 104, 8),
(56, 105, 2),
(57, 105, 8),
(58, 106, 2),
(59, 106, 9);

-- --------------------------------------------------------

--
-- Table structure for table `thuonghieu`
--

CREATE TABLE IF NOT EXISTS `thuonghieu` (
  `id` int(11) NOT NULL,
  `ten_th` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thuonghieu`
--

INSERT INTO `thuonghieu` (`id`, `ten_th`, `status`) VALUES
(1, 'CASIO', 0),
(2, 'CANDINO', 0),
(3, 'POLICE', 0),
(5, 'SEIKO', 0),
(6, 'OLYM PIANUS', 0),
(8, 'OBAKU', 0),
(9, 'TITAN', 0),
(11, 'OLYMPIA STAR', 0),
(15, 'HIHIA', 0),
(16, '  CASIO', 0),
(17, 'OLYMPIA STAR ', 0),
(18, 'FESTINA', 0),
(22, 'BULOVA', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE IF NOT EXISTS `tintuc` (
  `id` int(11) NOT NULL,
  `tieude_tt` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `tomtat_tt` text COLLATE utf8_unicode_ci NOT NULL,
  `anh_tt` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `noidung_tt` text COLLATE utf8_unicode_ci NOT NULL,
  `ngay_tao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`id`, `tieude_tt`, `tomtat_tt`, `anh_tt`, `noidung_tt`, `ngay_tao`, `status`) VALUES
(3, 'HƯỚNG DẪN SỬ DỤNG ĐỒNG HỒ ĐIỆN TỬ MỘT SỐ MODEL', '<p>DongHo24H.Com&nbsp;đưa ra một b&agrave;i viết d&agrave;nh cho những t&iacute;n đồ đồng hồ về c&aacute;ch chỉnh giờ v&agrave; sử dụng từng Module trong đồng hồ điện tử:</p>', 'upload/dhtt1-1479733231.jpg', '<h2>&nbsp;</h2>\r\n\r\n<p>Ưu điểm lớn nhất của đồng hồ điện tử l&agrave; thời gian cực kỳ ch&iacute;nh x&aacute;c v&agrave; chi ph&iacute; đầu tư cho một chiếc đồng hồ cũng rẻ hơn rất nhiều so với những d&ograve;ng đồng hồ kh&aacute;c. Ưu điểm thứ hai của đồng hồ điện tử l&agrave; rất th&acirc;n thiện với kh&aacute;ch h&agrave;ng, gi&uacute;p họ dễ d&agrave;ng đọc được thời gian. Ưu điểm thứ 2 l&agrave; so với nhiều d&ograve;ng đồng hồ kh&aacute;c th&igrave; đồng hồ điện tử cũng rất dễ d&agrave;ng để sửa chữa.</p>\r\n\r\n<p>H&ocirc;m nay dongho24h.com&nbsp;đưa ra một b&agrave;i viết d&agrave;nh cho những t&iacute;n đồ đồng hồ về c&aacute;ch chỉnh giờ v&agrave; sử dụng từng Module trong đồng hồ điện tử:</p>\r\n\r\n<p><strong>MỤC LỤC</strong></p>\r\n\r\n<p><strong>I. HƯỚNG DẪN BẤM CHỈNH GIỜ ĐỒNG HỒ ĐIỆN TỬ</strong></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;Chỉnh giờ&nbsp;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Chỉnh giờ b&aacute;o thứ<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Xem giờ quốc tế<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;C&agrave;i giờ đếm ngược<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;T&iacute;nh giờ thể thao<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Chỉnh giờ kim</p>\r\n\r\n<p><strong>II. HƯỚNG DẪN SỬ DỤNG CỤ THỂ TỪNG MODULE</strong></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;[A] Module No. 5245</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; [B] Module No. 5240</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; [C] Module No. 5132</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; [D] Module No. 3410</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; [E] Module No. 5229</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; [F] Module No. 5184<em><img alt="" src="http://i916.photobucket.com/albums/ad9/quanghaitrieu/GW9400_Rangeman_mainBanner_zps40023469.jpg" /></em></p>\r\n\r\n<h3><strong>I. HƯỚNG DẪN BẤM CHỈNH GIỜ ĐỒNG HỒ ĐIỆN TỬ</strong></h3>\r\n\r\n<p>Đồng hồ c&oacute; 4 n&uacute;t A, B, C, D.</p>\r\n\r\n<p>N&uacute;t A: (adjust) d&ugrave;ng để khởi động v&agrave; tho&aacute;t khi điều chỉnh</p>\r\n\r\n<p>N&uacute;t B: (n&uacute;t reverse) d&ugrave;ng để giảm số khi chỉnh giờ, n&uacute;t đ&egrave;n.</p>\r\n\r\n<p>N&uacute;t C: (n&uacute;t mode) d&ugrave;ng để xem chức năng v&agrave; chuyển sang nơi cần chỉnh.</p>\r\n\r\n<p>N&uacute;t D: (forward) d&ugrave;ng để tăng số khi chỉnh giờ.</p>\r\n\r\n<p><img alt="" src="https://dongho24h.com/uploads/article/cachchinhgio.jpg" style="height:559px; width:600px" /></p>\r\n\r\n<p><strong>1. CHỈNH GIỜ:</strong></p>\r\n\r\n<p>Để chỉnh giờ đồng hồ ta thực hiện c&aacute;c thao t&aacute;c như sau:</p>\r\n\r\n<p>Nhấn n&uacute;t C đến chế độ giờ hiện h&agrave;nh (chế độ c&oacute; hiển thị thứ ng&agrave;y th&aacute;ng v&agrave; giờ)</p>\r\n\r\n<p>Nhấn giứ n&uacute;t A cho đến khi phần gi&acirc;y của đồng hồ nhấp nh&aacute;y.</p>\r\n\r\n<p>Nhấn n&uacute;t C để chuyển sang nơi cần chỉnh (gi&acirc;y -&gt; giờ (chữ viết tắt khu vực) -&gt; ph&uacute;t -&gt; chế độ 12/24 -&gt; năm -&gt; th&aacute;ng -&gt; ng&agrave;y).</p>\r\n\r\n<p>D&ugrave;ng n&uacute;t B v&agrave; D để thay đổi (tăng giảm số) khi chỉnh giờ.</p>\r\n\r\n<p>Sau khi chỉnh giờ xong nhấn n&uacute;t A để tho&aacute;t.</p>\r\n\r\n<p>Ghi Ch&uacute;:</p>\r\n\r\n<p>Việt Nam sử dụng chung hệ thống giờ với Bangkok v&igrave; vậy khi chỉnh giờ ta lu&ocirc;n để đồng hồ ở chế độ BKK (nếu c&oacute;).</p>\r\n\r\n<p>DST: l&agrave; giờ m&ugrave;a h&egrave; ở Ch&acirc;u &Acirc;u lu&ocirc;n để OFF, nếu để ON đồng hồ sẽ chạy nhanh hơn một giờ so với giờ b&igrave;nh thường.</p>\r\n\r\n<p><strong>2. CHỈNH GIỜ B&Aacute;O THỨC:</strong></p>\r\n\r\n<p>Giống như chế độ chỉnh giờ hiện h&agrave;nh, ta thực hiện như sau:</p>\r\n\r\n<p>Nhấn n&uacute;t C đến chế độ AL (Alarm).</p>\r\n\r\n<p>Nhấn giữ n&uacute;t A cho đến khi đồng hồ nhấp nh&aacute;y ở phần giờ.</p>\r\n\r\n<p>D&ugrave;ng n&uacute;t B, D để tăng giảm giờ.</p>\r\n\r\n<p>Nhấn n&uacute;t C để chuyển sang phần ph&uacute;t.</p>\r\n\r\n<p>D&ugrave;ng n&uacute;t B, D để tăng giảm ph&uacute;t.</p>\r\n\r\n<p>Nhấn n&uacute;t A để kết th&uacute;c.</p>\r\n\r\n<p>Bật tắt t&iacute;n hiệu b&agrave;o thức bằng c&aacute;ch nhấn nhẹ v&agrave;o n&uacute;t A.</p>\r\n\r\n<p>Nhấn n&uacute;t B để quay về chế độ giờ hiện h&agrave;nh.</p>\r\n\r\n<p><strong>3. XEM GIỜ QUỐC TẾ:</strong></p>\r\n\r\n<p>Nhấn n&uacute;t C đến chế độ giờ quốc tế (WORLD-TIME) viết tắt l&agrave; WT.</p>\r\n\r\n<p>D&ugrave;ng n&uacute;t B v&agrave; D để xem giờ của c&aacute;c khu vực (gồm giờ v&agrave; t&ecirc;n viết tắt của c&aacute;c th&agrave;nh phố), xem ở phần cuối catolog tiếng Anh.</p>\r\n\r\n<p>Vd: BKK: Bangkok</p>\r\n\r\n<p>HKG: Hồng K&ocirc;ng</p>\r\n\r\n<p><strong>4. C&Agrave;I GIỜ ĐẾM NGƯỢC:</strong></p>\r\n\r\n<p>Nhấn n&uacute;t C đến chế độ đếm giờ ngược (TIMER) viết tắt TMR.</p>\r\n\r\n<p>Nhấn giữ n&uacute;t A cho đến khi đồng hồ nhấp nh&aacute;y ở phần giờ.</p>\r\n\r\n<p>D&ugrave;ng n&uacute;t B, D để tăng giảm giờ.</p>\r\n\r\n<p>Nhấn n&uacute;t C để chuyển sang phần ph&uacute;t.</p>\r\n\r\n<p>D&ugrave;ng n&uacute;t B,D để tăng giảm ph&uacute;t.</p>\r\n\r\n<p>Nhấn n&uacute;t A để kết th&uacute;c.</p>\r\n\r\n<p>Để đồng hồ đếm ngược, sau khi ta c&agrave;i số giờ hoặc ph&uacute;t m&agrave; ta cần. Nhấn n&uacute;t D để chế độ đếm giờ ngược được bắt đầu hoạt động. Khi đồng hồ quay về 00:00, đồng hồ sẽ b&aacute;o t&iacute;n hiệu để ta biết thời gian ta c&agrave;i đ&atilde; tr&ocirc;i qua.</p>\r\n\r\n<p>Nh&acirc;n n&uacute;t C để quay về chế độ giờ hiện h&agrave;nh.</p>\r\n\r\n<p><strong>5. T&Iacute;NH GIỜ THỂ THAO:</strong></p>\r\n\r\n<p>Từ chế độ giờ hiện h&agrave;nh, ta nhấn n&uacute;t C đến chế độ giờ thể thao (Stopwatch), viết tắt ST, STW, đồng hồ hiển thị 00:00:00</p>\r\n\r\n<p>Nhấn n&uacute;t D để bắt đầu t&iacute;nh giờ thể thao.</p>\r\n\r\n<p>Nhấn n&uacute;t D để kết th&uacute;c.</p>\r\n\r\n<p>Nhấn n&uacute;t A để quay về 00:00:00</p>\r\n\r\n<p>Để tho&aacute;t khỏi chế độ stopwatch, ta nhấn n&uacute;t C quay về chế độ giờ hiện h&agrave;nh.</p>\r\n\r\n<p><strong>6. CHỈNH GIỜ KIM:</strong></p>\r\n\r\n<p>Từ giờ hiện h&agrave;nh, để chỉnh giờ kim ta nhấn đồng hồ đến chế độ H-set.</p>\r\n\r\n<p>Nhấn giữ n&uacute;t A cho đến khi to&agrave;n mặt đồng hồ nhấp nh&aacute;y.</p>\r\n\r\n<p>Nhấn giữ n&uacute;t D ta sẽ thấy kim đồng hồ quay.</p>\r\n\r\n<p>Để kim quay tự động ta vừa nhấn giữ n&uacute;t D rồi nhấn n&uacute;t B, sau đ&oacute; thả ra. Khi đồng hồ đ&uacute;ng giờ ta nhấn n&uacute;t D để kim đồng hồ dừng lại.</p>\r\n\r\n<p>Nhấn n&uacute;t A để tho&aacute;t ra chế độ chỉnh kim.</p>\r\n\r\n<p>Nhấn n&uacute;t C để quay về chế độ giờ hiện h&agrave;nh.</p>\r\n\r\n<h3><strong>II. HƯỚNG DẪN SỬ DỤNG CỤ THỂ TỪNG MODULE</strong></h3>\r\n\r\n<p>[A] Module No. 5245 &ndash; G 1400</p>\r\n\r\n<p><strong>Giờ hiện h&agrave;nh th&ocirc;ng thường</strong></p>\r\n\r\n<p>Sử dụng chế độ giờ hiện th&agrave;nh th&ocirc;ng thường để xem giờ v&agrave; ng&agrave;y hiện tại. Để v&agrave;o được chế độ n&agrave;y khi đồng hồ đang ở bất kỳ chế độ n&agrave;o kh&aacute;c, nhấn giữ n&uacute;t C chừng 2 gi&acirc;y.</p>\r\n\r\n<p><em>C&aacute;c chức năng của kim:</em></p>\r\n\r\n<p><img alt="" src="http://i916.photobucket.com/albums/ad9/quanghaitrieu/1_zps201b01c6.jpg" /></p>\r\n\r\n<p>&ndash; 1 Kim giờ</p>\r\n\r\n<p>&ndash; 2 Kim gi&acirc;y</p>\r\n\r\n<p>&ndash; 3 Kim ph&uacute;t</p>\r\n\r\n<p>&ndash; 4 Kim 24 giờ: Chỉ giờ hiện tại ở th&agrave;nh phố bạn đang sống (giờ địa phương) với kiểu định dạng 24h</p>\r\n\r\n<p>&ndash; 5 Kim đồng hồ (đĩa quay nhỏ) b&ecirc;n tr&aacute;i: chỉ giờ hiện tại ở một th&agrave;nh phố n&agrave;o đ&oacute; tr&ecirc;n TG với kiểu định dạng 24h</p>\r\n\r\n<p>&ndash; 6 Kim đồng hồ (đĩa quay nhỏ) b&ecirc;n phải: chỉ ng&agrave;y trong tuần (thứ)</p>\r\n\r\n<p>&ndash; 7 Ng&agrave;y</p>\r\n\r\n<p><strong>Định dạng c&agrave;i đặt giờ địa phương:</strong></p>\r\n\r\n<p>C&oacute; 2 loại c&agrave;i đặt giờ: Ở chế độ Home City (giờ địa phương), chọn 1 trong 2 định dạng: giờ chuẩn (STD) hoặc giờ m&ugrave;a h&egrave; (DST)</p>\r\n\r\n<p><em>Định dạng c&agrave;i đặt giờ:</em></p>\r\n\r\n<p><img alt="" src="http://i916.photobucket.com/albums/ad9/quanghaitrieu/2_zps11239202.jpg" /></p>\r\n\r\n<p><strong>Ch&uacute; &yacute;:</strong></p>\r\n\r\n<p>Đồng hồ n&agrave;y kh&ocirc;ng c&oacute; m&atilde; th&agrave;nh phố Newfoundland.</p>\r\n\r\n<p><strong>1.Ở chế độ giờ hiện h&agrave;nh, nhấn giữ n&uacute;t A khoảng 5 gi&acirc;y, khi kim gi&acirc;y (2) chuyển động đến m&atilde; th&agrave;nh phố hiện tại được chọn</strong></p>\r\n\r\n<p>Điều n&agrave;y cho biết bạn đang ở chế độ c&agrave;i đặt m&atilde; th&agrave;nh phố</p>\r\n\r\n<p>Đồng hồ sẽ tự động tho&aacute;t khỏi chế độ n&agrave;y nếu bạn kh&ocirc;ng thực hiện thao t&aacute;c n&agrave;o trong v&ograve;ng 2 hoặc 3 ph&uacute;t.</p>\r\n\r\n<p>Để biết th&ecirc;m chi tiết về m&atilde; th&agrave;nh phố, xem &ldquo;Bảng m&atilde; th&agrave;nh phố&rdquo; (ph&iacute;a sau s&aacute;ch hướng dẫn)</p>\r\n\r\n<p><strong>2.Thay đổi c&agrave;i đặt giờ, nhấn n&uacute;t D để dịch chuyển kim gi&acirc;y (2) theo chiều kim đồng hồ.</strong></p>\r\n\r\n<p><img alt="" src="http://i916.photobucket.com/albums/ad9/quanghaitrieu/3_zps75ff1410.jpg" /></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; Nhấn giữ n&uacute;t D cho đến khi kim gi&acirc;y (2) chỉ v&agrave;o m&atilde; th&agrave;nh phố m&agrave; bạn muốn chọn cho giờ hiện h&agrave;nh.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Mỗi lần bạn chọn m&atilde; th&agrave;nh phố, kim giờ (1), kim ph&uacute;t (3), kim 24h (4) v&agrave; ng&agrave;y (7) chuyển đến giờ v&agrave; ng&agrave;y hiện &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; tại theo m&atilde; th&agrave;nh phố. Đừng thực hiện những thao t&aacute;c tiếp theo cho đến khi c&aacute;c kim n&agrave;y dừng hẳn.</p>\r\n\r\n<p><strong>3. Nhấn n&uacute;t B để chuyển giờ hiện tại theo m&atilde; th&agrave;nh phố được chọn giữa STD (giờ chuẩn)/DST (giờ m&ugrave;a h&egrave;)</strong></p>\r\n\r\n<p>Ở chế độ c&agrave;i đặt m&atilde; th&agrave;nh phố, kim đồng hồ (đĩa quay nhỏ) b&ecirc;n phải (6) cho biết c&agrave;i đặt giờ hiện tại l&agrave; STD hay DST.</p>\r\n\r\n<p>Ch&uacute; &yacute; rằng bạn kh&ocirc;ng thể chuyển giữa STD/DST trong khi UTC (giờ phối hợp quốc tế) được chọn l&agrave;m giờ địa phương.</p>\r\n\r\n<p>Sau khi mọi c&agrave;i đặt đ&atilde; như &yacute; bạn, nhấn n&uacute;t A để quay lại chế độ giờ hiện h&agrave;nh.</p>\r\n\r\n<p><strong>4. Chuyển giờ địa phương giữa giờ chuẩn (STD) v&agrave; giờ m&ugrave;a h&egrave; (DST)</strong></p>\r\n\r\n<p>Thực hiện bước 1 như phần &ldquo;định dạng c&agrave;i đặt giờ địa phương&rdquo; ở tr&ecirc;n</p>\r\n\r\n<p>Mỗi lần bạn chọn một m&atilde; th&agrave;nh phố, kim giờ (1), kim ph&uacute;t (3), v&agrave; kim 24h (4) dịch chuyển đến giờ hiện tại theo m&atilde; th&agrave;nh phố. Kh&ocirc;ng thực hiện c&aacute;c thao t&aacute;c tiếp theo cho đến khi c&aacute;c kim n&agrave;y đ&atilde; dừng hẳn.</p>\r\n\r\n<p>Nhấn B để chuyển thời gian theo m&atilde; th&agrave;nh phố được chọn l&agrave;m giờ địa phương giữa STD (giờ chuẩn) / DST(giờ m&ugrave;a h&egrave;).</p>\r\n\r\n<p>Ở chế độ c&agrave;i đặt m&atilde; th&agrave;nh phố, kim đĩa quay b&ecirc;n phải (6) cho biết c&agrave;i đặt giờ hiện h&agrave;nh l&agrave; STD(giờ chuẩn) hay DST(giờ m&ugrave;a h&egrave;)</p>\r\n\r\n<p>Ch&uacute; &yacute; rằng bạn kh&ocirc;ng thể chuyển giữa STD/DST trong khi UTC (giờ phối hợp quốc tế) được chọn l&agrave;m giờ địa phương.</p>\r\n\r\n<p>Sau khi mọi c&agrave;i đặt đ&atilde; như &yacute; bạn, nhấn n&uacute;t A để quay lại chế độ giờ hiện h&agrave;nh.</p>\r\n\r\n<p><strong>Định dạng c&agrave;i đặt giờ v&agrave; ng&agrave;y hiện tại</strong></p>\r\n\r\n<p><em>Thay đổi c&agrave;i đặt giờ hiện tại</em></p>\r\n\r\n<p><img alt="" src="http://i916.photobucket.com/albums/ad9/quanghaitrieu/4_zps046c67b7.jpg" /></p>\r\n\r\n<p><strong>1. Ở chế độ giờ hiện h&agrave;nh, nhấn giữ n&uacute;t A (khoảng 5 gi&acirc;y) cho kim gi&acirc;y (2) dịch chuyển đến m&atilde; th&agrave;nh phố được chọn.</strong></p>\r\n\r\n<p>L&uacute;c n&agrave;y, kim đồng hồ (đĩa quay nhỏ) b&ecirc;n phải (6) sẽ cho biết loại c&agrave;i đặt giờ đại phương hiện h&agrave;nh (STD hay DST</p>\r\n\r\n<p><strong>2. Nếu bạn muốn thay đổi c&agrave;i đặt giờ địa phương v&agrave; chế độ giờ m&ugrave;a h&egrave;</strong></p>\r\n\r\n<p><img alt="" src="http://i916.photobucket.com/albums/ad9/quanghaitrieu/5_zps9e635abb.jpg" /></p>\r\n\r\n<p>Xem bước 2 v&agrave; 3 phần &ldquo;định dạng c&agrave;i đặt giờ địa phương&rdquo; ở tr&ecirc;n</p>\r\n\r\n<p>Trong những bước dưới đ&acirc;y, mỗi lần nhấn n&uacute;t C, c&aacute;c c&agrave;i đặt sẽ xoay v&ograve;ng như h&igrave;nh minh họa.</p>\r\n\r\n<p><img alt="" src="http://i916.photobucket.com/albums/ad9/quanghaitrieu/6_zpscd015d5e.jpg" /></p>\r\n\r\n<p><strong>3. Nhấn n&uacute;t C.</strong></p>\r\n\r\n<p>Đồng hồ sẽ ph&aacute;t ra tiếng b&iacute;p, v&agrave; kim gi&acirc;y (2) v&agrave; kim đồng hồ (đĩa quay nhỏ) b&ecirc;n phải (6) sẽ chuyển đến vị tr&iacute; 12h của ch&uacute;ng. Đ&acirc;y l&agrave; chế độ c&agrave;i đặt thời gian.</p>\r\n\r\n<p><strong>4. D&ugrave;ng n&uacute;t D (+) v&agrave; B (-) để thay đổi c&agrave;i đặt giờ (giờ v&agrave; ph&uacute;t)</strong></p>\r\n\r\n<p>Mỗi lần nhấn n&uacute;t, kim sẽ dịch chuyển đơn vị 1 ph&uacute;t (kim giờ (1) v&agrave; kim ph&uacute;t (3))</p>\r\n\r\n<p>Nhấn giữ n&uacute;t D hoặc B gi&uacute;p dịch chuyển kim giờ (1) v&agrave; kim ph&uacute;t (3) với tốc độ cao hơn. Để dừng việc dịch chuyển kim với tốc độ cao, nhấn bất kỳ n&uacute;t n&agrave;o.</p>\r\n\r\n<p>Kim 24h (4) v&agrave; kim giờ (1) duy chuyển đồng bộ với nhau.</p>\r\n\r\n<p>Khi c&agrave;i đặt thời gian, đảm bảo rằng kim 24h (4) chỉ đ&uacute;ng giờ am/pm (s&aacute;ng/chiều)</p>\r\n\r\n<p>Nếu bạn muốn thay đổi c&agrave;i đặt ng&agrave;y v&agrave;o l&uacute;c n&agrave;y, nhấn C v&agrave; thực hiện c&aacute;c bước bắt đầu từ bước 3 như phần &ldquo;thay đổi c&agrave;i đặt ng&agrave;y hiện tại&rdquo;</p>\r\n\r\n<p><strong>5. Sau khi giờ c&agrave;i đặt đ&atilde; như &yacute; bạn, nhấn n&uacute;t A để quay về chế độ giờ hiện h&agrave;nh.</strong></p>\r\n\r\n<p>Việc n&agrave;y sẽ l&agrave;m cho kim gi&acirc;y (2) dịch chuyển tự động đến vị tr&iacute; 12h v&agrave; tiếp tục chuyển động từ đ&acirc;y.</p>\r\n\r\n<p><em>Thay đổi c&agrave;i đặt ng&agrave;y hiện tại.</em></p>\r\n\r\n<p><img alt="" src="http://i916.photobucket.com/albums/ad9/quanghaitrieu/7_zpscd5e79dd.jpg" /></p>\r\n\r\n<p>1. Ở chế độ giờ hiện h&agrave;nh, nhấn giữ n&uacute;t A khoảng 5 gi&acirc;y để kim gi&acirc;y (2) dịch chuyển đến m&atilde; th&agrave;nh phố hiện tại được chọn</p>\r\n\r\n<p>2. Nhấn n&uacute;t C 2 lần</p>\r\n\r\n<p>Đồng hồ sẽ ph&aacute;t ra tiếng b&iacute;p v&agrave; thay đổi chế độ c&agrave;i đặt năm</p>\r\n\r\n<p>Năm c&oacute; thể được c&agrave;i đặt trong phạm vi từ 2000-2099</p>\r\n\r\n<p>Bạn c&oacute; thể lưu c&agrave;i đặt n&agrave;y v&agrave; tho&aacute;t khỏi c&agrave;i đặt bất cứ l&uacute;c n&agrave;o bằng việc nhấn n&uacute;t A, đồng hồ sẽ trở lại chế độ giờ hiện h&agrave;nh. Việc n&agrave;y sẽ l&agrave;m kim gi&acirc;y (2) dịch chuyển tự động đến vị tr&iacute; 12h v&agrave; tiếp tục dịch chuyển b&igrave;nh thường từ đ&acirc;y.</p>\r\n\r\n<p>3. D&ugrave;ng n&uacute;t D để thay đổi theo gia số 10 cho c&agrave;i đặt năm</p>\r\n\r\n<p>Mỗi lần nhấn D, kim gi&acirc;y (2) sẽ dịch chuyển v&agrave; thay đổi 10 đơn vị cho c&agrave;i đặt năm</p>\r\n\r\n<p>4. Sau khi c&agrave;i đặt xong, nhấn C</p>\r\n\r\n<p>Đồng hồ sẽ ph&aacute;t ra tiếng b&iacute;p v&agrave; đổi sang c&agrave;i đặt đơn vị cho chế độ c&agrave;i đặt năm n&agrave;y.</p>\r\n\r\n<p>5. D&ugrave;ng n&uacute;t D để thay đổi theo gia số 1 đơn vị cho c&agrave;i đặt năm</p>\r\n\r\n<p>Mỗi lần nhấn n&uacute;t D, kim gi&acirc;y(2) sẽ dịch chuyển v&agrave; thay đổi 1 đơn vị cho c&agrave;i đặt năm</p>\r\n\r\n<p>6. Sau khi c&agrave;i đặt xong, nhấn n&uacute;t C</p>\r\n\r\n<p>Đồng hồ sẽ ph&aacute;t ra tiếng b&iacute;p v&agrave; chuyển sang chế độ c&agrave;i đặt th&aacute;ng.</p>\r\n\r\n<p><img alt="" src="http://i916.photobucket.com/albums/ad9/quanghaitrieu/8_zps24585328.jpg" /></p>\r\n\r\n<p>7. D&ugrave;ng n&uacute;t D để dịch chuyển kim gi&acirc;y đến th&aacute;ng m&agrave; bạn muốn c&agrave;i.</p>\r\n\r\n<p>8. Sau khi c&agrave;i đặt xong, nhấn n&uacute;t C</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Đồng hồ sẽ ph&aacute;t ra tiếng b&iacute;p v&agrave; chuyển sang chế độ c&agrave;i đặt ng&agrave;y.</p>\r\n\r\n<p><img alt="" src="http://i916.photobucket.com/albums/ad9/quanghaitrieu/9_zps63a71ce4.jpg" /></p>\r\n\r\n<p>9. D&ugrave;ng n&uacute;t D (+) v&agrave; B (-) để thay đổi c&agrave;i đặt ng&agrave;y (7).</p>\r\n\r\n<p>Nếu bạn muốn thay đổi c&agrave;i đặt thời gian v&agrave;o l&uacute;c n&agrave;y, nhấn n&uacute;t C v&agrave; sau đ&oacute; thực hiện c&aacute;c thao t&aacute;c bắt đầu từ bước 3 theo phần &ldquo;Thay đổi c&agrave;i đặt giờ hiện tại&rdquo; (trang&hellip;)</p>\r\n\r\n<p><img alt="" src="http://i916.photobucket.com/albums/ad9/quanghaitrieu/10_zps226b1608.jpg" /></p>\r\n\r\n<p>10. Sau khi c&aacute;c c&agrave;i đặt đ&atilde; như bạn muốn, nhấn n&uacute;t A để quay lại chế độ giờ hiện h&agrave;nh</p>\r\n\r\n<p>Thứ trong tuần được chỉ bởi kim đồng hồ (đĩa quay) b&ecirc;n phải (6), n&oacute; thay đổi tự động theo ng&agrave;y (năm, th&aacute;ng v&agrave; ng&agrave;y).</p>\r\n\r\n<p><strong>Ch&uacute; &yacute;:</strong></p>\r\n\r\n<p>Đồng hồ được gắn lịch ho&agrave;n to&agrave;n tự động, t&iacute;nh to&aacute;n độ d&agrave;i kh&aacute;c nhau của th&aacute;ng v&agrave; năm nhuần. Khi bạn c&agrave;i đặt ng&agrave;y, n&oacute; sẽ kh&ocirc;ng thay đổi, trừ khi l&agrave; sau khi đồng hồ được thay đổi pin sạc hoặc sau khi lượng pin xuống mức 3.</p>\r\n\r\n<p><strong>Sử dụng đồng hồ bấm giờ</strong></p>\r\n\r\n<p>Đồng hồ bấm giờ d&ugrave;ng để đo thời gian tr&ocirc;i qua v&agrave; thời gian ph&acirc;n chia</p>\r\n\r\n<p>C&aacute;c chức năng của kim:</p>\r\n\r\n<p>(2) Kim gi&acirc;y: cho biết đồng hồ đếm đơn vị 1/10 gi&acirc;y</p>\r\n\r\n<p>(5) Kim đồng hồ nhỏ b&ecirc;n tr&aacute;i: cho biết số ph&uacute;t (kim ngắn) v&agrave; số gi&acirc;y (kim d&agrave;i)</p>\r\n\r\n<p>(6) Kim đồng hồ nhỏ b&ecirc;n phải: cho biết đồng hồ đếm đơn vị 1/100 gi&acirc;y.</p>\r\n\r\n<p><strong>Thực hiện đo thời gian tr&ocirc;i qua:</strong></p>\r\n\r\n<p>1. D&ugrave;ng n&uacute;t C để dịch chuyển kim đồng hồ nhỏ b&ecirc;n phải về số 0</p>\r\n\r\n<p>2. B&acirc;y giờ bạn c&oacute; thể thực hiện c&aacute;c thao t&aacute;c như dưới đ&acirc;y.</p>\r\n\r\n<p><em>Đo thời gian tr&ocirc;i qua:</em></p>\r\n\r\n<p><img alt="" src="http://i916.photobucket.com/albums/ad9/quanghaitrieu/11_zpsed8784b6.jpg" /></p>\r\n\r\n<p><em>Tạm dừng để đo thời gian ph&acirc;n chia:</em></p>\r\n\r\n<p><em><img alt="" src="http://i916.photobucket.com/albums/ad9/quanghaitrieu/12_zps95048322.jpg" /></em></p>\r\n\r\n<p>Ch&uacute; &yacute;:</p>\r\n\r\n<p>&ndash; Chế độ đồng hồ bấm giờ c&oacute; thể cho biết thời gian tr&ocirc;i qua l&ecirc;n tới 23 ph&uacute;t, 59.59 gi&acirc;y.<br />\r\n&ndash; C&aacute;c thao t&aacute;c bấm n&uacute;t D (chia giờ, c&agrave;i đặt lại) sẽ kh&ocirc;ng thực hiện được trong khi c&aacute;c kim đang chuyển động với tốc độ cao theo một thao t&aacute;c c&agrave;i đặt lại v&agrave; khi đổi hướng từ thời gian ph&acirc;n chia đến giờ tr&ocirc;i qua b&igrave;nh thường.<br />\r\n&ndash; Mỗi lần bắt đầu, việc đếm giờ sẽ tiếp tục cho đến khi bạn nhấn n&uacute;t B để ngưng, thậm ch&iacute; ngay cả khi bạn đ&atilde; tho&aacute;t khỏi chế độ đồng hồ bấm giờ v&agrave; v&agrave;o một chế độ kh&aacute;c v&agrave; thậm ch&iacute; nếu giờ đếm đ&atilde; vượt khỏi giới hạn cho ph&eacute;p ở tr&ecirc;n.<br />\r\n&ndash; Nếu đồng hồ bấm giờ kh&ocirc;ng được c&agrave;i đặt lại sau hoạt động đo thời gian tr&ocirc;i qua gần nhất, việc đếm giờ sẽ bắt đầu lại từ lần dừng cuối, chứ kh&ocirc;ng phải từ số 0.<br />\r\n&ndash; Kim gi&acirc;y (2) cho biết đơn vị đếm 1/10 gi&acirc;y cho 30 gi&acirc;y đầu ti&ecirc;n của hoạt động đếm thời gian tr&ocirc;i qua. Sau đ&oacute;, kim dừng ở vị tr&iacute; 12 giờ. Việc đo 1/10 gi&acirc;y vẫn tiếp tục nội tại (b&ecirc;n trong) sau 30 gi&acirc;y đầu ti&ecirc;n, v&agrave; kim gi&acirc;y (2) sẽ nhảy đến gi&aacute; trị đo được cho đến l&uacute;c đ&oacute; khi nhấn n&uacute;t B (dừng) hoặc D (chia giờ).<br />\r\n&ndash; L&uacute;c kim đồng hồ nhỏ b&ecirc;n phải (6) dừng trong khi một hoạt động đo thời gian tr&ocirc;i qua đang được thực hiện, đồng hồ vẫn theo d&otilde;i việc đo với đơn vị 1/100 gi&acirc;y. Kim đồng hồ nhỏ b&ecirc;n phải (6) sẽ nhảy đến gi&aacute; trị đo được đến l&uacute;c đ&oacute; với đơn vị 1/100 gi&acirc;y khi bạn dừng đếm giờ hoặc thực hiện thao t&aacute;c đo giờ ph&acirc;n chia.</p>\r\n\r\n<p><strong>Kiểm tra giờ hiện h&agrave;nh ở một m&uacute;i giờ kh&aacute;c.</strong></p>\r\n\r\n<p>Bạn c&oacute; thể sử dụng chế độ giờ quốc tế để xem giờ địa phương ở 29 m&uacute;i giờ tr&ecirc;n khắp thế giới. Th&agrave;nh phố được chọn ở chế độ giờ thế giới l&uacute;c n&agrave;y được gọi l&agrave; &ldquo;th&agrave;nh phố giờ thế giới&rdquo;</p>\r\n\r\n<p><strong>C&aacute;c chức năng của kim:</strong></p>\r\n\r\n<p><img alt="" src="http://i916.photobucket.com/albums/ad9/quanghaitrieu/13_zps27ca436f.jpg" /></p>\r\n\r\n<p>(2) Kim gi&acirc;y: cho biết th&agrave;nh phố tr&ecirc;n thế giới được chọn hiện tại</p>\r\n\r\n<p>(5) Kim đồng hồ nhỏ b&ecirc;n tr&aacute;i: chỉ giờ hiện tại ở th&agrave;nh phố được chọn với định dạng 24h.</p>\r\n\r\n<p>(6) Kim đồng hồ nhỏ b&ecirc;n phải: chỉ loại c&agrave;i đặt giờ STD (giờ chuẩn) hoặc DST (giờ m&ugrave;a h&egrave;) của m&uacute;i giờ hiện tại được chọn.</p>\r\n\r\n<p><strong>Xem giờ ở một m&uacute;i giờ kh&aacute;c:</strong></p>\r\n\r\n<p>1. D&ugrave;ng n&uacute;t C để di chuyển kim đồng hồ nhỏ b&ecirc;n phải (6) đến STD hoặc DST</p>\r\n\r\n<p>Kim gi&acirc;y (2) sẽ dịch chuyển đến m&atilde; th&agrave;nh phố của th&agrave;nh phố tr&ecirc;n thế giới được chọn.</p>\r\n\r\n<p><img alt="" src="http://i916.photobucket.com/albums/ad9/quanghaitrieu/14_zps7bd0f59f.jpg" /></p>\r\n\r\n<p>2. D&ugrave;ng n&uacute;t D để dịch chuyển kim gi&acirc;y (2) đến m&atilde; th&agrave;nh phố m&agrave; bạn muốn để chọn l&agrave;m th&agrave;nh phố tr&ecirc;n thế giới.</p>\r\n\r\n<p>C&aacute;c kim đồng hồ nhỏ b&ecirc;n tr&aacute;i (5) sẽ dịch chuyển đến giờ hiện tại theo m&uacute;i giờ của m&atilde; th&agrave;nh phố hi&ecirc;n tại. L&uacute;c n&agrave;y, kim giờ (1) v&agrave; kim ph&uacute;t (3) sẽ tiếp tục chỉ giờ hiện h&agrave;nh tại th&agrave;nh phố địa phương.</p>\r\n\r\n<p>Xem bảng m&atilde; th&agrave;nh phố, để biết đầy đủ c&aacute;c m&atilde; th&agrave;nh phố</p>\r\n\r\n<p>Nếu bạn nghĩ thời gian được chỉ ra cho m&uacute;i giờ được chọn l&agrave; kh&ocirc;ng đ&uacute;ng, n&oacute; c&oacute; nghĩa l&agrave; c&oacute; vấn đề lỗi do c&agrave;i đặt giờ địa phương. D&ugrave;ng c&aacute;c bước theo phần &ldquo;định dạng c&agrave;i đặt giờ địa phương&rdquo; để chỉnh sửa c&agrave;i đặt giờ địa phương.</p>\r\n\r\n<p><strong>Ấn định giờ chuẩn hoặc giờ m&ugrave;a h&egrave; (DST) cho một th&agrave;nh phố.</strong></p>\r\n\r\n<p>1. Ở chế độ giờ thế giới, d&ugrave;ng n&uacute;t D để chọn m&atilde; th&agrave;nh phố c&oacute; c&agrave;i đặt m&agrave; bạn muốn thay đổi.</p>\r\n\r\n<p>Đợi cho đến khi c&aacute;c kim đồng hồ nhỏ b&ecirc;n tr&aacute;i (5) ho&agrave;n tất việc di chuyển đến giờ của th&agrave;nh phố được chọn.</p>\r\n\r\n<p>Bạn sẽ kh&ocirc;ng thể thực hiện bước 2 của thao t&aacute;c n&agrave;y cho đến khi c&aacute;c kim dừng hẳn</p>\r\n\r\n<p><img alt="" src="http://i916.photobucket.com/albums/ad9/quanghaitrieu/15_zps82e429ad.jpg" /></p>\r\n\r\n<p>2. Nhấn giữ n&uacute;t A khoảng 2 gi&acirc;y cho đến khi đồng hồ ph&aacute;t ra tiếng b&iacute;p. Việc n&agrave;y sẽ dẫn đến kim đồng hồ nhỏ b&ecirc;n phải (6) chuyển đổi giữa DST (giờ m&ugrave;a h&egrave;) v&agrave; STD (giờ chuẩn)</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Ch&uacute; &yacute; rằng bạn kh&ocirc;ng thể chuyển giữa STD/DST trong khi UTC (giờ phối hợp quốc tế) được chọn.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Ch&uacute; &yacute; rằng c&agrave;i đặt STD/DST chỉ ảnh hưởng đến m&uacute;i giờ được chọn hiện tại. c&aacute;c m&uacute;i giờ kh&aacute;c kh&ocirc;ng bị ảnh &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;hưởng.</p>\r\n\r\n<p><strong>Thay đổi th&agrave;nh phố địa phương với th&agrave;nh phố tr&ecirc;n thế giới</strong></p>\r\n\r\n<p>Bạn c&oacute; thể sử dụng c&aacute;c thao t&aacute;c dưới đ&acirc;y để đổi giờ địa phương v&agrave; giờ quốc tế. Việc n&agrave;y tạo tiện &iacute;ch khi bạn đi du dịch giữa 2 địa điểm c&oacute; 2 m&uacute;i giờ kh&aacute;c nhau.</p>\r\n\r\n<p>V&iacute; dụ dưới đ&acirc;y cho thấy những hiển thị sau khi giờ địa phương v&agrave; giờ quốc tế được đổi trong khi th&agrave;nh phố địa phương l&agrave; TYO (Tokyo) v&agrave; th&agrave;nh phố tr&ecirc;n thế giới l&agrave; NYC (New York)</p>\r\n\r\n<p><img alt="" src="http://i916.photobucket.com/albums/ad9/quanghaitrieu/16_zps1ba561e1.jpg" style="width:660px" /></p>\r\n\r\n<p><strong>Thay đổi th&agrave;nh phố địa phương với th&agrave;nh phố tr&ecirc;n thế giới</strong></p>\r\n\r\n<p>1. Ở chế độ giờ quốc tế, d&ugrave;ng n&uacute;t D để chọn th&agrave;nh phố tr&ecirc;n thế giới m&agrave; bạn muốn chọn</p>\r\n\r\n<p>Trong v&iacute; dụ n&agrave;y, bạn muốn chuyển kim gi&acirc;y (2) đến NYC để chọn New York l&agrave;m th&agrave;nh phố tr&ecirc;n thế giới.</p>\r\n\r\n<p>Đợi cho đến khi c&aacute;c kim đồng hồ nhỏ b&ecirc;n tr&aacute;i (5) di chuyển đến giờ của th&agrave;nh phố tr&ecirc;n thế giới được chọn. Bạn sẽ kh&ocirc;ng thể thực hiện bước 2 của qu&aacute; tr&igrave;nh n&agrave;y cho đến khi c&aacute;c kim dừng hẳn.</p>\r\n\r\n<p>2. Nhấn n&uacute;t B khoảng 3 gi&acirc;y cho đến khi đồng hồ ph&aacute;t ra tiếng b&iacute;p.</p>\r\n\r\n<p>Việc n&agrave;y l&agrave;m cho th&agrave;nh phố tr&ecirc;n thế giới trở th&agrave;nh th&agrave;nh phố địa phương mới của bạn. l&uacute;c n&agrave;y, n&oacute; sẽ đổi th&agrave;nh phố địa phương trước đ&oacute; của bạn th&agrave;nh th&agrave;nh phố mới tr&ecirc;n thế giới.</p>\r\n\r\n<p>Sau khi chuyển đổi giữa th&agrave;nh phố địa phương với th&agrave;nh phố tr&ecirc;n thế giới, đồng hồ vẫn sẽ ở chế độ giờ quốc tế. Kim gi&acirc;y (2) sẽ chỉ th&agrave;nh phố tr&ecirc;n quốc tế mới l&uacute;c n&agrave;y.</p>\r\n\r\n<p>C&aacute;c kim đồng hồ nhỏ b&ecirc;n tr&aacute;i (5) sẽ chỉ giờ hiện tại của th&agrave;nh phố quốc tế mới đ&oacute;.</p>\r\n\r\n<p><strong>B&aacute;o thức</strong></p>\r\n\r\n<p><img alt="" src="http://i916.photobucket.com/albums/ad9/quanghaitrieu/17_zps1c2bdd38.jpg" /></p>\r\n\r\n<p>Khi b&aacute;o thức được bật, &acirc;m b&aacute;o thức sẽ ph&aacute;t ra khoảng 10 gi&acirc;y mỗi ng&agrave;y khi thời gian ở chế độ giờ hiện h&agrave;nh đạt đến giờ b&aacute;o thức được c&agrave;i đặt. Việc n&agrave;y lu&ocirc;n đ&uacute;ng, ngay cả khi đồng hồ kh&ocirc;ng ở chế độ giờ hiện h&agrave;nh.</p>\r\n\r\n<p><strong>C&aacute;c chức năng của kim:</strong></p>\r\n\r\n<p>(2) Kim gi&acirc;y: Cho biết c&agrave;i đặt b&aacute;o thức hiện tại bật/tắt</p>\r\n\r\n<p>(5) C&aacute;c kim đồng hồ nhỏ b&ecirc;n tr&aacute;i: Cho biết c&agrave;i đặt giờ b&aacute;o thức hiện tại theo định dạng 24h</p>\r\n\r\n<p>(6) Kim đồng hồ nhỏ b&ecirc;n phải: Chỉ đến chữ&nbsp;<strong>ALM</strong>.</p>\r\n\r\n<p><strong>Thay đổi c&agrave;i đặt giờ b&aacute;o thức</strong></p>\r\n\r\n<p>1. D&ugrave;ng n&uacute;t C để di chuyển kim đồng hồ nhỏ b&ecirc;n phải về chữ ALM</p>\r\n\r\n<p>2. D&ugrave;ng n&uacute;t D (+) v&agrave; B (-) để thay đổi c&agrave;i đặt giờ b&aacute;o thức.</p>\r\n\r\n<p>Mỗi lần nhấn n&uacute;t, c&aacute;c kim đồng hồ nhỏ b&ecirc;n tr&aacute;i (5) sẽ di chuyển 1 ph&uacute;t.</p>\r\n\r\n<p>Nhấn giữ n&uacute;t D hoặc B để kim di chuyển với tốc độ nhanh hơn. Để ngưng việc kim di chuyển tốc độ nhanh, nhấn bất kỳ n&uacute;t n&agrave;o.</p>\r\n\r\n<p>B&aacute;o thức lu&ocirc;n lu&ocirc;n hoạt động dựa theo thời gian đ&uacute;ng theo chế độ giờ hiện h&agrave;nh.</p>\r\n\r\n<p>Đồng hồ sẽ tự động chuyển về chế độ giờ hiện h&agrave;nh nếu bạn kh&ocirc;ng thực hiện bất kỳ thao t&aacute;c n&agrave;o ở chế độ b&aacute;o thức khoảng 2-3 ph&uacute;t.</p>\r\n\r\n<p><strong>Bật hoặc tắt b&aacute;o thức:</strong></p>\r\n\r\n<p>Ở chế độ b&aacute;o thức, nhấn n&uacute;t A để chuyển giữa bật v&agrave; tắt b&aacute;o thức. Kim gi&acirc;y (2) sẽ cho biết c&agrave;i đặt hiện tại l&agrave; Bật/Tắt</p>\r\n\r\n<p><strong>Ngưng b&aacute;o thức:</strong></p>\r\n\r\n<p>Nhấn bất kỳ n&uacute;t n&agrave;o.</p>\r\n\r\n<p><strong>Điều chỉnh vị tr&iacute;:</strong></p>\r\n\r\n<p>Từ t&iacute;nh hoặc c&aacute;c va chạm mạnh c&oacute; thể dẫn đến việc c&aacute;c kim v&agrave;/hoặc ng&agrave;y của đồng hồ bị sai vị tr&iacute;. Nếu việc n&agrave;y xảy ra, thực hiện c&aacute;c bước điều chỉnh như phần n&agrave;y.</p>\r\n\r\n<p><strong>Ch&uacute; &yacute;:</strong></p>\r\n\r\n<p>Sau mỗi lần bạn v&agrave;o chế độ điều chỉnh vị tr&iacute; như bước 1 của hướng dẫn dưới, bạn c&oacute; thể quay lại chế độ giờ hiện h&agrave;nh bằng việc nhấn n&uacute;t A. Đồng hồ cũng sẽ tự động quay lại chế độ giờ hiện h&agrave;nh nếu bạn kh&ocirc;ng thực hiện bất kỳ thao t&aacute;c n&agrave;o trong khoảng 2-3 ph&uacute;t ở chế độ điều chỉnh vị tr&iacute;. Trong c&aacute;c trường hợp n&agrave;y, bất kỳ sự điều chỉnh n&agrave;o bạn đ&atilde; thực hiện trước khi đồng hồ quay về chế độ giờ hiện h&agrave;nh cũng sẽ được &aacute;p dụng.</p>\r\n\r\n<p><strong>Điều chỉnh vị tr&iacute;:</strong></p>\r\n\r\n<p>1. Nhấn giữ n&uacute;t C khoảng 2 gi&acirc;y cho đến khi đồng hồ ph&aacute;t ra tiếng b&iacute;p 2 lần v&agrave; v&agrave;o chế độ giờ hiện h&agrave;nh</p>\r\n\r\n<p>2. Nhấn giữ n&uacute;t D khoảng 3 gi&acirc;y cho đến khi đồng hồ ph&aacute;t ra tiếng b&iacute;p.</p>\r\n\r\n<p><img alt="" src="http://i916.photobucket.com/albums/ad9/quanghaitrieu/18_zps8a545507.jpg" /></p>\r\n\r\n<p>Đồng hồ l&uacute;c n&agrave;y đang ở chế độ điều chỉnh vị tr&iacute;</p>\r\n\r\n<p>Đồng hồ sẽ tự động tho&aacute;t khỏi chế độ n&agrave;y nếu bạn kh&ocirc;ng thực hiện bất kỳ thao t&aacute;c n&agrave;o trong v&ograve;ng 2 đến 3 ph&uacute;t</p>\r\n\r\n<p>Đầu ti&ecirc;n l&agrave; điều chỉnh vị tr&iacute; kim gi&acirc;y (2)</p>\r\n\r\n<p>Nếu kim gi&acirc;y (2) di chuyển đến vị tr&iacute; 12h, đ&acirc;y l&agrave; vị tr&iacute; đ&uacute;ng. Nếu kh&ocirc;ng, d&ugrave;ng n&uacute;t D để chuyển n&oacute; đến vị tr&iacute; 12h.</p>\r\n\r\n<p>Mỗi lần nhấn n&uacute;t C ở chế độ điều chỉnh vị tr&iacute; n&agrave;y, c&aacute;c c&agrave;i đặt sẽ hiển thị xoay v&ograve;ng như h&igrave;nh ở dưới.</p>\r\n\r\n<p><img alt="" src="http://i916.photobucket.com/albums/ad9/quanghaitrieu/19_zpsb9121082.jpg" /></p>\r\n\r\n<p>3. Sau khi x&aacute;c nhận kim gi&acirc;y (2) đ&atilde; ở đ&uacute;ng vị tr&iacute;, nhấn n&uacute;t C. Việc n&agrave;y sẽ chuyển đến việc điều chỉnh vị tr&iacute; kim giờ (1) v&agrave; kim ph&uacute;t (3)</p>\r\n\r\n<p>Kim giờ (1) v&agrave; kim ph&uacute;t (1) ở đ&uacute;ng vị tr&iacute; nếu cả 2 đều chuyển về vị tr&iacute; 12h. Kim 24h (4) cũng sẽ di chuyển c&ugrave;ng với kim giờ (1), v&agrave; kh&ocirc;ng thể điều chỉnh từng c&aacute;i một. nếu c&aacute;c kim ở vị tr&iacute; kh&ocirc;ng đ&uacute;ng, d&ugrave;ng n&uacute;t D(+) v&agrave; n&uacute;t B(-) để di chuyển ch&uacute;ng về đ&uacute;ng vị tr&iacute;.</p>\r\n\r\n<p><img alt="" src="http://i916.photobucket.com/albums/ad9/quanghaitrieu/20_zpscd584290.jpg" /></p>\r\n\r\n<p>4. Sau khi x&aacute;c nhận l&agrave; kim giờ (1) v&agrave; kim ph&uacute;t (3) về đ&uacute;ng vị tr&iacute;, nhấn n&uacute;t C. Đồng hồ sẽ chuyển sang điều chỉnh vị tr&iacute; c&aacute;c kim của đồng hồ nhỏ b&ecirc;n tr&aacute;i (5)</p>\r\n\r\n<p>C&aacute;c kim của đồng hồ nhỏ b&ecirc;n tr&aacute;i về đ&uacute;ng vị tr&iacute; nếu ch&uacute;ng về điểm 12h. Nếu kh&ocirc;ng đ&uacute;ng, d&ugrave;ng n&uacute;t D(+) v&agrave; n&uacute;t B(-) để di chuyển ch&uacute;ng về 12h.</p>\r\n\r\n<p><img alt="" src="http://i916.photobucket.com/albums/ad9/quanghaitrieu/21_zpsdab32fec.jpg" /></p>\r\n\r\n<p>5. Sau khi x&aacute;c nhận l&agrave; c&aacute;c kim đồng hồ nhỏ b&ecirc;n tr&aacute;i (5) đ&atilde; đ&uacute;ng vị tr&iacute;, nhấn n&uacute;t C. Đồng hồ sẽ chuyển sang điều chỉnh kim đồng hồ nhỏ b&ecirc;n phải (6)</p>\r\n\r\n<p>Kim đồng hồ nhỏ b&ecirc;n phải về đ&uacute;ng vị tr&iacute; nếu n&oacute; chỉ điểm 12h. Nếu kh&ocirc;ng, nhấn D(+) v&agrave; B(-) để di chuyển n&oacute; về 12h.</p>\r\n\r\n<p>6. Sau khi x&aacute;c nhận l&agrave; kim đồng hồ nhỏ b&ecirc;n phải (6) đ&atilde; đ&uacute;ng vị tr&iacute;, nhấn n&uacute;t C. Đồng hồ sẽ chuyển đến điều chỉnh ng&agrave;y.</p>\r\n\r\n<p>Ng&agrave;y (7) sẽ về đ&uacute;ng vị tr&iacute; nếu n&oacute; chỉ số 1. Nếu kh&ocirc;ng, nhấn D(+) hoặc B(-) để đổi ng&agrave;y về số 1.</p>\r\n\r\n<p>7. Nhấn n&uacute;t A để quay về chế độ giờ hiện h&agrave;nh.</p>\r\n\r\n<p>Ng&agrave;y (7) sẽ di chuyển đến ng&agrave;y hiện tại, v&agrave; sau đ&oacute;, kim giờ (1) v&agrave; kim ph&uacute;t (3) sẽ chuyển đến giờ hiện tại. Đợi cho đến khi c&aacute;c kim ngừng quay hẳn.</p>\r\n\r\n<p>[B]&nbsp;<a href="https://dongho24h.com/casio-g-shock-nam-touch-solar-gw-a1000d-1adr.html">Module No. 5240-GW-A1000</a></p>\r\n\r\n<p>Giờ hiện h&agrave;nh được điều khiển bởi s&oacute;ng v&ocirc; tuyến</p>\r\n\r\n<p>Đồng hồ n&agrave;y nhận t&iacute;n hiệu hiệu chỉnh thời gian v&agrave; cập nhật c&aacute;c c&agrave;i đặt giờ hiện h&agrave;nh. Tuy nhi&ecirc;n, khi sử dụng đồng hồ b&ecirc;n ngo&agrave;i khu vực được bao phủ bởi c&aacute;c t&iacute;n hiệu hiệu chỉnh n&agrave;y, bạn sẽ phải tự điều chỉnh c&aacute;c c&agrave;i đặt bằng tay. Xem mục &ldquo;điều chỉnh c&agrave;i đặt thời gian v&agrave; ng&agrave;y hiện h&agrave;nh bằng tay&rdquo; để biết th&ecirc;m chi tiết.</p>\r\n\r\n<p>Phần n&agrave;y giải th&iacute;ch c&aacute;ch m&agrave; đồng hồ cập nhật c&aacute;c c&agrave;i đặt thời gian khi m&atilde; th&agrave;nh phố được chọn l&agrave;m th&agrave;nh phố địa phương nằm trong Nhật bản, Bắc Mỹ, Ch&acirc;u &Acirc;u, hoặc Trung Quốc v&agrave; hỗ trợ việc nhận c&aacute;c t&iacute;n hiệu hiệu chỉnh thời gian.</p>\r\n\r\n<table border="1" cellpadding="0" cellspacing="0">\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>Nếu c&agrave;i đặt m&atilde; th&agrave;nh phố l&agrave;:</strong></td>\r\n			<td><strong>Đồng hồ sẽ nhận t&iacute;n hiệu từ c&aacute;c trạm ph&aacute;t được đặt tại:</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>LON (LONDON), PAR (PARIS), ATH (ATHENS)</td>\r\n			<td>Anthorn (Anh), Mainflingen (Đức)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>HKG (HONG KONG)</td>\r\n			<td>Th&agrave;nh phố Thương Kh&acirc;u (Trung Quốc)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>TYO (TOKYO)</td>\r\n			<td>Fukushima (Nhật Bản), Fukuoka/Saga (Nhật Bản)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>HNL (HONOLULU), ANC (ANCHORAGE), LAX (LOS ANGELES), DEN (DENVER), CHI (CHICAGO), NYC (NEW YORK)</td>\r\n			<td>Fort Collins, Colorado (Mỹ)</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Việc tiếp nhận t&iacute;n hiệu sẽ kh&ocirc;ng thể thực hiện được ở khoảng c&aacute;ch được ghi ch&uacute; b&ecirc;n dưới v&agrave;o một số năm hoặc ng&agrave;y nhất định. Sự giao thoa s&oacute;ng &acirc;m c&oacute; thể dẫn đến c&aacute;c vấn đề cho việc tiếp nhận.<br />\r\n	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &ndash; C&aacute;c trạm ở Mainflinger (Đức) hoặc Anthorn (Anh): 500 km (310 dặm)&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &ndash; Trạm Fort Collins (Mỹ): 600 dặm (1000 km)\r\n	<p>&nbsp;</p>\r\n\r\n	<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&ndash; C&aacute;c trạm Fukushima hoặc Fukuoka/Saga (Nhật Bản): 500 km (310 dặm)</p>\r\n\r\n	<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&ndash; Thương Kh&acirc;u (Trung Quốc): 500 km (310 dặm)</p>\r\n	</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>V&agrave;o th&aacute;ng 12/2010, Trung Quốc kh&ocirc;ng sử dụng giờ m&ugrave;a h&egrave; (DST). Nếu Trung Quốc kh&ocirc;ng sử dụng hệ thống giờ m&ugrave;a h&egrave; trong tương lai, một số chức năng của đồng hồ sẽ kh&ocirc;ng thể hoạt động ch&iacute;nh x&aacute;c.</li>\r\n</ul>\r\n\r\n<p>Sẵn s&agrave;ng cho việc tiếp nhận t&iacute;n hiệu&rdquo;</p>\r\n\r\n<ol>\r\n	<li>X&aacute;c nhận rằng đồng hồ đang ở chế độ giờ hiện h&agrave;nh. Nếu kh&ocirc;ng, nhấn n&uacute;t C &iacute;t nhất 2 gi&acirc;y để v&agrave;o chế độ giờ hiện h&agrave;nh.<img alt="" src="http://i846.photobucket.com/albums/ab25/tyhaitrieu/1_zpsf4285c3e.png" style="width:283px" /></li>\r\n	<li>Đặt đồng hồ tại một vị tr&iacute; c&oacute; việc tiếp nhận t&iacute;n hiệu tốt nhất.</li>\r\n</ol>\r\n\r\n<ul>\r\n	<li>Định vị đồng hồ như h&igrave;nh minh họa, với điểm 12h được hướng về ph&iacute;a trước cửa số. Đảm bảo l&agrave; gần đ&oacute; kh&ocirc;ng c&oacute; một vật thể kim loại n&agrave;o.</li>\r\n	<li>Việc nhận t&iacute;n hiệu b&igrave;nh thường sẽ tốt hơn v&agrave;o ban đ&ecirc;m</li>\r\n	<li>Thao t&aacute;c tiếp nhận mất khoảng 2 đến 7 ph&uacute;t, trong một số trường hợp c&oacute; thể l&agrave; 14 ph&uacute;t. Chắc chắn rằng bạn kh&ocirc;ng thao t&aacute;c bất kỳ n&uacute;t n&agrave;o hoặc di chuyển đồng hồ trong khoảng thời gian n&agrave;y.</li>\r\n	<li>Việc tiếp nhận t&iacute;n hiệu c&oacute; thể kh&oacute; hoặc th&acirc;m ch&iacute; kh&ocirc;ng thể thực hiện được dưới 1 số điều kiện được mi&ecirc;u tả b&ecirc;n dưới:</li>\r\n</ul>\r\n\r\n<p><img alt="" src="http://i846.photobucket.com/albums/ab25/tyhaitrieu/2_zpsd6ac7df7.png" style="width:681px" /></p>\r\n\r\n<ol>\r\n	<li>Việc bạn cần l&agrave;m tiếp theo lệ thuộc v&agrave;o việc bạn chọn tiếp nhận tự động hay tiếp nhận bằng tay</li>\r\n</ol>\r\n\r\n<ul>\r\n	<li>Tiếp nhận tự động: để đồng hồ qua đ&ecirc;m ở vị tr&iacute; bạn chọn ở bước số 2. Xem &ldquo;tiếp nhận tự động&rdquo; để biết th&ecirc;m chi tiết.</li>\r\n	<li>Tiếp nhận thủ c&ocirc;ng: thực hiện c&aacute;c bước dưới phần &ldquo;thực hiện việc tiếp nhận thủ c&ocirc;ng&rsquo;&rsquo;</li>\r\n</ul>\r\n\r\n<p>Tiếp nhận tự động:</p>\r\n\r\n<ul>\r\n	<li>Với việc tiếp nhận tự động, đồng hồ thực hiện c&aacute;c thao t&aacute;c nhận tự động v&agrave;o mỗi ng&agrave;y l&ecirc;n tới 6 lần (5 lần cho t&iacute;n hiệu hiệu chỉnh của Trung Quốc) giữa c&aacute;c giờ từ nửa đ&ecirc;m tới 5h s&aacute;ng (theo giờ hiện h&agrave;nh). Khi c&aacute;c thao t&aacute;c tiếp nhận đ&atilde; th&agrave;nh c&ocirc;ng, c&aacute;c thao t&aacute;c tiếp nhận kh&aacute;c trong ng&agrave;y sẽ kh&ocirc;ng được thực hiện.</li>\r\n	<li>Khi một thời gian hiệu chỉnh đ&atilde; đạt được, đồng hồ sẽ chỉ thực hiện việc tiếp nhận nếu n&oacute; đang ở chế độ giờ hiện h&agrave;nh. Thao t&aacute;c tiếp nhận kh&ocirc;ng được thực hiện nếu một thời gian hiệu chỉnh đạt được khi bạn đang định h&igrave;nh c&aacute;c c&agrave;i đặt.</li>\r\n</ul>\r\n\r\n<p>Tiếp nhận thủ c&ocirc;ng:</p>\r\n\r\n<ol>\r\n	<li>Ở chế độ giờ hiện hanh, nhấn giữ n&uacute;t B khoảng 2s để kim gi&acirc;y di chuyển như tr&igrave;nh tự sau đ&acirc;y</li>\r\n</ol>\r\n\r\n<ul>\r\n	<li>Dịch chuyển đến Y (YES) hoặc N (NO) để chỉ kết quả tiếp nhận t&iacute;n hiệu mới nhất, sau đ&oacute; đến R (READY)</li>\r\n	<li>Kim gi&acirc;y 2 chỉ c&aacute;c hoạt động của đồng hồ đang được thực hiện tại l&uacute;c đ&oacute;.</li>\r\n	<li><img alt="" src="http://i846.photobucket.com/albums/ab25/tyhaitrieu/3_zpsc5dd6eae.png" style="width:188px" /></li>\r\n</ul>\r\n\r\n<table border="1" cellpadding="0" cellspacing="0">\r\n	<tbody>\r\n		<tr>\r\n			<td>Khi kim gi&acirc;y 2 chỉ:</td>\r\n			<td>C&oacute; nghĩa l&agrave;:</td>\r\n		</tr>\r\n		<tr>\r\n			<td>R (READY)</td>\r\n			<td>Đồng hồ đang bắt đầu tiếp nhận</td>\r\n		</tr>\r\n		<tr>\r\n			<td>W (WORK)</td>\r\n			<td>Đang tiếp nhận</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<ul>\r\n	<li>Nếu việc tiếp nhận t&iacute;n hiệu kh&ocirc;ng ổn định, kim gi&acirc;y 2 c&oacute; thể di chuyển giữa W (WORK) v&agrave; R (READY)</li>\r\n	<li>Khi việc tiếp nhận đ&atilde; th&agrave;nh c&ocirc;ng, đồng hồ sẽ điều chỉnh c&agrave;i đặt thời gian, v&agrave; sau đ&oacute; tiếp tục lại giờ hiện h&agrave;nh th&ocirc;ng thường. c&agrave;i đặt sẽ kh&ocirc;ng được điều chỉnh nếu thao t&aacute;c bị sai.</li>\r\n</ul>\r\n\r\n<p>Ch&uacute; &yacute;:</p>\r\n\r\n<p>Để ngưng việc tiếp nhận v&agrave; quay về chế độ giờ hiện h&agrave;nh, nhấn bất kỳ n&uacute;t n&agrave;o.</p>\r\n\r\n<p>Để kiểm tra kết quả của lần tiếp nhận gần nhất.</p>\r\n\r\n<p>Ở chế độ giờ hiện h&agrave;nh, nhấn n&uacute;t B. Kim gi&acirc;y 2 sẽ chuyển đến Y (YES) hoặc N (NO) để chỉ kết quả tiếp nhận t&iacute;n hiệu hiệu chỉnh cuối c&ugrave;ng.</p>\r\n\r\n<ul>\r\n	<li>Kim gi&acirc;y 2 sẽ dịch chuyển đến Y (YES) nếu thao t&aacute;c tiếp nhận mới nhất th&agrave;nh c&ocirc;ng, hoặc N (NO) nếu kh&ocirc;ng. Sau khoảng 10s, giờ hiện h&agrave;nh th&ocirc;ng thường sẽ được tiếp tục</li>\r\n	<li>Nhấn n&uacute;t B để quay lại giờ hiện h&agrave;nh th&ocirc;ng thường. đồng hồ sẽ quay lại giờ hiện h&agrave;nh th&ocirc;ng thường nếu bạn kh&ocirc;ng thực hiện bất kỳ thao t&aacute;c n&agrave;o trong v&ograve;ng 10s.</li>\r\n</ul>\r\n\r\n<p>Ch&uacute; &yacute;:</p>\r\n\r\n<ul>\r\n	<li>Kim gi&acirc;y 2 sẽ chỉ N (NO) nếu bạn vừa điều chỉnh bằng tay c&aacute;c c&agrave;i đặt thời gian hoặc ng&agrave;y kể từ lần nhận t&iacute;n hiệu gần nhất.</li>\r\n</ul>\r\n\r\n<p>Bật/tắt chế độ tự động nhận t&iacute;n hiệu:</p>\r\n\r\n<ol>\r\n	<li>Ở chế độ giờ hiện h&agrave;nh, nhấn n&uacute;t B. Kim gi&acirc;y 2 sẽ di chuyển đến Y (YES) hoặc N (NO) để cho biết kết quả nhận t&iacute;n hiệu hiệu chỉnh cuối c&ugrave;ng.</li>\r\n	<li>K&eacute;o n&uacute;t vặn ra</li>\r\n</ol>\r\n\r\n<p>Kim gi&acirc;y 2 sẽ quay đủ 1 v&ograve;ng v&agrave; dừng lại tại c&agrave;i đặt bật/tắt hiện tại</p>\r\n\r\n<ol>\r\n	<li>Quay n&uacute;t vặn để di chuyển kim gi&acirc;y 2 đến c&agrave;i đặt m&agrave; bạn muốn</li>\r\n</ol>\r\n\r\n<ul>\r\n	<li>Để bật chế độ tiếp nhận tự động, chọn Y (YES)</li>\r\n	<li>Để tắt chế độ tiếp nhận tự động, chọn N (NO)</li>\r\n</ul>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; 4. &nbsp; Nhấn n&uacute;t vặn trở lại để quay về chế độ giờ hiện h&agrave;nh.</p>\r\n\r\n<p>Chọn chế độ:</p>\r\n\r\n<p>Với chiếc đồng hồ n&agrave;y, mọi thứ sẽ bắt đầu từ chế độ giờ hiện hanh</p>\r\n\r\n<p>Để x&aacute;c định chế độ hiện tại của đồng hồ:</p>\r\n\r\n<p>Kiểm tra xem kim của đĩa quay b&ecirc;n dưới c&oacute; đang chỉ giống như được hiển thị dưới phần &ldquo;để chọn chế độ&rdquo;</p>\r\n\r\n<p>Để quay lại chế độ giờ hiện h&agrave;nh từ bất kỳ một chế độ n&agrave;o kh&aacute;c</p>\r\n\r\n<p>Nhấn n&uacute;t C khoảng &iacute;t nhất 2s</p>\r\n\r\n<p>Để chọn chế độ:</p>\r\n\r\n<p>Mỗi lần nhấn n&uacute;t C, sẽ l&agrave;m xoay v&ograve;ng giữa c&aacute;c chế độ. Chế độ được chọn hiện tại sẽ được kim của đĩa quay ph&iacute;a dưới chỉ:</p>\r\n\r\n<p><img alt="" src="http://i846.photobucket.com/albums/ab25/tyhaitrieu/4_zps2c84e57c.png" style="width:766px" /></p>\r\n\r\n<p><strong>Chỉnh c&agrave;i đặt th&agrave;nh phố địa phương</strong></p>\r\n\r\n<ol>\r\n	<li>K&eacute;o n&uacute;t vặn ra</li>\r\n</ol>\r\n\r\n<ul>\r\n	<li>&eth;&nbsp; Kim gi&acirc;y sẽ dịch chuyển đến m&atilde; th&agrave;nh phố địa phương được chọn</li>\r\n</ul>\r\n\r\n<p>Đ&acirc;y l&agrave; c&agrave;i đặt m&atilde; th&agrave;nh phố.</p>\r\n\r\n<ol>\r\n	<li>Xoay n&uacute;t vặn để dịch chuyển kim gi&acirc;y đến m&atilde; th&agrave;nh phố muốn chọn</li>\r\n	<li>Nhấn n&uacute;t vặn trở lại để quay về chế độ giờ hiện h&agrave;nh</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Chuyển đổi giữa giờ chuẩn/ giờ m&ugrave;a h&egrave;</p>\r\n\r\n<ol>\r\n	<li>Chọn m&atilde; th&agrave;nh phố như bước ở tr&ecirc;n, việc hiển thị m&agrave;n h&igrave;nh c&agrave;i đặt th&agrave;nh phố địa phương sẽ l&agrave;m cho kim đĩa quay b&ecirc;n dưới dịch chuyển sang chữ AT (tự động chuyển), STD (giờ chuẩn) hoặc DST (giờ m&ugrave;a h&egrave;)</li>\r\n	<li>Nhấn n&uacute;t A khoảng 1 gi&acirc;y để xoay v&ograve;ng giữa c&aacute;c lựa chọn AT &ndash; STD &ndash; DST</li>\r\n	<li>Nhấn n&uacute;t vặn v&agrave;o lại vị tr&iacute; cũ</li>\r\n</ol>\r\n\r\n<p><strong>C&agrave;i đặt ng&agrave;y giờ:</strong></p>\r\n\r\n<p>Thay đổi c&agrave;i đặt ng&agrave;y giờ:</p>\r\n\r\n<p>1. K&eacute;o n&uacute;t vặn ra, kim gi&acirc;y dịch chuyển đến m&atilde; th&agrave;nh phố được chọn</p>\r\n\r\n<p>2. Thay đổi c&agrave;i đặt th&agrave;nh phố địa phương (như c&aacute;c bước ở tr&ecirc;n).</p>\r\n\r\n<p>3. Nhấn n&uacute;t C khoảng 1 gi&acirc;y cho đến khi đồng hồ ph&aacute;t ra tiếng b&iacute;p v&agrave; kim gi&acirc;y dịch chuyển đến vị tr&iacute; 12h</p>\r\n\r\n<p>&nbsp;Nhấn n&uacute;t C để xoay v&ograve;ng giữa c&aacute;c c&agrave;i đặt:</p>\r\n\r\n<p>Th&agrave;nh phố địa phương/DST -&gt; giờ/ph&uacute;t -&gt; giờ -&gt; ng&agrave;y-&gt; th&aacute;ng -&gt; năm -&gt; giờ/ph&uacute;t</p>\r\n\r\n<ol>\r\n	<li>Quay n&uacute;t vặn để điều chỉnh c&agrave;i đặt giờ (giờ v&agrave; ph&uacute;t)</li>\r\n</ol>\r\n\r\n<p>(Ch&uacute; &yacute; xem kim đĩa quay ph&iacute;a tr&ecirc;n c&oacute; chỉ đ&uacute;ng dấu hiệu am,pm hay chưa)</p>\r\n\r\n<p>Nhấn n&uacute;t C v&agrave; cũng l&agrave;m c&aacute;c thao t&aacute;c như tr&ecirc;n để thay đổi c&agrave;i đặt ng&agrave;y.</p>\r\n\r\n<ol>\r\n	<li>Nhấn n&uacute;t vặn về lại vị tr&iacute; cũ.</li>\r\n</ol>\r\n\r\n<p><strong>Thay đổi c&agrave;i đặt ng&agrave;y:</strong></p>\r\n\r\n<ol>\r\n	<li>K&eacute;o n&uacute;t vặn ra</li>\r\n	<li>Nhấn C khoảng 1 gi&acirc;y cho đến khi đồng hồ ph&aacute;t ra tiếng b&iacute;p</li>\r\n	<li>Nhấn n&uacute;t C 2 lần</li>\r\n</ol>\r\n\r\n<ul>\r\n	<li>Kim chỉ ng&agrave;y sẽ dịch chuyển từ từ.</li>\r\n</ul>\r\n\r\n<ol>\r\n	<li>Xoay n&uacute;t vặn để thay đổi c&agrave;i đặt ng&agrave;y</li>\r\n	<li>Sau khi kim chỉ ng&agrave;y ngưng di chuyển, nhấn C để c&agrave;i đặt th&aacute;ng</li>\r\n</ol>\r\n\r\n<ul>\r\n	<li>Kim gi&acirc;y sẽ dịch chuyển đến c&agrave;i đặt th&aacute;ng</li>\r\n</ul>\r\n\r\n<ol>\r\n	<li>Quay n&uacute;t vặn để điều chỉnh th&aacute;ng</li>\r\n	<li>Nhấn C để c&agrave;i đặt năm</li>\r\n</ol>\r\n\r\n<ul>\r\n	<li>Kim giờ sẽ dịch chuyển đến số h&agrave;ng chục của năm, kim ph&uacute;t dịch chuyển đến số h&agrave;ng đơn vị. kim gi&acirc;y dịch chuyển đến vị tr&iacute; 12h v&agrave; dừng lại</li>\r\n</ul>\r\n\r\n<ol>\r\n	<li>Quay n&uacute;t vặn để chỉnh năm</li>\r\n	<li>Nhấn n&uacute;t vặn về vị tr&iacute; ban đầu.</li>\r\n</ol>\r\n\r\n<p><strong>&nbsp;Đo nhiệt độ:</strong></p>\r\n\r\n<p>Chiếc đồng hồ n&agrave;y sử dụng một bộ cảm biến nhiệt độ để lấy kết quả đo nhiệt độ.</p>\r\n\r\n<ul>\r\n	<li>Bạn c&oacute; thể chọn&nbsp;oC hoặc&nbsp;oF l&agrave;m đơn vị đo lường</li>\r\n</ul>\r\n\r\n<p><em>(chuyển đổi giữa đơn vị&nbsp;oC hoặc&nbsp;oF như sau:</em></p>\r\n\r\n<ol>\r\n	<li><em>Trong khi kim đang chỉ một kết quả đo nhiệt độ, k&eacute;o n&uacute;t vặn ra</em></li>\r\n	<li><em>Nhấn n&uacute;t A khoảng 2 gi&acirc;y</em></li>\r\n</ol>\r\n\r\n<ul>\r\n	<li><em>Việc n&agrave;y sẽ l&agrave;m thay đổi đơn vị đo nhiệt độ giữa&nbsp;oC hoặc&nbsp;oF, l&agrave;m kim gi&acirc;y 2, kim giờ 1, kim ph&uacute;t 3 di chuyển</em></li>\r\n</ul>\r\n\r\n<ol>\r\n	<li><em>Đẩy n&uacute;t vặn v&agrave;o lại.)</em></li>\r\n</ol>\r\n\r\n<p><strong>C&aacute;c kim v&agrave; dấu hiệu:</strong></p>\r\n\r\n<p><strong>oC:</strong></p>\r\n\r\n<ol>\r\n	<li>Kim giờ: chỉ con số h&agrave;ng chục</li>\r\n	<li>Kim gi&acirc;y: chỉ nhiệt độ ở tr&ecirc;n +oC hoặc dưới &ndash;oC</li>\r\n	<li>Kim ph&uacute;t: chỉ con số h&agrave;ng đơn vị&nbsp;&nbsp;</li>\r\n	<li>Kim đĩa quay ph&iacute;a dưới: chỉ thứ trong tuần</li>\r\n</ol>\r\n\r\n<p><strong>oF:</strong></p>\r\n\r\n<ol>\r\n	<li>Kim giờ: chỉ con số h&agrave;ng trăm</li>\r\n	<li>Kim gi&acirc;y: chỉ con số h&agrave;ng đơn vị</li>\r\n	<li>Kim ph&uacute;t: chỉ con số h&agrave;ng chục</li>\r\n	<li>Kim đĩa quay ph&iacute;a dưới: chỉ thứ trong tuần</li>\r\n</ol>\r\n\r\n<p>Lấy kết quả đo nhiệt độ:</p>\r\n\r\n<ol>\r\n	<li>V&agrave;o chế độ giờ hiện h&agrave;nh</li>\r\n	<li>Nhấn n&uacute;t A</li>\r\n</ol>\r\n\r\n<ul>\r\n	<li>Đầu ti&ecirc;n kim gi&acirc;y v&agrave; sau đ&oacute; l&agrave; kim giờ v&agrave; kim ph&uacute;t sẽ di chuyển để chỉ kết quả đo nhiệt độ</li>\r\n	<li>Nhấn n&uacute;t A 1 lần nữa trong khi c&aacute;c kim đang chỉ nhiệt độ để lấy kết quả nhiệt độ kh&aacute;c</li>\r\n	<li>Để x&oacute;a thao t&aacute;c lấy kết quả đo nhiệt độ đang được thực hiện, nhấn B hoặc C</li>\r\n	<li>Khoảng 10 gi&acirc;y sau khi c&aacute;c kim di chuyển để chỉ kết quả đo nhiệt độ, c&aacute;c kim sẽ trở về lại giờ hiện h&agrave;nh một c&aacute;ch tự động.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>[C] Module No. 5132</strong></p>\r\n\r\n<p>C&aacute;c n&uacute;t thao t&aacute;c được chỉ bởi c&aacute;c chữ c&aacute;i A đến D, như h&igrave;nh minh họa b&ecirc;n dưới</p>\r\n\r\n<p><strong>C&aacute;c chức năng của kim</strong><img alt="" src="http://i846.photobucket.com/albums/ab25/tyhaitrieu/1_zps8fb7093c.png" /></p>\r\n\r\n<p>1: Kim giờ</p>\r\n\r\n<p>2: Kim gi&acirc;y</p>\r\n\r\n<p>3: Kim ph&uacute;t</p>\r\n\r\n<p>4: Kim đĩa quay b&ecirc;n tr&aacute;i: chỉ chế độ hiện tại</p>\r\n\r\n<p>5: Kim đĩa quay ph&iacute;a dưới</p>\r\n\r\n<p>6: Kim đĩa quay b&ecirc;n phải</p>\r\n\r\n<p>7: Ng&agrave;y.</p>\r\n\r\n<p><strong>Hướng dẫn sử dụng c&aacute;c chế độ:</strong></p>\r\n\r\n<p>Đồng hồ của bạn c&oacute; 4 chức năng. Chức năng m&agrave; bạn chọn phụ thuộc v&agrave;o việc bạn&nbsp;muốn l&agrave;m g&igrave;:</p>\r\n\r\n<table border="1" cellpadding="0" cellspacing="0">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n\r\n			<p><strong>Nhằm</strong></p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n\r\n			<p><strong>V&agrave;o chế độ</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<ul>\r\n				<li>Xem giờ hiện tại ở th&agrave;nh phố địa phương v&agrave; ở 1 trong 29 th&agrave;nh phố tr&ecirc;n to&agrave;n TG</li>\r\n				<li>C&agrave;i đặt th&agrave;nh phố địa phương v&agrave; giờ m&ugrave;a h&egrave; (DST)</li>\r\n				<li>C&agrave;i đặt ng&agrave;y v&agrave; giờ</li>\r\n			</ul>\r\n			</td>\r\n			<td>&nbsp;\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>Chế độ giờ hiện h&agrave;nh</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Sử dụng đồng hồ bấm giờ để đo thời gian tr&ocirc;i qua</td>\r\n			<td>Chế độ đồng hồ bấm giờ</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Xem giờ hiện tại ở 1 trong 29 th&agrave;nh phố (m&uacute;i giờ) tr&ecirc;n to&agrave;n TG</td>\r\n			<td>Chế độ giờ quốc tế</td>\r\n		</tr>\r\n		<tr>\r\n			<td>C&agrave;i giờ b&aacute;o thức</td>\r\n			<td>Chế độ b&aacute;o thức</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><strong>Chọn một chế độ:</strong></p>\r\n\r\n<p>Với chiếc đồng hồ n&agrave;y, mọi thứ bắt đầu với chế độ giờ hiện h&agrave;nh.</p>\r\n\r\n<p>Để x&aacute;c đinh chế độ hiện tại của đồng hồ, kiểm tra vị tr&iacute; của kim đĩa quay b&ecirc;n tr&aacute;i (4)</p>\r\n\r\n<p>Để quay lại chế độ giờ hiện h&agrave;nh từ bất kỳ chế độ n&agrave;o kh&aacute;c, nhấn giữ n&uacute;t C chừng 2 gi&acirc;y cho đến khi đồng hồ ph&aacute;t ra tiếng b&iacute;p 2 lần.</p>\r\n\r\n<p>Chọn chế độ:</p>\r\n\r\n<p>Nhấn n&uacute;t C để quay v&ograve;ng giữa c&aacute;c chế độ như h&igrave;nh minh họa b&ecirc;n dưới. Kim đĩa quay b&ecirc;n tr&aacute;i cho biết chế độ được chọn hiện tại.</p>\r\n\r\n<p><img alt="" src="http://i846.photobucket.com/albums/ab25/tyhaitrieu/2_zpsebe990f0.png" /></p>\r\n\r\n<p><strong>Giờ hiện h&agrave;nh:</strong></p>\r\n\r\n<p>Sử dụng chế độ giờ hiện h&agrave;nh để xem ng&agrave;y v&agrave; giờ hiện tại. để v&agrave;o chế độ giờ hiện h&agrave;nh từ bất kỳ c&aacute;c chế độ n&agrave;o kh&aacute;c, nhấn giữ n&uacute;t C chừng 2s.</p>\r\n\r\n<p><strong>C&aacute;c chức năng của kim:</strong><br />\r\n<img alt="" src="http://i846.photobucket.com/albums/ab25/tyhaitrieu/3_zps5de83c66.png" /></p>\r\n\r\n<ol>\r\n	<li>Kim giờ</li>\r\n	<li>Kim gi&acirc;y</li>\r\n	<li>Kim ph&uacute;t</li>\r\n	<li>Kim đĩa quay b&ecirc;n tr&aacute;i: chỉ thứ trong tuần</li>\r\n	<li>Kim đĩa quay ph&iacute;a dưới: chỉ giờ hiện tại của th&agrave;nh phố địa phương với kiểu hiển thị 24h</li>\r\n	<li>Kim đĩa quay b&ecirc;n phải: chỉ giờ hiện tại của một th&agrave;nh phố quốc tế n&agrave;o đ&oacute; với kiểu hiển thị 24h</li>\r\n	<li>Ng&agrave;y.</li>\r\n</ol>\r\n\r\n<p><strong>C&agrave;i đặt th&agrave;nh phố địa phương:</strong></p>\r\n\r\n<p>C&oacute; hai c&agrave;i đặt th&agrave;nh phố địa phương: chọn th&agrave;nh phố địa phương v&agrave; chọn giờ ti&ecirc;u chuẩn hoặc giờ m&ugrave;a h&egrave; (DST)</p>\r\n\r\n<p><strong>C&agrave;i đặt th&agrave;nh phố địa phương:</strong></p>\r\n\r\n<ol>\r\n	<li>ở chế độ giờ hiện h&agrave;nh, bấm giữ n&uacute;t A khoảng 5s cho đến khi kim gi&acirc;y 2 di chuyển đến m&atilde; th&agrave;nh phố của th&agrave;nh phố địa phương hiện tại được chọn</li>\r\n</ol>\r\n\r\n<ul>\r\n	<li>Đ&acirc;y l&agrave; m&agrave;n h&igrave;nh c&agrave;i đặt m&atilde; th&agrave;nh phố địa phương</li>\r\n</ul>\r\n\r\n<ol>\r\n	<li>Để thay đổi c&agrave;i đặt th&agrave;nh phố địa phương, nhấn n&uacute;t D để dịch chuyển kim gi&acirc;y 2 theo chiều kim đồng hồ.</li>\r\n</ol>\r\n\r\n<ul>\r\n	<li>Nhấn giữ n&uacute;t D cho đến khi kim gi&acirc;y 2 chỉ m&atilde; th&agrave;nh phố m&agrave; bạn muốn chọn l&agrave;m th&agrave;nh phố địa phương</li>\r\n	<li>Mỗi lần chọn m&atilde; th&agrave;nh phố, kim giờ, kim ph&uacute;t, kim đĩa quay ph&iacute;a dưới v&agrave; kim chỉ ng&agrave;y di chuyển đến ng&agrave;y v&agrave; giờ hiện tại cho m&atilde; th&agrave;nh phố đ&oacute;. Đừng thực hiện bất cứ thao t&aacute;c n&agrave;o trong khi c&aacute;c kim n&agrave;y đang di chuyển.</li>\r\n</ul>\r\n\r\n<ol>\r\n	<li>Nhấn n&uacute;t B để chuyển giữa giờ ti&ecirc;u chuẩn STD v&agrave; giờ m&ugrave;a h&egrave; DST</li>\r\n</ol>\r\n\r\n<ul>\r\n	<li>Ở chế độ c&agrave;i đặt m&atilde; th&agrave;nh phố, kim đĩa quay b&ecirc;n tr&aacute;i chỉ c&agrave;i đặt hiện tại bạn chọn l&agrave; giờ ti&ecirc;u chuẩn STD hay giờ m&ugrave;a h&egrave; DST</li>\r\n	<li>Ch&uacute; &yacute; rằng bạn kh&ocirc;ng thể chuyển giữa STD v&agrave; DST trong khi bạn đang chọn UTC (giờ phối hợp quốc tế)</li>\r\n</ul>\r\n\r\n<ol>\r\n	<li>Nhấn n&uacute;t A để quay lại chế độ giờ hiện h&agrave;nh</li>\r\n</ol>\r\n\r\n<p><strong><em>Để chuyển giữa giờ ti&ecirc;u chuẩn v&agrave; giờ m&ugrave;a h&egrave;:</em></strong></p>\r\n\r\n<ol>\r\n	<li>Thực hiện c&aacute;c bước như ở phần c&agrave;i đặt th&agrave;nh phố địa phương</li>\r\n</ol>\r\n\r\n<ul>\r\n	<li>Mỗi lần bạn chọn m&atilde; th&agrave;nh phố, kim giờ, kim ph&uacute;t v&agrave; kim đĩa quay ph&iacute;a dưới di chuyển đến giờ hiện tại cho m&atilde; th&agrave;nh phố đ&oacute;.</li>\r\n</ul>\r\n\r\n<ol>\r\n	<li>Nhấn n&uacute;t B để chuyển giữa giờ ti&ecirc;u chuẩn v&agrave; giờ m&ugrave;a h&egrave;</li>\r\n</ol>\r\n\r\n<ul>\r\n	<li>Ở chế độ c&agrave;i đặt m&atilde; th&agrave;nh phố, kim đĩa quay b&ecirc;n tr&aacute;i cho biết hiện tại bạn đang chọn giờ ti&ecirc;u chuẩn hay giờ m&ugrave;a h&egrave;.</li>\r\n</ul>\r\n\r\n<ol>\r\n	<li>Nhấn A để quay lại chế độ giờ hiện h&agrave;nh.</li>\r\n</ol>\r\n\r\n<p><strong>C&agrave;i đặt ng&agrave;y v&agrave; giờ hiện tại:</strong></p>\r\n\r\n<p><strong><em>Để thay đổi c&agrave;i đặt giờ hiện tại:</em></strong></p>\r\n\r\n<ol>\r\n	<li>ở chế độ giờ hiện h&agrave;nh, nhấn giữ n&uacute;t A khoảng 5s để kim gi&acirc;y di chuyển đến m&atilde; th&agrave;nh phố được chọn l&agrave;m th&agrave;nh phố địa phương hiện tại.</li>\r\n</ol>\r\n\r\n<ul>\r\n	<li>L&uacute;c n&agrave;y, kim đĩa quay b&ecirc;n tr&aacute;i sẽ cho biết c&agrave;i đặt giờ m&ugrave;a h&egrave; hiện tại l&agrave; STD hay DST</li>\r\n</ul>\r\n\r\n<ol>\r\n	<li>Thay đổi th&agrave;nh phố địa phương v&agrave; c&agrave;i đặt giờ m&ugrave;a h&egrave;, nếu muốn:</li>\r\n</ol>\r\n\r\n<ul>\r\n	<li>Xem bước 2 v&agrave; 3 ở phần c&agrave;i đặt th&agrave;nh phố địa phương</li>\r\n	<li>Ở c&aacute;c bước sau đ&acirc;y, nhấn C để xoay v&ograve;ng giữa c&aacute;c c&agrave;i đặt:</li>\r\n</ul>\r\n\r\n<p>Th&agrave;nh phố địa phương/DST -&gt; Giờ/ph&uacute;t -&gt; Năm -&gt; Th&aacute;ng -&gt; Ng&agrave;y -&gt; Giờ/ph&uacute;t.</p>\r\n\r\n<ol>\r\n	<li>Nhấn C:</li>\r\n</ol>\r\n\r\n<p>Đồng hồ sẽ ph&aacute;t ra tiếng b&iacute;p, kim gi&acirc;y v&agrave; kim đĩa quay b&ecirc;n tr&aacute;i sẽ di chuyển đến vị tr&iacute; 12h, đ&acirc;y l&agrave; m&agrave;n h&igrave;nh c&agrave;i đặt thời gian</p>\r\n\r\n<ol>\r\n	<li>D&ugrave;ng n&uacute;t D (+), B (-) để thay đổi giờ v&agrave; ph&uacute;t</li>\r\n</ol>\r\n\r\n<ul>\r\n	<li>Mỗi lần nhấn n&uacute;t, kim giờ v&agrave; kim ph&uacute;t sẽ dịch chuyển 1 ph&uacute;t</li>\r\n	<li>Nhấn giữ n&uacute;t D hoặc B để thay đổi với tốc độ nhanh hơn. Nhấn bất kỳ n&uacute;t n&agrave;o để ngưng dịch chuyển kim tốc độ cao.</li>\r\n	<li>Kim đĩa quay ph&iacute;a dưới v&agrave; kim giờ dịch chuyển đồng bộ c&ugrave;ng nhau</li>\r\n	<li>Khi c&agrave;i đặt thời gian, đảm bảo l&agrave; kim đĩa quay ph&iacute;a dưới chỉ đ&uacute;ng chữ a.m hay p.m</li>\r\n	<li>Nếu muốn thay đổi c&agrave;i đặt ng&agrave;y v&agrave; l&uacute;c n&agrave;y, nhấn n&uacute;t C v&agrave; thao t&aacute;c c&aacute;c bước bắt đầu từ bước 3 ở phần &ldquo;thay đổi c&agrave;i đặt ng&agrave;y&rdquo;</li>\r\n</ul>\r\n\r\n<ol>\r\n	<li>Nhấn n&uacute;t A để quay lại chế độ giờ hiện h&agrave;nh</li>\r\n</ol>\r\n\r\n<ul>\r\n	<li>Kim gi&acirc;y 2 sẽ dịch chuyển tự động đến vị tr&iacute; 12h v&agrave; tiếp tục chạy.</li>\r\n</ul>\r\n\r\n<p><strong><em>Để thay đổi c&agrave;i đặt ng&agrave;y hiện tại:</em></strong></p>\r\n\r\n<ol>\r\n	<li>Ở chế độ giờ hiện h&agrave;nh, nhấn giữ n&uacute;t A khoảng 5s để kim gi&acirc;y dịch chuyển</li>\r\n</ol>\r\n', '2016-10-30 20:37:28', 0);
INSERT INTO `tintuc` (`id`, `tieude_tt`, `tomtat_tt`, `anh_tt`, `noidung_tt`, `ngay_tao`, `status`) VALUES
(9, 'TÌM HIỂU VỀ BỘ MÁY KINETIC-BỘ MÁY HIỆN ĐẠI NHẤT CỦA ĐỒNG HỒ SEIKO.', '<p>Xin giới thiệu đến tất cả c&aacute;c bạn về bộ m&aacute;y đồng hồ Seiko Kinetic, ph&acirc;n loại đồng hồ Kinetic, v&agrave; những đặc trưng nổi bậc nhất của đồng hồ Seiko Kinetic Nhật Bản.</p>\r\n', 'upload/seko1-1479895341.jpg', '<p><strong>T&Igrave;M HIỂU VỀ BỘ M&Aacute;Y KINETIC-BỘ M&Aacute;Y HIỆN ĐẠI NHẤT CỦA ĐỒNG HỒ SEIKO.</strong></p>\r\n\r\n<p>H&ocirc;m nay&nbsp;<a href="https://dongho24h.com/">Đồng Hồ 24H</a>&nbsp;xin giới thiệu đến tất cả c&aacute;c bạn về bộ m&aacute;y đồng hồ Seiko Kinetic, ph&acirc;n loại đồng hồ Kinetic, v&agrave; những đặc trưng nổi bậc nhất của đồng hồ Seiko Kinetic Nhật Bản.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="" src="https://dongho24h.com/uploads/article/seko1.jpg" style="height:600px; width:600px" /></p>\r\n\r\n<p><strong>T&Igrave;M HIỂU VỀ BỘ M&Aacute;Y ĐỒNG HỒ SEIKO KINETIC.</strong></p>\r\n\r\n<p>Cũng giống như đồng hồ Quartz, Automatic, Kinetic l&agrave; t&ecirc;n một loại m&aacute;y đặc trưng của đồng hồ Seiko, trong hơn 30 năm qua&nbsp;<a href="https://dongho24h.com/san-pham/seiko.html">đồng hồ Seiko</a>&nbsp;đ&atilde; đem đến cho kh&aacute;ch h&agrave;ng những t&iacute;nh năng độc đ&aacute;o của&nbsp;<a href="https://dongho24h.com/">đồng hồ</a>&nbsp;th&ocirc;ng qua việc ph&aacute;t triển loại m&aacute;y Kinetic n&agrave;y.</p>\r\n\r\n<p>Tại Basel năm 1986, Seiko giới thiệu nguy&ecirc;n mẫu đầu ti&ecirc;n của m&aacute;y Kinetic dưới t&ecirc;n &quot;AGM&quot;. Đ&acirc;y l&agrave; chiếc đồng hồ đầu ti&ecirc;n tr&ecirc;n thế giới biến đổi động năng th&agrave;nh điện năng. Đ&acirc;y l&agrave; bước đi đầu ti&ecirc;n trong sự nghiệp ph&aacute;t triển của m&aacute;y Kinetic. Kinetic đồng nghĩa với th&acirc;n thiện với m&ocirc;i trường, thuận tiện v&agrave; hiệu quả cho người sử dụng.</p>\r\n\r\n<p>Hơn 8 triệu chiếc đồng hồ Kinetic đ&atilde; được b&aacute;n cho người ti&ecirc;u d&ugrave;ng tr&ecirc;n to&agrave;n thế giới từ năm 1988 đến nay. Năm 1998, chiếc&nbsp;<a href="https://dongho24h.com/san-pham/dong-ho-seiko-kinetic.html">đồng hồ Kinetic</a>&nbsp;Auto Relay với t&iacute;nh năng tự động chỉnh giờ trong 4 năm kể từ ng&agrave;y kh&ocirc;ng sử dụng được giới thiệu rộng r&atilde;i đến c&ocirc;ng ch&uacute;ng. Năm 1999 đồng hồ Ultimate Kinetic Chronograph được ra mắt c&ocirc;ng ch&uacute;ng, đ&acirc;y l&agrave; một kiệt t&aacute;c l&agrave; một sự kết hợp ho&agrave;n hảo giữa đồng hồ cơ v&agrave; đồng hồ điện tử của Seiko. Tại Basel 2005 Kinetic Perpetual được giới thiệu với đ&ocirc;ng đảo c&ocirc;ng ch&uacute;ng, sản phẩm n&agrave;y l&agrave; sự kết hợp những tiện &iacute;ch của Kinetic Auto Relay với chức năng tự động chỉnh lịch đến năm 2100</p>\r\n\r\n<p><strong>C&Aacute;C ĐẶC ĐIỂM NỔI BẬT CỦA BỘ M&Aacute;Y KINETIC.</strong></p>\r\n\r\n<p>L&agrave; c&ocirc;ng nghệ độc quyền của Seiko, biến chuyển động của c&aacute;nh tay th&agrave;nh điện năng để đồng hồ hoạt động.</p>\r\n\r\n<p>Độ ch&iacute;nh x&aacute;c như đồng hồ điện tử&nbsp;</p>\r\n\r\n<p>Một số c&oacute; chức năng tự động chỉnh giờ khi đeo lại sau một thời gian kh&ocirc;ng đeo (đối với đồng hồ Kinetic Perpetual)</p>\r\n\r\n<p>C&oacute; chế độ tiết kiệm năng lượng ( đối với đồng hồ Kinetic Perpetual)</p>\r\n\r\n<p>Th&acirc;n thiện với m&ocirc;i trường</p>\r\n\r\n<p><strong>C&Aacute;CH NHẬN BIẾT</strong></p>\r\n\r\n<p>Tr&ecirc;n mặt số c&oacute; chữ &quot;Kinetic&quot;</p>\r\n\r\n<p><strong>M&Aacute;Y KINETIC ĐƯỢC CHIA RA C&Aacute;C LOẠI SAU:</strong></p>\r\n\r\n<p>- Kinetic Direct Drive: Đồng Hồ Kinetic c&oacute; chức năng nạp năng lượng bằng c&aacute;ch vặn n&uacute;m.</p>\r\n\r\n<p>- Kinetic Reg: Đồng Hồ Kinetic thường, kh&ocirc;ng c&oacute; chức năng g&igrave;.</p>\r\n\r\n<p>- Kinetic Perpetual: Đồng Hồ Kinetic c&oacute; chức năng tự động chỉnh giờ, tự động chỉnh lịch.</p>\r\n\r\n<p>- Kinetic Chronograph: Đồng Hồ Kinetic c&oacute; chức năng bấm giờ thể thao</p>\r\n\r\n<p>T&igrave;m hiểu th&ecirc;m về đồng hồ Seiko, Qu&yacute; kh&aacute;ch vui l&ograve;ng v&agrave;o link b&ecirc;n dưới:</p>\r\n\r\n<p><a href="https://dongho24h.com/san-pham/seiko.html">dongho24h.com/san-pham/seiko.html</a></p>\r\n\r\n<p>&nbsp;<strong>Đồng Hồ 24H.</strong></p>\r\n\r\n<p><strong>CN1: 584 Lạc Long Qu&acirc;n, P5, Q11.</strong></p>\r\n\r\n<p><strong>CN2: 10 Nguyễn Văn Giai, P. Đa Kao, Q1.</strong></p>\r\n\r\n<p><strong>Web:</strong><a href="https://dongho24h.com/"><strong>&nbsp;dongho24h.com</strong></a></p>\r\n\r\n<p><strong>HL: 0902.80.80.20 - 0908.70.08.09.</strong></p>\r\n\r\n<p>Những Lợi &Iacute;ch H&agrave;ng Đầu Khi Mua H&agrave;ng Tại Đồng Hồ 24H</p>\r\n\r\n<p>1. Cam Kết H&agrave;ng Seiko Ch&iacute;nh H&atilde;ng 100%</p>\r\n\r\n<p>2. Bảo H&agrave;nh M&aacute;y 5 Năm.</p>\r\n\r\n<p>3. Thay Pin Miễn Ph&iacute; Vĩnh Viễn.</p>\r\n\r\n<p>4. Đổi H&agrave;ng Dễ D&agrave;ng Trong V&ograve;ng 07 Ng&agrave;y.</p>\r\n\r\n<p>5. Giao H&agrave;ng Miễn Ph&iacute; To&agrave;n Quốc.</p>\r\n\r\n<p>6. Đền Tiền x 10 Lần Nếu Ph&aacute;t Hiện H&agrave;ng Giả, H&agrave;ng Nh&aacute;i.</p>\r\n', '2016-11-19 00:52:31', 0),
(10, 'ĐỒNG HỒ CASIO G-SHOCK - ĐỒNG HỒ NĂNG LƯỢNG MẶT TRỜI.', '<p>Một chiếc đồng hồ kh&ocirc;ng những mang một phong c&aacute;ch hiện đại, c&aacute; t&iacute;nh m&agrave; c&ograve;n bảo vệ m&ocirc;i trường tuổi thọ pin k&eacute;o d&agrave;i l&ecirc;n đến 20-30 năm...</p>', 'upload/1448820887_gw-a1000d-1a_l-1479894190-1481723836.jpg', '<p>Đồng Hồ Casio G-Shock - Đồng Hồ Năng Lượng Mặt Trời.</p>\r\n\r\n<p>Một chiếc đồng hồ kh&ocirc;ng những mang một phong c&aacute;ch hiện đại, c&aacute; t&iacute;nh m&agrave; c&ograve;n bảo vệ m&ocirc;i trường tuổi thọ pin k&eacute;o d&agrave;i l&ecirc;n đến 20-30 năm, chỉ c&oacute; thể l&agrave; d&ograve;ng&nbsp;đồng hồ G-Shock&nbsp;- D&ograve;ng đồng hồ sử dụng pin năng lượng mặt trời.</p>\r\n\r\n<p>Casio G-Shock được trang bị c&ocirc;ng nghệ năng lượng mặt trời Solar Power Tough cho ph&eacute;p đồng hồ c&oacute; thể đọng lại &aacute;nh s&aacute;ng mặt trời từ bất kỳ nguồn &aacute;nh s&aacute;ng n&agrave;o. Những kỹ thuật số của Casio c&oacute; một chế độ tiết kiệm điện th&ocirc;ng minh để tối đa h&oacute;a tuổi thọ của pin.</p>\r\n\r\n<p>V&agrave;&nbsp;Đồng Hồ G-Shock&nbsp;cũng trang bị c&ocirc;ng nghệ Waveceptor, cho ph&eacute;p đồng hồ giữ thời gian v&ocirc; c&ugrave;ng ch&iacute;nh x&aacute;c. Dữ liệu thời gian ti&ecirc;u chuẩn của đồng hồ th&ocirc;ng qua s&oacute;ng v&ocirc; tuyến từ Fort Collins ở Mỹ, c&ugrave;ng với đ&oacute; tr&ecirc;n c&aacute;c điểm tr&ecirc;n thế giới cũng c&oacute; nơi ph&aacute;t s&oacute;ng v&ocirc; tuyến để đảm cho bạn bảo thời gian v&ocirc; c&ugrave;ng ch&iacute;nh x&aacute;c.</p>\r\n\r\n<p>Casio G-Shock l&agrave; d&ograve;ng đồng hồ được thiết kế với c&aacute;c t&iacute;nh năng ti&ecirc;n tiến c&ugrave;ng với m&agrave;u sắc đa dạng cho cả nam v&agrave; nữ. D&ograve;ng G-Shock d&agrave;nh cho nam được thiết kế lớn v&agrave; ghồ ghề, rất mạnh mẽ ph&ugrave; hợp cho những người đ&agrave;n &ocirc;ng y&ecirc;u thể thao, th&iacute;ch mạo hiểm v&agrave; những m&ocirc;n thể thao cảm gi&aacute;c mạnh như lướt s&oacute;ng,...Trong khi đ&oacute; d&ograve;ng&nbsp;đồng hồ Bagy-G&nbsp;d&agrave;nh cho nữ th&igrave; được thiết kế nhỏ hơn v&agrave; m&agrave;u sắc cũng cũng đa dạng v&agrave; hợp thời trang hơn.</p>\r\n\r\n<p>Những Mẫu Đồng Hồ Casio Nam G-Shock Sử Dụng Pin Năng Lượng Mặt Trời Tại&nbsp;Đồng Hồ 24H.</p>\r\n\r\n<p><strong>1. G-5600E- 1DR.</strong></p>\r\n\r\n<p><strong>Gi&aacute;: 2.850.000 VNĐ</strong></p>\r\n\r\n<p><strong>dongho24h.com/g-5600e-1dr.html</strong></p>\r\n\r\n<p><img alt="" src="https://dongho24h.com/uploads/article/G-5600E-1DR.jpg" style="height:700px; width:600px" /></p>\r\n\r\n<p><strong>2. GPW-1000-4ADR</strong></p>\r\n\r\n<p><strong>Gi&aacute;: 26.000.000 VNĐ</strong></p>\r\n\r\n<p><img alt="" src="https://dongho24h.com/uploads/article/GPW-1000-4A_l%20(1).jpg" style="height:700px; width:600px" /></p>\r\n\r\n<p><strong>3. GW-A1000D- 1ADR</strong></p>\r\n\r\n<p><strong>Gi&aacute;: 15.600.000 VNĐ</strong></p>\r\n\r\n<p><strong>dongho24h.com/casio-g-shock-nam-touch-solar-gw-a1000d-1adr.html</strong></p>\r\n\r\n<p><strong><img alt="" src="https://dongho24h.com/uploads/article/GW-A1000D-1A_l.jpg" style="height:700px; width:600px" /></strong></p>\r\n', '2016-11-19 00:52:47', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_nsd` (`id_nsd`);

--
-- Indexes for table `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dh` (`id_dh`),
  ADD KEY `id_sp` (`id_sp`);

--
-- Indexes for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nguoisudung`
--
ALTER TABLE `nguoisudung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dm` (`id_dm`),
  ADD KEY `id_th` (`id_th`);

--
-- Indexes for table `sanphamyt`
--
ALTER TABLE `sanphamyt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp_km`
--
ALTER TABLE `sp_km`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sp` (`id_sp`),
  ADD KEY `id_km` (`id_km`);

--
-- Indexes for table `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theloai_sanpham`
--
ALTER TABLE `theloai_sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sp` (`id_sp`),
  ADD KEY `id_tl` (`id_tl`);

--
-- Indexes for table `thuonghieu`
--
ALTER TABLE `thuonghieu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=162;
--
-- AUTO_INCREMENT for table `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=181;
--
-- AUTO_INCREMENT for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `nguoisudung`
--
ALTER TABLE `nguoisudung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=107;
--
-- AUTO_INCREMENT for table `sanphamyt`
--
ALTER TABLE `sanphamyt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT for table `sp_km`
--
ALTER TABLE `sp_km`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=179;
--
-- AUTO_INCREMENT for table `theloai`
--
ALTER TABLE `theloai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `theloai_sanpham`
--
ALTER TABLE `theloai_sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `thuonghieu`
--
ALTER TABLE `thuonghieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`id_nsd`) REFERENCES `nguoisudung` (`id`);

--
-- Constraints for table `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  ADD CONSTRAINT `donhangchitiet_ibfk_1` FOREIGN KEY (`id_dh`) REFERENCES `donhang` (`id`),
  ADD CONSTRAINT `donhangchitiet_ibfk_2` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_th`) REFERENCES `thuonghieu` (`id`),
  ADD CONSTRAINT `sanpham_ibfk_3` FOREIGN KEY (`id_dm`) REFERENCES `danhmuc` (`id`);

--
-- Constraints for table `sp_km`
--
ALTER TABLE `sp_km`
  ADD CONSTRAINT `sp_km_ibfk_1` FOREIGN KEY (`id_km`) REFERENCES `khuyenmai` (`id`),
  ADD CONSTRAINT `sp_km_ibfk_2` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id`);

--
-- Constraints for table `theloai_sanpham`
--
ALTER TABLE `theloai_sanpham`
  ADD CONSTRAINT `theloai_sanpham_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `theloai_sanpham_ibfk_2` FOREIGN KEY (`id_tl`) REFERENCES `theloai` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
