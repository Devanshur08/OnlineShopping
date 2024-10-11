-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2023 at 05:50 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mens_closet_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `address_master`
--

CREATE TABLE `address_master` (
  `add_master_id_pk` int(11) NOT NULL,
  `user_id_fk` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `street_address` varchar(1000) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `postcode` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_on` datetime DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `is_default` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address_master`
--

INSERT INTO `address_master` (`add_master_id_pk`, `user_id_fk`, `first_name`, `email`, `street_address`, `city`, `state`, `postcode`, `phone_number`, `added_on`, `modified_on`, `is_active`, `is_default`) VALUES
(3, 1, 'Abc', 'denilchowdhary@gmail.com', 'H. NO. 6-121, PATEL ROAD, SHADNAGAR', 'SHADNAGAR', 'Telangana', '509216', '9052250513', '2019-04-01 13:48:39', '2019-04-08 13:08:20', 1, 0),
(4, 1, 'cdf', 'denilchowdhary@gmail.com', 'H. NO. 6-121, PATEL ROAD, SHADNAGAR', 'SHADNAGAR', 'Telangana', '509216', '9052250513', '2019-04-08 12:50:01', '2019-04-08 13:08:21', 1, 1),
(5, 4, 'xyz', 'xyz@gmail.com', 'sablagdlidih', 'suart', 'gujarat', '39', '', '2019-04-10 15:24:00', NULL, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `area_id_pk` int(11) NOT NULL,
  `area_name` varchar(255) NOT NULL,
  `city_id_fk` int(11) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_on` datetime DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`area_id_pk`, `area_name`, `city_id_fk`, `added_on`, `modified_on`, `is_active`) VALUES
(3, 'CityLight', 1, '2019-03-06 14:33:34', '2019-03-06 14:34:07', 1),
(4, 'bhavnagar', 1, '2019-03-06 21:53:25', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id_pk` int(11) NOT NULL,
  `u_id_fk` int(11) NOT NULL,
  `total_amount` int(10) NOT NULL,
  `discount` int(11) NOT NULL,
  `discounted_price` int(11) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_on` datetime DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id_pk`, `u_id_fk`, `total_amount`, `discount`, `discounted_price`, `added_on`, `modified_on`, `is_active`) VALUES
(1, 1, 1199, 0, 0, '2019-03-28 16:06:42', NULL, 1),
(2, 2, 0, 0, 0, '2019-03-29 12:22:22', NULL, 1),
(3, 4, 0, 0, 0, '2019-04-10 15:19:26', NULL, 1),
(4, 3, 0, 0, 0, '2022-06-04 11:50:36', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart_product_master`
--

CREATE TABLE `cart_product_master` (
  `cart_p_id_pk` int(11) NOT NULL,
  `cart_id_fk` int(11) NOT NULL,
  `p_id_fk` int(11) NOT NULL,
  `size_id_fk` int(11) NOT NULL,
  `cart_price` int(11) NOT NULL,
  `cart_quantity` varchar(100) NOT NULL,
  `added_on` datetime DEFAULT current_timestamp(),
  `modified_on` datetime DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_product_master`
--

INSERT INTO `cart_product_master` (`cart_p_id_pk`, `cart_id_fk`, `p_id_fk`, `size_id_fk`, `cart_price`, `cart_quantity`, `added_on`, `modified_on`, `is_active`) VALUES
(4, 1, 4, 8, 1199, '1', '2019-04-10 15:15:18', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id_pk` int(11) NOT NULL,
  `city_name` varchar(50) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_on` datetime DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id_pk`, `city_name`, `added_on`, `modified_on`, `is_active`) VALUES
(1, 'Surat', '2019-03-06 14:19:46', NULL, 1),
(2, 'Mumbai', '2019-03-06 14:19:46', NULL, 1),
(3, 'bhavnagar', '2019-03-07 19:55:30', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `colour`
--

CREATE TABLE `colour` (
  `colour_id_pk` int(11) NOT NULL,
  `colour_name` varchar(255) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_on` datetime DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colour`
--

INSERT INTO `colour` (`colour_id_pk`, `colour_name`, `added_on`, `modified_on`, `is_active`) VALUES
(1, 'red', '2019-03-06 16:37:53', '2019-03-06 16:41:59', 0),
(2, 'yellow', '2019-03-06 21:19:18', '2019-03-14 13:56:52', 0),
(3, 'yellow', '2019-03-07 15:40:49', '2019-03-14 13:56:46', 0),
(4, 'Red', '2019-03-14 13:57:03', NULL, 1),
(5, 'Black', '2019-03-14 13:57:14', NULL, 1),
(6, 'White', '2019-03-14 13:57:24', NULL, 1),
(7, 'Orange', '2019-03-14 13:57:35', NULL, 1),
(8, 'Olive', '2019-03-14 13:57:51', NULL, 1),
(9, 'Grey', '2019-03-14 14:32:23', NULL, 1),
(10, 'Blue', '2019-03-14 15:02:36', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id_pk` int(11) NOT NULL,
  `u_id_fk` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `is_read` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `coupon_id_pk` int(11) NOT NULL,
  `coupon_name` varchar(255) NOT NULL,
  `discount` int(11) NOT NULL,
  `upto` int(11) NOT NULL,
  `is_sent` tinyint(1) NOT NULL DEFAULT 0,
  `added_on` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_on` datetime DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`coupon_id_pk`, `coupon_name`, `discount`, `upto`, `is_sent`, `added_on`, `modified_on`, `is_active`) VALUES
(1, 'dhamaka', 30, 3000, 0, '2019-03-07 14:42:22', '2019-03-07 14:47:05', 1),
(2, 'Diwali', 50, 5000, 0, '2019-03-22 15:16:16', '2019-03-22 15:16:35', 1);

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `d_id_pk` int(11) NOT NULL,
  `t_id_fk` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `u_id_fk` int(11) NOT NULL,
  `o_id_fk` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `e-mail` varchar(255) NOT NULL,
  `contact number` int(11) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_on` datetime DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`d_id_pk`, `t_id_fk`, `address`, `u_id_fk`, `o_id_fk`, `f_name`, `l_name`, `e-mail`, `contact number`, `added_on`, `modified_on`, `is_active`) VALUES
(1, 1, '', 0, 1, '', '', '', 0, '2022-04-01 10:40:49', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `extra_charge`
--

CREATE TABLE `extra_charge` (
  `ec_id_pk` int(11) NOT NULL,
  `ec_name` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_on` datetime DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `extra_charge`
--

INSERT INTO `extra_charge` (`ec_id_pk`, `ec_name`, `amount`, `added_on`, `modified_on`, `is_active`) VALUES
(1, 'get', 0, '2019-03-06 21:38:59', '2019-03-06 21:52:31', 0),
(2, 'shipping', 0, '2019-03-06 21:45:39', '2019-03-07 12:17:40', 0),
(3, 'jhd', 300, '2019-03-07 12:13:46', '2019-03-11 13:46:45', 0),
(4, 'fbg', 30, '2019-03-07 12:17:29', '2019-03-11 13:45:48', 1),
(5, 'get', 10, '2019-03-11 13:45:08', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE `material` (
  `m_id_pk` int(11) NOT NULL,
  `m_name` varchar(255) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_on` datetime DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`m_id_pk`, `m_name`, `added_on`, `modified_on`, `is_active`) VALUES
(1, 'jute', '2019-03-07 14:30:45', '2019-03-07 14:32:52', 0),
(2, 'Cotton', '2019-03-07 15:41:08', '2019-03-14 13:59:46', 1),
(3, 'Denim', '2019-03-14 13:58:39', NULL, 1),
(4, 'Leather', '2019-03-14 13:58:51', NULL, 1),
(5, 'Fur', '2019-03-14 13:59:03', NULL, 1),
(6, 'Silk', '2019-03-14 13:59:23', NULL, 1),
(7, 'Fabrics', '2019-03-14 13:59:36', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `o_id` int(11) NOT NULL,
  `u_id_fk` int(11) NOT NULL,
  `address_id_fk` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `is_placed` tinyint(1) DEFAULT NULL,
  `added_on` datetime DEFAULT current_timestamp(),
  `modified_on` datetime DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `is_read` tinyint(1) NOT NULL DEFAULT 0,
  `is_delivered` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`o_id`, `u_id_fk`, `address_id_fk`, `total_price`, `is_placed`, `added_on`, `modified_on`, `is_active`, `is_read`, `is_delivered`) VALUES
(1, 1, 4, 2939, NULL, '2019-04-08 00:00:00', '2022-04-01 10:40:51', 1, 1, 1),
(2, 1, 4, 1199, NULL, '2019-04-08 00:00:00', '2022-04-01 10:40:51', 1, 1, 0),
(3, 1, 4, 1199, NULL, '2019-04-08 00:00:00', '2022-04-01 10:40:51', 1, 1, 0),
(4, 1, 4, 1199, NULL, '2019-04-08 00:00:00', '2022-04-01 10:40:51', 1, 1, 0),
(5, 1, 4, 1199, NULL, '2019-04-08 00:00:00', '2022-04-01 10:40:51', 1, 1, 0),
(6, 1, 4, 1199, NULL, '2019-04-08 00:00:00', '2022-04-01 10:40:51', 1, 1, 0),
(7, 1, 4, 1199, NULL, '2019-04-08 00:00:00', '2022-04-01 10:40:51', 1, 1, 0),
(8, 1, 4, 1199, NULL, '2019-04-08 00:00:00', '2022-04-01 10:40:51', 1, 1, 0),
(9, 1, 4, 1199, NULL, '2019-04-08 00:00:00', '2022-04-01 10:40:51', 1, 1, 0),
(10, 1, 4, 1199, NULL, '2019-04-08 00:00:00', '2022-04-01 10:40:51', 1, 1, 0),
(11, 1, 4, 1500, NULL, '2019-04-08 00:00:00', '2022-04-01 10:40:51', 1, 1, 0),
(12, 1, 4, 1500, NULL, '2019-04-08 00:00:00', '2022-04-01 10:40:51', 1, 1, 0),
(13, 1, 4, 1500, NULL, '2019-04-08 00:00:00', '2022-04-01 10:40:51', 1, 1, 0),
(14, 1, 4, 1199, NULL, '2019-04-08 00:00:00', '2022-04-01 10:40:51', 1, 1, 0),
(15, 1, 4, 1199, NULL, '2019-04-08 00:00:00', '2022-04-01 10:40:51', 1, 1, 0),
(16, 1, 4, 1199, NULL, '2019-04-09 00:00:00', '2022-04-01 10:40:51', 1, 1, 0),
(17, 1, 4, 1199, NULL, '2019-04-09 00:00:00', '2022-04-01 10:40:51', 1, 1, 0),
(18, 1, 4, 1199, NULL, '2019-04-09 00:00:00', '2022-04-01 10:40:51', 1, 1, 0),
(19, 1, 4, 1199, NULL, '2019-04-09 00:00:00', '2022-04-01 10:40:51', 1, 1, 0),
(20, 1, 4, 1199, NULL, '2019-04-10 00:00:00', '2022-04-01 10:40:51', 1, 1, 0),
(21, 1, 4, 1199, NULL, '2019-04-10 00:00:00', '2022-04-01 10:40:51', 1, 1, 0),
(22, 4, 5, 1199, NULL, '2019-04-10 00:00:00', '2022-04-01 10:40:51', 1, 1, 0),
(23, 4, 5, 0, NULL, '2019-04-10 00:00:00', '2022-04-01 10:40:51', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_product_master`
--

CREATE TABLE `order_product_master` (
  `o_p_id_pk` int(11) NOT NULL,
  `p_id_fk` int(11) NOT NULL,
  `size_id_fk` int(11) NOT NULL,
  `o_id_fk` int(11) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `net_price` int(11) NOT NULL,
  `added_on` datetime DEFAULT current_timestamp(),
  `modified_on` datetime DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_product_master`
--

INSERT INTO `order_product_master` (`o_p_id_pk`, `p_id_fk`, `size_id_fk`, `o_id_fk`, `quantity`, `net_price`, `added_on`, `modified_on`, `is_active`) VALUES
(1, 4, 6, 1, '1', 1199, '2019-04-08 14:30:08', NULL, 1),
(2, 3, 6, 1, '1', 1499, '2019-04-08 14:30:08', NULL, 1),
(3, 1, 7, 1, '1', 1500, '2019-04-08 14:30:08', NULL, 1),
(4, 4, 6, 2, '1', 1199, '2019-04-08 14:31:13', NULL, 1),
(5, 4, 6, 5, '1', 1199, '2019-04-08 14:33:22', NULL, 1),
(6, 4, 6, 6, '1', 1199, '2019-04-08 14:37:47', NULL, 1),
(7, 4, 6, 7, '1', 1199, '2019-04-08 14:39:29', NULL, 1),
(8, 4, 6, 8, '1', 1199, '2019-04-08 14:40:49', NULL, 1),
(9, 4, 6, 10, '1', 1199, '2019-04-08 14:42:32', NULL, 1),
(10, 1, 6, 11, '1', 1500, '2019-04-08 14:45:09', NULL, 1),
(11, 4, 6, 14, '1', 1199, '2019-04-08 14:47:30', NULL, 1),
(12, 4, 6, 15, '1', 1199, '2019-04-08 14:48:50', NULL, 1),
(13, 4, 7, 16, '1', 1199, '2019-04-09 12:27:25', NULL, 1),
(14, 4, 6, 17, '1', 1199, '2019-04-09 12:34:30', NULL, 1),
(15, 4, 6, 18, '1', 1199, '2019-04-09 17:37:34', NULL, 1),
(16, 4, 2, 20, '1', 1199, '2019-04-10 14:51:46', NULL, 1),
(17, 4, 6, 21, '1', 1199, '2019-04-10 15:03:52', NULL, 1),
(18, 4, 6, 22, '1', 1199, '2019-04-10 15:24:00', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `pi_id_pk` int(11) NOT NULL,
  `pi_name` varchar(255) NOT NULL,
  `p_id_fk` int(11) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_on` datetime DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`pi_id_pk`, `pi_name`, `p_id_fk`, `added_on`, `modified_on`, `is_active`) VALUES
(1, 'upload/IMG_PROP_2.png', 2, '2019-03-08 16:25:01', '2019-03-08 17:29:32', 0),
(3, 'upload/IMG_PROP_3.png', 3, '2019-03-08 16:41:55', NULL, 1),
(4, 'upload/IMG_PROP_4.png', 4, '2019-03-14 12:51:33', NULL, 1),
(5, 'upload/IMG_PROP_6.jpg', 6, '2019-03-14 14:07:11', NULL, 1),
(6, 'upload/IMG_PROP_1.png', 1, '2019-03-14 14:28:06', NULL, 1),
(7, 'upload/IMG_PROP_5.png', 5, '2019-03-14 14:28:06', '2019-03-14 14:44:22', 0),
(8, 'upload/IMG_PROP_1_2.jpg', 1, '2019-03-15 15:09:15', '2019-03-15 15:09:27', 0),
(9, 'upload/IMG_PROP_1_2.jpg', 1, '2019-03-15 15:09:39', '2019-03-22 12:36:03', 0),
(10, 'upload/IMG_PROP_8_1.png', 8, '2019-03-18 13:51:39', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_master`
--

CREATE TABLE `product_master` (
  `p_id_pk` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `pt_id_fk` int(255) NOT NULL,
  `colour_id_fk` int(50) NOT NULL,
  `m_id_fk` int(50) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_on` datetime DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `description` varchar(1000) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_master`
--

INSERT INTO `product_master` (`p_id_pk`, `p_name`, `pt_id_fk`, `colour_id_fk`, `m_id_fk`, `added_on`, `modified_on`, `is_active`, `description`, `price`) VALUES
(1, 'Mens V Neck Tee In White', 6, 6, 2, '2019-03-08 16:23:25', '2019-03-25 14:47:34', 1, 'The classic v-neck tee that\'s the easiest to wear. Designed from a super soft high grade combed cotton and made in Los Angeles, our men\'s v-neck tee in white is perfect for layering under a button down or wearing along for smart style. A slim fit and premium finished details create a simple, yet elevated, everyday tee.                                                                                                                        ', 1500),
(2, 'Mens French Terry Crewneck Sweatshirt In Heather Grey', 9, 9, 2, '2019-03-08 16:25:01', '2019-03-15 14:15:16', 1, 'Taking comfort in the classics. Designed with a propriety French terry cotton yarn blend, our French terry crew neck sweatshirt in heather grey combines softness, durability, and just enough stretch. It’s a medium weight so you can wear it year round, with layers or on its own. This worn-in feeling yet polished looking piece is always on hand.', 999),
(3, 'Mens Leather Bomber Jacket In Black', 8, 5, 4, '2019-03-08 16:41:55', '2019-03-15 14:25:16', 1, 'We took the classic men\'s bomber jacket and modernized it with a supremely soft, broken-in specially dyed leather for an elevated upgrade to the iconic essential. Our take on the leather bomber jacket features sleek silver hardware with exterior zip pocket.', 1499),
(4, 'Mens French Terry Zip Hoodie In Midnight Blue', 2, 10, 2, '2019-03-14 12:51:33', '2019-03-15 14:12:44', 1, 'Look good while running errands, running laps, or running the show. Our French terry zip hoodie is as versatile as they come, with pouch pockets, a front zip, contoured hood, and breathable, moisture wicking fabrication. We’ve blended three premium 100% cotton yarns together to achieve a French terry that has unmatched softness, durability, and the perfect amount of stretch. Layer up under a denim jacket, or wear on its own.', 1199),
(5, 'Mens Long Sleeve Modern Crew Neck Tee In Black', 4, 5, 2, '2019-03-14 13:29:22', '2019-03-15 14:16:30', 1, 'The men\'s long sleeve modern crew neck tee in black is a classic layering piece for year-round rotation. Designed from a combed cotton, our men\'s long sleeve tee is soft to the touch and perfectly comfortable for all-day wear. The unfinished neckline adds a contemporary look that pairs well with a classic slim fit.', 699),
(6, 'Mens Denim Jacket In Worn Black', 8, 5, 3, '2019-03-14 14:07:11', '2019-03-15 14:10:57', 1, 'A men’s black denim jacket is as essential as a true blue indigo offering. Our men’s mid-weight 12.5 ounce black denim with a hint of stretch has been designed to feel comfortable and broken in. Our black denim jacket is dyed to a dark hue with soft wear to mimic a well worn fade. With a slim fit, our men’s black denim jacket has classic features like button details along the chest pockets, cuffs, and side tabs. Wear with any style jean to add a rebellious edge.', 1499);

-- --------------------------------------------------------

--
-- Table structure for table `product_quantity_master`
--

CREATE TABLE `product_quantity_master` (
  `p_q_id_pk` int(11) NOT NULL,
  `p_id_fk` int(11) NOT NULL,
  `s_id_fk` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_on` datetime DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_quantity_master`
--

INSERT INTO `product_quantity_master` (`p_q_id_pk`, `p_id_fk`, `s_id_fk`, `quantity`, `added_on`, `modified_on`, `is_active`) VALUES
(1, 8, 6, 10, '2019-03-18 13:51:38', NULL, 1),
(2, 8, 7, 15, '2019-03-18 13:51:39', NULL, 1),
(3, 8, 8, 20, '2019-03-18 13:51:39', NULL, 1),
(4, 8, 9, 10, '2019-03-18 13:51:39', NULL, 1),
(5, 8, 10, 5, '2019-03-18 13:51:39', NULL, 1),
(6, 1, 6, 5, '2019-03-18 14:45:53', NULL, 1),
(7, 1, 7, 10, '2019-03-18 14:45:53', NULL, 1),
(8, 1, 8, 25, '2019-03-18 14:45:53', NULL, 1),
(9, 1, 9, 20, '2019-03-18 14:45:53', NULL, 1),
(10, 1, 10, 30, '2019-03-18 14:45:53', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `pt_id_pk` int(11) NOT NULL,
  `pt_name` varchar(255) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_on` datetime DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`pt_id_pk`, `pt_name`, `added_on`, `modified_on`, `is_active`) VALUES
(1, 'hoodieeeeeeeeeee', '2019-03-07 15:21:33', '2019-03-07 15:32:53', 0),
(2, 'Hoodie', '2019-03-07 15:41:37', '2019-03-14 14:01:13', 1),
(3, 'Half Sleeve', '2019-03-14 12:50:38', '2019-03-14 14:02:32', 1),
(4, 'Full Sleeve', '2019-03-14 14:00:23', NULL, 1),
(5, 'Polos', '2019-03-14 14:00:43', NULL, 1),
(6, 'V Neck', '2019-03-14 14:00:58', NULL, 1),
(7, 'Sleeveless', '2019-03-14 14:01:57', NULL, 1),
(8, 'Jacket', '2019-03-14 14:03:32', NULL, 1),
(9, 'Sweatshirt', '2019-03-14 14:31:43', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `return`
--

CREATE TABLE `return` (
  `return_id_pk` int(11) NOT NULL,
  `o_id_fk` int(11) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `added_on` datetime DEFAULT current_timestamp(),
  `modified_on` datetime DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id_pk` int(11) NOT NULL,
  `u_id_fk` int(11) NOT NULL,
  `p_id_fk` int(11) NOT NULL,
  `added_on` datetime DEFAULT current_timestamp(),
  `modified_on` datetime DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `sale_id_pk` int(11) NOT NULL,
  `sale_name` varchar(255) NOT NULL,
  `sale_image` varchar(255) NOT NULL,
  `starting_date` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_on` datetime DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`sale_id_pk`, `sale_name`, `sale_image`, `starting_date`, `duration`, `added_on`, `modified_on`, `is_active`) VALUES
(1, 'big ', '', '6 dec', '2months', '2019-03-11 12:29:50', '2019-03-11 12:38:55', 0),
(2, 'big bash', 'upload/sale/IMG_sale_bigbash.jpg', '3 december', '2 month', '2019-03-11 12:58:06', '2019-04-09 14:43:46', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sale_category`
--

CREATE TABLE `sale_category` (
  `sale_c_id_pk` int(11) NOT NULL,
  `sale_c_name` varchar(255) NOT NULL,
  `discount` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_on` datetime DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sale_category`
--

INSERT INTO `sale_category` (`sale_c_id_pk`, `sale_c_name`, `discount`, `amount`, `added_on`, `modified_on`, `is_active`) VALUES
(1, 'feb', 40, 300, '2019-03-11 12:49:12', '2019-03-11 12:49:42', 0),
(2, 'january', 20, 30, '2019-03-11 12:57:51', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sale_product`
--

CREATE TABLE `sale_product` (
  `sale_p_id_pk` int(11) NOT NULL,
  `p_id_fk` int(11) NOT NULL,
  `sale_id_fk` int(11) NOT NULL,
  `sale_c_id_fk` int(11) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_on` datetime DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sale_product`
--

INSERT INTO `sale_product` (`sale_p_id_pk`, `p_id_fk`, `sale_id_fk`, `sale_c_id_fk`, `added_on`, `modified_on`, `is_active`) VALUES
(1, 0, 0, 0, '2019-03-11 13:07:15', '2019-03-11 13:07:33', 1),
(2, 3, 2, 2, '2019-03-11 13:07:59', '2019-03-11 13:08:17', 1),
(3, 2, 2, 2, '2019-03-11 13:21:41', '2019-03-11 13:21:48', 1);

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `size_id_pk` int(11) NOT NULL,
  `size_name` varchar(255) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_on` datetime DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`size_id_pk`, `size_name`, `added_on`, `modified_on`, `is_active`) VALUES
(2, 'm', '2019-03-06 15:54:36', '2019-03-06 16:00:38', 0),
(3, 'xl', '2019-03-06 16:01:26', '2019-03-14 13:51:22', 0),
(4, 's', '2019-03-07 15:40:34', '2019-03-14 13:51:17', 0),
(5, 'S', '2019-03-14 13:51:07', '2019-03-14 13:51:26', 0),
(6, 'S', '2019-03-14 13:51:46', NULL, 1),
(7, 'M', '2019-03-14 13:55:13', NULL, 1),
(8, 'L', '2019-03-14 13:55:24', NULL, 1),
(9, 'XL', '2019-03-14 13:55:37', NULL, 1),
(10, 'XS', '2019-03-14 13:55:48', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE `transport` (
  `t_id_pk` int(11) NOT NULL,
  `o_id_fk` int(11) NOT NULL,
  `city_id_fk` int(11) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_on` datetime DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE `user_master` (
  `u_id_pk` int(11) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `u_type` varchar(255) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_on` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`u_id_pk`, `u_name`, `contact`, `email`, `password`, `u_type`, `added_on`, `modified_on`, `is_active`) VALUES
(1, 'admin', 123456, 'admin@gmail.com', 'admin', 'admin', '2023-02-10 11:17:11', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `w_id_pk` int(11) NOT NULL,
  `u_id_fk` int(11) NOT NULL,
  `p_id_fk` int(11) NOT NULL,
  `added_on` datetime DEFAULT current_timestamp(),
  `modified_on` datetime DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`w_id_pk`, `u_id_fk`, `p_id_fk`, `added_on`, `modified_on`, `is_active`) VALUES
(9, 1, 4, '2019-04-09 12:34:10', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address_master`
--
ALTER TABLE `address_master`
  ADD PRIMARY KEY (`add_master_id_pk`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`area_id_pk`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id_pk`);

--
-- Indexes for table `cart_product_master`
--
ALTER TABLE `cart_product_master`
  ADD PRIMARY KEY (`cart_p_id_pk`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id_pk`);

--
-- Indexes for table `colour`
--
ALTER TABLE `colour`
  ADD PRIMARY KEY (`colour_id_pk`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id_pk`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`coupon_id_pk`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`d_id_pk`);

--
-- Indexes for table `extra_charge`
--
ALTER TABLE `extra_charge`
  ADD PRIMARY KEY (`ec_id_pk`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`m_id_pk`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `order_product_master`
--
ALTER TABLE `order_product_master`
  ADD PRIMARY KEY (`o_p_id_pk`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`pi_id_pk`);

--
-- Indexes for table `product_master`
--
ALTER TABLE `product_master`
  ADD PRIMARY KEY (`p_id_pk`);

--
-- Indexes for table `product_quantity_master`
--
ALTER TABLE `product_quantity_master`
  ADD PRIMARY KEY (`p_q_id_pk`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`pt_id_pk`);

--
-- Indexes for table `return`
--
ALTER TABLE `return`
  ADD PRIMARY KEY (`return_id_pk`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id_pk`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`sale_id_pk`);

--
-- Indexes for table `sale_category`
--
ALTER TABLE `sale_category`
  ADD PRIMARY KEY (`sale_c_id_pk`);

--
-- Indexes for table `sale_product`
--
ALTER TABLE `sale_product`
  ADD PRIMARY KEY (`sale_p_id_pk`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`size_id_pk`);

--
-- Indexes for table `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`t_id_pk`);

--
-- Indexes for table `user_master`
--
ALTER TABLE `user_master`
  ADD PRIMARY KEY (`u_id_pk`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`w_id_pk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address_master`
--
ALTER TABLE `address_master`
  MODIFY `add_master_id_pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `area_id_pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id_pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cart_product_master`
--
ALTER TABLE `cart_product_master`
  MODIFY `cart_p_id_pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id_pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `colour`
--
ALTER TABLE `colour`
  MODIFY `colour_id_pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id_pk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `coupon_id_pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `d_id_pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `extra_charge`
--
ALTER TABLE `extra_charge`
  MODIFY `ec_id_pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `m_id_pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `order_product_master`
--
ALTER TABLE `order_product_master`
  MODIFY `o_p_id_pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `pi_id_pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product_master`
--
ALTER TABLE `product_master`
  MODIFY `p_id_pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_quantity_master`
--
ALTER TABLE `product_quantity_master`
  MODIFY `p_q_id_pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `pt_id_pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `return`
--
ALTER TABLE `return`
  MODIFY `return_id_pk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id_pk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sale`
--
ALTER TABLE `sale`
  MODIFY `sale_id_pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sale_category`
--
ALTER TABLE `sale_category`
  MODIFY `sale_c_id_pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sale_product`
--
ALTER TABLE `sale_product`
  MODIFY `sale_p_id_pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `size_id_pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transport`
--
ALTER TABLE `transport`
  MODIFY `t_id_pk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_master`
--
ALTER TABLE `user_master`
  MODIFY `u_id_pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `w_id_pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
