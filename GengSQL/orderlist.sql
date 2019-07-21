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
-- 資料表結構 `orderlist`
--

CREATE TABLE `orderlist` (
  `orderNo` int(5) NOT NULL COMMENT '訂單編號',
  `memId` int(5) NOT NULL COMMENT '會員編號',
  `checkSatus` tinyint(1) NOT NULL COMMENT '審核狀態1付錢0沒付錢',
  `totalPrice` int(10) NOT NULL COMMENT '總價',
  `buildDate` date NOT NULL COMMENT '建立日期',
  `cancelDate` date DEFAULT NULL COMMENT '取消日期',
  `sendName` varchar(5) NOT NULL COMMENT '收件人',
  `sendAddress` varchar(100) NOT NULL COMMENT '收件地址',
  `sendTel` int(10) NOT NULL COMMENT '收件電話'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `orderlist`
--

INSERT INTO `orderlist` (`orderNo`, `memId`, `checkSatus`, `totalPrice`, `buildDate`, `cancelDate`, `sendName`, `sendAddress`, `sendTel`) VALUES
(80001, 90001, 1, 800, '2019-07-08', NULL, '', '0', 0),
(80002, 90001, 1, 1200, '2019-07-08', NULL, '', '0', 0),
(80003, 90006, 1, 800, '2019-07-08', NULL, '', '0', 0),
(80004, 90002, 1, 1200, '2019-07-08', NULL, '', '0', 0),
(80005, 90003, 1, 800, '2019-07-08', NULL, '', '0', 0),
(80006, 90004, 1, 1600, '2019-07-08', NULL, '', '0', 0),
(80007, 90005, 1, 800, '2019-07-08', NULL, '', '0', 0),
(80040, 90006, 0, 0, '2019-07-19', NULL, '小be', '桃園市中央路28號', 985585141),
(80039, 90006, 0, 0, '2019-07-19', NULL, '', '', 123),
(80038, 90006, 0, 0, '2019-07-19', NULL, '', '', 123),
(80037, 90006, 0, 0, '2019-07-19', NULL, '', '', 123),
(80036, 90006, 0, 0, '2019-07-19', NULL, '123', '123', 123);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `orderlist`
--
ALTER TABLE `orderlist`
  ADD PRIMARY KEY (`orderNo`),
  ADD KEY `memId` (`memId`);

--
-- 在傾印的資料表使用自動增長(AUTO_INCREMENT)
--

--
-- 使用資料表自動增長(AUTO_INCREMENT) `orderlist`
--
ALTER TABLE `orderlist`
  MODIFY `orderNo` int(5) NOT NULL AUTO_INCREMENT COMMENT '訂單編號', AUTO_INCREMENT=80041;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
