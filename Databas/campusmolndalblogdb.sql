-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 04 dec 2018 kl 13:30
-- Serverversion: 10.1.37-MariaDB
-- PHP-version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `campusmolndalblogdb`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `postTitle` varchar(100) CHARACTER SET latin1 NOT NULL,
  `postWriter` varchar(100) CHARACTER SET latin1 NOT NULL,
  `postDate` datetime NOT NULL,
  `postText` text CHARACTER SET latin1 NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumpning av Data i tabell `post`
--

INSERT INTO `post` (`id`, `postTitle`, `postWriter`, `postDate`, `postText`, `image`) VALUES
(41, 'Hur blir man en attraktiv arbetsgivare?', '', '2018-11-08 11:49:51', 'Igår var det en halvdagsworkshop på Campus Mölndal där flera av våra samarbetsföretag inom vårt IT-nätverk deltog. Vi hade bjudit in en föreläsare och flera företag från vårt nätverk. Temat för dagen är Attraktiv arbetsgivare/Employee Branding.', 0x3138313130385f43616d7075732d4d6f6c6e64616c5f576f726b73686f705f49542d666f72657461675f31322e6a7067),
(42, 'Hur funkar IT-projektledning inom offentliga sektorn?', '', '2018-10-23 11:51:06', 'Skiljer sig IT-projektledning inom den offentliga sektor mot den privata sektorn? Finns det andra typer av behov? Hör vad Kristian Matic tycker, han jobbar som IT-arkitekt inom Mölndal stad och är även en av initiativtagarna till YH-utbildningen IT-projektledare. Kristian arbetar med delar av stadens digitalisering och ser även behovet av utbildad personal med rätt kompetens för att leda omfattande projekt. ', 0x3138313031385f4e796865745f43616d7075732d4d6f6c6e64616c5f49542d70726f6a656b746c65646172655f4b7269737469616e2d4d61746963202e6a7067),
(43, 'Aktiveringspedagoger inom LSS genomför barnobservationer i utbildningssyfte', '', '2018-10-18 11:51:32', 'Yrkeshögskoleutbildningen Aktiveringspedagog inom LSS har fokus på aktivitet och ger dig ett vägledande förhållningssätt samt specialiserad kunskap om funktionsnedsättningar och dess konsekvenser. Som en inledande del i utbildningen ingår barnobservationer.', 0x3138313031385f4e796865745f43616d7075732d4d6f6c6e64616c5f416b7469766572696e677370656461676f672d696e6f6d2d4c53535f30352e6a7067),
(44, 'Utbildningen för dig som vill leda projekt och team', '', '2018-10-05 11:52:03', 'Vi har pratat med Madeleine Andrén som är lärare på YH-utbildningen IT-projektledare, om vad hon tänker om IT-branschen och vad man lär sig på utbildningen. Hon kom i kontakt med IT redan 1984 och har sedan dess arbetat med IT på många olika sätt, bland annat genom att hon drivit eget företag med kunder från IT-branschen i nitton år. ', 0x43616d7075732d4d6f6c6e64616c5f49542d70726f6a656b746c65646172655f6e79686574322e6a7067),
(45, 'Informationsträff för YH-utbildningen  IT-projektledare', '', '2018-10-03 11:52:55', 'Nu bjuder yrkeshögskoleutbildningen IT-projektledare med start på Campus Mölndal i januari 2019 in till informationsträff.', 0x43616d7075732d4d6f6c6e64616c5f496e666f74726166665f4954504c2e6a7067),
(46, 'Ett yrke med stora karriärmöjligheter', '', '2018-09-12 11:53:41', 'Yrkeshögskoleutbildningen IT-projektledare startar på Campus Mölndal i januari 2019. Att jobba som IT-projektledare passar dig som är intresserad av möjligheterna som finns med modern teknologi och vill leda människor. I ledningsgruppen för YH-utbildningen finns bland annat företaget Sigma IT-Consulting med. Representant från företaget är Lukas Pasic som är konsultchef och projektledande konsult på företaget.', 0x4e796865745f4c756b61732d50617a69635f776562622e6a7067);

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
