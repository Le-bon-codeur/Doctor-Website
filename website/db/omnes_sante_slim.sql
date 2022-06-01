SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE IF NOT EXISTS `omnes_sante` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `omnes_sante`;

INSERT INTO `card` (`num`, `expi`, `secur`, `type`, `userid`) VALUES
('1234567891011121', '2025-03-28', '65a699905c02619370bcf9207f5a477c3d67130ca71ec6f750e07fe8d510b084', 'Visa', 26),
('1234567801011121', '2025-03-28', '922c7954216ccfe7a61def609305ce1dc7c67e225f873f256d30d7a8ee4f404c', 'Visa', 27),
('1234567891221121', '2025-03-28', '2747b7c718564ba5f066f0523b03e17f6a496b06851333d2d59ab6d863225848', 'Visa', 28),
('1234567898711121', '2025-03-28', '6566230e3a3ce3774c1bbc7c18b590ae0f457bbcd511e90e3e7dca2a02e7addc', 'Visa', 29),
('1231237891011121', '2025-03-28', '38d66d9692ac590000a91b03a88da1c88d51fab2b78f63171f553ecc551a0c6f', 'Visa', 30);

INSERT INTO `connection` (`name`, `pw`, `admin`, `userid`) VALUES
('pilou', 'a04868e4c40a1a4ac0fee50d9ea30bd54d2919cc7f4a323976b550d63e746426', '1', 1),
('Luc', '83f0d6813ed0fdfd90b7ed1ba29d79c5e6afeb510f29b584779583328c069fb8', '0', 2),
('Mariese', '83f0d6813ed0fdfd90b7ed1ba29d79c5e6afeb510f29b584779583328c069fb8', '0', 3),
('Halexis', '83f0d6813ed0fdfd90b7ed1ba29d79c5e6afeb510f29b584779583328c069fb8', '0', 4),
('Pierre', '83f0d6813ed0fdfd90b7ed1ba29d79c5e6afeb510f29b584779583328c069fb8', '0', 5),
('Paul', '83f0d6813ed0fdfd90b7ed1ba29d79c5e6afeb510f29b584779583328c069fb8', '0', 6),
('Jacques', '83f0d6813ed0fdfd90b7ed1ba29d79c5e6afeb510f29b584779583328c069fb8', '0', 7),
('Mule', '83f0d6813ed0fdfd90b7ed1ba29d79c5e6afeb510f29b584779583328c069fb8', '0', 8),
('Ivana', '83f0d6813ed0fdfd90b7ed1ba29d79c5e6afeb510f29b584779583328c069fb8', '0', 9),
('Laurie', '83f0d6813ed0fdfd90b7ed1ba29d79c5e6afeb510f29b584779583328c069fb8', '0', 10),
('Patrik', '83f0d6813ed0fdfd90b7ed1ba29d79c5e6afeb510f29b584779583328c069fb8', '0', 11),
('Martin', '83f0d6813ed0fdfd90b7ed1ba29d79c5e6afeb510f29b584779583328c069fb8', '0', 12),
('Marie', '83f0d6813ed0fdfd90b7ed1ba29d79c5e6afeb510f29b584779583328c069fb8', '0', 13),
('Jules', '83f0d6813ed0fdfd90b7ed1ba29d79c5e6afeb510f29b584779583328c069fb8', '0', 14),
('Julie', '83f0d6813ed0fdfd90b7ed1ba29d79c5e6afeb510f29b584779583328c069fb8', '0', 15),
('Clem', '83f0d6813ed0fdfd90b7ed1ba29d79c5e6afeb510f29b584779583328c069fb8', '0', 16),
('Didier', '83f0d6813ed0fdfd90b7ed1ba29d79c5e6afeb510f29b584779583328c069fb8', '0', 17),
('Dromie', '83f0d6813ed0fdfd90b7ed1ba29d79c5e6afeb510f29b584779583328c069fb8', '0', 18),
('Yvail', '83f0d6813ed0fdfd90b7ed1ba29d79c5e6afeb510f29b584779583328c069fb8', '0', 19),
('Levi', '83f0d6813ed0fdfd90b7ed1ba29d79c5e6afeb510f29b584779583328c069fb8', '0', 20),
('Uluc', '83f0d6813ed0fdfd90b7ed1ba29d79c5e6afeb510f29b584779583328c069fb8', '0', 21),
('Mohammed', '83f0d6813ed0fdfd90b7ed1ba29d79c5e6afeb510f29b584779583328c069fb8', '0', 22),
('Yannis', '83f0d6813ed0fdfd90b7ed1ba29d79c5e6afeb510f29b584779583328c069fb8', '0', 23),
('Anna', '83f0d6813ed0fdfd90b7ed1ba29d79c5e6afeb510f29b584779583328c069fb8', '0', 24),
('Imen', '83f0d6813ed0fdfd90b7ed1ba29d79c5e6afeb510f29b584779583328c069fb8', '0', 25),
('Yvick', '19d44b099188e618eb4f224356308a766d1257b345fddf98c86ba65c1a247698', '0', 26),
('Urssaf', '19d44b099188e618eb4f224356308a766d1257b345fddf98c86ba65c1a247698', '0', 27),
('Pole', '19d44b099188e618eb4f224356308a766d1257b345fddf98c86ba65c1a247698', '0', 28),
('Jack', '19d44b099188e618eb4f224356308a766d1257b345fddf98c86ba65c1a247698', '0', 29),
('Igor', '19d44b099188e618eb4f224356308a766d1257b345fddf98c86ba65c1a247698', '0', 30);

