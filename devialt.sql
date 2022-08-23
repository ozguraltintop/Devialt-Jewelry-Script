-- MySQL dump 10.19  Distrib 10.3.34-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: umutwqzn_butikv1
-- ------------------------------------------------------
-- Server version	10.3.34-MariaDB-cll-lve

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
-- Table structure for table `ayarlar`
--

DROP TABLE IF EXISTS `ayarlar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ayarlar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_title` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `site_description` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `site_keyword` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `site_meta` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `site_author` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `logo` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `footer_logo` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `favicon` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `footer_copyright` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `renk` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `renk2` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `stok` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ayarlar`
--

LOCK TABLES `ayarlar` WRITE;
/*!40000 ALTER TABLE `ayarlar` DISABLE KEYS */;
INSERT INTO `ayarlar` (`id`, `site_title`, `site_description`, `site_keyword`, `site_meta`, `site_author`, `logo`, `footer_logo`, `favicon`, `footer_copyright`, `renk`, `renk2`, `stok`) VALUES (1,'Butik Scripti V1','Butik Scripti V1','Butik Scripti V1','Butik Scripti V1','Butik Scripti V1','19608320-butik-scripti-v1.png','976713533-butik-scripti-v1.png','91455188-butik-scripti-v1.png','Copyright © UT Web Tasarım 2022  Tüm Hakları Saklıdır.','#d5d2c8','#1826dc','419727883-butik-scripti-v1.png');
/*!40000 ALTER TABLE `ayarlar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bolge_kategori`
--

DROP TABLE IF EXISTS `bolge_kategori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bolge_kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `sira` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `onaciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `seo` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `tur` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `eklenme_tarihi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `guncelleme_tarihi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bolge_kategori`
--

