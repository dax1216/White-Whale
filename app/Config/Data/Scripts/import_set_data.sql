
--
-- Table structure for table `acc_catalogs`
--

DROP TABLE IF EXISTS `acc_catalogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acc_catalogs` (
  `acc_catalog_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  PRIMARY KEY (`acc_catalog_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acc_catalogs`
--

LOCK TABLES `acc_catalogs` WRITE;
/*!40000 ALTER TABLE `acc_catalogs` DISABLE KEYS */;
INSERT INTO `acc_catalogs` VALUES (1,'T206');
/*!40000 ALTER TABLE `acc_catalogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brands`
--

LOCK TABLES `brands` WRITE;
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
INSERT INTO `brands` VALUES (1,'Topps');
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;
UNLOCK TABLES;


--
-- Table structure for table `set_infos`
--

DROP TABLE IF EXISTS `set_infos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `set_infos` (
  `set_info_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `short_name` varchar(45) DEFAULT NULL,
  `subset_name` varchar(255) DEFAULT NULL,
  `acc_catalog_id` int(11) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `dist_start_year` int(11) NOT NULL,
  `dist_end_year` int(11) DEFAULT NULL,
  `set_wiki_info_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`set_info_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `set_infos`
--

LOCK TABLES `set_infos` WRITE;
/*!40000 ALTER TABLE `set_infos` DISABLE KEYS */;
INSERT INTO `set_infos` VALUES (1,'1909 T206  1911','1909 T206  1911','White Borders',1,NULL,1909,1911,1,'0000-00-00 00:00:00',NULL),(2,'1952 Topps','1952 Topps',NULL,NULL,1,1952,1952,2,'0000-00-00 00:00:00',NULL);
/*!40000 ALTER TABLE `set_infos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `set_wiki_infos`
--

DROP TABLE IF EXISTS `set_wiki_infos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `set_wiki_infos` (
  `set_wiki_info_id` int(11) NOT NULL AUTO_INCREMENT,
  `overview` varchar(4096) DEFAULT NULL,
  `size` varchar(2048) DEFAULT NULL,
  `production` varchar(2048) DEFAULT NULL,
  `distribution` varchar(2048) DEFAULT NULL,
  `rarity` varchar(2048) DEFAULT NULL,
  `base_overview` varchar(2048) DEFAULT NULL,
  `variations` varchar(2048) DEFAULT NULL,
  `famous_copies` varchar(2048) DEFAULT NULL,
  `counterfeit` varchar(2048) DEFAULT NULL,
  `references` varchar(2048) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`set_wiki_info_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `set_wiki_infos`
--

LOCK TABLES `set_wiki_infos` WRITE;
/*!40000 ALTER TABLE `set_wiki_infos` DISABLE KEYS */;
INSERT INTO `set_wiki_infos` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `set_wiki_infos` ENABLE KEYS */;
UNLOCK TABLES;