<?php
// Configuración automática de la base de datos de Clever Cloud para Ishak
$db_host = "bexicvrk963sj1k7lcpx-mysql.services.clever-cloud.com"; 
$db_username = "uoy07khxc6skn9ux";
$db_password = "iK8R0tzGATalX0HJGEFi";
$db_name = "bexicvrk963sj1k7lcpx";

$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
