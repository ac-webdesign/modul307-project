<?php
if (sizeof($_POST) === 0) {
    require 'app/Views/form.view.php';
} else {
    trim($_POST['name']);
    require 'app/Views/validation.view.php';
}
