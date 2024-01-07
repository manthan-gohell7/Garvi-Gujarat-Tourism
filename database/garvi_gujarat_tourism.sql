-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2023 at 06:34 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `garvi_gujarat_tourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `value` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `content`, `value`) VALUES
(3, 'Weekend Trips', '<p>We provide discount on the best in range packages on every weekend</p>'),
(4, 'Fun Trips', '<p>Adventurous trip packages are added to our collection every month</p>'),
(5, 'Hassle Free Booking', '<p>Our website provide the simplest way to book tickets for tours</p>'),
(6, 'funfacts', '<p>Our company provides the best affordable packages for our visitors</p>'),
(7, 'aboutus', '<p style=\"color: black\">Welcome to Garvi Gujarat Tourism, your gateway to the vibrant and enchanting state of Gujarat! We are a premier tourism website dedicated to showcasing the rich cultural heritage, breathtaking landscapes, and unparalleled hospitality that Gujarat has to offer.<br/><br/>\n\nAt Garvi Gujarat Tourism, we understand the importance of creating unforgettable experiences for our visitors. With our in-depth knowledge of the region and a passion for promoting Gujarat\'s diverse attractions, we strive to curate exceptional travel packages and services that cater to every traveler\'s preferences.</p>'),
(8, 'footer', '<p style=\"color: white\">Welcome to Garvi Gujarat Tourism, your gateway to the vibrant and enchanting state of Gujarat! We are a premier tourism website dedicated to showcasing the rich cultural heritage, breathtaking landscapes, and unparalleled hospitality that Gujarat has to offer.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `updationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', '2020-05-11 11:18:49');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(99) NOT NULL,
  `location` mediumtext NOT NULL,
  `discount` int(99) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `location`, `discount`, `description`) VALUES
(1, 'Somnath', 50, 'There is an exciting offer for Somnath devotees which is 50% flat off'),
(2, 'Girnar', 40, 'There is an amazing offer of 40% on the trip of Girnar, Enjoy!'),
(3, 'Saputara', 30, 'Nothing is as refreshing as a hill station with 30% off!'),
(4, 'Pawagadh', 45, 'Pack your bags for the adventure in the Pavagadh with of course a thrilling discount of 45%!');

-- --------------------------------------------------------

--
-- Table structure for table `tblbooking`
--

