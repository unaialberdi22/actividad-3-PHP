/Ejercicio 10: El servidor recibirá un número. Tenemos que sacar por pantalla todos los números primos que hay desde el 1 hasta ese número.<br><br>

<!DOCTYPE html>
<html>
<body>

<?php
$num = 7;
$primo;
$cont=0;
for($primo = 1; $primo <= $num; $primo++){
    $cont=0;
    for ($i=1; $i <= $primo; $i++) {
        if ($primo % $i==0){
            $cont = $cont + 1;
        }
        
    }
    if ($cont==2){
        echo $primo." es primo"."<br>";
    }else{
        echo $primo." no es primo"."<br>";
    }
}   
?>

</body>
</html>