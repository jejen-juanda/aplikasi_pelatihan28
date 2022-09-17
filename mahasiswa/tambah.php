<html>
<head>
<title>Web Universitas Terpadu</title>
</head>
<body>
    <h1>Tambah Mahasiswa</h1>
    <form method="post" action="#">
        <input name="id" type="hidden">
        <p><label>NIM : </label><input name="nim" type="number" title="NIM"></p>
        <p><label>Nama Mahasiswa</label> : </label><input name="nama_mahasiswa" type="text" title="Nama"></p>
        <p><label>jurusan: </label><input name="jurusan" type="text" title="jurusan"></p>
        <p><label>Alamat: </label><input name="alamat_mahasiswa" type="text" title="alamat"></p>
        <p><button name="simpan" type="submit">simpan</button></p>
    </form>

    <?php
    include('../validasi.php');
    include('class_mahasiswa.php');

    $mahasiswa=new class_mahasiswa;

    if(isset($_POST['simpan'])){
        //echo $_POST['nim'].$_POST['nama_mahasiswa'].$_POST['jurusan'].$_POST['alamat_mahasiswa'];
        $mahasiswa->add_data($_POST['id'],$_POST['nim'],$_POST['nama_mahasiswa'],$_POST['jurusan'],$_POST['alamat_mahasiswa']);
        header('location:index.php');

    }

    ?>
</body>
</html>