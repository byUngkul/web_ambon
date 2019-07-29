-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29 Jul 2019 pada 03.57
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_ambon`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `name`, `created_at`) VALUES
(1, 0, 'Kegiatan', '2019-06-11 03:21:39'),
(2, 0, 'Potensi', '2019-06-11 03:21:39'),
(3, 0, 'Budaya', '2019-06-17 15:57:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `name`, `email`, `body`, `created_at`) VALUES
(1, 10, 'namaku', 'emailku@mail.com', 'wah jadi tau....', '2019-06-27 06:33:03'),
(2, 2, 'komenter', 'komenter@mail.com', 'info tang bagus....\r\njadi tahu', '2019-06-27 06:53:25'),
(3, 3, 'namanya', 'emailnya@mail.com', 'ini bikin komentar... coba test komentar', '2019-06-27 07:05:40'),
(4, 9, 'aam', 'aam@gmail.com', 'test komentar', '2019-07-28 01:38:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `desa`
--

CREATE TABLE `desa` (
  `desa_id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `slug` varchar(225) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `profil` text,
  `url` varchar(255) DEFAULT NULL,
  `kategori_wilayah` enum('kelurahan','kecamatan') DEFAULT NULL,
  `no_telp_1` varchar(15) DEFAULT NULL,
  `no_telp_2` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `is_parent_site` enum('no','yes') DEFAULT NULL,
  `landasan_hukum` text,
  `tugas_fungsi` text,
  `visi_misi` text,
  `geografis` text,
  `peta` varchar(100) DEFAULT NULL,
  `logo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `desa`
--

INSERT INTO `desa` (`desa_id`, `nama`, `slug`, `alamat`, `profil`, `url`, `kategori_wilayah`, `no_telp_1`, `no_telp_2`, `email`, `is_parent_site`, `landasan_hukum`, `tugas_fungsi`, `visi_misi`, `geografis`, `peta`, `logo`) VALUES
(1, 'Negeri Batu Merah', 'negeri-batu-merah', 'Alamat', '<center><strong><em>Assalammualaikum Wr. Wb.</em></strong></center>\r\n<p>&nbsp;</p>\r\n<p><strong>DENGAN</strong>&nbsp;senang hati dan tangan terbuka kami menyampaikan salam yang hangat bagi Anda untuk mengenalNegeri Batu Merah, Kecamatan Teluk Ambon Kota Ambon di Propinsi Maluku.</p>\r\n<p>Situs ini diharapkan akan memberikan informasi yang cukup mengenai Kecamatan Teluk Ambon Kota Ambon secara umum tentang alamnya, khasanah budaya, masyarakat, pemerintahan, pembangunan, perekonomian serta pariwisata.</p>\r\n<p>Pada kesempatan ini saya menghimbau kepada seluruh elemen masyarakat khususnya masyarakat kecamatan Teluk Ambon Kota Ambon, dengan sudah on line nya situs Kecamatan Teluk Ambon Kota Ambon, marilah kita bersama membangun kampung halaman dengan bergotong royong lewat media informasi ini.</p>\r\n<p>Saya mengingatkan kepada seluruh masyarakat Kecamatan Teluk Ambon, bahwa faktor penentu keberhasilan program pembangunan adalah dengan memelihara tali silaturrahmi, persatuan dan kesatuan serta menjaga keamanan demi mewujudkan situasi yang kondusif.</p>\r\n<p>&nbsp;</p>\r\n<center><em>Wabillahi Taufik Walhidayah, Wassalammualaikum Wr. Wb.</em></center>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<center>Teluk Ambon , 2019<br />Lurah Negeri Batu Merah</center>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<center><strong>Nama Lurah</strong></center>', 'http://negeri-batu-merah.ambon.go.id', 'kelurahan', '0', '0', '0', 'no', '', '', '', '', 'Negeri-Batu-Merah.jpg', 'Negeri-Batu-Merah.png'),
(2, 'Negeri Galala', 'negeri-galala', 'Alamat', '<center><strong><em>Assalammualaikum Wr. Wb.</em></strong></center>\r\n<p>&nbsp;</p>\r\n<p><strong>DENGAN</strong>&nbsp;senang hati dan tangan terbuka kami menyampaikan salam yang hangat bagi Anda untuk mengenal Kecamatan Teluk Ambon Kota Ambon di Propinsi Maluku.</p>\r\n<p>Situs ini diharapkan akan memberikan informasi yang cukup mengenai Kecamatan Teluk Ambon Kota Ambon secara umum tentang alamnya, khasanah budaya, masyarakat, pemerintahan, pembangunan, perekonomian serta pariwisata.</p>\r\n<p>Pada kesempatan ini saya menghimbau kepada seluruh elemen masyarakat khususnya masyarakat kecamatan Teluk Ambon Kota Ambon, dengan sudah on line nya situs Kecamatan Teluk Ambon Kota Ambon, marilah kita bersama membangun kampung halaman dengan bergotong royong lewat media informasi ini.</p>\r\n<p>Saya mengingatkan kepada seluruh masyarakat Kecamatan Teluk Ambon, bahwa faktor penentu keberhasilan program pembangunan adalah dengan memelihara tali silaturrahmi, persatuan dan kesatuan serta menjaga keamanan demi mewujudkan situasi yang kondusif.</p>\r\n<p>&nbsp;</p>\r\n<center><em>Wabillahi Taufik Walhidayah, Wassalammualaikum Wr. Wb.</em></center>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<center>Teluk Ambon , 2019<br />Camat Teluk Ambon</center>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<center><strong>Muhamad Nasir Rumata, S.Sos</strong></center>', 'http://negeri-galala.ambon.go.id', 'kelurahan', '0', '0', '0', 'no', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Negeri Hative Kecil', 'negeri-hative-kecil', 'Alamat', '<strong><em>Negeri Hative Kecil </em></strong>adalah negeri di kecamatan Sirimau, Kota Ambon, Maluku, Indonesia.', 'http://negeri-hative-kecil.ambon.go.id', 'kelurahan', '0', '0', '0', 'no', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Negeri Soya', 'negeri-soya', 'Alamat', '<strong><em>Negeri Soya</em></strong> adalah sebuah negeri yang terletak di Kecamatan Sirimau, Ambon, Maluku.', 'http://negeri-soya.ambon.go.id', 'kelurahan', '0', '0', '0', 'no', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Kelurahan Ahusen', 'kelurahan-ahusen', 'Alamat', '<strong><em>Kelurahan Ahusen</em></strong> adalah desa di kecamatan Teluk Ambon, Kota Ambon, Maluku, Indonesia.', 'http://kel-ahusen.ambon.go.id', 'kelurahan', '0', '0', '0', 'no', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Kelurahan Amantelu', 'kelurahan-amantelu', 'Alamat', '<strong><em>Kelurahan Amantelu </em></strong>adalah kelurahan yang terletak di kecamatan Sirimau, Ambon, Maluku.', 'http://kel-amantelu.ambon.go.id', 'kelurahan', '0', '0', '0', 'no', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Kelurahan Batu Gajah', 'kelurahan-batu-gajah', 'Alamat', '<strong><em>Kelurahan Batu Gajah </em></strong>adalah sebuah kelurahan yang terletak Kecamatan Sirimau, Ambon, Maluku.', 'http://kel-batu-gajah.ambon.go.id', 'kelurahan', '0', '0', '0', 'no', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Kelurahan Batu Meja', 'kelurahan-batu-meja', 'Alamat', '<strong><em>Kelurahan Batu Meja </em></strong>adalah sebuah kelurahan yang terletak Kecamatan Sirimau, Ambon, Maluku.', 'http://kel-batu-meja.ambon.go.id', 'kelurahan', '0', '0', '0', 'no', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Kelurahan Honipopu', 'kelurahan-honipopu', 'Alamat', '<strong><em>Kelurahan Honipopu </em></strong>adalah sebuah kelurahan yang terletak Kecamatan Sirimau, Ambon, Maluku.', 'http://kel-honipopu.ambon.go.id', 'kelurahan', '0', '0', '0', 'no', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Kelurahan Karang Panjang', 'kelurahan-karang-panjang', 'Alamat', '<strong><em>Kelurahan Karang Panjang </em></strong>adalah sebuah kelurahan yang terletak Kecamatan Sirimau, Ambon, Maluku.', 'http://kel-karang-panjang.ambon.go.id', 'kelurahan', '0', '0', '0', 'no', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Kelurahan Pandan Kasturi', 'kelurahan-pandan-kasturi', 'Alamat', '<strong><em>Kelurahan Pandan Kasturi </em></strong>adalah sebuah kelurahan yang terletak Kecamatan Sirimau, Ambon, Maluku.', 'http://kel-pandan-kasturi.ambon.go.id', 'kelurahan', '0', '0', '0', 'no', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Kelurahan Rijali', 'kelurahan-rijali', 'Alamat', '<strong><em>Kelurahan Rijali </em></strong>adalah sebuah kelurahan yang terletak Kecamatan Sirimau, Ambon, Maluku.', 'http://kel-rijali.ambon.go.id', 'kelurahan', '0', '0', '0', 'no', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Kelurahan Uritetu', 'kelurahan-uritetu', 'Alamat', '<strong><em>Kelurahan Uritetu </em></strong>adalah sebuah kelurahan yang terletak Kecamatan Sirimau, Ambon, Maluku.', 'http://kel-uritetu.ambon.go.id', 'kelurahan', '0', '0', '0', 'no', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Kelurahan Waihoka', 'kelurahan-waihoka', 'Alamat', '<strong><em>Kelurahan Waihoka </em></strong>adalah sebuah kelurahan yang terletak Kecamatan Sirimau, Ambon, Maluku.', 'http://kel-waihoka.ambon.go.id', 'kelurahan', '0', '0', '0', 'no', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Kecamatan Sirimau', 'kecamatan-sirimau', 'Alamat', '<center><strong><em>Assalammualaikum Wr. Wb.</em></strong></center>\r\n<p>&nbsp;</p>\r\n<p><strong>DENGAN</strong>&nbsp;senang hati dan tangan terbuka kami menyampaikan salam yang hangat bagi Anda untuk mengenal Kecamatan Teluk Ambon Kota Ambon di Propinsi Maluku.</p>\r\n<p>Situs ini diharapkan akan memberikan informasi yang cukup mengenai Kecamatan Teluk Ambon Kota Ambon secara umum tentang alamnya, khasanah budaya, masyarakat, pemerintahan, pembangunan, perekonomian serta pariwisata.</p>\r\n<p>Pada kesempatan ini saya menghimbau kepada seluruh elemen masyarakat khususnya masyarakat kecamatan Teluk Ambon Kota Ambon, dengan sudah on line nya situs Kecamatan Teluk Ambon Kota Ambon, marilah kita bersama membangun kampung halaman dengan bergotong royong lewat media informasi ini.</p>\r\n<p>Saya mengingatkan kepada seluruh masyarakat Kecamatan Teluk Ambon, bahwa faktor penentu keberhasilan program pembangunan adalah dengan memelihara tali silaturrahmi, persatuan dan kesatuan serta menjaga keamanan demi mewujudkan situasi yang kondusif.</p>\r\n<p>&nbsp;</p>\r\n<center><em>Wabillahi Taufik Walhidayah, Wassalammualaikum Wr. Wb.</em></center>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<center>Teluk Ambon , 2019<br />Camat Teluk Ambon</center>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<center><strong>Muhamad Nasir Rumata, S.Sos</strong></center>', '', 'kecamatan', '0811118025', '0816972265', 'kecsirimau@ambon.go.id', 'yes', '<p>Sesuai dengan Peraturan Daerah Nomor 11 Tahun 2008 tentang Pembentukan Organisasi dan Tata Kerja Kecamatan Kota Ambon.</p>', '<h5>Tugas</h5>\r\n<hr />\r\n<ol>\r\n<li>Membantu Walikota dalam melaksanakan kewenangan pemerintahan yang dilimpahkan untuk menangani sebagian urusan otonomi daerah.</li>\r\n</ol>\r\n<h5>Fungsi</h5>\r\n<hr />\r\n<p>Untuk melaksanakan tugas tersebut, maka Camat mempunyai fungsi adalah :</p>\r\n<ol>\r\n<li>Menyelenggarakan Urusan Pemerintahan Umum.</li>\r\n<li>Mengkoordinasikan Kegiatan Pemberdayaan Masyarakat.</li>\r\n<li>Mengkoordinasikan Penerapan dan Penegakkan Peraturan Daerah (Perda)dan peraturan Walikota (Perwali)</li>\r\n<li>Mengkoordinasikan Pemeliharaan Prasarana dan Sarana layanan Umum</li>\r\n<li>Mengkoordinasikan penelenggaraan kegiatan pemerintahan yang dilakukan oleh perangkat daerah di tingkat kecamatan.</li>\r\n<li>Membina dan mengawasi penyelenggaraan kegiatan desa/kelurahan/negeri</li>\r\n<li>Melaksanakan urusan pemerintah yang menjadi kewenangan Kota Ambon yang tidak dilaksanakan oleh unit kerja pemerintah kota yang ada di Kecamatan</li>\r\n<li>Melaksanakan tugas lain yang diperintahkan oleh perundang-undangan</li>\r\n</ol>', '', '<p>Letak dan Batas Wilayah Secara Geografi Wilayah Kecamatan Sirimau dibatasi antara lain oleh :</p>\r\n<ol>\r\n<li>Sebelah Utara : Teluk Ambon</li>\r\n<li>Sebelah Selatan : Kecamatan Leitimur Selatan</li>\r\n<li>Sebelah Barat : Kecamatan Nusaniwe</li>\r\n<li>Sebelah Timur : Kec. Teluk Ambon Baguala</li>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<h5>Luas Wilayah dan Jarak</h5>\r\n<hr />\r\n<p>Sesuai Peraturan Daerah Kota Ambon Nomor 2 Tahun 2006 tentang Pembentukan Kecamatan, luas keseluruhan wilayah Kecamatan Sirimau adalah 86,81 km2.</p>\r\n<p>&nbsp;</p>', 'Kecamatan-Sirimau.jpg', 'Kecamatan-Sirimau.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galleri`
--

