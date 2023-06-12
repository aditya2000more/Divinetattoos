-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2022 at 11:23 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Custregistration`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  Id int(20) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Mobile1` varchar(100) NOT NULL,
  `Mobile2` varchar(255) DEFAULT NULL,
  `pwd` varchar(255) NOT NULL,
  'Date' timestamp(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

  ALTER TABLE `register`
       ADD PRIMARY KEY(
       `Id`
     );

     ALTER TABLE `register` 
     ADD UNIQUE(
      `Email`, 
      `Mobile1`
      );

   ALTER TABLE `register` DROP `Id`;
  
   ALTER TABLE `register` ADD `Id` INT(255) NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (`Id`);


   --
   -- Table structure for table `enquiry`
   --

   CREATE TABLE `enquiry` (
  
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Mobile1` varchar(100) NOT NULL,
  `Mobile2` varchar(255) DEFAULT NULL,
  `purpose` varchar(100) DEFAULT NULL,
  `comment` varchar(100) DEFAULT NULL,
  )

ALTER TABLE `enquiry` ADD `Id` INT(255) NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (`Id`);


  --
  --
  --


  