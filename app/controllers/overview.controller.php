<?php
// Alle Reparaturaufträge aus DB abrufen
$db = connectToDatabase();
$repairs = $db->prepare('SELECT * FROM `repairs` ORDER BY `repairs`.`startdate` DESC');
$repairs->execute();
$repairs = $repairs->fetchAll();

require 'app/views/overview.view.php';