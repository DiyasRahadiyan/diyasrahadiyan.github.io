-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Agu 2020 pada 06.29
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kampus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenjang`
--

CREATE TABLE `jenjang` (
  `kode_jenjang` int(2) NOT NULL,
  `jenjang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenjang`
--

INSERT INTO `jenjang` (`kode_jenjang`, `jenjang`) VALUES
(1, 'S3'),
(2, 'S2'),
(3, 'S1'),
(4, 'D3'),
(5, 'D2'),
(6, 'D1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `kode_kelas` int(2) NOT NULL,
  `kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`kode_kelas`, `kelas`) VALUES
(1, 'Reguler'),
(2, 'Non Reguler');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(10) NOT NULL,
  `nim` int(10) NOT NULL,
  `nama_mahasiswa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `nim`, `nama_mahasiswa`) VALUES
(1, 1841111073, 'ADAM NUGRAHA'),
(2, 1830425001, 'FAIZAL JARKASIH'),
(3, 1841111072, 'SITI MASIOTH'),
(4, 1830721006, 'ZAKIA ADITIA'),
(5, 1830811121, 'SRI INDAH'),
(6, 1832011031, 'MUHAMMAD RIDHO'),
(7, 1831811036, 'NANDA PRIHANDANA'),
(8, 1831027002, 'SELAMET MAULANA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE `prodi` (
  `kode_prodi` int(2) NOT NULL,
  `prodi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`kode_prodi`, `prodi`) VALUES
(1, 'TEKNIK SIPIL'),
(2, 'KIMIA'),
(3, 'AGRIBISNIS'),
(4, 'AKUAKULTUR'),
(5, 'TEKNIK INFORMATIKA'),
(6, 'AKUNTANSI'),
(7, 'ADMINISTRASI PUBLIK'),
(8, 'ADMINISTRASI BISNIS'),
(9, 'SASTRA INGGRIS'),
(10, 'PENDIDIKAN BIOLOGI'),
(11, 'KEPERAWATAN'),
(12, 'PERPAJAKAN'),
(13, 'PENDIDIKAN BAHASA DAN SASTRA INDONESIA'),
(14, 'PENDIDIKAN MATEMATIKA'),
(15, 'PENDIDIKAN GURU PENDIDIKAN ANAK USIA DINI'),
(16, 'PENDIDIKAN GURU SEKOLAH DASAR'),
(17, 'PENDIDIKAN TEKNOLOGI INFORMASI'),
(18, 'PENDIDIKAN JASMANI'),
(19, 'HUMAS'),
(20, 'ILMU HUKUM'),
(21, 'ILMU ADMINISTRASI');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jenjang`
--
ALTER TABLE `jenjang`
  ADD PRIMARY KEY (`kode_jenjang`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kode_kelas`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indeks untuk tabel `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`kode_prodi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
