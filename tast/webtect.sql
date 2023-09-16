-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2023 at 10:20 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtect`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `c_id` int(10) NOT NULL,
  `c_title` text NOT NULL,
  `c_description` text NOT NULL,
  `c_picturer` text NOT NULL,
  `c_category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`c_id`, `c_title`, `c_description`, `c_picturer`, `c_category`) VALUES
(24, 'MATHEMATICS', '\r\nIn summary, here are 10 of our most popular mathematics courses Introduction to Mathematical Thinking: Stanford University Algebra: Elementary to Advanced: Johns Hopkins University Mathematics for Machine Learning and Data Science: DeepLearning.AI..', '', 'MATHEMATICS'),
(25, 'PYTHON Courses', 'What is Python?\r\nPython is a popular programming language. It was created by Guido van Rossum, and released in 1991.\r\n\r\n\r\n\r\n\r\n\r\n', '', 'ICT'),
(26, 'HTML Courses', '\r\n\r\nWhat is HTML? HTML stands for Hyper Text Markup Language HTML is the standard markup language for creating Web pages HTML describes the structure of a Web page HTML consists of a series of elements HTML.', '', 'ICT'),
(27, 'engineering programme', 'Engineering is an extensive subject, and with so many types of engineering to choose from, it can be difficult to narrow down which one is for you. To help you to decide, you should try and identify what you’re passionate about. What gets you excited, and what do you spend your free time on? All types of engineering include some form of problem-solving (and generally focus on making life easier), but what engineering-related solution gives you the biggest buzz?', '', 'ENGINERRING');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE `lecturer` (
  `l_id` int(10) NOT NULL,
  `l_firstname` text NOT NULL,
  `l_lastname` text NOT NULL,
  `l_email` text NOT NULL,
  `l_password` text NOT NULL,
  `l_bio` text NOT NULL,
  `l_expertise` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`l_id`, `l_firstname`, `l_lastname`, `l_email`, `l_password`, `l_bio`, `l_expertise`) VALUES
(2, 'tuyishime ', 'tuyiseng', 'yverutembeza@gmail.com', 'message', '', ''),
(3, 'uwera', 'janviere', 'uwera@gmail.com', 'uweraa', '', ''),
(4, 'Emmauel', 'TUYISENGE', 'gjh@gmail.com', 'wwwwweoeoe', '', ''),
(5, 'tuyishime ', 'david', 'monchel@gmail.com', 'wwwwweoeoe', '', ''),
(6, 'yesu', 'yesu', 'yesu@gmail.com', 'yesu', '', ''),
(7, 'dany', 'TUYISENGE', 'melody@gmail.com', 'ee', '', ''),
(8, 'kexxxx', 'jean', 'tuyisengeemmanuel1999@gmail.com', 'ahahahah', '', ''),
(9, 'emmanuel', 'jean', 'tuyisengeemmanuel1999@gmail.com', 'ahahahah', '', ''),
(10, 'tuyisenge', 'TUYISENGE', 'monchel@gmail.com', 'emmydd', '', ''),
(11, 'emmanuel', 'tuyisenge', 'tuyisengeemmanuel1999@gmail.com', 'monchel1236', '', ''),
(12, 'keza', 'emmanuel', 'monchelnumber1@gmail.com', 'monchel1236', '', ''),
(13, 'juhwidjiqoajkoz', 'sdiischicjo', 'kwcjokefjok', 'kascjocefjkok', '', ''),
(14, 'kazungu', 'kerry', 'yoyoy@gmail.com', 'noone', '', ''),
(15, 'RWEMA', 'jean', 'jean@gmail.com', 'jojojojojojojoojojojoo', '', ''),
(16, 'KAMANA', 'LEAN', 'melody@gmail.com', 'EMMMYYY', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `s_id` int(20) NOT NULL,
  `s_firstname` text NOT NULL,
  `s_lastname` text NOT NULL,
  `s_email` text NOT NULL,
  `s_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`s_id`, `s_firstname`, `s_lastname`, `s_email`, `s_password`) VALUES
(76, 'Emmy', 'NZURI', 'gjh@gmail.com', 'Nzaza'),
(77, 'tuyisenge', 'emmanuel', 'monchel@gmail.com', 'monchel1236'),
(78, 'keza', 'jean', 'monchelnumber1@gmail.com', 'ahahahah'),
(79, 'emmanuel', 'tuyisenge', 'tuyisengeemmanuel1999@gmail.com', 'monchel1236'),
(80, 'KAMANA', 'Aimee', 'sam@gmail.com', 'monchel1236'),
(81, 'Emmanuel', 'TUYISENGE', 'monchel@gmail.com', 'emmydd'),
(82, 'Emmanuel', 'tuyisenge', 'tuyisengeemmanuel1999@gmail.com', 'jhweh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `lecturer`
--
ALTER TABLE `lecturer`
  MODIFY `l_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `s_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
