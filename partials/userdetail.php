<?php session_start(); ?>
<script src="librerias/plotly-2.12.1.min.js" ></script>
<h2> Bienvenido. <?= $user['username']; ?></h2>
<br>Ingresaste satisfactoriamente

<div id="graficaLineal"></div>

    <script type="text/javascript">
        var trace1 = {
            x: [1, 2, 3, 4],
            y: [10, 15, 30, 17],
            type: 'scatter'
        }

        var trace2 = {
            x: [1, 2, 3, 4],
            y: [16, 5, 11, 9],
            type: 'scatter'
        }

        var data = [trace1, trace2];

        Plotly.newPlot('graficaLineal', data);
    </script>

<div id="cargaLineal"></div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#cargaLineal').load('test.php');
    });
</script> 


<a href="logout.php">
    Cerrar sesion
</a>
