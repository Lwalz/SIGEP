<?php
$servername = "localhost";
$username = "lcw24457";
$password = "whDUzeVdzRpJqEtu";
$dbname = "lcw24457";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$name = $_POST[name];
$fpassword = $_POST[password];
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
