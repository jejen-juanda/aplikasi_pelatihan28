<?php
 include("class_mahasiswa.php");
 $data=new class_mahasiswa;
 $id=$_GET['id'];
 $data->delete_mahasiswa($id);
//$data->delete($_GET['id']);
header('location:index.php');
?>