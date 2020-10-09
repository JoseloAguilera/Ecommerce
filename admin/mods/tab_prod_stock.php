<div class="box-header with-border">
    <div class="col-md-3 pull-left">
        <button id="btnAdd" type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddValorModal" style="margin-bottom: 5px;">+ Nuevo</button>
    </div>
</div>

<!-- Corpo de Caja -->
<div class="box-body">
    <div class="box-body table-responsive">
        <table class="table table-striped table-bordered display nowra table-image" id="tabladatos2">
            <thead>
                <tr>
                    <th>Combinación</th>
                    <th>Stock</th>
                    <th>Valor Minorista</th>
                    <th>Valor Mayorista</th>
                    <th>Activo</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    // var_dump($stock);
                    if ($stock != null) { 
                        foreach ($stock as $row) {
                ?>
                <tr>
                <!-- <tr data-toggle="modal" data-target="#AltModal" data-codigo="<?php echo $row['id'];?>" data-orden="<?php echo $row['orden'];?>" data-url="<?php echo $row['url'];?>" data-activo="<?php echo $row['activo'];?>"> -->
                    <td>
                        <?php 
                            $valores = getStockValor ($row['id']);
                            if ($valores != null) { 
                                foreach ($valores as $linea) {
                                    echo '<span class="label label-primary" style="font-size:10pt;">'.$linea['nombre'].'</span> ';
                                }
                            } else {
                                echo 'UNICO';
                            }
                        ?>
                    </td>
                    <td><?php echo $row['stock'];?></td>
                    <td>
                    <?php 
                        if ($row['valor_minorista'] > 0) {
                            $minorista = number_format($row['valor_minorista'], 0, ',', '.');
                        } else {
                            $minorista = "";
                        }
                        echo $minorista;
                    ?>
                    </td>
                    <td>
                    <?php 
                        if ($row['valor_mayorista'] > 0) {
                            $mayorista = number_format($row['valor_mayorista'], 0, ',', '.');
                        } else {
                            $mayorista = "";
                        }
                        echo $mayorista;
                    ?>
                    </td>
                    <td>
                    <?php
                        $circle_color = "";
                        if ($row['activo'] == 1) {
                            echo '<span style="color: white">S</span><i class="fa fa-check text-success"></i>';
                        } else {
                            echo '<span style="color: white">N</span><i class="fa fa-close text-danger"></i>';
                        }
                    ?>
                    </td>
                </tr>
                <?php 
                    }//FOR
                }//IF
                ?>
                <!-- <tr>
                    <td><span class="label label-success">XL</span> <span class="label label-primary">Rojo</span></td>
                    <td>10</td>
                    <td>0%</td>
                    <td>10%</td>
                    <td>Activo</td>
                </tr>
                <tr>
                    <td><span class="label label-success">XL</span> <span class="label label-primary">Amarillo</span></td>
                    <td>10</td>
                    <td>Sin Descuento</td>
                    <td>Sin Descuento</td>
                    <td>Activo</td>
                </tr> -->
            </tbody>
        </table>
    </div>
</div> <!-- /.box-body -->

<!-- AddModal -->
<div class="modal fade" tabindex="-1" role="dialog" id="AddValorModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Nuevo Arreglo</h4>
            </div>
            <form action="" method="POST" autocomplete="off">
                <div class="modal-body">
                    <div class="row">
                        <?php
                            if ($atributosprod != null) {
                                $tam = sizeof($atributosprod);
                                if ($tam == 1) {
                                    $col = "col-md-12";
                                } else if ($tam % 2) {
                                    $col = "col-md-4";
                                } else {
                                    $col = "col-md-6";
                                }
                                foreach ($atributosprod as $row) {	
                        ?>
                        <div class="<?php echo $col;?>">
                            <div class="form-group">
                                <label for="atributo"><?php echo $row['nombre'];?></label>
                                <select class="selectpicker" id="atributo" name="valores[]" data-width="100%" data-live-search="true">
                                    <?php
                                        $valoresProd = "";
                                        $valores = getAtributosValores($row['id']);
                                        if ($valores != null) {                                            
                                            foreach ($valores as $valor) {	
                                    ?>
                                        <option value="<?php echo $valor['id'];?>"><?php echo $valor['nombre'];?></option> 
                                    <?php 
                                            } //END FOREACH
                                        } //END IF
                                    ?>
                                </select>
                            </div>
                        </div>
                        <?php 
                                } //END FOREACH
                            } //END IF
                        ?>
                    </div> <!-- row -->
                    <div class="row">
                        <div class="col-md-4">
                            <label for="orden">Stock</label>
                            <input type="text" class="form-control" id="stock" name="stock" placeholder="0" maxlength="15" value="1" required>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="valorminorista">Precio Minorista</label>
                                <input type="text" class="form-control" id="valorminorista" name="valorminorista" value="<?php echo number_format($producto['valor_minorista'], 0, ',', '.');?>" placeholder="999.999.999.999" onKeyUp="formatoMoneda(this, event)" maxlength="15">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="valormayorista">Precio Mayorista</label>
                                <input type="text" class="form-control" id="valormayorista" name="valormayorista" value="<?php echo number_format($producto['valor_mayorista'], 0, ',', '.');?>" placeholder="999.999.999.999" onKeyUp="formatoMoneda(this, event)" maxlength="15">
                            </div>
                        </div>
                    </div>
                </div> <!-- modal-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary" name="nuevostock">Guardar</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- ./AddModal -->	




