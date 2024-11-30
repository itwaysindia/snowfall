<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Include your database connection
include('../../includes/config/config.php');
// echo '../../includes/config/config.php'; // For debugging

// include('../inculdes/config/config.php'); // Make sure to adjust the path if needed

// Get parameters from Grid.js (pagination, sorting, etc.)
$limit = isset($_GET['limit']) ? (int)$_GET['limit'] : 10; // Items per page
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1; // Current page
$sort = isset($_GET['sort']) ? $_GET['sort'] : 'id'; // Sorting field
$order = isset($_GET['order']) ? $_GET['order'] : 'asc'; // Sort order (asc/desc)

// Calculate the offset for the current page
$offset = ($page - 1) * $limit;

// Build your query to fetch data
// $query = "SELECT * FROM users ORDER BY $sort $order LIMIT $limit OFFSET $offset";

// Execute the query and fetch the data
$result = $itways->getQuery("SELECT * FROM users ORDER BY $sort $order LIMIT $limit OFFSET $offset");

$data = [];
foreach($result as $row){    $data[] = [
        'id' => $row->id,
        'name' => $row->name, // Adjust to your column names
        'email' => $row->email,
    ];
}

// Get the total number of records in the database
// $total_query = "SELECT COUNT(*) AS total FROM your_table";
// $total_result = $mysqli->query($total_query);
// $total_row = $total_result->fetch_assoc();
// $total_records = $total_row['total'];
$total_records = $itways->countTable("users");

// Return the data and total records as JSON
echo json_encode([
    'data' => $data,
    'total' => $total_records,
]);

?>
