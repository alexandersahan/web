-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 23 2021 г., 20:26
-- Версия сервера: 10.4.14-MariaDB
-- Версия PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `unice`
--

DELIMITER $$
--
-- Процедуры
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `change_user_pass` (IN `email` VARCHAR(50), IN `pass` VARCHAR(32))  BEGIN
	   IF EXISTS(SELECT 1 FROM users WHERE users._email = email) THEN
	SET @s = 'UPDATE users SET _pass = ? WHERE users._email=?';
        PREPARE stmt FROM @s;
	EXECUTE stmt USING pass, email;
    END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `create_client` (IN `name` VARCHAR(50), IN `phone` VARCHAR(10), IN `email` VARCHAR(50))  BEGIN
	IF NOT EXISTS(SELECT 1 FROM client WHERE client._name = name) AND
       NOT EXISTS(SELECT 1 FROM client WHERE client._phone = phone) AND
       NOT EXISTS(SELECT 1 FROM client WHERE client._email = email) THEN
	SET @s = 'INSERT INTO client ( client._name, client._phone, client._email) VALUES(?, ?, ?)';
        PREPARE stmt FROM @s;
	EXECUTE stmt USING name, phone, email;
    END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `create_goods` (IN `article` VARCHAR(6), IN `shop` INT, IN `name` VARCHAR(50), IN `price` FLOAT, IN `counter` INT)  BEGIN
    IF NOT EXISTS(SELECT 1 FROM goods WHERE goods._article = article) THEN
	SET @s = 'INSERT INTO goods (goods._article, goods._shop, goods._name, goods._price, goods._count) VALUES(?, ?, ?, ?, ?)';
        PREPARE stmt FROM @s;
	EXECUTE stmt USING article, shop, name, price, counter;

    ELSEIF EXISTS(SELECT 1 FROM goods WHERE goods._article = article) THEN
        UPDATE goods SET _count = _count + counter;
   END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `create_lead` (IN `name` VARCHAR(50), IN `phone` VARCHAR(10), IN `email` VARCHAR(50))  BEGIN
	IF NOT EXISTS(SELECT 1 FROM lead WHERE lead._name = name) AND
       NOT EXISTS(SELECT 1 FROM lead WHERE lead._phone = phone) AND
       NOT EXISTS(SELECT 1 FROM lead WHERE lead._email = email) THEN
	SET @s = 'INSERT INTO lead (lead._name, lead._phone, lead._email) VALUES(?, ?, ?)';
        PREPARE stmt FROM @s;
	EXECUTE stmt USING name, phone, email;
    END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `create_order_str` (IN `article` VARCHAR(6), IN `client` INT, IN `price` FLOAT, IN `counter` INT, IN `date` DATE)  BEGIN
INSERT INTO order_str (order_str._article, order_str._client, order_str._price, order_str._count, order_str._date ) VALUES( article, client, price, counter, date );       
UPDATE shop SET _bought = _bought - price * counter;   
UPDATE shop SET _sold = _sold + price * counter;
UPDATE goods SET _count = _count - counter; 
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `create_seller` (IN `shop` INT, IN `name` VARCHAR(50), IN `phone` VARCHAR(10), IN `email` VARCHAR(50))  BEGIN
	IF NOT EXISTS(SELECT 1 FROM seller WHERE seller._name = name) AND
       NOT EXISTS(SELECT 1 FROM seller WHERE seller._phone = phone) AND
       NOT EXISTS(SELECT 1 FROM seller WHERE seller._email = email) THEN
	SET @s = 'INSERT INTO seller (seller._shop, seller._name, seller._phone, seller._email) VALUES(?, ?, ?, ?)';
        PREPARE stmt FROM @s;
	EXECUTE stmt USING shop, name, phone, email;
    END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `create_shop` (IN `lead` INT, IN `address` VARCHAR(50), IN `sold` FLOAT, IN `bought` FLOAT, IN `rent` FLOAT)  BEGIN
    IF NOT EXISTS(SELECT 1 FROM shop WHERE shop._address = address) THEN
	SET @s = 'INSERT INTO shop (shop._lead, shop._address, shop._sold, shop._bought, shop._rent) VALUES(?, ?, ?, ?, ?)';
        PREPARE stmt FROM @s;
	EXECUTE stmt USING lead, address, sold, bought, rent;
    END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `create_user` (IN `name` VARCHAR(50), IN `phone` VARCHAR(10), IN `email` VARCHAR(50), IN `pass` VARCHAR(32))  BEGIN
	IF NOT EXISTS(SELECT 1 FROM users WHERE users._name = name) AND
       NOT EXISTS(SELECT 1 FROM users WHERE users._phone = phone) AND
       NOT EXISTS(SELECT 1 FROM users WHERE users._email = email) THEN
	SET @s = 'INSERT INTO users (users._name, users._phone, users._email, users._pass) VALUES(?, ?, ?, ?)';
        PREPARE stmt FROM @s;
	EXECUTE stmt USING name, phone, email, pass;
    END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_client` (IN `id` INT)  BEGIN 
    IF EXISTS(SELECT 1 FROM client WHERE client._id = id) THEN
        DELETE FROM client WHERE client._id = id;
    END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_goods` (IN `article` VARCHAR(6))  BEGIN 
    IF EXISTS(SELECT 1 FROM goods WHERE goods._article = article) THEN
        DELETE FROM goods WHERE goods._article = article;
    END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_lead` (IN `id` INT)  BEGIN 
    IF EXISTS(SELECT 1 FROM lead WHERE lead._id = id) THEN
        DELETE FROM lead WHERE lead._id = id;
    END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_order_str` (IN `id` INT)  BEGIN 
