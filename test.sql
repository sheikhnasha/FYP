-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2016 at 10:16 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrators`
--

CREATE TABLE `administrators` (
  `administratorsID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `surName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrators`
--

INSERT INTO `administrators` (`administratorsID`, `userID`, `firstName`, `surName`) VALUES
(1, 1, 'Muhammad ', 'Ahsan');

-- --------------------------------------------------------

--
-- Table structure for table `ctimages`
--

CREATE TABLE `ctimages` (
  `CTScanID` int(11) NOT NULL,
  `CTImageID` int(11) NOT NULL,
  `directory` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ctimages`
--

INSERT INTO `ctimages` (`CTScanID`, `CTImageID`, `directory`) VALUES
(2, 1, 'DICOM/2/IM-'),
(2, 2, 'DICOM/2/IM-'),
(2, 3, 'DICOM/2/IM-'),
(2, 4, 'DICOM/2/IM-'),
(2, 5, 'DICOM/2/IM-');

-- --------------------------------------------------------

--
-- Table structure for table `ctscan`
--

CREATE TABLE `ctscan` (
  `CTScanID` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `objectID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ctscan`
--

INSERT INTO `ctscan` (`CTScanID`, `date`, `time`, `objectID`) VALUES
(2, '2016-03-23', '09:11:00', 10);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `userID` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `userType` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userID`, `Email`, `Password`, `userType`) VALUES
(1, 'nasha@cloudgraphy.com', 'admin123', 'admin'),
(2, 'anthony@nottingham.edu.my', 'idc123', ''),
(3, 'joyo@yoyo.com', 'anything123', ''),
(4, 'mojo@jojo.com', 'mojojojo', ''),
(5, 'india@nottingham.edu.my', 'india', ''),
(6, 'shoaib@nottingham.edu.my', 'shoaib', '');

-- --------------------------------------------------------

--
-- Table structure for table `referees`
--

CREATE TABLE `referees` (
  `referreeID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `surName` varchar(255) NOT NULL,
  `surgeryID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `referees`
--

INSERT INTO `referees` (`referreeID`, `userID`, `firstName`, `surName`, `surgeryID`) VALUES
(1, 2, 'Anthony', 'Davis', 1),
(2, 3, 'Joyo', 'Lee', 1),
(3, 4, 'Mojo', 'Jojo', 1),
(4, 5, 'India', 'Summer', 1),
(5, 6, 'Shoaib', 'Akhtar', 1);

-- --------------------------------------------------------

--
-- Table structure for table `study`
--

CREATE TABLE `study` (
  `studyID` int(11) NOT NULL,
  `objectID` int(11) NOT NULL,
  `referreeID` int(11) NOT NULL,
  `referreeType` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `study`
--

INSERT INTO `study` (`studyID`, `objectID`, `referreeID`, `referreeType`) VALUES
(2, 10, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `studyobject`
--

CREATE TABLE `studyobject` (
  `objectID` int(11) NOT NULL,
  `objectFirstname` varchar(255) NOT NULL,
  `objectSurname` varchar(255) NOT NULL,
  `ICNumber` int(11) NOT NULL,
  `telephone` int(11) NOT NULL,
  `DOB` date NOT NULL,
  `Sex` varchar(10) NOT NULL,
  `height` smallint(6) NOT NULL,
  `weight` smallint(6) NOT NULL,
  `homeAddress` varchar(255) NOT NULL,
  `homeCity` varchar(255) NOT NULL,
  `homeState` varchar(255) NOT NULL,
  `DOD` date NOT NULL,
  `deathCause` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studyobject`
--

INSERT INTO `studyobject` (`objectID`, `objectFirstname`, `objectSurname`, `ICNumber`, `telephone`, `DOB`, `Sex`, `height`, `weight`, `homeAddress`, `homeCity`, `homeState`, `DOD`, `deathCause`) VALUES
(10, 'Shoaib', 'Akhtar', 1113393, 90078601, '2010-03-23', 'Male', 80, 20, 'Middle of no where', 'Selengor', 'Selengor', '2016-03-22', 'Knocked by a car');

-- --------------------------------------------------------

--
-- Table structure for table `surgeries`
--

CREATE TABLE `surgeries` (
  `surgeryID` int(11) NOT NULL,
  `surgeryName` varchar(255) NOT NULL,
  `surgeryTelephone` varchar(30) NOT NULL,
  `surgeryAddress` varchar(255) NOT NULL,
  `surgeryState` varchar(255) NOT NULL,
  `surgeryCountry` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surgeries`
--

INSERT INTO `surgeries` (`surgeryID`, `surgeryName`, `surgeryTelephone`, `surgeryAddress`, `surgeryState`, `surgeryCountry`) VALUES
(1, 'UK', ' +44 (0) 115 951 5151', 'University Park', 'Nottingham ', 'UK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrators`
--
ALTER TABLE `administrators`
  ADD PRIMARY KEY (`administratorsID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `ctimages`
--
ALTER TABLE `ctimages`
  ADD PRIMARY KEY (`CTImageID`),
  ADD KEY `CTScanID` (`CTScanID`);

--
-- Indexes for table `ctscan`
--
ALTER TABLE `ctscan`
  ADD PRIMARY KEY (`CTScanID`),
  ADD KEY `objectID` (`objectID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `referees`
--
ALTER TABLE `referees`
  ADD PRIMARY KEY (`referreeID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `userID_2` (`userID`),
  ADD KEY `surgeryID` (`surgeryID`);

--
-- Indexes for table `study`
--
ALTER TABLE `study`
  ADD PRIMARY KEY (`studyID`),
  ADD KEY `objectID` (`objectID`),
  ADD KEY `referreeID` (`referreeID`);

--
-- Indexes for table `studyobject`
--
ALTER TABLE `studyobject`
  ADD PRIMARY KEY (`objectID`);

--
-- Indexes for table `surgeries`
--
ALTER TABLE `surgeries`
  ADD PRIMARY KEY (`surgeryID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrators`
--
ALTER TABLE `administrators`
  MODIFY `administratorsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ctimages`
--
ALTER TABLE `ctimages`
  MODIFY `CTImageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `ctscan`
--
ALTER TABLE `ctscan`
  MODIFY `CTScanID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `referees`
--
ALTER TABLE `referees`
  MODIFY `referreeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `study`
--
ALTER TABLE `study`
  MODIFY `studyID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `studyobject`
--
ALTER TABLE `studyobject`
  MODIFY `objectID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `surgeries`
--
ALTER TABLE `surgeries`
  MODIFY `surgeryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `administrators`
--
ALTER TABLE `administrators`
  ADD CONSTRAINT `administrators_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `login` (`userID`);

--
-- Constraints for table `ctscan`
--
ALTER TABLE `ctscan`
  ADD CONSTRAINT `ctscan_ibfk_1` FOREIGN KEY (`objectID`) REFERENCES `studyobject` (`objectID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `referees`
--
ALTER TABLE `referees`
  ADD CONSTRAINT `referees_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `login` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `referees_ibfk_2` FOREIGN KEY (`surgeryID`) REFERENCES `surgeries` (`surgeryID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `study`
--
ALTER TABLE `study`
  ADD CONSTRAINT `study_ibfk_1` FOREIGN KEY (`objectID`) REFERENCES `studyobject` (`objectID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `study_ibfk_2` FOREIGN KEY (`referreeID`) REFERENCES `referees` (`referreeID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
