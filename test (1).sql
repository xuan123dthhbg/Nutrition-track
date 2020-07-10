-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 10, 2020 lúc 06:21 AM
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
-- Cấu trúc bảng cho bảng `addfoodbreakfast`
--

CREATE TABLE `addfoodbreakfast` (
  `Maten` int(50) NOT NULL,
  `id` int(50) NOT NULL,
  `idBF` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `addfoodbreakfast`
--

INSERT INTO `addfoodbreakfast` (`Maten`, `id`, `idBF`) VALUES
(111, 0, 1),
(519, 71, 2),
(112, 71, 3),
(117, 71, 4),
(112, 73, 5),
(123, 73, 6),
(110, 74, 7),
(115, 75, 8),
(110, 76, 9);

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
(113, 1, 'Đùi gà', 184, 9, 127, 98, 24, 0),
(114, 1, 'Ức Gà', 165, 3.6, 85, 74, 31, 0),
(115, 1, 'Cá Hồi', 206, 12, 63, 61, 22, 0),
(116, 1, 'Cá Trắm', 162, 7.2, 84, 63, 23, 0),
(117, 1, 'Cá Chép', 162, 7.2, 84, 63, 23, 0),
(118, 1, 'Cá Rô Phi', 128, 2.7, 57, 56, 26, 0),
(119, 1, 'Cá Basa', 144, 7.2, 66, 119, 19, 0),
(120, 1, 'Thịt Dê', 143, 3, 75, 405, 27, 0),
(121, 1, 'Thịt Trâu', 238, 15, 83, 73, 24, 0),
(122, 1, 'Mực Nướng', 164, 2.1, 96, 460, 30, 4.4),
(123, 1, 'Tôm', 119, 1.7, 211, 947, 23, 1.5),
(124, 1, 'Cua', 83, 0.7, 97, 395, 18, 0),
(125, 1, 'Ốc', 90, 1.4, 50, 70, 16, 2),
(126, 1, 'Ngao', 148, 2, 67, 1202, 26, 5.1),
(210, 2, 'Rau cải xoắn', 28, 0.4, 0, 23, 1.9, 5.6),
(211, 2, 'Rau Bắp Cải', 23, 0.1, 0, 8, 1.3, 5.5),
(212, 2, 'Súp Lơ', 23, 0.5, 0, 15, 1.8, 4.1),
(213, 2, 'Rau Xà Lách', 24, 0.2, 0, 37, 1.5, 5),
(214, 2, 'Rau Muống\r\n', 23, 0.3, 0, 70, 3, 3.8),
(215, 2, 'Cải Thảo', 12, 0.2, 0, 11, 1.1, 2.2),
(216, 2, 'Rau Chân Vịt', 23, 0.3, 0, 70, 3, 3.8),
(217, 2, 'Măng Tây', 22, 0.2, 0, 14, 2.4, 4.1),
(218, 2, 'Đậu Đũa', 35, 0.3, 0, 1, 1.9, 7.9),
(219, 2, 'Hành Lá', 32, 1.2, 0, 16, 1.8, 7.3),
(220, 2, 'Đậu Bắp', 40, 1, 24, 16, 1.2, 6.6),
(221, 2, 'Rau Thơm', 176, 4, 0, 13, 32, 7),
(222, 2, 'Mướp', 56, 0.3, 0, 21, 0.7, 14),
(310, 3, 'Dâu Tây', 32, 0.3, 0, 1, 0.7, 7.7),
(311, 3, 'Quả Bơ', 160, 15, 0, 160, 15, 0),
(312, 3, 'Quả Táo', 52, 0.2, 0, 1, 0.3, 14),
(313, 3, 'Quả Cam', 49, 0.1, 0, 1, 0.9, 13),
(314, 3, 'Quả Chuối', 89, 0.3, 0, 1, 1.1, 23),
(315, 3, 'Quả Bưởi', 38, 0, 0, 1, 0.8, 96),
(316, 3, 'Quả Xoài', 60, 0.4, 0, 1, 0.8, 15),
(317, 3, 'Quả Dứa (Thơm)', 50, 0.1, 0, 1, 0.5, 13),
(318, 3, 'Quả Đào', 39, 0.3, 0, 0, 0.9, 9.5),
(319, 3, 'Quả Ổi', 68, 1, 0, 2, 2.6, 14),
(320, 3, 'Quả Mận', 46, 0.3, 0, 0, 0.7, 11),
(321, 3, 'Quả Mơ', 48, 0.4, 0, 1, 1.4, 11),
(322, 3, 'Quả Lê', 57, 0.1, 0, 1, 0.4, 15),
(323, 3, 'Dưa Hấu', 30, 0.1, 0, 1, 0.6, 7.6),
(440, 3, 'Khoai Lang', 90, 0.1, 0, 36, 2, 21),
(441, 3, 'Khoai Tây', 93, 0.1, 0, 535, 2.5, 21),
(442, 3, 'Hành Tây', 44, 0.2, 0, 3, 1.4, 166),
(443, 3, 'Củ Cải', 16, 0.1, 0, 39, 0.7, 3.4),
(444, 3, 'Củ Đậu', 127, 0.5, 0, 1, 8.7, 23),
(445, 3, 'Cà Rốt', 35, 0.2, 0, 58, 0.8, 8.2),
(446, 3, 'Củ Dền', 44, 0.2, 0, 77, 1.7, 10),
(447, 3, 'Su Hào', 27, 0.1, 0, 20, 1.7, 6.2),
(510, 4, 'Hạt Hướng Dương', 546, 50, 0, 6008, 19, 15),
(511, 4, 'Đậu Phộng (Hạt Lạc)', 587, 50, 0, 410, 24, 21),
(512, 4, 'Hạt Chia', 486, 31, 0, 16, 17, 42),
(513, 4, 'Hạt Vừng', 565, 48, 0, 11, 17, 26),
(514, 4, 'Hạt Mắc Ca', 718, 76, 0, 5, 7.9, 14),
(515, 4, 'Hạt Bí', 446, 19, 0, 18, 19, 54),
(516, 4, 'Hạt Dẻ', 245, 2.2, 0, 2, 3.2, 5.3),
(517, 4, 'Hạt Sen', 89, 0.5, 0, 1, 4.1, 17),
(518, 4, 'Hạt Điều', 574, 46, 0, 640, 15, 33),
(519, 4, 'Hạt Dẻ Cười', 569, 46, 0, 428, 21, 28);

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
(111, 'https://www.hoidaubepaau.com/wp-content/uploads/2017/12/cach-chon-thit-bo-tuoi.jpg'),
(112, 'https://media3.scdn.vn/img4/2020/04_17/Kqz6Vy4tS9jcPLC38a9K_simg_de2fe0_500x500_maxb.jpg'),
(113, 'https://product.hstatic.net/1000385415/product/dui_ga_goc_tu_318b7ee8410945aba31dfc8085b2cb32_master.gif'),
(114, 'https://vcdn-vnexpress.vnecdn.net/2020/05/05/thit-uc-ga-6547-1588697482.jpg'),
(115, 'https://media.suckhoedoisong.vn/Images/nguyenkhanh/2019/07/25/ca_hoi.jpg'),
(116, 'https://zecook.vn/media/ckfinder/images/Food/1/6/Phi_le_ca_tram_den_27/fillet_ca.jpg'),
(117, 'https://nghebep.com/wp-content/uploads/2018/03/ca-chep.jpg'),
(118, 'https://image.plo.vn/w653/Uploaded/2020/ycivopcg/2016_05_16/rophi_pxlo.jpg'),
(119, 'https://saithanhfoods.com/wp-content/uploads/2020/03/C%C3%A1-basa-c%E1%BA%AFt-kh%C3%BAc-l%C3%A0m-s%E1%BA%A1ch.jpg'),
(120, 'https://topliffstara.com/wp-content/uploads/2018/08/an-thit-de-co-tac-dung-gi-1.jpg'),
(121, 'https://i.imgur.com/0igNukq.jpg'),
(122, 'https://beptruong.edu.vn/wp-content/uploads/2013/07/muc-nuong-kieu-han-quoc-cay.jpg'),
(123, 'https://cdn.vietnambiz.vn/stores/news_dataimages/quynhtd/102018/30/15/0620_tom-he-quang-ninh.jpg'),
(124, 'https://lh3.googleusercontent.com/proxy/Imj4gUF36OhcY11MNdIxmY3npkH1bjVv8cwFZa8LSXyWiiHlOc0qU8lcM9mUq1x5GOP0MW0_jlPj1P_Z-MMYnK_8WDo7Tf47Hm3kpZfJGTauWu8_ViIM2UftWsCYSUFjcaLckagZyn7frZgcIHM'),
(125, 'https://vcdn-ngoisao.vnecdn.net/2019/10/08/66373694-1245709395598965-6012-6632-9485-1570525046.png'),
(126, 'https://lh3.googleusercontent.com/proxy/7OigwdKaMuY37L6dXO4E3Xz_bTbVbws_5jAWhbrbl6HbqEl-5v6qO90dsKzbg7O9miWTynzqaiehlaJN78KB7sr5zUa8wS3dV63cy83KMJtNgXn7'),
(210, 'https://saladstation.vn/Upload/files/cai-xoan-kale.jpg'),
(211, 'https://sohanews.sohacdn.com/thumb_w/660/2014/cai-bap-1416685665757-42-4-422-521-crop-1416685674608.jpg'),
(212, 'https://baoquocte.vn/stores/news_dataimages/nguyennga/032017/21/08/085358_sup-lo-xanh-1490059289976.jpg'),
(213, 'https://www.hatgiongdalat.com/asset/upload/image/hat-giong-rau-xa-lach-xoan-1.7_1.jpg?v=20190410'),
(214, 'https://photo-1-baomoi.zadn.vn/w700_r1/2020_04_27_251_34854594/3b4729bb5bf8b2a6ebe9.jpg'),
(215, 'https://product.hstatic.net/1000191320/product/caithao_master.jpg'),
(216, 'https://rauxanh.net/wp-content/uploads/2019/05/rau-chan-vit.png'),
(217, 'https://1hatgiong.com/image/catalog/San%20pham%208/asDollarphotoclufb_77319158.jpg'),
(218, 'https://gardenseedsmarket.com/images/thumbnails/320/320/detailed/61/shutterstock_234709672.jpg'),
(219, 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTcC40o5vt2w-Z9oGh4WHtxZDt1MwNyAnpzBw&usqp=CAU'),
(220, 'https://tambinh.vn/wp-content/uploads/2019/11/1-3-e1572852727466.jpg'),
(221, 'https://image.thanhnien.vn/768/uploaded/quochung.qc/2017_08_29/kg2/1_alst.jpg'),
(222, 'https://cf.shopee.vn/file/79e82a0fa4983a514f158713758930ee'),
(310, 'https://vinfruits.com/wp-content/uploads/2016/12/Dau-tay-Uc-vinfruits.com-3-546x546.jpg'),
(311, 'https://image-us.eva.vn/upload/2-2019/images/2019-04-17/qua-bo-19-tac-dung-tuyet-voi-voi-suc-khoe-co-the-ban-chua-ngo-qua_bo-1555465654-143-width600height450.jpg'),
(312, 'https://agarwood.org.vn/wp-content/uploads/2016/12/qua-tao.jpg'),
(313, 'https://dungculamvuon.net/resources/2019/10/cay-cam-vang-my-2.jpg'),
(314, 'https://image2.tienphong.vn/665x449/Uploaded/2020/rkznae/2020_02_26/chuoi_8_e1535077816238_mrxc.jpg'),
(315, 'https://benh.vn/wp-content/uploads/2018/04/buoi-e1550743646379.jpg'),
(316, 'https://nutifood.com.vn/uploads/images/tac-dung-cua-xoai.jpg'),
(317, 'https://www.thuocdantoc.org/wp-content/uploads/2019/11/tac-dung-cua-dua-2.jpg'),
(318, 'https://media.suckhoedoisong.vn/Images/duylinh/2020/05/14/dao_2_resize.jpg'),
(319, 'https://themtraicay.com/wp-content/uploads/2016/10/%E1%BB%95i-x%C3%A1-l%E1%BB%8B-2-600x600.jpg'),
(320, 'https://quatangtraicay.com/wp-content/uploads/2019/04/man-chile.jpg'),
(321, 'https://wowmart.vn/wp-content/uploads/2019/11/qua-mo-say-deo-huu-co-terrasoul-superfoods-sun-dried-apricots-454g-kka.jpg'),
(322, 'https://s.vietnamdoc.net/data/image/2015/08/06/cong-dung-cua-qua-le-1.jpg'),
(323, 'https://media.congluan.vn/files/huyhoang/2020/06/19/dua-hau-1353.jpg'),
(440, 'https://vinmec-prod.s3.amazonaws.com/images/20190922_030833_349321_benh-tieu-duong-an-.max-1800x1800.jpg'),
(441, 'https://vinmec-prod.s3.amazonaws.com/images/20200418_145937_369667_khoai-tay.max-800x800.jpg'),
(442, 'https://lh3.googleusercontent.com/proxy/4iS-LqObET4VEvNY1ju7zM5j-dAANeP3WpCEt9ym5MDhyRQkDzDFZt3Y9EB6daQfKHsYmYdpK-zm7xvUyMAYsqdvWmF0bved41pOdxAN1-tmtLmxVpPw8DTynMcc2hgKcw_qFyEc'),
(443, 'https://cf.shopee.vn/file/5413ddc95e44788a02e1c63439b9a2cc'),
(444, 'https://image.plo.vn/w653/Uploaded/2020/tmuihk/2020_04_20/cu-dau-va-loi-ich-suc-khoe1_sodu_thumb.jpg'),
(445, 'https://www.thuocdantoc.org/wp-content/uploads/2019/07/cach-chua-tieu-chay-bang-ca-rot.jpg'),
(446, 'https://cdn.tgdd.vn/Files/2020/04/04/1246730/cu-den-la-gi-15-cong-dung-va-mot-so-luu-y-khi-su--2.jpg'),
(447, 'https://product.hstatic.net/1000292939/product/su-hao-1_815f569eeeae43728b978dd4d5da202c_master.png'),
(510, 'https://vcdn-suckhoe.vnecdn.net/2020/01/25/selenium-1-1920x1080-157996633-1311-6144-1579967859.jpg'),
(511, 'https://image.tienphong.vn/665x449/Uploaded/2020/rkznae/2019_09_22/8_loi_ich_bat_ngo_tu_cu_lac_1_pwyc_nhhq.jpg'),
(512, 'https://omamart.vn/wp-content/uploads/2017/06/2.jpg'),
(513, 'https://www.thuocdantoc.org/wp-content/uploads/2019/10/vung.jpg'),
(514, 'https://cf.shopee.vn/file/cc11e49fcae3f4f87ac77447d7b1e48e'),
(515, 'https://sohanews.sohacdn.com/thumb_w/660/2020/1/23/hat-bi-2-1579742328697108939525-crop-1579742336658528576465.jpg'),
(516, 'https://vcdn-suckhoe.vnecdn.net/2018/11/28/cd5a922319604f4bac95c6484d4deb-5994-6807-1543388404.jpg'),
(517, 'https://w2.trithucvn.org/wp-content/uploads/2019/07/tac-dung-cua-cay-sen-1280x720.jpg'),
(518, 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQXwxmpn_sUn3oEikqdIpPnn5lO8ujYL3o_4Q&usqp=CAU'),
(519, 'https://dulinuts.com/uploads/hat-de-cuoi-gia-bo-nhieu-social.jpg');

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
  `mat_khau` text NOT NULL,
  `sex` varchar(3) DEFAULT NULL,
  `age` int(20) DEFAULT NULL,
  `weight` int(20) DEFAULT NULL,
  `height` int(20) DEFAULT NULL,
  `activity_level` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `member`
--

INSERT INTO `member` (`id`, `ho_ten`, `ten_dang_nhap`, `mat_khau`, `sex`, `age`, `weight`, `height`, `activity_level`) VALUES
(1, '', '', '', 'Nu', 21, 21, 21, 1),
(2, 'admin', '18021245', '1213', 'Nam', 544, 545, 45, 5),
(3, 'admin', 'Dinhduong', '123', 'Nam', 13, 13, 13, 1),
(4, 'admin', 'admin', '111', NULL, NULL, NULL, NULL, NULL),
(5, 'admin', '1111111', '1111', NULL, NULL, NULL, NULL, NULL),
(6, 'admin', '222', '131', NULL, NULL, NULL, NULL, NULL),
(7, 'admin', '222323', '313', NULL, NULL, NULL, NULL, NULL),
(8, 'admin', '222323?', '?dds', NULL, NULL, NULL, NULL, NULL),
(9, 'Thu', 'cherry', 'ghggjgj', NULL, NULL, NULL, NULL, NULL),
(10, '111', '23323', '?ds', NULL, NULL, NULL, NULL, NULL),
(11, '111', 'gdsfdsffe', 'r?', NULL, NULL, NULL, NULL, NULL),
(12, 'admin', 'thutrinhvn21@gmail.com', '123r', NULL, NULL, NULL, NULL, NULL),
(13, 'admin', 'thutrinhvn21@gmail.comt', 'thu', NULL, NULL, NULL, NULL, NULL),
(14, 'admin', '180212455', 'grgf', NULL, NULL, NULL, NULL, NULL),
(15, '123', '111', '111', NULL, NULL, NULL, NULL, NULL),
(16, '111', 'rg', 'êfwd', NULL, NULL, NULL, NULL, NULL),
(17, '111', 'rgf', 'aa', NULL, NULL, NULL, NULL, NULL),
(18, '111', 'rgfdf', '?', NULL, NULL, NULL, NULL, NULL),
(19, 'admin', '18021245kn', 'nnbmnm', NULL, NULL, NULL, NULL, NULL),
(20, 'admin', '18021245knd', '??', NULL, NULL, NULL, NULL, NULL),
(21, 'Thu', 'thutrinhvn21@gmail.comâs', 's?', NULL, NULL, NULL, NULL, NULL),
(22, 'Thu', 'thutrinhvn21@gmail.comâsdsd', 'ssd', NULL, NULL, NULL, NULL, NULL),
(23, 'grgtr', 't?t5rt', 'tet', NULL, NULL, NULL, NULL, NULL),
(24, 'grgtr', 'thuthuthuthu', 'thututh', NULL, NULL, NULL, NULL, NULL),
(25, 'Thu', 'fesdf?sdsff', 'ds?sad', NULL, NULL, NULL, NULL, NULL),
(26, 'admin', 'thuthuth', 'têfc', NULL, NULL, NULL, NULL, NULL),
(27, 'tr?nh th? thu', '18021245nmnmn', 'jkjkjk', NULL, NULL, NULL, NULL, NULL),
(28, '', 'fdgf', 'fdfdsf', NULL, NULL, NULL, NULL, NULL),
(29, '', '', 'thhth', 'Nu', 21, 21, 21, 1),
(30, 'thu', 'stung', '123', NULL, NULL, NULL, NULL, NULL),
(31, 'tr?nh th? thu', 'Cher', '111', NULL, NULL, NULL, NULL, NULL),
(32, 'tr?nh th? thu', 'Cherfd', 'qe', NULL, NULL, NULL, NULL, NULL),
(33, 'thh', 'tfdfvdgf', '123', NULL, NULL, NULL, NULL, NULL),
(34, '', '', 'thtu', 'Nu', 21, 21, 21, 1),
(35, 'admin', 'ty', 'tyh', NULL, NULL, NULL, NULL, NULL),
(36, 'admin', 'tt', 'ttt', NULL, NULL, NULL, NULL, NULL),
(37, 'admin', 'ttf', 'fdf?', NULL, NULL, NULL, NULL, NULL),
(38, 'admin', '565', '56565', NULL, NULL, NULL, NULL, NULL),
(39, '65', '656', '6565', NULL, NULL, NULL, NULL, NULL),
(40, 'admin', 'tyyyy', '31322', NULL, NULL, NULL, NULL, NULL),
(41, 'admin', '1234123', '123123', 'Nam', 13, 13, 31, 4),
(42, 'admin', 'uuuu', 'uuuu', NULL, NULL, NULL, NULL, NULL),
(43, 'admin', '12333', '3333', 'Nam', 32, 33, 33, 1),
(44, 'admin', '13', '31', 'Nam', 13, 13, 13, 1),
(45, '123', '33', '33', NULL, NULL, NULL, NULL, NULL),
(46, 'admin', 'fgsfe', 'fesrew', NULL, NULL, NULL, NULL, NULL),
(47, 'admin', 'kjk', 'jjk', NULL, NULL, NULL, NULL, NULL),
(48, 'ff', 'th jhj', 'da', NULL, NULL, NULL, NULL, NULL),
(49, 'admin', 'admin1', '111', NULL, NULL, NULL, NULL, NULL),
(50, 'admin', 'Dinhduong11', '111', NULL, NULL, NULL, NULL, NULL),
(51, 'admin', '1111', '11', NULL, NULL, NULL, NULL, NULL),
(52, 'admin', '31', '31', NULL, NULL, NULL, NULL, NULL),
(53, '33', '333', '33', NULL, NULL, NULL, NULL, NULL),
(54, 'admin', 'qw', 'qw', NULL, NULL, NULL, NULL, NULL),
(55, 'Thu', 'Thu21', '2121', 'Nam', 21, 21, 21, 3),
(56, 'Lan Anh', 'Lan Anh', '2101', 'Nu', 21, 21, 21, 2),
(57, 'Lan Anh', 'Lan Anh 12', '210120', 'Nam', 12, 12, 12, 2),
(58, 'Lan Anh', 'Lan Anh 33', '2101', 'Nam', 21, 12, 12, 1),
(59, 'Lan Anh', 'Lan Anh11', '11', 'Nam', 21, 21, 21, 2),
(60, 'admin', '1a', '1a', 'Nam', 11, 11, 11, 1),
(61, 'admin', '1d', '1d', 'Nam', 1212, 12, 12, 1),
(62, '1', '11a', '11a', 'Nam', 11, 11, 11, 1),
(63, '5', '55', '55', 'Nam', 5, 5, 5, 1),
(64, 'admin', '1e', '1e', 'Nam', 12, 12, 21, 1),
(65, '11', 'uu', 'uu', 'Nam', 65, 5, 5, 4),
(66, 'y', 'yy', 'yy', 'Nam', 4, 64, 64, 2),
(67, 'tt', 'ttt', 'tt', 'Nam', 453, 535, 533, 1),
(68, 'Cherry', 'Chery', '21', 'Nam', 12, 21, 12, 2),
(69, 'admin', 'ef', 'ef', 'Nam', 21, 12122, 21, 2),
(70, 'thu', 'chi', 'chi', NULL, NULL, NULL, NULL, NULL),
(71, 'hihi', 'haha', 'hoho', 'Nam', 32, 23, 32, 1),
(72, 'o', 'oo', 'oo', 'Nam', 89, 89, 8, 1),
(73, 'tyty', 'tyty', '89', 'Nam', 89, 89, 89, 1),
(74, 'hrp', 'heo', 'heo', 'Nam', 8989, 89, 89, 1),
(75, 'Cherry', 'Cherry21', '2121', 'Nam', 21, 41, 160, 1),
(76, 'thuthu', 'thu43', '210120', 'Nam', 20, 40, 169, 1);

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
-- Chỉ mục cho bảng `addfoodbreakfast`
--
ALTER TABLE `addfoodbreakfast`
  ADD PRIMARY KEY (`idBF`);

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
-- AUTO_INCREMENT cho bảng `addfoodbreakfast`
--
ALTER TABLE `addfoodbreakfast`
  MODIFY `idBF` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `member`
--
ALTER TABLE `member`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

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
