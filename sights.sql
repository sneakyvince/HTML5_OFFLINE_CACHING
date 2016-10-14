-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Host: studmysql01.fhict.local
-- Gegenereerd op: 14 okt 2016 om 11:31
-- Serverversie: 5.7.13-log
-- PHP-versie: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbi342465`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `sights`
--

CREATE TABLE `sights` (
  `sightid` int(50) NOT NULL,
  `sightname` varchar(50) NOT NULL,
  `sightdesc` varchar(5000) NOT NULL,
  `sightcity` varchar(50) NOT NULL,
  `sightimg` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `sights`
--

INSERT INTO `sights` (`sightid`, `sightname`, `sightdesc`, `sightcity`, `sightimg`) VALUES
(1, 'Colosseum', 'Located just east of the Roman Forum, the massive stone amphitheater known as the Colosseum was commissioned around A.D. 70-72 by Emperor Vespasian of the Flavian dynasty as a gift to the Roman people. In A.D. 80, Vespasian’s son Titus opened the Colosseum–officially known as the Flavian Amphitheater–with 100 days of games, including gladiatorial combats and wild animal fights. After four centuries of active use, the magnificent arena fell into neglect, and up until the 18th century it was used as a source of building materials. Though two-thirds of the original Colosseum has been destroyed over time, the amphitheater remains a popular tourist destination, as well as an iconic symbol of Rome and its long, tumultuous history.<br>\r\n\r\n\r\nEven after the decadent Roman emperor Nero took his own life in A.D. 68, his misrule and excesses fueled a series of civil wars. No fewer than four emperors took the throne in the tumultuous year after Nero’s death; the fourth, Vespasian, would end up ruling for 10 years (A.D. 69-79). The Flavian emperors, as Vespasian and his sons Titus (79-81) and Domitian (81-96) were known, attempted to tone down the excesses of the Roman court, restore Senate authority and promote public welfare. Around 70-72, Vespasian returned to the Roman people the lush land near the center of the city, where Nero had built an enormous palace for himself after a great fire ripped through Rome in A.D. 64. On the site of that Golden Palace, he decreed, would be built a new amphitheater where the public could enjoy gladiatorial combats and other forms of entertainment.', 'Rome', 'colosseum-palatine-hill.jpg'),
(2, 'Pantheon', 'The Pantheon is a temple!', 'Rome', '20150906-164825-largejpg.jpg'),
(3, 'Arcibasilica di San Giovanni in Laterano', 'The cathedral church of Rome!', 'Rome', 'inside-the-basilica.jpg'),
(4, 'Stadhuis', 'Het stadhuis in Venlo, midden in de stad', 'Venlo', 'stadhuisvenlo.jpg'),
(5, 'Evoluon', 'Dit is het Evoluon!', 'Eindhoven', 'evoluon.jpg');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `sights`
--
ALTER TABLE `sights`
  ADD PRIMARY KEY (`sightid`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `sights`
--
ALTER TABLE `sights`
  MODIFY `sightid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
