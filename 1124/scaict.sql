CREATE DATABASE `scaict`;

USE `scaict`;

CREATE TABLE `users`(
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `pass` VARCHAR(255) NOT NULL,
    `role` BOOLEAN NOT NULL
);

CREATE TABLE `mails`(
    `name` VARCHAR(255) PRIMARY KEY,
    `mail` VARCHAR(255) NOT NULL,
    `edu` BOOLEAN NOT NULL
);

CREATE TABLE `phones`(
    `name` VARCHAR(255) PRIMARY KEY,
    `phone` VARCHAR(255) NOT NULL,
    `year` INT NOT NULL
);

INSERT INTO `users`(`name`, `pass`, `role`) VALUES
("admin", "admin123", 1),
("user1", "user", 0),
("guest", "guest", 0),
("user2", "user", 0);

INSERT INTO `mails`(`name`, `mail`, `edu`) VALUES
("admin", "admin@admin.com", 0),
("user1", "user1@gmail.com", 0),
("guest", "guest@edu.tw", 1),
("user2", "user2@xiulan.me", 0);

INSERT INTO `phones`(`name`, `phone`, `year`) VALUES
("admin", "0912-345-678", 3),
("user1", "0951-234-567", 1),
("guest", "0945-612-314", 2),
("user2", "0523-654-789", 4);