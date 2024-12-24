-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Agu 2024 pada 05.42
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolahkita`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_sekolah`
--

CREATE TABLE `data_sekolah` (
  `id` int(10) NOT NULL,
  `key` varchar(32) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_sekolah`
--

INSERT INTO `data_sekolah` (`id`, `key`, `content`) VALUES
(1, 'nama_sekolah', 'SMA Cut Meutia Banda Aceh'),
(2, 'situs_web', 'https://smacutmeutia.id'),
(3, 'alamat', 'Jl. Tgk Chik Ditiro, Ateuk Pahlawan, Baiturrahman, Banda Aceh, Aceh'),
(4, 'nomor_telepon', '021123456781'),
(5, 'email', 'smacutmeutia@gmail.com'),
(6, 'nama_bank', 'BSI'),
(7, 'no_rekening', '3131321'),
(8, 'nama_pemilik', 'sma cut meutia'),
(9, 'deskripsi', '<p>&quot;Visi kami adalah menjadi pelopor dalam mendidik generasi muslimah yang beradab, berilmu, dan siap bersaing global dengan nilai-nilai Islami yang terinspirasi dari Al-Quran dan As-Sunnah.&quot;</p>\r\n'),
(10, 'school_logo', 'logo-sma.jpg'),
(11, 'instagram', '@sma_cutmeutia'),
(12, 'facebook', '@smacutmeutia'),
(13, 'twitter', ''),
(14, 'youtube', 'smacut_meutia'),
(15, 'gmaps', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.1062233737034!2d95.32331030944398!3d5.551267833676353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30403700173c2ecf%3A0xe25dc6c61b33b66e!2sSMA%20Cut%20Meutia%20Banda%20Aceh!5e0!3m2!1sid!2sid!4v1718879071630!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(16, 'kop_surat', 'kop_surat_cut_meutia.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_sekolah`
--

CREATE TABLE `profil_sekolah` (
  `id` int(11) NOT NULL,
  `file_foto` varchar(50) DEFAULT NULL,
  `isi_tulisan` text DEFAULT NULL,
  `tanggal` timestamp NULL DEFAULT NULL,
  `tempat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil_sekolah`
--

INSERT INTO `profil_sekolah` (`id`, `file_foto`, `isi_tulisan`, `tanggal`, `tempat`) VALUES
(1, 'Pas_photo_kecil.jpg', '<p><strong>Assalamu&rsquo;alaikum Warahmatullahi Wabarakatuh,</strong></p>\r\n\r\n<p>Puji syukur kita panjatkan ke hadirat Allah SWT, yang telah melimpahkan rahmat dan karunia-Nya sehingga kita semua dapat beraktivitas dan berinovasi dalam dunia pendidikan. Selamat datang di website resmi SMA Cut Meutia Banda Aceh.</p>\r\n\r\n<p>Di era digital ini, keberadaan website sekolah merupakan kebutuhan yang sangat penting. Website ini adalah salah satu upaya kami dalam memberikan informasi yang lengkap dan aktual mengenai segala kegiatan, program, serta prestasi yang telah dan akan diraih oleh SMA Cut Meutia Banda Aceh. Kami berharap, dengan adanya website ini, komunikasi antara sekolah, siswa, orang tua, dan masyarakat umum dapat terjalin lebih efektif dan efisien.</p>\r\n\r\n<p>SMA Cut Meutia Banda Aceh selalu berkomitmen untuk memberikan pendidikan yang berkualitas dan berintegritas. Kami percaya bahwa pendidikan adalah kunci utama untuk mencetak generasi yang unggul, berakhlak mulia, dan siap menghadapi tantangan global. Oleh karena itu, kami terus berupaya menciptakan lingkungan belajar yang kondusif, inovatif, dan inspiratif bagi seluruh siswa.</p>\r\n\r\n<p>Kami juga ingin mengucapkan terima kasih kepada seluruh warga sekolah, termasuk para guru, staf, siswa, dan orang tua, yang telah berkontribusi dan mendukung setiap program yang kami laksanakan. Tanpa dukungan dan kerjasama yang baik dari semua pihak, kami tidak akan dapat mencapai prestasi seperti yang kita rasakan saat ini.</p>\r\n\r\n<p>Akhir kata, semoga website ini dapat menjadi jendela informasi yang bermanfaat bagi kita semua. Mari bersama-sama kita wujudkan SMA Cut Meutia Banda Aceh menjadi sekolah yang tidak hanya unggul dalam akademik, tetapi juga dalam pembentukan karakter.</p>\r\n\r\n<p>Terima kasih atas perhatian dan kerjasamanya.</p>\r\n\r\n<p>Wassalamu&rsquo;alaikum Warahmatullahi Wabarakatuh.</p>\r\n\r\n<p><strong>Hormat kami,</strong></p>\r\n\r\n<p><strong>[Nama Kepala Sekolah]<br />\r\nKepala Sekolah SMA Cut Meutia Banda Aceh</strong></p>\r\n', '2024-06-23 11:10:59', NULL),
(2, 'Akreditas_Jurusan.jpeg', '<h3><strong>Visi</strong></h3>\r\n\r\n<p>Menjadi institusi pendidikan unggul yang berlandaskan nilai-nilai keilmuan, kebudayaan, dan keagamaan dalam membentuk generasi yang berprestasi, berkarakter, dan berwawasan global.</p>\r\n\r\n<h3><strong>Misi</strong></h3>\r\n\r\n<p><strong>a. Menyelenggarakan Pendidikan Berkualitas:</strong></p>\r\n\r\n<p>1. Menerapkan kurikulum yang inovatif dan berorientasi pada perkembangan ilmu pengetahuan dan teknologi.</p>\r\n\r\n<p>2. Menggunakan metode pembelajaran yang efektif dan menyenangkan untuk meningkatkan daya serap siswa.</p>\r\n\r\n<p><strong>b. Menyediakan fasilitas pendidikan yang memadai dan mendukung proses belajar mengajar&nbsp;Membangun Karakter dan Moral:</strong></p>\r\n\r\n<p>1. Menanamkan nilai-nilai moral, etika, dan keagamaan dalam setiap kegiatan sekolah.</p>\r\n\r\n<p>2. Mengembangkan program-program ekstrakurikuler yang membentuk kepribadian siswa yang tangguh dan mandiri.</p>\r\n\r\n<p>3. Melaksanakan kegiatan sosial dan keagamaan secara rutin untuk memperkuat rasa empati dan kebersamaan.</p>\r\n\r\n<p><strong>c. Mendorong Prestasi Akademik dan Non-Akademik:</strong></p>\r\n\r\n<p>1. Mengidentifikasi dan mengembangkan bakat serta minat siswa melalui berbagai kompetisi dan lomba.</p>\r\n\r\n<p>2. Menyediakan bimbingan akademik dan konseling untuk membantu siswa mencapai potensi maksimal mereka.</p>\r\n\r\n<p>3. Menghargai dan memberikan apresiasi terhadap setiap pencapaian siswa baik di bidang akademik maupun non-akademik.</p>\r\n\r\n<p><strong>d. Meningkatkan Kualitas Sumber Daya Manusia:</strong></p>\r\n\r\n<p>1. Melaksanakan pelatihan dan pengembangan profesional bagi para guru dan staf secara berkala.</p>\r\n\r\n<p>2. Mendorong partisipasi aktif guru dalam seminar, workshop, dan kegiatan ilmiah lainnya untuk meningkatkan kompetensi.</p>\r\n\r\n<p>3. Membangun kerjasama dengan institusi pendidikan dan organisasi terkait untuk peningkatan kualitas pendidikan.</p>\r\n\r\n<p><strong>e. Menjalin Kemitraan dengan Masyarakat dan Dunia Usaha:</strong></p>\r\n\r\n<p>1. Membuka ruang komunikasi yang efektif antara sekolah, orang tua, dan masyarakat untuk mendukung kegiatan pendidikan.</p>\r\n\r\n<p>2. Mengadakan program kemitraan dengan dunia usaha dan industri untuk mempersiapkan siswa menghadapi dunia kerja.</p>\r\n\r\n<p>3. Melibatkan alumni dalam berbagai kegiatan sekolah untuk memperkuat jejaring dan kerjasama.</p>\r\n', '2024-06-14 12:26:35', NULL),
(3, 'SERTIFIKAT_3.jpg', '<p><strong>Struktur Organisasi SMA Cut Meutia Banda Aceh</strong></p>\r\n\r\n<p>Selamat datang di halaman Struktur Organisasi SMA Cut Meutia Banda Aceh. Struktur ini dirancang untuk mendukung visi dan misi sekolah melalui peran yang jelas dan efektif.</p>\r\n', '2024-06-14 11:54:45', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_agenda`
--

CREATE TABLE `tbl_agenda` (
  `agenda_id` int(11) NOT NULL,
  `agenda_nama` varchar(200) DEFAULT NULL,
  `agenda_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `agenda_deskripsi` text DEFAULT NULL,
  `agenda_mulai` date DEFAULT NULL,
  `agenda_selesai` date DEFAULT NULL,
  `agenda_tempat` varchar(90) DEFAULT NULL,
  `agenda_waktu` varchar(30) DEFAULT NULL,
  `agenda_keterangan` varchar(200) DEFAULT NULL,
  `agenda_file` varchar(200) DEFAULT NULL,
  `agenda_author` varchar(60) DEFAULT NULL,
  `agenda_slug` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_agenda`
--

INSERT INTO `tbl_agenda` (`agenda_id`, `agenda_nama`, `agenda_tanggal`, `agenda_deskripsi`, `agenda_mulai`, `agenda_selesai`, `agenda_tempat`, `agenda_waktu`, `agenda_keterangan`, `agenda_file`, `agenda_author`, `agenda_slug`) VALUES
(1, 'djjdsaj', '2024-01-15 03:33:01', 'fadfas', '2024-01-24', '0000-00-00', 'dsadsa', '10:00 - 11:00 WIB', 'dsada', NULL, '', NULL),
(2, 'Penerimaan Peserta Didik Baru', '2024-01-15 03:36:03', 'Jadwal Tes Penerimaan Peserta Didik Baru', '2024-06-18', '2024-06-21', 'Lapangan Sekolah', '10:00 - 11:00 WIB', 'Mohon hadir 20 Menit sebelum nya', NULL, '', NULL),
(3, 'Penerimaan Peserta Didik Baru 2024', '2024-01-15 03:39:10', 'Tidak seperti anggapan banyak orang, Lorem Ipsum bukanlah teks-teks yang diacak. Ia berakar dari sebuah naskah sastra latin klasik dari era 45 sebelum masehi, hingga bisa dipastikan usianya telah mencapai lebih dari 2000 tahun. Richard McClintock, seorang professor Bahasa Latin dari Hampden-Sidney College di Virginia, mencoba mencari makna salah satu kata latin yang dianggap paling tidak jelas, yakni consectetur,', '2024-01-16', '2024-01-18', 'Ruang Kepala Sekolah', '10:00 - 11:00 WIB', 'Mohon hadir kepada peserta baru', 'e65888f7c197dcbc85c22f111dd778c7.pdf', '1', 'penerimaan-peserta-didik-baru-2024'),
(5, 'Gotong Royong Sekolah', '2024-01-19 03:40:26', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an', '2024-01-26', '2024-01-28', 'Lapangan Sekolah', '09:00 - 11:00 WIB', 'kiw kiw', 'c81f044ac491a84082cd9b476f22732f.png', '1', 'gotong-royong-sekolah'),
(6, 'Kunjungan Museum Tsunami', '2024-01-19 11:35:33', ' has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2024-01-27', '0000-00-00', 'Blang Padang', '08:00', '', '94a4c1ef5309e932562c964d1ca50afb.jpeg', '1', 'kunjungan-museum-tsunami'),
(7, 'testing slug Pangang', '2024-01-22 12:32:09', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an', '2024-03-18', '2024-04-08', 'Lapangan Sekolah', '10:00 - 11:00 WIB', '', '', '1', 'testing-slug-pangang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_album`
--

CREATE TABLE `tbl_album` (
  `album_id` int(11) NOT NULL,
  `album_nama` varchar(50) DEFAULT NULL,
  `album_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `album_pengguna_id` int(11) DEFAULT NULL,
  `album_author` varchar(60) DEFAULT NULL,
  `album_count` int(11) DEFAULT 0,
  `album_cover` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_album`
--

INSERT INTO `tbl_album` (`album_id`, `album_nama`, `album_tanggal`, `album_pengguna_id`, `album_author`, `album_count`, `album_cover`) VALUES
(1, 'Kegiatan Pramuka', '2016-09-08 13:00:55', 1, 'Muris Studio', 5, '1445904c89e36f5fd6aa6ab9c3992adc.jpg'),
(3, 'Kegiatan OSIS', '2017-01-21 01:58:16', 1, 'Muris Studio', 3, '047cf01a796131d142a90db9a3dd96ca.jpg'),
(4, 'Foto Kegiatan Siswa Sekolah', '2017-01-24 01:31:13', 1, 'Muris Studio', 7, 'b115c482c4fb08add9091208bf4dc500.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_files`
--

CREATE TABLE `tbl_files` (
  `file_id` int(11) NOT NULL,
  `file_judul` varchar(120) DEFAULT NULL,
  `file_deskripsi` text DEFAULT NULL,
  `file_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `file_oleh` varchar(60) DEFAULT NULL,
  `file_download` int(11) DEFAULT 0,
  `file_data` varchar(120) DEFAULT NULL,
  `file_kelas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_files`
--

INSERT INTO `tbl_files` (`file_id`, `file_judul`, `file_deskripsi`, `file_tanggal`, `file_oleh`, `file_download`, `file_data`, `file_kelas`) VALUES
(3, '14 Teknik Komunikasi Yang Paling Efektif', 'Ebook 14 teknik komunikasi paling efektif membantu anda untuk berkomunikasi dengan baik dan benar', '2017-01-23 15:26:06', 'Drs. Joko', 0, 'ab2cb34682bd94f30f2347523112ffb9.pdf', 1),
(4, 'Bagaimana Membentuk Pola Pikir yang Baru', 'Ebook ini membantu anda membentuk pola pikir baru.', '2017-01-23 15:27:07', 'Drs. Joko', 0, '30f588eb5c55324f8d18213f11651855.pdf', NULL),
(5, '7 Tips Penting mengatasi Kritik', '7 Tips Penting mengatasi Kritik', '2017-01-23 15:27:44', 'Drs. Joko', 0, '329a62b25ad475a148e1546aa3db41de.docx', NULL),
(6, '8 Racun dalam kehidupan kita', '8 Racun dalam kehidupan kita', '2017-01-23 15:28:17', 'Drs. Joko', 0, '8e38ad4948ba13758683dea443fbe6be.docx', NULL),
(7, 'Jurnal Teknolgi Informasi', 'Jurnal Teknolgi Informasi', '2017-01-25 03:18:53', 'Gunawan, S.Pd', 0, '87ae0f009714ddfdd79e2977b2a64632.pdf', NULL),
(8, 'Jurnal Teknolgi Informasi 2', 'Jurnal Teknolgi Informasi', '2017-01-25 03:19:22', 'Gunawan, S.Pd', 0, 'c4e966ba2c6e142155082854dc5b3602.pdf', NULL),
(9, 'Naskah Publikasi IT', 'Naskah Teknolgi Informasi', '2017-01-25 03:21:04', 'Gunawan, S.Pd', 0, '71380b3cf16a17a02382098c028ece9c.pdf', NULL),
(10, 'Modul Teknologi Informasi', 'Modul Teknologi Informasi', '2017-01-25 03:22:08', 'Gunawan, S.Pd', 0, '029143a3980232ab2900d94df36dbb0c.pdf', NULL),
(11, 'Modul Teknologi Informasi Part II', 'Modul Teknologi Informasi', '2017-01-25 03:22:54', 'Gunawan, S.Pd', 0, 'ea8f3f732576083156e509657614f551.pdf', NULL),
(12, 'Modul Teknologi Informasi Part III', 'Modul Teknologi Informasi', '2017-01-25 03:23:21', 'Gunawan, S.Pd', 0, 'c5e5e7d16e4cd6c3d22c11f64b0db2af.pdf', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `galeri_id` int(11) NOT NULL,
  `galeri_judul` varchar(60) DEFAULT NULL,
  `galeri_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `galeri_gambar` varchar(40) DEFAULT NULL,
  `galeri_album_id` int(11) DEFAULT NULL,
  `galeri_pengguna_id` int(11) DEFAULT NULL,
  `galeri_author` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`galeri_id`, `galeri_judul`, `galeri_tanggal`, `galeri_gambar`, `galeri_album_id`, `galeri_pengguna_id`, `galeri_author`) VALUES
(4, 'Diskusi Pemilihan Ketua Osis', '2017-01-21 14:04:53', '5f8436e2c30570dfe2114f05af5e9215.jpg', 3, 1, 'Muris Studio'),
(5, 'Panitia Pemilu Osis', '2017-01-22 04:13:20', '504cd9e83e047becee6ec32e4af7e534.jpg', 3, 1, 'Muris Studio'),
(6, 'Proses Pemilu Osis', '2017-01-22 04:13:43', '83f7e70d0f89f2d8a7695e5f7059418f.jpg', 3, 1, 'Muris Studio'),
(7, 'Belajar dengan native speaker', '2017-01-24 01:26:22', 'd884f7fe18efebd07d7725ecf3bf3481.jpg', 1, 1, 'Muris Studio'),
(8, 'Diskusi dengan native speaker', '2017-01-24 01:27:05', 'f652521a6c283c2df9da808cc4aae1c6.jpg', 1, 1, 'Muris Studio'),
(9, 'Foto bareng native speaker', '2017-01-24 01:27:28', '69fc9bf961e3aac2fc79af00922b3933.png', 1, 1, 'Muris Studio'),
(10, 'Foto bareng native speaker', '2017-01-24 01:28:40', '853f2d57da50c6f516944a6cec68c694.jpg', 1, 1, 'Muris Studio'),
(11, 'Foto bareng native speaker', '2017-01-24 01:28:54', 'f92d6de4457a33e5a1d957b0e3d20335.jpg', 1, 1, 'Muris Studio'),
(12, 'Belajar sambil bermain', '2017-01-24 01:31:42', '5e3c09430ba03b2e60de6c06c6dbafec.jpg', 4, 1, 'Muris Studio'),
(13, 'Belajar sambil bermain', '2017-01-24 01:31:55', 'e4d51d428be01628693b4bff4e453463.jpg', 4, 1, 'Muris Studio'),
(14, 'Belajar komputer programming', '2017-01-24 01:32:24', 'a23dcd7e6b129257fd03d7198fe1bb49.jpg', 4, 1, 'Muris Studio'),
(15, 'Belajar komputer programming', '2017-01-24 01:32:34', 'cf0585d2d5a627639ef4ed48beab65c2.jpg', 4, 1, 'Muris Studio'),
(16, 'Belajar komputer programming', '2017-01-24 01:32:44', 'e53b596a6a821179169c647ffdaebd10.jpg', 4, 1, 'Muris Studio'),
(17, 'Belajar sambil bermain', '2017-01-24 01:33:08', 'e8ec9657a6c5ff5eea059785c949b5ce.jpg', 4, 1, 'Muris Studio'),
(18, 'Makan bersama', '2017-01-24 01:33:24', 'a92df7b3e7a8488f0e8ca186e6551194.jpg', 4, 1, 'Muris Studio');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `guru_id` int(11) NOT NULL,
  `guru_nip` varchar(30) DEFAULT NULL,
  `guru_nama` varchar(70) DEFAULT NULL,
  `guru_jenkel` varchar(2) DEFAULT NULL,
  `guru_tmp_lahir` varchar(80) DEFAULT NULL,
  `guru_tgl_lahir` varchar(80) DEFAULT NULL,
  `guru_mapel` varchar(120) DEFAULT NULL,
  `guru_photo` varchar(40) DEFAULT NULL,
  `guru_tgl_input` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_guru`
--

INSERT INTO `tbl_guru` (`guru_id`, `guru_nip`, `guru_nama`, `guru_jenkel`, `guru_tmp_lahir`, `guru_tgl_lahir`, `guru_mapel`, `guru_photo`, `guru_tgl_input`) VALUES
(2, '927482658274981', 'Mei Indri, S.Pd', 'L', 'Purwokerto', '25 Juni 2020', 'Bahasa Indonesia	', '792ef9e0267a1b021c9b99763a980a0b.jpg', '2017-01-26 13:38:54'),
(3, '-', 'Agustina Setyani,S.Ag', 'L', 'Purwokerto', '15 Desember 1995', 'Agama', '96e1400c5cf46d382073e8e8af0b86b6.jpg', '2017-01-26 13:41:20'),
(4, '-', 'Fury Ismaya, S.Pd', 'P', 'Purwokerto', '15 Desember 1995', 'Sejarah', '999998fd4172c4cd99389b7f734d2b23.jpg', '2017-01-26 13:42:08'),
(5, '-', 'Arneta Dwi Safitri, M. Pd.', 'P', 'Purwokerto', '15 Desember 1995', 'Fisika', '5b88365eea4e14fd027adf1ed0c17efa.jpeg', '2017-01-26 13:42:48'),
(6, '-', 'Rachmaningtiyas Wietda Ayu Nirmandini, S.Pd.', 'L', 'Purwokerto', '15 Desember 1995', 'Matematika', '0010e6d466aef6042f7a914c7f567dd3.jpg', '2017-01-26 13:43:46'),
(7, '-', 'Lutviarini Latifah, S.Pd., M.Sc.', 'P', 'Purwokerto', '15 Desember 1995', 'Bahasa Inggris, IPA', 'b2917470f024fc3dd62c43e37665d767.jpg', '2017-01-26 13:45:11'),
(8, '-', 'Asrini Yuli Wahyuni,SH', 'P', 'Purwokerto', '15 Desember 1995', 'Olahraga', 'efb1d0cc744b320f6dae31c4711f562a.jpg', '2017-01-27 04:28:23'),
(9, '-', 'Windy Mazaya Amalina', 'P', 'Purwokerto', '15 Desember 1995', 'Sejarah', '1d3b877f1619db4e2fd883a2aff15b09.jpg', '2020-05-01 21:18:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_inbox`
--

CREATE TABLE `tbl_inbox` (
  `inbox_id` int(11) NOT NULL,
  `inbox_nama` varchar(40) DEFAULT NULL,
  `inbox_email` varchar(60) DEFAULT NULL,
  `inbox_kontak` varchar(20) DEFAULT NULL,
  `inbox_pesan` text DEFAULT NULL,
  `inbox_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `inbox_status` int(11) DEFAULT 1 COMMENT '1=Belum dilihat, 0=Telah dilihat'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_inbox`
--

INSERT INTO `tbl_inbox` (`inbox_id`, `inbox_nama`, `inbox_email`, `inbox_kontak`, `inbox_pesan`, `inbox_tanggal`, `inbox_status`) VALUES
(2, 'M Fikri Setiadi', 'fikrifiver97@gmail.com', '-', 'Ping !', '2017-06-21 03:44:12', 0),
(3, 'M Fikri Setiadi', 'fikrifiver97@gmail.com', '-', 'Ini adalah pesan ', '2017-06-21 03:45:57', 0),
(5, 'M Fikri Setiadi', 'fikrifiver97@gmail.com', '-', 'Ping !', '2017-06-21 03:53:19', 0),
(7, 'M Fikri Setiadi', 'fikrifiver97@gmail.com', '-', 'Hi, there!', '2017-07-01 07:28:08', 0),
(8, 'M Fikri', 'fikrifiver97@gmail.com', '084375684364', 'Hi There, Would you please help me about register?', '2018-08-06 13:51:07', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(30) DEFAULT NULL,
  `kategori_tanggal` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`kategori_id`, `kategori_nama`, `kategori_tanggal`) VALUES
(1, 'Pendidikan', '2016-09-06 05:49:04'),
(2, 'Politik', '2016-09-06 05:50:01'),
(3, 'Sains', '2016-09-06 05:59:39'),
(4, 'Penelitian', '2016-09-06 06:19:26'),
(5, 'Prestasi', '2016-09-07 02:51:09'),
(6, 'Olah Raga', '2017-01-13 13:20:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `kelas_id` int(11) NOT NULL,
  `kelas_nama` varchar(40) DEFAULT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`kelas_id`, `kelas_nama`, `keterangan`) VALUES
(1, 'Kelas X.Multimedia', NULL),
(2, 'Kelas X.Desain Grafis', NULL),
(3, 'Kelas X.Tahfidz', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_komentar`
--

CREATE TABLE `tbl_komentar` (
  `komentar_id` int(11) NOT NULL,
  `komentar_nama` varchar(30) DEFAULT NULL,
  `komentar_email` varchar(50) DEFAULT NULL,
  `komentar_isi` varchar(120) DEFAULT NULL,
  `komentar_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `komentar_status` varchar(2) DEFAULT NULL,
  `komentar_tulisan_id` int(11) DEFAULT NULL,
  `komentar_parent` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`komentar_id`, `komentar_nama`, `komentar_email`, `komentar_isi`, `komentar_tanggal`, `komentar_status`, `komentar_tulisan_id`, `komentar_parent`) VALUES
(1, 'M Fikri', 'fikrifiver97@gmail.com', ' Nice Post.', '2018-08-07 15:09:07', '1', 24, 0),
(2, 'M Fikri Setiadi', 'fikrifiver97@gmail.com', ' Awesome Post', '2018-08-07 15:14:26', '1', 24, 0),
(3, 'Joko', 'joko@gmail.com', 'Thank you.', '2018-08-08 03:54:56', '1', 24, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_log_aktivitas`
--

CREATE TABLE `tbl_log_aktivitas` (
  `log_id` int(11) NOT NULL,
  `log_nama` text DEFAULT NULL,
  `log_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `log_ip` varchar(20) DEFAULT NULL,
  `log_pengguna_id` int(11) DEFAULT NULL,
  `log_icon` blob DEFAULT NULL,
  `log_jenis_icon` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mapel`
--

CREATE TABLE `tbl_mapel` (
  `id_mapel` int(11) NOT NULL,
  `nama_mapel` varchar(100) NOT NULL,
  `keterangan_mapel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_mapel`
--

INSERT INTO `tbl_mapel` (`id_mapel`, `nama_mapel`, `keterangan_mapel`) VALUES
(2, 'IPA', 'Belajar IPA'),
(3, 'IPS', 'Belajar IPS'),
(4, 'Bahasa Inggris', 'Bahasa Inggris');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_orang_tua`
--

CREATE TABLE `tbl_orang_tua` (
  `id` int(11) NOT NULL,
  `nama_ayah` varchar(50) DEFAULT NULL,
  `status_ayah` int(11) DEFAULT NULL,
  `nik_ayah` varchar(50) DEFAULT NULL,
  `tinggal_ayah` text DEFAULT NULL,
  `tempat_ayah` varchar(50) DEFAULT NULL,
  `tanggal_ayah` date DEFAULT NULL,
  `pendidikan_ayah` int(11) DEFAULT NULL,
  `pekerjaan_ayah_id` int(11) DEFAULT NULL,
  `penghasilan_ayah` int(11) DEFAULT NULL,
  `no_hp_ayah` varchar(50) DEFAULT NULL,
  `nama_ibu` varchar(50) DEFAULT NULL,
  `status_ibu` int(11) DEFAULT NULL,
  `nik_ibu` varchar(50) DEFAULT NULL,
  `tinggal_ibu` text DEFAULT NULL,
  `tempat_ibu` varchar(50) DEFAULT NULL,
  `tanggal_ibu` date DEFAULT NULL,
  `pendidikan_ibu` int(11) DEFAULT NULL,
  `pekerjaan_ibu_id` int(11) DEFAULT NULL,
  `penghasilan_ibu` int(11) DEFAULT NULL,
  `no_hp_ibu` varchar(50) DEFAULT NULL,
  `nama_wali` varchar(50) DEFAULT NULL,
  `status_wali` int(11) DEFAULT NULL,
  `nik_wali` varchar(50) DEFAULT NULL,
  `tinggal_wali` text DEFAULT NULL,
  `tempat_wali` varchar(50) DEFAULT NULL,
  `tanggal_wali` date DEFAULT NULL,
  `pendidikan_wali` int(11) DEFAULT NULL,
  `pekerjaan_wali_id` int(11) DEFAULT NULL,
  `penghasilan_wali` int(11) DEFAULT NULL,
  `no_hp_wali` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_orang_tua`
--

INSERT INTO `tbl_orang_tua` (`id`, `nama_ayah`, `status_ayah`, `nik_ayah`, `tinggal_ayah`, `tempat_ayah`, `tanggal_ayah`, `pendidikan_ayah`, `pekerjaan_ayah_id`, `penghasilan_ayah`, `no_hp_ayah`, `nama_ibu`, `status_ibu`, `nik_ibu`, `tinggal_ibu`, `tempat_ibu`, `tanggal_ibu`, `pendidikan_ibu`, `pekerjaan_ibu_id`, `penghasilan_ibu`, `no_hp_ibu`, `nama_wali`, `status_wali`, `nik_wali`, `tinggal_wali`, `tempat_wali`, `tanggal_wali`, `pendidikan_wali`, `pekerjaan_wali_id`, `penghasilan_wali`, `no_hp_wali`) VALUES
(1, 'Muhammad Ichsan', 1, '', 'Jl. Mangga Besar No.123, RT.02/RW.04, Kel. Manggis, Kec. Tanah Abang, Kota Jakarta Pusat, Provinsi DKI Jakarta, 10250', '', '1989-01-08', 1, 1, 1, '', '', 1, '', 'Jl. Mangga Besar No.123, RT.02/RW.04, Kel. Manggis, Kec. Tanah Abang, Kota Jakarta Pusat, Provinsi DKI Jakarta, 10250', '', '1998-02-26', 1, 1, 1, '', 'Wali Songo', 1, '', 'Jl. Mangga Besar No.123, RT.02/RW.04, Kel. Manggis, Kec. Tanah Abang, Kota Jakarta Pusat, Provinsi DKI Jakarta, 10250', '', '1995-05-27', 1, 1, 1, ''),
(2, 'Yusuf Zulkarnain', 1, '', '', '', '1970-01-01', 1, 1, 1, '', 'Habiba ', 1, '', '', '', '1970-01-01', 1, 1, 1, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pekerjaan`
--

CREATE TABLE `tbl_pekerjaan` (
  `id` int(11) NOT NULL,
  `nama_pekerjaan` varchar(50) DEFAULT NULL,
  `dekripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pekerjaan`
--

INSERT INTO `tbl_pekerjaan` (`id`, `nama_pekerjaan`, `dekripsi`) VALUES
(1, 'Tidak Bekerja', NULL),
(2, 'Pensiunan', NULL),
(3, 'TNI/POLRI', NULL),
(4, 'Guru/Dosen', NULL),
(5, 'Pegawai Swasta', NULL),
(6, 'Wiraswasta', NULL),
(7, 'Pengacara/Jaksa/Hakim/Notaris', NULL),
(8, 'Seniman/Pelukis/Artis/Sejenisnya', NULL),
(9, 'Dokter/Bidan/Perawat', NULL),
(10, 'Pilot/Pramugara/i', NULL),
(11, 'Pedagang', NULL),
(12, 'Petani', NULL),
(13, 'Nelayan', NULL),
(14, 'Buruh(Tani/Pabrik/Bangunan', NULL),
(15, 'Sopir/Masinis/Kondektur', NULL),
(16, 'Politikus', NULL),
(17, 'Lainnya', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pendaftaran`
--

CREATE TABLE `tbl_pendaftaran` (
  `id` int(11) NOT NULL,
  `no_pendaftaran` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `nisn` varchar(50) DEFAULT NULL,
  `no_ktp` int(16) DEFAULT NULL,
  `no_kk` int(16) DEFAULT NULL,
  `nama_kk` text DEFAULT NULL,
  `sekolah_asal` varchar(50) DEFAULT NULL,
  `kelas_id` int(11) DEFAULT NULL,
  `kewarganegaraan` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat_ktp` text DEFAULT NULL,
  `jk` enum('P','L') DEFAULT NULL,
  `anak_ke` tinyint(4) DEFAULT NULL,
  `jumlah_saudara` tinyint(4) DEFAULT NULL,
  `agama` int(2) DEFAULT NULL,
  `cita_cita` text DEFAULT NULL,
  `hobi` text DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `no_hp` varchar(50) DEFAULT NULL,
  `yang_biaya_sekolah` varchar(50) DEFAULT NULL,
  `status_tt` tinyint(4) DEFAULT NULL,
  `alamat_domisili` text DEFAULT NULL,
  `rt` varchar(50) DEFAULT NULL,
  `rw` varchar(50) DEFAULT NULL,
  `desa` varchar(50) DEFAULT NULL,
  `kecamatan` varchar(50) DEFAULT NULL,
  `kabupaten_kota` varchar(50) DEFAULT NULL,
  `provinsi` varchar(50) DEFAULT NULL,
  `kode_pos` varchar(50) DEFAULT NULL,
  `transportasi` int(11) DEFAULT NULL,
  `jarak` int(11) DEFAULT NULL,
  `waktu_tempuh` int(11) DEFAULT NULL,
  `ortu_id` int(11) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `b_pendaftaran` varchar(50) DEFAULT NULL,
  `kk` varchar(50) DEFAULT NULL,
  `akte` varchar(50) DEFAULT NULL,
  `ijazah` varchar(50) DEFAULT NULL,
  `kip` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `status` enum('1','2') DEFAULT NULL,
  `id_tahun` int(11) DEFAULT NULL,
  `tanggal_daftar` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pendaftaran`
--

INSERT INTO `tbl_pendaftaran` (`id`, `no_pendaftaran`, `nama`, `nisn`, `no_ktp`, `no_kk`, `nama_kk`, `sekolah_asal`, `kelas_id`, `kewarganegaraan`, `tempat_lahir`, `tanggal_lahir`, `alamat_ktp`, `jk`, `anak_ke`, `jumlah_saudara`, `agama`, `cita_cita`, `hobi`, `email`, `no_hp`, `yang_biaya_sekolah`, `status_tt`, `alamat_domisili`, `rt`, `rw`, `desa`, `kecamatan`, `kabupaten_kota`, `provinsi`, `kode_pos`, `transportasi`, `jarak`, `waktu_tempuh`, `ortu_id`, `foto`, `b_pendaftaran`, `kk`, `akte`, `ijazah`, `kip`, `username`, `password`, `status`, `id_tahun`, `tanggal_daftar`) VALUES
(1, 'PPDB20241122331', 'Muhammad Uzair', '112233', 0, 0, '', '', NULL, '', '', '1970-01-01', '', 'P', 0, 0, 1, '', '', 'uzair@gmail.com', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'uzair', 'uzair', '1', 3, '2024-06-26'),
(2, 'PPDB2024223312', 'Muhammad Uwais', '22331', 0, 0, '', '', NULL, '', 'Banda Aceh', '1995-11-20', 'Jl. Mangga Besar No.123, RT.02/RW.04, Kel. Manggis, Kec. Tanah Abang, Kota Jakarta Pusat, Provinsi DKI Jakarta, 10250', 'L', 3, 2, 1, '', 'Makan, main game', '', '', 'ayah sendiri', 1, NULL, '', '', '', '', '', '', '', 1, 1, 1, 1, 'f94c107643301893d1b837b450b7d9ed.jpg', NULL, 'e3d28a90033d9eaf5d0b86e3f8ce2234.jpg', '5ce12bc3ffef94929492cd04e6d9e648.jpg', 'ffae48630a9d93fa136adf551bad8a43.jpg', NULL, 'uwais', 'uwais', '2', 3, '2024-06-27'),
(5, 'PPDB202421313215', 'Muhammad Furqan', '2131321', NULL, NULL, NULL, 'SMP 2 BNA', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'furqan', 'furqan', NULL, NULL, NULL),
(6, 'PPDB202431321396', 'Muhammad Furqan', '3132139', 829210, 0, '', 'SMP 1 Banda Aceh', NULL, '', '', '1970-01-01', 'Ulee Kareng', 'L', 2, 0, 1, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, 'furqans', 'furqans', '2', 3, '2024-07-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `pengguna_id` int(11) NOT NULL,
  `pengguna_nama` varchar(50) DEFAULT NULL,
  `pengguna_moto` varchar(100) DEFAULT NULL,
  `pengguna_jenkel` varchar(2) DEFAULT NULL,
  `pengguna_username` varchar(30) DEFAULT NULL,
  `pengguna_password` varchar(35) DEFAULT NULL,
  `pengguna_tentang` text DEFAULT NULL,
  `pengguna_email` varchar(50) DEFAULT NULL,
  `pengguna_nohp` varchar(20) DEFAULT NULL,
  `pengguna_facebook` varchar(35) DEFAULT NULL,
  `pengguna_twitter` varchar(35) DEFAULT NULL,
  `pengguna_linkdin` varchar(35) DEFAULT NULL,
  `pengguna_google_plus` varchar(35) DEFAULT NULL,
  `pengguna_status` int(2) DEFAULT 0,
  `pengguna_level` varchar(3) DEFAULT NULL,
  `pengguna_register` timestamp NULL DEFAULT current_timestamp(),
  `pengguna_photo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`pengguna_id`, `pengguna_nama`, `pengguna_moto`, `pengguna_jenkel`, `pengguna_username`, `pengguna_password`, `pengguna_tentang`, `pengguna_email`, `pengguna_nohp`, `pengguna_facebook`, `pengguna_twitter`, `pengguna_linkdin`, `pengguna_google_plus`, `pengguna_status`, `pengguna_level`, `pengguna_register`, `pengguna_photo`) VALUES
(1, 'Muhammad Ichsan', 'Solusi Informasi Teknolosi', 'L', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Solusi Informasi Teknolosi', 'suryaciptainformatika@gmail.com', '085799696924', '-', '-', '', '', 0, '1', '2020-09-03 06:07:55', '79d899beb71a947831a1412d85617e90.JPG'),
(2, 'Muhammad Ichsan', '', 'L', 'admin12345', '7488e331b8b64e5794da3fa4eb10ad5d', 'Solusi Informasi Teknolosi', 'muhammadichsan03@gmail.com', '085359883347', '-', '-', '', '', 0, '1', '2020-09-03 06:07:55', 'c347ebc91a8d7fa7e06caf7fea13e328.JPG'),
(3, 'Muhammad Uzair', NULL, NULL, 'uzair', '6e3b34165a7ef7839ab852f28b76999f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2', '2024-02-08 16:43:06', NULL),
(4, 'Muhammad Uwais', NULL, NULL, 'uwais', '404a70aaee2b572526b57c5b39318488', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2', '2024-02-08 16:45:07', NULL),
(6, 'Guru', NULL, 'P', 'guru', '77e69c137812518e359196bb2f5e9bb9', NULL, 'guru@gmail.com', '', NULL, NULL, NULL, NULL, 0, '3', '2024-02-08 17:40:37', NULL),
(8, 'Muhammad Uwais Al faris', NULL, 'L', 'uwais_1', 'e6d82d3df03eb6e776a1718a6ca2b3f4', NULL, 'uwais@gmail.com', '', NULL, NULL, NULL, NULL, 0, '3', '2024-02-10 17:05:55', NULL),
(11, 'admin_isan', NULL, 'L', 'admin_isan', '3f8364675c5ada79f1c93f73606a4a9d', NULL, 'adminisan@gmail.com', '', NULL, NULL, NULL, NULL, 0, '3', '2024-03-16 13:54:30', NULL),
(12, 'Habiba Lasefa', NULL, NULL, 'habiba', '5b91e7de95d0972d00ef0cb8321b1ec3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, '2', '2024-07-25 05:22:43', NULL),
(13, 'Muhammad Furqan', NULL, NULL, 'furqan', 'df4358b3b8209d8123ac6384d02ef8d0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, '2', '2024-07-25 05:44:15', NULL),
(14, 'Muhammad Furqan', NULL, NULL, 'furqans', '5fcfea8eadf5516d7ff0fc4b259f3b32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6, '2', '2024-07-25 05:52:18', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengumuman`
--

CREATE TABLE `tbl_pengumuman` (
  `pengumuman_id` int(11) NOT NULL,
  `pengumuman_judul` varchar(150) DEFAULT NULL,
  `pengumuman_deskripsi` text DEFAULT NULL,
  `pengumuman_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `pengumuman_author` varchar(60) DEFAULT NULL,
  `pengumuman_file` varchar(200) DEFAULT NULL,
  `pengumuman_slug` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pengumuman`
--

INSERT INTO `tbl_pengumuman` (`pengumuman_id`, `pengumuman_judul`, `pengumuman_deskripsi`, `pengumuman_tanggal`, `pengumuman_author`, `pengumuman_file`, `pengumuman_slug`) VALUES
(1, 'INFORMASI PERINGATAN HARI PRAMUKA', 'Informasi disampaikan kepada seluruh siswa SMP Negeri 4 Pakem bahwa pada hari Senin 14 Agustus 2020 upacara / apel hari pramuka. Semua siswa memakai pakaian pramuka lengkap dengan segala atributnya. Jam pelaksanaan upacara / apel seperti biasa tiap hari Senin.', '2020-05-02 01:17:30', '1', NULL, NULL),
(2, 'INFORMASI PELAKSANAAN UPACARA PERINGATAN HUT RI KE-72', 'Informasi disampaikan kepada seluruh Siswa SMP Negeri 4 Pakem bahwa pada hari Kamis 17 Agustus 2017 upacara dalam rangka HUT RI ke-72. Semua siswa memakai pakaian yang biasa dipakai pada hari senin.  Upacara dimulai pukul 07.00 WIB. Setelah selesai upacara, siswa langsung pulang. Kecuali petugas yang ditunjuk mewakili sekolah di kecamatan.Yang bertempat di M-Sekolah. Raport diambil oleh orang tua/wali kelas murid masing-masing', '2020-05-02 01:17:30', '1', NULL, NULL),
(3, ' NOV 2017 0 Pengumuman Sekolah INFORMASI UPACARA PERINGATAN HARI PAHLAWAN', 'Informasi disampaikan kepada seluruh Siswa SMP Negeri 4 Pakem bahwa pada hari Jumat 10 Nopember 2017 upacara peringatan Hari Pahlawan. Tidak ada senam pagi. Semua siswa memakai pakaian pramuka.  Upacara dimulai pukul 06.30 WIB. Informasi mohon disebarluaskan. Terimakasih', '2020-05-02 01:17:30', '1', NULL, NULL),
(4, 'PENDATAAN SISWA KELAS 7 BOARDING & REGULER', 'Pengumuman khusus untuk siswa baru kelas 7 CIBI BOARDING & Kelas Reguler Kepada seluruh siswa baru kelas 7 CIBI BOARDING & Kelas Reguler diwajibkan untuk mengisi form pendataan siswa baru. Harap untuk menyiapkan dokumen pendukung sebelum mengisi formulir', '2020-05-02 01:17:30', '1', NULL, NULL),
(5, 'PENGUMUMAN UNTUK SISWA KELAS 9', 'Diumumkan kepada seluruh siswa kelas 9 SMP Negeri 4 Pakem diharapkan hadir di sekolah : Hari /tanggal  : Jumat, 17 Juni 2016 Jam                   : 08.00 WIB Tempat             : Aula depan Untuk cap 3 jari ijazah & mengambil undangan pelepasan siswa kelas 9', '2020-05-02 12:19:09', '1', NULL, NULL),
(6, 'PANDUAN KEGIATAN RAMADHAN 1441 H', 'Berikut kami sampaikan panduan kegiatan ramadhan 1441 H , silakan unduh di tautan berikut :\r\n\r\nPANDUAN RAMADHAN 1441 H \r\n\r\nInformasi sekolah terbaru, selalu kunjungi web sekolah!', '2020-05-02 12:19:58', '1', NULL, NULL),
(7, 'JADWAL PEMBELAJARAN JARAK JAUH MULAI 29 APRIL- 5 MEI 2020', 'Berikut kami sampaikan jadwal pembelajaran jarak jauh 29 April – 5 Mei 2020 dan  perpanjangan masa belajar dirumah berlaku mulai 29 April  – 16 Mei 2020, silakan unduh di tautan berikut :\r\n\r\nJADWAL PEMBELAJARAN JARAK JAUH 29 APRIL – 5 MEI 2020\r\nINFORMASI PJJ 29 APRIL – 16 MEI 2020\r\nPANDUAN RAMADHAN 1441 H \r\nInformasi sekolah ter-update, selalu kunjungi web sekolah. Terimakasih.', '2020-05-01 17:00:00', '1', '698d7aa24b2805a6795f4259ad698c8a.png', 'jadwal-pembelajaran-jarak-jauh-mulai-29-april--5-mei-2020'),
(8, 'JADWAL BARU PEMBELAJARAN ONLINE 22-28 APRIL 2022', 'Berikut kami sampaikan jadwal pembelajaran online berlaku mulai 22-28 April 2020, serta informasi OSOP silakan unduh di tautan berikut :\r\n\r\n>>JADWAL PEMBELAJARAN ONLINE_ 22-28 APRIL 2020<<\r\n\r\nInformasi sekolah ter-update, selalu kunjungi web sekolah. Terimakasih.', '2022-01-23 17:00:00', '1', '946c6e39b731a9b2e6d2cf0b42e864fa.jpeg', 'jadwal-baru-pembelajaran-online-22-28-april-2022'),
(13, 'PEMENANG LOMBA DAI CILIKs', 'Kami Umumkan Pemenang Lomba dibawah inis', '2023-05-17 17:00:00', '1', 'ccce4aac1b55c098474ccb1a926cf0ad.jpg', 'pemenang-lomba-dai-ciliks');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengunjung`
--

CREATE TABLE `tbl_pengunjung` (
  `pengunjung_id` int(11) NOT NULL,
  `pengunjung_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `pengunjung_ip` varchar(40) DEFAULT NULL,
  `pengunjung_perangkat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pengunjung`
--

INSERT INTO `tbl_pengunjung` (`pengunjung_id`, `pengunjung_tanggal`, `pengunjung_ip`, `pengunjung_perangkat`) VALUES
(930, '2018-08-09 08:04:59', '::1', 'Chrome'),
(931, '2020-04-30 09:24:35', '::1', 'Chrome'),
(932, '2020-04-30 17:03:42', '::1', 'Chrome'),
(933, '2020-04-30 17:17:54', '192.168.43.1', 'Chrome'),
(934, '2020-05-01 18:28:26', '::1', 'Chrome'),
(935, '2020-05-01 21:12:36', '192.168.43.1', 'Chrome'),
(936, '2020-05-02 12:58:12', '192.168.43.22', 'Chrome'),
(937, '2020-05-02 17:19:17', '::1', 'Firefox'),
(938, '2020-05-02 17:41:38', '192.168.43.22', 'Chrome'),
(939, '2020-05-02 18:07:26', '192.168.43.1', 'Chrome'),
(940, '2020-05-03 21:17:35', '::1', 'Chrome'),
(941, '2020-05-04 22:36:09', '::1', 'Chrome'),
(942, '2020-05-05 21:10:13', '::1', 'Chrome'),
(943, '2020-05-05 21:32:53', '192.168.43.1', 'Chrome'),
(944, '2023-12-18 14:57:16', '::1', 'Chrome'),
(945, '2023-12-19 03:05:10', '::1', 'Chrome'),
(946, '2023-12-20 04:24:23', '::1', 'Chrome'),
(947, '2023-12-21 03:29:19', '::1', 'Chrome'),
(948, '2023-12-22 02:27:12', '::1', 'Chrome'),
(949, '2023-12-23 05:32:32', '::1', 'Chrome'),
(950, '2023-12-23 17:38:01', '::1', 'Chrome'),
(951, '2023-12-26 09:41:59', '::1', 'Chrome'),
(952, '2023-12-27 02:40:28', '::1', 'Chrome'),
(953, '2023-12-28 09:38:56', '::1', 'Chrome'),
(954, '2023-12-29 02:34:40', '::1', 'Chrome'),
(955, '2023-12-30 20:08:16', '::1', 'Chrome'),
(956, '2024-01-01 13:01:24', '::1', 'Chrome'),
(957, '2024-01-02 06:42:30', '::1', 'Chrome'),
(958, '2024-01-03 03:49:26', '::1', 'Chrome'),
(959, '2024-01-04 10:37:04', '::1', 'Chrome'),
(960, '2024-01-04 17:09:49', '::1', 'Chrome'),
(961, '2024-01-08 05:02:08', '::1', 'Chrome'),
(962, '2024-01-11 03:49:32', '::1', 'Chrome'),
(963, '2024-01-12 03:47:32', '::1', 'Chrome'),
(964, '2024-01-12 19:02:52', '::1', 'Chrome'),
(965, '2024-01-13 17:00:25', '::1', 'Chrome'),
(966, '2024-01-19 03:17:44', '::1', 'Chrome'),
(967, '2024-01-19 17:00:24', '::1', 'Chrome'),
(968, '2024-01-22 09:56:21', '::1', 'Chrome'),
(969, '2024-01-23 03:54:58', '::1', 'Chrome'),
(970, '2024-01-23 18:48:38', '::1', 'Chrome'),
(971, '2024-01-24 17:00:58', '::1', 'Chrome'),
(972, '2024-02-01 07:18:39', '::1', 'Chrome'),
(973, '2024-02-02 03:55:26', '::1', 'Chrome'),
(974, '2024-02-04 07:03:28', '::1', 'Chrome'),
(975, '2024-02-07 04:23:18', '::1', 'Chrome'),
(976, '2024-02-08 09:21:13', '::1', 'Chrome'),
(977, '2024-02-11 17:52:26', '::1', 'Chrome'),
(978, '2024-03-07 04:00:42', '::1', 'Chrome'),
(979, '2024-03-15 09:31:50', '::1', 'Chrome'),
(980, '2024-03-16 13:20:04', '::1', 'Chrome'),
(981, '2024-03-16 19:51:13', '::1', 'Chrome'),
(982, '2024-03-18 04:23:36', '::1', 'Chrome'),
(983, '2024-04-29 08:34:35', '::1', 'Chrome'),
(984, '2024-05-27 04:05:58', '::1', 'Chrome'),
(985, '2024-05-28 08:43:26', '::1', 'Chrome'),
(986, '2024-05-30 04:44:18', '::1', 'Chrome'),
(987, '2024-05-31 03:59:17', '::1', 'Chrome'),
(988, '2024-06-03 02:58:29', '::1', 'Chrome'),
(989, '2024-06-04 04:52:01', '::1', 'Chrome'),
(990, '2024-06-06 08:35:54', '::1', 'Chrome'),
(991, '2024-06-08 04:40:24', '::1', 'Chrome'),
(992, '2024-06-12 09:11:49', '::1', 'Chrome'),
(993, '2024-06-13 08:12:37', '::1', 'Chrome'),
(994, '2024-06-14 01:45:58', '::1', 'Chrome'),
(995, '2024-06-14 17:00:18', '::1', 'Chrome'),
(996, '2024-06-15 17:00:03', '::1', 'Chrome'),
(997, '2024-06-20 10:22:12', '::1', 'Chrome'),
(998, '2024-06-20 17:05:28', '::1', 'Chrome'),
(999, '2024-06-22 07:29:42', '::1', 'Chrome'),
(1000, '2024-06-23 03:25:33', '::1', 'Chrome'),
(1001, '2024-06-25 08:26:47', '::1', 'Chrome'),
(1002, '2024-06-26 10:55:35', '::1', 'Chrome'),
(1003, '2024-06-27 08:10:33', '::1', 'Chrome'),
(1004, '2024-06-27 17:07:30', '::1', 'Chrome'),
(1005, '2024-07-01 08:47:07', '::1', 'Chrome'),
(1006, '2024-07-02 08:18:47', '::1', 'Chrome'),
(1007, '2024-07-03 03:02:20', '::1', 'Chrome'),
(1008, '2024-07-04 15:16:16', '::1', 'Chrome'),
(1009, '2024-07-12 08:32:44', '::1', 'Chrome'),
(1010, '2024-07-25 05:20:31', '::1', 'Chrome'),
(1011, '2024-08-18 15:43:16', '::1', 'Chrome');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL DEFAULT '0',
  `gambar` varchar(50) NOT NULL DEFAULT '0',
  `tanggal` timestamp NULL DEFAULT current_timestamp(),
  `stat` enum('1','2','3') DEFAULT '1',
  `pengguna_id` int(11) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `judul`, `gambar`, `tanggal`, `stat`, `pengguna_id`, `deskripsi`) VALUES
(10, 'Brosur Depan', '54cd66bc933de5f85fa0a52ba33ad12b.png', '2023-12-29 02:34:19', '1', 0, ''),
(11, 'Brosur Belakang', '997a3d78dc1005f5acd7480a222d8b5a.png', '2023-12-29 02:34:35', '1', 0, ''),
(13, 'File Brosur', 'ppdb.pdf', '2024-03-17 04:44:10', '2', NULL, NULL),
(14, 'File Biaya', 'ppdb.pdf', '2024-06-24 22:00:06', '3', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tahun_ajaran`
--

CREATE TABLE `tbl_tahun_ajaran` (
  `id` int(11) NOT NULL,
  `tahun_ajaran` varchar(50) NOT NULL DEFAULT '0',
  `info_ppdb` text NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `jadwal_ujian` date NOT NULL,
  `biaya_pendaftaran` varchar(50) NOT NULL DEFAULT '',
  `is_aktif` enum('Y','N') NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_tahun_ajaran`
--

INSERT INTO `tbl_tahun_ajaran` (`id`, `tahun_ajaran`, `info_ppdb`, `tanggal_mulai`, `tanggal_akhir`, `jadwal_ujian`, `biaya_pendaftaran`, `is_aktif`, `create_at`, `update_at`) VALUES
(1, '2022/2023', '', '2022-05-23', '2022-06-11', '2022-06-24', '250.000', 'N', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '2023/2024', '<p>Selamat datang di halaman informasi PPDB! Kami dengan bangga mengumumkan bahwa pendaftaran untuk tahun ajaran 2023/2024&nbsp;kini telah dibuka. Dapatkan semua informasi yang Anda butuhkan tentang prosedur pendaftaran, persyaratan, dan jadwal penting di sini. Mari bergabung dengan kami untuk pengalaman pendidikan yang penuh inspirasi dan prestasi.</p>\r\n', '2023-07-19', '2023-08-09', '2023-08-10', '450.000', 'N', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '2024/2025', '<p>Selamat datang di halaman informasi PPDB! Kami dengan bangga mengumumkan bahwa pendaftaran untuk tahun ajaran 2023/2024&nbsp;kini telah dibuka. Dapatkan semua informasi yang Anda butuhkan tentang prosedur pendaftaran, persyaratan, dan jadwal penting di sini. Mari bergabung dengan kami untuk pengalaman pendidikan yang penuh inspirasi dan prestasi.</p>\r\n', '2024-06-13', '2024-12-17', '2024-12-18', '400.000', 'Y', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_testimoni`
--

CREATE TABLE `tbl_testimoni` (
  `testimoni_id` int(11) NOT NULL,
  `testimoni_nama` varchar(30) DEFAULT NULL,
  `testimoni_isi` varchar(120) DEFAULT NULL,
  `testimoni_email` varchar(35) DEFAULT NULL,
  `testimoni_tanggal` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tulisan`
--

CREATE TABLE `tbl_tulisan` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) DEFAULT 0,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL DEFAULT 0,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_tulisan`
--

INSERT INTO `tbl_tulisan` (`tulisan_id`, `tulisan_judul`, `tulisan_isi`, `tulisan_tanggal`, `tulisan_kategori_id`, `tulisan_kategori_nama`, `tulisan_views`, `tulisan_gambar`, `tulisan_pengguna_id`, `tulisan_author`, `tulisan_img_slider`, `tulisan_slug`) VALUES
(20, 'SEJUMLAH PESERTA DIDIK SMAN 78 MASUK PTN MELALUI JALUR PRESTASI', '<p>Tahun Pelajaran 2018/2019 Sejumlah Peserta didik SMAN 78 Jakarta di terima di perguruan Tinggi Negeri melalui Jalur prestasi, diantaranya masuk melalui jalur Seleksi Nasional Perguruan tinggi Negeri (SNMPTN) berjumlah 58 siswa.</p>\r\n\r\n<p>Mereka merupakan putra putri terbaik yang memiliki prestasi akademik 40% terbaik di sekolah dan terseleksi melalui jalur raport tanpa test. Kampus yang bakal mereka tempati seperti di UI, ITB, UGM, UNJ dan lain sebagainya.</p>\r\n\r\n<p>Selain melalui jalur SNMPTN ada juga sebanyak 34 siswa dari SMAN 78 Jakarta juga diterima di jalur prestasi dan pemerataan kesempatan Belajar Universitas Indonesia (PPKB Paralel UI) yaitu salah satu jalur penerimaan yang di selenggarakan oleh UI yang menggunakan nilai raport tanpa test untuk siswa-siswi yang berminat melanjutkan pendidikan tingginya di Universitas Indonesia.</p>\r\n\r\n<p>Sedangkan 1 siswa SMAN 78 atas nama Rachmadana Fajri Majid juga merupakan salah satu siswa yang diterima di UI melalui jalur Talent Scouting, yaitu satu jalauryang diselenggarakan oleh kampus UI melalui jalur raport tanpa test untuk program Kleas Internasional.</p>\r\n\r\n<p>Satu hal lagi yang juga patut kita syukuri adalah Beberapa siswa SMAN 78 juga telah diterima di perguruan tinggi luar Negeri seperti Jepang, Kanada, dan belanda, baik melalaui jalur tes maupun beasiswa yang diselenggarakan oleh Pihak Universitas di Luar Negeri.</p>\r\n\r\n<p>Proses seleksi yang harus mereka lewati tidak hanya melalui nilai prestasi akademik tetapi juga prestasi non akademik, Kemampuan bahasa asing yang dibuktikan dengan sertifikat, penulisan Essay dan juga wawancara. Siswa-siswi tidak hanya berkompetisi dengan siswa dari dalam negeri saja tetapi mereka juga harus bersaing dengan pelajar seluruh dunia. Semoga sukses.</p>\r\n', '2020-02-05 09:24:42', 1, 'Pendidikan', 33, 'd0e9f3e6d69c183d76ee2e5a90224de3.png', 0, '', 0, 'sejumlah-peserta-didik-sman-78-masuk-ptn-melalui-jalur-prestasi'),
(22, 'UPACARA HARI LAHIR PANCASILA 1 JUNI DI SMAN 78 JAKARTA BERLANGSUNG KHIDMAD', '<p>Hari Sabtu, 1 Juni 2019 bertepatan dengan 27 Ramadhan 1440 H, SMA Negeri 78 Jakarta melaksanakan Upacara hari kelahiran Pancasila bertempat di lapangan sekolah.</p>\r\n\r\n<p>Ada yang menarik dari upacara kali ini karena pertama: bertepatan dengan bulan suci Ramadhan hari yang ke 27 dan beberapa guru maupun karyawan ada yang sudah pulang kampung halaman dalam menyambut hari raya Idul Fitri, kedua : Kepala sekolah meminta agar yang sudah pulang kampung ikut melaksanakan upacara di wilayah masing-masing dengan bergabung ke sekolah atau instansi terdekat.</p>\r\n\r\n<p>Mantap ternyata integritas tetap terjaga, anjuran dari Bapak Kepala Sekolah (Dr. Saryono, M.Si) dilaksanakan dengan penuh amanah terpantau beberapa guru dan karyawan SMAN 78 melaksanakan Upacara hari lahir pancasila di SMAN 6 Jogjakarta, SMAN 1 Gombong-jateng SMAN 2 PLG, SMAN 1 Leuwiliang Bogor, SMAN 1 Simo Boyolali, SMPN 1 Gombong, dan lain sebagainya. Laporan ini didapat dari bukti fisik berupa foto dan surat keterangan melaksanakan upacara yang ditandatangani oleh kepala sekolahnya.</p>\r\n\r\n<p>Mereka disambut dengan senang hati. Salah satu peserta upacara dari SMAN 78 Jakarta ( Ibu Yuliana Guru Kimia) yang upacara di SMAN 1 Simo Boyolali menuturkan &quot; Kami di sambut dengan sangat welcome, senang sekali rasanya&quot;. Di SMAN 78 Jakarta upacara juga berlangsung dengan khidmad, peserta upacara dari unsur pendidik, tenaga kependidikan dan peserta didik.</p>\r\n\r\n<p>Petugas pembina upacara Kepala Sekolah Dr. Saryono, Msi, petugas lainya dari unsur ekskul Paskib, Ekskul PKS dan Paduan Suara dengan menyanykan lagu Garuda pancasila dan Mars SMAN 78 Jakarta. Dalam sambutannya Kepala sekolah mengatakan &quot; Mari bersama-sama kita semua mengimplementasikan Pancasila dalam kehidupan sehari-hari sebagai wujud kecintaan kita pada NKRI dan Pancasila&quot;.</p>\r\n\r\n<p>&quot;Saya Indonesia&quot; peserta upacara menjawab&quot; Saya Pancasila &quot; kalimat penutup pembina upacara hari kelahiran Pancasila dan juga di akhiri dengan tepuk tangan seluruh peseta upacara. Sekian dan terima kasih.</p>\r\n', '2020-02-05 09:24:42', 3, 'Sains', 12, 'a49888c350ee1037ab856b95ac26aa03.jpg', 1, 'Muris Studio', 0, 'upacara-hari-lahir-pancasila-1-juni-di-sman-78-jakarta-berlangsung-khidmad'),
(23, 'PELEPASAN PESERTA DIDIK KELAS XII ANGKATAN KE- 42', '<p>Kegiatan Pelepasan Peserta didik Kelas XII anggkatan KE 42 di laksanakan di Hotel Pullman Jakarta tanggal 13 Mei 2019 dalam suasana Bulan Ramadhan 1440 H.</p>\r\n\r\n<p><br />\r\nMeskipun dilaksanakan pada bulan puasa acara tetap berlangsung kidmad dan lancar. Acara pelepasan ini di hadiri oleh Kepala Suku Dinas Pendidikan Wilayah Jakarta Barat 2 Ibu Urip Asih, M.Pd, Pengawas SMAN 78 Ibu Hj.Nurul Muftahidah,M.Pd, Komite sekolah, Perwakilan Ikatan Alumni Sekolah (IAS), guru purna bhakti, dan orang tua siswa yang sangat berbahagia melihat putra putrinya lulus dari jenjang SMA dengan prestasi yang membanggakan.</p>\r\n\r\n<p>Dalam Sambutannya Kepala SMAN 78 Jakarta Dr. Saryono, M.si Mengatakan bahwa &quot;stakesholder Sekolah harus mampu melayani sepenuh hati untuk mendulang prestasi dan menjaga Prestasi&quot;.</p>\r\n\r\n<p>Tahun ini (Tahun pelajaran 2018/2019) Kita patut bersyukur karena banyak prestasi yang bisa diraih oleh SMAN 78 diantaranya: 87 siswa mendapat nilai 100, rangking 5 besar UN tingkat DKI Jakarta untuk program Ilmu-ilmu Sosial. Acara Pelepasan kelas XII ini Juga dimeriahkan oleh penampilan Ekskul Paduan suara, Tari, Marawis dan solo vokal.</p>\r\n\r\n<p>Ada yang beda dari pelaksanaan pelepasan tahun ini yang biasanya diselenggarakan di lapangan sekolah kali ini dilaksanakan di luar sekolah, tentu kegiatan ini didukung oleh orang tua siswa, komite serta Ikatan Alumni Sekolah.</p>\r\n', '2020-02-05 09:24:42', 5, 'Penelitian', 16, '217410a33b775e40cbdc57e079ce2b4c.jpg', 1, 'Muris Studio', 0, 'pelepasan-peserta-didik-kelas-xii-angkatan-ke--42'),
(25, 'Membangun Mutu Pendidikan Melalui Kemitraan Sekolah', '<p>Lima hari di Malinau memberikan pengalaman yg menorehkan warna dalam hidupku.<br />\r\nTugas yg diberikan Kemendikbud satu persatu aku tunaikan. Hari pertama kunjungan ke SMAN 1 mendapat sambutan yg hangat penuh persahabatan, didahului upacara bendara dan tarian khas 4 budaya: Tidung,Bugis,Dayak Lundayeh,dan Dayak Kenya. Anak2 yg gagah dan cantik, menyajikan hiburan penuh kegembiraan.</p>\r\n\r\n<p>Hari kedua ke SMAN 3 dan hari ketiga ke SMAN 8 hampir sama tetapi tanpa tarian khas etnis Tidung dan Bugis. Namun tidak mengurangi kesemaraan seremonial pagi itu.</p>\r\n\r\n<p>Segenap warga sekolah tumpah di lapangan merasakan kegembiraan. Supervisi thd 2 guru matematika di dua sekolah yg berbeda memberi informasi bahwa pemerintah tidak boleh merasa lelah untuk terus memberi penguatan tentang konsep pembelajaran abad 21 dg dimensi :4C,Literasi dan Character Building.</p>\r\n\r\n<p>Di hari terakhir supervisi guru matemtika barulah saya mendapakan seorang guru muda, energik,suara lantang, menguasai konsep dan melakukan pendekatan pembelajaran yg mencerdaskan, membangun konsep, dg alat bantu yg kreatif, suasana kelas hidup, dan anak2 bahagia mengikuti pelajaran. Panggilan singkat guru muda tsb Pak Tri (30 ) terlihat menerapkan metode 4C, mengajak anak browsing (literasi), dan mengajak siswa bersyukur atas anugrah yg diberikan Tuhan ( membangun karakter ).</p>\r\n\r\n<p>Pemerintah melalui berbagai program harus terus membangun kompetensi profesional guru. Fokus penguatan tetap metode pada metide pembelajaran abad 21. Kurikulum 2013 dg pendekatan pembelajaran abad 21 diharapkan dpt mencerdaskan anak2 Indonesia.</p>\r\n', '2020-02-05 09:24:42', 1, 'Pendidikan', 36, '67b03f7b75700396f6ca684c052c83a9.jpg', 0, '', 0, 'membangun-mutu-pendidikan-melalui-kemitraan-sekolah'),
(27, 'Penerimaan Peserta Didik Baru PPDB 2024', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br />\r\n&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2024-01-02 08:31:44', 1, 'Pendidikan', 34, '70abd7e18c7338aecb125b35a7c62881.jpeg', 0, '', 0, 'penerimaan-peserta-didik-baru-ppdb-2024');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_video`
--

CREATE TABLE `tbl_video` (
  `id_video` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `kode_video` varchar(100) NOT NULL,
  `judul_video` varchar(150) NOT NULL,
  `deskripsi_video` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_video`
--

INSERT INTO `tbl_video` (`id_video`, `id_mapel`, `kelas_id`, `kode_video`, `judul_video`, `deskripsi_video`) VALUES
(2, 3, 2, 'pp1kLRmBabs', 'Materi IPS Kelas 7 Semester Genap Bab III', 'Materi IPS Kelas 7 Semester Genap Bab III'),
(3, 3, 1, 'z2VF7j2RBzM', 'Materi IPS Kelas 8 k13 (Perlawanan Terhadap Kolonialisme dan Imperialisme) Part 1', 'Materi IPS Kelas 8 k13 (Perlawanan Terhadap Kolonialisme dan Imperialisme) Part 1\r\n\r\n'),
(4, 3, 2, 'lIQBbvBZcqk', 'MATERI IPS MANUSIA DAN LINGKUNGAN, KELAS 4 TEMA 9 SUBTEMA 1', 'MATERI IPS MANUSIA DAN LINGKUNGAN, KELAS 4 TEMA 9 SUBTEMA 1\r\n'),
(5, 3, 3, 'DNoj82nGmK8', 'Materi IPS Kelas 4 SD Tema 9 Subtema 2. Pemanfaatan Sumber Daya Alam', 'Materi IPS Kelas 4 SD Tema 9 Subtema 2. Pemanfaatan Sumber Daya Alam'),
(6, 3, 3, 'kdmnP7Me0xg', 'Video Pembelajaran Kelas 8 K13 - IPS - Perubahan Masyarakat Indonesia pada Masa Penjajahan', 'Video Pembelajaran Kelas 8 K13 - IPS - Perubahan Masyarakat Indonesia pada Masa Penjajahan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_sekolah`
--
ALTER TABLE `data_sekolah`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `profil_sekolah`
--
ALTER TABLE `profil_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  ADD PRIMARY KEY (`agenda_id`);

--
-- Indeks untuk tabel `tbl_album`
--
ALTER TABLE `tbl_album`
  ADD PRIMARY KEY (`album_id`),
  ADD KEY `album_pengguna_id` (`album_pengguna_id`);

--
-- Indeks untuk tabel `tbl_files`
--
ALTER TABLE `tbl_files`
  ADD PRIMARY KEY (`file_id`);

--
-- Indeks untuk tabel `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`galeri_id`),
  ADD KEY `galeri_album_id` (`galeri_album_id`),
  ADD KEY `galeri_pengguna_id` (`galeri_pengguna_id`);

--
-- Indeks untuk tabel `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`guru_id`);

--
-- Indeks untuk tabel `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  ADD PRIMARY KEY (`inbox_id`);

--
-- Indeks untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indeks untuk tabel `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`kelas_id`);

--
-- Indeks untuk tabel `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`komentar_id`),
  ADD KEY `komentar_tulisan_id` (`komentar_tulisan_id`);

--
-- Indeks untuk tabel `tbl_log_aktivitas`
--
ALTER TABLE `tbl_log_aktivitas`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `log_pengguna_id` (`log_pengguna_id`);

--
-- Indeks untuk tabel `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indeks untuk tabel `tbl_orang_tua`
--
ALTER TABLE `tbl_orang_tua`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_pekerjaan`
--
ALTER TABLE `tbl_pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_pendaftaran`
--
ALTER TABLE `tbl_pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`pengguna_id`);

--
-- Indeks untuk tabel `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD PRIMARY KEY (`pengumuman_id`);

--
-- Indeks untuk tabel `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  ADD PRIMARY KEY (`pengunjung_id`);

--
-- Indeks untuk tabel `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_tahun_ajaran`
--
ALTER TABLE `tbl_tahun_ajaran`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `tbl_testimoni`
--
ALTER TABLE `tbl_testimoni`
  ADD PRIMARY KEY (`testimoni_id`);

--
-- Indeks untuk tabel `tbl_tulisan`
--
ALTER TABLE `tbl_tulisan`
  ADD PRIMARY KEY (`tulisan_id`),
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`),
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`);

--
-- Indeks untuk tabel `tbl_video`
--
ALTER TABLE `tbl_video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_sekolah`
--
ALTER TABLE `data_sekolah`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `profil_sekolah`
--
ALTER TABLE `profil_sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  MODIFY `agenda_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_album`
--
ALTER TABLE `tbl_album`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_files`
--
ALTER TABLE `tbl_files`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `galeri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `guru_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  MODIFY `inbox_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `kelas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `komentar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_log_aktivitas`
--
ALTER TABLE `tbl_log_aktivitas`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_orang_tua`
--
ALTER TABLE `tbl_orang_tua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_pekerjaan`
--
ALTER TABLE `tbl_pekerjaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tbl_pendaftaran`
--
ALTER TABLE `tbl_pendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `pengguna_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  MODIFY `pengumuman_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  MODIFY `pengunjung_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1012;

--
-- AUTO_INCREMENT untuk tabel `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tbl_tahun_ajaran`
--
ALTER TABLE `tbl_tahun_ajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_testimoni`
--
ALTER TABLE `tbl_testimoni`
  MODIFY `testimoni_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_tulisan`
--
ALTER TABLE `tbl_tulisan`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `tbl_video`
--
ALTER TABLE `tbl_video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
