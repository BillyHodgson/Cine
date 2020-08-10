<?php
require_once 'baseDatos/ConexionDB.php';
require_once 'administrador.php';

class administradorModel {
   
   private $db;
   
   function __construct() {
        $this->db = new ConexionDB();
    }
    
   
   public function login($correo,$contraseña){

       $this->db->getConeccion();
       
       $sql="SELECT * FROM ADMINISTRADORES WHERE CORREO='$correo' AND CONTRASEÑA='$contraseña'";
       $registros = $this->db->executeQueryReturnData($sql);
       $this->db->cerrarConeccion();
       
       if($registros !=null){
           $cedula=$registros[0]['cedula'];
           $nombre=$registros[0]['nombre'];
           $telefono= $telefono[0]['telefono'];
           $correo= $registros[0]['correo'];
           $contraseña= $registros[0]['contraseña'];
           
           
           $administrador = new administrador($cedula, $nombre, $telefono, $correo, $contraseña);
           
           return $administrador;           
       } else {
           return null;
       }
       
       
   }
    
}
