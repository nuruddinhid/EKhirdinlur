-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Des 2023 pada 01.54
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
-- Database: `db_sdm-khirdinlur`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gaji`
--

CREATE TABLE `tb_gaji` (
  `gaji_id` int(11) NOT NULL,
  `pangkat_ID` int(11) NOT NULL,
  `pangkat_name` varchar(50) NOT NULL,
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

INSERT INTO `tb_gaji` (`gaji_id`, `pangkat_ID`, `pangkat_name`, `gaji_MKG`, `gaji_GPT`, `gaji_SIUN`, `gaji_JANDA`, `gaji_yorp1`, `gaji_yorp2`, `gaji_ynp1`, `gaji_ynp2`) VALUES
(8, 1, 'AKBP', 32, 5084300, 3837300, 1778000, 511300, 1021800, 1150200, 1533600),
(13, 1, 'AKBP', 30, 4928900, 3741900, 3728900, 493700, 994900, 1110600, 1533600),
(14, 1, 'AKBP', 28, 4778200, 3598800, 1681700, 480500, 959000, 1080900, 1441200),
(15, 1, 'AKBP', 26, 4632200, 3503400, 1622600, 467300, 932100, 1051200, 1401600),
(16, 2, 'KOMPOL', 32, 4930100, 3741900, 1728900, 493700, 994900, 1110600, 1480800),
(17, 2, 'KOMPOL', 30, 4779400, 3598800, 1681700, 480500, 959000, 1080900, 1441200),
(18, 2, 'KOMPOL', 28, 4633300, 3503400, 1622600, 467300, 932100, 1051200, 1401600),
(19, 2, 'KOMPOL', 26, 4491700, 3408100, 1575300, 454100, 905200, 1011600, 1348800),
(20, 3, 'AKP', 32, 4780600, 3585500, 1673300, 478100, 956200, 1075700, 1434200),
(21, 3, 'AKP', 30, 4634400, 3504600, 1630200, 466100, 932200, 1048700, 1398200),
(23, 3, 'AKP', 28, 4492800, 3383300, 1578300, 450100, 900100, 1012600, 1350000),
(24, 3, 'AKP', 26, 4355400, 3302300, 1526500, 438100, 876000, 985500, 1313900),
(25, 4, 'IPTU', 32, 4635600, 3504600, 1630200, 466100, 932200, 1048700, 1398200),
(26, 4, 'IPTU', 30, 4493900, 3383300, 1578300, 450100, 900100, 1012600, 1350000),
(27, 4, 'IPTU', 28, 4356500, 3302300, 1535100, 438100, 876000, 985500, 1313900),
(28, 5, 'IPDA', 31, 4425200, 0, 1552400, 446100, 892100, 1003600, 1338000),
(29, 5, 'IPDA', 29, 4289900, 3342800, 1509200, 430000, 860000, 967500, 1289900),
(30, 5, 'IPDA', 27, 4158800, 3221400, 1457400, 418000, 835900, 940400, 1253800),
(31, 6, 'AIPTU', 32, 4032600, 3024500, 1411500, 403300, 806600, 907400, 1209800),
(33, 6, 'AIPTU', 30, 3909400, 2934500, 1378000, 391000, 782000, 879700, 1172900),
(34, 6, 'AIPTU', 28, 3789900, 2884400, 1333300, 380800, 761500, 856700, 1142100),
(35, 7, 'AIPDA', 32, 3910300, 2934500, 1378000, 393100, 786100, 884400, 1179100),
(36, 7, 'AIPDA', 30, 3790800, 2844400, 1333300, 380800, 761500, 856700, 1179100),
(37, 7, 'AIPDA', 28, 3674900, 2769400, 1288600, 368500, 736900, 829000, 1105200),
(39, 8, '', 30, 3675800, 0, 1288600, 368500, 736900, 829000, 1105200),
(40, 8, '', 28, 3563500, 0, 1255100, 358200, 716400, 805900, 1074400),
(41, 9, '', 32, 3676700, 0, 1288600, 368500, 736900, 829000, 1105200),
(42, 9, '', 30, 3564300, 0, 1255100, 358200, 716400, 805900, 1074400),
(43, 9, '', 26, 3789900, 0, 1681700, 380800, 932100, 1051200, 1401600);

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
  `pangkat_name` varchar(50) NOT NULL,
  `paba` varchar(100) NOT NULL,
  `nrp` varchar(100) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `satwil` varchar(100) NOT NULL,
  `satker` varchar(100) NOT NULL,
  `asabri` varchar(100) NOT NULL,
  `npwp` varchar(100) NOT NULL,
  `katma` date NOT NULL,
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
  `gaji_MKG` int(11) NOT NULL,
  `nmsuamiistri` varchar(50) NOT NULL,
  `tgllahir_suamiistri` date NOT NULL,
  `nmanak1` varchar(100) NOT NULL,
  `tgllahir_anak1` date NOT NULL,
  `hubanak1` varchar(100) NOT NULL,
  `nmanak2` varchar(50) NOT NULL,
  `tgllahir_anak2` date NOT NULL,
  `hubanak2` varchar(50) NOT NULL,
  `nmanak3` varchar(50) NOT NULL,
  `tgllahir_anak3` date NOT NULL,
  `hubanak3` varchar(50) NOT NULL,
  `berkas_formspp` varchar(100) NOT NULL,
  `berkas_keppensiun` varchar(50) NOT NULL,
  `berkas_keppengangkatanpertama` varchar(50) NOT NULL,
  `berkas_skpp` varchar(50) NOT NULL,
  `berkas_asabri` varchar(50) NOT NULL,
  `berkas_riwayathidup` varchar(50) NOT NULL,
  `berkas_kk` varchar(50) NOT NULL,
  `berkas_ktpsim` varchar(50) NOT NULL,
  `berkas_suketkuliah` varchar(50) NOT NULL,
  `berkas_pasfoto` varchar(50) NOT NULL,
  `berkas_npwp` varchar(50) NOT NULL,
  `status_pengajuan` varchar(50) NOT NULL,
  `keterangan_tolak` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pengajuan`
