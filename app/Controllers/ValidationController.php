<?php
var_dump($_SERVER['REQUEST_METHOD']);
var_dump($_POST);
if (sizeof($_POST) === 0) {
    require 'app/Views/form.view.php';
} else {
    require 'app/Views/validation.view.php';
}
