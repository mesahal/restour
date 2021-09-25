-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2021 at 09:08 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_register`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Location` text NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Contact Number` int(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Ratings` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `Name`, `Location`, `Address`, `Contact Number`, `Email`, `Ratings`) VALUES
(1, 'Hotel 71', 'Dhaka', '176, Shaheed Syed Nazrul Islam Sarani, 47 Bijoy Nagar Road, Dhaka 1000', 1750076933, 'hotel71@gmail.com', '8.2'),
(2, 'Hotel Shuktara', 'Dhaka', 'Holding- 21/1, 20/A Indira Rd, Dhaka 1215', 1998888777, 'shuktara@gmail.com', '7.7'),
(3, 'Richmond Hotel & Suites', 'Dhaka', 'House-2 Rd No 10, Dhaka 1230', 1974246663, 'richmond@gmail.com', '6.6'),
(4, 'Radisson blu dhaka water garden', 'Dhaka', 'Airport Rd, Dhaka 1206', 1878976534, 'radisson@gmail.com', '7.3'),
(5, 'Hotel Sarina', 'Dhaka', 'Plot #27, Road #17, Banani C/A, Dhaka 1213', 1789065423, 'sarina@gmail.com', '7.9'),
(6, 'Pan Pacific Sonargaon Dhaka', 'Dhaka', '107 Kazi Nazrul Islam Ave, Dhaka 1215', 1789453678, 'panpacific@gmail.com', '7.7'),
(7, 'Hotel Agrabad', 'Chittagong', 'Sabder Ali Road, Agrabad C/A, Chittagong 4000', 1456789045, 'agrabad@gmail.com', '7.3'),
(8, 'The Peninsula', 'Chittagong', '486/B, CDA Avenue, O.R. Nizam Road, Bulbul Center, Chittagong 4100', 1987456783, 'peninsula@gmail.com', '8.4'),
(9, 'Radisson Blu Chattogram Bay View', 'Chittagong', 'Shahid Saifuddin Khaled Rd, Lalkhan Bazar Cir, Chattogram 4000', 1567894567, 'radissionctg@gmail.com', '9.0'),
(10, 'Hill Town Residence', 'Chittagong', 'BRTC Market, 16. Station Road City Super Complex The Railway Man\'s Store ( Upper Ctg Fruitit Market)', 1789653890, 'hilltown@gmail.com', '7.2'),
(11, 'Hotel Tower Inn', 'Chittagong', '183 Jubilee Rd, Chittagong', 1789543678, 'towerinn@gmail.com', '6.2'),
(12, 'Hotel Hilton City Residential', 'Chittagong', '1686, Choumuhuni circle, west side, Chittagong 4000', 1455624099, 'hiltoncityresidential@gmail.com', '7.5'),
(13, 'Hotel Diamond Park', 'Chittagong', 'Khwaja Super Market, Chittagong 4000', 1678987334, 'diamondpark@gmail.com', '5.3'),
(14, 'Grand Palace Hotel & Resorts Shylet ', 'Shylet', 'Jallarpar Rd, Sylhet', 1786904536, 'grandpalace@gmail.com', '7.0'),
(15, 'Hotel Holy Gate', 'Shylet', ' Holy Complex, East Dargah Gate, Sylhet 3100', 1972552233, 'holygate@gmail.com', '7.5'),
(16, 'Rose View Hotel', 'Shylet', 'Shahjalal Uposhohor Sylhet, 3100', 1897456789, 'roseview@gmail.com', '5.8'),
(17, 'Hotel Grand Surma', 'Shylet', 'Gazi, Syed Burhan Uddin Rd, Sylhet', 1707180152, 'surma@gmail.com', '7.8');

-- --------------------------------------------------------

--
-- Table structure for table `hotelroom`
--

