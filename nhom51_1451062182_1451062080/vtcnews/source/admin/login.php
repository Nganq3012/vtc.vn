

//sau doctype

<?php 
if(isset($_POST["btnLogin"])){
$un=$_POST["txtUn"];
$pa=$_POST["txtPa"];
$pa=md5($pa);
$qr="SELECT * FROM Users where Username ='#un' AND Password ='$pa'";
$user=mysql_query($qr);
if(mysql_num_rows($user)==1){
	$row =mysql_fetch_array($user);
	$_SESSION["idUser"]=$row['idUser'];
	$_SESSION["Username"]=$row['Username'];
	$_SESSION["HoTen"]=$row['HoTen'];
	$_SESSION["idGroup"]=$row['idGroup'];
	
	
	

}


}
 ?>


<?php 
if(isset($_POST["btnExit"])){
unset($_SESSION["idUser"]);
unset($_SESSION["Username"]);
unset($_SESSION["HoTen"]);
unset($_SESSION["idGroup"]);
}
 ?>


