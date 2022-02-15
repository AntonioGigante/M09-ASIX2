<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>envio</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <h1>Gestión de compra - envio</h1>
        <form method="post" action="resumen.php" enctype="multipart/form-data">
            <div>
            <p>Nombre:</p>
            <input type="text" name="nombre">
            <p>Dirección:</p>
            <input type="text" name="direccion">
            <p>Telefono:</p>
            <input type="tel" name="telefono">
            </div><br>
            <button type="submit" value="submit">factura</button>
            <button><a href="">reiniciar</a></button>
        </form>
    </body>
</html>