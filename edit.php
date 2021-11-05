<?php include 'koneksi.php';

    if(isset($_GET['id'])){
        $id=($_GET['id']);
        $query="SELECT *FROM mahasiswa WHERE id='$id'";
        $result=mysqli_query($koneksi,$query);
        if(!$result){
            die(" Query error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));

        }
        $data=mysqli_fetch_assoc($result);
            if(!count($data)){
                echo"<script>alert('data tidak ditemukan pada database');window.location ='index.php';</script>";
            }
    }else{
        echo"<script>alert('masukkan data id.');window.location ='index.php';</script>";
    }
    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <title>UNIVERSITAS NEGERI</title>
            <style type="text/css">
        *{
            font-family: "Lucida Bright";
        }
        h1{
            text-transform: uppercase;
            color:lightcoral;
        }
        button{
            background-color:burlywood;
            color:black;
            padding: 10px;
            text-decoration: none;
            font-size: 12px;
            border: 0px;
            margin-top: 20px;
        }
        label{
            margin-top: 10px;
            float:left;
            text-align:left;
            width: 100%
        }
        input{
            padding: 6px;
            width:100%;
            box-sizing: border-box;
            background:#f8f8f8;
            border : 2px solid grey;
            outline-color: black;
        }
        div{
            width: 100%;
            height: auto;
        }
        .base{
            width: 400px;
            height: auto;
            padding: 20px;
            margin-left: auto;
            margin-right:auto;
            background: #ededed;
        }
</style>
</head>
<body>
    <center><h1>EDIT DATA MAHASISWA <?php echo $data['nim'];?></h1><center>
        <form method="POST" action="proses_edit.php" enctype="multipart/form-data">
        <section class ="base">
           
        <div>
            <label>NIM</label>
            <input type="text"  name="nim"   autofocus="" required="" value="<?php echo $data['nim'];?>"/>
            <input name="id" value="<?php echo $data['id'];?>" hidden/>
        </div> 
        <div>
            <label>Nama Mahasiswa</label>
            <input type="text"  name="namamhs"   required="" value="<?php echo $data['namamhs'];?>"/>
        </div> 
        <div>
            <label>Jenis Kelamin</label>
            PEREMPUAN<input type="radio"  name="jenis_kelamin"   required="" value="<?php echo $data['jenis_kelamin'];?>" /> 
            LAKI-LAKI<input type="radio"  name="jenis_kelamin"   required="" value="<?php echo $data['jenis_kelamin'];?>"/> 
        </div> 
        <div>
            <label>Alamat</label>
            <input type="text"  name="alamat"  required="" value="<?php echo $data['alamat'];?>"/>
        </div> 
        <div>
            <label>Kota</label>
            <input type="text"  name="kota"   required="" value="<?php echo $data['kota'];?>"/>
        </div> 
        <div>
            <label>Email</label>
            <input type="text"  name="email"   required="" value="<?php echo $data['email'];?>"/>
        </div> 
        <div>
            <label>Foto</label>
            <img src="gambar/<?php echo $data['foto'];?>" style= "width: 120px;float:left;margin-bottom:5px;">
            <input type="file"  name="foto" required=""/>
            <i style="float: left;font-size:11px; color: red">abaikan jika tidak merubah foto</i>
        </div> 
        <div>
            <br>
            <button type="submit">Simpan Data</button>
        </div>
    </section>
</form>
</body>
    </html>