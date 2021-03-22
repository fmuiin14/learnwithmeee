-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2021 at 11:05 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learnwithmeee`
--

-- --------------------------------------------------------

--
-- Table structure for table `educators`
--

CREATE TABLE `educators` (
  `id` int(64) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_id` int(20) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `j_k` char(2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `is_active` int(1) NOT NULL,
  `user_level` int(10) NOT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `educators`
--

INSERT INTO `educators` (`id`, `nama`, `nip`, `no_hp`, `email`, `password`, `user_id`, `agama`, `tgl_lahir`, `j_k`, `image`, `is_active`, `user_level`, `date_created`) VALUES
(2, 'Fathul Muiin', '675765765', '03943284328423', 'cobaadd@gmail.com', 'e8867a655f506ece30cfa638f6c1fce2', 18, 'Islam', '2000-03-08', 'F', 'f0603672cf1bdb0ee3955026d1d70e91.jpg', 1, 3, '2021-03-08');

-- --------------------------------------------------------

--
-- Table structure for table `learning_histories`
--

CREATE TABLE `learning_histories` (
  `id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `educator_id` int(20) NOT NULL,
  `pertemuan_selanjutnya` date NOT NULL,
  `pertemuan_terakhir` date NOT NULL,
  `pertemuan_ke` int(20) NOT NULL,
  `program_id` int(10) NOT NULL,
  `level_id` int(10) NOT NULL,
  `date_created` date NOT NULL,
  `notes` text NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `nama_materi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `learning_histories`
--

INSERT INTO `learning_histories` (`id`, `user_id`, `educator_id`, `pertemuan_selanjutnya`, `pertemuan_terakhir`, `pertemuan_ke`, `program_id`, `level_id`, `date_created`, `notes`, `keterangan`, `nama_materi`) VALUES
(4, 18, 2, '2020-12-19', '2020-12-19', 1, 1, 1, '2020-12-19', '(tidak hadir)', '', '(tidak hadir)'),
(5, 18, 2, '2021-01-02', '2020-12-26', 2, 1, 1, '2021-03-21', 'Terlalu mudah, farah bisa menyelesaikan project dengan baik.', 'Bisa dinaikkan ke level yang lebih sulit', 'Running Rabbit'),
(6, 18, 2, '2021-01-09', '2021-01-02', 3, 1, 1, '2021-03-21', 'Berhasil menyelesaikan materi dengan baik, belajar banyak hal baru dari materi Cat and mouse', '', 'Cat and Mouse'),
(7, 18, 2, '2021-01-16', '2021-01-09', 4, 1, 1, '2021-03-21', 'Berhasil menyelesaikan materi dengan baik, belajar banyak hal baru dari Game Flappy Bird.', '', 'Flappy Bird'),
(8, 18, 2, '2021-01-23', '2021-01-16', 5, 1, 1, '2021-03-21', 'Berhasil menyelesaikan rock blaster dengan baik, belajar banyak hal baru. rocket blaster 7.5 | cat and mouse 8.5', 'Farah bercerita bahwa dia suka dengan planet2 dan tata surya', 'Rock Blaster'),
(9, 18, 2, '2021-01-30', '2021-01-23', 6, 1, 1, '2021-03-21', 'Berhasil menyelesaikan project whack a mole dengan baik, dan Farah banyak belajar hal baru. Banyak bercerita dan diskusi tentang mole, hamster, dan kucing.', '', 'Whack a Mole'),
(10, 18, 2, '2021-02-06', '2021-01-30', 7, 1, 1, '2021-03-21', 'Berhasil menyelesaikan project corona warrior dengan baik. Tujuan game ini, mengingatkan supaya Farah selalu aware untuk menjaga kebersihan, kesehatan, dan juga menjaga iman. ', '', 'Corona Warrior'),
(11, 18, 2, '2021-02-13', '2021-02-06', 8, 1, 1, '2021-03-21', 'Berhasil menyelesaikan project knife throwing dengan baik, dan belajar banyak hal baru. Farah terkadang kurang teliti perihal block kode, kalau kode dalam satu sprite ada banyak.', 'karena Farah agak kesulitan jika membuat project yang block kode nya banyak dalam satu sprite, maka, bisa dicoba dengan  membuat project yang menggunakan beberapa sprite, tapi dengan menggunakna block kode yang tidak terlalu banyak.', 'Knife Throwing'),
(12, 18, 2, '2021-02-20', '2021-02-13', 9, 1, 1, '2021-03-21', 'Berhasil menyelesaikan project membuat kalkulator dengan baik, dan banyak belajar hal baru.', '', 'Calculator'),
(13, 18, 2, '2021-02-27', '2021-02-20', 10, 1, 1, '2021-03-21', 'Berhasil menyelesaikan project membuat beetle struggle dengan baik. Farah juga banyak bercerita tentang hewan peliharaannya, yaitu burung. Kita juga diskusi dan mengobrol tentang hewan - hewan yang ada di taman contohnya semut, kumbang, dll.', '', 'Beetle Struggle'),
(14, 18, 2, '2021-03-07', '2021-02-27', 11, 1, 1, '2021-03-21', 'Berhasil menyelesaikan project membuat shark attack dengan baik, diskusi soal hewan - hewan yang ada di laut dan film seperti hiu, paus, lalu film finding nemo dan finding dory.', '', 'Shark Attack'),
(15, 18, 2, '2021-03-13', '2021-03-07', 12, 1, 1, '2021-03-21', 'Menyukai game yang dibuat, bisa mengikuti kelas dengan baik. Ada challenge yang diberikan, dan farah bisa menyelesaikan dengan baik. Saya mencoba memberikan banyak block kode, tapi farah sudah bisa mengikuti dengan baik.', 'Farah bercerita kalau dia membuat project juga (diluar kelas yang biasa dilakukan mingguan). Project yang Farah buat sendiri yaitu: Dress Up dan Donat Party. Farah memiliki espektasi, pertemuan selanjutnya membuat Bubble Shooter.', 'Witch game'),
(16, 18, 2, '2021-03-21', '2021-03-13', 13, 1, 2, '2021-03-21', 'Berhasil menyelesaikan project dengan baik, dan banyak bercerita. Diajarkan blok kode tidak mengikuti tutorial dan disampaikan dengan berbicara dan berlogika, namun farah bisa mengikuti dengan baik.', '', 'Baloon Clicker and Wild Animals');

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` int(10) NOT NULL,
  `level_name` varchar(255) NOT NULL,
  `program_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `level_name`, `program_id`) VALUES
(1, '<span style=\"color:gray;font-weight:bold;\">1 Silver</span>', 0),
(2, '<span style=\"color:gold;font-weight:bold;\">2 Gold</span>', 0),
(3, '<span style=\"color:#000080;font-weight:bold;\">3 Platinum</span>', 0),
(4, '<span style=\"color:#882e24;font-weight:bold;\">4 Diamond</span>', 0);

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` int(20) NOT NULL,
  `nama_program` varchar(255) NOT NULL,
  `educator_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `nama_program`, `educator_id`) VALUES
