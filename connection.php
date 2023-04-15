<?php
header('Access-Control-Allow-Origin: *');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "sql141.main-hosting.eu"; // Cambia esto por el nombre de tu servidor MySQL
$dbname = "u466684088_prueba_1"; // Cambia esto por el nombre de tu base de datos
$username = "u466684088_prueba_1"; // Cambia esto por tu nombre de usuario MySQL
$password = "Prueba_1prueba_1"; // Cambia esto por tu contraseña de usuario MySQL

// Crear una conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Revisar si la conexión se realizó con éxito
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}
echo "Conexión exitosa";

echo $nombre= $_REQUEST["nombre"];
echo $apellidos = $_REQUEST["apellidos"];
echo $mail = $_REQUEST["mail"];
echo $telefono= $_REQUEST["telefono"];
echo $horario= $_REQUEST["horario"];
echo $fuente= "SITIO INVEX";


$sql="INSERT INTO contacto (cont_nombre, cont_apellidos,cont_mail,cont_telefono,cont_horario,cont_fuente)
      VALUES ('$nombre','$apellidos','$mail','$telefono','$horario','$fuente') ";
if (mysqli_query($conn, $sql)) {
   echo json_encode("Nuevo registro insertado correctamente");
} else {
   echo  json_encode( "Error: " . $sql . "<br>" . mysqli_error($conn));
}



// Cerrar la conexión a la base de datos
mysqli_close($conn);



?>


<!-- https://pruebasdte.space/connection.php?nombre=prueba&apellidos=prueba2&mail=prueba@prueba.com&telefono=12345&horario=1 -->