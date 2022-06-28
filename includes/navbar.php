<?php
//$img = ($_SERVER['PHP_SELF'] == "/nuestrosproductos.php") ? "logoproductos.jpg" : "log.png";
$img = ($_SERVER['PHP_SELF'] == "/nuestrosproductos.php") ? "logoproductosnow2.png" : "log.png";
?>
<nav class="mnu">
    <div class="container1">
        <div class="logo" id="logo">
            <h1>
                <a id="a_navbar" href="index.php"><img src="imagenes/<?php echo $img; ?>"></a>
            </h1>
        </div>
        <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
        <input type="checkbox" id="drop">
        <ul class="menu mt-1">
            <li class="mr-lg-4 mr-3 active"><a href="index.php">HOME</a></li>
            <li class="mr-lg-4 mr-3"><a href="ofertas.php" class="scroll">OFERTAS</a></li>
            <li class="mr-lg-4 mr-3"><a href="aereos.php" class="scroll">AEREOS</a></li>
            <li class="mr-lg-4 mr-3"><a href="quienesSomos.php" class="scroll">QUIENES SOMOS</a></li>
            <li class="mr-lg-4 mr-3"><a href="nuestrosPasajeros.php" class="scroll">NUESTROS PASAJEROS</a></li>
            <li class="mr-lg-4 mr-3" id="buscador"><a href="buscador.php" class="scroll">RESERVAS ONLINE</a>
            <li class="mr-lg-4 mr-3"><a href="contacto.php" class="scroll">CONTACTENOS</a>
            </li>
        </ul>
    </div>
</nav>