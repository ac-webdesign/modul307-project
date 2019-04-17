<?php
// Daten abrufen
$errors = [];
$urgents = getAllUrgents();
$tools = getAllTools();
$repair = getRepairById($_GET['id']);
$selectedTool = getToolById($repair['fk_tool']);


require 'app/views/edit-repair-process.view.php';
