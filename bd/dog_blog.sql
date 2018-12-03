-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Гру 03 2018 р., 21:00
-- Версія сервера: 5.6.41
-- Версія PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `dog_blog`
--

-- --------------------------------------------------------

--
-- Структура таблиці `dogs`
--

CREATE TABLE `dogs` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `descript` text NOT NULL,
  `img` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `dogs`
--

INSERT INTO `dogs` (`id`, `name`, `descript`, `img`) VALUES
(1, 'Лабрадор', 'Первоначально была выведена в качестве охотничьей подружейной собаки. Лабрадоры используются на охоте, в качестве собак-поводырей, собак-спасателей, но главным образом в роли компаньонов. Порода берёт своё начало на острове Ньюфаундленд на восточном побережье Канады.', 'images/dogdb1.jpg'),
(2, 'Мопс', 'Маленькая декоративная собачка, которую издавна держала знать. Собака с живым, весёлым и при этом уравновешенным характером, благородная и привязчивая к хозяину. ', 'images/dogdb2.jpg'),
(3, 'Хаски', 'Общее название для нескольких пород ездовых собак, выведенных в северных регионах, которые отличаются быстрой манерой тянуть упряжку.', 'images/dogdb3.jpg'),
(4, 'Корги', 'Порода, выведенная в Пембрукшире, предположительно, из собак фламандского происхождения и ведущая свою историю с XIII века.', 'images/dogdb4.jpg'),
(5, 'Шпиц', 'Общее название ряда пород собак, отличающихся острыми ушами, закрученным вверх хвостом и густой торчащей шерстью.', 'images/dogdb5.jpg');

-- --------------------------------------------------------

--
-- Структура таблиці `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `descript` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `news`
--

INSERT INTO `news` (`id`, `title`, `descript`, `img`) VALUES
(1, 'Во внедорожниках появился душ для собак', 'Автопроизводитель Land Rover начал выпуск серии принадлежностей по уходу за домашними питомцами под названием «Pet Pack». Эти устройства можно будет установить во всех внедорожниках марки.Комплект Pet Pack включает в себя душ для собак объемом 6,5 литров, подъемная рампа, специальная миска, которая не проливает воду, стеганная защита от когтей, а также складная удерживающая перегородка со шторками, которая устанавливается в багажнике и служит для того, чтобы у питомца была своя зона комфорта. Такое устройство может выдержать животного до 85 кг. Кроме того в набор входят складной пандус и коврик. Стоимость одного комплекта составляет 463 доллара. Каждый аксессуар можно приобрести отдельно.', 'images/image_06.jpg'),
(2, 'В Сочи состоится выставка собак', 'Местом для проведения выставки был выбран Олимпийский парк у стадиона «Адлер Арена». Для объективности результатов были приглашены судьи международной категории не только из России, но также из Германии, Сербии и Кипра.', 'images/image_05.jpg');

-- --------------------------------------------------------

--
-- Структура таблиці `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `active`) VALUES
(1, 'Karina', 'lubluvas98@gmail.com', 'b59c67bf196a4758191e42f76670ceba', 0);

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `dogs`
--
ALTER TABLE `dogs`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `dogs`
--
ALTER TABLE `dogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблиці `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблиці `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
