<?php

require_once 'model/peliculaModel.php';
require_once 'model/generoModel.php';

class peliculasController {
   private $model;
   private $model2;
   
    function __construct() {
        $this->model = new peliculaModel();
        $this->model2= new generoModel();
    }
    
    public function listar(){
        $peliculas = $this->model->listar();
        require_once 'view/include/header.php';
        require_once 'view/pelicula/Peliculas.php';
        require_once 'view/include/footer.php';
    }
    
    public function formularioregistrar(){
        util::administradorLogin();
        $listaGeneros = $this->model2->listar();
        require_once 'view/include/header.php';
        require_once 'view/pelicula/registrar.php';
        require_once 'view/include/footer.php';
        
    }

  
    public function registrar(){
        util::administradorLogin();
        $nombre= $_POST['nombre'];
        $director= $_POST['director'];
        $sinopsis= $_POST['sinopsis'];
        $genero= $_POST['genero'];      
        $portada =file_get_contents($_FILES['portada']['tmp_name']);
        
        $pelicula = new pelicula(0,$nombre,$director,$sinopsis,$genero,0,$portada);
        
        $this->model->registrar($pelicula);
        
        header("location:index.php");
        
    }
     public function fomularioEditar(){
         util::administradorLogin();
        $codigo=$_GET['codigo'];    
        $pelicula = $this->model->buscarPelicula($codigo);
        $listaGeneros = $this->model2->listar();
        require_once 'view/include/header.php';
        require_once 'view/pelicula/editar.php';
        require_once 'view/include/footer.php';
    }


    public function editar(){
        util::administradorLogin();
        $codigo=$_POST['codigo'];
        $nombre=$_POST['nombre'];
        $director=$_POST['director'];
        $sinopsis=$_POST['sinopsis'];
        $genero=$_POST['genero'];
        $puntuacion=$_POST['puntuacion'];
        $portada =file_get_contents($_FILES['portada']['tmp_name']);
        
        $pelicula = new pelicula($codigo,$nombre,$director,$sinopsis,$genero,$puntuacion,$portada);
        
        $this->model->editar($pelicula);
        
        header("location:index.php");
    }
    
    public function eliminar(){
        util::administradorLogin();
        $codigo=$_GET['codigo'];    
        $this->model->eliminar($codigo);
        
         header("location:index.php");
    }
    
    public function formularioVotar(){
        $codigo=$_POST['codigo'];
        $puntuacion=$_POST['puntuacion'];
        $pelicula = $this->model->buscarPelicula($codigo);
        
        $puntuacion= $pelicula->getPuntuacion()+$puntuacion;
        
        
      
       $this->model->votar($puntuacion,$codigo);
       
       header("location:index.php");

    }
    
    
    
}
