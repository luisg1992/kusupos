<?php

//CONTROLLERS
require_once "Controller/template.controller.php";
require_once "Controller/categorias.controller.php";

//MODELS
require_once "Models/categorias.model.php";

$template = new ControllerTemplate();
$template -> ctrTemplate();

?>