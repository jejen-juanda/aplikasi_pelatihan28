<?php
  include('../validasi.php');
  include('class_mahasiswa.php');

  $mahasiswa=new class_mahasiswa;
  $data=$mahasiswa->getMahasiswaByID($_GET['id']);
  $data_edit=$data->fetch_assoc();
?>
<html>
<head>
<title>Web Universitas Terpadu</title>
</head>

<body>
    <h1>Edit Mahasiswa</h1>
    <form method="post" action="#">
        <input name="id" type="hidden" value="<?php echo $data_edit['id'];?>">
        <p><label>NIM</label> : </label><input name="nim" type="text" value="<?php echo $data_edit['nim'];?>" title="NIM"></p>
        <p><label>Nama Mahasiswa</label> : </label><input name="nama_mahasiswa" type="text" value="<?php echo $data_edit['nama_mahasiswa'];?>" title="Nama"></p>
        <p><label>Jurusan</label> : </label><input name="jurusan" type="text" value="<?php echo $data_edit['jurusan'];?>" title="jurusan"></p>
        <p><label>Alamat Mahasiswa: </label><input name="alamat_mahasiswa" type="text" value="<?php echo $data_edit['alamat_mahasiswa'];?>" title="alamat"></p>
        <p><button name="simpan" type="submit">simpan</button></p>
    </form>

    <?php
  
    if(isset($_POST['simpan'])){
        //echo $_POST['id'].$_POST['nim'].$_POST['nama_mahasiswa'].$_POST['jurusan'].$_POST['alamat_mahasiswa'];
        $mahasiswa->edit_data($_POST['id'],$_POST['nim'],$_POST['nama_mahasiswa'],$_POST['jurusan'],$_POST['alamat_mahasiswa']);
        header('location:index.php');

    }

    ?>
</body>
</html>