<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                    <h4 class="modal-title" id="myModalLabel">Nuevo Producto</h4>
                </center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="Add/add.php">
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label modal-label">Nombre:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nombre" id="nombre" required>
                            </div>
                        </div>
						<div class="row form-group">


                            <div class="col-sm-2">
                                <label class="control-label modal-label">Categoria:</label>
                            </div>
                            <div class="col-sm-10">
                                <select name="fk_id_categoria" id="fkcategoria" class="form-control" required>
                                    <option value="" disabled>Seleccione una opcion</option>
                                    
                                </select>
                            </div>
                        </div>

						
						<div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label modal-label">cafeteria:</label>
                            </div>
                            <div class="col-sm-10">
							<select name="fk_id_cafeteria" id="fkcafeteria" class="form-control" required>
                                    <option value="" disabled>Seleccione una opcion</option>
                                </select>
                            </div>
                        </div>
						
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label modal-label">Referencia</label>
                            </div>
                            <div class="col-sm-10">
								<input type="text" class="form-control" name="referencia" id="referencia" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label modal-label">Precio:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="precio" id="precio" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label modal-label">peso:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="peso" id="peso" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label modal-label">stock:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="stock" id="stock" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label modal-label">fecha de creacion:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="fecha_creacion" required>
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