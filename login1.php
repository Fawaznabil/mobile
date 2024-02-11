<?php

// Menggantikan "your_username" dan "your_password" dengan informasi database Anda
$host = "localhost"; // e.g., "localhost"
$username = "root";
$password = "";
$database = "mobile";
// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to retrieve data from the user table
$sql = "SELECT username, name FROM user";
$result = $conn->query($sql);

// Check if there are results
if ($result->num_rows > 0) {
    // Fetch data and encode it as JSON
    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    echo json_encode($data);
} else {
    // No results found
    echo "No data found";
}

// Close the connection
$conn->close();

?>