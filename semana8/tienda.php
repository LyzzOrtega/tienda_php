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

      <div class="p-3 mb-2 bg-info text-white"> <h2>¡¡Bienvenido a mi tienda!!</h2></div>
      <div class="p-3 mb-2 bg-light text-center">
      <h1>LITTLE THINGS</h1>
      <br> </br>

      <form action="ticket.php" method="GET">

      <label>Cantidad: </label>
          <input type="number" min="0" max="10" id="cantidad" name="cantidad" class="form-control"> <br> 

      <label>Productos: </label> 
      <select id="productos" class="form-control form-control-lg" name="productos">
        <option value="selecione" name="selecione">Seleccione el producto</option>
        <option value="2080" id="anilloF" name="anilloF">Anillo Flores de magnolia, esmalte rojo cereza pálido y cz rosada  $2,080</option>
        <option value="1595" id="anilloA" name="anilloA">Anillo con abalorio Azul Mar  $1,595</option>
        <option value="3195" id="anilloH" name="anilloH">Anillo con halo brillante en forma de gota  $3,195</option>
        <option value="4800" id="aretesC" name="aretesC">Aretes Colgantes Adornados Con Borla Y Corazones  $4,800</option>
        <option value="800" id="areteB" name="areteB">Arete de botón Mi bella flor  $800</option>
        <optionvalue="3995" id="brazalete" name="brazalete">Brazalete con detalle entrelazado de zirconitas  $3,995</option>
        <option value="3675" id="collar" name="collar">Collar en Y Formas geométricas  $3,675</option>
        <option value="2400" id="dije" name="dije">Dije Mariposa de pavé  $2,400</option>
      </select>
      <br> 

      <input type="button" name="insertar" value="insertar" onclick="insertaD(this)" class="btn btn-info"> <br> </br>

      <div class="form-group">
      <label>Carrito de compras: </label>
      <textarea class="form-control" name="carritodecompras" id="carritocompras" readonly rows=""></textarea>
      </div>
    
      <div class="form-group">
      <label>Total a pagar: </label>
        <input type="number" name="totalPagar" id="totalPagar" readonly="" class="form-control">
      </div>

      <button type="button" id="nuevaCompra" value="nuevaCompra"class="btn btn-info" onclick="location.reload()">Nueva compra</button> 
      <br> </br>

      <label>Pago: </label>
      <input type="number" id="pago" name="pago" class="form-control"> <br>
      
        <form id="formulario" class="formulario">
        <button type="submit" onClik="suma()" value="pago"class="btn btn-info">Pagar</button> 
      </form> 
      <br>

      </div>  
    <br> </br>
    <script languaje="javascrip" type="text/javascript" src="carrito.js">
    </script> 
  </body>  
</html>

   <script type="text/javascript">
     var totali=0; function insertaD(form) {
		 var product= document.getElementById('productos');

		 var product01= product.options[product.selectedIndex].text;

	   var product02= product.options[product.selectedIndex].value;

		 var piezas=document.getElementById('cantidad').value;

		 var numpro=parseFloat(piezas);

		 var valor=parseFloat(product02);

		 var multiplicacion=numpro*valor;

		 total=totali+multiplicacion; 

		 document.getElementById('carritocompras').value += "Cantidad: "+piezas+"\nProducto: "+product01+"\nTotal: "+ "$"+multiplicacion + "\n";

		 document.getElementById('totalPagar').value=total;
	   }
   </script>