<?php
// Conexión a InfinityFree (comentada)
/*
$host = 'sql303.infinityfree.com'; // Host de InfinityFree
$usuario = 'if0_39234999';
$contrasena = 'Fqj7XeR22FyOt82';
$bd = 'if0_39234999_tienda_helado';
*/

// Conexión local para XAMPP
$host = 'localhost';
$usuario = 'root';
$contrasena = '';
$bd = 'tienda_helado';

$conn = new mysqli($host, $usuario, $contrasena, $bd);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
