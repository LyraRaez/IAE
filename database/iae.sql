-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 21 Juin 2018 à 15:39
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `iae`
--

-- --------------------------------------------------------

--
-- Structure de la table `adhesion`
--

CREATE TABLE `adhesion` (
  `Message` text NOT NULL,
  `Lien_PDF` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `adhesion`
--

INSERT INTO `adhesion` (`Message`, `Lien_PDF`) VALUES
('D&eacute;velopper des contacts privil&eacute;gi&eacute;s et d&rsquo;obtenir des conseils pour vos projets : recherche d&rsquo;emploi, partage de connaissance, d&rsquo;exp&eacute;rience,&hellip;\r\nRester en relation avec l&rsquo;IAE Amiens-Picardie pour continuer &agrave; vous former, et former des stagiaires qui seront peut-&ecirc;tre vos futurs collaborateurs \r\n\r\nN&#039;attendez plus et adh&eacute;rez a notre association.', 'PresentationAsso.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `ID_Article` int(11) NOT NULL,
  `Titre_Article` text NOT NULL,
  `Desc_Article` text NOT NULL,
  `Mots_Cles` text NOT NULL,
  `PDF` text NOT NULL,
  `Image` text NOT NULL,
  `Date` text NOT NULL,
  `NomAuteur` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`ID_Article`, `Titre_Article`, `Desc_Article`, `Mots_Cles`, `PDF`, `Image`, `Date`, `NomAuteur`) VALUES
(2, 'Le super tactile arrive sur les portables ?', 'Il se pourrait que les portables soient de plus en plus optimisés', 'Portables, Tactiles', 'Le-Monde-Une-grande-école-sans-se-ruiner-1.pdf', 'téléchargement.jpg', '2018-01-22', 'Favrez Thierry'),
(3, 'fete', 'zhgiuzehf', 'erger', 'LEXPRESS-IAE-lautre-filière-du-management.pdf', 'téléchargement.jpg', '2018-01-22', 'Un random'),
(5, 'Bonjour', 'L&#039;artiste VALD aurait oubli&eacute; de dire bonjour', 'Bonjour, Vald', 'PresentationAsso.pdf', 'vald-couv-h-5.jpg', '2018-01-22', 'Favrez Thierry'),
(6, 'Ecole : Les initiations &agrave; l&#039;informatique', 'La programmation arrive chez les plus jeunes', 'Programmation, Jeunes, Ecole', 'Conference 1er decembre.pdf', 'images (1).jpg', '2018-01-25', 'Favrez Thierry'),
(7, 'Un nouveau moyen d\'apprendre', 'L&#039;universit&eacute; de Bourgogne a trouv&eacute; un moyen de p&eacute;dagogie innovante', 'Université, Pédagogie', 'Conference 1er decembre.pdf', 'l_universit-de-bourgogne.jpg', '2018-01-29', 'Favrez Thierry'),
(8, 'Les jeunes se mettent au sport', 'Pour une meilleure forme, mieux vaut faire du sport', 'Sport, Forme', 'PresentationAsso.pdf', 'images.jpg', '2018-01-29', 'Favrez Thierry'),
(9, 'L&#039;IAE recrute', 'L&#039;&eacute;tablissement recherche des &eacute;tudiants motiv&eacute;s', 'IAE, Recrute', 'ONISEP-Hors-Série-Quand-la-fac-rivalise-avec-les-grandes-écoles.pdf', 'ONISEP.png', '2018-02-15', 'Favrez Thierry');

-- --------------------------------------------------------

--
-- Structure de la table `diplome`
--

CREATE TABLE `diplome` (
  `ID_Diplome` int(11) NOT NULL,
  `Nom_Diplome` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `diplome`
--

INSERT INTO `diplome` (`ID_Diplome`, `Nom_Diplome`) VALUES
(1, 'BTS SN'),
(2, 'BTS SIO'),
(4, 'BTS Comptable');

-- --------------------------------------------------------

--
-- Structure de la table `emailcontact`
--

CREATE TABLE `emailcontact` (
  `email` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `emailcontact`
--

INSERT INTO `emailcontact` (`email`) VALUES
('chefdeprojetsio@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

CREATE TABLE `evenement` (
  `ID` int(11) NOT NULL,
  `Nom` text NOT NULL,
  `Date` date NOT NULL,
  `PDF` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `evenement`
--

INSERT INTO `evenement` (`ID`, `Nom`, `Date`, `PDF`) VALUES
(5, 'Pique-Nique au Parc Saint-Paul', '2018-02-08', 'Newsletter-N°3-Mai-2012.pdf'),
(6, 'Concert de PNL au Coliseum', '2018-01-23', 'Newsletter-N°3-Mai-2012.pdf'),
(7, 'Mariage', '2018-01-26', 'Newsletter-N°3-Mai-2012.pdf'),
(9, 'gegqrgerg', '2018-03-18', 'Newsletter-N°3-Mai-2012.pdf'),
(11, 'qerefe', '2018-02-25', 'Newsletter-N°3-Mai-2012.pdf'),
(12, 'Barmitsva', '2018-02-17', 'Newsletter-NÂ°3-Mai-2012.pdf'),
(13, 'etetertestesrt', '2018-02-18', 'Offre_Emploi.pdf'),
(14, 'rggeg', '2018-02-17', '404.png');

-- --------------------------------------------------------

--
-- Structure de la table `galerie`
--

CREATE TABLE `galerie` (
  `ID_Photo` int(11) NOT NULL,
  `Nom_Photo` text NOT NULL,
  `ID_Categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `galeriecategorie`
--

CREATE TABLE `galeriecategorie` (
  `ID_Categorie` int(11) NOT NULL,
  `Nom_Categorie` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `galeriecategorie`
--

INSERT INTO `galeriecategorie` (`ID_Categorie`, `Nom_Categorie`) VALUES
(2, 'Fêtes');

-- --------------------------------------------------------

--
-- Structure de la table `logo`
--

CREATE TABLE `logo` (
  `Icone` text NOT NULL,
  `Logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `logo`
--

INSERT INTO `logo` (`Icone`, `Logo`) VALUES
('logo_iae_asso_1.ico', 'logo_iae_asso.png');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `ID_Profil` int(11) NOT NULL,
  `admin` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `mdp` text NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `Sexe` text NOT NULL,
  `PhotoProfil` varchar(100) NOT NULL DEFAULT 'Default.png',
  `DateNaissance` date DEFAULT NULL,
  `DateInscription` date NOT NULL,
  `PDF` text,
  `MessageHumeur` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`ID_Profil`, `admin`, `email`, `mdp`, `nom`, `prenom`, `Sexe`, `PhotoProfil`, `DateNaissance`, `DateInscription`, `PDF`, `MessageHumeur`) VALUES
(1, '1', 'favrezthierry@gmail.com', 'IAECBIEN', 'Favrez', 'Thierry', 'Homme', 'FavrezThierryPDPPresident.png', '1963-02-10', '2018-02-08', 'FavrezThierrybon-de-commande-sweats.pdf', 'Bonjour à tous'),
(2, '0', 'lucasabram@live.fr', 'bambin', 'Abram', 'Lucas', 'Homme', 'AbramLucasdsv.png', '1999-07-15', '0000-00-00', '', 'Bonjour'),
(3, '0', 'delabouse.greg@hotmail.fr', 'A1IsrQ', 'Delabouse', 'Gregory', 'Homme', 'Default.png', NULL, '2018-02-15', NULL, NULL),
(5, '0', 'yenohugo@gmail.com', 'HugoCamille', 'Lefebvre', 'Hugo', 'Homme', 'LefebvreHugohugo.png', '1998-10-10', '2018-02-15', '', 'Coucou les tulipes :D');

-- --------------------------------------------------------

--
-- Structure de la table `motpresident`
--

CREATE TABLE `motpresident` (
  `Nom` text,
  `Fonction` text,
  `Message` text,
  `LienPhoto` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `motpresident`
--

INSERT INTO `motpresident` (`Nom`, `Fonction`, `Message`, `LienPhoto`) VALUES
('Thierry Favrez', 'Pr&eacute;sident', 'Bienvenue sur le site de mon association', 'PDPPresident.png');

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

CREATE TABLE `newsletter` (
  `email` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `newsletter`
--

INSERT INTO `newsletter` (`email`) VALUES
('chefdeprojetsio@gmail.com'),
('yenohugo@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `obtentiondiplome`
--

CREATE TABLE `obtentiondiplome` (
  `ID_Diplome` int(11) NOT NULL,
  `ID_Profil` int(11) NOT NULL,
  `Annee_Obtention` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `obtentiondiplome`
--

INSERT INTO `obtentiondiplome` (`ID_Diplome`, `ID_Profil`, `Annee_Obtention`) VALUES
(2, 1, 2006),
(1, 1, 2007),
(2, 5, 2018),
(1, 2, 2016);

-- --------------------------------------------------------

--
-- Structure de la table `offre`
--

CREATE TABLE `offre` (
  `ID_Offre` int(11) NOT NULL,
  `Nom_Entreprise` text NOT NULL,
  `Nom_Offre` text NOT NULL,
  `PDF` text NOT NULL,
  `Logo` text NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `offre`
--

INSERT INTO `offre` (`ID_Offre`, `Nom_Entreprise`, `Nom_Offre`, `PDF`, `Logo`, `Date`) VALUES
(4, 'Ciorane', 'Developpeur Java/CSS', 'Offre_emploi1.pdf', 'Logo_Ciorane.PNG', '2018-01-31'),
(5, 'Timmxware', 'Cherche stagiaires', 'Offre_Emploi.pdf', 'Logo.jpg', '2018-01-31'),
(6, 'bonjour', 'vfvr', 'Newsletter-N°3-Mai-2012.pdf', 'Newsletter 3-05-2012.PNG', '2018-01-31'),
(8, 'Auchan', 'H/F Caissier', 'Newsletter-N°3-Mai-2012.pdf', 'telechargement.png', '2018-01-31');

-- --------------------------------------------------------

--
-- Structure de la table `sponsor`
--

CREATE TABLE `sponsor` (
  `Nom` text NOT NULL,
  `Lien` text NOT NULL,
  `Image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sponsor`
--

INSERT INTO `sponsor` (`Nom`, `Lien`, `Image`) VALUES
('APEGELEC', 'http://www.apegelec.fr/fr/index.php', 'apegelec-y-89-250x89.jpg'),
('BETRANCOURT', 'http://www.betrancourt.fr/', 'logo-betrancourt.gif'),
('Universit&eacute; de Picardie Jules Vernes', 'https://www.u-picardie.fr/', 'client4.png'),
('IAE AMIENS', 'https://www.u-picardie.fr/instituts/iae/accueil/institut-d-administration-des-entreprises-iae--384315.kjsp', 'logo_iae_amiens.png'),
('IAE FRANCE', 'https://www.iae-france.fr/', 'logo_iae_france.png'),
('Solustry Technology', '', 'Logo-300x212.png'),
('NESQUIK', 'https://www.nestle.fr/nosmarques/boissons/nesquik', 'Nesquik_2016.png');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`ID_Article`);

--
-- Index pour la table `diplome`
--
ALTER TABLE `diplome`
  ADD PRIMARY KEY (`ID_Diplome`);

--
-- Index pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `galerie`
--
ALTER TABLE `galerie`
  ADD PRIMARY KEY (`ID_Photo`),
  ADD KEY `ID_Categorie` (`ID_Categorie`);

--
-- Index pour la table `galeriecategorie`
--
ALTER TABLE `galeriecategorie`
  ADD PRIMARY KEY (`ID_Categorie`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`ID_Profil`);

--
-- Index pour la table `obtentiondiplome`
--
ALTER TABLE `obtentiondiplome`
  ADD KEY `ID_Diplome` (`ID_Diplome`),
  ADD KEY `ID_Profil` (`ID_Profil`);

--
-- Index pour la table `offre`
--
ALTER TABLE `offre`
  ADD PRIMARY KEY (`ID_Offre`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `ID_Article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `diplome`
--
ALTER TABLE `diplome`
  MODIFY `ID_Diplome` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `evenement`
--
ALTER TABLE `evenement`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `galerie`
--
ALTER TABLE `galerie`
  MODIFY `ID_Photo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `galeriecategorie`
--
ALTER TABLE `galeriecategorie`
  MODIFY `ID_Categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `ID_Profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `offre`
--
ALTER TABLE `offre`
  MODIFY `ID_Offre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `galerie`
--
ALTER TABLE `galerie`
  ADD CONSTRAINT `galerie_ibfk_1` FOREIGN KEY (`ID_Categorie`) REFERENCES `galeriecategorie` (`ID_Categorie`);

--
-- Contraintes pour la table `obtentiondiplome`
--
ALTER TABLE `obtentiondiplome`
  ADD CONSTRAINT `obtentiondiplome_ibfk_1` FOREIGN KEY (`ID_Diplome`) REFERENCES `diplome` (`ID_Diplome`),
  ADD CONSTRAINT `obtentiondiplome_ibfk_2` FOREIGN KEY (`ID_Profil`) REFERENCES `membre` (`ID_Profil`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
