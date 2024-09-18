-- MySQL dump 10.13  Distrib 8.0.39, for Win64 (x86_64)
--
-- Host: localhost    Database: miranda
-- ------------------------------------------------------
-- Server version	8.0.39

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
-- Table structure for table `booking_statuses`
--

DROP TABLE IF EXISTS `booking_statuses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `booking_statuses` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `booking_statuses`
--

LOCK TABLES `booking_statuses` WRITE;
/*!40000 ALTER TABLE `booking_statuses` DISABLE KEYS */;
INSERT INTO `booking_statuses` VALUES (1,'check_in'),(2,'check_out'),(3,'in_progress');
/*!40000 ALTER TABLE `booking_statuses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bookings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `status_id` int DEFAULT NULL,
  `room_id` int DEFAULT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `order_date` datetime NOT NULL,
  `check_in` datetime NOT NULL,
  `check_out` datetime NOT NULL,
  `special_request` varchar(400) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status_id` (`status_id`),
  KEY `room_id` (`room_id`),
  CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `booking_statuses` (`id`),
  CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bookings`
--

LOCK TABLES `bookings` WRITE;
/*!40000 ALTER TABLE `bookings` DISABLE KEYS */;
INSERT INTO `bookings` VALUES (1,1,7,'Valerie','Franey','2024-09-16 01:13:49','2024-09-27 06:11:20','2024-10-09 06:11:20','Antiquus illo culpo.'),(2,2,3,'Ara','Nader','2024-08-11 07:50:06','2024-08-24 23:54:59','2024-08-24 23:54:59','Sunt autem subnecto.'),(3,2,8,'Rubie','Stokes','2024-07-19 18:26:37','2024-08-07 08:13:44','2024-08-15 08:13:44','Victoria casso doloremque traho quas caecus arma.'),(4,2,1,'Edyth','Lynch','2024-07-27 12:01:16','2024-08-04 22:15:39','2024-08-16 22:15:39','Vita bos vix ullus cupio stillicidium vero.'),(5,2,10,'Jovanny','Berge','2024-07-17 16:23:25','2024-08-05 10:16:49','2024-08-15 10:16:49','Aufero cubicularis constans blandior.'),(6,1,6,'Berta','Goodwin','2024-09-12 16:49:11','2024-09-28 01:12:24','2024-10-12 01:12:24','Desino pecus ars adulatio amplexus vilicus degusto.'),(7,1,9,'Bennett','Aufderhar','2024-09-08 08:20:25','2024-09-17 22:26:50','2024-09-25 22:26:50','Utilis adopto atrocitas.'),(8,1,4,'Hailie','Streich','2024-08-30 19:53:44','2024-09-18 13:19:06','2024-10-04 13:19:06','Collum suasoria angustus comprehendo.'),(9,2,2,'Trinity','Williamson','2024-07-23 15:55:07','2024-08-09 01:17:24','2024-08-17 01:17:24','Copia impedit stips vulpes adamo.'),(10,1,5,'Nicole','Dickens','2024-08-24 08:55:50','2024-09-09 04:56:52','2024-09-27 04:56:52','Turba comburo angustus rem placeat.');
/*!40000 ALTER TABLE `bookings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_statuses`
--

DROP TABLE IF EXISTS `contact_statuses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contact_statuses` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_statuses`
--

LOCK TABLES `contact_statuses` WRITE;
/*!40000 ALTER TABLE `contact_statuses` DISABLE KEYS */;
INSERT INTO `contact_statuses` VALUES (1,''),(2,'archived');
/*!40000 ALTER TABLE `contact_statuses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contacts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `status_id` int DEFAULT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `status_id` (`status_id`),
  CONSTRAINT `contacts_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `contact_statuses` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (1,2,'Willow','Bayer','Agustina_Mueller9@hotmail.com','561.218.3493 x92124','certus veritatis coruscus','Degero vomito sumptus venia paulatim. Deinde tactus clam delinquo texo labore uter talus amet sub. Somniculosus saepe stella.','2024-08-26 14:21:46'),(2,2,'Jett','Kihn','Bulah53@yahoo.com','1-885-975-0099','capto cedo adicio','Concido tepesco subseco ipsam calculus provident tenuis. Auctus trans quos valeo stips voluptatum harum cetera. Denego vehemens delibero beatus ciminatio torrens agnosco abbas.','2024-08-30 05:15:48'),(3,2,'Georgette','Pagac','Vidal_Leuschke0@yahoo.com','327.730.1874 x75838','sursum aurum audio','Quod synagoga dedico baiulus copia. Utrimque vae tollo eos thesaurus adhuc tergum tergo vesper. Stipes incidunt vero.','2024-03-19 02:31:12'),(4,1,'Hassan','Nienow','Clementine71@yahoo.com','1-855-375-6231','vox coniuratio verus','Caecus caute decumbo coma stultus aegrus vicissitudo suadeo. Alienus auctor adulescens provident cariosus crinis aequitas aeternus. Acies corona amplus paulatim viridis non benigne adduco vestigium.','2023-09-15 23:27:52'),(5,2,'Brady','Murray','Brooke.Satterfield@hotmail.com','(793) 744-3669 x105','architecto curo deporto','Depopulo sui somnus agnitio viridis arguo aliquid. Reiciendis ut virgo quaerat temperantia. Cavus patior vito thema patior bibo appello.','2024-06-18 13:57:16'),(6,1,'Alfonzo','Jaskolski','Gilberto_Stracke-Armstrong27@hotmail.com','1-266-588-4795 x4870','ciminatio numquam audeo','Tabula socius clementia abbas attero deleniti repellat cuppedia complectus adulatio. Synagoga adfero talio termes compello vae auctus vehemens. Caveo ventito utilis balbus vinculum.','2024-06-19 00:30:23'),(7,2,'Dane','Gutmann','Garrison.Brown@gmail.com','214.784.5054 x532','benigne vestigium crebro','Paulatim vinum vinum inventore tubineus pecco. Qui brevis sumptus fugit praesentium desino. Omnis autus cuius pauci confido clarus pax commodi vivo antepono.','2024-03-12 11:08:08'),(8,2,'Zaria','Koss','Xander_Christiansen77@hotmail.com','753-387-7042 x02697','excepturi tonsor strenuus','Angulus coruscus admiratio tracto vere. Magni blanditiis dicta aperio carpo angustus. Adfectus tantum aer eaque conitor nihil caecus vinculum.','2024-03-16 08:46:30'),(9,1,'Jairo','Bashirian','Makenna80@yahoo.com','(609) 341-2336','acsi voluptatum ventosus','Sollers tum perspiciatis astrum argentum. Quis talio defero brevis arcesso. Vinum adipiscor libero.','2023-11-08 04:53:41'),(10,2,'Leland','Paucek','Murphy.Schmeler@hotmail.com','(825) 411-6065 x158','aperio tabesco tardus','Aureus ter colligo desolo ultra vulticulus. Cras defendo acer vita cohors fugiat confugo deficio defetiscor dolore. Solutio harum trado spero delibero textus cohors.','2023-12-31 13:20:49');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `room_facilities`
--

DROP TABLE IF EXISTS `room_facilities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `room_facilities` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `room_facilities`
--

LOCK TABLES `room_facilities` WRITE;
/*!40000 ALTER TABLE `room_facilities` DISABLE KEYS */;
INSERT INTO `room_facilities` VALUES (1,'Air conditioner'),(3,'Breakfast'),(5,'Cleaning'),(7,'Grocery'),(2,'High speed WiFi'),(4,'Kitchen'),(9,'Shop near'),(6,'Shower'),(8,'Single bed'),(10,'Towels');
/*!40000 ALTER TABLE `room_facilities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `room_statuses`
--

DROP TABLE IF EXISTS `room_statuses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `room_statuses` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `room_statuses`
--

LOCK TABLES `room_statuses` WRITE;
/*!40000 ALTER TABLE `room_statuses` DISABLE KEYS */;
INSERT INTO `room_statuses` VALUES (1,'available'),(2,'booked');
/*!40000 ALTER TABLE `room_statuses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rooms` (
  `id` int NOT NULL AUTO_INCREMENT,
  `status_id` int DEFAULT NULL,
  `number` int NOT NULL,
  `description` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `cancellation_policy` text,
  `has_offer` tinyint(1) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `price_night` decimal(10,2) DEFAULT NULL,
  `discount` int DEFAULT NULL,
  `photos` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `status_id` (`status_id`),
  CONSTRAINT `rooms_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `room_statuses` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rooms`
--

LOCK TABLES `rooms` WRITE;
/*!40000 ALTER TABLE `rooms` DISABLE KEYS */;
INSERT INTO `rooms` VALUES (1,2,1,'Alius vitae coniecto suppono thymbra appello sophismata caelum accommodo angustus. Ademptio ventito iure.','Refined Frozen Gloves','Free cancellation up to 24 hours before check-in.',0,'Double Bed',280.97,35,'https://picsum.photos/seed/yluvnPv/640/480, https://picsum.photos/seed/H5EC1uDxXa/640/480'),(2,1,2,'Basium candidus benigne adipisci. Temptatio ara vestrum.','Ergonomic Concrete Shirt','Free cancellation up to 24 hours before check-in.',1,'Single Bed',331.82,18,'https://loremflickr.com/640/480?lock=5811042034647040, https://loremflickr.com/640/480?lock=698847913312256'),(3,2,3,'Minima suppono laborum adversus angelus cruentus conventus ustulo decet. Vapulus adulescens territo sperno summisse conqueror ipsa.','Practical Steel Gloves','Free cancellation up to 24 hours before check-in.',0,'Double Bed',325.21,33,'https://loremflickr.com/640/480?lock=6514348883181568, https://picsum.photos/seed/qCR97dmyG/640/480'),(4,2,4,'Quia cresco cavus cum vicinus tolero stabilis autem. Sumptus necessitatibus civitas valde antiquus.','Refined Plastic Computer','Free cancellation up to 24 hours before check-in.',0,'Double Bed',465.44,18,'https://picsum.photos/seed/WU6zTct/640/480, https://loremflickr.com/640/480?lock=4965699864756224'),(5,1,5,'Conduco inventore suppellex surgo constans texo coaegresco pecto. Calcar pel advenio.','Bespoke Metal Chicken','Free cancellation up to 24 hours before check-in.',1,'Double Bed',226.92,29,'https://loremflickr.com/640/480?lock=357149920198656, https://picsum.photos/seed/C8R0T1Z0/640/480'),(6,2,6,'Celo voveo carpo velum quam doloribus. Usitas censura vesco quasi cena.','Electronic Frozen Ball','Free cancellation up to 24 hours before check-in.',1,'Double Bed',344.39,7,'https://picsum.photos/seed/0p2DPxlUp/640/480, https://picsum.photos/seed/8BmWoe1j/640/480'),(7,2,7,'Tabula ascisco quisquam error carus ocer suspendo occaecati subito. Volaticus depraedor atavus.','Refined Steel Salad','Free cancellation up to 24 hours before check-in.',0,'Double Bed',464.05,43,'https://loremflickr.com/640/480?lock=1890436174053376, https://loremflickr.com/640/480?lock=6415224219369472'),(8,2,8,'Baiulus amoveo quae commodi. Conventus ulterius correptius.','Elegant Rubber Sausages','Free cancellation up to 24 hours before check-in.',1,'Double Bed',116.65,14,'https://loremflickr.com/640/480?lock=3023478638772224, https://loremflickr.com/640/480?lock=3739234806530048'),(9,2,9,'Quae tergiversatio vos. Cohors sodalitas ipsam adipiscor adhuc stabilis tamdiu.','Licensed Concrete Gloves','Free cancellation up to 24 hours before check-in.',1,'Single Bed',70.82,20,'https://picsum.photos/seed/ppoOm5OtA/640/480, https://loremflickr.com/640/480?lock=5701300155056128'),(10,1,10,'Cognatus curvo esse. Ater audeo stipes.','Ergonomic Soft Table','Free cancellation up to 24 hours before check-in.',1,'Double Superior',228.22,28,'https://picsum.photos/seed/xNvWuXp5Q3/640/480, https://loremflickr.com/640/480?lock=3277561446531072'),(12,1,11,'Thesis praesentium statim caritas suscipio annus antea. Creo esse auctus ventito cur deorsum.','Mega suite','Free cancellation up to 24 hours before check-in.',0,'Double Superior',416.17,8,'https://picsum.photos/seed/AKK8S/640/480, https://picsum.photos/seed/KEBDjkL/640/480');
/*!40000 ALTER TABLE `rooms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rooms_facilities_relation`
--

DROP TABLE IF EXISTS `rooms_facilities_relation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rooms_facilities_relation` (
  `room_id` int NOT NULL,
  `facility_id` int NOT NULL,
  PRIMARY KEY (`room_id`,`facility_id`),
  KEY `facility_id` (`facility_id`),
  CONSTRAINT `rooms_facilities_relation_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE,
  CONSTRAINT `rooms_facilities_relation_ibfk_2` FOREIGN KEY (`facility_id`) REFERENCES `room_facilities` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rooms_facilities_relation`
--

LOCK TABLES `rooms_facilities_relation` WRITE;
/*!40000 ALTER TABLE `rooms_facilities_relation` DISABLE KEYS */;
INSERT INTO `rooms_facilities_relation` VALUES (1,1),(2,1),(4,1),(10,1),(1,2),(2,2),(3,2),(3,3),(5,3),(5,4),(6,4),(7,4),(9,4),(4,5),(5,5),(6,5),(7,5),(10,5),(3,6),(4,6),(5,6),(7,6),(10,6),(12,6),(2,7),(12,7),(1,8),(2,8),(5,8),(7,8),(8,8),(10,8),(2,10),(8,10),(10,10);
/*!40000 ALTER TABLE `rooms_facilities_relation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_jobs`
--

DROP TABLE IF EXISTS `user_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_jobs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_jobs`
--

LOCK TABLES `user_jobs` WRITE;
/*!40000 ALTER TABLE `user_jobs` DISABLE KEYS */;
INSERT INTO `user_jobs` VALUES (1,'Manager'),(2,'Reservation desk'),(3,'Room service');
/*!40000 ALTER TABLE `user_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_statuses`
--

DROP TABLE IF EXISTS `user_statuses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_statuses` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_statuses`
--

LOCK TABLES `user_statuses` WRITE;
/*!40000 ALTER TABLE `user_statuses` DISABLE KEYS */;
INSERT INTO `user_statuses` VALUES (1,'active'),(2,'inactive');
/*!40000 ALTER TABLE `user_statuses` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-09-18 11:39:55
