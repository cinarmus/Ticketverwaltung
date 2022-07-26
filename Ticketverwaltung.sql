-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server Version:               10.7.3-MariaDB - mariadb.org binary distribution
-- Server Betriebssystem:        Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Exportiere Struktur von Tabelle ticketverwaltung.abteilungt
DROP TABLE IF EXISTS `abteilungt`;
CREATE TABLE IF NOT EXISTS `abteilungt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `c_ts` timestamp NOT NULL DEFAULT current_timestamp(),
  `m_ts` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `literal` text DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

-- Exportiere Daten aus Tabelle ticketverwaltung.abteilungt: ~3 rows (ungefähr)
DELETE FROM `abteilungt`;
/*!40000 ALTER TABLE `abteilungt` DISABLE KEYS */;
INSERT INTO `abteilungt` (`id`, `c_ts`, `m_ts`, `literal`, `sort`) VALUES
	(1, '2022-07-21 15:39:04', '2022-07-21 15:39:04', 'Hausmeister', NULL),
	(2, '2022-07-21 15:39:04', '2022-07-21 15:39:04', 'Elektriker', NULL),
	(3, '2022-07-21 15:39:04', '2022-07-21 15:39:04', 'Netzwerktechnik', NULL);
/*!40000 ALTER TABLE `abteilungt` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle ticketverwaltung.favoriten
DROP TABLE IF EXISTS `favoriten`;
CREATE TABLE IF NOT EXISTS `favoriten` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `c_ts` timestamp NOT NULL DEFAULT current_timestamp(),
  `m_ts` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `task` text DEFAULT NULL,
  `task_label` text DEFAULT NULL,
  `datensatz_id` int(11) DEFAULT NULL,
  `User_uid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Exportiere Daten aus Tabelle ticketverwaltung.favoriten: ~0 rows (ungefähr)
DELETE FROM `favoriten`;
/*!40000 ALTER TABLE `favoriten` DISABLE KEYS */;
/*!40000 ALTER TABLE `favoriten` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle ticketverwaltung.gruppet
DROP TABLE IF EXISTS `gruppet`;
CREATE TABLE IF NOT EXISTS `gruppet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `c_ts` timestamp NOT NULL DEFAULT current_timestamp(),
  `m_ts` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `literal` text DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

-- Exportiere Daten aus Tabelle ticketverwaltung.gruppet: ~4 rows (ungefähr)
DELETE FROM `gruppet`;
/*!40000 ALTER TABLE `gruppet` DISABLE KEYS */;
INSERT INTO `gruppet` (`id`, `c_ts`, `m_ts`, `literal`, `sort`) VALUES
	(1, '2022-07-21 15:39:04', '2022-07-21 15:39:04', 'HS-Mitarbeiter', NULL),
	(2, '2022-07-21 15:39:04', '2022-07-21 15:39:04', 'TB-Mitarbeiter', NULL),
	(3, '2022-07-21 15:39:04', '2022-07-21 15:39:04', 'TB-Koordinator', NULL),
	(4, '2022-07-21 15:39:04', '2022-07-21 15:39:04', 'Superadmin', NULL);
/*!40000 ALTER TABLE `gruppet` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle ticketverwaltung.hsmitarbeiter
DROP TABLE IF EXISTS `hsmitarbeiter`;
CREATE TABLE IF NOT EXISTS `hsmitarbeiter` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `c_ts` timestamp NOT NULL DEFAULT current_timestamp(),
  `m_ts` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Name_Vorname` text DEFAULT NULL,
  `Name_Nachname` text DEFAULT NULL,
  `Adresse_Straße` text DEFAULT NULL,
  `Adresse_PLZ` int(11) DEFAULT NULL,
  `Adresse_Ort` text DEFAULT NULL,
  `_User_uid` int(11) DEFAULT NULL,
  UNIQUE KEY `idx0` (`id`),
  KEY `idx1` (`m_ts`),
  KEY `_User_uid` (`_User_uid`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb3;

-- Exportiere Daten aus Tabelle ticketverwaltung.hsmitarbeiter: ~1 rows (ungefähr)
DELETE FROM `hsmitarbeiter`;
/*!40000 ALTER TABLE `hsmitarbeiter` DISABLE KEYS */;
INSERT INTO `hsmitarbeiter` (`id`, `c_ts`, `m_ts`, `Name_Vorname`, `Name_Nachname`, `Adresse_Straße`, `Adresse_PLZ`, `Adresse_Ort`, `_User_uid`) VALUES
	(100, '2022-07-21 13:05:20', '2022-07-21 13:05:20', 'Mustafa', 'Cinar', 'Köhlstraße 2', 71636, 'Ludwigsburg', NULL);
