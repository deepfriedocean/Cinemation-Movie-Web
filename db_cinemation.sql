-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2023 at 03:21 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cinemation`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `id_admin` int(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id_admin`, `username`, `email`, `password`) VALUES
(1, 'zhafran', 'zhafran@gmail.com', 'zhafran123'),
(2, 'Fauzan Azima', 'fauzanazima@gmail.com', 'fauzanazima123'),
(3, 'fani', 'fani@gmail.com', 'fani123');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `username`, `email`, `password`) VALUES
(3, 'fauzan', 'fauzan@gmail.com', '123'),
(7, 'fauzan azima', 'fauzanazima@gmail.com', '12345'),
(8, 'kiky', 'riskypram@gmail.com', 'riskypram123'),
(9, 'laluzhafran', 'laluzhafran@gmail.com', '12345'),
(10, 'fani', 'sefanich.rcrrc49@gmail.com', 'fani12345');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id_message` int(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id_message`, `username`, `email`, `no_hp`, `pesan`) VALUES
(1, 'Fauzan Azima', 'fauzanazima@gmail.com', '087745950712', 'Menurut saya cinemation masih membutuhkan beberapa fitur yang dapat mempermudah pengguna dalam membeli ticket film'),
(3, 'Risky Pram', 'riskypram@gmail.com', '081999999', 'Saya sangat senang dengan pengalaman menggunakan website ini untuk membeli tiket bioskop. Antarmukanya intuitif dan mudah dinavigasi, sehingga saya dapat dengan cepat menemukan film yang saya inginkan dan membeli tiket dengan mudah. Selain itu, pilihan film yang ditawarkan sangat lengkap dan terkini. Sistem pemesanan tiketnya juga efisien dan transaksi saya berjalan lancar. Saya akan merekomendasikan website ini kepada teman-teman saya.');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id_movie` int(25) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `durasi` varchar(25) DEFAULT NULL,
  `range_umur` varchar(25) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `studio` varchar(25) DEFAULT NULL,
  `synopsis` text NOT NULL,
  `director` varchar(25) DEFAULT NULL,
  `trailer` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `poster` varchar(50) NOT NULL,
  `kategori` enum('Now Playing Movie','Upcoming Movie') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id_movie`, `judul`, `durasi`, `range_umur`, `genre`, `studio`, `synopsis`, `director`, `trailer`, `tanggal`, `poster`, `kategori`) VALUES
