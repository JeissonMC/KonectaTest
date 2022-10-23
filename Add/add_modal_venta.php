<!-- Add New -->
<div class="modal fade" id="addnewVenta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                    <h4 class="modal-title" id="myModalLabel">Vender Producto</h4>
                </center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="Add/addVenta.php">
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label modal-label">Vender Producto:</label>
                            </div>
                            <div class="col-sm-10">
                            <select name="idproducto" id="idproducto" class="form-control" required>
                                    <option value="" disabled>Seleccione una opcion</option>
                                </select>
                            </div>
                        </div>
						<div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label modal-label">Cantidad a Vender:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="cantidad_venta" name="cantidad_venta" required>
                            </div>
                        </div>
						
						<div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label modal-label">Fecha de creacion:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="fecha_creacion" id="fecha_creacion" required>
                            </div>
                        </div>
						
                    
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span
                        class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="add" class="btn btn-primary"><span
                        class="glyphicon glyphicon-floppy-disk"></span> Guardar</a>
                    </form>
            </div>

        </div>
    </div>
</div>