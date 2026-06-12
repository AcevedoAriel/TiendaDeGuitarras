<br>
<hr>
<br>

<div class="container w-77 mt-5 rounded">
    <div class="row align-items-stretch">
        <div class="col bg d-none d-lg-block d-md-none d-ms-none col-md-5 col-lg-5 col-xl-6 rounded">
            <div class="text-end">
                <!--<img src="public/assets/img/logo-inicio-sesion.png" alt="logo1">-->
            </div>
        </div>
        <!--Inicio Sesion-->
        <div class="col bg-white p-5 rounded ">
            <div class="alert-danger text-center" role="alert">
                <?php $session = session(); ?>
                <?= $session->getFlashdata('mensaje');?>
            </div>
            <h2 class="fw-bold text-center py-5">Inicio Sesión</h2>
            <?php echo form_open ('verificar_login');?>
            <div class="mb-3">
                <label for="mail" class="form-label">Correo Electronico</label>
                <input type="mail" class="form-control" name="mail" id="mail" placeholder="abc@hotmail.com" value="<?=set_value('mail');?>">
                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'mail'): '' ?></span>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="password" id="password" value="<?=set_value('password');?>">
                <span class="text-danger"><?= isset($validation) ? display_error($validation, 'password'): '' ?></span>
            </div>
            <div class="d-grid">
                <?php echo form_submit('iniciarsesion','Inicio de Sesion',"class='btn btn-danger'");?>
            </div>
            <?php echo form_close(); ?>
            <p class="m-5">¿No tienes cuenta? <a class="link-danger" href="<?php echo base_url('registrarse');?>">Regístrate</a></p>
        </div>
    </div>
</div>