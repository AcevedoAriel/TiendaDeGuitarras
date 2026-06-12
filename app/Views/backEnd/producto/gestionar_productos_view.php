<br>
<br>
<br>
<div class="container-fluid ">
    <h1 class="text-center">Gestionar Productos</h1>
    <div class="container-fluid table-responsive">
        <table id="mytable2" class="table table-responsive table-bordred table-striped table-hover">
            <thead class="table-dark text-center">
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Imagen</th>
                <th>Categoria</th>
                <th>Editar</th>
                <th>Activar/Eliminar</th>
            </thead>
            <tbody>
                <?php foreach ($producto as $row){ ?>
                <tr>
                    <td>
                        <?php echo $row['producto_nombre'];?>
                    </td>
                    <td>
                        <?php echo $row['producto_descripcion'];?>
                    </td>
                    <td>
                        <?php echo $row['producto_precio'];?>
                    </td>
                    <td class="text-center">
                        <?php echo $row['producto_stock'];?>
                    </td>
                    <td class="text-center"><img src="<?php echo base_url('public/assets/upload/'.$row['producto_imagen']);?>" alt="img" height="100">
                    </td>
                    <td class="text-center">
                        <?php echo $row['categoria_descripcion'];?>
                    </td>
                    <td><a class="btn btn-success" href="<?php
                    echo base_url('Producto_Controller/editar_producto/'.$row['id_producto']);?>">Editar</a>
                    </td>
                    <?php if ($row['producto_estado'] == 1){ ?>
                    <td><a class="btn btn-danger" href="<?php
                        echo base_url('Producto_Controller/eliminar_producto/'.$row['id_producto']);?>">Eliminar</a></td>
                    <?php }else{ ?>
                    <td><a class="btn btn-danger" href="<?php
                        echo base_url('Producto_Controller/activar_producto/'.$row['id_producto']);?>">Activar</a></td>
                    <?php } ?>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>