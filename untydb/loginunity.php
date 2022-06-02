<?php
    $server = 'localhost';
	$usernamedb = 'root';
	$passwordb = 'danna';
	$database = 'truedatabase';

    $con = mysqli_connect($server, $usernamedb, $passwordb, $database);

    $username = $_POST['username'];
    $password = $_POST['password'];

    $namecheckquery = "SELECT username FROM users WHERE username='" . $username . "';";
    $namecheck = mysqli_query($con, $namecheckquery) or die("2:Name check query failed");

    if(mysqli_num_rows($namecheck)!=1){
        echo "5: Either no user whit name, or more than one";
        exit();
    }

    

?>