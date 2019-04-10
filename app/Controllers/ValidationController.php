<?php
$errors = [];
$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];

$formValues = [$name, $email, $tel];

foreach ($formValues as $formControl) {
    trim($formControl);
    if (empty($formControl)) {
        $message = 'Text ist leer';
        array_push($errors, $message);
    }
}

require 'app/Views/form.view.php';
