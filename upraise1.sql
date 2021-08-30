-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 30, 2021 lúc 04:05 PM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `upraise1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pass_word` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `full_name`, `email`, `pass_word`) VALUES
(1, 'Do Thi Mai Duyen', 'duyen@gmail.com', '123456'),
(3, 'abc', 'admin@gmail.com', '123456555');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(100) NOT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `title`) VALUES
(0, 'news'),
(1, 'condition'),
(2, 'Addmission');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(100) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `img_content` text DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `date_upload` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `summary` text DEFAULT NULL,
  `id_category` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `img_content`, `link`, `date_upload`, `status`, `summary`, `id_category`) VALUES
(1, '10月7日　THE DAILY NNA にアプライズベトナム社長取材記事掲載abc', 'https://upraise.webnode.jp/_files/200000555-8eb538...', '\r\nhttps://upraise.webnode.jp/news/a9%e6%9c%8814%e6%97%a5%e3%80%80%e7%89%a9%e6%b5%81%e3%82%a6%e3%82%a3%e3%83%bc%e3%82%af%e3%83%aa%e3%83%bc%e8%a8%98%e4%ba%8b%e6%8e%b2%e8%bc%89%e3%80%8c%e5%8d%97%e6%97%a5%e6%9c%ac%e9%81%8b%e8%bc%b8%e5%80%89%e5%ba%ab%e3%82%a2%', '2020年09月16日', 'on', '10月12日発行　物流ウィークリー　に弊社記事が掲載されました。 アプライズがベトナム人留学生をサポートインターンシップ制度を活用物流技術と知識習得掲載記事', 0),
(2, '10月7日　THE DAILY NNA にアプライズベトナム社長取材記事掲載abc', 'https://upraise.webnode.jp/_files/200000555-8eb538...', '\r\nhttps://upraise.webnode.jp/news/a9%e6%9c%8814%e6%97%a5%e3%80%80%e7%89%a9%e6%b5%81%e3%82%a6%e3%82%a3%e3%83%bc%e3%82%af%e3%83%aa%e3%83%bc%e8%a8%98%e4%ba%8b%e6%8e%b2%e8%bc%89%e3%80%8c%e5%8d%97%e6%97%a5%e6%9c%ac%e9%81%8b%e8%bc%b8%e5%80%89%e5%ba%ab%e3%82%a2%', '2020年09月16日', 'on', '10月12日発行　物流ウィークリー　に弊社記事が掲載されました。 アプライズがベトナム人留学生をサポートインターンシップ制度を活用物流技術と知識習得掲載記事', 0),
(3, '10月7日　THE DAILY NNA にアプライズベトナム社長取材記事掲載abc', 'https://upraise.webnode.jp/_files/200000555-8eb538...', '\r\nhttps://upraise.webnode.jp/news/a9%e6%9c%8814%e6%97%a5%e3%80%80%e7%89%a9%e6%b5%81%e3%82%a6%e3%82%a3%e3%83%bc%e3%82%af%e3%83%aa%e3%83%bc%e8%a8%98%e4%ba%8b%e6%8e%b2%e8%bc%89%e3%80%8c%e5%8d%97%e6%97%a5%e6%9c%ac%e9%81%8b%e8%bc%b8%e5%80%89%e5%ba%ab%e3%82%a2%', '2020年09月16日', 'on', '10月12日発行　物流ウィークリー　に弊社記事が掲載されました。 アプライズがベトナム人留学生をサポートインターンシップ制度を活用物流技術と知識習得掲載記事', 0),
(4, '10月7日　THE DAILY NNA にアプライズベトナム社長取材記事掲載abc', 'https://upraise.webnode.jp/_files/200000555-8eb538...', '\r\nhttps://upraise.webnode.jp/news/a9%e6%9c%8814%e6%97%a5%e3%80%80%e7%89%a9%e6%b5%81%e3%82%a6%e3%82%a3%e3%83%bc%e3%82%af%e3%83%aa%e3%83%bc%e8%a8%98%e4%ba%8b%e6%8e%b2%e8%bc%89%e3%80%8c%e5%8d%97%e6%97%a5%e6%9c%ac%e9%81%8b%e8%bc%b8%e5%80%89%e5%ba%ab%e3%82%a2%', '2020年09月16日', 'on', '10月12日発行　物流ウィークリー　に弊社記事が掲載されました。 アプライズがベトナム人留学生をサポートインターンシップ制度を活用物流技術と知識習得掲載記事', 0),
(5, '10月7日　THE DAILY NNA にアプライズベトナム社長取材記事掲載abc', 'https://upraise.webnode.jp/_files/200000555-8eb538...', '\r\nhttps://upraise.webnode.jp/news/a9%e6%9c%8814%e6%97%a5%e3%80%80%e7%89%a9%e6%b5%81%e3%82%a6%e3%82%a3%e3%83%bc%e3%82%af%e3%83%aa%e3%83%bc%e8%a8%98%e4%ba%8b%e6%8e%b2%e8%bc%89%e3%80%8c%e5%8d%97%e6%97%a5%e6%9c%ac%e9%81%8b%e8%bc%b8%e5%80%89%e5%ba%ab%e3%82%a2%', '2020年09月16日', 'on', '10月12日発行　物流ウィークリー　に弊社記事が掲載されました。 アプライズがベトナム人留学生をサポートインターンシップ制度を活用物流技術と知識習得掲載記事', 0),
(6, ' 多言語求人情報エントリー', NULL, 'http://upraise.pw/t_entry.php', NULL, NULL, NULL, 1),
(7, ' 外国人採用相談サービス', NULL, 'http://upraise.pw/law.php', NULL, 'text-warning', ' サンプル動画もご覧いただけます', 2),
(8, ' 外国人採用相談サービス', NULL, 'http://upraise.pw/law.php', NULL, 'text-warning', ' サンプル動画もご覧いただけます', 2),
(9, ' 外国人採用相談サービス', NULL, 'http://upraise.pw/law.php', NULL, 'text-warning', ' サンプル動画もご覧いただけます', 2),
(10, ' 外国人採用相談サービス', NULL, 'http://upraise.pw/law.php', NULL, 'text-warning', ' サンプル動画もご覧いただけます', 2),
(11, 'a', 'a', 'a', 'a', 'a', 'a', NULL),
(12, 'a', 'a', 'a', 'a', 'a', 'a', 2),
(19, 'rfdcfrgvfdcvxg', NULL, 'dssdzecddesfxc', NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `register_study`
--

CREATE TABLE `register_study` (
  `id` int(100) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `birthday` varchar(25) DEFAULT NULL,
  `telephone` varchar(25) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `school_name` varchar(255) DEFAULT NULL,
  `education_level` varchar(255) DEFAULT NULL,
  `japanese_level` varchar(255) DEFAULT NULL,
  `time_come` varchar(255) DEFAULT NULL,
  `card` varchar(25) DEFAULT NULL,
  `time_stay` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `register_study`
--

INSERT INTO `register_study` (`id`, `name`, `sex`, `birthday`, `telephone`, `address`, `school_name`, `education_level`, `japanese_level`, `time_come`, `card`, `time_stay`) VALUES
(1, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
(54, '', 'male', '', '', '', '', 'university', 'n1', '', '', ''),
(55, 'b', 'male', 'b', '', 'b', 'b', 'university', 'n1', 'b', 'b', 'b');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_category` (`id_category`);

--
-- Chỉ mục cho bảng `register_study`
--
ALTER TABLE `register_study`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `register_study`
--
ALTER TABLE `register_study`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
