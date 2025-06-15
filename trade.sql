-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2023 at 05:37 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trade`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `titre` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titre_en` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `libelle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `libelle_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `titre`, `titre_en`, `libelle`, `libelle_en`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Notre mission', 'Our mission', '<p><span style=\"color:#000000\"><span style=\"font-size:18px\"><strong>Cr&eacute;e&nbsp;1996, Trade And Investment &nbsp;Promotion&nbsp;</strong>est une Sarl de droit camerounais<strong>&nbsp;</strong>sp&eacute;cialis&eacute;e dans la promotion des investissements et le transfert de technologies innovantes. Repr&eacute;sentant exclusif de la firme sud africaine&nbsp;<strong>AGENT CBR/ PLUS TECHNOLOGIE INTER</strong>&nbsp;pour le Cameroun, la zone&nbsp;<strong>CEMAC ET UNE PARTIE DE LA ZONE CDAO</strong>&nbsp;(cote d&rsquo;ivoire, Togo et Benin),&nbsp;<strong>Trade and Investment&nbsp; Promotion&nbsp;</strong>explore les cimes de la perfection avec pour ambition<strong>&nbsp;:</strong></span></span></p>\r\n\r\n<ol>\r\n	<li><span style=\"color:#000000\"><span style=\"font-size:18px\">Contribuer &agrave; cr&eacute;er l&rsquo;emploi pour les jeunes en les formant aux travaux de&nbsp; construction des routes communales, rurales et pistes rurales par l&rsquo;approche &agrave; haute intensit&eacute; de main d&rsquo;&oelig;uvre&nbsp;(Himo)</span></span></li>\r\n</ol>', '<p><span style=\"color:#000000\"><span style=\"font-size:18px\"><strong>Created in 1996,</strong>&nbsp;<strong>Trade and Investment Promotion</strong>&nbsp;is a Limited Liability Company (LLC)&nbsp; governed by Cameroonian law, specialised&nbsp;in the promotion of investments and transfer of innovative technologies. Exclusive representative of the South African&nbsp; consulting Company&nbsp;<strong>AGENT CBR-PLUS TECHNOLOGIE INTER for Cameroon, CEMAC&nbsp; Zone and some countries of the ECOWAS Zone (Cote d&rsquo;ivoire, Togo and Benin), Trade and Investment&nbsp; Promotion</strong>&nbsp;approaches perfection with the aim to&nbsp;:</span></span></p>\r\n\r\n<ol>\r\n	<li><span style=\"color:#000000\"><span style=\"font-size:18px\">Contribute to the creation of jobs for young people by training them in the construction&nbsp;&nbsp;&nbsp;&nbsp; of&nbsp;&nbsp;&nbsp;&nbsp; municipal roads,&nbsp;&nbsp;&nbsp; rural roads &nbsp;by &nbsp;the labor intensive approach (HIMO)</span></span></li>\r\n</ol>', '1692640180_website_image_300x300.png', '2022-09-07 12:34:11', '2023-08-21 16:49:40');

-- --------------------------------------------------------

--
-- Table structure for table `activites`
--

