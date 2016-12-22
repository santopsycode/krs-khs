-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 22 Des 2016 pada 01.33
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwd`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `niy` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`niy`, `nama`) VALUES
('0006027001', 'Eko Aribowo, S.T., M.Kom'),
('0014107301', 'Ali Tarmuji, S.T., M. Cs'),
('0015118001', 'Fiftin Noviyanto, S.T., M. Cs'),
('0017107601', 'Farida Sulistyorini, S.T.'),
('0019087601', 'Nur Rochmah Dyah Pujiastuti, S.T, M.Kom.'),
('0507087202', 'Rusydi Umar, S.T., M.T, Ph.D.'),
('0512078304', 'Herman Yuliansyah, S.T., M. Eng'),
('060150841', 'Adhi Prahara, S.Si., M.Cs.'),
('060150842', 'Dewi Pramudi Ismi, S.T., M.CompSc'),
('60010308', 'Sri Handayaningsih, S.T., M.T.'),
('60010314', 'Taufik Ismail, S.T., M. Cs'),
('60020388', 'Sri Winiarti, S.T., M. Cs'),
('60030475', 'Drs. Tedy Setiadi, M.T'),
('60030476', 'Ardiansyah, S.T., M. Cs'),
('60030479', 'Muhammad Aziz, S.T., M. Cs'),
('60030480', 'Ir. Ardi Pujiyanta, M. T.'),
('60040496', 'Murinto, S.Si., M. Kom'),
('60040497', 'Dewi Soyusiawaty, S.T., M.T'),
('60090586', 'Arfiani Nur Khusna, S.T., M.Kom.'),
('60090587', 'Lisna Zahrotun S.T.'),
('60110647', 'Anna Hendri Soleliza Jones, S. Kom'),
('60130756', 'Yana Hendriana, S.T., M.Eng.'),
('60130757', 'Andri Pranolo, S.Kom., M. Cs'),
('60160863', 'Ahmad Azhari, S.Kom., M.Eng.'),
('60160865', 'Widhia Oktoeberza KZ., S.T., M.Eng.'),
('60160952', 'Supriyanto, S.T., M.T.'),
('60160978', 'Dwi Normawati, S.T., M.Eng.'),
('60160979', 'Jefree Fahana, ST., M.Kom.'),
('60160980', 'Nuril Anwar, S.T.,M.Kom'),
('60910095', 'Drs. Wahyu Pujiyono, M. Kom'),
('60960147', 'Mushlihudin, S.T., M.T.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `kelas` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `kelas`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(4, 'D'),
(5, 'E'),
(6, 'F'),
(7, 'G');

-- --------------------------------------------------------

--
-- Struktur dari tabel `krs`
--

CREATE TABLE `krs` (
  `id_krs` int(11) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `id_makul` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `krs`
--

INSERT INTO `krs` (`id_krs`, `nim`, `id_makul`) VALUES
(1, '1400018001', 99),
(19, '1400018009', 1),
(20, '1400018009', 3),
(21, '1400018009', 2),
(22, '1400018009', 4),
(23, '1400018009', 5),
(24, '1400018009', 8),
(25, '1400018009', 32);

-- --------------------------------------------------------

--
-- Struktur dari tabel `makul`
--

CREATE TABLE `makul` (
  `id_makul` int(11) NOT NULL,
  `makul` varchar(50) NOT NULL,
  `sks` int(3) NOT NULL,
  `pengampu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `makul`
--

