-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2020 at 06:36 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pops`
--

-- --------------------------------------------------------

--
-- Table structure for table `collection`
--

CREATE TABLE `collection` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `catnumber` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `collection`
--

INSERT INTO `collection` (`id`, `name`, `category`, `catnumber`) VALUES
(1, 'Kevin Malone', 'The Office', '123'),
(2, 'Dwight Schrute', 'The Office', '456'),
(3, 'Zack Morris', 'Saved by the Bell', '392'),
(6, 'Zack Morris', '', ''),
(7, 'Zack Morris', '', ''),
(8, 'The Hulk', 'The Avengers', '932'),
(9, 'Bella Swan', 'Twilight', '823'),
(10, 'Edward Cullen', 'Twilight', '824'),
(11, 'Jon Snow', 'Game of Thrones', '26'),
(12, 'Jimmy McGill', 'Better Call Saul', '322');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) CHARACTER SET utf8 NOT NULL,
  `lastname` varchar(20) CHARACTER SET utf8 NOT NULL,
  `email` varchar(75) CHARACTER SET utf8 NOT NULL,
  `phonenumber` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `phonenumber`, `password`) VALUES
(0, 'Jane', 'Doe', 'janedoe@gmail.com', '555-555-5555', 'janedoe'),
(1, 'Jane', 'Doe', 'janedoe@gmail.com', '8205555555', 'janedoe'),
(2, 'Brad', 'Pitt', 'bradpitt@gmail.com', '555-675-1234', 'bradpitt'),
(3, 'John', 'Doe', 'johndoe@gmail.com', '723-555-7777', 'johndoe'),
(4, 'George', 'Clooney', 'georgeclooney@gmail.com', '555-555-5555', 'georgeclooney'),
(5, 'Jennifer', 'Aniston', 'jenniferaniston@gmail.com', '555-298-0432', 'jenniferaniston'),
(6, 'Chris', 'Pratt', 'chrispratt@gmail.com', '893-000-3810', 'chrispratt'),
(7, 'Brandon', 'Walsh', 'brandonwalsh@gmail.com', '500-234-2342', 'ace5b43d9b53afdc076d0560d476167d3d60679d'),
(8, 'Brenda', 'Walsh', 'brendawalsh@gmail.com', '500-999-9999', 'brendawalsh');

-- --------------------------------------------------------

--
-- Table structure for table `users_collection_index`
--

CREATE TABLE `users_collection_index` (
  `users_id` int(11) NOT NULL,
  `collection_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collection`
--
ALTER TABLE `collection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_collection_index`
--
ALTER TABLE `users_collection_index`
  ADD KEY `users_id` (`users_id`),
  ADD KEY `collection_id` (`collection_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `collection`
--
ALTER TABLE `collection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_collection_index`
--
ALTER TABLE `users_collection_index`
  ADD CONSTRAINT `users_collection_index_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `users_collection_index_ibfk_2` FOREIGN KEY (`collection_id`) REFERENCES `collection` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
