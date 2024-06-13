-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Янв 25 2020 г., 12:37
-- Версия сервера: 10.1.37-MariaDB
-- Версия PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `db_dnis`
--

-- --------------------------------------------------------

--
-- Структура таблицы `account`
--

CREATE TABLE `account` (
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `account`
--

INSERT INTO `account` (`name`) VALUES
(''),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
('lox'),
('lox'),
(''),
(''),
('');

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `cart_id_product` int(11) NOT NULL,
  `cart_price` int(11) NOT NULL,
  `cart_count` int(11) NOT NULL,
  `cart_datatime` datetime NOT NULL,
  `cart_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `brand` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `products_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `seo_words` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `features` text NOT NULL,
  `daretime` datetime NOT NULL,
  `new` tinyint(1) NOT NULL DEFAULT '0',
  `sale` tinyint(1) NOT NULL DEFAULT '0',
  `type_tovara` varchar(255) NOT NULL,
  `vote` int(11) NOT NULL,
  `votes` float NOT NULL,
  `Visible` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`products_id`, `title`, `price`, `brand`, `seo_words`, `image`, `description`, `features`, `daretime`, `new`, `sale`, `type_tovara`, `vote`, `votes`, `Visible`) VALUES
(1, 'Наклейка короля', 1000, '', '', 'mad.jpg', '', 'Герой Рунета 2009\r\nИ просто хороший человек', '2020-01-21 05:31:00', 0, 0, 'Stiker', 1, 1, 1),
(2, 'Ноутбук HP 255 G5', 19000, 'HP', 'ТОП, плохой экран, выбор DNiS', 'orig.png', 'HP 255 - ноутбук из бизнес-серии от компании Hewlett-Packard. Он реализован на базе процессора AMD A4-5000M и имеет 4 Гб оперативной памяти, благодаря чему обеспечивается необходимая многозадачность. А жесткий диск объемом 500 Гб позволит хранить большое количество информации.\r\n\r\n', 'AMD A4-5000M \r\n4 Гб оперативной памяти \r\nДиагональ экрана - 15.6 \" \r\nТип покрытия экрана - матовый \r\nжесткий диск - объемом 500 Гб \r\nСкорость вращения - 5400 об/мин \r\nТип памяти - DDR3L', '2020-01-06 17:28:00', 0, 0, 'Laptop', 1, 4.9, 1),
(3, 'Габелла', 0, 'Вальвы', '', 'ggwp.jpg', 'Он передает мое примерное выражение лица, когда я убил день на css, а дизайн остался все также плох....', 'Это добавлено на сайт просто потому, что я хотел куда вставить эту фотографию котика.', '2020-01-14 04:20:00', 0, 0, 'Тестовый', 15, 4.9, 0),
(4, 'Зачет', 9999999, 'Елена Павловна', '', 'zach.jpeg', 'Ну, тут очевидно отл.', 'Бесценно.\r\nПоставьте экзамен ಥ_ಥ', '2020-01-24 14:00:00', 1, 1, '', 228, 5, 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`products_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `products_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