CREATE TABLE `galleri` (
  `id` int(11) NOT NULL,
  `desa_id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `thumb_image` varchar(255) DEFAULT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `galleri`
--

INSERT INTO `galleri` (`id`, `desa_id`, `nama`, `keterangan`, `image`, `thumb_image`, `date_added`) VALUES
(1, 2, 'pemandangan baru', 'pemandangan di ambon', 'pemandangan-baru.jpg', NULL, '2019-06-27 02:29:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `infrastruktur_v`
--

CREATE TABLE `infrastruktur_v` (
  `id` int(11) NOT NULL,
  `nama_infra` varchar(255) DEFAULT NULL,
  `value` int(4) DEFAULT NULL,
  `id_desa` int(11) DEFAULT NULL,
  `id_jenis_infra` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `infrastruktur_v`
--

INSERT INTO `infrastruktur_v` (`id`, `nama_infra`, `value`, `id_desa`, `id_jenis_infra`) VALUES
(1, 'Sekolah Dasar', 2, 5, 1),
(2, 'Greja', 1, 5, 2),
(3, 'Masjid', 2, 5, 2),
(4, 'Kantor UPTD Pertanian', 1, 5, 3),
(5, 'SMP', 1, 5, 1),
(6, 'Sekolah Dasar', 2, 1, 1),
(7, 'Majels Taklim', 1, 1, 2),
(9, 'Masjid', 2, 2, 2),
(10, 'Lapang bola', 1, 1, 7),
(11, 'Lapang Voli', 4, 1, 7),
(12, 'Kantor Dinas', 2, 1, 3),
(13, 'Kantor UPTD', 3, 1, 3),
(14, 'Sekolah Dasar', 1, 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id` int(11) NOT NULL,
  `nama_jb` varchar(65) NOT NULL,
  `id_desa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id`, `nama_jb`, `id_desa`) VALUES
