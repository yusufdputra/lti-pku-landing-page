-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 08 Mar 2022 pada 11.28
-- Versi server: 10.1.43-MariaDB-cll-lve
-- Versi PHP: 7.3.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ltipekan_database`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akses`
--

CREATE TABLE `akses` (
  `id_akses` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL,
  `status` set('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akses`
--

INSERT INTO `akses` (`id_akses`, `username`, `nama`, `password`, `status`) VALUES
(1, 'admin1', 'Admin 1', '$2y$10$jcMNEpWBWs7rRGXGHwJBJevCBOU42Jhs2lNotttGnCTrumWEX.5ma', '1'),
(2, 'admin2', 'Admin 2', '$2y$10$1FMrL21wxBIDncG6ZvcSbe5fbmat5p7rh7ygN0V.uqAhP3EsbrMai', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `content_page`
--

CREATE TABLE `content_page` (
  `id_content_page` int(11) NOT NULL,
  `page` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `latest_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `content_page`
--

INSERT INTO `content_page` (`id_content_page`, `page`, `content`, `latest_update`) VALUES
(1, 'page-about-lti', '&lt;p&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;&lt;span style=&quot;color: rgb(0, 0, 255); font-size: 24px;&quot;&gt;ABOUT LTI&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;LTI merupakan salah satu institusi resmi penyelenggara tes TOEFL ITP dengan authorisasi resmi dari IIEF sebagai perwakilan ETS (Educational Testing Service, Pemilik Hak Cipta TOEFL berpusat di New Jersey, USA) untuk Indonesia.&lt;/p&gt;&lt;p&gt;Tidak hanya sebagai penyelenggara tes TOEFL ITP, LTI juga telah mendapatkan izin resmi sebagai penyelenggara tes IELTS setelah meraih authorisasi sebagai Approved Offsite Test Venue dari IDP Education Australia yang diwakili oleh IDP South Jakarta ID-017.&lt;/p&gt;&lt;p&gt;Disamping itu, LTI juga menyelenggarakan program Test Preparation untuk menghadapi tes TOEFL ITP/IBT, TOEIC, dan IELTS dan telah banyak membantu para akademisi untuk meraih beasiswa dan melanjutkan studi ke jenjang S1, S2, dan S3 baik di dalam maupun di luar negeri. Selain untuk keperluan akademis LTI telah terbukti dapat membantu para profesional dalam menempuh dan meningkatkan jenjang karir mereka di dunia kerja.&lt;/p&gt;&lt;p&gt;Selain perogram Test Preparation, LTI juga memberikan pelayanan pembelajaran Bahasa Inggris secara umum seperti kelas conversation, General English, dan English for Specific Purposes dari awal berdirinya LTI tanggal 11 September 2000 hingga saat ini. Bahkan hingga kini LTI jua telah banyak memberikan pelatihan Bahasa Inggris untuk instansi pemerintah dan perusahaan swasta seperti PERTAMINA, BUCKER HUGHES, RAPP, dan lain-lain.&amp;nbsp; &amp;nbsp;&lt;br&gt;&lt;/p&gt;', '2019-10-30 14:35:46'),
(2, 'page-programs-conver', '&lt;p&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;&lt;span style=&quot;color: rgb(0, 0, 255); font-size: 24px;&quot;&gt;CONVERSATION&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size: 18px;&quot;&gt;Dalam berbahasa Inggris berlaku prinsip &quot;bisa karena biasa&quot; berlatih membuat sempurna. Namun dalam praktknya, begitu banyak yang sudah memiliki kemampuan dasar yang baik untuk berbicara dalam bahasa Inggris namun tidak bisa mempraktikkannya. Program ini membantu para siswa yang sudah memiliki dasar berbahasa Inggris untuk mempraktikkan dan mengembangkan kemampuan bertutur dalam Bahasa Inggris. Difasilitasi oleh instruktur yang &#039;talkative&#039; dan ramah, materi pengajaran yang &#039;student-centered&#039;, serta fasilitas multimedia yang memadai, kelas percakapan Bahasa Inggris tidak pernah semenyenangkan ini.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;&lt;span style=&quot;color: rgb(0, 0, 255); font-size: 24px;&quot;&gt;&lt;/span&gt;&lt;/span&gt;&lt;br&gt;&lt;/p&gt;', '2020-07-03 15:30:01'),
(3, 'page-programs-general', '&lt;p&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;&lt;span style=&quot;color: rgb(0, 0, 255); font-size: 24px;&quot;&gt;GENERAL&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;text-align: justify; &quot;&gt;&lt;span style=&quot;font-size: 18px;&quot;&gt;Dalam era persaingan global seperti saat ini, penguasaan Bahasa Inggris membuka peluang lebih baik untuk sukses dalam pendidikan, bisnis dan karir. General English Class ini didesain untuk membangun kemampuan dasar siswa dalam semua aspek utama Bahasa Inggris: kosa kata, mendengarkan, berbicara, membaca, dan menulis. Dengan difasilitasi instruktur yang berpengalaman dan metode belajar yang berpusat pada siswa, bukan instruktur, kelas ini adalah awal yang baik untuk membangun fondasi kemampuan Bahasa Inggris siswa.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;&lt;span style=&quot;color: rgb(0, 0, 255); font-size: 24px;&quot;&gt;&lt;/span&gt;&lt;/span&gt;&lt;br&gt;&lt;/p&gt;', '2020-07-03 15:29:47'),
(4, 'page-programs-testing', '&lt;p&gt;&lt;span style=&quot;font-size: 18px; color: rgb(0, 0, 255); font-weight: bold;&quot;&gt;TOEFL Practice Online&lt;/span&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 18px;&quot;&gt;TOEFL Practice Online (TPO) merupakan simulasi tes TOEFL IBT resmi dengan menggunakan soal-soal yang pernah dipakai untuk&amp;nbsp;&lt;/span&gt;&lt;span style=&quot;font-size: 18px;&quot;&gt;tes TOEFL IBT sebelumnya. Dengan mengikuti TPO, peserta dapat merasakan pengalaman melakukan tes TOEFL IBT, dan secara akurat memprediksi kemampuan mereka sebelum melakukan test TOEFL IBT yang sebenarnya. Peserta akan menerima hasil tes&amp;nbsp;&lt;/span&gt;&lt;span style=&quot;font-size: 18px;&quot;&gt;dalam 24 jam dan akan menerima berbagai masukan yang dapat digunakan untuk memperbaiki kekurangan yang dimiliki.&lt;/span&gt;&lt;/p&gt;', '2020-08-26 09:46:08'),
(5, 'page-preparations-toefl', '&lt;p&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;&lt;span style=&quot;color: rgb(0, 0, 255); font-size: 24px;&quot;&gt;TOEFL&amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;b&gt;&lt;span style=&quot;font-size: 18px;&quot;&gt;Preparation Course&lt;/span&gt;&lt;/b&gt;&lt;/p&gt;&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size: 18px;&quot;&gt;TOEFL saat ini digunakan secara luas sebagai syarat wajib untuk berbagai program beasiswa serta sebagai syarat penerimaan dan kelulusan dipelbagai perguruan tinggi favorit. Skor TOEFL yang tinggi adalah batu loncatan untuk menempuh pendidikan yang lebih baik. Dengan pengalaman belasan tahun, metode dan strategi pembelajaran yang aplikatif serta soal latihan bermutu dan berstandar Internasional, Program TOEFL Preparation Class LTI telah terbukti membantu ribuan siswa untuk mendapatkan skor TOEFL yang mereka targetkan.&lt;/span&gt;&lt;/p&gt;', '2020-07-07 09:57:26'),
(6, 'page-preparations-toeic', '&lt;p&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;&lt;span style=&quot;color: rgb(0, 0, 255); font-size: 24px;&quot;&gt;ESP&amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;b&gt;&lt;span style=&quot;font-size: 18px;&quot;&gt;English for Specific Purposes&lt;/span&gt;&lt;/b&gt;&lt;/p&gt;&lt;p style=&quot;text-align: justify; &quot;&gt;&lt;span style=&quot;font-size: 18px;&quot;&gt;Bagi para profesional, kecakapan berbahasa Inggris adalah bekal untuk menggapai karir yang diinginkan. Kelas English for Specific Purposes ini dirancang khusus bagi mereka para profesional yang sudah memiliki kemampuan dasar bahasa Inggris yang ingin meningkatkan kemampuan penggunaan bahasa Inggris mereka. Materi ajar akan disesuaikan secara eksklusif dengan bidang profesi dan target yang ingin dicapai oleh siswa. Tersedia berbagai jenis sub-program seperti English for Nursing, English for Hotel, English for Business, Public Speaking, Business Correspondences, dan English for Academic Purposes.&lt;/span&gt;&lt;/p&gt;', '2020-07-04 09:30:05'),
(7, 'page-preparations-ielts', '&lt;p&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;&lt;span style=&quot;color: rgb(0, 0, 255); font-size: 24px;&quot;&gt;IELTS&amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;span style=&quot;font-size: 18px;&quot;&gt;&lt;b&gt;Preparation Course&lt;/b&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;text-align: justify; &quot;&gt;&lt;span style=&quot;font-size: 18px;&quot;&gt;LTI Pekanbaru sebagai &lt;b&gt;&lt;i&gt;Official IELTS off-site test centre&lt;/i&gt;&lt;/b&gt; memiliki program persiapan tes IELTS yang telah membantu banyak siswa mengahadapi test ini.&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size: 18px;&quot;&gt;&lt;span style=&quot;font-size: 18px;&quot;&gt;Dalam persiapan IELTS akan diarahkan untuk mempelajari format ujian, tanya jawab, berbagai tipe soal pada ujian IELTS dan meningkatkan kemampuan listening, reading, writing, speaking dan grammar untuk meraih nilai band yang dibutuhka&lt;/span&gt;n.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;&lt;span style=&quot;color: rgb(0, 0, 255); font-size: 24px;&quot;&gt;&lt;/span&gt;&lt;/span&gt;&lt;br&gt;&lt;/p&gt;', '2020-07-07 09:58:25'),
(8, 'page-preparations-ibt', '&lt;p&gt;&lt;span style=&quot;font-size: 24px; color: rgb(0, 0, 255); font-weight: bold;&quot;&gt;TOEIC Prediction Test&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;color: rgba(0, 0, 0, 0.87); font-size: 18px; background-color: rgb(250, 250, 250);&quot;&gt;Para profesional dituntut untuk terus mengembangkan kemampuan dan keahlian mereka, termasuk dalam kemampuan berbahasa Inggris. Selama lebih dari 30 tahun tes TOEIC (Test of English for International Communication) sudah digunakan sebagai standar untuk mengukur kemampuan berbahasa Inggris di lingkungan kerja. Secara spesifik, tes TOEIC dapat digunakan sebagai persyaratan rekrutmen calon karyawan, tes kenaikan jabatan, serta evaluasi dan klasifikasi karyawan. TOEIC Prediction Test membantu peserta untuk memprediksi skor TOEIC mereka sebelum melakukan tes TOEIC sebenarnya.&lt;/span&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;&lt;span style=&quot;color: rgb(0, 0, 255); font-size: 24px;&quot;&gt;&lt;br&gt;&lt;/span&gt;&lt;/span&gt;&lt;br&gt;&lt;/p&gt;', '2020-08-26 09:40:36'),
(9, 'page-partnerships', '&lt;p&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;&lt;span style=&quot;color: rgb(0, 0, 255); font-size: 24px;&quot;&gt;OUR PARTNER&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;http://ltipekanbaru.com/assets/img/content/5efff2e3583e2_thumb.jpg&quot; style=&quot;width: 923.642px; height: 616.531px;&quot;&gt;&lt;span style=&quot;font-weight: bolder;&quot;&gt;&lt;span style=&quot;color: rgb(0, 0, 255); font-size: 24px;&quot;&gt;&lt;br&gt;&lt;/span&gt;&lt;/span&gt;&lt;br&gt;&lt;/p&gt;', '2020-07-07 10:04:07'),
(10, 'page-careers', '&lt;p style=&quot;text-align: center; &quot;&gt;&lt;span style=&quot;font-size: 36px; color: rgb(0, 0, 255); font-weight: bold;&quot;&gt;GALLERY&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center; &quot;&gt;&lt;span style=&quot;font-size: 24px; color: rgb(0, 0, 255); font-weight: bold;&quot;&gt;&lt;br&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;http://ltipekanbaru.com/assets/img/content/5f4615427afa7_thumb.jpg&quot; style=&quot;width: 100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;http://ltipekanbaru.com/assets/img/content/5f4611a8ac3f9_thumb.jpg&quot; style=&quot;width: 100%;&quot;&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;http://ltipekanbaru.com/assets/img/content/5f4614c35e205_thumb.jpg&quot; style=&quot;width: 100%;&quot;&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;http://ltipekanbaru.com/assets/img/content/5f4614d7a3f2b_thumb.jpg&quot; style=&quot;width: 100%;&quot;&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;http://ltipekanbaru.com/assets/img/content/5f4614e9c3f48_thumb.jpg&quot; style=&quot;width: 100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;', '2020-08-26 15:06:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `courses`
--

CREATE TABLE `courses` (
  `id_courses` int(11) NOT NULL,
  `courses` varchar(64) NOT NULL,
  `desc_courses` varchar(256) NOT NULL,
  `bg_image` varchar(256) NOT NULL,
  `latest_update` datetime NOT NULL,
  `wa_message` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `courses`
--

INSERT INTO `courses` (`id_courses`, `courses`, `desc_courses`, `bg_image`, `latest_update`, `wa_message`) VALUES
(1, 'SIMULASI IELTS', 'Program simulasi IELTS membantu peserta mengetahui kemampuan IELTS sebelum melakukan tes IELTS yang sebenarnya', '5c9cf0a5b3c01.jpg', '2020-06-10 15:18:39', 'Saya tertarik dengan program SIMULASI IELTS'),
(2, 'TOEFL PREPARATION CLASS', 'Program TOEFL CLASS LTI telah terbukti membantu ribuan siswa untuk mendapatkan skor TOEFL yang mereka targetkan.', '5c9cf0c289fb7.jpg', '2019-03-28 23:05:22', ''),
(3, 'CONVERSATION CLASS', 'Program ini membantu para siswa yang sudah memiliki dasar berbahasa inggris untuk mempraktikkan dan mengembangkan kemampuan bertutur dalam bahasa inggris.', '5c9cf0d08d0e7.jpg', '2019-03-28 23:05:36', ''),
(4, 'GENERAL ENGLISH CLASS', 'General English Class ini didesain untuk membangun kemampuan dasar siswa dalam semua aspek utama bahasa inggris: kosa kata, mendengarkan, berbicara, membaca, dan menulis.', '5c9cf0dd16980.jpg', '2019-03-28 23:05:49', ''),
(5, 'ENGLISH FOR SPECIFIC PURPOSE', 'Kelas English for Spesific Purposes ini dirancang khusus bagi mereka para profesional yang ingin meningkatkan kemampuan penggunaan bahasa inggris mereka.', '5c9cf0eb491bb.jpg', '2019-03-28 23:06:03', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `nama_perusahaan` varchar(100) NOT NULL,
  `moto` varchar(100) NOT NULL,
  `nomor_telp` varchar(15) NOT NULL,
  `nomor_hp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat1` varchar(250) NOT NULL,
  `alamat2` varchar(250) NOT NULL,
  `instagram` varchar(250) NOT NULL,
  `facebook` varchar(250) NOT NULL,
  `twitter` varchar(250) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `latest_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id_profil`, `nama_perusahaan`, `moto`, `nomor_telp`, `nomor_hp`, `email`, `alamat1`, `alamat2`, `instagram`, `facebook`, `twitter`, `logo`, `latest_update`) VALUES
(1, 'LTI Group Pekanbaru', 'Rise & shine with us. <br> Authorized Tes Center. <br> TOEFL/TOEIS/IELTS', '0761885041', '6282388355679', 'info.ltipekanbaru@yahoo.com', 'Jl. Ahmad Yani, No. 132B Pekanbaru ', 'Jl. Rajawali Sakti, No. R11 Komplek Royal Platinum Pekanbaru', 'https://www.instagram.com/ltigroupofficial/', 'https://id-id.facebook.com/pages/category/Organization/LTI-Pekanbaru-247097957837/', 'https://twitter.com/ltipekanbaru', '5c74b959cb6a4_thumb.png', '2021-02-15 11:29:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `promo`
--

CREATE TABLE `promo` (
  `id_promo` int(11) NOT NULL,
  `img_promo` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `promo`
--

INSERT INTO `promo` (`id_promo`, `img_promo`) VALUES
(28, '61d3f4cd71b32.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `schedule_toefl`
--

CREATE TABLE `schedule_toefl` (
  `id_schedule` int(11) NOT NULL,
  `bulan` varchar(64) NOT NULL,
  `tanggal1` date NOT NULL,
  `tanggal2` date NOT NULL,
  `tanggal3` date NOT NULL,
  `latest_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `schedule_toefl`
--

INSERT INTO `schedule_toefl` (`id_schedule`, `bulan`, `tanggal1`, `tanggal2`, `tanggal3`, `latest_update`) VALUES
(1, 'jan', '2022-01-08', '2022-01-22', '0000-00-00', '2022-01-04 14:23:42'),
(2, 'feb', '2022-02-05', '2022-02-19', '0000-00-00', '2022-01-04 14:24:19'),
(3, 'mar', '2022-03-05', '2022-03-19', '0000-00-00', '2022-01-04 14:25:07'),
(4, 'apr', '2022-04-02', '2022-04-23', '0000-00-00', '2022-01-04 14:25:49'),
(5, 'mei', '2022-05-28', '0000-00-00', '0000-00-00', '2022-01-04 14:26:33'),
(6, 'jun', '2022-06-04', '2022-06-18', '0000-00-00', '2022-01-04 14:27:01'),
(7, 'jul', '2022-07-02', '2022-07-16', '0000-00-00', '2022-01-04 14:27:39'),
(8, 'agu', '2022-08-06', '2022-08-20', '0000-00-00', '2022-01-04 14:28:22'),
(9, 'sep', '2022-09-03', '2022-09-17', '0000-00-00', '2022-01-04 14:28:53'),
(10, 'okt', '2022-10-01', '2022-10-15', '2022-10-29', '2022-01-04 14:30:13'),
(11, 'nov', '2022-11-12', '2022-11-26', '0000-00-00', '2022-01-04 14:31:06'),
(12, 'des', '2022-12-10', '2022-12-24', '0000-00-00', '2022-01-04 14:31:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimonial`
--

CREATE TABLE `testimonial` (
  `id_testimonial` int(11) NOT NULL,
  `testimonial` varchar(512) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `foto` varchar(256) NOT NULL,
  `warna_bg` varchar(128) NOT NULL,
  `latest_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `testimonial`
--

INSERT INTO `testimonial` (`id_testimonial`, `testimonial`, `nama`, `foto`, `warna_bg`, `latest_update`) VALUES
(1, 'Alhamdulillah berkat private TOEFL di LTI, lulus di Universitas Indonesia (UI) terima kasih banyak udah banyak bantuin.', 'Nurul Aulia', '5c98562c40988.jpeg', 'light-green darken-1', '2019-03-25 11:16:44'),
(2, 'Terimakasih ilmu dan bimbingannya selama LES di LTI, Saya lulus S2 Universitas Indonesia.', 'Deasy Stefani', '5c98564462c9f.jpeg', 'amber lighten-1', '2019-07-12 14:41:05'),
(3, 'Hello i just wanted to let you know that i got my test results today and i got a total 90. sadly, the grades are not equal. I got a 28 on my speaking and writing. But a 16 on my reading and a 18 on my listening. dad said we will take another test in September.', 'Maria Rossa', '5c9856537b7b9.jpeg', 'blue-grey lighten-3', '2019-03-25 11:17:23'),
(4, 'Kursus di LTI yg dibimbing oleh Mrs.Delvia. Dengan bimbingannya, akhirnya saya bisa mendapatkan hasil IELTS yang bagus sekali, saya membutuhkan nya untuk exchange program di UI, bener2 sangat membantu ikut kursus di LTI.', 'Raka Seto Pratama', '5c98566348d78.jpeg', 'purple lighten-3', '2019-03-25 11:17:39'),
(5, 'Got many new knowledge from null, dibimbing sama Mr Rizki, beliau masternya well organized materi dan tes harinnya, dalam waktu singkat progress nya kerasa walaupun bukan usia fresh graduated lagi.', 'Rizkika', '5c9856722a5e5.jpeg', 'blue lighten-2', '2019-03-25 11:17:54'),
(6, 'Alhamdulillah nilai TOEIC saya di ITC mendapat 740, diatas syarat 700, waktu tes di LTI sempat 820, tapi Alhamdulillah 740 sudah diatas syarat, terimakasih banyak Mr. Rizki.', 'Ivan', '5c985680811a3.jpeg', 'teal lighten-3', '2019-03-25 11:18:08'),
(7, 'I would like to thank you for giving all knowledge you have to help me reach my toefl score goal, i just had the post-test last friday. it came out well. it went from 573 to 603, thak you so much LTI.', 'Dea', '5cd3125c2cfd3.png', 'orange lighten-3', '2019-05-09 00:31:08'),
(8, 'Alhamdulillah, saya, anuardi, sama wisnu diterima masuk sispemmen, terimakasih atas pembelajaran toeflnya, sekarang kami sudah di lembang bandung.', 'Muji Polair', '5cd3e8e3136aa.png', 'red lighten-2', '2019-05-09 15:46:27'),
(9, 'I got 6,5 overall in my last IELTS test. Thanks ya, LTI assisted me very well. And thank you Mr. Rizki for your guidance.', 'Agil', '5d2be34406e1b.jpeg', 'pink lighten-3', '2019-07-15 09:21:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `token`
--

CREATE TABLE `token` (
  `id_token` int(11) NOT NULL,
  `token` varchar(16) NOT NULL,
  `id_akses` int(11) NOT NULL,
  `tgl_token` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `token`
--

INSERT INTO `token` (`id_token`, `token`, `id_akses`, `tgl_token`) VALUES
(18, '9yPfIGlMU4', 1, '2019-05-07 23:14:50'),
(19, '5A4ST37BjZ', 2, '2019-05-07 23:27:43'),
(20, '5w9cmW0Ee0', 1, '2019-05-07 23:27:56'),
(21, '9TybsBOaHt', 2, '2019-05-07 23:28:06'),
(22, 'ngeoHhbL0z', 1, '2019-05-07 23:48:13'),
(23, 'UU02pnHtCA', 1, '2019-05-08 23:29:30'),
(24, 'zvB2zxOyhf', 2, '2019-05-08 23:29:52'),
(25, 'xJEvOtFZ6U', 1, '2019-05-09 14:16:04'),
(26, 'PUPPNKqgnr', 1, '2019-05-09 14:41:47'),
(27, '3PqGCyRQOQ', 1, '2019-05-09 15:06:22'),
(28, 'mIa8pBUqT0', 1, '2019-05-09 15:13:48'),
(29, 'gOeoXjjWh8', 2, '2019-05-09 15:20:52'),
(30, 'uYLUXTSPkZ', 1, '2019-05-09 15:27:51'),
(31, 'fJTTd0Xdgu', 1, '2019-05-13 02:04:23'),
(32, 'WuS9UAXRPo', 1, '2019-05-19 04:43:59'),
(33, 'fV0QttUZn0', 1, '2019-05-19 04:47:25'),
(34, '0MSsu0C65m', 1, '2019-06-25 15:02:31'),
(35, 'xPulR0ixDe', 1, '2019-06-25 16:56:12'),
(36, '8IpB1NACd6', 1, '2019-07-01 15:09:03'),
(37, 'XTEnbdPBGB', 1, '2019-07-02 18:08:51'),
(38, 'AE7KV9Fnr9', 1, '2019-07-08 09:23:55'),
(39, 'YXrwDW80U2', 1, '2019-07-08 12:46:05'),
(40, '3u7xI7nlsU', 1, '2019-07-12 14:40:06'),
(41, '4A5wBKi07o', 1, '2019-07-15 09:19:19'),
(42, 'B9ECjdzMKG', 1, '2019-07-15 23:30:37'),
(43, 'nO1Z2iVQ8P', 1, '2019-07-16 14:11:15'),
(44, 'ZZaImuBOAB', 1, '2019-07-17 18:51:12'),
(45, 'R2sJuamtmc', 1, '2019-07-30 17:13:43'),
(46, '2GWiY08l9K', 1, '2019-08-01 23:15:00'),
(47, '2ylTjF1chV', 1, '2019-08-05 23:44:38'),
(48, 'KxjB3eHptT', 1, '2019-08-24 10:06:42'),
(49, 'MBp0mNxvoH', 1, '2019-08-26 09:13:27'),
(50, '0dCT4ZHvDe', 1, '2019-09-17 12:28:39'),
(51, 'VRqkapsYu1', 1, '2019-10-30 10:42:37'),
(52, 'ZnQQX80S7W', 1, '2019-10-30 14:17:05'),
(53, 'mRH3fFxqn9', 1, '2019-11-08 14:01:47'),
(54, '4osToDZjw3', 1, '2019-11-18 10:31:16'),
(55, 'aoJYkpSxhv', 1, '2019-11-19 13:55:06'),
(56, '2KDCu1bVQz', 2, '2019-12-27 19:09:58'),
(57, 'meLXlWUn75', 1, '2020-02-04 13:03:59'),
(58, 'YaqEc0ndCm', 1, '2020-02-04 13:26:53'),
(59, 'yZhDBIzS4q', 1, '2020-02-11 13:26:53'),
(60, 'qrsQ3Q1wme', 1, '2020-02-22 09:43:10'),
(61, 'h6viUYeAVF', 2, '2020-03-11 14:37:26'),
(62, 'rZr90yujOk', 2, '2020-03-12 15:40:47'),
(63, 'kYUSTPhQtT', 1, '2020-06-10 09:42:28'),
(64, '5jdhRKsaur', 1, '2020-06-10 09:43:24'),
(65, 'so7Lp33eQ0', 1, '2020-06-10 09:44:08'),
(66, 'tQn1kGvEJh', 1, '2020-06-10 15:17:50'),
(67, '0TxWI8Wp4g', 1, '2020-07-03 15:14:37'),
(68, 'ofkgKU3it6', 1, '2020-07-04 09:19:24'),
(69, 'TYcwQoFsna', 1, '2020-07-07 09:56:11'),
(70, 'N7fZ1UA0vn', 1, '2020-08-26 09:19:54'),
(71, 'b2gi4iYVf5', 1, '2020-08-26 14:13:01'),
(72, 'VGkWqmbt2W', 1, '2021-02-15 09:33:53'),
(73, 'e0gFMUg7Oh', 1, '2021-02-15 09:41:43'),
(74, 'lI4Ku1AW0j', 1, '2022-01-04 14:11:55'),
(75, 'Mqq0U94mai', 1, '2022-01-04 14:21:18'),
(76, 'oQMPjQxB6s', 1, '2022-03-08 09:06:45'),
(77, 'uIXkcI1xKm', 1, '2022-03-08 09:44:10');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akses`
--
ALTER TABLE `akses`
  ADD PRIMARY KEY (`id_akses`);

--
-- Indeks untuk tabel `content_page`
--
ALTER TABLE `content_page`
  ADD PRIMARY KEY (`id_content_page`);

--
-- Indeks untuk tabel `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id_courses`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indeks untuk tabel `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id_promo`);

--
-- Indeks untuk tabel `schedule_toefl`
--
ALTER TABLE `schedule_toefl`
  ADD PRIMARY KEY (`id_schedule`);

--
-- Indeks untuk tabel `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id_testimonial`);

--
-- Indeks untuk tabel `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`id_token`),
  ADD KEY `id_akses` (`id_akses`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akses`
--
ALTER TABLE `akses`
  MODIFY `id_akses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `content_page`
--
ALTER TABLE `content_page`
  MODIFY `id_content_page` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `courses`
--
ALTER TABLE `courses`
  MODIFY `id_courses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `promo`
--
ALTER TABLE `promo`
  MODIFY `id_promo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `schedule_toefl`
--
ALTER TABLE `schedule_toefl`
  MODIFY `id_schedule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id_testimonial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `token`
--
ALTER TABLE `token`
  MODIFY `id_token` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `token`
--
ALTER TABLE `token`
  ADD CONSTRAINT `token_ibfk_1` FOREIGN KEY (`id_akses`) REFERENCES `akses` (`id_akses`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
