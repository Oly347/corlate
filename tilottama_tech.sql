-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2019 at 02:06 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tilottama_tech`
--

-- --------------------------------------------------------

--
-- Table structure for table `activety_log`
--

CREATE TABLE `activety_log` (
  `id` int(50) NOT NULL,
  `component_name` varchar(100) NOT NULL,
  `component_price` varchar(100) NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `time` datetime NOT NULL,
  `ip_address` varchar(100) NOT NULL,
  `browser` varchar(100) NOT NULL,
  `operating_system` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activety_log`
--

INSERT INTO `activety_log` (`id`, `component_name`, `component_price`, `purpose`, `time`, `ip_address`, `browser`, `operating_system`, `username`) VALUES
(15, 'PRE_ASSEMBLE PC', '49800.00', 'UPDATE', '2019-03-18 09:58:38', '::1', 'Chrome', 'Windows 7', 'Tilottama store'),
(16, 'PRE_ASSEMBLE PC', '', 'INSERT', '2019-03-20 07:02:01', '::1', 'Chrome', 'Windows 7', 'Tilottama store'),
(17, 'PRE_ASSEMBLE PC', '49800.00', 'UPDATE', '2019-03-20 07:07:32', '::1', 'Chrome', 'Windows 7', 'Tilottama store'),
(18, 'PRE_ASSEMBLE PC', '49800.00', 'UPDATE', '2019-03-20 07:12:29', '::1', 'Chrome', 'Windows 7', 'Tilottama store'),
(19, 'PRE_ASSEMBLE PC', '49800.00', 'UPDATE', '2019-03-20 07:12:38', '::1', 'Chrome', 'Windows 7', 'Tilottama store'),
(20, 'CPU', '11301.00', 'UPDATE', '2019-03-25 07:16:56', '::1', 'Firefox', 'Windows 7', 'Tilottama store'),
(21, 'CPU', '19450.00', 'UPDATE', '2019-03-25 07:17:01', '::1', 'Firefox', 'Windows 7', 'Tilottama store'),
(22, 'CPU', '10384', 'INSERT', '2019-03-25 19:46:04', '::1', 'Firefox', 'Windows 7', 'Tilottama store'),
(23, 'CPU', '11301.00', 'UPDATE', '2019-03-25 15:16:10', '::1', 'Firefox', 'Windows 7', 'Tilottama store'),
(24, 'CPU', '19450.00', 'UPDATE', '2019-03-25 15:16:16', '::1', 'Firefox', 'Windows 7', 'Tilottama store'),
(25, 'CPU', '17936', 'INSERT', '2019-03-25 19:47:01', '::1', 'Firefox', 'Windows 7', 'Tilottama store'),
(26, 'CPU', '29972', 'INSERT', '2019-03-25 19:47:24', '::1', 'Firefox', 'Windows 7', 'Tilottama store'),
(27, 'CPU', '8024', 'INSERT', '2019-03-25 19:47:45', '::1', 'Firefox', 'Windows 7', 'Tilottama store'),
(28, 'CPU', '8024', 'INSERT', '2019-03-25 19:48:16', '::1', 'Firefox', 'Windows 7', 'Tilottama store');

-- --------------------------------------------------------

--
-- Table structure for table `add_product_pc`
--

