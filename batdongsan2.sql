-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 04, 2018 lúc 09:29 AM
-- Phiên bản máy phục vụ: 10.1.31-MariaDB
-- Phiên bản PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `batdongsan2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `duan`
--

CREATE TABLE `duan` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `price` text CHARACTER SET utf8 NOT NULL,
  `intro` longtext COLLATE utf8_unicode_ci NOT NULL,
  `images` text COLLATE utf8_unicode_ci NOT NULL,
  `schedule` decimal(3,0) NOT NULL,
  `vitri` text CHARACTER SET utf8 NOT NULL,
  `schedule_start` date DEFAULT NULL,
  `schedule_build` date DEFAULT NULL,
  `schedule_success` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `duan`
--

INSERT INTO `duan` (`id`, `title`, `price`, `intro`, `images`, `schedule`, `vitri`, `schedule_start`, `schedule_build`, `schedule_success`) VALUES
(1, 'FLC Grand Hotel Hạ Long', '15 triệu/m²', '                                FLC Grand Hotel Hạ Long nằm ở vị trí đẹp bậc nhất thành phố du lịch biển với view toàn cảnh vịnh Hạ Long. Dự án có có địa thế \"tựa sơn hướng hải\" đem lại may mắn, thịnh vượng và tài lộc cho chủ sở hữu. Condotel FLC Hạ Long hứa hẹn đem đến cho các nhà đầu tư cơ hội đầu tư sinh lợi nhuận vượt trội.<br>\r\n<br>\r\n- Tên dự án: FLC Grand Hotel Hạ Long<br>\r\n- Quy mô dự án: 224 ha<br>\r\n- Tổng mức đầu tư: 3.400 tỷ đồng<br>\r\n- Quy mô Condotel: Cao 21 tầng nổi và 1 tầng hầm<br>\r\n- Các sản phẩm đa dạng: Căn hộ 1 phòng ngủ (từ 44-48m2), căn hộ 2 phòng ngủ (từ 89,8-91,8m2), căn hộ 3 phòng ngủ (136,5m2), Penhouse<br>\r\n- Đơn vị quản lý: FLC Group đã quản lý hàng loạt các dự án nghỉ dưỡng quy mô lớn ở Quy Nhơn, Vĩnh Phúc, Sầm Sơn<br>                          ', 'duan1.jpg', '100', 'Cột số 3 - số 8, phường Hồng Hà, Hạ Long, Quảng Ninh', '2018-05-08', '2018-05-25', '2018-05-31'),
(2, 'PentStudio', 'Đang cập nhật', '                                                                PentStudio Tây Hồ (chung cư 699 Lạc Long Quân) là tổ hợp căn hộ cao cấp đạt tiêu chuẩn 5 sao quốc tế tọa lạc tại số 699 đường Lạc Long Quân, Tây Hồ, Hà Nội. Dự án có view thoáng ra cầu Nhật Tân và Hồ Tây. Công trình là điểm nhấn kiến trúc bên Hồ Tây, mang phong cách sang trọng, hiện đại cùng các dịch vụ cao cấp.\r\n\r\n- Tên dự án: PentStudio\r\n- Chủ đầu tư: Công ty TNHH Đầu tư C.T.L\r\n- Nhà phát triển dự án: CTX Holdings\r\n- Tư vấn thiết kế: Kaze<br>\r\n- Số tầng: 18 tầng nổi và 3 tầng hầm<br>\r\n- Tầng 1: Khu dịch vụ tiện ích và sảnh lễ tân<br>\r\n- Tầng 2 tới tầng 9: 168 căn hộ dịch vụ<br>\r\n- Tầng 10 tới tầng 17: 151 căn hộ<br>\r\n- Tầng 18: Khu dịch vụ<br>\r\n- Số căn hộ: 319 căn hộ<br>\r\n- Diện thích thông thủy: Từ 45-108m2<br>\r\n- Diện tích sử dụng: Từ 75-175m2<br>\r\n- Dự kiến bàn giao: Quý I/2018<br>\r\n- Hình thức sở hữu: Vĩnh viễn<br>                                                    ', 'duan2.jpg', '90', 'Lô B, số 699 Lạc Long Quân, phường Phú Thượng, quận Tây Hồ, Hà Nội', '2018-05-25', '2020-05-24', '0000-00-00'),
(3, 'The Sapphire Residence', 'Đang cập nhật', '                                The Sapphire Residence là khu đô thị đáng sống nhất Hạ Long. Nơi đây được xem là Dubai thu nhỏ ở Việt Nam, hội tụ những cá nhân ưu tú nhất Quảng Ninh. Các cư dân tại đây có thể thanh thơi tận hưởng cuộc sống nghỉ dưỡng \"chuẩn resort\" mỗi ngày.\r\n\r\n- Tên dự án: The Sapphire Residence\r\n- Chủ đầu tư: Công ty TNHH Bất động sản DojiLand (Thành viên tập đoàn Vàng bạc đá quý Doji)<br>\r\n- Đơn vị thiết kế: West Green Design và LJ-ASIA<br>\r\n- Đơn vị thi công: Coteccons<br>\r\n- Loại hình: Căn hộ cao cấp, ShopOffice, biệt thự<br>\r\n- Quy mô: 2 tòa tháp cao 31 tầng, 2 tầng hầm<br>\r\n- Tổng diện tích: 7.647m2<br>\r\n- Diện tích xây dựng: 2.294m2<br>\r\n- Mật độ xây dựng: 30%<br>\r\n- Diện tích căn hộ: Từ 53-130m2 (1-4 phòng ngủ)<br>\r\n- Thời gian khởi công: Quý I/2017<br>\r\n- Dự kiến bàn giao: Quý IV/2018<br>                          ', 'duan3.jpg', '80', 'Đường Trần Quốc Nghiễn, phường Hồng Gai, TP. Hạ Long, Quảng Ninh', '2017-02-19', '2019-03-20', '0000-00-00'),
(4, 'Khu đô thị mới Văn Phú', '15 triệu/m²', '                                Khu đô thị mới Văn Phú nằm cách trung tâm quận Hà Đông chỉ khoảng 1,5km về phía Tây Bắc, tổng diện tích lên đến 94,1 ha và được đầu tư hơn 1.900 tỷ đồng. Dự án do Công ty CP Kinh doanh Nhà Quảng Ninh làm chủ đầu tư. Trong tương lai, đây sẽ là một khu đô thị hiện đại của TP. Hà Nội và tạo chỗ ở mới cho vài chục nghìn dân… Vì thế, dự án này đã trở thành một “điểm nóng” thu hút sự quan tâm lớn của người dân.<br>\r\n\r\nKhu đô thị có tổng diện tích dự án 94.1 ha, trong đó: đất ở diện tích 38,9 ha, chiếm tỷ lệ 41.3%, các công trình hạ tầng xã hội (bao gồm: trường học, mẫu giáo, nhà hành chính khu đô thị, chợ, trung tâm y tế khu vực, các công trình dịch vụ thương mại...). Diện tích 9.7 ha, chiếm tỷ lệ 10.3%; đất công viên, cây xanh, sân chơi nội bộ diện tích7.2 ha, chiếm tỷ lệ 7.7%; đất giao thông, bãi đỗ xe diện tích 36.2 ha, chiếm tỷ lệ 38.4%; đất hạ tầng kỹ thuật diện tích 2.2 ha, chiếm tỷ lệ 2.3%.<br>                          ', 'duan4.jpg', '100', 'Đường Lê Trọng Tấn, Phường Phú La, Hà Đông, Hà Nội', '2017-01-08', '2018-03-08', '2018-05-08'),
(306, 'Chung cư Đại Thanh', '10 triệu/m²', '                                                                Chung cư Đại Thanh, Cầu Tó, huyện Thanh Trì, Hà Nội là một trong các tổ hợp chung cư thương mại có diện tích nhỏ, giá rẻ. Dự án tọa lạc trên trục đô thị phát triển khu vực Tây Nam TP. Hà Nội, dọc trục đường Vành Đai 70.<br>\r\n\r\nTổ hợp chung cư tiếp giáp với nhiều quận, huyện lớn của thủ đô như Thanh Xuân, Hà Đông, Thanh Trì, Hoàng Mai. Khu vực này tập trung nhiều khu đô thị lớn như Khu đô thị Xa La, khu đô thị kiểu mẫu Linh Đàm, khu đô thị Đại Thanh, khu đô thị Văn Quán, khu đô thị Richland Đại Thanh,...<br>\r\n\r\n- Tên dự án: Chung cư Đại Thanh<br>\r\n- Chủ đầu tư: Xí nghiệp Xây dựng tư nhân số I Lai Châu<br>\r\n- Đơn vị tư vấn bán hàng: Công ty CP Tư vấn Bất động sản Đất Việt - Sàn Đất Việt<br>\r\n- Quy mô: 17 ha<br>\r\n- Khởi công: 2011<br>\r\n\r\nDự án Đại Thanh sở hữu vị trí đắc địa, nằm trong khu vực phát triển mới với giao thông thuận tiện, không gian rộng mở. Tổ hợp chung cư ra đời trong bối cảnh nhu cầu thực gia tăng với giá cả và diện tích cực kỳ hợp lý. Vì thế, đây sẽ là cơ hội an cư và đầu tư cho khách hàng.<br>                                                    ', 'duan5.jpg', '50', 'Đường Phan Trọng Tuệ, Xã Tả Thanh Oai, Thanh Trì, Hà Nội', '2016-12-05', '2019-06-20', '0000-00-00'),
(4726, 'abcfs', '10triệu/m2.  ', '\r\n                        ạdfbfc', 'bds11.jpg', '80', 'sbgc ', '2018-02-10', '2018-12-03', '0000-00-00'),
(8540, 'Zen Tower', '14.5 triệu/m²', '                                Dự án Zen Tower (nhà ở xã hội Hoa Phượng) được đầu tư bởi Công ty TNHH Sợi Hạ Long với mục đích hỗ trợ công nhân viên cũng như người dân quận 12, Tp.HCM có thể sở hữu cho riêng mình và gia đình một căn hộ bảo đảm chất lượng với mức giá hợp túi tiền, chỉ hơn 600 triệu/căn diện tích 54m2.<br>\r\n\r\n- Tên dự án: Zen Tower<br>\r\n- Địa chỉ: 34/1A Quốc lộ 1A, phường Thới An, quận 12, Tp.HCM<br>\r\n- Chủ đầu tư: TNHH Sợi Hạ Long - Nhật Bản<br>\r\n- Đơn vị thi công: Phước Thành Contrucstion<br>\r\n- Số block: 2<br>\r\n- Số tầng: 18<br>\r\n- Tầng hầm: 1<br>\r\n- Tổng số căn hộ: 528<br>\r\n- Các loại fiện tích : 45.3m2 - 78m2<br>                          ', 'duan7.jpg', '100', 'Số 34/1A Quốc Lộ 1A, phường Thới An, quận 12, Tp.HCM', '2015-01-22', '2017-12-09', '2018-03-18'),
(14477, 'Khu biệt thự Hưng Thịnh', '7.7 triệu/m²', '                                                                Khu biệt thự cao cấp Hưng Thịnh có vị trí hài hòa bên cạnh đồi thông của Đà Lạt ở độ cao cách mặt nước biển 1.500m. Dự án gồm 11 ngôi biệt thự lãng mạn, thiết kế theo phong cách kiến trúc của Châu Âu. Đây được coi là nơi ẩn cư hoàn hảo dành cho giới thượng lưu đang đi tìm vẻ đẹp của thiên nhiên cùng với sự thư giãn cho riêng mình. Mức nhiệt độ trung bình tại đây là 20 độ C vào mùa hè và khoảng 15 độ C vào mùa đông, luôn thoáng mát với bầu không khí trong lành, bầu trời trong xanh, cùng những rừng thông bạt ngàn và vườn hoa muôn sắc. Nơi đây không chỉ thu hút du khách nước ngoài mà bất kì người dân Việt Nam nào cũng bị nao lòng trước cảnh sắc thiên nhiên.<br>\r\n\r\n- Tên chính thức: Khu biệt thự Hưng Thịnh<br>\r\n- Chủ đầu tư: Công ty CP Bất Động Sản Hưng Thịnh Đà Lạt là thành viên của Hung Thinh corp<br>\r\n- Địa chỉ: 30 – 31 Trạng Trình, Phường 9, TP Đà Lạt, Việt Nam<br>\r\n- Đơn vị tư vấn thiết kế: Công ty CP Thiết kế – Xây dựng Hưng Thịnh<br>\r\n- Quy mô: gồm 11 nền biệt thự cao cấp có diện tích từ 157m2 đến 300m2<br>\r\n- Giá bán: từ 7,7 triệu đồng/m2<br>\r\n- Diện tích toàn khu đất: 3205m2<br>\r\n- Mật độ xây dựng: 50%<br>\r\n- Tầng cao xây dựng: 1 hầm, 2 tầng + áp mái<br>                                        ', 'duan6.jpg', '50', '30-31 Trạng Trình, Phường 9, Đà Lạt, Lâm Đồng', '2017-02-25', '2019-08-17', '0000-00-00'),
(25185, 'Kimaria Collections', '3 tỷ', '\r\n                       fagfacx ', 'blog-nha-dep-4.jpg', '100', 'Lô B, số 699 Lạc Long Quân, phường Phú Thượng, quận Tây Hồ, Hà Nội', '2017-02-12', '2018-02-12', '2018-05-12'),
(27749, 'Thới An City', '13.9 triệu/m²', '                                Thới An City là dự án khu dân cư do Công ty Cao Phú Thịnh và Công ty CP Đầu tư địa ốc Radar hợp tác đầu tư. Dự án có quy mô 7,2 ha, thuộc phường Thới An, quận 12, tiếp giáp Gò Vấp, cách quốc lộ 1A 100m, gồm các nền nhà phố có diện tích từ 120 - 170m2<br>\r\n\r\nKhu dân cư sở hữu hạ tầng đồng bộ, hoàn thiện, đường nội bộ 8m, vỉa hè 2,5m, cây xanh 8 tuổi. Dự án có 2 mặt giáp sông, liền kề QL1A, giáp Gò Vấp, liền kề ga Metro số 4 (Nhà Bè - quận 12), sổ đỏ từng lô.                          ', 'duan8.jpg', '90', 'Phường Thới An, Quận 12, Hồ Chí Minh', '2016-07-14', '2018-05-20', '0000-00-00'),
(30690, 'Nhà ở cao cấp La Cosmo Residences', '5 tỷ', '                                             La Cosmo - một bước chân đến tất cả tiện ích\r\n\r\nNguồn cung căn hộ cao cấp ở khu Đông và khu Nam Sài Gòn vẫn không ngừng gia tăng. Trong khi đó, khoảng 2 năm trở lại đây, khu vực Quận Tân Bình, Phú Nhuận, lân cận sân bay Tân Sơn Nhất, chưa có nguồn cung mới căn hộ sở hữu lâu dài. Chính vì vậy, La Cosmo là dự án căn hộ cao cấp hiếm hoi trên thị trường được nhiều khách hàng chờ đợi, vì sự khan hiếm nguồn cung trong khu vực.\r\n\r\nQuỹ đất khan hiếm và đắt đỏ cũng chính là yếu tố các dự án căn hộ cao cấp khu vực này luôn duy trì thanh khoản tốt và biên độ lợi nhuận tối ưu cho nhà đầu tư. Theo khảo sát các dự án trong khu vực sầm uất này, biên độ tăng giá trên thị trường thứ cấp phổ biến ở mức trên dưới 30%, từ khi mở bán đến khi bàn giao nhà.\r\n\r\nVới vị trí độc tôn, La Cosmo đã được An Gia Hưng Corp. và các đối tác phát triển dự án tôn vinh bằng thiết kế tinh hoa bền vững. Dự án được thiết kế bởi các đơn vị tư vấn quốc tế, mang đến cho La Cosmo một cảm hứng tân thời và trọn vẹn. Thiết kế trau chuốt, chú trọng yếu tố xanh - bền vững, giúp giảm chi phí vận hành lâu dài và bắt kịp xu hướng phát triển chung của bất động sản trên thế giới.\r\n\r\nLa Cosmo là dự án tiên phong áp dụng đồng bộ các giải pháp tiết kiệm năng lượng, tiết kiệm nước và sử dụng vật liệu thân thiện với môi trường. Điển hình là việc tối ưu hóa các giải pháp thông gió, chiếu sáng tự nhiên cho khu vực đậu xe; Chiếu sáng tự nhiên tầng hầm; Giải pháp đón ánh sáng và gió tự nhiên vào căn hộ; Sử dụng thiết bị vệ sinh tiết kiệm nước; Đèn sân vườn năng lượng mặt trời; Đèn LED chiếu sáng; Vật liệu không nung…\r\n\r\nCuộc sống tại La Cosmo là sự tận hưởng đích thực với “một bước chân ngàn tiện ích”. Đây là nơi có hệ thống tiện ích ngoại khu lân cận phong phú như: Trung tâm thương mại Lotte Mart, VinMart, Auchan; Các trường quốc tế Việt Úc, Á Châu, Saigon Academy; Rạp chiếu phim CGV và Lotte; Phòng tập GYM California và Fit24; Các cụm sân tennis, cầu lông, bóng đá;Bệnh viện Thống Nhất, Hoàn Mỹ, phụ sản Mekong, Saigon Ito…\r\n\r\nBên cạnh đó là hơn 50 tiện ích nội khu được đầu tư chăm chút và quản lý bài bản đáp ứng yêu cầu đa dạng của cộng đồng dân cư thịnh vượng, dân trí cao và đa văn hóa.                                                                                                                                                   \r\n                                                                                                                                                                                    ', 'vay-von-tin-chap-mua-nha-cao-cap2.jpg', '100', '36 - 38 Nguyễn Văn Trỗi, quận Phú Nhuận, TP Hò Chí Minh', '2017-01-02', '2018-03-09', '2018-05-12'),
(31985, 'Căn hộ cao cấp ', '12', '                                                                                                                                                              \r\n           Với tính cách không quá phô trương, chủ nhân của căn hộ cao cấp muốn một thiết kế trang nhã sang trọng khiêm tốn cho tổ ấm của mình. Vừa bước vào ngôi nhà, bạn sẽ cảm thấy bị cuốn hút bởi sàn nhà bằng đá hoa cương đen với một đường kẻ hoa văn trải dài dọc suốt hành lang và cũng là ranh giới phân biệt với sàn nhà màu có tông màu sáng hơn tại khu vực phòng khách, tạo nên sự tương phản nổi bật. Căn hộ bao gồm 4 phòng ngủ với thiết kế hoàn toàn khác nhau thể hiện phong cách riêng của chủ nhân mỗi căn phòng                                                                                                                     ', 'can-ho-cao-cap-sang-trong-01.jpg', '67', 'tổ 7, phường Trần Lãm, TP Thái Bình', '2018-01-01', '2019-01-01', '0000-00-00'),
(32133, 'Đất nền Thái Bình', '700.000.000 đ', '                                                                                                \r\n                  Vốn dĩ được biết đến là một mảnh đất giàu tiềm năng, Long Thành luôn chứng tỏ được mình khi liên tục hoàn thành xuất sắc mọi chỉ tiêu mà tỉnh Đồng Nai đề ra.  Tuy mới được thành lập cách đây chỉ hơn 1 thập kỷ, thế nhưng, huyện này đã khiến nhiều khu vực khác phải dành sự nể phục bởi tốc độ phát triển nhanh chóng về mọi mặt.\r\nĐiều trên đã trở thành một trong số những lý do chính khiến cho đất nền Long Thành chiếm được sự quan tâm của đông đảo mọi người. Không chỉ những người đang sinh sống tại tỉnh Đồng Nai, ngay cả các nhà đầu tư, người có nhu cầu mua đất làm nhà ở thuộc nhiều tỉnh thành khác cũng cảm thấy đất nền Long Thành hết sức hấp dẫn. Nhờ vậy, ngày càng có nhiều người đổ xô về Long Thành để tìm kiếm cho mình những mảnh đất nền ưng ý để phục vụ nhu cầu cá nhân.\r\nĐỉnh điểm là vào thời điểm 2017, khi mà dự án sân bay Long Thành chính thức được phê duyệt, bất động sản nơi đây bất chợt trở nên tăng đột “hot” hơn bao giờ hết. Lúc này, đất nền sân bay Long Thành nói riêng và toàn bộ khu vực thuộc huyện này nói chung trở thành chủ đề chính được nhiều người bàn tán. Nhiều người đã nhanh tay chọn cho mình các mảnh đất nơi đây với hy vọng nó có thể giúp họ hưởng được lợi ích lâu dài.                                                                                    ', 'dat-nen-da-nang.jpg', '100', 'Tổ 2, Phường Lê Quý Đôn, TP Thái Bình', '2018-02-10', '0000-00-00', '2018-05-20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `duan1`
--

CREATE TABLE `duan1` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` text CHARACTER SET utf8 NOT NULL,
  `intro` longtext COLLATE utf8_unicode_ci NOT NULL,
  `images` text COLLATE utf8_unicode_ci NOT NULL,
  `schedule` decimal(3,0) NOT NULL,
  `vitri` text CHARACTER SET utf8 NOT NULL,
  `ngaybatdau` date DEFAULT NULL,
  `dukien` date DEFAULT NULL,
  `hoanthanh` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `duan1`
