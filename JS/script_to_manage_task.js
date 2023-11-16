//Adding event listeners on the submit button
document.addEventListener('DOMContentLoaded', function () {
    const todoForm = document.querySelector('#todoForm');
    const todoFormInput = document.querySelector('.todo-input');
    const todoList = document.querySelector('.todo-list');
    const itemsRemaining = document.querySelector('#itemsRemaining');
    const userId = todoForm.getAttribute('data-user-id'); // Get user_id from the form attribute

    showItemsRemaining();

    todoForm.addEventListener('submit', event => {
        event.preventDefault();

        const taskDescription = todoFormInput.value;
        
        // Call the function to add a task to the server
        addTaskToServer(taskDescription, userId);

        const newTodoItem = createTodoItem(taskDescription);
        todoList.appendChild(newTodoItem);

        todoFormInput.value = '';
        showItemsRemaining();
    });

    todoList.addEventListener('click', event => {
        const target = event.target;

        if (target.classList.contains('todo-check')) {
            const todoItemToComplete = target.nextElementSibling;
            todoItemToComplete.classList.toggle('line-through');
            showItemsRemaining();
        } else if (target.classList.contains('update-button')) {
            const todoItemToUpdate = target.closest('.todo-item-container');
            const todoItemLabel = todoItemToUpdate.querySelector('.todo-item-label');
            const newLabel = prompt('Update your task:', todoItemLabel.textContent);

            if (newLabel !== null) {
                todoItemLabel.textContent = newLabel;
                showItemsRemaining();
            }
        } else if (target.classList.contains('x-button')) {
            const todoItemToDelete = target.closest('.todo-item-container');
            todoItemToDelete.remove();
            showItemsRemaining();
        }
    });

    function createTodoItem(label) {
        const todoItemContainer = document.createElement('li');
        todoItemContainer.classList.add('todo-item-container');

        const todoItem = document.createElement('div');
        todoItem.classList.add('todo-item');

        const checkbox = document.createElement('input');
        checkbox.type = 'checkbox';
        checkbox.classList.add('todo-check');

        const todoItemLabel = document.createElement('span');
        todoItemLabel.classList.add('todo-item-label');
        todoItemLabel.textContent = label;

        const updateButton = document.createElement('button');
        updateButton.classList.add('update-button');
        updateButton.textContent = 'Update';

        const deleteButton = document.createElement('button');
        deleteButton.classList.add('x-button');
        deleteButton.innerHTML = 'Delete &times;';

        todoItem.appendChild(checkbox);
        todoItem.appendChild(todoItemLabel);
        todoItem.appendChild(updateButton);
        todoItem.appendChild(deleteButton);

        todoItemContainer.appendChild(todoItem);

        return todoItemContainer;
    }

    function showItemsRemaining() {
        const todoItemLabels = document.querySelectorAll('.todo-item-label');
        const itemsCount = Array.from(todoItemLabels).filter(
            (todoItemLabel) => !todoItemLabel.classList.contains('line-through')
        ).length;

        itemsRemaining.textContent = itemsCount;
    }

    function addTaskToServer(taskDescription, userId) {
        // Implement the logic to send the task to the server

        fetch('/addTask.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                taskDescription: taskDescription,
                userId: userId,
            }),
        })
        .then(response => response.json())
        .then(data => {
            // Handle the server response if needed
            console.log(data);
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }
});