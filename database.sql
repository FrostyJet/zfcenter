-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: mysql:3306
-- Generation Time: May 08, 2021 at 04:08 PM
-- Server version: 5.7.29
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `brand` varchar(50) CHARACTER SET utf8 NOT NULL,
  `parent` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `series` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `body` text CHARACTER SET utf8
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `brand`, `parent`, `series`, `title`, `body`) VALUES
(1, 'mercedes_A_class', NULL, NULL, NULL, NULL),
(2, 'mercedes_b_class', NULL, NULL, NULL, NULL),
(3, 'mercedes_w203', NULL, NULL, NULL, NULL),
(4, 'mercedes_clc_class', NULL, NULL, NULL, NULL),
(5, 'mercedes_w210', NULL, NULL, NULL, NULL),
(6, 'mercedes_w211', NULL, NULL, NULL, NULL),
(7, 'mercedes_w212', NULL, NULL, NULL, NULL),
(8, 'mercedes_w220', NULL, NULL, NULL, NULL),
(9, 'mercedes_w221', NULL, NULL, NULL, NULL),
(10, 'mercedes_w222', NULL, NULL, NULL, NULL),
(11, 'mercedes_glk_class', NULL, NULL, NULL, NULL),
(12, 'mercedes_w163', NULL, NULL, NULL, NULL),
(13, 'mercedes_w164', NULL, NULL, NULL, NULL),
(14, 'mercedes_w166', NULL, NULL, NULL, NULL),
(15, 'mercedes_gl_class_x164', NULL, NULL, NULL, NULL),
(16, 'mercedes_gl_class_x166', NULL, NULL, NULL, NULL),
(17, 'mercedes_r_class', NULL, NULL, NULL, NULL),
(18, 'mercedes_g_class', NULL, NULL, NULL, NULL),
(19, 'mercedes_w215', NULL, NULL, NULL, NULL),
(20, 'mercedes_w216', NULL, NULL, NULL, NULL),
(21, 'mercedes_sl_class', NULL, NULL, NULL, NULL),
(22, 'mercedes_slk_class', NULL, NULL, NULL, NULL),
(23, 'mercedes_v_class', NULL, NULL, NULL, NULL),
(24, 'mercedes_sprinter', NULL, NULL, NULL, NULL),
(25, 'audi_a1', NULL, NULL, NULL, NULL),
(26, 'audi_a3', NULL, NULL, NULL, NULL),
(27, 'audi_a4', NULL, NULL, NULL, NULL),
(28, 'audi_a5', NULL, NULL, NULL, NULL),
(29, 'audi_a6', NULL, NULL, NULL, NULL),
(30, 'audi_a7', NULL, NULL, NULL, NULL),
(31, 'audi_a8', NULL, NULL, NULL, NULL),
(32, 'audi_q3', NULL, NULL, NULL, NULL),
(33, 'audi_q5', NULL, NULL, NULL, NULL),
(34, 'audi_q7', NULL, NULL, NULL, NULL),
(35, 'audi_s4', NULL, NULL, NULL, NULL),
(36, 'audi_s5', NULL, NULL, NULL, NULL),
(37, 'audi_s6', NULL, NULL, NULL, NULL),
(38, 'audi_s8', NULL, NULL, NULL, NULL),
(39, 'audi_tt', NULL, NULL, NULL, NULL),
(40, 'x_type', NULL, NULL, NULL, NULL),
(41, 's_type', NULL, NULL, NULL, NULL),
(42, 'xf', NULL, NULL, NULL, NULL),
(43, 'xk', NULL, NULL, NULL, NULL),
(44, 'xj', NULL, NULL, NULL, NULL),
(45, 'discovery_3', NULL, NULL, NULL, NULL),
(46, 'discovery_4', NULL, NULL, NULL, NULL),
(47, 'freelander', NULL, NULL, NULL, NULL),
(48, 'classic_vogue', NULL, NULL, NULL, NULL),
(49, 'sport', NULL, NULL, NULL, NULL),
(50, 'evoque', NULL, NULL, NULL, NULL),
(51, 'bmw_x1_e84', NULL, NULL, NULL, NULL),
(52, 'bmw_e83_x3', NULL, NULL, NULL, NULL),
(53, 'bmw_f25', NULL, NULL, NULL, NULL),
(54, 'bmw_x5_e53', NULL, NULL, NULL, NULL),
(55, 'bmw_x5_e70', NULL, NULL, NULL, NULL),
(56, '6hp28_na_bmw_x5_e70', NULL, NULL, NULL, NULL),
(57, 'bmw_f15_x5', NULL, NULL, NULL, NULL),
(58, 'bmw_x6_e71', NULL, NULL, NULL, NULL),
(59, 'x6_f16', NULL, NULL, NULL, NULL),
(60, 'bmw_F20_F21', NULL, NULL, NULL, NULL),
(61, 'bmw_e81_e82_e87_e88', NULL, NULL, NULL, NULL),
(62, 'bmw_e90', NULL, NULL, NULL, NULL),
(63, 'bmw_f30_f31', NULL, NULL, NULL, NULL),
(64, 'bmw_e60', NULL, NULL, NULL, NULL),
(65, 'bmw_f10_f11', NULL, NULL, NULL, NULL),
(66, 'bmw_e63_e64', NULL, NULL, NULL, NULL),
(67, 'bmw_f12_f13_f06', NULL, NULL, NULL, NULL),
(68, 'bmw_e_65_66', NULL, NULL, NULL, NULL),
(69, 'bmw_f01', NULL, NULL, NULL, NULL),
(70, 'bmw_z4', NULL, NULL, NULL, NULL),
(71, 'aston_martin', NULL, NULL, NULL, NULL),
(72, 'bentley', NULL, NULL, NULL, NULL),
(73, 'chrysler', NULL, NULL, NULL, NULL),
(74, 'dodge', NULL, NULL, NULL, NULL),
(75, 'daimler', NULL, NULL, NULL, NULL),
(76, 'jeep', NULL, NULL, NULL, NULL),
(77, 'kia', NULL, NULL, NULL, NULL),
(78, 'lancia', NULL, NULL, NULL, NULL),
(79, 'lincoln', NULL, NULL, NULL, NULL),
(80, 'maserati', NULL, NULL, NULL, NULL),
(81, 'porsche', NULL, NULL, NULL, NULL),
(82, 'rr', NULL, NULL, NULL, NULL),
(83, 'seat', NULL, NULL, NULL, NULL),
(84, 'vw', 'other', 'other', 'РЕМОНТ АКПП VOLKSWAGEN', '<p>При бережном обращении с автомобилем, его регулярном техническом обслуживании, замене масла и диагностике, любая автоматическая коробка&nbsp;прослужит долго. Однако, к сожалению, такое возможно только при самых идеальных условиях. Вследствие длительной эксплуатации АКПП Фольксваген&nbsp;без замены масла и масляного фильтра, могут появится проблемы в коробке и потребоваться <strong>ремонт АКПП&nbsp;VW</strong>.</p><p>&nbsp;</p><p><strong>Ремонт АКПП Volkswagen&nbsp;в ZF center</strong></p><p>&nbsp;</p><p>Если вам необходим&nbsp;<strong>ремонт коробки&nbsp;Volkswagen,&nbsp;</strong>cпециалисты&nbsp;ZF center вам в этом помогут. Наш опыт позволяет довольно быстро выявлять возникшие неисправности и также быстро и качественно их устранять. Наша консультация вам может понадобиться в следующих случаях:</p><ul><li>Пробуксовка автомобиля во время переключения передач;</li><li>Одна из передач вдруг пропала или с трудом переключается;</li><li>АКПП издает непонятные звуки и шумы.</li></ul><p>Специалисты ZF center за 2 дня проведут <strong>ремонт коробки</strong> <strong>Фольксваген</strong>&nbsp;по фиксированной цене, используя только оригинальные запчасти и предоставят гарантию на все виды работ.</p><p>&nbsp;</p><p><strong>С наглядными примерами наших работ, а также с основными видами поломок АКПП, вы можете ознакомиться в разделе&nbsp;</strong><a href=\"http://www.zfcenter.ru/nashi-raboty\"><strong>Наши работы</strong></a></p><p><strong>С ценами на&nbsp;ремонт АКПП Фольксваген</strong>&nbsp;<strong>в Москве вы также можете ознакомиться в разделе&nbsp;</strong><a href=\"http://www.zfcenter.ru/prices.html\"><strong>ЦЕНЫ</strong></a></p><p>&nbsp;</p><p><a href=\"http://zfcenter.ru/computer-diagnostika-akpp\"><strong>Бесплатная диагностика АКПП</strong></a></p><p><a href=\"http://zfcenter.ru/zamena-masla-akpp\"><strong>Замена масла в АКПП</strong></a></p><p><a href=\"http://zfcenter.ru/remont-gydrotransformatora-akpp\"><strong>Ремонт гидротрансформатора</strong></a></p><p><a href=\"http://zfcenter.ru/remont-gydrobloka-akpp\"><strong>Ремонт гидроблока АКПП</strong></a></p>');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `path` varchar(255) CHARACTER SET utf8 NOT NULL,
  `type` enum('video','image') CHARACTER SET utf8 NOT NULL,
  `post_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `path`, `type`, `post_id`) VALUES
(18, 'media/60959b5c8cf71.jpg', 'image', 10),
(20, 'media/60959c0614b3e.jpg', 'image', 10),
(21, 'media/60959c387f632.jpg', 'image', 10),
(23, 'media/60959c6d8aed3.mp4', 'video', 10),
(27, 'media/60959f15c907e.jpg', 'image', -1),
(28, 'media/60959f3076a4b.jpg', 'image', -1),
(29, 'media/60959f5cd6ace.jpg', 'image', 14),
(30, 'media/6095a04d53410.jpg', 'image', 14),
(31, 'media/6095a04fe359d.jpg', 'image', 14),
(32, 'media/6095a05932a82.mp4', 'video', 14),
(34, 'media/6095a08890702.jfif', 'image', 15),
(35, 'media/6095a0909c741.jpg', 'image', 15),
(36, 'media/6095a18f1c95a.jpg', 'image', 16),
(37, 'media/6095a1922ec59.jfif', 'image', 16),
(38, 'media/6095a1a62820d.jpg', 'image', 16),
(39, 'media/609634dc4511f.mp4', 'video', 17),
(40, 'media/609634e580324.webp', 'image', 17),
(41, 'media/609634e83db39.webp', 'image', 17),
(42, 'media/609634eb326ab.jpg', 'image', 17),
(43, 'media/60969350e4675.mp4', 'video', 17),
(44, 'media/6096938fa80a1.mp4', 'video', 17),
(45, 'media/60969399954d0.mp4', 'video', 17);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `comment` text CHARACTER SET utf8,
  `phone` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ip` varchar(255) CHARACTER SET utf8 NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `comment`, `phone`, `ip`, `date_created`) VALUES
