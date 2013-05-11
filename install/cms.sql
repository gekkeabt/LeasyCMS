-- phpMyAdmin SQL Dump
-- version 3.5.8
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306

-- Generation Time: May 10, 2013 at 09:41 PM
-- Server version: 5.5.30
-- PHP Version: 5.4.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `functions`
--

CREATE TABLE `functions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` varchar(8000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `functions`
--

INSERT INTO `functions` (`id`, `title`, `content`) VALUES
(1, 'sitename', 'Leasy CMS'),
(2, 'footer', 'Leasy CMS is a product of <a href="http://www.abakay.zxq.net" target="_blank">Ahmed Bakay</a><br><br>'),
(3, 'sidebar', '<p style="text-align: justify; ">\r\n	<span style="font-size:12px;"><font color="#000000" face="Arial, Helvetica, sans"><span style="line-height: 14px;">Your sidebar content.</span></font></span></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pagetitle` varchar(255) NOT NULL,
  `pagebody` varchar(8000) NOT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `pagetitle`, `pagebody`, `position`) VALUES
(1, 'Home', '<p style="">\r\n	<span style="font-size:12px;"><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans; line-height: 14px; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In urna metus, elementum vel interdum non, ultricies nec ligula. Sed mauris mauris, laoreet nec tristique sed, aliquam eget ligula. Fusce eget sapien dolor. Aenean blandit accumsan aliquam. Aenean fermentum viverra aliquam. Proin placerat semper enim, et suscipit dolor suscipit eu. Praesent vulputate pulvinar erat, id accumsan diam tempus malesuada. Quisque ut sapien tellus. Nullam in nisi at elit tristique facilisis. Donec suscipit mollis justo, a vulputate elit condimentum at. Sed eu magna tellus, sit amet semper dui. Pellentesque nec fermentum tortor. Cras nulla quam, ornare sed auctor et, malesuada ac erat.</span></span></p>\r\n', 0),
(2, 'Help', '<p>\r\n	<span style="font-size:12px;"><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans; line-height: 14px; text-align: justify;">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla erat est, pulvinar ut eleifend at, elementum at elit. In in est at ipsum sollicitudin rutrum. Nam sagittis, lacus ac dignissim adipiscing, tellus enim ultricies nibh, in eleifend justo erat a est. Proin blandit nibh vulputate tellus dictum suscipit. Phasellus enim ligula, mollis a dignissim sit amet, sodales sit amet quam. Maecenas erat quam, tempor quis eleifend sed, pretium sed massa. Curabitur erat felis, laoreet ut pulvinar non, iaculis sit amet quam. In quis elit sed arcu mattis tempus. Aliquam condimentum accumsan accumsan. Maecenas eget diam eget risus volutpat rutrum. Nunc ut lacus nibh. Etiam non lacus ac tellus accumsan posuere. Proin rutrum turpis et mi suscipit tristique. Donec luctus tincidunt felis, ac euismod felis iaculis in. Vestibulum mollis augue non felis vulputate vel ullamcorper felis feugiat.</span></span></p>\r\n', 3),
(3, 'Products', '<p>\r\n	<span style="font-size:12px;"><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans; line-height: 14px; text-align: justify;">Sed sagittis ornare nisi, vitae vulputate nibh iaculis nec. Vivamus tristique, arcu vel blandit consequat, mi sem commodo dolor, a ornare ligula leo cursus odio. Morbi malesuada fermentum tortor, eleifend tempus est gravida et. In in nisl dolor. Sed id magna quis leo tincidunt rhoncus sed eu orci. Praesent luctus consectetur neque. Nam laoreet elit vitae mi porta laoreet. Duis urna dolor, blandit et facilisis placerat, luctus nec libero.</span></span></p>\r\n', 2),
(5, 'Contact', '<p>\r\n	<span style="font-size:12px;"><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans; line-height: 14px; text-align: justify;">In risus neque, varius interdum ultrices non, ornare sit amet massa. Etiam malesuada consectetur dui vitae suscipit. In sed quam mi, ut accumsan turpis. Proin vitae augue tortor, id interdum diam. Nam luctus cursus feugiat. Praesent metus libero, laoreet eget tempor aliquet, feugiat non quam. Phasellus consequat libero ac metus pellentesque dictum. Maecenas non odio vel libero tempor porttitor non ut tortor. Proin tincidunt aliquam nibh sit amet bibendum. Curabitur malesuada, nisl eget luctus tincidunt, odio dui lobortis libero, ac venenatis orci sapien quis nulla. Maecenas vel neque purus. Nulla non elit a enim consectetur aliquet sit amet ac turpis. Sed adipiscing ultrices sapien a bibendum. Vestibulum odio mauris, accumsan tristique auctor non, luctus ac urna. Nulla facilisi.</span></span></p>\r\n', 4),
(7, 'About', '<p>\r\n	<span style="font-size:12px;"><span style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans; line-height: 14px; text-align: justify;">Phasellus consequat libero ac metus pellentesque dictum. Maecenas non odio vel libero tempor porttitor non ut tortor. Proin tincidunt aliquam nibh sit amet bibendum. Curabitur malesuada, nisl eget luctus tincidunt, odio dui lobortis libero, ac venenatis orci sapien quis nulla. Maecenas vel neque purus. Nulla non elit a enim consectetur aliquet sit amet ac turpis. Sed adipiscing ultrices sapien a bibendum. Vestibulum odio mauris, accumsan tristique auctor non, luctus ac urna. Nulla facilisi.</span></span></p>\r\n', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
