<?php
use \Psr\http\Message\ServerRequestInterface as Request;
use \Psr\http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App;

$app->get("/inventario",function(Request $request){
  $nombre = $request->getAttribute('nombre');
  require_once 'vista/inventory/inventory.view.php';
});

$app->get("/inventario/{id}",function(Request $request){
  $id = $request->getAttribute('id');
  require_once 'vista/inventory/inventory.select.view.php';
});


/*
$app->get("/{nombre}",function(Request $request){
  $nombre = $request->getAttribute('nombre');
  require_once 'vista/index.php';
});*/

/*
$app->group('/mierda',function(){

  $this->get('/cagada',function(){
    echo 'la hemos cagado';
  });
});*/


$app->run();
 ?>
