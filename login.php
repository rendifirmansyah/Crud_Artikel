<?php
  session_start();
  if (isset($_SESSION['username'])) {
    header('location: index.php');
  }
  require_once("koneksi.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta charset="UTF-8">
  <title>Sign in</title>
  <link rel="stylesheet" href="css/login.css">
    <link rel="shortcut icon" href="display/aksesoris/icon/nougat.ico">

</head>
<body>
    
    <div class="login">
	<h1><img src="gambar\icon\ic_assignment_ind_white_48dp_2x.png" class="icons" style="width:33px;height:33px"/> Sign in</h1> 
    <form method="post" action="proseslogin.php">
    	<input type="text" name="username" placeholder="Email" required="required" />
        <input type="password" name="password" placeholder="Password" required="required" />
        <button type="submit" id="signin" class="button"><b>Sign in</b></button>
        <label style="color: white;">Don't have account? <a style="color: lightblue;" href="daftar.php">Register !</a></label>
    </form>
</div>

</body>
</html>
