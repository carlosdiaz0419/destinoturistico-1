
<?php 
require_once('modelo/paquetesModel.php');
class paquetesController{
    private $paquetesModel;
    public function __construct(){
        $this->paquetesModel = new paquetesModel();
    }
    public static function mostrarPaquetes(){
        require('vista/paquetes/mostrarPaquetes.php');
    }
    public static function mostrarDetallesumidero(){
        require('vista/paquetes/mostrarDetallesum.php');
    }
    
  
}
?>