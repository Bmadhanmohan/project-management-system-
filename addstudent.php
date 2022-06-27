<?php
 require 'init.php';
 $f_name = $_POST['f_name'];
 $l_name = $_POST['l_name'];
 $std_dept = $_POST['std_dept'];
 $std_no = $_POST['std_no'];
 $mobile = $_POST['mobile'];
 $email = $_POST['email'];
 $address = $_POST['address'];
 $std_class = $_POST['std_class'];
 $date = date('Y-m-d');
 $project_id = $_POST['project_id'];
 $std_name=$f_name." ".$l_name;
 $query = $db->query("INSERT INTO student(name,roll,mobile,email,department,address,level,date,project_id) VALUES('$std_name','$std_no','$mobile','$email','$std_dept','$address','$std_class','$date','$project_id')");
 $username = $std_no;
$password = $mobile;
$query4 = $db->query("INSERT INTO allstudents(roll,project_id) VALUES('$std_no','$project_id') ");
 $query2 = $db->query("INSERT INTO auth_students(username,password) VALUES('$username','$username') ");
 

 if($query2){
 	$update = $db->query("UPDATE project SET allocation = 1 WHERE id = '$project_id' ");
 	echo 'true';

 }else{
 	echo 'false';
 }
 ?>

