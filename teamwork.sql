-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Версия на сървъра: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `teamwork`
--

-- --------------------------------------------------------

--
-- Структура на таблица `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `message_ID` int(11) NOT NULL AUTO_INCREMENT,
  `message_Title` text COLLATE utf8_bin NOT NULL,
  `message_Text` text COLLATE utf8_bin NOT NULL,
  `message_User` text COLLATE utf8_bin NOT NULL,
  `message_Data` date NOT NULL,
  PRIMARY KEY (`message_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Схема на данните от таблица `message`
--

INSERT INTO `message` (`message_ID`, `message_Title`, `message_Text`, `message_User`, `message_Data`) VALUES
(1, 'asd', 'dada', '', '2018-08-14'),
(2, 'asd', 'dada', '1', '2018-08-14'),
(3, 'asd', 'dada', '1', '2014-08-18');

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `User_ID` int(11) NOT NULL AUTO_INCREMENT,
  `User_Name` text COLLATE utf8_bin NOT NULL,
  `User_Password` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`User_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=43 ;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`User_ID`, `User_Name`, `User_Password`) VALUES
(1, 'test', '132'),
(2, 'test', '132'),
(3, 'test', '123'),
(4, 'test', '123'),
(5, 'test', ''),
(6, '', ''),
(7, '', ''),
(8, 'test', ''),
(9, 'test123', ''),
(10, 'test1234', ''),
(11, 'test1234', ''),
(12, 'test', ''),
(13, 'test', ''),
(14, 'test', ''),
(15, 'test', ''),
(16, 'test', ''),
(17, 'test', ''),
(18, 'test', ''),
(19, 'test', ''),
(20, 'test', ''),
(21, 'test', ''),
(22, 'test', ''),
(23, 'test', ''),
(24, 'test', ''),
(25, 'test2', ''),
(26, 'test2', ''),
(27, 'test2', ''),
(28, 'test2', ''),
(29, 'test2', ''),
(30, 'test2', ''),
(31, 'test2', ''),
(32, 'test2', ''),
(33, 'test2', ''),
(34, 'test2', ''),
(35, 'test2', ''),
(36, '12', ''),
(37, '123', ''),
(38, 'asdf', '3dljVKCJFvzkY'),
(39, '123456', '7cfgnh4Egj7hU'),
(40, 'weeq', '27fO3AxsTtZhU'),
(41, 'weeqr', '3biaZFNyUFWNw'),
(42, '1', '35jzPGnpoKHXc');

-- --------------------------------------------------------

--
-- Структура на таблица `user_details`
--

CREATE TABLE IF NOT EXISTS `user_details` (
  `User_ID` int(11) NOT NULL AUTO_INCREMENT,
  `User_FirstName` text COLLATE utf8_bin NOT NULL,
  `User_LastName` text COLLATE utf8_bin NOT NULL,
  `User_E-mail` text COLLATE utf8_bin NOT NULL,
  `User_Gender` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`User_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Схема на данните от таблица `user_details`
--

INSERT INTO `user_details` (`User_ID`, `User_FirstName`, `User_LastName`, `User_E-mail`, `User_Gender`) VALUES
(1, 'accc', '0000-00-00', 'qwqw', 'male'),
(2, 'accc', '0000-00-00', 'qwqw', 'male'),
(3, '1', '1', '1', 'male');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
