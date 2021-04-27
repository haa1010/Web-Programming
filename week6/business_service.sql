-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 19, 2021 lúc 04:19 PM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `business_service`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `biz_categories`
--

CREATE TABLE `biz_categories` (
  `BusinessID` int(11) DEFAULT NULL,
  `CategoryID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `businesses`
--

CREATE TABLE `businesses` (
  `BusinessID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Telephone` varchar(11) NOT NULL,
  `URL` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `businesses`
--

INSERT INTO `businesses` (`BusinessID`, `Name`, `Address`, `City`, `Telephone`, `URL`) VALUES
(0, 'c', 'a', 'b', 'd', 'e'),
(1, 'ac', 'aa', 'ab', 'ad', 'ae'),
(2, '', '', '', '', ''),
(3, '', '', '', '', ''),
(4, '', '', '', '', ''),
(5, '', '', '', '', ''),
(6, '', '', '', '', ''),
(7, '', '', '', '', ''),
(8, '', '', '', '', ''),
(9, '', '', '', '', ''),
(10, '', '', '', '', ''),
(11, '', '', '', '', ''),
(12, '', '', '', '', ''),
(13, '', '', '', '', ''),
(14, '', '', '', '', ''),
(15, '', '', '', '', ''),
(16, '', '', '', '', ''),
(17, '', '', '', '', ''),
(18, '', '', '', '', ''),
(19, '', '', '', '', ''),
(20, '', '', '', '', ''),
(21, '', '', '', '', ''),
(22, '', '', '', '', ''),
(23, '', '', '', '', ''),
(24, '', '', '', '', ''),
(25, '', '', '', '', ''),
(26, '', '', '', '', ''),
(27, '', '', '', '', ''),
(28, '', '', '', '', ''),
(29, '', '', '', '', ''),
(30, '', '', '', '', ''),
(31, '', '', '', '', ''),
(32, '', '', '', '', ''),
(33, '', '', '', '', ''),
(34, '', '', '', '', ''),
(35, '', '', '', '', ''),
(36, '', '', '', '', ''),
(37, '', '', '', '', ''),
(38, '', '', '', '', ''),
(39, '', '', '', '', ''),
(40, '', '', '', '', ''),
(41, '', '', '', '', ''),
(42, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `CategoryID` int(11) NOT NULL,
  `Title` varchar(50) DEFAULT NULL,
  `Description` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`CategoryID`, `Title`, `Description`) VALUES
(1, '2', '3'),
(2, '7', '4'),
(3, '3', '3'),
(4, '4', '4'),
(5, '5', '5'),
(6, '6', '6');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `biz_categories`
--
ALTER TABLE `biz_categories`
  ADD KEY `BusinessID` (`BusinessID`),
  ADD KEY `CategoryID` (`CategoryID`);

--
-- Chỉ mục cho bảng `businesses`
--
ALTER TABLE `businesses`
  ADD PRIMARY KEY (`BusinessID`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`CategoryID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `biz_categories`
--
ALTER TABLE `biz_categories`
  ADD CONSTRAINT `biz_categories_ibfk_1` FOREIGN KEY (`BusinessID`) REFERENCES `businesses` (`BusinessID`),
  ADD CONSTRAINT `biz_categories_ibfk_2` FOREIGN KEY (`CategoryID`) REFERENCES `categories` (`CategoryID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