CREATE TABLE `tblbooking` (
  `BookingId` int(11) NOT NULL,
  `PackageId` int(11) DEFAULT NULL,
  `UserEmail` varchar(100) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbooking`
--

INSERT INTO `tblbooking` (`BookingId`, `PackageId`, `UserEmail`, `RegDate`, `status`) VALUES
(1, 1, 'test@gmail.com', '2020-07-08 06:38:36', '2'),
(2, 2, 'test@gmail.com', '2020-07-08 06:43:25', '1'),
(3, 4, 'abir@gmail.com', '2020-07-08 06:44:39', '2'),
(4, 5, 'sanjusharma8306@gmail.com', '2023-08-10 23:53:49', 'Payment success'),
(5, 1, 'sanjusharma8306@gmail.com', '2023-08-25 11:43:24', 'Payment aborted by the user'),
(6, 1, 'sanjusharma8306@gmail.com', '2023-08-25 11:44:59', 'Payment aborted by the user'),
(7, 1, 'sanjusharma8306@gmail.com', '2023-08-25 12:56:25', 'Payment Failure'),
(8, 3, 'sanjusharma8306@gmail.com', '2023-08-25 13:04:25', 'Payment success');

-- --------------------------------------------------------

--
-- Table structure for table `tblenquiry`
--

CREATE TABLE `tblenquiry` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `EmailId` varchar(100) DEFAULT NULL,
  `MobileNumber` char(10) DEFAULT NULL,
  `Subject` varchar(100) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `Status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblenquiry`
--

INSERT INTO `tblenquiry` (`id`, `FullName`, `EmailId`, `MobileNumber`, `Subject`, `Description`, `PostingDate`, `Status`) VALUES
(1, 'Jone Paaire', 'jone@gmail.com', '4646464646', 'Enquiry for Manali Trip', 'Kindly provide me more offer.', '2020-07-08 06:30:32', 1),
(2, 'Kishan Twaerea', 'kishan@gmail.com', '6797947987', 'Enquiry', 'Any Offer for North Trip', '2020-07-08 06:31:38', NULL),
(3, 'Jacaob', 'Jai@gmail.com', '1646689721', 'Any offer for North', 'Any Offer for north', '2020-07-08 06:32:41', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblissues`
--

CREATE TABLE `tblissues` (
  `id` int(11) NOT NULL,
  `UserEmail` varchar(100) DEFAULT NULL,
  `Issue` varchar(100) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `AdminRemark` mediumtext DEFAULT NULL,
  `AdminremarkDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblissues`
--

INSERT INTO `tblissues` (`id`, `UserEmail`, `Issue`, `Description`, `PostingDate`, `AdminRemark`, `AdminremarkDate`) VALUES
(1, NULL, NULL, NULL, '2020-07-08 06:33:20', NULL, NULL),
(2, NULL, NULL, NULL, '2020-07-08 06:33:56', NULL, NULL),
(3, NULL, NULL, NULL, '2020-07-08 06:34:20', NULL, NULL),
(4, NULL, NULL, NULL, '2020-07-08 06:34:38', NULL, NULL),
(5, NULL, NULL, NULL, '2020-07-08 06:35:06', NULL, NULL),
(6, 'test@gmail.com', 'Booking Issues', 'I am not able to book package', '2020-07-08 06:36:03', 'Ok, We will fix the issue asap', '2020-07-08 06:55:22'),
(7, 'test@gmail.com', 'Refund', 'I want my refund', '2020-07-08 06:56:29', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblpages`
--

CREATE TABLE `tblpages` (
  `id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT '',
  `detail` longtext DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpages`
--

INSERT INTO `tblpages` (`id`, `type`, `detail`) VALUES
(1, 'terms', '										<p align=\"justify\"><font size=\"2\"><strong><font color=\"#990000\">(1) ACCEPTANCE OF TERMS</font><br><br></strong>Welcome to Yahoo! India. 1Yahoo Web Services India Private Limited Yahoo\", \"we\" or \"us\" as the case may be) provides the Service (defined below) to you, subject to the following Terms of Service (\"TOS\"), which may be updated by us from time to time without notice to you. You can review the most current version of the TOS at any time at: <a href=\"http://in.docs.yahoo.com/info/terms/\">http://in.docs.yahoo.com/info/terms/</a>. In addition, when using particular Yahoo services or third party services, you and Yahoo shall be subject to any posted guidelines or rules applicable to such services which may be posted from time to time. All such guidelines or rules, which maybe subject to change, are hereby incorporated by reference into the TOS. In most cases the guides and rules are specific to a particular part of the Service and will assist you in applying the TOS to that part, but to the extent of any inconsistency between the TOS and any guide or rule, the TOS will prevail. We may also offer other services from time to time that are governed by different Terms of Services, in which case the TOS do not apply to such other services if and to the extent expressly excluded by such different Terms of Services. Yahoo also may offer other services from time to time that are governed by different Terms of Services. These TOS do not apply to such other services that are governed by different Terms of Service. </font></p>\r\n<p align=\"justify\"><font size=\"2\">Welcome to Yahoo! India. Yahoo Web Services India Private Limited Yahoo\", \"we\" or \"us\" as the case may be) provides the Service (defined below) to you, subject to the following Terms of Service (\"TOS\"), which may be updated by us from time to time without notice to you. You can review the most current version of the TOS at any time at: </font><a href=\"http://in.docs.yahoo.com/info/terms/\"><font size=\"2\">http://in.docs.yahoo.com/info/terms/</font></a><font size=\"2\">. In addition, when using particular Yahoo services or third party services, you and Yahoo shall be subject to any posted guidelines or rules applicable to such services which may be posted from time to time. All such guidelines or rules, which maybe subject to change, are hereby incorporated by reference into the TOS. In most cases the guides and rules are specific to a particular part of the Service and will assist you in applying the TOS to that part, but to the extent of any inconsistency between the TOS and any guide or rule, the TOS will prevail. We may also offer other services from time to time that are governed by different Terms of Services, in which case the TOS do not apply to such other services if and to the extent expressly excluded by such different Terms of Services. Yahoo also may offer other services from time to time that are governed by different Terms of Services. These TOS do not apply to such other services that are governed by different Terms of Service. </font></p>\r\n<p align=\"justify\"><font size=\"2\">Welcome to Yahoo! India. Yahoo Web Services India Private Limited Yahoo\", \"we\" or \"us\" as the case may be) provides the Service (defined below) to you, subject to the following Terms of Service (\"TOS\"), which may be updated by us from time to time without notice to you. You can review the most current version of the TOS at any time at: </font><a href=\"http://in.docs.yahoo.com/info/terms/\"><font size=\"2\">http://in.docs.yahoo.com/info/terms/</font></a><font size=\"2\">. In addition, when using particular Yahoo services or third party services, you and Yahoo shall be subject to any posted guidelines or rules applicable to such services which may be posted from time to time. All such guidelines or rules, which maybe subject to change, are hereby incorporated by reference into the TOS. In most cases the guides and rules are specific to a particular part of the Service and will assist you in applying the TOS to that part, but to the extent of any inconsistency between the TOS and any guide or rule, the TOS will prevail. We may also offer other services from time to time that are governed by different Terms of Services, in which case the TOS do not apply to such other services if and to the extent expressly excluded by such different Terms of Services. Yahoo also may offer other services from time to time that are governed by different Terms of Services. These TOS do not apply to such other services that are governed by different Terms of Service. </font></p>\r\n										'),
(2, 'privacy', '										<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat</span>\r\n										'),
(3, 'aboutus', '<p>Welcome to Garvi Gujarat Tourism, your gateway to the vibrant and enchanting state of Gujarat! We are a premier tourism website dedicated to showcasing the rich cultural heritage, breathtaking landscapes, and unparalleled hospitality that Gujarat has to offer.<br/><br/>\n\nAt Garvi Gujarat Tourism, we understand the importance of creating unforgettable experiences for our visitors. With our in-depth knowledge of the region and a passion for promoting Gujarat\'s diverse attractions, we strive to curate exceptional travel packages and services that cater to every traveler\'s preferences.</p>'),
(11, 'contact', '<div>S.V.E.T College Jamnagar, Gujarat</div><div>Phone: +91 8487875703, 9510753450</div><div><br></div><div>Email: sanjusharma8306@gmail.com, ramnilesh@713gmail.com</div>\n										\n										');

-- --------------------------------------------------------

--
-- Table structure for table `tbltourpackages`
--

CREATE TABLE `tbltourpackages` (
  `PackageId` int(11) NOT NULL,
  `PackageName` varchar(200) DEFAULT NULL,
  `PackageType` varchar(150) DEFAULT NULL,
  `PackageLocation` varchar(100) DEFAULT NULL,
  `PackagePrice` int(11) DEFAULT NULL,
  `PackageFetures` varchar(255) DEFAULT NULL,
  `PackageDetails` mediumtext DEFAULT NULL,
  `PackageImage` varchar(100) DEFAULT NULL,
  `Creationdate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltourpackages`
--

INSERT INTO `tbltourpackages` (`PackageId`, `PackageName`, `PackageType`, `PackageLocation`, `PackagePrice`, `PackageFetures`, `PackageDetails`, `PackageImage`, `Creationdate`, `UpdationDate`) VALUES
(1, 'Dwarka', 'Group Package', 'Dwarka and bet dwarka', 6000, ' Round trip valid for the duration of the holiday - taxes - Accommodation for 3 nights in Dwarka and 3 nights in Bet Dwarka', 'Pick this holiday for a relaxing vacation in Dwarka and bet Dwarka. Your tour embarks from Dwarka. Enjoy an excursion to popular attractions. After experiencing the beautiful city, you will drive past to reach Bet Dwarka.', 'dwarka.jpg', '2020-07-08 05:21:58', NULL),
(2, 'Kutch - Rann of kutch', 'Family Package', 'Kutch', 3000, 'Free Wi-fi, Free Breakfast, Free Pickup and drop facility ', 'Visit kutch rann utsav. THis Holidays Season with your family with best tour packages with customisation and customer satisfaction.', 'kutch.jpg', '2020-07-08 05:37:40', '2023-07-27 03:35:17'),
(3, 'Girnar', 'Family Package', 'Junagadh', 5000, 'Free Pickup and drop facility, Free Wi-fi , Free professional guide', 'Train transfers by private car | Suitable for Family and budget travelers', 'junagadh.jpg', '2020-07-08 05:41:07', '2023-07-27 03:40:43'),
(4, 'Somnath', 'Family Package', 'Somnath', 1000, 'Free Wi-fi, Free pick up and drop facility,', 'Visit Somanth Temple | Pickup and drop facility', 'somnath.jpeg', '2020-07-08 05:45:58', '2023-08-14 15:55:38'),
(5, 'laxmi Villas Palace', 'Family', 'Laxmi Villas Palace', 4500, 'Free pick up and drop facility, Free Wi-fi, Free breakfast', 'A Holiday Package for the entire family.', 'laxmivillaspalace.jpg', '2020-07-08 05:49:13', '2023-08-14 16:24:36'),
(6, 'Diu', 'Group', 'Diu', 3500, 'Free Breakfast, Free Pick up drop facility', 'View the sunrise at the diu', 'diu.jpg', '2020-07-08 05:51:26', '2023-08-20 16:24:43'),
(7, 'Statue Of Unity', 'Family Package', 'Statue Of Unity', 4500, 'Breakfast,  Accommodation » Pick-up » Drop » Sightseeing', 'After arrival at ahemdabad airport meet our representative & proceed for statue of unity. ahemdabad is the largest city of gujarat. En route visit Barapani lake. By afternoon reach at statue of unity. Check in to the hotel. Evening is leisure. Spent time as you want. Visit Laal Darwaza market. Overnight stay at ahemdabad.', 'statueofunity.jpg', '2020-07-08 05:54:42', '2023-08-20 16:28:55'),
(8, 'Saputara', 'Domestic Packages', 'Saputara', 4500, 'Free Breakfast, Free Wi-fi', 'Roadtrip to the Hills of Saputara', 'saputara.jpg', '2020-07-08 06:05:24', '2023-08-20 16:31:01'),
(9, 'Sabarmati Ashram', 'Family Package', 'Sabarmati Ashram', 1000, 'Free Wi-fi, Free pickup and drop facility', 'Experience the rich history and culture with our Ahmedabad 2 nights 3 days tour package with Sabarmati Ashram. ', 'sabarmati.jpg', '2020-07-08 06:07:48', '2023-08-20 16:36:33');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `MobileNumber` char(10) DEFAULT NULL,
  `EmailId` varchar(70) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `FullName`, `MobileNumber`, `EmailId`, `Password`, `RegDate`, `UpdationDate`) VALUES
(1, 'Manju Srivatav', '4456464654', 'manju@gmail.com', '202cb962ac59075b964b07152d234b70', '2020-07-08 06:33:20', NULL),
(2, 'Kishan', '9871987979', 'kishan@gmail.com', '202cb962ac59075b964b07152d234b70', '2020-07-08 06:33:56', NULL),
(3, 'Salvi Chandra', '1398756416', 'salvi@gmail.com', '202cb962ac59075b964b07152d234b70', '2020-07-08 06:34:20', NULL),
(4, 'Abir', '4789756456', 'abir@gmail.com', '202cb962ac59075b964b07152d234b70', '2020-07-08 06:34:38', NULL),
(5, 'Test', '1987894654', 'anuj@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2020-07-08 06:35:06', '2021-05-11 04:37:41'),
(8, 'sanjana', '8487875703', 'sanjusharma8306@gmail.com', 'daf00d58ce1e45dcf6ee329dff599d81', '2023-07-11 14:28:44', NULL),
(9, 'sanjana', '8487875703', 'sanjusharma8306@gail.com', 'daf00d58ce1e45dcf6ee329dff599d81', '2023-08-11 03:22:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_popular_destinations`
--

CREATE TABLE `tbl_popular_destinations` (
  `PackageId` int(11) NOT NULL,
  `PackageName` varchar(200) DEFAULT NULL,
  `PackageType` varchar(150) DEFAULT NULL,
  `PackageLocation` varchar(100) DEFAULT NULL,
  `PackagePrice` int(11) DEFAULT NULL,
  `PackageFetures` varchar(255) DEFAULT NULL,
  `PackageDetails` mediumtext DEFAULT NULL,
  `PackageImage` varchar(100) DEFAULT NULL,
  `Creationdate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_popular_destinations`
--

INSERT INTO `tbl_popular_destinations` (`PackageId`, `PackageName`, `PackageType`, `PackageLocation`, `PackagePrice`, `PackageFetures`, `PackageDetails`, `PackageImage`, `Creationdate`, `UpdationDate`) VALUES
(1, 'Dwarka', 'Group Package', 'Dwarka and bet dwarka', 6000, ' Round trip valid for the duration of the holiday - taxes - Accommodation for 3 nights in Dwarka and 3 nights in Bet Dwarka', 'Pick this holiday for a relaxing vacation in Dwarka and bet Dwarka. Your tour embarks from Dwarka. Enjoy an excursion to popular attractions. After experiencing the beautiful city, you will drive past to reach Bet Dwarka.', 'dwarka.jpg', '2020-07-08 05:21:58', NULL),
(2, 'Kutch', 'Family Package', 'Kutch', 3000, 'Free Wi-fi, Free Breakfast, Free Pickup and drop facility ', 'Visit to Tiger\'s Nest Monastery | Complimentary services of a Professional Guide', 'kutch.jpg', '2020-07-08 05:37:40', '2023-08-14 16:25:59'),
(3, 'Junagadh', 'Couple Package', 'Junagadh', 5000, 'Free Pickup and drop facility, Free Wi-fi , Free professional guide', 'Airport transfers by private car | Popular Sightseeing included | Suitable for Couple and budget travelers', 'junagadh.jpg', '2020-07-08 05:41:07', '2023-08-14 16:26:09'),
(4, 'Somnath', 'Family Package', 'Somnath', 1000, 'Free Wi-fi, Free pick up and drop facility,', 'Visit Matupetty Dam, tea plantation and a spice garden | View sunset in Kanyakumari | AC Car at disposal for 2hrs extra (once per city)', 'somnath.jpeg', '2020-07-08 05:45:58', '2023-08-14 16:26:18'),
(5, 'Laxmi Villas Palace', 'Family', 'Laxmi Villas Palace', 4500, 'Free pick up and drop facility, Free Wi-fi, Free breakfast', 'A Holiday Package for the entire family.', 'laxmivillaspalace.jpg', '2020-07-08 05:49:13', '2023-08-14 16:26:40'),
(6, 'Diu', 'Group', 'Diu', 3500, 'Free Breakfast, Free Pick up drop facility', 'Changu Lake and New Baba Mandir excursion | View the sunrise from Tiger Hill | Get Blessed at the famous Rumtek Monastery', 'diu.jpg', '2020-07-08 05:51:26', '2023-08-14 16:26:47'),
(7, 'Statue Of Unity', 'Family Package', 'Statue Of Unity', 4500, 'Breakfast,  Accommodation » Pick-up » Drop » Sightseeing', 'After arrival at Guwahati airport meet our representative & proceed for Shillong. Shillong is the capital and hill station of Meghalaya, also known as Abode of Cloud, one of the smallest states in India. En route visit Barapani lake. By afternoon reach at Shillong. Check in to the hotel. Evening is leisure. Spent time as you want. Visit Police bazar. Overnight stay at Shillong.', 'statueofunity.jpg', '2020-07-08 05:54:42', '2023-08-14 16:28:34'),
(8, 'Saputara Ashram', 'Domestic Packages', 'Saputara', 4500, 'Free Breakfast, Free Wi-fi', 'Changu Lakeand New Baba Mandir excursion | Yumthang Valley tour | Gurudongmar Lake excursion | Night stay in Lachen', 'saputara.jpg', '2020-07-08 06:05:24', '2023-08-14 16:28:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbooking`
--
ALTER TABLE `tblbooking`
  ADD PRIMARY KEY (`BookingId`);

--
-- Indexes for table `tblenquiry`
--
ALTER TABLE `tblenquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblissues`
--
ALTER TABLE `tblissues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpages`
--
ALTER TABLE `tblpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbltourpackages`
--
ALTER TABLE `tbltourpackages`
  ADD PRIMARY KEY (`PackageId`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `EmailId` (`EmailId`),
  ADD KEY `EmailId_2` (`EmailId`);

--
-- Indexes for table `tbl_popular_destinations`
--
ALTER TABLE `tbl_popular_destinations`
  ADD PRIMARY KEY (`PackageId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblbooking`
--
ALTER TABLE `tblbooking`
  MODIFY `BookingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblenquiry`
--
ALTER TABLE `tblenquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblissues`
--
ALTER TABLE `tblissues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblpages`
--
ALTER TABLE `tblpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbltourpackages`
--
ALTER TABLE `tbltourpackages`
  MODIFY `PackageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_popular_destinations`
--
ALTER TABLE `tbl_popular_destinations`
  MODIFY `PackageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
