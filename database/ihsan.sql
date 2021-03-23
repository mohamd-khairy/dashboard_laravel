-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 23, 2021 at 11:07 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ihsan`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'هذا المكان هو مثال لنص يمكن الكتابه فيه بنفس الحجم ونفس الامكان\r\n\r\nهذا المكان هو مثال لنص يمكن الكتابه فيه بنفس الحجم ونفس الامكان\r\n\r\nهذا المكان هو مثال لنص يمكن الكتابه فيه بنفس الحم ونفس الامكان', '2021-03-22 18:46:14', '2021-03-22 18:49:32'),
(2, 'Aut non assumenda ut quasi occaecati nam. Molestias atque facere non voluptatem quo. Nam sint doloremque mollitia ut nulla.', '2021-03-23 16:36:35', '2021-03-23 16:36:35'),
(3, 'Id unde quidem porro aspernatur quo suscipit vel sint. Dignissimos autem nemo aut. Ducimus recusandae laborum distinctio dolorum. Ea velit nisi vitae ipsa voluptas veniam repudiandae.', '2021-03-23 16:36:35', '2021-03-23 16:36:35'),
(4, 'Et est ea commodi. Enim assumenda maiores libero et et voluptatem quae. Quo fuga ipsam eveniet et magnam ea cumque hic. Doloribus magni voluptates rerum autem.', '2021-03-23 16:36:35', '2021-03-23 16:36:35'),
(5, 'Voluptas ipsa qui officiis est et repellendus. Mollitia a quo aut minima. Placeat blanditiis amet assumenda sunt quia est ut dolores. Molestiae voluptatem officia quibusdam.', '2021-03-23 16:36:35', '2021-03-23 16:36:35'),
(6, 'Omnis neque possimus ut et totam illum consequatur. Amet non magni vel consectetur occaecati. Fugit et ea consequatur qui.', '2021-03-23 16:36:35', '2021-03-23 16:36:35'),
(7, 'Rerum dolores cum veritatis iure quo aut. Delectus dolorem laborum molestiae est vitae. Inventore cupiditate sunt ea aliquid animi. Iusto ea nostrum consequatur et aperiam omnis distinctio.', '2021-03-23 16:36:35', '2021-03-23 16:36:35'),
(8, 'Sed minima ipsum voluptatum fugiat quia delectus voluptates. Neque nam voluptatem quo maiores nihil. Magni est quia ullam eum enim reprehenderit. Aliquam unde praesentium qui.', '2021-03-23 16:36:35', '2021-03-23 16:36:35'),
(9, 'Est sint sit in autem. Quis et tempora voluptatem accusamus sunt maiores eos. Accusamus minima sit eum optio vel porro.', '2021-03-23 16:36:35', '2021-03-23 16:36:35'),
(10, 'Omnis quas autem aut aspernatur. Non aliquam voluptate maxime et. Porro esse est inventore at quia quaerat. Eum quia corrupti iure reiciendis illum.', '2021-03-23 16:36:35', '2021-03-23 16:36:35'),
(11, 'Sit culpa fugit voluptatum autem esse ut consectetur. Quae nobis commodi quos optio aliquid. A praesentium ut possimus earum et voluptas. Officiis sit quia qui voluptatem nam.', '2021-03-23 16:36:35', '2021-03-23 16:36:35');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'مشويه', '2021-03-22 17:34:18', '2021-03-23 20:33:43'),
(2, 'مجمدات', '2021-03-22 17:41:19', '2021-03-22 17:41:19'),
(3, 'طازج', '2021-03-22 17:41:26', '2021-03-22 18:12:38'),
(5, 'بانيه', '2021-03-22 17:41:50', '2021-03-22 17:41:50');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `mobile`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Prof. Blair Yundt', 'elody98@hotmail.com', '1156755541655', 'Ut quod quaerat est iste dolorem nobis officiis. Nobis nulla beatae nesciunt consequatur. Qui blanditiis ullam fugiat quam sed asperiores.', '2021-03-23 16:36:35', '2021-03-23 16:36:35'),
(2, 'Ms. Alisha Pfannerstill I', 'sebastian86@collier.com', '9440297603042', 'Ut eum distinctio distinctio autem inventore est et. Doloremque quia et vero. Nobis sit numquam aut temporibus. Rerum iusto voluptatum ut excepturi deserunt mollitia aliquam.', '2021-03-23 16:36:35', '2021-03-23 16:36:35'),
(3, 'Susanna Welch', 'nicolas.ursula@luettgen.com', '5959679113186', 'Et blanditiis laboriosam maxime animi iusto est. Fugit omnis nam minus quo assumenda officia adipisci. Sint sed tempore sed quia nisi ratione omnis maxime. Et voluptas architecto ex distinctio minus.', '2021-03-23 16:36:35', '2021-03-23 16:36:35'),
(4, 'Ola Flatley Sr.', 'summer.halvorson@yahoo.com', '1507554246876', 'Delectus id modi et et. Hic provident harum id omnis temporibus. Mollitia quo pariatur rerum facilis.', '2021-03-23 16:36:35', '2021-03-23 16:36:35'),
(5, 'Rollin West', 'nathaniel.kautzer@hotmail.com', '8304284219574', 'Incidunt neque at fugit et tempore. Qui dolor natus sed quibusdam nostrum minus at.', '2021-03-23 16:36:35', '2021-03-23 16:36:35'),
(6, 'Birdie Baumbach', 'gabe44@hotmail.com', '1010800721283', 'Porro et ea sint labore dolorum. Laborum autem ut nulla quaerat placeat sequi ducimus deserunt. Est doloremque explicabo porro sed sunt quo.', '2021-03-23 16:36:35', '2021-03-23 16:36:35'),
(7, 'Maritza Beier', 'kale42@oreilly.com', '9399349095688', 'Odit consequatur nesciunt ab molestiae. A labore incidunt numquam quia. Porro eos odit beatae veritatis omnis facere.', '2021-03-23 16:36:35', '2021-03-23 16:36:35'),
(8, 'Keanu Blanda', 'knikolaus@hotmail.com', '8588760241377', 'Esse mollitia nisi vel ullam vitae. Consequuntur provident molestiae a delectus. Dolores soluta velit maxime earum repellendus quaerat aspernatur. Fugiat officia similique ratione debitis quia.', '2021-03-23 16:36:35', '2021-03-23 16:36:35'),
(9, 'Mr. Remington Leuschke', 'fjacobson@hotmail.com', '7337422543794', 'Similique quo esse et iusto mollitia illo rem. Maxime quos illum commodi iusto illo facere a. Possimus repellendus velit quaerat voluptates sapiente voluptatum.', '2021-03-23 16:36:35', '2021-03-23 16:36:35'),
(10, 'Amaya Hirthe', 'keyshawn.mertz@strosin.org', '8693292052772', 'Sunt neque eos autem harum exercitationem in autem. Aliquam totam odio magnam neque vero voluptatem. Asperiores qui soluta perspiciatis. Reprehenderit dolor quia excepturi nobis id blanditiis.', '2021-03-23 16:36:35', '2021-03-23 16:36:35'),
(11, 'mohamed khairy', 'red.devile2011@gmail.com', '01555512090', 'fdfdf', '2021-03-23 19:35:22', '2021-03-23 19:35:22'),
(12, 'mohamed', 'red.devile2011@gmail.com', '01021952160', 'yyy', '2021-03-23 19:35:55', '2021-03-23 19:35:55'),
(13, 'mohamed khairy', 'red.devile2011@gmail.com', '01555512090', 'يبيب', '2021-03-23 19:40:55', '2021-03-23 19:40:55'),
(14, 'mohamed khairy', 'red.devile2011@gmail.com', '01555512090', 'sdfs', '2021-03-23 19:41:49', '2021-03-23 19:41:49');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'شمورت', 'تقدر تتابع وتشوف افضل اسعار الفراخ وافضل منتجات الطيور معانا في شمورت دلوقتي مع شمورت هتشوف افضل واجود الانواع', '2021-03-23 17:27:15', '2021-03-23 17:27:15');

-- --------------------------------------------------------

--
-- Table structure for table `headers`
--

CREATE TABLE `headers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `video` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `headers`
--

