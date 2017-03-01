<?php
try {
    $koneksi = new PDO("mysql:host=localhost;port=3306;dbname=artikel","root","");
    //echo "koneksi berhasil";

    }catch(PDOException $e)
    {
    echo $e->getMessage();
    }
$id = $_GET['id'];

$data = $koneksi->prepare("SELECT * FROM artikel WHERE id='$id'");
$data->execute();
$row = $data->fetch(PDO::FETCH_OBJ);

// print_r($row);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Article Update</title>
</head>
<body bgcolor="cyan">
<font color="red" size="4">
<center>Article Update<hr>
    <form method="POST" action="update.php">
    <input type="hidden" name="id" value="<?=$row->id;?>">
        <table>
        <tr>
        <div>

            <td>Judul Artikel: <input type="text" name="judul" style="width:450px;" placeholder="Judul" value="<?=$row->judul;?>" required></td>
        </tr>
        <tr>
            <td>Isi Artikel: <textarea name="isi" placeholder="Isi Artikel" required style="width:450px;height:50px;" ><?=$row->isi;?> </textarea></td>
        </tr>
        <tr>
                <td><button type="submit" name="submit">Submit</button></td>
            </tr>

            </div>
        </tr>
    </table>
</form>
</center>
</body>
</html>