<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<title>GiganteAntonio-noticias</title>
<body>

<?php
include_once "conexion.php";
$conex=mysqli_connect($sitio, $user, $pwd, $bbdd);

if($conex){
    $query="SELECT titulo, categoria, texto, imagen FROM noticias WHERE id='$_REQUEST[id]'";
    if($result=mysqli_query($conex, $query)){
        while($row = mysqli_fetch_assoc($result)){
            ?>
                <div>
                    <h1><?=$row['titulo'];?></h1><br>
                    <p><?=$row['texto'];?></p><br>
                    <p><?=$row['categoria'];?></p>
                    <img src="./img/<?=$row['imagen'];?>" width="300" height="400"> 
                </div> 
            <?php
        }
    }
    mysqli_close($conex);
}else{
    echo "no se spudo connectar con el servidor";
}
?>

<h1></h1>
</body>
</html>