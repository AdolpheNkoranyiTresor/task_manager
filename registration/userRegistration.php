<?php

class UserRegistration
{
    public function renderForm()
    {
        echo '
        <div class="registration-container">
            <h1>User Registration</h1>
            <div class="form-row">
                <form method="post" action="../registration/register.php">
                    <input type="text" name="Username" id="username" placeholder="User Name" required
                        oninput="validateForm()"><br>
                    <input type="email" name="Email" id="email" placeholder="Email Address" required
                        oninput="validateForm()"><br>
                    <input type="password" name="Password" id="password" placeholder="Password" required
                        oninput="validateForm()"><br>
                    <input type="submit" id="submitBtn" value="Register" disabled>
                </form>
            </div>

        </div>
        ';
    }

    public function registerAndCheckUser($username, $email, $password){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            //Collects the user input
            $username = $_POST["Username"];
            $email = $_POST["Email"];
            $password = $_POST["Password"];
            
            //Connect to DSatabase
            
            $conn = mysqli_connect("localhost", "root", "", "taskmanager");
            
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            
            
            //Check if user already exist
            $checkQuery = "Select * FROM `users` WHERE `Username` = '$username'";
            $result = mysqli_query($conn, $checkQuery);
            
            if (mysqli_num_rows($result) > 0) {
                echo "This username already exists. Please choose a different username. <a href='http://task_manager.test/' style='color:white;'><h2>Register</h2></a> or <a href='../login/signin.php' style='color:white;'><h2>Sign In</h2></a> ";
                die();
            } else {
                $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
            }
            
            //Create a new user
            
            $query = "Insert INTO users (Username, Email, Password) VALUES ('$username', '$email', '$hashedPassword')";
            
            if (mysqli_query($conn, $query)) {
                echo "User Registration Successfully. Please, <a href='../login/signin.php' style='color:white;'>Sign In</a>";
                die();
            } else{
                echo "Error: " . mysqli_error($conn);
            };
            
            }
    }

}