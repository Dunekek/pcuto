-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 30, 2022 at 05:53 AM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `AirCompany`
--

-- --------------------------------------------------------

--
-- Table structure for table `Flights`
--

CREATE TABLE `Flights` (
  `id_flight` int(11) NOT NULL,
  `cityFrom` varchar(128) DEFAULT NULL,
  `cityTo` varchar(128) DEFAULT NULL,
  `flight_image` varchar(128) DEFAULT NULL,
  `id_plane` int(11) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `flight_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Flights`
--

INSERT INTO `Flights` (`id_flight`, `cityFrom`, `cityTo`, `flight_image`, `id_plane`, `price`, `flight_date`) VALUES
(1, 'Москва', 'Ньй-Йорк', 'test.jpg', 1, 1000, '2022-07-06'),
(2, 'Нью-Йорк', 'Лос-Анджелес', NULL, 1, 3094, '2022-06-09'),
(3, 'Париж', 'Москва', NULL, 2, 1000, '2022-07-12');

-- --------------------------------------------------------

--
-- Table structure for table `News`
--

CREATE TABLE `News` (
  `id_news` int(11) NOT NULL,
  `title` varchar(128) DEFAULT NULL,
  `description` varchar(256) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `img` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `News`
--

INSERT INTO `News` (`id_news`, `title`, `description`, `date`, `img`) VALUES
(6, '123', '123', '2022-06-29 17:25:22', '62bc8b029821etest.jpg'),
(7, 'ЗАГОЛОВОК', 'описание', '2022-06-29 17:30:00', '62bc8c187895btest2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `Planes`
--

CREATE TABLE `Planes` (
  `id_plane` int(11) NOT NULL,
  `plane_name` varchar(128) DEFAULT NULL,
  `entered_expuatation` date DEFAULT NULL,
  `seats_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Planes`
--

INSERT INTO `Planes` (`id_plane`, `plane_name`, `entered_expuatation`, `seats_count`) VALUES
(1, 'Airbus A-380', '2016-06-29', 800),
(2, 'Boeing ', '2022-06-05', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `Tickets`
--

CREATE TABLE `Tickets` (
  `id_ticket` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_flight` int(11) DEFAULT NULL,
  `passport` varchar(128) DEFAULT NULL,
  `passenger_name` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Tickets`
--

INSERT INTO `Tickets` (`id_ticket`, `id_user`, `id_flight`, `passport`, `passenger_name`) VALUES
(18, 1, 1, '5323423', 'Лазар Димитриевич '),
(19, 1, 1, '121', 'Алексий');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `id_user` int(11) NOT NULL,
  `login` varchar(128) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `name` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`id_user`, `login`, `password`, `name`) VALUES
(1, '1', '1', 'Иванов');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Flights`
--
ALTER TABLE `Flights`
  ADD PRIMARY KEY (`id_flight`),
  ADD KEY `id_plane` (`id_plane`);

--
-- Indexes for table `News`
--
ALTER TABLE `News`
  ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `Planes`
--
ALTER TABLE `Planes`
  ADD PRIMARY KEY (`id_plane`);

--
-- Indexes for table `Tickets`
--
ALTER TABLE `Tickets`
  ADD PRIMARY KEY (`id_ticket`),
  ADD KEY `id_flight` (`id_flight`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Flights`
--
ALTER TABLE `Flights`
  MODIFY `id_flight` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `News`
--
ALTER TABLE `News`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `Planes`
--
ALTER TABLE `Planes`
  MODIFY `id_plane` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Tickets`
--
ALTER TABLE `Tickets`
  MODIFY `id_ticket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Flights`
--
ALTER TABLE `Flights`
  ADD CONSTRAINT `flights_ibfk_1` FOREIGN KEY (`id_plane`) REFERENCES `Planes` (`id_plane`);

--
-- Constraints for table `Tickets`
--
ALTER TABLE `Tickets`
  ADD CONSTRAINT `tickets_ibfk_1` FOREIGN KEY (`id_flight`) REFERENCES `Flights` (`id_flight`),
  ADD CONSTRAINT `tickets_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `Users` (`id_user`);
