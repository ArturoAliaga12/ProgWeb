<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GUARDAMOS LOS DATOS EN BD</title>
</head>
<body>
    
    <?php
    date_default_timezone_set('America/Santiago');
    $nombr = $_POST ["nombre"];
    $nombre = strip_tags($nombr);
    $n_nombre = strlen($nombre);


    $corre = $_POST ["correo"];
    $correo = strip_tags($corre);

    $contra = $_POST ["contraseña"];
    $contraseña = strip_tags($contra);
    $n_contraseña = strlen($contraseña);

    $contra2 = $_POST ["contraseña2"];
    $contraseña2 = strip_tags($contra2);
    $n_contraseña2 = strlen($contraseña2);



 if (filter_Var($correo, FILTER_VALIDATE_EMAIL)) {
    $n_correo = strlen($correo);
 }else {
     $n_correo = 0;



 }
 $fecha = date("Y/m/d");
 $hora = date("h:i:sa");
$total_car = $n_nombre * $n_correo * $n_contraseña;
if  ($contraseña != $contraseña2) {
    echo "Las contraseñas deben ser iguales <a href=\"javascript:history.go(-1)\">VOLVER</a>";

 }
 else {
    

    if ($total_car >=1) {
        include("abre_conexion.php");

        $_GRABAR_SQL = "INSERT INTO $tabla1_db1 (nombre,contraseña,correo,fecha,hora) VALUES ( '$nombre','$contraseña','$correo','$fecha','$hora')";
        mysqli_query($conexion_db, $_GRABAR_SQL);
       
      include("cierra_conexion.php");

        echo "<p>Los datos fueron guardados exitosamente</p>

        <p><a href='javascript:history.go(-1)'>VOLVER ATRÁS</a></p>

        <p> <a href='ver_datos.php' title='Click aquí'> VER LOS REGISTROS GUARDADOS</a> </p>";

    }

    else {

        echo "los campos nombre, correo y contraseña no pueden estas vacios <a href=\"javascript:history.go(-1)\">VOLVER</a>";

    }
}

    
    ?>
</body>
</html>