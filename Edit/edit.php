<?php
session_start();
include_once '../Conexion/connection.php';

if (isset($_POST['edit'])) {
    $ID        = $_POST['id_producto'];
    $nombre    = $_POST['nombre'];
    $categoria    = $_POST['fk_id_categoria'];
    $cafeteria  = $_POST['fk_id_cafeteria'];
    $referencia      = $_POST['referencia'];
    $precio     = $_POST['precio'];
    $peso  = $_POST['peso'];
    $stock = $_POST['stock'];
    $fechaCreacion = $_POST['fecha_creacion'];


    $sql  = "UPDATE productos SET nombre = '$nombre', fk_id_categoria = '$categoria', fk_id_cafeteria = '$cafeteria',
     referencia ='$referencia', precio = '$precio', peso = '$peso', stock = '$stock', fecha_creacion = '$fechaCreacion'   WHERE id_producto = '$ID'";

    if ($conn->query($sql)) {
        $_SESSION['message'] = 'Se actualizo la tarea';
    } else {
        $_SESSION['error'] = 'Algo salió mal al actualizar alumno.';
    }
} else {
    $_SESSION['error'] = 'Selecciona un alumno para editarlo.';
}

header('location: ../registroalumnos.php');
