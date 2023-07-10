-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20221020.10dfc6d641
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2022 at 05:50 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

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
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `uid` int(11) NOT NULL,
  `uname` char(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `spassword` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uid`, `uname`, `email`, `spassword`) VALUES
(2, 'zoro', 'zoro@gmail.com', 'zoro'),
(14, 'zoro', '', 'Jeswin@123'),
(15, 'micka', 'micka@gmail.com', 'micka');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(30) NOT NULL,
  `title` text NOT NULL,
  `cover_img` text NOT NULL,
  `description` text NOT NULL,
  `duration` float NOT NULL,
  `date_showing` date NOT NULL,
  `end_date` date NOT NULL,
  `trailer_yt_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `cover_img`, `description`, `duration`, `date_showing`, `end_date`, `trailer_yt_link`) VALUES
(1, 'BLACK ADAM', 'blackadam.jpg', 'Sample Movie', 2.5, '2022-10-20', '2022-12-12', 'https://youtu.be/X0tOpBuYasI'),
(2, 'Kantara', 'kantara.jpg', 'Sample 2', 2.5, '2022-10-05', '2022-12-12', 'https://youtu.be/MTECjlKUgEE'),
(3, 'Padavettu', 'padavettu.jpg', 'Padavettu', 2.5, '2022-10-21', '2022-12-29', 'https://youtu.be/1ErBw6lcMSQ'),
(4, 'Monster', 'monster.jpg', 'Monster', 2.5, '2022-10-20', '2022-12-29', 'https://youtu.be/mnb0C8vs5x8'),
(5, 'Rorschach', 'rorschach.jpg', 'rorschach', 2.75, '2022-10-05', '2022-12-29', 'https://youtu.be/1FmqSUwAirA'),
(6, 'Prince', 'prince.jpg', 'Prince', 2.5, '2022-10-20', '2022-12-29', 'https://youtu.be/KHUZsWSwxWM'),
(7, 'Ponniyin Selvan: Part 1', 'ps1.jpg', 'Ponniyin Selvan: Part 1', 3, '2022-10-05', '2022-12-29', 'https://youtu.be/2HbAWSIOY1s');

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE `reserve` (
  `bkid` int(10) NOT NULL,
  `bkname` char(20) NOT NULL,
  `bkcontact` varchar(50) NOT NULL,
  `theater` char(50) NOT NULL,
  `qty` int(11) NOT NULL,
  `bkdate` varchar(50) NOT NULL,
  `bktime` varchar(50) NOT NULL,
  `bkmovie` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reserve`
--

INSERT INTO `reserve` (`bkid`, `bkname`, `bkcontact`, `theater`, `qty`, `bkdate`, `bktime`, `bkmovie`) VALUES
(1, 'Jeswin C Saji', '8592091880', 'RD Theater', 2, '2022-10-22', '09:00 AM', 'BLACK ADAM'),
(2, 'Arun', '8542578564', 'Anupama Theater', 1, '2022-10-24', '12:00 PM', 'Kantara');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`) VALUES
(1, 'Administrator', 'admin', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reserve`
--
ALTER TABLE `reserve`
  ADD PRIMARY KEY (`bkid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reserve`
--
ALTER TABLE `reserve`
  MODIFY `bkid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
