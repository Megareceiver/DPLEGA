-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08 Okt 2017 pada 09.54
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dplega_dumb`
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
  `statusAktif` char(1) NOT NULL DEFAULT '1' COMMENT '0 (dihapus), 1 (aktif), 2(perubahan)',
  `urlGambarLogo` varchar(40) DEFAULT NULL,
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dplega_000_lembaga`
--

INSERT INTO `dplega_000_lembaga` (`noRegistrasi`, `nama`, `alamat`, `noRt`, `noRw`, `kodeKelurahan`, `kodeKecamatan`, `kodeWilayah`, `kodeProvinsi`, `langitude`, `latitude`, `noTelp`, `email`, `mediaSosial`, `kodeBentukLembaga`, `kodeBidangGerak`, `jumlahPengurus`, `noNpwp`, `visiLembaga`, `misiLembaga`, `organisasiAfiliasi`, `catatanLain`, `statusAktif`, `urlGambarLogo`, `createdBy`, `createdDate`, `changedBy`, `changedDate`) VALUES
('00037300001', 'sukamanah', 'Tasikmalaya', '02', '02', 3, 1, 1, 1, '', '', '085223388235', 'miftah_pitriyana@yahoo.com', '', 11, 0, 0, '', '', '', '', '', '1', '', 'TESTSESSION', '2017-08-29 14:18:36', 'admin', '2017-09-16 20:21:41');

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
  `createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dplega_000_lembaga_temp`
--

INSERT INTO `dplega_000_lembaga_temp` (`noRegistrasi`, `nama`, `alamat`, `noRt`, `noRw`, `kodeKelurahan`, `kodeKecamatan`, `kodeWilayah`, `kodeProvinsi`, `langitude`, `latitude`, `noTelp`, `email`, `mediaSosial`, `kodeBentukLembaga`, `kodeBidangGerak`, `jumlahPengurus`, `noNpwp`, `visiLembaga`, `misiLembaga`, `organisasiAfiliasi`, `catatanLain`, `statusAktif`, `urlGambarLogo`, `createdBy`, `createdDate`, `changedBy`, `changedDate`) VALUES
('00030200001', 'Jalasutra', 'asd', '12', '21', 3, 1, 1, 1, '107.618761', '-6.902526', '12345', 'ceceprohendi93@gmail.com', '', 11, 0, 0, '', '', '', '', '', '1', '', 'TESTSESSION', '2017-08-29 14:16:31', 'admin', '2017-10-01 16:55:17'),
('44330900001', 'c', 'sdfsdf', '4', '4', 4, 4, 4, 5, '', '', '323', 'asdasd@asdad.com', '', 9, 0, 0, '', '', '', '', '', '2', '', 'admin', '2017-09-07 23:18:56', '', '0000-00-00 00:00:00'),
('55051177000', 'twerwer', 'fsdfsdf', '3', '4', 3, 2, 2, 1, '', '', '123123', 'asdad@asdasd.com', '', 9, 0, 0, '', '', '', '', '', '1', '', 'admin', '2017-09-07 23:15:29', 'admin', '2017-09-16 18:58:35'),
('55051177770', 'sdfsf', 'dfgdfgdfg', '3', '4', 3, 4, 5, 6, '', '', '546456', 'asdasd@adad.com', '', 9, 0, 0, '', '', '', '', '', '1', '', 'admin', '2017-09-07 23:16:07', 'admin', '2017-09-16 18:57:23'),
('55051177771', 'a', 'asdasd', '3', '4', 3, 1, 2, 1, '', '', '23', 'sdfsdf@adasd.com', '', 9, 0, 0, '', '', '', '', '', '1', '', 'admin', '2017-09-07 23:17:25', '', '0000-00-00 00:00:00'),
('55051177772', 'banyak', 'werwer', '4', '4', 3, 1, 1, 1, '', '', '3', 'asd@asdad.com', '', 9, 0, 0, '', '', '', '', '', '1', '', 'admin', '2017-09-07 23:18:29', 'admin', '2017-09-21 19:48:35'),
('55051177773', 'Syncard Tech.', '- jalan street', '0', '0', 3, 1, 2, 1, '', '', '123456789101', 'home@syncardtech.com', '', 10, 0, 0, '', '', '', '', '', '1', NULL, 'admin', '2017-09-21 16:20:14', '55051177773syncardt', '2017-09-21 16:29:05');

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
  `createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `dplega_001_sejarah_temp`
--

INSERT INTO `dplega_001_sejarah_temp` (`idData`, `noRegistrasi`, `deskripsi`, `tanggalDidirikan`, `kepemilikan`, `statusTanah`, `statusSertifikasi`, `luasTanah`, `satuanLuasTanah`, `luasBangunan`, `satuanLuasBangunan`, `kondisiBangunan`, `JumlahBangunan`, `statusSarana`, `statusStrukturKepengurusan`, `urlGambarStrukturKepengurusan`, `bahasaPengantar`, `statusSensus`, `statusBantuanPemerintah`, `kondisiGeografis`, `potensiWilayah`, `jenisWilayah`, `catatanLain`, `createdBy`, `createdDate`, `changedBy`, `changedDate`) VALUES
(1, '44330900001', 'asdasd', '2017-09-07', '', '', 'Belum', 0, '', 0, '', 'Baik', 0, 'Tidak ada', 'Tidak Ada', '', '', 'Belum', 'Belum', '', '', '', '', 'admin', '2017-09-07 23:40:54', 'admin', '2017-09-20 16:50:25');

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
  `createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `dplega_002_kepengurusan_temp`
--

