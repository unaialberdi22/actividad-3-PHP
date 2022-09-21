/Ejercicio 07: Realiza la suma desde un número (primerNum) hasta otro (ultimoNum). Los valores de los dos parámetros se enviarán por GET.<br><br>

<!DOCTYPE html>
<html>
<body>

<?php  
$primerNum = $_GET ['Param1'];
$ultimum = $_GET ['Param2'];
    
    for($i = $primerNum; $primerNum<$ultimum; $primerNum++, $i=$i+$primerNum){
    }
    
    echo "la suma de los numeros es: ".$i;
?>

</body>
</html>