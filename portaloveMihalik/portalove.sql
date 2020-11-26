-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: Št 26.Nov 2020, 14:59
-- Verzia serveru: 10.4.14-MariaDB
-- Verzia PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `portalove`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `menu`
--

CREATE TABLE `menu` (
  `idmenu` int(11) NOT NULL,
  `nazov` varchar(150) NOT NULL,
  `file_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sťahujem dáta pre tabuľku `menu`
--

INSERT INTO `menu` (`idmenu`, `nazov`, `file_path`) VALUES
(7, 'Home', 'index.php'),
(8, 'About', './about.php');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `post`
--

CREATE TABLE `post` (
  `idpost` int(11) NOT NULL,
  `fotka_upravena` varchar(255) NOT NULL,
  `user_iduser` int(11) NOT NULL,
  `popis` varchar(255) DEFAULT NULL,
  `fotka` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sťahujem dáta pre tabuľku `post`
--

INSERT INTO `post` (`idpost`, `fotka_upravena`, `user_iduser`, `popis`, `fotka`) VALUES
(5, 'img/tm-img-12-tn.jpg', 3, 'popis k fotecke :))', 'img/tm-img-12.jpg'),
(6, 'img/tm-img-13-tn.jpg', 4, 'popis k fotecke :))', 'img/tm-img-13.jpg'),
(7, '/uploads/6-small.jpg', 0, 'popis k fotecke :))', '/uploads/6-small.jpg'),
(8, 'uploads/5-small.jpg', 6, 'popis k fotecke :))', 'uploads/5-small.jpg'),
(11, 'uploads/7-small.jpg', 17, 'popis k fotecke :))', 'uploads/7-small.jpg'),
(13, 'uploads/1-large.jpg', 1, 'popistek hahaha', 'uploads/1-large.jpg'),
(14, 'uploads/8-large.jpg', 2, 'toto je moja fotka ', 'uploads/8-large.jpg'),
(15, 'uploads/8-small.jpg', 2, 'ghjgh', 'uploads/8-small.jpg'),
(16, 'uploads/3-small.jpg', 17, 'popis k fotkeeee', 'uploads/3-small.jpg');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `meno` varchar(45) NOT NULL,
  `priezvisko` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sťahujem dáta pre tabuľku `user`
--

INSERT INTO `user` (`iduser`, `meno`, `priezvisko`, `username`, `password`, `email`) VALUES
(1, 'Jozef', 'Mihálik', 'Mojjoj', '123456', 'jozef.mihalik2@student.ukf.sk'),
(2, 'Lukáš', 'Púchovský', 'Lusko', 'lusko21', 'lukas.puchovsky@student.ukf.sk'),
(6, 'Ivan', 'Veselka', 'Ivco', 'molosko', 'ivco@gmail.com'),
(16, 'skuska', 'skuska', 'skuska', 'skuska', 'skuska@gmail.com'),
(17, 'bot', 'bot', 'bot', '123', 'bot@bot.com');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idmenu`);

--
-- Indexy pre tabuľku `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`idpost`);

--
-- Indexy pre tabuľku `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `menu`
--
ALTER TABLE `menu`
  MODIFY `idmenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pre tabuľku `post`
--
ALTER TABLE `post`
  MODIFY `idpost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pre tabuľku `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
