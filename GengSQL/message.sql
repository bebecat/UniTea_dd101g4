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
-- 資料表結構 `message`
--

CREATE TABLE `message` (
  `msgNo` int(11) NOT NULL COMMENT '留言編號',
  `workNo` int(5) NOT NULL COMMENT '客製商品編號',
  `attendNo` int(5) NOT NULL COMMENT '參賽編號',
  `memId` int(5) NOT NULL COMMENT '會員編號',
  `PubDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '發表日期',
  `msgCont` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '留言內容'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `message`
--

INSERT INTO `message` (`msgNo`, `workNo`, `attendNo`, `memId`, `msgCont`) VALUES
(70001, 11001, 20001, 90001, '喜歡!'),
(70002, 11002, 20002, 90004, '好愛這配色!'),
(70003, 11003, 20001, 90003, 'love this!'),
(70004, 11004, 20004, 90005, ':S!'),
(70005, 11005, 20003, 90003, 'love this!'),
(70006, 11006, 20005, 90003, 'love this!'),
(70007, 11007, 20006, 90003, 'love this!'),
(70008, 11008, 20008, 90004, 'love this!'),
(70032, 11005, 20005, 90005, '我喜歡這個籃子!'),
(70046, 11006, 20006, 90005, '我想買這個籃子!'),
(70045, 11005, 20005, 90005, 'ㄆㄆㄆ'),
(70044, 11006, 20006, 90005, '第一名!!!'),
(70043, 11006, 20006, 90005, '你才不美!'),
(70116, 11005, 20005, 90005, '11111111425782'),
(70115, 11005, 20005, 90005, '11111'),
(70114, 11005, 20005, 90005, '123'),
(70126, 11003, 20003, 90003, '778789787897'),
(70128, 11007, 20007, 90007, 'u u uu  '),
(70129, 11008, 20008, 90008, ''),
(70140, 11008, 20008, 90008, ''),
(70139, 11008, 20008, 90008, ''),
(70138, 11008, 20008, 90008, '?'),
(70137, 11008, 20008, 90008, ''),
(70136, 11008, 20008, 90008, '?');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msgNo`),
  ADD KEY `workNo` (`workNo`);

--
-- 在傾印的資料表使用自動增長(AUTO_INCREMENT)
--

--
-- 使用資料表自動增長(AUTO_INCREMENT) `message`
--
ALTER TABLE `message`
  MODIFY `msgNo` int(11) NOT NULL AUTO_INCREMENT COMMENT '留言編號', AUTO_INCREMENT=70141;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
