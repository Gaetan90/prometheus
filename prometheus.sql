-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 15 Novembre 2016 à 13:28
-- Version du serveur :  5.7.14
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `prometheus`
--

-- --------------------------------------------------------

--
-- Structure de la table `membre_connecte`
--

CREATE TABLE `membre_connecte` (
  `id` int(11) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `trombinoscope`
--

CREATE TABLE `trombinoscope` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `A` int(11) NOT NULL,
  `infos` text NOT NULL,
  `association` varchar(40) NOT NULL,
  `salle` varchar(25) NOT NULL,
  `position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `trombinoscope`
--

INSERT INTO `trombinoscope` (`id`, `nom`, `prenom`, `mail`, `A`, `infos`, `association`, `salle`, `position`) VALUES
(1, 'Huilier', 'Hugo', '', 1, 'Diverses informations ...', 'Prometheus', 'S004', 1),
(2, 'Rosenberger', 'Clément', '', 1, '', '', 'S004', 2),
(3, 'Schaefer', 'François', '', 1, '', '', 'S004', 3),
(4, 'Lutz', 'Victor', '', 1, '', '', 'S004', 4),
(5, 'Wendling', 'Johan', '', 1, '', '', 'S004', 5),
(6, 'Philippe', 'Dan', '', 1, '', '', 'S004', 6),
(7, 'Haegel', 'Mathias', '', 1, '', '', 'S002', 7),
(8, 'Nouri', 'Sabri', '', 1, '', '', 'S002', 8),
(9, 'Distretti', 'Benoit', '', 1, '', '', 'S002', 9),
(10, 'Roth', 'François', '', 1, '', '', 'S002', 10),
(11, 'El_Olmi', 'Mehdi', '', 1, '', '', 'S002', 11),
(12, 'Birchler', 'Arno', '', 1, '', '', 'S002', 12),
(13, 'Fritsch', 'Raphaël', '', 1, '', '', 'S002', 13);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sexe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel` int(11) NOT NULL,
  `annee` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `email`, `password`, `sexe`, `tel`, `annee`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Huilier', 'Hugo', 'hugo.huilier@viacesi.fr', '$2y$10$9GIBiJsQSXAkdov/HDsSYu5u1ajV1u3.b/9EHC8oy.KVR5sjlCGCu', 'H', 652327977, 2, 'ewojhWaggpVLewlozpUFA0jeC0Q6YvICdAJXKf4QUKctynIYRPGY2uzPUOWj', NULL, '2016-11-10 14:09:31');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Index pour la table `trombinoscope`
--
ALTER TABLE `trombinoscope`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `trombinoscope`
--
ALTER TABLE `trombinoscope`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
