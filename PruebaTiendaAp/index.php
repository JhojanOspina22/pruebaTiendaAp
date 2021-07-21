<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Inicio</title>
</head>
<body id="page-top">
  <!-- Navigation-->
  <?php include 'navbar.php' ?>
  <!-- Masthead-->
  </section>
  <?php
  include('Conexion/conexion.php');
  include('Modelo/producto/listar.php');
  $cone = new Conectar();
  $conexion = $cone->conexion();
  ?>
  <section id="galeria" >
    <br>
    <br>
    <div class="container conta">
      <center>
        <h1> Productos </h1>
        <div class="row" align="center">
          <?php
          $producto= new producto();
          $resultado =$producto->listar()
          ?>
          <?php
          while ($productos = $resultado->fetch_assoc()) {
          ?>
            <div class="card-flip h-100 col-6 col-sm-6  col-lg-3 col-md-4">
              <div class=" card tarjet card-front h-100">
                <img  alt="" class="card-img-top" id="imagenzoom" src="data:image/jpg;base64,<?php echo base64_encode($productos['imagen']) ?>" >
                <div class="card-body">
                  <h5 class="card-title titulo" ><?php echo $productos['nom_producto'] ?></h5>
                  <h5 class="card-title titulo">Talla(<?php echo ($productos['talla']) ?>)</h5>

                  <hr>
                  <h4 class="card-title titulo" ><?php echo ($productos['cantidad']) ?> uds</h4>
                </div>     
              </div>
              <div class="card-back h-100">
                <div class="card-body">
                  <div class="col top">
                  <h5 class="card-title titulo">Nombre <?php echo ($productos['nom_producto']) ?> </h5>
                  <h5 class="card-title titulo">Marca: <?php echo ($productos['nombre_marca']) ?> </h5>
                  <h5 class="card-title titulo">Cantidad: <?php echo ($productos['cantidad']) ?> uds</h5>
                  <h5 class="card-title titulo">Talla:(<?php echo ($productos['talla']) ?>)</h5>
                  <h5 class="card-title titulo">Fecha de embarque:<?php echo ($productos['fecha_embarque']) ?></h5>
                  <h5 class="card-title titulo" >Observaciones: <?php echo ($productos['observaciones']) ?> </h5>
                  </div>
                  <div class="col bot">
                  <div><a href=""><button class="btn btn-warning"   value="Agregar" title="Solicitar" type="button">Solicitar</button></a></div>
                  </div>
                </div>
              </div>
            </div>
          <?php
          }
          ?>
        </div>
      </center>
    </div>
  </section>
  <?php
  include('footer.php');
  ?>
</body>
</html>