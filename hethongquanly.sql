-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 07:39 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hethongquanly`
--

-- --------------------------------------------------------

--
-- Table structure for table `chucvu`
--

CREATE TABLE `chucvu` (
  `id` int(11) NOT NULL,
  `ChucVu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chucvu`
--

INSERT INTO `chucvu` (`id`, `ChucVu`) VALUES
(1, 'Chức vụ A'),
(2, 'Chức vụ B'),
(3, 'Chức vụ C'),
(4, 'Chức vụ D'),
(5, 'Chức vụ E'),
(6, 'Chức vụ F');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `ID` varchar(255) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `DiaChi` varchar(255) NOT NULL,
  `SDT` varchar(255) NOT NULL,
  `NgaySinh` date NOT NULL,
  `CCCD` varchar(255) NOT NULL,
  `NgayCap` date NOT NULL,
  `NoiCap` varchar(255) NOT NULL,
  `GioiTinh` varchar(255) NOT NULL,
  `ChucVu` varchar(255) NOT NULL,
  `BangCap` varchar(255) NOT NULL,
  `TinhTrangHonNhan` varchar(255) NOT NULL,
  `AccountLogin` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Avatar` varchar(255) NOT NULL,
  `Rule` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`ID`, `FullName`, `Email`, `DiaChi`, `SDT`, `NgaySinh`, `CCCD`, `NgayCap`, `NoiCap`, `GioiTinh`, `ChucVu`, `BangCap`, `TinhTrangHonNhan`, `AccountLogin`, `Password`, `Avatar`, `Rule`) VALUES
('NV1111', 'Trần Kiến Phong', 'phongtrankien93@gmail.com', 'Địa chỉ thường trú', '0996424988', '1993-07-23', '1234567891234', '2020-05-06', 'Quận 7, TPHCM', 'Nam', 'Chức vụ A', 'Đại Học', 'Đã kết hôn', 'admin', '1234', 'avatar-Phong.jpg', 1),
('NV8888', 'Huỳnh Thi', 'huynhthi0503@gmail.com', 'Địa chỉ thường trú2', '0996424988', '1997-04-10', '012345678912', '2022-06-09', 'Quận 3, TPHCM', 'Nữ', 'Chức vụ B', 'Đại Học', 'Đã kết hôn', 'thi', '1234', 'hethong.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', '1234', 'ngotrang447@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chucvu`
--
ALTER TABLE `chucvu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chucvu`
--
ALTER TABLE `chucvu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
