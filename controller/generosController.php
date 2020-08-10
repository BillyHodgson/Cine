<?php

require_once 'model/generoModel.php';

class generosController {
   private $model;
    
    function __construct() {
        $this->model = new generoModel();
    }
    
    public function listar(){
        $generos = $this->model->listar();
        require_once 'view/include/header.php';
        require_once 'view/genero/listar.php';
        require_once 'view/include/footer.php';
    }
    
    public function formularioregistrar(){
        util::administradorLogin();
        require_once 'view/include/header.php';
        require_once 'view/genero/registrar.php';
        require_once 'view/include/footer.php';
        
    }

  
    public function registrar(){
        util::administradorLogin();
        $nombre= $_POST['nombre'];    
        $genero = new genero(0,$nombre);
        
        $this->model->registrar($genero);
        
        header("location:index.php");
        
    }
    
    public function fomularioEditar(){
        util::administradorLogin();
        $codigo=$_GET['codigo'];    
        $genero = $this->model->buscarGenero($codigo);
        require_once 'view/include/header.php';
        require_once 'view/genero/editar.php';
        require_once 'view/include/footer.php';
    }


    public function editar(){
        util::administradorLogin();
        $codigo=$_POST['codigo'];
        $nombre= $_POST['nombre'];    
        $genero = new genero($codigo,$nombre);
        
        $this->model->editar($genero);
        
        header("location:index.php");
    }
    
}