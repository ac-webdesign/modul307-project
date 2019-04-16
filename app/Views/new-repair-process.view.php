<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Reparaturauftrag erstellen</title>
    <link rel="stylesheet" href="public/styles/app.scss">
</head>

<body>

    <section class="section">
        <div class="container">
            <h1 class="title">Auftrag erstellen</h1>
            <form action="app/controllers/add-repair-process.controller.php" method="POST">
                <legend>
                    <strong>Allgemein<strong>
                </legend>
                <br>
                <div class="field">
                    <label class="label">Start:</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Text input">
                    </div>
                </div>
                <div class="field">
                    <label class="label">Ende:</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Text input">
                    </div>
                </div>
                <div class="field">
                    <label class="label">Status:</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Text input">
                    </div>
                </div>
                <div class="field">
                    <label class="label">Dringlichkeit:</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Text input">
                    </div>
                </div>
                <div class="field">
                    <label class="label">Werkzeug:</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Text input">
                    </div>
                </div>
                <br>
                <legend>
                    <strong>Auftraggeber<strong>
                </legend>
                <br>
                <div class="field">
                    <label class="label">Name:</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Text input">
                    </div>
                </div>
                <div class="field">
                    <label class="label">Email:</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Text input">
                    </div>
                </div>
                <div class="field">
                    <label class="label">Telefon:</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Text input">
                    </div>
                </div>
            </form>
        </div>
    </section>

    <script src="public/js/app.js"></script>
</body>

</html>