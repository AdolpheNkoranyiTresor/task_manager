<?php

include("partials/head.php"); //This includes our head to the Registration page

session_start();

if (!isset($_SESSION["Id"])) {
    header("Location: ../login/signin.php");
    die();
}

echo "
<h1>About Us</h1>
<h2>The digital experiences you love. <br>
The organizations you trust most.<br>
The software they depend on.</h2>
Make something amazing, for anyone
Drupal is content management software. It's used to make many of the websites and applications you use every day.
Drupal has great standard features, like easy content authoring, reliable performance, and excellent security.
But what sets it apart is its flexibility; modularity is one of its core principles.
Its tools help you build the versatile, structured content that dynamic web experiences need.
It's also a great choice for creating integrated digital frameworks.
You can extend it with any one, or many, of thousands of add-ons.
Modules expand Drupal's functionality. Themes let you customize your content's presentation.
Distributions are packaged Drupal bundles you can use as starter-kits.
Mix and match these components to enhance Drupal's core abilities.
Or, integrate Drupal with external services and other applications in your infrastructure.
No other content management software is this powerful and scalable.

<p style='text-align: ; font-size: 22px; margin-top: 100px;'><a href='/signout.php' style='color:white;'>Sign Out?</a></p>
";


include("partials/registered_footer.php"); //This includes the footer of the registered user to the about page
