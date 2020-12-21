-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2020 at 09:57 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `banner_heading` varchar(100) NOT NULL,
  `banner_heading_text` varchar(255) NOT NULL,
  `banner_btn_title` varchar(100) NOT NULL,
  `banner_img` varchar(255) NOT NULL,
  `banner_img_alt` varchar(100) NOT NULL,
  `banner_text_clr` varchar(255) NOT NULL,
  `banner_bg_clr` varchar(255) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `banner_heading`, `banner_heading_text`, `banner_btn_title`, `banner_img`, `banner_img_alt`, `banner_text_clr`, `banner_bg_clr`, `added_on`) VALUES
(1, 'Get Our App', 'It’s the easiest way to search, buy and sell on the go.', 'Download Now', 's-l960.png', 'Download Our App', '#ffffff', '#d4b881', '2020-12-14 08:17:44'),
(2, 'Still Interested', 'Get your recently viewed items before they’re gone', 'Look Again', 's-l960 (1).jpg', 'Still Interested', '#ffffff', '#f98559', '2020-12-14 09:46:46'),
(3, 'Looking for Electronics?', 'Find new items now, with great deals and limited time offers', 'Buy Now', 's-l960 (2).jpg', 'Looking for Electronics?', '#111258', '#c5e5fd', '2020-12-16 07:17:41');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cate_name` varchar(100) NOT NULL,
  `cate_img` varchar(255) NOT NULL,
  `cate_img_alt` varchar(100) NOT NULL,
  `cate_desc` longtext NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cate_name`, `cate_img`, `cate_img_alt`, `cate_desc`, `added_on`) VALUES
(1, 'Smartphone', 'rahul-chakraborty-xsGxhtAsfSA-unsplash.jpg', 'Smartphone', 'A smartphone is a mobile phone that includes advanced functionality beyond making phone calls and sending text messages. Most smartphones have the capability to display photos, play videos, check and send e-mail, and surf the Web.', '2020-12-14 06:28:29'),
(2, 'Shoes', 'klipartz.com.png', 'Shoes', 'A shoe is an item of footwear intended to protect and comfort the human foot. Shoes are also used as an item of decoration and fashion. The design of shoes has varied enormously through time and from culture to culture, with appearance originally being tied to function', '2020-12-14 07:47:19'),
(3, 'Grocery', 'basket-918416_1920.jpg', 'Grocery Items', 'A grocery store (North America), grocer or grocery shop (U.K.), is a store primarily engaged in retailing a general range of food products, which may be fresh or packaged. ... Some groceries specialize in the foods of certain countries or regions, such as Chinese, Italian, Middle Eastern, or Polish', '2020-12-17 06:53:13'),
(4, 'Clothes', 's-l960.png', 'Clothes', 'Clothes', '2020-12-21 03:45:08');

-- --------------------------------------------------------

--
-- Table structure for table `cate_attribute`
--

CREATE TABLE `cate_attribute` (
  `id` int(11) NOT NULL,
  `categ_name` varchar(500) NOT NULL,
  `cate_att_style` varchar(500) NOT NULL,
  `cate_att_value` varchar(500) NOT NULL,
  `cate_att_value2` varchar(500) DEFAULT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cate_attribute`
--

INSERT INTO `cate_attribute` (`id`, `categ_name`, `cate_att_style`, `cate_att_value`, `cate_att_value2`, `added_on`) VALUES
(10, '2', 'size', '14\r\n15\r\n', '', '2020-12-21 06:14:04'),
(11, '1', 'size', '14', '', '2020-12-21 06:24:05'),
(12, '1', 'size', '14', '', '2020-12-21 06:28:05'),
(13, '1', 'color', 'red', '', '2020-12-21 06:40:02'),
(14, '1', 'size', '14', '', '2020-12-21 06:40:56'),
(15, 'Choose Category Name', 'size', 'as', '', '2020-12-21 06:41:05'),
(16, '1', 'size', '14', '', '2020-12-21 06:41:57'),
(17, '1', 'color', 'red', '', '2020-12-21 06:44:50'),
(18, '2', 'size', '26', '', '2020-12-21 06:49:20');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `pcate` int(11) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pcname` varchar(255) NOT NULL,
  `poprice` int(50) NOT NULL,
  `psprice` int(50) NOT NULL,
  `padprice` int(50) DEFAULT NULL,
  `pquantity` int(11) NOT NULL,
  `pdate` date NOT NULL,
  `pdesc` mediumtext NOT NULL,
  `pimg` varchar(255) NOT NULL,
  `pmore_img1` varchar(255) NOT NULL,
  `pmore_img2` varchar(255) NOT NULL,
  `pcolor` varchar(500) NOT NULL,
  `psize` varchar(500) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `uid`, `pcate`, `pname`, `pcname`, `poprice`, `psprice`, `padprice`, `pquantity`, `pdate`, `pdesc`, `pimg`, `pmore_img1`, `pmore_img2`, `pcolor`, `psize`, `added_on`) VALUES
