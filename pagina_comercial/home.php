<?php include("menu2/cabecera.php"); ?>
<?php 
$accion=(isset($_POST['accion']))?$_POST['accion']:"";

?>









<link rel="stylesheet" href="menu2/estilos.css">
<link rel="stylesheet" href="css/logo.css">


<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img width="1000" height="200" src="img\kubanner.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img width="1000" height="200" src="menu2\imgmenu\leds.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img width="1000" height="200" src="img\kitsol.png" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- Carousel wrapper -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
</script>

<br />
<h1 class="container text-center" style="font-family: Didot; font-size: 65px;">Compre sus Kits</h1>


<!-- Corusel noticias -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">

        <div class="carousel-item active">
            <div class="container">

                <div class="card"  style=
                "width: 45srem;
                background-color: #171a1f;">
                    <div style="
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        min-height: 50vh;
                        background-color:#171a1f;">
                        
                        <img src="img\kit1.webp" class="d-block w-50" width="1000px" height="400px" alt="...">
                    </div>

                    <div class="card-body" >
                    </div>
                    <div class="abs-center" style=
                    "margin: 30px">
                        <h5 class="card-title"  style="color:#fff">Resistencias</h5>
                        <p class="card-text" style="color:#fff"> 
                            RESISTENCIAS  10K
                            así:<br />
                          

                        </p>
                    </div>
                    <a href="compras.php" class="btn-m">Click para comprar </a>
                </div>
            </div>
        </div>


        <div class="carousel-item">
            <div class="container">

                <div class="card" style=
                "width: 45srem;
                background-color: #171a1f;">
                    <div style="
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        min-height: 50vh;
                        background-color: #171a1f;">
                        <img src="img\kit2.webp" width="1000px" height="400px" class="d-block w-50" alt="...">
                        <!-- <iframe width="800" height="400" style="" src="https://www.youtube.com/embed/5-ifwZmo8a0"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe> -->
                    </div>

                    <div class="card-body">
                    </div>
                    <div class="abs-center" style="margin: 30px">
                        <h5 class="card-title">...</h5>
                        <p class="card-text">
    
                                CABLES

                        </p>
                    </div>
                    <a href="compras.php" class="btn-m">Click para comprar </a>
                </div>

            </div>

        </div>

        
        <div class="carousel-item">
            <div class="container">

                <div class="card" style=
                "width: 45srem;
                background-color: #171a1f;">
                    <div style="
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        min-height: 50vh;">
                        <img src="img\kit3.webp" width="1000px" height="400px" class="d-block w-50" alt="...">
                    </div>

                    <div class="card-body">
                    </div>
                    <div class="abs-center" style="margin: 30px">
                        <h5 class="card-title">...</h5>
                        <p class="card-text">
                            
                            Kit 2

                        </p>
                    </div>
                    <a href="compras.php" class="btn-m">Click para comprar </a>

                </div>
            </div>
        </div>



        <div class="carousel-item">
            <div class="container">

                <div class="card" style=
                "width: 45srem;
                background-color: #171a1f;">
                    <div style="
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        min-height: 50vh;">
                        <img src="img\kit4.webp" width="1000px" height="400px" class="d-block w-50" alt="...">
                    </div>

                    <div class="card-body">
                    </div>
                    <div class="abs-center" style="margin: 30px">
                        <h5 class="card-title">...</h5>
                        <p class="card-text">
                           kit3
                        </p>
                    </div>
                    <a href="compras.php" class="btn-m" >Click para comprar </a>
                </div>
            </div>
        </div>

 
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<?php include("menu2/pie.php"); ?>