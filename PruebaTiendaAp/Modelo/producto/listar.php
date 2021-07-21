<?php
require_once("Conexion/conexion.php");
class producto{
    public function __construct(){
        $this->db=Conectar::conexion();       
    }
    public function Listar(){
        $query1=Mysqli_query($this->db,"SELECT * FROM producto join estado on estado.id_estado=producto.id_estado join marca on marca.id_marca= producto.id_marca where producto.id_estado=0 order by producto.nom_producto");
        return($query1);
    }
    public function listar_producto($id_producto){
        $query1=Mysqli_query($this->db,"SELECT * FROM producto join estado on estado.id_estado=producto.id_estado join marca on marca.id_marca=producto.id_marca where id_producto= $id_producto");
        $filas = mysqli_fetch_assoc($query1);   
        return($filas);
    }
    public function listar_marca($id_marca){
        $query1=Mysqli_query($this->db,"SELECT * FROM marca join estado on estado.id_estado=marca.id_estado  where id_marca= $id_marca");
        $filas = mysqli_fetch_assoc($query1);
        return($filas);
    }
    public function listar_marcas(){
        $query1=Mysqli_query($this->db,"SELECT * FROM marca join estado on estado.id_estado=marca.id_estado where marca.id_estado= 0");
        
        return($query1);
    }
}
