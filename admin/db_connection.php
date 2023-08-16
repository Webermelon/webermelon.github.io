<?php 
$host = "localhost"; // Your database host
$db = "gemerka"; // Your database name
$user = "gemerka_user"; // Your database username
$password = "Gemarka_password1#"; // Your database password


// admin credentials 
// user : admin
// pass : adminPass11
$conn = mysqli_connect($host, $user, $password, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>