CREATE TABLE `add_product_pc` (
  `id` int(100) NOT NULL,
  `status` int(50) NOT NULL,
  `tag` varchar(100) NOT NULL,
  `product_no` varchar(100) NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `product_img` varchar(100) NOT NULL,
  `cabinet` varchar(100) NOT NULL,
  `product_weight` varchar(100) NOT NULL,
  `product_dimensions` varchar(100) NOT NULL,
  `processor_brand` varchar(100) NOT NULL,
  `processor_type` varchar(100) NOT NULL,
  `ram_size` varchar(100) NOT NULL,
  `ram_type` varchar(100) NOT NULL,
  `hard_disk_size` varchar(100) NOT NULL,
  `hard_disk_tech` varchar(100) NOT NULL,
  `operating_system` varchar(100) NOT NULL,
  `g_card` varchar(100) NOT NULL,
  `additional_information` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_product_pc`
--

INSERT INTO `add_product_pc` (`id`, `status`, `tag`, `product_no`, `product_price`, `product_img`, `cabinet`, `product_weight`, `product_dimensions`, `processor_brand`, `processor_type`, `ram_size`, `ram_type`, `hard_disk_size`, `hard_disk_tech`, `operating_system`, `g_card`, `additional_information`) VALUES
(6, 1, 'Gaming PC', 'PAPC001', 49800.00, '1552898917canvas.png', 'FOXIN ', '4.35 Kg', '375 x 175 x 405 mm', 'AMD', 'FX 6300', '8 GB', 'DDR3 ', '1 TB', 'Seagate', 'free DOS', 'Zotac GeForce GTX 1050 Ti OC Edition ZT-P10510B-10L 4GB', 'MONITOR 24\"(Curved) And Gaming Mouse with Keyboard ');

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`id`, `name`, `user_name`, `password`) VALUES
(1, 'Tilottama store', 'admin@tilottama.store', '1022141126');

-- --------------------------------------------------------

--
-- Table structure for table `cart_item`
--

CREATE TABLE `cart_item` (
  `id` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `txn_id` varchar(100) NOT NULL,
  `details` varchar(500) NOT NULL,
  `product_no` varchar(100) NOT NULL,
  `product_price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_item`
--

INSERT INTO `cart_item` (`id`, `username`, `txn_id`, `details`, `product_no`, `product_price`) VALUES
(17, 'kabir@gmail.com', 'TS20190227ADF6', 'AMD Ryzen 5 2600  =>17253.00  ,   NZXT H500i (Black)  =>20624.00  ,   Corsair CX550M  =>9586.00  ,   Asus Prime Z370-A  =>22100.00  ,   Seagate - Barracuda   =>5790.00  ,   G.Skill Trident Z RGB  =>15098.00  ,   Asus ROG-STRIX-RTX2080TI-O11G-GAMING  =>168699.00  ', 'C-PC20190227ADF6', 259150.00),
(101, 'Tilottama store', 'TS201903129967', 'Seagate 250 GB Barracuda=>SATA Internal Solid State Drive', '1', 5193.00),
(102, 'hassanoly7444@gmail.com', 'TS2019031469D7', 'Asus Internal DVD Writer=>DRW-24D5MT-DDR3 SDRAM', '3', 999.00),
(103, 'hassanoly7444@gmail.com', 'TS201903149B0D', 'Seagate 250 GB Barracuda=>SATA Internal Solid State Drive', '1', 5193.00);

-- --------------------------------------------------------

--
-- Table structure for table `component_details_cab`
--

CREATE TABLE `component_details_cab` (
  `id` int(50) NOT NULL,
  `component_name` varchar(100) NOT NULL,
  `component_details` varchar(100) NOT NULL,
  `component_price` double(10,2) NOT NULL,
  `component_image` varchar(100) NOT NULL,
  `status` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `component_details_cab`
--

INSERT INTO `component_details_cab` (`id`, `component_name`, `component_details`, `component_price`, `component_image`, `status`) VALUES
(4, 'Zebronics', ' Zebronics Mini ITX Computer Cabinet ', 2120.00, '1552553864', 0),
(5, 'iBALL', 'iBallPiano72', 1800.00, '1552553971', 0),
(6, 'iBALL', 'iBalli9090ATXCabinet', 1800.00, '1552554008', 0),
(7, 'iBALL', 'iBalli8298ATXCabinet', 1700.00, '1552554032', 0),
(8, 'iBALL', 'iBalli8190ATXCabinet', 1720.00, '1552554066', 0),
(9, 'iBALL', 'iBallElegance(BlackGold)ComputerCase', 1600.00, '1552554112', 0),
(10, 'iBALL', 'iBallCompact(BlackSilver)1161ComputerCase', 1650.00, '1552554134', 0),
(11, 'GSM', 'SMPSGSMPRO800', 2120.00, '1552554185', 0),
(12, 'GSM', 'SMPSGSMPR0500', 1280.00, '1552554215', 0),
(13, 'GSM', 'GSMPRO600WATTSMPS', 1600.00, '1552554262', 0),
(14, 'GSM', 'GSMPR0500SMPS', 1280.00, '1552554337', 0),
(15, 'GSM', 'GSMINSPIREBIG(WITHOUTSMPS)', 1500.00, '1552554382', 0),
(16, 'GSM', 'GSMINSPIRE(WITHOUTSMPS)', 1075.00, '1552554409', 0),
(17, 'GSM', 'GSM/MORASMPS', 530.00, '1552556424', 0),
(18, 'Gamemax', 'GAMEMAX-9902-B', 7895.00, '1552556523', 0),
(19, 'Gamemax', 'GAMEMAX-9902-A', 8315.00, '1552556729', 0),
(20, 'Gamemax', 'GAMEMAX-9901-A', 7370.00, '1552556751', 0),
(21, 'Gamemax', 'GAMEMAX-9601X-B', 4750.00, '1552556801', 0),
(22, 'Gamemax', 'GAMEMAX-9601X-A', 4535.00, '1552556826', 0),
(23, 'Gamemax', 'GAMEMAX-9601B', 3275.00, '1552556970', 0),
(24, 'Gamemax', 'GAMEMAX-9601A', 3170.00, '1552557016', 0),
(25, 'Gamemax', 'GAMEMAX-9901-B', 6950.00, '1552557042', 0),
(26, 'Gamemax', 'GAMEMAX-9605B', 3380.00, '1552557067', 0),
(27, 'Gamemax', 'GAMEMAX-9605A', 3275.00, '1552557116', 0),
(28, 'Gamemax', 'GAMEMAX-9603B', 4750.00, '1552557191', 0),
(29, 'Gamemax', 'GAMEMAX-9602B', 3275.00, '1552557211', 0),
(30, 'Gamemax', 'GAMEMAX-9602A', 3590.00, '1552557232', 0),
(31, 'Corrsair', 'CORRSAIRVS-450SMPS', 2350.00, '1552557260', 0),
(32, 'Corrsair', 'CORRSAIRVS650SMPS', 4120.00, '1552557289', 0),
(33, 'Zebronics', 'ZebronicsMiniITXComputerCabinet', 2120.00, '1552557311', 0),
(34, '2120', 'ZebronicsBijliGamingATXCabinetwithSMPS', 2850.00, '1552557333', 0),
(35, 'NZXT', 'NZXTPHANTOM530WhiteComputerCase(CA-PH530-W1)', 10840.00, '1552557361', 0),
(36, 'NZXT', 'NZXTPHANTOM530REDComputerCase(CA-PH530-R1)', 11050.00, '1552557383', 0),
(37, 'NZXT', 'NZXTGuardian921RB(921RB-001-BL)BlackATXMidTower', 5150.00, '1552557418', 0),
(38, 'Mora', 'MORAE(WITHOUTSMPS)', 550.00, '1552557460', 0);

-- --------------------------------------------------------

--
-- Table structure for table `component_details_cpu`
--

CREATE TABLE `component_details_cpu` (
  `id` int(100) NOT NULL,
  `component_name` varchar(100) NOT NULL,
  `component_details` varchar(100) NOT NULL,
  `component_price` double(10,2) NOT NULL,
  `component_image` varchar(1000) NOT NULL,
  `status` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `component_details_cpu`
--

INSERT INTO `component_details_cpu` (`id`, `component_name`, `component_details`, `component_price`, `component_image`, `status`) VALUES
(27, 'Intel I3 8100 8Th Gen', '  4 Core/ 4 Threads ', 11301.00, '1552897991Intel Xeon E5-2620 V4.jpg', 0),
(28, 'Intel Core i5-8400 8th Gen', '6 Cores / 12 Threads', 19450.00, '15525505171024px-No_image_3x4.svg.png', 0),
(29, 'Intel Core i5 9400F 9th Gen', '6 Cores/ 6 Threads', 17990.00, '15525505871024px-No_image_3x4.svg.png', 0),
(30, 'Intel Core i3-6100 6th Gen ', '2Cores/ 2Threads', 11200.00, '15525506641024px-No_image_3x4.svg.png', 0),
(31, 'Intel 8th Gen Core i7-8700K', '6 Cores / 12 Threads', 43100.00, '15525507351024px-No_image_3x4.svg.png', 0),
(32, 'Intel 7Th Gen Core I3 7100 ', '2Cores/ 2Threads', 17999.00, '15525508071024px-No_image_3x4.svg.png', 0),
(33, 'Intel Core i7-6700K Unloacked', '4 Cores/8 Threads', 33886.00, '15525508391024px-No_image_3x4.svg.png', 0),
(34, 'Intel Core i5-7500T 7th Gen', 'Quad Core', 32601.00, '15525508961024px-No_image_3x4.svg.png', 0),
(35, 'Intel Core i7-9700K', '3.6 GHz 8 95 W', 49750.00, '15525509241024px-No_image_3x4.svg.png', 0),
(36, 'Intel Core i7-8700K', '3.7 GHz 6 95 W', 43100.00, '15525509941024px-No_image_3x4.svg.png', 0),
(37, 'Intel Core i9-9900K', '3.6 GHz 8 95 W', 61000.00, '15525510311024px-No_image_3x4.svg.png', 0),
(38, 'Intel Core i5-9600K', '3.7 GHz 6 95 W', 25865.00, '15525510731024px-No_image_3x4.svg.png', 0),
(39, 'Intel Core i5-8400', '2.8 GHz 6 65 W ', 19450.00, '15525511571024px-No_image_3x4.svg.png', 0),
(40, 'Intel Core i5-8600K', '3.6 GHz 6 95 W ', 23290.00, '15525512031024px-No_image_3x4.svg.png', 0),
(41, 'Intel Core i3-8100', '3.6 GHz 4 65 W', 11300.00, '15525512901024px-No_image_3x4.svg.png', 0),
(42, 'Intel Core i7-8700', '3.2 GHz 6 65 W', 32250.00, '15525513411024px-No_image_3x4.svg.png', 0),
(43, 'Intel Core i7-6700K', '4 GHz 4 91 W ', 33886.00, '15525513701024px-No_image_3x4.svg.png', 0),
(44, 'Intel Core i7-7700', '3.6 GHz 4 65 W', 29535.00, '15525514011024px-No_image_3x4.svg.png', 0),
(45, 'Intel Core i5-7600K', '3.8 GHz 4 91 W', 22499.00, '15525514611024px-No_image_3x4.svg.png', 0),
(46, 'Intel Core i5-7400', '3 GHz 4 65 W', 18490.00, '15525514861024px-No_image_3x4.svg.png', 0),
(47, 'Intel Core i7-8086K', '4 GHz 6 95 W ', 52699.00, '15525515221024px-No_image_3x4.svg.png', 0),
(48, ' Intel Core i5-9400F', '2.9 GHz 6 65 W', 17999.00, '15525515461024px-No_image_3x4.svg.png', 0),
(49, 'Intel Core i7-7800X', '3.5 GHz 6 140 W', 37599.00, '15525515941024px-No_image_3x4.svg.png', 0),
(50, 'Intel Core i9-7980XE', '2.6 GHz 18 165 W', 180000.00, '15525516221024px-No_image_3x4.svg.png', 0),
(51, 'Intel Core i7-7740X', '4.3 GHz 4 112 W ', 30403.00, '15525516481024px-No_image_3x4.svg.png', 0),
(52, 'Intel Core i5-7640X', '4 GHz 4 112 W', 25787.00, '15525516821024px-No_image_3x4.svg.png', 0),
(53, 'Intel Xeon E5-2620 V4', '2.1 GHz 8 85 W', 58479.00, '15525517141024px-No_image_3x4.svg.png', 0),
(54, 'Intel Core i9-7920X', '2.9 GHz 12 140 W', 96000.00, '15525517651024px-No_image_3x4.svg.png', 0),
(55, 'AMD Threadripper 2990WX', '3 GHz 32 250 W ', 173000.00, '15525518321024px-No_image_3x4.svg.png', 0),
(56, 'AMD Threadripper 2970WX', '3 GHz 24 250 W', 140900.00, '15525519811024px-No_image_3x4.svg.png', 0),
(57, 'AMD Threadripper 1950X', '3.4 GHz 16 180 W', 91990.00, '15525520011024px-No_image_3x4.svg.png', 0),
(58, 'AMD Threadripper 2950X', '3.5 GHz 16 180 W', 90800.00, '15525520581024px-No_image_3x4.svg.png', 0),
(59, 'AMD Threadripper 2920X', '3.5 GHz 12 180 W ', 63500.00, '15525520811024px-No_image_3x4.svg.png', 0),
(60, 'AMD A10-6700', '3.7 GHz 4 65 W', 54822.00, '15525528631024px-No_image_3x4.svg.png', 0),
(61, 'AMD Threadripper 1920X', '3.5 GHz 12 180 W', 52500.00, '1552552901', 0),
(62, 'AMD Ryzen 7 1800X', '3.6 GHz 8 95 W ', 38470.00, '1552552927', 0),
(63, 'AMD Ryzen 7 2700X', '3.7 GHz 8 105 W', 31280.00, '1552552952', 0),
(64, 'AMD Ryzen 7 2700', '3.2 GHz 8 65 W', 26999.00, '1552552979', 0),
(65, 'AMD A10-7800', '3.5 GHz 4 65 W', 25089.00, '1552553001', 0),
(66, 'AMD FX-9370 ', '4.4 GHz 8 220 W', 22200.00, '1552553022', 0),
(67, 'AMD Ryzen 5 2600X', '3.6 GHz 6 95 W ', 21242.00, '15525530571024px-No_image_3x4.svg.png', 0),
(68, ' AMD A8-7670K', '3.6 GHz 4 95 W', 19760.00, '1552553079', 0),
(69, 'AMD Ryzen 7 1700', '3 GHz 8 65 W', 18265.00, '1552553099', 0),
(70, 'AMD A10-7870K', '3.9 GHz 4 95 W', 18206.00, '1552553121', 0),
(71, 'AMD Ryzen 5 2600', '3.4 GHz 6 65 W ', 17253.00, '1552553144', 0),
(72, 'AMD Ryzen 5 1600X', '3.6 GHz 6 95 W', 15580.00, '1552553165', 0),
(73, 'AMD FX-8370', '4 GHz 8 125 W', 15347.00, '1552553191', 0),
(74, 'AMD FX-9590', '4.7 GHz 8 220 W', 15090.00, '1552553301', 0),
(75, 'AMD A10-6800K', '4.1 GHz 4 100 W', 14500.00, '1552553335', 0),
(76, 'AMD Ryzen 5 2400G', '3.6 GHz 4 65 W', 13025.00, '1552553369', 0),
(77, ' AMD Ryzen 5 1500X', ' AMD Ryzen 5 1500X', 12970.00, '1552553410', 0),
(78, ' AMD Ryzen 5 1600', '3.2 GHz 6 65 W', 12929.00, '1552553471', 0),
(79, 'AMD FX-8320', '3.5 GHz 8 125 W', 12548.00, '1552553570', 0),
(80, ' AMD Ryzen 5 1400', '3.2 GHz 4 65 W', 11560.00, '1552553621', 0),
(81, 'AMD FX-8320E', '3.2 GHz 8 95 W', 11322.00, '1552553651', 0),
(82, 'AMD A6-6420K', '4 GHz 2 65 W', 10819.00, '1552553673', 0),
(83, 'AMD A10-9700', '3.5 GHz 4 65 W', 10693.99, '1552553696', 0),
(84, 'AMD FX-8300', '3.3 GHz 8 95 W', 10195.00, '1552553721', 0),
(85, 'AMD FX-8350', '4 GHz 8 125 W ', 9034.00, '1552553744', 0),
(86, ' AMD FX-6350', '3.9 GHz 6 125 W', 8116.50, '1552553766', 0),
(87, ' AMD Ryzen 3 1200', '3.1 GHz 4 65 W', 5379.00, '1552553796', 0),
(88, 'AMD A8-9600', '3.1 GHz 4 65 W', 4790.00, '1552553812', 0),
(97, 'Crucial', 'DDR3-1333 240-pin DIMM 9 1x4 GB 4 GB', 10.00, '1552895300', 0),
(98, 'dd', 'dd', 1.00, '1552895393', 0),
(99, ' Intel Core i3-8100', '2.8 GHz 6 65 W ', 10384.00, '1553523364', 0),
(100, 'Intel Core i5-8400', '3.2 GHz 4 65 W', 17936.00, '1553523421', 0),
(101, 'Intel Core i7-8700', '3.6 GHz 4 65 W', 29972.00, '1553523444', 0),
(102, 'AMD Ryzen 3 2100', '3.1 GHz 4 65 W', 8024.00, '1553523465', 0),
(103, 'AMD Ryzen 3 2200', '3.1 GHz 4 65 W', 8024.00, '1553523496', 0);

-- --------------------------------------------------------

--
-- Table structure for table `component_details_dvd_drive`
--

CREATE TABLE `component_details_dvd_drive` (
  `id` int(50) NOT NULL,
  `component_name` varchar(100) NOT NULL,
  `component_details` varchar(100) NOT NULL,
  `component_price` double(10,2) NOT NULL,
  `component_image` varchar(100) NOT NULL,
  `status` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `component_details_dvd_drive`
--

INSERT INTO `component_details_dvd_drive` (`id`, `component_name`, `component_details`, `component_price`, `component_image`, `status`) VALUES
(4, 'LG GH24NSB0', 'DVD Writer 24X SATA Internal', 997.00, '1552561321', 0),
(5, 'LG GH24NSD1', 'Internal SATA DVD Writer', 1023.00, '1552561343', 0),
(6, 'Asus 90DD01Y0-B10010', 'Internal DVD Writer DRW-24D5MT', 999.00, '1552561369', 0),
(7, 'LG 24x', 'Internal DVD Writer (Black and Grey)', 1199.00, '1552561398', 0),
(8, 'LG GH24NS70B', 'SATA DVD RW', 1199.00, '1552561420', 0),
(9, 'Lite-On IHAS124-16', '24X DVD Sata Writer', 990.00, '1552561443', 0),
(10, 'Technotech SATA DVD Writer', 'Internal SATA DVD Writer', 999.00, '1552561466', 0),
(11, 'Technotech  IDE DVD Writer', 'DVD Writer for Desktop, PC', 1299.00, '1552561495', 0);

-- --------------------------------------------------------

--
-- Table structure for table `component_details_graphic_card`
--

CREATE TABLE `component_details_graphic_card` (
  `id` int(50) NOT NULL,
  `component_name` varchar(100) NOT NULL,
  `component_details` varchar(100) NOT NULL,
  `component_price` double(10,2) NOT NULL,
  `component_image` varchar(100) NOT NULL,
  `status` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `component_details_graphic_card`
--

INSERT INTO `component_details_graphic_card` (`id`, `component_name`, `component_details`, `component_price`, `component_image`, `status`) VALUES
(3, 'MSI GT 710 2GD3H LP', 'GeForce GT 710 2 GB 954 MHz', 3245.00, '1552569198', 0),
(4, 'MSI GT 710 2GD3 LP', 'GeForce GT 710 2 GB 954 MHz', 5847.00, '1552569222', 0),
(5, 'MSI R6450-MD1GD3/LP', 'Radeon HD 6450 1 GB 625 MHz', 6720.00, '1552569243', 0),
(6, 'Gigabyte GV-N1030SL-2GL', 'GeForce GT 1030 2 GB 1.252 GHz ', 9498.08, '1552569274', 0),
(7, ' Gigabyte GV-N1030OC-2GI', 'GeForce GT 1030 2 GB 1.29 GHz', 10494.51, '1552569292', 0),
(8, 'Gigabyte GV-N105TD5-4GD', 'GeForce GTX 1050 Ti 4 GB 1.29 GHz', 13290.00, '1552569317', 0),
(9, 'Gigabyte GV-N105TOC-4GD', 'GeForce GTX 1050 Ti 4 GB 1.341 GHz', 14290.00, '1552569339', 0),
(10, 'MSI GTX 1050 Ti 4GT OC', 'GeForce GTX 1050 Ti 4 GB 1.341 GHz ', 14788.00, '1552569363', 0),
(11, 'Gigabyte GV-N1060WF2OC-3GD', ' GeForce GTX 1060 3GB 3 GB 1.556 GHz', 22380.00, '1552569385', 0),
(12, 'MSI RX 580 GAMING X 8G', 'GAMING X Radeon RX 580 8 GB 1.257 GHz ', 23999.00, '1552569406', 0),
(13, 'MSI RX 580 ARMOR 8G OC', 'ARMOR OC Radeon RX 580 8 GB 1.257 GHz', 24499.98, '1552569428', 0),
(14, 'Gigabyte GV-RX480G1 GAMING-8GD', 'G1 Gaming Radeon RX 480 8 GB 1.12 GHz', 26800.00, '1552569451', 0),
(15, 'Gigabyte GV-N2060WF2OC-6GD', 'WINDFORCE OC GeForce RTX 2060 6 GB 1.365 GHz', 39750.00, '1552569473', 0),
(16, 'Gigabyte GV-N108TAORUSX W-11GD', 'GeForce GTX 1080 Ti 11 GB 1.632 GHz', 118799.00, '1552569494', 0),
(17, 'NVIDIA 900-1G600-2500-00', 'GeForce GTX Titan X 12 GB 1 GHz', 137804.91, '1552569648', 0),
(18, 'AMD Radeon Pro WX 3100', '100-505999 4GB GDDR5 Workstation Graphic Card', 15585.00, '1552569670', 0),
(19, 'AMD Radeon Vega ', ' Frontier Edition 100-506061 16GB Workstation Graphic Card', 74000.00, '1552569690', 0),
(20, 'AMD Radeon Pro WX 5100 ', '100-505940 8GB GDDR5 Workstation Graphic Card', 37500.00, '1552570216', 0),
(21, 'AMD FirePro W4300', '4GB GDDR5 Workstation Graphic Card', 22090.00, '1552570244', 0),
(22, 'AMD FirePro W7100', '8GB GDDR5 Workstation Graphic Card', 53997.00, '1552570273', 0),
(23, 'AMD FirePro W5100 ', '4GB GDDR5 Workstation Graphic Card', 27612.00, '1552570297', 0),
(24, 'AMD FirePro W8100 ', '8GB GDDR5 Workstation Graphic Card', 96458.00, '1552570323', 0),
(25, 'AMD Radeon Pro', '4GB GDDR5 Workstation Graphic Card', 23930.00, '1552570355', 0);

-- --------------------------------------------------------

--
-- Table structure for table `component_details_hdd`
--

CREATE TABLE `component_details_hdd` (
  `id` int(50) NOT NULL,
  `component_name` varchar(100) NOT NULL,
  `component_details` varchar(100) NOT NULL,
  `component_price` double(10,2) NOT NULL,
  `component_image` varchar(100) NOT NULL,
  `status` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `component_details_hdd`
--

INSERT INTO `component_details_hdd` (`id`, `component_name`, `component_details`, `component_price`, `component_image`, `status`) VALUES
(3, ' Western Digital WD5000AVDS', 'AV-GP 3.5\" 5400 RPM 500 GB 32 MB', 1890.00, '1552560479', 0),
(4, 'Western Digital WD5000AZRX', 'Caviar Green 3.5\" 5400 RPM 500 GB 64 MB', 2149.00, '1552560510', 0),
(5, 'Seagate ST3500418AS', 'Barracuda 3.5\" 7200 RPM 500 GB 16 MB ', 2170.00, '1552560534', 0),
(6, 'Seagate ST9500423AS', 'Momentus 7200.4 2.5\" 7200 RPM 500 GB 16 MB', 2199.00, '1552560558', 0),
(7, 'Seagate ST500DM002', 'Barracuda 3.5\" 7200 RPM 500 GB 16 MB ', 2530.00, '1552560586', 0),
(8, 'Western Digital WD5000AAKX', 'Caviar Blue 3.5\" 7200 RPM 500 GB 16 MB', 2650.00, '1552560609', 0),
(9, 'Toshiba DT01ACA050', '3.5\" 7200 RPM 500 GB 32 MB', 2895.00, '1552560634', 0),
(10, 'Seagate ST1000DM003', 'Barracuda 3.5\" 7200 RPM 1 TB 64 MB ', 2899.00, '1552560656', 0),
(11, 'Toshiba MQ01ABD050', '2.5\" 5400 RPM 500 GB 8 MB', 3065.00, '1552560678', 0),
(12, 'Western Digital WD5000LPVT', 'Scorpio Blue 2.5\" 5400 RPM 500 GB', 3100.00, '1552560698', 0),
(13, 'Western Digital WD10PURX', 'WD Purple 3.5\" 5900 RPM 1 TB 64 MB ', 3198.00, '1552560720', 0),
(14, 'Caviar Blue', '3.5\" 7200 RPM 1 TB 64 MB ', 3200.00, '1552560741', 0),
(15, 'Western Digital WD10PURZ', 'Purple 3.5\" 5400 RPM 1 TB 64 MB', 3299.00, '1552560764', 0),
(16, ' Western Digital WD10EZRZ', 'Blue 3.5\" 5400 RPM 1 TB 64 MB ', 3350.00, '1552560790', 0),
(17, 'Toshiba HDWD110XZSTA', 'P300 3.5\" 7200 RPM 1 TB 64 MB', 3450.00, '1552560818', 0),
(18, 'Seagate ST1000VM002', 'Pipeline HD 3.5\" 5900 RPM 1 TB 64 MB', 3490.00, '1552560838', 0),
(19, 'Toshiba DT01ACA100 ', '3.5\" 7200 RPM 1 TB 32 MB', 3578.00, '1552560863', 0),
(20, 'Western Digital WD5000AADS', 'Caviar Green 3.5\" 5400 RPM 500 GB 32 MB', 3800.00, '1552560885', 0),
(21, 'Hitachi 0J26005', 'Travelstar Z7K500 2.5\" 7200 RPM 500 GB 32 MB', 3999.00, '1552560910', 0),
(22, 'Western Digital WD5000AACS', 'Caviar Green 3.5\" 5400 RPM 500 GB 16 MB ', 4178.00, '1552560932', 0),
(23, 'Hitachi A7K1000-500', 'Ultrastar 3.5\" 7200 RPM 500 GB 32 MB', 4478.00, '1552560954', 0),
(24, 'Hitachi E7K1000', 'Deskstar 3.5\" 7200 RPM 1 TB 32 MB', 4481.00, '1552560980', 0),
(25, 'Western Digital WD5000LPLX', 'Black 2.5\" 7200 RPM 500 GB 32 MB ', 4620.00, '1552561006', 0),
(26, 'Seagate ST310005N1A1AS-RK', 'Barracuda 3.5\" 7200 RPM 1 TB 64 MB', 4746.00, '1552561028', 0),
(27, 'Seagate ST2000VX000', 'SV35.5 3.5\" 7200 RPM 2 TB 64 MB ', 4825.00, '1552561049', 0);

-- --------------------------------------------------------

--
-- Table structure for table `component_details_headphone`
--

CREATE TABLE `component_details_headphone` (
  `id` int(50) NOT NULL,
  `component_name` varchar(100) NOT NULL,
  `component_details` varchar(100) NOT NULL,
  `component_price` double(10,2) NOT NULL,
  `component_image` varchar(100) NOT NULL,
  `status` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `component_details_headphone`
--

INSERT INTO `component_details_headphone` (`id`, `component_name`, `component_details`, `component_price`, `component_image`, `status`) VALUES
(3, ' Sennheiser CX 300-II', '19 Hz - 21 kHz', 2467.00, '1552570554', 0),
(4, 'Sony MDRXB450AP/B', '5 Hz - 22 kHz', 2490.00, '1552570577', 0),
(5, 'Audio-Technica ATH-CKP500BK', '20 Hz - 23 kHz', 3204.00, '1552570601', 0),
(6, 'Sennheiser M2 Iei', '15 Hz - 22 kHz', 5490.00, '1552570623', 0),
(7, 'Sennheiser HD 280 PRO', '8 Hz - 25 kHz ', 7140.00, '1552570645', 0),
(8, ' Sony MDR-7506', '10 Hz - 20 kHz', 7490.00, '1552570667', 0),
(9, 'Audio-Technica ATH-M40x', '15 Hz - 24 kHz', 7699.00, '1552570689', 0),
(10, 'Sennheiser GSP 300', '15 Hz - 26 kHz ', 7990.00, '1552570715', 0),
(11, 'Creative Labs ChatMax HS-720', '20 Hz - 20 kHz ', 8609.00, '1552570735', 0),
(12, ' Audio-Technica ATH-AD500X', '5 Hz - 25 kHz', 8903.89, '1552570757', 0),
(13, 'Corsair VOID PRO RGB USB ', '20 Hz - 20 kHz ', 9020.00, '1552570780', 0);

-- --------------------------------------------------------

--
-- Table structure for table `component_details_keyboardmouse`
--

CREATE TABLE `component_details_keyboardmouse` (
  `id` int(50) NOT NULL,
  `component_name` varchar(100) NOT NULL,
  `component_details` varchar(100) NOT NULL,
  `component_price` double(10,2) NOT NULL,
  `component_image` varchar(100) NOT NULL,
  `status` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `component_details_keyboardmouse`
--

INSERT INTO `component_details_keyboardmouse` (`id`, `component_name`, `component_details`, `component_price`, `component_image`, `status`) VALUES
(4, 'HP Desktop C2500', 'Keyboard+Mouse', 949.00, '1552570930', 0),
(5, 'Logitech MK200 Media ', ' Keyboard and Mouse Combo (Black)', 899.00, '1552570954', 0),
(6, 'Lenovo GX30M39649', 'KB MICE_BO 300 USB Combo', 999.00, '1552570975', 0),
(7, 'Lenovo KM4802', 'Wired Keyboard and Mouse', 759.00, '1552570997', 0),
(8, 'Lenovo USB KM4802', 'Wired Keyboard and Mouse', 759.00, '1552571019', 0),
(9, 'Logitech MK120', 'Wired Keyboard with Optical Mouse', 945.00, '1552571058', 0),
(10, 'Logitech MK240 NANO', 'Mouse and Keyboard Combo', 1699.00, '1552571079', 0),
(11, 'Logitech MK200', 'Wired Keyboard-Mouse (Combo)', 1099.00, '1552571099', 0),
(12, 'Logitech MK240 ', 'Keyboard and Mouse Combo (White&Vivid Red)', 1645.00, '1552571122', 0),
(13, 'Zebronics KB-Zeb (JUDWAA 567) ', 'USB Keyboard & USB Mouse Combo', 599.00, '1552571146', 0),
(14, 'Intex Grace', 'Keyboard and Mouse Combo', 1055.00, '1552571167', 0),
(15, 'Logitech G100s ', 'Wired Gaming Combo (Black)', 2380.00, '1552571198', 0),
(16, 'Logitech MK260R', 'Keyboard + Mouse Combo', 1945.00, '1552571223', 0),
(17, 'g', 'g', 10.00, '1552626360', 0);

-- --------------------------------------------------------

--
-- Table structure for table `component_details_mboard`
--

CREATE TABLE `component_details_mboard` (
  `id` int(50) NOT NULL,
  `component_name` varchar(100) NOT NULL,
  `component_details` varchar(100) NOT NULL,
  `component_price` double(10,2) NOT NULL,
  `component_image` varchar(100) NOT NULL,
  `status` int(50) NOT NULL,
  `atribute` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `component_details_mboard`
--

INSERT INTO `component_details_mboard` (`id`, `component_name`, `component_details`, `component_price`, `component_image`, `status`, `atribute`) VALUES
(3, 'MSI H81M-E33', 'LGA1150 Micro ATX 2 16 GB ', 3989.00, '1552559581', 0, ''),
(4, 'Gigabyte GA-A320M-S2H', 'AM4 Micro ATX 2 32 GB ', 4389.00, '1552559602', 0, ''),
(5, ' MSI A320M PRO-VH PLUS', 'AM4 Micro ATX 2 32 GB', 4499.00, '1552559626', 0, ''),
(6, 'MSI H110M Gaming', ' LGA1151 Micro ATX 2 32 GB', 4800.00, '1552559648', 0, ''),
(7, 'Gigabyte GA-AM1M-S2H', 'AM1 Micro ATX 2 32 GB', 4900.00, '1552559682', 0, ''),
(8, 'MSI CSM-H110M Pro-VHL', 'LGA1151 Micro ATX 2 32 GB', 4900.00, '1552559706', 0, ''),
(9, 'ASRock B250M-HDV', 'LGA1151 Micro ATX 2 32 GB ', 5799.00, '1552559731', 0, ''),
(10, 'Asus H110M-K', ' LGA1151 Micro ATX 2 32 GB', 5925.00, '1552559752', 0, ''),
(11, 'MSI B150 PC Mate', 'LGA1151 ATX 4 64 GB ', 6000.00, '1552559776', 0, ''),
(12, 'Asus H110M-E/M.2', 'LGA1151 Micro ATX 2 32 GB ', 6500.00, '1552559798', 0, ''),
(13, 'Asus H110M-A/M.2', 'LGA1151 Micro ATX 2 32 GB', 6599.00, '1552559821', 0, ''),
(14, 'Gigabyte B450M DS3H', 'AM4 Micro ATX 4 64 GB', 6800.00, '1552559842', 0, ''),
(15, 'MSI B250M PRO-VDH', 'LGA1151 Micro ATX 4 64 GB', 6899.00, '1552559864', 0, ''),
(16, ' MSI B450M PRO-M2', 'AM4 Micro ATX 2 32 GB', 6963.00, '1552559886', 0, ''),
(17, 'Gigabyte H310M A', 'LGA1151 Micro ATX 2 32 GB', 7086.99, '1552559908', 0, ''),
(18, ' ASRock B250M Pro4', 'LGA1151 Micro ATX 4 64 GB ', 7149.00, '1552559937', 0, ''),
(19, 'MSI B450M PRO-VDH', 'AM4 Micro ATX 4 64 GB', 7446.00, '1552559953', 0, ''),
(20, 'Gigabyte GA-78LMT-USB3', 'AM3+ Micro ATX 4 32 GB', 7850.00, '1552559990', 0, ''),
(21, ' Asus PRIME B360M-A', 'LGA1151 Micro ATX 4 64 GB', 7915.00, '1552560011', 0, ''),
(22, 'ASRock B360M Pro4', 'LGA1151 Micro ATX 4 64 GB', 8299.00, '1552560036', 0, ''),
(23, 'Asus PRIME B350M-A', 'AM4 Micro ATX 4 64 GB', 8300.00, '1552560058', 0, ''),
(24, 'MSI A68HM-E33 V2', 'FM2+ Micro ATX 2 32 GB', 8501.00, '1552560083', 0, ''),
(25, ' Gigabyte GA-B150M-DS3H', 'LGA1151 Micro ATX 4 64 GB', 8599.00, '1552560105', 0, ''),
(26, 'MSI B450M GAMING PLUS', 'AM4 Micro ATX 2 32 GB', 8768.00, '1552560129', 0, ''),
(27, 'Gigabyte GA-970A-DS3P', 'AM3+ ATX 4 32 GB', 8899.00, '1552560151', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `component_details_memory`
--

CREATE TABLE `component_details_memory` (
  `id` int(50) NOT NULL,
  `component_name` varchar(100) NOT NULL,
  `component_details` varchar(100) NOT NULL,
  `component_price` double(10,2) NOT NULL,
  `component_image` varchar(100) NOT NULL,
  `status` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `component_details_memory`
--

INSERT INTO `component_details_memory` (`id`, `component_name`, `component_details`, `component_price`, `component_image`, `status`) VALUES
(3, 'Transcend', 'DDR3-1333 204-pin SODIMM 9 1x2 GB 2 GB ', 1250.00, '1552627325', 0),
(4, 'G.Skill NS', 'DDR3-1333 240-pin DIMM 9 1x2 GB 2 GB', 1490.00, '1552627349', 0),
(5, ' Kingston', 'DDR3-1333 240-pin DIMM 9 1x2 GB 2 GB ', 1650.00, '1552627370', 0),
(6, 'Kingston', 'DDR3-1333 240-pin DIMM 9 1x4 GB 4 GB ', 1848.00, '1552627404', 0),
(7, 'Crucial', 'DDR3-1333 240-pin DIMM 9 1x4 GB 4 GB', 1896.00, '1552627427', 0),
(8, ' Crucial', 'DDR3-1600 240-pin DIMM 11 1x4 GB 4 GB', 1991.00, '1552627448', 0),
(9, 'Crucial', 'DDR4-2400 288-pin DIMM 17 1x4 GB 4 GB ', 1999.00, '1552627470', 0),
(10, 'Corsair ValueSelect', 'DDR3-1600 240-pin DIMM 11 1x4 GB 4 GB', 2000.00, '1552627494', 0),
(11, ' Kingston', 'DDR3-1600 240-pin DIMM 11 1x4 GB 4 GB ', 2300.00, '1552627522', 0),
(12, 'Crucial Ballistix Sport LT', 'DDR4-2400 288-pin DIMM 16 1x4 GB 4 GB ', 2559.00, '1552627594', 0),
(13, 'Kingston FURY', 'DDR4-2400 288-pin DIMM 15 1x4 GB 4 GB ', 2597.00, '1552627616', 0),
(14, 'Corsair', 'DDR3-1600 240-pin DIMM 11 1x4 GB 4 GB', 2599.00, '1552627639', 0),
(15, 'Crucial', 'DDR4-2133 288-pin DIMM 15 1x4 GB 4 GB ', 2700.00, '1552627660', 0),
(16, ' Corsair XMS3', 'DDR3-1600 240-pin DIMM 9 1x4 GB 4 GB ', 2799.00, '1552627683', 0),
(17, 'Kingston HyperX Fury Blue', 'DDR3-1600 240-pin DIMM 10 1x4 GB 4 GB', 2800.00, '1552627707', 0),
(18, 'Kingston', 'DDR3-1600 240-pin DIMM 11 1x2 GB 2 GB ', 2995.00, '1552627731', 0),
(19, 'Crucial', 'DDR3-1600 240-pin DIMM 11 1x4 GB 4 GB', 3057.00, '1552627754', 0),
(20, 'Kingston HyperX Fury White', 'DDR3-1866 240-pin DIMM 10 1x4 GB 4 GB', 3096.00, '1552627778', 0),
(21, 'Patriot Signature', 'DDR3-1333 240-pin DIMM 9 1x4 GB 4 GB', 3354.00, '1552627800', 0),
(22, 'Crucial', 'DDR3-1600 240-pin DIMM 11 1x2 GB 2 GB ', 3415.00, '1552627837', 0),
(23, 'Kingston HyperX Fury Black', 'DDR3-1866 240-pin DIMM 10 1x4 GB 4 GB ', 3698.00, '1552627859', 0),
(24, 'Patriot', 'DDR3-1600 240-pin DIMM 11 1x4 GB 4 GB ', 3451.00, '1552627884', 0),
(25, ' ADATA', 'DDR3-1600 240-pin DIMM 11 1x8 GB 8 GB', 3780.00, '1552627910', 0),
(26, 'Crucial', 'DDR3-1600 240-pin DIMM 11 1x8 GB 8 GB ', 3803.00, '1552627940', 0),
(27, 'Corsair', 'DDR4-2133 288-pin DIMM 15 1x4 GB 4 GB', 3855.00, '1552627964', 0),
(28, 'Crucial', ' DDR4-2400 288-pin DIMM 17 1x8 GB 8 GB', 3860.00, '1552627984', 0),
(29, ' Kingston HyperX Fury Red', 'DDR3-1866 240-pin DIMM 10 1x4 GB 4 GB', 3890.00, '1552628008', 0),
(30, ' Crucial', 'DDR3-1600 240-pin DIMM 11 1x8 GB 8 GB', 3900.00, '1552628030', 0),
(31, 'Kingston Savage', 'DDR3-2133 240-pin DIMM 11 1x4 GB 4 GB', 3900.00, '1552628053', 0),
(32, 'Crucial', 'DDR3-1600 204-pin SODIMM 11 1x8 GB 8 GB ', 3900.00, '1552628081', 0),
(33, ' ADATA XPG V1.0', 'DDR3-1600 240-pin DIMM 9 1x4 GB 4 GB', 3990.00, '1552628103', 0),
(34, 'Corsair ValueSelect', 'DDR3-1600 240-pin DIMM 11 1x8 GB 8 GB ', 3998.00, '1552628123', 0),
(35, 'Kingston HyperX Fury Black', 'DDR4-2133 288-pin DIMM 14 1x4 GB 4 GB', 3999.00, '1552628149', 0),
(36, 'Kingston', 'DDR3-1600 204-pin SODIMM 11 1x8 GB 8 GB', 4075.00, '1552628172', 0),
(37, 'G.Skill Ripjaws Series', 'DDR3-1600 240-pin DIMM 9 1x4 GB 4 GB ', 4084.00, '1552628195', 0),
(38, 'G.Skill Ripjaws Series', 'DDR3-1333 240-pin DIMM 9 1x4 GB 4 GB', 4155.00, '1552628217', 0),
(39, 'Corsair Vengeance LPX', 'DDR4-2400 288-pin DIMM 16 1x8 GB 8 GB ', 4169.00, '1552628242', 0),
(40, 'Corsair XMS3', 'DDR3-1333 240-pin DIMM 9 1x4 GB 4 GB ', 4199.00, '1552628276', 0),
(41, 'Mushkin Essentials', 'DDR3-1333 240-pin DIMM 9 1x4 GB 4 GB', 4240.00, '1552628541', 0),
(42, 'Crucial Ballistix Sport LT', 'DDR4-3000 288-pin DIMM 16 1x8 GB 8 GB', 4299.00, '1552628565', 0),
(43, 'Corsair Vengeance LPX', 'DDR4-3000 288-pin DIMM 16 1x8 GB 8 GB ', 4380.00, '1552628589', 0),
(44, 'Kingston', 'DDR3-1333 240-pin DIMM 9 1x8 GB 8 GB ', 4399.00, '1552628611', 0),
(45, ' Kingston ', 'DDR3-1333 240-pin DIMM 9 1x2 GB 2 GB ', 4443.00, '1552628631', 0),
(46, 'Kingston HyperX FURY', 'DDR3-1866 240-pin DIMM 11 1x8 GB 8 GB ', 4450.00, '1552628655', 0),
(47, 'Corsair Vengeance LPX', 'DDR4-2400 288-pin DIMM 16 1x4 GB 4 GB ', 4465.00, '1552628678', 0),
(48, 'G.Skill Ripjaws Series', 'DDR3-1600 240-pin DIMM 9 2x2 GB 4 GB', 4491.00, '1552628699', 0),
(49, ' Kingston FURY', 'DDR4-2400 288-pin DIMM 15 1x8 GB 8 GB', 4520.00, '1552628719', 0),
(50, ' Crucial Ballistix Tactical', 'DDR4-2666 288-pin DIMM 16 1x4 GB 4 GB', 4569.00, '1552628739', 0),
(51, 'Kingston FURY ', 'DDR4-2400 288-pin DIMM 15 1x8 GB 8 GB', 4618.00, '1552628778', 0),
(52, 'Kingston HyperX Fury Black', 'DDR3-1600 240-pin DIMM 10 1x4 GB 4 GB', 4652.00, '1552628797', 0);

-- --------------------------------------------------------

--
-- Table structure for table `component_details_monitor`
--

CREATE TABLE `component_details_monitor` (
  `id` int(50) NOT NULL,
  `component_name` varchar(100) NOT NULL,
  `component_details` varchar(100) NOT NULL,
  `component_price` double(10,2) NOT NULL,
  `component_image` varchar(100) NOT NULL,
  `status` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `component_details_monitor`
--

INSERT INTO `component_details_monitor` (`id`, `component_name`, `component_details`, `component_price`, `component_image`, `status`) VALUES
(4, 'AOC E970SWN', '1366 x 768 18.5\" 5 ms TN', 4198.00, '1552626626', 0),
(5, 'Acer K222HQL', '1920 x 1080 21.5\" 5 ms TN', 6799.00, '1552626653', 0),
(6, ' LG 22MP58VQ-P', '1920 x 1080 21.5\" 5 ms IPS', 7999.00, '1552626686', 0),
(7, 'Asus VP228H', '1920 x 1080 21.5\" 1 ms TN', 8499.00, '1552626743', 0),
(8, 'AOC I2279VWHE', '1920 x 1080 21.5\"', 8499.00, '1552626767', 0),
(9, 'Acer KG221Q', '1920 x 1080 21.5\" 1 ms TN', 10199.00, '1552626799', 0),
(10, ' Dell SE2416H', '1920 x 1080 23.8\" 6 ms IPS', 10715.00, '1552626829', 0),
(11, ' Dell P2217H', '1920 x 1080 21.5\" 6 ms IPS', 11590.00, '1552626857', 0),
(12, 'LG 24MP59G-P', '1920 x 1080 23.8\" 5 ms IPS', 11990.00, '1552626887', 0),
(13, 'LG 25UM58-P', '2560 x 1080 25\" 5 ms IPS', 11999.00, '1552626914', 0),
(14, 'LG 25UM58', '2560 x 1080 25\" 5 ms IPS', 11999.00, '1552626943', 0),
(15, 'Samsung S24E310HL', '1920 x 1080 23.6\" 8 ms TN', 11999.00, '1552626972', 0),
(16, 'Acer S220HQLAbd', '1920 x 1080 21.5\" 5 ms TN', 12987.00, '1552627002', 0),
(17, 'Acer G206HQLbd', '1600 x 900 19.5\" 5 ms TN', 13612.97, '1552627027', 0),
(18, 'Dell E2416H', '1920 x 1080 24\" 5 ms TN', 13990.00, '1552627048', 0),
(19, 'AOC G2260VWQ6', '1920 x 1080 21.5\" 1 ms TN', 13999.00, '1552627072', 0),
(20, ' Asus VS247H-P', '1920 x 1080 23.6\" ', 14000.00, '1552627094', 0),
(21, 'Samsung S24E510C', '1920 x 1080 23.6\" 4 ms VA', 14490.00, '1552627116', 0),
(22, ' Dell P2214H', '1920 x 1080 21.5\" 8 ms IPS ', 14702.00, '1552627137', 0),
(23, 'ViewSonic VA2246M-LED', '1920 x 1080 22\" 5 ms TN', 15599.00, '1552627158', 0);

-- --------------------------------------------------------

--
-- Table structure for table `component_details_smps`
--

CREATE TABLE `component_details_smps` (
  `id` int(50) NOT NULL,
  `component_name` varchar(100) NOT NULL,
  `component_details` varchar(100) NOT NULL,
  `component_price` double(10,2) NOT NULL,
  `component_image` varchar(100) NOT NULL,
  `status` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `component_details_smps`
--

INSERT INTO `component_details_smps` (`id`, `component_name`, `component_details`, `component_price`, `component_image`, `status`) VALUES
(3, 'Corsair CX450 (2017)', 'CX (2017) ATX 80+ Bronze 450 W ', 4196.00, '1552557867', 0),
(4, 'Thermaltake PS-SPR-0500NHFAWU-1', 'Smart RGB ATX 80+ 500 W ', 4750.00, '1552557894', 0),
(5, 'Corsair CX550 (2017)', 'CX (2017) ATX 80+ Bronze 550 W ', 5200.00, '1552557918', 0),
(6, 'Corsair CX650 (2017)', 'CX (2017) ATX 80+ Bronze 650 W ', 6100.00, '1552557941', 0),
(7, 'Antec VP-450', ' ATX 80+ Bronze 450 W', 6100.00, '1552559032', 0),
(8, ' FSP Group FSP220-60LE(80)', 'Mini ITX 80+ 220 W', 6222.00, '1552559061', 0),
(9, 'Rosewill RD400-2-SB', 'Stallion ATX - 400 W', 6295.00, '1552559081', 0),
(10, 'Thermaltake PS-LTP-0550NNCNUS-F', 'Litepower ATX - 550 W ', 6617.00, '1552559100', 0),
(11, 'Deepcool DQ550ST', 'ATX 80+ Gold 550 W ', 6700.00, '1552559165', 0),
(12, 'Thermaltake TR-500', ' TR2 ATX - 500 W', 6875.00, '1552559197', 0),
(13, 'Antec EARTHWATTS GOLD PRO 650', 'Earthwatts Gold Pro ATX 80+ Gold 650 W', 6999.00, '1552559219', 0),
(14, 'SeaSonic S12II 620 Bronze', 'S12II ATX 80+ Bronze 620 W', 7100.00, '1552559267', 0),
(15, 'EVGA 100-W1-0500-KR ', 'ATX 80+ 500 W', 7178.00, '1552559283', 0),
(16, 'EVGA 100-BT-0450-K1', 'BT ATX 80+ Bronze 450 W', 7199.00, '1552559303', 0),
(17, ' Corsair VS550', 'VS ATX 80+ 550 W', 7354.73, '1552559332', 0),
(18, 'Corsair CX650M', 'CXM ATX 80+ Bronze 650 W', 7590.00, '1552559349', 0),
(19, 'Thermaltake PS-TR2-0500NPCBUS-B', 'ATX 80+ Bronze 500 W ', 7696.78, '1552559392', 0),
(20, 'CoolMax ZX-500', 'ATX 80+ 500 W ', 7955.00, '1552559414', 0),
(21, 'Raidmax RX-530SS', 'ATX - 530 W ', 8054.00, '1552559434', 0),
(22, 'Raidmax RX-500AF-B', 'Cobra ATX 80+ Bronze 500 W ', 8244.16, '1552559456', 0);

-- --------------------------------------------------------

--
-- Table structure for table `component_details_sound_card`
--

CREATE TABLE `component_details_sound_card` (
  `id` int(50) NOT NULL,
  `component_name` varchar(100) NOT NULL,
  `component_details` varchar(100) NOT NULL,
  `component_price` double(10,2) NOT NULL,
  `component_image` varchar(100) NOT NULL,
  `status` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `component_details_sound_card`
--

INSERT INTO `component_details_sound_card` (`id`, `component_name`, `component_details`, `component_price`, `component_image`, `status`) VALUES
(3, 'SIIG IC-510012-S2', '5.1 16 68 dB ', 2511.00, '1552561805', 0),
(4, 'Vantec UGT-S100', '7.1 None  48 kHz', 4330.00, '1552561829', 0),
(5, ' Rosewill RC-701', ' C-Media CMI8738 5.1 ', 5288.00, '1552561852', 0),
(6, 'Creative Labs Sound Blaster Z ', '5.1 24 116 dB 192 kHz', 10258.99, '1552561904', 0),
(7, 'Creative Labs SB X-Fi Xtreme Audio ', '7.1 24 100 dB 96 kHz', 13105.00, '1552561928', 0),
(8, 'Creative Labs Audigy SE', '7.1 24 100 dB 96 kHz ', 14672.00, '1552561951', 0),
(9, 'Asus Xonar D1', 'ASUS AV100 7.1 24 116 dB 192 kHz', 25151.00, '1552561973', 0),
(10, 'HT Omega eClaro', 'C-Media CMI8788 7.1 24  192 kHz', 25900.00, '1552561996', 0),
(11, ' Creative Labs Recon3D', 'Sound Core3D 5.1 24 102 dB 96 kHz', 49159.00, '1552562019', 0),
(12, 'Creative SoundBlaster', '5.1 24 116 dB 192 kHz', 4399.00, '1552562047', 0);

-- --------------------------------------------------------

--
-- Table structure for table `component_details_speaker`
--

CREATE TABLE `component_details_speaker` (
  `id` int(50) NOT NULL,
  `component_name` varchar(100) NOT NULL,
  `component_details` varchar(100) NOT NULL,
  `component_price` double(10,2) NOT NULL,
  `component_image` varchar(100) NOT NULL,
  `status` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `component_details_speaker`
--

INSERT INTO `component_details_speaker` (`id`, `component_name`, `component_details`, `component_price`, `component_image`, `status`) VALUES
(3, 'Creative Labs Pebble 2.0', '2 4.4 W 100 Hz - 17 kHz', 1929.00, '1552628993', 0),
(4, ' Logitech S120', '2 2.3 W 50 Hz - 20 kHz ', 3124.00, '1552629019', 0),
(5, 'Cyber Acoustics CA-2016WB', '2 3 W 260 Hz - 20 kHz', 3318.00, '1552629040', 0),
(6, 'Cyber Acoustics CA-2014rb', '2 4 W 85 Hz - 18 kHz', 3649.00, '1552629068', 0),
(7, 'Gear Head SP2000URED', '2 3 W 200 Hz - 20 kHz', 4390.00, '1552629084', 0),
(8, 'Logitech Z130', '2 5 W 140 Hz - 18 kHz ', 5311.00, '1552629106', 0),
(9, 'Logitech S-150', '2 1.2 W 90 Hz - 20 kHz', 5628.00, '1552629130', 0),
(10, 'Cyber Acoustics CA3001WB', '2.1 14 W 38 Hz - 18 kHz ', 5961.00, '1552629144', 0),
(11, ' Logitech Z200', '2.1 14 W 38 Hz - 18 kHz', 5974.00, '1552629164', 0),
(12, 'Logitech Z337 w/BlueTooth', '2.1 40 W ', 6359.00, '1552629186', 0),
(13, 'Cyber Acoustics CA3001RB', '2.1 14 W 38 Hz - 18 kHz ', 7229.00, '1552629207', 0),
(14, ' Cyber Acoustics CA-3090', '2.1 10 W 160 Hz - 20 kHz ', 7261.00, '1552629226', 0),
(15, 'Creative Labs A60', '2 4 W 90 Hz - 20 kHz', 7429.00, '1552629247', 0),
(16, 'Mackie CR3', '2 50 W 80 Hz - 20 kHz ', 12850.00, '1552629269', 0),
(17, 'M-Audio AV42', '2 40 W 75 Hz - 20 kHz', 13449.00, '1552629288', 0),
(18, ' Genius SP-HF800A', '2 20 W 80 Hz - 20 kHz ', 13649.00, '1552629311', 0),
(19, ' Razer NOMMO CHROMA', '2 0 nW 20 Hz - 20 kHz ', 20460.94, '1552629331', 0);

-- --------------------------------------------------------

--
-- Table structure for table `component_details_ssd`
--

CREATE TABLE `component_details_ssd` (
  `id` int(50) NOT NULL,
  `component_name` varchar(100) NOT NULL,
  `component_details` varchar(100) NOT NULL,
  `component_price` double(10,2) NOT NULL,
  `component_image` varchar(100) NOT NULL,
  `status` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `component_details_ssd`
--

INSERT INTO `component_details_ssd` (`id`, `component_name`, `component_details`, `component_price`, `component_image`, `status`) VALUES
(3, 'Western Digital WDS240G2G0A', '240GB SATA III 6GB/s 2.5 7mm Internal SSD ', 2793.00, '1552563799', 0),
(4, 'Western Digital WDS240G1G0A ', '120GB 2.5-inch Internal SSD (Green)', 1896.00, '1552563819', 0),
(5, 'Samsung 860 Evo ', '250GB SATA III Internal Solid State Drive ', 4938.00, '1552563841', 0),
(6, 'Kingston SSDNow A400', '120GB SATA 3 Solid State Drive', 1800.00, '1552563869', 0),
(7, 'SanDisk SDSSDA-120G-G26', '120GB  Solid State Drive', 1925.00, '1552563931', 0),
(8, 'WD Blue WDS500G2B0A', '500GB 2.5-inch Internal Solid State Drive', 7490.00, '1552563957', 0),
(9, 'Samsung 860 Evo ', '500GB SATA III Internal Solid State Drive', 8789.00, '1552563980', 0),
(10, 'Western Digital WDS120G2G0B', '120GB Internal Solid State Drive', 2005.00, '1552564003', 0),
(11, 'Kingston SSDNow UV400 ', '120GB SATA 3 2.5-inch Solid State Drive ', 2349.00, '1552564025', 0),
(12, 'HP S700 ', '120GB SSD 2.5-inch Internal SATA Solid State Drive', 2839.00, '1552564052', 0),
(13, 'ADATA SP580 Premier', '120GB Internal Solid State Drive', 1899.00, '1552564076', 0),
(14, 'Gigabyte GP-GSTFS31120GNTD', 'Internal SSD 120GB', 1998.00, '1552564102', 0),
(15, 'ADATA  Ultimate SU650 ', '240GB  Solid State Drive', 2699.00, '1552564129', 0),
(16, 'SanDisk SSD Plus SDSSDH-120G-G25 ', '120GB Internal Solid State Drive', 2018.00, '1552564152', 0),
(17, 'Dogfish SSD 64GB SATA3 ', '64GB SATA3 Internal Solid State Drive 7MM ', 1589.00, '1552564179', 0),
(18, 'Crucial MX500 ', '500GB 3D NAND SATA 2.5 Inch Internal SSD', 6684.00, '1552564209', 0),
(19, 'HP S700', '250GB 2.5-inch Internal SATA Solid State Drive', 5217.00, '1552564231', 0);

-- --------------------------------------------------------

--
-- Table structure for table `component_details_wireless_adapter`
--

CREATE TABLE `component_details_wireless_adapter` (
  `id` int(50) NOT NULL,
  `component_name` varchar(100) NOT NULL,
  `component_details` varchar(100) NOT NULL,
  `component_price` double(10,2) NOT NULL,
  `component_image` varchar(100) NOT NULL,
  `status` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `component_details_wireless_adapter`
--

INSERT INTO `component_details_wireless_adapter` (`id`, `component_name`, `component_details`, `component_price`, `component_image`, `status`) VALUES
(3, 'TP-Link TL-WN725N', 'USB 2.0 802.11b/g/n', 602.00, '1552562285', 0),
(4, 'Edimax EW-7811Un', 'USB 2.0 802.11b/g/n', 625.00, '1552562306', 0),
(5, 'TP-Link TL-WN722N', 'USB 2.0 802.11b/g/n', 629.00, '1552562330', 0),
(6, 'TP-Link TL-WN823N', 'USB 2.0 802.11b/g/n ', 649.00, '1552562353', 0),
(7, 'TP-Link TL-WN781ND', 'PCI-Express x1 802.11b/g/n', 659.00, '1552562382', 0),
(8, 'D-Link DWA-131', 'USB 2.0 802.11b/g/n', 705.00, '1552562502', 0),
(9, 'D-Link DWA-130', 'USB 2.0 802.11g/n', 746.00, '1552562524', 0),
(10, 'TP-Link Archer T2U', 'USB 2.0 802.11a/b/g/n/ac', 999.00, '1552562658', 0),
(11, 'Rosewill RNX-N300UB', 'USB 2.0 802.11b/g/n', 2339.00, '1552562678', 0),
(12, 'Netgear A6210-100PAS', 'USB 3.0 802.11a/b/g/n/ac ', 2499.00, '1552562701', 0),
(13, 'TRENDnet TEW-805UB', 'USB 3.0 802.11a/b/g/n/ac ', 2600.00, '1552562726', 0),
(14, ' D-Link DWA-160', 'USB 2.0 802.11a/g/n', 2651.00, '1552562751', 0),
(15, 'Rosewill RNX-N150UBE', 'USB 2.0 802.11b/g/n', 2689.00, '1552562775', 0),
(16, 'Encore ENUWI-G2', 'USB 2.0 802.11b/g', 2842.00, '1552562798', 0),
(17, 'Edimax EW-7811UTC', 'USB 2.0 802.11a/b/g/n/ac', 2851.00, '1552562824', 0),
(18, 'Netgear WNA3100-100ENS', 'USB 2.0 802.11b/g/n', 3100.00, '1552562854', 0),
(19, 'StarTech PEX300WN2X2', 'PCI-Express x1 802.11b/g/n', 3129.00, '1552562875', 0),
(20, 'Linksys AE1200', 'USB 2.0 802.11b/g/n', 3243.00, '1552562900', 0),
(21, 'D-Link DWA-548', 'PCI-Express x1 802.11b/g/n', 3306.00, '1552562922', 0),
(22, ' Encore ENEWI-1XN42', 'PCI-Express x1 802.11b/g/n', 3314.00, '1552562945', 0);

-- --------------------------------------------------------

--
-- Table structure for table `component_master`
--

CREATE TABLE `component_master` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `component_master`
--

INSERT INTO `component_master` (`id`, `name`) VALUES
(1, 'CPU'),
(2, 'MOTHERBOARD');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `company_name` varchar(100) DEFAULT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `phone_number`, `company_name`, `subject`, `message`) VALUES
(1, 'Hasan', 'hasan12@gmail.com', '9563585351', '', 'h', 'hfh'),
(2, 'Hasan', 'hasan12@gmail.com', '9563585351', '', 'h', 'hfh'),
(3, 'Hasan', 'hassanoly444@gmail.com', '9563585351', '', 'g', 'ggggg'),
(4, 'Hasanh', 'hhh@gmail.com', '9563585351', 'hhh', 'hhhh', 'hhhhh'),
(5, 'hasan', '6290548121@gmail.com', '9563585351', 'kkk', 'my', 'hhhh'),
(6, 'sadsaew', 'xzx@gmail.com', '95635853514', 'sqqwsd', 'qwsz', 'sa'),
(7, 'saw', 'hhh@gmail.com', 'ZZZZ', 'ZZZ', 'ZZZZ', 'ZZZ'),
(8, 'hhh', 'hhh@gmail.com', 'hhh', 'hhh', 'hhh', 'hhh'),
(9, 'Hasan Oly', 'hassanoly444@gmail.com', '9563585351', 'tilottama.online', 'PC Assemble', 'How to payment work');

-- --------------------------------------------------------

--
-- Table structure for table `customer_review`
--

CREATE TABLE `customer_review` (
  `id` int(50) NOT NULL,
  `time` datetime NOT NULL,
  `name` varchar(100) NOT NULL,
  `review` text NOT NULL,
  `star` int(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_review`
--

INSERT INTO `customer_review` (`id`, `time`, `name`, `review`, `star`, `status`) VALUES
(19, '2019-03-20 07:41:19', 'Amit Roy', 'A wonderful Service has given by tilottama.tech', 5, 'approved'),
(20, '2019-03-20 07:43:01', 'Oly Hassan', 'they made such a advance security system for my home', 4, 'approved'),
(21, '2019-03-20 07:46:19', 'Snehasish  Das', 'They Have such a nice collection of product & smart Gadget', 5, 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `login_id`
--

CREATE TABLE `login_id` (
  `id` int(100) NOT NULL,
  `login_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_id`
--

INSERT INTO `login_id` (`id`, `login_time`) VALUES
(1, '2019-02-20 00:00:00'),
(2, '2019-02-20 00:00:00'),
(3, '2019-02-20 00:00:00'),
(4, '2019-02-20 00:00:00'),
(5, '2019-02-20 00:00:00'),
(6, '2019-02-20 00:00:00'),
(7, '2019-02-21 00:00:00'),
(8, '2019-02-21 00:00:00'),
(9, '2019-02-21 00:00:00'),
(10, '2019-02-21 00:00:00'),
(11, '2019-02-21 00:00:00'),
(12, '2019-02-21 00:00:00'),
(13, '2019-02-22 00:00:00'),
(14, '2019-02-22 00:00:00'),
(15, '2019-02-22 00:00:00'),
(16, '2019-02-22 00:00:00'),
(17, '2019-02-23 00:00:00'),
(18, '2019-02-23 00:00:00'),
(19, '2019-02-23 00:00:00'),
(20, '2019-02-23 00:00:00'),
(21, '2019-02-23 00:00:00'),
(22, '2019-02-25 00:00:00'),
(23, '2019-02-25 00:00:00'),
(24, '2019-02-25 00:00:00'),
(25, '2019-02-25 00:00:00'),
(26, '2019-02-25 00:00:00'),
(27, '2019-02-25 00:00:00'),
(28, '2019-02-25 00:00:00'),
(29, '2019-02-25 00:00:00'),
(30, '2019-02-25 00:00:00'),
(31, '2019-02-25 00:00:00'),
(32, '2019-02-25 00:00:00'),
(33, '2019-02-25 00:00:00'),
(34, '2019-02-25 00:00:00'),
(35, '2019-02-25 00:00:00'),
(36, '2019-02-25 00:00:00'),
(37, '2019-02-26 00:00:00'),
(38, '2019-02-26 00:00:00'),
(39, '2019-02-26 00:00:00'),
(40, '2019-02-26 00:00:00'),
(41, '2019-02-26 00:00:00'),
(42, '2019-02-26 00:00:00'),
(43, '2019-02-26 00:00:00'),
(44, '2019-02-26 00:00:00'),
(45, '2019-02-26 00:00:00'),
(46, '2019-02-26 00:00:00'),
(47, '2019-02-27 00:00:00'),
(48, '2019-02-27 00:00:00'),
(49, '2019-02-27 00:00:00'),
(50, '2019-02-27 00:00:00'),
(51, '2019-02-27 00:00:00'),
(52, '2019-02-27 00:00:00'),
(53, '2019-02-27 00:00:00'),
(54, '2019-02-27 00:00:00'),
(55, '2019-02-27 00:00:00'),
(56, '2019-02-27 00:00:00'),
(57, '2019-02-28 00:00:00'),
(58, '2019-02-28 00:00:00'),
(59, '2019-02-28 00:00:00'),
(60, '2019-02-28 00:00:00'),
(61, '2019-02-28 00:00:00'),
(62, '2019-02-28 00:00:00'),
(63, '2019-02-28 00:00:00'),
(64, '2019-03-01 00:00:00'),
(65, '2019-03-01 00:00:00'),
(66, '2019-03-01 00:00:00'),
(67, '2019-03-01 00:00:00'),
(68, '2019-03-02 00:00:00'),
(69, '2019-03-02 00:00:00'),
(70, '2019-03-02 00:00:00'),
(71, '2019-03-02 00:00:00'),
(72, '2019-03-02 00:00:00'),
(73, '2019-03-04 00:00:00'),
(74, '2019-03-04 00:00:00'),
(75, '2019-03-05 00:00:00'),
(76, '2019-03-05 00:00:00'),
(77, '2019-03-05 00:00:00'),
(78, '2019-03-05 00:00:00'),
(79, '2019-03-05 00:00:00'),
(80, '2019-03-06 00:00:00'),
(81, '2019-03-06 00:00:00'),
(82, '2019-03-06 00:00:00'),
(83, '2019-03-06 00:00:00'),
(84, '2019-03-06 00:00:00'),
(85, '2019-03-06 00:00:00'),
(86, '2019-03-07 00:00:00'),
(87, '2019-03-07 00:00:00'),
(88, '2019-03-07 00:00:00'),
(89, '2019-03-07 00:00:00'),
(90, '2019-03-08 00:00:00'),
(91, '2019-03-08 00:00:00'),
(92, '2019-03-09 00:00:00'),
(93, '2019-03-09 00:00:00'),
(94, '2019-03-09 00:00:00'),
(95, '2019-03-09 00:00:00'),
(96, '2019-03-11 00:00:00'),
(97, '2019-03-11 00:00:00'),
(98, '2019-03-11 00:00:00'),
(99, '2019-03-11 00:00:00'),
(100, '2019-03-12 00:00:00'),
(101, '2019-03-13 00:00:00'),
(102, '2019-03-13 00:00:00'),
(103, '2019-03-13 00:00:00'),
(104, '2019-03-13 00:00:00'),
(105, '2019-03-13 00:00:00'),
(106, '2019-03-14 00:00:00'),
(107, '2019-03-14 00:00:00'),
(108, '2019-03-14 00:00:00'),
(109, '2019-03-14 00:00:00'),
(110, '2019-03-15 00:00:00'),
(111, '2019-03-15 00:00:00'),
(112, '2019-03-15 00:00:00'),
(113, '2019-03-15 00:00:00'),
(114, '2019-03-18 00:00:00'),
(115, '2019-03-18 00:00:00'),
(116, '2019-03-18 00:00:00'),
(117, '2019-03-18 00:00:00'),
(118, '2019-03-18 00:00:00'),
(119, '2019-03-18 00:00:00'),
(120, '2019-03-18 00:00:00'),
(121, '2019-03-18 00:00:00'),
(122, '2019-03-18 00:00:00'),
(123, '2019-03-18 00:00:00'),
(124, '2019-03-19 00:00:00'),
(125, '2019-03-19 00:00:00'),
(126, '2019-03-19 00:00:00'),
(127, '2019-03-19 00:00:00'),
(128, '2019-03-19 00:00:00'),
(129, '2019-03-19 00:00:00'),
(130, '2019-03-20 00:00:00'),
(131, '2019-03-20 00:00:00'),
(132, '2019-03-20 00:00:00'),
(133, '2019-03-20 00:00:00'),
(134, '2019-03-20 00:00:00'),
(135, '2019-03-20 00:00:00'),
(136, '2019-03-20 00:00:00'),
(137, '2019-03-25 00:00:00'),
(138, '2019-03-25 00:00:00'),
(139, '2019-03-25 00:00:00'),
(140, '2019-03-25 00:00:00'),
(141, '2019-03-25 00:00:00'),
(142, '2019-03-25 00:00:00'),
(143, '2019-03-25 00:00:00'),
(144, '2019-03-25 00:00:00'),
(145, '2019-03-26 00:00:00'),
(146, '2019-03-26 00:00:00'),
(147, '2019-03-27 00:00:00'),
(148, '2019-03-27 00:00:00'),
(149, '2019-03-27 00:00:00'),
(150, '2019-03-27 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `m_board_cpu`
--

CREATE TABLE `m_board_cpu` (
  `id` int(50) NOT NULL,
  `m_board` varchar(100) NOT NULL,
  `cpu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_board_cpu`
--

INSERT INTO `m_board_cpu` (`id`, `m_board`, `cpu`) VALUES
(1, '4', '30'),
(2, '3', '27'),
(3, '3', '27'),
(4, '9', '35');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(50) NOT NULL,
  `order_id` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `txn_id` varchar(100) NOT NULL,
  `details` varchar(500) NOT NULL,
  `product_price` varchar(500) NOT NULL,
  `bill_addr` varchar(100) NOT NULL,
  `shipping_addr` varchar(100) DEFAULT NULL,
  `total` double(10,2) NOT NULL,
  `order_time` datetime NOT NULL,
  `invoice` varchar(500) NOT NULL DEFAULT 'blank.pdf',
  `status` int(50) DEFAULT '1',
  `note` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `username`, `name`, `contact_number`, `txn_id`, `details`, `product_price`, `bill_addr`, `shipping_addr`, `total`, `order_time`, `invoice`, `status`, `note`) VALUES
(1, 'ORD201903189CD4', 'h@gmail.com', '', '', 'TS20190318B4ED', 'INTEL,6 Kg,45 x 20 x 35 cm,Intel,Core i5-650,8 GB,DDR3 SDRAM,500 GB,Seagate,Windows 10,2GB nvidia Geforce GT 710 graphics card,No any information', '21700.00', 'India', 'India', 21700.00, '2019-03-18 13:11:48', 'blank.pdf', 3, '3'),
(2, 'ORD20190318F422', 'h@gmail.com', '', '', 'TS2019031850E0', 'INTEL,6 Kg,45 x 20 x 35 cm,Intel,Core i5-650,8 GB,DDR3 SDRAM,500 GB,Seagate,Windows 10,2GB nvidia Geforce GT 710 graphics card,No any information', '21700.00', 'India', 'India', 21700.00, '2019-03-18 13:22:03', 'ORD20190318F422Invoice-tilottama.tech.pdf', 3, '1'),
(3, 'ORD201903260CCC', 'h@gmail.com', 'Hasan Md Oliullah', '9701525362', 'TS20190318D2D5', 'FOXIN ,4.35 Kg,375 x 175 x 405 mm,AMD,FX 6300,8 GB,DDR3 ,1 TB,Seagate,free DOS,Zotac GeForce GTX 1050 Ti OC Edition ZT-P10510B-10L 4GB,MONITOR 24', '49800.00', 'India', '', 49800.00, '2019-03-26 14:21:08', 'ORD201903260CCCInvoice-tilottama.tech.pdf', 4, '4');

-- --------------------------------------------------------

--
-- Table structure for table `pc_request`
--

CREATE TABLE `pc_request` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `processer` varchar(100) NOT NULL,
  `motherboard` varchar(100) NOT NULL,
  `cabinet` varchar(100) NOT NULL,
  `ram` varchar(100) NOT NULL,
  `smps` varchar(100) NOT NULL,
  `ssd` varchar(100) NOT NULL,
  `graphic_card` varchar(100) NOT NULL,
  `others` varchar(100) NOT NULL,
  `budget` varchar(100) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pc_request`
--

INSERT INTO `pc_request` (`id`, `name`, `email`, `phone_number`, `processer`, `motherboard`, `cabinet`, `ram`, `smps`, `ssd`, `graphic_card`, `others`, `budget`, `time`) VALUES
(4, 'Hasan Oly', 'hasan@tilottama.online', '9701525362', 'i7 9th Gen', 'Gigabyte FM3+', 'Cooler Master', 'Corsair 16GB DDR4X', 'Corsair 700W', '256GB', 'GTX 2070', 'DELL Curve Monitor 24\"', '70000', '2019-03-19 16:44:35'),
(5, 'sss', 'sss@g.com', 'ssss', 'sss', 'ss', 'sssssss', 'ssss', 'sss', 'ss', 'sssss', 'sssss', 'ssss', '2019-03-20 12:58:46'),
(6, 'Snehasish  Das', 'sss@g.com', 'ssss', 'sssss', 'ssssssss', 'ssssssssssss', 'ssssssssssssssss', 'ssssssssssssssssssss', 'sssssssssssssssssss', 'ssssssssssssssssss', 'sssssssssssssssssssssss', 'ssssssssss', '2019-03-20 13:00:25');

-- --------------------------------------------------------

--
-- Table structure for table `price_list`
--

CREATE TABLE `price_list` (
  `id` int(100) NOT NULL,
  `CPU` varchar(100) NOT NULL,
  `CAB` varchar(100) NOT NULL,
  `SMPS` varchar(100) NOT NULL,
  `Morherboard` varchar(100) NOT NULL,
  `Harddrive` int(11) NOT NULL,
  `RAM` int(11) NOT NULL,
  `GCARD` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `temp_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `price_list`
--

INSERT INTO `price_list` (`id`, `CPU`, `CAB`, `SMPS`, `Morherboard`, `Harddrive`, `RAM`, `GCARD`, `Total`, `temp_id`) VALUES
(13, '1', '5', '10', '15', 0, 0, 0, 31, '0'),
(14, '2', '5', '10', '14', 0, 0, 0, 31, '0'),
(15, '2', '5', '10', '13', 0, 0, 0, 30, '0'),
(16, '1', '5', '9', '15', 0, 0, 0, 30, '0'),
(17, '4', '8', '11', '15', 0, 0, 0, 38, '0'),
(18, '1', '8', '12', '14', 0, 0, 0, 35, '0'),
(19, '1', '6', '10', '16', 0, 0, 0, 33, '0'),
(20, '1', '5', '9', '16', 0, 0, 0, 31, '0'),
(21, '1', '5', '9', '16', 0, 0, 0, 31, '0'),
(22, '1', '7', '10', '16', 0, 0, 0, 34, '0'),
(23, '1', '5', '9', '16', 0, 0, 0, 31, '0'),
(24, '2', '5', '9', '16', 0, 0, 0, 32, '0'),
(25, '1', '5', '9', '16', 0, 0, 0, 31, '0'),
(26, '1', '5', '9', '15', 0, 0, 0, 30, '0'),
(27, '1', '5', '10', '16', 0, 0, 0, 32, '104'),
(28, '1', '6', '9', '16', 0, 0, 0, 32, '904'),
(29, '1', '5', '9', '16', 0, 0, 0, 31, '506'),
(30, '1', '6', '9', '15', 0, 0, 0, 31, '746'),
(31, '1', '5', '10', '16', 0, 0, 0, 32, '732'),
(32, '1', '6', '9', '16', 0, 0, 0, 32, '550'),
(33, '1', '5', '9', '14', 0, 0, 0, 29, '846'),
(34, '1', '5', '9', '15', 0, 0, 0, 30, '0'),
(40, '1', '5', '9', '16', 0, 0, 0, 31, '1'),
(42, '2', '5', '10', '14', 0, 0, 0, 31, '2'),
(44, '1', '5', '9', '16', 0, 0, 0, 31, '3'),
(46, '1', '6', '9', '16', 0, 0, 0, 32, '2'),
(47, '1', '5', '9', '16', 0, 0, 0, 31, '4'),
(48, '1', '5', '9', '16', 0, 0, 0, 31, '6'),
(49, '1', '5', '9', '16', 0, 0, 0, 31, '7'),
(50, '1', '5', '9', '16', 0, 0, 0, 31, '9'),
(51, '1', '5', '9', '16', 0, 0, 0, 31, '11'),
(52, '17253.00', '5', '9', '16', 0, 0, 0, 17283, '12'),
(53, '17253.00', '5', '9', '16', 0, 0, 0, 17283, '12'),
(63, '21', '5', '9', '16', 0, 0, 0, 51, '13'),
(64, '21', '2', '9', '16', 0, 0, 0, 48, '13'),
(65, '21', '2', '9', '16', 0, 0, 0, 48, '13'),
(66, '24', '3', '10', '15', 0, 0, 0, 52, '13'),
(67, '21', '2', '9', '16', 0, 0, 0, 48, '13'),
(68, '24', '2', '9', '16', 0, 0, 0, 51, '13'),
(69, '24', '2', '9', '16', 0, 0, 0, 51, '13'),
(70, '25', '3', '10', '15', 0, 0, 0, 53, '13'),
(71, '21', '2', '9', '16', 0, 0, 0, 48, '14'),
(72, '21', '2', '9', '16', 0, 0, 0, 48, '14'),
(73, '21', '2', '9', '15', 0, 0, 0, 47, '14'),
(74, '21', '2', '1', '16', 0, 0, 0, 40, '14'),
(75, '24', '3', '1', '16', 0, 0, 0, 44, '14'),
(76, '21', '2', '1', '1', 0, 0, 0, 25, '14'),
(77, '21', '2', '1', '2', 0, 0, 0, 26, '14'),
(78, '21', '2', '1', '1', 1, 0, 0, 25, '14'),
(79, '21', '2', '1', '1', 1, 0, 0, 25, '14'),
(80, '21', '2', '1', '1', 1, 0, 0, 25, '14'),
(81, '21', '2', '1', '1', 1, 1, 0, 25, '14'),
(82, '21', '2', '1', '1', 1, 1, 0, 25, '14'),
(83, '21', '2', '1', '1', 1, 1, 1, 25, '14'),
(84, '21', '2', '1', '1', 1, 1, 1, 25, '14'),
(85, '21', '2', '1', '1', 1, 1, 1, 25, '16'),
(86, '21', '2', '1', '1', 1, 1, 1, 25, '16'),
(87, '21', '2', '1', '1', 1, 1, 1, 25, '16'),
(88, '21', '2', '1', '1', 1, 1, 1, 25, '16'),
(89, '24', '3', '1', '2', 2, 2, 1, 30, '16'),
(90, '21', '3', '1', '1', 2, 1, 1, 26, '17'),
(91, '25', '3', '2', '2', 2, 2, 2, 32, '17'),
(92, '21', '3', '1', '1', 1, 1, 1, 26, '18'),
(93, '21', '2', '1', '1', 1, 1, 1, 25, '19'),
(94, '21', '2', '1', '1', 1, 1, 1, 25, '19'),
(95, '21', '2', '1', '1', 1, 1, 1, 25, '23'),
(96, '21', '2', '1', '1', 1, 1, 1, 25, '23'),
(97, '24', '3', '1', '1', 1, 1, 1, 29, '24'),
(98, '21', '2', '1', '1', 1, 1, 1, 25, '0'),
(99, '21', '2', '1', '1', 1, 1, 1, 25, '0'),
(100, '21', '3', '1', '1', 1, 1, 1, 26, '0'),
(101, '21', '2', '1', '1', 1, 1, 1, 25, 'hassanoly7444@gmail.com'),
(102, '21', '3', '2', '1', 1, 1, 1, 27, 'Guest'),
(103, '21', '2', '1', '1', 1, 1, 1, 25, '27'),
(104, '21', '2', '1', '1', 1, 1, 1, 25, '28'),
(105, '21', '2', '1', '1', 1, 1, 1, 25, '28'),
(106, '21', '3', '1', '1', 1, 1, 1, 26, '30'),
(107, '21', '2', '1', '1', 1, 1, 1, 25, 'tilottama@admin.com'),
(108, '21', '3', '1', '1', 2, 2, 1, 26, '32'),
(109, '21', '2', '1', '1', 1, 1, 1, 25, '33'),
(110, '21', '3', '2', '2', 2, 2, 2, 28, 'hassanoly7444@gmail.com'),
(111, '25', '2', '2', '2', 2, 2, 2, 31, '34'),
(112, '21', '3', '2', '2', 2, 2, 2, 28, '35'),
(113, '21', '2', '2', '2', 2, 2, 2, 27, 'hassanoly7444@gmail.com'),
(114, '21', '3', '2', '2', 2, 2, 2, 28, '36'),
(115, '21', '3', '2', '2', 2, 2, 2, 28, 'hassanoly7444@gmail.com'),
(116, '21', '3', '2', '2', 2, 2, 2, 28, 'hassanoly7444@gmail.com'),
(117, '24', '3', '1', '1', 1, 2, 1, 29, 'hassanoly7444@gmail.com'),
(118, '26', '3', '2', '2', 2, 2, 2, 0, ''),
(119, '21', '2', '1', '1', 1, 2, 2, 0, ''),
(120, '21', '3', '2', '2', 2, 2, 2, 0, ''),
(121, '21', '2', '1', '2', 2, 2, 2, 0, ''),
(122, '21', '3', '2', '2', 2, 2, 2, 0, ''),
(123, '21', '3', '2', '2', 2, 2, 2, 0, ''),
(124, '26', '2', '2', '2', 2, 2, 2, 0, ''),
(125, '21', '3', '2', '2', 2, 2, 2, 0, ''),
(126, '21', '2', '2', '2', 2, 2, 2, 0, ''),
(127, '24', '3', '2', '2', 2, 2, 2, 0, ''),
(128, '21', '3', '2', '2', 2, 2, 2, 0, '42'),
(129, '21', '3', '2', '2', 2, 2, 2, 0, '41'),
(130, '24', '3', '2', '2', 2, 2, 2, 0, 'hassanoly7444@gmail.com'),
(131, '21', '3', '2', '2', 2, 2, 2, 0, '43'),
(132, '21', '2', '1', '1', 1, 1, 1, 0, '45'),
(133, '25', '2', '2', '2', 2, 2, 2, 0, '46'),
(134, '24', '3', '2', '2', 2, 2, 2, 0, '47'),
(135, '21', '2', '1', '1', 1, 1, 1, 0, '48'),
(136, '21', '3', '2', '2', 2, 2, 2, 0, '49'),
(137, '26', '3', '2', '2', 2, 2, 1, 0, 'hassanoly7444@gmail.com'),
(138, '21', '2', '1', '2', 2, 2, 2, 0, 'hassanoly7444@gmail.com'),
(139, '26', '3', '2', '2', 2, 2, 2, 0, '51'),
(140, '21', '3', '2', '2', 2, 2, 2, 0, 'kabir@gmail.com'),
(141, '25', '3', '2', '2', 2, 2, 2, 0, '55'),
(142, '21', '3', '1', '2', 2, 2, 2, 0, 'hassanoly7444@gmail.com'),
(143, '25', '2', '1', '1', 1, 1, 1, 0, 'hassanoly7444@gmail.com'),
(144, '27', '3', '2', '2', 2, 2, 2, 0, '59'),
(145, '27', '3', '2', '2', 2, 2, 2, 0, 'hassanoly7444@gmail.com'),
(146, '25', '3', '1', '2', 2, 2, 1, 0, '63'),
(147, '26', '3', '2', '2', 2, 2, 2, 0, 'hassanoly7444@gmail.com'),
(148, '24', '3', '1', '2', 2, 2, 2, 0, 'hassanoly7444@gmail.com'),
(149, '21', '3', '2', '2', 2, 2, 2, 0, '73'),
(150, '21', '3', '2', '2', 2, 2, 2, 0, 'hassanoly7444@gmail.com'),
(151, '21', '2', '2', '2', 2, 2, 2, 0, 'hassanoly7444@gmail.com'),
(152, '21', '3', '2', '2', 2, 2, 2, 0, 'hassanoly7444@gmail.com'),
(153, '26', '2', '1', '1', 1, 1, 1, 0, 'hassanoly7444@gmail.com'),
(154, '21', '3', '2', '2', 2, 2, 2, 0, 'hassanoly7444@gmail.com'),
(155, '26', '3', '2', '2', 2, 2, 2, 0, 'hassanoly7444@gmail.com'),
(156, '21', '3', '2', '2', 2, 2, 2, 0, 'hassanoly7444@gmail.com'),
(157, '24', '3', '2', '2', 2, 2, 2, 0, 'hassanoly7444@gmail.com'),
(158, '27', '3', '2', '2', 2, 2, 2, 0, 'hassanoly7444@gmail.com'),
(159, '27', '3', '2', '2', 2, 2, 2, 0, 'hassanoly7444@gmail.com'),
(160, '27', '3', '2', '2', 2, 2, 2, 0, 'hassanoly7444@gmail.com'),
(161, '21', '2', '1', '1', 1, 2, 2, 0, 'hassanoly7444@gmail.com'),
(162, '21', '2', '1', '2', 1, 1, 1, 0, 'hassanoly7444@gmail.com'),
(163, '21', '2', '1', '2', 1, 1, 2, 0, 'hassanoly7444@gmail.com'),
(164, '21', '3', '2', '2', 2, 2, 2, 0, 'hassanoly7444@gmail.com'),
(165, '21', '3', '2', '2', 2, 2, 2, 0, 'hassanoly7444@gmail.com'),
(166, '27', '3', '2', '2', 2, 2, 2, 0, 'hassanoly7444@gmail.com'),
(167, '26', '3', '2', '2', 2, 2, 2, 0, 'hassanoly7444@gmail.com'),
(168, '26', '3', '2', '2', 2, 2, 2, 0, 'hassanoly7444@gmail.com'),
(169, '26', '3', '2', '2', 2, 2, 2, 0, 'hassanoly7444@gmail.com'),
(170, '26', '3', '2', '2', 2, 2, 2, 0, 'hassanoly7444@gmail.com'),
(171, '26', '3', '2', '2', 2, 2, 2, 0, 'hassanoly7444@gmail.com'),
(172, '26', '3', '2', '2', 1, 2, 2, 0, 'hassanoly7444@gmail.com'),
(173, '26', '3', '2', '2', 1, 2, 2, 0, 'hassanoly7444@gmail.com'),
(174, '26', '3', '2', '2', 1, 2, 2, 0, 'hassanoly7444@gmail.com'),
(175, '26', '3', '2', '2', 1, 2, 2, 0, 'hassanoly7444@gmail.com'),
(176, '26', '3', '2', '2', 1, 2, 2, 0, 'hassanoly7444@gmail.com'),
(177, '26', '3', '2', '2', 1, 2, 2, 0, 'hassanoly7444@gmail.com'),
(178, '26', '3', '2', '2', 1, 2, 2, 0, 'hassanoly7444@gmail.com'),
(179, '26', '3', '2', '2', 1, 2, 2, 0, 'hassanoly7444@gmail.com'),
(180, '26', '3', '2', '2', 1, 2, 2, 0, 'hassanoly7444@gmail.com'),
(181, '26', '3', '2', '2', 1, 2, 2, 0, 'hassanoly7444@gmail.com'),
(182, '26', '3', '2', '2', 2, 2, 2, 0, 'hassanoly7444@gmail.com'),
(183, '26', '3', '2', '2', 2, 2, 2, 0, 'hassanoly7444@gmail.com'),
(184, '26', '2', '1', '1', 2, 2, 1, 0, 'hassanoly7444@gmail.com'),
(185, '26', '2', '1', '1', 1, 1, 1, 0, 'hassanoly7444@gmail.com'),
(186, '25', '2', '1', '1', 1, 1, 1, 0, 'hassanoly7444@gmail.com'),
(187, '26', '2', '1', '1', 1, 1, 1, 0, 'hassanoly7444@gmail.com'),
(188, '26', '2', '1', '1', 1, 1, 1, 0, 'hassanoly7444@gmail.com'),
(189, '26', '2', '1', '1', 1, 1, 1, 0, 'hassanoly7444@gmail.com'),
(190, '26', '2', '1', '1', 1, 1, 1, 0, 'hassanoly7444@gmail.com'),
(191, '25', '2', '1', '2', 2, 2, 2, 0, 'hassanoly7444@gmail.com'),
(192, '25', '2', '1', '2', 1, 2, 1, 0, 'hassanoly7444@gmail.com'),
(193, '25', '2', '1', '2', 1, 2, 1, 0, 'hassanoly7444@gmail.com'),
(194, '24', '2', '1', '2', 1, 2, 1, 0, 'hassanoly7444@gmail.com'),
(195, '24', '2', '1', '2', 1, 2, 1, 0, 'hassanoly7444@gmail.com'),
(196, '24', '2', '1', '2', 1, 2, 1, 0, 'hassanoly7444@gmail.com'),
(197, '26', '2', '1', '2', 1, 2, 1, 0, 'hassanoly7444@gmail.com'),
(198, '26', '2', '1', '2', 1, 2, 1, 0, 'hassanoly7444@gmail.com'),
(199, '26', '2', '1', '2', 1, 2, 1, 0, 'hassanoly7444@gmail.com'),
(200, '24', '2', '1', '2', 1, 2, 1, 0, 'hassanoly7444@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `product_order`
--

CREATE TABLE `product_order` (
  `id` int(50) NOT NULL,
  `order_id` varchar(100) NOT NULL,
  `order_time` datetime NOT NULL,
  `product_number` varchar(50) NOT NULL,
  `product_details` varchar(500) NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_order`
--

INSERT INTO `product_order` (`id`, `order_id`, `order_time`, `product_number`, `product_details`, `product_price`, `username`) VALUES
(3, 'ORD20190226662A', '2019-02-26 00:00:00', 'B07J5L9821', 'Zebronics,6 Kg,44 x 20 x 35 cm,Intel,Core i5-650,8 GB,DDR3 SDRAM,500 GB,Seagate,Windows 10,2GB nvidia Geforce GT 710 graphics card,No any information', 21300.00, 'hassanoly7444@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `return_list`
--

CREATE TABLE `return_list` (
  `id` int(50) NOT NULL,
  `order_id` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `order_time` datetime NOT NULL,
  `issue` varchar(500) NOT NULL,
  `action` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT '1',
  `ticket_no` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `return_list`
--

INSERT INTO `return_list` (`id`, `order_id`, `username`, `order_time`, `issue`, `action`, `status`, `ticket_no`) VALUES
(1, 'ORD201903189CD4', 'h@gmail.com', '2019-03-20 13:59:25', '', '', '0', ''),
(2, 'ORD201903189CD4', 'h@gmail.com', '2019-03-20 15:15:32', 'my issue', '', '2', ''),
(3, 'ORD201903189CD4', 'h@gmail.com', '2019-03-20 15:17:15', 'my issue', '', '3', ''),
(4, 'ORD201903189CD4', 'h@gmail.com', '2019-03-20 15:54:57', 'my', '', '2', ''),
(5, 'ORD201903189CD4', 'h@gmail.com', '2019-03-20 15:55:07', 'jjjjj', '', '1', ''),
(16, 'ORD201903189CD4', 'h@gmail.com', '2019-03-26 13:58:58', 'jjjj', '', '1', '201903267C72'),
(17, 'ORD201903189CD4', 'h@gmail.com', '2019-03-26 14:03:44', 'ggggg', '', '0', '201903267713'),
(18, 'ORD201903260CCC', 'h@gmail.com', '2019-03-26 14:44:07', 'zzzzz', '', '1', '20190326E79F'),
(19, 'ORD201903260CCC', 'h@gmail.com', '2019-03-26 18:45:17', 'hhhh', '', '4', '2019032676E2'),
(20, 'ORD201903189CD4', 'h@gmail.com', '2019-03-27 16:49:37', '', '', '1', '201903273D39'),
(21, 'ORD201903189CD4', 'h@gmail.com', '2019-03-27 16:58:15', 'myyyy esss', '', '3', '201903276BF1');

-- --------------------------------------------------------

--
-- Table structure for table `save_product`
--

CREATE TABLE `save_product` (
  `id` int(50) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `cpu_model` varchar(100) NOT NULL,
  `cpu_price` double(10,2) NOT NULL,
  `cab_model` varchar(100) NOT NULL,
  `cab_price` double(10,2) NOT NULL,
  `smps_model` varchar(100) NOT NULL,
  `smps_price` double(10,2) NOT NULL,
  `mboard_model` varchar(100) NOT NULL,
  `mboard_price` double(10,2) NOT NULL,
  `hdrive_model` varchar(100) NOT NULL,
  `hdrive_price` double(10,2) NOT NULL,
  `memory_model` varchar(100) NOT NULL,
  `memory_price` double(10,2) NOT NULL,
  `gcard_model` varchar(100) NOT NULL,
  `gcard_price` double(10,2) NOT NULL,
  `total` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `profile_pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `phone_number`, `email_id`, `address`, `profile_pic`) VALUES
(19, 'Hasan Md Oliullah', 'abfd0ddae13e390dcaa46629123978f2449b4e6b', '9701525362', 'h@gmail.com', 'India', '155264654951MW3tFU25L.jpg'),
(21, 'Oly Hasan', '05e2e04799a22001ecb23dfbcec22921fce8796c', '9563585351', 'hassanoly444@gmail.com', 'kolkata', '1553511048Penguins.jpg'),
(22, 'oly hasan', '4834104fd4aecda0439e4596943963f46f01f131', '9536585351', 'hhhh@gmail.com', 'kolkata', '1553511245client3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `oauth_provider` enum('','facebook','google','twitter') COLLATE utf8_unicode_ci NOT NULL,
  `oauth_uid` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activety_log`
--
ALTER TABLE `activety_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_product_pc`
--
ALTER TABLE `add_product_pc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_item`
--
ALTER TABLE `cart_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `component_details_cab`
--
ALTER TABLE `component_details_cab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `component_details_cpu`
--
ALTER TABLE `component_details_cpu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `component_details_dvd_drive`
--
ALTER TABLE `component_details_dvd_drive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `component_details_graphic_card`
--
ALTER TABLE `component_details_graphic_card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `component_details_hdd`
--
ALTER TABLE `component_details_hdd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `component_details_headphone`
--
ALTER TABLE `component_details_headphone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `component_details_keyboardmouse`
--
ALTER TABLE `component_details_keyboardmouse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `component_details_mboard`
--
ALTER TABLE `component_details_mboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `component_details_memory`
--
ALTER TABLE `component_details_memory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `component_details_monitor`
--
ALTER TABLE `component_details_monitor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `component_details_smps`
--
ALTER TABLE `component_details_smps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `component_details_sound_card`
--
ALTER TABLE `component_details_sound_card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `component_details_speaker`
--
ALTER TABLE `component_details_speaker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `component_details_ssd`
--
ALTER TABLE `component_details_ssd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `component_details_wireless_adapter`
--
ALTER TABLE `component_details_wireless_adapter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `component_master`
--
ALTER TABLE `component_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_review`
--
ALTER TABLE `customer_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_id`
--
ALTER TABLE `login_id`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_board_cpu`
--
ALTER TABLE `m_board_cpu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pc_request`
--
ALTER TABLE `pc_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `price_list`
--
ALTER TABLE `price_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `return_list`
--
ALTER TABLE `return_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `save_product`
--
ALTER TABLE `save_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_id` (`email_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activety_log`
--
ALTER TABLE `activety_log`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `add_product_pc`
--
ALTER TABLE `add_product_pc`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin_details`
--
ALTER TABLE `admin_details`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart_item`
--
ALTER TABLE `cart_item`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `component_details_cab`
--
ALTER TABLE `component_details_cab`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `component_details_cpu`
--
ALTER TABLE `component_details_cpu`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `component_details_dvd_drive`
--
ALTER TABLE `component_details_dvd_drive`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `component_details_graphic_card`
--
ALTER TABLE `component_details_graphic_card`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `component_details_hdd`
--
ALTER TABLE `component_details_hdd`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `component_details_headphone`
--
ALTER TABLE `component_details_headphone`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `component_details_keyboardmouse`
--
ALTER TABLE `component_details_keyboardmouse`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `component_details_mboard`
--
ALTER TABLE `component_details_mboard`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `component_details_memory`
--
ALTER TABLE `component_details_memory`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `component_details_monitor`
--
ALTER TABLE `component_details_monitor`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `component_details_smps`
--
ALTER TABLE `component_details_smps`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `component_details_sound_card`
--
ALTER TABLE `component_details_sound_card`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `component_details_speaker`
--
ALTER TABLE `component_details_speaker`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `component_details_ssd`
--
ALTER TABLE `component_details_ssd`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `component_details_wireless_adapter`
--
ALTER TABLE `component_details_wireless_adapter`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `component_master`
--
ALTER TABLE `component_master`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customer_review`
--
ALTER TABLE `customer_review`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `login_id`
--
ALTER TABLE `login_id`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `m_board_cpu`
--
ALTER TABLE `m_board_cpu`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pc_request`
--
ALTER TABLE `pc_request`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `price_list`
--
ALTER TABLE `price_list`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `product_order`
--
ALTER TABLE `product_order`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `return_list`
--
ALTER TABLE `return_list`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `save_product`
--
ALTER TABLE `save_product`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
