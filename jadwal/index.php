<?php
include('class_jadwal.php');

$jadwal=new class_jadwal;
$data=$jadwal->getAll();

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
        <p><a href="../home.php">Home</a></p>
        <h1>Jadwal Perkuliahan</h1>
        <p><a href="tambah.php"><button>Tambah</button></a></p>
        <table>
            <tr>
                <th>No</th>
                <th>Matkauliah</th>
                <th>Dosen</th>
                <th>ruang</th>
                <th>waktu</th>
                <th>Aksi</th>
            </tr>
            <?php 
            $no=0;
            while($rec=$data->fetch_array()){
                $no++;?>

                <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $rec['nama_matkul'];?></td>
                    <td><?php echo $rec['nama_dosen'];?></td>
                    <td><?php echo $rec['ruang'];?></td>
                    <td><?php echo $rec['waktu'];?></td>
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