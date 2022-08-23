-- MySQL dump 10.13  Distrib 8.0.29, for Win64 (x86_64)
--
-- Host: localhost    Database: my_project
-- ------------------------------------------------------
-- Server version	8.0.29

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
-- Table structure for table `binhluan`
--

DROP TABLE IF EXISTS `binhluan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `binhluan` (
  `id_binhluan` int NOT NULL AUTO_INCREMENT,
  `id_sanpham` int DEFAULT NULL,
  `id_khachhang` int DEFAULT NULL,
  `noidung` text,
  `trangthai` tinyint(1) DEFAULT (0),
  `traloi` text,
  `id_dequy` int DEFAULT NULL,
  PRIMARY KEY (`id_binhluan`),
  KEY `id_sanpham` (`id_sanpham`),
  KEY `id_khachhang` (`id_khachhang`),
  CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`idsanpham`),
  CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`id_khachhang`) REFERENCES `taikhoan` (`id_kh`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `binhluan`
--

LOCK TABLES `binhluan` WRITE;
/*!40000 ALTER TABLE `binhluan` DISABLE KEYS */;
/*!40000 ALTER TABLE `binhluan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `giohang`
--

DROP TABLE IF EXISTS `giohang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `giohang` (
  `id_giohang` int NOT NULL AUTO_INCREMENT,
  `ten_sanpham` varchar(255) NOT NULL,
  `gia` float DEFAULT NULL,
  `soluong` int DEFAULT NULL,
  `ghichu` varchar(255) DEFAULT NULL,
  `hinh` varchar(255) DEFAULT NULL,
  `id_kh` int DEFAULT NULL,
  `id_sp` int DEFAULT NULL,
  `trangthai` tinyint(1) DEFAULT (0),
  `ghichu_kh` text,
  PRIMARY KEY (`id_giohang`),
  KEY `id_kh` (`id_kh`),
  KEY `id_sp` (`id_sp`),
  CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`id_kh`) REFERENCES `taikhoan` (`id_kh`),
  CONSTRAINT `giohang_ibfk_2` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`idsanpham`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `giohang`
--

LOCK TABLES `giohang` WRITE;
/*!40000 ALTER TABLE `giohang` DISABLE KEYS */;
/*!40000 ALTER TABLE `giohang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kho`
--

DROP TABLE IF EXISTS `kho`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kho` (
  `id` int NOT NULL AUTO_INCREMENT,
  `size` json NOT NULL,
  `ma_giamgia` varchar(10) DEFAULT NULL,
  `soluong` int DEFAULT NULL,
  `idsanpham` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ma_giamgia` (`ma_giamgia`),
  KEY `idsanpham` (`idsanpham`),
  CONSTRAINT `kho_ibfk_1` FOREIGN KEY (`idsanpham`) REFERENCES `sanpham` (`idsanpham`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kho`
--

LOCK TABLES `kho` WRITE;
/*!40000 ALTER TABLE `kho` DISABLE KEYS */;
/*!40000 ALTER TABLE `kho` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `loai_san_pham`
--

DROP TABLE IF EXISTS `loai_san_pham`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `loai_san_pham` (
  `idmaloai` int NOT NULL AUTO_INCREMENT,
  `tenLoai` varchar(255) NOT NULL,
  PRIMARY KEY (`idmaloai`),
  UNIQUE KEY `tenLoai` (`tenLoai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `loai_san_pham`
--

LOCK TABLES `loai_san_pham` WRITE;
/*!40000 ALTER TABLE `loai_san_pham` DISABLE KEYS */;
/*!40000 ALTER TABLE `loai_san_pham` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sanpham` (
  `idsanpham` int NOT NULL AUTO_INCREMENT,
  `tensanpham` varchar(255) NOT NULL,
  `masanpham` varchar(10) NOT NULL,
  `gia` float NOT NULL,
  `hinhanh` varchar(20) NOT NULL,
  `thumnail` json NOT NULL,
  `mota` text NOT NULL,
  `mota_ngan` text NOT NULL,
  `hot` tinyint NOT NULL DEFAULT (0),
  `giamgia` float NOT NULL,
  `id_maloai` int DEFAULT NULL,
  PRIMARY KEY (`idsanpham`),
  UNIQUE KEY `tensanpham` (`tensanpham`),
  UNIQUE KEY `masanpham` (`masanpham`),
  KEY `id_maloai` (`id_maloai`),
  CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_maloai`) REFERENCES `loai_san_pham` (`idmaloai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sanpham`
--

LOCK TABLES `sanpham` WRITE;
/*!40000 ALTER TABLE `sanpham` DISABLE KEYS */;
/*!40000 ALTER TABLE `sanpham` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `taikhoan`
--

DROP TABLE IF EXISTS `taikhoan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `taikhoan` (
  `id_kh` int NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `user_password` varchar(20) NOT NULL,
  `soDienThoai` int DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `diachi` varchar(255) DEFAULT NULL,
  `avatar` varchar(20) DEFAULT NULL,
  `user_role` tinyint DEFAULT (0),
  PRIMARY KEY (`id_kh`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `taikhoan`
--

LOCK TABLES `taikhoan` WRITE;
/*!40000 ALTER TABLE `taikhoan` DISABLE KEYS */;
/*!40000 ALTER TABLE `taikhoan` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-07-12 14:00:49
