/Ejercicio 06: Elabore un programa que imprima la figura de un triángulo rectángulo de $numLineas lineas ajustada a la izquierda, formada por letras “o”.<br> El valor de número de líneas se enviará al servidor mediante GET.. <br><br>

<!DOCTYPE html>
<html>
<body>

<?php
$inicio=0;
$fin=$_GET ['Param1'];
do{
    for($i=$inicio; $i<$fin; $i++){
        echo "A";
    }
    echo "<br>";
    $inicio++;
    $fin--;
}while($inicio<$fin);

?>

</body>
</html>