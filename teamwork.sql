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
  `theme_ID` int(11) NOT NULL,
  PRIMARY KEY (`message_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Схема на данните от таблица `message`
--

INSERT INTO `message` (`message_ID`, `message_Title`, `message_Text`, `message_User`, `message_Data`, `theme_ID`) VALUES
(1, 'TEST', 'TEST message', '', '0000-00-00', 1),
(2, 'TEST2', 'TEST message', '', '0000-00-00', 3);

-- --------------------------------------------------------

--
-- Структура на таблица `section`
--

CREATE TABLE IF NOT EXISTS `section` (
  `section_ID` int(11) NOT NULL AUTO_INCREMENT,
  `section_name` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`section_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Схема на данните от таблица `section`
--

INSERT INTO `section` (`section_ID`, `section_name`) VALUES
(1, 'Общ Форум'),
(2, 'Програмиране'),
(3, 'Изкуства');

-- --------------------------------------------------------

--
-- Структура на таблица `theme`
--

CREATE TABLE IF NOT EXISTS `theme` (
  `theme_ID` int(11) NOT NULL AUTO_INCREMENT,
  `theme_name` text COLLATE utf8_bin NOT NULL,
  `theme_info` text COLLATE utf8_bin NOT NULL,
  `topic_ID` int(11) NOT NULL,
  PRIMARY KEY (`theme_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Схема на данните от таблица `theme`
--

INSERT INTO `theme` (`theme_ID`, `theme_name`, `theme_info`, `topic_ID`) VALUES
(1, 'TEST Theme', 'just for test', 2),
(2, 'TEST Theme', 'just for test', 2),
(3, 'TEST 2', '....', 2);

-- --------------------------------------------------------

--
-- Структура на таблица `topic`
--

CREATE TABLE IF NOT EXISTS `topic` (
  `topic_ID` int(11) NOT NULL AUTO_INCREMENT,
  `topic_name` text COLLATE utf8_bin NOT NULL,
  `topic_info` text COLLATE utf8_bin NOT NULL,
  `section_ID` int(11) NOT NULL,
  PRIMARY KEY (`topic_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=17 ;

--
-- Схема на данните от таблица `topic`
--

INSERT INTO `topic` (`topic_ID`, `topic_name`, `topic_info`, `section_ID`) VALUES
(2, 'За Форума', 'Новини, мнения, оплаквания и предложения за форума.', 1),
(3, 'Обяви за работа', 'Aко търсите програмист или дизайнер, тук ще намерите точния човек.', 1),
(4, 'Разни', 'Всякакви теми, които не са свързани с останалите форуми', 1),
(5, 'Мрежови комуникации и технологии', 'Протоколи, сървъри, мрежи, услуги и др.', 1),
(6, 'C/C++', '', 2),
(8, 'JAVA', '', 2),
(10, 'HTML/CSS/JavaScript', '', 2),
(11, 'PHP/Perl/Python/ASP', '', 2),
(12, 'Linux', '', 2),
(13, 'Илюстрации', 'Място за обсъждане на графични ви решения.', 3),
(14, 'Фотография', 'Снимки, бленди, филми и всичко за фотографското изкуство', 3),
(15, 'Лого / Графичен дизайн', 'Изработване, цветове, форми', 3),
(16, '3D', 'Всичко свързано с 3d технологиите', 3);

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `User_ID` int(11) NOT NULL AUTO_INCREMENT,
  `User_Name` text COLLATE utf8_bin NOT NULL,
  `User_Password` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`User_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Ограничения за дъмпнати таблици
--

--
-- Ограничения за таблица `user_details`
--
ALTER TABLE `user_details`
  ADD CONSTRAINT `user_details_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `users` (`User_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
