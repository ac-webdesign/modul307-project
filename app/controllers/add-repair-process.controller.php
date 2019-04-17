<?php
// TODO: Validierung
$startDate = $_POST['startdate'];
$urgent = $_POST['urgent'];
$isDone = $_POST['is_done'];
$tool = getToolByName($_POST['tool']);
$toolId = $tool['id'];
$firstname = trim($_POST['firstname']);
$lastname = trim($_POST['lastname']);
$email = trim($_POST['email']);
$tel = trim($_POST['tel']) ?? null;

$urgent = getUrgentDays($urgent);

$newRepairProcess = new Repairs($firstname, $lastname, $email, $tel, $urgent, $isDone, $startDate, $toolId);
$newRepairProcess->create();

header('Location: overview');
