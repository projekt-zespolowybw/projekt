-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 23 Maj 2019, 20:01
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
(1, 'andrzej', 'wrona', 'wrona@op.pl', 'wrona123', 'wrona123', 0),
(2, 'marian', 'pazdzioch', 'pazdzioch@op.pl', 'pazdzioch123', 'pazdzioch123', 0),
(3, 'dupa', 'cycki', 'dupacycki@op.pl', 'dupacycki	', '$2y$10$.RW4uQSIDmO0GRPBgL8Y1uf/GVA9GOUCyhG4C4zvaq26T4GrEW.eG', 0),
(4, 'bartosz', 'WojdaÅ‚owicz', 'bartek1@op.pl', 'bartek1', '$2y$10$xvJ1l2Qz0q7zcdssim5rE.iWwL9fSROPI4Sg.id0UztF73Z.JYfAy', 0),
(5, 'Bartosz', 'WojdaÅ‚owicz', 'bartek@opp.pl', 'bartek2', '$2y$10$ai49lQgDz7hekmcp4E7JBuy7Pk7QST./A2SXEwH06jgvTNOoJwr7O', 0),
(6, 'marcin', 'marciniak', 'dupa@opo.pl', 'dupaa', '$2y$10$neFxZwX79DMPefPA8/Q0OuADXWwdZvsCXnTvDzQloyd/fG9pzL.Wi', 0),
(7, 'Kamil', 'Wojtylak', 'wojtylak@op.pl', 'pracownik1', '$2y$10$vYJUg0ar6svcQLGmqw7CW.sxFDpyVZe.C//0sEbQpTqulPsRuall6', 1),
(8, 'marcel', 'wojdyÅ‚a', 'kapitan@op.pl', 'kapitanbomba', '$2y$10$rf2qwvGohO6rK2/9.aUcVucfoVMOmZ6jkYw0qzEiBmGw5YvWLqDv2', 0),
(9, 'ferdynand', 'kiepski', 'kiepski@op.pl', 'ferdek', '$2y$10$zpVl5NjFH2GxnR.Qkoxhi.9zPA2Ly4z89WRaNK4nWwiOG0gs/Fj/a', 0),
(10, 'bartek00', 'wojdalowicz', 'wojdalowicz@opp.pl', 'dupaaaa', '$2y$10$buD0XQDioimShKeAT/sIV.5W.YKXxuXjWD.PCicifeqAitr/K793a', 0),
(11, 'karlo', 'wojdyla', 'wojdyla@op.pl', 'polakicebulaki', '$2y$10$ZJN/D6QIgk.NuNxHmBR9oOB6Wo5uKK2xvzeWMWEiU40RVYpM16JRa', 0),
(12, 'karol', 'kowalski', 'karol@op.pl', 'janek', '$2y$10$.w2Tm4P/mT0hFlVtPqktF.XrE/7E5GV0W3/Y94wkk1n7QZoEBbvni', 0),
(13, 'jarosÅ‚aw', 'kaczynski', 'karoal@op.pl', 'jaroslaw', '$2y$10$3euYsZmrFNAZmAILSLyFuOtgDDuZeip/EESDRiHQmmNnHXRLywhiC', 0),
(14, 'pszemek', 'pszemek', 'karoala@op.pl', 'jaroslaww', '$2y$10$Wk8locBSRlImJkpvGaLDSewTz28zeWpLk1onnW0rh6ulEe5UHQSK.', 0),
(15, 'jarek', 'jarek', 'karoalaa@op.pl', 'jaroslawww', '$2y$10$PbKge5CpUQnBBzPA5y2oU.qzwlJncjtvUebXT74WF3KyNZGCID8pC', 0),
(16, 'andrzeeeej', 'kdoaskdoask', 'karoaladsa@op.pl', 'jaroslawwww', '$2y$10$UzOYXhAiKzXHTwU461Rzlu5hPTuCafSjbobzSa0MMNLsQFEjNpPQu', 0),
(17, 'imie', 'nazwisko', 'email', 'nick', 'haslo_hash', 0),
(18, 'Bartosz', 'WojdaÅ‚owicz', 'asdf@op.pl', 'bartek222', '$2y$10$zOQ1H2GUC0Ry5A.HSEtl6OopUjNDvjhgrBVvf6A7Mbv.fW9ZF2zeW', 1);

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
  `KIE_LICENCJA` date NOT NULL,
  `KIE_ILOSCKM` int(11) NOT NULL,
  `PRA_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

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
(1, 100, 1),
(5, 100, 14),
(6, 100, 15),
(7, 100, 16),
(8, 100, 17);

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
  `KUR_CZAS` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `kurs`
--

INSERT INTO `kurs` (`KUR_ID`, `KUR_POCZATEK`, `KUR_KONIEC`, `KUR_DATAPOCZ`, `KUR_DATAKONC`, `KUR_ODLEGLOSC`, `KUR_CZAS`) VALUES
(1, 'KrakÃ³w', 'Katowice', '2019-05-23 00:00:00', '2019-05-23 00:00:00', 85, '08:00:00'),
(2, 'Katowice', 'KrakÃ³w', '2019-05-26 01:00:00', '2019-05-26 02:30:00', 80, '02:30:00');

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
(1, 'audi', 'q7', 'KT093421', '2017-12-03', '2019-11-30');

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
(1, 'zarzÄ…d', 18);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rezerwacje`
--

CREATE TABLE `rezerwacje` (
  `REZ_ID` int(11) NOT NULL,
  `REZ_DATA` date NOT NULL,
  `REZ_CENA` float NOT NULL,
  `KLI_ID` int(11) NOT NULL,
  `KUR_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `rezerwacje`
--

INSERT INTO `rezerwacje` (`REZ_ID`, `REZ_DATA`, `REZ_CENA`, `KLI_ID`, `KUR_ID`) VALUES
(1, '2019-05-23', 1, 1, 2);

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
  ADD PRIMARY KEY (`KUR_ID`);

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
  MODIFY `DAN_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT dla tabeli `grafik`
--
ALTER TABLE `grafik`
  MODIFY `GRA_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `kierowca`
--
ALTER TABLE `kierowca`
  MODIFY `KIE_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `klient`
--
ALTER TABLE `klient`
  MODIFY `KLI_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `kurs`
--
ALTER TABLE `kurs`
  MODIFY `KUR_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `pojazd`
--
ALTER TABLE `pojazd`
  MODIFY `POJ_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `pracownik`
--
ALTER TABLE `pracownik`
  MODIFY `PRA_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `rezerwacje`
--
ALTER TABLE `rezerwacje`
  MODIFY `REZ_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
