-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2015 at 02:38 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pink`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`admin_id` int(11) NOT NULL,
  `admin_firstname` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `admin_lastname` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_firstname`, `admin_lastname`, `email`, `password`, `level`) VALUES
(1, 'Nguyễn', 'Tuấn', 'tuannpd01039@fpt.edu.vn', 'tuannpd01039', 1),
(2, 'nguyen', 'tuan', 'xiloitn@gmail.com', 'nguyentuan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blands`
--

CREATE TABLE IF NOT EXISTS `blands` (
`id` int(11) NOT NULL,
  `bland` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blands`
--

INSERT INTO `blands` (`id`, `bland`) VALUES
(1, 'O Hui'),
(2, 'Chanel'),
(3, 'Revlon'),
(4, 'Lancome'),
(5, 'Dior'),
(6, 'Laneige'),
(7, 'Macys'),
(8, 'Shu urderma');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`id` int(11) NOT NULL,
  `categoryName` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categoryName`) VALUES
(1, 'Mỹ Phẩm'),
(2, 'Nước Hoa'),
(3, 'Chăm Sóc Da'),
(4, 'Trang Điểm '),
(9, 'Dầu Gội');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
`id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8_unicode_ci,
  `filename` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
`id` int(20) NOT NULL,
  `tenKH` varchar(65) COLLATE utf8_unicode_ci NOT NULL,
  `feedback` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `check` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `rate` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `tenKH`, `feedback`, `image`, `check`, `date`, `rate`) VALUES
(1, 'Nguyễn Tuấn', 'Giá cả phải chăng chất lượng tuyệt vời', 'chorong.jpg', 'check', '0000-00-00 00:00:00', 5),
(2, 'Park Eunji', 'Chất lượng đảm báo..', 'eunji.jpg', 'check', '0000-00-00 00:00:00', 3),
(3, 'Nguyễn Tuấn', 'giá cả phải chăng hihi tuyệt...', 'chorong.jpg', '', '0000-00-00 00:00:00', 0),
(12, 'bomi', 'great and so cool                ', 'bomi.png', '', '0000-00-00 00:00:00', 0),
(13, 'Nauen', 'Anh vẫn còn yêu em            ', 'naeun.jpg', 'check', '0000-00-00 00:00:00', 2),
(14, 'ha young', 'Anh vẫn còn yêu em                ', 'hayoung.jpg', '', '0000-00-00 00:00:00', 0),
(16, 'eunji', 'ship hàng như shit                ', 'eunji.jpg', '', '0000-00-00 00:00:00', 4),
(18, 'Tuấn đập chai', 'body            ', 'png_eunji_by_bibi97nd-d6lvk1l.png', 'check', '0000-00-00 00:00:00', 4),
(19, 'Nauen', '                123', 'chorong.jpg', '', '0000-00-00 00:00:00', 0),
(20, 'thunderclap', 'good and special                ', '10007393_10202271890012122_266662853_n.jpg', '', '0000-00-00 00:00:00', 0),
(21, 'oh yeah', 'great    ', '1000745_1421531718064449_462175954_n.jpg', '', '0000-00-00 00:00:00', 0),
(22, 'dat', 'demo', '', '', '0000-00-00 00:00:00', 4),
(23, 'da', '                    123                 ', '3.jpg', '', '0000-00-00 00:00:00', 4),
(24, 'tuan', ' nhìn cũng đc                                    ', 'Chorong-korea-girls-group-a-pink-34439735-1000-1437.jpg', '', '0000-00-00 00:00:00', 4),
(25, 'test', 'body test', 'p (3).jpg', 'check', '0000-00-00 00:00:00', 1),
(26, 'Xiloitn', 'Nguyen Tuan                                     ', '1.jpg', '', '0000-00-00 00:00:00', 5);

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE IF NOT EXISTS `feedbacks` (
`id` int(20) NOT NULL,
  `tenKH` varchar(65) COLLATE utf8_unicode_ci NOT NULL,
  `feedback` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `check` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `rate` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `tenKH`, `feedback`, `image`, `check`, `date`, `rate`) VALUES
(1, 'Nguyễn Tuấn', 'Giá cả phải chăng chất lượng tuyệt vời', 'chorong.jpg', 'check', '0000-00-00 00:00:00', 5),
(2, 'Park Eunji', 'Chất lượng đảm báo..', 'eunji.jpg', 'check', '0000-00-00 00:00:00', 3),
(3, 'Tuấn Nguyễn', 'giá cả phải chăng hihi tuyệt...', 'chorong.jpg', '', '0000-00-00 00:00:00', 0),
(12, 'bomi', 'great and so cool                ', 'bomi.png', '', '0000-00-00 00:00:00', 0),
(13, 'Nauen', 'Tôi muốn mua cho người yêu', 'naeun.jpg', 'check', '0000-00-00 00:00:00', 2),
(14, 'ha young', 'Anh vẫn còn yêu em                ', 'hayoung.jpg', '', '0000-00-00 00:00:00', 0),
(16, 'eunji', 'ship hàng như shit                ', 'eunji.jpg', '', '0000-00-00 00:00:00', 4),
(18, 'Tuấn đập chai', 'a pink no.1                ', 'png_eunji_by_bibi97nd-d6lvk1l.png', 'check', '0000-00-00 00:00:00', 4),
(19, 'Nauen', '                123', 'chorong.jpg', '', '0000-00-00 00:00:00', 0),
(20, 'thunderclap', 'good and special                ', '10007393_10202271890012122_266662853_n.jpg', '', '0000-00-00 00:00:00', 0),
(21, 'oh yeah', 'great    ', '1000745_1421531718064449_462175954_n.jpg', '', '0000-00-00 00:00:00', 0),
(22, 'tuan', 'demo', '', '', '0000-00-00 00:00:00', 4),
(23, 'da', '                    123                 ', '3.jpg', '', '0000-00-00 00:00:00', 4),
(24, 'dat', ' nhìn cũng đc                                    ', 'Chorong-korea-girls-group-a-pink-34439735-1000-1437.jpg', '', '0000-00-00 00:00:00', 4),
(25, 'demo', 'demo                                     ', '', 'check', '0000-00-00 00:00:00', 1),
(26, 'dddatjj đep tri', 'chả có gì', '', '', '0000-00-00 00:00:00', 0),
(27, 'hehe', '123', '', '', '0000-00-00 00:00:00', 0),
(28, '', '', '', '', '0000-00-00 00:00:00', 0),
(29, '123', '123', '', '', '0000-00-00 00:00:00', 0),
(30, 'demo', 'demo', '', '', '0000-00-00 00:00:00', 0),
(31, '123', '123', '', '', '0000-00-00 00:00:00', 0),
(32, 'heh', 'hehe', '', '', '0000-00-00 00:00:00', 0),
(36, '', '', '', '', '0000-00-00 00:00:00', 0),
(37, '123', '123', '', '', '0000-00-00 00:00:00', 0),
(38, '123', '123', '', '', '0000-00-00 00:00:00', 0),
(39, 'haha', 'haha', '', '', '0000-00-00 00:00:00', 0),
(40, '46', '456', '', '', '0000-00-00 00:00:00', 0),
(41, 'lk', 'lk', '', '', '0000-00-00 00:00:00', 0),
(42, '', '', '', '', '0000-00-00 00:00:00', 0),
(43, '123', '123', '', '', '0000-00-00 00:00:00', 0),
(44, 'thunderclap', 'ngu shit', '', '', '0000-00-00 00:00:00', 0),
(45, 'yeah', 'như citws', '', '', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
`id` int(10) NOT NULL,
  `banner1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `banner2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tittle1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tittle2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tittle3` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `tittle4` varchar(120) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `banner1`, `banner2`, `tittle1`, `tittle2`, `tittle3`, `tittle4`) VALUES
(1, 'banner.jpg', 'banner1.jpg', 'Happy 1 aniversary years old <3', 'Sales 50% and free ship', 'Chất lượng đảm bảo - Giá cả hợp lí', 'Hàng Mới!!!');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
`id` int(11) NOT NULL,
  `listName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `listName`, `category_id`) VALUES
(1, 'Nước hoa nữ', 2),
(2, 'Nước hoa nam', 2),
(6, 'Mỹ Phẩm Hàn Quốc', 1),
(13, 'Mỹ Phẩm USA', 1);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
`id` int(11) NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(12) NOT NULL,
  `city` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `diachinhanhang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `luotmua` int(11) NOT NULL,
  `luotthanhtoan` int(11) NOT NULL,
  `voucher` int(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `email`, `password`, `firstname`, `address`, `phone`, `city`, `diachinhanhang`, `lastname`, `luotmua`, `luotthanhtoan`, `voucher`) VALUES
