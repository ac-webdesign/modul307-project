<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <link rel="stylesheet" href="public/css/app.css">
</head>

<body>
    <h1 class="title">Formular</h1>
    <form action="/" method="POST">
        <fieldset class="field">
            <legend>Allgemein:</legend>
            <label class="label" class="label" for="bus">Wir möchten den Shuttle-Bus-Service beanspruchen:</label>
            <input class="checkbox" id="bus" value="1" type="checkbox"><br>

            <label class="label" class="label" for="name">Name:</label>
            <input class="control" id="name" type="text"><br>

            <label class="label" class="label" for="person">Wie viele Personen werden von Ihrer Firma teilnehmen?:</label>
            <input class="control" id="person" min="0" type="number"><br>
        </fieldset>
        <fieldset class="field">
            <legend>Kontaktdaten</legend>
            <label class="label" for="tel">Telefon: </label>
            <input class="control" id="tel" type="tel"><br>

            <label class="label" for="note">Haben Sie sonst noch einen Wunsch oder eine Bemerkung?</label>
            <textarea class="textarea" name="note" id="note" rows="3"></textarea><br>

            <label class="label" for="radio">In welchem Hotel möchten Sie übernachten?</label>
            <br>
            <input class="radio" type="radio" name="radio" value="InterContinental Davos"> InterContinental Davos
            <input class="radio" type="radio" name="radio" value="Steinberger Grandhotel Belvédère">Steinberger Grandhotel Belvédère<br>

            <label class="label" for="email">Email:</label>
            <input class="control" id="email" type="email"><br>

            <label class="label" for="select">Was möchten Sie am Abend unternehmen?</label>
            <select class="select" id="select">
                <option value="">Kein Abendprogramm</option>
                <option value="Billardturnier">Billardturnier</option>
                <option value="Bowlingturnier">Bowlingturnier</option>
                <option value="Weindegustation">Weindegustation</option>
                <option value="Asiatischer Kochkurs">Asiatischer Kochkurs</option>
                <option value="Tankzurs für Webentwickler">Tankzurs für Webentwickler</option>
                <option value="Ying &amp; Yang Yoga Einsteigerkurs">Ying &amp; Yang Yoga Einsteigerkurs</option>
            </select><br>
        </fieldset>
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