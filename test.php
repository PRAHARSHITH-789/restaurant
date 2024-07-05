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
}

// Check if the request method is POST and 'name' and 'number' parameters are set
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name']) && isset($_POST['number'])&& isset($_POST['url'])) {
    // Sanitize inputs to prevent SQL injection
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $url = mysqli_real_escape_string($conn, $_POST['url']);
$table=$_SESSION['name'];
$_SESSION['table']=$table;
    // Insert data into database
    $sql = "INSERT INTO  $table(name, number,image) VALUES ('$name', '$number','$url')";

    if (mysqli_query($conn, $sql)) {
        echo "Row inserted successfully";
    } else {
        echo "Error inserting row: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request";
}

// Close connection
mysqli_close($conn);
echo $_SESSION['table'];


?>
