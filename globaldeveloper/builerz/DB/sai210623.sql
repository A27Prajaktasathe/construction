-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2023 at 07:48 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sai`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_accounts`
--

CREATE TABLE `admin_accounts` (
  `id` int(25) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `series_id` varchar(60) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `expires` datetime DEFAULT NULL,
  `admin_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin_accounts`
--

INSERT INTO `admin_accounts` (`id`, `user_name`, `password`, `series_id`, `remember_token`, `expires`, `admin_type`) VALUES
(4, 'superadmin', '$2y$10$eo7.w0Ttuy8mOBMvDlGqDeewQERkXu//7qO3jXp5NC76LwfAZpNrO', 'rvuWJHMd5LTxLC2J', '$2y$10$LDUi4w/UAM2PgfMoKkLo4.igJX39G5/WQOEDHRaDy3y2KZeIxXggm', '2019-02-16 22:39:57', 'super'),
(7, 'anand', '$2y$10$OrQFRZdSUP3X2kvGZrg.zeplQkxcJAq1s6atRehyCpbEvOVPu8KPe', NULL, NULL, NULL, 'admin'),
(8, 'admin', '$2y$10$RnDwpen5c8.gtZLaxHEHDOKWY77t/20A4RRkWBsjlPuu7Wmy0HyBu', 'rbwie3Ppuvq7rgjb', '$2y$10$gIPpJtQ3SNXDjns2dEzsi./p6Kp/0EsDD8RI.Y34R8Fo3/9tgIYBS', '2023-04-02 10:38:25', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(50) NOT NULL,
  `photo` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `photo`) VALUES
(1, 0x67616c6c6572792d312e706e67),
(2, 0x67616c6c6572792d322e706e67),
(3, 0x67616c6c6572792d332e706e67),
(4, 0x67616c6c6572792d342e706e67),
(5, 0x67616c6c6572792d352e706e67),
(6, 0x67616c6c6572792d362e706e67),
(7, 0x67616c6c6572792d372e706e67),
(8, 0x67616c6c6572792d382e706e67),
(9, 0x67616c6c6572792d392e706e67),
(10, 0x67616c6c6572792d31302e706e67),
(11, 0x67616c6c6572792d31312e706e67),
(12, 0x67616c6c6572792d31322e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(255) NOT NULL,
  `Admin_Name` varchar(100) NOT NULL,
  `Admin_Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `Admin_Name`, `Admin_Password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `popup`
--

CREATE TABLE `popup` (
  `id` int(11) NOT NULL,
  `photo` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `saiproducts`
--

CREATE TABLE `saiproducts` (
  `id` int(50) NOT NULL,
  `photo` blob NOT NULL,
  `title` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `gemtag` bit(1) DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `saiproducts`
--

INSERT INTO `saiproducts` (`id`, `photo`, `title`, `product`, `category`, `description`, `gemtag`) VALUES
(19, 0x70726f64756374312e6a706567, '', 'Two Wheel Ajinkya Trailer - 5 Ton', '', '&lt;ol&gt;\r\n&lt;li&gt;Size: W=73&quot; x L=120&quot; x H=18.5&quot;&lt;/li&gt;\r\n&lt;li&gt;Main chass: 200X75 [VSP].&lt;/li&gt;\r\n&lt;li&gt;Hydrolic cylinder: 5Ton, 10 Ton, 16 Ton capicity.&lt;/li&gt;\r\n&lt;li&gt;Tyre Size: 9.00&amp;times;16 J.K. Sona 18ply.&lt;/li&gt;\r\n&lt;li&gt;Approved carrying capacity: 5 Ton.&lt;/li&gt;\r\n&lt;li&gt;Axle : 77 mm Thickness, 68&quot; Length, Bearing size 32211X32213, Steel Hub Heavy Duty.&lt;/li&gt;\r\n&lt;li&gt;Tooing Hook: 50mm.&lt;/li&gt;\r\n&lt;li&gt;Tractor HP Recommended above - 45 HP.&lt;/li&gt;\r\n&lt;/ol&gt;', b'1'),
(20, 0x70726f64756374322e706e67, '', 'Two Wheel Ajinkya Trailer - 2 Ton', '', '&lt;ol&gt;\r\n&lt;li&gt;Size: W= 60&quot; x L= 96&quot; x H= 17.5&quot;&lt;/li&gt;\r\n&lt;li&gt;Main chass: 125X65 [VSP].&lt;/li&gt;\r\n&lt;li&gt;Hydrolic cylinder : 3 Ton capacity.&lt;/li&gt;\r\n&lt;li&gt;Tyre size: 7.50X16 J.K. 16 ply.&lt;/li&gt;\r\n&lt;li&gt;Approved carrying capacity: 2 to 3 Tons.&lt;/li&gt;\r\n&lt;li&gt;Axle : 65mm Thickness, 56&quot; Length, Bearing size 30209X32211, Steel Hub Heavy Duty.&lt;/li&gt;\r\n&lt;li&gt;Tooing Hook: 38-40 mm.&lt;/li&gt;\r\n&lt;li&gt;Tractor HP Reported: 20 to 35 HP.&lt;/li&gt;\r\n&lt;/ol&gt;', b'1'),
(21, 0x70726f64756374342e706e67, '', 'Two Wheel Ajinkya Trailer - 1.5 Ton', '', '&lt;ol&gt;\r\n&lt;li&gt;Size: W=54&quot; x L=84&quot; x H=15.5&quot;&lt;/li&gt;\r\n&lt;li&gt;Main chass: 100x50 [VSP].&lt;/li&gt;\r\n&lt;li&gt;Hydrolic cylinder : 2 Ton to 2.5 Ton.&lt;/li&gt;\r\n&lt;li&gt;Tyre Size : 6.00X16 J.K.sona.&lt;/li&gt;\r\n&lt;li&gt;Approved carrying capacity: 1.5 Ton.&lt;/li&gt;\r\n&lt;li&gt;Axle : 65mm Thickness, 42&quot; Length, Bearing Size 30209x32211, Steel Hub Heavy Duty.&lt;/li&gt;\r\n&lt;li&gt;Tooing Hook: 38-40 on m.&lt;/li&gt;\r\n&lt;li&gt;Tractor HP Recommended: Below 20 HP.&lt;/li&gt;\r\n&lt;/ol&gt;', b'0'),
(22, 0x34352e6a706567, '', ' Four wheel Ajinkya Trailer - open Body', '', '&lt;ol&gt;\r\n&lt;li&gt;Size: W=86&quot; x L=144&quot; x H=70&quot;&lt;/li&gt;\r\n&lt;li&gt;Main chass: 150x75 [VSP].&lt;/li&gt;\r\n&lt;li&gt;Tyre size : 9.00-20 JK Rib star / Lug star.&lt;/li&gt;\r\n&lt;li&gt;Approved carrying capacity: 9 Ton.&lt;/li&gt;\r\n&lt;li&gt;Axle: 90mm. Thickness, 74&quot; Length Bearing 32213X32216, Steel Hub Heavy Duty.&amp;nbsp;&lt;/li&gt;\r\n&lt;li&gt;Tooing Hook: 50mm.&lt;/li&gt;\r\n&lt;li&gt;Specially Recommended for Sugarcane Transport.&lt;/li&gt;\r\n&lt;li&gt;Leaf spring : 45&quot; Length, Helper Heavy, 1, 2, 3, 4 Patla Heavy Duty.&lt;/li&gt;\r\n&lt;/ol&gt;', b'0'),
(23, 0x736c69646572312e6a706567, '', ' Four Wheel Ajinkya Trailer with Doors', '', '&lt;ol&gt;\r\n&lt;li&gt;Size: W=86&quot; x L=144&quot; x H=70&quot;&lt;/li&gt;\r\n&lt;li&gt;Main chass: 150x75 [VSP].&lt;/li&gt;\r\n&lt;li&gt;Tyre Size : 9.00-20 JK Rib star | Lug Star.&lt;/li&gt;\r\n&lt;li&gt;Approved carrying capacity: 8 Ton.&lt;/li&gt;\r\n&lt;li&gt;Axle: 90 mm Thickness, 74&quot; Length, Bearing 32213x32216, Steel Hub Heavy Duty.&amp;nbsp;&lt;/li&gt;\r\n&lt;li&gt;Tooing Hook : 50mm.&lt;/li&gt;\r\n&lt;li&gt;Specially Recomended for Sugarcane Transport.&lt;/li&gt;\r\n&lt;li&gt;Leaf spring : 45&quot; Length, Helper Heavy, 1,2,3,4 Patla Heavy Duty.&lt;/li&gt;\r\n&lt;/ol&gt;', b'0'),
(24, 0x736c69646572332e6a706567, '', ' Front End Dozer Land Levelar', '', '&lt;ol&gt;\r\n&lt;li&gt;Size : W= 27&quot; x L= 90&quot; Plate Used 5mm.&lt;/li&gt;\r\n&lt;li&gt;Side Arm: 5X2.5 channel [VSP].&lt;/li&gt;\r\n&lt;li&gt;Chass support Arm: 4x2 channel Box [VSP].&lt;/li&gt;\r\n&lt;li&gt;Body plate : 12 mm Thickness.&lt;/li&gt;\r\n&lt;li&gt;Hydrolic cylinder : Heavy Duty.&lt;/li&gt;\r\n&lt;li&gt;Control Valve: Volvooil.&lt;/li&gt;\r\n&lt;li&gt;All Material used is of very high Grade.&lt;/li&gt;\r\n&lt;/ol&gt;', b'0'),
(25, 0x736c696465626772656d6f76652e706e67, '', 'Two wheel Ajinkya water Tank', '', '&lt;ol&gt;\r\n&lt;li&gt;Size of Tank : L=96&quot; x W=78&quot; x H=48&quot;&lt;/li&gt;\r\n&lt;li&gt;Plate Used: 4mm, 3.15mm, 2.75mm TATA.&lt;/li&gt;\r\n&lt;li&gt;Life of Tank : 8 to 10 yrs, 5 to 6 yrs , 1.5 to 2 yrs.&lt;/li&gt;\r\n&lt;li&gt;Main chass : 150X75 VSP.&lt;/li&gt;\r\n&lt;li&gt;Tyre size : 9.00X16 JK sona 18ply.&lt;/li&gt;\r\n&lt;li&gt;Axle : 77 mm Thickness, 68&quot; length, Bearing size - 32211X 32213 ,steel Hub Heavy Duty.&lt;/li&gt;\r\n&lt;li&gt;Tooing Hook : 50 mm.&lt;/li&gt;\r\n&lt;/ol&gt;', b'0'),
(26, 0x70726f64756374362e706e67, '', 'Stubal Shaver', '', '&lt;ol&gt;\r\n&lt;li&gt;Gear Box : 340 RPM.&lt;/li&gt;\r\n&lt;li&gt;Number of Blades - 8PCS.&lt;/li&gt;\r\n&lt;li&gt;Fertilizer Box stainless steel.&lt;/li&gt;\r\n&lt;li&gt;Heavy Duty Frame powder coated.&lt;/li&gt;\r\n&lt;li&gt;Increases yeld up to 10% to 15%.&lt;/li&gt;\r\n&lt;/ol&gt;', b'1'),
(27, 0x736c69646572322e6a706567, '', ' Rohit Krishi Planters BBF', '', '&lt;ol&gt;\r\n&lt;li&gt;Single Seed Dropping system that saves Seed quantity.&amp;nbsp;&lt;/li&gt;\r\n&lt;li&gt;Distance between seeds is maintained in proper way.&lt;/li&gt;\r\n&lt;li&gt;No problem for seeds if it rains heavy or it rains very low.&lt;/li&gt;\r\n&lt;li&gt;Having 12 to 13 years of experience of production.&lt;/li&gt;\r\n&lt;li&gt;Distance between seeds can be adjusted, as per your choice.&lt;/li&gt;\r\n&lt;li&gt;Can plant different types of seeds on same bed.&lt;/li&gt;\r\n&lt;li&gt;Easy to create bed at a time while tooing.&lt;/li&gt;\r\n&lt;/ol&gt;', b'1'),
(28, 0x70726f64756374332e6a706567, '', 'Heavy Duty cultivator', '', '&lt;ol&gt;\r\n&lt;li&gt;Main Frame : Box prepaired out of 65x65x5 Angle.&lt;/li&gt;\r\n&lt;li&gt;Support: Support used for tyres used. out of 65X65X8 Angle very Heavy Duty.&lt;/li&gt;\r\n&lt;li&gt;Tyres : Avilable in 7 Tyre &amp;amp; 9 Tyre as per demand 20mm to 25mm plate is used for Tyres.&lt;/li&gt;\r\n&lt;li&gt;Cutting Edge: High carbon steel which is used for Heavy vehicles, Carrying Heavy Load.&lt;/li&gt;\r\n&lt;li&gt;Maintenance: 0% Maintenance.&lt;/li&gt;\r\n&lt;/ol&gt;', b'0'),
(29, 0x70726f64756374372e6a706567, '', ' Round Dibbler ', '', '&lt;ol&gt;\r\n&lt;li&gt;Very easy to use, light weight, cost efficient.&lt;/li&gt;\r\n&lt;li&gt;Very easy to maintain seed to seed distance &amp;amp; can inject the seeds at same height in farm so that all seeds0 get germinate at the same time.&lt;/li&gt;\r\n&lt;li&gt;Save 60% to 70% seeds as compared to traditional farming.&lt;/li&gt;\r\n&lt;li&gt;Can change and distance of teeths from 5 to 12.&lt;/li&gt;\r\n&lt;li&gt;Can sow all the seeds with same machine.&lt;/li&gt;\r\n&lt;/ol&gt;', b'1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_accounts`
--
ALTER TABLE `admin_accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `popup`
--
ALTER TABLE `popup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saiproducts`
--
ALTER TABLE `saiproducts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_accounts`
--
ALTER TABLE `admin_accounts`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `popup`
--
ALTER TABLE `popup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `saiproducts`
--
ALTER TABLE `saiproducts`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
