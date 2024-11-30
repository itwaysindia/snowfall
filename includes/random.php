<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Database connection
$host = "localhost";
$user = "root";
$password = "";
$database = "snowfall"; // Replace with your database name
$mysqli = new mysqli($host, $user, $password, $database);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Generate random data
function generateRandomName() {
    $firstNames = ['John', 'Jane', 'Alice', 'Bob', 'Charlie', 'Emily', 'Daniel', 'Sophia', 'Michael', 'Olivia'];
    $lastNames = ['Smith', 'Johnson', 'Brown', 'Taylor', 'Anderson', 'Thomas', 'Jackson', 'White', 'Harris', 'Martin'];
    return $firstNames[array_rand($firstNames)] . " " . $lastNames[array_rand($lastNames)];
}

function generateRandomEmail($name) {
    $domains = ['gmail.com', 'yahoo.com', 'outlook.com', 'example.com'];
    $username = strtolower(str_replace(' ', '.', $name)) . rand(1000, 9999);
    return $username . '@' . $domains[array_rand($domains)];
}

// Bulk insert users
$totalUsers = 100000; // Total users to insert
$batchSize = 1000; // Insert this many rows per query for efficiency
$tableName = 'users'; // Replace with your table name
$inserted = 0;

for ($i = 0; $i < $totalUsers; $i += $batchSize) {
    $values = [];
    for ($j = 0; $j < $batchSize && $inserted < $totalUsers; $j++) {
        $name = generateRandomName();
        $email = generateRandomEmail($name);
        $values[] = "('$name', '$email', '$email')";
        $inserted++;
    }

    $query = "INSERT IGNORE INTO $tableName (name, email, password) VALUES " . implode(',', $values);
    if (!$mysqli->query($query)) {
        die("Error: " . $mysqli->error);
    }

    echo "Inserted batch of $batchSize users. Total inserted: $inserted\n";
}

echo "Successfully inserted $totalUsers users into the $tableName table.\n";

// Close connection
$mysqli->close();
?>
