<?php

$router = new Router();

$router->define([
    '' => 'app/controllers/overview.controller.php',
    'overview' => 'app/controllers/overview.controller.php',
    'new' => 'app/controllers/new-repair-process.controller.php',
    'add' => 'app/controllers/add-repair-process.controller.php',
    'edit' => 'app/controllers/edit-repair-process.controller.php',
    'validate-new' => 'app/controllers/validate-new-repair-process.controller.php',
    'validate-edit' => 'app/controllers/validate-edit-repair-process.controller.php',
]);
