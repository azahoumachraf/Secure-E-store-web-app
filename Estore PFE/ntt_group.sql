-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2018 at 12:01 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ntt_group`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `id` int(11) NOT NULL,
  `gamil` varchar(255) NOT NULL,
  `mobile` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usur_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`id`, `gamil`, `mobile`, `password`, `usur_name`) VALUES
(1, 'enamul807849@gmail.com', 1796351081, 'rw_admin.com', 'rw_admin');

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `card_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL DEFAULT '0',
  `buy_usur_id` int(11) NOT NULL,
  `compleate_order` int(11) NOT NULL DEFAULT '0',
  `p_name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `p_des` text NOT NULL,
  `p_price` int(11) NOT NULL,
  `p_image` varchar(255) NOT NULL,
  `c_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`card_id`, `author_id`, `p_id`, `u_id`, `buy_usur_id`, `compleate_order`, `p_name`, `quantity`, `p_des`, `p_price`, `p_image`, `c_date`) VALUES
(618, 1, 25, 19, 19, 1, 'It is good product', 1, '<p>sdfsdafsd</p>', 1000000, 'upload/b4f1f9e89c.jpg', '2018-07-26'),
(619, 19, 32, 19, 19, 1, 'Bah sundur', 1, 'It is good option of the good option', 2540, 'upload/3dd75c1a58.png', '2018-07-26'),
(620, 1, 25, 19, 19, 1, 'It is good product', 1, '<p>sdfsdafsd</p>', 1000000, 'upload/b4f1f9e89c.jpg', '2018-07-26'),
(621, 1, 25, 19, 19, 1, 'It is good product', 1, '<p>sdfsdafsd</p>', 1000000, 'upload/b4f1f9e89c.jpg', '2018-07-26'),
(622, 1, 25, 19, 19, 1, 'It is good product', 1, '<p>sdfsdafsd</p>', 1000000, 'upload/b4f1f9e89c.jpg', '2018-07-26'),
(623, 1, 25, 19, 19, 1, 'It is good product', 1, '<p>sdfsdafsd</p>', 1000000, 'upload/b4f1f9e89c.jpg', '2018-07-26'),
(624, 19, 32, 19, 19, 1, 'Bah sundur', 1, 'It is good option of the good option', 2540, 'upload/3dd75c1a58.png', '2018-07-26'),
(625, 19, 32, 19, 19, 1, 'Bah sundur', 1, 'It is good option of the good option', 2540, 'upload/3dd75c1a58.png', '2018-07-26'),
(626, 19, 32, 19, 19, 1, 'Bah sundur', 1, 'It is good option of the good option', 2540, 'upload/3dd75c1a58.png', '2018-07-26'),
(627, 19, 32, 19, 19, 1, 'Bah sundur', 1, 'It is good option of the good option', 2540, 'upload/3dd75c1a58.png', '2018-07-26'),
(628, 19, 32, 19, 19, 1, 'Bah sundur', 1, 'It is good option of the good option', 2540, 'upload/3dd75c1a58.png', '2018-07-26'),
(629, 19, 32, 19, 19, 1, 'Bah sundur', 7, 'It is good option of the good option', 2540, 'upload/3dd75c1a58.png', '2018-07-26'),
(630, 1, 23, 19, 19, 1, 'It is good product', 1, '<p>sdfsdafsd</p>', 1000000, 'upload/42a4262099.jpg', '2018-07-26');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `categorys` varchar(255) NOT NULL,
  `cat_icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categorys`, `cat_icon`) VALUES
(22, 'à¦•à¦¬à§à¦¤à¦°à§‡à¦° à¦šà¦¿à¦•à¦¿à§Žà¦¸à¦¾', 'fas fa-pills'),
(23, 'à¦œà§‡à¦²à¦¾ à¦­à¦¿à¦¤à§à¦¤à¦¿à¦• à¦•à¦¬à§à¦¤à¦° à¦¸à¦®à§‚à¦¹', 'fas fa-globe-asia'),
(24, 'à¦•à¦¬à§à¦¤à¦°à§‡à¦° à¦•à§à¦°à§Ÿ à¦¬à¦¿à¦•à§à¦°à§Ÿ à¦•à§‡à¦¨à§à¦¦à§à¦°', 'fas fa-shopping-cart'),
(25, 'à¦•à¦¬à§à¦¤à¦°à§‡à¦° à¦”à¦·à¦§ à¦¬à¦¿à¦•à§à¦°à§Ÿ à¦•à§‡à¦¨à§à¦¦à§à¦°', 'fas fa-hospital'),
(26, 'MNTT-AGRO', 'far fa-building'),
(27, 'MNTT_AGRECULTURE', 'fab fa-pagelines');