(7, 0, 0, 'Keyboard', 'Dell', 290, 350, 0, 250, '2020-12-07', 'The Dell Wired Keyboard provides a convenient keyboard solution for everyday home or office computing uses. The keyboard\'s full layout with chiclet style keys allows for efficient, comfortable typing ', 'download.jpg', 'download.jpg', 'download.jpg', '', '', '2020-12-07 04:30:31'),
(8, 0, 0, 'Keyboard', 'Dell', 290, 300, 0, 25, '2020-12-07', 'The Dell Wired Keyboard provides a convenient keyboard.', 'download.jpg', 'download.jpg', 'download.jpg', '', '', '2020-12-07 06:18:05'),
(9, 0, 0, 'Keyboard', 'Dell', 290, 300, 0, 20, '2020-12-07', 'A computer keyboard is an input device used to enter characters and functions into the computer system by pressing buttons, or keys.', 'download.jpg', 'download.jpg', 'download.jpg', '', '', '2020-12-07 06:22:23'),
(10, 0, 0, 'Keyboard', 'Dell', 290, 300, 0, 150, '2020-12-07', 'A computer keyboard is an input device used to enter characters and functions into the computer system by pressing buttons, or keys. It is the primary device used to enter text. A keyboard typically contains keys for individual letters, numbers and special characters, as well as keys for specific functions.\r\n', 'download.jpg', 'download.jpg', 'download.jpg', '', '', '2020-12-07 08:47:46'),
(12, 0, 0, 'Keyboard', 'Dell', 150, 170, 160, 20, '2020-12-15', 'This discount calculator allows you to find the reduced price of a product and the amount of money you save. You can also use it for the reverse and calculate the size of the discount or the original price. As a shopper, you it also functions as a sale price calculator to help you negotiate the price. Got a coupon? Find out what the final price will be after you factor in that 15% off discount that you have. These are just a few of the situations this calculator will help you with. If you are on the other side of these transactions, that is you are a sales person, you might want find out what your sale price will be (our profit margin with discount or markdown calculator may also be handy). Read on to find out how to calculate discount and what the discount formula is.', '127154402_1031403177363424_8665105916232145976_n.jpg', '127154402_1031403177363424_8665105916232145976_n.jpg', '127154402_1031403177363424_8665105916232145976_n.jpg', '', '', '2020-12-08 07:22:14'),
(13, 0, 0, 'Keyboard', 'Dell', 150, 190, 160, 20, '2020-12-08', 'This discount calculator allows you to find the reduced price of a product and the amount of money you save. You can also use it for the reverse and calculate the size of the discount or the original price. As a shopper, you it also functions as a sale price calculator to help you negotiate the price. Got a coupon? Find out what the final price will be after you factor in that 15% off discount that you have. These are just a few of the situations this calculator will help you with. If you are on the other side of these transactions, that is you are a sales person, you might want find out what your sale price will be (our profit margin with discount or markdown calculator may also be handy). Read on to find out how to calculate discount and what the discount formula is.', '127154402_1031403177363424_8665105916232145976_n.jpg', '127154402_1031403177363424_8665105916232145976_n.jpg', '127154402_1031403177363424_8665105916232145976_n.jpg', '', '', '2020-12-08 07:23:59'),
(14, 0, 0, 'laptop', 'dell', 29000, 31500, 0, 200, '2020-12-10', 'A laptop computer is a small personal computer. They are designed to be more portable than traditional desktop computers, with many of the same abilities. Laptops are able to be folded flat for transportation and have a built-in keyboard and touchpad.', '125206660_102602645009765_7111614974206361068_o.jpg', '125206660_102602645009765_7111614974206361068_o.jpg', '125206660_102602645009765_7111614974206361068_o.jpg', '', '', '2020-12-10 04:15:43'),
(15, 0, 0, 'laptop', 'dell', 29000, 33000, 0, 250, '2020-12-11', 'A laptop computer is a small personal computer. They are designed to be more portable than...', '125206660_102602645009765_7111614974206361068_o.jpg', '125206660_102602645009765_7111614974206361068_o.jpg', '125206660_102602645009765_7111614974206361068_o.jpg', '', '', '2020-12-10 04:58:05'),
(16, 0, 0, 'laptop', 'apple', 29000, 30000, 0, 2, '2020-12-10', 'A laptop computer is a small personal computer. They are designed to be more portable than..', '126000200_102602951676401_7026090446584625199_o.jpg', '126000200_102602951676401_7026090446584625199_o.jpg', '126000200_102602951676401_7026090446584625199_o.jpg', '', '', '2020-12-10 05:43:36'),
(17, 0, 0, 'saad', 'saad', 290, 300, 0, 100, '2020-12-10', 'A laptop computer is a small personal computer. They are designed to be more portable...', 'boooooster.png', 'boooooster.png', 'boooooster.png', '', '', '2020-12-10 06:01:38'),
(18, 0, 0, 'Mouse', 'Dell', 290, 300, 120, 12, '2020-12-12', 'Dell Mouse', '129732994_4175487122468476_1044870471621327567_n.jpg', '129732994_4175487122468476_1044870471621327567_n.jpg', '129732994_4175487122468476_1044870471621327567_n.jpg', '', '', '2020-12-11 04:44:39'),
(19, 0, 0, 'Keyboard', 'Dell', 150, 170, 190, 5, '2020-12-11', 'dasdasdasd', 'b98dd42334a9bfbea0d1a92f23b69563.jpg', 'b98dd42334a9bfbea0d1a92f23b69563.jpg', 'b98dd42334a9bfbea0d1a92f23b69563.jpg', '', '', '2020-12-11 08:20:46'),
(20, 0, 0, 'lcd', 'Dell', 19000, 2000, 0, 2, '2020-12-11', 'Abbreviated LCD, liquid crystal display is a flat, thin display device that has replaced the older CRT display. LCD provides better picture quality and support for large resolutions.\r\n\r\nGenerally, LCD refers to a type of monitor utilizing the LCD technology, but also flat-screen displays like those in laptops, calculators, digital cameras, digital watches, and other similar devices.\r\n\r\n', 'LG-22-28-LG4540-LED-LCD-TV-AMZN-xxx-58ceff565f9b581d726af2ca-b12a1544bfda41418aaaf0afb6aa0375.jpg', 'LG-22-28-LG4540-LED-LCD-TV-AMZN-xxx-58ceff565f9b581d726af2ca-b12a1544bfda41418aaaf0afb6aa0375.jpg', 'LG-22-28-LG4540-LED-LCD-TV-AMZN-xxx-58ceff565f9b581d726af2ca-b12a1544bfda41418aaaf0afb6aa0375.jpg', '', '', '2020-12-11 01:50:41'),
(21, 0, 0, 'lcd', 'Dell', 19000, 20000, 0, 2, '2020-12-11', 'Abbreviated LCD, liquid crystal display is a flat, thin display device that has replaced the older CRT display. LCD provides better picture quality and support for large resolutions.\r\n\r\nGenerally, LCD refers to a type of monitor utilizing the LCD technology, but also flat-screen displays like those in laptops, calculators, digital cameras, digital watches, and other similar devices.', 'LG-22-28-LG4540-LED-LCD-TV-AMZN-xxx-58ceff565f9b581d726af2ca-b12a1544bfda41418aaaf0afb6aa0375.jpg', 'LG-22-28-LG4540-LED-LCD-TV-AMZN-xxx-58ceff565f9b581d726af2ca-b12a1544bfda41418aaaf0afb6aa0375.jpg', 'LG-22-28-LG4540-LED-LCD-TV-AMZN-xxx-58ceff565f9b581d726af2ca-b12a1544bfda41418aaaf0afb6aa0375.jpg', '', '', '2020-12-11 01:52:31'),
(22, 0, 0, 'Keyboard', 'apple', 150, 190, 10, 50, '2020-12-13', 'Its a keyboard of apple company', '130838636_698224541115347_71153212658451123_n.jpg', '130838636_698224541115347_71153212658451123_n.jpg', '130838636_698224541115347_71153212658451123_n.jpg', '', '', '2020-12-13 05:54:14'),
(23, 0, 0, 'Macbook ', 'Apple', 150000, 155000, 152000, 5, '2020-12-14', 'Apple MacBook Pro is a macOS laptop with a 13.30-inch display that has a resolution of 2560x1600 pixels. It is powered by a Core i5 processor and it comes with 12GB of RAM. The Apple MacBook Pro packs 512GB of SSD storage.', 'moran-8cMPxOqkLE8-unsplash.jpg', 'andri-klopfenstein-I0oPzzc6KT8-unsplash.jpg', 'unsplash-5-KmbSe5ivg-unsplash.jpg', '', '', '2020-12-14 05:32:24'),
(26, 0, 0, 'Iphone', 'Apple', 75000, 76000, 0, 10, '2020-12-17', 'Apple announced the iPhone 12 at its October 2020 event.', 'shiwa-id-F_cfF1uX7qY-unsplash.jpg', 'mika-baumeister-C4wFBBXRyyE-unsplash.jpg', 'mika-baumeister-4xChyRlbyWM-unsplash.jpg', '', '', '2020-12-17 08:08:52'),
(28, 0, 2, 'Nike Shoes', 'Nike', 25000, 26000, 25500, 10, '2020-12-17', 'Nike Shoes For Boys And Mens Are Available', 'jeremy-alford-k7FCLEG0k2g-unsplash.jpg', 'taylor-smith-aDZ5YIuedQg-unsplash.jpg', 'taylor-smith-NtRoxCiX8vc-unsplash.jpg', '', '', '2020-12-17 09:23:54'),
(29, 0, 4, 'Jeans Pents', 'Satara', 600, 750, 730, 10, '2020-12-21', 'Jeans Pents for Kids and mens are available', 'john-karlo-mendoza-hd-9J-bbe8o-unsplash.jpg', 'jeremy-alford-k7FCLEG0k2g-unsplash.jpg', 'taylor-smith-aDZ5YIuedQg-unsplash.jpg', 'FF0000', 'm', '2020-12-21 03:47:42'),
(31, 32, 3, 'Grocery', 'Grow', 190, 210, 0, 10, '2020-12-25', 'Grocery', 'basket-918416_1920.jpg', 'klipartz.com.png', 'maksim-larin-NOpsC3nWTzY-unsplash.jpg', 'FFFFFF', 's', '2020-12-21 08:01:11');

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `id` int(11) NOT NULL,
  `role` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`id`, `role`, `name`, `email`, `password`, `added_on`) VALUES
