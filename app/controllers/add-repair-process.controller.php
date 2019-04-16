<?php
// TODO Validation
$urgents = [
    'urgent1' => array(
        'name' => 'sehr tief',
        'number' => 25,
    ),
    'urgent2' => array(
        'name' => 'tief',
        'number' => 20,
    ),
    'urgent3' => array(
        'name' => 'normal',
        'number' => 15,
    ),
    'urgent4' => array(
        'name' => 'hoch',
        'number' => 10,
    ),
    'urgent5' => array(
        'name' => 'sehr hoch',
        'number' => 5,
    ),
];

$startDate = $_POST['start-date'];
$urgent = $_POST['urgent'];
$isDone = $_POST['is-done'];
$tool = $_POST['tool'];
$firstname = trim($_POST['firstname']);
$lastname = trim($_POST['lastname']);
$email = trim($_POST['email']);
$tel = trim($_POST['tel']) ?? null;

foreach ($urgents as $ur => $u) {
    if ($u['name'] === $urgent) {
        $urgent = $u['number'];
    }
}

$newRepairProcess = new Repairs($firstname, $lastname, $email, $tel, $urgent, $isDone, $startDate, $tool);
$newRepairProcess->create();

header('/');
