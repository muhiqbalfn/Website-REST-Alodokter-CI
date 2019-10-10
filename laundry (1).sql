-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23 Okt 2018 pada 11.21
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'user'),
(3, 'courier');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perfume`
--

CREATE TABLE `perfume` (
  `perfume_id` int(11) NOT NULL,
  `perfume_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perfume_costperkilo` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `perfume`
--

INSERT INTO `perfume` (`perfume_id`, `perfume_name`, `perfume_costperkilo`) VALUES
(1, 'White Lily', 1000),
(2, 'Moolto Blue', 2000),
(3, 'Sweet Snappy', 2500),
(4, 'Raspberry', 1000),
(6, 'Raspberry', 1000),
(7, 'Strawberry', 4500),
(8, 'Bluberry', 3000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fk_users_customer` int(11) NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_perfume` int(11) NOT NULL,
  `fk_typelaundry` int(11) NOT NULL,
  `fk_users_courier` int(11) DEFAULT NULL,
  `weight_item` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `date`, `fk_users_customer`, `address`, `fk_perfume`, `fk_typelaundry`, `fk_users_courier`, `weight_item`, `status`) VALUES
(22, '2018-10-11 13:31:11', 10, 'Banjar', 1, 1, 12, 2, 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `typelaundry`
--

CREATE TABLE `typelaundry` (
  `typelaundry_id` int(11) NOT NULL,
  `typelaundry_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `typelaundry_costperkilo` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `typelaundry`
--

INSERT INTO `typelaundry` (`typelaundry_id`, `typelaundry_name`, `typelaundry_costperkilo`) VALUES
(1, 'cuci kering', 3000),
(2, 'cuci basah', 1500),
(3, 'cuci setrika', 4000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_id_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `address`, `telp`, `username`, `password`, `image`, `fk_id_level`) VALUES
(10, 'Fanina', 'Meidina', 'Malang', '083148442563', 'nina', 'f2ceea1536ac1b8fed1a167a9c8bf04d', 'download.jpg', 2),
(11, 'kurir', 'kurir', 'Lamongan', '089765455321', 'kurir', 'bb31e9f1f03ad601eb8fb53e4f663039', 'sip.PNG', 3),
(12, 'admin', 'admin', 'Bojonegoro', '0987655432', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Quran.PNG', 1),
(13, 'Hoga', 'Septa', 'Kalimantan', '089765122321', 'hoga', '6dadaae3513e6c2d286102556b402245', 'Prayer.PNG', 2),
(14, 'adhnasda', '121', 'ui2u3', '87234', '1231', '312fd2f3cabafc9417c35fd00efdaa5d', 'Card8.PNG', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perfume`
--
ALTER TABLE `perfume`
  ADD PRIMARY KEY (`perfume_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_users_customer` (`fk_users_customer`),
  ADD KEY `fk_perfume` (`fk_perfume`),
  ADD KEY `fk_typelaundry` (`fk_typelaundry`),
  ADD KEY `fk_users_courier` (`fk_users_courier`);

--
-- Indexes for table `typelaundry`
--
ALTER TABLE `typelaundry`
  ADD PRIMARY KEY (`typelaundry_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_level` (`fk_id_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `perfume`
--
ALTER TABLE `perfume`
  MODIFY `perfume_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `typelaundry`
--
ALTER TABLE `typelaundry`
  MODIFY `typelaundry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`fk_perfume`) REFERENCES `perfume` (`perfume_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`fk_users_customer`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`fk_users_courier`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_4` FOREIGN KEY (`fk_typelaundry`) REFERENCES `typelaundry` (`typelaundry_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`fk_id_level`) REFERENCES `level` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
