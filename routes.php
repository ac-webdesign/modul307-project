<?php

$router = new Router();

$router->define([
    '' => 'app/Controllers/WelcomeController.php',
    'edit' => 'app/Controllers/EditRepairController.php',
    'updaterepair' => 'app/Controllers/UpdateRepairController.php',
]);
