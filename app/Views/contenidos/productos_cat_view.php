<div class="container pt-5">
    <h1 class="mt-5 text-center text-decoration-underline">Catalogo de Guitarras</h1>
    <p><a class="vinculo link-secondary" href="<?php echo base_url('inicio');?>"> Inicio </a> / <strong>Productos</strong></p>
    <h4 class="text-center">Compra ahora tu Guitarra Pora o búscala en nuestro local Junin 1024, (Corrientes capital, Argentina)</h4>
    <h5>Selecciona la Categoria</h5>
    <?php
        echo form_open('mostrar_categoria');
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
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 ">
            <?php
            foreach($producto as $row){?>
                <?php if (($row['producto_estado']==1) && ($row['producto_stock']>0)){?>
                <div class="col">
                    <div class="card h-100 shadow">
                        <img src="<?php echo base_url('public/assets/upload/'.$row['producto_imagen']);?>" alt="img" class="card-img-top">
                        <h5 class="text-center">
                            <?php echo $row['producto_nombre'];?>
                        </h5>
                        <div class="card-body">
                            <?php echo $row['producto_descripcion'];?>
                        </div>
                        <div class="card-footer text-center">
                            <br>
                            <p>$
                                <?php echo $row['producto_precio'];?>
                            </p>
                            <?php if (session('login')){
                                echo form_open('carrito_Controller/agregarCarrito');
                                echo form_hidden('id', $row['id_producto']);
                                echo form_hidden('nombre',$row['producto_nombre']);
                                echo form_hidden('precio',$row['producto_precio']);
                                echo form_submit('Agregar al carrito', 'Agregar al carrito',"class='btn btn-success'");
                                echo form_close();
                            } ?>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <?php } ?>
        </div>
</div>