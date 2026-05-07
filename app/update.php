<?php
require_once 'includes/db-connection.php';

$error = '';
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if (!$id) {
    header('Location: index.php');
    exit;
}

$stmt = $pdo->prepare("SELECT * FROM tasks WHERE id = ?");
$stmt->execute([$id]);
$task = $stmt->fetch();

if (!$task) {
    header('Location: index.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title'] ?? '');

    if ($title === '') {
        $error = 'Task title cannot be empty.';
    } else {
        $stmt = $pdo->prepare("UPDATE tasks SET title = ? WHERE id = ?");
        $stmt->execute([$title, $id]);
        header('Location: index.php');
        exit;
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-dark bg-dark px-4">
    <span class="navbar-brand fw-bold">Task Tracker</span>
    <a href="index.php" class="btn btn-outline-light btn-sm">Back</a>
</nav>

<div class="container mt-4" style="max-width: 500px;">
    <h4 class="mb-3">Edit Task</h4>

    <?php if ($error): ?>
        <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <form method="POST" action="update.php?id=<?= $id ?>">
        <div class="mb-3">
            <label for="title" class="form-label">Task Title</label>
            <input type="text" class="form-control" id="title" name="title"
                   value="<?= htmlspecialchars($task['title']) ?>" autofocus>
        </div>
        <button type="submit" class="btn btn-danger w-100">Save Changes</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
