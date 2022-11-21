-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-11-14 15:07:11
-- 伺服器版本： 10.4.20-MariaDB
-- PHP 版本： 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `topic`
--

-- --------------------------------------------------------

--
-- 資料表結構 `article`
--

CREATE TABLE `article` (
  `id` varchar(100) NOT NULL,
  `articleID` tinyint(100) NOT NULL,
  `writer` varchar(100) NOT NULL,
  `abstract` varchar(100) NOT NULL,
  `filee` longblob NOT NULL,
  `articlename` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `comments` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `invitationdate` varchar(100) NOT NULL,
  `deadline` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `article`
--

INSERT INTO `article` (`id`, `articleID`, `writer`, `abstract`, `filee`, `articlename`, `category`, `comments`, `state`, `invitationdate`, `deadline`) VALUES
('2', 2, '2', '2', '', '2', '', '', '完成評閱', '', '2022-11-01 15:26:40'),
('3', 3, '3', '3', '', '', '3', '', '完成評閱', '', '2022-11-01 15:26:54'),
('11', 11, '11', '11', '', '11', '11', '', '評閱中', '', '2022-11-01 15:25:17'),
('12', 12, '12', '12', '', '12', '', '', '修改後評閱', '', '2022-11-01 15:25:47'),
('132', 15, '132', '465', '', '123', '', '', '待評閱', '', '2022-11-01 15:24:16'),
('', 105, 'x', 'x', '', 'x', '', '', '待評閱', '', '0000-00-00 00:00:00'),
('', 106, 'sad', 'ijjjjjj', '', 'dfddgzddf', '教育類', '', '尚未分派', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- 資料表結構 `assigning`
--

CREATE TABLE `assigning` (
  `articleID` tinyint(100) NOT NULL,
  `value` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `reply` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `selection`
--

CREATE TABLE `selection` (
  `articleID` tinyint(100) NOT NULL,
  `稿件評論狀態` varchar(100) NOT NULL,
  `是否符合主題？` varchar(100) NOT NULL,
  `論文是否具有參考價值` varchar(100) NOT NULL,
  `論文長度` varchar(100) NOT NULL,
  `論文內容的質量` varchar(100) NOT NULL,
  `實驗評估` varchar(100) NOT NULL,
  `技術正確性` varchar(100) NOT NULL,
  `論文獨創性` varchar(100) NOT NULL,
  `論文的完整度` varchar(100) NOT NULL,
  `論文插圖質量` varchar(100) NOT NULL,
  `參考文獻的充分性` varchar(100) NOT NULL,
  `評論結果` varchar(100) NOT NULL,
  `給作者的意見說明` varchar(800) NOT NULL,
  `userid` tinyint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `selection`
--

INSERT INTO `selection` (`articleID`, `稿件評論狀態`, `是否符合主題？`, `論文是否具有參考價值`, `論文長度`, `論文內容的質量`, `實驗評估`, `技術正確性`, `論文獨創性`, `論文的完整度`, `論文插圖質量`, `參考文獻的充分性`, `評論結果`, `給作者的意見說明`, `userid`) VALUES
(0, '', '非常符合', '無參考價值', '需延長請在下方說明', '一般', '有限但令人信服', '部分正確', '一般', '非常符合', '一般', '參考文獻有一些遺漏(請在下方說明)', '拒絕', '', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `id` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `tel` varchar(100) NOT NULL,
  `identity` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`id`, `pwd`, `name`, `mail`, `tel`, `identity`) VALUES
('1', '1', '1', '1', '1', '1');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`articleID`),
  ADD KEY `id` (`id`);

--
-- 資料表索引 `assigning`
--
ALTER TABLE `assigning`
  ADD PRIMARY KEY (`articleID`,`value`);

--
-- 資料表索引 `selection`
--
ALTER TABLE `selection`
  ADD PRIMARY KEY (`articleID`),
  ADD KEY `userid` (`userid`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `article`
--
ALTER TABLE `article`
  MODIFY `articleID` tinyint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
