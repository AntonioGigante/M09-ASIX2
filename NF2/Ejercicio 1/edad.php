<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>eddad</title>
    </head>
<?php
session_start();
if(isset($_POST["submit"])){
    $edad = $_REQUEST["edad"];
    if(isset($_SESSION["session"])){
        $_SESSION["session"]["edad"] = $edad;        
    }
}
?>
    <body>
        <h1>hola <?php echo $_SESSION["session"]["username"] ?> eres <?php echo $_SESSION["session"]["edad"] ?></h1>
        <a href="logout.php">Cerrar sesion</a>
    </body>
</html>