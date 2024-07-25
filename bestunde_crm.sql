-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 25, 2024 at 02:59 PM
-- Server version: 5.7.23-23
-- PHP Version: 8.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bestunde_crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` char(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `abn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bsb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `image`, `status`, `abn`, `account_name`, `account_no`, `bsb`, `created_at`, `updated_at`) VALUES
(1, 'douglas', 'Atcheson', 'admin@admin.com', '$2y$10$wlY3GdkyBUdN9HIMPrdAP.TwAswxMSs5Pn8j0mhNJ1q273Y72/3Lq', NULL, NULL, 'active', '55109640716', 'Astola P/L', '122779', '032 090', NULL, '2024-07-14 10:28:04'),
(3, 'Admin', 'cc', 'admin@gmail.com', '$2y$10$Mr5WotNEiEtzXCp6jKhAv.Obf9mUqQldugd.yyrTt/ggl2jZ7Rk1C', NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2024-05-12 23:49:05', '2024-05-12 23:49:05');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `contact_date` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `site_url`, `business_name`, `message`, `status`, `contact_date`, `created_at`, `updated_at`) VALUES
(501, 'Tamal Das', 'p3.tamal95@gmail.com', '0000000000', NULL, 'Test', 'While constructing or renovating buildings and structures, the foundation needs to be strong enough to hold the structure steadily and evenly.', 'active', '2024-05-24 11:10:48', '2024-05-30 23:27:34', '2024-05-30 23:27:34'),
(502, 'Test Name', 'abirkumar6@gmail.com', '4545454151', NULL, 'Jevy', 'cxbvcxvcxv', 'active', '2024-05-24 11:13:57', '2024-05-30 23:27:34', '2024-05-30 23:27:34'),
(503, 'Test Name', 'test@gmail.com', '45354343', NULL, 'Jevy', '', 'active', '2024-05-24 11:14:14', '2024-05-30 23:27:34', '2024-05-30 23:27:34'),
(504, 'Test Name', 'test@gmail.com', '5434535', 'https://www.bestunderpinning.com.au', 'test', '', 'active', '2024-05-24 11:20:06', '2024-05-30 23:27:34', '2024-05-30 23:27:34'),
(505, 'Janelle Trimboli', 'janelle.trimboli@syd.catholic.edu.au', '0434409688', 'https://www.bestunderpinning.com.au', '', 'Hi there, \r\nDo you do double brick retaining walls?\r\nKind regards,\r\nJanelle', 'active', '2024-05-25 05:58:28', '2024-05-30 23:27:34', '2024-05-30 23:27:34'),
(506, 'Mike Lawman Mike Lawman', 'mikeaccext@gmail.com', '82211229541', 'https://www.bestunderpinning.com.au', NULL, 'Hi there \r\n \r\nJust checked your bestunderpinning.com.au baclink profile, I noticed a moderate percentage of toxic links pointing to your website \r\n \r\nWe will investigate each link for its toxicity and perform a professional clean up for you free of charge. \r\n \r\nStart recovering your ranks today: \r\nhttps://www.hilkom-digital.de/professional-linksprofile-clean-up-service/ \r\n \r\nRegards \r\nMike Lawman\r\nHilkom Digital SEO Experts \r\nhttps://www.hilkom-digital.de/', 'active', '2024-05-27 10:26:07', '2024-05-30 23:27:34', '2024-05-30 23:27:34'),
(507, 'MildredKar MildredKarFH', 'b.r.i.an.n.amc.kenz.ie.4.5.9.7.@gmail.com', '88585266377', 'https://www.bestunderpinning.com.au', NULL, 'Protect Your Business\' Organization with Professional-Quality Commercial Surveillance Systems \r\n \r\nOperating a company and require monitoring choices that can match your demands? Bring in organization level professional protection cameras the robust choice for securing your resources and maintaining workplace security. With features including high definition imaging, cutting-edge analysis, and distant management capabilities, these cameras supply complete coverage and scalability for enterprises of all scales. Imagine owning the potential to observe many regions, deter theft and vandalism, and augment employee effectiveness with a individual monitoring system. \r\n \r\nContemplate The Bosch AUTODOME IP 4000i PTZ Network Camera, an business-level camera developed for challenging commercial settings. Whether or not you\'re protecting shopping stores, watching over warehouses, or overseeing manufacturing facilities, this camera offers unsurpassed functioning and dependability. Upgrade to enterprise-grade advertisement home security cameras now and protect your company with assurance. \r\n \r\n \r\n \r\nIndoor Wireless Security Home CCTV Surveillance Camera \r\n \r\nIntroducing Protection Procedures and The Subsequent Phase 06_4f69', 'active', '2024-05-28 03:27:15', '2024-05-30 23:27:34', '2024-05-30 23:27:34'),
(508, 'Laura Kwok', 'laurakwok5@gmail.com', '0404744448', 'https://www.bestunderpinning.com.au', NULL, 'Over excavation and undermine of lower foundation stones has occurred.  Foundation is loose sand.  Foundation walls need to be reinforced.', 'active', '2024-05-28 04:49:48', '2024-05-30 23:27:34', '2024-05-30 23:27:34'),
(509, 'Carmelaodono CarmelaodonoBM', 'm.at.t.h.ewth.ee.ner.gym.a.n.@gmail.com', '89211848836', 'https://www.bestunderpinning.com.au', NULL, 'Matthew Michael D\'Agati acts as the founder of RW, a alternative energy Firm in Massachusetts. \r\n \r\nA handful of yrs ago, venturing into a leap of faith, Matthew D\'Agati ventured into the realm of solar, then in a short moments began successfully selling megawatts of power, mainly over the business industry, partnering with developers of solar farms and local businesses in the \"architecture\" of his or her ideas. \r\n \r\nContinuous networks in to the markets, guided Matthew to join up with a town startup 2 decades in the past, and within a short time, he assumed the role of their Chief Strategy Officer, overseeing all functioning and companies evolution, in addition to being offered minority control. \r\n \r\nThrough specific relationships and shear services principles, Matt D\'Agati brought that business from a modest starting-year sales to more than a two hundred% improve in general income by spring two. On that premise, RW, a warhorse-purchased company, was created with the charge of creating renewable fuel tips for an intelligent and more supportable future. \r\n \r\nMost specifically, understanding there is an untapped market in the market place and an improved approach to hit websites, RW’s is one of a select number of manufactures in the United States to really concentrate on prospect transferred property, concentrating in both advertisement and domestic solar run park off-take. A dream is to setup a profits facilities on a local, regional, national level, offering numerous sustainable electric products through the  of RW. \r\n \r\nThis dedication in that alternative sector continues to shake and drive Matt in continuing his chase to work with companies that use the equal  of selling eco-friendly vitality treatment options for a increased lasting destiny. Matt brings their  in companies from Hesser College. \r\n \r\nExperience Bella Milano Pizzeria as endorsed from Matt D\'Agati.', 'active', '2024-05-28 09:39:13', '2024-05-30 23:27:34', '2024-05-30 23:27:34'),
(510, 'souvik pal', 's@gmail.com', '123456789', 'https://www.bestunderpinning.com.au', 'abc_abc', 'gfhjdgfsdhfgdshfdshfjhdsfjhdsf', 'active', '2024-05-28 10:46:00', '2024-05-30 23:27:34', '2024-05-30 23:27:34'),
(511, 'souvik pal', 's@gmail.com', '123456789', 'https://www.bestunderpinning.com.au', 'abc_abc', 'sxsdsdaftdsgtdrfg', 'active', '2024-05-28 10:50:49', '2024-05-30 23:27:34', '2024-05-30 23:27:34'),
(512, 'souvik g', 's@gmail.com', '11234567898', 'https://www.bestunderpinning.com.au', 'abc_abcdsfdfdfdf', 'fdffdfdfdfde', 'active', '2024-05-28 11:04:52', '2024-05-30 23:27:34', '2024-05-30 23:27:34'),
(513, 'souvik pal', 's@gmail.com', '123456789', 'https://www.bestunderpinning.com.au', 'abc_abc', 'dfdfdfdfd', 'active', '2024-05-28 11:05:55', '2024-05-30 23:27:34', '2024-05-30 23:27:34'),
(514, 'sakkhor pal', 's@gmail.com', '123456789', 'https://www.bestunderpinning.com.au', 'abc_abc', 'fddddddddddddddddddddddd', 'active', '2024-05-28 11:09:38', '2024-05-30 23:27:34', '2024-05-30 23:27:34'),
(515, 'CharlieHem CharlieHemUI', 'matipe.smi.th@gmail.com', '88178446192', 'https://www.bestunderpinning.com.au', NULL, 'You want to earn free cryptocurrency - it\'s easy to do by simply clicking on the screen of your phone, follow the link and join millions of users https://tinyurl.com/3u45x2kw', 'active', '2024-05-28 15:02:27', '2024-05-30 23:27:34', '2024-05-30 23:27:34'),
(516, 'WilliamdaR WilliamdaRQO', 'av.is.o.574.323@gmail.com', '85721884999', 'https://www.bestunderpinning.com.au', NULL, 'Register an account on Bybit and receive exclusive rewards with the Bybit referral program! Additionally, get a bonus of up to 6,045 USDT using the link - https://tinyurl.com/bddw5ye7', 'active', '2024-05-29 07:21:58', '2024-05-30 23:27:34', '2024-05-30 23:27:34'),
(517, 'sam cooper', 'sam@gmail.com', '987654323336', 'https://www.bestunderpinning.com.au', '', 'test', 'active', '2024-05-30 09:47:32', '2024-05-30 23:27:34', '2024-05-30 23:27:34'),
(518, 'AnthonyDus AnthonyDusGI', 'alekseyandodtv@outlook.com', '85819768726', 'https://www.bestunderpinning.com.au', NULL, 'В Иркутске школьник на спор проглотил магниты. \r\n12-летний мальчик попал в больницу с подозрением на инородное тело в желудке. Выяснилось, что он поспорил с друзьями и длительное время глотал магнитные шарики. Хирургам пришлось делать открытую операцию, чтобы извлечь их. \r\n \r\nhttps://www.google.com/search?q=2krn+sitehttpsxn--krakn4-l4a.com&client=firefox-b-d&sca_esv=2e47e62a151241ca&sca_upv=1&ei=ht1IZpP5LILq7_UP--a26AQ&udm=&ved=0ahUKEwiT1OSx1ZeGAxUC9bsIHXuzDU0Q4dUDCBA&oq=2krn+sitehttpsxn--krakn4-l4a.com&gs_lp=Egxnd3Mtd2l6LXNlcnAiJDJrcm4gc2l0ZTpodHRwczovL3huLS1rcmFrbjQtbDRhLmNvbUiFB1DQAVjQAXABeACQAQCYAZkBoAGZAaoBAzAuMbgBDMgBAPgBAfgBApgCAKACAKgCAJgDApIHAKAHLQ&sclient=gws-wiz-serp', 'active', '2024-05-30 16:51:47', '2024-05-30 23:27:34', '2024-05-30 23:27:34'),
(519, 'JoshuaLek JoshuaLekMG', 'm0.325.7.73.1@gmail.com', '85775711458', 'https://www.bestunderpinning.com.au', NULL, 'play, win, +2,500 coins using our link -    https://tinyurl.com/592dn2td', 'active', '2024-05-30 17:16:50', '2024-05-30 23:27:34', '2024-05-30 23:27:34'),
(520, 'M Paul', 'nirupaul@gmail.com', '0423069417', 'https://www.bestunderpinning.com.au', '', 'Address: Cracks on the wall. \r\n\r\nAddress: 10 Balbeek Ave, Blacktown. NSW 2148.\r\nI have also sent photos in your google email \r\nregards,', 'active', '2024-05-31 03:32:50', '2024-05-30 23:27:34', '2024-05-30 23:27:34'),
(521, 'sam cooper', 'sam@rediff.com', '88997786487', 'https://www.bestunderpinning.com.au', '', 'testing the form', 'active', '2024-05-31 09:03:31', '2024-05-31 03:36:21', '2024-05-31 03:36:21'),
(522, 'Angel Polley', 'angel.polley@gmail.com', '30', 'https://www.bestunderpinning.com.au', 'Angel Polley', 'Hi bestunderpinning.com.au Webmaster.,\r\n\r\nStruggling with low website traffic? I\'m Ozzie, Fiverr\'s ONLY SEO Super Seller with 15+ years of experience.\r\n\r\nI offer a service to create 10+ high-quality backlinks from PR9 authority sites, safe from Google updates. My manual, natural SEO techniques have helped over 70,000 clients improve their domain authority and search engine positions.\r\n\r\nBoost your conversions and traffic today. No need to message before ordering—just click and watch your SEO soar!\r\n\r\nCheck out my gig here: https://www.fiverrseopro.com\r\n\r\nLet\'s make your website work harder for you!\r\n\r\nBest,\r\n\r\nOzzie', 'active', '2024-05-31 09:13:11', '2024-05-31 03:50:59', '2024-05-31 03:50:59');

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `id` bigint(20) NOT NULL,
  `recipient` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `attachments` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`id`, `recipient`, `subject`, `message`, `attachments`, `created_at`, `updated_at`) VALUES
