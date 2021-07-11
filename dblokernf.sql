-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jul 2021 pada 06.56
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dblokernf`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidang_usaha`
--

CREATE TABLE `bidang_usaha` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `bidang_usaha`
--

INSERT INTO `bidang_usaha` (`id`, `nama`) VALUES
(1, 'Teknologi Informasi dan Komunikasi'),
(5, 'Industri Nasional'),
(8, 'E-Commerce');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keahlian`
--

CREATE TABLE `keahlian` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `keahlian`
--

INSERT INTO `keahlian` (`id`, `nama`) VALUES
(1, 'Programmer'),
(2, 'Infrastruktur Jaringan'),
(3, 'Accounting'),
(4, 'Bahasa Inggris'),
(5, 'Database'),
(6, 'UX Designer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lowongan`
--

CREATE TABLE `lowongan` (
  `id` int(11) NOT NULL,
  `deskripsi_pekerjaan` text DEFAULT NULL,
  `tanggal_akhir` date DEFAULT NULL,
  `mitra_id` int(11) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `lowongan`
--

INSERT INTO `lowongan` (`id`, `deskripsi_pekerjaan`, `tanggal_akhir`, `mitra_id`, `email`, `deskripsi`) VALUES
(1, 'Web Programmer', '2021-07-15', 2, 'hrd@bukalapak.com', 'Mengembangkan perangkat lunak/sistem dengan melakukan coding dengan bahasa pemrograman,\r\nMengimplementasikan, mengkonfigurasi dan me-maintain perangkat lunak/sistem,\r\nMelakukan pengujian/testing dan debugging terhadap perangkat lunak/sistem.\r\n'),
(7, 'frontend Developer', '2021-07-21', 7, 'eskanusa@gmail.com', 'Mengembangkan perangkat lunak/sistem dengan melakukan coding dengan bahasa pemrograman,\r\nMengimplementasikan, mengkonfigurasi dan me-maintain perangkat lunak/sistem,\r\nMelakukan pengujian/testing dan debugging terhadap perangkat lunak/sistem.\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lowongan_keahlian`
--

CREATE TABLE `lowongan_keahlian` (
  `id` int(11) NOT NULL,
  `keahlian_id` int(11) NOT NULL,
  `lowongan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `lowongan_keahlian`
--

INSERT INTO `lowongan_keahlian` (`id`, `keahlian_id`, `lowongan_id`) VALUES
(1, 1, 1),
(2, 5, 1),
(3, 6, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mitra`
--

CREATE TABLE `mitra` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `kontak` varchar(30) DEFAULT NULL,
  `telpon` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `web` varchar(45) DEFAULT NULL,
  `bidang_usaha_id` int(11) NOT NULL,
  `sektor_usaha_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `mitra`
--

INSERT INTO `mitra` (`id`, `nama`, `alamat`, `kontak`, `telpon`, `email`, `web`, `bidang_usaha_id`, `sektor_usaha_id`) VALUES
(1, 'PT Rekayasa Industria', 'Jl Makam Pahlawan xbata No 182', 'Aries P', '0812-8882329', 'hrd@rekin.go.id', 'www.rekin.go.id', 5, 2),
(2, 'PT Bukalapak', 'Jl Kemang No. 12', 'Zaki F', '0859-42029', 'hrd@bukalapak.com', 'bukalapak.com', 1, 4),
(7, 'PT Eskanusa Putraco', 'Jakarta Barat', 'Rizki', '', 'eskanusa@gmail.com', '', 1, 8),
(11, 'PT Tokopedia', 'Jakarta, Indonesia', 'Burhan', '', 'tokopedia@gmail.com', 'tokopedia.com', 8, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminat_lowongan`
--

CREATE TABLE `peminat_lowongan` (
  `id` int(11) NOT NULL,
  `nim` varchar(10) DEFAULT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `alasan` text DEFAULT NULL,
  `prodi_id` int(11) NOT NULL,
  `lowongan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE `prodi` (
  `id` int(11) NOT NULL,
  `kode` varchar(2) DEFAULT NULL,
  `nama` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`id`, `kode`, `nama`) VALUES
(4, 'IK', 'Ilmu Komputer'),
(5, 'SI', 'Sistem Informasi'),
(6, 'TI', 'Teknik Informatika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sektor_usaha`
--

CREATE TABLE `sektor_usaha` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `sektor_usaha`
--

INSERT INTO `sektor_usaha` (`id`, `nama`) VALUES
(2, 'BUMN'),
(4, 'Startup'),
(8, 'Swasta');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bidang_usaha`
--
ALTER TABLE `bidang_usaha`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `keahlian`
--
ALTER TABLE `keahlian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_lowongan_mitra1_idx` (`mitra_id`);

--
-- Indeks untuk tabel `lowongan_keahlian`
--
ALTER TABLE `lowongan_keahlian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_lowongan_keahlian_keahlian1_idx` (`keahlian_id`),
  ADD KEY `fk_lowongan_keahlian_lowongan1_idx` (`lowongan_id`);

--
-- Indeks untuk tabel `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_mitra_bidang_usaha_idx` (`bidang_usaha_id`),
  ADD KEY `fk_mitra_sektor_usaha1_idx` (`sektor_usaha_id`);

--
-- Indeks untuk tabel `peminat_lowongan`
--
ALTER TABLE `peminat_lowongan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_peminat_lowongan_prodi1_idx` (`prodi_id`),
  ADD KEY `fk_peminat_lowongan_lowongan1_idx` (`lowongan_id`);

--
-- Indeks untuk tabel `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sektor_usaha`
--
ALTER TABLE `sektor_usaha`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bidang_usaha`
--
ALTER TABLE `bidang_usaha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `keahlian`
--
ALTER TABLE `keahlian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `lowongan`
--
ALTER TABLE `lowongan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `lowongan_keahlian`
--
ALTER TABLE `lowongan_keahlian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `mitra`
--
ALTER TABLE `mitra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `peminat_lowongan`
--
ALTER TABLE `peminat_lowongan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `sektor_usaha`
--
ALTER TABLE `sektor_usaha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `lowongan`
--
ALTER TABLE `lowongan`
  ADD CONSTRAINT `fk_lowongan_mitra1` FOREIGN KEY (`mitra_id`) REFERENCES `mitra` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `lowongan_keahlian`
--
ALTER TABLE `lowongan_keahlian`
  ADD CONSTRAINT `fk_lowongan_keahlian_keahlian1` FOREIGN KEY (`keahlian_id`) REFERENCES `keahlian` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_lowongan_keahlian_lowongan1` FOREIGN KEY (`lowongan_id`) REFERENCES `lowongan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `mitra`
--
ALTER TABLE `mitra`
  ADD CONSTRAINT `fk_mitra_bidang_usaha` FOREIGN KEY (`bidang_usaha_id`) REFERENCES `bidang_usaha` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_mitra_sektor_usaha1` FOREIGN KEY (`sektor_usaha_id`) REFERENCES `sektor_usaha` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `peminat_lowongan`
--
ALTER TABLE `peminat_lowongan`
  ADD CONSTRAINT `fk_peminat_lowongan_lowongan1` FOREIGN KEY (`lowongan_id`) REFERENCES `lowongan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_peminat_lowongan_prodi1` FOREIGN KEY (`prodi_id`) REFERENCES `prodi` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
