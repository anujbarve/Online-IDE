-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2022 at 08:49 AM
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
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(32) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `security_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `email`, `security_code`) VALUES
(1, 'admin02', '$2y$10$YOtOJiT0/iLSWwgffIQ7gOxYuWLubWHqKnrYFkYHYnaRhlrx7Ekjq', 'admin02@mail.com', '7596526');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(32) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(500) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(32) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`, `time`, `status`) VALUES
(1, 'Anuj Vinod Barve', 'vinodbarve19@gmail.com', 'Site is finally live ', 'Site is finally live \r\nyayyyy!!!', '2022-05-30 06:40:40', 1),
(2, 'Alex', 'alex@mail.com', 'Congratulations', 'Congratulations on making the website live my friend', '2022-05-30 06:47:09', 0);

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
(11, 'LL_hello.cpp', '71', '#include <iostream>\r\n\r\nint main() {\r\n    std::cout << \"hello, world\" << std::endl;\r\n    return 0;\r\n}\r\n', 'lalex'),
(7, 'LL_hello.py', '71', 'print(\"Hello lalex\")', 'lalex'),
(8, 'LL_hello.js', '71', 'console.log(\"Hello using JS\");', 'lalex'),
(9, 'LL_hello.java', '71', 'public class Main {\r\n    public static void main(String[] args) {\r\n        System.out.println(\"hello, world\");\r\n    }\r\n}\r\n', 'lalex'),
(10, 'LL_hello.c', '71', '// Powered by Judge0\r\n#include <stdio.h>\r\n\r\nint main(void) {\r\n    printf(\"Hello Judge0!\\n\");\r\n    return 0;\r\n}', 'lalex'),
(23, 'hello.py', '71', 'print(\"Hello World\")', 'alexg'),
(24, 'hello.js', '63', 'console.log(\"HEHEHE\");', 'alexg');

-- --------------------------------------------------------

--
-- Table structure for table `user_posts`
--

CREATE TABLE `user_posts` (
  `id` int(32) NOT NULL,
  `title` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `scode` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_posts`
--

INSERT INTO `user_posts` (`id`, `title`, `username`, `description`, `scode`, `date`, `fname`) VALUES
(14, 'noice js', 'alexg', 'noice js', 'js', '2022-05-30 05:18:39', 'hello.js');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `user_posts`
--
ALTER TABLE `user_posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_files`
--
ALTER TABLE `user_files`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user_posts`
--
ALTER TABLE `user_posts`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
