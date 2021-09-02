-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 23, 2021 at 04:55 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpproj`
--

-- --------------------------------------------------------

--
-- Table structure for table `pwdreset`
--

CREATE TABLE `pwdreset` (
  `pwdResetId` int(11) NOT NULL,
  `pwdResetEmail` text NOT NULL,
  `pwdResetSelector` text NOT NULL,
  `pwdResetToken` longtext NOT NULL,
  `pwdResetExpires` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) NOT NULL,
  `sual` varchar(200) NOT NULL,
  `a` varchar(200) NOT NULL,
  `b` varchar(200) NOT NULL,
  `c` varchar(200) NOT NULL,
  `d` varchar(200) NOT NULL,
  `e` varchar(200) NOT NULL,
  `cavab` varchar(5) NOT NULL,
  `topic` varchar(50) NOT NULL,
  `numberOfTopic` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `sual`, `a`, `b`, `c`, `d`, `e`, `cavab`, `topic`, `numberOfTopic`) VALUES
(6, 'Aşağıdakılardan hansı aktivatorlar qrupuna aiddir:', 'reverse headgear', 'oksipital headgear', 'chin-cup', 'monoblok', 'breket sistemi', '', 'Ortopedik Stomatologiya', 1),
(7, 'Periostit zamanı irinli proses lokallaşır:', 'Sümüküstlüyün altında', 'Alveolun selikli qişasında', 'Çənənin xarici kortikal təbəqəsinin altında', 'Sümüküstlüyünün üzərində', 'Əzələaltı nahiyyədə', '', 'Ortopedik Stomatologiya', 1),
(8, 'Xəstədə SNA=75˚, SNB=80˚, ANB=-5˚ dirsə hansı aparatdan istifadə etməyi uyğun görərsiniz?', 'twinblok', 'II sinif monobloku', 'çənəlik', 'genişləndirmə aparatı', 'reverse headgear', '', 'Ortopedik Stomatologiya', 1),
(9, 'ANS-PNS məsafəsi nəyi göstərir?', 'çənənin ön-arxa istiqamətdəki uzunluğunu', 'çənənin vertikal hündürlüyünü', 'əngin ön-arxa istiqamətdəki uzunluğunu', 'əngin vertikal hündürlüyünü', 'kəllə əsasının uzunluğunu', '', 'Ortopedik Stomatologiya', 1),
(10, 'Epidemik parotit zamanı zədələnir:', 'Vartonov axacağı', 'vəzin parenximası', 'II və III sıra axacaqları', 'vəzin stroması', 'Stenonov axacağı', '', 'Ortopedik Stomatologiya', 1);

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE `quizzes` (
  `id` int(5) DEFAULT NULL,
  `ad` varchar(50) DEFAULT NULL,
  `say` int(5) DEFAULT NULL,
  `miqdar` int(5) DEFAULT NULL,
  `vaxt` int(5) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `fotores` varchar(100) DEFAULT NULL,
  `qiymet` int(5) DEFAULT NULL,
  `hashstring` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quizzes`
--

INSERT INTO `quizzes` (`id`, `ad`, `say`, `miqdar`, `vaxt`, `link`, `fotores`, `qiymet`, `hashstring`) VALUES
(3, 'Ortopedik Stomatologiya', 25, 40, 30, 'json/suallar1.json', 'assets/orto.png', 1, 'sdzbcjhcsd'),
(4, 'Terapevtik Stomatologiya', 25, 40, 30, 'json/suallar2.json', 'assets/tera.png', 1, 'sdzbcjhcsd'),
(5, 'Uşaq Stomatologiyası', 25, 40, 30, 'json/suallar3.json', 'assets/compqir.png', 1, 'sdzbcjhcsd'),
(6, 'Üz-çənə Cərrahiyyəsi', 25, 40, 30, 'json/suallar4.json', 'assets/chene.png', 1, 'sdzbcjhcsd'),
(1, 'Rezidentura Sınaqları', 100, 40, 150, 'json/suallar5.json', 'assets/compbenov.png', 3, 'sdzbcjhcsd'),
(2, 'Stomatoloji Materiallar', 100, 40, 150, 'json/suallar6.json', 'assets/compbenov.png', 3, 'sdzbcjhcsd');

-- --------------------------------------------------------

--
-- Table structure for table `userss`
--

CREATE TABLE `userss` (
  `id` int(11) NOT NULL,
  `namee` varchar(128) NOT NULL,
  `surname` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `pwd` varchar(200) NOT NULL,
  `a1` int(5) DEFAULT NULL,
  `a2` int(5) DEFAULT NULL,
  `a3` int(5) DEFAULT NULL,
  `a4` int(5) DEFAULT NULL,
  `a5` int(5) DEFAULT NULL,
  `a6` int(5) DEFAULT NULL,
  `a7` int(5) DEFAULT NULL,
  `a8` int(5) DEFAULT NULL,
  `done` varchar(2500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userss`
--

INSERT INTO `userss` (`id`, `namee`, `surname`, `email`, `pwd`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`, `done`) VALUES
(1, 'Şahin', 'Umaxan', 'shah@gmail.com', '$2y$10$606LRK9jVWBDrHxg3qBHQu/9Q00pnHEH8anH51ogmThXxcxQeq/pG', 38, 40, 10, 14, 18, 17, 16, 36, '-23_0-32_40-31_0-22_40-219_0-11_100-12_0-13_20'),
(7, 'Shahin', 'Umakhan', 'shaha@gmail.com', '$2y$10$LcbVrkJKR7flHU/fIn9QeOhH9TsRPFTlBpx5lNfHxmwauUgB5POTq', 0, 5, 0, 0, 0, 0, 0, 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pwdreset`
--
ALTER TABLE `pwdreset`
  ADD PRIMARY KEY (`pwdResetId`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_topic` (`topic`);

--
-- Indexes for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD UNIQUE KEY `ad` (`ad`);

--
-- Indexes for table `userss`
--
ALTER TABLE `userss`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pwdreset`
--
ALTER TABLE `pwdreset`
  MODIFY `pwdResetId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `userss`
--
ALTER TABLE `userss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `fk_topic` FOREIGN KEY (`topic`) REFERENCES `quizzes` (`ad`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
