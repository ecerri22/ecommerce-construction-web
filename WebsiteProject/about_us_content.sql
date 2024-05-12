-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2024 at 11:12 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us_content`
--
ALTER TABLE `about_us_content`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us_content`
--
ALTER TABLE `about_us_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
