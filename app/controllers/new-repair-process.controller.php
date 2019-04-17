<?php
$errors = [];

//Workarround damit Validierung funktioniert (Standarddeklaraton geben)
$urgentDays = '';
$isDone = '';
$selectedTool = '';

// Daten abrufen
$urgents = getAllUrgents();
$tools = getAllTools();

require 'app/views/new-repair-process.view.php';