-- --------------------------------------------------------

--
-- Table structure for table `live_chat`
--

CREATE TABLE `live_chat` (
  `chat_id` int(11) NOT NULL,
  `cleant_id` int(11) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `reciver` varchar(255) NOT NULL,
  `massage` text NOT NULL,
  `chat_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `live_chat`
--

INSERT INTO `live_chat` (`chat_id`, `cleant_id`, `sender`, `reciver`, `massage`, `chat_date`) VALUES
(30, 0, 'admin', 'Md Enamul haque', ' kemon asen', '2018-07-25 06:50:03'),
(43, 0, 'admin', 'Md Enamul haque', 'valo asi', '2018-07-26 11:47:27'),
(44, 16, 'admin', 'admin', ' ti naki', '2018-07-26 11:48:44'),
(45, 16, 'Md Enamul haque', 'admin', ' hmm go', '2018-07-26 11:48:50'),
(46, 16, 'admin', 'admin', 'hi', '2018-07-26 11:50:18'),
(47, 16, 'Md Enamul haque', 'admin', 'hmsadf saldjfhlasd fhasdljf hasljkhflsadkj fhlasdkjf hoasdkjf', '2018-07-26 11:59:35'),
(48, 0, 'Md Enamul haque', 'admin', ' sadfasdfasdsdafsadfsadfsdafasdfsadf', '2018-07-26 11:59:48'),
(49, 0, 'Md Enamul haque', 'admin', 'mehedi', '2018-07-26 12:06:14'),
(50, 15, 'monen', 'admin', ' sdfasdf', '2018-07-26 12:06:18'),
(51, 0, 'Md Enamul haque', 'admin', 'ti na ki go', '2018-07-26 12:08:58'),
(52, 0, 'Md Enamul haque', 'admin', 'hi', '2018-07-26 12:18:27'),
(53, 0, 'Md Enamul haque', 'admin', ' sdfsadf', '2018-07-26 12:18:32'),
(54, 16, 'Md Enamul haque', 'admin', ' sdfasd', '2018-07-26 12:18:34'),
(55, 0, 'admin', 'Md Enamul haque', 'à¦†à¦®à¦¾à¦° à¦¸à§‹à¦¨à¦¾à¦° à¦¬à¦¾à¦‚à¦²à¦¾ à¦†à¦®à¦¿ à¦¤à§‹à¦®à¦¾à¦•à§‡ à¦­à¦¾à¦² à¦¬à¦¾à¦¸à¦¿', '2018-07-26 12:21:13'),
(56, 0, 'Md Enamul haque', 'admin', 'higo', '2018-07-26 05:19:55'),
(57, 16, 'Md Enamul haque', 'admin', 'ti naki', '2018-07-26 06:29:48'),
(58, 16, 'Md Enamul haque', 'admin', ' ami valo asi', '2018-07-26 06:29:52'),
(59, 16, 'Md Enamul haque', 'admin', ' no problem', '2018-07-26 06:29:59'),
(60, 16, 'Md Enamul haque', 'admin', ' thak no problem', '2018-07-26 06:30:30'),
(61, 16, 'admin', '16', 'hi', '2018-07-26 07:04:22'),
(62, 16, 'admin', '16', 'kemon aso', '2018-07-26 07:04:48'),
(63, 16, 'admin', '16', 'ami valo asi', '2018-07-26 07:04:57'),
(64, 16, 'Md Enamul haque', 'admin', ' samae', '2018-07-26 07:05:14'),
(65, 16, 'admin', '16', 'thaken', '2018-07-26 07:05:31'),
(66, 16, 'Md Enamul haque', 'admin', 'wow good', '2018-07-26 07:06:14'),
(67, 16, 'Md Enamul haque', 'admin', ' kemon asen', '2018-07-26 07:07:12'),
(68, 16, 'admin', '16', 'valo asi', '2018-07-26 07:07:20'),
(69, 16, 'Md Enamul haque', 'admin', ' thaken no probem', '2018-07-26 07:07:31'),
(70, 16, 'admin', '16', 'thaken no prolem', '2018-07-26 07:10:20'),
(71, 16, 'Md Enamul haque', 'admin', 'ti naki babo', '2018-07-26 07:10:44'),
(72, 16, 'admin', '16', 'hmmm babu', '2018-07-26 07:10:53'),
(73, 16, 'Md Enamul haque', 'admin', ' wow ki', '2018-07-26 07:11:01'),
(74, 16, 'admin', '16', 'bad de to ao goo', '2018-07-26 07:11:10');

-- --------------------------------------------------------

--
-- Table structure for table `massage`
--

CREATE TABLE `massage` (
  `massage_id` int(11) NOT NULL,
  `con_name` varchar(255) NOT NULL,
  `con_gen` varchar(255) NOT NULL,
  `con_email` varchar(255) NOT NULL,
  `con_company_name` varchar(255) NOT NULL,
  `con_mobile_no` int(11) NOT NULL,
  `con_massage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `massage`
--

INSERT INTO `massage` (`massage_id`, `con_name`, `con_gen`, `con_email`, `con_company_name`, `con_mobile_no`, `con_massage`) VALUES
(2, 'Md Enamul Haque', 'male', 'enamul@gmail.com', 'Bd jobs', 1796351081, 'I am successfull ');

-- --------------------------------------------------------

--
-- Table structure for table `product_list`
--

CREATE TABLE `product_list` (
  `p_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_cat` varchar(255) NOT NULL,
  `p_brand` varchar(255) NOT NULL,
  `p_des` text NOT NULL,
  `p_price` float NOT NULL,
  `is_approved` int(11) NOT NULL DEFAULT '0',
  `p_discount` float NOT NULL,
  `offer` int(11) NOT NULL,
  `sub_category` varchar(255) NOT NULL,
  `offer_price` float NOT NULL,
  `p_img` varchar(255) NOT NULL,
  `upload_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_list`
--

INSERT INTO `product_list` (`p_id`, `author_id`, `p_name`, `p_cat`, `p_brand`, `p_des`, `p_price`, `is_approved`, `p_discount`, `offer`, `sub_category`, `offer_price`, `p_img`, `upload_date`) VALUES
(23, 1, 'It is good product', 'MNTT-AGRO', 'bangladeshs', '<p>sdfsdafsd</p>', 1000000, 1, 0, 0, '', 0, 'upload/42a4262099.jpg', '2018-07-23'),
(24, 1, 'It is good product', 'MNTT-AGRO', 'bangladeshs', '<p>sdfsdafsd</p>', 1000000, 1, 0, 0, '', 0, 'upload/c91999247c.jpg', '2018-07-23'),
(25, 1, 'It is good product', 'MNTT-AGRO', 'bangladeshs', '<p>sdfsdafsd</p>', 1000000, 1, 0, 0, '<br />\r\n<b>Notice</b>:  Undefined index: sub_category in <b>E:enamulhtdocsmntt\rw_adminproductadd.php</b> on line <b>78</b><br />\r\n', 0, 'upload/b4f1f9e89c.jpg', '2018-07-23'),
(26, 19, 'Bah sundur', 'à¦œà§‡à¦²à¦¾ à¦­à¦¿à¦¤à§à¦¤à¦¿à¦• à¦•à¦¬à§à¦¤à¦° à¦¸à¦®à§‚à¦¹', 'bangladesh', 'It is good option of the good option', 2540, 1, 0, 0, 'Dhaka office', 0, 'upload/d2d413a2e1.png', '2018-07-23'),
(27, 19, 'Bah sundur', 'à¦œà§‡à¦²à¦¾ à¦­à¦¿à¦¤à§à¦¤à¦¿à¦• à¦•à¦¬à§à¦¤à¦° à¦¸à¦®à§‚à¦¹', 'bangladesh', 'It is good option of the good option', 2540, 0, 0, 0, 'Dhaka office', 0, 'upload/7b87cc1c5b.png', '2018-07-23'),
(28, 19, 'Bah sundur', 'à¦œà§‡à¦²à¦¾ à¦­à¦¿à¦¤à§à¦¤à¦¿à¦• à¦•à¦¬à§à¦¤à¦° à¦¸à¦®à§‚à¦¹', 'bangladesh', 'It is good option of the good option', 2540, 0, 0, 0, 'Dhaka office', 0, 'upload/fa6372b46e.png', '2018-07-23'),
(30, 19, 'Bah sundur', 'à¦œà§‡à¦²à¦¾ à¦­à¦¿à¦¤à§à¦¤à¦¿à¦• à¦•à¦¬à§à¦¤à¦° à¦¸à¦®à§‚à¦¹', 'bangladesh', 'It is good option of the good option', 2540, 1, 0, 0, 'Dhaka office', 0, 'upload/a43f515993.png', '2018-07-23'),
(31, 19, 'Bah sundur', 'à¦œà§‡à¦²à¦¾ à¦­à¦¿à¦¤à§à¦¤à¦¿à¦• à¦•à¦¬à§à¦¤à¦° à¦¸à¦®à§‚à¦¹', 'bangladesh', 'It is good option of the good option', 2540, 1, 0, 0, 'Dhaka office', 0, 'upload/b41084e06a.png', '2018-07-23'),
(32, 19, 'Bah sundur', 'à¦œà§‡à¦²à¦¾ à¦­à¦¿à¦¤à§à¦¤à¦¿à¦• à¦•à¦¬à§à¦¤à¦° à¦¸à¦®à§‚à¦¹', 'bangladesh', 'It is good option of the good option', 2540, 1, 0, 0, 'Dhaka office', 0, 'upload/3dd75c1a58.png', '2018-07-23');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `sub_cat_id` int(11) NOT NULL,
  `cat_id` varchar(55) NOT NULL,
  `sub_category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_cat_id`, `cat_id`, `sub_category`) VALUES
(36, 'à¦•à¦¬à§à¦¤à¦°à§‡à¦° à¦šà¦¿à¦•à¦¿à§Žà¦¸à¦¾', 'Dhaka office'),
(37, 'à¦•à¦¬à§à¦¤à¦°à§‡à¦° à¦šà¦¿à¦•à¦¿à§Žà¦¸à¦¾', 'Naogaon office'),
(38, 'à¦•à¦¬à§à¦¤à¦°à§‡à¦° à¦šà¦¿à¦•à¦¿à§Žà¦¸à¦¾', 'Bogora Office'),
(39, 'à¦•à¦¬à§à¦¤à¦°à§‡à¦° à¦šà¦¿à¦•à¦¿à§Žà¦¸à¦¾', 'Dinajpur Office');

-- --------------------------------------------------------

--
-- Table structure for table `usur_info`
--

CREATE TABLE `usur_info` (
  `u_id` int(11) NOT NULL,
  `a_type` varchar(255) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `d_birth` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `job_position` varchar(255) NOT NULL,
  `m_number` int(11) NOT NULL,
  `address` text NOT NULL,
  `zip_code` int(11) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `block` int(11) NOT NULL DEFAULT '0',
  `com_name` varchar(255) CHARACTER SET utf32 NOT NULL,
  `com_reg_no` varchar(255) NOT NULL,
  `com_fax_no` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `join_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usur_info`
--

INSERT INTO `usur_info` (`u_id`, `a_type`, `u_name`, `d_birth`, `gender`, `job_position`, `m_number`, `address`, `zip_code`, `city`, `email`, `password`, `block`, `com_name`, `com_reg_no`, `com_fax_no`, `join_date`) VALUES
(16, '', 'Md Enamul haque', '0000-00-00', '', '', 1796351081, 'Dhaka', 12345, NULL, 'enamul807849@gmail.com', '12345p', 0, '', '', '', '2018-07-18'),
(19, '', 'Md Enamul haque', '0000-00-00', '', '', 1796351081, 'Dhaka', 12345, NULL, 'enamul807849@gmail.com', '1234', 0, '', '', '', '2018-07-18'),
(20, '', 'Md Enamul haque', '0000-00-00', '', '', 1796351081, 'Dhaka', 12345, NULL, 'enamul807849@gmail.com', '123', 0, '', '', '', '2018-07-18'),
(21, '', 'Md Enamul haque', '0000-00-00', '', '', 1796351081, 'Dhaka', 12345, NULL, 'enamul807849@gmail.com', '12', 0, '', '', '', '2018-07-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`card_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `live_chat`
--
ALTER TABLE `live_chat`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `massage`
--
ALTER TABLE `massage`
  ADD PRIMARY KEY (`massage_id`);

--
-- Indexes for table `product_list`
--
ALTER TABLE `product_list`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sub_cat_id`);

--
-- Indexes for table `usur_info`
--
ALTER TABLE `usur_info`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `card_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=631;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `live_chat`
--
ALTER TABLE `live_chat`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `massage`
--
ALTER TABLE `massage`
  MODIFY `massage_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_list`
--
ALTER TABLE `product_list`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sub_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `usur_info`
--
ALTER TABLE `usur_info`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
