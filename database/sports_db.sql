-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 07, 2024 at 04:06 AM
-- Server version: 5.7.26
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
-- Database: `sports_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `a_id` int(10) NOT NULL AUTO_INCREMENT,
  `a_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`a_id`, `a_name`, `email`, `password`) VALUES
(1, 'anish gadai', 'anish@gmail.com', '123456'),
(2, 'rathod  bhargav ', 'bhargav@gmail.com', '123456'),
(3, 'ramvat mit ', 'mit@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

DROP TABLE IF EXISTS `carts`;
CREATE TABLE IF NOT EXISTS `carts` (
  `cart_id` int(10) NOT NULL AUTO_INCREMENT,
  `u_id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`cart_id`, `u_id`, `p_id`, `qty`) VALUES
(39, 16, 26, 5),
(35, 16, 11, 1),
(34, 16, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

DROP TABLE IF EXISTS `categorys`;
CREATE TABLE IF NOT EXISTS `categorys` (
  `cat_id` int(10) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(50) NOT NULL,
  `cat_img` varchar(50) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`cat_id`, `cat_name`, `cat_img`) VALUES
(1, 'cricket', 'img/category/cricket.jpg'),
(2, 'football', 'img/category/football.jpg'),
(3, 'basketball', 'img/category/basketball.jpg'),
(4, 'badminton', 'img/category/badminton.jpg'),
(5, 'tabletennis', 'img/category/8f97df2059ffcef6722ae7d2df077d4a.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `message` mediumtext NOT NULL,
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `subject`, `message`, `c_id`) VALUES
('TEST', 'anish@gmail.com123456', 'TEST', 'TEST', 1),
('TEST', 'anish@gmail.com123456', 'TEST', 'TEST', 2),
('TEST', 'anish@gmail.com123456', 'TEST', 'TEST', 3),
('TEST', 'anish@gmail.com123456', 'TEST', 'TEST', 4),
('TEST', 'anish@gmail.com123456', 'TEST', 'TEST', 5),
('TEST', 'anish', 'TEST', 'TEST', 6),
('fsf', 'erwe', 'wer', 'rrerqr3', 7),
('eerew', 'ewerwr', 'wfwr', 'erqererr', 8);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `o_id` int(10) NOT NULL AUTO_INCREMENT,
  `u_id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `o_qty` int(10) NOT NULL,
  `o_date` date NOT NULL,
  PRIMARY KEY (`o_id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`o_id`, `u_id`, `p_id`, `o_qty`, `o_date`) VALUES
(17, 16, 20, 3, '2024-09-11'),
(16, 16, 15, 2, '2024-09-11'),
(15, 1, 36, 1, '2024-09-11'),
(13, 1, 21, 1, '2024-09-11');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `p_id` int(10) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(50) NOT NULL,
  `p_prise` int(10) NOT NULL,
  `p_description` mediumtext NOT NULL,
  `p_photos` varchar(50) NOT NULL,
  `cat_id` int(10) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_name`, `p_prise`, `p_description`, `p_photos`, `cat_id`) VALUES
(1, 'Adidas XT Black 3.0 English Willow Cricket Bat', 1569, 'Adidas XT Black 3.0 English Willow Cricket Bat\"\"', 'img/product/adi2.jpg', 1),
(2, 'PUMA Future KW SNR 1.1 Kashmir Willow Cricket Bat', 3085, 'PUMA Future KW SNR 1.1 Kashmir Willow Cricket Bat\"', 'img/product/adi5.jpg', 1),
(3, 'Adidas Pellara 4.0 Kashmir Willow', 3000, 'adidas bat', 'img/product/adi3.jpg', 1),
(13, 'Nike Maestro Football -Black//Deep Royal black', 5000, 'Nike Maestro Football -Black//Deep Royal black', 'img/product/f2.jpg', 2),
(4, 'Adidas Incurza Gold LE English Willow Cricket Bat', 2500, 'Adidas Incurza Gold LE English Willow Cricket Bat', 'img/product/adi4.jpg', 1),
(5, 'cricketbat', 6000, 'wagela REEBOK CEAT BAT POPULAR WILLO 5/6 Poplar Willow Cricket Bat', 'img/product/adi1.jpg', 1),
(6, 'cricketball', 600, 'shield 20 Cricket Ball T20 Match Play And Practice Traning Minimum Play 150 Over (White) ', 'img/product/ball1.jpg', 1),
(7, 'cricketball', 700, 'Leather Hanging Practice Cricket Ball (Red) Standard Size', 'img/product/ball2.jpg', 1),
(8, 'cricketball', 500, 'fortress club crown cricket ball [white-men\'s 5 1/2 oz]', 'img/product/ball3.jpg', 1),
(9, 'cricketball', 550, 'BDM Bullet Cricket Leather Ball  (Pack of 1, Red)', 'img/product/ball4.jpg', 1),
(10, 'cricketball', 699, 'SG Cricket Leather Ball (Pink) Club Size,Standard', 'img/product/ball5.jpg', 1),
(11, 'football', 6000, 'adidas asia cup Thermally Bonded footBall', 'img/product/f1.jpg', 2),
(14, 'football', 2500, 'adidas champion ligue white and blue football', 'img/product/f3.jpg', 2),
(12, 'football', 5999, 'NIKE Unisex\'s Academy - Team Football Ball, White/Black/Total Orange, 5', 'img/product/f4.jpg', 2),
(15, 'football', 4000, 'Puma Unisex-Adult Future 2 Soccer Ball, White-Citrus, 5 (5476003)', 'img/product/f5.jpg', 2),
(16, 'basketball', 1599, 'Wilson NBA Authentic Indoor/Outdoor 27.5\" Basketball - Brown', 'img/product/basket6', 3),
(17, 'basketball', 2500, 'Authentic Indoor/Outdoor 27.5\" Basketball - Brown', 'img/product/basket1', 3),
(18, 'basketball', 3000, 'spalding NBA Authentic Indoor/Outdoor 27.5\" Basketball - Brown', 'img/product/basket2', 3),
(19, 'basketball', 5000, 'spalding NBA Authentic Indoor/Outdoor 27.5\" Basketball - Brown', 'img/product/basket4', 3),
(20, 'basketball', 6999, 'Wilson NBA Authentic Indoor/Outdoor 27.5\" Basketball - blue', 'img/product/basket5', 3),
(21, 'badminton', 2500, 'WILSON ROLAND GARROS TRIUMPH Racket orange string', 'img/product/racket2', 4),
(22, 'badminton', 3000, 'YONEX ROLAND GARROS TRIUMPH Racket white', 'img/product/racket1', 4),
(23, 'badminton', 6000, 'WILSON ROLAND GARROS TRIUMPH RACKET ORANGE/BLACK', 'img/product/racket3', 4),
(24, 'badminton', 2700, 'WILSON ROLAND GARROS TRIUMPH RACKET', 'img/product/racket4', 4),
(25, 'badminton', 2299, 'Wilson Clash 99UL ', 'img/product/racket5', 4),
(26, 'badminton', 699, 'Shuttlecocks, Plastic Badminton With Great Stability And Durability For Indoor Outdoor Sports', 'img/product/s1', 4),
(27, 'badminton', 900, 'Yuncu Yc200 Goose Feather Badminton Shuttlecock - Durable And High-quality For Outdoor Training And Sports', 'img/product/s3', 4),
(28, 'badminton', 899, 'Duck Feather Badminton For Training And Entertainment , Shuttlecock For Beginners', 'img/product/s4', 4),
(29, 'badminton', 500, '1pc Premium Quality Badminton Ball For Professional Training And Competition - Durable And Stable For Consistent Performance', 'img/product/s2', 4),
(30, 'badminton', 999, ' Colorful Badminton Shuttlecocks, Durable Badminton Balls, For Outdoor Sports.', 'img/product/s5', 4),
(31, 'football', 2500, 'nike Men\'s Soccer Cleats Football Shoes,Soccer Boots Shoes for men,Big Boy Soccer Shoes,Turf Indoor Youth Soccer Shoes, High Top Ankle Boots for Men', 'img/product/fshoes1', 2),
(32, 'football', 3000, 'adidas Nemeziz Messi 19.1 FG 15 Year \'Bold Aqua Gold\' EE7849 - MENS / UK7.5 / US8 / EU41.33 / CM26', 'img/product/fshoes2', 2),
(33, 'football', 1599, 'Predator Elite Firm Ground Black Mens Soccer Cleats', 'img/product/fshoes3', 2),
(34, 'football', 6999, 'Cheap Soccer Cleats,Adidas & Nike Soccer Shoes,Football Boots For Sale\r\nCheap Soccer', 'img/product/fshoes4', 2),
(35, 'football', 5000, 'adidas football combo| football,gloves,shoes,pads', 'img/product/fkit1', 2),
(36, 'basketball', 5000, 'Men\'s Nike Giannis Immortality 2 Basketball Shoes in White/Black/Volt Size 13', 'img/product/bshoes5', 3),
(37, 'basketball', 6999, 'Basketball Shoes Fashion Sneakers for Kids Boys Basket Shoes Comfort Sport Sneakers Training Sneakers BlackBlue-33', 'img/product/bshoes1', 3),
(38, 'basketball', 4999, 'Giannis Immortality 3 EP Basketball Shoes. Nike PH', 'img/product/bshoes2', 3),
(39, 'basketball', 6000, 'Nike M Air Zoom Tr 1 [dx9016-002] Men Training Shoes Black/white-anthracite', 'img/product/bshoes3', 3),
(40, 'basketball', 10000, 'Nike Zoom Prevail blue Crimson-black Mens Sz 14 [da1102-004]', 'img/product/bshoes4', 3),
(41, 'tabletennis', 6000, 'asdfgh', 'img\\product\\tracket1.jpg', 5),
(53, 'tabletenis', 1200, 'jhb', 'img/product/tracket2.jpg', 5),
(43, 'tabletenis', 1500, 'rreree', 'img/product/tracket3.jpg', 5),
(44, 'tabletenis', 5600, 'fgfgfgfb', 'img/product/tracket4.jpg', 5),
(45, 'tabletenis', 6000, 'fgfgfgfb', 'img/product/tracket5.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `rev_id` int(10) NOT NULL AUTO_INCREMENT,
  `u_id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `comment` mediumtext NOT NULL,
  `rev_date` date NOT NULL,
  PRIMARY KEY (`rev_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`rev_id`, `u_id`, `p_id`, `comment`, `rev_date`) VALUES
(1, 1, 1, 'Great bat under 1599/- ...make sure to take gud care of it with proper knocking and oiling...a few minor scratches were included but not a big issue...great delivery before date...all in all a great deal...thnk u sports equipment from the depth of my heart..this made my day', '2024-07-01'),
(2, 2, 2, 'very good product value for money, puma bat is very nice .', '2024-07-23'),
(3, 3, 2, 'very good product value for money,is very nice .', '2024-07-25'),
(6, 1, 18, 'this is the nice product an d value for money.', '2024-10-03'),
(7, 1, 17, 'This foot ball this very nice and value for money.', '2024-10-03'),
(8, 1, 17, 'nice product\r\n', '2024-10-03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `u_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `address` mediumtext NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `user_name`, `address`, `mobile_no`, `email`, `password`) VALUES
(1, 'saman ghanchi', '01,ghnchi vad ,surendranagar-303036', '9673694216', 'saman@gmail.com', '12345'),
(2, 'meet solanki', '02, surendranagar -303444', '9876532164', 'meet@gmail.com', '12345'),
(3, 'mihir gandhi', '03,60 feet road,wadhwan-303036', '7634926896', 'mihir@gmail.com', '12345'),
(4, 'pavan gosaliya', '04, dholi pol, wadhwan-303036', '8643956789', 'pavan@gmail.com', '12345'),
(5, 'aman makawana', '05,rajkot highway,surendranagar-32003', '7634598634', 'aman@gmail.com', '12345'),
(6, 'chirag gohil', '06,shiyani pol,wadhwan-36003', '9764598364', 'chirag@gmail.com', '12345'),
(7, 'yuvraj makwana', '07,haripara dhandhuka-382460', '7964325894', 'yuvraj@gmail.com', '12345'),
(8, 'mihir ghoghari', '08,padana dhandhuka-382460', '8643267956', 'mihir@gmail.com', '12345'),
(9, 'hardik pandya', '09,vadodara-253032', '9673649865', 'hardik@gmail.com', '12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
