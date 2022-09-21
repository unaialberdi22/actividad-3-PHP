/Ejercicio 07: Realiza la suma desde un número (primerNum) hasta otro (ultimoNum). Los valores de los dos parámetros se enviarán por GET.<br><br>

<!DOCTYPE html>
<html>
<body>

<?php
$pares = $_GET ['boolean'];
$i = rand(1,99);

for($x=1; $x<$i; $x++){
    if($pares == "true" && $x%2 == 0){
        echo $x."<br>";
    }else if($pares == "false" && $x%2 != 0){
        echo $x."<br>";
    }
}


?>

</body>
</html>