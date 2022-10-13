<?php
  include('../validasi.php');
  include('class_user.php');

  $user=new class_user;
  $data=$user->getUserByID($_GET['id']);
  $data_edit=$data->fetch_assoc();
?>
<html>
<head>
<title>Web Universitas Terpadu</title>
</head>
<body>
        <p><a href="../home.php">Home</a></p>
    <h1>Edit User</h1>
    <form method="post" action="#">
        <input name="id" type="hidden" value="<?php echo $data_edit['id'];?>">
        <p><label>User Name</label> : </label><input name="user_name" type="text" value="<?php echo $data_edit['user_name'];?>" title="user name"></p>
        <p><label>password</label> : </label><input name="password" type="text" value="<?php echo $data_edit['password'];?>" title="password"></p>
        <p><button name="simpan" type="submit">simpan</button></p>
    </form>
        <p><a href="index.php">Back</a></p>
    <?php
  
    if(isset($_POST['simpan'])){
        //echo $_POST['id'].$_POST['user_name'].$_POST['password'];
        $user->edit_data($_POST['id'],$_POST['user_name'],$_POST['password']);
        header('location:index.php');
    }

    ?>
</body>
</html>