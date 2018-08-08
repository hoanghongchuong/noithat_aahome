-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2018 at 12:27 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aaahome`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8_unicode_ci,
  `mota` longtext COLLATE utf8_unicode_ci,
  `link` text COLLATE utf8_unicode_ci,
  `content` longtext COLLATE utf8_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '1',
  `title` text COLLATE utf8_unicode_ci,
  `keyword` longtext COLLATE utf8_unicode_ci,
  `description` longtext COLLATE utf8_unicode_ci,
  `com` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `user_id`, `name`, `alias`, `photo`, `mota`, `link`, `content`, `status`, `title`, `keyword`, `description`, `com`, `created_at`, `updated_at`) VALUES
(1, 8, NULL, '', '1531707289_about-home.png', NULL, NULL, '<p>Được th&agrave;nh lập bởi nhiều chuy&ecirc;n gia, kiến tr&uacute;c sư 10 năm kinh nghiệm thực tế v&agrave; đội ngũ thi c&ocirc;ng vững v&agrave;ng, tay nghề cao, AAA HOME lu&ocirc;n c&oacute; kh&aacute;t vọng tạo n&ecirc;n những c&ocirc;ng tr&igrave;nh độc đ&aacute;o, đầy s&aacute;ng tạo đem đến sự h&agrave;i l&ograve;ng cho kh&aacute;ch h&agrave;ng. Với đam m&ecirc; m&atilde;nh liệt v&agrave; sự chuy&ecirc;n nghiệp trong bộ m&aacute;y c&ocirc;ng ty, AAA HOME hướng tới chinh phục những kh&aacute;ch h&agrave;ng kh&oacute; t&iacute;nh nhất, kh&ocirc;ng chỉ trong nước m&agrave; c&ograve;n vươn ra thế giới. Hơn ai hết, ch&uacute;ng t&ocirc;i hiểu r&otilde; cả ưu v&agrave; nhược điểm của từng loại vật liệu để c&oacute; thể sử dụng ch&uacute;ng một c&aacute;ch hiệu quả nhất nhằm tạo n&ecirc;n những c&ocirc;ng tr&igrave;nh ấn tượng, thẩm mỹ cao v&agrave; sự an t&acirc;m cho Q&Uacute;Y KH&Aacute;CH H&Agrave;NG</p>', 0, NULL, NULL, NULL, 'gioi-thieu', '2018-08-06 06:45:49', '2018-08-05 23:45:49'),
(6, 8, NULL, '', NULL, NULL, NULL, '<p>Được th&agrave;nh lập bởi nhiều chuy&ecirc;n gia, kiến tr&uacute;c sư 10 năm kinh nghiệm thực tế v&agrave; đội ngũ thi c&ocirc;ng vững v&agrave;ng, tay nghề cao, AAA HOME lu&ocirc;n c&oacute; kh&aacute;t vọng tạo n&ecirc;n những c&ocirc;ng tr&igrave;nh độc đ&aacute;o, đầy s&aacute;ng tạo đem đến sự h&agrave;i l&ograve;ng cho kh&aacute;ch h&agrave;ng. Với đam m&ecirc; m&atilde;nh liệt v&agrave; sự chuy&ecirc;n nghiệp trong bộ m&aacute;y c&ocirc;ng ty, AAA HOME hướng tới chinh phục những kh&aacute;ch h&agrave;ng kh&oacute; t&iacute;nh nhất, kh&ocirc;ng chỉ trong nước m&agrave; c&ograve;n vươn ra thế giới. Hơn ai hết, ch&uacute;ng t&ocirc;i hiểu r&otilde; cả ưu v&agrave; nhược điểm của từng loại vật liệu để c&oacute; thể sử dụng ch&uacute;ng một c&aacute;ch hiệu quả nhất nhằm tạo n&ecirc;n những c&ocirc;ng tr&igrave;nh ấn tượng, thẩm mỹ cao v&agrave; sự an t&acirc;m cho Q&Uacute;Y KH&Aacute;CH H&Agrave;NG</p>', 0, NULL, NULL, NULL, 'tamnhin', '2018-08-06 06:49:07', '2018-08-05 23:49:07'),
(7, 8, NULL, '', NULL, NULL, NULL, '<p>Được th&agrave;nh lập bởi nhiều chuy&ecirc;n gia, kiến tr&uacute;c sư 10 năm kinh nghiệm thực tế v&agrave; đội ngũ thi c&ocirc;ng vững v&agrave;ng, tay nghề cao, AAA HOME lu&ocirc;n c&oacute; kh&aacute;t vọng tạo n&ecirc;n những c&ocirc;ng tr&igrave;nh độc đ&aacute;o, đầy s&aacute;ng tạo đem đến sự h&agrave;i l&ograve;ng cho kh&aacute;ch h&agrave;ng. Với đam m&ecirc; m&atilde;nh liệt v&agrave; sự chuy&ecirc;n nghiệp trong bộ m&aacute;y c&ocirc;ng ty, AAA HOME hướng tới chinh phục những kh&aacute;ch h&agrave;ng kh&oacute; t&iacute;nh nhất, kh&ocirc;ng chỉ trong nước m&agrave; c&ograve;n vươn ra thế giới. Hơn ai hết, ch&uacute;ng t&ocirc;i hiểu r&otilde; cả ưu v&agrave; nhược điểm của từng loại vật liệu để c&oacute; thể sử dụng ch&uacute;ng một c&aacute;ch hiệu quả nhất nhằm tạo n&ecirc;n những c&ocirc;ng tr&igrave;nh ấn tượng, thẩm mỹ cao v&agrave; sự an t&acirc;m cho Q&Uacute;Y KH&Aacute;CH H&Agrave;NG</p>', 0, NULL, NULL, NULL, 'dinhuong', '2018-08-06 06:50:25', '2018-08-05 23:50:25'),
(2, 8, NULL, '', NULL, '<p>Từ ng&agrave;y đầu th&agrave;nh lập với những kh&oacute; khăn về nguồn vốn v&agrave; nh&acirc;n lực, giờ đ&acirc;y, GCO Group đ&atilde; x&acirc;y dựng cho m&igrave;nh một đội ngũ hơn 150 nh&acirc;n sự chuy&ecirc;n nghiệp, hệ thống văn ph&ograve;ng khang trang hơn, đầu tư trang thiết phục cho nhu cầu c&ocirc;ng việc, mở rộng c&aacute;c ph&ograve;ng ban theo từng lĩnh vực hoạt động, chuy&ecirc;n biệt về chức năng. Tr&ecirc;n mỗi lĩnh vực hoạt động GCO Group đều đạt được những th&agrave;nh tựu đ&aacute;ng nhớ. Hoạt động với phương ch&acirc;m &ldquo;GCO GROUP &ndash; Niềm tin cho doanh nghiệp&rdquo;, tất cả th&agrave;nh vi&ecirc;n GCO Group lu&ocirc;n nỗ lực ph&aacute;t triển năng lực bản th&acirc;n hướng đến cung cấp dịch vụ chuy&ecirc;n nghiệp hơn, hiệu quả hơn cho qu&yacute; kh&aacute;ch h&agrave;ng.</p>', NULL, NULL, 0, NULL, NULL, NULL, 'quy-trinh-seo', '2018-07-16 02:32:26', '2018-07-15 19:32:26'),
(3, 8, NULL, '', NULL, '<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.&nbsp;</p>', NULL, NULL, 0, NULL, NULL, NULL, 'slogan-content', '2018-07-17 02:54:25', '2018-07-16 19:54:25'),
(4, 8, NULL, '', NULL, NULL, NULL, '<p>Hiện nay c&oacute; rất nhiều nơi cung cấp dịch vụ n&agrave;y, ch&iacute;nh v&igrave; thế m&agrave; bạn cần phải t&igrave;m hiểu&nbsp;<br />thật kĩ trước khi quyết định, cần thống nhất về mặt chi ph&iacute;</p>', 0, NULL, NULL, NULL, 'taisao', '2018-08-07 04:36:01', '2018-08-06 21:36:01'),
(5, 8, NULL, '', NULL, NULL, NULL, 'Chúng tôi hiểu rõ cả ưu và nhược điểm của từng loại vật liệu để có thể sử dụng chúng một cách hiệu quả nhất nhằm tạo nên những công trình ấn tượng, mang tính thẩm mỹ cao và mang đến sự an tâm, hài lòng cho Quý khách hàng.', 0, NULL, NULL, NULL, 'tin-tuc', '2018-08-06 04:42:54', '2018-08-05 21:42:54'),
(8, 8, NULL, '', NULL, NULL, NULL, '<p>Ch&uacute;ng t&ocirc;i hiểu r&otilde; cả ưu v&agrave; nhược điểm của từng loại vật liệu để c&oacute; thể sử dụng ch&uacute;ng một c&aacute;ch hiệu quả nhất nhằm tạo n&ecirc;n những c&ocirc;ng tr&igrave;nh ấn tượng, mang t&iacute;nh thẩm mỹ cao v&agrave; mang đến sự an t&acirc;m, h&agrave;i l&ograve;ng cho Qu&yacute; kh&aacute;ch h&agrave;ng.</p>', 0, NULL, NULL, NULL, 'vatlieu', '2018-08-06 07:58:45', '2018-08-06 00:58:45'),
(9, 8, NULL, '', NULL, NULL, NULL, '<p>Hiện nay c&oacute; rất nhiều nơi cung cấp dịch vụ n&agrave;y, ch&iacute;nh v&igrave; thế m&agrave; bạn cần phải t&igrave;m hiểu&nbsp;<br />thật kĩ trước khi quyết định, cần thống nhất về mặt chi ph&iacute;</p>', 0, NULL, NULL, NULL, 'ykien', '2018-08-07 04:52:47', '2018-08-06 21:52:47');

-- --------------------------------------------------------

--
-- Table structure for table `bank_account`
--

CREATE TABLE `bank_account` (
  `id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `info` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bank_account`
--

INSERT INTO `bank_account` (`id`, `img`, `info`, `created_at`, `updated_at`) VALUES
(1, '1507946485_logobidv.png', '<p>Số t&agrave;i khoản:&nbsp;001234646870</p>\r\n<p>Chủ t&agrave;i khoản:&nbsp;<span class=\"text-uppercase\">NGUYỄN HẢI YẾN</span></p>\r\n<p>Ng&acirc;n h&agrave;ng:&nbsp;Ng&acirc;n h&agrave;ng TMCP Ngoại thương Việt Nam Chi nh&aacute;nh Đống Đa</p>', '2017-10-14 02:01:25', '2017-10-13 19:01:25'),
(3, '1507946490_logobidv.png', '<p>Số t&agrave;i khoản:&nbsp;001234646870</p>\r\n<p>Chủ t&agrave;i khoản:&nbsp;<span class=\"text-uppercase\">NGUYỄN Ho&agrave;ng&nbsp;Hải</span></p>\r\n<p>Ng&acirc;n h&agrave;ng:&nbsp;Ng&acirc;n h&agrave;ng TMCP Ngoại thương Việt Nam Chi nh&aacute;nh&nbsp;H&agrave; Nội</p>\r\n<p>&nbsp;</p>', '2017-10-14 02:01:30', '2017-10-13 19:01:30');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '1',
  `image_path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stt` int(11) NOT NULL DEFAULT '0',
  `com` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banner_content`
--

CREATE TABLE `banner_content` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `title` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `mota` text CHARACTER SET utf8,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner_content`
--

INSERT INTO `banner_content` (`id`, `image`, `link`, `position`, `title`, `mota`, `updated_at`, `created_at`) VALUES
(8, '1533529600_banner-1.jpg', NULL, 3, NULL, NULL, '2018-08-05 21:26:40', '2018-07-09 01:35:30'),
(9, '1533610867_banner-1.jpg', NULL, 4, NULL, NULL, '2018-08-06 20:01:07', '2018-07-11 06:55:58'),
(13, '1532916175_banner.jpg', NULL, 5, NULL, NULL, '2018-07-29 19:02:55', '2018-07-09 01:39:20'),
(14, '1533530781_banner-1.jpg', NULL, 8, NULL, NULL, '2018-08-05 21:46:21', '2018-07-09 01:56:17'),
(19, '1533529553_banner-1.jpg', NULL, 2, NULL, NULL, '2018-08-05 21:25:53', '2018-07-15 20:17:16'),
(20, '1533542111_banner-2.jpg', NULL, 9, NULL, NULL, '2018-08-06 00:55:11', '2018-07-30 19:17:36');

-- --------------------------------------------------------

--
-- Table structure for table `banner_position`
--

CREATE TABLE `banner_position` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner_position`
--

