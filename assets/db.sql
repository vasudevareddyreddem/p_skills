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

insert  into `admin`(`cust_id`,`role_id`,`username`,`email_id`,`name`,`mobile`,`location`,`password`,`org_password`,`profile_pic`,`status`,`created_at`,`updated_at`,`created_by`) values (1,1,'admin','admin@gmail.com','admin','1234567890','sdsad','e10adc3949ba59abbe56e057f20f883e','123456','1545383616.jpg',1,'2018-08-03 15:41:02','2018-08-03 15:41:04',0);

/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `category` */

insert  into `category`(`c_id`,`category_name`,`status`,`created_at`,`updated_at`,`created_by`) values (16,'html',1,'2018-12-18 12:51:28','2018-12-18 12:51:28',1),(17,'powder',1,'2018-12-18 12:51:36','2018-12-18 12:51:36',1),(18,'category',1,'2018-12-19 07:51:30','2018-12-19 07:51:30',1);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `contact_info` */

/*Table structure for table `contactus` */

DROP TABLE IF EXISTS `contactus`;

CREATE TABLE `contactus` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `phone` varchar(250) DEFAULT NULL,
  `phone_number` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `email_id` varchar(250) DEFAULT NULL,
  `facebook` varchar(250) DEFAULT NULL,
  `twitter` varchar(250) DEFAULT NULL,
  `googleplus` varchar(250) DEFAULT NULL,
  `youtube` varchar(250) DEFAULT NULL,
  `location` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `contactus` */

insert  into `contactus`(`contact_id`,`phone`,`phone_number`,`email`,`email_id`,`facebook`,`twitter`,`googleplus`,`youtube`,`location`,`status`,`created_at`,`updated_at`,`created_by`) values (3,'7013319036','8013319089','team@sillchair.com','support@sillchair.com','http://www.facebook.com','https://www.twitter.com','https://www.google.com','https://www.youtube.com','\r\nPlot no-177, Sri Vani Nilayam, Sardar Patel Nagar, IDPL Staff Cooperative Housing Society, Kukatpally Housing Board Colony, Kukatpally, Hyderabad, Telangana 500090',1,'2018-12-19 13:38:47','2018-12-19 13:38:47',1);

/*Table structure for table `course_details` */

DROP TABLE IF EXISTS `course_details`;

