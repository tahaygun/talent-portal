-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 11, 2018 at 05:40 PM
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
(33, 39, 'CIC Rotterdam is looking for a Relationship Manager', 'CIC Rotterdam is looking for a professional with ambition and experience building meaningful client relationships to build their Relationship Management & Sales Team. This is a great opportunity for someone with three or more years of professional work.', 'CIC’s mission is to improve the world by helping exceptional entrepreneurs innovate better and faster. CIC’s mission is to improve the world by helping exceptional entrepreneurs innovate better and faster. ', 'Corporate', 0, 1, 'Growth International City  Digital Energy', '2018-03-09', '2019-05-17', NULL, NULL, 'https://www.linkedin.com/company/venturecaferotterdam/', 'luca-bravo-207676-unsplash-e1519819744486.jpg', '2018-03-09 10:50:49'),
(34, 38, 'JUNIOR WEB DEVELOPER', 'As a junior developer, you will build data rich driven web applications. Applicants should be able to demonstrate experience of building such data rich web applications. We are seeking an all-rounder with front end (JavaScript) experience and ideally, server side (Node.js) experience join our talented team.', 'We are an independent firm of designers, planners, engineers, consultants and technical specialists offering a broad range of professional services. Through our work, we make a positive difference in the world.', 'Startup', 1, 1, 'Growth International City Talent Community  Inspiration', '2018-03-09', '2019-01-24', NULL, NULL, 'https://www.trainor.com/talent/info/full-stack-web-developer/5/connecticut', 'entry-level-tech-jobs.jpg', '2018-03-09 10:59:33'),
(35, 40, 'Business Intern', 'Highly curious and adept at developing new skills – you will have worked within an ecommerce team, most likely as a first role or internship and will be eager to learn and develop hands-on experience of trading a busy ecommerce fashion website. You may not have experience for the specific tools we use – for example our ecommerce platform, but you will have a track record of getting to grips with new technologies quickly. Highly numerate, with a strong eye for detail.', 'In industry-leading, independent, full service, ‘boutique’ communications agency that is proud to do things differently… delivering to exacting quality standards, but with a more personalised, service-orientated and ethical approach.', 'Startup', 0, 0, 'Growth International  Resilience Culture', '2018-03-09', '2018-08-17', NULL, NULL, 'https://www.trainor.com/talent/info/full-stack-web-developer/5/connecticut', 'luca-bravo-207676-unsplash-e15198197444862.jpg', '2018-03-09 11:22:18'),
(36, 40, 'Front End Developer', 'We are looking for a hard-working individual with a demonstrated interest in web development to join our team. You will work alongside experienced members of staff as you are trained in several key areas of front-end web development. By the time your training has finished you will be building websites for real clients in a variety of different industries.', 'In industry-leading, independent, full service, ‘boutique’ communications agency that is proud to do things differently… delivering to exacting quality standards, but with a more personalised, service-orientated and ethical approach.', 'Startup', 1, 1, 'Growth International City  Resilience Inspiration', '2018-03-09', '2018-07-19', NULL, NULL, 'https://www.indeed.co.uk/Junior-Web-Developer-jobs?vjk=a98f39dd040f71da', 'maxresdefault3.jpg', '2018-03-09 11:37:36'),
(37, 40, 'PHP Developer', 'An excellent opportunity has just arisen working for one of Northampton\'s most ambitious digital agencies as a Junior PHP Developer. You will be part of a highly motivated team and your role will be interesting and varied, working on web projects with a global audience.', 'In industry-leading, independent, full service, ‘boutique’ communications agency that is proud to do things differently… delivering to exacting quality standards, but with a more personalised, service-orientated and ethical approach.', 'Startup', 1, 1, 'International Community  Resilience Inspiration', '2018-03-09', '2018-03-31', NULL, NULL, 'https://www.trainor.com/talent/info/full-stack-web-developer/5/connecticut', 'download2.png', '2018-03-09 11:47:36'),
(38, 40, 'Back end Junior Developer', 'As a junior, you will work alongside senior developers, one of whom will be your mentor, gradually taking on more responsibility yourself. You will gain invaluable experience and have an opportunity to increase your skills whilst at the same time helping us continue to provide excellent client services. You will use and develop the skills listed below in this role, though we don’t expect you to have experience of all these now.', 'In industry-leading, independent, full service, ‘boutique’ communications agency that is proud to do things differently… delivering to exacting quality standards, but with a more personalised, service-orientated and ethical approach.', 'Startup', 0, 0, 'Growth International ', '2018-03-09', '2018-07-12', NULL, NULL, 'google.com', 'entry-level-tech-jobs1.jpg', '2018-03-09 11:52:06');

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
(1, 'Ivina ', 'ivina@ivina.com', '01561511561', 'Cool', 'author.jpg', 'a66ddee4e6f630032070648ec0ca11045d9b7012', '2018-03-03 16:00:27', 0, '', NULL, 2),
(37, 'Hogeschool Rotterdam', 'hog@gmail.com', '01565131231', 'Person2', 'logo_client_hogeschoolrotterdam-300x300.png', 'a66ddee4e6f630032070648ec0ca11045d9b7012', '2018-03-07 11:12:30', 0, 'The Rotterdam University of Applied Sciences (Dutch: Hogeschool Rotterdam) is a vocational university located in the city of Rotterdam, Netherlands. It was created in 1988 by a large-scale.', 0, 3),
(38, 'Rapid Development', 'rapid@development.com', '0612345678', 'Zohre', 'developmesnt.png', 'a66ddee4e6f630032070648ec0ca11045d9b7012', '2018-03-09 10:26:50', 0, 'We are an independent firm of designers, planners, engineers, consultants and technical specialists offering a broad range of professional services. Through our work, we make a positive difference in the world.', 1, 1),
(39, 'CIC Rotterdam', 'cic@rotterdam.com', '0612345678', 'Andreas', 'cic1.png', 'a66ddee4e6f630032070648ec0ca11045d9b7012', '2018-03-09 10:46:43', 0, 'CIC’s mission is to improve the world by helping exceptional entrepreneurs innovate better and faster. ', 1, 3),
(40, '50 Mushroom', '50@mushroom.com', '0615151515', 'Adriana', 'main_content_MAGIC_MUSHROOMS_AND_CHRISTMAS_WIDE.jpg', 'a66ddee4e6f630032070648ec0ca11045d9b7012', '2018-03-09 11:06:21', 0, 'In industry-leading, independent, full service, ‘boutique’ communications agency that is proud to do things differently… delivering to exacting quality standards, but with a more personalised, service-orientated and ethical approach.', 1, 3),
(41, 'Zohre', 'zohre@gmail.com', NULL, NULL, '', 'a66ddee4e6f630032070648ec0ca11045d9b7012', '2018-03-09 13:25:22', 0, '', 1, 2),
(42, 'Taha', 'taha@taha.com', NULL, NULL, '', 'a66ddee4e6f630032070648ec0ca11045d9b7012', '2018-03-09 13:26:00', 0, '', 1, 2);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
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
