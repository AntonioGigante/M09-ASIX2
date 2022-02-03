<!DOCTYPE html>
<html>
<head>
    <title>saludos</title>
</head>
<?php
session_start();
if(isset($_SESSION['username'])){
    $name=$_SESSION['username'];
}
?>
<body>
    <h1>Hola<?php echo $name ?></h1>
    <form method="post" action="edad.php" enctype="multipart/form-data">
        <select name="edad">
            <option value="menor">menor</option>
            <option value="mayor">major</option>
            <option value="jubilado">jubilat</option>
        </select>
    </form>
</body>
</html>
