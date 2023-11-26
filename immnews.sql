-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2023-11-26 23:39:47
-- 服务器版本： 10.4.28-MariaDB
-- PHP 版本： 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `immnews`
--

-- --------------------------------------------------------

--
-- 表的结构 `about_page`
--

CREATE TABLE `about_page` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 转存表中的数据 `about_page`
--

INSERT INTO `about_page` (`id`, `title`, `content`, `author`) VALUES
(3, 'art', 'arttttttt', 'Ashley'),
(4, 'art', 'artttt', 'Ashley'),
(5, 'czx', 'csadv', 'vd'),
(6, 'vddngmhj,', 'SGghtjykulifjmhg', 'shGhj');

-- --------------------------------------------------------

--
-- 表的结构 `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `is_featured` tinyint(1) NOT NULL DEFAULT 0,
  `brief_description` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 转存表中的数据 `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `is_featured`, `brief_description`) VALUES
(9, 'ddde', 'fff', 0, ''),
(11, 'dav', 'ahegDFSvbfah', 0, 'sDSVS'),
(12, 'vdaSG', 'aheggrfdvg', 0, 'avdSB'),
(14, 'tsmxh', 'szfaskkjhf', 1, 'znfmryzngf'),
(15, 'davsv', 'ahegDFSvDSVAVACbfah', 0, 'sDSVSsdvafAS\r\n\r\n'),
(16, 'AC', 'ASC', 0, ''),
(17, 'davsv', 'ahegDFSvDSVAVACbfah', 0, 'sDSVSsdvafAS\r\n\r\n'),
(18, 'davsv', 'ahegDFSvDSVAVACbfah', 0, 'sDSVSsdvafAS\r\n\r\n'),
(19, 'davsv', 'ahegDFSvDSVAVACbfah', 0, 'sDSVSsdvafAS\r\n\r\n'),
(20, 'dsv', 'dvszcdga', 0, 'sdv'),
(21, 'vdz', ' zx bfgnsbfdavgshjghsfg', 0, 'zvzagngdgbfs'),
(22, 'vv', 'vz', 0, '');

-- --------------------------------------------------------

--
-- 表的结构 `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `address` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 转存表中的数据 `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `address`) VALUES
(1, 'dfgadf', 'sdafdsa@dsaf.asdf', 'adsfasdasdf', ''),
(11, 'lingxichen', '1250601112@qq.com', '1hjkbxjkbj;', ''),
(12, 'rrgg', 'csadwvwvd@qq.ccdcs', 'asc', ''),
(13, 'rrgg', 'csadwvwvd@qq.ccdcs', 'asc', ''),
(14, 'rrgg', 'csadwvwvd@qq.ccdcs', 'asc', ''),
(15, 's', 'sgg@a.mhg', 'fgg', 'sgsg'),
(16, 'rrggds', 'wvs@dcclk.com', 'dwvsvvdvaqaga', ''),
(17, 's', 'saclka@jdw.com', 'q', 'cccc'),
(18, 's', 'saclka@jdw.com', 'q', 'cccc'),
(19, '', '', '', ''),
(20, 'sf', 'vs@sdv.cos', 'bfgj,yfjgmfxdbz', 'djmhfngbzd,fk.k,h'),
(21, 'sf', 'vs@sdv.cos', 'bfgj,yfjgmfxdbz', 'djmhfngbzd,fk.k,h');

-- --------------------------------------------------------

--
-- 表的结构 `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 转存表中的数据 `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `article_id`) VALUES
(21, 13, 5),
(24, 13, 8),
(26, 13, 4),
(29, 13, 3),
(32, 1, 9);

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `phoneNumber` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `is_admin`, `phoneNumber`) VALUES
(1, 'lingxi chen', '1250601112@qq.com', '123456', 1, '12345678'),
(3, 'John', '12345689@gmail.com', '1029384756', 0, ''),
(20, 'Ashley', 'lingxichen1998@gmail.com', '12345', 0, '');

--
-- 转储表的索引
--

--
-- 表的索引 `about_page`
--
ALTER TABLE `about_page`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `article_id` (`article_id`);

--
-- 表的索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `about_page`
--
ALTER TABLE `about_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用表AUTO_INCREMENT `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- 使用表AUTO_INCREMENT `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- 使用表AUTO_INCREMENT `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- 使用表AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- 限制导出的表
--

--
-- 限制表 `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
