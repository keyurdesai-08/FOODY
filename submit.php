<?php
$servername = "localhost";  // Update with your MySQL server information
$username = "root";  // Update with your MySQL username
$password = " ";  // Update with your MySQL password
$dbname = "contact_form";

// Create a connection to the MySQL database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    echo"connection succesful";
}

// Get form data
@$name = $_POST["name"];
@$email = $_POST["email"];
@$comment = $_POST["comment"];

// Insert data into the database
$sql = "INSERT INTO submissions (Name, Email, Comment) VALUES ('$name', '$email', '$comment')";

if ($conn->query($sql) === TRUE) {
    echo "Form submission successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
