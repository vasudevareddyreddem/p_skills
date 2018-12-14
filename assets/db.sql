/*
SQLyog Community v11.52 (64 bit)
MySQL - 10.1.32-MariaDB : Database - skills
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `category` */

insert  into `category`(`c_id`,`category_name`,`status`,`created_at`,`updated_at`,`created_by`) values (1,'curd',2,'2018-12-04 10:57:05','2018-12-04 13:32:11',1),(2,'milk',2,'2018-12-04 10:33:45','2018-12-12 06:36:52',1),(5,'html',2,'2018-12-04 13:55:06','2018-12-04 13:55:41',1),(6,'html',2,'2018-12-04 13:56:42','2018-12-04 14:39:34',1),(7,'html',2,'2018-12-04 13:56:56','2018-12-04 14:39:05',1),(8,'javascript',2,'2018-12-04 14:37:49','2018-12-12 06:36:56',1),(9,'html',2,'2018-12-04 14:39:39','2018-12-12 06:37:00',1),(10,'Java',1,'2018-12-12 06:37:08','2018-12-12 06:37:08',1),(11,'Html',1,'2018-12-12 06:37:19','2018-12-12 06:37:19',1),(12,'CSS',1,'2018-12-12 06:37:25','2018-12-12 06:37:25',1),(13,'Database',1,'2018-12-12 06:37:38','2018-12-12 06:37:38',1);

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
  `facebook` text,
  `twitter` text,
  `googleplus` text,
  `youtube` text,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `contactus` */

insert  into `contactus`(`contact_id`,`phone`,`phone_number`,`email`,`email_id`,`location`,`facebook`,`twitter`,`googleplus`,`youtube`,`status`,`created_at`,`updated_at`,`created_by`) values (1,'7013319096','9097557020','team@sillchair.com','support@sillchair.com','Plot no-177, Sri Vani Nilayam, Sardar Patel Nagar, KPHB Colony, Hyderabad, Telangana 500090','https://facebook.com/skills','https://twitter.com/test1','https://plus.google.com/PrachaTechnologies','https://youtube.com/test1',1,'2018-12-11 08:39:48','2018-12-11 08:39:48',1);

/*Table structure for table `course_details` */

DROP TABLE IF EXISTS `course_details`;

