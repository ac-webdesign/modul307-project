<?php

$id = $_GET['id'];

$repair = new repairs();
$tool = new tools();

$repair = $repair->getById($id);
$tool = $tool->getById($repair['fk_tool']);

require 'app/views/editrepair.view.php';