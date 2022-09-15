<?php
include('class_jadwal.php');

$jadwal=new class_jadwal;
$dataMatkul=$jadwal->getMatkul();
$dataDosen=$jadwal->getDosen();

?>
<html>
<head>
<title>Web Universitas Terpadu</title>
</head>
    <body>
        <h1>Tambah Jadwal</h1>
        <form action="#" method="post">
        <input name="id" type="hidden" value="<?php echo $data_edit['id'];?>">
            <p><label>Pilih Matkul : </label>
        <select name="kode_matkul" title="Mata Kuliah">
            <?php
            while($rec =$dataMatkul->fetch_array()){?>
            <option value="<?php echo $rec['kode_matkul'] ;?>"><?php echo $rec['nama_matkul'] ;?></option>
           <?php }
            ?>       
        </select></p>

        <p><label>Pilih Dosen : </label>
        <select name="kode_dosen" title="dosen">
            <?php
            while($rec =$dataDosen->fetch_array()){?>
            <option value="<?php echo $rec['kode_dosen'] ;?>"><?php echo $rec['nama_dosen'] ;?></option>
           <?php }
            ?>       
        </select></p>
        <p><label>Ruang : </label><input type="text" name="ruang" title="ruangan"></p>
                    <p><label>Waktu : </label><input type="text" name="waktu" title="waktu"></p>
                    <p><button type="submit" name="simpan">Simpan</button></p>
        </form>
        <?php 
           if(isset($_POST['simpan'])){
     
            $jadwal->add_data($_POST['id'],$_POST['kode_matkul'],$_POST['kode_dosen'],$_POST['ruang'],$_POST['waktu']);
            header("location:index.php");
        }

        ?>

    </body>

</html>