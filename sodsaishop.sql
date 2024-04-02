-- phpMyAdmin SQL Dump
-- version 5.0.4deb2+deb11u1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 04, 2023 at 04:53 AM
-- Server version: 10.5.21-MariaDB-0+deb11u1
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sodsaishop`
--
CREATE DATABASE IF NOT EXISTS `sodsaishop` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `sodsaishop`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(7) NOT NULL,
  `a_fullname` varchar(255) NOT NULL,
  `a_email` varchar(200) NOT NULL,
  `a_password` varchar(200) NOT NULL,
  `a_tel` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_fullname`, `a_email`, `a_password`, `a_tel`) VALUES
(1, 'Admin', 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 931037787);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(7) NOT NULL,
  `c_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `c_name`) VALUES
(1, 'adidas'),
(2, 'nike'),
(3, 'champion');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `co_id` int(4) NOT NULL,
  `co_name` varchar(200) NOT NULL,
  `co_email` varchar(200) NOT NULL,
  `co_tel` int(10) NOT NULL,
  `co_mess` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`co_id`, `co_name`, `co_email`, `co_tel`, `co_mess`) VALUES
(1, 'aaaaaaaaa', 'admin@gmail.com', 995876783, 'sssssssssssss');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `oid` int(4) UNSIGNED ZEROFILL NOT NULL,
  `ototal` int(50) NOT NULL,
  `odate` datetime NOT NULL,
  `m_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`oid`, `ototal`, `odate`, `m_id`) VALUES
