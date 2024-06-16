<?php

//CONTROLLERS
require_once "Controller/template.controller.php";
require_once "Controller/categorias.controller.php";
require_once "Controller/productos.controller.php";

//MODELS
require_once "Models/categorias.model.php";
require_once "Models/productos.model.php";

$template = new ControllerTemplate();
$template -> ctrTemplate();

?>