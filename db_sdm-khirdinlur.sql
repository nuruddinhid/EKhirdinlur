-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Des 2023 pada 05.34
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
-- Struktur dari tabel `tb_gaji`
--

CREATE TABLE `tb_gaji` (
  `gaji_id` int(11) NOT NULL,
  `pangkat_ID` int(11) NOT NULL,
  `gaji_MKG` int(11) NOT NULL,
  `gaji_GPT` int(11) NOT NULL,
  `gaji_SIUN` int(11) NOT NULL,
  `gaji_JANDA` int(11) NOT NULL,
  `gaji_yorp1` int(11) NOT NULL,
  `gaji_yorp2` int(11) NOT NULL,
  `gaji_ynp1` int(11) NOT NULL,
  `gaji_ynp2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_gaji`
--

INSERT INTO `tb_gaji` (`gaji_id`, `pangkat_ID`, `gaji_MKG`, `gaji_GPT`, `gaji_SIUN`, `gaji_JANDA`, `gaji_yorp1`, `gaji_yorp2`, `gaji_ynp1`, `gaji_ynp2`) VALUES
(8, 1, 32, 5084300, 0, 1778000, 511300, 1021800, 1150200, 1533600),
(13, 1, 30, 4928900, 0, 3728900, 493700, 994900, 1110600, 1533600);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pangkat`
--

CREATE TABLE `tb_pangkat` (
  `pangkat_ID` int(11) NOT NULL,
  `pangkat_name` varchar(50) NOT NULL,
  `pangkat_pa/ba` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pangkat`
--

INSERT INTO `tb_pangkat` (`pangkat_ID`, `pangkat_name`, `pangkat_pa/ba`) VALUES
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
-- Struktur dari tabel `tb_pengajuan`
--

CREATE TABLE `tb_pengajuan` (
  `pengajuan_id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pangkat` varchar(100) NOT NULL,
  `paba` varchar(100) NOT NULL,
  `nrp` varchar(100) NOT NULL,
  `satwil` varchar(100) NOT NULL,
  `satker` varchar(100) NOT NULL,
  `asabri` varchar(100) NOT NULL,
  `npwp` varchar(100) NOT NULL,
  `katma` varchar(100) NOT NULL,
  `tgllahir` date NOT NULL,
  `alamat` text NOT NULL,
  `dusun` varchar(100) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `kecamatan` text NOT NULL,
  `kabupaten` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `bank` varchar(100) NOT NULL,
  `tglmpdh` date NOT NULL,
  `tglmpens` date NOT NULL,
  `jmlanak` int(11) NOT NULL,
  `nmanak` varchar(100) NOT NULL,
  `hubanak` varchar(100) NOT NULL,
  `berkas_formspp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `User_ID` int(11) NOT NULL,
  `User_Name` varchar(50) NOT NULL,
  `User_Email` varchar(50) NOT NULL,
  `User_Password` varchar(50) NOT NULL,
  `User_Satwil` varchar(50) NOT NULL,
  `User_Satker` varchar(255) NOT NULL,
  `User_Role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`User_ID`, `User_Name`, `User_Email`, `User_Password`, `User_Satwil`, `User_Satker`, `User_Role`) VALUES
(1, 'Nuruddin Hidayat', 'nuruddinh065@gmail.com', '201837', '', '', 'Admin'),
(2, 'Nuruddin Hidayat', 'user@gmail.com', '201837', 'Polda DIY', 'Satsabhara', 'User'),
(6, 'fahrul', 'udin2k18@gmail.com', '2312', 'Polresta YKA', 'SDM', 'User'),
(7, 'ASGH', 'ahmadagusss482@gmail.com', '111', 'Polresta YKA', 'SDM', 'User');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_gaji`
--
ALTER TABLE `tb_gaji`
  ADD PRIMARY KEY (`gaji_id`);

--
-- Indeks untuk tabel `tb_pangkat`
--
ALTER TABLE `tb_pangkat`
  ADD PRIMARY KEY (`pangkat_ID`);

--
-- Indeks untuk tabel `tb_pengajuan`
--
ALTER TABLE `tb_pengajuan`
  ADD PRIMARY KEY (`pengajuan_id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_gaji`
--
ALTER TABLE `tb_gaji`
  MODIFY `gaji_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_pengajuan`
--
ALTER TABLE `tb_pengajuan`
  MODIFY `pengajuan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
