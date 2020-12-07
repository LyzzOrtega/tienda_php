<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Little Things</title>
</head>

<body>
    <div class="container-fluid">
        <h1>Delete</h1>
        <a href="index.php">Productos</a>

        <form action='db/db_delete.php' method='GET'>
        <?php

    $id_producto = $_GET["id_producto"];

    $db = new SQLite3("../tienda.db");

    $resultado = $db->query("SELECT * from productos where id_producto='$id_producto';");

    while ($row = $resultado->fetchArray()) {
        $id_producto = $row["id_producto"];
        $producto = $row["producto"];
        $precio = $row["precio"];
        $existencias = $row["existencias"];
    }

    $form = "
        <div class='form-group'>
            <label for='id_producto'>ID</label>
            <input type='text' readonly class='form-control' id='id_producto' name='id_producto' aria-describedby='Id producto' value='$id_producto'>
        </div>
        <div class='form-group'>
            <label for='producto'>producto</label>
            <input type='text' readonly class='form-control' id='producto' name='producto' aria-describedby='producto' value='$producto'>
        </div>
        <div class='form-group'>
            <label for='precio'>Precio</label>
            <input type='text' readonly  class='form-control' id='precio' name='precio' aria-describedby='precio' value='$precio'>
        </div>
        <div class='form-group'>
            <label for='existencias'>Existencias</label>
            <input type='text' readonly class='form-control' id='existencias' name='existencias' aria-describedby='existencias' value='$existencias'>
        </div>
        ";

    print($form);
?>
            
            <button type='submit' class='btn btn-primary'>Delete</button>
        </form>

    </div>
</body>

</html>