<?php

$tools = getAllTools();

$id = $_GET['id'];

$repair = new Repairs();
$tool = new Tools();

$repair = $repair->getById($id);
$selectedTool = $tool->getById($repair['fk_tool']);

require 'app/views/edit-repair-process.view.php';