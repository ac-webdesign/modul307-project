<?php

$router = new Router();

$router->define([
    '' => 'app/Controllers/WelcomeController.php',
    'about' => 'app/Controllers/AboutController.php',
]);