<?php  
//$getUsers=$_GET['txtUser'];
//echo 'Xin chao '.' ' .$getUsers;
//if(isset($_GET['txtUser']) && isset($_GET['txtPass']))
/*echo "login succesfully";
*/
//B1 KET NOI dAATABASE 

//$getUser=$_GET['txtUser'];
$host='localhost';
$user='root';
$pass='';
$db='vtcnews';
$link=mysqli_connect($host,$user,$pass,$db);
$sql="SELECT * FROM `lienket`";

 mysqli_set_charset($link, "UTF8");
include('config_db.php');


require('config_db.php');


include_once('config_db.php');



$result =mysqli_query($link,$sql);

?>
<table>
	<tr>
		<td>Link web</td>
		<td>Ten </td>
		<td>Url</td>
		<td>Xóa </td>
		<td>Sửa</td>
	</tr>
<?php 
while($row=mysqli_fetch_assoc($result))
{
?>
<tr>
	<td><?php echo $row['idWebLink']; ?></td>
	<td><?php echo $row['Ten']; ?></td>
	<td><?php echo $row['Url']; ?></td>
	<td><a href="xoa.php ?id=
	<?php 
	echo $row['idWebLink']; 
	?>">Xóa</a></td>
	<td><a href="sua.php ? id=??">Sửa</a></td>
</tr>
<?php 	
}
  ?>

</table>