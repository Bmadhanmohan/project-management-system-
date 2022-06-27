<?php require 'init.php'; ?>
<?php include 'head.php'; ?>
<?php
if(isset($_GET['id']) AND !empty($_GET['id'])){
    $id = $_GET['id'];
    $tb=$_SESSION['user'];

    $query = $db->query("SELECT * FROM $tb WHERE id = '$id' ");
    $row = $query->fetchAll(PDO::FETCH_OBJ);
    foreach($row as $row){
        $name = $row->name;
        $mobile = $row->mobile;
        $roll = $row->roll;
        $email = $row->email;
        $address = $row->address;
        $r0 = $row->r0;
        $r1 = $row->r1;
        $r2 = $row->r2;
        $r3 = $row->r3;
        $r = $row->r;
        $id = $row->id;
    }
}else{
	header('location: members.php');
}
?>

<body>
<?php include 'dashboard_navbar.php'; ?>
<h3>Edit Members' Data</h3>
<?php include 'editmembers_form.php'; ?>
<?php include 'footer.php'; ?>