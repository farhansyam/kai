-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 02 Des 2022 pada 16.17
-- Versi server: 5.7.33
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `forums`
--

CREATE TABLE `forums` (
  `id_forum` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `created_at` timestamp NOT NULL,
  `update_at` timestamp NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `forums`
--

INSERT INTO `forums` (`id_forum`, `id_user`, `title`, `isi`, `created_at`, `update_at`, `status`) VALUES
(2, 1, 'asdsad', 'asdasdas\r\n', '2022-11-12 14:54:23', '2022-11-12 14:54:23', 1),
(3, 1, 'Nanya DDOS', 'aspdjkpasjdpasjdpasjdpsja\\\r\nasda;sdja\r\n\r\nasdk;askjdas\r\ndasda', '2022-11-12 14:54:23', '2022-11-12 14:54:23', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@admin.com', '$2y$10$K7c5H39AtwhS8YhPGGLSuupXGeAweYbs2WeSHF6EuK96SPBjnMSLm', '2022-11-22 21:53:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `slug`, `excerpt`, `body`, `featured`, `image`, `created_at`, `updated_at`) VALUES
(13, 9, 'test', 'test', '1', 'ini isi test', 0, '16691705600000.png', '2022-11-22 19:29:20', '2022-11-22 19:29:20'),
(14, 5, 'test juga', 'test-juga', '1', 'test 123', 0, '1669170928wan 1.PNG', '2022-11-22 19:35:28', '2022-11-22 19:35:28'),
(15, 12, 'gugu', 'gugu', '1', 'gugu', 0, '1669176238ripng v6.PNG', '2022-11-22 21:03:58', '2022-11-22 21:03:58'),
(16, 5, 'coba', 'coba', '1', 'cobba', 0, '1669178984Capture.PNG', '2022-11-22 21:49:44', '2022-11-22 21:49:44'),
(19, 5, 'asdasd', 'asdasd', '1', 'cobbaasd', 0, '1669179081ripng v6.PNG', '2022-11-22 21:51:21', '2022-11-22 21:51:21'),
(20, 9, 'gimana cara seting BGP', 'gimana-cara-seting-bgp', '1', 'Help please', 0, '1669794197wan 1.PNG', '2022-11-30 00:43:18', '2022-11-30 00:43:18'),
(23, 5, 'kwu', 'kwu', '1', '1 + 1.....', 0, '1669801304wan 1.PNG', '2022-11-30 02:41:44', '2022-11-30 02:41:44'),
(24, 5, 'tes wysig', 'tes-wysig', '1', '<p><strong>farhan</strong></p>', 0, '1669812020Capture.PNG', '2022-11-30 05:40:20', '2022-11-30 05:40:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `projects`
--

INSERT INTO `projects` (`id`, `user_id`, `title`, `slug`, `excerpt`, `body`, `featured`, `image`, `created_at`, `updated_at`) VALUES
(10, 5, 'mencari bug hunter untuk web kai', 'mencari-bug-hunter-untuk-web-kai', '10.000.000', 'minat wa 082371823', 0, '1669170289ripng v6.PNG', '2022-11-22 19:24:49', '2022-11-22 19:24:49'),
(11, 12, 'testing', 'testing', '300', 'free', 0, '1669176426wan 1.PNG', '2022-11-22 21:07:06', '2022-11-22 21:07:06'),
(12, 5, 'coba', 'coba', '10000', 'cobha', 0, '1669179132wan 1.PNG', '2022-11-22 21:52:12', '2022-11-22 21:52:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(5, 'admin', 'admin@admin.com', NULL, '$2y$10$M1esMQIYVM.ddNbyw10ayupxAGXGb0HFrje0gnFcfVD4bjWLqvqmK', NULL, '2022-11-21 04:22:38', '2022-11-21 04:22:38', 3),
(7, 'M Farhan Syamsudin', 'farhan_j0304201147farhan@apps.ipb.ac.id', NULL, '0', 'J1ZrTHrxuAUSXdaGvUe8cGQ8Ftb1naDzAaAqBCmOgmLx7WPvWEZGhKcP4CmX', '2022-11-21 22:10:34', '2022-11-21 22:10:34', 1),
(8, 'Oktari', '023oktaryza@apps.ipb.ac.id', NULL, '$2y$10$7.7.HNNSO788mkShJ9SWO.eQmuPS8EEtQAitSX5GtYPqwN6Ti5OJa', NULL, '2022-11-22 00:14:57', '2022-11-22 00:14:57', 1),
(9, 'farhan', 'farhansyamsuddin3@gmail.com', NULL, '$2y$10$GtLKwl/6vkQ7KhToYInAMOvZw/iv.ijCZlS14jn1e7w0dJz9YEnv2', '5d7N7nNeXAFWSEZXKhgYVgptIiVz6mE3YcrhEgKxzemY4LFEwbwuJohGR1sg', '2022-11-22 18:12:40', '2022-11-22 19:22:28', 1),
(11, 'rafi', 'rafi@gmail.com', NULL, '$2y$10$3wqimZU7.zPr7H2tsM04bewV4EEEs3JMvykM5WwOnD8QtGKax0ysi', NULL, '2022-11-22 21:01:59', '2022-11-22 21:01:59', 1),
(12, 'Markas Koding', 'markaskoding@gmail.com', NULL, '0', 're391Gpz9G7sHbTVBd2jkBCArlgUKdSJKJpCjIu9F5lTquGfuCrfaIggdhys', '2022-11-22 21:03:13', '2022-11-22 21:03:13', 1),
(13, 'lazuardi', 'lazuardi12@gmail.com', NULL, '$2y$10$vzfDrO6LDB6NFW/QSzhcvOw2V0yOMAVFCH4fSy1c9oKwUMojqelXq', NULL, '2022-11-22 21:57:19', '2022-11-22 21:57:19', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `forums`
--
ALTER TABLE `forums`
  ADD PRIMARY KEY (`id_forum`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `forums`
--
ALTER TABLE `forums`
  MODIFY `id_forum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
