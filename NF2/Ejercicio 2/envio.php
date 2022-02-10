<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>envio</title>
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