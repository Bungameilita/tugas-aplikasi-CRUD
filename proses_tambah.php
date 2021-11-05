<?php include 'koneksi.php';

    $nim =$_POST['nim'];
    $namamhs =$_POST['namamhs'];
    $jenis_kelamin =$_POST['jenis_kelamin'];
    $alamat =$_POST['alamat'];
    $kota =$_POST['kota'];
    $email =$_POST['email'];
    $foto =$_FILES['foto']['name'];

    if($foto !=""){
        $ekstensi_diperbolehkan = array('png','jpg','jpeg');
        $x = explode('.',$foto);
        $ekstensi = strtolower(end($x));
        $file_temp =$_FILES['foto']['tmp_name'];
        $angka_acak =rand(1,999);
        $nama_gambar_baru =$angka_acak.'-'.$foto;
        if(in_array($ekstensi,$ekstensi_diperbolehkan)==true){
            move_uploaded_file($file_temp, 'gambar/'.$nama_gambar_baru);
            $query ="INSERT INTO mahasiswa(nim, namamhs, jenis_kelamin, alamat, kota, email, foto) VALUES ('$nim','$namamhs','$jenis_kelamin','$alamat','$kota','$email','$nama_gambar_baru')";
            $result =mysqli_query($koneksi,$query);
            if(!$result){
                die(" Query error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));

            }else{
                echo "<script>alert('data berhasil ditambahkan.'); window.location='index.php'; </script>";
            }
        }else{
            echo "<script>alert('ekstensi gambar haya bisa jpeg,png,jpg); window.location='index.php'; </script>";
        }
    }else {
        echo "<script>alert('upload foto dulu !!'); window.location='index.php'; </script>";
    }
    
?>