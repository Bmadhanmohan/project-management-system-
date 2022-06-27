<?php
try{
  $db = new PDO('mysql:host=localhost;dbname=id17244010_project','id17244010_madhan','V1p2OBh{=aep!+jI');
  $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  die('<h4 style="color: #1111ff">Error connecting to the database. Please check app init file</h4>');
}
?>
