-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2024 at 05:51 PM
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
-- Database: `business`
--

-- --------------------------------------------------------

--
-- Table structure for table `adresses`
--

CREATE TABLE `adresses` (
  `user_id` char(36) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip_code` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adresses`
--

INSERT INTO `adresses` (`user_id`, `street`, `city`, `country`, `state`, `zip_code`, `phone`) VALUES
('20', '0865 Morningstar Pass', 'Livramento', 'Portugal', 'Lisboa', '41250-478', '922-422-1635'),
('88', '23 Anhalt Plaza', 'Malysheva', 'Russia', '', '60867-104', '584-381-6261'),
('7', '626 4th Trail', 'Majiang', 'China', '', '61748-044', '129-991-7327'),
('92', '83345 Arrowood Plaza', 'Takasaki', 'Japan', '', '0280-1430', '665-783-9037'),
('99', '2356 Heffernan Court', 'Ciputat', 'Indonesia', '', '62802-224', '868-606-8260'),
('23', '028 Thackeray Way', 'Lushan', 'China', '', '49701-9000', '281-777-8657'),
('95', '23 Crest Line Crossing', 'Biliran', 'Philippines', '', '50021-243', '997-162-2722'),
('75', '47 Heffernan Point', 'Wangmang', 'China', '', '37808-067', '867-299-5478'),
('39', '2 Monument Crossing', 'Hongtang', 'China', '', '37012-243', '969-653-4373'),
('22', '93934 Parkside Circle', 'Kutamangu', 'Indonesia', '', '43063-437', '853-655-3984'),
('25', '39499 Bartelt Park', 'Tala', 'Uruguay', '', '55289-315', '485-486-1532'),
('90', '030 Luster Avenue', 'Salamrejo', 'Indonesia', '', '68405-053', '991-140-1231'),
('12', '1395 Vidon Avenue', 'Hrazdan', 'Armenia', '', '37808-057', '657-973-6744'),
('37', '6559 2nd Park', 'Danchang', 'China', '', '10454-711', '632-748-3371'),
('80', '35972 Sugar Way', 'Skoútari', 'Greece', '', '55118-571', '540-936-2431'),
('48', '073 Artisan Road', 'Birmingham', 'United States', 'Alabama', '50810-2000', '205-644-2198'),
('9', '9420 Vernon Court', 'Chuntai', 'China', '', '52709-1001', '713-895-8183'),
('44', '6 Bayside Hill', 'Liulin', 'China', '', '0013-8727', '153-958-1405'),
('94', '05 Westport Court', 'San Mariano', 'Philippines', '', '11994-012', '550-350-8273'),
('53', '2265 Cottonwood Crossing', 'Figueiredo', 'Portugal', 'Braga', '49349-970', '433-170-7671'),
('28', '302 Spenser Point', 'Wichita', 'United States', 'Kansas', '54868-6280', '316-699-6165'),
('61', '90 Maryland Trail', 'Sabandia', 'Peru', '', '54868-1073', '694-805-2663'),
('85', '93795 Kenwood Hill', 'Waishan', 'China', '', '49527-005', '609-130-0942'),
('5', '21520 Forest Dale Court', 'Orekhovo-Borisovo Severnoye', 'Russia', '', '64376-612', '664-136-3534'),
('16', '41 Clemons Way', 'Aguitu', 'China', '', '59617-0020', '666-291-0897'),
('94', '7903 Banding Point', 'Zuogaiduoma', 'China', '', '51386-741', '484-659-3299'),
('83', '37 Spohn Circle', 'Paço', 'Portugal', 'Porto', '37000-394', '856-105-0427'),
('79', '01 Logan Pass', 'Kitahiroshima', 'Japan', '', '33261-732', '698-895-4005'),
('95', '812 Westerfield Street', 'Sathon', 'Thailand', '', '24385-190', '983-388-2352'),
('86', '7 Spaight Place', 'Panjāb', 'Afghanistan', '', '48951-2037', '289-727-7708'),
('76', '936 Red Cloud Avenue', 'Shicheng', 'China', '', '59923-702', '976-485-9085'),
('43', '97 Butterfield Terrace', 'Mohale’s Hoek', 'Lesotho', '', '64679-922', '465-785-1723'),
('86', '66961 Jay Drive', '\'s-Hertogenbosch', 'Netherlands', 'Provincie Noord-Brabant', '43406-0047', '408-261-0772'),
('19', '1549 Memorial Court', 'Hannō', 'Japan', '', '75857-2300', '841-989-0460'),
('26', '297 Nelson Center', 'Mafraq', 'Jordan', '', '68084-815', '561-348-2076'),
('53', '78020 Carey Place', 'Palaiseau', 'France', 'Île-de-France', '10812-529', '968-370-3528'),
('34', '02690 Memorial Circle', 'Kampinos', 'Poland', '', '68382-273', '254-438-2591'),
('54', '6 Everett Street', 'Ambar', 'Peru', '', '0781-5621', '736-526-1820'),
('27', '40656 Caliangt Drive', 'Canta', 'Peru', '', '65044-5101', '328-405-5125'),
('72', '88695 Meadow Valley Junction', 'Linjiang', 'China', '', '37000-475', '111-478-9880'),
('64', '75489 Eagle Crest Crossing', 'Vybor', 'Russia', '', '0406-8095', '400-893-1187'),
('69', '127 Oak Circle', 'Bulahblangaro', 'Indonesia', '', '55111-158', '466-624-7080'),
('64', '91151 Grayhawk Park', 'Riachão das Neves', 'Brazil', '', '49349-353', '320-554-2378'),
('28', '52 Superior Point', 'Fushan', 'China', '', '21130-092', '259-317-4857'),
('14', '2 Mendota Park', 'Chengtian', 'China', '', '58118-0526', '255-321-7416'),
('51', '7759 Paget Pass', 'Pagatan', 'Indonesia', '', '60512-9084', '832-705-6148'),
('16', '86 Springview Parkway', 'Tizguine', 'Morocco', '', '52685-344', '566-974-8750'),
('77', '86131 Talmadge Circle', 'Ksour Essaf', 'Tunisia', '', '0006-0951', '498-267-3812'),
('73', '3 Summer Ridge Point', 'Gostynin', 'Poland', '', '0363-5440', '455-153-7329'),
('34', '692 Rieder Place', 'Jiajiaying', 'China', '', '64117-288', '212-150-8500'),
('71', '738 Stephen Point', 'Bothaville', 'South Africa', '', '64064-050', '354-855-1247'),
('21', '0 Thierer Circle', 'Jiangyi', 'China', '', '54973-2909', '565-531-1744'),
('9', '7581 Sage Pass', 'Los Ángeles', 'Chile', '', '50227-3251', '592-947-6858'),
('7', '599 Esker Pass', 'Alès', 'France', 'Languedoc-Roussillon', '50458-176', '891-601-1850'),
('71', '62739 Dottie Alley', 'Minanga Norte', 'Philippines', '', '0378-5420', '997-980-5774'),
('80', '672 Bayside Park', 'Saint-Quentin-en-Yvelines', 'France', 'Île-de-France', '42411-010', '143-872-9942'),
('97', '4144 Forest Center', 'Jōetsu', 'Japan', '', '62032-520', '268-920-0370'),
('79', '6422 Derek Lane', 'La Seyne-sur-Mer', 'France', 'Provence-Alpes-Côte d\'Azur', '68084-179', '205-195-9907'),
('32', '6 Bartillon Point', 'Khabarovsk', 'Russia', '', '0904-6342', '565-279-3606'),
('94', '22 Dottie Crossing', 'Oguta', 'Nigeria', '', '53808-0752', '392-721-4661'),
('55', '43 Ridgeview Center', 'Gengzhuang', 'China', '', '49288-0610', '662-434-8810'),
('81', '0 Dakota Park', 'Sidowayah Lor', 'Indonesia', '', '68382-079', '376-698-6649'),
('10', '446 Maple Wood Avenue', 'Soko', 'Indonesia', '', '61787-451', '673-348-9103'),
('21', '8 Sullivan Alley', 'Jinka', 'Ethiopia', '', '55154-3680', '438-329-7044'),
('97', '38331 Chive Trail', 'Montélimar', 'France', 'Rhône-Alpes', '49035-739', '589-210-4764'),
('38', '9 Lukken Street', 'Aix-en-Provence', 'France', 'Provence-Alpes-Côte d\'Azur', '54569-4400', '534-218-6865'),
('87', '4 Bartelt Road', 'Xingong', 'China', '', '62034-015', '249-315-6821'),
('28', '6305 Pankratz Court', 'Qukës-Skënderbe', 'Albania', '', '0409-3218', '904-316-0287'),
('87', '08 Hoepker Road', 'Bagroy', 'Philippines', '', '0615-7586', '883-726-8696'),
('11', '21175 Express Lane', 'Padre Bernardo', 'Brazil', '', '57520-0797', '159-937-8779');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` bigint(20) NOT NULL,
  `product_image` bigint(20) NOT NULL,
  `price` bigint(20) NOT NULL,
  `unit_of_measure` bigint(20) NOT NULL,
  `created_at` bigint(20) NOT NULL,
  `updated_at` bigint(20) NOT NULL,
  `user_id` char(36) NOT NULL,
  `product_id` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` char(36) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `price` bigint(20) NOT NULL,
  `quantity` bigint(20) NOT NULL,
  `total` bigint(20) NOT NULL,
  `created_at` bigint(20) NOT NULL,
  `updated_at` bigint(20) NOT NULL,
  `user_id` char(36) NOT NULL,
  `product_id` char(36) NOT NULL,
  `Cost` double NOT NULL,
  `status` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `productImage` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `material` varchar(255) NOT NULL,
  `unit_of_measurement` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `category_id` char(36) NOT NULL,
  `buy_price` double NOT NULL,
  `bought_at` bigint(20) NOT NULL,
  `daily_storage_cost` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `Review` text NOT NULL,
  `product_id` char(36) NOT NULL,
  `user_id` char(36) NOT NULL,
  `stars` int(11) NOT NULL,
  `date_time` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` char(36) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pfp` varchar(255) DEFAULT NULL,
  `Role` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `first_name`, `last_name`, `email`, `password`, `pfp`, `Role`, `created_at`) VALUES
