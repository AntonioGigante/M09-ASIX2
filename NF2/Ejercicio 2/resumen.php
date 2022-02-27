<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>envio</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <?php
        session_start();
            $nombre = $_REQUEST['nombre'];
            $direccion = $_REQUEST['direccion'];
            $tel = $_REQUEST['telefono'];

            $_SESSION['envio']=array();
            $_SESSION['envio']['nombre'] = $nombre;
            $_SESSION['envio']['direccion'] = $direccion;
            $_SESSION['envio']['telefono'] = $tel;
    ?>
    <body>
        <h1>Gestión de compra - resumen</h1>
        <table class="table table-bordered table-dark">
            <thead>
            <tr>
                <td colspan="3">Detalles de Pedido</td>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td rowspan="2">HW</td>
                    <td><?php echo $_SESSION['session']['cpu'];?></td>
                    <td>precio</td>
                </tr>
                <tr>
                    <td><?php echo $_SESSION['session']['ram'];?></td>
                    <td>precio</td>
                </tr>
                <tr>
                    <td>SW</td>
                    <td><?php echo $_SESSION['session']['so'];?></td>
                    <td>precio</td>
                </tr>
                <tr>
                    <td colspan="2">Total</td>
                    <td>€</td>
                </tr>
                <thead>
                    <tr>
                        <td colspan="3">Datos de envio</td>
                    </tr>
                    <tr>
                        <td>Nombre:</td>
                        <td colspan="2"><?php echo $_SESSION['envio']['nombre'];?></td>
                    </tr>
                    <tr>
                        <td>Direccion:</td>
                        <td colspan="2"><?php echo $_SESSION['envio']['direccion'];?></td>
                    </tr>
                    <tr>
                        <td>Telefono:</td>
                        <td colspan="2"><?php echo $_SESSION['envio']['telefono'];?></td>
                    </tr>
                </thead>
            </tbody> 
        </table>
    </body>
</html>