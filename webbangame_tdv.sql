-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2023 at 10:02 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webbangame_tdv`
--

-- --------------------------------------------------------

--
-- Table structure for table `sanpham_tdv`
--

CREATE TABLE `sanpham_tdv` (
  `MaSP_TDV` char(10) NOT NULL,
  `TenSP_TDV` varchar(50) NOT NULL,
  `GiaSP_TDV` float NOT NULL,
  `TrangThai_TDV` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `sanpham_tdv`
--

INSERT INTO `sanpham_tdv` (`MaSP_TDV`, `TenSP_TDV`, `GiaSP_TDV`, `TrangThai_TDV`) VALUES
('00001', 'Touhou Eiyashou ~ Imperishable Night', 328, 1),
('00002', 'Touhou Fuujinroku ~ Mountain of Faith', 328, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
