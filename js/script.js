// Get references to the input field, button, unordered list (UL), and filter buttons
const inputBox = document.getElementById('input-box');
const addButton = document.getElementById('addButton');
const listContainer = document.getElementById('list-container');
const allButton = document.querySelector('.all button');
const pendingButton = document.querySelector('.pending button');
const completedButton = document.querySelector('.completed button');

// Identify the current section dynamically from the HTML
const section = document.body.getAttribute('data-section'); // e.g., "all", "wishlist", "personal"
const storageKey = `${section}Tasks`; // Create a dynamic key for localStorage

// Load tasks from localStorage on page load
document.addEventListener('DOMContentLoaded', loadTasks);

// Event listeners
addButton.addEventListener('click', addTask);
inputBox.addEventListener('keypress', function (event) {
    if (event.key === 'Enter') addTask();
});

// Filter buttons
allButton.addEventListener('click', () => filterTasks('all'));
pendingButton.addEventListener('click', () => filterTasks('pending'));
completedButton.addEventListener('click', () => filterTasks('completed'));

// Function to add a new task
function addTask() {
    const taskText = inputBox.value.trim(); // Get input value
    if (taskText === '') {
        alert('Please enter a task.');
        return;
    }

    const listItem = createTaskElement(taskText, false);

    listContainer.appendChild(listItem); // Add to the list
    saveTasks(); // Save to localStorage
    inputBox.value = ''; // Clear input field
}

// Function to create a task element (LI)
function createTaskElement(taskText, isCompleted) {
    const listItem = document.createElement('li');

    // Task text span
    const taskSpan = document.createElement('span');
    taskSpan.textContent = taskText;

    // Add completed class if needed
    if (isCompleted) {
        listItem.classList.add('completed');
    }

    // Event to toggle completion
    taskSpan.addEventListener('click', function () {
        listItem.classList.toggle('completed');
        saveTasks();
    });

    // Trash icon
    const trashIcon = document.createElement('i');
    trashIcon.classList.add('fa-solid', 'fa-trash');
    trashIcon.addEventListener('click', function () {
        listItem.remove();
        saveTasks();
    });

    // Append elements to list item
    listItem.appendChild(taskSpan);
    listItem.appendChild(trashIcon);

    return listItem;
}

// Function to save tasks to localStorage
function saveTasks() {
    const tasks = [];
    document.querySelectorAll('#list-container li').forEach(listItem => {
        const taskText = listItem.querySelector('span').textContent;
        const isCompleted = listItem.classList.contains('completed');
        tasks.push({ text: taskText, completed: isCompleted });
    });
    localStorage.setItem(storageKey, JSON.stringify(tasks)); // Save tasks under section-specific key
}

// Function to load tasks from localStorage
function loadTasks() {
    const savedTasks = JSON.parse(localStorage.getItem(storageKey)) || [];
    savedTasks.forEach(task => {
        const listItem = createTaskElement(task.text, task.completed);
        listContainer.appendChild(listItem);
    });
}

// Function to filter tasks
function filterTasks(filter) {
    const tasks = document.querySelectorAll('#list-container li');

    tasks.forEach(task => {
        const isCompleted = task.classList.contains('completed');
        switch (filter) {
            case 'all':
                task.style.display = 'flex'; // Show all tasks
                break;
            case 'pending':
                task.style.display = isCompleted ? 'none' : 'flex'; // Show only pending
                break;
            case 'completed':
                task.style.display = isCompleted ? 'flex' : 'none'; // Show only completed
                break;
        }
    });
}
