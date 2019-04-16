<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Repair</title>
    <link rel="stylesheet" href="public/styles/bulma.css">
</head>
<body>
    <section class="section">
        <form action="updaterepair" method="POST">
            <input type="hidden" name="toolId" value="<?= $tool['id']; ?>">   

            <div class="field">
                <label class="label" for="id">Auftrags Id:</label>
                <div class="control">
                    <input class="input" type="number" name="id" id="id" value="<?= $repair['id']; ?>">
                </div>                
            </div>

            <div class="field">
                <label class="label" for="isDone">Status:</label>
                <div class="control">
                    <input class="input" type="text" name="isDone" id="isDone" value="<?= $repair['is_done']; ?>">
                </div>                
            </div>

            <div class="field">
                <label class="label" for="urgent">Dringlichkeit:</label>
                <div class="control">
                    <input class="input" type="text" name="urgent" id="urgent" value="<?= $repair['urgent']; ?>">
                </div>                
            </div>

            <div class="field">
                <label class="label" for="tool">Werkzeug:</label>
                <div class="control">
                    <input class="input" type="text" name="tool" id="tool" value="<?= $tool['name']; ?>">
                </div>                
            </div>

            <div class="field">
                <label class="label" for="startdate">Start:</label>
                <div class="control">
                    <input class="input" type="datetime" name="startdate" id="startdate" value="<?= $repair['startdate']; ?>">
                </div>                
            </div>

            <div class="field">
                <label class="label" for="enddate">Ende:</label>
                <div class="control">
                    <input class="input" type="datetime" name="enddate" id="enddate" value="<?= date("Y-m-d H:i:s", strtotime($repair['startdate'] . " + " . $repair['urgent'] . " days"))?>">
                </div>                
            </div>  
            
            <fieldset class="fieldset">
                <legend>Auftraggeber:</legend>

                <div class="field">
                    <label class="label" for="firstname">Vorname:</label>
                    <div class="control">
                        <input class="input" type="text" name="firstname" id="firstname" value="<?= $repair['firstname']; ?>">
                    </div>                    
                </div>

                <div class="field">
                    <label class="label" for="lastname">Nachname:</label>
                    <div class="control">
                        <input class="input" type="text" name="lastname" id="lastname" value="<?= $repair['lastname']; ?>">
                    </div>                    
                </div>

                <div class="field">   
                    <label class="label" for="email">Email:</label>
                    <div class="control">
                        <input class="input" type="email" name="email" id="email" value="<?= $repair['email']; ?>">
                    </div>                    
                </div>

                <div class="field">
                    <label class="label" for="telephone">Telefon:</label>
                    <div class="control">
                        <input class="input" type="text" name="telephone" id="telephone" value="<?= $repair['telephone']; ?>">
                    </div>                    
                </div>
            </fieldset>

            <div class="field is-grouped is-grouped-right">
                <input class="control" type="submit" value="Änderungen speichern">
            </div>            
        </form>    
    </section>    
</body>
</html>