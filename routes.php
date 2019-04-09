<?php

$router = new Router();

$router->define([
    '' => 'app/Controllers/WelcomeController.php',
    'about' => 'app/Controllers/AboutController.php',
    'spam' => 'app/Controllers/SpamController.php',
    'clowns' => 'app/Controllers/ClownsController.php',
]);
