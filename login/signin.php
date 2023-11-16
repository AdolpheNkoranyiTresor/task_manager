<?php 

include('../partials/head.php');

echo "<div class='registration-container'>
        <h1>Sign In</h1>
        <div class='signin-row' style='color: #344e3b;
        font-size: 18px; text-align: left;'>
            <form method='post' action='./signin-check.php'>
                <label for='Username' style='margin: 20px 0px;'>Username:</label>
                <input type='text' name='Username' id='username' placeholder='User Name'>
                <label for='Password' style='margin: 20px 0px;'>Password:</label>
                <input type='password' name='Password' id='password' placeholder='Password'><br>
                <input type='submit' id='submitBtn' value='Sign In'>
            </form>
        </div>

    </div>";

     if (isset($error)) { echo "<p>$error</p>"; };
    echo "Don't have an account? <a href='http://task_manager.test/' style='color:white; text-decoration: none;'><h2>Register here</h2></a>";

include('../partials/footer.php');    