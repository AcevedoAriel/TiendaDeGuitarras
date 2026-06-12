<?php
    $cart = \Config\Services::cart();
    $cart1 = $cart->contents();
?>
    <br>
    <br>
    <br>
    <div class="table-responsive container p-5">
        <h1 class="text-center">CARRITO DE COMPRA</h1>

        <div class="m-5 alert-warning ancho-form mx-auto fw-bold mt-2 text-center">
            <?php $session = session(); ?>
            <?= "<h1>".$session->getFlashdata('mensaje')."</h1>";?>
        </div>
        <td><a class="btn btn-success" href="<?php echo base_url('productos_cat'); ?>">Seguir Comprando</a></td>
        <!--si el carrito esta vacio, no me muestra el boton finalizar compra-->

        <br>
        <br>

        <table class="table table-bordred table-striped table-hover" id="mytable1">

            <thead class="table-dark">
                <th>Nº item</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>SubTotal</th>
                <th>Accion</th>
            </thead>
            <tbody>
                <?php
            /* Un contador total para los artículos en el carrito. */
            $total = 0;
            $i = 1;
            /* Recorre y muestra los artículos en el carrito. */
            foreach ($cart1 as $item){ ?>
                    <tr>
                        <td>
                            <?php echo $i++;?>
                        </td>
                        <td>
                            <?php echo $item['name'];?>
                        </td>
                        <td>
                            <?php echo number_format($item ['price'],2);?>
                        </td>
                        <td>
                            <?php echo $item['qty'];?>
                        </td>
                        <td>
                            <?php echo number_format($item ['subtotal'],2);?>
                        </td>
                        <?php $total = $total + $item['subtotal'];?>
                        <td>
                            <a class="btn btn-danger" <?php echo anchor( 'carrito_Controller/borrar/'.$item[ 'rowid'], 'Eliminar'); ?></a>
                        </td>
                    </tr>
                    <?php } ?>
                    <td>Total compra: $
                        <?php echo number_format($total,2);?>
                    </td>
            </tbody>
        </table>
        <br>
        <a class="btn btn-success mb-3" <?php echo anchor( 'carrito_Controller/borrar/all', 'Vaciar Carrito');?></a>
        <div>
            <?php if ($cart1 != null){ ?>
            <td><a class="btn btn-success" href="<?php echo base_url('venta_Controller/guardar_ventas'); ?>">Finalizar Compra</a></td>
            <?php }?>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>