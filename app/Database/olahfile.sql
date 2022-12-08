-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2022 at 06:33 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `olahfile`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `ekstensi` varchar(10) NOT NULL,
  `size` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `info` varchar(80) NOT NULL,
  `id_user` int(11) NOT NULL,
  `delete_at` timestamp NULL DEFAULT NULL,
  `folderId` int(11) DEFAULT NULL,
  `dir` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `nama`, `tipe`, `ekstensi`, `size`, `created_at`, `info`, `id_user`, `delete_at`, `folderId`, `dir`) VALUES
(1378, 'mediaedukasi_635955ea3cf60.wav', 'audio/wav', 'wav', '279.04 KB', '2022-10-26 23:44:42', 'mediaedukasi_635955ea3cf55', 222, NULL, 342, '06_PEMBUKAANHARIPERSNASIONAL_LAPANGANPERSATUANMTQ'),
(1379, '7cffe009fec825817281e770c739bbc32a479f64e5189bf8aafd6dc9267c4cf4e0bce17dadb0ec927d45c218869db9c9_635955ea42dfd.wav', 'audio/wav', 'wav', '1.24 MB', '2022-10-26 23:44:42', '7cffe009fec825817281e770c739bbc32a479f64e5189bf8aafd6dc9267c4cf4e0bce17dadb0ec92', 222, NULL, 342, '06_PEMBUKAANHARIPERSNASIONAL_LAPANGANPERSATUANMTQ'),
(1380, 'new_635955ea48958dsc_9416.jpg', 'image/jpeg', 'jpg', '925.99 KB', '2022-10-26 23:44:42', 'DSC_9416_635955ea486fd', 222, NULL, 342, '06_PEMBUKAANHARIPERSNASIONAL_LAPANGANPERSATUANMTQ'),
(1381, 'new_635955ebbd744dsc_9415.jpg', 'image/jpeg', 'jpg', '943.23 KB', '2022-10-26 23:44:43', 'DSC_9415_635955ebbd444', 222, NULL, 342, '06_PEMBUKAANHARIPERSNASIONAL_LAPANGANPERSATUANMTQ'),
(1382, 'DSC_9421_635955ed31b9a.MOV', 'video/quicktime', 'MOV', '2.49 MB', '2022-10-26 23:44:45', 'DSC_9421_635955ed31b91', 222, NULL, 342, '06_PEMBUKAANHARIPERSNASIONAL_LAPANGANPERSATUANMTQ'),
(1383, '20220113_1080p_635955f37b981.mp4', 'video/mp4', 'mp4', '22.77 MB', '2022-10-26 23:44:51', '20220113_1080p_635955f37b978', 222, NULL, 342, '06_PEMBUKAANHARIPERSNASIONAL_LAPANGANPERSATUANMTQ'),
(1384, 'img_635b7462e6bafdsc_9416.jpg', 'image/jpeg', 'jpg', '925.99 KB', '2022-10-28 14:19:13', 'dsc_9416_635b74617e681', 222, NULL, NULL, NULL),
(1385, '0001-0180_635caaf2232f4.mp4', 'video/mp4', 'mp4', '455.00 KB', '2022-10-29 12:24:18', '0001-0180_635caaf2232bb', 222, NULL, 343, 'folderbaru'),
(1386, 'new_635caaf4e516cdonatku.png', 'image/png', 'png', '1.51 MB', '2022-10-29 12:24:20', 'donatku_635caaf4e4bb8', 222, NULL, 343, 'folderbaru'),
(1387, 'new_635caaf594f83dsc_9425.jpg', 'image/jpeg', 'jpg', '759.66 KB', '2022-10-29 12:24:21', 'DSC_9425_635caaf594c0c', 222, NULL, 343, 'folderbaru'),
(1388, 'new_635caaf7018e6dsc_9423.jpg', 'image/jpeg', 'jpg', '948.44 KB', '2022-10-29 12:24:23', 'DSC_9423_635caaf7014de', 222, NULL, 343, 'folderbaru'),
(1389, 'new_635caaf867638dsc_9422.jpg', 'image/jpeg', 'jpg', '0.95 MB', '2022-10-29 12:24:24', 'DSC_9422_635caaf8672d6', 222, NULL, 343, 'folderbaru'),
(1390, 'DSC_9424_635caaf9cbf67.MOV', 'video/quicktime', 'MOV', '2.00 MB', '2022-10-29 12:24:25', 'DSC_9424_635caaf9cbf5d', 222, NULL, 343, 'folderbaru'),
(1391, 'new_635cab0113ff9dsc_9426.jpg', 'image/jpeg', 'jpg', '733.40 KB', '2022-10-29 12:24:33', 'DSC_9426_635cab0113a78', 222, NULL, 343, 'folderbaru'),
(1392, 'new_635cab0275f8fdsc_9427.jpg', 'image/jpeg', 'jpg', '718.49 KB', '2022-10-29 12:24:34', 'DSC_9427_635cab0275764', 222, NULL, 343, 'folderbaru'),
(1393, 'new_635cab049e66adsc_9437.jpg', 'image/jpeg', 'jpg', '1.02 MB', '2022-10-29 12:24:36', 'DSC_9437_635cab049dddc', 222, NULL, 343, 'folderbaru'),
(1394, 'new_635cab0653dfadsc_9438.jpg', 'image/jpeg', 'jpg', '961.70 KB', '2022-10-29 12:24:38', 'DSC_9438_635cab0653a8a', 222, NULL, 343, 'folderbaru'),
(1395, 'new_635cab089df48dsc_9439.jpg', 'image/jpeg', 'jpg', '0.99 MB', '2022-10-29 12:24:40', 'DSC_9439_635cab089a48f', 222, NULL, 343, 'folderbaru'),
(1396, 'new_635cab0a181a1dsc_9440.jpg', 'image/jpeg', 'jpg', '1.04 MB', '2022-10-29 12:24:42', 'DSC_9440_635cab0a17d7a', 222, NULL, 343, 'folderbaru'),
(1397, 'new_635cab0b7fed9dsc_9442.jpg', 'image/jpeg', 'jpg', '1.10 MB', '2022-10-29 12:24:43', 'DSC_9442_635cab0b7fb5f', 222, NULL, 343, 'folderbaru'),
(1398, 'new_635cab0cee334dsc_9443.jpg', 'image/jpeg', 'jpg', '1.10 MB', '2022-10-29 12:24:44', 'DSC_9443_635cab0cedf81', 222, NULL, 343, 'folderbaru'),
(1399, 'new_635cab0e587e9dsc_9444.jpg', 'image/jpeg', 'jpg', '1.30 MB', '2022-10-29 12:24:46', 'DSC_9444_635cab0e584a0', 222, NULL, 343, 'folderbaru'),
(1400, 'new_635cab0fba523dsc_9445.jpg', 'image/jpeg', 'jpg', '797.33 KB', '2022-10-29 12:24:47', 'DSC_9445_635cab0fba1d9', 222, NULL, 343, 'folderbaru'),
(1401, 'file_example_AVI_1920_2_3MG_630ba8a8b838d_635cab111c700.mp4', 'video/avi', 'avi', '1.41 MB', '2022-10-29 12:24:49', 'file_example_AVI_1920_2_3MG_630ba8a8b838d_635cab111c6ef', 222, NULL, 343, 'folderbaru'),
(1402, 'mediaedukasi_635cab1a550ca.wav', 'audio/wav', 'wav', '279.04 KB', '2022-10-29 12:24:58', 'mediaedukasi_635cab1a550c0', 222, NULL, 343, 'folderbaru'),
(1403, 'new_635cab1a5af1dimg-20210626-wa0004.jpeg', 'image/jpeg', 'jpeg', '223.66 KB', '2022-10-29 12:24:58', 'IMG-20210626-WA0004_635cab1a5ab9c', 222, NULL, 343, 'folderbaru'),
(1404, 'new_6383738a4683fdsc_9425.jpg', 'image/jpeg', 'jpg', '759.66 KB', '2022-11-27 22:26:18', 'DSC_9425_6383738a4663c', 224, NULL, 344, 'folderbaru'),
(1405, 'new_6383738bb1b7adsc_9427.jpg', 'image/jpeg', 'jpg', '718.49 KB', '2022-11-27 22:26:19', 'DSC_9427_6383738bb18fd', 224, '2022-11-28 22:34:21', 344, 'folderbaru'),
(1406, 'new_6383738d13b1bdsc_9426.jpg', 'image/jpeg', 'jpg', '733.40 KB', '2022-11-27 22:26:21', 'DSC_9426_6383738d137e1', 224, NULL, 344, 'folderbaru'),
(1407, 'new_6383738e6f79edsc_9423.jpg', 'image/jpeg', 'jpg', '948.44 KB', '2022-11-27 22:26:22', 'DSC_9423_6383738e6f550', 224, NULL, 344, 'folderbaru'),
(1408, 'new_6383738fd4383dsc_9422.jpg', 'image/jpeg', 'jpg', '0.95 MB', '2022-11-27 22:26:23', 'DSC_9422_6383738fd4151', 224, NULL, 344, 'folderbaru'),
(1409, 'DSC_9424_63837391413d6.MOV', 'video/quicktime', 'MOV', '2.00 MB', '2022-11-27 22:26:25', 'DSC_9424_63837391413ce', 224, NULL, 344, 'folderbaru'),
(1410, 'new_63837398a2812dsc_9428.jpg', 'image/jpeg', 'jpg', '946.19 KB', '2022-11-27 22:26:32', 'DSC_9428_63837398a260a', 224, NULL, 344, 'folderbaru'),
(1411, 'new_6383739a14549dsc_9429.jpg', 'image/jpeg', 'jpg', '0.95 MB', '2022-11-27 22:26:34', 'DSC_9429_6383739a142a6', 224, NULL, 344, 'folderbaru'),
(1412, 'new_6383739b7ff74dsc_9430.jpg', 'image/jpeg', 'jpg', '0.98 MB', '2022-11-27 22:26:35', 'DSC_9430_6383739b7fcf3', 224, NULL, 344, 'folderbaru'),
(1413, 'new_6383739ce41d0dsc_9432.jpg', 'image/jpeg', 'jpg', '1.00 MB', '2022-11-27 22:26:36', 'DSC_9432_6383739ce3fb8', 224, NULL, 344, 'folderbaru');

