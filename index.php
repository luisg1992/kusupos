<?php

//CONTROLLERS
require_once "Controller/template.controller.php";
require_once "Controller/categorias.controller.php";
require_once "Controller/productos.controller.php";
require_once "Controller/ventas.controller.php";

//MODELS
require_once "Models/categorias.model.php";
require_once "Models/productos.model.php";
require_once "Models/ventas.model.php";

$template = new ControllerTemplate();
$template -> ctrTemplate();

?>