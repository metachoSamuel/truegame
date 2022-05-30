
<?php include("../header.php"); ?>
<link rel="stylesheet" href="../../assets/css/register.css">

<div class="registro">
    <form action="login.php">

        <input type="text" name="nombre_1" placeholder="Enter your name 1">
        
        <input type="text" name="apellido_1" placeholder="Enter your last name 1">
        
        <input type="email" name="email" id="" placeholder="Enter you email">
        <input type="text" name="username" placeholder="Enter your username">
        <input type="password" name="password" placeholder="Enter your password">

        
        <input type="submit" value="send" class="boton">

    </form>
</div>
<?php

    require "connected.php"; 

    if(!empty($_POST['nombre_1']) && !empty($_POST['apellido_1']) && !empty($_POST['email']) && !empty('password')){
        
        $sql = "INSERT INTO users (nombre_1, apellido_1, email, password) VALUES (:nombre_1, :apellido_1, password)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":nombre_1")

    }

?>