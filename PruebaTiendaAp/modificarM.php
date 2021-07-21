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
    <div class="containerfluid">
        <br>
        <center>
            <div class="card" style="background-color: rgba(15, 14, 14, 0.521); width: 700px">
                <article class="card-body mx-auto" style="width:  500px;">
                    <h4 class="card-title mt-3 text-center" style="color: white;">Editar producto</h4>
                    <hr>
                    <?php include('Controlador/producto/listar.php');
                    ?>
                    <form action="Controlador/marca/modificar.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group input">
                            <label for="" style="color: white;"> Nombre marca</label>
                            <input class="form-control" name="Nombre" value="<?php echo $listar_marca['nombre_marca'] ?>" type="text" id="pa" required="required">
                        </div>
                        <div class="form-group input-group">
                            <select name="estado" class="form-control" id="">
                                <option value="0"  <?php if( $listar_marca['id_estado']==0 ) {?> selected  <?php } ?>> Activo</option>
                                <option value="1" <?php if( $listar_marca['id_estado']==1 ) {?> selected  <?php } ?>> Inactivo</option>
                            </select>
                        </div>
                    <div class="form-group input"> 
                            <input class="form-control" name="ID" value="<?php echo $listar_marca['id_marca'] ?>" type="text" id="pa" hidden required="required">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block"> Registrar </button>
                        </div>
                    </form>
                </article>
            </div>
        </center>
    </div>
</body>
</html>