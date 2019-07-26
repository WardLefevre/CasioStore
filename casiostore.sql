-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 27 dec 2018 om 21:48
-- Serverversie: 10.1.35-MariaDB
-- PHP-versie: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `casiostore`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `account`
--

CREATE TABLE `account` (
  `accountnr` int(10) NOT NULL,
  `naam` varchar(100) NOT NULL,
  `voornaam` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `wachtwoord` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `account`
--

INSERT INTO `account` (`accountnr`, `naam`, `voornaam`, `email`, `wachtwoord`) VALUES
(1, 'Lefevre', 'Ward', 'wardlefevre97@gmail.com', 'qwertyuiop'),
(3, 'Webgebruiker', 'Webgebruiker', 'webgebruiker@mail.com', 'Labo2018');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bestelling`
--

CREATE TABLE `bestelling` (
  `bestellingnr` int(100) NOT NULL,
  `accountnr` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `bestelling`
--

INSERT INTO `bestelling` (`bestellingnr`, `accountnr`) VALUES
(25, 1),
(26, 0),
(27, 3);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `item`
--

CREATE TABLE `item` (
  `itemnr` int(100) NOT NULL,
  `bestellingnr` int(100) NOT NULL,
  `productnr` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `item`
--

INSERT INTO `item` (`itemnr`, `bestellingnr`, `productnr`) VALUES
(52, 26, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product`
--

CREATE TABLE `product` (
  `productnr` int(100) NOT NULL,
  `naam` varchar(100) NOT NULL,
  `categorie` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `prijs` int(100) NOT NULL,
  `afbeelding` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `product`
--

INSERT INTO `product` (`productnr`, `naam`, `categorie`, `type`, `prijs`, `afbeelding`) VALUES
(1, 'BGA230S-2A', 'Baby-G', 'Analoog', 49, 'BGA230S-2A_large.png'),
(2, 'BGA230SA-4A', 'Baby-G', 'Analoog', 19, 'BGA230SA-4A_large.png'),
(3, 'CA506B-1AVT', 'Calculator', 'Digitaal', 119, 'CA506B-1AVT_large.png'),
(4, 'BLX560-2', 'Baby-G', 'Digitaal', 45, 'BLX560-2_large.png'),
(5, 'BLX560-3', 'Baby-G', 'Digitaal', 12, 'BLX560-3_large.png'),
(6, 'CA506G-9AVT', 'Calculator', 'Digitaal', 199, 'CA506G-9AVT_large.png'),
(7, 'A158WA-1', 'Classic', 'Digitaal', 19, 'A158WA-1_large.png'),
(8, 'A159WGEA-1VT', 'Classic', 'Digitaal', 56, 'A159WGEA-1VT_large.png'),
(9, 'F91W-1', 'Classic', 'Digitaal', 9, 'F91W-1_large.png'),
(10, 'MRW400H-1AV', 'Classic', 'Analoog', 19, 'MRW400H-1AV_large.png'),
(11, 'MRW400H-2AV', 'Classic', 'Analoog', 29, 'MRW400H-2AV_large.png'),
(12, 'DW5600CU-7', 'G-Shock', 'Digitaal', 44, 'DW5600CU-7_large.png'),
(13, 'DW5600LCU-1', 'G-Shock', 'Digitaal', 29, 'DW5600LCU-1_large.png'),
(14, 'GSTB100-1A', 'G-Shock', 'Analoog', 34, 'GSTB100-1A_large.png'),
(15, 'GSTB100XB-2A', 'G-Shock', 'Analoog', 89, 'GSTB100XB-2A_large.png'),
(16, 'AE1200WH-1A', 'World Time', 'Digitaal', 139, 'AE1200WH-1A_large.png'),
(17, 'AE1200WHD-1A', 'World Time', 'Digitaal', 119, 'AE1200WHD-1A_large.png');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`accountnr`);

--
-- Indexen voor tabel `bestelling`
--
ALTER TABLE `bestelling`
  ADD PRIMARY KEY (`bestellingnr`);

--
-- Indexen voor tabel `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`itemnr`);

--
-- Indexen voor tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productnr`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `account`
--
ALTER TABLE `account`
  MODIFY `accountnr` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `bestelling`
--
ALTER TABLE `bestelling`
  MODIFY `bestellingnr` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT voor een tabel `item`
--
ALTER TABLE `item`
  MODIFY `itemnr` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT voor een tabel `product`
--
ALTER TABLE `product`
  MODIFY `productnr` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
