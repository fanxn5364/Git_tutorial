<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
    
        // Perform login validation here
    
        if ($username == "admin" && $password == "password") {
            echo "Login successful!";
        } else {
            echo "Invalid username or password";
        }
    }
?>