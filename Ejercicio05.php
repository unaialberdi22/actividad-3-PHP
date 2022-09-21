/Ejercicio 05: Elabore un programa que imprima la figura de un triángulo rectángulo de 10 lineas ajustada a la izquierda, formada por letras “o”. <br><br>

<!DOCTYPE html>
<html>
<body>

<?php
$inicio=0;
$fin=20;
do{
    for($i=$inicio; $i<$fin; $i++){
        echo "o";
    }
    echo "<br>";
    $inicio++;
    $fin--;
}while($inicio<$fin);

?>

</body>
</html>