-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17 Jun 2015 pada 03.25
-- Versi Server: 5.5.36
-- PHP Version: 5.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `skripsi-rica`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `artikel_id` int(11) NOT NULL AUTO_INCREMENT,
  `artikel_judul` varchar(255) NOT NULL,
  `artikel_isi` text NOT NULL,
  `artikel_tgl` datetime NOT NULL,
  `kategori_id` int(11) NOT NULL,
  PRIMARY KEY (`artikel_id`),
  KEY `kategori_id` (`kategori_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`artikel_id`, `artikel_judul`, `artikel_isi`, `artikel_tgl`, `kategori_id`) VALUES
(51, 'aa', '<span>aa<br></span>', '2015-04-29 20:45:44', 3),
(58, 'asda', 'Buku GRATIS !!!<span> Teman-teman saya mau bagi buku gratis nih, syarat nya:<br> 1. Like dan share status ini<br> 2. Invite pin saya 53DEA7F1<span><br> 3. Silakan tulis di kolom komentar dengan impian terbesar teman-teman</span></span> Karena buku nya tinggal satu pcs, maka komentar terakhir yang mendapatkan like dari saya yang akan mendapatkan buku ini. Pemenang akan saya umumkan besok siang<br> Selamat mencoba, semoga anda beruntung <br>', '2015-04-29 01:11:06', 1),
(59, 'Asdasdwdcadscacasc', 'Buku GRATIS !!!<span> Teman-teman saya mau bagi buku gratis nih, syarat nya:<br> 1. Like dan share status ini<br> 2. Invite pin saya 53DEA7F1<span><br> 3. Silakan tulis di kolom komentar dengan impian terbesar teman-teman</span></span> Karena buku nya tinggal satu pcs, maka komentar terakhir yang mendapatkan like dari saya yang akan mendapatkan buku ini. Pemenang akan saya umumkan besok siang<br> Selamat mencoba, semoga anda beruntung <br>', '2015-04-29 01:11:11', 1),
(60, 'asda', 'Buku GRATIS !!!<span> Teman-teman saya mau bagi buku gratis nih, syarat nya:<br> 1. Like dan share status ini<br> 2. Invite pin saya 53DEA7F1<span><br> 3. Silakan tulis di kolom komentar dengan impian terbesar teman-teman</span></span> Karena buku nya tinggal satu pcs, maka komentar terakhir yang mendapatkan like dari saya yang akan mendapatkan buku ini. Pemenang akan saya umumkan besok siang<br> Selamat mencoba, semoga anda beruntung <br>', '2015-04-29 01:11:06', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `download`
--

CREATE TABLE IF NOT EXISTS `download` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal_upload` date NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `tipe_file` varchar(10) NOT NULL,
  `ukuran_file` varchar(20) NOT NULL,
  `file` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `download`
--

INSERT INTO `download` (`id`, `tanggal_upload`, `nama_file`, `tipe_file`, `ukuran_file`, `file`) VALUES
(6, '2015-04-28', 'sdf', 'pdf', '128978', 'files/sdf.pdf'),
(8, '2015-04-28', 'daasd', 'docx', '59103', 'files/daasd.docx'),
(9, '2015-04-28', 'asdasdasdas', 'docx', '59103', 'files/asdasdasdas.docx'),
(10, '2015-05-04', 'o9o', 'pdf', '1213253', 'files/o9o.pdf'),
(11, '2015-05-08', 'asd', 'pdf', '373321', 'files/asd.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
  `galeri_id` int(11) NOT NULL AUTO_INCREMENT,
  `galeri_nama` varchar(100) NOT NULL,
  `galeri_keterangan` text NOT NULL,
  `galeri_link` text NOT NULL,
  `galeri_tgl` datetime NOT NULL,
  PRIMARY KEY (`galeri_id`),
  UNIQUE KEY `galeri_nama` (`galeri_nama`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`galeri_id`, `galeri_nama`, `galeri_keterangan`, `galeri_link`, `galeri_tgl`) VALUES
(31, 'Ary', 'Ary', 'uploads/C360_2015-01-03-14-20-25-428.jpg', '0000-00-00 00:00:00'),
(32, 'asd', 'asd', 'uploads/C360_2015-01-03-14-20-52-982.jpg', '0000-00-00 00:00:00'),
(34, 'ggg', 'ggg', 'uploads/C360_2015-01-03-15-51-19-682.jpg', '0000-00-00 00:00:00'),
(36, 's', 'ss', 'uploads/C360_2015-01-03-15-50-31-526.jpg', '0000-00-00 00:00:00'),
(38, 'dfsdf', 'fsdf', 'uploads/C360_2014-07-13-19-27-14-435.jpg', '0000-00-00 00:00:00'),
(39, 'dsfsd', 'fsfsdfsdf', 'uploads/20140826_090837.jpg', '0000-00-00 00:00:00'),
(40, 'bbb', 'bb', 'uploads/20140826_091057.jpg', '0000-00-00 00:00:00'),
(41, 'ASdasdasd', 'asdasd', 'uploads/apple_vnbwfjei.jpg', '2015-03-27 23:02:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `kategori_id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_nama` varchar(50) NOT NULL,
  `kategori_deskripsi` text NOT NULL,
  PRIMARY KEY (`kategori_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_nama`, `kategori_deskripsi`) VALUES
(1, 'Hot News', 'Berisikan Berita Terpanas'),
(2, 'School News', 'Berisikan Berita Terupdate Sekolah'),
(3, 'Puisi', 'Tulisan Bertemakan Puisi'),
(4, 'Cerpen', 'Kumpulan Cerita Pendek');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `kelas_id` int(11) NOT NULL AUTO_INCREMENT,
  `kelas_nama` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kelas_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`kelas_id`, `kelas_nama`) VALUES
(1, 'X-1'),
(2, 'X-2'),
(3, 'X-3'),
(4, 'X-4'),
(5, 'X-5'),
(6, 'X-6');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `nilai_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) DEFAULT NULL,
  `pelajaran_id` int(11) DEFAULT NULL,
  `tahun_id` int(11) DEFAULT NULL,
  `semester_id` int(11) DEFAULT NULL,
  `nilai_kkm` int(11) DEFAULT NULL,
  `nilai_poin` int(11) DEFAULT NULL,
  PRIMARY KEY (`nilai_id`),
  KEY `siswa_id` (`id`),
  KEY `pelajaran_id` (`pelajaran_id`),
  KEY `tahunajaran_id` (`tahun_id`),
  KEY `semester_id` (`semester_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=129 ;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`nilai_id`, `id`, `pelajaran_id`, `tahun_id`, `semester_id`, `nilai_kkm`, `nilai_poin`) VALUES
(119, 27, 1, 1, 1, 60, 59),
(120, 27, 2, 1, 1, 55, 80),
(122, 25, 1, 1, 1, 60, 88),
(125, 28, 1, 1, 1, 70, 69),
(126, 29, 1, 1, 1, 70, 80),
(127, 28, 1, 1, 1, 89, 56),
(128, 29, 1, 1, 1, 89, 88);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelajaran`
--

CREATE TABLE IF NOT EXISTS `pelajaran` (
  `pelajaran_id` int(11) NOT NULL AUTO_INCREMENT,
  `pelajaran_nama` varchar(50) NOT NULL,
  PRIMARY KEY (`pelajaran_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `pelajaran`
--

INSERT INTO `pelajaran` (`pelajaran_id`, `pelajaran_nama`) VALUES
(1, 'MTK'),
(2, 'BIO'),
(3, 'FIS'),
(4, 'BHS'),
(5, 'INGG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekolah`
--

CREATE TABLE IF NOT EXISTS `sekolah` (
  `sekolah_id` int(11) NOT NULL AUTO_INCREMENT,
  `sekolah_nama` varchar(100) DEFAULT NULL,
  `sekolah_alamat` text,
  `sekolah_telp` varchar(16) DEFAULT NULL,
  `sekolah_visi` text,
  `sekolah_misi` text,
  PRIMARY KEY (`sekolah_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `sekolah`
--

INSERT INTO `sekolah` (`sekolah_id`, `sekolah_nama`, `sekolah_alamat`, `sekolah_telp`, `sekolah_visi`, `sekolah_misi`) VALUES
(1, 'SMA N 1 Sungayang', 'Sungayang', '546', '4564asdasda', '456asdasdas'),
(10, 'asdaasd', 'asdasd', 'sdasdasd', 'asd', 'asd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `semester`
--

CREATE TABLE IF NOT EXISTS `semester` (
  `semester_id` int(11) NOT NULL AUTO_INCREMENT,
  `semester_nama` int(11) NOT NULL,
  PRIMARY KEY (`semester_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `semester`
--

INSERT INTO `semester` (`semester_id`, `semester_nama`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahun`
--

CREATE TABLE IF NOT EXISTS `tahun` (
  `tahun_id` int(11) NOT NULL AUTO_INCREMENT,
  `tahun_nama` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`tahun_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tahun`
--

INSERT INTO `tahun` (`tahun_id`, `tahun_nama`) VALUES
(1, '2014/2015');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_induk` varchar(30) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `telp` varchar(16) DEFAULT NULL,
  `alamat` text,
  `status` varchar(25) DEFAULT NULL,
  `jenis_kelamin` varchar(25) DEFAULT NULL,
  `kelas_id` int(11) DEFAULT NULL,
  `access` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `kelas_id` (`kelas_id`),
  KEY `kelas_id_2` (`kelas_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nomor_induk`, `name`, `username`, `password`, `telp`, `alamat`, `status`, `jenis_kelamin`, `kelas_id`, `access`) VALUES
(10, NULL, 'Administrator', 'admin', 'admin', '085761167894', 'Padang', 'PNS', 'Perempuan', NULL, 'admin'),
(25, '56', 'siswa', 'siswa', 'siswa', '456', 'frghf', 'PNS', 'Perempuan', 4, 'siswa'),
(26, 'op', 'guru', 'guru', 'guru', 'op', 'op', 'Honorer', 'Laki-laki', 1, 'guru'),
(27, '1', 'Ary', 'ary', 'ary', '123422', 'asdas', 'dasdas', 'asdas', 2, 'siswa'),
(28, '675675', 'hfgh', 'tgfhf', 'sd', '3453', 'sdfsd', 'Aktif', 'Laki-laki', 1, 'siswa'),
(29, '345', 'fsd', 'sdf', 'sd', '3453', 'sdfsd', 'Aktif', 'Laki-laki', 1, 'siswa');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
