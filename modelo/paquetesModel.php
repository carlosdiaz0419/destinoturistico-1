<?php
require_once('conexion.php');
class paquetesModel {
    private $pdo;

    public function __construct() {
        $this->pdo = new Conexion(); // Usamos la clase Conexion que extiende PDO
    }


    
   
}
?>
