-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2021 at 03:37 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moviesactors`
--

-- --------------------------------------------------------

--
-- Table structure for table `actors`
--

CREATE TABLE `actors` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `actors`
--

INSERT INTO `actors` (`id`, `name`) VALUES
(1, 'Jason Statham'),
(2, 'Josh Hartnett'),
(3, 'Holt McCallany'),
(6, 'Bruce Willis'),
(8, 'Granger'),
(9, 'harry'),
(10, 'Lord'),
(11, 'Draco Malfoy');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `name`) VALUES
(1, 'Wratt Of Man'),
(2, 'Green Honnet'),
(3, 'Clash Of Titans'),
(4, 'Harry potter ');

-- --------------------------------------------------------

--
-- Table structure for table `moviesactors`
--

CREATE TABLE `moviesactors` (
  `id` int(11) NOT NULL,
  `movies_id` int(11) NOT NULL,
  `actors_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `moviesactors`
--

INSERT INTO `moviesactors` (`id`, `movies_id`, `actors_id`) VALUES
(1, 1, 1),
(2, 1, 3),
(3, 1, 2),
(11, 1, 6),
(12, 2, 6),
(13, 4, 8),
(14, 4, 9),
(15, 4, 10),
(16, 4, 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moviesactors`
--
ALTER TABLE `moviesactors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Constraint_FK_Movies_ID` (`movies_id`),
  ADD KEY `Constraint_FK_actors_ID` (`actors_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actors`
--
ALTER TABLE `actors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `moviesactors`
--
ALTER TABLE `moviesactors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `moviesactors`
--
ALTER TABLE `moviesactors`
  ADD CONSTRAINT `Constraint_FK_Movies_ID` FOREIGN KEY (`movies_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Constraint_FK_actors_ID` FOREIGN KEY (`actors_id`) REFERENCES `actors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