(0014, 4000, '2023-10-22 02:47:58', 1),
(0015, 9179, '2023-10-22 02:52:27', 2),
(0016, 4000, '2023-10-24 03:50:07', 1),
(0017, 5000, '2023-10-24 03:57:35', 1),
(0018, 13000, '2023-10-24 03:59:46', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders_detail`
--

CREATE TABLE `orders_detail` (
  `od_id` int(4) NOT NULL,
  `oid` int(4) UNSIGNED ZEROFILL NOT NULL,
  `pid` int(10) NOT NULL,
  `item` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `orders_detail`
--

INSERT INTO `orders_detail` (`od_id`, `oid`, `pid`, `item`) VALUES
(19, 0014, 2, 1),
(20, 0015, 2, 1),
(21, 0015, 18, 1),
(22, 0015, 26, 1),
(23, 0016, 2, 1),
(24, 0017, 3, 1),
(25, 0018, 2, 1),
(26, 0018, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(7) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_detail` text NOT NULL,
  `p_price` int(7) NOT NULL,
  `p_picture` varchar(200) NOT NULL,
  `p_type` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_name`, `p_detail`, `p_price`, `p_picture`, `p_type`) VALUES
(1, 'ADICOLOR CLASSICS ', '       รายละเอียด\r\n•	ทรงเรกูลาร์\r\n•	คอกลม แต่งผ้าริบ\r\n•	วัสดุหลัก: คอตตอนวาฟเฟิล 100%\r\n•	ผ้าริบ: คอตตอน 95% อีลาสเตน 1 x 1 ริบ 5%\r\n•	สร้างสรรค์ร่วมกับโครงการ Better Cotton\r\n•	สี: Clay Strata\r\n•	รหัสสินค้า: HS2080\r\n       ', 4500, 'jpg', 1),
(2, 'ADICOLOR CLASSICS (Clay Strata)', '      รายละเอียด\r\n• ทรงเรกูลาร์\r\n• คอกลม แต่งผ้าริบ\r\n• วัสดุหลัก: คอตตอนวาฟเฟิล 100%\r\n• ผ้าริบ: คอตตอน 95% อีลาสเตน 1 x 1 ริบ 5%      ', 4000, 'jpg', 1),
(3, 'ADICOLOR CLASSICS CUT LINE (Black)', '    รายละเอียด\r\n• ทรงหลวมคอกลม แต่งผ้าริบ\r\n• คอตตอน 52% โพลีเอสเตอร์รีไซเคิลดับเบิลนิต 48%\r\n• ปลายแขนและชายเสื้อแต่งผ้าริบ\r\n• ส่วนประกอบ 50% ของเส้นด้ายเป็นวัสดุ Parley Ocean Plastic\r\n• เครื่องแต่งกายชิ้นนี้มีวัสดุรีไซเคิลเป็นส่วนประกอบโดยรวมอย่างน้อย 40%    ', 5000, 'jpg', 1),
(4, 'ADICOLOR CLASSICS TREFOIL (Medium black Heather)', 'รายละเอียด\r\n• ทรงเรกูลาร์\r\n• คอกลม แต่งผ้าริบ\r\n• คอตตอนเฟรนช์เทอร์รีย์ 100%\r\n• ปลายแขนและชายเสื้อแต่งผ้าริบ\r\n• สร้างสรรค์ร่วมกับโครงการ Better Cotton', 3900, 'jpg', 1),
(5, 'ADICOLOR CLASSICS TREFOIL (Medium Grey Heather)', '  รายละเอียด\r\n• ทรงเรกูลาร์\r\n• คอกลม แต่งผ้าริบ\r\n• คอตตอนเฟรนช์เทอร์รีย์ 100%\r\n• ปลายแขนและชายเสื้อแต่งผ้าริบ\r\n• สร้างสรรค์ร่วมกับโครงการ Better Cotton  ', 3000, 'jpg', 1),
(6, 'ADICOLOR CLASSICS 3-STRIPES ( Arctic Fusion)', 'รายละเอียด\r\n• ทรงเรกูลาร์\r\n• คอกลม แต่งผ้าริบ\r\n• คอตตอน 70% ฟลีซโพลีเอสเตอร์รีไซเคิล 30%\r\n• ปลายแขนและชายเสื้อแต่งผ้าริบ\r\n• สร้างสรรค์ร่วมกับโครงการ Better Cotton', 5900, 'jpg', 1),
(7, 'ADICOLOR CONTEMPO (Black)', 'รายละเอียด\r\n• ทรงหลวม\r\n• คอกลม แต่งผ้าริบ\r\n• คอตตอนเฟรนช์เทอร์รีย์ออร์แกนิก 100%\r\n• เนื้อผ้าหนาเป็นพิเศษ\r\n• ปลายแขนและชายเสื้อแต่งผ้าริบ', 2500, 'jpg', 1),
(8, 'ALL SZN (Wonder Clay)', 'รายละเอียด\r\n• ทรงหลวม\r\n• คอกลม\r\n• คอตตอน 80% ฟลีซโพลีเอสเตอร์รีไซเคิล 20%\r\n• เนื้อผ้าขูดขน\r\n• ปลายแขนเสื้อแต่งผ้าริบ\r\n• แต่งกราฟิก adidas Sportswear\r\n• สร้างสรรค์ร่วมกับโครงการ Better Cotton', 3500, 'jpg', 1),
(9, 'CITY ESCAPE', 'รายละเอียด\r\n• ทรงหลวม\r\n• คอกลม แต่งผ้าริบ\r\n• คอตตอนเฟรนช์เทอร์รีย์ออร์แกนิก 100%\r\n• มีกระเป๋าซิปด้านข้าง\r\n• ปลายแขนและชายเสื้อแต่งผ้าริบ\r\n• สี: Blue Dawn', 3500, 'jpg', 1),
(10, 'ADICOLOR CLASSICS 3-STRIPES', 'รายละเอียด • ทรงเรกูลาร์\r\n• คอกลม แต่งผ้าริบ\r\n• คอตตอน 70% เฟรนช์เทอร์รีย์โพลีเอสเตอร์รีไซเคิล 30%\r\n• ปลายแขนและชายเสื้อแต่งผ้าริบ\r\n• สี: Victory Crimson', 5900, 'jpg', 1),
(11, '3-STRIPES (White)', 'รายละเอียด\r\n• ทรงหลวม\r\n• คอกลม\r\n• คอตตอนเฟรนช์เทอร์รีย์ 100%\r\n• ชายเสื้อมีเชือกรูดปรับกระชับ\r\n• สร้างสรรค์ร่วมกับโครงการ Better Cotton\r\n• สี: White', 4700, 'jpg', 1),
(12, '3-STRIPES (Black)', 'รายละเอียด\r\n• ทรงหลวม\r\n• คอกลม\r\n• คอตตอนเฟรนช์เทอร์รีย์ 100%\r\n• ชายเสื้อมีเชือกรูดปรับกระชับ\r\n• สร้างสรรค์ร่วมกับโครงการ Better Cotton\r\n• สี: Black', 4700, 'jpg', 1),
(13, 'Jordan Essentials (Black)', 'รายละเอียด\r\n• ช่วงตัว: คอตตอน 80%/โพลีเอสเตอร์ 20% จั๊มพ์: คอตตอน 97%/สแปนเดกซ์ 3%\r\n• โลโก้ Jumpman แบบปัก', 2499, 'jpg', 2),
(14, 'Jordan Essentials (Red)', 'รายละเอียด\r\n• ช่วงตัว: คอตตอน 80%/โพลีเอสเตอร์ 20% จั๊มพ์: คอตตอน 97%/สแปนเดกซ์ 3%\r\n• โลโก้ Jumpman แบบปัก', 3900, 'jpg', 2),
(15, 'Nike Sportswear Air', 'รายละเอียด\r\n• ป้ายธงแบบทอที่ตะเข็บด้านข้าง\r\n• ช่วงตัว: คอตตอน 100% จั๊มพ์: คอตตอน 97%/สแปนเดกซ์ 3%', 1990, 'jpg', 2),
(16, 'Nike Sportswear Trend (Black)', 'รายละเอียดสินค้า\r\n•ช่วงตัว: คอตตอน 100% จั๊มพ์: คอตตอน 97%/สแปนเดกซ์ 3%\r\n', 2300, 'jpg', 2),
(17, 'Nike Sportswear Trend (White)', 'รายละเอียด\r\n• ช่วงตัว: คอตตอน 100% จั๊มพ์: คอตตอน 97%/สแปนเดกซ์ 3%', 2500, 'jpg', 2),
(18, 'Nike SB', 'รายละเอียด\r\n• กระเป๋าเก็บของทรงป้ายการดูแลรักษาสินค้า\r\n• ช่วงตัว: คอตตอน 84%/โพลีเอสเตอร์ 16% จั๊มพ์: คอตตอน 98%/สแปนเดกซ์ 2%', 2699, 'jpg', 2),
(19, 'Nike Solo Swoosh (Black)', 'รายละเอียด\r\n• คอตตอน 88%/โพลีเอสเตอร์ 12%\r\n• ซักเครื่อง\r\n• นำเข้าจากประเทศจีน', 3500, 'jpg', 2),
(20, 'Nike Solo Swoosh (Grey)', 'รายละเอียด\r\n• คอตตอน 88%/โพลีเอสเตอร์ 12%\r\n• ซักเครื่อง\r\n• นำเข้าจากประเทศจีน', 4500, 'jpg', 2),
(21, 'Liverpool FC Club Fleece', 'รายละเอียด\r\n• คอตตอน 80%/โพลีเอสเตอร์ 20%\r\n• ซักเครื่อง\r\n• นำเข้าจากประเทศจีน\r\n• สีที่แสดง: Gym Red/ขาว', 3999, 'jpg', 2),
(22, 'Nike Dri-FIT', 'รายละเอียด\r\n• ยางยืดที่ชายเสื้อและข้อมือ\r\n• กราฟิกแบบสกรีนลายที่ตรงกลางด้านหน้า\r\n• Swoosh ที่คอเสื้อตรงกลางด้านหลัง\r\n• คอตตอน 61%/โพลีเอสเตอร์ 39%\r\n• ซักเครื่อง\r\n• นำเข้าจากประเทศจีน\r\n• สีที่แสดง: ดำ', 4999, 'jpg', 2),
(23, 'Jordan Brooklyn Fleece', 'รายละเอียดสินค้า\r\n•โลโก้ Jumpman แบบปัก\r\n•จั๊มพ์ที่ข้อมือและขอบเอว\r\n•ช่วงตัว: คอตตอน 80%/โพลีเอสเตอร์ 20% จั๊มพ์: คอตตอน 97%/สแปนเดกซ์ 3%\r\n•ซักเครื่อง\r\n•นำเข้าจากประเทศจีน\r\n•สีที่แสดง: Sky J Light Purple/Desert/ขาว\r\n\r\n', 2900, 'jpg', 2),
(24, 'Nike SB', 'รายละเอียด\r\n• ทรงมาตรฐานให้สัมผัสผ่อนคลายสบายๆ\r\n• โพลีเอสเตอร์ 49%/ผ้าขนสัตว์ 49%/ไนลอน 1%/สแปนเดกซ์ 1%\r\n• สามารถซักมือ\r\n• นำเข้าจากประเทศจีน\r\n• สีที่แสดง: ดำ/Dark Smoke Grey/Midnight Navy/ดำ', 5699, 'jpg', 2),
(25, 'CHAMPION REVERSE WEAVE (Green)', 'รายละเอียด\r\nส่วนประกอบ : ผ้าฝ้าย 90% โพลีเอสเตอร์ 10%\r\nการวัด : ความยาว 66 ซม', 1595, 'jpg', 3),
(26, 'CHAMPION REVERSE WEAVE (Red)', 'รายละเอียด\r\nส่วนประกอบ : ผ้าฝ้าย 90% โพลีเอสเตอร์ 10%\r\nการวัด : ความยาว 66 ซม', 2480, 'jpg', 3),
(27, 'CHAMPION REVERSE WEAVE (Black)', 'รายละเอียด\r\nส่วนประกอบ : ผ้าฝ้าย 90% โพลีเอสเตอร์ 10%\r\nการวัด : ความยาว 66 ซม', 4500, 'jpg', 3),
(28, 'CHAMPION REVERSE WEAVE (White)', 'รายละเอียด\r\nส่วนประกอบ : ผ้าฝ้าย 90% โพลีเอสเตอร์ 10%\r\nการวัด : ความยาว 66 ซม', 2200, 'jpg', 3),
(29, 'CHAMPION REVERSE WEAVE (Grey)', 'รายละเอียด\r\nส่วนประกอบ : ผ้าฝ้าย 90% โพลีเอสเตอร์ 10%\r\nการวัด : ความยาว 66 ซม', 2500, 'jpg', 3),
(30, 'CHAMPION REVERSE WEAVE (White Black)', 'รายละเอียด\r\nส่วนประกอบ : ผ้าฝ้าย 90% โพลีเอสเตอร์ 10%\r\nการวัด : ความยาว 66 ซม', 3000, 'jpg', 3),
(31, 'CHAMPION REVERSE WEAVE (white blue stripe)', 'รายละเอียด\r\nส่วนประกอบ : ผ้าฝ้าย 90% โพลีเอสเตอร์ 10%\r\nการวัด : ความยาว 66 ซม', 1299, 'jpg', 3),
(32, 'CHAMPION REVERSE WEAVE (Yellow)', 'รายละเอียด\r\nส่วนประกอบ : ผ้าฝ้าย 90% โพลีเอสเตอร์ 10%\r\nการวัด : ความยาว 66 ซม', 1399, 'jpg', 3),
(33, 'CHAMPION REVERSE WEAVE (White2)', 'รายละเอียด\r\nส่วนประกอบ : ผ้าฝ้าย 90% โพลีเอสเตอร์ 10%\r\nการวัด : ความยาว 66 ซม', 2499, 'jpg', 3),
(34, 'ARMANI EXCHANGE (Brown)', 'รายละเอียด\r\nส่วนประกอบ : ผ้าฝ้าย 88% อีลาสเทนโพลีเอสเตอร์ 12%\r\nการวัด : ความยาว 71 ซม', 3450, 'jpg', 3),
(35, 'ARMANI EXCHANGE (Red)', 'รายละเอียด\r\nส่วนประกอบ : ผ้าฝ้าย 88% อีลาสเทนโพลีเอสเตอร์ 12%\r\nการวัด : ความยาว 71 ซม', 5900, 'jpg', 3),
(36, 'CHAMPION Crewneck Sweatshirt (Blue-Black)', 'รายละเอียด\r\nส่วนประกอบ : ผ้าฝ้าย 86% ,โพลีเอสเตอร์ 14%\r\nการวัด : ความยาว 66 ซม', 2480, 'jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(7) NOT NULL,
  `u_fullname` varchar(200) NOT NULL,
  `u_email` varchar(200) NOT NULL,
  `u_password` varchar(200) NOT NULL,
  `u_tel` int(10) NOT NULL,
  `u_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_fullname`, `u_email`, `u_password`, `u_tel`, `u_address`) VALUES
(1, 'บัณฑิตา พิณดิษฐ', 'nut@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 995876783, '62/20 ต.ขามเรียง อ.กันทรวิชัย จ.มหาสารคาม 44150'),
(2, 'วีริยาภรณ์ ยอดจันทร์', 'bew@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 987896547, 'Mahasarakham');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`co_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD PRIMARY KEY (`od_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `co_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `oid` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `orders_detail`
--
ALTER TABLE `orders_detail`
  MODIFY `od_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
