-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2019 年 07 月 19 日 17:25
-- 伺服器版本： 10.1.38-MariaDB
-- PHP 版本： 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `dd101g4`
--

-- --------------------------------------------------------

--
-- 資料表結構 `orderdetail`
--

CREATE TABLE `orderdetail` (
  `prodNo` int(5) DEFAULT NULL COMMENT '商品編號',
  `volume` int(2) NOT NULL COMMENT '數量',
  `price` int(4) NOT NULL COMMENT '單價',
  `orderNo` int(5) NOT NULL COMMENT '訂單編號',
  `itemNo` int(5) NOT NULL COMMENT 'sku',
  `workNo` int(5) DEFAULT NULL COMMENT '客製編號'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `orderdetail`
--

INSERT INTO `orderdetail` (`prodNo`, `volume`, `price`, `orderNo`, `itemNo`, `workNo`) VALUES
(10001, 5, 400, 0, 1, 0),
(10001, 5, 2000, 0, 2, 0),
(10002, 1, 400, 0, 3, 0),
(10006, 2, 800, 0, 4, 0),
(10003, 1, 400, 0, 5, 0),
(10004, 2, 800, 0, 6, 0),
(10002, 3, 100, 0, 7, 0),
(10002, 3, 100, 0, 8, 0),
(10001, 3, 300, 80040, 21, NULL),
(10002, 1, 100, 80039, 20, NULL),
(10002, 3, 100, 80038, 19, NULL),
(10002, 3, 100, 80037, 18, NULL),
(10002, 3, 100, 80036, 17, NULL);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`itemNo`),
  ADD KEY `workNo` (`workNo`),
  ADD KEY `prodNo` (`prodNo`),
  ADD KEY `orderNo` (`orderNo`);

--
-- 在傾印的資料表使用自動增長(AUTO_INCREMENT)
--

--
-- 使用資料表自動增長(AUTO_INCREMENT) `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `itemNo` int(5) NOT NULL AUTO_INCREMENT COMMENT 'sku', AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
