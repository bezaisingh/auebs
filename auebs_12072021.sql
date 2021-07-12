/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 8.0.21 : Database - auebs
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`auebs` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `auebs`;

/*Table structure for table `admin_table` */

DROP TABLE IF EXISTS `admin_table`;

CREATE TABLE `admin_table` (
  `id` int NOT NULL,
  `auth_user` varchar(20) NOT NULL,
  `access_lvl` varchar(20) NOT NULL,
  `uid` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `admin_table` */

insert  into `admin_table`(`id`,`auth_user`,`access_lvl`,`uid`,`pwd`) values 
(1,'bj','4','bj','bj');

/*Table structure for table `bill_table` */

DROP TABLE IF EXISTS `bill_table`;

CREATE TABLE `bill_table` (
  `id` int NOT NULL AUTO_INCREMENT,
  `meter_no` varchar(10) NOT NULL,
  `qtr_no` varchar(10) DEFAULT NULL,
  `consumer_name` varchar(50) DEFAULT NULL,
  `tariff_category` varchar(20) DEFAULT NULL,
  `bill_date` date DEFAULT NULL,
  `no_of_days` int DEFAULT NULL,
  `prev_reading` float DEFAULT NULL,
  `current_reading` float DEFAULT NULL,
  `diff_in_reading` float DEFAULT NULL,
  `unit_consumed` int DEFAULT NULL,
  `net_bill_amt` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `due_date` varchar(10) DEFAULT NULL,
  `arrear_amt` float DEFAULT NULL,
  `installment` float DEFAULT NULL,
  `balance_amt` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `bill_table` */

insert  into `bill_table`(`id`,`meter_no`,`qtr_no`,`consumer_name`,`tariff_category`,`bill_date`,`no_of_days`,`prev_reading`,`current_reading`,`diff_in_reading`,`unit_consumed`,`net_bill_amt`,`start_date`,`end_date`,`due_date`,`arrear_amt`,`installment`,`balance_amt`) values 
(1,'223','N100A','Johny Maldova','High','2021-03-03',5,75,74,421,420,'453','2021-03-03','2021-03-28',NULL,NULL,NULL,22),
(2,'221','N100B','Bibek Singh','NA','2021-03-19',30,200,300,100,100,'300','2021-02-12','2021-03-12',NULL,NULL,NULL,50),
(3,'221','112','Bibek Singh','Domestic A (Below 5k','2021-06-26',25,200,223,23,23,'','2021-06-01','2021-06-26',NULL,NULL,NULL,80),
(4,'221','112','Bibek Singh','Domestic A (Below 5k','2021-06-26',25,120,321,201,201,'','2021-06-01','2021-06-26',NULL,NULL,NULL,68),
(5,'223','322','Bijay Kumar Singh','Domestic A (Below 5k','2021-06-10',25,120,321,201,201,'','2021-06-01','2021-06-26',NULL,NULL,NULL,98),
(6,'345','N100B','Mafizur Rahman','Domestic A (Below 5k','2021-07-10',29,100,200,100,100,NULL,'2021-07-01','2021-07-30',NULL,NULL,NULL,46),
(7,'223','322','Bijay Kumar Singh','Domestic A (Below 5k','2021-07-11',18,20,220,200,200,'1220','2021-07-11','2021-07-29','0000-00-00',NULL,0,51),
(8,'223','322','Bijay Kumar Singh','Domestic A (Below 5k','2021-07-12',29,220,569,349,349,'2376.85','2021-07-01','2021-07-30','0000-00-00',57,200,2176),
(9,'234','AUS201','Anshuman Singh','Domestic A (Below 5k','2021-07-17',28,0,500,500,500,'3788.65','2021-07-02','2021-07-30','0000-00-00',0,65,3723.65),
(10,'234','AUS201','Anshuman Singh','Domestic A (Below 5k','2021-07-12',29,500,600,100,100,'7199','2021-07-01','2021-07-30','27-7-2021',3724,7199,0);

/*Table structure for table `users_table` */

DROP TABLE IF EXISTS `users_table`;

CREATE TABLE `users_table` (
  `id` int NOT NULL AUTO_INCREMENT,
  `meter_no` varchar(10) NOT NULL,
  `qtr_no` varchar(10) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `designation` varchar(20) DEFAULT NULL,
  `dept` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `mob_no` int DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `uid` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  PRIMARY KEY (`meter_no`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `users_table` */

insert  into `users_table`(`id`,`meter_no`,`qtr_no`,`fname`,`lname`,`designation`,`dept`,`mob_no`,`email`,`uid`,`pwd`) values 
(3,'221','112','Bibek','Singh','Assistant Prof','Physics',2147483647,'babubilai@rediffmail.com','bib','bib'),
(4,'223','322','Bijay Kumar','Singh','Service Engineer','Computer Center',2147483647,'bijay611@gmail.com','bij','bij'),
(5,'345','N100B','Mafizur','Rahman','Peon','Admin',2147483647,'mafia@gmail.com','mf','mf'),
(6,'234','AUS201','Anshuman','Singh','FMS Lead','CC',2147483647,'anshumansingh@gmail.com','ans','ans');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
