<?php
$items = [
    'HOME' => 'index.php',
    'OFERTAS' => 'ofertas.php',
    //'AEREOS' => 'aereos.php',
    'QUIENES SOMOS' => 'quienesSomos.php',
    'NUESTROS PASAJEROS' => 'nuestrosPasajeros.php',
    'ARGENTINA ONLINE' => 'buscador.php',
    'CONTACTENOS' => 'contacto.php'
];
?>
<nav class="mnu">
    <div class="container1">
        <div class="logo" id="logo">
            <h1>
                <a id="a_navbar" href="index.php"><img src="imagenes/log.png"></a>
            </h1>
        </div>
        <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
        <input type="checkbox" id="drop">
        <ul class="menu mt-1">
            <?php foreach ($items as $title => $link) {
                $active = ($_SERVER['PHP_SELF'] == "/" . $link) ? " active" : ""; ?>
                <li class="mr-lg-4 mr-3<?php echo $active; ?>"><a href="<?php echo $link; ?>"><?php echo $title; ?></a></li>
            <?php } ?>
        </ul>
    </div>
</nav>