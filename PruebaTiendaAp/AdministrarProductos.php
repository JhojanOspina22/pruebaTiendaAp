<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="esyilos.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<body background="images/fondo.jpg">  
<?php include 'navbar.php';?>
<br>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-10 text-white">
                        <h2>Inspeccion de <b>productos</b></h2>
                    </div>
                    <div class="col-sm-2">
                        <a href="agregarP.php"><button type="button" class="btn btn-danger add-new"><i class="fa fa-plus"></i> Añadir Producto</button></a>
                    </div>
                </div>
                <br>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID producto</th>
                        <th>Nombre producto</th>
                        <th>Marca</th>
                        <th>Talla</th>
                        <th>Cantidad</th>
                        <th>Fecha de embarque</th>
                        <th>Observaciones</th>
                        <th>Estado</th>
                        <th>Imagen</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>             
                        <?php
                        include('Controlador/producto/listar.php');
                        while ($filas = mysqli_fetch_assoc($lista)) {   
                        ?>
                        <tr class=" align-items-center">
                            <td> <?php echo $filas['id_producto']  ?></td>
                            <td> <?php echo $filas['nom_producto']  ?></td>
                            <td> <?php echo $filas['nombre_marca']  ?></td>
                            <td> <?php echo $filas['talla']  ?></td>
                            <td> <?php echo $filas['cantidad']  ?></td>
                            <td> <?php echo $filas['fecha_embarque']  ?></td>
                            <td> <?php echo $filas['observaciones']  ?></td>
                            <td> <?php echo $filas['nombre_estado']  ?></td>
                            <td ><img class="img-fluid productos"  src="data:image/png;base64, <?php echo base64_encode($filas['imagen']) ?>"  alt="" /></td>            
                            <center> <td> <a href="modificarP.php?id_producto=<?php echo $filas['id_producto'] ?>"><i class="fas fa-edit editar" title="Editar"></i></a> <a  href="Controlador/producto/eliminar.php?id_producto=<?php echo $filas['id_producto'] ?>"><i class="fas fa-trash eliminar" title="Eliminar" ></i></a></td> </center>
                            </tr>  
                        <?php
                        }
                        ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>