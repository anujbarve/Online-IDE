-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2022 at 03:55 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scr`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `userName` varchar(128) NOT NULL,
  `userEmail` varchar(128) NOT NULL,
  `userUid` varchar(128) NOT NULL,
  `userPwd` varchar(128) NOT NULL,
  `user_ln` text DEFAULT NULL,
  `user_gh` text DEFAULT NULL,
  `user_desc` text DEFAULT NULL,
  `user_photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `userName`, `userEmail`, `userUid`, `userPwd`, `user_ln`, `user_gh`, `user_desc`, `user_photo`) VALUES
(8, 'Anuj Vinod Barve', 'admin@admin.com', 'admin', '$2y$10$ASWRTqHwKG1LQp80ioW2bOEtH8NQFeWOUF4.pC4qZ.Mw.QphYAIyq', 'https://www.linkedin.com/', 'https://github.com/', 'Hello neo, this is admin, your free trial of the \"one\" is over', 'profile-photo-new.jpg'),
(9, 'Anuj', 'anujbarve27@gmail.com', 'anuj', '$2y$10$jNFgPb/usy5XLFiWTTksB.kdhEex5oO8CWbaNmlHWt6Mlxp0VpbUm', 'LinkedIn Link', 'Github Link', 'Description but extended again', NULL),
(10, 'Alex Grande', 'alex@g.com', 'alexg', '$2y$10$Q0kmdpW8mWYXQP5mpBJyx.axqaa2by4ln1ySPPa05LKNuxakDeLdS', 'https://www.linkedin.com/', 'https://github.com/', 'Hello this is alex, I\'m an upcoming SDE', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_files`
--

CREATE TABLE `user_files` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `extension` varchar(255) DEFAULT NULL,
  `source_code` text DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_files`
--

INSERT INTO `user_files` (`id`, `name`, `extension`, `source_code`, `user_name`) VALUES
(5, 'Hello.py', '71', 'print(\"Hello\")', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `user_files`
--
ALTER TABLE `user_files`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_files`
--
ALTER TABLE `user_files`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
