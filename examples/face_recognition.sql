-- MySQL dump 10.16  Distrib 10.3.10-MariaDB, for osx10.14 (x86_64)
--
-- Host: localhost    Database: face_recognition
-- ------------------------------------------------------
-- Server version	10.3.10-MariaDB

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
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employees` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `image` text DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees`
--

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` VALUES (10,'alwin','siregar','0200001-alwin-siregar.png','2019-05-22 02:51:34'),(11,'agung','lumbanraja','0200301-agung-lumbanraja.png','2019-05-22 02:51:34'),(12,'m-iksan','agustian','0200302-m-iksan-agustian.png','2019-05-22 02:51:34'),(13,'wardi','','0200306-wardi.png','2019-05-22 02:51:34'),(14,'randy','erwandy','0200307-randy-erwandy.png','2019-05-22 02:51:34'),(15,'sirjon','','0200503-sirjon.png','2019-05-22 02:51:34'),(16,'mhd-syafii','siregar','0200519-mhd-syafii-siregar.png','2019-05-22 02:51:34'),(17,'dodi','lesmana','0200601-dodi-lesmana.png','2019-05-22 02:51:34'),(18,'hadiansyah','putra','0200612-hadiansyah-putra.png','2019-05-22 02:51:34'),(19,'suhandoko','','0200613-suhandoko.png','2019-05-22 02:51:34'),(20,'adri','wahyu','0200615-adri-wahyu.png','2019-05-22 02:51:34'),(21,'mhd-andi','zuheri','0200617-mhd-andi-zuheri.png','2019-05-22 02:51:34'),(22,'ali','putera','0200622-ali-putera.png','2019-05-22 02:51:34'),(23,'vivi','rahmayani','0200701-vivi-rahmayani.png','2019-05-22 02:51:34'),(24,'febrina','rodotua-nainggolan','0200803-febrina-rodotua-nainggolan.png','2019-05-22 02:51:34'),(25,'linda','','0200806-linda.png','2019-05-22 02:51:34'),(26,'alex','wijaya','0200810-alex-wijaya.png','2019-05-22 02:51:34'),(27,'budi','erwinsyah','0200812-budi-erwinsyah.png','2019-05-22 02:51:34'),(28,'irawaty','','0200902-irawaty.png','2019-05-22 02:51:34'),(29,'bambang','hermanto','0200907-bambang-hermanto.png','2019-05-22 02:51:34'),(30,'harismanto','','0200911-harismanto.png','2019-05-22 02:51:34'),(31,'bambang','suwito','0200912-bambang-suwito.png','2019-05-22 02:51:34'),(32,'sovian','siregar','0200925-sovian-siregar.png','2019-05-22 02:51:34'),(33,'indah-rahayu','suryono-putri','0200934-indah-rahayu-suryono-putri.png','2019-05-22 02:51:34'),(34,'david','lim','0201001-david-lim.png','2019-05-22 02:51:34'),(35,'budiman','silalahi','0201005-budiman-silalahi.png','2019-05-22 02:51:34'),(36,'romi','zandra','0201009-romi-zandra.png','2019-05-22 02:51:34'),(37,'teddi','zulkarnaen','0201010-teddi-zulkarnaen.png','2019-05-22 02:51:34'),(38,'ade','iskandar','0201011-ade-iskandar.png','2019-05-22 02:51:34'),(39,'riki','yacub','0201012-riki-yacub.png','2019-05-22 02:51:34'),(40,'hendra','','0201014-hendra.png','2019-05-22 02:51:34'),(41,'may-hendry','maharaja','0201019-may-hendry-maharaja.png','2019-05-22 02:51:34'),(42,'ramadina','','0201101-ramadina.png','2019-05-22 02:51:34'),(43,'miftahul','rizki-suhemi','0201103-miftahul-rizki-suhemi.png','2019-05-22 02:51:34'),(44,'bober','sinaga','0201104-bober-sinaga.png','2019-05-22 02:51:34'),(45,'sahrudi','','0201112-sahrudi.png','2019-05-22 02:51:34'),(46,'hendra-g-e','situmorang','0201201-hendra-g-e-situmorang.png','2019-05-22 02:51:34'),(47,'jefri','handoko-utama','0201203-jefri-handoko-utama.png','2019-05-22 02:51:34'),(48,'rita','','0201204-rita.png','2019-05-22 02:51:34'),(49,'fransisko','sinaga','0201207-fransisko-sinaga.png','2019-05-22 02:51:34'),(50,'alfian','agusnady','0201214-alfian-agusnady.png','2019-05-22 02:51:34'),(51,'irwansyah','putra','0201215-irwansyah-putra.png','2019-05-22 02:51:34'),(52,'hamonangan','pardosi','0201216-hamonangan-pardosi.png','2019-05-22 02:51:34'),(53,'anton','purba','0201217-anton-purba.png','2019-05-22 02:51:34'),(54,'ade-suhendra','','0201226-ade-suhendra.png','2019-05-22 02:51:34'),(55,'lili','yusfriza','0201229-lili-yusfriza.png','2019-05-22 02:51:34'),(56,'erwin','faisal-napitupulu','0201233-erwin-faisal-napitupulu.png','2019-05-22 02:51:34'),(57,'oktovianto','tarigan','0201303-oktovianto-tarigan.png','2019-05-22 02:51:34'),(58,'morrys','bill-leonardo','0201308-morrys-bill-leonardo.png','2019-05-22 02:51:34'),(59,'zainul','wahid','0201311-zainul-wahid.png','2019-05-22 02:51:34'),(60,'rizki','hidayat','0201315-rizki-hidayat.png','2019-05-22 02:51:34'),(61,'jimmy','heryanto','0201318-jimmy-heryanto.png','2019-05-22 02:51:34'),(62,'irvansyah','putra-nasution','0201324-irvansyah-putra-nasution.png','2019-05-22 02:51:34'),(63,'ummi','kalsum','0201325-ummi-kalsum.png','2019-05-22 02:51:34'),(64,'ahmad','rais','0201326-ahmad-rais.png','2019-05-22 02:51:34'),(65,'solihin','','0201336-solihin.png','2019-05-22 02:51:34'),(66,'timmie','maria-gomar-gama','0201408-timmie-maria-gomar-gama.png','2019-05-22 02:51:35'),(67,'mhd-tantowi','zauhari','0201410-mhd-tantowi-zauhari.png','2019-05-22 02:51:35'),(68,'yudi','kurniawan','0201412-yudi-kurniawan.png','2019-05-22 02:51:35'),(69,'indah','silvina','0201421-indah-silvina.png','2019-05-22 02:51:35'),(70,'berto','alpador-berutu','0201505-berto-alpador-berutu.png','2019-05-22 02:51:35'),(71,'khanafi','purnomo-aji-sugi-pawira','0201506-khanafi-purnomo-aji-sugi-pawira.png','2019-05-22 02:51:35'),(72,'tomi','perdana-putra','0201507-tomi-perdana-putra.png','2019-05-22 02:51:35'),(73,'cristin','','0201510-cristin.png','2019-05-22 02:51:35'),(74,'suryo','handoko-putro','0201514-suryo-handoko-putro.png','2019-05-22 02:51:35'),(75,'fani','hardianto','0201516-fani-hardianto.png','2019-05-22 02:51:35'),(76,'santoso','budi-utomo','0201610-santoso-budi-utomo.png','2019-05-22 02:51:35'),(77,'nurul','ihsan-putra','0201614-nurul-ihsan-putra.png','2019-05-22 02:51:35'),(78,'mauliddana','syahputra','0201615-mauliddana-syahputra.png','2019-05-22 02:51:35'),(79,'syawaliadi','','0201618-syawaliadi.png','2019-05-22 02:51:35'),(80,'deddy','wijaya','0201619-deddy-wijaya.png','2019-05-22 02:51:35'),(81,'aidil','putra-chaniago','0201623-aidil-putra-chaniago.png','2019-05-22 02:51:35'),(82,'erixon','andrianus-saruksuk','0201627-erixon-andrianus-saruksuk.png','2019-05-22 02:51:35'),(83,'rizki','gunawan','0201628-rizki-gunawan.png','2019-05-22 02:51:35'),(84,'rahmatsyah','panggabean','0201630-rahmatsyah-panggabean.png','2019-05-22 02:51:35'),(85,'muhammad','fadly','0201631-muhammad-fadly.png','2019-05-22 02:51:35'),(86,'heriansyah','','0201632-heriansyah.png','2019-05-22 02:51:35'),(87,'andri','susilo','0201702-andri-susilo.png','2019-05-22 02:51:35'),(88,'nicolas','simbolon','0201703-nicolas-simbolon.png','2019-05-22 02:51:35'),(89,'rizky','audina','0201704-rizky-audina.png','2019-05-22 02:51:35'),(90,'albert','andika-tarigan','0201706-albert-andika-tarigan.png','2019-05-22 02:51:35'),(91,'ali','agus-hutapea','0201707-ali-agus-hutapea.png','2019-05-22 02:51:35'),(92,'yudi','setiawan','0201708-yudi-setiawan.png','2019-05-22 02:51:35'),(93,'beatrice','sonya-pratiwi-situngkir','0201709-beatrice-sonya-pratiwi-situngkir.png','2019-05-22 02:51:35'),(94,'jefri','lumban-batu','0201712-jefri-lumban-batu.png','2019-05-22 02:51:35'),(95,'jaya','gharaj','0201715-jaya-gharaj.png','2019-05-22 02:51:35'),(96,'rama','suseno','0201716-rama-suseno.png','2019-05-22 02:51:35'),(97,'alvin','syahri','0201723-alvin-syahri.png','2019-05-22 02:51:35'),(98,'anan','lowell','0209901-anan-lowell.png','2019-05-22 02:51:35'),(99,'mytosin','','mytosin.jpg','2019-05-22 02:51:35');
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-05-22 10:06:29
