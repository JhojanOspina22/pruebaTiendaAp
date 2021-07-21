<?php
session_start();
require_once("../../Modelo/marca/agregarM.php");
$Agregar = New Lista();
$Nombre=$_POST["Nombre"];
$Agregar->Agregar($Nombre);
?>