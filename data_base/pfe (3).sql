-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 08, 2022 at 02:45 PM
-- Server version: 5.7.24
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pfe`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(4) NOT NULL,
  `id_user` int(4) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `marque` varchar(25) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `date_debut` varchar(50) NOT NULL,
  `date_fin` varchar(50) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `passeport_cin` varchar(50) NOT NULL,
  `prix_location` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `id_user`, `nom`, `prenom`, `marque`, `photo`, `date_debut`, `date_fin`, `telephone`, `passeport_cin`, `prix_location`) VALUES
(1, 13, 'Timboliba', 'Moussa', 'GMC', '2020-GMC-Acadia-960x540-01.webp', '2022-07-07', '2022-07-08', ' 33693623991', '45789zddzdz', 75),
(2, 13, 'Timboliba', 'Moussa', 'PEUGEOT', 'peugeot-308-2022-motorpoint003.jpg', '2022-07-08', '2022-07-09', ' 33693623991', '45789zddzdz', 35),
(3, 13, 'Timboliba', 'Moussa', 'FORD', 'ford_explains.jpg', '2022-07-08', '2022-07-09', ' 33693623991', '45789zddzdz', 35),
(4, 13, 'Timboliba', 'Moussa', 'MERCEDES', 'suv-amg-65-2018.jpg', '2022-07-08', '2022-07-22', ' 33693623991', '45789zddzdz', 80),
(5, 13, 'Timboliba', 'Moussa', 'FORD', 'ford-endeavour_2022.jpg', '2022-07-07', '2022-07-06', ' 33693623991', '45789zddzdz', 45),
(11, 13, 'Timboliba', 'Moussa', 'MERCEDES', 'suv-amg-65-2018.jpg', '2022-07-08', '2022-07-09', ' 33693623991', '45789zddzdz', 80),
(12, 13, 'Timboliba', 'Moussa', 'MERCEDES', 'suv-amg-65-2018.jpg', '2022-07-08', '2022-07-09', ' 33693623991', '45789zddzdz', 80);

-- --------------------------------------------------------

--
-- Table structure for table `temoignage`
--

CREATE TABLE `temoignage` (
  `id` int(10) NOT NULL,
  `id_user` int(4) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `temoignage` varchar(256) NOT NULL,
  `date_poste` varchar(50) NOT NULL,
  `heure_poste` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `temoignage`
--

INSERT INTO `temoignage` (`id`, `id_user`, `nom`, `prenom`, `temoignage`, `date_poste`, `heure_poste`) VALUES
(16, 13, 'Timboliba', 'Moussa', 'hello', '03-07-22', '22:21:43'),
(17, 13, 'Timboliba', 'Moussa', 'bonsoir ce soir prend fin mon projet de fin detude', '08-07-22', '02:05:07'),
(18, 13, 'Timboliba', 'Moussa', '', '08-07-22', '14:43:39');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `passport_cin` varchar(25) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'client'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `username`, `password`, `adresse`, `mail`, `telephone`, `passport_cin`, `role`) VALUES
(12, 'Timboliba', 'Hamadi', 'ymg', '0000', '71 av mohamed zerktouni', 'hamaditimboliba54@gmail.com', ' 22374748056', 'AA7485ML', 'admin'),
(13, 'Timboliba', 'Moussa', 'mousco', '1111', '5d5d', 'hamaditimboliba54@gmail.com', ' 33693623991', '45789zddzdz', 'client');

-- --------------------------------------------------------

--
-- Table structure for table `voitures`
--

CREATE TABLE `voitures` (
  `id` int(4) NOT NULL,
  `immatriculation` varchar(25) NOT NULL,
  `marque` varchar(20) NOT NULL,
  `modele` varchar(20) NOT NULL,
  `kilometrage` int(10) NOT NULL,
  `prix_location` int(10) NOT NULL,
  `nombre_en_stock` int(10) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `couleur` varchar(25) NOT NULL,
  `dateVignette` date NOT NULL,
  `dateVisiteTechnique` date NOT NULL,
  `dateAssurance` date NOT NULL,
  `info` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `voitures`
--

INSERT INTO `voitures` (`id`, `immatriculation`, `marque`, `modele`, `kilometrage`, `prix_location`, `nombre_en_stock`, `photo`, `couleur`, `dateVignette`, `dateVisiteTechnique`, `dateAssurance`, `info`) VALUES
(4, 'BC-1881-ML', 'FORD', 'SUV', 35000, 45, 1, 'ford-endeavour_2022.jpg', 'noir', '2022-06-27', '2022-06-27', '2022-06-27', 'NEANT'),
(5, 'BB-7474-ML', 'FORD', 'BERLIN', 17000, 35, 1, 'ford_explains.jpg', 'rouge', '2022-06-26', '2022-06-26', '2022-06-26', 'NEANT'),
(6, 'BM-5505-ML', 'GMC', 'SUV', 180, 75, 2, '2020-GMC-Acadia-960x540-01.webp', 'noir', '2022-06-29', '2022-06-29', '2022-06-29', 'NEANT'),
(7, 'BB-0440-ML', 'GMC', 'TRUC', 20000, 50, 1, '2023-GMC-Canyon-Exterior.png', 'Blanche', '2022-06-29', '2022-06-29', '2022-06-29', ''),
(8, 'BB-7486-ML', 'MERCEDES', 'BERLINES', 35000, 25, 1, '190-red.jpg', 'Rouge Bordeaux', '2022-06-20', '2022-06-20', '2022-06-20', ''),
(9, 'BB-0007-ML', 'MERCEDES', 'BERLINES', 1000, 80, 2, 'Mercedes-Maybach-Ultimate-Luxury.jpg', 'Rouge', '2022-06-30', '2022-06-30', '2022-06-30', ''),
(10, 'BB-8888-ML', 'MERCEDES', 'SUV', 1000, 80, 2, 'suv-amg-65-2018.jpg', 'Noir', '2022-06-29', '2022-06-29', '2022-06-29', 'premier teste'),
(20, 'BB-1998ML', 'HONDA', 'BERLINE', 1000, 45, 1, 'honda_accord_sedan_sport_1_5CVT.jpg', 'BLEU', '2022-07-02', '2022-07-02', '2022-07-02', 'neant'),
(22, 'BB-1999-ML', 'PEUGEOT', 'SUV', 1000, 35, 1, 'peugeot-308-2022-motorpoint003.jpg', 'VERT ÉMERAUDE', '2022-07-02', '2022-07-02', '2022-07-02', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temoignage`
--
ALTER TABLE `temoignage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voitures`
--
ALTER TABLE `voitures`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `temoignage`
--
ALTER TABLE `temoignage`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `voitures`
--
ALTER TABLE `voitures`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