/*!40000 ALTER TABLE `hsmitarbeiter` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle ticketverwaltung.kategoriet
DROP TABLE IF EXISTS `kategoriet`;
CREATE TABLE IF NOT EXISTS `kategoriet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `c_ts` timestamp NOT NULL DEFAULT current_timestamp(),
  `m_ts` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `literal` text DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

-- Exportiere Daten aus Tabelle ticketverwaltung.kategoriet: ~4 rows (ungefähr)
DELETE FROM `kategoriet`;
/*!40000 ALTER TABLE `kategoriet` DISABLE KEYS */;
INSERT INTO `kategoriet` (`id`, `c_ts`, `m_ts`, `literal`, `sort`) VALUES
	(1, '2022-07-21 15:39:04', '2022-07-21 15:39:04', 'Gebäudemangel', NULL),
	(2, '2022-07-21 15:39:04', '2022-07-21 15:39:04', 'Elektrik', NULL),
	(3, '2022-07-21 15:39:04', '2022-07-21 15:39:04', 'Vorlesungsraum', NULL),
	(4, '2022-07-21 15:39:04', '2022-07-21 15:39:04', 'Event', NULL);
/*!40000 ALTER TABLE `kategoriet` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle ticketverwaltung.prioritätt
DROP TABLE IF EXISTS `prioritätt`;
CREATE TABLE IF NOT EXISTS `prioritätt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `c_ts` timestamp NOT NULL DEFAULT current_timestamp(),
  `m_ts` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `literal` text DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

-- Exportiere Daten aus Tabelle ticketverwaltung.prioritätt: ~3 rows (ungefähr)
DELETE FROM `prioritätt`;
/*!40000 ALTER TABLE `prioritätt` DISABLE KEYS */;
INSERT INTO `prioritätt` (`id`, `c_ts`, `m_ts`, `literal`, `sort`) VALUES
	(1, '2022-07-21 15:39:04', '2022-07-21 15:39:04', 'akut', NULL),
	(2, '2022-07-21 15:39:04', '2022-07-21 15:39:04', 'möglichst bald', NULL),
	(3, '2022-07-21 15:39:04', '2022-07-21 15:39:04', 'konkreter termin', NULL);
/*!40000 ALTER TABLE `prioritätt` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle ticketverwaltung.statust
DROP TABLE IF EXISTS `statust`;
CREATE TABLE IF NOT EXISTS `statust` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `c_ts` timestamp NOT NULL DEFAULT current_timestamp(),
  `m_ts` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `literal` text DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

-- Exportiere Daten aus Tabelle ticketverwaltung.statust: ~5 rows (ungefähr)
DELETE FROM `statust`;
/*!40000 ALTER TABLE `statust` DISABLE KEYS */;
INSERT INTO `statust` (`id`, `c_ts`, `m_ts`, `literal`, `sort`) VALUES
	(1, '2022-07-21 15:39:04', '2022-07-21 15:39:04', 'offen', NULL),
	(2, '2022-07-21 15:39:04', '2022-07-21 15:39:04', 'zugeteilt', NULL),
	(3, '2022-07-21 15:39:04', '2022-07-21 15:39:04', 'in Bearbeitung', NULL),
	(4, '2022-07-21 15:39:04', '2022-07-21 15:39:04', 'abgeschlossen', NULL),
	(5, '2022-07-21 15:39:04', '2022-07-21 15:39:04', 'abgelehnt', NULL);
