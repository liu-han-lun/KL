-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- 主機: localhost:3306
-- 產生時間： 2020 年 07 月 28 日 16:43
-- 伺服器版本: 5.7.23
-- PHP 版本： 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- 資料庫： `KL`
--

-- --------------------------------------------------------

--
-- 資料表結構 `product-info`
--

CREATE TABLE `product-info` (
  `id` int(255) NOT NULL,
  `companyName` varchar(255) NOT NULL,
  `productNum` varchar(255) NOT NULL,
  `productSpec` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `unitPrice` double NOT NULL,
  `sellingPrice` double NOT NULL,
  `PS` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `product-info`
--
ALTER TABLE `product-info`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `product-info`
--
ALTER TABLE `product-info`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
