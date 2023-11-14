<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecom1_tp2";

//connection a la base de donnee
$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn) {
    echo "Connected to the $dbname database successfully";
    global $conn;
} else {
    echo "Error : Not connected to the $dbname database";
}
?>
