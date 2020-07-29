-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- 主機: localhost:3306
-- 產生時間： 2020 年 07 月 29 日 16:56
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
  `systemNum` varchar(255) NOT NULL,
  `companyName` varchar(255) CHARACTER SET utf8 NOT NULL,
  `tel` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 NOT NULL,
  `guiNum` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `customer-info`
--
ALTER TABLE `customer-info`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `customer-info`
--
ALTER TABLE `customer-info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
