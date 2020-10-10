-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Okt 2020 pada 03.23
-- Versi server: 10.1.39-MariaDB
-- Versi PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pegawai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gaji`
--

CREATE TABLE `gaji` (
  `id` int(10) UNSIGNED NOT NULL,
  `jumlah_gaji` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `gaji`
--

INSERT INTO `gaji` (`id`, `jumlah_gaji`, `created_at`, `updated_at`) VALUES
(1, 'Rp 2.500.000,00', NULL, '2020-08-04 18:02:14'),
(2, 'Rp 3.000.000,00', NULL, NULL),
(3, 'Rp 4.000.000,00', NULL, NULL),
(4, 'Rp 5.000.000,00', '2020-07-27 02:06:17', '2020-07-27 02:06:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gaji_pegawai`
--

CREATE TABLE `gaji_pegawai` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_gaji` int(10) UNSIGNED NOT NULL,
  `id_pegawai` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `gaji_pegawai`
--

INSERT INTO `gaji_pegawai` (`id`, `id_gaji`, `id_pegawai`, `created_at`, `updated_at`) VALUES
(11, 1, 7, '2020-07-24 19:53:26', '2020-07-24 19:53:26'),
(12, 3, 8, '2020-07-24 20:52:54', '2020-07-24 20:52:54'),
(13, 1, 9, '2020-07-24 21:12:01', '2020-07-24 21:12:01'),
(14, 2, 10, '2020-07-24 21:20:14', '2020-07-24 21:20:14'),
(15, 1, 11, '2020-07-26 22:40:23', '2020-07-26 22:40:23'),
(19, 1, 2, '2020-07-26 22:59:55', '2020-07-26 22:59:55'),
(20, 1, 11, '2020-08-02 18:54:28', '2020-08-02 18:54:28'),
(21, 2, 11, '2020-08-02 18:54:28', '2020-08-02 18:54:28'),
(24, 1, 6, '2020-08-02 19:39:34', '2020-08-02 19:39:34'),
(25, 1, 1, '2020-08-04 17:35:55', '2020-08-04 17:35:55'),
(28, 2, 14, '2020-08-04 17:53:58', '2020-08-04 17:53:58'),
(30, 1, 13, '2020-08-20 23:37:50', '2020-08-20 23:37:50'),
(31, 1, 14, '2020-08-24 22:33:18', '2020-08-24 22:33:18'),
(32, 1, 13, '2020-08-25 21:12:50', '2020-08-25 21:12:50'),
(33, 1, 13, '2020-08-31 18:58:34', '2020-08-31 18:58:34'),
(35, 1, 14, '2020-08-31 19:03:31', '2020-08-31 19:03:31'),
(47, 3, 19, '2020-09-21 17:28:23', '2020-09-21 17:28:23'),
(48, 3, 3, '2020-09-21 18:12:21', '2020-09-21 18:12:21'),
(49, 1, 5, '2020-09-21 18:21:56', '2020-09-21 18:21:56'),
(51, 3, 17, '2020-09-21 18:22:16', '2020-09-21 18:22:16'),
(52, 3, 18, '2020-09-21 18:22:22', '2020-09-21 18:22:22'),
(53, 3, 12, '2020-09-21 18:22:28', '2020-09-21 18:22:28'),
(54, 4, 15, '2020-09-21 18:26:07', '2020-09-21 18:26:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_jabatan` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `jabatan_gaji` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id`, `nama_jabatan`, `jabatan_gaji`, `created_at`, `updated_at`) VALUES
(1, 'Operator', 'Rp 2.700.000,00', NULL, '2020-09-23 18:29:44'),
(2, 'Staff', 'Rp 3.100.000,00', NULL, '2020-09-23 17:37:15'),
(3, 'Supervisor', 'Rp 4.100.000,00', NULL, '2020-09-21 19:08:25'),
(5, 'Manager', 'Rp 5.000.000,00', '2020-09-17 20:49:16', '2020-09-21 17:41:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2020_07_16_073600_create_table_pegawai', 1),
(7, '2020_07_22_032237_create_table_jabatan', 2),
(9, '2020_07_22_050827_create_table_gaji', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nip` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_jabatan` int(10) UNSIGNED NOT NULL,
  `foto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `nip`, `nama`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `id_jabatan`, `foto`, `created_at`, `updated_at`) VALUES
