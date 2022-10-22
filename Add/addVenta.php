<?php

session_start();

include_once '../Conexion/connection.php';

if (isset($_POST['add'])) {

    $nombreProducto    = $_POST['idproducto'];
    $numeroVenta  = $_POST['cantidad_venta'];
    $fechaCreacion  = $_POST['fecha_creacion'];


    $sqlProductos =  mysqli_query($conn,"SELECT stock FROM productos");

    $row = mysqli_fetch_assoc($sqlProductos);

    $stock   = $row['stock'];

    $restaStock = $stock - $numeroVenta;

    $udpateStock = "UPDATE productos SET stock = '$restaStock' WHERE id_producto = '$nombreProducto'";

    $updatesal = mysqli_query($conn, $udpateStock);


    $sql = "INSERT INTO venta (idproducto, cantidad_venta, fecha_creacion) VALUES ('$nombreProducto','$numeroVenta','$fechaCreacion')";

    if ($conn->query($sql)) {
        $_SESSION['success'] = 'Datos almacenados correctamente';
    } else {
        $_SESSION['error'] = 'Algo salió mal al agregar el registro';
    }
} else {
    $_SESSION['error'] = 'Rellena el formulario de agregar primero';
}





header('location: ../registrarVenta.php');
