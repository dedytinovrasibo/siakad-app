-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2021 at 07:23 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siakad`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `username` varchar(16) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `status` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `akunmhs`
--

CREATE TABLE `akunmhs` (
  `id` int(11) NOT NULL,
  `nim_mhs` int(15) DEFAULT NULL,
  `password_mhs` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
  `id_nilai` int(12) DEFAULT NULL,
  `id_jurusan` int(15) DEFAULT NULL,
  `nidn` bigint(25) DEFAULT NULL,
  `nip` bigint(25) DEFAULT NULL,
  `nama_dosen` varchar(25) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `tempat_lahir` varchar(25) DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `agama` varchar(15) DEFAULT NULL,
  `no_ktp` bigint(20) DEFAULT NULL,
  `no_hp` bigint(16) DEFAULT NULL,
  `no_telp` bigint(15) DEFAULT NULL,
  `email_dosen` varchar(25) DEFAULT NULL,
  `img_dosen` longblob DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `id_nilai`, `id_jurusan`, `nidn`, `nip`, `nama_dosen`, `tanggal_lahir`, `tempat_lahir`, `jenis_kelamin`, `agama`, `no_ktp`, `no_hp`, `no_telp`, `email_dosen`, `img_dosen`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 1234567245, 1234567245, 'Ratih Galuh Permatasari', '1980-05-26', 'Denpasar', 'Woman', 'Protestan', 1276387690976542, 8917637721, 3199281, 'ratigaluh@example.com', '', NULL, NULL),
(2, NULL, 2, 98773, 112233221, 'Ryujin', '1996-01-01', 'Malang', 'Woman', 'Catholic', 90983712112, 982712, 12312521, 'ryujin@gmail.com', NULL, '2021-07-21 07:26:14', '2021-07-21 07:26:14');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `id_jurusan` int(11) DEFAULT NULL,
  `id_program` int(25) DEFAULT NULL,
  `jam_ke` int(25) DEFAULT NULL,
  `jam_mulai` time DEFAULT NULL,
  `jam_selesai` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `id_jurusan`, `id_program`, `jam_ke`, `jam_mulai`, `jam_selesai`) VALUES
(1, 1, 1, 1, '08:00:00', '09:15:00'),
(2, 1, 1, 2, '09:30:00', '11:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(11) NOT NULL,
  `kode_jurusan` varchar(25) NOT NULL,
  `nama_jurusan` varchar(16) DEFAULT NULL,
  `jenjang_pendidikan` varchar(6) DEFAULT NULL,
  `status_jurusan` varchar(12) DEFAULT NULL,
  `sks_lulus` int(255) NOT NULL,
  `gelar_akademik` varchar(12) DEFAULT NULL,
  `tanggal_berdiri` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `kode_jurusan`, `nama_jurusan`, `jenjang_pendidikan`, `status_jurusan`, `sks_lulus`, `gelar_akademik`, `tanggal_berdiri`, `created_at`, `updated_at`) VALUES
(1, 'FP', 'Perhotelan', 'D1', 'Active', 33, 'A.P', '2013-01-01', NULL, NULL),
(2, 'FNP', 'Non-Perhotelan', 'D1', 'Active', 33, 'A.P', '2013-01-01', NULL, NULL),
(4, 'TB', 'Tata Boga', 'D1', 'Non-Active', 30, 'A.TB', '2020-02-22', '2021-07-20 03:52:06', '2021-07-20 03:52:06');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `nama_kelas` varchar(25) DEFAULT NULL,
  `ruangan` varchar(25) DEFAULT NULL,
  `kapasitas_kelas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `id_jurusan`, `nama_kelas`, `ruangan`, `kapasitas_kelas`) VALUES
(1, 1, 'Kelas A', 'Zoom', 40),
(2, 2, 'Kelas B', 'G Meets', 40);

-- --------------------------------------------------------

--
-- Table structure for table `krs`
--

