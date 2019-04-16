<?php

$repairId = $_POST['id'];
$toolId = $_POST['toolId'];
$isDone = $_POST['isDone'];
$urgent = $_POST['urgent'];
$startdate = $_POST['startdate'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$tool = $_POST['toolId'];

$repair = new repairs($firstname, $lastname, $email, $telephone, $urgent, $isDone, $startdate, $toolId);

if($repair->update($repairId))
{
    header('Location: ');
}