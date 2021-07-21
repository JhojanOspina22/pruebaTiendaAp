<?php
require_once("../../Modelo/producto/modificarP.php");
$Modificar= new ModiP;
$Nombre=$_POST["Nombre"];
$observaciones=$_POST["observaciones"];
$cantidad=$_POST["cantidad"];
$marca=$_POST["marca"];
$fecha=$_POST["fecha"];
$talla=$_POST["talla"];
$Img= isset($_FILES['Img']['tmp_name'])?$_FILES['Img']['tmp_name']:NULL;
if($Img!=NULL){
    $Img= addslashes(file_get_contents($_FILES['Img']['tmp_name']));
}
$Id=$_POST["ID"];
$estado=$_POST["estado"];
$Modificar->Modificar($Nombre,$talla,$observaciones,$cantidad,$marca,$fecha,$Img,$estado,$Id);   