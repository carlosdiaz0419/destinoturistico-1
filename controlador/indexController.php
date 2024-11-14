
<?php
require_once('modelo/indexModel.php');
class indexController{
private $indexModel;

    function __construct()
    {
        $this->indexModel = new indexModel();

    }

    public static function index(){
        require_once('vista/index.php');
    }
    public static function mostrarNosotros(){
        require_once('vista/Nosotros.php');
    }
    public static function mostrarExperiencias(){
        require_once('vista/Experiencias.php');
    }
    public static function mostrarTestimonios(){
        require_once('vista/Testimonios.php');
    }

}
?>