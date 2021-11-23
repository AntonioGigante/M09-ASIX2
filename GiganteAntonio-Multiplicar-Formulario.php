<!DOCTYPE html>
<html>
<body>

<form action="numero" method="post">
    Num:<input type="number" name="num">

    <input type="submit">
</form>

<?php
$i=1;
$x=$_GET["num"];
$result=0;
while($i<=10){
    
    $result=$x * $i;
    echo "$result\n"; 
    $i++;
    
}
?>

</body>
</html>