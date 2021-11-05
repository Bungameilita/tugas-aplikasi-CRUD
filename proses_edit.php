<?php include 'koneksi.php';
    $id=$_POST['id'];
    $nim =$_POST['nim'];
    $namamhs =$_POST['namamhs'];
    $jenis_kelamin =$_POST['jenis_kelamin'];
    $alamat =$_POST['alamat'];
    $kota =$_POST['kota'];
    $email =$_POST['email'];
    $foto =$_FILES['foto']['name'];

    if($foto !=""){
        $ekstensi_diperbolehkan = array('jpeg','png','jpg');
        $x = explode('.',$foto);
        $ekstensi = strtolower(end($x));
        $file_temp =$_FILES['foto']['tmp_name'];
        $angka_acak =rand(1,999);
        $nama_gambar_baru =$angka_acak.'-'.$foto;
        if(in_array($ekstensi,$ekstensi_diperbolehkan)==true){
            move_uploaded_file($file_temp, 'gambar/'.$nama_gambar_baru);
            $query ="UPDATE mahasiswa SET nim='$nim',namamhs='$namamhs',jenis_kelamin='$jenis_kelamin',alamat='$alamat',kota='$kota',email='$email',foto='$nama_gambar_baru' ";
            $query .= "WHERE id ='$id'";
            $result = mysqli_query($koneksi,$query);
            if(!$result){
                die(" Query error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));

            }else{
                echo "<script>alert('data berhasil ditambahkan.'); window.location='index.php'; </script>";
            }
        }else{
            echo "<script>alert('ekstensi gambar haya bisa jpeg,png,jpg); window.location='index.php'; </script>";
        }
    }else {
             $query ="UPDATE mahasiswa SET nim='$nim',namamhs='$namamhs',jenis_kelamin='$jenis_kelamin',alamat='$alamat',kota='$kota',email='$email'WHERE id ='$id'";
             $query .= "WHERE id ='$id'";
             $result =mysqli_query($koneksi,$query);
             if(!$result){
                die(" Query error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));

            } else{
                echo "<script>alert('data berhasil ditambahkan.'); window.location='index.php'; </script>";
            }
    }
    
?>