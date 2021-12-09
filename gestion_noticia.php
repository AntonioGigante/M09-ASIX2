<!DOCTYPE html>
<html>
<head>
    <title>gestion_noticia</title>
</head>
<body>
<?php
include_once "conexion.php";
$conex=mysqli_connect($sitio, $user, $pwd, $bbdd);

if($conex){
    if($_REQUEST["accion"] = "B"){
        $query = "DELETE FROM notcias WHERE id =".$_REQUEST["id"];
        if($reult = mysqli_query($conex, $query)){
            ?><p><?php echo "La noticia se ha eliminado";?></p><?php
        }else{
            ?><p><?php echo "No se ha podido eliminar la noticia";?></p><?php
        }
    }
}
?>
</body>
</html>