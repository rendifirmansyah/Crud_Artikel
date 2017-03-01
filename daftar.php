<?php
session_start();
if (isset($_SESSION['username'])) {
  header('location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<!--  <meta charset="UTF-8">-->
    <title>Sign Up</title>
  <link rel="stylesheet" href="css/daftar.css">
</head>
<body>
  <div class="login">
	<h1><img src="gambar\icon\ic_assignment_white_48dp_2x.png" class="icons" style="width:33px;height:33px"/> Sign Up</h1>
    <form method="post" action="prosesdaftar.php">
    	<input type="email" name="username" placeholder="Create a Email" required autofocus />
        <input type="password" name="password" placeholder="Create a Password" required />
        <button type="submit" id="signup" class="button"><b>Sign Up</b></button><br />
        <label style="color: white;">Already have account? <a style="color: lightblue;" href="login.php">Sign in !</a></label>
    </form>
</div>
</body>
</html>





