-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2019 at 03:18 PM
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
-- Table structure for table `add_product_pc`
--

CREATE TABLE `add_product_pc` (
  `id` int(100) NOT NULL,
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

INSERT INTO `add_product_pc` (`id`, `product_no`, `product_price`, `product_img`, `cabinet`, `product_weight`, `product_dimensions`, `processor_brand`, `processor_type`, `ram_size`, `ram_type`, `hard_disk_size`, `hard_disk_tech`, `operating_system`, `g_card`, `additional_information`) VALUES
(3, 'B07J5L9821', 21300.00, '155107894841GlZtBkfnL.jpg', 'Zebronics', '6 Kg', '44 x 20 x 35 cm', 'Intel', 'Core i5-650', '8 GB', 'DDR3 SDRAM', '500 GB', 'Seagate', 'Windows 10', '2GB nvidia Geforce GT 710 graphics card', 'No any information'),
(4, 'B07J5L9820', 21700.00, '1551079808610OF6OF53L._SL1500_.jpg', 'INTEL', '6 Kg', '44 x 20 x 35 cm', 'Intel', 'Core i5-650', '8 GB', 'DDR3 SDRAM', '500 GB', 'Seagate', 'Windows 10', '2GB nvidia Geforce GT 710 graphics card', 'No any information'),
(5, 'B07J5L9825', 11499.00, '155118784341GlZtBkfnL.jpg', 'Iball', '6 Kg', '44 x 20 x 35 cm', 'Intel', 'Core i5-650', '8 GB', 'DDR3 SDRAM', '500 GB', 'Seagate', 'Windows 8', '1GB nvidia Geforce GT 710 graphics card', 'No any information');

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
(20, 'hassanoly7444@gmail.com', 'TS20190228D1E2', 'AMD Ryzen 5 2600  =>17253.00  ,   NZXT H500i (Black)  =>20624.00  ,   EVGA SuperNOVA 750  =>15853.00  ,   Asus Prime Z370-A  =>22100.00  ,   Seagate - Barracuda   =>5790.00  ,   G.Skill Trident Z RGB  =>15098.00  ,   Asus ROG-STRIX-RTX2080TI-O11G-GAMING  =>168699.00  ', 'C-PC20190228D1E2', 265417.00),
(21, 'hassanoly7444@gmail.com', 'TS2019022814EB', 'Intel Core i5-9600K  =>27500.00  ,   NZXT H500 (Black)  =>16249.00  ,   EVGA SuperNOVA 750  =>15853.00  ,   MSI B450 TOMAHAWK  =>11197.00  ,   Western Digital WD10EZEX  =>3249.00  ,   Corsair Vengeance LPX  =>12500.00  ,   MSI RX 580 ARMOR 8G OC  =>27899.00  ', 'C-PC2019022814EB', 114447.00),
(22, 'hassanoly7444@gmail.com', 'TS201902271A00', 'Asus VP228H=>1920 x 1080	21.5', '1', 8645.00),
(23, 'hassanoly7444@gmail.com', 'TS2019022805C6', 'Intel Core i5-9600K  =>27500.00  ,   NZXT H500 (Black)  =>16249.00  ,   EVGA SuperNOVA 750  =>15853.00  ,   MSI B450 TOMAHAWK  =>11299.00  ,   Western Digital WD10EZEX  =>3249.00  ,   Corsair Vengeance LPX  =>12500.00  ,   MSI RX 580 ARMOR 8G OC  =>27899.00  ', 'C-PC2019022805C6', 114549.00),
(25, 'hassanoly7444@gmail.com', 'TS20190228C264', 'AMD Threadripper 2990WX  =>173000.00  ,   NZXT H500i (Black)  =>20624.00  ,   Corsair CX550M  =>9586.00  ,   Asus Prime Z370-A  =>22100.00  ,   Seagate - Barracuda   =>5790.00  ,   G.Skill Trident Z RGB  =>15098.00  ,   Asus ROG-STRIX-RTX2080TI-O11G-GAMING  =>168699.00  ', 'C-PC20190228C264', 414897.00),
(26, 'hasan@gmail.com', 'TS2019030154C3', 'Asus VP228H=>1920 x 1080	21.5', '1', 8645.00);

-- --------------------------------------------------------

--
-- Table structure for table `component_details_cab`
--

CREATE TABLE `component_details_cab` (
  `id` int(50) NOT NULL,
  `component_name` varchar(100) NOT NULL,
  `component_details` varchar(100) NOT NULL,
  `component_price` double(10,2) NOT NULL,
  `component_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `component_details_cab`
--

INSERT INTO `component_details_cab` (`id`, `component_name`, `component_details`, `component_price`, `component_image`) VALUES
(2, 'NZXT H500 (Black)', 'ATX Mid Tower', 16849.00, '1551355151610OF6OF53L._SL1500_.jpg'),
(3, 'NZXT H500i (Black)', 'MicroATX Mini Tower	', 20624.00, '1550742271ba4eb62607c5e51ccdf3a5af422d050c.1600.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `component_details_cpu`
--

CREATE TABLE `component_details_cpu` (
  `id` int(100) NOT NULL,
  `component_name` varchar(100) NOT NULL,
  `component_details` varchar(100) NOT NULL,
  `component_price` double(10,2) NOT NULL,
  `component_image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `component_details_cpu`
--

INSERT INTO `component_details_cpu` (`id`, `component_name`, `component_details`, `component_price`, `component_image`) VALUES
(21, 'AMD Ryzen 5 2600', '3.4 GHz 6', 17250.00, '15513464354e84967ef18c9b42e543b58c836d73ef.256p.jpg'),
(24, 'Intel Core i7-8700K', '3.7 GHz	6', 44500.00, '155073454851guGHeu46L.jpg'),
(25, 'Intel Core i5-9600K', '3.7 GHz	6 Core', 27500.00, '155073529133f96aec821c5c10f4b1fd636a7d1881.256p.jpg'),
(26, 'AMD Threadripper 2990WX', '3 GHz-32-250 W', 173000.00, '1550836978aa154e8d411dace8453c045543f6c5d6.256p.jpg'),
(27, 'no', 'no', 0.00, '15513487651024px-No_image_3x4.svg.png');

-- --------------------------------------------------------

--
-- Table structure for table `component_details_dvd_drive`
--

CREATE TABLE `component_details_dvd_drive` (
  `id` int(50) NOT NULL,
  `component_name` varchar(100) NOT NULL,
  `component_details` varchar(100) NOT NULL,
  `component_price` double(10,2) NOT NULL,
  `component_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `component_details_dvd_drive`
--

INSERT INTO `component_details_dvd_drive` (`id`, `component_name`, `component_details`, `component_price`, `component_image`) VALUES
(2, 'LG GH24NSB0', 'DVD Writer 24X SATA Internal OEM', 1161.00, '1550750641index.jpg'),
(3, 'Asus Internal DVD Writer', 'DRW-24D5MT-DDR3 SDRAM', 999.00, '1550750771814w4gmM2VL._SL1500_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `component_details_graphic_card`
--

CREATE TABLE `component_details_graphic_card` (
  `id` int(50) NOT NULL,
  `component_name` varchar(100) NOT NULL,
  `component_details` varchar(100) NOT NULL,
  `component_price` double(10,2) NOT NULL,
  `component_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `component_details_graphic_card`
--

INSERT INTO `component_details_graphic_card` (`id`, `component_name`, `component_details`, `component_price`, `component_image`) VALUES
(1, 'MSI RX 580 ARMOR 8G OC', 'ARMOR OC-Radeon RX 580-8 GB', 7899.00, '1551431662d53db7190559b6287a4ff549f3bf5904.256p.jpg'),
(2, 'Asus ROG-STRIX-RTX2080TI-O11G-GAMING', 'ROG Strix-Gaming OC-GeForce RTX 2080 Ti	11 GB', 168699.00, '15507486610174f5005fe9f34decdf2d379bfe7221.256p.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `component_details_hdd`
--

CREATE TABLE `component_details_hdd` (
  `id` int(50) NOT NULL,
  `component_name` varchar(100) NOT NULL,
  `component_details` varchar(100) NOT NULL,
  `component_price` double(10,2) NOT NULL,
  `component_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `component_details_hdd`
--

INSERT INTO `component_details_hdd` (`id`, `component_name`, `component_details`, `component_price`, `component_image`) VALUES
(1, 'Western Digital WD10EZEX', 'Caviar Blue-3.5', 3289.00, '155142943451fbLQLVJFL.jpg'),
(2, 'Seagate - Barracuda ', '2 TB 3.5\" 7200RPM', 5790.00, '155074529641H888-QJdL.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `component_details_headphone`
--

CREATE TABLE `component_details_headphone` (
  `id` int(50) NOT NULL,
  `component_name` varchar(100) NOT NULL,
  `component_details` varchar(100) NOT NULL,
  `component_price` double(10,2) NOT NULL,
  `component_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `component_details_headphone`
--

INSERT INTO `component_details_headphone` (`id`, `component_name`, `component_details`, `component_price`, `component_image`) VALUES
(1, 'Corsair VOID PRO RGB (Black)', 'Circumaural-Yes(microphone)-Yes(wireless)	', 11308.00, '155081918941XXjdINWFL.jpg'),
(2, 'Logitech G933 Artemis Spectrum', 'Circumaural-Yes(microphone)-Yes(wireless)	', 24999.00, '155081928351X0+bO+XFL.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `component_details_keyboardmouse`
--

CREATE TABLE `component_details_keyboardmouse` (
  `id` int(50) NOT NULL,
  `component_name` varchar(100) NOT NULL,
  `component_details` varchar(100) NOT NULL,
  `component_price` double(10,2) NOT NULL,
  `component_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `component_details_keyboardmouse`
--

INSERT INTO `component_details_keyboardmouse` (`id`, `component_name`, `component_details`, `component_price`, `component_image`) VALUES
(1, 'GAMDIAS ARES Gaming', 'Membrane Keyboard and 4000DPI Mouse', 2364.00, '155081800971gFZgXCa4L._SL1500_.jpg'),
(2, 'HP C2500 Wired', 'C2500 Laptop Keyboard  USB 2.0, USB 3.0', 1200.50, '1550818221hp-c2500-original-imae9fefcbzuyknn.jpeg'),
(3, 'Dell USB Wired Keyboard & Mouse ', 'item model number-KB212-B', 869.00, '15508183544123Fq71q4L.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `component_details_mboard`
--

CREATE TABLE `component_details_mboard` (
  `id` int(50) NOT NULL,
  `component_name` varchar(100) NOT NULL,
  `component_details` varchar(100) NOT NULL,
  `component_price` double(10,2) NOT NULL,
  `component_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `component_details_mboard`
--

INSERT INTO `component_details_mboard` (`id`, `component_name`, `component_details`, `component_price`, `component_image`) VALUES
(1, 'MSI B450 TOMAHAWK', 'AM4-ATX  4(ram)	64 GB(max)', 11299.00, '15513486930be056e0c70a9a7305849a45ca1022cb.256p.jpg'),
(2, 'Asus Prime Z370-A', 'LGA1151 -ATX  4(RAM slot)	64 GB(max)', 22100.00, '15507400749a240bb5d6455883bbf45e134a11faae.1600.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `component_details_memory`
--

CREATE TABLE `component_details_memory` (
  `id` int(50) NOT NULL,
  `component_name` varchar(100) NOT NULL,
  `component_details` varchar(100) NOT NULL,
  `component_price` double(10,2) NOT NULL,
  `component_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `component_details_memory`
--

INSERT INTO `component_details_memory` (`id`, `component_name`, `component_details`, `component_price`, `component_image`) VALUES
(1, 'Corsair Vengeance LPX', 'DDR4-3000-2x8 GB-16 GB	', 11500.00, '155143056341SYlOnZ4qL.jpg'),
(2, 'G.Skill Trident Z RGB', 'DDR4-3200-2x8 GB-16 GB', 15098.00, '155074709641SYlOnZ4qL.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `component_details_monitor`
--

CREATE TABLE `component_details_monitor` (
  `id` int(50) NOT NULL,
  `component_name` varchar(100) NOT NULL,
  `component_details` varchar(100) NOT NULL,
  `component_price` double(10,2) NOT NULL,
  `component_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `component_details_monitor`
--

INSERT INTO `component_details_monitor` (`id`, `component_name`, `component_details`, `component_price`, `component_image`) VALUES
(1, 'Asus VP228H', '1920 x 1080	21.5\"', 8645.00, '1550816474411tqvd6h9L.jpg'),
(2, 'Acer KG221Q', '1920 x 1080	21.5\"	', 8948.00, '15508170368a8a5ec41b7f36877f3205c59c66a4f8.256p.jpg'),
(3, 'Asus ROG SWIFT PG278QR', '2560 x 1440	27\"	', 115999.00, '15508171764105SXBFTWL.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `component_details_smps`
--

CREATE TABLE `component_details_smps` (
  `id` int(50) NOT NULL,
  `component_name` varchar(100) NOT NULL,
  `component_details` varchar(100) NOT NULL,
  `component_price` double(10,2) NOT NULL,
  `component_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `component_details_smps`
--

INSERT INTO `component_details_smps` (`id`, `component_name`, `component_details`, `component_price`, `component_image`) VALUES
(1, 'EVGA SuperNOVA 750', 'SuperNOVA G3-ATX-80+ Gold-750 W', 15835.00, '15513556342a2172d1f17661103de901f43d831187.1600.jpg'),
(2, 'Corsair CX550M', 'CXM-ATX-80+ Bronze-550 W', 9586.00, '155074316351RxdsALapL.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `component_details_sound_card`
--

CREATE TABLE `component_details_sound_card` (
  `id` int(50) NOT NULL,
  `component_name` varchar(100) NOT NULL,
  `component_details` varchar(100) NOT NULL,
  `component_price` double(10,2) NOT NULL,
  `component_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `component_details_sound_card`
--

INSERT INTO `component_details_sound_card` (`id`, `component_name`, `component_details`, `component_price`, `component_image`) VALUES
(1, 'Asus Essence STX II', 'ASUS AV100', 21299.00, '15507497836ab2119d580c39340adadd1441ede095.256p.jpg'),
(2, 'HT Omega eClaro', 'C-Media CMI8788', 28270.00, '155074989751Ik9nwG5xL.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `component_details_speaker`
--

CREATE TABLE `component_details_speaker` (
  `id` int(50) NOT NULL,
  `component_name` varchar(100) NOT NULL,
  `component_details` varchar(100) NOT NULL,
  `component_price` double(10,2) NOT NULL,
  `component_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `component_details_speaker`
--

INSERT INTO `component_details_speaker` (`id`, `component_name`, `component_details`, `component_price`, `component_image`) VALUES
(1, 'Logitech Z906', '5.1(Configuration)	500 W	35 Hz - 20 kHz	', 97247.32, '155082029241aB2hM0meL.jpg'),
(2, 'Creative Labs Sound BlasterX Katana', '2.1(Configuration)	500 W	35 Hz - 20 kHz	', 32000.00, '1550820375df873d7044f4807a1eaa411b1111c02d.1600.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `component_details_ssd`
--

CREATE TABLE `component_details_ssd` (
  `id` int(50) NOT NULL,
  `component_name` varchar(100) NOT NULL,
  `component_details` varchar(100) NOT NULL,
  `component_price` double(10,2) NOT NULL,
  `component_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `component_details_ssd`
--

INSERT INTO `component_details_ssd` (`id`, `component_name`, `component_details`, `component_price`, `component_image`) VALUES
(1, 'Seagate 250 GB Barracuda', 'SATA Internal Solid State Drive', 4193.00, '155075317881ba0kFYusL._SL1500_.jpg'),
(2, 'Western Digital WDS240G2G0A 240GB SATA ', '6GB/s 2.5 7mm Internal SSD', 2993.00, '155075336261z5rHB5-pL._SL1000_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `component_details_wireless_adapter`
--

CREATE TABLE `component_details_wireless_adapter` (
  `id` int(50) NOT NULL,
  `component_name` varchar(100) NOT NULL,
  `component_details` varchar(100) NOT NULL,
  `component_price` double(10,2) NOT NULL,
  `component_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `component_details_wireless_adapter`
--

INSERT INTO `component_details_wireless_adapter` (`id`, `component_name`, `component_details`, `component_price`, `component_image`) VALUES
(1, 'Gigabyte GC-WB867D-I', 'PCI-Express x1-802.11a/b/g/n/ac', 4900.00, '155075179741u5ApTrH+L.jpg'),
(2, 'TP-Link Archer T6E AC1300', 'PCI-Express x1-802.11a/b/g/n/ac', 3299.00, '1550752055a1175f03aa1364f265d58329836e436d.256p.jpg');

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
(5, 'hasan', '6290548121@gmail.com', '9563585351', 'kkk', 'my', 'hhhh');

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
(67, '2019-03-01 00:00:00');

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
(147, '26', '3', '2', '2', 2, 2, 2, 0, 'hassanoly7444@gmail.com');

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
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `phone_number`, `email_id`, `address`) VALUES
(1, 'hasan oly', '1022141126', '9563585351', 'hassanoly7444@gmail.com', 'kaikhali, kolkata 700052'),
(2, 'hasan oly', '9563585351', '9563585351', 'hasan@gmail.com', 'malda,westbengal 732126'),
(4, 'hasan oly47', '8e815946973e206c10556853043d3f59', '9563585351', 'hassanoly4447@gmail.com', 'kolkata'),
(5, 'Amit Roy', '1022141126', '9875321789', 'amit@tilottama.online', 'garia,kolkata,700094'),
(11, 'kabir suman', '9563585351', '9701525362', 'kabir@gmail.com', 'malda,kaliachak,wb-732212'),
(12, 'Tilottama Admin', '9701525362', '9701525362', 'tilottama@admin.com', 'patuli township,garia, kolkata 94'),
(13, 'hasan', '105856958', '9563585351', 'hassan7444@gmail.com', 'kolkata'),
(15, 'hasan', '9876543210', '9563585351', 'hassan74484@gmail.com', 'kolkata');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `login_id`
--
ALTER TABLE `login_id`
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_product_pc`
--
ALTER TABLE `add_product_pc`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin_details`
--
ALTER TABLE `admin_details`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart_item`
--
ALTER TABLE `cart_item`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `component_details_cab`
--
ALTER TABLE `component_details_cab`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `component_details_cpu`
--
ALTER TABLE `component_details_cpu`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `component_details_dvd_drive`
--
ALTER TABLE `component_details_dvd_drive`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `component_details_graphic_card`
--
ALTER TABLE `component_details_graphic_card`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `component_details_hdd`
--
ALTER TABLE `component_details_hdd`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `component_details_headphone`
--
ALTER TABLE `component_details_headphone`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `component_details_keyboardmouse`
--
ALTER TABLE `component_details_keyboardmouse`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `component_details_mboard`
--
ALTER TABLE `component_details_mboard`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `component_details_memory`
--
ALTER TABLE `component_details_memory`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `component_details_monitor`
--
ALTER TABLE `component_details_monitor`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `component_details_smps`
--
ALTER TABLE `component_details_smps`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `component_details_sound_card`
--
ALTER TABLE `component_details_sound_card`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `component_details_speaker`
--
ALTER TABLE `component_details_speaker`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `component_details_ssd`
--
ALTER TABLE `component_details_ssd`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `component_details_wireless_adapter`
--
ALTER TABLE `component_details_wireless_adapter`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `component_master`
--
ALTER TABLE `component_master`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login_id`
--
ALTER TABLE `login_id`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `price_list`
--
ALTER TABLE `price_list`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT for table `product_order`
--
ALTER TABLE `product_order`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `save_product`
--
ALTER TABLE `save_product`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;