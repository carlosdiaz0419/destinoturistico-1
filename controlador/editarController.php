<?php 
require_once('modelo/editarModel.php');
class editarController{
    private $editarModel;
    public function __construct(){
        $this->editarModel = new editarModel();
    }
   
    public static function editarBD(){
        $modelconsultar = new editarModel();
        $datos = $modelconsultar->mostrartablaPaquete();
        $detallepaquete = $modelconsultar->mostrartabladetallePaquete();
        $tiposervicio = $modelconsultar->mostrarTiposervicio();
        $servicios= $modelconsultar->mostrarServicios();
        require('vista/editarBD/editar.php');
    }
   
    public static function agregarPaquete(){
        require('vista/editarBD/agregarPaquete.php');
    }
    public static function detallarPaquete(){
        require('vista/editarBD/detallarPaquete.php');
    }
    public static function agregarTipo(){
        require('vista/editarBD/agregarTipo.php');
    }
    public static function agregarServicios(){
        require('vista/editarBD/agregarServicios.php');
    }
    public static function guardarPaquete(){
        $nombre=$_REQUEST['nombre'];
        $costo=$_REQUEST['costo'];
        
        $modelpaquete = new editarModel();
        $modelpaquete->agregarPaquete($nombre, $costo);
        header("location:".urlsite."index.php?d=editarBD");
    }
    public static function guardarDetalles(){
        $id_paquete = $_REQUEST['id_paquete'];
        $id_servicio = $_REQUEST['id_servicio'];
        $id_tipo_servicio= $_REQUEST['id_tipo_servicio'];
        $hora_salida = $_REQUEST['hora_salida'];
        $hora_llegada = $_REQUEST['hora_llegada'];
        $cupo_max = $_REQUEST['cupo_max'];
        $modeldetalles = new editarModel();
        $modeldetalles->agregarDetalles($id_paquete,$id_servicio,$id_tipo_servicio,$hora_salida,$hora_llegada,$cupo_max);
        header("location:".urlsite."index.php?d=editarBD");
    }
    public static function guardarTipo(){
        $id_tipo_servicio=$_REQUEST['id_tipo_servicio'];
        $nombre=$_REQUEST['nombre'];
        $modelTipo = new editarModel();
        $modelTipo->agregarTipo($nombre);
        header("location:".urlsite."index.php?d=editarBD");
    }
    public static function guardarServicios(){
        $id_servicios=$_REQUEST['id_servicios'];
        $nombre=$_REQUEST['nombre'];
        $descripcion=$_REQUEST['descripcion'];
        $modelServicios = new editarModel();
        $modelServicios->agregarServicios($nombre, $descripcion);
        header("location:".urlsite."index.php?d=editarBD");
    }
    public static function actualizarPaquete(){
        $id_paquete=$_REQUEST['id_paquete'];
        $modelpaquete = new editarModel();
        $datos=$modelpaquete->obtenerPaquete($id_paquete);
        require_once('vista/editarBD/actualizarPaquete.php');

    }
    public static function actualizarDetalle(){
        $id_detalle_paquete=$_REQUEST['id_detalle_paquete'];
        $modeldetalles = new editarModel();
        $detalle = $modeldetalles->obtenerDetalle($id_detalle_paquete);
        require_once('vista/editarBD/actualizarDetalle.php');
    }
    public static function actualizarTipo(){
        $id_tipo_servicio=$_REQUEST['id_tipo_servicio'];
        $modelTipo = new editarModel();
        $tipo = $modelTipo->obtenerTipo($id_tipo_servicio);
        require_once('vista/editarBD/actualizarTipo.php');
    }
    public static function actualizarServicios(){
        $id_servicios=$_REQUEST['id_servicios'];
        $modelServicios = new editarModel();
        $servicios = $modelServicios->obtenerServicios($id_servicios);
        require_once('vista/editarBD/actualizarServicios.php');
    }
    public static function modificarPaquete(){
        $id_paquete=$_REQUEST['id_paquete'];
        $nombre=$_REQUEST['nombre'];
        $costo=$_REQUEST['costo'];
        $modelpaquete = new editarModel();
        $modelpaquete->actualizarPaquete($id_paquete,$nombre, $costo);
        header("location:".urlsite."index.php?d=editarBD");
    }
    public static function modificarDetalle(){
        $id_detalle_paquete=$_REQUEST['id_detalle_paquete'];
        $id_paquete = $_REQUEST['id_paquete'];
        $id_servicio = $_REQUEST['id_servicios'];
        $id_tipo_servicio= $_REQUEST['id_tipo_servicio'];
        $hora_salida = $_REQUEST['hora_salida'];
        $hora_llegada = $_REQUEST['hora_llegada'];
        $cupo_max = $_REQUEST['cupo_max'];
        $modeldetalles = new editarModel();
        $modeldetalles->actualizarDetalle($id_detalle_paquete,$id_paquete,$id_servicio,$id_tipo_servicio,$hora_salida,$hora_llegada,$cupo_max);
        header("location:".urlsite."index.php?d=editarBD");
    }
    public static function modificarTipo(){
        $id_tipo_servicio=$_REQUEST['id_tipo_servicio'];
        $nombre=$_REQUEST['nombre'];
        $modelTipo = new editarModel();
        $modelTipo->actualizarTipo($id_tipo_servicio, $nombre);
        header("location:".urlsite."index.php?d=editarBD");
    }
    public static function modificarServicios(){
        $id_servicios=$_REQUEST['id_servicios'];
        $nombre=$_REQUEST['nombre'];
        $descripcion=$_REQUEST['descripcion'];

        $modelServicios = new editarModel();
        $modelServicios->actualizarServicios($id_servicios, $nombre, $descripcion);
        header("location:".urlsite."index.php?d=editarBD");
    }
    public static function eliminarPaquete(){
        $id_paquete=$_REQUEST['id_paquete'];
        $modelpaquete= new editarModel();
        $modelpaquete->eliminarPaquete($id_paquete);
        header("location:".urlsite."index.php?d=editarBD");
    }
    public static function eliminarDetalle(){
        $id_detalle_paquete=$_REQUEST['id_detalle_paquete'];
        $modeldetalles= new editarModel();
        $modeldetalles->eliminarDetalle($id_detalle_paquete);
        header("location:".urlsite."index.php?d=editarBD");
    }
    public static function eliminarTipo(){
        $id_tipo_servicio=$_REQUEST['id_tipo_servicio'];
        $modelTipo= new editarModel();
        $modelTipo->eliminarTipo($id_tipo_servicio);
        header("location:".urlsite."index.php?d=editarBD");
    }
    public static function eliminarServicios(){
        $id_servicios=$_REQUEST['id_servicios'];
        $modelServicios= new editarModel();
        $modelServicios->eliminarServicios($id_servicios);
        header("location:".urlsite."index.php?d=editarBD");
    }

    
}
?>