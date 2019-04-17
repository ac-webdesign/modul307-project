<?php
// Daten abrufen
$errors = [];
$urgents = getAllUrgents();
$tools = getAllTools();

require 'app/views/new-repair-process.view.php';
