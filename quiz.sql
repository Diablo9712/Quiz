-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2020 at 05:20 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id_question` int(11) NOT NULL,
  `id_quiz` int(11) NOT NULL,
  `Question` varchar(255) NOT NULL,
  `Reponse1` varchar(255) NOT NULL,
  `Reponse2` varchar(255) NOT NULL,
  `Reponse3` varchar(255) NOT NULL,
  `Reponse4` varchar(255) NOT NULL,
  `Reponsec` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id_question`, `id_quiz`, `Question`, `Reponse1`, `Reponse2`, `Reponse3`, `Reponse4`, `Reponsec`) VALUES
(3, 4, 'Quel age as tu.', '20', '21', '22', '23', '22'),
(4, 4, 'aaaa', 'aa', 'aaaa', 'aaaaaaaa', 'aaa', 'aa'),
(5, 4, 'aaaa', 'aa', 'aaaa', 'aaaaaaaa', 'aaa', 'aa'),
(6, 4, 'aaaa', 'aa', 'aaaa', 'aaaaaaaa', 'aaa', 'aa'),
(7, 4, 'aaaa', 'aa', 'aaaa', 'aaaaaaaa', 'aaa', 'aa'),
(8, 4, 'aaaa', 'aa', 'aaaa', 'aaaaaaaa', 'aaa', 'aa'),
(9, 4, 'aaaa', 'aa', 'aaaa', 'aaaaaaaa', 'aaa', 'aa'),
(10, 4, 'aaaa', 'aa', 'aaaa', 'aaaaaaaa', 'aaa', 'aa'),
(11, 5, '1)	Dans Photoshop la combinaison CTRL+ clic sur la vignette d\'un tracÃ© permet :', 'De fermer un tracÃ© Photoshop', 'De rendre actif un tracÃ© Photoshop', 'De copier un tracÃ© Photoshop', 'De convertir un tracÃ© en sÃ©lection PhotoshopDe copier un tracÃ© Photoshop', 'De convertir un tracÃ© en sÃ©lection PhotoshopDe copier un tracÃ© Photoshop'),
(12, 5, '2)	Dans Photoshop, pour sÃ©lectionner les parties opaques d\'un calque:', 'Je fais CTRL+clic sur la vignette du calque en question', 'Je fais SÃ©lection >> Tout sÃ©lectionner', 'Je sÃ©lectionne avec la baguette magique', 'Je fais Alt+clic sur la vignette du calc', 'Je fais CTRL+clic sur la vignette du calque en question'),
(13, 5, '3)	Dans Photoshop lorsque j\'opÃ¨re une sÃ©lection, si je souhaite que celle-ci s\'additionne Ã  une sÃ©lection dÃ©jÃ  prÃ©sente, je maintiens les/la touche(s) :', 'CTRL+ALT', 'ALT+SHIFT', 'SHIFT', 'CTRL', 'SHIFT'),
(14, 5, ' 4)	Qu\'utilise-t-on pour retoucher une photo ?', 'Adobe Illustrator', 'Adobe Illustrator', 'Adobe Premiere', 'Autre', 'Adobe Illustrator'),
(15, 5, '5)	OÃ¹ se place un rÃ©flecteur ?', 'Devant la source lumineuse', 'Ã€ l\'opposÃ© de la source lumineuse', 'Rien', 'Autre', 'Ã€ l\'opposÃ© de la source lumineuse'),
(16, 5, '6) Ã€ quoi correspond la profondeur de champ ?', 'La zone de nettetÃ© Ã  l\'avant et Ã  l\'arriÃ¨re du sujet photographiÃ©', 'La zone de nettetÃ© Ã  l\'aprÃ¨s et Ã  l\'arriÃ¨re du sujet photographiÃ©', 'La zone de nettetÃ© Ã  l\'avant et Ã  l\'arriÃ¨re du sujet Peinture', 'La distance Ã  laquelle le sujet se trouve par rapport au photographe', 'La zone de nettetÃ© Ã  l\'avant et Ã  l\'arriÃ¨re du sujet photographiÃ©'),
(17, 5, '7)	Quelle est l\'ouverture la plus grande du diaphragme de l\'objectif ?', 'F/3,5', 'F/22', 'F/65', 'F/4.5', 'F/3,5'),
(18, 5, '7)	Une image a une rÃ©solution de 300 ppp. Quelle sera sa rÃ©solution si je double sa taille en cm, sans ajouter de pixels supplÃ©mentaires ?', '600', '500', '150', '400', '600'),
(19, 5, '8)	La rÃ©solution optique d\'un scanner est donnÃ©e Ã  1200 ppp x 1200 ppp. Je veux scanner une image Ã  300 ppp agrandie 4 fois. Mon scanner est-il assez puissant ?', 'Oui', 'Non', 'Peut Ãªtre', 'Je sais pas', 'Oui'),
(20, 5, '9)	Quel est le principe d\'un masque de fusion ?', 'Les zones peintes en noir masquent les parties du calque et les zones blanches affichent les parties du calque', 'Les zones peintes en noir masquent les parties du calque et les zones blanches affichent les parties du calque', 'Les zones peintes en noir masquent les parties du calque et les zones blanches affichent les petites parties du calque', 'Les zones peintes en noir masquent les parties du calque et les zones blanches suppriment les parties du calque', 'Les zones peintes en noir masquent les parties du calque et les zones blanches affichent les parties du calque'),
(21, 5, '11) Pour fusionner deux images lors dâ€™un montage, vous utilisez : ', 'Le copier/coller', 'MÃ©langeur de couche Le masque de fusion ', 'Je ne sais pas ', 'Je ne comprends pas la question', 'Le copier/coller'),
(22, 5, '12)	Le jpg est comme le png un format photo compressÃ©. Ils est donc parfait pour le web', 'Vrai', 'Faux', 'Peut Ãªtre', 'Autre', 'Vrai'),
(23, 5, '13)	La commande couleur du menu Photoshop sert Ã  :', 'Imposer le rÃ©glage de lâ€™Ã©cran', 'Imposer lâ€™encrage manuel ', 'Mieux Ã©talonner les couleurs utilisÃ©es', 'Imposer lâ€™encrage automatique', 'Mieux Ã©talonner les couleurs utilisÃ©es'),
(24, 5, '14)	Pour recadrer une photo utilisez-vous :', 'Un outil de sÃ©lection puis Couper - Copier - Coller ', 'Lâ€™outil de recadrage ', 'Je ne sais pas', 'Je ne comprends pas la question', 'Lâ€™outil de recadrage ');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id_q` int(11) NOT NULL,
  `nomQuiz` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id_q`, `nomQuiz`, `id_user`) VALUES