INSERT INTO `dplega_002_kepengurusan_temp` (`idData`, `noRegistrasi`, `penanggungJawab`, `jabatan`, `alamat`, `noRt`, `noRw`, `kodeKelurahan`, `kodeKecamatan`, `kodeWilayah`, `kodeProvinsi`, `noTelp`, `kewarganegaraan`, `tempatLahir`, `tanggalLahir`, `jenisKelamin`, `agama`, `jabatanLain`, `pendidikan`, `kompetensi`, `catatan`, `createdBy`, `createdDate`, `changedBy`, `changedDate`) VALUES
(1, '44330900001', '', '', '', '', '', 4, 4, 4, 5, '', 'WNI', '', '0000-00-00', '', '', '', '', '', '', 'admin', '2017-09-07 23:38:32', '', '0000-00-00 00:00:00');

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
  `createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `dplega_003_usaha_temp`
--

INSERT INTO `dplega_003_usaha_temp` (`idData`, `noRegistrasi`, `namaUsaha`, `jenisUsaha`, `detailUsaha`, `jumlahPekerja`, `catatan`, `createdBy`, `createdDate`, `changedBy`, `changedDate`) VALUES
(1, '44330900001', 'asd', '0', '', 0, '', 'admin', '2017-09-07 23:42:50', '', '0000-00-00 00:00:00');

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
  `createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `dplega_005_koleksi_temp`
--

INSERT INTO `dplega_005_koleksi_temp` (`idData`, `noRegistrasi`, `jenisKoleksi`, `judulKoleksi`, `deskripsi`, `createdBy`, `createdDate`, `changedBy`, `changedDate`) VALUES
(1, '44330900001', 'Buku', 'Membaca itu baik!', 'Ini adalah sinopsi dari buku ini', 'admin', '2017-09-21 13:05:35', NULL, NULL);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `dplega_006_prestasi_temp`
--

INSERT INTO `dplega_006_prestasi_temp` (`idData`, `noRegistrasi`, `deskripsi`, `createdBy`, `createdDate`, `changedBy`, `changedDate`) VALUES
(1, '55051177771', 'Membaca puisi se-kecamatan', 'admin', '2017-09-21 13:53:55', NULL, NULL);

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
  `createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `dplega_007_visualisasiusaha_temp`
--

INSERT INTO `dplega_007_visualisasiusaha_temp` (`idData`, `noRegistrasi`, `urlGambar`, `deskripsi`, `createdBy`, `createdDate`, `changedBy`, `changedDate`) VALUES
(1, '44330900001', '44330900001_1_usaha.jpg', 'Depan', 'admin', '2017-10-01 21:50:05', 'admin', '2017-10-01 21:51:16');

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
  `createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `statusVerifikasi` char(1) NOT NULL COMMENT '0: belum, 1: sudah',
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `dplega_009_legalitas`
--

INSERT INTO `dplega_009_legalitas` (`idData`, `noRegistrasi`, `kodePersyaratan`, `noLegalitas`, `tanggalLegalitas`, `urlFile`, `statusVerifikasi`, `createdBy`, `createdDate`, `changedBy`, `changedDate`) VALUES
(3, '00037300001', '12', '111111', '2017-10-02', '00037300001_12_legalitas.jpg', '1', 'admin', '2017-10-02 00:14:33', 'admin', '2017-10-02 00:14:52');

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
  `statusVerifikasi` char(1) NOT NULL COMMENT '0:belum, 1: sudah',
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `dplega_009_legalitas_temp`
--

INSERT INTO `dplega_009_legalitas_temp` (`idData`, `noRegistrasi`, `kodePersyaratan`, `noLegalitas`, `tanggalLegalitas`, `urlFile`, `statusVerifikasi`, `createdBy`, `createdDate`, `changedBy`, `changedDate`) VALUES
(1, '44330900001', '9', '123456', '2017-09-20', '44330900001_9_legalitas.jpg', '0', 'admin', '2017-09-20 00:28:15', 'admin', '2017-10-01 21:16:20'),
(2, '44330900001', '10', '909090', '2017-09-20', '44330900001_10_legalitas.jpg', '1', 'admin', '2017-09-20 21:15:12', 'admin', '2017-10-01 21:03:42');

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
  `createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `dplega_011_hirarkilembaga`
--

INSERT INTO `dplega_011_hirarkilembaga` (`idData`, `noRegistrasi`, `hirarki`, `noRegistrasiTarget`, `createdBy`, `createdDate`, `changedBy`, `changedDate`) VALUES
(2, '00037300001', '0', '00031000002', 'TESTSESSION', '2017-08-29 14:18:51', '', '0000-00-00 00:00:00'),
(3, '00037300001', '1', '0077100002', 'TESTSESSION', '2017-08-29 14:19:24', '', '0000-00-00 00:00:00');

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
  `createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `dplega_012_verifikasi`
--

