-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 27, 2022 at 02:44 AM
-- Server version: 10.5.12-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id17244010_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `allstudents`
--

CREATE TABLE `allstudents` (
  `id` int(5) NOT NULL,
  `roll` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `project_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `allstudents`
--

INSERT INTO `allstudents` (`id`, `roll`, `project_id`) VALUES
(1, '18751A0512', 1),
(2, '18751A0511', 2),
(3, '18751A0550', 9),
(4, '18751A0533', 6),
(8, '18751A0513', 1),
(9, '18751A0543', 10),
(10, '18751A0522', 13),
(11, '18751A0520', 3),
(12, '18751A0532', 5),
(14, '18751A0531', 15),
(15, '18751A0530', 8),
(16, '18751A0541', 7),
(17, '18751A0551', 1),
(18, '18751A0556', 1),
(19, '18751A0557', 1),
(20, '18751A0597', 16),
(21, '17751F0413', 17),
(22, '18751A0536', 12);

-- --------------------------------------------------------

--
-- Table structure for table `Anupriya`
--

CREATE TABLE `Anupriya` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `roll` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `r0` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `r1` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `r2` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `r3` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `r` int(4) DEFAULT 0,
  `project_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Anupriya`
--

INSERT INTO `Anupriya` (`id`, `name`, `mobile`, `roll`, `email`, `address`, `r0`, `r1`, `r2`, `r3`, `r`, `project_id`) VALUES
(1, 'M Pravallika', '632677888', '18751A0550', 'pravallika@gmail.com', 'chittoor', '0', '0', '0', '0', 0, 9);

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id`, `username`, `password`) VALUES
(2, 'madhan', 'madhan6465'),
(4, 'm', 'm'),
(6, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `auth_guides`
--

CREATE TABLE `auth_guides` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auth_guides`
--

INSERT INTO `auth_guides` (`id`, `username`, `password`) VALUES
(2, 'saraswathi', '123'),
(3, 'Srinivasan', '900'),
(4, 'Venkatesan', '901'),
(5, 'Vijaykumar', '902'),
(6, 'Purushottam', '903'),
(7, 'Leelavathi', '904'),
(8, 'Anupriya', '905'),
(9, 'sivasankari', '906'),
(11, 'Sreeraman', '920'),
(12, 'Lakshmi ', '999');

-- --------------------------------------------------------

--
-- Table structure for table `auth_students`
--

CREATE TABLE `auth_students` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auth_students`
--

INSERT INTO `auth_students` (`id`, `username`, `password`) VALUES
(2, '18751A0511', '18751A0511'),
(3, '18751A0550', '18751A0550'),
(4, '18751A0533', '18751A0533'),
(6, '18751A0512', 'madhan'),
(8, '18751A0513', '18751A0513'),
(9, '18751A0543', '18751A0543'),
(10, '18751A0522', '18751A0522'),
(11, '18751A0520', '18751A0520'),
(12, '18751A0532', '18751A0532'),
(14, '18751A0531', '18751A0531'),
(15, '18751A0530', 'Mohini@123'),
(16, '18751A0541', '18751A0541'),
(17, '18751A0551', '18751A0551'),
(18, '18751A0556', '18751A0556'),
(19, '18751A0557', '18751A0557'),
(20, '18751A0597', '18751A0597'),
(21, '17751F0413', '17751F0413'),
(22, '18751A0536', '18751A0536');

-- --------------------------------------------------------

--
-- Table structure for table `google`
--

CREATE TABLE `google` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `google`
--

INSERT INTO `google` (`email`, `password`) VALUES
('bmadhanmohan123@gmail.com', '12345'),
('gsrkt40@gmail.com', 'Priyababy@40');

-- --------------------------------------------------------

--
-- Table structure for table `guides`
--

CREATE TABLE `guides` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `guide_name` varchar(30) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `department` varchar(10) NOT NULL,
  `allocation` tinyint(1) NOT NULL DEFAULT 0,
  `project_id` int(11) NOT NULL,
  `meeting` varchar(255) NOT NULL DEFAULT 'No meeting created',
  `time` varchar(100) DEFAULT NULL,
  `duration` text DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guides`
--

INSERT INTO `guides` (`id`, `photo`, `last_name`, `guide_name`, `mobile`, `department`, `allocation`, `project_id`, `meeting`, `time`, `duration`, `pass`) VALUES
(2, 'saraswati.jpg', 'saraswathi', 'Dr R saraswathi', '123', 'CSE', 1, 1, 'https://us05web.zoom.us/j/85630242693?pwd=OVBHc1BTbmpNdDBmaElDNUhNbmkzZz09', '2022-06-24T09:14:00Z', '40', '123'),
(3, 'IMG_20220523_161042.jpg', 'Sreeraman', 'Y Sreeraman', '920', 'CSE', 1, 5, 'No meeting created', NULL, NULL, NULL),
(4, 'IMG_20220531_170943.jpg', 'Venkatesan', 'Dr Venkatesan', '901', 'CSE', 1, 8, 'No meeting created', NULL, NULL, NULL),
(5, 'IMG_20220531_105708.jpg', 'Vijaykumar', 'Dr. Vijaykumar', '902', 'CSE', 1, 10, 'No meeting created', NULL, NULL, NULL),
(6, 'IMG_20220531_074354.jpg', 'Purushottam', 'E Purushottam', '903', 'CSE', 1, 6, 'No meeting created', NULL, NULL, NULL),
(7, 'IMG_20220531_172624.jpg', 'Leelavathi', 'P Leelavathi', '904', 'CSE', 1, 7, 'No meeting created', NULL, NULL, NULL),
(8, 'anu.jpg', 'Anupriya', '. Anupriya', '905', 'CSE', 1, 9, 'No meeting created', NULL, NULL, NULL),
(9, 'nith.jpg', 'sivasankari', 'Dr .S. sivasankari', '906', 'CSE', 1, 2, 'No meeting created', NULL, NULL, NULL),
(10, 'IMG_20220531_074324.jpg', 'Srinivasan', 'A Srinivasan', '900', 'CSE', 1, 15, 'No meeting created', '2022-06-04T16:17:00Z', '45', 'srinivas'),
(21, 'IMG_20220514_204432.jpg', 'Lakshmi ', 'S Lakshmi ', '999', 'CSE', 1, 12, 'No meeting created', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Lakshmi`
--

CREATE TABLE `Lakshmi` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `roll` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `r0` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `r1` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `r2` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `r3` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `r` int(4) DEFAULT 0,
  `project_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Lakshmi`
--

INSERT INTO `Lakshmi` (`id`, `name`, `mobile`, `roll`, `email`, `address`, `r0`, `r1`, `r2`, `r3`, `r`, `project_id`) VALUES
(1, 'k Hemanth ', '123', '18751A0536', 'boh123@gmail.com', 'Palamaner', '0', '0', '0', '0', 0, 12);

-- --------------------------------------------------------

--
-- Table structure for table `Leelavathi`
--

CREATE TABLE `Leelavathi` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `roll` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `r0` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `r1` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `r2` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `r3` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `r` int(4) DEFAULT 0,
  `project_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Leelavathi`
--

INSERT INTO `Leelavathi` (`id`, `name`, `mobile`, `roll`, `email`, `address`, `r0`, `r1`, `r2`, `r3`, `r`, `project_id`) VALUES
(1, 'K V vanitha', '6302285097', '18751A0541', 'kv@gmail.com', 'chittoor', '0', '0', '0', '0', 0, 7);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `roll` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `r0` int(2) DEFAULT NULL,
  `r1` int(2) DEFAULT NULL,
  `r2` int(2) DEFAULT NULL,
  `r3` int(2) DEFAULT NULL,
  `r` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `project_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `project_case` varchar(255) COLLATE utf8_bin NOT NULL,
  `project_level` varchar(50) COLLATE utf8_bin NOT NULL,
  `allocation` tinyint(1) NOT NULL DEFAULT 0,
  `document` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `project_name`, `project_case`, `project_level`, `allocation`, `document`) VALUES
(1, 'Student Projection Allocation and management studies', 'Web Applications', 'ND', 2, 'SPM_DOC.doc'),
(2, 'Mental health prediction using Machine learning in IT employees', 'Machine learning', 'ND', 2, NULL),
(3, 'credit card fraud transaction detection using ML', 'Machine learning', 'ND', 1, NULL),
(5, 'Heart predection using Machine Learning', 'Machine learning', 'easy', 2, NULL),
(6, 'Chatbot system using Natural Language processing', 'DL', 'HND', 2, NULL),
(7, 'Knowledge based approach to detect potentially risky websites', 'Ml', 'HND', 2, NULL),
(8, 'instrusion detection using honey pot network in cloud environment', 'cloud', 'ND', 2, 'IoT Unit - 5.pdf'),
(9, 'An optimal approach for E-commerce application service on the public cloud Environment', 'cloud computing', 'HND', 2, NULL),
(10, 'Comparative study of machine learning algorithm for fraud detection', 'Machine learning', 'ND', 2, NULL),
(11, 'Cost effective resource allocation for multier mobile edge computing in 5g networks', 'Cloud Computing', 'HND', 0, NULL),
(12, 'face detection and recognition system to monitor students using ml', 'Machine learning', 'ND', 2, NULL),
(13, 'Accident detection using ML', 'Machine learning', 'easy', 1, NULL),
(14, 'Sign Language to Text Translation in Real Time Using Convolutional Neural Network', 'Neural networks', 'HND', 0, NULL),
(15, 'A new image encryption algorithm for grey and color medical images', 'Deep learning', 'Hard', 2, NULL),
(16, 'crop yield prediction', 'ml', 'Easy', 1, NULL),
(17, 'Campus Recruitment system', 'Web applications', 'Intermediate', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Purushottam`
--

CREATE TABLE `Purushottam` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `roll` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `r0` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `r1` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `r2` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `r3` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `r` int(4) DEFAULT 0,
  `project_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Purushottam`
--

INSERT INTO `Purushottam` (`id`, `name`, `mobile`, `roll`, `email`, `address`, `r0`, `r1`, `r2`, `r3`, `r`, `project_id`) VALUES
(1, 'K Bhanu Praksh', '630685099', '18751A0533', 'banupraks@gmail.com', 'chittoor', '0', '0', '0', '0', 0, 6);

-- --------------------------------------------------------

--
-- Table structure for table `saraswathi`
--

CREATE TABLE `saraswathi` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `roll` varchar(12) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `r0` varchar(10) DEFAULT NULL,
  `r1` varchar(10) DEFAULT NULL,
  `r2` varchar(10) DEFAULT NULL,
  `r3` varchar(10) DEFAULT NULL,
  `r` int(4) DEFAULT 0,
  `project_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saraswathi`
--

INSERT INTO `saraswathi` (`id`, `name`, `mobile`, `roll`, `email`, `address`, `r0`, `r1`, `r2`, `r3`, `r`, `project_id`) VALUES
(1, '  Bajanthri Madhanmohan', '6302285099', '  18751A0512', 'bmadhanmohan123@gmail.com', '  palamaner', 'Present', '0', '0', '0', 25, 1),
(2, ' B pavan kalyan', '123', '  18751A0513', 'pbkln@gmail.com', '  thalakona', 'Present', 'Present', '-', 'Present', 0, 1),
(4, 'M Ravindra Naik', '123', ' 18751A0551', 'mravi@gmail.com', 'kadiri', '-', '-', '-', '-', 0, 1),
(5, 'p monesh Reddy', '123', ' 18751A0556', 'monesh@gmail.com', 'chittoor', 'present', '-', '-', '-', 0, 1),
(6, 'm chaithanya', '123', ' 18751A0557', 'mchaithuuu@gmail.com', 'chapadu', 'Absent', '-', '-', '-', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sivasankari`
--

CREATE TABLE `sivasankari` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `roll` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `r0` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `r1` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `r2` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `r3` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `r` int(4) DEFAULT 0,
  `project_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sivasankari`
--

INSERT INTO `sivasankari` (`id`, `name`, `mobile`, `roll`, `email`, `address`, `r0`, `r1`, `r2`, `r3`, `r`, `project_id`) VALUES
(1, 'B Nitheesha', '6111111099', '18751A0511', 'nitheesha3@gmail.com', 'chittoor', '0', '0', '0', '0', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `Sreeraman`
--

CREATE TABLE `Sreeraman` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `roll` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `r0` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `r1` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `r2` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `r3` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `r` int(4) DEFAULT 0,
  `project_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Sreeraman`
--

INSERT INTO `Sreeraman` (`id`, `name`, `mobile`, `roll`, `email`, `address`, `r0`, `r1`, `r2`, `r3`, `r`, `project_id`) VALUES
(1, 'J Benitta', '6304435099', '18751A0532', 'bnta@gmail.com', 'chittoor', '0', '0', '0', '0', 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `Srinivasan`
--

CREATE TABLE `Srinivasan` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `roll` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `r0` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `r1` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `r2` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `r3` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `r` int(4) DEFAULT 0,
  `project_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Srinivasan`
--

INSERT INTO `Srinivasan` (`id`, `name`, `mobile`, `roll`, `email`, `address`, `r0`, `r1`, `r2`, `r3`, `r`, `project_id`) VALUES
(1, 'G Sai Joshika', '6302285095', '18751A0531', 'josh@gmail.com', 'chittoor', '0', '0', '0', '0', 0, 15);

-- --------------------------------------------------------

--
-- Table structure for table `std_project`
--

CREATE TABLE `std_project` (
  `roll` varchar(12) NOT NULL,
  `document` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `roll` varchar(12) COLLATE utf8_bin NOT NULL,
  `mobile` varchar(12) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `department` varchar(50) COLLATE utf8_bin NOT NULL,
  `address` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `level` varchar(50) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `project_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `roll`, `mobile`, `email`, `department`, `address`, `level`, `date`, `project_id`) VALUES
(1, 'Bajanthri Madhanmohan', '18751A0512', '6302285099', 'bmadhanmohan123@gmail.com', 'CSE', 'palamaner', 'ND', '2022-05-30', 1),
(2, 'B Nitheesha', '18751A0511', '6111111099', 'nitheesha3@gmail.com', 'CSE', 'chittoor', 'ND', '2022-05-30', 2),
(3, 'M Pravallika', '18751A0550', '632677888', 'pravallika@gmail.com', 'CSE', 'chittoor', 'HND 1', '2022-05-30', 9),
(4, 'K Bhanu Praksh', '18751A0533', '630685099', 'banupraks@gmail.com', 'CSE', 'chittoor', 'ND 2', '2022-05-30', 6),
(6, 'kantam  Yogesh', '18751A0543', '630122344', 'yogeshkntam@gmail.com', 'CSE', 'palasamudram', 'ND', '2022-05-31', 10),
(7, 'Geethika Chowdary', '18751A0522', '6304445099', 'geethikachowdary@gmail.com', 'CSE', 'pakala', 'ND', '2022-05-31', 13),
(8, 'D Jyothi prasad', '18751A0520', '6302285092', 'djyothi@gmail.com', 'CSE', 'chittoor', 'ND', '2022-05-31', 3),
(9, 'J Benitta', '18751A0532', '6304435099', 'bnta@gmail.com', 'CSE', 'chittoor', 'HND 2', '2022-05-31', 5),
(11, 'G Sai Joshika', '18751A0531', '6302285095', 'josh@gmail.com', 'CSE', 'chittoor', 'ND 2', '2022-05-31', 15),
(12, 'GS Rakesh', '18751A0530', '6302285091', 'rmp3@gmail.com', 'CSE', 'palamaner', 'HND 1', '2022-05-31', 8),
(13, 'K V vanitha', '18751A0541', '6302285097', 'kv@gmail.com', 'CSE', 'chittoor', 'ND', '2022-05-31', 7),
(14, 'M Mansoor', '18751A0597', '12333', 'msmsmk117@gmail.com', 'CSE', 'chittor', 'ND', '2022-06-15', 16),
(15, 'C Madhurima', '17751F0413', '898809286', 'madhu3c@gmail.com', 'MCA', 'Puthalapattu', 'ND', '2022-06-16', 17),
(16, 'k Hemanth ', '18751A0536', '123', 'boh123@gmail.com', 'CSE', 'Palamaner', 'ND', '2022-06-24', 12);

-- --------------------------------------------------------

--
-- Table structure for table `suggest`
--

CREATE TABLE `suggest` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descr` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'NA',
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `suggest`
--

INSERT INTO `suggest` (`id`, `name`, `title`, `descr`, `date`) VALUES
(9, 'MADHAN', 'CRC', '', '2022-06-24 09:11:08');

-- --------------------------------------------------------

--
-- Table structure for table `Venkatesan`
--

CREATE TABLE `Venkatesan` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `roll` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `r0` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `r1` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `r2` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `r3` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `r` int(4) DEFAULT 0,
  `project_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Venkatesan`
--

INSERT INTO `Venkatesan` (`id`, `name`, `mobile`, `roll`, `email`, `address`, `r0`, `r1`, `r2`, `r3`, `r`, `project_id`) VALUES
(1, 'GS Rakesh', '6302285091', '18751A0530', 'rmp3@gmail.com', 'palamaner', '0', '0', '0', '0', 0, 8);

-- --------------------------------------------------------

--
-- Table structure for table `Vijaykumar`
--

CREATE TABLE `Vijaykumar` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `roll` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `r0` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `r1` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `r2` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `r3` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `r` int(4) DEFAULT 0,
  `project_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Vijaykumar`
--

INSERT INTO `Vijaykumar` (`id`, `name`, `mobile`, `roll`, `email`, `address`, `r0`, `r1`, `r2`, `r3`, `r`, `project_id`) VALUES
(1, 'kantam  Yogesh', '630122344', '18751A0543', 'yogeshkntam@gmail.com', 'palasamudram', '0', '0', '0', '0', 0, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allstudents`
--
ALTER TABLE `allstudents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Anupriya`
--
ALTER TABLE `Anupriya`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_guides`
--
ALTER TABLE `auth_guides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_students`
--
ALTER TABLE `auth_students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `password` (`password`);

--
-- Indexes for table `guides`
--
ALTER TABLE `guides`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mobile` (`mobile`),
  ADD UNIQUE KEY `project_id` (`project_id`);

--
-- Indexes for table `Lakshmi`
--
ALTER TABLE `Lakshmi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Leelavathi`
--
ALTER TABLE `Leelavathi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Purushottam`
--
ALTER TABLE `Purushottam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saraswathi`
--
ALTER TABLE `saraswathi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sivasankari`
--
ALTER TABLE `sivasankari`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Sreeraman`
--
ALTER TABLE `Sreeraman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Srinivasan`
--
ALTER TABLE `Srinivasan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `std_project`
--
ALTER TABLE `std_project`
  ADD PRIMARY KEY (`roll`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`);

--
-- Indexes for table `suggest`
--
ALTER TABLE `suggest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Venkatesan`
--
ALTER TABLE `Venkatesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Vijaykumar`
--
ALTER TABLE `Vijaykumar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allstudents`
--
ALTER TABLE `allstudents`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `Anupriya`
--
ALTER TABLE `Anupriya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `auth_guides`
--
ALTER TABLE `auth_guides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `auth_students`
--
ALTER TABLE `auth_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `guides`
--
ALTER TABLE `guides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `Lakshmi`
--
ALTER TABLE `Lakshmi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Leelavathi`
--
ALTER TABLE `Leelavathi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `Purushottam`
--
ALTER TABLE `Purushottam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `saraswathi`
--
ALTER TABLE `saraswathi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sivasankari`
--
ALTER TABLE `sivasankari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Sreeraman`
--
ALTER TABLE `Sreeraman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Srinivasan`
--
ALTER TABLE `Srinivasan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `suggest`
--
ALTER TABLE `suggest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `Venkatesan`
--
ALTER TABLE `Venkatesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Vijaykumar`
--
ALTER TABLE `Vijaykumar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
