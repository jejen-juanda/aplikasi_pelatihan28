<?php
include('class_dosen.php');

$dosen=new class_dosen;
$data=$dosen->getAll();


?>


<html>
    <head>
<title>Web Universitas Terpadu</title>
    <style>
        table, td, th {
            border: 1px solid;
            }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
            }
        </style>
    </head>
    <body>
        <h1>Data Dosen</h1>
     
        <p><a href="tambah.php"><button>Tambah</button></a></p>
        <table style="border:1px solid ;">
            <tr>
                <th>No</th>
                <th>Kode Dosen</th>
                <th>Nama</th>
                <th>alamat</th>
                <th>Aksi</th>
            </tr>
            <?php 
            $no=0;
            while($rec=$data->fetch_array()){
                $no++;?>

                <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $rec['kode_dosen'];?></td>
                    <td><?php echo $rec['nama_dosen'];?></td>
                    <td><?php echo $rec['alamat_dosen'];?></td>
                    <td>
                    <a href="edit.php?id=<?php echo $rec['id'];?>">Edit</a>
                    <a href="hapus.php?id=<?php echo $rec['id'];?>">hapus</a>
                </td>
                    
                </tr>
<?php
            }
            ?>
        </table>
    </body>
</html>