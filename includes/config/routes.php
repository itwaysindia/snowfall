<?php
// config/routes.php

// Define all routes
$routes = [
    '/' => 'modules/dashboard/dashboard.php',
    '/dashboard' => 'modules/dashboard/dashboard.php',
    '/login' => 'includes/auth/index.php',
    '/logout' => 'includes/auth/logout.php',
    '/admin' => 'modules/dashboard/index.php',
    '/equipment' => 'modules/equipment/equipment_list.php',
    '/project' => 'modules/project/project_list.php',
    '/zone_group' => 'modules/zone_group/zone_list.php',
    '/operator' => 'modules/operator/dashboard.php',
];

// Base path (modify this if your app is in a subdirectory)
$basePath = '/snowfall'; // Adjust if your app's folder name is different

// Routing function
function route($path, $basePath) {
    global $routes;

    // Remove base path
    if (strpos($path, $basePath) === 0) {
        $path = substr($path, strlen($basePath));
    }

    // Normalize path
    $path = parse_url($path, PHP_URL_PATH);
    $path = rtrim($path, '/');
    if ($path === '') $path = '/';

    // Debug: Log resolved path
    error_log("Routing Path: $path");

    if (isset($routes[$path])) {
        $filePath = $routes[$path];

        // Check if file exists
        if (file_exists($filePath)) {
            require_once $filePath;
        } else {
            error_log("File Missing: $filePath");
            require_once 'layout/404.php';
        }
    } else {
        error_log("Route Not Found: $path");
        require_once 'layout/404.php';
    }
}


// Call the router with the current request path
$currentPath = $_SERVER['REQUEST_URI']; // Get the full request URI
route($currentPath, $basePath);
?>
