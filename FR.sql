-- MySQL Script generated by MySQL Workbench
-- Fri May 20 17:03:07 2022
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema FR
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema FR
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `FR` DEFAULT CHARACTER SET utf8 ;
USE `FR` ;

-- -----------------------------------------------------
-- Table `FR`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `FR`.`user` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `role` ENUM('gm', 'dm', 'worker') NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `FR`.`order`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `FR`.`order` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `FT` VARCHAR(255) NOT NULL,
  `Cooking` VARCHAR(255) NULL,
  `delivery` ENUM('onsite', 'delivery') NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `address` VARCHAR(255) NULL,
  `phone` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `FR`.`table1`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `FR`.`table1` (
  `user_name` VARCHAR(255) NOT NULL,
  `order_id` INT NOT NULL,
  `progress` INT NOT NULL,
  INDEX `fk_table1_user_idx` (`user_name` ASC) ,
  INDEX `fk_table1_order1_idx` (`order_id` ASC) ,
  PRIMARY KEY (`user_name`, `order_id`),
  CONSTRAINT `fk_table1_user`
    FOREIGN KEY (`user_name`)
    REFERENCES `FR`.`user` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_table1_order1`
    FOREIGN KEY (`order_id`)
    REFERENCES `FR`.`order` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
