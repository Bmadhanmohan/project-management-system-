<?php
 require 'init.php'; 
 $mem_id=$_POST['mem_id'];
 $name = $_POST['name'];
 $mobile = $_POST['mobile'];
 $roll = $_POST['roll'];
 $email = $_POST['email'];
 $address = $_POST['address'];
 $r0=$_POST['r0'];
 $r1=$_POST['r1'];
 $r2=$_POST['r2'];
 $r3=$_POST['r3'];
 $r=$_POST['r'];
$tb=$_SESSION['user'];
 $query = $db->query("UPDATE $tb SET name = '$name',mobile='$mobile',roll='$roll',email='$email',address='$address',r0='$r0',r1='$r1',r2='$r2',r3='$r3',r='$r' WHERE id='$mem_id' ");
echo $query;
 if($query){
 	echo 'true';
 }else{
 	echo 'false';
 }