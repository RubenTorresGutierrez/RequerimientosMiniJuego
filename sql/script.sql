-- BASE DE DATOS
-- ELIMINAR BASE DE DATOS SI EXISTE
DROP DATABASE IF EXISTS Minijuego;
-- CREAR BASE DE DATOS
CREATE DATABASE Minijuego DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
-- SELECCIONAR LA BASE DE DATOS
USE Minijuego;

-- TABLAS
-- Tabla elementos
CREATE TABLE elementos(
    posicion tinyint UNSIGNED NOT NULL PRIMARY KEY,
    simbolo char(2) NOT NULL,
    nombre varchar(15) NOT NULL,
    color varchar(20) NOT NULL
);

-- Tabla sprite
CREATE TABLE sprite(
    idSprite tinyint UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre varchar(20) NOT NULL
);

-- Tabla imagen
CREATE TABLE imagen(
    idImagen tinyint UNSIGNED NOT NULL,
    idSprite tinyint UNSIGNED NOT NULL,
    url varchar(50)  NOT NULL,
    CONSTRAINT FK_idSprite FOREIGN KEY (idSprite) REFERENCES sprite(idSprite),
    CONSTRAINT PK_imagen PRIMARY KEY (idImagen, idSprite)
);
