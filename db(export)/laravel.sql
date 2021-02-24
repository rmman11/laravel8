-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 22, 2021 at 07:50 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`, `email`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$MJoplxHk7AlaqHUKvlqgg.vZo8NlXmHw.JQF9AkZHCcf1q96pX2l2', 'Administrator', NULL, 'rcXOcq8bAokQojUQa2rW9mVpOpMZqtAz49hdpoAGgNOdewaRYfRy7IuvUTYY', '2020-09-09 11:50:24', '2020-09-09 11:50:24'),
(2, 'x-man11', '$2y$10$zk1WL34qXI6rjKsQSDMgfugPCfk4vSsqYO3l6U0tWoDu4h8nxNixO', 'man@yahoo.com', NULL, 'CO2UqntBwc8oXt4Fn5p0cEgwrEB1h3Yq56EjPPFUhhuhXG77u2X0ugi6px8b', '2020-09-13 11:37:50', '2020-09-13 11:37:50'),
(3, 'ionMan', '$2y$10$iJj4i.YDwb7HeEr91E9DQedzaGmiF6.1zA0.NDwH.ERIIyJSNFXZG', 'manmarius42@yahoo.com', 'poza1.jpg', '5YrCwzaqzQEg2DTko9AnwXMrWf5j3FGuEdTuBHM6Uk6AbSeuzFISBOAoBXPu', '2020-09-15 13:19:20', '2020-09-15 13:19:20'),
(4, 'ion', '$2y$10$v81XGvCucXTnVYAbhD1GxeuU17UgtysAm5MkCruTrtsWK1VNU.XCS', 'ion@gmail.com', '2020-09-21-14-35-14-IMG-20200828-WA0028.jpg', '04lmtRbfopn0p2GACttFIZHPOKX80zNkHdlyswuooAqcDyN0SHL8jsmqtDNv', '2020-09-21 08:35:14', '2020-09-21 08:35:14');

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES
(2, 2, 'non', '2021-01-24 10:54:50', '2021-01-24 10:54:50'),
(3, 4, 'quisquam', '2021-01-24 10:54:50', '2021-01-24 10:54:50'),
(4, 7, 'sapiente', '2021-01-24 10:54:50', '2021-01-24 10:54:50'),
(5, 0, 'officiis', '2021-01-24 10:54:50', '2021-01-24 10:54:50'),
(6, 0, 'consequatur', '2021-01-24 10:54:50', '2021-01-24 10:54:50'),
(7, 5, 'id', '2021-01-24 10:54:50', '2021-01-24 10:54:50'),
(8, 9, 'et', '2021-01-24 10:54:50', '2021-01-24 10:54:50'),
(9, 5, 'ea', '2021-01-24 10:54:50', '2021-01-24 10:54:50'),
(10, 4, 'fuga', '2021-01-24 10:54:50', '2021-01-24 10:54:50'),
(11, 7, 'nisi', '2021-01-24 10:54:50', '2021-01-24 10:54:50'),
(12, 8, 'ut', '2021-01-24 10:54:50', '2021-01-24 10:54:50'),
(13, 4, 'cupiditate', '2021-01-24 10:54:50', '2021-01-24 10:54:50'),
(14, 3, 'reiciendis', '2021-01-24 10:54:50', '2021-01-24 10:54:50'),
(15, 7, 'expedita', '2021-01-24 10:54:50', '2021-01-24 10:54:50'),
(16, 5, 'autem', '2021-01-24 10:54:50', '2021-01-24 10:54:50'),
(17, 1, 'perferendis', '2021-01-24 10:54:50', '2021-01-24 10:54:50'),
(18, 7, 'vitae', '2021-01-24 10:54:50', '2021-01-24 10:54:50'),
(19, 1, 'esse', '2021-01-24 10:54:50', '2021-01-24 10:54:50'),
(20, 2, 'sit', '2021-01-24 10:54:50', '2021-01-24 10:54:50'),
(21, 3, 'consequuntur', '2021-01-24 10:54:50', '2021-01-24 10:54:50'),
(22, 5, 'consectetur', '2021-01-24 10:54:50', '2021-01-24 10:54:50'),
(23, 9, 'ullam', '2021-01-24 10:54:50', '2021-01-24 10:54:50'),
(24, 5, 'rem', '2021-01-24 10:54:50', '2021-01-24 10:54:50'),
(25, 4, 'magnam', '2021-01-24 10:54:50', '2021-01-24 10:54:50'),
(26, 1, 'voluptas', '2021-01-24 10:54:50', '2021-01-24 10:54:50'),
(27, 0, 'nemo', '2021-01-24 10:54:50', '2021-01-24 10:54:50'),
(28, 5, 'eaque', '2021-01-24 10:54:50', '2021-01-24 10:54:50'),
(29, 6, 'et', '2021-01-24 10:54:50', '2021-01-24 10:54:50'),
(30, 5, 'ex', '2021-01-24 10:54:50', '2021-01-24 10:54:50'),
(31, 4, 'voluptatem', '2021-01-24 10:54:50', '2021-01-24 10:54:50'),
(32, 5, 'et', '2021-01-24 10:54:50', '2021-01-24 10:54:50'),
(33, 3, 'quasi', '2021-01-24 10:54:50', '2021-01-24 10:54:50'),
(34, 2, 'porro', '2021-01-24 10:54:50', '2021-01-24 10:54:50'),
(35, 9, 'omnis', '2021-01-24 10:54:50', '2021-01-24 10:54:50'),
(36, 7, 'repudiandae', '2021-01-24 10:54:50', '2021-01-24 10:54:50'),
(37, 9, 'eos', '2021-01-24 10:54:50', '2021-01-24 10:54:50'),
(38, 1, 'iure', '2021-01-24 10:54:50', '2021-01-24 10:54:50'),
(39, 4, 'ex', '2021-01-24 10:54:50', '2021-01-24 10:54:50'),
(40, 8, 'ex', '2021-01-24 10:54:50', '2021-01-24 10:54:50'),
(41, 0, 'masinii', '2021-01-24 10:56:30', '2021-01-24 10:56:30'),
(42, 41, 'ford', '2021-01-24 10:57:06', '2021-01-24 10:57:06'),
(43, 41, 'dacia', '2021-01-24 10:57:40', '2021-01-24 10:57:40'),
(44, 27, 'telefoane', '2021-01-24 10:59:38', '2021-01-24 10:59:38'),
(45, 41, 'ford', '2021-01-24 11:00:12', '2021-01-24 11:00:12'),
(46, 5, 'ett', '2021-01-24 13:24:36', '2021-01-24 13:24:36');

-- --------------------------------------------------------

--
-- Table structure for table `cruds`
--

CREATE TABLE `cruds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_time` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `meetings`
--

CREATE TABLE `meetings` (
  `id` int(10) UNSIGNED NOT NULL,
  `attendees` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_time` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
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
(1, '2014_01_07_073615_create_tagged_table', 1),
(2, '2014_01_07_073615_create_tags_table', 1),
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2016_06_29_073615_create_tag_groups_table', 1),
(6, '2016_06_29_073615_update_tags_table', 1),
(7, '2017_05_15_135538_create_albums_table', 1),
(8, '2017_05_15_135619_create_photos_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2019_11_13_000004_create_venues_table', 1),
(11, '2019_11_13_000005_create_events_table', 1),
(12, '2019_11_13_000006_create_meetings_table', 1),
(13, '2020_03_13_083515_add_description_to_tags_table', 1),
(14, '2020_11_09_070015_create_crud_table', 1),
(15, '2020_11_25_143255_create_categories_table', 1),
(16, '2020_11_25_143331_create_posts_table', 1),
(17, '2020_12_01_130152_create_permission_tables', 1),
(18, '2020_12_01_130240_create_products_table', 1),
(19, '2021_02_16_134701_create_tasks_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_name`, `customer_email`, `created_at`, `updated_at`) VALUES
(2, 'Laura', 'laura@gmail.com', '2021-02-18 13:07:21', '2021-02-18 13:07:21');

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`order_id`, `product_id`, `quantity`) VALUES
(1, 2, 3),
(1, 5, 5),
(2, 4, 2);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `album_id` int(11) NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL DEFAULT 0,
  `is_published` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `quantity` int(50) NOT NULL,
  `weight` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `slug`, `description`, `price`, `image`, `status`, `created_at`, `updated_at`, `quantity`, `weight`) VALUES
