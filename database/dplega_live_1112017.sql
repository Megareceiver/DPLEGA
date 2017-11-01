-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01 Nov 2017 pada 17.50
-- Versi Server: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dplega_live`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dplega_000_lembaga`
--

CREATE TABLE IF NOT EXISTS `dplega_000_lembaga` (
  `noRegistrasi` char(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `noRt` varchar(3) DEFAULT NULL,
  `noRw` varchar(3) DEFAULT NULL,
  `kodeKelurahan` int(11) DEFAULT NULL,
  `kodeKecamatan` int(11) DEFAULT NULL,
  `kodeWilayah` int(11) DEFAULT NULL,
  `kodeProvinsi` int(11) DEFAULT NULL,
  `langitude` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) NOT NULL,
  `noTelp` varchar(16) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mediaSosial` varchar(100) DEFAULT NULL,
  `kodeBentukLembaga` int(11) NOT NULL,
  `kodeBidangGerak` int(11) DEFAULT NULL,
  `jumlahPengurus` int(11) DEFAULT NULL,
  `noNpwp` varchar(25) DEFAULT NULL,
  `visiLembaga` text,
  `misiLembaga` text,
  `organisasiAfiliasi` varchar(100) DEFAULT NULL,
  `catatanLain` text,
  `statusAktif` char(1) NOT NULL DEFAULT '1' COMMENT '0 (dihapus), 1 (aktif)',
  `urlGambarLogo` varchar(40) DEFAULT NULL,
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dplega_000_lembaga`
--

INSERT INTO `dplega_000_lembaga` (`noRegistrasi`, `nama`, `alamat`, `noRt`, `noRw`, `kodeKelurahan`, `kodeKecamatan`, `kodeWilayah`, `kodeProvinsi`, `langitude`, `latitude`, `noTelp`, `email`, `mediaSosial`, `kodeBentukLembaga`, `kodeBidangGerak`, `jumlahPengurus`, `noNpwp`, `visiLembaga`, `misiLembaga`, `organisasiAfiliasi`, `catatanLain`, `statusAktif`, `urlGambarLogo`, `createdBy`, `createdDate`, `changedBy`, `changedDate`) VALUES
('32211200001', 'Lembaga 1', 'Jl. Cibangkong 51A/120', '004', '012', 63, 16, 27, 8, '107.630627', '-6.922492', '085794867714', 'megareceiver@gmail.com', 'www.namera.com', 9, 1, 5, '', 'Menjadi pelayan publik terbaik di Indonesia', 'Melayani secara profesiona dan terus meningkatkan pelayanan terhadap publik serta melakukan evaluasi secara berkala', '', 'Test lembaga untuk percontohan', '1', '32211200001_logo.png', 'admin', '2017-10-02 00:42:57', 'admin', '2017-10-26 19:22:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dplega_000_lembaga_temp`
--

CREATE TABLE IF NOT EXISTS `dplega_000_lembaga_temp` (
  `noRegistrasi` char(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `noRt` varchar(3) DEFAULT NULL,
  `noRw` varchar(3) DEFAULT NULL,
  `kodeKelurahan` int(11) DEFAULT NULL,
  `kodeKecamatan` int(11) DEFAULT NULL,
  `kodeWilayah` int(11) DEFAULT NULL,
  `kodeProvinsi` int(11) DEFAULT NULL,
  `langitude` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) NOT NULL,
  `noTelp` varchar(16) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mediaSosial` varchar(100) DEFAULT NULL,
  `kodeBentukLembaga` int(11) NOT NULL,
  `kodeBidangGerak` int(11) DEFAULT NULL,
  `jumlahPengurus` int(11) DEFAULT NULL,
  `noNpwp` varchar(25) DEFAULT NULL,
  `visiLembaga` text,
  `misiLembaga` text,
  `organisasiAfiliasi` varchar(100) DEFAULT NULL,
  `catatanLain` text,
  `statusAktif` char(1) NOT NULL DEFAULT '1' COMMENT '0 (dihapus), 1 (aktif)',
  `urlGambarLogo` varchar(40) DEFAULT NULL,
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dplega_001_sejarah`
--

CREATE TABLE IF NOT EXISTS `dplega_001_sejarah` (
`idData` int(11) NOT NULL,
  `noRegistrasi` char(11) NOT NULL,
  `deskripsi` text,
  `tanggalDidirikan` date DEFAULT NULL,
  `kepemilikan` varchar(10) DEFAULT NULL COMMENT 'PRIBADI/KELUARGA/LEMBAGA',
  `statusTanah` varchar(20) DEFAULT NULL COMMENT 'SEWA/HAK MILIK/HAK GUNA BANGUN/HAK GUNA PAKAI/WAKAF',
  `statusSertifikasi` varchar(5) DEFAULT NULL COMMENT 'SUDAH/BELUM',
  `luasTanah` int(11) DEFAULT NULL,
  `satuanLuasTanah` varchar(20) DEFAULT NULL COMMENT 'METER PERSEGI/HEKTAR',
  `luasBangunan` int(11) DEFAULT NULL,
  `satuanLuasBangunan` varchar(20) DEFAULT NULL COMMENT 'METER PERSEGI/HEKTAR',
  `kondisiBangunan` varchar(5) DEFAULT NULL COMMENT 'RUSAK/BAIK',
  `JumlahBangunan` int(11) DEFAULT NULL,
  `statusSarana` varchar(10) DEFAULT NULL COMMENT 'ADA/TIDAK ADA',
  `statusStrukturKepengurusan` varchar(10) DEFAULT NULL COMMENT 'ADA/TIDAK ADA',
  `urlGambarStrukturKepengurusan` varchar(40) DEFAULT NULL,
  `bahasaPengantar` varchar(20) DEFAULT NULL,
  `statusSensus` varchar(5) DEFAULT NULL COMMENT 'SUDAH/BELUM',
  `statusBantuanPemerintah` varchar(5) DEFAULT NULL COMMENT 'SUDAH/BELUM',
  `kondisiGeografis` varchar(15) DEFAULT NULL COMMENT 'PANTAI/DATARAN RENDAH/DATARAN TINGGI',
  `potensiWilayah` varchar(25) DEFAULT NULL,
  `jenisWilayah` varchar(25) DEFAULT NULL,
  `catatanLain` text,
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dplega_001_sejarah`
--

INSERT INTO `dplega_001_sejarah` (`idData`, `noRegistrasi`, `deskripsi`, `tanggalDidirikan`, `kepemilikan`, `statusTanah`, `statusSertifikasi`, `luasTanah`, `satuanLuasTanah`, `luasBangunan`, `satuanLuasBangunan`, `kondisiBangunan`, `JumlahBangunan`, `statusSarana`, `statusStrukturKepengurusan`, `urlGambarStrukturKepengurusan`, `bahasaPengantar`, `statusSensus`, `statusBantuanPemerintah`, `kondisiGeografis`, `potensiWilayah`, `jenisWilayah`, `catatanLain`, `createdBy`, `createdDate`, `changedBy`, `changedDate`) VALUES
(1, '32211200001', 'Pada tahun 2017, kami mengembangkan dplega sebagai pusat data lembaga keagamaan di jawa barat', '2017-10-02', 'Pribadi', 'Hak milik', 'Sudah', 0, '', 0, '', 'Baik', 0, 'Tidak ada', 'Tidak Ada', NULL, 'Bahasa Indonesia', 'Sensu', 'Sudah', 'Daratan rendah', '', '', '', 'admin', '2017-10-02 00:45:24', 'admin', '2017-10-02 01:05:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dplega_001_sejarah_temp`
--

CREATE TABLE IF NOT EXISTS `dplega_001_sejarah_temp` (
`idData` int(11) NOT NULL,
  `noRegistrasi` char(11) NOT NULL,
  `deskripsi` text,
  `tanggalDidirikan` date DEFAULT NULL,
  `kepemilikan` varchar(10) DEFAULT NULL COMMENT 'PRIBADI/KELUARGA/LEMBAGA',
  `statusTanah` varchar(20) DEFAULT NULL COMMENT 'SEWA/HAK MILIK/HAK GUNA BANGUN/HAK GUNA PAKAI/WAKAF',
  `statusSertifikasi` varchar(5) DEFAULT NULL COMMENT 'SUDAH/BELUM',
  `luasTanah` int(11) DEFAULT NULL,
  `satuanLuasTanah` varchar(20) DEFAULT NULL COMMENT 'METER PERSEGI/HEKTAR',
  `luasBangunan` int(11) DEFAULT NULL,
  `satuanLuasBangunan` varchar(20) DEFAULT NULL COMMENT 'METER PERSEGI/HEKTAR',
  `kondisiBangunan` varchar(5) DEFAULT NULL COMMENT 'RUSAK/BAIK',
  `JumlahBangunan` int(11) DEFAULT NULL,
  `statusSarana` varchar(10) DEFAULT NULL COMMENT 'ADA/TIDAK ADA',
  `statusStrukturKepengurusan` varchar(10) DEFAULT NULL COMMENT 'ADA/TIDAK ADA',
  `urlGambarStrukturKepengurusan` varchar(40) DEFAULT NULL,
  `bahasaPengantar` varchar(20) DEFAULT NULL,
  `statusSensus` varchar(5) DEFAULT NULL COMMENT 'SUDAH/BELUM',
  `statusBantuanPemerintah` varchar(5) DEFAULT NULL COMMENT 'SUDAH/BELUM',
  `kondisiGeografis` varchar(15) DEFAULT NULL COMMENT 'PANTAI/DATARAN RENDAH/DATARAN TINGGI',
  `potensiWilayah` varchar(25) DEFAULT NULL,
  `jenisWilayah` varchar(25) DEFAULT NULL,
  `catatanLain` text,
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dplega_002_kepengurusan`
--

CREATE TABLE IF NOT EXISTS `dplega_002_kepengurusan` (
`idData` int(11) NOT NULL,
  `noRegistrasi` char(11) NOT NULL,
  `penanggungJawab` varchar(100) DEFAULT NULL,
  `jabatan` varchar(20) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `noRt` varchar(3) DEFAULT NULL,
  `noRw` varchar(3) DEFAULT NULL,
  `kodeKelurahan` int(11) DEFAULT NULL,
  `kodeKecamatan` int(11) DEFAULT NULL,
  `kodeWilayah` int(11) DEFAULT NULL,
  `kodeProvinsi` int(11) DEFAULT NULL,
  `noTelp` varchar(16) DEFAULT NULL,
  `kewarganegaraan` char(3) DEFAULT NULL COMMENT 'WNI/WNA',
  `tempatLahir` varchar(100) DEFAULT NULL,
  `tanggalLahir` date DEFAULT NULL,
  `jenisKelamin` char(1) DEFAULT NULL COMMENT 'L/P',
  `agama` varchar(10) DEFAULT NULL COMMENT 'ISLAM/KRISTEN/HINDU/BUDHA/LAINNYA',
  `jabatanLain` varchar(20) DEFAULT NULL,
  `pendidikan` varchar(50) DEFAULT NULL,
  `kompetensi` varchar(150) DEFAULT NULL,
  `catatan` text,
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dplega_002_kepengurusan`
--

INSERT INTO `dplega_002_kepengurusan` (`idData`, `noRegistrasi`, `penanggungJawab`, `jabatan`, `alamat`, `noRt`, `noRw`, `kodeKelurahan`, `kodeKecamatan`, `kodeWilayah`, `kodeProvinsi`, `noTelp`, `kewarganegaraan`, `tempatLahir`, `tanggalLahir`, `jenisKelamin`, `agama`, `jabatanLain`, `pendidikan`, `kompetensi`, `catatan`, `createdBy`, `createdDate`, `changedBy`, `changedDate`) VALUES
(1, '32211200001', 'Megantara Narapadya', NULL, 'Jl. Cibangkong 51A/120', '004', '012', 63, 16, 27, 8, '085794867714', 'WNI', 'Pemalang', '2017-03-03', 'L', 'Islam', 'T. Leader', 'S1', 'Junior Manager, Senior Programmer, Middle designer', 'Data percontohan', 'admin', '2017-10-02 00:48:46', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dplega_002_kepengurusan_temp`
--

CREATE TABLE IF NOT EXISTS `dplega_002_kepengurusan_temp` (
`idData` int(11) NOT NULL,
  `noRegistrasi` char(11) NOT NULL,
  `penanggungJawab` varchar(100) DEFAULT NULL,
  `jabatan` varchar(20) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `noRt` varchar(3) DEFAULT NULL,
  `noRw` varchar(3) DEFAULT NULL,
  `kodeKelurahan` int(11) DEFAULT NULL,
  `kodeKecamatan` int(11) DEFAULT NULL,
  `kodeWilayah` int(11) DEFAULT NULL,
  `kodeProvinsi` int(11) DEFAULT NULL,
  `noTelp` varchar(16) DEFAULT NULL,
  `kewarganegaraan` char(3) DEFAULT NULL COMMENT 'WNI/WNA',
  `tempatLahir` varchar(100) DEFAULT NULL,
  `tanggalLahir` date DEFAULT NULL,
  `jenisKelamin` char(1) DEFAULT NULL COMMENT 'L/P',
  `agama` varchar(10) DEFAULT NULL COMMENT 'ISLAM/KRISTEN/HINDU/BUDHA/LAINNYA',
  `jabatanLain` varchar(20) DEFAULT NULL,
  `pendidikan` varchar(50) DEFAULT NULL,
  `kompetensi` varchar(150) DEFAULT NULL,
  `catatan` text,
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dplega_003_usaha`
--

CREATE TABLE IF NOT EXISTS `dplega_003_usaha` (
`idData` int(11) NOT NULL,
  `noRegistrasi` char(11) NOT NULL,
  `namaUsaha` varchar(100) DEFAULT NULL,
  `jenisUsaha` int(100) DEFAULT NULL,
  `detailUsaha` text,
  `jumlahPekerja` int(11) DEFAULT NULL,
  `catatan` text,
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dplega_003_usaha_temp`
--

CREATE TABLE IF NOT EXISTS `dplega_003_usaha_temp` (
`idData` int(11) NOT NULL,
  `noRegistrasi` char(11) NOT NULL,
  `namaUsaha` varchar(100) DEFAULT NULL,
  `jenisUsaha` varchar(100) DEFAULT NULL,
  `detailUsaha` text,
  `jumlahPekerja` int(11) DEFAULT NULL,
  `catatan` text,
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dplega_005_koleksi`
--

CREATE TABLE IF NOT EXISTS `dplega_005_koleksi` (
`idData` int(11) NOT NULL,
  `noRegistrasi` char(11) NOT NULL,
  `jenisKoleksi` varchar(15) NOT NULL COMMENT 'BUKU/KITAB',
  `judulKoleksi` varchar(100) DEFAULT NULL,
  `deskripsi` text,
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dplega_005_koleksi`
--

INSERT INTO `dplega_005_koleksi` (`idData`, `noRegistrasi`, `jenisKoleksi`, `judulKoleksi`, `deskripsi`, `createdBy`, `createdDate`, `changedBy`, `changedDate`) VALUES
(1, '32211200001', 'Buku', 'The 7 Habits of Highly Effective People', '7 Kebiasaan manusia yang sangat efektif oleh Stephen R. Covey', 'admin', '2017-10-02 00:50:36', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dplega_005_koleksi_temp`
--

CREATE TABLE IF NOT EXISTS `dplega_005_koleksi_temp` (
`idData` int(11) NOT NULL,
  `noRegistrasi` char(11) NOT NULL,
  `jenisKoleksi` varchar(15) NOT NULL COMMENT 'BUKU/KITAB',
  `judulKoleksi` varchar(100) DEFAULT NULL,
  `deskripsi` text,
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dplega_006_prestasi`
--

CREATE TABLE IF NOT EXISTS `dplega_006_prestasi` (
`idData` int(11) NOT NULL,
  `noRegistrasi` char(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dplega_006_prestasi`
--

INSERT INTO `dplega_006_prestasi` (`idData`, `noRegistrasi`, `deskripsi`, `createdBy`, `createdDate`, `changedBy`, `changedDate`) VALUES
(1, '32211200001', 'Juara 1 Baca puisi lintas kecamatan', 'admin', '2017-10-02 00:51:12', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dplega_006_prestasi_temp`
--

CREATE TABLE IF NOT EXISTS `dplega_006_prestasi_temp` (
`idData` int(11) NOT NULL,
  `noRegistrasi` char(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dplega_007_visualisasiusaha`
--

CREATE TABLE IF NOT EXISTS `dplega_007_visualisasiusaha` (
`idData` int(11) NOT NULL,
  `noRegistrasi` char(11) NOT NULL,
  `urlGambar` varchar(40) NOT NULL,
  `deskripsi` text NOT NULL,
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dplega_007_visualisasiusaha_temp`
--

CREATE TABLE IF NOT EXISTS `dplega_007_visualisasiusaha_temp` (
`idData` int(11) NOT NULL,
  `noRegistrasi` char(11) NOT NULL,
  `urlGambar` varchar(40) NOT NULL,
  `deskripsi` text NOT NULL,
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dplega_008_visualisasisarana`
--

CREATE TABLE IF NOT EXISTS `dplega_008_visualisasisarana` (
`idData` int(11) NOT NULL,
  `noRegistrasi` char(11) NOT NULL,
  `urlGambar` varchar(40) NOT NULL,
  `deskripsi` text NOT NULL,
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dplega_008_visualisasisarana`
--

INSERT INTO `dplega_008_visualisasisarana` (`idData`, `noRegistrasi`, `urlGambar`, `deskripsi`, `createdBy`, `createdDate`, `changedBy`, `changedDate`) VALUES
(1, '32211200001', '32211200001_1_sapra.jpg', 'Tampak depan gedung utama', 'admin', '2017-10-02 00:46:21', NULL, NULL),
(2, '32211200001', '32211200001_2_sapra.jpg', 'Tampak dalam area belakang', 'admin', '2017-10-02 00:52:10', NULL, NULL),
(3, '32211200001', '32211200001_3_sapra.jpg', 'Area kebun dan taman rekreasi', 'admin', '2017-10-02 00:52:47', NULL, NULL),
(4, '32211200001', '32211200001_4_sapra.jpg', 'Area lobby utama', 'admin', '2017-10-02 00:53:40', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dplega_008_visualisasisarana_temp`
--

CREATE TABLE IF NOT EXISTS `dplega_008_visualisasisarana_temp` (
`idData` int(11) NOT NULL,
  `noRegistrasi` char(11) NOT NULL,
  `urlGambar` varchar(40) NOT NULL,
  `deskripsi` text NOT NULL,
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dplega_009_legalitas`
--

CREATE TABLE IF NOT EXISTS `dplega_009_legalitas` (
`idData` int(11) NOT NULL,
  `noRegistrasi` char(11) NOT NULL,
  `kodePersyaratan` char(5) NOT NULL,
  `noLegalitas` varchar(20) NOT NULL,
  `tanggalLegalitas` date NOT NULL,
  `urlFile` varchar(40) NOT NULL,
  `statusVerifikasi` char(1) NOT NULL COMMENT '0: sudah, 1: belum',
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dplega_009_legalitas`
--

INSERT INTO `dplega_009_legalitas` (`idData`, `noRegistrasi`, `kodePersyaratan`, `noLegalitas`, `tanggalLegalitas`, `urlFile`, `statusVerifikasi`, `createdBy`, `createdDate`, `changedBy`, `changedDate`) VALUES
(1, '32211200001', '1', 'C-108.HT.03.01.TH.20', '2017-10-09', '32211200001_1_legalitas.jpg', '1', '32211200001testlemb', '2017-10-02 09:00:02', 'admin', '2017-10-30 10:15:10'),
(2, '32211200001', '2', 'AHU-04422.50.10.2014', '2017-10-02', '32211200001_2_legalitas.jpg', '1', 'admin', '2017-10-02 09:10:15', 'admin', '2017-10-02 10:42:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dplega_009_legalitas_temp`
--

CREATE TABLE IF NOT EXISTS `dplega_009_legalitas_temp` (
`idData` int(11) NOT NULL,
  `noRegistrasi` char(11) NOT NULL,
  `kodePersyaratan` char(5) NOT NULL,
  `noLegalitas` varchar(20) NOT NULL,
  `tanggalLegalitas` date NOT NULL,
  `urlFile` varchar(40) NOT NULL,
  `statusVerifikasi` char(1) NOT NULL COMMENT '0: sudah, 1: belum',
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dplega_010_riwayatbantuan`
--

CREATE TABLE IF NOT EXISTS `dplega_010_riwayatbantuan` (
`idData` int(11) NOT NULL,
  `noRegistrasi` char(11) NOT NULL,
  `tahun` char(4) NOT NULL,
  `dibantuOleh` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dplega_010_riwayatbantuan`
--

INSERT INTO `dplega_010_riwayatbantuan` (`idData`, `noRegistrasi`, `tahun`, `dibantuOleh`, `deskripsi`, `createdBy`, `createdDate`, `changedBy`, `changedDate`) VALUES
(1, '32211200001', '2017', 'Setda Jabar', 'Pembangunan dplega ', 'admin', '2017-10-02 00:45:57', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dplega_010_riwayatbantuan_temp`
--

CREATE TABLE IF NOT EXISTS `dplega_010_riwayatbantuan_temp` (
`idData` int(11) NOT NULL,
  `noRegistrasi` char(11) NOT NULL,
  `tahun` char(4) NOT NULL,
  `dibantuOleh` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dplega_011_hirarkilembaga`
--

CREATE TABLE IF NOT EXISTS `dplega_011_hirarkilembaga` (
`idData` int(11) NOT NULL,
  `noRegistrasi` char(11) NOT NULL,
  `hirarki` char(1) NOT NULL COMMENT '0: parent; 1: child',
  `noRegistrasiTarget` char(11) NOT NULL,
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dplega_011_hirarkilembaga_temp`
--

CREATE TABLE IF NOT EXISTS `dplega_011_hirarkilembaga_temp` (
`idData` int(11) NOT NULL,
  `noRegistrasi` char(11) NOT NULL,
  `hirarki` char(1) NOT NULL COMMENT '0: parent; 1: child',
  `noRegistrasiTarget` char(11) NOT NULL,
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dplega_012_verifikasi`
--

CREATE TABLE IF NOT EXISTS `dplega_012_verifikasi` (
`idData` int(11) NOT NULL,
  `noRegistrasi` char(11) NOT NULL,
  `kodeVerifikasi` int(11) NOT NULL,
  `status` char(1) NOT NULL DEFAULT '0' COMMENT '0: belum, 1: sudah, 2:ubah, 3: salah',
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dplega_012_verifikasi_temp`
--

CREATE TABLE IF NOT EXISTS `dplega_012_verifikasi_temp` (
`idData` int(11) NOT NULL,
  `noRegistrasi` char(11) NOT NULL,
  `kodeVerifikasi` int(11) NOT NULL,
  `status` char(1) NOT NULL DEFAULT '0' COMMENT '0: belum, 1: sudah, 2:ubah, 3: salah',
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dplega_013_verifikasilogs`
--

CREATE TABLE IF NOT EXISTS `dplega_013_verifikasilogs` (
`idData` int(11) NOT NULL,
  `noRegistrasi` char(11) NOT NULL,
  `kode` int(11) NOT NULL,
  `type` char(1) NOT NULL COMMENT '0: legalitas, 1: lainnya',
  `catatan` varchar(255) NOT NULL,
  `statusBaca` char(1) NOT NULL DEFAULT '0',
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dplega_013_verifikasilogs_temp`
--

CREATE TABLE IF NOT EXISTS `dplega_013_verifikasilogs_temp` (
`idData` int(11) NOT NULL,
  `noRegistrasi` char(11) NOT NULL,
  `kode` int(11) NOT NULL,
  `type` char(1) NOT NULL COMMENT '0: legalitas, 1: lainnya',
  `catatan` varchar(255) NOT NULL,
  `statusBaca` char(1) NOT NULL DEFAULT '0',
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dplega_100_provinsi`
--

CREATE TABLE IF NOT EXISTS `dplega_100_provinsi` (
`idData` int(11) NOT NULL,
  `kodeProvinsi` varchar(3) NOT NULL,
  `namaProvinsi` varchar(100) NOT NULL,
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dplega_100_provinsi`
--

INSERT INTO `dplega_100_provinsi` (`idData`, `kodeProvinsi`, `namaProvinsi`, `createdBy`, `createdDate`, `changedBy`, `changedDate`) VALUES
(8, '32', 'Jawa Barat', 'admin', '2017-09-22 11:17:39', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dplega_101_wilayah`
--

CREATE TABLE IF NOT EXISTS `dplega_101_wilayah` (
`idData` int(11) NOT NULL,
  `kodeWilayah` varchar(3) NOT NULL,
  `namaWilayah` varchar(100) NOT NULL,
  `idProvinsi` int(11) NOT NULL,
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dplega_101_wilayah`
--

INSERT INTO `dplega_101_wilayah` (`idData`, `kodeWilayah`, `namaWilayah`, `idProvinsi`, `createdBy`, `createdDate`, `changedBy`, `changedDate`) VALUES
(7, '01', 'Kab Bogor', 8, 'admin', '2017-09-22 12:49:34', NULL, NULL),
(8, '02', 'Kab Sukabumi', 8, 'admin', '2017-09-22 12:49:50', NULL, NULL),
(9, '03', 'Kab Cianjur', 8, 'admin', '2017-09-22 12:50:24', NULL, NULL),
(10, '04', 'Kab Bandung', 8, 'admin', '2017-09-22 12:50:53', NULL, NULL),
(11, '05', 'Kab Garut', 8, 'admin', '2017-09-22 12:51:22', NULL, NULL),
(12, '06', 'Kab Tasikmalaya', 8, 'admin', '2017-09-22 12:51:57', NULL, NULL),
(13, '07', 'Kab Ciamis', 8, 'admin', '2017-09-22 12:52:16', NULL, NULL),
(14, '08', 'Kab Kuningan', 8, 'admin', '2017-09-22 12:52:45', NULL, NULL),
(15, '09', 'Kab Cirebon', 8, 'admin', '2017-09-22 12:53:12', NULL, NULL),
(16, '10', 'Kab Majalengka', 8, 'admin', '2017-09-22 12:53:45', NULL, NULL),
(17, '11', 'Kab Sumedang', 8, 'admin', '2017-09-22 12:56:44', NULL, NULL),
(18, '12', 'Kab Indramayu', 8, 'admin', '2017-09-22 12:57:13', NULL, NULL),
(19, '13', 'Kab Subang', 8, 'admin', '2017-09-22 12:57:43', NULL, NULL),
(20, '14', 'Kab Purwakarta', 8, 'admin', '2017-09-22 12:59:11', NULL, NULL),
(21, '15', 'Kab Karawang', 8, 'admin', '2017-09-22 12:59:35', NULL, NULL),
(22, '16', 'Kab Bekasi', 8, 'admin', '2017-09-22 13:00:08', NULL, NULL),
(23, '17', 'Kab Bandung Barat', 8, 'admin', '2017-09-22 13:00:50', NULL, NULL),
(24, '18', 'Kab Pangandaran', 8, 'admin', '2017-09-22 13:01:10', NULL, NULL),
(25, '19', 'Kota Bogor', 8, 'admin', '2017-09-22 13:02:48', NULL, NULL),
(26, '20', 'Kota Sukabumi', 8, 'admin', '2017-09-22 13:03:12', NULL, NULL),
(27, '21', 'Kota Bandung', 8, 'admin', '2017-09-22 13:03:52', NULL, NULL),
(28, '22', 'Kota Cirebon', 8, 'admin', '2017-09-22 13:04:07', NULL, NULL),
(29, '23', 'Kota Bekasi', 8, 'admin', '2017-09-22 13:04:18', NULL, NULL),
(30, '24', 'Kota Depok', 8, 'admin', '2017-09-22 13:04:28', NULL, NULL),
(31, '25', 'Kota Cimahi', 8, 'admin', '2017-09-22 13:04:41', NULL, NULL),
(32, '26', 'Kota Tasikmalaya', 8, 'admin', '2017-09-22 13:05:09', NULL, NULL),
(33, '27', 'Kota Banjar', 8, 'admin', '2017-09-22 13:05:32', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dplega_102_kecamatan`
--

CREATE TABLE IF NOT EXISTS `dplega_102_kecamatan` (
`idData` int(11) NOT NULL,
  `kodeKecamatan` varchar(3) NOT NULL,
  `namaKecamatan` varchar(100) NOT NULL,
  `idWilayah` int(11) NOT NULL,
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=155 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dplega_102_kecamatan`
--

INSERT INTO `dplega_102_kecamatan` (`idData`, `kodeKecamatan`, `namaKecamatan`, `idWilayah`, `createdBy`, `createdDate`, `changedBy`, `changedDate`) VALUES
(5, '01', 'Sukasari', 27, 'admin', '2017-09-22 13:12:16', NULL, NULL),
(6, '02', 'Coblong', 27, 'admin', '2017-09-22 13:12:40', NULL, NULL),
(7, '03', 'Babakan Ciparay', 27, 'admin', '2017-09-22 13:13:10', NULL, NULL),
(8, '04', 'Bojongloa Kaler', 27, 'admin', '2017-09-22 13:13:31', NULL, NULL),
(9, '05', 'Andir', 27, 'admin', '2017-09-22 13:13:47', NULL, NULL),
(10, '06', 'Cicendo', 27, 'admin', '2017-09-22 13:14:11', NULL, NULL),
(11, '07', 'Sukajadi', 27, 'admin', '2017-09-22 13:14:27', NULL, NULL),
(12, '08', 'Cidadap', 27, 'admin', '2017-09-22 13:15:12', NULL, NULL),
(13, '09', 'Bandung Wetan', 27, 'admin', '2017-09-22 13:16:01', NULL, NULL),
(14, '10', 'Astana Anyar', 27, 'admin', '2017-09-22 13:16:26', NULL, NULL),
(15, '11', 'Regol', 27, 'admin', '2017-09-22 13:16:41', NULL, NULL),
(16, '12', 'Batununggal', 27, 'admin', '2017-09-22 13:17:44', NULL, NULL),
(17, '13', 'Lengkong', 27, 'admin', '2017-09-22 13:18:08', NULL, NULL),
(18, '14', 'Cibeunying Kidul', 27, 'admin', '2017-09-22 13:18:41', NULL, NULL),
(19, '15', 'Bandung Kulon', 27, 'admin', '2017-09-22 13:18:55', NULL, NULL),
(20, '16', 'Kiaracondong', 27, 'admin', '2017-09-22 13:19:06', 'admin', '2017-09-22 13:20:01'),
(21, '17', 'Bojongloa Kidul', 27, 'admin', '2017-09-22 13:19:51', NULL, NULL),
(22, '18', 'Cibeunying Kaler', 27, 'admin', '2017-09-22 13:20:41', NULL, NULL),
(23, '19', 'Sumur Bandung', 27, 'admin', '2017-09-22 13:21:00', NULL, NULL),
(24, '20', 'Antapani', 27, 'admin', '2017-09-22 13:21:19', NULL, NULL),
(25, '21', 'Bandung Kidul', 27, 'admin', '2017-09-22 13:22:02', NULL, NULL),
(26, '22', 'Buahbatu', 27, 'admin', '2017-09-22 13:22:21', NULL, NULL),
(27, '23', 'Rancasari', 27, 'admin', '2017-09-22 13:22:34', NULL, NULL),
(28, '24', 'Arcamanik', 27, 'admin', '2017-09-22 13:22:55', NULL, NULL),
(29, '25', 'Cibiru', 27, 'admin', '2017-09-22 13:23:16', NULL, NULL),
(30, '26', 'Ujung Berung', 27, 'admin', '2017-09-22 13:23:32', NULL, NULL),
(31, '27', 'Gedebage', 27, 'admin', '2017-09-22 13:24:00', NULL, NULL),
(32, '28', 'Panyileukan', 27, 'admin', '2017-09-22 13:24:19', NULL, NULL),
(33, '29', 'Cinambo', 27, 'admin', '2017-09-22 13:24:40', NULL, NULL),
(34, '30', 'Mandalajati', 27, 'admin', '2017-09-22 13:25:14', NULL, NULL),
(36, '01', 'Cibinong', 7, 'admin', '2017-09-22 16:15:09', NULL, NULL),
(37, '02', 'Gunung Putri', 7, 'admin', '2017-09-22 16:15:18', NULL, NULL),
(38, '03', 'Citeureup', 7, 'admin', '2017-09-22 16:15:28', NULL, NULL),
(39, '04', 'Sukaraja', 7, 'admin', '2017-09-22 16:15:39', NULL, NULL),
(40, '05', 'Babakan Madang', 7, 'admin', '2017-09-22 16:15:47', NULL, NULL),
(41, '06', 'Jonggol', 7, 'admin', '2017-09-22 16:16:10', NULL, NULL),
(42, '07', 'Cileungsi', 7, 'admin', '2017-09-22 16:16:20', NULL, NULL),
(43, '08', 'Cariu', 7, 'admin', '2017-09-22 16:16:29', NULL, NULL),
(44, '09', 'Sukamakmur', 7, 'admin', '2017-09-22 16:16:40', NULL, NULL),
(45, '10', 'Parung', 7, 'admin', '2017-09-22 16:16:45', NULL, NULL),
(46, '11', 'Gunung Sindur', 7, 'admin', '2017-09-22 16:16:55', NULL, NULL),
(47, '12', 'Kemang', 7, 'admin', '2017-09-22 16:17:07', NULL, NULL),
(48, '13', 'Bojong Gede', 7, 'admin', '2017-09-22 16:17:16', NULL, NULL),
(49, '14', 'Leuwiliang', 7, 'admin', '2017-09-22 16:17:26', NULL, NULL),
(50, '15', 'Ciampea', 7, 'admin', '2017-09-22 16:17:40', NULL, NULL),
(51, '16', 'Cibungbulang', 7, 'admin', '2017-09-22 16:17:48', NULL, NULL),
(52, '17', 'Pamijahan', 7, 'admin', '2017-09-22 16:18:00', NULL, NULL),
(53, '18', 'Rumpin', 7, 'admin', '2017-09-22 16:18:10', NULL, NULL),
(54, '19', 'Jasinga', 7, 'admin', '2017-09-22 16:18:21', NULL, NULL),
(55, '20', 'Parung Panjang', 7, 'admin', '2017-09-22 16:18:36', NULL, NULL),
(56, '21', 'Nanggung', 7, 'admin', '2017-09-22 16:18:44', NULL, NULL),
(57, '22', 'Cigudeg', 7, 'admin', '2017-09-22 16:18:52', NULL, NULL),
(58, '23', 'Tenjo', 7, 'admin', '2017-09-22 16:18:58', NULL, NULL),
(59, '24', 'Ciawi', 7, 'admin', '2017-09-22 16:19:06', NULL, NULL),
(60, '25', 'Cisarua', 7, 'admin', '2017-09-22 16:19:17', NULL, NULL),
(61, '26', 'Megamendung', 7, 'admin', '2017-09-22 16:19:25', NULL, NULL),
(62, '27', 'Caringin', 7, 'admin', '2017-09-22 16:19:32', NULL, NULL),
(63, '28', 'Cijeruk', 7, 'admin', '2017-09-22 16:19:45', NULL, NULL),
(64, '29', 'Ciomas', 7, 'admin', '2017-09-22 16:19:55', NULL, NULL),
(65, '30', 'Dramaga', 7, 'admin', '2017-09-22 16:20:10', NULL, NULL),
(66, '31', 'Tamansari', 7, 'admin', '2017-09-22 16:20:17', NULL, NULL),
(67, '32', 'Klapanunggal', 7, 'admin', '2017-09-22 16:20:28', NULL, NULL),
(68, '33', 'Ciseeng', 7, 'admin', '2017-09-22 16:20:38', NULL, NULL),
(69, '34', 'Ranca Bungur', 7, 'admin', '2017-09-22 16:20:47', NULL, NULL),
(70, '35', 'Sukajaya', 7, 'admin', '2017-09-22 16:20:59', NULL, NULL),
(71, '36', 'Tanjungsari', 7, 'admin', '2017-09-22 16:21:27', NULL, NULL),
(72, '37', 'Tajurhalang', 7, 'admin', '2017-09-22 16:21:37', NULL, NULL),
(73, '38', 'Cigombong', 7, 'admin', '2017-09-22 16:21:45', NULL, NULL),
(74, '39', 'Leuwisadeng', 7, 'admin', '2017-09-22 16:22:01', NULL, NULL),
(75, '40', 'Tenjolaya', 7, 'admin', '2017-09-22 16:22:13', NULL, NULL),
(76, '01', 'Pelabuhanratu', 8, 'aziz', '2017-09-22 16:39:33', NULL, NULL),
(77, '02', 'Simpenan', 8, 'admin', '2017-09-27 11:21:47', NULL, NULL),
(78, '03', 'Cikakak', 8, 'admin', '2017-09-27 11:22:24', NULL, NULL),
(79, '04', 'Bantargadung', 8, 'admin', '2017-09-27 11:22:37', NULL, NULL),
(80, '05', 'Cisolok', 8, 'admin', '2017-09-27 11:22:53', NULL, NULL),
(81, '06', 'Cikidang', 8, 'admin', '2017-09-27 11:23:03', NULL, NULL),
(82, '07', 'Lengkong', 8, 'admin', '2017-09-27 11:23:18', NULL, NULL),
(83, '08', 'Jampang Tengah', 8, 'admin', '2017-09-27 11:23:29', NULL, NULL),
(84, '09', 'Warung Kiara', 8, 'admin', '2017-09-27 11:23:45', NULL, NULL),
(85, '10', 'Cikembar', 8, 'admin', '2017-09-27 11:23:58', NULL, NULL),
(86, '11', 'Cibadak', 8, 'admin', '2017-09-27 11:24:12', NULL, NULL),
(87, '12', 'Nagrak', 8, 'admin', '2017-09-27 11:24:21', NULL, NULL),
(88, '13', 'Parungkuda', 8, 'admin', '2017-09-27 11:24:38', NULL, NULL),
(89, '14', 'Bojonggenteng', 8, 'admin', '2017-09-27 11:24:49', NULL, NULL),
(90, '15', 'Parakansalak', 8, 'admin', '2017-09-27 11:25:03', NULL, NULL),
(91, '16', 'Cicurug', 8, 'admin', '2017-09-27 11:25:13', NULL, NULL),
(92, '17', 'Cidahu', 8, 'admin', '2017-09-27 11:25:29', NULL, NULL),
(93, '18', 'Kalapanunggal', 8, 'admin', '2017-09-27 11:25:45', NULL, NULL),
(94, '19', 'Kabandungan', 8, 'admin', '2017-09-27 11:25:58', NULL, NULL),
(95, '20', 'Waluran', 8, 'admin', '2017-09-27 11:26:12', NULL, NULL),
(96, '21', 'Jampang Kulon', 8, 'admin', '2017-09-27 11:26:30', NULL, NULL),
(97, '22', 'Ciemas', 8, 'admin', '2017-09-27 11:26:37', NULL, NULL),
(98, '23', 'Kalibunder', 8, 'admin', '2017-09-27 11:26:49', NULL, NULL),
(99, '24', 'Surade', 8, 'admin', '2017-09-27 11:27:04', NULL, NULL),
(100, '25', 'Cibitung', 8, 'admin', '2017-09-27 11:27:18', NULL, NULL),
(101, '26', 'Ciracap', 8, 'admin', '2017-09-27 11:27:31', NULL, NULL),
(102, '27', 'Gunung Guruh', 8, 'admin', '2017-09-27 11:27:44', NULL, NULL),
(103, '28', 'Cicantayan', 8, 'admin', '2017-09-27 11:27:54', NULL, NULL),
(104, '29', 'Cisaat', 8, 'admin', '2017-09-27 11:28:06', NULL, NULL),
(105, '30', 'Kadudampit', 8, 'admin', '2017-09-27 11:28:21', NULL, NULL),
(106, '31', 'Caringin', 8, 'admin', '2017-09-27 11:28:34', NULL, NULL),
(107, '32', 'Sukabumi', 8, 'admin', '2017-09-27 11:28:42', NULL, NULL),
(108, '33', 'Sukaraja', 8, 'admin', '2017-09-27 11:28:48', NULL, NULL),
(109, '34', 'Kebonpedes', 8, 'admin', '2017-09-27 11:29:20', NULL, NULL),
(110, '35', 'Cireunghas', 8, 'admin', '2017-09-27 11:29:28', NULL, NULL),
(111, '36', 'Sukalarang', 8, 'admin', '2017-09-27 11:29:43', NULL, NULL),
(112, '37', 'Pabuaran', 8, 'admin', '2017-09-27 11:30:00', NULL, NULL),
(113, '38', 'Purabaya', 8, 'admin', '2017-09-27 11:30:18', NULL, NULL),
(114, '39', 'Nyalindung', 8, 'admin', '2017-09-27 11:30:35', NULL, NULL),
(115, '40', 'Gegerbitung', 8, 'admin', '2017-09-27 11:30:45', NULL, NULL),
(116, '41', 'Sagaranten', 8, 'admin', '2017-09-27 11:30:54', NULL, NULL),
(117, '42', 'Curug Kembar', 8, 'admin', '2017-09-27 11:31:05', NULL, NULL),
(118, '43', 'Cidolog', 8, 'admin', '2017-09-27 11:31:28', NULL, NULL),
(119, '44', 'Cidadap', 8, 'admin', '2017-09-27 11:31:37', NULL, NULL),
(120, '45', 'Tegal Buleud', 8, 'admin', '2017-09-27 11:31:45', NULL, NULL),
(121, '46', 'Cimanggu', 8, 'admin', '2017-09-27 11:31:52', NULL, NULL),
(122, '47', 'Ciambar', 8, 'admin', '2017-09-27 11:32:14', NULL, NULL),
(123, '01', 'Cianjur', 9, 'admin', '2017-09-27 11:33:08', NULL, NULL),
(124, '02', 'Warungkondang', 9, 'admin', '2017-09-27 11:33:16', NULL, NULL),
(125, '03', 'Cibeber', 9, 'admin', '2017-09-27 11:33:29', NULL, NULL),
(126, '04', 'Cilaku', 9, 'admin', '2017-09-27 11:33:35', 'admin', '2017-09-27 11:33:49'),
(127, '05', 'Ciranjang', 9, 'admin', '2017-09-27 11:34:37', NULL, NULL),
(128, '06', 'Bojongpicung', 9, 'admin', '2017-09-27 11:34:50', NULL, NULL),
(129, '07', 'Karangtengah', 9, 'admin', '2017-09-27 11:35:03', NULL, NULL),
(130, '08', 'Mande', 9, 'admin', '2017-09-27 11:38:34', NULL, NULL),
(131, '09', 'Sukaluyu', 9, 'admin', '2017-09-27 11:38:52', NULL, NULL),
(132, '10', 'Pacet', 9, 'admin', '2017-09-27 11:38:59', NULL, NULL),
(133, '11', 'Cugenang', 9, 'admin', '2017-09-27 11:39:10', NULL, NULL),
(134, '12', 'Cikalongkulon', 9, 'admin', '2017-09-27 11:39:24', NULL, NULL),
(135, '13', 'Sukaresmi', 9, 'admin', '2017-09-27 11:39:34', NULL, NULL),
(136, '14', 'Sukanagara', 9, 'admin', '2017-09-27 11:39:44', NULL, NULL),
(137, '15', 'Campaka', 9, 'admin', '2017-09-27 11:39:54', NULL, NULL),
(138, '16', 'Takokak', 9, 'admin', '2017-09-27 11:40:05', NULL, NULL),
(139, '17', 'Kadupandak', 9, 'admin', '2017-09-27 11:40:15', NULL, NULL),
(140, '18', 'Pagelaran', 9, 'admin', '2017-09-27 11:40:32', NULL, NULL),
(141, '19', 'Tanggeung', 9, 'admin', '2017-09-27 11:40:40', NULL, NULL),
(142, '20', 'Cibinong', 9, 'admin', '2017-09-27 11:40:50', NULL, NULL),
(143, '21', 'Sindangbarang', 9, 'admin', '2017-09-27 11:41:02', NULL, NULL),
(144, '22', 'Agrabinta', 9, 'admin', '2017-09-27 11:41:14', NULL, NULL),
(145, '23', 'Cidaun', 9, 'admin', '2017-09-27 11:41:32', NULL, NULL),
(146, '24', 'Naringgul', 9, 'admin', '2017-09-27 11:41:42', NULL, NULL),
(147, '25', 'Campakamulya', 9, 'admin', '2017-09-27 11:41:55', NULL, NULL),
(148, '26', 'Cikadu', 9, 'admin', '2017-09-27 11:42:06', NULL, NULL),
(149, '27', 'Gekbrong', 9, 'admin', '2017-09-27 11:42:14', NULL, NULL),
(150, '28', 'Cipanas', 9, 'admin', '2017-09-27 11:42:24', NULL, NULL),
(151, '29', 'Cijati', 9, 'admin', '2017-09-27 11:42:31', NULL, NULL),
(152, '30', 'Leles', 9, 'admin', '2017-09-27 11:42:42', NULL, NULL),
(153, '31', 'Haurwangi', 9, 'admin', '2017-09-27 11:42:49', NULL, NULL),
(154, '32', 'Pasirkuda', 9, 'admin', '2017-09-27 11:43:05', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dplega_103_kelurahan`
--

CREATE TABLE IF NOT EXISTS `dplega_103_kelurahan` (
`idData` int(11) NOT NULL,
  `kodeKelurahan` varchar(3) NOT NULL,
  `namaKelurahan` varchar(100) NOT NULL,
  `idKecamatan` int(11) NOT NULL,
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=665 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dplega_103_kelurahan`
--

INSERT INTO `dplega_103_kelurahan` (`idData`, `kodeKelurahan`, `namaKelurahan`, `idKecamatan`, `createdBy`, `createdDate`, `changedBy`, `changedDate`) VALUES
(5, '01', 'Sukarasa', 5, 'admin', '2017-09-22 13:29:37', NULL, NULL),
(6, '02', 'Gegerkalong', 5, 'admin', '2017-09-22 13:30:28', NULL, NULL),
(7, '03', 'Isola', 5, 'admin', '2017-09-22 13:30:45', NULL, NULL),
(8, '04', 'Sarijadi', 5, 'admin', '2017-09-22 13:35:07', NULL, NULL),
(9, '01', 'Cipaganti', 6, 'admin', '2017-09-22 13:35:19', NULL, NULL),
(10, '02', 'Lebakgede', 6, 'admin', '2017-09-22 13:40:58', NULL, NULL),
(11, '03', 'Sadangserang', 6, 'admin', '2017-09-22 13:44:11', NULL, NULL),
(12, '04', 'Dago', 6, 'admin', '2017-09-22 13:44:23', NULL, NULL),
(13, '05', 'Sekeloa', 6, 'admin', '2017-09-22 13:44:37', NULL, NULL),
(14, '01', 'Babakan Ciparay', 7, 'admin', '2017-09-22 13:45:10', NULL, NULL),
(15, '02', 'Babakan', 7, 'admin', '2017-09-22 13:45:23', NULL, NULL),
(16, '03', 'Sukahaji', 7, 'admin', '2017-09-22 13:45:36', NULL, NULL),
(17, '04', 'Margahayu Utara', 7, 'admin', '2017-09-22 13:46:40', NULL, NULL),
(18, '05', 'Margasuka', 7, 'admin', '2017-09-22 13:46:53', NULL, NULL),
(19, '06', 'Cirangrang', 7, 'admin', '2017-09-22 13:47:14', NULL, NULL),
(20, '01', 'Kopo', 8, 'admin', '2017-09-22 13:47:42', NULL, NULL),
(21, '02', 'Babakan Tarogong', 8, 'admin', '2017-09-22 13:48:04', NULL, NULL),
(22, '03', 'Jamika', 8, 'admin', '2017-09-22 13:48:27', NULL, NULL),
(23, '04', 'Babakan Asih', 8, 'admin', '2017-09-22 13:49:40', NULL, NULL),
(24, '05', 'Suka Asih', 8, 'admin', '2017-09-22 13:49:53', NULL, NULL),
(25, '01', 'Maleber', 9, 'admin', '2017-09-22 13:50:08', NULL, NULL),
(26, '02', 'Dungus Cariang', 9, 'admin', '2017-09-22 13:50:25', NULL, NULL),
(27, '03', 'Ciroyom', 9, 'admin', '2017-09-22 13:50:36', NULL, NULL),
(28, '04', 'Kebon Jeruk', 9, 'admin', '2017-09-22 13:50:50', NULL, NULL),
(29, '05', 'Garuda', 9, 'admin', '2017-09-22 13:50:57', NULL, NULL),
(30, '06', 'Campaka', 9, 'admin', '2017-09-22 13:51:08', NULL, NULL),
(31, '01', 'Husen Sastranegara', 10, 'admin', '2017-09-22 13:51:36', NULL, NULL),
(32, '02', 'Arjuna', 10, 'admin', '2017-09-22 13:51:50', 'admin', '2017-09-22 13:53:54'),
(33, '03', 'Pajajaran', 10, 'admin', '2017-09-22 13:54:29', NULL, NULL),
(34, '04', 'Pasir Kaliki', 10, 'admin', '2017-09-22 13:54:49', NULL, NULL),
(35, '05', 'Pamoyanan', 10, 'admin', '2017-09-22 13:55:02', NULL, NULL),
(36, '06', 'Sukaraja', 10, 'admin', '2017-09-22 13:55:22', NULL, NULL),
(37, '01', 'Pasteur', 11, 'admin', '2017-09-22 14:44:28', NULL, NULL),
(38, '02', 'Cipedes', 11, 'admin', '2017-09-22 14:44:46', NULL, NULL),
(39, '03', 'Sukawarna', 11, 'admin', '2017-09-22 14:44:55', NULL, NULL),
(40, '04', 'Sukagalih', 11, 'admin', '2017-09-22 14:45:20', NULL, NULL),
(41, '05', 'Sukabungah', 11, 'admin', '2017-09-22 14:45:34', NULL, NULL),
(42, '01', 'Hegarmanah', 12, 'admin', '2017-09-22 14:46:14', NULL, NULL),
(43, '02', 'Ciumbuleuit', 12, 'admin', '2017-09-22 14:46:31', NULL, NULL),
(44, '03', 'Ledeng', 12, 'admin', '2017-09-22 14:46:48', NULL, NULL),
(45, '01', 'Cihapit', 13, 'admin', '2017-09-22 14:47:10', NULL, NULL),
(46, '02', 'Tamansari', 13, 'admin', '2017-09-22 14:47:20', NULL, NULL),
(47, '03', 'Citarum', 13, 'admin', '2017-09-22 14:47:35', NULL, NULL),
(48, '01', 'Karasak', 14, 'admin', '2017-09-22 14:47:55', NULL, NULL),
(49, '02', 'Nyengseret', 14, 'admin', '2017-09-22 14:48:12', NULL, NULL),
(50, '03', 'Karanganyar', 14, 'admin', '2017-09-22 14:48:45', NULL, NULL),
(51, '04', 'Panjunan', 14, 'admin', '2017-09-22 14:48:57', NULL, NULL),
(52, '05', 'Cibadak', 14, 'admin', '2017-09-22 14:49:16', NULL, NULL),
(53, '06', 'Pelindung Hewan', 14, 'admin', '2017-09-22 14:49:34', NULL, NULL),
(54, '01', 'Cigereleng', 15, 'admin', '2017-09-22 14:50:04', NULL, NULL),
(55, '02', 'Ancol', 15, 'admin', '2017-09-22 14:50:14', NULL, NULL),
(56, '03', 'Pungkur', 15, 'admin', '2017-09-22 14:50:29', NULL, NULL),
(57, '04', 'Balonggede', 15, 'admin', '2017-09-22 14:51:07', NULL, NULL),
(58, '05', 'Ciseureuh', 15, 'admin', '2017-09-22 14:51:30', NULL, NULL),
(59, '06', 'Ciateul', 15, 'admin', '2017-09-22 14:52:12', NULL, NULL),
(60, '07', 'Pasirluyu', 15, 'admin', '2017-09-22 14:52:25', NULL, NULL),
(61, '01', 'Gumuruh', 16, 'admin', '2017-09-22 14:52:47', 'admin', '2017-09-22 14:53:21'),
(62, '02', 'Maleer', 16, 'admin', '2017-09-22 14:53:33', NULL, NULL),
(63, '03', 'Cibangkong', 16, 'admin', '2017-09-22 14:53:47', NULL, NULL),
(64, '04', 'Kacapiring', 16, 'admin', '2017-09-22 14:54:01', NULL, NULL),
(65, '05', 'Kebonwaru', 16, 'admin', '2017-09-22 14:54:17', NULL, NULL),
(66, '06', 'Kebongedang', 16, 'admin', '2017-09-22 14:54:31', NULL, NULL),
(67, '07', 'Samoja', 16, 'admin', '2017-09-22 14:54:43', NULL, NULL),
(68, '08', 'Binong', 16, 'admin', '2017-09-22 14:54:51', NULL, NULL),
(69, '01', 'Cijagra', 17, 'admin', '2017-09-22 14:55:07', NULL, NULL),
(70, '02', 'Lingkar Selatan', 17, 'admin', '2017-09-22 14:55:26', NULL, NULL),
(71, '03', 'Burangrang', 17, 'admin', '2017-09-22 14:55:36', NULL, NULL),
(72, '04', 'Paledang', 17, 'admin', '2017-09-22 14:55:57', NULL, NULL),
(73, '05', 'Turangga', 17, 'admin', '2017-09-22 14:56:17', NULL, NULL),
(74, '06', 'Malabar', 17, 'admin', '2017-09-22 14:56:36', NULL, NULL),
(75, '07', 'Cikawao', 17, 'admin', '2017-09-22 14:57:05', NULL, NULL),
(76, '01', 'Padasuka', 18, 'admin', '2017-09-22 14:57:43', NULL, NULL),
(77, '02', 'Cikutra', 18, 'admin', '2017-09-22 14:57:53', NULL, NULL),
(78, '03', 'Cicadas', 18, 'admin', '2017-09-22 14:58:01', NULL, NULL),
(79, '04', 'Sukamaju', 18, 'admin', '2017-09-22 14:58:13', NULL, NULL),
(80, '05', 'Sukapada', 18, 'admin', '2017-09-22 14:58:22', NULL, NULL),
(81, '06', 'Pasirlayung', 18, 'admin', '2017-09-22 14:58:36', NULL, NULL),
(82, '01', 'Cijerah', 19, 'admin', '2017-09-22 15:02:39', NULL, NULL),
(83, '02', 'Cibuntu', 19, 'admin', '2017-09-22 15:02:52', NULL, NULL),
(84, '03', 'Warung Muncang', 19, 'admin', '2017-09-22 15:03:05', NULL, NULL),
(85, '04', 'Caringin', 19, 'admin', '2017-09-22 15:03:31', NULL, NULL),
(86, '05', 'Cigondewah Kaler', 19, 'admin', '2017-09-22 15:03:43', 'admin', '2017-09-22 15:08:27'),
(87, '06', 'Gempolsari', 19, 'admin', '2017-09-22 15:08:40', NULL, NULL),
(88, '07', 'Cigondewah Rahayu', 19, 'admin', '2017-09-22 15:08:57', NULL, NULL),
(89, '08', 'Cigondewah Kidul', 19, 'admin', '2017-09-22 15:09:14', NULL, NULL),
(90, '01', 'Sukapura', 20, 'admin', '2017-09-22 15:09:33', NULL, NULL),
(91, '02', 'Kebon Jayanti', 20, 'admin', '2017-09-22 15:09:48', NULL, NULL),
(92, '03', 'Babakan Surabaya', 20, 'admin', '2017-09-22 15:10:03', NULL, NULL),
(93, '04', 'Cicaheum', 20, 'admin', '2017-09-22 15:10:19', NULL, NULL),
(94, '05', 'Babakansari', 20, 'admin', '2017-09-22 15:10:32', NULL, NULL),
(95, '06', 'Kebon Kangkung', 20, 'admin', '2017-09-22 15:10:45', NULL, NULL),
(96, '01', 'Situsaeur', 21, 'admin', '2017-09-22 15:11:23', NULL, NULL),
(97, '02', 'Kebon Lega', 21, 'admin', '2017-09-22 15:11:33', NULL, NULL),
(98, '03', 'Cibaduyut', 21, 'admin', '2017-09-22 15:11:50', NULL, NULL),
(99, '04', 'Mekarwangi', 21, 'admin', '2017-09-22 15:12:00', NULL, NULL),
(100, '05', 'Cibaduyut Kidul', 21, 'admin', '2017-09-22 15:13:04', NULL, NULL),
(101, '06', 'Cibaduyut Wetan', 21, 'admin', '2017-09-22 15:13:28', NULL, NULL),
(102, '01', 'Cihaur Geulis', 22, 'admin', '2017-09-22 15:14:22', 'admin', '2017-09-22 15:15:55'),
(103, '02', 'Sukaluyu', 22, 'admin', '2017-09-22 15:16:08', NULL, NULL),
(104, '03', 'Neglasari', 22, 'admin', '2017-09-22 15:16:23', NULL, NULL),
(105, '04', 'Cigadung', 22, 'admin', '2017-09-22 15:16:34', NULL, NULL),
(106, '01', 'Braga', 23, 'admin', '2017-09-22 15:17:43', NULL, NULL),
(107, '02', 'Merdeka', 23, 'admin', '2017-09-22 15:17:57', NULL, NULL),
(108, '03', 'Kebon Pisang', 23, 'admin', '2017-09-22 15:18:12', NULL, NULL),
(109, '04', 'Babakan Ciamis', 23, 'admin', '2017-09-22 15:18:22', NULL, NULL),
(110, '01', 'Antapani Kulon', 24, 'admin', '2017-09-22 15:18:50', NULL, NULL),
(111, '02', 'Antapani Tengah', 24, 'admin', '2017-09-22 15:21:17', NULL, NULL),
(112, '03', 'Antapani Kidul', 24, 'admin', '2017-09-22 15:22:32', NULL, NULL),
(113, '04', 'Antapani Wetan', 24, 'admin', '2017-09-22 15:23:34', NULL, NULL),
(115, '01', 'Batununggal', 25, 'admin', '2017-09-22 16:03:42', NULL, NULL),
(116, '02', 'Wates', 25, 'admin', '2017-09-22 16:03:56', NULL, NULL),
(117, '03', 'Mengger', 25, 'admin', '2017-09-22 16:04:03', NULL, NULL),
(118, '04', 'Kujangsari', 25, 'admin', '2017-09-22 16:04:37', NULL, NULL),
(119, '01', 'Sekejati', 26, 'admin', '2017-09-22 16:04:56', NULL, NULL),
(120, '02', 'Margasari', 26, 'admin', '2017-09-22 16:05:08', NULL, NULL),
(121, '03', 'Cijaura', 26, 'admin', '2017-09-22 16:05:23', NULL, NULL),
(122, '04', 'Jatisari', 26, 'admin', '2017-09-22 16:05:38', NULL, NULL),
(123, '01', 'Cipamokolan', 27, 'admin', '2017-09-22 16:06:00', NULL, NULL),
(124, '02', 'Derwati', 27, 'admin', '2017-09-22 16:06:18', NULL, NULL),
(125, '03', 'Munjahlega', 27, 'admin', '2017-09-22 16:06:30', NULL, NULL),
(126, '04', 'Mekarmulya', 27, 'admin', '2017-09-22 16:06:51', NULL, NULL),
(127, '01', 'Sukamiskin', 28, 'admin', '2017-09-22 16:07:18', NULL, NULL),
(128, '02', 'Cisaranten Bina Harapan', 28, 'admin', '2017-09-22 16:07:34', NULL, NULL),
(129, '03', 'Cisaranten Kulon', 28, 'admin', '2017-09-22 16:08:00', NULL, NULL),
(130, '04', 'Sindanglaya/Cisaranten Endah', 28, 'admin', '2017-09-22 16:08:47', NULL, NULL),
(131, '01', 'Palasari', 29, 'admin', '2017-09-22 16:09:05', NULL, NULL),
(132, '02', 'Cipadung', 29, 'admin', '2017-09-22 16:09:16', NULL, NULL),
(133, '03', 'Pasir Biru', 29, 'admin', '2017-09-22 16:09:26', NULL, NULL),
(134, '04', 'Cisurupan', 29, 'admin', '2017-09-22 16:09:34', NULL, NULL),
(135, '01', 'Pasir Endah', 30, 'admin', '2017-09-22 16:09:52', NULL, NULL),
(136, '02', 'Cigending', 30, 'admin', '2017-09-22 16:10:03', NULL, NULL),
(137, '03', 'Pasirwangi', 30, 'admin', '2017-09-22 16:10:12', NULL, NULL),
(138, '04', 'Pasirjati', 30, 'admin', '2017-09-22 16:10:27', NULL, NULL),
(139, '05', 'Pasanggrahan', 30, 'admin', '2017-09-22 16:10:35', NULL, NULL),
(140, '01', 'Cimenerang', 31, 'admin', '2017-09-22 16:11:04', NULL, NULL),
(141, '02', 'Cisaranten Kidul', 31, 'admin', '2017-09-22 16:11:16', NULL, NULL),
(142, '03', 'Rancabolang', 31, 'admin', '2017-09-22 16:11:25', NULL, NULL),
(143, '04', 'Rancanumpang', 31, 'admin', '2017-09-22 16:11:39', NULL, NULL),
(144, '01', 'Cipadung Kulon', 32, 'admin', '2017-09-22 16:11:47', NULL, NULL),
(145, '02', 'Cipadung Kidul', 32, 'admin', '2017-09-22 16:11:57', NULL, NULL),
(146, '03', 'Cipadung Wetan', 32, 'admin', '2017-09-22 16:12:08', NULL, NULL),
(147, '04', 'Mekar Mulya', 32, 'admin', '2017-09-22 16:12:21', NULL, NULL),
(148, '01', 'Cisaranten Wetan', 33, 'admin', '2017-09-22 16:12:36', NULL, NULL),
(149, '02', 'Pakemitan', 33, 'admin', '2017-09-22 16:12:51', NULL, NULL),
(150, '03', 'Sukamulya', 33, 'admin', '2017-09-22 16:13:14', NULL, NULL),
(151, '04', 'Babakan Penghulu', 33, 'admin', '2017-09-22 16:13:32', NULL, NULL),
(152, '01', 'Jatihandap', 34, 'admin', '2017-09-22 16:13:45', NULL, NULL),
(153, '02', 'Karang Pamulang', 34, 'admin', '2017-09-22 16:13:56', NULL, NULL),
(154, '03', 'Pasir Impun', 34, 'admin', '2017-09-22 16:14:16', NULL, NULL),
(155, '04', 'Sindang Jaya', 34, 'admin', '2017-09-22 16:14:34', NULL, NULL),
(156, '01', 'Pondok Rajeg', 36, 'aziz', '2017-09-27 13:49:24', NULL, NULL),
(157, '02', 'Karadenan', 36, 'aziz', '2017-09-27 13:49:55', NULL, NULL),
(158, '03', 'Harapanjaya', 36, 'aziz', '2017-09-27 13:50:09', NULL, NULL),
(159, '04', 'Nanggewer', 36, 'aziz', '2017-09-27 13:50:26', NULL, NULL),
(160, '05', 'Nanggewer Mekar', 36, 'aziz', '2017-09-27 13:50:42', NULL, NULL),
(161, '06', 'Cibinong', 36, 'aziz', '2017-09-27 13:50:58', NULL, NULL),
(162, '07', 'Pakansari', 36, 'aziz', '2017-09-27 13:51:39', NULL, NULL),
(163, '08', 'Tengah', 36, 'aziz', '2017-09-27 13:52:00', NULL, NULL),
(164, '09', 'Sukahati', 36, 'aziz', '2017-09-27 13:52:13', NULL, NULL),
(165, '10', 'Ciriung', 36, 'aziz', '2017-09-27 13:52:37', NULL, NULL),
(166, '11', 'Cirimekar', 36, 'aziz', '2017-09-27 13:52:48', NULL, NULL),
(167, '12', 'Pabuaran', 36, 'aziz', '2017-09-27 13:53:12', NULL, NULL),
(168, '01', 'Wanaherang', 37, 'aziz', '2017-09-27 13:54:57', NULL, NULL),
(169, '02', 'Bojong Kulur', 37, 'aziz', '2017-09-27 13:55:09', NULL, NULL),
(170, '03', 'Ciangsana', 37, 'aziz', '2017-09-27 13:55:20', NULL, NULL),
(171, '04', 'Gunung Putri', 37, 'aziz', '2017-09-27 13:55:32', NULL, NULL),
(172, '05', 'Bojong Nangka', 37, 'aziz', '2017-09-27 13:55:42', NULL, NULL),
(173, '06', 'Tlajung Udik', 37, 'aziz', '2017-09-27 13:55:55', NULL, NULL),
(174, '07', 'Cicadas', 37, 'aziz', '2017-09-27 13:56:18', NULL, NULL),
(175, '08', 'Cikeas Udik', 37, 'aziz', '2017-09-27 13:56:33', NULL, NULL),
(176, '09', 'Nagrak', 37, 'aziz', '2017-09-27 13:56:46', NULL, NULL),
(177, '10', 'Karanggan', 37, 'aziz', '2017-09-27 13:56:58', NULL, NULL),
(178, '01', 'Puspasari', 38, 'aziz', '2017-09-27 13:57:27', NULL, NULL),
(179, '02', 'Citeureup', 38, 'aziz', '2017-09-27 13:57:36', NULL, NULL),
(180, '03', 'Leuwinutung', 38, 'aziz', '2017-09-27 13:57:51', NULL, NULL),
(181, '04', 'Tajur', 38, 'aziz', '2017-09-27 13:58:01', NULL, NULL),
(182, '05', 'Sanja', 38, 'aziz', '2017-09-27 13:58:20', NULL, NULL),
(183, '06', 'Puspanegara', 38, 'aziz', '2017-09-27 13:58:59', NULL, NULL),
(184, '07', 'Karang Asem Barat', 38, 'aziz', '2017-09-27 13:59:16', NULL, NULL),
(185, '08', ' Karang Asem Timur', 38, 'aziz', '2017-09-27 13:59:37', NULL, NULL),
(186, '09', 'Tarikolot', 38, 'aziz', '2017-09-27 13:59:51', NULL, NULL),
(187, '10', 'Gunungsari', 38, 'aziz', '2017-09-27 14:00:01', NULL, NULL),
(188, '11', 'Tangkil', 38, 'aziz', '2017-09-27 14:00:11', NULL, NULL),
(189, '12', 'Sukahati', 38, 'aziz', '2017-09-27 14:00:24', NULL, NULL),
(190, '13', 'Hambalang', 38, 'aziz', '2017-09-27 14:00:37', NULL, NULL),
(191, '14', 'Pasir Mukti', 38, 'aziz', '2017-09-27 14:00:49', NULL, NULL),
(192, '01', 'Gununggeulis', 39, 'aziz', '2017-09-27 14:01:14', NULL, NULL),
(193, '02', 'Cilebut Timur', 39, 'aziz', '2017-09-27 14:01:26', NULL, NULL),
(194, '03', 'Cilebut Barat', 39, 'aziz', '2017-09-27 14:01:53', NULL, NULL),
(195, '04', 'Cibanon', 39, 'aziz', '2017-09-27 14:02:13', NULL, NULL),
(196, '05', 'Nagrak', 39, 'aziz', '2017-09-27 14:02:28', NULL, NULL),
(197, '06', 'Sukatani', 39, 'aziz', '2017-09-27 14:02:40', NULL, NULL),
(198, '07', 'Sukaraja', 39, 'aziz', '2017-09-27 14:02:50', NULL, NULL),
(199, '08', 'Cikeas', 39, 'aziz', '2017-09-27 14:03:12', NULL, NULL),
(200, '09', 'Pasir Jambu', 39, 'aziz', '2017-09-27 14:03:36', NULL, NULL),
(201, '10', 'Cimandala', 39, 'aziz', '2017-09-27 14:03:46', NULL, NULL),
(202, '11', 'Cijujung', 39, 'aziz', '2017-09-27 14:03:56', NULL, NULL),
(203, '12', 'Cadasngampar', 39, 'aziz', '2017-09-27 14:04:07', NULL, NULL),
(204, '13', 'Pasirlaya', 39, 'aziz', '2017-09-27 14:04:18', NULL, NULL),
(205, '01', 'Cijayanti', 40, 'aziz', '2017-09-27 14:04:50', NULL, NULL),
(206, '02', 'Sumurbatu', 40, 'aziz', '2017-09-27 14:05:03', NULL, NULL),
(207, '03', 'Sentul', 40, 'aziz', '2017-09-27 14:05:18', NULL, NULL),
(208, '04', 'Karang Tengah', 40, 'aziz', '2017-09-27 14:05:30', NULL, NULL),
(209, '05', 'Cipambuan', 40, 'aziz', '2017-09-27 14:05:44', NULL, NULL),
(210, '06', 'Kadumanggu', 40, 'aziz', '2017-09-27 14:05:56', NULL, NULL),
(211, '07', 'Citaringgul', 40, 'aziz', '2017-09-27 14:06:07', NULL, NULL),
(212, '08', 'Babakan Madang', 40, 'aziz', '2017-09-27 14:06:30', NULL, NULL),
(213, '09', 'Bojong Koneng', 40, 'aziz', '2017-09-27 14:06:48', NULL, NULL),
(214, '01', 'Sukamaju', 41, 'aziz', '2017-09-27 14:07:14', NULL, NULL),
(215, '02', 'Sirnagalih', 41, 'aziz', '2017-09-27 14:07:21', NULL, NULL),
(216, '03', 'Singa Jaya', 41, 'aziz', '2017-09-27 14:07:36', NULL, NULL),
(217, '04', 'Sukasirna', 41, 'aziz', '2017-09-27 14:07:45', NULL, NULL),
(218, '05', 'Sukanegara', 41, 'aziz', '2017-09-27 14:07:53', NULL, NULL),
(219, '06', 'Sukamanah', 41, 'aziz', '2017-09-27 14:08:05', NULL, NULL),
(220, '07', 'Weninggalih', 41, 'aziz', '2017-09-27 14:08:30', NULL, NULL),
(221, '08', 'Cibodas', 41, 'aziz', '2017-09-27 14:08:38', NULL, NULL),
(222, '09', 'Jonggol', 41, 'aziz', '2017-09-27 14:08:50', NULL, NULL),
(223, '10', 'Bendungan', 41, 'aziz', '2017-09-27 14:08:59', NULL, NULL),
(224, '11', 'Singasari', 41, 'aziz', '2017-09-27 14:09:15', NULL, NULL),
(225, '12', 'Balekambang', 41, 'aziz', '2017-09-27 14:09:29', NULL, NULL),
(226, '13', 'Sukajaya', 41, 'aziz', '2017-09-27 14:09:37', NULL, NULL),
(227, '14', 'Sukagalih', 41, 'aziz', '2017-09-27 14:09:49', NULL, NULL),
(228, '01', 'Pasirangin', 42, 'aziz', '2017-09-27 14:10:10', NULL, NULL),
(229, '02', 'Mekarsari', 42, 'aziz', '2017-09-27 14:10:18', NULL, NULL),
(230, '03', 'Mampir', 42, 'aziz', '2017-09-27 14:10:26', NULL, NULL),
(231, '04', 'Dayeuh', 42, 'aziz', '2017-09-27 14:10:34', NULL, NULL),
(232, '05', 'Gandoang', 42, 'aziz', '2017-09-27 14:10:42', NULL, NULL),
(233, '06', 'Jatisari', 42, 'aziz', '2017-09-27 14:10:54', NULL, NULL),
(234, '07', 'Cileungsi Kidul', 42, 'aziz', '2017-09-27 14:11:10', NULL, NULL),
(235, '08', 'Cipeucang', 42, 'aziz', '2017-09-27 14:11:23', NULL, NULL),
(236, '09', 'Situsari', 42, 'aziz', '2017-09-27 14:11:41', NULL, NULL),
(237, '10', 'Cipenjo', 42, 'aziz', '2017-09-27 14:11:57', NULL, NULL),
(238, '11', 'Limusnunggal', 42, 'aziz', '2017-09-27 14:12:05', NULL, NULL),
(239, '12', 'Cileungsi', 42, 'aziz', '2017-09-27 14:12:16', NULL, NULL),
(240, '01', 'Karyamekar', 43, 'aziz', '2017-09-27 14:13:11', NULL, NULL),
(241, '02', 'Babakan Raden', 43, 'aziz', '2017-09-27 14:13:27', NULL, NULL),
(242, '03', 'Cikutamahi', 43, 'aziz', '2017-09-27 14:13:40', NULL, NULL),
(243, '04', 'Kutamekar', 43, 'aziz', '2017-09-27 14:13:49', NULL, NULL),
(244, '05', 'Cariu', 43, 'aziz', '2017-09-27 14:14:01', NULL, NULL),
(245, '06', 'Mekarwangi', 43, 'aziz', '2017-09-27 14:14:15', NULL, NULL),
(246, '07', 'Bantarkuning', 43, 'aziz', '2017-09-27 14:14:23', NULL, NULL),
(247, '08', 'Sukajadi', 43, 'aziz', '2017-09-27 14:14:33', NULL, NULL),
(248, '09', 'Tegalpanjang', 43, 'aziz', '2017-09-27 14:14:41', NULL, NULL),
(249, '10', 'Cibatutiga', 43, 'aziz', '2017-09-27 14:14:49', NULL, NULL),
(250, '01', 'Wargajaya', 44, 'aziz', '2017-09-27 14:15:19', NULL, NULL),
(251, '02', 'Pabuaran', 44, 'aziz', '2017-09-27 14:15:30', NULL, NULL),
(252, '03', 'Sukadamai', 44, 'aziz', '2017-09-27 14:15:39', NULL, NULL),
(253, '04', 'Sukawangi', 44, 'aziz', '2017-09-27 14:15:49', NULL, NULL),
(254, '05', 'Cibadak', 44, 'aziz', '2017-09-27 14:16:08', NULL, NULL),
(255, '06', 'Sukaresmi', 44, 'aziz', '2017-09-27 14:16:17', NULL, NULL),
(256, '07', 'Sukamulya', 44, 'aziz', '2017-09-27 14:16:26', NULL, NULL),
(257, '08', 'Sukaharja', 44, 'aziz', '2017-09-27 14:16:34', NULL, NULL),
(258, '09', 'Sirnajaya', 44, 'aziz', '2017-09-27 14:16:44', NULL, NULL),
(259, '10', 'Sukamakmur', 44, 'aziz', '2017-09-27 14:16:55', NULL, NULL),
(260, '01', 'Parung', 45, 'aziz', '2017-09-27 14:17:35', NULL, NULL),
(261, '02', 'Iwul', 45, 'aziz', '2017-09-27 14:17:45', NULL, NULL),
(262, '03', 'Bojongsempu', 45, 'aziz', '2017-09-27 14:17:54', NULL, NULL),
(263, '04', 'Waru', 45, 'aziz', '2017-09-27 14:18:01', NULL, NULL),
(264, '05', 'Cogreg', 45, 'aziz', '2017-09-27 14:18:09', NULL, NULL),
(265, '06', 'Pamegarsari', 45, 'aziz', '2017-09-27 14:18:21', NULL, NULL),
(266, '07', 'Warujaya', 45, 'aziz', '2017-09-27 14:18:29', NULL, NULL),
(267, '08', 'Bojongindah', 45, 'aziz', '2017-09-27 14:18:47', NULL, NULL),
(268, '09', 'Jabonmekar', 45, 'aziz', '2017-09-27 14:18:54', NULL, NULL),
(269, '01', 'Cidokom', 46, 'aziz', '2017-09-27 14:19:15', NULL, NULL),
(270, '02', 'Padurenan', 46, 'aziz', '2017-09-27 14:19:27', NULL, NULL),
(271, '03', 'Pengasinan', 46, 'aziz', '2017-09-27 14:19:43', NULL, NULL),
(272, '04', 'Curug', 46, 'aziz', '2017-09-27 14:19:56', NULL, NULL),
(273, '05', 'Gunungsindur', 46, 'aziz', '2017-09-27 14:20:12', NULL, NULL),
(274, '06', 'Jampang', 46, 'aziz', '2017-09-27 14:20:36', NULL, NULL),
(275, '07', 'Cibadung', 46, 'aziz', '2017-09-27 14:20:54', NULL, NULL),
(276, '08', 'Cibinong', 46, 'aziz', '2017-09-27 14:22:30', NULL, NULL),
(277, '09', 'Rawakalong', 46, 'aziz', '2017-09-27 14:22:52', NULL, NULL),
(278, '10', 'Pabuaran', 46, 'aziz', '2017-09-27 14:23:06', NULL, NULL),
(279, '01', 'Bojong', 47, 'aziz', '2017-09-27 14:23:21', NULL, NULL),
(280, '02', 'Parakanjaya', 47, 'aziz', '2017-09-27 14:23:28', NULL, NULL),
(281, '03', 'Kemang', 47, 'aziz', '2017-09-27 14:23:36', NULL, NULL),
(282, '04', 'Pabuaran', 47, 'aziz', '2017-09-27 14:23:43', NULL, NULL),
(283, '05', 'Semplak Barat', 47, 'aziz', '2017-09-27 14:23:58', NULL, NULL),
(284, '06', 'Atang Senjaya', 47, 'aziz', '2017-09-27 14:24:16', NULL, NULL),
(285, '07', 'Jampang', 47, 'aziz', '2017-09-27 14:24:34', NULL, NULL),
(286, '08', 'Pondok Udik', 47, 'aziz', '2017-09-27 14:24:44', NULL, NULL),
(287, '09', 'Tegal', 47, 'aziz', '2017-09-27 14:24:57', NULL, NULL),
(289, '01', 'Bojongbaru', 48, 'aziz', '2017-09-27 14:25:31', NULL, NULL),
(290, '02', 'Cimanggis', 48, 'aziz', '2017-09-27 14:25:43', NULL, NULL),
(291, '03', 'Susukan', 48, 'aziz', '2017-09-27 14:25:54', NULL, NULL),
(292, '04', 'Ragajaya', 48, 'aziz', '2017-09-27 14:26:05', NULL, NULL),
(293, '05', 'Kedungwaringin', 48, 'aziz', '2017-09-27 14:26:24', NULL, NULL),
(294, '06', 'Waringinjaya', 48, 'aziz', '2017-09-27 14:26:46', NULL, NULL),
(295, '07', 'Pabuaran', 48, 'aziz', '2017-09-27 14:27:04', NULL, NULL),
(296, '08', 'Rawapanjang', 48, 'aziz', '2017-09-27 14:27:23', NULL, NULL),
(297, '09', 'Bojonggede', 48, 'aziz', '2017-09-27 14:27:40', NULL, NULL),
(298, '01', 'Leuwiliang', 49, 'aziz', '2017-09-27 14:28:14', NULL, NULL),
(299, '02', 'Purasari', 49, 'aziz', '2017-09-27 14:28:26', NULL, NULL),
(300, '03', 'Karyasari', 49, 'aziz', '2017-09-27 14:28:38', NULL, NULL),
(301, '04', 'Pabangbon', 49, 'aziz', '2017-09-27 14:28:56', NULL, NULL),
(302, '05', 'Karacak', 49, 'aziz', '2017-09-27 14:29:05', NULL, NULL),
(303, '06', 'Barengkok', 49, 'aziz', '2017-09-27 14:29:19', NULL, NULL),
(304, '07', 'Leuwimekar', 49, 'aziz', '2017-09-27 14:29:30', NULL, NULL),
(305, '08', 'Puraseda', 49, 'aziz', '2017-09-27 14:29:45', NULL, NULL),
(306, '09', 'Cibeber I', 49, 'aziz', '2017-09-27 14:29:58', NULL, NULL),
(307, '10', 'Cibeber II', 49, 'aziz', '2017-09-27 14:30:18', NULL, NULL),
(308, '11', 'Karehkel', 49, 'aziz', '2017-09-27 14:30:29', NULL, NULL),
(309, '01', 'Ciampea', 50, 'aziz', '2017-09-27 14:47:08', NULL, NULL),
(310, '02', 'Cinangka', 50, 'aziz', '2017-10-09 07:59:00', NULL, NULL),
(311, '03', 'Cihideungudik', 50, 'aziz', '2017-10-09 07:59:24', NULL, NULL),
(312, '04', 'Bojongjengkol', 50, 'aziz', '2017-10-09 07:59:35', NULL, NULL),
(313, '05', 'Tegalwaru', 50, 'aziz', '2017-10-09 07:59:45', NULL, NULL),
(314, '06', 'Cibuntu', 50, 'aziz', '2017-10-09 08:01:59', NULL, NULL),
(315, '07', 'Cicadas', 50, 'aziz', '2017-10-09 08:02:15', NULL, NULL),
(316, '08', 'Cibadak', 50, 'aziz', '2017-10-09 08:02:24', NULL, NULL),
(317, '09', 'Bojongrangkas', 50, 'aziz', '2017-10-09 08:02:34', NULL, NULL),
(318, '10', 'Cihideunghilir', 50, 'aziz', '2017-10-09 08:03:19', NULL, NULL),
(319, '11', 'Cibanteng', 50, 'aziz', '2017-10-09 08:03:29', NULL, NULL),
(320, '12', 'Benteng', 50, 'aziz', '2017-10-09 08:03:45', NULL, NULL),
(321, '13', 'Ciampea Udik', 50, 'aziz', '2017-10-09 08:03:58', NULL, NULL),
(322, '01', 'Situ Udik', 51, 'aziz', '2017-10-09 08:04:26', NULL, NULL),
(323, '02', 'Situ Ilir', 51, 'aziz', '2017-10-09 08:04:41', NULL, NULL),
(324, '03', 'Cemplang', 51, 'aziz', '2017-10-09 08:04:50', NULL, NULL),
(325, '04', 'Cibatok I', 51, 'aziz', '2017-10-09 08:05:19', NULL, NULL),
(326, '05', 'Ciaruteun Udik', 51, 'aziz', '2017-10-09 08:05:32', NULL, NULL),
(327, '06', 'Leuwi Kolot', 51, 'aziz', '2017-10-09 08:05:52', NULL, NULL),
(328, '07', 'Cimanggu I', 51, 'aziz', '2017-10-09 08:06:05', NULL, NULL),
(329, '08', 'Cimanggu II', 51, 'aziz', '2017-10-09 08:06:25', NULL, NULL),
(330, '09', 'Dukuh', 51, 'aziz', '2017-10-09 08:06:41', NULL, NULL),
(331, '10', 'Cijujung', 51, 'aziz', '2017-10-09 08:06:51', NULL, NULL),
(332, '11', 'Ciaruteun Ilir', 51, 'aziz', '2017-10-09 08:07:06', NULL, NULL),
(333, '12', 'Cibatok II', 51, 'aziz', '2017-10-09 08:07:23', NULL, NULL),
(334, '13', 'Sukamaju', 51, 'aziz', '2017-10-09 08:07:32', NULL, NULL),
(335, '14', 'Galuga', 51, 'aziz', '2017-10-09 08:07:42', NULL, NULL),
(336, '15', 'Girimulya', 51, 'aziz', '2017-10-09 08:07:53', NULL, NULL),
(337, '01', 'Purwabakti', 52, 'aziz', '2017-10-09 08:08:15', NULL, NULL),
(338, '02', 'Cibunian', 52, 'aziz', '2017-10-09 08:08:39', NULL, NULL),
(339, '03', 'Cibitungwetan', 52, 'aziz', '2017-10-09 08:08:49', NULL, NULL),
(340, '04', 'Gunungmenyan', 52, 'aziz', '2017-10-09 08:08:58', NULL, NULL),
(341, '05', 'Gunungbunder II', 52, 'aziz', '2017-10-09 08:09:16', NULL, NULL),
(342, '06', 'Pasarean', 52, 'aziz', '2017-10-09 08:09:24', NULL, NULL),
(343, '07', 'Cimayang', 52, 'aziz', '2017-10-09 08:09:33', NULL, NULL),
(344, '08', 'Pamijahan', 52, 'aziz', '2017-10-09 08:09:44', NULL, NULL),
(345, '09', 'Cibening', 52, 'aziz', '2017-10-09 08:09:52', NULL, NULL),
(346, '10', 'Gunungbunder I', 52, 'aziz', '2017-10-09 08:10:06', NULL, NULL),
(347, '11', 'Cibitung Kulon', 52, 'aziz', '2017-10-09 08:10:16', NULL, NULL),
(348, '12', 'Gunung Picung', 52, 'aziz', '2017-10-09 08:10:25', NULL, NULL),
(349, '13', 'Ciasihan', 52, 'aziz', '2017-10-09 08:10:33', NULL, NULL),
(350, '14', 'Gunungsari', 52, 'aziz', '2017-10-09 08:10:43', NULL, NULL),
(351, '15', 'Ciasmara', 52, 'aziz', '2017-10-09 08:10:52', NULL, NULL),
(352, '01', 'Rumpin', 53, 'aziz', '2017-10-09 08:11:29', NULL, NULL),
(353, '02', 'Leuwibatu', 53, 'aziz', '2017-10-09 08:11:37', NULL, NULL),
(354, '03', 'Cidokom', 53, 'aziz', '2017-10-09 08:11:45', NULL, NULL),
(355, '04', 'Gobang', 53, 'aziz', '2017-10-09 08:11:55', NULL, NULL),
(356, '05', 'Cibodas', 53, 'aziz', '2017-10-09 08:12:01', NULL, NULL),
(357, '06', 'Rabak', 53, 'aziz', '2017-10-09 08:12:08', NULL, NULL),
(358, '07', 'Kampungsawah', 53, 'aziz', '2017-10-09 08:12:20', NULL, NULL),
(359, '08', 'Cipinang', 53, 'aziz', '2017-10-09 08:12:38', NULL, NULL),
(360, '09', 'Sukasari', 53, 'aziz', '2017-10-09 08:12:47', NULL, NULL),
(361, '10', 'Tamansari', 53, 'aziz', '2017-10-09 08:12:53', NULL, NULL),
(362, '11', 'Kertajaya', 53, 'aziz', '2017-10-09 08:13:01', NULL, NULL),
(363, '12', 'Sukamulya', 53, 'aziz', '2017-10-09 08:13:11', NULL, NULL),
(364, '13', 'Mekarsari', 53, 'aziz', '2017-10-09 08:13:23', NULL, NULL),
(365, '14', 'Mekarjaya', 53, 'aziz', '2017-10-09 08:13:33', NULL, NULL),
(366, '01', 'Curug', 54, 'aziz', '2017-10-09 08:13:59', NULL, NULL),
(367, '02', 'Pangradin', 54, 'aziz', '2017-10-09 08:14:07', NULL, NULL),
(368, '03', 'Kalongsawah', 54, 'aziz', '2017-10-09 08:14:13', NULL, NULL),
(369, '04', 'Sipak', 54, 'aziz', '2017-10-09 08:14:25', NULL, NULL),
(370, '05', 'Jasinga', 54, 'aziz', '2017-10-09 08:14:31', NULL, NULL),
(371, '06', 'Koleang', 54, 'aziz', '2017-10-09 08:14:43', NULL, NULL),
(372, '07', 'Cikopomayak', 54, 'aziz', '2017-10-09 08:14:56', NULL, NULL),
(373, '08', 'Setu', 54, 'aziz', '2017-10-09 08:15:06', NULL, NULL),
(374, '09', 'Barengkok', 54, 'aziz', '2017-10-09 08:15:12', NULL, NULL),
(375, '10', 'Bagoang', 54, 'aziz', '2017-10-09 08:15:21', NULL, NULL),
(376, '11', 'Pangaur', 54, 'aziz', '2017-10-09 08:15:27', NULL, NULL),
(377, '12', 'Pamagersari', 54, 'aziz', '2017-10-09 08:15:35', NULL, NULL),
(378, '13', 'Jugala Jaya', 54, 'aziz', '2017-10-09 08:15:57', NULL, NULL),
(379, '14', 'Tegalwangi', 54, 'aziz', '2017-10-09 08:16:14', NULL, NULL),
(380, '15', 'Neglasari', 54, 'aziz', '2017-10-09 08:16:20', NULL, NULL),
(381, '16', 'Wirajaya', 54, 'aziz', '2017-10-09 08:16:27', NULL, NULL),
(382, '01', 'Malasari', 56, 'aziz', '2017-10-09 08:17:12', NULL, NULL),
(383, '02', 'Curugbitung', 56, 'aziz', '2017-10-09 08:17:21', NULL, NULL),
(384, '03', 'Cisarua', 56, 'aziz', '2017-10-09 08:17:31', NULL, NULL),
(385, '04', 'Bantarkaret', 56, 'aziz', '2017-10-09 08:17:38', NULL, NULL),
(386, '05', 'Hambaro', 56, 'aziz', '2017-10-09 08:17:48', NULL, NULL),
(387, '06', 'Kalongliud', 56, 'aziz', '2017-10-09 08:18:11', NULL, NULL),
(388, '07', 'Nanggung', 56, 'aziz', '2017-10-09 08:18:22', NULL, NULL),
(389, '08', 'Parakanmuncang', 56, 'aziz', '2017-10-09 08:18:54', NULL, NULL),
(390, '09', 'Pangkaljaya', 56, 'aziz', '2017-10-09 08:19:11', NULL, NULL),
(391, '10', 'Sukaluyu', 56, 'aziz', '2017-10-09 08:19:21', NULL, NULL),
(392, '11', 'Batu Tulis', 56, 'aziz', '2017-10-09 08:19:41', NULL, NULL),
(393, '01', 'Sukamaju', 57, 'aziz', '2017-10-09 08:19:54', NULL, NULL),
(394, '02', 'Cigudeg', 57, 'aziz', '2017-10-09 08:20:03', NULL, NULL),
(395, '03', 'Bunar', 57, 'aziz', '2017-10-09 08:20:17', NULL, NULL),
(396, '04', 'Banyuresmi', 57, 'aziz', '2017-10-09 08:20:25', NULL, NULL),
(397, '05', 'Cintamanik', 57, 'aziz', '2017-10-09 08:20:33', NULL, NULL),
(398, '06', 'Argapura', 57, 'aziz', '2017-10-09 08:21:04', NULL, NULL),
(399, '07', 'Bangunjaya', 57, 'aziz', '2017-10-09 08:21:14', NULL, NULL),
(400, '08', 'Rengasjajar', 57, 'aziz', '2017-10-09 08:21:22', NULL, NULL),
(401, '09', 'Batujajar', 57, 'aziz', '2017-10-09 08:21:30', NULL, NULL),
(402, '10', 'Wargajaya', 57, 'aziz', '2017-10-09 08:21:59', NULL, NULL),
(403, '11', 'Sukaraksa', 57, 'aziz', '2017-10-09 08:22:44', NULL, NULL),
(404, '12', 'Banyuwangi', 57, 'aziz', '2017-10-09 08:23:00', NULL, NULL),
(405, '13', 'Banyuasih', 57, 'aziz', '2017-10-09 08:23:17', NULL, NULL),
(406, '14', 'Mekarjaya', 57, 'aziz', '2017-10-09 08:23:52', NULL, NULL),
(407, '15', 'Tegalega', 57, 'aziz', '2017-10-09 08:35:44', NULL, NULL),
(408, '01', 'Cileungsi', 59, 'aziz', '2017-10-09 08:36:01', NULL, NULL),
(409, '02', 'Citapen', 59, 'aziz', '2017-10-09 08:36:11', NULL, NULL),
(410, '03', 'Cibedug', 59, 'aziz', '2017-10-09 08:36:24', NULL, NULL),
(411, '04', 'Jambuluwuk', 59, 'aziz', '2017-10-09 08:36:54', NULL, NULL),
(412, '05', 'Bantarsari', 59, 'aziz', '2017-10-09 08:37:06', NULL, NULL),
(413, '06', 'Telukpinang', 59, 'aziz', '2017-10-09 08:37:16', NULL, NULL),
(414, '07', 'Banjar Waru', 59, 'aziz', '2017-10-09 08:37:52', NULL, NULL),
(415, '08', 'Bendungan', 59, 'aziz', '2017-10-09 08:38:02', NULL, NULL),
(416, '09', 'Pandan Sari', 59, 'aziz', '2017-10-09 08:38:16', NULL, NULL),
(417, '10', 'Bojong Murni', 59, 'aziz', '2017-10-09 08:38:36', NULL, NULL),
(418, '11', 'Banjar Wangi', 59, 'aziz', '2017-10-09 08:38:46', NULL, NULL),
(419, '12', 'Ciawi', 59, 'aziz', '2017-10-09 08:38:59', NULL, NULL),
(420, '13', 'Bitungsari', 59, 'aziz', '2017-10-09 08:39:07', NULL, NULL),
(421, '01', 'Batulayang', 60, 'aziz', '2017-10-09 08:39:48', NULL, NULL),
(422, '02', 'Jogjogan', 60, 'aziz', '2017-10-09 08:40:02', NULL, NULL),
(423, '03', 'Cibeureum', 60, 'aziz', '2017-10-09 08:40:11', NULL, NULL),
(424, '04', 'Cilember', 60, 'aziz', '2017-10-09 08:40:40', NULL, NULL),
(425, '05', 'Citeko', 60, 'aziz', '2017-10-09 08:41:01', NULL, NULL),
(426, '06', 'Tugu Selatan', 60, 'aziz', '2017-10-09 08:41:15', NULL, NULL),
(427, '07', 'Leuwimalang', 60, 'aziz', '2017-10-09 08:41:35', NULL, NULL),
(428, '08', 'Kopo', 60, 'aziz', '2017-10-09 08:41:43', NULL, NULL),
(429, '09', 'Tugu Utara', 60, 'aziz', '2017-10-09 08:42:00', NULL, NULL),
(430, '10', 'Cisarua', 60, 'aziz', '2017-10-09 08:42:59', NULL, NULL),
(431, '01', 'Sukamaju', 61, 'aziz', '2017-10-09 08:43:39', NULL, NULL),
(432, '02', 'Kuta', 61, 'aziz', '2017-10-09 08:43:48', NULL, NULL),
(433, '03', 'Gadog', 61, 'aziz', '2017-10-09 08:43:56', NULL, NULL),
(434, '04', 'Sukakarya', 61, 'aziz', '2017-10-09 08:44:03', NULL, NULL),
(435, '05', 'Megamendung', 61, 'aziz', '2017-10-09 08:44:10', NULL, NULL),
(436, '06', 'Cipayung Datar', 61, 'aziz', '2017-10-09 08:44:19', NULL, NULL),
(437, '07', 'Sukamanah', 61, 'aziz', '2017-10-09 08:44:27', NULL, NULL),
(438, '08', 'Sukagalih', 61, 'aziz', '2017-10-09 08:44:34', NULL, NULL),
(439, '09', 'Cipayung Girang', 61, 'aziz', '2017-10-09 08:44:42', NULL, NULL),
(440, '10', 'Sukamahi', 61, 'aziz', '2017-10-09 08:44:49', NULL, NULL),
(441, '11', 'Sukaresmi', 61, 'aziz', '2017-10-09 08:44:57', NULL, NULL),
(442, '12', 'Pasir Angin', 61, 'aziz', '2017-10-09 08:45:05', NULL, NULL),
(443, '01', 'Pasir Muncang', 62, 'aziz', '2017-10-09 08:45:23', NULL, NULL),
(444, '02', 'Cimande Hilir', 62, 'aziz', '2017-10-09 08:45:33', NULL, NULL),
(445, '03', 'Ciderum', 62, 'aziz', '2017-10-09 08:45:43', NULL, NULL),
(446, '04', 'Caringin', 62, 'aziz', '2017-10-09 08:46:45', NULL, NULL),
(447, '05', 'Ciherang Pondok', 62, 'aziz', '2017-10-09 08:46:54', NULL, NULL),
(448, '06', 'Cinagara', 62, 'aziz', '2017-10-09 08:47:02', NULL, NULL),
(449, '07', 'Cimande', 62, 'aziz', '2017-10-09 08:47:09', NULL, NULL),
(450, '08', 'Pancawati', 62, 'aziz', '2017-10-09 08:47:15', NULL, NULL),
(451, '09', 'Muarajaya', 62, 'aziz', '2017-10-09 08:47:22', NULL, NULL),
(452, '10', 'Basir Buncir', 62, 'aziz', '2017-10-09 08:47:31', NULL, NULL),
(453, '11', 'Lemah Duhur', 62, 'aziz', '2017-10-09 08:47:42', NULL, NULL),
(454, '12', 'Tangkil', 62, 'aziz', '2017-10-09 08:47:52', NULL, NULL),
(455, '01', 'Cijeruk', 63, 'aziz', '2017-10-09 08:48:09', NULL, NULL),
(456, '02', 'Cipelang', 63, 'aziz', '2017-10-09 08:48:16', NULL, NULL),
(457, '03', 'Warung Menteng', 63, 'aziz', '2017-10-09 08:48:25', NULL, NULL),
(458, '04', 'Tajur Halang', 63, 'aziz', '2017-10-09 08:48:36', NULL, NULL),
(459, '05', 'Cipicung', 63, 'aziz', '2017-10-09 08:48:48', NULL, NULL),
(460, '06', 'Cibalung', 63, 'aziz', '2017-10-09 08:48:57', NULL, NULL),
(461, '07', 'Sukaharja', 63, 'aziz', '2017-10-09 08:49:08', NULL, NULL),
(462, '08', 'Palasari', 63, 'aziz', '2017-10-09 08:49:15', NULL, NULL),
(463, '09', 'Tanjungsari', 63, 'aziz', '2017-10-09 08:49:23', NULL, NULL),
(464, '01', 'Mekarjaya', 64, 'aziz', '2017-10-09 08:49:40', NULL, NULL),
(465, '02', 'Sukaharja', 64, 'aziz', '2017-10-09 08:49:57', NULL, NULL),
(466, '03', 'Padasuka', 64, 'aziz', '2017-10-09 08:50:07', NULL, NULL),
(467, '04', 'Parakan', 64, 'aziz', '2017-10-09 08:50:25', NULL, NULL),
(468, '05', 'Ciomas', 64, 'aziz', '2017-10-09 08:50:37', NULL, NULL),
(469, '06', 'Pagelaran', 64, 'aziz', '2017-10-09 08:50:46', NULL, NULL),
(470, '07', 'Sukamakmur', 64, 'aziz', '2017-10-09 08:50:56', NULL, NULL),
(471, '08', 'Ciapaus', 64, 'aziz', '2017-10-09 08:52:10', NULL, NULL),
(473, '08', 'Ciapaus', 64, 'aziz', '2017-10-09 08:58:34', NULL, NULL),
(474, '09', 'Kota Batu', 64, 'aziz', '2017-10-09 08:58:57', NULL, NULL),
(475, '10', 'Laladon', 64, 'aziz', '2017-10-09 09:04:09', NULL, NULL),
(476, '11', 'Ciomas Rahayu', 64, 'aziz', '2017-10-09 09:04:19', NULL, NULL),
(477, '01', 'Jagabaya', 55, 'aziz', '2017-10-09 09:05:03', NULL, NULL),
(478, '02', 'Gorowong', 55, 'aziz', '2017-10-09 09:05:11', NULL, NULL),
(479, '03', 'Dago', 55, 'aziz', '2017-10-09 09:05:22', NULL, NULL),
(480, '04', 'Pingku', 55, 'aziz', '2017-10-09 09:05:36', NULL, NULL),
(481, '05', 'Cikuda', 55, 'aziz', '2017-10-09 09:05:48', NULL, NULL),
(482, '06', 'Parungpanjang', 55, 'aziz', '2017-10-09 09:05:58', NULL, NULL),
(483, '07', 'Lumpang', 55, 'aziz', '2017-10-09 09:06:10', NULL, NULL),
(484, '08', 'Cibunar', 55, 'aziz', '2017-10-09 09:06:21', NULL, NULL),
(485, '09', 'Jagabita', 55, 'aziz', '2017-10-09 09:06:33', NULL, NULL),
(486, '10', 'Gintungcilejet', 55, 'aziz', '2017-10-09 09:06:46', NULL, NULL),
(487, '11', 'Kabasiran', 55, 'aziz', '2017-10-09 09:06:57', NULL, NULL),
(488, '01', 'Sukadamai', 65, 'aziz', '2017-10-09 09:07:55', NULL, NULL),
(489, '02', 'Ciherang', 65, 'aziz', '2017-10-09 09:08:01', NULL, NULL),
(490, '03', 'Sinarsari', 65, 'aziz', '2017-10-09 09:08:07', NULL, NULL),
(491, '04', 'Sukawening', 65, 'aziz', '2017-10-09 09:08:13', NULL, NULL),
(492, '05', 'Petir', 65, 'aziz', '2017-10-09 09:08:27', NULL, NULL),
(493, '06', 'Purwasari', 65, 'aziz', '2017-10-09 09:08:33', NULL, NULL),
(494, '07', 'Cikarawang', 65, 'aziz', '2017-10-09 09:08:39', NULL, NULL),
(495, '08', 'Babakan', 65, 'aziz', '2017-10-09 09:08:45', NULL, NULL),
(496, '09', 'Dramaga', 65, 'aziz', '2017-10-09 09:08:51', NULL, NULL),
(497, '10', 'Neglasari', 65, 'aziz', '2017-10-09 09:09:02', NULL, NULL),
(498, '01', 'Sukamantri', 66, 'aziz', '2017-10-09 09:09:19', NULL, NULL),
(499, '02', 'Sinargalih', 66, 'aziz', '2017-10-09 09:09:31', NULL, NULL),
(500, '03', 'Pasireurih', 66, 'aziz', '2017-10-09 09:09:39', NULL, NULL),
(501, '04', 'Tamansari', 66, 'aziz', '2017-10-09 09:09:46', NULL, NULL),
(502, '05', 'Sukaluyu', 66, 'aziz', '2017-10-09 09:09:52', NULL, NULL),
(503, '06', 'Sukaresmi', 66, 'aziz', '2017-10-09 09:09:59', NULL, NULL),
(504, '07', 'Sukajaya', 66, 'aziz', '2017-10-09 09:10:05', NULL, NULL),
(505, '08', 'Sukajadi', 66, 'aziz', '2017-10-09 09:10:20', NULL, NULL),
(506, '01', 'Klapanunggal', 67, 'aziz', '2017-10-09 09:11:57', NULL, NULL),
(507, '02', 'Bojong', 67, 'aziz', '2017-10-09 09:12:05', NULL, NULL),
(508, '03', 'Nambo', 67, 'aziz', '2017-10-09 09:12:13', NULL, NULL),
(509, '04', 'Lulut', 67, 'aziz', '2017-10-09 09:12:21', NULL, NULL),
(510, '05', 'Cikahuripan', 67, 'aziz', '2017-10-09 09:12:29', NULL, NULL),
(511, '06', 'Kembang Kuning', 67, 'aziz', '2017-10-09 09:12:38', NULL, NULL),
(512, '07', 'Bantar Jati', 67, 'aziz', '2017-10-09 09:12:47', NULL, NULL),
(513, '08', 'Leuwikaret', 67, 'aziz', '2017-10-09 09:12:58', NULL, NULL),
(514, '09', 'Ligarmukti', 67, 'aziz', '2017-10-09 09:15:30', NULL, NULL),
(515, '01', 'Putat Nutug', 68, 'aziz', '2017-10-09 09:18:30', NULL, NULL),
(516, '02', 'Ciseeng', 68, 'aziz', '2017-10-09 09:18:38', NULL, NULL),
(517, '03', 'Parigi Mekar', 68, 'aziz', '2017-10-09 09:18:49', NULL, NULL),
(518, '04', 'Cibentang', 68, 'aziz', '2017-10-09 09:18:58', NULL, NULL),
(519, '05', 'Cibeuteung Udik', 68, 'aziz', '2017-10-09 09:19:06', NULL, NULL),
(520, '06', 'Karihkil', 68, 'aziz', '2017-10-09 09:19:14', NULL, NULL),
(521, '07', 'Babakan', 68, 'aziz', '2017-10-09 09:19:22', NULL, NULL),
(522, '08', 'Cihoe', 68, 'aziz', '2017-10-09 09:19:28', NULL, NULL),
(523, '09', 'Cibeuteung Muara', 68, 'aziz', '2017-10-09 09:19:39', NULL, NULL),
(524, '10', 'Kuripan', 68, 'aziz', '2017-10-09 09:19:48', NULL, NULL),
(525, '01', 'Bantarjaya', 69, 'aziz', '2017-10-09 09:20:20', NULL, NULL),
(526, '02', 'Bantarsari', 69, 'aziz', '2017-10-09 09:20:37', NULL, NULL),
(527, '03', 'Pasirgaok', 69, 'aziz', '2017-10-09 09:20:47', NULL, NULL),
(528, '04', 'Rancabungur', 69, 'aziz', '2017-10-09 09:20:58', NULL, NULL),
(529, '05', 'Mekarsari', 69, 'aziz', '2017-10-09 09:21:07', NULL, NULL),
(530, '06', 'Candali', 69, 'aziz', '2017-10-09 09:21:20', NULL, NULL),
(531, '07', 'Cimulang', 69, 'aziz', '2017-10-09 09:21:34', NULL, NULL),
(532, '01', 'Cisarua', 70, 'aziz', '2017-10-09 09:22:41', NULL, NULL),
(533, '02', 'Kiarasari', 70, 'aziz', '2017-10-09 09:23:02', NULL, NULL),
(534, '03', 'Sukajaya', 70, 'aziz', '2017-10-09 09:23:12', NULL, NULL),
(535, '04', 'Cipayung', 70, 'aziz', '2017-10-09 09:23:28', NULL, NULL),
(537, '05', 'Cileuksa', 70, 'aziz', '2017-10-09 09:24:07', NULL, NULL),
(538, '06', 'Kiarapandak', 70, 'aziz', '2017-10-09 09:24:22', NULL, NULL),
(539, '07', 'Harkat Jaya', 70, 'aziz', '2017-10-09 09:25:28', NULL, NULL),
(540, '08', 'Sukamulih', 70, 'aziz', '2017-10-09 09:25:42', NULL, NULL),
(541, '09', 'Pasirmadang', 70, 'aziz', '2017-10-09 09:25:50', NULL, NULL),
(542, '10', 'Urug', 70, 'aziz', '2017-10-09 09:26:04', NULL, NULL),
(543, '11', 'Jayaraharja', 70, 'aziz', '2017-10-09 09:26:13', NULL, NULL),
(544, '01', 'Tanjungsari', 71, 'aziz', '2017-10-09 09:26:25', NULL, NULL),
(545, '02', 'Selawangi', 71, 'aziz', '2017-10-09 09:26:32', NULL, NULL),
(546, '03', 'Tanjungrasa', 71, 'aziz', '2017-10-09 09:26:41', NULL, NULL),
(547, '04', 'Antajaya', 71, 'aziz', '2017-10-09 09:26:50', NULL, NULL),
(548, '05', 'Pasir Tanjung', 71, 'aziz', '2017-10-09 09:26:59', NULL, NULL),
(549, '06', 'Cibadak', 71, 'aziz', '2017-10-09 09:27:10', NULL, NULL),
(550, '07', 'Sukarasa', 71, 'aziz', '2017-10-09 09:27:17', NULL, NULL),
(551, '08', 'Sirnasari', 71, 'aziz', '2017-10-09 09:27:30', NULL, NULL),
(552, '09', 'Buanajaya', 71, 'aziz', '2017-10-09 09:27:42', NULL, NULL),
(553, '10', 'Sirnarasa', 71, 'aziz', '2017-10-09 09:27:56', NULL, NULL),
(554, '01', 'Tajurhalang', 72, 'aziz', '2017-10-09 09:29:04', NULL, NULL),
(555, '02', 'Citayam', 72, 'aziz', '2017-10-09 09:29:14', NULL, NULL),
(556, '03', 'Sasak Panjang', 72, 'aziz', '2017-10-09 09:29:26', NULL, NULL),
(557, '04', 'Nanggerang', 72, 'aziz', '2017-10-09 09:29:35', NULL, NULL),
(558, '05', 'Sukmajaya', 72, 'aziz', '2017-10-09 09:29:53', NULL, NULL),
(559, '06', 'Tonjong', 72, 'aziz', '2017-10-09 09:30:05', NULL, NULL),
(560, '07', 'Kalisuren', 72, 'aziz', '2017-10-09 09:30:11', NULL, NULL),
(561, '01', 'Cigombong', 73, 'aziz', '2017-10-09 09:30:30', NULL, NULL),
(562, '02', 'Watesjaya', 73, 'aziz', '2017-10-09 09:30:37', NULL, NULL),
(563, '03', 'Ciburuy', 73, 'aziz', '2017-10-09 09:30:44', NULL, NULL),
(564, '04', 'Srogol', 73, 'aziz', '2017-10-09 09:30:56', NULL, NULL),
(565, '05', 'Cisalada', 73, 'aziz', '2017-10-09 09:31:10', NULL, NULL),
(566, '06', 'Tugujaya', 73, 'aziz', '2017-10-09 09:31:15', NULL, NULL),
(567, '07', 'Pasirjaya', 73, 'aziz', '2017-10-09 09:31:37', NULL, NULL),
(568, '08', 'Ciburayut', 73, 'aziz', '2017-10-09 09:31:44', NULL, NULL),
(569, '09', 'Ciadeg', 73, 'aziz', '2017-10-09 09:31:59', NULL, NULL),
(570, '01', 'Leuwisadeng', 74, 'aziz', '2017-10-09 09:32:30', NULL, NULL),
(571, '02', 'Babakan Sadeng', 74, 'aziz', '2017-10-09 09:32:42', NULL, NULL),
(572, '03', 'Sadeng Kolot', 74, 'aziz', '2017-10-09 09:32:52', NULL, NULL),
(573, '04', 'Wangunjaya', 74, 'aziz', '2017-10-09 09:33:11', NULL, NULL),
(574, '05', 'Kalong I', 74, 'aziz', '2017-10-09 09:33:24', NULL, NULL),
(575, '06', 'Kalong II', 74, 'aziz', '2017-10-09 09:33:39', NULL, NULL),
(576, '07', 'Sadeng', 74, 'aziz', '2017-10-09 09:33:54', NULL, NULL),
(577, '08', 'Sibanteng', 74, 'aziz', '2017-10-09 09:34:05', NULL, NULL),
(578, '01', 'Tapos I', 75, 'aziz', '2017-10-09 09:34:57', NULL, NULL),
(579, '02', 'Tapos II', 75, 'aziz', '2017-10-09 09:35:05', NULL, NULL),
(580, '03', 'Cibitung Tengah', 75, 'aziz', '2017-10-09 09:35:17', NULL, NULL),
(581, '04', 'Situdaun', 75, 'aziz', '2017-10-09 09:35:26', NULL, NULL),
(582, '05', 'Cinangneng', 75, 'aziz', '2017-10-09 09:35:33', NULL, NULL),
(583, '06', 'Gunungmalang', 75, 'aziz', '2017-10-09 09:35:41', NULL, NULL),
(584, '07', 'Gunung Mulya', 75, 'aziz', '2017-10-09 09:35:52', NULL, NULL),
(585, '01', 'Pelabuhanratu', 76, 'aziz', '2017-10-23 16:02:26', NULL, NULL),
(586, '02', 'Tonjong', 76, 'aziz', '2017-10-23 16:02:35', NULL, NULL),
(587, '03', 'Citepus', 76, 'aziz', '2017-10-23 16:02:44', NULL, NULL),
(588, '04', 'Buniwangi', 76, 'aziz', '2017-10-23 16:02:52', NULL, NULL),
(589, '05', 'Cibodas', 76, 'aziz', '2017-10-23 16:03:02', NULL, NULL),
(590, '06', 'Pasirsuren', 76, 'aziz', '2017-10-23 16:03:11', NULL, NULL),
(591, '07', 'Cikadu', 76, 'aziz', '2017-10-23 16:03:20', NULL, NULL),
(592, '08', 'Citarik', 76, 'aziz', '2017-10-23 16:03:29', NULL, NULL),
(593, '09', 'Cimanggu', 76, 'aziz', '2017-10-23 16:03:42', NULL, NULL),
(594, '10', 'Jayanti', 76, 'aziz', '2017-10-23 16:03:50', NULL, NULL),
(595, '01', 'Cidadap', 77, 'aziz', '2017-10-23 16:04:12', NULL, NULL),
(596, '02', 'Loji', 77, 'aziz', '2017-10-23 16:04:28', NULL, NULL),
(597, '03', 'Kertajaya', 77, 'aziz', '2017-10-23 16:04:36', NULL, NULL),
(598, '04', 'Cihaur', 77, 'aziz', '2017-10-23 16:04:47', NULL, NULL),
(599, '05', 'Cibuntu', 77, 'aziz', '2017-10-23 16:04:54', NULL, NULL),
(600, '06', 'Mekarasih', 77, 'aziz', '2017-10-23 16:05:02', NULL, NULL),
(601, '06', 'Sangrawayang', 77, 'aziz', '2017-10-23 16:05:08', NULL, NULL),
(602, '01', 'Cikakak', 78, 'aziz', '2017-10-23 16:11:49', NULL, NULL),
(603, '02', 'Cimaja', 78, 'aziz', '2017-10-23 16:11:58', NULL, NULL),
(604, '03', 'Ridogalih', 78, 'aziz', '2017-10-23 16:12:05', NULL, NULL),
(605, '04', 'Sukamaju', 78, 'aziz', '2017-10-23 16:12:21', NULL, NULL),
(607, '05', 'Cileungsing', 78, 'aziz', '2017-10-23 16:18:30', NULL, NULL),
(608, '06', 'Margalaksana', 78, 'aziz', '2017-10-23 16:18:55', NULL, NULL),
(609, '07', 'Sirnarasa', 78, 'aziz', '2017-10-23 16:19:44', NULL, NULL),
(610, '08', 'Gandasoli', 78, 'aziz', '2017-10-23 16:20:02', NULL, NULL),
(611, '09', 'Cirendang', 78, 'aziz', '2017-10-23 16:20:12', NULL, NULL),
(612, '01', 'Bantargadung', 79, 'aziz', '2017-10-23 16:20:32', NULL, NULL),
(613, '02', 'Mangunjaya', 79, 'aziz', '2017-10-23 16:20:47', NULL, NULL),
(614, '03', 'Bojonggaling', 79, 'aziz', '2017-10-23 16:20:57', NULL, NULL),
(615, '04', 'Limusnunggal', 79, 'aziz', '2017-10-23 16:21:15', NULL, NULL),
(618, '05', 'Bantargebang', 79, 'aziz', '2017-10-23 16:22:34', NULL, NULL),
(619, '06', 'Buanajaya', 79, 'aziz', '2017-10-23 16:22:51', NULL, NULL),
(620, '07', 'Boyong Sari', 79, 'aziz', '2017-10-23 16:23:04', NULL, NULL),
(621, '01', 'Cisolok', 80, 'aziz', '2017-10-23 16:23:31', NULL, NULL),
(622, '02', 'Pasir Baru', 80, 'aziz', '2017-10-23 16:23:51', NULL, NULL),
(623, '03', 'Cikahuripan', 80, 'aziz', '2017-10-23 16:24:15', NULL, NULL),
(624, '04', 'Cikelat', 80, 'aziz', '2017-10-23 16:25:09', NULL, NULL),
(625, '05', 'Caringin', 80, 'aziz', '2017-10-23 16:26:21', NULL, NULL),
(626, '06', 'Gunungkaramat', 80, 'aziz', '2017-10-23 16:27:52', NULL, NULL),
(627, '07', 'Gunungtanjung', 80, 'aziz', '2017-10-23 16:28:08', NULL, NULL),
(628, '08', 'Karangpapak', 80, 'aziz', '2017-10-23 16:28:18', NULL, NULL),
(629, '09', 'Sirnaresmi', 80, 'aziz', '2017-10-23 16:28:28', NULL, NULL),
(630, '10', 'Cicadas', 80, 'aziz', '2017-10-23 16:28:38', NULL, NULL),
(631, '11', 'Wanajaya', 80, 'aziz', '2017-10-23 16:29:01', NULL, NULL),
(632, '12', 'Wangunsari', 80, 'aziz', '2017-10-23 16:29:08', NULL, NULL),
(633, '13', 'Sukarame', 80, 'aziz', '2017-10-23 16:29:21', NULL, NULL),
(634, '01', 'Cikidang', 81, 'aziz', '2017-10-23 16:29:36', NULL, NULL),
(635, '02', 'Cikiray', 81, 'aziz', '2017-10-23 16:29:45', NULL, NULL),
(636, '03', 'Gunungmalang', 81, 'aziz', '2017-10-23 16:30:04', NULL, NULL),
(637, '04', 'Pangkalan', 81, 'aziz', '2017-10-23 16:30:14', NULL, NULL),
(638, '05', 'Cicareuh', 81, 'aziz', '2017-10-23 16:30:35', NULL, NULL),
(639, '06', 'Taman Sari', 81, 'aziz', '2017-10-23 16:30:54', NULL, NULL),
(640, '07', 'Bumi Sari', 81, 'aziz', '2017-10-23 16:32:19', NULL, NULL),
(641, '08', 'Sampora', 81, 'aziz', '2017-10-23 16:32:43', NULL, NULL),
(642, '09', 'Nangkakoneng', 81, 'aziz', '2017-10-23 16:32:59', NULL, NULL),
(643, '10', 'Mekarnangka', 81, 'aziz', '2017-10-23 16:33:16', NULL, NULL),
(644, '11', 'Cijambe', 81, 'aziz', '2017-10-23 16:33:30', NULL, NULL),
(646, '12', 'Cikarae Thoyyibah', 81, 'aziz', '2017-10-23 16:34:11', NULL, NULL),
(647, '01', 'Lengkong', 17, 'aziz', '2017-10-23 17:03:20', NULL, NULL),
(648, '02', 'Cilangkap', 17, 'aziz', '2017-10-23 17:03:36', NULL, NULL),
(649, '03', 'Tegallega', 17, 'aziz', '2017-10-23 17:03:54', NULL, NULL),
(650, '04', 'Neglasari', 82, 'aziz', '2017-10-23 17:04:15', NULL, NULL),
(651, '05', 'Langkapjaya', 17, 'aziz', '2017-10-23 17:04:26', NULL, NULL),
(652, '01', 'Jampang Tengah', 83, 'aziz', '2017-10-23 17:19:25', NULL, NULL),
(653, '02', 'Padabeunghar', 83, 'aziz', '2017-10-23 17:19:37', NULL, NULL),
(654, '03', 'Bantarpanjang', 83, 'aziz', '2017-10-23 17:19:50', NULL, NULL),
(655, '04', 'Bojongjengkol', 83, 'aziz', '2017-10-23 17:20:11', NULL, NULL),
(658, '05', 'Nangerang', 83, 'aziz', '2017-10-23 17:22:46', NULL, NULL),
(659, '06', 'Tanjungsari', 83, 'aziz', '2017-10-23 17:23:07', NULL, NULL),
(660, '07', 'Sindangresmi', 83, 'aziz', '2017-10-23 17:23:30', NULL, NULL),
(661, '08', 'Panumbangan', 83, 'aziz', '2017-10-23 17:23:48', NULL, NULL),
(662, '09', 'Cijulang', 83, 'aziz', '2017-10-23 17:24:00', NULL, NULL),
(663, '10', 'Bantaragung', 83, 'aziz', '2017-10-23 17:24:17', NULL, NULL),
(664, '11', 'Bojongtipar', 83, 'aziz', '2017-10-23 17:24:30', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dplega_110_timwilayah`
--

CREATE TABLE IF NOT EXISTS `dplega_110_timwilayah` (
`idData` int(11) NOT NULL,
  `namaTim` varchar(100) NOT NULL,
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dplega_110_timwilayah`
--

INSERT INTO `dplega_110_timwilayah` (`idData`, `namaTim`, `createdBy`, `createdDate`, `changedBy`, `changedDate`) VALUES
(9, 'Wilayah 4', 'admin', '2017-09-29 19:19:54', NULL, NULL),
(10, 'Wilayah 3', 'admin', '2017-09-29 19:21:43', NULL, NULL),
(11, 'Wilayah 2', 'admin', '2017-09-29 19:31:13', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dplega_111_anggotatimwilayah`
--

CREATE TABLE IF NOT EXISTS `dplega_111_anggotatimwilayah` (
`idData` int(11) NOT NULL,
  `idTimWilayah` int(11) NOT NULL,
  `idAnggota` int(11) NOT NULL,
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dplega_111_anggotatimwilayah`
--

INSERT INTO `dplega_111_anggotatimwilayah` (`idData`, `idTimWilayah`, `idAnggota`, `createdBy`, `createdDate`, `changedBy`, `changedDate`) VALUES
(21, 11, 7, 'admin', '2017-10-29 11:40:53', NULL, NULL),
(22, 11, 12, 'admin', '2017-10-29 11:40:59', NULL, NULL),
(23, 10, 8, 'admin', '2017-10-29 11:41:13', NULL, NULL),
(24, 9, 25, 'admin', '2017-10-29 11:41:23', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dplega_200_bentuklembaga`
--

CREATE TABLE IF NOT EXISTS `dplega_200_bentuklembaga` (
`kodeBentukLembaga` int(11) NOT NULL,
  `namaBentukLembaga` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `urlGambar` varchar(40) DEFAULT NULL,
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dplega_200_bentuklembaga`
--

INSERT INTO `dplega_200_bentuklembaga` (`kodeBentukLembaga`, `namaBentukLembaga`, `deskripsi`, `urlGambar`, `createdBy`, `createdDate`, `changedBy`, `changedDate`) VALUES
(9, 'Yayasan', 'Suatu badan hukum yang mempunyai maksud dan tujuan bersifat sosial, keagamaan dan kemanusiaan, didirikan dengan memperhatikan persyaratan formal yang ditentukan dalam undang-undang.', 'icon-1.png', 'TESTSESSION', '2017-08-24 12:21:33', '', '0000-00-00 00:00:00'),
(10, 'Perkumpulan', 'Suatu badan hukum yang merupakan kumpulan orang, didirikan untuk mewujudkan kesamaan maksud dan tujuan tertentu dibidang sosial, kegamaan, dan kemanusiaan dan tidak membagikan keuntungan kepada anggotanya.', 'icon-2.png', 'TESTSESSION', '2017-08-24 12:22:10', '', '0000-00-00 00:00:00'),
(11, 'Pondok Pesantren', 'Sebuah pendidikan tradisional yang para siswanya tinggal bersama dan belajar dibawah bimbingan guru yang lebih dikenal dengan sebutan kiai dan mempunyai asrama untuk tempat menginap santri.', 'icon-3.png', 'TESTSESSION', '2017-08-24 12:22:28', '', '0000-00-00 00:00:00'),
(12, 'Madrasah Ibtidaiyah', 'Jenjang paling dasar pada pendidikan formal di Indonesia, setara dengan Sekolah Dasar, yang pengelolaannya dilakukan oleh Kementrian Agama.', 'icon-4.png', 'TESTSESSION', '2017-08-24 12:22:45', '', '0000-00-00 00:00:00'),
(13, 'Madrasah Tsanawiyah', 'Jenjang dasar pada pendidikan formal di Indonesia , setara dengan Sekolah Menengah Pertama, yang pengelolaannya dilakukan oleh Departemen Agama.', 'icon-5.png', 'TESTSESSION', '2017-08-24 12:23:04', '', '0000-00-00 00:00:00'),
(14, 'Madrasah Aliyah', 'Jenjang pendidikan menengah pada pendidikan formal di Indonesia, setara dengan Sekolah Menengah Atas, yang pengelolaannya dilakukan oleh Kementrian Agama.', 'icon-6.png', 'TESTSESSION', '2017-08-24 12:23:21', '', '0000-00-00 00:00:00'),
(15, 'Perguruan Tinggi', 'Satuan pendidikan penyelengara pendidikan tinggi. Peserta didik perguruan tinggi disebut Mahasiswa, sedangkan pendidik perguruan tinggi disebut Dosen.', 'icon-7.png', 'TESTSESSION', '2017-08-24 12:24:58', '', '0000-00-00 00:00:00'),
(16, 'RA', 'Jenjang pendidikan anak usia dini (yakni usia 6 tahun atau dibawahnya) dalam bentuk pendidikan formal, dibawah Kementrian Agama.', 'icon-1.png', 'TESTSESSION', '2017-08-24 12:25:15', '', '0000-00-00 00:00:00'),
(17, 'DKM', 'Kelompok Masyarakat\r\n', '', 'TESTSESSION', '2017-08-29 09:36:08', '', '0000-00-00 00:00:00'),
(18, 'Ormas', 'Organisasi kemasyarakatan\r\n', NULL, 'admin', '2017-10-17 13:56:31', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dplega_201_persyaratan`
--

CREATE TABLE IF NOT EXISTS `dplega_201_persyaratan` (
`kodePersyaratan` int(11) NOT NULL,
  `kodeBentukLembaga` int(11) NOT NULL,
  `namaPersyaratan` varchar(100) NOT NULL,
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL,
  `changedBy` varchar(20) DEFAULT NULL,
  `changerdDate` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dplega_201_persyaratan`
--

INSERT INTO `dplega_201_persyaratan` (`kodePersyaratan`, `kodeBentukLembaga`, `namaPersyaratan`, `createdBy`, `createdDate`, `changedBy`, `changerdDate`) VALUES
(1, 9, 'Akta Notaris', 'admin', '2017-10-02 07:33:41', NULL, NULL),
(2, 9, 'SK Kemenhukam', 'admin', '2017-10-02 07:34:02', NULL, NULL),
(3, 11, 'Ijin Operasional', 'admin', '2017-10-02 07:34:13', NULL, NULL),
(4, 10, 'Ijin Operasional', 'admin', '2017-10-02 10:26:09', NULL, NULL),
(5, 12, 'IJin operasiona;', 'admin', '2017-10-02 10:27:45', NULL, NULL),
(6, 17, 'Surat Keterangan Terdaftar', 'admin', '2017-10-25 12:04:30', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dplega_210_bidanggerak`
--

CREATE TABLE IF NOT EXISTS `dplega_210_bidanggerak` (
`kodeBidangGerak` int(11) NOT NULL,
  `namaBidangGerak` varchar(100) NOT NULL,
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dplega_210_bidanggerak`
--

INSERT INTO `dplega_210_bidanggerak` (`kodeBidangGerak`, `namaBidangGerak`, `createdBy`, `createdDate`, `changedBy`, `changedDate`) VALUES
(1, 'IT Solutions', 'admin', '2017-10-02 01:04:30', NULL, NULL),
(2, 'Pendidikan Keagamaan', 'admin', '2017-10-25 12:07:44', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dplega_220_grupverifikasi`
--

CREATE TABLE IF NOT EXISTS `dplega_220_grupverifikasi` (
`kodeGrupVerifikasi` int(11) NOT NULL,
  `namaGrupVerifikasi` varchar(100) NOT NULL,
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dplega_221_verifikasi`
--

CREATE TABLE IF NOT EXISTS `dplega_221_verifikasi` (
`kodeVerifikasi` int(11) NOT NULL,
  `namaVerifikasi` varchar(100) NOT NULL,
  `kodeGrupVerifikasi` int(11) NOT NULL,
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dplega_230_berita`
--

CREATE TABLE IF NOT EXISTS `dplega_230_berita` (
`idData` int(11) NOT NULL,
  `judulBerita` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `urlGambar` varchar(40) DEFAULT NULL,
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dplega_230_berita`
--

INSERT INTO `dplega_230_berita` (`idData`, `judulBerita`, `deskripsi`, `urlGambar`, `createdBy`, `createdDate`, `changedBy`, `changedDate`) VALUES
(1, 'Pembaharuan website!', 'Pusat data potensi lembaga keagamaan di Jawa Barat telah dipererbarui untuk meningkatkan pelayanan terhadap masyarakat dan mempermudah untuk pengelolaan data.', '1_news.jpg', 'admin', '2017-10-02 01:09:40', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dplega_900_logactivities`
--

CREATE TABLE IF NOT EXISTS `dplega_900_logactivities` (
`idData` int(11) NOT NULL,
  `activity` text NOT NULL,
  `status` varchar(7) NOT NULL COMMENT 'SUCCESS/FAILED/PENDING',
  `message` text NOT NULL,
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dplega_900_logactivities_temp`
--

CREATE TABLE IF NOT EXISTS `dplega_900_logactivities_temp` (
`idData` int(11) NOT NULL,
  `activity` text NOT NULL,
  `status` varchar(7) NOT NULL COMMENT 'SUCCESS/FAILED/PENDING',
  `message` text NOT NULL,
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dplega_901_notifications`
--

CREATE TABLE IF NOT EXISTS `dplega_901_notifications` (
`idData` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `waktu` datetime NOT NULL,
  `targetUser` varchar(20) NOT NULL,
  `statusBaca` char(1) NOT NULL DEFAULT '0' COMMENT '0: belum, 1: sudah',
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dplega_901_notifications`
--

INSERT INTO `dplega_901_notifications` (`idData`, `deskripsi`, `waktu`, `targetUser`, `statusBaca`, `createdBy`, `createdDate`, `changedBy`, `changedDate`) VALUES
(1, 'Data Test Lembaga telah diubah oleh Administrator', '2017-10-02 00:57:11', '32211200001', '1', 'admin', '2017-10-02 00:57:11', NULL, NULL),
(2, 'Data Test Lembaga telah diubah oleh Administrator', '2017-10-02 01:04:55', '32211200001', '1', 'admin', '2017-10-02 01:04:55', NULL, NULL),
(3, 'Legalitas (Akta Notaris) Test Lembaga telah ditambahkan oleh Test Lembaga', '2017-10-02 09:00:02', '32211200001', '0', '32211200001testlemb', '2017-10-02 09:00:02', NULL, NULL),
(4, 'Legalitas (SK Kemenhukam) Test Lembaga telah ditambahkan oleh Administrator', '2017-10-02 09:10:15', '32211200001', '1', 'admin', '2017-10-02 09:10:15', NULL, NULL),
(5, 'Legalitas : Akta Notaris milik Test Lembaga telah diverifikasi oleh Administrator', '2017-10-02 10:41:54', '32211200001', '1', 'admin', '2017-10-02 10:41:54', NULL, NULL),
(6, 'Legalitas : SK Kemenhukam milik Test Lembaga telah diverifikasi oleh Administrator', '2017-10-02 10:42:44', '32211200001', '1', 'admin', '2017-10-02 10:42:44', NULL, NULL),
(7, 'Data Lembaga 1 telah diubah oleh Administrator', '2017-10-26 19:22:19', '32211200001', '1', 'admin', '2017-10-26 19:22:19', NULL, NULL),
(9, 'Legalitas (Akta Notaris) Lembaga 1 telah diubah oleh Test Lembaga', '2017-10-28 22:37:58', '32211200001', '0', '32211200001testlemb', '2017-10-28 22:37:58', NULL, NULL),
(10, 'Legalitas : Akta Notaris milik Lembaga 1 telah diverifikasi oleh Administrator', '2017-10-28 22:44:04', '32211200001', '1', 'admin', '2017-10-28 22:44:04', NULL, NULL),
(12, 'Legalitas (Akta Notaris) Lembaga 1 telah diubah oleh Administrator', '2017-10-30 09:44:02', '32211200001', '1', 'admin', '2017-10-30 09:44:02', NULL, NULL),
(13, 'Legalitas : Akta Notaris milik Lembaga 1 telah diverifikasi oleh Administrator', '2017-10-30 09:44:31', '32211200001', '1', 'admin', '2017-10-30 09:44:31', NULL, NULL),
(16, 'Legalitas (Akta Notaris) Lembaga 1 telah diubah oleh Administrator', '2017-10-30 10:14:26', '32211200001', '0', 'admin', '2017-10-30 10:14:26', NULL, NULL),
(17, 'Legalitas : Akta Notaris milik Lembaga 1 telah diverifikasi oleh Administrator', '2017-10-30 10:15:10', '32211200001', '0', 'admin', '2017-10-30 10:15:10', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dplega_910_user`
--

CREATE TABLE IF NOT EXISTS `dplega_910_user` (
`idData` int(11) NOT NULL,
  `noRegistrasi` char(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `noRt` varchar(3) DEFAULT NULL,
  `noRw` varchar(3) DEFAULT NULL,
  `kodeKelurahan` int(11) DEFAULT NULL,
  `kodeKecamatan` int(11) DEFAULT NULL,
  `kodeWilayah` int(11) DEFAULT NULL,
  `kodeProvinsi` int(11) DEFAULT NULL,
  `noTelp` varchar(16) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `urlGambar` varchar(40) DEFAULT NULL,
  `userLevel` int(11) NOT NULL,
  `lingkupArea` char(1) NOT NULL,
  `idBatasArea` int(11) NOT NULL,
  `statusActive` int(11) NOT NULL,
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dplega_910_user`
--

INSERT INTO `dplega_910_user` (`idData`, `noRegistrasi`, `nama`, `jabatan`, `alamat`, `noRt`, `noRw`, `kodeKelurahan`, `kodeKecamatan`, `kodeWilayah`, `kodeProvinsi`, `noTelp`, `email`, `username`, `password`, `urlGambar`, `userLevel`, `lingkupArea`, `idBatasArea`, `statusActive`, `createdBy`, `createdDate`, `changedBy`, `changedDate`) VALUES
(43, '', 'Administrator', '', '\r\n', '', '', 3, 1, 2, 1, '123123', 'admin@dplega.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin_avatar.jpg', 7, '', 0, 1, 'TESTSESSION', '2017-08-28 16:08:25', 'admin', '2017-09-11 18:44:03'),
(71, '', 'Aziz M', 'Honorer', 'Bandung', '', '', 47, 13, 27, 8, '', 'aziz_muslim70@yahoo.com', 'aziz', 'b85dc795ba17cb243ab156f8c52124e1', NULL, 3, '3', 8, 1, 'admin', '2017-09-22 16:32:27', 'admin', '2017-09-22 16:33:56'),
(72, '', 'Didin', 'Honorer', 'Bandung', '', '', 47, 13, 27, 8, '', 'didin2101@gmail.com', 'didin', '80f0ca7f9c9bf51dea99162632e351aa', NULL, 3, '3', 8, 1, 'admin', '2017-09-22 16:44:36', NULL, NULL),
(73, '', 'Fahmi', 'Honorer', 'Bandung', '', '', 47, 13, 27, 8, '', 'moh.fahmi.esha@gmail.com', 'fahmi', 'f11d50d63d3891a44c332e46d6d7d561', NULL, 3, '3', 8, 1, 'admin', '2017-09-22 16:47:50', NULL, NULL),
(74, '', 'Iman', 'Honorer', 'Bandung', '', '', 47, 13, 27, 8, '', 'acoengtomo83@gmail.com', 'iman', '5be9a68073f66a56554e25614e9f1c9a', NULL, 3, '3', 8, 1, 'admin', '2017-09-22 16:49:44', NULL, NULL),
(75, '32211200001', 'Test Lembaga', 'Penanggung jawab Lembaga', 'Jl. Cibangkong 51A/120', '004', '012', 63, 16, 27, 8, '085794867714', 'megareceiver@gmail.com', '32211200001testlemb', 'd58d1e8da2c4117f552c7e9cc89e1e22', '32211200001_logo.png', 1, '', 0, 1, 'admin', '2017-10-02 00:42:57', 'admin', '2017-10-30 10:13:48'),
(76, '', 'Memet Ahmadipraja', 'Pelaksana', 'Gg.Cempaka Putih ', '001', '007', 154, 34, 27, 8, '082217677724', 'memet_ahamdipraja@yahoo.com', 'almiraputri', '9610041073d4ff1f4fc078a0f2bdcbb7', 'Almiraputri_avatar.jpg', 3, '3', 8, 1, 'admin', '2017-10-17 14:16:33', 'Almiraputri', '2017-10-17 14:26:32'),
(77, '', 'Cecep Rohendi', 'Honorer', 'Kp. Cijengkol ', '02', '01', 0, 0, 0, 0, '081313011001', 'ceceprohendi93@gmail.com', 'cepcephendi', '7c361cabbf885345f61d1ed66d55b5da', NULL, 3, '3', 8, 1, 'admin', '2017-10-17 16:28:04', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dplega_911_useraccess`
--

CREATE TABLE IF NOT EXISTS `dplega_911_useraccess` (
`idData` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `idApps` int(11) NOT NULL,
  `module` varchar(100) NOT NULL,
  `lihat` char(1) NOT NULL DEFAULT '0' COMMENT '0: non aktif; 1: aktif',
  `tambah` char(1) NOT NULL DEFAULT '0' COMMENT '0: non aktif; 1: aktif',
  `ubah` char(1) NOT NULL DEFAULT '0' COMMENT '0: non aktif; 1: aktif',
  `hapus` char(1) NOT NULL DEFAULT '0' COMMENT '0: non aktif; 1: aktif',
  `statusAktif` int(11) NOT NULL DEFAULT '1',
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=135 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dplega_911_useraccess`
--

INSERT INTO `dplega_911_useraccess` (`idData`, `username`, `idApps`, `module`, `lihat`, `tambah`, `ubah`, `hapus`, `statusAktif`, `createdBy`, `createdDate`, `changedBy`, `changedDate`) VALUES
(1, 'admin', 1, 'kelembagaan', '1', '1', '1', '1', 1, 'TESTSESSION', '2017-08-28 16:08:25', '', '0000-00-00 00:00:00'),
(2, 'admin', 1, 'lingkupArea', '1', '1', '1', '1', 1, 'TESTSESSION', '2017-08-28 16:08:25', '', '0000-00-00 00:00:00'),
(3, 'admin', 1, 'pengaturanKelembagaan', '1', '1', '1', '1', 1, 'TESTSESSION', '2017-08-28 16:08:25', '', '0000-00-00 00:00:00'),
(4, 'admin', 1, 'pengaturanVerifikasi', '1', '1', '1', '1', 1, 'TESTSESSION', '2017-08-28 16:08:25', '', '0000-00-00 00:00:00'),
(5, 'admin', 1, 'berita', '1', '1', '1', '1', 1, 'TESTSESSION', '2017-08-28 16:08:25', '', '0000-00-00 00:00:00'),
(6, 'admin', 1, 'konfigurasi', '1', '1', '1', '1', 1, 'TESTSESSION', '2017-08-28 16:08:25', '', '0000-00-00 00:00:00'),
(7, 'admin', 1, 'verifikasi', '1', '1', '1', '1', 1, 'admin', '2017-09-21 00:01:00', NULL, NULL),
(92, 'aziz', 1, 'kelembagaan', '1', '1', '1', '1', 1, 'admin', '2017-09-22 16:32:27', 'admin', '2017-09-22 16:33:56'),
(93, 'aziz', 1, 'lingkupArea', '1', '1', '1', '1', 1, 'admin', '2017-09-22 16:32:27', 'admin', '2017-09-22 16:33:56'),
(94, 'aziz', 1, 'pengaturanKelembagaan', '1', '1', '1', '1', 1, 'admin', '2017-09-22 16:32:27', 'admin', '2017-09-22 16:33:56'),
(95, 'aziz', 1, 'pengaturanVerifikasi', '1', '1', '1', '1', 1, 'admin', '2017-09-22 16:32:27', 'admin', '2017-09-22 16:33:56'),
(96, 'aziz', 1, 'berita', '1', '1', '1', '1', 1, 'admin', '2017-09-22 16:32:27', 'admin', '2017-09-22 16:33:56'),
(97, 'aziz', 1, 'konfigurasi', '0', '0', '0', '0', 1, 'admin', '2017-09-22 16:32:27', 'admin', '2017-09-22 16:33:56'),
(98, 'aziz', 1, 'verifikasi', '1', '1', '1', '1', 1, 'admin', '2017-09-22 16:32:27', 'admin', '2017-09-22 16:33:56'),
(99, 'didin', 1, 'kelembagaan', '1', '1', '1', '1', 1, 'admin', '2017-09-22 16:44:36', NULL, NULL),
(100, 'didin', 1, 'lingkupArea', '1', '1', '1', '1', 1, 'admin', '2017-09-22 16:44:36', NULL, NULL),
(101, 'didin', 1, 'pengaturanKelembagaan', '1', '1', '1', '1', 1, 'admin', '2017-09-22 16:44:36', NULL, NULL),
(102, 'didin', 1, 'pengaturanVerifikasi', '1', '1', '1', '1', 1, 'admin', '2017-09-22 16:44:36', NULL, NULL),
(103, 'didin', 1, 'berita', '1', '1', '1', '1', 1, 'admin', '2017-09-22 16:44:36', NULL, NULL),
(104, 'didin', 1, 'konfigurasi', '1', '1', '1', '1', 1, 'admin', '2017-09-22 16:44:36', NULL, NULL),
(105, 'didin', 1, 'verifikasi', '1', '1', '1', '1', 1, 'admin', '2017-09-22 16:44:36', NULL, NULL),
(106, 'fahmi', 1, 'kelembagaan', '1', '1', '1', '1', 1, 'admin', '2017-09-22 16:47:50', NULL, NULL),
(107, 'fahmi', 1, 'lingkupArea', '1', '1', '1', '1', 1, 'admin', '2017-09-22 16:47:50', NULL, NULL),
(108, 'fahmi', 1, 'pengaturanKelembagaan', '1', '1', '1', '1', 1, 'admin', '2017-09-22 16:47:50', NULL, NULL),
(109, 'fahmi', 1, 'pengaturanVerifikasi', '1', '1', '1', '1', 1, 'admin', '2017-09-22 16:47:50', NULL, NULL),
(110, 'fahmi', 1, 'berita', '1', '1', '1', '1', 1, 'admin', '2017-09-22 16:47:50', NULL, NULL),
(111, 'fahmi', 1, 'konfigurasi', '1', '1', '1', '1', 1, 'admin', '2017-09-22 16:47:50', NULL, NULL),
(112, 'fahmi', 1, 'verifikasi', '1', '1', '1', '1', 1, 'admin', '2017-09-22 16:47:50', NULL, NULL),
(113, 'iman', 1, 'kelembagaan', '1', '1', '1', '1', 1, 'admin', '2017-09-22 16:49:44', NULL, NULL),
(114, 'iman', 1, 'lingkupArea', '1', '1', '1', '1', 1, 'admin', '2017-09-22 16:49:44', NULL, NULL),
(115, 'iman', 1, 'pengaturanKelembagaan', '1', '1', '1', '1', 1, 'admin', '2017-09-22 16:49:44', NULL, NULL),
(116, 'iman', 1, 'pengaturanVerifikasi', '1', '1', '1', '1', 1, 'admin', '2017-09-22 16:49:44', NULL, NULL),
(117, 'iman', 1, 'berita', '1', '1', '1', '1', 1, 'admin', '2017-09-22 16:49:44', NULL, NULL),
(118, 'iman', 1, 'konfigurasi', '1', '1', '1', '1', 1, 'admin', '2017-09-22 16:49:44', NULL, NULL),
(119, 'iman', 1, 'verifikasi', '1', '1', '1', '1', 1, 'admin', '2017-09-22 16:49:44', NULL, NULL),
(120, '32211200001testlemb', 1, 'kelembagaan', '1', '0', '1', '0', 1, 'TESTSESSION', '2017-10-02 00:42:57', 'admin', '2017-10-30 10:13:48'),
(121, 'almiraputri', 1, 'kelembagaan', '1', '1', '1', '1', 1, 'admin', '2017-10-17 14:16:34', NULL, NULL),
(122, 'almiraputri', 1, 'lingkupArea', '1', '1', '1', '1', 1, 'admin', '2017-10-17 14:16:34', NULL, NULL),
(123, 'almiraputri', 1, 'pengaturanKelembagaan', '1', '1', '1', '1', 1, 'admin', '2017-10-17 14:16:34', NULL, NULL),
(124, 'almiraputri', 1, 'pengaturanVerifikasi', '1', '1', '1', '1', 1, 'admin', '2017-10-17 14:16:34', NULL, NULL),
(125, 'almiraputri', 1, 'berita', '1', '1', '1', '1', 1, 'admin', '2017-10-17 14:16:34', NULL, NULL),
(126, 'almiraputri', 1, 'konfigurasi', '1', '1', '1', '1', 1, 'admin', '2017-10-17 14:16:34', NULL, NULL),
(127, 'almiraputri', 1, 'verifikasi', '1', '1', '1', '1', 1, 'admin', '2017-10-17 14:16:34', NULL, NULL),
(128, 'cepcephendi', 1, 'kelembagaan', '1', '1', '1', '1', 1, 'admin', '2017-10-17 16:28:04', NULL, NULL),
(129, 'cepcephendi', 1, 'lingkupArea', '1', '1', '1', '1', 1, 'admin', '2017-10-17 16:28:04', NULL, NULL),
(130, 'cepcephendi', 1, 'pengaturanKelembagaan', '1', '1', '1', '1', 1, 'admin', '2017-10-17 16:28:04', NULL, NULL),
(131, 'cepcephendi', 1, 'pengaturanVerifikasi', '1', '1', '1', '1', 1, 'admin', '2017-10-17 16:28:04', NULL, NULL),
(132, 'cepcephendi', 1, 'berita', '1', '1', '1', '1', 1, 'admin', '2017-10-17 16:28:04', NULL, NULL),
(133, 'cepcephendi', 1, 'konfigurasi', '1', '1', '1', '1', 1, 'admin', '2017-10-17 16:28:04', NULL, NULL),
(134, 'cepcephendi', 1, 'verifikasi', '1', '1', '1', '1', 1, 'admin', '2017-10-17 16:28:04', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dplega_912_apps`
--

CREATE TABLE IF NOT EXISTS `dplega_912_apps` (
`idData` int(11) NOT NULL,
  `idApps` varchar(4) NOT NULL,
  `appsName` varchar(100) NOT NULL,
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dplega_912_apps`
--

INSERT INTO `dplega_912_apps` (`idData`, `idApps`, `appsName`, `createdBy`, `createdDate`, `changedBy`, `changedDate`) VALUES
(1, 'DPLG', 'Akses ke dplega 2.0', 'SESSION TEST', '2017-08-25 03:06:12', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dplega_920_backuphistory`
--

CREATE TABLE IF NOT EXISTS `dplega_920_backuphistory` (
`idData` int(11) NOT NULL,
  `namaFile` varchar(100) NOT NULL,
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dplega_920_backuphistory`
--

INSERT INTO `dplega_920_backuphistory` (`idData`, `namaFile`, `createdBy`, `createdDate`, `changedBy`, `changedDate`) VALUES
(1, 'dplega_dumb_2017-09-12 145909.db', 'admin', '2017-09-12 19:59:09', '', '0000-00-00 00:00:00'),
(2, 'dplega_dumb_2017-09-12 150257.db', 'admin', '2017-09-12 20:02:57', '', '0000-00-00 00:00:00'),
(3, 'dplega_dumb_2017-09-13 175743.db', 'admin', '2017-09-13 22:57:43', NULL, NULL),
(4, 'dplega_dumb_2017-09-19 203924.db', 'admin', '2017-09-20 01:39:24', NULL, NULL),
(5, 'dplega_dumb_2017-09-20 165724.db', 'admin', '2017-09-20 21:57:24', NULL, NULL),
(6, 'dplega_dumb_2017-09-21 115253.db', 'admin', '2017-09-21 16:52:53', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dplega_921_restorehistory`
--

CREATE TABLE IF NOT EXISTS `dplega_921_restorehistory` (
`idData` int(11) NOT NULL,
  `namaFile` varchar(100) NOT NULL,
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dplega_000_lembaga`
--
ALTER TABLE `dplega_000_lembaga`
 ADD PRIMARY KEY (`noRegistrasi`);

--
-- Indexes for table `dplega_000_lembaga_temp`
--
ALTER TABLE `dplega_000_lembaga_temp`
 ADD PRIMARY KEY (`noRegistrasi`);

--
-- Indexes for table `dplega_001_sejarah`
--
ALTER TABLE `dplega_001_sejarah`
 ADD PRIMARY KEY (`idData`);

--
-- Indexes for table `dplega_001_sejarah_temp`
--
ALTER TABLE `dplega_001_sejarah_temp`
 ADD PRIMARY KEY (`idData`);

--
-- Indexes for table `dplega_002_kepengurusan`
--
ALTER TABLE `dplega_002_kepengurusan`
 ADD PRIMARY KEY (`idData`);

--
-- Indexes for table `dplega_002_kepengurusan_temp`
--
ALTER TABLE `dplega_002_kepengurusan_temp`
 ADD PRIMARY KEY (`idData`);

--
-- Indexes for table `dplega_003_usaha`
--
ALTER TABLE `dplega_003_usaha`
 ADD PRIMARY KEY (`idData`);

--
-- Indexes for table `dplega_003_usaha_temp`
--
ALTER TABLE `dplega_003_usaha_temp`
 ADD PRIMARY KEY (`idData`);

--
-- Indexes for table `dplega_005_koleksi`
--
ALTER TABLE `dplega_005_koleksi`
 ADD PRIMARY KEY (`idData`);

--
-- Indexes for table `dplega_005_koleksi_temp`
--
ALTER TABLE `dplega_005_koleksi_temp`
 ADD PRIMARY KEY (`idData`);

--
-- Indexes for table `dplega_006_prestasi`
--
ALTER TABLE `dplega_006_prestasi`
 ADD PRIMARY KEY (`idData`);

--
-- Indexes for table `dplega_006_prestasi_temp`
--
ALTER TABLE `dplega_006_prestasi_temp`
 ADD PRIMARY KEY (`idData`);

--
-- Indexes for table `dplega_007_visualisasiusaha`
--
ALTER TABLE `dplega_007_visualisasiusaha`
 ADD PRIMARY KEY (`idData`);

--
-- Indexes for table `dplega_007_visualisasiusaha_temp`
--
ALTER TABLE `dplega_007_visualisasiusaha_temp`
 ADD PRIMARY KEY (`idData`);

--
-- Indexes for table `dplega_008_visualisasisarana`
--
ALTER TABLE `dplega_008_visualisasisarana`
 ADD PRIMARY KEY (`idData`);

--
-- Indexes for table `dplega_008_visualisasisarana_temp`
--
ALTER TABLE `dplega_008_visualisasisarana_temp`
 ADD PRIMARY KEY (`idData`);

--
-- Indexes for table `dplega_009_legalitas`
--
ALTER TABLE `dplega_009_legalitas`
 ADD PRIMARY KEY (`idData`);

--
-- Indexes for table `dplega_009_legalitas_temp`
--
ALTER TABLE `dplega_009_legalitas_temp`
 ADD PRIMARY KEY (`idData`);

--
-- Indexes for table `dplega_010_riwayatbantuan`
--
ALTER TABLE `dplega_010_riwayatbantuan`
 ADD PRIMARY KEY (`idData`);

--
-- Indexes for table `dplega_010_riwayatbantuan_temp`
--
ALTER TABLE `dplega_010_riwayatbantuan_temp`
 ADD PRIMARY KEY (`idData`);

--
-- Indexes for table `dplega_011_hirarkilembaga`
--
ALTER TABLE `dplega_011_hirarkilembaga`
 ADD PRIMARY KEY (`idData`);

--
-- Indexes for table `dplega_011_hirarkilembaga_temp`
--
ALTER TABLE `dplega_011_hirarkilembaga_temp`
 ADD PRIMARY KEY (`idData`);

--
-- Indexes for table `dplega_012_verifikasi`
--
ALTER TABLE `dplega_012_verifikasi`
 ADD PRIMARY KEY (`idData`);

--
-- Indexes for table `dplega_012_verifikasi_temp`
--
ALTER TABLE `dplega_012_verifikasi_temp`
 ADD PRIMARY KEY (`idData`);

--
-- Indexes for table `dplega_013_verifikasilogs`
--
ALTER TABLE `dplega_013_verifikasilogs`
 ADD PRIMARY KEY (`idData`);

--
-- Indexes for table `dplega_013_verifikasilogs_temp`
--
ALTER TABLE `dplega_013_verifikasilogs_temp`
 ADD PRIMARY KEY (`idData`);

--
-- Indexes for table `dplega_100_provinsi`
--
ALTER TABLE `dplega_100_provinsi`
 ADD PRIMARY KEY (`idData`);

--
-- Indexes for table `dplega_101_wilayah`
--
ALTER TABLE `dplega_101_wilayah`
 ADD PRIMARY KEY (`idData`);

--
-- Indexes for table `dplega_102_kecamatan`
--
ALTER TABLE `dplega_102_kecamatan`
 ADD PRIMARY KEY (`idData`);

--
-- Indexes for table `dplega_103_kelurahan`
--
ALTER TABLE `dplega_103_kelurahan`
 ADD PRIMARY KEY (`idData`);

--
-- Indexes for table `dplega_110_timwilayah`
--
ALTER TABLE `dplega_110_timwilayah`
 ADD PRIMARY KEY (`idData`);

--
-- Indexes for table `dplega_111_anggotatimwilayah`
--
ALTER TABLE `dplega_111_anggotatimwilayah`
 ADD PRIMARY KEY (`idData`);

--
-- Indexes for table `dplega_200_bentuklembaga`
--
ALTER TABLE `dplega_200_bentuklembaga`
 ADD PRIMARY KEY (`kodeBentukLembaga`);

--
-- Indexes for table `dplega_201_persyaratan`
--
ALTER TABLE `dplega_201_persyaratan`
 ADD PRIMARY KEY (`kodePersyaratan`);

--
-- Indexes for table `dplega_210_bidanggerak`
--
ALTER TABLE `dplega_210_bidanggerak`
 ADD PRIMARY KEY (`kodeBidangGerak`);

--
-- Indexes for table `dplega_220_grupverifikasi`
--
ALTER TABLE `dplega_220_grupverifikasi`
 ADD PRIMARY KEY (`kodeGrupVerifikasi`);

--
-- Indexes for table `dplega_221_verifikasi`
--
ALTER TABLE `dplega_221_verifikasi`
 ADD PRIMARY KEY (`kodeVerifikasi`), ADD KEY `kodeGrupVerifikasi` (`kodeGrupVerifikasi`);

--
-- Indexes for table `dplega_230_berita`
--
ALTER TABLE `dplega_230_berita`
 ADD PRIMARY KEY (`idData`);

--
-- Indexes for table `dplega_900_logactivities`
--
ALTER TABLE `dplega_900_logactivities`
 ADD PRIMARY KEY (`idData`);

--
-- Indexes for table `dplega_900_logactivities_temp`
--
ALTER TABLE `dplega_900_logactivities_temp`
 ADD PRIMARY KEY (`idData`);

--
-- Indexes for table `dplega_901_notifications`
--
ALTER TABLE `dplega_901_notifications`
 ADD PRIMARY KEY (`idData`);

--
-- Indexes for table `dplega_910_user`
--
ALTER TABLE `dplega_910_user`
 ADD PRIMARY KEY (`idData`), ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `dplega_911_useraccess`
--
ALTER TABLE `dplega_911_useraccess`
 ADD PRIMARY KEY (`idData`);

--
-- Indexes for table `dplega_912_apps`
--
ALTER TABLE `dplega_912_apps`
 ADD PRIMARY KEY (`idData`);

--
-- Indexes for table `dplega_920_backuphistory`
--
ALTER TABLE `dplega_920_backuphistory`
 ADD PRIMARY KEY (`idData`);

--
-- Indexes for table `dplega_921_restorehistory`
--
ALTER TABLE `dplega_921_restorehistory`
 ADD PRIMARY KEY (`idData`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dplega_001_sejarah`
--
ALTER TABLE `dplega_001_sejarah`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dplega_001_sejarah_temp`
--
ALTER TABLE `dplega_001_sejarah_temp`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dplega_002_kepengurusan`
--
ALTER TABLE `dplega_002_kepengurusan`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dplega_002_kepengurusan_temp`
--
ALTER TABLE `dplega_002_kepengurusan_temp`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dplega_003_usaha`
--
ALTER TABLE `dplega_003_usaha`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dplega_003_usaha_temp`
--
ALTER TABLE `dplega_003_usaha_temp`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dplega_005_koleksi`
--
ALTER TABLE `dplega_005_koleksi`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dplega_005_koleksi_temp`
--
ALTER TABLE `dplega_005_koleksi_temp`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dplega_006_prestasi`
--
ALTER TABLE `dplega_006_prestasi`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dplega_006_prestasi_temp`
--
ALTER TABLE `dplega_006_prestasi_temp`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dplega_007_visualisasiusaha`
--
ALTER TABLE `dplega_007_visualisasiusaha`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dplega_007_visualisasiusaha_temp`
--
ALTER TABLE `dplega_007_visualisasiusaha_temp`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dplega_008_visualisasisarana`
--
ALTER TABLE `dplega_008_visualisasisarana`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `dplega_008_visualisasisarana_temp`
--
ALTER TABLE `dplega_008_visualisasisarana_temp`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dplega_009_legalitas`
--
ALTER TABLE `dplega_009_legalitas`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dplega_009_legalitas_temp`
--
ALTER TABLE `dplega_009_legalitas_temp`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dplega_010_riwayatbantuan`
--
ALTER TABLE `dplega_010_riwayatbantuan`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dplega_010_riwayatbantuan_temp`
--
ALTER TABLE `dplega_010_riwayatbantuan_temp`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dplega_011_hirarkilembaga`
--
ALTER TABLE `dplega_011_hirarkilembaga`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dplega_011_hirarkilembaga_temp`
--
ALTER TABLE `dplega_011_hirarkilembaga_temp`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dplega_012_verifikasi`
--
ALTER TABLE `dplega_012_verifikasi`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dplega_012_verifikasi_temp`
--
ALTER TABLE `dplega_012_verifikasi_temp`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dplega_013_verifikasilogs`
--
ALTER TABLE `dplega_013_verifikasilogs`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dplega_013_verifikasilogs_temp`
--
ALTER TABLE `dplega_013_verifikasilogs_temp`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dplega_100_provinsi`
--
ALTER TABLE `dplega_100_provinsi`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `dplega_101_wilayah`
--
ALTER TABLE `dplega_101_wilayah`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `dplega_102_kecamatan`
--
ALTER TABLE `dplega_102_kecamatan`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=155;
--
-- AUTO_INCREMENT for table `dplega_103_kelurahan`
--
ALTER TABLE `dplega_103_kelurahan`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=665;
--
-- AUTO_INCREMENT for table `dplega_110_timwilayah`
--
ALTER TABLE `dplega_110_timwilayah`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `dplega_111_anggotatimwilayah`
--
ALTER TABLE `dplega_111_anggotatimwilayah`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `dplega_200_bentuklembaga`
--
ALTER TABLE `dplega_200_bentuklembaga`
MODIFY `kodeBentukLembaga` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `dplega_201_persyaratan`
--
ALTER TABLE `dplega_201_persyaratan`
MODIFY `kodePersyaratan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `dplega_210_bidanggerak`
--
ALTER TABLE `dplega_210_bidanggerak`
MODIFY `kodeBidangGerak` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dplega_220_grupverifikasi`
--
ALTER TABLE `dplega_220_grupverifikasi`
MODIFY `kodeGrupVerifikasi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dplega_221_verifikasi`
--
ALTER TABLE `dplega_221_verifikasi`
MODIFY `kodeVerifikasi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dplega_230_berita`
--
ALTER TABLE `dplega_230_berita`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dplega_900_logactivities`
--
ALTER TABLE `dplega_900_logactivities`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dplega_900_logactivities_temp`
--
ALTER TABLE `dplega_900_logactivities_temp`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dplega_901_notifications`
--
ALTER TABLE `dplega_901_notifications`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `dplega_910_user`
--
ALTER TABLE `dplega_910_user`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT for table `dplega_911_useraccess`
--
ALTER TABLE `dplega_911_useraccess`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=135;
--
-- AUTO_INCREMENT for table `dplega_912_apps`
--
ALTER TABLE `dplega_912_apps`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dplega_920_backuphistory`
--
ALTER TABLE `dplega_920_backuphistory`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `dplega_921_restorehistory`
--
ALTER TABLE `dplega_921_restorehistory`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
