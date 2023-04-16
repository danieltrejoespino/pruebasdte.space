<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('connection.php');

  
$sql_consulta='SELECT * FROM contacto';

$result = mysqli_query($conn,$sql_consulta);
if (mysqli_num_rows($result) > 0) {
   // Crear un array vacío para almacenar los resultados
   $data = array();
   
   // Recorrer los resultados y agregar cada fila al array
   while($fila = mysqli_fetch_assoc($result)) {
       $data[] = $fila;
   }
   
   // Convertir el array a un objeto JSON y mostrarlo en pantalla
   echo json_encode($data);
} else {
   echo "No se encontraron resultados";
}
header('Content-Type: application/json');



// Cerrar la conexión a la base de datos
mysqli_close($conn);



?>


<!-- https://pruebasdte.space/connection.php?nombre=prueba&apellidos=prueba2&mail=prueba@prueba.com&telefono=12345&horario=1 -->