CREATE TABLE `course_details` (
  `c_d_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `course_profile` int(12) DEFAULT NULL,
  `description` longtext,
  `status` int(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`c_d_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `course_details` */

insert  into `course_details`(`c_d_id`,`title`,`course_profile`,`description`,`status`,`created_at`,`updated_at`,`created_by`) values (11,' General Ledger',6,'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a ',1,'2018-12-12 08:11:59','2018-12-12 08:11:59',1),(12,' Accounts Payable',6,'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a ',1,'2018-12-12 08:12:23','2018-12-12 08:12:23',1),(13,'General Ledger',6,'hello',1,'2018-12-14 07:10:18','2018-12-14 07:10:18',1);

/*Table structure for table `course_profile` */

DROP TABLE IF EXISTS `course_profile`;

CREATE TABLE `course_profile` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name_id` int(11) DEFAULT NULL,
  `c_P_name` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `course_profile` */

insert  into `course_profile`(`c_id`,`course_name_id`,`c_P_name`,`status`,`created_at`,`updated_at`,`created_by`) values (5,16,'css',2,'2018-12-12 11:09:39','2018-12-12 06:39:39',1),(6,17,'OOPS',1,'2018-12-12 06:39:33','2018-12-12 06:39:33',1),(7,17,'Inherirance',1,'2018-12-12 06:40:11','2018-12-12 06:40:11',1),(8,18,'Functions',1,'2018-12-12 06:40:32','2018-12-12 06:40:32',1),(9,18,'Multiplue inheritance',1,'2018-12-12 06:40:54','2018-12-12 06:40:54',1),(10,19,'Mobile view',1,'2018-12-12 06:41:14','2018-12-12 06:41:14',1),(11,19,'Tablet view',1,'2018-12-12 06:41:31','2018-12-12 06:41:31',1),(12,20,'dynamic  attributes',1,'2018-12-12 06:41:51','2018-12-12 06:41:51',1),(13,20,'classes',1,'2018-12-12 06:42:11','2018-12-12 06:42:11',1);

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `header` */

insert  into `header`(`h_id`,`course_profile`,`video`,`color_code`,`org_video`,`text`,`status`,`created_at`,`updated_at`,`created_by`) values (8,6,'1544767228.mp4','#80ff00','0.7879420015366459050.694556001534825844back2.mp4','helo hi  how are you ',0,'2018-12-14 07:00:28','2018-12-14 07:00:28',1);

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `header_images` */

insert  into `header_images`(`h_id`,`image`,`org_image`,`title`,`status`,`created_at`,`updated_at`,`created_by`) values (1,'1544507928.jpg','gallery-1.jpg','Lorem ipsum dolor sit amet, consectetur adipiscing elit. In finibus sodales nisi eu accumsan.',1,'2018-12-11 12:39:17','2018-12-11 08:09:17',1),(2,'1544509451.jpg','gallery-6.jpg','bnbvn testing',0,'2018-12-11 12:39:13','2018-12-11 08:09:13',1);

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

insert  into `interview_questions`(`i_q_id`,`title`,`course_profile`,`description`,`status`,`created_at`,`updated_at`,`created_by`) values (10,'Question 1',7,'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a ',1,'2018-12-12 07:51:01','2018-12-12 07:51:01',1),(11,'Question 2',6,'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a ',1,'2018-12-12 07:51:42','2018-12-12 07:51:42',1),(12,'Question 3',6,'\r\nAnim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put ',1,'2018-12-12 07:51:57','2018-12-12 07:51:57',1),(13,'Question 4',6,'\r\nAnim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put ',1,'2018-12-12 07:52:58','2018-12-12 07:52:58',1);

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `leads_list` */

insert  into `leads_list`(`l_id`,`name`,`course_name`,`email`,`phonenumber`,`message`,`created_at`) values (1,'vasudevareddy','html','testing@gmail.com','8500050944','testing ','2018-12-06 13:45:21'),(2,'bayapu','css','maxcure@gmail.com','8500226782','testing purpose','2018-12-06 13:48:18'),(3,'siva','php','sivareddy@gmail.com','8528528522','testinghsgfd','2018-12-06 13:57:17');

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `logos_list` */

insert  into `logos_list`(`l_id`,`image`,`org_image`,`profile_id`,`status`,`created_at`,`updated_at`,`created_by`) values (4,'1544532629.jpg','gallery-6.jpg','4',2,'2018-12-12 11:12:39','2018-12-12 06:42:39',1),(5,'1544532656.jpg','gallery-4.jpg','5',2,'2018-12-12 11:12:35','2018-12-12 06:42:35',1),(6,'1544593350.jpg','gallery-1.jpg','6',1,'2018-12-12 11:12:30',NULL,1),(7,'1544593370.jpg','gallery-3.jpg','6',1,'2018-12-12 11:12:49',NULL,1),(8,'1544593379.jpg','gallery-6.jpg','7',1,'2018-12-12 11:12:58',NULL,1),(9,'1544593390.jpg','gallery-5.jpg','11',1,'2018-12-12 11:13:10',NULL,1),(10,'1544593501.jpg','bg-01.jpg','13',1,'2018-12-12 11:15:01',NULL,1),(11,'1544593513.jpg','bg-03.jpg','8',1,'2018-12-12 11:15:12',NULL,1);

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `reviews_rating` */

insert  into `reviews_rating`(`r_id`,`course_profile`,`name`,`star`,`image`,`org_image`,`text`,`status`,`created_at`,`updated_at`,`created_by`) values (4,'6','kasiumamahesh','3 Star','1544767173.jpg','128.jpg','testing',1,'2018-12-14 06:59:33',NULL,1);

/*Table structure for table `skillchair` */

DROP TABLE IF EXISTS `skillchair`;

CREATE TABLE `skillchair` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_profile` int(11) DEFAULT NULL,
  `title` longtext,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `skillchair` */

insert  into `skillchair`(`s_id`,`course_profile`,`title`,`status`,`created_at`,`updated_at`,`created_by`) values (1,6,'<p>tesing mdjvg</p>\r\n',0,'2018-12-14 05:49:03','2018-12-14 07:27:16',1),(2,7,'<p>like&nbsp; this</p>\r\n',1,'2018-12-14 05:49:21','2018-12-14 05:55:19',1),(3,6,'<p>like&nbsp; that</p>\r\n',0,'2018-12-14 05:55:35','2018-12-14 05:55:35',1),(4,6,'<div class=\"row\">\r\n<div class=\"col-md-12 wsc-points\">\r\n<ul>\r\n	<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer luctus ipsum sed maximus porttitor.</li>\r\n	<li>Quisque consequat ornare urna, in elementum lacus luctus vel. Curabitur posuere tellus at gravida ultricies. Maecenas sed cursus nisi.</li>\r\n	<li>Integer id nisl ultricies, euismod lorem at, ultricies nisi. Curabitur auctor eros sit amet massa suscipit, fermentum bibendum purus feugiat.</li>\r\n	<li>In feugiat pharetra mi, nec dapibus nibh consectetur eget. Aliquam leo sem, dignissim ut interdum non, sagittis non arcu.</li>\r\n	<li>Etiam rutrum, nisi non volutpat lobortis, sem leo vulputate mauris, et luctus orci magna at nisi. Fusce euismod non ligula vel mollis.</li>\r\n	<li>Sed ligula dui, ultricies eu est eget, semper cursus ante. Phasellus efficitur eu urna elementum mattis.</li>\r\n	<li>Morbi aliquam, massa eget malesuada dapibus, enim enim faucibus velit, bibendum congue felis ex et arcu. Nunc in suscipit mi.</li>\r\n	<li>Mauris nisi dolor, eleifend in velit in, consectetur hendrerit est. Suspendisse ut dui a nibh vehicula mattis commodo sed ligula.</li>\r\n	<li>Mauris tempus dolor vel ligula dapibus, et faucibus elit convallis. Vestibulum luctus nibh ac dolor rutrum dictum.</li>\r\n	<li>Suspendisse tristique augue et nulla mattis, ac fringilla diam pellentesque. Praesent rutrum nunc ipsum, in posuere ipsum pulvinar vitae.</li>\r\n</ul>\r\n</div>\r\n</div>\r\n',1,'2018-12-14 07:09:54','2018-12-14 07:27:21',1),(5,6,'<div class=\"cd-part-1 col-md-8\">\r\n<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven&#39;t heard of them accusamus labore sustainable VHS.</p>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-md-6\">\r\n<ul>\r\n	<li>Lorem ipsum dolor sit amet</li>\r\n	<li>Consectetur adipiscing elit</li>\r\n	<li>Integer molestie lorem at massa</li>\r\n	<li>Facilisis in pretium nisl aliquet</li>\r\n	<li>Nulla volutpat aliquam velit</li>\r\n	<li>Phasellus iaculis neque</li>\r\n	<li>Purus sodales ultricies</li>\r\n	<li>Vestibulum laoreet porttitor sem</li>\r\n	<li>Ac tristique libero volutpat at</li>\r\n	<li>Faucibus porta lacus fringilla vel</li>\r\n</ul>\r\n</div>\r\n\r\n<div class=\"col-md-6\">\r\n<ul>\r\n	<li>Lorem ipsum dolor sit amet</li>\r\n	<li>Consectetur adipiscing elit</li>\r\n	<li>Integer molestie lorem at massa</li>\r\n	<li>Facilisis in pretium nisl aliquet</li>\r\n	<li>Nulla volutpat aliquam velit</li>\r\n	<li>Phasellus iaculis neque</li>\r\n	<li>Purus sodales ultricies</li>\r\n	<li>Vestibulum laoreet porttitor sem</li>\r\n	<li>Ac tristique libero volutpat at</li>\r\n	<li>Faucibus porta lacus fringilla vel</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n',0,'2018-12-14 07:13:07','2018-12-14 07:13:07',1);

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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `sub_category` */

insert  into `sub_category`(`s_c_id`,`category`,`sub_category_name`,`status`,`created_at`,`updated_at`,`created_by`) values (4,'1','heritagecompany',2,'2018-12-04 12:51:17','2018-12-04 12:55:26',1),(5,'1','heritage',2,'2018-12-04 12:57:13','2018-12-04 13:42:53',1),(10,'1','heritagecompany',2,'2018-12-04 12:56:23','2018-12-12 06:38:22',1),(11,'7','css',2,'2018-12-04 13:58:13','2018-12-12 06:38:18',1),(12,'8','js',2,'2018-12-04 14:48:41','2018-12-12 06:38:15',1),(13,'','',2,'2018-12-11 06:29:05','2018-12-11 06:29:12',1),(14,'2','test',2,'2018-12-11 11:07:33','2018-12-12 06:38:11',1),(15,'2','test2',2,'2018-12-11 11:07:58','2018-12-12 06:38:07',1),(16,'2','test3',2,'2018-12-11 11:09:04','2018-12-12 06:38:04',1),(17,'10','JEE',1,'2018-12-12 06:37:55','2018-12-12 06:37:55',1),(18,'10','J2E',1,'2018-12-12 06:38:34','2018-12-12 06:38:34',1),(19,'11','Bootstrap',1,'2018-12-12 06:38:51','2018-12-12 06:38:51',1),(20,'11','Html5',1,'2018-12-12 06:39:04','2018-12-12 06:39:04',1);

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
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

/*Data for the table `track` */

insert  into `track`(`t_id`,`t_b_id`,`date`,`time`,`status`,`created_at`,`updated_at`,`created_by`) values (10,1,'2018-12-14','12:12',1,'2018-12-06 11:59:55','2018-12-06 11:59:55',1),(11,1,'2018-12-15','12:10',1,'2018-12-06 11:59:55','2018-12-06 11:59:55',1),(19,8,'2018-12-11','03 pm',1,'2018-12-11 14:00:50','2018-12-11 14:00:50',1),(20,8,'2018-12-12','12 am',1,'2018-12-11 14:00:50','2018-12-11 14:00:50',1),(21,7,'2018-12-14','10:10',1,'2018-12-11 14:02:18','2018-12-11 14:02:18',1),(24,5,'2018-12-14','12:10',1,'2018-12-11 14:02:42','2018-12-11 14:02:42',1),(25,5,'2018-12-19','12 am',1,'2018-12-11 14:02:42','2018-12-11 14:02:42',1);

/*Table structure for table `training_batches` */

DROP TABLE IF EXISTS `training_batches`;

CREATE TABLE `training_batches` (
  `t_b_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_profile` int(11) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `duration` varchar(250) DEFAULT NULL,
  `hours` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`t_b_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `training_batches` */

insert  into `training_batches`(`t_b_id`,`course_profile`,`title`,`duration`,`hours`,`status`,`created_at`,`updated_at`,`created_by`) values (5,3,'Weekend Track','30 days','120hrs',1,'2018-12-11 14:02:42','2018-12-11 14:02:42',1),(6,NULL,'Weekend Track',NULL,NULL,2,'2018-12-06 11:58:16','2018-12-06 12:00:05',1),(7,1,'Regular Track','30 days','120hrs',1,'2018-12-11 14:02:18','2018-12-11 14:02:18',1),(8,2,'mrng hours','30 days','120hrs',1,'2018-12-11 14:00:50','2018-12-11 14:00:50',1);

/*Table structure for table `training_course` */

DROP TABLE IF EXISTS `training_course`;

CREATE TABLE `training_course` (
  `t_c_id` int(11) NOT NULL AUTO_INCREMENT,
  `paragraph` varchar(250) DEFAULT NULL,
  `course_profile` varchar(250) DEFAULT NULL,
  `title` longtext,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`t_c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `training_course` */

insert  into `training_course`(`t_c_id`,`paragraph`,`course_profile`,`title`,`status`,`created_at`,`updated_at`,`created_by`) values (6,'likethis  ','6','<div class=\"cd-part-1 col-md-12\">\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Hello&nbsp; HI </strong></p>\r\n\r\n<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3</p>\r\n</div>\r\n',1,'2018-12-14 07:06:39','2018-12-14 07:23:36',1),(7,'testing','6','<div class=\"cd-part-1 col-md-8\">\r\n<div class=\"cd-part-1 col-md-8\">\r\n<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven&#39;t heard of them accusamus labore sustainable VHS.</p>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-md-6\">\r\n<ul>\r\n	<li>Lorem ipsum dolor sit amet</li>\r\n	<li>Consectetur adipiscing elit</li>\r\n	<li>Integer molestie lorem at massa</li>\r\n	<li>Facilisis in pretium nisl aliquet</li>\r\n	<li>Nulla volutpat aliquam velit</li>\r\n	<li>Phasellus iaculis neque</li>\r\n	<li>Purus sodales ultricies</li>\r\n	<li>Vestibulum laoreet porttitor sem</li>\r\n	<li>Ac tristique libero volutpat at</li>\r\n	<li>Faucibus porta lacus fringilla vel</li>\r\n</ul>\r\n</div>\r\n\r\n<div class=\"col-md-6\">\r\n<ul>\r\n	<li>Lorem ipsum dolor sit amet</li>\r\n	<li>Consectetur adipiscing elit</li>\r\n	<li>Integer molestie lorem at massa</li>\r\n	<li>Facilisis in pretium nisl aliquet</li>\r\n	<li>Nulla volutpat aliquam velit</li>\r\n	<li>Phasellus iaculis neque</li>\r\n	<li>Purus sodales ultricies</li>\r\n	<li>Vestibulum laoreet porttitor sem</li>\r\n	<li>Ac tristique libero volutpat at</li>\r\n	<li>Faucibus porta lacus fringilla vel</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n',2,'2018-12-14 07:11:42','2018-12-14 07:23:32',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
