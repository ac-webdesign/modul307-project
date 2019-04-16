<?php

$router = new Router();

$router->define([
    '' => 'app/controllers/overview.controller.php',
    'overview' => 'app/controllers/overview.controller.php',
    'new' => 'app/controllers/new-repair-process.controller.php',
    'add' => 'app/controllers/add-repair-process.controller.php',
    'edit' => 'app/Controllers/edit-repair-process.controller.php',
    'update' => 'app/Controllers/update-repair-process.controller.php',
]);