CREATE TABLE `hotelroom` (
  `id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Location` text NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Room Type` varchar(100) NOT NULL,
  `no_of_persons` int(100) NOT NULL,
  `Price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotelroom`
--

INSERT INTO `hotelroom` (`id`, `Name`, `Location`, `Address`, `Room Type`, `no_of_persons`, `Price`) VALUES
(1, 'Hotel 71', 'Dhaka', '', 'Deluxe Twin Room', 2, 2200),
(2, 'Hotel 71', 'Dhaka', '', 'Deluxe Double Room', 2, 2300),
(3, 'Hotel 71', 'Dhaka', '', 'King Room', 2, 3000),
(4, 'Hotel 71', 'Dhaka', '', 'Royal Suite', 2, 3500),
(5, 'Hotel 71', 'Dhaka', '', 'Premier Single Room', 1, 1600),
(6, 'Hotel 71', 'Dhaka', '', 'Superior Single Room', 1, 1800),
(7, 'Hotel 71', '', '', 'Superior Triple Room', 3, 4500),
(8, 'Hotel 71', '', '', 'Premium Triple Room', 3, 5000),
(9, 'Hotel 71', '', '', 'Premium Quadruple Room', 4, 7000),
(10, 'Hotel Shuktara', 'Dhaka', '', 'Superior  King Room', 2, 2600),
(11, 'Hotel Shuktara', 'Dhaka', 'Holding No 20/A, Indira Road, near Tejgoan Collage, 1215 Dhaka', 'Superior Twin Room', 4, 4500),
(12, 'Hotel Shuktara', 'Dhaka', 'Holding No 20/A, Indira Road, near Tejgoan Collage, 1215 Dhaka, Bangladesh –', 'Deluxe King Room', 2, 2700),
(13, 'Hotel Shuktara', 'Dhaka', 'Holding No 20/A, Indira Road, near Tejgoan Collage, 1215 Dhaka, Bangladesh –', 'Premium Family Room', 3, 6000);

-- --------------------------------------------------------

--
-- Table structure for table `register_user`
--

CREATE TABLE `register_user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `check_in_date` date NOT NULL,
  `check_out_date` date NOT NULL,
  `bloodgroup` varchar(100) NOT NULL,
  `Contact_number` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `no_of_rooms` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register_user`
--

INSERT INTO `register_user` (`id`, `name`, `check_in_date`, `check_out_date`, `bloodgroup`, `Contact_number`, `email`, `address`, `no_of_rooms`) VALUES
(1, 'Maksuda Amin', '2021-09-15', '2021-09-22', 'O+', '+8801987456783', 'maksuda@gmail.com', 'Mohammadpur,Dhaka', 1),
(2, 'Maksuda Amin', '2021-09-15', '2021-09-22', 'O+', '+8801987456783', 'maksuda@gmail.com', 'Mohammadpur,Dhaka', 1),
(3, 'Monayam Ali', '2021-09-15', '2021-09-20', 'A+', '+8801987456789', 'monayam@gmail.com', 'Adabor,Dhaka', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `id` int(11) NOT NULL,
  `Place` text NOT NULL,
  `Duration` varchar(200) NOT NULL,
  `Start Date` date NOT NULL,
  `End Date` date NOT NULL,
  `Cost` int(200) NOT NULL,
  `Booking Ammount` int(200) NOT NULL,
  `Booking Last Date` date NOT NULL,
  `Transport` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`id`, `Place`, `Duration`, `Start Date`, `End Date`, `Cost`, `Booking Ammount`, `Booking Last Date`, `Transport`) VALUES
(1, 'Bagura', '3 days', '2021-10-06', '2021-10-09', 2500, 700, '2021-10-05', 'Bus'),
(2, 'Bandarban', '5 days', '2021-10-20', '2021-10-25', 8000, 3000, '2021-10-19', 'Bus'),
(3, 'Chandpur', '3 days', '2021-10-28', '2021-10-31', 4000, 1000, '2021-10-27', 'Train'),
(4, 'Chittagong', '5 days', '2021-11-01', '2021-11-06', 4500, 1000, '2021-10-31', 'Bus'),
(5, 'Cumilla', '5 days', '2021-11-10', '2021-11-16', 4000, 1000, '2021-11-09', 'Bus');

-- --------------------------------------------------------

--
-- Table structure for table `trainbook`
--

CREATE TABLE `trainbook` (
  `trainno` varchar(100) NOT NULL,
  `name` text NOT NULL,
  `fromcity` varchar(100) NOT NULL,
  `tocity` varchar(100) NOT NULL,
  `arrival` time(6) NOT NULL,
  `departure` time(6) NOT NULL,
  `price` int(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainbook`
--

INSERT INTO `trainbook` (`trainno`, `name`, `fromcity`, `tocity`, `arrival`, `departure`, `price`, `class`, `id`) VALUES
('10101', 'Silkcity Express', 'Dhaka', 'Rajshahi', '01:00:00.000000', '00:00:03.450000', 680, 'AC', 1),
('10101', 'Silkcity Express', 'Rajshahi', 'Dhaka', '00:00:14.450000', '00:00:20.350000', 680, 'AC', 2),
('10201', 'Padma Express', 'Dhaka', 'Rajshahi', '00:00:23.000000', '00:00:04.300000', 340, 'Non AC Chair', 3),
('10201', 'Padma Express', 'Rajshahi', 'Dhaka', '00:00:06.000000', '00:00:11.400000', 340, 'Non AC Chair', 4),
('10301', 'Silkcity Express', 'Dhaka', 'Rajshahi', '14:45:00.000000', '20:35:00.000000', 1020, 'Sleeper', 5),
('10301', 'Silkcity Express', 'Rajshahi', 'Dhaka', '00:00:07.400000', '00:00:13.300000', 1020, 'Sleeper', 6),
('709', 'Parbat Express', 'Dhaka', 'Sylhet', '00:00:13.000000', '00:00:06.200000', 320, 'Non AC Chair', 7),
('709', 'Parbat Express', 'Sylhet', 'Dhaka', '00:00:11.450000', '00:00:13.300000', 320, 'Non AC Chair', 8),
('709', 'Parbat Express', 'Dhaka', 'Sylhet', '00:00:19.000000', '00:00:11.150000', 558, 'AC', 9),
('709', 'Parbat Express', 'Sylhet', 'Dhaka', '00:00:05.000000', '00:00:09.000000', 560, 'AC', 10),
('717', 'Joyontika Express', 'Dhaka', 'Sylhet', '00:00:05.000000', '00:00:20.300000', 560, 'Sleeper', 11),
('717', 'Joyontika Express', 'Sylhet', 'Dhaka', '00:00:11.150000', '00:00:14.000000', 560, 'Sleeper', 12);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `password`) VALUES
('Maksuda Begum', 'maksuda@gmail.com', '1234'),
('Maksuda Amin', 'rabita@gmail.com', '1234'),
('Rabita Amin', 'rabita@gmail.com', '123'),
('Rabita Amin', 'rabita@gmail.com', '123'),
('Samira Alam', 'begummaksuda016@gmail.com', '1234'),
('Maksuda Amin', 'rat@gmail.com', '123'),
('Wahida Tasnim', 'wahida@gmail.com', '12345'),
('Maksuda Amin', 'begummaksuda016@gmail.com', '12345'),
('Dewan Moksed Ali', 'begummaksuda016@gmail.com', '12345'),
('Afrin Jahan', 'afrin@gmail.com', 'afrin'),
('Mursalin Amin', 'mursalin@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotelroom`
--
ALTER TABLE `hotelroom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_user`
--
ALTER TABLE `register_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainbook`
--
ALTER TABLE `trainbook`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `hotelroom`
--
ALTER TABLE `hotelroom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `register_user`
--
ALTER TABLE `register_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tour`
--
ALTER TABLE `tour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `trainbook`
--
ALTER TABLE `trainbook`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
