<?php
require_once("config.php");
require("controlador/indexController.php");
require("controlador/paquetesController.php");
if (isset($_GET['p']) && method_exists('paquetesController', $_GET['p'])) {
    $metodo = $_GET['p'];
    paquetesController::{$metodo}();
}elseif (isset($_GET['i']) && method_exists('indexController', $_GET['i'])) {
    $metodo = $_GET['i'];
    indexController::{$metodo}();
}
else {
    indexController::index();
}
?>
