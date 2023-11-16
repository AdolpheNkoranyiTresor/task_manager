<?php

// Include the UserRegistration class
require_once("userRegistration.php");

// Create a new instance of the UserRegistration class
$userRegistration = new UserRegistration();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Let's get, validate, and register the user input from the form
    $username = $_POST["Username"];
    $email = $_POST["Email"];
    $password = $_POST["Password"];

    // Validate and register the user
    $registrationResult = $userRegistration->registerAndCheckUser($username, $email, $password);
}

// Render the registration form using the UserRegistration class
$userRegistration->renderForm();


?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="./JS/registration.js"></script>
