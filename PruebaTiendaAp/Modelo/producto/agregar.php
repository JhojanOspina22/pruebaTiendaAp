<?php
require_once("../../Conexion/conexion.php");
class Lista{
    public function __construct(){
        $this->db=Conectar::conexion();      
    }  
    public function Agregar($Nombre,$talla,$observaciones,$cantidad,$marca,$Img,$fecha)
    {
        Mysqli_query($this->db,"INSERT INTO producto (nom_producto,talla,observaciones,cantidad,id_marca,imagen,fecha_embarque,id_estado)VALUES('$Nombre','$talla','$observaciones',$cantidad,$marca,'$Img','$fecha',0)");
        header('location:../../AdministrarProductos.php');
    }   
}