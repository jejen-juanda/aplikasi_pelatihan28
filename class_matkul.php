<?php
include('../koneksi.php');

class class_matkul{
        public $con;
        function __construct(){
            $koneksi=new koneksi;
            $this->con=$koneksi->con;

        }

        function getAll(){
            $data=$this->con->query("select * from matkul");
            return $data;
        }

        function add_data($id,$kode_matkul,$nama_matkul,$sks_matkul){
            $this->con->query("insert into matkul(id,kode_matkul,nama_matkul,sks_matkul) values('$id','$kode_matkul','$nama_matkul','$sks_matkul')");
            return true;
        }
         function delete_matkul($id){
            $this->con->query("delete from matkul where id='$id'");
            return true;
       
        }

        function getMatkulByID($id){
            $data=$this->con->query("select * from matkul where id='$id'");
            return $data;

        }

        function edit_data($id,$kode_matkul,$nama_matkul,$sks_matkul){
            $this->con->query("UPDATE matkul SET id= '$id', kode_matkul= '$kode_matkul', nama_matkul= '$nama_matkul', sks_matkul='$sks_matkul' WHERE kode_matkul='$kode_matkul'");
            return true;
        }

}
/*
$matkul=new class_matkul;
$data=$matkul->getMatkulByID(1);
print_r($data->fetch_assoc());
*/


?>