-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 04, 2021 lúc 04:37 AM
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
('ND001', '005', 'Cuốn sách quá tuyệt vời', '2020-11-27 02:43:09'),
('ND001', '008', 'Tuyệt vời', '2020-11-27 02:43:09'),
('ND001', '001', 'Quá hayyyyyyy', '2020-11-27 02:43:32'),
('ND001', '001', 'Alo', '2020-11-27 02:43:56'),
('ND001', '001', 'hay quáaaaaaaa', '2020-11-27 02:44:23'),
('ND001', '001', 'hay quáaaaaaaa', '2020-11-27 02:46:33'),
('ND001', '001', 'hay quáaaaaaaa', '2020-11-27 02:46:48'),
('ND001', '001', 'hay quáaaaaaaa', '2020-11-27 02:47:04'),
('ND001', '001', 'hay quáaaaaaaa', '2020-11-27 02:47:29'),
('ND001', '001', 'hay quáaaaaaaa', '2020-11-27 02:47:51'),
('ND001', '002', 'sdasd', '2020-11-27 03:31:23'),
('ND001', '0021', 'dasasd', '2020-11-27 07:13:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chinhanh`
--

CREATE TABLE `chinhanh` (
  `ID_ChiNhanh` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `TenCN` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `DienThoai` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chinhanh`
--

INSERT INTO `chinhanh` (`ID_ChiNhanh`, `TenCN`, `DiaChi`, `DienThoai`, `Email`) VALUES
('001', 'Chi nhánh 1', 'Quận 5', '0123456789', 'nhasachNguyenVanCu@gmail.com'),
('002', 'Chi nhánh 2', 'Quận 3', '0123456789', 'nhasachminhkhai@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chu_de_sach`
--

CREATE TABLE `chu_de_sach` (
  `ID_ChuDe` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `TenChuDe` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chu_de_sach`
--

INSERT INTO `chu_de_sach` (`ID_ChuDe`, `TenChuDe`) VALUES
('CD002', 'Tieu thuyết tình cảm'),
('CD003', 'Truyện kiếm hiệp'),
('CD004', 'Văn học'),
('CĐ001', 'Giáo dục');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `docgia`
--

CREATE TABLE `docgia` (
  `ID_DocGia` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `ID_QuanThu` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `NgayLap` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `docgia`
--

INSERT INTO `docgia` (`ID_DocGia`, `ID_QuanThu`, `NgayLap`) VALUES
('ND001', 'ND001', '2020-11-26 21:56:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `ID` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `HoTen` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `NgaySinh` datetime NOT NULL,
  `DiaChi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `DienThoai` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `ChucVu` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `HinhAnh` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`ID`, `HoTen`, `NgaySinh`, `DiaChi`, `DienThoai`, `ChucVu`, `username`, `password`, `HinhAnh`) VALUES
('ND001', 'Nguyễn Thị Thu Hải', '2001-10-10 10:14:56', 'Phường 3, quận 3', '0123456789', 'SV', 'thuhai', 'thuhai', 'thuhai.jpg'),
('ND002', 'Lê Ngô Tuyết Trinh', '1998-02-19 10:14:56', 'Phường 11, Quận 11', '0123456798', 'DGK', 'tuyettrinh', 'tuyettrinh', ''),
('ND003', 'Nguyễn Văn Huy Em', '2001-07-04 10:00:00', 'Quận 8', '0123456797', 'GV', 'huyem', 'huyem', 'huyem.jpg'),
('ND004', 'Võ Duy Kha', '2001-04-23 10:00:00', 'Bến Tre', '0333827185', 'SV', 'duykha', 'duykha', 'duykha.jpg'),
('ND005', 'Trần Đức Huy', '2001-04-23 10:00:00', 'Quận 3', '0123456796', 'SV', 'duchuy', 'duchuy', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nha_xuat_ban`
--

CREATE TABLE `nha_xuat_ban` (
  `ID_NXB` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `TenNXB` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `DienThoai` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nha_xuat_ban`
--

INSERT INTO `nha_xuat_ban` (`ID_NXB`, `TenNXB`, `DiaChi`, `DienThoai`) VALUES
('NXB001', 'Nhà Xuất Bản Văn Hoá - Văn Nghệ TPHCM', '88-90 Ký Con, Phường Nguyễn Thái Bình, Quận 1, TP Hồ Chí Minh', '(028) 38216009'),
('NXB002', 'NXB Khoa Học Xã Hội', '57 Sương Nguyệt ánh, Phường Bến Thành, Quận 1, TP Hồ Chí Minh', '(028) 38394948'),
('NXB003', 'NXB Văn Hóa Sài Gòn', '310 Trần Hưng Đạo, Phường Nguyễn Cư Trinh, Quận 1, TP Hồ Chí Minh', '(028) 38376585'),
('NXB004', 'NXB Thống Kê', '16 Nguyễn Huệ, Phường Bến Nghé, Quận 1, TP Hồ Chí Minh (TPHCM)', '(028) 38290047');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanly`
--

CREATE TABLE `quanly` (
  `ID_QuanLy` varchar(6) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanthu`
--

CREATE TABLE `quanthu` (
  `ID_QuanThu` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `ID_ChiNhanh` varchar(6) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quanthu`
--

INSERT INTO `quanthu` (`ID_QuanThu`, `ID_ChiNhanh`) VALUES
('ND001', '001'),
('ND002', '002');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sach`
--

CREATE TABLE `sach` (
  `ID_Sach` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `ID_ChuDe` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `ID_NXB` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `TenSach` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Gia` int(11) NOT NULL,
  `tacGia` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MoTa` text COLLATE utf8_unicode_ci NOT NULL,
  `hinhAnh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ngayCapNhat` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sach`
--

INSERT INTO `sach` (`ID_Sach`, `ID_ChuDe`, `ID_NXB`, `TenSach`, `Gia`, `tacGia`, `MoTa`, `hinhAnh`, `ngayCapNhat`) VALUES
('001', 'CĐ001', 'NXB001', 'Your Name', 38000, 'Shinkai Makoto', 'Đứng thứ 2 trong Top 1000 Văn Học Nước Ngoài bán chạy tháng này<br><br>Mitsuha là nữ sinh trung học sống ở vùng quê hẻo lánh. Một ngày nọ, cô mơ thấy mình ở Tokyo trong một căn phòng xa lạ, biến thành con trai, gặp những người bạn chưa từng quen biết.\r\n\r\nTrong khi đó ở một nơi khác, Taki, một nam sinh trung học người Tokyo lại mơ thấy mình biến thành con gái, sống ở vùng quê hẻo lánh.\r\n\r\nCuối cùng hai người họ nhận ra đang bị hoán đổi với nhau qua giấc mơ. Kể từ lúc hai con người xa lạ ấy gặp nhau, bánh xe số phận bắt đầu chuyển động.\r\n\r\nĐây là phiên bản tiểu thuyết của bộ phim hoạt hình Your Name, do chính đạo diễn Shinkai Makoto chấp bút.', 'images/your_name.jpg', '0000-00-00 00:00:00'),
('002', 'CD002', 'NXB002', 'Conan-Thám tử lừng danh', 20000, 'Gosho Aoyama', '<br>Nội dung: Mở đầu câu truyện, cậu học sinh trung học 16 tuổi Shinichi Kudo bị biến thành cậu bé Conan Edogawa. Shinichi trong phần đầu của Thám tử lừng danh Conan được miêu tả là một thám tử học đường. Trong một lần đi chơi công viên \"Miền Nhiệt đới\" với cô bạn từ thuở nhỏ (cũng là bạn gái) Ran Mori , cậu bị dính vào vụ án một hành khách trên Chuyến tàu tốc hành trong công viên, Kishida , bị giết trong một vụ án cắt đầu rùng rợn. Cậu đã làm sáng tỏ vụ án và trên đường về nhà, chứng kiến một vụ làm ăn mờ ám của những người đàn ông mặc toàn đồ đen. Kudo bị phát hiện, bị đánh ngất sau đó những người đàn ông áo đen đã cho cậu uống một thứ thuốc độc chưa qua thử nghiệm là Apotoxin-4869 (APTX4869) với mục đích thủ tiêu cậu. Tuy nhiên chất độc đã không giết chết Kudo. Khi tỉnh lại, cậu bàng hoàng nhận thấy thân thể mình đã bị teo nhỏ trong hình dạng của một cậu học sinh tiểu học....<br>', 'images/conan.jpg', '0000-00-00 00:00:00'),
('0021', 'CD002', 'NXB002', 'Tôi Thấy Hoa Vàng Trên Cỏ Xanh', 98000, 'Nguyễn Nhật Ánh', '<br>“Tôi thấy hoa vàng trên cỏ xanh” truyện dài mới nhất của nhà văn vừa nhận giải văn chương ASEAN Nguyễn Nhật Ánh - đã được Nhà xuất bản Trẻ mua tác quyền và giới thiệu đến độc giả cả nước.<br>\r\n<br>Cuốn sách viết về tuổi thơ nghèo khó ở một làng quê, bên cạnh đề tài tình yêu quen thuộc, lần đầu tiên Nguyễn Nhật Ánh đưa vào tác phẩm của mình những nhân vật phản diện và đặt ra vấn đề đạo đức như sự vô tâm, cái ác. 81 chương ngắn là 81 câu chuyện nhỏ của những đứa trẻ xảy ra ở một ngôi làng: chuyện về con cóc Cậu trời, chuyện ma, chuyện công chúa và hoàng tử, bên cạnh chuyện đói ăn, cháy nhà, lụt lội, “Tôi thấy hoa vàng trên cỏ xanh”hứa hẹn đem đến những điều thú vị với cả bạn đọc nhỏ tuổi và người lớn bằng giọng văn trong sáng, hồn nhiên, giản dị của trẻ con cùng nhiều tình tiết thú vị, bất ngờ và cảm động trong suốt hơn 300 trang sách. Cuốn sách, vì thế có sức ám ảnh, thu hút, hấp dẫn không thể bỏ qua.<br>', 'images/tuithay.jpg', '0000-00-00 00:00:00'),
('003', 'CĐ001', 'NXB001', 'Dragon Ball - 7 Viên Ngọc Rồng', 25000, 'Akira Toriyama', 'Dragon Ball - 7 Viên Ngọc Rồng là câu chuyện kể về cậu bé có đuôi khỉ tên là Goku được tìm thấy bởi ông lão sống một mình trong rừng, ông lão xem đứa bé như là cháu của mình. Một ngày nọ Goku tình cờ gặp cô gái tên là Bulma trên đường đi bắt cá về, Goku và Bulma đã cùng nhau truy tìm bảy viên ngọc rồng. Bảy viên ngọc rồng chứa đựng bí mật có thể triệu hồi một con rồng và ban điều ước cho ai sở hữu chúng.<br><br>Trên cuộc hành trình dài đi tìm bảy viên ngọc rồng, họ gặp những người bạn và những đấu sĩ huyền thoại cũng như nhiều ác quỷ. Họ trải qua những khó khăn và học hỏi các chiêu thức võ thuật đặc biệt để tham gia thi đấu trong đại hội võ thuật thế giới được tổ chức hàng năm. Ngoài các sự kiện đại hội võ thuật, Goku và các bạn còn phải đối phó với các thế lực độc ác như Đại vương Pilaf, Quân đoàn khăn đỏ của Độc nhãn tướng quân, Đại ma vương Pocollo và những đứa con của hắn. Rồi họ đi đến Namek, gặp rồng thần của Namek; chạm trán rô bô sát thủ, Frieza, Cell, Ma Nhân Buu.', 'images/dragon.jpg', '0000-00-00 00:00:00'),
('0031', 'CĐ001', 'NXB001', 'Mắc Biếc ', 94000, 'Nguyễn Nhật Ánh', 'Mắt biếc là một tác phẩm được nhiều người bình chọn là hay nhất của nhà văn Nguyễn Nhật Ánh. Tác phẩm này cũng đã được dịch giả Kato Sakae dịch sang tiếng Nhật để giới thiệu với độc giả Nhật Bản.<br><br>“Tôi gửi tình yêu cho mùa hè, nhưng mùa hè không giữ nổi. Mùa hè chỉ biết ra hoa, phượng đỏ sân trường và tiếng ve nỉ non trong lá. Mùa hè ngây ngô, giống như tôi vậy. Nó chẳng làm được những điều tôi ký thác. Nó để Hà Lan đốt tôi, đốt rụi. Trái tim tôi cháy thành tro, rơi vãi trên đường về.”<br><br>… Bởi sự trong sáng của một tình cảm, bởi cái kết thúc buồn, rất buồn khi xuyên suốt câu chuyện vẫn là những điều vui, buồn lẫn lộn… ', 'images/matbiec.jpg', '0000-00-00 00:00:00'),
('004', 'CĐ001', 'NXB001', 'Trạng Quỷnh', 12000, 'Kim Khánh', '<br>Trạng Quỷnh là một bộ truyện tranh thiếu nhi nhiều tập của Việt Nam, tập truyện đầu tiên mang tên Sao sáng xứ Thanh được Nhà xuất bản Đồng Nai phát hành giữa tháng 6 năm 2003. Ban đầu tác phẩm được đặt là Trạng Quỳnh (từ tập 1 đến tập 24), còn từ tập 25 trở đi thì đặt tên là Trạng Quỷnh. Tác phẩm được thực hiện bởi tác giả Kim Khánh. Truyện lấy bối cảnh vào thời chúa Nguyễn, dưới thời chúa Nguyễn Phúc Khoát, nhưng những sự kiện xảy ra trong truyện không trùng lặp với những sự kiện xảy ra trên thực tế. Tác phẩm này ban đầu kể lại về cuộc đời của Trạng Quỳnh - một người có tính cách trào phúng dân gian Việt Nam. Trong truyện này, Trạng Quỳnh vốn thông minh từ trong bụng mẹ. Trước khi cậu sinh ra, một lần bà mẹ ra ao giặt đồ, bỗng nhìn thấy một chú vịt, bà mẹ liền ngâm câu thơ, và lập tức có tiếng đối đáp lại trong bụng vịt. Bà cho rằng đó là điềm lạ, nghĩ rằng bà sẽ sinh ra một quý tử, hiểu biết hơn người, sẽ là người có tiếng tăm. Thời gian trôi qua, bà hạ sinh một bé trai, tư dung thông minh lạ thường, đặt tên là Quỳnh.<br>', 'images/trangquynh.jpg', '0000-00-00 00:00:00'),
('0044', 'CĐ001', 'NXB001', 'Doraemon', 18000, 'Fujiko F. Fujio', '<br>Nội dung: Doraemon (Đôrêmon) là một chú mèo máy được Sewashi (Nôbitô), cháu ba đời của Nobita gửi về quá khứ cho ông mình để giúp đỡ Nobita tiến bộ, tức là cũng sẽ cải thiện hoàn cảnh của con cháu Nobita sau này. Còn ở hiện tại, Nobita là một cậu bé luôn thất bại ở trường học, và sau đó là thất bại trong công việc, đẩy gia đình và con cháu sau này vào cảnh nợ nần.<br>', 'images/doremon.jpg', '0000-00-00 00:00:00'),
('005', 'CD002', 'NXB002', 'Thần Đồng Đất Việt', 9000, 'Nhiều tác giả', '<br>Bối cảnh các câu chuyện trong Thần đồng đất Việt được lấy từ thời Hậu Lê, nhưng những sự kiện xảy ra trong truyện không trùng lặp với những sự kiện xảy ra trên thực tế. Tuy vậy, hầu hết những sự kiện chính xảy ra trong Thần đồng đất Việt đều dựa trên những câu truyện, điển tích lịch sử có thật của Việt Nam. Tác phẩm kể lại những câu chuyện về cuộc đời của Lê Tí, một Trạng Nguyên của Đại Việt cùng với những người bạn thân của cậu là Sửu ẹo, Dần béo và Cả Mẹo. Sự ra đời của Trạng Tí cũng không bình thường. Kiếp trước cậu vốn là một bậc thần tiên có kiến thức uyên bác trên Thiên Đình, sau đó được đầu thai xuống trần gian để giúp đỡ Đại Việt. Mẹ của Tí là bà Hai hậu, sau khi đi cày về mệt mỏi đã ngồi lên một hòn đá để nghỉ ngơi và có mang và sau đó sinh ra cậu<br>\r\n<br>Từ nhỏ, Tí đã thể hiện mình là một người con hiếu thảo, ham học và có trí thông minh hơn người. Ngay cả Đồ Kiết, thầy dạy của cậu cũng phải ngạc nhiên về kiến thức của cậu. Ở làng Phan Thị, với tài trí của mình, cậu cũng đã giúp mẹ, các bạn của mình và những người dân trong làng giải quyết nhiều vấn đề khó khăn. Vượt qua ba kì thi Hương, Hội, Đình một cách xuất sắc, cậu trở thành trạng nguyên nhỏ tuổi nhất của Đại Việt. Sau đó, cậu cũng được Đại Minh công nhận là Lưỡng Quốc Trạng Nguyên.<br>\r\n<br>Tí cùng Sửu, Dần và Cả Mẹo cũng đã có công lớn trong việc phò trợ vua Lê chống lại sự xâm lược của Đại Minh và đối phó với các sứ thần mà Đại Minh cử sang. Trong triều đình, cậu là một vị quan thanh liêm chính trực nên được công chúa Phương Thìn yêu mến, nhưng cũng chính vì vậy mà cậu luôn bị Tể Tướng Tào Hống và những người trong gia đình là hai đứa con ông coi là cái gai trong mắt và tìm mọi cách để hạ nhục cậu, tuy nhiên trong phần lớn các câu chuyện cậu là người chiến thắng.\r\n\r\nCũng nhờ tài trí vượt bậc, Trạng Tí được vua tin tưởng giao trọng trách đi sứ Bắc Quốc nhiều lần. Ở đó, Tí cũng gặp phải nhiều khó khăn do vua Bắc Quốc và Vương Thừa Tướng tạo ra nhằm ám hại cậu và làm tổn hại uy tín Đại Việt, thậm chí có lần suýt chút nữa thì cậu thiệt mạng. Tuy đã ra làm quan nhưng đôi lúc cậu vẫn được vua cho phép về quê để chăm sóc mẹ và giúp đỡ dân làng. Và tất nhiên, tài trí và sự giúp đỡ nhiệt tình từ những người bạn tốt đã giúp những người dân rất nhiều.\r\n\r\nTrong mỗi tập Thần đồng đất Việt, sau phần truyện còn có Câu lạc bộ Trạng và Bạn, cung cấp và mở rộng phần kiến thức đề cập trong truyện, giới thiệu chi tiết về quan Trạng hay danh nhân cụ thể, đồng thời mở ra nhiều cuộc chơi hấp dẫn để độc giả thi tài. Với hình ảnh sinh động, dễ thương, nội dung truyện hấp dẫn, hài hước, kiến thức bổ ích, đa dạng, không giáo điều…, Thần đồng đất Việt hoàn toàn khác biệt với mọi ấn phẩm truyện tranh Việt cùng thời và hơn 10 năm nay vẫn giữ nguyên vị thế bộ truyện tranh dài hơi nhất, thành công nhất của làng truyện tranh Việt, là ưu tiên hàng đầu của các bậc phụ huynh khi tìm mua sách cho con.\r\n\r\nBối cảnh các câu chuyện trong Thần đồng đất Việt được lấy từ thời Hậu Lê, nhưng những sự kiện xảy ra trong truyện không trùng lặp với những sự kiện xảy ra trên thực tế. Tuy vậy, hầu hết những sự kiện chính xảy ra trong Thần đồng đất Việt đều dựa trên những câu truyện, điển tích lịch sử có thật của Việt Nam. Tác phẩm kể lại những câu chuyện về cuộc đời của Lê Tí, một Trạng Nguyên của Đại Việt cùng với những người bạn thân của cậu là Sửu ẹo, Dần béo và Cả Mẹo. Sự ra đời của Trạng Tí cũng không bình thường. Kiếp trước cậu vốn là một bậc thần tiên có kiến thức uyên bác trên Thiên Đình, sau đó được đầu thai xuống trần gian để giúp đỡ Đại Việt. Mẹ của Tí là bà Hai hậu, sau khi đi cày về mệt mỏi đã ngồi lên một hòn đá để nghỉ ngơi và có mang và sau đó sinh ra cậu\r\n\r\nTừ nhỏ, Tí đã thể hiện mình là một người con hiếu thảo, ham học và có trí thông minh hơn người. Ngay cả Đồ Kiết, thầy dạy của cậu cũng phải ngạc nhiên về kiến thức của cậu. Ở làng Phan Thị, với tài trí của mình, cậu cũng đã giúp mẹ, các bạn của mình và những người dân trong làng giải quyết nhiều vấn đề khó khăn. Vượt qua ba kì thi Hương, Hội, Đình một cách xuất sắc, cậu trở thành trạng nguyên nhỏ tuổi nhất của Đại Việt. Sau đó, cậu cũng được Đại Minh công nhận là Lưỡng Quốc Trạng Nguyên.\r\n\r\nTí cùng Sửu, Dần và Cả Mẹo cũng đã có công lớn trong việc phò trợ vua Lê chống lại sự xâm lược của Đại Minh và đối phó với các sứ thần mà Đại Minh cử sang. Trong triều đình, cậu là một vị quan thanh liêm chính trực nên được công chúa Phương Thìn yêu mến, nhưng cũng chính vì vậy mà cậu luôn bị Tể Tướng Tào Hống và những người trong gia đình là hai đứa con ông coi là cái gai trong mắt và tìm mọi cách để hạ nhục cậu, tuy nhiên trong phần lớn các câu chuyện cậu là người chiến thắng.\r\n\r\nCũng nhờ tài trí vượt bậc, Trạng Tí được vua tin tưởng giao trọng trách đi sứ Bắc Quốc nhiều lần. Ở đó, Tí cũng gặp phải nhiều khó khăn do vua Bắc Quốc và Vương Thừa Tướng tạo ra nhằm ám hại cậu và làm tổn hại uy tín Đại Việt, thậm chí có lần suýt chút nữa thì cậu thiệt mạng. Tuy đã ra làm quan nhưng đôi lúc cậu vẫn được vua cho phép về quê để chăm sóc mẹ và giúp đỡ dân làng. Và tất nhiên, tài trí và sự giúp đỡ nhiệt tình từ những người bạn tốt đã giúp những người dân rất nhiều.<br>', 'images/thandongdatviet.jpg', '0000-00-00 00:00:00'),
('005112', 'CD002', 'NXB002', 'Tôi Thấy Hoa Vàng Trên Cỏ Xanh', 98000, 'Nguyễn Nhật Ánh', '<br>“Tôi thấy hoa vàng trên cỏ xanh” truyện dài mới nhất của nhà văn vừa nhận giải văn chương ASEAN Nguyễn Nhật Ánh - đã được Nhà xuất bản Trẻ mua tác quyền và giới thiệu đến độc giả cả nước.<br>\r\n<br>Cuốn sách viết về tuổi thơ nghèo khó ở một làng quê, bên cạnh đề tài tình yêu quen thuộc, lần đầu tiên Nguyễn Nhật Ánh đưa vào tác phẩm của mình những nhân vật phản diện và đặt ra vấn đề đạo đức như sự vô tâm, cái ác. 81 chương ngắn là 81 câu chuyện nhỏ của những đứa trẻ xảy ra ở một ngôi làng: chuyện về con cóc Cậu trời, chuyện ma, chuyện công chúa và hoàng tử, bên cạnh chuyện đói ăn, cháy nhà, lụt lội, “Tôi thấy hoa vàng trên cỏ xanh”hứa hẹn đem đến những điều thú vị với cả bạn đọc nhỏ tuổi và người lớn bằng giọng văn trong sáng, hồn nhiên, giản dị của trẻ con cùng nhiều tình tiết thú vị, bất ngờ và cảm động trong suốt hơn 300 trang sách. Cuốn sách, vì thế có sức ám ảnh, thu hút, hấp dẫn không thể bỏ qua.<br>', 'images/tuithay.jpg', '0000-00-00 00:00:00'),
('006', 'CĐ001', 'NXB001', 'Tsubasa', 20000, 'Yoichi Takahashi', '<br>“Captain Tsubasa” - Câu chuyện về cậu bé luôn xem “trái bóng là bạn” cùng sự trưởng thành và thành tựu của cậu về sau, ra mắt năm 1981 trên tuần san Shonen Jump. Bộ truyện đã gây nên cơn sốt bóng đá chưa từng có cho các thanh thiếu niên ở Nhật Bản.<br><br>Sức hấp dẫn đa chiều từ chàng trai Tsubasa với khát vọng đưa Nhật Bản vô địch World Cup và những người bạn của cậu, những màn đối đầu đỉnh cao cùng các đối thủ; và vô số các cú sút thần sầu khiến cho “Captain Tsubasa” không chỉ gói gọn trong biên giới nước Nhật, mà còn lan tỏa trên khắp thế giới. Không ít cầu thủ nổi tiếng cũng xem đây là tác phẩm gối-đầu-giường.', 'images/tubasa.jpg', '0000-00-00 00:00:00'),
('0061', 'CĐ001', 'NXB001', 'Đắc Nhân Tâm', 38000, 'Dale Carnegie', 'Tại sao Đắc Nhân Tâm luôn trong Top sách bán chạy nhất thế giới?<br><br>Bởi vì đó là cuốn sách mọi người đều nên đọc.<br><br>Hiện nay có một sự hiểu nhầm đã xảy ra. Tuy Đắc Nhân Tâm là tựa sách hầu hết mọi người đều biết đến, vì những danh tiếng và mức độ phổ biến, nhưng một số người lại “ngại” đọc. Lý do vì họ tưởng đây là cuốn sách “dạy làm người” nên có tâm lý e ngại. Có lẽ là do khi giới thiệu về cuốn sách, người ta luôn gắn với miêu tả đây là “nghệ thuật đối nhân xử thế”, “nghệ thuật thu phục lòng người”… Những cụm từ này đã không còn hợp với hiện nay nữa, gây cảm giác xa lạ và không thực tế.', 'images/DacNhanTam.jpg', '0000-00-00 00:00:00'),
('006112', 'CĐ001', 'NXB001', 'Đắc Nhân Tâm', 38000, 'Dale Carnegie', 'Tại sao Đắc Nhân Tâm luôn trong Top sách bán chạy nhất thế giới?<br><br>Bởi vì đó là cuốn sách mọi người đều nên đọc.<br><br>Hiện nay có một sự hiểu nhầm đã xảy ra. Tuy Đắc Nhân Tâm là tựa sách hầu hết mọi người đều biết đến, vì những danh tiếng và mức độ phổ biến, nhưng một số người lại “ngại” đọc. Lý do vì họ tưởng đây là cuốn sách “dạy làm người” nên có tâm lý e ngại. Có lẽ là do khi giới thiệu về cuốn sách, người ta luôn gắn với miêu tả đây là “nghệ thuật đối nhân xử thế”, “nghệ thuật thu phục lòng người”… Những cụm từ này đã không còn hợp với hiện nay nữa, gây cảm giác xa lạ và không thực tế.', 'images/DacNhanTam.jpg', '0000-00-00 00:00:00'),
('00612', 'CĐ001', 'NXB001', 'Đắc Nhân Tâm', 38000, 'Dale Carnegie', 'Tại sao Đắc Nhân Tâm luôn trong Top sách bán chạy nhất thế giới?<br><br>Bởi vì đó là cuốn sách mọi người đều nên đọc.<br><br>Hiện nay có một sự hiểu nhầm đã xảy ra. Tuy Đắc Nhân Tâm là tựa sách hầu hết mọi người đều biết đến, vì những danh tiếng và mức độ phổ biến, nhưng một số người lại “ngại” đọc. Lý do vì họ tưởng đây là cuốn sách “dạy làm người” nên có tâm lý e ngại. Có lẽ là do khi giới thiệu về cuốn sách, người ta luôn gắn với miêu tả đây là “nghệ thuật đối nhân xử thế”, “nghệ thuật thu phục lòng người”… Những cụm từ này đã không còn hợp với hiện nay nữa, gây cảm giác xa lạ và không thực tế.', 'images/DacNhanTam.jpg', '0000-00-00 00:00:00'),
('008', 'CD002', 'NXB002', 'NARUTO', 20000, 'Masashi Kishimoto', '<br>Chuyện xảy ra ở làng Lá với nhân vật chính là Naruto, học sinh trường đào tạo Ninja, chuyên đi quấy rối khắp làng!!\r\nNaruto có một ước mơ to lớn là đạt được danh hiệu Hokage - Một vị trí dành cho Ninja ưu tú nhất - Và vượt qua các Ninja tiền nhiệm.<br>\r\n<br>Tuy nhiên, bí mật về thân thế của Naruto là…!?<br>', 'images/naruto.jpg', '0000-00-00 00:00:00'),
('009', 'CD004', 'NXB004', 'Tôi Thấy Hoa Vàng Trên Cỏ Xanh', 98000, 'Nguyễn Nhật Ánh', '<br>“Tôi thấy hoa vàng trên cỏ xanh” truyện dài mới nhất của nhà văn vừa nhận giải văn chương ASEAN Nguyễn Nhật Ánh - đã được Nhà xuất bản Trẻ mua tác quyền và giới thiệu đến độc giả cả nước.<br>\r\n<br>Cuốn sách viết về tuổi thơ nghèo khó ở một làng quê, bên cạnh đề tài tình yêu quen thuộc, lần đầu tiên Nguyễn Nhật Ánh đưa vào tác phẩm của mình những nhân vật phản diện và đặt ra vấn đề đạo đức như sự vô tâm, cái ác. 81 chương ngắn là 81 câu chuyện nhỏ của những đứa trẻ xảy ra ở một ngôi làng: chuyện về con cóc Cậu trời, chuyện ma, chuyện công chúa và hoàng tử, bên cạnh chuyện đói ăn, cháy nhà, lụt lội, “Tôi thấy hoa vàng trên cỏ xanh”hứa hẹn đem đến những điều thú vị với cả bạn đọc nhỏ tuổi và người lớn bằng giọng văn trong sáng, hồn nhiên, giản dị của trẻ con cùng nhiều tình tiết thú vị, bất ngờ và cảm động trong suốt hơn 300 trang sách. Cuốn sách, vì thế có sức ám ảnh, thu hút, hấp dẫn không thể bỏ qua.<br>', 'images/tuithay.jpg', '0000-00-00 00:00:00'),
('010', 'CĐ001', 'NXB001', 'Fairy Tail – Hội Pháp Sư', 23000, 'Hiro Mashima', 'Truyện kể về cuộc sống và sự đấu tranh của Hội pháp sư Fairy Tail, và sự mất tích của những con rồng. Truyện bắt đầu với cô pháp sư Lucy Heartfilia 17 tuổi bỏ nhà để theo đuổi con đường pháp sư của mình, cô muốn gia nhập vào Hội Fairy Tail được đồn đại là một hội vui vẻ và có nhiều pháp sư tài ba.Trên đường đi cô gặp Natsu Dragneel cùng với một chú mèo biết nói đang trên đường đi tìm cha nuôi của mình mà một con Hỏa long có tên Igneel đã biến mất không một dấu vết vào 7 năm về trước.<br><br>Sau lúc đó, Lucy bị bắt cóc bởi một kẻ tự nhận là thành viên của Fairy Tail, khi đó Natsu ra tay cưới Lucy và tiết lộ anh chính là thành viên của Fairy Tail và kể kia chỉ là giả mạo, anh cũng là một Sát Long Nhân (Slayer Dragon) , một pháp sư có kĩ năng giết rồng, Natsu đã mời Lucy tham gia vào hội của mình. Lucy ,Happy cùng Nastu,Gray Fullbuster một pháp sư băng, Erza Scarlet là một kiếm sĩ ma thuật tạo thành một đội, họ cùng tham gia vào các nhiệm vụ và đối đầu với các thế lực hắc ám, các Guild đối lập với Fairy Tail, trên hành trình đó , nhóm bạn đã gặp không ít các đối thủ nặng kí , các Sát long nhân nhân tạo là Laxus Dreyar cháu trai của hội trưởng, ngoài ra họ gặp được các sát long nhân thật sự và biết được sự biết mất bí ẩn của những con rồng trong cùng một ngày.<br>', 'images/fairytail.jpg', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sl_sach`
--

CREATE TABLE `sl_sach` (
  `ID_ChiNhanh` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `ID_Sach` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `SL_ThucTe` int(11) NOT NULL,
  `SL_Ton` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sl_sach`
--

INSERT INTO `sl_sach` (`ID_ChiNhanh`, `ID_Sach`, `SL_ThucTe`, `SL_Ton`) VALUES
('001', '006', 100, 10),
('002', '001', 100, 100),
('001', '002', 100, 100),
('001', '003', 100, 100),
('002', '004', 100, 100),
('002', '005', 100, 100),
('002', '006', 100, 100),
('001', '008', 100, 100),
('002', '010', 100, 100),
('001', '0021', 100, 100),
('001', '0031', 100, 100),
('001', '0044', 100, 100);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xulivipham`
--

CREATE TABLE `xulivipham` (
  `ID_DocGia` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `NgayCam` datetime NOT NULL,
  `NgayKT` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
-- Chỉ mục cho bảng `chinhanh`
--
ALTER TABLE `chinhanh`
  ADD PRIMARY KEY (`ID_ChiNhanh`);

--
-- Chỉ mục cho bảng `chu_de_sach`
--
ALTER TABLE `chu_de_sach`
  ADD PRIMARY KEY (`ID_ChuDe`);

--
-- Chỉ mục cho bảng `docgia`
--
ALTER TABLE `docgia`
  ADD PRIMARY KEY (`ID_DocGia`),
  ADD KEY `ID_QuanThu_FK_DocGia` (`ID_QuanThu`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `nha_xuat_ban`
--
ALTER TABLE `nha_xuat_ban`
  ADD PRIMARY KEY (`ID_NXB`);

--
-- Chỉ mục cho bảng `quanly`
--
ALTER TABLE `quanly`
  ADD PRIMARY KEY (`ID_QuanLy`);

--
-- Chỉ mục cho bảng `quanthu`
--
ALTER TABLE `quanthu`
  ADD PRIMARY KEY (`ID_QuanThu`),
  ADD KEY `ID_ChiNhanh_FK_QuanThu` (`ID_ChiNhanh`);

--
-- Chỉ mục cho bảng `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`ID_Sach`),
  ADD KEY `ID_NXB_FK` (`ID_NXB`),
  ADD KEY `ID_ChuDe_FK` (`ID_ChuDe`);

--
-- Chỉ mục cho bảng `sl_sach`
--
ALTER TABLE `sl_sach`
  ADD KEY `ID_ChiNhanh_FK_SLSach` (`ID_ChiNhanh`),
  ADD KEY `ID_Sach_FK_SLSach` (`ID_Sach`);

--
-- Chỉ mục cho bảng `xulivipham`
--
ALTER TABLE `xulivipham`
  ADD PRIMARY KEY (`ID_DocGia`),
  ADD KEY `ID_QuanThu_FK_XuLy` (`ID_DocGia`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `bl_dg` FOREIGN KEY (`ID_DocGia`) REFERENCES `docgia` (`ID_DocGia`),
  ADD CONSTRAINT `bl_sach` FOREIGN KEY (`ID_Sach`) REFERENCES `sach` (`ID_Sach`);

--
-- Các ràng buộc cho bảng `docgia`
--
ALTER TABLE `docgia`
  ADD CONSTRAINT `ID_DocGia_FK_DocGia` FOREIGN KEY (`ID_DocGia`) REFERENCES `nguoidung` (`ID`),
  ADD CONSTRAINT `ID_QuanThu_FK_DocGia` FOREIGN KEY (`ID_QuanThu`) REFERENCES `quanthu` (`ID_QuanThu`);

--
-- Các ràng buộc cho bảng `quanly`
--
ALTER TABLE `quanly`
  ADD CONSTRAINT `ID_QuanLy_FK_QuanLy` FOREIGN KEY (`ID_QuanLy`) REFERENCES `nguoidung` (`ID`);

--
-- Các ràng buộc cho bảng `quanthu`
--
ALTER TABLE `quanthu`
  ADD CONSTRAINT `ID_ChiNhanh_FK_QuanThu` FOREIGN KEY (`ID_ChiNhanh`) REFERENCES `chinhanh` (`ID_ChiNhanh`),
  ADD CONSTRAINT `ID_QuanThu_FK_QuanThu` FOREIGN KEY (`ID_QuanThu`) REFERENCES `nguoidung` (`ID`);

--
-- Các ràng buộc cho bảng `sach`
--
ALTER TABLE `sach`
  ADD CONSTRAINT `ID_ChuDe_FK` FOREIGN KEY (`ID_ChuDe`) REFERENCES `chu_de_sach` (`ID_ChuDe`),
  ADD CONSTRAINT `ID_NXB_FK` FOREIGN KEY (`ID_NXB`) REFERENCES `nha_xuat_ban` (`ID_NXB`);

--
-- Các ràng buộc cho bảng `sl_sach`
--
ALTER TABLE `sl_sach`
  ADD CONSTRAINT `ID_ChiNhanh_FK_SLSach` FOREIGN KEY (`ID_ChiNhanh`) REFERENCES `chinhanh` (`ID_ChiNhanh`),
  ADD CONSTRAINT `ID_Sach_FK_SLSach` FOREIGN KEY (`ID_Sach`) REFERENCES `sach` (`ID_Sach`);

--
-- Các ràng buộc cho bảng `xulivipham`
--
ALTER TABLE `xulivipham`
  ADD CONSTRAINT `xuly_dg` FOREIGN KEY (`ID_DocGia`) REFERENCES `docgia` (`ID_DocGia`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
