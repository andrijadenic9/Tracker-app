-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2022 at 09:51 PM
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
-- Database: `tracker-practice-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `amount` int(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `student_id`, `amount`, `created_at`) VALUES
(21, 51, 13500, '2022-05-28 13:42:55'),
(22, 52, 60000, '2022-05-28 13:43:02'),
(23, 53, 15000, '2022-05-28 13:43:14'),
(24, 52, 14000, '2022-05-28 13:43:21'),
(25, 53, 26000, '2022-05-28 13:43:28'),
(26, 53, 10000, '2022-05-28 13:43:43'),
(27, 54, 12000, '2022-05-28 13:44:27'),
(28, 54, 12000, '2022-05-28 13:44:32'),
(29, 55, 12000, '2022-07-30 12:27:29'),
(30, 56, 41000, '2022-07-30 12:27:45'),
(31, 55, 12000, '2022-07-30 12:27:54'),
(32, 58, 22000, '2022-07-30 12:28:38');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `info`, `created_at`) VALUES
(51, 'Milica Radovanovic', 'miciradov@gmail.com', '', '2022-05-28 13:41:52'),
(52, 'Petar Strelic', 'strelic@gmail.com', 'Pera zdera', '2022-05-28 13:45:34'),
(53, 'Milos Pavkovic', 'pavkovic23@gmail.com', 'Pavkoviccc', '2022-05-28 13:45:12'),
(54, 'Zarko Stojic', 'zare87@gmail.com', 'Dobar decko', '2022-05-28 13:44:22'),
(55, 'Jasna', 'Sekaric@gmail.com', 'Strelac', '2022-05-28 13:47:42'),
(56, 'Igor Potonjak', 'potonjak@gmail.com', '', '2022-05-28 13:46:15'),
(57, 'Milos', 'milosmil@gmail.com', 'Trapica', '2022-07-30 19:40:54'),
(58, 'Milan', 'Milan@gmail.com', 'Milan is komsiluka', '2022-07-30 19:41:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `role`) VALUES
(1, 'admin', 'admin', 'admin@localhost.com', 'admin'),
(2, 'user', 'user', 'user@localhost.com', 'moderator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
