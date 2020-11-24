-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 24, 2020 at 10:33 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `geotraveller`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `address_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `adress` varchar(15) DEFAULT NULL,
  `Longitude` varchar(50) NOT NULL,
  `Latitude` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`address_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`address_id`, `adress`, `Longitude`, `Latitude`, `name`, `type`) VALUES
(12, 'Mombasa', '2323232', '432323232323', '', ''),
(2, 'Naivasha', '4545454454', '54545454', '', ''),
(3, 'Nairobi', '64646464', '737373737', '', ''),
(4, 'Kerio Valley', '232323232', '2232323232', '', ''),
(5, 'Naivasha', '433434343', '4343434343', '', ''),
(6, 'Kitale Kenya', '35445454', '45454545', '', ''),
(7, 'Nairobi', '54545454', '54545454', '', ''),
(8, 'Bombololo', '4334343', '33434343', '', ''),
(9, 'Naivasha', '747474747', '748484848', '', ''),
(10, 'Naivasha', '747474747', '748484848', '', ''),
(11, 'Naivasha', '55363636', '636363636', '', ''),
(13, 'Mombasa', '2323232', '432323232323', '', ''),
(15, 'Nairobi', '1.889999', '4444.00000', '', ''),
(16, 'Kitale Kenya', '-1.53633883', '-7.27278822', '', ''),
(17, 'Kitale Kenya', '-1.53633883', '-7.27278822', '', ''),
(18, 'Kitale Kenya', '-1.53633883', '-7.27278822', '', ''),
(19, 'Kitale Kenya', '-1.53633883', '-7.27278822', '', ''),
(20, 'Kitale Kenya', '-1.53633883', '-7.27278822', '', ''),
(21, 'Kitale Kenya', '-1.53633883', '-7.27278822', '', ''),
(22, 'Kitale Kenya', '-1.53633883', '-7.27278822', '', ''),
(23, 'Naivasha', '-1.53633883', '-7.27278822', 'Duncan', 'restaurant');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `service_category_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `service_category` varchar(15) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Description` varchar(50) NOT NULL,
  `Title` varchar(50) NOT NULL,
  PRIMARY KEY (`service_category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`service_category_id`, `service_category`, `created_at`, `Description`, `Title`) VALUES
(19, 'pyrum', '2020-11-15 10:45:53', 'Duncan', 'Skating'),
(17, 'pyrum', '2020-11-15 09:56:11', 'Descriptionqswras', 'Title'),
(5, 'Gamepark', '2020-11-04 21:04:02', 'Description', 'Nature walks'),
(6, 'Mountains', '2020-11-04 22:15:46', 'Description', 'Mountain'),
(7, 'Skating', '2020-11-05 16:41:24', 'The way to connect with the ground', 'Skating'),
(8, 'Skating', '2020-11-05 16:42:29', 'hshhsh', 'Skating'),
(9, 'walking', '2020-11-05 16:43:09', 'limmbing', 'Dun'),
(10, 'pyrum', '2020-11-05 16:45:55', 'Description', 'Nature walks'),
(11, 'pyrum', '2020-11-05 16:47:19', 'Description', 'Nature walks'),
(12, 'Gamepark', '2020-11-05 17:00:53', 'Description', 'Nature walks'),
(14, 'pyrum', '2020-11-06 16:30:25', 'Description', 'Nature walks'),
(15, 'pyrum', '2020-11-07 08:15:43', 'Description', 'Nature walks'),
(16, 'Swimming', '2020-11-09 14:30:42', 'Description', 'Dun'),
(20, 'pyrum', '2020-11-15 10:46:53', 'Description', 'Title'),
(21, 'pyrum', '2020-11-15 10:47:14', 'Description', 'Dun'),
(22, 'pyrum', '2020-11-15 10:47:43', 'Description', 'Skating'),
(23, 'pyrum', '2020-11-15 10:48:06', 'Description', 'Mountain'),
(24, 'pyrum', '2020-11-15 10:50:13', 'Description', 'Dun'),
(25, 'pyrum', '2020-11-15 10:50:15', 'Description', 'Dun'),
(26, 'pyrum', '2020-11-15 11:04:11', 'Description', 'Dun'),
(27, 'pyrum', '2020-11-15 11:15:37', 'Description', 'Skating'),
(28, 'pyrum', '2020-11-15 11:16:14', 'Description', 'Mountain'),
(29, 'pyrum', '2020-11-15 11:16:43', 'Descriptio56n', 'Title'),
(30, 'pyrum', '2020-11-15 11:17:09', 'Description', 'Skating'),
(31, 'pyrum', '2020-11-15 11:17:38', 'Description', 'Mountain'),
(33, 'pyrum', '2020-11-17 23:32:24', 'Description', 'Skating'),
(34, 'pyrum', '2020-11-17 23:34:36', 'Description', 'Skating'),
(35, 'pyrum', '2020-11-17 23:35:30', 'Description', 'Skating'),
(36, 'pyrum', '2020-11-17 23:37:07', 'Description', 'Skating'),
(37, 'pyrum', '2020-11-17 23:37:36', 'Description', 'Skating'),
(38, 'pyrum', '2020-11-17 23:38:17', 'Description', 'Skating'),
(39, 'pyrum', '2020-11-17 23:39:12', 'Description', 'Skating'),
(40, 'pyrum', '2020-11-17 23:39:51', 'Description', 'Dun'),
(41, 'pyrum', '2020-11-17 23:40:15', 'Description', 'Mountain');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `email` varchar(50) NOT NULL,
  `comment` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `comment_id` int(50) unsigned NOT NULL AUTO_INCREMENT,
  `subject` text NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`email`, `comment`, `created_at`, `comment_id`, `subject`) VALUES
('mulongodancan27@gmail.com', 'keep trying', '2020-11-05 18:00:06', 1, 'subjdsect'),
('pyrum@manyali.com', 'keep trying', '2020-11-07 15:02:02', 4, 'subject'),
('eiiiee@gmail.com', 'keep trying', '2020-11-07 15:02:18', 5, 'subject'),
('pyrum@manyali.com', 'keep trying', '2020-11-07 15:02:30', 6, 'subject'),
('mulongodancan40@gmail.com', 'yes we can', '2020-11-09 14:35:08', 7, 'subject');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `OrderId` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ItemOdered` varchar(50) NOT NULL,
  `quantityBooked` varchar(50) NOT NULL,
  `service_Id` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`OrderId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderId`, `ItemOdered`, `quantityBooked`, `service_Id`, `email`, `created_at`) VALUES
