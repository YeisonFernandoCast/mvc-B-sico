<?php
// index.php - CONTROLADOR
require_once("modelo/index.php");

class modeloController{
    private $model;
    public function __construct(){
        $this->model = new Modelo();
    }
    // mostrar
    static function index(){
        $producto   = new Modelo();
        $dato       =   $producto->mostrar("productos","1");
        require_once("vista/index.php");
    }
    //nuevo
    static function nuevo(){        
        require_once("vista/nuevo.php");
    }
    //guardar
    static function guardar(){
        $name= $_REQUEST['name'];
        $price= $_REQUEST['price'];
        $data = "'".$name."',".$price;
        $producto = new Modelo();
        $dato = $producto->insertar("productos",$data);
        header("location:".urlsite);
    }

    //editar
    static function editar(){    
        $id = $_REQUEST['id'];
        $producto = new Modelo();
        $dato = $producto->mostrar("productos","id=".$id);        
        require_once("vista/editar.php");
    }
    //actualizar
    static function actualizar(){
        $id = $_REQUEST['id'];
        $name= $_REQUEST['name'];
        $price= $_REQUEST['price'];
        $data = "name='".$name."',price=".$price;
        $producto = new Modelo();
        $dato = $producto->actualizar("productos",$data,"id=".$id);
        header("location:".urlsite);
    }

    //eliminar
    static function eliminar(){    
        $id = $_REQUEST['id'];
        $producto = new Modelo();
        $dato = $producto->eliminar("productos","id=".$id);
        header("location:".urlsite);
    }


}