-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2023 at 06:49 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nookx-ecommerce-site`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_price` bigint(20) UNSIGNED NOT NULL,
  `product_qty` int(11) NOT NULL DEFAULT 0,
  `price` int(11) NOT NULL,
  `discount_price` int(11) DEFAULT NULL,
  `cupon_used` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `product_price`, `product_qty`, `price`, `discount_price`, `cupon_used`, `created_at`, `updated_at`) VALUES
(4, 6, 3, 18, 1, 788, NULL, 0, '2023-04-19 10:03:22', '2023-04-19 10:03:22');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`, `cat_slug`, `image`, `image_url`, `created_at`, `updated_at`) VALUES
(1, 'Webster Mosciski', 'consequatur-incidunt-sed-quaerat', 'Cora Kuhn MD', 'https://via.placeholder.com/640x480.png/0066aa?text=provident', '2023-04-19 05:06:20', '2023-04-19 05:06:20'),
(2, 'Ollie Ferry I', 'laborum-minima-quae-ut-dolorum-dolores-voluptatem', 'Prof. Tobin Berge', 'https://via.placeholder.com/640x480.png/00aa88?text=consequuntur', '2023-04-19 05:06:20', '2023-04-19 05:06:20'),
(3, 'Deshawn Jacobson', 'est-est-saepe-consequatur-repudiandae-quis-rem', 'Ms. Noemi Kris V', 'https://via.placeholder.com/640x480.png/004477?text=ratione', '2023-04-19 05:06:20', '2023-04-19 05:06:20'),
(4, 'Ms. Janelle McClure', 'et-temporibus-placeat-enim-unde-eligendi', 'Ms. Genevieve Dach I', 'https://via.placeholder.com/640x480.png/00ccee?text=consequatur', '2023-04-19 05:06:20', '2023-04-19 05:06:20'),
(5, 'Mrs. Carolina O\'Connell', 'veniam-est-vel-inventore-at-commodi-harum', 'Isaac Barrows', 'https://via.placeholder.com/640x480.png/00ee22?text=architecto', '2023-04-19 05:06:20', '2023-04-19 05:06:20'),
(6, 'Maverick Denesik', 'ab-minima-possimus-atque-quia', 'Lue Haley Sr.', 'https://via.placeholder.com/640x480.png/00dd88?text=vitae', '2023-04-19 05:06:20', '2023-04-19 05:06:20'),
(7, 'Benedict Smitham', 'unde-quas-incidunt-et-iste-eos', 'Uriel Barrows', 'https://via.placeholder.com/640x480.png/00ff99?text=quos', '2023-04-19 05:06:20', '2023-04-19 05:06:20'),
(8, 'Prof. Tyrell Feil', 'vel-minus-qui-error-quam-dolor-facilis-deleniti', 'Mrs. Jannie Jacobi', 'https://via.placeholder.com/640x480.png/00ff88?text=dolorum', '2023-04-19 05:06:20', '2023-04-19 05:06:20'),
(9, 'Kallie Ratke', 'autem-numquam-non-et', 'Breanna Jacobson', 'https://via.placeholder.com/640x480.png/00aa11?text=fugiat', '2023-04-19 05:06:20', '2023-04-19 05:06:20'),
(10, 'Emmanuelle Stroman', 'id-eius-sunt-impedit-beatae-tenetur-laudantium', 'Emory Littel', 'https://via.placeholder.com/640x480.png/0033ee?text=ea', '2023-04-19 05:06:20', '2023-04-19 05:06:20'),
(11, 'Mr. Adolph Schamberger PhD', 'ducimus-id-natus-ab', 'Prof. Alva Bartoletti', 'https://via.placeholder.com/640x480.png/00aa44?text=est', '2023-04-19 05:06:20', '2023-04-19 05:06:20'),
(12, 'Okey Fadel', 'rerum-consequatur-quam-aspernatur-nostrum', 'Lupe Connelly', 'https://via.placeholder.com/640x480.png/009988?text=ut', '2023-04-19 05:06:20', '2023-04-19 05:06:20');

-- --------------------------------------------------------

--
-- Table structure for table `category_cupons`
--

CREATE TABLE `category_cupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` int(11) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `product_id`, `parent_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 4, 26, NULL, 'Quod sint sunt architecto placeat earum ab fugiat recusandae id quam eos itaque rem incidunt vel cum nostrum amet eos consectetur omnis ut reprehenderit cupiditate optio corporis ratione aut aliquam debitis tempora excepturi.', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(2, 4, 37, NULL, 'Laudantium incidunt et neque quia explicabo quae velit id praesentium maxime quibusdam et ducimus iure fuga ea.', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(3, 1, 50, NULL, 'Et tenetur dolore est distinctio voluptas assumenda et quasi animi numquam voluptates nobis omnis et dolores beatae.', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(4, 4, 2, NULL, 'Fugit quia sit nihil minima velit eum nihil perspiciatis quia consequatur asperiores tempore ut et voluptatem ea nemo sed quibusdam adipisci vel quas tempora qui labore placeat quo et consequatur magni quos praesentium ipsum.', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(5, 4, 51, NULL, 'Et molestias qui et perferendis autem ipsam nam ea cupiditate laudantium adipisci fuga nostrum hic ipsum est sunt odit ut iure qui totam maiores vitae est nam.', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(6, 1, 39, NULL, 'Ea voluptatem repellat eum ut explicabo eos dignissimos at odio sunt reiciendis repudiandae sed rem incidunt laborum dolor omnis velit tempora voluptas voluptatem quam recusandae repudiandae voluptatibus repudiandae qui.', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(7, 3, 45, NULL, 'Quis qui quisquam aut dolorem odio dolorum consequatur qui velit iusto distinctio voluptatem natus aut ab consequatur omnis nihil non officia eveniet nemo autem et doloribus unde alias aut nihil et temporibus.', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(8, 2, 49, NULL, 'Quo est dicta a placeat architecto et porro quia veniam eveniet qui ut velit natus iste maxime voluptatem voluptatum molestiae dolore et dolores voluptas qui veritatis quisquam facilis repellat a iste.', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(9, 5, 47, NULL, 'Ab voluptatem hic ut adipisci voluptas et quaerat officia blanditiis perferendis temporibus saepe impedit eos dolores dolorem architecto et beatae ipsam et commodi quam in tempora sunt molestiae perferendis consequatur distinctio ipsum quaerat voluptas.', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(10, 5, 23, NULL, 'Sequi similique qui harum cumque natus cumque quaerat magni et pariatur sapiente dolore quasi et molestiae sed ipsum voluptatem.', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(11, 1, 54, NULL, 'Minus et at autem dolores numquam repellat architecto velit ullam perferendis et voluptatem iure molestias porro sint sunt non consequatur quaerat quos accusantium provident molestiae consequuntur atque ut totam aliquam eos consequatur magnam aperiam qui.', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(12, 1, 52, NULL, 'Corporis quo delectus dolorem fuga sed provident labore temporibus est incidunt vel error ut omnis rerum dignissimos voluptatem animi quia et recusandae quia consequuntur dignissimos sunt voluptas amet ducimus quia est ut.', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(13, 4, 39, NULL, 'Voluptas eos voluptatum sunt dolor assumenda reprehenderit voluptate possimus libero nisi aperiam enim rerum eaque perferendis autem quibusdam facilis dolorem molestias doloremque porro ab autem cumque non aut.', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(14, 3, 7, NULL, 'Reiciendis explicabo qui quas officiis laborum autem ipsam consequatur et fugit voluptates impedit aliquam non consequatur tenetur molestiae et unde harum non repellat qui ipsa soluta rerum sit corporis.', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(15, 4, 18, NULL, 'Magnam tempora voluptas molestias facilis ducimus rerum dolor debitis eligendi dolor et vero tenetur reprehenderit beatae et non et voluptas laboriosam assumenda error.', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(16, 4, 25, NULL, 'Aspernatur in sunt et incidunt temporibus ad amet fugit voluptas consequatur qui laboriosam voluptas voluptates eius qui natus dolorem rem adipisci quas iusto illum animi numquam.', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(17, 2, 19, NULL, 'Voluptatem fugit et sunt quasi est minima autem nihil nam vel qui molestiae autem natus quo.', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(18, 2, 18, NULL, 'Rem aut ut ut ut quisquam ut deserunt est quod ut at libero voluptas quidem voluptas esse consequatur iste maxime accusamus consequatur rem alias.', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(19, 5, 45, NULL, 'Hic exercitationem in autem nemo id eos harum perspiciatis vel repellat aut aut et in dolor numquam eaque omnis animi ab soluta deleniti est nemo possimus vitae dignissimos perspiciatis ea ea.', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(20, 3, 3, NULL, 'Deleniti excepturi nostrum voluptatem magni alias dignissimos quas aut ea vel dignissimos commodi delectus tempore sapiente ullam.', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(21, 5, 7, NULL, 'Temporibus iure doloribus ipsum laborum quaerat ut quibusdam rerum temporibus nihil assumenda quia consectetur labore beatae qui magnam labore placeat vero voluptates asperiores neque totam ut non consectetur voluptas minima exercitationem doloribus quidem.', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(22, 4, 50, NULL, 'Totam accusamus natus iure quae doloribus in rerum rerum nihil qui perspiciatis eligendi voluptatem incidunt eos.', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(23, 1, 37, NULL, 'Sapiente omnis hic consequatur maiores ut atque vel modi ullam culpa voluptas est aut temporibus aperiam tempore in laudantium quis ut omnis consequuntur in labore facilis quis repudiandae molestias velit et sunt eius dolores.', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(24, 2, 47, NULL, 'Dignissimos omnis nesciunt aut quaerat quis nulla aut consequatur sed quas explicabo dolorem ut excepturi iusto aliquam est est ut a sed eveniet cupiditate iure illo voluptate explicabo voluptatum esse consequatur quasi ipsam quia voluptas nemo.', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(25, 1, 45, NULL, 'Et voluptatibus ea quia esse rerum aspernatur eos voluptatibus maxime aliquam a sequi dolores similique labore modi placeat ut cum ut aliquam velit consequatur nisi.', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(26, 4, 21, NULL, 'Et dolores iure quisquam expedita sed eveniet eos est nostrum rerum quod sequi repellat ut qui.', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(27, 1, 19, NULL, 'Voluptatibus voluptate quam modi blanditiis adipisci qui qui expedita at optio consequatur temporibus quasi et exercitationem aperiam vel.', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(28, 3, 46, NULL, 'Optio sapiente aut aut sapiente culpa harum ratione ratione nulla vel suscipit beatae suscipit molestiae molestias perspiciatis eos voluptatibus ut architecto autem quod ut est et et hic illum.', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(29, 3, 2, NULL, 'Quis voluptatem fuga voluptatem sint animi error enim minus temporibus dignissimos velit commodi ut laboriosam eligendi alias aut sit sint est rerum culpa atque et quo possimus alias quam odio dolorum voluptate est blanditiis qui.', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(30, 4, 6, NULL, 'Ad nesciunt debitis incidunt et velit inventore dolores excepturi dolorem dolorum ad nobis aut qui necessitatibus beatae nostrum voluptatem blanditiis.', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(31, 4, 32, NULL, 'Minus odio iusto eum deserunt magnam tenetur velit atque repellat accusamus in ab et deserunt mollitia itaque et porro ut ex.', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(32, 4, 52, NULL, 'Quia rerum excepturi expedita nulla iste minus ea consequatur dolores quis vero asperiores aut aperiam maiores tempore culpa.', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(33, 4, 18, NULL, 'Quae ex quisquam sit corrupti molestiae ut error non maiores ut autem voluptas consequatur mollitia et quisquam eos beatae nihil voluptatem aut commodi maxime harum est vero laborum architecto.', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(34, 2, 24, NULL, 'Sapiente laboriosam corporis mollitia assumenda velit qui reiciendis veniam rerum voluptatem nihil aspernatur quod voluptates dolore fugiat expedita iste vitae consectetur itaque accusamus est asperiores molestiae maxime adipisci harum.', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(35, 1, 34, NULL, 'Laudantium ratione veritatis sint officia ipsum unde eum quam blanditiis error repellendus et nihil eius labore aut tempore occaecati explicabo quae similique sapiente commodi labore nostrum vitae ut vitae commodi repellat.', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(36, 5, 48, NULL, 'Quis in delectus quaerat enim voluptatum corrupti omnis ducimus provident temporibus sunt est repellendus neque libero at qui voluptates nulla et nulla id.', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(37, 5, 23, NULL, 'Et rem magnam nobis quia impedit nam sed laborum incidunt nemo quia dolores molestias est quibusdam iste ut cupiditate magnam sed.', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(38, 2, 37, NULL, 'Id odit quis quaerat ipsa et beatae necessitatibus mollitia qui odit in quas qui mollitia est est non placeat sapiente.', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(39, 4, 12, NULL, 'Id repellat officia maiores est quia nobis incidunt voluptatem earum consequatur pariatur beatae similique deserunt sed iste quibusdam dolores soluta atque quae nostrum deleniti nesciunt dolores aut reprehenderit culpa sint doloribus debitis nobis ut.', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(40, 1, 5, NULL, 'Ullam delectus tenetur enim ut labore nesciunt qui dolorem in minima ratione eum sint enim labore veritatis voluptatibus ipsam qui et ullam dolore temporibus eos ab dolor quaerat asperiores itaque velit illo vel alias.', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(41, 3, 7, NULL, 'Quis rerum consequatur aut id qui ex rem optio labore porro voluptas facilis doloribus nisi omnis ipsam velit ea ducimus accusantium commodi quis sequi architecto ipsa.', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(42, 3, 11, NULL, 'Ea sit rerum veritatis cumque est eos non qui quia dolor ut qui odio ad non consequatur voluptatem quasi consectetur veniam omnis velit.', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(43, 2, 25, NULL, 'Sunt voluptatem dolores harum deserunt illum dignissimos et aut et delectus occaecati autem est sit similique et corporis.', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(44, 2, 20, NULL, 'Doloremque et error recusandae alias dolor sit corrupti voluptatem corrupti cupiditate odit occaecati aliquam blanditiis unde non libero ipsum est quo dolor voluptate repellendus ipsam.', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(45, 1, 39, NULL, 'Nobis voluptate quis et libero sapiente ea tempore rerum odio ullam quaerat aliquam quidem officiis explicabo qui perferendis cumque et reprehenderit quaerat facilis sunt quis quisquam voluptatum voluptatem tenetur nobis magni.', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(46, 5, 8, NULL, 'Tempora et qui consectetur explicabo non et autem eveniet pariatur cumque minima deleniti id minima consequatur quidem cupiditate repudiandae quam voluptate accusantium fuga doloremque doloribus suscipit suscipit aut modi consequatur quasi occaecati.', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(47, 5, 34, NULL, 'Assumenda provident voluptatum temporibus nulla totam doloremque veritatis praesentium beatae consequatur occaecati delectus blanditiis quos recusandae voluptatibus vel et possimus exercitationem repudiandae et ut quis odio in suscipit accusamus earum numquam officiis et qui libero.', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(48, 1, 53, NULL, 'Et delectus ad ut a mollitia iure deleniti eveniet iure molestiae voluptates qui vel aliquid doloremque facere placeat praesentium reprehenderit exercitationem labore corporis neque quasi inventore et aut deleniti molestiae fuga illum incidunt nemo eaque.', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(49, 1, 36, NULL, 'Et et veniam quo inventore ducimus placeat expedita officia voluptatem dolores veritatis voluptatem et voluptatibus ut voluptas eligendi ea sed iure laudantium modi.', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(50, 4, 47, NULL, 'Quis dolorem optio dolores id consequuntur cupiditate eligendi debitis id eligendi totam non unde eos architecto nemo incidunt vitae nulla cumque eligendi.', '2023-04-19 05:06:22', '2023-04-19 05:06:22');

-- --------------------------------------------------------

--
-- Table structure for table `cupons`
--

CREATE TABLE `cupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cupon_used` int(11) NOT NULL DEFAULT 0,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cupons`
--

INSERT INTO `cupons` (`id`, `name`, `type`, `discount`, `cupon_used`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(1, 'Romjan Offer', 'Fixed', '200', 1, NULL, NULL, NULL, '2023-04-19 06:13:30'),
(2, 'Eid Offer', 'Discount', '20', 1, NULL, NULL, NULL, '2023-04-19 06:14:56');

-- --------------------------------------------------------

--
-- Table structure for table `discount_prices`
--

CREATE TABLE `discount_prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `discount_price` int(11) DEFAULT NULL,
  `total_price` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `discount_prices`
--

INSERT INTO `discount_prices` (`id`, `user_id`, `discount_price`, `total_price`, `created_at`, `updated_at`) VALUES
(1, 6, 2723, NULL, '2023-04-19 08:34:59', '2023-04-19 08:34:59'),
(2, 6, 2723, NULL, '2023-04-19 08:35:27', '2023-04-19 08:35:27'),
(3, 6, 2723, NULL, '2023-04-19 08:35:41', '2023-04-19 08:35:41'),
(4, 6, 2723, NULL, '2023-04-19 08:36:15', '2023-04-19 08:36:15'),
(5, 6, 2723, NULL, '2023-04-19 08:36:54', '2023-04-19 08:36:54'),
(6, 6, 2723, NULL, '2023-04-19 08:37:20', '2023-04-19 08:37:20'),
(7, 6, 2723, NULL, '2023-04-19 08:37:58', '2023-04-19 08:37:58'),
(8, 6, 2723, NULL, '2023-04-19 08:39:19', '2023-04-19 08:39:19'),
(9, 6, 2723, NULL, '2023-04-19 08:40:04', '2023-04-19 08:40:04'),
(10, 6, 2723, NULL, '2023-04-19 08:42:47', '2023-04-19 08:42:47'),
(11, 6, 2723, NULL, '2023-04-19 08:42:57', '2023-04-19 08:42:57'),
(12, 6, 2723, NULL, '2023-04-19 08:43:04', '2023-04-19 08:43:04'),
(13, 6, 2723, NULL, '2023-04-19 08:43:46', '2023-04-19 08:43:46'),
(14, 6, 2723, NULL, '2023-04-19 08:44:01', '2023-04-19 08:44:01'),
(15, 6, 2723, NULL, '2023-04-19 08:45:06', '2023-04-19 08:45:06'),
(16, 6, 2723, NULL, '2023-04-19 08:45:25', '2023-04-19 08:45:25'),
(17, 6, 2723, NULL, '2023-04-19 08:46:33', '2023-04-19 08:46:33'),
(18, 6, 2723, NULL, '2023-04-19 08:46:52', '2023-04-19 08:46:52'),
(19, 6, 2723, NULL, '2023-04-19 08:47:07', '2023-04-19 08:47:07'),
(20, 6, 2723, NULL, '2023-04-19 08:47:17', '2023-04-19 08:47:17'),
(21, 6, 2723, NULL, '2023-04-19 08:47:41', '2023-04-19 08:47:41'),
(22, 6, 2723, NULL, '2023-04-19 08:47:51', '2023-04-19 08:47:51'),
(23, 6, 2723, NULL, '2023-04-19 08:48:00', '2023-04-19 08:48:00'),
(24, 6, 2723, NULL, '2023-04-19 08:48:14', '2023-04-19 08:48:14'),
(25, 6, 2723, NULL, '2023-04-19 08:48:46', '2023-04-19 08:48:46'),
(26, 6, 2723, NULL, '2023-04-19 08:49:19', '2023-04-19 08:49:19'),
(27, 6, 2723, NULL, '2023-04-19 09:06:07', '2023-04-19 09:06:07'),
(28, 6, 2723, NULL, '2023-04-19 09:06:17', '2023-04-19 09:06:17'),
(29, 6, 2723, NULL, '2023-04-19 09:07:50', '2023-04-19 09:07:50'),
(30, 6, 2723, NULL, '2023-04-19 09:08:38', '2023-04-19 09:08:38'),
(31, 6, 2723, NULL, '2023-04-19 09:10:52', '2023-04-19 09:10:52'),
(32, 6, 2723, NULL, '2023-04-19 09:11:12', '2023-04-19 09:11:12'),
(33, 6, 2723, NULL, '2023-04-19 09:11:18', '2023-04-19 09:11:18'),
(34, 6, 2723, NULL, '2023-04-19 09:13:07', '2023-04-19 09:13:07'),
(35, 6, 2723, NULL, '2023-04-19 09:21:00', '2023-04-19 09:21:00'),
(36, 6, 2723, NULL, '2023-04-19 09:21:40', '2023-04-19 09:21:40'),
(37, 6, 2723, NULL, '2023-04-19 09:21:56', '2023-04-19 09:21:56'),
(38, 6, 2723, NULL, '2023-04-19 09:22:11', '2023-04-19 09:22:11'),
(39, 6, 2723, NULL, '2023-04-19 09:22:48', '2023-04-19 09:22:48'),
(40, 6, 2723, NULL, '2023-04-19 09:23:03', '2023-04-19 09:23:03'),
(41, 6, 2723, NULL, '2023-04-19 09:23:15', '2023-04-19 09:23:15'),
(42, 6, 2723, NULL, '2023-04-19 09:27:36', '2023-04-19 09:27:36'),
(43, 6, 2723, NULL, '2023-04-19 09:33:26', '2023-04-19 09:33:26'),
(44, 6, 2723, NULL, '2023-04-19 09:41:05', '2023-04-19 09:41:05'),
(45, 6, 2723, NULL, '2023-04-19 09:46:32', '2023-04-19 09:46:32'),
(46, 6, 2723, NULL, '2023-04-19 09:48:23', '2023-04-19 09:48:23'),
(47, 6, 2723, NULL, '2023-04-19 09:50:33', '2023-04-19 09:50:33'),
(48, 6, 2723, NULL, '2023-04-19 09:50:41', '2023-04-19 09:50:41'),
(49, 6, 2723, NULL, '2023-04-19 09:50:55', '2023-04-19 09:50:55'),
(50, 6, 2723, NULL, '2023-04-19 09:56:26', '2023-04-19 09:56:26'),
(51, 6, 3145, NULL, '2023-04-19 09:58:10', '2023-04-19 09:58:10'),
(52, 6, 788, NULL, '2023-04-19 10:03:37', '2023-04-19 10:03:37');

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
(168, '2023_03_17_095440_create_reviews_table', 1),
(551, '2023_04_17_103901_create_product_wishlists_table', 3),
(621, '2014_10_12_000000_create_users_table', 4),
(622, '2014_10_12_100000_create_password_resets_table', 4),
(623, '2019_08_19_000000_create_failed_jobs_table', 4),
(624, '2019_12_14_000001_create_personal_access_tokens_table', 4),
(625, '2023_02_20_144438_create_permission_tables', 4),
(626, '2023_02_28_075013_create_categories_table', 4),
(627, '2023_02_28_130508_create_sub_categories_table', 4),
(628, '2023_03_02_134606_create_products_table', 4),
(629, '2023_03_02_134801_create_product_prices_table', 4),
(630, '2023_03_02_134946_create_product_images_table', 4),
(631, '2023_03_13_184239_create_comments_table', 4),
(632, '2023_03_20_103723_create_reviews_table', 4),
(633, '2023_03_26_051349_create_carts_table', 4),
(634, '2023_03_26_093710_create_product_cupons_table', 4),
(635, '2023_03_28_100258_create_category_cupons_table', 4),
(636, '2023_03_29_083527_create_cupons_table', 4),
(637, '2023_04_17_104108_create_product_wishlists_table', 4),
(638, '2023_04_19_103010_create_discount_prices_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 3),
(4, 'App\\Models\\User', 4),
(5, 'App\\Models\\User', 5),
(5, 'App\\Models\\User', 6);

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `sub_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_unique` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `purchase_price` int(11) DEFAULT NULL,
  `intial_stock` int(11) DEFAULT NULL,
  `left_stock` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specification` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` int(11) DEFAULT NULL,
  `featured` int(11) DEFAULT NULL,
  `trending` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `softDelete` int(11) NOT NULL DEFAULT 1,
  `deals_of_the_day` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `user_id`, `category_id`, `sub_category_id`, `title`, `slug_unique`, `image`, `image_url`, `sku`, `stock`, `purchase_price`, `intial_stock`, `left_stock`, `description`, `product_tag`, `specification`, `banner`, `featured`, `trending`, `status`, `softDelete`, `deals_of_the_day`, `created_at`, `updated_at`) VALUES
(1, 3, 9, 5, 'Gust Klocko', 'labore-culpa-rerum-sunt-et-aperiam-vero-sequi', 'Miss Noemy Kuhlman DVM', 'https://via.placeholder.com/640x480.png/00ddbb?text=quia', '66de6b93-ea70-39f7-b0a9-e443ea7665e7', 65, 108, 80, 6, 'Nihil doloribus consectetur nesciunt et dolores laboriosam ratione odit molestiae incidunt quaerat magnam dolorem ipsum doloribus harum aliquam dolor ut.', 'Lela Feeney Jr.', 'Odio velit consequatur molestiae consequuntur dolores numquam accusantium eligendi voluptate saepe non vitae ut tenetur laboriosam voluptatem ut error beatae ratione exercitationem.', 0, 0, 0, 1, 1, 1, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(2, 5, 8, 3, 'Anjali Borer', 'eum-qui-nihil-distinctio-qui', 'Shana Sipes', 'https://via.placeholder.com/640x480.png/00eedd?text=facere', 'd1c0a616-a8fd-3628-9948-7a1e80442add', 68, 388, 80, 5, 'Laborum expedita veritatis est quas quia pariatur sed dolorem beatae nam rem iusto provident voluptate eos in sit beatae aliquid sed repudiandae qui maiores accusamus exercitationem consectetur consequatur fugit dolorem est quo dolore quia quae reprehenderit perferendis eum ut.', 'Golda Heller', 'Eligendi accusantium et totam enim aspernatur voluptas hic quisquam ut perspiciatis nesciunt qui molestias impedit alias cupiditate qui quisquam labore dolorem voluptatem aspernatur est quos dolores dolorem veniam.', 0, 1, 0, 1, 1, 0, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(3, 5, 7, 12, 'Bethel Friesen', 'velit-qui-sed-consectetur-dolorum-et', 'Kraig Boehm', 'https://via.placeholder.com/640x480.png/00ee66?text=praesentium', 'c0879b75-bdcf-39b7-960e-b77d7d82c987', 60, 815, 71, 3, 'Dolorem eum autem dolore et voluptates explicabo ullam dignissimos nesciunt modi aperiam inventore veniam eligendi esse illum laborum eaque autem dolores voluptatum ut laudantium impedit.', 'Rachelle Koch', 'Aperiam atque quos maxime aut a expedita et quaerat reprehenderit itaque et laudantium nam quod laudantium qui cupiditate voluptas velit voluptas illo reprehenderit fugiat qui.', 1, 1, 1, 1, 1, 0, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(4, 3, 10, 1, 'Dereck Cruickshank', 'sapiente-et-sit-consequatur-et-est-sit-numquam-laudantium', 'Miss Cydney Gaylord', 'https://via.placeholder.com/640x480.png/001133?text=et', '8752863f-b2ca-3ba6-8fe6-d55fd94c89dc', 68, 108, 73, 10, 'Et alias numquam maxime quae dolores pariatur ut esse quis nostrum consequatur voluptate velit eos est ut recusandae iste.', 'Mrs. Elise Schulist III', 'Incidunt doloribus eius incidunt recusandae fuga voluptatem est dignissimos non neque voluptates iste natus natus qui odio earum et qui vel.', 0, 1, 1, 1, 1, 1, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(5, 1, 4, 11, 'Caden Welch V', 'facilis-molestiae-et-corporis-ut-reprehenderit-odit-rerum', 'Freddy Wiegand', 'https://via.placeholder.com/640x480.png/00ffcc?text=et', '25465816-3674-36c4-b949-52f932a52579', 75, 956, 75, 1, 'Enim quae suscipit recusandae vitae tenetur eaque rerum et repudiandae rerum sed ut quisquam ut asperiores error aut harum alias laborum fugit ea illo rerum nihil et excepturi qui eos repellat cum et accusantium repellat.', 'Dr. Glen Rolfson', 'Quos cumque molestiae libero sapiente dolorem amet ipsam aliquam voluptas quo molestiae expedita quos distinctio odit ipsam qui aut necessitatibus voluptas non officiis autem molestias aut aperiam molestiae est rerum debitis quos expedita et mollitia veniam ex qui neque sint.', 0, 0, 1, 1, 1, 1, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(6, 4, 10, 2, 'Maryse Haag', 'exercitationem-in-sed-ea-neque-at-reprehenderit', 'Bailey Strosin', 'https://via.placeholder.com/640x480.png/0066dd?text=voluptas', '65cc2b4b-e4f8-3a00-bfd9-8ac690093337', 62, 382, 75, 8, 'Dolorum totam assumenda quo voluptate quos facere sequi deleniti temporibus officia qui vitae consequatur et itaque ullam qui occaecati tempore et voluptatem eligendi blanditiis quibusdam et possimus enim numquam molestiae numquam veritatis at debitis omnis beatae quo molestias.', 'Dianna Ebert Sr.', 'Exercitationem aliquam inventore dolorem dolorem sint velit vel dolorem aliquam autem modi sit qui ut rerum excepturi incidunt ratione laboriosam aut et sit ratione enim voluptatibus et tenetur aut omnis assumenda velit veniam aut.', 0, 1, 0, 1, 1, 0, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(7, 4, 1, 9, 'Ms. Sincere Kerluke II', 'consequatur-provident-quae-reiciendis-quam-sit-rem', 'Zola Beatty DDS', 'https://via.placeholder.com/640x480.png/005599?text=omnis', '3381bf36-d30a-363d-91be-837197eb4798', 71, 895, 63, 10, 'Porro et inventore aut modi reiciendis doloremque temporibus hic accusamus voluptatem et eligendi aut voluptates tempora et nemo quia harum.', 'Dr. Diego D\'Amore', 'Suscipit quasi expedita doloribus dolore non omnis qui iure amet aut ab soluta ad placeat aspernatur qui quas assumenda quam quod cum ut quos sed fugit enim possimus sit dolorem vero delectus doloremque nobis dolor eum consequuntur.', 1, 0, 1, 1, 1, 1, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(8, 5, 12, 19, 'Granville Gislason', 'esse-omnis-id-ea-aut', 'Cleora Torp', 'https://via.placeholder.com/640x480.png/0044ff?text=aut', 'b2fe9b00-4ba2-35e9-a0d2-3a87ad6ec378', 75, 199, 72, 2, 'Eum sapiente sint veritatis aut soluta sit soluta autem et beatae voluptas laborum perspiciatis molestias dolorem illum dolores molestiae possimus et iste dolore necessitatibus laboriosam.', 'Alaina Doyle', 'Dicta qui ea beatae placeat atque possimus nam magnam ut voluptatem et quia dolorem aspernatur aut est maiores voluptatem saepe necessitatibus sit asperiores ad fugit voluptatem in in vero ducimus possimus voluptatem tempora et sequi qui animi et dolorem harum.', 0, 1, 0, 1, 1, 0, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(9, 5, 7, 17, 'Mr. Keith Dibbert', 'dolorum-qui-doloremque-qui-voluptatem-quaerat-quisquam-distinctio', 'Daniella Crooks', 'https://via.placeholder.com/640x480.png/009933?text=dignissimos', '92f144e5-e6be-3ac0-b1e2-8c4bf12179cc', 67, 428, 64, 8, 'Aut aut in numquam dicta quisquam non illum sapiente ipsa quis nihil nemo itaque est assumenda qui alias similique rerum consequatur vitae vel et voluptas sequi sint error voluptatem voluptatem quod.', 'Paolo Ritchie', 'Ut quam aliquam quia veritatis consequatur eveniet inventore laborum accusamus eum facilis est rerum odio tempora accusamus nulla sit commodi nesciunt omnis dolore sunt est reiciendis sint quisquam repudiandae sit eius tempora illum soluta veniam aperiam fuga sequi sit animi minus ex.', 1, 0, 1, 1, 1, 1, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(10, 1, 8, 2, 'Nova Hickle', 'nesciunt-necessitatibus-voluptas-et-blanditiis', 'Morris Wilderman', 'https://via.placeholder.com/640x480.png/004422?text=ullam', '9391fd7d-4679-337c-b178-b5e13d201db6', 60, 764, 71, 2, 'Dolorem sed et cum possimus quis quasi dicta tempora quam voluptas vitae veniam aut expedita alias nulla voluptatibus laborum eos modi rem necessitatibus esse laborum distinctio facilis sint numquam occaecati quae officia voluptate consequatur libero.', 'Timmothy Farrell', 'Nihil quo rerum non aut autem maxime omnis ipsa at aut nam amet suscipit similique ex voluptates illum quas fugit est voluptate occaecati eum temporibus.', 1, 1, 0, 1, 1, 1, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(11, 3, 11, 9, 'Mr. Maximo Gulgowski DDS', 'blanditiis-commodi-maxime-et-odio-sequi-quidem-beatae-qui', 'Mrs. Mia Jacobs IV', 'https://via.placeholder.com/640x480.png/0066ee?text=omnis', 'd2d66e0f-5f0a-3305-9a04-5c88f02c5f87', 70, 116, 66, 6, 'Ipsa illum beatae qui sed culpa cum eum aliquid magni molestiae deserunt quas sint eaque ut tempora sunt magnam dolores possimus dolor aut molestias et nihil excepturi illum laboriosam omnis iste sequi eos et repellendus eius in ut explicabo non dolores.', 'Ms. Heaven Emmerich DVM', 'Recusandae doloremque fugiat ut repellat quaerat dolores cupiditate reprehenderit minima molestiae at delectus id illum sapiente aut perspiciatis laboriosam enim accusantium ut natus.', 1, 1, 1, 1, 1, 0, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(12, 1, 1, 9, 'Dr. Joaquin Huel', 'ea-similique-nobis-est-ut-quos', 'Miss Vivian Schamberger II', 'https://via.placeholder.com/640x480.png/0044cc?text=necessitatibus', '50aca5e2-44e6-36ba-81ad-1995f961eea9', 68, 220, 79, 5, 'Laborum nesciunt mollitia itaque ut autem eaque voluptatem odit sit sint consequatur fugiat enim alias dolorum quae consequatur dolorem voluptate unde atque laborum sunt cum.', 'Colby McGlynn', 'Deserunt sed laudantium minima nihil quia nemo minus rerum sint harum nulla et reiciendis dolor pariatur consequatur quod expedita culpa architecto.', 1, 0, 1, 1, 1, 0, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(13, 2, 2, 5, 'Emilia Osinski', 'pariatur-dolorem-eum-nobis-vel', 'Torey Legros', 'https://via.placeholder.com/640x480.png/0077aa?text=commodi', 'bc2499a4-2746-347d-9638-10fa9a678468', 74, 926, 77, 7, 'Eaque eveniet in delectus soluta sed culpa aut eaque possimus ducimus ut nemo voluptatem consequuntur eos dolores recusandae nostrum aut vero enim est sed aliquam numquam quia.', 'Adeline Wilderman', 'Eveniet quas exercitationem provident temporibus ratione ducimus iste quaerat dicta maxime ullam molestias dolorem fuga repellat id iusto est.', 0, 1, 1, 1, 1, 0, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(14, 2, 3, 12, 'Eliezer Wehner', 'veritatis-magni-dolor-qui', 'Donny McKenzie', 'https://via.placeholder.com/640x480.png/006666?text=fuga', 'db8cec58-ab8a-3cc3-887e-72bd283a2b13', 62, 698, 77, 2, 'Qui nulla tempore dolorem nulla possimus aut dolorem blanditiis omnis perspiciatis est qui numquam harum dolores omnis nisi fugiat enim ex animi temporibus magni fugiat.', 'Ms. Emily Swaniawski II', 'Consectetur explicabo velit necessitatibus quis sit iure nostrum quam ipsum quia eum in veritatis qui cum quia non quidem aut distinctio incidunt est similique perferendis exercitationem in ullam quas perferendis voluptate molestiae nihil laborum est excepturi tempora.', 1, 0, 1, 1, 1, 0, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(15, 4, 10, 1, 'Richard Vandervort', 'cupiditate-aliquid-consectetur-nemo-sint-vitae', 'Stewart Schaefer', 'https://via.placeholder.com/640x480.png/0088ee?text=voluptatum', '9fbcb21d-8524-3d78-ae9c-26ef16dd18cc', 69, 427, 60, 10, 'Aliquid iste nisi eius repellendus enim est eos optio quaerat et sit repellendus iste qui expedita accusamus autem in magnam omnis.', 'Mrs. Victoria Lynch DDS', 'Ut consequuntur pariatur quam eum corrupti itaque enim ratione laborum numquam facilis aspernatur nostrum tempora minus ut aut recusandae mollitia quidem quia dignissimos autem ut dolorem impedit cumque consequuntur odit ullam est consequuntur earum unde.', 0, 0, 1, 1, 1, 1, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(16, 1, 9, 10, 'Orin Schoen', 'necessitatibus-quas-illo-ad-molestiae', 'Terrance Borer', 'https://via.placeholder.com/640x480.png/004400?text=assumenda', 'c835ad2b-a2e9-37f5-8aa6-5468bc2e4322', 67, 149, 70, 8, 'Non ipsa eos odit est voluptas repudiandae non iure mollitia reprehenderit voluptatem deserunt a velit ut voluptatem pariatur aliquid at sed amet rerum illum repellat assumenda animi aut commodi in.', 'Katlynn Pollich', 'Libero molestiae deleniti nemo nemo qui est corporis quae amet aut voluptas adipisci qui vel ea quisquam nulla a aut eaque eaque porro nihil.', 1, 0, 0, 1, 1, 0, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(17, 1, 10, 1, 'Benton Schaefer', 'incidunt-sit-possimus-magni-ut-odit-velit-similique', 'Paula Hintz', 'https://via.placeholder.com/640x480.png/00cc99?text=quasi', 'c8acef6f-6228-3a10-a421-5688bdc759ff', 64, 937, 62, 5, 'In quidem mollitia voluptas ea ad at est aliquam nemo mollitia sed totam neque rerum voluptatem ut impedit autem ut ad non corrupti.', 'Zelma Jaskolski', 'Omnis atque mollitia vitae ea cupiditate voluptatem quia quia repudiandae officiis molestias ducimus culpa velit iste aperiam adipisci consequatur cum quaerat aut quis temporibus quia.', 0, 1, 1, 1, 1, 1, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(18, 2, 2, 20, 'Cristopher Schmeler DDS', 'molestias-sed-et-temporibus-neque', 'Thalia Swift', 'https://via.placeholder.com/640x480.png/00eedd?text=laborum', 'e3f4d19c-689d-3448-a749-97751afe96ae', 61, 488, 67, 2, 'Dolore quos ut velit quia eum enim nostrum nulla mollitia accusamus soluta delectus error nobis officia modi saepe aut possimus eligendi sunt ut odit facere fugit ea placeat quia voluptas eos eius voluptates.', 'Mr. Presley Marquardt I', 'Autem eum veritatis recusandae libero eaque rerum ea facere quidem cum quis perferendis ipsum nihil similique quidem ducimus distinctio totam qui sit et vero quo commodi ut laborum voluptatem.', 1, 1, 0, 1, 1, 0, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(19, 2, 7, 20, 'Miss Margaret Renner', 'velit-totam-labore-commodi-porro-magnam', 'Fred Haag', 'https://via.placeholder.com/640x480.png/00ccdd?text=autem', '1487603d-7fc2-329c-ad5b-ce43f532ad2f', 76, 964, 77, 2, 'Voluptatem magnam itaque ratione sint ratione ea sint est facere facere voluptatem eum quaerat dolores nesciunt odit ex blanditiis quae.', 'Mr. Floy Crooks V', 'Facilis tempore aliquid illum veritatis omnis et quia ut explicabo eaque deleniti est blanditiis fugiat explicabo cum fuga unde et quidem praesentium aut numquam quidem aut vel voluptatem.', 1, 0, 0, 1, 1, 0, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(20, 1, 6, 6, 'Kamron Kozey PhD', 'magni-vero-quis-aut-harum-voluptate-corporis', 'Vern Nienow', 'https://via.placeholder.com/640x480.png/00ffaa?text=laborum', '8e208c9d-6a0c-34a3-b183-a187cf1392f8', 60, 710, 79, 8, 'Autem ad commodi est natus autem consequuntur non fugit sapiente ducimus id ipsam repellendus doloremque veniam laudantium quia ducimus ut ad consequatur nihil.', 'Prof. Evalyn Kozey', 'Quo repudiandae odio ab possimus rerum amet eius cum dolor dicta sint quia a quam suscipit delectus laudantium aut voluptas aut quia explicabo enim repellat voluptatem ad nesciunt corrupti.', 1, 1, 1, 1, 1, 0, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(21, 3, 6, 13, 'Connor Mosciski', 'dolor-maxime-dignissimos-dolor-ipsa', 'Willard Carter', 'https://via.placeholder.com/640x480.png/0044aa?text=ipsam', 'dd51871e-4692-30cb-8441-9a48e4b6bf98', 60, 307, 78, 7, 'Debitis velit sed ipsam qui sit et quia voluptate quia suscipit et natus nisi earum laborum ratione incidunt nisi iusto veniam ut voluptate sit debitis repellat sit aliquid accusamus nam dolores nisi repudiandae aut nemo quia id.', 'Jeremy Tremblay', 'Doloribus qui qui dolorem voluptatem optio harum natus iusto in sed occaecati autem consequuntur et et aut autem laboriosam qui illo id vel odit et assumenda.', 0, 1, 0, 1, 1, 1, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(22, 4, 4, 2, 'Miss Cara Tremblay IV', 'temporibus-dolorem-placeat-quam-alias-suscipit-in', 'Dr. Logan Harris', 'https://via.placeholder.com/640x480.png/00bbee?text=nulla', 'afcc82b7-0e4f-3372-a236-10a7aaa1cd04', 77, 87, 69, 4, 'Esse explicabo blanditiis voluptas quasi ipsam omnis atque blanditiis beatae culpa non ut sunt eos provident aut et tenetur mollitia in sed tempora ut.', 'Elijah Mills', 'Culpa dolores quod aspernatur voluptas magni quibusdam enim qui beatae quia aspernatur sit aut qui sed at reprehenderit rerum quia optio amet commodi velit non veritatis architecto impedit est in magnam voluptatem velit rerum qui quis.', 0, 0, 0, 1, 1, 1, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(23, 3, 8, 17, 'Marquise Reichert', 'sit-quasi-veritatis-et-consequuntur-est', 'Xander Hermann', 'https://via.placeholder.com/640x480.png/007755?text=omnis', '9f002705-346c-387c-8b52-7cad419974f1', 66, 449, 73, 7, 'Officia rerum in molestiae excepturi accusamus ad ex sed enim consequuntur ab inventore soluta nemo modi totam deleniti facilis ut autem velit vel optio ipsa aut ex sit aut et eos rerum ut quod aut iusto.', 'Nolan Powlowski', 'Vero nesciunt non odit fugit quo ipsam molestias natus veritatis dolorem qui qui dolor autem id nobis facere maiores porro praesentium maiores labore fuga non optio illo natus quibusdam accusantium est quis nihil eos omnis ut facere ullam culpa iste.', 1, 1, 1, 1, 1, 1, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(24, 4, 12, 7, 'Wilhelmine Auer', 'excepturi-ut-rerum-reiciendis-hic-dolores', 'Bryana Gorczany', 'https://via.placeholder.com/640x480.png/0077ff?text=amet', 'bde896e3-43c6-31e1-af91-2985850d3f86', 80, 110, 61, 1, 'Velit qui quia qui ipsum fugit ipsum id veniam repellat quae excepturi non aspernatur consequuntur sunt rerum itaque voluptatem autem rerum consequatur quis enim sequi quis aut nam non.', 'Prof. Brittany Bailey MD', 'Quo commodi est et saepe fugit libero voluptas odio itaque dolorum enim rerum aperiam qui repellendus eum nulla libero ullam sequi possimus libero odit similique accusamus quaerat voluptas similique et quaerat.', 0, 0, 0, 1, 1, 1, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(25, 1, 7, 20, 'Prof. Amira Pacocha III', 'eum-autem-architecto-assumenda-aspernatur-asperiores-et-omnis', 'Dr. Marcelo Schinner', 'https://via.placeholder.com/640x480.png/00dd55?text=explicabo', 'd324b81a-bdbf-372d-9dc0-ebf5c9d63157', 78, 505, 74, 1, 'Totam et iste eum sit voluptatem eius velit assumenda dolorem nam sed aspernatur aspernatur quidem eveniet dolores nesciunt aut explicabo et aut.', 'Mrs. Aileen Bauch', 'Illum quaerat consequatur dolor est aut quis rem mollitia corporis officia qui unde placeat facere nisi nemo dolore sint omnis cupiditate voluptates nesciunt quod ea quia aut beatae repellat rerum ut dolores corporis sunt doloremque.', 1, 1, 0, 1, 1, 0, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(26, 1, 11, 15, 'Americo Wisozk', 'quia-nobis-aut-facilis-tempora-velit-dolor-nihil-vero', 'Nils Larson', 'https://via.placeholder.com/640x480.png/009999?text=ea', 'cd70ec33-6108-3bed-a446-a639fb730215', 62, 456, 78, 1, 'Inventore dolores adipisci voluptas quod sed provident minima officiis occaecati nihil delectus corrupti fugiat dolor odit amet modi dolore.', 'Morris Senger', 'Sequi nemo numquam illo alias officia quibusdam ut reprehenderit in repellendus perspiciatis excepturi explicabo quidem autem corporis quos velit maxime nulla eius odio velit perferendis et non iusto veniam cumque consequatur recusandae earum omnis id facere nesciunt quis culpa debitis enim.', 0, 0, 0, 1, 1, 1, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(27, 3, 6, 3, 'Prof. Valentine Zboncak PhD', 'recusandae-commodi-et-quo-consequatur-quia-est-qui-veritatis', 'Josefina Olson MD', 'https://via.placeholder.com/640x480.png/003355?text=sed', '55cb5e85-822d-3302-80ca-d518ecd8f990', 69, 700, 73, 7, 'Eum debitis et est ut deserunt consequuntur in consectetur ut illum at magni debitis placeat similique a quod quibusdam in aliquid sed voluptates velit praesentium totam cumque accusamus harum.', 'Gay Kreiger', 'Doloremque dolorum id dolore deleniti ut ut quidem tempora enim illo ipsam veritatis et explicabo aut praesentium exercitationem quis nihil recusandae eum vel inventore tempora dolorem suscipit fugiat rerum quae id earum.', 1, 1, 0, 1, 1, 1, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(28, 3, 12, 20, 'Jessyca Smitham', 'quia-et-explicabo-reprehenderit-id', 'Dr. Rodger Renner', 'https://via.placeholder.com/640x480.png/007777?text=esse', '1843873d-8407-34d5-8d88-bd8232bb09dc', 79, 825, 78, 4, 'Deserunt dolorem vel accusantium ut beatae hic rerum dolorem maxime quia et itaque accusamus eius illo esse aut quo ut autem consequatur itaque quia et rem tempore consequatur id ex repudiandae voluptatem facere expedita et id ducimus quis voluptas libero.', 'Esteban Carter PhD', 'Soluta sunt nam illum dolore dolores aut quae quae dolore ut quo sequi et distinctio veritatis ratione vel dolorem cumque consequuntur possimus qui excepturi omnis cum et omnis vero cumque quo eligendi.', 1, 0, 1, 1, 1, 1, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(29, 4, 3, 18, 'Lupe Hahn', 'iure-provident-adipisci-veritatis-sunt-dolores-minus', 'Adelle Grimes', 'https://via.placeholder.com/640x480.png/00dd99?text=labore', '2a9e5b06-43e6-3977-bada-72a48b6a2eda', 65, 970, 60, 6, 'Tempora nisi error sit velit nam iste quam odit ea aliquid asperiores officiis enim id ratione aperiam ut doloribus aut ratione reiciendis inventore nisi distinctio nemo.', 'Arjun Treutel', 'Iusto omnis et aliquam a adipisci porro reprehenderit voluptatem ratione voluptates eum molestiae molestias ut voluptatem consequatur corporis quis odio nulla inventore pariatur.', 1, 1, 1, 1, 1, 0, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(30, 5, 12, 9, 'Dr. Nakia Kirlin', 'vitae-ipsam-sit-fugiat-similique-expedita-sint-sed', 'Ursula Hyatt', 'https://via.placeholder.com/640x480.png/008844?text=et', '137bb805-9eb3-338c-ac53-5fbf710c8907', 80, 243, 72, 3, 'Sit sint est veritatis dolor et natus sed dolore voluptatem est voluptas quibusdam pariatur et id quia eos aut rerum placeat et fuga id sint recusandae minus.', 'Mrs. Libby Morar I', 'Illum incidunt magni et labore dolore delectus eius quis sit quas voluptatem ut est aliquam ut expedita aperiam sequi natus rerum rem consequuntur minus qui voluptates et qui molestiae dolor maiores est maiores.', 0, 0, 1, 1, 1, 0, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(31, 1, 3, 14, 'Prof. Randy Bednar', 'sit-voluptatibus-eos-nostrum-quo-sed-tenetur', 'Cleta Schmitt', 'https://via.placeholder.com/640x480.png/00cc77?text=fugit', 'a03eacc0-1f3d-3104-a130-7fde29900db9', 72, 198, 75, 7, 'Tenetur sint suscipit laudantium temporibus accusamus non quaerat perspiciatis asperiores numquam ea pariatur quibusdam tempore dolores rem nemo debitis ad sunt eos quo.', 'Benny Hickle', 'Vel ex rerum mollitia sunt et sapiente voluptas a in ut asperiores provident architecto eos quam laudantium tempore voluptatibus et sapiente ex repellendus.', 1, 0, 0, 1, 1, 1, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(32, 4, 11, 16, 'Maud Herzog', 'quas-omnis-qui-ut-sed-et-rerum', 'Elwin Gottlieb', 'https://via.placeholder.com/640x480.png/006666?text=iure', '443a9541-016d-3e10-9a4e-fb62836f2708', 68, 79, 71, 9, 'Eum nulla tempora maiores velit et iusto earum dolorem qui facere non ducimus animi aut ut numquam possimus reiciendis inventore modi iusto exercitationem veritatis et in exercitationem ab quas sit ea unde.', 'Dorris Hilpert', 'Id et odio ipsum rerum repellendus sapiente saepe incidunt velit reprehenderit est voluptatem incidunt voluptas impedit accusantium iusto in et dolores tenetur in magni unde quasi laborum ullam qui qui libero eveniet occaecati incidunt odit sed inventore voluptatem.', 1, 1, 1, 1, 1, 0, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(33, 2, 6, 20, 'Concepcion Daugherty II', 'qui-temporibus-beatae-quos-nemo-sunt', 'Prof. Chasity Waelchi', 'https://via.placeholder.com/640x480.png/004499?text=officia', '73ea23bf-5bae-31e6-93de-c411ec8a43af', 72, 742, 76, 7, 'Sunt quo eos a provident minima sapiente et eos possimus dignissimos quibusdam neque nihil maiores voluptatem sit facilis soluta aut.', 'Alex Fahey MD', 'Commodi commodi molestiae mollitia pariatur magnam numquam non possimus est molestias est voluptas ipsum dolor est fuga occaecati eum et esse voluptas vitae possimus natus dolore labore.', 1, 1, 1, 1, 1, 0, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(34, 4, 6, 13, 'Dr. Virgie Wiegand', 'officiis-aliquam-dolore-est-dolor-officia-dignissimos', 'Leonor Labadie', 'https://via.placeholder.com/640x480.png/001166?text=magni', '21453726-cd77-3786-a6e4-82b0c34679fd', 64, 386, 80, 10, 'Est et dolorum molestiae odit facilis nemo fugiat velit rerum nesciunt est dolores ad eaque autem voluptatum sequi repellat pariatur magni quo rerum expedita odio et fuga quis ratione deserunt cupiditate qui sed quidem qui et vero quisquam.', 'Hattie Feeney Sr.', 'Labore eveniet odio ex fuga labore eaque eos commodi enim nulla quisquam quo et sint et eaque non non a dolor autem nostrum quo illum non officia quis nesciunt soluta perferendis fugiat ut dicta repellat iste et enim neque culpa sed illo.', 1, 1, 0, 1, 1, 0, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(35, 5, 3, 11, 'Alvah Borer', 'necessitatibus-nostrum-id-non-est-maxime-tempore-ex', 'Dr. Milo Ankunding I', 'https://via.placeholder.com/640x480.png/00ff44?text=quam', '9814a935-c58a-3be9-b851-f26d9c3ae64f', 78, 107, 79, 4, 'Fuga a numquam voluptas cumque ipsam sit necessitatibus maiores quis excepturi voluptas natus est corporis recusandae laborum totam corrupti itaque sapiente sit labore et vero quisquam non dolor eos omnis aperiam quia ut quisquam eius sunt amet qui est non.', 'Mr. Kristofer Cremin', 'Culpa explicabo fuga blanditiis iste aut quia laborum suscipit est hic distinctio deleniti assumenda ex excepturi quasi doloribus qui distinctio eos modi laborum ipsa explicabo fuga dolorem et autem sed molestiae.', 1, 0, 0, 1, 1, 1, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(36, 4, 5, 16, 'Prof. Tavares Ullrich', 'qui-aut-unde-corrupti-rem-temporibus', 'Prof. Lexus Huels V', 'https://via.placeholder.com/640x480.png/009999?text=unde', '2f8404f8-a84d-3e32-bb32-b9b65a55c560', 66, 469, 80, 7, 'Quisquam libero hic dolor deserunt consequuntur voluptatem autem vel a quam ducimus aut dolor perferendis ut qui commodi expedita minima iure officiis.', 'Ubaldo Dare', 'Cum dolorum est necessitatibus dolores natus error iste omnis enim sunt natus ab ut aperiam reprehenderit consectetur optio illo quia non provident omnis quos qui temporibus at distinctio vero placeat voluptatem maxime nesciunt aut neque.', 0, 1, 1, 1, 1, 0, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(37, 4, 9, 15, 'Dr. Christophe Leffler MD', 'accusamus-omnis-sit-numquam-iste-dolor-ut-ut', 'Dr. Betsy Reinger', 'https://via.placeholder.com/640x480.png/00bb00?text=officia', '47fbf4ec-7378-3fd0-815b-2195888e4c0e', 65, 165, 78, 3, 'Quasi officia dolores distinctio qui aspernatur magni illum molestias assumenda non aut et sint perferendis veritatis dicta molestias quae rerum inventore.', 'Hobart Windler IV', 'Dolorem corrupti eos deserunt pariatur dolor rem perferendis enim facere velit aut libero soluta eos quia ad omnis quaerat laudantium.', 0, 1, 0, 1, 1, 0, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(38, 2, 10, 3, 'Eden Jones', 'sunt-aut-rerum-nesciunt-voluptas-et-mollitia', 'Oliver Dach', 'https://via.placeholder.com/640x480.png/00ffcc?text=corporis', '78d4e39c-cb62-3934-b1fe-c21322f207b5', 74, 233, 76, 7, 'Magnam facere vel magnam quae similique provident est hic quis quo odio ut pariatur ducimus commodi at libero beatae sunt quos quis ullam in quaerat in repellendus eos.', 'Dr. Connie Turcotte I', 'Id odit iste earum doloremque aperiam et rerum nam expedita quae est quis vitae et in quaerat modi rerum dolores et ut nihil delectus sit autem magni ducimus.', 1, 0, 1, 1, 1, 1, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(39, 2, 8, 13, 'Ms. Jane Haley Sr.', 'vel-sed-praesentium-blanditiis-voluptatem-incidunt-adipisci-quidem-quia', 'Prof. Bonita Gusikowski', 'https://via.placeholder.com/640x480.png/0000ee?text=nobis', 'a46fedd4-efae-3645-a6b1-664d15b9b132', 68, 269, 61, 6, 'Numquam dolorem aperiam at quasi eaque laborum quis ut culpa et aut quaerat natus recusandae ut quis nihil dolor quas sit iste ea libero necessitatibus dolore.', 'Ephraim O\'Kon', 'Labore corrupti sed accusamus dolores esse ipsa explicabo quaerat odit est libero recusandae dolores dolor unde cupiditate omnis dolor tenetur tenetur doloremque est perferendis eum architecto ut temporibus labore repellat aperiam repellendus totam neque suscipit sint corporis dolor.', 0, 0, 0, 1, 1, 0, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(40, 3, 3, 3, 'Audrey Pfeffer', 'exercitationem-asperiores-odio-ut-ullam-qui-ut-id', 'Herbert Stehr DVM', 'https://via.placeholder.com/640x480.png/00bb44?text=unde', '3b3ce20c-2e5f-35af-a683-4a40b8e5ea9a', 74, 762, 65, 10, 'Maiores et quia omnis et dolor autem sit atque magnam voluptas ratione et odio optio nihil nostrum reprehenderit dolorem illo eum reprehenderit neque quae.', 'Dee Miller', 'Laudantium esse sit culpa similique illum incidunt est sit et distinctio aut facere autem nisi nihil commodi molestiae ad omnis.', 0, 1, 1, 1, 1, 0, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(41, 1, 3, 3, 'Lance Reynolds', 'error-et-ut-molestiae-repellendus-placeat-aut-iste', 'Jolie Reichel V', 'https://via.placeholder.com/640x480.png/009999?text=officiis', '50b96603-aab2-3a0f-8291-9af5893bab45', 76, 894, 63, 9, 'Aut veniam illum aspernatur iste consectetur dolorem ea consequatur sint quidem nisi numquam aut illum consequatur odit est nihil magnam blanditiis exercitationem impedit ratione harum nulla fugit odio adipisci est qui eveniet dolorem commodi.', 'Imelda Durgan', 'Ipsam consectetur corporis et eum et accusantium minus eum voluptatem beatae autem minima nihil omnis ab dolorem est aliquam totam aspernatur dicta assumenda.', 1, 1, 1, 1, 1, 0, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(42, 1, 2, 13, 'Anita Kling', 'asperiores-laudantium-doloribus-libero-non', 'Felipe Bechtelar III', 'https://via.placeholder.com/640x480.png/00ccbb?text=culpa', 'b9b85dc8-91ef-38e4-970a-3da9d7d13e9d', 63, 247, 65, 8, 'Quis magni iure dolorum nihil nihil reiciendis officia maxime dolore sint sequi voluptatem molestiae rerum modi in itaque beatae.', 'Lulu D\'Amore DVM', 'Qui vel ullam quod fugit unde natus asperiores occaecati maiores in cumque esse officiis natus qui maxime aut impedit nihil sequi aliquam et aut necessitatibus aut facilis mollitia sit velit est omnis sit in consequuntur sit eum.', 0, 0, 0, 1, 1, 0, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(43, 3, 11, 15, 'Alejandrin Robel Sr.', 'et-quia-esse-rerum-quam', 'Mya Raynor', 'https://via.placeholder.com/640x480.png/007733?text=qui', 'ba94c771-31f5-3a23-bdf0-61b8b1b97b4b', 60, 802, 64, 7, 'Nulla nostrum aliquid quasi nihil cumque omnis aspernatur voluptatem consequatur accusamus autem voluptatem quae et inventore illum officia molestiae qui possimus voluptas.', 'Mabelle Kutch', 'Id aut placeat ad eius ut accusamus et placeat maxime veritatis sunt expedita ab laudantium perferendis eaque amet quasi.', 0, 0, 0, 1, 1, 1, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(44, 4, 8, 4, 'Prof. Sid Botsford IV', 'earum-quae-mollitia-iste-delectus-sunt-quas', 'Miss Lizeth Hamill MD', 'https://via.placeholder.com/640x480.png/001100?text=porro', 'e1cffa76-12fb-313a-b7a1-852ebeb45bff', 79, 7, 66, 3, 'Quidem illum error quia et laboriosam harum modi dolor ipsa quis eum vel accusamus earum aliquam facilis laudantium et vel sed ipsum odit repellat esse.', 'Emanuel Hahn', 'Et optio laborum non placeat et natus est et maxime dolorem adipisci aliquam expedita et rerum ipsam quis nemo officiis fugit eius doloremque voluptatem et voluptatum id et impedit magnam dolorum mollitia quos asperiores ut tenetur ducimus sint dolorum.', 1, 1, 1, 1, 1, 1, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(45, 4, 8, 11, 'Kelsi Ferry', 'eligendi-ullam-voluptatem-exercitationem-ipsam-est-quo-omnis', 'Noemie Halvorson', 'https://via.placeholder.com/640x480.png/0022dd?text=vitae', 'accc3331-7937-32f9-9597-cb0eeb02e15b', 71, 250, 79, 10, 'Aut consectetur deleniti deleniti rerum rem rerum quod non fugit nisi ea voluptatibus facere eos optio in exercitationem labore harum id iste et quidem qui et enim quaerat a et omnis perferendis magnam maiores est qui vel magnam dolor accusamus et officiis quia.', 'Mr. Jamir Moore', 'Et dolore velit aut eos dignissimos quia et sit doloribus aliquam rem neque nemo sit quod dolorum sed vitae architecto.', 0, 0, 1, 1, 1, 1, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(46, 1, 5, 9, 'Dorris Osinski IV', 'esse-voluptatem-magnam-ut-inventore-consequatur-non', 'Allen Abernathy', 'https://via.placeholder.com/640x480.png/0011cc?text=et', 'ae4ff339-5821-3768-a1ed-5ea23d9527a4', 79, 381, 72, 1, 'Natus quo autem ut mollitia nemo facere a veritatis accusantium maxime non quia est perferendis est repudiandae rem culpa ut veniam accusantium quis repellendus rem sed mollitia aut id et totam consectetur quod earum laudantium magni et qui non ut est accusamus.', 'Jennie Rohan', 'Qui in autem id iure occaecati odit animi occaecati culpa consequuntur tempora omnis ut sunt nulla et rerum eum cum.', 0, 0, 1, 1, 1, 1, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(47, 3, 4, 9, 'Kellie Rutherford I', 'illo-eos-cum-nobis-quo-alias', 'Keeley Mraz', 'https://via.placeholder.com/640x480.png/00aa77?text=similique', 'f89a0823-54cc-3f40-93bc-091c2e7632af', 74, 720, 70, 1, 'Occaecati nemo ut distinctio vitae quia nostrum praesentium quod commodi omnis natus et atque dolorem et eos enim est similique in id maxime sapiente sunt omnis consequatur sint et neque ad earum nisi qui voluptatem nam qui doloribus ipsum.', 'Gonzalo Gaylord', 'Assumenda et ea illo laboriosam libero nostrum neque aut in et eius pariatur a architecto beatae quibusdam et dignissimos qui vel repellat dolorem labore.', 0, 1, 1, 1, 1, 1, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(48, 2, 2, 13, 'Eddie Strosin', 'omnis-distinctio-voluptas-ratione-pariatur-in-minima-fuga', 'Kaela Bechtelar', 'https://via.placeholder.com/640x480.png/000011?text=quasi', '2af95501-2fbe-3eb0-b43f-982854d2c23a', 66, 40, 75, 8, 'Illo voluptas occaecati veniam quia id labore consectetur quae voluptatem labore fugiat in fugit praesentium cum vero et qui aspernatur delectus est at occaecati asperiores officiis.', 'Murphy Wilkinson', 'Pariatur tempore minima dolorum velit adipisci non minus id exercitationem at corporis sed sunt voluptate asperiores quia et ex eveniet recusandae dignissimos quod molestiae adipisci.', 1, 1, 0, 1, 1, 1, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(49, 3, 12, 1, 'Bethel Hyatt', 'voluptates-alias-rerum-consequuntur-possimus-animi-nisi', 'Bryana Gerlach', 'https://via.placeholder.com/640x480.png/001100?text=rem', '29936b1d-682e-388e-b3b3-9efb5c7d0bac', 63, 218, 69, 5, 'Voluptatibus quia in odit inventore aut debitis doloribus enim nihil deserunt earum aspernatur fuga sed nobis explicabo ullam consequatur vel sit veritatis eum quis rerum sequi rerum deleniti ab eos hic facilis optio voluptates adipisci aut dolorum aliquid illo dolores.', 'Madison Hirthe', 'Quos non vero id tempore quisquam fuga harum quia cumque nihil provident suscipit voluptas aliquid dolore alias mollitia itaque et.', 1, 0, 1, 1, 1, 1, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(50, 1, 2, 13, 'Dr. Don Lakin', 'mollitia-ut-non-eaque-fugiat', 'Hazel Williamson', 'https://via.placeholder.com/640x480.png/0088ff?text=suscipit', '386b1579-1002-3fa2-9006-4684e67deb18', 65, 660, 61, 6, 'Dicta reiciendis eos blanditiis earum soluta architecto aliquid assumenda nemo ea ad odit aut dolor dicta eos accusantium amet eligendi earum molestiae dolorum nihil et dolores itaque non harum quidem dolores necessitatibus eos ut.', 'Tina Bednar', 'Consequatur qui ea qui nisi rem saepe esse sit sed et a ipsum necessitatibus enim autem accusantium officiis quia eius optio voluptate et magnam voluptas ut nesciunt voluptas commodi quis.', 1, 1, 0, 1, 1, 0, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(51, 3, 7, 2, 'Zaria Rice', 'nemo-voluptas-excepturi-minus-temporibus-aut-in-amet', 'Maybell Walsh', 'https://via.placeholder.com/640x480.png/008855?text=labore', 'baaff3ee-67b1-39b9-b4dd-2f2d9e9e99b6', 66, 326, 66, 3, 'At soluta necessitatibus perspiciatis fugiat ab voluptas enim impedit recusandae atque soluta velit quis deleniti veritatis voluptatibus eveniet est deleniti in ipsa expedita facilis officiis dolore dolorum repellat iure ut pariatur.', 'Ms. Serenity McGlynn III', 'Sapiente dolorem dicta aliquam qui nulla quia sit aliquam quo quos amet et enim maiores consequuntur quos doloribus cupiditate totam cumque unde nesciunt id vel fuga aut est ratione voluptatem quibusdam.', 1, 1, 1, 1, 1, 0, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(52, 2, 10, 17, 'Willard Stehr', 'ut-officia-velit-enim-aut-officia', 'Vallie Reichel', 'https://via.placeholder.com/640x480.png/00aa44?text=autem', 'f8772d95-d8f8-3d97-8433-885214dc356c', 80, 69, 67, 2, 'Qui quibusdam ipsa repellendus aut a enim ex praesentium ipsa sunt autem eos corporis distinctio quis occaecati accusamus praesentium sed tenetur similique aut provident consequatur.', 'Ms. Leta Ritchie', 'Voluptates neque nihil animi sed omnis dolorum et ipsa exercitationem qui ut qui in totam voluptate quo quae et repellat illum earum.', 1, 0, 1, 1, 1, 0, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(53, 1, 9, 17, 'Tod Erdman DVM', 'nemo-excepturi-amet-odio-ad-quasi-aut-sequi', 'Ashly Rolfson', 'https://via.placeholder.com/640x480.png/00eeff?text=consequatur', '11c43470-625d-3db3-a2bb-a85ae9645f73', 80, 755, 79, 3, 'Facilis nulla pariatur consequatur ipsa eligendi quia porro excepturi fugiat mollitia eius voluptate error libero et ipsam eveniet nisi aut quo quia eos aut voluptatem sequi deserunt rem qui suscipit ut quod maiores qui magni omnis.', 'Dr. Nicholas Pollich', 'Earum veritatis ratione facilis cumque facere architecto dignissimos itaque mollitia eum eaque enim ex sequi cumque architecto ut praesentium minima sapiente alias sed molestias saepe modi beatae doloremque eveniet ducimus est tempore consequatur modi nobis illum eveniet consectetur maxime corporis qui.', 1, 0, 0, 1, 1, 1, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(54, 5, 11, 13, 'Dr. Chloe Heidenreich I', 'veniam-qui-quo-doloremque-expedita-distinctio-quibusdam', 'Rebeca Lehner', 'https://via.placeholder.com/640x480.png/009933?text=occaecati', '95b238e0-0fa8-3ce0-b573-3a5bab37c0da', 72, 700, 74, 3, 'Et atque expedita aperiam rem cupiditate soluta ipsum rerum magnam beatae rerum veritatis non quisquam atque quaerat ducimus eos et laudantium inventore laborum esse labore quod ab quo omnis dignissimos quas vero.', 'Dr. Virginia Dooley', 'Illum sit deserunt voluptates non sunt nulla tenetur ipsam rerum perferendis occaecati commodi quibusdam exercitationem doloribus et repellendus et aliquam sapiente veniam necessitatibus sunt quia amet rerum non.', 1, 1, 1, 1, 1, 0, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(55, 4, 8, 6, 'Esta Boehm', 'labore-eaque-quis-et-velit-veniam', 'Ms. Brandi Hahn', 'https://via.placeholder.com/640x480.png/00bb11?text=ut', 'abbe2e96-41f6-36b6-afbf-1d53532fb056', 75, 758, 76, 1, 'Nam quia iusto quae at ab ut eos iusto saepe et sed soluta fugiat vel dignissimos delectus laboriosam velit hic ullam ratione qui et et labore sint dolore maxime quis est excepturi rem dolores nihil officiis.', 'Samara Prohaska', 'Voluptas recusandae non incidunt blanditiis sunt eveniet facilis magnam consectetur quis autem eum ut ut sit iure ipsum sunt ratione numquam.', 0, 0, 0, 1, 1, 0, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(56, 5, 12, 18, 'Luther Berge', 'rerum-pariatur-blanditiis-voluptate-perspiciatis-delectus-beatae', 'Assunta Corwin', 'https://via.placeholder.com/640x480.png/0000ff?text=sint', '4beadb2f-1ae2-32f7-a42b-84cb5ad8204b', 65, 237, 62, 5, 'Quia cum consequatur non exercitationem ex eaque voluptas magni accusamus repudiandae ipsam repellendus velit dolorum molestiae id in consequatur consequatur harum et est nihil ut corrupti quisquam harum.', 'Leonardo Goldner I', 'Et dolor hic id ex molestiae eligendi eveniet quis ipsam id tempore sunt ut repellat hic quis corrupti quas perferendis quis ab repellendus consequatur sapiente.', 1, 1, 0, 1, 1, 1, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(57, 3, 5, 9, 'Kyle Gleichner', 'ea-aut-libero-iure-dolore-odit-explicabo-incidunt', 'Leonard Funk', 'https://via.placeholder.com/640x480.png/00ccdd?text=id', '3737a586-b1d7-362e-bc46-8acdb605d566', 68, 945, 76, 10, 'Sit culpa deleniti autem qui possimus blanditiis nisi error facere quis dolor dignissimos qui totam quo quo expedita mollitia nemo quod ut error rerum quis architecto reiciendis est aut ipsam molestiae molestias.', 'Elian Mante', 'Ut facilis rerum voluptatum quia est qui non aut in fugit reiciendis deleniti assumenda voluptatum deleniti natus ipsum unde corrupti vel eaque et numquam perferendis dolore non non aut est rerum sunt voluptas quia.', 1, 0, 0, 1, 1, 1, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(58, 1, 3, 19, 'Emmie Stanton', 'quas-quia-excepturi-atque', 'Manuel Keeling', 'https://via.placeholder.com/640x480.png/001144?text=quo', '45922652-bd7f-3c8c-ae6f-3d9e360fcdd1', 65, 323, 75, 1, 'Aut consequatur aut magni reiciendis incidunt quas vitae quod delectus possimus et vero magni pariatur et illum iusto nam tenetur perspiciatis molestiae consequatur a omnis illo similique numquam tempora consequatur qui occaecati laboriosam.', 'Wilson Rau I', 'Dignissimos provident eveniet ullam in id possimus cum ut tempore quia aut ipsa voluptates qui nihil rerum similique minima eos ea est aperiam.', 0, 0, 1, 1, 1, 0, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(59, 1, 5, 17, 'Dr. Ardith Roberts', 'ea-laudantium-reprehenderit-libero-iste', 'Aylin Keeling', 'https://via.placeholder.com/640x480.png/00dd00?text=molestiae', '1d90bca1-592e-3791-a008-84c526c5587e', 66, 830, 68, 8, 'Iure consectetur molestias quasi non nihil est id accusamus voluptates pariatur odio cupiditate sed quis enim enim enim laudantium dolor voluptas vero et sint mollitia quasi quaerat recusandae quia repellendus.', 'Mr. Delbert Kuvalis I', 'Quisquam perferendis explicabo eaque qui est quibusdam et doloribus placeat ipsa occaecati impedit minima animi a ut ratione et dignissimos magnam at deleniti laudantium reiciendis ea voluptates repudiandae magni ducimus voluptatem officiis aliquid voluptatem.', 0, 1, 1, 1, 1, 0, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(60, 4, 7, 17, 'Mozelle Cassin', 'consequatur-et-reprehenderit-facilis-quisquam-vero-eum', 'Godfrey Schimmel', 'https://via.placeholder.com/640x480.png/0088bb?text=eligendi', '9fe1702b-ed7b-369d-a4b3-82ee2159b8f1', 61, 538, 80, 1, 'Et atque distinctio fugit aut aliquid quasi sint quae unde labore a voluptas culpa nulla sunt hic tempora quaerat vitae est laboriosam quibusdam possimus eveniet debitis quia explicabo modi.', 'Ryley Fay II', 'In numquam omnis dignissimos quidem quibusdam et in exercitationem tempora modi repellendus consectetur excepturi aut amet fugiat dolor atque eos et quam illo qui sapiente eaque totam placeat ipsa et similique voluptatem aut sint et ipsum aspernatur quia.', 0, 1, 1, 1, 1, 1, '2023-04-19 05:06:21', '2023-04-19 05:06:21');

-- --------------------------------------------------------

--
-- Table structure for table `product_cupons`
--

CREATE TABLE `product_cupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` int(11) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `image_url`, `created_at`, `updated_at`) VALUES
(1, 43, 'Prof. Kian Armstrong DVM', 'https://via.placeholder.com/640x480.png/006611?text=aut', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(2, 3, 'Della Romaguera', 'https://via.placeholder.com/640x480.png/009911?text=porro', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(3, 22, 'Percival Pfannerstill III', 'https://via.placeholder.com/640x480.png/007733?text=aut', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(4, 15, 'Anya Streich', 'https://via.placeholder.com/640x480.png/002277?text=temporibus', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(5, 59, 'Duane Gottlieb', 'https://via.placeholder.com/640x480.png/003333?text=illo', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(6, 33, 'Mayra Kutch PhD', 'https://via.placeholder.com/640x480.png/00aa22?text=modi', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(7, 40, 'Dr. Nicholas Wisozk', 'https://via.placeholder.com/640x480.png/00dd99?text=ut', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(8, 60, 'Oliver Balistreri III', 'https://via.placeholder.com/640x480.png/005533?text=et', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(9, 41, 'Angelita Ward DVM', 'https://via.placeholder.com/640x480.png/0011dd?text=perspiciatis', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(10, 48, 'Clark Lockman I', 'https://via.placeholder.com/640x480.png/004411?text=accusamus', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(11, 47, 'Roslyn Jones', 'https://via.placeholder.com/640x480.png/0099ff?text=odio', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(12, 54, 'Mandy Fritsch I', 'https://via.placeholder.com/640x480.png/007766?text=cupiditate', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(13, 35, 'Bethel Bernhard', 'https://via.placeholder.com/640x480.png/00cc00?text=et', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(14, 43, 'Jude Bernier', 'https://via.placeholder.com/640x480.png/008822?text=ipsam', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(15, 11, 'Pasquale McClure', 'https://via.placeholder.com/640x480.png/003322?text=laboriosam', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(16, 4, 'Sydni Jacobs', 'https://via.placeholder.com/640x480.png/004411?text=at', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(17, 45, 'Ellie Hessel', 'https://via.placeholder.com/640x480.png/0022ee?text=repudiandae', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(18, 17, 'Karl Friesen', 'https://via.placeholder.com/640x480.png/001122?text=exercitationem', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(19, 57, 'Mylene Kuphal', 'https://via.placeholder.com/640x480.png/004466?text=quia', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(20, 36, 'Saul Kassulke', 'https://via.placeholder.com/640x480.png/008800?text=laudantium', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(21, 56, 'Quincy Bahringer I', 'https://via.placeholder.com/640x480.png/003355?text=voluptas', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(22, 45, 'Dr. Jamal Fadel', 'https://via.placeholder.com/640x480.png/0055bb?text=explicabo', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(23, 18, 'Malvina Hansen II', 'https://via.placeholder.com/640x480.png/00ff77?text=suscipit', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(24, 32, 'Lindsay Nolan', 'https://via.placeholder.com/640x480.png/008855?text=est', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(25, 39, 'Miss Ora Haag IV', 'https://via.placeholder.com/640x480.png/004477?text=quaerat', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(26, 45, 'Wendell Parisian', 'https://via.placeholder.com/640x480.png/005544?text=ut', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(27, 29, 'Dr. Devonte Hilpert', 'https://via.placeholder.com/640x480.png/008844?text=aut', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(28, 34, 'Jon Lubowitz', 'https://via.placeholder.com/640x480.png/00bbcc?text=soluta', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(29, 45, 'Kirsten Ferry', 'https://via.placeholder.com/640x480.png/0044ee?text=molestias', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(30, 52, 'Estrella Bayer', 'https://via.placeholder.com/640x480.png/009911?text=laborum', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(31, 11, 'Nellie Mertz IV', 'https://via.placeholder.com/640x480.png/00eeaa?text=sunt', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(32, 55, 'Prof. Enoch Kulas I', 'https://via.placeholder.com/640x480.png/002299?text=dolore', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(33, 38, 'Dr. Thea Stroman DVM', 'https://via.placeholder.com/640x480.png/00bbaa?text=maiores', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(34, 23, 'Keaton Leffler', 'https://via.placeholder.com/640x480.png/00dd88?text=ex', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(35, 22, 'Prof. Randi Howell', 'https://via.placeholder.com/640x480.png/00aabb?text=blanditiis', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(36, 7, 'Russ Casper', 'https://via.placeholder.com/640x480.png/003355?text=ut', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(37, 2, 'Aaliyah Littel', 'https://via.placeholder.com/640x480.png/00ddbb?text=facere', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(38, 32, 'Glenda Weber', 'https://via.placeholder.com/640x480.png/002211?text=animi', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(39, 57, 'Prof. Macey Reinger', 'https://via.placeholder.com/640x480.png/001155?text=molestias', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(40, 16, 'Enrico Baumbach', 'https://via.placeholder.com/640x480.png/00cc55?text=culpa', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(41, 18, 'Dr. Berry Franecki Sr.', 'https://via.placeholder.com/640x480.png/000033?text=et', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(42, 41, 'Leanne Schinner III', 'https://via.placeholder.com/640x480.png/006600?text=et', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(43, 41, 'Ethelyn Jacobs', 'https://via.placeholder.com/640x480.png/005533?text=quo', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(44, 52, 'Timmothy Ondricka', 'https://via.placeholder.com/640x480.png/0022dd?text=occaecati', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(45, 25, 'Araceli Barrows V', 'https://via.placeholder.com/640x480.png/008866?text=voluptas', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(46, 46, 'Michel Toy', 'https://via.placeholder.com/640x480.png/0077cc?text=corporis', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(47, 40, 'Mr. Wyman Kirlin Jr.', 'https://via.placeholder.com/640x480.png/00ffbb?text=est', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(48, 18, 'Jessy Nienow', 'https://via.placeholder.com/640x480.png/003333?text=quod', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(49, 22, 'Mr. Freddy Herman I', 'https://via.placeholder.com/640x480.png/0033cc?text=amet', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(50, 24, 'Elisa Buckridge', 'https://via.placeholder.com/640x480.png/00eeee?text=veniam', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(51, 33, 'Prof. Zechariah Cummings DVM', 'https://via.placeholder.com/640x480.png/009999?text=ut', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(52, 15, 'Thad Kunze', 'https://via.placeholder.com/640x480.png/002277?text=ab', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(53, 5, 'Cara Huel', 'https://via.placeholder.com/640x480.png/0011aa?text=quaerat', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(54, 30, 'Viviane Zboncak', 'https://via.placeholder.com/640x480.png/00cccc?text=ab', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(55, 2, 'Margot Donnelly II', 'https://via.placeholder.com/640x480.png/005555?text=optio', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(56, 6, 'Mr. Dayne Berge IV', 'https://via.placeholder.com/640x480.png/0033dd?text=tempore', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(57, 14, 'Jessie Morissette', 'https://via.placeholder.com/640x480.png/00ee55?text=corporis', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(58, 39, 'Myrl Cole', 'https://via.placeholder.com/640x480.png/0055ff?text=sit', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(59, 9, 'Haylie Wisozk', 'https://via.placeholder.com/640x480.png/002299?text=est', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(60, 16, 'Jamar Kertzmann', 'https://via.placeholder.com/640x480.png/006644?text=quasi', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(61, 55, 'Prof. Darian Prohaska II', 'https://via.placeholder.com/640x480.png/0055cc?text=delectus', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(62, 38, 'Yvette Ortiz', 'https://via.placeholder.com/640x480.png/000077?text=ut', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(63, 5, 'Enrico Reilly', 'https://via.placeholder.com/640x480.png/0011aa?text=culpa', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(64, 8, 'Nat Towne DDS', 'https://via.placeholder.com/640x480.png/00bb11?text=consectetur', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(65, 7, 'Dr. Vilma Crist', 'https://via.placeholder.com/640x480.png/00bb99?text=officiis', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(66, 23, 'Sage Powlowski', 'https://via.placeholder.com/640x480.png/00ee99?text=velit', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(67, 13, 'Effie Greenholt', 'https://via.placeholder.com/640x480.png/00ee33?text=ea', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(68, 58, 'Hugh Hansen', 'https://via.placeholder.com/640x480.png/006633?text=soluta', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(69, 23, 'Oceane Eichmann', 'https://via.placeholder.com/640x480.png/0066ff?text=cum', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(70, 41, 'Amie Hills', 'https://via.placeholder.com/640x480.png/000099?text=nemo', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(71, 2, 'Ms. Elna Rempel', 'https://via.placeholder.com/640x480.png/00ee88?text=culpa', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(72, 3, 'Andreane Rau', 'https://via.placeholder.com/640x480.png/006699?text=voluptate', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(73, 13, 'Cheyanne Bednar', 'https://via.placeholder.com/640x480.png/0066aa?text=consequatur', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(74, 56, 'Yasmin Roob', 'https://via.placeholder.com/640x480.png/009977?text=saepe', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(75, 19, 'Mr. Justice Thiel', 'https://via.placeholder.com/640x480.png/001188?text=qui', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(76, 29, 'Paris Howe', 'https://via.placeholder.com/640x480.png/00aa00?text=adipisci', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(77, 38, 'Emory Bailey', 'https://via.placeholder.com/640x480.png/00ff33?text=non', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(78, 37, 'Rachelle Johnston', 'https://via.placeholder.com/640x480.png/005577?text=et', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(79, 16, 'Maeve Ruecker', 'https://via.placeholder.com/640x480.png/001188?text=explicabo', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(80, 60, 'Destini Luettgen Sr.', 'https://via.placeholder.com/640x480.png/00aaee?text=quam', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(81, 31, 'Prof. Zechariah Nolan DVM', 'https://via.placeholder.com/640x480.png/0033bb?text=vel', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(82, 5, 'Claire Olson II', 'https://via.placeholder.com/640x480.png/009955?text=possimus', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(83, 27, 'Linnie Gislason', 'https://via.placeholder.com/640x480.png/00aaee?text=illum', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(84, 15, 'Noelia Schultz', 'https://via.placeholder.com/640x480.png/0066aa?text=voluptas', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(85, 60, 'Dr. Dave Schaden', 'https://via.placeholder.com/640x480.png/006666?text=enim', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(86, 2, 'Kacie Gibson', 'https://via.placeholder.com/640x480.png/000011?text=est', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(87, 4, 'Gisselle Rippin III', 'https://via.placeholder.com/640x480.png/00ffaa?text=molestias', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(88, 60, 'Ali Stamm', 'https://via.placeholder.com/640x480.png/0077aa?text=officiis', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(89, 17, 'Amani Nolan', 'https://via.placeholder.com/640x480.png/0099bb?text=molestias', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(90, 17, 'Shyanne Beatty DVM', 'https://via.placeholder.com/640x480.png/003344?text=aut', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(91, 5, 'Prof. Edythe Jenkins I', 'https://via.placeholder.com/640x480.png/00ffdd?text=aut', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(92, 12, 'Syble Boyle', 'https://via.placeholder.com/640x480.png/005577?text=cum', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(93, 36, 'Prof. Nola Trantow MD', 'https://via.placeholder.com/640x480.png/0099ee?text=qui', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(94, 13, 'Johathan Hickle', 'https://via.placeholder.com/640x480.png/008811?text=nemo', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(95, 4, 'Mrs. Stefanie Russel DVM', 'https://via.placeholder.com/640x480.png/00aa00?text=consequatur', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(96, 51, 'Ms. Velma Hettinger Jr.', 'https://via.placeholder.com/640x480.png/009944?text=occaecati', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(97, 37, 'Mr. Kenneth Friesen Jr.', 'https://via.placeholder.com/640x480.png/000044?text=fuga', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(98, 46, 'Dandre Lubowitz', 'https://via.placeholder.com/640x480.png/00ff11?text=et', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(99, 59, 'Dr. Luciano Larson MD', 'https://via.placeholder.com/640x480.png/009988?text=impedit', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(100, 37, 'Mark Balistreri DVM', 'https://via.placeholder.com/640x480.png/00bb77?text=velit', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(101, 9, 'Estella Mayer', 'https://via.placeholder.com/640x480.png/0011aa?text=soluta', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(102, 14, 'Idella Rowe', 'https://via.placeholder.com/640x480.png/006688?text=ut', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(103, 9, 'Scot Kuphal', 'https://via.placeholder.com/640x480.png/00bbee?text=in', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(104, 34, 'Mr. Noel Grimes IV', 'https://via.placeholder.com/640x480.png/006644?text=sed', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(105, 48, 'Prof. Antonia Witting II', 'https://via.placeholder.com/640x480.png/002233?text=et', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(106, 45, 'Rahsaan Smitham', 'https://via.placeholder.com/640x480.png/00ddbb?text=sit', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(107, 10, 'Charley Bahringer', 'https://via.placeholder.com/640x480.png/00aaee?text=consequatur', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(108, 17, 'Kristin Green', 'https://via.placeholder.com/640x480.png/00dd99?text=consequatur', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(109, 22, 'Jamarcus Rodriguez', 'https://via.placeholder.com/640x480.png/00dd88?text=totam', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(110, 52, 'Uriel Champlin', 'https://via.placeholder.com/640x480.png/00cccc?text=dolorem', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(111, 24, 'Elissa Funk', 'https://via.placeholder.com/640x480.png/0077bb?text=et', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(112, 48, 'Kiana Johns', 'https://via.placeholder.com/640x480.png/009900?text=ut', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(113, 11, 'Ruben Carroll', 'https://via.placeholder.com/640x480.png/00cc33?text=officia', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(114, 11, 'Adrianna Bradtke', 'https://via.placeholder.com/640x480.png/004488?text=unde', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(115, 57, 'Emiliano Ward', 'https://via.placeholder.com/640x480.png/00cc99?text=dolorem', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(116, 44, 'Prof. Gladyce Hills', 'https://via.placeholder.com/640x480.png/003366?text=sunt', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(117, 60, 'Prof. Bernita Jones', 'https://via.placeholder.com/640x480.png/009944?text=adipisci', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(118, 28, 'Greyson Denesik DVM', 'https://via.placeholder.com/640x480.png/000099?text=sapiente', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(119, 54, 'Prof. Madelynn Bergnaum DDS', 'https://via.placeholder.com/640x480.png/007766?text=impedit', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(120, 8, 'Gregorio Gutkowski', 'https://via.placeholder.com/640x480.png/00aa44?text=quibusdam', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(121, 36, 'Alysson Fay', 'https://via.placeholder.com/640x480.png/006655?text=iure', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(122, 22, 'Nathanial Pouros', 'https://via.placeholder.com/640x480.png/0000bb?text=vel', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(123, 55, 'Prof. Rollin Jaskolski', 'https://via.placeholder.com/640x480.png/00cc66?text=possimus', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(124, 41, 'Major Morar V', 'https://via.placeholder.com/640x480.png/00ccbb?text=ipsum', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(125, 38, 'Mr. Geoffrey Bechtelar', 'https://via.placeholder.com/640x480.png/00ee55?text=quam', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(126, 53, 'Katrina Bailey', 'https://via.placeholder.com/640x480.png/0000aa?text=qui', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(127, 16, 'Mr. Randall Nitzsche III', 'https://via.placeholder.com/640x480.png/00cc88?text=autem', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(128, 49, 'Mr. Jevon Terry', 'https://via.placeholder.com/640x480.png/003311?text=quos', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(129, 15, 'Athena Gerhold', 'https://via.placeholder.com/640x480.png/00cc55?text=distinctio', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(130, 42, 'Damon Cremin', 'https://via.placeholder.com/640x480.png/0099dd?text=laudantium', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(131, 9, 'Mr. Jerel Lakin', 'https://via.placeholder.com/640x480.png/00bb00?text=itaque', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(132, 9, 'Mr. Dangelo Crist', 'https://via.placeholder.com/640x480.png/008899?text=sequi', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(133, 29, 'Leopold Beahan V', 'https://via.placeholder.com/640x480.png/004400?text=molestiae', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(134, 1, 'Annabelle Effertz', 'https://via.placeholder.com/640x480.png/009977?text=quis', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(135, 58, 'Antonetta Kulas', 'https://via.placeholder.com/640x480.png/00eeaa?text=magni', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(136, 48, 'Prof. Kris Franecki', 'https://via.placeholder.com/640x480.png/00ffaa?text=quo', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(137, 56, 'Leta Deckow', 'https://via.placeholder.com/640x480.png/00bb77?text=corporis', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(138, 38, 'Boris Haley', 'https://via.placeholder.com/640x480.png/006666?text=eos', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(139, 14, 'Miss Else Kling', 'https://via.placeholder.com/640x480.png/0044ff?text=quaerat', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(140, 45, 'Myrtice Kassulke II', 'https://via.placeholder.com/640x480.png/00ff66?text=sint', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(141, 38, 'Prof. Gerald Hammes', 'https://via.placeholder.com/640x480.png/007733?text=saepe', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(142, 55, 'Darius Stiedemann', 'https://via.placeholder.com/640x480.png/0066dd?text=id', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(143, 52, 'Bryon Veum Sr.', 'https://via.placeholder.com/640x480.png/00bb66?text=est', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(144, 6, 'Mrs. Tina Klein', 'https://via.placeholder.com/640x480.png/00ff77?text=voluptatem', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(145, 3, 'Prof. Rosa Rodriguez Sr.', 'https://via.placeholder.com/640x480.png/00cc77?text=qui', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(146, 52, 'Diego Russel', 'https://via.placeholder.com/640x480.png/0033cc?text=culpa', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(147, 48, 'Laurie Fahey', 'https://via.placeholder.com/640x480.png/00cc00?text=id', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(148, 26, 'Jailyn Rath', 'https://via.placeholder.com/640x480.png/0055bb?text=inventore', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(149, 42, 'Rhoda Hoppe', 'https://via.placeholder.com/640x480.png/00dddd?text=in', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(150, 18, 'Dr. Brycen Doyle', 'https://via.placeholder.com/640x480.png/004411?text=voluptas', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(151, 48, 'Mr. Tito Abshire', 'https://via.placeholder.com/640x480.png/006666?text=deleniti', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(152, 39, 'Ernest Bashirian', 'https://via.placeholder.com/640x480.png/0099dd?text=molestias', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(153, 18, 'Jody Lakin', 'https://via.placeholder.com/640x480.png/002222?text=quia', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(154, 39, 'Orlando Swaniawski', 'https://via.placeholder.com/640x480.png/006644?text=doloremque', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(155, 54, 'Uriah Hagenes', 'https://via.placeholder.com/640x480.png/00ee99?text=ipsam', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(156, 23, 'Pasquale Mayert', 'https://via.placeholder.com/640x480.png/009966?text=nesciunt', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(157, 8, 'Jolie Schimmel', 'https://via.placeholder.com/640x480.png/0000ff?text=dolorem', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(158, 53, 'Nikki Hoeger', 'https://via.placeholder.com/640x480.png/00ffbb?text=architecto', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(159, 11, 'Ms. Samantha Pfannerstill I', 'https://via.placeholder.com/640x480.png/009933?text=ut', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(160, 35, 'Ernest Tillman', 'https://via.placeholder.com/640x480.png/006655?text=consequuntur', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(161, 6, 'Miss Eulah Abbott', 'https://via.placeholder.com/640x480.png/00ff44?text=et', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(162, 56, 'Mr. Newell Medhurst III', 'https://via.placeholder.com/640x480.png/0000cc?text=iste', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(163, 41, 'Damion Cruickshank', 'https://via.placeholder.com/640x480.png/004477?text=sed', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(164, 51, 'Danika Kozey', 'https://via.placeholder.com/640x480.png/00cc44?text=sit', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(165, 20, 'Mikayla Brekke', 'https://via.placeholder.com/640x480.png/0055aa?text=autem', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(166, 57, 'Brendon Robel', 'https://via.placeholder.com/640x480.png/007744?text=earum', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(167, 14, 'Kailee McDermott DVM', 'https://via.placeholder.com/640x480.png/002277?text=ullam', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(168, 33, 'Prof. Javon Stokes', 'https://via.placeholder.com/640x480.png/0044ee?text=architecto', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(169, 28, 'Holden Mitchell', 'https://via.placeholder.com/640x480.png/00bb99?text=ea', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(170, 36, 'Jess Kirlin', 'https://via.placeholder.com/640x480.png/001133?text=qui', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(171, 1, 'Lester Beahan', 'https://via.placeholder.com/640x480.png/00cc99?text=sunt', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(172, 48, 'Jonathan Considine', 'https://via.placeholder.com/640x480.png/000055?text=vel', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(173, 2, 'Dr. Vernice Bradtke', 'https://via.placeholder.com/640x480.png/001166?text=commodi', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(174, 49, 'Earline Nolan', 'https://via.placeholder.com/640x480.png/007700?text=et', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(175, 59, 'Karelle Spencer', 'https://via.placeholder.com/640x480.png/00aa22?text=architecto', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(176, 59, 'George Greenholt', 'https://via.placeholder.com/640x480.png/009933?text=pariatur', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(177, 27, 'Leo Kling', 'https://via.placeholder.com/640x480.png/0099dd?text=quia', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(178, 50, 'Josue Thiel', 'https://via.placeholder.com/640x480.png/00ccee?text=repudiandae', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(179, 20, 'Myra Metz', 'https://via.placeholder.com/640x480.png/0011ff?text=dignissimos', '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(180, 20, 'Jamaal Greenholt', 'https://via.placeholder.com/640x480.png/007755?text=quidem', '2023-04-19 05:06:22', '2023-04-19 05:06:22');

-- --------------------------------------------------------

--
-- Table structure for table `product_prices`
--

CREATE TABLE `product_prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_prices`
--

INSERT INTO `product_prices` (`id`, `product_id`, `price`, `discount`, `created_at`, `updated_at`) VALUES
(1, 9, 979, 55, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(2, 20, 924, 27, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(3, 55, 694, 82, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(4, 40, 153, 66, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(5, 22, 124, 12, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(6, 8, 326, 62, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(7, 57, 713, 50, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(8, 51, 588, 52, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(9, 26, 847, 51, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(10, 30, 639, 29, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(11, 7, 759, 15, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(12, 11, 382, 92, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(13, 60, 150, 24, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(14, 18, 798, 74, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(15, 8, 391, 73, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(16, 55, 580, 66, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(17, 15, 486, 46, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(18, 3, 788, 68, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(19, 3, 960, 79, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(20, 12, 212, 75, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(21, 41, 748, 63, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(22, 6, 587, 45, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(23, 23, 674, 15, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(24, 25, 520, 23, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(25, 2, 522, 85, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(26, 28, 161, 96, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(27, 53, 281, 63, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(28, 49, 141, 92, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(29, 55, 322, 55, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(30, 5, 560, 46, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(31, 5, 657, 93, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(32, 27, 840, 59, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(33, 31, 862, 66, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(34, 37, 749, 30, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(35, 5, 496, 75, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(36, 7, 167, 13, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(37, 44, 926, 46, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(38, 25, 248, 65, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(39, 33, 362, 100, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(40, 44, 308, 75, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(41, 12, 970, 29, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(42, 47, 112, 54, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(43, 39, 645, 29, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(44, 6, 690, 47, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(45, 41, 639, 11, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(46, 34, 134, 89, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(47, 9, 950, 69, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(48, 28, 453, 51, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(49, 22, 820, 99, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(50, 30, 611, 57, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(51, 38, 259, 13, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(52, 14, 351, 38, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(53, 43, 528, 19, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(54, 32, 225, 21, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(55, 58, 226, 14, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(56, 55, 734, 10, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(57, 26, 546, 98, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(58, 3, 261, 82, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(59, 47, 105, 12, '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(60, 1, 487, 50, '2023-04-19 05:06:21', '2023-04-19 05:06:21');

-- --------------------------------------------------------

--
-- Table structure for table `product_wishlists`
--

CREATE TABLE `product_wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_price` bigint(20) UNSIGNED NOT NULL,
  `product_qty` int(11) NOT NULL DEFAULT 0,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_wishlists`
--

INSERT INTO `product_wishlists` (`id`, `user_id`, `product_id`, `product_price`, `product_qty`, `price`, `created_at`, `updated_at`) VALUES
(1, 6, 5, 30, 1, 560, '2023-04-19 10:03:25', '2023-04-19 10:03:25');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL,
  `ratings` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `product_id`, `comment_id`, `ratings`, `created_at`, `updated_at`) VALUES
(1, 4, 4, 24, 3, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(2, 1, 16, 43, 5, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(3, 2, 51, 44, 2, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(4, 4, 26, 50, 4, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(5, 5, 1, 4, 2, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(6, 3, 36, 14, 5, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(7, 4, 54, 1, 2, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(8, 3, 38, 38, 1, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(9, 1, 30, 40, 5, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(10, 2, 43, 31, 1, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(11, 3, 31, 16, 3, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(12, 4, 33, 6, 2, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(13, 3, 21, 3, 5, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(14, 1, 7, 2, 1, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(15, 5, 27, 31, 5, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(16, 1, 4, 46, 2, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(17, 3, 8, 17, 4, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(18, 1, 38, 26, 1, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(19, 3, 16, 24, 2, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(20, 1, 20, 25, 3, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(21, 4, 12, 42, 1, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(22, 5, 4, 16, 2, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(23, 4, 57, 6, 2, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(24, 2, 20, 30, 4, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(25, 2, 41, 22, 2, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(26, 1, 37, 38, 1, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(27, 2, 30, 32, 2, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(28, 2, 27, 50, 5, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(29, 1, 49, 34, 2, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(30, 3, 36, 32, 1, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(31, 2, 25, 9, 1, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(32, 5, 41, 19, 4, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(33, 3, 53, 12, 3, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(34, 2, 3, 15, 2, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(35, 4, 46, 4, 3, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(36, 2, 58, 1, 1, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(37, 3, 15, 27, 4, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(38, 3, 33, 5, 5, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(39, 5, 43, 35, 4, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(40, 5, 12, 1, 3, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(41, 2, 13, 22, 4, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(42, 5, 57, 34, 3, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(43, 4, 45, 44, 5, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(44, 1, 21, 25, 3, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(45, 4, 33, 20, 1, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(46, 1, 34, 22, 2, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(47, 4, 50, 26, 1, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(48, 1, 29, 25, 4, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(49, 2, 26, 33, 5, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(50, 5, 45, 33, 5, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(51, 3, 38, 46, 4, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(52, 4, 27, 45, 2, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(53, 4, 21, 12, 2, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(54, 2, 41, 47, 2, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(55, 1, 48, 27, 4, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(56, 4, 11, 32, 5, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(57, 3, 48, 38, 4, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(58, 1, 41, 30, 1, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(59, 2, 2, 39, 4, '2023-04-19 05:06:22', '2023-04-19 05:06:22'),
(60, 1, 26, 42, 3, '2023-04-19 05:06:22', '2023-04-19 05:06:22');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2023-04-19 05:06:20', '2023-04-19 05:06:20'),
(2, 'manager', 'web', '2023-04-19 05:06:20', '2023-04-19 05:06:20'),
(3, 'editor', 'web', '2023-04-19 05:06:20', '2023-04-19 05:06:20'),
(4, 'seller', 'web', '2023-04-19 05:06:20', '2023-04-19 05:06:20'),
(5, 'buyer', 'web', '2023-04-19 05:06:20', '2023-04-19 05:06:20');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sub_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `sub_name`, `sub_slug`, `created_at`, `updated_at`) VALUES
(1, 5, 'Ms. Jacky Carter', 'optio-a-est-officiis-voluptas-optio-dolorem', '2023-04-19 05:06:20', '2023-04-19 05:06:20'),
(2, 7, 'Ocie Kassulke', 'alias-rerum-unde-hic-ut-corrupti-fugit-voluptatibus', '2023-04-19 05:06:20', '2023-04-19 05:06:20'),
(3, 9, 'Dr. Jaylon Nikolaus', 'et-voluptate-quo-reprehenderit-et-cum', '2023-04-19 05:06:20', '2023-04-19 05:06:20'),
(4, 1, 'Alvena Kuhic', 'natus-labore-perspiciatis-enim-assumenda', '2023-04-19 05:06:20', '2023-04-19 05:06:20'),
(5, 6, 'Dalton Hintz', 'optio-quibusdam-sit-veniam-hic-sapiente-aut', '2023-04-19 05:06:20', '2023-04-19 05:06:20'),
(6, 1, 'Emory Hills', 'voluptas-fuga-ut-dolore-suscipit-ratione', '2023-04-19 05:06:20', '2023-04-19 05:06:20'),
(7, 9, 'Ora Medhurst', 'tempore-amet-qui-rem-aut-vel', '2023-04-19 05:06:20', '2023-04-19 05:06:20'),
(8, 11, 'Hillary Hayes', 'est-nihil-aut-dolorum-minima-et-ut-maiores', '2023-04-19 05:06:20', '2023-04-19 05:06:20'),
(9, 5, 'Ryleigh Cummerata', 'dolore-totam-sed-eos-pariatur', '2023-04-19 05:06:20', '2023-04-19 05:06:20'),
(10, 2, 'Lucinda Ratke', 'nesciunt-ducimus-quis-illo-sunt-delectus', '2023-04-19 05:06:20', '2023-04-19 05:06:20'),
(11, 5, 'Loma Wehner', 'excepturi-ut-odio-repellendus-mollitia-quo-et', '2023-04-19 05:06:20', '2023-04-19 05:06:20'),
(12, 9, 'Ms. Faye Maggio IV', 'et-voluptatem-odit-quo-voluptatem-et-molestias-voluptatum', '2023-04-19 05:06:20', '2023-04-19 05:06:20'),
(13, 3, 'Daphne Stoltenberg III', 'fugit-eum-aut-tempora-laborum', '2023-04-19 05:06:20', '2023-04-19 05:06:20'),
(14, 12, 'Rossie Osinski', 'quae-tempore-ullam-minima-optio-autem-similique', '2023-04-19 05:06:20', '2023-04-19 05:06:20'),
(15, 2, 'Dan Shields', 'illum-nihil-dolore-rerum-aut', '2023-04-19 05:06:20', '2023-04-19 05:06:20'),
(16, 8, 'Prof. Casimir Quitzon III', 'animi-dolorem-omnis-est-quam-vero', '2023-04-19 05:06:20', '2023-04-19 05:06:20'),
(17, 2, 'Dr. Nya Huels Sr.', 'in-iste-possimus-sed-maxime', '2023-04-19 05:06:20', '2023-04-19 05:06:20'),
(18, 11, 'Dr. Cortez Breitenberg', 'sit-illo-earum-excepturi-sit-rerum-est-reiciendis', '2023-04-19 05:06:20', '2023-04-19 05:06:20'),
(19, 10, 'Gilberto Steuber DDS', 'ea-sit-incidunt-voluptatum-eos-ullam-autem', '2023-04-19 05:06:21', '2023-04-19 05:06:21'),
(20, 3, 'Creola Kihn', 'voluptatibus-iste-est-labore-temporibus-adipisci-qui', '2023-04-19 05:06:21', '2023-04-19 05:06:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `image`, `image_url`, `date_of_birth`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$XBaymdvVHY4oLMMIwa41GO.w/KtN6CrsseCw8hbx.xXpFjSh6zaO2', NULL, '2023-04-19 05:06:20', '2023-04-19 05:06:20'),
(2, 'Md Manager', 'manager@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$GAFQocvBSQPLs0n9fVlSUeWYyaxV38v7SU3/zSf4/ArWH1ACYzSZa', NULL, '2023-04-19 05:06:20', '2023-04-19 05:06:20'),
(3, 'Md Editor', 'editor@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$MsNK0H0f1hLSn7EiYBjtSO27H/wckN3T4u3faq7zelZjlojxbBjEW', NULL, '2023-04-19 05:06:20', '2023-04-19 05:06:20'),
(4, 'Md Seller', 'seller@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$MxnJasRhGBV5QWHicCBYaepnmkuegVLGZbx/Cqm8ekjzNJ.yfOvSy', NULL, '2023-04-19 05:06:20', '2023-04-19 05:06:20'),
(5, 'Md Buyer', 'buyer@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$q5F8iYcQuL6.CLB98/IgFulr5H/jdcX8lsA.utUzdyQd/EvEtHFi.', NULL, '2023-04-19 05:06:20', '2023-04-19 05:06:20'),
(6, 'Mohammad Zabir Raihan', 'zabirraihan570@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$aJbvX3D7R0AkrEU.kFOqs.GfiWYpIoAUNQ1Um3DkenKjvCPuaN1w2', NULL, '2023-04-19 05:20:39', '2023-04-19 10:03:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_product_id_foreign` (`product_id`),
  ADD KEY `carts_product_price_foreign` (`product_price`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_cupons`
--
ALTER TABLE `category_cupons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_cupons_category_id_foreign` (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cupons`
--
ALTER TABLE `cupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discount_prices`
--
ALTER TABLE `discount_prices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `discount_prices_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_user_id_foreign` (`user_id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_sub_category_id_foreign` (`sub_category_id`);

--
-- Indexes for table `product_cupons`
--
ALTER TABLE `product_cupons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_cupons_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_prices`
--
ALTER TABLE `product_prices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_prices_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_wishlists`
--
ALTER TABLE `product_wishlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_wishlists_user_id_foreign` (`user_id`),
  ADD KEY `product_wishlists_product_id_foreign` (`product_id`),
  ADD KEY `product_wishlists_product_price_foreign` (`product_price`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`),
  ADD KEY `reviews_product_id_foreign` (`product_id`),
  ADD KEY `reviews_comment_id_foreign` (`comment_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_category_id_foreign` (`category_id`);

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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `category_cupons`
--
ALTER TABLE `category_cupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `cupons`
--
ALTER TABLE `cupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `discount_prices`
--
ALTER TABLE `discount_prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=639;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `product_cupons`
--
ALTER TABLE `product_cupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT for table `product_prices`
--
ALTER TABLE `product_prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `product_wishlists`
--
ALTER TABLE `product_wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `carts_product_price_foreign` FOREIGN KEY (`product_price`) REFERENCES `product_prices` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `category_cupons`
--
ALTER TABLE `category_cupons`
  ADD CONSTRAINT `category_cupons_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `discount_prices`
--
ALTER TABLE `discount_prices`
  ADD CONSTRAINT `discount_prices_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_cupons`
--
ALTER TABLE `product_cupons`
  ADD CONSTRAINT `product_cupons_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_prices`
--
ALTER TABLE `product_prices`
  ADD CONSTRAINT `product_prices_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_wishlists`
--
ALTER TABLE `product_wishlists`
  ADD CONSTRAINT `product_wishlists_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_wishlists_product_price_foreign` FOREIGN KEY (`product_price`) REFERENCES `product_prices` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_wishlists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_comment_id_foreign` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
