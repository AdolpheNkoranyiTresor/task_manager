<?php

include("../partials/head.php");

// On session start, clear all cache

session_start();
if (isset($_COOKIE['PHPSESSID'])) {
    setcookie('PHPSESSID', '', time() - 3600,'/');
    unset($_COOKIE['PHPSESSID']);
    die();
}

// Check if the user is already logged in
if (isset($_SESSION['Id'])) {
    header("Location: /dashboard.php"); // Redirect to the dashboard if already logged in
    die();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input from the login form
    $username = $_POST["Username"];
    $password = $_POST["Password"];

    // Validate user input (you may want to add more validation)
    if (empty($username) || empty($password)) {
        $error = "Both username and password are required.";
    } else {
        // Connect to your database and perform user authentication
        $conn = mysqli_connect("localhost", "root", "", "taskmanager");

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Check the user's credentials
        $query = "SELECT Id, Username, Password FROM users WHERE Username = '$username'";
        $result = mysqli_query($conn, $query);

        if ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($password, $row['Password'])) {
                // Password is correct, set session and redirect to the dashboard
                $_SESSION['Id'] = $row['Id'];
                header("Location: /dashboard.php");
                exit();
            } else {
                echo "Invalid password. Please <a href='../login/signin.php' style='color:white;'>try again</a>.";
                // die();
            }
        } else {
            echo "Username not found. Please <a href='/index.php' style='color:white;'>register</a> if you haven't already, or
            <a href='../login/signin.php' style='color:white;'>try sign in again</a>";
        }

        mysqli_close($conn);
    }
    die();
}

