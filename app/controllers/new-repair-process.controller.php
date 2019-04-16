<?php
// Daten abrufen
$urgents = getAllUrgents();
$tools = getAllTools();

require 'app/views/new-repair-process.view.php';
