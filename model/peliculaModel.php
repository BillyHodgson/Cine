<?php

require_once 'baseDatos/ConexionDB.php';
require_once 'pelicula.php';


class peliculaModel {
    
    private $db;
    
    function __construct() {
        $this->db = new ConexionDB();
    }

    public function listar(){
        $peliculas = array();
        $this->db->getConeccion();
        $sql="SELECT * FROM PELICULAS";
        $registros = $this->db->executeQueryReturnData($sql);
        $this->db->cerrarConeccion();
        
        foreach ($registros as $row){
            $pelicula = new pelicula($row['codigo'],$row['nombre'],$row['director'],$row['sinopsis'],$row['genero'],$row['puntuacion'],$row['portada']);
            array_push($peliculas, $pelicula);
        }
        
        return $peliculas;
    }
    
    public function registrar($pelicula){
        $this->db->getConeccion();
        $sql="INSERT INTO PELICULAS (NOMBRE,DIRECTOR,SINOPSIS,GENERO,PUNTUACION,PORTADA) VALUES(?,?,?,?,?,?)";
        $paramType= 'ssssis';
        $paramValue= array($pelicula->getNombre(),
                           $pelicula->getDirector(),
                           $pelicula->getSinopsis(),
                           $pelicula->getGenero(),
                           $pelicula->getPuntuacion(),
                           $pelicula->getPortada());
        $this->db->executeQuery($sql, $paramType, $paramValue);
        $this->db->cerrarConeccion();        
    }
   public function buscarPelicula($codigo){
        $this->db->getConeccion();
        $sql="SELECT * FROM PELICULAS WHERE CODIGO =$codigo";        
        $registros = $this->db->executeQueryReturnData($sql);  
        $this->db->cerrarConeccion();
        
        if($registros !=null){
            $codigo = $registros[0]['codigo'];
            $nombre = $registros[0]['nombre'];
            $director = $registros[0]['director'];
            $sinopsis= $registros[0]['sinopsis'];
            $genero= $registros[0]['genero'];
            $puntuacion = $registros[0]['puntuacion'];
            $portada= $registros[0]['portada'];
            
            $pelicula = new pelicula($codigo, $nombre, $director, $sinopsis, $genero, $puntuacion, $portada);
            return $pelicula;
        }else{
           return null;   
        }
    }
    
    public function editar($pelicula){
        $this->db->getConeccion();
        $sql="UPDATE PELICULAS SET NOMBRE=?, DIRECTOR=?, SINOPSIS=?, GENERO=?, PUNTUACION=?,PORTADA=? WHERE CODIGO=?";
        $paramType= 'ssssisi';
        $paramValue= array($pelicula->getNombre(),
                           $pelicula->getDirector(),
                           $pelicula->getSinopsis(),
                           $pelicula->getGenero(),
                           $pelicula->getPuntuacion(),
                           $pelicula->getPortada(),
                           $pelicula->getCodigo());
        $this->db->executeQuery($sql, $paramType, $paramValue);
        $this->db->cerrarConeccion();           
    }
    
    public function eliminar($codigo){
        $this->db->getConeccion();
        $sql="DELETE FROM PELICULAS WHERE CODIGO=?";
        $paramType='i';
        $paramValue= array($codigo);
         $this->db->executeQuery($sql, $paramType, $paramValue);
        $this->db->cerrarConeccion();
        
    }
    
    public function votar($puntuacion,$codigo){
        $this->db->getConeccion();
        $sql="UPDATE PELICULAS SET PUNTUACION=? WHERE CODIGO=?";
        $paramType='ii';
        $paramValue=array($puntuacion,$codigo);
                           
        $this->db->executeQuery($sql, $paramType, $paramValue);
        $this->db->cerrarConeccion(); 
    }
}

?>