CREATE TABLE `krs` (
  `id` int(11) NOT NULL,
  `id_matkul` int(25) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `krs`
--

INSERT INTO `krs` (`id`, `id_matkul`, `id_mahasiswa`) VALUES
(1, 1, 1),
(2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kurikulum`
--

CREATE TABLE `kurikulum` (
  `id` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `id_tahunAkademik` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `tahun_berjalan` int(11) DEFAULT NULL,
  `kode_kurikulum` varchar(10) DEFAULT NULL,
  `nama_kurikulum` varchar(255) DEFAULT NULL,
  `sks_wajib` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kurikulum`
--

INSERT INTO `kurikulum` (`id`, `id_jurusan`, `id_tahunAkademik`, `semester`, `tahun_berjalan`, `kode_kurikulum`, `nama_kurikulum`, `sks_wajib`, `updated_at`, `created_at`) VALUES
(1, 1, 1, 2, 2, 'KKL-01', 'Kurikulum Bersama', 33, '2021-07-18 20:48:00', NULL),
(2, 1, 2, 2, 4, 'KKL-02', 'Corona\'s', 140, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `id_program` int(15) DEFAULT NULL,
  `nim_mhs` varchar(25) DEFAULT NULL,
  `no_ktp_mhs` bigint(20) DEFAULT NULL,
  `no_kk_mhs` bigint(25) DEFAULT NULL,
  `no_npwp_mhs` bigint(25) DEFAULT NULL,
  `penasihat_akademik` int(11) DEFAULT NULL,
  `nama_mhs_lengkap` varchar(64) DEFAULT NULL,
  `tempat_lahir_mhs` varchar(15) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin_mhs` varchar(10) DEFAULT NULL,
  `agama_mhs` varchar(15) DEFAULT NULL,
  `warga_negara_mhs` varchar(15) DEFAULT NULL,
  `status_mhs` varchar(25) DEFAULT NULL,
  `telp_mhs` bigint(20) DEFAULT NULL,
  `no_hp_mhs` bigint(20) DEFAULT NULL,
  `email_mhs` varchar(25) DEFAULT NULL,
  `status_masuk` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `id_program`, `nim_mhs`, `no_ktp_mhs`, `no_kk_mhs`, `no_npwp_mhs`, `penasihat_akademik`, `nama_mhs_lengkap`, `tempat_lahir_mhs`, `tanggal_lahir`, `jenis_kelamin_mhs`, `agama_mhs`, `warga_negara_mhs`, `status_mhs`, `telp_mhs`, `no_hp_mhs`, `email_mhs`, `status_masuk`) VALUES
(1, 1, '030902', 3021234561231111, 3021234561231212, NULL, 1, 'Erlina Retasari', 'Jember', '2001-06-25', 'Perempuan', 'Protestan', 'WNI', 'Lajang', NULL, 85746654672, 'erlina@example.com', 'Pengalaman'),
(2, 2, '030903', 3123316341113424, 3123316341113878, NULL, 1, 'I Gusti Bagus Aditya Nusantara', 'Bungkulan', '1999-05-29', 'Laki-laki', 'Hindu', 'WNI', 'Lajang', NULL, 8181150891, 'gustibagus@example.com', 'Lulus SMA'),
(3, 1, '030904', 21313346331111442, 21313346331111880, NULL, 2, 'I Gusti Ayu Inandia Putri', 'Denpasan', '2001-11-17', 'Perempuan', 'Hindu', 'WNI', 'Lajang', NULL, 86277625364, 'gustiayu@example.com', 'Pengalaman'),
(4, 3, '030905', 2103316341113860, 2103316341114890, NULL, 2, 'Gede Sukrawan', 'Depeha', '2000-05-19', 'Laki-laki', 'Protestan', 'WNI', 'Lajang', NULL, 8121150891, 'sukrawan@exemple.com', 'Lulus SMA');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `id` int(11) NOT NULL,
  `id_dosen` int(11) DEFAULT NULL,
  `id_kurikulum` int(11) DEFAULT NULL,
  `kode_matakuliah` varchar(25) DEFAULT NULL,
  `nama_matakuliah` varchar(255) DEFAULT NULL,
  `sks_teori` int(11) DEFAULT NULL,
  `sks_praktek` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `jenis_matakuliah` varchar(25) DEFAULT NULL,
  `status_matakuliah` set('Active','Non-Active') DEFAULT NULL,
  `silabus` varchar(255) DEFAULT NULL,
  `bahan_ajar` varchar(255) DEFAULT NULL,
  `nilai_minimal_lulus` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`id`, `id_dosen`, `id_kurikulum`, `kode_matakuliah`, `nama_matakuliah`, `sks_teori`, `sks_praktek`, `semester`, `jenis_matakuliah`, `status_matakuliah`, `silabus`, `bahan_ajar`, `nilai_minimal_lulus`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'FBS01', 'Food and Beverage Service', 3, 1, 1, 'Required', 'Active', 'No', 'No', 2.5, NULL, NULL),
(2, 2, 2, 'FBS02', 'Food and Beverages Product', 1, 2, 2, 'Optional', 'Non-Active', '-', '-', 2.5, '2021-07-21 16:30:27', '2021-07-21 16:30:27');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `id_matkul` int(11) DEFAULT NULL,
  `id_mahasiswa` int(11) NOT NULL,
  `nilai_tugas` float DEFAULT NULL,
  `nilai_praktek` float DEFAULT NULL,
  `nilai_uts` float DEFAULT NULL,
  `nilai_uas` float DEFAULT NULL,
  `nilai_akhir` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id`, `id_matkul`, `id_mahasiswa`, `nilai_tugas`, `nilai_praktek`, `nilai_uts`, `nilai_uas`, `nilai_akhir`) VALUES
(1, 1, 1, 3.75, 3.85, 3.05, 3.2, NULL),
(2, 2, 1, 3.55, 3.35, 3, 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaranpendaftaran`
--

CREATE TABLE `pembayaranpendaftaran` (
  `id` int(10) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `jurusan` varchar(25) DEFAULT NULL,
  `bukti_pembayaran` varchar(225) DEFAULT NULL,
  `tanggal_pembayaran` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran_ukt`
--

CREATE TABLE `pembayaran_ukt` (
  `id` int(16) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `nim` varchar(20) DEFAULT NULL,
  `jurusan` varchar(225) DEFAULT NULL,
  `tanggal_pembayaran` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `bukti_pembayaran` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` int(10) NOT NULL,
  `NamaLengkap` int(11) NOT NULL,
  `Tanggal_Lahir` date DEFAULT NULL,
  `TempatLahir` varchar(16) DEFAULT NULL,
  `JenisKelamin` varchar(15) DEFAULT NULL,
  `JenisPekerjaan` varchar(25) DEFAULT NULL,
  `WargaNegara` varchar(25) DEFAULT NULL,
  `Status_Mahasiswa` varchar(16) DEFAULT NULL,
  `NomorHp` int(15) DEFAULT NULL,
  `Email` varchar(25) DEFAULT NULL,
  `NoKtp` int(20) DEFAULT NULL,
  `noKK` int(25) DEFAULT NULL,
  `Level_Inggris` varchar(100) DEFAULT NULL,
  `Pekerjaan_yang_diinginkan` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `kode_program` varchar(12) NOT NULL,
  `nama_program` varchar(32) NOT NULL,
  `status_program` varchar(16) NOT NULL,
  `tanggal_berdiri` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id`, `id_jurusan`, `kode_program`, `nama_program`, `status_program`, `tanggal_berdiri`, `created_at`, `updated_at`) VALUES
(1, 1, 'P1-HK', 'Housekeeping', 'Non-Active', '2017-01-02', NULL, '2021-07-20 03:59:39'),
(2, 2, 'NP1-HK', 'Housekeeping', 'Active', '2017-01-19', NULL, '2021-07-19 03:36:51'),
(3, 1, 'P2-FB', 'Food & Beverage Service', 'Active', '2017-01-02', NULL, '2021-07-19 07:18:45'),
(4, 2, 'NP2-FB', 'Food & Beverage Service', 'Non-Active', '2017-01-02', NULL, '2021-07-19 07:18:56');

-- --------------------------------------------------------

--
-- Table structure for table `tahunakademik`
--

CREATE TABLE `tahunakademik` (
  `id` int(11) NOT NULL,
  `tahun` year(4) DEFAULT NULL,
  `semester_mhs` enum('Odd','Even') NOT NULL,
  `nama_tahun` varchar(10) DEFAULT NULL,
  `batas_krs` date DEFAULT NULL,
  `pembayaran_ukt` date DEFAULT NULL,
  `perkuliahan_awal` date DEFAULT NULL,
  `perkuliahan_akhir` date DEFAULT NULL,
  `uts_awal` date DEFAULT NULL,
  `uts_akhir` date DEFAULT NULL,
  `uas_awal` date DEFAULT NULL,
  `uas_akhir` date DEFAULT NULL,
  `akhir_entry_nilai` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tahunakademik`
--

INSERT INTO `tahunakademik` (`id`, `tahun`, `semester_mhs`, `nama_tahun`, `batas_krs`, `pembayaran_ukt`, `perkuliahan_awal`, `perkuliahan_akhir`, `uts_awal`, `uts_akhir`, `uas_awal`, `uas_akhir`, `akhir_entry_nilai`, `created_at`, `updated_at`) VALUES
(1, 2020, 'Odd', 'Tahun 2021', '2021-06-30', '2021-06-13', '2021-07-05', '2021-12-24', '2021-09-06', '2021-09-18', '2021-12-13', '2022-01-07', '2021-12-24', NULL, NULL),
(2, 2020, 'Even', 'Tahun 2021', '2021-02-08', '2021-06-05', '2021-02-22', '2021-06-26', '2021-03-22', '2021-04-03', '2022-06-13', '2021-06-26', '2021-07-06', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `akunmhs`
--
ALTER TABLE `akunmhs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_nilaimhs` (`id_nilai`),
  ADD KEY `id_jurusan` (`id_jurusan`) USING BTREE;

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jurusan` (`id_jurusan`),
  ADD KEY `id_program` (`id_program`) USING BTREE;

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_jurusan` (`kode_jurusan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_kelas` (`id_jurusan`);

--
-- Indexes for table `krs`
--
ALTER TABLE `krs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_matkul` (`id_matkul`,`id_mahasiswa`),
  ADD KEY `id_mahasiswa` (`id_mahasiswa`);

--
-- Indexes for table `kurikulum`
--
ALTER TABLE `kurikulum`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_thnAkademik` (`id_tahunAkademik`),
  ADD KEY `fk_jurusan` (`id_jurusan`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_dosen` (`penasihat_akademik`),
  ADD KEY `id_program` (`id_program`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_dosen` (`id_dosen`),
  ADD KEY `fk_kurikulum` (`id_kurikulum`) USING BTREE;

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_nilai1` (`id_matkul`),
  ADD KEY `id_mahasiswa` (`id_mahasiswa`);

--
-- Indexes for table `pembayaranpendaftaran`
--
ALTER TABLE `pembayaranpendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran_ukt`
--
ALTER TABLE `pembayaran_ukt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_program` (`kode_program`) USING BTREE,
  ADD KEY `fk_jurusan` (`id_jurusan`);

--
-- Indexes for table `tahunakademik`
--
ALTER TABLE `tahunakademik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kurikulum`
--
ALTER TABLE `kurikulum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tahunakademik`
--
ALTER TABLE `tahunakademik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `FK_nilaimhs` FOREIGN KEY (`id_nilai`) REFERENCES `nilai` (`id`),
  ADD CONSTRAINT `dosen_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id`);

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `fk_jadwal1` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id`),
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`id_program`) REFERENCES `program` (`id`);

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `fk_kelas` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id`),
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id`);

--
-- Constraints for table `krs`
--
ALTER TABLE `krs`
  ADD CONSTRAINT `krs_ibfk_1` FOREIGN KEY (`id_matkul`) REFERENCES `matakuliah` (`id`),
  ADD CONSTRAINT `krs_ibfk_2` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id`);

--
-- Constraints for table `kurikulum`
--
ALTER TABLE `kurikulum`
  ADD CONSTRAINT `fk_thnAkademik` FOREIGN KEY (`id_tahunAkademik`) REFERENCES `tahunakademik` (`id`),
  ADD CONSTRAINT `kurikulum_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id`);

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `fk_dosen` FOREIGN KEY (`penasihat_akademik`) REFERENCES `dosen` (`id`),
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`id_program`) REFERENCES `program` (`id`);

--
-- Constraints for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD CONSTRAINT `fk_id_dosen` FOREIGN KEY (`id_dosen`) REFERENCES `dosen` (`id`),
  ADD CONSTRAINT `fk_kurikulum` FOREIGN KEY (`id_kurikulum`) REFERENCES `kurikulum` (`id`);

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `fk_nilai1` FOREIGN KEY (`id_matkul`) REFERENCES `matakuliah` (`id`),
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id`);

--
-- Constraints for table `program`
--
ALTER TABLE `program`
  ADD CONSTRAINT `program_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
