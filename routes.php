<?php

$router = new Router();

$router->define([
    '' => 'app/controllers/overview.controller.php',
    'new' => 'app/controllers/new-repair-process.controller.php',
]);
