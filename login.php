<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: /truegame');
  }
  require 'database.php';

  if (!empty($_POST['username']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id_usuario, username, password FROM users WHERE username = :username');
    $records->bindParam(':username', $_POST['username']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id_usuario'];
      header('Location: /truegame');
    } else {
      $message = 'Sorry, those credentials do not match';
    }
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <?php require "partials/header.php" ?>
    <link rel="stylesheet" href="assets/css/register.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Aclonica&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Lora&display=swap');
    </style>

    <h2>Iniciar sesion</h2>

    <div class="registro">
        <?php if (!empty($message)) : ?>
            <p><?= $message ?></p>
        <?php endif; ?>
        <form action="login.php" method="POST">
            <input type="text" placeholder="username" name="username">
            <div style="padding: 2%;"></div>
            <input type="password" placeholder="password" name="password">
            <div style="padding: 2%;"></div>

            <input type="submit" value="Ingresar" class="boton">
        </form>
    </div>

</body>

</html>