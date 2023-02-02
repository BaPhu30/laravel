-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 29, 2023 at 01:24 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopee`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `shop_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bill_info`
--

CREATE TABLE `bill_info` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bill_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `sold` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category_child`
--

CREATE TABLE `category_child` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_dad_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `category_child`
--

INSERT INTO `category_child` (`id`, `category_dad_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Áo Khoác', NULL, NULL),
(2, 1, 'Áo Vest và Blazer', NULL, NULL),
(3, 1, 'Áo Hoodie, Áo Len & Áo Nỉ', NULL, NULL),
(4, 1, 'Quần Jeans', NULL, NULL),
(5, 1, 'Quần Dài/Quần Âu', NULL, NULL),
(6, 1, 'Quần Short', NULL, NULL),
(7, 1, 'Áo', NULL, NULL),
(8, 1, 'Áo Ba Lỗ', NULL, NULL),
(9, 1, 'Đồ Lót', NULL, NULL),
(10, 1, 'Đồ Ngủ', NULL, NULL),
(11, 1, 'Đồ Bộ', NULL, NULL),
(12, 1, 'Vớ/Tất', NULL, NULL),
(13, 1, 'Trang Phục Truyền Thống', NULL, NULL),
(14, 1, 'Đồ Hóa Trang', NULL, NULL),
(15, 1, 'Trang Phục Ngành Nghề', NULL, NULL),
(16, 1, 'Khác', NULL, NULL),
(17, 1, 'Trang Sức Nam', NULL, NULL),
(18, 1, 'Kính Mắt Nam', NULL, NULL),
(19, 1, 'Thắt Lưng Nam', NULL, NULL),
(20, 1, 'Cà vạt & Nơ cổ', NULL, NULL),
(21, 1, 'Phụ Kiện Nam', NULL, NULL),
(22, 2, 'Quần', NULL, NULL),
(23, 2, 'Quần đùi', NULL, NULL),
(24, 2, 'Chân váy', NULL, NULL),
(25, 2, 'Quần jeans', NULL, NULL),
(26, 2, 'Đầm/Váy', NULL, NULL),
(27, 2, 'Váy cưới', NULL, NULL),
(28, 2, 'Đồ liền thân', NULL, NULL),
(29, 2, 'Áo khoác, Áo choàng & Vest', NULL, NULL),
(30, 2, 'Áo len & Cardigan', NULL, NULL),
(31, 2, 'Hoodie và Áo nỉ', NULL, NULL),
(32, 2, 'Bộ', NULL, NULL),
(33, 2, 'Đồ lót', NULL, NULL),
(34, 2, 'Đồ ngủ', NULL, NULL),
(35, 2, 'Áo', NULL, NULL),
(36, 2, 'Đồ tập', NULL, NULL),
(37, 2, 'Đồ Bầu', NULL, NULL),
(38, 2, 'Đồ truyền thống', NULL, NULL),
(39, 2, 'Đồ hóa trang', NULL, NULL),
(40, 2, 'Vải', NULL, NULL),
(41, 2, 'Vớ/ Tất', NULL, NULL),
(42, 2, 'Khác', NULL, NULL),
(43, 3, 'Điện thoại', NULL, NULL),
(44, 3, 'Máy tính bảng', NULL, NULL),
(45, 3, 'Pin Dự Phòng', NULL, NULL),
(46, 3, 'Pin Gắn Trong, Cáp và Bộ Sạc', NULL, NULL),
(47, 3, 'Ốp lưng, bao da, Miếng dán điện thoại', NULL, NULL),
(48, 3, 'Bảo vệ màn hình', NULL, NULL),
(49, 3, 'Đế giữ điện thoại & Gậy Chụp hình', NULL, NULL),
(50, 3, 'Thẻ nhớ', NULL, NULL),
(51, 3, 'Sim', NULL, NULL),
(52, 3, 'Phụ kiện khác', NULL, NULL),
(53, 3, 'Thiết bị khác', NULL, NULL),
(54, 4, 'Đồ dùng du lịch cho bé', NULL, NULL),
(55, 4, 'Đồ dùng ăn dặm cho bé', NULL, NULL),
(56, 4, 'Phụ kiện cho mẹ', NULL, NULL),
(57, 4, 'Chăm sóc sức khỏe mẹ', NULL, NULL),
(58, 4, 'Đồ dùng phòng tắm & Chăm sóc cơ thể bé', NULL, NULL),
(59, 4, 'Đồ dùng phòng ngủ cho bé', NULL, NULL),
(60, 4, 'An toàn cho bé', NULL, NULL),
(61, 4, 'Thực phẩm cho bé', NULL, NULL),
(62, 4, 'Chăm sóc sức khỏe bé', NULL, NULL),
(63, 4, 'Tã & bô em bé', NULL, NULL),
(64, 4, 'Đồ chơi', NULL, NULL),
(65, 4, 'Bộ & Gói quà tặng', NULL, NULL),
(66, 4, 'Khác', NULL, NULL),
(67, 4, 'Sữa công thức trên 24 tháng', NULL, NULL),
(68, 4, 'Sữa công thức 0-24 tháng tuổi', NULL, NULL),
(69, 5, 'Thiết bị đeo thông minh', NULL, NULL),
(70, 5, 'Phụ kiện tivi', NULL, NULL),
(71, 5, 'Máy Game Console', NULL, NULL),
(72, 5, 'Phụ kiện Console', NULL, NULL),
(73, 5, 'Đĩa game', NULL, NULL),
(74, 5, 'Linh phụ kiện', NULL, NULL),
(75, 5, 'Tai Nghe', NULL, NULL),
(76, 5, 'Loa', NULL, NULL),
(77, 5, 'Tivi', NULL, NULL),
(78, 5, 'Tivi Box', NULL, NULL),
(79, 5, 'Tai nghe', NULL, NULL),
(80, 6, 'Chăn, Ga, Gối & Nệm', NULL, NULL),
(81, 6, 'Đồ nội thất', NULL, NULL),
(82, 6, 'Trang trí nhà cửa', NULL, NULL),
(83, 6, 'Dụng cụ & Thiết bị tiện ích', NULL, NULL),
(84, 6, 'Đồ dùng nhà bếp và hộp đựng thực phẩm', NULL, NULL),
(85, 6, 'Đèn', NULL, NULL),
(86, 6, 'Ngoài trời & Sân vườn', NULL, NULL),
(87, 6, 'Đồ dùng phòng tắm', NULL, NULL),
(88, 6, 'Vật phẩm thờ cúng', NULL, NULL),
(89, 6, 'Đồ trang trí tiệc', NULL, NULL),
(90, 6, 'Chăm sóc nhà cửa và giặt ủi', NULL, NULL),
(91, 6, 'Sắp xếp nhà cửa', NULL, NULL),
(92, 6, 'Dụng cụ pha chế', NULL, NULL),
(93, 6, 'Tinh dầu thơm phòng', NULL, NULL),
(94, 6, 'Đồ dùng phòng ăn', NULL, NULL),
(95, 7, 'Máy Tính Bàn', NULL, NULL),
(96, 7, 'Màn Hình', NULL, NULL),
(97, 7, 'Linh Kiện Máy Tính', NULL, NULL),
(98, 7, 'Thiết Bị Lưu Trữ', NULL, NULL),
(99, 7, 'Thiết Bị Mạng', NULL, NULL),
(100, 7, 'Máy In, Máy Scan & Máy Chiếu', NULL, NULL),
(101, 7, 'Phụ Kiện Máy Tính', NULL, NULL),
(102, 7, 'Laptop', NULL, NULL),
(103, 7, 'Khác', NULL, NULL),
(104, 7, 'Gaming', NULL, NULL),
(105, 8, 'Chăm sóc da mặt', NULL, NULL),
(106, 8, 'Tắm & chăm sóc cơ thể', NULL, NULL),
(107, 8, 'Trang điểm', NULL, NULL),
(108, 8, 'Chăm sóc tóc', NULL, NULL),
(109, 8, 'Dụng cụ & Phụ kiện Làm đẹp', NULL, NULL),
(110, 8, 'Vệ sinh răng miệng', NULL, NULL),
(111, 8, 'Nước hoa', NULL, NULL),
(112, 8, 'Chăm sóc nam giới', NULL, NULL),
(113, 8, 'Khác', NULL, NULL),
(114, 8, 'Chăm sóc phụ nữ', NULL, NULL),
(115, 8, 'Bộ sản phẩm làm đẹp', NULL, NULL),
(116, 9, 'Máy ảnh - Máy quay phim', NULL, NULL),
(117, 9, 'Camera giám sát & Camera hệ thống', NULL, NULL),
(118, 9, 'Thẻ nhớ', NULL, NULL),
(119, 9, 'Ống kính', NULL, NULL),
(120, 9, 'Phụ kiện máy ảnh', NULL, NULL),
(121, 9, 'Máy bay camera & Phụ kiện', NULL, NULL),
(122, 10, 'Vật tư y tế', NULL, NULL),
(123, 10, 'Chống muỗi & xua đuổi côn trùng', NULL, NULL),
(124, 10, 'Thực phẩm chức năng', NULL, NULL),
(125, 10, 'Tã người lớn', NULL, NULL),
(126, 10, 'Hỗ trợ làm đẹp', NULL, NULL),
(127, 10, 'Hỗ trợ tình dục', NULL, NULL),
(128, 10, 'Dụng cụ massage và trị liệu', NULL, NULL),
(129, 10, 'Khác', NULL, NULL),
(130, 11, 'Đồng Hồ Nam', NULL, NULL),
(131, 11, 'Đồng Hồ Nữ', NULL, NULL),
(132, 11, 'Bộ Đồng Hồ & Đồng Hồ Cặp', NULL, NULL),
(133, 11, 'Đồng Hồ Trẻ Em', NULL, NULL),
(134, 11, 'Phụ Kiện Đồng Hồ', NULL, NULL),
(135, 11, 'Khác', NULL, NULL),
(136, 12, 'Bốt', NULL, NULL),
(137, 12, 'Giày Thể Thao/ Sneaker', NULL, NULL),
(138, 12, 'Giày Đế Bằng', NULL, NULL),
(139, 12, 'Giày Cao Gót', NULL, NULL),
(140, 12, 'Giày Đế Xuồng', NULL, NULL),
(141, 12, 'Xăng-đan Và Dép', NULL, NULL),
(142, 12, 'Phụ Kiện Giày', NULL, NULL),
(143, 12, 'Giày Khác', NULL, NULL),
(144, 13, 'Bốt', NULL, NULL),
(145, 13, 'Giày Thể Thao/ Sneakers', NULL, NULL),
(146, 13, 'Giày Sục', NULL, NULL),
(147, 13, 'Giày Tây Lười', NULL, NULL),
(148, 13, 'Giày Oxfords & Giày Buộc Dây', NULL, NULL),
(149, 13, 'Xăng-đan và Dép', NULL, NULL),
(150, 13, 'Phụ kiện giày dép', NULL, NULL),
(151, 13, 'Khác', NULL, NULL),
(152, 14, 'Ba Lô Nữ', NULL, NULL),
(153, 14, 'Cặp Laptop', NULL, NULL),
(154, 14, 'Ví Dự Tiệc & Ví Cầm Tay', NULL, NULL),
(155, 14, 'Túi Đeo Hông & Túi Đeo Ngực', NULL, NULL),
(156, 14, 'Túi Tote', NULL, NULL),
(157, 14, 'Túi Quai Xách', NULL, NULL),
(158, 14, 'Túi Đeo Chéo & Túi Đeo Vai', NULL, NULL),
(159, 14, 'Ví/Bóp Nữ', NULL, NULL),
(160, 14, 'Phụ Kiện Túi', NULL, NULL),
(161, 14, 'Khác', NULL, NULL),
(162, 15, 'Đồ gia dụng nhà bếp', NULL, NULL),
(163, 15, 'Đồ gia dụng lớn', NULL, NULL),
(164, 15, 'Máy hút bụi & Thiết bị làm sạch', NULL, NULL),
(165, 15, 'Quạt & Máy nóng lạnh', NULL, NULL),
(166, 15, 'Thiết bị chăm sóc quần áo', NULL, NULL),
(167, 15, 'Khác', NULL, NULL),
(168, 15, 'Máy xay, ép, máy đánh trứng trộn bột, máy xay thực phẩm', NULL, NULL),
(169, 15, 'Bếp điện', NULL, NULL),
(170, 16, 'Nhẫn', NULL, NULL),
(171, 16, 'Bông tai', NULL, NULL),
(172, 16, 'Khăn choàng', NULL, NULL),
(173, 16, 'Găng tay', NULL, NULL),
(174, 16, 'Phụ kiện tóc', NULL, NULL),
(175, 16, 'Vòng tay & Lắc tay', NULL, NULL),
(176, 16, 'Lắc chân', NULL, NULL),
(177, 16, 'Mũ', NULL, NULL),
(178, 16, 'Dây chuyền', NULL, NULL),
(179, 16, 'Kính mắt', NULL, NULL),
(180, 16, 'Kim loại quý', NULL, NULL),
(181, 16, 'Thắt lưng', NULL, NULL),
(182, 16, 'Cà vạt & Nơ cổ', NULL, NULL),
(183, 16, 'Phụ kiện thêm', NULL, NULL),
(184, 16, 'Bộ phụ kiện', NULL, NULL),
(185, 16, 'Khác', NULL, NULL),
(186, 16, 'Vớ/ Tất', NULL, NULL),
(187, 16, 'Ô/Dù', NULL, NULL),
(188, 17, 'Vali', NULL, NULL),
(189, 17, 'Túi du lịch', NULL, NULL),
(190, 17, 'Phụ kiện du lịch', NULL, NULL),
(191, 17, 'Dụng Cụ Thể Thao & Dã Ngoại', NULL, NULL),
(192, 17, 'Giày Thể Thao', NULL, NULL),
(193, 17, 'Thời Trang Thể Thao & Dã Ngoại', NULL, NULL),
(194, 17, 'Phụ Kiện Thể Thao & Dã Ngoại', NULL, NULL),
(195, 17, 'Khác', NULL, NULL),
(196, 18, 'Đồ ăn vặt', NULL, NULL),
(197, 18, 'Đồ chế biến sẵn', NULL, NULL),
(198, 18, 'Nhu yếu phẩm', NULL, NULL),
(199, 18, 'Nguyên liệu nấu ăn', NULL, NULL),
(200, 18, 'Đồ làm bánh', NULL, NULL),
(201, 18, 'Sữa - trứng', NULL, NULL),
(202, 18, 'Đồ uống', NULL, NULL),
(203, 18, 'Ngũ cốc & mứt', NULL, NULL),
(204, 18, 'Các loại bánh', NULL, NULL),
(205, 18, 'Đồ uống có cồn', NULL, NULL),
(206, 18, 'Bộ quà tặng', NULL, NULL),
(207, 18, 'Thực phẩm tươi sống và thực phẩm đông lạnh', NULL, NULL),
(208, 18, 'Khác', NULL, NULL),
(209, 19, 'Xe đạp, xe điện', NULL, NULL),
(210, 19, 'Mô tô, xe máy', NULL, NULL),
(211, 19, 'Xe Ô tô', NULL, NULL),
(212, 19, 'Mũ bảo hiểm', NULL, NULL),
(213, 19, 'Phụ kiện xe máy', NULL, NULL),
(214, 19, 'Phụ kiện xe đạp', NULL, NULL),
(215, 19, 'Phụ kiện bên trong ô tô', NULL, NULL),
(216, 19, 'Dầu nhớt & dầu nhờn', NULL, NULL),
(217, 19, 'Phụ tùng ô tô', NULL, NULL),
(218, 19, 'Phụ tùng xe máy', NULL, NULL),
(219, 19, 'Phụ kiện bên ngoài ô tô', NULL, NULL),
(220, 19, 'Chăm sóc ô tô', NULL, NULL),
(221, 19, 'Dịch vụ cho xe', NULL, NULL),
(222, 20, 'Sách Tiếng Việt', NULL, NULL),
(223, 20, 'Sách ngoại văn', NULL, NULL),
(224, 20, 'Gói Quà', NULL, NULL),
(225, 20, 'Bút viết', NULL, NULL),
(226, 20, 'Dụng cụ học sinh & văn phòng', NULL, NULL),
(227, 20, 'Màu, Họa Cụ và Đồ Thủ Công', NULL, NULL),
(228, 20, 'Sổ và Giấy Các Loại', NULL, NULL),
(229, 20, 'Quà Lưu Niệm', NULL, NULL),
(230, 20, 'Nhạc cụ và phụ kiện âm nhạc', NULL, NULL),
(231, 21, 'Ba Lô Nam', NULL, NULL),
(232, 21, 'Ba Lô Laptop Nam', NULL, NULL),
(233, 21, 'Túi & Cặp Đựng Laptop', NULL, NULL),
(234, 21, 'Túi Chống Sốc Laptop Nam', NULL, NULL),
(235, 21, 'Túi Tote Nam', NULL, NULL),
(236, 21, 'Cặp Xách Công Sở Nam', NULL, NULL),
(237, 21, 'Ví Cầm Tay Nam', NULL, NULL),
(238, 21, 'Túi Đeo Hông & Túi Đeo Ngực Nam', NULL, NULL),
(239, 21, 'Túi Đeo Chéo Nam', NULL, NULL),
(240, 21, 'Bóp/Ví Nam', NULL, NULL),
(241, 21, 'Khác', NULL, NULL),
(242, 22, 'Trang phục bé trai', NULL, NULL),
(243, 22, 'Trang phục bé gái', NULL, NULL),
(244, 22, 'Giày dép bé trai', NULL, NULL),
(245, 22, 'Giày dép bé gái', NULL, NULL),
(246, 22, 'Khác', NULL, NULL),
(247, 22, 'Quần áo em bé', NULL, NULL),
(248, 22, 'Giày tập đi & Tất sơ sinh', NULL, NULL),
(249, 22, 'Phụ kiện trẻ em', NULL, NULL),
(250, 23, 'Đồ chơi mô hình', NULL, NULL),
(251, 23, 'Đồ chơi giải trí', NULL, NULL),
(252, 23, 'Đồ chơi giáo dục', NULL, NULL),
(253, 23, 'Đồ chơi cho trẻ sơ sinh & trẻ nhỏ', NULL, NULL),
(254, 23, 'Đồ chơi vận động & ngoài trời', NULL, NULL),
(255, 23, 'Búp bê & Đồ chơi nhồi bông', NULL, NULL),
(256, 24, 'Giặt giũ & Chăm sóc nhà cửa', NULL, NULL),
(257, 24, 'Giấy vệ sinh, khăn giấy', NULL, NULL),
(258, 24, 'Vệ sinh nhà cửa', NULL, NULL),
(259, 24, 'Vệ sinh bát đĩa', NULL, NULL),
(260, 24, 'Dụng cụ vệ sinh', NULL, NULL),
(261, 24, 'Chất khử mùi, làm thơm', NULL, NULL),
(262, 24, 'Thuốc diệt côn trùng', NULL, NULL),
(263, 24, 'Túi, màng bọc thực phẩm', NULL, NULL),
(264, 24, 'Bao bì, túi đựng rác', NULL, NULL),
(265, 25, 'Thức ăn cho thú cưng', NULL, NULL),
(266, 25, 'Phụ kiện cho thú cưng', NULL, NULL),
(267, 25, 'Vệ sinh cho thú cưng', NULL, NULL),
(268, 25, 'Quần áo thú cưng', NULL, NULL),
(269, 25, 'Chăm sóc sức khỏe', NULL, NULL),
(270, 25, 'Làm đẹp cho thú cưng', NULL, NULL),
(271, 25, 'Khác', NULL, NULL),
(272, 26, 'Nhà hàng & Ăn uống', NULL, NULL),
(273, 26, 'Sự kiện & Giải trí', NULL, NULL),
(274, 26, 'Nạp tiền tài khoản', NULL, NULL),
(275, 26, 'Sức khỏe & Làm đẹp', NULL, NULL),
(276, 26, 'Gọi xe', NULL, NULL),
(277, 26, 'Khóa học', NULL, NULL),
(278, 26, 'Du lịch & Khách sạn', NULL, NULL),
(279, 26, 'Mua sắm', NULL, NULL),
(280, 26, 'Mã quà tặng Shopee', NULL, NULL),
(281, 26, 'Thanh toán hóa đơn', NULL, NULL),
(282, 26, 'Dịch vụ khác', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_dad`
--

CREATE TABLE `category_dad` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `category_dad`
--

INSERT INTO `category_dad` (`id`, `name`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Thời Trang Nam', '/img/index/index-category/index-category-1.png', NULL, NULL),
(2, 'Thời Trang Nữ', '/img/index/index-category/index-category-2.png', NULL, NULL),
(3, 'Phụ Kiện & Điện Thoại', '/img/index/index-category/index-category-3.png', NULL, NULL),
(4, 'Mẹ & Bé', '/img/index/index-category/index-category-4.png', NULL, NULL),
(5, 'Thiết Bị Điện Tử', '/img/index/index-category/index-category-5.png', NULL, NULL),
(6, 'Nhà Cửa & Đời Sống', '/img/index/index-category/index-category-6.png', NULL, NULL),
(7, 'Máy Tính & Laptop', '/img/index/index-category/index-category-7.png', NULL, NULL),
(8, 'Sắc Đẹp', '/img/index/index-category/index-category-8.png', NULL, NULL),
(9, 'Máy Ảnh & Máy Quay Phim', '/img/index/index-category/index-category-9.png', NULL, NULL),
(10, 'Sức Khỏe', '/img/index/index-category/index-category-10.png', NULL, NULL),
(11, 'Đồng Hồ', '/img/index/index-category/index-category-11.png', NULL, NULL),
(12, 'Giày Dép Nữ', '/img/index/index-category/index-category-12.png', NULL, NULL),
(13, 'Giày Dép Nam', '/img/index/index-category/index-category-13.png', NULL, NULL),
(14, 'Túi Ví Nữ', '/img/index/index-category/index-category-14.png', NULL, NULL),
(15, 'Thiết Bị Điện Gia Dụng', '/img/index/index-category/index-category-15.png', NULL, NULL),
(16, 'Phụ Kiện & Trang Sức Nữ', '/img/index/index-category/index-category-16.png', NULL, NULL),
(17, 'Thể Thao & Du Lịch', '/img/index/index-category/index-category-17.png', NULL, NULL),
(18, 'Bách Hóa Online', '/img/index/index-category/index-category-18.png', NULL, NULL),
(19, 'Ô Tô & Xe Máy & Xe Đạp', '/img/index/index-category/index-category-19.png', NULL, NULL),
(20, 'Nhà Sách Online', '/img/index/index-category/index-category-20.png', NULL, NULL),
(21, 'Balo & Túi Ví Nam', '/img/index/index-category/index-category-21.png', NULL, NULL),
(22, 'Thời Trang Trẻ Em', '/img/index/index-category/index-category-22.png', NULL, NULL),
(23, 'Đồ Chơi', '/img/index/index-category/index-category-23.png', NULL, NULL),
(24, 'Giặt Giũ & Chăm Sóc Nhà Cửa', '/img/index/index-category/index-category-24.png', NULL, NULL),
(25, 'Chăm Sóc Thú Cưng', '/img/index/index-category/index-category-25.png', NULL, NULL),
(26, 'Voucher & Dịch Vụ', '/img/index/index-category/index-category-26.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `comment_parent_id` bigint(20) UNSIGNED NOT NULL,
  `main` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `reviews` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comment_like`
--

CREATE TABLE `comment_like` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `connection` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `queue` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `interactive`
--

CREATE TABLE `interactive` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `messenger_id` bigint(20) UNSIGNED NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messenger`
--

CREATE TABLE `messenger` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `room_id` bigint(20) UNSIGNED NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `messenger_parent_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_23_040328_create_category_dad_table', 1),
(6, '2022_12_23_040345_create_category_child_table', 1),
(7, '2022_12_23_040403_create_product_table', 1),
(8, '2022_12_23_040411_create_product_info_table', 1),
(9, '2022_12_23_040428_create_comment_table', 1),
(10, '2022_12_23_040436_create_comment_like_table', 1),
(11, '2022_12_23_041417_update_category_child_table', 1),
(12, '2022_12_23_041450_update_comment_table', 1),
(13, '2022_12_23_041458_update_comment_like_table', 1),
(14, '2022_12_23_041516_update_product_info_table', 1),
(15, '2022_12_28_075600_create_bills_table', 1),
(16, '2022_12_29_020258_create_bill_info_table', 1),
(17, '2023_01_04_024146_create_shop_table', 1),
(18, '2023_01_04_025901_update_bills_table', 1),
(19, '2023_01_04_030021_update_bill_info_table', 1),
(20, '2023_01_04_034645_create_roles_table', 1),
(21, '2023_01_04_034713_create_user_role_table', 1),
(22, '2023_01_04_034917_update_user_role_table', 1),
(23, '2023_01_04_040344_update_shop_table', 1),
(24, '2023_01_04_041218_update_product_table', 1),
(25, '2023_01_12_042714_create_sessions_table', 2),
(26, '2023_01_25_074503_add_column_device_token', 3),
(27, '2023_01_26_092409_create_user_room_table', 3),
(28, '2023_01_26_092540_create_room_table', 3),
(29, '2023_01_26_092651_create_messenger_table', 3),
(30, '2023_01_26_092907_create_interactive_table', 3),
(31, '2023_01_26_093421_update_user_room_table', 4),
(32, '2023_01_26_093637_update_messenger_table', 4),
(33, '2023_01_26_093727_update_interactive_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_vietnamese_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_child_id` bigint(20) UNSIGNED NOT NULL,
  `shop_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `img` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `video` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `sold` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category_child_id`, `shop_id`, `title`, `img`, `video`, `sold`, `created_at`, `updated_at`) VALUES
(2, 1, 11, 'Áo Sweater CUNA Áo Sweater Nam Nữ Form Rộng Chất Cotton Nỉ Ngoại Hàng Xuất Cao Cấp Trơn Cổ Tròn Dài Tay Local Brand', 'https://labtoidayhoc.s3.ap-southeast-1.amazonaws.com/phu/shopee/admin/product/1674962212_W49AXgAn3A.jpg, https://labtoidayhoc.s3.ap-southeast-1.amazonaws.com/phu/shopee/admin/product/1674962215_sHM1ZXB0va.jpg, https://labtoidayhoc.s3.ap-southeast-1.amazonaws.com/phu/shopee/admin/product/1674962215_ErDX6o28bh.jpg, https://labtoidayhoc.s3.ap-southeast-1.amazonaws.com/phu/shopee/admin/product/1674962215_otTgaUU1Iz.jpg, https://labtoidayhoc.s3.ap-southeast-1.amazonaws.com/phu/shopee/admin/product/1674962215_4P1PB41WCm.jpg, https://labtoidayhoc.s3.ap-southeast-1.amazonaws.com/phu/shopee/admin/product/1674962215_4sA6ImMYiX.jpg, https://labtoidayhoc.s3.ap-southeast-1.amazonaws.com/phu/shopee/admin/product/1674962215_AbOHVBzSbh.jpg, https://labtoidayhoc.s3.ap-southeast-1.amazonaws.com/phu/shopee/admin/product/1674962216_ZisnjwPbg8.jpg, https://labtoidayhoc.s3.ap-southeast-1.amazonaws.com/phu/shopee/admin/product/1674962216_fKadaXvJgz.jpg', 'https://labtoidayhoc.s3.ap-southeast-1.amazonaws.com/phu/shopee/admin/product/1674962216_W1GI4ZWhfB.mp4', '146.000', NULL, '2023-01-28 20:16:58'),
(3, 1, 11, 'Áo phao nam nữ đều mặc được 𝑩𝑬𝑰𝑱𝑰𝑨𝑳𝑬 Áo khoác nam hàn quốc ulzzang có mũ hàng cao cấp', 'https://labtoidayhoc.s3.ap-southeast-1.amazonaws.com/phu/shopee/admin/product/1674983288_B2GKIGnT52.jpg, https://labtoidayhoc.s3.ap-southeast-1.amazonaws.com/phu/shopee/admin/product/1674983288_f6FfoiyV6d.jfif, https://labtoidayhoc.s3.ap-southeast-1.amazonaws.com/phu/shopee/admin/product/1674983289_AFvoNwqfso.jpg, https://labtoidayhoc.s3.ap-southeast-1.amazonaws.com/phu/shopee/admin/product/1674983289_1v9Z1nIYOh.jfif', 'https://labtoidayhoc.s3.ap-southeast-1.amazonaws.com/phu/shopee/admin/product/1674982575_2NxyCpnPEj.mp4', '123', NULL, '2023-01-29 02:08:09'),
(4, 1, 10, '123123', 'https://labtoidayhoc.s3.ap-southeast-1.amazonaws.com/phu/shopee/admin/product/1674984750_IC5btFh1rM.jfif, https://labtoidayhoc.s3.ap-southeast-1.amazonaws.com/phu/shopee/admin/product/1674984753_cAscShN6iU.jfif', 'https://labtoidayhoc.s3.ap-southeast-1.amazonaws.com/phu/shopee/admin/product/1674984753_H44To4Xq8k.mp4', '123123', '2023-01-29 02:32:34', '2023-01-29 02:32:34'),
(5, 2, 10, 'Áo Vets', 'https://labtoidayhoc.s3.ap-southeast-1.amazonaws.com/phu/shopee/admin/product/1674984780_HZsVqCIpEV.jfif, https://labtoidayhoc.s3.ap-southeast-1.amazonaws.com/phu/shopee/admin/product/1674984782_kHqVpzn6X1.jfif, https://labtoidayhoc.s3.ap-southeast-1.amazonaws.com/phu/shopee/admin/product/1674984783_GbuiHuhh2G.jpg', 'https://labtoidayhoc.s3.ap-southeast-1.amazonaws.com/phu/shopee/admin/product/1674984783_Qy3b4bpF3f.mp4', '100.000', '2023-01-29 02:33:04', '2023-01-29 02:33:04');

-- --------------------------------------------------------

--
-- Table structure for table `product_info`
--

CREATE TABLE `product_info` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `describe` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `origin` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `expiry` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `inventory` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'Buyer', NULL, NULL),
(3, 'Shop', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_vietnamese_ci,
  `payload` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_role_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `shopee_mall` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id`, `user_role_id`, `name`, `avatar`, `shopee_mall`, `created_at`, `updated_at`) VALUES
(10, 13, 'Shop 1', 'https://labtoidayhoc.s3.ap-southeast-1.amazonaws.com/phu/shopee/admin/img/avatar_user.png', 0, '2023-01-27 10:57:15', '2023-01-27 10:57:15'),
(11, 19, 'Shop 2', 'https://labtoidayhoc.s3.ap-southeast-1.amazonaws.com/phu/shopee/admin/img/avatar_user.png', 0, '2023-01-27 10:57:21', '2023-01-27 10:57:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `birthday` date DEFAULT NULL,
  `male` varchar(10) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `device_token` varchar(255) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `avatar`, `birthday`, `male`, `remember_token`, `created_at`, `updated_at`, `device_token`) VALUES
(1, 'Bá Phú', 'tabaphu0@gmail.com', NULL, '123123', '0763853612', 'https://labtoidayhoc.s3.ap-southeast-1.amazonaws.com/phu/shopee/admin/1673191076_bf8aj16WUR.jpg', '1998-09-30', '1', NULL, '2023-01-08 08:17:57', '2023-01-08 08:17:57', NULL),
(44, '1', '1', NULL, '1', '1', 'https://labtoidayhoc.s3.ap-southeast-1.amazonaws.com/phu/shopee/admin/img/avatar_user.png', '2023-01-09', '0', NULL, '2023-01-08 21:57:52', '2023-01-08 21:57:52', NULL),
(61, 'Tạ Bá Phú', 'tabaphu1@gmail.com', NULL, '$2y$10$v2XY9hDQeFi1Kj4UslcFFu5zv.QPRKqFdV3dioiY./2W8Hs3G4qJK', '0763853613', 'https://labtoidayhoc.s3.ap-southeast-1.amazonaws.com/phu/shopee/admin/img/avatar_user.png', '2023-01-14', '0', NULL, '2023-01-13 21:13:08', '2023-01-26 16:29:11', 'e59wfvQDxh2JgxibjD9-MG:APA91bFy_gtPSXu5Olko526A9acz4s6nEpF8v2atp091LQIDebJ6nVT7EAB9Z8sV4IfMbROCfvb2cDWlwqG-a4j8VB_Oe-YON_maNtPql706Dtwkmkd5yxT024rlXm2phG07NVsVKyDk'),
(62, 'Tạ Bá Phú 1', 'tabaphu4@gmail.com', NULL, '$2y$10$yF8Gwyko4HO4.aXvDfsiQeTFwN5icf1nIqAss692DFk23Tok966IG', '0763853615', 'https://labtoidayhoc.s3.ap-southeast-1.amazonaws.com/phu/shopee/admin/img/avatar_user.png', '2023-01-14', '0', NULL, '2023-01-14 01:48:15', '2023-01-14 01:48:15', NULL),
(63, '1674462449_9XTQW2Bo2F', 'tabaphu123@gmail.com', NULL, '$2y$10$5X3ZXj1AIKuayU1fUtI8XeVmbLVvsdBAjBjMZyVsO8lUhRRLLcPkG', NULL, 'https://labtoidayhoc.s3.ap-southeast-1.amazonaws.com/phu/shopee/admin/img/avatar_user.png', NULL, '1', NULL, '2023-01-23 01:27:29', '2023-01-23 01:27:29', NULL),
(64, '1674462952_SlDArI5Qc4', 'tabaphu12@gmail.com', NULL, '$2y$10$vTWO1qgjcQHzphQZYtOVE.5a9cir0COut1L.HabOGJTKJdtjhoNYC', NULL, 'https://labtoidayhoc.s3.ap-southeast-1.amazonaws.com/phu/shopee/admin/img/avatar_user.png', NULL, '1', NULL, '2023-01-23 01:35:52', '2023-01-23 01:35:52', NULL),
(65, '1674463208_BAKaOwQ1GU', 'tabaphu123123@gmail.com', NULL, '$2y$10$zZi4Ai3EVWLPzKPlvj22/.dZkM37sm8e2t.JLLywM0yVYA3mUD0IO', NULL, 'https://labtoidayhoc.s3.ap-southeast-1.amazonaws.com/phu/shopee/admin/img/avatar_user.png', NULL, '1', NULL, '2023-01-23 01:40:08', '2023-01-23 01:40:08', NULL),
(66, '1674463310_sH6u8YwLoB', 'tabaphu9@gmail.com', NULL, '$2y$10$gGkJt2wkxyJr95o8a6krJuLQWBIHUY69LM4fQ1m3ZhvIFF6JuFp0S', NULL, 'https://labtoidayhoc.s3.ap-southeast-1.amazonaws.com/phu/shopee/admin/img/avatar_user.png', NULL, '1', NULL, '2023-01-23 01:41:50', '2023-01-23 01:41:50', NULL),
(67, '1231231', '231231231@gmail.com', NULL, '$2y$10$RUyOZ6EgUdnCw98G2A0el.Nf6QUBgcKZYQK3klD8RQkIpA.sbAbw2', '3123123123', 'https://labtoidayhoc.s3.ap-southeast-1.amazonaws.com/phu/shopee/admin/img/avatar_user.png', '2023-01-27', '0', NULL, '2023-01-27 08:33:42', '2023-01-27 08:33:42', NULL),
(68, 'Shop 1123123', 'taba123123@gmail.com', NULL, '$2y$10$JgfHiTDG2ANdSfHnwuX5LeGuzfWkQH2aDkc9Pe5A63Z5NM68bL0lC', '0763853602', 'https://labtoidayhoc.s3.ap-southeast-1.amazonaws.com/phu/shopee/admin/img/avatar_user.png', '2023-01-27', '0', NULL, '2023-01-27 08:35:26', '2023-01-27 08:35:26', NULL),
(69, '1674841565_Caow3izaqf', 'tabaphu123123123@gmail.com', NULL, '$2y$10$cyQm7lGzOxZlSyNW4Imeae9UXRxfDq27I35R59eQPSX.4oOcLb9NG', NULL, 'https://labtoidayhoc.s3.ap-southeast-1.amazonaws.com/phu/shopee/admin/img/avatar_user.png', NULL, '1', NULL, '2023-01-27 10:46:05', '2023-01-27 10:46:12', 'e59wfvQDxh2JgxibjD9-MG:APA91bFy_gtPSXu5Olko526A9acz4s6nEpF8v2atp091LQIDebJ6nVT7EAB9Z8sV4IfMbROCfvb2cDWlwqG-a4j8VB_Oe-YON_maNtPql706Dtwkmkd5yxT024rlXm2phG07NVsVKyDk');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `users_id`, `role_id`, `created_at`, `updated_at`) VALUES
(13, 61, 3, '2023-01-22 23:20:10', '2023-01-22 23:20:10'),
(19, 62, 3, '2023-01-26 21:23:57', '2023-01-26 21:23:57'),
(20, 66, 3, '2023-01-26 21:24:05', '2023-01-26 21:24:05'),
(22, 65, 3, '2023-01-26 21:24:27', '2023-01-26 21:24:27'),
(23, 64, 2, '2023-01-26 21:24:38', '2023-01-26 21:24:38'),
(24, 63, 2, '2023-01-26 21:27:01', '2023-01-26 21:27:01'),
(25, 1, 1, '2023-01-26 21:27:34', '2023-01-26 21:27:34'),
(26, 69, 2, '2023-01-27 10:46:05', '2023-01-27 10:46:05');

-- --------------------------------------------------------

--
-- Table structure for table `user_room`
--

CREATE TABLE `user_room` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `room_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bills_user_id_foreign` (`user_id`),
  ADD KEY `bills_shop_id_foreign` (`shop_id`);

--
-- Indexes for table `bill_info`
--
ALTER TABLE `bill_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bill_info_bill_id_foreign` (`bill_id`),
  ADD KEY `bill_info_product_id_foreign` (`product_id`);

--
-- Indexes for table `category_child`
--
ALTER TABLE `category_child`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_child_category_dad_id_foreign` (`category_dad_id`);

--
-- Indexes for table `category_dad`
--
ALTER TABLE `category_dad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_users_id_foreign` (`users_id`),
  ADD KEY `comment_product_id_foreign` (`product_id`);

--
-- Indexes for table `comment_like`
--
ALTER TABLE `comment_like`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_like_comment_id_foreign` (`comment_id`),
  ADD KEY `comment_like_users_id_foreign` (`users_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `interactive`
--
ALTER TABLE `interactive`
  ADD PRIMARY KEY (`id`),
  ADD KEY `interactive_users_id_foreign` (`users_id`),
  ADD KEY `interactive_messenger_id_foreign` (`messenger_id`);

--
-- Indexes for table `messenger`
--
ALTER TABLE `messenger`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messenger_user_id_foreign` (`user_id`),
  ADD KEY `messenger_room_id_foreign` (`room_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_category_child_id_foreign` (`category_child_id`),
  ADD KEY `product_shop_id_foreign` (`shop_id`);

--
-- Indexes for table `product_info`
--
ALTER TABLE `product_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_info_product_id_foreign` (`product_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shop_user_role_id_foreign` (`user_role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_role_users_id_foreign` (`users_id`),
  ADD KEY `user_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_room`
--
ALTER TABLE `user_room`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_room_user_id_foreign` (`user_id`),
  ADD KEY `user_room_room_id_foreign` (`room_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bill_info`
--
ALTER TABLE `bill_info`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category_child`
--
ALTER TABLE `category_child`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=283;

--
-- AUTO_INCREMENT for table `category_dad`
--
ALTER TABLE `category_dad`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comment_like`
--
ALTER TABLE `comment_like`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `interactive`
--
ALTER TABLE `interactive`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messenger`
--
ALTER TABLE `messenger`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_info`
--
ALTER TABLE `product_info`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user_room`
--
ALTER TABLE `user_room`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_shop_id_foreign` FOREIGN KEY (`shop_id`) REFERENCES `shop` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bills_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `bill_info`
--
ALTER TABLE `bill_info`
  ADD CONSTRAINT `bill_info_bill_id_foreign` FOREIGN KEY (`bill_id`) REFERENCES `bills` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bill_info_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `category_child`
--
ALTER TABLE `category_child`
  ADD CONSTRAINT `category_child_category_dad_id_foreign` FOREIGN KEY (`category_dad_id`) REFERENCES `category_dad` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comment_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comment_like`
--
ALTER TABLE `comment_like`
  ADD CONSTRAINT `comment_like_comment_id_foreign` FOREIGN KEY (`comment_id`) REFERENCES `comment` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comment_like_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `interactive`
--
ALTER TABLE `interactive`
  ADD CONSTRAINT `interactive_messenger_id_foreign` FOREIGN KEY (`messenger_id`) REFERENCES `messenger` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `interactive_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `messenger`
--
ALTER TABLE `messenger`
  ADD CONSTRAINT `messenger_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `room` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `messenger_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_category_child_id_foreign` FOREIGN KEY (`category_child_id`) REFERENCES `category_child` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_shop_id_foreign` FOREIGN KEY (`shop_id`) REFERENCES `shop` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_info`
--
ALTER TABLE `product_info`
  ADD CONSTRAINT `product_info_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `shop`
--
ALTER TABLE `shop`
  ADD CONSTRAINT `shop_user_role_id_foreign` FOREIGN KEY (`user_role_id`) REFERENCES `user_role` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_role`
--
ALTER TABLE `user_role`
  ADD CONSTRAINT `user_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_role_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_room`
--
ALTER TABLE `user_room`
  ADD CONSTRAINT `user_room_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `room` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_room_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
