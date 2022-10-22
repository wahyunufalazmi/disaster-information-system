-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Okt 2022 pada 09.45
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
-- Database: `bpbd`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `acara`
--

CREATE TABLE `acara` (
  `id` int(11) NOT NULL,
  `namaacara` varchar(500) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `tanggal` varchar(2) NOT NULL,
  `bulan` varchar(10) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `tempat` text NOT NULL,
  `deskripsi` text NOT NULL,
  `penyelenggara` varchar(300) NOT NULL,
  `gambar` varchar(500) NOT NULL,
  `uploaded` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nomor` char(12) NOT NULL,
  `bidang` varchar(20) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nip`, `password`, `nama`, `email`, `nomor`, `bidang`, `jabatan`) VALUES
(0, 'vvebmazter', 'wahyufamily27', 'WAHYU NUFAL AZMI', 'wahyuazmi27@gmail.com', '081328038299', 'IT', 'Webmaster');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bencana`
--

CREATE TABLE `bencana` (
  `id` int(11) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `tanggal` varchar(2) NOT NULL,
  `bulan` varchar(10) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `dukuh` varchar(20) NOT NULL,
  `desa` varchar(20) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `tanggalpenetapan` varchar(10) NOT NULL,
  `masatanggap` varchar(3) NOT NULL,
  `kk` int(11) NOT NULL,
  `korbanhilang` int(11) NOT NULL,
  `korbanluka` int(11) NOT NULL,
  `korbanmengungsi` int(11) NOT NULL,
  `rusakringan` int(11) NOT NULL,
  `rusaksedang` int(11) NOT NULL,
  `rusakberat` int(11) NOT NULL,
  `kerugian` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(500) NOT NULL,
  `uploaded` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `tanggal` varchar(2) NOT NULL,
  `bulan` varchar(10) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `dukuh` varchar(100) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kk` int(11) NOT NULL,
  `korbanhilang` int(11) NOT NULL,
  `korbanluka` int(11) NOT NULL,
  `korbanmengungsi` int(11) NOT NULL,
  `rusakringan` int(11) NOT NULL,
  `rusaksedang` int(11) NOT NULL,
  `rusakberat` int(11) NOT NULL,
  `kerugian` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(500) NOT NULL,
  `uploaded` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `korban`
--

CREATE TABLE `korban` (
  `id` int(11) NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `tanggal` varchar(2) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `bulan` varchar(10) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `alamat` text NOT NULL,
  `kepalakeluarga` varchar(50) NOT NULL,
  `anggotakeluarga` int(11) NOT NULL,
  `lukaringan` int(11) NOT NULL,
  `lukaberat` int(11) NOT NULL,
  `meninggal` int(11) NOT NULL,
  `kerugian` int(11) NOT NULL,
  `tingkatkerugian` varchar(10) NOT NULL,
  `uploaded` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kontak` char(12) NOT NULL,
  `usia` int(2) NOT NULL,
  `kelamin` varchar(6) NOT NULL,
  `alamat` text NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `tempat` text NOT NULL,
  `tanggal` datetime DEFAULT NULL,
  `status` int(1) NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id`, `nama`, `kontak`, `usia`, `kelamin`, `alamat`, `tipe`, `deskripsi`, `tempat`, `tanggal`, `status`, `gambar`) VALUES
(149, 'pudidi', '085278276098', 23, 'Laki -', '', 'Kebakaran Perumahan & Tempat Tinggal Warga', 'asdfasdf asdfsadf', 'asdfasdf sdfasdf', '2021-03-27 21:11:08', 1, '394-kebakaran-1.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(11) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `tanggal` datetime DEFAULT NULL,
  `nama_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `judul`, `tanggal`, `nama_file`) VALUES
(622, 'PENETAPAN STANDAR PELAYANAN PADA BPBD KABUPATEN BOYOLALI', '2021-03-08 12:31:15', 'PENETAPAN STANDAR PELAYANAN PADA BPBD KABUPATEN BOYOLALI.pdf');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `acara`
--
ALTER TABLE `acara`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bencana`
--
ALTER TABLE `bencana`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `korban`
--
ALTER TABLE `korban`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
