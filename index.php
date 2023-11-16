<?php

include("partials/head.php"); //This includes our head partial

echo"<h1>Welcome To Our Task Manager Platform</h1>";

include("registration/registration.php");


echo "User already exist ? <a class='sign-in' href='../login/signin.php' style='color: #fff; text-decoration: none;
'><h2>Sign In</h2></a>";

include("partials/footer.php"); //This includes our footer to the Registration page