INSERT INTO `consultation` (`consultid`, `cdate`, `ctime`, `price`, `patid`, `docid`) VALUES
(1, '2022-05-30', '13:30:00', 25, 29, 6),
(2, '2022-05-30', '14:30:00', 25, 29, 6),
(3, '2022-05-30', '16:30:00', 25, 29, 6),
(4, '2022-05-30', '17:30:00', 25, 29, 6),
(5, '2022-05-30', '18:00:00', 25, 29, 6),
(6, '2022-06-16', '14:00:00', 25, 1, 2),
(7, '2022-06-16', '16:30:00', 25, 1, 2),
(8, '2022-06-16', '13:00:00', 25, 1, 2),
(9, '2022-05-31', '15:00:00', 25, 1, 11),
(10, '2022-08-24', '17:30:00', 25, 1, 2),
(11, '2022-05-30', '13:30:00', 25, 30, 7),
(12, '2022-10-12', '15:30:00', 25, 30, 9),
(13, '2022-06-24', '14:30:00', 25, 1, 4);

INSERT INTO `labo` (`laboid`, `type`, `dispo`, `room`) VALUES
(1, 'Radiologie', '1', 'LA100'),
(2, 'Radiologie', '1', 'LA101'),
(3, 'Prise de sang', '1', 'LA102'),
(4, 'Prise de sang', '1', 'LA103'),
(5, 'Test Covid', '1', 'LA104');

INSERT INTO `patient` (`socialno`, `address`, `userid`) VALUES
('1234567891011', '6 rue de la Paix Paris 75000', 26),
('1234567891012', '16 rue de la Paix Paris 75000', 27),
('1234567891013', '8 Av Foucaud Paris 75000', 28),
('1234567891014', '987 rue Mourette Paris 75000', 29),
('1234567891015', '100 impasse Frikadel Paris 75000', 30);

INSERT INTO `staff` (`speciality`, `room`, `dispo`, `userid`) VALUES
('Admin', 'E110', '1', 1),
('Generaliste', 'EM101', '1', 2),
('Generaliste', 'EM102', '1', 3),
('Generaliste', 'EM103', '1', 4),
('Generaliste', 'EM201', '1', 5),
('Generaliste', 'EM202', '1', 6),
('Generaliste', 'EM203', '1', 7),
('Generaliste', 'EM204', '1', 8),
('Generaliste', 'EM205', '1', 9),
('Addictologie', 'EM301', '1', 10),
('Addictologie', 'EM302', '1', 11),
('Andrologie', 'EM303', '1', 12),
('Andrologie', 'EM304', '1', 13),
('Cardiologie', 'EM305', '1', 14),
('Cardiologie', 'EM306', '1', 15),
('Dermatologie', 'SE101', '1', 16),
('Dermatologie', 'SE102', '1', 17),
('Gastro-Hepato-Enterologie', 'SE103', '1', 18),
('Gastro-Hepato-Enterologie', 'SE104', '1', 19),
('Gynecologie', 'SE105', '1', 20),
('Gynecologie', 'SE106', '1', 21),
('I.S.T.', 'SE201', '1', 22),
('I.S.T.', 'SE202', '1', 23),
('Osteopathie', 'SE203', '1', 24),
('Osteopathie', 'SE204', '1', 25);