INSERT INTO `headers` (`id`, `title`, `description`, `image`, `video`, `created_at`, `updated_at`) VALUES
(1, 'مرحبا', 'تقدر تتابع وتشوف افضل اسعار الفراخ وافضل منتجات الطيور معانا في شمورت دلوقتي مع شمورت هتشوف افضل واجود الانواع', 'images/161653929617835.jpeg', 'https://www.youtube.com/watch?v=MiSSj-y649Q&ab_channel=TemryChicken', '2021-03-23 17:27:15', '2021-03-23 20:41:36');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_25_132837_create_pages_table', 1),
(5, '2021_03_22_182913_create_categories_table', 2),
(6, '2021_03_22_183036_create_sponsers_table', 2),
(7, '2021_03_22_183106_create_abouts_table', 2),
(8, '2021_03_22_183156_create_products_table', 2),
(9, '2021_03_22_183341_create_settings_table', 2),
(10, '2021_03_22_183605_create_contacts_table', 2),
(11, '2021_03_22_192512_create_services_table', 2),
(12, '2021_03_23_190058_create_headers_table', 3),
(13, '2021_03_23_190118_create_footers_table', 3),
(14, '2021_03_23_190912_create_socials_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent` bigint(20) NOT NULL DEFAULT '0',
  `order` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `url`, `icon`, `parent`, `order`) VALUES
