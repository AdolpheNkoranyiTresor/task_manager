<?php

include("partials/head.php"); //This includes our head to the Registration page
require_once("./DB/handle_tasks.php");

// session_start();

if (!isset($_SESSION["Id"])) {
    header("Location: ../login/signin.php");
    die();
}

?>

<div class="todo-app-container">
    <h1>Task Manager Page</h1>
    <div class="todo-app">
        <h2>Create Your Todo List</h2>
        <form action="#" id="todoForm" data-user-id='<?php echo $_SESSION['user_id']; ?>'>
            <input type="text" class="todo-input" placeholder="What is your main focus today?" required/>
            <button type="submit" class="add_task">Add Task</button>
        </form>

        <ul class="todo-list">
            <!-- 
                A such structure will be created dinamically with the script
            <li class="todo-item-container">
                <div class="todo-item">
                    <input type="checkbox" class="todo-check" />
                    <span class="todo-item-label"></span>
                    <button class="update-button">Update</button>
                    <button class="x-button">Delete &times;</button>
                </div>
            </li> -->
        </ul>


        <div class="remaining-container">
            <span><span id="itemsRemaining"></span> items remaining</span>
        </div>
    </div>
</div>

<p style='text-align: ; font-size: 22px; margin-top: 100px;'><a href='/signout.php' style='color:white;'>Sign Out?</a></p>

<!-- Link to the Script that helps Add, Apdate and/or Delete a task dinamically -->

<script src="./JS/script_to_manage_task.js"></script>

<?php
include("partials/registered_footer.php"); //This includes the footer of the registered user to the about page
?>