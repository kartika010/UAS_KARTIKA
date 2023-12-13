-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2023 at 05:16 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `allinwomenstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`, `detail`) VALUES
(23, 'Baju Tunik', ' Baju Tunik Lengan Serut ', 'bajuRok', 85000, 100, 'tunik_1.jpg', 'Ukuran M, L & XL\r\n'),
(26, 'Sepatu Sneakers', ' Sepatu Sneakers High Shoes', 'sepatuSendal', 125000, 120, 'sepatu_1.jpg', 'Ukuran 35, 36, 37, 38, 39, & 40'),
(29, 'Rok Lilit', ' Rok Lilit Batik', 'bajuRok', 60000, 49, 'rok_2.jpg', 'Ukuran M,L, & XL'),
(30, 'Sendal Tali', ' Sendal Tali Belakang', 'sepatuSendal', 130000, 69, 'sandal_1.jpg', 'Ukuran 35, 36, 37, 38, 39, & 40 '),
(31, 'Tas Selempang', ' Tas Selempang', 'tasAksesoris', 45000, 50, 'tas_3.jpg', 'Black, Cream & Maroon'),
(32, 'Kalung Perhiasan ', ' Kalung Perhiasan Silver', 'tasAksesoris', 350000, 20, 'kalung.jpg', 'Silver 925'),
(33, 'Topi Pantai', ' Topi Pantai Gelombang Pita', 'topiHijab', 60000, 50, 'topi_3.jpg', 'Warna HItam, Pink, Cream & Biru'),
(34, 'Hijab Segiempat', ' Hijab Segiempat Motif Bunga', 'topiHijab', 45000, 100, 'hijab_2.jpg', 'Warna Hitam, Biru, Army, Putih & Pink');

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `jasa` varchar(50) NOT NULL,
  `rekening_tujuan` varchar(50) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `nohp`, `jasa`, `rekening_tujuan`, `tgl_pesan`, `batas_bayar`) VALUES
(8, 'Kartika', 'Aceh Singkil', '08227727280', 'JNE', 'BCA - XXXXXXXX ', '2023-11-20 13:45:45', '2023-11-21 13:45:45'),
(9, 'Kartika', 'Singkohor, Aceh Singkil', '081262163214', 'JNE', 'BSI - XXXXXXXX', '2023-12-04 17:14:08', '2023-12-05 17:14:08'),
(10, 'Kartika', 'Singkohor, Aceh Singkil', '081262163214', 'JNE', 'BSI - XXXXXXXX', '2023-12-04 17:22:59', '2023-12-05 17:22:59');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_barang`, `nama_barang`, `jumlah`, `harga`, `pilihan`) VALUES
(14, 8, 22, 'Kemeja Lengan Pendek Pria', 1, 200000, ''),
(15, 9, 30, 'Sendal Tali', 1, 130000, ''),
(16, 10, 29, 'Rok Lilit', 1, 60000, '');

--
-- Triggers `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN 
	UPDATE tb_barang set STOK = STOK-NEW.jumlah WHERE id_barang = NEW.id_barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'Admin', 'admin', 'admin', 1),
(5, 'User', 'user', 'user', 2),
(6, 'Kartika', 'Kartika', 'tika2002', 2),
(7, 'Kartika', 'Kartika', 'tika2002', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
