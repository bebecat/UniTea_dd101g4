-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2019 年 07 月 21 日 18:40
-- 伺服器版本： 8.0.15
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
-- 資料表結構 `contestmember`
--

CREATE TABLE `contestmember` (
  `attendNo` int(5) NOT NULL COMMENT '參賽編號',
  `memId` int(10) NOT NULL COMMENT '會員編號',
  `workNo` int(5) NOT NULL COMMENT '客製商品編號',
  `attendDate` date NOT NULL COMMENT '發表日期',
  `vote` int(10) NOT NULL COMMENT '讚數'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `contestmember`
--

INSERT INTO `contestmember` (`attendNo`, `memId`, `workNo`, `attendDate`, `vote`) VALUES
(20002, 90002, 11001, '2019-06-07', 35),
(20003, 90003, 11003, '2019-06-07', 45),
(20004, 90004, 11004, '2019-06-08', 55),
(20005, 90005, 11005, '2019-05-08', 65),
(20006, 90006, 11006, '2019-05-08', 55),
(20007, 90007, 11007, '2019-05-08', 41),
(20008, 90008, 11008, '2019-04-08', 11),
(20009, 90008, 11009, '2019-04-08', 14),
(20010, 90010, 11010, '2019-04-08', 55),
(20011, 90011, 11002, '2019-07-08', 15),
(20012, 90012, 11012, '2019-07-08', 51),
(20013, 90013, 11013, '2019-07-08', 11),
(20014, 90014, 11014, '2019-07-08', 5),
(20015, 90015, 11015, '2019-07-08', 57),
(20016, 90016, 11016, '2019-07-09', 52);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `contestmember`
--
ALTER TABLE `contestmember`
  ADD PRIMARY KEY (`attendNo`),
  ADD KEY `memId` (`memId`),
  ADD KEY `workNo` (`workNo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
