<!DOCTYPE html>
<html>
    <head>
        <title>vulneravilidades</title>
        <meta charset="utf-8"/>
    </head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <body>
    <?php
    session_start();
    include_once "bdconn2.php";
    $conex=mysqli_connect($sitio, $user, $pwd, $bbdd);

    if($conex){
        if($_REQUEST["accion"] == "L"){
            $query = "SELECT * FROM vulnerabilities";
            if($result = mysqli_query($conex, $query)){
                while($row = mysqli_fetch_assoc($result)){
                ?>
                <table class="table table-bordered table-dark">
                    <tr>
                        <td>idVol</td>
                        <td>code</td>
                        <td>comment</td>
                        <td>severity</td>
                        <td>username</td>
                    </tr>
                    <tr>
                        <td><?=$row['idVul'];?></td>
                        <td><?=$row['code'];?></td>
                        <td><?=$row['comment'];?></td>
                        <td><?=$row['severity'];?></td>
                        <td><?=$row['username'];?></td>
                    </tr>
                </table>
                <?php
                }
            }
        }if($_REQUEST["accion"] == "A"){
            ?>
                <h1>Hola <?php echo $_SESSION['user']; ?>, introduce los datos de la vulneravilidad</h1>
                <form action="">
                    <p>idVul</p>
                    <input type="text" name="id" value="idVul"/>
                    <p>comment</p>
                    <input type="text" name="comment" value="comment"/>
                    <p>severity</p>
                    <input type="number" name="severity" value="severity"/>
                    <input type="submit" name="submit" value="guardar">
                </form>
            <?php
            $id=$_REQUEST['id'];
            $comment=$result['comment'];
            $severity=$_REQUEST['severity'];
            $user=$_SESSION['user'];

            if(isset($_REQUEST['submit'])){
                $sql="INSERT $vulnerabilities(idVul, comment, severity, username) VALUES('$id', '$comment', '$severity', '$user')";
                $result = mysqli_query($conex, $sql);
                if($result){
                    echo "se ha subido la vulnerabilidad";
                }else{
                    echo "no se ha subido la vulnerabilidad";
                }
            }
        }
        echo 'finalizando sesion';
        $_SESSION = array();
        if(isset($_COOKIE[session_name()])){
            setcookie(session_name(), '', time() - 3600, '/');
        }
        session_destroy();
        mysqli_close($conex);
        } 
    ?>
    </body>
</html>