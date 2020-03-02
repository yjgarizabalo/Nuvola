-- MySQL Nuvola v0.1

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Esquema nuvola_db
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Esquema nuvola_db
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `nuvola_db` DEFAULT CHARACTER SET utf8 ;
USE `nuvola_db` ;

-- -----------------------------------------------------
-- Table `nuvola_db`.`perfil`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `nuvola_db`.`perfil` (
  `per_id` INT NOT NULL AUTO_INCREMENT,
  `per_nombre` VARCHAR(50) NULL,
  PRIMARY KEY (`per_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `nuvola_db`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `nuvola_db`.`usuario` (
  `usu_id` INT NOT NULL AUTO_INCREMENT,
  `per_id` INT NOT NULL,
  `usu_nombres` VARCHAR(50) NULL,
  `usu_apellidos` VARCHAR(100) NULL,
  `usu_correo` VARCHAR(50) NULL,
  PRIMARY KEY (`usu_id`),
  INDEX `fk_usuario_perfil_idx` (`per_id` ASC),
  CONSTRAINT `fk_usuario_perfil`
    FOREIGN KEY (`per_id`)
    REFERENCES `nuvola_db`.`perfil` (`per_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;