DELETE FROM order_str WHERE order_str._id = id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_seller` (IN `id` INT)  BEGIN 
    IF EXISTS(SELECT 1 FROM seller WHERE seller._id = id) THEN
        DELETE FROM seller WHERE seller._id = id;
    END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_shop` (IN `id` INT)  BEGIN 
    IF EXISTS(SELECT 1 FROM shop WHERE shop._id = id) THEN
        DELETE FROM shop WHERE shop._id = id;
    END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_user` (IN `id` INT)  BEGIN 
    IF EXISTS(SELECT 1 FROM users WHERE users._id = id) THEN
        DELETE FROM users WHERE users._id = id;
    END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_client` (IN `id` INT, IN `name` VARCHAR(50), IN `phone` VARCHAR(10), IN `email` VARCHAR(50))  BEGIN
	IF NOT EXISTS(SELECT 1 FROM client WHERE client._name = name) OR
       NOT EXISTS(SELECT 1 FROM client  WHERE client._phone = phone) OR
       NOT EXISTS(SELECT 1 FROM client  WHERE client._email = email) AND
       EXISTS(SELECT 1 FROM client  WHERE client._id = id) THEN
	SET @s = 'UPDATE client  SET _name=?, _phone=?, _email=? WHERE client._id=?';
        PREPARE stmt FROM @s;
	EXECUTE stmt USING name, phone, email, id;
    END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_goods` (IN `name` VARCHAR(50), IN `price` FLOAT, IN `counter` INT, IN `article` VARCHAR(6))  BEGIN
    IF EXISTS(SELECT 1 FROM goods WHERE goods._article = article) THEN
	SET @s = 'UPDATE goods SET goods._name=?, goods._price=?, goods._count=? WHERE goods._article = ?';
        PREPARE stmt FROM @s;
	EXECUTE stmt USING name, price, counter, article;
    END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_lead` (IN `id` INT, IN `name` VARCHAR(50), IN `phone` VARCHAR(10), IN `email` VARCHAR(50))  BEGIN
	IF NOT EXISTS(SELECT 1 FROM lead WHERE lead._name = name) OR
       NOT EXISTS(SELECT 1 FROM lead WHERE lead._phone = phone) OR
       NOT EXISTS(SELECT 1 FROM lead WHERE lead._email = email) AND
       EXISTS(SELECT 1 FROM lead WHERE lead._id = id) THEN
	SET @s = 'UPDATE lead SET _name=?, _phone=?, _email=? WHERE lead._id=?';
        PREPARE stmt FROM @s;
	EXECUTE stmt USING name, phone, email, id;
    END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_order_str` (IN `id` INT, IN `article` VARCHAR(6), IN `client` INT, IN `price` FLOAT, IN `counter` VARCHAR(50), IN `date` DATE)  BEGIN
UPDATE order_str SET order_str._article=article, order_str._client=client, order_str._price=price, order_str._count=counter, order_str._date=date WHERE order_str._id = id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_seller` (IN `id` INT, IN `shop` INT, IN `name` VARCHAR(50), IN `phone` VARCHAR(10), IN `email` VARCHAR(50))  BEGIN
	IF NOT EXISTS(SELECT 1 FROM seller WHERE seller._shop = shop) OR
        NOT EXISTS(SELECT 1 FROM seller WHERE seller._name = name) OR
        NOT EXISTS(SELECT 1 FROM seller  WHERE seller._phone = phone) OR
        NOT EXISTS(SELECT 1 FROM seller  WHERE seller._email = email) AND
        EXISTS(SELECT 1 FROM seller  WHERE seller._id = id) THEN
	SET @s = 'UPDATE seller  SET _shop=?, _name=?, _phone=?, _email=? WHERE seller._id=?';
        PREPARE stmt FROM @s;
	EXECUTE stmt USING shop, name, phone, email, id;
    END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_shop` (IN `id` INT, IN `lead` INT, IN `address` VARCHAR(50), IN `sold` FLOAT, IN `bought` FLOAT, IN `rent` FLOAT)  BEGIN
	IF NOT EXISTS(SELECT 1 FROM shop WHERE shop._address = address) AND
       EXISTS(SELECT 1 FROM shop WHERE shop._id = id) THEN
	SET @s = 'UPDATE shop SET _lead=?, _address=?, _sold=?, _bought=?, _rent=? WHERE _id=?';
        PREPARE stmt FROM @s;
	EXECUTE stmt USING lead, address, sold, bought, rent, id;
    END IF;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Структура таблицы `client`
--

CREATE TABLE `client` (
  `_id` int(11) NOT NULL,
  `_name` varchar(50) NOT NULL,
  `_phone` varchar(10) DEFAULT NULL,
  `_email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `client`
