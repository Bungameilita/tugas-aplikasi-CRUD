<?php include ('koneksi.php');?>
<!DOCTYPE html>
<html>
<head>
    <title> UNIVERSITAS NEGERI</title>
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
    <center><h1>Tambah Data</h1></center>
    <form method="POST" action="proses_tambah.php" enctype="multipart/form-data">
    <section class ="base">
        <div>
            <label>NIM</label>
            <input type="text"  name="nim" required=""/>
        </div> 
        <div>
            <label>Nama Mahasiswa</label>
            <input type="text"  name="namamhs" required=""/>
        </div> 
        <div>
            <label>Jenis Kelamin</label>
            <input type="radio"  name="jenis_kelamin" value="1" required=""/> laki-laki
            <input type="radio"  name="jenis_kelamin" value="2" required=""/> perempuan
                
                
        </div> 
        <div>
            <label>Alamat</label>
            <input type="text"  name="alamat" required=""/>
        </div> 
        <div>
            <label>Kota</label>
            <input type="text"  name="kota" required=""/>
        </div> 
        <div>
            <label>Email</label>
            <input type="text"  name="email" required=""/>
        </div> 
        <div>
            <label>Foto</label>
            <input type="file"  name="foto" required=""/>
        </div> 
        <div>
            <button type="submit">Simpan Data</button>
        </div>
    </section>
</form>
</body>
</html>