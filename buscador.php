<!DOCTYPE html>

<html lang="">



<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Catrina Viajes</title>

    <link rel="icon" href="imagenes/icon.png" type="image/png">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/fontawesome-all.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script
  src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
            
</head>
<style>
    .img-responsive{
        width: 1063px;
        height: 619px;
    }
    #text-buscador{
        font-size: 11px;
        padding-bottom:17px;
        position : absolute;
        left : 0;
        right : 0;
        bottom : 0;
        margin-left : 19%;
        margin-right : 19%;
    }
    body {
  display: none;
}
</style>

<body onload="codeAddress();">

    <header style="position: relative;">

        <?php

            include_once "includes/navbar.php";

        ?>

    </header>

    <main>
      
       <!-- Div donde muestra resultados --> 
           <div id="prmkWidget"></div>
           
        <!-- Script cerca del final del body --> 
            <script type="text/javascript" id="prmkFinder" data-token="12d882d30d568faf3671ca89ca3709af" data-maindiv="#prmkWidget" data-onsearch="" data-onview="" src="https://1037224462.rsc.cdn77.org/js/dist/js/amichi-widget.js" > </script>
            
    </main>
    
    <footer>

        <?php

            include_once "includes/footer.php";

        ?>

    </footer>



</body>


<script type="text/javascript">
    function initFadeIn() {
    jQuery("body").css("visibility","visible");
    jQuery("body").css("display","none");
    jQuery("body").fadeIn(1200);
}
    function delay() {
        var secs = 100;
        setTimeout('initFadeIn()', secs);
    }

$(document).ready(function() {
    function codeAddress() {
        div = $("<div>").html("<h6 id='text-buscador'>Adicionar 5% en concepto de gastos bancarios y de reserva.</h6>");
        $("#frmAnichiSearch").css("padding-bottom", "50px");
        $("#frmAnichiSearch").prepend(div); 
        $('.logo-prmkr').remove();
        delay();
    }
    

    window.onload = codeAddress;
});

</script>
</html>

