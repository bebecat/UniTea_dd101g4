-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 
-- 伺服器版本： 8.0.15
-- PHP 版本： 7.3.7

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
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `memId` int(10) NOT NULL COMMENT '會員編號',
  `memName` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '姓名',
  `memPhoto` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '照片',
  `account` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '帳號',
  `password` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '密碼',
  `gender` char(1) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '性別',
  `tel` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '電話',
  `address` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '地址',
  `age` int(11) NOT NULL COMMENT '年齡',
  `birthday` varchar(10) NOT NULL COMMENT '生日',
  `email` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '信箱',
  `memPoints` int(11) NOT NULL COMMENT '點數',
  `AccStatus` tinyint(1) NOT NULL COMMENT '帳號狀態',
  `CreateDate` date NOT NULL COMMENT '建立日期',
  `lastModiDate` date NOT NULL COMMENT '修改日期'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `member`
--

INSERT INTO `member` (`memId`, `memName`, `memPhoto`, `account`, `password`, `gender`, `tel`, `address`, `age`, `birthday`, `email`, `memPoints`, `AccStatus`, `CreateDate`, `lastModiDate`) VALUES
(90001, '小K', '', 'test', 'test', '1', '0985585141', '桃園市中央路28號', 24, '1991-10-10', 'yes111@gmail.com', 10000000, 1, '2019-07-07', '2019-07-07'),
(90002, '小耿', '', '123', '123', '1', '0985585141', '桃園市中央路28號', 24, '1991-10-10', 'yes111@gmail.com', 2000000, 1, '2019-07-07', '2019-07-07'),
(90003, '小歐', '', '321', '321', '1', '0985585141', '桃園市中央路28號', 24, '1991-10-10', 'yes111@gmail.com', 3000000, 1, '2019-07-07', '2019-07-07'),
(90004, '小燕', '', '000', '000', '1', '0985585141', '桃園市中央路28號', 24, '1991-10-10', 'yes111@gmail.com', 4000000, 1, '2019-07-07', '2019-07-07'),
(90005, '小偉', '', '666', '666', '1', '0985585141', '桃園市中央路28號', 24, '1991-10-10', 'yes111@gmail.com', 5000000, 1, '2019-07-07', '2019-07-07'),
(90006, '小be', '', '777', '777', '1', '0985585141', '桃園市中央路28號', 24, '1991-10-10', 'yes111@gmail.com', 6000000, 1, '2019-07-07', '2019-07-07');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`memId`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `member`
--
ALTER TABLE `member`
  MODIFY `memId` int(10) NOT NULL AUTO_INCREMENT COMMENT '會員編號', AUTO_INCREMENT=90007;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
