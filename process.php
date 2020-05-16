<?php
$email = $_POST['email'];
$pwd = $_POST['password'];

//Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//SQL to insert data into database
$sql = "SELECT * FROM users where email='$email' and password='$pwd'";
$result = mysqli_query($conn, $sql);
//Check data
if (mysqli_num_rows($result) > 0) {
    session_start();
    $_SESSION["checkuser"] = "login";
    header("Location: http://localhost/admin.php");
} else {
    header("Location: http://localhost/index.php");
}
?>