--
-- Triggers `files`
--
DELIMITER $$
CREATE TRIGGER `delete_files` AFTER DELETE ON `files` FOR EACH ROW BEGIN
DECLARE p VARCHAR(50);
DECLARE q VARCHAR(50);

IF (old.ekstensi = 'jpg' OR old.ekstensi = 'png' OR old.ekstensi = 'jpeg' OR old.ekstensi = 'gif' OR old.ekstensi = 'tiff') THEN
set p = "<i class='icon-image text-primary mr-1'></i>gambar ";
ELSEIF (old.ekstensi = 'mp4' OR old.ekstensi = 'MOV' OR old.ekstensi = 'mkv' OR old.ekstensi = 'MTS' OR old.ekstensi = 'avi') THEN
set p = "<i class='icon-video text-success mr-1'></i>video";
ELSEIF (old.ekstensi = 'mp3' OR old.ekstensi = 'aac' OR old.ekstensi = 'wav' OR old.ekstensi = 'wma' OR old.ekstensi = 'aiff' OR old.ekstensi = 'pcm' OR old.ekstensi = 'flac' OR old.ekstensi = 'ogg') THEN
set p = "<i class='icon-music text-danger mr-1'></i>audio";
END IF;

IF (ISNULL(old.folderId)) THEN
INSERT INTO history (id_file, pesan,idUser,namaUser,folderNama,waktu) VALUES(old.id,CONCAT("Menghapus File ",p," dengan nama ", "<p class ='d-inline-block font-weight-bold'>",old.info,"</p>"), old.id_user, (SELECT nama FROM user WHERE id = old.id_user),null, now());
ELSE
INSERT INTO history (id_file, pesan,idUser,namaUser,folderNama,waktu) VALUES(old.id,CONCAT("Menghapus File ",p," dengan nama ","<p class ='d-inline-block font-weight-bold'>",old.info,"</p>"," dari folder <i class='icon-folder text-warning mr-1'></i>","<p class ='d-inline-block font-weight-bold'>",(SELECT infoFolder FROM folder WHERE id = old.folderId),"</p>"), old.id_user, (SELECT nama FROM user WHERE id = old.id_user),(SELECT infoFolder FROM folder WHERE id = old.folderId), now());
END IF;

