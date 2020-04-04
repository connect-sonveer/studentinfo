-- MySQL dump 10.13  Distrib 8.0.13, for Linux (x86_64)
--
-- Host: localhost    Database: studentinfo
-- ------------------------------------------------------
-- Server version	8.0.13

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8mb4 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `attendance`
--

DROP TABLE IF EXISTS `attendance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `attendance` (
  `attid` bigint(4) NOT NULL AUTO_INCREMENT,
  `studid` varchar(20) NOT NULL,
  `subid` bigint(4) NOT NULL,
  `totalclasses` int(2) NOT NULL,
  `attendedclasses` int(2) NOT NULL,
  `percentage` double(4,2) NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`attid`),
  KEY `studid` (`studid`),
  KEY `subid` (`subid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attendance`
--

LOCK TABLES `attendance` WRITE;
/*!40000 ALTER TABLE `attendance` DISABLE KEYS */;
/*!40000 ALTER TABLE `attendance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `contact` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `emailid` varchar(300) NOT NULL,
  `contactno` varchar(20) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (1,'Sonveer SIngh','er.sonveersingh.it.mit@gmail.com','9555887188','adasd','0'),(2,'Sonveer SIngh','er.sonveersingh.it.mit@gmail.com','9555887188','adasd','0'),(3,'Sonveer SIngh','er.sonveersingh.it.mit@gmail.com','9555887188','Test','0'),(4,'Sonveer SIngh','er.sonveersingh.it.mit@gmail.com','9555887188','Need a New Mouse','Need a New Mouse'),(5,'Sonveer SIngh','er.sonveersingh.it.mit@gmail.com','9555887188','Need a New Mouse','sdasdasdasd'),(6,'Sonveer SIngh','sonveer.s@icreon.com','9555887188','Test','sdsad'),(7,'Sonveer SIngh','sonveer.s@icreon.com','9555887188','Test','sdsad');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `course` (
  `courseid` bigint(4) NOT NULL AUTO_INCREMENT,
  `coursename` varchar(40) NOT NULL,
  `comment` text NOT NULL,
  `coursekey` varchar(15) NOT NULL,
  PRIMARY KEY (`courseid`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course`
--

LOCK TABLES `course` WRITE;
/*!40000 ALTER TABLE `course` DISABLE KEYS */;
INSERT INTO `course` VALUES (1,'Bachelor of Arts','This Course is related to Arts field.','BA'),(2,'Bachelor of Commerce','This course is related to commerce field.','BCom'),(3,'Bachelor of Bussiness Management','This course is related to Bussiness field.','BBM'),(4,'Bachelor of Science','This field is related to science field.','BSc'),(5,'Bachelor of Computer Application','This field is related to computer field.','BCA'),(6,'Bachelor of Social Work','This field is related to social welfare field.','BSW'),(7,'Bachelor of Technology','This field is related to Technology.','B.Tech'),(8,'Bachelor of Pharmacy','This field is related to pharmacy','B.Pharm'),(9,'Bachelor of Science in Technology','This field is related to Science and Technology.','BSc(IT)'),(42,'Qwerty','6yfdrr','6yhhgf'),(43,'asdsa46565656','smarty','asdsad676767676'),(45,'asdasd2323','45645erer','45664545ddasdas'),(46,'4343wererwer','43434werwer','44545wrwerwe'),(47,'545rtrtrt','3434tytyty','5534erer');
/*!40000 ALTER TABLE `course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `examination`
--

DROP TABLE IF EXISTS `examination`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `examination` (
  `examid` bigint(4) NOT NULL AUTO_INCREMENT,
  `studid` varchar(20) NOT NULL,
  `subid` bigint(4) NOT NULL,
  `courseid` bigint(4) NOT NULL,
  `internaltype` varchar(20) NOT NULL,
  `maxmarks` int(2) NOT NULL,
  `scored` int(2) NOT NULL,
  `percentage` float NOT NULL,
  `result` text NOT NULL,
  PRIMARY KEY (`examid`),
  KEY `subid` (`subid`),
  KEY `studid` (`studid`),
  KEY `courseid` (`courseid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `examination`
--

LOCK TABLES `examination` WRITE;
/*!40000 ALTER TABLE `examination` DISABLE KEYS */;
/*!40000 ALTER TABLE `examination` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lectures`
--

DROP TABLE IF EXISTS `lectures`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `lectures` (
  `lecid` bigint(4) NOT NULL AUTO_INCREMENT,
  `password` varchar(50) NOT NULL,
  `courseid` bigint(4) NOT NULL,
  `lecname` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contactno` varchar(15) NOT NULL,
  PRIMARY KEY (`lecid`),
  KEY `courseid` (`courseid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lectures`
--

LOCK TABLES `lectures` WRITE;
/*!40000 ALTER TABLE `lectures` DISABLE KEYS */;
INSERT INTO `lectures` VALUES (1,'0cc175b9c0f1b6a831c399e269772661',5,'geetha','Female','fgv','9876543211');
/*!40000 ALTER TABLE `lectures` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `news` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `news_content` varchar(5000) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'Exam Date','BCA 1st Semester exam date is 15th Mar 2017.','2017-02-28 10:58:40','2017-02-28 10:58:40'),(2,'Culturel Fest','Annual culturel fest is coming soon, so be prepared to participate in the event.','2017-02-28 11:01:33','2017-06-16 05:55:58'),(3,'Pakistan beats England','In Champions Trophy, in first semifinal match, Pakistan beats England very comprehensively. Hasan Ali Gets Man of the Match. It was a one sided win for Pakistan, they played very well.','2017-06-15 06:24:10','2017-06-15 06:24:10'),(4,'asdasd','In Champions Trophy, in first semifinal match, Pakistan beats England very comprehensively. Hasan Ali Gets Man of the Match. It was a one sided win for Pakistan, they played very well.','2017-06-20 12:53:23','2017-06-20 13:10:05'),(5,'TEst','In Champions Trophy, in first semifinal match, Pakistan beats England very comprehensively. Hasan Ali Gets Man of the Match. It was a one sided win for Pakistan, they played very well.','2017-06-20 12:54:07','2017-06-20 13:10:10');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `newsletter` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `user_id` int(50) NOT NULL,
  `subscription_flag` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `newsletter`
--

LOCK TABLES `newsletter` WRITE;
/*!40000 ALTER TABLE `newsletter` DISABLE KEYS */;
INSERT INTO `newsletter` VALUES (1,1,1,'2017-03-01 14:11:38');
/*!40000 ALTER TABLE `newsletter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `semester`
--

DROP TABLE IF EXISTS `semester`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `semester` (
  `semid` bigint(3) NOT NULL AUTO_INCREMENT,
  `semester` varchar(25) NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`semid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `semester`
--

LOCK TABLES `semester` WRITE;
/*!40000 ALTER TABLE `semester` DISABLE KEYS */;
INSERT INTO `semester` VALUES (1,'First','This is the first semester and will be active for the first six months of the first year.'),(2,'Second','This is the second semester and will be active for the second six months of the first year.'),(3,'Three','This is the third semester and will be active for the first six months of the second year.'),(4,'Four','This is the fourth semester and will be active for the second six months of the second year.'),(5,'Five','This is the fifth semester and will be active for the first six months of the third year.'),(6,'Six','This is the sixth semester and will be active for the second six months of the third year.'),(7,'Seven','This is the seventh semester and will be active for the first six months of the fourth year.'),(8,'Eight','This is the eighth semester and will be active for the second six months of the fourth year.');
/*!40000 ALTER TABLE `semester` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stream`
--

DROP TABLE IF EXISTS `stream`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `stream` (
  `id` bigint(4) NOT NULL AUTO_INCREMENT,
  `course_id` bigint(4) NOT NULL,
  `stream_name` varchar(100) NOT NULL,
  `stream_key` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `course_id` (`course_id`),
  CONSTRAINT `course_id` FOREIGN KEY (`course_id`) REFERENCES `course` (`courseid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stream`
--

LOCK TABLES `stream` WRITE;
/*!40000 ALTER TABLE `stream` DISABLE KEYS */;
INSERT INTO `stream` VALUES (1,7,'Information Technology','IT'),(2,7,'Electronics and Communication Engineering','EC'),(3,7,'Mechanical Engineering','ME'),(4,1,'Bachelor of Arts in ABC','BA(ABC)'),(5,1,'Bachelor of Arts in DEF','BA(DEF)'),(6,5,'Bachelor of Computer Application in ABC','BCA(ABC)'),(7,5,'Bachelor of Computer Application in DEF','BCA(DEF)');
/*!40000 ALTER TABLE `stream` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `studentdetails`
--

DROP TABLE IF EXISTS `studentdetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `studentdetails` (
  `id` varchar(25) NOT NULL,
  `studfname` varchar(100) NOT NULL,
  `studlname` varchar(100) NOT NULL,
  `fathername` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contactno` varchar(20) NOT NULL,
  `courseid` bigint(4) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `courseid` (`courseid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `studentdetails`
--

LOCK TABLES `studentdetails` WRITE;
/*!40000 ALTER TABLE `studentdetails` DISABLE KEYS */;
INSERT INTO `studentdetails` VALUES ('1','Sonveer','Singh','Late Shri. Ram Swaroop Singh','Male','Sector 40, Noida','9555887188',5,'1','1992-08-12');
/*!40000 ALTER TABLE `studentdetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `subject` (
  `subid` bigint(4) NOT NULL AUTO_INCREMENT,
  `courseid` bigint(4) NOT NULL,
  `streamid` bigint(4) NOT NULL,
  `subname` varchar(50) NOT NULL,
  `semester` bigint(4) NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`subid`),
  KEY `courseid` (`courseid`),
  KEY `semester` (`semester`),
  KEY `streamid` (`streamid`),
  CONSTRAINT `subject_ibfk_1` FOREIGN KEY (`semester`) REFERENCES `semester` (`semid`),
  CONSTRAINT `subject_ibfk_2` FOREIGN KEY (`courseid`) REFERENCES `course` (`courseid`),
  CONSTRAINT `subject_ibfk_3` FOREIGN KEY (`streamid`) REFERENCES `stream` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subject`
--

LOCK TABLES `subject` WRITE;
/*!40000 ALTER TABLE `subject` DISABLE KEYS */;
INSERT INTO `subject` VALUES (1,7,1,'Physics',1,'Physics'),(2,7,1,'Maths',2,'Maths'),(3,1,4,'Communication Skills',1,'Communication Skills in English'),(4,1,4,'History',2,'History'),(5,7,2,'Manufacturing Process',1,'Manufacturing Process'),(6,7,2,'Engineering Drawing',2,'Engineering Drawing'),(8,7,1,'Oops',3,'Oops');
/*!40000 ALTER TABLE `subject` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_login`
--

DROP TABLE IF EXISTS `user_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `user_login` (
  `id` bigint(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(500) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL,
  `usertype` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_login`
--

LOCK TABLES `user_login` WRITE;
/*!40000 ALTER TABLE `user_login` DISABLE KEYS */;
INSERT INTO `user_login` VALUES (1,'Sonveer Singh','sonveer.s@icreon.com','12345','admin'),(2,'Purnima Kashyap','purnima.s.kashyap@gmail.com','1122','teacher');
/*!40000 ALTER TABLE `user_login` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-04-03 23:12:26
