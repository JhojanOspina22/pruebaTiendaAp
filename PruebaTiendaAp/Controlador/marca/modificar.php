<?php
require_once("../../Modelo/marca/modificarM.php");
$Modificar= new ModiP;
$Nombre=$_POST["Nombre"];
$Id=$_POST["ID"];
$estado=$_POST["estado"];
$Modificar->Modificar($Nombre,$estado,$Id);   