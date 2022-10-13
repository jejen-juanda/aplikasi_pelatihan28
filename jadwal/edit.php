<?php
include('class_jadwal.php');

$jadwal=new class_jadwal;
$dataMatkul=$jadwal->getMatkul();
$dataDosen=$jadwal->getDosen();
$dataEdit=$jadwal->getJadwalByID($_GET['id'])->fetch_assoc();

?>
<html>
<head>
<title>Web Universitas Terpadu</title>
</head>
    <body>
        <p><a href="../home.php">Home</a></p>
        <h1>Edit Jadwal</h1>
        <form action="#" method="post">
        <input name="id" type="hidden" value="<?php echo $data_edit['id'];?>">
            <p><label>Pilih Matkul : </label>
        <select name="kode_matkul" title="Mata Kuliah">
        <option value="<?php echo $dataEdit['kode_matkul'] ;?>"><?php echo $dataEdit['nama_matkul'] ;?></option>
            <?php
            while($rec =$dataMatkul->fetch_array()){?>
            <option value="<?php echo $rec['kode_matkul'] ;?>"><?php echo $rec['nama_matkul'] ;?></option>
           <?php }
            ?>       
        </select></p>
        <p><label>Pilih Dosen : </label>
        <select name="kode_dosen" title="dosen">
        <option value="<?php echo $dataEdit['kode_dosen'] ;?>"><?php echo $dataEdit['nama_dosen'] ;?></option>
            <?php
            while($rec =$dataDosen->fetch_array()){?>
            <option value="<?php echo $rec['kode_dosen'] ;?>"><?php echo $rec['nama_dosen'] ;?></option>
           <?php }
            ?>       
        </select></p>

        <p><label>Ruang : </label><input type="text" name="ruang" value="<?php echo $dataEdit['ruang'] ;?>" title="ruangan"></p>
                    <p><label>Waktu : </label><input type="text" name="waktu" value="<?php echo $dataEdit['waktu'] ;?>" title="waktu"></p>
                    <p><button type="submit" name="simpan">Simpan</button></p>                    
        </form>
        <p><a href="index.php">Back</a></p>
        <?php 
           if(isset($_POST['simpan'])){
            
            $jadwal->edit_data($_POST['id'],$_POST['kode_matkul'],$_POST['kode_dosen'],$_POST['ruang'],$_POST['waktu']);
            header("location:index.php");
        }

        ?>
        
    </body>
</html>