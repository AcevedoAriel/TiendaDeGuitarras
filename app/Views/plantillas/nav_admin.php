<!------------------------------------Navegador del administrador------------------------------>
<header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url('user_admin');?>"><img src="<?php echo base_url('public/assets/img/admin.jpg');?> " height="43" width="75 " alt="administrador"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo base_url('ver_consulta');?>">Ver Consulta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo base_url('lista_productos');?>">Listar Productos</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" href="<?php echo base_url('lista_factura');?>">Listar Ventas</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" href="<?php echo base_url('agregar_producto');?>">Registrar Producto</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" href="<?php echo base_url('gestionar');?>">Gestionar Producto</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#"><?php echo session('apellido');?></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('logout');?>"><img width="30" src="<?php echo base_url('public/assets/img/salir3.png'); ?>"></a>
                    </li>
            </div>
        </div>
    </nav>
</header>
<br>