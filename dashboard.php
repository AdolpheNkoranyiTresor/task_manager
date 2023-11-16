<?php
require_once("partials/head.php");

require("partials/navigation.php");

session_start();

if (!isset($_SESSION["Id"])) {
    header("location: ../login/signin.php");
    die();
}

$conn = new mysqli("localhost","root","","taskmanager");

//check the conection
if ($conn->connect_error) {
    die("Connection Failed: ". $conn->connect_error);
}

//Get user's name from the database
$userID = $_SESSION['Id'];
$query = "Select Username FROM users WHERE Id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $userID);
$stmt->execute();
$stmt->bind_result($userName);

if ($stmt->fetch()) {

} else {
    $userName = "User Not Found. Please, verify your usename. <a href='../login/signin.php'>Try again</a>.";
}

$stmt->close();
$conn->close();


echo "<h2 style='text-align: left; font-size: 28px;'>Hello $userName, Welcome to your dashboard.</h2>
<p style='text-align: left; font-size: 22px; margin-top: 100px;'><a href='/signout.php' style='color:white;'>Sign Out?</a></p>";


include("partials/registered_footer.php");

die();


