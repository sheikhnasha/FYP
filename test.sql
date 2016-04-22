-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2016 at 04:00 AM
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
(1, 1, 'Muhammad ', 'Ahsan'),
(13, 25, 'Fawad', 'Alam'),
(14, 26, 'Nauman', 'Khan'),
(15, 27, 'Abdul Qadir', 'Jilani'),
(16, 30, 'Jawan ', 'Sahib'),
(17, 31, 'Mohsin', 'Khan');

-- --------------------------------------------------------

--
-- Table structure for table `ctimages`
--

CREATE TABLE `ctimages` (
  `CTScanID` int(11) NOT NULL,
  `CTImageID` int(11) NOT NULL,
  `directory` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ctimages`
--

INSERT INTO `ctimages` (`CTScanID`, `CTImageID`, `directory`) VALUES
(1, 13, 'DICOM/1/IM-0001-0001.dcm'),
(1, 14, 'DICOM/1/IM-0001-0002.dcm'),
(1, 15, 'DICOM/1/IM-0001-0003.dcm'),
(1, 16, 'DICOM/1/IM-0001-0004.dcm'),
(1, 17, 'DICOM/1/IM-0001-0005.dcm'),
(1, 18, 'DICOM/1/IM-0001-0006.dcm'),
(1, 19, 'DICOM/1/IM-0001-0007.dcm'),
(1, 20, 'DICOM/1/IM-0001-0008.dcm'),
(1, 21, 'DICOM/1/IM-0001-0009.dcm'),
(1, 22, 'DICOM/1/IM-0001-0010.dcm'),
(1, 23, 'DICOM/1/IM-0001-0011.dcm'),
(1, 24, 'DICOM/1/IM-0001-0012.dcm'),
(1, 25, 'DICOM/1/IM-0001-0013.dcm'),
(1, 26, 'DICOM/1/IM-0001-0014.dcm'),
(1, 27, 'DICOM/1/IM-0001-0015.dcm'),
(1, 28, 'DICOM/1/IM-0001-0016.dcm'),
(1, 29, 'DICOM/1/IM-0001-0017.dcm'),
(1, 30, 'DICOM/1/IM-0001-0018.dcm'),
(2, 113, 'DICOM/2/IM-0001-0001.dcm'),
(2, 114, 'DICOM/2/IM-0001-0002.dcm'),
(2, 115, 'DICOM/2/IM-0001-0003.dcm'),
(2, 116, 'DICOM/2/IM-0001-0004.dcm'),
(2, 117, 'DICOM/2/IM-0001-0005.dcm'),
(2, 118, 'DICOM/2/IM-0001-0006.dcm'),
(2, 119, 'DICOM/2/IM-0001-0007.dcm'),
(2, 120, 'DICOM/2/IM-0001-0008.dcm'),
(2, 121, 'DICOM/2/IM-0001-0009.dcm'),
(2, 122, 'DICOM/2/IM-0001-0010.dcm'),
(2, 123, 'DICOM/2/IM-0001-0011.dcm'),
(2, 124, 'DICOM/2/IM-0001-0012.dcm'),
(2, 125, 'DICOM/2/IM-0001-0013.dcm'),
(2, 126, 'DICOM/2/IM-0001-0014.dcm'),
(2, 127, 'DICOM/2/IM-0001-0015.dcm'),
(2, 128, 'DICOM/2/IM-0001-0016.dcm'),
(2, 129, 'DICOM/2/IM-0001-0017.dcm'),
(2, 130, 'DICOM/2/IM-0001-0018.dcm'),
(2, 131, 'DICOM/2/IM-0001-0019.dcm'),
(2, 132, 'DICOM/2/IM-0001-0020.dcm'),
(2, 133, 'DICOM/2/IM-0001-0021.dcm'),
(2, 134, 'DICOM/2/IM-0001-0022.dcm'),
(2, 135, 'DICOM/2/IM-0001-0023.dcm'),
(2, 136, 'DICOM/2/IM-0001-0024.dcm'),
(2, 137, 'DICOM/2/IM-0001-0025.dcm'),
(2, 138, 'DICOM/2/IM-0001-0026.dcm'),
(2, 139, 'DICOM/2/IM-0001-0027.dcm'),
(2, 140, 'DICOM/2/IM-0001-0028.dcm'),
(2, 141, 'DICOM/2/IM-0001-0029.dcm'),
(2, 142, 'DICOM/2/IM-0001-0030.dcm'),
(2, 143, 'DICOM/2/IM-0001-0031.dcm'),
(2, 144, 'DICOM/2/IM-0001-0032.dcm'),
(2, 145, 'DICOM/2/IM-0001-0033.dcm'),
(2, 146, 'DICOM/2/IM-0001-0034.dcm'),
(2, 147, 'DICOM/2/IM-0001-0035.dcm'),
(2, 148, 'DICOM/2/IM-0001-0036.dcm'),
(2, 149, 'DICOM/2/IM-0001-0037.dcm'),
(2, 150, 'DICOM/2/IM-0001-0038.dcm'),
(2, 151, 'DICOM/2/IM-0001-0039.dcm'),
(2, 152, 'DICOM/2/IM-0001-0040.dcm'),
(2, 153, 'DICOM/2/IM-0001-0041.dcm'),
(2, 154, 'DICOM/2/IM-0001-0042.dcm'),
(2, 155, 'DICOM/2/IM-0001-0043.dcm'),
(2, 156, 'DICOM/2/IM-0001-0044.dcm'),
(2, 157, 'DICOM/2/IM-0001-0045.dcm'),
(2, 158, 'DICOM/2/IM-0001-0046.dcm'),
(2, 159, 'DICOM/2/IM-0001-0047.dcm'),
(2, 160, 'DICOM/2/IM-0001-0048.dcm'),
(2, 161, 'DICOM/2/IM-0001-0049.dcm'),
(2, 162, 'DICOM/2/IM-0001-0050.dcm'),
(2, 163, 'DICOM/2/IM-0001-0051.dcm'),
(2, 164, 'DICOM/2/IM-0001-0052.dcm'),
(2, 165, 'DICOM/2/IM-0001-0053.dcm'),
(2, 166, 'DICOM/2/IM-0001-0054.dcm'),
(2, 167, 'DICOM/2/IM-0001-0055.dcm'),
(2, 168, 'DICOM/2/IM-0001-0056.dcm'),
(2, 169, 'DICOM/2/IM-0001-0057.dcm'),
(2, 170, 'DICOM/2/IM-0001-0058.dcm'),
(2, 171, 'DICOM/2/IM-0001-0059.dcm'),
(2, 172, 'DICOM/2/IM-0001-0060.dcm'),
(2, 173, 'DICOM/2/IM-0001-0061.dcm'),
(2, 174, 'DICOM/2/IM-0001-0062.dcm'),
(2, 175, 'DICOM/2/IM-0001-0063.dcm'),
(2, 176, 'DICOM/2/IM-0001-0064.dcm'),
(2, 177, 'DICOM/2/IM-0001-0065.dcm'),
(2, 178, 'DICOM/2/IM-0001-0066.dcm'),
(2, 179, 'DICOM/2/IM-0001-0067.dcm'),
(2, 180, 'DICOM/2/IM-0001-0068.dcm'),
(2, 181, 'DICOM/2/IM-0001-0069.dcm'),
(2, 182, 'DICOM/2/IM-0001-0070.dcm'),
(2, 183, 'DICOM/2/IM-0001-0071.dcm'),
(2, 184, 'DICOM/2/IM-0001-0072.dcm'),
(2, 185, 'DICOM/2/IM-0001-0073.dcm'),
(2, 186, 'DICOM/2/IM-0001-0074.dcm'),
(2, 187, 'DICOM/2/IM-0001-0075.dcm'),
(2, 188, 'DICOM/2/IM-0001-0076.dcm'),
(2, 189, 'DICOM/2/IM-0001-0077.dcm'),
(2, 190, 'DICOM/2/IM-0001-0078.dcm'),
(2, 191, 'DICOM/2/IM-0001-0079.dcm'),
(2, 192, 'DICOM/2/IM-0001-0080.dcm'),
(2, 193, 'DICOM/2/IM-0001-0081.dcm'),
(2, 194, 'DICOM/2/IM-0001-0082.dcm'),
(2, 195, 'DICOM/2/IM-0001-0083.dcm'),
(2, 196, 'DICOM/2/IM-0001-0084.dcm'),
(2, 197, 'DICOM/2/IM-0001-0085.dcm'),
(2, 198, 'DICOM/2/IM-0001-0086.dcm'),
(2, 199, 'DICOM/2/IM-0001-0087.dcm'),
(2, 200, 'DICOM/2/IM-0001-0088.dcm'),
(2, 201, 'DICOM/2/IM-0001-0089.dcm'),
(2, 202, 'DICOM/2/IM-0001-0090.dcm'),
(2, 203, 'DICOM/2/IM-0001-0091.dcm'),
(2, 204, 'DICOM/2/IM-0001-0092.dcm'),
(2, 205, 'DICOM/2/IM-0001-0093.dcm'),
(2, 206, 'DICOM/2/IM-0001-0094.dcm'),
(2, 207, 'DICOM/2/IM-0001-0095.dcm'),
(2, 208, 'DICOM/2/IM-0001-0096.dcm'),
(2, 209, 'DICOM/2/IM-0001-0097.dcm'),
(2, 210, 'DICOM/2/IM-0001-0098.dcm'),
(2, 211, 'DICOM/2/IM-0001-0099.dcm'),
(2, 212, 'DICOM/2/IM-0001-0100.dcm'),
(2, 213, 'DICOM/2/IM-0001-0101.dcm'),
(2, 214, 'DICOM/2/IM-0001-0102.dcm'),
(2, 215, 'DICOM/2/IM-0001-0103.dcm'),
(2, 216, 'DICOM/2/IM-0001-0104.dcm'),
(2, 217, 'DICOM/2/IM-0001-0105.dcm'),
(2, 218, 'DICOM/2/IM-0001-0106.dcm'),
(2, 219, 'DICOM/2/IM-0001-0107.dcm'),
(2, 220, 'DICOM/2/IM-0001-0108.dcm'),
(2, 221, 'DICOM/2/IM-0001-0109.dcm'),
(2, 222, 'DICOM/2/IM-0001-0110.dcm'),
(2, 223, 'DICOM/2/IM-0001-0111.dcm'),
(2, 224, 'DICOM/2/IM-0001-0112.dcm'),
(2, 225, 'DICOM/2/IM-0001-0113.dcm'),
(2, 226, 'DICOM/2/IM-0001-0114.dcm'),
(2, 227, 'DICOM/2/IM-0001-0115.dcm'),
(2, 228, 'DICOM/2/IM-0001-0116.dcm'),
(2, 229, 'DICOM/2/IM-0001-0117.dcm'),
(2, 230, 'DICOM/2/IM-0001-0118.dcm'),
(2, 231, 'DICOM/2/IM-0001-0119.dcm'),
(2, 232, 'DICOM/2/IM-0001-0120.dcm'),
(2, 233, 'DICOM/2/IM-0001-0121.dcm'),
(2, 234, 'DICOM/2/IM-0001-0122.dcm'),
(2, 235, 'DICOM/2/IM-0001-0123.dcm'),
(2, 236, 'DICOM/2/IM-0001-0124.dcm'),
(2, 237, 'DICOM/2/IM-0001-0125.dcm'),
(2, 238, 'DICOM/2/IM-0001-0126.dcm'),
(2, 239, 'DICOM/2/IM-0001-0127.dcm'),
(2, 240, 'DICOM/2/IM-0001-0128.dcm'),
(2, 241, 'DICOM/2/IM-0001-0129.dcm'),
(2, 242, 'DICOM/2/IM-0001-0130.dcm'),
(2, 243, 'DICOM/2/IM-0001-0131.dcm'),
(2, 244, 'DICOM/2/IM-0001-0132.dcm'),
(2, 245, 'DICOM/2/IM-0001-0133.dcm'),
(2, 246, 'DICOM/2/IM-0001-0134.dcm'),
(2, 247, 'DICOM/2/IM-0001-0135.dcm'),
(2, 248, 'DICOM/2/IM-0001-0136.dcm'),
(2, 249, 'DICOM/2/IM-0001-0137.dcm'),
(2, 250, 'DICOM/2/IM-0001-0138.dcm'),
(2, 251, 'DICOM/2/IM-0001-0139.dcm'),
(2, 252, 'DICOM/2/IM-0001-0140.dcm'),
(2, 253, 'DICOM/2/IM-0001-0141.dcm'),
(2, 254, 'DICOM/2/IM-0001-0142.dcm'),
(2, 255, 'DICOM/2/IM-0001-0143.dcm'),
(2, 256, 'DICOM/2/IM-0001-0144.dcm'),
(2, 257, 'DICOM/2/IM-0001-0145.dcm'),
(2, 258, 'DICOM/2/IM-0001-0146.dcm'),
(2, 259, 'DICOM/2/IM-0001-0147.dcm'),
(2, 260, 'DICOM/2/IM-0001-0148.dcm'),
(2, 261, 'DICOM/2/IM-0001-0149.dcm'),
(2, 262, 'DICOM/2/IM-0001-0150.dcm'),
(2, 263, 'DICOM/2/IM-0001-0151.dcm'),
(2, 264, 'DICOM/2/IM-0001-0152.dcm'),
(2, 265, 'DICOM/2/IM-0001-0153.dcm'),
(2, 266, 'DICOM/2/IM-0001-0154.dcm'),
(2, 267, 'DICOM/2/IM-0001-0155.dcm'),
(2, 268, 'DICOM/2/IM-0001-0156.dcm'),
(2, 269, 'DICOM/2/IM-0001-0157.dcm'),
(2, 270, 'DICOM/2/IM-0001-0158.dcm'),
(2, 271, 'DICOM/2/IM-0001-0159.dcm'),
(2, 272, 'DICOM/2/IM-0001-0160.dcm'),
(2, 273, 'DICOM/2/IM-0001-0161.dcm'),
(2, 274, 'DICOM/2/IM-0001-0162.dcm'),
(2, 275, 'DICOM/2/IM-0001-0163.dcm'),
(2, 276, 'DICOM/2/IM-0001-0164.dcm'),
(2, 277, 'DICOM/2/IM-0001-0165.dcm'),
(2, 278, 'DICOM/2/IM-0001-0166.dcm'),
(2, 279, 'DICOM/2/IM-0001-0167.dcm'),
(2, 280, 'DICOM/2/IM-0001-0168.dcm'),
(2, 281, 'DICOM/2/IM-0001-0169.dcm'),
(2, 282, 'DICOM/2/IM-0001-0170.dcm'),
(2, 283, 'DICOM/2/IM-0001-0171.dcm'),
(2, 284, 'DICOM/2/IM-0001-0172.dcm'),
(2, 285, 'DICOM/2/IM-0001-0173.dcm'),
(2, 286, 'DICOM/2/IM-0001-0174.dcm'),
(2, 287, 'DICOM/2/IM-0001-0175.dcm'),
(2, 288, 'DICOM/2/IM-0001-0176.dcm'),
(2, 289, 'DICOM/2/IM-0001-0177.dcm'),
(2, 290, 'DICOM/2/IM-0001-0178.dcm'),
(2, 291, 'DICOM/2/IM-0001-0179.dcm'),
(2, 292, 'DICOM/2/IM-0001-0180.dcm'),
(2, 293, 'DICOM/2/IM-0001-0181.dcm'),
(2, 294, 'DICOM/2/IM-0001-0182.dcm'),
(2, 295, 'DICOM/2/IM-0001-0183.dcm'),
(2, 296, 'DICOM/2/IM-0001-0184.dcm'),
(2, 297, 'DICOM/2/IM-0001-0185.dcm'),
(2, 298, 'DICOM/2/IM-0001-0186.dcm'),
(2, 299, 'DICOM/2/IM-0001-0187.dcm'),
(2, 300, 'DICOM/2/IM-0001-0188.dcm'),
(2, 301, 'DICOM/2/IM-0001-0189.dcm'),
(2, 302, 'DICOM/2/IM-0001-0190.dcm'),
(2, 303, 'DICOM/2/IM-0001-0191.dcm'),
(2, 304, 'DICOM/2/IM-0001-0192.dcm'),
(2, 305, 'DICOM/2/IM-0001-0193.dcm'),
(2, 306, 'DICOM/2/IM-0001-0194.dcm'),
(2, 307, 'DICOM/2/IM-0001-0195.dcm'),
(2, 308, 'DICOM/2/IM-0001-0196.dcm'),
(2, 309, 'DICOM/2/IM-0001-0197.dcm'),
(2, 310, 'DICOM/2/IM-0001-0198.dcm'),
(2, 311, 'DICOM/2/IM-0001-0199.dcm'),
(2, 312, 'DICOM/2/IM-0001-0200.dcm'),
(2, 313, 'DICOM/2/IM-0001-0201.dcm'),
(2, 314, 'DICOM/2/IM-0001-0202.dcm'),
(2, 315, 'DICOM/2/IM-0001-0203.dcm'),
(2, 316, 'DICOM/2/IM-0001-0204.dcm'),
(2, 317, 'DICOM/2/IM-0001-0205.dcm'),
(2, 318, 'DICOM/2/IM-0001-0206.dcm'),
(2, 319, 'DICOM/2/IM-0001-0207.dcm'),
(2, 320, 'DICOM/2/IM-0001-0208.dcm'),
(2, 321, 'DICOM/2/IM-0001-0209.dcm'),
(2, 322, 'DICOM/2/IM-0001-0210.dcm'),
(2, 323, 'DICOM/2/IM-0001-0211.dcm'),
(2, 324, 'DICOM/2/IM-0001-0212.dcm'),
(2, 325, 'DICOM/2/IM-0001-0213.dcm'),
(2, 326, 'DICOM/2/IM-0001-0214.dcm'),
(2, 327, 'DICOM/2/IM-0001-0215.dcm'),
(2, 328, 'DICOM/2/IM-0001-0216.dcm'),
(2, 329, 'DICOM/2/IM-0001-0217.dcm'),
(2, 330, 'DICOM/2/IM-0001-0218.dcm'),
(2, 331, 'DICOM/2/IM-0001-0219.dcm'),
(2, 332, 'DICOM/2/IM-0001-0220.dcm'),
(2, 333, 'DICOM/2/IM-0001-0221.dcm'),
(2, 334, 'DICOM/2/IM-0001-0222.dcm'),
(2, 335, 'DICOM/2/IM-0001-0223.dcm'),
(2, 336, 'DICOM/2/IM-0001-0224.dcm'),
(2, 337, 'DICOM/2/IM-0001-0225.dcm'),
(2, 338, 'DICOM/2/IM-0001-0226.dcm'),
(2, 339, 'DICOM/2/IM-0001-0227.dcm'),
(2, 340, 'DICOM/2/IM-0001-0228.dcm'),
(2, 341, 'DICOM/2/IM-0001-0229.dcm'),
(2, 342, 'DICOM/2/IM-0001-0230.dcm'),
(2, 343, 'DICOM/2/IM-0001-0231.dcm'),
(2, 344, 'DICOM/2/IM-0001-0232.dcm'),
(2, 345, 'DICOM/2/IM-0001-0233.dcm'),
(2, 346, 'DICOM/2/IM-0001-0234.dcm'),
(2, 347, 'DICOM/2/IM-0001-0235.dcm'),
(2, 348, 'DICOM/2/IM-0001-0236.dcm'),
(2, 349, 'DICOM/2/IM-0001-0237.dcm'),
(2, 350, 'DICOM/2/IM-0001-0238.dcm'),
(2, 351, 'DICOM/2/IM-0001-0239.dcm'),
(2, 352, 'DICOM/2/IM-0001-0240.dcm'),
(2, 353, 'DICOM/2/IM-0001-0241.dcm'),
(2, 354, 'DICOM/2/IM-0001-0242.dcm'),
(2, 355, 'DICOM/2/IM-0001-0243.dcm'),
(2, 356, 'DICOM/2/IM-0001-0244.dcm'),
(2, 357, 'DICOM/2/IM-0001-0245.dcm'),
(2, 358, 'DICOM/2/IM-0001-0246.dcm'),
(2, 359, 'DICOM/2/IM-0001-0247.dcm'),
(2, 360, 'DICOM/2/IM-0001-0248.dcm'),
(2, 361, 'DICOM/2/IM-0001-0249.dcm'),
(2, 362, 'DICOM/2/IM-0001-0250.dcm'),
(2, 363, 'DICOM/2/IM-0001-0251.dcm'),
(2, 364, 'DICOM/2/IM-0001-0252.dcm'),
(2, 365, 'DICOM/2/IM-0001-0253.dcm'),
(2, 366, 'DICOM/2/IM-0001-0254.dcm'),
(2, 367, 'DICOM/2/IM-0001-0255.dcm'),
(2, 368, 'DICOM/2/IM-0001-0256.dcm'),
(2, 369, 'DICOM/2/IM-0001-0257.dcm'),
(2, 370, 'DICOM/2/IM-0001-0258.dcm'),
(2, 371, 'DICOM/2/IM-0001-0259.dcm'),
(2, 372, 'DICOM/2/IM-0001-0260.dcm'),
(2, 373, 'DICOM/2/IM-0001-0261.dcm'),
(2, 374, 'DICOM/2/IM-0001-0262.dcm'),
(2, 375, 'DICOM/2/IM-0001-0263.dcm'),
(2, 376, 'DICOM/2/IM-0001-0264.dcm'),
(2, 377, 'DICOM/2/IM-0001-0265.dcm'),
(2, 378, 'DICOM/2/IM-0001-0266.dcm'),
(2, 379, 'DICOM/2/IM-0001-0267.dcm'),
(2, 380, 'DICOM/2/IM-0001-0268.dcm'),
(2, 381, 'DICOM/2/IM-0001-0269.dcm'),
(2, 382, 'DICOM/2/IM-0001-0270.dcm'),
(2, 383, 'DICOM/2/IM-0001-0271.dcm'),
(2, 384, 'DICOM/2/IM-0001-0272.dcm'),
(2, 385, 'DICOM/2/IM-0001-0273.dcm'),
(2, 386, 'DICOM/2/IM-0001-0274.dcm'),
(2, 387, 'DICOM/2/IM-0001-0275.dcm'),
(2, 388, 'DICOM/2/IM-0001-0276.dcm'),
(2, 389, 'DICOM/2/IM-0001-0277.dcm'),
(2, 390, 'DICOM/2/IM-0001-0278.dcm'),
(2, 391, 'DICOM/2/IM-0001-0279.dcm'),
(2, 392, 'DICOM/2/IM-0001-0280.dcm'),
(2, 393, 'DICOM/2/IM-0001-0281.dcm'),
(2, 394, 'DICOM/2/IM-0001-0282.dcm'),
(2, 395, 'DICOM/2/IM-0001-0283.dcm'),
(2, 396, 'DICOM/2/IM-0001-0284.dcm'),
(2, 397, 'DICOM/2/IM-0001-0285.dcm'),
(2, 398, 'DICOM/2/IM-0001-0286.dcm'),
(2, 399, 'DICOM/2/IM-0001-0287.dcm'),
(2, 400, 'DICOM/2/IM-0001-0288.dcm'),
(2, 401, 'DICOM/2/IM-0001-0289.dcm'),
(2, 402, 'DICOM/2/IM-0001-0290.dcm'),
(2, 403, 'DICOM/2/IM-0001-0291.dcm'),
(2, 404, 'DICOM/2/IM-0001-0292.dcm'),
(2, 405, 'DICOM/2/IM-0001-0293.dcm'),
(2, 406, 'DICOM/2/IM-0001-0294.dcm'),
(2, 407, 'DICOM/2/IM-0001-0295.dcm'),
(2, 408, 'DICOM/2/IM-0001-0296.dcm'),
(2, 409, 'DICOM/2/IM-0001-0297.dcm'),
(2, 410, 'DICOM/2/IM-0001-0298.dcm'),
(2, 411, 'DICOM/2/IM-0001-0299.dcm'),
(2, 412, 'DICOM/2/IM-0001-0300.dcm'),
(9, 552, 'DICOM/9/IM-0001-0001.dcm'),
(9, 553, 'DICOM/9/IM-0001-0002.dcm'),
(9, 554, 'DICOM/9/IM-0001-0003.dcm'),
(9, 555, 'DICOM/9/IM-0001-0004.dcm'),
(9, 556, 'DICOM/9/IM-0001-0005.dcm'),
(9, 557, 'DICOM/9/IM-0001-0006.dcm'),
(9, 558, 'DICOM/9/IM-0001-0007.dcm'),
(9, 559, 'DICOM/9/IM-0001-0008.dcm'),
(9, 560, 'DICOM/9/IM-0001-0009.dcm'),
(9, 561, 'DICOM/9/IM-0001-0010.dcm'),
(9, 562, 'DICOM/9/IM-0001-0011.dcm'),
(9, 563, 'DICOM/9/IM-0001-0012.dcm'),
(9, 564, 'DICOM/9/IM-0001-0013.dcm'),
(9, 565, 'DICOM/9/IM-0001-0014.dcm'),
(9, 566, 'DICOM/9/IM-0001-0015.dcm'),
(9, 567, 'DICOM/9/IM-0001-0016.dcm'),
(9, 568, 'DICOM/9/IM-0001-0017.dcm'),
(9, 569, 'DICOM/9/IM-0001-0018.dcm'),
(9, 570, 'DICOM/9/IM-0001-0019.dcm'),
(9, 571, 'DICOM/9/IM-0001-0020.dcm'),
(9, 572, 'DICOM/9/IM-0001-0021.dcm'),
(9, 573, 'DICOM/9/IM-0001-0022.dcm'),
(9, 574, 'DICOM/9/IM-0001-0023.dcm'),
(9, 575, 'DICOM/9/IM-0001-0024.dcm'),
(9, 576, 'DICOM/9/IM-0001-0025.dcm'),
(9, 577, 'DICOM/9/IM-0001-0026.dcm'),
(9, 578, 'DICOM/9/IM-0001-0027.dcm'),
(9, 579, 'DICOM/9/IM-0001-0028.dcm'),
(9, 580, 'DICOM/9/IM-0001-0029.dcm'),
(9, 581, 'DICOM/9/IM-0001-0030.dcm'),
(9, 582, 'DICOM/9/IM-0001-0031.dcm'),
(9, 583, 'DICOM/9/IM-0001-0032.dcm'),
(9, 584, 'DICOM/9/IM-0001-0033.dcm'),
(9, 585, 'DICOM/9/IM-0001-0034.dcm'),
(9, 586, 'DICOM/9/IM-0001-0035.dcm'),
(9, 587, 'DICOM/9/IM-0001-0036.dcm'),
(9, 588, 'DICOM/9/IM-0001-0037.dcm'),
(9, 589, 'DICOM/9/IM-0001-0038.dcm'),
(9, 590, 'DICOM/9/IM-0001-0039.dcm'),
(9, 591, 'DICOM/9/IM-0001-0040.dcm'),
(9, 592, 'DICOM/9/IM-0001-0041.dcm'),
(9, 593, 'DICOM/9/IM-0001-0042.dcm'),
(9, 594, 'DICOM/9/IM-0001-0043.dcm'),
(9, 595, 'DICOM/9/IM-0001-0044.dcm'),
(9, 596, 'DICOM/9/IM-0001-0045.dcm'),
(9, 597, 'DICOM/9/IM-0001-0046.dcm'),
(9, 598, 'DICOM/9/IM-0001-0047.dcm'),
(9, 599, 'DICOM/9/IM-0001-0048.dcm'),
(9, 600, 'DICOM/9/IM-0001-0049.dcm'),
(9, 601, 'DICOM/9/IM-0001-0050.dcm'),
(9, 602, 'DICOM/9/IM-0001-0051.dcm'),
(9, 603, 'DICOM/9/IM-0001-0052.dcm'),
(9, 604, 'DICOM/9/IM-0001-0053.dcm'),
(9, 605, 'DICOM/9/IM-0001-0054.dcm'),
(9, 606, 'DICOM/9/IM-0001-0055.dcm'),
(9, 607, 'DICOM/9/IM-0001-0056.dcm'),
(9, 608, 'DICOM/9/IM-0001-0057.dcm'),
(9, 609, 'DICOM/9/IM-0001-0058.dcm'),
(9, 610, 'DICOM/9/IM-0001-0059.dcm'),
(9, 611, 'DICOM/9/IM-0001-0060.dcm'),
(9, 612, 'DICOM/9/IM-0001-0061.dcm'),
(9, 613, 'DICOM/9/IM-0001-0062.dcm'),
(9, 614, 'DICOM/9/IM-0001-0063.dcm'),
(9, 615, 'DICOM/9/IM-0001-0064.dcm'),
(9, 616, 'DICOM/9/IM-0001-0065.dcm'),
(9, 617, 'DICOM/9/IM-0001-0066.dcm'),
(9, 618, 'DICOM/9/IM-0001-0067.dcm'),
(9, 619, 'DICOM/9/IM-0001-0068.dcm'),
(9, 620, 'DICOM/9/IM-0001-0069.dcm'),
(9, 621, 'DICOM/9/IM-0001-0070.dcm'),
(9, 622, 'DICOM/9/IM-0001-0071.dcm'),
(9, 623, 'DICOM/9/IM-0001-0072.dcm'),
(9, 624, 'DICOM/9/IM-0001-0073.dcm'),
(9, 625, 'DICOM/9/IM-0001-0074.dcm'),
(9, 626, 'DICOM/9/IM-0001-0075.dcm'),
(9, 627, 'DICOM/9/IM-0001-0076.dcm'),
(9, 628, 'DICOM/9/IM-0001-0077.dcm'),
(9, 629, 'DICOM/9/IM-0001-0078.dcm'),
(9, 630, 'DICOM/9/IM-0001-0079.dcm'),
(9, 631, 'DICOM/9/IM-0001-0080.dcm'),
(9, 632, 'DICOM/9/IM-0001-0081.dcm'),
(9, 633, 'DICOM/9/IM-0001-0082.dcm'),
(9, 634, 'DICOM/9/IM-0001-0083.dcm'),
(9, 635, 'DICOM/9/IM-0001-0084.dcm'),
(9, 636, 'DICOM/9/IM-0001-0085.dcm'),
(9, 637, 'DICOM/9/IM-0001-0086.dcm'),
(9, 638, 'DICOM/9/IM-0001-0087.dcm'),
(9, 639, 'DICOM/9/IM-0001-0088.dcm'),
(9, 640, 'DICOM/9/IM-0001-0089.dcm'),
(9, 641, 'DICOM/9/IM-0001-0090.dcm'),
(9, 642, 'DICOM/9/IM-0001-0091.dcm'),
(9, 643, 'DICOM/9/IM-0001-0092.dcm'),
(9, 644, 'DICOM/9/IM-0001-0093.dcm'),
(9, 645, 'DICOM/9/IM-0001-0094.dcm'),
(9, 646, 'DICOM/9/IM-0001-0095.dcm'),
(9, 647, 'DICOM/9/IM-0001-0096.dcm'),
(9, 648, 'DICOM/9/IM-0001-0097.dcm'),
(9, 649, 'DICOM/9/IM-0001-0098.dcm'),
(9, 650, 'DICOM/9/IM-0001-0099.dcm'),
(9, 651, 'DICOM/9/IM-0001-0100.dcm'),
(9, 652, 'DICOM/9/IM-0001-0101.dcm'),
(9, 653, 'DICOM/9/IM-0001-0102.dcm'),
(9, 654, 'DICOM/9/IM-0001-0103.dcm'),
(9, 655, 'DICOM/9/IM-0001-0104.dcm'),
(9, 656, 'DICOM/9/IM-0001-0105.dcm'),
(9, 657, 'DICOM/9/IM-0001-0106.dcm'),
(9, 658, 'DICOM/9/IM-0001-0107.dcm'),
(9, 659, 'DICOM/9/IM-0001-0108.dcm'),
(9, 660, 'DICOM/9/IM-0001-0109.dcm'),
(10, 661, 'DICOM/10/IM-0001-0001.dcm'),
(10, 662, 'DICOM/10/IM-0001-0002.dcm'),
(10, 663, 'DICOM/10/IM-0001-0003.dcm'),
(10, 664, 'DICOM/10/IM-0001-0004.dcm'),
(10, 665, 'DICOM/10/IM-0001-0005.dcm'),
(10, 666, 'DICOM/10/IM-0001-0006.dcm'),
(10, 667, 'DICOM/10/IM-0001-0007.dcm'),
(10, 668, 'DICOM/10/IM-0001-0008.dcm'),
(10, 669, 'DICOM/10/IM-0001-0009.dcm'),
(10, 670, 'DICOM/10/IM-0001-0010.dcm'),
(10, 671, 'DICOM/10/IM-0001-0011.dcm'),
(10, 672, 'DICOM/10/IM-0001-0012.dcm'),
(11, 673, 'DICOM/11/IM-0001-0010.dcm'),
(11, 674, 'DICOM/11/IM-0001-0011.dcm'),
(11, 675, 'DICOM/11/IM-0001-0012.dcm'),
(11, 676, 'DICOM/11/IM-0001-0013.dcm'),
(11, 677, 'DICOM/11/IM-0001-0014.dcm'),
(11, 678, 'DICOM/11/IM-0001-0015.dcm'),
(11, 679, 'DICOM/11/IM-0001-0016.dcm'),
(11, 680, 'DICOM/11/IM-0001-0017.dcm'),
(11, 681, 'DICOM/11/IM-0001-0018.dcm'),
(11, 682, 'DICOM/11/IM-0001-0019.dcm'),
(11, 683, 'DICOM/11/IM-0001-0020.dcm'),
(11, 684, 'DICOM/11/IM-0001-0021.dcm'),
(12, 685, 'DICOM/12/IM-0001-0001.dcm'),
(12, 686, 'DICOM/12/IM-0001-0002.dcm'),
(12, 687, 'DICOM/12/IM-0001-0003.dcm'),
(12, 688, 'DICOM/12/IM-0001-0004.dcm'),
(12, 689, 'DICOM/12/IM-0001-0005.dcm'),
(12, 690, 'DICOM/12/IM-0001-0006.dcm'),
(12, 691, 'DICOM/12/IM-0001-0007.dcm'),
(12, 692, 'DICOM/12/IM-0001-0008.dcm'),
(1, 693, 'DICOM/1/IM-0001-0019.dcm'),
(1, 694, 'DICOM/1/IM-0001-0020.dcm'),
(1, 695, 'DICOM/1/IM-0001-0021.dcm'),
(1, 696, 'DICOM/1/IM-0001-0022.dcm'),
(1, 697, 'DICOM/1/IM-0001-0023.dcm'),
(1, 698, 'DICOM/1/IM-0001-0024.dcm'),
(1, 699, 'DICOM/1/IM-0001-0025.dcm'),
(1, 700, 'DICOM/1/IM-0001-0026.dcm'),
(1, 701, 'DICOM/1/IM-0001-0027.dcm'),
(1, 702, 'DICOM/1/IM-0001-0028.dcm'),
(1, 703, 'DICOM/1/IM-0001-0029.dcm'),
(1, 704, 'DICOM/1/IM-0001-0030.dcm'),
(1, 705, 'DICOM/1/IM-0001-0031.dcm'),
(1, 706, 'DICOM/1/IM-0001-0032.dcm'),
(1, 707, 'DICOM/1/IM-0001-0033.dcm'),
(1, 708, 'DICOM/1/IM-0001-0034.dcm'),
(1, 709, 'DICOM/1/IM-0001-0035.dcm'),
(1, 710, 'DICOM/1/IM-0001-0036.dcm'),
(1, 711, 'DICOM/1/IM-0001-0037.dcm'),
(1, 712, 'DICOM/1/IM-0001-0038.dcm'),
(1, 713, 'DICOM/1/IM-0001-0039.dcm'),
(1, 714, 'DICOM/1/IM-0001-0040.dcm'),
(1, 715, 'DICOM/1/IM-0001-0041.dcm'),
(1, 716, 'DICOM/1/IM-0001-0042.dcm'),
(1, 717, 'DICOM/1/IM-0001-0043.dcm'),
(1, 718, 'DICOM/1/IM-0001-0044.dcm'),
(1, 719, 'DICOM/1/IM-0001-0045.dcm'),
(1, 720, 'DICOM/1/IM-0001-0046.dcm'),
(1, 721, 'DICOM/1/IM-0001-0047.dcm'),
(1, 722, 'DICOM/1/IM-0001-0048.dcm'),
(1, 723, 'DICOM/1/IM-0001-0049.dcm'),
(1, 724, 'DICOM/1/IM-0001-0050.dcm'),
(1, 725, 'DICOM/1/IM-0001-0051.dcm'),
(1, 726, 'DICOM/1/IM-0001-0052.dcm'),
(1, 727, 'DICOM/1/IM-0001-0053.dcm'),
(1, 728, 'DICOM/1/IM-0001-0054.dcm'),
(1, 729, 'DICOM/1/IM-0001-0055.dcm'),
(1, 730, 'DICOM/1/IM-0001-0056.dcm'),
(1, 731, 'DICOM/1/IM-0001-0057.dcm'),
(1, 732, 'DICOM/1/IM-0001-0058.dcm'),
(1, 733, 'DICOM/1/IM-0001-0059.dcm'),
(1, 734, 'DICOM/1/IM-0001-0060.dcm'),
(1, 735, 'DICOM/1/IM-0001-0061.dcm'),
(1, 736, 'DICOM/1/IM-0001-0062.dcm'),
(1, 737, 'DICOM/1/IM-0001-0063.dcm'),
(1, 738, 'DICOM/1/IM-0001-0064.dcm'),
(1, 739, 'DICOM/1/IM-0001-0065.dcm'),
(1, 740, 'DICOM/1/IM-0001-0066.dcm'),
(1, 741, 'DICOM/1/IM-0001-0067.dcm'),
(1, 742, 'DICOM/1/IM-0001-0068.dcm'),
(1, 743, 'DICOM/1/IM-0001-0069.dcm'),
(1, 744, 'DICOM/1/IM-0001-0070.dcm'),
(1, 745, 'DICOM/1/IM-0001-0071.dcm'),
(1, 746, 'DICOM/1/IM-0001-0072.dcm'),
(1, 747, 'DICOM/1/IM-0001-0073.dcm'),
(1, 748, 'DICOM/1/IM-0001-0074.dcm'),
(1, 749, 'DICOM/1/IM-0001-0075.dcm'),
(1, 750, 'DICOM/1/IM-0001-0076.dcm'),
(1, 751, 'DICOM/1/IM-0001-0077.dcm'),
(1, 752, 'DICOM/1/IM-0001-0078.dcm'),
(1, 753, 'DICOM/1/IM-0001-0079.dcm'),
(1, 754, 'DICOM/1/IM-0001-0080.dcm'),
(1, 755, 'DICOM/1/IM-0001-0081.dcm'),
(1, 756, 'DICOM/1/IM-0001-0082.dcm'),
(1, 757, 'DICOM/1/IM-0001-0083.dcm'),
(1, 758, 'DICOM/1/IM-0001-0084.dcm'),
(1, 759, 'DICOM/1/IM-0001-0085.dcm'),
(1, 760, 'DICOM/1/IM-0001-0086.dcm'),
(1, 761, 'DICOM/1/IM-0001-0087.dcm'),
(1, 762, 'DICOM/1/IM-0001-0088.dcm'),
(1, 763, 'DICOM/1/IM-0001-0089.dcm'),
(1, 764, 'DICOM/1/IM-0001-0090.dcm'),
(1, 765, 'DICOM/1/IM-0001-0091.dcm'),
(1, 766, 'DICOM/1/IM-0001-0092.dcm'),
(1, 767, 'DICOM/1/IM-0001-0093.dcm'),
(1, 768, 'DICOM/1/IM-0001-0094.dcm'),
(1, 769, 'DICOM/1/IM-0001-0095.dcm'),
(1, 770, 'DICOM/1/IM-0001-0096.dcm'),
(1, 771, 'DICOM/1/IM-0001-0097.dcm'),
(1, 772, 'DICOM/1/IM-0001-0098.dcm'),
(1, 773, 'DICOM/1/IM-0001-0099.dcm'),
(1, 774, 'DICOM/1/IM-0001-0100.dcm'),
(1, 775, 'DICOM/1/IM-0001-0101.dcm'),
(1, 776, 'DICOM/1/IM-0001-0102.dcm'),
(1, 777, 'DICOM/1/IM-0001-0103.dcm'),
(1, 778, 'DICOM/1/IM-0001-0104.dcm'),
(1, 779, 'DICOM/1/IM-0001-0105.dcm'),
(1, 780, 'DICOM/1/IM-0001-0106.dcm'),
(1, 781, 'DICOM/1/IM-0001-0107.dcm'),
(1, 782, 'DICOM/1/IM-0001-0108.dcm'),
(1, 783, 'DICOM/1/IM-0001-0109.dcm'),
(1, 784, 'DICOM/1/IM-0001-0110.dcm'),
(1, 785, 'DICOM/1/IM-0001-0111.dcm'),
(1, 786, 'DICOM/1/IM-0001-0112.dcm'),
(1, 787, 'DICOM/1/IM-0001-0113.dcm'),
(1, 788, 'DICOM/1/IM-0001-0114.dcm'),
(1, 789, 'DICOM/1/IM-0001-0115.dcm'),
(1, 790, 'DICOM/1/IM-0001-0116.dcm'),
(1, 791, 'DICOM/1/IM-0001-0117.dcm'),
(1, 792, 'DICOM/1/IM-0001-0118.dcm'),
(1, 793, 'DICOM/1/IM-0001-0119.dcm'),
(1, 794, 'DICOM/1/IM-0001-0120.dcm'),
(1, 795, 'DICOM/1/IM-0001-0121.dcm'),
(1, 796, 'DICOM/1/IM-0001-0122.dcm'),
(1, 797, 'DICOM/1/IM-0001-0123.dcm'),
(1, 798, 'DICOM/1/IM-0001-0124.dcm'),
(1, 799, 'DICOM/1/IM-0001-0125.dcm'),
(1, 800, 'DICOM/1/IM-0001-0126.dcm'),
(1, 801, 'DICOM/1/IM-0001-0127.dcm'),
(1, 802, 'DICOM/1/IM-0001-0128.dcm'),
(1, 803, 'DICOM/1/IM-0001-0129.dcm'),
(1, 804, 'DICOM/1/IM-0001-0130.dcm'),
(1, 805, 'DICOM/1/IM-0001-0131.dcm'),
(1, 806, 'DICOM/1/IM-0001-0132.dcm'),
(1, 807, 'DICOM/1/IM-0001-0133.dcm'),
(1, 808, 'DICOM/1/IM-0001-0134.dcm'),
(1, 809, 'DICOM/1/IM-0001-0135.dcm'),
(1, 810, 'DICOM/1/IM-0001-0136.dcm'),
(1, 811, 'DICOM/1/IM-0001-0137.dcm'),
(1, 812, 'DICOM/1/IM-0001-0138.dcm'),
(1, 813, 'DICOM/1/IM-0001-0139.dcm'),
(1, 814, 'DICOM/1/IM-0001-0140.dcm'),
(1, 815, 'DICOM/1/IM-0001-0141.dcm'),
(1, 816, 'DICOM/1/IM-0001-0142.dcm'),
(1, 817, 'DICOM/1/IM-0001-0143.dcm'),
(1, 818, 'DICOM/1/IM-0001-0144.dcm'),
(1, 819, 'DICOM/1/IM-0001-0145.dcm'),
(1, 820, 'DICOM/1/IM-0001-0146.dcm'),
(1, 821, 'DICOM/1/IM-0001-0147.dcm'),
(1, 822, 'DICOM/1/IM-0001-0148.dcm'),
(1, 823, 'DICOM/1/IM-0001-0149.dcm'),
(1, 824, 'DICOM/1/IM-0001-0150.dcm'),
(1, 825, 'DICOM/1/IM-0001-0151.dcm'),
(1, 826, 'DICOM/1/IM-0001-0152.dcm'),
(1, 827, 'DICOM/1/IM-0001-0153.dcm'),
(1, 828, 'DICOM/1/IM-0001-0154.dcm'),
(1, 829, 'DICOM/1/IM-0001-0155.dcm'),
(1, 830, 'DICOM/1/IM-0001-0156.dcm'),
(1, 831, 'DICOM/1/IM-0001-0157.dcm'),
(1, 832, 'DICOM/1/IM-0001-0158.dcm'),
(1, 833, 'DICOM/1/IM-0001-0159.dcm'),
(1, 834, 'DICOM/1/IM-0001-0160.dcm'),
(1, 835, 'DICOM/1/IM-0001-0161.dcm'),
(1, 836, 'DICOM/1/IM-0001-0162.dcm'),
(1, 837, 'DICOM/1/IM-0001-0163.dcm'),
(1, 838, 'DICOM/1/IM-0001-0164.dcm'),
(1, 839, 'DICOM/1/IM-0001-0165.dcm'),
(1, 840, 'DICOM/1/IM-0001-0166.dcm'),
(1, 841, 'DICOM/1/IM-0001-0167.dcm'),
(1, 842, 'DICOM/1/IM-0001-0168.dcm'),
(1, 843, 'DICOM/1/IM-0001-0169.dcm'),
(1, 844, 'DICOM/1/IM-0001-0170.dcm'),
(1, 845, 'DICOM/1/IM-0001-0171.dcm'),
(1, 846, 'DICOM/1/IM-0001-0172.dcm'),
(1, 847, 'DICOM/1/IM-0001-0173.dcm'),
(1, 848, 'DICOM/1/IM-0001-0174.dcm'),
(1, 849, 'DICOM/1/IM-0001-0175.dcm'),
(1, 850, 'DICOM/1/IM-0001-0176.dcm'),
(1, 851, 'DICOM/1/IM-0001-0177.dcm'),
(1, 852, 'DICOM/1/IM-0001-0178.dcm'),
(1, 853, 'DICOM/1/IM-0001-0179.dcm'),
(1, 854, 'DICOM/1/IM-0001-0180.dcm'),
(1, 855, 'DICOM/1/IM-0001-0181.dcm'),
(1, 856, 'DICOM/1/IM-0001-0182.dcm'),
(1, 857, 'DICOM/1/IM-0001-0183.dcm'),
(1, 858, 'DICOM/1/IM-0001-0184.dcm'),
(1, 859, 'DICOM/1/IM-0001-0185.dcm'),
(1, 860, 'DICOM/1/IM-0001-0186.dcm'),
(1, 861, 'DICOM/1/IM-0001-0187.dcm'),
(1, 862, 'DICOM/1/IM-0001-0188.dcm'),
(1, 863, 'DICOM/1/IM-0001-0189.dcm'),
(1, 864, 'DICOM/1/IM-0001-0190.dcm'),
(1, 865, 'DICOM/1/IM-0001-0191.dcm'),
(1, 866, 'DICOM/1/IM-0001-0192.dcm'),
(1, 867, 'DICOM/1/IM-0001-0193.dcm'),
(1, 868, 'DICOM/1/IM-0001-0194.dcm'),
(1, 869, 'DICOM/1/IM-0001-0195.dcm'),
(1, 870, 'DICOM/1/IM-0001-0196.dcm'),
(1, 871, 'DICOM/1/IM-0001-0197.dcm'),
(1, 872, 'DICOM/1/IM-0001-0198.dcm'),
(1, 873, 'DICOM/1/IM-0001-0199.dcm'),
(1, 874, 'DICOM/1/IM-0001-0200.dcm'),
(1, 875, 'DICOM/1/IM-0001-0201.dcm'),
(1, 876, 'DICOM/1/IM-0001-0202.dcm'),
(1, 877, 'DICOM/1/IM-0001-0203.dcm'),
(1, 878, 'DICOM/1/IM-0001-0204.dcm'),
(1, 879, 'DICOM/1/IM-0001-0205.dcm'),
(1, 880, 'DICOM/1/IM-0001-0206.dcm'),
(1, 881, 'DICOM/1/IM-0001-0207.dcm'),
(1, 882, 'DICOM/1/IM-0001-0208.dcm'),
(1, 883, 'DICOM/1/IM-0001-0209.dcm'),
(1, 884, 'DICOM/1/IM-0001-0210.dcm'),
(1, 885, 'DICOM/1/IM-0001-0211.dcm'),
(1, 886, 'DICOM/1/IM-0001-0212.dcm'),
(1, 887, 'DICOM/1/IM-0001-0213.dcm'),
(1, 888, 'DICOM/1/IM-0001-0214.dcm'),
(1, 889, 'DICOM/1/IM-0001-0215.dcm'),
(1, 890, 'DICOM/1/IM-0001-0216.dcm'),
(1, 891, 'DICOM/1/IM-0001-0217.dcm'),
(1, 892, 'DICOM/1/IM-0001-0218.dcm'),
(1, 893, 'DICOM/1/IM-0001-0219.dcm'),
(1, 894, 'DICOM/1/IM-0001-0220.dcm'),
(1, 895, 'DICOM/1/IM-0001-0221.dcm'),
(1, 896, 'DICOM/1/IM-0001-0222.dcm'),
(1, 897, 'DICOM/1/IM-0001-0223.dcm'),
(1, 898, 'DICOM/1/IM-0001-0224.dcm'),
(1, 899, 'DICOM/1/IM-0001-0225.dcm'),
(1, 900, 'DICOM/1/IM-0001-0226.dcm'),
(1, 901, 'DICOM/1/IM-0001-0227.dcm'),
(1, 902, 'DICOM/1/IM-0001-0228.dcm'),
(1, 903, 'DICOM/1/IM-0001-0229.dcm'),
(1, 904, 'DICOM/1/IM-0001-0230.dcm'),
(1, 905, 'DICOM/1/IM-0001-0231.dcm'),
(1, 906, 'DICOM/1/IM-0001-0232.dcm'),
(1, 907, 'DICOM/1/IM-0001-0233.dcm'),
(1, 908, 'DICOM/1/IM-0001-0234.dcm'),
(1, 909, 'DICOM/1/IM-0001-0235.dcm'),
(1, 910, 'DICOM/1/IM-0001-0236.dcm'),
(1, 911, 'DICOM/1/IM-0001-0237.dcm'),
(1, 912, 'DICOM/1/IM-0001-0238.dcm'),
(1, 913, 'DICOM/1/IM-0001-0239.dcm'),
(1, 914, 'DICOM/1/IM-0001-0240.dcm'),
(1, 915, 'DICOM/1/IM-0001-0241.dcm'),
(1, 916, 'DICOM/1/IM-0001-0242.dcm'),
(1, 917, 'DICOM/1/IM-0001-0243.dcm'),
(1, 918, 'DICOM/1/IM-0001-0244.dcm'),
(1, 919, 'DICOM/1/IM-0001-0245.dcm'),
(1, 920, 'DICOM/1/IM-0001-0246.dcm'),
(1, 921, 'DICOM/1/IM-0001-0247.dcm'),
(1, 922, 'DICOM/1/IM-0001-0248.dcm'),
(1, 923, 'DICOM/1/IM-0001-0249.dcm'),
(1, 924, 'DICOM/1/IM-0001-0250.dcm'),
(1, 925, 'DICOM/1/IM-0001-0251.dcm'),
(1, 926, 'DICOM/1/IM-0001-0252.dcm'),
(1, 927, 'DICOM/1/IM-0001-0253.dcm'),
(1, 928, 'DICOM/1/IM-0001-0254.dcm'),
(1, 929, 'DICOM/1/IM-0001-0255.dcm'),
(1, 930, 'DICOM/1/IM-0001-0256.dcm'),
(1, 931, 'DICOM/1/IM-0001-0257.dcm'),
(1, 932, 'DICOM/1/IM-0001-0258.dcm'),
(1, 933, 'DICOM/1/IM-0001-0259.dcm'),
(1, 934, 'DICOM/1/IM-0001-0260.dcm'),
(1, 935, 'DICOM/1/IM-0001-0261.dcm'),
(1, 936, 'DICOM/1/IM-0001-0262.dcm'),
(1, 937, 'DICOM/1/IM-0001-0263.dcm'),
(1, 938, 'DICOM/1/IM-0001-0264.dcm'),
(1, 939, 'DICOM/1/IM-0001-0265.dcm'),
(1, 940, 'DICOM/1/IM-0001-0266.dcm'),
(1, 941, 'DICOM/1/IM-0001-0267.dcm'),
(1, 942, 'DICOM/1/IM-0001-0268.dcm'),
(1, 943, 'DICOM/1/IM-0001-0269.dcm'),
(1, 944, 'DICOM/1/IM-0001-0270.dcm'),
(1, 945, 'DICOM/1/IM-0001-0271.dcm'),
(1, 946, 'DICOM/1/IM-0001-0272.dcm'),
(1, 947, 'DICOM/1/IM-0001-0273.dcm'),
(1, 948, 'DICOM/1/IM-0001-0274.dcm'),
(1, 949, 'DICOM/1/IM-0001-0275.dcm'),
(1, 950, 'DICOM/1/IM-0001-0276.dcm'),
(1, 951, 'DICOM/1/IM-0001-0277.dcm'),
(1, 952, 'DICOM/1/IM-0001-0278.dcm'),
(1, 953, 'DICOM/1/IM-0001-0279.dcm'),
(1, 954, 'DICOM/1/IM-0001-0280.dcm'),
(1, 955, 'DICOM/1/IM-0001-0281.dcm'),
(1, 956, 'DICOM/1/IM-0001-0282.dcm'),
(1, 957, 'DICOM/1/IM-0001-0283.dcm'),
(1, 958, 'DICOM/1/IM-0001-0284.dcm'),
(1, 959, 'DICOM/1/IM-0001-0285.dcm'),
(1, 960, 'DICOM/1/IM-0001-0286.dcm'),
(1, 961, 'DICOM/1/IM-0001-0287.dcm'),
(1, 962, 'DICOM/1/IM-0001-0288.dcm'),
(1, 963, 'DICOM/1/IM-0001-0289.dcm'),
(1, 964, 'DICOM/1/IM-0001-0290.dcm'),
(1, 965, 'DICOM/1/IM-0001-0291.dcm'),
(1, 966, 'DICOM/1/IM-0001-0292.dcm'),
(1, 967, 'DICOM/1/IM-0001-0293.dcm'),
(1, 968, 'DICOM/1/IM-0001-0294.dcm'),
(1, 969, 'DICOM/1/IM-0001-0295.dcm'),
(1, 970, 'DICOM/1/IM-0001-0296.dcm'),
(1, 971, 'DICOM/1/IM-0001-0297.dcm'),
(1, 972, 'DICOM/1/IM-0001-0298.dcm'),
(1, 973, 'DICOM/1/IM-0001-0299.dcm'),
(1, 974, 'DICOM/1/IM-0001-0300.dcm'),
(1, 975, 'DICOM/1/IM-0001-0301.dcm'),
(1, 976, 'DICOM/1/IM-0001-0302.dcm'),
(1, 977, 'DICOM/1/IM-0001-0303.dcm'),
(1, 978, 'DICOM/1/IM-0001-0304.dcm'),
(1, 979, 'DICOM/1/IM-0001-0305.dcm'),
(1, 980, 'DICOM/1/IM-0001-0306.dcm'),
(1, 981, 'DICOM/1/IM-0001-0307.dcm'),
(1, 982, 'DICOM/1/IM-0001-0308.dcm'),
(1, 983, 'DICOM/1/IM-0001-0309.dcm'),
(1, 984, 'DICOM/1/IM-0001-0310.dcm'),
(1, 985, 'DICOM/1/IM-0001-0311.dcm'),
(1, 986, 'DICOM/1/IM-0001-0312.dcm'),
(1, 987, 'DICOM/1/IM-0001-0313.dcm'),
(1, 988, 'DICOM/1/IM-0001-0314.dcm'),
(1, 989, 'DICOM/1/IM-0001-0315.dcm'),
(1, 990, 'DICOM/1/IM-0001-0316.dcm'),
(1, 991, 'DICOM/1/IM-0001-0317.dcm'),
(1, 992, 'DICOM/1/IM-0001-0318.dcm'),
(1, 993, 'DICOM/1/IM-0001-0319.dcm'),
(1, 994, 'DICOM/1/IM-0001-0320.dcm'),
(1, 995, 'DICOM/1/IM-0001-0321.dcm'),
(1, 996, 'DICOM/1/IM-0001-0322.dcm'),
(1, 997, 'DICOM/1/IM-0001-0323.dcm'),
(1, 998, 'DICOM/1/IM-0001-0324.dcm'),
(1, 999, 'DICOM/1/IM-0001-0325.dcm'),
(1, 1000, 'DICOM/1/IM-0001-0326.dcm'),
(1, 1001, 'DICOM/1/IM-0001-0327.dcm'),
(1, 1002, 'DICOM/1/IM-0001-0328.dcm'),
(1, 1003, 'DICOM/1/IM-0001-0329.dcm'),
(1, 1004, 'DICOM/1/IM-0001-0330.dcm'),
(1, 1005, 'DICOM/1/IM-0001-0331.dcm'),
(1, 1006, 'DICOM/1/IM-0001-0332.dcm'),
(1, 1007, 'DICOM/1/IM-0001-0333.dcm'),
(1, 1008, 'DICOM/1/IM-0001-0334.dcm'),
(1, 1009, 'DICOM/1/IM-0001-0335.dcm'),
(1, 1010, 'DICOM/1/IM-0001-0336.dcm'),
(1, 1011, 'DICOM/1/IM-0001-0337.dcm'),
(1, 1012, 'DICOM/1/IM-0001-0338.dcm'),
(1, 1013, 'DICOM/1/IM-0001-0339.dcm'),
(1, 1014, 'DICOM/1/IM-0001-0340.dcm'),
(1, 1015, 'DICOM/1/IM-0001-0341.dcm'),
(1, 1016, 'DICOM/1/IM-0001-0342.dcm'),
(1, 1017, 'DICOM/1/IM-0001-0343.dcm'),
(1, 1018, 'DICOM/1/IM-0001-0344.dcm'),
(1, 1019, 'DICOM/1/IM-0001-0345.dcm'),
(1, 1020, 'DICOM/1/IM-0001-0346.dcm'),
(1, 1021, 'DICOM/1/IM-0001-0347.dcm'),
(1, 1022, 'DICOM/1/IM-0001-0348.dcm'),
(1, 1023, 'DICOM/1/IM-0001-0349.dcm'),
(1, 1024, 'DICOM/1/IM-0001-0350.dcm'),
(1, 1025, 'DICOM/1/IM-0001-0351.dcm'),
(1, 1026, 'DICOM/1/IM-0001-0352.dcm'),
(1, 1027, 'DICOM/1/IM-0001-0353.dcm'),
(1, 1028, 'DICOM/1/IM-0001-0354.dcm'),
(1, 1029, 'DICOM/1/IM-0001-0355.dcm'),
(1, 1030, 'DICOM/1/IM-0001-0356.dcm'),
(1, 1031, 'DICOM/1/IM-0001-0357.dcm'),
(1, 1032, 'DICOM/1/IM-0001-0358.dcm'),
(1, 1033, 'DICOM/1/IM-0001-0359.dcm'),
(1, 1034, 'DICOM/1/IM-0001-0360.dcm'),
(1, 1035, 'DICOM/1/IM-0001-0361.dcm');

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
(1, '2013-12-21', '05:17:00', 1),
(2, '1996-05-21', '05:18:00', 2),
(9, '2016-04-21', '20:14:00', 8),
(10, '2016-04-18', '20:17:00', 9),
(11, '2016-04-21', '20:21:00', 10),
(12, '2016-04-21', '20:23:00', 11);

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `forumID` int(11) NOT NULL,
  `objectID` int(11) NOT NULL,
  `referreeID_super` int(11) NOT NULL,
  `referreeID_minor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`forumID`, `objectID`, `referreeID_super`, `referreeID_minor`) VALUES
