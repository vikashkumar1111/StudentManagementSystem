-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2022 at 09:36 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(11) NOT NULL,
  `Title` varchar(224) NOT NULL,
  `Deatils` varchar(244) NOT NULL,
  `Posted_by` varchar(244) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `Title`, `Deatils`, `Posted_by`, `Date`) VALUES
(1, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, consequuntur?', '', 'Lorem, ipsum dolor.', '2022-04-04'),
(2, 'Amisson', 'New admission \r\nfor class 1 t0 8th are open', 'vikash', '2022-03-11'),
(3, 'Examination', 'All Students are inform that your examination should be held on the last weeks of this month\r\n', 'Ashok sir (Exam. dpt.)', '2022-05-02');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(22) NOT NULL,
  `students_name` varchar(255) NOT NULL,
  `parents_name` varchar(255) NOT NULL,
  `gender` varchar(22) NOT NULL,
  `DOB` date NOT NULL,
  `roll` int(22) NOT NULL,
  `blood` varchar(22) NOT NULL,
  `religions` varchar(244) NOT NULL,
  `email` varchar(244) NOT NULL,
  `class` int(22) NOT NULL,
  `section` varchar(222) NOT NULL,
  `admission_id` int(224) NOT NULL,
  `phone` varchar(244) NOT NULL,
  `about` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `students_name`, `parents_name`, `gender`, `DOB`, `roll`, `blood`, `religions`, `email`, `class`, `section`, `admission_id`, `phone`, `about`, `photo`) VALUES
(1, 'Lynn Mayer', ' Nina Gamble', 'Mal', '1979-09-08', 35, 'AB+', ' Hindu', 'jaxopab@mailinator.com', 12, 'E', 5468, '7687587435', 'Id enim dolores err', 'images/customer1.png'),
(2, 'Charissa Marquez', ' Tad Morris', 'Female', '1977-07-13', 86, ' AB-', '  Christian', 'cokagyqoc@mailinator.com', 7, 'C', 33, '729834724', 'Beatae ex aut fugiat', 'images/img_avatar2.png'),
(3, 'Steven Francis', ' Alice Anthony', 'Mal', '1985-12-05', 42, ' O+', '  Hindu', 'tasodun@mailinator.com', 12, 'B', 426, ' 977162045', 'Doloremque rerum exp', 'images/photo1644462733-modified.png'),
(4, 'Cody Sawyer', ' Karyn Glenn', 'Mal', '1990-07-27', 31, 'B-', ' Hindu', 'hivy@mailinator.com', 22, 'A', 71, '+1 (385) 495-6197', 'Debitis fugit eum q', 'images/'),
(5, 'Dennis Riggs', ' Kennedy Combs', 'Mal', '1998-03-01', 49, 'A-', ' Christian', 'gedegam@mailinator.com', 61, 'B', 82, '+1 (267) 136-5101', 'In id ex eu qui eos ', 'images/Adminlogin.png'),
(6, 'Cedric Wynn', ' Alea Sherman', 'Female', '2003-03-26', 17, 'O+', ' 0', 'ginodaso@mailinator.com', 90, 'B', 99, '+1 (502) 768-9469', 'Ut veniam culpa dic', 'images/photo1644433947.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `joining_date` date NOT NULL,
  `blood_group` varchar(244) NOT NULL,
  `religions` varchar(55) NOT NULL,
  `email` varchar(255) NOT NULL,
  `idno` int(255) NOT NULL,
  `phone` bigint(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `user_type`, `gender`, `father_name`, `mother_name`, `DOB`, `joining_date`, `blood_group`, `religions`, `email`, `idno`, `phone`, `address`, `photo`) VALUES
(1, 'vikash', '123', 'admin', 'Male', 'Tutleshwar Singh', 'Meera Devi', '2000-11-11', '2021-05-20', 'O+', 'Hindu', 'vikashkumar977161@gmail.com', 435, 9771610433, 'sasaram, Bihar', 'images/photo1644462733-modified.png'),
(2, 'Ankita', ' ankita123', 'Teachers', ' Female', 'Quemby Hogan', ' Maxwell Johnston', '2013-12-15', '2005-09-20', 'A-', ' Christian', 'rekufyxik@mailinator.com', 69, 9774538766, 'Doloremque perspicia', ' images/img_avatar2.png'),
(3, 'Stive', ' stive123', 'Others', ' Male', 'Kirestin Wilder', ' Ignacia Compton', '2019-03-09', '1993-09-08', 'B-', ' Hindu', 'peziwekyxe@mailinator.com', 86, 1, 'Ex sed sequi culpa ', ' images/customer1.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