CREATE TABLE `course_details` (
  `c_d_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `course_profile` int(12) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`c_d_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `course_details` */

insert  into `course_details`(`c_d_id`,`title`,`course_profile`,`description`,`status`,`created_at`,`updated_at`,`created_by`) values (1,'test1',13,'hjgh',1,'2018-12-19 07:54:53','2018-12-20 12:30:45',1),(2,'test3',13,'hjhg',1,'2018-12-19 07:54:53','2018-12-20 12:30:47',1),(3,'test3',13,'copy',1,'2018-12-20 12:30:28','2018-12-20 12:30:49',1);

/*Table structure for table `course_profile` */

DROP TABLE IF EXISTS `course_profile`;

CREATE TABLE `course_profile` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name_id` int(11) DEFAULT NULL,
  `c_P_name` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `course_profile` */

insert  into `course_profile`(`c_id`,`course_name_id`,`c_P_name`,`status`,`created_at`,`updated_at`,`created_by`) values (11,26,'bootstrap',1,'2018-12-18 14:17:08','2018-12-18 14:17:08',1),(12,27,'Oracle Fusion Financials',1,'2018-12-18 14:17:31','2018-12-18 14:17:31',1),(13,28,'course profile',1,'2018-12-19 07:52:01','2018-12-19 07:52:01',1);

/*Table structure for table `header` */

DROP TABLE IF EXISTS `header`;

CREATE TABLE `header` (
  `h_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_profile` int(11) DEFAULT NULL,
  `video` varchar(250) DEFAULT NULL,
  `color_code` varchar(250) DEFAULT NULL,
  `org_video` varchar(250) DEFAULT NULL,
  `text` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`h_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `header` */

insert  into `header`(`h_id`,`course_profile`,`video`,`color_code`,`org_video`,`text`,`status`,`created_at`,`updated_at`,`created_by`) values (11,2,'1545133245.mp4','#80ff00','1544610500.mp4','text123',2,'2018-12-18 12:40:44','2018-12-18 12:54:05',1),(12,5,'1545133390.mp4','#00ffff','1544614034.mp4','text123',2,'2018-12-18 12:43:09','2018-12-18 12:54:02',1),(13,7,'1545134037.mp4','#8080ff','1544610500.mp4','text123',1,'2018-12-18 12:53:57','2018-12-18 12:54:29',1),(14,8,'1545134062.mp4','#00ffff','','text123',1,'2018-12-18 12:54:21','2018-12-18 12:54:45',1),(15,12,'1545139111.mp4','#0000ff','','text123',1,'2018-12-18 14:18:31','2018-12-18 14:19:25',1),(16,11,'1545139296.mp4','#008040','1545134062.mp4','text12',1,'2018-12-18 14:20:54','2018-12-18 14:21:35',1),(17,13,'1545202384.mp4','#ff00ff','1544610500.mp4','hello',1,'2018-12-19 07:53:04','2018-12-19 08:17:06',1),(18,13,'1545203849.mp4','#0000ff','1544612371.mp4','text12',0,'2018-12-19 08:17:29','2018-12-19 08:17:29',1);

/*Table structure for table `header_images` */

DROP TABLE IF EXISTS `header_images`;

CREATE TABLE `header_images` (
  `h_id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(250) DEFAULT NULL,
  `org_image` varchar(250) DEFAULT NULL,
  `title` text,
  `status` int(11) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`h_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `header_images` */

insert  into `header_images`(`h_id`,`image`,`org_image`,`title`,`status`,`created_at`,`updated_at`,`created_by`) values (8,'1545134005.jpg','1543906593.jpg','friut',1,'2018-12-18 17:23:32','2018-12-18 12:53:32',1),(9,'1545202116.jpg','1545135426.jpg','friut',0,'2018-12-19 12:18:35',NULL,1);

/*Table structure for table `interview_questions` */

DROP TABLE IF EXISTS `interview_questions`;

CREATE TABLE `interview_questions` (
  `i_q_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `course_profile` int(12) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`i_q_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `interview_questions` */

insert  into `interview_questions`(`i_q_id`,`title`,`course_profile`,`description`,`status`,`created_at`,`updated_at`,`created_by`) values (1,'test3',NULL,'fhngfbj',2,'2018-12-20 14:24:03','2018-12-21 05:55:50',1),(2,'General Ledger',NULL,'ghgfjhg',2,'2018-12-20 14:24:03','2018-12-21 05:53:55',1),(3,'gbjnh',NULL,'hjhg',2,'2018-12-21 05:56:01','2018-12-21 05:56:18',1),(4,'hjhgj',NULL,'hgjghk',2,'2018-12-21 05:56:01','2018-12-21 05:56:22',1),(5,'jklj',NULL,'kjl',2,'2018-12-21 05:57:14','2018-12-21 05:59:43',1),(6,'kjl',NULL,'kjl',2,'2018-12-21 05:56:36','2018-12-21 05:59:45',1),(7,'kjl',NULL,'kjl',2,'2018-12-21 05:56:36','2018-12-21 05:59:47',1),(8,'papa',NULL,'power',1,'2018-12-21 06:00:09','2018-12-21 06:00:09',1),(9,'va',NULL,'van',1,'2018-12-21 06:01:18','2018-12-21 06:01:18',1),(10,'tghj',NULL,'gfju',1,'2018-12-21 06:01:10','2018-12-21 06:01:10',1),(11,'g',NULL,'gg',1,'2018-12-21 07:00:57','2018-12-21 09:37:20',1),(12,'General Ledger',NULL,'hj',2,'2018-12-21 06:59:12','2018-12-21 07:00:45',1),(13,'hgjh',NULL,'jhk',1,'2018-12-21 07:00:30','2018-12-21 10:13:49',1);

/*Table structure for table `leads_list` */

DROP TABLE IF EXISTS `leads_list`;

CREATE TABLE `leads_list` (
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `course_name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `phonenumber` varchar(45) DEFAULT NULL,
  `message` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`l_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `leads_list` */

insert  into `leads_list`(`l_id`,`name`,`course_name`,`email`,`phonenumber`,`message`,`created_at`) values (1,'kasi','html','kasi@gmail.com','7013319056','course doing syudy','2018-12-21 09:38:18');

/*Table structure for table `logos_list` */

DROP TABLE IF EXISTS `logos_list`;

CREATE TABLE `logos_list` (
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(250) DEFAULT NULL,
  `org_image` varchar(250) DEFAULT NULL,
  `profile_id` text,
  `status` int(11) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`l_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `logos_list` */

insert  into `logos_list`(`l_id`,`image`,`org_image`,`profile_id`,`status`,`created_at`,`updated_at`,`created_by`) values (3,'1544534160.jpg','1543906561.jpg','1',2,'2018-12-11 18:46:36','2018-12-11 14:16:36',1),(4,'1544534170.jpg','1543906894.jpg','2',2,'2018-12-11 18:46:30','2018-12-11 14:16:30',1),(5,'1544598256.jpg','1543906593.jpg','2',1,'2018-12-12 12:34:15',NULL,1),(6,'1545202347.png','1544608802.png','13',1,'2018-12-19 12:22:26',NULL,1),(7,'1545289879.jpg','1544507928.jpg','13',1,'2018-12-20 12:41:18',NULL,1);

/*Table structure for table `reviews_rating` */

DROP TABLE IF EXISTS `reviews_rating`;

CREATE TABLE `reviews_rating` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_profile` varchar(250) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `star` varchar(250) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `org_image` varchar(250) DEFAULT NULL,
  `text` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

/*Data for the table `reviews_rating` */

insert  into `reviews_rating`(`r_id`,`course_profile`,`name`,`star`,`image`,`org_image`,`text`,`status`,`created_at`,`updated_at`,`created_by`) values (45,'8','siva','3','1545135435.png','mobile-background.png','vbnv',1,'2018-12-18 13:03:32','2018-12-18 13:17:14',1),(46,'7','vasu','3','1545135426.jpg','admin.jpg','tuhytr',1,'2018-12-18 13:12:46','2018-12-18 13:17:06',1),(47,'7','kali','3','','','gfhgf',1,'2018-12-18 13:17:29',NULL,1),(48,'12','vasu','3','','','yuiyi',1,'2018-12-18 14:27:06',NULL,1),(49,'12','vasu','4','1545139697.jpg','1544777666.jpg','hjh',1,'2018-12-18 14:28:17',NULL,1),(50,'13','kasi','4','1545202409.jpg','1544777666.jpg','thujyt',1,'2018-12-19 07:53:29',NULL,1);

/*Table structure for table `skillchair` */

DROP TABLE IF EXISTS `skillchair`;

CREATE TABLE `skillchair` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_profile` int(11) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `skillchair` */

insert  into `skillchair`(`s_id`,`course_profile`,`title`,`status`,`created_at`,`updated_at`,`created_by`) values (1,5,'<p>hello world</p>\r\n',2,'2018-12-12 12:37:30','2018-12-18 12:51:17',1),(2,6,'<p>hello&nbsp;</p>\r\n',2,'2018-12-12 12:37:51','2018-12-18 12:51:19',1),(3,5,'<p>boos</p>\r\n',2,'2018-12-12 14:08:05','2018-12-18 12:51:21',1),(4,6,'<p>vhgbfvgjmn</p>\r\n',2,'2018-12-18 12:47:37','2018-12-18 12:51:23',1),(5,13,'<p>gjhgjhg</p>\r\n',0,'2018-12-19 07:55:20','2018-12-19 07:55:20',1);

/*Table structure for table `sub_category` */

DROP TABLE IF EXISTS `sub_category`;

CREATE TABLE `sub_category` (
  `s_c_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(250) DEFAULT NULL,
  `sub_category_name` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`s_c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

/*Data for the table `sub_category` */

insert  into `sub_category`(`s_c_id`,`category`,`sub_category_name`,`status`,`created_at`,`updated_at`,`created_by`) values (25,'15','tester',2,'2018-12-18 12:45:57','2018-12-18 12:51:53',1),(26,'16','css',1,'2018-12-18 12:51:43','2018-12-18 12:51:43',1),(27,'17','course',1,'2018-12-18 12:52:04','2018-12-18 12:52:04',1),(28,'18','course name',1,'2018-12-19 07:51:48','2018-12-19 07:51:48',1);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `track` */

/*Table structure for table `training_batches` */

DROP TABLE IF EXISTS `training_batches`;

CREATE TABLE `training_batches` (
  `t_b_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `course_profile` int(11) DEFAULT NULL,
  `duration` varchar(250) DEFAULT NULL,
  `hours` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`t_b_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `training_batches` */

/*Table structure for table `training_course` */

DROP TABLE IF EXISTS `training_course`;

CREATE TABLE `training_course` (
  `t_c_id` int(11) NOT NULL AUTO_INCREMENT,
  `paragraph` varchar(250) DEFAULT NULL,
  `course_profile` varchar(250) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`t_c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `training_course` */

insert  into `training_course`(`t_c_id`,`paragraph`,`course_profile`,`title`,`status`,`created_at`,`updated_at`,`created_by`) values (11,NULL,'5','<p>yjhgkj</p>\r\n',1,'2018-12-18 12:45:11','2018-12-18 12:45:18',1),(12,NULL,'5','<p>hjkjh</p>\r\n',0,'2018-12-18 12:45:32','2018-12-18 12:45:32',1),(13,NULL,'13','<ol>\r\n	<li>\r\n	<p>Oracle Fusion Financials, which include general ledger, receivables, payables, asset tracking, expense management, and cash management functionality.</p>\r\n	</li>\r\n	<li>\r\n	<p>Oracle Fusion Accounting Hub, providing the integration and',0,'2018-12-19 07:54:03','2018-12-19 07:54:03',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