(3, 48, 'masina22', 'ford34', 'este o masina din anul 2012', '383', '2019-12-06-16-11-08-grap3.jpg', NULL, '2019-12-05 07:05:17', '2020-12-03 08:35:55', 0, 0),
(4, 22, 'masina', 'nou', 'este masina noua', '33000', NULL, NULL, '2020-12-03 07:59:34', '2020-12-03 07:59:34', 0, 0),
(5, 7, 'non', 'voluptatibus', 'Reiciendis blanditiis eum quo tenetur eum. Dolores et earum aut. Pariatur aliquid saepe asperiores tempora ipsum et. Aliquid pariatur qui iusto voluptatum dicta est error officiis.', '4', '776fa42deed980604c4872a9f60a8520.png', NULL, '2020-12-03 08:22:38', '2020-12-03 08:22:38', 0, 0),
(6, 24, 'ad', 'amet', 'Quidem aut earum consequatur ut eaque quae. Deleniti ut explicabo labore sint. Qui officia aut eaque exercitationem sed sit amet.', '4', '2781364c30dfd58f3536fb3078421bce.png', NULL, '2020-12-03 08:22:38', '2020-12-03 08:26:04', 0, 0),
(7, 8, 'aut', 'aut', 'Officia eos aut omnis et consectetur sed et in. Ut optio laboriosam possimus est voluptas at. Reprehenderit ut eaque at fugit.', '8', '3d634c12fe7c1d873dc293d92fa2b719.png', NULL, '2020-12-03 08:22:39', '2020-12-03 08:22:39', 0, 0),
(8, 6, 'nostrum', 'est', 'Labore qui qui fugit itaque consequatur a. Aut vel rerum placeat aliquam facilis et. Ut delectus tenetur ea consectetur praesentium ullam libero. Doloribus voluptatem dolorum aut iste recusandae voluptatem omnis.', '2', '91335335cea146d90d6a0047eee6a49d.png', NULL, '2020-12-03 08:22:39', '2020-12-03 08:22:39', 0, 0),
(9, 4, 'sed', 'et', 'Fugit modi porro qui soluta animi beatae temporibus voluptas. Nesciunt quidem dolore suscipit qui ut. Nemo id omnis sunt temporibus eveniet facere est in. Consequuntur neque ipsa deserunt fugiat quam.', '4', 'a2fe35118102e9a1a60a34a6cb8297d9.png', NULL, '2020-12-03 08:22:40', '2020-12-03 08:22:40', 0, 0),
(10, 1, 'eos', 'et', 'Aut tempora illum qui nisi ratione ullam harum. Est inventore nam in et. Velit necessitatibus rerum numquam eveniet omnis non doloremque. Aspernatur odit eos tempore itaque ab itaque ullam.', '0', 'a37878befc71d52fd6c4e69d463835be.png', NULL, '2020-12-03 08:22:41', '2020-12-03 08:22:41', 0, 0),
(11, 7, 'quisquam', 'et', 'Dolore molestias voluptatum cum voluptates sit. Autem perspiciatis natus iure placeat sunt maiores voluptatem aut. Ut id tempore qui vel aut est fuga.', '1', '8e07953b862fefb841729307e8797d27.png', NULL, '2020-12-03 08:22:41', '2020-12-03 08:22:41', 0, 0),
(12, 8, 'reprehenderit', 'ipsam', 'Voluptatem incidunt aspernatur saepe laborum est blanditiis facilis. Corrupti alias aut facilis dolores reiciendis enim similique. Et quia consectetur hic expedita consequatur maxime esse sint.', '4', 'd80da6cb375a4e85ad04bd6939598848.png', NULL, '2020-12-03 08:22:42', '2020-12-03 08:22:42', 0, 0),
(13, 5, 'quasi', 'aut', 'Omnis sunt incidunt natus alias earum. Aut ex numquam non alias. Accusantium ea quam perspiciatis nostrum et. Quibusdam dolorum quia velit impedit nam fugiat et.', '7', '390b06175c803f04a36aa36df43d7e88.png', NULL, '2020-12-03 08:22:43', '2020-12-03 08:22:43', 0, 0),
(14, 2, 'veniam', 'aspernatur', 'Consequatur facilis eos exercitationem qui. Rem consequatur laudantium ut corrupti ea aut non.', '8', '640b8792eb215d87eef16d6748412d30.png', NULL, '2020-12-03 08:22:43', '2020-12-03 08:22:43', 0, 0),
(15, 5, 'sed', 'soluta', 'Quaerat qui et eaque at. Alias asperiores deserunt maiores et beatae impedit quis. Accusantium aut itaque amet est quo nam sed.', '0', 'd9b1ff74a0d1775b72606c96aef61bf2.png', NULL, '2020-12-03 08:22:44', '2020-12-03 08:22:44', 0, 0),
(16, 5, 'facere', 'quia', 'Quidem quia quo consequuntur adipisci porro sint quo. Ut temporibus eum esse voluptatibus veniam necessitatibus velit. Labore inventore soluta aliquid quasi quis. Eum voluptatem maxime inventore id.', '6', '0e5a9ebd9505f16078a94e5a845f3372.png', NULL, '2020-12-03 08:22:44', '2020-12-03 08:22:44', 0, 0),
(17, 5, 'vel', 'magnam', 'Alias accusamus est sint ut iusto veniam. Dignissimos inventore alias veritatis ea expedita ea. Fugiat officiis corporis aut iste. Id voluptatem eligendi consequatur voluptas dolore. Quibusdam neque voluptas architecto temporibus.', '2', 'af85f420ee0ba2bef5e8d8ceb9cc7ddc.png', NULL, '2020-12-03 08:22:45', '2020-12-03 08:22:45', 0, 0),
(18, 38, 'voluptatem', 'maxime', 'Dolor quae iure sunt et quo officiis et voluptate. Explicabo minus quis amet quia ex dolorem eligendi. Alias voluptatibus aliquam qui officiis porro id.', '2', '625a73905dd8c3ffc49c7a3667bc1b8c.png', NULL, '2020-12-03 08:22:46', '2020-12-03 08:35:37', 0, 0),
(19, 0, 'delectus', 'natus', 'Voluptatibus molestiae fugiat vero corrupti autem voluptatem. Tempora officia aliquam perspiciatis quae autem repellendus. Fugiat eaque recusandae qui velit et et amet assumenda. Ad aperiam ut architecto quo laudantium.', '7', '53e1d7d47175952eb37ab48a7de1914a.png', NULL, '2020-12-03 08:22:46', '2020-12-03 08:22:46', 0, 0),
(20, 5, 'et', 'natus', 'Nobis qui sint ipsum atque voluptatum magni. Sequi mollitia et ratione ut sit non. Eligendi sunt velit similique voluptatem magnam. Natus eveniet ea impedit quibusdam.', '6', 'f54f4ddb587210c4f5f8e595255b2a5b.png', NULL, '2020-12-03 08:22:47', '2020-12-03 08:22:47', 0, 0),
(21, 7, 'illo', 'quaerat', 'Libero ut quam expedita quasi est. Autem quaerat corporis aut nostrum. Qui fugit ipsum laborum amet. Sint ducimus nisi assumenda officiis totam.', '7', '77a8079421b4d04c4df4bec949606665.png', NULL, '2020-12-03 08:22:48', '2020-12-03 08:22:48', 0, 0),
(22, 8, 'sunt', 'autem', 'Eligendi odio quasi quo aspernatur. Consequatur laboriosam est expedita soluta ea. Quos omnis vero commodi.', '3', 'e258a7d313fa84702cb3055735a48f42.png', NULL, '2020-12-03 08:22:48', '2020-12-03 08:22:48', 0, 0),
(23, 9, 'laudantium', 'voluptatem', 'Maxime nihil illo ratione sequi iste. Excepturi assumenda autem itaque. Dolore soluta sapiente eum perspiciatis et alias deleniti. Suscipit qui dolore est incidunt qui qui provident. Cupiditate nihil quisquam eum.', '0', '7359a1dded5dc2a38edbc3c5ef025d2d.png', NULL, '2020-12-03 08:22:49', '2020-12-03 08:22:49', 0, 0),
(24, 3, 'culpa', 'et', 'Asperiores ab quasi nesciunt voluptate ex eum commodi. Dicta qui quam minima nisi impedit qui doloribus. Voluptas nulla neque aut est sunt corrupti vel.', '6', '99358a73d2ca046c417b1e03942daf8d.png', NULL, '2020-12-03 08:22:49', '2020-12-03 08:22:49', 0, 0),
(25, 5, 'aut', 'tempora', 'Labore commodi sapiente nisi possimus fugit iure. Eos suscipit aut et modi hic quia perferendis. Et voluptas rerum rerum occaecati quia. Debitis quia ut laborum repellendus unde.', '5130\n', 'bee0bea6b5c557a267975f3dad2a8a8a.png', NULL, '2020-12-03 08:31:43', '2020-12-03 08:31:43', 0, 0),
(26, 8, 'vero', 'qui', 'Consectetur nesciunt laborum omnis magnam nemo laboriosam est molestiae. Perferendis rerum rem et et cumque dolorem.', '5384\n', '67cac1a3a4b4caaf8d42046518872c22.png', NULL, '2020-12-03 08:31:43', '2020-12-03 08:31:43', 0, 0),
(27, 5, 'praesentium', 'ut', 'Ea sint deserunt ea in. Consequuntur qui est similique. Corrupti optio saepe ducimus non.', '5134\n', '64e65b76a62327d4c4fbf3d04658e696.png', NULL, '2020-12-03 08:31:44', '2020-12-03 08:31:44', 0, 0),
(28, 6, 'est', 'dolor', 'Dolorem nihil saepe eum neque repellat necessitatibus laboriosam. Saepe hic placeat aspernatur eius laudantium deserunt voluptas. Facere quia aspernatur ducimus. Exercitationem facere distinctio eveniet molestiae et saepe.', '5536\n', 'a368a944bdddb0a81d9573fb51eda988.png', NULL, '2020-12-03 08:31:45', '2020-12-03 08:31:45', 0, 0),
(29, 6, 'consequatur', 'officia', 'Incidunt accusamus nihil perferendis sint minus hic id consequatur. Nobis incidunt nesciunt sit hic eum cum fuga vero. Fuga ipsam aut rerum.', '2246\n', 'e912c8ec66250c1e679ef03ef4c88a30.png', NULL, '2020-12-03 08:31:45', '2020-12-03 08:31:45', 0, 0),
(30, 1, 'qui', 'quo', 'Harum aut debitis velit. Eveniet minima culpa harum veniam nam. Molestias natus aperiam cumque neque ut sit non. Qui ut cumque temporibus atque at sed quod. Odit aliquid eius pariatur ut.', '4534\n', '2605906c0de617b54ae7abd4f2c5124a.png', NULL, '2020-12-03 08:31:46', '2020-12-03 08:31:46', 0, 0),
(31, 5, 'alias', 'aliquam', 'Velit et possimus quas excepturi. Repudiandae veniam quisquam similique et. Natus dolorem rerum numquam modi.', '4498\n', 'feddfe04e0a0517b74937248b8b1a05e.png', NULL, '2020-12-03 08:31:47', '2020-12-03 08:31:47', 0, 0),
(32, 5, 'quasi', 'ut', 'Delectus voluptatem aliquid sapiente facere. Et ab pariatur quam aperiam iste dolorem. Optio sit ad quo perferendis eum cupiditate. Quae cupiditate officiis totam quod incidunt.', '1825\n', 'f9bf1099e3cfbd84ddd75146bf48fcce.png', NULL, '2020-12-03 08:31:47', '2020-12-03 08:31:47', 0, 0),
(33, 1, 'ut', 'et', 'Libero qui ex amet. Odit aut at id vitae rerum quo. Et ducimus nesciunt culpa sed.', '5512\n', '31de6d89a9d23b785768d88e87010fca.png', NULL, '2020-12-03 08:31:48', '2020-12-03 08:31:48', 0, 0),
(34, 9, 'recusandae', 'omnis', 'Soluta maiores enim aliquid molestias quo. Eum temporibus quia totam inventore. Voluptas ad et ratione quis incidunt quia deserunt.', '4861\n', '07742d915c6a9b9a31b023bd271d6af7.png', NULL, '2020-12-03 08:31:49', '2020-12-03 08:31:49', 0, 0),
(35, 0, 'eligendi', 'autem', 'Necessitatibus et temporibus amet quam. Quis aut deserunt sint id et. Tempora cumque quaerat aut aut ut provident.', '1503\n', '4aba34a37ac98f33e24fd0dec3fc32da.png', NULL, '2020-12-03 08:31:49', '2020-12-03 08:31:49', 0, 0),
(36, 1, 'et', 'voluptate', 'Molestias aut eum rerum ipsa quasi minima dolorum. Dolores ut aut et et expedita. Vel ipsum quod at vel fugit.', '5999\n', 'd31ec64851bdc3d7adacd90f96527300.png', NULL, '2020-12-03 08:31:50', '2020-12-03 08:31:50', 0, 0),
(37, 6, 'veritatis', 'corporis', 'Voluptate officiis atque laborum. Reprehenderit aut molestiae tenetur inventore quas.', '4393\n', 'd87956510082c0b5396b4772ff42d476.png', NULL, '2020-12-03 08:31:50', '2020-12-03 08:31:50', 0, 0),
(38, 5, 'numquam', 'reiciendis', 'Hic excepturi amet dignissimos placeat nesciunt ullam unde. Ex totam tempora architecto laborum optio officia cumque. Non facere deserunt quidem aspernatur deserunt.', '5996\n', 'a6998188cb3d1d7a9ff530437b04f47f.png', NULL, '2020-12-03 08:31:51', '2020-12-03 08:31:51', 0, 0),
(39, 9, 'sit', 'architecto', 'Quam repellendus sunt ut expedita. Reprehenderit commodi omnis adipisci sit ut. Eos eos quisquam placeat nobis laboriosam doloribus quidem. Corporis quia vel atque id libero quia rerum. Aut voluptatem eius omnis consequatur consectetur sunt fuga.', '2073\n', '8a4409dc9624bae929b44bc7a59cd784.png', NULL, '2020-12-03 08:31:52', '2020-12-03 08:31:52', 0, 0),
(40, 5, 'voluptas', 'beatae', 'Omnis occaecati dolorem hic qui fuga molestiae vel. Minima quia optio aut tempora blanditiis dolorum. Quasi dolor odit ipsum et accusantium assumenda molestiae.', '3076\n', '9ca6e58fa0d222d62708e5fba6ae17e3.png', NULL, '2020-12-03 08:31:52', '2020-12-03 08:31:52', 0, 0),
(41, 4, 'molestiae', 'ut', 'Doloremque ducimus at necessitatibus hic tenetur repellendus. Ut eligendi dolor quia quam ea odit voluptate. Ab saepe deleniti vel dicta corporis aut reiciendis.', '4599\n', '10a705d92432eb139402e1ea3acf759b.png', NULL, '2020-12-03 08:31:53', '2020-12-03 08:31:53', 0, 0),
(42, 1, 'ab', 'odit', 'Repellat fugiat commodi eum. Assumenda eum itaque ut cum et voluptate similique. A blanditiis omnis ducimus reiciendis qui et assumenda. Rerum eaque expedita dolore dicta omnis ut ut.', '5249\n', 'fa47aea4d049bf2bc246d3a5acf59056.png', NULL, '2020-12-03 08:31:54', '2020-12-03 08:31:54', 0, 0),
(43, 5, 'quo', 'est', 'Ea enim fuga sint molestiae nisi nemo sunt quia. Voluptatem expedita maiores quaerat pariatur. Voluptatem distinctio ipsum exercitationem eum sequi ex earum inventore.', '1959\n', '3788dba1bc50dd4a5350d0a5497a64d5.png', NULL, '2020-12-03 08:31:54', '2020-12-03 08:31:54', 0, 0),
(44, 6, 'repellat', 'deleniti', 'Voluptas voluptate veritatis repellat praesentium et. Eum tempora qui excepturi nesciunt provident sint. Nostrum inventore nostrum voluptatem voluptatem eaque.', '3373\n', '7622eec35d41deaa8057c63fba9cf832.png', NULL, '2020-12-03 08:31:55', '2020-12-03 08:31:55', 0, 0),
(45, 5, 'Anvelope', 'maro', 'good', '23', NULL, 1, '2021-01-18 14:51:11', '2021-01-18 14:51:11', 12, 11),
(46, 44, 'Samsung A50 Black', 'samsung', 'este un telefon destul de bun', '320', NULL, 1, '2021-01-24 14:05:29', '2021-01-24 14:05:29', 23, 2);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tagging_tagged`
--

CREATE TABLE `tagging_tagged` (
  `id` int(10) UNSIGNED NOT NULL,
  `taggable_id` int(10) UNSIGNED NOT NULL,
  `taggable_type` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_slug` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tagging_tags`
--

CREATE TABLE `tagging_tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suggest` tinyint(1) NOT NULL DEFAULT 0,
  `count` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `tag_group_id` int(10) UNSIGNED DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tagging_tag_groups`
