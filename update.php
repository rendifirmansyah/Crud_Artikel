<?php
try {
    $koneksi = new PDO("mysql:host=localhost;port=3306;dbname=artikel","root","");
    //echo "koneksi berhasil";

    }catch(PDOException $e)
    {
    echo $e->GetMessage();
    }

    if (isset($_POST['submit'])) {
        $judul = $_POST['judul'];
        $isi = $_POST['isi'];

        $id = $_POST['id'];
 
        $sql = "UPDATE `artikel` SET `judul`='$judul',`isi` = '$isi' WHERE `artikel`.`id`='$id'";
        $ins = $koneksi->prepare($sql);
        $r = $ins->execute();
        if ($r) {
            header("location:index.php");
        }else{
            echo "gagal";
        }
       
    }
?>