(2, 'Eduard', '', '', '+37444880830', '172.18.0.1', '2021-05-08 14:43:42'),
(3, 'Eduard', '', '', '+37444880830', '172.18.0.1', '2021-05-08 14:43:42'),
(4, 'Eduard', '', '', '+37444880830', '172.18.0.1', '2021-05-08 14:43:42'),
(5, 'Eduard', '', '', '+37444880830', '172.18.0.1', '2021-05-08 14:43:42'),
(6, 'Eduard', '', '', '+37444880830', '172.18.0.1', '2021-05-08 14:43:42'),
(7, 'Eduard', '', '', '+37444880830', '172.18.0.1', '2021-05-08 14:43:42'),
(8, 'Eduard', '', '', '+37444880830', '172.18.0.1', '2021-05-08 14:43:42'),
(9, 'Eduard', '', '', '+37444880830', '172.18.0.1', '2021-05-08 14:43:42'),
(10, 'Eduard', '', '', '+37444880830', '172.18.0.1', '2021-05-08 14:43:42'),
(11, 'asdasd', '', '', 'ddd', '172.18.0.1', '2021-05-08 14:46:36'),
(12, 'Eduard Hovhannisyan', 'admin@bakupromo.az', 'qweqwe qwe qwe', '3024148567', '172.18.0.1', '2021-05-08 15:05:45');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `slug` text CHARACTER SET utf8 NOT NULL,
  `body` text CHARACTER SET utf8,
  `date_created` timestamp NULL DEFAULT NULL,
  `date_updated` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `body`, `date_created`, `date_updated`) VALUES
