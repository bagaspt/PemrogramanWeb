/* Create Database and Table */

DROP DATABASE IF EXIST crud_db;

CREATE DATABASE crud_db;

USE crud_db;

CREATE TABLE `users` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`nama` VARCHAR(100),
	`email` VARCHAR(100),
	`mobile` VARCHAR(15),
	PRIMARY KEY(`id`)
);