(7, 1, 1, 3),
(8, 2, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `forumdiscussion`
--

CREATE TABLE `forumdiscussion` (
  `messageID` int(11) NOT NULL,
  `forumID` int(11) NOT NULL,
  `message` text NOT NULL,
  `dateTIME` datetime NOT NULL,
  `referreeType` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forumdiscussion`
--

INSERT INTO `forumdiscussion` (`messageID`, `forumID`, `message`, `dateTIME`, `referreeType`) VALUES
(1, 7, 'How are you doing?', '2016-04-22 07:37:01', 'major'),
(2, 8, 'Hows family?', '2016-04-22 07:37:35', 'major'),
(3, 7, 'I''m good, How about you?', '2016-04-22 07:37:59', 'major'),
(4, 7, 'Is it working?', '2016-04-22 07:53:47', 'major'),
(5, 7, 'I'' good\r\n', '2016-04-22 08:14:24', '');

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
(6, 'shoaib@nottingham.edu.my', 'shoaib', ''),
(25, 'falam@gmail.com', '4cwx5cvi', 'admin'),
(26, 'nkhan@cloudgraphy.com', 'w94oodq0', 'admin'),
(27, 'jilani@cloudgraphy.com', 'qjdq4kiv', 'admin'),
(28, 'seif@islam.com', 'saif', ''),
(29, 'seif@islam.com', 'seif', ''),
(30, 'jsahib@webgraphy.com', 'd58xmzo6', 'admin'),
(31, 'mkhan@nasha.com', '9v6pcezj', 'admin');

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
  `referreeID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `study`
--

INSERT INTO `study` (`studyID`, `objectID`, `referreeID`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 8, 3),
(4, 9, 5),
(5, 10, 3),
(6, 11, 5);

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
(1, 'Fresh', 'Akhtar', 11122233, 90078601, '2008-03-31', 'Male', 123, 20, 'IM-0001-0001.dcm', 'Broga', 'Fruitmania', '2016-03-31', 'ate a cockroach'),
(2, 'Muhammad', 'Akmal', 1113393, 90078601, '2013-03-31', 'Male', 123, 20, 'SomeWhere', 'Broga', 'Fruitmania', '2016-03-31', 'ate a cockroach'),
(8, 'Muhammad', 'Akmal', 1113393, 1112233, '2016-04-21', 'Male', 160, 70, 'Langkawi Hall', 'Forgetful', 'NoState', '2016-04-21', 'Knockout by the cieling fan'),
(9, 'Malik', 'Shah', 12345, 12345, '2016-04-21', 'Male', 321, 80, 'House', 'City', 'Newstate', '2016-04-21', 'Knockout by the cieling fan'),
(10, 'Veena', 'Malik', 87879878, 123456789, '2016-04-21', 'Male', 175, 80, 'Langkawi Hall', 'Juceland', 'NoState', '2016-04-21', 'Drug Overdose'),
(11, 'Old', 'Hatethis', 87879878, 90078601, '2016-04-21', 'Female', 123, 70, 'Langkawi Hall', 'Kabab', 'Selengor', '2016-04-21', 'looked too much into the Mirror');

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
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`forumID`),
  ADD KEY `objectID` (`objectID`),
  ADD KEY `referreeID_super` (`referreeID_super`),
  ADD KEY `referreeID_minor` (`referreeID_minor`);

--
-- Indexes for table `forumdiscussion`
--
ALTER TABLE `forumdiscussion`
  ADD PRIMARY KEY (`messageID`),
  ADD KEY `forumID` (`forumID`);

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
  MODIFY `administratorsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `ctimages`
--
ALTER TABLE `ctimages`
  MODIFY `CTImageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1036;
--
-- AUTO_INCREMENT for table `ctscan`
--
ALTER TABLE `ctscan`
  MODIFY `CTScanID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `forumID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `forumdiscussion`
--
ALTER TABLE `forumdiscussion`
  MODIFY `messageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `referees`
--
ALTER TABLE `referees`
  MODIFY `referreeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `study`
--
ALTER TABLE `study`
  MODIFY `studyID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `studyobject`
--
ALTER TABLE `studyobject`
  MODIFY `objectID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
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
  ADD CONSTRAINT `administrators_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `login` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ctimages`
--
ALTER TABLE `ctimages`
  ADD CONSTRAINT `ctimages_ibfk_1` FOREIGN KEY (`CTScanID`) REFERENCES `ctscan` (`CTScanID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ctscan`
--
ALTER TABLE `ctscan`
  ADD CONSTRAINT `ctscan_ibfk_1` FOREIGN KEY (`objectID`) REFERENCES `studyobject` (`objectID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `forum`
--
ALTER TABLE `forum`
  ADD CONSTRAINT `forum_ibfk_1` FOREIGN KEY (`objectID`) REFERENCES `studyobject` (`objectID`),
  ADD CONSTRAINT `forum_ibfk_2` FOREIGN KEY (`referreeID_super`) REFERENCES `referees` (`referreeID`),
  ADD CONSTRAINT `forum_ibfk_3` FOREIGN KEY (`referreeID_minor`) REFERENCES `referees` (`referreeID`);

--
-- Constraints for table `forumdiscussion`
--
ALTER TABLE `forumdiscussion`
  ADD CONSTRAINT `forumdiscussion_ibfk_1` FOREIGN KEY (`forumID`) REFERENCES `forum` (`forumID`) ON DELETE CASCADE ON UPDATE CASCADE;

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
