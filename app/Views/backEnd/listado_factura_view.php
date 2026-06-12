<br>
<br>
<br>
<div class="container table-responsive">
    <h1 class="text-center text-decoration-underline">Lista de Venta</h1>
    <br>
    <table id="mytable2" class="table table-bordred table-striped table-hover text-center">

        <thead class="table-dark">
            <th>ID Venta</th>
            <th>Nombre</th>
            <th>Apeliido</th>
            <th>Fecha</th>
            <th>Accion</th>
        </thead>
        <tbody>
            <?php foreach ($venta as $row){ ?>
            <tr>
                <td>
                    <?php echo $row['venta_id'];?>
                </td>
                <td>
                    <?php echo $row['nombre'];?>
                </td>
                <td>
                    <?php echo $row['apellido'];?>
                </td>
                <td>
                    <?php echo $row['venta_fecha'];?>
                </td>
                <td>
                <a class="btn btn-success" href="<?php echo base_url('detalle_factura/'.$row['venta_id']);?>">Ver Detalle</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

</div>