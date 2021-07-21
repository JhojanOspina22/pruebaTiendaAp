<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500%7COpen+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Nuevo Producto</title>
</head>
<body class="iniciar" background="images/fondo.jpg">
    <div class="containerfluid">}
    <br>
      <?php include('navbar.php')?>
        <br>
        <center>
            <div class="card administracion text-white">
                <article class="card-body mx-auto">
                    <h4 class="card-title mt-3 text-center">Nuevo producto</h4>
                <hr>                    
                    <form action="Controlador/producto/agregar.php" method="POST" enctype="multipart/form-data">
                    <label for="">Nombre del producto</label>
                        <div class="form-group input">
                           <input class="form-control" placeholder="Nombre *" name="Nombre" type="text" id="pa" required="required">
                        </div>
                        <label for="">Talla</label>
                        <div class="form-group input-group">
                            <select name="talla" class="form-control" value="" id="">
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                            </select>
                        </div>
                        <label for="">Observaciones</label>
                       <div class="form-group input-group">   
                        <textarea name="observaciones" cols="30" class="form-control" placeholder="Descripcion*" type="text-area"  required="required"></textarea> 
                        </div>
                        <label for="">Cantidad</label>
                        <div class="form-group input-group">
                            <input name="cantidad" class="form-control" placeholder="Inventario *" type="number" required="required">
                        </div>
                        <label for="">Marca</label>
                        <div class="form-group input-group">
                            <select name="marca" class="form-control" value="" id="">
                                <?php
                                include('Controlador/producto/listar.php');
                                while ($filas = mysqli_fetch_assoc($listar_marcas)) {

                                ?>
                                    <option value="<?php echo $filas['id_marca'] ?>"> <?php echo $filas['nombre_marca'] ?> </option>
                                <?php
                                }
                                ?>
                            </select>
                        </div> 
                        <div class="form-group input-group">
                           <input name="Img" style="color: white;"  type="file" id="Img" accept="image/*" required="required">
                        </div>
                        <div class="form-group">
                            <button  type="submit" class="btn btn-primary btn-block"> Registrar </button>
                        </div>
                    </form>
                </article>
            </div>
        </center>

    </div>
</body> 
</html>