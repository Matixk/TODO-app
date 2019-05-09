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
                console.log("Task added")
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
