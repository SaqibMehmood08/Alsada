-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2022 at 06:42 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `cnic` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `pass`, `cnic`) VALUES
(1, 'Saqib', '123@gmail', '2222', '31303-0334224-7'),
(2, 'tariq', 'tariq30@gmail.com', 'tariq100', '31303-0000000-0'),
(3, 'ishaq Khan', 'ishaqkhan50@gmail', 'ishaqkhan900', '31303-0000000-1'),
(4, 'Abdullah', 'abdullah5050@gmail.com', 'abdullah0099', '31303-0000000-7');

-- --------------------------------------------------------

--
-- Table structure for table `coursea`
--

CREATE TABLE `coursea` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(250) NOT NULL,
  `cnic` varchar(25) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coursea`
--

INSERT INTO `coursea` (`id`, `name`, `email`, `cnic`, `pass`) VALUES
(8, 'saqib', '123@gmail', '3130303342247', '1111');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `title` varchar(230) NOT NULL,
  `category` varchar(200) NOT NULL,
  `content` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `video` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `title`, `category`, `content`, `image`, `video`) VALUES
(2, 'ALLAH', '', 'ALLAH IS ALONE', 'ABCFD.jpg', ''),
(3, 'alpha', 'ALLAH ', '<p><strong>lbhabshbajvasjgvsvHSGj</strong></p>\r\n', 'Felis_silvestris_silvestris_small_gradual_decrease_of_quality.png', ''),
(4, 'Al-Sada', 'alpha ', '<p><span style=\"color: rgb(77, 81, 86); font-family: &quot;Helvetica Neue&quot;, &quot;Noto Naskh Arabic UI&quot;, Arial, sans-serif; font-size: 14px; text-align: right;\">The&nbsp;</span><span style=\"font-weight: bold; color: rgb(95, 99, 104); font-f', 'jpg-vs-jpeg.jpg', ''),
(5, 'Al-Sada', 'alpha ', '<p><span style=\"color: rgb(77, 81, 86); font-family: &quot;Helvetica Neue&quot;, &quot;Noto Naskh Arabic UI&quot;, Arial, sans-serif; font-size: 14px; text-align: right;\">The&nbsp;</span><span style=\"font-weight: bold; color: rgb(95, 99, 104); font-f', 'jpg-vs-jpeg.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_name` int(11) NOT NULL,
  `item_code` varchar(240) NOT NULL,
  `item_description` varchar(240) NOT NULL,
  `item_price` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_name`, `item_code`, `item_description`, `item_price`) VALUES
(1, '22', '200', '1200');

-- --------------------------------------------------------

--
-- Table structure for table `measure`
--

CREATE TABLE `measure` (
  `id` int(11) NOT NULL,
  `accept_date` varchar(50) NOT NULL,
  `deliver_date` varchar(70) NOT NULL,
  `mublgh_fatorah` varchar(220) NOT NULL,
  `al_madfooh` varchar(250) NOT NULL,
  `al_baki` varchar(250) NOT NULL,
  `empty_box` varchar(250) NOT NULL,
  `noh_alkamash1` varchar(250) NOT NULL,
  `noh_alkamash2` varchar(250) NOT NULL,
  `noh_alkamash3` varchar(250) NOT NULL,
  `noh_alkamash4` varchar(250) NOT NULL,
  `noh_alkamash5` varchar(250) NOT NULL,
  `noh_alkamash6` varchar(250) NOT NULL,
  `koyti` varchar(250) NOT NULL,
  `jaab_sagher` varchar(250) NOT NULL,
  `jaab_saudi` varchar(250) NOT NULL,
  `katri` varchar(250) NOT NULL,
  `saudi` varchar(250) NOT NULL,
  `pocInp1` varchar(250) NOT NULL,
  `pocInp2` varchar(250) NOT NULL,
  `pocInp3` varchar(250) NOT NULL,
  `pocInp4` varchar(250) NOT NULL,
  `pocInp5` varchar(250) NOT NULL,
  `pocInp6` varchar(250) NOT NULL,
  `pocInp7` varchar(250) NOT NULL,
  `pocInp8` varchar(250) NOT NULL,
  `pocInp9` varchar(250) NOT NULL,
  `pocInp10` varchar(250) NOT NULL,
  `jaab_mukhfi` varchar(250) NOT NULL,
  `tool_kadam` varchar(250) NOT NULL,
  `tool_warah` varchar(250) NOT NULL,
  `al_kataf` varchar(250) NOT NULL,
  `tool_alkamSada` varchar(250) NOT NULL,
  `Rakbah_kalab` varchar(250) NOT NULL,
  `Rakbah_adi` varchar(250) NOT NULL,
  `wast_Sadar` int(250) NOT NULL,
  `wast_teht` varchar(240) NOT NULL,
  `tab1` varchar(50) NOT NULL,
  `tab2` varchar(50) NOT NULL,
  `tab3` varchar(50) NOT NULL,
  `tab4` varchar(50) NOT NULL,
  `tab5` varchar(200) NOT NULL,
  `tab6` varchar(200) NOT NULL,
  `tab7` varchar(200) NOT NULL,
  `customer_name` varchar(250) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `patiInp1` varchar(200) NOT NULL,
  `patiInp2` varchar(200) NOT NULL,
  `patiInp3` varchar(200) NOT NULL,
  `patiInp4` varchar(200) NOT NULL,
  `patiInp5` varchar(250) NOT NULL,
  `patti` varchar(250) NOT NULL,
  `tarkia` varchar(250) NOT NULL,
  `kalai_message` varchar(250) NOT NULL,
  `kalai` varchar(250) NOT NULL,
  `message` varchar(250) NOT NULL,
  `pocket` varchar(250) NOT NULL,
  `k1` varchar(250) NOT NULL,
  `k2` varchar(250) NOT NULL,
  `k3` varchar(250) NOT NULL,
  `k4` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `measure`
--

INSERT INTO `measure` (`id`, `accept_date`, `deliver_date`, `mublgh_fatorah`, `al_madfooh`, `al_baki`, `empty_box`, `noh_alkamash1`, `noh_alkamash2`, `noh_alkamash3`, `noh_alkamash4`, `noh_alkamash5`, `noh_alkamash6`, `koyti`, `jaab_sagher`, `jaab_saudi`, `katri`, `saudi`, `pocInp1`, `pocInp2`, `pocInp3`, `pocInp4`, `pocInp5`, `pocInp6`, `pocInp7`, `pocInp8`, `pocInp9`, `pocInp10`, `jaab_mukhfi`, `tool_kadam`, `tool_warah`, `al_kataf`, `tool_alkamSada`, `Rakbah_kalab`, `Rakbah_adi`, `wast_Sadar`, `wast_teht`, `tab1`, `tab2`, `tab3`, `tab4`, `tab5`, `tab6`, `tab7`, `customer_name`, `phone`, `patiInp1`, `patiInp2`, `patiInp3`, `patiInp4`, `patiInp5`, `patti`, `tarkia`, `kalai_message`, `kalai`, `message`, `pocket`, `k1`, `k2`, `k3`, `k4`) VALUES
(17, '2022-06-01', '2022-06-02', 'alpha', 'beta', ' charlie', 'delta', '100', '200', '300', '400', '500', '600', 'koyti', 'jaab_sagher', 'jaab_saudi', 'katri', 'saudi', '', '', 'ping', '', '', '', '', '', '', '', 'jaab_mukhfi', 'a', 's', 'd', 'f', 'g', 'h', 0, 'k', ' 0007', ' 00006', ' 0022', ' 00005', '00004 ', ' 00003', ' 00002', 'Mehmood', '03186796195', '', '', 'prime time', '', '', 'patti3', 'tarkia2', '', 'kalai3', 'lets write here', 'pocket03', '  ', '  ', '  ramed', '');

-- --------------------------------------------------------

--
-- Table structure for table `sellings`
--

CREATE TABLE `sellings` (
  `id` int(11) NOT NULL,
  `item_name` varchar(250) NOT NULL,
  `item_code` varchar(250) NOT NULL,
  `item_description` varchar(250) NOT NULL,
  `item_price` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sellings`
--

INSERT INTO `sellings` (`id`, `item_name`, `item_code`, `item_description`, `item_price`) VALUES
(1, '465465464', '4646', '546', '5465'),
(2, '646466868', '686', '874687468468', '464');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coursea`
--
ALTER TABLE `coursea`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_name`);

--
-- Indexes for table `measure`
--
ALTER TABLE `measure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellings`
--
ALTER TABLE `sellings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `coursea`
--
ALTER TABLE `coursea`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_name` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `measure`
--
ALTER TABLE `measure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sellings`
--
ALTER TABLE `sellings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
