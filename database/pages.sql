-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 31, 2021 at 04:38 AM
-- Server version: 10.3.28-MariaDB-log-cll-lve
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shamdrxw_shamort`
--

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent` bigint(20) NOT NULL DEFAULT 0,
  `order` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `url`, `icon`, `parent`, `order`) VALUES
(3, 'الصفحات', 'page', 'glyphicon glyphicon-list', 0, 12),
(7, 'عرض الكل', 'page', 'glyphicon glyphicon-edit', 3, 1),
(8, 'اضافه صفحه', 'page/add', 'glyphicon glyphicon-plus', 3, 2),
(9, 'المستخدمين', 'user', 'glyphicon glyphicon-user', 0, 11),
(10, 'اضافه مستخدم', 'user/add', 'glyphicon glyphicon-plus', 9, 2),
(11, 'عرض الكل', 'user', 'glyphicon glyphicon-edit', 9, 1),
(12, 'الصفحه الرئيسيه', '/', 'glyphicon glyphicon-dashboard', 0, 1),
(13, 'الانواع', 'category', 'glyphicon glyphicon-folder-open', 0, 9),
(14, 'اضافه نوع', 'category/create', 'glyphicon glyphicon-plus', 13, 2),
(15, 'عرض الكل', 'category', 'glyphicon glyphicon-list', 13, 1),
(16, 'العملاء', 'sponser', 'glyphicon glyphicon-folder-open', 0, 3),
(17, 'عرض الكل', 'sponser', 'glyphicon glyphicon-list', 16, 1),
(18, 'اضافه عميل', 'sponser/create', 'glyphicon glyphicon-plus', 16, 2),
(19, 'تاريخنا', 'about', 'glyphicon glyphicon-folder-open', 0, 4),
(20, 'عرض الكل', 'about', 'glyphicon glyphicon-edit', 19, 1),
(21, 'اضافه جديده', 'about/create', 'glyphicon glyphicon-plus', 19, 2),
(22, 'المنتجات', 'product', 'glyphicon glyphicon-folder-open', 0, 6),
(23, 'عرض الكل', 'product', 'glyphicon glyphicon-list', 22, 1),
(24, 'اضافه جديده', 'product/create', 'glyphicon glyphicon-plus', 22, 2),
(25, 'الخدمات', 'service', 'glyphicon glyphicon-folder-open', 0, 5),
(26, 'عرض الكل', 'service', 'glyphicon glyphicon-list', 25, 1),
(27, 'اضافه جديده', 'service/create', 'glyphicon glyphicon-plus', 25, 2),
(28, 'تواصل معنا', 'contact', 'glyphicon glyphicon-folder-open', 0, 7),
(29, 'اعدادات الموقع', 'setting', 'glyphicon glyphicon-cog', 0, 13),
(30, 'عرض الاعدادات', 'setting/1', 'glyphicon glyphicon-list', 29, 1),
(31, 'تعديل الاعدادات', 'setting/1/edit', 'glyphicon glyphicon-edit', 29, 2),
(32, 'البانر', 'header', 'glyphicon glyphicon-folder-open', 0, 2),
(33, 'تعديل البانر', 'header/1/edit', 'glyphicon glyphicon-edit', 32, 1),
(34, 'عرض البانر', 'header/1', 'glyphicon glyphicon-list', 32, 2),
(35, 'نهايه الموقع', 'footer', 'glyphicon glyphicon-folder-open', 0, 8),
(36, 'تعديل نهايه الموقع', 'footer/1/edit', 'glyphicon glyphicon-edit', 35, 1),
(37, 'عرض نهايه الموقع', 'footer/1', 'glyphicon glyphicon-list', 35, 2),
(38, 'التواصل الاجتماعي', 'social', 'glyphicon glyphicon-folder-open', 0, 10),
(39, 'اضافه جديده', 'social/create', 'glyphicon glyphicon-plus', 38, 2),
(40, 'عرض الكل', 'social', 'glyphicon glyphicon-list', 38, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
