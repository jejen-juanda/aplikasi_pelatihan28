<?php
 include("class_dosen.php");
 $data=new class_dosen;
 $id=$_GET['id'];
 $data->delete_dosen($id);
//$data->delete($_GET['id']);
header('location:index.php');
?>