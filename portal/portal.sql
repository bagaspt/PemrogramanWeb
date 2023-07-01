-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2023 at 04:07 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `list_admin`
--

CREATE TABLE `list_admin` (
  `user_id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_admin`
--

INSERT INTO `list_admin` (`user_id`, `username`, `password`, `nama_lengkap`, `gambar`) VALUES
(1, 'admin', 'admin', 'Administrator', 'img/admin.png'),
(2, 'bagas', 'bagas', 'Bagas Saputra', 'img/bagas.png');

-- --------------------------------------------------------

--
-- Table structure for table `list_dosen`
--

CREATE TABLE `list_dosen` (
  `id` int(11) NOT NULL,
  `nip` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(2) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `email` varchar(75) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_dosen`
--

INSERT INTO `list_dosen` (`id`, `nip`, `nama`, `jk`, `telp`, `email`, `gambar`) VALUES
(1, '2005031', 'Andi Hasad, ST, M.Kom', 'L', '081284208023', 'andi.hasad@lecturer.paramadina.ac.id', 'img/a.png'),
(2, '2007013', 'Hadi Utomo, M.EngSc', 'L', '082112102555', 'hadi.utomo@lecturer.paramadina.ac.id', 'img/h.png'),
(3, '2008074', 'Harry T.Y. Achsan', 'L', '081808540094', 'harry.achsan@paramadina.ac.id', 'img/h.png'),
(4, '2008092', 'Ivonne Sartika Mangula', 'P', '081234567890', 'ivonne.mangula@paramadina.ac.id', 'img/i.png'),
(5, '2013025', 'Meikhal Firmansyah, M.T.I', 'L', '085718059180', 'meikhal@paramadina.ac.id', 'img/m.png'),
(6, '2017034', 'Muhammad Iqbal Akbar M.Sc.Eng, MBA', 'L', '08122075589', 'iqbal.akbar@lecturer.paramadina.ac.id', 'img/m.png'),
(7, '2017057', 'Mushliha, M.Si.', 'P', '082172974266', 'mushliha@lecturer.paramadina.ac.id', 'img/m.png');

-- --------------------------------------------------------

--
-- Table structure for table `list_matkul`
--

CREATE TABLE `list_matkul` (
  `id` int(11) NOT NULL,
  `kode` varchar(25) NOT NULL,
  `nama_mk` varchar(50) NOT NULL,
  `dosen` varchar(50) NOT NULL,
  `sks` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_matkul`
--

INSERT INTO `list_matkul` (`id`, `kode`, `nama_mk`, `dosen`, `sks`) VALUES
(1, '222221030203B', 'Basis Data', 'Harry T.Y. Achsan', 3),
(2, '222181030402B', 'Matematika Diskrit', 'Mushliha, M.Si.', 3),
(3, '222181030403A', 'Pemrograman Web', 'Meikhal Firmansyah, M.T.I', 3),
(4, '222181030404B', 'Sistem Keamanan', 'Hadi Utomo, M.EngSc', 3),
(5, '222181030405B', 'Sistem Operasi', 'Andi Hasad, ST, M.Kom', 3),
(6, '222181030406A', 'Struktur Data', 'Ivonne Sartika Mangula', 3),
(7, '222181001008E', 'Teknik Presentasi', 'Muhammad Iqbal Akbar, M.Sc.Eng, MBA', 2);

-- --------------------------------------------------------

--
-- Table structure for table `list_mhs`
--

CREATE TABLE `list_mhs` (
  `id` int(11) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(2) NOT NULL,
  `prodi` varchar(30) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `email` varchar(75) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_mhs`
--

INSERT INTO `list_mhs` (`id`, `nim`, `nama`, `jk`, `prodi`, `telp`, `email`, `gambar`) VALUES
(1, '121103019', 'Adelia Puspita Saraswati', 'P', 'Teknik Informatika', '089652137823', 'adelia.saraswati@students.paramadina.ac.id', 'img/a.png'),
(2, '121203003', 'Adnan Nuur Bachtiar', 'L', 'Teknik Informatika', '081289148054', 'adnan.bachtiar@students.paramadina.ac.id', 'img/a.png'),
(3, '118203009', 'Akhmad Fathir', 'L', 'Teknik Informatika', '081214634236', 'akhmad.fathir@students.paramadina.ac.id', 'img/a.png'),
(4, '121203011', 'Akrom Hafifi', 'L', 'Teknik Informatika', '085624421032', 'akrom.hafifi@students.paramadina.ac.id', 'img/a.png'),
(5, '121103025', 'Bagas Saputra', 'L', 'Teknik Informatika', '08551998507', 'bagas.saputra@students.paramadina.ac.id', 'img/b.png'),
(6, '119103054', 'Chandra Sanjaya', 'L', 'Teknik Informatika', '085883029156', 'chandra.sanjaya@students.paramadina.ac.id', 'img/c.png'),
(7, '121103026', 'Daeng Ahmad Nurdin', 'L', 'Teknik Informatika', '089635572028', 'daeng.nurdin@students.paramadina.ac.id', 'img/d.png'),
(8, '121103018', 'Dodik Firmansah', 'L', 'Teknik Informatika', '08995871002', 'dodik.firmansah@students.paramadina.ac.id', 'img/d.png'),
(9, '121103005', 'Erwindiaztama', 'L', 'Teknik Informatika', '085161924692', 'erwindiaztama@students.paramadina.ac.id', 'img/e.png'),
(10, '121103028', 'Micko Wiyono Rohman Soleh', 'L', 'Teknik Informatika', '085881849757', 'micko.rohman@students.paramadina.ac.id', 'img/m.png'),
(11, '121203006', 'Mochammad Faisal', 'L', 'Teknik Informatika', '087776088441', 'mochammad.faisal@students.paramadina.ac.id', 'img/m.png'),
(12, '121103004', 'Muhamad Ilham Fauzan', 'L', 'Teknik Informatika', '083806913158', 'muhamad.fauzan@students.paramadina.ac.id', 'img/m.png'),
(13, '121103011', 'Sri Alia Rosidah ', 'P', 'Teknik Informatika', '087893210709', 'sri.rosidah@students.paramadina.ac.id', 'img/s.png'),
(14, '121103024', 'Yanuar Eka Saputra', 'L', 'Teknik Informatika', '082112046941', 'yanuar.saputra@students.paramadina.ac.id', 'img/y.png');

-- --------------------------------------------------------

--
-- Table structure for table `list_nilai`
--

CREATE TABLE `list_nilai` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `matkul` varchar(50) NOT NULL,
  `nilai akhir` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_nilai`
--

INSERT INTO `list_nilai` (`id`, `nama`, `matkul`, `nilai akhir`) VALUES
(1, 'Adelia Puspita Saraswati', 'Pemrograman Web', 'A'),
(2, 'Adnan Nuur Bachtiar', 'Pemrograman Web', 'A'),
(3, 'Akrom Hafifi', 'Pemrograman Web', 'A'),
(4, 'Bagas Saputra', 'Pemrograman Web', 'A'),
(5, 'Chandra Sanjaya', 'Pemrograman Web', 'A'),
(6, 'Daeng Ahmad Nurdin', 'Pemrograman Web', 'A'),
(7, 'Dodik Firmansah', 'Pemrograman Web', 'A'),
(8, 'Erwindiaztama', 'Pemrograman Web', 'A'),
(9, 'Micko Wiyono Rohman Soleh', 'Pemrograman Web', 'A'),
(10, 'Mochammad Faisal', 'Pemrograman Web', 'A'),
(11, 'Muhamad Ilham Fauzan', 'Pemrograman Web', 'A'),
(12, 'Sri Alia Rosidah ', 'Pemrograman Web', 'A'),
(13, 'Yanuar Eka Saputra', 'Pemrograman Web', 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list_admin`
--
ALTER TABLE `list_admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `list_dosen`
--
ALTER TABLE `list_dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_matkul`
--
ALTER TABLE `list_matkul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_mhs`
--
ALTER TABLE `list_mhs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_nilai`
--
ALTER TABLE `list_nilai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list_admin`
--
ALTER TABLE `list_admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `list_dosen`
--
ALTER TABLE `list_dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `list_matkul`
--
ALTER TABLE `list_matkul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `list_mhs`
--
ALTER TABLE `list_mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `list_nilai`
--
ALTER TABLE `list_nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
