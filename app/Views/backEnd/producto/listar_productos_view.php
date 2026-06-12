<br>
<br>
<br>
<h1 class="text-center">Listar Productos</h1>
<div class="container text-center table-responsive">
<h5>Selecciona la Categoria</h5>
    <?php
        echo form_open('ver_categoria');
            $lista['0'] = 'Todos';
            foreach($categorias as $row){
                $categoria_id = $row['categoria_id'];
                $categoria_descripcion = $row['categoria_descripcion'];
                $lista [$categoria_id] = $categoria_descripcion;
            }
            echo form_dropdown('categoria',$lista,'class= "form-control"');
        ?>
        <?php echo form_submit('Buscar', 'Buscar', "class='btn btn-danger'"); ?>
        <?php echo form_close(); ?>
        <br>
    <table id="mytable" class="table table-bordred table-striped table-hover">
        <thead class="table-dark">
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Imagen</th>
        </thead>
        <tbody>
            <?php foreach ($producto as $row){ ?>
                <?php if (($row['producto_estado']==1) && ($row['producto_stock'] > 0)){?>
                    <tr>
                        <td><?php echo $row['producto_nombre'];?></td>
                        <td><?php echo $row['producto_descripcion'];?></td>
                        <td><?php echo $row['producto_precio'];?></td>
                        <td><?php echo $row['producto_stock'];?></td>
                        <td><img src="<?php echo base_url('public/assets/upload/'.$row['producto_imagen']);?>"alt="img" height="100"></td>
                    </tr>
                <?php } ?>
            <?php } ?>
        </tbody>
    </table>
</div>