<!DOCTYPE html>
<html>
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
    <input type="hidden" name="max_file_size" value="102400"/>
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
    $noticia="$titulo, $texto, $categoria, $filename". PHP_EOL;
}else{
    echo "no se ha subido la imagen";
}

$noticia="$titulo, $texto, $categoria". PHP_EOL;


$ficheronoticia=fopen('noticia.txt', 'a');

fwrite($ficheronoticia, $noticia);
echo fgetc($ficheronoticia);
?>

</body>
</html>