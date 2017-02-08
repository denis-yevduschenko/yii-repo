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
-- Database: `yii2_db`
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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bl_posts`
--

INSERT INTO `bl_posts` (`id`, `is_release`, `category`, `title`, `img`, `intro_text`, `full_text`, `date`, `meta_desc`, `meta_key`, `hits`, `hide`, `no_form`) VALUES
(1, 1, 'Java', 'Тестовый 1', 'test1.jpg', 'Анонс первого тестового поста.', '<h2>Первый пост.</h2>\r\n\r\n<p>Детальный разбор выдуманной проблемы.Детальный разбор выдуманной проблемы.Детальный разбор выдуманной проблемы.Детальный разбор выдуманной проблемы.Детальный разбор выдуманной проблемы.Детальный разбор выдуманной проблемы.Детальный разбор выдуманной проблемы.Детальный разбор выдуманной проблемы.Детальный разбор выдуманной проблемы.Детальный разбор выдуманной проблемы.Детальный разбор выдуманной проблемы.Детальный разбор выдуманной проблемы.Детальный разбор выдуманной проблемы.Детальный разбор выдуманной проблемы.Детальный разбор выдуманной проблемы.Детальный разбор выдуманной проблемы.Детальный разбор выдуманной проблемы.Детальный разбор выдуманной проблемы.Детальный разбор выдуманной проблемы.</p>\r\n\r\n<ol>\r\n	<li>Делаем</li>\r\n	<li>вид</li>\r\n	<li>умственной</li>\r\n	<li>деятельности</li>\r\n	<li>на</li>\r\n	<li>как</li>\r\n	<li>можно</li>\r\n	<li>больше</li>\r\n	<li>строчек</li>\r\n	<li>текста.</li>\r\n</ol>\r\n\r\n<h1>Вывод</h1>\r\n\r\n<p><code>не утешительный, строчек не так много.</code></p>\r\n', 1485946482, 'Пример мета описания.', 'Пример мета ключей.', 88, 0, 0),
(2, 1, 'Java', 'Тестовый 2', 'test2.jpg', 'Анонс второго тестового поста. Анонс второго тестового поста.(copy1) Анонс второго тестового поста.(copy2)', '<ol>\r\n	<li>Второй пост.</li>\r\n	<li>Детальный разбор реальной проблемы.</li>\r\n	<li>Мы, знаем, что умственной деятельности на долго не хватит.</li>\r\n	<li>Вывод все тот же не утешительный, строчек не так много.</li>\r\n</ol>\r\n', 1485960781, 'Пример мета описания2.', 'Пример мета ключей2.', 8, 0, 0),
(3, 1, 'Books', 'Тестовый 3', 'test3.jpg', 'Анонс третьего тестового поста. Анонс третьего тестового поста(copy1). Анонс третьего тестового поста. (copy2)', '<p>Третий пост. Детальный разбор мифической проблемы. Мы, знаем, что умственной деятельности не существует. Выводы будем делать в следующем посту.</p>\r\n', 1485960712, 'Пример мета описания3.', 'Пример мета ключей3.', 9, 0, 0),
(4, 1, 'Books', 'Тестовый 4', 'test5.jpg', 'Анонс четвертого тестового поста.', '<p>Четвертый пост. Поверхностный разбор крошечной проблемы. Мы, ничего не знаем, и знать не можем. Выводы в таком случае делать очень легко.</p>\r\n', 1486025653, 'Пример мета описания4.', 'Пример мета ключей4.', 2, 0, 0),
(5, 1, 'Android', 'Тестовый 5', 'test4.jpg', 'Анонс 5 тестового поста. Анонс 5 тестового поста.Анонс 5 тестового поста.Анонс 5 тестового поста.Анонс 5 тестового поста.Анонс 5 тестового поста.', '<p>5 пост. Поверхностный разбор крошечной проблемы. Мы, ничего не знаем, и знать не можем. Выводы в таком случае делать очень легко.</p>\r\n', 1485960826, 'Пример мета описания5.', 'Пример мета ключей5.', 8, 0, 0),
(6, 1, 'News', 'Тестовый 6', 'test3.jpg', 'Анонс 6 тестового поста.', '<p>6 пост. Детальный разбор мифической проблемы. Мы, знаем, что умственной деятельности не существует. Выводы будем делать в следующем посту.</p>\r\n', 1, 'Пример мета описания6.', 'Пример мета ключей6.', 27, 0, 0),
(7, 1, 'Books', 'Тестовый скрытый 1', 'test5.jpg', 'Скрытый пост, не должен отобразится.', '<h1>Скрытый</h1>\r\n\r\n<ul>\r\n	<li>Скрытый пост, не должен отобразится.</li>\r\n	<li>Скрытый пост, не должен отобразится.</li>\r\n	<li>Скрытый пост, не должен отобразится.</li>\r\n	<li>Скрытый пост, не должен отобразится.</li>\r\n</ul>\r\n', 1485962853, 'Скрытый ', 'Скрытый ', 1, 1, 0),
(8, 0, 'Web', 'Elegant Selects with Quick[select]', 'quickselect.png', 'Элементы форм всегда разрешали использование ограниченные возможности стилей... поэтому я ненавижу работу с формами. Конечно мы прошли долгий путь, но существует один элемент формы к которому до сих пор довольно трудно применить стили и не элегантно: SELECT. Этот элемент выглядит по разному от одной операционной системы к другой, а иногда даже от браузера к браузеру.', '<p>Original - https://davidwalsh.name/quick-select</p>\r\n\r\n<p>Недавно я нашел чудесную jQuery плагин, который делает&nbsp;<code>SELECT</code> элемент более&nbsp;презентабельным, элегантным и стильным:&nbsp;<big><tt>Quick[select].</tt></big></p>\r\n\r\n<p>Quick[select] превращает варианты&nbsp;<code>SELECTа в кликабельные кнопки с традиционным &nbsp;SELECTом как выпадающим списком.</code></p>\r\n\r\n<h2>The CSS</h2>\r\n\r\n<p>Quick[select] идет вместе с базовым набором стилей, но вы может&nbsp;изменить стили &quot;кнопок&quot; в любые варианты какие вы захотите, как вы можете увидеть в моем демо. Вот мои основные стили:</p>\r\n\r\n<pre>\r\n<code>.btn-group .btn {\r\n	border: 1px solid #ccc;\r\n	background: #eee;\r\n	padding: 4px;\r\n	border-radius: 4px;\r\n	margin: 0 10px 0 0;\r\n	font-size: 14px;\r\n	display: inline;\r\n\r\n	transition: background .3s, border-color .3s;\r\n}\r\n.btn-group .btn.active {\r\n	background: #7ac9ed;\r\n	border-color: #0c7bb6;\r\n}</code></pre>\r\n\r\n<p>Quick[select] также имеет помощника для bootsrap сайтов, если это ваш стек.</p>\r\n\r\n<h2>The JavaScript</h2>\r\n\r\n<p>Использовать Quick[select] легко: добавить плагин на страницу, а затем использовать синтаксис jQuery для создания экземпляров SELECT элементов:</p>\r\n\r\n<pre>\r\n<code>jQuery(&#39;#wakeup-time&#39;).quickselect({\r\n	activeButtonClass: &#39;btn-primary active&#39;,\r\n	breakOutValues: [&#39;06:30&#39;, &#39;07:00&#39;, &#39;07:30&#39;, &#39;08:00&#39;],\r\n	buttonClass: &#39;btn btn-default&#39;,\r\n	selectDefaultText: &#39;Other&#39;,\r\n	wrapperClass: &#39;btn-group&#39;\r\n});</code>\r\n</pre>\r\n\r\n<p>Самый важный параметр breakOutValues который генерирует интерактивные кнопки для популярных вариантов (указанные Вами) внутри элемента SELECT. Вы также захотите установить кастомное значение &quot;selectDefaultText&quot;, когда кнопка выбрана, она&nbsp;запускает полный показ всех существующих вариантов.</p>\r\n\r\n<p>Quick[select] is the best&nbsp;<code>SELECT</code>&nbsp;alternative that I&#39;ve seen in a long time. &nbsp;This plugin&nbsp;allows for elegant, stylish, and usable&nbsp;<code>SELECT</code>&nbsp;elements. &nbsp;Go check it out and do your users a favor!</p>\r\n\r\n<p>Quick[select] является лучшей альтернативой SELECT, что я видел в течение длительного времени. Этот плагин позволяет делать&nbsp;элегантные, стильные&nbsp;и пригодные&nbsp;для использования <code>SELECT</code>&nbsp;элементы. Проверить его и сделай своим пользователям услугу!</p>\r\n', 1486561963, 'modified select form with help jQuery plagin Quick[select].', 'quickselect, select, css, form, jQuery', 8, 0, 0);

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
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
