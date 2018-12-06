/*
SQLyog Community v11.52 (64 bit)
MySQL - 10.1.31-MariaDB : Database - skills
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`skills` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `skills`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `cust_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `username` varchar(250) DEFAULT NULL,
  `email_id` varchar(250) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `location` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `org_password` varchar(250) DEFAULT NULL,
  `profile_pic` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`cust_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`cust_id`,`role_id`,`username`,`email_id`,`name`,`mobile`,`location`,`password`,`org_password`,`profile_pic`,`status`,`created_at`,`updated_at`,`created_by`) values (1,1,'admin','admin@gmail.com','admin','1234567890','sdsad','e10adc3949ba59abbe56e057f20f883e','123456','1543906894.jpg',1,'2018-08-03 15:41:02','2018-08-03 15:41:04',0);

/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(250) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `category` */

insert  into `category`(`c_id`,`category_name`,`status`,`created_at`,`updated_at`,`created_by`) values (1,'curd',2,'2018-12-04 10:57:05','2018-12-04 13:32:11',1),(2,'milk',1,'2018-12-04 10:33:45','2018-12-04 13:50:51',1),(5,'html',2,'2018-12-04 13:55:06','2018-12-04 13:55:41',1),(6,'html',2,'2018-12-04 13:56:42','2018-12-04 14:39:34',1),(7,'html',2,'2018-12-04 13:56:56','2018-12-04 14:39:05',1),(8,'javascript',1,'2018-12-04 14:37:49','2018-12-04 14:37:49',1),(9,'html',0,'2018-12-04 14:39:39','2018-12-04 14:39:43',1);

/*Table structure for table `contact_info` */

DROP TABLE IF EXISTS `contact_info`;

CREATE TABLE `contact_info` (
  `con_info_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(250) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `email_id` varchar(250) DEFAULT NULL,
  `phone` varchar(250) DEFAULT NULL,
  `location` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`con_info_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `contact_info` */

insert  into `contact_info`(`con_info_id`,`course_name`,`name`,`email_id`,`phone`,`location`,`create_at`) values (1,'html','vasu','vasu@gmail.com','7013319056','kurnool','2018-12-05 07:57:45'),(2,'html','kasi','admin@gmail.com','8500226782','kurnool','2018-12-05 08:09:17'),(3,'html','kasi','admin@gmail.com','8500226782','kurnool','2018-12-05 08:09:51'),(4,'html','kasi','admin@gmail.com','8500226782','kurnool','2018-12-05 08:10:30'),(5,'html','kasi','admin@gmail.com','8500226782','kurnool','2018-12-05 08:12:23'),(6,'html','kasi','admin@gmail.com','8500226782','kurnool','2018-12-05 08:14:06'),(7,'','','','','','2018-12-05 08:15:52'),(8,'','','','','','2018-12-05 08:15:55'),(9,'','','','','','2018-12-05 08:17:16'),(10,'html','kasi','admin@gmail.com','8500226782','kurnool','2018-12-05 09:45:06'),(11,'html','kasi','admin@gmail.com','8500226782','kurnool','2018-12-05 09:46:20'),(12,'html','kasi','admin@gmail.com','8500226782','kurnool','2018-12-05 09:46:44'),(13,'html','kasi','admin@gmail.com','8500226782','kurnool','2018-12-05 09:47:08');

/*Table structure for table `contactus` */

DROP TABLE IF EXISTS `contactus`;

CREATE TABLE `contactus` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `phone` varchar(250) DEFAULT NULL,
  `phone_number` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `email_id` varchar(250) DEFAULT NULL,
  `location` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `contactus` */

insert  into `contactus`(`contact_id`,`phone`,`phone_number`,`email`,`email_id`,`location`,`status`,`created_at`,`updated_at`,`created_by`) values (1,'7013319096','9097557020','team@sillchair.com','support@sillchair.com','Plot no-177, Sri Vani Nilayam, Sardar Patel Nagar, KPHB Colony, Hyderabad, Telangana 500090',1,'2018-12-05 09:53:08','2018-12-05 09:53:08',1);

/*Table structure for table `sub_category` */

DROP TABLE IF EXISTS `sub_category`;

CREATE TABLE `sub_category` (
  `s_c_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(250) DEFAULT NULL,
  `sub_category_name` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`s_c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `sub_category` */

insert  into `sub_category`(`s_c_id`,`category`,`sub_category_name`,`status`,`created_at`,`updated_at`,`created_by`) values (4,'1','heritagecompany',2,'2018-12-04 12:51:17','2018-12-04 12:55:26',1),(5,'1','heritage',2,'2018-12-04 12:57:13','2018-12-04 13:42:53',1),(10,'1','heritagecompany',1,'2018-12-04 12:56:23','2018-12-04 12:56:23',1),(11,'7','css',1,'2018-12-04 13:58:13','2018-12-04 13:58:13',1),(12,'8','js',1,'2018-12-04 14:48:41','2018-12-04 14:48:41',1);

/*Table structure for table `track` */

DROP TABLE IF EXISTS `track`;

CREATE TABLE `track` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `t_b_id` int(11) DEFAULT NULL,
  `date` varchar(250) DEFAULT NULL,
  `time` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `track` */

insert  into `track`(`t_id`,`t_b_id`,`date`,`time`,`status`,`created_at`,`updated_at`,`created_by`) values (10,1,'2018-12-14','12:12',1,'2018-12-06 11:59:55','2018-12-06 11:59:55',1),(11,1,'2018-12-15','12:10',1,'2018-12-06 11:59:55','2018-12-06 11:59:55',1),(17,7,'2018-12-14','10:10',1,'2018-12-06 12:02:03','2018-12-06 12:02:03',1),(18,5,'2018-12-14','12:10',1,'2018-12-06 12:02:20','2018-12-06 12:02:20',1);

/*Table structure for table `training_batches` */

DROP TABLE IF EXISTS `training_batches`;

CREATE TABLE `training_batches` (
  `t_b_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`t_b_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `training_batches` */

insert  into `training_batches`(`t_b_id`,`title`,`status`,`created_at`,`updated_at`,`created_by`) values (5,'Weekend Track',1,'2018-12-06 11:57:57','2018-12-06 12:02:29',1),(6,'Weekend Track',2,'2018-12-06 11:58:16','2018-12-06 12:00:05',1),(7,'Regular Track',1,'2018-12-06 12:00:55','2018-12-06 12:00:55',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
