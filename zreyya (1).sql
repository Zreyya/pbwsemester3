-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jan 2026 pada 14.38
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zreyya`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `judul` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `isi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `gambar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `article`
--

INSERT INTO `article` (`id`, `judul`, `isi`, `gambar`, `tanggal`, `username`) VALUES
(1, 'Belajar HTML', 'Langkah-langkah membuat dokumen HTML:\r\n\r\n1. Buka editor teks (VS Code/Sublime/Notepad).\r\n2. Tuliskan tag dasar <code>&lt;!DOCTYPE html&gt;</code>.\r\n3. Tambahkan tag <code>&lt;html&gt;</code> dan <code>&lt;body&gt;</code>.', 'html.png', '2025-12-06 20:00:24', 'Zreyya'),
(3, 'Belajar CSS', 'Langkah-langkah membuat dokumen CSS:\r\n\r\n1. Buka editor teks (VS Code/Sublime/Notepad).\r\n2. Tuliskan selektor dan properti CSS.\r\n3. Simpan file dengan ekstensi .css.', 'css.png', '2025-12-06 20:01:11', 'Zreyya'),
(4, 'JavaScript', 'Langkah-langkah membuat dokumen JS:\r\n\r\n1. Buka editor teks (VS Code/Sublime/Notepad).\r\n2. Tuliskan kode JavaScript di dalam tag <code>&lt;script&gt;</code>.\r\n3. Simpan file dengan ekstensi .js atau di dalam file HTML.', 'js.png', '2025-12-06 20:01:50', 'Zreyya'),
(6, 'asdsa', 'awfaw', '', '2025-12-18 16:15:53', 'admin'),
(7, 'asf', 'fasfsafwa', '', '2025-12-18 16:15:58', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `judul` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `gambar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id`, `judul`, `gambar`, `tanggal`, `username`) VALUES
(0, 'test', '20260112183444.jpg', '2026-01-12 18:34:44', 'admin'),
(0, '2', '20260112183648.png', '2026-01-12 18:36:48', 'admin'),
(0, '3', '20260112183712.jpg', '2026-01-12 18:37:12', 'admin'),
(0, '4', '20260112183755.jpg', '2026-01-12 18:37:55', 'admin'),
(0, '5', '20260112184021.jpeg', '2026-01-12 18:40:21', 'admin'),
(0, '6', '20260112184051.jpg', '2026-01-12 18:40:51', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `foto`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', ''),
(2, 'danny', '21232f297a57a5a743894a0e4a801fc3', ''),
(3, 'user3', 'e10adc3949ba59abbe56e057f20f883e', '20260112185740.jpg'),
(4, 'user4', 'e10adc3949ba59abbe56e057f20f883e', ''),
(5, 'user5', 'e10adc3949ba59abbe56e057f20f883e', ''),
(6, 'user6', 'e10adc3949ba59abbe56e057f20f883e', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
