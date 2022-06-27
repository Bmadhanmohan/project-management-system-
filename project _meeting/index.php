
<?php
try{
  $db = new PDO('mysql:host=localhost;dbname=id17244010_project','id17244010_madhan','V1p2OBh{=aep!+jI');
  $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  die('<h4 style="color: #1111ff">Error connecting to the database. Please check app init file</h4>');
}
include('config.php');
include('api.php');
$lastname=$_POST['lastname'];
$topic=$_POST['topic'];
$time=$_POST['time'];
$duration=$_POST['duration'];
$password=$_POST['password'];
$arr['topic']=$topic;
$arr['start_date']=$time;
$arr['duration']=$duration;
$arr['password']=$password;
$arr['type']='2';
$result=createMeeting($arr);
if(isset($result->id)){
   /* echo "<h3 style=position:relative;top:50;left:50>";
	echo "Join URL: <a href='".$result->join_url."'>".$result->join_url."</a><br/>";
	echo "Password: ".$result->password."<br/>";
	echo "Start Time: ".$result->start_time."<br/>";
	echo "Duration: ".$result->duration."min"."<br/>";
	echo "</h3>";
	*/
   $url=$result->join_url;
   $pass= $result->password;
   $dur= $result->duration;
   $time=$result->start_time;
   $update = $db->query("UPDATE guides SET meeting ='$url',time='$time',duration='$dur',pass='$pass'  WHERE last_name = '$lastname' ");
	if($update){
	   echo "successfully meeting created";
	}

}else{
	echo '<pre>';
	print_r($result);

}
?>