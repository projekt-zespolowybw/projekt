-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 26 Maj 2019, 19:54
-- Wersja serwera: 10.1.38-MariaDB
-- Wersja PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `firma_transportowa`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dane`
--

CREATE TABLE `dane` (
  `DAN_ID` int(11) NOT NULL,
  `DAN_IMIE` text COLLATE utf8mb4_polish_ci NOT NULL,
  `DAN_NAZWISKO` text COLLATE utf8mb4_polish_ci NOT NULL,
  `DAN_EMAIL` varchar(100) COLLATE utf8mb4_polish_ci NOT NULL,
  `DAN_LOGIN` varchar(100) COLLATE utf8mb4_polish_ci NOT NULL,
  `DAN_HASLO` varchar(100) COLLATE utf8mb4_polish_ci NOT NULL,
  `DAN_PRACOWNIK` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `dane`
--

INSERT INTO `dane` (`DAN_ID`, `DAN_IMIE`, `DAN_NAZWISKO`, `DAN_EMAIL`, `DAN_LOGIN`, `DAN_HASLO`, `DAN_PRACOWNIK`) VALUES
(1, 'klient1', 'klient1', 'klient1@op.pl', 'klient1', 'wrona123', 0),
(2, 'klient2', 'klient2', 'klient2@op.pl', 'klient2', 'qwerty123', 0),
(3, 'klient3', 'klient3', 'klient3@op.pl', 'klient3', '$2y$10$.RW4uQSIDmO0GRPBgL8Y1uf/GVA9GOUCyhG4C4zvaq26T4GrEW.eG', 0),
(4, 'klient4', 'klient4', 'klient4@op.pl', 'klient4', '$2y$10$xvJ1l2Qz0q7zcdssim5rE.iWwL9fSROPI4Sg.id0UztF73Z.JYfAy', 0),
(5, 'klient5', 'klient5', 'klient5@opp.pl', 'klient5', '$2y$10$ai49lQgDz7hekmcp4E7JBuy7Pk7QST./A2SXEwH06jgvTNOoJwr7O', 0),
(6, 'klient6', 'klient6', 'klient6@opo.pl', 'klient6', '$2y$10$neFxZwX79DMPefPA8/Q0OuADXWwdZvsCXnTvDzQloyd/fG9pzL.Wi', 0),
(7, 'pracownik1', 'pracownik1', 'pracownik1@op.pl', 'pracownik1', '$2y$10$vYJUg0ar6svcQLGmqw7CW.sxFDpyVZe.C//0sEbQpTqulPsRuall6', 1),
(8, 'klient7', 'klient7', 'klient7@op.pl', 'klient7', '$2y$10$rf2qwvGohO6rK2/9.aUcVucfoVMOmZ6jkYw0qzEiBmGw5YvWLqDv2', 0),
(9, 'klient8', 'klient8', 'klient8@op.pl', 'klient8', '$2y$10$zpVl5NjFH2GxnR.Qkoxhi.9zPA2Ly4z89WRaNK4nWwiOG0gs/Fj/a', 0),
(10, 'klient9', 'klient9', 'klient9@opp.pl', 'klient9', '$2y$10$buD0XQDioimShKeAT/sIV.5W.YKXxuXjWD.PCicifeqAitr/K793a', 0),
(11, 'klient10', 'klient10', 'klient10@op.pl', 'klient10', '$2y$10$ZJN/D6QIgk.NuNxHmBR9oOB6Wo5uKK2xvzeWMWEiU40RVYpM16JRa', 0),
(12, 'klient11', 'klient11', 'klient11@op.pl', 'klient11', '$2y$10$.w2Tm4P/mT0hFlVtPqktF.XrE/7E5GV0W3/Y94wkk1n7QZoEBbvni', 0),
(13, 'klient12', 'klient12', 'klient12@op.pl', 'klient12', '$2y$10$3euYsZmrFNAZmAILSLyFuOtgDDuZeip/EESDRiHQmmNnHXRLywhiC', 0),
(14, 'klient13', 'klient13', 'klient13@op.pl', 'klient13', '$2y$10$Wk8locBSRlImJkpvGaLDSewTz28zeWpLk1onnW0rh6ulEe5UHQSK.', 0),
(15, 'klient14', 'klient14', 'klient14@op.pl', 'klient14', '$2y$10$PbKge5CpUQnBBzPA5y2oU.qzwlJncjtvUebXT74WF3KyNZGCID8pC', 0),
(16, 'klient15', 'klient15', 'klient15@op.pl', 'klient15', '$2y$10$UzOYXhAiKzXHTwU461Rzlu5hPTuCafSjbobzSa0MMNLsQFEjNpPQu', 0),
(17, 'klient16', 'klient16', 'klient16@op.pl', 'klient16', 'qwerty123', 0),
(18, 'pracownik2', 'pracownik2', 'pracownik2@op.pl', 'pracownik2', '$2y$10$zOQ1H2GUC0Ry5A.HSEtl6OopUjNDvjhgrBVvf6A7Mbv.fW9ZF2zeW', 1),
(19, 'klient17', 'klient17', 'klient17@op.pl', 'klient17', '$2y$10$IVDuh6nLBYrmgSa96aDjSenOaeDNp30XtZh9G0aMFFZGNa4kPgASK', 0),
(20, 'klient18', 'klient18', 'klient18@op.pl', 'klient18', '$2y$10$4U9I87n9xD243.agCrfa7eAW3P/ZoLWGilovy9TsXz8hWuE0EJRL.', 0),
(21, 'klient19', 'klient19', 'klient19@op.pl', 'klient19', '$2y$10$SkvR5j5LtSY4KtHQtvmCg.hepwYLdRNiMmFgjLdPnqMuWu8OlaXOq', 0),
(22, 'klient20', 'klient20', 'klient20@op.pl', 'klient20', '$2y$10$j7y0OwL2u9c0nZT3u7ctoelvFahN7kyWA0pws4KQ5hFjQQ3g2srRe', 0),
(23, 'pracownik3', 'pracownik3', 'pracownik3@op.pl', 'pracownik3', '$2y$10$y3b/3RPfd0yrv3cXb3qWee3W0hEdNd3OwWQQGT33P6AMESvcmwlOW', 1),
(24, 'pracownik4', 'pracownik4', 'pracownik4@op.pl', 'pracownik4', '$2y$10$1IwV3i6Rzym0w1cshqrVhessFR76ljKb8lyb8LOUQ52G9/9vrolJa', 1),
(25, 'pracownik5', 'pracownik5', 'pracownik5@op.pl', 'pracownik5', '$2y$10$DWpdomvHSZmqt22wsmMou.HXXG4Vzv9v3CCA9N/YZ56UsJ.UIDivS', 1),
(26, 'pracownik6', 'pracownik6', 'pracownik6@op.pl', 'pracownik6', '$2y$10$rfCntpUxHUrMXcvhWRSC8uNrdKfodX6IVwOyJqIBMuTDgadHpDmu2', 1),
(27, 'kierowca7', 'kierowca7', 'kierowca7@op.pl', 'kierowca7', '$2y$10$Eid5ifne8wBvoOk/HOZ/M.AvXmObBXXMqe5TXcaUpZbecYUj58JoC', 1),
(28, 'kierowca8', 'kierowca8', 'kierowca8@op.pl', 'kierowca8', '$2y$10$D7SMuDNvxNN9uHbwal9GXehoPWRi3XnqUOObaiB8RV8q589uUMc0u', 1),
(29, 'kierowca9', 'kierowca9', 'kierowca9@ok.pl', 'kierowca9', '$2y$10$dI7HtOfWDfSR49jrebwgMu3mAgqzLap4J5VYhSAA2jIF2kfALGFZS', 1),
(30, 'kierowca10', 'kierowca10', 'kierowca10@ok.pl', 'kierowca10', '$2y$10$0p5rjao/s8fzApwjU4iCleGFfkuBMBu/9pPbLeeTLi2TqWx7zLgI6', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `grafik`
--

CREATE TABLE `grafik` (
  `GRA_ID` int(11) NOT NULL,
  `GRA_DATAOD` date NOT NULL,
  `GRA_DATADO` date NOT NULL,
  `KUR_ID` int(11) NOT NULL,
  `KIE_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kierowca`
--

CREATE TABLE `kierowca` (
  `KIE_ID` int(11) NOT NULL,
  `KIE_LICENCJA` varchar(4) COLLATE utf8mb4_polish_ci NOT NULL,
  `KIE_ILOSCKM` int(11) NOT NULL,
  `PRA_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `kierowca`
