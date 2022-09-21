/Ejercicio 04: Realiza la suma desde un número (primerNum) hasta otro (ultimum)<br><br>

<!DOCTYPE html>
<html>
<body>

<?php  
    $primerNum = 3;
    $ultimum = 8;
    
    for($i = $primerNum; $primerNum<$ultimum; $primerNum++, $i=$i+$primerNum){
    }
    
    echo "la suma de los numeros es: ".$i;
?>

</body>
</html>