--

INSERT INTO `client` (`_id`, `_name`, `_phone`, `_email`) VALUES
(1, 'Петренко Семен', '0966348690', 'post1@gmail.com'),
(2, 'Симеренко Оксана', '0966348690', 'post2@gmail.com'),
(3, 'Шевченко Степан', '0978348690', 'post3@gmail.com'),
(4, 'Костенко Олена', '0990347540', 'post4@gmail.com'),
(5, 'Симоненко Ігор', '0990431780', 'post5@gmail.com'),
(6, 'Павличко Галина', '0990431780', 'post6@gmail.com'),
(7, 'Раскольников Владислав', '0990431780', 'post7@gmail.com');

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `_article` varchar(6) NOT NULL,
  `_shop` int(11) DEFAULT NULL,
  `_name` varchar(50) NOT NULL,
  `_price` float DEFAULT NULL,
  `_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`_article`, `_shop`, `_name`, `_price`, `_count`) VALUES
('000001', 1, 'Зубна паста', 30, 50),
('000002', 1, 'мило', 25, 50),
('000003', 1, 'Пральний порошок', 60, 50),
('000004', 1, 'Шампунь', 90, 50),
('000005', 1, 'Зубний порошок', 20, 50),
('000006', 1, 'Тальк', 20, 50),
('000007', 1, 'Фарба для волосся', 100, 50),
('000008', 1, 'Поліроль для дерева', 80, 50),
('000009', 1, 'Лак', 20, 50),
('000010', 1, 'Ароматизоване мило', 30, 50);

-- --------------------------------------------------------

--
-- Структура таблицы `lead`
--

CREATE TABLE `lead` (
  `_id` int(11) NOT NULL,
  `_name` varchar(50) DEFAULT NULL,
  `_phone` varchar(10) DEFAULT NULL,
  `_email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `lead`
--

INSERT INTO `lead` (`_id`, `_name`, `_phone`, `_email`) VALUES
(1, 'admin', '0111111111', 'example32@gmail.com');

-- --------------------------------------------------------

--
-- Структура таблицы `order_str`
--

