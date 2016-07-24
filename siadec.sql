-- MySQL dump 10.13  Distrib 5.5.49, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: siadec
-- ------------------------------------------------------
-- Server version	5.5.49-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Examen`

--
create database siadec;
use siadec;

DROP TABLE IF EXISTS `Examen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Examen` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `responsable` varchar(127) NOT NULL,
  `fecha` date NOT NULL,
  `fecha_imagenes` date NOT NULL,
  `codigo` int(32) NOT NULL,
  `empresa` varchar(127) NOT NULL,
  `observaciones` varchar(255) NOT NULL,
  `equipos` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `img1` varchar(127) NOT NULL,
  `img2` varchar(127) NOT NULL,
  `img3` varchar(127) NOT NULL,
  `user_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `fk_examen_user_id` FOREIGN KEY (`user_id`) REFERENCES `User` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Examen`
--

LOCK TABLES `Examen` WRITE;
/*!40000 ALTER TABLE `Examen` DISABLE KEYS */;
INSERT INTO `Examen` VALUES (1,'Pedro','2016-04-04','2016-04-04',23421,'Aero','observando','equipo 1 2 y 3','-2.416, -80.717','zoom4RarwVexeWu.jpg','zoom10D5mjoJykzP.jpeg','zoom40pJu2y1GSAJ.jpeg',1),(2,'Pedro','2016-04-11','2016-04-11',0,'Aero','observando','equipo 1 2 y 3','','zoom4tzya3IQpXM.jpg','zoom10R2tORs28sf.jpeg','zoom40i1L7EpzW92.jpeg',1),(3,'Pedro','2016-04-10','2016-04-05',23421,'Aero','observando','equipo 1 2 y 3','-2.241, -80.959','zoom4c8YU0VaVFn.jpg','zoom10RAArS6f2pf.jpeg','zoom4083iwJiPlwg.jpeg',1),(4,'Pedro','2016-04-10','2016-04-05',0,'Aero','observando','equipo 1 2 y 3','4.609, -77.377','zoom4eV4sifHy4Z.jpg','zoom10y3w8mv4uJX.jpeg','zoom40kFEb0e9W11.jpeg',1),(5,'eqwrwe','2016-05-24','2016-05-11',0,'werqwe','rwqerwqerqwe','rqewrqwe','-3.294, -65.732','zoom4a0ReR2CP4Q.jpeg','zoom1018sEXljsu6.jpeg','zoom40miXuVYKOix.jpg',1),(6,'Pedro','2016-07-01','2016-06-15',0,'Kakaroto','ninguno','ya sabe','-2.158, -79.917','zoom4sVY2Zv9UiD.jpg','zoom10dNwJS2NkHJ.jpg','zoom40IEMT1HopHe.png',1),(7,'Pedro','2016-07-01','2016-06-15',32141321,'Kakaroto','ninguno','ya sabe','-2.583, -80.135','zoom4knqfGUTNgP.jpg','zoom10eUq7OQeifE.jpg','zoom40mmMqfH16cx.png',1);
/*!40000 ALTER TABLE `Examen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `User`
--

DROP TABLE IF EXISTS `User`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `User` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `User`
--

LOCK TABLES `User` WRITE;
/*!40000 ALTER TABLE `User` DISABLE KEYS */;
INSERT INTO `User` VALUES (1,'Pedro Aim','Hiro Break','pedro_aim@hotmail.com','$2y$10$r10RjHOso8XRgXlBCQKbgOGsybzEBkkomRsCFtna9pFo5QD4BWrpG','ZHmqvtUZsCCzfw985gWKscE55WUeVMyAzmc995uCSnf8v4a7duvPysVGavHE'),(3,'Angel','Guale','adguale@espol.edu.ec','$2y$10$dJgw/eIxgnBaFSGw6uLE/OUDcnjEkCQmJ9Lbuq5OkOMEYC52taJM6',NULL);
/*!40000 ALTER TABLE `User` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-07-24 15:17:23
