-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 01 jan. 2026 à 01:14
-- Version du serveur : 8.4.7
-- Version de PHP : 8.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `armeedusalut`
--

-- --------------------------------------------------------

--
-- Structure de la table `don`
--

DROP TABLE IF EXISTS `don`;
CREATE TABLE IF NOT EXISTS `don` (
  `IdDon` int NOT NULL AUTO_INCREMENT,
  `MontantDon` int NOT NULL,
  `IdUtilisateur` int NOT NULL,
  PRIMARY KEY (`IdDon`),
  KEY `IdUtilisateur` (`IdUtilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `IdMessage` int NOT NULL AUTO_INCREMENT,
  `Prenom` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nom` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Contenu` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`IdMessage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `IdUtilisateur` int NOT NULL AUTO_INCREMENT,
  `Prenom` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nom` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `MDP` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `EstAdmin` tinyint(1) NOT NULL,
  PRIMARY KEY (`IdUtilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`IdUtilisateur`, `Email`, `MDP`, `EstAdmin`) VALUES
(1, 't@t', 'gvg', 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `don`
--
ALTER TABLE `don`
  ADD CONSTRAINT `don_ibfk_1` FOREIGN KEY (`IdUtilisateur`) REFERENCES `utilisateur` (`IdUtilisateur`);
COMMIT;

-- 1. Mise à jour de la table 'don'
-- On autorise IdUtilisateur à être NULL (pour les dons sans compte) et on ajoute Date et Type
ALTER TABLE `don` MODIFY `IdUtilisateur` int NULL;
ALTER TABLE `don` ADD `TypeDon` varchar(20) NOT NULL DEFAULT 'unique';
ALTER TABLE `don` ADD `DateDon` datetime DEFAULT CURRENT_TIMESTAMP;

-- 2. Mise à jour de la table 'message'
ALTER TABLE `message` ADD `Objet` varchar(255) NOT NULL DEFAULT 'Demande de contact';
ALTER TABLE `message` ADD `DateMessage` datetime DEFAULT CURRENT_TIMESTAMP;

-- 3. Création de la table 'evenement'
CREATE TABLE IF NOT EXISTS `evenement` (
                                           `IdEvenement` int NOT NULL AUTO_INCREMENT,
                                           `Titre` varchar(255) NOT NULL,
    `Description` text,
    `DateEvent` date NOT NULL,
    `Lieu` varchar(255),
    PRIMARY KEY (`IdEvenement`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 4. Création de la table 'mission'
CREATE TABLE IF NOT EXISTS `mission` (
                                         `IdMission` int NOT NULL AUTO_INCREMENT,
                                         `Titre` varchar(255) NOT NULL,
    `Categorie` varchar(100),
    `Statut` varchar(50) DEFAULT 'en_cours',
    PRIMARY KEY (`IdMission`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 5. Création de la table 'presse'
CREATE TABLE IF NOT EXISTS `presse` (
    `IdPresse` int NOT NULL AUTO_INCREMENT,
    `Titre` varchar(255) NOT NULL,
    `Lien` text,
    `DatePresse` date,
    PRIMARY KEY (`IdPresse`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table pour stocker le compteur de vues global
CREATE TABLE IF NOT EXISTS site_stats (
                                          id INT PRIMARY KEY,
                                          vues_totales INT DEFAULT 0
);

-- On initialise la ligne (si elle n'existe pas).
INSERT IGNORE INTO site_stats (id, vues_totales) VALUES (1, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