--

INSERT INTO `tb_pengajuan` (`pengajuan_id`, `nama`, `pangkat_name`, `paba`, `nrp`, `jabatan`, `satwil`, `satker`, `asabri`, `npwp`, `katma`, `tgllahir`, `alamat`, `dusun`, `kelurahan`, `kecamatan`, `kabupaten`, `provinsi`, `bank`, `tglmpdh`, `tglmpens`, `gaji_MKG`, `nmsuamiistri`, `tgllahir_suamiistri`, `nmanak1`, `tgllahir_anak1`, `hubanak1`, `nmanak2`, `tgllahir_anak2`, `hubanak2`, `nmanak3`, `tgllahir_anak3`, `hubanak3`, `berkas_formspp`, `berkas_keppensiun`, `berkas_keppengangkatanpertama`, `berkas_skpp`, `berkas_asabri`, `berkas_riwayathidup`, `berkas_kk`, `berkas_ktpsim`, `berkas_suketkuliah`, `berkas_pasfoto`, `berkas_npwp`, `status_pengajuan`, `keterangan_tolak`) VALUES
(65, 'Nuruddin Hidayat', 'AKP', 'Perwira', '22222222', 'PS. Panit 2 Bagwassidik Ditreskrimsus ', 'Polresta YKA', 'Satsabhara', 'ED 329461', '58.713.637.5-542.000', '2023-12-07', '1970-01-01', 'Tegallayang 10, RT 05, Caturharjo, Pandak, Bantul, Yogyakarta', '', '', '', '', '', '', '1970-01-01', '1970-01-01', 32, 'IdontKNow', '1970-01-01', 'Ahmad Jauhani', '1970-01-07', 'Kandung', '', '1970-01-01', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', 'Disetujui', ''),
(75, 'Ahmad Agus Santoso ', 'AIPDA', 'Bintara', '65010123', 'Wakapolsek Temon Polres Kulon Progo Polda DIY ', 'Polda DIY', 'Satsabhara', 'ED 316528', '77.929.139.2-542.000', '2023-12-16', '2023-12-16', 'Perum GAP Jl. Bromo F 12 Kwarasan RT 004/ RW 034 Kal. Nogotirto, Kap. Gamping, Kab. Sleman', 'Tegallayang 10', 'Caturharjo', 'Gamping', 'Sleman', 'Yogyakarta', 'BRI', '2023-12-29', '2023-12-01', 32, 'Ny. LUCIA TRUBUS TRISMIYATI', '1970-01-01', 'Asep', '1970-01-01', 'Kandung', 'ASX', '1970-01-01', 'Kandung', 'WER', '1970-01-01', 'Kandung', '', '', '', '', '', '', '', '', '', '', '', 'Disetujui', ''),
(76, 'UB', '', 'Pilih Pangkat', '', '', '', '', '', '', '1970-01-01', '1970-01-01', '', '', '', '', '', '', '', '1970-01-01', '1970-01-01', 0, '', '1970-01-01', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', 'Lampiran DAFTAR RIWAYAT HIDUP.docx', 'Disetujui', ''),
(77, 'As', '', 'Pilih Pangkat', '', '', '', '', '', '', '1970-01-01', '1970-01-01', '', '', '', '', '', '', '', '1970-01-01', '1970-01-01', 0, '', '1970-01-01', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', 'Scan KTP.pdf', 'Ditolak', 'Kurang'),
(78, 'Ahmad Solikhin', '', 'Pilih Pangkat', '', '', '', '', '', '', '1970-01-01', '1970-01-01', '', '', '', '', '', '', '', '1970-01-01', '1970-01-01', 0, '', '1970-01-01', '', '1970-01-01', '', '', '1970-01-01', '', '', '1970-01-01', '', 'Lampiran DAFTAR RIWAYAT HIDUP.docx', 'Surat Lamaran.docx', 'Surat Lamaran.docx', 'Lampiran DAFTAR RIWAYAT HIDUP.docx', 'Surat Lamaran.docx', 'Surat Lamaran.docx', 'Lampiran DAFTAR RIWAYAT HIDUP.docx', 'Lampiran DAFTAR RIWAYAT HIDUP.docx', 'Lampiran DAFTAR RIWAYAT HIDUP.docx', 'Lampiran DAFTAR RIWAYAT HIDUP.docx', 'Surat Lamaran.docx', 'Ditolak', 'Kurang');

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
(1, 'Nuruddin Hidayat', 'nuruddinh065@gmail.com', '111', '', '', 'Admin'),
(2, 'Nuruddin Hidayat', 'user@gmail.com', '234', 'Polda DIY', 'Satsabhara', 'User'),
(6, 'fahrul', 'udin2k18@gmail.com', '111', 'Polresta YKA', 'SDM', 'User');

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
  MODIFY `gaji_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `tb_pengajuan`
--
ALTER TABLE `tb_pengajuan`
  MODIFY `pengajuan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