INSERT INTO `makul` (`id_makul`, `makul`, `sks`, `pengampu`) VALUES
(1, 'Dasar-Dasar Pemrograman', 3, 'Fiftin Noviyanto, S.T., M. Cs'),
(2, 'Teori Bahasa Otomata', 3, 'Drs. Wahyu Pujiyono, M. Kom'),
(3, 'Basis Data', 3, '	\nDrs. Tedy Setiadi, M.T'),
(4, 'Logika Informatika', 3, 'Drs. Wahyu Pujiyono, M. Kom\n'),
(5, 'Keamanan Komputer', 3, 'Eko Aribowo, S.T., M.Kom'),
(6, 'Statistika Informatika', 3, 'Herman Yuliansyah, S.T., M. Eng'),
(7, 'Komunikasi Interpersonal', 3, 'Herman Yuliansyah, S.T., M. Eng'),
(8, 'Aljabar Linear & Matriks', 3, 'Drs. Wahyu Pujiyono, M. Kom\n'),
(9, 'Komunikasi Data & Jaringan Komputer', 3, 'Herman Yuliansyah, S.T., M. Eng'),
(10, 'Pemrograman Beorientasi Objek', 3, 'Herman Yuliansyah, S.T., M. Eng'),
(11, 'Kalkulus Informatika', 3, '	\nDrs. Tedy Setiadi, M.T'),
(12, 'Komunikasi Interpersonal', 3, 'Eko Aribowo, S.T., M.Kom'),
(13, 'Algoritma dan Pemrograman', 3, 'Drs. Wahyu Pujiyono, M. Kom\n'),
(14, 'Bahasa Indonesia', 3, '	\nDrs. Tedy Setiadi, M.T'),
(15, 'Bahasa Inggris Informatika', 3, 'Drs. Wahyu Pujiyono, M. Kom\n'),
(16, 'Bahasa Inggris Profesional', 3, '	\nDrs. Tedy Setiadi, M.T'),
(17, 'Data Mining', 3, 'Eko Aribowo, S.T., M.Kom'),
(18, 'Etika Profesi', 3, 'Herman Yuliansyah, S.T., M. Eng'),
(19, 'Forensik Digital', 3, 'Eko Aribowo, S.T., M.Kom'),
(20, 'Grafika Komputer', 3, '	\nDrs. Tedy Setiadi, M.T'),
(21, 'Interaksi Manusia dan Komputer', 3, 'Drs. Wahyu Pujiyono, M. Kom\n'),
(22, 'Pemrograman Mobile', 3, 'Herman Yuliansyah, S.T., M. Eng'),
(23, 'Pemrograman Paralel', 3, 'Eko Aribowo, S.T., M.Kom'),
(24, 'Pemrograman Visual', 3, 'Herman Yuliansyah, S.T., M. Eng'),
(25, 'Pemrograman Web', 3, 'Fiftin Noviyanto, S.T., M. Cs'),
(26, 'Pemrograman Web Dinamis', 3, 'Fiftin Noviyanto, S.T., M. Cs'),
(27, 'Pendidikan Kwarganegaraan', 3, 'Drs. Wahyu Pujiyono, M. Kom\n'),
(28, 'Pengantar Multimedia', 3, 'Herman Yuliansyah, S.T., M. Eng'),
(29, 'Pengantar Sistem Komputer', 3, 'Herman Yuliansyah, S.T., M. Eng'),
(30, 'Pengantar Teknologi Informasi', 3, 'Eko Aribowo, S.T., M.Kom'),
(32, 'osas', 2, 'osas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mhs`
--

CREATE TABLE `mhs` (
  `nim` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `prodi` varchar(50) DEFAULT NULL,
  `fakultas` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mhs`
--

INSERT INTO `mhs` (`nim`, `nama`, `prodi`, `fakultas`) VALUES
(1300018015, 'Harbiyana Uyun Maruf', 'Teknik Inomatika', 'Fakultas Teknologi Industri'),
(1400018001, 'Oktaviyanto Rizal Chang', 'Teknik Inomatika', 'Fakultas Teknologi Industri'),
(1400018003, 'Aji Puwariyanto', 'Teknik Inomatika', 'Fakultas Teknologi Industri'),
(1400018004, 'Dimas Wahyu Pribadi', 'Teknik Inomatika', 'Fakultas Teknologi Industri'),
(1400018005, 'Herwin Wibowo', 'Teknik Inomatika', 'Fakultas Teknologi Industri'),
(1400018006, 'Syaripudin Khairil Anwar', 'Teknik Inomatika', 'Fakultas Teknologi Industri'),
(1400018008, 'Arimby Kusuma Wardani', 'Teknik Inomatika', 'Fakultas Teknologi Industri'),
(1400018009, 'Tri Susanto Saputro', 'Teknik Inomatika', 'Fakultas Teknologi Industri'),
(1400018012, 'Mackands Leonardo Oktano', 'Teknik Inomatika', 'Fakultas Teknologi Industri'),
(1400018014, 'Dian Hafsari', 'Teknik Inomatika', 'Fakultas Teknologi Industri'),
(1400018016, 'Muhammad Rasyid Ridho', 'Teknik Inomatika', 'Fakultas Teknologi Industri'),
(1400018017, 'Dedy Saputra', 'Teknik Inomatika', 'Fakultas Teknologi Industri'),
(1400018019, 'Jundy Islami', 'Teknik Inomatika', 'Fakultas Teknologi Industri'),
(1400018021, 'Candra Ariwiyanto', 'Teknik Inomatika', 'Fakultas Teknologi Industri'),
(1400018023, 'Wahyu Ardianto', 'Teknik Inomatika', 'Fakultas Teknologi Industri'),
(1400018024, 'Ifansjah Putra', 'Teknik Inomatika', 'Fakultas Teknologi Industri'),
(1400018025, 'Windy Shela Ramadhani', 'Teknik Inomatika', 'Fakultas Teknologi Industri'),
(1400018026, 'Farradz Agam Alhammidana', 'Teknik Inomatika', 'Fakultas Teknologi Industri'),
(1400018029, 'Nandatama Eda Pradana', 'Teknik Inomatika', 'Fakultas Teknologi Industri'),
(1400018031, 'Sendy Yulianto', 'Teknik Inomatika', 'Fakultas Teknologi Industri'),
(1400018032, 'Adi Romansa', 'Teknik Inomatika', 'Fakultas Teknologi Industri'),
(1400018033, 'Amirul Putra Justicia', 'Teknik Inomatika', 'Fakultas Teknologi Industri'),
(1400018035, 'Ibnu Sulistiyo', 'Teknik Inomatika', 'Fakultas Teknologi Industri'),
(1400018036, 'Tegar Putra Kurniawan', 'Teknik Inomatika', 'Fakultas Teknologi Industri'),
(1400018038, 'Siti Soia Rani', 'Teknik Inomatika', 'Fakultas Teknologi Industri'),
(1400018040, 'Muhammad Arip', 'Teknik Inomatika', 'Fakultas Teknologi Industri'),
(1400018041, 'Nita Hildayanti', 'Teknik Inomatika', 'Fakultas Teknologi Industri'),
(1400018042, 'Muhammad Ichwan Anshory', 'Teknik Inomatika', 'Fakultas Teknologi Industri'),
(1400018043, 'Mira Novita Maharani', 'Teknik Inomatika', 'Fakultas Teknologi Industri'),
(1400018048, 'Muhammad Rizky Fauzi', 'Teknik Inomatika', 'Fakultas Teknologi Industri'),
(1400018049, 'Ade Darma Ariawan', 'Teknik Inomatika', 'Fakultas Teknologi Industri'),
(1400018050, 'M Yusu Wibisono', 'Teknik Inomatika', 'Fakultas Teknologi Industri'),
(1400018111, 'pastur ', 'satanis ', 'ortodocs ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `nim` varchar(11) NOT NULL,
  `id_makul` int(11) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `nim`, `id_makul`, `nilai`) VALUES
(1, '1400018009', 19, 78),
(2, '1400018009', 22, 87);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama`, `username`, `password`, `level_user`) VALUES
(1, 'Nama Dosen', 'dosen', 'ce28eed1511f631af6b2a7bb0a85d636', 'dosen'),
(2, 'Nama Mahasiswa', 'mhs', '0357a7592c4734a8b1e12bc48e29e9e9', 'mahasiswa'),
(3, 'nama tu', 'tu', 'b6b4ce6df035dcfaa26f3bc32fb89e6a', 'tu'),
(4, 'santo', '1400018009', '5b1d8225eeff0fab8a87cc15d689c5cc', 'mahasiswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`niy`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `krs`
--
ALTER TABLE `krs`
  ADD PRIMARY KEY (`id_krs`);

--
-- Indexes for table `makul`
--
ALTER TABLE `makul`
  ADD PRIMARY KEY (`id_makul`);

--
-- Indexes for table `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `krs`
--
ALTER TABLE `krs`
  MODIFY `id_krs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `makul`
--
ALTER TABLE `makul`
  MODIFY `id_makul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
