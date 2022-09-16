<?php
 include("class_user.php");
 $data=new class_user;
 $id=$_GET['id'];
 $data->delete_user($id);
//$data->delete($_GET['id']);
header('location:index.php');
?>