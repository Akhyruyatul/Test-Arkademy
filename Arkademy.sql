-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2020 at 05:30 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbs_pl2_uts`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_anggota`
--

CREATE TABLE `tbl_anggota` (
  `id_anggota` int(3) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `no_telp` int(13) NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_anggota`
--

INSERT INTO `tbl_anggota` (`id_anggota`, `nama`, `alamat`, `kota`, `no_telp`, `tgl_lahir`) VALUES
(20651, 'Rizky Anwar', 'tapos', 'Bogor', 2147483647, '1997-09-15'),
(20652, 'Indhah Aulia', 'poris', 'tangerang', 2147483647, '1997-01-21'),
(20653, 'Nurhalimah', 'situdaun', 'bogor', 896789987, '1997-11-01'),
(20654, 'Andika wijaya', 'poris2', 'tangerang', 81278765, '1997-06-01'),
(20655, 'Shafa', 'poris gaga', 'tangerang', 822677899, '1996-11-10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `no_buku` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `pengarang` varchar(30) NOT NULL,
  `tahun_terbit` int(4) NOT NULL,
  `jenis_buku` varchar(20) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_buku`
--

INSERT INTO `tbl_buku` (`no_buku`, `judul`, `pengarang`, `tahun_terbit`, `jenis_buku`, `status`) VALUES
(602, 'pemrograman C dan C++', 'Adam Mukhairil Bachtiar', 2018, 'pendidikan', 'tersedia'),
(623, 'sistem digital', 'Hidayat', 2018, 'pendidikan', 'tersedia'),
(663, 'Basis Data', 'Fathansyah', 2018, 'pendidikan', 'tersedia'),
(713, 'HTML 5', 'Betha Sidik', 2019, 'pendidikan', 'Dipinjam'),
(978, 'kriptografi', 'Rinaldi Munir', 2019, 'pendidikan', 'tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pinjam`
--

CREATE TABLE `tbl_pinjam` (
  `no_pinjam` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `no_buku` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pinjam`
--

INSERT INTO `tbl_pinjam` (`no_pinjam`, `id_anggota`, `no_buku`, `tgl_pinjam`, `tgl_kembali`) VALUES
(2065, 20651, 978, '2020-05-01', '2020-05-08'),
(2066, 20652, 713, '2020-05-06', '2020-05-09'),
(2067, 20653, 663, '2020-04-30', '2020-05-02'),
(2068, 20655, 623, '2020-05-02', '2020-05-05');

--
-- Triggers `tbl_pinjam`
--
DELIMITER $$
CREATE TRIGGER `kembali_buku` AFTER UPDATE ON `tbl_pinjam` FOR EACH ROW BEGIN
	UPDATE tbl_buku SET STATUS='tersedia'
    WHERE no_buku=NEW.no_buku;
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `pinjam_buku` AFTER INSERT ON `tbl_pinjam` FOR EACH ROW BEGIN
	UPDATE tbl_buku SET status='Dipinjam'
    WHERE no_buku=new.no_buku;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` enum('umum','anggota','petugas','kepala') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'Rizky', 'Rizky', 'petugas'),
(2, 'Andi', 'Andi', 'anggota'),
(3, 'Reza', 'Reza', 'kepala');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`no_buku`);

--
-- Indexes for table `tbl_pinjam`
--
ALTER TABLE `tbl_pinjam`
  ADD PRIMARY KEY (`no_pinjam`),
  ADD KEY `id_anggota` (`id_anggota`),
  ADD KEY `no_buku` (`no_buku`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  MODIFY `id_anggota` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20656;

--
-- AUTO_INCREMENT for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  MODIFY `no_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=979;

--
-- AUTO_INCREMENT for table `tbl_pinjam`
--
ALTER TABLE `tbl_pinjam`
  MODIFY `no_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2069;

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_pinjam`
--
ALTER TABLE `tbl_pinjam`
  ADD CONSTRAINT `tbl_pinjam_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `tbl_anggota` (`id_anggota`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_pinjam_ibfk_2` FOREIGN KEY (`no_buku`) REFERENCES `tbl_buku` (`no_buku`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
