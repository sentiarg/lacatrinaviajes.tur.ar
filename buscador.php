<!DOCTYPE html>
<html lang="">
<head>
    <?php include_once "includes/head.php"; ?>
</head>

<style>
    .img-responsive {
        width: 1063px;
        height: 619px;
    }

    #text-buscador {
        font-size: 11px;
        padding-bottom: 17px;
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        margin-left: 19%;
        margin-right: 19%;
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
        <script type="text/javascript" id="prmkFinder" data-token="12d882d30d568faf3671ca89ca3709af" data-maindiv="#prmkWidget" data-onsearch="" data-onview="" src="https://1037224462.rsc.cdn77.org/js/dist/js/amichi-widget.js"> </script>

    </main>

    <footer>

        <?php

        include_once "includes/footer.php";

        ?>

    </footer>



</body>


<script type="text/javascript">
    function initFadeIn() {
        jQuery("body").css("visibility", "visible");
        jQuery("body").css("display", "none");
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