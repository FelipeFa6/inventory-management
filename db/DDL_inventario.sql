DROP DATABASE IF EXISTS inventario;

CREATE DATABASE inventario;

USE inventario;

CREATE TABLE cuenta (
	id int NOT NULL AUTO_INCREMENT,
	username varchar(20) NOT NULL,
	password varchar(255) NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE producto (
	id int NOT NULL AUTO_INCREMENT,
	nombre varchar(50) NOT NULL,
	precio double NOT NULL,
	stock bigint NOT NULL,
	categoria varchar(50) NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE historial (
	id int NOT NULL AUTO_INCREMENT,
	descripcion varchar(255) NOT NULL,
	fk_cuenta int NOT NULL,
	PRIMARY KEY (id)
);

ALTER TABLE historial ADD CONSTRAINT historial_fk0 FOREIGN KEY (fk_cuenta) REFERENCES cuenta(id);
