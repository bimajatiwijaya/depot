-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Mar 2015 pada 07.09
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `depom`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `idadmin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `lastlogin` datetime NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `password`, `lastlogin`) VALUES
(1, 'ptgs001', '97db1846570837fce6ff62a408f1c26a', '2015-01-08 06:13:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gantiair`
--

CREATE TABLE IF NOT EXISTS `gantiair` (
  `IdGantiAir` int(11) NOT NULL AUTO_INCREMENT,
  `IDUsaha` int(11) NOT NULL,
  `file_url` varchar(30) NOT NULL,
  `TglIsi` datetime NOT NULL,
  `JmlVol` int(11) NOT NULL,
  PRIMARY KEY (`IdGantiAir`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `gantiair`
--

INSERT INTO `gantiair` (`IdGantiAir`, `IDUsaha`, `file_url`, `TglIsi`, `JmlVol`) VALUES
(1, 1, '', '2015-01-01 00:00:00', 300),
(2, 1, '', '2015-01-26 00:00:00', 400),
(3, 2, '', '2015-02-12 00:00:00', 400),
(4, 3, '', '2015-02-11 00:00:00', 215),
(5, 9, '4e74c-casekadane2d.png', '2015-03-15 02:06:07', 300),
(6, 9, '3bb30-fisika.png', '2015-03-16 05:32:25', 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kendalimutu`
--

CREATE TABLE IF NOT EXISTS `kendalimutu` (
  `TglRawat` datetime NOT NULL,
  `IDUsaha` int(11) NOT NULL,
  `KDStandar` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE IF NOT EXISTS `laporan` (
  `idlaporan` int(11) NOT NULL AUTO_INCREMENT,
  `fileattc` varchar(10) NOT NULL,
  `text` text NOT NULL,
  `timeprocess` datetime NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`idlaporan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `logpetugas`
--

CREATE TABLE IF NOT EXISTS `logpetugas` (
  `idlogpetugas` int(11) NOT NULL AUTO_INCREMENT,
  `timeprocess` datetime NOT NULL,
  `idpetugas` int(5) NOT NULL,
  `kegiatan` varchar(30) NOT NULL,
  `primaryfield` varchar(3) NOT NULL,
  PRIMARY KEY (`idlogpetugas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data untuk tabel `logpetugas`
--

INSERT INTO `logpetugas` (`idlogpetugas`, `timeprocess`, `idpetugas`, `kegiatan`, `primaryfield`) VALUES
(1, '2015-02-04 12:56:24', 1, 'add member', '3'),
(2, '2015-02-04 13:07:36', 1, 'add member', '3'),
(3, '2015-02-04 13:14:02', 1, 'delete member', '3'),
(4, '2015-02-04 13:14:04', 1, 'delete member', '3'),
(5, '2015-02-04 13:15:12', 1, 'delete member', '1'),
(6, '2015-02-04 14:43:56', 1, 'delete member', '6'),
(7, '2015-02-04 14:49:31', 1, 'delete member', '9'),
(8, '2015-02-04 14:51:52', 1, 'delete member', '10'),
(9, '2015-02-04 15:01:46', 1, 'add member', '12'),
(10, '2015-02-07 15:15:54', 0, 'update depot', 'ind'),
(11, '2015-02-07 15:17:58', 0, 'add depot', '12'),
(12, '2015-02-07 15:18:07', 0, 'delete depot', '12'),
(13, '2015-02-08 10:58:16', 0, 'update depot', '1'),
(14, '2015-02-12 10:31:57', 0, 'add depot', '18'),
(15, '2015-02-12 10:32:08', 0, 'delete depot', '18'),
(16, '2015-02-12 10:32:17', 0, 'delete depot', '18'),
(17, '2015-02-13 09:36:01', 0, 'add depot', '19'),
(18, '2015-02-13 11:38:30', 0, 'add depot', '4'),
(19, '2015-02-13 11:52:05', 0, 'add depot', '5'),
(20, '2015-02-13 11:52:23', 0, 'add depot', '6'),
(21, '2015-02-13 11:52:59', 0, 'delete depot', '6'),
(22, '2015-02-13 11:53:04', 0, 'delete depot', '6'),
(23, '2015-02-13 12:02:13', 0, 'add depot', '7'),
(24, '2015-02-13 12:02:19', 0, 'delete depot', '7'),
(25, '2015-02-13 12:03:23', 0, 'add depot', '8'),
(26, '2015-02-13 12:03:28', 0, 'delete depot', '8'),
(27, '2015-02-13 12:03:43', 0, 'delete member', '14'),
(28, '2015-02-13 12:03:46', 0, 'delete member', '15'),
(29, '2015-02-13 12:03:48', 0, 'delete member', '16'),
(30, '2015-02-13 12:03:51', 0, 'delete member', '17'),
(31, '2015-02-13 12:03:56', 0, 'delete member', '19'),
(32, '2015-02-13 12:03:59', 0, 'delete member', '18'),
(33, '2015-02-14 07:25:42', 0, 'add depot', '9');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `idmember` int(11) NOT NULL AUTO_INCREMENT,
  `skpdinkes` varchar(30) NOT NULL,
  `idusaha` int(4) NOT NULL,
  `password` varchar(50) NOT NULL,
  `lastlogin` datetime NOT NULL,
  PRIMARY KEY (`idmember`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`idmember`, `skpdinkes`, `idusaha`, `password`, `lastlogin`) VALUES
(14, '001/2015/099', 9, '98cac85a439c276834bd9cb177ca5197', '2015-02-14 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `standard`
--

CREATE TABLE IF NOT EXISTS `standard` (
  `KDStandar` int(11) NOT NULL,
  `NamaStan` varchar(100) NOT NULL,
  `BtsWaktu` date NOT NULL,
  `BtsPengisian` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ujibakteri`
--

CREATE TABLE IF NOT EXISTS `ujibakteri` (
  `IDUjiBakteri` int(11) NOT NULL AUTO_INCREMENT,
  `IDUsaha` int(11) NOT NULL,
  `file_url` varchar(40) NOT NULL,
  `Coliform` int(11) NOT NULL,
  `Colifecal` int(11) NOT NULL,
  `Esc_Coli` int(11) NOT NULL,
  `Status` int(11) NOT NULL,
  `Tgl_Uji` datetime NOT NULL,
  PRIMARY KEY (`IDUjiBakteri`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `ujibakteri`
--

INSERT INTO `ujibakteri` (`IDUjiBakteri`, `IDUsaha`, `file_url`, `Coliform`, `Colifecal`, `Esc_Coli`, `Status`, `Tgl_Uji`) VALUES
(1, 9, '28a80-untitled.png', 4, 8, 9, 1, '2015-03-17 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ujifiskim`
--

CREATE TABLE IF NOT EXISTS `ujifiskim` (
  `IDUjiFiskim` int(11) NOT NULL AUTO_INCREMENT,
  `IDUsaha` int(11) NOT NULL,
  `HasilUji` int(11) NOT NULL,
  `file_url` varchar(50) NOT NULL,
  `TglUji` datetime NOT NULL,
  PRIMARY KEY (`IDUjiFiskim`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `ujifiskim`
--

INSERT INTO `ujifiskim` (`IDUjiFiskim`, `IDUsaha`, `HasilUji`, `file_url`, `TglUji`) VALUES
(1, 9, 80, '9fb9c-camera-ontology-copy.png', '2015-03-18 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `usaha`
--

CREATE TABLE IF NOT EXISTS `usaha` (
  `idusaha` int(11) NOT NULL AUTO_INCREMENT,
  `SKPDinkes` varchar(50) NOT NULL,
  `SKPIDisperind` varchar(50) NOT NULL,
  `NmUsaha` varchar(100) NOT NULL,
  `AlmUsaha` varchar(225) NOT NULL,
  `KecUsaha` varchar(30) NOT NULL,
  `KtUsaha` varchar(30) NOT NULL,
  `KdPosUsaha` varchar(7) NOT NULL,
  `TelpUsaha` varchar(13) NOT NULL,
  `NmPmlk` varchar(60) NOT NULL,
  `AlmPmlk` varchar(100) NOT NULL,
  `KecPmlk` varchar(30) NOT NULL,
  `KtPmlk` varchar(100) NOT NULL,
  `KodePosPemilik` varchar(7) NOT NULL,
  `TelpPmlk` varchar(12) NOT NULL,
  `Produk` varchar(100) NOT NULL,
  `Kapasitas` int(11) NOT NULL,
  `Satuan` int(11) NOT NULL,
  `NIProd` varchar(50) NOT NULL,
  `Invest` varchar(30) NOT NULL,
  `Tk` varchar(30) NOT NULL,
  `NoIjin` varchar(50) NOT NULL,
  `Tgl` datetime NOT NULL,
  PRIMARY KEY (`idusaha`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `usaha`
--

INSERT INTO `usaha` (`idusaha`, `SKPDinkes`, `SKPIDisperind`, `NmUsaha`, `AlmUsaha`, `KecUsaha`, `KtUsaha`, `KdPosUsaha`, `TelpUsaha`, `NmPmlk`, `AlmPmlk`, `KecPmlk`, `KtPmlk`, `KodePosPemilik`, `TelpPmlk`, `Produk`, `Kapasitas`, `Satuan`, `NIProd`, `Invest`, `Tk`, `NoIjin`, `Tgl`) VALUES
(1, '001/2014/90', 'PID/001/2014/90', 'Depot Sumber Murni', 'Jl. Pudak Payung no. 8 Semarang', 'Banyumanik', 'Semarang', '50123', '089723412314', 'Ki Joko Cerdas', 'Perum Nasional no.34', 'Johar', 'Semarang', '50263', '081312341234', 'Air isi ulang', 500, 1, 'air gunung', '20000000', 'tk', '0123/ijin', '2015-01-26 00:00:00'),
(2, '001/2014/91', 'PID/001/2014/91', 'Depot Sumber Sehat', 'Jl. Padangsari Semarang', 'Tembalang', 'Semarang', '50123', '089723412222', 'Heru Soon Jay', 'District no.34', 'Banyumanik', 'Semarang', '50263', '081312341234', 'Air isi ulang', 500, 1, 'air gunung', '20000000', 'tk', '0124/ijin', '2015-01-27 00:00:00'),
(3, '001/2013/90', 'PID/001/2013/90', 'Depot Mata Air', 'Jl. Lamper 2 Semarang', 'Lamper', 'Semarang', '50233', '0897234154', 'Hossen Tasen', 'Perum Jogar no.4', 'Majapahit', 'Semarang', '50263', '0899941234', 'Air isi ulang', 1000, 1, 'air gunung', '30000000', 'tk', '0125/ijin', '2015-01-27 00:00:00'),
(9, '001/2015/099', '002/2015/099', 'Air Murni Kembar', 'Jl. Gajah Mada no. 45', 'Pedurungan', 'Semarang', '50266', '024777231', 'Muhammad Firdaus Sulaiman', 'Perum. Green Maple no.4 blok 3 Jabungan', 'Banyumanik', 'Semarang', '50123', '085741580757', 'Air Gunung Ungaran', 1000, 1, '200', '20000000', '1', '1', '2015-02-11 05:13:12');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
