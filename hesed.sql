CREATE DATABASE `hesed_db_company`;
use `hesed_db_company`;

CREATE Table `hesed_users`(
    `_id` int(11) AUTO_INCREMENT PRIMARY KEY  NOT NULL,
    `name` varchar(100) NOT NULL,
    `last_name` varchar(100) NOT NUll,
    `genre` varchar(20) NOT NULL,
     `mobile` varchar(20),
    `email` varchar(150),
    `password` varchar(150),
    `role` varchar(100),
    `created_at` datetime NOT NULL DEFAULT current_timestamp(),
    `update_at`  TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE  `hesed_articles` (
  `_id` int(11) AUTO_INCREMENT PRIMARY KEY  NOT NULL,
  `title` varchar(255),
  `contenu` Text null,
  `slug` varchar(255),
  `image` varchar(255),
  `url` varchar(255),
  `by_create` varchar(255),
  `status` varchar(20),
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at`  TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `hesed_comments` (
   `_id` INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   `article_id` INT(6) UNSIGNED,
   `nom` VARCHAR(30) NOT NULL,
  `email` VARCHAR(50),
  `contenu` TEXT NOT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

Create Table `hesed_services`(
   `_id` INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   `title` varchar (255)null,
   `slug` varchar(255),
   `image` varchar(255),
  `video` varchar(255),
  `description` text null,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

Create Table `hesed_configuration`(
    `_id` INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `slogan` text null,
    `number_watsapp` varchar(255),
    `maps_location` text null,
    `email` varchar(155),
    `pays` varchar(155),
    `ville` varchar(155),
    `adress` varchar(255),
    `terme_licence` text,
    `social` varchar(255),
    `social_1` varchar(255),
    `social_2` varchar(255),
    `social_3` varchar(255),
    `social_4` varchar(255),
    `description`text null,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )ENGINE=InnoDB DEFAULT CHARSET=utf8;

    create table `hesed_media`(
        `_id` INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        `type` VARCHAR(255),
        `file_path` varchar(255),
        `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )ENGINE=InnoDB DEFAULT CHARSET=utf8;