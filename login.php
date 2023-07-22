<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "praroz";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if (isset($_POST['username']) && isset($_POST['password'])) {
    $loginUsername = $_POST['username'];
    $loginPassword = $_POST['password'];

    
    $loginQuery = "SELECT * FROM users WHERE username='$loginUsername' AND password='$loginPassword'";
    $loginResult = mysqli_query($conn, $loginQuery);

    if (mysqli_num_rows($loginResult) > 0) {
        echo "Login successful!";
    } else {
        echo "Invalid username or password.";
    }
}

