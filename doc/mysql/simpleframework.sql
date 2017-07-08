-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Sam 24 Juin 2017 à 13:04
-- Version du serveur :  5.7.18-0ubuntu0.16.04.1
-- Version de PHP :  7.0.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `simpleframework`
--

-- --------------------------------------------------------

--
-- Structure de la table `sf_entities`
--

CREATE TABLE `sf_entities` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `description` varchar(256) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sf_entities`
--

INSERT INTO `sf_entities` (`id`, `name`, `description`, `created_at`, `created_by`) VALUES
(1, 'toto', 'toto', '2017-06-10 17:54:10', 1);

-- --------------------------------------------------------

--
-- Structure de la table `sf_roles`
--

CREATE TABLE `sf_roles` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sf_roles`
--

INSERT INTO `sf_roles` (`id`, `name`) VALUES
(1, 'user'),
(2, 'superuser');

-- --------------------------------------------------------

--
-- Structure de la table `sf_users`
--

CREATE TABLE `sf_users` (
  `id` int(11) NOT NULL,
  `login` varchar(128) NOT NULL,
  `password` varchar(512) NOT NULL,
  `status` varchar(64) NOT NULL,
  `firstname` varchar(128) NOT NULL,
  `lastname` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `fonction` varchar(128) NOT NULL,
  `adress` varchar(256) NOT NULL,
  `phone` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sf_users`
--

INSERT INTO `sf_users` (`id`, `login`, `password`, `status`, `firstname`, `lastname`, `email`, `fonction`, `adress`, `phone`) VALUES
(1, 'root', '$2y$10$8Aee2K.oWyKk4DulI/EJVePmdExWZBl1QZ2SNrHwKijYW5bn7YM/y', 'developer', 'Thibaut', 'Latouche', 'thibaut.latouche@gmail.com', 'Lead Dev', '7 rue de la miséricorde, 14000 Caen', '+33 6 12 04 60 62');

-- --------------------------------------------------------

--
-- Structure de la table `sf_users_application`
--

CREATE TABLE `sf_users_application` (
  `id` int(11) NOT NULL,
  `login` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `firstname` varchar(256) NOT NULL,
  `lastname` varchar(256) NOT NULL,
  `email` varchar(128) NOT NULL,
  `created_at` varchar(128) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sf_users_application`
--

INSERT INTO `sf_users_application` (`id`, `login`, `password`, `firstname`, `lastname`, `email`, `created_at`, `created_by`, `role_id`) VALUES
(1, 'user1', 'user1', 'Utilisateur', 'Number1', 'number1@mail.com', '2017-06-01 02:00:00', NULL, 1),
(2, 'user1', 'user1', 'Utilisateur', 'Number2', 'number@mail.com', '2017-06-01 02:00:00', NULL, 2);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `sf_entities`
--
ALTER TABLE `sf_entities`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sf_roles`
--
ALTER TABLE `sf_roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sf_users`
--
ALTER TABLE `sf_users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sf_users_application`
--
ALTER TABLE `sf_users_application`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `sf_entities`
--
ALTER TABLE `sf_entities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `sf_roles`
--
ALTER TABLE `sf_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `sf_users`
--
ALTER TABLE `sf_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `sf_users_application`
--
ALTER TABLE `sf_users_application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
