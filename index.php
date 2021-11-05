<?php
    include('koneksi.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title> UNIVERSITAS NEGERI  </title>
    <style type="text/css">
        *{
            font-family: "Lucida Bright";
        }
        h1{
            text-transform: uppercase;
            color:lightcoral;
        }
        table{
            border: 1px solid grey;
            border-collapse: collapse;
            border-spacing: 15;
            width: 90%;
            margin:10px auto 10px auto;
        }
        table thead th{
            background-color: mistyrose;
            border: 1px solid grey;
            color: #336b6b;
            padding: 10px;
            text-align: left;
            text-shadow:1px 1px 1px #fff;
            
        }
        table tbody td{
            border:1px solid grey;
        }
        a{
            background-color:salmon;
            color: #fff;
            padding:5px;
            font-size: 13px;
        }
    </style>
</head>
<body>
    <center><h1>DATA MAHASISWA</h1></center>
    <center><a href="tambah.php">+ &nbsp; TAMBAH DATA</a></center>
    <br>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Kota</th>
                <th>Email</th>
                <th>Foto</th>
                <th>action</th>
            </tr>
        </thead>
    
        <tbody>
            <?php
                $query = "SELECT *  FROM mahasiswa ORDER BY id ASC";
                $result = mysqli_query($koneksi, $query);

                if(!$result){
                    die(" Query error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));

                }
                $no = 1;

                while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $row['nim']; ?></td>
                <td><?php echo $row['namamhs']; ?></td>
                <td><?php echo $row['jenis_kelamin']; ?></td>
                <td><?php echo $row['alamat']; ?></td>
                <td><?php echo $row['kota']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><img src="gambar/<?php echo $row['foto']?>" width="150px" height="120px" /></td>
                <td>
                    <a href="edit.php?id=<?php echo $row['id'];?>">Edit</a>
                    <a href="hapus.php?id=<?php echo $row['id'];?>"onclick="return confirm('anda yakin ingin menghapus data ini?')">Hapus</a>
                </td>
        </tr>
        <?php
            $no++;
            }
            ?>
        </body>
    </table>
</html>
