<?php
$repairId = $_POST['id'];
$tool = getToolByName($_POST['tool']);
$toolId = (int)$tool['id'];
$isDone = $_POST['is-done'];
$urgent = $_POST['urgent'];
$startdate = $_POST['start-date'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$urgent = getUrgentDays($urgent);

$repair = new Repairs($firstname, $lastname, $email, $telephone, $urgent, $isDone, $startdate, $toolId);

if ($repair->update($repairId)) {
    header('Location: overview');
}