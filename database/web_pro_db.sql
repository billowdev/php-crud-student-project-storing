-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2022 at 10:50 AM
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
-- Database: `web_pro_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_project`
--

CREATE TABLE `tb_project` (
  `id` int(10) NOT NULL COMMENT 'id ',
  `title` varchar(100) NOT NULL COMMENT 'ชื่อโครงงาน',
  `name` varchar(100) NOT NULL COMMENT 'ผู้จัดทำ',
  `advisor` varchar(100) NOT NULL COMMENT 'ที่ปรึกษา',
  `year` varchar(4) NOT NULL COMMENT 'ปีการศึกษา',
  `detail` varchar(500) NOT NULL COMMENT 'บทคัดย่อ',
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_project`
--

INSERT INTO `tb_project` (`id`, `title`, `name`, `advisor`, `year`, `detail`, `date`) VALUES
(2, 'the leap int 2', 'e printing and typesetti', 'e printing and typesetti', '2565', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap int', '2022-03-02'),
(3, 'the leap int3', 'e printing and typesetti', 'e printing and typesetti', '2565', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap int', '2022-03-02'),
(4, 'the leap int 4', 'e printing and typesetti', 'e printing and typesetti', '2565', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap int', '2022-03-02'),
(10, 'ทดสอบ ทดสอบ', 'ทดสอบ ทดสอบ', 'ทดสอบ ทดสอบ', 'ทดสอ', 'ทดสอบ ทดสอบ', '2022-03-31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_project`
--
ALTER TABLE `tb_project`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_project`
--
ALTER TABLE `tb_project`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id ', AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
