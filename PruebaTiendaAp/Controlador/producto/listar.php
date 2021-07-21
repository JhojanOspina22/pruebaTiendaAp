<?php
require_once("Modelo/producto/listar.php");
$id_producto= isset($_GET['id_producto']) ? $_GET['id_producto'] : NULL;
$id_marca= isset($_GET['id_marca']) ? $_GET['id_marca'] : NULL;
$listar = new producto();
$lista = $listar->Listar();
if ($id_producto != NULL) {
    $listar_producto = $listar->listar_producto($id_producto);
}
if ($id_marca != NULL) {
    $listar_marca = $listar->listar_marca($id_marca);
}
$listar_marcas = $listar->listar_marcas();