(1, 'souvik.pal@3raredynamics.com', 'TEST', 'TEST TEST', '[\"attachments\\/SciH0fZbPAxPWcWrSDhGP4cz0X4lxN9APkhrXMT8.txt\",\"attachments\\/j5DMnXVQ7vCsy7i2O3RrkpsXC9DcZr6F5qh3RgKt\",\"attachments\\/KHUsijGIq1CCuP37cZT22rlfPHyB9I8zvK5yNzzH\"]', '2024-07-05 10:30:55', '2024-07-05 10:30:55'),
(2, 'souvik.android@gmail.com', 'TEST', 'TEST', '[\"attachments\\/bUCXg0cp8uxJcGRfLoon7Ndda1G08ENd5REIozKt.txt\",\"attachments\\/NH2loQy2ryXK1PN8q753bATxiuLdT7g1I4UtYqDG.pdf\",\"attachments\\/n9l7uKPjB3yG7AJMHtZM0eu3gecKsG4S0UEj5kfO.jpg\"]', '2024-07-05 10:33:20', '2024-07-05 10:33:20'),
(5, 'souvik.android@gmail.com', 'ABC', 'TEST', '[\"attachments\\/v4JQ6gWbz3xZeplTTToHLJBaIkbJwm7rqAUIMY3h.txt\",\"attachments\\/ZXNQkc8kdpghJRCQqzfUwbiz6Vx6o8rKAKO2UKxb.txt\"]', '2024-07-08 04:12:11', '2024-07-08 04:12:11'),
(6, 'souvik.android@gmail.com', 'TEST', 'TEST', '[\"attachments\\/W8VgsumN8c4AGcGW0eCVakuqfcuEjlh3NIN73roB.txt\",\"attachments\\/FV9zVq2SNH7mo5Ydk3ykG4xT7hrcqoIT6TBVRk2F.txt\"]', '2024-07-10 04:44:09', '2024-07-10 04:44:09'),
(7, 'souvik.android@gmail.com', 'TEST', 'TEST', '[\"attachments\\/tBt8PPa9J93aIIhtqqwNmx4fzuFkN49biFEUMwSn.txt\",\"attachments\\/WktdwBrMbrhVq5xhQstLoajSS4Ln7nyviJKMEgq0.txt\"]', '2024-07-10 04:44:16', '2024-07-10 04:44:16'),
(8, 'souvik.android@gmail.com', 'TEST', 'TEST', '[\"attachments\\/gSqFUs5JJebR5HSyfSN9vFfgi7ZmPDyUMC0wlPnM.txt\",\"attachments\\/2YTDx3elOBYV7WrktnOaXKQyN1tJYvPBoEME7J6m.txt\"]', '2024-07-10 04:44:26', '2024-07-10 04:44:26'),
(9, 'souvik.android@gmail.com', 'TEST', 'TEST', '[\"attachments\\/qw0nmNCcI7TWe7RJJMbOjsEdN5gPbf6XBfHBRJGQ.txt\",\"attachments\\/UGEg6KCLaVwA2OylEujnK08z1aKsBpy4EIJNc4Ju.txt\"]', '2024-07-10 04:44:29', '2024-07-10 04:44:29'),
(10, 'souvik.pal@3raredynamics.com', 'TEST', 'TEST', '[\"attachments\\/s5AQtEkpJnCadvV8O1kDljoeI2Rxef1wbzzjVLqE.txt\",\"attachments\\/2jIbnG4AG6O3dlnRoRP5ENDHGrR01kHpTCzEmMp3.txt\"]', '2024-07-11 04:23:19', '2024-07-11 04:23:19'),
(11, 'souvik.android@gmail.com', 'TEST', 'TESTY', '[\"attachments\\/ZFehkdXmmUdrc36ksH7NrQdQZ8C2VG9cBqILYIT2.csv\",\"attachments\\/PoaHfU8qDjhVdKvO8zd9HdQ5MHcXfHrjdI7c8xPa.txt\"]', '2024-07-11 04:24:17', '2024-07-11 04:24:17'),
(12, 'souvik.android@gmail.com', 'TEST', 'TEST', '[null]', '2024-07-11 04:29:24', '2024-07-11 04:29:24'),
(13, 'souvik.android@gmail.com', 'TEST', 'TEST', '[null]', '2024-07-11 04:31:53', '2024-07-11 04:31:53'),
(14, 'souvik.android@gmail.com', 'ABC', 'ABC', '[null]', '2024-07-11 04:33:58', '2024-07-11 04:33:58'),
(15, 'souvik.pal@3raredynamics.com', 'TEST', 'TEST', '[\"attachments\\/PMekzh5mwrVdKvHmtyo23xJMVW8q1Ltl6eIAAzp8.png\",\"attachments\\/5JWWgcZMlY8iiKulvTMJm01jddoAMYmmsgN8hY0k.png\",\"attachments\\/65k6yXuPtEUZBeSVL1xVqwRQK5kd4CBC3QS7zUcH.jpg\"]', '2024-07-14 23:09:47', '2024-07-14 23:09:47'),
(16, 'souvik.android@gmail.com', 'TEST', 'TEST', '[\"attachments\\/8MRa4KSWNYFiwxup1tl3oiXrrY0UXq2qqzDkT8pP.jpg\"]', '2024-07-14 23:11:07', '2024-07-14 23:11:07'),
(17, 'souvik.android@gmail.com', 'TEST', 'TEST', '[null]', '2024-07-14 23:24:10', '2024-07-14 23:24:10'),
(18, 'souvik.pal@3raredynamics.com', 'TEST', 'TEST', '[\"attachments\\/VeAvYqsL5vVnPytX91XQfcgCgxy3qzZYk4GJsRSt.jpg\"]', '2024-07-14 23:25:14', '2024-07-14 23:25:14'),
(19, 'souvik.android@gmail.com', 'TEST', 'TEST', '[\"attachments\\/HrfWxq343rBqKRjMg5WWvjs6G7owsxafSX1nc2G9.png\",\"attachments\\/KbGrDh8ENqMRt4pamAi1IMCcEoeSGQ4Yq3Or7YnH.jpg\"]', '2024-07-14 23:42:31', '2024-07-14 23:42:31'),
(20, 'abir.paul@3raredynamics.com', 'Test', 'Test', '[null]', '2024-07-14 23:45:29', '2024-07-14 23:45:29'),
(21, 'abirkumar6@gmail.com', 'Test', 'Test', '[null]', '2024-07-14 23:50:12', '2024-07-14 23:50:12'),
(22, 'souvik.pal@3raredynamics.com', 'TEST', 'TEST', '[null]', '2024-07-14 23:59:38', '2024-07-14 23:59:38'),
(23, 'souvik.pal@3raredynamics.com', 'TEST', 'TEST', '[\"attachments\\/Dl6a5ojPcSK0y8uTvlHhY1sP3OnuU5E7JhIsTkHY.png\"]', '2024-07-15 00:04:39', '2024-07-15 00:04:39'),
(24, 'souvik.pal@3raredynamics.com', 'TEST', 'TEST', '[\"attachments\\/04qeqCpRZfascInjTpDgFVfov9PMGla7qmvUPzCV.png\"]', '2024-07-15 00:09:08', '2024-07-15 00:09:08'),
(25, 'ron2sou@gmail.com', 'TEST', 'TEST', '[\"attachments\\/3DFTSNTwfDU7QApdGrMD1hO6rQRqJOXGGZrCQc49.png\"]', '2024-07-15 00:19:39', '2024-07-15 00:19:39'),
(26, 'souvik.pal@3raredynamics.com', 'TEST', 'TEST', '[\"attachments\\/N5RHiydR2izxlSfahjj1fmJv92aHdCnOnTa0AJrv.png\"]', '2024-07-15 00:31:13', '2024-07-15 00:31:13'),
(27, 'ron2sou@gmail.com', 'TEST', 'TEST', '[\"attachments\\/qrzJhIZd0OdsEaVj1W2ZfmrekiR3qfG3ydph1BWi.png\"]', '2024-07-15 00:32:19', '2024-07-15 00:32:19'),
(28, 'no-reply@bestunderpinning.com.au', 'TEST', 'TEST', '[\"attachments\\/RNdsbmLmTtCWue1qJguND9expo0k2gQx0KA2HRzU.png\"]', '2024-07-15 00:35:42', '2024-07-15 00:35:42'),
(29, 'no-reply@bestunderpinning.com.au', 'test', 'test', '[null]', '2024-07-15 00:36:05', '2024-07-15 00:36:05'),
(30, 'souvik.pal@3raredynamics.com', 'test', 'test', '[null]', '2024-07-15 00:46:36', '2024-07-15 00:46:36'),
(31, 'souvik.pal@3raredynamics.com', 'test', 'test', '[null]', '2024-07-15 00:53:12', '2024-07-15 00:53:12'),
(32, 'souvik.pal@3raredynamics.com', 'test', 'test', '[null]', '2024-07-15 00:54:56', '2024-07-15 00:54:56'),
(33, 'souvik.pal@3raredynamics.com', 'test', 'test', '[null]', '2024-07-15 00:58:02', '2024-07-15 00:58:02'),
(34, 'siddharth.kanjilal@gmail.com', 'Hello', 'Hi testing it', '[null]', '2024-07-15 01:54:35', '2024-07-15 01:54:35'),
(35, 'itsmesidd@hotmail.com', 'Testing', 'Hello', '[null]', '2024-07-15 02:01:49', '2024-07-15 02:01:49'),
(36, 'siddharth.kanjilal@gmail.com', 'test', 'test', '[null]', '2024-07-16 02:54:53', '2024-07-16 02:54:53');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `future_jobs`
--

CREATE TABLE `future_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_id` bigint(20) UNSIGNED DEFAULT NULL,
  `job_date` date DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `notification` int(11) DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `future_jobs`
--

