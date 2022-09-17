<?php
class koneksi{
    public $con;

    function __construct(){
        $this->con=new mysqli("localhost","root","","unpam");
    }

    function validasi_login($username,$password){
        $data=$this->con->query("select * from user where user_name='$username' and password='$password'");
        return $data;
    }
        function getAll(){
            $data=$this->con->query("select * from user");
            return $data;
        }

}
?>