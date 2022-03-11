<!DOCTYPE html>

<html lang="">



<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Catrina Viajes</title>

    <link rel="icon"   href="imagenes/icon.png" type="image/png">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/fontawesome-all.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>



<body>

    <header>

        <?php

            include_once "includes/navbar.php";

        ?>

    </header>

    <main>

        <div class="jumbotron jumbotron-fluid bg-ofertas">

            <div class="container pd-t-100">

                <div class="row align-items-center">

                    <div class="col-xs-12 offset-sm-1 col-sm-12 col-md-12 col-xl-8 font-sansbold white ">

                        <h1 class="fs-80 sub">OFERTAS</h1>

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

                    <a href="#brasil">

                        <div class="card2" style="width: 20rem; ">

                            <img class="card-img-top" src="imagenes/ofertas/argentina_web5.png" alt="Card image cap">

                            <p>Ventajas de comprar en Catrina Viajes</p>

                        </div>

                    </a>

                    <a href="#lowcost">

                        <div class="card2" style="width: 20rem; ">

                            <img class="card-img-top" src="imagenes/ofertas/merlo_febrero_web5.png" alt="Card image cap">

                            <p>Merlo - Escapadas por Argentina</p>

                        </div>

                    </a>

                    <a href="#cuba">

                        <div class="card2" style="width: 20rem; ">

                            <img class="card-img-top" src="imagenes/ofertas/mar_del_plata_web4.png" alt="Card image cap">

                            <p>Argentina - Costa Argentina Temporada 2022</p>

                        </div>

                    </a>

                </div>

            </div>

            <div class="row justify-content-center">

                <div class="card-deck mg-btm-20">

                    <a href="#europa1">

                        <div class="card2" style="width: 20rem; ">

                            <img class="card-img-top" src="imagenes/ofertas/norte_argentino_2022.png" alt="Card image cap">

                            <p>Colores del Norte - Temporada 2022</p>

                        </div>

                    </a>

                    <a href="#europa2">

                        <div class="card2" style="width: 20rem; ">

                            <img class="card-img-top" src="imagenes/ofertas/San_Rafael_Web2.png" alt="Card image cap">

                            <p>Mendoza - Temporada 2022</p>

                        </div>

                    </a>

                    <a href="#europa3">

                        <div class="card2" style="width: 20rem; ">

                            <img class="card-img-top" src="imagenes/ofertas/Termas_copahue_web6.png" alt="Card image cap">

                            <p>Termas - Copahue y Caviahue 2022</p>

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

