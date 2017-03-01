<?php

try {
	$koneksi = new PDO("mysql:host=localhost;port=3306;dbname=artikel","root","");
	//echo "koneksi berhasil";

	}catch(PDOException $e)
	{
	echo $e->getMessage();
	}
	$id = $_GET['id'];

$data = $koneksi->prepare("DELETE FROM artikel WHERE id='$id'");
$del = $data->execute();

if($del) {
			header("location:index.php");
		}else 
		{
			echo("gagal");
		}
?>