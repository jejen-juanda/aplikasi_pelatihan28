<?php
 include("class_matkul.php");
 $data=new class_matkul;
 $id=$_GET['id'];
 $data->delete_matkul($id);
//$data->delete($_GET['id']);
header('location:index.php');
?>
