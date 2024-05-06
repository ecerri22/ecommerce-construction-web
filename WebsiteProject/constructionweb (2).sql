-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2024 at 09:07 PM
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
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `street` varchar(95) NOT NULL,
  `city` varchar(200) NOT NULL,
  `country` varchar(90) NOT NULL,
  `state` varchar(90) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `zip_code` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`street`, `city`, `country`, `state`, `phone`, `zip_code`, `user_id`) VALUES
('123 Main St', 'New York', 'USA', 'NY', '123-456-7890', '10001', 1),
('456 Elm St', 'Los Angeles', 'USA', 'CA', '234-567-8901', '90001', 2),
('789 Oak St', 'Chicago', 'USA', 'IL', '345-678-9012', '60601', 3),
('321 Maple St', 'Houston', 'USA', 'TX', '456-789-0123', '77001', 4),
('654 Pine St', 'Philadelphia', 'USA', 'PA', '567-890-1234', '19101', 8),
('987 Cedar St', 'Phoenix', 'USA', 'AZ', '678-901-2345', '85001', 9),
('210 Walnut St', 'San Antonio', 'USA', 'TX', '789-012-3456', '78201', 10),
('543 Birch St', 'San Diego', 'USA', 'CA', '890-123-4567', '92101', 11),
('876 Spruce St', 'Dallas', 'USA', 'TX', '901-234-5678', '75201', 12),
('109 Cherry St', 'San Jose', 'USA', 'CA', '012-345-6789', '95101', 14),
('432 Ash St', 'Austin', 'USA', 'TX', '123-456-7890', '78701', 15),
('765 Magnolia St', 'Jacksonville', 'USA', 'FL', '234-567-8901', '32001', 19),
('098 Willow St', 'San Francisco', 'USA', 'CA', '345-678-9012', '94101', 20);

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `item_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`item_id`, `quantity`, `created_at`, `updated_at`, `product_id`, `user_id`) VALUES
(1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1),
(2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 1),
(3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 15, 1),
(4, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 21, 1),
(5, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 42, 1),
(6, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 3, 2),
(7, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 19, 2),
(8, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 32, 2),
(9, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 13, 2),
(10, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 2),
(11, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 11, 3),
(12, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 5, 3),
(13, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 43, 3),
(14, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 20, 3),
(15, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 39, 3),
(16, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 50, 4),
(17, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 6, 4),
(18, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 16, 4),
(19, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 8, 4),
(20, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 18, 4),
(21, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 20, 8),
(22, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 32, 8),
(23, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 23, 8),
(24, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 33, 8),
(25, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 36, 8);

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
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `cost` double NOT NULL,
  `status` varchar(20) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `quantity`, `total`, `created_at`, `updated_at`, `cost`, `status`, `product_id`, `user_id`) VALUES
(26, 1, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'Pending', 26, 1),
(27, 1, 60, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'Processing', 27, 1),
(28, 1, 200, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'Shipped', 28, 1),
(29, 1, 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'Delivered', 29, 1),
(30, 1, 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'Canceled', 30, 1),
(31, 1, 50, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'Pending', 31, 2),
(32, 1, 80, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'Processing', 32, 2),
(33, 1, 60, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'Shipped', 33, 2),
(34, 1, 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'Delivered', 34, 2),
(35, 1, 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'Canceled', 35, 2),
(36, 1, 45, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'Pending', 36, 3),
(37, 1, 25, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'Processing', 37, 3),
(38, 1, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'Shipped', 38, 3),
(39, 1, 90, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'Delivered', 39, 3),
(40, 1, 20, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'Canceled', 40, 3),
(41, 1, 150, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'Pending', 41, 4),
(42, 1, 200, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'Processing', 42, 4),
(43, 1, 80, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'Shipped', 43, 4),
(44, 1, 50, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'Delivered', 44, 4),
(45, 1, 120, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'Canceled', 45, 4),
(46, 1, 300, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'Pending', 46, 8),
(47, 1, 180, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'Processing', 47, 8),
(48, 1, 250, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'Shipped', 48, 8),
(49, 1, 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'Delivered', 49, 8),
(50, 1, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'Canceled', 50, 8);

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
  `bought_at` datetime NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `description`, `product_image`, `price`, `material`, `unit_of_measure`, `brand`, `stock`, `created_at`, `updated_at`, `buy_price`, `bought_at`, `category_id`) VALUES
(1, 'Double Hung Vinyl Window', 'Energy-efficient vinyl window with double-hung functionality.', 'product_images/double_hung_window.jpg', 150.00, 'Vinyl', 'Piece', 'EnergySaver', 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 120, '2024-04-30 00:00:00', 1),
(2, 'Aluminum Casement Window', 'Modern aluminum casement window for residential and commercial use.', 'product_images/aluminum_casement_window.jpg', 200.00, 'Aluminum', 'Piece', 'ModernDesign', 80, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 150, '2024-04-30 00:00:00', 1),
(3, 'Wooden Sash Window', 'Classic wooden sash window with traditional design.', 'product_images/wooden_sash_window.jpg', 250.00, 'Wood', 'Piece', 'HeritageCraft', 60, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 200, '2024-04-30 00:00:00', 1),
(4, 'Frosted Glass Bathroom Window', 'Privacy glass window suitable for bathrooms.', 'product_images/frosted_glass_window.jpg', 180.00, 'Glass', 'Piece', 'BathSense', 120, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 140, '2024-04-30 00:00:00', 1),
(5, 'Bay Window Kit', 'Complete bay window kit for easy installation.', 'product_images/bay_window_kit.jpg', 500.00, 'Vinyl', 'Set', 'HomeSolutions', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 400, '2024-04-30 00:00:00', 1),
(6, 'Skylight Roof Window', 'Skylight window for bringing natural light into interior spaces.', 'product_images/skylight_window.jpg', 300.00, 'Glass', 'Piece', 'LightMaster', 50, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 250, '2024-04-30 00:00:00', 1),
(7, 'PVC Awning Window', 'Durable PVC awning window suitable for kitchens and bathrooms.', 'product_images/pvc_awning_window.jpg', 180.00, 'PVC', 'Piece', 'KitchenCraft', 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 150, '2024-04-30 00:00:00', 1),
(8, 'Security Window Bars', 'Steel security bars for window protection.', 'product_images/security_window_bars.jpg', 100.00, 'Steel', 'Set', 'SecureGuard', 90, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 80, '2024-04-30 00:00:00', 1),
(9, 'French Style Window Shutters', 'Classic French-style wooden window shutters.', 'product_images/french_window_shutters.jpg', 220.00, 'Wood', 'Pair', 'ChateauDesign', 60, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 180, '2024-04-30 00:00:00', 1),
(10, 'Tempered Glass Patio Door', 'Tempered glass sliding patio door for outdoor access.', 'product_images/patio_door.jpg', 400.00, 'Glass', 'Piece', 'OutdoorLiving', 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 350, '2024-04-30 00:00:00', 1),
(11, 'Wireless Smart Plug', 'Smart plug with wireless control via smartphone app.', 'product_images/smart_plug.jpg', 20.00, 'Plastic', 'Piece', 'TechSmart', 200, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 15, '2024-04-30 00:00:00', 2),
(12, 'LED Light Bulbs (Pack of 4)', 'Energy-efficient LED light bulbs suitable for residential use.', 'product_images/led_light_bulbs.jpg', 25.00, 'Glass', 'Set', 'EcoBright', 300, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 20, '2024-04-30 00:00:00', 2),
(13, 'Smart Wi-Fi Thermostat', 'Programmable thermostat with Wi-Fi connectivity.', 'product_images/smart_thermostat.jpg', 150.00, 'Plastic', 'Piece', 'EcoTemp', 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 120, '2024-04-30 00:00:00', 2),
(14, 'Electric Drill Kit', 'Cordless electric drill kit with multiple drill bits and accessories.', 'product_images/electric_drill.jpg', 80.00, 'Metal', 'Set', 'PowerPro', 50, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 60, '2024-04-30 00:00:00', 2),
(15, 'Ceiling Fan with Light', 'Ceiling fan featuring integrated LED light.', 'product_images/ceiling_fan.jpg', 120.00, 'Metal', 'Piece', 'CoolBreeze', 80, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 100, '2024-04-30 00:00:00', 2),
(16, 'USB Wall Outlet', 'Wall outlet with built-in USB charging ports.', 'product_images/usb_wall_outlet.jpg', 30.00, 'Plastic', 'Piece', 'ChargeHub', 150, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 25, '2024-04-30 00:00:00', 2),
(17, 'Electrical Wire Assortment (50ft)', 'Assortment of electrical wires for various applications.', 'product_images/electrical_wires.jpg', 40.00, 'Copper', 'Roll', 'PowerFlex', 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 30, '2024-04-30 00:00:00', 2),
(18, 'Smart Doorbell Camera', 'Video doorbell with motion detection and smartphone connectivity.', 'product_images/smart_doorbell.jpg', 200.00, 'Plastic', 'Piece', 'SecuraView', 60, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 150, '2024-04-30 00:00:00', 2),
(19, 'Wireless Indoor Security Camera', 'Wireless indoor security camera with night vision capabilities.', 'product_images/security_camera.jpg', 100.00, 'Plastic', 'Piece', 'WatchGuard', 80, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 80, '2024-04-30 00:00:00', 2),
(20, 'Power Strip Surge Protector', 'Surge protector power strip with multiple outlets and USB ports.', 'product_images/power_strip.jpg', 35.00, 'Plastic', 'Piece', 'SafeGuard', 120, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 25, '2024-04-30 00:00:00', 2),
(21, 'Steel I-Beam (10ft)', 'Structural steel I-beam for building support.', 'product_images/steel_i_beam.jpg', 150.00, 'Steel', 'Piece', 'Structura', 50, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 120, '2024-04-30 00:00:00', 3),
(22, 'Steel Angle Bar (6ft)', 'Steel angle bar for bracing and framing applications.', 'product_images/steel_angle_bar.jpg', 80.00, 'Steel', 'Piece', 'AngleMaster', 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 60, '2024-04-30 00:00:00', 3),
(23, 'Steel Channel (8ft)', 'Steel channel for structural support and framing.', 'product_images/steel_channel.jpg', 100.00, 'Steel', 'Piece', 'StructuralPro', 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 80, '2024-04-30 00:00:00', 3),
(24, 'Steel Pipe (1ft)', 'Steel pipe for plumbing and structural applications.', 'product_images/steel_pipe.jpg', 20.00, 'Steel', 'Piece', 'PipeMaster', 200, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 15, '2024-04-30 00:00:00', 3),
(25, 'Steel Flat Bar (4ft)', 'Steel flat bar for fabrication and construction projects.', 'product_images/steel_flat_bar.jpg', 50.00, 'Steel', 'Piece', 'FlatCraft', 150, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 40, '2024-04-30 00:00:00', 3),
(26, 'Steel Round Tube (2ft)', 'Steel round tube for railing and structural applications.', 'product_images/steel_round_tube.jpg', 30.00, 'Steel', 'Piece', 'RoundMaster', 120, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 25, '2024-04-30 00:00:00', 3),
(27, 'Steel Square Bar (5ft)', 'Steel square bar for fabrication and structural projects.', 'product_images/steel_square_bar.jpg', 60.00, 'Steel', 'Piece', 'SquareCraft', 80, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 50, '2024-04-30 00:00:00', 3),
(28, 'Steel H-Beam (12ft)', 'Structural steel H-beam for heavy load-bearing applications.', 'product_images/steel_h_beam.jpg', 200.00, 'Steel', 'Piece', 'HeavyDuty', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 150, '2024-04-30 00:00:00', 3),
(29, 'Steel Sheet Metal (4ft x 8ft)', 'Galvanized steel sheet metal for roofing and cladding.', 'product_images/steel_sheet_metal.jpg', 100.00, 'Steel', 'Sheet', 'MetalCraft', 60, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 80, '2024-04-30 00:00:00', 3),
(30, 'Steel Round Bar (3ft)', 'Steel round bar for machining and fabrication.', 'product_images/steel_round_bar.jpg', 40.00, 'Steel', 'Piece', 'RoundCraft', 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 30, '2024-04-30 00:00:00', 3),
(31, 'Pine Wood Plank (8ft)', 'High-quality pine wood plank suitable for various carpentry projects.', 'product_images/pine_wood_plank.jpg', 50.00, 'Pine Wood', 'Piece', 'TimberCraft', 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 40, '2024-04-30 00:00:00', 4),
(32, 'Oak Hardwood Flooring', 'Premium oak hardwood flooring for residential and commercial use.', 'product_images/oak_hardwood_flooring.jpg', 80.00, 'Oak Wood', 'Square Meter', 'HardwoodMaster', 80, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 70, '2024-04-30 00:00:00', 4),
(33, 'Birch Plywood Sheet (4ft x 8ft)', 'Birch plywood sheet for furniture making and cabinetry.', 'product_images/birch_plywood_sheet.jpg', 60.00, 'Birch Plywood', 'Sheet', 'CabinetCraft', 120, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 50, '2024-04-30 00:00:00', 4),
(34, 'Cedar Wood Shingle Bundle', 'Bundle of cedar wood shingles for roofing and siding.', 'product_images/cedar_wood_shingles.jpg', 70.00, 'Cedar Wood', 'Bundle', 'RoofCraft', 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 60, '2024-04-30 00:00:00', 4),
(35, 'Maple Wood Turning Blank', 'Maple wood turning blank for woodworking and lathe projects.', 'product_images/maple_wood_blank.jpg', 40.00, 'Maple Wood', 'Piece', 'TurningCraft', 150, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 30, '2024-04-30 00:00:00', 4),
(36, 'Walnut Wood Veneer Sheet (2ft x 4ft)', 'Walnut wood veneer sheet for furniture refinishing and woodworking.', 'product_images/walnut_veneer_sheet.jpg', 45.00, 'Walnut Wood', 'Sheet', 'VeneerCraft', 200, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 35, '2024-04-30 00:00:00', 4),
(37, 'Bamboo Cutting Board', 'Eco-friendly bamboo cutting board for kitchen use.', 'product_images/bamboo_cutting_board.jpg', 25.00, 'Bamboo', 'Piece', 'EcoChef', 250, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 20, '2024-04-30 00:00:00', 4),
(38, 'Cherry Wood Dowel Rod (3ft)', 'Cherry wood dowel rod for woodworking and crafting.', 'product_images/cherry_wood_dowel.jpg', 30.00, 'Cherry Wood', 'Piece', 'CraftMaster', 180, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 25, '2024-04-30 00:00:00', 4),
(39, 'Teak Wood Decking Plank (10ft)', 'Teak wood decking plank for outdoor decking and landscaping.', 'product_images/teak_decking_plank.jpg', 90.00, 'Teak Wood', 'Piece', 'DeckCraft', 120, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 80, '2024-04-30 00:00:00', 4),
(40, 'Plywood Sanding Sheets (Pack of 10)', 'Pack of plywood sanding sheets for finishing and smoothing surfaces.', 'product_images/sanding_sheets.jpg', 20.00, 'Plywood', 'Pack', 'FinishingTools', 300, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 15, '2024-04-30 00:00:00', 4),
(41, 'Hydraulic Floor Jack (3 Ton)', 'Heavy-duty hydraulic floor jack for lifting vehicles and heavy loads.', 'product_images/hydraulic_floor_jack.jpg', 150.00, 'Steel', 'Piece', 'HeavyLift', 50, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 120, '2024-04-30 00:00:00', 5),
(42, 'Hydraulic Cylinder Kit (10 Ton)', 'Hydraulic cylinder kit for hydraulic press and equipment.', 'product_images/hydraulic_cylinder_kit.jpg', 200.00, 'Steel', 'Set', 'PressMaster', 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 180, '2024-04-30 00:00:00', 5),
(43, 'Hydraulic Hand Pump', 'Manual hydraulic hand pump for various hydraulic applications.', 'product_images/hydraulic_hand_pump.jpg', 80.00, 'Steel', 'Piece', 'HandMaster', 80, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 60, '2024-04-30 00:00:00', 5),
(44, 'Hydraulic Hose Assembly (10ft)', 'Hydraulic hose assembly with fittings for fluid transfer applications.', 'product_images/hydraulic_hose_assembly.jpg', 50.00, 'Rubber', 'Piece', 'FluidFlow', 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 40, '2024-04-30 00:00:00', 5),
(45, 'Hydraulic Valve Bank', 'Hydraulic valve bank assembly for controlling hydraulic circuits.', 'product_images/hydraulic_valve_bank.jpg', 120.00, 'Steel', 'Piece', 'ValveMaster', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 100, '2024-04-30 00:00:00', 5),
(46, 'Hydraulic Power Unit (2 HP)', 'Hydraulic power unit for hydraulic machinery and systems.', 'product_images/hydraulic_power_unit.jpg', 300.00, 'Steel', 'Piece', 'PowerFlow', 20, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 250, '2024-04-30 00:00:00', 5),
(47, 'Hydraulic Gear Pump (5 GPM)', 'Hydraulic gear pump for fluid power systems and equipment.', 'product_images/hydraulic_gear_pump.jpg', 180.00, 'Steel', 'Piece', 'GearFlow', 60, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 150, '2024-04-30 00:00:00', 5),
(48, 'Hydraulic Ram Cylinder (4-inch Bore)', 'Hydraulic ram cylinder for lifting and pushing applications.', 'product_images/hydraulic_ram_cylinder.jpg', 250.00, 'Steel', 'Piece', 'RamMaster', 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 200, '2024-04-30 00:00:00', 5),
(49, 'Hydraulic Reservoir Tank (10 Gallon)', 'Hydraulic reservoir tank for storing hydraulic fluid.', 'product_images/hydraulic_reservoir_tank.jpg', 100.00, 'Steel', 'Piece', 'FluidTank', 50, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 80, '2024-04-30 00:00:00', 5),
(50, 'Hydraulic Pressure Gauge (5000 PSI)', 'Hydraulic pressure gauge for measuring hydraulic pressure.', 'product_images/hydraulic_pressure_gauge.jpg', 30.00, 'Steel', 'Piece', 'PressureMaster', 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 25, '2024-04-30 00:00:00', 5),
(51, 'Cordless Hammer Drill Kit', 'Cordless hammer drill kit with lithium-ion battery and charger.', 'product_images/hammer_drill.jpg', 120.00, 'Metal', 'Set', 'PowerTech', 70, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 100, '2024-04-30 00:00:00', 6),
(52, 'Mechanic Tool Set (200 Pieces)', 'Comprehensive mechanic tool set for automotive and DIY repairs.', 'product_images/mechanic_tool_set.jpg', 250.00, 'Steel', 'Set', 'AutoPro', 40, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 200, '2024-04-30 00:00:00', 6),
(53, 'Digital Multimeter', 'Digital multimeter for measuring voltage, current, and resistance.', 'product_images/multimeter.jpg', 50.00, 'Plastic', 'Piece', 'TechPro', 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 40, '2024-04-30 00:00:00', 6),
(54, 'Carpenter Tool Belt', 'Durable carpenter tool belt with multiple pockets and hammer loop.', 'product_images/tool_belt.jpg', 30.00, 'Nylon', 'Piece', 'CarpenterGear', 150, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 25, '2024-04-30 00:00:00', 6),
(55, 'Adjustable Wrench Set (3 Pieces)', 'Set of adjustable wrenches in various sizes for plumbing and mechanical work.', 'product_images/wrench_set.jpg', 40.00, 'Steel', 'Set', 'AdjustMaster', 80, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 30, '2024-04-30 00:00:00', 6),
(56, 'Electrician Tool Kit', 'Essential tools for electricians including wire strippers, pliers, and screwdrivers.', 'product_images/electrician_tool_kit.jpg', 80.00, 'Metal', 'Set', 'WireTech', 60, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 60, '2024-04-30 00:00:00', 6),
(57, 'Pipe Wrench (18-inch)', 'Heavy-duty pipe wrench for gripping and turning pipes and fittings.', 'product_images/pipe_wrench.jpg', 35.00, 'Steel', 'Piece', 'PipeCraft', 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 25, '2024-04-30 00:00:00', 6),
(58, 'Digital Infrared Thermometer', 'Non-contact infrared thermometer for measuring surface temperatures.', 'product_images/infrared_thermometer.jpg', 60.00, 'Plastic', 'Piece', 'ThermoTech', 120, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 50, '2024-04-30 00:00:00', 6),
(59, 'Socket Set (20 Pieces)', 'Socket set with ratchets and sockets in various sizes for mechanical work.', 'product_images/socket_set.jpg', 50.00, 'Steel', 'Set', 'SocketMaster', 90, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 40, '2024-04-30 00:00:00', 6),
(60, 'Soldering Iron Kit', 'Soldering iron kit with soldering iron, solder, and accessories for electronics work.', 'product_images/soldering_iron.jpg', 25.00, 'Metal', 'Set', 'SolderCraft', 150, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 20, '2024-04-30 00:00:00', 6),
(61, 'Red Clay Brick (Standard Size)', 'Standard size red clay brick for masonry and construction applications.', 'product_images/red_clay_brick.jpg', 1.00, 'Clay', 'Piece', 'BrickMaster', 5000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0.8, '2024-04-30 00:00:00', 7),
(62, 'Ceramic Floor Tile (12-inch x 12-inch)', 'Ceramic floor tile for indoor flooring and tiling projects.', 'product_images/ceramic_floor_tile.jpg', 2.00, 'Ceramic', 'Piece', 'TileCraft', 3000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1.5, '2024-04-30 00:00:00', 7),
(63, 'Concrete Masonry Block (8-inch x 8-inch x 16-inch)', 'Concrete masonry block for building walls and partitions.', 'product_images/concrete_block.jpg', 3.00, 'Concrete', 'Piece', 'BlockCraft', 2000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2.5, '2024-04-30 00:00:00', 7),
(64, 'Roofing Shingle Bundle (Architectural)', 'Bundle of architectural roofing shingles for residential roofing.', 'product_images/roofing_shingle_bundle.jpg', 30.00, 'Asphalt', 'Bundle', 'RoofCraft', 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 25, '2024-04-30 00:00:00', 7),
(65, 'Drywall Sheet (4ft x 8ft)', 'Gypsum drywall sheet for interior wall construction and finishing.', 'product_images/drywall_sheet.jpg', 15.00, 'Gypsum', 'Sheet', 'WallMaster', 1500, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, '2024-04-30 00:00:00', 7),
(66, 'Insulation Roll (R-13)', 'Fiberglass insulation roll for thermal and acoustic insulation.', 'product_images/insulation_roll.jpg', 40.00, 'Fiberglass', 'Roll', 'InsulPro', 800, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 35, '2024-04-30 00:00:00', 7),
(67, 'PVC Siding Panel (8ft x 4ft)', 'PVC siding panel for exterior cladding and siding applications.', 'product_images/pvc_siding_panel.jpg', 20.00, 'PVC', 'Piece', 'SidingCraft', 1200, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 15, '2024-04-30 00:00:00', 7),
(68, 'Cement Bag (50kg)', 'Bag of Portland cement for concrete mixing and construction.', 'product_images/cement_bag.jpg', 10.00, 'Cement', 'Bag', 'CementPro', 2000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 8, '2024-04-30 00:00:00', 7),
(69, 'Fiberglass Reinforcing Mesh (50m Roll)', 'Fiberglass reinforcing mesh for reinforcing plaster and stucco.', 'product_images/fiberglass_mesh.jpg', 25.00, 'Fiberglass', 'Roll', 'ReinforceTech', 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 20, '2024-04-30 00:00:00', 7),
(70, 'Lumber Beam (10ft)', 'Pressure-treated lumber beam for structural framing and support.', 'product_images/lumber_beam.jpg', 50.00, 'Wood', 'Piece', 'LumberPro', 800, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 40, '2024-04-30 00:00:00', 7),
(71, 'Roofing Felt Roll (100 sq. ft.)', 'Asphalt roofing felt roll for underlayment and waterproofing.', 'product_images/roofing_felt_roll.jpg', 40.00, 'Asphalt', 'Roll', 'RoofMaster', 200, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 35, '2024-04-30 00:00:00', 8),
(72, 'Roof Flashing Kit (Aluminum)', 'Aluminum roof flashing kit for sealing roof penetrations and junctions.', 'product_images/roof_flashing_kit.jpg', 30.00, 'Aluminum', 'Set', 'FlashMaster', 150, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 25, '2024-04-30 00:00:00', 8),
(73, 'Roof Ridge Vent (8ft)', 'Roof ridge vent for attic ventilation and air circulation.', 'product_images/roof_ridge_vent.jpg', 25.00, 'Plastic', 'Piece', 'VentCraft', 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 20, '2024-04-30 00:00:00', 8),
(74, 'Roofing Nail Bundle (Galvanized)', 'Bundle of galvanized roofing nails for securing shingles and roofing materials.', 'product_images/roofing_nails.jpg', 10.00, 'Steel', 'Bundle', 'NailMaster', 500, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 8, '2024-04-30 00:00:00', 8),
(75, 'Roofing Shovel', 'Specialized roofing shovel for removing old roofing materials and shingles.', 'product_images/roofing_shovel.jpg', 50.00, 'Steel', 'Piece', 'ShovelCraft', 80, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 40, '2024-04-30 00:00:00', 8),
(76, 'Roofing Caulk Cartridge', 'Waterproof roofing caulk cartridge for sealing gaps and leaks in roofs.', 'product_images/roofing_caulk.jpg', 15.00, 'Silicone', 'Cartridge', 'CaulkPro', 200, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, '2024-04-30 00:00:00', 8),
(77, 'Roofing Underlayment Roll (200 sq. ft.)', 'Synthetic roofing underlayment roll for added weather protection.', 'product_images/roofing_underlayment.jpg', 60.00, 'Synthetic', 'Roll', 'UnderlayTech', 150, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 50, '2024-04-30 00:00:00', 8),
(78, 'Roofing Vent Pipe Boot (Rubber)', 'Rubber roofing vent pipe boot for flashing around roof penetrations.', 'product_images/roofing_pipe_boot.jpg', 20.00, 'Rubber', 'Piece', 'BootCraft', 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 15, '2024-04-30 00:00:00', 8),
(79, 'Roofing Ridge Cap Shingles Bundle', 'Bundle of roofing ridge cap shingles for finishing roof ridges.', 'product_images/ridge_cap_shingles.jpg', 40.00, 'Asphalt', 'Bundle', 'CapCraft', 120, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 35, '2024-04-30 00:00:00', 8),
(80, 'Roofing Edge Flashing (10ft)', 'Galvanized roofing edge flashing for protecting roof edges from water damage.', 'product_images/roofing_edge_flashing.jpg', 30.00, 'Steel', 'Piece', 'FlashTech', 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 25, '2024-04-30 00:00:00', 8),
(81, 'Fiberglass Insulation Roll (R-19)', 'Fiberglass insulation roll for thermal and acoustic insulation.', 'product_images/fiberglass_insulation.jpg', 50.00, 'Fiberglass', 'Roll', 'InsulPro', 200, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 40, '2024-04-30 00:00:00', 9),
(82, 'Acoustic Foam Panel (12-pack)', 'Acoustic foam panels for soundproofing and noise reduction.', 'product_images/acoustic_foam_panel.jpg', 60.00, 'Foam', 'Pack', 'SoundPro', 150, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 50, '2024-04-30 00:00:00', 9),
(83, 'Thermal Insulation Blanket (Roll)', 'Thermal insulation blanket roll for insulating pipes and ductwork.', 'product_images/thermal_blanket.jpg', 70.00, 'Fiberglass', 'Roll', 'ThermoCraft', 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 60, '2024-04-30 00:00:00', 9),
(84, 'Soundproofing Sealant (Green Glue)', 'Soundproofing sealant for damping vibrations and reducing noise transmission.', 'product_images/soundproofing_sealant.jpg', 25.00, 'Polymer', 'Cartridge', 'QuietSeal', 300, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 20, '2024-04-30 00:00:00', 9),
(85, 'Thermal Reflective Insulation Foil (Roll)', 'Reflective insulation foil roll for radiant heat barrier applications.', 'product_images/reflective_foil.jpg', 40.00, 'Aluminum', 'Roll', 'ReflectTech', 200, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 30, '2024-04-30 00:00:00', 9),
(86, 'Acoustic Ceiling Tiles (Pack of 10)', 'Acoustic ceiling tiles for noise reduction and sound absorption in commercial spaces.', 'product_images/acoustic_ceiling_tile.jpg', 70.00, 'Mineral Fiber', 'Pack', 'CeilingCraft', 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 60, '2024-04-30 00:00:00', 9),
(87, 'Thermal Expansion Joint Foam (10ft)', 'Thermal expansion joint foam for sealing expansion joints and gaps.', 'product_images/expansion_joint_foam.jpg', 20.00, 'Polyethylene', 'Piece', 'FoamTech', 200, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 15, '2024-04-30 00:00:00', 9),
(88, 'Acoustic Door Seal Kit', 'Acoustic door seal kit for sealing gaps and preventing sound leaks around doors.', 'product_images/acoustic_door_seal.jpg', 30.00, 'Rubber', 'Set', 'DoorSeal', 150, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 25, '2024-04-30 00:00:00', 9),
(89, 'Thermal Insulation Wrap (100ft Roll)', 'Thermal insulation wrap roll for insulating HVAC ducts and pipes.', 'product_images/insulation_wrap.jpg', 60.00, 'Fiberglass', 'Roll', 'WrapMaster', 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 50, '2024-04-30 00:00:00', 9),
(90, 'Acoustic Barrier Curtain (10ft)', 'Acoustic barrier curtain for partitioning and noise isolation in industrial settings.', 'product_images/acoustic_barrier_curtain.jpg', 80.00, 'Vinyl', 'Piece', 'BarrierTech', 120, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 70, '2024-04-30 00:00:00', 9),
(91, 'Cardboard Shipping Box (Pack of 25)', 'Cardboard shipping box pack for shipping and packaging applications.', 'product_images/shipping_box.jpg', 40.00, 'Cardboard', 'Pack', 'ShipPro', 300, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 35, '2024-04-30 00:00:00', 10),
(92, 'Bubble Wrap Roll (100ft)', 'Bubble wrap roll for cushioning and protecting fragile items during shipping.', 'product_images/bubble_wrap.jpg', 30.00, 'Plastic', 'Roll', 'WrapGuard', 200, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 25, '2024-04-30 00:00:00', 10),
(93, 'Kraft Paper Roll (200ft)', 'Kraft paper roll for wrapping and void fill in packaging.', 'product_images/kraft_paper.jpg', 20.00, 'Paper', 'Roll', 'PaperPack', 400, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 15, '2024-04-30 00:00:00', 10),
(94, 'Packing Tape Dispenser', 'Heavy-duty packing tape dispenser for sealing boxes and packages.', 'product_images/packing_tape_dispenser.jpg', 15.00, 'Plastic', 'Piece', 'TapeTech', 150, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, '2024-04-30 00:00:00', 10),
(95, 'Stretch Wrap Film Roll (1000ft)', 'Stretch wrap film roll for bundling and securing palletized loads.', 'product_images/stretch_wrap_film.jpg', 50.00, 'Plastic', 'Roll', 'WrapMaster', 250, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 40, '2024-04-30 00:00:00', 10),
(96, 'Poly Mailer Envelope (Pack of 50)', 'Poly mailer envelope pack for shipping clothing and lightweight items.', 'product_images/poly_mailer_envelope.jpg', 25.00, 'Plastic', 'Pack', 'MailerPro', 200, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 20, '2024-04-30 00:00:00', 10),
(97, 'Foam Packing Peanuts (Cubic Foot)', 'Foam packing peanuts for cushioning and filling empty spaces in packages.', 'product_images/packing_peanuts.jpg', 20.00, 'Foam', 'Cubic Foot', 'PeanutPack', 300, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 15, '2024-04-30 00:00:00', 10),
(98, 'Corrugated Cardboard Sheet (4ft x 8ft)', 'Corrugated cardboard sheet for layering and protecting large items during shipping.', 'product_images/corrugated_sheet.jpg', 10.00, 'Cardboard', 'Sheet', 'CorrugateTech', 500, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 8, '2024-04-30 00:00:00', 10),
(99, 'Plastic Strapping Kit (500ft Roll)', 'Plastic strapping kit with tensioner and seals for securing heavy packages.', 'product_images/plastic_strapping_kit.jpg', 40.00, 'Plastic', 'Set', 'StrapTech', 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 35, '2024-04-30 00:00:00', 10),
(100, 'Air Pillow Packaging Machine', 'Air pillow packaging machine for on-demand inflatable cushioning.', 'product_images/air_pillow_machine.jpg', 150.00, 'Plastic', 'Piece', 'AirPack', 50, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 120, '2024-04-30 00:00:00', 10);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
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
(20, 'Linda', 'Hernandez', 'test123', 'linda.hernandez@example.com', 'profile_images/linda_hernandez.jpg', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `item_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`item_id`, `created_at`, `updated_at`, `product_id`, `user_id`) VALUES
(1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 15, 1),
(2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 28, 1),
(3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 7, 1),
(4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 42, 1),
(5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 19, 1),
(6, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 9, 2),
(7, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 30, 2),
(8, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 2),
(9, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 14, 2),
(10, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 35, 2),
(11, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 26, 3),
(12, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 18, 3),
(13, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 10, 3),
(14, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 3),
(15, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 22, 3),
(16, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 3, 4),
(17, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 27, 4),
(18, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 16, 4),
(19, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 48, 4),
(20, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 36, 4),
(21, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 8, 11),
(22, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 23, 11),
(23, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 31, 11),
(24, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 45, 11),
(25, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 13, 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `product_id` (`product_id`),
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
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

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
  ADD CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
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
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `reviews_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `wishlists_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `wishlists_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
