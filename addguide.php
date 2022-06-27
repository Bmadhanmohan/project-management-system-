<?php
 require 'init.php';
 
 $first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
 $mobile = $_POST['mobile'];
 $dept = $_POST['department'];
 $project_id = $_POST['project_id'];
 $guide_name=$first_name." ".$last_name;
 if($_FILES['file']['error'] > 0) { 
	echo 'Error during uploading, try again'; }
  
  //We won't use $_FILES['file']['type'] to check the file extension for security purpose
  
  //Set up valid image extensions
  $extsAllowed = array( 'jpg', 'jpeg', 'png', 'gif' );
  
  //Extract extention from uploaded file
	//substr return ".jpg"
	//Strrchr return "jpg"
	
  $extUpload = strtolower( substr( strrchr($_FILES['file']['name'], '.') ,1) ) ;
  
  //Check if the uploaded file extension is allowed
  
  if (in_array($extUpload, $extsAllowed) ) { 
  
  //Upload the file on the server
  $imgname = "{$_FILES['file']['name']}";
  $name = "uploads/images/{$_FILES['file']['name']}";
  $result = move_uploaded_file($_FILES['file']['tmp_name'], $name);
  
  
  if($result){ 	header('location: guides.php');}
	
  } else { echo 'File is not valid. Please try again'; }
  
  $username =$last_name;
  $password = $mobile;
  
 $query = $db->query("INSERT INTO guides(photo,last_name,guide_name,mobile,department,allocation,project_id) VALUES('$imgname','$last_name','$guide_name','$mobile','$dept',0,'$project_id')");
 $query1 = $db->query("INSERT INTO auth_guides(username,password)VALUES('$username','$password') ");	
 $query2 =$db->query("CREATE TABLE IF NOT EXISTS $username(id int(11) PRIMARY KEY,name varchar(100),mobile varchar(15),roll varchar(15),email varchar(200),address varchar(200),r0 varchar(10) DEFAULT NULL,r1 varchar(10) DEFAULT NULL,r2 varchar(10) DEFAULT NULL,r3 varchar(10) DEFAULT NULL,r int(4) DEFAULT 0,project_id int(11))");
 $query3=$db->query("ALTER TABLE $username MODIFY `id` int(11) AUTO_INCREMENT, AUTO_INCREMENT=1");
 if($query3){
            $query = $db->query("SELECT * FROM student where project_id='$project_id'");
             $rows = $query->fetchAll(PDO::FETCH_OBJ);
             foreach($rows as $row){
               $name = $row->name;
			   $roll = $row->roll;
			   $mobile = $row->mobile;
			   
			   $email = $row->email;
			   $address = $row->address;
               $department = $row->department;
               $p_id = $row->project_id;
             }
             $insert = $db->query("INSERT INTO $username(name,mobile,roll,email,address,r0,r1,r2,r3,r,project_id) VALUES('$name','$mobile','$roll','$email','$address',0,0,0,0,0,'$project_id')");
             
 }


 if($query){
  $update = $db->query("UPDATE project SET allocation = 2 WHERE id = '$project_id' ");
  $update = $db->query("UPDATE guides SET allocation = 1 WHERE project_id = '$project_id' ");
 	
 	echo 'true';
 }else{
 	echo 'false';
 }
 ?>
 