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
-- 資料表結構 `custprod`
--

CREATE TABLE `custprod` (
  `workNo` int(5) NOT NULL,
  `memId` int(10) NOT NULL,
  `prodPrice` varchar(4) NOT NULL,
  `imgPath` varchar(50) NOT NULL,
  `prodName` varchar(5) NOT NULL,
  `attend` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `custprod`
--

INSERT INTO `custprod` (`workNo`, `memId`, `prodPrice`, `imgPath`, `prodName`, `attend`) VALUES
(11001, 0, '200', 'scss/img/contest/basket.png', '想買', 0),
(11002, 0, '200', 'scss/img/contest/basket.png', '想吃', 1),
(11003, 0, '200', 'scss/img/contest/basket.png', '想贏', 1),
(11004, 0, '200', 'scss/img/contest/basket.png', '不能輸', 1),
(11005, 0, '200', 'scss/img/contest/basket.png', '有!', 1),
(11006, 0, '200', 'scss/img/contest/basket.png', '我最美', 1),
(11007, 0, '200', 'scss/img/contest/basket.png', '頭很痛', 1),
(11008, 0, '200', 'scss/img/contest/basket.png', '想哭', 1),
(11037, 90005, '310', 'scss/img/custProd//201907215d34360a799cd.png', 'aaa', 0),
(11036, 90005, '260', 'scss/img/custProd//201907215d34350974cac.png', '66', 0),
(11035, 90005, '410', 'scss/img/custProd//201907215d3401921498e.png', '', 0),
(11034, 90005, '260', 'scss/img/custProd//201907215d33ff33ab44b.png', 'aa', 0),
(11033, 90005, '260', 'scss/img/custProd//201907215d33fe4e441d7.png', '', 0),
(11032, 90005, '290', 'scss/img/custProd//201907215d33fd4aaa2ed.png', '', 0),
(11031, 90005, '260', 'scss/img/custProd//201907215d33fc5e9d29e.png', '', 0),
(11030, 90005, '260', 'scss/img/custProd//201907215d33fbe292dfe.png', '', 0),
(11029, 90005, '200', 'scss/img/custProd//201907215d33fb69647e2.png', '', 0),
(11028, 90005, '260', 'scss/img/custProd//201907215d33fb593d39b.png', '', 0),
(11027, 90005, '410', 'scss/img/custProd//201907215d33fb0465f5a.png', '', 0),
(11026, 90005, '400', 'scss/img/custProd//201907215d33fa327b6ed.png', '讚讚', 0);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `custprod`
--
ALTER TABLE `custprod`
  ADD PRIMARY KEY (`workNo`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `custprod`
--
ALTER TABLE `custprod`
  MODIFY `workNo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11038;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
