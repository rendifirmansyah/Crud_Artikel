<?php
session_start();
if(!isset($_SESSION['username'])) {
	header('location:login.php');
}
else {
	$username = $_SESSION['username'];
}
try {
	$koneksi = new PDO("mysql:host=localhost;port=3306;dbname=artikel","root","");
	//echo "koneksi berhasil";

	}catch(PDOException $e)
	{
	echo $e->getMessage();
	}
$hasil = $koneksi->prepare("SELECT * FROM artikel");
$hasil->execute();
$data = $hasil->fetchAll();

function excerpt($string){
                $string = substr($string, 0, 250);
                return $string . "...";
            }
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/indexstyle.css">
	<title></title>
	<style>
	body {
		background-color:white; 
		margin: 0 auto;

	}
	ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: yellow;
    font-size: 1.5rem;
    text-align: center;
    padding: 10px 1px;
    text-decoration: none;
}
</style>
</head>
<body>
	<ul>
  <li><a class="active" href="tambahartikel.php">  New Article</a></li>
  <li style="margin-left: 83%;"><a href="logout2.php">Logout</a></li>
</ul>
<br>
<?php

foreach ($data as $key) {

?>
<div class="container">

	<div class="div-card" style="width:100%;">
	<div class="div-pri-content">
	<font color="yellow" font-size:4;>
	<div><p>Judul: <?= $key['judul']?></p></div>
	<hr>
	<div style="display:block;width:100%;">Isi: <?= $key['isi']?></div></font>
	<a href="read_more.php?id=<?=$key['id'];?>"><button class="containers"><font color="red" font-size:1;> Read More...</button></a>
	<br>
</div>
<table style="width:100%;color: #fff; background-color: #616161">
	<tr>
		<td><a class="buttons" href="edit.php?id=<?=$key['id'];?>">Edit</a></td>
		<td><a class="buttons" <a onclick="return confirm('Yakin ingin Menghapus Artikel dengan Judul <?=$key['judul'];?> ?')" href="delete.php?id=<?=$key['id'];?>">Delete</a></td>
		</tr>
		</table>
		</div>
		</div>
		<br>
	<?php
}
?>
	</body>
</html>