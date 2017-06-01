<?php 

if(!isset($_SESSION["idUser"])){
 require "login.php";
 }
 else 
 require "admin.php";

 ?>

