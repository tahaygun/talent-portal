-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 03, 2018 at 04:39 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `talentportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `postings`
--

CREATE TABLE `postings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `about` varchar(500) DEFAULT NULL,
  `identifies` text,
  `active` tinyint(4) DEFAULT '0',
  `highlighted` tinyint(1) NOT NULL DEFAULT '0',
  `tags` text,
  `starting_date` date DEFAULT NULL,
  `enddate` date DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `postings`
--

INSERT INTO `postings` (`id`, `user_id`, `title`, `description`, `about`, `identifies`, `active`, `highlighted`, `tags`, `starting_date`, `enddate`, `link`, `created_at`) VALUES
(1, 1, 'Posting1', 'Posting1Posting1Posting1Posting1Posting1Posting1Posting1Posting1Posting1', 'Posting1Posting1Posting1Posting1Posting1Posting1Posting1Posting1Posting1Posting1Posting1', 'Posting1', 1, 1, 'Posting1', '2018-03-09', '2018-03-07', 'Posting1link', '2018-03-03 16:02:27'),
(2, 2, 'Posting2', 'Posting2', 'Posting2Posting2Posting2Posting2Posting2Posting2Posting2Posting2Posting2Posting2Posting2Posting2Posting2Posting2Posting2Posting2Posting2', 'Posting2Posting2Posting2', 1, 1, 'Posting2Posting2Posting2Posting2Posting2Posting2Posting2Posting2Posting2Posting2Posting2Posting2Posting2Posting2Posting2Posting2Posting2Posting2Posting2', '2018-03-16', '2018-03-31', 'Posting2', '2018-03-03 16:03:51'),
(3, 1, 'Posting3', 'Posting3Posting3Posting3Posting3Posting3Posting3Posting3Posting3Posting3Posting3Posting3Posting3', 'Posting3Posting3Posting3Posting3Posting3Posting3Posting3Posting3Posting3Posting3Posting3Posting3Posting3Posting3Posting3', 'Posting3Posting3', 1, 1, 'Posting3Posting3Posting3Posting3Posting3Posting3Posting3Posting3Posting3Posting3Posting3Posting3Posting3', '2018-03-06', '2018-03-23', 'Posting3', '2018-03-03 16:04:39'),
(4, 1, 'Posting4', 'Posting4Posting4Posting4Posting4Posting4Posting4Posting4Posting4Posting4Posting4Posting4Posting4Posting4Posting4Posting4Posting4Posting4Posting4Posting4Posting4', 'Posting4Posting4Posting4Posting4Posting4Posting4Posting4Posting4Posting4Posting4Posting4Posting4', 'Posting4Posting4Posting4Posting4Posting4Posting4Posting4Posting4Posting4Posting4Posting4Posting4Posting4Posting4Posting4Posting4Posting4Posting4Posting4Posting4', 1, 1, 'Posting4Posting4Posting4Posting4Posting4Posting4Posting4Posting4Posting4Posting4Posting4Posting4Posting4Posting4Posting4Posting4', '2018-03-21', '2018-03-24', 'Posting4', '2018-03-03 16:05:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `companyname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `contactperson` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `approved` tinyint(4) DEFAULT '0',
  `identifies` text,
  `adminlevel` int(11) DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `companyname`, `email`, `phone`, `contactperson`, `password`, `created_at`, `approved`, `identifies`, `adminlevel`) VALUES
(1, 'Company1', 'company1@gmail.com', '0264846545645', 'Company1CP', '123456789', '2018-03-03 16:00:27', 1, 'Company1Company1Company1Company1Company1Company1Company1Company1Company1Company1Company1Company1Company1Company1Company1Company1Company1Company1Company1Company1Company1Company1Company1Company1Company1Company1Company1Company1Company1Company1Company1Company1Company1Company1Company1Company1Company1Company1Company1Company1Company1Company1Company1Company1Company1Company1Company1Company1Company1Company1Company1Company1Company1', 3),
(2, 'Company2', 'Company2@gmail.com', '5465132156', 'Company2CP', '123456789', '2018-03-03 16:01:21', 1, 'Company2Company2Company2Company2Company2Company2Company2Company2Company2Company2Company2Company2Company2Company2Company2Company2Company2Company2Company2Company2Company2Company2Company2Company2Company2Company2Company2Company2Company2', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `postings`
--
ALTER TABLE `postings`
  ADD PRIMARY KEY (`id`,`user_id`),
  ADD KEY `fk_postings_companies_idx` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `postings`
--
ALTER TABLE `postings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `postings`
--
ALTER TABLE `postings`
  ADD CONSTRAINT `fk_postings_companies` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