INSERT INTO `user` (`userid`, `fname`, `lname`, `dob`, `tel`, `mail`, `photopath`) VALUES
(1, 'Pilou', 'Letoq', '2001-03-03', '0788194587', 'pilou@letoq.ece', NULL),
(2, 'Luc', 'Leboss', '2001-03-03', '0788194587', 'luc@leboss.ece', '../public/images/doc/b1.jpg'),
(3, 'Mariese', 'Lamousse', '2001-03-03', '0788194587', 'mariese@lamousse.ece', '../public/images/doc/g1.jpg'),
(4, 'Halexis', 'Hess', '2001-03-03', '0788194587', 'halexis@hess.ece', '../public/images/doc/b2.jpg'),
(5, 'Pierre', 'Dupont', '2001-03-03', '0788194587', 'pierre@dupont.ece', '../public/images/doc/b3.jpg'),
(6, 'Paul', 'Yvonnar', '2001-03-03', '0788191010', 'paul@yvonnar.ece', '../public/images/doc/b4.jpg'),
(7, 'Jacques', 'Uflick', '2001-03-03', '0788465987', 'jacques@uflick.ece', '../public/images/doc/b5.jpg'),
(8, 'Mule', 'Grimol', '2001-03-03', '0733394587', 'mule@grimol.ece', '../public/images/doc/b6.jpg'),
(9, 'Ivana', 'Labij', '2001-03-03', '0780097587', 'ivana@labij.ece', '../public/images/doc/g2.jpg'),
(10, 'Laurie', 'Ouelas', '2001-03-03', '0666194587', 'laurie@ouelas.ece', '../public/images/doc/g3.jpg'),
(11, 'Patrik', 'Dufront', '2001-03-03', '0780094587', 'patrik@dufront.ece', '../public/images/doc/b7.jpg'),
(12, 'Martin', 'Ladudd', '2001-03-03', '0788194587', 'luc@leboss.ece', '../public/images/doc/b8.jpg'),
(13, 'Marie', 'Gfdgccc', '2001-03-03', '0788194587', 'mariese@lamousse.ece', '../public/images/doc/g4.jpg'),
(14, 'Jules', 'Ututut', '2001-03-03', '0788194587', 'halexis@hess.ece', '../public/images/doc/b9.jpg'),
(15, 'Julie', 'Yresfu', '2001-03-03', '0788194587', 'pierre@dupont.ece', '../public/images/doc/g5.jpg'),
(16, 'Clem', 'Urugne', '2001-03-03', '0788191010', 'paul@yvonnar.ece', '../public/images/doc/g6.jpg'),
(17, 'Didier', 'Hossego', '2001-03-03', '0788465987', 'jacques@uflick.ece', '../public/images/doc/b10.jpg'),
(18, 'Dromie', 'Paryy', '2001-03-03', '0733394587', 'mule@grimol.ece', '../public/images/doc/g7.jpg'),
(19, 'Yvail', 'Versacce', '2001-03-03', '0780097587', 'ivana@labij.ece', '../public/images/doc/b11.jpg'),
(20, 'Levi', 'Guqui', '2001-03-03', '0666194587', 'laurie@ouelas.ece', '../public/images/doc/b12.jpg'),
(21, 'Uluc', 'Dupied', '2001-03-03', '0780094587', 'patrik@dufront.ece', '../public/images/doc/b13.jpg'),
(22, 'Mohammed', 'Lecrak', '2001-03-03', '0788194587', 'luc@leboss.ece', '../public/images/doc/b14.jpg'),
(23, 'Yannis', 'Lamoule', '2001-03-03', '0788194587', 'mariese@lamousse.ece', '../public/images/doc/b15.jpg'),
(24, 'Anna', 'Hessdeouf', '2001-03-03', '0788194587', 'halexis@hess.ece', '../public/images/doc/g8.jpg'),
(25, 'Imen', 'Delaped', '2001-03-03', '0788194587', 'pierre@dupont.ece', '../public/images/doc/g9.jpg'),
(26, 'Yvick', 'Fritte', '2001-03-03', '0788191010', 'paul@yvonnar.ece', NULL),
(27, 'Urssaf', 'Ugryve', '2001-03-03', '0788465987', 'jacques@uflick.ece', NULL),
(28, 'Pole', 'Emploi', '2001-03-03', '0733394587', 'mule@grimol.ece', NULL),
(29, 'Jack', 'Ichane', '2001-03-03', '0780097587', 'ivana@labij.ece', NULL),
(30, 'Igor', 'Dossemor', '2001-03-03', '0666194587', 'laurie@ouelas.ece', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
