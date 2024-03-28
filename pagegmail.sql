-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 28 mars 2024 à 14:05
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pagegmail`
--

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `firstname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `login` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`id`, `name`, `firstname`, `login`, `password`) VALUES
(6, '', '', 'othon@gmail.com', '$2y$10$XGLydxM6p07pb4OW0ihxl.e55cJnNY5YJgbEvmdA9JVOw2S/NLZhy'),
(7, '', '', 'othon@gmail.com', '$2y$10$CLHH8ucwKx/F5aH6bBihVORk0TEN4Es7gFqA7TWmT.UHYSroHyJxq'),
(8, '', '', 'othon@gmail.com', '$2y$10$qcE4KUyQ4K/sOgQ3i1uhIOr2UsqgsxQp8ORN.QBrSHZ0MoYyArDnC'),
(9, '', '', 'a@gmail.com', '$2y$10$KWCS90m6DEzN7l4zq5eVVekD2ddHVJLXjqpC1c4oejfCx.xZ2IfWW'),
(10, '', '', 'a@gmail.com', '$2y$10$vYEayNL14zg8Y9c21Ks9HO3Dkh.Sxv4upxnm9edGGQh7sAyUfHeQy'),
(11, '', '', 'a@gmail.com', '$2y$10$L/MMYNXWzSXj9qSCtWwekueoRT7H06BI/c4.srnCiHtnOVcg5IF8a'),
(12, '', '', 'a@gmail.com', '$2y$10$mLlLJLYGtzxmYkUW7nsFceelZ5Ie/uRXGB1YqrBII.vfz25BF0rcW'),
(13, '', '', 'coco@gmail.com', '$2y$10$Al9CykGK3MI.wnemAU5LRe3DYIlbAZ2MIbFAM3sYBKf/AnKTJiO.K'),
(14, '', '', 'a@gmail.com', '$2y$10$PfLVOgw633DKBKMWyfsJpOhRR18OEaIEJYvxcTjk0MPOEZnOREMWS'),
(15, '', '', 's@gmail.com', '$2y$10$y6Be7RzvO7Yn4CnSvunrFOK2L9RZJrPW1sa470N5L.9igu95Kb5tS'),
(16, '', '', 'popo@gmail.com', '$2y$10$4W77eFac8mPXHvOrQPZP6eMydUyHxXdhkF2uogQywcYQ4HQd39mGC'),
(17, '', '', 'chien@gmail.com', '$2y$10$65kPG/6eVgdnjtXn.sU7jeN//Q3LQGM4YE9laStM2m6TYgBA.SVLO'),
(18, '', '', 'chat@gmail.com', '$2y$10$MUHIR8o4tE9Vjhn2Rkz2reGFvJD3qvnnVxK0iPhDCHFAJUe4drczy'),
(19, '', '', 'testf@gmail.com', '$2y$10$FoXrCSMxVRQTDUg2GDrsVO6oTPz2qQvtyB7I3o73TPA7qWJFeJNOi'),
(20, '', '', 'cou@gmail.com', '$2y$10$h4pdPjhxWrrV3zIMALmI3.2a4BmEv.wjhpgQ1NgCwBKXx1F.cAw86');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `inscription`
--
ALTER TABLE `inscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
