<?php
header('Access-Control-Allow-Origin: *');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

 
$servername = "sql141.main-hosting.eu"; 
$dbname = "u466684088_prueba_1"; 
$username = "u466684088_prueba_1"; 
$password = "Prueba_1prueba_1"; 

// Crear una conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Revisar si la conexión se realizó con éxito
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}
echo "Conexión exitosa";

// echo $nombre= $_POST["nombre"];
// echo $apellidos = $_POST["apellidos"];
// echo $mail = $_POST["mail"];
// echo $telefono= $_POST["telefono"];
// echo $horario= $_POST["horario"];
echo $fuente= "SITIO INVEX";

echo $nombre= 'prueba';
echo $apellidos = 'prueba';
echo $mail = 'prueba';
echo $telefono= 'prueba';
echo $horario= 'prueba';



$sql_insert="INSERT INTO contacto (cont_nombre, cont_apellidos,cont_mail,cont_telefono,cont_horario,cont_fuente)
      VALUES ('$nombre','$apellidos','$mail','$telefono','$horario','$fuente') ";
if (mysqli_query($conn, $sql_insert)) {
   echo json_encode("Nuevo registro insertado correctamente");
} else {
   echo  json_encode( "Error: " . $sql . "<br>" . mysqli_error($conn));
}
echo '<hr>';
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



// Cerrar la conexión a la base de datos
mysqli_close($conn);



?>


<!-- https://pruebasdte.space/connection.php?nombre=prueba&apellidos=prueba2&mail=prueba@prueba.com&telefono=12345&horario=1 -->