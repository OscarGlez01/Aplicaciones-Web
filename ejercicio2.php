<?php

$enviado=false;

if(isset( $_GET["puerta"])){
    $enviado=true;
    $r= $_GET;

    $puerta= $r["puerta"];
    
    

    switch ($puerta) {
        case 'puerta1':
            $resultado = "¡Felicidades! Usted se ha ganado una fabulosa piedra";
            break;
        
        case 'puerta2':
            $resultado = "¡Felicidades! Usted se ha ganado una fabulosa cabra";
            break;
        
        case 'puerta3':
            $resultado = "¡Felicidades! Usted se ha ganado un lujoso automovil";
            break;

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
    <h1> Ejercicio 2: Elige una puerta </h1>

    <form method="get" action="ejercicio2.php">
        <input type="radio" name="puerta" value="puerta1"> <label>Puerta 1</label> 
        <br>

        <input type="radio" name="puerta" value="puerta2"> <label>Puerta 2</label> 
        <br>

        <input type="radio" name="puerta" value="puerta3"> <label>Puerta 3</label> 
        <br>
        <br>
        
        <button type="submit" >Elegir</button>
        </form>

        <?php if($enviado){ ?>
        <hr>

        <h2> <?= $resultado; ?>  </h2>
    
        <?php } ?>
</body>
</html>