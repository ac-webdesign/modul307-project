<?php
// Alle Werkzeug aus DB abrufen
$db = connectToDatabase();
$tools = $db->prepare('SELECT * FROM `tools`');
$tools->execute();
$tools = $tools->fetchAll();

require 'app/views/new-repair-process.view.php';