INSERT INTO `dplega_012_verifikasi` (`idData`, `noRegistrasi`, `kodeVerifikasi`, `status`, `createdBy`, `createdDate`, `changedBy`, `changedDate`) VALUES
(3, '00037300001', 4, '1', 'admin', '2017-10-02 00:14:55', NULL, NULL),
(4, '00037300001', 5, '1', 'admin', '2017-10-02 00:14:56', NULL, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `dplega_012_verifikasi_temp`
--

INSERT INTO `dplega_012_verifikasi_temp` (`idData`, `noRegistrasi`, `kodeVerifikasi`, `status`, `createdBy`, `createdDate`, `changedBy`, `changedDate`) VALUES
(1, '44330900001', 4, '1', 'admin', '2017-09-20 20:48:33', 'admin', '2017-09-20 21:14:14'),
(2, '44330900001', 5, '1', 'admin', '2017-09-20 20:48:54', 'admin', '2017-09-20 21:10:28');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `dplega_100_provinsi`
--

INSERT INTO `dplega_100_provinsi` (`idData`, `kodeProvinsi`, `namaProvinsi`, `createdBy`, `createdDate`, `changedBy`, `changedDate`) VALUES
(1, '55', 'yeyedddd', 'TESTSESSION', '0000-00-00 00:00:00', 'admin', '2017-09-06 21:42:35'),
(2, '22', 'wawawa', 'admin', '2017-09-06 19:56:17', 'admin', '2017-09-06 21:56:09'),
(5, '44', 'coba 7', 'admin', '2017-09-06 22:23:45', '', '0000-00-00 00:00:00'),
(6, '11', 'coba 11', 'admin', '2017-09-06 22:25:09', '', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `dplega_101_wilayah`
--

INSERT INTO `dplega_101_wilayah` (`idData`, `kodeWilayah`, `namaWilayah`, `idProvinsi`, `createdBy`, `createdDate`, `changedBy`, `changedDate`) VALUES
(1, '12', 'coba 1', 2, 'admin', '2017-09-06 19:56:49', 'admin', '2017-09-06 21:56:33'),
(2, '05', 'coba 2', 1, 'admin', '2017-09-06 20:00:32', 'admin', '2017-09-07 23:01:24'),
(4, '33', 'coba 8', 5, 'admin', '2017-09-06 22:24:02', '', '0000-00-00 00:00:00'),
(5, '21', 'coba 12', 6, 'admin', '2017-09-06 22:25:26', 'admin', '2017-09-06 22:25:32'),
(6, '19', 'test', 5, 'megan', '2017-09-08 23:25:06', '', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `dplega_102_kecamatan`
--

INSERT INTO `dplega_102_kecamatan` (`idData`, `kodeKecamatan`, `namaKecamatan`, `idWilayah`, `createdBy`, `createdDate`, `changedBy`, `changedDate`) VALUES
(1, '11', 'coba 3', 2, 'admin', '2017-09-06 20:00:11', 'admin', '2017-09-06 21:56:55'),
(2, '23', 'coba 4', 1, 'admin', '2017-09-06 20:09:05', 'admin', '2017-09-06 21:57:01'),
(4, '09', 'coba 9', 4, 'admin', '2017-09-06 22:24:30', 'admin', '2017-09-07 23:01:34');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `dplega_103_kelurahan`
--

INSERT INTO `dplega_103_kelurahan` (`idData`, `kodeKelurahan`, `namaKelurahan`, `idKecamatan`, `createdBy`, `createdDate`, `changedBy`, `changedDate`) VALUES
(3, '77', 'sdfsd', 1, 'admin', '2017-09-06 20:41:56', 'admin', '2017-09-07 23:10:56'),
(4, '00', 'coba 10', 4, 'admin', '2017-09-06 22:24:40', 'admin', '2017-09-07 23:01:42');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data untuk tabel `dplega_111_anggotatimwilayah`
--

INSERT INTO `dplega_111_anggotatimwilayah` (`idData`, `idTimWilayah`, `idAnggota`, `createdBy`, `createdDate`, `changedBy`, `changedDate`) VALUES
(17, 11, 1, 'admin', '2017-09-29 23:53:00', NULL, NULL),
(18, 10, 5, 'admin', '2017-09-29 23:53:27', NULL, NULL),
(20, 11, 2, 'admin', '2017-09-29 23:57:16', NULL, NULL);

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
  `createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

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
(18, 'Organisasi Masyarakat', 'Ormas', NULL, 'admin', '2017-10-02 15:05:29', NULL, NULL),
(19, 'asdasd', 'asdasd', NULL, 'admin', '2017-10-02 15:54:40', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dplega_201_persyaratan`
--

CREATE TABLE IF NOT EXISTS `dplega_201_persyaratan` (
`kodePersyaratan` int(11) NOT NULL,
  `kodeBentukLembaga` int(11) NOT NULL,
  `namaPersyaratan` varchar(100) NOT NULL,
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `changedBy` varchar(20) DEFAULT NULL,
  `changerdDate` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data untuk tabel `dplega_201_persyaratan`
--

INSERT INTO `dplega_201_persyaratan` (`kodePersyaratan`, `kodeBentukLembaga`, `namaPersyaratan`, `createdBy`, `createdDate`, `changedBy`, `changerdDate`) VALUES
(3, 3, 'asdasdasdasd', 'TESTSESSION', '2017-06-12 00:30:15', '', '0000-00-00 00:00:00'),
(4, 2, 'ini legalitas', 'TESTSESSION', '2017-08-16 12:04:20', '', '0000-00-00 00:00:00'),
(5, 2, 'ini juga legalitas', 'TESTSESSION', '2017-08-16 12:04:39', '', '0000-00-00 00:00:00'),
(6, 8, 'c', 'TESTSESSION', '2017-08-20 10:48:09', '', '0000-00-00 00:00:00'),
(9, 9, 'Akta Notaris', 'TESTSESSION', '2017-08-24 22:26:16', '', '0000-00-00 00:00:00'),
(10, 9, 'SK Kemenhumkam', 'TESTSESSION', '2017-08-24 22:26:30', '', '0000-00-00 00:00:00'),
(11, 13, 'Ijin Operasional', 'TESTSESSION', '2017-08-28 17:18:21', '', '0000-00-00 00:00:00'),
(12, 11, 'Ijin Operasional', 'TESTSESSION', '2017-08-29 09:34:25', '', '0000-00-00 00:00:00'),
(13, 12, 'Ijin Operasional', 'TESTSESSION', '2017-08-29 09:35:29', '', '0000-00-00 00:00:00'),
(14, 17, 'Surat Keterangan Terdaftar', 'TESTSESSION', '2017-08-29 09:36:35', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dplega_210_bidanggerak`
--

CREATE TABLE IF NOT EXISTS `dplega_210_bidanggerak` (
`kodeBidangGerak` int(11) NOT NULL,
  `namaBidangGerak` varchar(100) NOT NULL,
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `dplega_210_bidanggerak`
--

INSERT INTO `dplega_210_bidanggerak` (`kodeBidangGerak`, `namaBidangGerak`, `createdBy`, `createdDate`, `changedBy`, `changedDate`) VALUES
(6, 'Kegamaan', 'TESTSESSION', '2017-08-29 01:52:15', '', '0000-00-00 00:00:00'),
(7, 'Pendidikan dan Keagamaan', 'TESTSESSION', '2017-08-29 09:37:13', '', '0000-00-00 00:00:00'),
(8, 'Sosial dan Keagamaan', 'TESTSESSION', '2017-08-29 09:37:24', '', '0000-00-00 00:00:00'),
(9, 'asd', 'admin', '2017-10-02 01:14:14', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dplega_220_grupverifikasi`
--

CREATE TABLE IF NOT EXISTS `dplega_220_grupverifikasi` (
`kodeGrupVerifikasi` int(11) NOT NULL,
  `namaGrupVerifikasi` varchar(100) NOT NULL,
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `dplega_220_grupverifikasi`
--

INSERT INTO `dplega_220_grupverifikasi` (`kodeGrupVerifikasi`, `namaGrupVerifikasi`, `createdBy`, `createdDate`, `changedBy`, `changedDate`) VALUES
(7, 'Fisik', 'TESTSESSION', '2017-08-25 03:58:43', '', '0000-00-00 00:00:00'),
(8, 'KOBONG', 'TESTSESSION', '2017-08-25 03:58:54', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dplega_221_verifikasi`
--

CREATE TABLE IF NOT EXISTS `dplega_221_verifikasi` (
`kodeVerifikasi` int(11) NOT NULL,
  `namaVerifikasi` varchar(100) NOT NULL,
  `kodeGrupVerifikasi` int(11) NOT NULL,
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `dplega_221_verifikasi`
--

INSERT INTO `dplega_221_verifikasi` (`kodeVerifikasi`, `namaVerifikasi`, `kodeGrupVerifikasi`, `createdBy`, `createdDate`, `changedBy`, `changedDate`) VALUES
(4, 'Copy bukti kepemilikan atau Penguasaan atas tanah', 7, 'TESTSESSION', '2017-08-25 03:59:49', '', '0000-00-00 00:00:00'),
(5, 'Copy ijin operasional dari kemenag kab/kota', 8, 'TESTSESSION', '2017-08-25 04:00:37', '', '0000-00-00 00:00:00');

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
  `createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `dplega_230_berita`
--

INSERT INTO `dplega_230_berita` (`idData`, `judulBerita`, `deskripsi`, `urlGambar`, `createdBy`, `createdDate`, `changedBy`, `changedDate`) VALUES
(1, 'Pembaharuan website!', 'Pusat data potensi lembaga keagamaan di Jawa Barat telah dipererbarui untuk meningkatkan pelayanan terhadap masyarakat dan mempermudah untuk pengelolaan data.', 'news_1.png', 'admin', '2017-10-01 17:29:53', NULL, NULL);

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
  `createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=99 ;

--
-- Dumping data untuk tabel `dplega_901_notifications`
--

INSERT INTO `dplega_901_notifications` (`idData`, `deskripsi`, `waktu`, `targetUser`, `statusBaca`, `createdBy`, `createdDate`, `changedBy`, `changedDate`) VALUES
(1, 'Data jalasutra telah diubah oleh PAH', '2017-08-29 14:14:40', '', '0', 'pah', '2017-08-29 14:14:40', '', '0000-00-00 00:00:00'),
(2, 'Data jalasutra telah diubah oleh Administrator', '2017-08-31 16:02:41', '', '1', 'admin', '2017-08-31 16:02:41', '', '0000-00-00 00:00:00'),
(3, 'Data Test lagi telah diubah oleh Administrator', '2017-09-07 23:03:35', '', '1', 'admin', '2017-09-07 23:03:35', '', '0000-00-00 00:00:00'),
(4, 'Data dengan no registrasi 00030200001 telah ditransfer oleh Administrator', '2017-09-16 20:37:41', '', '1', 'admin', '2017-09-16 20:37:41', NULL, NULL),
(5, 'Legalitas (Akta Notaris) c telah ditambahkan oleh Administrator', '2017-09-20 00:28:15', '', '1', 'admin', '2017-09-20 00:28:15', NULL, NULL),
(6, 'Legalitas c telah diverifikasi oleh Administrator', '2017-09-20 20:04:18', '44330900001', '1', 'admin', '2017-09-20 20:04:18', NULL, NULL),
(7, 'Legalitas c telah diverifikasi oleh Administrator', '2017-09-20 20:05:46', '44330900001', '1', 'admin', '2017-09-20 20:05:46', NULL, NULL),
(8, 'Legalitas c telah diverifikasi oleh Administrator', '2017-09-20 20:13:27', '44330900001', '1', 'admin', '2017-09-20 20:13:27', NULL, NULL),
(9, 'Legalitas c telah diverifikasi oleh Administrator', '2017-09-20 20:14:43', '44330900001', '1', 'admin', '2017-09-20 20:14:43', NULL, NULL),
(10, 'Legalitas c telah diverifikasi oleh Administrator', '2017-09-20 20:16:14', '44330900001', '1', 'admin', '2017-09-20 20:16:14', NULL, NULL),
(11, 'Legalitas c telah diverifikasi oleh Administrator', '2017-09-20 20:18:28', '44330900001', '1', 'admin', '2017-09-20 20:18:28', NULL, NULL),
(12, 'Copy bukti kepemilikan atau Penguasaan atas tanah milik c telah diverifikasi olehAdministrator', '2017-09-20 20:44:48', '44330900001', '1', 'admin', '2017-09-20 20:44:48', NULL, NULL),
(13, 'Copy bukti kepemilikan atau Penguasaan atas tanah milik c telah diverifikasi olehAdministrator', '2017-09-20 20:45:31', '44330900001', '1', 'admin', '2017-09-20 20:45:31', NULL, NULL),
(14, 'Copy bukti kepemilikan atau Penguasaan atas tanah milik c telah diverifikasi olehAdministrator', '2017-09-20 20:46:30', '44330900001', '1', 'admin', '2017-09-20 20:46:30', NULL, NULL),
(15, 'Copy ijin operasional dari kemenag kab/kota milik c telah diverifikasi olehAdministrator', '2017-09-20 20:46:44', '44330900001', '1', 'admin', '2017-09-20 20:46:44', NULL, NULL),
(16, 'Copy bukti kepemilikan atau Penguasaan atas tanah milik c telah diverifikasi olehAdministrator', '2017-09-20 20:48:00', '44330900001', '1', 'admin', '2017-09-20 20:48:00', NULL, NULL),
(17, 'Copy bukti kepemilikan atau Penguasaan atas tanah milik c telah diverifikasi olehAdministrator', '2017-09-20 20:48:33', '44330900001', '1', 'admin', '2017-09-20 20:48:33', NULL, NULL),
(18, 'Copy ijin operasional dari kemenag kab/kota milik c telah diverifikasi olehAdministrator', '2017-09-20 20:48:54', '44330900001', '1', 'admin', '2017-09-20 20:48:54', NULL, NULL),
(19, 'Copy bukti kepemilikan atau Penguasaan atas tanah milik c tidak disetujui olehAdministrator', '2017-09-20 20:49:00', '44330900001', '1', 'admin', '2017-09-20 20:49:00', NULL, NULL),
(20, 'Copy ijin operasional dari kemenag kab/kota milik c tidak disetujui olehAdministrator', '2017-09-20 20:49:08', '44330900001', '1', 'admin', '2017-09-20 20:49:08', NULL, NULL),
(21, 'Legalitas : Akta Notaris milik c telah diverifikasi oleh Administrator', '2017-09-20 20:58:57', '44330900001', '1', 'admin', '2017-09-20 20:58:57', NULL, NULL),
(22, 'Copy bukti kepemilikan atau Penguasaan atas tanah milik c telah diverifikasi olehAdministrator', '2017-09-20 21:01:35', '44330900001', '1', 'admin', '2017-09-20 21:01:35', NULL, NULL),
(23, 'Copy bukti kepemilikan atau Penguasaan atas tanah milik c tidak disetujui olehAdministrator', '2017-09-20 21:02:41', '44330900001', '1', 'admin', '2017-09-20 21:02:41', NULL, NULL),
(24, 'Legalitas : Akta Notaris milik c tidak disetujui oleh Administrator', '2017-09-20 21:02:52', '44330900001', '1', 'admin', '2017-09-20 21:02:52', NULL, NULL),
(25, 'Copy bukti kepemilikan atau Penguasaan atas tanah milik c telah diverifikasi olehAdministrator', '2017-09-20 21:02:55', '44330900001', '1', 'admin', '2017-09-20 21:02:55', NULL, NULL),
(26, 'Copy ijin operasional dari kemenag kab/kota milik c telah diverifikasi olehAdministrator', '2017-09-20 21:02:57', '44330900001', '1', 'admin', '2017-09-20 21:02:57', NULL, NULL),
(27, 'Copy ijin operasional dari kemenag kab/kota milik c tidak disetujui olehAdministrator', '2017-09-20 21:02:58', '44330900001', '1', 'admin', '2017-09-20 21:02:58', NULL, NULL),
(28, 'Copy bukti kepemilikan atau Penguasaan atas tanah milik c tidak disetujui olehAdministrator', '2017-09-20 21:08:52', '44330900001', '1', 'admin', '2017-09-20 21:08:52', NULL, NULL),
(29, 'Legalitas : Akta Notaris milik c telah diverifikasi oleh Administrator', '2017-09-20 21:09:27', '44330900001', '1', 'admin', '2017-09-20 21:09:27', NULL, NULL),
(30, 'Legalitas : Akta Notaris milik c tidak disetujui oleh Administrator', '2017-09-20 21:09:35', '44330900001', '1', 'admin', '2017-09-20 21:09:35', NULL, NULL),
(31, 'Copy bukti kepemilikan atau Penguasaan atas tanah milik c telah diverifikasi olehAdministrator', '2017-09-20 21:09:45', '44330900001', '1', 'admin', '2017-09-20 21:09:45', NULL, NULL),
(32, 'Copy bukti kepemilikan atau Penguasaan atas tanah milik c tidak disetujui olehAdministrator', '2017-09-20 21:10:19', '44330900001', '1', 'admin', '2017-09-20 21:10:19', NULL, NULL),
(33, 'Legalitas : Akta Notaris milik c telah diverifikasi oleh Administrator', '2017-09-20 21:10:24', '44330900001', '1', 'admin', '2017-09-20 21:10:24', NULL, NULL),
(34, 'Copy ijin operasional dari kemenag kab/kota milik c telah diverifikasi olehAdministrator', '2017-09-20 21:10:28', '44330900001', '1', 'admin', '2017-09-20 21:10:28', NULL, NULL),
(35, 'Copy bukti kepemilikan atau Penguasaan atas tanah milik c telah diverifikasi olehAdministrator', '2017-09-20 21:14:14', '44330900001', '1', 'admin', '2017-09-20 21:14:14', NULL, NULL),
(36, 'Legalitas (SK Kemenhumkam) c telah ditambahkan oleh Administrator', '2017-09-20 21:15:12', '44330900001', '1', 'admin', '2017-09-20 21:15:12', NULL, NULL),
(37, 'Legalitas : SK Kemenhumkam milik c telah diverifikasi oleh Administrator', '2017-09-20 21:15:46', '44330900001', '1', 'admin', '2017-09-20 21:15:46', NULL, NULL),
(38, 'Data Syncard Tech. telah diubah oleh Syncard Tech.', '2017-09-21 16:29:05', '55051177773', '0', '55051177773syncardt', '2017-09-21 16:29:05', NULL, NULL),
(39, 'Data banyak telah diubah oleh Administrator', '2017-09-21 19:48:35', '55051177772', '1', 'admin', '2017-09-21 19:48:35', NULL, NULL),
(40, 'Data Jalasutra telah diubah oleh Administrator', '2017-10-01 16:54:16', '00030200001', '1', 'admin', '2017-10-01 16:54:16', NULL, NULL),
(41, 'Data Jalasutra telah diubah oleh Administrator', '2017-10-01 16:55:17', '00030200001', '1', 'admin', '2017-10-01 16:55:17', NULL, NULL),
(43, 'Legalitas (Akta Notaris) c telah diubah oleh c', '2017-10-01 20:39:37', '44330900001', '0', 'c', '2017-10-01 20:39:37', NULL, NULL),
(45, 'Legalitas (Akta Notaris) c telah diubah oleh c', '2017-10-01 20:39:46', '44330900001', '0', 'c', '2017-10-01 20:39:46', NULL, NULL),
(47, 'Legalitas (Akta Notaris) c telah diubah oleh c', '2017-10-01 20:39:57', '44330900001', '0', 'c', '2017-10-01 20:39:57', NULL, NULL),
(49, 'Legalitas (Akta Notaris) c telah diubah oleh c', '2017-10-01 20:40:32', '44330900001', '0', 'c', '2017-10-01 20:40:32', NULL, NULL),
(51, 'Legalitas (Akta Notaris) c telah diubah oleh c', '2017-10-01 20:42:39', '44330900001', '0', 'c', '2017-10-01 20:42:39', NULL, NULL),
(53, 'Legalitas (Akta Notaris) c telah diubah oleh Administrator', '2017-10-01 20:44:45', '44330900001', '1', 'admin', '2017-10-01 20:44:45', NULL, NULL),
(55, 'Legalitas (Akta Notaris) c telah diubah oleh Administrator', '2017-10-01 20:46:56', '44330900001', '1', 'admin', '2017-10-01 20:46:56', NULL, NULL),
(57, 'Legalitas (Akta Notaris) c telah diubah oleh Administrator', '2017-10-01 20:47:02', '44330900001', '1', 'admin', '2017-10-01 20:47:02', NULL, NULL),
(59, 'Legalitas (Akta Notaris) c telah diubah oleh Administrator', '2017-10-01 20:50:13', '44330900001', '1', 'admin', '2017-10-01 20:50:13', NULL, NULL),
(61, 'Legalitas (Akta Notaris) c telah diubah oleh Administrator', '2017-10-01 20:50:53', '44330900001', '1', 'admin', '2017-10-01 20:50:53', NULL, NULL),
(63, 'Legalitas (Akta Notaris) c telah diubah oleh Administrator', '2017-10-01 20:51:24', '44330900001', '1', 'admin', '2017-10-01 20:51:24', NULL, NULL),
(65, 'Legalitas (Akta Notaris) c telah diubah oleh Administrator', '2017-10-01 20:51:30', '44330900001', '1', 'admin', '2017-10-01 20:51:30', NULL, NULL),
(67, 'Legalitas (Akta Notaris) c telah diubah oleh Administrator', '2017-10-01 20:51:50', '44330900001', '1', 'admin', '2017-10-01 20:51:50', NULL, NULL),
(69, 'Legalitas (Akta Notaris) c telah diubah oleh Administrator', '2017-10-01 20:52:06', '44330900001', '1', 'admin', '2017-10-01 20:52:06', NULL, NULL),
(71, 'Legalitas (Akta Notaris) c telah diubah oleh Administrator', '2017-10-01 20:52:17', '44330900001', '1', 'admin', '2017-10-01 20:52:17', NULL, NULL),
(73, 'Legalitas (Akta Notaris) c telah diubah oleh Administrator', '2017-10-01 20:53:10', '44330900001', '1', 'admin', '2017-10-01 20:53:10', NULL, NULL),
(75, 'Legalitas (Akta Notaris) c telah diubah oleh Administrator', '2017-10-01 20:53:32', '44330900001', '1', 'admin', '2017-10-01 20:53:32', NULL, NULL),
(77, 'Legalitas (Akta Notaris) c telah diubah oleh Administrator', '2017-10-01 20:56:50', '44330900001', '1', 'admin', '2017-10-01 20:56:50', NULL, NULL),
(79, 'Legalitas (SK Kemenhumkam) c telah diubah oleh Administrator', '2017-10-01 20:56:53', '44330900001', '1', 'admin', '2017-10-01 20:56:53', NULL, NULL),
(81, 'Legalitas (SK Kemenhumkam) c telah diubah oleh Administrator', '2017-10-01 20:58:53', '44330900001', '1', 'admin', '2017-10-01 20:58:53', NULL, NULL),
(83, 'Legalitas (Akta Notaris) c telah diubah oleh Administrator', '2017-10-01 21:00:34', '44330900001', '1', 'admin', '2017-10-01 21:00:34', NULL, NULL),
(84, 'Legalitas (Akta Notaris) c telah diubah oleh Administrator', '2017-10-01 21:01:58', '44330900001', '1', 'admin', '2017-10-01 21:01:58', NULL, NULL),
(85, 'Legalitas : SK Kemenhumkam milik c telah diverifikasi oleh Administrator', '2017-10-01 21:03:42', '44330900001', '1', 'admin', '2017-10-01 21:03:42', NULL, NULL),
(86, 'Legalitas : Akta Notaris milik c telah diverifikasi oleh Administrator', '2017-10-01 21:03:44', '44330900001', '1', 'admin', '2017-10-01 21:03:44', NULL, NULL),
(90, 'Legalitas (Akta Notaris) c telah diubah oleh Administrator', '2017-10-01 21:11:27', '44330900001', '1', 'admin', '2017-10-01 21:11:27', NULL, NULL),
(91, 'Legalitas : Akta Notaris milik c telah diverifikasi oleh Administrator', '2017-10-01 21:14:56', '44330900001', '1', 'admin', '2017-10-01 21:14:56', NULL, NULL),
(94, 'Legalitas (Akta Notaris) c telah diubah oleh Administrator', '2017-10-01 21:16:20', '44330900001', '1', 'admin', '2017-10-01 21:16:20', NULL, NULL),
(95, 'Legalitas (Ijin Operasional) sukamanah telah ditambahkan oleh Administrator', '2017-10-02 00:14:33', '00037300001', '1', 'admin', '2017-10-02 00:14:33', NULL, NULL),
(96, 'Legalitas : Ijin Operasional milik sukamanah telah diverifikasi oleh Administrator', '2017-10-02 00:14:52', '00037300001', '1', 'admin', '2017-10-02 00:14:52', NULL, NULL),
(97, 'Copy bukti kepemilikan atau Penguasaan atas tanah milik sukamanah telah diverifikasi olehAdministrator', '2017-10-02 00:14:55', '00037300001', '1', 'admin', '2017-10-02 00:14:55', NULL, NULL),
(98, 'Copy ijin operasional dari kemenag kab/kota milik sukamanah telah diverifikasi olehAdministrator', '2017-10-02 00:14:56', '00037300001', '1', 'admin', '2017-10-02 00:14:56', NULL, NULL);

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
  `createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=71 ;

--
-- Dumping data untuk tabel `dplega_910_user`
--

INSERT INTO `dplega_910_user` (`idData`, `noRegistrasi`, `nama`, `jabatan`, `alamat`, `noRt`, `noRw`, `kodeKelurahan`, `kodeKecamatan`, `kodeWilayah`, `kodeProvinsi`, `noTelp`, `email`, `username`, `password`, `urlGambar`, `userLevel`, `lingkupArea`, `idBatasArea`, `statusActive`, `createdBy`, `createdDate`, `changedBy`, `changedDate`) VALUES
(43, '', 'Administrator', '', '\r\n', '', '', 3, 1, 2, 1, '123123', 'admin@dplega.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin_avatar.jpg', 7, '', 0, 1, 'TESTSESSION', '2017-08-28 16:08:25', 'admin', '2017-09-11 18:44:03'),
(55, '', 'PAH', 'Sekretaris', 'CImahi', '12', '1', 16, 1, 77, 0, '', 'pah@gmail.com', 'pah', '81dc9bdb52d04dc20036dbd8313ed055', '', 2, '2', 4, 1, 'TESTSESSION', '2017-08-29 09:25:58', 'admin', '2017-09-21 00:07:27'),
(60, '00030200001', 'Jalasutra', 'Penanggung jawab Lembaga', 'asd', '12', '21', 3, 2, 3, 0, '12345', 'ceceprohendi93@gmail.com', '00030200001', 'd58d1e8da2c4117f552c7e9cc89e1e22', '', 1, '', 0, 1, 'TESTSESSION', '2017-08-29 14:16:31', '', '0000-00-00 00:00:00'),
(61, '00037300001', 'sukamanah', 'Penanggung jawab Lembaga', 'Tasikmalaya', '02', '02', 3, 1, 1, 1, '085223388235', 'miftah_pitriyana@yahoo.com', '00037300001sukamanah', 'd58d1e8da2c4117f552c7e9cc89e1e22', '', 1, '', 0, 1, 'TESTSESSION', '2017-08-29 14:18:36', '', '0000-00-00 00:00:00'),
(64, '55051177000', 'twerwer', 'Penanggung jawab Lembaga', 'fsdfsdf', '3', '4', 3, 1, 2, 1, '123123', 'asdad@asdasd.com', 'twerwer', 'd58d1e8da2c4117f552c7e9cc89e1e22', '', 1, '', 0, 1, 'admin', '2017-09-07 23:15:29', '', '0000-00-00 00:00:00'),
(65, '55051177770', 'sdfsf', 'Penanggung jawab Lembaga', 'dfgdfgdfg', '3', '4', 3, 1, 2, 1, '546456', 'asdasd@adad.com', 'sdfsf', 'd58d1e8da2c4117f552c7e9cc89e1e22', '', 1, '', 0, 1, 'admin', '2017-09-07 23:16:07', '', '0000-00-00 00:00:00'),
(66, '55051177771', 'a', 'Penanggung jawab Lembaga', 'asdasd', '3', '4', 3, 1, 2, 1, '23', 'sdfsdf@adasd.com', 'a', 'd41d8cd98f00b204e9800998ecf8427e', '', 1, '3', 5, 1, 'admin', '2017-09-07 23:17:25', 'admin', '2017-09-08 16:29:47'),
(67, '55051177772', 'b', 'Penanggung jawab Lembaga', 'werwer', '4', '4', 3, 1, 2, 1, '3', 'asd@asdad.com', 'b', 'd58d1e8da2c4117f552c7e9cc89e1e22', '', 1, '', 0, 1, 'admin', '2017-09-07 23:18:29', '', '0000-00-00 00:00:00'),
(68, '44330900001', 'c', 'Penanggung jawab Lembaga', 'sdfsdf', '4', '4', 4, 4, 4, 5, '323', 'asdasd@asdad.com', 'c', 'd58d1e8da2c4117f552c7e9cc89e1e22', '', 1, '', 0, 0, 'admin', '2017-09-07 23:18:56', 'admin', '2017-10-02 00:10:13'),
(69, '', 'Megan', '', '', '', '', 0, 0, 0, 0, '', 'asdasd@esdf.com', 'megan', '81dc9bdb52d04dc20036dbd8313ed055', '', 3, '1', 1, 1, 'admin', '2017-09-08 16:11:55', 'admin', '2017-09-21 14:28:00'),
(70, '55051177773', 'Syncard Tech.', 'Penanggung jawab Lembaga', '-', '0', '0', 3, 1, 2, 1, '123456789101', 'home@syncardtech.com', '55051177773syncardt', 'd58d1e8da2c4117f552c7e9cc89e1e22', NULL, 1, '', 0, 1, 'admin', '2017-09-21 16:20:14', NULL, NULL);

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
  `createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=91 ;

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
(64, 'pah', 1, 'kelembagaan', '1', '0', '0', '0', 1, 'TESTSESSION', '2017-08-29 09:25:58', 'admin', '2017-09-21 00:07:27'),
(65, 'pah', 1, 'lingkupArea', '1', '0', '0', '0', 1, 'TESTSESSION', '2017-08-29 09:25:58', 'admin', '2017-09-21 00:07:27'),
(66, 'pah', 1, 'pengaturanKelembagaan', '1', '0', '0', '0', 1, 'TESTSESSION', '2017-08-29 09:25:58', 'admin', '2017-09-21 00:07:27'),
(67, 'pah', 1, 'pengaturanVerifikasi', '1', '0', '0', '0', 1, 'TESTSESSION', '2017-08-29 09:25:58', 'admin', '2017-09-21 00:07:27'),
(68, 'pah', 1, 'berita', '1', '0', '0', '0', 1, 'TESTSESSION', '2017-08-29 09:25:58', 'admin', '2017-09-21 00:07:27'),
(69, 'pah', 1, 'konfigurasi', '1', '0', '0', '0', 1, 'TESTSESSION', '2017-08-29 09:25:58', 'admin', '2017-09-21 00:07:27'),
(74, '00030200001', 1, 'kelembagaan', '1', '0', '1', '0', 1, 'TESTSESSION', '2017-08-29 14:16:31', '', '0000-00-00 00:00:00'),
(75, '00037300001', 1, 'kelembagaan', '1', '0', '1', '0', 1, 'TESTSESSION', '2017-08-29 14:18:36', '', '0000-00-00 00:00:00'),
(78, 'twerwer', 1, 'kelembagaan', '1', '0', '1', '0', 1, 'TESTSESSION', '2017-09-07 23:15:29', '', '0000-00-00 00:00:00'),
(79, 'sdfsf', 1, 'kelembagaan', '1', '0', '1', '0', 1, 'TESTSESSION', '2017-09-07 23:16:07', '', '0000-00-00 00:00:00'),
(80, 'a', 1, 'kelembagaan', '1', '0', '1', '0', 1, 'TESTSESSION', '2017-09-07 23:17:25', 'admin', '2017-09-08 16:29:47'),
(81, 'b', 1, 'kelembagaan', '1', '0', '1', '0', 1, 'TESTSESSION', '2017-09-07 23:18:29', '', '0000-00-00 00:00:00'),
(82, 'c', 1, 'kelembagaan', '1', '0', '1', '0', 0, 'TESTSESSION', '2017-09-07 23:18:56', 'admin', '2017-10-02 00:10:13'),
(83, 'megan', 1, 'kelembagaan', '0', '1', '0', '0', 1, 'admin', '2017-09-08 16:11:55', 'admin', '2017-09-21 14:28:00'),
(84, 'megan', 1, 'lingkupArea', '0', '1', '1', '0', 1, 'admin', '2017-09-08 16:11:55', 'admin', '2017-09-21 14:28:00'),
(85, 'megan', 1, 'pengaturanKelembagaan', '0', '0', '0', '0', 1, 'admin', '2017-09-08 16:11:55', 'admin', '2017-09-21 14:28:00'),
(86, 'megan', 1, 'pengaturanVerifikasi', '0', '0', '0', '0', 1, 'admin', '2017-09-08 16:11:55', 'admin', '2017-09-21 14:28:00'),
(87, 'megan', 1, 'berita', '0', '1', '0', '0', 1, 'admin', '2017-09-08 16:11:55', 'admin', '2017-09-21 14:28:00'),
(88, 'megan', 1, 'konfigurasi', '0', '1', '0', '0', 1, 'admin', '2017-09-08 16:11:55', 'admin', '2017-09-21 14:28:00'),
(89, 'megan', 1, 'verifikasi', '0', '0', '0', '0', 1, 'admin', '2017-09-21 00:24:48', 'admin', '2017-09-21 14:28:00'),
(90, '55051177773syncardt', 1, 'kelembagaan', '1', '0', '1', '0', 1, 'TESTSESSION', '2017-09-21 16:20:14', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dplega_912_apps`
--

CREATE TABLE IF NOT EXISTS `dplega_912_apps` (
`idData` int(11) NOT NULL,
  `idApps` varchar(4) NOT NULL,
  `appsName` varchar(100) NOT NULL,
  `createdBy` varchar(20) NOT NULL,
  `createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `changedBy` varchar(20) DEFAULT NULL,
  `changedDate` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dplega_001_sejarah_temp`
--
ALTER TABLE `dplega_001_sejarah_temp`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dplega_002_kepengurusan`
--
ALTER TABLE `dplega_002_kepengurusan`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dplega_002_kepengurusan_temp`
--
ALTER TABLE `dplega_002_kepengurusan_temp`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dplega_003_usaha`
--
ALTER TABLE `dplega_003_usaha`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dplega_003_usaha_temp`
--
ALTER TABLE `dplega_003_usaha_temp`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dplega_005_koleksi`
--
ALTER TABLE `dplega_005_koleksi`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dplega_005_koleksi_temp`
--
ALTER TABLE `dplega_005_koleksi_temp`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dplega_006_prestasi`
--
ALTER TABLE `dplega_006_prestasi`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dplega_006_prestasi_temp`
--
ALTER TABLE `dplega_006_prestasi_temp`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dplega_007_visualisasiusaha`
--
ALTER TABLE `dplega_007_visualisasiusaha`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dplega_007_visualisasiusaha_temp`
--
ALTER TABLE `dplega_007_visualisasiusaha_temp`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dplega_008_visualisasisarana`
--
ALTER TABLE `dplega_008_visualisasisarana`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dplega_008_visualisasisarana_temp`
--
ALTER TABLE `dplega_008_visualisasisarana_temp`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dplega_009_legalitas`
--
ALTER TABLE `dplega_009_legalitas`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `dplega_009_legalitas_temp`
--
ALTER TABLE `dplega_009_legalitas_temp`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dplega_010_riwayatbantuan`
--
ALTER TABLE `dplega_010_riwayatbantuan`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dplega_010_riwayatbantuan_temp`
--
ALTER TABLE `dplega_010_riwayatbantuan_temp`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dplega_011_hirarkilembaga`
--
ALTER TABLE `dplega_011_hirarkilembaga`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `dplega_011_hirarkilembaga_temp`
--
ALTER TABLE `dplega_011_hirarkilembaga_temp`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dplega_012_verifikasi`
--
ALTER TABLE `dplega_012_verifikasi`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `dplega_012_verifikasi_temp`
--
ALTER TABLE `dplega_012_verifikasi_temp`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
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
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `dplega_101_wilayah`
--
ALTER TABLE `dplega_101_wilayah`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `dplega_102_kecamatan`
--
ALTER TABLE `dplega_102_kecamatan`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `dplega_103_kelurahan`
--
ALTER TABLE `dplega_103_kelurahan`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `dplega_110_timwilayah`
--
ALTER TABLE `dplega_110_timwilayah`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `dplega_111_anggotatimwilayah`
--
ALTER TABLE `dplega_111_anggotatimwilayah`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `dplega_200_bentuklembaga`
--
ALTER TABLE `dplega_200_bentuklembaga`
MODIFY `kodeBentukLembaga` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `dplega_201_persyaratan`
--
ALTER TABLE `dplega_201_persyaratan`
MODIFY `kodePersyaratan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `dplega_210_bidanggerak`
--
ALTER TABLE `dplega_210_bidanggerak`
MODIFY `kodeBidangGerak` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `dplega_220_grupverifikasi`
--
ALTER TABLE `dplega_220_grupverifikasi`
MODIFY `kodeGrupVerifikasi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `dplega_221_verifikasi`
--
ALTER TABLE `dplega_221_verifikasi`
MODIFY `kodeVerifikasi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
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
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=99;
--
-- AUTO_INCREMENT for table `dplega_910_user`
--
ALTER TABLE `dplega_910_user`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `dplega_911_useraccess`
--
ALTER TABLE `dplega_911_useraccess`
MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=91;
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