--

INSERT INTO `kierowca` (`KIE_ID`, `KIE_LICENCJA`, `KIE_ILOSCKM`, `PRA_ID`) VALUES
(1, 'D', 780, 3),
(2, 'D', 4500, 5),
(3, 'D', 0, 6),
(4, 'D', 688, 7),
(5, 'D', 800, 8),
(6, 'D', 6500, 9);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klient`
--

CREATE TABLE `klient` (
  `KLI_ID` int(11) NOT NULL,
  `KLI_PUNKTY` int(10) NOT NULL,
  `DAN_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `klient`
--

INSERT INTO `klient` (`KLI_ID`, `KLI_PUNKTY`, `DAN_ID`) VALUES
(1, 150, 1),
(5, 150, 14),
(6, 150, 15),
(7, 150, 16),
(8, 150, 17),
(9, 155, 19),
(10, 10, 20),
(11, 60, 21),
(12, 145, 22);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kurs`
--

CREATE TABLE `kurs` (
  `KUR_ID` int(11) NOT NULL,
  `KUR_POCZATEK` text COLLATE utf8mb4_polish_ci NOT NULL,
  `KUR_KONIEC` text COLLATE utf8mb4_polish_ci NOT NULL,
  `KUR_DATAPOCZ` datetime NOT NULL,
  `KUR_DATAKONC` datetime NOT NULL,
  `KUR_ODLEGLOSC` int(5) NOT NULL,
  `KUR_ILOSCMIEJSC` int(11) NOT NULL,
  `KUR_MAXMIEJSC` int(11) NOT NULL,
  `KIE_ID` int(11) NOT NULL,
  `POJ_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `kurs`
