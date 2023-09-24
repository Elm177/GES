-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 20 sep. 2023 à 02:16
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ges_com1`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id_article` int(20) NOT NULL,
  `descript` varchar(250) NOT NULL,
  `prix_unitaire` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `descript`, `prix_unitaire`) VALUES
(0, 'FLUFY', 2503),
(1, 'USB', 250),
(2, 'SOURIS', 340),
(3, 'PC_PORTABLE', 2520),
(4, 'HP', 6000),
(5, 'Z230-HP', 3500),
(6, 'HUB_USB-SPEED', 50),
(7, 'DELL_AZER', 45),
(8, 'JUTOS', 2);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(10) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `ville` varchar(10) NOT NULL,
  `tele` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `nom`, `prenom`, `ville`, `tele`) VALUES
(1, 'elmouh', 'oussama', 'fes', '0665898774'),
(2, 'mamouni', 'amine', 'taza', '0625478954'),
(3, 'mostakim', 'mansour', 'missour', '0102254789'),
(4, 'louadi', 'ishak', 'tanger', '0654789654'),
(5, 'Dupont', 'Jean', 'Paris', '0123456789'),
(6, 'Martin', 'Sophie', 'Lyon', '9876543210'),
(7, 'Garcia', 'Luis', 'Barcelona', '2541566325'),
(10, 'Gabriel', 'Noah', 'Cyberia', '0123456789'),
(11, 'Lio', 'Adam', 'Los Angele', '9876543210'),
(12, 'Raphael', 'Hugo', 'Titania', '524858458');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_commande` int(20) NOT NULL,
  `id_client` int(10) NOT NULL,
  `datee` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id_commande`, `id_client`, `datee`) VALUES
(45, 7, '2023-08-19'),
(46, 7, '2023-08-01'),
(47, 7, '2023-08-02'),
(48, 1, '2023-08-26'),
(49, 1, '2023-08-10'),
(50, 3, '2023-08-21'),
(51, 7, '2023-08-24'),
(52, 1, '2023-08-26'),
(53, 5, '2023-09-01'),
(54, 12, '2023-09-01'),
(55, 11, '2001-01-01');

-- --------------------------------------------------------

--
-- Structure de la table `ligne_commande`
--

CREATE TABLE `ligne_commande` (
  `id_article` int(10) NOT NULL,
  `id_commande` int(20) NOT NULL,
  `quantite` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `ligne_commande`
--

INSERT INTO `ligne_commande` (`id_article`, `id_commande`, `quantite`) VALUES
(0, 46, 2023),
(0, 52, 14),
(1, 45, 2023),
(1, 48, 0),
(3, 47, 22),
(3, 53, 1),
(4, 55, 2000),
(5, 51, 2023),
(8, 54, 1);

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `util` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`id`, `util`, `pass`) VALUES
(0, 'admin', '123'),
(1, 'admin', '123'),
(0, 'user', 'pers'),
(2, 'user', 'pers');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_commande`),
  ADD KEY `id_client` (`id_client`);

--
-- Index pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  ADD PRIMARY KEY (`id_article`,`id_commande`),
  ADD KEY `id_commande` (`id_commande`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_commande` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`);

--
-- Contraintes pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  ADD CONSTRAINT `ligne_commande_ibfk_2` FOREIGN KEY (`id_article`) REFERENCES `article` (`id_article`),
  ADD CONSTRAINT `ligne_commande_ibfk_3` FOREIGN KEY (`id_commande`) REFERENCES `commande` (`id_commande`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
