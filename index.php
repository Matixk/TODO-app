<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TODO app</title>

    <script src="static/index.js" defer></script>
</head>
<body>
    <h1>Task form</h1>
    <form id="newTaskForm">
        Title:
        <input name="title"
               type="text" placeholder="Title"
               minlength="10" maxlength="255" required />

        Description:
        <textarea name="description"
                  placeholder="Description"
                  maxlength="255"></textarea>

        <input type="submit" value="Add" id="createTaskBtn" />
    </form>

    <button id="removeFirstTaskBtn">Remove</button>
    <button id="clearTaskListBtn">Clear</button>

    <h1>Your Tasks</h1>
    <div id="taskList"></div>
</body>
</html>