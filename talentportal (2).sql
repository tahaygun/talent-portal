-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 07, 2018 at 11:00 AM
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
  `tags` varchar(255) DEFAULT NULL,
  `startdate` date DEFAULT NULL,
  `enddate` date DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `support_image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `postings`
--

INSERT INTO `postings` (`id`, `user_id`, `title`, `description`, `about`, `identifies`, `active`, `highlighted`, `tags`, `startdate`, `enddate`, `link`, `support_image`, `created_at`) VALUES
(17, 1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, cumque magnam, veniam possimus voluptate voluptatibus autem quaerat odio dolorem consectetur eum! Beatae obcaecati, sed et atque mollitia impedit ratione quae!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, cumque magnam, veniam possimus voluptate voluptatibus autem quaerat odio dolorem consectetur eum! Beatae obcaecati, sed et atque mollitia impedit ratione quae!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, cumque magnam, veniam possimus voluptate voluptatibus autem quaerat odio dolorem consectetur eum! Beatae obcaecati, sed et atque mollitia impedit ratione quae!', 'Startup', 1, 1, 'International', '2018-03-01', '2018-03-09', 'aaaaa', 'img-23.jpg', '2018-03-06 17:05:46'),
(20, 33, 'Trainee (e) Visual Design', 'As a trainee visual design you work together with our designers, strategists, front-end and back-end developers on the development of beautiful online applications. You translate the wishes of the customer and / or of the team into visual designs that translate the UX design or prototype into clear and clear interaction.', 'Hoppinger is a full service internet agency in Rotterdam. We use our knowledge in the field of online strategy, user centered design, open source technology and online marketing to bring our customers and their target groups closer together.', 'Startup', 1, 1, 'Digital', '2018-03-09', '2018-03-24', 'https://www.hoppinger.com/vacatures/stagiair-visual-design/', 'Hoppinger-stockbeeld_50-02-square-e1513242365868-650x0-c-default.jpg', '2018-03-06 19:06:13');

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
  `companylogo` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `trusted` tinyint(1) NOT NULL DEFAULT '0',
  `approved` tinyint(4) DEFAULT '0',
  `adminlevel` int(11) DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `companyname`, `email`, `phone`, `contactperson`, `companylogo`, `password`, `created_at`, `trusted`, `approved`, `adminlevel`) VALUES
(1, 'Coolblueaa', 'coolblue@gmail.com', '01561511561', 'Cool', '', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '2018-03-03 16:00:27', 0, 1, 1),
(2, 'Company2222', 'Company2@gmail.com', '5465132156', 'Company2CP', 'thumb1.png', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '2018-03-03 16:01:21', 0, 1, 3),
(33, 'Coolblue', 'coolblue@gmail.com', '01561511561', 'CoolBoy', 'green.jpg', 'a6370ffbf3a54406aefcabf7d375c5bf64bb1e34', '2018-03-06 11:27:15', 0, 1, 3);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
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