LOCK TABLES `bolge_kategori` WRITE;
/*!40000 ALTER TABLE `bolge_kategori` DISABLE KEYS */;
INSERT INTO `bolge_kategori` (`id`, `adi`, `sira`, `resim`, `kategori`, `onaciklama`, `durum`, `aciklama`, `seo`, `tur`, `eklenme_tarihi`, `guncelleme_tarihi`) VALUES (1,'Anadolu Yakası','1','679-.jpg','0','','on','','anadolu-yakasi','bolge_kategori','24.09.2021','24.09.2021');
/*!40000 ALTER TABLE `bolge_kategori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bolge_yorum`
--

DROP TABLE IF EXISTS `bolge_yorum`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bolge_yorum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `email` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `mesaj` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `bid` int(11) DEFAULT NULL,
  `durum` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bolge_yorum`
--

LOCK TABLES `bolge_yorum` WRITE;
/*!40000 ALTER TABLE `bolge_yorum` DISABLE KEYS */;
INSERT INTO `bolge_yorum` (`id`, `adi`, `email`, `mesaj`, `bid`, `durum`) VALUES (3,'wqewqeqewq','demo@demo.com','wqewqewqeqwewqeq',17,0),(4,'test','demo@demo.com','Apple today named eight app and game developers receiving an Apple Design Award, each one selected for being thoughtful and creative. Apple Design Award winners bring distinctive new ideas to life and demonstrate deep mastery of Apple technology. The apps spring up from developers large and small, in every part of the world and provide users with new ways of working, creating, and playing.\r\n\r\n',17,0),(5,'test','demo@demo.com','Apple today named eight app and game developers receiving an Apple Design Award, each one selected for being thoughtful and creative. Apple Design Award winners bring distinctive new ideas to life and demonstrate deep mastery of Apple technology. The apps spring up from developers large and small, in every part of the world and provide users with new ways of working, creating, and playing.\r\n\r\n',17,1),(6,'test','demo@demo.com','Apple today named eight app and game developers receiving an Apple Design Award, each one selected for being thoughtful and creative. Apple Design Award winners bring distinctive new ideas to life and demonstrate deep mastery of Apple technology. The apps spring up from developers large and small, in every part of the world and provide users with new ways of working, creating, and playing.\r\n\r\n',17,1);
/*!40000 ALTER TABLE `bolge_yorum` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ekibimiz`
--

DROP TABLE IF EXISTS `ekibimiz`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ekibimiz` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `sira` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `onaciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `seo` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `tur` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `eklenme_tarihi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `guncelleme_tarihi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ekibimiz`
--

LOCK TABLES `ekibimiz` WRITE;
/*!40000 ALTER TABLE `ekibimiz` DISABLE KEYS */;
INSERT INTO `ekibimiz` (`id`, `adi`, `sira`, `resim`, `kategori`, `onaciklama`, `durum`, `aciklama`, `seo`, `tur`, `eklenme_tarihi`, `guncelleme_tarihi`) VALUES (17,'Umut Tamirci','1','721-umut-tamirci.webp',NULL,'Lorem Ipsum is simply dummy text of the printing and typesetting industry','on','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n','umut-tamirci','ekibimiz','20.10.2021','07.02.2022'),(18,'Umut Tamirci','2','542-umut-tamirci.webp',NULL,'Lorem Ipsum is simply dummy text of the printing and typesetting industry.','on','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n','umut-tamirci','ekibimiz','20.10.2021','07.02.2022'),(19,'Umut Tamirci','3','234-umut-tamirci.webp',NULL,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ','on','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n','umut-tamirci','ekibimiz','20.10.2021','07.02.2022');
/*!40000 ALTER TABLE `ekibimiz` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `etiket`
--

DROP TABLE IF EXISTS `etiket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `etiket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `sira` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `linki` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etiket`
--

LOCK TABLES `etiket` WRITE;
/*!40000 ALTER TABLE `etiket` DISABLE KEYS */;
INSERT INTO `etiket` (`id`, `adi`, `sira`, `aciklama`, `linki`, `durum`, `resim`) VALUES (19,'Kadın Giyim','1',NULL,'kadin-giyim','on','resim-yok'),(20,'Erkek Giyim','2',NULL,'erkek-giyim','on','resim-yok'),(21,'Çocuk Giyim','3',NULL,'cocuk-giyim','on','resim-yok'),(22,'Kadın Ayakkabıları','4',NULL,'#','on','resim-yok'),(23,'Çocuk Ayakkabıları','5',NULL,'','on','resim-yok'),(24,'Bot Ayakkabılar','6',NULL,'#','on','resim-yok'),(25,'Rahat Taytlar','7',NULL,'#','on','resim-yok'),(26,'Mini Etekler','8',NULL,'#','on','resim-yok'),(27,'Şort Pantolonlar','9',NULL,'#','on','resim-yok'),(28,'Siyah Tişörtler','10',NULL,'#','on','resim-yok'),(29,'Crop Çeşitleri','11',NULL,'#','on','resim-yok'),(30,'Spor Ayakkabılar','12',NULL,'#','on','resim-yok'),(31,'Unisex Ayakkabılar','13',NULL,'#','on','resim-yok'),(32,'Unisex Elbiseler','14',NULL,'#','on','resim-yok'),(33,'Yeni Trendler','15',NULL,'#','on','resim-yok'),(34,'Kış Sezonu Trendleri','16',NULL,'#','on','resim-yok'),(35,'Yaz Sezonu Trendler','17',NULL,'#','on','resim-yok'),(36,'Uzun Etekler','18',NULL,'#','on','resim-yok'),(37,'Futbol Ayakkabıları','19',NULL,'#','on','resim-yok');
/*!40000 ALTER TABLE `etiket` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `favori`
--

DROP TABLE IF EXISTS `favori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `favori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `urun` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `favori`
--

LOCK TABLES `favori` WRITE;
/*!40000 ALTER TABLE `favori` DISABLE KEYS */;
INSERT INTO `favori` (`id`, `ip`, `urun`) VALUES (59,'176.88.124.254','29'),(2,'185.244.36.227','26'),(3,'185.244.36.227','25'),(4,'185.244.36.227','28'),(5,'185.244.36.227','24'),(6,'185.244.36.227','27'),(7,'185.244.36.227','30'),(8,'185.244.36.227','29'),(9,'waf6any15h','26'),(10,'185.244.36.227','wn7sv6irn8'),(11,'185.244.36.227','26'),(12,'185.244.36.227','26'),(13,'185.244.36.227','26'),(14,'185.244.36.227','26'),(15,'185.244.36.227','26'),(16,'wz869r4jlt','25'),(17,'185.244.36.227','wpd0j08zm3'),(18,'185.244.36.227','25'),(19,'185.244.36.227','25'),(20,'185.244.36.227','25'),(21,'185.244.36.227','25'),(22,'185.244.36.227','25'),(23,'wcpqwv0fxx','28'),(24,'185.244.36.227','wtj6j8j6p7'),(25,'185.244.36.227','28'),(26,'185.244.36.227','28'),(27,'185.244.36.227','28'),(28,'185.244.36.227','28'),(29,'185.244.36.227','28'),(30,'wiibpoq0s5','24'),(31,'185.244.36.227','w7m1k3w1dx'),(32,'185.244.36.227','24'),(33,'185.244.36.227','24'),(34,'185.244.36.227','24'),(35,'185.244.36.227','24'),(36,'185.244.36.227','24'),(37,'wydxiw3fjg','27'),(38,'185.244.36.227','wmj6eawbl0'),(39,'185.244.36.227','27'),(40,'185.244.36.227','27'),(41,'185.244.36.227','27'),(42,'185.244.36.227','27'),(43,'185.244.36.227','27'),(44,'wpdvohpv80','30'),(45,'185.244.36.227','w0159fe9z6'),(46,'185.244.36.227','30'),(47,'185.244.36.227','30'),(48,'185.244.36.227','30'),(49,'185.244.36.227','30'),(50,'185.244.36.227','30'),(51,'185.244.36.227','30'),(52,'wui3bpwdzq','29'),(53,'185.244.36.227','w8r10jkbsk'),(54,'185.244.36.227','29'),(55,'185.244.36.227','29'),(56,'185.244.36.227','29'),(57,'185.244.36.227','29'),(58,'185.244.36.227','29'),(64,'24.133.89.26','24'),(72,'176.88.134.253','33'),(73,'176.88.132.128','25');
/*!40000 ALTER TABLE `favori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `galeri`
--

DROP TABLE IF EXISTS `galeri`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `galeri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `sira` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `linki` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galeri`
--

LOCK TABLES `galeri` WRITE;
/*!40000 ALTER TABLE `galeri` DISABLE KEYS */;
INSERT INTO `galeri` (`id`, `adi`, `sira`, `aciklama`, `linki`, `durum`, `resim`) VALUES (8,'Çocuk Giyim','1','<p>10 &Uuml;r&uuml;n</p>\r\n','cocuk-giyim','on','476-cocuk-giyim.webp'),(9,'Erkek Giyim','2','<p>Yeni Sezon Trendler</p>\r\n','erkek-giyim','on','743-erkek-giyim.webp');
/*!40000 ALTER TABLE `galeri` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `haberler`
--

DROP TABLE IF EXISTS `haberler`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `haberler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `sira` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `onaciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `seo` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `tur` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `eklenme_tarihi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `guncelleme_tarihi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `haberler`
--

LOCK TABLES `haberler` WRITE;
/*!40000 ALTER TABLE `haberler` DISABLE KEYS */;
INSERT INTO `haberler` (`id`, `adi`, `sira`, `resim`, `kategori`, `onaciklama`, `durum`, `aciklama`, `seo`, `tur`, `eklenme_tarihi`, `guncelleme_tarihi`) VALUES (16,'Örnek Blog 1','1','351-ornek-blog-1.webp',NULL,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ','on','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n','ornek-blog-1','haberler','25.09.2021','07.02.2022'),(17,'Örnek Blog 2','2','743-ornek-blog-2.webp',NULL,'Lorem Ipsum is simply dummy text of the printing and typesetting industry.','on','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n','ornek-blog-2','haberler','25.09.2021','07.02.2022'),(18,'Örnek Blog 3','3','974-ornek-blog-3.webp',NULL,'Lorem Ipsum is simply dummy text of the printing and typesetting industry.','on','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n','ornek-blog-3','haberler','25.09.2021','07.02.2022'),(19,'Örnek Blog 4','4','146-ornek-blog-4.webp',NULL,'Lorem Ipsum is simply dummy text of the printing and typesetting industry','on','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n','ornek-blog-4','haberler','25.09.2021','07.02.2022'),(20,'Örnek Blog 5','5','980-ornek-blog-5.webp',NULL,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ','on','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n','ornek-blog-5','haberler','25.09.2021','07.02.2022'),(21,'Örnek Blog 6','6','544-ornek-blog-6.webp',NULL,'Lorem Ipsum is simply dummy text of the printing and typesetting industry','on','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n','ornek-blog-6','haberler','25.09.2021','07.02.2022');
/*!40000 ALTER TABLE `haberler` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hizmetbolgeleri`
--

DROP TABLE IF EXISTS `hizmetbolgeleri`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hizmetbolgeleri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `sira` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `onaciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `seo` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `tur` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `eklenme_tarihi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `guncelleme_tarihi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hizmetbolgeleri`
--

LOCK TABLES `hizmetbolgeleri` WRITE;
/*!40000 ALTER TABLE `hizmetbolgeleri` DISABLE KEYS */;
INSERT INTO `hizmetbolgeleri` (`id`, `adi`, `sira`, `resim`, `kategori`, `onaciklama`, `durum`, `aciklama`, `seo`, `tur`, `eklenme_tarihi`, `guncelleme_tarihi`) VALUES (17,'Umut tamirci','2','694-.jpg','1','There are many variations of passages of Lorem Ipsum available, but majority have suffered alteration.\r\n\r\n','on','<p>Apple today named eight app and game developers receiving an Apple Design Award, each one selected for being thoughtful and creative. Apple Design Award winners bring distinctive new ideas to life and demonstrate deep mastery of Apple technology. The apps spring up from developers large and small, in every part of the world and provide users with new ways of working, creating, and playing.</p>\r\n','umut-tamirci','hizmetbolgeleri','27.08.2021','24.09.2021'),(18,'Photoshop','3','248-.jpg','1','There are many variations of passages of Lorem Ipsum available, but majority have suffered alteration.\r\n\r\n','on','<p>Apple today named eight app and game developers receiving an Apple Design Award, each one selected for being thoughtful and creative. Apple Design Award winners bring distinctive new ideas to life and demonstrate deep mastery of Apple technology. The apps spring up from developers large and small, in every part of the world and provide users with new ways of working, creating, and playing.</p>\r\n','photoshop','hizmetbolgeleri','27.08.2021','24.09.2021');
/*!40000 ALTER TABLE `hizmetbolgeleri` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hizmetler`
--

DROP TABLE IF EXISTS `hizmetler`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hizmetler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `sira` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `onaciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `seo` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `tur` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `eklenme_tarihi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `guncelleme_tarihi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hizmetler`
--

LOCK TABLES `hizmetler` WRITE;
/*!40000 ALTER TABLE `hizmetler` DISABLE KEYS */;
INSERT INTO `hizmetler` (`id`, `adi`, `sira`, `resim`, `kategori`, `onaciklama`, `durum`, `aciklama`, `seo`, `tur`, `eklenme_tarihi`, `guncelleme_tarihi`) VALUES (19,'Hizmet Tanıtım 1','1','284-hizmet-tanitim-1.webp',NULL,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ','on','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n','hizmet-tanitim-1','hizmetler','25.09.2021','07.02.2022'),(20,'Hizmet Tanıtım 2','2','156-hizmet-tanitim-2.webp',NULL,'Lorem Ipsum is simply dummy text of the printing and typesetting industry.','on','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n','hizmet-tanitim-2','hizmetler','25.09.2021','07.02.2022'),(21,'Hizmet Tanıtım 3','3','656-hizmet-tanitim-3.webp',NULL,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ','on','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n','hizmet-tanitim-3','hizmetler','25.09.2021','07.02.2022'),(22,'Hizmet Tanıtım 4','4','507-hizmet-tanitim-4.webp',NULL,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ','on','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n','hizmet-tanitim-4','hizmetler','25.09.2021','07.02.2022'),(23,'Hizmet Tanıtım 5','5','380-hizmet-tanitim-5.webp',NULL,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ','on','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n','hizmet-tanitim-5','hizmetler','25.09.2021','07.02.2022'),(24,'Hizmet Tanıtım 6','6','642-hizmet-tanitim-6.webp',NULL,'Lorem Ipsum is simply dummy text of the printing and typesetting industry','on','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n','hizmet-tanitim-6','hizmetler','25.09.2021','07.02.2022');
/*!40000 ALTER TABLE `hizmetler` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `iletisim`
--

DROP TABLE IF EXISTS `iletisim`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `iletisim` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `telefon` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `email` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `konu` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `mesaj` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `iletisim`
--

LOCK TABLES `iletisim` WRITE;
/*!40000 ALTER TABLE `iletisim` DISABLE KEYS */;
INSERT INTO `iletisim` (`id`, `adi`, `telefon`, `email`, `konu`, `mesaj`, `tarih`) VALUES (1,'umut tamirci','05395965387','umuttamirci37@gmail.com','qwewq','eqwe','16.10.2021');
/*!40000 ALTER TABLE `iletisim` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `iletisimbilgileri`
--

DROP TABLE IF EXISTS `iletisimbilgileri`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `iletisimbilgileri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `telefon1` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `telefon2` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `email1` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `email2` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `adres1` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `adres2` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `google_maps` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `yanreklam` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `whatsapp` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `iletisimbilgileri`
--

LOCK TABLES `iletisimbilgileri` WRITE;
/*!40000 ALTER TABLE `iletisimbilgileri` DISABLE KEYS */;
INSERT INTO `iletisimbilgileri` (`id`, `telefon1`, `telefon2`, `email1`, `email2`, `adres1`, `adres2`, `google_maps`, `yanreklam`, `whatsapp`) VALUES (1,'0539 596 53 87','905395965387','info@umuttamirci.com','info@umuttamirci.com','İstanbul / Avrupa','','<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d192697.79327595135!2d28.8720964464606!3d41.00549580940238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa7040068086b%3A0xe1ccfe98bc01b0d0!2zxLBzdGFuYnVs!5e0!3m2!1str!2str!4v1636992699394!5m2!1str!2str\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>','sadasdas','905395965387');
/*!40000 ALTER TABLE `iletisimbilgileri` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `istatik`
--

DROP TABLE IF EXISTS `istatik`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `istatik` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `sira` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `linki` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `istatik`
--

LOCK TABLES `istatik` WRITE;
/*!40000 ALTER TABLE `istatik` DISABLE KEYS */;
INSERT INTO `istatik` (`id`, `adi`, `sira`, `aciklama`, `linki`, `durum`, `resim`) VALUES (8,'Ücretsiz Kargo','1','<p>10 TL &Uuml;zeri Kargo</p>\r\n','fas fa-shopping-basket','on','210-.png'),(9,'Online Ödeme','2','<p>Kapıda Kredi Kartı</p>\r\n','far fa-credit-card','on','565-.png'),(10,'GERİ  İADE','3','<p>15 G&uuml;n İ&ccedil;inde Geri İade</p>\r\n','fas fa-shield-alt','on','690-.png'),(11,'7/24 DESTEK','4','<p>Online Destek</p>\r\n','fas fa-headphones-alt','on','405-.png');
/*!40000 ALTER TABLE `istatik` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mail`
--

DROP TABLE IF EXISTS `mail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_mail` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `site_mail_sifre` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `site_mail_host` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `site_mail_port` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `gonderen_mail` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mail`
--

LOCK TABLES `mail` WRITE;
/*!40000 ALTER TABLE `mail` DISABLE KEYS */;
INSERT INTO `mail` (`id`, `site_mail`, `site_mail_sifre`, `site_mail_host`, `site_mail_port`, `gonderen_mail`) VALUES (1,'info@umutweb.com','umut2020-','mail.umutweb.com','465','hilelicocuk5@gmail.com');
/*!40000 ALTER TABLE `mail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `sira` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `onaciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `seo` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `tur` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `eklenme_tarihi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `guncelleme_tarihi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu`
--

LOCK TABLES `menu` WRITE;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` (`id`, `adi`, `sira`, `resim`, `kategori`, `onaciklama`, `durum`, `aciklama`, `seo`, `tur`, `eklenme_tarihi`, `guncelleme_tarihi`) VALUES (1,'Anasayfa','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(2,'Kurumsal','2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(3,'Hizmetler','3',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(4,'Galeri','4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(5,'Blog','5',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(6,'İletişim','6',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menuler`
--

DROP TABLE IF EXISTS `menuler`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menuler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `linki` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `sira` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menuler`
--

LOCK TABLES `menuler` WRITE;
/*!40000 ALTER TABLE `menuler` DISABLE KEYS */;
INSERT INTO `menuler` (`id`, `adi`, `linki`, `kategori`, `durum`, `sira`) VALUES (1,'Anasayfa','./','1','on','1'),(2,'Kurumsal','#','0','on','2'),(3,'Ekibimiz','ekibimiz','1','on','3'),(4,'Hizmetler','hizmetler','0','on','4'),(5,'S.S.S','sss','1','on','5'),(6,'Blog','blog','1','on','6'),(7,'İletişim','iletisim','1','on','7'),(8,'Galeri','galeri','1','on','8');
/*!40000 ALTER TABLE `menuler` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paytr`
--

DROP TABLE IF EXISTS `paytr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paytr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `merchand_id` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `merchand_key` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `merchand_salt` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `ok_url` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `fail_url` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `test_modu` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paytr`
--

LOCK TABLES `paytr` WRITE;
/*!40000 ALTER TABLE `paytr` DISABLE KEYS */;
INSERT INTO `paytr` (`id`, `merchand_id`, `merchand_key`, `merchand_salt`, `ok_url`, `fail_url`, `test_modu`) VALUES (1,'','','','https://butikv1.umutweb.com/siparis-tamamlandi','https://butikv1.umutweb.com/siparis-tamamlanmadi','0');
/*!40000 ALTER TABLE `paytr` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `referanslar`
--

DROP TABLE IF EXISTS `referanslar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `referanslar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `sira` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `linki` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `referanslar`
--

LOCK TABLES `referanslar` WRITE;
/*!40000 ALTER TABLE `referanslar` DISABLE KEYS */;
INSERT INTO `referanslar` (`id`, `adi`, `sira`, `aciklama`, `linki`, `durum`, `resim`) VALUES (16,'1','1','','1','on','268-.png'),(17,'2','2','','2','on','747-.png'),(18,'3','3','','3','on','223-.png'),(19,'3','3','','3','on','994-.png'),(20,'4','4','','4','on','706-.png'),(21,'5','5','','5','on','563-.png'),(22,'6','6','','6','on','637-.png'),(23,'7','7','','7','on','335-.png');
/*!40000 ALTER TABLE `referanslar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sayfalar`
--

DROP TABLE IF EXISTS `sayfalar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sayfalar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `sira` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `onaciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `seo` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `tur` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `eklenme_tarihi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `guncelleme_tarihi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sayfalar`
--

LOCK TABLES `sayfalar` WRITE;
/*!40000 ALTER TABLE `sayfalar` DISABLE KEYS */;
INSERT INTO `sayfalar` (`id`, `adi`, `sira`, `resim`, `kategori`, `onaciklama`, `durum`, `aciklama`, `seo`, `tur`, `eklenme_tarihi`, `guncelleme_tarihi`) VALUES (9,'Hakkımızda','1','742-hakkimizda.webp',NULL,'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in V','on','<p style=\"text-align:justify\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p style=\"text-align:justify\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n','hakkimizda','sayfalar','15.07.2021','07.02.2022'),(10,'Gizlilik Politikasi','2','811-gizlilik-politikasi.webp',NULL,'','on','<p style=\"text-align:justify\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p style=\"text-align:justify\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n','gizlilik-politikasi','sayfalar','16.07.2021','07.02.2022'),(11,'KVKK Metni','3','83-kvkk-metni.webp',NULL,'','on','<p style=\"text-align:justify\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p style=\"text-align:justify\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n','kvkk-metni','sayfalar','16.07.2021','07.02.2022');
/*!40000 ALTER TABLE `sayfalar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sepet`
--

DROP TABLE IF EXISTS `sepet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sepet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `urun` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `ip` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `adet` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `tekfiyat` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `fiyat` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `varyant` int(11) DEFAULT NULL,
  `sepet` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=120 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sepet`
--

LOCK TABLES `sepet` WRITE;
/*!40000 ALTER TABLE `sepet` DISABLE KEYS */;
INSERT INTO `sepet` (`id`, `urun`, `ip`, `adet`, `tekfiyat`, `fiyat`, `varyant`, `sepet`) VALUES (119,'25','176.88.132.128','1','199','199',NULL,NULL),(118,'30','176.88.134.253','1','699','699',32,NULL),(116,'26','5.47.56.6','1','369','369',NULL,NULL),(115,'24','188.119.22.240','2','150','300',NULL,NULL),(114,'24','78.163.111.23','1','150','150',NULL,NULL),(113,'33','78.163.111.23','1','290','290',43,NULL),(112,'25','46.154.35.19','1','199','199',NULL,NULL),(111,'34','46.154.35.19','1','256','256',43,NULL),(108,'25','46.154.35.19','1','199','199',NULL,NULL),(107,'25','188.57.53.126','1','199','199',NULL,NULL),(106,'28','78.173.0.28','1','299','299',NULL,NULL),(105,'30','176.33.108.140','1','699','699',33,NULL),(104,'34','176.88.124.148','1','256','256',43,NULL),(103,'30','5.25.165.143','1','699','699',31,NULL),(102,'25','88.251.128.199','1','199','199',NULL,NULL),(101,'24','85.100.65.62','1','150','150',NULL,NULL),(99,'34','95.5.187.170','1','256','256',42,NULL),(98,'31','176.219.107.2','1','200','200',37,NULL),(97,'32','176.237.47.240','5','350','1750',43,NULL),(96,'30','188.119.17.105','1','699','699',33,NULL),(95,'28','178.246.206.140','1','299','299',NULL,NULL),(94,'26','212.154.4.96','1','369','369',NULL,NULL),(93,'24','24.133.89.26','1','150','150',NULL,NULL),(92,'26','5.47.254.26','1','369','369',NULL,NULL),(88,'31','94.54.194.13','1','200','200',37,NULL),(91,'26','78.190.251.77','1','369','369',NULL,NULL),(90,'33','188.3.196.92','1','290','290',43,NULL),(85,'33','95.70.128.82','1','290','290',43,NULL),(84,'26','95.70.138.232','1','369','369',NULL,NULL),(83,'27','95.70.246.20','1','99','99',37,NULL),(82,'34','88.238.4.149','1','256','256',42,NULL),(81,'33','93.182.106.187','1','290','290',40,NULL),(74,'24','176.89.82.125','5','150','750',NULL,NULL),(77,'30','78.170.218.174','1','699','699',33,NULL),(76,'30','78.170.218.174','1','699','699',33,NULL),(75,'33','46.1.174.152','1','290','290',43,NULL);
/*!40000 ALTER TABLE `sepet` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `siparisler`
--

DROP TABLE IF EXISTS `siparisler`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `siparisler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tarih` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `urun` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `eposta` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `telefon` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `adsoyad` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `fiyat` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `uye` int(11) DEFAULT NULL,
  `paytr` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `sepetid` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `adres` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `siparis_notu` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `siparis_kodu` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `siparis_durumu` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `kargotakipno` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `kargoadi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=137 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `siparisler`
--

LOCK TABLES `siparisler` WRITE;
/*!40000 ALTER TABLE `siparisler` DISABLE KEYS */;
INSERT INTO `siparisler` (`id`, `tarih`, `urun`, `eposta`, `telefon`, `adsoyad`, `durum`, `fiyat`, `uye`, `paytr`, `sepetid`, `adres`, `siparis_notu`, `siparis_kodu`, `siparis_durumu`, `kargotakipno`, `kargoadi`) VALUES (133,'26.07.2022','25',NULL,'000','Demo','0','199',6,'9559244656820',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(134,'26.07.2022','25',NULL,'000','Demo','0','199',6,'8207465305418',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(135,'26.07.2022','25','demo@demo.com','000','Demo','0','199',6,'3513364531175',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(118,'28.04.2022','30,25,29','umuttamirci37@gmail.com','05395965387','umut tamirci','1','4608',1,'70136530','73,72,71','orhan gazi mahallesi istanbul','lütfen eşyalarım hızlı gelsin :)','2126695','Sipariş Tamamlandı','65456465465','PTT'),(136,'26.07.2022','25','demo@demo.com','000','Demo','1','199',6,'646952049488',NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `siparisler` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slider`
--

DROP TABLE IF EXISTS `slider`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `sira` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `linki` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slider`
--

LOCK TABLES `slider` WRITE;
/*!40000 ALTER TABLE `slider` DISABLE KEYS */;
INSERT INTO `slider` (`id`, `adi`, `sira`, `aciklama`, `linki`, `durum`, `resim`) VALUES (18,'2022 Koleksiyon','1','','iletisim','on','693-ut-web-tasarim.webp'),(19,'UT Web Tasarım','2','<p><strong>Lorem Ipsum</strong>, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir.</p>\r\n','UT Web Tasarım','on','431-ut-web-tasarim.webp'),(21,'','','','','on','7416827-.webp'),(22,'','2','','','on','116021-.webp');
/*!40000 ALTER TABLE `slider` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sosyalmedya`
--

DROP TABLE IF EXISTS `sosyalmedya`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sosyalmedya` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `instagram` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `facebook` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `youtube` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `twitter` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `linkedin` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `whatsapp` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `telegram` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sosyalmedya`
--

LOCK TABLES `sosyalmedya` WRITE;
/*!40000 ALTER TABLE `sosyalmedya` DISABLE KEYS */;
INSERT INTO `sosyalmedya` (`id`, `instagram`, `facebook`, `youtube`, `twitter`, `linkedin`, `whatsapp`, `telegram`) VALUES (1,'qwewqe','weqwe','eqwewqe','qwewq',NULL,'wqewqewqewqe','wqewq');
/*!40000 ALTER TABLE `sosyalmedya` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sss`
--

DROP TABLE IF EXISTS `sss`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sss` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `sira` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sss`
--

LOCK TABLES `sss` WRITE;
/*!40000 ALTER TABLE `sss` DISABLE KEYS */;
INSERT INTO `sss` (`id`, `adi`, `sira`, `aciklama`, `durum`) VALUES (11,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ','1','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n','on'),(12,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ','2','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n','on'),(13,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ','3','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n','on'),(14,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ','4','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n','on'),(15,'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ','5','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n','on');
/*!40000 ALTER TABLE `sss` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `urun_img`
--

DROP TABLE IF EXISTS `urun_img`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `urun_img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `urun_id` int(11) DEFAULT NULL,
  `img` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `tur` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=441 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `urun_img`
--

LOCK TABLES `urun_img` WRITE;
/*!40000 ALTER TABLE `urun_img` DISABLE KEYS */;
INSERT INTO `urun_img` (`id`, `urun_id`, `img`, `tur`) VALUES (57,8,'1626349551-60f01fef64b23.jpg','haberler'),(58,8,'1626349551-60f01fef65aef.jpg','haberler'),(59,8,'1626349551-60f01fef67350.jpg','haberler'),(134,13,'1626437799-60f178a70b64f.jpg','haberler'),(135,13,'1626437799-60f178a70b720.jpg','haberler'),(136,13,'1626437799-60f178a70b78a.jpg','haberler'),(137,13,'1626437799-60f178a70c6c4.jpg','haberler'),(228,12,'1632434267-614cf85be7810.jpg','sayfalar'),(327,9,'hakkimizda-586595065274177.webp','sayfalar'),(329,16,'ornek-blog-1-322443426883226.webp','haberler'),(330,19,'hizmet-tanitim-1-335395194496378.webp','hizmetler'),(406,7,'ayakkabilar-633989883412044.webp','urun_kategori'),(407,25,'cocuk-gomlek-700860465515609.webp','urunler'),(408,25,'cocuk-gomlek-205573186194420.webp','urunler'),(409,25,'cocuk-gomlek-727421331765589.webp','urunler'),(410,24,'kadin-ceket-331282701439824.webp','urunler'),(411,24,'kadin-ceket-809471043918558.webp','urunler'),(412,24,'kadin-ceket-633485856501897.webp','urunler'),(413,24,'kadin-ceket-701373588480487.webp','urunler'),(414,26,'beyaz-kazak-750377031653667.webp','urunler'),(415,26,'beyaz-kazak-433815860081314.webp','urunler'),(416,26,'beyaz-kazak-163839293731170.webp','urunler'),(417,26,'beyaz-kazak-872013892057841.webp','urunler'),(418,27,'sari-uzun-etek-781961619110451.webp','urunler'),(419,27,'sari-uzun-etek-50661028882497.webp','urunler'),(420,27,'sari-uzun-etek-115061285943793.webp','urunler'),(421,27,'sari-uzun-etek-485164288201619.webp','urunler'),(424,28,'kahverengi-sort-247239832398370.webp','urunler'),(425,28,'kahverengi-sort-7226404050002.webp','urunler'),(426,29,'kot-pantolon-373083757197644.webp','urunler'),(427,29,'kot-pantolon-92252520295670.webp','urunler'),(428,29,'kot-pantolon-724478484575444.webp','urunler'),(429,29,'kot-pantolon-590192916341243.webp','urunler'),(430,29,'kot-pantolon-423943098574530.webp','urunler'),(431,29,'kot-pantolon-399124835046111.webp','urunler'),(432,30,'1651177261-626af72dcc386.png','urunler'),(433,31,'1651178183-626afac7a3d77.jpg','urunler'),(434,31,'1651178183-626afac7af390.jpg','urunler'),(435,31,'1651178184-626afac87e7fd.jpg','urunler'),(436,31,'1651178186-626afaca3d3c5.png','urunler'),(437,32,'1651179217-626afed142572.jpg','urunler'),(438,33,'1651179385-626aff79529c1.jpg','urunler'),(440,34,'1651179623-626b006716054.jpg','urunler');
/*!40000 ALTER TABLE `urun_img` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `urun_kategori`
--

DROP TABLE IF EXISTS `urun_kategori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `urun_kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `sira` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `onaciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `seo` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `tur` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `eklenme_tarihi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `guncelleme_tarihi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `urun_kategori`
--

LOCK TABLES `urun_kategori` WRITE;
/*!40000 ALTER TABLE `urun_kategori` DISABLE KEYS */;
INSERT INTO `urun_kategori` (`id`, `adi`, `sira`, `resim`, `kategori`, `onaciklama`, `durum`, `aciklama`, `seo`, `tur`, `eklenme_tarihi`, `guncelleme_tarihi`) VALUES (4,'Kadın Giyim','1','116-kadin-giyim.webp','0','Lorem Ipsum is simply dummy text of the printing and typesetting industry','on','<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n','kadin-giyim','urun_kategori','20.10.2021','28.04.2022'),(5,'Erkek Giyim','2','835-erkek-giyim.webp','0','Lorem Ipsum is simply dummy text of the printing and typesetting industry. ','on','<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n','erkek-giyim','urun_kategori','20.10.2021','28.04.2022'),(6,'Çocuk Giyim','3','575-cocuk-giyim.webp','0','Lorem Ipsum is simply dummy text of the printing and typesetting industry. ','on','<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n','cocuk-giyim','urun_kategori','20.10.2021','28.04.2022'),(7,'Ayakkabılar','4','1890700-ayakkabilar.webp','0','','on','<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n','ayakkabilar','urun_kategori','28.04.2022','01.05.2022');
/*!40000 ALTER TABLE `urun_kategori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `urun_yorum`
--

DROP TABLE IF EXISTS `urun_yorum`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `urun_yorum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `yorum` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `uye` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `urun_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `urun_yorum`
--

LOCK TABLES `urun_yorum` WRITE;
/*!40000 ALTER TABLE `urun_yorum` DISABLE KEYS */;
INSERT INTO `urun_yorum` (`id`, `yorum`, `uye`, `tarih`, `urun_id`) VALUES (1,'harika bir yazılım olmuş','1','02.04.2022',NULL),(2,'harika bir yazılım olmuş, tebrikler.','1','02.04.2022',NULL),(3,'harika bir yazılım olmuş','1','02.04.2022',91),(4,'harika bir site olmuş.','','07.04.2022',45),(5,'qweqweqweq','1','28.04.2022',26),(6,'harika bir ürün\r\n','1','01.05.2022',30);
/*!40000 ALTER TABLE `urun_yorum` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `urunler`
--

DROP TABLE IF EXISTS `urunler`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `urunler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `sira` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `onaciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `seo` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `tur` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `eklenme_tarihi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `guncelleme_tarihi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `fiyat` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `hit` int(11) DEFAULT NULL,
  `varyant` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `urun_kodu` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `stok` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `urunler`
--

LOCK TABLES `urunler` WRITE;
/*!40000 ALTER TABLE `urunler` DISABLE KEYS */;
INSERT INTO `urunler` (`id`, `adi`, `sira`, `resim`, `kategori`, `onaciklama`, `durum`, `aciklama`, `seo`, `tur`, `eklenme_tarihi`, `guncelleme_tarihi`, `fiyat`, `hit`, `varyant`, `urun_kodu`, `stok`) VALUES (24,'Kadın Ceket','1','271-kadin-ceket.webp','4','Lorem Ipsum is simply dummy text of the printing and typesetting industry. ','on','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n','kadin-ceket','urunler','20.10.2021','26.05.2022','150',NULL,'Varyant Seçiniz','#UT1023012031','100'),(25,'Çocuk Gömlek','2','498-cocuk-gomlek.webp','6','Lorem Ipsum is simply dummy text of the printing and typesetting industry.','on','<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n','cocuk-gomlek','urunler','20.10.2021','25.05.2022','199',NULL,'Varyant Seçiniz','#UT9231932','100'),(26,'Beyaz Kazak','3','601-beyaz-kazak.webp','5','Lorem Ipsum is simply dummy text of the printing and typesetting industry. ','on','<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n','beyaz-kazak','urunler','20.10.2021','26.05.2022','369',NULL,'Varyant Seçiniz','#UT213120','150'),(27,'Sarı Uzun Etek','4','829-sari-uzun-etek.webp','4','Lorem Ipsum is simply dummy text of the printing and typesetting industry.','on','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n','sari-uzun-etek','urunler','25.02.2022','26.05.2022','99',NULL,'8','#951023012','150'),(28,'Kahverengi Şort','5','686-kahverengi-sort.webp','4','Lorem Ipsum is simply dummy text of the printing and typesetting industry.','on','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p>&nbsp;</p>\r\n','kahverengi-sort','urunler','25.02.2022','26.05.2022','299',NULL,'Varyant Seçiniz','#UT0202031','100'),(29,'Kot Pantolon','6','791-kot-pantolon.webp','4','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n','on','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n','kot-pantolon','urunler','25.02.2022','26.05.2022','129',NULL,'Varyant Seçiniz','#UT30213021','59'),(30,'Gri Tişört','7','430-gri-tisort.webp','4','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n','on','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n','gri-tisort','urunler','25.02.2022','26.05.2022','699',NULL,'7','#UT21391239','500'),(31,'Asmalı Kot Pantolon','8','2795109-asmali-kot-pantolon.webp','4','Lorem Ipsum is simply dummy text of the printing and typesetting industry. ','on','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p>&nbsp;</p>\r\n','asmali-kot-pantolon','urunler','28.04.2022','26.05.2022','200',NULL,'8','#UT923132','50'),(32,'Wolky 2fx kadın sneaker','9','9000345-wolky-2fx-kadin-sneaker.webp','7','İç Materyal: Tekstil\r\nDış Materyal: Örme Pamuk\r\nTaban: Phylon\r\nİç Taban Özelliği: Memory Foam\r\nKapama Şekli: Bağcıklı','on','<p><strong>İ&ccedil; Materyal:&nbsp;</strong>Tekstil<br />\r\n<strong>Dış Materyal:&nbsp;</strong>&Ouml;rme Pamuk<br />\r\n<strong>Taban:&nbsp;</strong>Phylon<br />\r\n<strong>İ&ccedil; Taban &Ouml;zelliği:&nbsp;</strong>Memory Foam<br />\r\n<strong>Kapama Şekli:&nbsp;</strong>Bağcıklı</p>\r\n','wolky-2fx-kadin-sneaker','urunler','28.04.2022','26.05.2022','350',NULL,'9','#UT321312','0'),(33,' 22s-350 2fx kadın loafer','10','7452484-22s-350-2fx-kadin-loafer.webp','7','İç Materyal: Tekstil\r\nDış Materyal: Suni Deri\r\nTopuk Boyu: 2 Cm\r\nTopuk Tipi: Düz\r\nTaban: Termo','on','<p>İ&ccedil; Materyal: Tekstil<br />\r\nDış Materyal: Suni Deri<br />\r\nTopuk Boyu: 2 Cm<br />\r\nTopuk Tipi: D&uuml;z<br />\r\nTaban: Termo</p>\r\n','22s-350-2fx-kadin-loafer','urunler','28.04.2022','26.05.2022','290',NULL,'9','#UT12312312','0'),(34,'MGPOGBA Unisex Sneaker Günlük','11','192-mgpogba-unisex-sneaker-gunluk.webp','7','Marka : Muggo\r\n\r\nDış Materyal : 1.sınıf kalite ithal malzeme. Sade çizgileri ve zarif dokulu yapısıyla jean, şort , klasik pantolon, elbise ve aklınıza gelebilecek hemen hemen bütün giyim parçaları ile uyum sağlayarak stilinizi her ortamda mükemmel hale getirir;\r\n\r\nİç Materyal: %100 ortopedik koku ve terleme yapmayan doğal tekstil malzemelerinden üretilen iç astar;\r\n\r\nTaban : Vücüt ağırlığından gelen basıncı dengeli bir şekilde absorbe eden termo malzeme; Taban yüksekliği : 3 cm;\r\n\r\nGörseldeki erkek mankenin ayak bedeni 41 numara, kadın mankenin ayak bedeni 37 numaradır;\r\n\r\nKalıp: Standart ayak ölçülerine göre tam kalıp .Ayak Şeklinize Göre ( Geniş yapılı ve taraklı ayaklar için ) 1 Beden büyük tercih edebilirsiniz;\r\n\r\nÜretim Yeri : Türkiye;','on','<p><strong>Marka : Muggo</strong></p>\r\n\r\n<p><strong>Dış Materyal : 1.sınıf kalite ithal malzeme. Sade &ccedil;izgileri ve zarif dokulu yapısıyla jean, şort , klasik pantolon, elbise ve aklınıza gelebilecek hemen hemen b&uuml;t&uuml;n giyim par&ccedil;aları ile uyum sağlayarak stilinizi her ortamda&nbsp;m&uuml;kemmel hale getirir;</strong></p>\r\n\r\n<p><strong>İ&ccedil; Materyal: %100 ortopedik koku ve terleme yapmayan doğal tekstil malzemelerinden &uuml;retilen i&ccedil; astar;</strong></p>\r\n\r\n<p><strong>Taban : V&uuml;c&uuml;t ağırlığından gelen basıncı dengeli bir şekilde absorbe eden termo malzeme; Taban y&uuml;ksekliği : 3 cm;</strong></p>\r\n\r\n<p><strong>G&ouml;rseldeki erkek mankenin ayak bedeni 41 numara, kadın mankenin ayak bedeni 37 numaradır;</strong></p>\r\n\r\n<p><strong>Kalıp: Standart ayak &ouml;l&ccedil;&uuml;lerine g&ouml;re tam kalıp .Ayak Şeklinize&nbsp;G&ouml;re ( Geniş yapılı ve taraklı ayaklar i&ccedil;in ) 1 Beden b&uuml;y&uuml;k tercih edebilirsiniz;</strong></p>\r\n\r\n<p><strong>&Uuml;retim Yeri : T&uuml;rkiye;</strong></p>\r\n','mgpogba-unisex-sneaker-gunluk','urunler','28.04.2022','17.07.2022','256',NULL,'9','#UT03201302','0');
/*!40000 ALTER TABLE `urunler` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `urunyorumlari`
--

DROP TABLE IF EXISTS `urunyorumlari`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `urunyorumlari` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `email` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `website` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `yorum` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `urunid` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `urunyorumlari`
--

LOCK TABLES `urunyorumlari` WRITE;
/*!40000 ALTER TABLE `urunyorumlari` DISABLE KEYS */;
/*!40000 ALTER TABLE `urunyorumlari` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uyeler`
--

DROP TABLE IF EXISTS `uyeler`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `uyeler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adsoyad` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `email` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `telefon` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `sifre` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `normalsifre` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `uyeler`
--

LOCK TABLES `uyeler` WRITE;
/*!40000 ALTER TABLE `uyeler` DISABLE KEYS */;
INSERT INTO `uyeler` (`id`, `adsoyad`, `email`, `telefon`, `sifre`, `normalsifre`, `tarih`) VALUES (1,'umut tamirci','umuttamirci37@gmail.com','05395965387','9ebf6dea06d626c096d1f37289d1eada9ee74362','umut123','26.02.2022'),(2,'Hakan karan','acipayamsitesi@gmail.com','+905324231283','7c4a8d09ca3762af61e59520943dc26494f8941b','123456','02.04.2022'),(4,'umut tamirci','hilelicocuk5@gmail.com','05395965387','9ebf6dea06d626c096d1f37289d1eada9ee74362','umut123','02.04.2022'),(5,'Uğur UĞURLU','info@oxobee.com','+905550570368','6e1aa98e62095306ca9d75416bddfef0d8bad585','28022020','08.04.2022'),(6,'Demo','demo@demo.com','000','89e495e7941cf9e40e6980d14a16bf023ccd4c91','demo','11.04.2022'),(7,'barış işleyen','barisisleyenx@gmail.com','+905383780234','2b8b067878f77adf352f343ccd7f796dead03de4','emrekral23','12.04.2022'),(8,'BsFree Bsfree','bsfree@effobe.com','05395965387','7c4a8d09ca3762af61e59520943dc26494f8941b','123456','13.04.2022'),(9,'sa sasasasa','admin@11admin.com','123123123123','88ea39439e74fa27c09a4fc0bc8ebe6d00978392','123123123','14.04.2022'),(11,'İsa Güngör','isa.gungor.official@gmail.com','05397482072','517e47f1d49f3728eae88c08b6e5a8a17833a17a','Gungor2072','20.04.2022'),(12,'ismail usta','ismail.usta@gmail.com','+905427783256','2fe9d681e72133506b637eb178af77b53f096d30','32563256','20.04.2022'),(13,'ahmet naz','bonepaket@hotmail.com','05374542322','c9462625ed59ad43f69ac6b90aa53e8b11bc6cfe','germen','23.04.2022'),(14,'test','test@test.test','055555','51abb9636078defbf888d8457a7c76f85c8f114c','testtest','25.04.2022'),(15,'test test','test@gmail.com','1111111111111','7ec8aa461c2c28be905e1dfb0be256a971aa6108','111111111111','26.04.2022'),(16,'test test','test1@gmail.com','123123123','88ea39439e74fa27c09a4fc0bc8ebe6d00978392','123123123','26.04.2022'),(17,'mehmet yeşiltaş','mehmet@gmail.com','34123123','c8bdb43571a00f5e3218593bf1e2d71b2626cd7c','mehmet','28.04.2022'),(18,'Samet','mecazederl1er@gmail.com','0538234234','d033e22ae348aeb5660fc2140aec35850c4da997','admin','25.05.2022');
/*!40000 ALTER TABLE `uyeler` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `varyant`
--

DROP TABLE IF EXISTS `varyant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `varyant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `sira` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `onaciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `seo` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `tur` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `eklenme_tarihi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `guncelleme_tarihi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `fiyat` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `hit` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `varyant`
--

LOCK TABLES `varyant` WRITE;
/*!40000 ALTER TABLE `varyant` DISABLE KEYS */;
INSERT INTO `varyant` (`id`, `adi`, `sira`, `resim`, `kategori`, `onaciklama`, `durum`, `aciklama`, `seo`, `tur`, `eklenme_tarihi`, `guncelleme_tarihi`, `fiyat`, `hit`) VALUES (31,'Kırmızı','1','resim-yok','7','','on','','kirmizi','urunler','27.04.2022',NULL,'',NULL),(32,'Sarı','2','resim-yok','7','','on','','sari','urunler','27.04.2022',NULL,'',NULL),(33,'Yeşil','3','resim-yok','7','','on','','yesil','urunler','27.04.2022',NULL,'',NULL),(34,'XL','1','resim-yok','8','','on','','xl','urunler','28.04.2022',NULL,'',NULL),(35,'M','3','resim-yok','8','','on','','m','urunler','28.04.2022',NULL,'',NULL),(36,'XS','4','resim-yok','8','','on','','xs','urunler','28.04.2022',NULL,'',NULL),(37,'L','5','resim-yok','8','','on','','l','urunler','28.04.2022',NULL,'',NULL),(38,'39','4','resim-yok','9','','on','','39','urunler','28.04.2022',NULL,'',NULL),(39,'40','5','resim-yok','9','','on','','40','urunler','28.04.2022',NULL,'',NULL),(40,'41','41','resim-yok','9','','on','','41','urunler','28.04.2022',NULL,'',NULL),(41,'42','42','resim-yok','9','','on','','42','urunler','28.04.2022',NULL,'',NULL),(42,'43','43','resim-yok','9','','on','','43','urunler','28.04.2022',NULL,'',NULL),(43,'44','44','resim-yok','9','','on','','44','urunler','28.04.2022',NULL,'',NULL);
/*!40000 ALTER TABLE `varyant` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `varyant_kategori`
--

DROP TABLE IF EXISTS `varyant_kategori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `varyant_kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `sira` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `onaciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `seo` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `tur` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `eklenme_tarihi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `guncelleme_tarihi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `varyant_kategori`
--

LOCK TABLES `varyant_kategori` WRITE;
/*!40000 ALTER TABLE `varyant_kategori` DISABLE KEYS */;
INSERT INTO `varyant_kategori` (`id`, `adi`, `sira`, `resim`, `kategori`, `onaciklama`, `durum`, `aciklama`, `seo`, `tur`, `eklenme_tarihi`, `guncelleme_tarihi`) VALUES (7,'Renk','1','resim-yok','0','','on','','renk','urun_kategori','27.04.2022',NULL),(8,'Beden','2','resim-yok','0','','on','','beden','urun_kategori','28.04.2022',NULL),(9,'Numara','3','resim-yok','0','','on','','numara','urun_kategori','28.04.2022',NULL);
/*!40000 ALTER TABLE `varyant_kategori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `video`
--

DROP TABLE IF EXISTS `video`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `sira` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `linki` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `video`
--

LOCK TABLES `video` WRITE;
/*!40000 ALTER TABLE `video` DISABLE KEYS */;
INSERT INTO `video` (`id`, `adi`, `sira`, `aciklama`, `linki`, `durum`, `resim`) VALUES (6,'VİDEO 1','1','<p>lorem ipsum</p>\r\n','https://www.youtube.com/watch?v=5WmdnPicUoU&t=2080s','on','861-video-1.webp');
/*!40000 ALTER TABLE `video` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `yonetici`
--

DROP TABLE IF EXISTS `yonetici`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `yonetici` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_soyad` varchar(555) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `eposta` varchar(555) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `sifre` varchar(555) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `ilk_giris` varchar(555) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `son_giris` varchar(555) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `logo` varchar(555) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `kapak_foto` varchar(555) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `admin` int(11) DEFAULT NULL,
  `normalsifre` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `yonetici`
--

LOCK TABLES `yonetici` WRITE;
/*!40000 ALTER TABLE `yonetici` DISABLE KEYS */;
INSERT INTO `yonetici` (`id`, `ad_soyad`, `eposta`, `sifre`, `ilk_giris`, `son_giris`, `logo`, `kapak_foto`, `admin`, `normalsifre`) VALUES (9,'Umut Tamirci','umut@umut.com','9c17c424b41f52c6d1c6a4eca966064df4844b01','15.09.2020','28.04.2022','100.png','991-.jpg',1,NULL),(15,'Demo','demo@demo.com','89e495e7941cf9e40e6980d14a16bf023ccd4c91',NULL,'17.07.2022',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `yonetici` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `yorumlar`
--

DROP TABLE IF EXISTS `yorumlar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `yorumlar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `sira` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `onaciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `seo` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `tur` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `eklenme_tarihi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `guncelleme_tarihi` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `linki` text CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `yorumlar`
--

LOCK TABLES `yorumlar` WRITE;
/*!40000 ALTER TABLE `yorumlar` DISABLE KEYS */;
INSERT INTO `yorumlar` (`id`, `adi`, `sira`, `resim`, `kategori`, `onaciklama`, `durum`, `aciklama`, `seo`, `tur`, `eklenme_tarihi`, `guncelleme_tarihi`, `linki`) VALUES (2,'Umut Tamirci','2','334-umut-tamirci.webp',NULL,'','on','<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type an</p>\r\n','umut-tamirci','yorumlar','06.02.2022','07.02.2022',''),(3,'Umut Tamirci','3','170-umut-tamirci.webp',NULL,'','on','<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type an</p>\r\n','umut-tamirci','yorumlar','06.02.2022','07.02.2022',''),(4,'Umut Tamirci','4','302-umut-tamirci.webp',NULL,'','on','<p>Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type an</p>\r\n','umut-tamirci','yorumlar','06.02.2022','07.02.2022','');
/*!40000 ALTER TABLE `yorumlar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'umutwqzn_butikv1'
--

--
-- Dumping routines for database 'umutwqzn_butikv1'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-07-29 16:23:01