End
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insert_files` AFTER INSERT ON `files` FOR EACH ROW BEGIN
DECLARE p VARCHAR(50);
DECLARE q VARCHAR(50);

IF (new.ekstensi = 'jpg' OR new.ekstensi = 'png' OR new.ekstensi = 'jpeg' OR new.ekstensi = 'gif' OR new.ekstensi = 'tiff') THEN
set p = "<i class='icon-image text-primary mr-1'></i>gambar ";
ELSEIF (new.ekstensi = 'mp4' OR new.ekstensi = 'MOV' OR new.ekstensi = 'mkv' OR new.ekstensi = 'MTS' OR new.ekstensi = 'avi') THEN
set p = "<i class='icon-video text-success mr-1'></i>video";
ELSEIF (new.ekstensi = 'mp3' OR new.ekstensi = 'aac' OR new.ekstensi = 'wav' OR new.ekstensi = 'wma' OR new.ekstensi = 'aiff' OR new.ekstensi = 'pcm' OR new.ekstensi = 'flac' OR new.ekstensi = 'ogg') THEN
set p = "<i class='icon-music text-danger mr-1'></i>audio";
END IF;

IF (ISNULL(new.folderId)) THEN
INSERT INTO history (id_file, pesan,idUser,namaUser,folderNama,waktu) VALUES(new.id,CONCAT("Mengupload File ",p," dengan nama ", "<p class ='d-inline-block font-weight-bold'>",new.info,"</p>"), new.id_user, (SELECT nama FROM user WHERE id = new.id_user),null, now());
ELSE
INSERT INTO history (id_file, pesan,idUser,namaUser,folderNama,waktu) VALUES(new.id,CONCAT("Mengupload File ",p," dengan nama ","<p class ='d-inline-block font-weight-bold'>",new.info,"</p>"," kedalam folder <i class='icon-folder text-warning mr-1'></i>","<p class ='d-inline-block font-weight-bold'>",(SELECT infoFolder FROM folder WHERE id = new.folderId),"</p>"), new.id_user, (SELECT nama FROM user WHERE id = new.id_user),(SELECT infoFolder FROM folder WHERE id = new.folderId), now());
END IF;

End
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `folder`
--

CREATE TABLE `folder` (
  `id` int(11) NOT NULL,
  `namaFolder` varchar(100) NOT NULL,
  `infoFolder` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp(),
  `id_user` int(11) NOT NULL,
  `delete_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `folder`
