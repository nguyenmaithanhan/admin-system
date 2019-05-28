# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.4.5-MariaDB-1:10.4.5+maria~bionic)
# Datenbank: db
# Erstellt am: 2019-05-28 13:10:17 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Export von Tabelle customers
# ------------------------------------------------------------

DROP TABLE IF EXISTS `customers`;

CREATE TABLE `customers` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Rechtsform` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Unterzeile` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Kurztext` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Profil` text CHARACTER SET utf8 DEFAULT NULL,
  `Kategorie_Auswahl` int(11) DEFAULT NULL,
  `Status` tinyint(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;

INSERT INTO `customers` (`id`, `Name`, `Rechtsform`, `Unterzeile`, `Kurztext`, `Profil`, `Kategorie_Auswahl`, `Status`)
VALUES
	(2,'BASF','GmbH','The Chemical Company','Chemie-Konzern und Global Player','Die BASF SE ist ein deutscher Chemiekonzern und der nach Umsatz weltweit größte Chemiekonzern. Insgesamt sind 115.490 Mitarbeiter in mehr als 80 Ländern bei der BASF beschäftigt. Die BASF betreibt über 390 Produktionsstandorte weltweit, ihr Hauptsitz befindet sich in Ludwigshafen am Rhein.',2,1),
	(3,'BOSCH','GmbH','Technik fürs Leben','Mischkonzern','Bosch ist ein multinationales deutsches Unternehmen. Es ist tätig als Automobilzulieferer, Hersteller von Gebrauchsgütern und Industrie- und Gebäudetechnik und darüber hinaus in der automatisierten Verpackungstechnik, wo Bosch den führenden Platz einnimmt.',4,0),
	(4,'L’Oréal','Société Anonyme','World Leader in Beauty','Größter globaler Kosmetikhersteller','Die L’Oréal S.A. ist ein französischer Konsumgüterkonzern mit Hauptsitz in Paris und derzeit der größte Kosmetikhersteller der Welt.',5,1);

/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;


# Export von Tabelle categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Kategoriename` varchar(11) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;

INSERT INTO `categories` (`id`, `Kategoriename`)
VALUES
	(2,'Chemie'),
	(4,'Elektronik'),
	(5,'Kosmetik');

/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
