/Ejercicio 03: Definir una variable llamada “pares” y asignarle un valor booleano.<br>
Si es true, mostrar en pantalla números pares del 1 al número aleatorio menor que 99 si se le ha asignado el valor FALSE a la variable pares en la pantalla tienen que aparecer los valores impares.
<br><br>

<!DOCTYPE html>
<html>
<body>

<?php
    $pares = false;
    $i = rand(1,99);
    
    for($x=1; $x<$i; $x++){
        if($pares == true && $x%2 == 0){
            echo $x."<br>";
        }else if($pares == false && $x%2 != 0){
            echo $x."<br>";
        }
    }
    
    
?>

</body>
</html>