CREATE TABLE `activites` (
  `id` int(10) UNSIGNED NOT NULL,
  `titre` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titre_en` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `libelle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `libelle_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activites`
--

INSERT INTO `activites` (`id`, `titre`, `titre_en`, `libelle`, `libelle_en`, `image`, `video`, `created_at`, `updated_at`) VALUES
(1, 'Processus de mise en œuvre', 'Implementation process', NULL, NULL, '1663177175_img-9.jpg', '1663176902_activite.mp4', '2022-09-13 07:14:49', '2022-09-14 16:39:35'),
(2, 'Avantage comparative du CBR PLUS CON-AID', 'Comparative advantage of CBR-PLUS/CON-AID', '<ol style=\"list-style-type:lower-alpha\">\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Augmente la portance&nbsp; la performance des mat&eacute;riaux In-situ (augmentation du CBR &agrave; plus de 600% en 9 mois)</span></span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Longue dur&eacute;e de stabilisation des mat&eacute;riaux In-situ&nbsp; avec ou sans apport</span></span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Economie des couts d&rsquo;entretien de l&rsquo;ordre de 40%</span></span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Circulation en toute saison</span></span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">R&eacute;duction de la poussi&egrave;re en saison s&egrave;che et pas de boue en saison de pluie.</span></span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Application aux travaux &agrave; haute intensit&eacute; de main d&rsquo;&oelig;uvre(HIMO)</span></span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Adapt&eacute; pour la construction des couches de fondation et de plateformes (aires de stationnement, pistes d&rsquo;atterrissage, les routes prioritaires et rurales etc.</span></span></span></span></li>\r\n</ol>', '<ol style=\"list-style-type:lower-alpha\">\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Increases the lift and performance of in-situ materials (CBR increases to more than 600% on a period of about 9 months) ;</span></span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Long duration of stabilization of materials in-situ with or without ;</span></span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Maintenance cost savings around 40%&nbsp;;</span></span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Circulation in all seasons ;</span></span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Dust reduction in dry season and no mud in rainy season ;</span></span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Applicable to labor intensive works (HIMO)&nbsp;;</span></span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&nbsp;Suitable for the construction of layers of foundations and platforms (parking areas, airstrip, and roads and rural roads etc. </span></span></span></span></li>\r\n</ol>', NULL, NULL, '2022-09-13 07:17:15', '2022-09-13 07:17:15');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Gervais', 'gervais@gmail.com', NULL, '$2y$10$KfeuP6gRLidsP2t4uvi1.eTmrLol3begZCJuJsGm3x1IkKeRkprfm', NULL, '2022-09-05 14:34:23', '2022-09-05 14:34:23');

-- --------------------------------------------------------

--
-- Table structure for table `contenus`
--

CREATE TABLE `contenus` (
  `id` int(10) UNSIGNED NOT NULL,
  `titre` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `titre_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `libelle_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video1` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video1_en` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video2` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video2_en` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contenus`
--

INSERT INTO `contenus` (`id`, `titre`, `titre_en`, `libelle`, `libelle_en`, `video1`, `video1_en`, `video2`, `video2_en`, `created_at`, `updated_at`) VALUES
(1, 'Faites confiance au CBR PLUS CON-AID, votre rêve d’une route stable devient réalité test.', 'Trust the CBR PLUS CON-AID, your dream of a stable road becomes reality.', 'Le stabilisant CON AID / CBR PLUS est une technologie utilisée pour le traitement des sols argileux (sols à faible portance). ce produit stabilisant augmente la résistance et la portance du sol argileux (l\'indice CBR) en le rendant hydrophobe (refus d\'eau) test.', 'the con aid/ CBR plus stabilizer is a technology used for the treatment of clay soils (soils with low bearing capacity). this stabilizing product increases the resistance and bearing capacity of clay soil (the CBR index) by making it hydrophobic (refusal of water).', 'MXBuN6t515A', '1bGyjEl-pkE', 'L3NSNYt-GwE', 'L3NSNYt-GwE', '2022-10-04 08:07:30', '2023-10-29 08:28:34');

-- --------------------------------------------------------

--
-- Table structure for table `documentations`
--

CREATE TABLE `documentations` (
  `id` int(10) UNSIGNED NOT NULL,
  `titre` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titre_en` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdf` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documentations`
--

INSERT INTO `documentations` (`id`, `titre`, `titre_en`, `pdf`, `created_at`, `updated_at`) VALUES
(1, 'Téléchargez notre documentation ici', 'Download our documentation here', NULL, '2022-09-15 09:00:29', '2022-09-15 09:00:29'),
(3, 'Methodologie CON-AID - Mai 2021', 'Methodologie CON-AID - Mai 2021', '1663235680_Methodologie CON-AID - Mai 2021.pdf', '2022-09-15 08:54:40', '2022-09-15 08:54:40'),
(5, 'Brochure Stabilisant CBR PLUS', 'Brochure Stabilisant CBR PLUS', '1663241411_Brochure Stabilisant CBR PLUS(1).pdf', '2022-09-15 10:30:11', '2022-09-15 10:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(10) UNSIGNED NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `reponse` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `reponse_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `titre` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titre_en` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `titre`, `titre_en`, `image`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, '1663239390_gallerie3.jpg', '2022-09-15 09:56:30', '2022-09-15 09:56:30'),
(2, NULL, NULL, '1663253198_IMG_1511.jpg', '2022-09-15 09:56:51', '2022-09-15 13:46:39'),
(4, NULL, NULL, '1663239467_img-36.png', '2022-09-15 09:57:47', '2022-09-15 09:57:47'),
(5, NULL, NULL, '1663585666_gallerie2.jpeg', '2022-09-15 09:57:59', '2022-09-19 10:07:46'),
(6, NULL, NULL, '1663239551_img-18.jpg', '2022-09-15 09:59:11', '2022-09-15 09:59:11'),
(8, NULL, NULL, '1663585586_gallerie1.jpeg', '2022-09-15 10:03:47', '2022-09-19 10:06:26'),
(9, NULL, NULL, '1663239838_img-8.png', '2022-09-15 10:03:58', '2022-09-15 10:03:58'),
(10, NULL, NULL, '1663585726_gallerie3.jpeg', '2022-09-15 10:04:32', '2022-09-19 10:08:46'),
(11, NULL, NULL, '1663239884_img-13.png', '2022-09-15 10:04:44', '2022-09-15 10:04:44'),
(12, NULL, NULL, '1663585873_gallerie4.jpeg', '2022-09-19 10:11:13', '2022-09-19 10:11:13'),
(13, NULL, NULL, '1663586008_gallerie5.jpeg', '2022-09-19 10:13:28', '2022-09-19 10:13:28'),
(14, NULL, NULL, '1663586051_gallerie6.jpeg', '2022-09-19 10:14:11', '2022-09-19 10:14:11'),
(15, NULL, NULL, '1663586124_gellerie7.jpeg', '2022-09-19 10:15:24', '2022-09-19 10:15:24');

-- --------------------------------------------------------

--
-- Table structure for table `histoires`
--

CREATE TABLE `histoires` (
  `id` int(10) UNSIGNED NOT NULL,
  `titre` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titre_en` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `libelle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `libelle_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `histoires`
--

INSERT INTO `histoires` (`id`, `titre`, `titre_en`, `libelle`, `libelle_en`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Historique', 'Historic', '<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Le processus d&rsquo;exp&eacute;rimentation et mise en service du </span></span></span></span><span style=\"color:#e67e22\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><u>CBR-PLUS/CON-AID</u></strong></span></span></span></span><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"> est lanc&eacute; AU <strong>CAMEROUN</strong> en &nbsp;1996. faisant face au mauvais &eacute;tat de route , l&rsquo;insuffisance des tron&ccedil;ons existants devant desservir les bassins de production et surtout le d&eacute;ficit financier, les pays du sud sont d&eacute;termin&eacute;s &agrave; trouver les pistes de partage rassurantes et &agrave; moindre cout, devant challenger le bitumage classique pour rester dans leur logique de l&rsquo;&eacute;mergence</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Les appels &agrave; projet pour identification des produits innovants sont dont &agrave; l&rsquo;ordre du jour.<strong> TRADE AND INVESTMENT PROMOTION </strong>peut donc mat&eacute;rialiser son ambition id&eacute;ale de contribuer &agrave; la stabilit&eacute; socio-&eacute;conomique des pays en d&eacute;veloppement. Un c&oelig;ur d&eacute;j&agrave; bris&eacute; &agrave; moiti&eacute; par la crise &eacute;conomique&nbsp; des ann&eacute;es quatre vingt.la jeune entreprise met en jeu son volumineux tissu de partenariat &agrave; la rel&egrave;ve du d&eacute;fi de l&rsquo;innovation.</span></span></span></span></p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Au cours des&nbsp; quatorze ann&eacute;es qui pr&eacute;c&egrave;dent la validation finale du <strong>CBR PLUS CON-AID </strong>en 2013 par le premier minist&egrave;re du Cameroun&nbsp;(poumon g&eacute;ostrat&eacute;gique le l&rsquo;Afrique centrale), l&rsquo;entreprise <strong>TRADE AND INVESTMENT PROMOTION </strong>est soumise &agrave; la lourde misions de tester<strong>,</strong> et d&eacute;montrer l&rsquo;efficacit&eacute; du <strong>CBR PLUS CON-AID </strong>sous le control des structures comp&eacute;tentes commises &agrave; la charge telles que <strong>&nbsp;LE LABOGENIE LE MINTP, le&nbsp;Minmap avec la collaboration du premier minist&egrave;re</strong></span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Cette phase d&rsquo;exp&eacute;rimentation aussi forte de sa dur&eacute;e est sanctionn&eacute;e par quatre &nbsp;essaies&nbsp;:</span></span></span></span></p>\r\n\r\n<ol>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Le tout premier du <strong><u>03au 05 avril 1996</u></strong> sur le tron&ccedil;on <strong>Ayos Bonis r&eacute;gion du sud Cameroun</strong></span></span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Le deuxi&egrave;me du <strong><u>22 f&eacute;vrier au 03 mars 2006</u></strong> sur le tron&ccedil;on de la route en terre <strong>KUMBA - Moundemba</strong> r&eacute;gion du sud-ouest</span></span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Le troisi&egrave;me en <strong><u>2010&nbsp;cet essai est fait le 17 D&eacute;cembre</u></strong> sur le tron&ccedil;on <strong>KOMBONE MISSION-EKWE </strong>r&eacute;gion du sud- ouest</span></span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Le quatri&egrave;me et le tout dernier en <strong>2011 </strong>sur le m&ecirc;me tron&ccedil;on <strong>KOMBONE MISSION-EKWE </strong>r&eacute;gion du sud-ouest.</span></span></span></span></li>\r\n</ol>', '<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">The process of experimentation and the commissioning of the </span></span></span><ins><span style=\"color:#e67e22\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong>CBR-PLUS/CON-AID</strong></span></span></span></ins><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"> is launched in Cameroon since 1996. Following the poor condition of roads, lack of road sections plan to cover production basin and mainly financial deficit, countries of the South are determined to find safe options at&nbsp; a lower cost to challenge the classic pavement in order to remain in their logic of emergence.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Calls for proposals to identify innovative products are on the agenda. This is the occasion for&nbsp; <strong><span style=\"font-family:&quot;Times New Roman&quot;,serif\">TRADE AND INVESTMENT PROMOTION </span></strong><span style=\"font-family:&quot;Times New Roman&quot;,serif\">to achieve<strong>&nbsp; </strong>its ambition that is to contribute in&nbsp; the socio-economic stability of&nbsp; developing countries. With a heart already broken by the economic crisis of the 80s, the young company provides &nbsp;its wide partnership to meet the challenge of innovation</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">During fourteen years before the final adoption&nbsp; of CBR PLUS/CON-AID in 2013 by the Prime Minister of Cameroon ( geostrategic lungs in Central Africa),<strong> the company TRADE AND INVESTMENT PROMOTION </strong>is subject to tough task &nbsp;to test and demonstrate the effectiveness of the CBR-PLUS/CON-AID under the supervision of appropriate structures such as <strong>LE LABOGENIE LE MINTP, le&nbsp;MINMAP </strong>with the collaboration of the Prime Minister.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">This experimental phase is finalized by 4 trials&nbsp;:</span></span></span></span></p>\r\n\r\n<ol>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">The first, from <strong><u>03 to 05 April 1996 </u>on the AYOS-BONIS section, South Region of Cameroon</strong></span></span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">The second, from <strong><u>22 February to 03 Mach 2006</u></strong>, on the&nbsp; earth road section <strong>KUMBA &ndash; MUDEMBA, South West Region</strong></span></span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">The third&nbsp; in <strong>2010 . This trial is done on December 17</strong> on the&nbsp; </span><strong><span style=\"font-family:&quot;Times New Roman&quot;,serif\">KOMBONE MISSION-EKWE section, </span></strong><span style=\"font-family:&quot;Times New Roman&quot;,serif\">South West </span><strong><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Region </span></strong></span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">A fourth test was carried out in the <strong>South-West on the KOMBONE MISSION-EKWE section, 24 km long.</strong></span></span></span></span></li>\r\n</ol>', '1663240547_gallerie3.jpg', '2022-09-12 10:25:58', '2022-09-15 10:15:47');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_04_14_134433_create_admins_table', 1),
(6, '2022_05_23_143936_create_abouts_table', 1),
(7, '2022_07_06_140940_create_news_table', 1),
(8, '2022_07_29_120943_create_faqs_table', 1),
(9, '2022_07_29_134730_create_partenaires_table', 1),
(10, '2022_08_30_111022_create_sliders_table', 1),
(11, '2022_09_06_133319_create_mot_directeurs_table', 2),
(12, '2022_09_12_103335_create_histoires_table', 3),
(13, '2022_09_12_143340_create_strategies_table', 4),
(14, '2022_09_12_171011_create_activites_table', 5),
(15, '2022_09_13_091058_create_references_table', 6),
(16, '2022_09_13_103912_create_documentations_table', 7),
(17, '2022_09_13_142846_create_projets_table', 8),
(18, '2022_09_15_100815_create_galleries_table', 9),
(19, '2022_09_29_093749_create_visions_table', 10),
(20, '2022_09_29_094154_create_valeurs_table', 10),
(21, '2022_10_04_083359_create_contenus_table', 11),
(22, '2022_10_04_094625_create_recompenses_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `mot_directeurs`
--

CREATE TABLE `mot_directeurs` (
  `id` int(10) UNSIGNED NOT NULL,
  `titre` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titre_en` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mot_directeurs`
--

INSERT INTO `mot_directeurs` (`id`, `titre`, `titre_en`, `short`, `short_en`, `description`, `description_en`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Mot du directeur', 'A word from the director', 'Trade & Investment Promotion est le représentant exclusif de la société sud-africaine CBR-PLUS TECHNOLOGIES INTER AGENT pour le Cameroun et la zone CEMAC, et une partie de la zone CEDEAO (Côte d\'Ivoire, Togo, Bénin et Guinée Conakry).', 'Trade & Investment Promotion is the exclusive representative of the South African CBR-PLUS TECHNOLOGIES INTER AGENT for Cameroon and the CEMAC zone, and part of the ECOWAS zone (Côte d\'Ivoire, Togo, Benin and Guinée Conakry).', '<p style=\"text-align:justify\"><img alt=\"\" src=\"http://localhost:8000/storage/imgs/1662485471_directors.jpeg\" style=\"float:left; height:337px; margin-right:10px; width:600px\" /><span style=\"color:#000000\"><strong><span style=\"font-size:18px\">Bonjour M. SAIDOU Pouvez-vous pr&eacute;senter votre soci&eacute;t&eacute; Trade &amp; Investment Promotion ?</span></strong></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Trade &amp; Investment Promotion est le repr&eacute;sentant&nbsp; exclusif de la soci&eacute;t&eacute;&nbsp; &nbsp; sud-africaine CBR-PLUS&nbsp; &nbsp; TECHNOLOGIES INTER AGENT pour le&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Cameroun et la zone CEMAC, et une partie de la zone CEDEAO (C&ocirc;te&nbsp; &nbsp; d&#39;Ivoire, Togo, B&eacute;nin et&nbsp; Guin&eacute;e Conakry)</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Promotion du commerce et de l&#39;investissement est&nbsp; &eacute;galement le&nbsp;Promotion du commerce et de&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; l&#39;investissement est &eacute;galement le repr&eacute;sentant de la firme am&eacute;ricaine mandat&eacute;e Delphos International bas&eacute; &agrave; Washington. Dans le cadre de la mise en &oelig;uvre de l&#39;&eacute;tude de faisabilit&eacute; du projet de construction du barrage du barrage hydro&eacute;lectrique de Bini-a-Warrak, dans l&#39;Adamaoua d&#39;Adamaoua et de la centrale &agrave; gaz de Limbe, la Promotion du Commerce et de l&#39;Investissement Promotion du Commerce et des Investissements a agi en tant que de liaison. A ce titre, SAIDOU TOUROUA a particip&eacute; &agrave; toutes les r&eacute;unions organis&eacute;es par le Minist&egrave;re de l&#39;Energie de l&#39;Energie et de l&#39;Eau dans le cadre de ces deux projets. ces deux projets. Notre slogan : <strong>LA ROUTE CR&Eacute;E LA PROSP&Eacute;RIT&Eacute;.</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><strong>Vous repr&eacute;sentez le stabilisateur CON-AID/CBR- PLUS en CAMEROUN et S-R. De quoi s&#39;agit-il exactement ? Pouvez-vous nous pr&eacute;senter le produit ?</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">CON-AID/CBR-PLUS est un produit pour le traitement des sols argileux, les rendant stables et r&eacute;sistants dans des conditions climatiques humides en transformant les caract&eacute;ristiques normalement hydrophiles (affinit&eacute; avec l&#39;eau) des mat&eacute;riaux argileux en les rendant hydrophobes (r&eacute;sistants &agrave; l&#39;eau). La capacit&eacute; de roulage est consid&eacute;rablement augment&eacute;e et la poussi&egrave;re est r&eacute;duite. Le stabilisateur de sol liquide CON-AID/CBR-PLUS est utilis&eacute; depuis 1980 dans 63 pays (Afrique, Extr&ecirc;me-Orient, Am&eacute;rique du Nord et du Sud). Sa r&eacute;putation ne cesse de cro&icirc;tre compte tenu de sa qualit&eacute; &eacute;prouv&eacute;e depuis de nombreuses ann&eacute;es et des &eacute;conomies de co&ucirc;ts d&#39;entretien g&eacute;n&eacute;r&eacute;es.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Dans le cas du Cameroun, les premiers essais ont commenc&eacute; en 1996 avec la pr&eacute;cieuse collaboration de LABOGENIE, MINTP et sur les tron&ccedil;ons suivants :</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">1996 : AYOS-BONIS, long de 1 km ; 2006 : Entre KUMBA MUDEMBA, long de 3km. Entre 2008 et 2009, un essai grandeur nature a eu lieu dans la R&eacute;gion Sud sur le tron&ccedil;on LOLODORF- MEKALAT- ASSOK, sur 26 km. Un quatri&egrave;me essai a &eacute;t&eacute; r&eacute;alis&eacute; dans le sud-ouest sur le tron&ccedil;on KOMBONE MISSION-EKWE, long de 24 km.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Apr&egrave;s ces multiples essais sur une p&eacute;riode totale de 14 ans, le CON- AID/CBR-PLUS a &eacute;t&eacute; approuv&eacute; par le MINTP en 2014 et prescrit &agrave; tous les chefs de projet par le MINTP et valid&eacute; par le CONAROUTE (CONSEIL ROUTIER).</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Afin de rendre op&eacute;rationnelle la nouvelle strat&eacute;gie d&#39;entretien de nos routes et de les rendre praticables en toutes saisons, le Premier Ministre, Chef du Gouvernement, a sign&eacute; le d&eacute;cret n&deg; 2016/0848/PM du 20 avril 2016, Conditions d&#39;utilisation des produits innovants dans l&#39;entretien routier et l&#39;arr&ecirc;t&eacute; n&deg; 042/PM du 19 avril 2016 portant mise en &oelig;uvre du dossier type d&#39;appel d&#39;offres pour l&#39;attribution des march&eacute;s d&#39;entretien ou de R&eacute;habilitation des routes par les produits innovants.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><strong><span style=\"font-size:18px\">En quoi est-il diff&eacute;rent des autres stabilisateurs routiers utilis&eacute;s au Cameroun ?</span></strong></span></p>\r\n\r\n<ol>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Augmente la portance et la performance des mat&eacute;riaux in-situ (augmentation du CBR &agrave; plus de 600% sur une p&eacute;riode d&#39;environ 9 mois) ;</span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">&nbsp;Longue dur&eacute;e de stabilisation des mat&eacute;riaux in-situ avec ou sans ;</span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">&nbsp;R&eacute;duction des co&ucirc;ts d&#39;entretien de l&#39;ordre de 40%.</span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">&nbsp;Circulation en toutes saisons ;</span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">&nbsp;R&eacute;duction de la poussi&egrave;re en saison s&egrave;che et absence de boue en saison des pluies ;</span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">&nbsp;Applicable aux travaux &agrave; forte intensit&eacute; de main d&#39;&oelig;uvre (HIMO), convient &agrave; la construction de couches de fondations et de plateformes (aires de stationnement, piste d&#39;atterrissage, etc.) et de routes et chemins ruraux et au contr&ocirc;le de la poussi&egrave;re.</span></span></li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><strong>Dans le dernier num&eacute;ro de la Pause Caf&eacute;, nous avons appr&eacute;ci&eacute; le travail effectu&eacute; par vos &eacute;quipes dans les villes de YAGOUA, YOKADOUMA, MOKOLO, TCHOL&Eacute;RE, BATOURI EKONDO- TITI, et MANDJOU et beaucoup d&#39;autres dans les r&eacute;gions du Sud du pays. Quels r&eacute;sultats obtenez-vous quelques mois apr&egrave;s votre visite dans ces villes ?</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Le r&eacute;sultat est obtenu par une &eacute;quipe conjointe compos&eacute;e de LABOGENIE, d&#39;une mission de contr&ocirc;le, du MINHDU et du MINTP. La route est praticable en cette saison des pluies, et le taux de CBR est en forte augmentation. La r&eacute;action des populations est tr&egrave;s positive.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><strong>Votre produit, le stabilisateur CBR- PLUS est valid&eacute; par le Conseil des Routes (CONAROUTE) et approuv&eacute; par le Minist&egrave;re des Travaux Publics. Quels sont vos projets pour l&#39;avenir ?</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Notre plan de d&eacute;veloppement pr&eacute;voit de :</span></span></p>\r\n\r\n<ol>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">&nbsp;Contribuer &agrave; la cr&eacute;ation d&#39;emplois pour les jeunes en les formant &agrave; la construction de routes municipales, de routes rurales par l&#39;approche &agrave; haute intensit&eacute; de main d&#39;&oelig;uvre (HIMO) ;</span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Finaliser le transfert de technologie par l&#39;implantation au Cameroun d&#39;une usine de production de stabilisants CON-AID/CBR- PLUS.</span></span></li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '<p style=\"text-align:justify\"><img alt=\"\" src=\"http://localhost:8000/storage/imgs/1662485471_directors.jpeg\" style=\"float:left; height:358px; margin-right:10px; width:600px\" /><span style=\"color:#000000\"><strong><span style=\"font-size:18px\">Hello Mr. SAIDOU Could you introduce your company Trade &amp; Investment Promotion ?</span></strong></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Trade &amp; Investment Promotion is the exclusive representative of the South African CBR-PLUS TECHNOLOGIES INTER AGENT for Cameroon and the CEMAC zone, and part of the ECOWAS zone (C&ocirc;te d&#39;Ivoire, Togo, Benin and Guin&eacute;e Conakry).</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Trade and Investment Promotion is also the representative of the American mandated firm Delphos International based in Washington. Within the framework of the implementation of the feasability studiy of the construction project of the Bini-a-Warrak, hydroelectricity Dam in Adamaoua REGION and the gas power plant in Limbe, Trade and Investment Promotion was acting as the Liaison officer. As such, SAIDOU TOUROUA took part at all the meetings organised by the Ministry of Enegy and Water as far as these two projects are concerned.&nbsp;Our slogan :<strong> ROAD CREATES PROSPERITY.</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><strong><span style=\"font-size:18px\">You represent the CON-AID/CBR- PLUS Stabilizer in CAMEROON and S-R. What is it exactly ? Can you introduce us to the product ?</span></strong></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">CON-AID/CBR-PLUS is a product for treating clay soils, making themstable and resistant under wet climatic conditions by transforming the normally hydrophilic characteristics (water affinity) of the clay materials by making them hydrophobic (water resistant). Rolling capacity is considerably increased and dust isreduced. CON-AID/CBR-PLUS liquid soil stabilizer has been used since 1980 in 63 countries (Africa, Far East, North and South America). Its reputation grows more and more given its proven quality for many years and the savings in maintenance costs generated.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">In the case of Cameroon, the first trials began in 1996 with the valuable collaboration of LABOGENIE, MINTP and on the following sections : </span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">1996 : AYOS-BONIS, 1 km long ; 2006 : Between KUMBA MUDEMBA, 3km long. Between 2008 and 2009, a full-scale trial took place in the South Region on the LOLODORF- MEKALAT- ASSOK section, along 26 km. A fourth test was carried out in the south- west on the KOMBONE MISSION-EKWE section, 24 km long.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">After these multiple trials over a total period of 14 years, the CON- AID/CBR-PLUS was approved by the MINTP in 2014 and prescribed to all Project Managers by the MINTP and validated by the CONAROUTE (ROAD COUNCIL). </span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">In order to make operational the new strategy of maintaining our roads and make them practicable in all seasons, the Prime Minister, Head of Government, signed Decree No. 2016/0848/PM of 20 April 2016, Conditions for the use of innovative products in road maintenance and&nbsp;Order N&deg; 042/PM of 19 April 2016 implementing the standard tender dossier for the award of the maintenance contracts or Rehabilitation of roads using innovative products.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><strong>How is it different from other road stabilizers used in Cameroon ?</strong></span></span></p>\r\n\r\n<ol>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">&nbsp;Increases the lift and performance of in-situ materials (CBR increase to more than 600% on a period of about 9 months) ;</span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">&nbsp;Long duration of stabilization of materials in-situ with or without ; </span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">&nbsp;Maintenance cost savings around 40%. </span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">&nbsp;Circulation in all seasons ; </span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">&nbsp;Dust reduction in dry season and no mud in rainy season ; </span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">&nbsp;Applicable to labor intensive works (HIMO), suitable for the construction of layers of foundations and platforms (parking areas, airstrip, etc. and roads and rural roads and dust control.</span></span></li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><strong>In the last issue of the Coffee Break, we appreciate the work your teams carried out in the cities of YAGOUA, YOKADOUMA, MOKOLO, TCHOL&Eacute;RE, BATOURI EKONDO- TITI, and MANDJOU and many in the Southern parts of the country. What results do you get a few months after your visit to these cities ?</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">The result is obtained by a joint team composed of LABOGENIE, a control mission, MINHDU and the MINTP. The road is practicable in this raining season,&nbsp;and the rate of CBR is strongly increasing. The reaction of the populations is very positive.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><strong>Your product, the stabilizer CBR- PLUS is validated by the ROAD COUNCIL (CONAROUTE) and approved by the Ministry of Public Works. What are your plans for the future ?</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Our development plan includes : </span></span></p>\r\n\r\n<ol>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">&nbsp;Contribute to the creation of jobs for young people by training them in the construction of municipal roads, rural roads by the labor intensive approach (HIMO) ;</span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\">To finalise the technology transfer through the establishment in Cameroon of a CON-AID/CBR- PLUS stabilizer production plant.</span></span></li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>', '1662485663_directors.jpeg', '2022-09-06 15:32:12', '2022-09-06 16:34:23');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `libelle` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_en` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auteur` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dates` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `libelle`, `libelle_en`, `short`, `short_en`, `description`, `description_en`, `image`, `auteur`, `dates`, `created_at`, `updated_at`) VALUES
(1, 'Bitumage en bicouche  par la société entrabat à l\'extrême nord Cameroun (chantier en cours)', 'Bouble-layer asphalting by entrabat in the far north of Cameroon (work in progress)', 'Le bitumage de la chaussée s\'est déroulé de la manière suivante', 'The asphalting of the roadway was carried out in the following manner', '<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"color:#000000\">Le bitumage de la chauss&eacute;e s&#39;est d&eacute;roul&eacute; de la mani&egrave;re suivante:<br />\r\n1- D&#39;abord un reprofilage lourd au produit stabilisant Con-Aid/CBR Pus<br />\r\n2-Ensuite on proc&egrave;de &agrave; un enduit superficiel bicouche dont la 1&egrave;re couche est compos&eacute;e de granulats 10/14 et la 2ieme de granulats 6/10.*</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"color:#000000\">Route Stabilis&eacute; au Con aid Cbr plus et Entraine d &ecirc;tre Scell&eacute; a l Enduit superficiel<br />\r\nSur une Lin&eacute;aire de 20 Km Entre Sotchai,-Touloum - Doukoula<br />\r\nRegion Extr&ecirc;me Nord.</span></span></p>', '<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"color:#000000\">The asphalting of the roadway was carried out in the following manner:<br />\r\n1- First a heavy reprofiling with the stabilizing product Con-Aid/CBR Pus<br />\r\n2-And then a two-layer surface dressing is carried out, the first layer of which is composed of 10/14 aggregate and the second of 6/10 aggregate.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"color:#000000\">Stabilized road with Cbr plus aid and trained to be sealed with surface dressing<br />\r\nOn a 20 km stretch between Sotchai, Touloum and Doukoula<br />\r\nFar North Region.</span></span></p>\r\n\r\n<p>&nbsp;</p>', '1663581417_blog-cover.jpeg', 'Trade', '2022-09-19', '2022-09-19 08:56:57', '2022-09-19 08:56:57');

-- --------------------------------------------------------

--
-- Table structure for table `partenaires`
--

CREATE TABLE `partenaires` (
  `id` int(10) UNSIGNED NOT NULL,
  `raison_sociale` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partenaires`
--

INSERT INTO `partenaires` (`id`, `raison_sociale`, `site`, `logo`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Le premier ministère', 'https://www.spm.gov.cm/site/', '1663230667_Coat_of_arms_of_Cameroon.svg.png', 'Public', '2022-09-15 07:31:08', '2022-09-15 07:31:08'),
(2, 'Ministère des marchés publics', 'https://minmap.cm/', '1663231506_logo_fr.png', 'Public', '2022-09-15 07:45:06', '2022-09-15 07:45:06'),
(3, 'Ministère des travaux publics', 'http://www.mintp.cm/', '1663231880_mintp.jpg', 'Public', '2022-09-15 07:51:20', '2022-09-15 07:51:20'),
(4, 'Laboratoire national de génie civil', 'https://labogenie.cm/', '1663232094_labogenie.jpg', 'Public', '2022-09-15 07:54:54', '2022-09-15 07:54:54'),
(5, 'AGENT CBR/ PLUS TECHNOLOGIE INTER', 'https://b2bhint.com/', '1663232609_b2b.png', 'Diaspora', '2022-09-15 08:03:29', '2022-09-15 08:03:29'),
(6, 'BUNS', 'https://societebuns.com/', '1663232804_buns-new-logo.png', 'Prive', '2022-09-15 08:06:44', '2022-09-15 08:06:44'),
(7, 'SUPER CONFORT', 'https://maligah.com/', '1663233163_logo-maligah.jpg', 'Prive', '2022-09-15 08:12:43', '2022-09-15 08:12:43');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projets`
--

CREATE TABLE `projets` (
  `id` int(10) UNSIGNED NOT NULL,
  `titre` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titre_en` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `libelle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `libelle_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projets`
--

INSERT INTO `projets` (`id`, `titre`, `titre_en`, `libelle`, `libelle_en`, `image`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, '1663585104_IMG_1600.jpg', '2022-09-13 13:45:59', '2022-09-19 09:58:24'),
(2, NULL, NULL, NULL, NULL, '1663255579_IMG_1598.jpg', '2022-09-13 13:47:12', '2022-09-15 14:26:19'),
(3, NULL, NULL, NULL, NULL, '1663255403_IMG_1607.jpg', '2022-09-13 13:50:29', '2022-09-15 14:23:23'),
(4, NULL, NULL, NULL, NULL, '1663255347_IMG_1601.jpg', '2022-09-13 13:59:06', '2022-09-15 14:22:27');

-- --------------------------------------------------------

--
-- Table structure for table `recompenses`
--

CREATE TABLE `recompenses` (
  `id` int(10) UNSIGNED NOT NULL,
  `titre` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titre_en` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recompenses`
--

INSERT INTO `recompenses` (`id`, `titre`, `titre_en`, `image`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, '1664878067_recompense1.jpeg', '2022-10-04 09:07:47', '2022-10-04 09:07:47'),
(2, NULL, NULL, '1664878079_recompense2.jpeg', '2022-10-04 09:07:59', '2022-10-04 09:07:59'),
(3, NULL, NULL, '1664878087_recompense3.jpeg', '2022-10-04 09:08:07', '2022-10-04 09:08:07'),
(4, NULL, NULL, '1664878094_recompense4.jpeg', '2022-10-04 09:08:14', '2022-10-04 09:08:14'),
(5, NULL, NULL, '1664878104_recompense5.jpeg', '2022-10-04 09:08:24', '2022-10-04 09:08:24'),
(6, NULL, NULL, '1664878111_recompense6.jpeg', '2022-10-04 09:08:31', '2022-10-04 09:08:31');

-- --------------------------------------------------------

--
-- Table structure for table `references`
--

CREATE TABLE `references` (
  `id` int(10) UNSIGNED NOT NULL,
  `titre` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titre_en` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `libelle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `libelle_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `references`
--

INSERT INTO `references` (`id`, `titre`, `titre_en`, `libelle`, `libelle_en`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Nos références', 'Our references', '<p style=\"margin-left:0px; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"color:#000000\"><span style=\"font-size:18px\">Le CBR PLUS CON-AID&nbsp; a fait l&rsquo;objet de mise en &oelig;uvre dans les chantiers ci-dessous</span></span> &nbsp;</span></span></strong></span></span></p>', '<p style=\"margin-left:0px; text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:14.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:18px\">The CBR PLUS CON-AID has been implemented in the following construction sites</span>&nbsp;</span></span></strong></span></span></span></p>', '1663062934_img-9.jpg', '2022-09-13 08:55:34', '2022-09-15 08:34:46'),
(2, 'Marché n°114/M/Mintp/cmpm-erprt2015', 'Marché n°114/M/Mintp/cmpm-erprt2015', '<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-family:&quot;Times New Roman&quot;,serif\">March&eacute; n&deg;114/M/Mintp/cmpm-erprt2015 apr&egrave;s autorisation de Gr&eacute; &agrave; Gr&eacute; n&deg; 06872/Minmap- Dg&nbsp;&nbsp;&nbsp; r&eacute;alis&eacute; par la St&eacute; SUPER-CONFOR </span></strong><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Le tron&ccedil;on<strong> KUMBA-MUDEMBA </strong>REGION DU SUD OUEST</span></span></span></span></p>', '<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-family:&quot;Times New Roman&quot;,serif\">March&eacute; n&deg;114/M/Mintp/cmpm-erprt2015 apr&egrave;s autorisation de Gr&eacute; &agrave; Gr&eacute; n&deg; 06872/Minmap- Dg&nbsp;&nbsp;&nbsp; r&eacute;alis&eacute; par la St&eacute; SUPER-CONFOR </span></strong><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Le tron&ccedil;on<strong> KUMBA-MUDEMBA </strong>REGION DU SUD OUEST</span></span></span></span></p>', NULL, '2022-09-13 08:59:41', '2022-09-13 08:59:41'),
(3, 'Marché MINTP 2015', 'Marché MINTP 2015', '<p style=\"text-align:justify\"><strong><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">March&eacute; MINTP 2015 travaux d&#39;entretien courant et p&eacute;riodique au stabilisant con-aid cbrplus de certaines sections de route dans la r&eacute;gion de l4est&nbsp; Yokadouma &ndash;Garigomba 82km</span></span></span></span></strong></p>', '<p><span style=\"color:#000000\"><span style=\"font-size:18px\"><strong>Contract MINTP 2015 works of routine and periodic maintenance with stabilizer con-aid cbrplus of some road sections in the region of l4est Yokadouma -Garigomba 82km</strong></span></span></p>', NULL, '2022-09-15 08:26:13', '2022-09-15 08:26:13'),
(4, 'Marché MINHDU 2016 VILLE DE Ngaoundéré', 'Marché MINHDU 2016 VILLE DE Ngaoundéré', '<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-family:&quot;Times New Roman&quot;,serif\">March&eacute; MINHDU 2016 VILLE DE Ngaound&eacute;r&eacute;&nbsp; .travaux d&rsquo;entretien au stabilisant CON-AID/CBRPLUS&nbsp;&nbsp; </span></strong></span></span></p>', '<p><span style=\"color:#000000\"><span style=\"font-size:18px\"><strong>Contract MINHDU 2016 CITY OF Ngaound&eacute;r&eacute; .maintenance work on stabilizer CON-AID/CBRPLUS</strong></span></span></p>', NULL, '2022-09-15 08:28:49', '2022-09-15 08:28:49'),
(5, '2017 marché Bagang-nzindong Messang 16 km', '2017 marché Bagang-nzindong Messang 16 km', '<p><span style=\"color:#000000\"><span style=\"font-size:18px\"><strong>2017 march&eacute; Bagang-nzindong Messang 16 km</strong></span></span></p>', '<p><span style=\"color:#000000\"><span style=\"font-size:18px\"><strong>2017 march&eacute; Bagang-nzindong Messang 16 km</strong></span></span></p>', NULL, '2022-09-15 08:30:34', '2022-09-15 08:30:34'),
(6, 'Exécution des travaux d’entretien périodique au produit     stabilisant CON-AID/CBR-PLUS test', 'Carrying out periodic maintenance work with the stabilizer CON-AID/CBR-PLUS test', '<p><span style=\"color:#000000\"><span style=\"font-size:18px\"><strong><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Ex&eacute;cution des travaux d&rsquo;entretien p&eacute;riodique au produit &nbsp;&nbsp;&nbsp;&nbsp;stabilisant CON-AID/CBR-PLUS du march&eacute; N&deg;203/M/MINTP/CMPM-TI/2018 situ&eacute; &agrave; SAOTCHAI-DOUKOULA r&eacute;gion de l&rsquo;extr&ecirc;me nord test</span></strong></span></span></p>', '<p><span style=\"color:#000000\"><span style=\"font-size:18px\"><strong>Execution of periodic maintenance works with the stabilizing product CON-AID/CBR-PLUS of the contract N&deg;203/M/MINTP/CMPM-TI/2018 located at SAOTCHAI-DOUKOULA extreme north region test</strong></span></span></p>', NULL, '2022-09-15 08:32:45', '2023-10-29 08:29:52');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `titre` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titre_en` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paragraphe` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paragraphe_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lien1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lien2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `titre`, `titre_en`, `paragraphe`, `paragraphe_en`, `lien1`, `lien2`, `video`, `image`, `created_at`, `updated_at`) VALUES
(1, 'TRADE AND INVESTMENT PROMOTION innove en zone CEMAC!', 'TRADE AND INVESTMENT PROMOTION innovates in the CEMAC zone!', 'Votre formule de stabilisation la plus simplifiée et la mieux adaptée.', 'Your most simplified and best suited stabilization formula.', '/about-us', '/contact', NULL, '1662393925_photo_trade.jpg', '2022-09-05 15:05:26', '2022-09-19 14:18:40');

-- --------------------------------------------------------

--
-- Table structure for table `strategies`
--

CREATE TABLE `strategies` (
  `id` int(10) UNSIGNED NOT NULL,
  `titre` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titre_en` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `libelle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `libelle_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `strategies`
--

INSERT INTO `strategies` (`id`, `titre`, `titre_en`, `libelle`, `libelle_en`, `image`, `created_at`, `updated_at`) VALUES
(1, 'STRATEGIE', 'STRATEGY', '<p style=\"margin-left:0px; text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Notre strat&eacute;gie repose essentiellement sur l&rsquo;approche collaboration en trois dimensions. Parmi les trois maillons qui d&eacute;terminent jusqu&rsquo;ici la politique d&rsquo;op&eacute;rationnalisation de <strong>TRADE AND INVESTMENT PROMOTION</strong>, le plus perceptible est l&rsquo;&eacute;tat. Conscients que tout projet de soci&eacute;t&eacute; ou de d&eacute;veloppement passe forc&eacute;ment par l&rsquo;engagement de l&rsquo;&eacute;tat, les promoteurs de ce stabilisant de renomm&eacute; international ont accord&eacute; une large priorit&eacute; au secteur publique. Bien que le <strong>CBR PLUS CON-AID</strong> ait fait ses preuves depuis <strong>1978</strong> dans soixante-trois pays d&rsquo;Afrique, d&rsquo;extr&ecirc;me orient et d&rsquo;Am&eacute;rique, <strong>TRADE AND INVESTMENT PROMOTION </strong>jette son d&eacute;volu sur les institutions r&eacute;galiens de l&rsquo;&eacute;tat camerounais(<strong>LE LABOGENIE&nbsp;,</strong> <strong>Mintp, le Minmap et le premier minist&egrave;re) </strong>&nbsp;,chemin long et &acirc;pre mais certainement le vrais devant mener au bout de son ambition&nbsp;: &nbsp;la r&eacute;gularisation d&eacute;finitive de son produit en terre camerounaise par&nbsp;:</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:48px; text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">- le d&eacute;cret <strong>N&deg; 2016/0848/PM du 20/04/2016 </strong>fixant les conditions les conditions d&rsquo;utilisations des produits innovants dans l&rsquo;entretien des routes </span></span></span></span></p>\r\n\r\n<p style=\"margin-left:48px; text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">- l&rsquo;arr&ecirc;t&eacute; <strong>N&deg;042/PM du 19avril 2016 </strong>mettant en vigueur les dossiers type d&rsquo;appel d&rsquo;offre sp&eacute;cialis&eacute; pour la passation des march&eacute;s des travaux d&rsquo;entretien.</span></span></span></span></p>', '<p style=\"margin-left:0px; text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Our strategy is essentially based on the collaboration approach divided in three steps. Among them, the most apparent is the State. Aware that all society or development project automatically results from the State&rsquo;s commitment, the stabilizer&rsquo;s promoters of international renowned have given priorty to public sector. Although the <strong>CBR-PLUS/CON-AID </strong>has proved its worth since<strong> </strong>1978<strong> </strong>in<strong> </strong>63 African, Far East and American countries,<strong> TRADE AND INVESTMENT PROMOTION </strong>has chosen<strong> &nbsp;</strong>Cameroonian State institutions (<strong>LE LABOGENIE&nbsp;,</strong> <strong>MINTP, le MINMAP et The Prime Ministry). </strong>The road was long and difficult but certainly the right leading to fulfill its aspirations&nbsp;:&nbsp; the final regularisation of its product in Cameroon by&nbsp;:</span></span></span></span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">The Decree <strong>N&deg; 2016/0848/PM du 20/04/2016 </strong>&nbsp;establishing the terms of&nbsp; conditions of use of innovative products in road maintenance.</span></span></span></span></li>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">The Decree <strong>N&deg;042/PM du 19avril 2016 </strong>implementing the Standard Bidding Documents specialised in procurement of road maintenance works.</span></span></span></span></li>\r\n</ul>', '1663239983_gallerie4.jpg', '2022-09-12 15:30:22', '2022-09-15 10:11:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `typeCompte_id` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `valeurs`
--

CREATE TABLE `valeurs` (
  `id` int(10) UNSIGNED NOT NULL,
  `titre` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titre_en` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `libelle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `libelle_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `visions`
--

CREATE TABLE `visions` (
  `id` int(10) UNSIGNED NOT NULL,
  `titre` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titre_en` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `libelle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `libelle_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activites`
--
ALTER TABLE `activites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `contenus`
--
ALTER TABLE `contenus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documentations`
--
ALTER TABLE `documentations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `histoires`
--
ALTER TABLE `histoires`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mot_directeurs`
--
ALTER TABLE `mot_directeurs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partenaires`
--
ALTER TABLE `partenaires`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projets`
--
ALTER TABLE `projets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recompenses`
--
ALTER TABLE `recompenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `references`
--
ALTER TABLE `references`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `strategies`
--
ALTER TABLE `strategies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- Indexes for table `valeurs`
--
ALTER TABLE `valeurs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visions`
--
ALTER TABLE `visions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `activites`
--
ALTER TABLE `activites`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contenus`
--
ALTER TABLE `contenus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `documentations`
--
ALTER TABLE `documentations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `histoires`
--
ALTER TABLE `histoires`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `mot_directeurs`
--
ALTER TABLE `mot_directeurs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `partenaires`
--
ALTER TABLE `partenaires`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projets`
--
ALTER TABLE `projets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `recompenses`
--
ALTER TABLE `recompenses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `references`
--
ALTER TABLE `references`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `strategies`
--
ALTER TABLE `strategies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `valeurs`
--
ALTER TABLE `valeurs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visions`
--
ALTER TABLE `visions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