(1, 'KASI Pemerintahan', 15),
(2, 'Camat', 15),
(3, 'Lurah', 1),
(4, 'Sekmat', 15),
(5, 'KASI 1', 15),
(6, 'KASI 2', 15),
(7, 'KASI 3', 15),
(9, 'Lurah', 2),
(10, 'Kepala Nagari', 3),
(11, 'Sekdes', 2),
(12, 'Sekdes', 3),
(13, 'Sekdes', 1),
(14, 'Kasi Kesos', 1),
(15, 'Kasi Pemerintahan', 1),
(16, 'Lurah', 5),
(17, 'Sekdes', 5),
(18, 'Kaur Keuangan', 5),
(19, 'Kasi Pemerintahan', 5),
(20, 'Kasi Kesos', 5),
(21, 'Kaur Umum', 5),
(22, 'Staff', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_infra`
--

CREATE TABLE `jenis_infra` (
  `id_infra` int(11) NOT NULL,
  `jenis_infra` varchar(255) NOT NULL,
  `id_desa` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `jenis_infra`
--

INSERT INTO `jenis_infra` (`id_infra`, `jenis_infra`, `id_desa`) VALUES
(1, 'Sekolah', 5),
(2, 'Tempat Ibadah', 5),
(3, 'Kantor Pemerintahan', 5),
(4, 'Kantor Swasta', NULL),
(7, 'Sarana Olahraga', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_potensi`
--

CREATE TABLE `jenis_potensi` (
  `id_jp` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `jenis_potensi`
--

INSERT INTO `jenis_potensi` (`id_jp`, `nama`) VALUES
(1, 'Pariwisata'),
(2, 'Perikanan'),
(3, 'Pertanian');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kependudukan_kl`
--

CREATE TABLE `kependudukan_kl` (
  `id` int(11) NOT NULL,
  `tl_key` varchar(60) NOT NULL,
  `kl_text` varchar(100) NOT NULL,
  `id_desa` int(11) NOT NULL,
  `laki` int(11) DEFAULT NULL,
  `perempuan` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `kependudukan_kl`
--

INSERT INTO `kependudukan_kl` (`id`, `tl_key`, `kl_text`, `id_desa`, `laki`, `perempuan`, `total`) VALUES
(16, 'pendidikan', 'Tidak Sekolah', 1, 10, 20, 30),
(17, 'pendidikan', 'Tidak Sekolah', 2, NULL, NULL, NULL),
(18, 'pendidikan', 'Tidak Sekolah', 3, NULL, NULL, NULL),
(19, 'pendidikan', 'Tidak Sekolah', 4, 10, 20, 30),
(20, 'pendidikan', 'Tidak Sekolah', 5, 100, 120, 220),
(21, 'pendidikan', 'Tidak Sekolah', 6, NULL, NULL, NULL),
(22, 'pendidikan', 'Tidak Sekolah', 7, NULL, NULL, NULL),
(23, 'pendidikan', 'Tidak Sekolah', 8, NULL, NULL, NULL),
(24, 'pendidikan', 'Tidak Sekolah', 9, NULL, NULL, NULL),
(25, 'pendidikan', 'Tidak Sekolah', 10, NULL, NULL, NULL),
(26, 'pendidikan', 'Tidak Sekolah', 11, NULL, NULL, NULL),
(27, 'pendidikan', 'Tidak Sekolah', 12, NULL, NULL, NULL),
(28, 'pendidikan', 'Tidak Sekolah', 13, NULL, NULL, NULL),
(29, 'pendidikan', 'Tidak Sekolah', 14, NULL, NULL, NULL),
(30, 'pendidikan', 'Tidak Sekolah', 15, NULL, NULL, NULL),
(31, 'pendidikan', 'Sekolah dasar', 1, 11, 20, 31),
(32, 'pendidikan', 'Sekolah dasar', 2, NULL, NULL, NULL),
(33, 'pendidikan', 'Sekolah dasar', 3, NULL, NULL, NULL),
(34, 'pendidikan', 'Sekolah dasar', 4, NULL, NULL, NULL),
(35, 'pendidikan', 'Sekolah dasar', 5, NULL, NULL, NULL),
(36, 'pendidikan', 'Sekolah dasar', 6, NULL, NULL, NULL),
(37, 'pendidikan', 'Sekolah dasar', 7, NULL, NULL, NULL),
(38, 'pendidikan', 'Sekolah dasar', 8, NULL, NULL, NULL),
(39, 'pendidikan', 'Sekolah dasar', 9, NULL, NULL, NULL),
(40, 'pendidikan', 'Sekolah dasar', 10, NULL, NULL, NULL),
(41, 'pendidikan', 'Sekolah dasar', 11, NULL, NULL, NULL),
(42, 'pendidikan', 'Sekolah dasar', 12, NULL, NULL, NULL),
(43, 'pendidikan', 'Sekolah dasar', 13, NULL, NULL, NULL),
(44, 'pendidikan', 'Sekolah dasar', 14, NULL, NULL, NULL),
(45, 'pendidikan', 'Sekolah dasar', 15, NULL, NULL, NULL),
(46, 'penduduk', 'Tahun 2017', 1, 1500, 1500, 3000),
(47, 'penduduk', 'Tahun 2017', 2, 1500, 1200, 2700),
(48, 'penduduk', 'Tahun 2017', 3, NULL, NULL, NULL),
(49, 'penduduk', 'Tahun 2017', 4, NULL, NULL, NULL),
(50, 'penduduk', 'Tahun 2017', 5, 2100, 1890, 3990),
(51, 'penduduk', 'Tahun 2017', 6, NULL, NULL, NULL),
(52, 'penduduk', 'Tahun 2017', 7, NULL, NULL, NULL),
(53, 'penduduk', 'Tahun 2017', 8, NULL, NULL, NULL),
(54, 'penduduk', 'Tahun 2017', 9, NULL, NULL, NULL),
(55, 'penduduk', 'Tahun 2017', 10, NULL, NULL, NULL),
(56, 'penduduk', 'Tahun 2017', 11, NULL, NULL, NULL),
(57, 'penduduk', 'Tahun 2017', 12, NULL, NULL, NULL),
(58, 'penduduk', 'Tahun 2017', 13, NULL, NULL, NULL),
(59, 'penduduk', 'Tahun 2017', 14, NULL, NULL, NULL),
(60, 'penduduk', 'Tahun 2017', 15, NULL, NULL, NULL),
(61, 'penduduk', 'Tahun 2018', 1, 2500, 1500, 4000),
(62, 'penduduk', 'Tahun 2018', 2, 1500, 1500, 3000),
(63, 'penduduk', 'Tahun 2018', 3, NULL, NULL, NULL),
(64, 'penduduk', 'Tahun 2018', 4, NULL, NULL, NULL),
(65, 'penduduk', 'Tahun 2018', 5, NULL, NULL, NULL),
(66, 'penduduk', 'Tahun 2018', 6, NULL, NULL, NULL),
(67, 'penduduk', 'Tahun 2018', 7, NULL, NULL, NULL),
(68, 'penduduk', 'Tahun 2018', 8, NULL, NULL, NULL),
(69, 'penduduk', 'Tahun 2018', 9, NULL, NULL, NULL),
(70, 'penduduk', 'Tahun 2018', 10, NULL, NULL, NULL),
(71, 'penduduk', 'Tahun 2018', 11, NULL, NULL, NULL),
(72, 'penduduk', 'Tahun 2018', 12, NULL, NULL, NULL),
(73, 'penduduk', 'Tahun 2018', 13, NULL, NULL, NULL),
(74, 'penduduk', 'Tahun 2018', 14, NULL, NULL, NULL),
(75, 'penduduk', 'Tahun 2018', 15, NULL, NULL, NULL),
(91, 'umur', '0 - 10 Tahun', 1, NULL, NULL, NULL),
(92, 'umur', '0 - 10 Tahun', 2, 30, 40, 70),
(93, 'umur', '0 - 10 Tahun', 3, NULL, NULL, NULL),
(94, 'umur', '0 - 10 Tahun', 4, NULL, NULL, NULL),
(95, 'umur', '0 - 10 Tahun', 5, NULL, NULL, NULL),
(96, 'umur', '0 - 10 Tahun', 6, NULL, NULL, NULL),
(97, 'umur', '0 - 10 Tahun', 7, NULL, NULL, NULL),
(98, 'umur', '0 - 10 Tahun', 8, NULL, NULL, NULL),
(99, 'umur', '0 - 10 Tahun', 9, NULL, NULL, NULL),
(100, 'umur', '0 - 10 Tahun', 10, NULL, NULL, NULL),
(101, 'umur', '0 - 10 Tahun', 11, NULL, NULL, NULL),
(102, 'umur', '0 - 10 Tahun', 12, NULL, NULL, NULL),
(103, 'umur', '0 - 10 Tahun', 13, NULL, NULL, NULL),
(104, 'umur', '0 - 10 Tahun', 14, NULL, NULL, NULL),
(105, 'umur', '0 - 10 Tahun', 15, NULL, NULL, NULL),
(106, 'penduduk', 'Tahun 2019', 1, 2500, 3500, 6000),
(107, 'penduduk', 'Tahun 2019', 2, 1600, 1500, 3100),
(108, 'penduduk', 'Tahun 2019', 3, NULL, NULL, NULL),
(109, 'penduduk', 'Tahun 2019', 4, NULL, NULL, NULL),
(110, 'penduduk', 'Tahun 2019', 5, NULL, NULL, NULL),
(111, 'penduduk', 'Tahun 2019', 6, NULL, NULL, NULL),
(112, 'penduduk', 'Tahun 2019', 7, NULL, NULL, NULL),
(113, 'penduduk', 'Tahun 2019', 8, NULL, NULL, NULL),
(114, 'penduduk', 'Tahun 2019', 9, NULL, NULL, NULL),
(115, 'penduduk', 'Tahun 2019', 10, NULL, NULL, NULL),
(116, 'penduduk', 'Tahun 2019', 11, NULL, NULL, NULL),
(117, 'penduduk', 'Tahun 2019', 12, NULL, NULL, NULL),
(118, 'penduduk', 'Tahun 2019', 13, NULL, NULL, NULL),
(119, 'penduduk', 'Tahun 2019', 14, NULL, NULL, NULL),
(120, 'penduduk', 'Tahun 2019', 15, NULL, NULL, NULL),
(226, 'umur', '11 - 20 Tahun', 1, NULL, NULL, NULL),
(227, 'umur', '11 - 20 Tahun', 2, NULL, NULL, NULL),
(228, 'umur', '11 - 20 Tahun', 3, NULL, NULL, NULL),
(229, 'umur', '11 - 20 Tahun', 4, NULL, NULL, NULL),
(230, 'umur', '11 - 20 Tahun', 5, NULL, NULL, NULL),
(231, 'umur', '11 - 20 Tahun', 6, NULL, NULL, NULL),
(232, 'umur', '11 - 20 Tahun', 7, NULL, NULL, NULL),
(233, 'umur', '11 - 20 Tahun', 8, NULL, NULL, NULL),
(234, 'umur', '11 - 20 Tahun', 9, NULL, NULL, NULL),
(235, 'umur', '11 - 20 Tahun', 10, NULL, NULL, NULL),
(236, 'umur', '11 - 20 Tahun', 11, NULL, NULL, NULL),
(237, 'umur', '11 - 20 Tahun', 12, NULL, NULL, NULL),
(238, 'umur', '11 - 20 Tahun', 13, NULL, NULL, NULL),
(239, 'umur', '11 - 20 Tahun', 14, NULL, NULL, NULL),
(240, 'umur', '11 - 20 Tahun', 15, NULL, NULL, NULL),
(241, 'pendidikan', 'SMP', 1, NULL, NULL, NULL),
(242, 'pendidikan', 'SMP', 2, NULL, NULL, NULL),
(243, 'pendidikan', 'SMP', 3, NULL, NULL, NULL),
(244, 'pendidikan', 'SMP', 4, NULL, NULL, NULL),
(245, 'pendidikan', 'SMP', 5, NULL, NULL, NULL),
(246, 'pendidikan', 'SMP', 6, NULL, NULL, NULL),
(247, 'pendidikan', 'SMP', 7, NULL, NULL, NULL),
(248, 'pendidikan', 'SMP', 8, NULL, NULL, NULL),
(249, 'pendidikan', 'SMP', 9, NULL, NULL, NULL),
(250, 'pendidikan', 'SMP', 10, NULL, NULL, NULL),
(251, 'pendidikan', 'SMP', 11, NULL, NULL, NULL),
(252, 'pendidikan', 'SMP', 12, NULL, NULL, NULL),
(253, 'pendidikan', 'SMP', 13, NULL, NULL, NULL),
(254, 'pendidikan', 'SMP', 14, NULL, NULL, NULL),
(255, 'pendidikan', 'SMP', 15, NULL, NULL, NULL),
(256, 'pendidikan', 'SMA', 1, NULL, NULL, NULL),
(257, 'pendidikan', 'SMA', 2, NULL, NULL, NULL),
(258, 'pendidikan', 'SMA', 3, NULL, NULL, NULL),
(259, 'pendidikan', 'SMA', 4, NULL, NULL, NULL),
(260, 'pendidikan', 'SMA', 5, NULL, NULL, NULL),
(261, 'pendidikan', 'SMA', 6, NULL, NULL, NULL),
(262, 'pendidikan', 'SMA', 7, NULL, NULL, NULL),
(263, 'pendidikan', 'SMA', 8, NULL, NULL, NULL),
(264, 'pendidikan', 'SMA', 9, NULL, NULL, NULL),
(265, 'pendidikan', 'SMA', 10, NULL, NULL, NULL),
(266, 'pendidikan', 'SMA', 11, NULL, NULL, NULL),
(267, 'pendidikan', 'SMA', 12, NULL, NULL, NULL),
(268, 'pendidikan', 'SMA', 13, NULL, NULL, NULL),
(269, 'pendidikan', 'SMA', 14, NULL, NULL, NULL),
(270, 'pendidikan', 'SMA', 15, NULL, NULL, NULL),
(271, 'pendidikan', 'S1', 1, NULL, NULL, NULL),
(272, 'pendidikan', 'S1', 2, NULL, NULL, NULL),
(273, 'pendidikan', 'S1', 3, NULL, NULL, NULL),
(274, 'pendidikan', 'S1', 4, NULL, NULL, NULL),
(275, 'pendidikan', 'S1', 5, NULL, NULL, NULL),
(276, 'pendidikan', 'S1', 6, NULL, NULL, NULL),
(277, 'pendidikan', 'S1', 7, NULL, NULL, NULL),
(278, 'pendidikan', 'S1', 8, NULL, NULL, NULL),
(279, 'pendidikan', 'S1', 9, NULL, NULL, NULL),
(280, 'pendidikan', 'S1', 10, NULL, NULL, NULL),
(281, 'pendidikan', 'S1', 11, NULL, NULL, NULL),
(282, 'pendidikan', 'S1', 12, NULL, NULL, NULL),
(283, 'pendidikan', 'S1', 13, NULL, NULL, NULL),
(284, 'pendidikan', 'S1', 14, NULL, NULL, NULL),
(285, 'pendidikan', 'S1', 15, NULL, NULL, NULL),
(286, 'pendidikan', 'S2', 1, NULL, NULL, NULL),
(287, 'pendidikan', 'S2', 2, NULL, NULL, NULL),
(288, 'pendidikan', 'S2', 3, NULL, NULL, NULL),
(289, 'pendidikan', 'S2', 4, NULL, NULL, NULL),
(290, 'pendidikan', 'S2', 5, NULL, NULL, NULL),
(291, 'pendidikan', 'S2', 6, NULL, NULL, NULL),
(292, 'pendidikan', 'S2', 7, NULL, NULL, NULL),
(293, 'pendidikan', 'S2', 8, NULL, NULL, NULL),
(294, 'pendidikan', 'S2', 9, NULL, NULL, NULL),
(295, 'pendidikan', 'S2', 10, NULL, NULL, NULL),
(296, 'pendidikan', 'S2', 11, NULL, NULL, NULL),
(297, 'pendidikan', 'S2', 12, NULL, NULL, NULL),
(298, 'pendidikan', 'S2', 13, NULL, NULL, NULL),
(299, 'pendidikan', 'S2', 14, NULL, NULL, NULL),
(300, 'pendidikan', 'S2', 15, NULL, NULL, NULL),
(301, 'pendidikan', 'S3', 1, NULL, NULL, NULL),
(302, 'pendidikan', 'S3', 2, NULL, NULL, NULL),
(303, 'pendidikan', 'S3', 3, NULL, NULL, NULL),
(304, 'pendidikan', 'S3', 4, NULL, NULL, NULL),
(305, 'pendidikan', 'S3', 5, NULL, NULL, NULL),
(306, 'pendidikan', 'S3', 6, NULL, NULL, NULL),
(307, 'pendidikan', 'S3', 7, NULL, NULL, NULL),
(308, 'pendidikan', 'S3', 8, NULL, NULL, NULL),
(309, 'pendidikan', 'S3', 9, NULL, NULL, NULL),
(310, 'pendidikan', 'S3', 10, NULL, NULL, NULL),
(311, 'pendidikan', 'S3', 11, NULL, NULL, NULL),
(312, 'pendidikan', 'S3', 12, NULL, NULL, NULL),
(313, 'pendidikan', 'S3', 13, NULL, NULL, NULL),
(314, 'pendidikan', 'S3', 14, NULL, NULL, NULL),
(315, 'pendidikan', 'S3', 15, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kependudukan_tl`
--

CREATE TABLE `kependudukan_tl` (
  `tl_id` int(11) NOT NULL,
  `tl_text` varchar(70) NOT NULL,
  `tl_key` varchar(100) DEFAULT NULL,
  `tl_top` varchar(100) DEFAULT NULL,
  `id_desa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `kependudukan_tl`
--

INSERT INTO `kependudukan_tl` (`tl_id`, `tl_text`, `tl_key`, `tl_top`, `id_desa`) VALUES
(1, 'Jenjang Pendidikan', 'pendidikan', NULL, 1),
(2, 'Jenjang Pendidikan', 'pendidikan', NULL, 2),
(3, 'Jenjang Pendidikan', 'pendidikan', NULL, 3),
(4, 'Jenjang Pendidikan', 'pendidikan', NULL, 4),
(5, 'Jenjang Pendidikan', 'pendidikan', NULL, 5),
(6, 'Jenjang Pendidikan', 'pendidikan', NULL, 6),
(7, 'Jenjang Pendidikan', 'pendidikan', NULL, 7),
(8, 'Jenjang Pendidikan', 'pendidikan', NULL, 8),
(9, 'Jenjang Pendidikan', 'pendidikan', NULL, 9),
(10, 'Jenjang Pendidikan', 'pendidikan', NULL, 10),
(11, 'Jenjang Pendidikan', 'pendidikan', NULL, 11),
(12, 'Jenjang Pendidikan', 'pendidikan', NULL, 12),
(13, 'Jenjang Pendidikan', 'pendidikan', NULL, 13),
(14, 'Jenjang Pendidikan', 'pendidikan', NULL, 14),
(15, 'Jenjang Pendidikan', 'pendidikan', NULL, 15),
(16, 'Tahun', 'penduduk', NULL, 1),
(17, 'Tahun', 'penduduk', NULL, 2),
(18, 'Tahun', 'penduduk', NULL, 3),
(19, 'Tahun', 'penduduk', NULL, 4),
(20, 'Tahun', 'penduduk', NULL, 5),
(21, 'Tahun', 'penduduk', NULL, 6),
(22, 'Tahun', 'penduduk', NULL, 7),
(23, 'Tahun', 'penduduk', NULL, 8),
(24, 'Tahun', 'penduduk', NULL, 9),
(25, 'Tahun', 'penduduk', NULL, 10),
(26, 'Tahun', 'penduduk', NULL, 11),
(27, 'Tahun', 'penduduk', NULL, 12),
(28, 'Tahun', 'penduduk', NULL, 13),
(29, 'Tahun', 'penduduk', NULL, 14),
(30, 'Tahun', 'penduduk', NULL, 15),
(31, 'Rentan Usia', 'umur', NULL, 1),
(32, 'Rentan Usia', 'umur', NULL, 2),
(33, 'Rentan Usia', 'umur', NULL, 3),
(34, 'Rentan Usia', 'umur', NULL, 4),
(35, 'Rentan Usia', 'umur', NULL, 5),
(36, 'Rentan Usia', 'umur', NULL, 6),
(37, 'Rentan Usia', 'umur', NULL, 7),
(38, 'Rentan Usia', 'umur', NULL, 8),
(39, 'Rentan Usia', 'umur', NULL, 9),
(40, 'Rentan Usia', 'umur', NULL, 10),
(41, 'Rentan Usia', 'umur', NULL, 11),
(42, 'Rentan Usia', 'umur', NULL, 12),
(43, 'Rentan Usia', 'umur', NULL, 13),
(44, 'Rentan Usia', 'umur', NULL, 14),
(45, 'Rentan Usia', 'umur', NULL, 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kependudukan_vl`
--

CREATE TABLE `kependudukan_vl` (
  `id` int(11) NOT NULL,
  `tl_id` int(11) NOT NULL,
  `kl_id` int(11) NOT NULL,
  `laki` int(11) DEFAULT NULL,
  `perempuan` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `menuid` int(11) NOT NULL,
  `menuparentid` int(11) NOT NULL,
  `menuname` varchar(30) NOT NULL,
  `menuicon` varchar(30) NOT NULL,
  `menulink` varchar(30) NOT NULL,
  `menucode` varchar(30) NOT NULL,
  `menuavail` varchar(20) NOT NULL,
  `menusort` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`menuid`, `menuparentid`, `menuname`, `menuicon`, `menulink`, `menucode`, `menuavail`, `menusort`) VALUES
(1, 0, 'Dashboard', 'fa-tachometer-alt', 'admin/main', 'main', '', 0),
(2, 0, 'Kegiata', 'fa-file', 'admin/artikel', 'artikel', '', 1),
(3, 0, 'Jabatan', 'fa-medal', 'admin/jabatan', 'jabatan', '', 4),
(4, 0, 'Pegawai', 'fa-user-tie', 'admin/pegawai', 'pegawai', '', 3),
(5, 0, 'Struktur Organisasi', 'fa-sitemap', 'admin/organisasi', 'organisasi', '', 5),
(6, 0, 'Kependudukan', 'fa-users', 'admin/penduduk', 'penduduk', '', 6),
(7, 0, 'Potensi', 'fa-chart-line', 'admin/potensi', 'potensi', '', 7),
(8, 0, 'Infrastruktur', 'fa-building', 'admin/infrastruktur', 'infrastruktur', '', 8),
(9, 0, 'Setting', 'fa-cogs', '', '', '', 9),
(10, 9, 'Pemerintah', 'fa-angle-double-right', 'admin/desa', 'desa', '', 10),
(11, 9, 'User', 'fa-angle-double-right', 'admin/users', 'users', '', 13),
(13, 9, 'Image Slider', '', 'admin/slider', 'image_slider', '', 11),
(14, 0, 'Info Pelayanan', 'fa-bullhorn', 'admin/pelayanan', 'pelayanan', '', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `organisasi`
--

CREATE TABLE `organisasi` (
  `id` int(11) NOT NULL,
  `id_parent` int(11) DEFAULT NULL,
  `id_j` int(11) DEFAULT NULL,
  `id_p` int(11) DEFAULT NULL,
  `id_desa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `organisasi`
--

INSERT INTO `organisasi` (`id`, `id_parent`, `id_j`, `id_p`, `id_desa`) VALUES
(1, 0, 2, 1, 15),
(2, 1, 4, 5, 15),
(3, 2, 6, 4, 15),
(5, 1, 5, 6, 15),
(9, 1, 7, 3, 15),
(11, 0, 3, 8, 1),
(12, 11, 13, 7, 1),
(13, 12, 14, 9, 1),
(14, 0, 16, 6, 5),
(15, 14, 17, 10, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('Laki','Perempuan') NOT NULL,
  `agama` varchar(25) DEFAULT NULL,
  `pangkat_golongan` varchar(50) DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `telepon` varchar(25) DEFAULT NULL,
  `urutan` tinyint(4) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `published` enum('yes','no') NOT NULL DEFAULT 'yes',
  `instagram` varchar(255) DEFAULT NULL,
  `id_desa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `nip`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `pangkat_golongan`, `jabatan`, `telepon`, `urutan`, `image`, `facebook`, `email`, `published`, `instagram`, `id_desa`) VALUES
(1, 'Muhamad Nasir Rumata, S.Sos', '123456789', 'Ambon', '1978-06-14', 'Laki', 'Islam', 'III/a', 'Camat', '-', 1, 'Camat.jpg', '-', 'nasir@yahoo.co.id', 'yes', '-', 15),
(2, 'test aja', '123555333', '', '0000-00-00', 'Laki', '', '', '', '', 0, NULL, '', '', 'yes', '', 15),
(3, 'pegawai 8', '1233', '', '0000-00-00', 'Perempuan', '', '', '', '', 0, '', '', '', 'yes', '', 15),
(4, 'Pegawai 2', '1116667', '', '1979-06-04', 'Laki', '', '', 'KASI Kesos', '', 0, NULL, '', '', 'yes', '', 15),
(5, 'pegawai 1', '8816667', 'ambon', '1983-06-05', 'Laki', 'Nasrani', 'IV/c', 'Sekmat', '', NULL, NULL, NULL, '', 'yes', NULL, 15),
(6, 'M Juffry, S.Sos', '0', 'Ambon', '1976-07-12', 'Laki', 'Katolik', '', 'Lurah', '', 0, 'M-Juffry-SSos.JPG', NULL, '', 'yes', NULL, 5),
(7, 'Abdul Musafri', '0', 'Ambon', '1987-07-02', 'Laki', 'Islam', 'II/a', 'Sekdes', '086788898808', 0, 'default.jpg', NULL, 'abdul_caem@mail.com', 'yes', NULL, 1),
(8, 'Nicolai Zytsev', '0', 'Ambon', '1989-02-08', 'Laki', 'Kristiani', '-', 'Lurah', '0811121201010', 0, 'default.jpg', NULL, 'Zytsev_vasili@mail.com', 'yes', NULL, 1),
(9, 'Dino francoabel', '0', 'Ambon', '1978-02-07', 'Laki', 'Kristiani', '', 'Kasi Kesos', '0818888697777', 0, 'Dino-francoabel.jpg', NULL, 'fanco_abell@mail.com', 'yes', NULL, 1),
(10, 'M Nasri', '0', 'Ambon', '1977-12-03', 'Laki', 'Islam', '-', 'Sekdes', '086788899908', 0, 'M-Nasri.jpg', NULL, 'm_nasri@mail.com', 'yes', NULL, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelayanan`
--

CREATE TABLE `pelayanan` (
  `id` int(11) NOT NULL,
  `id_pemerintah` int(11) NOT NULL,
  `jenis_pelayanan` enum('perizinan','non_perizinan') DEFAULT NULL,
  `deskripsi` text,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelayanan`
--

INSERT INTO `pelayanan` (`id`, `id_pemerintah`, `jenis_pelayanan`, `deskripsi`, `title`) VALUES
(1, 15, 'perizinan', '<h4 class="check-title">Persyaratan Pelayanan :</h4>\r\n<ol>\r\n<li>Surat Keterangan Tanah dan Peta Situasi Tanah Rangkap 3</li>\r\n<li>Gambar Konstruksi Bangunan Rangkap 3</li>\r\n<li>Kartu Tanda Penduduk ( KTP ) rangkap 3</li>\r\n<li>Lunas PBB</li>\r\n<li>Perhitungan Struktur Konstruksi Untuk Bangunan Bertingkat</li>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<h4 class="check-title">Jangka Waktu Penyelesaian :&nbsp;<strong>20 (dua puluh) menit</strong></h4>\r\n<p>&nbsp;</p>\r\n<h4 class="check-title">Keterangan :&nbsp;<strong>JIKA PERSYARATAN LENGKAP</strong></h4>\r\n<p>&nbsp;</p>\r\n<h4 class="check-title">Biaya / Tarif :&nbsp;<strong>TIDAK ADA BIAYA / GRATIS</strong></h4>', 'Persyaratan Permohonan IMB'),
(2, 15, 'non_perizinan', '<h4 class="check-title">Persyaratan Pelayanan :</h4>\r\n<ol>\r\n<li>Formulir Pendafataran KK (F5 01 ) yangdiketahui oleh Lurah</li>\r\n<li>Formulir Biodata ( F5 02 ) Anggota Keluarga yang diketahui oleh Lurah</li>\r\n<li>Pengantar dari RT/RW dan Kelurahan</li>\r\n<li>Photo Copy Surat Nikah</li>\r\n<li>Photo Copy Akta Kelahiran</li>\r\n<li>Photo Copy Ijazah Pendidikan Terakhir</li>\r\n<li>Surat Pindah dari Daerah Asal (Bagi Pendatang )</li>\r\n<li>Mengisi Formulir F1.01</li>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<h4 class="check-title">Jangka Waktu Penyelesaian :&nbsp;<strong>10 (sepuluh) menit</strong></h4>\r\n<p>&nbsp;</p>\r\n<h4 class="check-title">Keterangan :&nbsp;<strong>JIKA PERSYARATAN LENGKAP</strong></h4>\r\n<p>&nbsp;</p>\r\n<h4 class="check-title">Biaya / Tarif :&nbsp;<strong>TIDAK ADA BIAYA / GRATIS</strong></h4>', 'Persyaratan Membuat Kartu Keluarga (KK)'),
(3, 15, 'non_perizinan', '<h4 class="check-title">Persyaratan Pelayanan :</h4>\r\n<ol>\r\n<li>Formulir Permohonan Membuat Kartu Tanda Penduduk (KTP)</li>\r\n<li>Pengantar Dari RT/RW, Desa/Kelurahan</li>\r\n<li>KTP lama (ASLI) Untuk Perpanjang KTP</li>\r\n<li>Photo Copy KK</li>\r\n<li>Photo Copy Akta Kelahiran</li>\r\n<li>Photo Copy Ijazah Pendidikan Telakhir</li>\r\n<li>Surat Pindah dari Daerah Asal (BAGI PENDATANG)</li>\r\n<li>Surat Keterangan Hilang dari Kepolisian (JIKA KARTU KTP HILANG)</li>\r\n<li>Mengisi Formulir F1.01</li>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<h4 class="check-title">Jangka Waktu Penyelesaian :&nbsp;<strong>10 (sepuluh) menit</strong></h4>\r\n<p>&nbsp;</p>\r\n<h4 class="check-title">Keterangan :&nbsp;<strong>JIKA PERSYARATAN LENGKAP</strong></h4>\r\n<p>&nbsp;</p>\r\n<h4 class="check-title">Biaya / Tarif :&nbsp;<strong>TIDAK ADA BIAYA / GRATIS</strong></h4>', 'Persyaratan Perekaman KTP Elektronik (e-KTP)'),
(4, 15, 'perizinan', '<h4 class="check-title">Persyaratan Pelayanan :</h4>\r\n<ol>\r\n<li>Surat Permohonan</li>\r\n<li>Kartu Tanda Penduduk</li>\r\n<li>Photo ukuran 3 X 4 Cm 2 ( Dua ) Buah</li>\r\n<li>IPPT IMB</li>\r\n<li>Akte Pendiri Perusahaan</li>\r\n<li>Lunas PBB</li>\r\n<li>Keterangan Tanah Sertifikat/ Kikitir/ Akte Hibah/ Akte Jual Beli</li>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<h4 class="check-title">Jangka Waktu Penyelesaian :&nbsp;<strong>15 (lima belas) menit</strong></h4>\r\n<p>&nbsp;</p>\r\n<h4 class="check-title">Keterangan :&nbsp;<strong>JIKA PERSYARATAN LENGKAP</strong></h4>\r\n<p>&nbsp;</p>\r\n<h4 class="check-title">Biaya / Tarif :&nbsp;<strong>TIDAK ADA BIAYA / GRATIS</strong></h4>', 'Persyaratan Permohonan SITU'),
(6, 5, 'perizinan', '<h4 class="check-title">Persyaratan Pelayanan :</h4>\r\n<ol>\r\n<li>Surat Keterangan Tanah dan Peta Situasi Tanah Rangkap 3</li>\r\n<li>Gambar Konstruksi Bangunan Rangkap 3</li>\r\n<li>Kartu Tanda Penduduk ( KTP ) rangkap 3</li>\r\n<li>Lunas PBB</li>\r\n<li>Perhitungan Struktur Konstruksi Untuk Bangunan Bertingkat</li>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<h4 class="check-title">Jangka Waktu Penyelesaian :&nbsp;<strong>20 (dua puluh) menit</strong></h4>\r\n<h4 class="check-title">Keterangan :&nbsp;<strong>JIKA PERSYARATAN LENGKAP</strong></h4>\r\n<h4 class="check-title">Biaya / Tarif :&nbsp;<strong>TIDAK ADA BIAYA / GRATIS</strong></h4>', 'Persyaratan Permohonan IMB'),
(7, 5, 'non_perizinan', '<h4 class="check-title">Persyaratan Pelayanan :</h4>\r\n<ol>\r\n<li>Formulir Pendafataran KK (F5 01 ) yangdiketahui oleh Lurah</li>\r\n<li>Formulir Biodata ( F5 02 ) Anggota Keluarga yang diketahui oleh Lurah</li>\r\n<li>Pengantar dari RT/RW dan Kelurahan</li>\r\n<li>Photo Copy Surat Nikah</li>\r\n<li>Photo Copy Akta Kelahiran</li>\r\n<li>Photo Copy Ijazah Pendidikan Terakhir</li>\r\n<li>Surat Pindah dari Daerah Asal (Bagi Pendatang )</li>\r\n<li>Mengisi Formulir F1.01</li>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<h4 class="check-title">Jangka Waktu Penyelesaian :&nbsp;<strong>10 (sepuluh) menit</strong></h4>\r\n<h4 class="check-title">Keterangan :&nbsp;<strong>JIKA PERSYARATAN LENGKAP</strong></h4>\r\n<h4 class="check-title">Biaya / Tarif :&nbsp;<strong>TIDAK ADA BIAYA / GRATIS</strong></h4>', 'Persyaratan Membuat Kartu Keluarga (KK)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `permission`
--

CREATE TABLE `permission` (
  `id_permiss` int(11) NOT NULL,
  `id_resource` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `permission`
--

INSERT INTO `permission` (`id_permiss`, `id_resource`, `id_user`) VALUES
(2, 1, 1),
(4, 2, 1),
(6, 1, 2),
(8, 6, 1),
(9, 7, 1),
(10, 8, 1),
(12, 2, 2),
(21, 9, 2),
(22, 10, 2),
(23, 11, 2),
(24, 12, 2),
(25, 3, 1),
(26, 4, 1),
(27, 5, 1),
(28, 27, 1),
(29, 28, 1),
(30, 29, 1),
(31, 30, 1),
(32, 19, 1),
(33, 20, 1),
(34, 21, 1),
(35, 22, 1),
(36, 23, 1),
(37, 24, 1),
(38, 25, 1),
(39, 26, 1),
(40, 31, 1),
(41, 32, 1),
(42, 33, 1),
(43, 34, 1),
(44, 35, 1),
(45, 36, 1),
(46, 37, 1),
(47, 38, 1),
(48, 39, 1),
(49, 40, 1),
(50, 41, 1),
(51, 42, 1),
(52, 43, 1),
(53, 44, 1),
(54, 13, 1),
(55, 14, 1),
(56, 15, 1),
(57, 16, 1),
(58, 17, 1),
(59, 18, 1),
(60, 9, 1),
(61, 10, 1),
(62, 11, 1),
(63, 12, 1),
(64, 3, 2),
(65, 4, 2),
(66, 5, 2),
(67, 32, 2),
(68, 33, 2),
(69, 34, 2),
(70, 35, 2),
(71, 36, 2),
(72, 37, 2),
(73, 38, 2),
(74, 31, 2),
(75, 27, 2),
(76, 28, 2),
(77, 29, 2),
(78, 30, 2),
(79, 19, 2),
(80, 20, 2),
(81, 21, 2),
(82, 22, 2),
(83, 23, 2),
(84, 24, 2),
(85, 25, 2),
(86, 26, 2),
(87, 39, 2),
(88, 40, 2),
(89, 41, 2),
(90, 42, 2),
(91, 43, 2),
(92, 44, 2),
(93, 13, 2),
(94, 14, 2),
(95, 15, 2),
(96, 16, 2),
(97, 17, 2),
(98, 18, 2),
(99, 1, 3),
(100, 2, 3),
(101, 3, 3),
(102, 4, 3),
(103, 5, 3),
(104, 27, 3),
(105, 28, 3),
(106, 29, 3),
(107, 30, 3),
(108, 19, 3),
(109, 20, 3),
(110, 21, 3),
(111, 22, 3),
(112, 23, 3),
(113, 24, 3),
(114, 25, 3),
(115, 26, 3),
(116, 31, 3),
(117, 32, 3),
(118, 33, 3),
(119, 34, 3),
(120, 35, 3),
(121, 36, 3),
(122, 37, 3),
(123, 38, 3),
(124, 39, 3),
(125, 40, 3),
(126, 41, 3),
(127, 42, 3),
(128, 43, 3),
(129, 44, 3),
(130, 13, 3),
(131, 14, 3),
(132, 15, 3),
(133, 16, 3),
(134, 17, 3),
(135, 18, 3),
(136, 9, 3),
(137, 11, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `desa_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `published` enum('yes','no') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `user_id`, `desa_id`, `title`, `slug`, `body`, `post_image`, `created_at`, `published`) VALUES
(1, 1, 1, 6, 'judul kesatu', 'judul-kesatu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat aut accusantium atque architecto beatae necessitatibus, vero culpa tenetur rerum possimus odit quis minima, deserunt nihil itaque odio cupiditate sequi at.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Placeat aut accusantium atque architecto beatae necessitatibus, vero culpa tenetur rerum possimus odit quis minima, deserunt nihil itaque odio cupiditate sequi at....', 'festival-teluk-ambon.jpg', '2019-06-11 03:07:17', 'yes'),
(2, 1, 1, 6, 'judul kedua', 'judul-kedua', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat aut accusantium atque architecto beatae necessitatibus, vero culpa tenetur rerum possimus odit quis minima, deserunt nihil itaque odio cupiditate sequi at.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Placeat aut accusantium atque architecto beatae necessitatibus, vero culpa tenetur rerum possimus odit quis minima, deserunt nihil itaque odio cupiditate sequi at....', 'ambon-potensi-perikanan.jpg', '2019-06-11 03:06:39', 'yes'),
(3, 1, 1, 6, 'Judul Ketiga', 'judul-ketiga', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat aut accusantium atque architecto beatae necessitatibus, vero culpa tenetur rerum possimus odit quis minima, deserunt nihil itaque odio cupiditate sequi at. Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat aut accusantium atque architecto beatae necessitatibus, vero culpa tenetur rerum possimus odit quis minima, deserunt nihil itaque odio cupiditate sequi at.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Placeat aut accusantium atque architecto beatae necessitatibus, vero culpa tenetur rerum possimus odit quis minima, deserunt nihil itaque odio cupiditate sequi at. Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nPlaceat aut accusantium atque architecto beatae necessitatibus, vero culpa tenetur rerum possimus odit quis minima, deserunt nihil itaque odio cupiditate sequi at.... ', 'ambon-potensi-perikanan.jpg', '2019-06-11 06:33:47', 'yes'),
(5, 1, 1, 6, 'Judul POtensi Dua', 'judul-potensi-dua', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim necessitatibus, ipsam nihil quam qui molestias, unde quo provident voluptatum dicta magnam! Dicta quae iste quam earum doloribus exercitationem eveniet asperiores.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Enim necessitatibus, ipsam nihil quam qui molestias, unde quo provident voluptatum dicta magnam! Dicta quae iste quam earum doloribus exercitationem eveniet asperiores...', 'festival-teluk-ambon.jpg', '2019-06-11 08:55:38', 'yes'),
(7, 1, 1, 4, 'coba upload foto lagi', 'coba-upload-foto-lagi', '<p>udah pake <em><strong>editor</strong></em> ini, ngggak tau hasinya. gima hasilnya ocab test. <span style="color: #000000;">Lorem ipsum dolor sit amet consectetur adipisicing elit</span><span style="color: #d4d4d4;">.</span><span style="color: #d4d4d4;"> Quo labore obcaecati, quas aliquid culpa dolore similique hic in</span><span style="color: #d4d4d4;">.</span><span style="color: #d4d4d4;"> Voluptatem sint animi fugit, tempora a ullam mollitia eveniet unde temporibus accusamus?</span></p>', 'coba-upload-foto.jpg', '2019-06-11 23:50:02', 'yes'),
(8, 1, 1, 3, 'Judul tenteng Budaya', 'Judul-tenteng-Budaya', 'ini judul tentenag bduaya', 'noimage.jpg', '2019-06-17 15:57:55', 'no'),
(9, 1, 1, 4, 'Test artikel untuk potensi', 'Test-artikel-untuk-potensi', 'ini test posting artikel untuk kategori potensi...', 'noimage.jpg', '2019-06-19 02:06:32', 'yes'),
(10, 1, 1, 5, 'ini judulnya', 'ini-judulnya', 'ini isinya', 'noimage.jpg', '2019-06-19 23:57:28', 'yes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `potensi_v`
--

CREATE TABLE `potensi_v` (
  `id` int(11) NOT NULL,
  `id_jp` int(11) NOT NULL,
  `id_desa` int(11) NOT NULL,
  `nama_p` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `potensi_v`
--

INSERT INTO `potensi_v` (`id`, `id_jp`, `id_desa`, `nama_p`) VALUES
(1, 1, 1, 'Pantai batu merah'),
(2, 1, 1, 'Tamana kota'),
(3, 1, 2, 'Pantai galala'),
(4, 2, 2, 'Lobster'),
(5, 2, 1, 'Budi daya ikan Mujahir'),
(6, 3, 1, 'Budi daya kacang mete');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prof_kecamatan`
--

CREATE TABLE `prof_kecamatan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `daskum` text,
  `visi` varchar(255) DEFAULT NULL,
  `misi` text,
  `deskripsi` text,
  `alamat_kantor` varchar(100) DEFAULT NULL,
  `logo` varchar(50) DEFAULT NULL,
  `gmap` varchar(200) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `telp` varchar(15) DEFAULT NULL,
  `telp2` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `prof_kecamatan`
--

INSERT INTO `prof_kecamatan` (`id`, `nama`, `daskum`, `visi`, `misi`, `deskripsi`, `alamat_kantor`, `logo`, `gmap`, `email`, `telp`, `telp2`) VALUES
(1, 'Sirimau', 'Sesuai dengan Peraturan Daerah Nomor 11 Tahun 2008 tentang Pembentukan Organisasi dan Tata Kerja Kecamatan Kota Ambon.', 'TERWUJUDNYA MASYARAKAT SEJAHTERA DAN MANDIRI MELALUI PEMBERDAYAAN DENGAN MENGANDALKAN POTENSI SUMBER DAYA ALAM LOKAL', '\r\n    Meningkatkan kemampuan sumber daya aparatur pemerintah Kecamatan sebagai motivator pembangunan dan pelayanan masyarakat.\r\n    Meningkatkan serta mendorong peran serta masyarakat untuk memanfaatkan potensi sumber daya yang lebih efektif dan efesien.\r\n    Meningkatkan pelayanan prima kepada masyarakat.\r\n    Mengfungsikan dan meningkatkan ketersediaan prasarana dan sarana serta fasilitas untuk menunjang tugas-tugas pelayanan publik.\r\n    Memberdayakan Lembaga Pemerintah Negeri/Desa dan Lembaga-Lembaga Kemasyarakatan.\r\n    Memfungsikan dan meningkatkan peranan pranata sosial masyarakat sebagai kekuatan dalam menggerakkan masyarakat.\r\n    Memberdayakan masyarakat serta mengoptimalkan peranan perempuan dan generasi muda.\r\n    Mendorong sektor-sektor produksi untuk meningkatkan perekonomian masyarakat.\r\n    Mendorong peningkatan kualitas hidup masyarakat.\r\n    Mendorong penciptaan peluang sektor swasta untuk mengembangkan Kec. Teluk Ambon dalam upaya pemulihan ekonomi masyarakat.\r\n', NULL, 'Jl. Rijali\nKota Ambon', 'logo-ambon.png', NULL, 'kectelukambon@ambon.go.id', ' (0911) 254836', '0816972265 ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `resource`
--

CREATE TABLE `resource` (
  `id_resource` int(11) NOT NULL,
  `nama_resource` varchar(255) NOT NULL,
  `link_resource` varchar(255) DEFAULT NULL,
  `id_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `resource`
--

INSERT INTO `resource` (`id_resource`, `nama_resource`, `link_resource`, `id_menu`) VALUES
(1, 'Dashboard', 'admin/main', 1),
(2, 'Index', 'admin/artikel', 2),
(3, 'Tambah', 'admin/artikel/add', 2),
(4, 'Edit', 'admin/artikel/edit', 2),
(5, 'Hapus', 'admin/artikel/delete', 2),
(6, 'Index', 'admin/users', 11),
(7, 'Tambah', 'admin/users/add', 11),
(8, 'Hapus', 'admin/users/delete', 11),
(9, 'Index', 'admin/desa', 10),
(10, 'Tambah', 'admin/desa/add', 10),
(11, 'Edit', 'admin/desa/edit', 10),
(12, 'Hapus', 'admin/desa/update', 10),
(13, 'Index', 'admin/infrastruktur', 8),
(14, 'Detile', 'admin/infrastruktur/detile', 8),
(15, 'Tambah Kategori', 'admin/infrastruktur/add_jenis', 8),
(16, 'Tambah', 'admin/infrastruktur/add_infra', 8),
(17, 'Edit', 'admin/infrastruktur/edit_infra', 8),
(18, 'Delete', 'admin/infrastruktur/delete_infra', 8),
(19, 'Index', 'admin/jabatan', 3),
(20, 'Tambah', 'admin/jabatan/add', 3),
(21, 'Edit', 'admin/jabatan/edit', 3),
(22, 'Delete', 'admin/jabatan/delete', 3),
(23, 'Index', 'admin/organisasi', 5),
(24, 'Tambah', 'admin/organisasi/add_item', 5),
(25, 'Edit', 'admin/organisasi/edit_item', 5),
(26, 'Delete', 'admin/organisasi/delete_item', 5),
(27, 'Index', 'admin/pegawai', 4),
(28, 'Tambah', 'admin/pegawai/add', 4),
(29, 'Edit', 'admin/pegawai/edit', 4),
(30, 'Delete', 'admin/pegawai/delete', 4),
(31, 'Index', 'admin/penduduk', 6),
(32, 'Detile', 'admin/penduduk/detile', 6),
(33, 'Tambah kategori', 'admin/penduduk/add_kateg', 6),
(34, 'Edit kategori', 'admin/penduduk/update_kateg', 6),
(35, 'Delete kategori', 'admin/penduduk/delete_kateg', 6),
(36, 'Tambah jenis kategori', 'admin/penduduk/add_jkateg', 6),
(37, 'Edit jenis kategori', 'admin/penduduk/edit_jkateg', 6),
(38, 'Edit jumlah', 'admin/penduduk/edit_val', 6),
(39, 'Index', 'admin/potensi', 7),
(40, 'Detile', 'admin/potensi/detile', 7),
(41, 'Tambah kategori', 'admin/potensi/add_jenis', 7),
(42, 'Tambah', 'admin/potensi/add_potensi', 7),
(43, 'Edit', 'admin/potensi/edit_potensi', 7),
(44, 'Delete', 'admin/potensi/delete_potensi', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(40) NOT NULL,
  `name` varchar(100) NOT NULL,
  `active` enum('1','2') NOT NULL COMMENT '1: yes, 2: no',
  `level` enum('1','2') NOT NULL COMMENT '1: admin, 2: member',
  `desa_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `name`, `active`, `level`, `desa_id`) VALUES
(1, 'admin', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Administrator', '1', '1', NULL),
(2, 'admin.galala', '8cb2237d0679ca88db6464eac60da96345513964', 'Admin Negeri Galala', '1', '2', 2),
(3, 'ahusen', '8cb2237d0679ca88db6464eac60da96345513964', 'Admin Ahusen', '1', '2', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`desa_id`) USING BTREE;

--
-- Indexes for table `galleri`
--
ALTER TABLE `galleri`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `infrastruktur_v`
--
ALTER TABLE `infrastruktur_v`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `id_desa` (`id_desa`) USING BTREE,
  ADD KEY `id_jenis` (`id_jenis_infra`) USING BTREE;

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `desa_id` (`id_desa`) USING BTREE;

--
-- Indexes for table `jenis_infra`
--
ALTER TABLE `jenis_infra`
  ADD PRIMARY KEY (`id_infra`) USING BTREE,
  ADD KEY `id_desa` (`id_desa`) USING BTREE;

--
-- Indexes for table `jenis_potensi`
--
ALTER TABLE `jenis_potensi`
  ADD PRIMARY KEY (`id_jp`) USING BTREE;

--
-- Indexes for table `kependudukan_kl`
--
ALTER TABLE `kependudukan_kl`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `id_desa` (`id_desa`) USING BTREE,
  ADD KEY `tl_key` (`tl_key`) USING BTREE;

--
-- Indexes for table `kependudukan_tl`
--
ALTER TABLE `kependudukan_tl`
  ADD PRIMARY KEY (`tl_id`) USING BTREE,
  ADD KEY `id_desa` (`id_desa`) USING BTREE,
  ADD KEY `tl_key` (`tl_key`) USING BTREE;

--
-- Indexes for table `kependudukan_vl`
--
ALTER TABLE `kependudukan_vl`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `tl_id` (`tl_id`) USING BTREE,
  ADD KEY `kl_id` (`kl_id`) USING BTREE;

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menuid`),
  ADD UNIQUE KEY `idmenu` (`menuid`) USING BTREE;

--
-- Indexes for table `organisasi`
--
ALTER TABLE `organisasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_j` (`id_j`,`id_p`,`id_desa`) USING BTREE,
  ADD KEY `id_p` (`id_p`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `id_desa` (`id_desa`) USING BTREE;

--
-- Indexes for table `pelayanan`
--
ALTER TABLE `pelayanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`) USING BTREE,
  ADD KEY `id_desa` (`id_pemerintah`) USING BTREE;

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`id_permiss`),
  ADD KEY `id_resorce` (`id_resource`) USING BTREE,
  ADD KEY `id_user` (`id_user`) USING BTREE;

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `potensi_v`
--
ALTER TABLE `potensi_v`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `id_jp` (`id_jp`) USING BTREE,
  ADD KEY `id_desa` (`id_desa`) USING BTREE;

--
-- Indexes for table `prof_kecamatan`
--
ALTER TABLE `prof_kecamatan`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `resource`
--
ALTER TABLE `resource`
  ADD PRIMARY KEY (`id_resource`),
  ADD KEY `id_res` (`id_resource`) USING BTREE,
  ADD KEY `id_menu` (`id_menu`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `desa`
--
ALTER TABLE `desa`
  MODIFY `desa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `galleri`
--
ALTER TABLE `galleri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `infrastruktur_v`
--
ALTER TABLE `infrastruktur_v`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `jenis_infra`
--
ALTER TABLE `jenis_infra`
  MODIFY `id_infra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `jenis_potensi`
--
ALTER TABLE `jenis_potensi`
  MODIFY `id_jp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kependudukan_kl`
--
ALTER TABLE `kependudukan_kl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=316;
--
-- AUTO_INCREMENT for table `kependudukan_tl`
--
ALTER TABLE `kependudukan_tl`
  MODIFY `tl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `kependudukan_vl`
--
ALTER TABLE `kependudukan_vl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `organisasi`
--
ALTER TABLE `organisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pelayanan`
--
ALTER TABLE `pelayanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `id_permiss` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `potensi_v`
--
ALTER TABLE `potensi_v`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `resource`
--
ALTER TABLE `resource`
  MODIFY `id_resource` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD CONSTRAINT `id_desa` FOREIGN KEY (`id_desa`) REFERENCES `desa` (`desa_id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kependudukan_kl`
--
ALTER TABLE `kependudukan_kl`
  ADD CONSTRAINT `kependudukan_kl_desa_id` FOREIGN KEY (`id_desa`) REFERENCES `desa` (`desa_id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kependudukan_tl`
--
ALTER TABLE `kependudukan_tl`
  ADD CONSTRAINT `kependudukan_tl_desa_id` FOREIGN KEY (`id_desa`) REFERENCES `desa` (`desa_id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kependudukan_vl`
--
ALTER TABLE `kependudukan_vl`
  ADD CONSTRAINT `kependudukan_vl_kl_id` FOREIGN KEY (`kl_id`) REFERENCES `kependudukan_kl` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `kependudukan_vl_tl_id` FOREIGN KEY (`tl_id`) REFERENCES `kependudukan_tl` (`tl_id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `organisasi`
--
ALTER TABLE `organisasi`
  ADD CONSTRAINT `id_j` FOREIGN KEY (`id_j`) REFERENCES `jabatan` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `id_p` FOREIGN KEY (`id_p`) REFERENCES `pegawai` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pelayanan`
--
ALTER TABLE `pelayanan`
  ADD CONSTRAINT `id_pemerintahan` FOREIGN KEY (`id_pemerintah`) REFERENCES `desa` (`desa_id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `permission`
--
ALTER TABLE `permission`
  ADD CONSTRAINT `id_resource` FOREIGN KEY (`id_resource`) REFERENCES `resource` (`id_resource`) ON DELETE CASCADE,
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `potensi_v`
--
ALTER TABLE `potensi_v`
  ADD CONSTRAINT `potensi_id_desa` FOREIGN KEY (`id_desa`) REFERENCES `desa` (`desa_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `potensi_id_jenis_potensi` FOREIGN KEY (`id_jp`) REFERENCES `jenis_potensi` (`id_jp`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
