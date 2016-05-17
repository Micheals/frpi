-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 12, 2016 at 02:28 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shopping_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE IF NOT EXISTS `attributes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `label` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sort_order` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=80 ;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `label`, `sort_order`, `created_at`, `updated_at`) VALUES
(1, 'DI192HB47CGQANPH-66802', 1, '2016-04-29 19:59:29', '2016-04-29 19:59:29'),
(2, 'Gold', 2, '2016-04-29 19:59:45', '2016-04-29 19:59:45'),
(3, '14days Replacement', 3, '2016-04-29 20:00:09', '2016-04-29 20:00:09'),
(4, 'NL609HBAA2DYYPANPH-4758386', 1, '2016-04-29 20:08:12', '2016-04-29 20:08:12'),
(5, 'FA520HBBDN6GANPH-1661487', 1, '2016-04-29 20:12:19', '2016-04-29 20:12:19'),
(6, 'No Warranty', 2, '2016-04-29 20:12:31', '2016-04-29 20:12:31'),
(7, 'DA520HBBDN6GANPH-1661487', 1, '2016-04-29 20:16:30', '2016-04-29 20:16:30'),
(8, 'No Warranty', 2, '2016-04-29 20:16:44', '2016-04-29 20:16:44'),
(9, 'FA99881TT33GG', 1, '2016-04-29 20:22:04', '2016-04-29 20:22:04'),
(10, '4days Warrranty', 2, '2016-04-29 20:22:18', '2016-04-29 20:22:18'),
(11, 'MI055HBAA11PTSANPH-2138336', 1, '2016-04-29 20:26:11', '2016-04-29 20:26:11'),
(12, '5days Warranty', 2, '2016-04-29 20:26:25', '2016-04-29 20:26:25'),
(13, 'MI055HBAA11PTSANPH-2138336', 1, '2016-04-29 20:29:29', '2016-04-29 20:29:29'),
(14, '7days Warranty', 2, '2016-04-29 20:29:44', '2016-04-29 20:29:44'),
(15, '	MI055HBAA11PTSANPH-2138336', 1, '2016-04-29 20:33:28', '2016-04-29 20:33:28'),
(16, '7days Warranty', 2, '2016-04-29 20:33:43', '2016-04-29 20:33:43'),
(17, '665HGDDD', 1, '2016-04-29 20:36:16', '2016-04-29 20:36:16'),
(18, 'No Warranty', 2, '2016-04-29 20:36:27', '2016-04-29 20:36:27'),
(19, '5556HASA2244', 1, '2016-04-29 20:44:10', '2016-04-29 20:44:10'),
(20, '3days Warranty', 2, '2016-04-29 20:44:20', '2016-04-29 20:44:20'),
(21, '55JJDW561', 1, '2016-04-29 20:47:47', '2016-04-29 20:47:47'),
(22, '3days Warranty', 2, '2016-04-29 20:48:02', '2016-04-29 20:48:02'),
(23, 'THH5554GGE', 1, '2016-04-29 20:51:13', '2016-04-29 20:51:13'),
(24, 'No Warranty', 2, '2016-04-29 20:51:31', '2016-04-29 20:51:31'),
(25, 'TJJ44422KKLA', 1, '2016-04-29 20:54:57', '2016-04-29 20:54:57'),
(26, 'No Warranty', 2, '2016-04-29 20:55:08', '2016-04-29 20:55:08'),
(27, 'KKT777JKE', 1, '2016-04-29 20:57:50', '2016-04-29 20:57:50'),
(28, 'No Warranty', 2, '2016-04-29 20:58:00', '2016-04-29 20:58:00'),
(29, 'LLT5512TTH', 1, '2016-04-29 21:00:26', '2016-04-29 21:00:26'),
(30, 'No Warranty', 2, '2016-04-29 21:00:37', '2016-04-29 21:00:37'),
(31, '5677RRGG', 1, '2016-04-29 21:02:38', '2016-04-29 21:02:38'),
(32, '2days Warranty', 2, '2016-04-29 21:02:50', '2016-04-29 21:02:50'),
(33, 'NL609HBAA2DYYPANPH-4758386', 1, '2016-04-29 22:40:24', '2016-04-29 22:40:24'),
(34, '7days Warranty', 2, '2016-04-29 22:40:35', '2016-04-29 22:40:35'),
(35, 'HHT5522RD44T', 1, '2016-04-29 22:56:22', '2016-04-29 22:56:22'),
(36, '5days Warranty', 2, '2016-04-29 22:56:38', '2016-04-29 22:56:38'),
(37, 'KKT1223KKT122', 1, '2016-04-29 22:59:35', '2016-04-29 22:59:35'),
(38, '2days Warranty', 2, '2016-04-29 22:59:47', '2016-04-29 22:59:47'),
(39, 'HHY4552TT', 1, '2016-04-29 23:02:07', '2016-04-29 23:02:07'),
(40, '7days Warranty', 2, '2016-04-29 23:02:18', '2016-04-29 23:02:18'),
(41, 'HHT5511RRR', 1, '2016-04-29 23:11:57', '2016-04-29 23:11:57'),
(42, 'No Warranty', 2, '2016-04-29 23:12:12', '2016-04-29 23:12:12'),
(43, 'Normal', 3, '2016-04-29 23:12:28', '2016-04-29 23:12:28'),
(44, 'JJK4411KKT', 1, '2016-04-29 23:16:46', '2016-04-29 23:16:46'),
(45, '4days Warranty', 2, '2016-04-29 23:17:02', '2016-04-29 23:17:02'),
(46, 'Normal', 3, '2016-04-29 23:17:15', '2016-04-29 23:17:15'),
(47, 'GGE442R3F55', 1, '2016-04-29 23:20:37', '2016-04-29 23:20:37'),
(48, '7days Warranty', 2, '2016-04-29 23:20:50', '2016-04-29 23:20:50'),
(49, 'LLLW23RR44SS', 1, '2016-04-29 23:25:22', '2016-04-29 23:25:22'),
(50, 'No Warranty', 2, '2016-04-29 23:25:31', '2016-04-29 23:25:31'),
(51, 'J42RW55GG77', 1, '2016-04-29 23:28:37', '2016-04-29 23:28:37'),
(52, '1day Warranty', 2, '2016-04-29 23:28:47', '2016-04-29 23:28:47'),
(53, 'Combination', 3, '2016-04-29 23:28:56', '2016-04-29 23:28:56'),
(54, 'HH441GG', 1, '2016-04-29 23:34:22', '2016-04-29 23:34:22'),
(55, '1day Warranty', 2, '2016-04-29 23:34:33', '2016-04-29 23:34:33'),
(56, 'LLKD444GG', 1, '2016-04-29 23:38:40', '2016-04-29 23:38:40'),
(57, 'No Warranty', 2, '2016-04-29 23:38:48', '2016-04-29 23:38:48'),
(58, 'HHF448Y44R332', 1, '2016-04-30 01:17:06', '2016-04-30 01:17:06'),
(59, 'No Warranty', 2, '2016-04-30 01:17:46', '2016-04-30 01:17:46'),
(60, 'RR223DAAW22', 1, '2016-05-03 03:47:18', '2016-05-03 03:47:18'),
(61, '3days Warranty', 2, '2016-05-03 03:47:32', '2016-05-03 03:47:32'),
(62, 'HH442P28FFS', 1, '2016-05-03 04:04:36', '2016-05-03 04:04:36'),
(63, '3days Warranty', 2, '2016-05-03 04:31:23', '2016-05-03 04:31:23'),
(64, 'JJK998JD47', 1, '2016-05-03 04:52:28', '2016-05-03 04:52:28'),
(65, '3days Warranty', 2, '2016-05-03 04:52:52', '2016-05-03 04:52:52'),
(66, 'LLO4451HH', 1, '2016-05-03 04:57:54', '2016-05-03 04:57:54'),
(67, '3days Warranty', 2, '2016-05-03 04:58:18', '2016-05-03 04:58:18'),
(68, 'YYT445EEE', 1, '2016-05-03 05:02:38', '2016-05-03 05:02:38'),
(69, '3days Warranty', 2, '2016-05-03 05:02:51', '2016-05-03 05:02:51'),
(70, 'KKI442KL', 1, '2016-05-03 05:11:02', '2016-05-03 05:11:02'),
(71, '3days Warranty', 2, '2016-05-03 05:11:19', '2016-05-03 05:11:19'),
(72, 'LLDI993KK', 1, '2016-05-03 05:19:42', '2016-05-03 05:19:42'),
(73, '5 days Warranty', 2, '2016-05-03 05:20:01', '2016-05-03 05:20:01'),
(74, 'KOIU88HHR', 1, '2016-05-03 05:23:21', '2016-05-03 05:23:21'),
(75, '1 day Warranty ', 2, '2016-05-03 05:23:40', '2016-05-03 05:23:40'),
(76, 'HHJE4455HHY', 1, '2016-05-03 05:34:35', '2016-05-03 05:34:35'),
(77, '2days Warranty ', 2, '2016-05-03 05:34:48', '2016-05-03 05:34:48'),
(78, 'JJ4422', 1, '2016-05-05 04:10:50', '2016-05-05 04:10:50'),
(79, '3days warranty', 2, '2016-05-05 04:11:14', '2016-05-05 04:11:14');

-- --------------------------------------------------------

--
-- Table structure for table `attribute_product`
--

CREATE TABLE IF NOT EXISTS `attribute_product` (
  `attribute_id` int(10) unsigned NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`attribute_id`,`product_id`),
  KEY `attribute_product_product_id_foreign` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `attribute_product`
--

INSERT INTO `attribute_product` (`attribute_id`, `product_id`) VALUES
(1, 2),
(2, 2),
(3, 2),
(4, 3),
(5, 4),
(6, 4),
(7, 5),
(8, 5),
(9, 6),
(10, 6),
(11, 7),
(12, 7),
(13, 8),
(14, 8),
(15, 9),
(16, 9),
(17, 10),
(18, 10),
(19, 11),
(20, 11),
(21, 12),
(22, 12),
(23, 13),
(24, 13),
(25, 14),
(26, 14),
(27, 15),
(28, 15),
(29, 16),
(30, 16),
(31, 17),
(32, 17),
(33, 18),
(34, 18),
(35, 19),
(36, 19),
(37, 20),
(38, 20),
(39, 21),
(40, 21),
(41, 22),
(42, 22),
(43, 22),
(44, 23),
(45, 23),
(46, 23),
(47, 24),
(48, 24),
(49, 25),
(50, 25),
(51, 26),
(52, 26),
(53, 26),
(54, 27),
(55, 27),
(56, 28),
(57, 28),
(58, 29),
(59, 29),
(60, 100000),
(61, 100000),
(62, 100001),
(63, 100001),
(64, 100002),
(65, 100002),
(66, 100003),
(67, 100003),
(68, 100004),
(69, 100004),
(70, 100005),
(71, 100005),
(72, 100006),
(73, 100006),
(74, 100007),
(75, 100007),
(76, 100008),
(77, 100008),
(78, 100009),
(79, 100009);

-- --------------------------------------------------------

--
-- Table structure for table `attr_groups`
--

CREATE TABLE IF NOT EXISTS `attr_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `label` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sort_order` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10005 ;

--
-- Dumping data for table `attr_groups`
--

INSERT INTO `attr_groups` (`id`, `label`, `sort_order`, `created_at`, `updated_at`) VALUES
(10000, 'SKU', 1, '2016-04-29 18:28:38', '2016-04-29 18:28:38'),
(10001, 'Product Warranty', 1, '2016-04-29 18:28:38', '2016-04-29 18:28:38'),
(10002, 'Color', 1, '2016-04-29 18:28:38', '2016-04-29 18:28:38'),
(10003, 'Model', 1, '2016-04-29 18:28:38', '2016-04-29 18:28:38'),
(10004, 'Skin Type', 1, '2016-04-29 23:02:56', '2016-04-29 23:02:56');

-- --------------------------------------------------------

--
-- Table structure for table `attr_group_attribute`
--

