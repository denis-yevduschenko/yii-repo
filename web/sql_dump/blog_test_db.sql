-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 08, 2017 at 06:01 
-- Server version: 5.5.48-log
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bl_posts`
--

CREATE TABLE IF NOT EXISTS `bl_posts` (
  `id` int(10) unsigned NOT NULL,
  `is_release` tinyint(1) unsigned NOT NULL,
  `category` enum('News','Android','PHP','Java','Books','Web','Windows') NOT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bl_posts`
--

INSERT INTO `bl_posts` (`id`, `is_release`, `category`, `title`, `img`, `intro_text`, `full_text`, `date`, `meta_desc`, `meta_key`, `hits`, `hide`, `no_form`) VALUES
(1, 1, 'Java', 'Тестовый 1', 'test1.jpg', 'Анонс первого тестового поста.', '<h2>Первый пост.</h2>\r\n\r\n<p>Детальный разбор выдуманной проблемы.Детальный разбор выдуманной проблемы.Детальный разбор выдуманной проблемы.Детальный разбор выдуманной проблемы.Детальный разбор выдуманной проблемы.Детальный разбор выдуманной проблемы.Детальный разбор выдуманной проблемы.Детальный разбор выдуманной проблемы.Детальный разбор выдуманной проблемы.Детальный разбор выдуманной проблемы.Детальный разбор выдуманной проблемы.Детальный разбор выдуманной проблемы.Детальный разбор выдуманной проблемы.Детальный разбор выдуманной проблемы.Детальный разбор выдуманной проблемы.Детальный разбор выдуманной проблемы.Детальный разбор выдуманной проблемы.Детальный разбор выдуманной проблемы.Детальный разбор выдуманной проблемы.</p>\r\n\r\n<ol>\r\n	<li>Делаем</li>\r\n	<li>вид</li>\r\n	<li>умственной</li>\r\n	<li>деятельности</li>\r\n	<li>на</li>\r\n	<li>как</li>\r\n	<li>можно</li>\r\n	<li>больше</li>\r\n	<li>строчек</li>\r\n	<li>текста.</li>\r\n</ol>\r\n\r\n<h1>Вывод</h1>\r\n\r\n<p><code>не утешительный, строчек не так много.</code></p>\r\n', 1485946482, 'Пример мета описания.', 'Пример мета ключей.', 88, 0, 0),
(2, 1, 'Java', 'Тестовый 2', 'test2.jpg', 'Анонс второго тестового поста. Анонс второго тестового поста.(copy1) Анонс второго тестового поста.(copy2)', '<ol>\r\n	<li>Второй пост.</li>\r\n	<li>Детальный разбор реальной проблемы.</li>\r\n	<li>Мы, знаем, что умственной деятельности на долго не хватит.</li>\r\n	<li>Вывод все тот же не утешительный, строчек не так много.</li>\r\n</ol>\r\n', 1485960781, 'Пример мета описания2.', 'Пример мета ключей2.', 8, 0, 0),
(3, 1, 'Books', 'Тестовый 3', 'test3.jpg', 'Анонс третьего тестового поста. Анонс третьего тестового поста(copy1). Анонс третьего тестового поста. (copy2)', '<p>Третий пост. Детальный разбор мифической проблемы. Мы, знаем, что умственной деятельности не существует. Выводы будем делать в следующем посту.</p>\r\n', 1485960712, 'Пример мета описания3.', 'Пример мета ключей3.', 9, 0, 0),
(4, 1, 'Books', 'Тестовый 4', 'test5.jpg', 'Анонс четвертого тестового поста.', '<p>Четвертый пост. Поверхностный разбор крошечной проблемы. Мы, ничего не знаем, и знать не можем. Выводы в таком случае делать очень легко.</p>\r\n', 1486025653, 'Пример мета описания4.', 'Пример мета ключей4.', 2, 0, 0),
(5, 1, 'Android', 'Тестовый 5', 'test4.jpg', 'Анонс 5 тестового поста. Анонс 5 тестового поста.Анонс 5 тестового поста.Анонс 5 тестового поста.Анонс 5 тестового поста.Анонс 5 тестового поста.', '<p>5 пост. Поверхностный разбор крошечной проблемы. Мы, ничего не знаем, и знать не можем. Выводы в таком случае делать очень легко.</p>\r\n', 1485960826, 'Пример мета описания5.', 'Пример мета ключей5.', 7, 0, 0),
(6, 1, 'News', 'Тестовый 6', 'test3.jpg', 'Анонс 6 тестового поста.', '<p>6 пост. Детальный разбор мифической проблемы. Мы, знаем, что умственной деятельности не существует. Выводы будем делать в следующем посту.</p>\r\n', 1, 'Пример мета описания6.', 'Пример мета ключей6.', 25, 0, 0),
(7, 1, 'Books', 'Тестовый скрытый 1', 'test5.jpg', 'Скрытый пост, не должен отобразится.', '<h1>Скрытый</h1>\r\n\r\n<ul>\r\n	<li>Скрытый пост, не должен отобразится.</li>\r\n	<li>Скрытый пост, не должен отобразится.</li>\r\n	<li>Скрытый пост, не должен отобразится.</li>\r\n	<li>Скрытый пост, не должен отобразится.</li>\r\n</ul>\r\n', 1485962853, 'Скрытый ', 'Скрытый ', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bl_users`
--

CREATE TABLE IF NOT EXISTS `bl_users` (
  `id` int(10) unsigned NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(32) DEFAULT NULL,
  `auth_key` varchar(32) DEFAULT NULL,
  `access_token` varchar(32) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bl_users`
--

INSERT INTO `bl_users` (`id`, `last_name`, `first_name`, `username`, `email`, `password`, `auth_key`, `access_token`) VALUES
(1, 'Yevduschenko', 'Denis', 'admin', 'a2ka7@i.ua', '21232f297a57a5a743894a0e4a801fc3', 'test100key', '100-token'),
(2, 'Last name', 'First name', 'test_user', 'test@test.uu', '9da1f8e0aecc9d868bad115129706a77', NULL, NULL),
(13, '12345', 'Kate', 'KaDe', 'asdsdasd@aw.a', 'c20ad4d76fe97759aa27a0c99bff6710', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bl_posts`
--
ALTER TABLE `bl_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bl_users`
--
ALTER TABLE `bl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bl_posts`
--
ALTER TABLE `bl_posts`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `bl_users`
--
ALTER TABLE `bl_users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
