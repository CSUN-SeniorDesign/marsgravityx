-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2017 at 07:25 AM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `profilebeta`
--

-- --------------------------------------------------------

--
-- Table structure for table `url`
--

CREATE TABLE IF NOT EXISTS `url` (
  `urlid` int(11) NOT NULL AUTO_INCREMENT,
  `sports` varchar(255) NOT NULL,
  `news` varchar(255) NOT NULL,
  `socialmedia` varchar(255) NOT NULL,
  `gaming` varchar(255) NOT NULL,
  PRIMARY KEY (`urlid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `url`
--

INSERT INTO `url` (`urlid`, `sports`, `news`, `socialmedia`, `gaming`) VALUES
(1, 'http://www.espn.com/', 'http://www.cnn.com/', 'https://www.facebook.com/', 'http://www.ign.com/'),
(2, 'http://www.bleacherreport.com/', 'http://www.bbc.co.uk/news', 'https://www.twitter.com/', 'https://kotaku.com/'),
(3, 'https://www.cbssports.com/', 'http://www.foxnews.com/', 'https://www.instagram.com/', 'https://www.polygon.com/'),
(4, 'https://www.si.com/', 'https://www.huffingtonpost.com/', 'https://www.reddit.com/', 'http://www.pcgamer.com/'),
(5, 'https://sports.yahoo.com/', 'http://www.wsj.com/', 'https://www.linkedin.com/', 'https://www.gamefaqs.com/'),
(6, '', 'https://www.infowars.com/', 'https://secure.imvu.com/welcome/ftux/', 'https://www.twitch.tv/'),
(7, '', 'https://www.usatoday.com/', 'https://myspace.com/', 'http://www.lolesports.com/en_US'),
(8, '', 'https://www.washingtonpost.com/', 'https://secure.hi5.com/', 'http://store.steampowered.com/'),
(9, '', 'http://www.nydailynews.com/', 'https://www.tumblr.com/', ''),
(10, '', 'http://www.latimes.com/', 'https://web.wechat.com/', ''),
(11, '', 'https://www.nytimes.com/', '', ''),
(12, '', 'http://www.businessinsider.com/', '', ''),
(13, '', 'https://www.theverge.com/', '', ''),
(14, '', 'https://www.forbes.com/', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
