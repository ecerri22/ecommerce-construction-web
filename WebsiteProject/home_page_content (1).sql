-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2024 at 11:18 AM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home_page_content`
--
ALTER TABLE `home_page_content`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `home_page_content`
--
ALTER TABLE `home_page_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