CREATE TABLE `order_str` (
  `_id` int(11) NOT NULL,
  `_article` varchar(6) NOT NULL,
  `_client` int(11) DEFAULT NULL,
  `_price` float DEFAULT NULL,
  `_count` int(11) NOT NULL,
  `_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `order_str`
--

INSERT INTO `order_str` (`_id`, `_article`, `_client`, `_price`, `_count`, `_date`) VALUES
(1, '000001', 1, 30, 2, '2021-06-10'),
(2, '000002', 1, 25, 2, '2021-06-10'),
(3, '000003', 1, 60, 2, '2021-06-10'),
(4, '000001', 2, 30, 1, '2021-06-10'),
(5, '000004', 2, 90, 1, '2021-06-10'),
(6, '000005', 2, 20, 4, '2021-06-10'),
(7, '000001', 3, 30, 1, '2021-06-10'),
(8, '000006', 3, 20, 1, '2021-06-10'),
(9, '000005', 3, 20, 5, '2021-06-11'),
(10, '000001', 4, 30, 2, '2021-06-11'),
(11, '000006', 4, 20, 3, '2021-06-11'),
(12, '000005', 4, 20, 6, '2021-06-11'),
(13, '000001', 5, 30, 20, '2021-06-11'),
(14, '000003', 6, 60, 1, '2021-06-11'),
(15, '000004', 6, 90, 3, '2021-06-11'),
(16, '000005', 6, 20, 6, '2021-06-11'),
(17, '000007', 6, 100, 6, '2021-06-11'),
(18, '000009', 7, 20, 1, '2021-06-11');

-- --------------------------------------------------------

--
-- Структура таблицы `seller`
--

CREATE TABLE `seller` (
  `_id` int(11) NOT NULL,
  `_shop` int(11) NOT NULL,
  `_name` varchar(50) NOT NULL,
  `_phone` varchar(10) DEFAULT NULL,
  `_email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `seller`
--

INSERT INTO `seller` (`_id`, `_shop`, `_name`, `_phone`, `_email`) VALUES
(1, 1, 'Іванов Іван', '0933333333', 'John_McJohnson@gmail.com');

-- --------------------------------------------------------

--
-- Структура таблицы `shop`
--

CREATE TABLE `shop` (
  `_id` int(11) NOT NULL,
  `_lead` int(11) DEFAULT NULL,
  `_address` varchar(50) NOT NULL,
  `_sold` float DEFAULT NULL,
  `_bought` float DEFAULT NULL,
  `_rent` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `shop`
--

INSERT INTO `shop` (`_id`, `_lead`, `_address`, `_sold`, `_bought`, `_rent`) VALUES
(1, 1, 'Живова 5А', 7000, 12000, 3000);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `_id` int(11) NOT NULL,
  `_name` varchar(50) NOT NULL,
  `_phone` varchar(10) DEFAULT NULL,
  `_email` varchar(30) DEFAULT NULL,
  `_pass` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`_id`, `_name`, `_phone`, `_email`, `_pass`) VALUES
(1, 'sdfsdsd', '222333', 'post1@email', '7d0511fe4c8b94cc692173e526167d7f'),
(2, 'admin', '0111111111', 'example32@gmail.com', '7d0511fe4c8b94cc692173e526167d7f');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`_id`),
  ADD UNIQUE KEY `_id` (`_id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`_article`),
  ADD UNIQUE KEY `_article` (`_article`),
  ADD KEY `_shop` (`_shop`);

--
-- Индексы таблицы `lead`
--
ALTER TABLE `lead`
  ADD PRIMARY KEY (`_id`),
  ADD UNIQUE KEY `_id` (`_id`);

--
-- Индексы таблицы `order_str`
--
ALTER TABLE `order_str`
  ADD PRIMARY KEY (`_id`),
  ADD KEY `_client` (`_client`),
  ADD KEY `_article` (`_article`);

--
-- Индексы таблицы `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`_id`),
  ADD UNIQUE KEY `_id` (`_id`),
  ADD KEY `_shop` (`_shop`);

--
-- Индексы таблицы `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`_id`),
  ADD UNIQUE KEY `_id` (`_id`),
  ADD KEY `_lead` (`_lead`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `client`
--
ALTER TABLE `client`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `lead`
--
ALTER TABLE `lead`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `order_str`
--
ALTER TABLE `order_str`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `seller`
--
ALTER TABLE `seller`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `shop`
--
ALTER TABLE `shop`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `goods`
--
ALTER TABLE `goods`
  ADD CONSTRAINT `goods_ibfk_1` FOREIGN KEY (`_shop`) REFERENCES `shop` (`_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `order_str`
--
ALTER TABLE `order_str`
  ADD CONSTRAINT `order_str_ibfk_1` FOREIGN KEY (`_client`) REFERENCES `client` (`_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_str_ibfk_2` FOREIGN KEY (`_article`) REFERENCES `goods` (`_article`);

--
-- Ограничения внешнего ключа таблицы `seller`
--
ALTER TABLE `seller`
  ADD CONSTRAINT `seller_ibfk_1` FOREIGN KEY (`_shop`) REFERENCES `shop` (`_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `shop`
--
ALTER TABLE `shop`
  ADD CONSTRAINT `shop_ibfk_1` FOREIGN KEY (`_lead`) REFERENCES `lead` (`_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
