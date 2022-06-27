<?php
 require 'init.php';
	$id = $_POST['id'];
	$roll = $_POST['roll'];
	$pass = $_POST['password'];
	$project_id = $_POST['project_id'];


	$query = $db->query("DELETE FROM student WHERE id = $id ");
	$query2 = $db->query("DELETE FROM auth_students WHERE password= '$pass' ");
	$update = $db->query("UPDATE project SET allocation = 0,document=NULL WHERE id = '$project_id' ");
	if($update){	header('location: create-student.php');}

	
	
	
?>