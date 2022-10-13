<html>
<head>
<title>Web Universitas Terpadu</title>
</head>
<body>
        <p><a href="../home.php">Home</a></p>
    <h1>Tambah Matkul</h1>
    <form method="post" action="#">
        <input name="id" type="hidden">
        <p><label>Kode Matkul : </label><input name="kode_matkul" type="number" title="Kode Mata Kuliah"></p>
        <p><label>Matakuliah</label> : </label><input name="nama_matkul" type="text" title="Nama Mata Kuliah"></p>
        <p><label>SKS: </label><input name="sks_matkul" type="number" title="Jumlah SKS"></p>
        <p><button name="simpan" type="submit">simpan</button></p>
    </form>
        <p><a href="index.php">Back</a></p>
    <?php
    include('../validasi.php');
    include('class_matkul.php');

    $matkul=new class_matkul;

    if(isset($_POST['simpan'])){
        //echo $_POST['id'].$_POST['kode_matkul'].$_POST['nama_matkul'].$_POST['sks_matkul'];
        $matkul->add_data($_POST['id'],$_POST['kode_matkul'],$_POST['nama_matkul'],$_POST['sks_matkul']);
        header('location:index.php');

    }

    ?>
</body>
</html>