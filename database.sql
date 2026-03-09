-- MySQL dump 10.13  Distrib 8.0.40, for Win64 (x86_64)
--
-- Host: localhost    Database: hoclieu
-- ------------------------------------------------------
-- Server version	8.0.40

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `course` (
  `idcourse` int NOT NULL AUTO_INCREMENT,
  `idsubject` int DEFAULT NULL,
  `iduser` int DEFAULT NULL,
  PRIMARY KEY (`idcourse`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course`
--

LOCK TABLES `course` WRITE;
/*!40000 ALTER TABLE `course` DISABLE KEYS */;
INSERT INTO `course` VALUES (1,1,1),(2,2,1),(3,1,4),(4,4,4),(5,3,1),(6,4,1),(7,5,3),(8,5,2),(9,6,2);
/*!40000 ALTER TABLE `course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documents`
--

DROP TABLE IF EXISTS `documents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `documents` (
  `iddocument` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `document` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`iddocument`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documents`
--

LOCK TABLES `documents` WRITE;
/*!40000 ALTER TABLE `documents` DISABLE KEYS */;
INSERT INTO `documents` VALUES (1,'Nội dung kinh tế vĩ mô','Nghiên cứu nền kinh tế toàn cầu, bao gồm GDP, lạm phát và tỷ lệ thất nghiệp.','bt.docx'),(2,'Nội dung kinh tế quốc tế','Nghiên cứu quan hệ kinh tế giữa các quốc gia, bao gồm thương mại và đầu tư.','DoAnCNPM_baocaowordLAN2-SUA.docx'),(3,'Nội dung kinh tế phát triển','Tập trung vào sự phát triển kinh tế của các quốc gia đang phát triển.','DoAnCNPM_baocaowordLAN3-SUA.docx'),(4,'Nội dung kinh tể học lao động','Nghiên cứu thị trường lao động, mức lương và các chính sách lao động.','1.mp4'),(5,'Nội dung phát triển phần mềm','Thiết kế và lập trình phần mềm cho ứng dụng và hệ thống.','bth4.docx'),(6,'Nội dung an toàn thông tin','Bảo vệ hệ thống và dữ liệu khỏi các mối đe dọa và tấn công mạng.','image.ipg'),(7,'Nội dung khoa học dữ liệu','Phân tích dữ liệu lớn để rút ra thông tin có giá trị.','NhanDienKhuonMat.docx'),(8,'Nội dung trí tuệ nhân tạo','Phát triển các hệ thống có khả năng học và thực hiện công việc của con người.','Snaptik.app_7318046894964444417.mp4'),(9,'1234','1234','tl2,2c2.jpg');
/*!40000 ALTER TABLE `documents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subject_document`
--

DROP TABLE IF EXISTS `subject_document`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subject_document` (
  `idsubject_document` int NOT NULL AUTO_INCREMENT,
  `idsubject` int DEFAULT NULL,
  `iddocument` int DEFAULT NULL,
  PRIMARY KEY (`idsubject_document`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subject_document`
--

LOCK TABLES `subject_document` WRITE;
/*!40000 ALTER TABLE `subject_document` DISABLE KEYS */;
INSERT INTO `subject_document` VALUES (1,1,1),(2,2,2),(3,3,3),(4,4,4),(5,5,5),(6,6,6),(7,7,7),(8,8,8),(9,1,9);
/*!40000 ALTER TABLE `subject_document` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subjects` (
  `idsubject` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `idnganh` int DEFAULT NULL,
  PRIMARY KEY (`idsubject`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subjects`
--

LOCK TABLES `subjects` WRITE;
/*!40000 ALTER TABLE `subjects` DISABLE KEYS */;
INSERT INTO `subjects` VALUES (1,'Kinh tế vĩ mô','Nghiên cứu nền kinh tế toàn cầu, bao gồm GDP, lạm phát và tỷ lệ thất nghiệp.\r ',2),(2,'Kinh tế quốc tế','Nghiên cứu quan hệ kinh tế giữa các quốc gia, bao gồm thương mại và đầu tư.',2),(3,'Kinh tế phát triển','Tập trung vào sự phát triển kinh tế của các quốc gia đang phát triển.',2),(4,'Kinh tế học lao động','Nghiên cứu thị trường lao động, mức lương và các chính sách lao động.',2),(5,'Phát triển phần mềm','Thiết kế và lập trình phần mềm cho ứng dụng và hệ thống.',1),(6,'An toàn thông tin','Bảo vệ hệ thống và dữ liệu khỏi các mối đe dọa và tấn công mạng.',1),(7,'Khoa học dữ liệu','Phân tích dữ liệu lớn để rút ra thông tin có giá trị.',1),(8,'Trí tuệ nhân tạo','Phát triển các hệ thống có khả năng học và thực hiện công việc của con người.',1);
/*!40000 ALTER TABLE `subjects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `iduser` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `idnganh` int DEFAULT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Cao Văn Sâm','sam2@gmail.com','123','Giảng viên',2),(2,'Cao Văn Sâm','sam1@gmail.com','123','Giảng viên',1),(3,'Hoàng Văn Hiếu','hieu@gmail.com','123','Học viên',1),(4,'Phạm Hoàng Long','long@gmail.com','123','Học viên',2);
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

-- Dump completed on 2026-03-10  0:40:43
