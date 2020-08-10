<?php

require_once 'baseDatos/ConexionDB.php';
require_once 'genero.php';


class generoModel {
    
    private $db;
    
    function __construct() {
        $this->db = new ConexionDB();
    }

    public function listar(){
        $generos = array();
        $this->db->getConeccion();
        $sql="SELECT * FROM GENEROS";
        $registros = $this->db->executeQueryReturnData($sql);
        $this->db->cerrarConeccion();
        
        foreach ($registros as $row){
            $genero = new genero($row['codigo'],$row['nombre']);
            array_push($generos, $genero);
        }
        
        return $generos;
    }
    
    public function registrar($genero){
        $this->db->getConeccion();
        $sql="INSERT INTO GENEROS (NOMBRE) VALUES(?)";
        $paramType= 's';
        $paramValue= array($genero->getNombre());
        $this->db->executeQuery($sql, $paramType, $paramValue);
        $this->db->cerrarConeccion();        
    }
    
    public function buscarGenero($codigo){
        $this->db->getConeccion();
        $sql="SELECT * FROM GENEROS WHERE CODIGO = $codigo";        
        $registros = $this->db->executeQueryReturnData($sql);  
        $this->db->cerrarConeccion();
        
        if($registros !=null){
            $codigo = $registros[0]['codigo'];
            $nombre = $registros[0]['nombre'];
            
            $genero = new genero($codigo,$nombre);
            return $genero;
        }else{
           return null;   
        }
    }
    
    public function editar($genero){
        $this->db->getConeccion();
        $sql="UPDATE GENEROS SET NOMBRE=? WHERE CODIGO=?";
        $paramType= 'si';
        $paramValue= array($genero->getNombre(),$genero->getCodigo());
        $this->db->executeQuery($sql, $paramType, $paramValue);                
        $this->db->cerrarConeccion();   
    }
    
}