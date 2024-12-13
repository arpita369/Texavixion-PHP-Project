-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2024 at 02:12 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `texavision2k25`
--

-- --------------------------------------------------------

--
-- Table structure for table `dress_selection`
--

CREATE TABLE `dress_selection` (
  `sno` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `stream` varchar(3) NOT NULL,
  `gender` char(6) NOT NULL,
  `size` text NOT NULL,
  `combo` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `pincode` int(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dress_selection`
--

INSERT INTO `dress_selection` (`sno`, `name`, `phone`, `stream`, `gender`, `size`, `combo`, `address`, `pincode`, `email`, `date_time`) VALUES
(1, 'Arpita Shaw', '9163228328', 'cse', 'female', 's-38', 'c6', '81, Nilganj road, Agarpara, Panjavilla', 700109, 'shaw2019arpita@gmail.com', '2024-12-13 08:48:23'),
(2, 'abc', '123456789', 'it', 'male', 'xxl-46', 'c1', 'xyz', 1234, 'pqr@this.com', '2024-12-13 08:57:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dress_selection`
--
ALTER TABLE `dress_selection`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dress_selection`
--
ALTER TABLE `dress_selection`
  MODIFY `sno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
