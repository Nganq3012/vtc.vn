<?php 
$host='localhost';
$user='root';
$pass='';
$db='vtcnews';
$link=mysqli_connect($host,$user,$pass,$db);

function TinTheoLoai_1Tin($idLT){
	$sql ="SELECT * FROM tin 
	WHERE idLT=$idLT
	ORDER BY idTin DESC
	LIMIT 0,1
	"; 
	$link=mysqli_connect('localhost','root','','vtcnews');
	mysqli_set_charset($link, "UTF8");
		//LAY TIN DAU TIEN 1 TIN
	return mysqli_query($link,$sql);
}

function TinTheoLoai_7Tin($idLT){
	$sql ="SELECT * FROM tin 
	WHERE idLT=$idLT
	ORDER BY idTin DESC
	LIMIT 1,7
	"; 
	$link=mysqli_connect('localhost','root','','vtcnews');
	mysqli_set_charset($link, "UTF8");
		//LAY TIN DAU TIEN 1 TIN
	return mysqli_query($link,$sql);
}

function TinTheoLoai_5Tin($idLT){
	$sql ="SELECT * FROM tin 
	WHERE idLT=$idLT
	ORDER BY idTin DESC
	LIMIT 1,5
	"; 
	$link=mysqli_connect('localhost','root','','vtcnews');
	mysqli_set_charset($link, "UTF8");
		//LAY TIN DAU TIEN 1 TIN
	return mysqli_query($link,$sql);
}
function TinTheoLoai_3Tin($idLT){
	$sql ="SELECT * FROM tin 
	WHERE idLT=$idLT
	ORDER BY idTin DESC
	LIMIT 1,3
	"; 
	$link=mysqli_connect('localhost','root','','vtcnews');
	mysqli_set_charset($link, "UTF8");
		//LAY TIN DAU TIEN 1 TIN
	return mysqli_query($link,$sql);
}

function TinTheoLoai_4Tin($idLT){
	$sql ="SELECT * FROM tin
	WHERE idLT=$idLT 
	ORDER BY idTin DESC
	LIMIT 1,3
	"; 
	$link=mysqli_connect('localhost','root','','vtcnews');
	mysqli_set_charset($link, "UTF8");
		//LAY TIN DAU TIEN 1 TIN
	return mysqli_query($link,$sql);
}

function TinTheoLoai_20Tin($idLT){
	$sql ="SELECT * FROM tin 
	WHERE idLT=$idLT
	ORDER BY idTin DESC
	LIMIT 0,20
	"; 
	$link=mysqli_connect('localhost','root','','vtcnews');
	mysqli_set_charset($link, "UTF8");
		//LAY TIN DAU TIEN 1 TIN
	return mysqli_query($link,$sql);
}



function TinXaHoi_1Tin_style(){
	$sql ="SELECT * FROM tin
	WHERE idLT=3 
	ORDER BY idTin DESC
	LIMIT 1,1
	"; 
	$link=mysqli_connect('localhost','root','','vtcnews');
	mysqli_set_charset($link, "UTF8");
		//LAY TIN DAU TIEN 1 TIN
	return mysqli_query($link,$sql);
}

function TinXaHoi_5Tin_nostyle(){
	$sql ="SELECT * FROM tin
	WHERE idLT=3 
	ORDER BY idTin DESC
	LIMIT 2,5
	"; 
	$link=mysqli_connect('localhost','root','','vtcnews');
	mysqli_set_charset($link, "UTF8");
		//LAY TIN DAU TIEN 1 TIN
	return mysqli_query($link,$sql);
}



function TinGiaiTri_1TinLon(){
	$sql ="SELECT * FROM tin
	WHERE idLT=8
	ORDER BY idTin DESC
	LIMIT 0,1
	"; 
	$link=mysqli_connect('localhost','root','','vtcnews');
	mysqli_set_charset($link, "UTF8");
		//LAY TIN DAU TIEN 1 TIN
	return mysqli_query($link,$sql);
}

function TinGiaiTri_1TinNho(){
	$sql ="SELECT * FROM tin
	WHERE idLT=8
	ORDER BY idTin DESC
	LIMIT 1,1
	"; 
	$link=mysqli_connect('localhost','root','','vtcnews');
	mysqli_set_charset($link, "UTF8");
		//LAY TIN DAU TIEN 1 TIN
	return mysqli_query($link,$sql);
}

function TinGiaiTri_4Tin(){
	$sql ="SELECT * FROM tin 
	WHERE idLT=8
	ORDER BY idTin DESC
	LIMIT 2,5
	"; 
	$link=mysqli_connect('localhost','root','','vtcnews');
	mysqli_set_charset($link, "UTF8");
		//LAY TIN DAU TIEN 1 TIN
	return mysqli_query($link,$sql);
}


function TinMoiNhat_10Tin(){
	$sql ="SELECT * FROM tin 
	ORDER BY idTin DESC
	LIMIT 0,10
	"; 
	$link=mysqli_connect('localhost','root','','vtcnews');
	mysqli_set_charset($link, "UTF8");
		//LAY TIN DAU TIEN 1 TIN
	return mysqli_query($link,$sql);
}

function TinSKHot_2Tin(){
	$sql ="SELECT * FROM tin 
	ORDER BY SoLanXem DESC
	LIMIT 0,2
	"; 
	$link=mysqli_connect('localhost','root','','vtcnews');
	mysqli_set_charset($link, "UTF8");
		//LAY TIN DAU TIEN 1 TIN
	return mysqli_query($link,$sql);
}

function TinMoiNhat_1Tin(){
	$sql ="SELECT * FROM tin 
	ORDER BY idTin DESC
	LIMIT 0,1
	"; 
	$link=mysqli_connect('localhost','root','','vtcnews');
	mysqli_set_charset($link, "UTF8");
		//LAY TIN DAU TIEN 1 TIN
	return mysqli_query($link,$sql);
}

function TinMoiNhat_3Tin(){
	$sql ="SELECT * FROM tin 
	ORDER BY idTin DESC
	LIMIT 1,3
	"; 
	$link=mysqli_connect('localhost','root','','vtcnews');
	mysqli_set_charset($link, "UTF8");
		//LAY TIN DAU TIEN 1 TIN
	return mysqli_query($link,$sql);
}
/*----------------------------------------------*/
function TinXemNhieuNhat_10Tin(){
	$sql ="SELECT * FROM tin 
	ORDER BY SoLanXem DESC
	LIMIT 0,10
	"; 
	$link=mysqli_connect('localhost','root','','vtcnews');
	mysqli_set_charset($link, "UTF8");
		//LAY TIN DAU TIEN 1 TIN
	return mysqli_query($link,$sql);
}


function VideoXemNhieuNhat_10Tin(){
	$sql ="SELECT * FROM tin 
	ORDER BY SoLanXem DESC
	LIMIT 0,10
	"; 
	$link=mysqli_connect('localhost','root','','vtcnews');
	mysqli_set_charset($link, "UTF8");
		//LAY TIN DAU TIEN 1 TIN
	return mysqli_query($link,$sql);
}




?>
