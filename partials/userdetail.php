<?php session_start(); ?>

<h2> Bienvenido. <?= $user['email']; ?></h2>
<br>Ingresaste satisfactoriamente


<div id="cargaLineal"></div>


<script type="text/javascript">
    $(document).ready(function(){
        $('#cargaLineal').load('test.php');
    });
</script> 


<a href="logout.php">
    Cerrar sesion
</a>
