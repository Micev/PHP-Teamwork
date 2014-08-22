-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Версия на сървъра: 5.5.36
-- PHP Version: 5.4.27

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `teamwork`
--
CREATE DATABASE IF NOT EXISTS `teamwork` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `teamwork`;

-- --------------------------------------------------------

--
-- Структура на таблица `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `message_ID` int(11) NOT NULL AUTO_INCREMENT,
  `message_Title` text COLLATE utf8_bin NOT NULL,
  `message_Text` text COLLATE utf8_bin NOT NULL,
  `message_User` text COLLATE utf8_bin NOT NULL,
  `message_Data` date NOT NULL,
  PRIMARY KEY (`message_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Структура на таблица `user_details`
--

DROP TABLE IF EXISTS `user_details`;
CREATE TABLE IF NOT EXISTS `user_details` (
  `User_ID` int(11) NOT NULL AUTO_INCREMENT,
  `User_FirstName` text COLLATE utf8_bin NOT NULL,
  `User_LastName` text COLLATE utf8_bin NOT NULL,
  `User_E-mail` text COLLATE utf8_bin NOT NULL,
  `User_Gender` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`User_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `User_ID` int(11) NOT NULL AUTO_INCREMENT,
  `User_Name` text COLLATE utf8_bin NOT NULL,
  `User_Password` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`User_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
SET FOREIGN_KEY_CHECKS=1;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS `message` (
  `message_ID` int(11) NOT NULL AUTO_INCREMENT,
  `message_Title` text COLLATE utf8_bin NOT NULL,
  `message_Text` text COLLATE utf8_bin NOT NULL,
  `message_User` text COLLATE utf8_bin NOT NULL,
  `message_Data` date NOT NULL,
  PRIMARY KEY (`message_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `users` (
  `User_ID` int(11) NOT NULL AUTO_INCREMENT,
  `User_Name` text COLLATE utf8_bin NOT NULL,
  `User_Password` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`User_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `user_details` (
  `User_ID` int(11) NOT NULL AUTO_INCREMENT,
  `User_FirstName` text COLLATE utf8_bin NOT NULL,
  `User_LastName` text COLLATE utf8_bin NOT NULL,
  `User_E-mail` text COLLATE utf8_bin NOT NULL,
  `User_Gender` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`User_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;