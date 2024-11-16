<?php
require_once("config.php");
require("controlador/indexController.php");
require("controlador/paquetesController.php");
require("controlador/sesionController.php");
require("controlador/editarController.php");

if (isset($_GET['p']) && method_exists('paquetesController', $_GET['p'])) {
    $metodo = $_GET['p'];
    paquetesController::{$metodo}();
}elseif (isset($_GET['s']) && method_exists('sesionController', $_GET['s'])) {
    $metodo = $_GET['s'];
    sesionController::{$metodo}();
}elseif (isset($_GET['d']) && method_exists('editarController', $_GET['d'])) {
    $metodo = $_GET['d'];
    editarController::{$metodo}();
}
elseif (isset($_GET['i']) && method_exists('indexController', $_GET['i'])) {
    $metodo = $_GET['i'];
    indexController::{$metodo}();
}
else {
    indexController::index();
}
?>
