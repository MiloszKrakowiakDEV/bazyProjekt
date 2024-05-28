-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Maj 26, 2024 at 10:35 AM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bazyprojekt`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dane_wywiadowcze`
--

CREATE TABLE `dane_wywiadowcze` (
  `nazwa` varchar(100) NOT NULL,
  `zagrozenia` text DEFAULT NULL,
  `ruch_wroga` text DEFAULT NULL,
  `teren` varchar(200) NOT NULL,
  `warunki` text DEFAULT NULL,
  `data_` date DEFAULT NULL,
  `status_` varchar(20) NOT NULL,
  `opis` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dane_wywiadowcze`
--

INSERT INTO `dane_wywiadowcze` (`nazwa`, `zagrozenia`, `ruch_wroga`, `teren`, `warunki`, `data_`, `status_`, `opis`, `id`) VALUES
('Obserwacja granicy', 'Możliwe infiltracje wroga', 'Niewielki ruch wroga w pobliżu granicy', 'Górzysty teren', 'Złe warunki pogodowe utrudniające obserwację', '2024-05-20', 'Pending', '', 1),
('Analiza sytuacji politycznej', 'Ryzyko destabilizacji w regionie', 'Brak doniesień o ruchach wroga', 'Strefa urbanizowana', 'Spokojne warunki', '2024-05-21', 'Reviewed', '', 2),
('Zbadanie obiektu militarnego', 'Możliwość zwiększenia siły wroga', 'Obserwowane transporty wojskowe', 'Pola uprawne', 'Pogoda bez opadów', '2024-05-22', 'Actioned', '', 3),
('ccc', '--', '--', '--', '--', '2012-12-24', '---', '', 4),
('5', '5', '5', '5', '5', '0000-00-00', '5', '555', 6);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `jednostki`
--

CREATE TABLE `jednostki` (
  `nazwa` varchar(100) NOT NULL,
  `rodzaj` varchar(55) NOT NULL,
  `stan_gotowosci` decimal(5,2) NOT NULL CHECK (`stan_gotowosci` between 0 and 100),
  `wyposazenie` text DEFAULT NULL,
  `liczba_personelu` int(11) DEFAULT NULL,
  `lokalizacja` varchar(200) NOT NULL,
  `jednostkaID` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jednostki`
--

INSERT INTO `jednostki` (`nazwa`, `rodzaj`, `stan_gotowosci`, `wyposazenie`, `liczba_personelu`, `lokalizacja`, `jednostkaID`) VALUES
('Jednostka Specjalna A', 'Specjalna', 95.50, 'Broń palna, sprzęt taktyczny', 50, '', 1),
('Jednostka Medyczna B', 'Medyczna', 80.20, 'Apteczki, sprzęt medyczny', 30, '', 2),
('Jednostka Logistyczna C', 'Logistyczna', 100.00, 'Łodzie, samochody transportowe', 100, '', 3),
('Jednostka Wywiadowcza D', 'Wywiadowcza', 75.80, 'Kamery, sprzęt do podsłuchów', 40, '', 4),
('Jednostka Inżynierska E', 'Inżynierska', 91.00, 'Sprzęt budowlany, materiały wybuchowe', 60, 'Pakistan', 9);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `misje`
--

CREATE TABLE `misje` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cel_misji` text DEFAULT NULL,
  `lokalizacja` varchar(55) DEFAULT NULL,
  `czas_trwania` time DEFAULT NULL,
  `uczestniczace_jednostki` text DEFAULT NULL,
  `potrzebne_zasoby` text DEFAULT NULL,
  `nazwa` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `misje`
--

INSERT INTO `misje` (`id`, `cel_misji`, `lokalizacja`, `czas_trwania`, `uczestniczace_jednostki`, `potrzebne_zasoby`, `nazwa`) VALUES
(1, 'Zabezpieczenie konwoju', 'Obszar A', '08:00:00', 'Jednostka Specjalna A, Jednostka Logistyczna C', 'Broń palna, Samochody transportowe', 'Operation Eagle'),
(2, 'Ewakuacja cywilów', 'Miasto B', '12:00:00', 'Jednostka Medyczna B, Jednostka Logistyczna C', 'Apteczki, Łodzie', 'Operation Desert Storm'),
(3, 'Rozpoznanie terenu', 'Obszar C', '04:30:00', 'Jednostka Wywiadowcza D', 'Kamery, Sprzęt do podsłuchów', 'Operation Tea'),
(6, 'zabic kuriera', 'New Vegas', '12:00:00', 'Chairmen, Great Khans', 'pistolet lololol', 'Operation Fallout'),
(9, 'zabic kuriera', 'New Vegas', '00:00:06', 'Chairmen, Great Khans', 'pistolet lololol', 'Dayum');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zadania`
--

CREATE TABLE `zadania` (
  `nazwa` varchar(100) NOT NULL,
  `cel` varchar(200) NOT NULL,
  `czas_trwania` time DEFAULT NULL,
  `data_stowrzenia` date NOT NULL DEFAULT current_timestamp(),
  `misja_id` bigint(20) UNSIGNED DEFAULT NULL,
  `jednostka_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `zadania`
--

INSERT INTO `zadania` (`nazwa`, `cel`, `czas_trwania`, `data_stowrzenia`, `misja_id`, `jednostka_id`) VALUES
('Operation Tea', 'Rozpoznanie terenu', '04:30:00', '2024-05-26', 3, 3),
('Operation Desert Storm', 'Ewakuacja cywilów', '12:00:00', '2024-05-26', 2, 1),
('Operation Desert Storm', 'Ewakuacja cywilów', '12:00:00', '2024-05-26', 2, 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zasoby`
--

CREATE TABLE `zasoby` (
  `id_jednostki` bigint(20) UNSIGNED DEFAULT NULL,
  `nazwa_jednostki` varchar(100) NOT NULL,
  `bron` int(11) DEFAULT NULL,
  `amunicja` int(11) DEFAULT NULL,
  `paliwo` decimal(12,0) DEFAULT NULL,
  `medykamenty` int(11) DEFAULT NULL,
  `sprzet_logiczny` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `zasoby`
--

INSERT INTO `zasoby` (`id_jednostki`, `nazwa_jednostki`, `bron`, `amunicja`, `paliwo`, `medykamenty`, `sprzet_logiczny`) VALUES
(1, 'Jednostka Specjalna A', 20, 500, 200, 50, 10),
(2, 'Jednostka Medyczna B', 5, 100, NULL, 100, NULL),
(3, 'Jednostka Logistyczna C', 50, 1000, 1000, NULL, 5);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `dane_wywiadowcze`
--
ALTER TABLE `dane_wywiadowcze`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `jednostki`
--
ALTER TABLE `jednostki`
  ADD PRIMARY KEY (`jednostkaID`);

--
-- Indeksy dla tabeli `misje`
--
ALTER TABLE `misje`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `zadania`
--
ALTER TABLE `zadania`
  ADD KEY `fk_zad_jednostki8` (`jednostka_id`),
  ADD KEY `fk_zad_misja` (`misja_id`);

--
-- Indeksy dla tabeli `zasoby`
--
ALTER TABLE `zasoby`
  ADD KEY `fk_zas_jednostki` (`id_jednostki`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dane_wywiadowcze`
--
ALTER TABLE `dane_wywiadowcze`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jednostki`
--
ALTER TABLE `jednostki`
  MODIFY `jednostkaID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `misje`
--
ALTER TABLE `misje`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `zadania`
--
ALTER TABLE `zadania`
  ADD CONSTRAINT `fk_zad_jednostki8` FOREIGN KEY (`jednostka_id`) REFERENCES `jednostki` (`jednostkaID`),
  ADD CONSTRAINT `fk_zad_misja` FOREIGN KEY (`misja_id`) REFERENCES `misje` (`id`);

--
-- Constraints for table `zasoby`
--
ALTER TABLE `zasoby`
  ADD CONSTRAINT `fk_zas_jednostki` FOREIGN KEY (`id_jednostki`) REFERENCES `jednostki` (`jednostkaID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