INSERT INTO `banner_position` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Trang chủ', '2017-09-20 08:29:24', '2017-09-20 01:29:24'),
(2, 'Tin tức', '2018-08-06 04:26:10', '2018-08-05 21:26:10'),
(3, 'Trang giới thiệu', '2017-11-08 02:03:36', '2017-11-07 19:03:36'),
(4, 'Trang dự án', '2018-07-09 01:38:06', '2018-07-08 18:38:06'),
(5, 'Trang liên hệ', '2018-07-09 01:38:30', '2018-07-08 18:38:30'),
(8, 'Trang chi tiết tin tức', '2018-08-06 04:45:13', '2018-08-05 21:45:13'),
(9, 'Trang vật liệu', '2018-08-06 07:53:19', '2018-08-06 00:53:19');

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` int(11) NOT NULL,
  `full_name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `province` varchar(250) DEFAULT NULL,
  `district` varchar(250) DEFAULT NULL,
  `note` text,
  `status` tinyint(2) DEFAULT '0',
  `total` int(11) DEFAULT NULL,
  `detail` text,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `card_code` varchar(250) DEFAULT NULL,
  `payment` int(2) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `full_name`, `email`, `phone`, `address`, `province`, `district`, `note`, `status`, `total`, `detail`, `created_at`, `updated_at`, `card_code`, `payment`) VALUES
