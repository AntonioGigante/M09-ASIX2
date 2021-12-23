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
    if($_REQUEST["accion"] == "B"){
        $query = "DELETE FROM noticias WHERE id =".$_REQUEST["id"];
        if($reult = mysqli_query($conex, $query)){
            ?><p><?php echo "La noticia se ha eliminado";?></p><?php
            ?><a href="GiganteAntonio-lista-noticias.php">Volver</a><?php
        }else{
            ?><p><?php echo "No se ha podido eliminar la noticia";?></p><?php
            ?><a href="GiganteAntonio-lista-noticias.php">Volver</a><?php
        }
    }if($_REQUEST["accion"] == "M"){
        $query = "SELECT titulo, texto, categoria FROM noticias WHERE id =".$_REQUEST["id"];
        if($result = mysqli_query($conex, $query)){
            while($row = mysqli_fetch_assoc($result)){
                ?>
                    <input type="text" name="titulo" value="<?=$row['titulo']?>"/></br></br>
                    <textarea name="texto"><?=$row['texto'];?></textarea></br></br>
                    <select name="categoria">
                        <option value="<?=$row['categoria']?>"><?=$row['categoria'];?></option>
                    </select><br><br>
                    <button type="submit" name="submit">Modificar noticia</button>
                <?php

                $titulo=$_REQUEST["titulo"];
                $texto=$_REQUEST["texto"];
                $categoria=$_REQUEST["categoria"];

                $query = "UPDATE noticias SET titulo='$titulo', texto='$texto', categoria='$categoria' WHERE id =".$_REQUEST["id"];

                if (mysqli_query($conex, $query)) {
                    echo "La noticia se a actualizado";
                  } else {
                    echo "Error al actualizar la noticia: " . mysqli_error($conex);
                  }
            }
        }
    }
}
?>
</body>
</html>