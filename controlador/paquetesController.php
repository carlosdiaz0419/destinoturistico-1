
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
    public static function mostrarDetallesancristobal(){
        require('vista/paquetes/mostrarDetallesancristobal.php');
    }
    public static function mostrarDetallemontebello(){
        require('vista/paquetes/mostrarDetallemontebello.php');

    }
    public static function mostrarDetallepalenque(){
        require('vista/paquetes/mostrarDetallepalenque.php');

    }
    public static function mostrarDetalleaguaazul(){
        require('vista/paquetes/mostrarDetalleaguaazul.php');

    }
    public static function mostrarDetallechiflon(){
        require('vista/paquetes/mostrarDetallechiflon.php');

    }
    public static function reservar(){
        $nombre=$_REQUEST['nombre'];
        $apellido=$_REQUEST['apellido'];
        $telefono=$_REQUEST['telefono'];
        $correo=$_REQUEST['correo'];
        $curp=$_REQUEST['curp'];
        $pasajeros=$_REQUEST['pasajeros'];
        $precio=$_REQUEST['precio'];
        $estatus=$_REQUEST['comentarios'];
        $id_paquete=1;
        $id_tipo_servicio=1;
        $id_servicios=1;
        $paquetesModel = new paquetesModel();
        $paquetesModel->guardarReserva($nombre,$apellido,$telefono,$correo,$curp,$pasajeros, $precio, $id_paquete, $estatus,$id_servicios,$id_tipo_servicio);
        header("location:".urlsite."index.php?p=mostrarDetallesumidero");

    }
    public static function reservarSancristobal(){
        $nombre=$_REQUEST['nombre'];
        $apellido=$_REQUEST['apellido'];
        $telefono=$_REQUEST['telefono'];
        $correo=$_REQUEST['correo'];
        $curp=$_REQUEST['curp'];
        $pasajeros=$_REQUEST['pasajeros'];
        $precio=$_REQUEST['precio'];
        $estatus=$_REQUEST['comentarios'];
        $id_paquete=2;
        $id_tipo_servicio=2;
        $id_servicios=2;
        $paquetesModel = new paquetesModel();
        $paquetesModel->guardarReserva($nombre,$apellido,$telefono,$correo,$curp,$pasajeros, $precio, $id_paquete, $estatus,$id_servicios,$id_tipo_servicio);
        header("location:".urlsite."index.php?p=mostrarDetallesancristobal");

    }
    
    public static function reservarMontebello(){
        $nombre=$_REQUEST['nombre'];
        $apellido=$_REQUEST['apellido'];
        $telefono=$_REQUEST['telefono'];
        $correo=$_REQUEST['correo'];
        $curp=$_REQUEST['curp'];
        $pasajeros=$_REQUEST['pasajeros'];
        $precio=$_REQUEST['precio'];
        $estatus=$_REQUEST['comentarios'];
        $id_paquete=3;
        $id_tipo_servicio=3;
        $id_servicios=3;
        $paquetesModel = new paquetesModel();
        $paquetesModel->guardarReserva($nombre,$apellido,$telefono,$correo,$curp,$pasajeros, $precio, $id_paquete, $estatus,$id_servicios,$id_tipo_servicio);
        header("location:".urlsite."index.php?p=mostrarDetallemontebello");

    }
    public static function reservarPalenque(){
        $nombre=$_REQUEST['nombre'];
        $apellido=$_REQUEST['apellido'];
        $telefono=$_REQUEST['telefono'];
        $correo=$_REQUEST['correo'];
        $curp=$_REQUEST['curp'];
        $pasajeros=$_REQUEST['pasajeros'];
        $precio=$_REQUEST['precio'];
        $estatus=$_REQUEST['comentarios'];
        $id_paquete=4;
        $id_tipo_servicio=4;
        $id_servicios=4;
        $paquetesModel = new paquetesModel();
        $paquetesModel->guardarReserva($nombre,$apellido,$telefono,$correo,$curp,$pasajeros, $precio, $id_paquete, $estatus,$id_servicios,$id_tipo_servicio);
        header("location:".urlsite."index.php?p=mostrarDetallepalenque");

    }
    public static function reservarChiflon(){
        $nombre=$_REQUEST['nombre'];
        $apellido=$_REQUEST['apellido'];
        $telefono=$_REQUEST['telefono'];
        $correo=$_REQUEST['correo'];
        $curp=$_REQUEST['curp'];
        $pasajeros=$_REQUEST['pasajeros'];
        $precio=$_REQUEST['precio'];
        $estatus=$_REQUEST['comentarios'];
        $id_paquete=5;
        $id_tipo_servicio=5;
        $id_servicios=5;
        $paquetesModel = new paquetesModel();
        $paquetesModel->guardarReserva($nombre,$apellido,$telefono,$correo,$curp,$pasajeros, $precio, $id_paquete, $estatus,$id_servicios,$id_tipo_servicio);
        header("location:".urlsite."index.php?p=mostrarDetallesancristobal");

    }
    public static function reservarAguaazul(){
        $nombre=$_REQUEST['nombre'];
        $apellido=$_REQUEST['apellido'];
        $telefono=$_REQUEST['telefono'];
        $correo=$_REQUEST['correo'];
        $curp=$_REQUEST['curp'];
        $pasajeros=$_REQUEST['pasajeros'];
        $precio=$_REQUEST['precio'];
        $estatus=$_REQUEST['comentarios'];
        $id_paquete=6;
        $id_tipo_servicio=6;
        $id_servicios=6;
        $paquetesModel = new paquetesModel();
        $paquetesModel->guardarReserva($nombre,$apellido,$telefono,$correo,$curp,$pasajeros, $precio, $id_paquete, $estatus,$id_servicios,$id_tipo_servicio);
        header("location:".urlsite."index.php?p=mostrarDetalleaguaazul");

    }
  
}
?>