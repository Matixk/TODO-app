<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TODO app</title>

    <script src="static/index.js" defer></script>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link href="static/css/bootstrap.min.css" rel="stylesheet">
    <link href="static/css/mdb.min.css" rel="stylesheet">
    <link href="static/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-5 p-0    ">
                    <form id="newTaskForm" class="text-center border border-light p-5">
                        <h1>New task</h1>

                        <input name="title"
                               type="text" placeholder="Title" class="form-control mb-4"
                               minlength="10" maxlength="255" required />

                        <textarea name="description"
                                  placeholder="Description" class="form-control mb-4"
                                  maxlength="255"></textarea>

                        <input type="submit" value="Add" id="createTaskBtn" class="btn btn-info btn-block my-4"/>
                    </form>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-sm-5">
                    <h1 class="text-center mt-3 mb-2">Your Tasks</h1>

                    <button class="btn btn-danger mx-5" id="removeFirstTaskBtn">Remove</button>
                    <button class="btn btn-danger mx-5" id="clearTaskListBtn">Clear</button>

                    <div class="overflow-auto mt-3" id="taskList"></div>
                </div>
            </div>


            <footer class="page-footer font-small fixed-bottom">
                <div class="footer-copyright text-center py-3 text-white">
                    Photo by Dominika Roseclay from Pexels.
                </div>
            </footer>
        </div>
    </div>
</body>
</html>