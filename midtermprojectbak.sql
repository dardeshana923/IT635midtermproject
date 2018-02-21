-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: localhost    Database: midtermproject
-- ------------------------------------------------------
-- Server version	5.7.21-0ubuntu0.16.04.1

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
-- Table structure for table `ticketsystem`
--

DROP TABLE IF EXISTS `ticketsystem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ticketsystem` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CompanyName` varchar(1000) DEFAULT NULL,
  `ContactName` varchar(1000) DEFAULT NULL,
  `AssignedTech` varchar(3) DEFAULT NULL,
  `CustomerPhone` varchar(10) DEFAULT NULL,
  `CustomerEmail` varchar(500) DEFAULT NULL,
  `Issue` longtext,
  `Notes` longtext,
  `Status` varchar(8) DEFAULT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ticketsystem`
--

LOCK TABLES `ticketsystem` WRITE;
/*!40000 ALTER TABLE `ticketsystem` DISABLE KEYS */;
INSERT INTO `ticketsystem` VALUES (1,'ABC','John Smith','DAA','9088988888','j.smith@gmail.com','Printer is not working.','Tech will contact you.','Working','2018-02-10 20:38:20'),(2,'ABC','Charlie Geller','DAA','9088988998','c.geller@gmail.com','Keyboard not working.','Had to plug in the keyboard.','Resolved','2018-02-10 21:17:19'),(3,'ABC','Tony Stark','DAA','9088981000','t.stark@gmail.com','Iron man suit not flying.',NULL,'Open','2018-02-10 21:20:18'),(4,'ABC','Jenna Brown','DAA','9088981010','j.brown@gmail.com','Internet not working.','Plugged in ethernet cable','Closed','2018-02-10 21:34:53'),(5,'Google','Peter Griffin','ZAC','9088981020','p.griffin@gmail.com','Broken TV.','He forgot to turn it on.','Working','2018-02-16 02:08:25'),(6,'Amazon','Jeff Bezos','MOD','9088981030','j.bezos@gmail.com','Needs to install antivirus.','','Open','2018-02-16 02:12:10'),(7,'Samsung','John Doe','HTC','9088981234','j.doe@gmail.com','Galaxy S8 does not turn on.','Dropped it in water. Need a new one.','Closed','2018-02-17 19:38:24'),(8,'Samsung','John Doe','HTC','9088981234','j.doe@gmail.com','Galaxy S8 does not turn on.','Dropped it in water. Need a new one.','Closed','2018-02-17 19:39:27');
/*!40000 ALTER TABLE `ticketsystem` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-02-19  4:31:19
