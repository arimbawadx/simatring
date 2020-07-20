-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Nov 2019 pada 14.49
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_simatring2`
--

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
(1, '2019_11_14_120211_create_orders_table', 1),
(2, '2019_11_14_120305_create_users_table', 1),
(3, '2019_11_14_120329_create_produks_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `produk_id` int(11) NOT NULL,
  `jumlah_order` int(11) NOT NULL,
  `jumlah_pembayaran` int(11) NOT NULL,
  `status_order` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produks`
--

CREATE TABLE `produks` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profil_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `produks`
--

INSERT INTO `produks` (`id`, `nama_produk`, `profil_produk`, `deskripsi_produk`, `harga_produk`, `created_at`, `updated_at`) VALUES
(20, 'Paket A', 'paket1.png', 'Nasi Goreng, ikan tuna sambal terasi + jeruk nipis, sambel leak, air mineral', 15000, '2019-11-25 07:04:31', '2019-11-25 07:12:53'),
(21, 'Paket B', 'paket2.png', 'Nasi Kuning, Sambal Leak, Ikan Teri Goreng, Sayur, Abon Ayam, Air Mineral', 20000, '2019-11-25 07:08:13', '2019-11-25 07:13:05'),
(22, 'Paket C', 'paket3.png', 'Nasi Putih, Tempe Manis, Sambel Leak, Cumi Sambel Terasi, Air Mineral', 25000, '2019-11-25 07:09:38', '2019-11-25 07:13:16'),
(23, 'Paket D', 'paket4.png', 'Nasi Putih, Kentang goreng, Ikan Tuna Sambal Goreng, Sambal Basa Leak', 30000, '2019-11-25 07:12:17', '2019-11-25 07:13:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_panggilan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_desa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_kabupaten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_provinsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `remember_token`, `status_user`, `nama_lengkap`, `nama_panggilan`, `profil`, `no_telepon`, `jenis_kelamin`, `alamat_desa`, `alamat_kabupaten`, `alamat_provinsi`, `created_at`, `updated_at`) VALUES
(12, 'arimbawadx', '$2y$10$T8CuQctt.2NWNC5WEllRW.hYmn3qZayy8Rz0NB2SX6FS6XDGSghsS', 'go2BHDOjewfFj94wTsu8hStTdM8VNwIhdxEXNbhiysul0ApyURPHgO5dmXkA', 'customer', 'I Made Yoga Arimbawa', 'Dekga', 'profil.jpg', '085847801933', 'laki-laki', 'banjarangkan', 'Klungkung', 'Bali', '2019-11-18 06:48:11', '2019-11-24 10:44:27'),
(13, 'admin', '$2y$10$b5kmQfrIPiOfP4MWpOu/WeNwe6bJVlYUKCEab.1veENRbWa8JOOua', 'oWWbVd1H3KqQO2OJo9b5Ztpy5ya48Ukg833EYeyI9W5qK7zCSQrtp65u5aha', 'admin', 'admin SI-MATRING', 'admin', 'noprofil.jpg', '-', '-', '-', '-', '-', '2019-11-18 06:49:53', '2019-11-18 06:49:53');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `produks`
--
ALTER TABLE `produks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
