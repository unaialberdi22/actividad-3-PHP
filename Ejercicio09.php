/Ejercicio 09: El servidor recibirá un número. El programa tendrá que decirnos si es primo o no.<br><br>

<!DOCTYPE html>
<html>
<body>

<?php
$num=$_GET ['primo'];
$cont = 0;
for ($i=1; $i <= $num; $i++) {
    if ($num % $i==0) $cont = $cont + 1;
}
if ($cont==2){
    echo "es primo";
}else{
    echo "no es primo";
}
?>

</body>
</html>