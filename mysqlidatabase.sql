-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2022 at 10:39 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shaqadoon`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `skills` varchar(60) NOT NULL,
  `education` varchar(60) NOT NULL,
  `wages` int(11) NOT NULL,
  `address` varchar(60) NOT NULL,
  `Gender` varchar(60) NOT NULL,
  `Images` text NOT NULL DEFAULT 'defualt_img.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `skills`, `education`, `wages`, `address`, `Gender`, `Images`) VALUES
(1, 'usaame nuur', 'aniga1@gmail.com', 'personal skill', 'Master', 23, 'laaascanod', 'male', 'defualt_img.png'),
(2, ' nuur', 'nuur@gmail.com', 'personal skill', 'master', 128, 'laaascanod', 'male', 'defualt_img.png'),
(3, 'ibraahim', 'ibrasosman@gmail.com', 'college admin', 'maaster', 0, 'laascanood', 'male', 'defualt_img.png'),
(4, 'maryan ahmed', 'maryan@gmail.com', 'Teacher', 'master', 0, 'garowe', 'male', 'defualt_img.png'),
(5, 'maryan ahmed', 'maryan@gmail.com', 'Teacher', 'degree', 0, 'garowe', 'male', 'defualt_img.png'),
(6, 'maxamed ali', 'maxamed@gmail.com', 'self employee', 'degree', 0, 'laascanood', 'male', 'defualt_img.png'),
(7, 'ilyas yare', 'ilyas@gmail.com', 'personal skill', 'degree', 0, 'hargeysa', 'male', 'defualt_img.png'),
(8, 'axmed', 'axmed@gmail.com', 'personal skill', 'Master', 0, 'garowe', 'male', 'defualt_img.png'),
(9, 'ibraahim', 'ibrasosman@gmail.com', 'Teacher', '75', 0, 'Degree', 'male', 'defualt_img.png'),
(10, 'ibraahim', 'ibrasosman@gmail.com', 'Teacher', '75', 0, 'Degree', 'male', 'defualt_img.png'),
(11, 'ilyas yare', 'ilyas@gmail.com', 'Teacher', '34', 0, 'Degree', 'male', 'defualt_img.png'),
(12, 'aamina ', 'aamina@gmail.com', 'eng', '0', 0, 'Degree', 'female', 'defualt_img.png'),
(13, 'cabdi aadan', 'cabdi22@gmail.com', 'Teacher', '200', 0, 'master', 'male', 'defualt_img.png'),
(14, 'Maxamed', 'moha@gmail.com', 'personal skill', 'Master', 0, 'garowe', 'male', 'defualt_img.png'),
(15, 'xayaad maxamed', 'xayaad@gmail.com', 'Teacher', '190', 0, 'Degree', 'female', 'IMG-633c5adb523c16.47503822.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