(2, 'xiloitn@gmail.com', 'bf948eaca565d46723f721baasdasd5a8c2b4', 'xu', 'đà nẵng', 968347557, 'đà nẵng', 'đà nẵng', 'hương', 0, 0, 1234567),
(7, '123@gmail.com', '40efe8dc92a95e5ba7b8ec7a3ebab48e65dd7c95', 'tinh', '123', 123, '123', '123', 'le', 0, 0, 2147483647),
(9, 'q@gmail.com', '6790abb3574153268a863dd71c9607d770fd6f5b', 'q', 'q', 0, 'q', 'q', 'q', 0, 0, 2147483647),
(10, 'c@gmail.com', '7cfbdefc61fba4f86685aa0ae9f79d8ed48ad77b', 'c', 'c', 0, 'c', 'c', 'c', 0, 0, 609899098),
(11, 'y@gmail.com', 'ec64b0b82beab5798365f8f27b93b77e6cfc2711', 'y', '1231231231', 123, '123', '123', 'y', 0, 0, 2147483647),
(13, '123123123@gmail.com', 'e4fd85b0173ba1f19157b72095fd38f6e07dda1d', '123', '123123123', 123, '123', '123', '123', 0, 0, 2147483647),
(18, 'k@gmail.com', '41044486224e8ba4a6f9c9452becdb785b3ffb87', 'd\\k', '123', 123, '13', '123', 'k', 0, 0, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE IF NOT EXISTS `orderitems` (
`id` int(11) NOT NULL,
  `orderID` int(11) NOT NULL,
  `product_name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `product_code` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `product_qty` int(11) NOT NULL,
  `price` int(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=271 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orderitems`
--

INSERT INTO `orderitems` (`id`, `orderID`, `product_name`, `product_code`, `product_qty`, `price`) VALUES
(146, 0, 'Mặt nạ enzyme', 'DG12', 2, 200000),
(181, 134, 'BB/CC Cream', 'MP01', 2, 210000),
(182, 134, 'Foundation/Kem Nền', 'MP03', 5, 350000),
(183, 134, 'Primer/Kem Lót', 'MY02', 1, 300000),
(185, 134, 'Foundation/Kem Nền', 'MP03', 1, 350000),
(210, 137, 'Nước hoa Victoria''s Secret', 'SC12', 1, 220000),
(212, 137, 'Mặt nạ enzyme', 'DG12', 1, 200000),
(213, 137, 'KEM DƯỠNG ẨM BODY', 'BD12', 1, 2000000),
(224, 139, 'Mặt nạ enzyme', 'DG12', 1, 200000),
(225, 139, 'KEM DƯỠNG ẨM BODY', 'BD12', 1, 2000000),
(226, 139, 'Mặt nạ enzyme', 'DG12', 1, 200000),
(227, 139, 'KEM DƯỠNG ẨM BODY', 'BD12', 1, 2000000),
(228, 139, 'Mặt nạ enzyme', 'DG12', 4, 200000),
(229, 139, 'KEM DƯỠNG ẨM BODY', 'BD12', 1, 2000000),
(230, 140, 'Mặt nạ enzyme', 'DG12', 4, 200000),
(231, 140, 'KEM DƯỠNG ẨM BODY', 'BD12', 1, 2000000),
(232, 141, 'Mặt nạ enzyme', 'DG12', 4, 200000),
(233, 141, 'KEM DƯỠNG ẨM BODY', 'BD12', 1, 2000000),
(234, 142, 'Mặt nạ enzyme', 'DG12', 4, 200000),
(235, 142, 'KEM DƯỠNG ẨM BODY', 'BD12', 1, 2000000),
(236, 143, 'Mặt nạ enzyme', 'DG12', 4, 200000),
(237, 143, 'KEM DƯỠNG ẨM BODY', 'BD12', 1, 2000000),
(238, 144, 'Mặt nạ enzyme', 'DG12', 1, 200000),
(239, 145, 'Mặt nạ enzyme', 'DG12', 1, 200000),
(240, 146, 'Mặt nạ enzyme', 'DG12', 5, 200000),
(241, 146, 'Nước hoa Victoria''s Secret', 'SC12', 10, 220000),
(242, 148, 'Son Nars', 'SN12', 1, 1200000),
(243, 149, 'Mặt nạ enzyme', 'DG12', 1, 200000),
(244, 149, 'Mặt nạ enzyme', 'DG12', 1, 200000),
(245, 149, 'Son Nars', 'SN12', 1, 1200000),
(246, 154, 'Nước hoa Victoria''s Secret', 'SC12', 1, 220000),
(247, 156, 'Son Nars', 'SN12', 1, 1200000),
(248, 156, 'Nước hoa Victoria''s Secret', 'SC12', 1, 220000),
(249, 149, 'Nước hoa Victoria''s Secret', 'SC12', 1, 220000),
(250, 150, 'Nước hoa Victoria''s Secret', 'SC12', 12, 220000),
(251, 150, 'Nước Hoa Dream Angels', 'DA12', 1, 950000),
(252, 151, 'Nước hoa Victoria''s Secret', 'SC12', 1, 220000),
(253, 152, 'Mặt nạ enzyme', 'DG12', 1, 200000),
(254, 153, 'Mặt nạ enzyme', 'DG12', 1, 200000),
(255, 154, 'Nước hoa Victoria''s Secret', 'SC12', 1, 220000),
(256, 155, 'Mặt nạ enzyme', 'DG12', 1, 200000),
(257, 156, 'Mặt nạ enzyme', 'DG12', 1, 200000),
(258, 157, 'Nước Hoa Dream Angels', 'DA12', 1, 950000),
(259, 158, 'Mặt nạ enzyme', 'DG12', 1, 200000),
(260, 159, 'Nước Hoa Dream Angels', 'DA12', 1, 950000),
(261, 160, 'Son NYX Matte ', 'sm12', 1, 250000),
(262, 161, 'Sữa Tắm VS', 'BD20', 1, 550000),
(263, 162, 'sản phẩm', 'demo', 1, 450),
(264, 163, 'Sữa Tắm VS', 'BD20', 1, 550000),
(265, 164, 'Sữa Tắm VS', 'BD20', 1, 550000),
(266, 165, 'Sữa Tắm VS', 'BD20', 1, 550000),
(267, 165, 'Nước Hoa Dream Angels', 'DA12', 1, 950000),
(268, 166, 'Nước Hoa Dream Angels', 'DA12', 1, 950000),
(269, 166, 'list', 'list', 1, 0),
(270, 167, 'Nước Hoa Dream Angels', 'DA12', 1, 950000);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
`id` int(11) NOT NULL,
  `orderDate` datetime NOT NULL,
  `firstname` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(60) NOT NULL,
  `pay` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `ghichu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(20) NOT NULL,
  `method` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=168 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `orderDate`, `firstname`, `lastname`, `email`, `phone`, `address`, `price`, `pay`, `ghichu`, `user_id`, `method`) VALUES
(134, '2014-10-10 22:30:10', 'Nguyễn', 'Tuấn', 'tuannpd01039@fpt.edu.vn', 968347557, 'da nang', 2170000, 'no', 'ghi chi', 0, ''),
(160, '2014-10-30 23:03:51', 'Xi', 'Loi', 'xiloitn@gmail.com', 968347557, '208 Tố Hữu Đà Nẵng', -13, 'yes', 'Cần gấp', 0, 'ship'),
(161, '2014-10-31 17:04:49', 'Nguyễn', 'Thành Tuấn', 'scanhearts@gmail.com', 986178737, 'Đà Nẵng', 550000, '', '206 Chu Mạnh Trinh', 0, 'ship'),
(162, '2014-10-31 17:06:39', '123212123', '123', '123@gmail.com', 2147483647, '123', 450, '', '123', 0, 'ship'),
(163, '2014-10-31 17:10:40', 'Nguyễn', 'Tuấn', 'scan@fpt.edu.vn', 968347557, 'Đà Nẵng', 550000, '', '123', 0, 'ship'),
(164, '2014-10-31 17:12:32', '12', '123', '123@gail.com', 123, '123', 550000, '', '', 0, 'pay'),
(165, '2014-10-31 17:13:57', 'demo', 'demo', 'demo@gmail.com', 1287551048, 'dằnngx', 1500000, '', '123', 0, 'ship'),
(166, '2014-10-31 17:19:47', 'alo', 'alo', 'alo@gmail.com', 1689643234, 'đà nẵng', 760, '', 'hello', 0, 'ship'),
(167, '2014-10-31 17:52:24', 'aloha', 'loha', 'alo123@gmail.co', 1689643234, 'đà ẵn', 950000, '', 'hello', 6, 'pay');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
`id` int(10) NOT NULL,
  `name_pages` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name_pages`) VALUES
(1, 'women'),
(2, 'men'),
(3, 'other'),
(4, 'purchase');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
`id` int(10) NOT NULL,
  `product_code` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `product_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(60) NOT NULL,
  `detail` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `new` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `img2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img5` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(60) NOT NULL,
  `huongdan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `featured` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `sales` varchar(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_code`, `product_name`, `price`, `detail`, `status`, `type`, `size`, `color`, `date`, `img`, `new`, `img2`, `img3`, `img4`, `img5`, `category_id`, `huongdan`, `featured`, `sales`) VALUES
(8, 'BD12', 'KEM DƯỠNG ẨM ', 2000000, '<p><strong><span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">M&ugrave;i hương đặc trưng:</span></strong><br />\r\n<img alt="yes" src="http://localhost/suongnguyen/admin/ckeditor/ckeditor/plugins/smiley/images/thumbs_up.png" style="height:23px; width:23px" title="yes" /><br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Vani, Quả mộc qua, Bạch đậu khấu, Thường xu&acirc;n rừng, Qu&yacute;t, Hoa sung, Hoa mẫu đơn trắng, Lan Nam Phi, Hoa irit, Hoa violet, Hoa anh t&uacute;c, Xạ hương trắng, Phong lan.<br />\r\n<br />\r\n<strong>Phong c&aacute;ch:</strong><br />\r\n<br />\r\nNhẹ nh&agrave;ng, trầm lắng, vui tươi.</span></p>\r\n', 'Còn Hàng', 'Vip', 'Free', 'Như hình', '2014-06-23 00:00:00', '983710_251230765000570_2590781355387302734_n.jpg', 'new', '1958294_251230725000574_655121281407120955_n.jpg', '10473464_251230698333910_8397183677851676313_n.jpg', '983710_251230765000570_2590781355387302734_n.jpg', '', 1, '<p>&nbsp;</p>\r\n\r\n<p><img alt="sad" src="https://localhost/fox/ckeditor/ckeditor/plugins/smiley/images/sad_smile.png" style="height:23px; width:23px" title="sad" />Để c&aacute;ch mặt bạn 5 cm v&agrave; xịt nhẹ kho&aacute;ng l&ecirc;n mặt . Kh&ocirc;ng lau&', 'có', 'có'),
(11, 'AKD102', 'Nước Hoa Victoria Secret', 650000, '<p><strong><span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">C&ugrave;ng nh&atilde;n hiệu: Victoria&#39;s Secret</span></strong><br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Dream Angels Heavenly l&agrave; một trong số những nước hoa h&agrave;ng đầu tại Mỹ, được giới thiệu bởi Victoria&#39;s Secret với một pha trộn mềm mại, dịu nhẹ của hoa mẫu đơn v&agrave; xạ hương trắng. Dream Angels Heavenly trong suốt, s&aacute;ng ch&oacute;i với hương hoa tươi m&aacute;t v&agrave; ấm &aacute;p, mang đến những rung động mạnh mẽ, cảm gi&aacute;c thanh thản v&agrave; hạnh ph&uacute;c tuyệt đối.</span><br />\r\n<br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">M&ugrave;i hương đặc trưng:</span><br />\r\n<br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Vani, Quả mộc qua, Bạch đậu khấu, Thường xu&acirc;n rừng, Qu&yacute;t, Hoa sung, Hoa mẫu đơn trắng, Lan Nam Phi, Hoa irit, Hoa violet, Hoa anh t&uacute;c, Xạ hương trắng, Phong lan.<br />\r\n<br />\r\nPhong c&aacute;ch:<br />\r\n<br />\r\nNhẹ nh&agrave;ng, trầm lắng, vui tươi.</span></p>\r\n', 'Còn Hàng', 'Vip', 'Free', 'Như hình', '2014-06-23 00:00:00', 'nuoc-hoa.jpg', 'new', 'nuoc-hoa-1.jpg', 'nuoc-hoa-2.jpg', 'nuoc-hoa-3.jpg', '1.jpg', 2, '<p>Để c&aacute;ch mặt bạn 5 cm v&agrave; xịt nhẹ kho&aacute;ng l&ecirc;n mặt . Kh&ocirc;ng lau đi m&agrave; để kho&aacute;ng tự kh&ocirc; v&agrave; thấm đều tr&ecirc;n bề mặt da .</p>\r\n', 'có', ''),
(21, 'MP01', 'BB/CC Cream', 210000, '<p><span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif"><span style="color:#FF0000"><strong>Maybelline BB Cream Dream Fresh</strong></span> - d&ograve;ng sản phẩm<strong> BB Cream</strong> nổi tiếng của <strong>Maybelline</strong>. Sản phẩm l&agrave; sự kết hợp giữa dưỡng da v&agrave; makeup, cho bạn l&agrave;n da ho&agrave;n hảo chỉ trong 1 bước đơn giản.</span><br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Sản phẩm c&oacute; 8-in-1 gồm c&aacute;c c&ocirc;ng dụng:</span><br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">* Che giấu c&aacute;c khuyết điểm một c&aacute;ch kh&eacute;o l&eacute;o</span><br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">* Da mặt s&aacute;ng v&agrave; rạng rỡ hơn</span><br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">* Cải thiện t&ocirc;ng da, cho c&aacute;c v&ugrave;ng da đều m&agrave;u</span><br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">* Cho lớp nền mịn v&agrave; mượt m&agrave;<br />\r\n* Cung cấp độ ẩm cần thiết giữ cho da lu&ocirc;n được đ&agrave;n hồi tốt<br />\r\n* Tăng cường c&aacute;c dưỡng chất nu&ocirc;i dưỡng<br />\r\n* Bảo vệ da khỏi t&aacute;c hại của tia UV với SPF30<br />\r\n* Th&agrave;nh phần KH&Ocirc;NG chứa dầu th&iacute;ch hợp d&agrave;nh cho da nhờn.</span></p>\r\n', 'Còn Hàng', 'Vip', 'Free', 'Như hình', '2014-08-11 19:27:35', '1480613_243579572432356_8788858146901314034_n.jpg', 'new', '10157221_243579359099044_2710486669113236763_n.jpg', '10253848_243579615765685_8320068728078791086_n.jpg', 'mypham1.jpg', '', 1, '<p>123</p>\r\n', '', ''),
(22, 'MY02', 'Primer/Kem Lót', 300000, '<p><span style="color:#FF0000"><strong><span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Kem l&oacute;t Revlon Photoready Color Perfecting Primer</span></strong></span></p>\r\n\r\n<p><span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">- Tăng cường độ ẩm cho l&agrave;n da mềm mại, mịn m&agrave;ng tự nhi&ecirc;n kh&ocirc;ng t&igrave; vết</span><br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">- C&ocirc;ng thức đặc biệt gi&uacute;p căng da lấp đầy,che phủ lỗ ch&acirc;n l&ocirc;ng v&agrave; c&aacute;c nếp nhăn</span><br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">- Tạo l&agrave;n da tươi mới trẻ trung, thoải m&aacute;i v&agrave; đầy sức sống</span></p>\r\n', 'Còn Hàng', 'Vip', 'Free', 'Như hình', '2014-08-11 19:32:22', '10168221_243579349099045_2464514727080270619_n.jpg', 'new', '10253848_243579615765685_8320068728078791086_n.jpg', '10314601_244335302356783_3942027895916710168_n.jpg', '1920574_243580375765609_4576146394625653953_n.jpg', '', 1, '', '', 'có'),
(23, 'MP03', 'Foundation/Kem Nền', 350000, '<p><span style="color:#FF0000"><strong><span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Kem nền Revlon ColorStay Whipped Cr&egrave;me</span></strong></span><br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Tuy gọi l&agrave; cream, nhưng kh&ocirc;ng hề g&acirc;y b&iacute; da. Texture giống như mousse, bạn sẽ cảm thấy như c&oacute; một lớp lụa mỏng tr&ecirc;n mặt, kh&ocirc;ng khiến mặt bạn bị cakey hay tạo sự nặng nề. Cảm gi&aacute;c khi d&ugrave;ng nhẹ nh&agrave;ng, kh&ocirc;ng bị d&agrave;y mặt. C&ocirc;ng thức Paraben-free v&agrave; Tact-free, sản phẩm cho lớp nền rất mỏng, mịn v&agrave; mướt v&ocirc; c&ugrave;ng, những khuyết điểm tr&ecirc;n da c&oacute; thể gần như kh&ocirc;ng c&ograve;n nh&igrave;n&nbsp;</span><span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">thấy sau khi trang điểm, cho một l&agrave;n da kh&ocirc;ng t&igrave; vết. Những sản phẩm che khuyết điểm sẽ kh&ocirc;ng c&ograve;n cần thiết v&agrave;o l&uacute;c n&agrave;y. Đặc biệt, sản phẩm cho hiệu ứng l&agrave;m mờ, rất kh&ocirc; r&aacute;o, kh&ocirc;ng b&oacute;ng nhờn. Điều tiết lượng dầu rất tốt, cho d&ugrave; bạn c&oacute; l&agrave;n da kh&ocirc; th&igrave; n&oacute; cũng kh&ocirc;ng khiến da mất đi độ ẩm. Thiết kế vỏ hộp bằng thủy tinh sang trọng, tr&ocirc;ng rất chuy&ecirc;n nghiệp. độ giữ d&agrave;i được h&atilde;ng cam kết đến 24h, sử dụng c&ocirc;ng thức c&acirc;n bằng da cho c&aacute;i nh&igrave;n ho&agrave;n hảo suốt cả ng&agrave;y. Đủ tất cả c&aacute;i m&agrave;u.</span></p>\r\n', 'Còn Hàng', 'Vip', 'Free', 'Như hình', '2014-08-11 19:34:52', '1610110_245377142252599_7738241276730124641_n.jpg', '', '10245564_245377008919279_6004835697294389317_n.jpg', '1538862_243580402432273_1410267876808495233_n.jpg', '1538862_243580402432273_1410267876808495233_n.jpg', '', 1, '', '', 'có'),
(24, 'SN12', 'Son Nars', 1200000, '<p><strong><span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">TH&Ocirc;NG TIN THƯƠNG HIỆU</span></strong><br />\r\n&nbsp;</p>\r\n\r\n<p><span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Ng&agrave;y th&agrave;nh lập:N/A</span><br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Xuất xứ:Mỹ</span><br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Website:</span><a href="http://www.narscosmetics.com/" rel="nofollow nofollow" style="color: rgb(59, 89, 152); cursor: pointer; text-decoration: none; font-family: Helvetica, Arial, ''lucida grande'', tahoma, verdana, arial, sans-serif; line-height: 18px;" target="_blank">http://www.narscosmetics.com/</a><br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Fanpage:</span><a href="https://www.facebook.com/narscosmetics" rel="nofollow" style="color: rgb(59, 89, 152); cursor: pointer; text-decoration: none; font-family: Helvetica, Arial, ''lucida grande'', tahoma, verdana, arial, sans-serif; line-height: 18px;">https://www.facebook.com/narscosmetics</a><br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Nars l&agrave; một thương hiệu mỹ phẩm v&agrave; chăm s&oacute;c da thuộc tập đo&agrave;n Shiseido, được tạo dựng bởi Fran&ccedil;ois Nars, một nhiếp ảnh gia v&agrave; chuy&ecirc;n gia trang điểm nổi tiếng. D&ograve;ng mỹ phẩm n&agrave;y bắt đầu với 12 c&acirc;y son được b&agrave;y b&aacute;n tại Barneys New York, rồi từ đ&oacute; tiếp tục chinh phục thị trường ti&ecirc;u d&ugrave;ng bằng những sản phẩm đa năng kh&aacute;c nhau với kiểu d&aacute;ng bao b&igrave; theo trường ph&aacute;i tối giản.</span><br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Nars c&ograve;n g&acirc;y ấn tượng bởi những t&ocirc;ng m&agrave;u c&oacute; t&ecirc;n gọi nổi loạn như &lsquo;Orgasm&rsquo;, &lsquo;Deep Throat&rsquo;, &lsquo;Striptease,&rsquo; and &lsquo;Sex Machine&rsquo;. Phấn m&aacute; hồng NARS Orgasm l&agrave; một trong những sản phẩm b&aacute;n chạy nhất, đến độ c&oacute; hẳn một BST Orgasm gồm m&aacute; hồng, son b&oacute;ng, sơn m&oacute;ng tay, phấn tạo s&aacute;ng&hellip;</span><br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Một số sản phẩm ti&ecirc;u biểu của Nars như phấn hồng, phấn tạo khối m&agrave;u đồng, son m&ocirc;i v&agrave; đặc biệt l&agrave; bảng m&agrave;u mắt nổi tiếng tr&ecirc;n thế giới.</span></p>\r\n', 'Còn Hàng', 'Vip', 'Free', 'Như hình', '2014-08-11 19:44:21', '10353043_253701151420198_88412354525011617_n.jpg', 'new', '10414611_253697791420534_7029630954204021953_n.jpg', '10440878_253699228087057_5239875582369789949_n.jpg', '10514757_253701131420200_7329968938354320423_n.jpg', '', 1, '', 'có', 'có'),
(25, 'DG102', 'Skin Care/ Kem Dưỡng Da', 300000, '<p><strong><span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Estee Lauder Day Wear&nbsp;</span></strong><br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Kem dưỡng ẩm d&agrave;nh cho da thường đến da h&otilde;n hợp, bảo về da năng, chống l&atilde;o h&oacute;a, c&oacute; SPF 15</span><br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Loại mini, kh&ocirc;ng hộp</span></p>\r\n', 'Còn Hàng', 'Vip', 'Free', 'Như hình', '2014-08-11 19:47:29', 'gd.jpg', 'new', 'gd1.jpg', 'gd3.jpg', 'gd.jpg', '', 3, '', '', 'có'),
(26, 'DG12', 'Mặt nạ enzyme', 200000, '<p><span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif"><strong>Freeman Feeling Beautiful Facial Enzyme Mask, Pineapple</strong> &ndash; <strong>Mặt nạ chiết xuất từ quả Dứa</strong> (<em>150ml</em>) </span></p>\r\n\r\n<p><span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">&ndash;&nbsp;Mặt nạ enzyme n&agrave;y, với chiết xuất dứa v&agrave; AHA nhẹ nh&agrave;ng chăm s&oacute;c v&agrave; dưỡng ẩm cho da, để lại l&agrave;n da của bạn mềm mại, dẻo dai v&agrave; tr&ocirc;ng trẻ hơn.</span></p>\r\n', 'Còn Hàng', 'Vip', 'Free', 'Như hình', '2014-08-11 19:50:23', '10456800_251229755000671_5549089090165992939_n.jpg', 'new', '10353654_251229725000674_8580897584083244690_n.jpg', '10401451_251229708334009_3241728829656887095_n.jpg', '10334431_251229738334006_1047818683668096236_n.jpg', '', 3, '', 'có', ''),
(27, 'SC12', 'Nước hoa Victoria''s Secret', 220000, '<p><span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif"><strong>Nước hoa&nbsp;Victoria secret </strong>- thương hiệu nổi tiếng về chăm s&oacute;c sắc đẹp sẽ mang đến cho bạn l&agrave;n da mịn m&agrave;ng như mong đợi.&nbsp;</span><br />\r\n<br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif"><strong>Th&agrave;nh phần</strong>: nho, vitamin E, C, yến mạch, Hydrat... l&agrave;m trắng v&agrave; mềm da tr&ocirc;ng thấy lu&ocirc;n sau 36 tuần sử dụng</span><br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">C&aacute;ch sử dụng: Thoa đều l&ecirc;n to&agrave;n th&acirc;n v&agrave; m&aacute;t xa nhẹ nh&agrave;ng cho sản phẩm thấm đều v&agrave;o da. Đặc biệt, Sản phẩm th&iacute;ch ứng cho mọi l&agrave;n da v&agrave; ph&ugrave; hợp với tất cả c&aacute;c m&ugrave;a trong năm</span><br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Sữa dưỡng&nbsp;</span><span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">da hay c&ograve;n gọi l&agrave; lotion được lấy cảm hứng từ một chuyện t&igrave;nh l&atilde;ng mạn, với m&agrave;u s&aacute;ng hồng của hoa l&ecirc; v&agrave; sự tuyệt vời của hoa li tạo n&ecirc;n một hương hoa thơm ho&agrave;n hảo đầy quyến rũ.<br />\r\n- Nước xịt to&agrave;n th&acirc;n Body Mist VS d&ograve;ng Fantasy.<br />\r\nThay v&igrave; d&ugrave;ng nước hoa, xịt body mang đến cho c&aacute;c bạn hương thơm thanh m&aacute;t, dịu ngọt v&agrave;o những buổi trưa h&egrave; nắng n&oacute;ng.<br />\r\nD&ograve;ng n&agrave;y cũng nằm trong bộ sưu tập lotion của VS v&agrave; m&ugrave;i thơm cũng tương tự như lotion<br />\r\nDung t&iacute;ch: 250ml</span></p>\r\n', 'Còn Hàng', 'Vip', 'Free', 'Như hình', '2014-08-11 19:54:16', '10366294_251230915000555_1381611051268718666_n.jpg', 'new', '10366305_251230888333891_574412876080466114_n.jpg', '10461462_251230901667223_1822157798627551985_n.jpg', '10366294_251230915000555_1381611051268718666_n.jpg', '', 2, '', 'có', 'có'),
(28, 'DA12', 'Nước Hoa Dream Angel', 1950000, '<p>Nước Hoa Dream Angels</p>\r\n\r\n<p><span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">C&ugrave;ng nh&atilde;n hiệu: <strong>Victoria&#39;s Secret</strong></span><br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Dream Angels Heavenly l&agrave; một trong số những nước hoa h&agrave;ng đầu tại Mỹ, được giới thiệu bởi Victoria&#39;s Secret với một pha trộn mềm mại, dịu nhẹ của hoa mẫu đơn v&agrave; xạ hương trắng. Dream Angels Heavenly trong suốt, s&aacute;ng ch&oacute;i với hương hoa tươi m&aacute;t v&agrave; ấm &aacute;p, mang đến những rung động mạnh mẽ, cảm gi&aacute;c thanh thản v&agrave; hạnh ph&uacute;c tuyệt đối.</span><br />\r\n<br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">M&ugrave;i hương đặc trưng:</span><br />\r\n<br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Vani, Quả mộc qua, Bạch đậu khấu, Thường xu&acirc;n rừng, Qu&yacute;t, Hoa sung, Hoa mẫu đơn trắng, Lan Nam Phi, Hoa irit, Hoa violet, Hoa anh t&uacute;c, Xạ hương trắng, Phong lan.<br />\r\n<br />\r\nPhong c&aacute;ch:<br />\r\n<br />\r\nNhẹ nh&agrave;ng, trầm lắng, vui tươi.</span></p>\r\n', 'Còn Hàng', 'Vip', 'Free', 'Như hình', '2014-08-11 19:58:52', '10464100_251427448314235_877430323603318127_n.jpg', 'new', '10175037_251427478314232_6544035196121181711_n.jpg', '10366294_251230915000555_1381611051268718666_n.jpg', '10366305_251230888333891_574412876080466114_n.jpg', '', 2, '<p>đọc kĩ hướng dẫn sử dụng trước khi d&ugrave;ng<br />\r\n&nbsp;</p>\r\n', 'có', 'có'),
(29, 'BD20', 'Sữa Tắm VS', 550000, '<p><span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif"><em><strong>Victoria secret</strong></em> - thương hiệu nổi tiếng về chăm s&oacute;c sắc đẹp sẽ mang đến cho bạn l&agrave;n da mịn m&agrave;ng như mong đợi.&nbsp;</span><br />\r\n<br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Th&agrave;nh phần: nho, vitamin E, C, yến mạch, Hydrat... l&agrave;m trắng v&agrave; mềm da tr&ocirc;ng thấy lu&ocirc;n sau 36 tuần sử dụng</span></p>\r\n\r\n<p><span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Dung t&iacute;ch: 250ml</span><br />\r\n&nbsp;</p>\r\n', 'Còn Hàng', 'Vip', 'Free', 'Như hình', '2014-08-11 20:04:00', '10325738_247195225404124_7258564844082141403_n.jpg', '', '10372149_247195208737459_5559144153211444800_n.jpg', '10334433_247195165404130_8418637839179102896_n.jpg', '10372149_247195208737459_5559144153211444800_n.jpg', '', 3, '<p><span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Thoa đều l&ecirc;n to&agrave;n th&acirc;n v&agrave; m&aacute;t xa nhẹ nh&agrave;ng cho sản phẩm thấm đều v&agrave;o da. Đặc biệt, Sản phẩm th&iacute;ch ứng cho mọi ', 'có', ''),
(30, 'ST93', 'Sữa rửa mặt St. Ives', 950000, '<p><span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif"><strong>D&ograve;ng sửa rửa mặt St. Ives</strong> đến từ Mỹ l&agrave; sản phẩm được mệnh danh Thương Hiệu H&agrave;ng Đầu do cty Uniliver Mỹ ph&acirc;n phối. Đạt giải thưởng do độc giả Allure b&igrave;nh chọn.</span><br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Sản phẩn nổi bật với t&iacute;nh năng tẩy tế b&agrave;o chết với c&aacute;c hạt Scrub massage . Hiệu quả ngay từ lần đầu sử dụng.</span><br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Tẩy tế b&agrave;o chết St.Ives với c&ocirc;ng thức mới cực kỳ nhẹ dịu đủ an to&agrave;n cho những l&agrave;n da nhạy cảm nhất.</span><br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Tẩy tế b&agrave;o chết St.Ives với th&agrave;n</span><span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">h phần 100% từ thi&ecirc;n nhi&ecirc;n, l&agrave;m sạch s&acirc;u lỗ ch&acirc;n l&ocirc;ng, v&agrave; gi&uacute;p ngăn ngừa mụn trước khi ch&uacute;ng h&igrave;nh th&agrave;nh.<br />\r\nSản phẩm được nghi&ecirc;n cứu một c&aacute;ch kỹ lưỡng v&agrave; được chọn lọc để mang đến cho bạn những th&agrave;nh phần tốt nhất từ thi&ecirc;n nhi&ecirc;n. Với c&ocirc;ng thức tuyệt vời cho một l&agrave;n da mềm mại, tươi s&aacute;ng.<br />\r\nTh&agrave;nh phần ch&iacute;nh từ quả Mơ - một loại quả c&oacute; chứa tỉ lệ carotenoids (Vitamin A) cao nhất v&agrave; c&oacute; khả năng chống oxy h&oacute;a cực cao v&agrave; hiệu quả.<br />\r\nSức mạnh của c&aacute;c th&agrave;nh phần trong sản phẩm t&aacute;c động l&ecirc;n da nhẹ nh&agrave;ng v&agrave; nu&ocirc;i dưỡng l&agrave;n da tươi trẻ.<br />\r\nC&oacute; thể sử dụng sản phẩm 3-4 lần/ tuần hoặc gia giảm t&ugrave;y theo từng l&agrave;n da th&iacute;ch hợp.<br />\r\nTẩy da chết St ives 170g&nbsp;<br />\r\nNgo&agrave;i việc tẩy tế b&agrave;o chết c&ograve;n được Chuy&ecirc;n d&ugrave;ng cho việc l&agrave;m sạch mụn c&aacute;m (ch&oacute;p mũi) v&agrave; mụn đầu đen đấy ạ. Tẩy tế b&agrave;o chết hiệu quả với c&aacute;c hạt tẩy ho&agrave;n to&agrave;n từ thi&ecirc;n nhi&ecirc;n. L&agrave;m da mềm mịn m&agrave;ng ngay sau khi d&ugrave;ng.</span></p>\r\n', 'Còn Hàng', 'Vip', 'Free', 'Như hình', '2014-08-11 20:07:14', '10268586_249386945184952_3254973326861472222_n.jpg', 'new', '10320590_249386968518283_4445029970684000105_n.jpg', '10320590_249386968518283_4445029970684000105_n.jpg', '10363713_249386955184951_3618805428598496788_n.jpg', '', 1, '<p><span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Sử dụng từ 2 đến 3 lần một tuần</span></p>\r\n', '', 'có'),
(31, 'sm12', 'Son NYX Matte ', 250000, '<p><span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif"><strong>NYX Matte Lipstick</strong> với c&aacute;c m&agrave;u đậm v&agrave; phong ph&uacute;, kh&ocirc;ng b&oacute;ng, kh&ocirc;ng nhũ, hợp thời trang gi&uacute;p cho đ&ocirc;i m&ocirc;i c&oacute; m&agrave;u sắc rực rỡ</span></p>\r\n', 'Còn Hàng', 'Vip', 'Free', 'Như hình', '2014-08-11 20:09:36', '10155590_242856332504680_4784502072122982900_n.jpg', 'new', '10156007_242796059177374_8332020482073317771_n.jpg', '1939713_242789669178013_5184154928674056786_n.jpg', '10245384_242856352504678_2902220970899530903_n.jpg', '', 1, '', '', 'có'),
(32, 'Kem tan mỡ', 'Kem Tan mỡ', 0, '<p>Kem Tan mỡ</p>\r\n', 'Còn Hàng', 'Vip', 'Free', 'Như hình', '2014-10-24 09:02:59', '377959_256337221083433_781385653_n.jpg', 'new', '377959_256337221083433_781385653_n.jpg', '377959_256337221083433_781385653_n.jpg', '377959_256337221083433_781385653_n.jpg', '', 1, '<p>Kem Tan mỡ</p>\r\n', '', 'có');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`id` int(10) NOT NULL,
  `product_code` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `product_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(60) NOT NULL,
  `detail` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `new` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `img2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img5` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(60) NOT NULL,
  `huongdan` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `featured` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `sales` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `bland_id` int(11) NOT NULL,
  `view` int(60) NOT NULL,
  `list_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `product_name`, `price`, `detail`, `status`, `type`, `size`, `color`, `date`, `img`, `new`, `img2`, `img3`, `img4`, `img5`, `category_id`, `huongdan`, `featured`, `sales`, `bland_id`, `view`, `list_id`) VALUES
(8, 'BD12', 'KEM DƯỠNG ẨM BODY ', 4000000, '<p><strong><span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">M&ugrave;i hương đặc trưng:</span></strong><br />\r\n<br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Vani, Quả mộc qua, Bạch đậu khấu, Thường xu&acirc;n rừng, Qu&yacute;t, Hoa sung, Hoa mẫu đơn trắng, Lan Nam Phi, Hoa irit, Hoa violet, Hoa anh t&uacute;c, Xạ hương trắng, Phong lan.<br />\r\n<br />\r\n<strong>Phong c&aacute;ch:</strong><br />\r\n<br />\r\nNhẹ nh&agrave;ng, trầm lắng, vui tươi.</span></p>\r\n', 'Còn Hàng', 'Vip', 'Free', 'Như hình', '2014-06-23 00:00:00', '400931_10150487410118459_911624343_n.jpg', 'new', '400931_10150487410118459_911624343_n.jpg', '400931_10150487410118459_911624343_n.jpg', '400931_10150487410118459_911624343_n.jpg', '', 10, '<p>&nbsp;</p>\r\n\r\n<p>Để c&aacute;ch mặt bạn 5 cm v&agrave; xịt nhẹ kho&aacute;ng l&ecirc;n mặt&nbsp;</p>\r\n', 'có', 'có', 1, 5, 0),
(11, 'AKD102', 'Nước Hoa Victoria Secret', 650000, '<p><strong><span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">: Victoria&#39;s Secret</span></strong><br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Dream Angels Heavenly l&agrave; một trong số những nước hoa h&agrave;ng đầu tại Mỹ, được giới thiệu bởi Victoria&#39;s Secret với một pha trộn mềm mại, dịu nhẹ của hoa mẫu đơn v&agrave; xạ hương trắng. Dream Angels Heavenly trong suốt, s&aacute;ng ch&oacute;i với hương hoa tươi m&aacute;t v&agrave; ấm &aacute;p, mang đến những rung động mạnh mẽ, cảm gi&aacute;c thanh thản v&agrave; hạnh ph&uacute;c tuyệt đối.</span><br />\r\n<br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">M&ugrave;i hương đặc trưng:</span><br />\r\n<br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Vani, Quả mộc qua, Bạch đậu khấu, Thường xu&acirc;n rừng, Qu&yacute;t, Hoa sung, Hoa mẫu đơn trắng, Lan Nam Phi, Hoa irit, Hoa violet, Hoa anh t&uacute;c, Xạ hương trắng, Phong lan.<br />\r\n<br />\r\nPhong c&aacute;ch:<br />\r\n<br />\r\nNhẹ nh&agrave;ng, trầm lắng, vui tươi.</span></p>\r\n', 'Còn Hàng', 'Vip', 'Free', 'Như hình', '2014-06-23 00:00:00', 'nuoc-hoa.jpg', 'new', 'nuoc-hoa-1.jpg', 'nuoc-hoa-2.jpg', 'nuoc-hoa-3.jpg', '1.jpg', 2, '<p>Để c&aacute;ch mặt bạn 5 cm v&agrave; xịt nhẹ kho&aacute;ng l&ecirc;n mặt . Kh&ocirc;ng lau đi m&agrave; để kho&aacute;ng tự kh&ocirc; v&agrave; thấm đều tr&ecirc;n bề mặt da .</p>\r\n', 'có', 'có', 0, 7, 0),
(21, 'MP01', 'BB/CC Cream', 210000, '<p><span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif"><span style="color:#FF0000"><strong>Maybelline BB Cream Dream Fresh</strong></span> - d&ograve;ng sản phẩm<strong> BB Cream</strong> nổi tiếng của <strong>Maybelline</strong>. Sản phẩm l&agrave; sự kết hợp giữa dưỡng da v&agrave; makeup, cho bạn l&agrave;n da ho&agrave;n hảo chỉ trong 1 bước đơn giản.</span><br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Sản phẩm c&oacute; 8-in-1 gồm c&aacute;c c&ocirc;ng dụng:</span><br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">* Che giấu c&aacute;c khuyết điểm một c&aacute;ch kh&eacute;o l&eacute;o</span><br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">* Da mặt s&aacute;ng v&agrave; rạng rỡ hơn</span><br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">* Cải thiện t&ocirc;ng da, cho c&aacute;c v&ugrave;ng da đều m&agrave;u</span><br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">* Cho lớp nền mịn v&agrave; mượt m&agrave;<br />\r\n* Cung cấp độ ẩm cần thiết giữ cho da lu&ocirc;n được đ&agrave;n hồi tốt<br />\r\n* Tăng cường c&aacute;c dưỡng chất nu&ocirc;i dưỡng<br />\r\n* Bảo vệ da khỏi t&aacute;c hại của tia UV với SPF30<br />\r\n* Th&agrave;nh phần KH&Ocirc;NG chứa dầu th&iacute;ch hợp d&agrave;nh cho da nhờn.</span></p>\r\n', 'Hết Hàng', 'Vip', 'Free', 'Như hình', '2014-08-11 19:27:35', '1480613_243579572432356_8788858146901314034_n.jpg', '', '10157221_243579359099044_2710486669113236763_n.jpg', '10253848_243579615765685_8320068728078791086_n.jpg', 'mypham1.jpg', '', 1, '<p>123</p>\r\n', '', '', 0, 0, 0),
(22, 'MY02', 'Primer/Kem Lót', 300000, '<p><span style="color:#FF0000"><strong><span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Kem l&oacute;t Revlon Photoready Color Perfecting Primer</span></strong></span></p>\r\n\r\n<p><span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">- Tăng cường độ ẩm cho l&agrave;n da mềm mại, mịn m&agrave;ng tự nhi&ecirc;n kh&ocirc;ng t&igrave; vết</span><br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">- C&ocirc;ng thức đặc biệt gi&uacute;p căng da lấp đầy,che phủ lỗ ch&acirc;n l&ocirc;ng v&agrave; c&aacute;c nếp nhăn</span><br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">- Tạo l&agrave;n da tươi mới trẻ trung, thoải m&aacute;i v&agrave; đầy sức sống</span></p>\r\n', 'Còn Hàng', 'Vip', 'Free', 'Như hình', '2014-08-11 19:32:22', '10168221_243579349099045_2464514727080270619_n.jpg', 'new', '10253848_243579615765685_8320068728078791086_n.jpg', '10314601_244335302356783_3942027895916710168_n.jpg', '1920574_243580375765609_4576146394625653953_n.jpg', '', 1, '', '', 'có', 0, 0, 0),
(23, 'MP03', 'Foundation/Kem Nền', 350000, '<p><span style="color:#FF0000"><strong><span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Kem nền Revlon ColorStay Whipped Crème</span></strong></span><br />\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Tuy gọi là cream, nhưng không hề gây bí da. Texture giống như mousse, bạn sẽ cảm thấy như có một lớp lụa mỏng trên mặt, không khiến mặt bạn bị cakey hay tạo sự nặng nề. Cảm giác khi dùng nhẹ nhàng, không bị dày mặt. Công thức Paraben-free và Tact-free, sản phẩm cho lớp nền rất mỏng, mịn và mướt vô cùng, những khuyết điểm trên da có thể gần như không còn nhìn </span><span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">thấy sau khi trang điểm, cho một làn da không tì vết. Những sản phẩm che khuyết điểm sẽ không còn cần thiết vào lúc này. Đặc biệt, sản phẩm cho hiệu ứng làm mờ, rất khô ráo, không bóng nhờn. Điều tiết lượng dầu rất tốt, cho dù bạn có làn da khô thì nó cũng không khiến da mất đi độ ẩm. Thiết kế vỏ hộp bằng thủy tinh sang trọng, trông rất chuyên nghiệp. độ giữ dài được hãng cam kết đến 24h, sử dụng công thức cân bằng da cho cái nhìn hoàn hảo suốt cả ngày. Đủ tất cả cái màu.</span></p>\n', 'Còn Hàng', 'Vip', 'Free', 'Như hình', '2014-08-11 19:34:52', '1610110_245377142252599_7738241276730124641_n.jpg', '', '10245564_245377008919279_6004835697294389317_n.jpg', '1538862_243580402432273_1410267876808495233_n.jpg', '1538862_243580402432273_1410267876808495233_n.jpg', '', 1, '', '', 'có', 2, 0, 0),
(24, 'SN12', 'Son Nars', 1200000, '<p><strong><span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">TH&Ocirc;NG TIN THƯƠNG HIỆU</span></strong><br />\r\n&nbsp;</p>\r\n\r\n<p><span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Ng&agrave;y th&agrave;nh lập:N/A</span><br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Xuất xứ:Mỹ</span><br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Website:</span><a href="http://www.narscosmetics.com/" rel="nofollow nofollow" style="color: rgb(59, 89, 152); cursor: pointer; text-decoration: none; font-family: Helvetica, Arial, ''lucida grande'', tahoma, verdana, arial, sans-serif; line-height: 18px;" target="_blank">http://www.narscosmetics.com/</a><br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Fanpage:</span><a href="https://www.facebook.com/narscosmetics" rel="nofollow" style="color: rgb(59, 89, 152); cursor: pointer; text-decoration: none; font-family: Helvetica, Arial, ''lucida grande'', tahoma, verdana, arial, sans-serif; line-height: 18px;">https://www.facebook.com/narscosmetics</a><br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Nars l&agrave; một thương hiệu mỹ phẩm v&agrave; chăm s&oacute;c da thuộc tập đo&agrave;n Shiseido, được tạo dựng bởi Fran&ccedil;ois Nars, một nhiếp ảnh gia v&agrave; chuy&ecirc;n gia trang điểm nổi tiếng. D&ograve;ng mỹ phẩm n&agrave;y bắt đầu với 12 c&acirc;y son được b&agrave;y b&aacute;n tại Barneys New York, rồi từ đ&oacute; tiếp tục chinh phục thị trường ti&ecirc;u d&ugrave;ng bằng những sản phẩm đa năng kh&aacute;c nhau với kiểu d&aacute;ng bao b&igrave; theo trường ph&aacute;i tối giản.</span><br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Nars c&ograve;n g&acirc;y ấn tượng bởi những t&ocirc;ng m&agrave;u c&oacute; t&ecirc;n gọi nổi loạn như &lsquo;Orgasm&rsquo;, &lsquo;Deep Throat&rsquo;, &lsquo;Striptease,&rsquo; and &lsquo;Sex Machine&rsquo;. Phấn m&aacute; hồng NARS Orgasm l&agrave; một trong những sản phẩm b&aacute;n chạy nhất, đến độ c&oacute; hẳn một BST Orgasm gồm m&aacute; hồng, son b&oacute;ng, sơn m&oacute;ng tay, phấn tạo s&aacute;ng&hellip;</span><br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Một số sản phẩm ti&ecirc;u biểu của Nars như phấn hồng, phấn tạo khối m&agrave;u đồng, son m&ocirc;i v&agrave; đặc biệt l&agrave; bảng m&agrave;u mắt nổi tiếng tr&ecirc;n thế giới.</span></p>\r\n', 'Còn Hàng', 'Vip', 'Free', 'Như hình', '2014-08-11 19:44:21', '10353043_253701151420198_88412354525011617_n.jpg', 'new', '10414611_253697791420534_7029630954204021953_n.jpg', '10440878_253699228087057_5239875582369789949_n.jpg', '10514757_253701131420200_7329968938354320423_n.jpg', '', 1, '', 'có', 'có', 0, 14, 0),
(25, 'DG102', 'Skin Care/ Kem Dưỡng Da', 300000, '<p><strong><span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Estee Lauder Day Wear&nbsp;</span></strong><br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Kem dưỡng ẩm d&agrave;nh cho da thường đến da h&otilde;n hợp, bảo về da năng, chống l&atilde;o h&oacute;a, c&oacute; SPF 15</span><br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Loại mini, kh&ocirc;ng hộp</span></p>\r\n', 'Còn Hàng', 'Vip', 'Free', 'Như hình', '2014-08-11 19:47:29', 'gd.jpg', 'new', 'gd1.jpg', 'gd3.jpg', 'gd.jpg', '', 3, '', '', 'có', 0, 0, 0),
(26, 'DG12', 'Mặt nạ enzyme', 200000, '<p><span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif"><strong>Freeman Feeling Beautiful Facial Enzyme Mask, Pineapple</strong> &ndash; <strong>Mặt nạ chiết xuất từ quả Dứa</strong> (<em>150ml</em>) </span></p>\r\n\r\n<p><span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">&ndash;&nbsp;Mặt nạ enzyme n&agrave;y, với chiết xuất dứa v&agrave; AHA nhẹ nh&agrave;ng chăm s&oacute;c v&agrave; dưỡng ẩm cho da, để lại l&agrave;n da của bạn mềm mại, dẻo dai v&agrave; tr&ocirc;ng trẻ hơn.</span></p>\r\n', 'Còn Hàng', 'Vip', 'Free', 'Như hình', '2014-08-11 19:50:23', '10456800_251229755000671_5549089090165992939_n.jpg', 'new', '10353654_251229725000674_8580897584083244690_n.jpg', '10401451_251229708334009_3241728829656887095_n.jpg', '10334431_251229738334006_1047818683668096236_n.jpg', '', 3, '', 'có', '', 0, 17, 0),
(27, 'SC12', 'Nước hoa Victoria''s Secret', 220000, '<p><span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif"><strong>Victoria secret </strong>- thương hiệu nổi tiếng về chăm s&oacute;c sắc đẹp sẽ mang đến cho bạn l&agrave;n da mịn m&agrave;ng như mong đợi.&nbsp;</span><br />\r\n<br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif"><strong>Th&agrave;nh phần</strong>: nho, vitamin E, C, yến mạch, Hydrat... l&agrave;m trắng v&agrave; mềm da tr&ocirc;ng thấy lu&ocirc;n sau 36 tuần sử dụng</span><br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">C&aacute;ch sử dụng: Thoa đều l&ecirc;n to&agrave;n th&acirc;n v&agrave; m&aacute;t xa nhẹ nh&agrave;ng cho sản phẩm thấm đều v&agrave;o da. Đặc biệt, Sản phẩm th&iacute;ch ứng cho mọi l&agrave;n da v&agrave; ph&ugrave; hợp với tất cả c&aacute;c m&ugrave;a trong năm</span><br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Sữa dưỡng&nbsp;</span><span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">da hay c&ograve;n gọi l&agrave; lotion được lấy cảm hứng từ một chuyện t&igrave;nh l&atilde;ng mạn, với m&agrave;u s&aacute;ng hồng của hoa l&ecirc; v&agrave; sự tuyệt vời của hoa li tạo n&ecirc;n một hương hoa thơm ho&agrave;n hảo đầy quyến rũ.<br />\r\n- Nước xịt to&agrave;n th&acirc;n Body Mist VS d&ograve;ng Fantasy.<br />\r\nThay v&igrave; d&ugrave;ng nước hoa, xịt body mang đến cho c&aacute;c bạn hương thơm thanh m&aacute;t, dịu ngọt v&agrave;o những buổi trưa h&egrave; nắng n&oacute;ng.<br />\r\nD&ograve;ng n&agrave;y cũng nằm trong bộ sưu tập lotion của VS v&agrave; m&ugrave;i thơm cũng tương tự như lotion<br />\r\nDung t&iacute;ch: 250ml</span></p>\r\n', 'Còn Hàng', 'Vip', 'Free', 'Như hình', '2014-08-11 19:54:16', '10366294_251230915000555_1381611051268718666_n.jpg', 'new', '10366305_251230888333891_574412876080466114_n.jpg', '10461462_251230901667223_1822157798627551985_n.jpg', '10366294_251230915000555_1381611051268718666_n.jpg', '', 2, '', 'có', '', 0, 21, 0),
(28, 'DA12', 'Nước Hoa Dream Angels', 950000, '<p>Nước Hoa Dream Angels</p>\r\n\r\n<p><span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">C&ugrave;ng nh&atilde;n hiệu: <strong>Victoria&#39;s Secret</strong></span><br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Dream Angels Heavenly l&agrave; một trong số những nước hoa h&agrave;ng đầu tại Mỹ, được giới thiệu bởi Victoria&#39;s Secret với một pha trộn mềm mại, dịu nhẹ của hoa mẫu đơn v&agrave; xạ hương trắng. Dream Angels Heavenly trong suốt, s&aacute;ng ch&oacute;i với hương hoa tươi m&aacute;t v&agrave; ấm &aacute;p, mang đến những rung động mạnh mẽ, cảm gi&aacute;c thanh thản v&agrave; hạnh ph&uacute;c tuyệt đối.</span><br />\r\n<br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">M&ugrave;i hương đặc trưng:</span><br />\r\n<br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Vani, Quả mộc qua, Bạch đậu khấu, Thường xu&acirc;n rừng, Qu&yacute;t, Hoa sung, Hoa mẫu đơn trắng, Lan Nam Phi, Hoa irit, Hoa violet, Hoa anh t&uacute;c, Xạ hương trắng, Phong lan.<br />\r\n<br />\r\nPhong c&aacute;ch:<br />\r\n<br />\r\nNhẹ nh&agrave;ng, trầm lắng, vui tươi.</span></p>\r\n', 'Còn Hàng', 'Vip', 'Free', 'Như hình', '2014-08-11 19:58:52', '10464100_251427448314235_877430323603318127_n.jpg', 'new', '10175037_251427478314232_6544035196121181711_n.jpg', '10366294_251230915000555_1381611051268718666_n.jpg', '10366305_251230888333891_574412876080466114_n.jpg', '', 2, '', 'có', '', 0, 8, 0),
(29, 'BD20', 'Sữa Tắm VS', 550000, '<p><span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif"><em><strong>Victoria secret</strong></em> - thương hiệu nổi tiếng về chăm s&oacute;c sắc đẹp sẽ mang đến cho bạn l&agrave;n da mịn m&agrave;ng như mong đợi.&nbsp;</span><br />\r\n<br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Th&agrave;nh phần: nho, vitamin E, C, yến mạch, Hydrat... l&agrave;m trắng v&agrave; mềm da tr&ocirc;ng thấy lu&ocirc;n sau 36 tuần sử dụng</span></p>\r\n\r\n<p><span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Dung t&iacute;ch: 250ml</span><br />\r\n&nbsp;</p>\r\n', 'Còn Hàng', 'Vip', 'Free', 'Như hình', '2014-08-11 20:04:00', 'Nike-Free-Run-2013-Women-Running-Shoes-2.jpg', 'new', 'Nike-Free-Run-2013-Women-Running-Shoes-2.jpg', 'Nike-Inc.-logo.jpg', 'high-top-shoes-for-women-shoes-images-brcla-0mo8ifoe.jpg', '', 4, '<p><span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Thoa đều l&ecirc;n to&agrave;n th&acirc;n v&agrave; m&aacute;t xa nhẹ nh&agrave;ng cho sản phẩm thấm đều v&agrave;o da. Đặc biệt, Sản phẩm th&iacute;ch ứng cho mọi ', 'có', 'có', 0, 11, 0),
(30, 'ST93', 'Sữa rửa mặt St. Ives', 950000, '<p><span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif"><strong>D&ograve;ng sửa rửa mặt St. Ives</strong> đến từ Mỹ l&agrave; sản phẩm được mệnh danh Thương Hiệu H&agrave;ng Đầu do cty Uniliver Mỹ ph&acirc;n phối. Đạt giải thưởng do độc giả Allure b&igrave;nh chọn.</span><br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Sản phẩn nổi bật với t&iacute;nh năng tẩy tế b&agrave;o chết với c&aacute;c hạt Scrub massage . Hiệu quả ngay từ lần đầu sử dụng.</span><br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Tẩy tế b&agrave;o chết St.Ives với c&ocirc;ng thức mới cực kỳ nhẹ dịu đủ an to&agrave;n cho những l&agrave;n da nhạy cảm nhất.</span><br />\r\n<span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Tẩy tế b&agrave;o chết St.Ives với th&agrave;n</span><span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">h phần 100% từ thi&ecirc;n nhi&ecirc;n, l&agrave;m sạch s&acirc;u lỗ ch&acirc;n l&ocirc;ng, v&agrave; gi&uacute;p ngăn ngừa mụn trước khi ch&uacute;ng h&igrave;nh th&agrave;nh.<br />\r\nSản phẩm được nghi&ecirc;n cứu một c&aacute;ch kỹ lưỡng v&agrave; được chọn lọc để mang đến cho bạn những th&agrave;nh phần tốt nhất từ thi&ecirc;n nhi&ecirc;n. Với c&ocirc;ng thức tuyệt vời cho một l&agrave;n da mềm mại, tươi s&aacute;ng.<br />\r\nTh&agrave;nh phần ch&iacute;nh từ quả Mơ - một loại quả c&oacute; chứa tỉ lệ carotenoids (Vitamin A) cao nhất v&agrave; c&oacute; khả năng chống oxy h&oacute;a cực cao v&agrave; hiệu quả.<br />\r\nSức mạnh của c&aacute;c th&agrave;nh phần trong sản phẩm t&aacute;c động l&ecirc;n da nhẹ nh&agrave;ng v&agrave; nu&ocirc;i dưỡng l&agrave;n da tươi trẻ.<br />\r\nC&oacute; thể sử dụng sản phẩm 3-4 lần/ tuần hoặc gia giảm t&ugrave;y theo từng l&agrave;n da th&iacute;ch hợp.<br />\r\nTẩy da chết St ives 170g&nbsp;<br />\r\nNgo&agrave;i việc tẩy tế b&agrave;o chết c&ograve;n được Chuy&ecirc;n d&ugrave;ng cho việc l&agrave;m sạch mụn c&aacute;m (ch&oacute;p mũi) v&agrave; mụn đầu đen đấy ạ. Tẩy tế b&agrave;o chết hiệu quả với c&aacute;c hạt tẩy ho&agrave;n to&agrave;n từ thi&ecirc;n nhi&ecirc;n. L&agrave;m da mềm mịn m&agrave;ng ngay sau khi d&ugrave;ng.</span></p>\r\n', 'Còn Hàng', 'Vip', 'Free', 'Như hình', '2014-08-11 20:07:14', '10268586_249386945184952_3254973326861472222_n.jpg', 'new', '10320590_249386968518283_4445029970684000105_n.jpg', '10320590_249386968518283_4445029970684000105_n.jpg', '10363713_249386955184951_3618805428598496788_n.jpg', '', 1, '<p><span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif">Sử dụng từ 2 đến 3 lần một tuần</span></p>\r\n', '', 'có', 0, 1, 0),
(31, 'sm12', 'Son NYX Matte ', 250000, '<p><span style="font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif"><strong>NYX Matte Lipstick</strong> với c&aacute;c m&agrave;u đậm v&agrave; phong ph&uacute;, kh&ocirc;ng b&oacute;ng, kh&ocirc;ng nhũ, hợp thời trang gi&uacute;p cho đ&ocirc;i m&ocirc;i c&oacute; m&agrave;u sắc rực rỡ</span></p>\r\n', 'Hết Hàng', 'Vip', 'Free', 'Như hình', '2014-08-11 20:09:36', '10155590_242856332504680_4784502072122982900_n.jpg', 'new', '10156007_242796059177374_8332020482073317771_n.jpg', '1939713_242789669178013_5184154928674056786_n.jpg', '10245384_242856352504678_2902220970899530903_n.jpg', '', 1, '<p>Đọc k&iacute; hướng dẫn sử dụng trước khi d&ugrave;ng&nbsp;<img alt="heart" src="http://localhost/suongnguyen/ckeditor/ckeditor/plugins/smiley/images/heart.png" style="height:23px; width:23px" title="heart" /></p>\r\n', 'có', 'có', 0, 23, 13),
(40, 'demo', 'sản phẩm', 450, '<p>demo</p>\r\n', 'Còn Hàng', 'Vip', 'Free', 'Như hình', '2014-10-29 14:49:45', '8.jpg', 'new', '9.jpg', '10.jpg', '11.jpg', '', 11, '<p>demo</p>\r\n', 'có', 'có', 0, 18, 7),
(41, 'demo3', 'demo3', 0, '<p>demo3</p>\r\n', 'Còn Hàng', 'Vip', 'Free', 'Như hình', '2014-10-29 14:53:13', '4.jpg', 'new', '5.jpg', '6.jpg', '7.jpg', '', 11, '<p>demo3</p>\r\n', '', 'có', 0, 0, 7),
(43, 'example', 'example', 123, '<p>example</p>\r\n', 'Còn Hàng', 'Vip', 'Free', 'Như hình', '2014-10-30 09:52:44', '234.jpg', 'new', '234.jpg', '234.jpg', '234.jpg', '', 13, '<p>example</p>\r\n', '', 'có', 0, 2, 7),
(44, 'list', 'list', 0, '<p>list</p>\r\n', 'Còn Hàng', 'Vip', 'Free', 'Như hình', '2014-10-30 09:56:05', '2PM-Nichkhun_1409195347_af.jpg', 'new', '2PM-Nichkhun_1409195347_af.jpg', '2PM-Nichkhun_1409195347_af.jpg', '2PM-Nichkhun_1409195347_af.jpg', '', 0, '<p>list</p>\r\n', 'có', 'có', 0, 11, 9),
(45, 'LND', 'lưu ngọc diệp', 450000, '<p>lưu ngọc diệp</p>\r\n', 'Còn Hàng', 'Vip', 'Free', 'Như hình', '2014-10-30 14:14:49', '10488133_1513885605519752_7481681114893636470_n.jpg', 'new', '10488133_1513885605519752_7481681114893636470_n.jpg', '10488133_1513885605519752_7481681114893636470_n.jpg', '10488133_1513885605519752_7481681114893636470_n.jpg', '', 0, '<p>lưu ngọc diệp</p>\r\n', '', 'có', 0, 1, 9),
(46, 'dm102', 'Kem Tan mỡ', 450000, '<p>Kem Tan mỡ</p>\r\n', 'Còn Hàng', 'Vip', 'Free', 'Như hình', '2014-10-30 14:23:51', '10488133_1513885605519752_7481681114893636470_n.jpg', 'new', '10488133_1513885605519752_7481681114893636470_n.jpg', '10488133_1513885605519752_7481681114893636470_n.jpg', '10488133_1513885605519752_7481681114893636470_n.jpg', '', 0, '<p>Kem Tan mỡ</p>\r\n', '', 'có', 0, 0, 10);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE IF NOT EXISTS `ratings` (
  `id` int(10) NOT NULL,
  `total_votes` int(5) NOT NULL DEFAULT '0',
  `total_value` int(5) NOT NULL DEFAULT '0',
  `used_ips` longtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `total_votes`, `total_value`, `used_ips`, `date`) VALUES
(2, 0, 0, '', '2014-07-26 17:00:00'),
(1, 1, 5, 'a:1:{i:0;s:3:"::1";}', '2014-07-26 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
`id` int(11) NOT NULL,
  `content` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `day` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `view` int(11) NOT NULL,
  `tittle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `username` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `phone` int(12) NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `luotmua` int(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`, `created`, `modified`, `status`, `phone`, `address`, `image`, `luotmua`) VALUES
(1, 'xiloitn', 'bf948eaca565d46723f7421e75f7b521ba5a8c2b', 'xiloitn@gmail.com', 'king', '2015-02-05 15:49:05', '2015-02-05 15:49:05', 1, 97896866, 'Đà Nẵng', '', 0),
(2, 'dat123', 'bf9487421e75f7b521ba5a8c2beaca565d46723f', 'tuan@gmail.com', 'king', '2014-10-01 16:05:06', '2014-10-01 16:05:06', 1, 0, '', '', 0),
(3, 'scanhearts', 'eaca565d46723feaca565d46723f46723feaca565', 'Scanh@gmail.com', 'king', '2014-10-02 20:55:32', '2014-10-02 20:55:32', 1, 0, '', '', 0),
(4, '12312', '4f668fffaecb4d2eee19038c2f95dade0802f2f1', '123@gmail.com', NULL, '2014-10-05 23:10:57', '2014-10-05 23:10:57', 1, 0, '', '', 0),
(5, 'ohyeah', 'ecb4d2eee19038c2f95dade0802f2f14f668fffa', 'star@gmail.com', NULL, '2014-10-05 23:11:30', '2014-10-05 23:11:30', 1, 0, '', '', 0),
(6, 'xiloitn2', 'ecb4d2f95dade0802f2f14f668fffa2eee19038c', NULL, NULL, '2014-10-05 23:15:34', '2014-10-05 23:15:34', 1, 0, '', '', 0),
(7, 'thunderclap3010', 'ecb4d2f95dade68fffa2eee19038c0802f2f14f6', NULL, NULL, '2014-10-05 23:20:06', '2014-10-05 23:20:06', 1, 0, '', '', 0),
(12, 'admin', '0ebdbd774dabe36dac774ccc5f11b9d71562750a', 'suongnguyen@gmail.com', NULL, '2014-10-10 11:32:13', '2014-10-10 11:32:13', 1, 0, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `view`
--

CREATE TABLE IF NOT EXISTS `view` (
`id` int(60) NOT NULL,
  `id_view` int(60) NOT NULL,
  `view` int(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=533 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `view`
--

INSERT INTO `view` (`id`, `id_view`, `view`) VALUES
(242, 4, 104),
(246, 14, 20),
(257, 1, 404),
(260, 13, 42),
(299, 12, 3),
(312, 5, 65),
(345, 2, 1),
(346, 9, 4),
(349, 20, 2),
(351, 21, 23),
(353, 11, 92),
(354, 8, 13),
(358, 23, 2),
(385, 29, 29),
(387, 24, 50),
(393, 30, 7),
(397, 26, 51),
(412, 27, 15),
(453, 31, 3),
(467, 28, 8),
(525, 25, 4),
(526, 22, 5),
(528, 32, 2);

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE IF NOT EXISTS `views` (
`id` int(60) NOT NULL,
  `product_id` int(60) NOT NULL,
  `view` int(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=531 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `views`
--

INSERT INTO `views` (`id`, `product_id`, `view`) VALUES
(242, 4, 104),
(246, 14, 20),
(257, 1, 404),
(260, 13, 42),
(299, 12, 3),
(312, 5, 65),
(345, 2, 1),
(346, 9, 4),
(349, 20, 2),
(351, 21, 22),
(353, 11, 86),
(354, 8, 3),
(358, 23, 2),
(385, 29, 28),
(387, 24, 45),
(393, 30, 7),
(397, 26, 47),
(412, 27, 9),
(453, 31, 3),
(467, 28, 7),
(525, 25, 4),
(526, 22, 5),
(527, 24, 0),
(528, 24, 0),
(529, 24, 0),
(530, 26, 0);

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE IF NOT EXISTS `vote` (
  `counter` int(8) NOT NULL DEFAULT '0',
  `value` int(8) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE IF NOT EXISTS `voucher` (
`id` int(60) NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vouchers`
--

CREATE TABLE IF NOT EXISTS `vouchers` (
`id` int(60) NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `blands`
--
ALTER TABLE `blands`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderitems`
--
ALTER TABLE `orderitems`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `view`
--
ALTER TABLE `view`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `views`
--
ALTER TABLE `views`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vouchers`
--
ALTER TABLE `vouchers`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `blands`
--
ALTER TABLE `blands`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `orderitems`
--
ALTER TABLE `orderitems`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=271;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=168;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `view`
--
ALTER TABLE `view`
MODIFY `id` int(60) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=533;
--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
MODIFY `id` int(60) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=531;
--
-- AUTO_INCREMENT for table `voucher`
--
ALTER TABLE `voucher`
MODIFY `id` int(60) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vouchers`
--
ALTER TABLE `vouchers`
MODIFY `id` int(60) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
