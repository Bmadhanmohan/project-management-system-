<?php
 require 'init.php';
 $project_id = $_POST['p_id'];

 if($_FILES['file']['error'] > 0) { 
	echo 'Error during uploading, try again'; }
  
  //We won't use $_FILES['file']['type'] to check the file extension for security purpose
  
  //Set up valid image extensions
  $extsAllowed = array( 'doc','ppt', 'pptx', 'pdf' );
  
  //Extract extention from uploaded file
	//substr return ".jpg"
	//Strrchr return "jpg"
	
  $extUpload = strtolower( substr( strrchr($_FILES['file']['name'], '.') ,1) ) ;
  
  //Check if the uploaded file extension is allowed
  
  if (in_array($extUpload, $extsAllowed) ) { 
  
  //Upload the file on the server
  $imgname = "{$_FILES['file']['name']}";
  $name = "uploads/documents/{$_FILES['file']['name']}";
  $result = move_uploaded_file($_FILES['file']['tmp_name'], $name);
  
  if($result){ 	header('location: studentlogin.php');}
	
  } else { echo 'File is not valid. Please try again'; }
$query = $db->query("SELECT * FROM  project where id='$project_id' ");
            $rows = $query->fetchAll(PDO::FETCH_OBJ);
            foreach($rows as $row){
            $img=$row->document;
 
 $query = $db->query("UPDATE project SET document = '$imgname' WHERE id = '$project_id' ");

 unlink("uploads/documents/".$img);
}
 if($query){
     
  header('location: dashboard_std.php'); 

 }else{
 	echo 'false';
 }
 ?>

