Site Title: Task Manager
This repository contains a simple PHP project for managing tasks. The project includes user registration, login functionality, and a task manager.

To access this project from your local repository and server, first:
Do a quick Setup -->>
    Clone the Repository:

    bash (or any command line you use)
    Copy the below code
    git clone https://github.com/your-username/TaskManager.git
    cd TaskManager


    Database Setup:

    Import the database.sql file into your MySQL database to set up the necessary tables.

    Configuration:
    Update the database connection details in DB/Database.php with your MySQL credentials, then
    Run the Project

Start your PHP development server:
bash
Copy code
php -S localhost:8000
Access the project in your browser: http://localhost:8000 (This url varies according to the local server that you are using)


User Registration (How to register?):
    Access the registration page: http://localhost:8000/registration/register.php
    Fill in the registration form with a unique username, a valid email, and a password (at least 8 characters).
    Click the "Register" button.

User Login (How to sign in?):
    Access the login page: http://localhost:8000/login/signin.php
    Enter your registered username and password.
    Click the "Sign In" button.

Dashboard:
    After successful login, you will be redirected to the dashboard: http://localhost:8000/home.php
    The dashboard contains a menu with links to the home page and the about us page.

    Home Page:
        The home page displays a TODO list.
        Add a task: Enter a task description in the input field and click the "Add Task" button.
        Update a task: Click the "Update" button next to a task, enter the new description, and click "OK."
        Delete a task: Click the "Delete" button next to a task.

    About Us Page;
        Click the "About Us" link in the menu to view a small introduction/description of the company.



*Testing Instructions*

User Registration:

Access the registration page and provide valid registration details.
Ensure that the submit button is disabled until all fields are correctly filled.
Verify that the system prevents duplicate usernames and requires a password of at least 8 characters.

User Login:

Access the login page and enter valid login credentials.
Verify successful login and redirection to the dashboard.

TODO List:

On the dashboard home page, add, update, and delete tasks.

About Us:

Click the "About Us" link and verify the information about the company.

Javascript AJAX Call:

Observe the behavior of the username field during registration.
Verify that an AJAX call is made to check the availability of the username.
Confirm that repeated requests are avoided for the same username.

.

*For now the tasks cannot be added to our database, still working on it please.* (handle_task.php not working for now). Need to clean up my code, put all the JavaScript in one directory.