('1', 'John', 'Doe', 'john@example.com', 'password123', 'pfp1.jpg', 1, '2024-04-11 23:44:58'),
('10', 'Layney', 'Le feaver', 'llefeaver9@sohu.com', '$2a$04$lgY3WnBvIIqr7HEIkX2UW.ee5CUHqxSn3m4DKr/vhEtBLBJJnmweq', 'http://dummyimage.com/242x100.png/cc0000/ffffff', 0, '0000-00-00 00:00:00'),
('100', 'Nevile', 'Bayford', 'nbayford2r@canalblog.com', '$2a$04$UbTt1qr2P0v1SjhfN2Kn8u/v/3V1OPYmjlDEoDADz0CdLJmF9plW2', 'http://dummyimage.com/139x100.png/ff4444/ffffff', 0, '0000-00-00 00:00:00'),
('11', 'Corene', 'Jonin', 'cjonina@qq.com', '$2a$04$W7EzZtYcuAu49M3/lTFj0eqHUBd9AI1vLV0CM9qSYnQZoVMfNjW7i', 'http://dummyimage.com/143x100.png/ff4444/ffffff', 1, '0000-00-00 00:00:00'),
('12', 'Hugibert', 'Gascoyne', 'hgascoyneb@123-reg.co.uk', '$2a$04$jeAVzzBMdJNO.UofxgEA1.9nlqSZbjMnX5psbfbxAUfA9ssCoFH/q', 'http://dummyimage.com/138x100.png/cc0000/ffffff', 0, '0000-00-00 00:00:00'),
('13', 'Thomasina', 'Keighly', 'tkeighlyc@berkeley.edu', '$2a$04$LG6s2lt1J5g0Vq6MfEwqAu.5TBiVeMhhUKuwNi4wYhpHnhN09TBge', 'http://dummyimage.com/105x100.png/ff4444/ffffff', 1, '0000-00-00 00:00:00'),
('14', 'Leodora', 'Pendleton', 'lpendletond@seesaa.net', '$2a$04$afE8OsMcnxR8/K/ZtsNS0uChWA3koXY81Wusa.LfPQBYAh/c2cX8a', 'http://dummyimage.com/147x100.png/dddddd/000000', 1, '0000-00-00 00:00:00'),
('15', 'Samuel', 'Chiddy', 'schiddye@loc.gov', '$2a$04$8wiQfeK0L8NH9GJIID4sleYMy9VLAnrmghsLNqXn6xDWi.0Xw2RsW', 'http://dummyimage.com/159x100.png/cc0000/ffffff', 0, '0000-00-00 00:00:00'),
('16', 'Boone', 'Pitchers', 'bpitchersf@phoca.cz', '$2a$04$cBCaVSJ5Jbty9zPANkBJVuxS4eQrWpnuBHOe.DZykqG3PGOCVvn3C', 'http://dummyimage.com/232x100.png/cc0000/ffffff', 0, '0000-00-00 00:00:00'),
('17', 'Kile', 'Saby', 'ksabyg@va.gov', '$2a$04$iRolt67j8HefNrfnQEaumuIX7IdFc3/HaQo0VbHrtZsCiJ4wMN3ue', 'http://dummyimage.com/122x100.png/cc0000/ffffff', 0, '0000-00-00 00:00:00'),
('18', 'Abran', 'Szymon', 'aszymonh@sun.com', '$2a$04$rIqXqwsODVHfV6weMCo6LuztiFtxwSe2I91TPNh/t9x9qhgwqhGme', 'http://dummyimage.com/220x100.png/dddddd/000000', 1, '0000-00-00 00:00:00'),
('19', 'Ruy', 'Ivanyukov', 'rivanyukovi@reddit.com', '$2a$04$DA5vYwkiSNGfWKHqFyEQ6esQ/k10ZqE4G.m2T1ZfpvOshkuv.0QMS', 'http://dummyimage.com/203x100.png/5fa2dd/ffffff', 0, '0000-00-00 00:00:00'),
('2', 'Jane', 'Smith', 'jane@example.com', 'password456', 'pfp2.jpg', 1, '2024-04-11 23:44:58'),
('20', 'Nanni', 'Rushby', 'nrushbyj@unicef.org', '$2a$04$4fEtLJ31HxboerO5KZItlugN4f7Cg9dQM5rdLGmwyE2jqgPmcLBWu', 'http://dummyimage.com/100x100.png/5fa2dd/ffffff', 1, '0000-00-00 00:00:00'),
('21', 'Cortie', 'Gebhardt', 'cgebhardtk@etsy.com', '$2a$04$EhD.qQlcSIzTdeRjZzc75urpqZPW38EuyH/nDswM1OMShvz1U5dou', 'http://dummyimage.com/126x100.png/cc0000/ffffff', 0, '0000-00-00 00:00:00'),
('22', 'Robinson', 'Treadaway', 'rtreadawayl@biblegateway.com', '$2a$04$BjRNeUr7Bq5yIk0kCwPD5.RNfq/Oy22h8E.s8f5dA3RknRbh1zN2.', 'http://dummyimage.com/165x100.png/dddddd/000000', 0, '0000-00-00 00:00:00'),
('23', 'Averyl', 'Akhurst', 'aakhurstm@ow.ly', '$2a$04$9ehiG0K3suk0YWE2occ0n.WSqc3o.duZAWY2Q7hFcWbCCDvaCqGnq', 'http://dummyimage.com/240x100.png/cc0000/ffffff', 1, '0000-00-00 00:00:00'),
('24', 'Amie', 'Izkovitz', 'aizkovitzn@blogspot.com', '$2a$04$Z.RLMVpT0wVWFcAZxsDcOOCGidB0NI0OnfdXiy3cVcou4mPRKN7GW', 'http://dummyimage.com/243x100.png/cc0000/ffffff', 0, '0000-00-00 00:00:00'),
('25', 'Sande', 'Byrcher', 'sbyrchero@slate.com', '$2a$04$3WlFdxEhWokd37X7CLGXMeUnkzNpmhI9fFhkzRkN9op/jHuj5NEo2', 'http://dummyimage.com/104x100.png/5fa2dd/ffffff', 1, '0000-00-00 00:00:00'),
('26', 'Simeon', 'Mannagh', 'smannaghp@nytimes.com', '$2a$04$PaMty1rzd5xs9jTjwdy0bevZfdnykvHj6mhwvzB0XM364HfNbu1xK', 'http://dummyimage.com/143x100.png/ff4444/ffffff', 0, '0000-00-00 00:00:00'),
('27', 'Pearce', 'Rapport', 'prapportq@cmu.edu', '$2a$04$RkhmJfH.s8Qe4ITfQ.7rIuPmwF7uziWncIGuCTnxwOHo/I7dGcjla', 'http://dummyimage.com/213x100.png/5fa2dd/ffffff', 1, '0000-00-00 00:00:00'),
('28', 'Georgie', 'Burchett', 'gburchettr@bloglovin.com', '$2a$04$q6u6BHgd71ugOgd8/XR2ZOoxEgBn6f5fg/0lg/dfkEeylwjiZdIGG', 'http://dummyimage.com/114x100.png/dddddd/000000', 0, '0000-00-00 00:00:00'),
('29', 'Amory', 'Alleyne', 'aalleynes@usa.gov', '$2a$04$MfDXPfn6wS8m20463QMwrelIvLKYpt0mTZDCWXwif813XM26ztMbq', 'http://dummyimage.com/134x100.png/cc0000/ffffff', 1, '0000-00-00 00:00:00'),
('3', 'Alice', 'Johnson', 'alice@example.com', 'password789', 'pfp3.jpg', 0, '2024-04-11 23:44:58'),
('30', 'Nan', 'Kirwan', 'nkirwant@lulu.com', '$2a$04$U0gJC3EPGg3YKkh3TY.rneKLbeDPZpjeYgiiSQTuLJ.TjaKYYAy3e', 'http://dummyimage.com/234x100.png/cc0000/ffffff', 0, '0000-00-00 00:00:00'),
('31', 'Dorri', 'Gynne', 'dgynneu@spiegel.de', '$2a$04$FbqKED9osFBSqMaeZ6I67uJkcql/PZHFkEufUSu9.UAp3S8lgCSbi', 'http://dummyimage.com/200x100.png/cc0000/ffffff', 0, '0000-00-00 00:00:00'),
('32', 'Richmound', 'Derle', 'rderlev@utexas.edu', '$2a$04$.8XhTLLaK96yUvu6NLSVCuduU5PkNg68Lxbnc2ULqXXNRUJWIl8V.', 'http://dummyimage.com/219x100.png/ff4444/ffffff', 1, '0000-00-00 00:00:00'),
('33', 'Umberto', 'Heinke', 'uheinkew@bbc.co.uk', '$2a$04$Cc24zQBNWbAAynbYX1Uni.ohFV9Iyg8jMc/SMaCwsGecXhjDp/n1W', 'http://dummyimage.com/109x100.png/5fa2dd/ffffff', 0, '0000-00-00 00:00:00'),
('34', 'Stephan', 'Berriball', 'sberriballx@newsvine.com', '$2a$04$u6TpasiB2RUnT9NOezCK6ONik1Yhrnyd8F3Dig7x3h/UQzvf03K3i', 'http://dummyimage.com/168x100.png/dddddd/000000', 1, '0000-00-00 00:00:00'),
('35', 'Nichole', 'Kneal', 'nknealy@printfriendly.com', '$2a$04$T0kUdsztrWd96jHqWwGYmea/MaUo/Sc8UtByfIQGCM/n/Z6K.4xSK', 'http://dummyimage.com/226x100.png/ff4444/ffffff', 1, '0000-00-00 00:00:00'),
('36', 'Quillan', 'Hair', 'qhairz@house.gov', '$2a$04$MZ1CRWkWMYA7OS08UsGgu.DsAaf9I8dfQfDkIyi5dTaBQB4o4ittu', 'http://dummyimage.com/221x100.png/dddddd/000000', 1, '0000-00-00 00:00:00'),
('37', 'Simone', 'Hiscocks', 'shiscocks10@statcounter.com', '$2a$04$iJxD9EQrPcXq3RliQMQf0.FDlLoUHnkPdopEZ8bx5.nOKEg8KIos2', 'http://dummyimage.com/240x100.png/5fa2dd/ffffff', 0, '0000-00-00 00:00:00'),
('38', 'Krysta', 'Style', 'kstyle11@huffingtonpost.com', '$2a$04$R7LoU9KSQtiQJGUnmeSvxuFBNTZH0ODM7fxhv.SWkCMeO/aIJXi.2', 'http://dummyimage.com/163x100.png/ff4444/ffffff', 1, '0000-00-00 00:00:00'),
('39', 'Blaire', 'Cote', 'bcote12@ycombinator.com', '$2a$04$fyzgWaiGIXMEHRoy8QrcbuO39Po9XPR2e9IQ8lkNWxplGEhLPPHQm', 'http://dummyimage.com/188x100.png/cc0000/ffffff', 1, '0000-00-00 00:00:00'),
('40', 'Rheta', 'Neville', 'rneville13@tamu.edu', '$2a$04$LMwKfq1jBhip5Z92t5eziOBb/wLZWd2kjH/iGjdB19xzZM8qkaajy', 'http://dummyimage.com/189x100.png/cc0000/ffffff', 1, '0000-00-00 00:00:00'),
('41', 'Debee', 'Eskrick', 'deskrick14@biblegateway.com', '$2a$04$BWQfOgJkJr7dRaqD.Bh.buch.pTAZHg8owEf0PHs0gkb6YOimHRpe', 'http://dummyimage.com/216x100.png/cc0000/ffffff', 0, '0000-00-00 00:00:00'),
('42', 'Carny', 'Cruden', 'ccruden15@google.de', '$2a$04$ELRLFTwk6dqqYEXcu3ENyOQnEj6.jR3nWO8LcPyHyA5ZquK9AY3JG', 'http://dummyimage.com/105x100.png/5fa2dd/ffffff', 1, '0000-00-00 00:00:00'),
('43', 'Rusty', 'Schops', 'rschops16@wordpress.com', '$2a$04$UrXywnvYSCHU56WvQuC2zuvTrrC.qUnGxZci3qdcQSTDmPWz.GDQi', 'http://dummyimage.com/178x100.png/cc0000/ffffff', 0, '0000-00-00 00:00:00'),
('44', 'Avrom', 'Castagneto', 'acastagneto17@histats.com', '$2a$04$x99LWgQarj888FJOn7OQ5uEasRK85G0cgoSTDFrCnW0BqaJY5tlNy', 'http://dummyimage.com/165x100.png/5fa2dd/ffffff', 0, '0000-00-00 00:00:00'),
('45', 'Alli', 'Diess', 'adiess18@icio.us', '$2a$04$yCq3kdIWmp/oeVQto7PlAu01JoZ.WF1O6uMBVtbiUvhV6f91DDizS', 'http://dummyimage.com/122x100.png/5fa2dd/ffffff', 0, '0000-00-00 00:00:00'),
('46', 'Kellsie', 'Vaughan', 'kvaughan19@ed.gov', '$2a$04$GmEk8ADWWhNkpmaXFRvMh.9rfgNwpsyiVf/AH0t0cRqpiAuh5Um4e', 'http://dummyimage.com/186x100.png/ff4444/ffffff', 0, '0000-00-00 00:00:00'),
('47', 'Averell', 'Dudderidge', 'adudderidge1a@abc.net.au', '$2a$04$YFEk6gvrbpa8rP1ILrBMe.2rJ3zJfDjYGtbIyGXIkAiu1h.uxGplW', 'http://dummyimage.com/127x100.png/ff4444/ffffff', 1, '0000-00-00 00:00:00'),
('48', 'Bearnard', 'Clulee', 'bclulee1b@webeden.co.uk', '$2a$04$UE9KPa3FWkZMS/lhWhwItOqCaxtQZ.BBboJSS7U5Bk61dJ5cJ8qTe', 'http://dummyimage.com/144x100.png/5fa2dd/ffffff', 0, '0000-00-00 00:00:00'),
('49', 'Flossi', 'Lummus', 'flummus1c@godaddy.com', '$2a$04$7OQ9sKxcrY.Fpc..EIrYmOp404SXAL.0O6PKofaiQycdH6TBuBgFy', 'http://dummyimage.com/213x100.png/cc0000/ffffff', 0, '0000-00-00 00:00:00'),
('5', 'Susi', 'Kornas', 'skornas4@tiny.cc', '$2a$04$vXj9QcsKNa2gYFlfcLR0POT.IimWhD2cczzl9WOnZq5wOcRVvmu2G', 'http://dummyimage.com/129x100.png/dddddd/000000', 1, '0000-00-00 00:00:00'),
('50', 'Junie', 'Rutherford', 'jrutherford1d@cnn.com', '$2a$04$JNbcUAisOHZQG9nOo685oe4a33U4MKcv.pG.8lRsIlIZmv0.txn9u', 'http://dummyimage.com/150x100.png/cc0000/ffffff', 0, '0000-00-00 00:00:00'),
('51', 'Andree', 'Millen', 'amillen1e@free.fr', '$2a$04$OGi6AYNJmmWzjYdbtiRbZugaEB7/GBSkbzAxwWQZKHnPIw.DF/rIO', 'http://dummyimage.com/190x100.png/5fa2dd/ffffff', 0, '0000-00-00 00:00:00'),
('52', 'Aarika', 'Cotty', 'acotty1f@webs.com', '$2a$04$Z8KY/5Kud.jAUbgbt3D4PuLjsRWeKgu3/JcU8kwdNWS4cvg1/SiBu', 'http://dummyimage.com/208x100.png/cc0000/ffffff', 1, '0000-00-00 00:00:00'),
('53', 'Christin', 'Boulder', 'cboulder1g@usatoday.com', '$2a$04$oj3zsXeJuDcAZrNdEcJkVuARHfPm4UIKfFE.UtiS9nFt1rF2BKO5m', 'http://dummyimage.com/144x100.png/ff4444/ffffff', 0, '0000-00-00 00:00:00'),
('54', 'Coralyn', 'Guillot', 'cguillot1h@buzzfeed.com', '$2a$04$vdv06MbzvNJzLTs2jLGqqu4WJXww20s5sHBn8mseO63VX2/gv04be', 'http://dummyimage.com/245x100.png/5fa2dd/ffffff', 0, '0000-00-00 00:00:00'),
('55', 'Emylee', 'Janaud', 'ejanaud1i@squidoo.com', '$2a$04$2re2orTqXUGxayAyCwOCw.D9IxbDMdeYP0t12/ImoW1/MKh.9ukim', 'http://dummyimage.com/147x100.png/cc0000/ffffff', 1, '0000-00-00 00:00:00'),
('56', 'Paolina', 'Stive', 'pstive1j@bloglovin.com', '$2a$04$vS2CTE6bJGstA1N5piDNv.9P0VxgljguwbUiUuF7i/aP7Ir9TxT36', 'http://dummyimage.com/162x100.png/ff4444/ffffff', 0, '0000-00-00 00:00:00'),
('57', 'Joseph', 'Awton', 'jawton1k@163.com', '$2a$04$WvhZcA3DhXeLKoZq0ZCSnu2XEMMjiK9NycW5C6b66z8U8TabLm40q', 'http://dummyimage.com/178x100.png/ff4444/ffffff', 0, '0000-00-00 00:00:00'),
('58', 'Read', 'Kilgannon', 'rkilgannon1l@narod.ru', '$2a$04$ZwpLbIIWB5iCii13dCP21eBQQ7GLF9qUACcklnFAdS0x39M9Lo/Ga', 'http://dummyimage.com/232x100.png/ff4444/ffffff', 0, '0000-00-00 00:00:00'),
('59', 'Robinette', 'Sandercock', 'rsandercock1m@techcrunch.com', '$2a$04$LP0GEqnvB3pN0VLCaHCvGOqGfuo6VoTmoWhGrA.s4TlJ0BpVXWhOG', 'http://dummyimage.com/118x100.png/ff4444/ffffff', 1, '0000-00-00 00:00:00'),
('6', 'Arne', 'Avramow', 'aavramow5@dedecms.com', '$2a$04$3Te21wD48uou2965.GiqkOHSYpSLyE8mCdXobTzUiWhLh4R6egjZ.', 'http://dummyimage.com/224x100.png/cc0000/ffffff', 0, '0000-00-00 00:00:00'),
('60', 'Rosemonde', 'Francombe', 'rfrancombe1n@amazonaws.com', '$2a$04$zrAEdnCr1NQixubC4jcr7.2tmgGgQqgyC4TWtbP/A45vTwjSbuzIG', 'http://dummyimage.com/178x100.png/5fa2dd/ffffff', 1, '0000-00-00 00:00:00'),
('61', 'Law', 'Clapperton', 'lclapperton1o@alexa.com', '$2a$04$Nq/5SO4ZfMbxBwc1L0X2jOgVRf3K0nS99NMDqOnJ/DKG7RneTYuye', 'http://dummyimage.com/217x100.png/cc0000/ffffff', 0, '0000-00-00 00:00:00'),
('62', 'Waly', 'Colbourne', 'wcolbourne1p@google.pl', '$2a$04$9uuff/dDDOL0950bju6OsuVnpHCGKydV3/sOjTo2F3ttk1UH/GtYi', 'http://dummyimage.com/210x100.png/dddddd/000000', 1, '0000-00-00 00:00:00'),
('63', 'Lurlene', 'Spriggen', 'lspriggen1q@cbsnews.com', '$2a$04$cSxjGNHFJmwqJbwxGuMw1.te/5RrNw.BwwaYA.n1hF12Lu/kDd1pK', 'http://dummyimage.com/172x100.png/cc0000/ffffff', 0, '0000-00-00 00:00:00'),
('64', 'Kora', 'Chancelier', 'kchancelier1r@networkadvertising.org', '$2a$04$ABf4kV04q1gYObLDkGSOre3UWyHQcKj2SCARSZl/Rnab4E07hNEJa', 'http://dummyimage.com/190x100.png/cc0000/ffffff', 1, '0000-00-00 00:00:00'),
('65', 'Delainey', 'Quinnelly', 'dquinnelly1s@bigcartel.com', '$2a$04$S7VWaxE.PSnOvYg9qQTqz.A5C7rPb11AHcRXlPEz8OfbvNb5F/roe', 'http://dummyimage.com/199x100.png/cc0000/ffffff', 0, '0000-00-00 00:00:00'),
('66', 'Lulita', 'O\' Byrne', 'lobyrne1t@yolasite.com', '$2a$04$SVIaGlIxrLYr75U.lswy/umAmIghjfoE4sfnAu1VxPY9DHmPDxE6e', 'http://dummyimage.com/225x100.png/dddddd/000000', 1, '0000-00-00 00:00:00'),
('67', 'Stu', 'Lampke', 'slampke1u@irs.gov', '$2a$04$COZXlvkoHST.vnKF5QpFHe7m1FJUkoLR1ptwVzxf5jDu3DZmw7iWq', 'http://dummyimage.com/104x100.png/cc0000/ffffff', 0, '0000-00-00 00:00:00'),
('68', 'Paulo', 'Okenfold', 'pokenfold1v@moonfruit.com', '$2a$04$fIym5BVbNJLK1UvSMZJKreR43WfpjGpM1rGNS5OInFt8nsGySG.t.', 'http://dummyimage.com/171x100.png/ff4444/ffffff', 0, '0000-00-00 00:00:00'),
('69', 'Thane', 'Zecchii', 'tzecchii1w@paypal.com', '$2a$04$Owwvqe5.9CP9HLIck1uJT.s6mOg5IEsDj5LtZxUX3rGS07eleT6DG', 'http://dummyimage.com/137x100.png/dddddd/000000', 1, '0000-00-00 00:00:00'),
('7', 'Rosette', 'Notton', 'rnotton6@so-net.ne.jp', '$2a$04$Ob3SZaW5pbi2.NM7N5LsdOxGrj/TWCcZGzJllPKX/HRWNRxAGMZXy', 'http://dummyimage.com/120x100.png/ff4444/ffffff', 1, '0000-00-00 00:00:00'),
('70', 'Fannie', 'Assante', 'fassante1x@ucla.edu', '$2a$04$5OeJP6bUxXp/EdYH0MR5juI3J02nnttc3PZrxnHJHM5nbdiM6Atue', 'http://dummyimage.com/119x100.png/dddddd/000000', 1, '0000-00-00 00:00:00'),
('71', 'Moshe', 'Whitland', 'mwhitland1y@seattletimes.com', '$2a$04$ytbtu8Fq/rQAt6J2AGaxBePxyzOA88GaLBunVnWZv121sbYD1CbKK', 'http://dummyimage.com/149x100.png/ff4444/ffffff', 1, '0000-00-00 00:00:00'),
('72', 'Cairistiona', 'Abbets', 'cabbets1z@exblog.jp', '$2a$04$k6kdBCRih0HcEKTZT9lq1.M6hilDU/KXhk2cLx4H8AN.06H9zyP0W', 'http://dummyimage.com/200x100.png/5fa2dd/ffffff', 1, '0000-00-00 00:00:00'),
('73', 'Carleton', 'Lyndon', 'clyndon20@canalblog.com', '$2a$04$lnXSDJE6Rx.6HJWlwcWhNud9JCZTgqCWr4FINNqhftXxSJset1MMG', 'http://dummyimage.com/108x100.png/cc0000/ffffff', 1, '0000-00-00 00:00:00'),
('74', 'Valida', 'Dudgeon', 'vdudgeon21@merriam-webster.com', '$2a$04$Vmt9NVr617SmFxc3HpeWROBZ.iJWggzi6I4iFewyg1M9AEJ3498B6', 'http://dummyimage.com/203x100.png/ff4444/ffffff', 1, '0000-00-00 00:00:00'),
('75', 'Geralda', 'Brandham', 'gbrandham22@linkedin.com', '$2a$04$9BCukAjE9spknQwztf7uZuOHVxVbb9NbaH8ZIGiGU8Tm319wCbGiK', 'http://dummyimage.com/244x100.png/ff4444/ffffff', 0, '0000-00-00 00:00:00'),
('76', 'Eileen', 'Alldridge', 'ealldridge23@hubpages.com', '$2a$04$M21vI5ffl0mIgqFDuv0FcOGBYjXVTw/UgdBiD/msGQnoECDvgvRUu', 'http://dummyimage.com/163x100.png/cc0000/ffffff', 0, '0000-00-00 00:00:00'),
('77', 'Titus', 'Kleen', 'tkleen24@ocn.ne.jp', '$2a$04$OTlI1XcaeJ81BeZfFH8unOuyp8F2l9RkwNP.G3dY1HMJJovZ8PUv.', 'http://dummyimage.com/237x100.png/cc0000/ffffff', 0, '0000-00-00 00:00:00'),
('78', 'Di', 'Noblet', 'dnoblet25@census.gov', '$2a$04$xFvvMTqeNVCu/0qxUe2rnej0CitZciHJymkMdLBmspGhXMUO6TDN2', 'http://dummyimage.com/209x100.png/dddddd/000000', 0, '0000-00-00 00:00:00'),
('79', 'Dari', 'Arsey', 'darsey26@seesaa.net', '$2a$04$i2c9xWkAKQz3V0WM8oTSGeHjJCsP945u.OqqJC.I0ItG04iQb/S3G', 'http://dummyimage.com/122x100.png/dddddd/000000', 0, '0000-00-00 00:00:00'),
('8', 'Mitchael', 'Kither', 'mkither7@economist.com', '$2a$04$fBh1ohHhdwiEVb85wrW5LeI.WpOsHQNEc5zW.xyeXwwWCf8DnP1Ha', 'http://dummyimage.com/228x100.png/cc0000/ffffff', 1, '0000-00-00 00:00:00'),
('80', 'Vinnie', 'Manuel', 'vmanuel27@over-blog.com', '$2a$04$MO5NmFYQRSEZvq332EYrU.OM6DANVUm6qYGX/LYn.IG/6zSZQoN72', 'http://dummyimage.com/220x100.png/cc0000/ffffff', 0, '0000-00-00 00:00:00'),
('81', 'Sisile', 'Signore', 'ssignore28@eepurl.com', '$2a$04$DBTF3ej/ZGU4stzz.nMIA.XvDnU0aXpAywNwuczPWBrm0uX2tpCUG', 'http://dummyimage.com/161x100.png/ff4444/ffffff', 0, '0000-00-00 00:00:00'),
('82', 'Bonita', 'Tansey', 'btansey29@geocities.jp', '$2a$04$A7gahuxtGQ2eZ21zVJVKGu4J164mwoqjfsIEIhX5/Sf0sKLtKl9sK', 'http://dummyimage.com/154x100.png/5fa2dd/ffffff', 0, '0000-00-00 00:00:00'),
('83', 'Ike', 'Outright', 'ioutright2a@dot.gov', '$2a$04$yp8PAfstele0GtQh5zHziOiBUJ2tu6TAkc3BTRsUc4igauHuE/MVy', 'http://dummyimage.com/246x100.png/cc0000/ffffff', 0, '0000-00-00 00:00:00'),
('84', 'Julia', 'Rylett', 'jrylett2b@arstechnica.com', '$2a$04$xHpv8iWweSF6QqpzkvLPYuiC3yaIk15bJcjDOVAAnuTYsgEC04P2m', 'http://dummyimage.com/171x100.png/cc0000/ffffff', 1, '0000-00-00 00:00:00'),
('85', 'Marilyn', 'Holttom', 'mholttom2c@ted.com', '$2a$04$ewW1XeBVsqyFUTT./qsVTu5W.BhY04wmKze1sdQYywIgVXWGBvvz.', 'http://dummyimage.com/206x100.png/dddddd/000000', 0, '0000-00-00 00:00:00'),
('86', 'Blondelle', 'Ashborn', 'bashborn2d@nps.gov', '$2a$04$jyzKM/RgSz0MfcpSZj6rOeJjwARYr0Wcjt4iXo46gUJqDWwZ8Is0e', 'http://dummyimage.com/160x100.png/5fa2dd/ffffff', 1, '0000-00-00 00:00:00'),
('87', 'Garrick', 'Bilbee', 'gbilbee2e@smugmug.com', '$2a$04$S1C.rFicN0Rgmk1W9P1.tucZGR2uCELvkR9RT2dn9LTZQeZei8Ig.', 'http://dummyimage.com/130x100.png/cc0000/ffffff', 0, '0000-00-00 00:00:00'),
('88', 'Christabella', 'Stalf', 'cstalf2f@booking.com', '$2a$04$m40CNYzPcJwn6IElpR.WqeOxcPR5hNTwmRybk5L.ZIn4UW/e97C4C', 'http://dummyimage.com/193x100.png/5fa2dd/ffffff', 1, '0000-00-00 00:00:00'),
('89', 'Burtie', 'Seamark', 'bseamark2g@cyberchimps.com', '$2a$04$eCMfnG2mDur5/0WCTnCDK.VF1Df80t5CqcOiNtUtqpHCe819hrHem', 'http://dummyimage.com/178x100.png/ff4444/ffffff', 0, '0000-00-00 00:00:00'),
('9', 'Ignace', 'Ezzy', 'iezzy8@businessweek.com', '$2a$04$HAYHJLuolbxzqh/BAaAcIe33ar6uTELwSY9CD4.D7xVP2SgeU937G', 'http://dummyimage.com/227x100.png/ff4444/ffffff', 1, '0000-00-00 00:00:00'),
('90', 'Daile', 'Holburn', 'dholburn2h@addthis.com', '$2a$04$okCbZwbGR0gytgwBn9tZpe2PbcllDN.CLSyqJ5gLNADjN2u2ZyV4S', 'http://dummyimage.com/208x100.png/ff4444/ffffff', 0, '0000-00-00 00:00:00'),
('91', 'Aldwin', 'McPhilip', 'amcphilip2i@google.it', '$2a$04$kwmsuBBVsjJSJNDqiNDqZ.DkY0b9OegZcX.k6iKxbcTd69knWBgqW', 'http://dummyimage.com/145x100.png/cc0000/ffffff', 1, '0000-00-00 00:00:00'),
('92', 'Ringo', 'Beavis', 'rbeavis2j@utexas.edu', '$2a$04$ZjHmOaHR4ryLx3.cqhcBIOoEZ7jFcpaHHRJkf5/RY8JygGI2zjnvu', 'http://dummyimage.com/179x100.png/5fa2dd/ffffff', 1, '0000-00-00 00:00:00'),
('93', 'Ellene', 'Tinham', 'etinham2k@usatoday.com', '$2a$04$b2yo8qY1X7cnM203KU9x8.80E1vcfXP0Ys1XgpqjPfPbHo.9xKy9i', 'http://dummyimage.com/144x100.png/5fa2dd/ffffff', 1, '0000-00-00 00:00:00'),
('94', 'Clarinda', 'Every', 'cevery2l@alibaba.com', '$2a$04$Cn2HCrgGS8/bEfDYhjuFxeKVWEuG01uzV5TvWYQuwIn2vfU.tGIvG', 'http://dummyimage.com/103x100.png/5fa2dd/ffffff', 0, '0000-00-00 00:00:00'),
('95', 'Goldy', 'Patrono', 'gpatrono2m@abc.net.au', '$2a$04$8TCmrT3o/Ix6WKHBPi9QLuLifVneKPPdBx2iXKHqfRH2i08IATjt6', 'http://dummyimage.com/125x100.png/cc0000/ffffff', 0, '0000-00-00 00:00:00'),
('96', 'Ingrim', 'Dysert', 'idysert2n@github.com', '$2a$04$z5I.Fh2TGMQ3Picroq//U.kQpAD4.6Vt5M06cgqzfdrVbv3FUlLY.', 'http://dummyimage.com/167x100.png/5fa2dd/ffffff', 1, '0000-00-00 00:00:00'),
('97', 'Sibyl', 'McConnel', 'smcconnel2o@nih.gov', '$2a$04$Jzff4FYU7uybgTeW/UjwWOZS3Z6jrS0AFSSxfvQCSKylDtLAH3hwi', 'http://dummyimage.com/217x100.png/5fa2dd/ffffff', 1, '0000-00-00 00:00:00'),
('98', 'Lonnie', 'McFeat', 'lmcfeat2p@freewebs.com', '$2a$04$oMgFtW0OsU/osRX7rWOlPekJgGC/aanYhtrOsiH4aR8keQ/E47Y3m', 'http://dummyimage.com/243x100.png/cc0000/ffffff', 1, '0000-00-00 00:00:00'),
('99', 'Charis', 'Slatter', 'cslatter2q@bloomberg.com', '$2a$04$6Slk6HE2OSvuurEcTnOKRe6oYdHZsmPD98qw5OHx9gwq5wDNaNX/u', 'http://dummyimage.com/188x100.png/dddddd/000000', 1, '0000-00-00 00:00:00'),
('id', 'first_name', 'last_name', 'email', 'password', 'pfp', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `unit_of_measure` varchar(255) NOT NULL,
  `created_at` bigint(20) NOT NULL,
  `updated_at` bigint(20) NOT NULL,
  `user_id` char(36) NOT NULL,
  `product_id` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adresses`
--
ALTER TABLE `adresses`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adresses`
--
ALTER TABLE `adresses`
  ADD CONSTRAINT `adresses_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`ID`);

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`ID`),
  ADD CONSTRAINT `carts_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`ID`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`ID`);

--
-- Constraints for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `wishlists_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`ID`),
  ADD CONSTRAINT `wishlists_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
