-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Εξυπηρετητής: 127.0.0.1
-- Χρόνος δημιουργίας: 16 Σεπ 2023 στις 19:39:29
-- Έκδοση διακομιστή: 10.4.28-MariaDB
-- Έκδοση PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `oopdb`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `personalinfo`
--

CREATE TABLE `personalinfo` (
  `info_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `info_afm` bigint(11) NOT NULL,
  `info_amka` bigint(11) NOT NULL,
  `info_idcard` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Άδειασμα δεδομένων του πίνακα `personalinfo`
--

INSERT INTO `personalinfo` (`info_id`, `user_id`, `info_afm`, `info_amka`, `info_idcard`) VALUES
(1, 1, 624814555, 849748771467, 'AT635468'),
(2, 2, 654538568, 426378787623, 'ER785345'),
(3, 3, 187688161, 852718777631, 'WA764567');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `users_uid` varchar(255) NOT NULL,
  `users_pwd` varchar(255) NOT NULL,
  `users_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Άδειασμα δεδομένων του πίνακα `users`
--

INSERT INTO `users` (`users_id`, `users_uid`, `users_pwd`, `users_email`) VALUES
(1, 'George', '$2y$10$.dYbqHenaTrlz8r5aW8GFOP/J2kdchPmo.LxXg/RebMZCnLgGc1Hy', 'george@gmail.com'),
(2, 'Lara', '$2y$10$xEBCsYgrco4U.OWJa/gjAuW2J4K6Ia9okC0UKLCu94D45TUNKwQkC', 'lara@gmail.com'),
(3, 'Tom', '$2y$10$oNvagRtDN7z4h6EJDt005eGIGIn6vr5icAR5DyXEiQ.xg5GYSe8Y6', 'top@yahoo.gr');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `personalinfo`
--
ALTER TABLE `personalinfo`
  ADD PRIMARY KEY (`info_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Ευρετήρια για πίνακα `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `personalinfo`
--
ALTER TABLE `personalinfo`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT για πίνακα `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Περιορισμοί για άχρηστους πίνακες
--

--
-- Περιορισμοί για πίνακα `personalinfo`
--
ALTER TABLE `personalinfo`
  ADD CONSTRAINT `personalinfo_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`users_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
