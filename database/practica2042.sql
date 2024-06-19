-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 19 2024 г., 14:49
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `practica2042`
--

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'valeria', 'sinigur.valerika@mail.ru', 'like!!!!!', '2024-05-30 10:02:43', '2024-05-30 10:02:43'),
(2, 'valeria', 'sinigur.valerika@mail.ru', 'ывапрлдорпавывапро', '2024-06-05 07:13:37', '2024-06-05 07:13:37'),
(3, 'Василий', 'pancu.valeria@elev.cihcahul.md', 'super!!!', '2024-06-19 08:50:02', '2024-06-19 08:50:02');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `news_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `news_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, '2f6e7a3a2908338d3bb094b985842e84.png', '2024-05-28 06:01:49', '2024-05-28 06:01:49'),
(2, 2, 'f3d404ad1fabf9033f6a5cdfd97c744e.png', '2024-05-28 06:15:16', '2024-05-28 06:15:16'),
(3, 3, 'a8d06386755f15e1df142a8cf7bdd78c.png', '2024-05-28 06:16:00', '2024-05-28 06:16:00'),
(4, 4, '6b4ebf5ae7c9addf58abe130b53b0e63.png', '2024-05-28 06:17:38', '2024-05-28 06:17:38'),
(5, 5, '096ca5e7f634a38e616c6a079b2954a5.png', '2024-05-31 02:45:26', '2024-05-31 02:45:26'),
(6, 6, 'ccfe7af4eea4fa4b547df835cbfc91f0.png', '2024-05-31 02:47:07', '2024-05-31 02:47:07');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(61, '2014_10_12_000000_create_users_table', 1),
(62, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(63, '2014_10_12_100000_create_password_resets_table', 1),
(64, '2019_08_19_000000_create_failed_jobs_table', 1),
(65, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(66, '2024_04_26_081402_create_news_table', 1),
(67, '2024_04_26_175903_create_images_table', 1),
(68, '2024_05_28_061535_create_contacts_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Trump Lays Plans to Reverse Obama’s Climate Change Legacy', 'It doesn\'t end here! Once you are accepted to your desired university,                          we will provide you with continuous support during your studies.                          From academic counseling and language support to social and professional integration,                          we are here to support you at every stage of your study abroad journey.', 1, '2024-05-28 06:01:49', '2024-05-28 06:01:49'),
(2, 'Come On In. The Water’s Fine (Mostly).', 'Our dedicated team is available to provide support and additional information about our study abroad programs and how we can help you achieve your academic and professional goals.', 1, '2024-05-28 06:15:15', '2024-05-28 06:15:15'),
(3, 'How a Little Bit of Hydra Regrows a Whole Animal', 'Our dedicated team is available to provide support and additional information about our study abroad programs and how we can help you achieve your academic and professional goals.Our dedicated team is available to provide support and additional information about our study abroad programs and how we can help you achieve your academic and professional goals.Our dedicated team is available to provide support and additional information about our study abroad programs and how we can help you achieve your academic and professional goals.', 1, '2024-05-28 06:15:59', '2024-05-28 06:15:59'),
(4, 'How a Little Bit of Hydra', 'How a Little Bit of Hydra Regrows a Whole AnimalHow a Little Bit of Hydra Regrows a Whole AnimalHow a Little Bit of Hydra Regrows a Whole AnimalHow a Little Bit of Hydra Regrows a Whole AnimalHow a Little Bit of Hydra Regrows a Whole AnimalHow a Little Bit of Hydra Regrows a Whole AnimalHow a Little Bit of Hydra Regrows a Whole Animal', 1, '2024-05-28 06:17:38', '2024-05-28 06:17:38'),
(5, 'We will identify the right educational institutions for your interests and goals', 'We offer intensive preparation courses for admission exams, including TOEFL, IELTS, SAT, and GRE. Our team of experienced instructors will help you strengthen your linguistic and academic skills to ensure success in the admission process.', 1, '2024-05-31 02:45:25', '2024-05-31 02:45:25'),
(6, 'We will identify the right educational institutions for your interests and goals', 'We offer intensive preparation courses for admission exams, including TOEFL, IELTS, SAT, and GRE. Our team of experienced instructors will help you strengthen your linguistic and academic skills to ensure success in the admission process.We offer intensive preparation courses for admission exams, including TOEFL, IELTS, SAT, and GRE. Our team of experienced instructors will help you strengthen your linguistic and academic skills to ensure success in the admission process.We offer intensive preparation courses for admission exams, including TOEFL, IELTS, SAT, and GRE. Our team of experienced instructors will help you strengthen your linguistic and academic skills to ensure success in the admission process.', 2, '2024-05-31 02:47:07', '2024-05-31 02:47:07');

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'valeria', 'sinigur.valerika@mail.ru', NULL, '$2y$12$9RyxrqEp.qo7sfhAG6mWLeGG2vKuLM.R8kJpJX0PF9JTTYli9iLUO', NULL, '2024-05-28 06:01:30', '2024-05-28 06:01:30'),
(2, 'Василий', 'pancu.valeria@elev.cihcahul.md', NULL, '$2y$12$/C5VQXJzudKwFnpzni50x./PN/y67GMsKx1Txn8zvJ5ju2ThdtUve', NULL, '2024-05-31 02:46:36', '2024-05-31 02:46:36'),
(3, 'valeria', 'admin@webdamn.com', NULL, '$2y$12$wPEw2XYU3HtSL3/jzHbqeOB22g/e0a4473BHTWBz/gXj7FPfFlZJW', NULL, '2024-06-05 07:14:14', '2024-06-05 07:14:14'),
(4, 'valeria', 'valerica.sinigur@elev.cihcahulmd', NULL, '$2y$12$FoissXeKFdBCiqGqt3XknujtCX2kUUXmctyUcbg0RBTRObyWFZk9.', NULL, '2024-06-10 05:34:24', '2024-06-10 05:34:24'),
(5, 'valeria', 'victor.tornea@profesor.cihcahul.md', NULL, '$2y$12$PrMSe26sXBZiiPpP9E.Va.l1lVsHOFwz5VnJ48SHYRnnnXe0HtP2m', NULL, '2024-06-17 02:42:01', '2024-06-17 02:42:01');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_news_id_foreign` (`news_id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_user_id_foreign` (`user_id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
