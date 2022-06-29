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
        <div class="jumbotron jumbotron-fluid bg-contacto">
            <div class="container pd-t-100">
                <div class="row align-items-center">
                    <div class="col-xs-12 offset-sm-1 col-sm-12 col-md-12 col-xl-9 font-sansbold white ">
                        <h1 id="contacto-title"class="fs-80 sub">CONTACTENOS</h1>
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
                <div class="col-12 bg-gradient formulario">
                    <div class="row">
                        <div class="col-12 text-center white">
                            <h2>ENVIANOS UN MENSAJE!</h2>
                        </div>
                    </div>
                    <form action="https://formspree.io/f/xknpbpve" method="POST">
                        <div class="form-row">
                            <div class="col-md-12 col-xl-6">
                                <div class="form-group white">
                                    <input required type="text" name="Nombre" class="form-control " id="nombre" placeholder="Nombre (requerido)">
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-6">
                                <div class="form-group white">
                                    <input required type="email" name= "Mail" class="form-control " id="mail" placeholder="Mail (requerido)">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 col-xl-6">
                                <div class="form-group white">
                                    <input required type="text" name="Asunto" class="form-control " id="asunto" placeholder="Asunto (requerido)">
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-6">
                                <div class="form-group white">
                                    <input type="number" name="Telefono de contacto" class="form-control " id="telefono" placeholder="Telefono">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12">
                                <div class="form-group white">
                                    <label  style="margin-left:10px;" for="mensaje">Mensaje (requerido)</label>
                                    <input required style="height: 50px" type="text" name="Mensaje" class="form-control " id="mensaje">
                                </div>
                            </div>
                        </div>
                        <button type="submit" id="btnEnviar">Enviar</button>
                    </form>
                </div>
                <div class="col-12 mg-t-35">
                    <div class="row">
                        <div class="col-md-8 col-xs-12">
                            <div class="row">
                                <h5>Seguinos en nuestras redes!</h5>
                            </div>
                            <div class="row">
                                <a href="https://www.facebook.com/lacatrinaviajes/">
                                    <img style="width:32px; margin-right:10px;" src="imagenes/iconos/facebook2.png" alt="">
                                </a>
                                <a href="https://www.instagram.com/lacatrinaviajes/?hl=es-la">
                                    <img style="width:32px;" src="imagenes/iconos/instagram2.png" alt="">
                                </a>
                            </div>
                            <div class="row mg-t-35">
                                <h5>Horarios de atencion</h5>

                            </div>
                            <div class="row">
                                <p class="rosa-int fs-15">
                                    Lunes a Viernes de 10 hs a 18 hs.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <p><img style="width: 24px;" src="imagenes/iconos/correo2.png" alt=""> lacatrinaviajes@gmail.com</p>
                            <p><img style="width: 24px;" src="imagenes/iconos/whatsapp2.png" alt=""> +54 9 11 5701-2140</p>
                            <p><img style="width: 24px;" src="imagenes/iconos/whatsapp2.png" alt=""> +54 9 11 3409-0355</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12  mg-t-35">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2742.962355572222!2d-58.459078275336786!3d-34.56399153463971!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb5e12336eaa7%3A0xf3b49922ca6b6ab7!2sLa+Catrina+Viajes!5e0!3m2!1ses!2sar!4v1555623453411!5m2!1ses!2sar" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-12"></div>
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
