-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Erstellungszeit: 30. Jun 2015 um 08:17
-- Server Version: 5.5.38
-- PHP-Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Datenbank: `audi-konfigurator`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `assistenzsysteme`
--

CREATE TABLE `assistenzsysteme` (
`AssiID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Preis` decimal(10,0) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `assistenzsysteme`
--

INSERT INTO `assistenzsysteme` (`AssiID`, `Name`, `Preis`) VALUES
(1, 'Dynamiklenkung', 1400),
(2, 'Einparkhilfe plus', 200),
(3, 'Rückfahrkamera', 620),
(4, 'Tempomat', 300),
(5, 'Head-up Display', 1380),
(6, 'Adaptive Cruise Control', 1520),
(7, 'Anfahassistent', 0),
(8, 'Audi Active Lane Assist', 550),
(9, 'Audi pre sense basic', 0),
(10, 'Einparkhilfe', 0),
(11, 'Front-Rückfahrkamera', 780),
(12, 'Kamerabasierte Tempolimitanzeige', 150),
(13, 'Nachtsichtassistent', 2000);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `entertainment`
--

CREATE TABLE `entertainment` (
`EntertainmentSystemID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Preis` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `entertainment`
--

INSERT INTO `entertainment` (`EntertainmentSystemID`, `Name`, `Preis`) VALUES
(1, 'MMI Navigation plus', 2390),
(2, 'BOSE Surround Sound', 695),
(3, 'Mitterldisplay', 0),
(4, 'Fahrerinformationssystem', 180),
(5, 'Navigationspaket', 1160),
(6, '4 Passivlautsprecher vorn', 0),
(7, 'Audi music interface', 245),
(8, 'Audi music interface online', 290),
(9, 'Audi sound system', 250),
(10, 'CD-Wechsler', 410),
(11, 'Digitaler Radioempfang', 300),
(12, 'MMI Radio', 425),
(13, 'Radioanlage chorus', 0),
(14, 'Audi connect inklusive Autotelefon', 500),
(15, 'Audi phone box', 640),
(16, 'Bluetooth-Schnittstelle', 300),
(17, 'Connectivity-Paket', 570),
(18, 'media-Paket', 900),
(19, 'Bang & Olufsen Sound System', 790),
(20, 'MMI Navigation plus mit MMI touch', 2725),
(21, 'Audi Radio', 0),
(22, 'AUX-IN Eingang', 0),
(23, 'Passiv-Lautsprecher vorn und hinten', 0),
(24, 'Audi drive select', 200),
(25, 'Fahrerinformationssystem mit Effizienzprogramm', 0),
(26, 'Radioanlage concert', 360),
(27, 'Radioanlage symphony', 620),
(28, 'Single-CD-Laufwerk', 0),
(29, 'Vorbereitung für Rear Seat Entertainment', 155),
(30, 'Fahrerinformationssystem mit Farbdisplay ', 0),
(31, 'CD-Wechsler für MMI® Navigation', 420),
(32, 'CD-Wechsler für MMI® Navigation plus ', 420),
(33, 'Acht Passivlautsprecher vorn, Gesamtleistung 80 Watt', 0),
(34, 'Head-up Display', 1380),
(35, 'Bang & Olufsen Advanced Sound System', 6000),
(36, 'Eingabemedium für Multi Media ', 0),
(37, 'Fahrerinformationssystem mit 7-Zoll-Farbdisplay', 390),
(38, 'Digitaler TV- und Radioempfang ', 1465),
(39, 'Digitaler TV-Empfang', 1075),
(40, 'DVD-/CD-Wechsler', 650),
(41, 'Komfortklimaautomatik 4-Zonen', 0),
(42, 'Audi virtual cockpit', 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `farben`
--

CREATE TABLE `farben` (
`FarbID` int(11) NOT NULL,
  `Effekt` varchar(255) NOT NULL,
  `Farbton` varchar(255) NOT NULL,
  `Preis` decimal(10,0) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `farben`
--

INSERT INTO `farben` (`FarbID`, `Effekt`, `Farbton`, `Preis`) VALUES
(1, 'Uni', 'Dynamitrot', 0),
(2, 'Uni', 'Ibisweiß', 0),
(3, 'Metallic', 'Carmouflagegrün', 0),
(4, 'Metallic', 'Suzukagrau', 0),
(5, 'Perleffekt', 'Daytonagrau', 0),
(6, 'Kristall', 'Arablau', 1550),
(7, 'Perleffekt', 'Classicrot', 3100),
(8, 'Perleffekt', 'Palaisblau', 3100),
(9, 'Individuallackierung', 'Individual', 3100);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `felgen`
--

CREATE TABLE `felgen` (
`FelgenID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Groeße` int(11) NOT NULL,
  `Farbe` varchar(255) NOT NULL,
  `Hersteller` varchar(255) NOT NULL,
  `Preis` decimal(10,0) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `felgen`
--

INSERT INTO `felgen` (`FelgenID`, `Name`, `Groeße`, `Farbe`, `Hersteller`, `Preis`) VALUES
(1, 'Aluminium-Felgen', 17, 'Silber', 'Audi', 0),
(2, 'Aluminium-Gussrad', 18, 'Silber', 'Audi', 1300),
(3, 'Alu-Gussrad Titan-Optik (Matt)', 19, 'Titangrau', 'Audi', 3150),
(4, 'Alu-Schmiederad Titan-Optik (Matt)', 20, 'Titangrau', 'Audi', 3750),
(5, 'Alu-Gussrad Audi-Sport', 21, 'Titangrau', 'Audi', 4350),
(6, 'Alu-Gussrad Raptr', 21, 'Schwarz (Matt)', 'Alutec', 5300),
(7, 'Alu-Gussrad Shark', 21, 'Scharz-Silber', 'Alutec', 4700),
(8, 'Alu-Gussrad Poison (konkav)', 21, 'Silber', 'Alutec', 4820);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `lichter`
--

CREATE TABLE `lichter` (
`LichtID` int(11) NOT NULL,
  `Art` varchar(255) NOT NULL,
  `FahrzeugID` varchar(255) NOT NULL,
  `Preis` decimal(11,0) NOT NULL,
  `Seite` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `lichter`
--

INSERT INTO `lichter` (`LichtID`, `Art`, `FahrzeugID`, `Preis`, `Seite`) VALUES
(1, 'Halogen', '', 0, 'Front'),
(2, 'Xenon plus', '', 900, 'Front'),
(4, 'LED', '', 250, 'Heck'),
(5, 'Nebelscheinwerfer', '', 150, 'Front'),
(6, 'LED', '', 1690, 'Front'),
(7, 'Halogen', '', 0, 'Heck'),
(8, 'LED+dynBlinker', '', 0, 'Heck'),
(9, 'Matrix-LED', '', 960, 'Front'),
(10, 'LED-Laserlicht', '', 3380, 'Front');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `modelle`
--

CREATE TABLE `modelle` (
  `ModellID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `modelle`
--

INSERT INTO `modelle` (`ModellID`, `Name`) VALUES
(1, 'A1'),
(3, 'A3'),
(4, 'A4'),
(5, 'A5'),
(6, 'A6'),
(7, 'A7'),
(8, 'A8'),
(88, 'R8'),
(11, 'S1'),
(13, 'S3'),
(14, 'S4'),
(15, 'S5'),
(16, 'S6'),
(17, 'S7'),
(18, 'S8'),
(99, 'TT');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `motor`
--

CREATE TABLE `motor` (
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
(1, 'V10 5.2 FSI', 88, 'Benzin', 540, 397, 165000, 11.4, 16.7, 8.4, 272),
(2, 'V10 plus 5.2 FSI', 88, 'Benzin', 610, 449, 187400, 12.3, 17.5, 9.3, 287),
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
(43, 'V12 plus 6.4 TFSI LPS-Edition', 88, 'Benzin', 1024, 753, 1874000, 13.3, 18.5, 10.3, 333);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pakete`
--

CREATE TABLE `pakete` (
`PaketID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Beschreibung` text
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `pakete`
--

INSERT INTO `pakete` (`PaketID`, `Name`, `Beschreibung`) VALUES
(1, 'Sport', 'Das Sportpaket bietet maximalen Fahrspaß bei optimalen Fahrwerkseinstellungen. Aber Achtung: der Sprit ist schneller weg als Sie tanken können! ;-)'),
(2, 'Eco', 'Das Paket schlechthin für die Ökos unter uns, denen sportliche Eigenschaften egal sind und die möglichst viel Sparen wollen! :-)'),
(3, 'Luxus', 'Für alle die es teuer lieben! Hier bieten wir Ihnen das teuerste vom teuren. Inklusive Echtleder-Sitze, 12.2 Surround-Sound-Anlage. Nichts für den kleinen Geldbeutel!'),
(4, 'Hippie', 'Ist das aufgemotzte Auto ihr Traum? Mit diesem Paket bekommen sie das ausgefallenste! Von Hydraulik über bunte Farben bis hin zum farbigen Auspuff.');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `reifen`
--

CREATE TABLE `reifen` (
`ReifenID` int(11) NOT NULL,
  `Hersteller` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Groeße` int(11) NOT NULL,
  `Preis` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `reifen`
--

INSERT INTO `reifen` (`ReifenID`, `Hersteller`, `Name`, `Groeße`, `Preis`) VALUES
(1, 'Bridgestone', 'Potenzial', 0, 500),
(2, 'Bridgestone', 'Turanza', 0, 600),
(3, 'Bridgestone', 'Dueler', 0, 800),
(4, 'Bridgestone', 'Ecopia', 0, 500),
(5, 'Dunlop', 'Street Response 2', 0, 400),
(6, 'Dunlop', 'Sport Maxx RT', 0, 600),
(7, 'Dunlop', 'Sport BluResponse', 0, 600),
(8, 'Dunlop', 'SP Sport Maxx GT', 0, 800),
(9, 'Michelin ', 'Alpine 5', 0, 450),
(10, 'Michelin ', 'Pilot Alpine 5', 0, 600),
(11, 'Michelin ', 'Energy Saver Plus', 0, 800),
(12, 'Michelin ', 'Alpine Supersport', 0, 900);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ReifenFelgen`
--

CREATE TABLE `ReifenFelgen` (
  `ReifenID` int(11) NOT NULL,
  `FelgenID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `ReifenFelgen`
--

INSERT INTO `ReifenFelgen` (`ReifenID`, `FelgenID`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 2),
(6, 2),
(7, 3),
(8, 3),
(9, 4),
(10, 6),
(10, 7),
(10, 8),
(11, 6),
(11, 7),
(11, 8),
(12, 5),
(12, 6),
(12, 8);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sitze`
--

CREATE TABLE `sitze` (
`SitzID` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Preis` decimal(10,0) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `sitze`
--

INSERT INTO `sitze` (`SitzID`, `Name`, `Preis`) VALUES
(1, 'Sportsitz', 200),
(2, 'Schalensitz', 645),
(4, 'Normalsitz', 150),
(5, 'Komfortsitz', 3400);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
`UserID` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Firstname` varchar(255) DEFAULT NULL,
  `Lastname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`UserID`, `Username`, `Password`, `Firstname`, `Lastname`) VALUES
(1, 'root', 'root', NULL, NULL),
(2, 'admin2', 'supersicherespasswort', NULL, NULL),
(3, 'maxmuster', 'maxiliebtautos1', 'Max', 'Mustermann');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `zubehoer`
--

CREATE TABLE `zubehoer` (
`ZubehoerID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Preis` decimal(10,0) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `zubehoer`
--

INSERT INTO `zubehoer` (`ZubehoerID`, `Name`, `Preis`) VALUES
(1, 'Aluminium-Pedale', 95),
(2, 'AUX-Anschluss-Kabel', 15),
(3, 'USB-Adapter', 25),
(4, 'Audi-Minischale', 220),
(5, 'Isofix-Basis', 210),
(6, 'Fahrrad-Halter', 119),
(7, 'Heckspoiler', 500),
(8, 'Radschrauben', 50),
(9, 'Ventlikappen', 20),
(10, 'Dachträgertasche', 39),
(11, 'Ski-und Gepäckbox 405L', 660);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `assistenzsysteme`
--
ALTER TABLE `assistenzsysteme`
 ADD PRIMARY KEY (`AssiID`);

--
-- Indizes für die Tabelle `entertainment`
--
ALTER TABLE `entertainment`
 ADD PRIMARY KEY (`EntertainmentSystemID`);

--
-- Indizes für die Tabelle `farben`
--
ALTER TABLE `farben`
 ADD PRIMARY KEY (`FarbID`);

--
-- Indizes für die Tabelle `felgen`
--
ALTER TABLE `felgen`
 ADD PRIMARY KEY (`FelgenID`);

--
-- Indizes für die Tabelle `lichter`
--
ALTER TABLE `lichter`
 ADD PRIMARY KEY (`LichtID`);

--
-- Indizes für die Tabelle `modelle`
--
ALTER TABLE `modelle`
 ADD PRIMARY KEY (`ModellID`), ADD UNIQUE KEY `Name` (`Name`);

--
-- Indizes für die Tabelle `motor`
--
ALTER TABLE `motor`
 ADD PRIMARY KEY (`MotorID`);

--
-- Indizes für die Tabelle `pakete`
--
ALTER TABLE `pakete`
 ADD PRIMARY KEY (`PaketID`), ADD UNIQUE KEY `name` (`Name`);

--
-- Indizes für die Tabelle `reifen`
--
ALTER TABLE `reifen`
 ADD PRIMARY KEY (`ReifenID`);

--
-- Indizes für die Tabelle `ReifenFelgen`
--
ALTER TABLE `ReifenFelgen`
 ADD PRIMARY KEY (`ReifenID`,`FelgenID`);

--
-- Indizes für die Tabelle `sitze`
--
ALTER TABLE `sitze`
 ADD PRIMARY KEY (`SitzID`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`UserID`), ADD UNIQUE KEY `user` (`Username`);

--
-- Indizes für die Tabelle `zubehoer`
--
ALTER TABLE `zubehoer`
 ADD PRIMARY KEY (`ZubehoerID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `assistenzsysteme`
--
ALTER TABLE `assistenzsysteme`
MODIFY `AssiID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT für Tabelle `entertainment`
--
ALTER TABLE `entertainment`
MODIFY `EntertainmentSystemID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT für Tabelle `farben`
--
ALTER TABLE `farben`
MODIFY `FarbID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT für Tabelle `felgen`
--
ALTER TABLE `felgen`
MODIFY `FelgenID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT für Tabelle `lichter`
--
ALTER TABLE `lichter`
MODIFY `LichtID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT für Tabelle `motor`
--
ALTER TABLE `motor`
MODIFY `MotorID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT für Tabelle `pakete`
--
ALTER TABLE `pakete`
MODIFY `PaketID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT für Tabelle `reifen`
--
ALTER TABLE `reifen`
MODIFY `ReifenID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT für Tabelle `sitze`
--
ALTER TABLE `sitze`
MODIFY `SitzID` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT für Tabelle `zubehoer`
--
ALTER TABLE `zubehoer`
MODIFY `ZubehoerID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
