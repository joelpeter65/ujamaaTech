-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2022 at 04:27 PM
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
-- Database: `magazine`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `C_ID` int(11) NOT NULL,
  `D_ID` int(11) NOT NULL,
  `Comment` longtext NOT NULL,
  `user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `conversations`
--

CREATE TABLE `conversations` (
  `ID` int(255) NOT NULL,
  `USERID` int(255) NOT NULL,
  `TEXT` longtext NOT NULL,
  `User` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `con_heads`
--

CREATE TABLE `con_heads` (
  `ID` int(255) NOT NULL,
  `R_name` varchar(255) NOT NULL,
  `S_name` varchar(255) NOT NULL,
  `Conuniq` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `discussion`
--

CREATE TABLE `discussion` (
  `D_ID` int(255) NOT NULL,
  `D_Head` varchar(255) NOT NULL,
  `Admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `thouts`
--

CREATE TABLE `thouts` (
  `TID` int(255) NOT NULL,
  `Thouts` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `PID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `UP_ID` int(255) NOT NULL,
  `APPROVE` varchar(10) DEFAULT 'PENDING',
  `UPLOAD_DATE` date NOT NULL,
  `IMAGES` varchar(255) NOT NULL,
  `CATEGORIES` varchar(255) NOT NULL,
  `BREAKING` varchar(1) DEFAULT '0',
  `TOP` varchar(1) DEFAULT '0',
  `HEADING` text NOT NULL,
  `STORY` longtext NOT NULL,
  `VIDEO` longtext DEFAULT NULL,
  `ST_by` varchar(100) NOT NULL,
  `APPROVED_BY` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`UP_ID`, `APPROVE`, `UPLOAD_DATE`, `IMAGES`, `CATEGORIES`, `BREAKING`, `TOP`, `HEADING`, `STORY`, `VIDEO`, `ST_by`, `APPROVED_BY`) VALUES
(1, 'BLOCKED', '2022-12-10', 'logo.png', 'Technology', '1', '1', '', '<p><u><strong>Testing Bold And Underline</strong></u></p>\r\n\r\n<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat eveniet maiores non unde omnis excepturi quidem quisquam perspiciatis ullam eum laudantium odit, consequatur totam, vero eaque dignissimos fuga autem modi.<br />\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga quo dolorem id, nesciunt? Vero sapiente voluptates a dignissimos, ipsa sunt laudantium repellat voluptate, et excepturi praesentium nulla porro. Modi, unde. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus corporis, consectetur laudantium sit hic reprehenderit libero. Dicta, id, ad. Sit animi sunt facilis illum eum officia perspiciatis soluta harum maxime. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio saepe amet ad quis itaque impedit neque vel, porro repellendus commodi, vero hic inventore asperiores, delectus, esse. Incidunt, facilis, error! Deleniti.</p>\r\n', '', 'JoelPeter98', NULL),
(2, 'BLOCKED', '2022-12-10', 'images.jpg', 'Agriculture', '1', '1', '', '<p><u><strong>Testing Bold And Underline</strong></u></p>\r\n\r\n<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat eveniet maiores non unde omnis excepturi quidem quisquam perspiciatis ullam eum laudantium odit, consequatur totam, vero eaque dignissimos fuga autem modi.<br />\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga quo dolorem id, nesciunt? Vero sapiente voluptates a dignissimos, ipsa sunt laudantium repellat voluptate, et excepturi praesentium nulla porro. Modi, unde. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus corporis, consectetur laudantium sit hic reprehenderit libero. Dicta, id, ad. Sit animi sunt facilis illum eum officia perspiciatis soluta harum maxime. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio saepe amet ad quis itaque impedit neque vel, porro repellendus commodi, vero hic inventore asperiores, delectus, esse. Incidunt, facilis, error! Deleniti.</p>\r\n', '', 'JoelPeter98', NULL),
(3, 'OK', '2022-12-10', 'images.jpg', 'Business', '1', '1', 'hatari new name', '<p><u><strong>Testing Bold And Underline</strong></u></p>\r\n\r\n<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat eveniet maiores non unde omnis excepturi quidem quisquam perspiciatis ullam eum laudantium odit, consequatur totam, vero eaque dignissimos fuga autem modi.<br />\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga quo dolorem id, nesciunt? Vero sapiente voluptates a dignissimos, ipsa sunt laudantium repellat voluptate, et excepturi praesentium nulla porro. Modi, unde. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus corporis, consectetur laudantium sit hic reprehenderit libero. Dicta, id, ad. Sit animi sunt facilis illum eum officia perspiciatis soluta harum maxime. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio saepe amet ad quis itaque impedit neque vel, porro repellendus commodi, vero hic inventore asperiores, delectus, esse. Incidunt, facilis, error! Deleniti.</p>\r\n', '', 'JoelPeter98', 'JoelPeter98');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Level` varchar(100) NOT NULL DEFAULT 'Two',
  `Master` varchar(255) DEFAULT NULL,
  `Status` enum('Blocked','Unblocked') DEFAULT 'Unblocked'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Name`, `email`, `Username`, `Password`, `Level`, `Master`, `Status`) VALUES
(1, 'Joel Peter Kiwalaka', 'peterjoel65@gmail.com', 'JoelPeter98', 'UEVPUExF', 'One', 'Master', 'Unblocked');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`C_ID`);

--
-- Indexes for table `conversations`
--
ALTER TABLE `conversations`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `con_heads`
--
ALTER TABLE `con_heads`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `unique` (`Conuniq`);

--
-- Indexes for table `discussion`
--
ALTER TABLE `discussion`
  ADD PRIMARY KEY (`D_ID`);

--
-- Indexes for table `thouts`
--
ALTER TABLE `thouts`
  ADD PRIMARY KEY (`TID`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`UP_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `C_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `conversations`
--
ALTER TABLE `conversations`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `con_heads`
--
ALTER TABLE `con_heads`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `discussion`
--
ALTER TABLE `discussion`
  MODIFY `D_ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thouts`
--
ALTER TABLE `thouts`
  MODIFY `TID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `UP_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
