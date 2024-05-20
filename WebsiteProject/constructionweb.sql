-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2024 at 12:21 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `constructionweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us_content`
--

CREATE TABLE `about_us_content` (
  `id` int(11) NOT NULL,
  `section_name` varchar(50) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_us_content`
--

INSERT INTO `about_us_content` (`id`, `section_name`, `content`) VALUES
(1, 'company-description', 'Construction Web has been a pioneer in the construction industry since 1998, specializing in both residential and commercial projects. Our commitment to innovation and excellence has established us as a leader in the field, delivering projects that not only meet but exceed our clients\' expectations.'),
(2, 'history', 'Founded by a group of ambitious engineers, Construction Web started as a small firm focused on small to medium-sized construction projects. Over the years, we have expanded our expertise to include large-scale commercial developments, gaining recognition for our sustainable practices and cutting-edge architectural designs.'),
(3, 'mission', 'Our mission is to lead the construction industry by creating unparalleled value for our clients through innovation, foresight, and reliability, ensuring that our projects are completed on time, on budget, and to the highest standards of quality.'),
(4, 'value', 'Our team has always embraced our clients and partners as part of Our Team. Every project is performed with open communication. The Partnering methodology is implemented and a mutual respect with our clients provides the groundwork for our success.'),
(5, 'why-us', 'Choose our construction company for unparalleled expertise, meticulous attention to detail, and a commitment to exceeding expectations. With a proven track record of delivering exceptional results, we ensure your project is completed on time, within budget, and to the highest standards.');

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `street` varchar(95) NOT NULL,
  `city` varchar(200) NOT NULL,
  `country` varchar(90) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `zip_code` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `state` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`street`, `city`, `country`, `phone`, `zip_code`, `user_id`, `state`) VALUES
('123 Main St', 'New York', 'USA', '123-456-7890', '10001', 1, ''),
('456 Elm St', 'Los Angeles', 'USA', '234-567-8901', '90001', 2, ''),
('789 Oak St', 'Chicago', 'USA', '345-678-9012', '60601', 3, ''),
('321 Maple St', 'Houston', 'USA', '456-789-0123', '77001', 4, ''),
('654 Pine St', 'Philadelphia', 'USA', '567-890-1234', '19101', 8, ''),
('987 Cedar St', 'Phoenix', 'USA', '678-901-2345', '85001', 9, ''),
('210 Walnut St', 'San Antonio', 'USA', '789-012-3456', '78201', 10, ''),
('543 Birch St', 'San Diego', 'USA', '890-123-4567', '92101', 11, ''),
('876 Spruce St', 'Dallas', 'USA', '901-234-5678', '75201', 12, ''),
('109 Cherry St', 'San Jose', 'USA', '012-345-6789', '95101', 14, ''),
('432 Ash St', 'Austin', 'USA', '123-456-7890', '78701', 15, ''),
('765 Magnolia St', 'Jacksonville', 'USA', '234-567-8901', '32001', 19, ''),
('098 Willow St', 'San Francisco', 'USA', '345-678-9012', '94101', 20, ''),
('test4465', 'test456', 'test456', '43432', '3001', 72, '');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `description`, `created_at`, `updated_at`, `category_name`) VALUES
(1, 'Tools and materials related to windows, such as window frames, glass, and window accessories.', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Windows'),
(2, 'Electrical tools and materials, including wiring, switches, outlets, and electrical fixtures.', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Electrical'),
(3, 'Steel profiles and structural components used in construction projects, such as beams, columns, and trusses.', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Steel Profiles'),
(4, 'Wood materials for construction, including lumber, plywood, and timber products.', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Wood Materials'),
(5, 'Hydraulic tools and equipment, including pumps, hoses, cylinders, and hydraulic systems components.', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Hydraulics'),
(6, 'Professional work tools encompassing electric tools, mechanical tools, instruments, work equipment, bolts, nails, and screws.', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Professional Work Tools'),
(7, 'Building materials like bricks, tiles, and aggregates used in construction projects.', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Building Materials'),
(8, 'Covers for the roof, including tiling, gutters, and sandwich panels used for roofing and protection.', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Roof Covers'),
(9, 'Isolation materials for thermal and acoustic insulation in construction projects.', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Isolation'),
(10, 'Materials for packaging construction materials, including packaging boxes, crates, and protective materials.', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Packaging Materials');

-- --------------------------------------------------------

--
-- Table structure for table `home_page_content`
--

CREATE TABLE `home_page_content` (
  `id` int(11) NOT NULL,
  `section_name` varchar(50) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_page_content`
--

INSERT INTO `home_page_content` (`id`, `section_name`, `content`) VALUES
(1, 'hero-head', 'Welcome to our Construction Company'),
(2, 'hero-descript', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, praesentium.'),
(3, 'right-content-descript', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit earum doloribus numquam dolor vel architecto dolore quae qui pariatur. A veritatis dolorum accusantium laborum rerum molestias commodi itaque sapiente iusto dolorem unde pariatur doloribus, quisquam cupiditate alias deleniti, vel tempore asperiores nostrum quaerat? Similique soluta iure earum facilis doloremque obcaecati.'),
(5, 'Project 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae ipsum vitae ipsum convallis viverra.'),
(6, 'Project 2', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'),
(7, 'Project 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.');

-- --------------------------------------------------------

--
-- Table structure for table `orderinfo`
--

CREATE TABLE `orderinfo` (
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderinfo`
--

INSERT INTO `orderinfo` (`order_id`, `product_id`, `quantity`) VALUES
(202028, 36, 2),
(778335, 36, 1),
(909324, 36, 1),
(277592, 36, 1),
(668691, 36, 1),
(181722, 3, 1),
(181722, 48, 1),
(144987, 3, 1),
(144987, 48, 1),
(566052, 44, 4),
(277992, 44, 8),
(873143, 44, 10),
(415007, 10, 3),
(861203, 10, 3),
(439439, 10, 3),
(931183, 10, 3),
(722586, 10, 3),
(812144, 26, 1),
(916098, 26, 1),
(657475, 35, 1),
(453687, 35, 1),
(837233, 35, 1),
(526970, 35, 5),
(519762, 35, 15),
(272036, 35, 20),
(188505, 35, 10),
(825365, 35, 1),
(620208, 14, 5),
(14854, 2, 10),
(87540, 2, 15),
(346782, 2, 3),
(918767, 2, 5),
(478492, 2, 7),
(253787, 2, 7),
(382759, 2, 4),
(970249, 2, 1),
(999475, 2, 23),
(181645, 2, 15),
(994170, 30, 1),
(106531, 9, 1),
(106531, 30, 1),
(721475, 42, 1),
(774579, 1, 1),
(310654, 4, 1),
(56138, 2, 1),
(333411, 54, 1),
(247131, 2, 1),
(963146, 2, 1),
(191156, 1, 1),
(191156, 2, 1),
(191156, 6, 1),
(191156, 11, 1),
(702958, 1, 1),
(702958, 2, 1),
(702958, 6, 1),
(702958, 11, 1),
(65196, 1, 1),
(65196, 2, 1),
(65196, 6, 1),
(65196, 11, 1),
(375041, 81, 1),
(375041, 82, 1),
(375041, 86, 1),
(375041, 88, 1),
(557228, 1, 10),
(74224, 14, 1),
(74224, 16, 1),
(74224, 19, 1),
(993089, 16, 1),
(818800, 1, 10),
(818800, 2, 10),
(818800, 3, 10),
(287435, 1, 10),
(287435, 2, 10),
(287435, 3, 10),
(493223, 1, 10),
(493223, 2, 10),
(493223, 3, 10),
(555886, 1, 1),
(555886, 2, 1),
(555886, 3, 1),
(419774, 1, 1),
(419774, 2, 1),
(419774, 3, 1),
(205425, 2, 1),
(999317, 51, 3),
(999317, 52, 3),
(999317, 53, 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `created_at`, `updated_at`, `status`, `user_id`) VALUES
(26, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Pending', 1),
(27, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Processing', 1),
(28, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Shipped', 1),
(29, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Delivered', 1),
(30, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Canceled', 1),
(31, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Pending', 2),
(32, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Processing', 2),
(33, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Shipped', 2),
(34, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Delivered', 2),
(35, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Canceled', 2),
(36, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Pending', 3),
(37, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Processing', 3),
(38, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Shipped', 3),
(39, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Delivered', 3),
(40, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Canceled', 3),
(41, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Pending', 4),
(42, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Processing', 4),
(43, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Shipped', 4),
(44, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Delivered', 4),
(45, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Canceled', 4),
(46, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Pending', 8),
(47, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Processing', 8),
(48, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Shipped', 8),
(49, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Delivered', 8),
(50, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Canceled', 8),
(14854, '2024-05-18 09:51:16', '2024-05-18 09:51:16', 'Pending', 72),
(56138, '2024-05-18 18:04:58', '2024-05-18 18:04:58', 'Pending', 72),
(65196, '2024-05-20 00:13:55', '2024-05-20 00:13:55', 'DELIVERING', 72),
(74224, '2024-05-20 00:36:43', '2024-05-20 00:36:43', 'DELIVERING', 72),
(85281, '2024-05-18 08:41:20', '2024-05-18 08:41:20', 'DELIVERING', 72),
(87540, '2024-05-18 10:05:05', '2024-05-18 10:05:05', 'Cancelled', 72),
(106531, '2024-05-18 11:28:03', '2024-05-18 11:28:03', 'Delivered', 72),
(129358, '2024-05-18 08:26:58', '2024-05-18 08:26:58', 'DELIVERING', 72),
(144987, '2024-05-17 21:38:36', '2024-05-17 21:38:36', 'DELIVERING', 72),
(173121, '2024-05-18 08:46:56', '2024-05-18 08:46:56', 'DELIVERING', 72),
(181645, '2024-05-18 10:53:17', '2024-05-18 10:53:17', 'DELIVERING', 72),
(181722, '2024-05-17 21:38:06', '2024-05-17 21:38:06', 'DELIVERING', 72),
(188505, '2024-05-18 09:42:12', '2024-05-18 09:42:12', 'DELIVERING', 72),
(191156, '2024-05-19 02:45:34', '2024-05-19 02:45:34', 'DELIVERING', 72),
(202028, '2024-05-17 12:37:47', '2024-05-17 12:37:47', 'DELIVERING', 72),
(205425, '2024-05-20 01:01:43', '2024-05-20 01:01:43', 'DELIVERING', 72),
(216258, '2024-05-18 11:01:06', '2024-05-18 11:01:06', 'DELIVERING', 72),
(247131, '2024-05-19 00:59:56', '2024-05-19 00:59:56', 'DELIVERING', 72),
(251483, '2024-05-18 10:56:48', '2024-05-18 10:56:48', 'DELIVERING', 72),
(251832, '2024-05-18 11:13:27', '2024-05-18 11:13:27', 'DELIVERING', 72),
(253787, '2024-05-18 10:30:03', '2024-05-18 10:30:03', 'DELIVERING', 72),
(272036, '2024-05-18 09:27:42', '2024-05-18 09:27:42', 'DELIVERING', 72),
(277592, '2024-05-17 12:45:44', '2024-05-17 12:45:44', 'Cancelled', 72),
(277992, '2024-05-17 21:57:46', '2024-05-17 21:57:46', 'DELIVERING', 72),
(287435, '2024-05-20 00:45:14', '2024-05-20 00:45:14', 'DELIVERING', 72),
(310654, '2024-05-18 15:23:42', '2024-05-18 15:23:42', 'DELIVERING', 72),
(325822, '2024-05-18 11:02:48', '2024-05-18 11:02:48', 'DELIVERING', 72),
(333411, '2024-05-18 19:30:08', '2024-05-18 19:30:08', 'DELIVERING', 72),
(346782, '2024-05-18 10:05:27', '2024-05-18 10:05:27', 'DELIVERING', 72),
(363180, '2024-05-18 08:28:28', '2024-05-18 08:28:28', 'DELIVERING', 72),
(375041, '2024-05-20 00:15:20', '2024-05-20 00:15:20', 'DELIVERING', 72),
(376766, '2024-05-18 08:47:05', '2024-05-18 08:47:05', 'DELIVERING', 72),
(382759, '2024-05-18 10:38:30', '2024-05-18 10:38:30', 'DELIVERING', 72),
(415007, '2024-05-17 22:25:40', '2024-05-17 22:25:40', 'DELIVERING', 72),
(419774, '2024-05-20 00:56:39', '2024-05-20 00:56:39', 'DELIVERING', 72),
(439439, '2024-05-17 22:27:35', '2024-05-17 22:27:35', 'DELIVERING', 72),
(453687, '2024-05-18 09:21:48', '2024-05-18 09:21:48', 'DELIVERING', 72),
(478244, '2024-05-18 08:27:48', '2024-05-18 08:27:48', 'DELIVERING', 72),
(478492, '2024-05-18 10:24:28', '2024-05-18 10:24:28', 'DELIVERING', 72),
(493223, '2024-05-20 00:46:09', '2024-05-20 00:46:09', 'DELIVERING', 72),
(501868, '2024-05-20 00:24:20', '2024-05-20 00:24:20', 'DELIVERING', 72),
(519762, '2024-05-18 09:26:45', '2024-05-18 09:26:45', 'DELIVERING', 72),
(526970, '2024-05-18 09:26:02', '2024-05-18 09:26:02', 'Cancelled', 72),
(555886, '2024-05-20 00:48:54', '2024-05-20 00:48:54', 'DELIVERING', 72),
(557228, '2024-05-20 00:25:31', '2024-05-20 00:25:31', 'DELIVERING', 72),
(566052, '2024-05-17 21:56:45', '2024-05-17 21:56:45', 'DELIVERING', 72),
(605382, '2024-05-20 00:24:57', '2024-05-20 00:24:57', 'DELIVERING', 72),
(620208, '2024-05-18 09:46:24', '2024-05-18 09:46:24', 'DELIVERING', 72),
(621255, '2024-05-18 11:09:44', '2024-05-18 11:09:44', 'DELIVERING', 72),
(655152, '2024-05-18 08:53:09', '2024-05-18 08:53:09', 'DELIVERING', 72),
(657475, '2024-05-18 09:21:09', '2024-05-18 09:21:09', 'DELIVERING', 72),
(668691, '2024-05-17 12:46:48', '2024-05-17 12:46:48', 'DELIVERING', 72),
(698058, '2024-05-18 10:57:18', '2024-05-18 10:57:18', 'DELIVERING', 72),
(702958, '2024-05-20 00:13:38', '2024-05-20 00:13:38', 'DELIVERING', 72),
(721475, '2024-05-18 14:38:42', '2024-05-18 14:38:42', 'DELIVERING', 72),
(722586, '2024-05-18 08:24:36', '2024-05-18 08:24:36', 'DELIVERING', 72),
(774579, '2024-05-18 15:20:05', '2024-05-18 15:20:05', 'DELIVERING', 72),
(778335, '2024-05-17 12:42:39', '2024-05-17 12:42:39', 'DELIVERING', 72),
(812144, '2024-05-18 09:16:32', '2024-05-18 09:16:32', 'DELIVERING', 72),
(818800, '2024-05-20 00:42:56', '2024-05-20 00:42:56', 'DELIVERING', 72),
(821168, '2024-05-18 08:52:15', '2024-05-18 08:52:15', 'DELIVERING', 72),
(822993, '2024-05-18 11:13:46', '2024-05-18 11:13:46', 'DELIVERING', 72),
(825365, '2024-05-18 09:43:19', '2024-05-18 09:43:19', 'DELIVERING', 72),
(837233, '2024-05-18 09:24:16', '2024-05-18 09:24:16', 'DELIVERING', 72),
(861203, '2024-05-17 22:26:37', '2024-05-17 22:26:37', 'DELIVERING', 72),
(873143, '2024-05-17 21:58:22', '2024-05-17 21:58:22', 'DELIVERING', 72),
(907207, '2024-05-18 08:35:26', '2024-05-18 08:35:26', 'DELIVERING', 72),
(909324, '2024-05-17 12:44:08', '2024-05-17 12:44:08', 'DELIVERING', 72),
(916098, '2024-05-18 09:20:11', '2024-05-18 09:20:11', 'DELIVERING', 72),
(918767, '2024-05-18 10:06:50', '2024-05-18 10:06:50', 'DELIVERING', 72),
(923259, '2024-05-18 11:06:53', '2024-05-18 11:06:53', 'DELIVERING', 72),
(931183, '2024-05-17 22:28:12', '2024-05-17 22:28:12', 'Delivered', 72),
(932819, '2024-05-18 11:07:20', '2024-05-18 11:07:20', 'DELIVERING', 72),
(963146, '2024-05-19 02:44:48', '2024-05-19 02:44:48', 'DELIVERING', 72),
(970249, '2024-05-18 10:40:37', '2024-05-18 10:40:37', 'DELIVERING', 72),
(993089, '2024-05-20 00:37:28', '2024-05-20 00:37:28', 'DELIVERING', 72),
(994170, '2024-05-18 11:21:23', '2024-05-18 11:21:23', 'DELIVERING', 72),
(999317, '2024-05-20 01:02:42', '2024-05-20 01:02:42', 'DELIVERING', 72),
(999475, '2024-05-18 10:51:59', '2024-05-18 10:51:59', 'DELIVERING', 72);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `material` varchar(50) NOT NULL,
  `unit_of_measure` varchar(50) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `stock` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `buy_price` double NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `description`, `product_image`, `price`, `material`, `unit_of_measure`, `brand`, `stock`, `created_at`, `updated_at`, `buy_price`, `category_id`) VALUES
(1, 'Double Hung Vinyl Window', 'Energy-efficient vinyl window with double-hung functionality.', 'image/DOUBLE-HUNG-VINYL-WINDOWS.jpg', 150.00, 'Vinyl', 'Piece', 'EnergySaver', 68, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 120, 1),
(2, 'Aluminum Casement Window', 'Modern aluminum casement window for residential and commercial use.', 'image/Aluminum Casement Window.jpg', 200.00, 'Aluminum', 'Piece', 'ModernDesign', 67, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 150, 1),
(3, 'Wooden Sash Window', 'Classic wooden sash window with traditional design.', 'image/Wooden Sash Window.jpg', 250.00, 'Wood', 'Piece', 'HeritageCraft', 48, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 200, 1),
(4, 'Frosted Glass Bathroom Window', 'Privacy glass window suitable for bathrooms.', 'image/Frosted Glass Bathroom Window.jpg', 180.00, 'Glass', 'Piece', 'BathSense', 120, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 140, 1),
(5, 'Bay Window Kit', 'Complete bay window kit for easy installation.', 'image/Bay Window Kit.jpg', 500.00, 'Vinyl', 'Set', 'HomeSolutions', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 400, 1),
(6, 'Skylight Roof Window', 'Skylight window for bringing natural light into interior spaces.', 'image/Skylight Roof Window.jpg', 300.00, 'Glass', 'Piece', 'LightMaster', 50, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 250, 1),
(7, 'PVC Awning Window', 'Durable PVC awning window suitable for kitchens and bathrooms.', 'image/PVC Awning Window.jpg', 180.00, 'PVC', 'Piece', 'KitchenCraft', 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 150, 1),
(8, 'Security Window Bars', 'Steel security bars for window protection.', 'image/Security Window Bars.jpg', 100.00, 'Steel', 'Set', 'SecureGuard', 90, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 80, 1),
(9, 'French Style Window Shutters', 'Classic French-style wooden window shutters.', 'image/French Style Window Shutters.jpg', 220.00, 'Wood', 'Pair', 'ChateauDesign', 60, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 180, 1),
(10, 'Tempered Glass Patio Door', 'Tempered glass sliding patio door for outdoor access.', 'image/Tempered Glass Patio Door.jpg', 400.00, 'Glass', 'Piece', 'OutdoorLiving', 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 350, 1),
(11, 'Wireless Smart Plug', 'Smart plug with wireless control via smartphone app.', 'image/Wireless Smart Plug.jpg', 20.00, 'Plastic', 'Piece', 'TechSmart', 200, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 15, 2),
(12, 'LED Light Bulbs (Pack of 4)', 'Energy-efficient LED light bulbs suitable for residential use.', 'image/LED Light Bulbs (Pack of 4).jpg', 25.00, 'Glass', 'Set', 'EcoBright', 300, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 20, 2),
(13, 'Smart Wi-Fi Thermostat', 'Programmable thermostat with Wi-Fi connectivity.', 'image/Smart Wi-Fi Thermostat.jpg', 150.00, 'Plastic', 'Piece', 'EcoTemp', 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 120, 2),
(14, 'Electric Drill Kit', 'Cordless electric drill kit with multiple drill bits and accessories.', 'image/Electric Drill Kit.jpg', 80.00, 'Metal', 'Set', 'PowerPro', 49, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 60, 2),
(15, 'Ceiling Fan with Light', 'Ceiling fan featuring integrated LED light.', 'image/Ceiling Fan with Light.jpg', 120.00, 'Metal', 'Piece', 'CoolBreeze', 80, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 100, 2),
(16, 'USB Wall Outlet', 'Wall outlet with built-in USB charging ports.', 'image/USB Wall Outlet.jpg', 30.00, 'Plastic', 'Piece', 'ChargeHub', 148, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 25, 2),
(17, 'Electrical Wire Assortment (50ft)', 'Assortment of electrical wires for various applications.', 'image/Electrical Wire Assortment (50ft).jpg', 40.00, 'Copper', 'Roll', 'PowerFlex', 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 30, 2),
(18, 'Smart Doorbell Camera', 'Video doorbell with motion detection and smartphone connectivity.', 'image/Smart Doorbell Camera.jpg', 200.00, 'Plastic', 'Piece', 'SecuraView', 60, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 150, 2),
(19, 'Wireless Indoor Security Camera', 'Wireless indoor security camera with night vision capabilities.', 'image/Wireless Indoor Security Camera.jpg', 100.00, 'Plastic', 'Piece', 'WatchGuard', 79, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 80, 2),
(20, 'Power Strip Surge Protector', 'Surge protector power strip with multiple outlets and USB ports.', 'image/Power Strip Surge Protector.jpg', 35.00, 'Plastic', 'Piece', 'SafeGuard', 120, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 25, 2),
(21, 'Steel I-Beam (10ft)', 'Structural steel I-beam for building support.', 'image/Steel I-Beam (10ft).jpg', 150.00, 'Steel', 'Piece', 'Structura', 50, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 120, 3),
(22, 'Steel Angle Bar (6ft)', 'Steel angle bar for bracing and framing applications.', 'image/Steel Angle Bar (6ft).jpg', 80.00, 'Steel', 'Piece', 'AngleMaster', 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 60, 3),
(23, 'Steel Channel (8ft)', 'Steel channel for structural support and framing.', 'image/Steel Channel (8ft).jpg', 100.00, 'Steel', 'Piece', 'StructuralPro', 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 80, 3),
(24, 'Steel Pipe (1ft)', 'Steel pipe for plumbing and structural applications.', 'image/Steel Pipe (1ft).jpg', 20.00, 'Steel', 'Piece', 'PipeMaster', 200, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 15, 3),
(25, 'Steel Flat Bar (4ft)', 'Steel flat bar for fabrication and construction projects.', 'image/Steel Flat Bar (4ft).jpg', 50.00, 'Steel', 'Piece', 'FlatCraft', 150, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 40, 3),
(26, 'Steel Round Tube (2ft)', 'Steel round tube for railing and structural applications.', 'image/Steel Round Tube (2ft).jpg', 30.00, 'Steel', 'Piece', 'RoundMaster', 120, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 25, 3),
(27, 'Steel Square Bar (5ft)', 'Steel square bar for fabrication and structural projects.', 'image/Steel Square Bar (5ft).jpg', 60.00, 'Steel', 'Piece', 'SquareCraft', 80, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 50, 3),
(28, 'Steel H-Beam (12ft)', 'Structural steel H-beam for heavy load-bearing applications.', 'image/Steel H-Beam (12ft).jpg', 200.00, 'Steel', 'Piece', 'HeavyDuty', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 150, 3),
(29, 'Steel Sheet Metal (4ft x 8ft)', 'Galvanized steel sheet metal for roofing and cladding.', 'image/Steel Sheet Metal (4ft x 8ft).jpg', 100.00, 'Steel', 'Sheet', 'MetalCraft', 60, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 80, 3),
(30, 'Steel Round Bar (3ft)', 'Steel round bar for machining and fabrication.', 'image/Steel Round Bar (3ft).jpg', 40.00, 'Steel', 'Piece', 'RoundCraft', 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 30, 3),
(31, 'Pine Wood Plank (8ft)', 'High-quality pine wood plank suitable for various carpentry projects.', 'image/Pine Wood Plank (8ft).jpg', 50.00, 'Pine Wood', 'Piece', 'TimberCraft', 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 40, 4),
(32, 'Oak Hardwood Flooring', 'Premium oak hardwood flooring for residential and commercial use.', 'image/Oak Hardwood Flooring.jpg', 80.00, 'Oak Wood', 'Square Meter', 'HardwoodMaster', 80, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 70, 4),
(33, 'Birch Plywood Sheet (4ft x 8ft)', 'Birch plywood sheet for furniture making and cabinetry.', 'image/Birch Plywood Sheet (4ft x 8ft).jpg', 60.00, 'Birch Plywood', 'Sheet', 'CabinetCraft', 120, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 50, 4),
(34, 'Cedar Wood Shingle Bundle', 'Bundle of cedar wood shingles for roofing and siding.', 'image/Cedar Wood Shingle Bundle.jpg', 70.00, 'Cedar Wood', 'Bundle', 'RoofCraft', 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 60, 4),
(35, 'Maple Wood Turning Blank', 'Maple wood turning blank for woodworking and lathe projects.', 'image/Maple Wood Turning Blank.jpg', 40.00, 'Maple Wood', 'Piece', 'TurningCraft', 150, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 30, 4),
(36, 'Walnut Wood Veneer Sheet (2ft x 4ft)', 'Walnut wood veneer sheet for furniture refinishing and woodworking.', 'image/Walnut Wood Veneer Sheet (2ft x 4ft).jpg', 45.00, 'Walnut Wood', 'Sheet', 'VeneerCraft', 200, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 35, 4),
(38, 'Cherry Wood Dowel Rod (3ft)', 'Cherry wood dowel rod for woodworking and crafting.', 'image/Cherry Wood Dowel Rod (3ft).jpg', 30.00, 'Cherry Wood', 'Piece', 'CraftMaster', 180, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 25, 4),
(39, 'Teak Wood Decking Plank (10ft)', 'Teak wood decking plank for outdoor decking and landscaping.', 'image/Teak Wood Decking Plank (10ft).jpg', 90.00, 'Teak Wood', 'Piece', 'DeckCraft', 120, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 80, 4),
(40, 'Plywood Sanding Sheets (Pack of 10)', 'Pack of plywood sanding sheets for finishing and smoothing surfaces.', 'image/Plywood Sanding Sheets (Pack of 10).jpg', 20.00, 'Plywood', 'Pack', 'FinishingTools', 300, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 15, 4),
(41, 'Hydraulic Floor Jack (3 Ton)', 'Heavy-duty hydraulic floor jack for lifting vehicles and heavy loads.', 'image/Hydraulic Floor Jack (3 Ton).jpg', 150.00, 'Steel', 'Piece', 'HeavyLift', 50, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 120, 5),
(42, 'Hydraulic Cylinder Kit (10 Ton)', 'Hydraulic cylinder kit for hydraulic press and equipment.', 'image/Hydraulic Cylinder Kit (10 Ton).jpg', 200.00, 'Steel', 'Set', 'PressMaster', 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 180, 5),
(43, 'Hydraulic Hand Pump', 'Manual hydraulic hand pump for various hydraulic applications.', 'image/Hydraulic Hand Pump.jpg', 80.00, 'Steel', 'Piece', 'HandMaster', 80, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 60, 5),
(44, 'Hydraulic Hose Assembly (10ft)', 'Hydraulic hose assembly with fittings for fluid transfer applications.', 'image/Hydraulic Hose Assembly (10ft).jpg', 50.00, 'Rubber', 'Piece', 'FluidFlow', 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 40, 5),
(45, 'Hydraulic Valve Bank', 'Hydraulic valve bank assembly for controlling hydraulic circuits.', 'image/Hydraulic Valve Bank.jpg', 120.00, 'Steel', 'Piece', 'ValveMaster', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 100, 5),
(46, 'Hydraulic Power Unit (2 HP)', 'Hydraulic power unit for hydraulic machinery and systems.', 'image/Hydraulic Power Unit (2 HP).jpg', 300.00, 'Steel', 'Piece', 'PowerFlow', 20, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 250, 5),
(48, 'Hydraulic Ram Cylinder (4-inch Bore)', 'Hydraulic ram cylinder for lifting and pushing applications.', 'image/Hydraulic Ram Cylinder (4-inch Bore).jpg', 250.00, 'Steel', 'Piece', 'RamMaster', 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 200, 5),
(49, 'Hydraulic Reservoir Tank (10 Gallon)', 'Hydraulic reservoir tank for storing hydraulic fluid.', 'image/Hydraulic Reservoir Tank (10 Gallon).jpg', 100.00, 'Steel', 'Piece', 'FluidTank', 50, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 80, 5),
(50, 'Hydraulic Pressure Gauge (5000 PSI)', 'Hydraulic pressure gauge for measuring hydraulic pressure.', 'image/Hydraulic Pressure Gauge (5000 PSI).jpg', 30.00, 'Steel', 'Piece', 'PressureMaster', 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 25, 5),
(51, 'Cordless Hammer Drill Kit', 'Cordless hammer drill kit with lithium-ion battery and charger.', 'image/Cordless Hammer Drill Kit.jpg', 120.00, 'Metal', 'Set', 'PowerTech', 67, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 100, 6),
(52, 'Mechanic Tool Set (200 Pieces)', 'Comprehensive mechanic tool set for automotive and DIY repairs.', 'image/Mechanic Tool Set (200 Pieces).jpg', 250.00, 'Steel', 'Set', 'AutoPro', 37, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 200, 6),
(53, 'Digital Multimeter', 'Digital multimeter for measuring voltage, current, and resistance.', 'image/Digital Multimeter.jpg', 50.00, 'Plastic', 'Piece', 'TechPro', 98, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 40, 6),
(54, 'Carpenter Tool Belt', 'Durable carpenter tool belt with multiple pockets and hammer loop.', 'image/Carpenter Tool Belt.jpg', 30.00, 'Nylon', 'Piece', 'CarpenterGear', 150, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 25, 6),
(55, 'Adjustable Wrench Set (3 Pieces)', 'Set of adjustable wrenches in various sizes for plumbing and mechanical work.', 'image/Adjustable Wrench Set (3 Pieces).jpg', 40.00, 'Steel', 'Set', 'AdjustMaster', 80, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 30, 6),
(56, 'Electrician Tool Kit', 'Essential tools for electricians including wire strippers, pliers, and screwdrivers.', 'image/Electrician Tool Kit.jpg', 80.00, 'Metal', 'Set', 'WireTech', 60, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 60, 6),
(57, 'Pipe Wrench (18-inch)', 'Heavy-duty pipe wrench for gripping and turning pipes and fittings.', 'image/pipe wrench.jpg', 35.00, 'Steel', 'Piece', 'PipeCraft', 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 25, 6),
(58, 'Digital Infrared Thermometer', 'Non-contact infrared thermometer for measuring surface temperatures.', 'image/Digital Infrared Thermometer.jpg', 60.00, 'Plastic', 'Piece', 'ThermoTech', 120, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 50, 6),
(59, 'Socket Set (20 Pieces)', 'Socket set with ratchets and sockets in various sizes for mechanical work.', 'image/Socket Set (20 Pieces).jpg', 50.00, 'Steel', 'Set', 'SocketMaster', 90, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 40, 6),
(60, 'Soldering Iron Kit', 'Soldering iron kit with soldering iron, solder, and accessories for electronics work.', 'image/Soldering Iron Kit.jpg', 25.00, 'Metal', 'Set', 'SolderCraft', 150, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 20, 6),
(62, 'Ceramic Floor Tile (12-inch x 12-inch)', 'Ceramic floor tile for indoor flooring and tiling projects.', 'image/Ceramic Floor Tile (12-inch x 12-inch).jpg', 2.00, 'Ceramic', 'Piece', 'TileCraft', 3000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1.5, 7),
(63, 'Concrete Masonry Block (8-inch x 8-inch x 16-inch)', 'Concrete masonry block for building walls and partitions.', 'image/Concrete Masonry Block (8-inch x 8-inch x 16-inch).jpg', 3.00, 'Concrete', 'Piece', 'BlockCraft', 2000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2.5, 7),
(64, 'Roofing Shingle Bundle (Architectural)', 'Bundle of architectural roofing shingles for residential roofing.', 'image/Roofing Shingle Bundle (Architectural).jpg', 30.00, 'Asphalt', 'Bundle', 'RoofCraft', 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 25, 7),
(65, 'Drywall Sheet (4ft x 8ft)', 'Gypsum drywall sheet for interior wall construction and finishing.', 'image/Drywall Sheet (4ft x 8ft).jpg', 15.00, 'Gypsum', 'Sheet', 'WallMaster', 1500, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 7),
(66, 'Insulation Roll (R-13)', 'Fiberglass insulation roll for thermal and acoustic insulation.', 'image/Insulation Roll (R-13).jpg', 40.00, 'Fiberglass', 'Roll', 'InsulPro', 800, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 35, 7),
(67, 'PVC Siding Panel (8ft x 4ft)', 'PVC siding panel for exterior cladding and siding applications.', 'image/PVC Siding Panel (8ft x 4ft).jpg', 20.00, 'PVC', 'Piece', 'SidingCraft', 1200, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 15, 7),
(68, 'Cement Bag (50kg)', 'Bag of Portland cement for concrete mixing and construction.', 'image/Cement Bag (50kg).jpg', 10.00, 'Cement', 'Bag', 'CementPro', 2000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 8, 7),
(69, 'Fiberglass Reinforcing Mesh (50m Roll)', 'Fiberglass reinforcing mesh for reinforcing plaster and stucco.', 'image/Fiberglass Reinforcing Mesh (50m Roll).jpg', 25.00, 'Fiberglass', 'Roll', 'ReinforceTech', 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 20, 7),
(70, 'Lumber Beam (10ft)', 'Pressure-treated lumber beam for structural framing and support.', 'image/Lumber Beam (10ft).jpg', 50.00, 'Wood', 'Piece', 'LumberPro', 800, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 40, 7),
(71, 'Roofing Felt Roll (100 sq. ft.)', 'Asphalt roofing felt roll for underlayment and waterproofing.', 'image/Roofing Felt Roll (100 sq. ft.).jpg', 40.00, 'Asphalt', 'Roll', 'RoofMaster', 200, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 35, 8),
(72, 'Roof Flashing Kit (Aluminum)', 'Aluminum roof flashing kit for sealing roof penetrations and junctions.', 'image/Roofing Edge Flashing (10ft).jpg', 30.00, 'Aluminum', 'Set', 'FlashMaster', 150, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 25, 8),
(73, 'Roof Ridge Vent (8ft)', 'Roof ridge vent for attic ventilation and air circulation.', 'image/Roof Ridge Vent (8ft).jpg', 25.00, 'Plastic', 'Piece', 'VentCraft', 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 20, 8),
(74, 'Roofing Nail Bundle (Galvanized)', 'Bundle of galvanized roofing nails for securing shingles and roofing materials.', 'image/Roofing Nail Bundle (Galvanized).jpg', 10.00, 'Steel', 'Bundle', 'NailMaster', 500, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 8, 8),
(75, 'Roofing Shovel', 'Specialized roofing shovel for removing old roofing materials and shingles.', 'image/Roofing Shovel.jpg', 50.00, 'Steel', 'Piece', 'ShovelCraft', 80, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 40, 8),
(76, 'Roofing Caulk Cartridge', 'Waterproof roofing caulk cartridge for sealing gaps and leaks in roofs.', 'image/Roofing Caulk Cartridge.jpg', 15.00, 'Silicone', 'Cartridge', 'CaulkPro', 200, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 8),
(77, 'Roofing Underlayment Roll (200 sq. ft.)', 'Synthetic roofing underlayment roll for added weather protection.', 'image/Roofing Underlayment Roll (200 sq. ft.).jpg', 60.00, 'Synthetic', 'Roll', 'UnderlayTech', 150, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 50, 8),
(78, 'Roofing Vent Pipe Boot (Rubber)', 'Rubber roofing vent pipe boot for flashing around roof penetrations.', 'image/Galvanized-Steel-Pipe-Boot-1-1.jpg', 20.00, 'Rubber', 'Piece', 'BootCraft', 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 15, 8),
(79, 'Roofing Ridge Cap Shingles Bundle', 'Bundle of roofing ridge cap shingles for finishing roof ridges.', 'image/Roofing Ridge Cap Shingles Bundle.jpg', 40.00, 'Asphalt', 'Bundle', 'CapCraft', 120, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 35, 8),
(80, 'Roofing Edge Flashing (10ft)', 'Galvanized roofing edge flashing for protecting roof edges from water damage.', 'image/Roofing Edge Flashing (10ft).jpg', 30.00, 'Steel', 'Piece', 'FlashTech', 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 25, 8),
(81, 'Fiberglass Insulation Roll (R-19)', 'Fiberglass insulation roll for thermal and acoustic insulation.', 'image/Fiberglass Insulation Roll (R-19).jpg', 50.00, 'Fiberglass', 'Roll', 'InsulPro', 200, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 40, 9),
(82, 'Acoustic Foam Panel (12-pack)', 'Acoustic foam panels for soundproofing and noise reduction.', 'image/Acoustic Foam Panel (12-pack).jpg', 60.00, 'Foam', 'Pack', 'SoundPro', 150, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 50, 9),
(83, 'Thermal Insulation Blanket (Roll)', 'Thermal insulation blanket roll for insulating pipes and ductwork.', 'image/Thermal Insulation Blanket (Roll).jpg', 70.00, 'Fiberglass', 'Roll', 'ThermoCraft', 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 60, 9),
(84, 'Soundproofing Sealant (Green Glue)', 'Soundproofing sealant for damping vibrations and reducing noise transmission.', 'image/Soundproofing Sealant (Green Glue).jpg', 25.00, 'Polymer', 'Cartridge', 'QuietSeal', 300, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 20, 9),
(85, 'Thermal Reflective Insulation Foil (Roll)', 'Reflective insulation foil roll for radiant heat barrier applications.', 'image/Thermal Reflective Insulation Foil (Roll).jpg', 40.00, 'Aluminum', 'Roll', 'ReflectTech', 200, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 30, 9),
(86, 'Acoustic Ceiling Tiles (Pack of 10)', 'Acoustic ceiling tiles for noise reduction and sound absorption in commercial spaces.', 'image/Acoustic Ceiling Tiles (Pack of 10).jpg', 70.00, 'Mineral Fiber', 'Pack', 'CeilingCraft', 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 60, 9),
(87, 'Thermal Expansion Joint Foam (10ft)', 'Thermal expansion joint foam for sealing expansion joints and gaps.', 'image/Thermal Expansion Joint Foam (10ft).jpg', 20.00, 'Polyethylene', 'Piece', 'FoamTech', 200, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 15, 9),
(88, 'Acoustic Door Seal Kit', 'Acoustic door seal kit for sealing gaps and preventing sound leaks around doors.', 'image/Acoustic Door Seal Kit.jpg', 30.00, 'Rubber', 'Set', 'DoorSeal', 150, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 25, 9),
(89, 'Thermal Insulation Wrap (100ft Roll)', 'Thermal insulation wrap roll for insulating HVAC ducts and pipes.', 'image/Thermal Insulation Wrap (100ft Roll).jpg', 60.00, 'Fiberglass', 'Roll', 'WrapMaster', 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 50, 9),
(90, 'Acoustic Barrier Curtain (10ft)', 'Acoustic barrier curtain for partitioning and noise isolation in industrial settings.', 'image/Acoustic Barrier Curtain (10ft).jpg', 80.00, 'Vinyl', 'Piece', 'BarrierTech', 120, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 70, 9),
(91, 'Cardboard Shipping Box (Pack of 25)', 'Cardboard shipping box pack for shipping and packaging applications.', 'image/Cardboard Shipping Box (Pack of 25).jpg', 40.00, 'Cardboard', 'Pack', 'ShipPro', 300, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 35, 10),
(92, 'Bubble Wrap Roll (100ft)', 'Bubble wrap roll for cushioning and protecting fragile items during shipping.', 'image/Bubble Wrap Roll (100ft).jpg', 30.00, 'Plastic', 'Roll', 'WrapGuard', 200, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 25, 10),
(93, 'Kraft Paper Roll (200ft)', 'Kraft paper roll for wrapping and void fill in packaging.', 'image/Kraft Paper Roll (200ft).jpg', 20.00, 'Paper', 'Roll', 'PaperPack', 400, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 15, 10),
(94, 'Packing Tape Dispenser', 'Heavy-duty packing tape dispenser for sealing boxes and packages.', 'image/Packing Tape Dispenser.jpg', 15.00, 'Plastic', 'Piece', 'TapeTech', 150, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, 10),
(95, 'Stretch Wrap Film Roll (1000ft)', 'Stretch wrap film roll for bundling and securing palletized loads.', 'image/Stretch Wrap Film Roll (1000ft).jpg', 50.00, 'Plastic', 'Roll', 'WrapMaster', 250, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 40, 10),
(96, 'Poly Mailer Envelope (Pack of 50)', 'Poly mailer envelope pack for shipping clothing and lightweight items.', 'image/Poly Mailer Envelope (Pack of 50).jpg', 25.00, 'Plastic', 'Pack', 'MailerPro', 200, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 20, 10),
(97, 'Foam Packing Peanuts (Cubic Foot)', 'Foam packing peanuts for cushioning and filling empty spaces in packages.', 'image/Foam Packing Peanuts (Cubic Foot).jpg', 20.00, 'Foam', 'Cubic Foot', 'PeanutPack', 300, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 15, 10),
(98, 'Corrugated Cardboard Sheet (4ft x 8ft)', 'Corrugated cardboard sheet for layering and protecting large items during shipping.', 'image/Corrugated Cardboard Sheet (4ft x 8ft).jpg', 10.00, 'Cardboard', 'Sheet', 'CorrugateTech', 500, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 8, 10),
(99, 'Plastic Strapping Kit (500ft Roll)', 'Plastic strapping kit with tensioner and seals for securing heavy packages.', 'image/Plastic Strapping Kit (500ft Roll).jpg', 40.00, 'Plastic', 'Set', 'StrapTech', 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 35, 10);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` bigint(20) NOT NULL,
  `review_date` datetime NOT NULL,
  `review_text` varchar(500) NOT NULL,
  `stars` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `review_date`, `review_text`, `stars`, `user_id`, `product_id`) VALUES
(1, '2024-05-01 00:00:00', 'Great product, arrived on time!', 5, 1, 28),
(2, '2024-05-01 00:00:00', 'Really satisfied with the quality.', 4, 2, 33),
(3, '2024-05-01 00:00:00', 'Impressed by the fast shipping!', 5, 3, 38),
(4, '2024-05-01 00:00:00', 'The product exceeded my expectations.', 5, 4, 43),
(5, '2024-05-01 00:00:00', 'Highly recommend this product!', 5, 5, 48);

-- --------------------------------------------------------

--
-- Table structure for table `statistics`
--

CREATE TABLE `statistics` (
  `name` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `prev_value` double NOT NULL,
  `icon` text NOT NULL,
  `Type` int(11) NOT NULL,
  `destination` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `statistics`
--

INSERT INTO `statistics` (`name`, `value`, `prev_value`, `icon`, `Type`, `destination`, `id`) VALUES
('Building Materials', 'SELECT COUNT(*) FROM products JOIN categories on products.category_id = categories.category_id WHERE category_name = \'Building Materials\';', -1, 'icons/construction.png', 2, '/allProductsAdmin', 6789889),
('Canceled Orders', 'SELECT COUNT(*) FROM orders WHERE status = \'Cancelled\';', -1, 'icons/cancel.png', 2, '/allOrdersAdmin', 9726312),
('Pending Orders', 'SELECT COUNT(*) FROM orders WHERE status = \'Pending\';', -1, 'icons/box.png', 2, '/allOrdersAdmin', 7816493),
('Quarter Earnings', '880', 800, 'icons/bar-chart.png', 1, '/allOrdersAdmin', 4),
('Total Orders', '89', 60, 'icons/order.png', 1, '/allOrdersAdmin', 5),
('Total Products Sold', '300', 100, 'icons/checkout.png', 1, '/allProductsAdmin', 6),
('Total Users', '25', 20, 'icons/user.png', 1, '/allUsersAdmin', 7);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `role` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `password`, `email`, `profile_image`, `role`, `created_at`) VALUES
(1, 'John', 'Doe', 'test123', 'john.doe@example.com', 'profile_images/john_doe.jpg', 0, '0000-00-00 00:00:00'),
(2, 'Jane', 'Smith', 'test123', 'jane.smith@example.com', 'profile_images/jane_smith.jpg', 0, '0000-00-00 00:00:00'),
(3, 'Mike', 'Williams', 'test123', 'mike.williams@example.com', 'profile_images/mike_williams.jpg', 0, '0000-00-00 00:00:00'),
(4, 'Sarah', 'Jones', 'test123', 'sarah.jones@example.com', 'profile_images/sarah_jones.jpg', 0, '0000-00-00 00:00:00'),
(5, 'Chris', 'Taylor', 'test123', 'chris.taylor@example.com', 'profile_images/chris_taylor.jpg', 1, '0000-00-00 00:00:00'),
(6, 'Emily', 'Taylor', 'test123', 'emily.taylor@example.com', 'profile_images/emily_taylor.jpg', 1, '0000-00-00 00:00:00'),
(7, 'David', 'Miller', 'test123', 'david.miller@example.com', 'profile_images/david_miller.jpg', 1, '0000-00-00 00:00:00'),
(8, 'Lisa', 'Jackson', 'test123', 'lisa.jackson@example.com', 'profile_images/lisa_jackson.jpg', 0, '0000-00-00 00:00:00'),
(9, 'Kevin', 'Anderson', 'test123', 'kevin.anderson@example.com', 'profile_images/kevin_anderson.jpg', 0, '0000-00-00 00:00:00'),
(10, 'Amanda', 'White', 'test123', 'amanda.white@example.com', 'profile_images/amanda_white.jpg', 0, '0000-00-00 00:00:00'),
(11, 'Michael', 'Taylor', 'test123', 'michael.taylor@example.com', 'profile_images/michael_taylor.jpg', 0, '0000-00-00 00:00:00'),
(12, 'Laura', 'Johnson', 'test123', 'laura.johnson@example.com', 'profile_images/laura_johnson.jpg', 0, '0000-00-00 00:00:00'),
(13, 'Steven', 'Anderson', 'test123', 'steven.anderson@example.com', 'profile_images/steven_anderson.jpg', 0, '0000-00-00 00:00:00'),
(14, 'Natalie', 'Thomas', 'test123', 'natalie.thomas@example.com', 'profile_images/natalie_thomas.jpg', 0, '0000-00-00 00:00:00'),
(15, 'Jason', 'Roberts', 'test123', 'jason.roberts@example.com', 'profile_images/jason_roberts.jpg', 0, '0000-00-00 00:00:00'),
(16, 'Samantha', 'Taylor', 'test123', 'samantha.taylor@example.com', 'profile_images/samantha_taylor.jpg', 0, '0000-00-00 00:00:00'),
(17, 'Daniel', 'Clark', 'test123', 'daniel.clark@example.com', 'profile_images/daniel_clark.jpg', 1, '0000-00-00 00:00:00'),
(18, 'Ashley', 'Martin', 'test123', 'ashley.martin@example.com', 'profile_images/ashley_martin.jpg', 1, '0000-00-00 00:00:00'),
(19, 'Peter', 'Rodriguez', 'test123', 'peter.rodriguez@example.com', 'profile_images/peter_rodriguez.jpg', 0, '0000-00-00 00:00:00'),
(20, 'Linda', 'Hernandez', 'test123', 'linda.hernandez@example.com', 'profile_images/linda_hernandez.jpg', 0, '0000-00-00 00:00:00'),
(72, 'testtttt', 'test', '$2y$10$vPLJH3X6ZxwZlCGJ42ZA7OQevpN3vpdboSHJssDZXsn.oBX6wfsfy', 'test@test.com', 'image/default-profile.png', 0, '2024-05-13 19:16:15'),
(75, 'enia', 'cerri', '$2y$10$7rlvmzOmbSiJcwUjno9EA.XxmlcN925qLRoMN7sC3D.7T1ywLTl/2', 'admin@admin.com', '', 1, '2024-05-14 18:33:51'),
(76, 'enia', 'cerri', '$2y$10$V8kfSEPvwopT7CYa686uYu6n2jujXbC/ykD2yMn1TAbB7AFh3JFMC', 'enia@test.com', '', 0, '2024-05-16 20:51:37'),
(77, 'enia', 'test', '$2y$10$nJmut.CoviTYxp7S47B6Hu7uJYJBCqLqH/MOHMWzSX/GlHLPBKewW', 'test2@test.com', '', 0, '2024-05-16 20:52:02'),
(78, 'enia', 'cerri', '$2y$10$wjh6usp5y6GcRk0m5.u4gOJaFOjx4aPx7357I5mhV/oOrDLKBMM66', 'test2@test.com', '', 0, '2024-05-16 20:52:32');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`product_id`, `user_id`) VALUES
(1, 72);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us_content`
--
ALTER TABLE `about_us_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`user_id`,`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `home_page_content`
--
ALTER TABLE `home_page_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderinfo`
--
ALTER TABLE `orderinfo`
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `statistics`
--
ALTER TABLE `statistics`
  ADD PRIMARY KEY (`name`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `product_id_2` (`product_id`,`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us_content`
--
ALTER TABLE `about_us_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `home_page_content`
--
ALTER TABLE `home_page_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `statistics`
--
ALTER TABLE `statistics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9867546;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `carts_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `orderinfo`
--
ALTER TABLE `orderinfo`
  ADD CONSTRAINT `orderinfo_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `orderinfo_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `reviews_ibfk_4` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `wishlists_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `wishlists_ibfk_3` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
