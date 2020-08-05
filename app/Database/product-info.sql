-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- 主機: localhost:3306
-- 產生時間： 2020 年 08 月 05 日 19:47
-- 伺服器版本: 5.7.23
-- PHP 版本： 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- 資料庫： `KL`
--

-- --------------------------------------------------------

--
-- 資料表結構 `customer-info`
--

CREATE TABLE `customer-info` (
  `id` int(11) NOT NULL,
  `companyName` varchar(255) CHARACTER SET utf8 NOT NULL,
  `tel` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 NOT NULL,
  `guiNum` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `customer-info`
--

INSERT INTO `customer-info` (`id`, `companyName`, `tel`, `fax`, `address`, `guiNum`) VALUES
(63, '錕聯2', 'iiiiiii', 'iiiiiii', '台南市安南區安中路123號', '16714512'),
(62, '錕聯', '11111111', 'iiiiiii', '台南市安南區安中路123號', '16714512'),
(64, '錕聯3', '11111111', 'iiiiiii', '台南市安南區安中路123號', '16714512'),
(65, '錕聯4', '11111111', 'iiiiiii', '1111111', '16714512');

-- --------------------------------------------------------

--
-- 資料表結構 `product-info`
--

CREATE TABLE `product-info` (
  `id` int(255) NOT NULL,
  `customerId` varchar(255) NOT NULL,
  `productNum` varchar(255) NOT NULL,
  `productSpec` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `unitPrice` double NOT NULL,
  `sellingPrice` double NOT NULL,
  `PS` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `product-info`
--

INSERT INTO `product-info` (`id`, `customerId`, `productNum`, `productSpec`, `unit`, `unitPrice`, `sellingPrice`, `PS`) VALUES
(6, '62', '28', '15*20*100', '件', 7.3, 7.3, '無'),
(7, '64', '28', '15*20*100', '件', 7.3, 7.3, '無'),
(8, '62', '25', '22*20*256', '件', 10, 10, '無'),
(9, '63', '45', '22*20*256', '件', 7.3, 10, '無'),
(10, '64', '28', '15*20*100', '件', 7.3, 7.3, '無'),
(11, '62', '15', '15*20*100', '件', 10, 11.2, '無'),
(12, '63', '18', '18*20*25.6', '件', 9.8, 9.8, '無');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `customer-info`
--
ALTER TABLE `customer-info`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `product-info`
--
ALTER TABLE `product-info`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `customer-info`
--
ALTER TABLE `customer-info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- 使用資料表 AUTO_INCREMENT `product-info`
--
ALTER TABLE `product-info`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
