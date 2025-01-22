-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2019 at 05:53 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_lookbeforeyoubuy`
--

-- --------------------------------------------------------

--
-- Table structure for table `phones_details`
--

CREATE TABLE `phones_details` (
  `phone_id` varchar(20) NOT NULL,
  `company_name` varchar(20) NOT NULL,
  `model_name` varchar(100) NOT NULL,
  `price` int(9) NOT NULL,
  `rating` int(3) NOT NULL,
  `release_date` date NOT NULL,
  `dual_sim` int(1) NOT NULL,
  `hybrid_sim` int(1) NOT NULL,
  `dimensions` varchar(30) NOT NULL,
  `weight` int(5) NOT NULL,
  `display_type` varchar(50) NOT NULL,
  `display_size` varchar(5) NOT NULL,
  `display_pixel` varchar(40) NOT NULL,
  `aspect_ratio` varchar(20) NOT NULL,
  `ram` int(3) NOT NULL,
  `internal_storage` int(6) NOT NULL,
  `card_slot` varchar(50) NOT NULL,
  `gprs` int(1) NOT NULL,
  `is2g` int(1) NOT NULL,
  `is3g` int(1) NOT NULL,
  `is4g` int(1) NOT NULL,
  `volte` int(1) NOT NULL,
  `wifi` int(1) NOT NULL,
  `bluetooth` int(1) NOT NULL,
  `ir` int(1) NOT NULL,
  `fingerprint` int(1) NOT NULL,
  `sensors` varchar(100) NOT NULL,
  `has35mm` int(1) NOT NULL,
  `front_camera` int(3) NOT NULL,
  `back_camera` int(3) NOT NULL,
  `os` varchar(50) NOT NULL,
  `cpu` varchar(100) NOT NULL,
  `core_details` varchar(200) NOT NULL,
  `gpu` varchar(50) NOT NULL,
  `java` int(1) NOT NULL,
  `battery_removable` int(1) NOT NULL,
  `battery_size` int(6) NOT NULL,
  `fast_charging` int(1) NOT NULL,
  `front_flash` int(1) NOT NULL,
  `back_flash` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phones_details`
--

INSERT INTO `phones_details` (`phone_id`, `company_name`, `model_name`, `price`, `rating`, `release_date`, `dual_sim`, `hybrid_sim`, `dimensions`, `weight`, `display_type`, `display_size`, `display_pixel`, `aspect_ratio`, `ram`, `internal_storage`, `card_slot`, `gprs`, `is2g`, `is3g`, `is4g`, `volte`, `wifi`, `bluetooth`, `ir`, `fingerprint`, `sensors`, `has35mm`, `front_camera`, `back_camera`, `os`, `cpu`, `core_details`, `gpu`, `java`, `battery_removable`, `battery_size`, `fast_charging`, `front_flash`, `back_flash`) VALUES
('MINOTE4', 'Xiaomi', 'Redmi Note 4', 9970, 78, '2017-01-01', 1, 1, '151 x 76 x 8.5', 165, 'Color IPS screen (16M colors)', '5.5', '1080 x 1920', '16:9', 4, 64, '2 with hybrid', 1, 1, 1, 1, 1, 1, 1, 1, 1, 'gyro', 1, 45, 45, 'gingerbread', 'octa', 'snapdrag', 'nvideo', 1, 1, 4100, 0, 1, 1),
('MINOTE7', 'Xiaomi', 'Redmi Note 7 (3GB RAM + 32GB)', 10649, 82, '2019-02-01', 1, 0, '159.2 x 75.2 x 8.1', 186, 'Color IPS LCD screen (16M)', '6.3', '2340 x 1080', '19.5:9', 3, 32, 'Yes, (Hybrid Slot), upto 256 GB', 1, 1, 1, 1, 1, 1, 1, 1, 1, 'Accelerometer, Gyroscope, Compass', 1, 13, 12, 'Android, v9.0', '2.2 GHz, Octa Core Processor', 'Qualcomm Snapdragon 660', 'Adreno 512', 0, 1, 4000, 1, 0, 1),
('RealMe3', 'RealMe', 'Realme 3 Pro', 16990, 74, '2019-01-02', 1, 0, '120.3 X 12.3 X 23.4', 405, 'Color IPS LCD screen (16M)', '6.3', '1080 x 2340', '19.5:9', 6, 64, '0', 1, 1, 1, 1, 1, 1, 1, 1, 1, 'Light sensor, Proximity sensor, Accelerometer, Compass, Gyroscope', 1, 48, 5, 'Android, v9.0 (Pie)', '2.2 GHz, Octa Core Processor', '2.2 GHz, Dual core, Kryo 360 + 1.7 GHz, Hexa Core, Kryo 360', 'Adreno 616', 1, 0, 4000, 0, 0, 1),
('SAMGALA50', 'Samsung', 'Samsung Galaxy A50', 19990, 87, '2019-02-01', 1, 1, '158.5 x 74.5 x 7.7', 450, 'Color Super AMOLED screen (16M)', '6.4', '1080 x 2340', '19.5:9', 4, 64, 'Yes, upto 512 GB', 1, 1, 1, 1, 1, 1, 1, 0, 1, 'Accelerometer, Gyro, Proximity, Compass', 1, 12, 25, 'Android, 9.0 (Pie)', '2.3 GHz, Octa Core Processor', '4x2.3 GHz Cortex-A73 & 4x1.7 GHz Cortex-A53', 'Mali-G72 MP3', 1, 0, 4000, 1, 0, 1),
('ssgfhgas', 'jsg', 'bfvjsg', 100, 100, '2001-04-15', 0, 1, ' fg', 45, 'msf', 'njwgf', 'hdfj', 'dmfg', 16, 256, '4', 1, 1, 0, 0, 1, 1, 1, 1, 1, 'saabfsg', 0, 12, 15, 'ocyas', 'mgh', 'qdngshq', 'nvideo', 1, 1, 4500, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `phones_image`
--

CREATE TABLE `phones_image` (
  `phone_id` varchar(20) NOT NULL,
  `image_url` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_email` varchar(50) NOT NULL,
  `u_password` varchar(15) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `u_contact` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_email`, `u_password`, `u_name`, `u_contact`) VALUES
('dummy@gmail.com', 'vivek', 'Dummy', 2147483647),
('vivek@adj', 'abc', 'fsjkhg', 123456789),
('vivek@google.com', 'vivek123', 'Vivek Shah', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `phones_details`
--
ALTER TABLE `phones_details`
  ADD PRIMARY KEY (`phone_id`),
  ADD UNIQUE KEY `model_name` (`model_name`);

--
-- Indexes for table `phones_image`
--
ALTER TABLE `phones_image`
  ADD PRIMARY KEY (`phone_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `phones_image`
--
ALTER TABLE `phones_image`
  ADD CONSTRAINT `ForeignKeyVJ` FOREIGN KEY (`phone_id`) REFERENCES `phones_details` (`phone_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
