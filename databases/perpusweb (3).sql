-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 06, 2024 at 02:03 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpusweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE `agama` (
  `id` int NOT NULL,
  `foto` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `stok` int NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `isbn` varchar(100) NOT NULL,
  `klasifikasi` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `rusak` varchar(100) NOT NULL,
  `inventaris` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` int NOT NULL,
  `foto` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nisn` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kelas` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jk` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `foto`, `nisn`, `nama`, `kelas`, `jk`, `alamat`) VALUES
(46, '667ed2ef3f1ea.png', '2201094002', 'SITI NURHALIZA', '5A', 'perempuan', 'Jl.Batu Ampar.Pangkalan Kerinci, 28654, Pangkalan Kerinci Bar., Kec. Pangkalan Kerinci, Kabupaten Pelalawan, Riau 28654'),
(47, '66838df208a50.png', '2201094002S', 'Senyaman Coffee', '9A', 'perempuan', 'telp 0761-494499 fax 0761-494999 kode pos 28654, Jl. Maharaja Indra Jl. Lintas Sumatra No.517, Pangkalan Kerinci Kota, Kec. Pangkalan Kerinci, Kabupaten Pelalawan, Riau 28654'),
(48, '669a7190e5fd6.jpg', '2201094002', 'Foodpedia San\'s Cafe', '12a', 'perempuan', 'Jl. Masjid Raya No.16, Pangkalan Kerinci Kota, Kec. Pangkalan Kerinci, Kabupaten Pelalawan, Riau 28300');

-- --------------------------------------------------------

--
-- Table structure for table `bahasa`
--

CREATE TABLE `bahasa` (
  `id` int NOT NULL,
  `foto` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `stok` int NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `inventaris` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `isbn` varchar(100) NOT NULL,
  `klasifikasi` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `rusak` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int NOT NULL,
  `foto` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `judul` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `stok` int NOT NULL,
  `kategori` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `inventaris` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pengarang` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `isbn` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `klasifikasi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `penerbit` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `harga` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `rusak` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `foto`, `judul`, `stok`, `kategori`, `inventaris`, `tanggal`, `pengarang`, `isbn`, `klasifikasi`, `penerbit`, `harga`, `rusak`) VALUES
(14, '66c6018805262.png', 'Algoritma &a Pemograman', 12, 'da', 'qwa', '15 desember 2023', 'Siti nurhaliza', 'aaaaaaaaaaa', '12abisnis', 'sxs', '10.000', '12'),
(15, '66c6019649b2c.png', 'Algoritma & Pemograman', 24, 'asjaks', 'e', '15 desember 2023', 'Siti nurhaliza', '11239a', '12abisnis', 'Informatika', '15.000', '12'),
(16, '66c601a39054e.png', 'weding', 1, 'mm', 'qwa', '15 desember 2023', 'Siti nurhaliza', '11239a', '12abisnis', 'Computer', '25.000', '12'),
(17, '66c601b57073e.png', 'Algoritma & Pemograman', 13, 'fiksi', 'qwa', '15 desember 2023', 'Siti nurhaliza', '11239a', '12abisnis', 'Informatika', '12.000', '12'),
(18, '66c601c3534cd.jpg', 'weding', 1, 'eq', 'SS', '15 desember 2023', 'Siti nurhaliza', '11239a', '12abisnis', 'Informatika', '12.000', '12'),
(19, '66c601d130562.png', 'Algoritma & Pemograman', 13, 'fiksi', 'qwa', '15 desember 2023', 'Siti nurhaliza', '11239a', '352', 'Computer', '30.000', '12');

-- --------------------------------------------------------

--
-- Table structure for table `filsafat`
--

