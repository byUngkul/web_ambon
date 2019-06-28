-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27 Jun 2019 pada 09.08
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `name`, `email`, `body`, `created_at`) VALUES
(1, 10, 'namaku', 'emailku@mail.com', 'wah jadi tau....', '2019-06-27 06:33:03'),
(2, 2, 'komenter', 'komenter@mail.com', 'info tang bagus....\r\njadi tahu', '2019-06-27 06:53:25'),
(3, 3, 'namanya', 'emailnya@mail.com', 'ini bikin komentar... coba test komentar', '2019-06-27 07:05:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `desa`
--

CREATE TABLE `desa` (
  `desa_id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `profil` text NOT NULL,
  `jumlah_penduduk` int(11) NOT NULL,
  `jumlah_laki` int(11) NOT NULL,
  `jumlah_perempuan` int(11) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `desa`
--

INSERT INTO `desa` (`desa_id`, `nama`, `alamat`, `profil`, `jumlah_penduduk`, `jumlah_laki`, `jumlah_perempuan`, `url`) VALUES
(1, 'Negeri Batu Merah', 'Alamat', '<strong><em>Negeri Batu Merah</em></strong> adalah desa di kecamatan Sirimau, Kota Ambon, Maluku, Indonesia.', 0, 2300, 2200, 'http://negeri-batu-merah.ambon.go.id'),
(2, 'Negeri Galala', 'Alamat', '<strong><em>Negeri Galala</em></strong> adalah sebuah negeri di Kecamatan Sirimau, Kota Ambon, Maluku.', 0, 1500, 0, 'http://negeri-galala.ambon.go.id'),
(3, 'Negeri Hative Kecil', 'Alamat', '<strong><em>Negeri Hative Kecil </em></strong>adalah negeri di kecamatan Sirimau, Kota Ambon, Maluku, Indonesia.', 0, 0, 0, 'http://negeri-hative-kecil.ambon.go.id'),
(4, 'Negeri Soya', 'Alamat', '<strong><em>Negeri Soya</em></strong> adalah sebuah negeri yang terletak di Kecamatan Sirimau, Ambon, Maluku.', 0, 0, 0, 'http://negeri-soya.ambon.go.id'),
(5, 'Kelurahan Ahusen', 'Alamat', '<strong><em>Kelurahan Ahusen</em></strong> adalah desa di kecamatan Teluk Ambon, Kota Ambon, Maluku, Indonesia.', 0, 0, 0, 'http://kel-ahusen.ambon.go.id'),
(6, 'Kelurahan Amantelu', 'Alamat', '<strong><em>Kelurahan Amantelu </em></strong>adalah kelurahan yang terletak di kecamatan Sirimau, Ambon, Maluku.', 0, 0, 0, 'http://kel-amantelu.ambon.go.id'),
(7, 'Kelurahan Batu Gajah', 'Alamat', '<strong><em>Kelurahan Batu Gajah </em></strong>adalah sebuah kelurahan yang terletak Kecamatan Sirimau, Ambon, Maluku.', 0, 0, 0, 'http://kel-batu-gajah.ambon.go.id'),
(8, 'Kelurahan Batu Meja', 'Alamat', '<strong><em>Kelurahan Batu Meja </em></strong>adalah sebuah kelurahan yang terletak Kecamatan Sirimau, Ambon, Maluku.', 0, 0, 0, 'http://kel-batu-meja.ambon.go.id'),
(9, 'Kelurahan Honipopu', 'Alamat', '<strong><em>Kelurahan Honipopu </em></strong>adalah sebuah kelurahan yang terletak Kecamatan Sirimau, Ambon, Maluku.', 0, 0, 0, 'http://kel-honipopu.ambon.go.id'),
(10, 'Kelurahan Karang Panjang', 'Alamat', '<strong><em>Kelurahan Karang Panjang </em></strong>adalah sebuah kelurahan yang terletak Kecamatan Sirimau, Ambon, Maluku.', 0, 0, 0, 'http://kel-karang-panjang.ambon.go.id'),
(11, 'Kelurahan Pandan Kasturi', 'Alamat', '<strong><em>Kelurahan Pandan Kasturi </em></strong>adalah sebuah kelurahan yang terletak Kecamatan Sirimau, Ambon, Maluku.', 0, 0, 0, 'http://kel-pandan-kasturi.ambon.go.id'),
(12, 'Kelurahan Rijali', 'Alamat', '<strong><em>Kelurahan Rijali </em></strong>adalah sebuah kelurahan yang terletak Kecamatan Sirimau, Ambon, Maluku.', 0, 0, 0, 'http://kel-rijali.ambon.go.id'),
(13, 'Kelurahan Uritetu', 'Alamat', '<strong><em>Kelurahan Uritetu </em></strong>adalah sebuah kelurahan yang terletak Kecamatan Sirimau, Ambon, Maluku.', 0, 0, 0, 'http://kel-uritetu.ambon.go.id'),
(14, 'Kelurahan Waihoka', 'Alamat', '<strong><em>Kelurahan Waihoka </em></strong>adalah sebuah kelurahan yang terletak Kecamatan Sirimau, Ambon, Maluku.', 0, 0, 0, 'http://kel-waihoka.ambon.go.id');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galleri`
--

INSERT INTO `galleri` (`id`, `desa_id`, `nama`, `keterangan`, `image`, `thumb_image`, `date_added`) VALUES
(1, 2, 'pemandangan baru', 'pemandangan di ambon', 'pemandangan-baru.jpg', NULL, '2019-06-27 02:29:23');

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
  `instagram` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `nip`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `pangkat_golongan`, `jabatan`, `telepon`, `urutan`, `image`, `facebook`, `email`, `published`, `instagram`) VALUES
(1, 'Muhamad Nasir Rumata, S.Sos', '123456789', 'Ambon', '1978-06-14', 'Laki', 'Islam', 'III/a', 'Camat', '-', 1, 'camat.jpg', '-', 'nasir@yahoo.co.id', 'yes', '-'),
(2, 'test aja', '123555333', '', '0000-00-00', 'Laki', '', '', '', '', 0, 'noimage.jpg', '', '', 'yes', ''),
(3, 'pegawai 8', '1233', '', '0000-00-00', 'Perempuan', '', '', '', '', 0, 'noimage.jpg', '', '', 'yes', ''),
(4, 'Pegawai 2', '1116667', '', '1979-06-04', 'Laki', '', '', 'KASI Kesos', '', 0, NULL, '', '', 'yes', ''),
(5, 'pegawai 1', '8816667', '', '1983-06-05', 'Laki', 'Nasrani', 'IV/c', 'Sekmat', '', NULL, 'default.jpg', NULL, '', 'yes', NULL);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `user_id`, `desa_id`, `title`, `slug`, `body`, `post_image`, `created_at`, `published`) VALUES
(1, 1, 1, 6, 'judul kesatu', 'judul-kesatu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat aut accusantium atque architecto beatae necessitatibus, vero culpa tenetur rerum possimus odit quis minima, deserunt nihil itaque odio cupiditate sequi at.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Placeat aut accusantium atque architecto beatae necessitatibus, vero culpa tenetur rerum possimus odit quis minima, deserunt nihil itaque odio cupiditate sequi at....', 'festival-teluk-ambon.jpg', '2019-06-11 03:07:17', 'yes'),
(2, 1, 1, 6, 'judul kedua', 'judul-kedua', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat aut accusantium atque architecto beatae necessitatibus, vero culpa tenetur rerum possimus odit quis minima, deserunt nihil itaque odio cupiditate sequi at.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Placeat aut accusantium atque architecto beatae necessitatibus, vero culpa tenetur rerum possimus odit quis minima, deserunt nihil itaque odio cupiditate sequi at....', 'ambon-potensi-perikanan.jpg', '2019-06-11 03:06:39', 'yes'),
(3, 1, 1, 6, 'Judul Ketiga', 'judul-ketiga', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat aut accusantium atque architecto beatae necessitatibus, vero culpa tenetur rerum possimus odit quis minima, deserunt nihil itaque odio cupiditate sequi at. Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat aut accusantium atque architecto beatae necessitatibus, vero culpa tenetur rerum possimus odit quis minima, deserunt nihil itaque odio cupiditate sequi at.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Placeat aut accusantium atque architecto beatae necessitatibus, vero culpa tenetur rerum possimus odit quis minima, deserunt nihil itaque odio cupiditate sequi at. Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\n\r\nPlaceat aut accusantium atque architecto beatae necessitatibus, vero culpa tenetur rerum possimus odit quis minima, deserunt nihil itaque odio cupiditate sequi at.... ', 'ambon-potensi-perikanan.jpg', '2019-06-11 06:33:47', 'yes'),
(5, 2, 1, 6, 'Judul POtensi Dua', 'judul-potensi-dua', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim necessitatibus, ipsam nihil quam qui molestias, unde quo provident voluptatum dicta magnam! Dicta quae iste quam earum doloribus exercitationem eveniet asperiores.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Enim necessitatibus, ipsam nihil quam qui molestias, unde quo provident voluptatum dicta magnam! Dicta quae iste quam earum doloribus exercitationem eveniet asperiores...', 'festival-teluk-ambon.jpg', '2019-06-11 08:55:38', 'yes'),
(7, 2, 1, 4, 'coba upload foto lagi', 'coba-upload-foto-lagi', '<p>udah pake <em><strong>editor</strong></em> ini, ngggak tau hasinya. gima hasilnya ocab test. <span style="color: #000000;">Lorem ipsum dolor sit amet consectetur adipisicing elit</span><span style="color: #d4d4d4;">.</span><span style="color: #d4d4d4;"> Quo labore obcaecati, quas aliquid culpa dolore similique hic in</span><span style="color: #d4d4d4;">.</span><span style="color: #d4d4d4;"> Voluptatem sint animi fugit, tempora a ullam mollitia eveniet unde temporibus accusamus?</span></p>', 'coba-upload-foto.jpg', '2019-06-11 23:50:02', 'yes'),
(8, 3, 1, 3, 'Judul tenteng Budaya', 'Judul-tenteng-Budaya', 'ini judul tentenag bduaya', 'noimage.jpg', '2019-06-17 15:57:55', 'no'),
(9, 2, 1, 4, 'Test artikel untuk potensi', 'Test-artikel-untuk-potensi', 'ini test posting artikel untuk kategori potensi...', 'noimage.jpg', '2019-06-19 02:06:32', 'yes'),
(10, 2, 1, 5, 'ini judulnya', 'ini-judulnya', 'ini isinya', 'noimage.jpg', '2019-06-19 23:57:28', 'yes');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `prof_kecamatan`
--

INSERT INTO `prof_kecamatan` (`id`, `nama`, `daskum`, `visi`, `misi`, `deskripsi`, `alamat_kantor`, `logo`, `gmap`, `email`, `telp`, `telp2`) VALUES
(1, 'Sirimau', 'Sesuai dengan Peraturan Daerah Nomor 11 Tahun 2008 tentang Pembentukan Organisasi dan Tata Kerja Kecamatan Kota Ambon.', 'TERWUJUDNYA MASYARAKAT SEJAHTERA DAN MANDIRI MELALUI PEMBERDAYAAN DENGAN MENGANDALKAN POTENSI SUMBER DAYA ALAM LOKAL', '\r\n    Meningkatkan kemampuan sumber daya aparatur pemerintah Kecamatan sebagai motivator pembangunan dan pelayanan masyarakat.\r\n    Meningkatkan serta mendorong peran serta masyarakat untuk memanfaatkan potensi sumber daya yang lebih efektif dan efesien.\r\n    Meningkatkan pelayanan prima kepada masyarakat.\r\n    Mengfungsikan dan meningkatkan ketersediaan prasarana dan sarana serta fasilitas untuk menunjang tugas-tugas pelayanan publik.\r\n    Memberdayakan Lembaga Pemerintah Negeri/Desa dan Lembaga-Lembaga Kemasyarakatan.\r\n    Memfungsikan dan meningkatkan peranan pranata sosial masyarakat sebagai kekuatan dalam menggerakkan masyarakat.\r\n    Memberdayakan masyarakat serta mengoptimalkan peranan perempuan dan generasi muda.\r\n    Mendorong sektor-sektor produksi untuk meningkatkan perekonomian masyarakat.\r\n    Mendorong peningkatan kualitas hidup masyarakat.\r\n    Mendorong penciptaan peluang sektor swasta untuk mengembangkan Kec. Teluk Ambon dalam upaya pemulihan ekonomi masyarakat.\r\n', NULL, 'Jl. Rijali\nKota Ambon', 'logo-ambon.png', NULL, 'kectelukambon@ambon.go.id', ' (0911) 254836', '0816972265 ');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `name`, `active`, `level`, `desa_id`) VALUES
(1, 'admin', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Administrator', '1', '1', NULL),
(2, 'admin.galala', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Admin Negeri Galala', '1', '2', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`desa_id`);

--
-- Indexes for table `galleri`
--
ALTER TABLE `galleri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prof_kecamatan`
--
ALTER TABLE `prof_kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `desa`
--
ALTER TABLE `desa`
  MODIFY `desa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `galleri`
--
ALTER TABLE `galleri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
