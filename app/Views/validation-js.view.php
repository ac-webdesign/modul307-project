<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Vlidation JS</title>
    <link rel="stylesheet" href="public/styles/app.scss">
</head>

<body>
    <h1 class="title">Validation JS</h1>
    <form id="form" action="/modul307-project/validation" method="POST">
        <div class="field">
            <label class="label" for="name">Name</label>
            <div class="control">
                <input id="name" name="name" class="input" type="text" placeholder="Text input">
            </div>
        </div>
        <div id="errorbox"></div>
        <div class="field is-grouped">
            <div class="control">
                <button type="submit" class="button is-link">Anmelden</button>
            </div>
            <div class="control">
                <button type="reset" class="button is-text">Zurücksetzen</button>
            </div>
        </div>
    </form>
    <script src="public/js/validation.js"></script>
</body>

</html>