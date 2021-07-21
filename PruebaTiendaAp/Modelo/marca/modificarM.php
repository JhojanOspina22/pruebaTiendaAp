<?php
include("../../Conexion/conexion.php");
class ModiP{
    public function __construct(){
        $this->db=Conectar::conexion();
        
    }
    public function Modificar($Nombre,$estado,$id)
    {   
            Mysqli_query($this->db,"UPDATE marca SET nombre_marca='$Nombre', id_estado = $estado where id_marca=$id");
header('location:../../AdministrarMarcas.php');
    }   
}