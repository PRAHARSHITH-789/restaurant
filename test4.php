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

header('Content-Type: application/json');

// Check if the request method is POST and 'tabei' parameter is set
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['tabei'])) {
    
    $tableno = mysqli_real_escape_string($conn, $_POST['tabei']);
    $sql = "SELECT TABLE_NAME FROM information_schema.tables WHERE TABLE_SCHEMA = '$db';";
    $result = mysqli_query($conn, $sql);
    
    $output = array();
    
    if (mysqli_num_rows($result) > 0) {
        // Output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row["TABLE_NAME"];
            $sqli = "SELECT name, tablei, number FROM $name WHERE tablei = $tableno;";
            $data = mysqli_query($conn, $sqli);
    
            if (mysqli_num_rows($data) > 0) {
                while ($r = mysqli_fetch_assoc($data)) {
                    $output[] = array(
                        "name" => $r["name"],
                        "tablei" => $r["tablei"],
                        "number" => $r["number"]
                    );
                }
            }
        }
        echo json_encode($output);
    } else {
        echo json_encode(array("error" => "No tables found in the database."));
    }
} else {
    echo json_encode(array("error" => "Invalid request"));
}

// Close connection
mysqli_close($conn);
?>
