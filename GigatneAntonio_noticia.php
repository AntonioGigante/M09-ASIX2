<!DOCTYPE html>
<html>
<body>
<form name="formulario" method="post" action="">
    Titulo:
    <input type="text" name="titulo"/><br>
    Texto:
    <textarea name="texto"></textarea><br>
    Categoria:
    <select name="categoria">
        <option value="promociones">promociones</option>
    </select><br>
    <button type="submit" value="Insertar noticia">Insertar noticia</button>    
</form>

<?php
$titulo=$_REQUEST["titulo"];
$texto=$_REQUEST["texto"];
$categoria=$_REQUEST["categoria"];

$noticia="$titulo, $texto, $categoria". PHP_EOL;

$ficheronoticia=fopen('noticia.txt', 'w');

fwrite($ficheronoticia, $noticia);
echo fgetc($ficheronoticia);
?>

</body>
</html>