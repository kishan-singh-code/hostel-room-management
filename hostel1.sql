-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2020 at 01:25 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`, `time`) VALUES
('hero@gmail.com', '1234', '2019-10-13 12:36:55');

-- --------------------------------------------------------

--
-- Table structure for table `book_hostel`
--

CREATE TABLE `book_hostel` (
  `seater` int(1) NOT NULL,
  `fees` int(4) NOT NULL,
  `foodstatus` int(1) NOT NULL,
  `stay` date NOT NULL,
  `duration` int(2) NOT NULL,
  `total_amount` int(4) NOT NULL,
  `course` varchar(40) NOT NULL,
  `reg_no` int(5) NOT NULL,
  `e_contact` varchar(10) NOT NULL,
  `gar_name` varchar(50) NOT NULL,
  `gar_relation` varchar(50) NOT NULL,
  `gar_contact` varchar(10) NOT NULL,
  `c_add` varchar(100) NOT NULL,
  `c_city` varchar(50) NOT NULL,
  `c_state` varchar(30) NOT NULL,
  `c_pin` int(6) NOT NULL,
  `p_add` varchar(100) NOT NULL,
  `p_city` varchar(50) NOT NULL,
  `p_state` varchar(30) NOT NULL,
  `p_pin` int(6) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_hostel`
--

