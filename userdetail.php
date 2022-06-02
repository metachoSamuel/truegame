<?php session_start(); ?>

<br> Bienvenido. <?= $user['email']; ?>
<br>Ingresaste satisfactoriamente
<a href="logout.php">
    Cerrar sesion
</a>