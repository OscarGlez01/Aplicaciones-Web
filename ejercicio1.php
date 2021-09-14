<?php

$enviado=false;

if(isset( $_GET["numero1"]) && isset( $_GET["numero2"])){
    $enviado=true;
    $r= $_GET;

    $numero1= $r["numero1"];
    $numero2= $r["numero2"];
    $operacion= $r["operacion"];
    

    switch ($operacion) {
        case '+':
            $resultado = $numero1 + $numero2;
            break;
        
        case '-':
            $resultado = $numero1 - $numero2;
            break;
        
        case '*':
            $resultado = $numero1 * $numero2;
            break;

        case '/':
            $resultado = $numero1 / $numero2;
        
        default:
            
            break;
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Ejercicio 1 : Calculadora </h1>
    <form method="get" action="ejercicio1.php">

        <label for=""> Introduzca el primer número:</label>
        <input type= "number" name= "numero1">

        <br>

        <label for=""> Introduzca el segundo número:</label>
        <input type= "number" name= "numero2">

        <br>

        <label for=""> Escoja la operación a realizar:</label>
        <select name= "operacion">
        <option>+</option>;
        <option>-</option>;
        <option>*</option>;
        <option>/</option>;
        </select>
        <button type="submit" >Calcular</button>
    </form>

    <?php if($enviado){ ?>
    <hr>

    <h2>Su resultado es: <?= $resultado; ?>  </h2>
    

    <?php } ?>

</body>
</html>