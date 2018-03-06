-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 06, 2018 at 12:54 PM
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
(1, 1, 'Posting1', 'Posting1Posting1Posting1Posting1Posting1Posting1Posting1Posting1Posting1', 'Posting1Posting1Posting1Posting1Posting1Posting1Posting1Posting1Posting1Posting1Posting1', 'Posting1', 0, 0, 'teacher', '2018-03-09', '2018-03-07', 'Posting1link', '', '2018-03-03 16:02:27'),
(2, 2, 'Latin literature from 45 BC, making it over 2000 years old.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.     ', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', 'Provider', 1, 1, 'talent   ', '2018-12-12', '2018-03-15', 'dasdasdas', '', '2018-03-03 16:03:51'),
(3, 1, 'Posting3aaaa', 'Posting3Posting3Posting3Posting3Posting3Posting3Posting3Posting3Posting3Posting3Posting3Posting3', 'Posting3Posting3Posting3Posting3Posting3Posting3Posting3Posting3Posting3Posting3Posting3Posting3Posting3Posting3Posting3', 'Posting3Posting3', 0, 0, 'Posting3Posting3Posting3Posting3Posting3Posting3Posting3Posting3Posting3Posting3Posting3Posting3Posting3', '2018-03-06', '2018-03-23', 'Posting3', '', '2018-03-03 16:04:39'),
(5, 30, 'posting4', 'posting4posting4posting4posting4posting4posting4posting4posting4', 'posting4posting4posting4posting4posting4posting4', 'posting4', 0, 0, 'posting4posting4posting4posting4posting4posting4posting4posting4posting4posting4posting4posting4', '2018-03-06', '2018-03-23', 'posting4', '', '2018-03-04 19:37:33'),
(7, 2, 'There are many variations of passages of Lorem Ipsum available', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.', 'Service', 1, 1, 'culture', '2018-03-08', '2018-03-14', 'https://test', '', '2018-03-05 10:43:42'),
(8, 2, 'growth, international, city, talent, community, resilience, culture, digital, energy, inspiration', 'growth, international, city, talent, community, resilience, culture, digital, energy, inspiration', 'growth, international, city, talent, community, resilience, culture, digital, energy, inspiration', 'Goverment', 0, 0, 'growth, international, city, talent, community, resilience, culture, digital, energy, inspiration', '2018-03-06', '2018-03-01', 'sas', 'C:/MAMP/htdocs/impact/assets/img/jobs/VC_Rotterdam-Full-Color-LogoTagline-Horizontal-500_(1).png', '2018-03-06 11:04:03'),
(9, 2, 'asdasdasgrowth, international, city, talent, community, resilience, culture, digital, energy, inspiration\r\n\r\n', 'growth, international, city, talent, community, resilience, culture, digital, energy, inspiration\r\n\r\n', 'growth, international, city, talent, community, resilience, culture, digital, energy, inspiration\r\n\r\n', 'Provider', 0, 0, 'growth, international, city, talent, community, resilience, culture, digital, energy, inspiration\r\n\r\ngrowth, international, city, talent, community, resilience, culture, digital, energy, inspiration\r\n\r\ninternational', '2342-03-14', '2423-12-31', 'asdasd', 'maxresdefault2.jpg', '2018-03-06 11:08:22'),
(10, 33, 'Note. The path is relative to your main site index.php file, NOT your controller or view files. CodeIgniter uses a front controller so paths are always relative to the main site index. Note.', 'Note. The path is relative to your main site index.php file, NOT your controller or view files. CodeIgniter uses a front controller so paths are always relative to the main site index. Note.Note. The path is relative to your main site index.php file, NOT your controller or view files. CodeIgniter uses a front controller so paths are always relative to the main site index. Note.', 'Note. The path is relative to your main site index.php file, NOT your controller or view files. CodeIgniter uses a front controller so paths are always relative to the main site index. Note.Note. The path is relative to your main site index.php file, NOT your controller or view files. CodeIgniter uses a front controller so paths are always relative to the main site index. Note.', 'Service', 1, 1, 'international', '2018-03-16', '2018-03-02', 'harika', '156830_bc03_3.jpg', '2018-03-06 11:29:53'),
(11, 33, 'zaza', 'zaza', 'zaza', 'Service', 0, 0, NULL, '2018-03-08', '2018-03-08', 'zaza', 'img-11.jpg', '2018-03-06 12:41:31'),
(12, 33, 'zaza', 'zaza', 'zaza', 'Service', 0, 0, NULL, '2018-03-06', '2018-03-07', 'zaza', 'img-13.jpg', '2018-03-06 12:48:50'),
(13, 33, 'zaza', 'zaza', 'zaza', 'Service', 0, 0, NULL, '2018-03-06', '2018-03-07', 'zaza', 'img-16.jpg', '2018-03-06 12:50:44');

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
  `approved` tinyint(4) DEFAULT '0',
  `adminlevel` int(11) DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `companyname`, `email`, `phone`, `contactperson`, `companylogo`, `password`, `created_at`, `approved`, `adminlevel`) VALUES
(1, 'Company1', 'company1@gmail.com', '0264846545645', 'Company1CP', '', '123456789', '2018-03-03 16:00:27', 1, 1),
(2, 'Company2', 'Company2@gmail.com', '5465132156', 'Company2CP', '', '123456789', '2018-03-03 16:01:21', 1, 3),
(3, 'Company3', 'company3@gmail.com', '0321654651', 'Contactpoerson3', '', '123456789', '2018-03-03 19:20:30', 1, 3),
(30, 'Company4', 'tahaygun@gmail.com', '685191658', 'Taha AYGUN', '', 'zazazaza', '2018-03-03 20:28:16', 0, 3),
(32, 'Taha', 'tahaygun@gmail.com', NULL, NULL, '', 'zazazaza', '2018-03-05 18:28:16', 1, 2),
(33, 'Coolblue', 'coolblue@gmail.com', '01561511561', 'Cool', 'coolblue-logo-web1.png', 'zazazaza', '2018-03-06 11:27:15', 1, 3);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
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
