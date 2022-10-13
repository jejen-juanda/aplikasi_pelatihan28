<?php
  include('../validasi.php');
  include('class_matkul.php');

  $matkul=new class_matkul;
  $data=$matkul->getMatkulByID($_GET['id']);
  $data_edit=$data->fetch_assoc();
?>
<html>
<head>
<title>Web Universitas Terpadu</title>
</head>
<body>
        <p><a href="../home.php">Home</a></p>
    <h1>Edit Matkul</h1>
    <form method="post" action="#">
        <input name="id" type="hidden" value="<?php echo $data_edit['id'];?>">
        <p><label>Kode Mata Kuliah</label> : </label> <input name="kode_matkul" type="text" value="<?php echo $data_edit['kode_matkul'];?>" title="kode mata kuliah"></p>
        <p><label>Nama Mata Kuliah</label> : </label><input name="nama_matkul" type="text" value="<?php echo $data_edit['nama_matkul'];?>" title="Nama Mata Kuliah"></p>
        <p><label>SKS: </label><input name="sks_matkul" type="number" value="<?php echo $data_edit['sks_matkul'];?>" title="jumlah SKS"></p>
        <p><button name="simpan" type="submit">simpan</button></p>
    </form>
        <p><a href="index.php">Back</a></p>
    <?php
  
    if(isset($_POST['simpan'])){
        //echo $_POST['id'].$_POST['kode_matkul'].$_POST['nama_matkul'].$_POST['sks_matkul'];
        $matkul->edit_data($_POST['id'],$_POST['kode_matkul'],$_POST['nama_matkul'],$_POST['sks_matkul']);
        header('location:index.php');

    }

    ?>
</body>
</html>