(5, 'admin', 'Admin', 'admin@gmail.com', 'admin', '2020-12-03 04:18:36'),
(6, 'supervisor', 'new supervisor', 'supervisor@gmail.com', 'supervisor', '2020-12-11 12:09:11'),
(30, 'user', 'new user', 'user@gmail.com', 'user', '2020-12-03 06:46:20'),
(31, 'employee', 'new employee', 'employee@gmail.com', 'employee', '2020-12-03 06:47:06'),
(32, 'admin', 'new admin', 'admin@gmail.com', 'admin', '2020-12-03 06:47:28'),
(33, 'user', 'sameed', 'sameed.fiji@gmail.com', 'sameed', '2020-12-10 07:08:30'),
(34, 'user', 'saud', 'saud.fiji@gmail.com', 'saud', '2020-12-10 07:12:22'),
(35, 'user', 'saad', 'saaad.fiji@gmail.com', 'SAADMAJID', '2020-12-11 04:41:42'),
(36, 'user', 'new saad', 'new.saaad@gmail.com', 'SAADMAJID', '2020-12-12 12:31:43'),
(40, 'user', 'resha', 'resha.fiji@gmail.com', 'resha', '2020-12-12 12:36:17'),
(51, 'user', 'M Saad', 'saaad.fiji@gmail.com', 'SAADMAJID', '2020-12-12 01:12:12'),
(52, 'user', 'saaad.fiji@gmail.com', 'saaad.fiji@gmail.com', 'SAADMAJID', '2020-12-12 01:19:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cate_attribute`
--
ALTER TABLE `cate_attribute`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cate_attribute`
--
ALTER TABLE `cate_attribute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
