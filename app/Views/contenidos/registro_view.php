<br>
<br>
<br>
<h1 class="text-center p-3">Registrate</h1>
<div class="container text-center align-items-center">
    <!--Si obtenemos los datos con getFlashdata fail, mostraremos un mensaje de fallo-->
    <?php if(!empty(session()->getFlashdata('fallo'))) : ?>
    <div class="alert alert-danger">
        <?= session()->getFlashdata('fallo'); ?>
    </div>
    <?php endif ?>
    <!--De lo contrario mostrar los datos correcto-->
    <?php if(!empty(session ()->getFlashdata('correcto'))) : ?>
    <div class="alert alert-success ">
        <?= session()->getFlashdata('correcto'); ?>
    </div>
    <?php endif ?>

    <?php echo form_open('registrar_cliente');?>
    <section class="registrarse">
        <div class="mb-3 ">
            <label for="exampleInputEmail1 " class="form-label ">Ingrese Nombre</label>
            <?php echo form_input(['name'=>'nombre', 'id'=>'nombre', 'class'=>'form-control', 'value'=>set_value('nombre')]); ?>
            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'nombre'): '' ?></span>
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Ingrese Apellido</label>
            <?php echo form_input(['name'=>'apellido', 'id'=>'apellido', 'class'=>'form-control', 'value'=>set_value('apellido')]); ?>
            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'apellido'): '' ?></span>
        </div>
        <div class="mb-3">
            <label for="dni" class="form-label">Ingrese D.N.I</label>
            <?php echo form_input(['name'=>'dni', 'id'=>'dni', 'class'=>'form-control', 'value'=>set_value('dni')]); ?>
            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'dni'): '' ?></span>
        </div>
        <div class="mb-3">
            <label for="pais" class="form-label">Ingrese Pais</label>
            <?php echo form_input(['name'=>'pais', 'id'=>'pais', 'class'=>'form-control', 'value'=>set_value('pais')]); ?>
            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'pais'): '' ?></span>
        </div>
        <div class="mb-3">
            <label for="ciudad" class="form-label">Ingrese Ciudad</label>
            <?php echo form_input(['name'=>'ciudad', 'id'=>'ciudad', 'class'=>'form-control', 'value'=>set_value('ciudad')]); ?>
            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'ciudad'): '' ?></span>
        </div>
        <div class="mb-3">
            <label for="direccion" class="form-label">Ingrese Direccion</label>
            <?php echo form_input(['name'=>'direccion', 'id'=>'direccion', 'class'=>'form-control', 'value'=>set_value('direccion')]); ?>
            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'direccion'): '' ?></span>
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Ingrese Celular</label>
            <?php echo form_input(['name'=>'telefono', 'id'=>'telefono', 'class'=>'form-control', 'value'=>set_value('telefono')]); ?>
            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'telefono'): '' ?></span>
        </div>
        <div class="mb-3">
            <label for="mail" class="form-label">Ingrese Email</label>
            <?php echo form_input(['name'=>'mail', 'id'=>'mail', 'class'=>'form-control', 'value'=>set_value('mail')]); ?>
            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'mail'): '' ?></span>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Ingrese Contraseña</label>
            <?php echo form_password(['name'=>'password', 'id'=>'password', 'class'=>'form-control', 'value'=>set_value('password')]); ?>
            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'password'): '' ?></span>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Repetir Contraseña</label>
            <?php echo form_password(['name'=>'password1', 'id'=>'password1', 'class'=>'form-control', 'value'=>set_value('password1')]); ?>
            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'password1'): '' ?></span>
        </div>
        <div class="mb-3 d-grid">
            <?php echo form_submit('Registrase' , 'Registrarse' , "class ='btn btn-danger'");?>
            <?php echo form_close();?>
        </div>
    </section>
</div>