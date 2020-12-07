<!DOCTYPE html>
<html lang="es-mx">
  <head>
    <title>TIENDA</title>
    
      <title>TIENDA</title> 
        <link rel="stylesheet" href="tienda.css">
      <script src="carrito.js" language="javascript" type="text/javascript">
      </script> 

      <meta charset="utf-8">
      <meta name="viewport" content="width=device.width. initial.scale=1. shrink-to fit-no">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  </head> 
  <body>
  <div class="p-3 mb-2 bg-info h2 text-dark text-center">
<br>
<br>
<br>
<?php
    print("<h1>LITTLE THINGS</h1>");
    $time= time();
    echo date("d-m-Y (H:i:s)", $time);
?>
<br> 
<br>
<br>
<?php
    $carritodecompras= $_GET["carritodecompras"];
    print($carritodecompras);   
?>
<br> 
<br>
<br>
<?php
    $cantidad= $_GET["cantidad"];
    $productos= $_GET["productos"];
    $resultado= $cantidad * $productos;
    $pago= $_GET["pago"];
    $cambio= $pago - $resultado;
    print("Pago con:".$pago);
?>
<br>
<br>
<br>
<?php
    print("Su cambio es:".$cambio);   
?>
<br>
<br>
<br>
  </div>