<?php
session_start();
$server = "localhost";
$user = "root";
$password = "root";
$db = "hotel_geetha";

// Establish connection
$conn = mysqli_connect($server, $user, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name']) ) {
    $table=$_SESSION['name'];
$_SESSION['table']=$table;
    // Sanitize inputs to prevent SQL injection
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    

    // Insert data into database
    $sql = "DELETE FROM $table WHERE name='$name';";

    if (mysqli_query($conn, $sql)) {
        echo "Row delted successfully";
    } else {
        echo "Error inserting row: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request";
}

// Close connection
mysqli_close($conn);

?>
