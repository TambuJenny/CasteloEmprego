-- MariaDB dump 10.19  Distrib 10.5.19-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: socialapp
-- ------------------------------------------------------
-- Server version	10.5.19-MariaDB-0+deb11u1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `adesao`
--

DROP TABLE IF EXISTS `adesao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adesao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idAnucio` int(11) DEFAULT NULL,
  `idUserCliente` int(11) DEFAULT NULL,
  `data` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `idAnucio` (`idAnucio`),
  KEY `idUserCliente` (`idUserCliente`),
  CONSTRAINT `adesao_ibfk_1` FOREIGN KEY (`idAnucio`) REFERENCES `anucio` (`id`),
  CONSTRAINT `adesao_ibfk_2` FOREIGN KEY (`idUserCliente`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adesao`
--

LOCK TABLES `adesao` WRITE;
/*!40000 ALTER TABLE `adesao` DISABLE KEYS */;
INSERT INTO `adesao` VALUES (8,3,5,'2023-05-01 14:03:23');
/*!40000 ALTER TABLE `adesao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `anucio`
--

DROP TABLE IF EXISTS `anucio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `anucio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idUser` int(11) DEFAULT NULL,
  `titulo` varchar(80) DEFAULT NULL,
  `descricao` varchar(500) DEFAULT NULL,
  `areaActuacao` varchar(90) DEFAULT NULL,
  `vagas` int(11) DEFAULT NULL,
  `data` date DEFAULT current_timestamp(),
  `dataFinal` date DEFAULT NULL,
  `contrato` varchar(30) DEFAULT NULL,
  `imagem` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idUser` (`idUser`),
  CONSTRAINT `anucio_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anucio`
--

LOCK TABLES `anucio` WRITE;
/*!40000 ALTER TABLE `anucio` DISABLE KEYS */;
INSERT INTO `anucio` VALUES (1,10,'Programador Senior','4 anos de experiencia; linguagens JAVA, PHP, PYTHON','T.I',2,'2023-05-01','2023-05-18','3anos','logo644eede972f04.'),(2,10,'Tenico de Redes','tecnico de redes; 2 anos de experiencia','T.I',1,'2023-05-01','2023-04-21','4anos','logo644eef4b526b7.'),(3,10,'Tecnico de Frio','Licenciado, 2 anos de experiencia','ELECTRONICA',2,'2023-05-01','2023-05-24','3anos','logo644ef45b4c351.');
/*!40000 ALTER TABLE `anucio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perfil`
--

DROP TABLE IF EXISTS `perfil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `perfil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nivelAcademico` varchar(80) DEFAULT NULL,
  `habilidades` varchar(90) DEFAULT NULL,
  `area` varchar(80) DEFAULT NULL,
  `categoria` varchar(89) DEFAULT NULL,
  `informacoes` varchar(360) DEFAULT NULL,
  `imagem` varchar(80) DEFAULT NULL,
  `curriculum` varchar(70) DEFAULT NULL,
  `idUser` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idUser` (`idUser`),
  CONSTRAINT `perfil_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perfil`
--

LOCK TABLES `perfil` WRITE;
/*!40000 ALTER TABLE `perfil` DISABLE KEYS */;
INSERT INTO `perfil` VALUES (10,'Basico','fdghjk','MECÂNICA','FreeLancer','fghj','img6446aef6371f4.jpg','curiculum6446aef6371fc.pdf',4),(11,'Mestrado','Informatico','T.I','Desempregado','Portugues','img6446ca277ef40.jpg','curiculum6446ca277ef4b.pdf',4),(12,'Basico','fghjkl','ELECTRONICA','Ambos','jrhfxukfjnkusd','img6446cda212d45.jpg','curiculum6446cda212d50.pdf',4),(13,'Mestrado','hhefbuzdbfiue','MECÂNICA','Ambos','njuusfhnuvfnuvcj','img6446ce5fcbac8.jpg','curiculum6446ce5fcbacf.pdf',4),(14,'Basico','Informatica','MECÂNICA','Ambos','Portugues','img6446dbfda2dac.jpg','curiculum6446dbfda2db7.pdf',10),(15,'Superior','programação(java, c#, web PHP)\r\nRedes de Computador\r\nHardware','T.I','FreeLancer','LInguas: Portugues, Ingles Basico','img644d143a787ff.jpg','curiculum644d143a7880a.pdf',5),(16,'Superior','Programacao C, C#, JAVA','T.I','FreeLancer','INGLES BASICO','img6450d258e3911.jpg','curiculum6450d258e391a.pdf',11);
/*!40000 ALTER TABLE `perfil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `solicitacoes`
--

DROP TABLE IF EXISTS `solicitacoes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `solicitacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idUser` int(11) DEFAULT NULL,
  `idPerfil` int(11) DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idUser` (`idUser`),
  KEY `idPerfil` (`idPerfil`),
  CONSTRAINT `solicitacoes_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`),
  CONSTRAINT `solicitacoes_ibfk_2` FOREIGN KEY (`idPerfil`) REFERENCES `perfil` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solicitacoes`
--

LOCK TABLES `solicitacoes` WRITE;
/*!40000 ALTER TABLE `solicitacoes` DISABLE KEYS */;
INSERT INTO `solicitacoes` VALUES (1,7,14,'2023-04-28 00:00:00'),(2,10,13,'2023-04-29 00:00:00'),(8,10,15,'2023-04-29 00:00:00'),(9,4,15,'2023-04-29 00:00:00'),(10,12,16,'2023-05-02 11:34:38'),(11,7,15,'2023-05-15 11:16:33');
/*!40000 ALTER TABLE `solicitacoes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) DEFAULT NULL,
  `subnome` varchar(80) DEFAULT NULL,
  `telefone` varchar(80) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `localizacao` varchar(100) DEFAULT NULL,
  `categoria` varchar(80) DEFAULT NULL,
  `password` varchar(80) DEFAULT NULL,
  `descricao` varchar(700) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `telefone` (`telefone`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (2,NULL,NULL,NULL,NULL,NULL,NULL,'142000',NULL),(3,NULL,NULL,NULL,NULL,NULL,NULL,'142000',NULL),(4,'castelo','Moisana','922300981','casteloabraao@gmail.com','bbbbbbbbbb','Empregador','aaaaaaaaa','vdkhgiuhg'),(5,'Beijamin','Nhangui','93302928','abraaocastelo14@gmail.com','Viana-Ponte partida','Profissional','aaaaaa','keuajhdfuidhfc fudcbfuix'),(6,'Moisana','Castelo','922091182','moisana@gmail.com','Viana-Ponte partida','Profissional','$2y$10$cXHswHPAKAWnxiOM89h3M.aFywWjQdkAuNHiKz2wdJZJfbjmCPwHa','jhfsuahfukhea\r\nharfuhaifjioojz'),(7,'Eldade','Bondo','922009912','eldade113@gmail.com','Viana-Ponte partida','Empregador','12345','aaaaaa aaaaaaaaa aaaaaaaaa'),(8,'eldade','bondo','923456787','eldade134@gmail.com','viana','Profissional','123456','chfjgkk'),(9,'florencia','chiemba','930326154','florencia22@gmail.com','viana','Profissional','123456','dfghkytjtj'),(10,'bondo','eldade','930325234','bondo34@gmail.com','Viana-Ponte partida','Empregador','123456','sdfghtyh'),(11,'eluck','joao','922002298','eluck@gmail.com','viana','Profissional','12345','programador senior'),(12,'WEBIN','LDA','933229908','webin@gmail.com','Viana','Empregador','12345','Prestacao de servico');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-15 12:19:12
