<?php

require_once 'config/config.php';
require_once 'MigrationManager.php';

// Initialize DB connection
$db = new db();

// Run migrations using the getConnection method to access mysqli
$migrationManager = new MigrationManager($db->getConnection());
$migrationManager->runMigrations();