CREATE TABLE IF NOT EXISTS `attr_group_attribute` (
  `attribute_id` int(10) unsigned NOT NULL,
  `attr_group_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`attribute_id`,`attr_group_id`),
  KEY `attr_group_attribute_attr_group_id_foreign` (`attr_group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `attr_group_attribute`
--

INSERT INTO `attr_group_attribute` (`attribute_id`, `attr_group_id`) VALUES
(1, 10000),
(4, 10000),
(5, 10000),
(7, 10000),
(9, 10000),
(11, 10000),
(13, 10000),
(15, 10000),
(17, 10000),
(19, 10000),
(21, 10000),
(23, 10000),
(25, 10000),
(27, 10000),
(29, 10000),
(31, 10000),
(33, 10000),
(35, 10000),
(37, 10000),
(39, 10000),
(41, 10000),
(44, 10000),
(47, 10000),
(49, 10000),
(51, 10000),
(54, 10000),
(56, 10000),
(58, 10000),
(60, 10000),
(62, 10000),
(64, 10000),
(66, 10000),
(68, 10000),
(70, 10000),
(72, 10000),
(74, 10000),
(76, 10000),
(78, 10000),
(3, 10001),
(6, 10001),
(8, 10001),
(10, 10001),
(12, 10001),
(14, 10001),
(16, 10001),
(18, 10001),
(20, 10001),
(22, 10001),
(24, 10001),
(26, 10001),
(28, 10001),
(30, 10001),
(32, 10001),
(34, 10001),
(36, 10001),
(38, 10001),
(40, 10001),
(42, 10001),
(45, 10001),
(48, 10001),
(50, 10001),
(52, 10001),
(55, 10001),
(57, 10001),
(59, 10001),
(61, 10001),
(63, 10001),
(65, 10001),
(67, 10001),
(69, 10001),
(71, 10001),
(73, 10001),
(75, 10001),
(77, 10001),
(79, 10001),
(2, 10002),
(43, 10004),
(46, 10004),
(53, 10004);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `parent` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sort_order` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=40 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `parent`, `sort_order`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Face Cleanser', '', '', 0, 0, '2016-04-29 17:43:35', '2016-04-29 17:43:35'),
(2, 'Gifts & Value Sets', '', '', 0, 0, '2016-04-29 17:43:35', '2016-04-29 17:43:35'),
(3, 'Moisturizers and Cream', '', '', 0, 0, '2016-04-29 17:43:36', '2016-04-29 17:43:36'),
(4, 'NONE', '', '', 0, 0, '2016-04-29 17:43:36', '2016-04-29 17:43:36'),
(5, 'Scar Cream', '', '', 0, 0, '2016-04-29 17:43:36', '2016-04-29 17:43:36'),
(6, 'Sunscreen and Aftersun', '', '', 0, 0, '2016-04-29 17:43:36', '2016-04-29 17:43:36'),
(7, 'Toner & Mists', '', '', 0, 0, '2016-04-29 17:43:36', '2016-04-29 17:43:36'),
(8, 'Face Treatments & Serums', '', '', 0, 0, '2016-04-29 17:43:36', '2016-04-29 17:43:36'),
(9, 'Neck & Decollete', '', '', 0, 0, '2016-04-29 17:43:36', '2016-04-29 17:43:36'),
(10, 'Eye Cream', '', '', 0, 0, '2016-04-29 17:43:36', '2016-04-29 17:43:36'),
(11, 'Dermacare', '', '', 2, 0, '2016-04-29 17:43:36', '2016-04-29 17:43:36'),
(12, 'Whitening Products', '', '', 0, 0, '2016-04-29 17:43:36', '2016-04-29 17:43:36'),
(13, 'Body Lotion & Butter', '', '', 0, 0, '2016-04-29 17:43:36', '2016-04-29 17:43:36'),
(14, 'Body Scrubs', '', '', 0, 0, '2016-04-29 17:43:36', '2016-04-29 17:43:36'),
(15, 'Body Soaps & Shower Gels', '', '', 0, 0, '2016-04-29 17:43:36', '2016-04-29 17:43:36'),
(16, 'Body Massage Oil', '', '', 0, 0, '2016-04-29 17:43:36', '2016-04-29 17:43:36'),
(17, 'Hair Removal', '', '', 0, 0, '2016-04-29 17:43:36', '2016-04-29 17:43:36'),
(18, 'Bath & Body Accessories', '', '', 0, 0, '2016-04-29 17:43:36', '2016-04-29 17:43:36'),
(19, 'Gifts & Value Sets', '', '', 0, 0, '2016-04-29 17:43:36', '2016-04-29 17:43:36'),
(20, 'Breast Care', '', '', 0, 0, '2016-04-29 17:43:36', '2016-04-29 17:43:36'),
(21, 'Sun Protection', '', '', 0, 0, '2016-04-29 17:43:36', '2016-04-29 17:43:36'),
(22, 'Shampoos & Conditioners', '', '', 0, 0, '2016-04-29 17:43:36', '2016-04-29 17:43:36'),
(23, 'Hair Oils', '', '', 0, 0, '2016-04-29 17:43:36', '2016-04-29 17:43:36'),
(24, 'Hair Coloring', '', '', 0, 0, '2016-04-29 17:43:36', '2016-04-29 17:43:36'),
(25, 'Hair Care Sets', '', '', 0, 0, '2016-04-29 17:43:36', '2016-04-29 17:43:36'),
(26, 'Hair Styling', '', '', 0, 0, '2016-04-29 17:43:36', '2016-04-29 17:43:36'),
(27, 'Hair Treatments', '', '', 0, 0, '2016-04-29 17:43:36', '2016-04-29 17:43:36'),
(28, 'Hair Care Accessories', '', '', 0, 0, '2016-04-29 17:43:36', '2016-04-29 17:43:36'),
(29, 'Gifts & Value Sets', '', '', 0, 0, '2016-04-29 17:43:37', '2016-04-29 17:43:37'),
(30, 'Moisturizers and Cream', '', '', 0, 0, '2016-04-29 17:43:37', '2016-04-29 17:43:37'),
(31, 'Scar Cream', '', '', 0, 0, '2016-04-29 17:43:37', '2016-04-29 17:43:37'),
(32, 'Sunscreen and Aftersun', '', '', 0, 0, '2016-04-29 17:43:37', '2016-04-29 17:43:37'),
(33, 'Toner & Mists', '', '', 0, 0, '2016-04-29 17:43:37', '2016-04-29 17:43:37'),
(34, 'Face Treatments & Serums', '', '', 0, 0, '2016-04-29 17:43:37', '2016-04-29 17:43:37'),
(35, 'Neck & Decollete', '', '', 0, 0, '2016-04-29 17:43:37', '2016-04-29 17:43:37'),
(36, 'Hand & Foot Care', '', '', 0, 0, '2016-04-29 17:43:37', '2016-04-29 17:43:37'),
(37, 'Sunscreen & After Sun', '', '', 0, 0, '2016-04-29 17:43:37', '2016-04-29 17:43:37'),
(38, 'Tanning Oil', '', '', 0, 0, '2016-04-29 17:43:37', '2016-04-29 17:43:37'),
(39, 'Self Tanner', '', '', 0, 0, '2016-04-29 17:43:37', '2016-04-29 17:43:37');

-- --------------------------------------------------------

--
-- Table structure for table `category_category`
--

CREATE TABLE IF NOT EXISTS `category_category` (
  `category_id` int(10) unsigned NOT NULL,
  `category_id1` int(10) unsigned NOT NULL,
  PRIMARY KEY (`category_id`,`category_id1`),
  KEY `category_category_category_id1_foreign` (`category_id1`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_category`
--

INSERT INTO `category_category` (`category_id`, `category_id1`) VALUES
(11, 29),
(11, 30),
(11, 31),
(11, 32),
(11, 33),
(11, 34),
(11, 35),
(21, 36),
(21, 37),
(21, 38),
(21, 39);

-- --------------------------------------------------------

--
-- Table structure for table `category_product`
--

CREATE TABLE IF NOT EXISTS `category_product` (
  `category_id` int(10) unsigned NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`category_id`,`product_id`),
  KEY `category_product_product_id_foreign` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_product`
--

INSERT INTO `category_product` (`category_id`, `product_id`) VALUES
(18, 2),
(3, 3),
(1, 4),
(1, 5),
(5, 5),
(1, 6),
(3, 6),
(5, 6),
(1, 7),
(2, 7),
(3, 7),
(5, 7),
(1, 8),
(2, 8),
(5, 8),
(6, 8),
(1, 9),
(2, 9),
(5, 9),
(1, 10),
(2, 10),
(3, 10),
(5, 10),
(1, 11),
(2, 11),
(3, 11),
(6, 11),
(1, 12),
(2, 12),
(3, 12),
(6, 12),
(2, 13),
(3, 13),
(5, 13),
(6, 13),
(2, 14),
(2, 15),
(2, 16),
(1, 17),
(2, 18),
(3, 19),
(5, 19),
(6, 19),
(2, 20),
(3, 20),
(5, 20),
(6, 20),
(2, 21),
(5, 21),
(6, 21),
(1, 22),
(2, 22),
(3, 22),
(5, 22),
(6, 22),
(7, 22),
(8, 22),
(9, 22),
(10, 22),
(11, 22),
(12, 22),
(13, 22),
(1, 23),
(2, 23),
(3, 23),
(5, 23),
(6, 23),
(8, 23),
(25, 23),
(36, 23),
(38, 23),
(39, 23),
(2, 24),
(3, 24),
(27, 24),
(31, 24),
(33, 24),
(34, 24),
(37, 24),
(38, 24),
(2, 25),
(6, 25),
(30, 25),
(37, 25),
(2, 26),
(5, 26),
(27, 26),
(32, 26),
(33, 26),
(34, 26),
(1, 27),
(1, 28),
(1, 29),
(5, 29),
(6, 29),
(20, 29),
(21, 29),
(23, 29),
(26, 29),
(1, 100000),
(2, 100000),
(3, 100000),
(5, 100000),
(6, 100000),
(7, 100000),
(14, 100000),
(29, 100000),
(31, 100000),
(7, 100001),
(31, 100001),
(33, 100001),
(34, 100001),
(35, 100001),
(37, 100001),
(38, 100001),
(2, 100002),
(5, 100002),
(7, 100002),
(26, 100002),
(3, 100003),
(11, 100003),
(12, 100003),
(15, 100003),
(2, 100004),
(10, 100004),
(13, 100004),
(17, 100004),
(2, 100005),
(6, 100005),
(9, 100005),
(13, 100005),
(2, 100006),
(8, 100006),
(11, 100006),
(2, 100007),
(3, 100007),
(5, 100007),
(6, 100007),
(7, 100007),
(2, 100008),
(7, 100008),
(9, 100008),
(2, 100009);

-- --------------------------------------------------------

--
-- Table structure for table `codes`
--

CREATE TABLE IF NOT EXISTS `codes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `label` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `codes_product_id_foreign` (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=40 ;

--
-- Dumping data for table `codes`
--

INSERT INTO `codes` (`id`, `label`, `product_id`, `created_at`, `updated_at`) VALUES
(2, 'FRPI-2', 2, '2016-04-29 19:58:23', '2016-04-29 19:58:23'),
(3, 'FRPI-3', 3, '2016-04-29 20:07:46', '2016-04-29 20:07:46'),
(4, 'FRPI-4', 4, '2016-04-29 20:11:55', '2016-04-29 20:11:55'),
(5, 'FRPI-5', 5, '2016-04-29 20:15:53', '2016-04-29 20:15:53'),
(6, 'FRPI-6', 6, '2016-04-29 20:20:27', '2016-04-29 20:20:27'),
(7, 'FRPI-7', 7, '2016-04-29 20:25:30', '2016-04-29 20:25:30'),
(8, 'FRPI-8', 8, '2016-04-29 20:29:10', '2016-04-29 20:29:10'),
(9, 'FRPI-9', 9, '2016-04-29 20:33:13', '2016-04-29 20:33:13'),
(10, 'FRPI-A', 10, '2016-04-29 20:36:03', '2016-04-29 20:36:03'),
(11, 'FRPI-B', 11, '2016-04-29 20:43:55', '2016-04-29 20:43:55'),
(12, 'FRPI-C', 12, '2016-04-29 20:46:57', '2016-04-29 20:46:57'),
(13, 'FRPI-D', 13, '2016-04-29 20:50:57', '2016-04-29 20:50:57'),
(14, 'FRPI-E', 14, '2016-04-29 20:54:39', '2016-04-29 20:54:39'),
(15, 'FRPI-F', 15, '2016-04-29 20:57:39', '2016-04-29 20:57:39'),
(16, 'FRPI-G', 16, '2016-04-29 21:00:13', '2016-04-29 21:00:13'),
(17, 'FRPI-H', 17, '2016-04-29 21:02:27', '2016-04-29 21:02:27'),
(18, 'FRPI-I', 18, '2016-04-29 22:39:57', '2016-04-29 22:39:57'),
(19, 'FRPI-J', 19, '2016-04-29 22:56:08', '2016-04-29 22:56:08'),
(20, 'FRPI-K', 20, '2016-04-29 22:59:22', '2016-04-29 22:59:22'),
(21, 'FRPI-L', 21, '2016-04-29 23:01:55', '2016-04-29 23:01:55'),
(22, 'FRPI-M', 22, '2016-04-29 23:11:46', '2016-04-29 23:11:46'),
(23, 'FRPI-N', 23, '2016-04-29 23:16:35', '2016-04-29 23:16:35'),
(24, 'FRPI-O', 24, '2016-04-29 23:20:11', '2016-04-29 23:20:11'),
(25, 'FRPI-P', 25, '2016-04-29 23:25:09', '2016-04-29 23:25:09'),
(26, 'FRPI-Q', 26, '2016-04-29 23:28:24', '2016-04-29 23:28:24'),
(27, 'FRPI-R', 27, '2016-04-29 23:34:07', '2016-04-29 23:34:07'),
(28, 'FRPI-S', 28, '2016-04-29 23:38:25', '2016-04-29 23:38:25'),
(29, 'FRPI-T', 29, '2016-04-30 01:16:46', '2016-04-30 01:16:46'),
(30, 'FRPI-255S', 100000, '2016-05-03 03:46:17', '2016-05-03 03:46:17'),
(31, 'FRPI-255T', 100001, '2016-05-03 04:04:22', '2016-05-03 04:04:22'),
(32, 'FRPI-255U', 100002, '2016-05-03 04:52:08', '2016-05-03 04:52:08'),
(33, 'FRPI-255V', 100003, '2016-05-03 04:57:39', '2016-05-03 04:57:39'),
(34, 'FRPI-255W', 100004, '2016-05-03 05:02:13', '2016-05-03 05:02:13'),
(35, 'FRPI-255X', 100005, '2016-05-03 05:10:03', '2016-05-03 05:10:03'),
(36, 'FRPI-255Y', 100006, '2016-05-03 05:19:25', '2016-05-03 05:19:25'),
(37, 'FRPI-255Z', 100007, '2016-05-03 05:23:05', '2016-05-03 05:23:05'),
(38, 'FRPI-2560', 100008, '2016-05-03 05:34:20', '2016-05-03 05:34:20'),
(39, 'FRPI-2561', 100009, '2016-05-05 04:08:56', '2016-05-05 04:08:56');

-- --------------------------------------------------------

--
-- Table structure for table `customer_groups`
--

CREATE TABLE IF NOT EXISTS `customer_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `label` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sort_order` int(11) NOT NULL,
  `description` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `customer_groups`
--

INSERT INTO `customer_groups` (`id`, `label`, `sort_order`, `description`, `created_at`, `updated_at`) VALUES
(1, 'VIP', 1, '', '2016-05-05 04:15:59', '2016-05-05 04:15:59');

-- --------------------------------------------------------

--
-- Table structure for table `customer_group_discount`
--

CREATE TABLE IF NOT EXISTS `customer_group_discount` (
  `customer_group_id` int(10) unsigned NOT NULL,
  `discount_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`customer_group_id`,`discount_id`),
  KEY `customer_group_discount_discount_id_foreign` (`discount_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer_group_discount`
--

INSERT INTO `customer_group_discount` (`customer_group_id`, `discount_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `tax_price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `minimum_quantity` int(11) NOT NULL,
  `seo_keyword` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_available` date NOT NULL,
  `weight` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `image` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=40 ;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `model`, `price`, `tax_price`, `quantity`, `minimum_quantity`, `seo_keyword`, `date_available`, `weight`, `status`, `image`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'SOAP', 294.00, 'NONE', 100, 10, 'SOAP', '2016-04-30', '0.3', 0, 'images/items/57242cbbef25falpha-arbutin-soap500x500.png', 1, '2016-04-29 19:55:40', '2016-04-29 19:55:40'),
(2, 'SOAP', 294.00, 'NONE', 100, 10, 'SOAP', '2016-04-30', '0.3', 0, 'images/items/57242d5f0c0d1alpha-arbutin-soap500x500.png', 2, '2016-04-29 19:58:23', '2016-04-29 19:58:23'),
(3, 'Clay', 155.00, 'NONE', 10, 1, 'American Clay', '2016-04-30', '0.26', 0, 'images/items/57242f91a53a6american-epic-matt-clay500x500.png', 3, '2016-04-29 20:07:46', '2016-04-29 20:07:46'),
(4, 'Gem Fruit', 250.00, 'NONE', 10, 11, 'Bangkok Face', '2016-04-30', '0.37', 0, 'images/items/5724308a20982bangkok-face-gem-fruit500x500.png', 4, '2016-04-29 20:11:54', '2016-04-29 20:11:54'),
(5, 'Lotus Sparkling mask', 145.00, 'NONE', 10, 1, 'Lotus Sparling Mask', '2016-04-30', '0.4', 0, 'images/items/5724317871bccBangkok-Face-lotus-sparkling-mask-500x500.png', 5, '2016-04-29 20:15:53', '2016-04-29 20:15:53'),
(6, 'Anti Acne Mask', 234.00, 'NONE', 10, 1, 'Acne Mask', '2016-04-30', '0.5', 0, 'images/items/5724328a1a4c0bangkok-face-mangosteen-anti-acne-mask500x500.png', 6, '2016-04-29 20:20:26', '2016-04-29 20:20:26'),
(7, 'Borneo Herbs 3D', 145.00, 'NONE', 10, 1, 'Borneo Herbs 3D', '2016-04-30', '0.5', 0, 'images/items/572433b9c87c1borneo-herbs-3drepair-serum-500x500.png', 7, '2016-04-29 20:25:30', '2016-04-29 20:25:30'),
(8, 'Borneo Herbs gel skrub', 124.00, 'NONE', 10, 10, 'Borneo Herbs gel skrub', '2016-04-30', '0.5', 0, 'images/items/572434955d933borneo-herbs-gel-skrub500x500.png', 8, '2016-04-29 20:29:10', '2016-04-29 20:29:10'),
(9, 'Gel Skrub Collagen', 133.00, 'NONE', 10, 1, 'Borneo Herbs Gel Skrub Collagen', '2016-04-30', '.5', 0, 'images/items/5724358939740borneo-herbs-gel-skrub-collagen500x500.png', 9, '2016-04-29 20:33:13', '2016-04-29 20:33:13'),
(10, 'Borneo Herbs Gel Skrub Mint', 155.00, 'NONE', 10, 1, 'Borneo Herbs Gel Skrub Mint', '2016-04-30', '0.4', 0, 'images/items/572436329f7b3BORNEO-HERBS-GEL-SKRUB-MINT500x500.png', 10, '2016-04-29 20:36:03', '2016-04-29 20:36:03'),
(11, 'Gel Skrub Permutihbadan', 155.00, 'NONE', 10, 1, 'Borneo', '2016-04-30', '0.4', 0, 'images/items/5724380b24bc7borneo-herbs-gel-skrub-pemutih-badan500x500.png', 11, '2016-04-29 20:43:55', '2016-04-29 20:43:55'),
(12, 'Make Remover', 155.00, 'NONE', 10, 1, 'make up', '2016-04-30', '0.8', 0, 'images/items/572438c0e6239borneo-herbs-make-up-remover500x500.png', 12, '2016-04-29 20:46:57', '2016-04-29 20:46:57'),
(13, 'Doll Popstar', 241.00, 'NONE', 10, 1, 'Doll Popstar', '2016-04-30', '0.7', 0, 'images/items/572439b113eb0cathy-doll-popstar500x500.png', 13, '2016-04-29 20:50:57', '2016-04-29 20:50:57'),
(14, 'Cathy Doll Whitening Sunscreen', 155.00, 'NONE', 10, 1, 'Cathy Doll Whitening Sunscreen', '2016-04-30', '0.4', 0, 'images/items/57243a8ee4d25cathy-doll-whitening-sunscreen-500x500.png', 14, '2016-04-29 20:54:39', '2016-04-29 20:54:39'),
(15, 'Cathy Glutathione', 122.00, 'NONE', 10, 1, 'Cathy Glutathione', '2016-04-30', '0.6', 0, 'images/items/57243b42f41a6cathy-glutathione-500x500.png', 15, '2016-04-29 20:57:39', '2016-04-29 20:57:39'),
(16, 'Clarisse Energy Preventol Sanitizer', 244.00, 'NONE', 10, 1, 'Clarisse Energy Preventol Sanitizer', '2016-04-30', '0.3', 0, 'images/items/57243bdc94f5cclarisse-energy-preventol-sanitizer-spray500px.png', 16, '2016-04-29 21:00:12', '2016-04-29 21:00:12'),
(17, 'Clarisse Lemongrass Gel Scrub', 234.00, 'NONE', 10, 1, 'Clarisse Lemongrass Gel Scrub', '2016-04-30', '0.6', 0, 'images/items/57243c62cdffdclarisse-lemongrass-gel-scrub500px.png', 17, '2016-04-29 21:02:27', '2016-04-29 21:02:27'),
(18, 'Funclay', 122.00, 'NONE', 10, 1, 'Professional Funclay', '2016-04-30', '0.4', 0, 'images/items/5724533cb008ben2-professional-funclay-500px.png', 18, '2016-04-29 22:39:57', '2016-04-29 22:39:57'),
(19, 'Japanese Spa Treatment', 54.00, 'NONE', 10, 1, 'Japanese Spa Treatment', '2016-04-30', '0.5', 0, 'images/items/572457076b063japanese-spa-treatment-500px.png', 19, '2016-04-29 22:56:08', '2016-04-29 22:56:08'),
(20, 'Ministar 24', 133.00, 'NONE', 10, 1, 'Ministar 24', '2016-04-30', '0.5', 0, 'images/items/572457ca5c9b7ministar-24-500px.png', 20, '2016-04-29 22:59:22', '2016-04-29 22:59:22'),
(21, 'Natural France Ampoules', 234.00, 'NONE', 10, 1, 'Natural France Ampoules', '2016-04-30', '0.4', 0, 'images/items/57245862a8cbbnatural-france-ampoules500px.png', 21, '2016-04-29 23:01:55', '2016-04-29 23:01:55'),
(22, 'Bem Beauty Energy Mist', 188.00, 'NONE', 10, 1, 'Bem Beauty Energy Mist', '2016-04-30', '0.7', 0, 'images/items/57245ab19a33dbem-beauty-energy-mist.png', 22, '2016-04-29 23:11:46', '2016-04-29 23:11:46'),
(23, 'Anti Wrinkle', 55.00, 'NONE', 10, 1, 'Collagen Anti Wrinkle', '2016-04-30', '0.6', 0, 'images/items/57245bd30e042collagen-anti-wrinkle500px.png', 23, '2016-04-29 23:16:35', '2016-04-29 23:16:35'),
(24, 'Collagen Impact', 42.00, 'NONE', 10, 1, 'Collagen Impact', '2016-04-30', '0.4', 0, 'images/items/57245caa80a86collagen-anti-wrinkle500px.png', 24, '2016-04-29 23:20:11', '2016-04-29 23:20:11'),
(25, 'Ginseng Brightening Essential Mask', 144.00, 'NONE', 10, 1, 'Ginseng Brightening Essential Mask', '2016-04-30', '0.4', 0, 'images/items/57245dd4a9bd6ginseng-brightening-essential-mask.png', 25, '2016-04-29 23:25:09', '2016-04-29 23:25:09'),
(26, 'Cleanse And Flush', 441.00, 'NONE', 10, 1, 'Cleanse And Flush', '2016-04-30', '0.5', 0, 'images/items/57245e9805c2cliquid-cleanse-and-flush-500px.png', 26, '2016-04-29 23:28:24', '2016-04-29 23:28:24'),
(27, 'Music Flower Eyebrow Gel', 144.00, 'NONE', 10, 1, 'Music Flower Eyebrow Gel', '2016-04-30', '0.9', 0, 'images/items/57245feea5da1music-flower-eyebrow-gel.png', 27, '2016-04-29 23:34:07', '2016-04-29 23:34:07'),
(28, 'Music Flower Fascinated Eyebrow Eyeliner ', 111.00, 'NONE', 10, 1, 'Music Flower Fascinated Eyebrow Eyeliner ', '2016-04-30', '0.5', 0, 'images/items/572460f0f3ccbmusic-flower-fascinated-eyebrow-eyeliner-cream-500.png', 28, '2016-04-29 23:38:25', '2016-04-29 23:38:25'),
(29, 'Snail White', 144.00, 'NONE', 10, 1, 'Snail White', '2016-04-30', '0.8', 0, 'images/items/572477fcdee31snail-soap-500px.png', 29, '2016-04-30 01:16:45', '2016-04-30 01:16:45'),
(30, 'Colly Sweet 17', 132.00, 'NONE', 10, 1, 'Colly Sweet 17', '2016-05-03', '0.3', 0, 'images/items/57288f881d157colly-sweet-17-500x500.png', 100000, '2016-05-03 03:46:17', '2016-05-03 03:46:17'),
(31, 'En2 Professional Express Hair Mask', 123.00, 'NONE', 10, 1, 'En2 Professional Express Hair Mask', '2016-05-03', '0,4', 0, 'images/items/572893c51da92en2-professional-express-hair-mask500x500.png', 100001, '2016-05-03 04:04:22', '2016-05-03 04:04:22'),
(32, 'Hermoso Rostro', 144.00, 'NONE', 10, 1, 'Hermoso Rostro', '2016-05-03', '0.4', 0, 'images/items/57289ef744c42hermoso-rostro500px.png', 100002, '2016-05-03 04:52:08', '2016-05-03 04:52:08'),
(33, 'Herbal Coffee', 144.00, 'NONE', 10, 10, 'Coffee Herbal ', '2016-05-03', '0.7', 0, 'images/items/5728a04264376hi-coffee-herbal-instant-coffee-500x500.png', 100003, '2016-05-03 04:57:39', '2016-05-03 04:57:39'),
(34, 'Birds Nest Mask', 123.00, 'NONE', 10, 1, 'Imperial Birds Nest', '2016-05-03', '0.8', 0, 'images/items/5728a15412305imperial-birds-nest-mask.png', 100004, '2016-05-03 05:02:12', '2016-05-03 05:02:12'),
(35, 'Lifting Mask', 144.00, 'NONE', 10, 1, 'Lifting mask', '2016-05-03', '0.5', 0, 'images/items/5728a32a494feleader-mediu-amino-lifting-mask500x500.png', 100005, '2016-05-03 05:10:02', '2016-05-03 05:10:02'),
(36, 'Amino Pore Tight', 102.00, 'NONE', 10, 1, 'Amino Pore Tight Mask', '2016-05-03', '0.5', 0, 'images/items/5728a55d0e9c7leaders-mediu-amino-pore-tight-mask500x500.png', 100006, '2016-05-03 05:19:25', '2016-05-03 05:19:25'),
(37, 'Ministar  Beauty', 144.00, 'NON-TAXABLE GOODS', 10, 1, '', '2016-05-03', '0.6', 0, 'images/items/5728a6385ead0ministar-beauty-long-wear-gel-eyeliner500x500.png', 100007, '2016-05-03 05:23:04', '2016-05-03 05:29:42'),
(38, 'Collagen Essence Mask', 110.00, 'NONE', 10, 1, 'Collagen Essence', '2016-05-03', '0.6', 0, 'images/items/5728a8dc05a8bmu-pore-fresh-aloe-collagen-essence-mask500x500.png', 100008, '2016-05-03 05:34:20', '2016-05-03 05:34:20'),
(39, 'aaaaaa', 133.00, 'NONE', 0, 10, 'aaaa', '2016-05-19', '0.4', 0, 'images/items/572b37d6755f0mu-pore-fresh-aloe-collagen-essence-mask500x500.png', 100009, '2016-05-05 04:08:55', '2016-05-05 04:08:55');

-- --------------------------------------------------------

--
-- Table structure for table `dimensions`
--

CREATE TABLE IF NOT EXISTS `dimensions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `width` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `length` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `height` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `dimensions_data_id_foreign` (`data_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=40 ;

--
-- Dumping data for table `dimensions`
--

INSERT INTO `dimensions` (`id`, `width`, `length`, `height`, `data_id`, `created_at`, `updated_at`) VALUES
(1, '6.5', '8.5', '8.7', 1, '2016-04-29 19:55:40', '2016-04-29 19:55:40'),
(2, '6.5', '8.5', '8.7', 2, '2016-04-29 19:58:23', '2016-04-29 19:58:23'),
(3, '9.5', '9.5', '4.5', 3, '2016-04-29 20:07:46', '2016-04-29 20:07:46'),
(4, '5', '10', '10', 4, '2016-04-29 20:11:54', '2016-04-29 20:11:54'),
(5, '19', '19', '5', 5, '2016-04-29 20:15:53', '2016-04-29 20:15:53'),
(6, '14', '14', '13', 6, '2016-04-29 20:20:26', '2016-04-29 20:20:26'),
(7, '10', '12', '5', 7, '2016-04-29 20:25:30', '2016-04-29 20:25:30'),
(8, '10', '10', '10', 8, '2016-04-29 20:29:10', '2016-04-29 20:29:10'),
(9, '21', '15', '8', 9, '2016-04-29 20:33:13', '2016-04-29 20:33:13'),
(10, '14', '16', '8', 10, '2016-04-29 20:36:03', '2016-04-29 20:36:03'),
(11, '12', '11', '11', 11, '2016-04-29 20:43:55', '2016-04-29 20:43:55'),
(12, '20', '12', '21', 12, '2016-04-29 20:46:57', '2016-04-29 20:46:57'),
(13, '11', '11', '11', 13, '2016-04-29 20:50:57', '2016-04-29 20:50:57'),
(14, '4', '4', '4', 14, '2016-04-29 20:54:39', '2016-04-29 20:54:39'),
(15, '8', '8', '8', 15, '2016-04-29 20:57:39', '2016-04-29 20:57:39'),
(16, '9', '9', '9', 16, '2016-04-29 21:00:13', '2016-04-29 21:00:13'),
(17, '12', '6', '6', 17, '2016-04-29 21:02:27', '2016-04-29 21:02:27'),
(18, '11', '16', '8', 18, '2016-04-29 22:39:57', '2016-04-29 22:39:57'),
(19, '12x', '12', '44', 19, '2016-04-29 22:56:08', '2016-04-29 22:56:08'),
(20, '22', '44', '44', 20, '2016-04-29 22:59:22', '2016-04-29 22:59:22'),
(21, '11', '11', '11', 21, '2016-04-29 23:01:55', '2016-04-29 23:01:55'),
(22, 'none', 'none', 'none', 22, '2016-04-29 23:11:46', '2016-04-29 23:11:46'),
(23, ' ', ' ', ' ', 23, '2016-04-29 23:16:35', '2016-04-29 23:16:35'),
(24, ' ', ' ', ' ', 24, '2016-04-29 23:20:11', '2016-04-29 23:20:11'),
(25, ' ', ' ', ' ', 25, '2016-04-29 23:25:09', '2016-04-29 23:25:09'),
(26, '11', '12', '22', 26, '2016-04-29 23:28:24', '2016-04-29 23:28:24'),
(27, '11', '11', '11', 27, '2016-04-29 23:34:07', '2016-04-29 23:34:07'),
(28, ' ', ' ', ' ', 28, '2016-04-29 23:38:25', '2016-04-29 23:38:25'),
(29, '10', '11', '8', 29, '2016-04-30 01:16:45', '2016-04-30 01:16:45'),
(30, '10', '10', '10', 30, '2016-05-03 03:46:17', '2016-05-03 03:46:17'),
(31, '10', '10', '10', 31, '2016-05-03 04:04:22', '2016-05-03 04:04:22'),
(32, '1', '10', '10', 32, '2016-05-03 04:52:08', '2016-05-03 04:52:08'),
(33, '10', '10', '10', 33, '2016-05-03 04:57:39', '2016-05-03 04:57:39'),
(34, '10', '10', '10', 34, '2016-05-03 05:02:12', '2016-05-03 05:02:12'),
(35, '10', '10', '10', 35, '2016-05-03 05:10:02', '2016-05-03 05:10:02'),
(36, '10', '10', '10', 36, '2016-05-03 05:19:25', '2016-05-03 05:19:25'),
(37, '10', '10', '10', 37, '2016-05-03 05:23:05', '2016-05-03 05:23:05'),
(38, '10', '10', '10', 38, '2016-05-03 05:34:20', '2016-05-03 05:34:20'),
(39, '10', '10', '10', 39, '2016-05-05 04:08:56', '2016-05-05 04:08:56');

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE IF NOT EXISTS `discounts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `quantity` int(11) NOT NULL,
  `priority` int(11) NOT NULL,
  `price` double(8,2) NOT NULL,
  `start_at` date NOT NULL,
  `end_at` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `discounts`
--

INSERT INTO `discounts` (`id`, `quantity`, `priority`, `price`, `start_at`, `end_at`, `created_at`, `updated_at`) VALUES
(1, 10, 1, 144.00, '2016-05-05', '0000-00-00', '2016-05-05 04:16:44', '2016-05-05 04:16:44');

-- --------------------------------------------------------

--
-- Table structure for table `discount_product`
--

CREATE TABLE IF NOT EXISTS `discount_product` (
  `discount_id` int(10) unsigned NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`discount_id`,`product_id`),
  KEY `discount_product_product_id_foreign` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `discount_product`
--

INSERT INTO `discount_product` (`discount_id`, `product_id`) VALUES
(1, 100009);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sort_order` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `path`, `sort_order`, `created_at`, `updated_at`) VALUES
(1, 'images/items/57245df8dcdd2ginseng-brightening-essential-mask2.png', 1, '2016-04-29 23:25:44', '2016-04-29 23:25:44'),
(2, 'images/items/57288fe1a751ccolly-sweet-17-top-500x500.png', 1, '2016-05-03 03:47:45', '2016-05-03 03:47:45');

-- --------------------------------------------------------

--
-- Table structure for table `image_product`
--

CREATE TABLE IF NOT EXISTS `image_product` (
  `image_id` int(10) unsigned NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`image_id`,`product_id`),
  KEY `image_product_product_id_foreign` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `image_product`
--

INSERT INTO `image_product` (`image_id`, `product_id`) VALUES
(1, 25),
(2, 100000);

-- --------------------------------------------------------

--
-- Table structure for table `in_items`
--

CREATE TABLE IF NOT EXISTS `in_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `in_items_product_id_foreign` (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `in_items`
--

INSERT INTO `in_items` (`id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 3, 19, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 10, 12, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 3, 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 15, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `length_classes`
--

CREATE TABLE IF NOT EXISTS `length_classes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `label` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `length_classes_data_id_foreign` (`data_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=40 ;

--
-- Dumping data for table `length_classes`
--

INSERT INTO `length_classes` (`id`, `label`, `data_id`, `created_at`, `updated_at`) VALUES
(1, 'Centimeter', 1, '2016-04-29 19:55:40', '2016-04-29 19:55:40'),
(2, 'Centimeter', 2, '2016-04-29 19:58:23', '2016-04-29 19:58:23'),
(3, 'Centimeter', 3, '2016-04-29 20:07:46', '2016-04-29 20:07:46'),
(4, 'Centimeter', 4, '2016-04-29 20:11:54', '2016-04-29 20:11:54'),
(5, 'Centimeter', 5, '2016-04-29 20:15:53', '2016-04-29 20:15:53'),
(6, 'Centimeter', 6, '2016-04-29 20:20:27', '2016-04-29 20:20:27'),
(7, 'Centimeter', 7, '2016-04-29 20:25:30', '2016-04-29 20:25:30'),
(8, 'Centimeter', 8, '2016-04-29 20:29:10', '2016-04-29 20:29:10'),
(9, 'Centimeter', 9, '2016-04-29 20:33:13', '2016-04-29 20:33:13'),
(10, 'Centimeter', 10, '2016-04-29 20:36:03', '2016-04-29 20:36:03'),
(11, 'Centimeter', 11, '2016-04-29 20:43:55', '2016-04-29 20:43:55'),
(12, 'Centimeter', 12, '2016-04-29 20:46:57', '2016-04-29 20:46:57'),
(13, 'Centimeter', 13, '2016-04-29 20:50:57', '2016-04-29 20:50:57'),
(14, 'Centimeter', 14, '2016-04-29 20:54:39', '2016-04-29 20:54:39'),
(15, 'Centimeter', 15, '2016-04-29 20:57:39', '2016-04-29 20:57:39'),
(16, 'Centimeter', 16, '2016-04-29 21:00:13', '2016-04-29 21:00:13'),
(17, 'Centimeter', 17, '2016-04-29 21:02:27', '2016-04-29 21:02:27'),
(18, 'Centimeter', 18, '2016-04-29 22:39:57', '2016-04-29 22:39:57'),
(19, 'Centimeter', 19, '2016-04-29 22:56:08', '2016-04-29 22:56:08'),
(20, 'Millimeter', 20, '2016-04-29 22:59:22', '2016-04-29 22:59:22'),
(21, 'Centimeter', 21, '2016-04-29 23:01:55', '2016-04-29 23:01:55'),
(22, 'Centimeter', 22, '2016-04-29 23:11:46', '2016-04-29 23:11:46'),
(23, 'Centimeter', 23, '2016-04-29 23:16:35', '2016-04-29 23:16:35'),
(24, 'Centimeter', 24, '2016-04-29 23:20:11', '2016-04-29 23:20:11'),
(25, 'Centimeter', 25, '2016-04-29 23:25:09', '2016-04-29 23:25:09'),
(26, 'Centimeter', 26, '2016-04-29 23:28:24', '2016-04-29 23:28:24'),
(27, 'Centimeter', 27, '2016-04-29 23:34:07', '2016-04-29 23:34:07'),
(28, 'Centimeter', 28, '2016-04-29 23:38:25', '2016-04-29 23:38:25'),
(29, 'Centimeter', 29, '2016-04-30 01:16:46', '2016-04-30 01:16:46'),
(30, 'Centimeter', 30, '2016-05-03 03:46:17', '2016-05-03 03:46:17'),
(31, 'Centimeter', 31, '2016-05-03 04:04:22', '2016-05-03 04:04:22'),
(32, 'Centimeter', 32, '2016-05-03 04:52:08', '2016-05-03 04:52:08'),
(33, 'Centimeter', 33, '2016-05-03 04:57:39', '2016-05-03 04:57:39'),
(34, 'Centimeter', 34, '2016-05-03 05:02:12', '2016-05-03 05:02:12'),
(35, 'Centimeter', 35, '2016-05-03 05:10:03', '2016-05-03 05:10:03'),
(36, 'Centimeter', 36, '2016-05-03 05:19:25', '2016-05-03 05:19:25'),
(37, 'Inches', 37, '2016-05-03 05:23:05', '2016-05-03 05:24:56'),
(38, 'Centimeter', 38, '2016-05-03 05:34:20', '2016-05-03 05:34:20'),
(39, 'Millimeter', 39, '2016-05-05 04:08:56', '2016-05-05 04:08:56');

-- --------------------------------------------------------

--
-- Table structure for table `manufactures`
--

CREATE TABLE IF NOT EXISTS `manufactures` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `seo_keyword` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sort_order` int(11) NOT NULL,
  `image` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `manufactures`
--

INSERT INTO `manufactures` (`id`, `name`, `seo_keyword`, `sort_order`, `image`, `created_at`, `updated_at`) VALUES
(1, 'FRPI', 'FRPI', 1, '', '2016-04-29 18:07:18', '2016-04-29 18:07:18');

-- --------------------------------------------------------

--
-- Table structure for table `manufacture_product`
--

CREATE TABLE IF NOT EXISTS `manufacture_product` (
  `manufacture_id` int(10) unsigned NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`manufacture_id`,`product_id`),
  KEY `manufacture_product_product_id_foreign` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `manufacture_product`
--

INSERT INTO `manufacture_product` (`manufacture_id`, `product_id`) VALUES
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 22),
(1, 23),
(1, 24),
(1, 25),
(1, 26),
(1, 27),
(1, 28),
(1, 29),
(1, 100000),
(1, 100001),
(1, 100002),
(1, 100003),
(1, 100004),
(1, 100005),
(1, 100006),
(1, 100007),
(1, 100008),
(1, 100009);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_04_22_041847_create_attr_groups_table', 1),
('2016_04_22_041946_create_manufactures_table', 1),
('2016_04_22_042106_create_attributes_table', 1),
('2016_04_22_042133_create_reviews_table', 1),
('2016_04_22_042245_create_discounts_table', 1),
('2016_04_22_042317_create_customer_groups_table', 1),
('2016_04_22_042400_create_tags_table', 1),
('2016_04_22_042440_create_data_table', 1),
('2016_04_22_042543_create_images_table', 1),
('2016_04_22_050700_create_dimensions_table', 1),
('2016_04_22_050952_create_weight_classes_table', 1),
('2016_04_22_051049_create_lenght_classes_table', 1),
('2016_04_22_111414_create_products_table', 1),
('2016_04_22_113008_create_categories_table', 1),
('2016_04_22_235415_create_codes_table', 1),
('2016_04_23_044900_ManyToMany', 1),
('2016_04_27_034425_create_transactions_table', 1),
('2016_04_27_041045_create_store_items_table', 1),
('2016_04_28_115452_create_table_rates', 1),
('2016_04_29_012700_category_category', 1),
('2016_05_02_155742_create_in_items_table', 2),
('2016_05_02_165823_create_out_items_table', 2),
('2016_05_02_171833_create_table_inOutItem', 3),
('2016_05_03_105617_create_update_id', 4);

-- --------------------------------------------------------

--
-- Table structure for table `out_items`
--

CREATE TABLE IF NOT EXISTS `out_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `out_items_product_id_foreign` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `meta_tag_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_tag_description` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `meta_tag_keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=100010 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `meta_tag_title`, `meta_tag_description`, `meta_tag_keywords`, `created_at`, `updated_at`) VALUES
(2, 'Alpha Arbutin Soap', '<ul><li>​Whitening Bar</li><li>Formulated with orange peel extract and L-glutathione</li><li>Dermatologist tested</li><li>Exfoliates dry, dull skin</li><li>Lightens freckles and dark spots</li><li>Brightens overall skin tone</li></ul>', 'Alpha Arbutin Soap', '', '', '2016-04-29 19:58:23', '2016-04-29 19:58:23'),
(3, 'American Epic Matt Clay', '<ul><li>Body cream</li><li>Whipped cream like, non-sticky lightening cream</li><li>Presents instant brightening effect</li><li>Helps nourish the skin</li><li>Enhances the skin&#39;s natural protective barrier leaving the skin moisturized</li><li>Helps protect the skin from UVA &amp; UVB rays</li><li>For all skin types</li></ul>', 'American Epic Matt Clay', '', '', '2016-04-29 20:07:45', '2016-04-29 20:07:45'),
(4, 'Bangkok Face Gem Fruit', '<ul><li>Intense moisturizer for extra rough skin like heels, elbows and knees</li><li>Light and non-sticky</li><li>For all skin types</li><li>With 100% snail slime</li></ul>', 'Bangkok Face Gem Fruit', '', '', '2016-04-29 20:11:54', '2016-04-29 20:11:54'),
(5, 'Bangkok Face Lotus Sparkling Mask', '<p>Soothes and cleanses, leaves skin smooth and softMild, soap-free formula cleanses without irritationDoes not strip skin of its natural</p>', 'Bangkok Face Lotus', '', '', '2016-04-29 20:15:52', '2016-04-29 20:15:52'),
(6, 'Bangkok Face Mangosteen Anti Acne Mask', '<p>Combined synergy of 90% black snail mucus filtrate and 27 black plant extracts Creates a cream that takes care of any and all skin types</p>', 'Bangkok Face Mangosteen Anti Mask', '', '', '2016-04-29 20:20:26', '2016-04-29 20:20:26'),
(7, 'Borneo Herbs 3d Repair Serum', '<p>With 92% snail mucus extract Anti-aging, fine wrinkle, blemish, acne scar, and pore care Creates elastic, bouncy, bright, and healthy skin&hellip;</p>', 'Borneo Herbs 3D Repair', '', '', '2016-04-29 20:25:29', '2016-04-29 20:25:29'),
(8, 'Borneo Herbs gel skrub', '<ul><li>With 92% snail mucus extract</li><li>Anti-aging, fine wrinkle, blemish, acne scar, and pore care</li><li>Creates elastic, bouncy, bright, and healthy skin</li><li>Contains snail mucus filtrate, adenosine, peptides, and vitamin 5 certified for anti-aging effect</li><li>Apply sparingly to face and neck after facial wash by tapping into the skin</li></ul>', 'Borneo Herbs gel skrub', '', '', '2016-04-29 20:29:09', '2016-04-29 20:29:09'),
(9, 'Borneo Herbs Gel Skrub Collagen', '<ul><li>With 92% snail mucus extract</li><li>Anti-aging, fine wrinkle, blemish, acne scar, and pore care</li><li>Creates elastic, bouncy, bright, and healthy skin</li><li>Contains snail mucus filtrate, adenosine, peptides, and vitamin 5 certified for anti-aging effect</li><li>Apply sparingly to face and neck after facial wash by tapping into the skin</li></ul>', 'Borneo Herbs Gel Skrub Collagen', '', '', '2016-04-29 20:33:13', '2016-04-29 20:33:13'),
(10, 'Borneo Herbs Gel Skrub Mint', '<ul><li>With 92% snail mucus extract</li><li>Anti-aging, fine wrinkle, blemish, acne scar, and pore care</li><li>Creates elastic, bouncy, bright, and healthy skin</li><li>Contains snail mucus filtrate, adenosine, peptides, and vitamin 5 certified for anti-aging effect</li><li>Apply sparingly to face and neck after facial wash by tapping into the skin</li></ul>', 'Borneo Herbs Gel Skrub Mint', '', '', '2016-04-29 20:36:02', '2016-04-29 20:36:02'),
(11, 'Borneo Herbs Gel Skrub Pemutihbadan', '<ul><li>With 92% snail mucus extract</li><li>Anti-aging, fine wrinkle, blemish, acne scar, and pore care</li><li>Creates elastic, bouncy, bright, and healthy skin</li><li>Contains snail mucus filtrate, adenosine, peptides, and vitamin 5 certified for anti-aging effect</li><li>Apply sparingly to face and neck after facial wash by tapping into the skin</li></ul>', 'Borneo Herbs Gel Skrub Pemutihbadan', '', '', '2016-04-29 20:43:55', '2016-04-29 20:43:55'),
(12, 'Borneo Herbs Make up Remover', '<ul><li>With 92% snail mucus extract</li><li>Anti-aging, fine wrinkle, blemish, acne scar, and pore care</li><li>Creates elastic, bouncy, bright, and healthy skin</li><li>Contains snail mucus filtrate, adenosine, peptides, and vitamin 5 certified for anti-aging effect</li><li>Apply sparingly to face and neck after facial wash by tapping into the skin</li></ul>', 'Borneo Herbs Make up Remover', '', '', '2016-04-29 20:46:56', '2016-04-29 20:46:56'),
(13, 'Cathy Doll Popstar', '<ul><li>With 92% snail mucus extract</li><li>Anti-aging, fine wrinkle, blemish, acne scar, and pore care</li><li>Creates elastic, bouncy, bright, and healthy skin</li><li>Contains snail mucus filtrate, adenosine, peptides, and vitamin 5 certified for anti-aging effect</li><li>Apply sparingly to face and neck after facial wash by tapping into the skin</li></ul>', 'Cathy Doll Whitening Sunscreen', '', '', '2016-04-29 20:50:57', '2016-04-29 20:50:57'),
(14, 'Cathy Doll Whitening Sunscreen', '<ul><li>With 92% snail mucus extract</li><li>Anti-aging, fine wrinkle, blemish, acne scar, and pore care</li><li>Creates elastic, bouncy, bright, and healthy skin</li><li>Contains snail mucus filtrate, adenosine, peptides, and vitamin 5 certified for anti-aging effect</li><li>Apply sparingly to face and neck after facial wash by tapping into the skin</li></ul>', 'Cathy Doll Whitening Sunscreen', '', '', '2016-04-29 20:54:38', '2016-04-29 20:54:38'),
(15, 'Cathy Glutathione', '<ul><li>With 92% snail mucus extract</li><li>Anti-aging, fine wrinkle, blemish, acne scar, and pore care</li><li>Creates elastic, bouncy, bright, and healthy skin</li><li>Contains snail mucus filtrate, adenosine, peptides, and vitamin 5 certified for anti-aging effect</li><li>Apply sparingly to face and neck after facial wash by tapping into the skin</li></ul>', 'Cathy Glutathione', '', '', '2016-04-29 20:57:39', '2016-04-29 20:57:39'),
(16, 'Clarisse Energy Preventol Sanitizer', '<ul><li>With 92% snail mucus extract</li><li>Anti-aging, fine wrinkle, blemish, acne scar, and pore care</li><li>Creates elastic, bouncy, bright, and healthy skin</li><li>Contains snail mucus filtrate, adenosine, peptides, and vitamin 5 certified for anti-aging effect</li><li>Apply sparingly to face and neck after facial wash by tapping into the skin</li></ul>', 'Clarisse Energy Preventol Sanitizer', '', '', '2016-04-29 21:00:12', '2016-04-29 21:00:12'),
(17, 'Clarisse Lemongrass Gel Scrub', '<ul><li>With 92% snail mucus extract</li><li>Anti-aging, fine wrinkle, blemish, acne scar, and pore care</li><li>Creates elastic, bouncy, bright, and healthy skin</li><li>Contains snail mucus filtrate, adenosine, peptides, and vitamin 5 certified for anti-aging effect</li><li>Apply sparingly to face and neck after facial wash by tapping into the skin</li></ul>', 'Clarisse Lemongrass Gel Scrub', '', '', '2016-04-29 21:02:26', '2016-04-29 21:02:26'),
(18, 'Professional Funclay', '<ul><li>Body cream</li><li>Whipped cream like, non-sticky lightening cream</li><li>Presents instant brightening effect</li><li>Helps nourish the skin</li><li>Enhances the skin&#39;s natural protective barrier leaving the skin moisturized</li><li>Helps protect the skin from UVA &amp; UVB rays</li><li>For all skin types</li></ul>', 'Professional Funclay', '', '', '2016-04-29 22:39:56', '2016-04-29 22:39:56'),
(19, 'Japanese Spa Treatment', '<ul><li>Body cream</li><li>Whipped cream like, non-sticky lightening cream</li><li>Presents instant brightening effect</li><li>Helps nourish the skin</li><li>Enhances the skin&#39;s natural protective barrier leaving the skin moisturized</li><li>Helps protect the skin from UVA &amp; UVB rays</li><li>For all skin types</li></ul>', 'Japanese Spa Treatment', '', '', '2016-04-29 22:56:07', '2016-04-29 22:56:07'),
(20, 'Ministar 24', '<ul><li>Body cream</li><li>Whipped cream like, non-sticky lightening cream</li><li>Presents instant brightening effect</li><li>Helps nourish the skin</li><li>Enhances the skin&#39;s natural protective barrier leaving the skin moisturized</li><li>Helps protect the skin from UVA &amp; UVB rays</li><li>For all skin types</li></ul>', 'Ministar 24', '', '', '2016-04-29 22:59:22', '2016-04-29 22:59:22'),
(21, 'Natural France Ampoules', '<ul><li>Body cream</li><li>Whipped cream like, non-sticky lightening cream</li><li>Presents instant brightening effect</li><li>Helps nourish the skin</li><li>Enhances the skin&#39;s natural protective barrier leaving the skin moisturized</li><li>Helps protect the skin from UVA &amp; UVB rays</li><li>For all skin types</li></ul>', 'Natural France Ampoules', '', '', '2016-04-29 23:01:54', '2016-04-29 23:01:54'),
(22, 'Bem Beauty Energy Mist', '<ul><li>Peeling Oil</li><li>Remove and slough off the outer layer of the dermis</li><li>Whitening</li><li>Anti-aging</li></ul>', 'Bem Beauty Energy Mist', '', '', '2016-04-29 23:11:45', '2016-04-29 23:11:45'),
(23, 'Collagen Anti Wrinkle', '<ul><li>Peeling Oil</li><li>Remove and slough off the outer layer of the dermis</li><li>Whitening</li><li>Anti-aging</li></ul>', 'Collagen Anti Wrinkle', '', '', '2016-04-29 23:16:35', '2016-04-29 23:16:35'),
(24, 'Collagen Impact ', '<ul><li>Exfoliating: Volcanic ash pulls excess oils and toxins from the skin while Japanese adzuki bean powder gently exfoliates to remove dead skin cells and ingrown hairs that can clog pores</li><li>Toning: Rice bran is an ancient Japanese secret for smooth, soft skin</li><li>It is said to prevent wrinkles, quickly heal blemishes, absorb dirt and oil from pores, balance the natural oils in the skin, and moisturize</li><li>Balancing: Vitamin A and vitamin E balance the skin&#39; s PH to promote elasticity and reduce the formation of fine lines and wrinkles</li></ul>', 'Collagen Impact ', '', '', '2016-04-29 23:20:10', '2016-04-29 23:20:10'),
(25, 'Ginseng Brightening Essential Mask', '<ul><li>Anti-aging</li><li>Lifts sagging skin&nbsp;</li><li>Sunblock</li><li>Protect skin from sunburn</li><li>Anti-wrinkles</li><li>30ml</li></ul>', 'Ginseng Brightening Essential Mask', '', '', '2016-04-29 23:25:08', '2016-04-29 23:25:08'),
(26, 'Liquid Cleanse And Flush', '<ul><li>Protects skin against harmful UV Rays</li><li>Sunblock Gel for Oily Skin (SPF15)</li><li>BFAD Approved and Dermatologists Tested</li></ul>', 'Cleanse And Flush', '', '', '2016-04-29 23:28:24', '2016-04-29 23:28:24'),
(27, 'Music Flower Eyebrow Gel', '<ul><li>Treats Acne/Pimple</li><li>Prevents complications of Acne</li><li>BFAD Approved and Dermatologists Tested Cleanses deep seated dirt</li></ul>', 'Music Flower Eyebrow Gel', '', '', '2016-04-29 23:34:06', '2016-04-29 23:34:06'),
(28, 'Music Flower Fascinated Eyebrow Eyeliner ', '<ul><li>Treats Acne/Pimple</li><li>Prevents complications of Acne</li><li>BFAD Approved and Dermatologists Tested Cleanses deep seated dirt</li></ul>', 'Music Flower Fascinated Eyebrow Eyeliner ', '', '', '2016-04-29 23:38:25', '2016-04-29 23:38:25'),
(29, 'Snail White', '<ul><li>Treats Acne/Pimple</li><li>Prevents complications of Acne</li><li>BFAD Approved and Dermatologists Tested Cleanses deep seated dirt</li></ul>', 'Snail White', '', '', '2016-04-30 01:16:44', '2016-04-30 01:16:44'),
(100000, 'Colly Sweet 17', '<ul><li>​Whitening Bar</li><li>Formulated with orange peel extract and L-glutathione</li><li>Dermatologist tested</li><li>Exfoliates dry, dull skin</li><li>Lightens freckles and dark spots</li><li>Brightens overall skin tone</li></ul>', 'Colly Sweet 17', '', '', '2016-05-03 03:46:16', '2016-05-03 03:46:16'),
(100001, 'En2 Professional Express Hair Mask', '<ul><li>​Whitening Bar</li><li>Formulated with orange peel extract and L-glutathione</li><li>Dermatologist tested</li><li>Exfoliates dry, dull skin</li><li>Lightens freckles and dark spots</li><li>Brightens overall skin tone</li></ul>', 'En2 Professional Express Hair Mask', '', '', '2016-05-03 04:04:21', '2016-05-03 04:04:21'),
(100002, 'Hermoso Rostro', '<ul><li>​Whitening Bar</li><li>Formulated with orange peel extract and L-glutathione</li><li>Dermatologist tested</li><li>Exfoliates dry, dull skin</li><li>Lightens freckles and dark spots</li><li>Brightens overall skin tone</li></ul>', 'Hermosa Rostro', '', '', '2016-05-03 04:52:07', '2016-05-03 04:52:07'),
(100003, 'Hi Coffe herbal Instant Coffee', '<ul><li>​Whitening Bar</li><li>Formulated with orange peel extract and L-glutathione</li><li>Dermatologist tested</li><li>Exfoliates dry, dull skin</li><li>Lightens freckles and dark spots<ul><li>Brightens overall skin tone</li></ul></li></ul>', 'Hi Coffee Herbal Instant Coffee', '', '', '2016-05-03 04:57:38', '2016-05-03 04:57:38'),
(100004, 'Imperial Birds Nest Mask', '<ul><li>​Whitening Bar</li><li>Formulated with orange peel extract and L-glutathione</li><li>Dermatologist tested</li><li>Exfoliates dry, dull skin</li><li>Lightens freckles and dark spots</li><li>Brightens overall skin tone</li></ul>', 'Imperial Birds Nest Mask', '', '', '2016-05-03 05:02:12', '2016-05-03 05:02:12'),
(100005, 'Leader Mediu Amino Lifting mask', '<ul><li>​Whitening Bar</li><li>Formulated with orange peel extract and L-glutathione</li><li>Dermatologist tested</li><li>Exfoliates dry, dull skin</li><li>Lightens freckles and dark spots</li><li>Brightens overall skin tone</li></ul>', 'Leader Mediu Amino Lifting Mask', '', '', '2016-05-03 05:10:02', '2016-05-03 05:10:02'),
(100006, 'Leaders Mediu Amino Pore Tight Mask', '<ul><li>​Whitening Bar</li><li>Formulated with orange peel extract and L-glutathione</li><li>Dermatologist tested</li><li>Exfoliates dry, dull skin</li><li>Lightens freckles and dark spots</li><li>Brightens overall skin tone</li></ul>', 'Pore Tight Mask', '', '', '2016-05-03 05:19:25', '2016-05-03 05:19:25'),
(100007, 'Ministar Beauty Long Wear Gel Eyeliners', '<ul><li>​Whitening Bar</li><li>Formulated with orange peel extract and L-glutathione</li><li>Dermatologist tested</li><li>Exfoliates dry, dull skin</li><li>Lightens freckles and dark spots</li><li>Brightens overall skin tone</li></ul>', 'Ministar Beauty Long Wear Gel Eyeliner', '', '', '2016-05-03 05:23:04', '2016-05-03 05:24:56'),
(100008, 'Mu Pore Fresh Aloe Collagen Essence Mask', '<ul><li>​Whitening Bar</li><li>Formulated with orange peel extract and L-glutathione</li><li>Dermatologist tested</li><li>Exfoliates dry, dull skin</li><li>Lightens freckles and dark spots</li><li>Brightens overall skin tone</li></ul>', 'Mu Pore Fresh Aloe Collagen Essence Mask', '', '', '2016-05-03 05:34:20', '2016-05-03 05:34:20'),
(100009, 'test', '<p>afasf asd</p>', 'test', '', '', '2016-05-05 04:08:54', '2016-05-05 04:08:54');

-- --------------------------------------------------------

--
-- Table structure for table `products_products`
--

CREATE TABLE IF NOT EXISTS `products_products` (
  `product_id` int(10) unsigned NOT NULL,
  `product_id1` int(10) unsigned NOT NULL,
  PRIMARY KEY (`product_id`,`product_id1`),
  KEY `products_products_product_id1_foreign` (`product_id1`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products_products`
--

INSERT INTO `products_products` (`product_id`, `product_id1`) VALUES
(2, 3),
(2, 4),
(3, 4),
(2, 5),
(3, 5),
(4, 5),
(2, 6),
(3, 6),
(4, 6),
(5, 6),
(2, 7),
(3, 7),
(4, 7),
(6, 7),
(4, 8),
(5, 8),
(6, 8),
(7, 8),
(3, 9),
(4, 9),
(5, 9),
(7, 9),
(3, 10),
(4, 10),
(6, 10),
(8, 10),
(4, 11),
(5, 11),
(7, 11),
(3, 12),
(4, 12),
(5, 12),
(6, 12),
(3, 13),
(4, 13),
(5, 13),
(7, 13),
(5, 14),
(6, 14),
(3, 15),
(4, 15),
(5, 15),
(6, 15),
(2, 16),
(3, 16),
(5, 16),
(7, 16),
(3, 17),
(4, 17),
(5, 17),
(6, 17),
(2, 18),
(3, 18),
(4, 18),
(6, 18),
(4, 19),
(5, 19),
(6, 19),
(7, 19),
(3, 20),
(4, 20),
(5, 20),
(6, 20),
(3, 21),
(5, 21),
(6, 21),
(8, 21),
(2, 22),
(3, 22),
(4, 22),
(5, 22),
(6, 22),
(8, 22),
(11, 22),
(18, 22),
(20, 22),
(3, 23),
(6, 23),
(21, 23),
(22, 23),
(3, 24),
(5, 24),
(6, 24),
(15, 24),
(3, 25),
(4, 25),
(6, 25),
(22, 25),
(4, 26),
(7, 26),
(21, 26),
(23, 26),
(4, 27),
(5, 27),
(6, 27),
(5, 28),
(6, 28),
(7, 28),
(5, 29),
(7, 29),
(23, 29),
(25, 29),
(3, 100000),
(5, 100000),
(6, 100000),
(7, 100000),
(4, 100001),
(5, 100001),
(27, 100001),
(28, 100001),
(4, 100002),
(5, 100002),
(6, 100002),
(7, 100002),
(4, 100003),
(6, 100003),
(12, 100003),
(17, 100003),
(7, 100004),
(11, 100004),
(16, 100004),
(100001, 100004),
(5, 100005),
(19, 100005),
(26, 100005),
(100004, 100005),
(5, 100006),
(8, 100006),
(9, 100006),
(4, 100007),
(5, 100007),
(6, 100007),
(7, 100007),
(4, 100008),
(5, 100008),
(8, 100008),
(14, 100008),
(4, 100009),
(6, 100009);

-- --------------------------------------------------------

--
-- Table structure for table `product_review`
--

CREATE TABLE IF NOT EXISTS `product_review` (
  `product_id` int(10) unsigned NOT NULL,
  `review_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`product_id`,`review_id`),
  KEY `product_review_review_id_foreign` (`review_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_review`
--

INSERT INTO `product_review` (`product_id`, `review_id`) VALUES
(2, 1),
(3, 2),
(4, 3),
(5, 4),
(6, 5),
(7, 6),
(8, 7),
(9, 8),
(10, 9),
(11, 10),
(12, 11),
(13, 12),
(14, 13),
(15, 14),
(16, 15),
(17, 16),
(18, 17),
(19, 18),
(20, 19),
(21, 20),
(22, 21),
(23, 22),
(24, 23),
(25, 24),
(26, 25),
(27, 26),
(28, 27),
(29, 28),
(100000, 100000),
(100001, 100001),
(100002, 100002),
(100003, 100003),
(100004, 100004),
(100005, 100005),
(100006, 100006),
(100007, 100007),
(100008, 100008),
(100009, 100009);

-- --------------------------------------------------------

--
-- Table structure for table `product_stores`
--

CREATE TABLE IF NOT EXISTS `product_stores` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned NOT NULL,
  `transaction_id` int(10) unsigned NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `product_stores_product_id_foreign` (`product_id`),
  KEY `product_stores_transaction_id_foreign` (`transaction_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Dumping data for table `product_stores`
--

INSERT INTO `product_stores` (`id`, `product_id`, `transaction_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 17, 1, 1, '2016-04-29 22:41:14', '2016-04-29 22:41:14'),
(2, 20, 1, 1, '2016-04-30 00:46:07', '2016-04-30 00:46:07'),
(3, 23, 2, 1, '2016-04-30 02:32:36', '2016-04-30 02:32:36'),
(4, 26, 3, 1, '2016-04-30 02:50:20', '2016-04-30 02:50:20'),
(5, 26, 3, 1, '2016-04-30 02:50:32', '2016-04-30 02:50:32'),
(6, 2, 3, 1, '2016-04-30 03:08:49', '2016-04-30 03:08:49'),
(7, 5, 4, 4, '2016-04-30 03:10:17', '2016-04-30 03:10:47'),
(8, 24, 4, 2, '2016-04-30 03:11:02', '2016-04-30 03:11:17'),
(9, 2, 5, 1, '2016-04-30 04:17:13', '2016-04-30 04:17:13'),
(10, 9, 5, 1, '2016-04-30 04:17:37', '2016-04-30 04:17:37'),
(11, 10, 6, 14, '2016-04-30 05:53:46', '2016-04-30 05:54:15'),
(12, 11, 6, 1, '2016-04-30 05:54:49', '2016-04-30 05:54:49'),
(13, 13, 7, 1, '2016-04-30 11:48:10', '2016-04-30 11:48:10'),
(14, 3, 7, 1, '2016-04-30 11:56:18', '2016-04-30 11:56:18');

-- --------------------------------------------------------

--
-- Table structure for table `product_tag`
--

CREATE TABLE IF NOT EXISTS `product_tag` (
  `product_id` int(10) unsigned NOT NULL,
  `tag_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`product_id`,`tag_id`),
  KEY `product_tag_tag_id_foreign` (`tag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_tag`
--

INSERT INTO `product_tag` (`product_id`, `tag_id`) VALUES
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(13, 1),
(14, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(26, 1),
(27, 1),
(29, 1),
(100000, 1),
(100001, 1),
(100003, 1),
(100005, 1),
(3, 2),
(4, 2),
(5, 2),
(6, 2),
(7, 2),
(8, 2),
(9, 2),
(10, 2),
(11, 2),
(12, 2),
(13, 2),
(14, 2),
(15, 2),
(16, 2),
(17, 2),
(18, 2),
(19, 2),
(20, 2),
(21, 2),
(22, 2),
(23, 2),
(24, 2),
(25, 2),
(26, 2),
(27, 2),
(29, 2),
(100000, 2),
(100001, 2),
(100002, 2),
(100003, 2),
(100004, 2),
(100005, 2),
(100007, 2),
(100008, 2),
(100009, 2),
(7, 3),
(8, 3),
(9, 3),
(11, 3),
(12, 3),
(13, 3),
(14, 3),
(15, 3),
(16, 3),
(18, 3),
(19, 3),
(20, 3),
(21, 3),
(22, 3),
(23, 3),
(24, 3),
(25, 3),
(26, 3),
(27, 3),
(29, 3),
(100000, 3),
(100002, 3),
(100006, 3),
(100007, 3),
(100008, 3),
(100009, 3),
(2, 4),
(6, 4),
(8, 4),
(9, 4),
(10, 4),
(11, 4),
(12, 4),
(15, 4),
(17, 4),
(19, 4),
(21, 4),
(22, 4),
(23, 4),
(24, 4),
(25, 4),
(26, 4),
(27, 4),
(28, 4),
(29, 4),
(100000, 4),
(100003, 4),
(100004, 4),
(100006, 4);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE IF NOT EXISTS `ratings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `score` int(11) NOT NULL,
  `review_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `ratings_review_id_foreign` (`review_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=39 ;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `score`, `review_id`, `created_at`, `updated_at`) VALUES
(1, 4, 1, '2016-04-29 19:58:23', '2016-04-29 19:58:23'),
(2, 4, 2, '2016-04-29 20:07:46', '2016-04-29 20:07:46'),
(3, 4, 3, '2016-04-29 20:11:55', '2016-04-29 20:11:55'),
(4, 4, 4, '2016-04-29 20:15:53', '2016-04-29 20:15:53'),
(5, 4, 5, '2016-04-29 20:20:27', '2016-04-29 20:20:27'),
(6, 4, 6, '2016-04-29 20:25:30', '2016-04-29 20:25:30'),
(7, 4, 7, '2016-04-29 20:29:10', '2016-04-29 20:29:10'),
(8, 4, 8, '2016-04-29 20:33:14', '2016-04-29 20:33:14'),
(9, 4, 9, '2016-04-29 20:36:03', '2016-04-29 20:36:03'),
(10, 4, 10, '2016-04-29 20:43:56', '2016-04-29 20:43:56'),
(11, 4, 11, '2016-04-29 20:46:57', '2016-04-29 20:46:57'),
(12, 4, 12, '2016-04-29 20:50:57', '2016-04-29 20:50:57'),
(13, 4, 13, '2016-04-29 20:54:39', '2016-04-29 20:54:39'),
(14, 4, 14, '2016-04-29 20:57:39', '2016-04-29 20:57:39'),
(15, 4, 15, '2016-04-29 21:00:13', '2016-04-29 21:00:13'),
(16, 4, 16, '2016-04-29 21:02:27', '2016-04-29 21:02:27'),
(17, 4, 17, '2016-04-29 22:39:57', '2016-04-29 22:39:57'),
(18, 4, 18, '2016-04-29 22:56:08', '2016-04-29 22:56:08'),
(19, 4, 19, '2016-04-29 22:59:23', '2016-04-29 22:59:23'),
(20, 4, 20, '2016-04-29 23:01:55', '2016-04-29 23:01:55'),
(21, 4, 21, '2016-04-29 23:11:46', '2016-04-29 23:11:46'),
(22, 2, 22, '2016-04-29 23:16:36', '2016-04-29 23:16:36'),
(23, 4, 23, '2016-04-29 23:20:11', '2016-04-29 23:20:11'),
(24, 4, 24, '2016-04-29 23:25:09', '2016-04-29 23:25:09'),
(25, 4, 25, '2016-04-29 23:28:25', '2016-04-29 23:28:25'),
(26, 4, 26, '2016-04-29 23:34:07', '2016-04-29 23:34:07'),
(27, 4, 27, '2016-04-29 23:38:25', '2016-04-29 23:38:25'),
(28, 4, 28, '2016-04-30 01:16:46', '2016-04-30 01:16:46'),
(29, 4, 100000, '2016-05-03 03:46:18', '2016-05-03 03:46:18'),
(30, 4, 100001, '2016-05-03 04:04:22', '2016-05-03 04:04:22'),
(31, 4, 100002, '2016-05-03 04:52:09', '2016-05-03 04:52:09'),
(32, 4, 100003, '2016-05-03 04:57:39', '2016-05-03 04:57:39'),
(33, 4, 100004, '2016-05-03 05:02:13', '2016-05-03 05:02:13'),
(34, 4, 100005, '2016-05-03 05:10:03', '2016-05-03 05:10:03'),
(35, 4, 100006, '2016-05-03 05:19:25', '2016-05-03 05:19:25'),
(36, 4, 100007, '2016-05-03 05:23:05', '2016-05-03 05:23:05'),
(37, 4, 100008, '2016-05-03 05:34:20', '2016-05-03 05:34:20'),
(38, 4, 100009, '2016-05-05 04:08:57', '2016-05-05 04:08:57');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(1500) COLLATE utf8_unicode_ci NOT NULL,
  `ratings` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `image` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=100010 ;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `author`, `text`, `ratings`, `status`, `image`, `title`, `created_at`, `updated_at`, `product_id`) VALUES
(1, 'Author', 'This is good Item', 4, 0, '/assets/images/user.png', '', '2016-04-29 19:58:23', '2016-04-29 19:58:23', 2),
(2, 'Author', 'This is good Item', 4, 0, '/assets/images/user.png', '', '2016-04-29 20:07:46', '2016-04-29 20:07:46', 3),
(3, 'Author', 'This is good Item', 4, 0, '/assets/images/user.png', '', '2016-04-29 20:11:55', '2016-04-29 20:11:55', 4),
(4, 'Author', 'This is good Item', 4, 0, '/assets/images/user.png', '', '2016-04-29 20:15:53', '2016-04-29 20:15:53', 5),
(5, 'Author', 'This is good Item', 4, 0, '/assets/images/user.png', '', '2016-04-29 20:20:27', '2016-04-29 20:20:27', 6),
(6, 'Author', 'This is good Item', 4, 0, '/assets/images/user.png', '', '2016-04-29 20:25:30', '2016-04-29 20:25:30', 7),
(7, 'Author', 'This is good Item', 4, 0, '/assets/images/user.png', '', '2016-04-29 20:29:10', '2016-04-29 20:29:10', 8),
(8, 'Author', 'This is good Item', 4, 0, '/assets/images/user.png', '', '2016-04-29 20:33:13', '2016-04-29 20:33:13', 9),
(9, 'Author', 'This is good Item', 4, 0, '/assets/images/user.png', '', '2016-04-29 20:36:03', '2016-04-29 20:36:03', 10),
(10, 'Author', 'This is good Item', 4, 0, '/assets/images/user.png', '', '2016-04-29 20:43:55', '2016-04-29 20:43:55', 11),
(11, 'Author', 'This is good Item', 4, 0, '/assets/images/user.png', '', '2016-04-29 20:46:57', '2016-04-29 20:46:57', 12),
(12, 'Author', 'This is good Item', 4, 0, '/assets/images/user.png', '', '2016-04-29 20:50:57', '2016-04-29 20:50:57', 13),
(13, 'Author', 'This is good Item', 4, 0, '/assets/images/user.png', '', '2016-04-29 20:54:39', '2016-04-29 20:54:39', 14),
(14, 'Author', 'This is good Item', 4, 0, '/assets/images/user.png', '', '2016-04-29 20:57:39', '2016-04-29 20:57:39', 15),
(15, 'Author', 'This is good Item', 4, 0, '/assets/images/user.png', '', '2016-04-29 21:00:13', '2016-04-29 21:00:13', 16),
(16, 'Author', 'This is good Item', 4, 0, '/assets/images/user.png', '', '2016-04-29 21:02:27', '2016-04-29 21:02:27', 17),
(17, 'Author', 'This is good Item', 4, 0, '/assets/images/user.png', '', '2016-04-29 22:39:57', '2016-04-29 22:39:57', 18),
(18, 'Author', 'This is good Item', 4, 0, '/assets/images/user.png', '', '2016-04-29 22:56:08', '2016-04-29 22:56:08', 19),
(19, 'Author', 'This is good Item', 4, 0, '/assets/images/user.png', '', '2016-04-29 22:59:23', '2016-04-29 22:59:23', 20),
(20, 'Author', 'This is good Item', 4, 0, '/assets/images/user.png', '', '2016-04-29 23:01:55', '2016-04-29 23:01:55', 21),
(21, 'Author', 'This is good Item', 5, 0, '/assets/images/user.png', '', '2016-04-29 23:11:46', '2016-04-29 23:11:46', 22),
(22, 'Author', 'This is good Item', 5, 0, '/assets/images/user.png', '', '2016-04-29 23:16:35', '2016-04-29 23:16:35', 23),
(23, 'Author', 'This is good Item', 4, 0, '/assets/images/user.png', '', '2016-04-29 23:20:11', '2016-04-29 23:20:11', 24),
(24, 'Author', 'This is good Item', 4, 0, '/assets/images/user.png', '', '2016-04-29 23:25:09', '2016-04-29 23:25:09', 25),
(25, 'Author', 'This is good Item', 4, 0, '/assets/images/user.png', '', '2016-04-29 23:28:24', '2016-04-29 23:28:24', 26),
(26, 'Author', 'This is good Item', 4, 0, '/assets/images/user.png', '', '2016-04-29 23:34:07', '2016-04-29 23:34:07', 27),
(27, 'Author', 'This is good Item', 4, 0, '/assets/images/user.png', '', '2016-04-29 23:38:25', '2016-04-29 23:38:25', 28),
(28, 'Author', 'This is good Item', 4, 0, '/assets/images/user.png', '', '2016-04-30 01:16:46', '2016-04-30 01:16:46', 29),
(100000, 'Author', 'This is good Item', 4, 0, '/assets/images/user.png', '', '2016-05-03 03:46:17', '2016-05-03 03:46:17', 100000),
(100001, 'Author', 'This is good Item', 4, 0, '/assets/images/user.png', '', '2016-05-03 04:04:22', '2016-05-03 04:04:22', 100001),
(100002, 'Author', 'This is good Item', 4, 0, '/assets/images/user.png', '', '2016-05-03 04:52:08', '2016-05-03 04:52:08', 100002),
(100003, 'Author', 'This is good Item', 4, 0, '/assets/images/user.png', '', '2016-05-03 04:57:39', '2016-05-03 04:57:39', 100003),
(100004, 'Author', 'This is good Item', 4, 0, '/assets/images/user.png', '', '2016-05-03 05:02:13', '2016-05-03 05:02:13', 100004),
(100005, 'Author', 'This is good Item', 4, 0, '/assets/images/user.png', '', '2016-05-03 05:10:03', '2016-05-03 05:10:03', 100005),
(100006, 'Author', 'This is good Item', 4, 0, '/assets/images/user.png', '', '2016-05-03 05:19:25', '2016-05-03 05:19:25', 100006),
(100007, 'Author', 'This is good Item', 4, 0, '/assets/images/user.png', '', '2016-05-03 05:23:05', '2016-05-03 05:23:05', 100007),
(100008, 'Author', 'This is good Item', 4, 0, '/assets/images/user.png', '', '2016-05-03 05:34:20', '2016-05-03 05:34:20', 100008),
(100009, 'Author', 'This is good Item', 4, 0, '/assets/images/user.png', '', '2016-05-05 04:08:56', '2016-05-05 04:08:56', 100009);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `label` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `label`, `created_at`, `updated_at`) VALUES
(1, 'Health & Beauty', '2016-04-29 18:03:24', '2016-04-29 18:03:24'),
(2, 'Skin Care', '2016-04-29 18:03:24', '2016-04-29 18:03:24'),
(3, 'Hair Care', '2016-04-29 18:03:24', '2016-04-29 18:03:24'),
(4, 'Bath & Body', '2016-04-29 18:03:24', '2016-04-29 18:03:24');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE IF NOT EXISTS `transactions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `status`, `code`, `created_at`, `updated_at`) VALUES
(1, 0, '', '2016-04-29 22:41:14', '2016-04-29 22:41:14'),
(2, 0, '', '2016-04-30 02:32:36', '2016-04-30 02:32:36'),
(3, 0, '', '2016-04-30 02:50:20', '2016-04-30 02:50:20'),
(4, 0, '', '2016-04-30 03:10:17', '2016-04-30 03:10:17'),
(5, 0, '', '2016-04-30 04:17:13', '2016-04-30 04:17:13'),
(6, 0, '', '2016-04-30 05:53:46', '2016-04-30 05:53:46'),
(7, 0, '', '2016-04-30 11:48:10', '2016-04-30 11:48:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'adminfrpi@frpi.com', '$2y$10$7/juch/dP7UO9CbGlVICX.uLfR30MrB3Sk6bfQXDiu8PdPIeCcDba', 'pBkzuYlsmajY21VaLWT6u43JZWDi1ZTYXxwYLuOGwwt36d11sg0XWleymWPO', '2016-04-29 17:43:35', '2016-05-05 04:06:05');

-- --------------------------------------------------------

--
-- Table structure for table `weight_classes`
--

CREATE TABLE IF NOT EXISTS `weight_classes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `label` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `weight_classes_data_id_foreign` (`data_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=40 ;

--
-- Dumping data for table `weight_classes`
--

INSERT INTO `weight_classes` (`id`, `label`, `data_id`, `created_at`, `updated_at`) VALUES
(1, 'Kilogram', 1, '2016-04-29 19:55:40', '2016-04-29 19:55:40'),
(2, 'Kilogram', 2, '2016-04-29 19:58:23', '2016-04-29 19:58:23'),
(3, 'Kilogram', 3, '2016-04-29 20:07:46', '2016-04-29 20:07:46'),
(4, 'Kilogram', 4, '2016-04-29 20:11:54', '2016-04-29 20:11:54'),
(5, 'Kilogram', 5, '2016-04-29 20:15:53', '2016-04-29 20:15:53'),
(6, 'Kilogram', 6, '2016-04-29 20:20:27', '2016-04-29 20:20:27'),
(7, 'Kilogram', 7, '2016-04-29 20:25:30', '2016-04-29 20:25:30'),
(8, 'Kilogram', 8, '2016-04-29 20:29:10', '2016-04-29 20:29:10'),
(9, 'Kilogram', 9, '2016-04-29 20:33:13', '2016-04-29 20:33:13'),
(10, 'Kilogram', 10, '2016-04-29 20:36:03', '2016-04-29 20:36:03'),
(11, 'Kilogram', 11, '2016-04-29 20:43:55', '2016-04-29 20:43:55'),
(12, 'Kilogram', 12, '2016-04-29 20:46:57', '2016-04-29 20:46:57'),
(13, 'Kilogram', 13, '2016-04-29 20:50:57', '2016-04-29 20:50:57'),
(14, 'Kilogram', 14, '2016-04-29 20:54:39', '2016-04-29 20:54:39'),
(15, 'Kilogram', 15, '2016-04-29 20:57:39', '2016-04-29 20:57:39'),
(16, 'Kilogram', 16, '2016-04-29 21:00:13', '2016-04-29 21:00:13'),
(17, 'Kilogram', 17, '2016-04-29 21:02:27', '2016-04-29 21:02:27'),
(18, 'Kilogram', 18, '2016-04-29 22:39:57', '2016-04-29 22:39:57'),
(19, 'Kilogram', 19, '2016-04-29 22:56:08', '2016-04-29 22:56:08'),
(20, 'Kilogram', 20, '2016-04-29 22:59:22', '2016-04-29 22:59:22'),
(21, 'Kilogram', 21, '2016-04-29 23:01:55', '2016-04-29 23:01:55'),
(22, 'Kilogram', 22, '2016-04-29 23:11:46', '2016-04-29 23:11:46'),
(23, 'Kilogram', 23, '2016-04-29 23:16:35', '2016-04-29 23:16:35'),
(24, 'Kilogram', 24, '2016-04-29 23:20:11', '2016-04-29 23:20:11'),
(25, 'Kilogram', 25, '2016-04-29 23:25:09', '2016-04-29 23:25:09'),
(26, 'Kilogram', 26, '2016-04-29 23:28:24', '2016-04-29 23:28:24'),
(27, 'Kilogram', 27, '2016-04-29 23:34:07', '2016-04-29 23:34:07'),
(28, 'Kilogram', 28, '2016-04-29 23:38:25', '2016-04-29 23:38:25'),
(29, 'Kilogram', 29, '2016-04-30 01:16:46', '2016-04-30 01:16:46'),
(30, 'Kilogram', 30, '2016-05-03 03:46:17', '2016-05-03 03:46:17'),
(31, 'Kilogram', 31, '2016-05-03 04:04:22', '2016-05-03 04:04:22'),
(32, 'Kilogram', 32, '2016-05-03 04:52:08', '2016-05-03 04:52:08'),
(33, 'Kilogram', 33, '2016-05-03 04:57:39', '2016-05-03 04:57:39'),
(34, 'Kilogram', 34, '2016-05-03 05:02:12', '2016-05-03 05:02:12'),
(35, 'Kilogram', 35, '2016-05-03 05:10:03', '2016-05-03 05:10:03'),
(36, 'Kilogram', 36, '2016-05-03 05:19:25', '2016-05-03 05:19:25'),
(37, 'Ounce', 37, '2016-05-03 05:23:05', '2016-05-03 05:24:56'),
(38, 'Kilogram', 38, '2016-05-03 05:34:20', '2016-05-03 05:34:20'),
(39, 'Kilogram', 39, '2016-05-05 04:08:56', '2016-05-05 04:08:56');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attribute_product`
--
ALTER TABLE `attribute_product`
  ADD CONSTRAINT `attribute_product_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `attribute_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `attr_group_attribute`
--
ALTER TABLE `attr_group_attribute`
  ADD CONSTRAINT `attr_group_attribute_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `attr_group_attribute_attr_group_id_foreign` FOREIGN KEY (`attr_group_id`) REFERENCES `attr_groups` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `category_category`
--
ALTER TABLE `category_category`
  ADD CONSTRAINT `category_category_category_id1_foreign` FOREIGN KEY (`category_id1`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_category_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `category_product`
--
ALTER TABLE `category_product`
  ADD CONSTRAINT `category_product_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `codes`
--
ALTER TABLE `codes`
  ADD CONSTRAINT `codes_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `customer_group_discount`
--
ALTER TABLE `customer_group_discount`
  ADD CONSTRAINT `customer_group_discount_customer_group_id_foreign` FOREIGN KEY (`customer_group_id`) REFERENCES `customer_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `customer_group_discount_discount_id_foreign` FOREIGN KEY (`discount_id`) REFERENCES `discounts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `dimensions`
--
ALTER TABLE `dimensions`
  ADD CONSTRAINT `dimensions_data_id_foreign` FOREIGN KEY (`data_id`) REFERENCES `data` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `discount_product`
--
ALTER TABLE `discount_product`
  ADD CONSTRAINT `discount_product_discount_id_foreign` FOREIGN KEY (`discount_id`) REFERENCES `discounts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `discount_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `image_product`
--
ALTER TABLE `image_product`
  ADD CONSTRAINT `image_product_image_id_foreign` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `image_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `in_items`
--
ALTER TABLE `in_items`
  ADD CONSTRAINT `in_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `length_classes`
--
ALTER TABLE `length_classes`
  ADD CONSTRAINT `length_classes_data_id_foreign` FOREIGN KEY (`data_id`) REFERENCES `data` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `manufacture_product`
--
ALTER TABLE `manufacture_product`
  ADD CONSTRAINT `manufacture_product_manufacture_id_foreign` FOREIGN KEY (`manufacture_id`) REFERENCES `manufactures` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `manufacture_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `out_items`
--
ALTER TABLE `out_items`
  ADD CONSTRAINT `out_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products_products`
--
ALTER TABLE `products_products`
  ADD CONSTRAINT `products_products_product_id1_foreign` FOREIGN KEY (`product_id1`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_review`
--
ALTER TABLE `product_review`
  ADD CONSTRAINT `product_review_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_review_review_id_foreign` FOREIGN KEY (`review_id`) REFERENCES `reviews` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_stores`
--
ALTER TABLE `product_stores`
  ADD CONSTRAINT `product_stores_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_stores_transaction_id_foreign` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_tag`
--
ALTER TABLE `product_tag`
  ADD CONSTRAINT `product_tag_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_review_id_foreign` FOREIGN KEY (`review_id`) REFERENCES `reviews` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `weight_classes`
--
ALTER TABLE `weight_classes`
  ADD CONSTRAINT `weight_classes_data_id_foreign` FOREIGN KEY (`data_id`) REFERENCES `data` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
