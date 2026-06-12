<br>
<br>
<br>
<br>
<br>
<div class="container p-5" id="agregarProducto">
    <div clas="row">
        <div class="col">
            <h1 class="text-center ">Registrar Productos</h1>
            <!--Si obtenemos los datos con getFlashdata fail, mostraremos un mensaje de fallo-->
            <?php if(!empty(session()->getFlashdata('fallo'))) : ?>
            <div class="alert alert-danger ">
                <?= session()->getFlashdata('fallo'); ?>
            </div>
            <?php endif ?>
            <!--De lo contrario mostrar los datos correcto-->
            <?php if(!empty(session ()->getFlashdata('correcto'))) : ?>
            <div class="alert alert-success ">
                <?= session()->getFlashdata('correcto'); ?>
            </div>
            <?php endif ?>

            <?php echo form_open_multipart('registrar_producto');?>
            <div class="mb-3 ">
                <label for="exampleInputEmail1 " class="form-label ">Nombre del producto</label>
                <input type="nombre " class="form-control " name="nombre" id="nombre" value="<?=set_value( 'nombre');?>">
                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'nombre'): '' ?></span>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripcion</label>
                <input type="text" class="form-control" name="descripcion" id="descripcion" value="<?=set_value('descripcion');?>">
                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'descripcion'): '' ?></span>
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="text" class="form-control" name="precio" id="precio" value="<?=set_value('precio');?>">
                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'precio'): '' ?></span>
            </div>
            <!--Imagen-->
            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen</label>
                <!--<input type="file" name="imagen" id="imagen" class="form-control" value="<?=set_value('imagen');?>">-->
                <?php echo form_upload(['name'=>'imagen', 'id'=>'imagen', 'class'=>'form-control','type'=>'file', 'value'=>set_value('imagen')]); ?>
                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'imagen'): '' ?></span>
            </div>
            <div class="mb-3">
                <label for="stock" class="form-label">Stock</label>
                <input type="number" class="form-control" name="stock" id="stock" value="<?=set_value('stock');?>">
                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'stock'): '' ?></span>
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
                    echo form_dropdown('categoria',$lista,'0','class= "form-control"');
                ?>
                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'categoria'): '' ?></span>
            </div>
            <div class="mb-3 d-grid">
                <?php echo form_submit('Agregar' , 'Agregar' , "class ='btn btn-danger'");?>
            </div>
            <?php echo form_close();?>
        </div>
    </div>