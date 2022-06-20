-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 20 juin 2022 à 16:44
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `my_location`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `CIN_Cli` varchar(50) NOT NULL,
  `Prénom` varchar(50) DEFAULT NULL,
  `Nom` varchar(50) DEFAULT NULL,
  `Numéro_De_Permis` varchar(50) DEFAULT NULL,
  `Téléphone` varchar(50) DEFAULT NULL,
  `Adresse` varchar(50) DEFAULT NULL,
  `CIN_Uti` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`CIN_Cli`, `Prénom`, `Nom`, `Numéro_De_Permis`, `Téléphone`, `Adresse`, `CIN_Uti`) VALUES
('B1324', 'hicham', 'ismaili', '99/0997', '0734567890', 'TANGER', 'KA64673'),
('K11111', 'khadija', 'sabri', '11/16453', '0600000000', 'ASSILAH', 'KA64673'),
('k1234', 'zouhiar', 'mabrouki', '33/4567', '0612345678', 'boulvard N°34 tanger', 'KA64673'),
('K3333', 'adil', 'chergui', '22/0987', '0633445566', 'rue imama assili N° 34 assilah', 'KA64673');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `Code_Res` int(11) NOT NULL,
  `Date_de_début_Res` date DEFAULT NULL,
  `date_de_fin_Res` date DEFAULT NULL,
  `date_de_Reservation` date DEFAULT NULL,
  `CIN_Uti` varchar(50) DEFAULT NULL,
  `CIN_Cli` varchar(50) DEFAULT NULL,
  `Matricule` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`Code_Res`, `Date_de_début_Res`, `date_de_fin_Res`, `date_de_Reservation`, `CIN_Uti`, `CIN_Cli`, `Matricule`) VALUES
(7, '2022-06-21', '2022-06-23', '2022-06-20', 'KA64673', 'K3333', '40-B-111111'),
(8, '2022-06-22', '2022-06-25', '2022-06-20', 'K64673', 'k1234', '40-B-2222');

-- --------------------------------------------------------

--
-- Structure de la table `réparation`
--

CREATE TABLE `réparation` (
  `CODE` int(11) NOT NULL,
  `Matricule` varchar(50) DEFAULT NULL,
  `Date_de_début_réparation` date DEFAULT NULL,
  `Date_de_fin_réparation` date DEFAULT NULL,
  `Poblème` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `réparation`
--

INSERT INTO `réparation` (`CODE`, `Matricule`, `Date_de_début_réparation`, `Date_de_fin_réparation`, `Poblème`) VALUES
(6, '40-B-2222', '2022-06-20', '2022-06-22', 'vidange pnus mécanique  ');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `CIN_Uti` varchar(50) NOT NULL,
  `Nom` varchar(50) DEFAULT NULL,
  `Prénom` varchar(50) DEFAULT NULL,
  `Mot_De_Pass` varchar(50) DEFAULT NULL,
  `Rôle` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`CIN_Uti`, `Nom`, `Prénom`, `Mot_De_Pass`, `Rôle`) VALUES
('K64673', 'idrissi', 'ayoub', '1122334455', 'ADMIN'),
('KA64673', 'zaryouh', 'majid', '1122334455', 'UTILISATEUR'),
('KB112233', '', 'akram', '123456789', 'UTILISATEUR');

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

CREATE TABLE `voiture` (
  `Matricule` varchar(50) NOT NULL,
  `CIN_Uti` varchar(50) DEFAULT NULL,
  `Carburant` varchar(50) DEFAULT NULL,
  `Marque` varchar(50) DEFAULT NULL,
  `Modélé` varchar(50) DEFAULT NULL,
  `L’eta` varchar(20) NOT NULL,
  `Prix_Location` float DEFAULT NULL,
  `Date_de_mise_en_circulation` date DEFAULT NULL,
  `Couleur` varchar(50) DEFAULT NULL,
  `Date_de_début_taxes` date DEFAULT NULL,
  `Date_de_fin_taxes` date DEFAULT NULL,
  `Date_de_début_assurances` date DEFAULT NULL,
  `Date_de_fin_assurances` date DEFAULT NULL,
  `photo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `voiture`
--

INSERT INTO `voiture` (`Matricule`, `CIN_Uti`, `Carburant`, `Marque`, `Modélé`, `L’eta`, `Prix_Location`, `Date_de_mise_en_circulation`, `Couleur`, `Date_de_début_taxes`, `Date_de_fin_taxes`, `Date_de_début_assurances`, `Date_de_fin_assurances`, `photo`) VALUES
('40-B-111111', 'KA64673', 'disel', 'megan 4', '2020', 'disponible', 600, '2022-01-01', 'gold', '2022-01-01', '2022-01-29', '2022-04-01', '2022-03-30', 'megan 4 GOLD.png'),
('40-B-2222', 'K64673', 'ESSANCE', 'megan 4', '2022', 'indisponible', 500, '2022-03-23', 'BLACK', '2022-01-01', '0000-00-00', '2022-06-01', '2023-05-31', 'megan 4 BLACK.png'),
('40-B-5678', 'KA64673', 'ESSANCE', 'CLIO5', '2022', 'disponible', 450, '2022-06-15', 'ROUGE', '2022-01-01', '2023-01-29', '2022-06-01', '2023-05-31', 'renault-clio-4 RED.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`CIN_Cli`),
  ADD KEY `client_ibfk_1` (`CIN_Uti`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`Code_Res`),
  ADD KEY `CIN_Uti` (`CIN_Uti`),
  ADD KEY `CIN_Cli` (`CIN_Cli`),
  ADD KEY `Matricule` (`Matricule`);

--
-- Index pour la table `réparation`
--
ALTER TABLE `réparation`
  ADD PRIMARY KEY (`CODE`),
  ADD KEY `Matricule` (`Matricule`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`CIN_Uti`);

--
-- Index pour la table `voiture`
--
ALTER TABLE `voiture`
  ADD PRIMARY KEY (`Matricule`),
  ADD KEY `CIN_Uti` (`CIN_Uti`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `Code_Res` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `réparation`
--
ALTER TABLE `réparation`
  MODIFY `CODE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`CIN_Uti`) REFERENCES `utilisateur` (`CIN_Uti`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`CIN_Uti`) REFERENCES `utilisateur` (`CIN_Uti`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`CIN_Cli`) REFERENCES `client` (`CIN_Cli`),
  ADD CONSTRAINT `reservation_ibfk_3` FOREIGN KEY (`Matricule`) REFERENCES `voiture` (`Matricule`);

--
-- Contraintes pour la table `réparation`
--
ALTER TABLE `réparation`
  ADD CONSTRAINT `réparation_ibfk_1` FOREIGN KEY (`Matricule`) REFERENCES `voiture` (`Matricule`);

--
-- Contraintes pour la table `voiture`
--
ALTER TABLE `voiture`
  ADD CONSTRAINT `voiture_ibfk_1` FOREIGN KEY (`CIN_Uti`) REFERENCES `utilisateur` (`CIN_Uti`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
