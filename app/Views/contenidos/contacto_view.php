<br>
<div class="row m-5 align-self-md-center">
    <div class="col text-center align-items-center">
        <br>
        <br>
        <br>
        <br>
        <h1>Contacto</h1>
        <p><span class="fw-bold">Direccion:</span> Junin 1024, (Corrientes capital, Argentina)</p>
        <p><span class="fw-bold">Email:</span> giutarraspora2022@gmail.com</p>
        <p><span class="fw-bold">Telefonos: </span>3794-869857 || 3794-453433</p>
    </div>
    <div class="col m-5 p-3">
        <!--Si obtenemos los datos con getFlashdata fail, mostraremos un mensaje de fallo-->
        <?php if(!empty(session()->getFlashdata('fallo'))) : ?>
        <div class="alert alert-danger">
            <?= session()->getFlashdata('fallo'); ?>
        </div>
        <?php endif ?>
        <!--De lo contrario mostrar los datos correcto-->
        <?php if(!empty(session ()->getFlashdata('correcto'))) : ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('correcto'); ?>
        </div>
        <?php endif ?>

        <?php echo form_open ('registrar_consulta');?>
        <h1 class="text-center">Déjanos tu consulta</h1>
        <br>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <?php echo form_input(['name'=>'nombre', 'id'=>'nombre', 'class'=>'form-control', 'value'=>set_value('nombre')]); ?>
            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'nombre'): '' ?></span>
        </div>
        <div class="mb-3">
            <label for="correo" class="form-label">Email</label>
            <?php echo form_input(['name'=>'correo', 'id'=>'correo', 'class'=>'form-control', 'value'=>set_value('correo')]); ?>
            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'correo'): '' ?></span>
        </div>
        <div class="mb-3">
            <label for="motivo" class="form-label">Motivo</label>
            <?php echo form_input(['name'=>'motivo', 'id'=>'motivo', 'class'=>'form-control', 'value'=>set_value('motivo')]); ?>
            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'motivo'): '' ?></span>
        </div>
        <div class="mb-3">
            <label for="texto" class="form-label">Deje su comentario</label>
            <?php echo form_textarea(['name'=>'texto_consulta', 'id'=>'texto_consulta', 'class'=>'form-control', 'value'=>set_value('texto_consulta')]); ?>
            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'texto_consulta'): '' ?></span>
        </div>
        <?php echo form_submit('Enviar','Enviar',"class='btn btn-danger'");?>
        <?php echo form_close(); ?>
    </div>
</div>
<hr>
</div>
<div class="container">
    <div class="row rounded-3">
        <h4 class="text-center mb-3">Nuestra Ubicacion - (Junin 1024, Corrientes Capital, Argentina)</h4>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3540.0577947739835!2d-58.839953184466!3d-27.467460023184668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94456ca462a4e507%3A0xb28193eaaa39370c!2sJunin%201024%2C%20W3400AVX%20Corrientes!5e0!3m2!1ses!2sar!4v1651071287062!5m2!1ses!2sar"
            width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>