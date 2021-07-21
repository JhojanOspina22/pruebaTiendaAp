<?php
require_once("../../Conexion/conexion.php");
class eliminar{
    public function __construct(){
        $this->db=Conectar::conexion();      
    }   
    public function eliminar($id_marca)
    {
        Mysqli_query($this->db,"UPDATE marca SET id_estado = 1 where id_marca=$id_marca");
    }   
}