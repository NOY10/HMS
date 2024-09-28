-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2024 at 10:53 PM
-- Server version: 8.0.32
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myhmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintb`
--

CREATE TABLE `admintb` (
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admintb`
--

INSERT INTO `admintb` (`username`, `password`) VALUES
('admin', 'drukadmin123');

-- --------------------------------------------------------

--
-- Table structure for table `appointmenttb`
--

CREATE TABLE `appointmenttb` (
  `pid` int NOT NULL,
  `ID` int NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `doctor` varchar(30) NOT NULL,
  `docFees` int NOT NULL,
  `appdate` date NOT NULL,
  `apptime` time NOT NULL,
  `userStatus` int NOT NULL,
  `doctorStatus` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `appointmenttb`
--

INSERT INTO `appointmenttb` (`pid`, `ID`, `fname`, `lname`, `gender`, `email`, `contact`, `doctor`, `docFees`, `appdate`, `apptime`, `userStatus`, `doctorStatus`) VALUES
(4, 1, 'Tshering', 'Dorji', 'Male', 'tshering@drukmail.bt', '17123456', 'Pema', 550, '2024-09-14', '10:00:00', 1, 0),
(4, 2, 'Tshering', 'Dorji', 'Male', 'tshering@drukmail.bt', '17123456', 'Karma', 700, '2024-09-28', '10:00:00', 0, 1),
(4, 3, 'Tshering', 'Dorji', 'Male', 'tshering@drukmail.bt', '17123456', 'Dorji', 1000, '2024-09-19', '03:00:00', 0, 1),
(11, 4, 'Deki', 'Wangmo', 'Female', 'deki@drukmail.bt', '17234567', 'Rinzin', 500, '2024-09-29', '20:00:00', 1, 1),
(4, 5, 'Tshering', 'Dorji', 'Male', 'tshering@drukmail.bt', '17123456', 'Karma', 700, '2024-09-28', '12:00:00', 1, 1),
(4, 6, 'Tshering', 'Dorji', 'Male', 'tshering@drukmail.bt', '17123456', 'Pema', 550, '2024-09-26', '15:00:00', 0, 1),
(2, 8, 'Sonam', 'Zam', 'Female', 'sonam@drukmail.bt', '17345678', 'Pema', 550, '2024-09-21', '10:00:00', 1, 1),
(5, 9, 'Jigme', 'Thinley', 'Male', 'jigme@drukmail.bt', '17456789', 'Pema', 550, '2024-09-19', '20:00:00', 1, 0),
(4, 10, 'Tshering', 'Dorji', 'Male', 'tshering@drukmail.bt', '17123456', 'Pema', 550, '2004-09-21', '14:00:00', 1, 0),
(4, 11, 'Tshering', 'Dorji', 'Male', 'tshering@drukmail.bt', '17123456', 'Karma', 700, '2024-09-22', '15:00:00', 1, 1),
(9, 12, 'Kinley', 'Wangchuk', 'Male', 'kinley@drukmail.bt', '17567890', 'Chimi', 800, '2024-08-26', '12:00:00', 1, 1),
(9, 13, 'Kinley', 'Wangchuk', 'Male', 'kinley@drukmail.bt', '17567890', 'Yangki', 450, '2024-08-26', '14:00:00', 1, 1),
(12, 14, 'Norbu', 'Jamtsho', 'Male', 'Jamtsho@gmail.com', '17121241', 'Tenzin', 600, '2024-09-29', '08:00:00', 1, 1),
(11, 15, 'Deki', 'Wangmo', 'Female', 'deki@drukmail.bt', '17234567', 'Tenzin', 600, '2024-09-29', '10:00:00', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(30) NOT NULL,
  `email` text NOT NULL,
  `contact` varchar(10) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `contact`, `message`) VALUES
('Sangay', 'sangay@drukmail.bt', '17678901', 'Hello Admin'),
('Tashi', 'tashi@drukmail.bt', '17789012', 'Good Job, Kuzuzangpo'),
('Pema', 'pema@drukmail.bt', '17890123', 'How can I reach you?'),
('Namgay', 'namgay@drukmail.bt', '17901234', 'Love your site'),
('Dorji', 'dorji@drukmail.bt', '17012345', 'Want some suja?'),
('Karma', 'karma@drukmail.bt', '17123456', 'Good service'),
('Choden', 'choden@drukmail.bt', '17234567', 'Love your service'),
('Ugyen', 'ugyen@drukmail.bt', '17345678', 'Love your service. Tashi Delek!'),
('Zangmo', 'zangmo@drukmail.bt', '17456789', 'I love your service!'),
('dorji phuntsho', 'dorji2001@gmail.com', '17123345', 'cool website');

-- --------------------------------------------------------

--
-- Table structure for table `doctb`
--

CREATE TABLE `doctb` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `spec` varchar(50) NOT NULL,
  `docFees` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `doctb`
--

INSERT INTO `doctb` (`username`, `password`, `email`, `spec`, `docFees`) VALUES
('Rinzin', 'rinzin123', 'rinzin@drukmail.bt', 'General', 500),
('Tenzin', 'tenzin123', 'tenzin@drukmail.bt', 'Cardiologist', 600),
('Karma', 'karma123', 'karma@drukmail.bt', 'General', 700),
('Pema', 'pema123', 'pema@drukmail.bt', 'Pediatrician', 550),
('Chimi', 'chimi123', 'chimi@drukmail.bt', 'Pediatrician', 800),
('Dorji', 'dorji123', 'dorji@drukmail.bt', 'Cardiologist', 1000),
('Wangchuk', 'wangchuk123', 'wangchuk@drukmail.bt', 'Neurologist', 1500),
('Yangki', 'yangki123', 'yangki@drukmail.bt', 'Pediatrician', 450),
('Norzang', 'Norzang123', 'Norzang@gmail.com', 'Pediatrician', 600);

-- --------------------------------------------------------

--
-- Table structure for table `patreg`
--

CREATE TABLE `patreg` (
  `pid` int NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `cpassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `patreg`
--

INSERT INTO `patreg` (`pid`, `fname`, `lname`, `gender`, `email`, `contact`, `password`, `cpassword`) VALUES
(1, 'Tashi', 'Wangdi', 'Male', 'tashi@drukmail.bt', '17567890', 'tashi123', 'tashi123'),
(2, 'Sonam', 'Zam', 'Female', 'sonam@drukmail.bt', '17678901', 'sonam123', 'sonam123'),
(3, 'Jigme', 'Dorji', 'Male', 'jigme@drukmail.bt', '17789012', 'jigme123', 'jigme123'),
(4, 'Tshering', 'Dorji', 'Male', 'tshering@drukmail.bt', '17123456', 'tshering123', 'tshering123'),
(5, 'Jigme', 'Thinley', 'Male', 'jigmet@drukmail.bt', '17456789', 'jigmet123', 'jigmet123'),
(6, 'Pema', 'Lhamo', 'Female', 'pemal@drukmail.bt', '17890123', 'pema123', 'pema123'),
(7, 'Dechen', 'Wangmo', 'Female', 'dechen@drukmail.bt', '17901234', 'dechen123', 'dechen123'),
(8, 'Karma', 'Tenzin', 'Male', 'karmat@drukmail.bt', '17012345', 'karma123', 'karma123'),
(9, 'Kinley', 'Wangchuk', 'Male', 'kinley@drukmail.bt', '17567890', 'kinley123', 'kinley123'),
(10, 'Namgay', 'Dorji', 'Male', 'namgay@drukmail.bt', '17234567', 'namgay123', 'namgay123'),
(11, 'Deki', 'Wangmo', 'Female', 'deki@drukmail.bt', '17234567', 'deki123', 'deki123'),
(12, 'Norbu', 'Jamtsho', 'Male', 'Jamtsho@gmail.com', '17121241', 'norbu123', 'norbu123'),
(15, 'Dorji', 'Phuntsho', 'Male', 'Dorji2001@gmail.com', '17121240', 'dorji123', 'dorji123');

-- --------------------------------------------------------

--
-- Table structure for table `prestb`
--

CREATE TABLE `prestb` (
  `doctor` varchar(50) NOT NULL,
  `pid` int NOT NULL,
  `ID` int NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `appdate` date NOT NULL,
  `apptime` time NOT NULL,
  `disease` varchar(250) NOT NULL,
  `allergy` varchar(250) NOT NULL,
  `prescription` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `prestb`
--

INSERT INTO `prestb` (`doctor`, `pid`, `ID`, `fname`, `lname`, `appdate`, `apptime`, `disease`, `allergy`, `prescription`) VALUES
('Karma', 4, 11, 'Tshering', 'Dorji', '2024-08-30', '15:00:00', 'Cough', 'None', 'Take one teaspoon of Bhutanese herbal syrup every night'),
('Pema', 2, 8, 'Sonam', 'Zam', '2024-09-02', '10:00:00', 'High Fever', 'None', 'Rest and drink plenty of water'),
('Chimi', 9, 12, 'Kinley', 'Wangchuk', '2024-09-13', '12:00:00', 'Severe fever', 'none', 'Paracetamol -> 1 every morning and night'),
('Yangki', 9, 13, 'Kinley', 'Wangchuk', '2024-09-14', '14:00:00', 'Cough', 'Skin dryness', 'Drink ginger tea and rest'),
('Tenzin', 12, 14, 'Norbu', 'Jamtsho', '2024-09-29', '08:00:00', 'Seasonal Allergies', 'Pollen, Dust', 'Loratadine 10mg once daily');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointmenttb`
--
ALTER TABLE `appointmenttb`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `patreg`
--
ALTER TABLE `patreg`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointmenttb`
--
ALTER TABLE `appointmenttb`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `patreg`
--
ALTER TABLE `patreg`
  MODIFY `pid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
