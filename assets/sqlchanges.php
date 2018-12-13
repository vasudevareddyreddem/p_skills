
CREATE TABLE `course_details` (
  `c_d_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`c_d_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1


Create Table

CREATE TABLE `course_profile` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name_id` int(11) DEFAULT NULL,
  `c_P_name` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1




Create Table

CREATE TABLE `interview_questions` (
  `i_q_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`i_q_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1



Create Table

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1


CREATE TABLE `training_batches` (
  `t_b_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `duration` varchar(250) DEFAULT NULL,
  `hours` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`t_b_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1




ALTER TABLE `skills`.`training_batches`   
  ADD COLUMN `course_profile` INT(11) NULL AFTER `t_b_id`;
  
ALTER TABLE `skills`.`training_batches`   
  ADD COLUMN `durationq` VARCHAR(250) NULL AFTER `title`;
  
  ALTER TABLE `skills`.`training_batches`   
  CHANGE `durationq` `duration` VARCHAR(250) CHARSET latin1 COLLATE latin1_swedish_ci NULL;

  
  ALTER TABLE `skills`.`training_batches`   
  ADD COLUMN `hours` VARCHAR(250) NULL AFTER `duration`;


ALTER TABLE `skills`.`course_details`   
  CHANGE `course_profile` `course_profile` INT(12) NULL;
  
  
  ALTER TABLE `skills`.`interview_questions`   
  CHANGE `course_profile` `course_profile` INT(12) NULL;
  
  
  
  

Create Table

CREATE TABLE `skillchair` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_profile` int(11) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1

  
  
  

Create Table

CREATE TABLE `header` (
  `h_id` int(11) NOT NULL AUTO_INCREMENT,
  `video` varchar(250) DEFAULT NULL,
  `color_code` varchar(250) DEFAULT NULL,
  `org_video` varchar(250) DEFAULT NULL,
  `text` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`h_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1

  
  
  
Create Table

CREATE TABLE `reviews_rating` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_profile` varchar(250) DEFAULT NULL,
  `reviews` varchar(250) DEFAULT NULL,
  `rating` varchar(250) DEFAULT NULL,
  `star` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1

  
  
  
  
  
  
  
  