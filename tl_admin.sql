-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 01, 2017 at 09:28 PM
-- Server version: 5.5.25
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tl_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `ctxuat`
--

CREATE TABLE `ctxuat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_hh` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `chietkhau` int(11) NOT NULL,
  `tongtien` int(11) NOT NULL,
  `tongtienck` int(11) NOT NULL,
  `tongtiensck` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hanghoa`
--

CREATE TABLE `hanghoa` (
  `id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gia_nhap` int(11) NOT NULL,
  `gia_xuat` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hanghoa`
--

INSERT INTO `hanghoa` (`id`, `ten`, `gia_nhap`, `gia_xuat`, `soluong`) VALUES
('HH1', 'Hang Hoa 1', 24000, 0, 0),
('HH10', 'Hang Hoa 10', 110000, 0, 0),
('HH11', 'Hang Hoa 11', 120000, 0, 0),
('HH12', 'Hang Hoa 12', 130000, 0, 0),
('HH13', 'Hang Hoa 13', 140000, 0, 0),
('HH14', 'Hang Hoa 14', 75000, 0, 0),
('HH15', 'Hang Hoa 15', 70000, 0, 0),
('HH16', 'Hang Hoa 16', 65000, 0, 0),
('HH17', 'Hang Hoa 17', 100000, 0, 0),
('HH18', 'Hang Hoa 18', 110000, 0, 0),
('HH19', 'Hang Hoa 19', 120000, 0, 0),
('HH2', 'Hang Hoa 2', 21000, 0, 0),
('HH20', 'Hang Hoa 20', 130000, 0, 0),
('HH3', 'Hang Hoa 3', 18000, 0, 0),
('HH4', 'Hang Hoa 4', 15000, 0, 0),
('HH5', 'Hang Hoa 5', 80000, 0, 0),
('HH6', 'Hang Hoa 6', 75000, 0, 0),
('HH7', 'Hang Hoa 7', 70000, 0, 0),
('HH8', 'Hang Hoa 8', 65000, 0, 0),
('HH9', 'Hang Hoa 9', 100000, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hoadonxuat`
--

CREATE TABLE `hoadonxuat` (
  `id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `id_kh` int(11) NOT NULL,
  `ngayxuat` datetime NOT NULL,
  `tongtien` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(52) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `fullname`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'baby.cyrax@gmail.com', 'Nguyễn Đỗ Chinh Trung');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
