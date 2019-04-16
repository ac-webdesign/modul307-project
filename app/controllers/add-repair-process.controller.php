<?php
// TODO Validation
$startDate = $_POST['start-date'];
$urgent = $_POST['urgent'];
$isDone = $_POST['is-done'];
$tool = $_POST['tool'];
$firstname = trim($_POST['firstname']);
$lastname = trim($_POST['lastname']);
$email = trim($_POST['email']);
$tel = trim($_POST['tel']) ?? null;

$newRepairProcess = new Repairs($firstname, $lastname, $email, $tel, $urgent, $isDone, $startDate, $tool);
$newRepairProcess->create();
