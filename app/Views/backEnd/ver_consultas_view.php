<br>
<br>
<br>
<div class="container text-center table-responsive">
    <h1 class="text-center text-decoration-underline">Listado de Consultas</h1>

    <table id="mytable2" class="table table-responsive table-bordred table-striped table-hover m-4">

        <thead class="table-dark">
            <th>Nombre</th>
            <th>Motivo</th>
            <th>Correo</th>
            <th>Comentario</th>
        </thead>
        <tbody>
            <?php foreach ($consulta as $row){ ?>
            <tr>
                <td>
                    <?php echo $row['nombre'];?>
                </td>
                <td>
                    <?php echo $row['motivo'];?>
                </td>
                <td>
                    <?php echo $row['correo'];?>
                </td>
                <td>
                    <?php echo $row['texto_consulta'];?>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

</div>