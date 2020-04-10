-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2020 at 12:11 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `s-mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `fruit`
--

CREATE TABLE `fruit` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `price` float NOT NULL,
  `quality` int(11) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fruit`
--

INSERT INTO `fruit` (`id`, `name`, `price`, `quality`, `userId`) VALUES
(2, 'Mango Fazlee', 155, 0, 13),
(3, 'Jack Fruit', 90, 0, 13),
(4, 'Lychee', 350, 0, 13);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'Mamun Abdullah', 'abdullah@gmail.com', '$2y$10$Wh6h4Vte9DKeCLeYKthbP.nv/BnPZ8KafMCPwErKhh.zFKuRsfD8O'),
(2, 'Mamun', 'mamun@gmail.com', '$2y$10$56OJpg57ZTQsiI7tqHo0wOkzjvxlwWGLuD72XSnwoJR6ad7kiAA2G'),
(3, 'Mamun', 'mamun2@gmail.com', '$2y$10$BSsq/kcv6oQn3YFfbJ6HVe/YcQo3/SBhxb5RszqFh8gaWs7Tq1JH2'),
(4, 'Test', 'test@gmail.com', '$2y$10$r6QQZhQ1jYY8ISLy5/D9.e1DzIEeOtBRxxtaE/2NI8hW5l7aAoCAO'),
(5, 'Mahrin Kabir', 'mahrin@gmail.com', '$2y$10$mhK5pfLnnUUEumZW8GXlGe95ht0zr02.8Y8UWFRdL8w3A.c2oAW9C'),
(6, 'Mahrin Kabir', 'kabir@gmail.com', '$2y$10$agXYpG9yR4F3yKd6MOytTeBlP4.7/wcvy4p3P6UKJXW8AGXS0b0LG'),
(7, 'Shakil Khan', 'shakil@gmail.com', '$2y$10$3nUON/3IXBC7R30NhElElO/YsSazk6ZHvk0JX1A3KzW0nHSNz2PoC'),
(8, 'Shakil Khan', 'shakil2@gmail.com', '$2y$10$J0cu73gDEukl7OSyht2QyeUXWkG00Me7o.myef21S1xLBEbJf1k2m'),
(9, 'Shakil Khan', 'shakil3@gmail.com', '$2y$10$3f4ST14sW7PCITshgG66ee/oE6E9CwnfIi8DhULFSTfjy4n9Yz71q'),
(10, 'Shakil Khan', 'shakil4@gmail.com', '$2y$10$H7sCdCLz0edp9r6LFPAkkuB1d0YEhWY17kNTt0670CMztM5LXZIn2'),
(11, 'Adiba Kabir', 'adiba@gmail.com', '$2y$10$GRp2aTXrST9w4XQW6G9KOuTObrpcvbJUn30aHyDdtEvBFxyLZjEny'),
(12, 'Adnaan Tawsif', 'adnaantawsif@gmail.com', '$2y$10$Eo3g3iZkD7IYWzq598fUFusfrMCIRWtstbzFDoKUGRAApS0McpH12'),
(13, 'Admin', 'admin@gmail.com', '$2y$10$puT64Vlun7LnXBva/EcWyOuqCrU.5bjS/TcvAvNoAot/OijaLpSyq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fruit`
--
ALTER TABLE `fruit`
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
-- AUTO_INCREMENT for table `fruit`
--
ALTER TABLE `fruit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
