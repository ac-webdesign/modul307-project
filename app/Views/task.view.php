<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Task</title>
    <link rel="stylesheet" href="public/styles/app.scss">
</head>

<body>
    <h1 class="title">Alle Tasks</h1>
    <div class="list is-hoverable">
        <?php foreach ($tasks as $task) : ?>
            <a class="list-item"><?= $task['title'] ?></a>
        <?php endforeach; ?>
    </div>
    <script src="public/js/app.js"></script>
</body>

</html>