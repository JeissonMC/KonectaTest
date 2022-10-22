<?php
//for MySQLi OOP
$conn = new mysqli('localhost', 'root', '', 'ventaproductos');
if ($conn->connect_error) {
    die("Conexción falló: " . $conn->connect_error);
}
