<?php
$hostdb = "localhost";
$baseDeDatos = "testphp";

$usuariodb = "root";
$clavedb = "";

$tabla1_db1 = "datosusuario";

$conexion_db = mysqli_connect("$hostdb","$usuariodb","$clavedb") or die ("Conexion denegada");
$db = mysqli_select_db( $conexion_db, "$baseDeDatos") or die ("Conexion denegada");
?>