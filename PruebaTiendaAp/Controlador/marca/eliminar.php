<?php
require_once("../../Modelo/marca/eliminar.php");
$eliminar = New eliminar();
$id_marca=$_GET["id_marca"];
$eliminar->Eliminar($id_marca);
header('location:../../AdministrarMarcas.php?id_marca');
?>