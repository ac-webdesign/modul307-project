<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Reparaturauftrag erstellen</title>
    <link rel="stylesheet" href="public/styles/app.scss">
</head>

<body>
    <section class="section">
        <nav class="breadcrumb is-centered">
            <ul>
                <li>
                    <a href="overview">Übersicht</a>
                </li>
                <li class="is-active">
                    <a href="#">Auftrag erstellen</a>
                </li>
            </ul>
        </nav>

        <div class="container">
            <h1 class="title">Auftrag erstellen</h1>
            <form id="form" action="add" method="POST">
                <legend class="subtitle">
                    <strong>Allgemein</strong>
                </legend>

                <div class="field">
                    <label class="label" for="start-date">Start:</label>
                    <div class="control">
                        <input id="start-date" name="start-date" class="input" type="date" value="<?= date('Y-m-d'); ?>" required>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="urgent">Dringlichkeit:</label>
                    <div class="control">
                        <div class="select">
                            <select id="urgent" name="urgent" required>
                                <?php foreach ($urgents as $urgent) : ?>
                                    <option value="<?= $urgent['name'] ?>"><?= $urgent['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="end-date">Ende:</label>
                    <div class="control">
                        <input id="end-date" name="end-date" class="input" type="text" disabled>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="is-done">Status:</label>
                    <div class="control">
                        <div class="select">
                            <select id="is-done" name="is-done" required>
                                <option value="Auftrag ist abgeschlossen">Auftrag ist abgeschlossen</option>
                                <option value="Auftrag ist pendent">Auftrag ist pendent</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="tool">Werkzeug:</label>
                    <div class="control">
                        <div class="select">
                            <select id="tool" name="tool" required>
                                <?php foreach ($tools as $tool) : ?>
                                    <option value="<?= $tool['name'] ?>"><?= $tool['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>

                <br>
                <legend class="subtitle">
                    <strong>Auftraggeber</strong>
                </legend>

                <div class="field">
                    <label class="label" for="firstname">Vorname:</label>
                    <div class="control">
                        <input id="firstname" name="firstname" class="input" type="text" required>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="lastname">Nachname:</label>
                    <div class="control">
                        <input id="lastname" name="lastname" class="input" type="text" required>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="email">Email:</label>
                    <div class="control">
                        <input id="email" name="email" class="input" type="email" required>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="tel">Telefon:</label>
                    <div class="control">
                        <input id="tel" name="tel" class="input" type="tel">
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button type="submit" class="button is-link">Auftrag erstellen</button>
                    </div>
                    <div class="control">
                        <a href="overview" class="button is-text">Abbrechen</a>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <script src="public/js/generate-end-date.js"></script>
    <script src="public/js/validation.js"></script>
</body>

</html>