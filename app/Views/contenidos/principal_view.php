<!-------------------------------------Carousel----------------------------------------->
<section>
    <br>
    <br>
    <br>
    <div class="container-fluid p-5 text-center">
        <h1>Bienvenido a Guitarras Pora</h1>
        <h4>Encontraras las mejores guitarras de calidad</h4>
        <div id="carouselExampleCaptions" class="carousel slide rounded" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner shadow rounded">
                <div class="carousel-item active">
                    <img src="<?php echo base_url('public/assets/img/carousel/guitarra.jpg');?>" class="d-block d-flex w-100 img-fluid" alt="guitarra">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url('public/assets/img/carousel/guitarra1.jpg');?>" class="d-block w-100 img-fluid" alt="guitarra1">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url('public/assets/img/carousel/guitarra2.jpg');?>" class="d-block w-100 img-fluid" alt="guitarra2">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
        </div>
    </div>
</section>

<div class="container p-5">
    <h1 class="text-center">Proximamente nuevas guitarras</h1>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <div class="col">
            <div class="card h-100 shadow  bg-warning">
                <img src="<?php echo base_url('public/assets/img/productos/guitarra1.jpg');?>" class="card-img-top rounded w-100" alt="guitarra-electrica">
                <div class="card-body">
                    <h5 class="card-title">Guitarra eléctrica Epiphone 2017</h5>
                    <p class="card-text">Esta Les Paul cuenta con pastillas, tono independiente y controles de volumen para cada elemento, lo que produce distintos resultados.Es ideal para el rock.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 shadow bg-warning">
                <img src="<?php echo base_url('public/assets/img/productos/guitarra2.jpg');?>" class="card-img-top rounded img-fluid" alt="gitarra-criolla">
                <div class="card-body">
                    <h5 class="card-title">Guitarra criolla clásica Valencia 100</h5>
                    <p class="card-text">La tapa de tilo tiene un peso y una densidad que te ofrecen un sonido con más cuerpo. Esta madera presenta un buen equilibrio de graves.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 shadow bg-warning">
                <img src="<?php echo base_url('public/assets/img/productos/guitarra3.jpeg');?>" class="card-img-top rounded img-fluid" alt="guitarra-acustica">
                <div class="card-body">
                    <h5 class="card-title">Guitarra acústica Parquer Custom GAC109MC</h5>
                    <p class="card-text">Las cuerdas de metal se caracterizan por su bajo estiramiento y resistencia a la corrosión y abrasión. Son más duraderas, sólidas y generan un sonido brillante y claro.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card  h-100 shadow bg-warning">
                <img src="<?php echo base_url('public/assets/img/productos/guitarra4.jpg');?>" class=" rounded img-fluid" alt="guitarra4">
                <div class="card-body">
                    <h5 class="card-title">Guitarra eléctrica Alabama JM-303</h5>
                    <p class="card-text">Esta guitarra jazzmaster es un modelo específico de Alabama. Tiene un cuerpo contorneado y longitud de escala de 25 pulgadas y media, con controles de volumen y tono independientes y trémolo flotante.</p>
                </div>
            </div>
        </div>
    </div>
</div>