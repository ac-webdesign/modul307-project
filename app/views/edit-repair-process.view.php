<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Reparaturauftrag bearbeiten</title>
    <link rel="stylesheet" href="public/styles/bulma.css">
</head>

<body>
    <section class="section">
        <div class="container">
            <h1 class="title">Auftrag bearbeiten</h1>
            <?php if(count($errors) > 0): ?>
                <ul>
                    <?php foreach($errors as $error): ?>
                        <li><?= $error ?></li>
                    <?php endforeach; ?>
                </ul>
                <br>
            <?php endif; ?>
            <form action="validate" method="POST">
                <div class="field">
                    <label class="label" for="id">Auftrags Id:</label>
                    <div class="control">
                        <input class="input is-disabled" type="number" name="id" id="id" value="<?= $repair['id']; ?>" readonly>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="startdate">Start:</label>
                    <div class="control">
                        <input class="input" type="date" name="startdate" id="startdate" value="<?= date("Y-m-d", strtotime($repair['startdate'])); ?>" required>
                    </div>
                </div>
                
                <div class="field">
                    <label class="label" for="urgent">Dringlichkeit:</label>
                    <div class="control">
                        <div class="select">
                            <select name="urgent" id="urgent" required>
                                <?php foreach ($urgents as $urgent) : ?>
                                    <option value="<?= $urgent['name'] ?>" 
                                    <?php
                                        if($urgent['days'] == $repair['urgent'])
                                        {
                                            echo("selected");
                                        }
                                    ?>
                                    >
                                    <?= $urgent['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="end-date">Ende:</label>
                    <div class="control">
                        <input class="input" type="text" name="end-date" id="end-date" value="<?= generateEndDate($repair); ?>" disabled>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="is_done">Status:</label>
                    <div class="control">
                        <div class="select">
                            <select id="is_done" name="is_done" required>
                                <?php foreach (getAllStates() as $state) : ?>
                                    <option value="<?= $state['name'] ?>" <?php if($state['id'] == $repair['is_done']){echo("selected");}?>><?= $state['name'] ?></option>
                                <?php endforeach; ?>                                
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
                                    <option value="<?= $tool['name'] ?>" <?php if($tool['id'] === $selectedTool['id']){echo("selected");}?>><?= $tool['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <br>

                <legend class=" subtitle">
                    <strong>Auftraggeber</strong>
                </legend>

                <div class="field">
                    <label class="label" for="firstname">Vorname:</label>
                    <div class="control">
                        <input class="input" type="text" name="firstname" id="firstname" value="<?= $repair['firstname']; ?>" required>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="lastname">Nachname:</label>
                    <div class="control">
                        <input class="input" type="text" name="lastname" id="lastname" value="<?= $repair['lastname']; ?>" required>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="email">Email:</label>
                    <div class="control">
                        <input class="input" type="email" name="email" id="email" value="<?= $repair['email']; ?>" required>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="telephone">Telefon:</label>
                    <div class="control">
                        <input class="input" type="tel" name="telephone" id="telephone" value="<?= $repair['telephone']; ?>">
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button type="submit" class="button is-link">Änderungen speichern</button>
                    </div>
                    <div class="control">
                        <a href="overview" class="button is-text">Abbrechen</a>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <script src="public/js/generate-end-date.js"></script>
</body>

</html>