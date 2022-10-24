<?php

session_start();

include_once '../Conexion/connection.php';

if (isset($_POST['add'])) {

    $nombreProducto    = $_POST['idproducto'];
    $numeroVenta       = $_POST['cantidad_venta'];
    $fechaCreacion     = $_POST['fecha_creacion'];

    $sqlProductos =  mysqli_query($conn,"SELECT stock FROM productos WHERE id_producto = '$nombreProducto'");

    $row = mysqli_fetch_assoc($sqlProductos);

    $stock   = $row['stock'];

    if ($stock == 0) {

        $_SESSION['message'] = 'No producto tiene 0 stock';
        $_SESSION['message_type'] = 'danger';
    }else {

        $restaStock = $stock - $numeroVenta;

        $sql = "INSERT INTO venta (idproducto, cantidad_venta, fecha_creacion) VALUES ('$nombreProducto','$numeroVenta','$fechaCreacion')";

        if ($conn->query($sql)) {
            $_SESSION['success'] = 'Datos almacenados correctamente';
        } else {
            $_SESSION['error'] = 'Algo salió mal al agregar el registro';
        }

        $udpateStock = "UPDATE productos SET stock = '$restaStock' WHERE id_producto = '$nombreProducto'";

        $updatesal = mysqli_query($conn, $udpateStock);
    }
    
} 

else {

    $_SESSION['error'] = 'Rellena el formulario de agregar primero';
}


header('location: ../registrarVenta.php');
