-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2016 at 12:56 AM
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
-- Table structure for table `ctimages`
--

CREATE TABLE `ctimages` (
  `CTScanID` int(11) NOT NULL,
  `CTImageID` int(11) NOT NULL,
  `directory` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'khcy3mas@nottingham.edu.my', 'admin123', 'admin'),
(2, 'anthony@nottingham.edu.my', 'idc123', '');

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

-- --------------------------------------------------------

--
-- Table structure for table `studyobject`
--

CREATE TABLE `studyobject` (
  `objectID` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `surName` varchar(255) NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `surgeries`
--

CREATE TABLE `surgeries` (
  `surgeryID` int(11) NOT NULL,
  `referreeID` int(11) NOT NULL,
  `surgeryName` varchar(255) NOT NULL,
  `telephone` int(11) NOT NULL,
  `surgeryAddress` varchar(255) NOT NULL,
  `surgeryState` varchar(255) NOT NULL,
  `surgeryCountry` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

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
  ADD PRIMARY KEY (`surgeryID`),
  ADD KEY `referreeID` (`referreeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ctimages`
--
ALTER TABLE `ctimages`
  MODIFY `CTImageID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ctscan`
--
ALTER TABLE `ctscan`
  MODIFY `CTScanID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `referees`
--
ALTER TABLE `referees`
  MODIFY `referreeID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `study`
--
ALTER TABLE `study`
  MODIFY `studyID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `studyobject`
--
ALTER TABLE `studyobject`
  MODIFY `objectID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `surgeries`
--
ALTER TABLE `surgeries`
  MODIFY `surgeryID` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

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

--
-- Constraints for table `surgeries`
--
ALTER TABLE `surgeries`
  ADD CONSTRAINT `surgeries_ibfk_1` FOREIGN KEY (`referreeID`) REFERENCES `referees` (`referreeID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
