<!DOCTYPE html>
<html>
    <head>
        <title>login</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Introduce los datos para acceder</h1>
        <form action="vulneravilidad.php" method="post">
            <p>Usuario</p>
            <input type="text" name="user" value="usuario"/>
            <p>Contraseña</p>
            <input type="password" name="pass"/>
            <input type="submit" name="submit" value="login"/>
        </form>
    </body>
<?php
include "bdconn.php";
$user=$_REQUEST['user'];
$pass=$_REQUEST['pass'];

$conn = mysqli_connect($sitio, $user, $pwd, $bbdd);

if($conn){
    $query= 'SELECT * FROM users';
    if($result=mysqli_query($conn,$query)){
        //ir a vulneravilidad
    }
}

?>
</html>