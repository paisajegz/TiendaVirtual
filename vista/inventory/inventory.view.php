<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Surtimotos del sur</title>
    <link rel="stylesheet" href="vendor/css/bootstrap.css">
    <link rel="stylesheet" href="css/palette.css">
    <link rel="stylesheet" href="./vendor/css/fontello.css">
  </head>
  <body>
  <?php
require_once 'vista/utilidades/inventary.nav.view.php';
   ?>

<div class="container">

  <br>

  <form>
    <div class="row">
      <div class="input-group col-md-2">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"> <i class="icon-search"></i> </span>
          </div>
        <input type="text" class="form-control" placeholder="Codigo" aria-label="Username" aria-describedby="basic-addon1">
      </div>
      <div class="input-group col-md-4">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"> <i class="icon-search"></i> </span>
          </div>
        <input type="text" class="form-control" placeholder="Nombre" aria-label="Username" aria-describedby="basic-addon1">
      </div>
      <div class="input-group col-md-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"> <i class="icon-search"></i> </span>
          </div>
        <input type="text" class="form-control" placeholder="Marca Moto" aria-label="Username" aria-describedby="basic-addon1">
      </div>
      <div class="input-group col-md-2">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"> <i class="icon-search"></i> </span>
          </div>
        <input type="text" class="form-control" placeholder="Moto" aria-label="Username" aria-describedby="basic-addon1">
      </div>
    </div>
  </form>
  <br>
</div>

<table class="table table-hover ">
  <thead>
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Nombre</th>
      <th scope="col">Cantidad</th>
      <th scope="col">C\u</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td> <h6>Llantas Michelin </h6> </td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

<?php
require_once 'vista/utilidades/footer.php';
 ?>

<!--Fin de Footer-->
<script type="text/javascript" src="vendor/js/jquery-3.3.1.js" ></script>
<script type="text/javascript" src="vendor/js/popper.js"></script>
<script type="text/javascript" src="vendor/js/angular.js"></script>
<script type="text/javascript" src="vendor/js/bootstrap.js"></script>
  </body>
</html>
