<?php
include("../../Conexion/conexion.php");
class ModiP{
    public function __construct(){
        $this->db=Conectar::conexion();     
    } 
    public function Modificar($Nombre,$talla,$observaciones,$cantidad,$marca,$fecha,$Img,$estado,$id)
    {        
        if($Img==''){
            Mysqli_query($this->db,"UPDATE producto SET nom_producto='$Nombre', talla='$talla',observaciones='$observaciones',cantidad=$cantidad, id_marca =$marca ,fecha_embarque='$fecha', id_estado = $estado where id_producto=$id");
        }
        else{
            Mysqli_query($this->db,"UPDATE producto SET nom_producto='$Nombre', talla='$talla',observaciones='$observaciones',cantidad=$cantidad, id_marca =$marca ,fecha_embarque='$fecha',imagen='$Img', id_estado = $estado where id_producto=$id");
        }
header('location:../../AdministrarProductos.php');
    }   
}