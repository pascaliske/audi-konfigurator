-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 15. Jun 2015 um 21:37
-- Server Version: 5.6.21
-- PHP-Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `audi-konfigurator`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `motor`
--

CREATE TABLE IF NOT EXISTS `motor` (
`MotorID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `FahrzeugID` int(11) NOT NULL,
  `Kraftstoff` varchar(255) NOT NULL,
  `PSZahl` int(11) NOT NULL,
  `kWZahl` int(11) NOT NULL,
  `Preis` double NOT NULL,
  `VerbrauchKombiniert` double NOT NULL,
  `VerbrauchInnerorts` double NOT NULL,
  `VerbrauchAusserorts` double NOT NULL,
  `CO2Emmission` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `motor`
--

INSERT INTO `motor` (`MotorID`, `Name`, `FahrzeugID`, `Kraftstoff`, `PSZahl`, `kWZahl`, `Preis`, `VerbrauchKombiniert`, `VerbrauchInnerorts`, `VerbrauchAusserorts`, `CO2Emmission`) VALUES
(1, 'V10 5.2 FSI', 18, 'Benzin', 540, 397, 165000, 11.4, 16.7, 8.4, 272),
(2, 'V10 plus 5.2 FSI', 18, 'Benzin', 610, 449, 187400, 12.3, 17.5, 9.3, 287),
(5, '2.0 TFSI', 11, 'Benzin', 231, 170, 30800, 7.1, 9.2, 5.9, 166),
(6, '1.4 TFSI cylinder on demand', 1, 'Benzin', 150, 110, 23850, 4.7, 5.9, 4, 109),
(7, '1.0 TFSI ultra', 1, 'Benzin', 95, 70, 19500, 4.4, 5.4, 3.8, 102),
(8, '1.4 TDI ultra', 1, 'Diesel', 90, 66, 21750, 3.6, 4, 3.3, 94),
(9, '1.6 TDI', 1, 'Diesel', 116, 85, 22850, 3.7, 4.3, 3.4, 97),
(10, '2.5 TFSI', 13, 'Benzin', 367, 270, 52700, 8.1, 11.2, 6.3, 189),
(11, 'S line 1.2 TFSI', 3, 'Benzin', 110, 81, 27150, 5.1, 6.4, 4.4, 119),
(12, 'S line 1.8 TFSI', 3, 'Benzin', 180, 132, 35350, 6.6, 8.2, 5.7, 153),
(13, 'S line 1.6 TDI', 3, 'Diesel', 110, 81, 30050, 4.1, 4.6, 3.8, 107),
(14, 'S line 2.0 TDI', 3, 'Diesel', 184, 135, 38000, 4.9, 5.6, 4.5, 129),
(15, '4.2 FSI', 14, 'Benzin', 450, 331, 77900, 10.7, 14.6, 8.5, 249),
(16, 'S line 1.8 TFSI', 4, 'Benzin', 170, 125, 38630, 6.1, 7.6, 5.3, 141),
(17, 'S line 2.0 TFSI', 4, 'Benzin', 225, 165, 45530, 7.1, 9.1, 6, 164),
(18, 'S line 2.0 TDI', 4, 'Diesel', 150, 110, 40030, 4.8, 5.6, 4.3, 125),
(19, 'S line 2.0 TDI', 4, 'Diesel', 190, 140, 44780, 5.3, 6.2, 4.8, 139),
(20, '4.2 FSI', 15, 'Benzin', 450, 331, 79900, 10.5, 14.4, 8.3, 246),
(21, '1.8 TFSI', 5, 'Benzin', 144, 106, 32750, 5.8, 7.3, 4.9, 134),
(22, '3.0 TFSI', 5, 'Benzin', 272, 200, 49400, 7.6, 10.1, 6.2, 177),
(23, '2.0 TDI ultra', 5, 'Diesel', 136, 100, 34950, 4.2, 5.4, 3.9, 109),
(24, '3.0 TDI', 5, 'Diesel', 180, 245, 50750, 6.1, 7.3, 5.4, 159),
(25, '4.0 TFSI', 16, 'Benzin', 560, 412, 110000, 9.6, 13.4, 7.4, 223),
(26, '1.8 TFSI', 6, 'Benzin', 190, 144, 41500, 6.2, 7.8, 5.3, 144),
(27, '3.0 TFSI', 6, 'Benzin', 333, 245, 57400, 7.6, 9.9, 6.2, 177),
(28, '2.0 TDI ultra', 6, 'Diesel', 150, 110, 42200, 4.5, 5.3, 4, 117),
(29, '3.0 TDI competition', 6, 'Diesel', 326, 240, 70000, 6.4, 7.7, 5.7, 169),
(30, '4.0 TFSI', 17, 'Benzin', 560, 412, 114700, 9.5, 13.3, 7.3, 221),
(31, '2.0 TFSI', 7, 'Benzin', 252, 185, 52000, 6, 7.4, 5.2, 139),
(32, '3.0 TFSI', 7, 'Benzin', 333, 245, 62000, 7.7, 10.1, 6.3, 178),
(33, '3.0 TDI ultra', 7, 'Diesel', 218, 160, 55500, 4.8, 5.5, 4.4, 124),
(34, '3.0 TDI competition', 7, 'Diesel', 326, 240, 73100, 6.3, 7.6, 5.6, 167),
(35, '4.0 TFSI', 18, 'Benzin', 520, 382, 116900, 9.4, 13.2, 7.2, 216),
(36, 'W12 6.3 FSI', 18, 'Benzin', 500, 368, 143800, 11, 15.3, 8.4, 254),
(37, '3.0 TDI', 8, 'Diesel', 262, 193, 81000, 5.8, 7.3, 4.9, 151),
(38, '4.2 TDI', 8, 'Diesel', 385, 283, 100200, 7.2, 9.4, 6, 189),
(39, '4.0 TFSI', 8, 'Benzin', 435, 320, 102300, 8.9, 12.4, 6.9, 206),
(40, '2.0 TFSI', 99, 'Benzin', 310, 228, 49100, 7.1, 9.2, 5.9, 164),
(41, '2.0 TDI ultra', 99, 'Diesel', 184, 135, 35900, 4.2, 4.9, 3.7, 110),
(42, '2.0 TFSI', 99, 'Benzin', 230, 169, 37150, 6.3, 8.2, 5.2, 146),
(43, 'V12 plus 6.4 TFSI LPS-Edition', 18, 'Benzin', 1024, 753, 1874000, 13.3, 18.5, 10.3, 333);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `motor`
--
ALTER TABLE `motor`
 ADD PRIMARY KEY (`MotorID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `motor`
--
ALTER TABLE `motor`
MODIFY `MotorID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
