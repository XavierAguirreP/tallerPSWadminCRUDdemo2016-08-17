<?php
class demo {  
   private $id;  
   private $nombre;
   private $foto;
  
   function __construct() {  
    

   }  
   
   function __clone() {  
     $this->id = ++$this->id;   
   }
  
   public function getid_demo() {  
     return $this->id;  
   }
  
   public function setid_demo($id) {  
     $this->id = $id;  
   }
  
   public function getNombre() {  
     return $this->nombre;  
   }
  
   public function setNombre($nombre) {  
     $this->nombre = $nombre;  
   }  

   public function getFoto() {  
     return $this->foto;  
   }
  
   public function setFoto($foto) {  
     $this->foto = $foto;  
   }  

 }
 ?>
