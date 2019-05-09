const tasksList = document.getElementById("taskList");

document.getElementById("newTaskForm").addEventListener("submit", event => {
    event.preventDefault();

    const form = document.getElementById("newTaskForm");
    const titleInput = form.elements["title"];
    const descriptionInput = form.elements["description"];

    createTask(titleInput.value, descriptionInput.value);
});

function createTask(title, description) {
    const XHR = new XMLHttpRequest();

    XHR.onreadystatechange = function(event) {
        const SENT = 4;

        if (XHR.readyState === SENT) {
            const OK = 200;
            const ERROR = 400;

            if (this.status === OK) {
                addTaskToList(title, description);
            }
            if (this.status === ERROR) {
                alert(event.currentTarget.response);
            }
        }
    };

    XHR.open("POST", "services/checkTaskForm.php", true);
    XHR.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    XHR.send(`title=${title}&description=${description}`);
}

function addTaskToList(title, description) {
    let task = document.createElement("div");
    let taskHeader = document.createElement("h3");

    taskHeader.innerText = title;
    task.appendChild(taskHeader);

    if (description.length > 0) {
        let taskContent = document.createElement("p");

        taskContent.innerText = description;
        task.appendChild(taskContent);
    }

    tasksList.appendChild(task);
}

document
    .getElementById("clearTaskListBtn")
    .addEventListener("click", () => tasksList.innerHTML = "");