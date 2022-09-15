<html>
<head>
<title>Web Universitas Terpadu</title>
</head>
<body>
    <h1>Tambah Dosen</h1>
    <form method="post" action="#">
        <input name="id" type="hidden">
        <p><label>Kode Dosen: </label><input name="kode_dosen" type="number" title="Kode Dosen"></p>
        <p><label>Nama Dosen</label> : </label><input name="nama_dosen" type="text" title="Nama"></p>
        <p><label>Alamat: </label><input name="alamat_dosen" type="text" title="alamat"></p>
        <p><button name="simpan" type="submit">simpan</button></p>
    </form>

    <?php
    include('../validasi.php');
    include('class_dosen.php');

    $dosen=new class_dosen;

    if(isset($_POST['simpan'])){
        //echo $_POST['kode_dosen'].$_POST['nama_dosen'].$_POST['alamat_dosen'];
        $dosen->add_data($_POST['id'],$_POST['kode_dosen'],$_POST['nama_dosen'],$_POST['alamat_dosen']);
        header('location:index.php');

    }

    ?>
</body>
</html>