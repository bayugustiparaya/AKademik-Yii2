--
-- Database: `akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nama_prodi` varchar(80) NOT NULL,
  `jurusan` int(11) NOT NULL,
  `telpon` varchar(10) DEFAULT NULL
) ;

ALTER TABLE `prodi` ADD CONSTRAINT FOREIGN KEY(`jurusan`) REFERENCES `jurusan`(`id`);
