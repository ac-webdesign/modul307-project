<?php
// Daten abrufen
$errors = [];
$urgents = getAllUrgents();
$tools = getAllTools();
$repair = getRepairById($_GET['id']);
$selectedTool = getToolById($repair['fk_tool']);

// die(var_dump($repair['is_done'] = $repair['is_done']));

require 'app/views/edit-repair-process.view.php';
