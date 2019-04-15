<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=tasklist', 'root', '', [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    ]);
} catch (PDOException $error) {
    die('Keine Verbindung zur Datenbank möglich: ' . $error->getMessage());
}

$st = $pdo->prepare('SELECT * FROM tasks');
$tasks = $st->fetchAll();
var_dump($tasks);

require 'app/Views/task.view.php';
