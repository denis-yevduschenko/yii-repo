-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jan 24, 2017 at 11:44 
-- Server version: 5.5.48-log
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mysite-local`
--

-- --------------------------------------------------------

--
-- Table structure for table `bl_posts`
--

CREATE TABLE IF NOT EXISTS `bl_posts` (
  `id` int(10) unsigned NOT NULL,
  `is_release` tinyint(1) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `intro_text` text NOT NULL,
  `full_text` text NOT NULL,
  `date` int(10) unsigned DEFAULT NULL,
  `meta_desc` varchar(255) NOT NULL,
  `meta_key` varchar(255) NOT NULL,
  `hits` int(10) unsigned NOT NULL,
  `hide` tinyint(1) unsigned NOT NULL,
  `no_form` tinyint(1) unsigned NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bl_posts`
--

INSERT INTO `bl_posts` (`id`, `is_release`, `title`, `img`, `intro_text`, `full_text`, `date`, `meta_desc`, `meta_key`, `hits`, `hide`, `no_form`) VALUES
(1, 1, 'Тестовый 1', '/images/posts/test1.jpg', 'Анонс первого тестового поста.', 'Первый пост. Детальный разбор выдуманной проблемы. Делаем вид умственной деятельности на как можно больше строчек текста. Вывод не утешительный, строчек не так много.', 0, 'Пример мета описания.', 'Пример мета ключей.', 0, 0, 0),
(2, 1, 'Тестовый 2', '/images/posts/test2.jpg', 'Анонс второго тестового поста.', 'Второй пост. Детальный разбор реальной проблемы. Мы, знаем, что умственной деятельности на долго не хватит. Вывод все тот же не утешительный, строчек не так много.', 1, 'Пример мета описания2.', 'Пример мета ключей2.', 0, 0, 0),
(3, 1, 'Тестовый 3', '/images/posts/test3.jpg', 'Анонс третьего тестового поста.', 'Третий пост. Детальный разбор мифической проблемы. Мы, знаем, что умственной деятельности не существует. Выводы будем делать в следующем посту.', 2, 'Пример мета описания3.', 'Пример мета ключей3.', 0, 0, 0),
(4, 1, 'Тестовый 4', '/images/posts/test4.jpg', 'Анонс четвертого тестового поста.', 'Четвертый пост. Поверхностный разбор крошечной проблемы. Мы, ничего не знаем, и знать не можем. Выводы в таком случае делать очень легко.', 3, 'Пример мета описания4.', 'Пример мета ключей4.', 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bl_posts`
--
ALTER TABLE `bl_posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bl_posts`
--
ALTER TABLE `bl_posts`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
