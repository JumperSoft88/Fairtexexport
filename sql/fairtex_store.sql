-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 27, 2020 at 04:32 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fairtex_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `categoly`
--

CREATE TABLE `categoly` (
  `categoly_id` int(100) NOT NULL,
  `categoly_name` varchar(100) NOT NULL,
  `categoly_type` varchar(100) NOT NULL,
  `categoly_created_date` date NOT NULL,
  `categoly_modified_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `history_order`
--

CREATE TABLE `history_order` (
  `history_id` int(100) NOT NULL,
  `order_id` int(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `member_id` int(100) NOT NULL,
  `history_created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(100) NOT NULL,
  `member_id` int(100) NOT NULL,
  `order_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `order_details_id` int(100) NOT NULL,
  `order_detail_quantity` int(10) DEFAULT NULL,
  `order_detail_price` double DEFAULT NULL,
  `product_id` int(100) DEFAULT NULL,
  `product_size_id` int(100) DEFAULT NULL,
  `product_size_name` varchar(100) DEFAULT NULL,
  `product_color_id` int(100) DEFAULT NULL,
  `product_color_name` varchar(100) DEFAULT NULL,
  `order_id` int(100) DEFAULT NULL,
  `order_status` varchar(10) DEFAULT NULL,
  `order_discount` int(10) DEFAULT NULL,
  `order_created_date` date NOT NULL,
  `order_modified_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(100) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `product_detail` varchar(250) NOT NULL,
  `product_image_path` varchar(250) NOT NULL,
  `product_created_date` date NOT NULL,
  `product_modified_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_code`, `product_detail`, `product_image_path`, `product_created_date`, `product_modified_date`) VALUES
