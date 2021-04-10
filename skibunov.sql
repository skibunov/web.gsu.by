-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Апр 10 2021 г., 20:08
-- Версия сервера: 5.6.13
-- Версия PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `skibunov`
--
CREATE DATABASE IF NOT EXISTS `skibunov` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `skibunov`;

-- --------------------------------------------------------

--
-- Структура таблицы `airport`
--

CREATE TABLE IF NOT EXISTS `airport` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `count` varchar(32) NOT NULL,
  `country` varchar(32) NOT NULL,
  `datetime` date NOT NULL,
  `count_plane` int(11) NOT NULL,
  `count_flight` int(11) NOT NULL,
  `season` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `airport`
--

INSERT INTO `airport` (`id`, `name`, `count`, `country`, `datetime`, `count_plane`, `count_flight`, `season`) VALUES
(1, 'Домодедово', '3', 'РОССИЯ', '2020-07-09', 32, 141564, 'Весна,Осень,Зима,Лето,');

-- --------------------------------------------------------

--
-- Структура таблицы `pilots`
--

CREATE TABLE IF NOT EXISTS `pilots` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `middlename` varchar(32) NOT NULL,
  `position` varchar(32) NOT NULL,
  `birthday` date NOT NULL,
  `adress` varchar(32) NOT NULL,
  `phone` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `pilots`
--

INSERT INTO `pilots` (`id`, `firstname`, `lastname`, `middlename`, `position`, `birthday`, `adress`, `phone`) VALUES
(2, 'Николай', 'Сидоренко', 'Александрович', 'Второй пилот', '2001-03-03', 'ул. Мазурова', '+375(29)213-82-09'),
(3, 'Андрей', 'Скибунов', 'Витальевич', 'Первый пилот', '2001-09-22', 'ул. Фадеева', '+375292376202');

-- --------------------------------------------------------

--
-- Структура таблицы `plane`
--

CREATE TABLE IF NOT EXISTS `plane` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numb` varchar(32) NOT NULL,
  `model` varchar(32) NOT NULL,
  `count` int(11) NOT NULL,
  `status` varchar(32) NOT NULL,
  `country` varchar(32) NOT NULL,
  `year` date NOT NULL,
  `flights` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `plane`
--

INSERT INTO `plane` (`id`, `numb`, `model`, `count`, `status`, `country`, `year`, `flights`) VALUES
(1, 'FX51616', '241', 64, 'Прошел проверку', 'США', '2021-01-11', 'Междунородные рейсы');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(12) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `salt` varchar(8) NOT NULL,
  `role` varchar(32) NOT NULL DEFAULT 'user',
  `ban` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `firstname`, `lastname`, `age`, `email`, `password`, `salt`, `role`, `ban`) VALUES
(1, 'blisse', 'Андрей', 'Скибунов', 19, 'skibunov.andrey@mail.ru', 'e3d0637a5b7a5ab39daee5dfd1c1714d', 'p^aBg~l/', 'admin', '2021-04-10 22:53:24'),
(2, 'user', 'user', 'user', 20, 'user@gmail.com', '40523bf573b4355898f62b05b3ea8d4b', '9a%;hIH:', 'user', '2021-04-10 23:05:18');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
