-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1:3306
-- 產生時間： 2019-07-21 09:26:53
-- 伺服器版本: 5.7.23
-- PHP 版本： 7.2.10

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
-- 資料表結構 `officialprod`
--

DROP TABLE IF EXISTS `officialprod`;
CREATE TABLE IF NOT EXISTS `officialprod` (
  `ProdNo` int(5) NOT NULL COMMENT '官方商品編號',
  `ProdName` varchar(5) NOT NULL COMMENT '商品名稱',
  `ProdPrice` int(4) NOT NULL COMMENT '商品價錢',
  `PicPath` varchar(50) NOT NULL COMMENT '圖片路徑',
  `ProdDesc` varchar(100) NOT NULL COMMENT '商品敘述',
  `prodType` varchar(10) NOT NULL COMMENT 'cook_餐具,pd_籃子,mat_巾',
  `prodPopular` tinyint(1) NOT NULL COMMENT '1是推薦',
  PRIMARY KEY (`ProdNo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `officialprod`
--

INSERT INTO `officialprod` (`ProdNo`, `ProdName`, `ProdPrice`, `PicPath`, `ProdDesc`, `prodType`, `prodPopular`) VALUES
(10001, '超好砧板板', 300, 'scss/img/pdImg/pd/cook2-1-trans.png', '材質:楓木<br>尺寸:40x20cm', 'cook', 1),
(10002, '野餐好叉叉', 100, 'scss/img/pdImg/pd/cook3-1-trans.png', '材質:楓木<br>尺寸:12x4cm', 'cook', 0),
(10003, '野餐湯匙匙', 100, 'scss/img/pdImg/pd/cook5-1-trans.png', '材質:楓木<br>尺寸:12x4cm', 'cook', 0),
(10004, '野餐好木碗', 280, 'scss/img/pdImg/pd/cook4-1-trans.png', '材質:楓木<br>尺寸:35x25cm', 'cook', 0),
(10005, '絕對好托盤', 310, 'scss/img/pdImg/pd/cook1-2-trans.png', '材質:楓木<br>尺寸:40x40cm', 'cook', 0),
(10006, '可愛夾鏈袋', 100, 'scss/img/pdImg/pd/pd5-1-trans.png', '材質:環保塑膠<br>尺寸:30x20cm', 'pd', 0),
(10007, '水果專籃籃', 400, 'scss/img/pdImg/pd/pd1-1-trans.png', '材質:草編<br>尺寸:40x30cm', 'pd', 0),
(10008, '糖果專籃籃', 100, 'scss/img/pdImg/pd/pd3-1-trans.png', '材質:草編<br>尺寸:20x5cm', 'pd', 0),
(10009, '麵包專籃籃', 220, 'scss/img/pdImg/pd/pd2-1-trans.png', '材質:草編<br>尺寸:50x40cm', 'pd', 0),
(10010, '餅乾專籃籃', 100, 'scss/img/pdImg/pd/pd4-1-trans.png', '材質:草編<br>尺寸:25x20cm', 'pd', 0),
(10011, '綠綠野餐墊', 450, 'scss/img/pdImg/pd/mat1-1-trans.png', '材質:防水布<br>尺寸:350x350cm', 'mat', 0),
(10012, '藍藍野餐墊', 450, 'scss/img/pdImg/pd/mat2-1-trans.png', '材質:防水布<br>尺寸:350x350cm', 'mat', 0),
(10013, '黃黃野餐墊', 450, 'scss/img/pdImg/pd/mat3-1-trans.png', '材質:防水布<br>尺寸:350x350cm', 'mat', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
