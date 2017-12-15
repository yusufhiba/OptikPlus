-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2017 at 12:42 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasir1`
--

-- --------------------------------------------------------

--
-- Table structure for table `inp_kasir1`
--

CREATE TABLE `inp_kasir1` (
  `no` int(11) NOT NULL,
  `nm_pelanggan1` varchar(100) NOT NULL,
  `almt_perusahaan1` varchar(500) NOT NULL,
  `almt_pembeli1` varchar(500) NOT NULL,
  `tlp_pelanggan1` bigint(13) NOT NULL,
  `sp_ka1` int(11) NOT NULL,
  `sp_ki1` int(11) NOT NULL,
  `cyl_ka1` int(11) NOT NULL,
  `cyl_ki1` int(11) NOT NULL,
  `ax_ka1` int(11) NOT NULL,
  `ax_ki1` int(11) NOT NULL,
  `addka` int(11) NOT NULL,
  `addki` int(11) NOT NULL,
  `sgt_ka` int(11) NOT NULL,
  `sgt_ki` int(11) NOT NULL,
  `base_ka` int(11) NOT NULL,
  `base_ki` int(11) NOT NULL,
  `ling_ka` int(11) NOT NULL,
  `ling_ki` int(11) NOT NULL,
  `dp1` int(11) NOT NULL,
  `sisa_byr1` int(11) NOT NULL,
  `total_byr1` int(11) NOT NULL,
  `tgl_beli1` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `keterangan` tinyint(1) NOT NULL,
  `kasir` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inp_kasir1`
--

INSERT INTO `inp_kasir1` (`no`, `nm_pelanggan1`, `almt_perusahaan1`, `almt_pembeli1`, `tlp_pelanggan1`, `sp_ka1`, `sp_ki1`, `cyl_ka1`, `cyl_ki1`, `ax_ka1`, `ax_ki1`, `addka`, `addki`, `sgt_ka`, `sgt_ki`, `base_ka`, `base_ki`, `ling_ka`, `ling_ki`, `dp1`, `sisa_byr1`, `total_byr1`, `tgl_beli1`, `keterangan`, `kasir`) VALUES
(1, 'Ferdi', 'Bangka', 'Batam', 812342877, 1, 2, 1, 2, 3, 3, 0, 0, 0, 0, 0, 0, 0, 0, 50000, 100000, 250000, '2017-12-26 23:11:07', 0, ''),
(2, 'ljads', 'qwqwrwq', 'wgweg', 4214, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 4, 6, '2017-12-13 07:11:37', 1, ''),
(3, 'biub', 'iuiub', 'iuiniub', 346646, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1234, 543, 76576, '0000-00-00 00:00:00', 0, ''),
(4, 'ofinqwof', 'oiqnfoqfnw', 'oqwifnqoiwfn', 2104, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 19421, 12984124, 214812, '0000-00-00 00:00:00', 0, ''),
(5, 'wenfon', 'onefoienf', 'oweifnewoifn', 12124412, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1214, 2149812, '2017-12-14 11:20:51', 1, ''),
(6, 'Alex', 'Ciomas', 'Pekalongan', 31, 2, 1, 1, 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 300, 1700, 2000, '2017-12-14 14:39:03', 0, ''),
(7, 'Alex', 'Ciomas', 'Sukabumi', 31, 2, 1, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 300, 1700, 2000, '2017-12-14 21:42:50', 0, 'kasir2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inp_kasir1`
--
ALTER TABLE `inp_kasir1`
  ADD PRIMARY KEY (`no`),
  ADD KEY `nm_pelanggan1_2` (`nm_pelanggan1`) USING BTREE,
  ADD KEY `nm_pelanggan1` (`nm_pelanggan1`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inp_kasir1`
--
ALTER TABLE `inp_kasir1`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
