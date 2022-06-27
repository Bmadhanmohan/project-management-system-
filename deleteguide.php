<?php
 require 'init.php';
    $img = $_POST['img'];
	$name = $_POST['last_name'];
	$pass=$_POST['password'];
	$id = $_POST['id'];
	$project_id = $_POST['project_id'];


	$query = $db->query("DELETE FROM guides WHERE id = $id ");
	
	$query1 = $db->query("DELETE FROM auth_guides WHERE password=$pass ");
	$update = $db->query("UPDATE project SET allocation = 1 WHERE id = '$project_id' ");
	$update = $db->query("UPDATE project SET document = NULL  WHERE id = '$project_id' ");
	$update = $db->query("DELETE FROM uploads  WHERE project_id = '$project_id' ");
	$query2 = $db->query("DROP TABLE `$name` ");
	("uploads/images/".$img);
	if($query2){	header('location: guides.php');}
	
	
?>