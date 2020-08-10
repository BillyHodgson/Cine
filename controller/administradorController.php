<?php

require_once 'model/administradorModel.php';

class administradorController {
    private $model;
    
    
    function __construct() {
        $this->model= new administradorModel;
    }
    
    public function login(){
        
        $correo = $_POST['correo'];
        $contraseña = $_POST['contraseña'];
        
        $administrador = $this->model->login($correo,$contraseña);
            
        if ($administrador != null){
            $_SESSION['usuarioLogueado'] = $administrador;          
            header("location:index.php");
        }else{
            header("location:index.php?controller=administrador&action=mostrarLogin");
        }
    }
    
    public function mostrarLogin(){
        require_once 'view/include/header.php';
        require_once 'view/administrador/login.php';
        require_once 'view/include/footer.php';

    }
    
    public function cerrarSesion(){
        session_destroy();
        header("location:index.php?controller=administrador&action=mostrarLogin");
    }
} 