(1, 'Scratch Programming', 2);

-- --------------------------------------------------------

--
-- Table structure for table `program_details`
--

CREATE TABLE `program_details` (
  `id` int(20) NOT NULL,
  `program_id` int(10) NOT NULL,
  `level_id` int(20) NOT NULL,
  `nama_program_detail` varchar(255) NOT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program_details`
--

INSERT INTO `program_details` (`id`, `program_id`, `level_id`, `nama_program_detail`, `date_created`) VALUES
(1, 1, 1, 'Awalan - Merupakan pertama kalinya kita berkenalan dengan Programming. Dan kita akan belajar menggunakan aplikasi Scratch.', '2021-03-17'),
(2, 1, 1, 'Berisi tentang kucing dan tikus yang mengejar keju', '2021-03-18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(64) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nis` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(128) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `educator_id` int(20) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `jenis_kelamin` char(2) NOT NULL,
  `birthday` date DEFAULT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `user_level` varchar(10) NOT NULL,
  `image` varchar(255) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `nis`, `password`, `email`, `no_hp`, `educator_id`, `agama`, `jenis_kelamin`, `birthday`, `tempat_lahir`, `user_level`, `image`, `is_active`, `date_created`) VALUES
(14, 'admin', '11223344', 'c93ccd78b2076528346216b3b2f701e6', 'admin@gmail.com', '628991234423', 2, 'Islam', 'M', '2010-06-02', 'Jakarta', '1', 'gambar1.jpg', 1, '2021-03-11'),
(18, 'Farah', '1', '9b0f4d720720fd55436ac7f07ac8a840', 'farah.rismadi@gmail.com', '6287780246532', 2, 'Islam', 'F', '2010-03-07', 'Jakarta', '2', 'ea424e63bc0df9ccfe9633388b391734.jpg', 1, '2021-03-14'),
(19, 'Siswa Dua', '22222', '35ae4007aa4d0591940af904ee947026', 'siswadua@gmail.com', '02222222222', 2, 'Islam', 'M', '2009-03-07', 'Depok', '2', '6e895cabf3d48e6f733b4ce0ea726904.png', 1, '2021-03-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `educators`
--
ALTER TABLE `educators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `learning_histories`
--
ALTER TABLE `learning_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program_details`
--
ALTER TABLE `program_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `educators`
--
ALTER TABLE `educators`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `learning_histories`
--
ALTER TABLE `learning_histories`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `program_details`
--
ALTER TABLE `program_details`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