(1, 'AB1/P', 'AB1/P', 'description', 'file/image', '2019-11-03', '2019-11-03'),
(2, 'AB10', 'AB10', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(3, 'AB1', 'AB1', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(4, 'AB5', 'AB5', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(5, 'AB7', 'AB7', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(6, 'AB8', 'AB8', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(7, 'AR2', 'AR2', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(8, 'AS1', 'AS1', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(9, 'BAG2', 'BAG2', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(10, 'BAG4', 'BAG4', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(11, 'BAG6', 'BAG6', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(12, 'BAG7', 'BAG7', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(13, 'BAG8', 'BAG8', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(14, 'BAG9', 'BAG9', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(15, 'BGE1', 'BGE1', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(16, 'BGE2', 'BGE2', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(17, 'BGL1', 'BGL1', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(18, 'BGL2', 'BGL2', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(19, 'BGL3', 'BGL3', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(20, 'BGL6', 'BGL6', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(21, 'BGL7', 'BGL7', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(22, 'BGLG1', 'BGLG1', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(23, 'BGLG2', 'BGLG2', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(24, 'BGV1', 'BGV1', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(25, 'BGV11', 'BGV11', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(26, 'BGV12', 'BGV12', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(27, 'BGV13', 'BGV13', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(28, 'BGV14', 'BGV14', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(29, 'BGV14B', 'BGV14B', 'description', 'file/image', '2019-11-05', '2019-11-05');

-- --------------------------------------------------------

--
-- Table structure for table `product_color`
--

CREATE TABLE `product_color` (
  `product_color_id` int(100) NOT NULL,
  `product_size_id` int(100) DEFAULT NULL,
  `product_color_code` varchar(100) DEFAULT NULL,
  `product_color_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_color`
--

INSERT INTO `product_color` (`product_color_id`, `product_size_id`, `product_color_code`, `product_color_name`) VALUES
(1, 2, 'BK', 'Black');

-- --------------------------------------------------------

--
-- Table structure for table `product_non_size`
--

CREATE TABLE `product_non_size` (
  `product_non_id` int(100) NOT NULL,
  `product_id` int(100) DEFAULT NULL,
  `product_non_color_code` varchar(100) DEFAULT NULL,
  `product_non_color_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product_size`
--

CREATE TABLE `product_size` (
  `product_size_id` int(100) NOT NULL,
  `product_size_name` varchar(10) DEFAULT NULL,
  `product_id` int(100) DEFAULT NULL,
  `product_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_size`
--

INSERT INTO `product_size` (`product_size_id`, `product_size_name`, `product_id`, `product_name`) VALUES
(1, 'M', 1, 'AB1/P'),
(2, 'S', 1, 'AB1/P'),
(3, 'L', 1, 'AB1/P'),
(4, 'XL', 1, 'AB1/P'),
(5, 'S', 2, 'AB10'),
(6, 'S', 2, 'AB10'),
(7, 'M', 2, 'AB10'),
(8, 'L', 2, 'AB10'),
(9, 'XL', 2, 'AB10'),
(10, 'XS', 3, 'AB1'),
(11, 'S', 3, 'AB1'),
(12, 'M', 3, 'AB1'),
(13, 'L', 3, 'AB1'),
(14, 'XL', 3, 'AB1'),
(15, 'XXL', 3, 'AB1'),
(16, 'XXXL', 3, 'AB1'),
(17, 'S', 4, 'AB5'),
(18, 'M', 4, 'AB5'),
(19, 'L', 4, 'AB5'),
(20, 'XL', 4, 'AB5');

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `promotion_id` int(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `promotion_discount` int(10) NOT NULL,
  `promotion_created_date` date NOT NULL,
  `promotion_modified_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `member_id` int(11) NOT NULL,
  `member_username` varchar(100) NOT NULL,
  `member_password` varchar(100) NOT NULL,
  `member_type_price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`member_id`, `member_username`, `member_password`, `member_type_price`) VALUES
(1, 'cust0006', 'pwd0006', 'USD-01'),
(2, 'cust0008', 'pwd0008', 'USD-01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(100) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `product_detail` varchar(250) NOT NULL,
  `product_image_path` varchar(250) NOT NULL,
  `product_created_date` date NOT NULL,
  `product_modified_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `product_code`, `product_detail`, `product_image_path`, `product_created_date`, `product_modified_date`) VALUES
(1, 'AB1/P', 'AB1/P', 'description', 'file/image', '2019-11-03', '2019-11-03'),
(2, 'AB10', 'AB10', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(3, 'AB1', 'AB1', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(4, 'AB5', 'AB5', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(5, 'AB7', 'AB7', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(6, 'AB8', 'AB8', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(7, 'AR2', 'AR2', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(8, 'AS1', 'AS1', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(9, 'BAG2', 'BAG2', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(10, 'BAG4', 'BAG4', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(11, 'BAG6', 'BAG6', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(12, 'BAG7', 'BAG7', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(13, 'BAG8', 'BAG8', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(14, 'BAG9', 'BAG9', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(15, 'BGE1', 'BGE1', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(16, 'BGE2', 'BGE2', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(17, 'BGL1', 'BGL1', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(18, 'BGL2', 'BGL2', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(19, 'BGL3', 'BGL3', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(20, 'BGL6', 'BGL6', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(21, 'BGL7', 'BGL7', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(22, 'BGLG1', 'BGLG1', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(23, 'BGLG2', 'BGLG2', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(24, 'BGV1', 'BGV1', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(25, 'BGV11', 'BGV11', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(26, 'BGV12', 'BGV12', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(27, 'BGV13', 'BGV13', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(28, 'BGV14', 'BGV14', 'description', 'file/image', '2019-11-05', '2019-11-05'),
(29, 'BGV14B', 'BGV14B', 'description', 'file/image', '2019-11-05', '2019-11-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoly`
--
ALTER TABLE `categoly`
  ADD PRIMARY KEY (`categoly_id`);

--
-- Indexes for table `history_order`
--
ALTER TABLE `history_order`
  ADD PRIMARY KEY (`history_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_color`
--
ALTER TABLE `product_color`
  ADD PRIMARY KEY (`product_color_id`);

--
-- Indexes for table `product_non_size`
--
ALTER TABLE `product_non_size`
  ADD PRIMARY KEY (`product_non_id`);

--
-- Indexes for table `product_size`
--
ALTER TABLE `product_size`
  ADD PRIMARY KEY (`product_size_id`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`promotion_id`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoly`
--
ALTER TABLE `categoly`
  MODIFY `categoly_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history_order`
--
ALTER TABLE `history_order`
  MODIFY `history_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `order_details_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `product_color`
--
ALTER TABLE `product_color`
  MODIFY `product_color_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_non_size`
--
ALTER TABLE `product_non_size`
  MODIFY `product_non_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_size`
--
ALTER TABLE `product_size`
  MODIFY `product_size_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `promotion_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
