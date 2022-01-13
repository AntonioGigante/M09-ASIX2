<!DOCTYPE html>
<html>
<head>
    <title>gestion_noticia</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<body>
<?php
include_once "conexion.php";
$conex=mysqli_connect($sitio, $user, $pwd, $bbdd);

if($conex){
    if($_REQUEST["accion"] == "B"){
        $query = "DELETE FROM noticias WHERE id =".$_REQUEST["id"];
        if($result = mysqli_query($conex, $query)){
            ?><p><?php echo "La noticia se ha eliminado";?></p><?php
            ?><a href="GiganteAntonio-lista-noticias.php">Volver</a><?php
        }else{
            ?><p><?php echo "No se ha podido eliminar la noticia";?></p><?php
            ?><a href="GiganteAntonio-lista-noticias.php">Volver</a><?php
        }
    }if($_REQUEST["accion"] == "M"){
        $query = "SELECT titulo, texto, categoria FROM noticias WHERE id =".$_REQUEST["id"];
        if($res = mysqli_query($conex, $query)){
            while($row = mysqli_fetch_assoc($res)){
                ?>
                    <form method="post" action="GiganteAntonio-lista-noticias.php" enctype="multipart/form-data">
                    <form>
                        <p>Titulo</p>
                        <input type="text" name="titulo" value="<?=$row['titulo']?>"/></br></br>
                        <p>Noticia</p>
                        <textarea name="texto"><?=$row['texto'];?></textarea></br></br>
                        <p>Categoria</p>
                        <select name="categoria">
                            <option value="<?=$row['categoria']?>"><?=$row['categoria'];?></option>
                        </select><br><br>
                        <button type="submit" name="submit">Modificar Notica</button>
                    </form>
                <?php 
            }
                $newtitle=$_REQUEST['titulo'];
                $newtext=$_REQUEST['texto'];
                $newcategoria=$_REQUEST["categoria"];

                $sql = "UPDATE noticia SET titulo='$newtitle', texto='$newtext', categoria='$newcategoria' WHERE id =".$_REQUEST["id"];

                if($result = mysqli_query($conex, $sql)){
                    echo "La noticia se ha actualizado correctamente";
                    ?><a href="GiganteAntonio-lista-noticias.php">Volver</a><?php
                }else{
                    echo "La noticia no se ha podido actualizar";
                    ?><a href="GiganteAntonio-lista-noticias.php">Volver</a><?php
                }
            
        }
    }
}else{
    echo "No se ha establecido connexión con la base de datos";
}
?>
</body>
</html>