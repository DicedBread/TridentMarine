-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2021 at 04:13 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tridentmarine`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `student_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `age` smallint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`student_id`, `email`, `password`, `first_name`, `last_name`, `phone`, `age`) VALUES
(1, 'test@test.com', '$2y$10$SfhYIDtn.iOuCW7zfoFLuuZHX6lja4lF4XA4JqNmpiH/.P3zB8JCa', 'test', 'bruh', 0, 0),
(5, 'bob@bob.com', '$2y$10$sdd1OuaI9Ni244DJ.4Ox2eLUGBgjmhb2kTZcyO7ZqcrwLEqmUsSlC', 'bob', 'bob', 345678436, 46),
(20, 'billy@billy.com', '$2y$10$VXpr2mOTTaHXTgqPzYgU2Oy6qDErOzonMuUGedxiiT.eU/LhFTbEu', 'billy', 'bob', 12345676, 78),
(21, 'Arlojharrison@gmail.com', '$2y$10$RZCJ.acdY0FNXXYujw5K1O9vuPo4pMXt0pZpJfqhNmKlgmLVqe0uG', 'usdfjgh', 'sdfgsd', 234567883, 45);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` smallint(6) NOT NULL,
  `course_type` varchar(20) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `aim` text NOT NULL,
  `prerequisite` text NOT NULL,
  `minimum_age` smallint(6) NOT NULL,
  `endorsement` text NOT NULL,
  `image_path` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_type`, `course_name`, `aim`, `prerequisite`, `minimum_age`, `endorsement`, `image_path`) VALUES
(1, 'Power Boating', 'Level 1 Start Powerboating', 'To provide practical introduction to boat handling and safety on powerboats. The course may be conducted in a variety of boat types, both planning and displacement.', 'None', 8, 'Is aged 12-15 and therefore should only used powered craft under the supervision of a responsible adult on board the craft\r\n', ''),
(2, 'Power Boating', 'Level 2 Powerboating Handling  ', 'To teach boat handling and seamanship in powerboats. The course may be conducted in a variety of boat types, both planning and displacement.', 'None ', 8, 'Is aged 12-15 and therefore should only used powered craft under the supervision of a responsible adult on board the craft ', ''),
(3, 'Power Boating', 'Intermediate Powerboat Day Cruising', 'To teach powerboating up to the standard required to complete a short coastal passage by day.', 'Have the theory knowledge to RYA Dayskipper Shorebased. It is strongly recommended that candidates hold a current 1st Aid certificate and a VHF/SRC operators certificate.', 16, 'Assistance required to complete the course', ''),
(4, 'Power Boating', 'Advanced Powerboating Day And Night', 'To teach boat handling, seamanship, pilotage and navigation up to the standards required to drive a planing powerboat safely by day and night in tidal coastal waters with which the candidate may be familiar.   ', 'Candidates should be competent to the standard of Intermediate Powerboat certificate with a thorough knowledge of navigation and chartwork to the level of Coastal Skipper/ RYA Yachtmaster Shorebased certificate. It is strongly recommended that candidates hold a current 1st Aid certificate and a VHF/SRC operators certificate. \r\n', 16, 'Assistance required to complete the course \r\n', ''),
(5, 'Motor Cruising', 'Helmsman’s Course', 'To teach boat handling and seamanship in motor cruisers. By the end of the course you will feel comfortable berthing and unberthing in straightforward locations and should be confident in general boat handling.    \r\n', 'None ', 12, '', ''),
(6, 'Motor Cruising', 'Day Skipper', 'To teach pilotage, navigation and seamanship and boat handling up to the standard required to skipper a small motor cruiser safely by day in familiar waters.     \r\n', 'Recommended 5 days at sea / 100nm / 4 nights hours \r\n', 16, '', ''),
(7, 'Motor Cruising', 'Coastal Skipper', 'To teach skills and techniques required to skipper a motor cruiser safely on a coastal and offshore passages by day and night.      \r\n', 'Recommended 15 days at sea / 300nm / 8 nights hours / 2 days as skipper\r\n', 17, '', ''),
(8, 'Personal Watercraft', 'Personal Watercraft Proficiency Course', 'To teach personal watercraft users how to make preparations for sea, boat handling at slow and high speed with an awareness for Rules of the Road.', 'None', 12, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `course_dates`
--

CREATE TABLE `course_dates` (
  `id` smallint(6) NOT NULL,
  `course_id` smallint(6) NOT NULL,
  `course_date` date NOT NULL,
  `start_time` time NOT NULL,
  `enrolment_count` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_dates`
--

INSERT INTO `course_dates` (`id`, `course_id`, `course_date`, `start_time`, `enrolment_count`) VALUES
(1, 1, '2021-09-07', '07:00:00', 0),
(4, 1, '2021-09-13', '07:00:00', 0),
(5, 1, '2021-09-15', '10:55:52', 0),
(6, 2, '2021-09-23', '07:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `enrolments`
--

CREATE TABLE `enrolments` (
  `enrol_id` smallint(6) NOT NULL,
  `course_date_id` smallint(6) NOT NULL,
  `student_id` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enrolments`
--

INSERT INTO `enrolments` (`enrol_id`, `course_date_id`, `student_id`) VALUES
(20, 1, 1),
(11, 1, 2),
(21, 4, 1),
(24, 5, 1),
(23, 6, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_dates`
--
ALTER TABLE `course_dates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `course_session` (`course_id`,`course_date`);

--
-- Indexes for table `enrolments`
--
ALTER TABLE `enrolments`
  ADD PRIMARY KEY (`enrol_id`),
  ADD UNIQUE KEY `course_enrolment` (`course_date_id`,`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `course_dates`
--
ALTER TABLE `course_dates`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `enrolments`
--
ALTER TABLE `enrolments`
  MODIFY `enrol_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
