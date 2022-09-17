<?php
include('../koneksi.php');

class class_dosen{
        public $con;
        function __construct(){
            $koneksi=new koneksi;
            $this->con=$koneksi->con;
        }

        function getAll(){
            $data=$this->con->query("select * from dosen");
            return $data;
        }

        function add_data($id,$kode_dosen,$nama_dosen,$alamat_dosen){
            $this->con->query("insert into dosen(id,kode_dosen,nama_dosen,alamat_dosen) values('$id','$kode_dosen','$nama_dosen','$alamat_dosen')");
            return true;
        }

         function delete_dosen($id){
            $this->con->query("delete from dosen where id='$id'");
            return true;       
        }

        function getDosenByID($id){
            $data=$this->con->query("select * from dosen where id='$id'");
            return $data;
        }

        function edit_data($id,$kode_dosen,$nama_dosen,$alamat_dosen){
            $this->con->query("UPDATE dosen SET id= '$id', kode_dosen= '$kode_dosen', nama_dosen= '$nama_dosen', alamat_dosen= '$alamat_dosen' WHERE kode_dosen='$kode_dosen'");
            return true;
        }

}
/*
$dosen=new class_dosen;
$data=$dosen->getDosenByID(1);
print_r($data->fetch_assoc());
*/

?>