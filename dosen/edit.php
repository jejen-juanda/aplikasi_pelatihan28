<?php
  include('../validasi.php');
  include('class_dosen.php');
  $dosen=new class_dosen;
  $data=$dosen->getDosenByID($_GET['id']);
  $data_edit=$data->fetch_assoc();
?>
<html>
<head>
<title>Web Universitas Terpadu</title>
</head>
<body>
        <p><a href="../home.php">Home</a></p>
    <h1>Edit Dosen</h1>
    <form method="post" action="#">
        <input name="id" type="hidden" value="<?php echo $data_edit['id'];?>">
        <p><label>Kode Dosen</label> : </label><input name="kode_dosen" type="text" value="<?php echo $data_edit['kode_dosen'];?>" title="kode dosen"></p>
        <p><label>Nama Dosen</label> : </label><input name="nama_dosen" type="text" value="<?php echo $data_edit['nama_dosen'];?>" title="nama"></p>
        <p><label>Alamat Dosen: </label><input name="alamat_dosen" type="text" value="<?php echo $data_edit['alamat_dosen'];?>" title="alamat"></p>
        <p><button name="simpan" type="submit">simpan</button></p>
    </form>
        <p><a href="index.php">Back</a></p>
    <?php
  
    if(isset($_POST['simpan'])){
        //echo $_POST['id'].$_POST['kode_dosen'].$_POST['nama_dosen'].$_POST['alamat_dosen'];
        $dosen->edit_data($_POST['id'],$_POST['kode_dosen'],$_POST['nama_dosen'],$_POST['alamat_dosen']);
        header('location:index.php');

    }

    ?>
</body>
</html>