/*!40000 ALTER TABLE `statust` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle ticketverwaltung.tbkoordinator
DROP TABLE IF EXISTS `tbkoordinator`;
CREATE TABLE IF NOT EXISTS `tbkoordinator` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `c_ts` timestamp NOT NULL DEFAULT current_timestamp(),
  `m_ts` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Name_Vorname` text DEFAULT NULL,
  `Name_Nachname` text DEFAULT NULL,
  `Adresse_Straße` text DEFAULT NULL,
  `Adresse_PLZ` int(11) DEFAULT NULL,
  `Adresse_Ort` text DEFAULT NULL,
  `_User_uid` int(11) DEFAULT NULL,
  UNIQUE KEY `idx0` (`id`),
  KEY `idx1` (`m_ts`),
  KEY `_User_uid` (`_User_uid`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=utf8mb3;

-- Exportiere Daten aus Tabelle ticketverwaltung.tbkoordinator: ~1 rows (ungefähr)
DELETE FROM `tbkoordinator`;
/*!40000 ALTER TABLE `tbkoordinator` DISABLE KEYS */;
INSERT INTO `tbkoordinator` (`id`, `c_ts`, `m_ts`, `Name_Vorname`, `Name_Nachname`, `Adresse_Straße`, `Adresse_PLZ`, `Adresse_Ort`, `_User_uid`) VALUES
	(100, '2022-07-21 13:04:36', '2022-07-21 13:04:36', 'Mustafa', 'Cinar', 'Köhlstraße 2', 71636, 'Ludwigsburg', NULL),
	(101, '2022-07-23 11:48:02', '2022-07-23 11:48:02', 'Mustafa', 'Cinar', 'Köhlstraße', 12312, 'Ludwigsburg', NULL);
/*!40000 ALTER TABLE `tbkoordinator` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle ticketverwaltung.tbmitarbeiter
DROP TABLE IF EXISTS `tbmitarbeiter`;
CREATE TABLE IF NOT EXISTS `tbmitarbeiter` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `c_ts` timestamp NOT NULL DEFAULT current_timestamp(),
  `m_ts` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Name_Vorname` text DEFAULT NULL,
  `Name_Nachname` text DEFAULT NULL,
  `Abteilung` int(11) DEFAULT NULL,
  `Adresse_Straße` text DEFAULT NULL,
  `Adresse_PLZ` int(11) DEFAULT NULL,
  `Adresse_Ort` text DEFAULT NULL,
  `_User_uid` int(11) DEFAULT NULL,
  UNIQUE KEY `idx0` (`id`),
  KEY `idx1` (`m_ts`),
  KEY `_User_uid` (`_User_uid`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=utf8mb3;

-- Exportiere Daten aus Tabelle ticketverwaltung.tbmitarbeiter: ~3 rows (ungefähr)
DELETE FROM `tbmitarbeiter`;
/*!40000 ALTER TABLE `tbmitarbeiter` DISABLE KEYS */;
INSERT INTO `tbmitarbeiter` (`id`, `c_ts`, `m_ts`, `Name_Vorname`, `Name_Nachname`, `Abteilung`, `Adresse_Straße`, `Adresse_PLZ`, `Adresse_Ort`, `_User_uid`) VALUES
	(1, '2022-07-20 21:06:01', '2022-07-20 21:11:01', 'Whaid', 'Dar', 0, 'Tiefenbronner Strasse 1', 75175, 'Pforzheim', NULL),
	(2, '2022-07-20 21:10:17', '2022-07-20 21:10:54', 'Mustafa', 'Cinar', 0, 'Koehlstrasse 2', 71636, 'Ludwigsburg', NULL),
	(3, '2022-07-20 21:11:11', '2022-07-20 21:11:38', 'Hans', 'Peter', 0, 'Tiefenbronner Strasse 2', 75175, 'Pforzheim', NULL),
	(100, '2022-07-23 10:10:14', '2022-07-23 10:10:14', 'Whaid', 'Dar', 1, 'Tiefenbronner Straße 1', 12345, 'Pforzheim', NULL),
	(101, '2022-07-23 11:47:13', '2022-07-23 11:47:13', 'Mustafa', 'Cinar', 2, 'Köhlstraße', 123123, 'Ludwigsburg', NULL);
