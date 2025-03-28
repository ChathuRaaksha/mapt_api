<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

// Database credentials
$host = "sql308.infinityfree.com";
$username = "if0_38627681";
$password = "Chathu6ac";
$database = "if0_38627681_mapt";

// Try to connect to the database
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    echo json_encode(["status" => "error", "message" => "Connection failed: " . $conn->connect_error]);
} else {
    echo json_encode(["status" => "success", "message" => "Database connected successfully!"]);
}

// Always exit to prevent additional output
exit();
?>