--

CREATE TABLE `tagging_tag_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `user_id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 2, 'task1', 'este primul task din acest job', '2021-02-16 12:03:30', '2021-02-17 08:55:43'),
(2, 4, 'cum sa facem bani', '', '2021-02-16 12:07:33', '2021-02-16 12:07:33'),
(3, 4, 'cum sa invatam programare', '', '2021-02-16 12:09:10', '2021-02-16 12:09:10'),
(4, 2, 'problema 2', 'reeee', '2021-02-16 12:27:04', '2021-02-17 08:55:10'),
(11, 2, 'ttt', 'ttt', '2021-02-17 07:33:45', '2021-02-17 08:40:07'),
(12, 2, 'muzica', 'este un task nou', '2021-02-17 09:13:37', '2021-02-17 09:13:37'),
(13, 4, 'task3', 'cum sa ne protejam?', '2021-02-17 09:15:47', '2021-02-17 09:15:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `photo`, `gender`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Baciu Ilie', 'baci22@gmail.com', '', 'masculin', NULL, '$2y$10$wo3VbKSTAAI7bsAj6hVjgO5OpvsYw7coNXqbAf/sEcw2XBR/Pn2z.', NULL, '2021-02-16 10:40:21', '2021-02-16 10:40:21'),
(2, 'ana', 'ana@yahoo.com', '', 'femenin', NULL, '$2y$10$zpjAioy.vAgML0kFvTk2Yu0uzA70f2DkiVe7AbyalbS8R1oD1qO8K', NULL, '2021-02-16 10:47:54', '2021-02-16 10:47:54'),
(3, 'laura', 'laura@yahoo.com', '1613472896.jpg', 'femenin', NULL, '$2y$10$SBJG7ijfQvwIDxGdYz14Gujb6Z5.6Kd6fT0f.mB0lGZKbceDM8DM2', NULL, '2021-02-16 10:54:56', '2021-02-16 10:54:56'),
(4, 'man', 'marius@yahoo.com', '1613473001.jpg', 'masculin', NULL, '$2y$10$xBL3yZGx9tRi87ap9qVmSu9d9DzjwL25.W5gaKPgLtm0tZttr.2Xu', NULL, '2021-02-16 10:56:41', '2021-02-16 10:56:41');

