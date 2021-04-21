<?php
include("abre_conexion.php");
if (!$conexion_db) {

    die("Error en la conexion".mysqli_connect_error());
}
$sql = "SELECT nombre,correo,fecha,hora FROM $tabla1_db1";
$result = mysqli_query($conexion_db, $sql);

if (mysqli_num_rows($result)>0) {
   while($row = mysqli_fetch_assoc($result)){
       echo "nombre: " .$row["nombre"]. " ---- correo: " .$row["correo"] ." ---- fecha: " .$row["fecha"] . " ---- hora: " .$row["hora"];
   }
}
   else{
       echo "Sin resultados";
   }
include("cierra_conexion.php")
?>