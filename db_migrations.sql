CREATE SCHEMA IF NOT EXISTS `Adventurous` DEFAULT CHARACTER SET utf8 ;
USE `Adventurous` ;

-- Table `Adventurous`.`User`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Adventurous`.`User` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(60) NOT NULL,
  `first_name` VARCHAR(45) NOT NULL,
  `last_name` VARCHAR(45) NOT NULL,
  `username` VARCHAR(45) NOT NULL,
  `password` INT NOT NULL,
  `age` INT NOT NULL,
  `phone_number` CHAR(15) NOT NULL,
  PRIMARY KEY (`id`))
 ENGINE = InnoDB;

-- Table `Adventurous`.`Invoice`
CREATE TABLE IF NOT EXISTS `Adventurous`.`Invoice` (
  `number` INT NOT NULL,
  `date` DATETIME(6) NOT NULL,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`number`,`user_id`),
  INDEX `fk_Invoice_User1_idx` (`user_id` ASC),
  CONSTRAINT `fk_Invoice_User1_`
  FOREIGN KEY (`user_id`)
  REFERENCES `Adventurous`.`User`(`id`)
  ON DELETE NO ACTION 
  ON UPDATE NO ACTION)
ENGINE = InnoDB;

-- Table `Adventurous`.`Work with`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Adventurous`.`Work with` (
  `user_id` INT NOT NULL,
  `host_id` INT NOT NULL,
  PRIMARY KEY (`user_id`, `host_id`),
  INDEX `fk_User_has_Host_Host1_idx` (`host_id` ASC),
  INDEX `fk_User_has_Host_User_idx` (`user_id` ASC),
  CONSTRAINT `fk_User_has_Host_User`
    FOREIGN KEY (`user_id`)
    REFERENCES `Adventurous`.`User` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_User_has_Host_Host1`
    FOREIGN KEY (`host_id`)
    REFERENCES `Adventurous`.`Host` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

-- Table `Adventurous`.`Host`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Adventurous`.`Host` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(60) NOT NULL, 
  `phone_number` CHAR(15) NOT NULL,
  `address` VARCHAR(60) NOT NULL,
  `location` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

-- Table `Adventurous`.`Suggest`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Adventurous`.`Suggest` (
  `user_id` INT NOT NULL,
  `complain_code` INT NOT NULL,
  PRIMARY KEY (`user_id`, `complain_code`),
  INDEX `fk_User_has_Complain_Complain1_idx` (`complain_code` ASC),
  INDEX `fk_User_has_Complain_User1_idx` (`user_id` ASC),
  CONSTRAINT `fk_User_has_Complain_User1`
    FOREIGN KEY (`user_id`)
    REFERENCES `Adventurous`.`User` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_User_has_Complain_Complain1`
    FOREIGN KEY (`complain_code`)
    REFERENCES `Adventurous`.`Complain` (`code`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

-- Table `Adventurous`.`Complain`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Adventurous`.`Complain` (
  `code` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `type` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `message` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`code`))
ENGINE = InnoDB;

-- Table `Adventurous`.`Ask for`
-- -----------------------------------------------------
	CREATE TABLE IF NOT EXISTS `Adventurous`.`Ask for` (
	  `user_id` INT NOT NULL,
	  `transportation_code` INT  NOT NULL,
	  PRIMARY KEY (`user_id`, `transportation_code`),
	  INDEX `fk_User_has_Transportation_Transportation1_idx` (`transportation_code` ASC),
	  INDEX `fk_User_has_Transportation_User1_idx` (`user_id` ASC),
	  CONSTRAINT `fk_User_has_Transportation_User1`
		FOREIGN KEY (`user_id`)
		REFERENCES `Adventurous`.`User` (`id`)
		ON DELETE NO ACTION
		ON UPDATE NO ACTION,
	  CONSTRAINT `fk_User_has_Transportation_Transportation1`
		FOREIGN KEY (`transportation_code`)
		REFERENCES `Adventurous`.`Transportation` (`code`)
		ON DELETE NO ACTION
		ON UPDATE NO ACTION)
	ENGINE = InnoDB;

-- Table `Adventurous`.`Transportation`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Adventurous`.`Transportation` (
  `code` INT NOT NULL,
  `phone` CHAR(15) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`code`))
ENGINE = InnoDB;

-- Table `Adventurous`.`Ask`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Adventurous`.`Ask` (
  `user_id` INT NOT NULL,
  `program_code` INT NOT NULL,
  PRIMARY KEY (`User_ID`, `program_code`),
  INDEX `fk_User_has_Program_Program1_idx` (`program_code` ASC),
  INDEX `fk_User_has_Program_User1_idx` (`user_id` ASC),
  CONSTRAINT `fk_User_has_Program_User1`
    FOREIGN KEY (`user_id`)
    REFERENCES `Adventurous`.`User` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_User_has_Program_Program1`
    FOREIGN KEY (`program_code`)
    REFERENCES `Adventurous`.`Program` (`code`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

-- Table `Adventurous`.`Program`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Adventurous`.`Program` (
  `code` INT NOT NULL,
  `type` VARCHAR(45) NOT NULL,
  `location` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`code`))
ENGINE = InnoDB;

-- Table `Adventurous`.`Reserve`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Adventurous`.`Reserve` (
  `user_id` INT NOT NULL,
  `reservation_code` INT NOT NULL,
  PRIMARY KEY (`user_id`, `reservation_code`),
  INDEX `fk_User_has_Reservation_Reservation1_idx` (`reservation_code` ASC),
  INDEX `fk_User_has_Reservation_User1_idx` (`user_id` ASC),
  CONSTRAINT `fk_User_has_Reservation_User1`
    FOREIGN KEY (`user_id`)
    REFERENCES `Adventurous`.`User` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_User_has_Reservation_Reservation1`
    FOREIGN KEY (`reservation_code`)
    REFERENCES `Adventurous`.`Reservation` (`code`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

-- Table `Adventurous`.`Reservation`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Adventurous`.`Reservation` (
    `code` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(45) NOT NULL,
    `date` date NOT NULL,
    `type` VARCHAR(255),
    `location` VARCHAR(45) NOT NULL,
    `email` VARCHAR(45) NOT NULL,
    PRIMARY KEY (`code`)
)  ENGINE=INNODB;