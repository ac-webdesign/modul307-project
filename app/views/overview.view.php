<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Reperaturauftrag - Übersicht</title>
    <link rel="stylesheet" href="public/styles/app.scss">
</head>

<body>
    <section class="section">
        <h1 class="title">Reparaturwerkstatt</h1>
        <div class="container">
        <h2 class="subtitle">Vorgänge</h2>
            <?php foreach ($repairs as $repair) : ?>
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                           Auftrag <?= $repair['id'] ?>
                        </p>
                    </header>
                    <div class="card-content">
                        <div class="columns">
                            <div class="column is-one-third">
                                <strong>Auftraggeber:</strong>
                            </div>
                            <div class="column is-one-third">
                                <?= $repair['firstname'] ?>
                                <?= $repair['lastname'] ?>
                            </div>
                        </div>
                        <div class="columns">
                            <div class="column is-one-third">
                                <strong>Werkzeug:</strong>
                            </div>
                            <div class="column is-one-third">
                                <?= $repair['fk_tool'] ?>
                            </div>
                        </div>
                        <div class="columns">
                            <div class="column is-one-third">
                                <strong>Reparatur voraussichtlich abgeschlossen am:</strong>
                            </div>
                            <div class="column is-one-third">
                                <?= generateEndDate($repair); ?>
                            </div>
                        </div>
                        <div class="columns">
                            <div class="column is-one-third">
                                <strong>Reparatur Status:</strong>
                            </div>
                            <div class="column is-one-third">
                                <i class="<?= $repair['is_done'] === '1' ? 'icon-thumbs-up' : 'icon-thumbs-down' ?>"></i>
                            </div>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <a href="edit" class="card-footer-item">Edit</a>
                    </footer>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <script src="public/js/app.js"></script>
</body>

</html>