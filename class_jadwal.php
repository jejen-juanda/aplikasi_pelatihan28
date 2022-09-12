<?php
include('../koneksi.php');

class class_jadwal{
        public $con;
        function __construct(){
            $koneksi=new koneksi;
            $this->con=$koneksi->con;

        }

        function getAll(){
            $data=$this->con->query("Select j.id, j.ruang, j.waktu, m.nama as nama_matkul, d.nama as nama_dosen from jadwal j INNER JOIN matkul m on j.kode_matkul=m.kode_matkul INNER JOIN dosen d ON j.kode_dosen=d.kode_dosen ");
            return $data;
        }

        function getMatkul(){
            $data=$this->con->query("select * from matkul");
            return $data;
        }

        function getDosen(){
            $data=$this->con->query("select * from dosen");
            return $data;
        }

        function add_data($id,$kode_matkul,$kode_dosen,$ruang,$waktu){
            $this->con->query("insert into jadwal(id,kode_matkul,kode_dosen,ruang,waktu) values('$id','$kode_matkul','$kode_dosen','$ruang','$waktu')");
            return true;
        }

        function delete($id){
            $this->con->query("delete from jadwal where id='$id'");
            return true;
       
        }

        function getJadwalByID($id){
            $data=$this->con->query("Select j.id,j.kode_matkul,j.kode_dosen, j.ruang, j.waktu, m.nama as nama_matkul, d.nama as nama_dosen from jadwal j INNER JOIN matkul m on j.kode_matkul=m.kode_matkul INNER JOIN dosen d ON j.kode_dosen=d.kode_dosen where id='$id'");
            return $data;

        }

        function edit_data($id,$kode_matkul,$kode_dosen,$ruang,$waktu){
            $this->con->query("UPDATE jadwal SET id='$id', kode_matkul='$kode_matkul', kode_dosen='$kode_dosen', ruang='$ruang', waktu ='$waktu' WHERE id='$id'");
            return true;
        }

}
/*
$jadwal=new class_jadwal;
$data=$jadwal->getJadwalByID(1);
print_r($data->fetch_assoc());
*/
?>