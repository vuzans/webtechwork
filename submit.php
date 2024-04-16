<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = ""; 
$database = "office";

// Attempt to create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];

// Insert data into database
$sql = "INSERT INTO office_table (name, address, mobile, email) VALUES ('$name', '$address', '$mobile', '$email')";

if ($conn->query($sql) === TRUE) {
    // Redirect to another page after successful submission
    header("Location: display_data.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