--

INSERT INTO `folder` (`id`, `namaFolder`, `infoFolder`, `tanggal`, `id_user`, `delete_at`) VALUES
(342, '06_PEMBUKAANHARIPERSNASIONAL_LAPANGANPERSATUANMTQ', '06_PEMBUKAAN HARI PERS NASIONAL_LAPANGAN PERSATUAN MTQ', '2022-10-26 23:44:21', 222, NULL),
(343, 'folderbaru', 'folder baru', '2022-10-29 12:16:20', 222, NULL),
(344, 'folderbaru', 'folder baru', '2022-11-27 22:25:57', 224, '2022-11-29 00:12:34');

--
-- Triggers `folder`
--
DELIMITER $$
CREATE TRIGGER `folder_delete` AFTER DELETE ON `folder` FOR EACH ROW BEGIN

INSERT INTO history (id_file, pesan,idUser,namaUser,folderNama,waktu) VALUES(old.id, CONCAT('<i class="icon-folder text-warning mr-1"></i> menghapus folder ', '<p class ="d-inline-block font-weight-bold">',old.infoFolder,'</p>'), old.id_user, (SELECT nama FROM user WHERE id = old.id_user),(SELECT infoFolder FROM folder WHERE id = old.id), now());


END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `folder_insert` AFTER INSERT ON `folder` FOR EACH ROW BEGIN

INSERT INTO history (id_file, pesan,idUser,namaUser,folderNama,waktu) VALUES(new.id, CONCAT('<i class="icon-folder text-warning mr-1"></i> Membuat folder dengan nama ', '<p class ="d-inline-block font-weight-bold">',new.infoFolder,'</p>'), new.id_user, (SELECT nama FROM user WHERE id = new.id_user),(SELECT infoFolder FROM folder WHERE id = new.id), now());

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `id_file` int(11) NOT NULL,
  `pesan` varchar(500) NOT NULL,
  `idUser` int(11) DEFAULT NULL,
  `namaUser` varchar(100) NOT NULL,
  `folderNama` varchar(150) DEFAULT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `info` varchar(100) NOT NULL,
  `peran` varchar(100) NOT NULL,
  `terdaftar` datetime NOT NULL DEFAULT current_timestamp(),
  `aktivitas` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `pass`, `nama`, `info`, `peran`, `terdaftar`, `aktivitas`, `gambar`) VALUES
