<?php
 require 'init.php';
 if(isset($_GET['id']) AND !empty($_GET['id'])){
	$id = $_GET['id'];
	$table = $_SESSION['user'];
	$query = $db->query("DELETE FROM $table WHERE id = $id ");

	header('location: members.php');
	
	
}

?>