(9, 'Eine sehr Shöne Engel sucht nach cocks', 'eine-sehr-shone-engel-sucht-nach-cocks', 'asd asd', '2021-05-07 12:08:05', '2021-05-07 12:29:09'),
(10, 'иди нхуй сука бля ♥', 'idi-nxui-suka-blya', '<p>Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад. Ричард МакКлинток, профессор латыни из колледжа Hampden-Sydney, штат Вирджиния, взял одно из самых странных слов в Lorem Ipsum, \"consectetur\", и занялся его поисками в классической латинской литературе. В результате он нашёл неоспоримый первоисточник Lorem Ipsum в разделах 1.10.32 и 1.10.33 книги \"de Finibus Bonorum et Malorum\" (\"О пределах добра и зла\"), написанной Цицероном в 45 году н.э. Этот трактат по теории этики был очень популярен в эпоху Возрождения. Первая строка Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", происходит от одной из строк в разделе 1.10.32</p><p>Классический текст Lorem Ipsum, используемый с XVI века, приведён ниже. Также даны разделы 1.10.32 и 1.10.33 \"de Finibus Bonorum et Malorum\" Цицерона и их английский перевод, сделанный H. Rackham, 1914 год.</p>', '2021-05-07 13:21:16', '2021-05-07 20:00:53'),
(13, 'Test', 'test', '<p>Test</p>', '2021-05-07 20:13:18', NULL),
(14, 'Testing', 'testing', '<p>Testt</p>', '2021-05-07 20:17:35', NULL),
(15, 'AAA', 'aaa', '<p>TTT</p>', '2021-05-07 20:18:02', '2021-05-07 20:18:18'),
(16, 'Lorem Ipsum Text Generieren', 'lorem-ipsum-text-generieren', '<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>', '2021-05-07 20:23:04', NULL),
(17, 'РЕМОНТ АКПП BMW Х5', 'remont-akpp-bmw-x5', '<p>АКПП: 6hp21<br>Год выпуска: 2008<br>Двигатель: 3.0<br>Пробег: 159231<br>Пробег: 230000</p><p>К нам на производство из Калуги приехал автомобиль&nbsp;BMW X5 2008 года выпуска. Были жалобы на толчки при переключении передач. Коробка падала в аварию.<br>Диагностика показала&nbsp;превышение коррекций по наполнению муфт А и Е.&nbsp;Дефектовка показала, чтосгорели диски сцепления Е, С, В и сильно изношены втулки.</p><p>Специалистами нашего центра был произведен капитальный ремонт АКПП-<br>отремонтирован гидроблок и гидротрансформатор,<br>заменен комплект фрикционных дисков,<br>комплект стальных дисков,<br>комплект сальников и прокладок,<br>комплект втулок,<br>сепаратор мехатроника,<br>комплект регуляторов давления,<br>демпферы,<br>фильтр-поддон.</p><p>Все материалы и запчасти оригинального производства ZF (производство Германия).</p><p>Срок ремонта — 2 дня.<br>Гарантия — 12 месяцев без ограничений по пробегу и эксплуатации.<br>Стоимость ремонта — 117000₽</p>', '2021-05-08 06:51:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'asd', 'admin@bakupromo.az', NULL, '$2y$10$kh5PmzzftPyNvwJr3DWbNuTK3qMUR4AC3qQmbha5l96awMrz1akMy', NULL, '2021-05-07 09:04:47', '2021-05-07 09:04:47'),
(2, 'Admin', 'admin@gmail.com', NULL, '$2y$10$Qr3FDf1qIhyZRXhRhp/zi.zPgFo.fiOg5CXsQSf9OiYrFGDrjFtK2', NULL, '2021-05-07 09:09:06', '2021-05-07 09:09:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`) USING BTREE;

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `post_id` (`post_id`) USING BTREE;

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`) USING BTREE;

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `users_email_unique` (`email`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