(10, 'admin', '$2y$10$LP5Co5JnyLr0U7yDtTWHDumq61qndYwafeTvH/aJWly3qDolxo4Vi', 'awaluddinrajab', 'awaluddin rajab', 'admin', '2022-08-11 01:08:17', '2022-11-29 06:48:36', '63853675890d3.png'),
(222, 'editor', '$2y$10$K5RFXS9NzFhImKp59Udn4.iC5AtstpM6jJDMDtUynqKPyRQWVX/R2', 'zainalarifin', 'zainal arifin', 'footager', '2022-10-20 21:20:02', '2022-10-29 12:15:57', 'nophoto.png'),
(223, 'editor1', '$2y$10$O9hM1Zue.1OyFeBy8ZKtsuOOWx2i/vcOaywY8sIYlxKmG3kkmEsZK', 'abdulsanjaya', 'abdul sanjaya', 'editor', '2022-10-21 04:03:14', '2022-10-28 14:31:18', 'nophoto.png'),
(224, 'awal', '$2y$10$vURpbt0x0AmsF0S4029YHeK6o5jYiwW9E2aqfPzWWUq/H1LSmU4lG', 'awal', 'awal', 'footager', '2022-11-27 22:25:21', '2022-11-29 08:11:39', 'nophoto.png');

--
-- Triggers `user`
--
DELIMITER $$
CREATE TRIGGER `delete_trigger` AFTER DELETE ON `user` FOR EACH ROW BEGIN

INSERT INTO history (id_file, pesan,idUser,namaUser,folderNama,waktu) VALUES(old.id, CONCAT("<i class='icon-user text-dark mr-1'></i>Menghapus User dengan nama ", "<p class ='d-inline-block font-weight-bold'>",old.info,"</p>"), (SELECT id FROM user WHERE peran != 'footager' AND peran != 'editor'), (SELECT nama FROM user WHERE peran != 'footager' AND peran != 'editor'),null, now());

END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insert_trigger` AFTER INSERT ON `user` FOR EACH ROW BEGIN

INSERT INTO history (id_file, pesan,idUser,namaUser,folderNama,waktu) VALUES(new.id, CONCAT("<i class='icon-user text-dark mr-1'></i>Membuat User baru dengan nama ", "<p class ='d-inline-block font-weight-bold'>",new.info,"</p>"), (SELECT id FROM user WHERE peran != 'footager' AND peran != 'editor'), (SELECT nama FROM user WHERE peran != 'footager' AND peran != 'editor'),null, now());

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `video_post`
--

CREATE TABLE `video_post` (
  `id` int(11) NOT NULL,
  `namaVideo` varchar(200) NOT NULL,
  `ekstensi` varchar(20) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `id_user` int(11) NOT NULL,
  `infoVideo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video_post`
--

INSERT INTO `video_post` (`id`, `namaVideo`, `ekstensi`, `created`, `id_user`, `infoVideo`) VALUES
(382, 'dsc_9424_6352cdfdcf474.MOV', 'MOV', '2022-10-22 00:51:09', 223, 'dsc_9424_6352cdfdcf474');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_files` (`id_user`),
  ADD KEY `folder_id` (`folderId`);

--
-- Indexes for table `folder`
--
ALTER TABLE `folder`
  ADD PRIMARY KEY (`id`),
  ADD KEY `folder_user` (`id_user`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `history_id` (`idUser`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_post`
--
ALTER TABLE `video_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1414;

--
-- AUTO_INCREMENT for table `folder`
--
ALTER TABLE `folder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=345;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=747;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=225;

--
-- AUTO_INCREMENT for table `video_post`
--
ALTER TABLE `video_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=383;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `folder_id` FOREIGN KEY (`folderId`) REFERENCES `folder` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_files` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `folder`
--
ALTER TABLE `folder`
  ADD CONSTRAINT `folder_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_id` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `video_post`
--
ALTER TABLE `video_post`
  ADD CONSTRAINT `video_post_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
