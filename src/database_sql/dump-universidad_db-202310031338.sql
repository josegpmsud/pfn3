-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: universidad_db
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.27-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `clases`
--

DROP TABLE IF EXISTS `clases`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clases` (
  `id_clase` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_clase` varchar(250) NOT NULL,
  `id_usuario_maestro` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_clase`),
  UNIQUE KEY `nombre_clase` (`nombre_clase`),
  KEY `id_usuario_maestro` (`id_usuario_maestro`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clases`
--

LOCK TABLES `clases` WRITE;
/*!40000 ALTER TABLE `clases` DISABLE KEYS */;
INSERT INTO `clases` VALUES (1,'Programación I',9),(2,'Valores',10),(3,'Instituto',2),(4,'Scrum',2),(5,'Fisica',2),(6,'Quimica',2),(7,'Ingenieria del Software',7),(8,'Acreditable Redes',2),(9,'Electiva Python',2),(10,'Investigacion de operaciones',2),(11,'Matematica',2),(12,'Fisiologia',8),(13,'Programación II',2),(14,'Programación III',7),(15,'Electiva II',11),(17,'Programación IV',2),(23,'Historia de venezuela',4),(26,'Sistemas I',0),(28,'Ingenieria de alimentos',0),(29,'Inteligencia Emocional',0),(34,'Deporte',18),(37,'php',2);
/*!40000 ALTER TABLE `clases` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inscripciones`
--

DROP TABLE IF EXISTS `inscripciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `inscripciones` (
  `id_inscripcion` int(11) NOT NULL AUTO_INCREMENT,
  `id_clase` int(11) DEFAULT NULL,
  `id_usuario_alumno` int(11) DEFAULT NULL,
  `nota_alumno` float DEFAULT NULL,
  `mensaje` text DEFAULT NULL,
  PRIMARY KEY (`id_inscripcion`),
  KEY `id_clase` (`id_clase`),
  KEY `id_usuario_alumno` (`id_usuario_alumno`),
  CONSTRAINT `inscripciones_ibfk_1` FOREIGN KEY (`id_clase`) REFERENCES `clases` (`id_clase`),
  CONSTRAINT `inscripciones_ibfk_2` FOREIGN KEY (`id_usuario_alumno`) REFERENCES `usuarios` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=159 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inscripciones`
--

LOCK TABLES `inscripciones` WRITE;
/*!40000 ALTER TABLE `inscripciones` DISABLE KEYS */;
INSERT INTO `inscripciones` VALUES (17,10,16,NULL,NULL),(18,9,16,NULL,NULL),(19,4,16,5,'felicitaciones'),(29,9,15,NULL,NULL),(30,3,15,5,'bien rrr 855fdsf'),(31,1,15,8,'recupera pronto'),(32,4,15,17,'puedes mejorar'),(33,2,15,NULL,NULL),(34,17,16,NULL,NULL),(35,17,17,NULL,NULL),(36,12,17,NULL,NULL),(37,8,17,8,NULL),(38,15,17,NULL,NULL),(39,9,17,NULL,NULL),(40,5,17,15,'mejoraste'),(41,7,17,NULL,NULL),(42,3,17,9,'wooow 888  sdfsd'),(43,10,17,NULL,NULL),(44,11,17,NULL,NULL),(45,1,17,17,'solo te falto la ultima'),(46,13,17,NULL,NULL),(47,14,17,NULL,NULL),(48,6,17,NULL,NULL),(49,4,17,10,'cuidado puedes reprobar'),(50,2,17,NULL,NULL),(58,26,16,NULL,NULL),(82,8,21,NULL,NULL),(89,28,21,NULL,NULL),(94,1,21,NULL,NULL),(102,4,21,18,'el proximo es mas facil'),(103,2,21,NULL,NULL),(104,3,21,15,NULL),(105,13,21,NULL,NULL),(106,26,21,NULL,NULL),(137,23,3,17.75,'Esta mejorando rapidamente'),(138,10,3,NULL,NULL),(139,13,3,NULL,NULL),(140,17,3,NULL,NULL),(141,15,3,NULL,NULL),(142,28,3,NULL,NULL),(143,3,3,20,NULL),(144,13,3,NULL,NULL),(145,6,3,18,'Te equivocaste en la ultima'),(146,11,3,NULL,NULL),(149,14,23,NULL,NULL),(150,11,23,NULL,NULL),(151,9,23,NULL,NULL),(152,5,23,NULL,NULL),(153,12,23,NULL,NULL),(154,23,23,0,NULL),(155,28,23,NULL,NULL),(156,7,23,NULL,NULL),(157,3,23,NULL,NULL),(158,1,23,NULL,NULL);
/*!40000 ALTER TABLE `inscripciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) NOT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'administrador'),(2,'maestro'),(3,'alumno');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `dni` varchar(20) NOT NULL,
  `email` varchar(250) NOT NULL,
  `contrasena` varchar(250) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `direccion` varchar(250) DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `id_rol` int(11) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `dni` (`dni`),
  UNIQUE KEY `email` (`email`),
  KEY `id_rol` (`id_rol`),
  CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'19350158','admin@admin','$2y$10$knfhbkITcb8w7fmcKucwQ.BWelcFSl36AMxrKPEpSN8zgVdmeK6k2','José Gregorio','Perez Montilla','Santa Ana, Las Golondrinas, Carrera 1 entre calles 10 y 11','1989-07-19',1,1),(2,'20617015','maestro@maestro','$2y$10$Pb2URvjIpDjcrCZ4uW2O/O0KLEuTaNBZXp2ywLHpLepMIFMXR0yJW','Harold','Carazas','Peru','1998-10-03',1,2),(3,'30478956','alumno@alumno','$2y$10$cpRzwYbQ6QPQOw0Q/XrlP.iumc3ngmDf.cBpmAQxZR9WPy6mbQZo.','Marco Antonio','Rivas Omaña','San Cristobal','2023-09-04',1,3),(4,'32857859','maestro2@maestro2','$2y$10$6/zMQhI2/MGiL8nxUIYQmegs222oA.3N8KLU3wlsjn1jmFY3T6w0e','maestro2','maestro2','direccion maestro2','2023-09-27',1,2),(5,'8956234','maestro3@maestro3','$2y$10$1YS7XhvcubLZhSFTj.mISOnxmoRJY/X9CS7aozOUK2HRYnSPs1CSW','maestro3','maestro3','direccion maestro3','2023-09-01',0,2),(7,'5464323','maestro5@maestro5','$2y$10$FSeadMlMo6wcGzfoHsMT6uYZ8o4MR5bmSLH5ZgBn.Nf0JoLa17lSq','maestro5 nombre','maestro5 apellido','maestro5 direccion','2023-05-01',1,2),(8,'6546','maestro6@maestro6','$2y$10$tZMNZT0eRO5Krsc1hOV1D.W85cQ2KpQyJq30WMJPNYZo8dFDVAun.','maestro6','maestro6','dir maestro6','2023-08-16',1,2),(9,'9999','blanco@blanco','$2y$10$tbNw1dR2lFrFB5k/L1sp2OYsOHCHO6GQPoyB03.2RCWJDnDdM/BDy','blanco','apellido blanco','direccion blanco','2023-09-05',1,2),(10,'65464sdf','maestro8@maestro8','$2y$10$1KJ00.KMwVCGbVLqFNayq.XvPltjnAulEvk.qSdwJqvp8/bzCJ8k.','n maestro8','a maestro8','d maestro8','2023-08-01',1,2),(11,'345345','a@a','$2y$10$Gl04oRZT4RrdbfVbQoyDs.qTAkvOgU/uRHnv6QbuC8IeW4YfWUA1K','a','a b','asddfdsfgdsfhg','2023-08-28',1,2),(15,'45765','alumno2@alumno2','$2y$10$GGXsUpz3TJsIcLAr84y0P.2J2nfRfJa4ARNic7Snij.gmSTD3NRJG','alumno2','alumno2','direccion alumno2','1989-07-19',0,3),(16,'987651654','alumno3@alumno3','$2y$10$CofUcd3tzfySQqkOHYcCKe2igzzreHo2eADf.f3Q958CAWwGErGuy','alumno3','alumno3','direccion alumno3','2023-09-17',1,3),(17,'1111111','alumno4@alumno','$2y$10$WhSZ386hgOVNuunGl8vaPuFHc4f0d2QMI9JcKTWEp8ajGKLFQxUWi','alumno4','alumno4','direccion alumno4','2023-09-05',1,3),(18,'55555','cindy@cindy','$2y$10$upyICMO2f/BgvrwnXEFfquO32mmbVlJeD5Bry473WUvGISr9Jt/.6','Cindy','Bonilla de Pérez','Santa Ana, Las Golondrinas, Carrera 1 entre calles 10 y 11','1991-05-05',1,2),(20,'9846','k@k','$2y$10$zNneMWQB0i9VUz.71SMwOuYft2YYJnxFQqaEYFiqiDuGRR/jqsoBu','alumnoK122222','AlumnoKK','KKKK','2023-10-11',1,3),(21,'4444','pedro@pedro','$2y$10$MfOlCShYEB./mXa7c28KjuVWr.Zo9zSNdQoxIqDUZOVSm/ugbxRBu','Pedro','Navarro','Santa Martha','1983-07-19',1,3),(23,'27893589','elimar@elimar','$2y$10$l0GWiy3m0ukkCNmRGbLNJeoBCpzYZKwFsd4IefQ7sOHVs5maEL/R2','Elimar','Cote',' carrera 3 calle 16','2001-01-31',0,2),(27,'45544554','maestro10@maestro10','$2y$10$YMqZkWzETpg5bZ9PgUttiOHCpp2EH2XK.sL4xK8NxcrqeLsCaGaU6','Carlos','Delgado','Margarita','2021-06-15',1,2),(30,'232323','admin2@admin2','$2y$10$0I1xzP7R1jZ9ID/9oUK6Oei79qLF37PsHE0JFYWzYLNKfcECzOzN6','admin2','admin2','Santa Cruz','2023-10-03',1,1);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'universidad_db'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-10-03 13:38:11
