<?php include 'koneksi.php';
$id =$_GET['id'];

    $query = "DELETE FROM mahasiswa WHERE id='$id'";
    $hasil_query = mysqli_query($koneksi,$query);

    if(!$hasil_query){
        die("gagal menghapus data : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
    }else{
        echo "<script>alert('data berhasil dihapus.');window.location='index.php';</script>";
    }
?>