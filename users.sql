-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2016 at 11:08 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `user_skill` varchar(45) NOT NULL,
  `user_email` varchar(55) NOT NULL,
  `user_pass` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_skill`, `user_email`, `user_pass`) VALUES
(4, 'Victor', 'Web Developer', 'victoralagwu@gmail.com', '$2y$10$fM3FA7IbqYYKK7xiI7m6Z.vuwFVOflDk5OglZ/GFVWoEUZM23c4DG'),
(5, 'Omolayo', 'Graphic Designer', 'omolayo@gmail.com', '$2y$10$oDNMj3KaKg8AN.Txz564buCIY0qukUqvHJ7xy9qliTo9VyhyQbQl2'),
(6, 'Henry', 'Engineer', 'henry@gmail.com', '$2y$10$2eEC52MjFWsjiw3Gvtn9e.f7AfrgSoDcSOcGeTmOpR2VH68NV03h.'),
(7, 'Victor Alagwu', 'IT & NETWORKING', 'victor@gmail.com', '$2y$10$RK7XyrWAqq3sDD8OZKj/ieNytvKb1NmxmKxXUBUBEgl0oIPGmzMB6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
