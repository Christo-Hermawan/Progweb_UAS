/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.4.24-MariaDB : Database - uas
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`uas` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `uas`;

/*Table structure for table `booking` */

DROP TABLE IF EXISTS `booking`;

CREATE TABLE `booking` (
  `id_booking` int(12) NOT NULL AUTO_INCREMENT,
  `plat` varchar(255) NOT NULL,
  `merek_mobil` varchar(255) NOT NULL,
  `kilometer` int(12) NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id_booking`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8mb4;

/*Data for the table `booking` */

insert  into `booking`(`id_booking`,`plat`,`merek_mobil`,`kilometer`,`waktu`,`service`,`keterangan`,`date`,`email`) values 
(70,'D 5345 zxc','CIVIC',500,'16:00','Ganti Oli','tes','2023-01-12','user@gmail.com'),
(72,'D 5934 DB','CIVIC',500,'13:00','Ganti Oli','tes','2023-01-04','user@gmail.com');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `email` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birthdate` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `user` */

insert  into `user`(`email`,`fullname`,`password`,`gender`,`birthdate`,`user_type`) values 
('christo.hermawan08@gmail.com','Christopher Hermawan','b93939873fd4923043b9dec975811f66','Male','2023-01-12','admin'),
('ronaldo.khan0207@yahoo.co.id','Ronaldo Khan Kashali','f83d36fde7b8ee5bc58cb24d0db73238','Male','2023-01-04','admin'),
('user2@gmail.com','user2','6a20b888cac2a25523e345fb5d2bc3fa','Male','2023-01-17','user'),
('user@gmail.com','user','5fa72358f0b4fb4f2c5d7de8c9a41846','Male','2023-01-17','user');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
