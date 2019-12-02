-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  lun. 02 déc. 2019 à 13:20
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo_admin` varchar(80) COLLATE utf8_bin NOT NULL,
  `nom_admin` varchar(80) COLLATE utf8_bin NOT NULL,
  `mdp_admin` varchar(80) COLLATE utf8_bin NOT NULL,
  `mail_admin` varchar(80) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `pseudo_admin`, `nom_admin`, `mdp_admin`, `mail_admin`) VALUES
(1, 'PharmaAdmin', 'pharm', '1234', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

DROP TABLE IF EXISTS `employe`;
CREATE TABLE IF NOT EXISTS `employe` (
  `emp_id` int(50) NOT NULL AUTO_INCREMENT,
  `emp_nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `emp_pnom` varchar(255) COLLATE utf8_bin NOT NULL,
  `emp_tel` int(50) NOT NULL,
  `Login` varchar(80) COLLATE utf8_bin DEFAULT NULL,
  `mot_de_passe` varchar(80) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=123485 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `employe`
--

INSERT INTO `employe` (`emp_id`, `emp_nom`, `emp_pnom`, `emp_tel`, `Login`, `mot_de_passe`) VALUES
(123484, 'bebeto', 'masda', 664646, '6464', '7b3ad16ef2269180851ee7b153b434d4f39ec02a'),
(123478, 'I\'TSME', 'HELLO', 0, NULL, NULL),
(123479, 'I\'TSME', 'HELLO', 0, NULL, NULL),
(123480, 'I\'TSME', 'HELLO', 0, NULL, NULL),
(123481, 'I\'TSME', 'HELLO', 0, NULL, NULL),
(123483, 'WEMBA', 'HE HO TOI LA', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `espace_membre`
--

DROP TABLE IF EXISTS `espace_membre`;
CREATE TABLE IF NOT EXISTS `espace_membre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(80) NOT NULL,
  `nom` varchar(80) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `motdepasse` text NOT NULL,
  `code_postal` varchar(10) NOT NULL,
  `ville` varchar(80) NOT NULL,
  `Adresse` varchar(255) NOT NULL,
  `telephone` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `espace_membre`
--

INSERT INTO `espace_membre` (`id`, `prenom`, `nom`, `mail`, `motdepasse`, `code_postal`, `ville`, `Adresse`, `telephone`) VALUES
(5, 'masda', 'BERICHE', 'MASDA@GMAIL.COM', '8cb2237d0679ca88db6464eac60da96345513964', '97480', 'saint-joseph', '', '0693004598'),
(6, 'beriche', 'CHAHALANE', 'BERICHE@GMAIL.COM', '7c4a8d09ca3762af61e59520943dc26494f8941b', '97480', '974', '36 rue', '123456789'),
(7, 'beriche', 'CHAHALANE', 'CHAHALANE@GMAIL.COM', '93c17c44b52108cf19f6b875e06ea00bab3ba3d7', '97480', 'saint-joseph', '36rue hyppolite fouqcue', '069325860'),
(8, 'Thomas', 'MAHON', 'THOMAS@GMAIL.COM', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '97450', 'saint-louis', '41 rue jean-marc', '062584798'),
(9, 'beriche', 'BERICHE', 'BERICHES@GMAIL.COM', '93c17c44b52108cf19f6b875e06ea00bab3ba3d7', '97480', 'saint-jo', '99 rue bts1', '069348580');

-- --------------------------------------------------------

--
-- Structure de la table `maternite`
--

DROP TABLE IF EXISTS `maternite`;
CREATE TABLE IF NOT EXISTS `maternite` (
  `id_medm` int(80) NOT NULL AUTO_INCREMENT,
  `nom_med` varchar(80) COLLATE utf8_bin NOT NULL,
  `description` varchar(255) COLLATE utf8_bin NOT NULL,
  `conditionnement` varchar(255) COLLATE utf8_bin NOT NULL,
  `image_med` varchar(80) COLLATE utf8_bin NOT NULL,
  `prix` varchar(80) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_medm`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `maternite`
--

INSERT INTO `maternite` (`id_medm`, `nom_med`, `description`, `conditionnement`, `image_med`, `prix`) VALUES
(1, 'Couche', 'Doux et leger facile d\'utilisation', '42 Couche', '<img  src=\"Style/imgmedic/maternite/couche.jpg\"  >', '20 €');

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

DROP TABLE IF EXISTS `membres`;
CREATE TABLE IF NOT EXISTS `membres` (
  `id_mbr` int(8) NOT NULL AUTO_INCREMENT,
  `pseudo_mbr` varchar(80) NOT NULL,
  `nom_mbr` varchar(255) NOT NULL,
  `afficher_util` varchar(255) DEFAULT NULL,
  `mdp_mbr` varchar(255) NOT NULL,
  `email_mbr` varchar(255) NOT NULL,
  PRIMARY KEY (`id_mbr`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id_mbr`, `pseudo_mbr`, `nom_mbr`, `afficher_util`, `mdp_mbr`, `email_mbr`) VALUES
(2, 'bts', 'btssio', 'Administrateur', '017fe3a523712ceba7cde169653316e9', 'btssio@lpp.re');

-- --------------------------------------------------------

--
-- Structure de la table `nutrition`
--

DROP TABLE IF EXISTS `nutrition`;
CREATE TABLE IF NOT EXISTS `nutrition` (
  `id_medn` int(255) NOT NULL AUTO_INCREMENT,
  `nom_med` varchar(255) COLLATE utf8_bin NOT NULL,
  `description` varchar(255) COLLATE utf8_bin NOT NULL,
  `conditionnement` varchar(80) COLLATE utf8_bin NOT NULL,
  `image_med` varchar(255) COLLATE utf8_bin NOT NULL,
  `prix` varchar(80) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_medn`)
) ENGINE=MyISAM AUTO_INCREMENT=456988 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `nutrition`
--

INSERT INTO `nutrition` (`id_medn`, `nom_med`, `description`, `conditionnement`, `image_med`, `prix`) VALUES
(456987, 'doliprane', 'a boire le matin', '', ' <img  src=\"Style/logo.png\"  >', '12'),
(123645, 'dexeryl', 'malmldlmak', '', '', '50euro');

-- --------------------------------------------------------

--
-- Structure de la table `pharma`
--

DROP TABLE IF EXISTS `pharma`;
CREATE TABLE IF NOT EXISTS `pharma` (
  `id_med` int(30) NOT NULL AUTO_INCREMENT,
  `nom_med` varchar(80) COLLATE utf8_bin NOT NULL,
  `description` varchar(255) COLLATE utf8_bin NOT NULL,
  `conditionnement` varchar(255) COLLATE utf8_bin NOT NULL,
  `image_med` varchar(80) COLLATE utf8_bin NOT NULL,
  `prix` varchar(50) COLLATE utf8_bin NOT NULL,
  `categorie` varchar(80) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_med`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id_med` int(80) NOT NULL AUTO_INCREMENT,
  `nom_med` varchar(80) COLLATE utf8_bin NOT NULL,
  `description` varchar(500) COLLATE utf8_bin NOT NULL,
  `conditionnement` varchar(255) COLLATE utf8_bin NOT NULL,
  `image_med` varchar(80) COLLATE utf8_bin NOT NULL,
  `prix` varchar(80) COLLATE utf8_bin NOT NULL,
  `categorie` varchar(80) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_med`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_med`, `nom_med`, `description`, `conditionnement`, `image_med`, `prix`, `categorie`) VALUES
(2, 'DOLIPRANE', 'Sans ordonnance, ce médicament est indiqué en cas de douleur et/ou fièvre : maux de tête, états grippaux, douleurs dentaires, courbatures, règles douloureuses. Il peut également être prescrit en cas d\'arthrose', 'comprime *8', '<img  src=\"Style/imgmedic/sante/do.jpeg\"  >', '2.90€', 'sante'),
(4, 'Efferalgan', 'EFFERALGAN 500 mg est indiqué dans le traitement symptomatique des douleurs d\'intensité légère à modérée et/ou des états fébriles.', '250 MG', '<img src=\"Style/imgmedic/sante/efe.jpg\"  >', '1,16 €', 'sante'),
(3, 'Couche', 'Doux et léger facile d\'utilisation', '42 Couche', '<img  src=\"Style/imgmedic/maternite/couche.jpg\"  >\r\n', '20 €', 'maternité'),
(5, 'Dexeryle', 'Traitement dappoint des états de sécheresse cutanée de certaines dermatoses telles que dermatite atopique, états ichtyosiques, psoriasis.\r\n\r\nTraitement d/appoint des brûlures superficielles de faibles étendues.', '250 g en tube .', '<img src=\"Style/imgmedic/sante/dexeryl.jpeg\"  >', '3,15  €', 'sante'),
(6, '\r\nAnOxident Balance', 'Le système Duox a une action barrière qui permet de neutraliser le peroxyde d’hydrogène produit par un excès de glucose salivaire.', 'Tube 50 g', '<img  src=\"Style/imgmedic/hygiene/anoxident.jpg\"  >', '8,47 €', 'hygiene'),
(7, 'Puressentiel', 'Grâce à sa base lavante ultra-douce sans savon et à son pH physiologique, Puressentiel Gel lavant Douceur Certifié Bio nettoie en douceur, tout en respectant la sensibilité et l’équilibre de la zone intime.', '500 ml', '<img  src=\"Style/imgmedic/hygiene/puressentiel.jpg\"  >', 'Prix 13,60 €', 'hygiene'),
(8, 'bacilac', 'Bacilac ORS (Oral Rehydratation Solution) est un produit alimentaire diététique destiné à des fins médicales, spécialement indiqué pour les besoins nutritionnels et la prévention de la déshydratation en cas de diarrhée.\r\nEn assurant une absorption optimale de l’eau et d’électrolytes, Bacilac ORS prévient et traite la déshydratation causée par une diarrhée aiguë. Bacilac ORS contient également des probiotiques pour une restauration optimale de la flore intestinale après un épisode de diarrhée.\r\n', '10 sachets', '<img  src=\"Style/imgmedic/hygiene/bacilac.jpg\"  >', '8,50€', 'hygiene'),
(9, 'care', 'Une hygiène personnelle optimale requiert une eau de qualité fiable, du savon et une serviette propre.\r\nIl n’est pas toujours possible de se laver les mains en voyage, comme on le fait à la maison. Les mains sales sont en effet une source d’infections importante.\r\nLe Gel pour les Mains Nettoyant Care Plus Clean permet d’avoir des mains propres et fraîches sans utiliser d’eau ni de savon.\r\nNe dessèche pas les mains grâce à la présence d’ingrédients uniques tels l’Aloé vera.\r\nConvient aux enfants.', '300 ml', '<img  src=\"Style/imgmedic/hygiene/care.jpg\">', '11,11€', 'hygiene'),
(10, 'mertradex', 'Très efficace contre les virus, moisissures, bactéries et spores\r\nUtilisation aisée et sans danger\r\nUtilisable avec tous types de matériaux', '125 pièces', '<img  src=\"Style/imgmedic/hygiene/medtradex.jpg\">', '12,10€', 'hygiene'),
(11, 'mustela', 'Spécifiquement formulée pour les futures et jeunes mamans, la Crème prévention vergetures favorise la prévention des vergetures grâce à une association unique d’actifs et d\'ingrédients d’origine naturelle :\r\n- Les peptides d’avocat, actifs brevetés anti-tiraillements, apportent élasticité, souplesse et confort à la peau.\r\n', 'Tube 150 ml', '<img  src=\"Style/imgmedic/maternite/mustela.jpg\">', '16,40€', 'maternite'),
(12, 'weleda', '- la massage avec l’huile améliore l’élasticité des tissus conjonctifs ;\r\n- l’application régulière aide à prévenir les vergetures ;\r\n- améliore la structure de la peau ;\r\n- donne à la peau une sensation veloutée ;\r\n- efficacité testée dermatologiquement ;\r\n- note délicatement parfumée agréable à l’odorat sensibilisé.', '100 ml', '<img  src=\"Style/imgmedic/maternite/weleda.jpg\">', '13,01€', 'maternite'),
(13, 'uriage', 'Depuis plus de 2000 ans, une eau exceptionnelle :\r\nAu cœur du massif Alpin de Belledone, l’eau thermale d’Uriage prend sa source à 1600 m d’altitude. Au cours de son voyage, pendant près de 75 ans, elle traverse les profondeurs minérales, les couches rocheuses, les gypses, se gorgeant de minéraux et d’oligo-éléments (calcium, magnésium, manganèse, cuivre, zinc etc.).', 'Stick 8g', '<img  src=\"Style/imgmedic/maternite/uriage.jpg\">', '5,70€', 'maternite'),
(14, 'nutergia', 'Le fer est un nutriment essentiel pour la femme : il contribue au transport de l’oxygène, à la formation des globules rouges, au fonctionnement du système immunitaire. Par nature les femmes en ont des besoins élevés ; la perte mensuelle est de l’ordre de 25 mg et doit être couverte par des apports alimentaires au quotidien. ', '60 gélules', '<img  src=\"Style/imgmedic/maternite/nutergia.jpg\">', '13,31€', 'maternite'),
(15, 'ogestan', 'Ogestan est un complément alimentaire conçu spécifiquement pour accompagner les femmes tout au long de la maternité, du désir de grossesse à la période d’allaitement grâce à 5 nutriments essentiels : oméga 3, iode, acide folique, vitamines D3 et E.', ' 1 capsule par jour avant le repas, à avaler avec un verre d’eau', '<img  src=\"Style/imgmedic/maternite/ogestan.jpg\">', '34,93€', 'maternite'),
(16, 'nutramigen', 'Le lait maternel est l´aliment idéal pour bébé. Il est recommandé d´allaiter au moins jusqu´aux 6 mois car le lait maternel couvre les besoins nutritionnels spécifiques des bébés et contient des anticorps qui les protègent de maladies.', '400 g,  poudre', '<img  src=\"Style/imgmedic/nutrition/nutramigen.jpg\">', '42,63€', 'nutrition'),
(17, 'elteans', 'Complément alimentaire à utiliser dans le cadre d’une alimentation variée, équilibrée, d’un mode de vie sain.', '60 pc(s), comprimée(s)', '<img  src=\"Style/imgmedic/nutrition/elteans.jpg\">', '17,49€', 'nutrition'),
(18, 'seaderm', 'Nutriforce Stick Lèvres - texture non grasse, laisse un film dermo-protecteur.', 'rouge(s) à lèvres, 4g', '<img  src=\"Style/imgmedic/nutrition/seaderm.jpg\">', '4,82€', 'nutrition');

-- --------------------------------------------------------

--
-- Structure de la table `produit_historisation`
--

DROP TABLE IF EXISTS `produit_historisation`;
CREATE TABLE IF NOT EXISTS `produit_historisation` (
  `id_med` int(80) NOT NULL,
  `nom_med` varchar(80) COLLATE utf8_bin NOT NULL,
  `description` varchar(500) COLLATE utf8_bin NOT NULL,
  `conditionnement` varchar(255) COLLATE utf8_bin NOT NULL,
  `image_med` varchar(80) COLLATE utf8_bin NOT NULL,
  `prix` varchar(80) COLLATE utf8_bin NOT NULL,
  `categorie` varchar(80) COLLATE utf8_bin NOT NULL,
  `date_histo` datetime NOT NULL,
  `produit_historiser` varchar(255) COLLATE utf8_bin NOT NULL,
  `evenement_histo` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_med`,`date_histo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id_role` varchar(50) NOT NULL,
  `nom_role` varchar(50) NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id_role`, `nom_role`) VALUES
('admin', 'beriche'),
('user', 'chahalane');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_membre`
--

DROP TABLE IF EXISTS `tbl_membre`;
CREATE TABLE IF NOT EXISTS `tbl_membre` (
  `id_mbr` int(8) NOT NULL AUTO_INCREMENT,
  `nom_mbr` varchar(255) NOT NULL,
  `pseudo_mbr` varchar(80) NOT NULL,
  `afficher_mbr` varchar(255) NOT NULL,
  `mdp_mbr` varchar(255) NOT NULL,
  `email_mbr` varchar(255) NOT NULL,
  PRIMARY KEY (`id_mbr`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_membre`
--

INSERT INTO `tbl_membre` (`id_mbr`, `nom_mbr`, `pseudo_mbr`, `afficher_mbr`, `mdp_mbr`, `email_mbr`) VALUES
(2, 'btssio', 'bts2', 'Administrateur', '017fe3a523712ceba7cde169653316e9', 'btssio@lpp.re');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
