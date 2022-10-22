<?php 

include_once '../Conexion/connection.php';

$data = json_decode(file_get_contents('php://input'));


$sqlProductos =  mysqli_query($conn,"SELECT * FROM productos");


foreach($sqlProductos as $row) {
    $ArrayProductos[] = $row;

}

$store_result = array(
   
    'productos'   => $ArrayProductos
);


if($resultado = true){
    echo json_encode(array(

        "datos" => $store_result
    ));
    die();
}else{
    echo json_encode(array(
        "status" => 500
    ));
    die();
}
//return $resultado; //se retorna el resultado
mysqli_close($conn);//se cierra la conexion

?>