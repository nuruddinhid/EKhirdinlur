-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Okt 2023 pada 05.08
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
-- Database: `db_sdm-khirdinlur`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb-anggota`
--

CREATE TABLE `tb-anggota` (
  `anggota_id` int(11) NOT NULL,
  `anggota_name` varchar(50) NOT NULL,
  `pangkat_id` int(11) NOT NULL,
  `anggota_nrp` varchar(50) NOT NULL,
  `anggota_jabatan` varchar(50) NOT NULL,
  `satuan_id` int(11) NOT NULL,
  `anggota_alamat` text NOT NULL,
  `anggota_asabri` varchar(50) NOT NULL,
  `anggota_npwp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb-gaji`
--

CREATE TABLE `tb-gaji` (
  `gaji_id` int(11) NOT NULL,
  `pangkat_ID` int(11) NOT NULL,
  `gaji_MKG` int(11) NOT NULL,
  `gaji_GPT` int(11) NOT NULL,
  `gaji_SIUN` int(11) NOT NULL,
  `gaji_JANDA` int(11) NOT NULL,
  `gaji_y/p1` int(11) NOT NULL,
  `gaji_y/p2` int(11) NOT NULL,
  `gaji_y-p1` int(11) NOT NULL,
  `gaji_y-p2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb-pangkat`
--

CREATE TABLE `tb-pangkat` (
  `pangkat_ID` int(11) NOT NULL,
  `pangkat_name` varchar(50) NOT NULL,
  `pangkat_pa/ba` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb-pangkat`
--

INSERT INTO `tb-pangkat` (`pangkat_ID`, `pangkat_name`, `pangkat_pa/ba`) VALUES
(1, 'AKBP', 'PERWIRA'),
(2, 'KOMPOL', 'PERWIRA'),
(3, 'AKP', 'PERWIRA'),
(4, 'IPTU', 'PERWIRA'),
(5, 'IPDA', 'PERWIRA'),
(6, 'AIPTU', 'BINTARA'),
(7, 'AIPDA', 'BINTARA'),
(8, 'BRIPKA', 'BINTARA'),
(9, 'BRIGADIR', 'BINTARA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb-pengajuan`
--

CREATE TABLE `tb-pengajuan` (
  `pengajuan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb-satuan`
--

CREATE TABLE `tb-satuan` (
  `satuan_ID` int(11) NOT NULL,
  `satuan_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb-satuan`
--

INSERT INTO `tb-satuan` (`satuan_ID`, `satuan_name`) VALUES
(1, 'POLDA DIY'),
(2, 'POLRESTA SLEMAN'),
(3, 'POLRES BANTUL'),
(4, 'POLRES KULONPROGO'),
(5, 'POLRES GUNUNGKIDUL'),
(6, 'POLRESTA YOGYAKARTA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `admin_ID` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`admin_ID`, `admin_name`, `admin_password`) VALUES
(1, 'admin@gmail.com', 'admin'),
(2, 'admin1', 'admin1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `User_ID` int(11) NOT NULL,
  `User_Name` varchar(50) NOT NULL,
  `User_Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`User_ID`, `User_Name`, `User_Password`) VALUES
(1, 'nuruddinh065@gmail.com', '201837');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb-anggota`
--
ALTER TABLE `tb-anggota`
  ADD PRIMARY KEY (`anggota_id`),
  ADD UNIQUE KEY `pangkat_id` (`pangkat_id`),
  ADD UNIQUE KEY `satuan_id` (`satuan_id`);

--
-- Indeks untuk tabel `tb-gaji`
--
ALTER TABLE `tb-gaji`
  ADD PRIMARY KEY (`gaji_id`),
  ADD UNIQUE KEY `pangkat_ID` (`pangkat_ID`);

--
-- Indeks untuk tabel `tb-pangkat`
--
ALTER TABLE `tb-pangkat`
  ADD PRIMARY KEY (`pangkat_ID`);

--
-- Indeks untuk tabel `tb-satuan`
--
ALTER TABLE `tb-satuan`
  ADD PRIMARY KEY (`satuan_ID`);

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_ID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb-gaji`
--
ALTER TABLE `tb-gaji`
  MODIFY `gaji_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb-satuan`
--
ALTER TABLE `tb-satuan`
  MODIFY `satuan_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb-anggota`
--
ALTER TABLE `tb-anggota`
  ADD CONSTRAINT `tb-anggota_ibfk_1` FOREIGN KEY (`pangkat_id`) REFERENCES `tb-pangkat` (`pangkat_ID`),
  ADD CONSTRAINT `tb-anggota_ibfk_2` FOREIGN KEY (`satuan_id`) REFERENCES `tb-satuan` (`satuan_ID`);

--
-- Ketidakleluasaan untuk tabel `tb-gaji`
--
ALTER TABLE `tb-gaji`
  ADD CONSTRAINT `tb-gaji_ibfk_1` FOREIGN KEY (`pangkat_ID`) REFERENCES `tb-pangkat` (`pangkat_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
