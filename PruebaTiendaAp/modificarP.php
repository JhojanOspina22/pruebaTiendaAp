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
                    <form action="Controlador/producto/modificar.php" method="POST" enctype="multipart/form-data">

                        <div class="form-group input">
                            <label for="" style="color: white;"> Nombre producto</label>
                            <input class="form-control" name="Nombre" value="<?php echo $listar_producto['nom_producto'] ?>" type="text" id="pa" required="required">
                        </div>
                        <label for="" style="color: white;">Talla</label>
                        <div class="form-group input-group">
                            <select name="talla" class="form-control" value="" id="">                              
                                    <option <?php if($listar_producto['talla']=='S'){  ?> selected <?php } ?> value="S">S</option>
                                    <option <?php if($listar_producto['talla']=='M'){  ?> selected <?php } ?> value="M">M</option>
                                    <option <?php if($listar_producto['talla']=='L'){  ?> selected <?php } ?> value="L">L</option>                                
                            </select>
                        </div>
                        <label for="" style="color: white;"> Observaciones</label>
                        <div class="form-group input-group">
                            <input class="form-control" name="observaciones" value="<?php echo  $listar_producto['observaciones'] ?>" type="text" id="pa" required="required">
                        </div>
                        <label for="" style="color: white;"> cantidad</label>
                        <div class="form-group input-group">
                            <input name="cantidad" value="<?php echo $listar_producto['cantidad'] ?>" class="form-control" type="number" required="required">
                        </div>
                        <label for="" style="color: white;">Marca</label>
                        <div class="form-group input-group">
                            <select name="marca" class="form-control" value="" id="">
                                <?php
                                while ($filas = mysqli_fetch_assoc($listar_marcas)) {
                                ?>
                                    <option <?php if($listar_producto['id_marca']==$filas['id_marca']){  ?> selected <?php } ?> value="<?php echo $filas['id_marca'] ?>"> <?php echo $filas['nombre_marca'] ?> </option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group input">
                            <label for="" style="color: white;">Fecha de embarque</label>
                            <input class="form-control" name="fecha" value="<?php echo $listar_producto['fecha_embarque']?>" type="text" required id="pa">
                        </div>
                        <div class="form-group input">
                            <label style="color: white">Imagen </label>
                            <br>
                            <img class="img-fluid" style="height: 250px; width: 250px;" src="data:image/png;base64, <?php echo base64_encode($listar_producto['imagen']) ?>" alt="" />
                        </div>
                          <div class="form-group input-group">
                            <input name="Img" class="" type="file" value="" id="Img" accept="image/*" style="color: white">
                        </div>
                        <div class="form-group input-group">
                            <select name="estado" class="form-control" id="">

                                <option value="0"  <?php if( $listar_producto['id_estado']==0 ) {?> selected  <?php } ?>> Activo</option>
                                <option value="1" <?php if( $listar_producto['id_estado']==1 ) {?> selected  <?php } ?>> Inactivo</option>
                            </select>
                        </div>
                        <div class="form-group input">                  
                            <input class="form-control" name="ID" value="<?php echo $listar_producto['id_producto'] ?>" type="text" id="pa" hidden required="required">
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