(8, 'Hoàng Hồng Chương', 'admin@team.vn', '987654321', 'Hà Nội', NULL, NULL, 'dgdg', 0, 1200000, '[{\"product_name\":\"S\\u1ea3n ph\\u1ea9m 1\",\"product_numb\":1,\"product_price\":500000,\"product_img\":\"1521003014_1.jpg\",\"product_code\":null},{\"product_name\":\"S\\u1ea3n ph\\u1ea9m 2\",\"product_numb\":1,\"product_price\":700000,\"product_img\":\"1521003043_2.jpg\",\"product_code\":null}]', '2018-03-14 18:54:48', '2018-03-14 18:54:48', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `campaigns`
--

CREATE TABLE `campaigns` (
  `id` int(11) NOT NULL,
  `campaign_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `campaign_type` int(2) DEFAULT NULL,
  `campaign_value` int(10) DEFAULT NULL,
  `campaign_expired` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `del_flg` int(1) NOT NULL DEFAULT '0',
  `card_numb` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campaigns`
--

INSERT INTO `campaigns` (`id`, `campaign_name`, `campaign_type`, `campaign_value`, `campaign_expired`, `created_at`, `updated_at`, `del_flg`, `card_numb`) VALUES
(1, 'Chào mừng giáng sinh', 1, 100000, '2017-09-30', '2017-09-21 18:56:44', '2017-09-21 18:56:44', 0, 7),
(2, 'Chào thu', 2, 10, '2017-09-30', '2017-09-22 18:43:02', '2017-09-22 18:43:02', 0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `campaign_cards`
--

CREATE TABLE `campaign_cards` (
  `id` int(10) NOT NULL,
  `campaign_id` int(10) NOT NULL,
  `card_code` varchar(100) NOT NULL,
  `is_active` int(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `del_flg` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campaign_cards`
--

INSERT INTO `campaign_cards` (`id`, `campaign_id`, `card_code`, `is_active`, `created_at`, `updated_at`, `del_flg`) VALUES
(1, 1, 'hDXoOAI7BpxYJ', 0, '2017-09-21 18:55:29', '2017-09-21 18:55:29', 0),
(2, 1, 'FepHYPARhlTbe', 0, '2017-09-21 18:55:29', '2017-09-21 18:55:29', 0),
(3, 1, 'bpDe0nb31sZiN', 0, '2017-09-21 18:55:29', '2017-09-21 18:55:29', 0),
(4, 1, '0DK0VoB53JeJj', 0, '2017-09-21 18:55:29', '2017-09-21 18:55:29', 0),
(5, 1, 'hF3Ad1g7J411w', 0, '2017-09-21 18:55:29', '2017-09-21 18:55:29', 0),
(6, 1, '8PyZN6OTyAIwZ', 0, '2017-09-21 18:56:44', '2017-09-21 18:56:44', 0),
(7, 1, 'Zqy0atJII1nzS', 0, '2017-09-21 18:56:44', '2017-09-21 18:56:44', 0),
(8, 2, '3Qe06mci6qmMc', 0, '2017-09-22 18:43:02', '2017-09-22 18:43:02', 0),
(9, 2, 'vUrrWre9EN6iR', 0, '2017-09-22 18:43:02', '2017-09-22 18:43:02', 0),
(10, 2, 'IGzmLXBT9pDk5', 0, '2017-09-22 18:43:02', '2017-09-22 18:43:02', 0),
(11, 2, 'OXSiH6ooCzJj7', 0, '2017-09-22 18:43:02', '2017-09-22 18:43:02', 0);

-- --------------------------------------------------------

--
-- Table structure for table `chinhanh`
--

CREATE TABLE `chinhanh` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `website` varchar(250) DEFAULT NULL,
  `phone` varchar(250) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chinhanh`
--

INSERT INTO `chinhanh` (`id`, `name`, `website`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Văn phòng Hà Nội', NULL, NULL, 'Tầng 6, nhà C, số 22 Thành Công, Ba Đình', '2018-08-06 04:21:59', '2018-08-05 21:21:59'),
(2, 'Văn phòng Quảng Ninh', NULL, NULL, 'Ô 15-16, Lô B32 KĐT Cao Xanh - TP Hạ Long', '2018-08-06 04:22:19', '2018-08-05 21:22:19'),
(3, 'Xưởng nội thất', NULL, NULL, 'KCN Bình Phú, Canh Nậu, Thạch Thất, Hà Tây', '2018-08-06 04:22:33', '2018-08-05 21:22:33');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `province_id` int(10) DEFAULT NULL,
  `slogan_id` int(10) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `phone` varchar(11) CHARACTER SET latin1 DEFAULT NULL,
  `address` text,
  `content` text CHARACTER SET latin1,
  `website` varchar(250) DEFAULT NULL,
  `status` tinyint(2) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `province_id`, `slogan_id`, `name`, `email`, `phone`, `address`, `content`, `website`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'Hoàng Hồng Chương', 'admin@team.vn', '0987654321', NULL, NULL, NULL, 0, '2018-08-07 19:17:08', '2018-08-07 19:18:03');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `id` int(10) UNSIGNED NOT NULL,
  `tm` int(11) NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(11) NOT NULL,
  `district_name` varchar(250) DEFAULT NULL,
  `province_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `district_name`, `province_id`, `created_at`, `updated_at`) VALUES
(1, 'Ba Đình', 4, '2017-09-24 18:03:47', '2017-09-24 18:03:47'),
(2, 'Từ Liêm', 4, '2017-09-24 18:04:29', '2017-09-24 18:04:29'),
(3, 'Hoàn Kiếm', 4, '2017-09-24 18:04:40', '2017-09-24 18:04:40'),
(4, 'Cầu giấy', 4, '2017-09-25 00:14:58', '2017-09-25 00:14:58');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `photo` text,
  `position` varchar(250) DEFAULT NULL,
  `content` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `photo`, `position`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Mr Lee', '1533538517_about-3.jpg', 'Giám đốc nhân sự', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer condimentum&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer condimentum&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer condimentum&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer condimentumLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer condimentum&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer condimentum</p>', '2018-08-06 06:55:17', '2018-08-05 23:55:17'),
(2, 'Martin Jerry', '1533538528_about-3.jpg', 'Thiết kế', '<div class=\"member-text\">\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer condimentum&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer condimentum&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer condimentum&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer condimentumLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer condimentum&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer condimentum</p>\r\n</div>', '2018-08-06 06:55:28', '2018-08-05 23:55:28'),
(3, 'Danny Luis', '1533538536_about-3.jpg', 'Thiết kế', '<div class=\"member-text\">\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer condimentum&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer condimentum&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer condimentum&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer condimentumLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer condimentum&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n</div>', '2018-08-06 06:56:38', '2018-08-05 23:56:38');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `photo` text COLLATE utf8_unicode_ci,
  `codemap` longtext COLLATE utf8_unicode_ci,
  `desc` longtext COLLATE utf8_unicode_ci,
  `content` longtext COLLATE utf8_unicode_ci,
  `status` int(11) NOT NULL,
  `stt` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gioithieu`
--

CREATE TABLE `gioithieu` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `alias` varchar(250) DEFAULT NULL,
  `image` text,
  `mota` text,
  `content` text,
  `title` varchar(250) DEFAULT NULL,
  `keyword` varchar(250) DEFAULT NULL,
  `description` text,
  `status` int(2) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gioithieu`
--

INSERT INTO `gioithieu` (`id`, `name`, `alias`, `image`, `mota`, `content`, `title`, `keyword`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Về công ty', 've-cong-ty', '1509935372_home-1.png', '<h3 class=\"vk-about__title text-uppercase animation fadeIn animation-active\">C&Ocirc;NG TY TNHH SẢN XUẤT NHỰA CH&Acirc;U &Acirc;U</h3>\r\n<p class=\"animation fadeIn delay1 animation-active\">B&ecirc;n cạnh việc sản xuất, ch&uacute;ng t&ocirc;i c&ograve;n nhập khẩu v&agrave; ph&acirc;n phối c&aacute;c sản phẩm như: phụ kiện HDPE h&agrave;n nối đầu, phụ kiện HDPE h&agrave;n điện trở, c&aacute;c loại m&aacute;y h&agrave;n ống nhựa HDPE, m&aacute;y thử &aacute;p lực&hellip;</p>', '<p class=\"animation fadeIn animation-active\">B&ecirc;n cạnh việc sản xuất, ch&uacute;ng t&ocirc;i c&ograve;n nhập khẩu v&agrave; ph&acirc;n phối c&aacute;c sản phẩm như: phụ kiện HDPE h&agrave;n nối đầu, phụ kiện HDPE h&agrave;n điện trở, c&aacute;c loại m&aacute;y h&agrave;n ống nhựa HDPE, m&aacute;y thử &aacute;p lực&hellip;</p>\r\n<p class=\"animation fadeIn animation-active\">Tại C&ocirc;ng ty TNHH sản xuất nhựa Ch&acirc;u &Acirc;u ch&uacute;ng t&ocirc;i tin tưởng rằng chỉ c&oacute; nghi&ecirc;m ngặt tu&acirc;n theo quy tr&igrave;nh quản l&yacute; chất lượng để tạo ra những sản phẩm đạt chất lượng cao v&agrave; dịch vụ tốt, ch&uacute;ng t&ocirc;i mới chiếm được l&ograve;ng tin của kh&aacute;ch h&agrave;ng đồng thời x&aacute;c lập vị tr&iacute; của m&igrave;nh tr&ecirc;n thị trường, để người Việt c&oacute; thể tin d&ugrave;ng h&agrave;ng Việt</p>\r\n<div class=\"row\">\r\n<div class=\"col-lg-9\">\r\n<p class=\"animation fadeIn delay1 animation-active\"><strong>Lịch sử h&igrave;nh th&agrave;nh</strong></p>\r\n<p class=\"animation fadeIn delay1 animation-active\">C&ocirc;ng ty TNHH Thiết Bị Điện Nước H&agrave; Th&agrave;nh được ch&iacute;nh thức th&agrave;nh lập v&agrave; đi v&agrave;o hoạt động từ th&aacute;ng 3 năm 2009. Ng&agrave;nh nghề ch&iacute;nh của ch&uacute;ng t&ocirc;i l&agrave; sản xuất thiết bị điện nước mang thương hiệu HATHACO. Nh&agrave; m&aacute;y sản xuất phụ kiện ống nhựa HDPE đặt tại Th&agrave;nh phố Hải Dương. Với nhiều m&aacute;y &eacute;p phun, m&aacute;y &eacute;p gioăng cao su v&agrave; hơn 200 bộ khu&ocirc;n sản phẩm kh&aacute;c nhau, ch&uacute;ng t&ocirc;i đ&atilde; v&agrave; đang sản xuất cung cấp cho thị trường c&aacute;c loại phụ kiện HDPE vặn ren v&agrave; đai khởi thủy k&iacute;ch thước từ D20 đến D110 mang thương hiệu HATHACO đạt ti&ecirc;u chuẩn Dụng cụ bằng nhựa tiếp x&uacute;c trực tiếp thực phẩm của Bộ Y Tế: QCVN 12-1:2011/BYT v&agrave; tu&acirc;n theo Quy tr&igrave;nh quản l&yacute; chất lượng TCVN ISO 9001:2008.</p>\r\n<p class=\"animation fadeIn delay1 animation-active\">B&ecirc;n cạnh việc sản xuất, ch&uacute;ng t&ocirc;i c&ograve;n nhập khẩu v&agrave; ph&acirc;n phối c&aacute;c sản phẩm như: phụ kiện HDPE h&agrave;n nối đầu, phụ kiện HDPE h&agrave;n điện trở, c&aacute;c loại m&aacute;y h&agrave;n ống nhựa HDPE, m&aacute;y thử &aacute;p lực&hellip;</p>\r\n</div>\r\n</div>', NULL, NULL, NULL, 1, '2017-11-06 02:33:45', '2017-11-05 19:33:45'),
(2, 'Về nhà xưởng', 've-nha-xuong', NULL, NULL, '<p class=\"animation fadeIn animation-active\">B&ecirc;n cạnh việc sản xuất, ch&uacute;ng t&ocirc;i c&ograve;n nhập khẩu v&agrave; ph&acirc;n phối c&aacute;c sản phẩm như: phụ kiện HDPE h&agrave;n nối đầu, phụ kiện HDPE h&agrave;n điện trở, c&aacute;c loại m&aacute;y h&agrave;n ống nhựa HDPE, m&aacute;y thử &aacute;p lực&hellip;</p>\r\n<p class=\"animation fadeIn animation-active\">Tại C&ocirc;ng ty TNHH sản xuất nhựa Ch&acirc;u &Acirc;u ch&uacute;ng t&ocirc;i tin tưởng rằng chỉ c&oacute; nghi&ecirc;m ngặt tu&acirc;n theo quy tr&igrave;nh quản l&yacute; chất lượng để tạo ra những sản phẩm đạt chất lượng cao v&agrave; dịch vụ tốt, ch&uacute;ng t&ocirc;i mới chiếm được l&ograve;ng tin của kh&aacute;ch h&agrave;ng đồng thời x&aacute;c lập vị tr&iacute; của m&igrave;nh tr&ecirc;n thị trường, để người Việt c&oacute; thể tin d&ugrave;ng h&agrave;ng Việt</p>\r\n<div class=\"row\">\r\n<div class=\"col-lg-9\">\r\n<p class=\"animation fadeIn delay1 animation-active\"><strong>Lịch sử h&igrave;nh th&agrave;nh</strong></p>\r\n<p class=\"animation fadeIn delay1 animation-active\">C&ocirc;ng ty TNHH Thiết Bị Điện Nước H&agrave; Th&agrave;nh được ch&iacute;nh thức th&agrave;nh lập v&agrave; đi v&agrave;o hoạt động từ th&aacute;ng 3 năm 2009. Ng&agrave;nh nghề ch&iacute;nh của ch&uacute;ng t&ocirc;i l&agrave; sản xuất thiết bị điện nước mang thương hiệu HATHACO. Nh&agrave; m&aacute;y sản xuất phụ kiện ống nhựa HDPE đặt tại Th&agrave;nh phố Hải Dương. Với nhiều m&aacute;y &eacute;p phun, m&aacute;y &eacute;p gioăng cao su v&agrave; hơn 200 bộ khu&ocirc;n sản phẩm kh&aacute;c nhau, ch&uacute;ng t&ocirc;i đ&atilde; v&agrave; đang sản xuất cung cấp cho thị trường c&aacute;c loại phụ kiện HDPE vặn ren v&agrave; đai khởi thủy k&iacute;ch thước từ D20 đến D110 mang thương hiệu HATHACO đạt ti&ecirc;u chuẩn Dụng cụ bằng nhựa tiếp x&uacute;c trực tiếp thực phẩm của Bộ Y Tế: QCVN 12-1:2011/BYT v&agrave; tu&acirc;n theo Quy tr&igrave;nh quản l&yacute; chất lượng TCVN ISO 9001:2008.</p>\r\n<p class=\"animation fadeIn delay1 animation-active\">B&ecirc;n cạnh việc sản xuất, ch&uacute;ng t&ocirc;i c&ograve;n nhập khẩu v&agrave; ph&acirc;n phối c&aacute;c sản phẩm như: phụ kiện HDPE h&agrave;n nối đầu, phụ kiện HDPE h&agrave;n điện trở, c&aacute;c loại m&aacute;y h&agrave;n ống nhựa HDPE, m&aacute;y thử &aacute;p lực&hellip;</p>\r\n</div>\r\n</div>', NULL, NULL, NULL, 1, '2017-11-08 02:12:34', '2017-11-07 19:12:34'),
(3, 'Về chi nhánh', 've-chi-nhanh', NULL, NULL, '<p class=\"animation fadeIn animation-active\">B&ecirc;n cạnh việc sản xuất, ch&uacute;ng t&ocirc;i c&ograve;n nhập khẩu v&agrave; ph&acirc;n phối c&aacute;c sản phẩm như: phụ kiện HDPE h&agrave;n nối đầu, phụ kiện HDPE h&agrave;n điện trở, c&aacute;c loại m&aacute;y h&agrave;n ống nhựa HDPE, m&aacute;y thử &aacute;p lực&hellip;</p>\r\n<p class=\"animation fadeIn animation-active\">Tại C&ocirc;ng ty TNHH sản xuất nhựa Ch&acirc;u &Acirc;u ch&uacute;ng t&ocirc;i tin tưởng rằng chỉ c&oacute; nghi&ecirc;m ngặt tu&acirc;n theo quy tr&igrave;nh quản l&yacute; chất lượng để tạo ra những sản phẩm đạt chất lượng cao v&agrave; dịch vụ tốt, ch&uacute;ng t&ocirc;i mới chiếm được l&ograve;ng tin của kh&aacute;ch h&agrave;ng đồng thời x&aacute;c lập vị tr&iacute; của m&igrave;nh tr&ecirc;n thị trường, để người Việt c&oacute; thể tin d&ugrave;ng h&agrave;ng Việt</p>\r\n<div class=\"row\">\r\n<div class=\"col-lg-9\">\r\n<p class=\"animation fadeIn delay1 animation-active\"><strong>Lịch sử h&igrave;nh th&agrave;nh</strong></p>\r\n<p class=\"animation fadeIn delay1 animation-active\">C&ocirc;ng ty TNHH Thiết Bị Điện Nước H&agrave; Th&agrave;nh được ch&iacute;nh thức th&agrave;nh lập v&agrave; đi v&agrave;o hoạt động từ th&aacute;ng 3 năm 2009. Ng&agrave;nh nghề ch&iacute;nh của ch&uacute;ng t&ocirc;i l&agrave; sản xuất thiết bị điện nước mang thương hiệu HATHACO. Nh&agrave; m&aacute;y sản xuất phụ kiện ống nhựa HDPE đặt tại Th&agrave;nh phố Hải Dương. Với nhiều m&aacute;y &eacute;p phun, m&aacute;y &eacute;p gioăng cao su v&agrave; hơn 200 bộ khu&ocirc;n sản phẩm kh&aacute;c nhau, ch&uacute;ng t&ocirc;i đ&atilde; v&agrave; đang sản xuất cung cấp cho thị trường c&aacute;c loại phụ kiện HDPE vặn ren v&agrave; đai khởi thủy k&iacute;ch thước từ D20 đến D110 mang thương hiệu HATHACO đạt ti&ecirc;u chuẩn Dụng cụ bằng nhựa tiếp x&uacute;c trực tiếp thực phẩm của Bộ Y Tế: QCVN 12-1:2011/BYT v&agrave; tu&acirc;n theo Quy tr&igrave;nh quản l&yacute; chất lượng TCVN ISO 9001:2008.</p>\r\n<p class=\"animation fadeIn delay1 animation-active\">B&ecirc;n cạnh việc sản xuất, ch&uacute;ng t&ocirc;i c&ograve;n nhập khẩu v&agrave; ph&acirc;n phối c&aacute;c sản phẩm như: phụ kiện HDPE h&agrave;n nối đầu, phụ kiện HDPE h&agrave;n điện trở, c&aacute;c loại m&aacute;y h&agrave;n ống nhựa HDPE, m&aacute;y thử &aacute;p lực&hellip;</p>\r\n</div>\r\n</div>', 'Chi nhánh', 'chi nhánh', 'sf s', 1, '2017-11-08 02:12:39', '2017-11-07 19:12:39');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED DEFAULT '0',
  `news_id` int(10) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '1',
  `image_path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stt` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `product_id`, `news_id`, `name`, `alias`, `photo`, `status`, `image_path`, `alt`, `stt`, `created_at`, `updated_at`) VALUES
(8, 0, 43, NULL, NULL, '1532937692_cate4.jpg', 1, NULL, NULL, 0, '2018-07-30 08:01:32', '2018-07-30 08:01:32'),
(7, 0, 43, NULL, NULL, '1532937692_cate3.jpg', 1, NULL, NULL, 0, '2018-07-30 08:01:32', '2018-07-30 08:01:32'),
(6, 0, 43, NULL, NULL, '1532937692_cate2.jpg', 1, NULL, NULL, 0, '2018-07-30 08:01:32', '2018-07-30 08:01:32'),
(5, 0, 43, NULL, NULL, '1532937692_cate1.jpg', 1, NULL, NULL, 0, '2018-07-30 08:01:32', '2018-07-30 08:01:32'),
(9, 0, 45, NULL, NULL, '1533615564_p-detail-1.jpg', 1, NULL, NULL, 0, '2018-08-07 04:19:24', '2018-08-07 04:19:24'),
(10, 0, 45, NULL, NULL, '1533615564_p-detail-2.jpg', 1, NULL, NULL, 0, '2018-08-07 04:19:24', '2018-08-07 04:19:24'),
(11, 0, 45, NULL, NULL, '1533615564_p-detail-3.jpg', 1, NULL, NULL, 0, '2018-08-07 04:19:24', '2018-08-07 04:19:24'),
(12, 0, 45, NULL, NULL, '1533615564_p-detail-4.jpg', 1, NULL, NULL, 0, '2018-08-07 04:19:24', '2018-08-07 04:19:24'),
(13, 0, 45, NULL, NULL, '1533615564_p-detail-5.jpg', 1, NULL, NULL, 0, '2018-08-07 04:19:24', '2018-08-07 04:19:24'),
(14, 0, 45, NULL, NULL, '1533615564_p-detail-6.jpg', 1, NULL, NULL, 0, '2018-08-07 04:19:24', '2018-08-07 04:19:24'),
(15, 0, 39, NULL, NULL, '1533634432_p-detail-2.jpg', 1, NULL, NULL, 0, '2018-08-07 09:33:52', '2018-08-07 09:33:52'),
(16, 0, 39, NULL, NULL, '1533634432_p-detail-3.jpg', 1, NULL, NULL, 0, '2018-08-07 09:33:52', '2018-08-07 09:33:52'),
(17, 0, 39, NULL, NULL, '1533634432_p-detail-7.jpg', 1, NULL, NULL, 0, '2018-08-07 09:33:52', '2018-08-07 09:33:52'),
(18, 0, 39, NULL, NULL, '1533634432_p-detail-8.jpg', 1, NULL, NULL, 0, '2018-08-07 09:33:52', '2018-08-07 09:33:52');

-- --------------------------------------------------------

--
-- Table structure for table `lienket`
--

CREATE TABLE `lienket` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `link` text COLLATE utf8_unicode_ci,
  `photo` text COLLATE utf8_unicode_ci,
  `photo2` text COLLATE utf8_unicode_ci,
  `mota` longtext COLLATE utf8_unicode_ci,
  `content` longtext COLLATE utf8_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '1',
  `noibat` int(11) NOT NULL DEFAULT '0',
  `com` text COLLATE utf8_unicode_ci,
  `stt` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lienket`
--

INSERT INTO `lienket` (`id`, `user_id`, `name`, `link`, `photo`, `photo2`, `mota`, `content`, `status`, `noibat`, `com`, `stt`, `created_at`, `updated_at`) VALUES
(1, 8, 'Đồ da', NULL, '1533546096_p-1.jpg', '1533546096_material-detail.jpg', 'Được thành lập bởi nhiều chuyên gia, kiến trúc sư 10 năm kinh nghiệm thực tế và đội ngũ thi công vững vàng, tay nghề cao, AAA HOME luôn có khát vọng tạo nên những công trình độc đáo, đầy sáng tạo', NULL, 1, 0, 'vatlieu', 1, '2018-08-06 09:13:30', '2018-08-06 02:13:30'),
(2, 8, 'Vải nỉ', NULL, '1533547671_p-2.jpg', '1533547671_material-detail.jpg', 'Được thành lập bởi nhiều chuyên gia, kiến trúc sư 10 năm kinh nghiệm thực tế và đội ngũ thi công vững vàng, tay nghề cao, AAA HOME luôn có khát vọng tạo nên những công trình độc đáo, đầy sáng tạo', NULL, 1, 0, 'vatlieu', 2, '2018-08-06 02:27:51', '2018-08-06 02:27:51'),
(3, 8, 'Sành sứ', NULL, '1533547763_p-3.jpg', '1533547763_material-detail.jpg', 'Được thành lập bởi nhiều chuyên gia, kiến trúc sư 10 năm kinh nghiệm thực tế và đội ngũ thi công vững vàng, tay nghề cao, AAA HOME luôn có khát vọng tạo nên những công trình độc đáo, đầy sáng tạo', NULL, 1, 0, 'vatlieu', 3, '2018-08-06 02:29:23', '2018-08-06 02:29:23'),
(4, 8, 'Kim loại', NULL, '1533548477_p-4.jpg', '1533548477_material-detail.jpg', 'Được thành lập bởi nhiều chuyên gia, kiến trúc sư 10 năm kinh nghiệm thực tế và đội ngũ thi công vững vàng, tay nghề cao, AAA HOME luôn có khát vọng tạo nên những công trình độc đáo, đầy sáng tạo', NULL, 1, 0, 'vatlieu', 4, '2018-08-06 02:41:17', '2018-08-06 02:41:17'),
(5, 8, 'Đồ gỗ', NULL, '1533550001_p-6.jpg', '1533550001_material-detail.jpg', 'Được thành lập bởi nhiều chuyên gia, kiến trúc sư 10 năm kinh nghiệm thực tế và đội ngũ thi công vững vàng, tay nghề cao, AAA HOME luôn có khát vọng tạo nên những công trình độc đáo, đầy sáng tạo', NULL, 1, 0, 'vatlieu', 5, '2018-08-06 03:06:41', '2018-08-06 03:06:41'),
(6, 8, 'Nguồn nhân lực', NULL, '1533616618_icon-5.png', '', 'Nguồn nhân lực với chuyên môn vững vàng, năng động và tâm huyết với sự phát triển của công ty.', NULL, 1, 0, 'taisao', 1, '2018-08-06 21:36:58', '2018-08-06 21:36:58'),
(7, 8, 'Kinh nghiệm', NULL, '1533616643_icon-6.png', '', 'Công ty chúng tôi có nhiều năm kinh nghiệm trong lĩnh vực thiết kế và thi công công trình và nội thất.', NULL, 1, 0, 'taisao', 2, '2018-08-06 21:37:23', '2018-08-06 21:37:23'),
(8, 8, 'Công nghệ', NULL, '1533616672_icon-7.png', '', 'Chúng tôi luôn luốn cập nhật và sử dụng những công nghệ tiên tiến và mới nhất.', NULL, 1, 0, 'taisao', 3, '2018-08-06 21:37:52', '2018-08-06 21:37:52'),
(9, 8, 'Chuyên ngành', NULL, '1533616692_icon-8.png', '', 'Nguồn nhân lực với chuyên môn vững vàng, năng động và tâm huyết với sự phát triển của công ty.', NULL, 1, 0, 'taisao', 4, '2018-08-06 21:38:12', '2018-08-06 21:38:12');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` text COLLATE utf8_unicode_ci,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `lever` int(11) NOT NULL DEFAULT '0',
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `title` text COLLATE utf8_unicode_ci,
  `keyword` longtext COLLATE utf8_unicode_ci,
  `description` longtext COLLATE utf8_unicode_ci,
  `com` text COLLATE utf8_unicode_ci,
  `stt` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `alias`, `photo`, `status`, `lever`, `parent_id`, `title`, `keyword`, `description`, `com`, `stt`, `created_at`, `updated_at`) VALUES
(3, 'Trang chủ', NULL, NULL, 1, 0, 0, NULL, NULL, NULL, 'menu-top', 1, '2017-08-24 04:42:40', '2017-08-23 21:42:40'),
(2, 'Giới thiệu', 'gioi-thieu', NULL, 1, 0, 0, NULL, NULL, NULL, 'menu-top', 2, '2017-09-01 01:33:58', '2017-08-31 18:33:58'),
(12, 'Sản phẩm', 'http://localhost/eu/san-pham', NULL, 1, 0, 0, NULL, NULL, NULL, 'menu-top', 3, '2017-11-08 02:41:38', '2017-11-07 19:41:38'),
(13, 'Tin tức', 'http://localhost/eu/tin-tuc', NULL, 1, 0, 0, NULL, NULL, NULL, 'menu-top', 6, '2017-11-08 03:44:27', '2017-11-07 20:44:27'),
(18, 'Bảng giá', 'http://localhost/eu/bang-gia', NULL, 1, 0, 0, NULL, NULL, NULL, 'menu-top', 4, '2017-11-08 01:54:33', '2017-11-07 18:54:33'),
(19, 'Chứng chỉ kĩ thuật', 'http://localhost/eu/chung-chi-ki-thuat', NULL, 1, 0, 0, NULL, NULL, NULL, 'menu-top', 5, '2017-11-08 01:13:44', '2017-11-07 18:13:44'),
(20, 'Về chi nhánh', 'http://localhost/eu/gioi-thieu/ve-chi-nhanh', NULL, 1, 0, 2, NULL, NULL, NULL, 'menu-top', 7, '2017-11-08 01:37:27', '2017-11-07 18:37:27'),
(21, 'Về nhà xưởng', 'http://localhost/eu/gioi-thieu/ve-nha-xuong', NULL, 1, 0, 2, NULL, NULL, NULL, 'menu-top', 8, '2017-11-07 18:15:34', '2017-11-07 18:15:34'),
(23, 'Hàng vặn ren', 'http://localhost/eu/san-pham/hang-van-ren', NULL, 1, 0, 12, NULL, NULL, NULL, 'menu-top', 9, '2017-11-07 18:43:17', '2017-11-07 18:43:17'),
(24, 'Đai khởi thủy', 'http://localhost/eu/san-pham/dai-khoi-thuy', NULL, 1, 0, 12, NULL, NULL, NULL, 'menu-top', 10, '2017-11-07 18:43:39', '2017-11-07 18:43:39'),
(25, 'Van', 'http://localhost/eu/san-pham/van', NULL, 1, 0, 12, NULL, NULL, NULL, 'menu-top', 11, '2017-11-07 18:43:54', '2017-11-07 18:43:54'),
(26, 'Phụ kiện HDPE hàn đối đầu', 'http://localhost/eu/san-pham/phu-kien-hdpe-han-doi-dau', NULL, 1, 0, 12, NULL, NULL, NULL, 'menu-top', 12, '2017-11-07 18:44:22', '2017-11-07 18:44:22'),
(27, 'Phụ kiện HDPE hàn điện trở', 'https://developer6.gco.vn/euplastic/san-pham/phu-kien-hdpe-han-dien-tro', NULL, 1, 0, 12, NULL, NULL, NULL, 'menu-top', 13, '2017-11-07 18:45:09', '2017-11-07 18:45:09'),
(28, 'Phụ kiện HDPE hàn lồng', 'http://localhost/eu/san-pham/phu-kien-hdpe-han-long', NULL, 1, 0, 12, NULL, NULL, NULL, 'menu-top', 14, '2017-11-07 18:45:43', '2017-11-07 18:45:43'),
(29, 'Bảng giá tại Hà Nội', 'http://localhost/eu/bang-gia/bang-gia-tai-ha-noi.html', NULL, 1, 0, 18, NULL, NULL, NULL, 'menu-top', 15, '2017-11-07 18:46:20', '2017-11-07 18:46:20'),
(30, 'Bảng giá tại TP.Hồ Chí Minh', 'http://localhost/eu/bang-gia/bang-gia-tai-tpho-chi-minh.html', NULL, 1, 0, 18, NULL, NULL, NULL, 'menu-top', 16, '2017-11-07 18:46:40', '2017-11-07 18:46:40'),
(31, 'Về công ty', 'http://localhost/eu/gioi-thieu/ve-cong-ty', NULL, 1, 0, 2, NULL, NULL, NULL, 'menu-top', 17, '2017-11-07 19:09:40', '2017-11-07 19:09:40');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_06_05_042524_create_products_table', 1),
('2017_06_05_045215_create_images_table', 1),
('2017_06_07_033057_create_news_categories_table', 1),
('2017_06_07_033135_create_news_table', 1),
('2017_06_07_033425_create_setting_table', 1),
('2017_06_07_033619_create_pages_table', 1),
('2017_06_07_033944_create_contact_table', 1),
('2017_06_07_034012_create_footer_table', 1),
('2017_06_07_034035_create_slider_table', 1),
('2017_06_07_034117_create_useronline_table', 1),
('2017_06_07_034335_create_order_table', 1),
('2017_06_07_034407_create_order_detail_table', 1),
('2017_06_07_034448_create_newsletter_table', 1),
('2017_06_07_034655_create_order_status_table', 1),
('2017_06_07_064339_create_counter_table', 1),
('2017_06_07_070934_create_partner_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `cate_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` text COLLATE utf8_unicode_ci,
  `icon` text COLLATE utf8_unicode_ci,
  `background` text COLLATE utf8_unicode_ci,
  `mota` longtext COLLATE utf8_unicode_ci,
  `content` longtext COLLATE utf8_unicode_ci,
  `status` int(11) NOT NULL,
  `noibat` int(11) DEFAULT '0',
  `home` int(11) DEFAULT NULL,
  `title` text COLLATE utf8_unicode_ci,
  `keyword` longtext COLLATE utf8_unicode_ci,
  `description` longtext COLLATE utf8_unicode_ci,
  `com` text COLLATE utf8_unicode_ci,
  `stt` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `cate_id`, `user_id`, `name`, `alias`, `photo`, `icon`, `background`, `mota`, `content`, `status`, `noibat`, `home`, `title`, `keyword`, `description`, `com`, `stt`, `created_at`, `updated_at`) VALUES
(37, 0, 8, 'Dự án 10', 'du-an-10', '1531964106_1531470341_news-3.png', NULL, '1531964160_banner-du-an.png', 'Theo nguồn tin từ Cnet, Apple đang sản xuất những thiết bị VR và AR vô cùng ấn tượng với màn hình độ phân giải 8K (7680 x 4320) mỗi mắt. Theo như Cnet thì đây là thông tin đáng tin cậy từ nội bộ Apple.', '<p>Theo nguồn tin từ Cnet, Apple đang sản xuất những thiết bị&nbsp;VR v&agrave; AR v&ocirc; c&ugrave;ng ấn tượng với m&agrave;n h&igrave;nh độ ph&acirc;n giải 8K (7680 x 4320) mỗi mắt. Theo như Cnet th&igrave; đ&acirc;y l&agrave; th&ocirc;ng tin đ&aacute;ng tin cậy từ nội bộ Apple.</p>\r\n<p>Hiện nay k&iacute;nh thực tế ảo độ ph&acirc;n giải cao nhất thuộc về HTC l&agrave; HTC Vive Pro với mỗi mắt chỉ c&oacute;&nbsp;độ ph&acirc;n giải 4K 2880 x 1600 đ&atilde; cho trải nghiệm rất tốt. Giờ đ&acirc;y với độ ph&acirc;n giải 8K c&aacute;c h&igrave;nh ảnh sẽ c&ograve;n trung thực v&agrave; mịn m&agrave;ng hơn nữa.</p>\r\n<p><img title=\"Chỉ c&oacute; thể l&agrave; Apple mới c&oacute; k&iacute;nh thực tế ảo 8K si&ecirc;u n&eacute;t\" src=\"http://cache.media.techz.vn/upload/2018/04/28/image-1524908498-applevrheadset.jpg\" alt=\"Chỉ c&oacute; thể l&agrave; Apple mới c&oacute; k&iacute;nh thực tế ảo 8K si&ecirc;u n&eacute;t\" /></p>\r\n<p>Kh&ocirc;ng giống như HTC Vivo Pro&nbsp;v&agrave; Oculus Rift, tai nghe được đồn đại của Apple sẽ kh&ocirc;ng kh&ocirc;ng cần kết nối với PC.&nbsp;Hơn nữa, Apple sẽ l&agrave;m cho k&iacute;nh thực tế ảo của hộ một m&agrave;n h&igrave;nh ri&ecirc;ng kh&ocirc;ng cần một điện thoại th&ocirc;ng minh để sử dụng, như Google Daydream View&nbsp;v&agrave; Samsung Gear VR.</p>\r\n<p>Cũng theo nguồn tin từ Apple c&aacute;c thiết bị thực tế ảo n&agrave;y sẽ c&oacute; chip sử l&iacute; ri&ecirc;ng do Apple tự sản xuất. C&aacute;c chip n&agrave;y cũng nằm trong chiến lược tự sản xuất chip cho m&aacute;y MAC của Apple trong giai đoạn từ giờ tới năm 2020. Thậm ch&iacute; Apple c&oacute; thể sẽ trang bị chip tiến tr&igrave;nh 5 nm hiện đại nhất hiện nay (iPhone X hiện vẫn chỉ sử dụng chip A11 Bionic tiến tr&igrave;nh 10 nm) cho c&aacute;c thiết bị AR v&agrave; VR để đủ sức xử l&iacute; h&igrave;nh ảnh v&agrave; kết nối kh&ocirc;ng d&acirc;y.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><img title=\"Chỉ c&oacute; thể l&agrave; Apple mới c&oacute; k&iacute;nh thực tế ảo 8K si&ecirc;u n&eacute;t\" src=\"http://cache.media.techz.vn/upload/2018/04/28/image-1524908503-apple_may_finally_be_making_ar_headset_according_their_new_patent.1280x600%20(1).jpg\" alt=\"Chỉ c&oacute; thể l&agrave; Apple mới c&oacute; k&iacute;nh thực tế ảo 8K si&ecirc;u n&eacute;t\" /></p>', 1, 0, 0, NULL, NULL, NULL, 'du-an-marketing', 4, '2018-07-19 01:36:00', '2018-07-18 18:36:00'),
(38, 21, 8, 'Kiến trúc đẹp 1', 'kien-truc-dep-1', '1533540396_p-1.jpg', NULL, '', 'Bằng việc sử dụng hiệu quả các loại vật liệu và kinh nghiệm của mình, đội ngũ KTS của AAA Home đã mang đến vẻ đẹp hoàn mỹ cho các công trình mà vẫn tối ưu hóa, phù hợp với tiềm lực kinh tế cũng như công năng sử dụng của từng gia đình.', NULL, 1, 1, 0, NULL, NULL, NULL, 'du-an', 1, '2018-08-07 08:10:58', '2018-08-07 01:10:58'),
(39, 20, 8, 'Kiến trúc đẹp 2', 'kien-truc-dep-2', '1533612016_p-2.jpg', '1533634394_p-detail-1.jpg', '', NULL, '<div class=\"row justify-content-center\">\r\n<div class=\"col-lg-10\">\r\n<h1 class=\"vk-project-detail__title\">Biệt thự Mr.Huy</h1>\r\n<div class=\"vk-project-detail__des\">\r\n<p><strong>Địa chỉ:</strong>&nbsp;Hưng Y&ecirc;n</p>\r\n<p><strong>Ng&agrave;y ho&agrave;n th&agrave;nh:</strong>&nbsp;2018</p>\r\n<p><strong>M&ocirc; tả</strong></p>\r\n<p>Diện t&iacute;ch: 206 m2</p>\r\n<p>Chi ph&iacute; dự t&iacute;nh: 1,15 tỉ</p>\r\n<p>Bằng việc sử dụng hiệu quả c&aacute;c loại vật liệu v&agrave; kinh nghiệm của m&igrave;nh, đội ngũ KTS của AAA Home đ&atilde; mang đến vẻ đẹp ho&agrave;n mỹ cho c&aacute;c c&ocirc;ng tr&igrave;nh m&agrave; vẫn tối ưu h&oacute;a, ph&ugrave; hợp với tiềm lực kinh tế cũng như c&ocirc;ng năng sử dụng của từng gia đ&igrave;nh.</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"pt-5 row vk-project__list\">&nbsp;</div>\r\n<p>&nbsp;</p>', 1, 1, 0, NULL, NULL, NULL, 'du-an', 24, '2018-08-07 09:33:52', '2018-08-07 02:33:52'),
(46, 3, 8, 'Kiến trúc biệt thự 1', 'kien-truc-biet-thu-1', '1533002734_kt1.jpg', NULL, '', 'Xã hội ngày càng phát triền theo nhu cầu của con người ngày càng nâng lên. Đặc biệt với các chị em phụ nữ, nhu cầu làm đẹp càng trở nên thiết yếu hơn bao giờ', NULL, 1, 0, 0, NULL, NULL, NULL, 'kien-truc', 1, '2018-07-30 19:05:34', '2018-07-30 19:05:34'),
(40, 20, 8, 'Kiến trúc đẹp 3', 'kien-truc-dep-3', '1533612033_p-3.jpg', NULL, '', NULL, NULL, 1, 1, 0, NULL, NULL, NULL, 'du-an', 3, '2018-08-07 07:33:36', '2018-08-07 00:33:36'),
(41, 22, 8, 'Kiến trúc đẹp 4', 'kien-truc-dep-4', '1533612047_p-4.jpg', NULL, '', NULL, NULL, 1, 1, 0, NULL, NULL, NULL, 'du-an', 4, '2018-08-07 08:11:20', '2018-08-07 01:11:20'),
(42, 21, 8, 'Kiến trúc đẹp 5', 'kien-truc-dep-5', '1533612059_p-5.jpg', NULL, '', NULL, NULL, 1, 1, 0, NULL, NULL, NULL, 'du-an', 5, '2018-08-07 08:09:21', '2018-08-07 01:09:21'),
(43, 19, 8, 'Nội thất đẹp 1', 'noi-that-dep-1', '1533612102_p-6.jpg', NULL, '', NULL, NULL, 1, 1, 0, NULL, NULL, NULL, 'du-an', 6, '2018-08-07 08:26:43', '2018-08-07 01:26:43'),
(44, 2, 8, 'Nội thất đẹp 2', 'noi-that-dep-2', '1533613844_p-15.jpg', NULL, '', NULL, NULL, 1, 0, 0, NULL, NULL, NULL, 'du-an', 7, '2018-08-07 03:50:44', '2018-08-06 20:50:44'),
(45, 24, 8, 'Nội thất đẹp 3', 'noi-that-dep-3', '1533614506_p-18.jpg', '1533615425_p-detail-1.jpg', '', NULL, '<p>Nội dung dự &aacute;n</p>', 1, 1, 0, NULL, NULL, NULL, 'du-an', 8, '2018-08-08 04:37:43', '2018-08-07 21:37:43'),
(47, 3, 8, 'Kiến trúc biệt thự 2', 'kien-truc-biet-thu-2', '1533002758_kt2.jpg', NULL, '', 'Xã hội ngày càng phát triền theo nhu cầu của con người ngày càng nâng lên. Đặc biệt với các chị em phụ nữ, nhu cầu làm đẹp càng trở nên thiết yếu hơn bao giờ', '<p>Nhật Bản kh&ocirc;ng chỉ được biết đến l&agrave; một đất nước ph&aacute;t triển về c&ocirc;ng nghệ m&agrave; kiến tr&uacute;c đặc sắc của Nhật Bản cũng ch&iacute;nh l&agrave; một yếu tố nổi bật. Nhắc đến kiến tr&uacute;c Nhật, người ta thường nghĩ đến ngay những căn nh&agrave; gỗ mộc mạc, đậm chất phong c&aacute;ch truyền thống nhưng vẫn ẩn chứa trong đ&oacute; n&eacute;t hiện đại vốn c&oacute;. Chắc hẳn bất k&igrave; ai khi nh&igrave;n thấy những căn nh&agrave; Nhật Bản đều phải thốt l&ecirc;n những lời th&aacute;n phục. Mỗi căn nh&agrave; sở hữu một phong c&aacute;ch, n&eacute;t đẹp ri&ecirc;ng, qua đ&oacute; gi&uacute;p ta phần n&agrave;o thấy được sự s&aacute;ng tạo trong thiết kế của c&aacute;c chuy&ecirc;n gia Nhật Bản.</p>\r\n<p>Nhật Bản kh&ocirc;ng chỉ được biết đến l&agrave; một đất nước ph&aacute;t triển về c&ocirc;ng nghệ m&agrave; kiến tr&uacute;c đặc sắc của Nhật Bản cũng ch&iacute;nh l&agrave; một yếu tố nổi bật. Nhắc đến kiến tr&uacute;c Nhật, người ta thường nghĩ đến ngay những căn nh&agrave; gỗ mộc mạc, đậm chất phong c&aacute;ch truyền thống nhưng vẫn ẩn chứa trong đ&oacute; n&eacute;t hiện đại vốn c&oacute;. Chắc hẳn bất k&igrave; ai khi nh&igrave;n thấy những căn nh&agrave; Nhật Bản đều phải thốt l&ecirc;n những lời th&aacute;n phục. Mỗi căn nh&agrave; sở hữu một phong c&aacute;ch, n&eacute;t đẹp ri&ecirc;ng, qua đ&oacute; gi&uacute;p ta phần n&agrave;o thấy được sự s&aacute;ng tạo trong thiết kế của c&aacute;c chuy&ecirc;n gia Nhật Bản.</p>', 1, 0, 0, NULL, NULL, NULL, 'kien-truc', 2, '2018-07-31 02:11:23', '2018-07-30 19:11:23'),
(48, 3, 8, 'Kiến trúc biệt thự 3', 'kien-truc-biet-thu-3', '1533002771_kt3.jpg', NULL, '', 'Xã hội ngày càng phát triền theo nhu cầu của con người ngày càng nâng lên. Đặc biệt với các chị em phụ nữ, nhu cầu làm đẹp càng trở nên thiết yếu hơn bao giờ', NULL, 1, 0, 0, NULL, NULL, NULL, 'kien-truc', 3, '2018-07-30 19:06:11', '2018-07-30 19:06:11'),
(49, 7, 8, 'Nội thất đẹp 1', 'noi-that-dep-1', '1533003739_kt3.jpg', NULL, '', NULL, NULL, 1, 0, 0, NULL, NULL, NULL, 'noi-that', 1, '2018-07-31 02:22:25', '2018-07-30 19:22:25'),
(50, 7, 8, 'Căn hộ cao cấp 1', 'can-ho-cao-cap-1', '1533003808_kt8.jpg', NULL, '', 'Xã hội ngày càng phát triền theo nhu cầu của con người ngày càng nâng lên. Đặc biệt với các chị em phụ nữ, nhu cầu làm đẹp càng trở nên thiết yếu hơn bao giờ', NULL, 1, 0, 0, NULL, NULL, NULL, 'noi-that', 2, '2018-07-31 02:23:28', '2018-07-30 19:23:28'),
(51, 8, 8, 'Nội thất văn phòng 1', 'noi-that-van-phong-1', '1533003832_kt6.jpg', NULL, '', 'Xã hội ngày càng phát triền theo nhu cầu của con người ngày càng nâng lên. Đặc biệt với các chị em phụ nữ, nhu cầu làm đẹp càng trở nên thiết yếu hơn bao giờ', '<p>X&atilde; hội ng&agrave;y c&agrave;ng ph&aacute;t triền theo nhu cầu của con người ng&agrave;y c&agrave;ng n&acirc;ng l&ecirc;n. Đặc biệt với c&aacute;c chị em phụ nữ, nhu cầu l&agrave;m đẹp c&agrave;ng trở n&ecirc;n thiết yếu hơn bao giờ&nbsp;X&atilde; hội ng&agrave;y c&agrave;ng ph&aacute;t triền theo nhu cầu của con người ng&agrave;y c&agrave;ng n&acirc;ng l&ecirc;n. Đặc biệt với c&aacute;c chị em phụ nữ, nhu cầu l&agrave;m đẹp c&agrave;ng trở n&ecirc;n thiết yếu hơn bao giờ&nbsp;&nbsp;X&atilde; hội ng&agrave;y c&agrave;ng ph&aacute;t triền theo nhu cầu của con người ng&agrave;y c&agrave;ng n&acirc;ng l&ecirc;n. Đặc biệt với c&aacute;c chị em phụ nữ, nhu cầu l&agrave;m đẹp c&agrave;ng trở n&ecirc;n thiết yếu hơn bao giờ&nbsp;</p>', 1, 0, 0, NULL, NULL, NULL, 'noi-that', 3, '2018-07-30 19:23:52', '2018-07-30 19:23:52'),
(52, 13, 8, 'Biệt thự nội thất 2', 'biet-thu-noi-that-2', '1533027583_kt6.jpg', NULL, '', NULL, NULL, 1, 0, 0, NULL, NULL, NULL, 'noi-that', 4, '2018-07-31 01:59:43', '2018-07-31 01:59:43'),
(53, 0, 8, 'Tin tức 1', 'tin-tuc-1', '1533529843_blog-1.jpg', NULL, '', 'Dưới đây là một số gợi ý giúp bạn thiết kế nội thất giúp ngôi nhà của mình trông sáng sủa, rộng rãi và thoáng mát hơn.', NULL, 1, 0, 0, NULL, NULL, NULL, 'tin-tuc', 1, '2018-08-06 04:34:47', '2018-08-05 21:34:47'),
(54, 0, 8, 'Tin tức 2', 'tin-tuc-2', '1533530223_blog-3.jpg', NULL, '', 'Dưới đây là một số gợi ý giúp bạn thiết kế nội thất giúp ngôi nhà của mình trông sáng sủa, rộng rãi và thoáng mát hơn.', NULL, 1, 0, 0, NULL, NULL, NULL, 'tin-tuc', 2, '2018-08-05 21:37:03', '2018-08-05 21:37:03'),
(55, 0, 8, 'tin tức 3', 'tin-tuc-3', '1533530235_blog-2.jpg', NULL, '', 'Dưới đây là một số gợi ý giúp bạn thiết kế nội thất giúp ngôi nhà của mình trông sáng sủa, rộng rãi và thoáng mát hơn.', NULL, 1, 0, 0, NULL, NULL, NULL, 'tin-tuc', 3, '2018-08-05 21:37:15', '2018-08-05 21:37:15'),
(56, 0, 8, 'Tin tức 4', 'tin-tuc-4', '1533530264_blog-4.jpg', NULL, '', 'Dưới đây là một số gợi ý giúp bạn thiết kế nội thất giúp ngôi nhà của mình trông sáng sủa, rộng rãi và thoáng mát hơn.', '<p>Dưới đ&acirc;y l&agrave; một số gợi &yacute; gi&uacute;p bạn thiết kế nội thất gi&uacute;p ng&ocirc;i nh&agrave; của m&igrave;nh tr&ocirc;ng s&aacute;ng sủa, rộng r&atilde;i v&agrave; tho&aacute;ng m&aacute;t hơn. Sử dụng c&aacute;c chi tiết gỗ m&agrave;u s&aacute;ng l&agrave; một trong những c&aacute;ch thiết kế nội thất gi&uacute;p căn ph&ograve;ng tr&ocirc;ng s&aacute;ng sủa v&agrave; kh&ocirc;ng gian sinh hoạt tr&ocirc;ng rộng r&atilde;i hơn.</p>\r\n<p>Sự kết hợp giữa những đồ nội thất m&agrave;u tươi s&aacute;ng như trắng, đỏ, cam...l&agrave; c&aacute;ch l&agrave;m kh&ocirc;ng gian s&aacute;ng sủa.</p>\r\n<p>Những bức tranh d&aacute;n tường hoặc r&egrave;m cửa chủ để biển xanh cũng g&oacute;p phần gi&uacute;p căn ph&ograve;ng tươi mới v&agrave; rộng hơn.</p>\r\n<p>C&acirc;y xanh lu&ocirc;n l&agrave;m cho ng&ocirc;i nh&agrave; c&oacute; th&ecirc;m kh&iacute; sắc tươi tắn hơn. Nội thất m&agrave;u trắng lu&ocirc;n l&agrave; c&aacute;ch hiệu quả nhất gi&uacute;p căn ph&ograve;ng rộng r&atilde;i v&agrave; tươi s&aacute;ng.&nbsp;<br />Cửa sổ bằng k&iacute;nh lớn cũng khiến ng&ocirc;i nh&agrave; tr&ocirc;ng rộng bởi hiệu ứng chiều s&acirc;u Trần nh&agrave; cao cũng tạo cảm gi&aacute;c ng&ocirc;i nh&agrave; s&aacute;ng sủa, rộng lớn.<br />Sử dụng những đồ nội thất m&agrave;u pastel dịu nhẹ sẽ gi&uacute;p kh&ocirc;ng gian tươi tắn, tho&aacute;ng m&aacute;t.<br />Sử dụng những m&oacute;n đồ nhỏ gi&uacute;p kh&ocirc;ng gian sinh hoạt thoải m&aacute;i v&agrave; rộng r&atilde;i hơn.<br />Sơn tường với c&aacute;c m&agrave;u dịu nhẹ cũng l&agrave; một c&aacute;ch hiệu quả gi&uacute;p căn ph&ograve;ng tươi mới v&agrave; rộng lớn hơn.</p>\r\n<p><img src=\"http://tpl.gco.vn/aaahome/images/blog-detail-1.jpg\" alt=\"\" /></p>\r\n<p>Hiện tại, mọi người thường do dự trong việc kết hợp c&aacute;c phong c&aacute;ch nội thất kh&aacute;c nhau, đặc biệt l&agrave; khi họ mới bước ch&acirc;n v&agrave;o thế giới thiết kế nội thất.</p>\r\n<p>Mọi người thường lo lắng rằng, khi kết hợp nhiều phong c&aacute;ch với nhau nếu kh&ocirc;ng c&oacute; một kế hoạch tỉ mỉ th&igrave; sẽ k&eacute;o theo l&agrave; sản phẩm họ thiết kế ra trong như một mớ hỗn độn v&agrave; cẩu thả.</p>\r\n<p>Nếu bạn thấy lo lắng, xin h&atilde;y đọc b&agrave;i viết n&agrave;y bạn sẽ thấy mọi chuyện kh&ocirc;ng c&oacute; g&igrave; đ&aacute;ng để lo lắng cả. C&oacute; rất nhiều c&aacute;ch kết hợp c&aacute;c phong c&aacute;ch nội thất kh&aacute;c nhau m&agrave; vẫn đảm bảo t&iacute;nh gắn kết trong c&ocirc;ng tr&igrave;nh m&agrave; bạn đang thực hiện.</p>\r\n<p>Sau đ&acirc;y l&agrave; những thứ bạn cần biết để dễ d&agrave;ng kết hợp c&aacute;c phong c&aacute;ch nội thất một c&aacute;ch tốt nhất, bạn c&oacute; thể ho&agrave;n tự tin v&agrave;o t&iacute;nh thẩm mỹ của m&igrave;nh.</p>\r\n<p>D&ugrave;ng c&aacute;c m&agrave;u tương phản Thử tưởng tượng bạn bước v&agrave;o một căn ph&ograve;ng v&agrave; mọi thứ đều được bao phủ bởi một gam m&agrave;u giống nhau. Sau khi vượt qua sự ngỡ ng&agrave;ng ban đầu bạn sẽ nhanh ch&oacute;ng cảm thấy nh&agrave;m ch&aacute;n. Trong kịch bản như thế n&agrave;y căn ph&ograve;ng kh&ocirc;ng c&oacute; bất cứ một điểm nhấn n&agrave;o để bạn ch&uacute; &yacute;, n&oacute; khiến bạn nhanh ch&oacute;ng t&igrave;m kiếm những g&igrave; th&uacute; vị hơn. Ngược lại, nếu pha trộn nhiều gam m&agrave;u nội thất kh&aacute;c nhau sẽ mang đến c&aacute;i nh&igrave;n th&uacute; vị. Ch&uacute;ng ta c&oacute; xu hướng bị cuốn h&uacute;t bởi những kh&ocirc;ng gian c&oacute; nhiều yếu tố để ch&uacute;ng ta xem x&eacute;t trong một tổng thể gắn kết, v&igrave; vậy h&atilde;y giữ mục ti&ecirc;u n&agrave;y trong t&acirc;m tr&iacute; khi mua sắm đồ nội thất cho ng&ocirc;i nh&agrave; th&acirc;n y&ecirc;u của bạn. Tuy nhi&ecirc;n, cần tr&aacute;nh lạm dụng sự tương phản, một căn ph&ograve;ng qu&aacute; nhiều sự tương phản trong m&agrave;u sắc th&igrave; sẽ c&oacute; qu&aacute; nhiều chỗ để mắt ch&uacute; &yacute; v&agrave; thị gi&aacute;c gần như qu&aacute; tải, khi đ&oacute; th&igrave; cần phải thiết lập lại nội thất. Kh&ocirc;ng gian được thiết kế tốt l&agrave; một kh&ocirc;ng gian c&oacute; sự c&acirc;n bằng giữa hai th&aacute;i cực nhằm tạo sự h&agrave;i h&ograve;a cho người sử dụng.</p>', 1, 0, 0, NULL, NULL, NULL, 'tin-tuc', 4, '2018-08-06 04:49:19', '2018-08-05 21:49:19'),
(57, 0, 8, 'Tin tức 5', 'tin-tuc-5', '1533530278_blog-5.jpg', NULL, '', 'Dưới đây là một số gợi ý giúp bạn thiết kế nội thất giúp ngôi nhà của mình trông sáng sủa, rộng rãi và thoáng mát hơn.', NULL, 1, 0, 0, NULL, NULL, NULL, 'tin-tuc', 5, '2018-08-05 21:37:58', '2018-08-05 21:37:58'),
(58, 0, 8, 'Tin tức 6', 'tin-tuc-6', '1533530293_blog-6.jpg', NULL, '', 'Dưới đây là một số gợi ý giúp bạn thiết kế nội thất giúp ngôi nhà của mình trông sáng sủa, rộng rãi và thoáng mát hơn.', NULL, 1, 0, 0, NULL, NULL, NULL, 'tin-tuc', 6, '2018-08-05 21:38:13', '2018-08-05 21:38:13'),
(59, 0, 8, 'Tin tức 7', 'tin-tuc-7', '1533530326_blog-7.jpg', NULL, '', 'Dưới đây là một số gợi ý giúp bạn thiết kế nội thất giúp ngôi nhà của mình trông sáng sủa, rộng rãi và thoáng mát hơn.', NULL, 1, 0, 0, NULL, NULL, NULL, 'tin-tuc', 7, '2018-08-05 21:38:46', '2018-08-05 21:38:46'),
(60, 0, 8, 'Tin tức 8', 'tin-tuc-8', '1533530339_blog-8.jpg', NULL, '', 'Dưới đây là một số gợi ý giúp bạn thiết kế nội thất giúp ngôi nhà của mình trông sáng sủa, rộng rãi và thoáng mát hơn.', NULL, 1, 0, 0, NULL, NULL, NULL, 'tin-tuc', 8, '2018-08-05 21:38:59', '2018-08-05 21:38:59');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `name` text COLLATE utf8_unicode_ci,
  `link` text COLLATE utf8_unicode_ci,
  `email` text COLLATE utf8_unicode_ci,
  `phone` text COLLATE utf8_unicode_ci,
  `photo` text COLLATE utf8_unicode_ci,
  `mota` longtext COLLATE utf8_unicode_ci,
  `content` longtext COLLATE utf8_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '1',
  `noibat` int(11) NOT NULL DEFAULT '0',
  `com` text COLLATE utf8_unicode_ci,
  `stt` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `user_id`, `name`, `link`, `email`, `phone`, `photo`, `mota`, `content`, `status`, `noibat`, `com`, `stt`, `created_at`, `updated_at`) VALUES
(47, 0, NULL, NULL, 'letragiang10@gmail.com', NULL, NULL, NULL, NULL, 1, 0, 'newsletter', 0, '2018-07-13 19:46:51', '2018-07-13 19:46:51'),
(48, 0, NULL, NULL, 'nguyennhan091@gmail.com', NULL, NULL, NULL, NULL, 1, 0, 'newsletter', 0, '2018-07-17 01:42:49', '2018-07-17 01:42:49');

-- --------------------------------------------------------

--
-- Table structure for table `news_categories`
--

CREATE TABLE `news_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mota` text COLLATE utf8_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '0',
  `noibat` int(11) DEFAULT '0',
  `home` int(1) DEFAULT '0',
  `lever` int(11) NOT NULL DEFAULT '0',
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `title` text COLLATE utf8_unicode_ci,
  `keyword` longtext COLLATE utf8_unicode_ci,
  `description` longtext COLLATE utf8_unicode_ci,
  `com` text COLLATE utf8_unicode_ci,
  `stt` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `background` text COLLATE utf8_unicode_ci,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news_categories`
--

INSERT INTO `news_categories` (`id`, `name`, `alias`, `photo`, `icon`, `mota`, `status`, `noibat`, `home`, `lever`, `parent_id`, `title`, `keyword`, `description`, `com`, `stt`, `created_at`, `background`, `updated_at`) VALUES
(1, 'Thiết kế và thi công trọn gói', 'thiet-ke-va-thi-cong-tron-goi', '1533630100_s1.jpg', NULL, 'Chúng tôi hiểu rõ cả ưu và nhược điểm của từng loại vật liệu để có thể sử dụng chúng một cách hiệu quả nhất nhằm tạo nên những công trình ấn tượng, mang tính thẩm mỹ cao và mang đến sự an tâm, hài lòng cho Quý khách hàng.', 1, 0, 0, 0, 0, NULL, NULL, NULL, 'du-an', 1, '2018-08-07 08:21:40', '1533611888_icon-3.png', '2018-08-07 01:21:40'),
(2, 'Thi công nội thất', 'thi-cong-noi-that', '1533631278_s4.jpg', NULL, NULL, 1, 0, 1, 0, 0, NULL, NULL, NULL, 'du-an', 2, '2018-08-07 08:41:18', '', '2018-08-07 01:41:18'),
(17, 'Thiết kế và thi công nội thất', 'thiet-ke-va-thi-cong-noi-that', '1533631830_s5.jpg', NULL, NULL, 1, 1, 1, 0, 0, NULL, NULL, NULL, 'du-an', 3, '2018-08-07 08:50:30', '', '2018-08-07 01:50:30'),
(18, 'Sửa chữa và cải tạo', 'sua-chua-va-cai-tao', '1533631758_s2.jpg', NULL, NULL, 1, 0, 1, 0, 0, NULL, NULL, NULL, 'du-an', 4, '2018-08-07 08:49:18', '', '2018-08-07 01:49:18'),
(19, 'Thi công biệt thự cao cấp', 'thi-cong-biet-thu-cao-cap', '1533631799_s1.jpg', NULL, NULL, 1, 0, 1, 0, 17, NULL, NULL, NULL, 'du-an', 1, '2018-08-07 08:49:59', '1533611936_icon-3.png', '2018-08-07 01:49:59'),
(20, 'Thi công chung cư', 'thi-cong-chung-cu', '', NULL, NULL, 1, 1, 0, 0, 17, NULL, NULL, NULL, 'du-an', 6, '2018-08-07 07:03:19', 'icon-3.png', '2018-08-07 00:03:19'),
(21, 'Nhà hàng, khách sạn', 'nha-hang-khach-san', '', NULL, NULL, 1, 1, 0, 0, 2, NULL, NULL, NULL, 'du-an', 7, '2018-08-07 09:02:02', '1533632522_icon-3.png', '2018-08-07 02:02:02'),
(22, 'Biệt thự', 'biet-thu', '1533630900_s5.jpg', NULL, NULL, 1, 1, 1, 0, 2, NULL, NULL, NULL, 'du-an', 8, '2018-08-07 08:35:03', '', '2018-08-07 01:35:03'),
(23, 'Nhà phố liền kề', 'nha-pho-lien-ke', '', NULL, NULL, 1, 1, 0, 0, 1, NULL, NULL, NULL, 'du-an', 9, '2018-08-07 07:02:41', '', '2018-08-07 00:02:41'),
(24, 'Văn phòng', 'van-phong', '', NULL, NULL, 1, 1, 0, 0, 1, NULL, NULL, NULL, 'du-an', 10, '2018-08-07 07:06:21', '', '2018-08-07 00:06:21');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `photo` text COLLATE utf8_unicode_ci,
  `desc` longtext COLLATE utf8_unicode_ci,
  `content` longtext COLLATE utf8_unicode_ci,
  `status` int(11) NOT NULL,
  `keyword` longtext COLLATE utf8_unicode_ci,
  `description` longtext COLLATE utf8_unicode_ci,
  `stt` int(11) NOT NULL,
  `com` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `url` text COLLATE utf8_unicode_ci,
  `photo` text COLLATE utf8_unicode_ci,
  `desc` longtext COLLATE utf8_unicode_ci,
  `content` longtext COLLATE utf8_unicode_ci,
  `com` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id`, `name`, `url`, `photo`, `desc`, `content`, `com`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', NULL, '1533607983_band-1.png', NULL, 'Công ty hiện kinh doanh trong các lĩnh vực tài chính, bất động sản và thương mại.', 'doi-tac', 1, '2018-08-06 19:13:03', '2018-08-06 19:13:03'),
(2, '2', NULL, '1533608012_band-2.png', NULL, 'Công ty hiện kinh doanh trong các lĩnh vực tài chính, bất động sản và thương mại.', 'doi-tac', 1, '2018-08-06 19:13:32', '2018-08-06 19:13:32'),
(3, '3', NULL, '1533608020_band-3.png', NULL, 'Công ty hiện kinh doanh trong các lĩnh vực tài chính, bất động sản và thương mại.', 'doi-tac', 1, '2018-08-06 19:13:40', '2018-08-06 19:13:40'),
(4, '4', NULL, '1533608030_band-4.png', NULL, 'Công ty hiện kinh doanh trong các lĩnh vực tài chính, bất động sản và thương mại.', 'doi-tac', 1, '2018-08-06 19:13:50', '2018-08-06 19:13:50'),
(5, '5', NULL, '1533617430_band-2.png', NULL, 'Công ty hiện kinh doanh trong các lĩnh vực tài chính, bất động sản và thương mại.', 'doi-tac', 1, '2018-08-06 21:50:30', '2018-08-06 21:50:30');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `cate_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `code` text COLLATE utf8_unicode_ci,
  `stt` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` text COLLATE utf8_unicode_ci,
  `price` int(11) NOT NULL DEFAULT '0',
  `sale` int(11) DEFAULT '0',
  `price_old` int(11) DEFAULT '0',
  `mota` longtext COLLATE utf8_unicode_ci,
  `content` longtext COLLATE utf8_unicode_ci,
  `thuonghieu` text COLLATE utf8_unicode_ci,
  `tinhtrang` int(11) NOT NULL DEFAULT '1',
  `baohanh` text COLLATE utf8_unicode_ci,
  `properties` text CHARACTER SET utf8,
  `model` text COLLATE utf8_unicode_ci,
  `namsanxuat` text COLLATE utf8_unicode_ci,
  `ratepoint` int(2) DEFAULT NULL,
  `quatang` text COLLATE utf8_unicode_ci,
  `huongdan` text COLLATE utf8_unicode_ci,
  `vanchuyen` text COLLATE utf8_unicode_ci,
  `noibat` int(11) NOT NULL DEFAULT '0',
  `spbc` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  `title` text COLLATE utf8_unicode_ci,
  `keyword` longtext COLLATE utf8_unicode_ci,
  `description` longtext COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `user_id`, `cate_id`, `code`, `stt`, `name`, `alias`, `photo`, `price`, `sale`, `price_old`, `mota`, `content`, `thuonghieu`, `tinhtrang`, `baohanh`, `properties`, `model`, `namsanxuat`, `ratepoint`, `quatang`, `huongdan`, `vanchuyen`, `noibat`, `spbc`, `status`, `title`, `keyword`, `description`, `created_at`, `updated_at`) VALUES
(1, 5, 9, NULL, 1, 'Sản phẩm 1', 'san-pham-1', '1527820153_sp1.png', 3000000, 0, 0, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quaerat, reiciendis. Harum expedita libero temporibus atque suscipit maiores voluptatibus, illum molestias. Nesciunt unde, obcaecati itaque, enim nisi voluptatum quisquam laudantium!</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quaerat, reiciendis. Harum expedita libero temporibus atque suscipit maiores voluptatibus, illum molestias. Nesciunt unde, obcaecati itaque, enim nisi voluptatum quisquam lau</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quaerat, reiciendis. Harum expedita libero temporibus atque suscipit maiores voluptatibus, illum molestias. Nesciunt unde, obcaecati itaque, enim nisi voluptatum quisquam laudantium!</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quaerat, reiciendis. Harum expedita libero temporibus atque suscipit maiores voluptatibus, illum molestias. Nesciunt unde, obcaecati itaque, enim nisi voluptatum quisquam laudantium!</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quaerat, reiciendis. Harum expedita libero temporibus atque suscipit maiores voluptatibus, illum molestias. Nesciunt unde, obcaecati itaque, enim nisi voluptatum quisquam laudantium!</p>\r\n<p>&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quaerat, reiciendis. Harum expedita libero temporibus atque suscipit maiores voluptatibus, illum molestias. Nesciunt unde, obcaecati itaque, enim nisi voluptatum quisquam laudantium!</p>', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 1, NULL, NULL, NULL, '2018-06-05 14:27:42', '2018-06-05 07:27:42'),
(2, 5, 9, NULL, 2, 'Sản phẩm 2', 'san-pham-2', '1527844629_sp2.png', 400000, 0, 0, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quaerat, reiciendis. Harum expedita libero temporibus atque suscipit maiores voluptatibus, illum molestias. Nesciunt unde, obcaecati itaque, enim nisi voluptatum quisquam laudantium!</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quaerat, reiciendis. Harum expedita libero temporibus atque suscipit maiores voluptatibus, illum molestias. Nesciunt unde, obcaecati itaque, enim nisi voluptatum quisquam laudantium!</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quaerat, reiciendis. Harum expedita libero temporibus atque suscipit maiores voluptatibus, illum molestias. Nesciunt unde, obcaecati itaque, enim nisi voluptatum quisquam laudantium!</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quaerat, reiciendis. Harum expedita libero temporibus atque suscipit maiores voluptatibus, illum molestias. Nesciunt unde, obcaecati itaque, enim nisi voluptatum quisquam laudantium!</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quaerat, reiciendis. Harum expedita libero temporibus atque suscipit maiores voluptatibus, illum molestias. Nesciunt unde, obcaecati itaque, enim nisi voluptatum quisquam laudantium!</p>\r\n<p>&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, quaerat, reiciendis. Harum expedita libero temporibus atque suscipit maiores voluptatibus, illum molestias. Nesciunt unde, obcaecati itaque, enim nisi voluptatum quisquam laudantium!</p>', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 1, NULL, NULL, NULL, '2018-06-05 14:26:27', '2018-06-05 07:26:27');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `stt` int(11) DEFAULT '0',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` text COLLATE utf8_unicode_ci,
  `noibat` int(2) DEFAULT '0',
  `status` int(11) NOT NULL,
  `lever` int(11) NOT NULL DEFAULT '0',
  `title` text COLLATE utf8_unicode_ci,
  `keyword` longtext COLLATE utf8_unicode_ci,
  `description` longtext COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `parent_id`, `stt`, `name`, `alias`, `photo`, `noibat`, `status`, `lever`, `title`, `keyword`, `description`, `created_at`, `updated_at`) VALUES
(9, 0, NULL, 'Danh mục sản phẩm 2', 'danh-muc-san-pham-2', '', 0, 1, 0, NULL, NULL, NULL, '2018-05-31 19:23:49', '2018-05-31 19:23:49'),
(8, 0, NULL, 'Danh mục sản phẩm 1', 'danh-muc-san-pham-1', '', 0, 1, 0, NULL, NULL, NULL, '2018-05-31 19:23:00', '2018-05-31 19:23:00'),
(10, 0, NULL, 'Danh mục sản phẩm 3', 'danh-muc-san-pham-3', '', 0, 1, 0, NULL, NULL, NULL, '2018-05-31 19:23:55', '2018-05-31 19:23:55');

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `tenkhongdau` varchar(255) DEFAULT NULL,
  `mota_vi` text,
  `mota_en` text,
  `photo` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `stt` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`id`, `name`, `tenkhongdau`, `mota_vi`, `mota_en`, `photo`, `thumb`, `stt`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Hồ Chí Minh', '', '', '', '', '', 30, 1, '0000-00-00 00:00:00', '2017-11-23 21:04:04'),
(2, 'Hà Nội', '', '', '', '', '', 24, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Hải Phòng', '', '', '', '', '', 28, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'An Giang', '', '', '', '', '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Bà Rịa Vũng Tàu', '', '', '', '', '', 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Bạc Liêu', '', '', '', '', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Bắc Cạn', '', '', '', '', '', 4, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Bắc Giang', '', '', '', '', '', 5, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Bắc Ninh', '', '', '', '', '', 6, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Bến Tre', '', '', '', '', '', 7, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Bình Dương', '', '', '', '', '', 8, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Bình Định', '', '', '', '', '', 9, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Bình Phước', '', '', '', '', '', 10, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Bình Thuận', '', '', '', '', '', 11, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Cà Mau', '', '', '', '', '', 12, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Cao Bằng', '', '', '', '', '', 13, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Cần Thơ', '', '', '', '', '', 14, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Đà Nẵng', '', '', '', '', '', 15, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'Đắk Lắc ', '', '', '', '', '', 16, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Đắk Nông', '', '', '', '', '', 17, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Điện Biện', '', '', '', '', '', 18, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'Đồng Nai', '', '', '', '', '', 19, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'Đồng Tháp', '', '', '', '', '', 20, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'Gia Lai', '', '', '', '', '', 21, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'Hà Giang', '', '', '', '', '', 22, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'Hà Nam', '', '', '', '', '', 23, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'Hà Tây', '', '', '', '', '', 25, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'Hà Tĩnh', '', '', '', '', '', 26, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'Hải Dương', '', '', '', '', '', 27, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'Hòa Bình', '', '', '', '', '', 29, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'Hậu Giang', '', '', '', '', '', 31, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'Hưng Yên', '', '', '', '', '', 32, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'Khánh Hòa', '', '', '', '', '', 33, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 'Kiên Giang', '', '', '', '', '', 34, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 'Kon Tum', '', '', '', '', '', 35, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 'Lai Châu', '', '', '', '', '', 36, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 'Lào Cai', '', '', '', '', '', 37, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 'Lạng Sơn', '', '', '', '', '', 38, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 'Lâm Đồng ', '', '', '', '', '', 39, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 'Long An', '', '', '', '', '', 40, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 'Nam Định', '', '', '', '', '', 41, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 'Nghệ An', '', '', '', '', '', 42, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 'Ninh Bình', '', '', '', '', '', 43, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 'Ninh Thuận', '', '', '', '', '', 44, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 'Phú Thọ', '', '', '', '', '', 45, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 'Phú Yên', '', '', '', '', '', 46, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 'Quảng Bình ', '', '', '', '', '', 47, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 'Quảng Nam', '', '', '', '', '', 48, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 'Quảng Ngãi', '', '', '', '', '', 49, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 'Quảng Ninh', '', '', '', '', '', 50, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 'Quảng Trị', '', '', '', '', '', 51, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 'Sóc Trăng', '', '', '', '', '', 52, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 'Sơn La', '', '', '', '', '', 53, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 'Tây Ninh', '', '', '', '', '', 54, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 'Thái Bình', '', '', '', '', '', 55, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 'Thái Nguyên', '', '', '', '', '', 56, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 'Thanh Hóa', '', '', '', '', '', 57, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 'Thừa Thiên - Huế', '', '', '', '', '', 58, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 'Tiền Giang', '', '', '', '', '', 59, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 'Trà Vinh', '', '', '', '', '', 60, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 'Tuyên Quang', '', '', '', '', '', 61, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 'Vĩnh Long', '', '', '', '', '', 62, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 'Vĩnh Phúc', '', '', '', '', '', 63, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 'Yên Bái', '', '', '', '', '', 64, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `recruitment`
--

CREATE TABLE `recruitment` (
  `id` int(11) NOT NULL,
  `name` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `address` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(2) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8_unicode_ci,
  `title` text COLLATE utf8_unicode_ci,
  `company` text COLLATE utf8_unicode_ci,
  `website` text COLLATE utf8_unicode_ci,
  `address` text COLLATE utf8_unicode_ci,
  `phone` text COLLATE utf8_unicode_ci,
  `hotline` text COLLATE utf8_unicode_ci,
  `fax` text COLLATE utf8_unicode_ci,
  `email` text COLLATE utf8_unicode_ci,
  `photo` text COLLATE utf8_unicode_ci,
  `photo_footer` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `photo_page` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `favico` text COLLATE utf8_unicode_ci,
  `title_index` text COLLATE utf8_unicode_ci,
  `mota` longtext COLLATE utf8_unicode_ci,
  `content` longtext COLLATE utf8_unicode_ci,
  `facebook` text COLLATE utf8_unicode_ci,
  `twitter` text COLLATE utf8_unicode_ci,
  `skype` text COLLATE utf8_unicode_ci,
  `google` text COLLATE utf8_unicode_ci,
  `youtube` text COLLATE utf8_unicode_ci,
  `status` int(11) DEFAULT '0',
  `toado` text COLLATE utf8_unicode_ci,
  `copyright` text COLLATE utf8_unicode_ci,
  `iframemap` text COLLATE utf8_unicode_ci,
  `codechat` longtext COLLATE utf8_unicode_ci,
  `analytics` longtext COLLATE utf8_unicode_ci,
  `keyword` longtext COLLATE utf8_unicode_ci,
  `description` longtext COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `name`, `title`, `company`, `website`, `address`, `phone`, `hotline`, `fax`, `email`, `photo`, `photo_footer`, `photo_page`, `favico`, `title_index`, `mota`, `content`, `facebook`, `twitter`, `skype`, `google`, `youtube`, `status`, `toado`, `copyright`, `iframemap`, `codechat`, `analytics`, `keyword`, `description`, `created_at`, `updated_at`) VALUES
(1, 'AAA Home', 'AAA Home', 'AAA Home', 'http://developer6.gco.vn/gcoads/', 'Tầng 8, Tòa nhà TOYOTA Thanh Xuân  315 Trường Chinh, Thanh Xuân, Hà Nội', '(024)7 309 8885', '0985632147', NULL, 'aaahome.vn@gmail.com', '1533525799_logo-1.png', '1533550038_logo-2.png', '1530871000_logo-page.png', '1533525799_logo-1.png', 'http://abc.com.vn', NULL, NULL, 'https://www.facebook.com/FacebookforDevelopers/', 'https://twitter.com/?lang=vi', NULL, 'https://plus.google.com/?hl=vi', 'https://www.youtube.com/', 1, NULL, '© GCO GROUP 2018. All rights reserved', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.7749747466096!2d105.82069491439643!3d21.00165548601309!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac8429ac32cb%3A0x592668996cef591f!2zMzE1IFRyxrDhu51uZyBDaGluaCwgS2jGsMahbmcgVGjGsOG7o25nLCDEkOG7kW5nIMSQYSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1531887013298\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', NULL, NULL, NULL, NULL, '2018-08-06 10:07:18', '2018-08-06 03:07:18');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` text COLLATE utf8_unicode_ci,
  `link` text COLLATE utf8_unicode_ci,
  `photo` text COLLATE utf8_unicode_ci,
  `photo1` text CHARACTER SET utf8,
  `photo2` text CHARACTER SET utf8,
  `icon` text COLLATE utf8_unicode_ci,
  `mota` longtext COLLATE utf8_unicode_ci,
  `content` longtext COLLATE utf8_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '1',
  `noibat` int(11) NOT NULL DEFAULT '0',
  `com` text COLLATE utf8_unicode_ci,
  `stt` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `user_id`, `name`, `link`, `photo`, `photo1`, `photo2`, `icon`, `mota`, `content`, `status`, `noibat`, `com`, `stt`, `created_at`, `updated_at`) VALUES
(1, 8, '1', NULL, '1533526393_slider-1.jpg', '', '', NULL, NULL, NULL, 1, 0, 'gioi-thieu', 1, '2018-08-06 03:33:13', '2018-08-05 20:33:13'),
(2, 8, '2', NULL, '1533526406_slider-1.jpg', '', '', NULL, NULL, NULL, 1, 0, 'gioi-thieu', 2, '2018-08-06 03:33:26', '2018-08-05 20:33:26');

-- --------------------------------------------------------

--
-- Table structure for table `slogan`
--

CREATE TABLE `slogan` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `link` varchar(250) DEFAULT NULL,
  `photo` text,
  `photo2` text,
  `stt` int(11) DEFAULT NULL,
  `content` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slogan`
--

INSERT INTO `slogan` (`id`, `name`, `link`, `photo`, `photo2`, `stt`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Nội dung cần tư vấn 1', NULL, '', '', 1, NULL, '2018-08-08 02:03:35', '2018-08-07 19:03:35'),
(2, 'Nội dung cần tư vấn 2', NULL, '', '', 2, NULL, '2018-08-07 19:02:23', '2018-08-07 19:02:23'),
(3, 'Nội dung cần tư vấn 3', NULL, '', '', 3, NULL, '2018-08-07 19:02:31', '2018-08-07 19:02:31'),
(4, 'Nội dung cần tư vấn 4', NULL, '', '', 4, NULL, '2018-08-07 19:02:38', '2018-08-07 19:02:38');

-- --------------------------------------------------------

--
-- Table structure for table `useronline`
--

CREATE TABLE `useronline` (
  `id` int(10) UNSIGNED NOT NULL,
  `session` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time` int(11) NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci,
  `level` int(11) NOT NULL DEFAULT '2',
  `photo` text COLLATE utf8_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `email`, `phone`, `address`, `level`, `photo`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'tuanduy2012', '$2y$10$DceYJxR4ALmUW.Vt6k9En.1ubJhJGvWX1HISRloBERLNJ8Qq85itO', 'Tuan Duy', 'duydoan.nina@gmail.com', '', '', 1, NULL, 1, 'X37mpbjW1WDCjwH3s4Vq1Jkv3WRNJceXZlbLwHaa', '2017-06-14 23:42:39', '2017-06-14 23:42:39'),
(4, 'evernigh', '$2y$10$pprRO9LhYKADS60bvetRnOYoS3L74giVWf3D/wNZXlDLDRRx0bH6e', 'Duy Đoàn', 'tuanduy_mc2006@yahoo.com', '', '', 0, NULL, 1, '6CirvIekDhWLx3xFrnv7v39bFmalTsH21F4WABTq', '2017-06-16 02:51:34', '2017-06-16 02:51:34'),
(5, 'gco_admin', '$2y$10$IP3633RgCQNAfs6J8cic9.XRNb4v7KxvcI0oF1HpWBQKqPT4v.JYG', 'Admin', 'gco@gmail.com', '0985431797', '315 Trường chinh, Thanh Xuân, Hà Nội', 1, '5.jpg', 1, 'Ljivi1hsYgR59Oy0OVCKjGS9jXPufymhqIPUw5KmqOOltNBeg2cHsAjOZ4Ve', '2018-07-13 09:06:16', '2018-07-13 02:06:16'),
(7, 'hoangchuong', '$2y$10$PnaSJxmZdL0x0wRtj4q0tODPWKtxI85VefEFNZWDQKEH6q8rxjLc6', 'chuong', 'chuonghoanghong@gmail.com', NULL, NULL, 1, NULL, 1, 'DSYV3dr0q7IjUiVKsa4tl4ApOSuDPybd17EupcaO', '2017-11-07 01:31:10', '2017-11-07 01:31:10'),
(8, 'admin', '$2y$10$54bF9zCcwvAY1oDKCLsN3O/sEUOF/a0Q8Zz/UKti5CzFogRactG3O', 'admin', 'admin@gmail.com', NULL, NULL, 1, 'logo-home-2.png', 1, 'mS5uzAq1WyDCrcyi3bXIxntb7nQh8B2kw1g5RUF8C6WgLiKti1XIT3vDzzCz', '2018-07-16 08:16:31', '2018-07-13 18:38:17');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `link` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `link`, `created_at`, `updated_at`) VALUES
(1, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/nvy3XBg-tmU\" frameborder=\"0\" allowfullscreen></iframe>', '2017-10-15 20:31:58', '2017-10-15 20:34:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank_account`
--
ALTER TABLE `bank_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_content`
--
ALTER TABLE `banner_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_position`
--
ALTER TABLE `banner_position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campaigns`
--
ALTER TABLE `campaigns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campaign_cards`
--
ALTER TABLE `campaign_cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chinhanh`
--
ALTER TABLE `chinhanh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gioithieu`
--
ALTER TABLE `gioithieu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_product_id_foreign` (`product_id`);

--
-- Indexes for table `lienket`
--
ALTER TABLE `lienket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `news_categories_name_unique` (`name`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_categories`
--
ALTER TABLE `news_categories`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `news_categories` ADD FULLTEXT KEY `name1` (`name`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recruitment`
--
ALTER TABLE `recruitment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slogan`
--
ALTER TABLE `slogan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useronline`
--
ALTER TABLE `useronline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `bank_account`
--
ALTER TABLE `bank_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banner_content`
--
ALTER TABLE `banner_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `banner_position`
--
ALTER TABLE `banner_position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `campaigns`
--
ALTER TABLE `campaigns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `campaign_cards`
--
ALTER TABLE `campaign_cards`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `chinhanh`
--
ALTER TABLE `chinhanh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gioithieu`
--
ALTER TABLE `gioithieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `lienket`
--
ALTER TABLE `lienket`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `news_categories`
--
ALTER TABLE `news_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `recruitment`
--
ALTER TABLE `recruitment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slogan`
--
ALTER TABLE `slogan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `useronline`
--
ALTER TABLE `useronline`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
