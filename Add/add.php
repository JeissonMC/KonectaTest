<?php
session_start();
include_once '../Conexion/connection.php';

if (isset($_POST['add'])) {
    $nombre    = $_POST['nombre'];
    $categoria    = $_POST['fk_id_categoria'];
    $cafeteria  = $_POST['fk_id_cafeteria'];
    $referencia      = $_POST['referencia'];
    $precio     = $_POST['precio'];
    $peso  = $_POST['peso'];
    $stock = $_POST['stock'];
    $fechaCreacion = $_POST['fecha_creacion'];

    $sql = "INSERT INTO productos (nombre,fk_id_categoria, fk_id_cafeteria, referencia,precio,peso,stock,fecha_creacion ) VALUES ('$nombre','$categoria','$cafeteria', '$referencia','$precio','$peso','$stock','$fechaCreacion')";

    if ($conn->query($sql)) {
        $_SESSION['success'] = 'Datos almacenados correctamente';
    } else {
        $_SESSION['error'] = 'Algo salió mal al agregar el registro';
    }
} else {
    $_SESSION['error'] = 'Rellena el formulario de agregar primero';
}

header('location: ../registroalumnos.php');
