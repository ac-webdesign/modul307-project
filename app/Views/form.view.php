<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <link rel="stylesheet" href="public/css/app.scss">
</head>

<body>
    <h1 class="title">Formular</h1>
    <form action="/modul307-project/validation" method="POST">
        <div class="field">
            <label class="label" for="name">Name</label>
            <div class="control">
                <input id="name" name="name" class="input" type="text" placeholder="Text input">
            </div>
        </div>
        <div class="field">
            <label class="label" for="email">Email</label>
            <div class="control">
                <input id="email" class="input" type="email" placeholder="Text input">
            </div>
        </div>
        <div class="field">
            <label class="label" for="tel">Telefon</label>
            <div class="control">
                <input id="tel" class="input" type="text" placeholder="Text input">
            </div>
        </div>
        <div class="field is-grouped">
            <div class="control">
                <button type="submit" class="button is-link">Anmelden</button>
            </div>
            <div class="control">
                <button type="reset" class="button is-text">Zurücksetzen</button>
            </div>
        </div>
    </form>
    <script src="public/js/app.js"></script>
</body>

</html>