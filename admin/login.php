<?php
session_start();
include("./db_connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$hashedPassword'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // Login successful
        $_SESSION["username"] = $username;
        header("location: welcome.php");
    } else {
        // Login failed
        echo "Invalid username or password.";
    }
}
?>
