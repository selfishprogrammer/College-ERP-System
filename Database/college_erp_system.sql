-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2021 at 10:05 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college_erp_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `atendance`
--

CREATE TABLE `atendance` (
  `id` int(100) NOT NULL,
  `roll_no` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  `day` varchar(100) NOT NULL,
  `todays_attendance` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `atendance`
--

INSERT INTO `atendance` (`id`, `roll_no`, `month`, `day`, `todays_attendance`) VALUES
(13, '26100118027', 'April', '17/04/2021', 'P'),
(14, '26100119021', 'April', '17/04/2021', 'P'),
(15, '26100119021', 'May', '18/05/2021', 'P'),
(16, '26100119021', 'May', '18/05/2021', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `exam_id` int(100) NOT NULL,
  `exam_name` varchar(100) NOT NULL,
  `date_of_exam` varchar(100) NOT NULL,
  `exam_time` varchar(100) NOT NULL,
  `exam_duration` varchar(100) NOT NULL,
  `stream` varchar(100) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `subject_faculty` varchar(100) NOT NULL,
  `exam_subject` varchar(100) NOT NULL,
  `subject_code` varchar(255) NOT NULL,
  `question_type` varchar(100) NOT NULL,
  `status1` varchar(100) NOT NULL,
  `status2` varchar(100) NOT NULL,
  `status3` varchar(255) NOT NULL,
  `question_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`exam_id`, `exam_name`, `date_of_exam`, `exam_time`, `exam_duration`, `stream`, `semester`, `subject_faculty`, `exam_subject`, `subject_code`, `question_type`, `status1`, `status2`, `status3`, `question_file`) VALUES
(12, 'CA1', 'No', '10:30', '45', 'Computer Science Engineering', '1st Semester', 'Santosh Saha', 'PHYSICS', 'PH-CS101', 'Multiple Choice Question', 'false', '', 'Pending', '26100118024_Rahul Jha_ESC-591.pdf'),
(13, 'CA1', '', '10:30', '45', 'Computer Science Engineering', '1st Semester', 'Santosh Saha', 'ENGINEERING MATHEMATICS ', 'MCS-101', 'Multiple Choice Question', 'true', '', 'Pending', '26100118024_Rahul Jha_ESC-591.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `exam_name`
--

CREATE TABLE `exam_name` (
  `exam_id` int(255) NOT NULL,
  `exam_name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `status2` varchar(100) NOT NULL,
  `status3` varchar(100) NOT NULL,
  `total_marks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_name`
--

INSERT INTO `exam_name` (`exam_id`, `exam_name`, `status`, `status2`, `status3`, `total_marks`) VALUES
(1, 'CA1', 'completed', 'completed', 'true', '');

-- --------------------------------------------------------

--
-- Table structure for table `exam_submission`
--

CREATE TABLE `exam_submission` (
  `sub_id` int(100) NOT NULL,
  `exam_id` varchar(100) NOT NULL,
  `roll_no` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `exam_file` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `stream` varchar(100) NOT NULL,
  `date_of_submission` varchar(100) NOT NULL,
  `faculty` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_submission`
--

INSERT INTO `exam_submission` (`sub_id`, `exam_id`, `roll_no`, `subject`, `exam_file`, `semester`, `stream`, `date_of_submission`, `faculty`, `status`) VALUES
(4, 'CA1', '26100119021', 'PHYSICS', '26100118024_Rahul Jha_ESC-591.pdf', '1st Semester', 'Computer Science Engineering', '02/05/2021 Sunday', 'Santosh Saha', 'checked'),
(5, 'CA1', '26100119021', 'ENGINEERING MATHEMATICS', '26100118024_Rahul Jha_ESC-591.pdf', '1st Semester', 'Computer Science Engineering', '02/05/2021 Sunday', 'Santosh Saha', 'checked');

-- --------------------------------------------------------

--
-- Table structure for table `fee_of_students`
--

CREATE TABLE `fee_of_students` (
  `roll_no` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `stream` varchar(100) NOT NULL,
  `fee` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fee_of_students`
--

INSERT INTO `fee_of_students` (`roll_no`, `name`, `semester`, `stream`, `fee`, `status`) VALUES
('26100119021', 'Roshan Jha', '1st Semester ', 'Computer Science Engineering', '42000', 'NA'),
('26100119022', 'Abhishek Gupta', '1st Semester', 'Computer Science Engineering', '42000', 'NA');

-- --------------------------------------------------------

--
-- Table structure for table `fee_structure`
--

CREATE TABLE `fee_structure` (
  `fee_id` int(255) NOT NULL,
  `fee_structure` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fee_structure`
--

INSERT INTO `fee_structure` (`fee_id`, `fee_structure`) VALUES
(3, '2010-1.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `homework`
--

CREATE TABLE `homework` (
  `homework_id` int(100) NOT NULL,
  `faculty_id` varchar(100) NOT NULL,
  `faculty_name` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `subject_code` varchar(100) NOT NULL,
  `homework_date` varchar(100) NOT NULL,
  `homework_submission_date` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `homework` varchar(100) NOT NULL,
  `homework_desp` varchar(500) NOT NULL,
  `homework_status` varchar(100) DEFAULT NULL,
  `semester` varchar(100) NOT NULL,
  `stream` varchar(100) NOT NULL,
  `date_of_add` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homework`
--

INSERT INTO `homework` (`homework_id`, `faculty_id`, `faculty_name`, `subject`, `subject_code`, `homework_date`, `homework_submission_date`, `title`, `homework`, `homework_desp`, `homework_status`, `semester`, `stream`, `date_of_add`, `status`) VALUES
(1, '7', 'Santosh Saha', 'PHYSICS', 'PH-CS101', '08-04-2021', '2021-04-11', 'Boyle\'s Law', '26100118024_PCC-CS592_Rahul Jha.pdf', 'Boyels Law Full Article with Derivations.', 'Pending', '1st Semester', 'Computer Science Engineering', '2021-04-08 23:25:25', 'Submitted');

-- --------------------------------------------------------

--
-- Table structure for table `homework_submission`
--

CREATE TABLE `homework_submission` (
  `homework_id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `roll_no` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `homework` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `stream` varchar(255) NOT NULL,
  `date_of_submission` varchar(200) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homework_submission`
--

INSERT INTO `homework_submission` (`homework_id`, `title`, `roll_no`, `name`, `homework`, `semester`, `stream`, `date_of_submission`, `status`) VALUES
(11, '1', '26100119021', 'Roshan Jha', 'rahulcv.pdf', '1st Semester', 'Computer Science Engineering', '12/04/2021', 'submitted');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `position` varchar(100) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `stream` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `pimg` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `exam_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `username`, `password`, `position`, `date`, `name`, `semester`, `stream`, `email`, `phone`, `pimg`, `fname`, `dob`, `dept`, `qualification`, `exam_name`) VALUES
(1, '26100118024', '26100118024', NULL, '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', '', '', ''),
(3, '26100118026', '26100118026', 'administator', '2021-02-24 12:34:07', '', '', '', '', '', '', '', '', '', '', ''),
(6, '26100118027', '26100118027', 'Student', '2021-02-25 18:04:40', 'Rahul Jha', '5th Semester', 'Computer Science Engineering', 'rahu@gmail.com', '6296002855', 'just.jpeg', 'Mati Kant Jha', '04/11/1999', '', '', ''),
(7, '26100118025', '26100118025', 'Faculty', '2021-02-27 13:23:53', 'Santosh Saha', '', 'Computer Science Engineering', 'faculty@gmail.com', '9134195796', 'astro.jpg', '', '1988-04-12', 'CSE', 'Mtech', ''),
(8, '26100119021', '26100119021', 'Student', '2021-03-21 18:40:40', 'Roshan Jha', '1st Semester', 'Computer Science Engineering', 'rani@gmail.com', '123456789', 'astro.jpg', 'Rana Sah', '2000-08-29', '', '', ''),
(9, '26100119022', '26100119022', 'Student', '2021-04-24 12:43:14', 'Abhishek Gupta', '1st Semester', 'Computer Science Engineering', 'rahu@gmail.com', '9134195796', 'just.jpeg', 'Shivam Gupta', '1999-12-27', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` int(255) NOT NULL,
  `roll_no` varchar(255) NOT NULL,
  `name` varchar(200) NOT NULL,
  `exam_name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `subject_code` varchar(255) NOT NULL,
  `total_marks` varchar(255) NOT NULL,
  `scored_marks` varchar(255) NOT NULL,
  `attendance` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `roll_no`, `name`, `exam_name`, `subject`, `subject_code`, `total_marks`, `scored_marks`, `attendance`) VALUES
(25, '26100119021', 'Roshan Jha', 'CA1', 'PHYSICS', 'PH-CS101', '70', '45', ''),
(26, '26100119021', 'Roshan Jha', 'CA1', 'ELECTRONICS', 'PH-CS101', '70', '45', ''),
(27, '26100119021', 'Roshan Jha', 'CA1', 'ENGINEERING MATHEMATICS ', 'MCS-101', '70', '45', ''),
(28, '26100119021', 'Roshan Jha', 'CA1', 'PHYSICS LAB', 'PCSLB-101', '70', '45', ''),
(29, '26100119021', 'Roshan Jha', 'CA1', 'WORKSHOP ', 'ESW-101', '70', '45', '');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `notice_id` int(255) NOT NULL,
  `title_of_notice` varchar(255) NOT NULL,
  `notice_file` varchar(255) NOT NULL,
  `notice_for` varchar(255) NOT NULL,
  `date_of_notice` varchar(255) NOT NULL,
  `upload_time_and_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_id`, `title_of_notice`, `notice_file`, `notice_for`, `date_of_notice`, `upload_time_and_date`) VALUES
(4, 'Resume of Rahul Jha', 'rahulcv.pdf', 'Student', '2021/03/21', '0000-00-00 00:00:00'),
(5, 'Rahul CV 2', 'rahulcv.pdf', 'Student', '2021/03/24', '2021-03-25 01:03:31'),
(6, 'Faculty First', '2013-2.pdf', 'Faculty', '2021/03/29', '2021-03-30 02:30:16'),
(7, 'Notice for Student', '26100118024_PCC-CS592_Rahul Jha.pdf', 'Student', '2021/04/02', '2021-04-02 16:35:50');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `roll_no` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `slno` int(11) NOT NULL,
  `exam_name` varchar(255) NOT NULL,
  `stream` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`roll_no`, `name`, `slno`, `exam_name`, `stream`, `semester`) VALUES
('26100119021', 'Roshan Jha', 1, 'CA1', 'Computer Science Engineering', '1st Semester'),
('26100119021', 'Roshan Jha', 2, 'CA1', 'Computer Science Engineering', '1st Semester'),
('26100119021', 'Roshan Jha', 3, 'CA1', 'Computer Science Engineering', '1st Semester'),
('26100119021', 'Roshan Jha', 4, 'CA1', 'Computer Science Engineering', '1st Semester'),
('26100119021', 'Roshan Jha', 5, 'CA1', 'Computer Science Engineering', '1st Semester');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `sub_id` int(255) NOT NULL,
  `sub_name` varchar(255) NOT NULL,
  `stream` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `sub_code` varchar(255) NOT NULL,
  `faculty` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`sub_id`, `sub_name`, `stream`, `semester`, `sub_code`, `faculty`) VALUES
(1, 'PHYSICS', 'Computer Science Engineering', '1st Semester', 'PH-CS101', 'Santosh Saha'),
(2, 'ELECTRONICS', 'Computer Science Engineering', '1st Semester', 'ECS-101', ''),
(3, 'ENGINEERING MATHEMATICS ', 'Computer Science Engineering', '1st Semester', 'MCS-101', 'Santosh Saha'),
(5, 'PHYSICS LAB', 'Computer Science Engineering', '1st Semester', 'PCSLB-101', ''),
(6, 'WORKSHOP ', 'Computer Science Engineering', '1st Semester', 'ESW-101', 'Santosh Saha'),
(7, 'PHYSICS', 'Mechanical Engineering', '1st Semester', 'PH-CS101', ''),
(8, 'ELECTRONICS', 'Mechanical Engineering', '1st Semester', 'ECS-101', ''),
(9, 'ENGINEERING MATHEMATICS ', 'Mechanical Engineering', '1st Semester', 'MCS-101', ''),
(10, 'PHYSICS LAB', 'Mechanical Engineering', '1st Semester', 'PCSLB-101', ''),
(11, 'WORKSHOP ', 'Mechanical Engineering', '1st Semester', 'ESW-101', ''),
(12, 'CHEMISTRY', 'Civil Engineering', '1st Semester', 'CH-CS101', ''),
(13, 'ELECTRIAL ', 'Civil Engineering', '1st Semester', 'EL-101', ''),
(14, 'ENGINEERING MATHEMATICS ', 'Civil Engineering', '1st Semester', 'MCS-101', ''),
(15, 'GRAPHICS DRAWING', 'Civil Engineering', '1st Semester', 'GH-101', ''),
(16, 'CHEMISTRY LAB', 'Civil Engineering', '1st Semester', 'CSLAB-101', ''),
(17, 'CHEMISTRY', 'Electrical Engineering', '1st Semester', 'CH-CS101', ''),
(18, 'ENGINEERING MATHEMATICS ', 'Electrical Engineering', '1st Semester', 'MCS-101', ''),
(19, 'ELECTRIAL ', 'Electrical Engineering', '1st Semester', 'EL-101', ''),
(20, 'GRAPHICS DRAWING', 'Electrical Engineering', '1st Semester', 'GH-101', ''),
(21, 'CHEMISTRY LAB', 'Electrical Engineering', '1st Semester', 'CSLAB-101', ''),
(22, 'ENGINEERING MATHEMATICS ', 'Electronics & Commnucation Engineering', '1st Semester', 'MCS-101', ''),
(23, 'CHEMISTRY', 'Electronics & Commnucation Engineering', '1st Semester', 'CH-CS101', ''),
(24, 'GRAPHICS DRAWING', 'Electronics & Commnucation Engineering', '1st Semester', 'GH-101', ''),
(25, 'ELECTRIAL ', 'Electronics & Commnucation Engineering', '1st Semester', 'EL-101', ''),
(26, 'CHEMISTRY LAB', 'Electronics & Commnucation Engineering', '1st Semester', 'CSLAB-101', '');

-- --------------------------------------------------------

--
-- Table structure for table `syllabus`
--

CREATE TABLE `syllabus` (
  `id` int(255) NOT NULL,
  `cse` varchar(255) NOT NULL,
  `ee` varchar(255) NOT NULL,
  `me` varchar(255) NOT NULL,
  `ece` varchar(255) NOT NULL,
  `ce` varchar(255) NOT NULL,
  `year` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `syllabus`
--

INSERT INTO `syllabus` (`id`, `cse`, `ee`, `me`, `ece`, `ce`, `year`) VALUES
(2, '2015-5.pdf', '2012-1.pdf', '2015-5.pdf', '2014-2.pdf', '2011-2.pdf', 'first_year'),
(3, '2008-3.pdf', '2011-4.pdf', '2014-3.pdf', '2014-3.pdf', '2010-3.pdf', 'second_year'),
(4, '2013-2.pdf', '2014-3.pdf', '2009-2.pdf', '2013-2.pdf', '2012-3.pdf', 'third_year'),
(5, '2012-3.pdf', '2013-2.pdf', '2012-3.pdf', '2013-2.pdf', '2013-2.pdf', 'forth_year');

-- --------------------------------------------------------

--
-- Table structure for table `today_class`
--

CREATE TABLE `today_class` (
  `class_id` int(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `subject_code` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `timiing` varchar(200) NOT NULL,
  `joining_link` varchar(100) NOT NULL,
  `stream` varchar(100) NOT NULL,
  `day` varchar(100) NOT NULL,
  `off` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `today_class`
--

INSERT INTO `today_class` (`class_id`, `date`, `subject`, `subject_code`, `semester`, `faculty`, `timiing`, `joining_link`, `stream`, `day`, `off`) VALUES
(1, '10-04-2021', 'PH-CS101', 'PHYSICS', '1st Semester', 'Santosh Saha', '9:30AM', 'https://www.w3zoomclass.com', 'Computer Science Engineering', 'Friday', ''),
(2, '10-04-2021', 'CH-CS101', 'CHEMISTRY', '', 'Santosh Saha', '9:30AM', 'https://w3zoomclass.com', 'Electrical Engineering', 'Monday', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atendance`
--
ALTER TABLE `atendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `exam_name`
--
ALTER TABLE `exam_name`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `exam_submission`
--
ALTER TABLE `exam_submission`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `fee_of_students`
--
ALTER TABLE `fee_of_students`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `fee_structure`
--
ALTER TABLE `fee_structure`
  ADD PRIMARY KEY (`fee_id`);

--
-- Indexes for table `homework`
--
ALTER TABLE `homework`
  ADD PRIMARY KEY (`homework_id`);

--
-- Indexes for table `homework_submission`
--
ALTER TABLE `homework_submission`
  ADD PRIMARY KEY (`homework_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `syllabus`
--
ALTER TABLE `syllabus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `today_class`
--
ALTER TABLE `today_class`
  ADD PRIMARY KEY (`class_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atendance`
--
ALTER TABLE `atendance`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `exam_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `exam_name`
--
ALTER TABLE `exam_name`
  MODIFY `exam_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `exam_submission`
--
ALTER TABLE `exam_submission`
  MODIFY `sub_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `fee_structure`
--
ALTER TABLE `fee_structure`
  MODIFY `fee_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `homework`
--
ALTER TABLE `homework`
  MODIFY `homework_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `homework_submission`
--
ALTER TABLE `homework_submission`
  MODIFY `homework_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `notice_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `sub_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `syllabus`
--
ALTER TABLE `syllabus`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `today_class`
--
ALTER TABLE `today_class`
  MODIFY `class_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