(55, 'Transformers: Rise The Beasts', '2 jam 07 menit', '15 tahun', 'Action, Adventure', 'Paramount Studio', 'Berlatar tahun 1994, Noah Diaz (Anthony Ramos) dan Elena Wallace (Dominique Fishback) memulai petualangan menjelajahi dunia bersama para Autobots dan Transformers lainnya. Mereka bersama-sama berusaha menyelamatkan bumi dari ancaman besar Unicron.', 'Steven Caple Jr.', 'https://www.youtube.com/watch?v=itnqEauWQZM', '2023-06-14', 'Transformers.png', 'Now Playing Movie'),
(56, 'SPIDER-MAN: ACROSS THE SPIDER-VERSE', '2 jam 20 menit', '13 tahun', 'Animation, Action', 'Columbia Pictures', 'Miles Morales (Shameik Moore) melintasi dunia Multiverse, di mana dia bertemu dengan tim Spider-Man lain. Saat para pahlawan saling berselisih tentang cara menangani ancaman, Miles kini harus menemukan kembali apa artinya menjadi seorang pahlawan.', 'Joaquim Dos Santos, Kemp ', 'https://www.youtube.com/watch?v=shW9i6k8cB0', '2023-06-14', 'Spiderman.png', 'Now Playing Movie'),
(58, 'FAST X', '2 jam 21 menit', '17 tahun', 'Action, Crime', 'Universal Pictures', 'Musuh dari masa lalu kini menghampiri Dom (Vin Diesel) dan keluarganya. Dante (Jason Momoa) putra gembong narkoba Hernan Reyes (Joaquim de Almeida) yang dihancurkan Dom dan kelompoknya di seri kelima kini datang dan berusaha balas dendam atas kematian sang ayah.', 'Louis Leterrier', 'https://youtu.be/aOb15GVFZxU', '0000-00-00', 'Fast X.png', 'Now Playing Movie'),
(59, 'The Flash ', '2 jam 24 menit', '15 tahun ', 'Action, Adventure', 'Warner Bros. Pictures', 'Barry Allen menggunakan kecepatan supernya untuk mengubah masa lalu, tetapi upayanya untuk menyelamatkan keluarganya menyebabkan masalah. Kini Barry berlomba demi hidupnya dan menyelamatkan masa depan.', 'Andy Muschietti', 'https://youtu.be/hebWYacbdvc', '0000-00-00', 'The Flash.png', 'Now Playing Movie'),
(60, 'Ganjil Genap', '2 jam 04 menit', '13 tahun', 'Drama, Comedy', 'Md Pictures', 'Sembuh dari patah hati tak pernah mudah. Gala (Clara Bernadeth) yang sudah pacaran delapan tahun dengan Bara (Baskara Mahendra), ingin segera dinikahi. Tetapi tiba-tiba Bara malah minta putus. Gala hancur, berjuang keras menyembuhkan hatinya. Untunglah hadir Aiman (Oka Antara) menemani Gala, membantu Gala untuk sembuh. Gala bahkan mulai jatuh hati. Tetapi Gala perlahan sadar, Aiman sama saja dengan Bara. Aiman bukan obat patah hatinya. Akankah patah hati Gala sembuh? Atau justru semakin patah?', 'Bene Dion Rajagukguk', 'https://youtu.be/XlgnP_kLVFM', '0000-00-00', 'Ganjil-genap.png', 'Upcoming Movie'),
(61, 'Hypnotic', '1 jam 33 menit', '13 tahun', 'Mystery, Thriller', 'Ingenious Media, Solstice', 'Danny Rourke (Ben Affleck) adalah seorang detektif yang menyelidiki misteri hilangnya sang putri dan program rahasia pemerintah.', 'Robert Rodriguez', 'https://youtu.be/N-qn4h-amyY', '0000-00-00', 'Hypnotic.png', 'Upcoming Movie'),
(62, 'The Boogeyman', '1 jam 38 menit', '17 tahun', 'Horror', '20th Century Studios', 'Pasca kematian ibu mereka, Sadie Harper (Sophie Thatcher) dan adik perempuannya, Sawyer (Vivien Lyra Blair) mengalami kehilangan yang dalam. Sementara, sang ayah, Will (Chris Messina) tidak memberikan perhatian dan perlindungan yang mereka butuhkan. Sadie dan Sawyer kini harus berjuang untuk tetap hidup dari teror sadis yang hadir di rumah mereka. Sosok misterius yang muncul dari dalam lemari dan tempat gelap.', 'Rob Savage', 'https://youtu.be/cFqCmIU0-_M', '0000-00-00', 'The Boogeyman.png', 'Now Playing Movie'),
(63, 'Elemental Forces of Nature', '1 jam 49 menit', '13 tahun', 'Animation, Adventure', 'Walt Disney Pictures', 'Dua karakter berbeda, Ember (Leah Lewis) elemen api dan Wade (Mamoudou Athie) elemen air. Layaknya api, Ember memiliki sifat membara, sedangkan Wade memiliki sifat tenang layaknya air. Walaupun berbeda, keduanya saling jatuh cinta dan berusaha mencari kesamaan satu sama lainnya.', 'Peter Sohn', 'https://www.youtube.com/watch?v=hXzcyx9V0xw', '2023-07-01', 'Elemental Forces of Nature.png', 'Upcoming Movie'),
(64, 'INDIANA JONES AND THE DIAL OF DESTINY', '2 jam 34 menit', '13 tahun', 'Action, Adventure', '20th Century Studios', 'Dua karakter berbeda, Ember (Leah Lewis) elemen api dan Wade (Mamoudou Athie) elemen air. Layaknya api, Ember memiliki sifat membara, sedangkan Wade memiliki sifat tenang layaknya air. Walaupun berbeda, keduanya saling jatuh cinta dan berusaha mencari kesamaan satu sama lainnya.', 'James Mangold', 'https://youtu.be/eQfMbSe7F2g', '0000-00-00', 'Indiana Jones.png', 'Upcoming Movie'),
(65, 'Onde Mande!', '1 jam 37 menit', '13 tahun', 'Drama, Family, Comedy', 'Visinema Pictures, Gandrv', 'Demi mendapatkan hadiah sayembara senilai 2 Miliar dari perusahaan sabun, warga desa yang tinggal di tepi Danau Maninjau, Sumatera Barat menyusun rencana besar. Sebab, sang pemenang sayembara, Angku Wan (Musra Dahrizal) yang merupakan sosok tetua di desa tersebut meninggal sebelum mengklaim hadiahnya.Lewat berbagai cara, warga desa: Ni Ta (Jajang C Noer), Da Am (Jose Rizal Manua), Si Mar (Shenina Cinnamon) dan lainnya berusaha meyakinkan perusahaan sabun bahwa Angku Wan masih hidup. Bukan karena keserakahan, hadiah akan digunakan untuk tujuan yang mulia, yaitu membangun desa demi kesejahteraan bersama seperti pesan terakhir Angku Wan. Namun, rencana-rencana yang disusun warga desa mengundang pro dan kontra. Keadaan pun semakin runyam tatkala Anwar (Emir Mahira) selaku perwakilan perusahaan sabun datang ke desa secara tiba-tiba untuk memvalidasi pemenang. Apa rencana yang akhirnya mereka pilih? Dan akankah rencana mereka berhasil.', 'Paul Fauzan Agusta', 'https://youtu.be/UHIpZb_k7Ik', '0000-00-00', 'Onde Mande.png', 'Upcoming Movie'),
(66, 'Kejar Mimpi Gaspol!', '1 jam 53 menit', '13 tahun', 'Drama', 'Anak Bangsa Berkreasi', 'Fifi, ibu tunggal di kawasan wisata Gunung Bromo membesarkan putrinya, Diana, dengan melanjutkan usaha mendiang suaminya menjadi supir jeep, pemandu wisata dan pengelola Homestay Fifi. Tiga orang pegawainya, Dendi, Senja dan Nobenk setia mendukung usaha Fifi. Suatu saat datang aktor lawas, Darma, menginap di Homestay Fifi dan melihat bagaimana Fifi selalu berkutat menulis di buku diary-nya. Darma penasaran dan mencari tahu isi diary tersebut yang berbuntut pada berbagai kesalahpahaman. Hingga akhirnya diary Fifi menjadi pembuka jalan mewujudkan mimpi Fifi dengan dukungan Diana, Dendi, Senja, Nobenk dan Darma.', 'Hastobroto', 'https://youtu.be/1rqSEfLt4z0', '0000-00-00', 'Kejar Mimpi Gaspol!.png', 'Upcoming Movie'),
(68, 'THE LITTLE MERMAID', '2 jam 15 menit', '13 tahun', 'Adventure, Family, Fantasy', 'Walt Disney Pictures', 'Ariel (Halle Bailey) putri duyung yang merupakan anak dari Raja Triton (Javier Bardem), penguasa kerajaan bawah laut. Ariel yang penasaran dengan dunia manusia akhirnya jatuh cinta dengan pangeran Eric (Jonah Hauer-King). Keduanya bertemu saat Ariel menyelamatkan sang pangeran dari kapal yang tenggelam.', 'Rob Marshall', 'https://youtu.be/kpGo2_d3oYE', '0000-00-00', 'Little-mermaid.png', 'Now Playing Movie');

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `id_promo` int(25) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `kupon` varchar(50) NOT NULL,
  `subjudul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `syarat_ketentuan` text NOT NULL,
  `cara_menggunakan` text NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_berakhir` date NOT NULL,
  `poster` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promo`
--

INSERT INTO `promo` (`id_promo`, `judul`, `kupon`, `subjudul`, `deskripsi`, `syarat_ketentuan`, `cara_menggunakan`, `tanggal_mulai`, `tanggal_berakhir`, `poster`) VALUES
(14, 'Promo Diskon 50%', 'F1D021035', 'Promo diskon 50% untuk setiap film', 'Jangan lewatkan kesempatan istimewa kami! Kami dengan bangga mengumumkan promo diskon 50% untuk setiap film di bioskop kami. Nikmati pengalaman menonton film dengan harga yang terjangkau dan rasakan kegembiraan layar lebar tanpa harus menguras kantong Anda. Promo ini berlaku untuk semua film yang sedang tayang, sehingga Anda dapat memilih film favorit Anda tanpa khawatir melewatkan penawaran menarik ini. Segera kunjungi bioskop kami dan manfaatkan diskon 50% ini sebelum waktu terbatas berakhir. Tunggu apa lagi? Siapkan popcorn Anda dan saksikan film-film terbaru dengan harga yang sangat spesial!', 'Sudah melakukan pendaftaran akun di aplikasi cinemation, Berlaku setiap hari selama tanggal tayang promo,  Berlaku untuk setiap film.\r\n', 'Masuk ke website cinemation, Daftar akun cinemation, Beli ticket film yang diinginkan, Masukan kode kupon promo \"F1D021035\" pada form input kupon.', '2023-06-16', '2023-07-07', 'Poster 1.png');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id_ticket` int(25) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `harga` int(25) NOT NULL,
  `jumlah` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id_ticket`, `judul`, `harga`, `jumlah`) VALUES
(3, 'SPIDER-MAN: ACROSS THE SPIDER-VERSE', 30000, 60),
(4, 'Transformers: Rise The Beasts', 30000, 70),
(5, 'The Flash', 30000, 60),
(6, 'FAST X', 30000, 50),
(7, 'The Boogeyman', 30000, 60),
(8, 'THE LITTLE MERMAID', 30000, 60);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `no_transaksi` int(25) NOT NULL,
  `id_customer` varchar(50) NOT NULL,
  `id_movie` varchar(50) NOT NULL,
  `kupon` varchar(50) DEFAULT NULL,
  `tgl_transaksi` datetime NOT NULL,
  `kartu_kredit` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`no_transaksi`, `id_customer`, `id_movie`, `kupon`, `tgl_transaksi`, `kartu_kredit`) VALUES
(13, '8', '68', 'F1D021035', '2023-06-16 00:47:28', 'ABCAJIKGANTENG'),
(14, '9', '56', 'F1D021035', '2023-06-16 02:47:23', 'ABCAJIKGANTENG'),
(15, '9', '56', 'F1D021035', '2023-06-16 02:49:17', 'ABCAJIKGANTENG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_message`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id_movie`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id_promo`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id_ticket`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`no_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id_admin` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id_message` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id_movie` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `id_promo` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id_ticket` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `no_transaksi` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
