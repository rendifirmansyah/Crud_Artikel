<?php
session_start();
if (!isset($_SESSION['username'])) {
  header('location: login.php');
}
else {
  $username = $_SESSION['username'];
}

try{
    $koneksi = new PDO("mysql:host=localhost;port=3306;dbname=artikel","root","");
    //echo "koneksi berhasil";
}catch(PDOException$e){
    echo $e->getMessage();
}

$id = $_GET['id'];

$data = $koneksi->prepare("SELECT * FROM artikel WHERE id='$id'");
$data->execute();
$row = $data->fetch(PDO::FETCH_OBJ);

?>
<!DOCTYPE html>
<html>
<head>
<style>

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
td a:hover{
  background-color:pink;
  font-color: orange;
}

li a {
    display: block;
    color: yellow;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
li a:hover{
  background-color:rgba(26, 188, 156,0.6);
}


  </style>

<title>Read More | <?=$row->judul;?></title>
<link rel="stylesheet" type="text/css" href="./css/readstyle.css">
</head>
<body>

<ul>
  <li><a class="active" href="index.php" style="font-size:1.5rem;">Home</a></li>
  <li><a href="tambahartikel.php" style="font-size:1.5rem;">New Article</a></li>
  <li><a href="logout2.php" style="margin-left:880px; font-size:1.5rem;">Logout</a></li>
</ul>

<br>

<div class="content">

  <div class="div-card" style="width:100%;">
    <header class="div-pri-content header-colour">
      <center><h3 class="judul">Judul: <?=$row->judul;?></h3></center>
    </header>
    <div class="contents">
      <p>Tanggal: <?=$row->tanggal;?></p>
      <hr>
      <div style="display:block;width:100%;">Isi: <?=$row->isi;?></div>
      <br>
</div>
<table style="width: 100%;color: #fff; background-color: ;">
<tr>
<td><a class="buttonss" href="edit.php?id=<?=$row->id;?>">Edit</a></td>
<td><a class="buttonss" onclick="return confirm('Yakin ingin Menghapus Artikel dengan Judul <?=$row->judul;?> ?')" href="delete.php?id=<?=$row->id;?>">Delete</a></td>
</tr>
    
</table>
</div>
</div>
<br><br><br>
<form method="POST" action="postkomentar.php">
  <input type="hidden" name="id_artikel" value="<?=$row->id;?>">
  <input type="hidden" name="komentator" value="<?=$_SESSION['username'];?>">
  <div class="div-pri-content">
  <div class="div-card">
  <table>
    <tr>
        <td><span style="color:green;font-size: 25px;">
              Komentar :
              </span></td>
    <td><textarea name="komentar" style="width:600px;height:150px;"></textarea></td>
    </tr>
        <tr>
            <td><br></td>
        </tr>
      <tr>
        <td><button name="submit" type="submit" class="button">Post</button></td>
      </tr>
  </table>
  </div>
  </div>
</form>
<br>
<?php
include 'komentar.php';
?>


</body>
</html>
