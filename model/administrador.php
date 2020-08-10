<?php

class administrador {
   
   private $cedula;
   private $nombre;
   private $telefono;
   private $correo;
   private $contraseña;
   
   function __construct($cedula, $nombre, $telefono, $correo, $contraseña) {
       $this->cedula = $cedula;
       $this->nombre = $nombre;
       $this->telefono = $telefono;
       $this->correo = $correo;
       $this->contraseña = $contraseña;
   }

   function getCedula() {
       return $this->cedula;
   }

   function getNombre() {
       return $this->nombre;
   }

   function getTelefono() {
       return $this->telefono;
   }

   function getCorreo() {
       return $this->correo;
   }

   function getContraseña() {
       return $this->contraseña;
   }

   function setCedula($cedula) {
       $this->cedula = $cedula;
   }

   function setNombre($nombre) {
       $this->nombre = $nombre;
   }

   function setTelefono($telefono) {
       $this->telefono = $telefono;
   }

   function setCorreo($correo) {
       $this->correo = $correo;
   }

   function setContraseña($contraseña) {
       $this->contraseña = $contraseña;
   }


   
   
}
