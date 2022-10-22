<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['id_producto']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Editar Producto</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="Edit/edit.php">
				<input type="hidden" class="form-control" name="id_producto" value="<?php echo $row['id_producto']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Nombre:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nombre" id="nombre"  value="<?php echo $row['nombre']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Categoria:</label>
					</div>
					<div class="col-sm-10">
					<select name="fk_id_categoria" id="fk_id_categoria" class="form-control" required>
                                    <option value="" disabled>Seleccione una opcion</option>
                                  
                                </select>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">cafeteria:</label>
					</div>
					<div class="col-sm-10">
					<select name="fk_id_cafeteria" id="fk_id_cafeteria" class="form-control" required>
                                    <option value="" disabled>Seleccione una opcion</option>
                                   

                                </select>
                            </div>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Referencia:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="referencia" id="referencia" value="<?php echo $row['referencia']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Precio:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="precio" id="precio" value="<?php echo $row['precio']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Peso:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="peso" id="peso" value="<?php echo $row['peso']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Stock:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="stock" id="stock" value="<?php echo $row['stock']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Fecha de creacion:</label>
					</div>
					<div class="col-sm-10">
						<input type="date" class="form-control" name="fecha_creacion" id="fecha_creacion" value="<?php echo $row['fecha_creacion']; ?>">
					</div>
				</div>
            </div>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Actualizar</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['id_producto']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Eliminar producto</h4></center>
            </div>
            <div class="modal-body">
            	<p class="text-center">Estas seguro que quieres borrarlo?</p>
				<h2 class="text-center"><?php echo $row['nombre'] ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <a href="Delete/delete.php?id_producto=<?php echo $row['id_producto']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Si, estoy seguro</a>
            </div>

        </div>
    </div>
</div>