-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Cze 02, 2024 at 05:02 PM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.2.4

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
('Obserwacja granicy', 'Możliwe infiltracje wroga', 'Niewielki ruch wroga w pobliżu granicy', 'Górzysty teren', 'Złe warunki pogodowe utrudniające obserwację', '2024-06-28', 'Oczekuje', 'Test', 1),
('Wykonanie testu czesc koncowa', 'Wykonanie testu przez przeciwnika', 'Wróg odtworzył strone i wykonuje test', 'Sandomierz', 'Teren płaski, polana', '2024-06-20', 'Odrzucony', 'Wróg atakuje! To sobie poradzcie sami', 11);

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
('Jednostka Specjalna A', 'Specjalna', 95.50, 'Broń palna, sprzęt taktyczny', 5, 'Tarnobrzeg', 1),
('Jednostka Logistyczna C', 'Logistyczna', 100.00, 'Łodzie, samochody transportowe', 100, 'tbg', 3),
('Jednostka Specjalna H', 'Jednostka inflirtacyjna', 32.00, 'Broń palna, bomby dymne i granaty hukowe oraz bron biala', 35, 'Sandomierz', 15);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `misje`
--

CREATE TABLE `misje` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cel_misji` text DEFAULT NULL,
  `lokalizacja` varchar(55) DEFAULT NULL,
  `czas_trwania` date DEFAULT NULL,
  `uczestniczace_jednostki` text DEFAULT NULL,
  `potrzebne_zasoby` text DEFAULT NULL,
  `nazwa` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `misje`
--

INSERT INTO `misje` (`id`, `cel_misji`, `lokalizacja`, `czas_trwania`, `uczestniczace_jednostki`, `potrzebne_zasoby`, `nazwa`) VALUES
(1, '12', '50', '0000-00-00', '10', '20', 'Jednostka Specjalna A'),
(2, 'Ewakuacja cywilów', 'Miasto B', '0000-00-00', 'Jednostka Medyczna B, Jednostka Logistyczna C', 'Apteczki, Łodzie', 'Operation Desert Storm'),
(3, 'Rozpoznanie terenu', 'Obszar C', '0000-00-00', 'Jednostka Wywiadowcza D', 'Kamery, Sprzęt do podsłuchów', 'Operation Tea'),
(6, 'zabic kuriera', 'New Vegas', '0000-00-00', 'Chairmen, Great Khans', 'pistolet lololol', 'Operation Fallout'),
(20, 'Zrobienie testu', 'Tarnobrzeg', '2024-06-20', 'Jednostka Specjalna B', 'Woda, Chleb i medykamenty dla 20 osób', 'Test');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zadania`
--

CREATE TABLE `zadania` (
  `nazwa` varchar(100) NOT NULL,
  `cel` varchar(200) NOT NULL,
  `czas_trwania` date DEFAULT NULL,
  `data_stowrzenia` date NOT NULL DEFAULT current_timestamp(),
  `misja_id` bigint(20) UNSIGNED DEFAULT NULL,
  `jednostka_id` bigint(20) UNSIGNED DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `zadania`
--

INSERT INTO `zadania` (`nazwa`, `cel`, `czas_trwania`, `data_stowrzenia`, `misja_id`, `jednostka_id`, `id`) VALUES
('Wykonanie testu czesc koncowa', 'Ewakuacja cywilów z miejsca wypadku', '2024-06-20', '2024-06-02', 2, 1, 3),
('Test part 2', 'Ewakuacja cywilów', '0000-00-00', '2024-06-02', 2, 1, 8);

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
(1, 'Jednostka Specjalna A', 20, 13, 500, 502, 10),
(3, 'Jednostka Specjaliotyczna C', 34, 12, 76, 75, 43),
(3, 'Jednostka Specjaliotyczna C', 34, 0, 76, 75, 43);

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
  ADD PRIMARY KEY (`id`),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `jednostki`
--
ALTER TABLE `jednostki`
  MODIFY `jednostkaID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `misje`
--
ALTER TABLE `misje`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `zadania`
--
ALTER TABLE `zadania`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
