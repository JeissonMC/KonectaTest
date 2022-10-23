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
                        <h1 class="display-4">Modulo Ventas</h1>
                    </center>

                </div>

            </div>
            <div class="col-sm-12 ml-auto" >

                <a href="#addnewVenta" data-toggle="modal" class="btn btn-primary"><span
                        class="glyphicon glyphicon-plus"></span> Nuevo</a>

            </div>

            <div class="row">
                <div class="col-sm-12">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <th>Producto</th>
                            <th>Cantidad de venta</th>
                            <th>Fecha de venta</th>
                
                        </thead>
                        <tbody>
                            <?php
                            
                                include_once 'Conexion/connection.php';

                                $sql = "SELECT  productos.nombre AS nombre, venta.cantidad_venta, venta.fecha_creacion
                                 FROm productos
                                INNER JOIN venta ON productos.id_producto = venta.idproducto;";

                                //use for MySQLi-OOP
                                $query = $conn->query($sql);
                                while ($row = $query->fetch_assoc()) {
                                            echo
                                                "<tr>
                                                    <td>" . $row['nombre'] . "</td>
                                                    <td>" . $row['cantidad_venta'] . "</td>
                                                    <td>" . $row['fecha_creacion'] . "</td>
                                                </tr>";
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
<?php include 'Add/add_modal_venta.php'?>
<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>
<script src="datatable/buttons/dataTables.buttons.min.js"></script>
<script src="datatable/buttons/jszip.min.js"></script>
<script src="datatable/buttons/pdfmake.min.js"></script>
<script src="datatable/buttons/vfs_fonts.js"></script>
<script src="datatable/buttons/buttons.html5.min.js"></script>
<script src="js/consultarProducto.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>


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