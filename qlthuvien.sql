-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 05, 2021 lúc 03:56 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlthuvien`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `ID_DocGia` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ID_Sach` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `NoiDungBL` text COLLATE utf8_unicode_ci NOT NULL,
  `thoigian_bl` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`ID_DocGia`, `ID_Sach`, `NoiDungBL`, `thoigian_bl`) VALUES
('ND001', '004', 'Truyện hay quá', '2021-12-05 12:47:41'),
('ND001', '004', 'Hay', '2021-12-05 12:49:45'),
('ND001', '004', 'Truyện này thật tuyệt', '2021-12-05 13:35:42');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD KEY `bl_sach` (`ID_Sach`),
  ADD KEY `bl_dg` (`ID_DocGia`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `bl_dg` FOREIGN KEY (`ID_DocGia`) REFERENCES `docgia` (`ID_DocGia`),
  ADD CONSTRAINT `bl_sach` FOREIGN KEY (`ID_Sach`) REFERENCES `sach` (`ID_Sach`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