CREATE TABLE `filsafat` (
  `id` int NOT NULL,
  `foto` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `stok` int NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `inventaris` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `isbn` varchar(100) NOT NULL,
  `klasifikasi` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `rusak` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ipm`
--

CREATE TABLE `ipm` (
  `id` int NOT NULL,
  `foto` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `stok` int NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `inventaris` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `isbn` varchar(100) NOT NULL,
  `klasifikasi` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `rusak` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ipt`
--

CREATE TABLE `ipt` (
  `id` int NOT NULL,
  `foto` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `stok` int NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `inventaris` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `isbn` varchar(100) NOT NULL,
  `klasifikasi` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `rusak` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int NOT NULL,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kelas` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `klasifikasi` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `keterangan`, `kelas`, `klasifikasi`) VALUES
(15, 'Resto & Cafe Solitaire', 'photo', '9Av', '123');

-- --------------------------------------------------------

--
-- Table structure for table `laporankembali`
--

CREATE TABLE `laporankembali` (
  `id` int NOT NULL,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kelas` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `judul` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `penerbit` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pengarang` date NOT NULL,
  `tanggalpinjam` date NOT NULL,
  `tanggalkembali` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int NOT NULL,
  `username` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(2, 'sman2@pklkuras.com', 'sman2pklkuras'),
(3, 'admin@sman2.com', 'perpustakaanteman');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int NOT NULL,
  `nama` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `judul` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tanggalpinjam` date NOT NULL,
  `tanggalkembali` date NOT NULL,
  `jumlah` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kelas` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `nama`, `judul`, `tanggalpinjam`, `tanggalkembali`, `jumlah`, `kelas`) VALUES
(27, 'SITI NURHALIZA', 'Algoritma & Pemograman', '2024-08-20', '2024-08-20', '1', '9Ab');

-- --------------------------------------------------------

--
-- Table structure for table `penerbit`
--

CREATE TABLE `penerbit` (
  `id` int NOT NULL,
  `keterangan` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tlp` int NOT NULL,
  `kota` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tahunterbit` int NOT NULL,
  `judul` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `penerbit` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pengarang` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penerbit`
--

INSERT INTO `penerbit` (`id`, `keterangan`, `alamat`, `tlp`, `kota`, `tahunterbit`, `judul`, `penerbit`, `pengarang`) VALUES
(7, 'Tanpa Keterangan', 'Jl. Maharaja Indra, Pangkalan Kerinci Kota, Kec. Pangkalan Kerinci, Kabupaten Pelalawan, Riau 28654', 2147483647, 'futdf', 2004, 'yyguyfu', 'giyfi', 'chg'),
(8, 'photo', 'Jl. Maharaja Indra, Pangkalan Kerinci Kota, Kec. Pangkalan Kerinci, Kabupaten Pelalawan, Riau 28654', 0, '', 0, '', '', ''),
(14, 'photo', 'Jl. Maharaja Indra, Pangkalan Kerinci Kota, Kec. Pangkalan Kerinci, Kabupaten Pelalawan, Riau 28654', 2147483647, '', 0, '', '', ''),
(15, 'photo', 'Jl. Maharaja Indra, Pangkalan Kerinci Kota, Kec. Pangkalan Kerinci, Kabupaten Pelalawan, Riau 28654', 2147483647, '', 0, '', '', ''),
(16, 'photo', 'Jl. Maharaja Indra, Pangkalan Kerinci Kota, Kec. Pangkalan Kerinci, Kabupaten Pelalawan, Riau 28654', 2147483647, '', 0, '', '', ''),
(18, '', '', 0, '', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pengadaan`
--

CREATE TABLE `pengadaan` (
  `id` int NOT NULL,
  `tanggal` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `judul` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `asal` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jumlah` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengadaan`
--

INSERT INTO `pengadaan` (`id`, `tanggal`, `judul`, `asal`, `jumlah`, `keterangan`) VALUES
(1, '12-01-20023', 'Jurnal Of Computer', 'Bandung', '13', '-');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id` int NOT NULL,
  `nama` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `judul` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tanggalpinjam` date NOT NULL,
  `tanggalkembali` date NOT NULL,
  `kembali` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jumlah` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kelas` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `denda` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengembalian`
--

INSERT INTO `pengembalian` (`id`, `nama`, `judul`, `tanggalpinjam`, `tanggalkembali`, `kembali`, `jumlah`, `status`, `kelas`, `denda`) VALUES
(18, 'budi', 'abc', '2023-12-14', '2023-12-16', '2024-06-30', '2', 'dikembalikan', '12', 19700),
(19, 'SITI NURHALIZA', 'Algoritma & Pemograman', '2024-06-28', '2024-06-29', '2024-06-30', '1', 'dikembalikan', '5', 100),
(20, 'SITI NURHALIZA', 'Algoritma & Pemograman', '2024-07-15', '2024-07-17', '2024-07-18', '1', 'dikembalikan', '12', 100),
(21, 'SITI NURHALIZA', 'Algoritma & Pemograman', '2024-07-16', '2024-07-17', '2024-07-18', '1', 'dikembalikan', '5', 100),
(22, 'SITI NURHALIZA', 'Algoritma & Pemograman', '2024-07-15', '2024-07-17', '2024-07-18', '1', 'dikembalikan', '5', 100),
(23, 'SITI NURHALIZA', 'Algoritma & Pemograman', '2024-07-16', '2024-07-17', '2024-07-18', '1', 'dikembalikan', '5', 1000),
(24, 'SITI NURHALIZA', 'Algoritma & Pemograman', '2024-07-25', '2024-07-26', '2024-08-14', '1', 'dikembalikan', '5', 19000);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int NOT NULL,
  `foto` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `level` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tlp` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `foto`, `nama`, `email`, `status`, `level`, `tlp`) VALUES
(10, '657b0046931b0.png', 'dina', 'dina@gmail.com', 'aktif', 'guru', 435111345);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna1`
--

CREATE TABLE `pengguna1` (
  `id` int NOT NULL,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `foto` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tlp` int NOT NULL,
  `status` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `level` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengguna1`
--

INSERT INTO `pengguna1` (`id`, `nama`, `foto`, `email`, `tlp`, `status`, `level`) VALUES
(1, 'SITI', '12.jpg', 'sn301620@gmail.com', 2147483647, 'aktif', 'admin'),
(2, 'SITI NURHALIZA', 'aku.jpeg', 'sn613819@gmail.com', 2147483647, 'aktif', 'admin'),
(3, 'SITI NURHALIZA', 'image.jpg', 'sn613819@gmail.com', 2147483647, 'aktif', '0');

-- --------------------------------------------------------

--
-- Table structure for table `rak`
--

CREATE TABLE `rak` (
  `id` int NOT NULL,
  `nomor` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `regis`
--

CREATE TABLE `regis` (
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `no` int NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sastra`
--

CREATE TABLE `sastra` (
  `id` int NOT NULL,
  `foto` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `stok` int NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `inventaris` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `isbn` varchar(100) NOT NULL,
  `klasifikasi` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `rusak` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sejarah`
--

CREATE TABLE `sejarah` (
  `id` int NOT NULL,
  `foto` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `stok` int NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `inventaris` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `isbn` varchar(100) NOT NULL,
  `klasifikasi` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `rusak` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sejarah`
--

INSERT INTO `sejarah` (`id`, `foto`, `judul`, `stok`, `kategori`, `inventaris`, `pengarang`, `isbn`, `klasifikasi`, `penerbit`, `harga`, `rusak`, `tanggal`) VALUES
(1, '66be09152764d.jpeg', 'Kegiatan desa ransang', 13, 'fiksi', 'qwa', 'Siti nurhaliza', '11239a', '352', 'Informatika', '12.000', '12', '15 desember 2023');

-- --------------------------------------------------------

--
-- Table structure for table `seni`
--

CREATE TABLE `seni` (
  `id` int NOT NULL,
  `foto` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `stok` int NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `inventaris` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `isbn` varchar(100) NOT NULL,
  `klasifikasi` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `rusak` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sosial`
--

CREATE TABLE `sosial` (
  `id` int NOT NULL,
  `foto` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `stok` int NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `inventaris` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `isbn` varchar(100) NOT NULL,
  `klasifikasi` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `rusak` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `struktur_organisasi`
--

CREATE TABLE `struktur_organisasi` (
  `id` int NOT NULL,
  `jabatan` varchar(128) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `parent_key` varchar(128) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `foto` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `struktur_organisasi`
--

INSERT INTO `struktur_organisasi` (`id`, `jabatan`, `nama`, `parent_key`, `foto`) VALUES
(1, 'Penanggungjawab', 'JUNAIDI.Spd.M.Pd', NULL, '66c6f4f1084cd.png'),
(8, 'Kepala Pustaka', 'NURWAIDA.MUKHTAR S.Pd', '1', '66c6f4fc36971.png'),
(9, 'Bag. Pelayanan ', ' ALVIRAWATI  &  RUZIANA', '8', '66c6f5061c052.png'),
(11, 'MAJELIS GURU', 'MAJELIS GURU', '8', '66c6f231eaaf9.png'),
(12, 'TATA USAHA', 'TATA USAHA', '8', '66c6f253abbc0.png'),
(13, 'SISWA', 'SISWA', '11', '66c6f2785c5d4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bahasa`
--
ALTER TABLE `bahasa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filsafat`
--
ALTER TABLE `filsafat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ipm`
--
ALTER TABLE `ipm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ipt`
--
ALTER TABLE `ipt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporankembali`
--
ALTER TABLE `laporankembali`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penerbit`
--
ALTER TABLE `penerbit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengadaan`
--
ALTER TABLE `pengadaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna1`
--
ALTER TABLE `pengguna1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rak`
--
ALTER TABLE `rak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sastra`
--
ALTER TABLE `sastra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sejarah`
--
ALTER TABLE `sejarah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seni`
--
ALTER TABLE `seni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sosial`
--
ALTER TABLE `sosial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agama`
--
ALTER TABLE `agama`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `bahasa`
--
ALTER TABLE `bahasa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `filsafat`
--
ALTER TABLE `filsafat`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ipm`
--
ALTER TABLE `ipm`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ipt`
--
ALTER TABLE `ipt`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `laporankembali`
--
ALTER TABLE `laporankembali`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `penerbit`
--
ALTER TABLE `penerbit`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pengadaan`
--
ALTER TABLE `pengadaan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pengguna1`
--
ALTER TABLE `pengguna1`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rak`
--
ALTER TABLE `rak`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sastra`
--
ALTER TABLE `sastra`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sejarah`
--
ALTER TABLE `sejarah`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seni`
--
ALTER TABLE `seni`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sosial`
--
ALTER TABLE `sosial`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
