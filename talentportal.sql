-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 08, 2018 at 03:29 PM
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
  `vacancy` int(11) DEFAULT NULL,
  `filled_vacancy` int(11) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `support_image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `postings`
--

INSERT INTO `postings` (`id`, `user_id`, `title`, `description`, `about`, `identifies`, `active`, `highlighted`, `tags`, `startdate`, `enddate`, `vacancy`, `filled_vacancy`, `link`, `support_image`, `created_at`) VALUES
(21, 37, 'Business economics part-time', 'The Business Economics program continues under the name Finance & Control per academic year 2018-2019.', 'Hogeschool Rotterdam is doing its utmost to keep the information on this site as up-to-date and complete as possible.', 'Academia', 1, 0, 'City', '2018-03-09', '2018-03-23', 0, NULL, 'https://www.hogeschoolrotterdam.nl/opleidingen/bachelor/bedrijfseconomie/deeltijd/', 'fca7d6c543f149898ca6cb942eff0b00_(1).png', '2018-03-07 11:16:46'),
(22, 37, 'Architecture part time\r\nFour-year master in Dutch, starts in September and February', 'The Master\'s program in Architecture focuses on graduated bachelor\'s students who want to deepen and develop their design skills.', 'Of course to develop in the profession, but also to use your design expertise and other professional skills for society. If you have graduated, you can register directly in the Architects Register as an architect.', 'Academia', 1, 1, 'International', '2018-03-02', '2018-03-17', 0, NULL, 'https://www.hogeschoolrotterdam.nl/opleidingen/master/architectuur/deeltijd/', 'ddbfafc2803742e6ad55feaa7388a6b4.png', '2018-03-07 11:18:30'),
(29, 1, 'aa', 'aaaa', 'aaaa', 'Startup', 1, 1, 'International  Resilience Digital', '2018-03-08', '2018-03-16', 1, 1, 'aaaa', 'map-marker.png', '2018-03-08 13:07:15'),
(30, 33, 'zaza', 'zaza', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Startup', 0, 0, ' Resilience Energy', '2018-03-08', '2018-03-10', 12, 35, '1212', 'venturecafe2.jpg', '2018-03-08 15:01:41');

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
  `about` varchar(255) NOT NULL,
  `approved` tinyint(4) DEFAULT '0',
  `adminlevel` int(11) DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `companyname`, `email`, `phone`, `contactperson`, `companylogo`, `password`, `created_at`, `trusted`, `about`, `approved`, `adminlevel`) VALUES
(1, 'Admin', 'company1@gmail.com', '01561511561', 'Cool', 'author.jpg', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '2018-03-03 16:00:27', 0, '', 1, 1),
(2, 'Company2222', 'Company2@gmail.com', '5465132156', 'Company2CP', 'thumb1.png', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '2018-03-03 16:01:21', 0, 'afdfsdfsdfsdfsdf', 1, 3),
(33, 'Coolblue', 'coolblue@gmail.com', '01561511561', 'CoolBoy', '_my_posts_page21.png', 'a6370ffbf3a54406aefcabf7d375c5bf64bb1e34', '2018-03-06 11:27:15', 1, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 1, 3),
(37, 'Hogeschool Rotterdam', 'hog@gmail.com', '01565131231', 'Person2', 'features-img-11.png', 'a6370ffbf3a54406aefcabf7d375c5bf64bb1e34', '2018-03-07 11:12:30', 1, 'fsdfsdfsdfsfsdfsd', 1, 3);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
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
