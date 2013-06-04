SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `PLAYBUNDLE` DEFAULT CHARACTER SET utf8 ;
USE `PLAYBUNDLE` ;

-- -----------------------------------------------------
-- Table `PLAYBUNDLE`.`Usuario`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `PLAYBUNDLE`.`Usuario` (
  `idUsuario` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  `pass` VARCHAR(45) NOT NULL ,
  `email` VARCHAR(45) NOT NULL ,
  `avatar` VARCHAR(45) NULL ,
  PRIMARY KEY (`idUsuario`) ,
  UNIQUE INDEX `nombre_UNIQUE` (`nombre` ASC) ,
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) ,
  UNIQUE INDEX `avatar_UNIQUE` (`avatar` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PLAYBUNDLE`.`Pack`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `PLAYBUNDLE`.`Pack` (
  `idPack` INT NOT NULL AUTO_INCREMENT ,
  `titulo` VARCHAR(45) NOT NULL ,
  `f_inicio` DATE NOT NULL ,
  `f_fin` DATE NOT NULL ,
  `precio` DECIMAL(4,2) NOT NULL ,
  `video` VARCHAR(45) NULL ,
  PRIMARY KEY (`idPack`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PLAYBUNDLE`.`Compra`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `PLAYBUNDLE`.`Compra` (
  `Usuario_idUsuario` INT NOT NULL ,
  `Pack_idPack` INT NOT NULL ,
  `pagado` DECIMAL(4,2) NOT NULL ,
  PRIMARY KEY (`Usuario_idUsuario`, `Pack_idPack`) ,
  INDEX `fk_Compra_Usuario1` (`Usuario_idUsuario` ASC) ,
  CONSTRAINT `fk_Compra_Pack`
    FOREIGN KEY (`Pack_idPack` )
    REFERENCES `PLAYBUNDLE`.`Pack` (`idPack` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Compra_Usuario1`
    FOREIGN KEY (`Usuario_idUsuario` )
    REFERENCES `PLAYBUNDLE`.`Usuario` (`idUsuario` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PLAYBUNDLE`.`Juego`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `PLAYBUNDLE`.`Juego` (
  `idJuego` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  `desarrolladora` VARCHAR(45) NULL ,
  `imagen` VARCHAR(45) NULL ,
  PRIMARY KEY (`idJuego`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PLAYBUNDLE`.`Juego_Pack`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `PLAYBUNDLE`.`Juego_Pack` (
  `Pack_idPack` INT NOT NULL ,
  `Juego_idJuego` INT NOT NULL ,
  PRIMARY KEY (`Pack_idPack`, `Juego_idJuego`) ,
  INDEX `fk_Juego_Pack_Juego1` (`Juego_idJuego` ASC) ,
  CONSTRAINT `fk_Juego_Pack_Pack1`
    FOREIGN KEY (`Pack_idPack` )
    REFERENCES `PLAYBUNDLE`.`Pack` (`idPack` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Juego_Pack_Juego1`
    FOREIGN KEY (`Juego_idJuego` )
    REFERENCES `PLAYBUNDLE`.`Juego` (`idJuego` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PLAYBUNDLE`.`Genero`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `PLAYBUNDLE`.`Genero` (
  `idGenero` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`idGenero`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PLAYBUNDLE`.`Juego_Genero`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `PLAYBUNDLE`.`Juego_Genero` (
  `Juego_idJuego` INT NOT NULL ,
  `Genero_idGenero` INT NOT NULL ,
  PRIMARY KEY (`Juego_idJuego`, `Genero_idGenero`) ,
  INDEX `fk_Juego_Genero_Genero1` (`Genero_idGenero` ASC) ,
  CONSTRAINT `fk_Juego_Genero_Juego1`
    FOREIGN KEY (`Juego_idJuego` )
    REFERENCES `PLAYBUNDLE`.`Juego` (`idJuego` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Juego_Genero_Genero1`
    FOREIGN KEY (`Genero_idGenero` )
    REFERENCES `PLAYBUNDLE`.`Genero` (`idGenero` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PLAYBUNDLE`.`Plataforma`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `PLAYBUNDLE`.`Plataforma` (
  `idPlataforma` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`idPlataforma`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PLAYBUNDLE`.`Juego_Plataforma`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `PLAYBUNDLE`.`Juego_Plataforma` (
  `Plataforma_idPlataforma` INT NOT NULL ,
  `Juego_idJuego` INT NOT NULL ,
  PRIMARY KEY (`Plataforma_idPlataforma`, `Juego_idJuego`) ,
  INDEX `fk_Juego_Plataforma_Juego1` (`Juego_idJuego` ASC) ,
  CONSTRAINT `fk_Juego_Plataforma_Plataforma1`
    FOREIGN KEY (`Plataforma_idPlataforma` )
    REFERENCES `PLAYBUNDLE`.`Plataforma` (`idPlataforma` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Juego_Plataforma_Juego1`
    FOREIGN KEY (`Juego_idJuego` )
    REFERENCES `PLAYBUNDLE`.`Juego` (`idJuego` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PLAYBUNDLE`.`Suscritos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `PLAYBUNDLE`.`Suscritos` (
  `idSuscritos` INT NOT NULL ,
  `email` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`idSuscritos`) ,
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) )
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
