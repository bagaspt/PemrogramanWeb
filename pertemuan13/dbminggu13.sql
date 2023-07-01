CREATE TABLE `bljr_login` (
	`id` INT(11) NOT NULL,
	`username` VARCHAR(255) NOT NULL,
	`password` VARCHAR(255) NOT NULL,
	PRIMARY KEY(`id`)
)	ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `bljr_login` (`id`, `username`, `password`) VALUES
(1, 'Andi', 'uhuy123'),
(2, 'Santoso', 'qwerty'),
(3, 'Samsul', 'dodolpret'),
(4, 'Administrator', 'admin456');