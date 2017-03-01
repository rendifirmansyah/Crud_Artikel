<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Tambah Artikel Baru</title>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: blue;
    width: 100%;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    font-size: 1.2rem;
    text-decoration: none;
}

li a:hover{
    background-color: #34b5b7;
}

.active {
    background-color: #4CAF50;
}

.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
.log {
    padding-left: 980px;
}

</style>
</head>
<center>

<body bgcolor=#91b5c3>


<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="tambahartikel.php">Tambah Artikel</a></li>
  <li class="log"><a href="logout2.php" style: padding-left:90px;>Logout</a></li>
</ul>
<div>
<form class="" action="save.php" method="post">
	<table>
		<tr>
		<div>
			<td><input type="text" name="judul" placeholder="Judul" required></td>
		</tr>
		<tr>
			<td><textarea name="isi" placeholder="Isi Artikel" style="width:450px;height:400px;" required></textarea></td>
		</tr>	
			<td><button name="submit" type="submit">Submit</button></td>
	</table>
</form>
</div>
</center>
</body>
</html>