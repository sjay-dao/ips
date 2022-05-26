-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2022 at 04:42 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ip system`
--

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
-- Table structure for table `ips`
--

CREATE TABLE `ips` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_id` tinyint(4) NOT NULL DEFAULT 0,
  `doc_code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'none',
  `name` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'none',
  `date_filed` date NOT NULL DEFAULT current_timestamp(),
  `reg_no` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'none',
  `author_r_inventor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'none',
  `status` varchar(355) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'none',
  `date_approved` date DEFAULT NULL,
  `project_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'none',
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'none',
  `project_cost` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'none',
  `funding_source` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'none',
  `income_gross` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'none',
  `praise_award` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'none',
  `nast_award` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'none'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ips`
--

INSERT INTO `ips` (`id`, `type_id`, `doc_code`, `name`, `date_filed`, `reg_no`, `author_r_inventor`, `status`, `date_approved`, `project_title`, `duration`, `project_cost`, `funding_source`, `income_gross`, `praise_award`, `nast_award`) VALUES
(1, 1, 'FNRI-IPD-PT-000001', 'Improved Brown Rice (Patent)', '2012-12-19', '1-2012-000394', 'Rosemarie G. Garcia\nDahlia A. Diaz\nAlex M. Palomo\nRazoland B. Navarro\nMary Rose Ladia', 'Granted', '2016-06-06', 'Optimization studies for the improvement of shelf life of brown rice', 'none', '2347158.00', 'PCIEERD-DOST GIA', 'Php 80,000.00 (Licensing Fees Generated)', 'none', 'none'),
(2, 3, 'FNRI-IPD-TM-000040', 'DOST One-Stop-Shop (OSS) Logo', '2020-02-13', '4-2020-002311', 'Milflor S. Gonzales, Ph.D.; Dexter Y. De Leon; Erika Nina C. Bacolod', 'Approved&', '2020-12-14', 'Upgrading of Library Collection and Computerization', 'none', '300000.00', 'GF', 'N/A', 'none', 'none'),
(3, 2, 'FNRI-IPD-UM-000015', 'Process for the Preparation of Extruded Ready-to-Fry Frozen Sweet Potato Fries', '2016-10-16', '2-2015-000605', 'Wenefrida N. Lainez; Maribeth C. Bautista; Mario C. Cabagbag; Hannah C. Edangan; Milfred Paca-anas\nDionisio Mariano Jr.; Jonahver O. Tarlit;    Alfee B. Capule', 'Granted&Certificate of correction sealed 2017-Feb-14', '2016-04-25', 'Development of a Technology for an Extruded Ready-to-Fry Sweet Potato Fries', '2013-01-01&2014-06-03&', '100000', 'GF', 'N/A', 'not yet', '2017'),
(4, 3, 'FNRI-IPD-TM-000006', 'First 1000 days-Heart Symbol and Growth Chart', '2014-03-10', '4/2014/00002945', 'Marie T. Bugas; Julieta Dorado', 'Approved&', '2014-07-10', 'Lost', '2014-01-01&2014-12-31&Test', '4800000', 'PCIEERD-DOST GIA', 'N/A', 'not yet', 'not yet'),
(25, 3, 'FNRI-IPD-TM-000036', 'Proficiency Testing Logo', '2017-08-07', '04-2017-00012565', 'DOST-FNRI submitted by Ms. Jessel May D. Casuga', 'Approved&', '2018-03-15', 'Improvement/Updating of E-Access Portal for the FNRI Existing Reference Materials and Proficiency Testing Schemes (Continuing)', '2018-01-01&2018-12-31&', '100000.00', 'GF', 'N/A', '2018', 'not yet'),
(26, 2, 'pending', 'Process of Preparing Natural Yellow Food Colorant Extract from Squash (Cucurbita maxima)', '2021-02-17', '2-2021-050139', 'Trinidad II T. Arcangel; Charlie E. Adona; Roxan Marie J. Francisco; Vannizsa C. Ibanez; Stanly Adams C. Jocson; Maricar D. Albao; Rolando L. Ponte; Joyce R. Tobias', 'Granted&published', '2021-03-05', 'Extraction, Characterization and Application of Natural Colorants in Nutritional Food Products', '2017-03-15&2019-12-31&', '13360911', 'GF', 'N/A', '2021', '2021'),
(27, 2, 'pending', 'Fortified Protein Food Bar', '2022-02-12', '2-2021-050139', 'Marcela C. Saises; Abbie L. Padrones; Theresa Krista B. Jolejole; Aiza B. Umali; John Lester G. Ramirez; Remina S. Sabado; Junimer B. Lala', 'Pending&', '0001-01-01', 'Technology Generation for the Production of the Fortified Food Products for Women of Reproductive Age, Pregnant and Lactating Women (GINA)', '2021-01-01&2021-12-31&', '7500000', 'GF', 'N/A', 'not yet', 'not yet'),
(28, 4, 'FNRI-IPD-CR-000001', 'Nutritional Guidelines for Filipinos (NGF) Jingle Entitled: Wastong Nutrisyon', '2010-11-25', 'P 2010-755', 'Food and Nutrition Research Institute', 'Approved&', '2010-12-09', 'Multimedia Promotions for Food and Nutrition Advocacy', '2010-01-01&2010-12-31&', '350000', 'GF', 'N/A', 'not yet', 'not yet'),
(29, 4, 'FNRI-IPD-CR-000002', 'FNRI Kusina Video', '2011-05-20', 'L 2011-66', 'Food and Nutrition Research Institute', 'Approved&', '2011-05-30', 'Nutrition School on Camera', '2011-01-01&2011-12-31&', '50000', 'DOST-GIA', 'N/A', 'not yet', 'not yet'),
(30, 4, 'FNRI-IPD-CR-000003', 'Nutrition is Kool Video (With 13 Episodes)', '2011-05-20', 'L 2011-67', 'Food and Nutrition Research Institute', 'Approved&', '2011-05-30', 'Nutrition School on Camera', '2011-01-01&2011-12-31&', '100000', 'DOST-GIA', 'N/A', 'not yet', 'not yet'),
(31, 4, 'FNRI-IPD-CR-000004', 'R & D Video', '2011-05-20', 'L 2011-68', 'Food and Nutrition Research Institute', 'Approved&', '2011-05-30', 'Nutrition School on Camera', '2011-01-01&2011-12-31&', '50000', 'DOST-GIA', 'N/A', 'not yet', 'not yet'),
(32, 4, 'FNRI-IPD-CR-000005', 'Script for Puppet Videos: Gulay Pampahaba ng Buhay, Ehersisyo sa Maayos na Katawan, Inyong Kasosyo, Paglalasing at Paniningarilyo, Perhuwisyong Totoo, Breastfeeding, Mahalaga’t Magaling, Pagkaing Tama Dagdag sa Gatas ng Ina', '2011-01-11', 'E 2011-37', 'Food and Nutrition Research Institute', 'Approved&', '2011-12-11', 'Siglang Pinoy Project', '2011-01-01&2011-12-31&', '20000', 'PCARRD', 'N/A', 'not yet', 'not yet'),
(33, 4, 'FNRI-IPD-CR-000006', 'Artist Illustrator for FNRI Comics Gulay Pampahaba ng Buhay, Ehersisyo sa Maayos na Katawan, Inyong Kasosyo,  Paglalasing at Paniningarilyo, Perhuwisyong Totoo, Breastfeeding, Mahalaga’t Magaling, Pagkaing Tama Dagdag sa Gatas ng Ina', '2011-11-16', 'G 2011-153', 'Food and Nutrition Research Institute', 'Approved&', '2011-12-11', 'Food and Nutrition Research Institute', '2011-01-01&2011-12-31&', '30000', 'PCARRD', 'N/A', 'not yet', 'not yet'),
(34, 4, 'FNRI-IPD-CR-000007', 'FNRI Cebuano Comics Ehersisyo – Sa Maayong Panglawas Kauban Ninyo', '2012-05-25', 'B 2012-68', 'Food and Nutrition Research Institute', 'Approved&', '2012-05-31', 'Siglang Pinoy Project', '2012-01-01&2012-12-31&', '340000', 'PCARRD', 'N/A', 'not yet', 'not yet'),
(35, 4, 'FNRI-IPD-CR-000008', 'FNRI Cebuano Paghubog-hubog ng Panigarilyo, Matuod Nga Perhuwisyo', '2012-05-25', 'B 2012-69', 'Food and Nutrition Research Institute', 'Approved&', '2012-05-31', 'Siglang Pinoy Project', '2012-01-01&2012-12-31&', '340000', 'PCARRD', 'N/A', 'not yet', 'not yet'),
(36, 4, 'FNRI-IPD-CR-000009', 'FNRI Cebuano Comics Pagkaong Sakto Dugang Sa Gatas Sa Inahan', '2012-05-25', 'B 2012-70', 'Food and Nutrition Research Institute', 'Approved&', '2012-05-31', 'Siglang Pinoy Project', '2012-01-01&2012-12-31&', '340000', 'PCARRD', 'N/A', 'not yet', 'not yet'),
(37, 4, 'FNRI-IPD-CR-000010', 'FNRI Cebuano Comics Pagpatotoy, Importante’g Garantisadi', '2012-05-25', 'B 2012-71', 'Food and Nutrition Research Institute', 'Approved&', '2012-05-31', 'Siglang Pinoy Project', '2012-01-01&2012-12-31&', '340000', 'PCARRD', 'N/A', 'not yet', 'not yet'),
(38, 4, 'FNRI-IPD-CR-000011', 'FNRI Cebuano Comics Sa Utanon Kinabuhi Pataason', '2012-05-25', 'B 2012-72', 'Food and Nutrition Research Institute', 'Approved&', '2012-05-31', 'Siglang Pinoy Project', '2012-01-01&2012-12-31&', '340000', 'PCARRD', 'N/A', 'not yet', 'not yet'),
(39, 4, 'FNRI-IPD-CR-000012', 'FNRI Puppet Video Breastfeeding, Mahalaga’t Magaling', '2012-05-25', 'L 2012-67', 'Food and Nutrition Research Institute', 'Approved&', '2012-05-31', 'Siglang Pinoy Project', '2012-01-01&2012-12-31&', '340000', 'PCARRD', 'N/A', 'not yet', 'not yet'),
(40, 4, 'FNRI-IPD-CR-000013', 'FNRI Puppet Video Ehersisyo – Sa Maayos na Katawan, Inyong Kasosyo', '2012-05-25', 'L 2012-68', 'Food and Nutrition Research Institute', 'Approved&', '2012-05-31', 'Siglang Pinoy Project', '2012-01-01&2012-12-31&', '340000', 'PCARRD', 'N/A', 'not yet', 'not yet'),
(41, 4, 'FNRI-IPD-CR-000014', 'FNRI Puppet Video Gulay, Pampahaba ng Buhay', '2012-05-25', 'L 2012-69', 'Food and Nutrition Research Institute', 'Approved&', '2012-05-31', 'Siglang Pinoy Project', '2012-01-01&2012-12-31&', '340000', 'PCARRD', 'N/A', 'not yet', 'not yet'),
(42, 4, 'FNRI-IPD-CR-000015', 'FNRI Puppet Video Pagkaing Tama Dagdag Sa Gatas ng Ina', '2012-05-25', 'L 2012-70', 'Food and Nutrition Research Institute', 'Approved&', '2012-05-31', 'Siglang Pinoy Project', '2012-01-01&2012-12-31&', '340000', 'PCARRD', 'N/A', 'not yet', 'not yet'),
(43, 4, 'FNRI-IPD-CR-000016', 'FNRI Puppet Video Paglalasing at Paninigarilyo Perhuwisyong Totoo', '2012-05-25', 'L 2012-71', 'Theresa Aurora b. Cosico', 'Approved&', '2012-05-31', 'Siglang Pinoy Project', '2012-01-01&2012-12-31&', '340000', 'PCARRD', 'N/A', 'not yet', 'not yet'),
(44, 4, 'FNRI-IPD-CR-000017', 'FNRI Big Book: Si Lilay Ang Batang Matamlay', '2012-11-22', 'A 2012-2158', 'Raquel K. Lomugdang', 'Approved&', '2012-12-03', 'Project: Development, Updating, Pre-testing, Production and Evaluation of Food and Nutrition Information Packages', '2013-01-01&2013-12-31&', '40000', 'GIA-PCARRD', 'N/A', 'not yet', 'not yet'),
(45, 4, 'FNRI-IPD-CR-000018', 'Lutong FNRI: Mga Katutubong Gulay', '2013-06-18', 'A 2013-1168', 'Marietta M. Bumanglag; May Ann R. Devanadera; Maylene D. Pua; Mario V. Capanzana', 'Approved&', '2013-07-01', 'Program: Combating Double Burden Malnutrition Through Industry Driven R&D Programs (Project 2. Handbook on Nutrient Composition of Selected Philippine Vegetables and Standardized Recipes)', '2010-12-01&2011-11-30&', '2127250', 'DOST-GIA', 'N/A', 'not yet', 'not yet'),
(46, 4, 'FNRI-IPD-CR-000019', 'Lutong FNRI: Brown Rice Recipes Para Sa Lahing Kayumanggi', '2013-06-18', 'A 2013-1169', 'Marietta M. Bumanglag; May Ann R. Devanadera; Maylene D. Pua; Mario V. Capanzana', 'Approved&', '2013-07-01', 'Program: R&D Program for Brown Rice Optimization Functionality and Utilization in the Philippines (Project 4. Utilization of Brown Rice in the Production of Potential Functional Food Products and Recipes)', '2012-07-01&2012-12-31&^2012-07-01&2013-06-30&', '1147932&0', 'DOST-GIA&none', 'N/A', 'not yet', 'not yet'),
(47, 4, 'FNRI-IPD-CR-000020', 'Sulong sa DOST Pinoy, Gabay Sa Implementasyon ng DOST Pinoy (Guide Book)', '2013-06-20', 'A 2013-1244', 'Julieta B. Dorado; Clarita R. Magsadia; Chona F. Patalen; Teresa S. Mendoza; Francis Grace Duka-Pante & Irish Panelo', 'Approved&', '2013-07-02', 'S & T Based Interventions to Address Malnutrition Project 2: Development of a Model for DOST PINOY (Package for the Improvement of Nutrition of Young Children): A Nutrition Intervention Strategy', '2011-03-01&2013-01-31&', '5809693', 'DOST-TECHNICOM', 'N/A', 'not yet', 'not yet'),
(48, 2, '2-2010-000315', 'Instant Iron Fortified Rice Meal in Different Variants', '2010-07-01', 'FNRI-IPD-UM-000001', 'Noel Y. Lim; Joyce R. Tobias; Wenefrida N. Lainez; Annalyn A. Esemple; Alfee B. Capule', 'Granted&', '2013-06-14', 'Technology Generation for the Production of Nutritious Instant Rice Meal', '2009-01-01&2012-01-31&', '623200.30', 'Five N & I Corporation', 'N/A', 'not yet', '2014-Dec-10'),
(49, 2, 'FNRI-IPD-UM-000001', 'Instant Iron Fortified Rice Meal in Different Variants', '2010-07-01', '2-2010-000315', 'Noel Y. Lim; Joyce R. Tobias; Wenefrida N. Lainez; Annalyn A. Esemple; Alfee B. Capule', 'Granted&', '2013-06-14', 'Technology Generation for the Production of Nutritious Instant Rice Meal', '2009-01-01&2012-12-31&', '623200.3', 'Five N & I Corporation', 'N/A', 'not yet', '2014-Dec-10'),
(50, 2, 'FNRI-IPD-UM-000002', 'Low Fat, Low-Sugar Ice Cream Premix', '2010-05-24', '2-2010-000221', 'Ma. Elena G. Fernandez; Wenefrida N. Lainez; Dahlia A. Diaz; Charlie E. Adona; Benjamin T. Molano', 'Granted&', '2010-11-08', 'Development of Functional Foods: Low-Fat-Low Sugar Ice Cream', '2007-01-01&2009-12-31&', '1165000', 'GF', 'N/A', 'not yet', '2010 IP Award'),
(51, 2, 'FNRI-IPD-UM-000003', 'Ready-to-Drink Yacon Juice', '2012-12-19', '2-2012-000723', 'Rosemarie G. Garcia; Ma. Elena G. Fernandez; Dahlia A. Diaz; Honeylet S. Ochangco\nAlex M. Palomo', 'Granted&(Certificate of correction sealed 2017-Feb-14)', '2016-02-29', 'Development of Beverage Products from Yacon', '2007-09-01&2009-04-30&', '693549', 'PCIEERD-DOST GIA', 'N/A', 'not yet', '2017 IP Award'),
(52, 2, 'FNRI-IPD-UM-000004', 'Process of Preparing  a Ready to Use Multi-Nutrient Composition', '2014-11-04', '2-2014-000618', 'Marcela C. Saises; Trinidad II T. Arcangel; Abbie L. Padrones\nCharlie E. Adona;  Cecilia S. Quindara', 'Granted&', '2017-05-26', 'Technology Generation for the Production of Multi-Nutrient Growth Mix Complementary Food - GF', '2012-04-01&2012-09-30&Year 2', '1482803.37& (21.93 %-FNRI; 78.07%-PCHRD)\r\n', 'GF and DOST PCHRD', 'N/A', 'not yet', '2018 IP Award'),
(53, 2, 'FNRI-IPD-UM-000005', 'Process of Preparing a Premix of an Aromatic Multi-Nutrient Rice Kernels', '2014-11-04', '2-2014-000625', 'Marcela C. Saises; Trinidad II T. Arcangel; Abbie L. Padrones\nCharlie E. Adona;  Cecilia S. Quindara', 'Forfeited&', NULL, 'Technology Generation for the Production of Multi-Nutrient Extruded Rice Kernel to Address Malnutrition', '2013-04-01&2014-03-31&(Year 1)^2014-04-01&2014-12-31&Year 2', '1209163&(Y1)^1209000&(Y2)', 'GF and DOST PCHRD', 'N/A', 'none', 'none'),
(54, 2, 'FNRI-IPD-UM-000006', 'Process of Preparing an Aromatic Multi-Nutrient Rice Premix', '2014-11-04', '2-2014-000623', 'Marcela C. Saises; Trinidad II T. Arcangel; Abbie L. Padrones\nCharlie E. Adona', 'Granted&', '2017-05-06', 'Technology Generation for the Production of Multi-Nutrient Extruded Rice Kernel to Address Malnutrition', '2013-04-01&2014-03-31&Year 1', '1209163', 'GF and DOST PCHRD', 'N/A', '2018 PRAISE', 'not yet'),
(55, 2, 'FNRI-IPD-UM-000007', 'Ready to Use Multi-Nutrient Composition', '2014-11-04', '2-2014-000620', 'Marcela C. Saises; Trinidad II T. Arcangel; Abbie L. Padrones\nCharlie E. Adona;  Cecilia S. Quindara', 'Granted&', '2017-05-26', 'Technology Generation for the Production of Multi-Nutrient Growth Mix Complementary Food - GF', '2012-04-01&2012-09-01&Year 2', '1482803.37&(21.93 %-FNRI; 78.07%-PCHRD)', 'GF and DOST PCHRD', 'N/A', '2018 PRAISE', '2018 IP Award'),
(56, 2, 'FNRI-IPD-UM-000008', 'Process of Preparing a Brown Rice Cereal Composition for Baby', '2014-11-04', '2-2014-000627', 'Rosemarie G. Garcia; Dahlia A. Diaz; Alex M. Palomo; Ria B. Soriao', 'Granted&(Certificate of correction sealed 2017-Feb-14)', '2016-02-01', 'Utilization of Brown Rice in the Production of Potential Functional Food Products and Recipes', '2012-07-01&2013-08-30&', '3126100&', 'DOST-PCIEERD GIA', 'N/A', 'not yet', '2017 IP Award'),
(57, 2, 'FNRI-IPD-UM-000009', 'Brown Rice Cereal Composition for Baby', '2014-11-04', '2-2014-000626', 'Rosemarie G. Garcia; Dahlia A. Diaz; Alex M. Palomo; Ria B. Soriao', 'Granted& (Certificate of correction sealed June 1, 2017)', '2016-09-07', 'Utilization of Brown Rice in the Production of Potential Functional Food Products and Recipes', '2012-07-01&2013-08-30&', '3126100&', 'DOST-PCIEERD GIA', 'N/A', 'not yet', '2018 IP Award'),
(58, 2, 'FNRI-IPD-UM-000010', 'Process for the Production of a Ready-to-Use Fortified Supplementary Complementary Food Composition (Momsie)', '2014-11-26', '2-2014-000671', 'Joyce R. Tobias; Trinidad II T. Arcangel; Charlie E. Adona; Abbie L. Padrones; Hannah E. Edangan', 'Granted&', '2015-08-24', 'Local Development and Production of Fortified Complementary Foods: Nutrification of Ready-to-Serve Complementary Food', '2012-02-12&2013-01-31&^2015-07-01&2015-12-31&', '4360570&^0&', 'World Food Program^', 'N/A', 'not yet', 'Awarded'),
(59, 2, 'FNRI-IPD-UM-000012', 'Process of Producing Instant Germinated Brown Rice Beverage', '2014-11-26', '2-2014-000667', 'Rosemarie Garcia; Dahlia A. Diaz; Alex M. Palomo; Ria B. Soriao', 'Granted&(Certificate of correction sealed 2017-Feb-14)', '2015-11-11', 'Utilization of Brown Rice in the Production of Potential Functional Food Products and Recipes', '2012-07-01&2013-08-31&', '3126100&', 'DOST-PCIEERD GIA', 'N/A', 'not yet', '2017 IP Award'),
(60, 2, 'FNRI-IPD-UM-000013', 'Instant Germinated Brown Rice Beverage', '2014-11-26', '2-2014-000669', 'Rosemarie Garcia; Dahlia A. Diaz; Alex M. Palomo; Ria B. Soriao', 'Granted&(Certificate of correction sealed 2017-Feb-14)', '2015-11-25', 'Utilization of Brown Rice in the Production of Potential Functional Food Products and Recipes', '2012-07-01&2013-08-30&', '3126100&', 'DOST-PCIEERD GIA', 'N/A', 'not yet', '2017 IP Award'),
(61, 2, 'FNRI-IPD-UM-000014', 'Ready-to-Drink Dragon fruit Juice', '2014-01-17', '2-2014-000022', 'Joyce R. Tobias; Alfee B. Capule; Roxan Marie J. Francisco; Nenita D. Tangonan', 'Granted&', '2014-02-05', 'Development of Food Products from Dragon Fruit', '2011-09-01&2013-03-04&', '1176442.5&', 'Mrs. Nenita D. Tangonan', 'N/A', 'not yet', '2014 IP Award'),
(62, 2, 'FNRI-IPD-UM-000016', 'Extruded Ready-to-Fry Frozen Sweet Potato Fries', '2015-10-16', '2-2015-000606', 'Wenefrida N. Lainez; Maribeth C. Bautista; Mario C. Cabagbag; Hannah C. Edangan; Milfred Paca-anas\nDionisio Mariano Jr.; Jonahver O. Tarlit;    Alfee B. Capule', 'Granted&certificate/notice of issuance was mailed to Atty. Hechanova on Oct 5, 2016 (Certificate of correcion sealed June 1, 2017)', '2016-08-10', 'Development of a Technology for an Extruded Ready-to-Fry Sweet Potato Fries', '2013-01-01&2014-06-03&', '100000&', 'GF', 'N/A', 'not yet', '2018 IP Award'),
(63, 2, 'FNRI-IPD-UM-000017', 'Thermally Processed Coconut Cream-Based Dish', '2015-12-21', '2-2015-000781', 'Joyce R. Tobias; Wenefrida N. Lainez;  Rex B. Castante', 'Granted&(Certificate of correction sealed 2017-Feb-14)', '2016-05-04', 'Development of Instant Mixes for Phil Ethnic Foods / (Reformulated when adopted by Moondish)', '1998-01-01&2000-12-31&1998-2000 / 2000', '842367&', 'GF and DOST PCIEERD', 'N/A', 'not yet', '2017 IP Award'),
(64, 2, 'FNRI-IPD-UM-000018', 'Preparation of Instant Food from Taro', '2016-12-29', '2-2016-050020', 'Joyce R. Tobias; Wenefrida N. Lainez;  Maribeth B. Encarnacion', 'Granted&', '2017-06-14', 'Development of Instant Mixes for Phil Ethnic Foods / (Reformulated when adopted by Moondish)', '1998-01-01&2000-12-31&1998-2000 / 2000', '842367&', 'GF and DOST PCIEERD', 'N/A', '2018 PRAISE', '2018 IP Award'),
(65, 2, 'FNRI-IPD-UM-000019', 'Instant Food from Taro', '2016-12-29', '2-2016-050019', 'Joyce R. Tobias; Wenefrida N. Lainez;  Maribeth B. Encarnacion', 'Granted&', '2018-05-28', 'Development of Instant Mixes for Phil Ethnic Foods / (Reformulated when adopted by Moondish)', '1998-01-01&2000-12-31&1998-2000 / 2000', '842367&', 'GF and DOST PCIEERD', 'N/A', '2018 PRAISE', '2019 IP Award'),
(66, 2, 'FNRI-IPD-UM-000020', 'Instant Food Sauce', '2016-12-29', '2-2016-050021', 'Joyce R. Tobias; Wenefrida N. Lainez;  Maribeth B. Encarnacion', 'Granted&', '2017-06-14', 'Development of Instant Mixes for Phil Ethnic Foods / (Reformulated when adopted by Moondish)', '1998-01-01&2000-12-31&1998-2000 / 2000', '842367&', 'GF and DOST PCIEERD', 'N/A', '2018 PRAISE', '2018 IP Award'),
(67, 2, 'FNRI-IPD-UM-000021', 'Process of Producing Instant Kalamansi (Citrofortunella microcarpa) Extract', '2017-04-02', '2-2017-050074', 'Joyce R. Tobias; Wenefrida N. Lainez;  Rex B. Castante', 'Granted&', '2018-07-20', 'Development of Instant Mixes for Phil Ethnic Food/(reformulation when adopted by Mapagmahal)', '1998-01-01&2010-12-31&1998 - 2010', '842367&', 'GF and DOST PCIEERD', 'N/A', '2018 PRAISE', '2020 NAST Award'),
(68, 2, 'FNRI-IPD-UM-000022', 'Process of Making Boiled-Dehulled Sorghum Flour', '2017-08-09', '2-2017-050224', '2017-August-09', 'Granted&', '2017-11-19', 'R&D Program on Sorghum Utilization for Food: Proj 1: Dev\'t of Food & Standardization of Sorghum Flour/Starch production Process (Bench scale)', '2015-06-01&2015-12-31&', '500000&', 'GF', 'N/A', '2018 PRAISE', '2019 IP Award'),
(69, 2, 'FNRI-IPD-UM-000023', 'Boiled-Dehulled Sorghum Flour', '2017-08-09', '2-2017-050227', 'Joyce R. Tobias; Omar R. Peñarubia; Ian John L. Castro; Charlie E. Adona; Rex B. Castante', 'Granted&', '2019-08-23', 'R&D Program on Sorghum Utilization for Food: Proj 1: Dev\'t of Food & Standardization of Sorghum Flour/Starch production Process (Bench scale)', '2015-06-01&2015-12-31&', '500000&', 'GF', 'N/A', '2020 PRAISE', '2020 NAST Award'),
(70, 3, 'FNRI-IPD-TM-000001', 'Kayumanggi Stabilized Brown Rice Logo', '2012-08-10', '4/2012/00012359', '\"Rosemarie G. Garcia; Dahlia A. Diaz; Alex M. Palomo; Razoland B. Navarro\nMary Rose Ladia', 'Approved&', '2013-05-30', 'Optimization studies for the improvement of shelf life of brown rice', '2010-12-01&2012-04-01&', '2347158&', 'PCIEERD-DOST GIA', 'N/A', 'not yet', 'not yet'),
(71, 3, 'FNRI-IPD-TM-000002', 'DOST Logo', '2013-06-20', '4/2013/00007217', 'DOST', 'Approved&', '2014-01-02', 'Technology Transfer and Commercialization of FNRI Technologies/Products/Sevices', '0001-01-01&0001-01-01&Continuing Project', '0&', 'GF', 'N/A', 'not yet', 'not yet'),
(72, 3, 'FNRI-IPD-TM-000002', 'DOST Logo', '2013-06-20', '4/2013/00007217', 'DOST', 'Approved&', '2014-01-02', 'Technology Transfer and Commercialization of FNRI Technologies/Products/Sevices', '0001-01-01&0001-01-01&Continuing Project', '0&', 'GF', 'N/A', 'not yet', 'not yet'),
(73, 3, 'FNRI-IPD-TM-000007', 'Brown Rice Nutty Fruity Bar', '2014-05-28', '4/2014/00006709', 'Rosemarie G. Garcia; Alex M. Palomo', 'Approved&', '2014-11-27', 'Utilization of Brown Rice in the Production of Potential Functional Food Products and Recipes', '2012-07-01&2013-08-30&', '3126100&', 'DOST-PCIEERD GIA', 'N/A', 'not yet', 'not yet'),
(74, 3, 'FNRI-IPD-TM-000008', 'Pinggang Pinoy Logo', '2014-07-18', '4/2014/00008963', 'Ma. Jovina A. Sandoval; Carl Vincent D. Cabanilla; Robby Carlo A. Tan; Joshua T. Gonzales', 'Approved&', '2015-02-26', 'Developmnent of a New Food Guide', '2013-08-01&2014-06-30&', '150070&', 'GF', 'N/A', 'not yet', 'not yet'),
(75, 3, 'FNRI-IPD-TM-000009', 'Pinggang Pinoy Healthy Food Plate for Filipino Adults (Tradename)', '2014-07-30', '4/2014/00009410', 'Ma. Jovina A. Sandoval; Carl Vincent D. Cabanilla; Robby Carlo A. Tan; Joshua T. Gonzales', 'Approved&', '2015-01-15', 'Developmnent of a New Food Guide', '2013-08-01&2014-06-30&', '150070&', 'GF', 'N/A', 'not yet', 'not yet'),
(76, 3, 'FNRI-IPD-TM-000010', 'Momsie Towards a Well Nourished Child Logo', '2014-08-04', '4/2014/00009601', 'Joyce R. Tobias; Wenefrida N. Lainez', 'Approved&', '2015-01-15', 'Local Development and Production of Fortified Complementary Foods: Nutrification of Ready-to-Serve Complementary Food', '2012-02-12&2013-01-31&\n^2015-07-01&2015-12-31&', '4360570&\n^0&', 'World Food Program^', 'N/A', 'not yet', 'not yet'),
(77, 3, 'FNRI-IPD-TM-000011', 'Momsie TradeName', '2014-08-04', '4/2014/00009600', 'Joyce R. Tobias; Wenefrida N. Lainez', 'Approved&', '2014-11-27', 'Local Development and Production of Fortified Complementary Foods: Nutrification of Ready-to-Serve Complementary Food', '2012-02-12&2013-01-31&\n\n^2015-07-01&2015-12-31&', '4360570&^0&', 'World Food Program^', 'N/A', 'not yet', 'not yet'),
(78, 3, 'FNRI-IPD-TM-000012', 'Pandan Kernel Mix Brand Name', '2015-02-16', '4/2015/00001717', 'Marcela C. Saises', 'Approved&', '2015-07-23', 'Technology Generation for the Production of Extruded Aromatic Rice Premix', '2011-12-01&2011-12-31&December 2011-', '500000&', 'GF and DOST PCHRD', 'N/A', 'not yet', 'not yet'),
(79, 3, 'FNRI-IPD-TM-000013', 'MGM Glow Kids Brand Name', '2015-02-16', '4/2015/00001715', 'Marcela C. Saises; Trinidad II T. Arcangel; Abie L. Padrones; Charlie E. Adona\nC.S. Quindara', 'Approved&', '2015-08-29', '2015-Oct-29	Technology Generation for the Production of Multi-Nutrient Growth Mix Complementary Food - GF', '2012-04-01&2012-09-30&Year 2', '1482803.37& (21.93 %-FNRI; 78.07%-PCHRD)', 'GF and DOST PCHRD', 'N/A', 'not yet', 'not yet'),
(80, 3, 'FNRI-IPD-TM-000014', 'iFNRI Logo', '2016-06-15', '4/2016/00006780', 'Divorah V. Aguila; Donn C. Romasanta; Jeffrey Y. De Leon; Maymia J. Tumimbang; Mario V. Capanzana', 'Approved&', '2016-11-24', 'Intensifying the Management of the Information System of FNRI', '0001-01-01&0001-01-01&2015-present', '4520591.87&', 'GF', 'N/A', 'not yet', 'not yet'),
(81, 3, 'FNRI-IPD-TM-000015', 'iBusiness Logo', '2016-06-15', '4/2016/00006781', 'Divorah V. Aguila; Donn C. Romasanta; Jeffrey Y. De Leon; Maymia J. Tumimbang; Mario V. Capanzana', 'Approved&', '2016-11-24', 'Intensifying the Management of the Information System of FNRI', '0001-01-01&0001-01-01&2015-present', '4520591.87&', 'GF', 'N/A', 'not yet', 'not yet'),
(82, 3, 'FNRI-IPD-TM-000015', 'iBusiness Logo', '2016-06-15', '4/2016/00006781', 'Divorah V. Aguila; Donn C. Romasanta; Jeffrey Y. De Leon; Maymia J. Tumimbang; Mario V. Capanzana', 'Approved&', '2016-11-24', 'Intensifying the Management of the Information System of FNRI', '0001-01-01&0001-01-01&2015-present', '4520591.87&', 'GF', 'N/A', 'not yet', 'not yet'),
(83, 3, 'FNRI-IPD-TM-000015', 'iBusiness Logo', '2016-06-15', '4/2016/00006781', 'Divorah V. Aguila; Donn C. Romasanta; Jeffrey Y. De Leon; Maymia J. Tumimbang; Mario V. Capanzana', 'Approved&', '2016-11-24', 'Intensifying the Management of the Information System of FNRI', '0001-01-01&0001-01-01&2015-present', '4520591.87&', 'GF', 'N/A', 'not yet', 'not yet'),
(84, 3, 'FNRI-IPD-TM-000015', 'iBusiness Logo', '2016-06-15', '4/2016/00006781', 'Divorah V. Aguila; Donn C. Romasanta; Jeffrey Y. De Leon; Maymia J. Tumimbang; Mario V. Capanzana', 'Approved&', '2016-11-24', 'Intensifying the Management of the Information System of FNRI', '0001-01-01&0001-01-01&2015-present', '4520591.87&', 'GF', 'N/A', 'not yet', 'not yet'),
(85, 3, 'FNRI-IPD-TM-000016', 'iPromote Logo', '2016-06-15', '4/2016/00006782', 'Divorah V. Aguila; Donn C. Romasanta; Jeffrey Y. De Leon; Maymia J. Tumimbang; Mario V. Capanzana', 'Approved&', '2017-03-09', 'Intensifying the Management of the Information System of FNRI', '0001-01-01&0001-01-01&2015-present', '4520591.87&', 'GF', 'N/A', 'not yet', 'not yet'),
(86, 3, 'FNRI-IPD-TM-000017', 'iLearn Logo', '2016-06-15', '4/2016/00006783', 'Divorah V. Aguila; Donn C. Romasanta; Jeffrey Y. De Leon; Maymia J. Tumimbang; Mario V. Capanzana', 'Approved&', '2017-03-09', 'Intensifying the Management of the Information System of FNRI', 'none&&2015-present', '4520591.87&Php 4,520,591.87', 'GF', 'N/A', 'not yet', 'not yet'),
(87, 3, 'FNRI-IPD-TM-000017', 'iLearn Logo', '2016-06-15', '4/2016/00006783', 'Divorah V. Aguila; Donn C. Romasanta; Jeffrey Y. De Leon; Maymia J. Tumimbang; Mario V. Capanzana', 'Approved&', '2017-03-09', 'Intensifying the Management of the Information System of FNRI', 'none&&2015-present', '4520591.87&Php 4,520,591.87', 'GF', 'N/A', 'not yet', 'not yet'),
(88, 3, 'FNRI-IPD-TM-000017', 'iLearn Logo', '2016-06-15', '4/2016/00006783', 'Divorah V. Aguila; Donn C. Romasanta; Jeffrey Y. De Leon; Maymia J. Tumimbang; Mario V. Capanzana', 'Approved&', '2017-03-09', 'Intensifying the Management of the Information System of FNRI', 'none&&2015-present', '4520591.87&Php 4,520,591.87', 'GF', 'N/A', 'not yet', 'not yet'),
(89, 3, 'FNRI-IPD-TM-000018', 'iAdmin Logo', '2016-06-15', '4/2016/00006784', 'Divorah V. Aguila; Donn C. Romasanta; Jeffrey Y. De Leon; Maymia J. Tumimbang; Mario V. Capanzana', 'Approved&', '2017-03-09', 'Intensifying the Management of the Information System of FNRI', 'none&&2015-present', '4520591.87&', 'GF', 'N/A', 'not yet', 'not yet'),
(90, 3, 'FNRI-IPD-TM-000019', 'iAssess Logo', '2016-06-15', '4/2016/00006785', 'Divorah V. Aguila; Donn C. Romasanta; Jeffrey Y. De Leon; Maymia J. Tumimbang; Mario V. Capanzana', 'Approved&', '2017-03-09', 'Intensifying the Management of the Information System of FNRI', 'none&&2015-present', '4520591.87&', 'GF', 'N/A', 'not yet', 'not yet'),
(91, 2, 'FNRI-IPD-UM-000024', 'Acid-Modified Sorghum Starch and Process of Making the Same', '2017-04-09', '2-2017-050226', 'Joyce R. Tobias; Ian John L. Castro; Charlie E. Adona; Omar R. Peñarubia; Rex B. Castante', 'Granted&', '2017-11-10', 'R&D Program on Sorghum Utilization for Food: Proj 2: Characterization & Functional Properties Determination of Sorghum Flour/Starch Process', '2016-01-01&2016-12-31&', '785000&', 'GF', 'N/A', '2018 PRAISE', '2019 IP Award'),
(92, 2, 'FNRI-IPD-UM-000025', 'Gluten-Free Pasta Noodles', '2017-10-04', '2-2017-050277', 'Joyce R. Tobias; Cecilia S. Quindara; Mario C. Cabagbag; Alfee B. Capule', 'Granted&', '2018-01-12', 'Tech Generation for the Production of a Gluten Free Noodle', '2011-02-01&2012-02-28&February 2011- February 2012', '350000&', 'GF', 'N/A', '2020 PRAISE', '2020 NAST Award'),
(93, 2, 'FNRI-IPD-UM-000027', 'Process for Making Instant Multi-Veggie Blend Noodles', '2017-10-04', '2-2017-050280', 'Joyce R. Tobias; Mario C. Cabagbag; Cecilia S. Quindara; Alfee B. Capule', 'Granted&', '2019-09-20', 'Dev\'t of Instant Multi-Veggie Blend Noodle', '2008-07-01&2009-11-13&July 2008-December 2009', '250000&', 'GF', 'N/A', '2020 PRAISE', '2020 NAST Award'),
(94, 2, 'none', 'Instant Multi-Veggie Blend Noodles (Product)', '2017-10-04', '2-2017-050279', 'Joyce R. Tobias; Mario C. Cabagbag; Cecilia S. Quindara; Alfee B. Capule', 'Granted&', '2017-12-15', 'Dev\'t of Instant Multi-Veggie Blend Noodle', '2008-07-01&2009-12-31&', '250000&', 'GF', 'N/A', '2018 PRAISE', '2020 NAST Award'),
(95, 2, 'none', 'Improved Process of Producing Brown Rice with Longer Shelf-Life', '2017-08-09', '2-2017-050218', 'Alex M. Palomo; Dahlia A. Diaz; Rosemarie G. Garcia', 'Granted&', '2017-11-10', 'R & D Program for Brown Rice (ORYZA SATIVA L.) Optimization, Functionality and Utilization in the Philippines', 'none&&2010-2011', '2347158&', 'PCIEERD-DOST GIA', 'N/A', '2018 PRAISE', '2020 NAST Award'),
(96, 2, 'none', 'Blending Machine for Rice Fortification', '2017-08-09', '2-2017-050231', '2017-August-09', 'Granted&', '2020-11-16', 'Low Cost Blending Machine for Scaling Up Rice Fortification', 'none&&2006 - March 2015\n^&&', '293687&GF\n^200000& (TAPI)', 'GF^DOST-TAPI', 'N/A', '2022 PRAISE', '2022 NAST Award'),
(97, 2, 'none', 'Complementary/Snack Foods with Carrots using High Pressure-High Temperature (HPHT) Extrusion', '2017-08-09', '2-2017-050221', 'Joyce R. Tobias; Mario C. Cabagbag; Charlie E. Adona; Niña Joy J. Raytana; Oliver James T. Orcullo; Filoteo D. Ponte', 'Granted&', '2018-01-29', 'Development of Extruded Products with Fruits Rich in Antioxidants using High Pressure High Temperature (HPHT) Extrusion', 'none&&1998-2000 / Jan-Oct 2016', '500000&', 'GF', 'N/A', '2018 PRAISE', '2019 IP Award'),
(98, 2, 'none', 'Process for Producing Complementary and Snack Food Using High Pressure-High Temperature (HPHT) Extrusion', '2017-08-09', '2-2017-050223', 'Joyce R. Tobias; Mario C. Cabagbag; Charlie E. Adona; Niña Joy J. Raytana; Oliver James T. Orcullo; Filoteo D. Ponte', 'Granted&', '2017-11-10', 'Development of Extruded Products with Fruits Rich in Antioxidants using High Pressure High Temperature (HPHT) Extrusion', 'none&&1998-2000 / Jan-Oct 2016', '500000&', 'GF', 'N/A', '2020 PRAISE', '2020 NAST Award'),
(99, 2, 'none', 'Ready-to-Drink B-Carotene Rich Juices', '2017-08-09', '2-2017-050222', 'Wenefrida N. Lainez; Maribeth C. Bautista;', 'Granted&', '2018-01-29', 'Dev\'t of Functional Foods: B-Carotene Rich Juice / Reformulated to Ready-to-Drink when adopted by Green Salad Farm', 'none&&2016 - March 2015', '0&not a project report', 'Green Salad Farm', 'N/A', '2018 PRAISE', '2019 IP Award'),
(100, 2, 'none', 'COCONUT CREAM-BASED TARO DISH (LAING) AND PREPARATION METHOD THEREOF', '2017-08-09', '2-2017-050228', 'Wenefrida N. Lainez; Maribeth C. Bautista;        Joyce R. Tobias', 'Granted&2019-Aug-23', '2019-08-23', 'Development of Instant Mixes for Phil Ethnic Foods / (Reformulated when adopted by Moondish)', 'none&&1998-2000 / 2000', '842367&', 'GF and DOST PCIEERD', 'N/A', '2020 PRAISE', '2020 NAST Award'),
(101, 2, 'none', 'Thermally Processed Instant Lumpia Sauce', '2017-04-01', '2-2017-050073', 'Joyce R. Tobias; Wenefrida N. Lainez; Dr. Lydia M. Marero', 'Granted&', '2018-06-01', 'Dev\'t of Instant Mixes for Phil Ethnic Foods', 'none&&1998-2000', '842367&', 'GF and DOST PCIEERD', 'N/A', '2018 PRAISE', '2019 IP Award'),
(102, 2, 'none', 'Process for Preparing a Thermally Processed Instant Lumpia (Sping Roll) Sauce', '2018-12-20', '2-2018-001626', 'Joyce R. Tobias; Wenefrida N. Lainez; Dr. Lydia M. Marero', 'Granted&', '2020-08-03', 'Dev\'t of Instant Mixes for Phil Ethnic Foods', 'none&&1998-2000', '842367&', 'GF and DOST PCIEERD', 'N/A', '2022 PRAISE', '2022 IP Award'),
(103, 2, 'none', 'An Instant Complementary/Supplementary Food from Cereal-Legume-Rootcrop Blend', '2018-03-28', '2-2018-050127', 'Wenefrida N. Lainez, Alfee B. Capule, Maribeth C. Bautista-Encarnacion, Jonahver Tarlit, Ailyn Sambas, Milfred Paca-anas', 'Granted&', '2019-11-22', 'Technology Innovation of FNRI Developed Rootcrop-Legumes Based Complementary Blends and Snack Foods to Reduce Malnutrition', '2015-05-01&2015-12-31&', '500000&', 'GF', 'N/A', '2020 PRAISE', '2021 NAST Award'),
(104, 2, 'none', 'Extruded Snackfoods from a Cereal-Legume-Rootcrop Blend', '2018-03-28', '2-2018-050128', 'Wenefrida N. Lainez, Alfee B. Capule, Maribeth C. Bautista-Encarnacion, Jonahver Tarlit, Ailyn Sambas, Milfred Paca-anas', 'Granted&', '2020-08-03', 'Technology Innovation of FNRI Developed Rootcrop-Legumes Based Complementary Blends and Snack Foods to Reduce Malnutrition', '2015-05-01&2015-12-31&', '500000&', 'GF', 'N/A', '2021 PRAISE', '2021 NAST AWard'),
(105, 2, 'none', 'Extruded Snackfoods from a Cereal-Legume-Rootcrop Blend', '2020-08-14', '2-2020-050395', 'Wenefrida N. Lainez, Alfee B. Capule, Maribeth C. Bautista-Encarnacion, Jonahver Tarlit, Ailyn Sambas, Milfred Paca-anas', 'Granted&', '2021-01-13', 'Technology Innovation of FNRI Developed Rootcrop-Legumes Based Complementary Blends and Snack Foods to Reduce Malnutrition', '2015-01-05&2015-12-31&', '500000&', 'GF', 'N/A', '2021 PRAISE', '2022 NAST'),
(106, 2, 'none', 'A Process for the Production of Ready-to-Drink B-Carotene Rich Juices', '2018-04-06', '2-2018-000278', 'Wenefrida N. Lainez; Maribeth C. Bautista-Encarnacion', 'Granted&', '2019-08-05', 'Dev\'t of Functional Foods: B-Carotene Rich Juice / Reformulated to Ready-to-Drink when adopted by Green Salad Farm', 'none&&2016 - March 2015', '0&not a project report', 'Green Salad Farm', 'N/A', '2020 PRAISE', '2020 NAST Award'),
(107, 2, 'none', 'Low Temperature and Low Humidity Dryer', '2017-08-09', '2-2017-050225', 'Joyce R. Tobias; Charlie E. Adona; Jose Maria Reynaldo Apollo C. Arquiza; Richard L. Alcaraz; Czarlyn April Joy G. Mendoza', 'Granted&', '2019-12-11', 'Effects of Low Temperature and Low Humidity on the Nutritional, Physical, Sensory, and Microbail Properties of Dehydrated Food', '2015-05-01&2016-12-31&', '900000&\"Php 600,000.00 (2015)\nPhp 300,000.00 (2016)\"', 'GF', 'N/A', '2020 PRAISE', '2020 NAST Award'),
(108, 2, 'none', 'Drying Method for Mangoes using Low Temperature and Low Humidity Dryer', '2018-04-06', '2-2018-000246', 'Joyce R. Tobias; Charlie E. Adona; Jose Maria Reynaldo Apollo C. Arquiza; Richard L. Alcaraz; Czarlyn April Joy G. Mendoza', 'Granted&', '2019-08-05', 'Effects of Low Temperature and Low Humidity on the Nutritional, Physical, Sensory, and Microbail Properties of Dehydrated Food', '2015-05-01&2016-12-31&', '900000&Php 600,000.00 (2015)\nPhp 300,000.00 (2016)', 'GF', 'N/A', '2020 PRAISE', '2020 NAST Award'),
(109, 2, 'none', 'Process of Producing Low-Protein Reconstituted Rice and Products Thereof', '2018-04-01', '2-2018-050129', 'Marcela C. Saises; Trinidad II T. Arcangel; Cecilia Quindara; Jeannelyn Sevilla; Dona Rose Layusa; John Lester Ramirez; Sandro Flores; Junimer B. Lala', 'On Process&\"As of 2019-Oct-23 Status: Awaiting formality examination report\n \nREVOIPMENTE \"', '0001-01-01', 'Comprehensive DOST R&D Program in Sago Utilization as Food and Non-Food Products: Year 3: Utilization of Sago Flour for the Production of Low-Protein Rice-Like Kernel', '2015-01-01&2016-12-31&', '675000&Php 450,000.00 (2015)\nPhp 225,000.00 (2016)', 'GF', 'N/A', 'not yet', 'not yet'),
(110, 2, 'none', 'Process for Producing Kalamansi Extract and Products Thereof', '2018-04-02', '2-2018-050130', 'Joyce R. Tobias; Wenefrida N. Lainez; Rex B. Castante', 'On process&As of 2019-Oct-14 Status: Awaiting formality examination report \nREVOIPMENTE', NULL, 'Development of Instant Mixes for Phil Ethnic Food/(reformulation when adopted by Mapagmahal)', 'none&&1998 - 2010', '842367&', 'GF and DOST PCIEERD', 'N/A', 'not yet', 'not yet'),
(111, 2, 'none', 'Process for the Production of Instant Complementary/Supplementary Infant Food Blend and Products Thereof', '2018-04-03', '2-2018-050131', 'Wenefrida N. Lainez; Alfee B. Capule; Maribeth C. Bautista-Encarnacion; Jonahver O. Tarlit, Ailyn Sambas, Milfred Paca-Anas', 'Granted&(NEEDS CERT OF CORRECTION IN THE APPLICANT\'S NAME)', '2019-02-20', 'Technology Innovation of FNRI Developed Rootcrop-Legumes Based Complementary Blends and Snack Foods to Reduce Malnutrition', 'none&&May-December 2015', '500000&', 'GF', 'N/A', '2019 PRAISE', '2021 NAST Award'),
(112, 2, 'none', 'Process for Production of Cereal-Legume-Rootcrop Based Extruded Snack Foods and Products Thereof', '2018-04-05', '2-2018-050136', 'Wenefrida N. Lainez; Alfee B. Capule; Maribeth C. Bautista-Encarnacion; Jonahver O. Tarlit, Ailyn Sambas, Milfred Paca-Anas', 'Granted& (NEEDS CERT OF CORRECTION IN THE APPLICANT\'S NAME)', '2019-02-18', 'Technology Innovation of FNRI Developed Rootcrop-Legumes Based Complementary Blends and Snack Foods to Reduce Malnutrition', 'none&&May-December 2015', '500000&', 'GF', 'N/A', '2019 PRAISE', '2021 NAST Award'),
(113, 2, 'none', 'Process for Production of Cereal-Legume-Rootcrop Based Extruded Snack Foods and Products Thereof', '2018-04-05', '2-2018-050137', 'Wenefrida N. Lainez; Alfee B. Capule; Maribeth C. Bautista-Encarnacion; Jonahver O. Tarlit, Ailyn Sambas, Milfred Paca-Anas', 'Withdrawn&Please be informed that 2-2018-050137 is a Withdrawn Application. Hence, we cannot generate Registrability Report for the subject application. The Notice of Withdrawn was mailed on Nov. 22, 2019. In accordance with IRR, you may file a Petition for Revival until March 22, 2020 only with the complete proposed Response and Revival fee.)', NULL, 'Technology Innovation of FNRI Developed Rootcrop-Legumes Based Complementary Blends and Snack Foods to Reduce Malnutrition', 'none&&May-December 2015', '500000&', 'GF', 'N/A', 'none', 'none'),
(114, 2, 'none', 'Process for Production of Vegetable-Based Complementary Snack Foods and Products Thereof', '2018-08-08', '2-2018-050157', 'Wenefrida N. Lainez, Alfee B. Capule, Maribeth C. Bautista-Encarnacion, Milfred Paca-anas, Elaine L. Prades', 'Granted& (NEEDS CERT OF CORRECTION IN THE APPLICANT\'S NAME)', '2018-02-18', 'Technology Innovation of FNRI Developed Root-Legumes Based Complementary Blends and Snack Foods to Reduce Malnutrition', 'none&&May-December 2015', '500000&', 'GF', 'N/A', '2019 PRAISE', '2021 NAST Award'),
(115, 2, 'none', 'Process for Production of Vegetable-Based Complementary Infant Food Blend and Products Thereof', '2018-04-08', '2-2018-050156', 'Wenefrida N. Lainez, Alfee B. Capule, Maribeth C. Bautista-Encarnacion, Milfred Paca-anas, Elaine L. Prades', 'Granted&(NEEDS CERT OF CORRECTION IN THE APPLICANT\'S NAME)', '2019-02-18', 'Technology Innovation of FNRI Developed Rootcrop-Legumes Based Complementary Blends and Snack Foods to Reduce Malnutrition', 'none&&May-December 2015', '500000&', 'GF', 'N/A', '2019 PRAISE', '2021 NAST Award'),
(116, 2, 'none', 'Process of Preparation of Coffee Pulp Powder for Food Product Application through Enzyme-Assisted Extraction', '2019-01-18', '2-2019-000109', 'Trinidad II T. Arcangel; Francisco J. Roxan Marie; Maricar D. Albao; Rosario S. Sagum; Alex M. Palomo; John Per A. Globio; James David S. Alcantara', 'Granted&', '2020-05-22', 'Technology Generation of Viable Functional Food Ingredients from Agricultural By-products with Identified Bioactive Components', '2017-01-01&2017-12-31&', '500000&', 'GF and DOST-PCIERD (Program lead is PTRI)', 'N/A', '2021 PRAISE', '2021 NAST Award');

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
(29, '2014_10_12_000000_create_users_table', 1),
(30, '2014_10_12_100000_create_password_resets_table', 1),
(31, '2019_08_19_000000_create_failed_jobs_table', 1),
(32, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(33, '2022_03_11_083256_create_ips_table', 1),
(38, '2022_03_11_090448_create_tm_dau_table', 2);

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
-- Table structure for table `tm_dau`
--

CREATE TABLE `tm_dau` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reg_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'none',
  `date_3rd_dou` date DEFAULT NULL,
  `status_3rd_dou` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'none',
  `regno_3rd_dou` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_5th_dou` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_5th_dou` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'none',
  `regno_5th_dou` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'none',
  `goods_n_services` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'none',
  `status_renewal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'none',
  `first_use` date NOT NULL DEFAULT current_timestamp(),
  `outlet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'none',
  `outlet_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'none',
  `pic_n_lbl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'none'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tm_dau`
--

INSERT INTO `tm_dau` (`id`, `reg_no`, `date_3rd_dou`, `status_3rd_dou`, `regno_3rd_dou`, `date_5th_dou`, `status_5th_dou`, `regno_5th_dou`, `goods_n_services`, `status_renewal`, `first_use`, `outlet`, `outlet_address`, `pic_n_lbl`) VALUES
(3, '04-2017-00012565', '0000-00-00', 'none', 'none', NULL, 'none', 'none', 'none', 'none', '1970-01-01', 'none', 'none', 'none'),
(4, '4/2012/00012359', NULL, 'none', 'none', NULL, 'none', 'none', 'Class 31: Stabilized Brown Rice', 'none', '2012-08-10', 'FNRI-DOST', 'DOST Compound, General Santos Ave., Bicutan, Taguig City', '1. Plastic packaging; 2. Get proof from Sir Alex Palomo'),
(5, '4/2014/00006709', '2017-05-28', '2017-05-28', '2017-05-28', '2020-11-27', '2020-11-27', '2020-11-27', 'none', 'none', '1970-01-01', 'none', 'none', 'none'),
(6, '4/2014/00008963', '2017-07-18', '2017-07-18', '2017-07-18', '2021-02-26', '2021-02-26', '2021-02-26', 'none', 'none', '1970-01-01', 'none', 'none', 'none'),
(7, '4/2014/00009410', '2017-07-30', '2017-07-30', '2017-07-30', '2021-01-15', '2021-01-15', '2021-01-15', 'Class 42: Scientific and Technological Services and Research and Design relating thereto', 'none', '2014-07-30', 'FNRI-DOST', 'DOST Compound, General Santos Ave., Bicutan, Taguig City', '1. Placemat; 2. Plate; 3. PPT Slide'),
(8, '4/2014/00009601', '2017-08-04', '2017-08-04', '2017-08-04', '2019-11-27', '2019-11-27', '2019-11-27', 'Class 5: Food for babies; Class 30: Cocoa, flour and preparation made for cereals; Class 31: Agricultural and forestry products and grains not included in other classes', 'none', '2014-08-04', '**FNRI-DOST; **Nutridense Food Corp.', 'DOST Compound, General Santos Ave., Bicutan, Taguig City', '1. Sachet Packaging; 2. Jar'),
(9, '4/2014/00009600', '2017-08-04', '2017-08-04', '2017-08-04', '2024-05-27', '2024-05-27', '2024-05-27', 'Class 5: Food for babies; Class 30: Cocoa, flour and preparation made for cereals; Class 31: Agricultural and forestry products and grains not included in other classes', 'none', '2014-08-04', '**FNRI-DOST; **Nutridense Food Corp.', 'DOST Compound, General Santos Ave., Bicutan, Taguig City', '1. Sachet Packaging; 2. Jar'),
(10, '4/2015/00001717', '2018-02-16', '2018-02-16', '2018-02-16', '2021-07-23', '2021-07-23', '2021-07-23', 'Class 30: Rice; auxilliaries intended for the improvement of the flavor of the food', 'none', '2015-02-16', 'not yet used', 'not yet used', 'not yet used'),
(11, '4/2015/00001715', '2018-02-16', '2018-02-16', '2018-02-16', '2025-04-29', '2025-04-29', '2025-04-29', 'Class 5: Food for babies; dietary supplement for humans', 'none', '2015-02-16', '**FNRI-DOST; **Nutridense Food Corp.', 'DOST Compound, General Santos Ave., Bicutan, Taguig City', '1. Packaging; 2. Box'),
(12, '4/2016/00006780', '2019-06-15', '2019-06-15', '2019-06-15', '2021-Nov-24 to 2022-Nov-24', '2021-Nov-24 to 2022-Nov-24', '2021-Nov-24 to 2022-Nov-24', 'none', 'none', '1970-01-01', 'none', 'none', 'none'),
(13, '4/2016/00006781', '2019-06-15', 'Accepted', 'A/2019/335847', '2021-Nov-24 to 2022-Nov-24', 'none', 'none', 'none', '2026-May-24', '1970-01-01', 'none', 'none', 'none'),
(14, '4/2016/00006782', '2019-06-15', 'Accepted', 'A/2019/335846', '2022-March-09 to 2023-March-09', 'none', NULL, 'none', '2026-Sep-09', '1970-01-01', 'none', 'none', 'none'),
(15, '4/2016/00006783', NULL, 'none', 'none', 'none', 'none', NULL, 'none', 'none', '1970-01-01', 'none', 'none', 'none'),
(16, '4/2016/00006784', '2019-06-15', '20A/2019/335845', 'Accepted', '2022-March-09 to 2023-March-09', 'none', NULL, 'none', '2026-Sep-09', '1970-01-01', 'none', 'none', 'none'),
(17, '4/2016/00006785', '2019-06-15', 'Accepted', 'A/2019/335844', '2022-March-09 to 2023-March-09', 'none', NULL, 'none', '2026-Sep-09', '1970-01-01', 'none', 'none', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
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
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `ips`
--
ALTER TABLE `ips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- Indexes for table `tm_dau`
--
ALTER TABLE `tm_dau`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ips`
--
ALTER TABLE `ips`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tm_dau`
--
ALTER TABLE `tm_dau`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
