<?php
 require 'init.php';
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
 $tb=$_POST['tablename']; 
 
 $query = $db->query("SELECT * FROM guides where last_name='$tb' ");
             $rows = $query->fetchAll(PDO::FETCH_OBJ);
             foreach($rows as $row){

			   $project_id=$row->project_id;
             }
 
 $query = $db->query("INSERT INTO $tb(name,mobile,roll,email,address,r0,r1,r2,r3,r,project_id) VALUES('$name','$mobile','$roll','$email','$address','$r0','$r1','$r2','$r3','$r','$project_id')");
 $username = $roll;
 $password = $mobile;

 $query2 = $db->query("INSERT INTO auth_students(username,password) VALUES('$username','$username') ");
  $query4 = $db->query("INSERT INTO allstudents(roll,project_id) VALUES('$roll','$project_id') ");
 if($query){
 	echo 'true';
 }else{
 	echo 'false';
 }
 ?>