-- --------------------------------------------------------

--
-- Table structure for table `venues`
--

CREATE TABLE `venues` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cruds`
--
ALTER TABLE `cruds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `meetings`
--
ALTER TABLE `meetings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `tagging_tagged`
--
ALTER TABLE `tagging_tagged`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tagging_tagged_taggable_id_index` (`taggable_id`),
  ADD KEY `tagging_tagged_taggable_type_index` (`taggable_type`),
  ADD KEY `tagging_tagged_tag_slug_index` (`tag_slug`);

--
-- Indexes for table `tagging_tags`
--
ALTER TABLE `tagging_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tagging_tags_slug_index` (`slug`),
  ADD KEY `tagging_tags_tag_group_id_foreign` (`tag_group_id`);

--
-- Indexes for table `tagging_tag_groups`
--
ALTER TABLE `tagging_tag_groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tagging_tag_groups_slug_index` (`slug`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tasks_user_id_index` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `venues`
--
ALTER TABLE `venues`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `cruds`
--
ALTER TABLE `cruds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meetings`
--
ALTER TABLE `meetings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tagging_tagged`
--
ALTER TABLE `tagging_tagged`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tagging_tags`
--
ALTER TABLE `tagging_tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tagging_tag_groups`
--
ALTER TABLE `tagging_tag_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `venues`
--
ALTER TABLE `venues`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tagging_tags`
--
ALTER TABLE `tagging_tags`
  ADD CONSTRAINT `tagging_tags_tag_group_id_foreign` FOREIGN KEY (`tag_group_id`) REFERENCES `tagging_tag_groups` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
