<?php 

include_once '../Conexion/connection.php';

$data = json_decode(file_get_contents('php://input'));


$sqlcategoria =  mysqli_query($conn,"SELECT * FROM categorias"); 

//creacion del query Email
$sqlsedecafeteria =  mysqli_query($conn,"SELECT * FROM sedecafeteria");

$sqlProductos =  mysqli_query($conn,"SELECT * FROM productos");


foreach($sqlsedecafeteria as $row) {
    $arraysedecafeteria[] = $row;

}

foreach($sqlcategoria as $row ) {
    $arraycategorias[] = $row;
}


foreach($sqlProductos as $row) {
    $ArrayProductos[] = $row;
}



$store_result = array(
    'categorias'    => $arraycategorias,
    'sedecafeteria'   => $arraysedecafeteria,
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