INSERT INTO `book_hostel` (`seater`, `fees`, `foodstatus`, `stay`, `duration`, `total_amount`, `course`, `reg_no`, `e_contact`, `gar_name`, `gar_relation`, `gar_contact`, `c_add`, `c_city`, `c_state`, `c_pin`, `p_add`, `p_city`, `p_state`, `p_pin`, `time`, `email`) VALUES
(1, 4000, 1, '2019-11-26', 3, 18000, 'B.Tech Bachelor  of Technology', 12345, '9879879876', 'Aditya', 'son', '9879878768', 'A-12,kalyanpur', 'kanpur', 'uttar pradesh', 202020, 'A-12,kalyanpur', 'kanpur', 'uttar pradesh', 202020, '2019-11-26 11:05:31', 'abhi@gmail.com'),
(3, 2000, 0, '2017-07-22', 12, 24000, 'BSC Bachelor  of Science', 91987, '9879879876', 'Kapil Joshi', 'Uncle', '8187624771', 'A19, Sagar Colony', 'Delhi', 'Delhi', 200241, 'A19, Sagar Colony', 'Delhi', 'Delhi', 200241, '2019-11-26 11:12:17', 'ajeet.123@yahoo.com'),
(2, 3000, 1, '2018-10-25', 8, 40000, 'B.Com Bachelor Of commerce', 45435, '8055282960', 'Vayu Tiwari', 'Husband', '8187624771', 'Kunwar Tola, Civil Lines', 'Haripur', 'West Bengal', 808024, 'Kunwar Tola, Civil Lines', 'Haripur', 'West Bengal', 808024, '2019-11-26 11:25:53', 'bhau@yahoo.com'),
(1, 4000, 0, '2020-09-24', 5, 20000, 'BSC Bachelor  of Science', 91982, '9999999191', 'Lucy Mogra', 'Wife', '9112151140', 'Mahaveer Nagar 3', 'Kota', 'Rajasthan', 300876, 'Mahaveer Nagar 3', 'Kota', 'Rajasthan', 300876, '2019-11-26 11:38:41', 'jisteshpro187@orkut.com'),
(1, 4000, 1, '2022-02-16', 12, 72000, 'B.Tech Bachelor  of Technology', 76666, '9999999990', 'Guru Vilas', 'Wife', '9879878768', 'LA street', 'New York', 'West America', 723712, 'LA street', 'New York', 'West America', 723712, '2019-12-14 07:04:59', 'kis@kri.com'),
(2, 3000, 1, '2019-11-27', 4, 20000, 'B.Tech Bachelor  of Technology', 12345, '9580206742', 'shyam', 'bro', '7984239434', 'Mahaveer Nagar 3', 'Kota', 'Rajasthan', 300876, 'Mahaveer Nagar 3', 'Kota', 'Rajasthan', 300876, '2019-11-27 05:16:55', 'manjanbhai234@gmail.com'),
(2, 3000, 1, '2028-11-01', 12, 60000, 'BSC Bachelor  of Science', 23453, '7052469233', 'Shivani Gupta', 'Sister', '8187322771', 'Vilas Nagar, Near Sabji Mandi', 'Gorakhpur', 'Uttar Pradesh', 208876, 'Vilas Nagar, Near Sabji Mandi', 'Gorakhpur', 'Uttar Pradesh', 208876, '2019-11-26 11:33:24', 'ojasthers@yahoo.com'),
(1, 4000, 0, '2023-03-30', 6, 24000, 'BSC Bachelor  of Science', 66743, '9871543510', 'MS Dhoni', 'Father', '9781512310', 'Sadak Chap Lines', 'Ranchi', 'Jharkhand', 345123, 'Sadak Chap Lines', 'Ranchi', 'Jharkhand', 345123, '2019-11-26 11:52:05', 'singhpan@gmail.com'),
(1, 4000, 0, '2020-10-28', 4, 16000, 'B.Com Bachelor Of commerce', 51235, '8188181123', 'Euler Pandey', 'Father', '9998887776', 'Vilas Nagar, Near Bada Bungalow', 'Dehradun', 'Uttrakhand', 245241, 'Vilas Nagar, Near Bada Bungalow', 'Dehradun', 'Uttrakhand', 245241, '2019-11-26 11:18:12', 'suyash123smart@orkut.com'),
(1, 4000, 0, '2023-03-30', 1, 4000, 'BE Bachelor of Engineering', 34343, '8090008532', 'Shivani Singh', 'Mother', '9181912122', 'Shivam nagar', 'Kanpur', 'Uttar Pradesh', 208024, 'Shivam nagar', 'Kanpur', 'Uttar Pradesh', 208024, '2019-11-26 11:22:56', 'tanyacutii@gmail.com'),
(1, 4000, 1, '2019-01-26', 12, 72000, 'MCA Master of Computer Application', 43622, '8072527510', 'Guru Vilas', 'Brother', '8071237510', 'Purani Sadk ke Pass', 'Mumbai', 'Maharastra', 654232, 'Purani Sadk ke Pass', 'Mumbai', 'Maharastra', 654232, '2019-11-26 11:43:33', 'vilaskiemail@yahoo.com'),
(2, 3000, 1, '2019-11-23', 7, 35000, 'B.Com Bachelor Of commerce', 12345, '8072527510', 'Guru Vilas', 'Father', '9998887776', 'Mahaveer Nagar 3', 'Kota', 'Rajasthan', 300876, 'Mahaveer Nagar 3', 'Kota', 'Rajasthan', 300876, '2019-11-27 06:00:52', 'vishal@gmail.com'),
(1, 4000, 1, '2020-12-26', 4, 24000, 'MBA Master of Business Administration', 45432, '7377371231', 'Lucifer', 'Brother', '9198751140', 'LA street', 'New York', 'West America', 723712, 'LA street', 'New York', 'West America', 723712, '2019-11-26 11:29:25', 'zoeyking@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_signup`
--

CREATE TABLE `user_signup` (
  `first_name` varchar(20) NOT NULL,
  `middle_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_signup`
--

INSERT INTO `user_signup` (`first_name`, `middle_name`, `last_name`, `gender`, `contact`, `email`, `password`, `time`) VALUES
('Abhishek', '', 'Kumar', 'male', '9879879876', 'abhi@gmail.com', '1234', '2019-11-26 10:56:01'),
('Ajeet', 'Kumar', 'Verma', 'male', '9198765441', 'ajeet.123@yahoo.com', '1234567', '2019-11-26 11:08:35'),
('Bhavna', '', 'Tiwari', 'others', '9720948529', 'bhau@yahoo.com', '1234567', '2019-11-26 11:23:51'),
('Jitesh', '', 'Mogra', 'male', '8181005532', 'jisteshpro187@orkut.com', '1234567', '2019-11-26 11:36:01'),
('hero', '', '', 'male', '9809809800', 'kis@kri.com', '1234', '2019-12-14 07:02:23'),
('kshitij', 'ranjan', 'srivastava', 'male', '7895259435', 'manjanbhai234@gmail.com', '123456', '2019-11-27 05:14:12'),
('Ojas', '', 'Gupta', 'others', '9532781265', 'ojasthers@yahoo.com', '1234567', '2019-11-26 11:30:54'),
('Pankhuri', 'Singh ', 'Dhoni', 'female', '9897976944', 'singhpan@gmail.com', '1234567', '2019-11-26 11:50:20'),
('Suyash', '', 'Tiwari', 'male', '8108242808', 'suyash123smart@orkut.com', '1234567', '2019-11-26 11:14:21'),
('Tanya', '', 'Singh', 'female', '8090008853', 'tanyacutii@gmail.com', '1234567', '2019-11-26 11:20:39'),
('Ram', 'Kumar', 'Vilas', 'male', '7071527510', 'vilaskiemail@yahoo.com', '1234567', '2019-11-26 11:40:18'),
('vishal', '', 'kumar', 'male', '9876897643', 'vishal@gmail.com', '1234', '2019-11-27 03:08:56'),
('Zoey', '', 'King', 'female', '9450338183', 'zoeyking@gmail.com', '1234567', '2019-11-26 11:27:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `book_hostel`
--
ALTER TABLE `book_hostel`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `user_signup`
--
ALTER TABLE `user_signup`
  ADD PRIMARY KEY (`email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book_hostel`
--
ALTER TABLE `book_hostel`
  ADD CONSTRAINT `zzz` FOREIGN KEY (`email`) REFERENCES `user_signup` (`email`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
