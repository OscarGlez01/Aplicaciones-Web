<?php
$enviado=false;

if(isset( $_POST['nombre'])){
    $enviado=true;

    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $ciudad=$_POST['ciudad'];
    $edad=$_POST['edad'];
    $telefono=$_POST['telefono'];
    $correo=$_POST['correo'];
    $estado=$_POST['estado'];

    echo "nombre: ".$nombre;
    echo "<br>apellido: ".$apellido;
    echo "<br>ciudad: ".$ciudad;
    echo "<br>edad ".$edad;
    echo "<br>telefono: ".$telefono;
    echo "<br>correo: ".$correo;
    echo "<br>estado civil: ".$estado;
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
    <h1> Ejercicio 4: Formulario de registro </h1>

    <form method="post" action="ejercicio4.php">

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre">
        <br>

        <label for="apellido">Apellido</label>
        <input type="text" name="apellido">
        <br>

        <label for=""> Escoja la ciudad en que reside:</label>
        <select name= "ciudad">
        <option>Empalme</option>;
        <option>Guaymas</option>;
        <option>Hermosillo</option>;
        <option>Obregon</option>;
        <option>Alamos</option>;
        <option>Navojoa</option>;
        <option>Ures</option>;
        <option>Cajeme</option>;
        </select>

        <br>

        <label for="edad">Edad</label>
        <input type="number" name="edad">
        <br>

        <label for="telefono">Telefono</label>
        <input type="number" name="telefono">
        <br>

        <label for="correo">Correo</label>
        <input type="text" name="correo">
        <br>

        <input type="radio" name="estado" value="soltero"> <label>Soltero</label> 
        <input type="radio" name="estado" value="casado"> <label>Casado</label> 
        
        <br>
        <button type="submit" >Registrar</button>
        </form>

</body>
</html>