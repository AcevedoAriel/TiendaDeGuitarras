<br>
<hr>
<br>
<div class="container mx-auto">
    <div clas="row">
        <div class="col-">
            <h1 class="text-center ">Editar Producto</h1>
            
            <div class="alert-danger text-center" role="alert">
                <?php $session = session(); ?>
                <?= $session->getFlashdata('mensaje');?>
            </div>

            <?php echo form_open_multipart("Producto_Controller/actualizar_producto/".$producto['id_producto']); ?>
            <section class="form-register">
                <div class="mb-3 ">
                    <label for="exampleInputEmail1 " class="form-label ">Nombre</label>
                    <?php echo form_input(['name'=>'nombre', 'id'=>'nombre', 'class'=>'form-control', 'value'=>$producto['producto_nombre']]); ?>
                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'nombre'): '' ?></span>
                </div>
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripcion</label>
                    <?php echo form_input(['name'=>'descripcion', 'id'=>'descripcion', 'class'=>'form-control', 'value'=>$producto['producto_descripcion']]); ?>
                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'descripcion'): '' ?></span>
                </div>
                <div class="mb-3">
                    <label for="precio" class="form-label">Precio</label>
                    <?php echo form_input(['name'=>'precio', 'id'=>'precio', 'class'=>'form-control', 'value'=>$producto['producto_precio']]); ?>
                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'precio'): '' ?></span>
                </div>
                <div class="mb-3">
                    <label for="stock" class="form-label">Stock</label>
                    <?php echo form_input(['name'=>'stock', 'id'=>'stock', 'class'=>'form-control', 'type'=>'number', 'value'=>$producto['producto_stock']]); ?>
                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'stock'): '' ?></span>
                </div>
                <!--Imagen-->
                <div class="mb-3">
                    <label for="imagen" class="form-label">Imagen</label>
                    <img src="<?php echo base_url('public/assets/upload/'.$producto['producto_imagen']);?>" alt="img" height="100">
                    <?php echo form_upload(['name'=>'imagen', 'id'=>'imagen', 'class'=>'form-control','type'=>'file', 'value'=>$producto['producto_imagen']]); ?>
                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'imagen'): '' ?></span>
                </div>
                <div class="mb-3">
                    <label for="categoria" class="form-label" name="categoria">Seleccione Categoria</label>
                    <?php
                    $lista['0'] = 'Seleccione categoria';
                    foreach($categorias as $row){
                        $categoria_id = $row['categoria_id'];
                        $categoria_descripcion = $row['categoria_descripcion'];
                        $lista [$categoria_id] = $categoria_descripcion;
                    }
                    echo form_dropdown('categoria',$lista,$producto['producto_categoria'],'class= "form-control"');
                ?>
                        <span class="text-danger"><?= isset($validation) ? display_error($validation, 'categoria'): '' ?></span>
                </div>
                <div class="mb-3 d-grid">
                    <?php echo form_submit('Modificar' , 'Modificar' , "class ='btn btn-danger'");?>
                </div>
                <?php echo form_close();?>
            </section>
        </div>
    </div>