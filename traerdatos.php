<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 

$ch = curl_init();
   curl_setopt($ch, CURLOPT_URL, 'https://pruebasdte.space/GitHub/consulta.php'); 
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
   curl_setopt($ch, CURLOPT_HEADER, 0); 
   $data = curl_exec($ch); 
   var_dump($data);
   curl_close($ch); 
?>

