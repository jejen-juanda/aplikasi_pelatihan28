<?php
include('../koneksi.php');

class class_mahasiswa{
        public $con;

        function __construct(){
            $koneksi=new koneksi;
            $this->con=$koneksi->con;
        }

        function getAll(){
            $data=$this->con->query("select * from mahasiswa");
            return $data;
        }

        function add_data($id,$nim,$nama_mahasiswa,$jurusan,$alamat_mahasiswa){
            $this->con->query("insert into mahasiswa(id,nim,nama_mahasiswa,jurusan,alamat_mahasiswa) values('$id','$nim','$nama_mahasiswa','$jurusan','$alamat_mahasiswa')");
            return true;
        }

         function delete_mahasiswa($id){
            $this->con->query("delete from mahasiswa where id='$id'");
            return true;       
        }

        function getMahasiswaByID($id){
            $data=$this->con->query("select * from mahasiswa where id='$id'");
            return $data;
        }

        function edit_data($id,$nim,$nama_mahasiswa,$jurusan,$alamat_mahasiswa){
            $this->con->query("UPDATE mahasiswa SET id= '$id', nim= '$nim', nama_mahasiswa= '$nama_mahasiswa', jurusan='$jurusan', alamat_mahasiswa= '$alamat_mahasiswa' WHERE nim='$nim'");
            return true;
        }

}
/*
$mahasiswa=new class_mahasiswa;
$data=$mahasiswa->getMahasiswaByID(1);
print_r($data->fetch_assoc());
*/

?>