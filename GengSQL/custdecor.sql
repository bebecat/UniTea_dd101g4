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
-- 資料表結構 `custdecor`
--

CREATE TABLE `custdecor` (
  `materialNo` int(5) NOT NULL COMMENT '裝飾素材編號',
  `materialName` varchar(10) NOT NULL COMMENT '素材名稱',
  `imgPath` varchar(50) NOT NULL COMMENT '素材圖片價錢',
  `imgAlt` varchar(20) NOT NULL COMMENT '素材說明',
  `materialPrice` int(5) NOT NULL COMMENT '素材單價',
  `materialClass` varchar(5) NOT NULL COMMENT '素材類別'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `custdecor`
--

INSERT INTO `custdecor` (`materialNo`, `materialName`, `imgPath`, `imgAlt`, `materialPrice`, `materialClass`) VALUES
(43001, '紅啾啾', 'scss/img/Customization/Bow1.png', '1', 10, '1'),
(43002, '黃色太陽', 'scss/img/Customization/Bow2.png', '2', 10, '1'),
(43003, '小紫蝶', 'scss/img/Customization/Bow3.png', '3', 10, '1'),
(43004, '波波綠', 'scss/img/Customization/Bow4.png', '4', 20, '1'),
(43005, '藍絲絨', 'scss/img/Customization/Bow5.png', '5', 20, '1'),
(43006, '粉紅佳人', 'scss/img/Customization/Bow6.png', '6', 20, '1'),
(43007, '咖啡豆', 'scss/img/Customization/Bow7.png', '7', 30, '1'),
(43008, '清新紫羅蘭', 'scss/img/Customization/Bow8.png', '8', 30, '1'),
(43009, '橙果香氛', 'scss/img/Customization/Bow9.png', '9', 30, '1'),
(43010, '紅啾啾', 'scss/img/Customization/flw10.png', '10', 10, '2'),
(43011, '黃色太陽', 'scss/img/Customization/flw11.png', '11', 10, '2'),
(43012, '小紫蝶', 'scss/img/Customization/flw12.png', '12', 10, '2'),
(43013, '波波綠', 'scss/img/Customization/flw13.png', '13', 20, '2'),
(43014, '藍絲絨', 'scss/img/Customization/flw14.png', '14', 20, '2'),
(43015, '粉紅佳人', 'scss/img/Customization/flw15.png', '15', 20, '2'),
(43016, '咖啡豆', 'scss/img/Customization/flw16.png', '16', 30, '2'),
(43017, '清新紫羅蘭', 'scss/img/Customization/flw17.png', '17', 30, '2'),
(43018, '橙果香氛', 'scss/img/Customization/flw18.png', '18', 30, '2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
