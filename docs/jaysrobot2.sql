-- MySQL Script generated by MySQL Workbench
-- Tue Nov  8 10:16:47 2022
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`student`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`student` (
  `ID` INT NOT NULL,
  `Location` VARCHAR(45) NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`order`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`order` (
  `ID` INT NOT NULL,
  `studentID` VARCHAR(45) NULL,
  `Items` VARCHAR(45) NULL,
  `student_ID` INT NOT NULL,
  PRIMARY KEY (`ID`),
  INDEX `fk_order_student1` (`student_ID` ASC) VISIBLE,
  CONSTRAINT `fk_order_student1`
    FOREIGN KEY (`student_ID`)
    REFERENCES `mydb`.`student` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`employee`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`employee` (
  `ID` INT NOT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`robot`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`robot` (
  `ID` INT NOT NULL,
  `orderID` VARCHAR(45) NULL,
  `destination` VARCHAR(45) NULL,
  `status` INT NULL,
  `order_ID` INT NOT NULL,
  `employee_ID` INT NOT NULL,
  PRIMARY KEY (`ID`, `order_ID`),
  INDEX `fk_robot_order1` (`order_ID` ASC) VISIBLE,
  INDEX `fk_robot_employee1` (`employee_ID` ASC) VISIBLE,
  CONSTRAINT `fk_robot_order1`
    FOREIGN KEY (`order_ID`)
    REFERENCES `mydb`.`order` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_robot_employee1`
    FOREIGN KEY (`employee_ID`)
    REFERENCES `mydb`.`employee` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`cart`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`cart` (
  `item` VARCHAR(45) NULL,
  `total weight` INT NULL,
  `cartID` INT NULL,
  `order_ID` INT NOT NULL,
  PRIMARY KEY (`cartID`),
  INDEX `fk_cart_order1` (`order_ID` ASC) VISIBLE,
  CONSTRAINT `fk_cart_order1`
    FOREIGN KEY (`order_ID`)
    REFERENCES `mydb`.`order` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`items`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`items` (
  `item` VARCHAR(45) NOT NULL AUTO_INCREMENT,
  `weights` INT NULL,
  `descrtiption` VARCHAR(45) NULL,
  `cart_item` VARCHAR(45) NOT NULL,  
  'price' INT NOT NULL,
  `category` VARCHAR(45) NULL,
  `fType` VARCHAR(45) NULL,
  PRIMARY KEY (`item`),
  INDEX `fk_items_cart1` (`cart_item` ASC) VISIBLE,
  CONSTRAINT `fk_items_cart1`
    FOREIGN KEY (`cart_item`)
    REFERENCES `mydb`.`cart` (`item`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -------------------------------------------
-- Add mto data
-- -------------------------------------------

--Breakfast
INSERT INTO items (item, weights, descrtiption, price, category, fType) values (000001,'Egg Jay',
2.50,'MTO','Breakfast');

INSERT INTO items (item, weights, descrtiption, price, category, fType) values (000002,'Egg Jay w/ sausage',
3.00,'MTO','Breakfast');

INSERT INTO items (item, weights, descrtiption, price, category, fType) values (000003,'Egg Jay on Bagel',
3.25,'MTO','Breakfast');

INSERT INTO items (item, weights, descrtiption, price, category, fType) values (0000004,'Egg Jay on Bagel w/ sausage',
3.75,'MTO','Breakfast');

INSERT INTO items (item, weights, descrtiption, price, category, fType) values (000005,'Jays Omelet',
3.25,'MTO','Breakfast');

INSERT INTO items (item, weights, descrtiption, price, category, fType) values (000006,'Hash brown',
1.00,'MTO','Breakfast');

INSERT INTO items (item, weights, descrtiption, price, category, fType) values (000007,'Sausage',
1.00,'MTO','Breakfast');
