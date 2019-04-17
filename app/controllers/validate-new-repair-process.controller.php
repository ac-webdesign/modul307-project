<?php
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $startDate = $repair['startdate'] = trim($_POST['startdate'] ?? '');
    $urgent = $repair['urgent'] = trim($_POST['urgent'] ?? '');
    $isDone = $repair['is_done'] = trim($_POST['is_done'] ?? '');
    $tool = $repair['tool'] = trim($_POST['tool'] ?? '');
    $firstname = $repair['firstname'] = trim($_POST['firstname'] ?? '');
    $lastname = $repair['lastname'] = trim($_POST['lastname'] ?? '');
    $email = $repair['email'] = trim($_POST['email'] ?? '');
    $telephone = $repair['telephone'] = trim($_POST['tel'] ?? '');

    if ($startDate === '') {
        $errors[] = 'Bitte geben Sie ein Start-Datum ein.';
    }

    if ($urgent === '') {
        $errors[] = 'Bitte wählen Sie eine Dringlichkeit aus.';
    }

    if ($isDone === '') {
        $errors[] = 'Bitte wählen Sie einen Status aus.';
    }

    if ($tool === '') {
        $errors[] = 'Bitte wählen Sie ein Werkzeug aus.';
    }

    if ($firstname === '') {
        $errors[] = 'Bitte geben Sie einen Vornamen ein.';
    }

    if ($lastname === '') {
        $errors[] = 'Bitte geben Sie einen Nachnamen ein.';
    }

    if ($email === '') {
        $errors[] = 'Bitte geben Sie eine Email ein.';
    } elseif (strpos($email, '@') === false) {
        $errors[] = 'Die Email-Adresse "' . $email . '" ist ungültig.';
    }

    if (!preg_match('/^[\d\s\-\+\(\)\/]*$/', $telephone)) {
        $errors[] = 'Bitte geben Sie eine gültige Telefonnummer ein.';
    }

    if (count($errors) === 0) {
        $newRepairProcess = new Repairs($firstname, $lastname, $email, $tel, $urgent, $isDone, $startDate, $tool);
        $newRepairProcess->create();
        header('Location: overview');
    } else {
        $urgents = getAllUrgents();
        $tools = getAllTools();

        require 'app/views/new-repair-process.view.php';
    }
} else {
    header('Location: overview');
}
