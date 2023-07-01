--
-- Database: `konekdb`
--

-- ------------------------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`nama` VARCHAR(50) NOT NULL,
	`alamat` TEXT NOT NULL,
	`pekerjaan` VARCHAR(50) NOT NULL,
	PRIMARY KEY(`id`)
)	ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `alamat`, `pekerjaan`) VALUES
(1, 'Andi', 'Surabaya', 'Web Programmer'),
(2, 'Santoso', 'Jakarta', 'Web Designer'),
(6, 'Samsul', 'Sumedang', 'Pegawai');