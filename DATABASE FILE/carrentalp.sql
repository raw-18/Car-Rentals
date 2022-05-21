-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2022 at 04:50 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carrentalp`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `car_id` int(20) NOT NULL,
  `car_name` varchar(50) NOT NULL,
  `car_nameplate` varchar(50) NOT NULL,
  `car_img` varchar(50) DEFAULT 'NA',
  `ac_price` float NOT NULL,
  `non_ac_price` float NOT NULL,
  `ac_price_per_day` float NOT NULL,
  `non_ac_price_per_day` float NOT NULL,
  `car_availability` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_id`, `car_name`, `car_nameplate`, `car_img`, `ac_price`, `non_ac_price`, `ac_price_per_day`, `non_ac_price_per_day`, `car_availability`) VALUES
(16, 'Honda Civic', 'MH09HV3234', 'assets/img/cars/honda civic.jpg', 18, 10, 2300, 1100, 'yes'),
(21, 'Renault kwid', 'MH54DE4265', 'assets/img/cars/kwid.png', 13, 7, 1700, 900, 'yes'),
(22, 'MG Hector', 'MH43DF4564', 'assets/img/cars/mghector.jpg', 13, 7, 2000, 1300, 'yes'),
(27, 'Mahindra Xuv ', 'MH20SF4637', 'assets/img/cars/Mahindra XUV.jpg', 18, 9, 1649, 680, 'yes'),
(28, 'Tata Nexon EV', 'MH89BX3859', 'assets/img/cars/nexon.jpg', 14, 8, 3765, 1544, 'yes'),
(29, 'Honda Creta', 'MH71RW6284', 'assets/img/cars/creta.jpg', 15, 6, 3400, 900, 'yes'),
(30, 'Swift Dzire', 'MH87NV6358', 'assets/img/cars/Swift dzire', 14, 6, 2300, 1100, 'yes'),
(32, 'XUV 700', 'MH53DC3882', 'assets/img/cars/xuv 700', 18, 9, 2400, 1300, 'yes'),
(36, 'Hyundai-i10', 'MH43DF4590', 'assets/img/cars/hyundai-i10.png', 18, 8, 2000, 850, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `clientcars`
--

CREATE TABLE `clientcars` (
  `car_id` int(20) NOT NULL,
  `client_username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clientcars`
--

INSERT INTO `clientcars` (`car_id`, `client_username`) VALUES
(1, 'harry'),
(3, 'harry'),
(7, 'harry'),
(8, 'harry'),
(9, 'harry'),
(11, 'harry'),
(12, 'harry'),
(15, 'harry'),
(16, 'harry'),
(17, 'harry'),
(18, 'harry'),
(19, 'harry'),
(20, 'harry'),
(21, 'harry'),
(22, 'harry'),
(27, 'harry'),
(28, 'harry'),
(29, 'harry'),
(30, 'harry'),
(32, 'harry'),
(33, 'harry'),
(34, 'harry'),
(35, 'harry'),
(36, 'harry'),
(2, 'jenny'),
(4, 'jenny'),
(6, 'jenny'),
(10, 'jenny'),
(13, 'jenny'),
(14, 'jenny');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_username` varchar(50) NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `client_phone` varchar(15) NOT NULL,
  `client_email` varchar(25) NOT NULL,
  `client_address` varchar(50) CHARACTER SET utf8 COLLATE utf8_estonian_ci NOT NULL,
  `client_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_username`, `client_name`, `client_phone`, `client_email`, `client_address`, `client_password`) VALUES
('Ajju', 'Ajinkya Nikam', '123456789', 'ajju123@gmailcom', 'station', 'Ajinkya123'),
('harry', 'Harry Den', '9876543210', 'harryden487@gmail.com', '2477  Harley Vincent Drive', 'password'),
('lucas', 'Rohit', '65584e3478', 'udgau@gmail.com', 'e23236', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(20) NOT NULL,
  `Name` varchar(20) CHARACTER SET utf8 NOT NULL,
  `Email` varchar(20) CHARACTER SET utf8 NOT NULL,
  `Message` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `Name`, `Email`, `Message`) VALUES
(3, 'rohit', 'rohitjsawant15@gmail', 'v vn nm'),
(4, 'Nitin', 'rohit12@gmail.com', 'gjhjjn '),
(5, 'rohit', 'rohitjsawant15@gmail', 'fcfgc n '),
(6, 'rohit', 'rohitjsawant15@gmail', 'fcfgc n '),
(7, 'rohit', 'rohitjsawant15@gmail', 'tfgvghh');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_username` varchar(50) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_phone` varchar(15) NOT NULL,
  `customer_email` varchar(25) NOT NULL,
  `customer_address` varchar(50) NOT NULL,
  `customer_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_username`, `customer_name`, `customer_phone`, `customer_email`, `customer_address`, `customer_password`) VALUES
('ethan', 'Ethan Hawk', '69741111110', 'thisisethan@gmail.com', '4554  Rowes Lane', 'password'),
('james', 'James Washington', '0258786969', 'james@gmail.com', '2316  Mayo Street', 'password'),
('lucas', 'Lucas Rhoades', '7003658500', 'lucas@gmail.com', '2737  Fowler Avenue', 'password'),
('raw', 'Rohit', '2545875645', 'raw12@gmail.com', 'Diva', 'Pass@123'),
('Swapnil', 'Swapnil', '54345324', 'swapnil123@gmail.com', 'Diva', 'swwa123');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `driver_id` int(20) NOT NULL,
  `driver_name` varchar(50) NOT NULL,
  `dl_number` varchar(50) NOT NULL,
  `last_login` datetime NOT NULL,
  `driver_phone` varchar(15) NOT NULL,
  `driver_address` varchar(50) NOT NULL,
  `driver_gender` varchar(10) NOT NULL,
  `client_username` varchar(50) NOT NULL,
  `driver_password` varchar(20) NOT NULL,
  `driver_availability` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`driver_id`, `driver_name`, `dl_number`, `last_login`, `driver_phone`, `driver_address`, `driver_gender`, `client_username`, `driver_password`, `driver_availability`) VALUES
(15, 'Mayur', '03191563155	', '2022-04-09 20:12:44', '9147523684	', 'Bhandup', 'Male', 'harry', 'Pass@123', 'yes'),
(25, 'Neel', '44919316342', '2022-03-16 08:47:20', '9547863157', 'kalyan', 'Male', 'harry', 'Pass@123', 'yes'),
(26, 'Ajinkya', '44919316354', '2022-03-10 20:54:04', '7541023695', 'Dombivali', 'Male', 'harry', 'Pass@123', 'yes'),
(27, 'Nilesh', '44919316676', '2022-03-16 19:54:09', '9147523682', 'Diva', 'Male', 'harry', 'Pass@123', 'yes'),
(29, 'John', '44919316748', '0000-00-00 00:00:00', '9547863157', 'Thane', 'Male', 'harry', 'Pass@123', 'yes'),
(30, 'Ramesh', '44919316739', '0000-00-00 00:00:00', '9547863157', 'CSMt', 'Male', 'harry', 'Pass@123', 'yes'),
(31, 'Sumedh', '44919316745', '0000-00-00 00:00:00', '9547863157', 'Thakurli', 'Male', 'harry', 'Pass@123', 'yes'),
(33, 'Sumedh', '44919316746', '2022-03-16 08:51:17', '9547863157', 'Thane', 'Male', 'harry', 'Pass@123', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(20) NOT NULL,
  `e_mail` varchar(30) NOT NULL,
  `message` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `e_mail`, `message`) VALUES
('Nikhil', 'nikhil@gmail.com', 'Hope this works.');

-- --------------------------------------------------------

--
-- Table structure for table `pickup`
--

CREATE TABLE `pickup` (
  `id` int(20) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `phoneno` varchar(50) CHARACTER SET utf8 NOT NULL,
  `carname` varchar(50) CHARACTER SET utf8 NOT NULL,
  `location` varchar(50) CHARACTER SET utf8 NOT NULL,
  `date` date NOT NULL,
  `time` time(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pickup`
--

INSERT INTO `pickup` (`id`, `name`, `phoneno`, `carname`, `location`, `date`, `time`) VALUES
(11, 'Neel', '6786789090', 'swift', 'Ganesh Nagar', '2022-02-10', '09:48:00.00'),
(12, 'Nitin', '6786789090', 'MG hector', 'Ganesh Nagar', '2022-02-15', '21:00:00.00'),
(13, 'Nitin', '6786789090', 'MG hector', 'Ganesh Nagar', '2022-02-15', '21:00:00.00'),
(14, 'Nitin', '6786789090', 'MG hector', 'Ganesh Nagar', '2022-02-15', '21:00:00.00'),
(15, 'Rohit', '6786789090', 'swift', 'ganesh nagar', '2022-02-16', '10:02:00.00'),
(16, 'Rohit', '6786789090', 'swift', 'ganesh nagar', '2022-02-16', '10:02:00.00'),
(17, 'Rohit', '6786789090', 'swift', 'Ganesh Nagar', '2022-02-22', '02:00:00.00'),
(18, 'Rohit', '6786789090', 'MG hector', 'Ganesh Nagar', '2022-02-11', '01:01:00.00');

-- --------------------------------------------------------

--
-- Table structure for table `rentedcars`
--

CREATE TABLE `rentedcars` (
  `id` int(100) NOT NULL,
  `customer_username` varchar(50) NOT NULL,
  `car_id` int(20) NOT NULL,
  `driver_id` int(20) NOT NULL,
  `location` varchar(50) NOT NULL,
  `time` time NOT NULL,
  `Aadhar_Card` int(12) NOT NULL,
  `booking_date` date NOT NULL,
  `rent_start_date` date NOT NULL,
  `rent_end_date` date NOT NULL,
  `car_return_date` date DEFAULT NULL,
  `fare` double NOT NULL,
  `charge_type` varchar(25) NOT NULL DEFAULT 'days',
  `distance` double DEFAULT NULL,
  `no_of_days` int(50) DEFAULT NULL,
  `total_amount` double DEFAULT NULL,
  `return_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rentedcars`
--

INSERT INTO `rentedcars` (`id`, `customer_username`, `car_id`, `driver_id`, `location`, `time`, `Aadhar_Card`, `booking_date`, `rent_start_date`, `rent_end_date`, `car_return_date`, `fare`, `charge_type`, `distance`, `no_of_days`, `total_amount`, `return_status`) VALUES
(574681245, 'ethan', 4, 2, '', '00:00:00', 0, '2018-07-18', '2018-07-01', '2018-07-02', '2018-07-18', 11, 'km', 244, 1, 5884, 'R'),
(574681246, 'james', 6, 6, '', '00:00:00', 0, '2018-07-18', '2018-06-01', '2018-06-28', '2018-07-18', 15, 'km', 69, 27, 5035, 'R'),
(574681247, 'antonio', 3, 1, '', '00:00:00', 0, '2018-07-18', '2018-07-19', '2018-07-22', '2018-07-20', 13, 'km', 421, 3, 5473, 'R'),
(574681248, 'ethan', 1, 2, '', '00:00:00', 0, '2018-07-20', '2018-07-28', '2018-07-29', '2018-07-20', 10, 'km', 69, 1, 690, 'R'),
(574681249, 'james', 1, 2, '', '00:00:00', 0, '2018-07-23', '2018-07-24', '2018-07-25', '2018-07-23', 10, 'km', 500, 1, 5000, 'R'),
(574681250, 'lucas', 3, 2, '', '00:00:00', 0, '2018-07-23', '2018-07-23', '2018-07-24', '2018-07-23', 2600, 'days', NULL, 1, 2600, 'R'),
(574681251, 'james', 10, 1, '', '00:00:00', 0, '2018-07-23', '2018-07-25', '2018-07-30', '2018-07-23', 10, 'km', 60, 2, 600, 'R'),
(574681252, 'christine', 11, 2, '', '00:00:00', 0, '2018-07-23', '2018-07-23', '2018-07-23', '2018-07-23', 13, 'km', 200, 0, 2600, 'R'),
(574681253, 'christine', 6, 7, '', '00:00:00', 0, '2018-07-23', '2018-07-23', '2018-08-03', '2018-07-23', 2600, 'days', NULL, 11, 28600, 'R'),
(574681254, 'ethan', 12, 5, '', '00:00:00', 0, '2018-07-23', '2018-07-23', '2018-07-26', '2018-07-23', 3200, 'days', NULL, 3, 9600, 'R'),
(574681255, 'christine', 8, 5, '', '00:00:00', 0, '2018-07-23', '2018-07-23', '2018-08-08', '2018-07-23', 2400, 'days', NULL, 16, 38400, 'R'),
(574681257, 'james', 7, 4, '', '00:00:00', 0, '2018-08-11', '2018-08-13', '2018-08-17', NULL, 14, 'km', NULL, NULL, NULL, 'NR'),
(574681317, 'Swapnil', 29, 14, '', '00:00:00', 0, '2022-01-15', '2022-01-28', '2022-01-29', '2022-01-15', 6, 'km', 65, 1, 390, 'R'),
(574681378, 'lucas', 29, 15, '', '00:00:00', 0, '2022-02-06', '2022-02-07', '2022-02-08', '2022-02-06', 3400, 'days', NULL, 1, 3400, 'R'),
(574681379, 'lucas', 30, 15, '', '00:00:00', 0, '2022-02-06', '2022-02-07', '2022-02-09', '2022-02-06', 2300, 'days', NULL, 2, 4600, 'R'),
(574681380, 'lucas', 22, 15, '', '00:00:00', 0, '2022-02-06', '2022-02-07', '2022-02-08', '2022-02-06', 2000, 'days', NULL, 1, 2000, 'R'),
(574681381, 'lucas', 30, 15, '', '00:00:00', 0, '2022-02-06', '2022-02-07', '2022-02-09', '2022-02-06', 2300, 'days', NULL, 2, 4600, 'R'),
(574681382, 'lucas', 22, 15, '', '00:00:00', 0, '2022-02-06', '2022-02-07', '2022-02-09', '2022-02-06', 13, 'km', 32, 2, 416, 'R'),
(574681383, 'lucas', 29, 12, '', '00:00:00', 0, '2022-02-06', '2022-02-09', '2022-02-10', '2022-02-06', 900, 'days', NULL, 1, 900, 'R'),
(574681459, 'Swapnil', 30, 11, '', '00:00:00', 0, '2022-02-23', '2022-02-23', '2022-02-24', '2022-02-23', 2300, 'days', NULL, 1, 2300, 'R'),
(574681460, 'lucas', 21, 11, '', '00:00:00', 0, '2022-02-23', '2022-02-23', '2022-02-24', '2022-02-23', 7, 'km', 23, 1, 161, 'R'),
(574681461, 'lucas', 30, 11, '', '00:00:00', 0, '2022-02-25', '2022-02-25', '2022-02-26', '2022-02-25', 1100, 'days', NULL, 1, 1100, 'R'),
(574681465, 'lucas', 22, 15, '', '00:00:00', 0, '2022-02-25', '2022-02-25', '2022-02-26', '2022-02-25', 13, 'km', 43, 1, 559, 'R'),
(574681466, 'lucas', 29, 15, '', '00:00:00', 0, '2022-02-25', '2022-02-25', '2022-02-26', '2022-02-25', 900, 'days', NULL, 1, 900, 'R'),
(574681467, 'lucas', 30, 15, 'ganesh nagar', '00:00:00', 0, '2022-02-26', '2022-02-26', '2022-02-28', '2022-02-26', 2300, 'days', NULL, 2, 4600, 'R'),
(574681468, 'lucas', 21, 24, 'Ganesh Nagar', '21:20:00', 0, '2022-02-26', '2022-02-27', '2022-03-02', '2022-02-26', 13, 'km', 43, 3, 559, 'R'),
(574681469, 'lucas', 22, 27, 'Ganesh Nagar', '12:19:00', 0, '2022-02-27', '2022-02-27', '2022-03-01', '2022-02-27', 2000, 'days', NULL, 2, 4000, 'R'),
(574681470, 'lucas', 29, 26, 'Ganesh Nagar', '11:01:00', 0, '2022-02-27', '2022-02-28', '2022-03-02', '2022-03-02', 15, 'km', 78, 2, 1170, 'R'),
(574681471, 'lucas', 32, 31, 'Dombivali', '22:00:00', 0, '2022-03-02', '2022-03-02', '2022-03-03', '2022-03-02', 2400, 'days', NULL, 1, 2400, 'R'),
(574681472, 'lucas', 22, 27, 'Dombivali', '17:00:00', 0, '2022-03-04', '2022-03-04', '2022-03-06', '2022-03-04', 2000, 'days', NULL, 2, 4000, 'R'),
(574681473, 'lucas', 30, 31, 'ganesh nagar', '05:22:00', 0, '2022-03-05', '2022-03-07', '2022-03-08', '2022-03-05', 2300, 'days', NULL, 1, 2300, 'R'),
(574681474, 'lucas', 30, 31, 'ganesh nagar', '05:22:00', 0, '2022-03-05', '2022-03-07', '2022-03-08', '2022-03-05', 2300, 'days', NULL, 1, 2300, 'R'),
(574681475, 'lucas', 30, 31, 'ganesh nagar', '05:22:00', 0, '2022-03-05', '2022-03-07', '2022-03-08', '2022-03-05', 2300, 'days', NULL, 1, 2300, 'R'),
(574681476, 'lucas', 22, 32, 'Dombivali', '16:32:00', 2147483647, '2022-03-05', '2022-03-09', '2022-03-10', '2022-03-05', 2000, 'days', NULL, 1, 2000, 'R'),
(574681477, 'lucas', 29, 29, 'Diva', '09:17:00', 2147483647, '2022-03-10', '2022-03-10', '2022-03-11', '2022-03-15', 3400, 'days', NULL, 1, 4200, 'R'),
(574681478, 'lucas', 30, 15, 'ganesh nagar', '20:57:00', 2147483647, '2022-03-15', '2022-03-16', '2022-03-17', '2022-03-16', 2300, 'days', NULL, 1, 2300, 'R'),
(574681479, 'lucas', 16, 27, 'palava phase 2', '10:29:00', 2147483647, '2022-03-16', '2022-03-17', '2022-03-19', '2022-03-16', 18, 'km', 19, 2, 342, 'R'),
(574681480, 'lucas', 22, 15, 'Diva', '10:25:00', 2147483647, '2022-03-16', '2022-03-16', '2022-03-18', '2022-03-16', 1300, 'days', NULL, 2, 2600, 'R'),
(574681481, 'lucas', 30, 30, 'Diva,ganesh nagar', '08:26:00', 2147483647, '2022-03-16', '2022-03-16', '2022-03-17', '2022-03-16', 2300, 'days', NULL, 1, 2300, 'R'),
(574681482, 'lucas', 22, 31, 'Diva', '17:11:00', 2147483647, '2022-03-29', '2022-03-29', '2022-03-30', '2022-03-29', 2000, 'days', NULL, 1, 2000, 'R'),
(574681483, 'lucas', 27, 15, 'sd', '20:31:00', 2147483647, '2022-03-29', '2022-03-30', '2022-03-30', '2022-04-06', 1649, 'days', NULL, 0, 1400, 'R'),
(574681484, 'lucas', 28, 29, 'thane', '11:59:00', 2147483647, '2022-04-06', '2022-04-06', '2022-04-07', '2022-04-06', 3765, 'days', NULL, 1, 3765, 'R'),
(574681485, 'raw', 22, 30, 'Ganesh Nagar', '21:06:00', 2147483647, '2022-04-09', '2022-04-09', '2022-04-12', '2022-04-09', 2000, 'days', NULL, 3, 6000, 'R');

-- --------------------------------------------------------

--
-- Table structure for table `tb_data`
--

CREATE TABLE `tb_data` (
  `id` int(20) NOT NULL,
  `driver_id` varchar(20) CHARACTER SET utf8 NOT NULL,
  `time` datetime NOT NULL,
  `latitude` varchar(50) CHARACTER SET utf8 NOT NULL,
  `longitude` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_data`
--

INSERT INTO `tb_data` (`id`, `driver_id`, `time`, `latitude`, `longitude`) VALUES
(43, ' 25', '0000-00-00 00:00:00', '19.1821712', '73.0523224'),
(44, ' 30', '0000-00-00 00:00:00', '19.1840604', '73.0553937'),
(45, ' 26', '2022-03-10 20:54:08', '19.1821618', '73.0524608'),
(46, ' 25', '2022-03-15 20:02:58', '19.184059', '73.0553926'),
(48, ' 25', '2022-03-15 20:16:48', '19.184059', '73.0553926'),
(49, ' 25', '2022-03-16 07:42:57', '19.2229718', '73.108092'),
(50, ' 25', '2022-03-16 07:47:52', '19.2229718', '73.108092'),
(51, ' 25', '2022-03-16 08:33:24', '19.2230585', '73.1084597'),
(52, ' 25', '2022-03-16 08:35:06', '19.1135744', '72.876032'),
(57, ' 33', '2022-03-16 08:52:15', '19.2229878', '73.1081'),
(58, ' 27', '2022-03-16 19:54:14', '19.1821712', '73.0523224');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`car_id`),
  ADD UNIQUE KEY `car_nameplate` (`car_nameplate`);

--
-- Indexes for table `clientcars`
--
ALTER TABLE `clientcars`
  ADD PRIMARY KEY (`car_id`),
  ADD KEY `client_username` (`client_username`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_username`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_username`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`driver_id`),
  ADD UNIQUE KEY `dl_number` (`dl_number`),
  ADD KEY `client_username` (`client_username`);

--
-- Indexes for table `pickup`
--
ALTER TABLE `pickup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rentedcars`
--
ALTER TABLE `rentedcars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_username` (`customer_username`),
  ADD KEY `car_id` (`car_id`),
  ADD KEY `driver_id` (`driver_id`);

--
-- Indexes for table `tb_data`
--
ALTER TABLE `tb_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `car_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `driver_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `pickup`
--
ALTER TABLE `pickup`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `rentedcars`
--
ALTER TABLE `rentedcars`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=574681486;

--
-- AUTO_INCREMENT for table `tb_data`
--
ALTER TABLE `tb_data`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `driver`
--
ALTER TABLE `driver`
  ADD CONSTRAINT `driver_ibfk_1` FOREIGN KEY (`client_username`) REFERENCES `clients` (`client_username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
