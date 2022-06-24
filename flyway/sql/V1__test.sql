CREATE TABLE `users` (
    `id` INT AUTO_INCREMENT,
    `first_name` VARCHAR(35) NOT NULL,
    `last_name` VARCHAR(35) NOT NULL,
    `email` VARCHAR(254) NOT NULL,
    `password` VARCHAR(45) NOT NULL,
    `last_access_at` TIMESTAMP,
    `created_at` TIMESTAMP NOT NULL,
    `updated_at` TIMESTAMP,
    `deleted_at` TIMESTAMP,
    CONSTRAINT `users_pk` PRIMARY KEY (`id`)
);