/*!40000 ALTER TABLE `tbmitarbeiter` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle ticketverwaltung.ticket
DROP TABLE IF EXISTS `ticket`;
CREATE TABLE IF NOT EXISTS `ticket` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `c_ts` timestamp NOT NULL DEFAULT current_timestamp(),
  `m_ts` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `datum` date DEFAULT NULL,
  `Titel` text DEFAULT NULL,
  `Beschreibung` text DEFAULT NULL,
  `Frist` date DEFAULT NULL,
  `Status` int(11) DEFAULT NULL,
  `Kategorie` int(11) DEFAULT NULL,
  `Priorität` int(11) DEFAULT NULL,
  `Anhang` text DEFAULT NULL,
  `owner_id` int(11) DEFAULT NULL,
  `created_id` int(11) DEFAULT NULL,
  `modified_id` int(11) DEFAULT NULL,
  `_TBKoordinator` int(11) DEFAULT NULL,
  `_TBMitarbeiter` int(11) DEFAULT NULL,
  `Bemerkung` int(11) DEFAULT NULL,
  UNIQUE KEY `idx0` (`id`),
  KEY `idx1` (`m_ts`)
) ENGINE=InnoDB AUTO_INCREMENT=116 DEFAULT CHARSET=utf8mb3;

-- Exportiere Daten aus Tabelle ticketverwaltung.ticket: ~6 rows (ungefähr)
DELETE FROM `ticket`;
/*!40000 ALTER TABLE `ticket` DISABLE KEYS */;
INSERT INTO `ticket` (`id`, `c_ts`, `m_ts`, `datum`, `Titel`, `Beschreibung`, `Frist`, `Status`, `Kategorie`, `Priorität`, `Anhang`, `owner_id`, `created_id`, `modified_id`, `_TBKoordinator`, `_TBMitarbeiter`, `Bemerkung`) VALUES
	(1, '2022-06-21 20:53:36', '2022-07-21 17:09:37', '2022-06-21', 'Steckdose kaputt', 'Steckdose ist kaputt', '2022-06-21', 1, 2, 1, 'room.png', NULL, NULL, NULL, NULL, NULL, NULL),
	(2, '2022-06-21 20:56:56', '2022-07-22 10:54:51', '2022-06-21', 'Licht fehlt', 'Licht fehlt in Raum XY', '2022-06-25', 1, 3, 2, 'microsoft holelens.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
	(3, '2022-06-21 20:58:04', '2022-07-21 17:09:53', '2022-06-21', 'Verlängerungskabel', 'Organisation eines Verlängerungskabels', '2022-06-25', 1, 4, 1, 'order.png', NULL, NULL, NULL, NULL, NULL, NULL),
	(4, '2022-06-21 20:59:17', '2022-07-23 19:08:35', '2022-06-21', 'Schloss kaputt', 'Raum XYQ', '2022-06-25', 3, 1, 1, 'dims.jpg', 2, NULL, NULL, NULL, NULL, NULL),
	(5, '2022-07-20 20:22:37', '2022-07-22 10:55:03', '2022-07-20', 'Stuhl quitscht', 'Stuhl im Raum xyz in der 2. Reihe macht Geräusche', '2022-07-28', 2, 3, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(6, '2022-06-21 21:13:30', '2022-07-22 10:55:05', '2022-07-20', 'Tisch kaputt', 'Bitte austauschen!', '2022-06-22', 4, 1, 3, '', NULL, NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `ticket` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle ticketverwaltung.ticket_hsmitarbeiter
DROP TABLE IF EXISTS `ticket_hsmitarbeiter`;
CREATE TABLE IF NOT EXISTS `ticket_hsmitarbeiter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `c_ts` timestamp NOT NULL DEFAULT current_timestamp(),
  `m_ts` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `_Ticket_ticket_erstellen` int(11) DEFAULT NULL,
  `_HSMitarbeiter_b` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `_Ticket_ticket_erstellen` (`_Ticket_ticket_erstellen`),
  KEY `_HSMitarbeiter_b` (`_HSMitarbeiter_b`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Exportiere Daten aus Tabelle ticketverwaltung.ticket_hsmitarbeiter: ~0 rows (ungefähr)
DELETE FROM `ticket_hsmitarbeiter`;
/*!40000 ALTER TABLE `ticket_hsmitarbeiter` DISABLE KEYS */;
/*!40000 ALTER TABLE `ticket_hsmitarbeiter` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle ticketverwaltung.user
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `c_ts` timestamp NOT NULL DEFAULT current_timestamp(),
  `m_ts` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Passwort` text DEFAULT NULL,
  `Gruppe` int(11) DEFAULT NULL,
  `Kennung` text DEFAULT NULL,
  `roleid` text DEFAULT NULL,
  UNIQUE KEY `idx0` (`id`),
  KEY `idx1` (`m_ts`),
  KEY `roleid` (`roleid`(1024))
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8mb3;

-- Exportiere Daten aus Tabelle ticketverwaltung.user: ~4 rows (ungefähr)
DELETE FROM `user`;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `c_ts`, `m_ts`, `Passwort`, `Gruppe`, `Kennung`, `roleid`) VALUES
	(100, '2022-07-21 15:39:04', '2022-07-21 15:39:04', '21232f297a57a5a743894a0e4a801fc3', 4, 'admin', ''),
	(102, '2022-07-21 18:40:04', '2022-07-21 18:40:04', 'd0614b31744fc9e5e5be919ff3087031', 3, 'koord', NULL),
	(103, '2022-07-21 18:40:29', '2022-07-21 18:40:29', '34fd9bfb4c87c14909c5b3976c41e527', 2, 'tbma', NULL),
	(104, '2022-07-21 18:40:44', '2022-07-21 18:40:44', '7a08ce7f86dec2ff243aa0f033cc3336', 1, 'hsma', NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle ticketverwaltung.visits
DROP TABLE IF EXISTS `visits`;
CREATE TABLE IF NOT EXISTS `visits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `c_ts` timestamp NOT NULL DEFAULT current_timestamp(),
  `m_ts` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `month` text DEFAULT NULL,
  `visits` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3;

-- Exportiere Daten aus Tabelle ticketverwaltung.visits: ~12 rows (ungefähr)
DELETE FROM `visits`;
/*!40000 ALTER TABLE `visits` DISABLE KEYS */;
INSERT INTO `visits` (`id`, `c_ts`, `m_ts`, `month`, `visits`) VALUES
	(1, '2022-06-19 11:43:02', '2022-06-19 11:43:02', 'Januar', 0),
	(2, '2022-06-19 11:43:02', '2022-06-19 11:43:02', 'Februar', 0),
	(3, '2022-06-19 11:43:02', '2022-06-19 11:43:02', 'März', 0),
	(4, '2022-06-19 11:43:02', '2022-06-19 11:43:02', 'April', 0),
	(5, '2022-06-19 11:43:02', '2022-06-19 11:43:02', 'Mai', 0),
	(6, '2022-06-19 11:43:02', '2022-06-21 21:37:42', 'Juni', 19),
	(7, '2022-06-19 11:43:02', '2022-07-24 12:43:35', 'Juli', 22),
	(8, '2022-06-19 11:43:02', '2022-06-19 11:43:02', 'August', 0),
	(9, '2022-06-19 11:43:02', '2022-06-19 11:43:02', 'September', 0),
	(10, '2022-06-19 11:43:02', '2022-06-19 11:43:02', 'Oktober', 0),
	(11, '2022-06-19 11:43:02', '2022-06-19 11:43:02', 'November', 0),
	(12, '2022-06-19 11:43:02', '2022-06-19 11:43:02', 'Dezember', 0);
/*!40000 ALTER TABLE `visits` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