(3, '0003', 'sisri', '1998-12-04', 'P', 'Blora', 3, '', '2020-07-21 21:04:47', '2020-08-02 19:24:31'),
(5, '0005', 'rafly', '2000-05-05', 'L', 'Ngawi', 1, '', '2020-07-21 22:52:54', '2020-08-02 19:39:09'),
(12, '0908', 'sartika ayu', '2000-12-03', 'P', 'Kaliurang Kanan', 3, '20200803100322.jpg', '2020-08-03 03:03:22', '2020-08-20 23:28:34'),
(15, '0919', 'dodik', '1999-12-04', 'L', 'Wonosari', 5, '20200901020544.png', '2020-08-31 19:05:44', '2020-09-21 18:25:30'),
(16, '0010', 'joki', '1998-03-01', 'L', 'Jogja', 2, '20200901020845.png', '2020-08-31 19:08:45', '2020-09-22 18:15:32'),
(17, '0901', 'rifqi', '2002-12-03', 'P', 'Magelang', 2, '20200901021001.jpg', '2020-08-31 19:10:01', '2020-09-21 18:25:47'),
(18, '0902', 'elang', '2000-04-28', 'L', 'Semarang', 3, '20200915094502.jpg', '2020-09-15 02:45:02', '2020-09-15 02:45:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `telepon`
--

CREATE TABLE `telepon` (
  `id_pegawai` int(10) UNSIGNED NOT NULL,
  `nomor_telepon` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `telepon`
--

INSERT INTO `telepon` (`id_pegawai`, `nomor_telepon`, `created_at`, `updated_at`) VALUES
(7, '08111111111', NULL, '2020-07-24 19:53:42'),
(8, '82222222', NULL, NULL),
(9, '83333333', NULL, NULL),
(23, '1234567891', '2020-07-19 20:11:01', '2020-07-21 18:59:52'),
(24, '123456789', '2020-07-19 20:11:31', '2020-07-19 20:11:31'),
(25, '815654567', '2020-07-19 20:15:53', '2020-07-19 20:15:53'),
(26, '897864561', '2020-07-19 20:17:07', '2020-07-19 20:17:07'),
(27, '2147483647', '2020-07-19 20:18:00', '2020-07-19 20:18:00'),
(28, '2147483647', '2020-07-19 20:54:49', '2020-07-19 20:54:49'),
(12, '081726565387', '2020-07-21 19:00:02', '2020-07-21 19:37:51'),
(19, '082243561789', '2020-07-21 19:32:27', '2020-07-21 19:33:33'),
(20, '098876543134', '2020-07-21 19:42:10', '2020-07-21 19:42:10'),
(1, '082243571882', '2020-07-21 21:03:53', '2020-08-04 17:35:54'),
(2, '087654123412', '2020-07-21 21:04:25', '2020-07-21 21:04:25'),
(3, '081765434123', '2020-07-21 21:04:47', '2020-07-21 21:04:47'),
(4, '081228787580', '2020-07-21 22:06:41', '2020-07-21 22:06:41'),
(5, '081976541871', '2020-07-21 22:52:54', '2020-07-21 22:52:54'),
(6, '081976541875', '2020-07-21 22:54:48', '2020-07-24 19:43:51'),
(6, '081976541875', '2020-07-24 19:43:28', '2020-07-24 19:43:51'),
(7, '08111111111', '2020-07-24 19:53:26', '2020-07-24 19:53:42'),
(8, '082235128165', '2020-07-24 20:52:54', '2020-07-24 20:52:54'),
(9, '09121271711', '2020-07-24 21:12:01', '2020-07-24 21:12:01'),
(10, '081123455172', '2020-07-24 21:20:14', '2020-07-24 21:20:14'),
(11, '09165101917', '2020-07-26 22:40:23', '2020-07-26 22:40:23'),
(12, '083091817161', '2020-07-26 22:44:57', '2020-07-26 22:44:57'),
(11, '08127281812', '2020-08-02 18:54:28', '2020-08-02 18:54:28'),
(12, '09187161212', '2020-08-03 03:03:22', '2020-08-03 03:03:22'),
(13, '08165178101', '2020-08-04 17:43:51', '2020-08-04 17:43:51'),
(14, '0818716185', '2020-08-04 17:50:49', '2020-08-04 17:53:58'),
(13, '082121761512', '2020-08-13 20:17:29', '2020-08-13 20:17:29'),
(13, '08112111718', '2020-08-20 23:37:50', '2020-08-20 23:37:50'),
(14, '08112131412', '2020-08-24 22:33:18', '2020-08-24 22:33:18'),
(13, '081171712112', '2020-08-25 21:12:50', '2020-08-25 21:12:50'),
(13, '08129121212', '2020-08-31 18:58:34', '2020-08-31 18:58:34'),
(14, '08121212131', '2020-08-31 19:03:31', '2020-08-31 19:03:31'),
(15, '08223718191', '2020-08-31 19:05:44', '2020-08-31 19:05:44'),
(16, '081121181912', '2020-08-31 19:08:45', '2020-08-31 19:08:45'),
(17, '08112119121', '2020-08-31 19:10:01', '2020-08-31 19:10:01'),
(18, '08121212134', '2020-09-15 02:45:02', '2020-09-15 02:45:02'),
(19, '0812121213', '2020-09-21 17:28:23', '2020-09-21 17:28:23'),
(20, '08121281912', '2020-09-21 22:04:07', '2020-09-21 22:04:07'),
(21, '08121212132', '2020-09-21 22:09:17', '2020-09-21 22:09:17'),
(22, '081228787589', '2020-09-21 22:10:48', '2020-09-21 22:10:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `level` enum('admin','operator') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `level`) VALUES
(1, 'risnado', 'risna@polines.ac.id', NULL, '$2y$10$KE9WDx5kEJpFFLi0K9eBQeHUjyZZWNtJw6IXu//AGSuYr/cU.WUOO', NULL, '2020-07-27 17:55:13', '2020-07-27 20:02:35', 'admin'),
(2, 'surti', 'surti@gmail.com', NULL, '$2y$10$SDjGlgDs15ZdtIP5u3JT3eYD6ScC7iukz9p5lTO1QdkQRapfcI2FK', NULL, '2020-07-28 17:13:13', '2020-07-28 17:13:13', 'operator');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gaji`
--
ALTER TABLE `gaji`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gaji_pegawai`
--
ALTER TABLE `gaji_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pegawai_nip_unique` (`nip`) USING BTREE,
  ADD KEY `pegawai_id_jabatan_foreign` (`id_jabatan`) USING BTREE;

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
-- AUTO_INCREMENT untuk tabel `gaji`
--
ALTER TABLE `gaji`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `gaji_pegawai`
--
ALTER TABLE `gaji_pegawai`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `mahasiswa_id_kelas_foreign` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