INSERT INTO `future_jobs` (`id`, `job_no`, `job_id`, `job_date`, `description`, `notification`, `status`, `created_at`, `updated_at`) VALUES
(2, 'ATjcOo', 2, '2024-05-05', 'TEST1', 5, 'active', '2024-05-03 01:07:09', '2024-05-03 01:07:09'),
(3, '7Exgb4', 2, '2024-05-24', 'TEST3', 7, 'active', '2024-05-03 01:07:09', '2024-05-03 01:07:09'),
(4, 'gDLMI1', 2, '2024-05-23', 'HI', 5, 'active', '2024-05-23 05:49:51', '2024-05-23 05:49:51'),
(5, '5Lxtv3', 2, '2024-05-26', 'TEST', 2, 'active', '2024-05-23 22:42:28', '2024-05-23 22:42:28'),
(8, 'ZA2NAj', 6, '2024-06-27', 'sdf', 5, 'active', '2024-06-03 02:37:29', '2024-06-03 02:37:29'),
(9, 'rEEWN8', 6, '2024-06-30', 'sdf2', 4, 'active', '2024-06-03 02:37:29', '2024-06-03 02:37:29'),
(10, 'fO40vW', 7, '2024-06-13', 'fdsfdsfsd', 8, 'active', '2024-06-03 02:41:29', '2024-06-03 02:41:29'),
(11, 'CgxJZd', 8, '2024-06-30', 'xcdfdg', 2, 'active', '2024-06-04 23:04:53', '2024-06-04 23:04:53'),
(12, 'quWTy5', 10, '2024-06-09', 'dfdfdds', 2, 'active', '2024-06-07 00:32:01', '2024-06-07 00:32:01'),
(13, 'YsSXSo', 10, '2024-06-26', 'fghfgfg', 9, 'active', '2024-06-07 00:32:01', '2024-06-07 00:32:01');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` bigint(20) UNSIGNED DEFAULT NULL,
  `future_job_id` bigint(20) UNSIGNED DEFAULT NULL,
  `quote_id` bigint(20) UNSIGNED DEFAULT NULL,
  `invoice_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_send` tinyint(4) NOT NULL DEFAULT '0',
  `invoice_status` enum('mailed','paid','due') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `job_id`, `future_job_id`, `quote_id`, `invoice_no`, `mail_send`, `invoice_status`, `status`, `created_at`, `updated_at`) VALUES
(3, 2, NULL, NULL, '14115/I', 0, 'mailed', 'active', '2024-05-03 01:07:09', '2024-06-04 23:48:01'),
(4, 2, 2, NULL, '68705/I', 0, NULL, 'active', '2024-05-03 01:07:09', '2024-05-03 01:07:09'),
(5, 2, 3, NULL, '34370/I', 0, NULL, 'active', '2024-05-03 01:07:09', '2024-05-03 01:07:09'),
(6, NULL, NULL, 1, '18013/I', 0, NULL, 'active', '2024-05-07 22:49:53', '2024-05-07 22:49:53'),
(7, NULL, NULL, 3, '95369/I', 0, NULL, 'active', '2024-05-07 22:53:02', '2024-05-07 22:53:02'),
(12, NULL, NULL, 3, '32115/I', 0, 'due', 'active', '2024-05-07 23:53:47', '2024-06-05 00:07:27'),
(13, NULL, NULL, 11, '27617/I', 0, NULL, 'active', '2024-05-09 23:47:02', '2024-05-09 23:47:02'),
(14, 2, 4, NULL, '69032/I', 0, NULL, 'active', '2024-05-23 05:49:51', '2024-05-23 05:49:51'),
(15, 2, 5, NULL, '59756/I', 0, NULL, 'active', '2024-05-23 22:42:28', '2024-05-23 22:42:28'),
(16, 3, NULL, NULL, '71192/I', 0, 'paid', 'active', '2024-05-30 04:21:25', '2024-06-05 00:57:00'),
(20, 6, NULL, NULL, '99940/I', 0, NULL, 'active', '2024-06-03 02:37:29', '2024-06-03 02:37:29'),
(21, 6, 8, NULL, '29212/I', 0, NULL, 'active', '2024-06-03 02:37:29', '2024-06-03 02:37:29'),
(22, 6, 9, NULL, '96047/I', 0, NULL, 'active', '2024-06-03 02:37:29', '2024-06-03 02:37:29'),
(24, 7, 10, NULL, '81558/I', 0, 'mailed', 'active', '2024-06-03 02:41:29', '2024-06-04 23:52:36'),
(25, 8, NULL, NULL, '35278/I', 0, 'mailed', 'active', '2024-06-04 23:04:53', '2024-06-04 23:52:20'),
(26, 8, 11, NULL, '32993/I', 0, NULL, 'active', '2024-06-04 23:04:53', '2024-06-04 23:04:53'),
(27, 9, NULL, NULL, '42393/I', 0, 'paid', 'inactive', '2024-06-06 03:05:01', '2024-06-06 23:15:00'),
(28, 10, NULL, NULL, '43202/I', 0, 'mailed', 'active', '2024-06-07 00:32:01', '2024-06-07 04:24:22'),
(29, 10, 12, NULL, '16935/I', 0, 'paid', 'active', '2024-06-07 00:32:01', '2024-06-07 04:24:23'),
(30, 10, 13, NULL, '79988/I', 0, 'due', 'inactive', '2024-06-07 00:32:01', '2024-06-07 04:26:57'),
(31, 11, NULL, NULL, '71617/I', 0, NULL, 'active', '2024-06-13 08:21:36', '2024-06-13 08:21:36'),
(32, 12, NULL, NULL, '93565/I', 0, 'due', 'active', '2024-06-13 08:29:12', '2024-06-13 08:31:01'),
(33, NULL, NULL, 12, '87393/I', 0, NULL, 'active', '2024-06-14 06:08:11', '2024-06-14 06:08:11'),
(34, 13, NULL, NULL, '51797/I', 0, NULL, 'active', '2024-07-02 09:49:20', '2024-07-02 09:49:20'),
(35, 14, NULL, NULL, '66384/I', 0, 'paid', 'inactive', '2024-07-04 09:27:55', '2024-07-16 05:42:44'),
(36, 15, NULL, NULL, '55966/I', 0, NULL, 'active', '2024-07-16 02:51:32', '2024-07-16 02:51:32');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `job_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_date` date DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hours` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gst` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'yes',
  `address` text COLLATE utf8mb4_unicode_ci,
  `site_address` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `future` tinyint(4) NOT NULL DEFAULT '0',
  `notification` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `user_id`, `parent_id`, `job_no`, `area`, `customer_name`, `email`, `phone`, `job_date`, `price`, `quantity`, `hours`, `gst`, `address`, `site_address`, `description`, `comment`, `status`, `future`, `notification`, `created_at`, `updated_at`) VALUES
(2, NULL, NULL, '202405030637091080', NULL, 'Adam', 'sam@gmail.com', '123456789', '2024-05-03', '100', '5', '5', 'yes', 'kolkata\r\nKolkata', NULL, 'TEST', 'TEST', 'active', 0, NULL, '2024-05-03 01:07:09', '2024-05-07 23:44:27'),
(3, NULL, NULL, '1092/J', NULL, 'paul', 'paul@gmail.com', '8785674635', '2024-05-31', '10000', '1', '80', 'yes', 'sydney', NULL, 'underpinning', 'test', 'active', 0, NULL, '2024-05-30 04:21:25', '2024-05-30 04:21:25'),
(6, 82, NULL, '6370/J', NULL, 'Bryanwag BryanwagDB', 'mpve0y96r@mozmail.com', '86867813486', '2024-06-07', '100', '6', '60', 'yes', 'kolkata\r\nKolkata', NULL, 'hdshdshgds', 'sdfdsdsds', 'active', 0, NULL, '2024-06-03 02:37:29', '2024-06-03 02:37:29'),
(7, 82, NULL, '8437/J', NULL, 'Bryanwag BryanwagDB', 'mpve0y96r@mozmail.com', '86867813486', '2024-06-07', '100', '4', '5', 'yes', 'kolkata\r\nKolkata', NULL, 'wfesfsdfg', 'sdfgdsgfdfs', 'active', 0, NULL, '2024-06-03 02:41:29', '2024-06-03 02:41:29'),
(8, 72, NULL, '2244/J', NULL, 'sam cooper', 'sam@rediff.com', '88997786487', '2024-06-05', '100', '7', '6', 'yes', 'kolkata\r\nKolkata', NULL, 'asdfdgfhgjhkjhjkjl', 'zxxzcxvcbvnbmnbm', 'active', 0, NULL, '2024-06-04 23:04:52', '2024-06-04 23:04:52'),
(9, 89, NULL, '7587/J', NULL, 'Andrew Lade', 'andrew.lade1@gmail.com', '0405554818', '2024-06-14', '20000', '1', '200', 'yes', 'wilton park', NULL, 'underpinning', NULL, 'active', 0, NULL, '2024-06-06 03:05:00', '2024-06-06 03:05:00'),
(10, NULL, NULL, '1420/J', NULL, 'ABC', 'abc@abc.com', '123456789', '2024-06-07', '200000', NULL, NULL, 'yes', 'kolkata\r\nKolkata', NULL, 'dsasfssfs', 'sfsfsfsfsfs', 'active', 0, NULL, '2024-06-07 00:32:01', '2024-06-07 00:32:01'),
(11, 100, NULL, '7219/J', NULL, 'Catherine Jones', 'adrianandcatherine@gmail.com', '0423302067', '2024-06-21', '2000', '1', '40', 'yes', 'sydney', NULL, 'underpinning services or basement', NULL, 'active', 0, NULL, '2024-06-13 08:21:36', '2024-06-13 08:21:36'),
(12, 98, NULL, '9484/J', NULL, 'Katrina White', 'katrina@ibankdna.com', '0455105121', '2024-06-21', '5000', '1', '90', 'yes', 'kolkata', 'Kolkata', 'underpinning', NULL, 'active', 0, NULL, '2024-06-13 08:29:12', '2024-06-14 07:52:47'),
(13, 139, NULL, '9206/J', NULL, 'Souvik', 'abc@abc.com', '1234567890', '2024-07-07', '678', NULL, NULL, 'yes', 'kolkata', 'Kolkata', 'tytytyty', 'tytytyt', 'active', 0, NULL, '2024-07-02 09:49:20', '2024-07-02 09:49:20'),
(14, 143, NULL, '1681/J', NULL, 'sam cooper', 'sam@ymail.com', '123456789', '2024-07-12', '90000', '1', '80', 'yes', 'sydney', 'wollongong', 'underpinning', NULL, 'active', 0, NULL, '2024-07-04 09:27:55', '2024-07-04 09:27:55'),
(15, 151, NULL, '2703/J', NULL, 'Robert Faehringer', 'robert.faehringer@outlook.com', '0407670225', '2024-07-27', '100', '4', '6', 'yes', 'sydney', 'sydney cbd', 'underpinning', NULL, 'active', 0, NULL, '2024-07-16 02:51:32', '2024-07-16 22:46:36');

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `site_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_04_15_060133_create_admin_users_table', 1),
(6, '2024_04_15_061313_create_leads_table', 1),
(7, '2024_04_15_070135_create_jobs_table', 2),
(8, '2024_04_16_050304_create_quotes_table', 3),
(10, '2024_04_16_082603_create_suppliers_table', 4),
(11, '2024_04_22_070624_create_site_settings_table', 5),
(12, '2024_04_15_114541_create_future_jobs_table', 6),
(13, '2024_04_16_052921_create_invoices_table', 6),
(14, '2014_10_12_100000_create_password_resets_table', 7),
(17, '2024_05_28_075956_create_contacts_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('admin@admin.com', 'W0uKn0pzBtgi7BFzyiNyTIoUyivkHXayfvpOdIdV6OzcsxEvf5cVtmDlH5e4vyHW', '2024-05-14 04:43:17');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `quote_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quote_date` date DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `site_address` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `invoice_status` enum('no','yes') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`id`, `user_id`, `quote_no`, `area`, `customer_name`, `quote_date`, `price`, `email`, `phone`, `quantity`, `address`, `site_address`, `description`, `comment`, `invoice_status`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, '97946/Q', NULL, 'ABC', '2024-05-08', '100', 's@gmail.com', '123456789', '4', 'kolkata\r\nKolkata', NULL, 'TEST', 'TEST', 'no', 'active', '2024-05-07 22:49:53', '2024-05-07 22:49:53'),
(3, NULL, '77460/Q', NULL, 'ABC', '2024-05-08', '123', 's@gmail.com', '123456', '100', 'kolkata\r\nKolkata', NULL, 'dsdsds', 'dsd', 'yes', 'active', '2024-05-07 22:53:02', '2024-05-07 23:53:47'),
(11, NULL, '57500/Q', NULL, 'Sam', '2024-05-10', '5000', 'sam@gmail.com', '55874563652', '1', 'Merlin', NULL, 'Underpinning', NULL, 'no', 'inactive', '2024-05-09 23:47:02', '2024-06-14 06:18:08'),
(12, 107, '14558/Q', NULL, 'Ron Newton', '2024-06-22', '100', 'redfez@bigpond.com', '0400003643', '5', 'kolkata\r\nKolkata', NULL, 'sdfdfdfzsf', 'dfdfdsfsfsd', 'no', 'active', '2024-06-14 06:08:11', '2024-06-14 06:08:11');

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `light_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright_text` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_text` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_phone` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_whatsapp` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_link` text COLLATE utf8mb4_unicode_ci,
  `abn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bsb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `site_name`, `site_logo`, `light_logo`, `favicon`, `copyright_text`, `footer_text`, `meta_title`, `meta_keyword`, `meta_description`, `site_email`, `site_phone`, `site_whatsapp`, `contact_title`, `address`, `map_link`, `abn`, `account_name`, `account_no`, `bsb`, `created_at`, `updated_at`) VALUES
(1, 'Underpinning CRM', 'public/siteSetting/SKGPdCM6snwLl67EivBIvEOBTn6LkqGnN7LfWfhP.png', 'public/siteSetting/dwFnzn7DOe68Ot6mqVSqex8bbQhT0giz0H8EcuqY.png', 'public/siteSetting/jC4lQie2Y5EXKey9m3N6qaWGt8Pm1Q2HrW7G5PyW.png', 'Copyright © 2021 Poco. All rights reserved.', 'Hand-crafted & made with<i class=\"fa fa-heart\"></i>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-22 11:26:11', '2024-05-23 03:03:30');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `s_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `s_no`, `name`, `business_name`, `business_type`, `address`, `phone`, `email`, `website`, `status`, `created_at`, `updated_at`) VALUES
(2, '96044', 'ABC Suppliers', 'ABC PVT LTD', 'Public', 'kolkata\r\nKolkata', '123456789', 'abc@gmail.com', NULL, 'active', '2024-05-09 05:09:33', '2024-05-09 05:17:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `lead_date` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `phone`, `address`, `area`, `site_url`, `business_name`, `message`, `status`, `lead_date`, `created_at`, `updated_at`) VALUES
(57, 'Tamal Das', NULL, 'p3.tamal95@gmail.com', '0000000000', NULL, NULL, NULL, 'Test', 'While constructing or renovating buildings and structures, the foundation needs to be strong enough to hold the structure steadily and evenly.', 'active', '2024-05-24 11:10:48', '2024-05-31 05:09:35', '2024-05-31 05:09:35'),
(58, 'Test Name', NULL, 'abirkumar6@gmail.com', '4545454151', NULL, NULL, NULL, 'Jevy', 'cxbvcxvcxv', 'active', '2024-05-24 11:13:57', '2024-05-31 05:09:35', '2024-05-31 05:09:35'),
(59, 'Test Name', NULL, 'test@gmail.com', '45354343', NULL, NULL, NULL, 'Jevy', '', 'active', '2024-05-24 11:14:14', '2024-05-31 05:09:35', '2024-05-31 05:09:35'),
(60, 'Janelle Trimboli', NULL, 'janelle.trimboli@syd.catholic.edu.au', '0434409688', NULL, NULL, 'https://www.bestunderpinning.com.au', '', 'Hi there, \r\nDo you do double brick retaining walls?\r\nKind regards,\r\nJanelle', 'active', '2024-05-25 05:58:28', '2024-05-31 05:09:35', '2024-05-31 05:09:35'),
(61, 'Mike Lawman Mike Lawman', NULL, 'mikeaccext@gmail.com', '82211229541', NULL, NULL, 'https://www.bestunderpinning.com.au', NULL, 'Hi there \r\n \r\nJust checked your bestunderpinning.com.au baclink profile, I noticed a moderate percentage of toxic links pointing to your website \r\n \r\nWe will investigate each link for its toxicity and perform a professional clean up for you free of charge. \r\n \r\nStart recovering your ranks today: \r\nhttps://www.hilkom-digital.de/professional-linksprofile-clean-up-service/ \r\n \r\nRegards \r\nMike Lawman\r\nHilkom Digital SEO Experts \r\nhttps://www.hilkom-digital.de/', 'active', '2024-05-27 10:26:07', '2024-05-31 05:09:35', '2024-05-31 05:09:35'),
(62, 'MildredKar MildredKarFH', NULL, 'b.r.i.an.n.amc.kenz.ie.4.5.9.7.@gmail.com', '88585266377', NULL, NULL, 'https://www.bestunderpinning.com.au', NULL, 'Protect Your Business\' Organization with Professional-Quality Commercial Surveillance Systems \r\n \r\nOperating a company and require monitoring choices that can match your demands? Bring in organization level professional protection cameras the robust choice for securing your resources and maintaining workplace security. With features including high definition imaging, cutting-edge analysis, and distant management capabilities, these cameras supply complete coverage and scalability for enterprises of all scales. Imagine owning the potential to observe many regions, deter theft and vandalism, and augment employee effectiveness with a individual monitoring system. \r\n \r\nContemplate The Bosch AUTODOME IP 4000i PTZ Network Camera, an business-level camera developed for challenging commercial settings. Whether or not you\'re protecting shopping stores, watching over warehouses, or overseeing manufacturing facilities, this camera offers unsurpassed functioning and dependability. Upgrade to enterprise-grade advertisement home security cameras now and protect your company with assurance. \r\n \r\n \r\n \r\nIndoor Wireless Security Home CCTV Surveillance Camera \r\n \r\nIntroducing Protection Procedures and The Subsequent Phase 06_4f69', 'active', '2024-05-28 03:27:15', '2024-05-31 05:09:35', '2024-05-31 05:09:35'),
(63, 'Laura Kwok', NULL, 'laurakwok5@gmail.com', '0404744448', NULL, NULL, 'https://www.bestunderpinning.com.au', NULL, 'Over excavation and undermine of lower foundation stones has occurred.  Foundation is loose sand.  Foundation walls need to be reinforced.', 'active', '2024-05-28 04:49:48', '2024-05-31 05:09:35', '2024-05-31 05:09:35'),
(64, 'Carmelaodono CarmelaodonoBM', NULL, 'm.at.t.h.ewth.ee.ner.gym.a.n.@gmail.com', '89211848836', NULL, NULL, 'https://www.bestunderpinning.com.au', NULL, 'Matthew Michael D\'Agati acts as the founder of RW, a alternative energy Firm in Massachusetts. \r\n \r\nA handful of yrs ago, venturing into a leap of faith, Matthew D\'Agati ventured into the realm of solar, then in a short moments began successfully selling megawatts of power, mainly over the business industry, partnering with developers of solar farms and local businesses in the \"architecture\" of his or her ideas. \r\n \r\nContinuous networks in to the markets, guided Matthew to join up with a town startup 2 decades in the past, and within a short time, he assumed the role of their Chief Strategy Officer, overseeing all functioning and companies evolution, in addition to being offered minority control. \r\n \r\nThrough specific relationships and shear services principles, Matt D\'Agati brought that business from a modest starting-year sales to more than a two hundred% improve in general income by spring two. On that premise, RW, a warhorse-purchased company, was created with the charge of creating renewable fuel tips for an intelligent and more supportable future. \r\n \r\nMost specifically, understanding there is an untapped market in the market place and an improved approach to hit websites, RW’s is one of a select number of manufactures in the United States to really concentrate on prospect transferred property, concentrating in both advertisement and domestic solar run park off-take. A dream is to setup a profits facilities on a local, regional, national level, offering numerous sustainable electric products through the  of RW. \r\n \r\nThis dedication in that alternative sector continues to shake and drive Matt in continuing his chase to work with companies that use the equal  of selling eco-friendly vitality treatment options for a increased lasting destiny. Matt brings their  in companies from Hesser College. \r\n \r\nExperience Bella Milano Pizzeria as endorsed from Matt D\'Agati.', 'active', '2024-05-28 09:39:13', '2024-05-31 05:09:35', '2024-05-31 05:09:35'),
(65, 'souvik pal', NULL, 's@gmail.com', '123456789', NULL, NULL, 'https://www.bestunderpinning.com.au', 'abc_abc', 'gfhjdgfsdhfgdshfdshfjhdsfjhdsf', 'active', '2024-05-28 10:46:00', '2024-05-31 05:09:35', '2024-05-31 05:09:35'),
(66, 'CharlieHem CharlieHemUI', NULL, 'matipe.smi.th@gmail.com', '88178446192', NULL, NULL, 'https://www.bestunderpinning.com.au', NULL, 'You want to earn free cryptocurrency - it\'s easy to do by simply clicking on the screen of your phone, follow the link and join millions of users https://tinyurl.com/3u45x2kw', 'active', '2024-05-28 15:02:27', '2024-05-31 05:09:35', '2024-05-31 05:09:35'),
(67, 'WilliamdaR WilliamdaRQO', NULL, 'av.is.o.574.323@gmail.com', '85721884999', NULL, NULL, 'https://www.bestunderpinning.com.au', NULL, 'Register an account on Bybit and receive exclusive rewards with the Bybit referral program! Additionally, get a bonus of up to 6,045 USDT using the link - https://tinyurl.com/bddw5ye7', 'active', '2024-05-29 07:21:58', '2024-05-31 05:09:35', '2024-05-31 05:09:35'),
(68, 'sam cooper', NULL, 'sam@gmail.com', '987654323336', NULL, NULL, 'https://www.bestunderpinning.com.au', '', 'test', 'active', '2024-05-30 09:47:32', '2024-05-31 05:09:35', '2024-05-31 05:09:35'),
(69, 'AnthonyDus AnthonyDusGI', NULL, 'alekseyandodtv@outlook.com', '85819768726', NULL, NULL, 'https://www.bestunderpinning.com.au', NULL, 'В Иркутске школьник на спор проглотил магниты. \r\n12-летний мальчик попал в больницу с подозрением на инородное тело в желудке. Выяснилось, что он поспорил с друзьями и длительное время глотал магнитные шарики. Хирургам пришлось делать открытую операцию, чтобы извлечь их. \r\n \r\nhttps://www.google.com/search?q=2krn+sitehttpsxn--krakn4-l4a.com&client=firefox-b-d&sca_esv=2e47e62a151241ca&sca_upv=1&ei=ht1IZpP5LILq7_UP--a26AQ&udm=&ved=0ahUKEwiT1OSx1ZeGAxUC9bsIHXuzDU0Q4dUDCBA&oq=2krn+sitehttpsxn--krakn4-l4a.com&gs_lp=Egxnd3Mtd2l6LXNlcnAiJDJrcm4gc2l0ZTpodHRwczovL3huLS1rcmFrbjQtbDRhLmNvbUiFB1DQAVjQAXABeACQAQCYAZkBoAGZAaoBAzAuMbgBDMgBAPgBAfgBApgCAKACAKgCAJgDApIHAKAHLQ&sclient=gws-wiz-serp', 'active', '2024-05-30 16:51:47', '2024-05-31 05:09:35', '2024-05-31 05:09:35'),
(70, 'JoshuaLek JoshuaLekMG', NULL, 'm0.325.7.73.1@gmail.com', '85775711458', NULL, NULL, 'https://www.bestunderpinning.com.au', NULL, 'play, win, +2,500 coins using our link -    https://tinyurl.com/592dn2td', 'active', '2024-05-30 17:16:50', '2024-05-31 05:09:35', '2024-05-31 05:09:35'),
(71, 'M Paul', NULL, 'nirupaul@gmail.com', '0423069417', NULL, NULL, 'https://www.bestunderpinning.com.au', '', 'Address: Cracks on the wall. \r\n\r\nAddress: 10 Balbeek Ave, Blacktown. NSW 2148.\r\nI have also sent photos in your google email \r\nregards,', 'active', '2024-05-31 03:32:50', '2024-05-31 05:09:35', '2024-05-31 05:09:35'),
(72, 'sam cooper', NULL, 'sam@rediff.com', '88997786487', NULL, NULL, 'https://www.bestunderpinning.com.au', '', 'testing the form', 'active', '2024-05-31 09:03:31', '2024-05-31 05:09:35', '2024-05-31 05:09:35'),
(73, 'Angel Polley', NULL, 'angel.polley@gmail.com', '30', NULL, NULL, 'https://www.bestunderpinning.com.au', 'Angel Polley', 'Hi bestunderpinning.com.au Webmaster.,\r\n\r\nStruggling with low website traffic? I\'m Ozzie, Fiverr\'s ONLY SEO Super Seller with 15+ years of experience.\r\n\r\nI offer a service to create 10+ high-quality backlinks from PR9 authority sites, safe from Google updates. My manual, natural SEO techniques have helped over 70,000 clients improve their domain authority and search engine positions.\r\n\r\nBoost your conversions and traffic today. No need to message before ordering—just click and watch your SEO soar!\r\n\r\nCheck out my gig here: https://www.fiverrseopro.com\r\n\r\nLet\'s make your website work harder for you!\r\n\r\nBest,\r\n\r\nOzzie', 'active', '2024-05-31 09:13:11', '2024-05-31 05:09:35', '2024-05-31 05:09:35'),
(74, 'souvik pal', NULL, 'smmk@gmail.com', '123456789', NULL, NULL, 'https://www.bestunderpinning.com.au', 'abc_abc', 'djkfhdskjfhdskjfhjkds', 'active', '2024-05-31 10:15:32', '2024-05-31 05:09:35', '2024-05-31 05:09:35'),
(75, 'EvelynLob EvelynLobSG', NULL, 'fightwithhigh@rambler.ru', '87292674326', NULL, NULL, 'https://www.bestunderpinning.com.au', '', 'Запой представляет собой продолжительное, неконтролируемое употребление алкоголя, приводящее к тяжелым физическим и психическим последствиям. Это состояние является одним из наиболее сложных проявлений алкоголизма... \r\nhttp://narko-zakodirovat.ru', 'active', '2024-05-31 12:18:50', '2024-06-02 23:06:29', '2024-06-02 23:06:29'),
(76, 'Minnienoure MinnienoureJX', NULL, 'g.i.n.a.sbee.s53@gmail.com', '86975217374', NULL, NULL, 'https://www.bestunderpinning.com.au', NULL, 'The Craft of Aerial Bot Selfies and How to Shoot Them Like a Expert\r\n\r\nUAV selfies, or \'dronies,\' are a exciting and innovative way to record memorable memories at a unique viewpoint. To perfect the technique of  Unmanned Aerial Vehicle selfies, pilots should think about the setting, illumination, and height to maximize the setup of their images. Using functions like the UAV\'s robotic fly and gesture control can help secure the Unmanned Aerial Vehicle, making it more straightforward to capture focused pictures. Innovative approaches, such as integrating landscapes or snapping dynamic shots, can add a lively aspect to selfies. As Aerial Bot technological innovation evolves, so do the possibilities for enthusiasts to discover unique and artistic ways to record their journeys after the air.\r\n\r\n \r\n \r\n\r\n\r\n\r\n\r\nFoldable Automatic Return Professional Aerial Drone \r\n \r\nDiscovering the Heavens and The Best UAVs for Newbies 0bab480', 'active', '2024-06-01 18:55:24', '2024-06-02 23:06:29', '2024-06-02 23:06:29'),
(77, 'Robertbub RobertbubVZ', NULL, 'inet4747@outlook.com', '81237675145', NULL, NULL, 'https://www.bestunderpinning.com.au', NULL, 'In Etsy, Amazon, eBay, Shopify https://pint77.com Pinterest+SEO +II =  high sales results', 'active', '2024-06-01 20:55:47', '2024-06-02 23:06:29', '2024-06-02 23:06:29'),
(78, 'CharlieHem CharlieHemUI', NULL, 'm.a.tip.e.s.mith@gmail.com', '85975753426', NULL, NULL, 'https://www.bestunderpinning.com.au', NULL, 'You want to earn free cryptocurrency - it\'s easy to do by simply clicking on the screen of your phone, follow the link and join millions of users https://tinyurl.com/3u45x2kw', 'active', '2024-06-01 21:33:49', '2024-06-02 23:06:29', '2024-06-02 23:06:29'),
(79, 'Osvaldofew OsvaldofewZP', NULL, 'morrismi1@outlook.com', '87433575815', NULL, NULL, 'https://www.bestunderpinning.com.au', NULL, 'A remote job opportunity for a Law Firm, the role of a Payment/Deposit Handler. This position involves managing payments and deposits, ensuring accurate processing, and maintaining financial record. This position is only for American citizens living in US. \r\n \r\nJob location:  USA \r\nWeekly wages: $2,150 per week. \r\n \r\nWe are looking for a detail-oriented individual with a good background and no criminal record. \r\n \r\nIf you are interested in joining our team, please send an email to get more details jasonmorrisca@yahoo.com \r\n \r\nRegards.', 'active', '2024-06-02 14:06:16', '2024-06-02 23:06:30', '2024-06-02 23:06:30'),
(80, 'JamesWal JamesWalAC', NULL, 'figuera51@ro.com', '86838484981', NULL, NULL, 'https://www.bestunderpinning.com.au', NULL, 'Заходите и читайте новую статью о сео продвижении https://medium.com/@sviblovaolesa/seo-trends-for-2024-what-you-need-to-know-50d311e5dfbb', 'active', '2024-06-02 22:24:05', '2024-06-02 23:06:30', '2024-06-02 23:06:30'),
(81, 'WallaceTop WallaceTopFE', NULL, 'upovoqufo413@gmail.com', '83674672943', NULL, NULL, 'https://www.bestunderpinning.com.au', NULL, '', 'active', '2024-06-03 02:43:37', '2024-06-02 23:06:30', '2024-06-02 23:06:30'),
(82, 'Bryanwag BryanwagDB', NULL, 'mpve0y96r@mozmail.com', '86867813486', NULL, NULL, 'https://www.bestunderpinning.com.au', NULL, 'Want to improve your SEO rankings and save time? Our premium databases for XRumer and GSA Search Engine Ranker are just what you need! \r\nWhat do our databases include? \r\n•	Active links: Get access to constantly updated lists of active links from profiles, posts, forums, guestbooks, blogs, and more. No more wasting time on dead links! \r\n•	Verified and identified links: Our premium databases for GSA Search Engine Ranker include verified and identified links, categorized by search engines. This means you get the highest quality links that will help you rank higher. \r\n•	Monthly updates: All of our databases are updated monthly to ensure you have the most fresh and effective links. \r\n \r\nChoose the right option for you: \r\n•	XRumer premium database: \r\no	Premium database with free updates: $119 \r\no	Premium database without updates: $38 \r\n \r\n•	Fresh XRumer Database: \r\no	Fresh database with free updates: $94 \r\no	Fresh database without updates: $25 \r\n \r\n•	GSA Search Engine Ranker Verified Links: \r\no	GSA Search Engine Ranker activation key: $65 (includes database) \r\no	Fresh database with free updates: $119 \r\no	Fresh database without updates: $38 \r\n \r\nDon\'t waste time on outdated or inactive links. Invest in our premium databases and start seeing results today! \r\nOrder now! \r\nP.S. By purchasing GSA Search Engine Ranker from us, you get a high-quality product at a competitive price. Save your resources and start improving your SEO rankings today! \r\nTo contact us, write to telegram https://t.me/DropDeadStudio', 'active', '2024-06-03 03:01:47', '2024-06-02 23:06:30', '2024-06-02 23:06:30'),
(83, 'CharlesGaisA CharlesGaisAYE', NULL, 'w.o.o.dbn5.4.4@gmail.com', '87176393399', NULL, NULL, 'https://www.bestunderpinning.com.au', NULL, 'Catizen: Unleash, Play, Earn - Where Every Game Leads to an Airdrop Adventure! Let play-to-earn airdrop right now!   https://tinyurl.com/3f6af6hh', 'active', '2024-06-03 11:31:42', '2024-06-04 00:15:31', '2024-06-04 00:15:31'),
(84, 'LewisSmoge LewisSmogeXC', NULL, 't.07713.64.@gmail.com', '86189595653', NULL, NULL, 'https://www.bestunderpinning.com.au', NULL, 'Enhance Your Electric Unicycle for Improved Capability \r\n \r\nImproving your e-unicycle can significantly enhance its performance, offering a smoother and more enjoyable ride. One of the most effective upgrades is increasing the battery capacity. Higher capacity batteries deliver extended range and better efficiency, allowing for longer journeys without frequent recharging. Look into replacing your existing battery with a higher watt-hour (Wh) option compatible with your unicycle model. Upgrading the motor is another way to improve performance. Motors with higher wattage deliver greater speed and torque, rendering it easier to navigate steep inclines and rough terrains. Make sure the new motor is compatible with your unicycle’s frame and battery system. Upgrading the suspension system can enhance ride comfort, especially on uneven surfaces. Seek sophisticated suspension kits created for your specific unicycle model. These kits often include shock absorbers and improved mounting systems. Pedal upgrades can also make a significant difference. Wider, more ergonomic pedals offer better foot support and reduce fatigue during long rides. Some aftermarket pedals come with improved grip surfaces, improving stability. Lastly, look into adding connectivity features like Bluetooth modules. These allow you to monitor performance, customize settings, and receive real-time diagnostics via a smartphone app. These upgrades not only enhance capability but also extend the lifespan of your electric unicycle. \r\n \r\nNewest Begode Unicycle EX2 EUC EX2S \r\n \r\nUsing in Winter and E-Unicycle Guidance 713c0ba', 'active', '2024-06-04 17:04:32', '2024-06-04 22:50:46', '2024-06-04 22:50:46'),
(85, 'RichardAGIMA RichardAGIMAYF', NULL, 'mishaoppos@gmail.com', '85654416731', NULL, NULL, 'https://www.bestunderpinning.com.au', '', 'Запойное пьянство — это хроническое состояние, при котором человек выпивает непрерывно в течение нескольких дней или даже недель. Этот процесс приводит к серьёзным физиологическим и психологическим последствиям, которые требуют профессионального вмешательства. \r\nhttp://narko-zakodirovat1.ru', 'active', '2024-06-04 18:27:39', '2024-06-04 22:50:46', '2024-06-04 22:50:46'),
(86, 'Reginacab ReginacabNX', NULL, 'vt826217@gmail.com', '83795621895', NULL, NULL, 'https://www.bestunderpinning.com.au', '', 'Частная наркологическая клиника доктора Юшкова в Краснодаре предоставляет профессиональную помощь в лечении различных видов зависимости. Клиника предлагает комплексные программы реабилитации, включающие медикаментозное лечение, психотерапию, кодирование и вывод из запоя. Индивидуальный подход и высококвалифицированный персонал гарантируют эффективное и безопасное восстановление здоровья пациентов. \r\nhttps://doctor-yushkov.ru', 'active', '2024-06-04 18:27:47', '2024-06-04 22:50:46', '2024-06-04 22:50:46'),
(87, 'Bob S.', NULL, 'pittard.dylan@msn.com', '25675331', NULL, NULL, 'https://www.bestunderpinning.com.au', 'Bob S.', 'Hey there,  \r\n\r\nI saw your google business listing and I think I can help it boost within 1-2 weeks using something called Semantic SEO.\r\n\r\nFor more info watch this short video: https://screenpal.com/u/jnru/freeplugin\r\n\r\n\r\n\r\n\r\nThanks & Regards,\r\nBob S.\r\n\r\n\r\n\r\nIf you would like to opt-out of communication with us, visit:\r\nhttps://bit.ly/websiteoptout', 'active', '2024-06-04 22:19:30', '2024-06-04 22:50:46', '2024-06-04 22:50:46'),
(88, 'Robertsmamy RobertsmamyCT', NULL, 'jons.24.0.5.0@gmail.com', '83191961875', NULL, NULL, 'https://www.bestunderpinning.com.au', NULL, 'Play MemiFi Coin Earn and cryptocurrency and have fun   https://tinyurl.com/yc8b6r6a', 'active', '2024-06-05 01:14:22', '2024-06-04 22:50:46', '2024-06-04 22:50:46'),
(89, 'Andrew Lade', NULL, 'andrew.lade1@gmail.com', '0405554818', NULL, NULL, 'https://www.bestunderpinning.com.au', NULL, 'Gday. We just bought a terrace in Newtown with settlement cracking in front facade brickwork and hoping to resolve and halt further degradation. Could you please investigate?\r\nCheers\r\nAndrew.', 'active', '2024-06-05 12:10:24', '2024-06-06 02:49:05', '2024-06-06 02:49:05'),
(90, 'Marthagup MarthagupTG', NULL, 'j.9.5.150296.@gmail.com', '82942761751', NULL, NULL, 'https://www.bestunderpinning.com.au', NULL, 'Gym trousers with pouches be exceptionally convenient and practical. These trousers exist with various compartments, ideal for carrying your necessities while on the go. The stretchy band guarantees a comfortable fit, while the slim pant legs give a trendy, sporty appearance. Exercise pants with pockets be incredibly adaptable and can be used for various tasks, from jogging tasks to training. Pair them with a plain tee and sneakers for a relaxed appearance or dress them up with a fitted coat. The practicality of having pockets turns these gym trousers be distinct. TheyвЂ™re functional, trendy, and perfect for routine wear. Add them to your collection, and youвЂ™ll wonder how you ever handled without them. Whether youвЂ™re heading to the fitness center or out for a relaxed day, gym leggings with pockets offer the excellent mix of comfort and style. Understand the practicality and flexibility of these trousers and create them a cornerstone in your wardrobe. \r\n \r\nPlus Size Quick Dry Workout Leggings \r\nExplanation Mesh Calf-Length Stretching Pants Are a Transformation bab480c', 'active', '2024-06-06 22:54:53', '2024-06-06 22:33:16', '2024-06-06 22:33:16'),
(91, 'MildredKar MildredKarFH', NULL, 'br.i.annamck.e.nzie4597@gmail.com', '84814578349', NULL, NULL, 'https://www.bestunderpinning.com.au', NULL, 'Secure Your Enterprise with Professional-Quality Commercial Surveillance Cameras \r\n \r\nRunning a business and demand observation alternatives that can match your needs? Bring in company level business safety cameras the sturdy option for securing your resources and assuring workplace security. With attributes including high-def imaging, state-of-the-art analytics, and faraway management capabilities, these cameras supply complete security and scalability for companies of all dimensions. See owning the potential to observe many venues, prevent theft and vandalism, and augment employee effectiveness with a single surveillance system. \r\n \r\nPonder The Bosch AUTODOME IP 4000i PTZ Network Camera, an business-level camera developed for tough commercial environments. Whether you\'re securing shopping stores, observing warehouses, or overseeing making facilities, this camera offers peerless presentation and reliability. Upgrade to enterprise-grade commercial home security cameras at present and safeguard your business with certainty. \r\n \r\n \r\n \r\nGadinan 5MP 3MP TUYA Auto Tracking PTZ Camera \r\n \r\nTransforming Residential Safety and Advanced Innovations d713c0b', 'active', '2024-06-06 23:16:30', '2024-06-06 22:33:16', '2024-06-06 22:33:16'),
(92, 'Mike Faber Mike Faber', NULL, 'peteraccext@gmail.com', '83637547432', NULL, NULL, 'https://www.bestunderpinning.com.au', NULL, 'Howdy \r\n \r\nI have just checked  bestunderpinning.com.au for its SEO Trend and saw that your website could use a boost. \r\n \r\nWe will enhance your ranks organically and safely, using only state of the art AI and whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nMore info: \r\nhttps://www.digital-x-press.co/unbeatable-seo/ \r\n \r\nRegards \r\nMike Faber\r\n \r\nDigital X SEO Experts \r\nhttps://www.digital-x-press.co/whatsapp-us/', 'active', '2024-06-07 00:56:47', '2024-06-06 22:33:16', '2024-06-06 22:33:16'),
(93, 'CharlieHem CharlieHemUI', NULL, 'ma.t.ipesm.i.t.h@gmail.com', '84164126236', NULL, NULL, 'https://www.bestunderpinning.com.au', NULL, 'You want to earn free cryptocurrency - it\'s easy to do by simply clicking on the screen of your phone, follow the link and join millions of users https://tinyurl.com/3u45x2kw', 'active', '2024-06-07 07:36:50', '2024-06-07 04:08:50', '2024-06-07 04:08:50'),
(94, 'Michaelcek MichaelcekQD', NULL, 'suki.nanatas.u@gmail.com', '89974925116', NULL, NULL, 'https://www.bestunderpinning.com.au', NULL, 'Feed your cute capybara in this game in telegram and get real money for it              https://tinyurl.com/5bhfrnj9', 'active', '2024-06-08 15:03:23', '2024-06-13 08:04:59', '2024-06-13 08:04:59'),
(95, 'JeremyCop JeremyCopUV', NULL, 'nov.aco.sta.7.3@gmail.com', '89167998518', NULL, NULL, 'https://www.bestunderpinning.com.au', NULL, 'Have you heard how many people made a lot of money playing NOTCOIN? Play a new game and earn real money in cryptocurrency.  https://tinyurl.com/4wcykaas', 'active', '2024-06-08 19:23:11', '2024-06-13 08:04:59', '2024-06-13 08:04:59'),
(96, 'Edwarddueld EdwarddueldKR', NULL, 'sa.kuro.wva.z.o.a@gmail.com', '85467278424', NULL, NULL, 'https://www.bestunderpinning.com.au', NULL, 'Make a piggy farm in this game in telegram and get real money for it in cryptocurrency      https://tinyurl.com/mvwbwyfw', 'active', '2024-06-09 14:25:21', '2024-06-13 08:04:59', '2024-06-13 08:04:59'),
(97, 'DavidSob DavidSobMH', NULL, 'algebraically.pawlo@gmail.com', '87225643967', NULL, NULL, 'https://www.bestunderpinning.com.au', NULL, 'Hej, jeg ønskede at kende din pris.', 'active', '2024-06-10 07:56:09', '2024-06-13 08:04:59', '2024-06-13 08:04:59'),
(98, 'Katrina White', NULL, 'katrina@ibankdna.com', '0455105121', NULL, NULL, 'https://www.bestunderpinning.com.au', 'SEO Services', 'Hello Team,\r\n\r\nMy name is Katrina, and I\'m a Digital Marketing Expert.\r\n\r\nI just visited your website and saw you have a good design, and it looks great, but it\'s not ranking on Google and other major search engines.\r\n\r\nI would like to send you a WEBSITE AUDIT REPORT showing you a few things to greatly improve these search results for you. These things are not difficult, and my report will be very specific. It will show you exactly what needs to be done to move you up in the rankings dramatically.\r\n\r\nIf you would like, please ask \"Send me audit report & more details\"\r\n\r\nStay safe!\r\n\r\nBest Regards,\r\nKatrina || Digital Marketing Expert', 'active', '2024-06-10 12:15:04', '2024-06-13 08:04:59', '2024-06-13 08:04:59'),
(99, 'sHEaVGdZSH JhEcwYIyPdDO', NULL, 'mitaxebandilis@gmail.com', '81465578856', NULL, NULL, 'https://www.bestunderpinning.com.au', NULL, 'Theme site super 000*** bestunderpinning.com.au', 'active', '2024-06-11 02:34:55', '2024-06-13 08:04:59', '2024-06-13 08:04:59'),
(100, 'Catherine Jones', NULL, 'adrianandcatherine@gmail.com', '0423302067', NULL, NULL, 'https://www.bestunderpinning.com.au', '', 'Hi. We are looking at quotes around underpinning our house so we can use the space underneath for storage. Are you able to quote for this? We are located in Cammeray. Catherine', 'active', '2024-06-11 10:04:18', '2024-06-13 08:04:59', '2024-06-13 08:04:59'),
(105, 'CharlieHem CharlieHemUI', NULL, 'evan.b.o.ris4.8.7@gmail.com', '84415812729', NULL, NULL, 'https://www.bestunderpinning.com.au', NULL, 'You want to earn free cryptocurrency - it\'s easy to do by simply clicking on the screen of your phone, follow the link and join millions of users https://tinyurl.com/3u45x2kw', 'active', '2024-06-11 20:24:05', '2024-06-13 08:37:54', '2024-06-13 08:37:54'),
(106, 'ingency ingencyZS', NULL, 'ralalique@mailport.lat', '87121631453', NULL, NULL, 'https://www.bestunderpinning.com.au', '', 'Exercise is encouraged buy cialis usa', 'active', '2024-06-13 10:00:14', '2024-06-13 08:37:54', '2024-06-13 08:37:54'),
(107, 'Ron Newton', NULL, 'redfez@bigpond.com', '0400003643', NULL, NULL, 'https://www.bestunderpinning.com.au', '', 'Hi, I live in Lane Cove and wondered if you could come out and give us a quote to fix two retaining walls - one made of timber, the other made from old sandstone blocks.\r\nThanks,\r\nRon', 'active', '2024-06-14 04:59:15', '2024-06-14 04:12:15', '2024-06-14 04:12:15'),
(108, 'DavidSob DavidSobMH', NULL, 'cautioningsehomogen@gmail.com', '82861411423', NULL, NULL, 'https://www.bestunderpinning.com.au', NULL, 'Ciao, volevo sapere il tuo prezzo.', 'active', '2024-06-14 09:43:59', '2024-06-14 06:09:31', '2024-06-14 06:09:31'),
(109, 'Mike Davidson Mike Davidson', NULL, 'mikeskendtes@gmail.com', '89694666594', NULL, NULL, 'https://www.bestunderpinning.com.au', NULL, 'Hi \r\n \r\nThis is Mike Davidson\r\n \r\nLet me introduce to you our latest research results from our constant SEO feedbacks that we have from our plans: \r\n \r\nThe new Semrush Backlinks, which will make your bestunderpinning.com.au SEO trend have an immediate push. \r\nThe method is actually very simple, we are building links from domains that have a high number of keywords ranking for them.  \r\n \r\nForget about the SEO metrics or any other factors that so many tools try to teach you that is good. The most valuable link is the one that comes from a website that has a healthy trend and lots of ranking keywords. \r\nWe thought about that, so we have built this plan for you \r\n \r\nCheck in detail here: \r\nhttps://www.strictlydigital.co/semrush-backlinks/ \r\n \r\nCheap and effective \r\nTry it anytime soon \r\n \r\nRegards \r\nMike Davidson\r\n https://www.strictlydigital.co/whatsapp-us/', 'active', '2024-06-14 22:08:21', '2024-06-17 07:53:45', '2024-06-17 07:53:45'),
(110, 'Jeffrey Di', NULL, 'jsdi916@hotmail.com', '0414333186', NULL, NULL, 'https://www.bestunderpinning.com.au', 'private', 'I have a semi-underground entertaining room, back wall is about 1.5m below the lawn level at backyard. When there is several days heavy rain, the water level at backyard will be quite higher and the water will come to the roonfrom the back wall/floor into the room. I\'m glad to find your website which shows the drainage system installed inside the room along the wall, especially suit my situation because outside of the biulding is deck and greenhouse, hard to do anything in backyard.\r\nIt will be appreciated if you could send someone to do an onsite check and give ma a quotation. Thanks!', 'active', '2024-06-15 14:48:41', '2024-06-17 07:53:45', '2024-06-17 07:53:45'),
(111, 'Kevinuplic KevinuplicYI', NULL, 'branden@rockstarseo.net', '86287433114', NULL, NULL, 'https://www.bestunderpinning.com.au', NULL, 'Getting the Most Flavor Out of Your Vaping Device\r\nWant to enhance the taste from your e-juice? Check out our guidelines for boosting taste with your vape setup. To enhance flavor, commence by picking top-notch e-liquids with a solid ratio of VG and PG. More PG content can deliver more intense flavors, while higher VG provides silkier draws. Next, verify your filaments are spotless and in solid condition, as used or charred filaments can adversely affect taste. Adjusting the wattage on your tool can also make a significant change; experiment with various levels to find the best setting for your vape juice. Additionally, proper air passage regulation is essential; lower air passage generally produces in more intense taste. Using a drip tip engineered for flavor enhancement can also aid. Finally, regularly wash your reservoir to stop any gunk buildup from affecting the taste. By following these tips, you can relish the complete array of tastes your e-juices have to offer. \r\nElectronic Cigarette S40 Mini Box Mod \r\nHigh Wattage E-cig Modifications on Sale b480cc0', 'active', '2024-06-16 16:15:01', '2024-06-17 07:53:45', '2024-06-17 07:53:45'),
(112, 'Stevengon StevengonTJ', NULL, 'craig@rockstarseo.net', '84124947976', NULL, NULL, 'https://www.bestunderpinning.com.au', NULL, 'Cheers for producing such useful & enjoyable website. I await to insights once this chance comes up by itself! Thanks a bunch repeatedly for making this accessible for worldwide community!', 'active', '2024-06-16 23:06:52', '2024-06-17 07:53:45', '2024-06-17 07:53:45'),
(113, 'Michaelhix MichaelhixZA', NULL, 'b.r.an.do.nbr.an.d.o.g@gmail.com', '82542374968', NULL, NULL, 'https://www.bestunderpinning.com.au', NULL, 'Geared up to assume control of your shedding pounds journey and achieve impressive results from the cosiness of your personal home? Our comprehensive manual to home workouts is your road to success. In this comprehensive blog post, we\'ll explore the myriad benefits of home fitness and how it can accelerate your progress towards your weight loss goals. From the convenience of exercising on your very own schedule to the cost-effectiveness of shunning costly gym memberships, home workouts give unmatched advantages. We\'ll also share functional tips on how to construct your workouts effectively, including recommendations for equipment and exercises that target specific areas of the body. Whether you\'re browsing to shed a few pounds or endure a considerable transformation, our target is to supply you with the understanding and resources necessary to succeed. Say goodbye to frustration and hi to success with home workouts! \r\n \r\n \r\n \r\nTransform Your Workout Routine with M L XL XXL XXXL Soft Modal Home Pants! &amp;#55357;&amp;#56490; Sculpt Your Body and Boost Your Strength! Click Here to Transform Your Fitness Routine! \r\nHousehold Fitness Secrets and Effective Physical activity Tools for Trimming Weight 08_7381', 'active', '2024-06-17 15:13:43', '2024-06-19 05:48:39', '2024-06-19 05:48:39'),
(114, 'Lavillmum LavillmumHE', NULL, 'revers10@1ti.ru', '84318225786', NULL, NULL, 'https://www.bestunderpinning.com.au', NULL, '3- trifluoromethyl phenyl amino -n- 4- 2,6,6-trimethyl-4-oxo 5,6,7-trihydroindolyl phenyl formamide - kupit\' online v internet-magazine chimmed  \r\nTegs: 2-fluoro-4-methylpyridin-3-ol - kupit\' online v internet-magazine chimmed  \r\n2-isopropyl-4-methoxybenzaldehyde - kupit\' online v internet-magazine chimmed  \r\n2,5-difluoro-4-isopropoxybenzaldehyde - kupit\' online v internet-magazine chimmed  \r\n \r\n3- 5-nitro-2- 4- trifluoromethyl phenoxy phenyl -2 4- trifluoromethoxy phenyl sulfonyl prop-2-enenitrile - kupit\' online v internet-magazine chimmed  https://chimmed.ru/products/3-5-nitro-2-4-trifluoromethylphenoxyphenyl-2-4-trifluoromethoxyphenylsulfonylprop-2-enenitrile-id=4688068', 'active', '2024-06-17 23:04:47', '2024-06-19 05:48:39', '2024-06-19 05:48:39'),
(115, 'Jewelfem JewelfemWB', NULL, 'b.r.a.ndyg.4.0.4.@gmail.com', '81444682594', NULL, NULL, 'https://www.bestunderpinning.com.au', NULL, 'Raise your gaming  \r\n \r\nPlunge into the world of premium Earbuds features. Lift your audio game. \r\nWhen it comes to wireless earbuds, features are everything. That\'s why premium Earbuds are making waves with their sophisticated technology and revolutionary design. With their potent drivers and captivating soundstage, they deliver a listening journey like no other. Whether you\'re listening to music, podcasts, or taking calls, every sound is reproduced with stunning precision and detail. But it\'s not just about the sound—it\'s about the features that set these AirPods apart. From their intuitive controls to their enduring battery life, they\'re engineered to enhance your audio journey. Delve into the world of premium features today and take your audio game to the following level. \r\nTWS Bluetooth 5.0 Earphones 2200mAh Charging Box Wireless Headphone', 'active', '2024-06-19 05:37:42', '2024-06-19 05:48:39', '2024-06-19 05:48:39'),
(116, 'Harvey Miller', NULL, 'harvey.websolution@gmail.com', '8406504550', NULL, NULL, 'https://www.bestunderpinning.com.au', 'digital marketing company', 'Hi                        \r\n       \r\nI\'ve noticed that your website is struggling with SEO (Search Engine Optimization) issues, resulting in poor visibility on Google, Bing, Yahoo, and other search engines. We\'re here to offer our assistance! Could you please share your phone number and propose a suitable time for a call? Let\'s work together to resolve this promptly.\r\n\r\n\r\n\r\nBest Regards,\r\nHarvey Miller', 'active', '2024-06-19 23:13:37', '2024-06-24 07:37:16', '2024-06-24 07:37:16'),
(117, 'myzh5lidoro myzh5lidoroKY', NULL, 'tsidorovo6050@outlook.com', '82777559879', NULL, NULL, 'https://www.bestunderpinning.com.au', NULL, 'Вечный муж (Достоевский)\r\n\r\nБудучи представителем компании в своем регионе, вы сможете привлекать к использованию вашего сервиса местные автошколы и предлагать им выгодные условия сотрудничества. Я могла все еще сидеть в своем кабинетике с планом счетов и чувствовать себя не на своем месте. Служба «Муж на час» рассчитана на всестороннюю помощь в решении бытовых вопросов одиноким, занятым, успешным людям, поэтому наши расценки в доступных пределах для всех. Припомнились даже два-три неуплаченные долга, правда, пустяшные, но долги чести и таким людям, с которыми он перестал водиться и об которых уже говорил дурно. Тогда мастер сможет сориентировать, насколько он компетентен в выполнении данных работ. Работа нашей службы построена следующим образом - вы оставляете заявку в контакт центре, в течении пятнадцати минут с Вами свяжется мастер для уточнения детаелей заказа а так же даты и времени выезда. В тот же день пользователи социальных сетей и последователи проповедника задались вопросом о справедливости такого решения. Жду с нетерпением этот день каждый месяц!\r\n\r\nУ них хороший доход и в выходной день они могут позволить себе пойти с подругой в кафе, а не убирать квартиру. Спала я в тот период по 3?4 часа в день. Мой рабочий день выглядел так: утром я еду на заказы, снимаю сториз, вместе со всеми мою, во время уборки отвечаю на звонки и сообщения от клиентов, сама покупаю расходные материалы, вечером сдаю уборки. Как-то мы не вышли на уборку в загородный дом, так как я просто не записала заказ из мессенджера в CRM, уборку удалось перенести на другой день. Особенно это востребовано у женщин из небольших населенных пунктов, где непросто найти работу, а занятия клинингом позволяют им обеспечить себе и своим детям достойный уровень жизни. Они на высоком качественном уровне оперативно выполнят работу, избавив вас, таким образом, от связанной с этим головной боли. Они врут, что не целовались; это уж наверно, - говорит Александра Николаевна. Наша цель это собрать коллектив настоящих профессоналов муж на час, которые смогут в кратчайшие сроки помочь в решении бытовых проблем нашим Читинским клиентам. Еще хочу доделать сайт, найти маркетинговое агентство для комплексного продвижения наших услуг, снять видео-уроки по нашим уборкам и докрутить мой продукт «Клининг с нуля».\r\n\r\nСейчас у нас график расписан на 2?3 недели вперед, появилось ощущение стабильности, большинство наших объектов находятся в новых жилых комплексах (Новая Боровая, Маяк Минска, Минск Мир, ЖК Лебяжий, ЖК Левада, Олимпик парк), где-то в центре, то есть наш сегмент - средний и премиальный класс. Корпоративных клиентов пока немного, около 10%, но для нас это интересный сегмент. ». У нас и в самом деле оставалось только на хлеб и молоко, но я горела новой идеей. Рентабельность здесь ниже, чем в частном секторе, но зато есть плановые регулярные поступления на расчетный счет. Толпа собралась ужасная, но люди все еще не переставали входить, так что и дверь уже не затворялась, а стояла настежь. Такое случилось со мной впервые, но это звоночек к переменам. Молодые супруги взаимно любили друг друга с тою искреннею чистою, сладкою нежностью, которая продолжается во всю жизнь, но которая ничего не значит для некоторых наблюдателей, боготворящих страсть неистовую и буйную. С тех пор она приобрела популярность во всем мире, включая страны, такие как США, Австралия и Новая Зеландия. Мне нужен в помощь надежный человек, в идеале - операционный директор. Мне нравится мое предпринимательство - благодаря ему я развиваюсь как личность, знакомлюсь с новыми людьми. Владимир Головин - 58-летний священник из небольшого города Болгара в Татарстане.\r\n\r\nКто такой протоиерей-блогер Владимир Головин и как он лишился сана? Medialeaks разобрался, кто такой Владимир Головин, как он стал одним из самых популярных православных священников в соцсетях и почему был извергнут из сана. Его просто и вдруг прогнали, хотя все устроилось так, что он уехал совершенно не ведая, что уже выброшен, \"как старый, негодный башмак\". Мы не демпингуем - мы просто заботимся о качестве вашей повседневной жизни, стремясь устранить сантехнические, электротехнические, мебельные поломки в вашей квартире оперативно, аккуратно и качественно: так, чтобы в следующий раз вы, не раздумывая, набрали наш номер. Одна из клиенток сказала: «Я обожаю, когда вхожу в дом после вашей уборки и буквально ощущаю запах чистоты! Одна из первых уборок была просто эпичной. Теперь каждый может заниматься своим делом. Теперь хочется пожелать себе достигать целей и желаний в легкости и балансе с самой собой. Услуга наиболее эффективна только после обнаружения и устранения источника неприятного запаха, что необходимо четко доносить клиенту до начала работы.\r\n\r\nЕсли вы лелеяли эту статью, и вы просто хотели бы получить больше информации о услуга муж на час пожалуйста, посетите нашу собственную страницу.', 'active', '2024-06-20 01:58:28', '2024-06-24 07:37:16', '2024-06-24 07:37:16'),
(118, 'Myzh3cem Myzh3cemSG', NULL, 'mantonova67@outlook.com', '88198278554', NULL, NULL, 'https://www.bestunderpinning.com.au', NULL, 'Услуга «муж на час»\r\n\r\nДа и как бы там ни было, любую работу лучше сделает профессионал, подготовленный к любым неожиданностям ваших бытовых проблем. Стоимость вызова такого всемогущего специалиста варьируется от вида услуги и времени обслуживания - сейчас вызов мужа на час доступен человеку с любым бюджетом. Стоимость исполнения услуги «муж на час» такова, что позволить себе не тратить время на исправление мелких бытовых неполадок и доверить их профессионалам сегодня может практически каждый. Мастер приедет в течение часа после вызова или в любое удобное для вас время! Мастер на час поможет вам обустроить санузел - профессионал сможет установить новую душевую кабину и правильно ее проклеить силиконом, подключить ванну, раковину и стиральную машину. Оказываем услуги мужа на час в день обращения. Популярность мастеров по вызову обусловлена несколькими преимуществами - вы оплачиваете услугу и получаете желаемое за кратчайшие сроки myzh-na-chas777.ru, а не уделяете возникшей проблеме весь выходной день. Воспользуйтесь услугами \"мужа на час\" и освободите себе время для более важных и приятных моментов в жизни.\r\n\r\nУтешает это, что ли, уж очень - не знаю-с; а должно быть, для приятных воспоминаний. Аль снять уж креп? От устранения засоров в сливе до сборки мебели - найти опытного и надежного специалиста становится настоящей находкой. От прикручивания гардины и подвешивания полочки до мелких ремонтных работ и электрических задач - профессионал сделает все быстро, качественно и без лишних хлопот. В каждой квартире и доме со временем накапливается огромное количество мелких ремонтных и просто бытовых проблем. Выполняем любые работы по дому, от самых мелких - поменять смеситель, повесить карниз до комплексных ремонтных работ. Сначала, впрочем, припоминалось больше не из чувствительного, а из язвительного: припоминались иные светские неудачи, унижения; вспоминалось о том, например, как его \"оклеветал один интриган\", вследствие чего его перестали принимать в одном доме, - как, например, и даже не так давно, он был положительно и публично обижен, а на дуэль не вызвал, - как осадили его раз одной преостроумной эпиграммой в кругу самых хорошеньких женщин, а он не нашелся, что отвечать. Джон был уже навеселе, он стоял у меня за спиной, наваливаясь на плечо, и дышал перегаром. Являлась фиаска вина. Девушки ненавидели Морозо, боялись, что он станет вотчимом, и вообще только и мечтали, как бы поскорее удрать от матери.\r\n\r\nДело шло об каком-то преступлении, которое он будто бы совершил и утаил и в котором обвиняли его в один голос беспрерывно входившие к нему откудова-то люди. Впустив свет и забыв на столе зажженную свечку, он стал расхаживать взад и вперед все еще с каким-то тяжелым и больным чувством. У каждого человека на то свои объективные причины: кто-то не успевает, потому что целыми днями пропадает на работе, чтобы оплатить свое жилье; кто-то рад бы и привести жилье в порядок, да вот сил не хватает, а где-то и элементарных . Но, к сожалению, в нашей жизни всегда не хватает времени, чтобы достойным образом обустроить себе жилье. Мастера нашей компании спасут Вашу семью от массы накопившихся нерешенных дел по дому. В нашей современной жизни, когда время - это настоящий капитал, каждая минута становится ценной. Узнайте, как найти идеального \"Мужа на час\", который станет вашим верным союзником в борьбе с бытовыми трудностями и освободит ваше время для важных дел и отдыха. Не упустите возможность облегчить свою жизнь и сделать её более комфортной с надежным \"мужем на час\". Павел Павлович. - Не дурачу, не дурачу! Не стоит забывать и о слабом поле - женщинах.\r\n\r\nМожно посмотреть объявления в Интернете на данную тему, их много. Сегодня мы расскажем подробнее на данную тему. Вместо того чтобы тратить драгоценное время на мелкие бытовые задачи, вы можете доверить их опытному \"мужу на час\". Наши услуги, это быстрый и недорогой способ решения проблем мелкого бытового ремонта квартир, способ сохранить Ваше время и силы. Теперь есть выход. Наша компания предоставляет широкий спектр бытовых услуг населению и организациям Москвы и Подмосковья, услуга мужская помощь, услуга бытового ремонта домашний мастер или как еще ее называют услуга муж на час - это Ваш выход! И в этом его преимущество в отличие от предприятий бытового обслуживания. Вы сможете наслаждаться преобразованным интерьером и функциональностью ваших шкафов-купе на долгие годы. Вы можете с уверенностью доверить ремонт и обслуживание профессионалу, который быстро и качественно выполнит необходимые работы, позволяя вам наслаждаться функциональностью ваших объектов. Вы можете вызвать мастера в Москве и МО обратившись в компанию «Профмастер». Даже если Вы не москвич - не стоит падать духом - мы можем прибыть также в любой Подмосковный городок, такой как Реутов, Балашиха и прочие.', 'active', '2024-06-20 08:04:25', '2024-06-24 07:37:16', '2024-06-24 07:37:16');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `phone`, `address`, `area`, `site_url`, `business_name`, `message`, `status`, `lead_date`, `created_at`, `updated_at`) VALUES
(119, 'Myzh2Chill Myzh2ChillSD', NULL, 'yladams9749@outlook.com', '87862319664', NULL, NULL, 'https://www.bestunderpinning.com.au', NULL, 'Мастер на час\r\n\r\nВам только при оформлении заказа необходимо сообщить менеджеру способ оплаты. Вам необходимо лишь набрать наш номер телефона и мастер прибудет в Лесной Городок незамедлительно. Если Вам необходимо повесить люстру, заменить смеситель, прибить плинтус и исправить дефект проводки - домашний мастер сделает все быстро и качественно. Услуга мастер на час Новосибирск, прайс которой представлен на сайте, востребована разными категориями граждан - от студентов до многодетных семей, и все потому, что довольно трудно сочетать напряженную работу с мелкими починками в квартире. На сами услуги предоставлен довольно подробный прайс. На сегодняшний день мелкие бытовые услуги «муж на час» составляют одну из самых часто выполняемых нашими мастерами работ. Раньше помощью «Мастера на дом» в основном пользовались женщины, которые не могли решить все бытовые вопросы своими руками, а сегодня многие люди по разным причинам регулярно вызывают на дом мужа на час. Муж на час в Москве - услуги по оказании помощи на профессиональном уровне с услугой муж на час с выездом на дом.\r\n\r\nК более простой работе, которую муж мастер на час сделает за короткое время, можно отнести, например, монтаж светильника, подключение стиральной машины, сборку мебели и многое другое. Такие легкие мероприятия, как вкручивание лампы, не составят значительного труда, а подключение стиральной машины или осуществление перестановки в доме может вызвать определенные трудности. Действительно, принято считать, что устранение неполадок и осуществление любого спектра ремонтных работ является исключительно мужским делом, с которым не в состоянии справиться женщины. Обойтись без каких-либо ремонтных или монтажных работ в домашних условиях практически невозможно. Поэтому в ситуации, когда мужчина-мастер не против интимных отношений с клиенткой, а клиентке нужно не только повесить люстру, можно договориться о «нерабочих» отношениях», - говорит он. Если человек оказался в ситуации, когда у него в доме что-то поломалось, либо ему нужно просто провести генеральную уборку, то в данном случае практически нереально обойтись без отличной услуги - мастер на час, которую предоставляет наша компания. Вы можете нам позвонить и оставить заявку, мастер с вами свяжется в течении 3-х минут, задаст интересующие его вопросы по услуге и сориентирует вас по стоимости за работу. Если вам срочно необходимо вызвать мужа на час, просто позвоните нам и мастер будет у вас в течении 30 минут в любое время суток. Если вас все устроит, специалист приедет в назначенное время и если понадобится привезет с собой расходный материал.\r\n\r\nЕсли вы не нашли в прайс-листе услугу которая вам необходима, то позвоните нам и мастер вас проконсультирует совершенно бесплатно. Следующим шагом в подборе мастера будет наличие положительных отзывов на его страничке и развернутое портфолио, где мастер указывает, какие работы проводил, итоговый результат, показывает отклик заказчика и прайс-лист с ценами на все виды работ. Домашний мастер с легкостью справится со сборкой и монтажом кухонных гарнитуров, шкафов, детских уголков, спортивных комплексов и иных сложных конструкций. Можем повесить предметы интерьера, починить мебель, поставить на место розетку или выключатель, также с легкостью забьем гвоздь или закрутим саморез в стену или пол. Специалисты услуга муж на час с легкостью выполнят поставленную задачу. Еще больше пышности церемонии придавало присутствие главнейших представителей родовитой аристократии и финансовых тузов. Рядом с женихом стоял другой, тоже пожилой уже господин в партикулярном платье и, очевидно, тоже близкий родственник, но ни изобилие бриллиантов в кольцах, часах и запонках, ни величайшая надменность осанки не могли придать ему родовитой сановности, которая проглядывала во всех движениях первого.\r\n\r\nОна молчала и не решалась; неподвижно глядела в его глаза своими голубыми глазами, и во всех чертах ее личика выражался один только безумный страх. Взгляд его, устремленный на жениха с невестой, был скорее даже мрачен; когда же, отвернувшись от них, он оглядел рассеяно огромную толпу, его гордое лицо исказилось подавленным гневом и крепко сжатые губы слегка задрожали. Это, конечно же, выбивает из душевного равновесия и заставляет чувствовать себя дискомфортно в собственном доме. Многие жители Москвы и Подмосковья, часто прибегающие к помощи сервисных служб, на собственном опыте не раз имели возможность убедиться в том, что понятия «качественно» и «недорого» редко бывают синонимами. Множество присутствующих, щедро украшенный цветами алтарь и длинный ряд элегантных экипажей вокруг церкви свидетельствовали о том, что венчание, которое должно было здесь совершаться, возбуждало интерес в высших слоях общества. Кроме того, что на наших работников можно полностью положиться, клиенты получают ряд сопутствующих услуг. Кроме того, на все виды работ в нашей компании «Вот такие мужики! От вашего отзыва зависит рейтинг мастера и дальнейшая работа в нашей компании.', 'active', '2024-06-20 19:57:17', '2024-06-24 07:37:16', '2024-06-24 07:37:16'),
(120, 'LouiseEthep LouiseEthepSY', NULL, 'lori@dronesdragon.com', '89872536191', NULL, NULL, 'https://www.bestunderpinning.com.au', NULL, 'Optimizing Your Bike to enable Daily Use \r\n \r\nTraveling by bike could be productive and fun Along Applying the suitable setup. Begin by rising fenders to keep you dry in wet issues and affixing a rear rack for carrying essentials like your computer, lunch, or a change of clothes. A pleasant saddle and ergonomic holders can render your ride more enjoyable, especially on longer commutes. Verify your bike has well lamps and reflective accessories to increase seeing all through early morning hours or evening rides. Take into account adding a bell to alert people along with other cyclists of any existence. Regular upkeep, such as verifying tire pressure and confirming the brakes are in pleasant state, is important to avoid complete breakdowns. Employing hole proof tires can also help avoid flat tires. For those with longer travels, consider a bike with multiple gearing to navigate varying ground more effortlessly. By improving your cycle for traveling, you can render your routine trips more comfortable, protected, and enjoyable, turning your travel into a beneficial part of a own day. \r\n \r\n48 Pieces Puncture Repair Kit \r\nMaintaining and Upkeeping Your Bike Strand 4d713c0', 'active', '2024-06-21 05:43:12', '2024-06-24 07:37:16', '2024-06-24 07:37:16'),
(121, 'Wesley Refshauge', NULL, 'wesley.refshauge@yahoo.com', '295674793', NULL, NULL, 'https://www.bestunderpinning.com.au', 'Wesley Refshauge', 'hi there!\r\n\r\nIt\'s been some time, but I recently stumbled upon a slam piece online about bestunderpinning.com.au and thought it was important to reach out to confirm this article. \r\n\r\nIt appears like there\'s some negative press that could be harmful to your reputation. \r\nUnderstanding how fast misinformation can spread and hoping not you to be caught off guard, I thought it best to inform you.\r\n\r\nHere\'s the source of the info:\r\n\r\nhttps://ibit.ly/wxRqV		\r\n\r\nMy hope is it\'s all a simple confusion, but it seemed prudent you should know!\r\n\r\nWishing you all the best,\r\nWesley', 'active', '2024-06-21 08:34:50', '2024-06-24 07:37:16', '2024-06-24 07:37:16'),
(122, 'GeorgeFlubs GeorgeFlubsUP', NULL, 'no_replyclen77@gmail.com', '85537937326', NULL, NULL, 'https://www.bestunderpinning.com.au', NULL, 'Hello, \r\n \r\nPrivate FTP FLAC/Mp3/Clips 1990-2024. \r\nNew Club/Electro/Trance/Techno/Hardstyle/Hardcore/Lento Violento/ \r\nItalodance/Eurodance/Hands Up music: https://0daymusic.org/rasti.php?ka_rasti=-DE- \r\nList albums: https://0daymusic.org/FTPtxt/ \r\n0-DAY scene releases daily. \r\nSorted section by date / genre. \r\nMusic videos: https://0daymusic.org/stilius.php?id=music__videos-2021 \r\n \r\nRegards \r\n \r\nJason M.', 'active', '2024-06-21 16:54:54', '2024-06-24 07:37:16', '2024-06-24 07:37:16'),
(123, 'Jeffrey Chen', NULL, 'jcp872010@hotmail.com', '0466545658', NULL, NULL, 'https://www.bestunderpinning.com.au', NULL, 'Hi,\r\n\r\nOur old house is need of renovation in particular the garage/basement where it was never properly built and rain water is passing through it. If your company can help with the renovation, please get in contact with me to arrange an inspection and quote.\r\n\r\nThanks,\r\nJeff.', 'active', '2024-06-22 10:12:55', '2024-06-24 07:37:16', '2024-06-24 07:37:16'),
(124, 'Gus Poirier', NULL, 'poirier.gus@gmail.com', '4807253394', NULL, NULL, 'https://www.bestunderpinning.com.au', 'Gus Poirier', 'Hi bestunderpinning.com.au Administrator.,\r\n\r\nDiscover AdCreative Ai, a revolutionary tool transforming ad content creation and optimization. Whether you\'re a seasoned marketer or a beginner, our platform helps you achieve better campaign results with AI-driven copywriting, dynamic visuals, A/B testing, and multi-platform compatibility. \r\n\r\nTry it now with a free trial: https://adcreativeai.shop/.\r\n\r\nTake your ad campaigns to the next level and see the incredible results for yourself.\r\n\r\nBest regards,', 'active', '2024-06-22 23:03:38', '2024-06-24 07:37:16', '2024-06-24 07:37:16'),
(125, 'Heath Andrus', NULL, 'heath.andrus@googlemail.com', '7817501271', NULL, NULL, 'https://www.bestunderpinning.com.au', 'Heath Andrus', 'Hi bestunderpinning.com.au Admin.,\r\n\r\nDiscover AdCreative Ai, a revolutionary tool transforming ad content creation and optimization. Whether you\'re a seasoned marketer or a beginner, our platform helps you achieve better campaign results with AI-driven copywriting, dynamic visuals, A/B testing, and multi-platform compatibility. \r\n\r\nTry it now with a free trial: https://adcreativeai.shop/.\r\n\r\nTake your ad campaigns to the next level and see the incredible results for yourself.\r\n\r\nBest regards,', 'active', '2024-06-22 23:06:08', '2024-06-24 07:37:16', '2024-06-24 07:37:16'),
(126, 'Julius Beadle', NULL, 'julius.beadle@googlemail.com', '4036931096', NULL, NULL, 'https://www.bestunderpinning.com.au', 'Julius Beadle', 'Hi bestunderpinning.com.au Admin!,\r\n\r\nDiscover AdCreative Ai, a revolutionary tool transforming ad content creation and optimization. Whether you\'re a seasoned marketer or a beginner, our platform helps you achieve better campaign results with AI-driven copywriting, dynamic visuals, A/B testing, and multi-platform compatibility. \r\n\r\nTry it now with a free trial: https://adcreativeai.shop/.\r\n\r\nTake your ad campaigns to the next level and see the incredible results for yourself.\r\n\r\nBest regards,', 'active', '2024-06-23 07:09:19', '2024-06-24 07:37:16', '2024-06-24 07:37:16'),
(127, 'Michaelhix MichaelhixZA', NULL, 'b.ra.ndonb.ra.ndo.g@gmail.com', '87626618712', NULL, NULL, 'https://www.bestunderpinning.com.au', NULL, 'Are you set to give priority to your wellness and welfare with the convenience of home fitness? Our comprehensive guide is here to assist you in achieving success. In this elaborate blogging post, we\'ll expound the benefits of working out at home and how it can augment your overall lifestyle. From the handiness of being able to exercise on your own schedule to the cost-effectiveness of avoiding expensive gym memberships, dwelling fitness offers numerous benefits. We\'ll also supply practical tips on how to set up your own home gym, including recommendations for equipment and exercises that match your preferences and goals. Whether you\'re searching to lose weight, build muscle, or simply feel better in your own skin, our goal is to provide you with the tools and resources you need to succeed. Say goodbye to excuses and hello to a better, more joyful you with home fitness! \r\n \r\n \r\n \r\nTransform Your Workouts with the Spring Chest Developer Expander! &amp;#55357;&amp;#56490; Sculpt Your Muscles and Boost Your Strength with Ease! Click Here to Elevate Your Fitness Game! \r\nDomestic Fitness for Weight Loss and Indispensable Physical activity Tips cf3f305', 'active', '2024-06-25 04:08:41', '2024-06-25 07:18:48', '2024-06-25 07:18:48'),
(128, 'Simon Cramp', NULL, 'crampprojects@gmail.com', '0400192200', NULL, NULL, 'https://www.bestunderpinning.com.au', 'Cramp rojects', '', 'active', '2024-06-25 09:14:42', '2024-06-25 07:18:48', '2024-06-25 07:18:48'),
(129, 'Tommiepaync TommiepayncOJ', NULL, 'm.30.3.86.20@gmail.com', '88314519426', NULL, NULL, 'https://www.bestunderpinning.com.au', NULL, 'The Newest in Upland Bike Apparatus and Devices\r\n\r\nKeeping up with the newest developments in upland bike equipment and devices will considerably enhance your biking journey. Innovations in cycle technology, such as advanced shock absorbers, minimal weight yet sturdy components, and smart technology combinations, stay continually developing to turn biking more exciting and protected. \r\n\r\nPortable tech like cardio trackers and GPS devices have become more and more popular, giving valuable information to monitor your performance and navigate paths more efficiently. Safety tools, including helmets, protectors, and hand protection, stays constantly being enhanced to provide better security and comfort. Features such as MIPS technology in helmets and better padding in guarding gear contribute to reducing the risk of injuries.\r\n\r\nRegularly upgrading your equipment ensures you have the best to the best instruments out there, making each trip more smooth and enjoyable. Keeping updated about the newest gear and innovations through bike magazines, websites, and local groups can help you render informed selections about your apparatus. By investing in cutting-edge gear, you not only enhance your bike output but also boost the thrill and security of your hillside bike adventures.\r\n\r\n\r\n\r\n \r\ncontinue \r\nBuild Mountain Riding Challenge Course c027fce', 'active', '2024-06-25 14:27:05', '2024-06-27 09:44:50', '2024-06-27 09:44:50'),
(130, 'Taj Flemming', NULL, 'taj.flemming@gmail.com', '4493386645', NULL, NULL, 'https://www.bestunderpinning.com.au', 'Taj Flemming', 'hey\r\n\r\nIt\'s been some time since we last communicated, but I recently stumbled upon a warning article online about bestunderpinning.com.au and felt compelled to email you guys to disprove this review. \r\n\r\nIt looks like there\'s some negative press that could be harmful to your reputation. \r\nKnowing how fast misinformation can spread and hoping not you to be taken by surprise, I decided to warn you.\r\n\r\nHere\'s where I found the info:\r\n\r\nhttps://ibit.ly/g_ScX		\r\n\r\nI\'m hoping it\'s all a mix-up, but I believed it necessary you should know!\r\n\r\nBest wishes,\r\nTaj', 'active', '2024-06-25 22:47:10', '2024-06-27 09:44:50', '2024-06-27 09:44:50'),
(131, 'Waqas Wakeel', NULL, 'jaxsonadam19@gmail.com', '240771952', NULL, NULL, 'https://www.bestunderpinning.com.au', 'Waqas Wakeel', 'Hello!\r\n\r\nI\'m Waqas From Hexions. I came across Bestunderpinning when I signed up a Tree removal service provider client who needed some assistance with his website. I have been checking bestunderpinning.com.au but it didn\'t look appealing as a user to book an appointment. Your website didn\'t have the booking form & services in detail which you are offering.\r\n\r\nLike this i have recorded a video of suggestions which part of the website you should improve to generate more leads. Let me know if you are the right person to share with?\r\n\r\nLooking forward to your response.\r\n\r\nWaqas Wakeel\r\nHexions LLC\r\n+1 307 225 5425\r\nEmail: info@hexions.co\r\nSkype: waqass.wakeel2\r\nWhatsapp: +1 307 225 5425', 'active', '2024-06-26 06:48:57', '2024-06-27 09:44:50', '2024-06-27 09:44:50'),
(132, 'RichardQuemy RichardQuemyOF', NULL, 'info@sedona-vortex-tours.com', '85725139171', NULL, NULL, 'https://www.bestunderpinning.com.au', NULL, 'Handle the busy days of college with our extremely flexible bag, meticulously crafted to meet the diverse demands of your daily schedule. From morning lectures to late afternoon extracurriculars, this backpack changes effortlessly, carrying everything from notebooks and journals to gym essentials, assuring you are prepared for each aspect of your university life. \r\n \r\n \r\n \r\nbest pearl crossbody bags for wome \r\n \r\nVersatile Packpacks and A Necessity for Occupied Ladies 14d713c', 'active', '2024-06-26 15:48:42', '2024-06-27 09:44:50', '2024-06-27 09:44:50'),
(133, 'Betseygow BetseygowHF', NULL, 'b.r.it.t.a.n.ym.ck.enzie.3.33@gmail.com', '82325261348', NULL, NULL, 'https://www.bestunderpinning.com.au', NULL, 'Uncover the vibrant range of this manufacturer motor-scooters, known for their aggressive style and speedy technology. Look into the SXR series, showcasing modern styles with high-performance drivetrains. Starting with taking trips, these scooters promise an enjoyable journey.\r\n\r\n \r\n \r\n \r\nElectric Scooter Circuit Board Waterproof Silicone Cover \r\n \r\nShowing Diversity and Perception into Varied Scooter Configurations bab480c', 'active', '2024-06-27 11:11:00', '2024-06-27 09:44:50', '2024-06-27 09:44:50'),
(134, 'Michaelhix MichaelhixZA', NULL, 'b.ran.do.n.br.a.nd.og@gmail.com', '87672254444', NULL, NULL, 'https://www.bestunderpinning.com.au', NULL, 'Gain Your Fitness Aspirations for Dwelling and Your Essential to Triumph! \r\n \r\nAre you geared up to reach your wellness goals and lead your optimal life? It\'s moment to unveil your capacity with homestead exertion. In this intricate article, we\'ll probe the benefits of exercising within the abode and in what way it may help you accomplish your targets more rapidly. From the convenience of having the capacity to work out whenever, wherever to the flexibility of having the ability to tailor your routines to fulfill your needs, home wellness gives several beneficial aspects. We\'ll additionally supply efficient advice on the way in which to establish your personal residence workout facility, which includes ideas for equipment in accordance with your distinct health objectives. Whether you\'re a starter just initiating on your health trip or a proficient competitor looking for recent trials, our purpose is to furnish you with the tools and items you demand to thrive. So why hesitate? Commence realizing your wellness objectives at one\'s dwelling at present! \r\n \r\n \r\n \r\nAbdomen Strength Workout Equipment \r\nRealize Your Health Goals and Residential Training Equipment for Trimming Fat 4d713c0', 'active', '2024-06-27 13:23:21', '2024-06-27 09:44:50', '2024-06-27 09:44:50'),
(135, 'Bernicemepsy BernicemepsyHU', NULL, 'crys.tal.ne.l.so.n34.4.5.@gmail.com', '87791228244', NULL, NULL, 'https://www.bestunderpinning.com.au', NULL, 'Gone are the days are the days of struggling to scrape every remaining bit of batter from the bowl silicon polymer spatulas are here to save the day! These flexible cooking area essentials are a revolution for any home cook, presenting unparalleled versatility and convenience.\r\n\r\nWhether you\'re mixing ingredients, spreading frosting, or flipping pancakes, silicon polymer spatulas are prepared. Specific heatproof properties make all ideal for cooking on the stovetop or baking in the oven, while Their particular nonstick surface guarantees easy food release.\r\n\r\nNevertheless the prospects don\'t stop there. silicon spatulas are also simple to clean and dishwashing machine safe, leading them to be effortless to preserve. Plus, Specific durable construction means they\'ll last years of use without wearing out.\r\n\r\nFrom novice kitchen workers to seasoned chefs, silicon spatulas are an indispensable tool for every contemporary home space. Say farewell to flimsy utensils and embrace accuracy and productivity with one of these cooking area superheroes! \r\n \r\n \r\n \r\nHousehold Cooking Apron|Quick-Dry Hand Cloth Bathroom Cleaning Implements\r\n \r\nSilicone vs. Cloth Mitts: Which Is Superior? 80cc051', 'active', '2024-06-27 14:57:55', '2024-06-27 09:44:50', '2024-06-27 09:44:50'),
(136, 'Donaldhon DonaldhonIK', NULL, 'ja.s.o.n.m.a.ster.s.p.as.@gmail.com', '81384323244', NULL, NULL, 'https://www.bestunderpinning.com.au', NULL, 'Hi to every single one of our aquatic tranquility followers! \r\n \r\nThere\'s nothing quite like plunging into a steaming hot tub after a stressful day. For people in search of the ultimate relaxation experience, a spa is really unmatched. \r\n \r\nVariety is truly the spiciness of lives, and we wholeheartedly pride ourselves on offering an extensive range of spas to cater to every taste. \r\n \r\nQuality, to us, is more than an ordinary word. It\'s our benchmark. All of our products are subjected to strict testing to ensure they consistently provide the top leisure experience for several years to come. \r\n \r\nOur expert staff is always on hand to guide you in locating the right hot tub for your wants and home. \r\n \r\nHave you ever thought about having your own personal meditation retreat? What else are your must-haves when it comes to choosing the ideal hot tub? Let\'s talk about this! \r\n \r\nKeep effervescent and calm! Also, I started my own emerging company web-page recently, you can view here:  Expert spa tub repair specialists nearby Gelendale Az \r\nHot Jacuzzis and Stress Relief: The Mental-Physical Link cc051c0', 'active', '2024-06-27 20:28:18', '2024-07-02 09:16:26', '2024-07-02 09:16:26'),
(137, 'Peter Barnes', NULL, 'peter_barnes99@hotmail.com', '0488296981', NULL, NULL, 'https://www.bestunderpinning.com.au', '', 'We are finalising a DA and would like to understand the effort required to underpin back wall of a house and a shared wall with neighbouring property.', 'active', '2024-06-29 14:06:32', '2024-07-02 09:16:26', '2024-07-02 09:16:26'),
(138, 'Vicky Cartledge', NULL, 'vicky.cartledge@icloud.com', '6689938913', NULL, NULL, 'https://www.bestunderpinning.com.au', 'Vicky Cartledge', 'We haven\'t spoken in a while, but I just saw a warning article online about bestunderpinning.com.au and thought it was important to email you guys to validate this nonsense. \r\n\r\nIt seems like there\'s some negative press that could be detrimental. \r\nUnderstanding how easily stories can get out of hand and hoping not you to be caught off guard, I thought it best to notify you.\r\n\r\nHere\'s where I found the info:\r\n\r\nhttps://ibit.ly/27T7q		\r\n\r\nI\'m hoping it\'s all a simple confusion, but I thought it best you should know!\r\n\r\nBest wishes,\r\nVicky', 'active', '2024-07-01 23:40:13', '2024-07-02 09:16:26', '2024-07-02 09:16:26'),
(139, 'Souvik', NULL, 'abc@abc.com', '1234567890', NULL, NULL, 'https://sydneyfoundationunderpinning.com.au', 'lokm', 'dshjgshdsjd', 'active', '2024-07-02 14:55:24', '2024-07-02 09:25:57', '2024-07-02 09:25:57'),
(140, 'Sudipta Bhatta', NULL, 'sudipta@gmail.com', '6290413311', NULL, NULL, 'https://sydneyfoundationunderpinning.com.au', '3rare', 'Test', 'active', '2024-07-02 15:42:17', '2024-07-02 10:16:37', '2024-07-02 10:16:37'),
(141, 'Souvik', NULL, 'abnv@dhfgf.vom', '1234567890', NULL, NULL, 'https://sydneyfoundationunderpinning.com.au', 'lokm', 'adasdsasa', 'active', '2024-07-02 15:46:59', '2024-07-02 10:17:07', '2024-07-02 10:17:07'),
(142, 'Sudipta B', NULL, 'bhocket@gmail.com', '6290415263', NULL, NULL, 'https://sydneyfoundationunderpinning.com.au', 'Rats', 'Test', 'active', '2024-07-02 15:48:16', '2024-07-02 10:18:25', '2024-07-02 10:18:25'),
(143, 'sam cooper', NULL, 'sam@ymail.com', '123456789', NULL, NULL, 'https://www.bestunderpinning.com.au', 'nanan', 'hiiiii', 'active', '2024-07-04 14:53:08', '2024-07-04 09:25:39', '2024-07-04 09:25:39'),
(144, 'dan', NULL, 'dan@gmail.com', '12345678', NULL, NULL, 'https://sydneyfoundationunderpinning.com.au', 'bsaq', 'hii', 'active', '2024-07-04 15:05:07', '2024-07-04 09:35:18', '2024-07-04 09:35:18'),
(145, 'Abir Paul', NULL, 'mytest@gmail.com', '07003990220', NULL, NULL, 'https://sydneyfoundationunderpinning.com.au', '3rare', 'test', 'active', '2024-07-05 15:09:32', '2024-07-05 09:41:07', '2024-07-05 09:41:07'),
(146, 'Abir Paul', NULL, 'anothertest@gmail.com', '07003990220', NULL, NULL, 'https://sydneyfoundationunderpinning.com.au', 'test', 'test', 'active', '2024-07-05 15:10:10', '2024-07-05 09:41:07', '2024-07-05 09:41:07'),
(147, 'Joanna Riggs', NULL, 'joannariggs278@gmail.com', '40393375', NULL, NULL, 'https://www.bestunderpinning.com.au', 'Joanna Riggs', 'Hi,\r\n\r\nI just visited bestunderpinning.com.au and wondered if you\'d ever thought about having an engaging video to explain what you do?\r\n\r\nOur prices start from just $195.\r\n\r\nLet me know if you\'re interested in seeing samples of our previous work.\r\n\r\nRegards,\r\nJoanna\r\n\r\nUnsubscribe: https://removeme.click/ev/unsubscribe.php?d=bestunderpinning.com.au', 'active', '2024-07-07 02:50:27', '2024-07-08 04:04:23', '2024-07-08 04:04:23'),
(148, 'Mariangela Martinez Alvarez', NULL, 'mariangelamartinez79@hotmail.com', '0414591795', NULL, NULL, 'https://www.bestunderpinning.com.au', '', 'We got a leak on the Electrical Room in the Basement. It may come from a Planter Above.', 'active', '2024-07-08 12:12:59', '2024-07-08 10:27:03', '2024-07-08 10:27:03'),
(149, 'Karl Wilkinson', NULL, 'karlw@toptecheng.com.au', '0403205511', NULL, NULL, 'https://www.bestunderpinning.com.au', 'Top Tech Engineering Consulting P/L', 'Dear Sir, I wish to ask a question about Foundations for a Multi-Story Automatic Parking Tower. I\'m not sure if I\'m consulting the correct people as the foundation needs to support 200+ tons, (100 ton of Steel Parking Tower + !00+ tons off Vehicles stacked 25 high x 2 Abreast). There is a Well required in the bottom of the Tower that will house the Lift Motor and Other Plant. Tower Footprint is proposed to be 12m wide x 11m Deep.\r\n\r\nIf this type of foundation is not in your scope of works, could you please comment on who in Sydney / Eastern Seaboard N.S.W. could be suitable for following up on this request.\r\n\r\nBest regards\r\n\r\nKarl Wilkinson\r\n0403205511', 'active', '2024-07-09 23:19:52', '2024-07-10 04:36:00', '2024-07-10 04:36:00'),
(150, 'Christopher Ban', NULL, 'christophernban@gmail.com', '0418116918', NULL, NULL, 'https://www.bestunderpinning.com.au', NULL, 'I am looking at getting a quote to underpin the common walls to my sister\'s townhouse, so they can extend their basement garage.', 'active', '2024-07-12 01:43:15', '2024-07-14 08:53:49', '2024-07-14 08:53:49'),
(151, 'Robert Faehringer', NULL, 'robert.faehringer@outlook.com', '0407670225', NULL, NULL, 'https://www.bestunderpinning.com.au', '', 'Would like to get a quote on repacking sub floor due to uneven timber flooring in hallway and bedroom 3.', 'active', '2024-07-13 07:31:43', '2024-07-14 08:53:49', '2024-07-14 08:53:49'),
(152, 'Test User', NULL, 'press@hp.com', '0456123456', NULL, NULL, 'https://sydneyfoundationunderpinning.com.au', 'Uber', 'Demo', 'active', '2024-07-15 12:07:07', '2024-07-16 00:40:27', '2024-07-16 00:40:27'),
(153, 'paul williams', NULL, 'paul@gmail.com', '85852569875', NULL, NULL, 'https://www.bestunderpinning.com.au', NULL, 'testing the thng', 'active', '2024-07-16 08:16:44', '2024-07-16 02:55:05', '2024-07-16 02:55:05'),
(154, 'jenny roy', NULL, 'jenny@hotmail.com', '236598556', NULL, NULL, 'https://www.bestunderpinning.com.au', 'na', 'testing', 'active', '2024-07-16 08:18:52', '2024-07-16 02:55:05', '2024-07-16 02:55:05'),
(155, 'roger', NULL, 'roger@hotmail.com', '785456965', NULL, NULL, 'https://sydneyfoundationunderpinning.com.au', 'na', 'testing', 'active', '2024-07-16 08:17:16', '2024-07-16 02:55:05', '2024-07-16 02:55:05'),
(156, 'janet', NULL, 'janet@yahoo.com', '12563344', NULL, NULL, 'https://sydneyfoundationunderpinning.com.au', 'na', 'testing', 'active', '2024-07-16 08:19:19', '2024-07-16 02:55:05', '2024-07-16 02:55:05'),
(157, 'sakkhor williams', NULL, 'hello@hello.com', '9009256478', NULL, NULL, 'https://www.bestunderpinning.com.au', 'abc_abc', 'test', 'active', '2024-07-16 08:31:10', '2024-07-16 03:01:39', '2024-07-16 03:01:39'),
(158, 'helll llos', NULL, 'hello@hellos.com', '9009090123', NULL, NULL, 'https://www.bestunderpinning.com.au', 'abc_abc', 'test', 'active', '2024-07-16 08:55:15', '2024-07-16 03:25:21', '2024-07-16 03:25:21'),
(159, 'hell', NULL, 'hllo@hlo.com', '1234567890', NULL, NULL, 'https://sydneyfoundationunderpinning.com.au', 'lokm', 'test', 'active', '2024-07-16 08:56:31', '2024-07-16 03:26:38', '2024-07-16 03:26:38'),
(160, 'David Hocking', NULL, 'dhocking@hotmail.com', '0403209579', NULL, NULL, 'https://sydneyfoundationunderpinning.com.au', 'None', 'Hi, we are looking to purchase a property in Freshwater and the building inspection has highlighted some issues with the subfloor.\r\nCould you let me know an email address I can send some details to. \r\nThanks David. ', 'active', '2024-07-16 20:45:36', '2024-07-16 23:14:35', '2024-07-16 23:14:35'),
(161, 'Gregory Berry', NULL, 'kendra.ballentine@outlook.com', '6289012345', NULL, NULL, 'http://www.bestunderpinning.com.au', 'Lucas Hicks', 'Are you aware?\r\n\r\nEmbracing sustainability is here to stay!\r\n\r\nJoin the movement and transform your home or office with sustainable solutions.\r\n\r\nDiscover more >>> https://www.missionnewenergy.com/solar-energy/why-are-solar-panels-so-expensive/.\r\n\r\nReduce expenses on maintenance while preserving nature.\r\n\r\nWhether it\'s solar panels and green roofs, each effort matters.\r\n\r\nAct now and experience the benefits!\r\n\r\nDon\'t be left behind in green innovation.', 'active', '2024-07-18 07:40:48', '2024-07-18 06:07:43', '2024-07-18 06:07:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_users_email_unique` (`email`),
  ADD UNIQUE KEY `admin_users_mobile_unique` (`mobile`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `future_jobs`
--
ALTER TABLE `future_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `future_jobs_job_no_unique` (`job_no`),
  ADD KEY `future_jobs_job_id_foreign` (`job_id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `invoices_invoice_no_unique` (`invoice_no`),
  ADD KEY `invoices_job_id_foreign` (`job_id`),
  ADD KEY `invoices_future_job_id_foreign` (`future_job_id`),
  ADD KEY `invoices_quote_id_foreign` (`quote_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jobs_job_no_unique` (`job_no`),
  ADD KEY `jobs_user_id_foreign` (`user_id`),
  ADD KEY `jobs_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `quotes_quote_no_unique` (`quote_no`),
  ADD KEY `quotes_user_id_foreign` (`user_id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `suppliers_email_unique` (`email`),
  ADD UNIQUE KEY `supplier_no` (`s_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=523;

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `future_jobs`
--
ALTER TABLE `future_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `future_jobs`
--
ALTER TABLE `future_jobs`
  ADD CONSTRAINT `future_jobs_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_future_job_id_foreign` FOREIGN KEY (`future_job_id`) REFERENCES `future_jobs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `invoices_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `invoices_quote_id_foreign` FOREIGN KEY (`quote_id`) REFERENCES `quotes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `jobs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `jobs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `quotes`
--
ALTER TABLE `quotes`
  ADD CONSTRAINT `quotes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
