/Ejercicio 02: Mostrar en pantalla números pares del 100 al 1<br><br>

<!DOCTYPE html>
<html>
<body>

<?php
for($i=100; $i>0; $i--){
    if($i%2 == 0){
        echo $i."<br>";
    }
}

?>

</body>
</html>