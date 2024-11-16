<?php 
require_once('modelo/sesionModel.php');
session_start();

class sesionController{
    private $sesionModel;
    public function __construct(){
        $this->sesionModel = new sesionModel();
        
    }
    public static function mostrarSesion(){
        require('vista/sesion/inicarsesion.php');

    }

    public static function sesion() {
                // Obtener los datos del formulario
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];

        // Verifica si el usuario es empleado
        if ($usuario === 'carlos' && $contrasena === 'carlos123') {
            $_SESSION['tipo_usuario'] = 'empleado';
        } else
        {
            $_SESSION['tipo_usuario'] = 'cliente';
        }
        require_once('vista/index.php');

        // Redirige al usuario a la página principal
        exit();
    }
    
    
    public static function logout() {
        session_unset();
        session_destroy();
        require_once('vista/index.php');
        exit();
    }
}
?>