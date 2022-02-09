<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>logout</title>
</head>
<?php
session_start();
?>
<body>
    <p>Adiós: <?php echo $_SESSION["session"]["username"] ?></p>
    <p>password: <?php echo $_SESSION["session"]["password"] ?></p>
    <p>edad: <?php echo $_SESSION["session"]["edad"] ?></p>
</body>
<?php
echo 'finalizando sesion';
$_SESSION = array();
if(isset($_COOKIE[session_name()])){
    setcookie(session_name(), '', time() - 3600, '/');
}
session_destroy();
?>
</html>
