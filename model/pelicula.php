<?php

class pelicula {
    private $codigo;
    private $nombre;
    private $director;
    private $sinopsis;
    private $genero;
    private $puntuacion;
    private $portada;
    
    function __construct($codigo, $nombre, $director, $sinopsis, $genero, $puntuacion, $portada) {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->director = $director;
        $this->sinopsis = $sinopsis;
        $this->genero = $genero;
        $this->puntuacion = $puntuacion;
        $this->portada = $portada;
        
            
    }
    function getCodigo() {
        return $this->codigo;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getDirector() {
        return $this->director;
    }

    function getSinopsis() {
        return $this->sinopsis;
    }

    function getGenero() {
        return $this->genero;
    }

    function getPuntuacion() {
        return $this->puntuacion;
    }

    function getPortada() {
        return $this->portada;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setDirector($director) {
        $this->director = $director;
    }

    function setSinopsis($sinopsis) {
        $this->sinopsis = $sinopsis;
    }

    function setGenero($genero) {
        $this->genero = $genero;
    }

    function setPuntuacion($puntuacion) {
        $this->puntuacion = $puntuacion;
    }

    function setPortada($portada) {
        $this->portada = $portada;
    }


}
