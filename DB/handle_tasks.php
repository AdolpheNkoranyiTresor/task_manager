<?php

include_once("DB/Database.php");

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["addTask"])) {
    $taskDescription = $_POST['addTask'];

    echo 'Received task description: ' . $taskDescription;

    $db = new Database();

    // Let's add a task to the database
    function addTaskToDatabase($taskDescription, $user_id)
    {
        global $db;
        $sql = "INSERT INTO tasks (user_id, task_description) VALUES (?, ?)";
        $params = [$user_id, $taskDescription];
        
        $db->query($sql, $params);
    }


    //Let's update a task in the database

    function updateTaskDescription($taskId, $completed_task, $user_id){
        global $db;

        $sql = "UPDATE tasks SET completed_task = ? WHERE Id = ? AND $user_id = ?";
        $params = [$user_id, $taskId, $completed_task];

        $db->query($sql, $params);
    }

    function deleteTaskFromDatabase($taskId, $user_id) {
        global $db;
        $sql = "DELETE From tasks WHERE Id = ? AND user_id = ?";
        $params = [$user_id, $taskId];
        $db->query($sql, $params);
    }
}
