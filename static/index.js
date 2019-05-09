document.getElementById("newTaskForm").addEventListener("submit", event => {
    event.preventDefault();

    const form = document.getElementById("newTaskForm");
    const titleInput = form.elements["title"];
    const descriptionInput = form.elements["description"];

    createTask(titleInput.value, descriptionInput.value);
});

function createTask(title, description) {
    console.log("Function not implemented");
}
