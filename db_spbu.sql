-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jan 2024 pada 08.34
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spbu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2023_10_06_085155_create_sekolah_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `spbu`
--

CREATE TABLE `spbu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namaspbu` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jam_operasional` varchar(100) NOT NULL,
  `jenis_bahan_bakar` varchar(255) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `fasilitas` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `spbu`
--

INSERT INTO `spbu` (`id`, `namaspbu`, `alamat`, `jam_operasional`, `jenis_bahan_bakar`, `telepon`, `fasilitas`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(12389, 'SPBU Pertamina Sukagalih', 'Jl. Surya Sumantri, Sukagalih, Sukajadi, Sukawarna, Bandung, Sukawarna, Kec. Sukajadi, Kota Bandung', 'Buka 24 Jam', 'Pertamax Turbo, Pertamax, Pertalite, Pertamina Dex', '(021) 1500000', 'Pengisian BBM, Pengisian Angin, Musholla, Toilet, Minimarket', '-6.8828203612635175', '107.58127659559251', '2024-01-04 09:04:53', '2024-01-04 11:41:32'),
(12390, 'SPBU Pertamina 34.40135', 'Jl. Surya Sumantri No.36, Sukagalih, Kec. Sukajadi, Kota Bandung, Jawa Barat 40164', 'Buka 24 Jam', 'Pertamax Turbo, Pertamax, Pertalite, Pertamina Dex, Biosolar', '0222005261', 'Pengisian BBM, Pengisian Angin, Musholla, Toilet, Minimarket, ATM, Bright Gas', '-6.889111054127061', '107.58160747116415', '2024-01-04 09:09:07', '2024-01-04 11:41:40'),
(12391, 'SPBU Pertamina 34.40123', 'Jl. Dr. Djunjunan No.118, Sukagalih, Kec. Sukajadi, Kota Bandung, Jawa Barat 40162', 'Buka 24 Jam', 'Pertamax Turbo, Pertamax, Pertalite, Pertamina Dex, Biosolar', '0222060170', 'Pengisian BBM, Pengisian Angin, Musholla, Toilet, Minimarket, ATM', '-6.89523927547781', '107.58913546800615', '2024-01-04 09:12:20', '2024-01-04 11:42:06'),
(12392, 'SPBU Pertamina 34.40134 Pasirkaliki', 'Jl. Pasir Kaliki No.223, Sukabungah, Kec. Sukajadi, Kota Bandung, Jawa Barat 40162', 'Buka 24 Jam', 'Pertamax Turbo, Pertamax, Pertalite, Pertamina Dex, Biosolar', '0222043485', 'Pengisian BBM, Pengisian Angin, Musholla, Toilet, Minimarket, ATM, Bright Gas', '-6.89806199310116', '107.5972893598414', '2024-01-04 09:16:40', '2024-01-04 11:42:16'),
(12393, 'SPBU Pertamina Setiabudi', 'Jl. Dr. Setiabudi No.47, Pasteur, Kec. Sukajadi, Kota Bandung, Jawa Barat 40141', 'Buka 24 Jam', 'Pertamax Turbo, Pertamax, Pertalite, Pertamina Dex, Biosolar', '0211500000', 'Pengisian BBM, Pengisian Angin, Musholla, Toilet, Minimarket, ATM', '-6.88050853308089', '107.59887186316774', '2024-01-04 09:18:06', '2024-01-04 11:42:25'),
(12394, 'SPBU Pertamina 34.40116', 'Jl. DR. Djunjunan Dalam No.139, Pajajaran, Kec. Cicendo, Kota Bandung, Jawa Barat 40173', 'Buka 24 Jam', 'Pertamax Turbo, Pertamax, Pertalite, Pertamina Dex, Biosolar', '0226038282', 'Pengisian BBM, Pengisian Angin, Musholla, Toilet, Minimarket, ATM, Bright Gas', '-6.893599600004197', '107.58594416442394', '2024-01-04 09:19:59', '2024-01-04 11:42:35'),
(12395, 'SPBU Pertamina 34.40116', 'Jl. DR. Djunjunan Dalam No.139, Pajajaran, Kec. Cicendo, Kota Bandung, Jawa Barat 40173', 'Buka 24 Jam', 'Pertamax Turbo, Pertamax, Pertalite, Pertamina Dex, Biosolar', '0226038282', 'Pengisian BBM, Pengisian Angin, Musholla, Toilet, Minimarket, ATM', '-6.893599593105522', '107.58593343100527', '2024-01-04 09:22:06', '2024-01-04 11:42:44'),
(12396, 'SPBU Pertamina 34-40111', 'Jl. Cipaganti, Pasteur, Kec. Sukajadi, Kota Bandung, Jawa Barat 40161', 'Buka 24 Jam', 'Pertamax Turbo, Pertamax, Pertalite, Pertamina Dex, Biosolar', '0211500000', 'Pengisian BBM, Pengisian Angin, Musholla, Toilet,  ATM, Bright Gas', '-6.887584838883682', '107.60208489053026', '2024-01-04 09:24:12', '2024-01-04 11:42:54'),
(12397, 'SPBU Pertamina Cihampelas', '3FGH+2RH, Cihampelas, Kec. Cihampelas, Kabupaten Bandung Barat, Jawa Barat 40562', 'Buka 24 Jam', 'Pertamax Turbo, Pertamax, Pertalite, Pertamina Dex, Biosolar', '(022) 2039221', 'Pengisian BBM, Pengisian Angin, Musholla, Toilet, Bright Gas', '-6.923906044290994', '107.47944333895533', '2024-01-04 09:27:43', '2024-01-04 11:43:09'),
(12398, 'SPBU Pertamina 34.40115 Abd. Rahman Saleh', '3HVP+59P, Jl. Abdul Rahman Saleh, Husen Sastranegara, Kec. Cicendo, Kota, Bandung City, West Java 40174', 'Buka 24 Jam', 'Pertamax Turbo, Pertamax, Pertalite, Pertamina Dex, Biosolar', '-', 'Pengisian BBM, Pengisian Angin, Musholla, Toilet, Minimarket, ATM, Bright Gas', '-6.907037112862674', '107.58594263190727', '2024-01-04 09:29:49', '2024-01-04 11:43:19'),
(12399, 'SPBU Pertamina 34.402.27, Pasir Koja', 'Jl. Terusan Pasirkoja No.351, Babakan, Kec. Babakan Ciparay, Kota Bandung, Jawa Barat 40222', 'Buka 24 Jam', 'Pertamax Turbo, Pertamax, Pertalite, Pertamina Dex, Biosolar', '0226008339', 'Pengisian BBM, Pengisian Angin, Musholla, Toilet, Minimarket, ATM', '-6.929404943538198', '107.57947077333334', '2024-01-04 09:32:03', '2024-01-04 11:43:29'),
(12400, 'SPBU Pertamina Cibuntu 34-40237', 'Jl. Soekarno Hatta No.15, Cibuntu, Kec. Bandung Kulon, Kota Bandung, Jawa Barat 40212', 'Buka 24 Jam', 'Pertamax Turbo, Pertamax, Pertalite, Pertamina Dex, Biosolar', '0226034319', 'Pengisian BBM, Pengisian Angin, Musholla, Toilet, Minimarket, ATM', '-6.919482173288567', '107.57455295697764', '2024-01-04 09:33:33', '2024-01-04 11:43:40'),
(12401, 'SPBU Pertamina 34-40133 Martadinata', 'Jl. L. L. R.E. Martadinata No.79, Citarum, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40115', 'Buka 24 Jam', 'Pertamax Turbo, Pertamax, Pertalite, Pertamina Dex, Biosolar', '0224237918', 'Pengisian BBM, Pengisian Angin, Musholla, Toilet, Minimarket, ATM', '-6.9058142440933645', '107.61853115798866', '2024-01-04 09:35:49', '2024-01-04 11:43:55'),
(12402, 'SPBU Pertamina 34-40127', 'Jl. Tamblong No.3, Braga, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40111', 'Buka 24 Jam', 'Pertamax Turbo, Pertamax, Pertalite, Pertamina Dex, Biosolar', '0224238240', 'Pengisian BBM, Pengisian Angin, Musholla, Toilet, Minimarket, ATM', '-6.919820839662597', '107.61203255984164', '2024-01-04 09:37:52', '2024-01-04 11:44:04'),
(12408, 'SPBU Pasteur', '3M7V+2HM, Jl. Soekarno Hatta, Babakan Penghulu, Kec. Cinambo, Kota Bandung, Jawa Barat 40613', 'Buka 24 Jam', 'Pertamax Turbo, Pertamax, Pertalite, Pertamina Dex, Biosolar', '0211500000', 'Pengisian BBM, Pengisian Angin, Musholla, Toilet, Minimarket, ATM', '-6.937423193635899', '107.69398006837557', '2024-01-05 00:19:38', '2024-01-05 00:19:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Al Novianti', 'ramadhanialnovianti@gmail.com', NULL, '$2y$10$THChdr61nEthlcdefqzwWe.WDD/48SVoUoGvxrMXe5Nomd6ov2QNe', NULL, '2023-10-06 01:49:49', '2023-10-06 01:49:49'),
(2, 'Al Novi', 'ramadhani@gmail.com', NULL, '$2y$10$7ykO2Xn7N3PawA6PhOaTgOuEEeCDQHSPl4HtcB1M5RypFCJo9azCi', NULL, '2023-10-19 23:48:21', '2023-10-19 23:48:21'),
(3, 'Pia', 'pia@gmail.com', NULL, '$2y$10$oyg0uOZXcJZaYkXUZ6DbneM/hH.kh1ebUuzHm5mCdLtGYL2pcnskW', NULL, '2023-11-15 03:16:51', '2023-11-15 03:16:51'),
(4, 'Rama', 'rama@gmail.com', NULL, '$2y$10$rWR9UGyMxDg8omKt9aX6ruexiD0HtM1Le.x6z/1SVuqsnT9vLGPGe', NULL, '2023-11-23 21:36:33', '2023-11-23 21:36:33');

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
-- Indeks untuk tabel `spbu`
--
ALTER TABLE `spbu`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `spbu`
--
ALTER TABLE `spbu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12409;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
