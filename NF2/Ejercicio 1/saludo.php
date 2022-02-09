<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>saludos</title>
</head>
<?php
session_start();
if(isset($_POST['submit'])){
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    //if(isset($_SESSION['username'])){
        $_SESSION["session"]=array();
        $_SESSION["session"]["username"] = $username;
        $_SESSION["session"]["password"] = $password;
    //}
}
?>
<body>
    <h1>Hola <?php echo $_SESSION["session"]["username"]  ?></h1>
    <form method="post" action="edad.php" enctype="multipart/form-data">
        <select name="edad">
            <option value="menor">menor</option>
            <option value="mayor">major</option>
            <option value="jubilado">jubilat</option>
        </select><br>
        <button type="submit" name="submit">Cerrar session</button>
    </form>
</body>
</html>
