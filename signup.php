<?php
require 'database.php';

$message = '';

if (!empty($_POST['nombre']) && !empty($_POST['apellido'])&& !empty($_POST['email']) && !empty($_POST['username'])&& !empty($_POST['password'])) {
    $sql = "INSERT INTO  user (nombre, apellido, email, username, password) VALUES (:nombre, :apellido, :email, :username, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre',$_POST['nombre']);
    $stmt->bindParam(':apellido',$_POST['apellido']);
    $stmt->bindParam(':email',$_POST['email']);
    $stmt->bindParam(':username', $_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
        $message = 'Successfully created new User';
    } else {
        $message = 'Sorry there must have been an issue crating your account';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>

<body>
    <?php require "partials/header.php" ?>
    
    <link rel="stylesheet" href="assets/css/register.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Aclonica&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Lora&display=swap');
    </style>
    <div class="registro">
        <h2>Registro</h2>
        <?php if(!empty($message)): ?>
            <p><?= $message ?></p>
        <?php endif; ?>
        <form action="" method="POST">
            <input type="text" name="nombre" placeholder="nombres">
            <input type="text" name="apellido" placeholder="apellidos">
            <input type="text" name="email" placeholder="email">
            <input type="text" name="username" placeholder="nombre de usuario">
            <input type="password" name="password" placeholder="contraseña">
            <input type="submit" value="Registrar" class="boton">
        </form>
    </div>

</body>

</html>