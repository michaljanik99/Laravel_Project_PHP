-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Czas generowania: 23 Cze 2022, 15:15
-- Wersja serwera: 5.7.34
-- Wersja PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `manage_your_tasks_db`
--
CREATE DATABASE IF NOT EXISTS `manage_your_tasks_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `manage_your_tasks_db`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Positions`
--

CREATE TABLE `Positions` (
  `Id` int(11) NOT NULL,
  `Title` varchar(64) NOT NULL,
  `IsActive` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `Positions`
--

INSERT INTO `Positions` (`Id`, `Title`, `IsActive`) VALUES
(1, 'Kierownik', b'1'),
(2, 'Pracownik działu IT', b'1'),
(3, 'CEO', b'1'),
(4, 'Pracownik działu HR', b'1'),
(5, 'Pracownik działu QA', b'1'),
(6, 'Pracownik działu kontentowego', b'1');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Priorityes`
--

CREATE TABLE `Priorityes` (
  `Id` int(11) NOT NULL,
  `Title` varchar(64) NOT NULL,
  `IsActive` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `Priorityes`
--

INSERT INTO `Priorityes` (`Id`, `Title`, `IsActive`) VALUES
(1, 'Wysoki', b'1'),
(2, 'Średni', b'1'),
(3, 'Niski', b'1'),
(4, 'Krytyczny', b'1'),
(5, 'TEST', b'0');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Sprints`
--

CREATE TABLE `Sprints` (
  `Id` int(11) NOT NULL,
  `Title` varchar(256) NOT NULL,
  `CreationDateTime` datetime NOT NULL,
  `StartDateTime` datetime NOT NULL,
  `EndDateTime` datetime NOT NULL,
  `CreatedById` int(11) NOT NULL,
  `IsActive` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `Sprints`
--

INSERT INTO `Sprints` (`Id`, `Title`, `CreationDateTime`, `StartDateTime`, `EndDateTime`, `CreatedById`, `IsActive`) VALUES
(1, 'Sprint1', '2022-06-23 16:44:58', '2022-06-23 03:44:00', '2022-06-30 18:44:00', 2, b'1'),
(2, 'Sprint2', '2022-06-23 16:45:47', '2022-06-23 16:45:00', '2022-11-11 18:45:00', 4, b'1');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Tasks`
--

CREATE TABLE `Tasks` (
  `Id` int(11) NOT NULL,
  `Title` varchar(256) NOT NULL,
  `Description` varchar(256) NOT NULL,
  `SprintId` int(11) DEFAULT NULL,
  `PriorityId` int(11) DEFAULT NULL,
  `UserId` int(11) DEFAULT NULL,
  `Status` varchar(64) NOT NULL DEFAULT 'To Do',
  `CreationDateTime` datetime NOT NULL,
  `IsActive` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `Tasks`
--

INSERT INTO `Tasks` (`Id`, `Title`, `Description`, `SprintId`, `PriorityId`, `UserId`, `Status`, `CreationDateTime`, `IsActive`) VALUES
(1, 'Stworzenie strony WWW', 'Potrzebujemy stworzyć stronę dla naszego projektu', 1, 2, 1, 'To Do', '2022-06-23 16:47:37', b'1'),
(2, 'Designy', 'Potrzebuje stworzyć designy dla projektu', 1, 1, 2, 'In Progress', '2022-06-23 16:48:16', b'1'),
(3, 'Rozmowa z klientem', 'Rozmowa z klientam o najważniejszych zagadnieniach projektu', 1, 2, 2, 'Done', '2022-06-23 16:49:12', b'1'),
(4, 'Przygotowanie audytu SEO', 'Zlecenie audytu Seo', 1, 3, 3, 'To Do', '2022-06-23 16:50:06', b'1');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Users`
--

CREATE TABLE `Users` (
  `Id` int(11) NOT NULL,
  `Name` varchar(64) NOT NULL,
  `Surname` varchar(64) NOT NULL,
  `PositionId` int(11) DEFAULT NULL,
  `Adress` varchar(256) NOT NULL,
  `IsActive` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `Users`
--

INSERT INTO `Users` (`Id`, `Name`, `Surname`, `PositionId`, `Adress`, `IsActive`) VALUES
(1, 'Jan', 'Kowalski', 2, 'Jaworowo 24', b'1'),
(2, 'Ryszard', 'Kalisz', 4, 'Kaliszowo 12/13', b'1'),
(3, 'Major', 'Suchodolski', 1, 'Białystok 39-200', b'1'),
(4, 'Jan', 'Bezziemi', 3, 'Gniezno 23', b'1');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `Positions`
--
ALTER TABLE `Positions`
  ADD PRIMARY KEY (`Id`);

--
-- Indeksy dla tabeli `Priorityes`
--
ALTER TABLE `Priorityes`
  ADD PRIMARY KEY (`Id`);

--
-- Indeksy dla tabeli `Sprints`
--
ALTER TABLE `Sprints`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `tr` (`CreatedById`);

--
-- Indeksy dla tabeli `Tasks`
--
ALTER TABLE `Tasks`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `test2` (`PriorityId`),
  ADD KEY `test3` (`UserId`),
  ADD KEY `SprintId` (`SprintId`);

--
-- Indeksy dla tabeli `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `PositionId` (`PositionId`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `Positions`
--
ALTER TABLE `Positions`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `Priorityes`
--
ALTER TABLE `Priorityes`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `Sprints`
--
ALTER TABLE `Sprints`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `Tasks`
--
ALTER TABLE `Tasks`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `Users`
--
ALTER TABLE `Users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `Sprints`
--
ALTER TABLE `Sprints`
  ADD CONSTRAINT `tr` FOREIGN KEY (`CreatedById`) REFERENCES `users` (`Id`);

--
-- Ograniczenia dla tabeli `Tasks`
--
ALTER TABLE `Tasks`
  ADD CONSTRAINT `test` FOREIGN KEY (`SprintId`) REFERENCES `sprints` (`Id`),
  ADD CONSTRAINT `test2` FOREIGN KEY (`PriorityId`) REFERENCES `priorityes` (`Id`),
  ADD CONSTRAINT `test3` FOREIGN KEY (`UserId`) REFERENCES `users` (`Id`);

--
-- Ograniczenia dla tabeli `Users`
--
ALTER TABLE `Users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`PositionId`) REFERENCES `positions` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
