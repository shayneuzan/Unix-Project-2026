<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Tracker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-dark bg-dark px-4">
    <span class="navbar-brand fw-bold">Task Tracker</span>
    <a href="create.php" class="btn btn-danger btn-sm">+ New Task</a>
</nav>

<div class="container mt-4">
    <h4 class="mb-3">All Tasks</h4>
    <table class="table table-bordered table-striped bg-white">
        <thead class="table-dark">
            <tr>
                <th>Title</th>
                <th>Status</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Sample rows for a design preview -->
            <tr>
                <td>Finish the Unix project</td>
                <td><span class="badge bg-warning text-dark">Pending</span></td>
                <td>Apr 30</td>
                <td><button class="btn btn-danger btn-sm">Delete</button></td>
            </tr>
            <tr>
                <td>Set up Docker containers</td>
                <td><span class="badge bg-success">Done</span></td>
                <td>Apr 29</td>
                <td><button class="btn btn-danger btn-sm">Delete</button></td>
            </tr>
            <tr>
                <td>Design frontend with Bootstrap</td>
                <td><span class="badge bg-warning text-dark">Pending</span></td>
                <td>Apr 30</td>
                <td><button class="btn btn-danger btn-sm">Delete</button></td>
            </tr>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>