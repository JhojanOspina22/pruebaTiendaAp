<?php
require_once("../../Conexion/conexion.php");
class Lista{
    public function __construct(){
        $this->db=Conectar::conexion();     
    } 
    public function Agregar($Nombre)
    {       
        Mysqli_query($this->db,"INSERT INTO marca(nombre_marca,id_estado)VALUES('$Nombre',0)");
        header('location:../../AdministrarMarcas.php');
    }   
}