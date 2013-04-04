SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `bcms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `bcms`;

-- -----------------------------------------------------
-- Table `bcms`.`banner`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `bcms`.`banner` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `image` VARCHAR(255) NOT NULL ,
  `status` INT(11) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = MyISAM
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `bcms`.`navigation`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `bcms`.`navigation` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `url` VARCHAR(255) NOT NULL ,
  `url_text` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL ,
  `group_id` INT(11) NOT NULL ,
  `order` INT(11) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = MyISAM
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `bcms`.`navigation_group`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `bcms`.`navigation_group` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL ,
  `slug` VARCHAR(255) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = MyISAM
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `bcms`.`posts`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `bcms`.`posts` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `title` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL ,
  `content` TEXT CHARACTER SET 'utf8' NOT NULL ,
  `image` VARCHAR(255) NULL DEFAULT NULL ,
  `user_id` INT(11) NOT NULL ,
  `status` INT(11) NOT NULL ,
  `category` INT(11) NOT NULL ,
  `created_at` INT(11) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = MyISAM
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `bcms`.`post_category`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `bcms`.`post_category` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL ,
  `slug` INT(11) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = MyISAM
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `bcms`.`settings`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `bcms`.`settings` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `site_name` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL ,
  `site_slogan` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = MyISAM
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `bcms`.`users`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `bcms`.`users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(255) NOT NULL ,
  `password` VARCHAR(255) NOT NULL ,
  `email` VARCHAR(255) NOT NULL ,
  `created_at` INT NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = MyISAM
AUTO_INCREMENT = 75
DEFAULT CHARACTER SET = latin1;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
