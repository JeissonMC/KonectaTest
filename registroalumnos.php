
<?php
session_start();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Modulo Alumnos</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">

    <style>
    .height10 {
        height: 10px;
    }

    .mtop10 {
        margin-top: 10px;
    }

    .modal-label {
        position: relative;
        top: 7px
    }

    table,
    td,
    th,
    a,
    h1 {

        font-family: 'Courgette', cursive;
    }
    </style>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <center>
                        <h1 class="display-4">Modulo Productos</h1>
                    </center>

                </div>

            </div>
            <div class="col-sm-12 ml-auto" >

                <a href="#addnew" data-toggle="modal" class="btn btn-primary"><span
                        class="glyphicon glyphicon-plus"></span> Nuevo</a>

            </div>

            <div class="row">
                <div class="col-sm-12">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <th>Nombre</th>
                            <th>Categoria</th>
                            <th>Cafeteria</th>
                            <th>Referencia</th>
                            <th>Precio</th>
                            <th>Peso</th>
                            <th>Stock</th>
                            <th>Fecha de creacion</th>
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                            <?php
                                include_once 'Conexion/connection.php';

                                $sql = "SELECT productos.id_producto, productos.nombre, categorias.nombre AS 
                                categoria , sedecafeteria.nombre AS cafeteria, 
                                productos.referencia, productos.precio, productos.peso, productos.stock,
                                productos.fecha_creacion FROM productos
                                INNER JOIN categorias ON categorias.id_categoria = productos.fk_id_categoria
                                INNER JOIN sedecafeteria  ON sedecafeteria.id_cafeteria = productos.fk_id_cafeteria;
                                ";

                                //use for MySQLi-OOP
                                $query = $conn->query($sql);
                                while ($row = $query->fetch_assoc()) {
                                            echo
                                                "<tr>
                                            <td>" . $row['nombre'] . "</td>
                                            <td>" . $row['categoria'] . "</td>
                                            <td>" . $row['cafeteria'] . "</td>
                                            <td>" . $row['referencia'] . "</td>
                                            <td>" . $row['precio'] . "</td>
                                            <td>" . $row['peso'] . "</td>
                                            <td>" . $row['stock'] . "</td>
                                            <td>" . $row['fecha_creacion'] . "</td>
                                            <td>
                                                <a href='#edit_" . $row['id_producto'] . "' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Editar</a>
                                                <a href='#delete_" . $row['id_producto'] . "' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Eliminar</a>
                                            </td>
                                        </tr>";
                                    include 'Edit/edit_delete_modal.php';
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>

    
    <?php include 'Add/add_modal.php'?>
</body>


<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>
<script src="datatable/buttons/dataTables.buttons.min.js"></script>
<script src="datatable/buttons/jszip.min.js"></script>
<script src="datatable/buttons/pdfmake.min.js"></script>
<script src="datatable/buttons/vfs_fonts.js"></script>
<script src="datatable/buttons/buttons.html5.min.js"></script>
<script src="js/consultas.js"></script>


<script>
$(document).ready(function() {

    $('#myTable').DataTable({
        dom: 'Bfrtip',

        "language": {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }
    });

    //hide alert
    $(document).on('click', '.close', function() {
        $('.alert').hide();
    })
});
</script>
</body>

</html>