--

INSERT INTO `duan1` (`id`, `title`, `price`, `intro`, `images`, `schedule`, `vitri`, `ngaybatdau`, `dukien`, `hoanthanh`) VALUES
(0, '', '', '', '', '0', '', '2018-05-16', '2018-05-26', '2018-05-27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `phone` text CHARACTER SET utf8 NOT NULL,
  `noidung` longtext COLLATE utf8_unicode_ci NOT NULL,
  `product_order` varchar(255) CHARACTER SET utf8 NOT NULL,
  `time` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `noidung`, `product_order`, `time`) VALUES
(1058, 'babgs', 'xhxxhag@gmail.com', '0199376454', '7hdbdc', 'Zen Tower', 1528088956),
(1770, 'chuan', 'chuanbran@gmail.com', '1231233123', 'aaaaaaaaaaaa', 'FLC Grand Hotel Hạ Long', 1527563563),
(9137, 'quyen', 'a@gmail.com', '576836', 'agdn', 'FLC Grand Hotel Hạ Long', 1527563563),
(11204, 'trang', 'trang@gmail.com', '0163934746', '\"Cuộc chiến\" tiện ích của phân khúc căn hộ vừa túi tiền', 'abcfs', 1527582132),
(11989, 'chuan', 'chuanbran@gmail.com', '1231233123', 'xaÁDASDAD', 'ĐẤT NỀN LIỀN KỀ KĐT HIM LAM', 1527563563),
(13912, '44', 'quyentabi95@gmail.com', '4554646464', '4646464', 'CHUNG CƯ CC AN BÌNH', 1527563563),
(15472, 'doquyen', 'doquyen236@gmail.com', '01639536478', 'mua', 'Khu biệt thự Hưng Thịnh', 1528089123),
(31283, 'đỗ tuấn đạt', 'tuandat@gmail.com', '0986903385', 'mdjy', 'NHÀ SỔ HỒNG ĐƯỜNG MIẾU GÒ XOÀI BÌNH TÂN', 1528088523),
(31447, 'ậdhb', 'doquyen236@gmail.com', '4554646464', 'xcdfsfewaf', 'FLC Grand Hotel Hạ Long', 1527581877),
(32237, 'trang', 'trang@gmail.com', '01933743426', 'đặt trước', 'ĐẤT NỀN LIỀN KỀ KĐT HIM LAM', 1528088699),
(32708, '', '', '', '', '', 1527582010);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `product_id` int(10) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` text NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `product_brand_id` int(10) NOT NULL,
  `product_details` longtext NOT NULL,
  `vitri` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `price`, `product_img`, `product_brand_id`, `product_details`, `vitri`) VALUES
(1, 'ĐẤT NỀN MẶT TIỀN VÀNH ĐAI 3, SỔ HỒNG THỔ CƯ 100%, CAM KẾT SINH LỜI', '13 triệu/m² ', 'bds1.jpg', 2, '                                Luôn giúp nhà đầu tư sinh lời cao. Thông tin chính xác, tư vấn nhiệt tình và chọn cho khách hàng lô đất đẹp chắc chắn sinh lời. <br>\r\n\r\nNHẬN KÝ GỬI MUA BÁN CHUYỂN NHƯỢNG DỰ ÁN KING BAY <br>\r\nĐây là cơ hội đầu tư tuyệt vời không có rủi ro. Chắc chắc khi tìm hiểu hết thông tin chúng tôi cung cấp quý khách hàng sẽ không thể nào bỏ lỡ được một dự án như King Bay. <br>\r\n\r\nTổng quan dự án King Bay. <br>\r\nChủ đầu tư: Công ty FreeLand. <br>\r\nVị trí: Xã Long Tân, huyện Nhơn Trạch, tỉnh Đồng Nai. <br>\r\nTổng diện tích: 125ha. <br>\r\nQuy hoạch hoàn chỉnh 1/500 đã được phê duyệt <br>\r\nGiai đoạn 1: đã bán hết <br>\r\nThời gian mở bán dự kiến giai đoạn 2: Ngày 20/05/2017. <br>\r\nGiá chỉ từ 13 tr/m2 sẽ công bố chính thức vào ngày mở bán. <br>\r\n\r\nBảng giá: <br>\r\n- 5x25m= 125m2 giá 1,7 tỷ. <br>\r\n- 7x25m= 175m2 giá 2,6 tỷ. <br>\r\n\r\nPhương thức thanh toán trải dài trong năm: <br>\r\nGiai đoạn 1: TT 30%. <br>\r\nGiai đoạn 2: 2 tháng sau: TT 20%. <br>\r\nGiai đoạn 3: 2 tháng sau: TT 20%. <br>\r\nGiai đoạn 4: 4 tháng sau: TT 15%. <br>\r\nGiai đoạn 5: 2 tháng sau: TT 10% nhận nền. <br>\r\nGiai đoạn cuối: TT 5% nhận sổ. <br>\r\n\r\nVị trí dự án King Bay. <br>\r\nKing Bay - Vị trí vàng duy nhất khu Đông có 3 mặt tiền sông tọa lạc tại Xã Long Tân, Huyện Nhơn Trạch, tỉnh Đồng Nai. Nơi quý khách có thể dễ dàng di chuyển về TP HCM qua cầu quân 9 từ đó hướng về trung tâm thành phố HCM với chỉ ít phút di chuyển. <br>\r\nPhía Bắc: Giáp sông Đồng Nai. <br>\r\nPhía Nam: Giáp dự án khu dân cư. <br>\r\nPhía Đông: Giáp dự án khu dân cư. <br>\r\nPhía Tây: Giáp đường Vành Đai 3 nối Quận 9 - Nhơn Trạch. <br>\r\n\r\nThật tuyệt vời khi quý khách có thể sở hữu 1 nền đất tại dự án King Bay với giá rất rẻ và dễ dàng kết nối với các quận trung tâm thành phố. Hãy gọi ngay cho em để trải nghiệm và cảm nhận King Bay - từ đó quý khách sẽ dễ dàng hơn trong việc hình dung và đưa ra quyết định của mình.<br> \r\n\r\nKhu đô thị King Bay Đồng Nai ngay mặt tiền đường Vành Đai 3 chạy dọc theo dự án, kết nối trực tiếp với cao tốc Thành phố Hồ Chí Minh - Long Thành - Dầu Giây. Dự kiến nơi đây sẽ là một Thủ Thiêm - khu đô thị mới của Đồng Nai. <br>\r\n\r\nLiên kết khu vực dự án King Bay. <br>\r\nVới những lợi thế tuyệt đối về vị trí - King Bay có được sự kết nối tuyệt vời như: <br>\r\nTừ dự án King Bay <br>\r\nĐến sân golf 18 lỗ chỉ 5 phút. <br>\r\nĐến Bến Thành chỉ 20 phút. <br>\r\nĐến sân bay Long Thành chỉ 10 phút. <br>\r\nĐến khu du lịch Vũng Tàu chỉ 40 phút. <br>\r\nĐến khu công nghệ cao Quận 9 chỉ 15 phút. <br>\r\nĐến Phú Mỹ Hưng chỉ 25 phút. <br>\r\n\r\nTiện ích dự án King Bay. <br>\r\nNhững giá trị tiện ích đẳng cấp xứng tầm đô thị mới như: <br>\r\nBệnh viện, trường học, trung tâm thương mại, công viên, khu thể thao, Bến du thuyền, hồ bơi, và hàng loạt tiện ích khác. <br>\r\nLiên hệ ngay với chúng tôi để được giữ chỗ ngay và đi tham quan dự án. <br>                          ', 'Huyện Nhơn Trạch - Đồng Nai'),
(2, 'ĐẤT NỀN LIỀN KỀ KĐT HIM LAM', '890 triệu', 'bds2.jpg', 2, '“Chỉ 890 triệu/nền”. Đất nền ngay TT Hành chính Quận 7, liền kề Khu đô thị Him Lam.<br>\r\n- Cách Phú Mỹ Hưng 10 phút đi xe.<br>\r\n- Cách mặt tiền Nguyễn Thị Thập 500m, Nguyễn Thị Thập đang được mở rộng lên 60m.<br>\r\n\r\n- Tiện ích khu vực:<br>\r\n+ Cụm trường học: Mẫu giáo Cánh Thiên Thần, cấp 1 Phú Mỹ, cấp 3 Ngô Quyền,... Đã đi vào hoạt động.<br>\r\n+ Ngay cụm trường học Quốc Tế Canada.<br>\r\n+ Cụm trung tâm Thương mại và khu phức hợp cao tầng: Era Town, Crescent Mall,...<br>\r\n- Hệ thống cơ sở hạ tầng hoàn thiện:<br>\r\n+ Điện âm, nước máy,...<br>\r\n+ Đường nội bộ từ 12 - 20m, vỉa hè nội bộ 3 - 5m.<br>\r\n- Diện tích: 100 - 400 m2.<br>\r\n- Giá chỉ từ 890 triệu/ nền.<br>\r\n- Phương thức thanh toán:<br>\r\n+ Thanh toán 1 lần.<br>\r\n+ Thanh toán trước 50%. Góp không lãi suất từ 12 tháng.<br>\r\n- Pháp lý rõ ràng, mình bạch, hoàn chỉnh.<br>\r\n- Thủ tục nhanh chóng, hỗ trợ khách hàng tận tình.<br>\r\n\r\n- Chương trình mở bán:<br>\r\n+ Tham gia hội nghị giới thiệu về dự án (tại Khu vui chơi Vietopia, 2 Đường số 9, Quận 7). Ngay cầu Him Lam.<br>\r\n+ Tham quan dự án.<br>\r\n+ Công bố bảng giá và mở bán tại dự án.<br>\r\n+ Nhận cọc mở bán: từ 50-100 triệu/nền.<br>\r\n\r\n- Chương trình chiết khấu ngay tại tại buổi mở bán<br>\r\n+ Chiết khấu 2-5 chỉ vàng khi đặt cọc.<br>\r\n', 'Đường Số 9 - Quận 7 - Hồ Chí Minh'),
(3, 'KHU NHÀ PHỐ, BIỆT THỰ PARK RIVERSIDE CAO CẤP', '3.4 tỷ', 'bds3.jpg', 3, '- Nhà phố, biệt thự ven sông Park Riverside, Villa Park là 2 dự án biệt thự nhà phố nổi bật tại phường Phú Hữu quận 9, Được đánh giá là khu nhà phố biệt thự đáng sống bậc nhất tại quận 9 với đầy đủ các tiện ích nghỉ dưỡng cao cấp nội khu và ngoại khu đem đến tận hưởng tuyệt vời cho chủ nhân khi sinh sống.<br>\r\n\r\n- Vị trí: Tọa lạc tại mặt tiền đường Bưng Ông Thoàn, P. Phú Hữu, Q. 9, TP. HCM.<br>\r\n\r\n- Khu nhà phố, biệt thự Park Riverside sở hữu vị trí đắc địa khi tọa lạc gần tuyến đường Vành Đai Trong, đường cao tốc Long Thành Dầu Giây, cầu Phú Mỹ và Đại Lộ Đông Tây nối liền trung tâm TP. HCM với quận 2 và quận 9. Việc di chuyển đến các vùng lân cận như Sân bay Quốc tế Long Thành, trung tâm hành chính TP. HCM tại Quận 2, phố tài chính quận 1, hầm Thủ Thiêm, Phú Mỹ Hưng, Bến xe Miền Đông 2 là rất dễ dàng và nhanh chóng.<br>\r\n\r\n- Các tiện ích cao cấp nội khu và ngoại khu đem đến tận hưởng tuyệt vời cho chủ nhân khi sinh sống được quy tụ tại đây như:<br>\r\n+ Công viên & đường chạy bộ ven sông.<br>\r\n+ Hai mặt giáp sông & hai hồ điều tiết sinh thái nội khu, hồ điều tiết 6000m2.<br>\r\n+ Bến du thuyền sang trọng.<br>\r\n+ Sân tập Tennis tiêu chuẩn Quốc tế.<br>\r\n+ Phòng tập gym với trang thiết bị hiện đại.<br>\r\n+ Hai hồ bơi tiêu chuẩn Resort nghỉ dưỡng cao cấp.<br>\r\n+ Công viên giải trí trẻ em hiện đại.<br>\r\n+ Sân tập golf mini, spa, Club house.<br>\r\n+ Khu BBQ, cafe, công viên cây xanh ven sông...<br>\r\n\r\n- Ưu điểm nổi bật:<br>\r\n+ Park Riverside, Villa Park, River Parsở hữu vị trí vàng rất đắc địa tại khu vực tam giác vàng kinh tế đông Sài Gòn, dự kiến trong những năm tới giá đất khu vực quận 9 sẽ tiếp tục tăng mạnh.<br>\r\n+ Được quy hoạch cơ sở hạ tầng đồng bộ đem đến sự thuận tiện trong việc lưu thông.<br>\r\n+ Sở hữu trọn đời và cấp sổ hồng vĩnh viễn.<br>\r\n+ Cơ hội đầu tư cực hấp dẫn khi khu vực đông Sài Gòn không thể nào bỏ lỡ.<br>\r\n- Thanh toán 20% nhận nhà, hỗ trợ vay 80% lãi suất 0% trong 11 tháng.<br>\r\n\r\n- Nhà phố Park Riverside: 1 trệt, 2 lầu DT từ 75m2 đến 120m2.<br>\r\n+ 1 phòng khách, 1 phòng bếp, 1 garage xe hơi, sân phơi sau nhà, 4 phòng ngủ, 1 phòng thờ, 4 WC riêng biệt.<br>\r\n\r\n- Qùa tặng: Tặng gói nột thất trị giá 150tr đến 250tr, tặng xe máy, tặng voucher nghỉ dưỡng Phú Quốc, Chiết khấu từ 2,5% đến 4,5% giá trị căn nhà.<br>\r\n\r\n- Giá bán: Hiện nay giá bán của Park Riverside cực kỳ hấp dẫn và tốt nhất thị trường với giá chỉ từ 3,4 tỷ đối với nhà phố và từ 5,1 tỷ đối với biệt thự.<br>\r\n- Chúng tôi cam kết mang đến cho quý vị sự phục vụ tốt nhất và giá tốt nhất.<br>\r\n- Quý vị nào quan tâm về dự án vui lòng liên hệ phòng kinh doanh để biết thêm thông tin chi tiết.<br>', 'Quận 9 - Hồ Chí Minh'),
(4, 'CHUNG CƯ CC AN BÌNH', ' 2 tỷ', 'bds4.jpg', 1, 'Vị trí: Nằm giữa Bộ Công An và siêu thị Metro, phía sau là hồ rộng 15ha và khu biệt thự, kết nối nhất nhanh ra trung tâm: Hoàng Quốc Việt, Đội Cấn, Cầu Giấy, Hồ Tùng Mậu, Hoàng Hoa Thám, Tây Hồ... <br>\r\n\r\nHotline 24/24h:0986 05 00 66 - 0904 688 652  <br>\r\n\r\nThật sự hiếm dự án nào có mật độ xây dựng chỉ 31,7% và có View đẹp, không gian cực thoáng mát như ở chung cư An bình City.  <br>\r\n\r\nTổng có 8 tòa: 4 tòa cao 28 tầng, 4 tòa cao 35 tầng.  <br>\r\nDiện tích: 75m2 - 83.7m2 - 86.5m2 - 90.6m2 - 114.5m2.  <br>\r\nThiết kế 2 phòng ngủ + 3 phòng ngủ - 2 vệ sinh và 6 thang máy tốc độ cao.  <br>\r\n\r\nCác căn hộ đều có khoảng không gian rất thoáng mát, view hồ điều hòa 15ha, khu biệt thự liền kề, Quảng trường La Mã, Hồ bơi, 2 công viên nhiệt đới, khu đi bộ, khu nhạc nước... Tạo nên một cảnh quan rất đẹp, vị trí đắc địa thuận lợi đi vào nội đô mà giá cả rất hợp lý.  <br>\r\n\r\nNội thất: Cao cấp có trần thạch cao, tường sơn bả, sàn gỗ, hệ thống đường điện nước, nóng lạnh, cửa kính chống ồn 2 lớp, cửa chính chống cháy và thẻ khóa từ.  <br>\r\n\r\nHiện nay chủ đầu tư đang mở bán nên có nhiều chương trình ưu đãi dành cho khách hàng khi mua căn hộ như: Lãi suất 0%, chiết khấu đến 90 triệu/căn, tặng điều hòa, nóng lạnh, ô tô CX5, SH 150i cho các căn hộ.  <br>\r\n\r\nGiá giao động từ 26 trđ/m2 - 28 triệu đồng/ m2.  <br>\r\n\r\nChủ đầu tư cam kết tháng 5 năm 2018 sẽ bàn giao 100% các căn hộ cho khách hàng.  <br>\r\n\r\nLiên hệ phòng bán hàng để được tư vấn và xem căn hộ nhà mẫu ngay trong hôm nay để được nhiều chính sách cực kỳ hấp dẫn khác.  <br>', 'Đường Hoàng Quốc Việt - Quận Cầu Giấy - Hà Nội'),
(5, 'CĂN HỘ NGHỈ DƯỠNG MONARCHY', '22 triệu/m²', 'bds5.jpg', 3, 'Căn hộ nghỉ dưỡng Monarchy - cháy hàng buổi mở bán đợt 1 ngày 20/01/2018 vừa qua đã làm nóng lên thị trường căn hộ nghỉ dưỡng tại Đà Nẵng. Với vị trí ngay bờ sông Hàn 99 % căn hộ đã được giao dịch ngay trong buổi sáng mở bán.<br>\r\n\r\nSáng ngày 06/05/2018 tới đây, tại khách sạn Grand Mercure Danang sẽ diễn ra lễ mở bán & tri ân khách hàng với cơn mưa quà tặng hấp dẫn dành cho cả khách tham dự và khách đặt mua.<br>\r\n\r\nMonarchy sở hữu vị trí đẹp với view sông Hàn thơ mộng, mật độ cây xanh lên đến 60%, cùng các tiện ích đa dạng xứng tầm. Được ví như viên ngọc quý giữa lòng Đà Nẵng, Monarchy hội tụ đầy đủ những tiêu chuẩn của một căn hộ cao cấp, xứng đáng là môi trường an cư lý tưởng.<br>\r\n\r\nTọa lạc ngay vị trí trung tâm, giữa hai cây cầu trọng điểm và 4 con đường huyết mạch của thành phố, từ Monarchy, cư dân dễ dàng di chuyển đến các khu vực khác mà không mất nhiều thời gian.<br>\r\n\r\nKhông quá khi nói rằng Monarchy sở hữu những tiện ích bậc nhất Đà Nẵng như bể bơi ngoài trời, khu vui chơi, cà phê sân vườn, khu mua sắm phức hợp. Tất cả được lồng ghép trong một khuôn viên xanh và thân thiện với môi trường. Bên cạnh đó, dự án còn có một nhà để xe rộng rãi cùng hệ thống thang máy vip phục vụ cư dân.<br>\r\n\r\nNếu muốn con cái bạn được chung sống trong một môi trường văn minh, hiện đại thì Monarchy chính là sự lựa chọn đúng đắn. Bởi Monarchy hội tụ đông đảo giới tri thức và trung lưu đến định cư, sinh sống.<br>\r\n\r\nLà dự án đầu tiên bên bờ sông Hàn có giá bán chỉ từ 22- 38tr/m2 có đầy đủ nội thất theo tiêu chuẩn châu Âu.<br>\r\n\r\nLà dự án căn hộ nghỉ dưỡng ven sông Hàn đầu tiên được cấp sổ đỏ từng căn mục đích sử dụng lâu dài mật độ cây xanh mặt nước lên đến 60%.<br>\r\n\r\nBên cạnh đó, khách hàng còn được hỗ trợ vay ngân hàng lên đến 85% giá trị căn hộ và lãi suất vay 0% cho 12 tháng đầu.<br>\r\n\r\nTọa lạc ngay bên bờ Sông Hàn bốn mặt tiền đường Trần Hưng Đạo, đây sẽ là một điểm lưu trú lý tưởng cho các doanh nhân và các du khách du lịch Đà Nẵng. Đó chính là lợi thế đối với căn hộ nghỉ dưỡng Monarchy Đà Nẵng. Cơ hội khai thác hoạt động kinh doanh cho thuê căn hộ.<br>', 'Quận Sơn Trà - Đà Nẵng'),
(6, 'BÁN NHÀ D12A NGÕ 80 TRUNG KÍNH', '12.9 tỷ', 'bds6.jpg', 1, 'Bán nhà D12A ngõ 80 Trung Kính, diện tích 70m2, mặt tiền 5,2m, nhà 4 tầng, khung bê tông kiên cố, chắc chắn, hướng Đông Nam. Đường trước nhà 9m, vỉa hè 2 bên mỗi bên 1,5m, ngõ đẹp nhất đường đôi Trung Kính. Ngõ thông ô bàn cờ đi KĐT Trung Yên, gần khu bộ ban ngành, hành chính mới, gần nhiều trường Đại học, cấp 1,2,3', 'Phố Trung Kính - Quận Cầu Giấy - Hà Nội'),
(7, 'NHÀ SỔ HỒNG ĐƯỜNG MIẾU GÒ XOÀI BÌNH TÂN', '2.35 tỷ', 'bds7.jpg', 1, 'Bán nhà sổ hồng đường Miếu Gò Xoài Bình Tân 4x8m 2PN, 2WC, 1 PK, 1 lầu, 1 bếp nhà đẹp thoáng mát hẻm cụt 3m. Nhà trống mua ở liền sổ hồng chính chủ cần tiền bán gấp giá cả hợp lý. Nhà gần các tiện ít cộng cộng thuận tiện trong sinh hoạt thưởng ngày. Đ/c 100/5/16 Miếu Gò Xoài Phường Bình Hưng Hòa A Quận Bình Tân.', 'Đường Miếu Gò Xoài - Quận Bình Tân - Hồ Chí Minh'),
(8, 'BÁN NHÀ CHÍNH CHỦ XÂY MỚI, ĐẸP, SỔ ĐỎ TÁCH RIÊNG', '4.1 tỷ', 'bds8.jpg', 1, 'Tôi cần bán nhà phân lô trên phố Hồng Mai. Nhà có DT 39.2, xây 5 tầng, khung bê tông móng bè kiên cố, kiến trúc kiểu mới hiện đại, <br>\r\n\r\n+ Tầng 1 phòng khách và bếp. <br>\r\n+ Tầng 2,3,4 mỗi tầng 1 phòng ngủ và 1WC. <br>\r\n+ Tầng 5 phòng thờ, sân phơi, khu để máy giặt... <br>\r\n\r\nNhà mới xây thiết kế nội thất cao cấp thiết kế đẹp trang trí hài hòa, toàn bộ hệ thống cửa thông phòng làm gỗ, cầu thang mặt bực gỗ, tay vịn gỗ, cửa sổ và cửa vệ sinh làm bằng nhôm Xingfa cao cấp. Thiết bị vệ sinh nhập ngoại, sàn gỗ căm xe cao cấp... <br>\r\n\r\nNgõ rộng 5m thông thoáng, ô tô đỗ cách nhà chỉ 10m. Ngõ vào nhà thẳng tắp, dân trí cao, tiện ích xung quanh rất nhiều: Gần chợ, trường học các cấp, gần các trung tâm thương mại và các trường đại học lớn như Kinh Tế, Bách Khoa, Xây Dựng... Giao thông thuận tiện không tắc đường ngập lụt\r\ngiấy phép xây dựng đầy đủ. Cam kết và bảo hành chất lượng. <br>\r\n', 'Phố Hồng Mai - Quận Hai Bà Trưng - Hà Nội'),
(9, 'BIỆT THỰ THUẬN AN, BÌNH DƯƠNG', '29 tỷ ', 'bds9.jpg', 1, 'Bán biệt thự sang trọng tại Thuận An, Bình Dương.<br>\r\nDiện tích đất 4.767m2, diện tích sàn 879m2.<br>\r\nBiệt thự gồm 4 tầng với nội thất cao cấp, phòng giải trí, xem phim hiện đại, có sân vườn và hồ bơi rất đẹp.<br>\r\nKhu vực an ninh, yên tĩnh, đường rộng gần UBND xã Hưng Định.<br>', 'Đường Cầu Tàu - Huyện Thuận An - Bình Dương'),
(3445, 'Căn Hộ Lầu 6 Chung Cư 47-57 Nguyễn Thái Bình', '1,5 tỷ', 'căn hộ.jpg', 3, '                                                              \r\n                      Căn hộ lầu 6 chung cư 47-57 Nguyễn Thái Bình, đường Nguyễn Thái Bình, phường Nguyễn Thái Bình, quận 1. \r\nCách chợ Bến Thành 200m ngay cách UBND phường Nguyễn Thái Bình an ninh trật tự tốt ra vào thuận tiện 24h/24h, có thang máy có chỗ gửi xe nhà sạch sẽ thoáng mát điện nước chính chủ.                          ', ' Đường Nguyễn Thái Bình - Quận 1 - Hồ Chí Minh'),
(4484, 'PARK CITY THÁI BÌNH', 'Đang cập nhật', 'themanorparkcity-1363883230.jpg', 1, '                                                 Phía Bắc giáp đường Phan Bá Vành<br>\r\nPhía Nam giáp khu đất dự kiến quy hoạch đường Nam sông 3/2\r\nPhía Tây giáp đường Hoàng Công Chất quy hoạch kéo dài ( Khu đô thị 379 - Giai đoạn 1 )<br>\r\nPhía Đông giáp với khu dân cư đang hiện có      <br>\r\nCó vị trí trung tâm thành phố, gần các trường cấp 1, cấp 2, Trường trung cấp nghề, Trường Cao đẳng Y, Trường cao đẳng Sư phạm và Chợ Cống Trắng<br>\r\n  ➡ Cở Sở Hạ Tầng Pháp Lý:<br>\r\nKhu dân cư có tổng là 169 nền.<br>\r\nDiện tích:  65m2 <br>\r\nHạ tầng hoàn thiện 100%, <br>\r\nXây dựng không bắt buộc theo mẫu.<br>\r\nĐược ngân hàng hỗ trợ 75%.  <br>\r\nVới những tiện ích tối ưu: Khu  thể thao, công viên cây xanh, nhà văn hóa thiếu nhi và trường mẫu giáo,… đáp ứng đầy đủ mọi nhu cầu sinh hoạt của cư dân trong khu vực.<br>\r\n➡ Cấp quyền sử dụng đất ngay khi quý khách hoàn thiện thanh toán<br>\r\nVới quy hoạch đồng bộ cùng với các tiện ích công cộng, khuôn viên cây xanh, Khu đô thị 379 Thái Bình hứa hẹn sẽ đem lại một môi trường sống lý tưởng cho dân cư sinh sống.    <br> \r\n                                                  ', 'Phường Quang Trung, TP Thái Bình'),
(5339, 'Đất nền dự án khu đô thị 379 Thái Bình giai đoạn 3', '2.88 Tỷ ', '25319813-707838899414001-1998387730-o-636522286275468485.jpg_768x480.jpg', 2, '                                                                                                                                                              \r\n                    Khu đô thị 379 Thái Bình - giai đoạn 3. <br>\r\n\r\n- Dự án “Khu đô thị 379 Thái Bình - Giai đoạn 3” được quy hoạch trên tổng diện tích rộng 3,1ha. Với mong muốn kiến tạo nên một hệ sinh thái khởi nguồn cho một cuộc sống xanh, an lành thịnh vượng, mật độ xây dựng của “Khu đô thị 379 Thái Bình - Giai đoạn 3” chỉ chiếm 38% diện tích, bao gồm 155 lô liền kề và 2 lô biệt thự, phần lớn diện tích còn lại được nhường chỗ cho cảnh quan thiên nhiên, các công trình công cộng. <br>\r\n\r\n- “Vị trí vàng” có một không hai cho tổng thể khu đô thị 379 Thái Bình. <br>\r\n\r\n+ Phía Bắc giáp với khu dân cư kế cận đường Phan Bá Vành. <br>\r\n\r\n+ Phía Nam với đường Đinh Tiên Hoàng, cạnh sông 3/2. <br>\r\n\r\n+ Phía Đông giáp khu dân cư phường Kỳ Bá. <br>\r\n\r\n+ Phía Tây giáp “Khu Đô Thị 379 Thái Bình - Giai đoạn 2 ” và – “ Giai đoạn 1 ”.  <br>\r\n    \r\n- DT khuôn viên: 133 m2 (7.4m x 18m)  <br>\r\n- Hướng: Tây Nam  <br>\r\n    \r\n- Giấy tờ pháp lý: Hợp đồng mua bán<br>\r\n\r\nĐặc điểm tốt: Có 2 mặt đường chính,Gần chợ, siêu thị (<500m),Gần công viên, trung tâm giải trí (<500m),Khu dân cư cao cấp có cổng bảo vệ,Vị trí đẹp nhất trong đoạn đường,Tiện làm quán cafe, nhà hàng, khách sạn. <br>\r\n\r\nĐịnh giá: 2.88 Tỷ <br>\r\n\r\nGiá bán 2.26 Tỷ (Rẻ hơn 22 %                                                                                         ', 'Đường Phan Bá Vành, Phường Quang Trung, Thành phố Thái Bình, Thái Bình'),
(6073, 'NHÀ SỔ HỒNG RIÊNG THỔ CƯ 100%', '820 triệu', 'bds10.jpg', 1, 'Tôi cần bán gấp căn nhà mới xây ngay khu Tân Phước Khánh<br>\r\nDT: 5x19- 95m2<br>\r\nDT: 4,5x23- 103m2<br>\r\nNhà xây kiên cố, mẫu mới, hiện đại, đẹp, thoáng mát, thiết kế mẫu nhà thái nhìn vào là bà con ưng ý ngay, cơ sở hạ tầng đầy đủ<br>\r\nKhu nhà ở cao cấp, cách trường trung học phổ thông Tân Phước Khánh 500m, nước máy, đồng hồ riêng\r\nĐặc biệt hỗ trợ ngân hàng tới 90%<br>', 'Phường Tân Phước Khánh - Huyện Tân Uyên - Bình Dương'),
(11548, 'Khu đô thị Kỳ Đồng Dragon City', '682.5 Triệu', 'Ä‘áº¥t ná»n.jpg', 2, '                                                                                              \r\n- DT khuôn viên: 81 m2 (4.5m x 18m) <br>\r\n- Hướng: Tây Nam <br>\r\n- Giấy tờ pháp lý: Hợp đồng mua bán <br> \r\nVị trí đắc địa nằm trên trục đường rộng 45m. <br>\r\n\r\n- Cách trung tâm thương mại 6 lô thuận tiện kinh doanh buôn bán . <br>\r\n\r\nCơ sở hạ tầng đường xá đẹp đẽ khang trang.                                                           ', 'Thái Bình Dragon City - Phố Kỳ Đồng, Xã Phú Xuân, Thành phố Thái Bình, Thái Bình'),
(15255, 'FLC THÁI BÌNH – SIÊU DỰ ÁN CỦA FLC GROUP', 'Đang cập nhật', 'FLC thái bình.jpg', 3, '    Tên dự án: FLC Thái Bình (Tên dự kiến)<br>\r\nVị trí: Trung tâm thành phố Thái Bình, tỉnh Thái Bình<br>\r\nChủ đầu tư: FLC Group<br>\r\nQuy mô: 500ha<br>\r\nMật độ xây dựng: 30 – 40%<br>\r\nLoại sản phẩm: Condotel, biệt thự nghỉ dưỡng<br>\r\nDự kiến khởi công: quý IV/2017     <br>          \r\nVỊ TRÍ DỰ ÁN FLC THÁI BÌNH  <br>  \r\nThái Bình là một tỉnh ven biển có tiềm năng phát triển du lịch mãnh mẽ. Du lịch của Thái Bình gắn liền với những bãi biển đẹp như: Đồng Châu, Cồn Vành, Cồn Thủ… Những bãi biển đẹp của Thái Bình cũng là nơi triển khai hàng loạt các dự án bất động sản lớn như: Khu du lịch sinh thái biển Cồn Vành, khu du lịch sinh thát biển Cồn Đen… Tuy nhiên, tiềm năng phát triển du lịch của Thái Bình vẫn chưa được khai thác triệt để. Theo các chuyên gia bất động sản, khi các dự án tại các khu vực ven biển chưa tạo được bước đà để thúc đẩy du lịch phát triển, Thái Bình cần một dự án bất động sản tầm cỡ làm bước đệm để tỉnh vươn lên trở thành vùng trọng điểm phát triển du lịch của miền Bắc.          <br>  \r\nNắm bắt được cơ hội đầu tư vàng tại khu vực, FLC Group đã nhanh tay triển khai dự án khu quần thể nghỉ dưỡng đẳng cấp quốc tế tại trung tâm của thành phố Thái Bình. Với vị trí vàng tại trung tâm Thái Bình, dự án FLC Thái Bình sẽ được thừa hưởng cơ sở hạ tầng – giao thông đồng bộ của khu vực. Cư dân sống tại khu nghỉ dưỡng FLC Thái Bình sẽ được tận hưởng nhiều thuận lợi về giao thông. Từ dự án, chỉ với chưa đầy 30 phút di chuyển, cư dân đã có thể kết nối với nhiều khu vực quan trọng của thành phố Thái Bình như: trụ sở hành chính, trường học, khách sạn, bệnh viện, vườn hoa trung tâm, quảng trường, bưu điện của tỉnh…\r\nKhông chỉ có vị trí vàng tại trung tâm thành phố, FLC Thái Bình còn nằm trên tuyến đường du lịch biển quan trọng của miền Bắc là Quảng Ninh – Hải Phòng Thái Bình. Với vị trí kết nối các vùng du lịch, FLC Thái Bình sẽ là điểm dừng chân lý tưởng cho khách du lịch trong và ngoài nước muốn khám phá vẻ đẹp của các tỉnh ven biển miền Bắc. <br> \r\nTiếp nối chuỗi các dự án nghỉ dưỡng của FLC Group tại các tỉnh ven biển dọc đất nước Việt Nam, FLC Thái Bình sẽ là dự án có vị trí trung chuyển khách du lịch từ miền Bắc đến miền Trung của tập đoàn, kết nối tất cả các dự án nghỉ dưỡng của FLC thành một đường thẳng nối liền từ Bắc vào Nam. <br> \r\nKhai thác tối đa tiềm năng du lịch của tỉnh Thái Bình, FLC Thái Bình với vị trí đắc địa sẽ góp phần thay đổi bộ mặt du lịch của tỉnh, thúc đẩy du lịch Thái Bình trở thành một ngành kinh tế mũi nhọn.   <br> \r\nMẶT BẰNG FLC THÁI BÌNH<br> \r\nLà dự án bất động sản được triển khai tại trung tâm của thành phố Thái Bình, FLC Thái Bình sẽ được xây dựng trên khu đất rộng khoảng 500ha. Với mật độ xây dựng trong khoảng 30 – 40%, chủ đầu tư dự án FLC Thái Bình sẽ dành ra khoảng gần 300ha để xây dựng hệ thống tiện ích đồng bộ như bãi biển nhân tạo, sân Golf, trung tâm thương mại… và tích hợp quần thể cảnh quan xanh.<br> \r\nCÁC LOẠI SẢN PHẨM TẠI DỰ ÁN FLC THÁI BÌNH:<br> \r\nCăn hộ Condotel: Có diện tích từ 75m2 đến 120m2 với 2 hoặc 3 phòng ngủ. Phong cách kiến trúc tổng thể của căn hộ theo hơi hướng hiện đại với bố trí không gian sống tinh tế, hứa hẹn đem đến một cuộc sống tiện nghi cho gia chủ.<br> \r\nBiệt thự nghỉ dưỡng: Biệt thự nghỉ dưỡng tại FLC Thái Bình sẽ có diện tích trong khoảng 400 – 600m2 với 3 – 6 phòng ngủ. Các căn biệt thự có phong cách kiến trúc độc đáo, tích hợp nhiều tiện ích đẳng cấp như: bể bơi 4 mùa, cảnh quan sân vườn, dịch vụ dọn phòng…<br> \r\nLấy ý tưởng từ “ green concept”, toàn bộ các căn hộ tại dự án FLC Thái Bình sẽ được tích hợp cảnh quan xanh nhằm đem đến cho cư dân một không gian sống xanh chất lượng. Việc bố trí cảnh quan xanh tinh tế và độc đáo trong các căn hộ sẽ tạo một không gian sống đầy tính nghệ thuật cho các cư dân tương lai của dự án FLC Thái Bình.<br> \r\nTIỆN ÍCH ĐẲNG CẤP 5*<br> \r\nHứa hẹn đem đến một không gian sống xanh với những trải nghiệm sống tiện nghi và đẳng cấp, FLC Thái Bình được tích hợp các tiện ích đạt chuẩn 5* như: bãi biển nhân tạo, sân golf 18 lỗ, trung tâm giải trí, trung tâm thương mại, trung tâm hội nghị, Sky Garden, phố đi bộ, quảng trường trung tâm, quán bar, bể bơi trong nhà và ngoài trời…<br> \r\nNHÀ HÀNG CAO CẤP<br> \r\nHệ thống nhà hàng cao cấp tại FLC Thái Bình được thiết kế theo mô hình hiện đại với lối kiến trúc mới lại mang tầm thượng lưu chắc chắn sẽ đem đến cho du khách một không gian thưởng thức ẩm thực tinh tế và lãng mạn. Ngoài các món ăn Âu – Á, nhà hàng tại dự án có thêm menu các món ăn độc đáo đến từ các vùng miền hứa hẹn sẽ đáp ứng mọi nhu cầu thưởng thức ẩm thực của du khách.<br> \r\nTRUNG TÂM THƯƠNG MẠI HIỆN ĐẠI<br> \r\nLà nơi tập trung nhiều thương hiệu thời trang nổi tiếng thế giới, trung tâm thương mại cao cấp tại FLC Thái Bình sẽ thỏa mãn mọi nhu cầu mua sắm của cơ dân. Với quy mô lớn, trung tâm thương mại còn có các khu vui chơi dành cho trẻ em, nhà hàng, rạp chiếu phim đáp ứng đầu đủ mọi nhu cầu từ mua sắm đến vui chơi giải trí.<br>\r\nVới vị trí đắc địa tại trung tâm thành phố Thái Bình cùng những tiện ích đẳng cấp, FLC Thái Bình sẽ là không gian nghỉ dưỡng lý tưởng dành cho bạn và gia đình. Tập đoàn FLC Group kì vọng dự án sẽ là khu nghỉ dưỡng có chất lượng tốt nhất tại miền Bắc, đồng thời sẽ góp phần thúc đẩy du lịch Thái Bình phát triển mạnh mẽ trong thời gian tới.\r\n                        ', 'Trung tâm thành phố Thái Bình, tỉnh Thái Bình'),
(23917, 'DỰ ÁN LAM SƠN LÝ BÔN ', 'Đang cập nhật', 'lam sơn.jpg', 1, '                                                        Dự án nhà ở thương mại của tập đoàn Lam sơn trên đường Lý Bôn là dự án nhà phố thương mại có vị trí vàng của thành phố với quỹ đất tại khu đất Hợp tác xã Quyết Tiến cạnh bến xe thành phố. Đây thực sự là Shophouse của Người Thái Bình, Do người Thái Bình xây dựng và để cho Người Thái Bình Phát triển kinh doanh. <br>\r\n** QUY MÔ: Diện tích 2.166 m2, bao gồm 35 nhà ở liền kề và nhà phố thương mại shophouse, Là dự án đẳng cấp với sản phẩm đa dạng phù hợp với nhiều phân khúc khách hàng, tích hợp nhiều tiện ích mang lại cuộc sống lý tưởng cho cư dân khu đô thị.<br>\r\n\r\n** TỔNG QUAN:<br>\r\n- Phong cách kiến trúc : phong cách cổ điển Pháp Louis<br>\r\n- Diện tích xây dựng : 2.166m2.<br>\r\n- Số lượng : 35 căn.<br>\r\n- Diện tích/căn : 50 - 72 m2<br>\r\n- Mặt tiền : 4 - 5.75 m<br>\r\n- LOẠI HÌNH SỞ HỮU : SỔ ĐỎ LÂU DÀI      <br>\r\n** VỊ TRÍ DỰ ÁN:  Thuộc trung tâm thành phố với địa thế tuyệt vời hướng Đông Bắc tiếp giáp với đường Lý Bôn, hướng Tây Nam tiếp giáp với khu dân cư hiện có của phường Trần Hưng Đạo, hướng Tây Bắc tiếp giáp bến xe thành phố, hướng Đông Nam quay ra khu dân cư hiện có. toàn bộ mặt đường trong nội khu ô tô đều có thể ra vào thoải mái. Với định hình như trên thì dự án nhà ở thương mại của tập đoàn Lam Sơn thực sự là đất vàng cho sự an cư và phát triển. <br>\r\n** KIẾN TRÚC: Dự án dự án mang phong cách Tân cổ điển Pháp với 4 tầng, chủ đầu tư xây thô hoàn thiện mặt tiền đồng bộ hóa kiến trúc, một lợi điểm nữa tại đây là toàn bộ tầng 1 chủ nhà đều có thể dùng để kinh doanh. Thêm một điểm khác biệt so với các dự án nhà phố thương mại Shophouse khác là tại dự án của Lam sơn tất cả các căn nhà phố đều có móng và tường riêng biệt. Một lợi điểm khác cho nhà đầu tư và khách hàng khi mua nhà tại đây đều đã có sẵn các điểm chờ điện nước và các bể công trình.<br>\r\n** LỢI THẾ DỰ ÁN: Lợi thế kinh doanh đầu tư với vị trí thuận lợi, mặt chính tiếp giáp đường Lý Bôn tuyến đường có chiều dài là dài nhất thành phố và là tuyến có lưu lượng người qua lại đông nhất, thêm vào đó lượng người mà các nhà kinh doanh tại đây thu hút về từ bến xe thành phố thì chủ sở hữu tại đây có thể coi căn hộ của mình vừa là nơi an cư vừa là điểm kinh doanh mang lại lợi nhuận không nhỏ cho mình. Khác biệt hoàn toàn so với các cửa hàng kinh doanh nhỏ lẻ tại khu vực với nhà ở thương mại tại dự án Lam Sơn Lý Bôn mỗi điểm kinh doanh đều nổi bật so với phần còn lại của tuyến phố bởi sự đồng bộ hóa kiến trúc xây dựng và hệ thống kinh doanh đồng bộ tại tầng 1.<br>\r\n                                                  ', 'CẠNH BẾN XE THÀNH PHỐ'),
(27941, 'Đất nền Khu đô thị Phú Xuân Damsan Thái Bình', '10triệu/m2.  ', 'phu-xuan-1-636525812066374205.jpg_768x480.jpg', 2, '                                                              \r\n                      Khu đô thị Phú Xuân DamSan - Toả sáng muôn nơi, vươn tầm cao mới.<br>\r\n\r\nVị trí:<br>\r\n\r\n✓ Nằm trên đường Lý Bôn,<br>\r\n\r\nKhu Đô Thị Phú Xuân DamSan nằm trong khuôn viên có tổng diện tích 105.000 m2, mật độ xây dựng khoảng 45%, được đầu tư xây dựng 02 tòa chung cư dành cho người thu nhập thấp. Dự án với quy mô 76 lô biệt thự (chiều cao từ 3 – 4 tầng) được thiết kế theo phong cách tân cổ điển, 246 lô nhà phố liền kề (từ 4 – 5 tầng) với phong cách Shophouse được chủ đầu tư xây thô và hoàn thiện nội thất bên ngoài, dịch vụ tiện ích hoàn hảo cùng công viên cây xanh, sân thể thao, nhà văn hóa thiếu nhi và trường mẫu giáo.<br>\r\n\r\n✓ Số lượng: 76 lô biệt thự và 246 lô nhà lô liền kề.<br>\r\n\r\n✓ Diện tích/căn: Từ 95 – 180m2.<br>\r\n\r\n✓ Mặt tiền: Từ 5 - 10m.<br>\r\n\r\n✓ Số tầng: Theo thiết kế của chủ đầu tư (vừa để kinh doanh, vừa để ở).<br>\r\n\r\n✓ Loại hình sở hữu: Sổ đỏ lâu dài.<br>\r\n\r\n✓ Giá chỉ từ 10triệu/m2.    <br>                        ', 'Đường Lý Bôn, Xã Phú Xuân, Thành phố Thái Bình, Thái Bình'),
(29666, 'CĂN HỘ VINHOMES', '3.4 tỷ', 'bds11.jpg', 3, '                                Cần tiền bán rẻ nhiều căn hộ Vinhomes. Cam kết giá thật 100% rẻ nhất thị trường. LH xem nhà 0902 681 106.<br>\r\n\r\nCăn hộ 2PN, 2WC, 1 phòng khách, 1 bếp, 1 ban công, 1 sân phơi.<br>\r\nDiện tích: 80m2.<br>\r\nNội thất cao cấp.<br>\r\nHướng: Tây tứ trạch.<br>\r\nGiá bán: 3.4 tỷ.<br>\r\n\r\nNgoài ra, bán rẻ lại tất cả các căn Vinhomes 1 2 3 4PN. Giá rẻ hơn thị trường 500 triệu - 1 tỷ. Xem nhà trực tiếp, thương lượng chính chủ, giá thật 100% tốt nhất thị trường. Chọn ngay căn hộ LH 0902681106 để được hỗ trợ tốt nhất.<br>\r\n\r\n* Hỗ trợ tư vấn chọn hướng nhà phù hợp.<br>\r\n* Hỗ trợ chọn căn cho đến khi ưng ý nhất.<br>\r\n* Thủ tục giấy tờ pháp lý, công chứng, vay ngân hàng... Chuyên nghiệp và uy tín.<br>\r\n* Cam kết cập nhật, tư vấn thông tin mới nhất và chính xác nhất.<br>\r\n* Cam kết hỗ trợ khách hàng trọn đời từ khi gặp mặt tư vấn đến mãi mãi về sau.<br>\r\n\r\n* Giá bán căn hộ Vinhomes.<br>\r\nLưu ý: Tất cả các căn đều là chính chủ bán lại, giao dịch mua bán thuận tiện.<br>\r\n\r\n* Căn hộ 1 phòng ngủ:<br>\r\n- P6 căn số A08A DT: 36m2, giá 2,2 tỷ full.<br>\r\n- C3 căn số 12 DT: 49,5m2, giá 2,6 tỷ full.<br>\r\n- P7 căn số OT02 DT: 54,3m2, giá 2,7 tỷ full.<br>\r\n- L4, L5 căn số 11 DT: 50,5m2, giá 2, 5 tỷ full.<br>\r\n\r\n* Căn hộ 2 phòng ngủ:<br>\r\n- L2 căn số 05 DT: 62,5m2, giá 3,4 tỷ full.<br>\r\n- L4 căn số 03 DT: 79,1m, giá 3,5 tỷ full.<br>\r\n- L4 căn số OT12 DT: 81,5m2, giá 3,5 tỷ full.<br>\r\n- L4 căn số OT05 DT: 82m2, giá 3,5 tỷ full.<br>\r\n- P2 căn số 01 DT: 87,2m2, bán giá gốc CĐT.<br>\r\n- P2 căn số 02 DT: 89,1m2, giá 4,2 tỷ full.<br>\r\n- P2 căn số 12A DT: 87,5m2, giá 4,35 tỷ full.<br>\r\n- P4 căn số 01 DT: 87,2m2, giá 4,3 tỷ full.<br>\r\n- P4 căn số 10 DT: 79,9m2, giá 4 tỷ full.<br>\r\n- P5 căn số 08 DT: 86m2, bán giá gốc CĐT.<br>\r\n\r\n* Căn hộ 3 phòng ngủ:<br>\r\n- P6 căn số A04 DT: 123m2, 6 tỷ.<br>\r\n- P5 căn số 07 DT: 113,5m2, bán giá gốc CĐT.<br>\r\n- L4-L5-L6 DT: 108m2, giá 4.8 tỷ.<br>\r\n- L1 căn số 2 DT: 95m2, bán 4.8 tỷ.<br>\r\n- L2 căn số 4 DT 95m2, bán 4.4 tỷ.<br>\r\n\r\n* Căn hộ 4 phòng ngủ:<br>\r\n- L1 căn số 1 DT 159m2, bán lỗ 300tr.<br>\r\n- L6 căn số 7 DT 150m2, bán lỗ 500tr.<br>\r\n- C1 căn số 7 DT 135m2, bán 8 tỷ.<br>\r\n- C2 căn số 2 DT 136m2, bán 7 tỷ.<br>\r\n- P2 căn số 11 DT 188m2, bán 11 tỷ.<br>\r\n* Căn hộ penthouse giá bán từ 8.5 tỷ.<br>\r\n\r\n* Giữ chìa khóa, miễn phí xem nhà 100% - tư vấn bán hàng và dẫn khách đi xem dự án miễn phí, quý khách vui lòng LH trực tiếp nhân viên kinh doanh. Hotline: 0902681106 (24/24 kể cả T7&CN).<br>\r\n* Ngoài ra, hỗ trợ tư vấn bán và cho thuê căn hộ tại các dự án khác trong khu vực.<br>\r\n* Hoặc nhận ký gửi mua/bán và cho thuê các dự án trong khu vực giúp khách hàng.<br>                          ', 'Quận Bình Thạnh - Hồ Chí Minh'),
(30679, 'Căn hộ Mini ', '700 triệu', 'mini.jpg', 3, '                       \r\n\r\nTọa lạc ngay mặt tiền đường Lý Bôn\r\n\r\nDự án với quy mô 4.6ha. bao gồm 1300 căn với diện tích từ 40m2 - 60m2 tương ứng với các căn 1PN và căn 2PN, hiện tại chỉ còn gần 100 căn với giá cực kỳ ưu đãi.\r\n\r\nThiết kế căn hộ đặc biệt theo quy chuẩn Hàn Quốc. Nhận full các nội thất.\r\n\r\nTiện ích nội khu: Khu thương mại nằm ngay dưới tầng trệt của 2 block bao gồm như: Siêu thị Vinmart, Phòng tập gym, khu chăm sóc sắc đẹp spa, Rạp chiếu phim …\r\n\r\nKhu sinh hoạt cộng đồng rộng , công viên cây xanh dành cho các hộ dân cư sinh sống tại đây.\r\n\r\nĐảm bảo an ninh 24/24 với các thiết bị CAMERA tân tiến hiện đại nhất theo dõi ở mỗi tầng căn hộ.\r\n\r\nCông tác phòng cháy chữa cháy (PCCC) Tốt hơn bao giờ hết với bộ cứu hỏa vòi rồng phun nước ngay cạnh thang bộ mỗi tầng, có thiết bị PCCC cầm tay.', '23 Lý Bôn, Tp Thái Bình');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_brand`
--

