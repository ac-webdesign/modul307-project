<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Reperaturauftrag - Übersicht</title>
    <link rel="stylesheet" href="public/styles/app.scss">
</head>

<body>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h1 class="title">Reparaturwerkstatt</h1>
                </div>
                <div class="column">
                    <a href="new" class="button is-success"><i class="icon-new"></i>Neuer Auftrag erstellen</a>
                </div>
            </div>
            <h2 class="subtitle">Vorgänge</h2>

            <?php foreach ($repairs as $repair) : ?>
                <?php if ($repair['is_done'] === '0') : ?>
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
                                    <?= getToolById($repair['fk_tool'])['name']; ?>
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
                            <a href="edit?id=<?= $repair['id'] ?>" class="card-footer-item"><i class="icon-pencil"></i>Auftrag bearbeiten</a>
                        </footer>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </section>

    <script src="public/js/app.js"></script>
</body>

</html>