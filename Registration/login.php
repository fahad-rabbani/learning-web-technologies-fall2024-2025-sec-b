<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (isset($_SESSION['user_data'])) {
    
        $stored_email = $_SESSION['user_data']['email'];
        $stored_password = $_SESSION['user_data']['password']; 

        if ($email == $stored_email && $password == $stored_password) {
            $_SESSION['logged_in'] = true;
            $_SESSION['user_data'] = $_SESSION['user_data'];

            echo "<h2>Welcome, ".($_SESSION['user_data']['name']) . "!</h2>";
            echo "<p><a href='logout.php'>Logout</a></p>";
        } else {
            echo "<h2>Login failed. Please check your email and password.</h2>";
        }
    } else {
        echo "<h2>No user found!!!!!</h2>";
    }
}
?>
