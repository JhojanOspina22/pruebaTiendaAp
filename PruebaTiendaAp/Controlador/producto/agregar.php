<?php
require_once("../../Modelo/producto/agregar.php");
$Agregar = New Lista();
$Nombre=$_POST["Nombre"];
$talla=$_POST["talla"];
$observaciones=$_POST["observaciones"];
$cantidad=$_POST["cantidad"];
$marca=$_POST["marca"];
$fecha= date('d/m/Y');
$Img= isset($_FILES['Img']['tmp_name'])?$_FILES['Img']['tmp_name']:NULL;
if($Img!=NULL){
    $Img= addslashes(file_get_contents($_FILES['Img']['tmp_name']));
}

$Agregar->Agregar($Nombre,$talla,$observaciones,$cantidad,$marca,$Img,$fecha);
?>