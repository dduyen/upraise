-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 25, 2021 lúc 06:32 PM
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
-- Cơ sở dữ liệu: `upraise`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass_word` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `email`, `pass_word`) VALUES
(1, 'dtmduyen', 'duyen@gmail.com', '123456'),
(2, 'Duyên Duyen', '1851061342@e.tlu.edu.vn', '1234567');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(100) NOT NULL,
  `title` text DEFAULT NULL,
  `img_content` text NOT NULL,
  `link` text DEFAULT NULL,
  `date_upload` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `summary` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `img_content`, `link`, `date_upload`, `status`, `summary`) VALUES
(2, '10月7日　THE DAILY NNA にアプライズベトナム社長取材記事掲載abc\r\n', 'https://upraise.webnode.jp/_files/200000555-8eb538eb56/20201007.pdf?_ga=2.103629829.40607833.1621544585-602498693.1619483259', 'https://upraise.webnode.jp/news/a10%e6%9c%887%e6%97%a5%e3%80%80the-daily-nna-%e3%81%ab%e3%82%a2%e3%83%97%e3%83%a9%e3%82%a4%e3%82%ba%e3%83%99%e3%83%88%e3%83%8a%e3%83%a0%e7%a4%be%e9%95%b7%e5%8f%96%e6%9d%90%e8%a8%98%e4%ba%8b%e6%8e%b2%e8%bc%89/', '2020年10月07日', 'on ', '	\r\n10月12日発行　物流ウィークリー　に弊社記事が掲載されました。 アプライズがベトナム人留学生をサポ...'),
(4, '9月14日　物流ウィークリー記事掲載「南日本運輸倉庫アプライズと合弁会社」', 'https://upraise.webnode.jp/_files/200000557-b3418b341a/200823.pdf', 'https://upraise.webnode.jp/news/a9%e6%9c%8814%e6%97%a5%e3%80%80%e7%89%a9%e6%b5%81%e3%82%a6%e3%82%a3%e3%83%bc%e3%82%af%e3%83%aa%e3%83%bc%e8%a8%98%e4%ba%8b%e6%8e%b2%e8%bc%89%e3%80%8c%e5%8d%97%e6%97%a5%e6%9c%ac%e9%81%8b%e8%bc%b8%e5%80%89%e5%ba%ab%e3%82%a2%e3%83%97%e3%83%a9/', '2020年09月16日', 'on', '	\r\n10月12日発行　物流ウィークリー　に弊社記事が掲載されました。 アプライズがベトナム人留学生をサポ...'),
(5, '10月12日　物流ウィークリー記事掲載　アプライズがベトナム人留学生をサポート4', 'https://upraise.webnode.jp/_files/200000553-893a6893a8/20101301.PDF', 'https://upraise.webnode.jp/news/a10%e6%9c%8812%e6%97%a5%e3%80%80%e7%89%a9%e6%b5%81weekly%e3%81%ab%e8%a8%98%e4%ba%8b%e3%81%8c%e6%8e%b2%e8%bc%89%e3%81%95%e3%82%8c%e3%81%be%e3%81%97%e3%81%9f/', '2020年10月12日 11:46', 'on', '10月12日発行　物流ウィークリー　に弊社記事が掲載されました。 アプライズがベトナム人留学生をサポートインターンシップ制度を活用物流技術と知識習得掲載記事'),
(6, '10月12日　物流ウィークリー記事掲載　アプライズがベトナム人留学生をサポート5', 'https://upraise.webnode.jp/_files/200000558-d47efd47f1/Confirmation%20of%20changing%20business%20lines_UpraiseVN_200327.pdf', 'https://upraise.webnode.jp/news/a10%e6%9c%8812%e6%97%a5%e3%80%80%e7%89%a9%e6%b5%81weekly%e3%81%ab%e8%a8%98%e4%ba%8b%e3%81%8c%e6%8e%b2%e8%bc%89%e3%81%95%e3%82%8c%e3%81%be%e3%81%97%e3%81%9f/', '2020年10月12日 11:46', 'on', '10月12日発行　物流ウィークリー　に弊社記事が掲載されました。 アプライズがベトナム人留学生をサポートインターンシップ制度を活用物流技術と知識習得掲載記事'),
(7, '10月12日　物流ウィークリー記事掲載　アプライズがベトナム人留学生をサポート6', 'https://upraise.webnode.jp/_files/200000553-893a6893a8/20101301.PDF', 'https://upraise.webnode.jp/news/a10%e6%9c%8812%e6%97%a5%e3%80%80%e7%89%a9%e6%b5%81weekly%e3%81%ab%e8%a8%98%e4%ba%8b%e3%81%8c%e6%8e%b2%e8%bc%89%e3%81%95%e3%82%8c%e3%81%be%e3%81%97%e3%81%9f/', '2020年10月12日 11:46', 'on', '10月12日発行　物流ウィークリー　に弊社記事が掲載されました。 アプライズがベトナム人留学生をサポートインターンシップ制度を活用物流技術と知識習得掲載記事'),
(8, '10月12日　物流ウィークリー記事掲載　アプライズがベトナム人留学生をサポート7', 'https://upraise.webnode.jp/_files/200000553-893a6893a8/20101301.PDF', 'https://upraise.webnode.jp/news/a10%e6%9c%8812%e6%97%a5%e3%80%80%e7%89%a9%e6%b5%81weekly%e3%81%ab%e8%a8%98%e4%ba%8b%e3%81%8c%e6%8e%b2%e8%bc%89%e3%81%95%e3%82%8c%e3%81%be%e3%81%97%e3%81%9f/', '2020年10月12日 11:46', 'on', '10月12日発行　物流ウィークリー　に弊社記事が掲載されました。 アプライズがベトナム人留学生をサポートインターンシップ制度を活用物流技術と知識習得掲載記事'),
(9, '10月12日　物流ウィークリー記事掲載　アプライズがベトナム人留学生をサポート8', 'https://upraise.webnode.jp/_files/200000553-893a6893a8/20101301.PDF', 'https://upraise.webnode.jp/news/a10%e6%9c%8812%e6%97%a5%e3%80%80%e7%89%a9%e6%b5%81weekly%e3%81%ab%e8%a8%98%e4%ba%8b%e3%81%8c%e6%8e%b2%e8%bc%89%e3%81%95%e3%82%8c%e3%81%be%e3%81%97%e3%81%9f/', '2020年10月12日 11:46', 'on', '10月12日発行　物流ウィークリー　に弊社記事が掲載されました。 アプライズがベトナム人留学生をサポートインターンシップ制度を活用物流技術と知識習得掲載記事'),
(10, '10月12日　物流ウィークリー記事掲載　アプライズがベトナム人留学生をサポート9', 'https://upraise.webnode.jp/_files/200000553-893a6893a8/20101301.PDF', 'https://upraise.webnode.jp/news/a10%e6%9c%8812%e6%97%a5%e3%80%80%e7%89%a9%e6%b5%81weekly%e3%81%ab%e8%a8%98%e4%ba%8b%e3%81%8c%e6%8e%b2%e8%bc%89%e3%81%95%e3%82%8c%e3%81%be%e3%81%97%e3%81%9f/', '2020年10月12日 11:46', 'on ', '10月12日発行　物流ウィークリー　に弊社記事が掲載されました。 アプライズがベトナム人留学生をサポートインターンシップ制度を活用物流技術と知識習得掲載記事'),
(11, '10月12日　物流ウィークリー記事掲載　アプライズがベトナム人留学生をサポート10', 'https://upraise.webnode.jp/_files/200000553-893a6893a8/20101301.PDF', 'https://upraise.webnode.jp/news/a10%e6%9c%8812%e6%97%a5%e3%80%80%e7%89%a9%e6%b5%81weekly%e3%81%ab%e8%a8%98%e4%ba%8b%e3%81%8c%e6%8e%b2%e8%bc%89%e3%81%95%e3%82%8c%e3%81%be%e3%81%97%e3%81%9f/', '2020年10月12日 11:46', 'on', '10月12日発行　物流ウィークリー　に弊社記事が掲載されました。 アプライズがベトナム人留学生をサポートインターンシップ制度を活用物流技術と知識習得掲載記事'),
(41, 'a', 'a', 'a', 'a', 'off', 'a');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
