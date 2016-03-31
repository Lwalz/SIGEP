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

$name=$_POST[name];
$pw = $_POST[pw];
if ($pw!="5194994w")
	echo "Invalid password";
	
	else
		header("Location: http://penguin.creighton.edu/~lcw24457/secret.php?name=$name");

		
?>