(2, 'gdbdbdd', 1),
(4, 'Scafandri', 1),
(5, 'Photoshop', 1),
(6, 'test', 1);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id_result` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_quiz` int(11) NOT NULL,
  `Score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id_result`, `id_user`, `id_quiz`, `Score`) VALUES
(1, 1, 5, 10),
(2, 1, 5, 12),
(3, 1, 5, 5),
(4, 1, 5, 5),
(5, 1, 5, 5),
(6, 1, 2, 5),
(7, 1, 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `CIN` varchar(10) NOT NULL,
  `Adresse` varchar(100) NOT NULL,
  `Tel` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `permission` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `Nom`, `Prenom`, `CIN`, `Adresse`, `Tel`, `Email`, `Password`, `permission`) VALUES
(1, 'BENOUIA', 'SOUMIA', 'AB12345', 'Marrakech', '0642685606', 'admin@admin.com', 'admin123', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id_question`),
  ADD KEY `nnnnn` (`id_quiz`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id_q`),
  ADD KEY `aaaaa` (`id_user`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id_result`),
  ADD KEY `bbbbb` (`id_quiz`),
  ADD KEY `vvvvv` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `CIN` (`CIN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id_question` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id_q` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id_result` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `nnnnn` FOREIGN KEY (`id_quiz`) REFERENCES `quiz` (`id_q`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `quiz`
--
ALTER TABLE `quiz`
  ADD CONSTRAINT `aaaaa` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `bbbbb` FOREIGN KEY (`id_quiz`) REFERENCES `quiz` (`id_q`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vvvvv` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