(1, 'skying', '1', '5', 'kelvin@200gmail.com', '2020-11-23 23:12:30'),
(2, 'swimming', '1', '15', 'kelvin@200gmail.com', '2020-11-23 23:13:51'),
(3, 'swimming', '1', '4', 'kelvin@200gmail.com', '2020-11-23 23:19:02'),
(4, 'yes', '1', '11', 'kelvin@200gmail.com', '2020-11-23 23:35:53'),
(5, 'yes', '1', '17', 'kelvin@200gmail.com', '2020-11-23 23:37:55');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `service_Id` int(50) unsigned NOT NULL AUTO_INCREMENT,
  `service_tag` varchar(50) NOT NULL,
  `service_description` varchar(250) NOT NULL,
  `available_space` varchar(50) NOT NULL,
  `service_rating` varchar(50) NOT NULL,
  `address_id` int(50) NOT NULL,
  `service_category_id` int(15) NOT NULL,
  `image` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `price` float NOT NULL,
  PRIMARY KEY (`service_Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_Id`, `service_tag`, `service_description`, `available_space`, `service_rating`, `address_id`, `service_category_id`, `image`, `created_at`, `price`) VALUES
(4, 'swimming', 'Describe your service', '2', '7', 14, 7, 'tour2.png', '2020-11-07 11:29:40', 0),
(5, 'skying', 'Describe your service', '40', '8', 12, 6, 'tour3.png', '2020-11-07 11:30:16', 0),
(6, 'skying', 'Describe your service', '56', '0', 0, 0, 'tour5.png', '2020-11-07 11:31:49', 0),
(7, 'twos', 'Describe your service', '56', '0', 0, 0, 'tour6.png', '2020-11-07 11:33:09', 0),
(8, 'swimming', 'Describe your service', '3', '0', 0, 0, 'tour7.png', '2020-11-07 12:04:50', 0),
(9, 'skying', 'Describe your service', '3', '0', 0, 0, 'tour8.png', '2020-11-07 12:05:55', 0),
(10, 'yes', 'Describe your service', '56', '0', 0, 0, 'tour9.png', '2020-11-07 12:06:45', 0),
(11, 'yes', 'Describe your service', '22', '2', 0, 0, 'tour.png', '2020-11-07 14:26:39', 0),
(12, 'yes', 'Describe your service', '23', '0', 0, 0, 'tour2.png', '2020-11-09 14:46:20', 0),
(13, 'yes', 'Describe your service', '23', '3', 0, 0, 'tour3.png', '2020-11-09 14:48:12', 0),
(14, 'yes', 'Describe your service', '34', '0', 0, 7, 'tour8.png', '2020-11-09 14:59:29', 0),
(15, 'swimming', 'Describe your service', '33', '7', 0, 10, 'tour1.png', '2020-11-09 15:05:01', 0),
(16, 'swimming', 'Describe your service', '34', '3', 10, 12, 'tour7.png', '2020-11-09 15:09:01', 0),
(17, 'yes', 'Describe your service', '44', '0', 10, 1, 'WIN_20201113_13_28_13_Pro.jpg', '2020-11-14 11:47:07', 0),
(19, 'skying', 'Describe your service', '23', '5', 6, 12, 'tour9.png', '2020-11-22 13:37:55', 0);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE IF NOT EXISTS `transactions` (
  `transactionId` varchar(50) NOT NULL,
  `itemBooked` varchar(50) NOT NULL,
  `quantityBooked` varchar(50) NOT NULL,
  `totalAmountpaid` varchar(50) NOT NULL,
  `service_Id` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`transactionId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `firstName` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `PhoneNumber` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(250) NOT NULL,
  `user_type` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`firstName`, `lastname`, `address`, `PhoneNumber`, `email`, `userName`, `password`, `image`, `user_type`, `created_at`) VALUES
('Poker', 'Benjamin56', 'Webuye', '0714757251', 'kelvin@200gmail.com', 'Poker', '7492e2f3053c854d4e8f7e1ca149568c', '', '', '2020-10-31 20:34:45'),
('Duncan', 'Nyongesa', 'eiiiee@5698gmail.com', '0714757251', 'mulongodancan27@gmail.com', 'Sam456', '7492e2f3053c854d4e8f7e1ca149568c', '', 'user', '2020-11-22 16:49:13'),
('Poker', 'Danie2344', 'kitale kenya', '0714757251', 'kelvin@gmail.com', 'Danie2344', '7492e2f3053c854d4e8f7e1ca149568c', '', '', '2020-10-31 20:29:26'),
('Poker', 'Nyongesa', 'Kisumu', '0714757251', 'eiiiee@gmail.com', 'Sam45', '7492e2f3053c854d4e8f7e1ca149568c', '', '', '2020-10-31 20:20:25'),
('Brian34', 'Nyongesa', '6787644', '0714757251', 'mulongodancan20@gmail.com', 'sppd4', '7492e2f3053c854d4e8f7e1ca149568c', 'WIN_20200928_06_57_05_Pro.jpg', '@admin', '2020-10-16 16:48:25'),
('Davis', 'Delva', 'Nairobi', '84848484', 'eiiiee@56gmail.com', '989899', '7492e2f3053c854d4e8f7e1ca149568c', '', '0', '2020-10-31 20:23:59'),
('Pacheko', 'Randus', 'Nyamatheko', '0714757251', '7738388396@gmail.com', 'sam78', '7492e2f3053c854d4e8f7e1ca149568c', '', '', '2020-10-30 22:21:42'),
('Daniel4', 'Daniel', 'eiiiee@gmail.com', '0714757251', 'eiiiee@34gmail.com', 'Daniel', '7492e2f3053c854d4e8f7e1ca149568c', '', '', '2020-10-31 20:21:46'),
('Duncan04', 'Benjamin767', '', '0714757251', 'kelvin@70gmail.com', 'Benjamin89876', '7492e2f3053c854d4e8f7e1ca149568c', '', '@admin', '2020-10-31 20:38:22'),
('Duncan', 'Bravin', 'Naivasha', '0714757251', 'kelvin@75gmail.com', 'Bravin', '7492e2f3053c854d4e8f7e1ca149568c', '', '@admin', '2020-10-31 20:43:03'),
('Duncan234', 'Derrick', 'Naivasha', '0714757251', 'kelvin@789gmail.com', 'Derrick', '7492e2f3053c854d4e8f7e1ca149568c', '', '@admin', '2020-10-31 20:44:47'),
('Marvin23', 'Marvin23', 'Naivasha', '0714757251', 'kelvin@78349gmail.com', 'Marvin23', '7492e2f3053c854d4e8f7e1ca149568c', '', '@admin', '2020-10-31 20:46:16'),
('Duncan', 'Nyongesa', 'Naivasha', '0714757251', '773838839@gmail.com', 'Sam4590', '7492e2f3053c854d4e8f7e1ca149568c', '', '@admin', '2020-11-07 17:47:41'),
('Duncan', 'Nyongesa', '6787644', '0714757251', 'mulongodancan26@gmail.com', 'Sam4534', '7492e2f3053c854d4e8f7e1ca149568c', '', 'user', '2020-11-07 18:00:46'),
('Duncan', 'Nyongesa', '6787644', '0714757251', 'mulongodancan89@gmail.com', 'Sam453409879', '7492e2f3053c854d4e8f7e1ca149568c', '', 'user', '2020-11-07 18:02:49'),
('Edmond', 'KYala', '6787644', '0714757251', '77383883944@gmail.com', 'Dalvi', '7492e2f3053c854d4e8f7e1ca149568c', '', 'user', '2020-11-07 18:05:01'),
('Duncan', 'Nyongesa', '6787644', '0714757251', 'mulongodancan40@gmail.com', 'Emmanuel', '7492e2f3053c854d4e8f7e1ca149568c', '', 'user', '2020-11-07 18:09:55');
