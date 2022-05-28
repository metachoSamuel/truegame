<?php

$db_host="localhost";
$db_user="root";
$db_password="danna";
$db_name="truedatabase";
$db_table_name="users";

$db_connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if(!$db_connection){
    die("Connected to database failed");
}

$subs_name_1 = utf8_decode($_POST['nombre_1']);
$subs_name_2 = utf8_decode($_POST['nombre_2']);
$subs_lastname_1 = utf8_decode($_POST['apellido_1']);
$subs_lastname_2 = utf8_decode($_POST['apellido_2']);
$subs_email = utf8_decode($_POST['email']);
$subs_username = utf8_decode($_POST['username']);
$password = utf8_decode($_POST['password']);


$namecheckquery = "SELECT * FROM users WHERE username='" . $subs_username ."';";

$namecheck = mysqli_query($db_connection, $namecheckquery) or die("2");

if(mysqli_num_rows($namecheck)>0){
    echo "Pailas";
}else{
    $insert_value = "INSERT INTO" . $db_name . "." . $db_table_name."('nombre_1', 'nombre_2', 'apellido_1', 'apellido_2', 'email', 'username', 'password') VALUES ('" .$subs_name_1. "','" .$subs_name_2. "','" .$subs_lastname_1. "','" .$subs_lastname_2. "','" .$subs_email. "','" .$subs_username. "','" .$subs_password. "');";

    
    $retry_value = mysqli_query($$db_connection, $insert_value);
    if(!$retry_value){
        die();
    }
    echo "Coronamos";
}

mysqli_close($db_connection);   


?>