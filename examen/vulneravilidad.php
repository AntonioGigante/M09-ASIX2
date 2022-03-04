<!DOCTYPE html>
<html>
    <head>
        <title>vulneravilidades</title>
        <meta charset="utf-8"/>
    </head>
    <body>
    <?php
        session_start();
        $user=$_REQUEST['user'];
        $_SESSION['user']=$user;
    ?>
        <a href="accion.php?&accion=A">Añadir vilneravilidades</a>
        <a href="accion.php?&accion=L">Listar vulneravilidades</a>
    </body>
</html>