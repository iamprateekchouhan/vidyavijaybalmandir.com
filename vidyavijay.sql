-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 10, 2020 at 01:32 PM
-- Server version: 5.7.24-0ubuntu0.16.04.1
-- PHP Version: 5.6.39-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vidyavijay`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission_form`
--

CREATE TABLE `admission_form` (
  `admission_id` int(11) NOT NULL,
  `academic_year` varchar(50) NOT NULL,
  `admission_to` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `place_of_birth` varchar(50) NOT NULL,
  `current_school` varchar(200) NOT NULL,
  `reason_to_change` text NOT NULL,
  `permanent_address` varchar(200) NOT NULL,
  `country` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `other_contact` varchar(50) NOT NULL,
  `transport` varchar(100) NOT NULL,
  `contacted_before` varchar(20) NOT NULL,
  `comment` text NOT NULL,
  `confirmation_code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission_form`
--

INSERT INTO `admission_form` (`admission_id`, `academic_year`, `admission_to`, `first_name`, `last_name`, `gender`, `dob`, `religion`, `nationality`, `place_of_birth`, `current_school`, `reason_to_change`, `permanent_address`, `country`, `state`, `city`, `pincode`, `phone`, `email`, `mobile`, `other_contact`, `transport`, `contacted_before`, `comment`, `confirmation_code`) VALUES
(1, '2020-21', 'Nursery', 'test', 'prk', 'male', '2000-11-30', 'hindu', 'hindu', 'indore', 'golden future public school', 'too far from my home', 'indore', 'india', 'mp', 'indore', '452001', '07311234567', 'test@gmail.com', '9638527410', '', 'school_transport', 'yes', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission_form`
--
ALTER TABLE `admission_form`
  ADD PRIMARY KEY (`admission_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission_form`
--
ALTER TABLE `admission_form`
  MODIFY `admission_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
