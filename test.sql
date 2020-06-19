-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 19, 2020 lúc 05:58 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `test`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `data`
--

CREATE TABLE `data` (
  `Maten` int(50) NOT NULL,
  `Maloai` int(200) DEFAULT NULL,
  `Tenmon` text COLLATE utf8_unicode_ci NOT NULL,
  `Calories/100g` double NOT NULL,
  `TotalFat(g)` double NOT NULL,
  `Cholesterol(mg)` double NOT NULL,
  `Sodium(g)` double NOT NULL,
  `Protein(g)` double NOT NULL,
  `TotalCarbohydrates` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `data`
--

INSERT INTO `data` (`Maten`, `Maloai`, `Tenmon`, `Calories/100g`, `TotalFat(g)`, `Cholesterol(mg)`, `Sodium(g)`, `Protein(g)`, `TotalCarbohydrates`) VALUES
(110, 1, 'Thịt Lợn', 226, 12, 92, 70, 28, 0),
(111, 1, 'Thịt Bò', 291, 20, 87, 63, 26, 0),
(112, 1, 'Cánh Gà', 328, 24, 82, 393, 17, 9.8),
(210, 2, 'Rau cải xoắn', 28, 0.4, 0, 23, 1.9, 5.6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image_data`
--

CREATE TABLE `image_data` (
  `Maten` int(255) NOT NULL,
  `URL` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `image_data`
--

INSERT INTO `image_data` (`Maten`, `URL`) VALUES
(110, 'https://cdn.tgdd.vn/Files/2018/06/04/1093177/bi-quyet-lam-mem-thit-lon-trong-cac-mon-an-.jpg'),
(111, 'https://www.hoidaubepaau.com/wp-content/uploads/2017/12/cach-chon-thit-bo-tuoi.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaithucpham`
--

CREATE TABLE `loaithucpham` (
  `Maloai` int(50) NOT NULL,
  `Loai` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaithucpham`
--

INSERT INTO `loaithucpham` (`Maloai`, `Loai`) VALUES
(1, 'Thịt'),
(2, 'Rau'),
(3, 'Củ'),
(4, 'Hạt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `member`
--

CREATE TABLE `member` (
  `id` int(15) NOT NULL,
  `ho_ten` varchar(50) NOT NULL,
  `ten_dang_nhap` varchar(50) NOT NULL,
  `mat_khau` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `member`
--

INSERT INTO `member` (`id`, `ho_ten`, `ten_dang_nhap`, `mat_khau`) VALUES
(1, '', '', ''),
(2, 'admin', '18021245', '1213'),
(3, 'admin', 'Dinhduong', '123'),
(4, 'admin', 'admin', '111'),
(5, 'admin', '1111111', '1111'),
(6, 'admin', '222', '131'),
(7, 'admin', '222323', '313'),
(8, 'admin', '222323?', '?dds'),
(9, 'Thu', 'cherry', 'ghggjgj'),
(10, '111', '23323', '?ds'),
(11, '111', 'gdsfdsffe', 'r?'),
(12, 'admin', 'thutrinhvn21@gmail.com', '123r'),
(13, 'admin', 'thutrinhvn21@gmail.comt', 'thu'),
(14, 'admin', '180212455', 'grgf'),
(15, '123', '111', '111'),
(16, '111', 'rg', 'êfwd'),
(17, '111', 'rgf', 'aa'),
(18, '111', 'rgfdf', '?'),
(19, 'admin', '18021245kn', 'nnbmnm'),
(20, 'admin', '18021245knd', '??');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `userinfor`
--

CREATE TABLE `userinfor` (
  `id` int(15) NOT NULL,
  `sex` varchar(3) NOT NULL,
  `age` int(10) NOT NULL,
  `weight` int(10) NOT NULL,
  `height` int(10) NOT NULL,
  `activity_level` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`Maten`),
  ADD KEY `Maloai` (`Maloai`);

--
-- Chỉ mục cho bảng `image_data`
--
ALTER TABLE `image_data`
  ADD PRIMARY KEY (`Maten`);

--
-- Chỉ mục cho bảng `loaithucpham`
--
ALTER TABLE `loaithucpham`
  ADD PRIMARY KEY (`Maloai`);

--
-- Chỉ mục cho bảng `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `userinfor`
--
ALTER TABLE `userinfor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `member`
--
ALTER TABLE `member`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `userinfor`
--
ALTER TABLE `userinfor`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `data`
--
ALTER TABLE `data`
  ADD CONSTRAINT `data_ibfk_1` FOREIGN KEY (`Maloai`) REFERENCES `loaithucpham` (`Maloai`);

--
-- Các ràng buộc cho bảng `image_data`
--
ALTER TABLE `image_data`
  ADD CONSTRAINT `image_data_ibfk_1` FOREIGN KEY (`Maten`) REFERENCES `data` (`Maten`);

--
-- Các ràng buộc cho bảng `userinfor`
--
ALTER TABLE `userinfor`
  ADD CONSTRAINT `FK_Id` FOREIGN KEY (`id`) REFERENCES `member` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
