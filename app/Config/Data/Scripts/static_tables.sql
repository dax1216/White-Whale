use whaledev1;


--
-- Table structure for table `grade_types`
--

DROP TABLE IF EXISTS `grade_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grade_types` (
  `grade_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(5) NOT NULL,
  PRIMARY KEY (`grade_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grade_types`
--

LOCK TABLES `grade_types` WRITE;
/*!40000 ALTER TABLE `grade_types` DISABLE KEYS */;
INSERT INTO `grade_types` VALUES (1,'Any'),(2,'Raw'),(3,'PSA'),(4,'SGC'),(5,'BVG');
/*!40000 ALTER TABLE `grade_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grade_values`
--

DROP TABLE IF EXISTS `grade_values`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grade_values` (
  `grade_value_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(4) NOT NULL,
  `is_raw` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`grade_value_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grade_values`
--

LOCK TABLES `grade_values` WRITE;
/*!40000 ALTER TABLE `grade_values` DISABLE KEYS */;
INSERT INTO `grade_values` VALUES (1,'Poor',1),(2,'Fair',1),(3,'Good',1),(4,'VG',1),(5,'Ex',1),(6,'NM',1),(7,'Mint',1),(8,'1',0),(9,'1.5',0),(10,'2',0),(11,'2.5',0),(12,'3',0),(13,'3.5',0),(14,'4',0),(15,'4.5',0),(16,'5',0),(17,'5.5',0),(18,'6',0),(19,'6.5',0),(20,'7',0),(21,'7.5',0),(22,'8',0),(23,'8.5',0),(24,'9',0),(25,'9.5',0),(26,'10',0);
/*!40000 ALTER TABLE `grade_values` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `positions`
--

DROP TABLE IF EXISTS `positions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `positions` (
  `position_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(4) NOT NULL,
  PRIMARY KEY (`position_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `positions`
--

LOCK TABLES `positions` WRITE;
/*!40000 ALTER TABLE `positions` DISABLE KEYS */;
INSERT INTO `positions` VALUES (1,'1B'),(2,'2B'),(3,'3B'),(4,'C'),(5,'CF'),(6,'LF'),(7,'P'),(8,'RF'),(9,'SS'),(10,'M/C');
/*!40000 ALTER TABLE `positions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `price_ranges`
--

DROP TABLE IF EXISTS `price_ranges`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `price_ranges` (
  `price_range_id` int(11) NOT NULL AUTO_INCREMENT,
  `low_value` float NOT NULL,
  `high_value` float NOT NULL,
  PRIMARY KEY (`price_range_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `price_ranges`
--

LOCK TABLES `price_ranges` WRITE;
/*!40000 ALTER TABLE `price_ranges` DISABLE KEYS */;
INSERT INTO `price_ranges` VALUES (1,0,50),(2,51,100),(3,101,250),(4,251,500),(5,501,1000),(6,1001,2500),(7,2501,5000),(8,5001,10000),(9,10001,25000),(10,25001,50000),(11,50001,100000),(12,100001,250000),(24,250001,500000),(25,500001,1e+06),(26,1e+06,1e+07);
/*!40000 ALTER TABLE `price_ranges` ENABLE KEYS */;
UNLOCK TABLES;


--
-- Table structure for table `qualifiers`
--

DROP TABLE IF EXISTS `qualifiers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `qualifiers` (
  `qualifier_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  PRIMARY KEY (`qualifier_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `qualifiers`
--

LOCK TABLES `qualifiers` WRITE;
/*!40000 ALTER TABLE `qualifiers` DISABLE KEYS */;
INSERT INTO `qualifiers` VALUES (1,'Off-Center (OC)'),(2,'Mark (MK)'),(3,'Autographed (Auto)'),(4,'Trimmed (Trm)'),(5,'Restored (Rstd)'),(6,'Removed from Scrapbook'),(7,'Overprint (OP)'),(8,'Reprint (not allowed to be sold)'),(9,'Authentic (Aut)'),(10,'Printer Scrap (PS)');
/*!40000 ALTER TABLE `qualifiers` ENABLE KEYS */;
UNLOCK TABLES;