(3, 'الصفحات', 'page', 'glyphicon glyphicon-list', 0, 3),
(7, 'عرض الكل', 'page', 'glyphicon glyphicon-edit', 3, 1),
(8, 'اضافه صفحه', 'page/add', 'glyphicon glyphicon-plus', 3, 2),
(9, 'المستخدمين', 'user', 'glyphicon glyphicon-user', 0, 3),
(10, 'اضافه مستخدم', 'user/add', 'glyphicon glyphicon-plus', 9, 2),
(11, 'عرض الكل', 'user', 'glyphicon glyphicon-edit', 9, 1),
(12, 'الصفحه الرئيسيه', '/', 'glyphicon glyphicon-dashboard', 0, 1),
(13, 'الانواع', 'category', 'glyphicon glyphicon-folder-open', 0, 2),
(14, 'اضافه نوع', 'category/create', 'glyphicon glyphicon-plus', 13, 2),
(15, 'عرض الكل', 'category', 'glyphicon glyphicon-list', 13, 1),
(16, 'العملاء', 'sponser', 'glyphicon glyphicon-folder-open', 0, 2),
(17, 'عرض الكل', 'sponser', 'glyphicon glyphicon-list', 16, 1),
(18, 'اضافه عميل', 'sponser/create', 'glyphicon glyphicon-plus', 16, 2),
(19, 'تاريخنا', 'about', 'glyphicon glyphicon-folder-open', 0, 2),
(20, 'عرض الكل', 'about', 'glyphicon glyphicon-edit', 19, 1),
(21, 'اضافه جديده', 'about/create', 'glyphicon glyphicon-plus', 19, 2),
(22, 'المنتجات', 'product', 'glyphicon glyphicon-folder-open', 0, 2),
(23, 'عرض الكل', 'product', 'glyphicon glyphicon-list', 22, 1),
(24, 'اضافه جديده', 'product/create', 'glyphicon glyphicon-plus', 22, 2),
(25, 'الخدمات', 'service', 'glyphicon glyphicon-folder-open', 0, 2),
(26, 'عرض الكل', 'service', 'glyphicon glyphicon-list', 25, 1),
(27, 'اضافه جديده', 'service/create', 'glyphicon glyphicon-plus', 25, 2),
(28, 'تواصل معنا', 'contact', 'glyphicon glyphicon-folder-open', 0, 2),
(29, 'اعدادات الموقع', 'setting', 'glyphicon glyphicon-cog', 0, 2),
(30, 'عرض الاعدادات', 'setting/1', 'glyphicon glyphicon-list', 29, 1),
(31, 'تعديل الاعدادات', 'setting/1/edit', 'glyphicon glyphicon-edit', 29, 2),
(32, 'البانر', 'header', 'glyphicon glyphicon-folder-open', 0, 2),
(33, 'تعديل البانر', 'header/1/edit', 'glyphicon glyphicon-edit', 32, 1),
(34, 'عرض البانر', 'header/1', 'glyphicon glyphicon-list', 32, 2),
(35, 'نهايه الموقع', 'footer', 'glyphicon glyphicon-folder-open', 0, 2),
(36, 'تعديل نهايه الموقع', 'footer/1/edit', 'glyphicon glyphicon-edit', 35, 1),
(37, 'عرض نهايه الموقع', 'footer/1', 'glyphicon glyphicon-list', 35, 2),
(38, 'التواصل الاجتماعي', 'social', 'glyphicon glyphicon-folder-open', 0, 2),
(39, 'اضافه جديده', 'social/create', 'glyphicon glyphicon-plus', 38, 2),
(40, 'عرض الكل', 'social', 'glyphicon glyphicon-list', 38, 1);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `description`, `price`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Nelda Turner Sr.', 'images/161653866321814.jpg', 'Saepe natus quia mollitia velit. Vel qui vitae facere molestias maiores. At quos sed accusamus. Aliquid necessitatibus aliquam voluptas odio quia.', '72', 2, '2021-03-23 16:50:13', '2021-03-23 20:31:46'),
(2, 'Sophie O\'Hara', 'images/161653867324861.jpg', 'A commodi assumenda vitae quibusdam officia illo. Voluptatem cum aut eius dolorem iure. Ut vel accusamus voluptatem sit et molestiae deleniti repellendus.', '129', 5, '2021-03-23 16:50:13', '2021-03-23 20:31:13'),
(3, 'Corrine Dickinson', 'images/161653869117134.jpg', 'Ut illum minima quae ut consequatur voluptas aut similique. Aliquid autem voluptas non dolore rem quos. Itaque omnis delectus adipisci qui.', '453', 3, '2021-03-23 16:50:13', '2021-03-23 20:31:58'),
(11, 'دجاج كنتاكي', 'images/161653889221812.png', 'دجاج كنتاكيدجاج كنتاكيدجاج كنتاكيدجاج كنتاكيدجاج كنتاكي', '100', 1, '2021-03-23 20:34:52', '2021-03-23 20:34:52'),
(12, 'دجاج ابو حلب', 'images/161653894454508.jpg', 'دجاج ابو حلبدجاج ابو حلبدجاج ابو حلبدجاج ابو حلبدجاج ابو حلب', '600', 2, '2021-03-23 20:35:44', '2021-03-23 20:35:44'),
(13, 'دجاج قلعه حلب', 'images/161653896785400.jpg', 'دجاج ابو حلبدجاج ابو حلبدجاج ابو حلبدجاج ابو حلب', '1000', 3, '2021-03-23 20:36:07', '2021-03-23 20:36:07');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `image`, `description`, `price`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'فراخ عالفحم', 'images/161653906852768.jpeg', 'فراخ عالفحمفراخ عالفحمفراخ عالفحمفراخ عالفحم', '500', 1, '2021-03-23 20:37:48', '2021-03-23 20:37:48'),
(2, 'فراخ مشويه', 'images/161653908811389.jpeg', 'فراخ مشويهفراخ مشويهفراخ مشويهفراخ مشويهفراخ مشويهفراخ مشويهفراخ مشويه', '500', 2, '2021-03-23 20:38:08', '2021-03-23 20:38:08'),
(3, 'فراخ مقليه', 'images/161653910962803.jpeg', 'فرفراخ مقليهفراخ مقليهفراخ مقليهفراخ مقليهفراخ مقليهفراخ مقليهفراخ مقليهفراخ مقليهفراخ مقليهاخ مقليه', '100', 3, '2021-03-23 20:38:29', '2021-03-23 20:38:29'),
(4, 'فراخ محمره', 'images/161653913588708.jpeg', 'فراخ محمرهفراخ محمرهفراخ محمرهفراخ محمرهفراخ محمرهفراخ محمره', '500', 5, '2021-03-23 20:38:55', '2021-03-23 20:38:55'),
(5, 'فراخ فراخ', 'images/161653915885095.jpeg', 'فراخ فراخفراخ فراخفراخ فراخفراخ فراخفراخ فراخفراخ فراخفراخ فراخ', '500', 2, '2021-03-23 20:39:18', '2021-03-23 20:39:18');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Shamort', 'images/161653289910371.png', NULL, '2021-03-23 18:54:59');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `name`, `icon`, `url`, `created_at`, `updated_at`) VALUES
(1, 'facebook', 'bx bxl-facebook', 'https://facebook.com', '2021-03-23 17:34:58', '2021-03-23 17:34:58'),
(2, 'youtube', 'bx bxl-youtube', 'https://youtube.com', '2021-03-23 17:35:19', '2021-03-23 17:35:19'),
(3, 'instagram', 'bx bxl-instagram', 'https://instagram.com', '2021-03-23 17:35:57', '2021-03-23 18:57:02'),
(4, 'twitter', 'bx bxl-twitter', 'https://twitter.com', '2021-03-23 18:57:44', '2021-03-23 18:57:44');

