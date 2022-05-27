<?php 

//	$con=msyqli_connect('localhost', 'root', 'danna', );
	$con = mysqli_connect('localhost', 'root', 'danna', 'truedatabase');

	#Check that connection happened

	if (mysqli_connect_errno()){
		echo "1";
		exit();
	}else if ($con){
        echo "0";
        exit();
    }
	
	/*$username = $_POST["username"];
	$password = $_POST["password"];

	$namecheckquery = "SELECT username FROM users WHERE username='" . $username ."';";

	$namecheck = mysqli_query($con, $namecheckquery) or die("2");

	if (mysqli_num_rows($namecheck) > 0){
		echo "3:Name aredu users";
		exit();
	}

	$salt = "\$5\$rounds=5000\$" . "steamedhams" . $username . "\$";
	$hash = crypt($password, $salt);

	$insertuserquery = "INSERT INTO users (username, hash, salt) VALUES	('" . $username . "','" . $hash . "','" . $salt . "');";
	mysqli_query($con, $insertuserquery) or die ("4: Insert Plater query failed"); 

	echo("0");*/

?>