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

/*Table structure for table `bill_tabe` */

DROP TABLE IF EXISTS `bill_tabe`;

CREATE TABLE `bill_tabe` (
  `id` int NOT NULL AUTO_INCREMENT,
  `meter_no` varchar(10) NOT NULL,
  `qtr_no` varchar(10) DEFAULT NULL,
  `consumer_name` varchar(50) DEFAULT NULL,
  `tariff_category` varchar(20) DEFAULT NULL,
  `supply_volt_lvl` varchar(20) DEFAULT NULL,
  `connected_load` varchar(20) DEFAULT NULL,
  `bill_amt` float DEFAULT NULL,
  `bill_no` varchar(20) DEFAULT NULL,
  `bill_period` varchar(20) DEFAULT NULL,
  `bill_date` date DEFAULT NULL,
  `no_of_days` int DEFAULT NULL,
  `meter_status` varchar(20) DEFAULT NULL,
  `biling_status` varchar(20) DEFAULT NULL,
  `address` varchar(20) DEFAULT NULL,
  `reading_type` varchar(20) DEFAULT NULL,
  `prev_reading` float DEFAULT NULL,
  `current_reading` float DEFAULT NULL,
  `diff_in_reading` float DEFAULT NULL,
  `unit_consumed` int DEFAULT NULL,
  `billable_units` int DEFAULT NULL,
  `recorded_demand` varchar(20) DEFAULT NULL,
  `max_demand` varchar(20) DEFAULT NULL,
  `avg_pow_factor` varchar(20) DEFAULT NULL,
  `pow_on_hrs` varchar(20) DEFAULT NULL,
  `avl_percent` varchar(20) DEFAULT NULL,
  `current_demand` varchar(20) DEFAULT NULL,
  `outstanding_demand` varchar(20) DEFAULT NULL,
  `adj_amt` varchar(20) DEFAULT NULL,
  `net_bill_amt_` varchar(20) DEFAULT NULL,
  `net_bill_amt_in_wrds` varchar(20) DEFAULT NULL,
  `rate` varchar(20) DEFAULT NULL,
  `energy_charge` varchar(20) DEFAULT NULL,
  `tot_energy_charge` varchar(20) DEFAULT NULL,
  `demand_fix_charge` varchar(20) DEFAULT NULL,
  `electricity_duty` varchar(20) DEFAULT NULL,
  `meter_rent` varchar(20) DEFAULT NULL,
  `arrear_principal` varchar(20) DEFAULT NULL,
  `arrear_surcharge` varchar(20) DEFAULT NULL,
  `current_surcharge` varchar(20) DEFAULT NULL,
  `misc_arrear` varchar(20) DEFAULT NULL,
  `payable_amt_bf_due` varchar(20) DEFAULT NULL,
  `payable_amt_af_due` varchar(20) DEFAULT NULL,
  `prepd_by` varchar(20) DEFAULT NULL,
  `consumer_category` varchar(20) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `bill_tabe` */

/*Table structure for table `users_table` */

DROP TABLE IF EXISTS `users_table`;

CREATE TABLE `users_table` (
  `id` int NOT NULL AUTO_INCREMENT,
  `meter_no` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `qtr_no` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fname` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `mname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `designation` varchar(20) DEFAULT NULL,
  `uid` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  PRIMARY KEY (`meter_no`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `users_table` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
