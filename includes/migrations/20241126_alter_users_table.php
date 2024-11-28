<?php

return function ($db) {
    // List of new columns to add
    $columns = [
        'contact' => 'VARCHAR(50) DEFAULT NULL',
        'usertype' => 'VARCHAR(255) DEFAULT "staff"',
        'related_area' => 'VARCHAR(255) DEFAULT NULL',
        'permissions' => 'VARCHAR(255) DEFAULT NULL',
        'dob' => 'DATE DEFAULT NULL',
        'address' => 'TEXT DEFAULT NULL',
        'city' => 'VARCHAR(100) DEFAULT NULL',
        'state' => 'VARCHAR(100) DEFAULT NULL',
        'pin_code' => 'VARCHAR(10) DEFAULT NULL',
        'uploader' => 'VARCHAR(100) DEFAULT NULL',
        'profile_pic' => 'VARCHAR(255) DEFAULT NULL',
    ];

    // Loop through each column and check if it exists
    foreach ($columns as $column => $definition) {
        $checkColumnQuery = "SHOW COLUMNS FROM `users` LIKE '$column'";
        $result = $db->query($checkColumnQuery);

        if ($result && $result->num_rows === 0) {
            // If the column does not exist, add it
            $alterQuery = "ALTER TABLE `users` ADD `$column` $definition";
            if ($db->query($alterQuery)) {
                echo "Column '$column' added successfully.\n";
            } else {
                echo "Error adding column '$column': " . $db->error . "\n";
            }
        } else {
            echo "Column '$column' already exists.\n";
        }
    }

    // Insert the administrator record
    $insertQuery = "
    INSERT INTO `users` (name, email, password, status, usertype, uploader)
    VALUES
    ('Administrator', 'admin@snowfall.com', '63a9f0ea7bb98050796b649e85481845', 'active', 'root', 'self');
    ";

    // Execute the INSERT INTO query
    if ($db->query($insertQuery)) {
        echo "Administrator inserted successfully.\n";
    } else {
        echo "Error inserting administrator: " . $db->error . "\n";
    }
};
