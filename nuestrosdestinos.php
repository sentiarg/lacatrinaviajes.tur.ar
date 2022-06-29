<!DOCTYPE html>
<html lang="">
<head>
    <?php include_once "includes/head.php"; ?>
</head>

<body>
    <header>
        <?php
            include_once "includes/navbar.php";
        ?>
    </header>
    <main>
        <div class="jumbotron jumbotron-fluid bg-nuestrosdestinos">
            <div class="container pd-t-100">
                <div class="row align-items-center">
                    <div class=" col-sm-12 col-md-12 col-xl-8 font-sansbold white texto">
                        <h1 class="fs-80 sub">NUESTROS DESTINOS</h1>
                    </div>
                </div>
                <div class="row botones-h">
                    <div class="d-none d-xl-block offset-sm-10 col-xl-2">
                        <a href="https://www.facebook.com/lacatrinaviajes/"><img class="icon-h" src="imagenes/iconos/facebook.png" alt=""></a>
                        <a href="https://www.instagram.com/lacatrinaviajes/?hl=es-la"><img class="icon-h" src="imagenes/iconos/instagram.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pd-b-50 pd-t-30">
            <div class="row justify-content-center">
                <div class="card-deck mg-btm-20">
                    <a href="ofertas.php">
                        <div class="card" style="width: 18rem; ">
                            <img class="card-img-top" src="imagenes/destinos/Alacarta.jpg" alt="Card image cap">
                            <div class="card-img-overlay">
                                <h1 class="card-title white font-club fs-50">A la carta</h1>
                            </div>
                        </div>
                    </a>
                    <a href="ofertas.php">
                        <div class="card" style="width: 18rem; ">
                            <img class="card-img-top" src="imagenes/destinos/Argentina.jpg" alt="Card image cap">

                            <div class="card-img-overlay">
                                <h1 class="card-title white font-club fs-50">Argentina</h1>
                            </div>
                        </div>
                    </a>
                    <a href="ofertas.php">
                        <div class="card" style="width: 18rem; ">
                            <img class="card-img-top" src="imagenes/destinos/Caribe.jpeg" alt="Card image cap">
                            <div class="card-img-overlay">
                                <h1 class="card-title white font-club fs-50">Caribe</h1>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="card-deck mg-btm-20 ">
                    <a href="ofertas.php">
                        <div class="card" style="width: 18rem; ">
                            <img class="card-img-top" src="imagenes/destinos/Europa.jpg" alt="Card image cap">
                            <div class="card-img-overlay">
                                <h1 class="card-title white font-club fs-50">Europa</h1>
                            </div>
                        </div>
                    </a>
                    <a href="ofertas.php">
                        <div class="card" style="width: 18rem; ">
                            <img class="card-img-top" src="imagenes/destinos/Exoticos.jpg" alt="Card image cap">
                            <div class="card-img-overlay">
                                <h1 class="card-title white font-club fs-50">Exoticos</h1>
                            </div>
                        </div>
                    </a>
                    <a href="ofertas.php">
                        <div class="card" style="width: 18rem; ">
                            <img class="card-img-top" src="imagenes/destinos/Salidas_grupales.jpg" alt="Card image cap">
                            <div class="card-img-overlay">
                                <h1 class="card-title white font-club fs-50">Salidas grupales</h1>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <?php
            include_once "includes/footer.php";
        ?>
    </footer>




</body>

</html>
