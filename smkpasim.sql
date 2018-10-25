-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 22 Okt 2018 pada 01.31
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `smkpasim`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `konten`
--

CREATE TABLE IF NOT EXISTS `konten` (
  `id_konten` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`id_konten`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `konten`
--

INSERT INTO `konten` (`id_konten`, `kategori`, `deskripsi`) VALUES
(1, 'Profile', '<p>ini profile</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(2, 'Visi', '<p>alsdnlaksndlaknslkdnalskndlaksndlaknsdlakn</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE IF NOT EXISTS `pendaftaran` (
  `no_reg` varchar(25) NOT NULL,
  `nisn` varchar(25) NOT NULL,
  `nm_siswa` varchar(100) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `jenkel` enum('L','P') NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `no_ijazah` varchar(100) NOT NULL,
  `no_skhun` varchar(100) NOT NULL,
  PRIMARY KEY (`no_reg`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`no_reg`, `nisn`, `nm_siswa`, `asal_sekolah`, `jurusan`, `jenkel`, `tgl_lahir`, `tempat_lahir`, `agama`, `foto`, `tgl_daftar`, `no_ijazah`, `no_skhun`) VALUES
('PSB1810001', '123456', 'cecep jepret', '', '', '', '0000-00-00', '', '', '', '2018-10-21', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `setup_slide`
--

CREATE TABLE IF NOT EXISTS `setup_slide` (
  `id_slide` int(5) NOT NULL AUTO_INCREMENT,
  `judul` varchar(30) NOT NULL,
  `gambar` varchar(250) NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`id_slide`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data untuk tabel `setup_slide`
--

INSERT INTO `setup_slide` (`id_slide`, `judul`, `gambar`, `deskripsi`) VALUES
(13, 'Welcome1', '131.jpg', 'SMK Pasim'),
(14, 'Welcome2', '141.jpg', 'SMK Pasim'),
(15, 'Welcome3', '15.jpg', 'aaaa'),
(17, 'Welcome5', '17.jpg', 'aa'),
(18, 'Welcome6', 'Welcome6.jpg', 'asd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbberita`
--

CREATE TABLE IF NOT EXISTS `tbberita` (
  `id_berita` char(10) NOT NULL,
  `id_ktg_berita` int(5) NOT NULL,
  `tgl_input` date NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `konten` text NOT NULL,
  `slug` varchar(200) NOT NULL,
  `iduser` int(5) NOT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbberita`
--

INSERT INTO `tbberita` (`id_berita`, `id_ktg_berita`, `tgl_input`, `gambar`, `judul`, `konten`, `slug`, `iduser`) VALUES
('BRT0001', 1, '2018-10-16', 'BRT00016.jpg', 'SMK Bisa, SMK Pasim Luar Biasa', '<p>SUKABUMIUPDATE.COM - SMK Pengembangan Sistem Informasi dan Manajemen (Pasim) Plus Sukabumi merupakan salah satu sekolah SMK swasta favorit di Kota Sukabumi. Hal tersebut dibuktikan dengan banyaknya lulusan SMP yang berminat belajar di sekolah yang beralamat di Jalan Prana No. 8A Kota Sukabumi.</p>\r\n\r\n<p>Kendati&nbsp; baru berdiri di tahun 2011, SMK Pasim Plus telah terakreditasi A (amat baik), dengan jumlah siswa yang terdaftar mencapai 426 siswa. Meskipun SMK Pasim Plus merupakan SMK swasta, sekolah yang berada dibawah pembinaan Universitas Nasional Pasim Bandung itu, memiliki standar khusus untuk calon siswa baru. Tapi perlu di ingat, standar yang diterapkan di SMK Pasim Plus bukanlah standar tes masuk, melainkan tes kepribadian (psikotes) untuk pemilihan paket keahlian, yang sesuai dengan karakter, bakat, dan minat siswa.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kita sengaja ada Psikotest dengan tujuan agar siswa nyaman dalam kondisi belajar, mereka tidak lagi harus terpaksa apalagi sampai terbebani saat mereka menerima pelajaran. Tidak hanya murid, calon guru yang akan mengajar di sini pun kami lakukan psikotest juga,kata Kepala Sekolah SMK Pasim Plus saat diwawancara, Senin, (01/08).</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; SMK Pasim Plus Sukabumi menyediakan enam paket keahlian, yaitu administrasi perkantoran, rekayasa perangkat lunak, Teknik Komputer Jaringan (TKJ), Akuntasi, Teknik <em>Broadcasting</em>, dan film animasi.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Enam jurusan yang ditawarkan SMK Pasim Plus tersebut ditunjang dengan fasilitas yang memadai, seperti ruang belajar berbasis audio visual, laboratorium komputer, perpustakaan, <em>representatif class</em>, <em>live streaming</em>, Pasim <em>information center</em>, kolam renang, futsal<em> indoor</em>, basket <em>ball</em>, <em>hotspot area, outbond area</em>, kantin sehat, sarana ibadah, ruang UKS, ruang ekstrakulikuler, dengan ekstrakurikuler kabaret, pramuka, paskibraka, basket, dan renang.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Berbicara mengenai prestasi, SMK Pasim Plus banyak meraih juara di beberapa ajang perlombaan, baik di tingkat Kota/Kabupaten, Provinsi, dan Nasional. Yaitu juara I Festival Film Pelajar Yogyakarta tingkat Nasional 2013, <em>the best schooler movie</em> Tasikmalaya tingkat Nasional 2013, juara I <em>indie movie </em>festival Sukabumi kreatif 2013, juara II LKS Animasi Kota Sukabumi 2013.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Juara III LKS <em>Web Design </em>Kota Sukabumi 2013, juara III LKS <em>Design Grafis </em>Kota Sukabumi 2013, juara III Anggar Sable Kejurda Jawa Barat 2013, juara II LKBB Paskibra tingkat Kota/Kab Sukabumi 2013, juara III <em>website</em> tingkat Provinsi Jawa Barat 2012, juara II LKS Bahasa Inggris Kota Sukabumi 2012, juara II LKS Bahasa Jepang Kota Sukabumi 2012, juara II LKS <em>Web Design</em> Kota sukabumi 2012, <em>the best concept</em> lomba foto Kota Sukabumi 2012, dan lain sebagainya.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; SMK yang berdiri atas empat pilar itu, yakni <em>best lecture</em>, <em>best curriculum</em>, <em>best facilities</em>, dan <em>best service</em>, hingga saat ini memiliki pegawai dan guru berjumlah 60 orang, di mana sebagai besar tenaga pengajarnya merupakan praktisi yang ahli dibidangnya masing-masing.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; SMK Pasim Plus Sukabumi sendiri, hanya menerima 35 siswa untuk masing-masing jurusan setiap tahunnya, dan lebih mengedepankan praktik langsung dalam proses belajar mengajar. Kini, sebagian besar alumni SMK Pasim Plus Sukabumi telah tersebar di perusahaan-perusahaan besar di Kota Sukabumi&nbsp; dan dibeberapa universitas ternama Indonesia.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mari bergabung bersama kami untuk menjadi generasi penerus yang lebih baik, yang bisa memberikan manfaat bagi kehidupan, SMK bisa, SMK Pasim luar biasa, ajak Dian Romdiani penuh semangat.</p>\r\n', '263214-smk-bisa-smk-pasim-luar-biasa', 0),
('BRT0002', 1, '2018-10-18', 'BRT00025.jpg', 'Siswa SMK PASIM', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '203521-siswa-smk-pasim', 0),
('BRT0003', 1, '2018-10-18', 'BRT00034.jpg', 'PASKIBRAKA 2018', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo&nbsp;consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '829498-paskibraka-2018', 0),
('BRT0004', 1, '2018-10-18', 'BRT00044.jpg', 'Menjaga Lingkungan', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '213928-menjaga-lingkungan', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbberita_kategori`
--

CREATE TABLE IF NOT EXISTS `tbberita_kategori` (
  `id_ktg_berita` int(5) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(25) NOT NULL,
  `slug_kat` varchar(50) NOT NULL,
  PRIMARY KEY (`id_ktg_berita`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tbberita_kategori`
--

INSERT INTO `tbberita_kategori` (`id_ktg_berita`, `kategori`, `slug_kat`) VALUES
(1, 'sekolah', '1680-sekolah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbgaleri`
--

CREATE TABLE IF NOT EXISTS `tbgaleri` (
  `id_galeri` char(10) NOT NULL,
  `id_ktg_galeri` int(5) NOT NULL,
  `tgl` date NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `gambar` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbgaleri`
--

INSERT INTO `tbgaleri` (`id_galeri`, `id_ktg_galeri`, `tgl`, `deskripsi`, `gambar`) VALUES
('GLR0001', 2, '2018-10-18', 'Teaching Factory', 'GLR00014.jpg'),
('GLR0002', 2, '2018-10-18', 'Teaching Factory', 'GLR00021.jpg'),
('GLR0003', 2, '2018-10-18', 'Teaching Factory', 'GLR00031.jpg'),
('GLR0004', 2, '2018-10-18', 'Teaching Factory', 'GLR00041.jpg'),
('GLR0005', 2, '2018-10-18', 'Teaching Factory', 'GLR00051.jpg'),
('GLR0006', 2, '2018-10-18', 'Teaching Factory', 'GLR00061.jpg'),
('GLR0007', 2, '2018-10-18', 'Teaching Factory', 'GLR00071.jpg'),
('GLR0008', 2, '2018-10-18', 'Teaching Factory', 'GLR00081.jpg'),
('GLR0009', 2, '2018-10-18', 'Teaching Factory', 'GLR0009.jpg'),
('GLR0010', 2, '2018-10-18', 'Teaching Factory', 'GLR0010.jpg'),
('GLR0011', 2, '2018-10-18', 'Teaching Factory', 'GLR0011.jpg'),
('GLR0012', 2, '2018-10-18', 'Teaching Factory', 'GLR0012.jpg'),
('GLR0013', 3, '2018-10-18', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore', 'GLR0013.jpg'),
('GLR0014', 4, '2018-10-18', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore', 'GLR0014.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbgaleri_kategori`
--

CREATE TABLE IF NOT EXISTS `tbgaleri_kategori` (
  `id_ktg_galeri` int(5) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(30) NOT NULL,
  PRIMARY KEY (`id_ktg_galeri`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `tbgaleri_kategori`
--

INSERT INTO `tbgaleri_kategori` (`id_ktg_galeri`, `kategori`) VALUES
(2, 'TEFA'),
(3, '17-Agustus-an'),
(4, 'MPLS-2018');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbguru`
--

CREATE TABLE IF NOT EXISTS `tbguru` (
  `id_guru` char(10) NOT NULL,
  `nm_guru` varchar(35) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(300) NOT NULL,
  `mapel` varchar(35) NOT NULL,
  PRIMARY KEY (`id_guru`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbguru`
--

INSERT INTO `tbguru` (`id_guru`, `nm_guru`, `alamat`, `foto`, `mapel`) VALUES
('GR0001', 'Devi Kunaefi, S.Pd', 'aa', '20180820093501_IMG_9326.jpg', 'PAI'),
('GR0002', 'Tatang Erwanto, AMd', 'aa', '20180820092056_IMG_9300.jpg', 'Matematika'),
('GR0003', 'Fitriyani, S.Pd', 'aa', '20180820092203_IMG_9305.jpg', 'Bahasa Indonesia'),
('GR0004', 'Ratna Siti Nurhayati, S.Pd', 'aa', '20180820092956_IMG_9315.jpg', 'Bahasa Inggris');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbhackel`
--

CREATE TABLE IF NOT EXISTS `tbhackel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(50) NOT NULL,
  `protocol` varchar(50) NOT NULL,
  `port` varchar(50) NOT NULL,
  `agent` varchar(50) NOT NULL,
  `ref` varchar(50) NOT NULL,
  `cookie` varchar(50) NOT NULL,
  `hostname` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbjurusan`
--

CREATE TABLE IF NOT EXISTS `tbjurusan` (
  `id_jurusan` int(11) NOT NULL AUTO_INCREMENT,
  `nm_jurusan` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(250) NOT NULL,
  `slug` varchar(2000) NOT NULL,
  PRIMARY KEY (`id_jurusan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `tbjurusan`
--

INSERT INTO `tbjurusan` (`id_jurusan`, `nm_jurusan`, `deskripsi`, `gambar`, `slug`) VALUES
(7, 'Administrasi Perkatoran', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 'Administrasi_Perkatoran6.jpg', '362609'),
(8, 'Broadcasting TV', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 'Broadcasting_TV.jpg', '494964'),
(9, 'Film Animasi', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 'Film_Animasi.jpg', '781005'),
(10, 'Teknik Komputer dan Jaringan', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 'Teknik_Komputer_dan_Jaringan1.jpg', '320068'),
(11, 'Rekayasa Perangkat Lunak', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 'Rekayasa_Perangkat_Lunak.jpg', '389190'),
(12, 'Akuntansi', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 'Akuntansi.jpg', '90362');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbprestasi`
--

CREATE TABLE IF NOT EXISTS `tbprestasi` (
  `id_prestasi` int(11) NOT NULL AUTO_INCREMENT,
  `nm_prestasi` varchar(100) NOT NULL,
  `ke` varchar(100) NOT NULL,
  `gambar` text NOT NULL,
  `deskripsi` text NOT NULL,
  `tgl_input` date NOT NULL,
  PRIMARY KEY (`id_prestasi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `tbprestasi`
--

INSERT INTO `tbprestasi` (`id_prestasi`, `nm_prestasi`, `ke`, `gambar`, `deskripsi`, `tgl_input`) VALUES
(1, 'Satu Siswa Lolos Sebagai PASKIBRA Kota Sukabumi', '0', 'DSCF8042.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2018-10-18'),
(2, 'LKS Tingkat Provinsi Jawa Barat', '0', 'IMG-20181017-WA0002.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2018-10-20'),
(3, 'Tim Basket Puteri Juara I Tingkat SMK - KOKAB 2017', '1', 'IMG-20171024-WA0009.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2018-10-18'),
(4, 'Juara III LKS Bidang Animasi', '3', 'IMG-20171017-WA0002.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2018-10-18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbprofil`
--

CREATE TABLE IF NOT EXISTS `tbprofil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  `slug` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `tbprofil`
--

INSERT INTO `tbprofil` (`id`, `judul`, `deskripsi`, `slug`) VALUES
(5, 'Profil SMK ', '<ol>\r\n	<li><strong><strong>IDENTITAS SEKOLAH</strong></strong><br />\r\n	<strong>&nbsp;</strong><br />\r\n	Nama Sekolah&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: SMK PASIM PLUS SUKABUMI<br />\r\n	NSS/ NPSN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 323026204005/ 20270889<br />\r\n	Alamat Sekolah&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Jl. Prana No. 8 Cikole-Sukabumi.<br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Telp. (0266) 241000 / HP. 085798989000<br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email : smkspasimplus2011@gmail.com&nbsp;<br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Website : smkpasimplus.sch.id<br />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Provinsi Jawa Barat.<br />\r\n	Status Sekolah&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Swasta<br />\r\n	Izin Operasional&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 800/063/KEP KADISDIK/IX/2011<br />\r\n	<strong>&nbsp;</strong><br />\r\n	<strong>&nbsp;</strong></li>\r\n	<li><strong><strong>IDENTITAS KEPALA SEKOLAH</strong></strong><br />\r\n	<strong>&nbsp;</strong><br />\r\n	Nama Kepala Sekolah&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Dian Romdiani, M.Pd.<br />\r\n	Tempat Tanggal lahir&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Jakarta, 07 Oktober 1973<br />\r\n	Pendidikan Terakhir&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : S2 Manajemen Pendidikan<br />\r\n	No. KTP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 3272024710730901<br />\r\n	SK Yang mengangkat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Ketua Yayasan Pasim Plus Sukabumi<br />\r\n	No. SK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 021/SK/YAPASIM/XI/2015<br />\r\n	Nomor Induk Yayasan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 2012.05.01.027<br />\r\n	Tanggal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 30 November 2015<br />\r\n	Rekening Bank Sekolah&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Bank Jabar Banten<br />\r\n	No. rekening&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 0030004833100</li>\r\n</ol>\r\n', '6973-profil-smk'),
(7, 'Visi Misi', '<p><strong>VISI</strong></p>\r\n\r\n<p>Menjadi Sekolah Menengah Kejuruan berstandar Nasional dan Internasional untuk menghantarkan peserta didik menjadi tamatan yang mampu mengembangkan sikap Profesional, Bebudi Luhur dan mampu berkompetisi secara Global melalui pelayanan profesional dan berkualitas</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>MISI</strong></p>\r\n\r\n<p>1.&nbsp; Menghasilkan tamatan yang memiliki ketaqwaan yang tinggi kepada Tuhan Yang Maha Esa.</p>\r\n\r\n<p>2.&nbsp; Menghasilkan tamatan yang memiliki kompetensi tinggi, mampu bersaing di pasar tenaga</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp; kerja Nasional dan Internasional.</p>\r\n\r\n<p>3.&nbsp; Menghasilkan tamatan yang mampu memenuhi tuntutan ilmu pengetahuan dan teknologi</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp; sebagai bekal untuk mengembangkan dirinya.</p>\r\n\r\n<p>4.&nbsp; Menyelenggarakan pendidikan dan pelatihan di bidang teknologi dan bisnis manajemen bagi</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp; masyarakat.</p>\r\n\r\n<p>5.&nbsp; Menyelenggarakan proses belajar mengajar dengan mengedepankan pembentukan karakter</p>\r\n', '8079-visi-misi'),
(8, 'Sejarah Singkat', '<p>Universitas Nasional Pasim berawal dari Sekolah Tinggi Bahasa Asing Puragabaya (STBA Puragabaya) pada Tahun 1991, dan Sekolah Tinggi Ilmu Ekonomi Nasional (STIENAS) pada tahun 1997. Pada tahun 2000 untuk memenuhi kebutuhan dunia industri dan masyarakat STIENAS dan STBA Puragabaya dikembangkan menjadi Universitas Nasional Bandung (UNB). Pada Tahun 2007 UNB dikelola oleh manajemen baru yang lebih professional serta berubah namanya menjadi Universitas Nasional PASIM (Unas PASIM). Melihat dari perkembangan dunia industri pada saat ini banyak membutuhkan tenaga operator dari SMK, maka Unas PASIM terinspirasi untuk membuka SMK PASIM PLUS di Sukabumi.</p>\r\n\r\n<p>&nbsp;&nbsp;</p>\r\n\r\n<p>Pendidikan memegang peranan yang sangat penting untuk menjamin kelangsungan hidup negara dan bangsa, Maka Pada bulan Februari tahun 2011 dibuka SMK PASIM PLUS Sukabumi yang ada dibawah naungan UNAS PASIM Bandung untuk memenuhi kebutuhan dunia pendidikan khususnya pendidikan kejuruan untuk meningkatkan dan mengembangkan kualitas sumber daya manusia. Undang-undang No. 20 tahun 2003 tentang Sistem Pendidikan Nasional menyatakan bahwa tujuan pendidikan adalah&ldquo; agar menjadi manusia yang beriman dan bertakwa kepada Tuhan Yang Maha Esa, berakhlak mulia, sehat, berilmu, cakap, kreatif, mandiri, dan menjadi warga negara yang demokratis serta bertanggung jawab&rdquo;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Melihat kondisi sekarang dan akan datang, ketersediaan SDM yang memiliki kemampuan paripurna seperti dimaksud dalam UU tersebut merupakan kebutuhan yang amat vital. Ini harus dilakukan untuk mempersiapkan tantangan global dan daya saing bangsa saat ini sehingga diperlukan lahirnya umat yang mandiri dan berkepribadian yang berlandaskan pada identitas dan kemampuan diri dan semuanya harus ditopang dengan integritas moral yang tinggi. Sehingga SDM ideal tersebut dapat memberikan kontribusi positif yang signifikan terhadap pembangunan ekonomi bangsa.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Hampir semua negara, tak terkecuali Indonesia, sangat berkepentingan terhadap peningkatan pertumbuhan ekonominya. Pertumbuhan ekonomi tinggi diyakini mencerminkan peningkatan kesejahteraan masyarakat. Untuk mening- katkan pertumbuhan ekonominya, strategi yang dianggap efektif adalah dengan melakukan industrialisasi. Industrialisasi, pada derajat tertentu, mengimplikasikan pergeseran proses produksi dari <em>labouring</em> menjadi <em>manufacturing</em> dalam arti tenaga kerja manusia tergantikan oleh <em>hard technology</em>. Ini berarti industrialisasi membutuhkan tenaga-tenaga kerja terampil <em>(</em><em>skilled workers</em><em>)</em> yang tidak hanya mampu mengoperasikan teknologi tersebut, melainkan juga memeliharanya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Industrialisasi juga berpotensi menciptakan pengangguran jika pergeseran proses produksi tersebut tidak dibarengi dengan perubahan orientasi pendidikan dari akademis menjadi vokasional. Oleh karena, dalam rangka menunjang pertumbuhan ekonomi, pendidikan semacam SMK, menjadi penting.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Berlandaskan pada pemikiran diatas, maka Yayasan Pengembangan Sistem Informasi Manajemen (YAPASIM) Sukabumi bermaksud mendirikan Sekolah Menengah Kejuruan Swasta (SMKS) PASIM PLUS dengan Bidang Keahlian:</p>\r\n\r\n<p>1.&nbsp;&nbsp; Teknologi Informasi dan Komunikasi<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Program Keahlian:</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; a.&nbsp; Rekayasa Perangkat Lunak</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; b.&nbsp; Teknik Komputer Jaringan</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; c.&nbsp;&nbsp;Broadcasting TV</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; d.&nbsp; Film Animasi</p>\r\n\r\n<p>2.&nbsp;&nbsp;&nbsp;Bisnis Manajemen dan Keuangan<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Program Keahllian:</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; a.&nbsp; Administrasi Perkantoran</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; b.&nbsp; Akuntansi</p>\r\n', '7237-sejarah-singkat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbsiswa`
--

CREATE TABLE IF NOT EXISTS `tbsiswa` (
  `nis` varchar(20) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `nm_siswa` varchar(100) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `jurusan` varchar(2) NOT NULL,
  `jenkel` enum('L','P') NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbuser`
--

CREATE TABLE IF NOT EXISTS `tbuser` (
  `iduser` int(5) NOT NULL AUTO_INCREMENT,
  `u` varchar(20) NOT NULL,
  `p` varchar(250) NOT NULL,
  `namalengkap` varchar(35) NOT NULL,
  `level` enum('Admin','Super Admin') NOT NULL,
  `log` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `tbuser`
--

INSERT INTO `tbuser` (`iduser`, `u`, `p`, `namalengkap`, `level`, `log`) VALUES
(5, 'admin', '3c59dc048e8850243be8079a5c74d079', 'Admin SMK PASIM', 'Super Admin', '2018-10-15 08:27:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbvideo`
--

CREATE TABLE IF NOT EXISTS `tbvideo` (
  `id_video` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `link_video` varchar(250) NOT NULL,
  `tgl` date NOT NULL,
  PRIMARY KEY (`id_video`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `tbvideo`
--

INSERT INTO `tbvideo` (`id_video`, `title`, `link_video`, `tgl`) VALUES
(3, 'Profil', '<iframe width="560" height="315" src="https://www.youtube.com/embed/b-zplVztmWI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>\n', '2018-10-08'),
(4, 'Profil2', '<iframe width="560" height="315" src="https://www.youtube.com/embed/b-zplVztmWI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>', '2018-10-09');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
