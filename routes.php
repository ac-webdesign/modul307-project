<?php

$router = new Router();

$router->define([
    '' => 'app/controllers/welcome.controller.php',
    'new' => 'app/controllers/new-repair-process.controller.php',
]);
