-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 01, 2023 lúc 01:14 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `database`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `android`
--

CREATE TABLE `android` (
  `id` int(20) NOT NULL,
  `tênsp` varchar(20) NOT NULL,
  `hìnhảnh` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `android`
--

INSERT INTO `android` (`id`, `tênsp`, `hìnhảnh`) VALUES
(1, 'Sữa', 'https://png.pngtree.com/element_our/20190604/ourlarge/pngtree-baby-milk-bottle-image_1475676.jpg'),
(2, 'Bỉm - Tã', 'https://cf.shopee.vn/file/f3b287db78b982640a475bb14ba44312'),
(3, 'Thời trang cho bé', 'https://png.pngtree.com/png-clipart/20200225/original/pngtree-baby-fashion-garment-clothes-vector-and-png-free-download-png-image_5293620.jpg'),
(4, 'Thời trang cho mẹ', 'https://img.lovepik.com/photo/40125/8602.jpg_wh860.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bỉm`
--

CREATE TABLE `bỉm` (
  `id` varchar(20) NOT NULL,
  `tênsp` varchar(40) NOT NULL,
  `hìnhảnh` varchar(20) NOT NULL,
  `category_id` int(11) NOT NULL,
  `thôngtinsp` text NOT NULL,
  `giá` decimal(6,2) NOT NULL,
  `nhàsảnxuất` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bỉm`
--

INSERT INTO `bỉm` (`id`, `tênsp`, `hìnhảnh`, `category_id`, `thôngtinsp`, `giá`, `nhàsảnxuất`) VALUES
(' 115227', 'Bỉm - Tã dán sơ sinh Huggies size NB - 3', 'h21.jpg', 1, 'Khô thoáng với 1000 phễu siêu thấm\r\nHộc chống tràn 3 chiều\r\nBề mặt Soft Touch êm mềm', 89.00, 'Công ty BIBO MART'),
(' 137563', 'Bỉm - Tã quần Huggies Big Jum size L 4', 'h23.jpg', 1, 'Siêu mỏng, siêu mềm, thoáng khí\r\nSiêu vừa vặn linh hoạt\r\nThấm hút khóa tràn vượt trội', 89.00, 'Công ty BIBO MART'),
('01098', 'Bỉm - Tã dán Merries size M 64 miếng ', 'h9.jpg', 1, 'Bề mặt tiếp xúc điểm xốp mịn\r\nCấu trúc 3 lớp siêu thoáng khí\r\nSiêu thấm hút và chống tràn tối ưu', 89.00, 'Công ty BIBO MART'),
('100131', 'Bỉm Diana Mama 12 miếng', 'h22.jpg', 1, 'Dành cho bà mẹ sau khi sinh\r\nBề mặt mềm mại\r\nSiêu thấm, chống tràn hiệu quả', 89.00, 'Công ty BIBO MART'),
('101014', 'Bỉm - Tã dán Moony 90 miếng ', 'h10.jpg', 1, 'Rãnh rốn Oheso\r\nBề mặt đa rãnh thấm\r\nSợi Nano siêu nhỏ và mịn', 89.00, 'Công ty BIBO MART'),
('116673', 'Bỉm - Tã dán  Extra Soft - Dry cao ', 'h11.jpg', 1, 'Mặt sóng mềm\r\nThun lưng co giãn Soft - Fit\r\nMàng đáy xốp êm - thoáng khí', 89.00, 'Công ty BIBO MART'),
('119872', 'Bỉm - Tã dán Huggies Platinum siêu cao c', 'h24.jpg', 1, 'Siêu mỏng, siêu mềm, thoáng khí\r\nSiêu vừa vặn linh hoạt\r\nThấm hút khóa tràn vượt trội', 89.00, 'Công ty BIBO MART'),
('806861', 'Bỉm - Tã dán Goldgi+ size NB 92 miếng', 'h12.jpg', 1, 'Siêu mỏng chỉ 1.5mm\r\nCông nghệ phân tử SAP siêu thấm, không vón cục\r\nSiêu mềm thoáng khí, không hằn đỏ', 89.00, 'Công ty BIBO MART');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'bỉm'),
(2, 'sữa'),
(3, 'thoitrangchobe'),
(4, 'thoitrangchome');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `tênsp` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `hìnhảnh` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `thôngtinsp` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `giá` decimal(6,2) NOT NULL,
  `nhàsảnxuất` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `tênsp`, `hìnhảnh`, `category_id`, `thôngtinsp`, `giá`, `nhàsảnxuất`) VALUES
('100800', 'Sữa Frisomum Gold hương cam 400g', 'h3.jpg', 2, '100% nguồn sữa từ Hà Lan\r\nDualCare+ hỗ trợ sức khỏe cho cả mẹ và bé\r\nVị cam thơm ngon hấp dẫn', 640.00, ' Công ty cổ phần Bib'),
('101070', 'Sữa Similac Mom IQ Plus hương vani 9', 'h4.jpg', 2, 'Dinh dưỡng bổ sung hợp lý cho mẹ\r\nHỗ trợ tiêu hóa và miễn dịch\r\nPhát triển não bộ cho bé', 64.00, 'Công ty BIBO MART'),
('112911', 'Sữa Frisolac Gold số 1 400g', 'h5.jpg', 2, 'Công nghệ LockNutri giúp bé dễ dàng tiêu hóa và hấp thu\r\n100% nguồn sữa từ Hà Lan\r\nTăng cường miễn dịch, tăng trưởng cơ thể và phát triển não bộ', 64.00, 'Công ty BIBO MART'),
('120932', 'Sữa Similac IQ Plus HMO  số 1', 'h8.jpg', 2, 'Hệ IQ Plus phát triển trí não tối ưu\r\nDưỡng chất HMO tăng cường miễn dịch\r\nChất xơ FOS giúp tiêu hóa khỏe, không táo bón', 64.00, 'Công ty BIBO MART'),
('127156', 'Sữa Optimum Gold 4 HT 850g', 'h6.jpg', 2, 'HMO (2\'-Fl) hỗ trợ hệ tiêu hóa và sức đề kháng khỏe mạnh\r\nĐạm whey giàu Alpha-lactalbumin dễ tiêu hóa, hấp thu\r\n20% DHA từ tảo tinh khiết hỗ trợ phát triển não bộ', 64.00, 'Công ty BIBO MART'),
('562014', 'Sữa Auramil MOM 900G', 'h2.gif', 2, 'SẢN PHẨM DINH DƯỠNG CHO PHỤ NỮ MANG THAI & CHO CON BÚ\r\nAuramil Mom với dưỡng chất Lactium: là peptide thu được từ quá trình thủy phân đặc biệt Casein sữa giúp:\r\nTăng cường cảm giác thoải mái, thư thái; Hỗ trợ duy trì giấc ngủ tự nhiên;\r\n Giảm stress cho mẹ trong suốt thai kỳ.', 64.00, 'Công ty sữa Aurim'),
('8011124', 'Sữa bầu hoàng gia Pregnant Mother F', 'h1.jpg', 2, 'Xuất xứ: Australia Bổ sung 16 loại vitamin và khoáng chất cần thiết cho bà bầuTăng cường sức đề kháng cho mẹ và thai nhi.Giúp thai nhi phát triển toàn diện về cả thể chất và trí não Giảm các triệu chứng thiếu máu, thiếu chất ở mẹ.', 64.00, 'CÔNG TY TNHH PHÁT'),
('805620', ' Sữa Infatrini Nutricia Pulver', 'h7.jpg', 2, 'Hàm lượng đạm và năng lượng cao nhất\r\nChứng minh lâm sàng giúp phục hồi sức khỏe nhanh chóng\r\nSản phẩm được nhập khẩu trực tiếp từ Mỹ', 64.00, 'Công ty BIBO MART');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thoitrangchoebe`
--

CREATE TABLE `thoitrangchoebe` (
  `id` varchar(20) NOT NULL,
  `tênsp` varchar(40) NOT NULL,
  `hìnhảnh` varchar(20) NOT NULL,
  `category_id` int(11) NOT NULL,
  `thôngtinsp` text NOT NULL,
  `giá` decimal(6,2) NOT NULL,
  `nhàsảnxuất` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `thoitrangchoebe`
--

INSERT INTO `thoitrangchoebe` (`id`, `tênsp`, `hìnhảnh`, `category_id`, `thôngtinsp`, `giá`, `nhàsảnxuất`) VALUES
(' 109177', 'Bộ đồ bơi bé trai liền thân kẻ kèm mũ tú', 'h25.jpg', 3, 'Chất vải mềm mại\r\nBộ liền thân kèm mũ tiện dụng\r\nHọa tiết ngộ nghĩnh', 124.00, 'Công ty BIBO MART'),
(' 21230115', 'Bộ mothercare - set bodysuit kèm yếm màu', 'h18.jpg', 3, 'Món quà tuyệt đẹp cho một em bé mới chào đời, bộ sản phẩm đáng yêu này lý tưởng để giữ cho con của bạn luôn ấm áp trong những tháng đầu tiên của bé! Bao gồm một áo thun kèm quần yếm', 124.00, 'Công ty Mothercare'),
(' 25190105', 'Bộ mothercare - đầm phối màu bé gái', 'bo2.png', 3, 'Cô con gái bé nhỏ của mẹ chắc chắn sẽ thích những chiếc váy bồng bềnh tựa như những thanh kẹo và những con tuần lộc mũi đỏ! Hãy khoác lên trang phục để vui chơi lễ hội cùng con mẹ nhé', 124.00, 'Công ty Mothercare'),
('112976', 'Bộ đồ bơi bé trai liền thân người nhện k', 'h26.jpg', 3, 'Chất vải mềm mại\r\nBộ liền thân kèm mũ tiện dụng\r\nHọa tiết người nhện ngộ nghĩnh', 124.00, 'Công ty BIBO MART'),
('122087C', 'Bộ đồ ngủ dễ thương', 'h27.jpg', 3, 'Chất liệu cotton mềm mại, thông thoáng\r\nBộ sơ sinh cài giữa tiện dụng\r\nHọa tiết thêu thỏ đáng yêu', 124.00, 'Công ty BIBO MART'),
('130984C', 'Bộ sơ sinh cài giữa bé trai Bibo\'s thêu ', 'h28.jpg', 3, 'Bộ sơ sinh bé trai Bibo\'s thêu hình cún và gấu là sự lựa chọn hoàn hảo cho các bé sơ sinh từ 0 tháng đến 1 tuổi. Sản phẩm được làm từ chất liệu Cotton & Modal thoáng mát và mềm mịn bé mặc vào mùa thu đông sẽ luôn cảm thấy ấm áp, dễ chịu khi vận động hoặc khi ngủ cũng vô cùng thoáng mát.', 124.00, 'Công ty BIBO MART'),
('16112002', 'Bộ mothercare - jumpsuit bé gái', 'bo1.png', 3, 'Với phong cách tươi sáng và thoải mái trong bộ jumpsuit ống rộng này. Với kiểu dáng co giãn và dây đai co giãn để dễ dàng kéo vào, bộ jumpsuit này là lựa chọn hoàn hảo cho bé.', 124.00, ' Công ty Mothercare'),
('21230110', 'Bộ mothercare - set bodysuit kèm yếm dài', 'bo3.png', 3, 'Những chi tiết nhỏ đáng yêu từ bộ trang phục đầy màu sắc, sẽ giúp con thêm phần yêu thích trang phục đáng yêu này. Bộ quần áo được gia công từ 100% cotton mềm mại, với sự kết hợp của chiếc yếm, cùng dây quai chắc chắn góp phần giúp bộ trang phục luôn ngay ngắn trong quá trình bé vận động', 124.00, 'Công ty Mothercare');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thoitrangchome`
--

CREATE TABLE `thoitrangchome` (
  `id` varchar(20) NOT NULL,
  `tênsp` varchar(40) NOT NULL,
  `hìnhảnh` varchar(20) NOT NULL,
  `category_id` int(11) NOT NULL,
  `thôngtinsp` text NOT NULL,
  `giá` decimal(6,2) NOT NULL,
  `nhàsảnxuất` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `thoitrangchome`
--

INSERT INTO `thoitrangchome` (`id`, `tênsp`, `hìnhảnh`, `category_id`, `thôngtinsp`, `giá`, `nhàsảnxuất`) VALUES
(' 125888', 'Váy cộc tay cho mẹ sau sinh ', 'vay4.png', 4, 'Chất liệu mềm mại, mặt vải trơn bóng ấn tượng\r\nKiểu dáng rộng rãi, thoải mái, dễ dàng hoạt động\r\nDiềm cổ, xếp ly và 2 túi nhỏ nữ tính, nhẹ nhàng', 87.00, 'Công ty BIBO MART'),
('10100120', 'Váy mothercare - quần jeans skinny màu x', 'h15.jpg', 4, 'Ai nói mẹ bầu lại không được mặc quần jeans? Chiếc quần jeans của chúng tôi là sản phẩm thích hợp cho mẹ bầu nhờ chất liệu co dãn tuyệt đối cùng với phần vải thêm không đường may ôm sát qua bụng nhằm nâng đỡ vòng bụng giúp mẹ bầu luôn thoải mái trong mọi vận động. Chiếc quần jean này giúp mẹ bầu trông vô cùng năng động và thời trang. Chú thích size quần: 14L32 - 14 là size quần (size UK)/ L32 là chiều dài quần (theo inches) 14L34 - 14 là size quần (size UK)/ L34 là chiều dài quần (theo inches) 16L32 - 16 là size quần (size UK)/ L32 là chiều dài quần (theo inches) 16L34 - 16 là size quần (size UK)/ L34 là chiều dài quần (theo inches) 18L32 - 18 là size quần (theo inches)/ L32 là chiều dài quần (theo inches) 18L34 - 18 là size quần (size UK)/ L34 là chiều dài quần (theo inches)', 87.00, 'Công ty Mothercare'),
('10140105', 'Váy mothercare - đầm mẹ bầu màu xám tiện', 'h16.jpg', 4, 'Chiếc đầm bầu màu xám sang trọng và thanh lịch này được thiết kế vừa vặn với những đường cong cơ thể giúp tôn dáng và trông gọn gàng hơn. Đầm được làm từ chất liệu vải mềm mại có độ co dãn tốt giúp mẹ bầu cảm thấy thoải mái để khoác lên khi đi làm hoặc dạo chơi.', 87.00, 'Công ty Mothercare'),
('101401052', 'Váy mothercare - đầm cho mẹ bầu họa tiết', 'h13.jpg', 4, 'Chiếc đầm bầu họa tiết chấm bi đen sang trọng và thanh lịch này được thiết kế vừa vặn với những đường cong cơ thể giúp tôn dáng và trông gọn gàng hơn. Đầm được làm từ chất liệu vải mềm mại có độ co dãn tốt giúp mẹ bầu cảm thấy thoải mái để khoác lên khi đi làm hoặc dạo chơi.', 87.00, 'Công ty Mothercare'),
('125887', 'Váy cục tay cho mẹ sau sinh full size', 'vay3.png', 4, 'Chất liệu mềm mại, mặt vải trơn bóng ấn tượng\r\nKiểu dáng rộng rãi, thoải mái, dễ dàng hoạt động\r\nDiềm cổ, xếp ly và 2 túi nhỏ nữ tính, nhẹ nhàng', 87.00, 'Công ty BIBO MART'),
('125889', 'Váy dễ thương cho mẹ bầu', 'vay2.png', 4, 'Chất liệu mềm mại, mặt vải trơn bóng ấn tượng\r\nKiểu dáng rộng rãi, thoải mái, dễ dàng hoạt động\r\nDiềm cổ, xếp ly và tay lỡ phồng nữ tính, nhẹ nhàng', 87.00, 'Công ty BIBO MART'),
('135619C', ' Váy dài tay cho mẹ sau sinh dễ thương', 'vay1.png', 4, 'Cơ thể mẹ sau sinh vô cùng mệt mỏi, do đó bộ dài tay cho mẹ sau sinh Bibo\'s thỏ vàng với kiểu dáng rộng rãi cùng thiết kế tiện dụng sẽ là item không thể thiếu giúp mẹ vơi bớt đi phần nào sự đau nhức của cơ thể đồng thời chăm sóc bé thuận tiện hơn. Sản phẩm được thiết kế với khóa kéo 2 bên ngực áo cùng chun quần mềm mại co giãn linh hoạt không chỉ đem lại sự chăm sóc tuyệt vời cho mẹ mà còn giúp mẹ dễ dàng hơn khi cho bé bú hay hút sữa.', 87.00, 'Công ty BIBO MART'),
('19120110', 'Váy mothercare - pyjama đồ ngủ cho mẹ bầ', 'h14.jpg', 4, 'Đồ ngủ pyjama cho mẹ bầu được làm từ vải cotton thoáng khí mang đến sự thoải mái và dễ chịu cho mẹ trong suốt thời gian thai kỳ.', 87.00, 'Công ty Mothercare');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `name` varchar(20) NOT NULL,
  `pass` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`name`, `pass`) VALUES
('admin', '12345');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bỉm`
--
ALTER TABLE `bỉm`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `thoitrangchoebe`
--
ALTER TABLE `thoitrangchoebe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `thoitrangchome`
--
ALTER TABLE `thoitrangchome`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`name`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bỉm`
--
ALTER TABLE `bỉm`
  ADD CONSTRAINT `bỉm_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Các ràng buộc cho bảng `thoitrangchoebe`
--
ALTER TABLE `thoitrangchoebe`
  ADD CONSTRAINT `thoitrangchoebe_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Các ràng buộc cho bảng `thoitrangchome`
--
ALTER TABLE `thoitrangchome`
  ADD CONSTRAINT `thoitrangchome_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