-- --------------------------------------------------------

--
-- Table structure for table `sponsers`
--

CREATE TABLE `sponsers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sponsers`
--

INSERT INTO `sponsers` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Jose Corwin MD', 'images/161653310097672.png', '2021-03-23 16:50:13', '2021-03-23 18:58:20'),
(2, 'Ms. Tiana Schaefer', 'images/161653330588602.png', '2021-03-23 16:50:13', '2021-03-23 19:01:45'),
(3, 'Demario Lowe', 'images/161653331996596.png', '2021-03-23 16:50:13', '2021-03-23 19:01:59'),
(4, 'Beaulah Kunde', 'images/161653333018046.png', '2021-03-23 16:50:13', '2021-03-23 19:02:10'),
(5, 'Mrs. Lessie Schiller III', 'images/161653334067636.png', '2021-03-23 16:50:13', '2021-03-23 19:02:20'),
(6, 'Deanna McCullough', 'images/161653335813417.png', '2021-03-23 16:50:13', '2021-03-23 19:02:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `third_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `second_name`, `third_name`, `last_name`, `mobile`, `country`, `city`, `email`, `email_verified_at`, `password`, `gender`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'mohamed', 'mohamed', 'mohamed', 'khairy', '+201555512090', 'Egypt', 'damanhour', 'admin@admin.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, NULL, '2020-07-25 13:53:00', '2020-07-25 14:06:51'),
(3, 'Aiyana Cummerata', 'mohamed', 'mohamed', 'khairy', '01555512090', 'Egypt', 'Cairo', 'm.khairy@evntoo.com', NULL, '$2y$10$GUHhkwntAEjNK0wmvVxDde07Gi3tK53IZwpBtDmIaL9jw4iJmgFli', 1, NULL, '2021-03-22 16:14:02', '2021-03-22 16:14:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headers`
--
ALTER TABLE `headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_category_id_foreign` (`category_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsers`
--
ALTER TABLE `sponsers`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `headers`
--
ALTER TABLE `headers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sponsers`
--
ALTER TABLE `sponsers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
