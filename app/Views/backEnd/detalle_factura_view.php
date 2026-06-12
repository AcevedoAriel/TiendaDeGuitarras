<br>
<br>
<br>
<section class="p-5 container">
    <h1 class="text-center text-decoration-underline">Detalle de Venta</h1>
    <a class="btn btn-success" href="<?php echo base_url('lista_factura'); ?>">Volver</a>
    <br>
    <br>
    <table id="mytable" class="table table-bordred table-striped table-hover">  
        <thead class="table-dark text-center">
            <th>ID Factura</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Fecha</th>
        </thead>
        <tbody class="text-center">
                <tr>
                    <td>
                        <?php echo $detalle_ventas['0']['id_venta'];?>
                    </td>
                    <td>
                        <?php echo $detalle_ventas['0']['nombre'];?>
                    </td>
                    <td>
                        <?php echo $detalle_ventas['0']['apellido'];?>
                    </td>
                    <td>
                        <?php echo $detalle_ventas['0']['venta_fecha'];?>
                    </td>
                </tr>
        </tbody>
        <thead class="table-dark text-center">
            <th>Producto</th>
            <th>Descripcion</th>
            <th>Cantidad</th>
            <th>SubTotal</th>
        </thead>
        <tbody class="text-center">
            <?php
            foreach ($detalle_ventas as $row){ ?>
                <tr>
                    <td>
                        <?php echo $row['producto_nombre'];?>
                    </td>
                    <td>
                        <?php echo $row['producto_descripcion'];?>
                    </td>
                    <td>
                        <?php echo $row['detalle_cantidad'];?>
                    </td>
                    <td>
                        <?php echo number_format($row['detalle_precio'],2); ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</section>