<html>
<head>
<title>Web Universitas Terpadu</title>
</head>
<body>
    <h1>Tambah User</h1>
    <form method="post" action="#">
        <input name="id" type="hidden">
        <p><label>User Name: </label><input name="user_name" type="text" title="User Name"></p>
        <p><label>Password</label> : </label><input name="password" type="text" title="Password"></p>
        <p><button name="simpan" type="submit">simpan</button></p>
    </form>

    <?php
    include('../validasi.php');
    include('class_user.php');

    $user=new class_user;

    if(isset($_POST['simpan'])){
        $user->add_data($_POST['id'],$_POST['user_name'],$_POST['password']);
        header('location:index.php');
    }

    ?>
</body>
</html>