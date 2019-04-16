<?php
$db = connectToDatabase();
$tools = $db->prepare('SELECT * FROM `tools`');
$tools->execute();
var_dump($tools->fetchAll());

require 'app/views/new-repair-process.view.php';