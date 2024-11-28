<?php

return function ($db) {
    $query = "
        CREATE TABLE IF NOT EXISTS `logs` (
            `id` INT AUTO_INCREMENT PRIMARY KEY,
            `user_id` INT NULL,
            `message` TEXT NOT NULL,
            `level` ENUM('INFO', 'WARNING', 'ERROR') NOT NULL DEFAULT 'INFO',
            `ip` VARCHAR(45) NULL,
            `country` VARCHAR(100) NULL,
            `region` VARCHAR(100) NULL,
            `city` VARCHAR(100) NULL,
            `location` VARCHAR(50) NULL,
            `isp` VARCHAR(100) NULL,
            `country_flag` VARCHAR(255) NULL,
            `timestamp` DATETIME NOT NULL
        );
    ";
    $db->query($query);
};
