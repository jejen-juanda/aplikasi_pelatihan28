<?php
include('../koneksi.php');

class class_user{
        public $con;
        function __construct(){
            $koneksi=new koneksi;
            $this->con=$koneksi->con;
        }

        function getAll(){
            $data=$this->con->query("select * from user");
            return $data;
        }

        function add_data($id,$user_name,$password){
            $this->con->query("insert into user(id,user_name,password) values('$id','$user_name','$password')");
            return true;
        }

         function delete_user($id){
            $this->con->query("delete from user where id='$id'");
            return true;
        }

        function getUserByID($id){
            $data=$this->con->query("select * from user where id='$id'");
            return $data;
        }

        function edit_data($id,$user_name,$password){
            $this->con->query("UPDATE user SET id= '$id', user_name= '$user_name', password= '$password' WHERE id='$id'");
            return true;
        }

}
/*
$user=new class_user;
$data=$user->getUserByID(1);
print_r($data->fetch_assoc());
*/

?>