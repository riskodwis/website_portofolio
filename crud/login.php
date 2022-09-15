<?php

require 'function.php';


if (isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($konek, "SELECT * FROM admin WHERE username = '$username'");

        // cek username
        if (mysqli_num_rows($result) === 1){

            // cek passwordnya
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row["password"])); {
            	// set session
            	$_SESSION["login"] = true;

                header("Location: index.php");
                exit;
            }

        }

        $error = true;
    }


?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" href="style2.css">
</head>
<body>



	<div align="center">
                <h1><label class="label label-info">LOGIN ADMIN</label></h1>
                </div>
        <?php if(isset($error)) : ?>
        <p style="color : red; font-style: italic; margin-left: 666px;">Username / Password salah</p>
        <?php endif; ?>

        <div class="container">
          <h1>Login</h1>
		  	<form action="" method="post">
                <label>Username</label>
                <input type="text"name="username" id="username" autofocus autocomplete="off"><br>
                <label>Password</label>
                <input type="password"name="password" id="password"><br>
                <button type="submit" name="login">LOGIN</button>
            </form>
        </div>
</body>
</html>