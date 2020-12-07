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
        <h1>Insert</h1>
        <a href="index.php">Productos</a>
        <form action="db/db_insert.php" method="GET">
            <div class="form-group">
                <label for="producto">Nombre</label>
                <input type="text" class="form-control" id="producto" name="producto" aria-describedby="producto" placeholder="Ingresa el producto">
            </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="number" class="form-control" id="precio" name="precio" aria-describedby="precio" placeholder="Ingresa el primer precio">
            </div>
            <div class="form-group">
                <label for="existencias">Existencias</label>
                <input type="existencias" class="form-control" id="existencias" name="existencias" aria-describedby="existencias" placeholder="Ingresa el primer existencias">
            </div>
            <button type="submit" class="btn btn-primary">Insert</button>
        </form>
    </div>
</body>
</html>