CREATE TABLE `product_brand` (
  `product_brand_id` int(10) NOT NULL,
  `product_brand_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product_brand`
--

INSERT INTO `product_brand` (`product_brand_id`, `product_brand_name`) VALUES
(1, 'Nhà'),
(2, 'Đất'),
(3, 'Căn hộ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `id` int(10) UNSIGNED NOT NULL,
  `tintuc_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tintuc_detail` longtext COLLATE utf8_unicode_ci NOT NULL,
  `images_url` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`id`, `tintuc_name`, `tintuc_detail`, `images_url`) VALUES
(1, 'Sở QHKT Tp.HCM: Chưa từng thấy bản đồ quy hoạch 1/5.000 KĐT Thủ Thiêm', '                                                                                                Đại diện Sở QHKT Tp.HCM cho biết, là nơi quản lý dữ liệu quy hoạch của thành phố nhưng đơn vị chưa từng thấy bản đồ quy hoạch 1/5.000 của khu đô thị (KĐT) Thủ Thiêm kèm Quyết định 367 có con dấu phê duyệt của Chính phủ.\r\nCũng theo Sở QHKT, trong quyết định của Thủ tướng Chính phủ ký ngày 4/6/1996 căn cứ theo Nghị định 91 ngày 17/8/1994, nội dung không hề nhắc đến bản đồ đính kèm và bản đồ 1/5.000.<br>\r\n\r\nNăm 2008, khi đất đai Thủ Thiêm xảy ra hàng loạt vụ khiếu nại, người dân đã đề nghị được xem bản đồ quy hoạch 1/5.000, Sở QHKT đã kiểm tra lại tất cả hồ sơ lưu trữ nhưng không thấy có bản đồ này.<br>\r\n\r\nSau đó, Sở báo cáo lên UBND Tp.HCM và liên hệ tất cả các đơn vị liên quan từ Chi cục Lưu trữ thành phố, Trung tâm Lưu trữ Quốc Gia III tại Tp.HCM... nhưng đều không có. Tương tự, Văn phòng Chính phủ, Bộ Xây dựng cũng trả lời rằng \"không lưu trữ\", hoặc Quyết định 367 đang lưu trữ tại Kho lưu trữ Văn phòng Chính phủ không có bản đồ kèm theo.<br>\r\n\r\nĐại diện Sở QHKT cho hay: \"Tất cả những việc này đều đã được Tp.HCM báo cáo với Chính phủ, Thanh tra Chính phủ khi tiến hành giải quyết khiếu nại của người dân. Vì vậy, việc có tồn tại bản đồ quy hoạch 1/5.000 KĐT Thủ Thiêm hay không phải chờ Thanh tra Chính phủ kết luận cuối cùng\".<br>                                                                              ', 'tintuc1.jpg'),
(2, 'Địa ốc vùng ven Sài Gòn: \"Nóng\" từ đất nền lan sang căn hộ', 'Đầu tháng 4, thị trường địa ốc vùng ven Sài Gòn như Dĩ An (Bình Dương), Biên Hòa (Đồng Nai) ghi nhận mức giao dịch sôi động cùng tốc độ tăng giá mạnh mẽ.\r\nđịa ốc vùng ven Sài Gòn<br>\r\nSức bật hạ tầng khiến địa ốc vùng ven tăng giá mạnh trong năm 2018<br>\r\n \r\nNhững ngày này, tại TP. Biên Hòa và khu vực các huyện Nhơn Trạch, Long Thành, Trảng Bom, Dĩ An (Bình Dương)… hàng loạt văn phòng môi giới nhà đất mọc lên như nấm. Các bảng hiệu bán đất rao hàng loạt dự án cũ, mới và đất nền phân lô treo đầy các tuyến đường với không khí mua bán tấp nập.<br>\r\n\r\nTại các xã ngoại ô của Biên Hòa, theo ghi nhận, các lô đất nông nghiệp đang được rao bán ở mức 20-50 tỷ đồng/ha, còn đất nông nghiệp tại các huyện giáp ranh Biên Hòa cũng bị giới đầu cơ đẩy lên 10-15 tỷ đồng/ha. Tính ra, giá đất tại các khu vực này đang tăng khoảng 50% so với thời điểm trước tết.<br>\r\n\r\nKhu vực giao dịch sôi động nhất tại Biên Hòa thuộc về các xã Hóa An, phường Bửu Hòa, Tân Vạn, Trảng Dài, Tân Phong. Nếu như cuối năm 2017, giá đất chỉ khoảng 10 triệu đồng/m2 thì hiện tại được rao 15-20 triệu đồng/m2.<br>\r\n\r\nKhu vực trung tâm Biên Hòa giá đất cũng tăng chóng mặt, các tuyến đường như Phạm Văn Thuận, Đồng Khởi, Nguyễn Ái Quốc... giá tăng hơn khoảng 30% so với thời điểm trước Tết, dao động từ 60-100 triệu một m2.<br>\r\n\r\nKhu vực có mức tăng cao nhất Biên Hòa là khu D2D - nơi tuyến đường trung tâm chạy qua, lên đến 65 triệu đồng/m2, hơn khoảng 40% so với thời điểm trước tết. Trước tết, một lô đất tại khu D2D có giá khoảng 2,6 tỷ - 2,8 tỷ/nền thì ở thời điểm hiện tại đã tăng lên tới mức 3,7 – 3,8 tỷ/nền, có những lô đẹp giá tăng lên tới 4 tỷ/nền. Những lô đẹp biệt thự giá còn cao hơn nhiều nhưng cũng khó tìm được vì được giới đầu tư mua và đăng ký từ trước. Tính ra khoảng 5 tháng, chủ đất tại đây đút túi khoảng trên dưới 1 tỷ/nền.<br>\r\n\r\n\"Dù giá cao song nhà đầu tư muốn sở hữu cho mình những lô đất cũng khó vì quỹ đất ở khu vực trung tâm này không còn nhiều\", chị Nguyễn Thị Lan Hương, giám đốc một công ty bất động sản cho hay.<br>', 'tintuc2.jpg'),
(3, '\"Cuộc chiến\" tiện ích của phân khúc căn hộ vừa túi tiền', 'Ngày nay, khách hàng không chỉ quan tâm đến chất lượng bên trong căn hộ mà còn đặc biệt chú trọng đến tiện ích lẫn không gian sống của dự án. Điều này buộc các chủ đầu tư phải không ngừng nỗ lực phát triển và hoàn thiện dự án tốt hơn.<br>\r\nChỉ từ 1,1 tỷ đồng/căn, khách hàng đã có thể tận hưởng không gian nghỉ dưỡng cùng hệ thống tiện ích cao cấp tại Dream Home Riverside<br>\r\n \r\nTiện ích được ưu tiên<br>\r\nTrước đây, nếu nhắc đến những căn hộ chất lượng cao, tiện ích đồng bộ, nhiều người sẽ nghĩ ngay đến những dự án cao cấp với mức giá từ 2 tỷ trở lên. Thế nhưng, với xu thế của xã hội ngày nay, yếu tố tiện ích cũng bắt đầu được hình thành ở các dự án vừa túi tiền.<br>\r\n\r\nCác chủ đầu tư ngày càng chú trọng việc mang đến chất lượng, tiện ích thiết thực cho cư dân để tăng khả năng cạnh tranh trên thị trường. Đồng thời, việc cân đối diện tích căn hộ và gia tăng tiện ích chung cũng phù hợp với thị hiếu của phần đông khách hàng.<br>\r\n\r\nĐiển hình như dự án Khu cao ốc ven sông Dream Home Riverside, tọa lạc ngay giao lộ Nguyễn Văn Linh - Phạm Thế Hiển sở hữu nhiều tiện ích cao cấp như: Công viên Paradise Park, Khu thương mại Diamond Center Mall, Hồ bơi Tropics Pools, Quảng trường nước Water Square, Sảnh đón Emerald Riverview Hall, Khu vui chơi trẻ em Rainbow Land, Panorama Gym, Spa, Khu sinh hoạt cư dân, Cafe, BBQ, Vườn thiền trên không Zen Garden… mang đến cuộc sống hiện đại, tiện nghi nhất cho cư dân.<br>\r\n\r\nCăn hộ Dream Home Riverside được thiết kế tối ưu mọi không gian, tiết kiệm diện tích nhưng vẫn đảm bảo tính tiện dụng. Căn hộ có diện tích dưới 62m2 nhưng vẫn sở hữu 2 phòng ngủ, 2 nhà vệ sinh. 100% căn hộ tại dự án đều là căn góc, khai thác tối đa các yếu tố như hướng gió, ánh sáng tự nhiên để đảm bảo không gian thông thoáng. Điều này cũng trở thành ưu thế nổi bật của Dream Home Riverside so với các dự án căn hộ giá rẻ trước đây.', 'tintuc3.jpg'),
(23619, 'Khi nào \"cơn sốt\" đất trên cả nước mới hạ nhiệt?', 'Tình trạng sốt đất kéo dài ảnh hưởng rất tiêu cực đến nền kinh tế. \"Cơn sốt\" tác động lớn đến hoạt động của các tổ chức tài chính, gây ra nhiều hệ lụy đối với những lĩnh vực sản xuất, kinh doanh khác.<br>\r\nPhóng viên đã có cuộc trao đổi với chuyên gia kinh tế Nguyễn Trí Hiếu về \"cơn sốt\" đất hiện nay.<br>\r\n\r\n- Ông có thể cho biết, nguyên nhân nào tạo nên \"cơn sốt\" đất ở nhiều địa phương trên cả nước như hiện nay?<br>\r\n\r\nNguyên nhân gây sốt đất theo tôi thấy có những yếu tố hợp lý và cả những yếu tố bất hợp lý.<br>\r\n\r\nCó 3 yếu tố hợp lý: Một là, thông tin về những kế hoạch, quy hoạch của Chính phủ về xây dựng phát triển hạ tầng cơ sở các tỉnh, thành luôn được giới đầu tư bất động sản (BĐS) quan tâm, đầu tư đón đầu. Hai là, đất đai không thể sinh sôi nảy nở trong khi dân số Việt Nam ngày một đông nên giá trị đất ngày càng cao. Ba là nền kinh tế nước ta đang phát triển, giá đất tại những vùng trọng điểm, khu chế xuất, đặc khu kinh tế… chắc chắn sẽ tăng theo sự phát triển của địa phương.<br>\r\n\r\nBên cạnh đó, cũng có nhiều yếu tố bất hợp lý tạo nên \"cơn sốt\" đất. Chẳng hạn, có những địa phương rất ít tiềm năng phát triển kinh tế nhưng giá đất vẫn tăng cao do “ăn theo” vùng phụ cận. Yếu tố thứ hai bởi giới đầu cơ, cò đất cố ý thổi giá, lợi dụng thông tin quy hoạch không rõ ràng để trục lợi chứ không phải do nhu cầu mua đất để ở thực tăng cao. Còn ở những địa phương có quy hoạch rõ ràng, có tiềm năng phát triển thì giới đầu cơ dùng chiêu mua đi bán lại nhiều lần để nâng giá đất vượt xa giá trị thực. Một yếu tố nữa là giới đầu tư thường chạy theo tâm lý đám đông, bắt chước với hy vọng kiếm lời cao.<br>\r\n\r\n- Thưa ông, \"cơn sốt\" đất hiện nay sẽ còn kéo dài bao lâu và hệ lụy của nó như thế nào?<br>\r\n\r\nHiện nay, \"cơn sốt\" đất đang lên đỉnh điểm, nhiệt độ đang ở mức cao nhất nên sẽ tiếp tục nóng trong vài tháng tới. Tôi dự đoán giá đất sẽ tiếp tục bị \"thổi\" cho đến khi số lượng người mua cạn (người có nhu cầu ở thực dừng tìm mua đất vì giá quá cao, còn nhà đầu tư thứ cấp không đủ tài chính để ôm thêm đất nữa) thì mới dừng lại. Và khi việc thổi giá dừng lại thì giá đất sẽ lao dốc, trước tiên ở những khu vực đang có giá trên trời, không đúng giá trị thực. Thị trường BĐS có thể sẽ bắt đầu giảm nhiệt vào cuối năm nay.<br>\r\n\r\nNgười mua đất cuối cùng là người chịu thiệt hại nhiều nhất. Bên cạnh đó, \"cơn sốt\" đất kéo dài còn ảnh hưởng rất tiêu cực đến cả nền kinh tế. Nó tác động lớn đến hoạt động của các ngân hàng cho vay, tổ chức tài chính, đồng thời gây ra nhiều hệ lụy đối với những lĩnh vực sản xuất, kinh doanh khác. Minh chứng là sự suy sụp của nền kinh tế cách đây 10 năm khi \"bong bóng\" BĐS bị vỡ.', 'tintuc4.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `useridd` int(10) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`useridd`, `username`, `fullname`, `email`, `password`) VALUES
(1, 'admin', 'thaiduong', 'thaiduong@gmail.com', '21232f297a57a5a743894a0e4a801fc3'),
(8, 'vivi', 'vivi', 'vivi@gmail.com', 'c3bb6f719742fd1e5768d6d1361cfb49'),
(6739, 'chuan', 'lai', 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(11682, 'đạt', 'đỗ tuấn đạt', 'tuandat@gmail.com', 'a253f92323f73a2c3a5382f5230903fe'),
(16327, 'aaaaa', 'a b', 'aa@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(20147, 'quyen', 'do quyen', 'doquyen@gmail.com', '80ea0569271b88929b6b16bc289b12d8'),
(22231, 'abcxyz', 'bghds', 'quyentabi95@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `duan`
--
ALTER TABLE `duan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_brand_id` (`product_brand_id`);

--
-- Chỉ mục cho bảng `product_brand`
--
ALTER TABLE `product_brand`
  ADD PRIMARY KEY (`product_brand_id`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`useridd`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `duan`
--
ALTER TABLE `duan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32134;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32709;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23620;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `useridd` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22232;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`product_brand_id`) REFERENCES `product_brand` (`product_brand_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
