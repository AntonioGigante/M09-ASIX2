<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<title>GiganteAntonio-BBDD</title>
<body>
<form name="formulario" method="post" action="" enctype="multipart/form-data">
    Titulo:
    <input type="text" name="titulo"/><br>
    Texto:
    <textarea name="texto"></textarea><br>
    Categoria:
    <select name="categoria">
        <option value="promociones">promociones</option>
    </select><br>
    <input type="hidden" name="max_file_size" value="1024000"/>
    Imagen:
    <input type="file" size="44" name="imagen"/><br>
    <button type="submit" value="Insertar noticia">Insertar noticia</button>    
</form>

<?php

$titulo=$_REQUEST["titulo"];
$texto=$_REQUEST["texto"];
$categoria=$_REQUEST["categoria"];

if(is_uploaded_file($_FILES["imagen"]['tmp_name'])){
    $directory="./img/";
    $id=time();
    $filename= $id . "-" . $_FILES["imagen"]["name"];
    move_uploaded_file($_FILES["imagen"]["tmp_name"], $directory . $filename);
    $noticia="$titulo, $texto, $categoria, $filename";
}else{
    echo "no se ha subido la imagen";
    $noticia="$titulo, $texto, $categoria";
}
//conexión bbdd
include_once 'conexion.php';

$conex=mysqli_connect($sitio, $user, $pwd, $bbdd);

if($conex){
    $consulta = "INSERT $tabla(titulo, texto, categoria, imagen) VALUES('$titulo', '$texto', '$categoria', '$filename')";
    $result = mysqli_query($conex, $consulta);
    if($result){
        echo "lanoticia se ha subido correctamente al servidor";
    }else{
        echo "la noticia no se ha subido al servidor";
    }
    mysqli_close($conex);
}else{
    echo "no se a podido connectar al servidor";
}


?>

</body>
</html>