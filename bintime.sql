-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 02 2017 г., 23:08
-- Версия сервера: 5.6.34
-- Версия PHP: 5.6.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bintime`
--

-- --------------------------------------------------------

--
-- Структура таблицы `email`
--

CREATE TABLE `email` (
  `id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `email`
--

INSERT INTO `email` (`id`, `email`) VALUES
(1, 'test@ukr.net'),
(2, 'test1@ukr.net'),
(3, 'test2@ukr.net'),
(4, 'test3@ukr.net'),
(5, 'test4@ukr.net'),
(6, 'test5@ukr.net'),
(7, 'test6@ukr.net'),
(8, 'test7@ukr.net'),
(9, 'test8@ukr.net'),
(10, 'test9@ukr.net'),
(11, 'test10@ukr.net');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `email`
--
ALTER TABLE `email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
