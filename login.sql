-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2015-08-11: 14:14:22
-- 伺服器版本: 5.6.24
-- PHP 版本： 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫： `s13113241`
--

-- --------------------------------------------------------

--
-- 資料表結構 `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `NO` int(6) NOT NULL,
  `username` char(20) CHARACTER SET utf8 NOT NULL,
  `passwd` char(50) CHARACTER SET utf8 NOT NULL,
  `tel` char(12) CHARACTER SET utf8 NOT NULL,
  `adds` varchar(20) CHARACTER SET utf8 NOT NULL,
  `other` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `login`
--

INSERT INTO `login` (`NO`, `username`, `passwd`, `tel`, `adds`, `other`) VALUES
(18, 's13113241', '511b791399e91c3db0aff3511580f965', '0912345678', '123', '456'),
(22, '123', '202cb962ac59075b964b07152d234b70', '123', '123', '123'),
(23, '456', '250cf8b51c773f3f8dc8b4be867a9a02', '456', '456', '456456');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`NO`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `login`
--
ALTER TABLE `login`
  MODIFY `NO` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
