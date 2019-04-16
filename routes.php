<?php

$router = new Router();

$router->define([
    '' => 'app/controllers/welcome.controller.php',
    'new' => 'app/controllers/add-repair-process.controller.php',
]);
