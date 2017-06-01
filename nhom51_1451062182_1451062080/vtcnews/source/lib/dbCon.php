<?php 
$host='localhost';
$user='root';
$pass='';
$db='vtcnews';
$link=mysqli_connect($host,$user,$pass,$db);
$sql="SELECT * FROM `lienket`";

 mysqli_set_charset($link, "UTF8");
$result =mysqli_query($link,$sql);
 ?>
 