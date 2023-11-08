<?php
$servername = "localhost";
$database = "db";
$username = "root";
$password = "";

// Crear conexión
$conn = mysqli_connect($servername, $username, $password, $database);

// Verificar conexión
if (!$conn) {
   die("La conexión ha fallado: " . mysqli_connect_error());
}
echo "Conexión exitosa";
mysqli_close($conn);
?>