<?php
// Database connection
$servername = "localhost";
$username = "root"; // Update if necessary
$password = ""; // Update if necessary
$database = "law"; // Your database name

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert form data into the database
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $message = $conn->real_escape_string($_POST['message']);

    $sql = "INSERT INTO client_leads (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Success";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
