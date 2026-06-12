<!------------------------------------Navegador------------------------------>

<header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark" style="font-size: 18px">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url('inicio');?>"><img src="<?php echo base_url('public/assets/img/guitarra11.jpg');?>" width="175" alt="logo-1" class="rounded"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0 mt-2">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page " href="<?php echo base_url('inicio');?>">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('quienessomos');?>">Quienes Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('comercializacion');?>">Comercializacion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('productos_cat');?>">Catalogo</a>
                    </li>
                </ul>
                <!-----------------------------------------Inicio del usuario---------------------------------------------------------->
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 mt-2">
                    <?php if (session('login')){ ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url( 'ver_carrito');?>"><img width="30" src="<?php echo base_url('public/assets/img/carrito.png'); ?>"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Hola, <?php echo session('apellido');?>
                        </a>
                    </li>
                    <li class="nav-item rounded">
                        <a class="nav-link" href="<?php echo base_url('logout');?>"><img width="30" src="<?php echo base_url('public/assets/img/salir3.png'); ?>"></a>
                    </li>
                    <!-----------------------------------------Visitante de la pagina---------------------------------------------------------->
                    <?php } else{ ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('iniciarsesion');?>"><img width="30" src="<?php echo base_url('public/assets/img/login.png'); ?>"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('registrarse');?>">Registrarse</a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>

</header>