--

INSERT INTO `kurs` (`KUR_ID`, `KUR_POCZATEK`, `KUR_KONIEC`, `KUR_DATAPOCZ`, `KUR_DATAKONC`, `KUR_ODLEGLOSC`, `KUR_ILOSCMIEJSC`, `KUR_MAXMIEJSC`, `KIE_ID`, `POJ_ID`) VALUES
(7, 'Kraków', 'Katowice', '2019-05-26 10:00:00', '2019-05-26 12:00:00', 85, 0, 40, 1, 1),
(8, 'KrakÃ³w', 'Katowice', '2019-05-26 14:00:00', '2019-05-01 16:00:00', 80, 0, 40, 2, 2),
(9, 'KrakÃ³w', 'Katowice', '2019-05-26 17:00:00', '2019-05-02 19:00:00', 80, 0, 30, 3, 3),
(10, 'KrakÃ³w', 'Katowice', '2019-05-27 10:00:00', '2019-05-27 12:02:00', 85, 0, 40, 4, 4),
(11, 'KrakÃ³w', 'Katowice', '2019-05-27 14:00:00', '2019-05-27 16:00:00', 85, 0, 40, 5, 5),
(12, 'KrakÃ³w', 'Katowice', '2019-05-27 17:00:00', '2019-05-27 19:00:00', 100, 0, 2, 6, 6),
(14, 'KrakÃ³w', 'Katowice', '2019-05-28 10:00:00', '2019-05-28 12:00:00', 80, 0, 50, 1, 1),
(15, 'KrakÃ³w', 'Katowice', '2019-05-28 14:00:00', '2019-05-28 19:00:00', 1, 0, 1, 2, 2),
(16, 'KrakÃ³w', 'Katowice', '2019-05-28 17:00:00', '2019-05-28 19:00:00', 80, 0, 30, 3, 3),
(17, 'KrakÃ³w', 'Katowice', '2019-05-29 10:00:00', '2019-05-29 12:00:00', 80, 0, 40, 4, 4),
(18, 'KrakÃ³w', 'Katowice', '2019-05-29 14:00:00', '2019-05-29 16:00:00', 80, 0, 40, 5, 5),
(19, 'KrakÃ³w', 'Katowice', '2019-05-29 17:00:00', '2019-05-29 19:00:00', 80, 10, 40, 6, 6),
(20, 'Katowice', 'Kraków', '2019-05-26 10:00:00', '2019-05-26 12:00:00', 85, 0, 40, 6, 6),
(21, 'Katowice', 'Kraków', '2019-05-26 14:00:00', '2019-05-01 16:00:00', 80, 0, 40, 5, 5),
(22, 'Katowice', 'Kraków', '2019-05-26 17:00:00', '2019-05-02 19:00:00', 80, 0, 30, 4, 4),
(23, 'Katowice', 'Kraków', '2019-05-27 10:00:00', '2019-05-27 12:02:00', 85, 0, 40, 3, 3),
(24, 'Katowice', 'Kraków', '2019-05-27 14:00:00', '2019-05-27 16:00:00', 85, 0, 40, 2, 2),
(25, 'Katowice', 'Kraków', '2019-05-27 17:00:00', '2019-05-27 19:00:00', 100, 0, 2, 1, 1),
(26, 'Katowice', 'Kraków', '2019-05-28 10:00:00', '2019-05-28 12:00:00', 80, 0, 50, 6, 6),
(27, 'Katowice', 'Kraków', '2019-05-28 14:00:00', '2019-05-28 19:00:00', 1, 0, 1, 5, 5),
(28, 'Katowice', 'Kraków', '2019-05-28 17:00:00', '2019-05-28 19:00:00', 80, 0, 30, 4, 4),
(29, 'Katowice', 'Kraków', '2019-05-29 10:00:00', '2019-05-29 12:00:00', 80, 0, 40, 3, 3),
(30, 'Katowice', 'Kraków', '2019-05-29 14:00:00', '2019-05-29 16:00:00', 80, 0, 40, 2, 2),
(31, 'Katowice', 'Kraków', '2019-05-29 17:00:00', '2019-05-29 19:00:00', 80, 10, 40, 1, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pojazd`
--

CREATE TABLE `pojazd` (
  `POJ_ID` int(11) NOT NULL,
  `POJ_MARKA` varchar(40) COLLATE utf8mb4_polish_ci NOT NULL,
  `POJ_MODEL` varchar(40) COLLATE utf8mb4_polish_ci NOT NULL,
  `POJ_REJESTRACJA` varchar(12) COLLATE utf8mb4_polish_ci NOT NULL,
  `POJ_ROCZNIK` date NOT NULL,
  `POJ_PRZEGLAD` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `pojazd`
--

INSERT INTO `pojazd` (`POJ_ID`, `POJ_MARKA`, `POJ_MODEL`, `POJ_REJESTRACJA`, `POJ_ROCZNIK`, `POJ_PRZEGLAD`) VALUES
(1, 'man', 'bus', 'KR09341', '2019-05-23', '2019-05-23'),
(2, 'man', 'bus', 'KR09346', '2018-01-01', '2019-02-05'),
(3, 'man', 'bus', 'KR09344', '2019-05-14', '2019-05-14'),
(4, 'man', 'bus', 'KR09342', '2019-05-22', '2019-05-28'),
(5, 'man', 'bus', 'KR09345', '2019-05-08', '2019-05-24'),
(6, 'man', 'bus', 'KR09343', '2019-05-15', '2019-05-30');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pracownik`
--

CREATE TABLE `pracownik` (
  `PRA_ID` int(11) NOT NULL,
  `PRA_DZIAL` text COLLATE utf8mb4_polish_ci NOT NULL,
  `DAN_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `pracownik`
--

INSERT INTO `pracownik` (`PRA_ID`, `PRA_DZIAL`, `DAN_ID`) VALUES
(1, 'zarzÄ…d', 18),
(2, 'sekretariat', 23),
(3, 'kierowcy', 24),
(4, 'kierowcy', 25),
(5, 'kierowcy', 26),
(6, 'kierowcy', 27),
(7, 'kierowcy', 28),
(8, 'kierowcy', 29),
(9, 'kierowcy', 30);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rezerwacje`
--

CREATE TABLE `rezerwacje` (
  `REZ_ID` int(11) NOT NULL,
  `REZ_DATA` datetime NOT NULL,
  `REZ_CENA` float NOT NULL,
  `KLI_ID` int(11) NOT NULL,
  `KUR_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `rezerwacje`
--

INSERT INTO `rezerwacje` (`REZ_ID`, `REZ_DATA`, `REZ_CENA`, `KLI_ID`, `KUR_ID`) VALUES
(1, '2019-05-23 00:00:00', 1, 1, 2),
(7, '2019-05-26 00:00:00', 50, 9, 2),
(8, '2019-05-26 00:00:00', 50, 9, 2),
(9, '2019-05-26 00:00:00', 50, 8, 2),
(10, '2019-05-26 00:00:00', 50, 8, 2),
(11, '2019-05-26 00:00:00', 50, 8, 2),
(12, '2019-05-26 00:00:00', 50, 8, 2),
(13, '2019-05-26 00:00:00', 50, 8, 2),
(14, '2019-05-26 00:00:00', 50, 8, 2),
(15, '2019-05-23 00:00:00', 50, 7, 2),
(16, '2019-05-23 00:00:00', 50, 7, 2),
(17, '2019-05-23 20:32:22', 50, 7, 2),
(18, '2019-05-23 20:32:30', 50, 7, 2),
(19, '2019-05-23 20:32:42', 50, 7, 2),
(20, '2019-05-23 20:41:34', 75, 9, 2),
(21, '2019-05-23 20:41:45', 75, 9, 2),
(22, '2019-05-23 20:41:56', 120, 9, 2),
(23, '2019-05-23 20:42:04', 120, 9, 2),
(24, '2019-05-23 20:43:44', 120, 9, 2),
(25, '2019-05-23 20:43:49', 60, 9, 2),
(26, '2019-05-23 20:44:47', 60, 9, 2),
(27, '2019-05-23 20:44:56', 60, 9, 2),
(28, '2019-05-23 20:46:05', 135, 10, 2),
(30, '2019-05-25 12:54:06', 120, 10, 2),
(32, '2019-05-25 14:05:51', 120, 11, 2),
(33, '2019-05-25 14:11:01', 15, 11, 2),
(36, '2019-05-26 12:55:52', 15, 12, 2),
(37, '2019-05-26 12:56:03', 15, 12, 2),
(38, '2019-05-26 14:02:31', 120, 12, 2),
(39, '2019-05-26 14:02:59', 135, 12, 2),
(40, '2019-05-26 14:18:59', 150, 12, 5),
(41, '2019-05-26 14:19:10', 150, 12, 5),
(42, '2019-05-26 14:19:18', 150, 12, 5),
(43, '2019-05-26 14:19:31', 150, 12, 5),
(44, '2019-05-26 14:19:38', 150, 12, 5),
(45, '2019-05-26 14:20:21', 150, 12, 5),
(46, '2019-05-26 18:30:59', 150, 12, 19);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `dane`
--
ALTER TABLE `dane`
  ADD PRIMARY KEY (`DAN_ID`);

--
-- Indeksy dla tabeli `grafik`
--
ALTER TABLE `grafik`
  ADD PRIMARY KEY (`GRA_ID`),
  ADD KEY `KUR_ID` (`KUR_ID`),
  ADD KEY `KIE_ID` (`KIE_ID`);

--
-- Indeksy dla tabeli `kierowca`
--
ALTER TABLE `kierowca`
  ADD PRIMARY KEY (`KIE_ID`),
  ADD KEY `PRA_ID` (`PRA_ID`);

--
-- Indeksy dla tabeli `klient`
--
ALTER TABLE `klient`
  ADD PRIMARY KEY (`KLI_ID`),
  ADD KEY `DAN_ID` (`DAN_ID`);

--
-- Indeksy dla tabeli `kurs`
--
ALTER TABLE `kurs`
  ADD PRIMARY KEY (`KUR_ID`),
  ADD KEY `KIE_ID` (`KIE_ID`),
  ADD KEY `POJ_ID` (`POJ_ID`);

--
-- Indeksy dla tabeli `pojazd`
--
ALTER TABLE `pojazd`
  ADD PRIMARY KEY (`POJ_ID`);

--
-- Indeksy dla tabeli `pracownik`
--
ALTER TABLE `pracownik`
  ADD PRIMARY KEY (`PRA_ID`),
  ADD KEY `DAN_ID` (`DAN_ID`);

--
-- Indeksy dla tabeli `rezerwacje`
--
ALTER TABLE `rezerwacje`
  ADD PRIMARY KEY (`REZ_ID`),
  ADD KEY `KLI_ID` (`KLI_ID`),
  ADD KEY `KUR_ID` (`KUR_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `dane`
--
ALTER TABLE `dane`
  MODIFY `DAN_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT dla tabeli `grafik`
--
ALTER TABLE `grafik`
  MODIFY `GRA_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `kierowca`
--
ALTER TABLE `kierowca`
  MODIFY `KIE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `klient`
--
ALTER TABLE `klient`
  MODIFY `KLI_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT dla tabeli `kurs`
--
ALTER TABLE `kurs`
  MODIFY `KUR_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT dla tabeli `pojazd`
--
ALTER TABLE `pojazd`
  MODIFY `POJ_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `pracownik`
--
ALTER TABLE `pracownik`
  MODIFY `PRA_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `rezerwacje`
--
ALTER TABLE `rezerwacje`
  MODIFY `REZ_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `grafik`
--
ALTER TABLE `grafik`
  ADD CONSTRAINT `grafik_ibfk_1` FOREIGN KEY (`KUR_ID`) REFERENCES `kurs` (`KUR_ID`),
  ADD CONSTRAINT `grafik_ibfk_2` FOREIGN KEY (`KIE_ID`) REFERENCES `kierowca` (`KIE_ID`);

--
-- Ograniczenia dla tabeli `kierowca`
--
ALTER TABLE `kierowca`
  ADD CONSTRAINT `kierowca_ibfk_1` FOREIGN KEY (`PRA_ID`) REFERENCES `pracownik` (`PRA_ID`);

--
-- Ograniczenia dla tabeli `klient`
--
ALTER TABLE `klient`
  ADD CONSTRAINT `klient_ibfk_1` FOREIGN KEY (`DAN_ID`) REFERENCES `dane` (`DAN_ID`);

--
-- Ograniczenia dla tabeli `kurs`
--
ALTER TABLE `kurs`
  ADD CONSTRAINT `kurs_ibfk_1` FOREIGN KEY (`KIE_ID`) REFERENCES `kierowca` (`KIE_ID`),
  ADD CONSTRAINT `kurs_ibfk_2` FOREIGN KEY (`POJ_ID`) REFERENCES `pojazd` (`POJ_ID`);

--
-- Ograniczenia dla tabeli `pracownik`
--
ALTER TABLE `pracownik`
  ADD CONSTRAINT `pracownik_ibfk_1` FOREIGN KEY (`DAN_ID`) REFERENCES `dane` (`DAN_ID`);

--
-- Ograniczenia dla tabeli `rezerwacje`
--
ALTER TABLE `rezerwacje`
  ADD CONSTRAINT `rezerwacje_ibfk_1` FOREIGN KEY (`KLI_ID`) REFERENCES `klient` (`KLI_ID`),
  ADD CONSTRAINT `rezerwacje_ibfk_2` FOREIGN KEY (`KUR_ID`) REFERENCES `kurs` (`KUR_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
