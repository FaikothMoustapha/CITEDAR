-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 29 mai 2024 à 18:49
-- Version du serveur :  10.4.6-MariaDB
-- Version de PHP :  7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `photocopie`
--

-- --------------------------------------------------------

--
-- Structure de la table `imprimante`
--

CREATE TABLE `imprimante` (
  `idimp` int(11) NOT NULL,
  `nomimp` varchar(15) NOT NULL,
  `prixphbn` int(11) NOT NULL,
  `prixphcoul` int(11) NOT NULL,
  `priximprbn` int(11) NOT NULL,
  `priximprcoul` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `imprimante`
--

INSERT INTO `imprimante` (`idimp`, `nomimp`, `prixphbn`, `prixphcoul`, `priximprbn`, `priximprcoul`) VALUES
(1, 'FFFF', 10, 25, 25, 100);

-- --------------------------------------------------------

--
-- Structure de la table `poin`
--

CREATE TABLE `poin` (
  `idpoint` int(11) NOT NULL,
  `idimp` int(11) NOT NULL,
  `nomimp` varchar(50) NOT NULL,
  `photobn` int(11) NOT NULL,
  `photocoul` int(11) NOT NULL,
  `impbn` int(11) NOT NULL,
  `impcoul` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `idimp` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `profil` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`idimp`, `nom`, `email`, `password`, `profil`) VALUES
(1, 'ADJAGBALOU', 'adjagbalou@gmail.com', 'reve', 'PDG'),
(2, 'Faïkoth MOUSTAPHA', 'faikothmoustapha0@gmail.com', 'meme', 'secretaire');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `imprimante`
--
ALTER TABLE `imprimante`
  ADD PRIMARY KEY (`idimp`);

--
-- Index pour la table `poin`
--
ALTER TABLE `poin`
  ADD PRIMARY KEY (`idpoint`),
  ADD KEY `idimp` (`idimp`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`idimp`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `imprimante`
--
ALTER TABLE `imprimante`
  MODIFY `idimp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `poin`
--
ALTER TABLE `poin`
  MODIFY `idpoint` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `idimp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `poin`
--
ALTER TABLE `poin`
  ADD CONSTRAINT `nomdecontrainte` FOREIGN KEY (`idimp`) REFERENCES `imprimante` (`idimp`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
