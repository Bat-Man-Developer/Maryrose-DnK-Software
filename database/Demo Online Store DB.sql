-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql202.byetcluster.com
-- Generation Time: Feb 24, 2024 at 10:15 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_34836041_maryrosedatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `fldadminid` int(11) NOT NULL,
  `fldadminname` varchar(100) NOT NULL,
  `fldadminemail` varchar(150) NOT NULL,
  `fldadminposition` varchar(250) NOT NULL,
  `fldadmindepartment` varchar(250) NOT NULL,
  `fldadminpassword` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`fldadminid`, `fldadminname`, `fldadminemail`, `fldadminposition`, `fldadmindepartment`, `fldadminpassword`) VALUES
(2, 'Geust', 'geust@gmail.com', 'Visitor', 'Tourism', '12345678'),
(3, 'Kay Mudau', 'kkay.mudau008@gmail.com', 'Full Stack Developer', 'IT Department', 'OHLord.01');

-- --------------------------------------------------------

--
-- Table structure for table `customerbillingaddress`
--

CREATE TABLE `customerbillingaddress` (
  `fldbillingid` int(11) NOT NULL,
  `fldorderid` int(11) NOT NULL,
  `fldbillingfirstname` varchar(100) NOT NULL,
  `fldbillinglastname` varchar(100) NOT NULL,
  `fldbillingaddressline1` varchar(150) NOT NULL,
  `fldbillingaddressline2` varchar(150) NOT NULL,
  `fldbillingpostalcode` varchar(10) NOT NULL,
  `fldbillingcity` varchar(150) NOT NULL,
  `fldbillingcountry` varchar(150) NOT NULL,
  `fldbillingemail` varchar(150) NOT NULL,
  `fldbillingphonenumber` varchar(15) NOT NULL,
  `fldbillingidnumber` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customershippingaddress`
--

CREATE TABLE `customershippingaddress` (
  `fldshippingid` int(11) NOT NULL,
  `fldorderid` int(11) NOT NULL,
  `fldshippingfirstname` varchar(100) NOT NULL,
  `fldshippinglastname` varchar(100) NOT NULL,
  `fldshippingaddressline1` varchar(150) NOT NULL,
  `fldshippingaddressline2` varchar(150) NOT NULL,
  `fldshippingpostalcode` varchar(10) NOT NULL,
  `fldshippingcity` varchar(100) NOT NULL,
  `fldshippingcountry` varchar(100) NOT NULL,
  `fldshippingemail` varchar(150) NOT NULL,
  `fldshippingphonenumber` varchar(15) NOT NULL,
  `fldshippingdeliverycomment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `fldorderitemid` int(11) NOT NULL,
  `fldorderid` int(11) NOT NULL,
  `fldproductid` int(11) NOT NULL,
  `fldproductname` varchar(255) NOT NULL,
  `fldproductimage` varchar(255) NOT NULL,
  `fldproductspecialoffer` int(100) NOT NULL,
  `fldproductprice` decimal(6,2) NOT NULL,
  `fldproductquantity` int(11) NOT NULL,
  `fldshippingid` int(11) NOT NULL,
  `fldbillingidnumber` varchar(13) NOT NULL,
  `fldorderdate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `fldorderid` int(11) NOT NULL,
  `fldordercost` decimal(6,2) NOT NULL,
  `fldcouriercost` decimal(6,2) NOT NULL,
  `flddiscountcode` varchar(50) NOT NULL,
  `fldorderstatus` varchar(100) NOT NULL,
  `flduserid` int(11) NOT NULL,
  `fldshippingid` int(11) NOT NULL,
  `fldbillingidnumber` varchar(13) NOT NULL,
  `fldbillingphonenumber` varchar(15) NOT NULL,
  `fldshippingphonenumber` varchar(10) NOT NULL,
  `fldshippingcity` varchar(255) NOT NULL,
  `fldshippingcountry` varchar(100) NOT NULL,
  `fldshippingaddressline1` varchar(255) NOT NULL,
  `fldshippingaddressline2` varchar(150) NOT NULL,
  `fldorderdate` datetime NOT NULL DEFAULT current_timestamp(),
  `fldshippingdeliverycomment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `fldpaymentid` int(11) NOT NULL,
  `fldorderid` int(11) NOT NULL,
  `flduserid` int(11) NOT NULL,
  `fldtransactionid` varchar(250) NOT NULL,
  `fldpaymentdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `productreviews`
--

CREATE TABLE `productreviews` (
  `fldproductreviewid` int(11) NOT NULL,
  `fldproductid` int(11) NOT NULL,
  `flduserid` int(11) NOT NULL,
  `flduserfirstname` varchar(100) NOT NULL,
  `flduserlastname` varchar(100) NOT NULL,
  `fldusercountry` varchar(100) NOT NULL,
  `fldproductreviewcomment` text NOT NULL,
  `fldproductreviewdate` datetime NOT NULL DEFAULT current_timestamp(),
  `fldproductreviewrating` varchar(100) NOT NULL,
  `flduseremail` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `fldproductid` int(11) NOT NULL,
  `fldproductname` varchar(100) NOT NULL,
  `fldproducttype` varchar(100) NOT NULL,
  `fldproductdescription` varchar(255) NOT NULL,
  `fldproductimage` varchar(255) NOT NULL,
  `fldproductimage1` varchar(255) NOT NULL,
  `fldproductimage2` varchar(255) NOT NULL,
  `fldproductimage3` varchar(255) NOT NULL,
  `fldproductimage4` varchar(255) NOT NULL,
  `fldproductimage5` varchar(255) NOT NULL,
  `fldproductimage6` varchar(255) NOT NULL,
  `fldproductprice` decimal(6,2) NOT NULL,
  `fldproductspecialoffer` int(2) NOT NULL,
  `fldproductcolorortype` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`fldproductid`, `fldproductname`, `fldproducttype`, `fldproductdescription`, `fldproductimage`, `fldproductimage1`, `fldproductimage2`, `fldproductimage3`, `fldproductimage4`, `fldproductimage5`, `fldproductimage6`, `fldproductprice`, `fldproductspecialoffer`, `fldproductcolorortype`) VALUES
(1, 'Mary Rose Pinotage Red Wine', 'pinotage', 'Indulge on Pinotage Wine on a sophisticated level. No under 18\'s and drink responsibly. Share your memories.', 'Standard Red Wine5.png', 'Standard Red Wine5.png', 'Standard Red Wine5.png', 'Standard Red Wine5.png', 'Standard Red Wine5.png', 'Standard Red Wine5.png', 'Standard Red Wine5.png', '119.99', 0, ''),
(2, 'Mary Rose Premium', 'pinotage', 'Indulge on the Premium Wine for a Taste Of Greatness. No under 18\'s and drink responsibly. Share your memories.', 'bottlepic3.png', 'bottlepic3.png', 'bottlepic3.png', 'bottlepic3.png', 'bottlepic3.png', 'bottlepic3.png', 'bottlepic3.png', '259.99', 0, ''),
(3, 'Mary Rose Premium Gold', 'pinotage', 'Indulge on the Premium Gold Wine for a Taste Of Excellence. No under 18\'s and drink responsibly. Share your memories.', 'bottlepic5.png', 'bottlepic5.png', 'bottlepic5.png', 'bottlepic5.png', 'bottlepic5.png', 'bottlepic5.png', 'bottlepic5.png', '499.99', 0, ''),
(4, 'Mary Rose Vintage Limited Edition', 'chardonnay', 'Indulge in an Exclusive Vintage Limited Edition for One of a Kind Moments. No under 18\'s and drink responsibly. Share your thoughts.', 'Vintage Limited.jpeg', 'Vintage Limited.jpeg', 'Vintage Limited.jpeg', 'Vintage Limited.jpeg', 'Vintage Limited.jpeg', 'Vintage Limited.jpeg', 'Vintage Limited.jpeg', '199.99', 0, ''),
(5, 'Mary Rose Vintage Blue', 'chardonnay', 'Indulge in the Exclusive Vintage Blue on an inexplicable level. No under 18\'s and drink responsibly. Share your thoughts.', 'Vintage blue.jpeg', 'Vintage blue.jpeg', 'Vintage blue.jpeg', 'Vintage blue.jpeg', 'Vintage blue.jpeg', 'Vintage blue.jpeg', 'Vintage blue.jpeg', '249.99', 0, ''),
(6, 'Mary Rose Vintage Original', 'chardonnay', 'Indulge in a Pinotage Wine on a sophisticated level. No under 18\'s and drink responsibly. Share your memories.', 'Vintage normal.jpeg', 'Vintage normal.jpeg', 'Vintage normal.jpeg', 'Vintage normal.jpeg', 'Vintage normal.jpeg', 'Vintage normal.jpeg', 'Vintage normal.jpeg', '149.99', 0, ''),
(7, 'Mary Rose Blue Edition', 'chardonnay', 'Indulge in the Exclusive Vintage Blue Wine on a sophisticated level. No under 18\'s and drink responsibly. Share your memories.', 'Vintage blue2.png', 'Vintage blue2.png', 'Vintage blue2.png', 'Vintage blue2.png', 'Vintage blue2.png', 'Vintage blue2.png', 'Vintage blue2.png', '299.99', 0, ''),
(9, 'Mary Rose Black Rose', 'pinotage', 'Indulge on Pinotage Wine on a sophisticated level. No under 18\'s and drink responsibly. Share your memories.', 'Black Mary Rose Red Wine.jfif', 'Black Mary Rose Red Wine.jfif', 'Black Mary Rose Red Wine.jfif', 'Black Mary Rose Red Wine.jfif', 'Black Mary Rose Red Wine.jfif', 'Black Mary Rose Red Wine.jfif', 'Black Mary Rose Red Wine.jfif', '699.00', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `fldtestimonialsid` int(11) NOT NULL,
  `fldtestimonialsfirstname` varchar(100) NOT NULL,
  `fldtestimonialslastname` varchar(100) NOT NULL,
  `fldtestimonialsemail` varchar(150) NOT NULL,
  `fldtestimonialspassword` varchar(150) NOT NULL,
  `fldtestimonialscomment` text NOT NULL,
  `fldtestimonialsimage` varchar(255) NOT NULL,
  `fldtestimonialsdate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `flduserid` int(11) NOT NULL,
  `flduserimage` varchar(255) NOT NULL,
  `flduserfirstname` varchar(100) NOT NULL,
  `flduserlastname` varchar(100) NOT NULL,
  `flduseraddressline1` varchar(150) NOT NULL,
  `flduseraddressline2` varchar(150) NOT NULL,
  `flduserpostalcode` varchar(10) NOT NULL,
  `fldusercity` varchar(150) NOT NULL,
  `fldusercountry` varchar(150) NOT NULL,
  `flduseremail` varchar(150) NOT NULL,
  `flduserphonenumber` varchar(15) NOT NULL,
  `flduseridnumber` varchar(13) NOT NULL,
  `flduserpassword` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`fldadminid`);

--
-- Indexes for table `customerbillingaddress`
--
ALTER TABLE `customerbillingaddress`
  ADD PRIMARY KEY (`fldbillingid`,`fldbillingidnumber`);

--
-- Indexes for table `customershippingaddress`
--
ALTER TABLE `customershippingaddress`
  ADD PRIMARY KEY (`fldshippingid`);

--
-- Indexes for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`fldorderitemid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`fldorderid`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`fldpaymentid`);

--
-- Indexes for table `productreviews`
--
ALTER TABLE `productreviews`
  ADD PRIMARY KEY (`fldproductreviewid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`fldproductid`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`fldtestimonialsid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`flduserid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `fldadminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customerbillingaddress`
--
ALTER TABLE `customerbillingaddress`
  MODIFY `fldbillingid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `customershippingaddress`
--
ALTER TABLE `customershippingaddress`
  MODIFY `fldshippingid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=243;

--
-- AUTO_INCREMENT for table `orderitems`
--
ALTER TABLE `orderitems`
  MODIFY `fldorderitemid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=330;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `fldorderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=238;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `fldpaymentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `productreviews`
--
ALTER TABLE `productreviews`
  MODIFY `fldproductreviewid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `fldproductid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `fldtestimonialsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `flduserid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
