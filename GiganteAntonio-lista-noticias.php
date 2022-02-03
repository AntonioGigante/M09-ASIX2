<html>
<head>
    <title>GiganteAntonio_lista-noticias</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<body>
<table>
    <tr>
        <td>titulo</td>
        <td>texto</td>
        <td>categoria</td>
        <td>imagen</td>
        <td>ver</td>
        <td>del</td>
    </tr>
<?php
include_once 'conexion.php';
$conex=mysqli_connect($sitio, $user, $pwd, $bbdd);

if($conex){
    $query = "SELECT id, titulo, texto, categoria, imagen FROM noticias";
    if($result = mysqli_query($conex, $query)){
        while($row = mysqli_fetch_assoc($result)){
            ?>
                <tr>
                    <td><a href="noticias.php?id=<?=$row['id'];?>"><?=$row['titulo'];?></a></td>
                    <td><?=$row['texto'];?></td>
                    <td><?=$row['categoria'];?></td>
                    <td><?=$row['imagen'];?></td>
                    <td><a href="modificar_imagen.php?id=<?=$row['id'];?>&accion=M">Modificar</a></td>
                    <td><a href="modificar_imagen.php?id=<?=$row['id'];?>&accion=B">Borrar</a></td>
                </tr>
            <?php
        }
        mysqli_close($conex);
    }else{
        echo "Error en la consulta";
    }
}
?>
</table>
</body>
</html>