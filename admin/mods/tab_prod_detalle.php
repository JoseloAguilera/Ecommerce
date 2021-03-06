<form action="" method="POST"  autocomplete="off">
    <div class="modal-body">
        <div class="row">
            <input type="hidden" class="form-control" id="codigo" name="codigo" value="<?php echo $producto['id'];?>" required>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="nombre">Referencia</label>
                    <input type="text" class="form-control" id="referencia" name="referencia" placeholder="Referencia" maxlength="20" value="<?php echo $producto['referencia'];?>">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="tipo">Categoría</label>
                    <select class="selectpicker show-tick" id="categoria" name="categoria[]" data-width="100%" data-live-search="true" multiple required>
                        <?php
                            if ($categorias != null) {
                                $selected = "";
                                $i = 0;
                                foreach ($categorias as $row) {	
                                    if ($row['id'] == $categoriasprod[$i]['id_categoria']) {
                                        $selected = " selected";
                                        $i++;
                                    } else {
                                        $selected = "";
                                    }
                        ?>
                            <option value="<?php echo $row['id'];?>" <?php echo $selected;?> style="font-weight: bold !important;"><?php echo $row['nombre'];?></option> 
                            <?php
                                    $subcategorias = getSubCategorias ($row['id']);
                                    $subcategoriasprod = getProdSubCategorias ($row['id'], $_GET['producto']);
                                if ($subcategorias != null) {
                                    $subselected = "";
                                    $j = 0;
                                    foreach ($subcategorias as $linea) {	
                                        if ($linea['id'] == $subcategoriasprod[$j]['id_categoria']) {
                                            $subselected = " selected";
                                            $j++;
                                        } else {
                                            $subselected = "";
                                        }
                            ?>
                            <option value="<?php echo $linea['id'];?>" <?php echo $subselected;?>><?php echo $linea['nombre'];?></option> 
                        <?php 
                                        }//END FOREACH SUB
                                    }//END IF SUB
                                } //END FOREACH
                            } //END IF
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="tipo">Marca</label>
                    <select class="selectpicker" id="marca" name="marca" data-width="100%" data-live-search="true">
                        <?php
                            if ($marcas != null) {
                                $selected = "";
                                foreach ($marcas as $row) {	
                                    if ($row['id'] == $producto['id_marca']) {
                                        $selected = " selected";
                                    } else {
                                        $selected = "";
                                    }
                        ?>
                            <option value="<?php echo $row['id'];?>" <?php echo $selected;?>><?php echo $row['nombre'];?></option> 
                        <?php 
                                } //END FOREACH
                            } //END IF
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-md-2">
                <?php 
                    if ($producto['valor_minorista'] > 0) {
                        $minorista = number_format($producto['valor_minorista'], 0, ',', '.');
                    } else {
                        $minorista = "";
                    }
                ?>
                <div class="form-group">
                    <label for="valorminorista">Precio Minorista</label>
                    <input type="text" class="form-control" id="valorminorista" name="valorminorista" placeholder="999.999.999.999" value="<?php echo $minorista;?>" onKeyUp="formatoMoneda(this, event)" maxlength="15">
                </div>
            </div>
            <div class="col-md-2">
                <?php 
                    if ($producto['valor_mayorista'] > 0) {
                        $mayorista = number_format($producto['valor_mayorista'], 0, ',', '.');
                    } else {
                        $mayorista = "";
                    }
                ?>
                <div class="form-group">
                    <label for="valormayorista">Precio Mayorista</label>
                    <input type="text" class="form-control" id="valormayorista" name="valormayorista" placeholder="999.999.999.999" value="<?php echo $mayorista;?>" onKeyUp="formatoMoneda(this, event)" maxlength="15">
                </div>
            </div>
            <div class="col-md-9">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del Producto" maxlength="80" value="<?php echo $producto['nombre'];?>" required>
                </div>
            </div>
            <div class="col-md-1">
                <div class="form-group">
                    <label for="descripcion">Destacado</label>
                    <?php
                        $destacado = "";
                        if ($producto['destaque'] == 0) {
                            $destacado = "";
                        } else {
                            $destacado = " checked";
                        }
                    ?>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="checkbox" name="destacado" id="toggle-destacado" data-toggle="toggle" data-on="Sí" data-off="No" data-onstyle="success" data-offstyle="warning" data-width="100%" data-height="35" <?php echo $destacado;?>>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1">
                <div class="form-group">
                    <label for="por_pedido">P.Pedido</label>
                    <?php
                        $por_pedido = "";
                        if ($producto['por_pedido'] == 0) {
                            $por_pedido = "";
                        } else {
                            $por_pedido= "checked";
                        }
                    ?>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="checkbox" name="por_pedido" id="toggle-por_pedido" data-toggle="toggle" data-on="Sí" data-off="No" data-onstyle="success" data-offstyle="warning" data-width="100%" data-height="35" <?php echo $por_pedido;?>>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1">
                <div class="form-group">
                    <label for="descripcion">Activo</label>
                    <?php
                        $activo = "";
                        if ($producto['activo'] == 0) {
                            $activo = "";
                        } else {
                            $activo = " checked";
                        }
                    ?>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="checkbox" name="activo" id="toggle" data-toggle="toggle" data-on="Sí" data-off="No" data-onstyle="success" data-offstyle="warning" data-width="100%" data-height="35" <?php echo $activo;?>>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <textarea class="form-control" rows="4" id="descripcion" name="descripcion" placeholder="Descripción del Producto" maxlength="200"><?php echo $producto['descripcion'];?></textarea>
                </div>
            </div>
        </div> <!-- row -->

        <div class="pull-right">
            <button type="button" class="btn btn-danger pull-left" name="excluir" id="btn-confirmarpr" style="margin-right: 10px;">Excluir</button>
            <button type="submit" class="btn" name="excluirpr" id="btn-excluirpr" style="display: none;">Submit Excluir</button>
            <button type="submit" class="btn btn-primary pull-right" name="guardarpr">Guardar</button>
        </div>
        <button type="button" class="btn btn-default" onclick="window.location.href = 'producto.php';">Cerrar</button>
    </div> <!-- modal-body -->
</form>

<!-- Confirmación Modal (para excluisiones) -->
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="mi-modal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center" id="myModalLabel">¿Deseas eliminar el producto <?php echo $producto['id'];?>?</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" id="modal-btn-si">Sí</button>
                <button type="button" class="btn btn-primary" id="modal-btn-no">No</button>
            </div>
        </div>
    </div>
</div>
<!-- Confirmación Modal (para excluisiones) -->